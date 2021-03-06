<?php
/**
 * authentication.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 *
 */

use ProcessMaker\Core\System;
use ProcessMaker\Plugins\PluginRegistry;

try {
    $usr = '';
    $pwd = '';

    if (strpos($_SERVER['HTTP_REFERER'], 'home/login') !== false) {
        $urlLogin = '../home/login';
    } else {
        $urlLogin = (substr(SYS_SKIN, 0, 2) !== 'ux')? 'login' : '../main/login';
    }

    if (!$RBAC->singleSignOn) {
        setcookie("singleSignOn", '0', time() + (24 * 60 * 60), '/');
        if (!isset($_POST['form']) ) {
            G::SendTemporalMessage ('ID_USER_HAVENT_RIGHTS_SYSTEM', 'error');
            G::header('Location: login');
            die();
        }

        $frm = $_POST['form'];

        if (isset($frm['USR_USERNAME'])) {
            $usr = mb_strtolower(trim($frm['USR_USERNAME']), 'UTF-8');
            $pwd = trim($frm['USR_PASSWORD']);
        }
        /*----------------------------------********---------------------------------*/
        $uid = $RBAC->VerifyLogin($usr , $pwd);
        $RBAC->cleanSessionFiles(72); //cleaning session files older than 72 hours

        switch ($uid) {
            //The user does doesn't exist
            case -1:
                $errLabel = 'WRONG_LOGIN_CREDENTIALS';
                break;
            //The password is incorrect
            case -2:
                $errLabel = 'WRONG_LOGIN_CREDENTIALS';
                if (isset($_SESSION['__AUTH_ERROR__'])) {
                    G::SendMessageText($_SESSION['__AUTH_ERROR__'], "warning");
                    unset($_SESSION['__AUTH_ERROR__']);
                }
                break;
            //The user is inactive
            case -3:
                require_once 'classes/model/Users.php';
                $user = new Users();
                $aUser = $user->loadByUsernameInArray($usr);

                switch ($aUser['USR_STATUS']) {
                    case 'VACATION':
                        $uid = $aUser['USR_UID'];
                        $RBAC->changeUserStatus($uid, 1);
                        $aUser['USR_STATUS'] = 'ACTIVE';
                        $user->update($aUser);
                        break;
                    case 'INACTIVE':
                        $errLabel = 'ID_USER_INACTIVE';
                        break;
                }
                break;
            //The Due date is finished
            case -4:
                $errLabel = 'ID_USER_INACTIVE_BY_DATE';
                break;
            case -5:
                $errLabel = 'ID_AUTHENTICATION_SOURCE_INVALID';
                break;
            case -6:
                $errLabel = 'ID_ROLE_INACTIVE';
                break;
            case -7:
                $errLabel = 'ID_LECA';
                break;
        }

        //to avoid empty string in user field.  This will avoid a weird message "this row doesn't exist"
        if ( !isset($uid) ) {
            $uid = -1;
            $errLabel = 'WRONG_LOGIN_CREDENTIALS';
        }

        $_SESSION["USERNAME_PREVIOUS1"] = (isset($_SESSION["USERNAME_PREVIOUS2"]))? $_SESSION["USERNAME_PREVIOUS2"] : "";
        $_SESSION["USERNAME_PREVIOUS2"] = $usr;
        $_SESSION["FAILED_LOGINS"]      = (isset($frm['FAILED_LOGINS']))? $frm['FAILED_LOGINS'] : 0;

        if (!isset($uid) || $uid < 0) {
            if ($_SESSION["USERNAME_PREVIOUS1"] != "" && $_SESSION["USERNAME_PREVIOUS2"] != "" && $_SESSION["USERNAME_PREVIOUS1"] != $_SESSION["USERNAME_PREVIOUS2"]) {
                $_SESSION["FAILED_LOGINS"] = 0;
            }

            if (isset($_SESSION['FAILED_LOGINS']) && ($uid == -1 || $uid == -2)) {
                $_SESSION['FAILED_LOGINS']++;
            }
            if (!defined('PPP_FAILED_LOGINS')) {
                define('PPP_FAILED_LOGINS', 0);
            }
            if (PPP_FAILED_LOGINS > 0) {
                if ($_SESSION['FAILED_LOGINS'] >= PPP_FAILED_LOGINS) {
                    $oConnection = Propel::getConnection('rbac');
                    $oStatement  = $oConnection->prepareStatement("SELECT USR_UID FROM RBAC_USERS WHERE USR_USERNAME = '" . $usr . "'");
                    $oDataset    = $oStatement->executeQuery();
                    if ($oDataset->next()) {
                        $sUserUID = $oDataset->getString('USR_UID');
                        $oConnection = Propel::getConnection('rbac');
                        $oStatement  = $oConnection->prepareStatement("UPDATE RBAC_USERS SET USR_STATUS = 0 WHERE USR_UID = '" . $sUserUID . "'");
                        $oStatement->executeQuery();
                        $oConnection = Propel::getConnection('workflow');
                        $oStatement  = $oConnection->prepareStatement("UPDATE USERS SET USR_STATUS = 'INACTIVE' WHERE USR_UID = '" . $sUserUID . "'");
                        $oStatement->executeQuery();
                        unset($_SESSION['FAILED_LOGINS']);
                        $errLabel = G::LoadTranslation('ID_ACCOUNT') . ' "' . $usr . '" ' . G::LoadTranslation('ID_ACCOUNT_DISABLED_CONTACT_ADMIN');
                    }
                    //Log failed authentications
            	    $message  = "| Many failed authentication attempts for USER: " . $usr . " | IP: " . G::getIpAddress() . " |  WS: " . SYS_SYS;
            	    $message .= " | BROWSER: " . $_SERVER['HTTP_USER_AGENT'];

            	    G::log($message, PATH_DATA, 'loginFailed.log');
                }
            }

            if (strpos($_SERVER['HTTP_REFERER'], 'home/login') !== false) {
                $d = serialize(['u' => $usr, 'p' => $pwd, 'm' => G::LoadTranslation($errLabel)]);
                $urlLogin = $urlLogin . '?d=' . base64_encode($d);
            } else {
                G::SendTemporalMessage($errLabel, "warning");
            }

            $u = (array_key_exists('form', $_POST) && array_key_exists('URL', $_POST['form']))? 'u=' . urlencode(htmlspecialchars_decode($_POST['form']['URL'])) : '';

            if ($u != '') {
                $urlLogin = $urlLogin . ((preg_match('/^.+\?.+$/', $urlLogin))? '&' : '?') . $u;
            }

            G::header('Location: ' . $urlLogin);
            exit(0);
        }

        if (!isset( $_SESSION['WORKSPACE'] ) ) {
            $_SESSION['WORKSPACE'] = SYS_SYS;
        }

        //Execute the SSO Script from plugin
        $oPluginRegistry = PluginRegistry::loadSingleton();
        $lSession="";
        $loginInfo = new loginInfo ($usr, $pwd, $lSession  );
        if ($oPluginRegistry->existsTrigger ( PM_LOGIN )) {
            $oPluginRegistry->executeTriggers ( PM_LOGIN , $loginInfo );
        }
        EnterpriseClass::enterpriseSystemUpdate($loginInfo);
        initUserSession($uid, $usr);
    } else {
        setcookie("singleSignOn", '1', time() + (24 * 60 * 60), '/');
        $uid = $RBAC->userObj->fields['USR_UID'];
        $usr = $RBAC->userObj->fields['USR_USERNAME'];
        initUserSession($uid, $usr);
    }

    //Set default Languaje
    if (isset($frm['USER_LANG'])) {
        if ($frm['USER_LANG'] != '') {
            $lang = $frm['USER_LANG'];
            if($frm['USER_LANG'] == "default"){
                //Check the USR_DEFAULT_LANG
                require_once 'classes/model/Users.php';
                $user = new Users();
                $rsUser = $user->userLanguaje($_SESSION['USER_LOGGED']);
                $rsUser->next();
                $rowUser = $rsUser->getRow();
                if( isset($rowUser["USR_DEFAULT_LANG"]) &&  $rowUser["USR_DEFAULT_LANG"]!=''){
                    $lang = $rowUser["USR_DEFAULT_LANG"];
                } else {
                    //Check the login_defaultLanguage
                    $oConf = new Configurations();
                    $oConf->loadConfig($obj, 'ENVIRONMENT_SETTINGS', '');
                    if (isset($oConf->aConfig["login_defaultLanguage"]) && $oConf->aConfig["login_defaultLanguage"] != "") {
                        $lang = $oConf->aConfig["login_defaultLanguage"];
                    }else{
                        if(SYS_LANG != ''){
                            $lang = SYS_LANG;
                        }else{
                            $lang = 'en';
                        }
                    }
                }
            } else {
                $lang = $frm['USER_LANG'];
            }
        }
    } else {
        if (defined("SYS_LANG") && SYS_LANG != "") {
            $lang = SYS_LANG;
        } else {
            $lang = 'en';
        }
    }

    /*----------------------------------********---------------------------------*/

    //Set User Time Zone
    $user = UsersPeer::retrieveByPK($_SESSION['USER_LOGGED']);

    if (!is_null($user)) {
        $userTimeZone = $user->getUsrTimeZone();

        if (trim($userTimeZone) == '') {
            $arraySystemConfiguration = System::getSystemConfiguration('', '', SYS_SYS);

            $userTimeZone = $arraySystemConfiguration['time_zone'];
        }

        $_SESSION['USR_TIME_ZONE'] = $userTimeZone;
    }

    /*----------------------------------********---------------------------------*/

    //Set data
    $aUser = $RBAC->userObj->load($_SESSION['USER_LOGGED']);
    $RBAC->loadUserRolePermission($RBAC->sSystem, $_SESSION['USER_LOGGED']);
    //$rol = $RBAC->rolesObj->load($RBAC->aUserInfo['PROCESSMAKER']['ROLE']['ROL_UID']);
    $_SESSION['USR_FULLNAME'] = $aUser['USR_FIRSTNAME'] . ' ' . $aUser['USR_LASTNAME'];
    //$_SESSION['USR_ROLENAME'] = $rol['ROL_NAME'];

    unset($_SESSION['FAILED_LOGINS']);

    // Assign the uid of user to userloggedobj
    $RBAC->loadUserRolePermission($RBAC->sSystem, $uid);
    $res = $RBAC->userCanAccess('PM_LOGIN/strict');
    if ($res != 1 ) {
        if ($res == -2) {
            G::SendTemporalMessage ('ID_USER_HAVENT_RIGHTS_SYSTEM', "error");
        } else {
            G::SendTemporalMessage ('ID_USER_HAVENT_RIGHTS_PAGE', "error");
        }
        G::header  ("location: login.html");
        die;
    }

    /**log in table Login**/
    require_once 'classes/model/LoginLog.php';
    $weblog=new LoginLog();
    $aLog['LOG_UID']            = G::generateUniqueID();
    $aLog['LOG_STATUS']         = 'ACTIVE';
    $aLog['LOG_IP']             = G::getIpAddress();
    $aLog['LOG_SID']            = session_id();
    $aLog['LOG_INIT_DATE']      = date('Y-m-d H:i:s');
    //$aLog['LOG_END_DATE']       = '0000-00-00 00:00:00';
    $aLog['LOG_CLIENT_HOSTNAME']= $_SERVER['HTTP_HOST'];
    $aLog['USR_UID']            = $_SESSION['USER_LOGGED'];
    $weblog->create($aLog);
    /**end log**/

    //**** defining and saving server info, this file has the values of the global array $_SERVER ****
    //this file is useful for command line environment (no Browser), I mean for triggers, crons and other executed over command line

    $_CSERVER = $_SERVER;
    unset($_CSERVER['REQUEST_TIME']);
    unset($_CSERVER['REMOTE_PORT']);
    $cput = serialize($_CSERVER);
    if (!is_file(PATH_DATA_SITE . '.server_info')) {
        file_put_contents(PATH_DATA_SITE . '.server_info', $cput);
    } else {
        $c = file_get_contents(PATH_DATA_SITE . '.server_info');
        if (G::encryptOld($c) != G::encryptOld($cput)) {
            file_put_contents(PATH_DATA_SITE . '.server_info', $cput);
        }
    }

    /* Check password using policy - Start */
    require_once 'classes/model/UsersProperties.php';
    $oUserProperty = new UsersProperties();

    // getting default user location
    if (isset($_REQUEST['form']['URL']) && $_REQUEST['form']['URL'] != '') {
        if (isset($_SERVER['HTTP_REFERER'])) {
            if (strpos($_SERVER['HTTP_REFERER'], 'processes/processes_Map?PRO_UID=') !== false) {
                $sLocation = $_SERVER['HTTP_REFERER'];
            } else {
                $sLocation = G::sanitizeInput($_REQUEST['form']['URL']);
            }
        } else {
            $sLocation = G::sanitizeInput($_REQUEST['form']['URL']);
        }
    } else {
        if (isset($_REQUEST['u']) && $_REQUEST['u'] != '') {
            $sLocation = G::sanitizeInput($_REQUEST['u']);
        } else {
            $sLocation = $oUserProperty->redirectTo($_SESSION['USER_LOGGED'], $lang);
        }
    }

    if ($RBAC->singleSignOn) {
        G::header('Location: ' . $sLocation);
        die();
    }

    $aUserProperty = $oUserProperty->loadOrCreateIfNotExists($_SESSION['USER_LOGGED'], array('USR_PASSWORD_HISTORY' => serialize(array(G::encryptOld($pwd)))));
    $aErrors       = $oUserProperty->validatePassword($_POST['form']['USR_PASSWORD'], $aUserProperty['USR_LAST_UPDATE_DATE'], $aUserProperty['USR_LOGGED_NEXT_TIME'], true);

    if (!empty($aErrors) && in_array("ID_PPP_CHANGE_PASSWORD_AFTER_NEXT_LOGIN", $aErrors)) {
        if (!defined('NO_DISPLAY_USERNAME')) {
            define('NO_DISPLAY_USERNAME', 1);
        }
        $aFields = array();
        $aFields['DESCRIPTION']  = '<span style="font-weight:normal;">';
        $aFields['DESCRIPTION'] .= G::LoadTranslation('ID_POLICY_ALERT').':<br /><br />';
        foreach ($aErrors as $sError) {
            switch ($sError) {
                case 'ID_PPP_MINIMUM_LENGTH':
                    $aFields['DESCRIPTION'] .= ' - ' . G::LoadTranslation($sError).': ' . PPP_MINIMUM_LENGTH . '<br />';
                    $aFields[substr($sError, 3)] = PPP_MINIMUM_LENGTH;
                    $aFields['PPP_MINIMUN_LENGTH'] = PPP_MINIMUM_LENGTH;
                    break;
                case 'ID_PPP_MAXIMUM_LENGTH':
                    $aFields['DESCRIPTION'] .= ' - ' . G::LoadTranslation($sError).': ' . PPP_MAXIMUM_LENGTH . '<br />';
                    $aFields[substr($sError, 3)] = PPP_MAXIMUM_LENGTH;
                    $aFields['PPP_MAXIMUN_LENGTH'] = PPP_MAXIMUM_LENGTH;
                    break;
                case 'ID_PPP_EXPIRATION_IN':
                    $aFields['DESCRIPTION'] .= ' - ' . G::LoadTranslation($sError).' ' . PPP_EXPIRATION_IN . ' ' . G::LoadTranslation('ID_DAYS') . '<br />';
                    $aFields[substr($sError, 3)] = PPP_EXPIRATION_IN;
                    break;
                default:
                    $aFields['DESCRIPTION'] .= ' - ' . G::LoadTranslation($sError).'<br />';
                    $aFields[substr($sError, 3)] = 1;
                    break;
            }
        }
        $aFields['DESCRIPTION'] .= '<br />' . G::LoadTranslation('ID_PLEASE_CHANGE_PASSWORD_POLICY') . '<br /><br /></span>';
        $G_PUBLISH = new Publisher;
        $version = explode('.', trim(file_get_contents(PATH_GULLIVER . 'VERSION')));
        $version = isset($version[0]) ? intval($version[0]) : 0;
        if ($version >= 3) {
            $G_PUBLISH->AddContent('xmlform', 'xmlform', 'login/changePasswordpm3', '', $aFields, 'changePassword');
        }else{
            $G_PUBLISH->AddContent('xmlform', 'xmlform', 'login/changePassword', '', $aFields, 'changePassword');
        }
        G::RenderPage('publish');
        die;
    }

    $configS = System::getSystemConfiguration('', '', SYS_SYS);
    $activeSession = isset($configS['session_block']) ? !(int)$configS['session_block']:true;
    if ($activeSession){
        setcookie("PM-TabPrimary", 101010010, time() + (24 * 60 * 60), '/');
    }

    $oPluginRegistry = PluginRegistry::loadSingleton();
    if ($oPluginRegistry->existsTrigger ( PM_AFTER_LOGIN )) {
        $oPluginRegistry->executeTriggers ( PM_AFTER_LOGIN , $_SESSION['USER_LOGGED'] );
    }

    G::header('Location: ' . $sLocation);
    die;
} catch ( Exception $e ) {
    $aMessage['MESSAGE'] = $e->getMessage();
    $G_PUBLISH = new Publisher;
    $G_PUBLISH->AddContent('xmlform', 'xmlform', 'login/showMessage', '', $aMessage );
    G::RenderPage( 'publish' );
    die;
}

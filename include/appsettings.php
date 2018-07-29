<?php

$dDebug = false;
$dSQL = '';

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
/**
 * Breadcrumb label templates.

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();

$lookupTableLinks = array();

$_gmdays = array(0 => 31, 1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31);

include getabspath('classes/layout.php');

//	custom labels
$custom_labels = array();
$custom_labels['English'] = array();
$custom_labels['Japanese'] = array();

define('NOT_TABLE_BASED_TNAME', '.global');

/*
 *  Define constants of page name
 */
define('PAGE_LIST', 'list');
define('PAGE_MASTER_INFO_LIST', 'masterlist');
define('PAGE_ADD', 'add');
define('PAGE_EDIT', 'edit');
define('PAGE_VIEW', 'view');
define('PAGE_MENU', 'menu');
define('PAGE_LOGIN', 'login');
define('PAGE_REGISTER', 'register');
define('PAGE_REMIND', 'remind');
define('PAGE_CHANGEPASS', 'changepwd');
define('PAGE_SEARCH', 'search');
define('PAGE_REPORT', 'report');
define('PAGE_MASTER_INFO_REPORT', 'masterreport');
define('PAGE_CHART', 'chart');
define('PAGE_PRINT', 'print');
define('PAGE_MASTER_INFO_PRINT', 'masterprint');
define('PAGE_RPRINT', 'rprint');
define('PAGE_MASTER_INFO_RPRINT', 'masterrprint');
define('PAGE_EXPORT', 'export');
define('PAGE_IMPORT', 'import');
define('PAGE_ADMIN_MEMBERS', 'admin_members');
define('PAGE_ADMIN_RIGHTS', 'admin_rights');
define('PAGE_INLINEADD', 'inlineadd');
define('PAGE_INLINEEDIT', 'inlineedit');
define('PAGE_DASHBOARD', 'dashboard');
define('PAGE_DASHMAP', 'map');

define('ADMIN_USERS', 'admin_users');

define('FORMAT_VIEW', 'ViewFormats');
define('FORMAT_EDIT', 'EditFormats');
/*
 *  Define constants of view format
 */
define('FORMAT_NONE', '');
define('FORMAT_DATE_SHORT', 'Short Date');
define('FORMAT_DATE_LONG', 'Long Date');
define('FORMAT_DATE_TIME', 'Datetime');
define('FORMAT_TIME', 'Time');
define('FORMAT_CURRENCY', 'Currency');
define('FORMAT_PERCENT', 'Percent');
define('FORMAT_HYPERLINK', 'Hyperlink');
define('FORMAT_EMAILHYPERLINK', 'Email Hyperlink');
define('FORMAT_FILE_IMAGE', 'File-based Image');
define('FORMAT_FILE_IMAGE_OLD', 'Old file-based Image');
define('FORMAT_DATABASE_IMAGE', 'Database Image');
define('FORMAT_DATABASE_FILE', 'Database File');
define('FORMAT_FILE', 'Document Download');
define('FORMAT_LOOKUP_WIZARD', 'Lookup wizard');
define('FORMAT_PHONE_NUMBER', 'Phone Number');
define('FORMAT_NUMBER', 'Number');
define('FORMAT_HTML', 'HTML');
define('FORMAT_CHECKBOX', 'Checkbox');
define('FORMAT_MAP', 'Map');
define('FORMAT_CUSTOM', 'Custom');
define('FORMAT_AUDIO', 'Audio file');
define('FORMAT_DATABASE_AUDIO', 'Database audio');
define('FORMAT_VIDEO', 'Video file');
define('FORMAT_VIDEO_HTML5', 'Video file HTML5');
define('FORMAT_DATABASE_VIDEO', 'Database video');
/*
 *  Define constants of edit format
 */
define('EDIT_FORMAT_NONE', '');
define('EDIT_FORMAT_TEXT_FIELD', 'Text field');
define('EDIT_FORMAT_TEXT_AREA', 'Text area');
define('EDIT_FORMAT_PASSWORD', 'Password');
define('EDIT_FORMAT_DATE', 'Date');
define('EDIT_FORMAT_TIME', 'Time');
define('EDIT_FORMAT_RADIO', 'Radio button');
define('EDIT_FORMAT_CHECKBOX', 'Checkbox');
define('EDIT_FORMAT_DATABASE_IMAGE', 'Database image');
define('EDIT_FORMAT_DATABASE_FILE', 'Database file');
define('EDIT_FORMAT_FILE', 'Document upload');
define('EDIT_FORMAT_LOOKUP_WIZARD', 'Lookup wizard');
define('EDIT_FORMAT_HIDDEN', 'Hidden field');
define('EDIT_FORMAT_READONLY', 'Readonly');

define('EDIT_DATE_SIMPLE', 0);
define('EDIT_DATE_SIMPLE_INLINE', 2);
define('EDIT_DATE_SIMPLE_DP', 11);
define('EDIT_DATE_DD', 12);
define('EDIT_DATE_DD_INLINE', 5);
define('EDIT_DATE_DD_DP', 13);

define('MODE_ADD', 0);
define('MODE_EDIT', 1);
define('MODE_SEARCH', 2);
define('MODE_LIST', 3);
define('MODE_PRINT', 4);
define('MODE_VIEW', 5);
define('MODE_INLINE_ADD', 6);
define('MODE_INLINE_EDIT', 7);
define('MODE_EXPORT', 8);

define('LOGIN_HARDCODED', 0);
define('LOGIN_TABLE', 1);

define('SECURITY_NONE', -1);
define('SECURITY_HARDCODED', 0);
define('SECURITY_TABLE', 1);
define('SECURITY_AD', 2);

define('ADVSECURITY_ALL', 0);
define('ADVSECURITY_VIEW_OWN', 1);
define('ADVSECURITY_EDIT_OWN', 2);
define('ADVSECURITY_NONE', 3);

define('ACCESS_LEVEL_ADMIN', 'Admin');
define('ACCESS_LEVEL_ADMINGROUP', 'AdminGroup');
define('ACCESS_LEVEL_USER', 'User');
define('ACCESS_LEVEL_GUEST', 'Guest');

define('nDATABASE_MySQL', 0);
define('nDATABASE_Oracle', 1);
define('nDATABASE_MSSQLServer', 2);
define('nDATABASE_Access', 3);
define('nDATABASE_PostgreSQL', 4);
define('nDATABASE_Informix', 5);
define('nDATABASE_SQLite3', 6);
define('nDATABASE_DB2', 7);
define('nDATABASE_Interbase', 16);

define('ADD_SIMPLE', 0);
define('ADD_INLINE', 1);
define('ADD_ONTHEFLY', 2);
define('ADD_MASTER', 3);
define('ADD_POPUP', 4);
define('ADD_DASHBOARD', 5);
define('ADD_MASTER_POPUP', 6);

//	Edit page modes
define('EDIT_SIMPLE', 0);    //	standalone Edit page
define('EDIT_INLINE', 1);    //	inlineEdit
define('EDIT_POPUP', 3);        //	edit page in popup
define('EDIT_DASHBOARD', 4);    //	edit page in dashboard
define('EDIT_SELECTED_SIMPLE', 5);
define('EDIT_SELECTED_POPUP', 6);

//	View page modes
define('VIEW_SIMPLE', 0);    //	standalone View page
define('VIEW_POPUP', 1);    //	View page in popup
define('VIEW_DASHBOARD', 2);    //	View page in dashboard

define('LOGIN_SIMPLE', 0);
define('LOGIN_POPUP', 1);
define('LOGIN_EMBEDED', 2);

define('REGISTER_SIMPLE', 0);
define('REGISTER_POPUP', 1);

define('REMIND_SIMPLE', 0);
define('REMIND_POPUP', 1);

define('titTABLE', 0);
define('titVIEW', 1);
define('titREPORT', 2);
define('titCHART', 3);
define('titDASHBOARD', 4);

define('TAB_TYPE_TAB', 0);
define('TAB_TYPE_SECTION', 1);
define('TAB_TYPE_STEP', 2);

// for report lib
define('REPORT_STEPPED', 0);
define('REPORT_BLOCK', 1);
define('REPORT_OUTLINE', 2);
define('REPORT_ALIGN', 3);
define('REPORT_TABULAR', 6);

define('TOTAL_NONE', -1);
define('TOTAL_MAX', 0);
define('TOTAL_AVG', 1);
define('TOTAL_SUM', 3);
define('TOTAL_MIN', 4);

define('LIST_SIMPLE', 0);
define('LIST_LOOKUP', 1);
define('LIST_DETAILS', 3);
define('LIST_AJAX', 4);
define('RIGHTS_PAGE', 5);
define('MEMBERS_PAGE', 6);
define('LIST_DASHBOARD', 7);
define('LIST_DASHDETAILS', 8);
define('MAP_DASHBOARD', 9);
define('LIST_MASTER', 10);
define('PRINT_MASTER', 11);

define('REPORT_SIMPLE', 0);
define('REPORT_POPUPDETAILS', 1);
define('REPORT_DASHBOARD', 2);
define('REPORT_DETAILS', 3);
define('REPORT_DASHDETAILS', 4);

define('CHART_SIMPLE', 0);
define('CHART_POPUPDETAILS', 1);
define('CHART_DASHBOARD', 2);
define('CHART_DETAILS', 3);
define('CHART_DASHDETAILS', 4);

define('DP_POPUP', 0);
define('DP_INLINE', 1);
define('DP_NONE', 2);

define('DL_SINGLE', 0);
define('DL_INDIVIDUAL', 1);
define('DL_NONE', 2);

define('SEARCH_SIMPLE', 0);
define('SEARCH_LOAD_CONTROL', 1);
define('SEARCH_DASHBOARD', 2);

define('LCT_DROPDOWN', 0);
define('LCT_AJAX', 1);
define('LCT_LIST', 2);
define('LCT_CBLIST', 3);
define('LCT_RADIO', 4);

define('LT_LISTOFVALUES', 0);
// lookup table is not added to the project
define('LT_LOOKUPTABLE', 1);
define('LT_QUERY', 2);

define('ENCRYPTION_NONE', 0);
define('ENCRYPTION_DB', 1);
define('ENCRYPTION_PHP', 2);
define('ENCRYPTION_ALG_DES', 1);
define('ENCRYPTION_ALG_AES', 128);

define('SETTING_TYPE_GLOBAL', 'global');
define('SETTING_TYPE_VIEW', 'view');
define('SETTING_TYPE_EDIT', 'edit');

define('otNone', 0);
define('otUseMobile', 1);
define('otUseDesktop', 2);

define('CONTAINS', 'Contains');
define('EQUALS', 'Equals');
define('STARTS_WITH', 'Starts with');
define('MORE_THAN', 'More than');
define('LESS_THAN', 'Less than');
define('BETWEEN', 'Between');
define('EMPTY_SEARCH', 'Empty');
define('NOT_CONTAINS', 'NOT Contains');
define('NOT_EQUALS', 'NOT Equals');
define('NOT_STARTS_WITH', 'NOT Starts with');
define('NOT_MORE_THAN', 'NOT More than');
define('NOT_LESS_THAN', 'NOT Less than');
define('NOT_BETWEEN', 'NOT Between');
define('NOT_EMPTY', 'NOT Empty');

define('SEARCHID_SIMPLE', 1);
define('SEARCHID_PANEL', 10);
define('SEARCHID_ALL', 10000);

/* Define constants for the filters settings */
//fiter totals
define('FT_NONE', 0);
define('FT_COUNT', 1);
define('FT_MIN', 2);
define('FT_MAX', 3);
//filter multiselect
define('FM_NONE', 0);
define('FM_ON_DEMAND', 1);
define('FM_ALWAYS', 2);
//filter format
define('FF_VALUE_LIST', 'Values list');
define('FF_BOOLEAN', 'Options list');
define('FF_INTERVAL_LIST', 'Interval list');
define('FF_INTERVAL_SLIDER', 'Interval slider');
//define filter interval limits' constants
define('FIL_NONE', 0);
define('FIL_MORE_THAN', 1);
define('FIL_LESS_THAN', 1);
define('FIL_LESS_THAN_OR_EQUAL', 2);
define('FIL_MORE_THAN_OR_EQUAL', 2);
define('FIL_REMAINDER', 3);
//define slider filter constants
define('FS_BOTH', 0);
define('FS_MIN_ONLY', 1);
define('FS_MAX_ONLY', 2);
//define slider step types
define('FSST_SECONDS', 0);
define('FSST_MINUTES', 1);
define('FSST_HOURS', 2);
define('FSST_DAYS', 3);
define('FSST_MONTHS', 4);
define('FSST_YEARS', 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);

define('gltHORIZONTAL', 0);
define('gltVERTICAL', 1);
define('gltCOLUMNS', 2);
define('gltFLEXIBLE', 3);

/* Define comstamts for hidden columns devices*/
define('DESKTOP', 1);
define('TABLET_10_IN', 2);
define('TABLET_7_IN', 3);
define('SMARTPHONE_LANDSCAPE', 4);
define('SMARTPHONE_PORTRAIT', 5);

/* Dashboard types */
define('DASHBOARD_LIST', 0);
define('DASHBOARD_CHART', 1);
define('DASHBOARD_REPORT', 2);
define('DASHBOARD_RECORD', 3);
define('DASHBOARD_SEARCH', 4);
define('DASHBOARD_DETAILS', 5);
define('DASHBOARD_MAP', 6);
define('DASHBOARD_SNIPPET', 7);

/* Define message type constants */
define('MESSAGE_INFO', 1);
define('MESSAGE_ERROR', 2);

/* Define print page and pdf page constants */
define('PRINT_PAGE_WIDTH', 700);
define('PRINT_PAGE_HEIGHT', 900);
define('PDF_PAGE_WIDTH', 750);
define('PDF_PAGE_HEIGHT', 1060);

/* Defined maps type */
define('GOOGLE_MAPS', 0);
define('OPEN_STREET_MAPS', 1);
define('BING_MAPS', 2);

/* Defined captcha type */
define('FLASH_CAPTCHA', 0);
define('RE_CAPTCHA', 1);

/* Define 'after record added/edited actions' constants*/
define('AA_TO_LIST', 0);
define('AA_TO_ADD', 1);
define('AA_TO_VIEW', 2);
define('AA_TO_EDIT', 3);
define('AA_TO_DETAIL_ADD', 4);
define('AA_TO_DETAIL_LIST', 5);

define('AE_TO_LIST', 0);
define('AE_TO_EDIT', 1);
define('AE_TO_VIEW', 2);
define('AE_TO_NEXT_EDIT', 3);
define('AE_TO_PREV_EDIT', 4);
define('AE_TO_DETAIL_LIST', 5);

define('BOOTSTRAP_LAYOUT', 3);

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);

define('WELCOME_MENU', 'welcome_page');

define('MENU_VERTICAL', 'v');
define('MENU_HORIZONTAL', 'h');
define('MENU_QUICKJUMP', 'q');

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 'SEND');
define('RPM_RESET', 'RESET');

$globalSettings = array();
$globalSettings['nLoginForm'] = 0;

$globalSettings['nLoginMethod'] = 1;

$globalSettings['popupPagesLayoutNames'] = array();

$globalSettings['popupPagesLayoutNames']['login'] = 'login_bootstrap';

$globalSettings['popupPagesLayoutNames']['register'] = 'register_bootstrap';

$globalSettings['popupPagesLayoutNames']['remind'] = 'remind_bootstrap';

//mail settings
$globalSettings['useBuiltInMailer'] = false;

$globalSettings['useCustomSMTPSettings'] = true;

$globalSettings['strSMTPUser'] = '';
$globalSettings['strSMTPServer'] = 'smtp.gmail.com';
$globalSettings['strSMTPPort'] = '587';
$globalSettings['strSMTPPassword'] = '';
$globalSettings['strFromEmail'] = '';

$globalSettings['useSSL'] = false;

$ajaxSearchStartsWith = true;

$globalSettings['isDynamicPerm'] = true;

$globalSettings['LandingPageType'] = 1;
$globalSettings['LandingTable'] = '';
$globalSettings['LandingPage'] = 'menu';
$globalSettings['LandingURL'] = 'menu.php';

$globalSettings['ProjectLogo'] = array();
$globalSettings['ProjectLogo']['English'] = 'Processmaker111_conflict-20170327-163208v97v97';
$globalSettings['ProjectLogo']['Japanese'] = 'BPMBOXES';

$globalSettings['createLoginPage'] = true;

$globalSettings['apiGoogleMapsCode'] = '';

$globalSettings['isFB'] = true;
$globalSettings['FBappId'] = trim('385911028592116'); //"181638395212821";
$globalSettings['FBappSecret'] = trim('3b83fea0821efe8bb7c83d180e4db6d1'); //"1ddfaaec68b068850f6360c69df85e6e";

//password global settings for register page
$globalSettings['pwdStrong'] = true;
$globalSettings['pwdLen'] = 8;
$globalSettings['pwdUnique'] = 4;
$globalSettings['pwdDigits'] = 2;

/*
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings['printDetailTableName'] = true;

/*
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings['dispFieldAlias'] = 'rrdf1';

/*
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings['handleSearchSuggestInLookup'] = true;

/*
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings['suggestStringSize'] = 40;

/*
 * The number of seach suggests displayed
 */
$globalSettings['searchSuggestsNumber'] = 10;

$globalSettings['override'] = array();

$globalSettings['mapProvider'] = 0;

$globalSettings['CaptchaSettings'] = array();
$globalSettings['CaptchaSettings']['type'] = 0;
$globalSettings['CaptchaSettings']['siteKey'] = '';
$globalSettings['CaptchaSettings']['secretKey'] = '';
$globalSettings['CaptchaSettings']['captchaPassesCount'] = '5';

$globalSettings['CaptchaSettings']['isEnabledOnLogin'] = false;
$globalSettings['CaptchaSettings']['isEnabledOnRegister'] = true;
$globalSettings['CaptchaSettings']['isEnabledOnRemind'] = false;

$wr_pagestylepath = 'OfficeBlueWave';
$wr_is_standalone = false;
$WRAdminPagePassword = '';

$cLoginTable = 'USERS';
$cDisplayNameField = 'USR_FIRSTNAME';
$cUserNameField = 'USR_UID';
$cPasswordField = 'USR_PASSWORD';
$cUserGroupField = 'USR_UID';
$cEmailField = 'USR_EMAIL';

if ($cDisplayNameField == '') {
    $cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType = 200;
$cUserNameFieldType = 200;
$cPasswordFieldType = 200;
$cEmailFieldType = 200;

            $cUserNameFieldType = 200;
                                                                                    $cPasswordFieldType = 200;
                                                                                                                        $cEmailFieldType = 200;

$gPermissionsRefreshTime = 0;
$gPermissionsRead = false;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = '';
$showCustomMarkerOnPrint = false;

$mlang_messages = array();
$mlang_charsets = array();

$menuAssignments = array();
$menuSelector = array();
$menuSelector['page'] = 'welcome_page';
$menuSelector['id'] = 'mainmenu';
$menuSelector['name'] = 'welcome_page';
$menuSelector['horizontal'] = '0';
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector['page'] = 'welcome_page';
$menuSelector['id'] = 'welcome_page';
$menuSelector['name'] = 'welcome_page';
$menuSelector['horizontal'] = '0';
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector['page'] = 'welcome_page';
$menuSelector['id'] = 'welcome_page';
$menuSelector['name'] = 'welcome_page';
$menuSelector['horizontal'] = '0';
$menuAssignments[] = $menuSelector;

$menuStyles = array();

$menuTreelikeFlags = array();
$menuTreelikeFlags['main'] = 1;

$menuDrillDownFlags = array();
$menuDrillDownFlags['main'] = 0;

$menuTreelikeFlags['menu1'] = 0;
$menuDrillDownFlags['menu1'] = 1;
$menuTreelikeFlags['welcome_page'] = 1;
$menuDrillDownFlags['welcome_page'] = 0;

// table captions
$tableCaptions = array();
$tableCaptions['Japanese'] = array();
$tableCaptions['Japanese'][''] = '';
$tableCaptions['Japanese']['ABE_CONFIGURATION'] = '構成';
$tableCaptions['Japanese']['ABE_REQUESTS'] = '阿部要求';
$tableCaptions['Japanese']['ABE_RESPONSES'] = '阿部応答';
$tableCaptions['Japanese']['ADDITIONAL_TABLES'] = '追加テーブル';
$tableCaptions['Japanese']['ADDONS_MANAGER'] = 'アドオンマネージャ';
$tableCaptions['Japanese']['ADDONS_STORE'] = 'アドオンストア';
$tableCaptions['Japanese']['APPLICATION'] = '作業';
$tableCaptions['Japanese']['APP_ASSIGN_SELF_SERVICE_VALUE'] = '自分自身への割当';
$tableCaptions['Japanese']['APP_CACHE_VIEW'] = '履歴一覧';
$tableCaptions['Japanese']['APP_DELAY'] = '遅延';
$tableCaptions['Japanese']['APP_DELEGATION'] = '委任';
$tableCaptions['Japanese']['USERS'] = 'ユーザー';
$tableCaptions['Japanese']['TRANSLATION'] = '翻訳';
$tableCaptions['Japanese']['admin_rights'] = '管理者権限';
$tableCaptions['Japanese']['BPMN_PROJECT'] = 'BPMNプロジェクト';
$tableCaptions['Japanese']['BPMN_PROCESS'] = 'BPMNプロセス';
$tableCaptions['Japanese']['CONTENT'] = 'コンテンツ';
$tableCaptions['Japanese']['PROCESS'] = 'プロセス';
$tableCaptions['Japanese']['PROCESS_CATEGORY'] = 'プロセスカテゴリー';
$tableCaptions['Japanese']['PROCESS_FILES'] = 'プロセスファイル';
$tableCaptions['Japanese']['PROCESS_OWNER'] = 'プロセスオーナー';
$tableCaptions['Japanese']['PROCESS_USER'] = 'プロセスのユーザー';
$tableCaptions['Japanese']['PROCESS_VARIABLES'] = 'プロセス変数';
$tableCaptions['Japanese']['TRIGGERS'] = 'トリガ';
$tableCaptions['Japanese']['USERS_PROPERTIES'] = 'ユーザーのプロパティ';
$tableCaptions['Japanese']['USR_REPORTING'] = 'USR報告';
$tableCaptions['Japanese']['WEB_ENTRY'] = 'ウェブエントリー';
$tableCaptions['Japanese']['TASK'] = '仕事';
$tableCaptions['Japanese']['TASK_USER'] = 'タスクユーザー';
$tableCaptions['Japanese']['BPMN_PARTICIPANT'] = 'BPMN参加';
$tableCaptions['Japanese']['BPMN_LANESET'] = 'BPMNのlaneset';
$tableCaptions['Japanese']['BPMN_LANE'] = 'BPMNレーン';
$tableCaptions['Japanese']['BPMN_GATEWAY'] = 'BPMNゲートウェイ';
$tableCaptions['Japanese']['BPMN_FLOW'] = 'BPMNの流れ';
$tableCaptions['Japanese']['BPMN_EXTENSION'] = 'BPMNの拡張';
$tableCaptions['Japanese']['BPMN_EVENT'] = 'BPMNイベント';
$tableCaptions['Japanese']['BPMN_DOCUMENTATION'] = 'BPMNのドキュメント';
$tableCaptions['Japanese']['BPMN_DIAGRAM'] = 'BPMN図';
$tableCaptions['Japanese']['BPMN_DATA'] = 'BPMNデータ';
$tableCaptions['Japanese']['BPMN_BOUND'] = 'BPMNバウンド';
$tableCaptions['Japanese']['BPMN_ACTIVITY'] = 'BPMNアクティビティ';
$tableCaptions['Japanese']['BPMN_ARTIFACT'] = 'BPMNアーティファクト';
$tableCaptions['Japanese']['DYNAFORM'] = 'ダイナフォーム';
$tableCaptions['Japanese']['APPLICATION1'] = 'アプリケーション1';
$tableCaptions['Japanese'][''] = '';
$tableCaptions['Japanese']['APP_DOCUMENT'] = 'ドキュメント';
$tableCaptions['Japanese']['APP_EVENT'] = 'イベント';
$tableCaptions['Japanese']['APP_FOLDER'] = 'appフォルダ';
$tableCaptions['Japanese']['APP_HISTORY'] = '履歴';
$tableCaptions['Japanese']['APP_MESSAGE'] = 'メッセージ';
$tableCaptions['Japanese']['APP_NOTES'] = 'ノート';
$tableCaptions['Japanese']['APP_OWNER'] = '所有者';
$tableCaptions['Japanese']['APP_SEQUENCE'] = 'シーケンス';
$tableCaptions['Japanese']['APP_SOLR_QUEUE'] = 'アプリのSolrのキュー';
$tableCaptions['Japanese']['APP_THREAD'] = 'スレッド';
$tableCaptions['Japanese']['APP_TIMEOUT_ACTION_EXECUTED'] = 'タイムアウト実行';
$tableCaptions['Japanese']['ISO_COUNTRY'] = 'ISO国';
$tableCaptions['Japanese']['ISO_LOCATION'] = 'イソ場所';
$tableCaptions['Japanese']['ISO_SUBDIVISION'] = 'イソ細分化';
$tableCaptions['Japanese']['LANGUAGE'] = '言語';
$tableCaptions['Japanese']['LEXICO'] = '語彙';
$tableCaptions['Japanese']['STEP'] = 'ステップ';
$tableCaptions['Japanese']['STEP_TRIGGER'] = 'ステップトリガ';
$tableCaptions['Japanese']['SUB_APPLICATION'] = 'サブアプリケーション';
$tableCaptions['Japanese']['ROUTE'] = 'ルート';
$tableCaptions['Japanese']['processmaker_audit'] = 'processmaker監査';
$tableCaptions['Japanese']['processmaker_locking'] = 'processmakerロック';
$tableCaptions['Japanese']['processmaker_uggroups'] = 'processmakerのuggroups';
$tableCaptions['Japanese']['processmaker_ugmembers'] = 'processmakerのugmembers';
$tableCaptions['Japanese']['processmaker_ugrights'] = 'processmakerのugrights';
$tableCaptions['Japanese']['PMT_MENU'] = 'PMTメニュー';
$tableCaptions['Japanese']['PMT_MENU1'] = 'PMTのMENU1';
$tableCaptions['Japanese']['CONTENT11'] = 'content11';
$tableCaptions['Japanese']['PRO_REPORTING'] = 'プロの報告';
$tableCaptions['Japanese']['LOGIN_LOG'] = 'ログインログ';
$tableCaptions['Japanese']['LOG_CASES_SCHEDULER'] = '例スケジューラのログを記録';
$tableCaptions['Japanese']['LIST_UNASSIGNED_GROUP'] = 'リスト割り当てられていないグループ';
$tableCaptions['Japanese']['LIST_UNASSIGNED'] = '未割り当てのリスト';
$tableCaptions['Japanese']['LIST_PAUSED'] = 'リストを一時停止';
$tableCaptions['Japanese']['LIST_PARTICIPATED_LAST'] = 'リストには、最後の参加しました';
$tableCaptions['Japanese']['LIST_PARTICIPATED_HISTORY'] = 'リストには、歴史に参加しました';
$tableCaptions['Japanese']['LIST_MY_INBOX'] = '私の受信トレイを一覧表示します';
$tableCaptions['Japanese']['LIST_INBOX'] = 'リストの受信トレイ';
$tableCaptions['Japanese']['LIST_COMPLETED'] = 'リスト完成';
$tableCaptions['Japanese']['LIST_CANCELED'] = 'リストキャンセル';
$tableCaptions['Japanese']['LICENSE_MANAGER'] = 'ライセンスマネージャ';
$tableCaptions['Japanese']['CONTENT2'] = 'content2';
$tableCaptions['Japanese']['RBAC_AUTHENTICATION_SOURCE'] = 'RBAC認証ソース';
$tableCaptions['Japanese']['RBAC_PERMISSIONS'] = 'RBACの権限';
$tableCaptions['Japanese']['RBAC_ROLES'] = 'RBACの役割';
$tableCaptions['Japanese']['RBAC_ROLES_PERMISSIONS'] = 'RBACの役割の権限';
$tableCaptions['Japanese']['RBAC_SYSTEMS'] = 'RBACシステム';
$tableCaptions['Japanese']['RBAC_USERS'] = 'RBACユーザー';
$tableCaptions['Japanese']['RBAC_USERS_ROLES'] = 'RBACユーザーの役割';
$tableCaptions['Japanese']['DB_SOURCE'] = 'DBソース';
$tableCaptions['Japanese']['DEPARTMENT'] = '部門';
$tableCaptions['Japanese']['GROUPWF'] = 'groupwf';
$tableCaptions['Japanese']['GROUP_USER'] = 'グループのユーザー';
$tableCaptions['Japanese']['MESSAGE_APPLICATION'] = 'メッセージアプリケーション';
$tableCaptions['Japanese']['MESSAGE_EVENT_DEFINITION'] = 'メッセージイベントの定義';
$tableCaptions['Japanese']['MESSAGE_EVENT_RELATION'] = 'メッセージイベントの関係';
$tableCaptions['Japanese']['MESSAGE_TYPE'] = 'メッセージタイプ';
$tableCaptions['Japanese']['SCRIPT_TASK'] = 'スクリプトタスク';
$tableCaptions['Japanese']['SEQUENCES'] = 'シーケンス';
$tableCaptions['Japanese']['SESSION'] = 'セッション';
$tableCaptions['Japanese']['STAGE'] = 'ステージ';
$tableCaptions['Japanese']['STEP_SUPERVISOR'] = 'ステップ監督';
$tableCaptions['Japanese']['SUB_PROCESS'] = 'サブプロセス';
$tableCaptions['Japanese']['SWIMLANES_ELEMENTS'] = 'スイムレーン要素';
$tableCaptions['Japanese']['FIELDS'] = 'フィールド';
$tableCaptions['Japanese']['FIELD_CONDITION'] = 'フィールド条件';
$tableCaptions['Japanese']['CATALOG'] = 'カタログ';
$tableCaptions['Japanese']['CASE_TRACKER_OBJECT'] = 'ケースのトラッカーオブジェクト';
$tableCaptions['Japanese']['CASE_TRACKER'] = 'ケーストラッカー';
$tableCaptions['Japanese']['CASE_SCHEDULER'] = 'ケーススケジューラ';
$tableCaptions['Japanese']['CASE_CONSOLIDATED'] = 'ケース連結';
$tableCaptions['Japanese']['REPORT_TABLE'] = 'レポートテーブル';
$tableCaptions['Japanese']['REPORT_VAR'] = 'レポートVAR';
$tableCaptions['Japanese']['WEB_ENTRY_EVENT'] = 'ウェブエントリーイベント';
$tableCaptions['Japanese']['CONFIGURATION'] = 'コンフィギュレーション';
$tableCaptions['Japanese']['DIM_TIME_COMPLETE'] = '終了リスト';
$tableCaptions['Japanese']['DIM_TIME_DELEGATE'] = 'DIM時間DELEGATE';
$tableCaptions['Japanese']['ELEMENT_TASK_RELATION'] = '要素タスクの関係';
$tableCaptions['Japanese']['TIMER_EVENT'] = 'タイマーイベント';
$tableCaptions['Japanese']['CONTENT1'] = 'content1';
$tableCaptions['Japanese']['CONTENT3'] = 'content3';
$tableCaptions['Japanese']['CONTENT4'] = 'content4';
$tableCaptions['Japanese']['CONTENT41'] = 'content41';
$tableCaptions['Japanese']['CONTENT411'] = 'content411';
$tableCaptions['Japanese']['PMT_COMMAND'] = 'PMTコマンド';
$tableCaptions['Japanese']['APP_CACHE_VIEW_INDEX'] = '作業中';
$tableCaptions['Japanese']['admin_members'] = '管理者のメンバー';
$tableCaptions['Japanese']['admin_users'] = '追加/編集するユーザー';
$tableCaptions['Japanese']['Dashboard'] = '計器盤';
$tableCaptions['Japanese']['PMT_LINE'] = 'PMTライン';
$tableCaptions['Japanese']['PMT_FIELD'] = 'PMTフィールド';
$tableCaptions['Japanese']['PMT_COMMAND_Report'] = 'PMTコマンドレポート';
$tableCaptions['Japanese']['APP_CACHE_VIEW_DRAFT'] = '作業前';
$tableCaptions['Japanese']['APP_CACHE_VIEW_PARTICIPATE'] = '全て';
$tableCaptions['Japanese']['APP_CACHE_VIEW_PAUSE'] = '停止中';
$tableCaptions['Japanese']['INPUT_DOCUMENT'] = '入力文書';
$tableCaptions['Japanese']['EMAIL_EVENT'] = 'Eメール・イベント';
$tableCaptions['Japanese']['DASHLET_INSTANCE'] = 'ダッシュレットインスタンス';
$tableCaptions['Japanese']['DASHBOARD_INDICATOR'] = 'ダッシュボードのインジケータ';
$tableCaptions['Japanese']['DASHLET'] = 'ダッシュレット';
$tableCaptions['Japanese']['DASHBOARD_DAS_IND'] = 'ダッシュボードダスIND';
$tableCaptions['Japanese']['DASHBOARD1'] = 'dashboard1';
$tableCaptions['Japanese']['general_log'] = '一般的なログ';
$tableCaptions['Japanese']['COLUMNS'] = 'カラム';
$tableCaptions['Japanese']['TRIGGERS1'] = 'トリガー';
$tableCaptions['Japanese']['TABLES'] = 'テーブル';
$tableCaptions['Japanese']['SCHEMATA'] = 'スキーマ';
$tableCaptions['Japanese']['PMT_ECCUBE'] = 'PMT ECCUBE';
$tableCaptions['Japanese']['PMT_ECCUBEBLOG'] = 'PMT ECCUBEBLOG';
$tableCaptions['Japanese']['modx_site_content'] = 'コンテンツ';
$tableCaptions['Japanese']['modx_site_htmlsnippets'] = 'チャンク';
$tableCaptions['Japanese']['modx_site_snippets'] = 'スニペット';
$tableCaptions['Japanese']['modx_site_templates'] = 'テンプレート';
$tableCaptions['Japanese']['modx_site_plugins'] = 'プラグイン';
$tableCaptions['Japanese']['modx_categories'] = 'カテゴリー';
$tableCaptions['Japanese']['APPLICATION_Chart'] = 'APPLICATION Chart';
$tableCaptions['Japanese']['APPLICATION_Report'] = 'APPLICATION Report';
$tableCaptions['Japanese']['modx_site_content_child'] = 'サブコンテンツ';
$tableCaptions['Japanese']['modx_site_content_dash'] = 'Modx Site Content Dash';
$tableCaptions['Japanese']['site_content_dashboard'] = 'Site Content Dashboard';
$tableCaptions['Japanese']['Dashboard2'] = 'Dashboard2';
$tableCaptions['Japanese']['BPMBOXEoc2'] = 'BPMBOXEoc2';
$tableCaptions['Japanese']['items'] = 'コンテンツ段落';
$tableCaptions['Japanese']['ppmain'] = 'Main';
$tableCaptions['Japanese']['pppaypal_info'] = 'Paypal Info';
$tableCaptions['Japanese']['ppadmin_main'] = 'Main';
$tableCaptions['Japanese']['ppsubcategory'] = 'Subcategory';
$tableCaptions['Japanese']['ppusers'] = 'Register';
$tableCaptions['Japanese']['ppcategory'] = 'Category';
$tableCaptions['Japanese']['ppcategory1'] = 'Ppcategory1';
$tableCaptions['Japanese']['API'] = 'API';
$tableCaptions['Japanese']['CALENDAR_ASSIGNMENTS'] = 'CALENDAR ASSIGNMENTS';
$tableCaptions['Japanese']['CALENDAR_BUSINESS_HOURS'] = 'CALENDAR BUSINESS HOURS';
$tableCaptions['Japanese']['CALENDAR_DEFINITION'] = 'CALENDAR DEFINITION';
$tableCaptions['Japanese']['CALENDAR_HOLIDAYS'] = 'CALENDAR HOLIDAYS';
$tableCaptions['Japanese']['GATEWAY'] = 'GATEWAY';
$tableCaptions['Japanese']['GMAIL_RELABELING'] = 'GMAIL RELABELING';
$tableCaptions['Japanese']['HOLIDAY'] = 'HOLIDAY';
$tableCaptions['Japanese']['MESSAGE_TYPE_VARIABLE'] = 'MESSAGE TYPE VARIABLE';
$tableCaptions['Japanese']['NOTIFICATION_DEVICE'] = 'NOTIFICATION DEVICE';
$tableCaptions['Japanese']['NOTIFICATION_QUEUE'] = 'NOTIFICATION QUEUE';
$tableCaptions['Japanese']['OAUTH_ACCESS_TOKENS'] = 'OAUTH ACCESS TOKENS';
$tableCaptions['Japanese']['OAUTH_AUTHORIZATION_CODES'] = 'OAUTH AUTHORIZATION CODES';
$tableCaptions['Japanese']['OAUTH_CLIENTS'] = 'OAUTH CLIENTS';
$tableCaptions['Japanese']['OAUTH_REFRESH_TOKENS'] = 'OAUTH REFRESH TOKENS';
$tableCaptions['Japanese']['OAUTH_SCOPES'] = 'OAUTH SCOPES';
$tableCaptions['Japanese']['OBJECT_PERMISSION'] = 'OBJECT PERMISSION';
$tableCaptions['Japanese']['OUTPUT_DOCUMENT'] = 'OUTPUT DOCUMENT';
$tableCaptions['Japanese']['PMOAUTH_USER_ACCESS_TOKENS'] = 'PMOAUTH USER ACCESS TOKENS';
$tableCaptions['Japanese']['SESSION_STORAGE'] = 'SESSION STORAGE';
$tableCaptions['Japanese']['SHADOW_TABLE'] = 'SHADOW TABLE';
$tableCaptions['Japanese']['APP_ASSIGN_SELF_SERVICE_VALUE_GROUP'] = 'APP ASSIGN SELF SERVICE VALUE GROUP';
$tableCaptions['Japanese']['modxdf_site_templates'] = 'Modxdf Site Templates';
$tableCaptions['Japanese']['modxdf_site_snippets'] = 'Modxdf Site Snippets';
$tableCaptions['Japanese']['modxdf_site_plugins'] = 'Modxdf Site Plugins';
$tableCaptions['Japanese']['modxdf_site_content'] = 'Modxdf Site Content';
$tableCaptions['Japanese']['modxdf_site_htmlsnippets'] = 'Modxdf Site Htmlsnippets';
$tableCaptions['Japanese']['modxdf_site_tmplvars'] = 'Modxdf Site Tmplvars';
$tableCaptions['Japanese']['WEBSOCKET'] = '検索用語';
$tableCaptions['Japanese']['PMT_TEST_BUSINESS_3'] = 'テスト業務3';
$tableCaptions['Japanese']['BPMBOXTEST2'] = 'BPMBOXTEST2';
$tableCaptions['Japanese']['PMT_SITE_REGISTRATION'] = 'サイト登録';
$tableCaptions['Japanese']['BPMCHAT'] = 'BPMCHAT';
$tableCaptions['Japanese']['HITWORD'] = 'HITWORD';
$tableCaptions['Japanese']['PLUGINS'] = 'PLUGINS';
$tableCaptions['Japanese']['TABLESPACES'] = 'TABLESPACES';
$tableCaptions['Japanese']['TABLE_CONSTRAINTS'] = 'TABLE CONSTRAINTS';
$tableCaptions['Japanese']['PMT_SITE'] = 'サイト';
$tableCaptions['Japanese']['wpfg_commentmeta'] = 'Wpfg Commentmeta';
$tableCaptions['Japanese']['wpfg_comments'] = 'Wpfg Comments';
$tableCaptions['Japanese']['wpfg_links'] = 'Wpfg Links';
$tableCaptions['Japanese']['wpfg_options'] = 'Wpfg Options';
$tableCaptions['Japanese']['wpfg_postmeta'] = 'Wpfg Postmeta';
$tableCaptions['Japanese']['wpfg_posts'] = 'Wpfg Posts';
$tableCaptions['Japanese']['wpfg_term_relationships'] = 'Wpfg Term Relationships';
$tableCaptions['Japanese']['wpfg_term_taxonomy'] = 'Wpfg Term Taxonomy';
$tableCaptions['Japanese']['wpfg_termmeta'] = 'Wpfg Termmeta';
$tableCaptions['Japanese']['wpfg_terms'] = 'Wpfg Terms';
$tableCaptions['Japanese']['wpfg_usermeta'] = 'Wpfg Usermeta';
$tableCaptions['Japanese']['wpfg_users'] = 'Wpfg Users';
$tableCaptions['Japanese']['PMT_ANNUAL_REVENUE'] = '年間の収入';
$tableCaptions['Japanese']['PMT_TEST_BUSINESS'] = 'PMT TEST BUSINESS';
$tableCaptions['Japanese']['PMT_SAGAWA'] = 'PMT SAGAWA';
$tableCaptions['Japanese']['PMT_RESIDENTS_BASIC_ATTRIBUTES'] = 'PMT RESIDENTS BASIC ATTRIBUTES';
$tableCaptions['Japanese']['PMT_QUOTE'] = '見積もり書';
$tableCaptions['Japanese']['PMT_SUBCONTRACTORS'] = 'PMT SUBCONTRACTORS';
$tableCaptions['Japanese']['PMT_MITUMORI1'] = 'MITUMORI1';
$tableCaptions['Japanese']['BPMBOXTRANS'] = 'BPMBOXTRANS';
$tableCaptions['Japanese']['Dashboard3'] = 'Dashboard3';
$tableCaptions['Japanese']['APPLICATION_Report1'] = 'APPLICATION Report1';
$tableCaptions['Japanese']['ROUTINES'] = 'ROUTINES';
$tableCaptions['Japanese']['PMT_INVOICE'] = '請求書';
$tableCaptions['Japanese']['PMT_INVOICE_ITEMS'] = '請求書明細';
$tableCaptions['Japanese']['PMT_TEST_SCREEN'] = 'テスト画面';
$tableCaptions['Japanese']['PMT_SPREADMAIN'] = '金買取';
$tableCaptions['Japanese']['PMT_SPREADSUB'] = '金買取明細';
$tableCaptions['Japanese']['PMT_PROGRAM_LIST'] = 'PMT PROGRAM LIST';
$tableCaptions['Japanese']['PMT_PMSEIKYUUSHO'] = 'PMT PMSEIKYUUSHO';
$tableCaptions['Japanese']['PMT_MST_BRMS'] = 'PMT MST BRMS';
$tableCaptions['Japanese']['PMT_QUOTE_DETAILS'] = 'PMT QUOTE DETAILS';
$tableCaptions['English'] = array();
$tableCaptions['English'][''] = '';
$tableCaptions['English']['APPLICATION_Report'] = 'APPLICATION Report';
$tableCaptions['English']['APPLICATION_Chart'] = 'APPLICATION Chart';
$tableCaptions['English']['modx_categories'] = 'カテゴリー';
$tableCaptions['English']['modx_site_content'] = 'コンテンツ';
$tableCaptions['English']['modx_site_content_child'] = 'Modx Site Content Child';
$tableCaptions['English']['modx_site_content_dash'] = 'Modx Site Content Dash';
$tableCaptions['English']['site_content_dashboard'] = 'Site Content Dashboard';
$tableCaptions['English']['Dashboard2'] = 'Dashboard2';
$tableCaptions['English']['BPMBOXEoc2'] = 'BPMBOXEoc2';
$tableCaptions['English']['items'] = 'Items';
$tableCaptions['English']['ppmain'] = 'Main';
$tableCaptions['English']['pppaypal_info'] = 'Paypal Info';
$tableCaptions['English']['ppadmin_main'] = 'Main';
$tableCaptions['English']['ppsubcategory'] = 'Subcategory';
$tableCaptions['English']['ppusers'] = 'Register';
$tableCaptions['English']['ppcategory'] = 'Category';
$tableCaptions['English']['ppcategory1'] = 'Ppcategory1';
$tableCaptions['English']['API'] = 'API';
$tableCaptions['English']['CALENDAR_ASSIGNMENTS'] = 'CALENDAR ASSIGNMENTS';
$tableCaptions['English']['CALENDAR_BUSINESS_HOURS'] = 'CALENDAR BUSINESS HOURS';
$tableCaptions['English']['CALENDAR_DEFINITION'] = 'CALENDAR DEFINITION';
$tableCaptions['English']['CALENDAR_HOLIDAYS'] = 'CALENDAR HOLIDAYS';
$tableCaptions['English']['GATEWAY'] = 'GATEWAY';
$tableCaptions['English']['GMAIL_RELABELING'] = 'GMAIL RELABELING';
$tableCaptions['English']['HOLIDAY'] = 'HOLIDAY';
$tableCaptions['English']['MESSAGE_TYPE_VARIABLE'] = 'MESSAGE TYPE VARIABLE';
$tableCaptions['English']['NOTIFICATION_DEVICE'] = 'NOTIFICATION DEVICE';
$tableCaptions['English']['NOTIFICATION_QUEUE'] = 'NOTIFICATION QUEUE';
$tableCaptions['English']['OAUTH_ACCESS_TOKENS'] = 'OAUTH ACCESS TOKENS';
$tableCaptions['English']['OAUTH_AUTHORIZATION_CODES'] = 'OAUTH AUTHORIZATION CODES';
$tableCaptions['English']['OAUTH_CLIENTS'] = 'OAUTH CLIENTS';
$tableCaptions['English']['OAUTH_REFRESH_TOKENS'] = 'OAUTH REFRESH TOKENS';
$tableCaptions['English']['OAUTH_SCOPES'] = 'OAUTH SCOPES';
$tableCaptions['English']['OBJECT_PERMISSION'] = 'OBJECT PERMISSION';
$tableCaptions['English']['OUTPUT_DOCUMENT'] = 'OUTPUT DOCUMENT';
$tableCaptions['English']['PMOAUTH_USER_ACCESS_TOKENS'] = 'PMOAUTH USER ACCESS TOKENS';
$tableCaptions['English']['SESSION_STORAGE'] = 'SESSION STORAGE';
$tableCaptions['English']['SHADOW_TABLE'] = 'SHADOW TABLE';
$tableCaptions['English']['APP_ASSIGN_SELF_SERVICE_VALUE_GROUP'] = 'APP ASSIGN SELF SERVICE VALUE GROUP';
$tableCaptions['English']['ABE_CONFIGURATION'] = '構成';
$tableCaptions['English']['ABE_REQUESTS'] = '阿部要求';
$tableCaptions['English']['ABE_RESPONSES'] = '阿部応答';
$tableCaptions['English']['ADDITIONAL_TABLES'] = '追加テーブル';
$tableCaptions['English']['ADDONS_MANAGER'] = 'アドオンマネージャ';
$tableCaptions['English']['ADDONS_STORE'] = 'アドオンストア';
$tableCaptions['English']['APPLICATION'] = '作業';
$tableCaptions['English']['APP_ASSIGN_SELF_SERVICE_VALUE'] = '自分自身への割当';
$tableCaptions['English']['APP_CACHE_VIEW'] = '履歴一覧';
$tableCaptions['English']['APP_DELAY'] = '遅延';
$tableCaptions['English']['APP_DELEGATION'] = '委任';
$tableCaptions['English']['USERS'] = 'ユーザー';
$tableCaptions['English']['TRANSLATION'] = '翻訳';
$tableCaptions['English']['admin_rights'] = '管理者権限';
$tableCaptions['English']['BPMN_PROJECT'] = 'BPMNプロジェクト';
$tableCaptions['English']['BPMN_PROCESS'] = 'BPMNプロセス';
$tableCaptions['English']['CONTENT'] = 'コンテンツ';
$tableCaptions['English']['PROCESS'] = 'プロセス';
$tableCaptions['English']['PROCESS_CATEGORY'] = 'プロセスカテゴリー';
$tableCaptions['English']['PROCESS_FILES'] = 'プロセスファイル';
$tableCaptions['English']['PROCESS_OWNER'] = 'プロセスオーナー';
$tableCaptions['English']['PROCESS_USER'] = 'プロセスのユーザー';
$tableCaptions['English']['PROCESS_VARIABLES'] = 'プロセス変数';
$tableCaptions['English']['TRIGGERS'] = 'トリガ';
$tableCaptions['English']['USERS_PROPERTIES'] = 'ユーザーのプロパティ';
$tableCaptions['English']['USR_REPORTING'] = 'USR報告';
$tableCaptions['English']['WEB_ENTRY'] = 'ウェブエントリー';
$tableCaptions['English']['TASK'] = '仕事';
$tableCaptions['English']['TASK_USER'] = 'タスクユーザー';
$tableCaptions['English']['BPMN_PARTICIPANT'] = 'BPMN参加';
$tableCaptions['English']['BPMN_LANESET'] = 'BPMNのlaneset';
$tableCaptions['English']['BPMN_LANE'] = 'BPMNレーン';
$tableCaptions['English']['BPMN_GATEWAY'] = 'BPMNゲートウェイ';
$tableCaptions['English']['BPMN_FLOW'] = 'BPMNの流れ';
$tableCaptions['English']['BPMN_EXTENSION'] = 'BPMNの拡張';
$tableCaptions['English']['BPMN_EVENT'] = 'BPMNイベント';
$tableCaptions['English']['BPMN_DOCUMENTATION'] = 'BPMNのドキュメント';
$tableCaptions['English']['BPMN_DIAGRAM'] = 'BPMN図';
$tableCaptions['English']['BPMN_DATA'] = 'BPMNデータ';
$tableCaptions['English']['BPMN_BOUND'] = 'BPMNバウンド';
$tableCaptions['English']['BPMN_ACTIVITY'] = 'BPMNアクティビティ';
$tableCaptions['English']['BPMN_ARTIFACT'] = 'BPMNアーティファクト';
$tableCaptions['English']['DYNAFORM'] = 'ダイナフォーム';
$tableCaptions['English']['APPLICATION1'] = 'アプリケーション1';
$tableCaptions['English']['APP_DOCUMENT'] = 'ドキュメント';
$tableCaptions['English']['APP_EVENT'] = 'イベント';
$tableCaptions['English']['APP_FOLDER'] = 'appフォルダ';
$tableCaptions['English']['APP_HISTORY'] = '履歴';
$tableCaptions['English']['APP_MESSAGE'] = 'メッセージ';
$tableCaptions['English']['APP_NOTES'] = 'ノート';
$tableCaptions['English']['APP_OWNER'] = '所有者';
$tableCaptions['English']['APP_SEQUENCE'] = 'シーケンス';
$tableCaptions['English']['APP_SOLR_QUEUE'] = 'アプリのSolrのキュー';
$tableCaptions['English']['APP_THREAD'] = 'スレッド';
$tableCaptions['English']['APP_TIMEOUT_ACTION_EXECUTED'] = 'タイムアウト実行';
$tableCaptions['English']['ISO_COUNTRY'] = 'ISO国';
$tableCaptions['English']['ISO_LOCATION'] = 'イソ場所';
$tableCaptions['English']['ISO_SUBDIVISION'] = 'イソ細分化';
$tableCaptions['English']['LANGUAGE'] = '言語';
$tableCaptions['English']['LEXICO'] = '語彙';
$tableCaptions['English']['STEP'] = 'ステップ';
$tableCaptions['English']['STEP_TRIGGER'] = 'ステップトリガ';
$tableCaptions['English']['SUB_APPLICATION'] = 'サブアプリケーション';
$tableCaptions['English']['ROUTE'] = 'ルート';
$tableCaptions['English']['processmaker_audit'] = 'processmaker監査';
$tableCaptions['English']['processmaker_locking'] = 'processmakerロック';
$tableCaptions['English']['processmaker_uggroups'] = 'processmakerのuggroups';
$tableCaptions['English']['processmaker_ugmembers'] = 'processmakerのugmembers';
$tableCaptions['English']['processmaker_ugrights'] = 'processmakerのugrights';
$tableCaptions['English']['PMT_MENU'] = 'PMTメニュー';
$tableCaptions['English']['PMT_MENU1'] = 'PMTのMENU1';
$tableCaptions['English']['CONTENT1'] = 'content1';
$tableCaptions['English']['CONTENT11'] = 'content11';
$tableCaptions['English']['CONTENT2'] = 'content2';
$tableCaptions['English']['CONTENT3'] = 'content3';
$tableCaptions['English']['PRO_REPORTING'] = 'プロの報告';
$tableCaptions['English']['LOGIN_LOG'] = 'ログインログ';
$tableCaptions['English']['LOG_CASES_SCHEDULER'] = '例スケジューラのログを記録';
$tableCaptions['English']['LIST_UNASSIGNED_GROUP'] = 'リスト割り当てられていないグループ';
$tableCaptions['English']['LIST_UNASSIGNED'] = '未割り当てのリスト';
$tableCaptions['English']['LIST_PAUSED'] = 'リストを一時停止';
$tableCaptions['English']['LIST_PARTICIPATED_LAST'] = 'リストには、最後の参加しました';
$tableCaptions['English']['LIST_PARTICIPATED_HISTORY'] = 'リストには、歴史に参加しました';
$tableCaptions['English']['LIST_MY_INBOX'] = '私の受信トレイを一覧表示します';
$tableCaptions['English']['LIST_INBOX'] = 'リストの受信トレイ';
$tableCaptions['English']['LIST_COMPLETED'] = 'リスト完成';
$tableCaptions['English']['LIST_CANCELED'] = 'リストキャンセル';
$tableCaptions['English']['LICENSE_MANAGER'] = 'ライセンスマネージャ';
$tableCaptions['English']['CONTENT4'] = 'content4';
$tableCaptions['English']['CONTENT41'] = 'content41';
$tableCaptions['English']['CONTENT411'] = 'content411';
$tableCaptions['English']['RBAC_AUTHENTICATION_SOURCE'] = 'RBAC認証ソース';
$tableCaptions['English']['RBAC_PERMISSIONS'] = 'RBACの権限';
$tableCaptions['English']['RBAC_ROLES'] = 'RBACの役割';
$tableCaptions['English']['RBAC_ROLES_PERMISSIONS'] = 'RBACの役割の権限';
$tableCaptions['English']['RBAC_SYSTEMS'] = 'RBACシステム';
$tableCaptions['English']['RBAC_USERS'] = 'RBACユーザー';
$tableCaptions['English']['RBAC_USERS_ROLES'] = 'RBACユーザーの役割';
$tableCaptions['English']['DB_SOURCE'] = 'DBソース';
$tableCaptions['English']['DEPARTMENT'] = '部門';
$tableCaptions['English']['GROUPWF'] = 'groupwf';
$tableCaptions['English']['GROUP_USER'] = 'グループのユーザー';
$tableCaptions['English']['MESSAGE_APPLICATION'] = 'メッセージアプリケーション';
$tableCaptions['English']['MESSAGE_EVENT_DEFINITION'] = 'メッセージイベントの定義';
$tableCaptions['English']['MESSAGE_EVENT_RELATION'] = 'メッセージイベントの関係';
$tableCaptions['English']['MESSAGE_TYPE'] = 'メッセージタイプ';
$tableCaptions['English']['SCRIPT_TASK'] = 'スクリプトタスク';
$tableCaptions['English']['SEQUENCES'] = 'シーケンス';
$tableCaptions['English']['SESSION'] = 'セッション';
$tableCaptions['English']['STAGE'] = 'ステージ';
$tableCaptions['English']['STEP_SUPERVISOR'] = 'ステップ監督';
$tableCaptions['English']['SUB_PROCESS'] = 'サブプロセス';
$tableCaptions['English']['SWIMLANES_ELEMENTS'] = 'スイムレーン要素';
$tableCaptions['English']['FIELDS'] = 'フィールド';
$tableCaptions['English']['FIELD_CONDITION'] = 'フィールド条件';
$tableCaptions['English']['CATALOG'] = 'カタログ';
$tableCaptions['English']['CASE_TRACKER_OBJECT'] = 'ケースのトラッカーオブジェクト';
$tableCaptions['English']['CASE_TRACKER'] = 'ケーストラッカー';
$tableCaptions['English']['CASE_SCHEDULER'] = 'ケーススケジューラ';
$tableCaptions['English']['CASE_CONSOLIDATED'] = 'ケース連結';
$tableCaptions['English']['REPORT_TABLE'] = 'レポートテーブル';
$tableCaptions['English']['REPORT_VAR'] = 'レポートVAR';
$tableCaptions['English']['WEB_ENTRY_EVENT'] = 'ウェブエントリーイベント';
$tableCaptions['English']['CONFIGURATION'] = 'コンフィギュレーション';
$tableCaptions['English']['DIM_TIME_COMPLETE'] = '終了リスト';
$tableCaptions['English']['DIM_TIME_DELEGATE'] = 'DIM時間DELEGATE';
$tableCaptions['English']['ELEMENT_TASK_RELATION'] = '要素タスクの関係';
$tableCaptions['English']['TIMER_EVENT'] = 'タイマーイベント';
$tableCaptions['English']['PMT_COMMAND'] = 'PMTコマンド';
$tableCaptions['English']['APP_CACHE_VIEW_INDEX'] = '作業中';
$tableCaptions['English']['admin_members'] = '管理者のメンバー';
$tableCaptions['English']['admin_users'] = '追加/編集するユーザー';
$tableCaptions['English']['Dashboard'] = '計器盤';
$tableCaptions['English']['PMT_LINE'] = 'PMTライン';
$tableCaptions['English']['PMT_FIELD'] = 'PMTフィールド';
$tableCaptions['English']['PMT_COMMAND_Report'] = 'PMTコマンドレポート';
$tableCaptions['English']['APP_CACHE_VIEW_DRAFT'] = '作業前';
$tableCaptions['English']['APP_CACHE_VIEW_PARTICIPATE'] = '全て';
$tableCaptions['English']['APP_CACHE_VIEW_PAUSE'] = '停止中';
$tableCaptions['English']['INPUT_DOCUMENT'] = '入力文書';
$tableCaptions['English']['EMAIL_EVENT'] = 'Eメール・イベント';
$tableCaptions['English']['DASHLET_INSTANCE'] = 'ダッシュレットインスタンス';
$tableCaptions['English']['DASHBOARD_INDICATOR'] = 'ダッシュボードのインジケータ';
$tableCaptions['English']['DASHLET'] = 'ダッシュレット';
$tableCaptions['English']['DASHBOARD_DAS_IND'] = 'ダッシュボードダスIND';
$tableCaptions['English']['DASHBOARD1'] = 'dashboard1';
$tableCaptions['English']['general_log'] = '一般的なログ';
$tableCaptions['English']['COLUMNS'] = 'カラム';
$tableCaptions['English']['TRIGGERS1'] = 'トリガー';
$tableCaptions['English']['TABLES'] = 'テーブル';
$tableCaptions['English']['SCHEMATA'] = 'スキーマ';
$tableCaptions['English']['PMT_ECCUBE'] = 'PMT ECCUBE';
$tableCaptions['English']['PMT_ECCUBEBLOG'] = 'PMT ECCUBEBLOG';
$tableCaptions['English']['modx_site_htmlsnippets'] = 'チャンク';
$tableCaptions['English']['modx_site_snippets'] = 'スニペット';
$tableCaptions['English']['modx_site_templates'] = 'テンプレート';
$tableCaptions['English']['modx_site_plugins'] = 'プラグイン';
$tableCaptions['English']['modxdf_site_templates'] = 'Modxdf Site Templates';
$tableCaptions['English']['modxdf_site_snippets'] = 'Modxdf Site Snippets';
$tableCaptions['English']['modxdf_site_plugins'] = 'Modxdf Site Plugins';
$tableCaptions['English']['modxdf_site_content'] = 'Modxdf Site Content';
$tableCaptions['English']['modxdf_site_htmlsnippets'] = 'Modxdf Site Htmlsnippets';
$tableCaptions['English']['modxdf_site_tmplvars'] = 'Modxdf Site Tmplvars';
$tableCaptions['English']['WEBSOCKET'] = 'SEARCHWORD';
$tableCaptions['English']['PMT_TEST_BUSINESS_3'] = 'PMT TEST BUSINESS 3';
$tableCaptions['English']['PMT_SITE_REGISTRATION'] = 'PMT SITE REGISTRATION';
$tableCaptions['English']['BPMCHAT'] = 'BPMCHAT';
$tableCaptions['English']['HITWORD'] = 'HITWORD';
$tableCaptions['English']['PLUGINS'] = 'PLUGINS';
$tableCaptions['English']['TABLESPACES'] = 'TABLESPACES';
$tableCaptions['English']['TABLE_CONSTRAINTS'] = 'TABLE CONSTRAINTS';
$tableCaptions['English']['PMT_SITE'] = 'PMT SITE';
$tableCaptions['English']['wpfg_commentmeta'] = 'Wpfg Commentmeta';
$tableCaptions['English']['wpfg_comments'] = 'Wpfg Comments';
$tableCaptions['English']['wpfg_links'] = 'Wpfg Links';
$tableCaptions['English']['wpfg_options'] = 'Wpfg Options';
$tableCaptions['English']['wpfg_postmeta'] = 'Wpfg Postmeta';
$tableCaptions['English']['wpfg_posts'] = 'Wpfg Posts';
$tableCaptions['English']['wpfg_term_relationships'] = 'Wpfg Term Relationships';
$tableCaptions['English']['wpfg_term_taxonomy'] = 'Wpfg Term Taxonomy';
$tableCaptions['English']['wpfg_termmeta'] = 'Wpfg Termmeta';
$tableCaptions['English']['wpfg_terms'] = 'Wpfg Terms';
$tableCaptions['English']['wpfg_usermeta'] = 'Wpfg Usermeta';
$tableCaptions['English']['wpfg_users'] = 'Wpfg Users';
$tableCaptions['English']['PMT_ANNUAL_REVENUE'] = 'PMT ANNUAL REVENUE';
$tableCaptions['English']['PMT_TEST_BUSINESS'] = 'PMT TEST BUSINESS';
$tableCaptions['English']['PMT_SAGAWA'] = 'PMT SAGAWA';
$tableCaptions['English']['PMT_RESIDENTS_BASIC_ATTRIBUTES'] = 'PMT RESIDENTS BASIC ATTRIBUTES';
$tableCaptions['English']['PMT_QUOTE'] = 'PMT QUOTE';
$tableCaptions['English']['PMT_SUBCONTRACTORS'] = 'PMT SUBCONTRACTORS';
$tableCaptions['English']['PMT_MITUMORI1'] = 'PMT MITUMORI1';
$tableCaptions['English']['BPMBOXTRANS'] = 'BPMBOXTRANS';
$tableCaptions['English']['Dashboard3'] = 'Dashboard3';
$tableCaptions['English']['APPLICATION_Report1'] = 'APPLICATION Report1';
$tableCaptions['English']['ROUTINES'] = 'ROUTINES';
$tableCaptions['English']['PMT_INVOICE'] = 'PMT INVOICE';
$tableCaptions['English']['PMT_INVOICE_ITEMS'] = 'PMT INVOICE ITEMS';
$tableCaptions['English']['PMT_TEST_SCREEN'] = 'PMT TEST SCREEN';
$tableCaptions['English']['PMT_SPREADMAIN'] = 'PMT SPREADMAIN';
$tableCaptions['English']['PMT_SPREADSUB'] = 'PMT SPREADSUB';
$tableCaptions['English']['PMT_PROGRAM_LIST'] = 'PMT PROGRAM LIST';
$tableCaptions['English']['PMT_PMSEIKYUUSHO'] = 'PMT PMSEIKYUUSHO';
$tableCaptions['English']['PMT_MST_BRMS'] = 'PMT MST BRMS';
$tableCaptions['English']['PMT_QUOTE_DETAILS'] = 'PMT QUOTE DETAILS';
$tableCaptions[''] = array();
$tableCaptions[''][''] = '';
$tableCaptions['']['ABE_CONFIGURATION'] = '構成';
$tableCaptions['']['PMT_MENU1'] = 'PMTのMENU1';
$tableCaptions['']['ppcategory'] = 'Category';
$tableCaptions['']['ppcategory1'] = 'Ppcategory1';
$tableCaptions['']['API'] = 'API';
$tableCaptions['']['CALENDAR_ASSIGNMENTS'] = 'CALENDAR ASSIGNMENTS';
$tableCaptions['']['CALENDAR_BUSINESS_HOURS'] = 'CALENDAR BUSINESS HOURS';
$tableCaptions['']['CALENDAR_DEFINITION'] = 'CALENDAR DEFINITION';
$tableCaptions['']['CALENDAR_HOLIDAYS'] = 'CALENDAR HOLIDAYS';
$tableCaptions['']['GATEWAY'] = 'GATEWAY';
$tableCaptions['']['GMAIL_RELABELING'] = 'GMAIL RELABELING';
$tableCaptions['']['HOLIDAY'] = 'HOLIDAY';
$tableCaptions['']['MESSAGE_TYPE_VARIABLE'] = 'MESSAGE TYPE VARIABLE';
$tableCaptions['']['NOTIFICATION_DEVICE'] = 'NOTIFICATION DEVICE';
$tableCaptions['']['NOTIFICATION_QUEUE'] = 'NOTIFICATION QUEUE';
$tableCaptions['']['OAUTH_ACCESS_TOKENS'] = 'OAUTH ACCESS TOKENS';
$tableCaptions['']['OAUTH_AUTHORIZATION_CODES'] = 'OAUTH AUTHORIZATION CODES';
$tableCaptions['']['OAUTH_CLIENTS'] = 'OAUTH CLIENTS';
$tableCaptions['']['OAUTH_REFRESH_TOKENS'] = 'OAUTH REFRESH TOKENS';
$tableCaptions['']['OAUTH_SCOPES'] = 'OAUTH SCOPES';
$tableCaptions['']['OBJECT_PERMISSION'] = 'OBJECT PERMISSION';
$tableCaptions['']['OUTPUT_DOCUMENT'] = 'OUTPUT DOCUMENT';
$tableCaptions['']['PMOAUTH_USER_ACCESS_TOKENS'] = 'PMOAUTH USER ACCESS TOKENS';
$tableCaptions['']['SESSION_STORAGE'] = 'SESSION STORAGE';
$tableCaptions['']['SHADOW_TABLE'] = 'SHADOW TABLE';
$tableCaptions['']['APP_ASSIGN_SELF_SERVICE_VALUE_GROUP'] = 'APP ASSIGN SELF SERVICE VALUE GROUP';
$tableCaptions['']['modxdf_site_templates'] = 'Modxdf Site Templates';
$tableCaptions['']['modxdf_site_snippets'] = 'Modxdf Site Snippets';
$tableCaptions['']['modxdf_site_plugins'] = 'Modxdf Site Plugins';
$tableCaptions['']['modxdf_site_content'] = 'Modxdf Site Content';
$tableCaptions['']['modxdf_site_htmlsnippets'] = 'Modxdf Site Htmlsnippets';
$tableCaptions['']['modxdf_site_tmplvars'] = 'Modxdf Site Tmplvars';
$tableCaptions['']['WEBSOCKET'] = 'WEBSOCKET';
$tableCaptions['']['PMT_TEST_BUSINESS_3'] = 'PMT TEST BUSINESS 3';
$tableCaptions['']['PMT_SITE_REGISTRATION'] = 'PMT SITE REGISTRATION';
$tableCaptions['']['BPMCHAT'] = 'BPMCHAT';
$tableCaptions['']['HITWORD'] = 'HITWORD';
$tableCaptions['']['PLUGINS'] = 'PLUGINS';
$tableCaptions['']['TABLESPACES'] = 'TABLESPACES';
$tableCaptions['']['TABLE_CONSTRAINTS'] = 'TABLE CONSTRAINTS';
$tableCaptions['']['PMT_SITE'] = 'PMT SITE';
$tableCaptions['']['wpfg_commentmeta'] = 'Wpfg Commentmeta';
$tableCaptions['']['wpfg_comments'] = 'Wpfg Comments';
$tableCaptions['']['wpfg_links'] = 'Wpfg Links';
$tableCaptions['']['wpfg_options'] = 'Wpfg Options';
$tableCaptions['']['wpfg_postmeta'] = 'Wpfg Postmeta';
$tableCaptions['']['wpfg_posts'] = 'Wpfg Posts';
$tableCaptions['']['wpfg_term_relationships'] = 'Wpfg Term Relationships';
$tableCaptions['']['wpfg_term_taxonomy'] = 'Wpfg Term Taxonomy';
$tableCaptions['']['wpfg_termmeta'] = 'Wpfg Termmeta';
$tableCaptions['']['wpfg_terms'] = 'Wpfg Terms';
$tableCaptions['']['wpfg_usermeta'] = 'Wpfg Usermeta';
$tableCaptions['']['wpfg_users'] = 'Wpfg Users';
$tableCaptions['']['PMT_ANNUAL_REVENUE'] = 'PMT ANNUAL REVENUE';
$tableCaptions['']['PMT_TEST_BUSINESS'] = 'PMT TEST BUSINESS';
$tableCaptions['']['PMT_SAGAWA'] = 'PMT SAGAWA';
$tableCaptions['']['PMT_RESIDENTS_BASIC_ATTRIBUTES'] = 'PMT RESIDENTS BASIC ATTRIBUTES';
$tableCaptions['']['PMT_QUOTE'] = 'PMT QUOTE';
$tableCaptions['']['PROCESS'] = 'プロセス';
$tableCaptions['']['PMT_SUBCONTRACTORS'] = 'PMT SUBCONTRACTORS';
$tableCaptions['']['PMT_MITUMORI1'] = 'PMT MITUMORI1';
$tableCaptions['']['BPMBOXTRANS'] = 'BPMBOXTRANS';
$tableCaptions['']['Dashboard3'] = 'Dashboard3';
$tableCaptions['']['APPLICATION_Report1'] = 'APPLICATION Report1';
$tableCaptions['']['ROUTINES'] = 'ROUTINES';
$tableCaptions['']['PMT_INVOICE'] = 'PMT INVOICE';
$tableCaptions['']['PMT_INVOICE_ITEMS'] = 'PMT INVOICE ITEMS';
$tableCaptions['']['PMT_TEST_SCREEN'] = 'PMT TEST SCREEN';
$tableCaptions['']['PMT_SPREADMAIN'] = 'PMT SPREADMAIN';
$tableCaptions['']['PMT_SPREADSUB'] = 'PMT SPREADSUB';
$tableCaptions['']['PMT_PROGRAM_LIST'] = 'PMT PROGRAM LIST';
$tableCaptions['']['PMT_PMSEIKYUUSHO'] = 'PMT PMSEIKYUUSHO';
$tableCaptions['']['PMT_MST_BRMS'] = 'PMT MST BRMS';
$tableCaptions['']['PMT_QUOTE_DETAILS'] = 'PMT QUOTE DETAILS';

$globalEvents = new class_GlobalEvents();
$tableEvents = array();

require_once getabspath('classes/labels.php');
require_once getabspath('classes/security.php');
require_once getabspath('connections/dbfunctions_legacy.php');
require_once getabspath('connections/ConnectionManager.php');
include getabspath('classes/searchclause.php');
include getabspath('classes/projectsettings.php');
include_once getabspath('classes/runnerpage.php');
include_once getabspath('classes/controls/ViewControl.php');

$cman = new ConnectionManager();

$mlang_defaultlang = getDefaultLanguage();

include getabspath('include/languages.php');

$page_titles['.global'] = array();
if (mlang_getcurrentlang() == 'Japanese') {
}
if (mlang_getcurrentlang() == 'English') {
}
if (mlang_getcurrentlang() == '') {
}

$globalSettings['showDetailedError'] = true;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();

// here goes EVENT_INIT_APP event

//**********  Insert a record into another table  ************

// default connection link #9875
$conn = $cman->getDefault()->conn;

$logoutPerformed = false;
$scriptname = getFileNameFromURL();
    if (!isLogged() && $scriptname != 'login.php' && $scriptname != 'remind.php' && $scriptname != 'register.php' && $scriptname != 'checkduplicates.php') {
        Security::doGuestLogin();
    }

$isGroupSecurity = true;

$isUseRTEBasic = false;

$isUseRTECK = true;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 1;

$menuNodesIndex = 0;

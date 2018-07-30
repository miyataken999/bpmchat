<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "ABE_CONFIGURATION";
$nonAdminTablesArr[] = "ABE_REQUESTS";
$nonAdminTablesArr[] = "ABE_RESPONSES";
$nonAdminTablesArr[] = "ADDITIONAL_TABLES";
$nonAdminTablesArr[] = "ADDONS_MANAGER";
$nonAdminTablesArr[] = "ADDONS_STORE";
$nonAdminTablesArr[] = "APPLICATION";
$nonAdminTablesArr[] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$nonAdminTablesArr[] = "APP_CACHE_VIEW";
$nonAdminTablesArr[] = "APP_DELAY";
$nonAdminTablesArr[] = "APP_DELEGATION";
$nonAdminTablesArr[] = "USERS";
$nonAdminTablesArr[] = "TRANSLATION";
$nonAdminTablesArr[] = "BPMN_PROJECT";
$nonAdminTablesArr[] = "BPMN_PROCESS";
$nonAdminTablesArr[] = "CONTENT";
$nonAdminTablesArr[] = "PROCESS";
$nonAdminTablesArr[] = "PROCESS_CATEGORY";
$nonAdminTablesArr[] = "PROCESS_FILES";
$nonAdminTablesArr[] = "PROCESS_OWNER";
$nonAdminTablesArr[] = "PROCESS_USER";
$nonAdminTablesArr[] = "PROCESS_VARIABLES";
$nonAdminTablesArr[] = "TRIGGERS";
$nonAdminTablesArr[] = "USERS_PROPERTIES";
$nonAdminTablesArr[] = "USR_REPORTING";
$nonAdminTablesArr[] = "WEB_ENTRY";
$nonAdminTablesArr[] = "TASK";
$nonAdminTablesArr[] = "TASK_USER";
$nonAdminTablesArr[] = "BPMN_PARTICIPANT";
$nonAdminTablesArr[] = "BPMN_LANESET";
$nonAdminTablesArr[] = "BPMN_LANE";
$nonAdminTablesArr[] = "BPMN_GATEWAY";
$nonAdminTablesArr[] = "BPMN_FLOW";
$nonAdminTablesArr[] = "BPMN_EXTENSION";
$nonAdminTablesArr[] = "BPMN_EVENT";
$nonAdminTablesArr[] = "BPMN_DOCUMENTATION";
$nonAdminTablesArr[] = "BPMN_DIAGRAM";
$nonAdminTablesArr[] = "BPMN_DATA";
$nonAdminTablesArr[] = "BPMN_BOUND";
$nonAdminTablesArr[] = "BPMN_ACTIVITY";
$nonAdminTablesArr[] = "BPMN_ARTIFACT";
$nonAdminTablesArr[] = "DYNAFORM";
$nonAdminTablesArr[] = "APPLICATION1";
$nonAdminTablesArr[] = "APP_DOCUMENT";
$nonAdminTablesArr[] = "APP_EVENT";
$nonAdminTablesArr[] = "APP_FOLDER";
$nonAdminTablesArr[] = "APP_HISTORY";
$nonAdminTablesArr[] = "APP_MESSAGE";
$nonAdminTablesArr[] = "APP_NOTES";
$nonAdminTablesArr[] = "APP_OWNER";
$nonAdminTablesArr[] = "APP_SEQUENCE";
$nonAdminTablesArr[] = "APP_SOLR_QUEUE";
$nonAdminTablesArr[] = "APP_THREAD";
$nonAdminTablesArr[] = "APP_TIMEOUT_ACTION_EXECUTED";
$nonAdminTablesArr[] = "ISO_COUNTRY";
$nonAdminTablesArr[] = "ISO_LOCATION";
$nonAdminTablesArr[] = "ISO_SUBDIVISION";
$nonAdminTablesArr[] = "LANGUAGE";
$nonAdminTablesArr[] = "LEXICO";
$nonAdminTablesArr[] = "STEP";
$nonAdminTablesArr[] = "STEP_TRIGGER";
$nonAdminTablesArr[] = "SUB_APPLICATION";
$nonAdminTablesArr[] = "ROUTE";
$nonAdminTablesArr[] = "processmaker_audit";
$nonAdminTablesArr[] = "processmaker_locking";
$nonAdminTablesArr[] = "processmaker_uggroups";
$nonAdminTablesArr[] = "processmaker_ugmembers";
$nonAdminTablesArr[] = "processmaker_ugrights";
$nonAdminTablesArr[] = "PMT_MENU";
$nonAdminTablesArr[] = "PMT_MENU1";
$nonAdminTablesArr[] = "CONTENT1";
$nonAdminTablesArr[] = "CONTENT11";
$nonAdminTablesArr[] = "CONTENT2";
$nonAdminTablesArr[] = "CONTENT3";
$nonAdminTablesArr[] = "PRO_REPORTING";
$nonAdminTablesArr[] = "LOGIN_LOG";
$nonAdminTablesArr[] = "LOG_CASES_SCHEDULER";
$nonAdminTablesArr[] = "LIST_UNASSIGNED_GROUP";
$nonAdminTablesArr[] = "LIST_UNASSIGNED";
$nonAdminTablesArr[] = "LIST_PAUSED";
$nonAdminTablesArr[] = "LIST_PARTICIPATED_LAST";
$nonAdminTablesArr[] = "LIST_PARTICIPATED_HISTORY";
$nonAdminTablesArr[] = "LIST_MY_INBOX";
$nonAdminTablesArr[] = "LIST_INBOX";
$nonAdminTablesArr[] = "LIST_COMPLETED";
$nonAdminTablesArr[] = "LIST_CANCELED";
$nonAdminTablesArr[] = "LICENSE_MANAGER";
$nonAdminTablesArr[] = "CONTENT4";
$nonAdminTablesArr[] = "CONTENT41";
$nonAdminTablesArr[] = "CONTENT411";
$nonAdminTablesArr[] = "RBAC_AUTHENTICATION_SOURCE";
$nonAdminTablesArr[] = "RBAC_PERMISSIONS";
$nonAdminTablesArr[] = "RBAC_ROLES";
$nonAdminTablesArr[] = "RBAC_ROLES_PERMISSIONS";
$nonAdminTablesArr[] = "RBAC_SYSTEMS";
$nonAdminTablesArr[] = "RBAC_USERS";
$nonAdminTablesArr[] = "RBAC_USERS_ROLES";
$nonAdminTablesArr[] = "DB_SOURCE";
$nonAdminTablesArr[] = "DEPARTMENT";
$nonAdminTablesArr[] = "GROUPWF";
$nonAdminTablesArr[] = "GROUP_USER";
$nonAdminTablesArr[] = "MESSAGE_APPLICATION";
$nonAdminTablesArr[] = "MESSAGE_EVENT_DEFINITION";
$nonAdminTablesArr[] = "MESSAGE_EVENT_RELATION";
$nonAdminTablesArr[] = "MESSAGE_TYPE";
$nonAdminTablesArr[] = "SCRIPT_TASK";
$nonAdminTablesArr[] = "SEQUENCES";
$nonAdminTablesArr[] = "SESSION";
$nonAdminTablesArr[] = "STAGE";
$nonAdminTablesArr[] = "STEP_SUPERVISOR";
$nonAdminTablesArr[] = "SUB_PROCESS";
$nonAdminTablesArr[] = "SWIMLANES_ELEMENTS";
$nonAdminTablesArr[] = "FIELDS";
$nonAdminTablesArr[] = "FIELD_CONDITION";
$nonAdminTablesArr[] = "CATALOG";
$nonAdminTablesArr[] = "CASE_TRACKER_OBJECT";
$nonAdminTablesArr[] = "CASE_TRACKER";
$nonAdminTablesArr[] = "CASE_SCHEDULER";
$nonAdminTablesArr[] = "CASE_CONSOLIDATED";
$nonAdminTablesArr[] = "REPORT_TABLE";
$nonAdminTablesArr[] = "REPORT_VAR";
$nonAdminTablesArr[] = "WEB_ENTRY_EVENT";
$nonAdminTablesArr[] = "CONFIGURATION";
$nonAdminTablesArr[] = "DIM_TIME_COMPLETE";
$nonAdminTablesArr[] = "DIM_TIME_DELEGATE";
$nonAdminTablesArr[] = "ELEMENT_TASK_RELATION";
$nonAdminTablesArr[] = "TIMER_EVENT";
$nonAdminTablesArr[] = "PMT_COMMAND";
$nonAdminTablesArr[] = "APP_CACHE_VIEW_INDEX";
$nonAdminTablesArr[] = "Dashboard";
$nonAdminTablesArr[] = "PMT_LINE";
$nonAdminTablesArr[] = "PMT_FIELD";
$nonAdminTablesArr[] = "PMT_COMMAND Report";
$nonAdminTablesArr[] = "APP_CACHE_VIEW_DRAFT";
$nonAdminTablesArr[] = "APP_CACHE_VIEW_PARTICIPATE";
$nonAdminTablesArr[] = "APP_CACHE_VIEW_PAUSE";
$nonAdminTablesArr[] = "INPUT_DOCUMENT";
$nonAdminTablesArr[] = "EMAIL_EVENT";
$nonAdminTablesArr[] = "DASHLET_INSTANCE";
$nonAdminTablesArr[] = "DASHBOARD_INDICATOR";
$nonAdminTablesArr[] = "DASHLET";
$nonAdminTablesArr[] = "DASHBOARD_DAS_IND";
$nonAdminTablesArr[] = "DASHBOARD1";
$nonAdminTablesArr[] = "general_log";
$nonAdminTablesArr[] = "COLUMNS";
$nonAdminTablesArr[] = "TRIGGERS1";
$nonAdminTablesArr[] = "TABLES";
$nonAdminTablesArr[] = "SCHEMATA";
$nonAdminTablesArr[] = "PMT_ECCUBE";
$nonAdminTablesArr[] = "PMT_ECCUBEBLOG";
$nonAdminTablesArr[] = "modx_site_content";
$nonAdminTablesArr[] = "modx_site_htmlsnippets";
$nonAdminTablesArr[] = "modx_site_snippets";
$nonAdminTablesArr[] = "modx_site_templates";
$nonAdminTablesArr[] = "modx_site_plugins";
$nonAdminTablesArr[] = "modx_categories";
$nonAdminTablesArr[] = "APPLICATION Chart";
$nonAdminTablesArr[] = "APPLICATION Report";
$nonAdminTablesArr[] = "modx_site_content_child";
$nonAdminTablesArr[] = "modx_site_content_dash";
$nonAdminTablesArr[] = "site_content_dashboard";
$nonAdminTablesArr[] = "Dashboard2";
$nonAdminTablesArr[] = "BPMBOXEoc2";
$nonAdminTablesArr[] = "items";
$nonAdminTablesArr[] = "ppmain";
$nonAdminTablesArr[] = "pppaypal_info";
$nonAdminTablesArr[] = "ppadmin main";
$nonAdminTablesArr[] = "ppsubcategory";
$nonAdminTablesArr[] = "ppusers";
$nonAdminTablesArr[] = "ppcategory";
$nonAdminTablesArr[] = "ppcategory1";
$nonAdminTablesArr[] = "API";
$nonAdminTablesArr[] = "CALENDAR_ASSIGNMENTS";
$nonAdminTablesArr[] = "CALENDAR_BUSINESS_HOURS";
$nonAdminTablesArr[] = "CALENDAR_DEFINITION";
$nonAdminTablesArr[] = "CALENDAR_HOLIDAYS";
$nonAdminTablesArr[] = "GATEWAY";
$nonAdminTablesArr[] = "GMAIL_RELABELING";
$nonAdminTablesArr[] = "HOLIDAY";
$nonAdminTablesArr[] = "MESSAGE_TYPE_VARIABLE";
$nonAdminTablesArr[] = "NOTIFICATION_DEVICE";
$nonAdminTablesArr[] = "NOTIFICATION_QUEUE";
$nonAdminTablesArr[] = "OAUTH_ACCESS_TOKENS";
$nonAdminTablesArr[] = "OAUTH_AUTHORIZATION_CODES";
$nonAdminTablesArr[] = "OAUTH_CLIENTS";
$nonAdminTablesArr[] = "OAUTH_REFRESH_TOKENS";
$nonAdminTablesArr[] = "OAUTH_SCOPES";
$nonAdminTablesArr[] = "OBJECT_PERMISSION";
$nonAdminTablesArr[] = "OUTPUT_DOCUMENT";
$nonAdminTablesArr[] = "PMOAUTH_USER_ACCESS_TOKENS";
$nonAdminTablesArr[] = "SESSION_STORAGE";
$nonAdminTablesArr[] = "SHADOW_TABLE";
$nonAdminTablesArr[] = "APP_ASSIGN_SELF_SERVICE_VALUE_GROUP";
$nonAdminTablesArr[] = "modxdf_site_templates";
$nonAdminTablesArr[] = "modxdf_site_snippets";
$nonAdminTablesArr[] = "modxdf_site_plugins";
$nonAdminTablesArr[] = "modxdf_site_content";
$nonAdminTablesArr[] = "modxdf_site_htmlsnippets";
$nonAdminTablesArr[] = "modxdf_site_tmplvars";
$nonAdminTablesArr[] = "WEBSOCKET";
$nonAdminTablesArr[] = "PMT_TEST_BUSINESS_3";
$nonAdminTablesArr[] = "PMT_SITE_REGISTRATION";
$nonAdminTablesArr[] = "BPMCHAT";
$nonAdminTablesArr[] = "HITWORD";
$nonAdminTablesArr[] = "PLUGINS";
$nonAdminTablesArr[] = "TABLESPACES";
$nonAdminTablesArr[] = "TABLE_CONSTRAINTS";
$nonAdminTablesArr[] = "PMT_SITE";
$nonAdminTablesArr[] = "wpfg_commentmeta";
$nonAdminTablesArr[] = "wpfg_comments";
$nonAdminTablesArr[] = "wpfg_links";
$nonAdminTablesArr[] = "wpfg_options";
$nonAdminTablesArr[] = "wpfg_postmeta";
$nonAdminTablesArr[] = "wpfg_posts";
$nonAdminTablesArr[] = "wpfg_term_relationships";
$nonAdminTablesArr[] = "wpfg_term_taxonomy";
$nonAdminTablesArr[] = "wpfg_termmeta";
$nonAdminTablesArr[] = "wpfg_terms";
$nonAdminTablesArr[] = "wpfg_usermeta";
$nonAdminTablesArr[] = "wpfg_users";
$nonAdminTablesArr[] = "PMT_ANNUAL_REVENUE";
$nonAdminTablesArr[] = "PMT_TEST_BUSINESS";
$nonAdminTablesArr[] = "PMT_SAGAWA";
$nonAdminTablesArr[] = "PMT_RESIDENTS_BASIC_ATTRIBUTES";
$nonAdminTablesArr[] = "PMT_QUOTE";
$nonAdminTablesArr[] = "PMT_SUBCONTRACTORS";
$nonAdminTablesArr[] = "PMT_MITUMORI1";
$nonAdminTablesArr[] = "BPMBOXTRANS";
$nonAdminTablesArr[] = "Dashboard3";
$nonAdminTablesArr[] = "APPLICATION Report1";
$nonAdminTablesArr[] = "ROUTINES";
$nonAdminTablesArr[] = "PMT_INVOICE";
$nonAdminTablesArr[] = "PMT_INVOICE_ITEMS";
$nonAdminTablesArr[] = "PMT_TEST_SCREEN";
$nonAdminTablesArr[] = "PMT_SPREADMAIN";
$nonAdminTablesArr[] = "PMT_SPREADSUB";
$nonAdminTablesArr[] = "PMT_PROGRAM_LIST";
$nonAdminTablesArr[] = "PMT_PMSEIKYUUSHO";
$nonAdminTablesArr[] = "PMT_MST_BRMS";
$nonAdminTablesArr[] = "PMT_QUOTE_DETAILS";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "processmaker_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "processmaker_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "processmaker_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "processmaker_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
		
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		$wMemebersTableName = $ug_connection->addTableWrappers( "processmaker_ugmembers" );
		
		for($i = 0; $i < count($realUsers); $i++)
		{
			if( $realUsers[$i] != $_SESSION["UserID"] )
			{
				$sql = "delete from ". $wMemebersTableName ." where ". $ug_connection->addFieldWrappers( "UserName" )."=%s";
			}
			else
			{
				$sql = "delete from ". $wMemebersTableName ." where ". $ug_connection->addFieldWrappers( "UserName" ) ."=%s "
					."and ". $ug_connection->addFieldWrappers( "GroupID" ) ."<>-1";
			}
			
			$ug_connection->exec( mysprintf($sql, array( $ug_connection->prepareString( html_special_decode($realUsers[$i]) ) )) );	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode( postvalue('state') );
			foreach ($state as $group => $users)
			{
				foreach ($users as $user)
				{
					if( !array_key_exists($user, $realUsers) )
						continue;
					
					$sql = "insert into ". $wMemebersTableName 
						." (". $ug_connection->addFieldWrappers( "UserName" ) 
						.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
						.") values (". $ug_connection->prepareString( html_special_decode($realUsers[$user]) ) .", ". $group .")";
					
					$ug_connection->exec( $sql );
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}
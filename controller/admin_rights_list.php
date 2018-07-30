<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "ABE_CONFIGURATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("ABE_CONFIGURATION", " " . GetTableCaption("ABE_CONFIGURATION"));
$table = "ABE_REQUESTS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ABE_REQUESTS", " " . GetTableCaption("ABE_REQUESTS"));
$table = "ABE_RESPONSES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ABE_RESPONSES", " " . GetTableCaption("ABE_RESPONSES"));
$table = "ADDITIONAL_TABLES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ADDITIONAL_TABLES", " " . GetTableCaption("ADDITIONAL_TABLES"));
$table = "ADDONS_MANAGER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ADDONS_MANAGER", " " . GetTableCaption("ADDONS_MANAGER"));
$table = "ADDONS_STORE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ADDONS_STORE", " " . GetTableCaption("ADDONS_STORE"));
$table = "APPLICATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APPLICATION", " " . GetTableCaption("APPLICATION"));
$table = "APP_ASSIGN_SELF_SERVICE_VALUE";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_ASSIGN_SELF_SERVICE_VALUE", " " . GetTableCaption("APP_ASSIGN_SELF_SERVICE_VALUE"));
$table = "APP_CACHE_VIEW";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_CACHE_VIEW", " " . GetTableCaption("APP_CACHE_VIEW"));
$table = "APP_DELAY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_DELAY", " " . GetTableCaption("APP_DELAY"));
$table = "APP_DELEGATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_DELEGATION", " " . GetTableCaption("APP_DELEGATION"));
$table = "USERS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("USERS", " " . GetTableCaption("USERS"));
$table = "TRANSLATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TRANSLATION", " " . GetTableCaption("TRANSLATION"));
$table = "BPMN_PROJECT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_PROJECT", " " . GetTableCaption("BPMN_PROJECT"));
$table = "BPMN_PROCESS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_PROCESS", " " . GetTableCaption("BPMN_PROCESS"));
$table = "CONTENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT", " " . GetTableCaption("CONTENT"));
$table = "PROCESS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PROCESS", " " . GetTableCaption("PROCESS"));
$table = "PROCESS_CATEGORY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PROCESS_CATEGORY", " " . GetTableCaption("PROCESS_CATEGORY"));
$table = "PROCESS_FILES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PROCESS_FILES", " " . GetTableCaption("PROCESS_FILES"));
$table = "PROCESS_OWNER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PROCESS_OWNER", " " . GetTableCaption("PROCESS_OWNER"));
$table = "PROCESS_USER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PROCESS_USER", " " . GetTableCaption("PROCESS_USER"));
$table = "PROCESS_VARIABLES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PROCESS_VARIABLES", " " . GetTableCaption("PROCESS_VARIABLES"));
$table = "TRIGGERS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TRIGGERS", " " . GetTableCaption("TRIGGERS"));
$table = "USERS_PROPERTIES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("USERS_PROPERTIES", " " . GetTableCaption("USERS_PROPERTIES"));
$table = "USR_REPORTING";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("USR_REPORTING", " " . GetTableCaption("USR_REPORTING"));
$table = "WEB_ENTRY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("WEB_ENTRY", " " . GetTableCaption("WEB_ENTRY"));
$table = "TASK";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TASK", " " . GetTableCaption("TASK"));
$table = "TASK_USER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TASK_USER", " " . GetTableCaption("TASK_USER"));
$table = "BPMN_PARTICIPANT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_PARTICIPANT", " " . GetTableCaption("BPMN_PARTICIPANT"));
$table = "BPMN_LANESET";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_LANESET", " " . GetTableCaption("BPMN_LANESET"));
$table = "BPMN_LANE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_LANE", " " . GetTableCaption("BPMN_LANE"));
$table = "BPMN_GATEWAY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_GATEWAY", " " . GetTableCaption("BPMN_GATEWAY"));
$table = "BPMN_FLOW";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_FLOW", " " . GetTableCaption("BPMN_FLOW"));
$table = "BPMN_EXTENSION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_EXTENSION", " " . GetTableCaption("BPMN_EXTENSION"));
$table = "BPMN_EVENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_EVENT", " " . GetTableCaption("BPMN_EVENT"));
$table = "BPMN_DOCUMENTATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_DOCUMENTATION", " " . GetTableCaption("BPMN_DOCUMENTATION"));
$table = "BPMN_DIAGRAM";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_DIAGRAM", " " . GetTableCaption("BPMN_DIAGRAM"));
$table = "BPMN_DATA";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_DATA", " " . GetTableCaption("BPMN_DATA"));
$table = "BPMN_BOUND";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_BOUND", " " . GetTableCaption("BPMN_BOUND"));
$table = "BPMN_ACTIVITY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_ACTIVITY", " " . GetTableCaption("BPMN_ACTIVITY"));
$table = "BPMN_ARTIFACT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMN_ARTIFACT", " " . GetTableCaption("BPMN_ARTIFACT"));
$table = "DYNAFORM";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DYNAFORM", " " . GetTableCaption("DYNAFORM"));
$table = "APPLICATION1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APPLICATION1", " " . GetTableCaption("APPLICATION1"));
$table = "APP_DOCUMENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_DOCUMENT", " " . GetTableCaption("APP_DOCUMENT"));
$table = "APP_EVENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_EVENT", " " . GetTableCaption("APP_EVENT"));
$table = "APP_FOLDER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_FOLDER", " " . GetTableCaption("APP_FOLDER"));
$table = "APP_HISTORY";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_HISTORY", " " . GetTableCaption("APP_HISTORY"));
$table = "APP_MESSAGE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_MESSAGE", " " . GetTableCaption("APP_MESSAGE"));
$table = "APP_NOTES";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_NOTES", " " . GetTableCaption("APP_NOTES"));
$table = "APP_OWNER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_OWNER", " " . GetTableCaption("APP_OWNER"));
$table = "APP_SEQUENCE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_SEQUENCE", " " . GetTableCaption("APP_SEQUENCE"));
$table = "APP_SOLR_QUEUE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_SOLR_QUEUE", " " . GetTableCaption("APP_SOLR_QUEUE"));
$table = "APP_THREAD";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_THREAD", " " . GetTableCaption("APP_THREAD"));
$table = "APP_TIMEOUT_ACTION_EXECUTED";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_TIMEOUT_ACTION_EXECUTED", " " . GetTableCaption("APP_TIMEOUT_ACTION_EXECUTED"));
$table = "ISO_COUNTRY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ISO_COUNTRY", " " . GetTableCaption("ISO_COUNTRY"));
$table = "ISO_LOCATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ISO_LOCATION", " " . GetTableCaption("ISO_LOCATION"));
$table = "ISO_SUBDIVISION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ISO_SUBDIVISION", " " . GetTableCaption("ISO_SUBDIVISION"));
$table = "LANGUAGE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LANGUAGE", " " . GetTableCaption("LANGUAGE"));
$table = "LEXICO";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LEXICO", " " . GetTableCaption("LEXICO"));
$table = "STEP";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("STEP", " " . GetTableCaption("STEP"));
$table = "STEP_TRIGGER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("STEP_TRIGGER", " " . GetTableCaption("STEP_TRIGGER"));
$table = "SUB_APPLICATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SUB_APPLICATION", " " . GetTableCaption("SUB_APPLICATION"));
$table = "ROUTE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ROUTE", " " . GetTableCaption("ROUTE"));
$table = "processmaker_audit";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("processmaker_audit", " " . GetTableCaption("processmaker_audit"));
$table = "processmaker_locking";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("processmaker_locking", " " . GetTableCaption("processmaker_locking"));
$table = "processmaker_uggroups";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("processmaker_uggroups", " " . GetTableCaption("processmaker_uggroups"));
$table = "processmaker_ugmembers";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("processmaker_ugmembers", " " . GetTableCaption("processmaker_ugmembers"));
$table = "processmaker_ugrights";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("processmaker_ugrights", " " . GetTableCaption("processmaker_ugrights"));
$table = "PMT_MENU";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_MENU", " " . GetTableCaption("PMT_MENU"));
$table = "PMT_MENU1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_MENU1", " " . GetTableCaption("PMT_MENU1"));
$table = "CONTENT1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT1", " " . GetTableCaption("CONTENT1"));
$table = "CONTENT11";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT11", " " . GetTableCaption("CONTENT11"));
$table = "CONTENT2";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT2", " " . GetTableCaption("CONTENT2"));
$table = "CONTENT3";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT3", " " . GetTableCaption("CONTENT3"));
$table = "PRO_REPORTING";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PRO_REPORTING", " " . GetTableCaption("PRO_REPORTING"));
$table = "LOGIN_LOG";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LOGIN_LOG", " " . GetTableCaption("LOGIN_LOG"));
$table = "LOG_CASES_SCHEDULER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LOG_CASES_SCHEDULER", " " . GetTableCaption("LOG_CASES_SCHEDULER"));
$table = "LIST_UNASSIGNED_GROUP";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_UNASSIGNED_GROUP", " " . GetTableCaption("LIST_UNASSIGNED_GROUP"));
$table = "LIST_UNASSIGNED";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_UNASSIGNED", " " . GetTableCaption("LIST_UNASSIGNED"));
$table = "LIST_PAUSED";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_PAUSED", " " . GetTableCaption("LIST_PAUSED"));
$table = "LIST_PARTICIPATED_LAST";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_PARTICIPATED_LAST", " " . GetTableCaption("LIST_PARTICIPATED_LAST"));
$table = "LIST_PARTICIPATED_HISTORY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_PARTICIPATED_HISTORY", " " . GetTableCaption("LIST_PARTICIPATED_HISTORY"));
$table = "LIST_MY_INBOX";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_MY_INBOX", " " . GetTableCaption("LIST_MY_INBOX"));
$table = "LIST_INBOX";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_INBOX", " " . GetTableCaption("LIST_INBOX"));
$table = "LIST_COMPLETED";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_COMPLETED", " " . GetTableCaption("LIST_COMPLETED"));
$table = "LIST_CANCELED";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LIST_CANCELED", " " . GetTableCaption("LIST_CANCELED"));
$table = "LICENSE_MANAGER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LICENSE_MANAGER", " " . GetTableCaption("LICENSE_MANAGER"));
$table = "CONTENT4";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT4", " " . GetTableCaption("CONTENT4"));
$table = "CONTENT41";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT41", " " . GetTableCaption("CONTENT41"));
$table = "CONTENT411";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONTENT411", " " . GetTableCaption("CONTENT411"));
$table = "RBAC_AUTHENTICATION_SOURCE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_AUTHENTICATION_SOURCE", " " . GetTableCaption("RBAC_AUTHENTICATION_SOURCE"));
$table = "RBAC_PERMISSIONS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_PERMISSIONS", " " . GetTableCaption("RBAC_PERMISSIONS"));
$table = "RBAC_ROLES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_ROLES", " " . GetTableCaption("RBAC_ROLES"));
$table = "RBAC_ROLES_PERMISSIONS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_ROLES_PERMISSIONS", " " . GetTableCaption("RBAC_ROLES_PERMISSIONS"));
$table = "RBAC_SYSTEMS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_SYSTEMS", " " . GetTableCaption("RBAC_SYSTEMS"));
$table = "RBAC_USERS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_USERS", " " . GetTableCaption("RBAC_USERS"));
$table = "RBAC_USERS_ROLES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RBAC_USERS_ROLES", " " . GetTableCaption("RBAC_USERS_ROLES"));
$table = "DB_SOURCE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DB_SOURCE", " " . GetTableCaption("DB_SOURCE"));
$table = "DEPARTMENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("DEPARTMENT", " " . GetTableCaption("DEPARTMENT"));
$table = "GROUPWF";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("GROUPWF", " " . GetTableCaption("GROUPWF"));
$table = "GROUP_USER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("GROUP_USER", " " . GetTableCaption("GROUP_USER"));
$table = "MESSAGE_APPLICATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("MESSAGE_APPLICATION", " " . GetTableCaption("MESSAGE_APPLICATION"));
$table = "MESSAGE_EVENT_DEFINITION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("MESSAGE_EVENT_DEFINITION", " " . GetTableCaption("MESSAGE_EVENT_DEFINITION"));
$table = "MESSAGE_EVENT_RELATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("MESSAGE_EVENT_RELATION", " " . GetTableCaption("MESSAGE_EVENT_RELATION"));
$table = "MESSAGE_TYPE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("MESSAGE_TYPE", " " . GetTableCaption("MESSAGE_TYPE"));
$table = "SCRIPT_TASK";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SCRIPT_TASK", " " . GetTableCaption("SCRIPT_TASK"));
$table = "SEQUENCES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SEQUENCES", " " . GetTableCaption("SEQUENCES"));
$table = "SESSION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SESSION", " " . GetTableCaption("SESSION"));
$table = "STAGE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("STAGE", " " . GetTableCaption("STAGE"));
$table = "STEP_SUPERVISOR";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("STEP_SUPERVISOR", " " . GetTableCaption("STEP_SUPERVISOR"));
$table = "SUB_PROCESS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SUB_PROCESS", " " . GetTableCaption("SUB_PROCESS"));
$table = "SWIMLANES_ELEMENTS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SWIMLANES_ELEMENTS", " " . GetTableCaption("SWIMLANES_ELEMENTS"));
$table = "FIELDS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("FIELDS", " " . GetTableCaption("FIELDS"));
$table = "FIELD_CONDITION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("FIELD_CONDITION", " " . GetTableCaption("FIELD_CONDITION"));
$table = "CATALOG";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CATALOG", " " . GetTableCaption("CATALOG"));
$table = "CASE_TRACKER_OBJECT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CASE_TRACKER_OBJECT", " " . GetTableCaption("CASE_TRACKER_OBJECT"));
$table = "CASE_TRACKER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CASE_TRACKER", " " . GetTableCaption("CASE_TRACKER"));
$table = "CASE_SCHEDULER";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CASE_SCHEDULER", " " . GetTableCaption("CASE_SCHEDULER"));
$table = "CASE_CONSOLIDATED";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CASE_CONSOLIDATED", " " . GetTableCaption("CASE_CONSOLIDATED"));
$table = "REPORT_TABLE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("REPORT_TABLE", " " . GetTableCaption("REPORT_TABLE"));
$table = "REPORT_VAR";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("REPORT_VAR", " " . GetTableCaption("REPORT_VAR"));
$table = "WEB_ENTRY_EVENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("WEB_ENTRY_EVENT", " " . GetTableCaption("WEB_ENTRY_EVENT"));
$table = "CONFIGURATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CONFIGURATION", " " . GetTableCaption("CONFIGURATION"));
$table = "DIM_TIME_COMPLETE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DIM_TIME_COMPLETE", " " . GetTableCaption("DIM_TIME_COMPLETE"));
$table = "DIM_TIME_DELEGATE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DIM_TIME_DELEGATE", " " . GetTableCaption("DIM_TIME_DELEGATE"));
$table = "ELEMENT_TASK_RELATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ELEMENT_TASK_RELATION", " " . GetTableCaption("ELEMENT_TASK_RELATION"));
$table = "TIMER_EVENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TIMER_EVENT", " " . GetTableCaption("TIMER_EVENT"));
$table = "PMT_COMMAND";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_COMMAND", " " . GetTableCaption("PMT_COMMAND"));
$table = "APP_CACHE_VIEW_INDEX";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_CACHE_VIEW_INDEX", " " . GetTableCaption("APP_CACHE_VIEW_INDEX"));
$table = "Dashboard";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Dashboard", " " . GetTableCaption("Dashboard"));
$table = "PMT_LINE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_LINE", " " . GetTableCaption("PMT_LINE"));
$table = "PMT_FIELD";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_FIELD", " " . GetTableCaption("PMT_FIELD"));
$table = "PMT_COMMAND Report";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_COMMAND_Report", " " . GetTableCaption("PMT_COMMAND_Report"));
$table = "APP_CACHE_VIEW_DRAFT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_CACHE_VIEW_DRAFT", " " . GetTableCaption("APP_CACHE_VIEW_DRAFT"));
$table = "APP_CACHE_VIEW_PARTICIPATE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_CACHE_VIEW_PARTICIPATE", " " . GetTableCaption("APP_CACHE_VIEW_PARTICIPATE"));
$table = "APP_CACHE_VIEW_PAUSE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_CACHE_VIEW_PAUSE", " " . GetTableCaption("APP_CACHE_VIEW_PAUSE"));
$table = "INPUT_DOCUMENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("INPUT_DOCUMENT", " " . GetTableCaption("INPUT_DOCUMENT"));
$table = "EMAIL_EVENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("EMAIL_EVENT", " " . GetTableCaption("EMAIL_EVENT"));
$table = "DASHLET_INSTANCE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DASHLET_INSTANCE", " " . GetTableCaption("DASHLET_INSTANCE"));
$table = "DASHBOARD_INDICATOR";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DASHBOARD_INDICATOR", " " . GetTableCaption("DASHBOARD_INDICATOR"));
$table = "DASHLET";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DASHLET", " " . GetTableCaption("DASHLET"));
$table = "DASHBOARD_DAS_IND";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DASHBOARD_DAS_IND", " " . GetTableCaption("DASHBOARD_DAS_IND"));
$table = "DASHBOARD1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("DASHBOARD1", " " . GetTableCaption("DASHBOARD1"));
$table = "general_log";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("general_log", " " . GetTableCaption("general_log"));
$table = "COLUMNS";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("COLUMNS", " " . GetTableCaption("COLUMNS"));
$table = "TRIGGERS1";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TRIGGERS1", " " . GetTableCaption("TRIGGERS1"));
$table = "TABLES";
$mask="";
	$mask .= "A";
			$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TABLES", " " . GetTableCaption("TABLES"));
$table = "SCHEMATA";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SCHEMATA", " " . GetTableCaption("SCHEMATA"));
$table = "PMT_ECCUBE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_ECCUBE", " " . GetTableCaption("PMT_ECCUBE"));
$table = "PMT_ECCUBEBLOG";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_ECCUBEBLOG", " " . GetTableCaption("PMT_ECCUBEBLOG"));
$table = "modx_site_content";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_content", " " . GetTableCaption("modx_site_content"));
$table = "modx_site_htmlsnippets";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_htmlsnippets", " " . GetTableCaption("modx_site_htmlsnippets"));
$table = "modx_site_snippets";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_snippets", " " . GetTableCaption("modx_site_snippets"));
$table = "modx_site_templates";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_templates", " " . GetTableCaption("modx_site_templates"));
$table = "modx_site_plugins";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_plugins", " " . GetTableCaption("modx_site_plugins"));
$table = "modx_categories";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_categories", " " . GetTableCaption("modx_categories"));
$table = "APPLICATION Chart";
$mask="";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("APPLICATION_Chart", " " . GetTableCaption("APPLICATION_Chart"));
$table = "APPLICATION Report";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("APPLICATION_Report", " " . GetTableCaption("APPLICATION_Report"));
$table = "modx_site_content_child";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_content_child", " " . GetTableCaption("modx_site_content_child"));
$table = "modx_site_content_dash";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modx_site_content_dash", " " . GetTableCaption("modx_site_content_dash"));
$table = "site_content_dashboard";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("site_content_dashboard", " " . GetTableCaption("site_content_dashboard"));
$table = "Dashboard2";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Dashboard2", " " . GetTableCaption("Dashboard2"));
$table = "BPMBOXEoc2";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMBOXEoc2", " " . GetTableCaption("BPMBOXEoc2"));
$table = "items";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("items", " " . GetTableCaption("items"));
$table = "ppmain";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ppmain", " " . GetTableCaption("ppmain"));
$table = "pppaypal_info";
$mask="";
		$mask .= "E";
		$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("pppaypal_info", " " . GetTableCaption("pppaypal_info"));
$table = "ppadmin main";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ppadmin_main", " " . GetTableCaption("ppadmin_main"));
$table = "ppsubcategory";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ppsubcategory", " " . GetTableCaption("ppsubcategory"));
$table = "ppusers";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ppusers", " " . GetTableCaption("ppusers"));
$table = "ppcategory";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ppcategory", " " . GetTableCaption("ppcategory"));
$table = "ppcategory1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ppcategory1", " " . GetTableCaption("ppcategory1"));
$table = "API";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("API", " " . GetTableCaption("API"));
$table = "CALENDAR_ASSIGNMENTS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CALENDAR_ASSIGNMENTS", " " . GetTableCaption("CALENDAR_ASSIGNMENTS"));
$table = "CALENDAR_BUSINESS_HOURS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CALENDAR_BUSINESS_HOURS", " " . GetTableCaption("CALENDAR_BUSINESS_HOURS"));
$table = "CALENDAR_DEFINITION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CALENDAR_DEFINITION", " " . GetTableCaption("CALENDAR_DEFINITION"));
$table = "CALENDAR_HOLIDAYS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CALENDAR_HOLIDAYS", " " . GetTableCaption("CALENDAR_HOLIDAYS"));
$table = "GATEWAY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("GATEWAY", " " . GetTableCaption("GATEWAY"));
$table = "GMAIL_RELABELING";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("GMAIL_RELABELING", " " . GetTableCaption("GMAIL_RELABELING"));
$table = "HOLIDAY";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("HOLIDAY", " " . GetTableCaption("HOLIDAY"));
$table = "MESSAGE_TYPE_VARIABLE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("MESSAGE_TYPE_VARIABLE", " " . GetTableCaption("MESSAGE_TYPE_VARIABLE"));
$table = "NOTIFICATION_DEVICE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("NOTIFICATION_DEVICE", " " . GetTableCaption("NOTIFICATION_DEVICE"));
$table = "NOTIFICATION_QUEUE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("NOTIFICATION_QUEUE", " " . GetTableCaption("NOTIFICATION_QUEUE"));
$table = "OAUTH_ACCESS_TOKENS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OAUTH_ACCESS_TOKENS", " " . GetTableCaption("OAUTH_ACCESS_TOKENS"));
$table = "OAUTH_AUTHORIZATION_CODES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OAUTH_AUTHORIZATION_CODES", " " . GetTableCaption("OAUTH_AUTHORIZATION_CODES"));
$table = "OAUTH_CLIENTS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OAUTH_CLIENTS", " " . GetTableCaption("OAUTH_CLIENTS"));
$table = "OAUTH_REFRESH_TOKENS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OAUTH_REFRESH_TOKENS", " " . GetTableCaption("OAUTH_REFRESH_TOKENS"));
$table = "OAUTH_SCOPES";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OAUTH_SCOPES", " " . GetTableCaption("OAUTH_SCOPES"));
$table = "OBJECT_PERMISSION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OBJECT_PERMISSION", " " . GetTableCaption("OBJECT_PERMISSION"));
$table = "OUTPUT_DOCUMENT";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("OUTPUT_DOCUMENT", " " . GetTableCaption("OUTPUT_DOCUMENT"));
$table = "PMOAUTH_USER_ACCESS_TOKENS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMOAUTH_USER_ACCESS_TOKENS", " " . GetTableCaption("PMOAUTH_USER_ACCESS_TOKENS"));
$table = "SESSION_STORAGE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SESSION_STORAGE", " " . GetTableCaption("SESSION_STORAGE"));
$table = "SHADOW_TABLE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SHADOW_TABLE", " " . GetTableCaption("SHADOW_TABLE"));
$table = "APP_ASSIGN_SELF_SERVICE_VALUE_GROUP";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("APP_ASSIGN_SELF_SERVICE_VALUE_GROUP", " " . GetTableCaption("APP_ASSIGN_SELF_SERVICE_VALUE_GROUP"));
$table = "modxdf_site_templates";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modxdf_site_templates", " " . GetTableCaption("modxdf_site_templates"));
$table = "modxdf_site_snippets";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modxdf_site_snippets", " " . GetTableCaption("modxdf_site_snippets"));
$table = "modxdf_site_plugins";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modxdf_site_plugins", " " . GetTableCaption("modxdf_site_plugins"));
$table = "modxdf_site_content";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modxdf_site_content", " " . GetTableCaption("modxdf_site_content"));
$table = "modxdf_site_htmlsnippets";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modxdf_site_htmlsnippets", " " . GetTableCaption("modxdf_site_htmlsnippets"));
$table = "modxdf_site_tmplvars";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("modxdf_site_tmplvars", " " . GetTableCaption("modxdf_site_tmplvars"));
$table = "WEBSOCKET";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("WEBSOCKET", " " . GetTableCaption("WEBSOCKET"));
$table = "PMT_TEST_BUSINESS_3";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_TEST_BUSINESS_3", " " . GetTableCaption("PMT_TEST_BUSINESS_3"));
$table = "PMT_SITE_REGISTRATION";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_SITE_REGISTRATION", " " . GetTableCaption("PMT_SITE_REGISTRATION"));
$table = "BPMCHAT";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMCHAT", " " . GetTableCaption("BPMCHAT"));
$table = "HITWORD";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("HITWORD", " " . GetTableCaption("HITWORD"));
$table = "PLUGINS";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PLUGINS", " " . GetTableCaption("PLUGINS"));
$table = "TABLESPACES";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TABLESPACES", " " . GetTableCaption("TABLESPACES"));
$table = "TABLE_CONSTRAINTS";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("TABLE_CONSTRAINTS", " " . GetTableCaption("TABLE_CONSTRAINTS"));
$table = "PMT_SITE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_SITE", " " . GetTableCaption("PMT_SITE"));
$table = "wpfg_commentmeta";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_commentmeta", " " . GetTableCaption("wpfg_commentmeta"));
$table = "wpfg_comments";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_comments", " " . GetTableCaption("wpfg_comments"));
$table = "wpfg_links";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_links", " " . GetTableCaption("wpfg_links"));
$table = "wpfg_options";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_options", " " . GetTableCaption("wpfg_options"));
$table = "wpfg_postmeta";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_postmeta", " " . GetTableCaption("wpfg_postmeta"));
$table = "wpfg_posts";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_posts", " " . GetTableCaption("wpfg_posts"));
$table = "wpfg_term_relationships";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_term_relationships", " " . GetTableCaption("wpfg_term_relationships"));
$table = "wpfg_term_taxonomy";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_term_taxonomy", " " . GetTableCaption("wpfg_term_taxonomy"));
$table = "wpfg_termmeta";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_termmeta", " " . GetTableCaption("wpfg_termmeta"));
$table = "wpfg_terms";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_terms", " " . GetTableCaption("wpfg_terms"));
$table = "wpfg_usermeta";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_usermeta", " " . GetTableCaption("wpfg_usermeta"));
$table = "wpfg_users";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("wpfg_users", " " . GetTableCaption("wpfg_users"));
$table = "PMT_ANNUAL_REVENUE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_ANNUAL_REVENUE", " " . GetTableCaption("PMT_ANNUAL_REVENUE"));
$table = "PMT_TEST_BUSINESS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_TEST_BUSINESS", " " . GetTableCaption("PMT_TEST_BUSINESS"));
$table = "PMT_SAGAWA";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_SAGAWA", " " . GetTableCaption("PMT_SAGAWA"));
$table = "PMT_RESIDENTS_BASIC_ATTRIBUTES";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_RESIDENTS_BASIC_ATTRIBUTES", " " . GetTableCaption("PMT_RESIDENTS_BASIC_ATTRIBUTES"));
$table = "PMT_QUOTE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_QUOTE", " " . GetTableCaption("PMT_QUOTE"));
$table = "PMT_SUBCONTRACTORS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_SUBCONTRACTORS", " " . GetTableCaption("PMT_SUBCONTRACTORS"));
$table = "PMT_MITUMORI1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_MITUMORI1", " " . GetTableCaption("PMT_MITUMORI1"));
$table = "BPMBOXTRANS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BPMBOXTRANS", " " . GetTableCaption("BPMBOXTRANS"));
$table = "Dashboard3";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Dashboard3", " " . GetTableCaption("Dashboard3"));
$table = "APPLICATION Report1";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("APPLICATION_Report1", " " . GetTableCaption("APPLICATION_Report1"));
$table = "ROUTINES";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ROUTINES", " " . GetTableCaption("ROUTINES"));
$table = "PMT_INVOICE";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_INVOICE", " " . GetTableCaption("PMT_INVOICE"));
$table = "PMT_INVOICE_ITEMS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_INVOICE_ITEMS", " " . GetTableCaption("PMT_INVOICE_ITEMS"));
$table = "PMT_TEST_SCREEN";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_TEST_SCREEN", " " . GetTableCaption("PMT_TEST_SCREEN"));
$table = "PMT_SPREADMAIN";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_SPREADMAIN", " " . GetTableCaption("PMT_SPREADMAIN"));
$table = "PMT_SPREADSUB";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_SPREADSUB", " " . GetTableCaption("PMT_SPREADSUB"));
$table = "PMT_PROGRAM_LIST";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_PROGRAM_LIST", " " . GetTableCaption("PMT_PROGRAM_LIST"));
$table = "PMT_PMSEIKYUUSHO";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_PMSEIKYUUSHO", " " . GetTableCaption("PMT_PMSEIKYUUSHO"));
$table = "PMT_MST_BRMS";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_MST_BRMS", " " . GetTableCaption("PMT_MST_BRMS"));
$table = "PMT_QUOTE_DETAILS";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("PMT_QUOTE_DETAILS", " " . GetTableCaption("PMT_QUOTE_DETAILS"));




$layout = new TLayout("admin_rights_list_bootstrap3", "OfficeBlueWave", "MobileBlueWave");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_admin_rights_list";
$layout->blocks["left"] = array();
$layout->containers["logo"] = array();
$layout->container_properties["logo"] = array(  );
$layout->containers["logo"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->skins["logo"] = "";

$layout->blocks["left"][] = "logo";
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";

$layout->blocks["left"][] = "hdr";
$layout->containers["sidemenu"] = array();
$layout->container_properties["sidemenu"] = array(  );
$layout->containers["sidemenu"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["sidemenu"] = "";

$layout->blocks["left"][] = "sidemenu";
$layout->skins["left"] = "";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"bc" );
$layout->containers["bc"] = array();
$layout->container_properties["bc"] = array(  );
$layout->containers["bc"][] = array("name"=>"breadcrumbs",
	"block"=>"breadcrumbs", "substyle"=>1  );

$layout->skins["bc"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["more"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more_1" );
$layout->containers["more_1"] = array();
$layout->container_properties["more_1"] = array(  );
$layout->containers["more_1"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->skins["more_1"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->blocks["topmiddle"] = array();
$layout->containers["messagerow"] = array();
$layout->container_properties["messagerow"] = array(  );
$layout->containers["messagerow"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["messagerow"] = "";

$layout->blocks["topmiddle"][] = "messagerow";
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"save" );
$layout->containers["save"] = array();
$layout->container_properties["save"] = array(  );
$layout->containers["save"][] = array("name"=>"ugbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["save"] = "";


$layout->containers["ugcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"filter" );
$layout->containers["filter"] = array();
$layout->container_properties["filter"] = array(  );
$layout->containers["filter"][] = array("name"=>"ugrightbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["filter"] = "";


$layout->skins["ugcontrols"] = "";

$layout->blocks["topmiddle"][] = "ugcontrols";
$layout->containers["grcontrols"] = array();
$layout->container_properties["grcontrols"] = array(  );
$layout->containers["grcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"groupcontrols" );
$layout->containers["groupcontrols"] = array();
$layout->container_properties["groupcontrols"] = array(  );
$layout->containers["groupcontrols"][] = array("name"=>"bsugrights_groupbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["groupcontrols"] = "";


$layout->skins["grcontrols"] = "";

$layout->blocks["topmiddle"][] = "grcontrols";
$layout->containers["uggroups"] = array();
$layout->container_properties["uggroups"] = array(  );
$layout->containers["uggroups"][] = array("name"=>"bsugrightsgroups",
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroups"] = "";

$layout->blocks["topmiddle"][] = "uggroups";
$layout->containers["permgrid"] = array();
$layout->container_properties["permgrid"] = array(  );
$layout->containers["permgrid"][] = array("name"=>"ugrightsblock",
	"block"=>"", "substyle"=>1  );

$layout->skins["permgrid"] = "";

$layout->blocks["topmiddle"][] = "permgrid";
$page_layouts["admin_rights_list"] = $layout;




require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>

<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("USERS");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblTables__ABE_CONFIGURATION;
	var $tblTables__ABE_REQUESTS;
	var $tblTables__ABE_RESPONSES;
	var $tblTables__ADDITIONAL_TABLES;
	var $tblTables__ADDONS_MANAGER;
	var $tblTables__ADDONS_STORE;
	var $tblTables__API;
	var $tblTables__APP_ASSIGN_SELF_SERVICE_VALUE;
	var $tblTables__APP_ASSIGN_SELF_SERVICE_VALUE_GROUP;
	var $tblTables__APP_CACHE_VIEW;
	var $tblTables__APP_DELAY;
	var $tblTables__APP_DELEGATION;
	var $tblTables__APP_DOCUMENT;
	var $tblTables__APP_EVENT;
	var $tblTables__APP_FOLDER;
	var $tblTables__APP_HISTORY;
	var $tblTables__APP_MESSAGE;
	var $tblTables__APP_NOTES;
	var $tblTables__APP_OWNER;
	var $tblTables__APP_SEQUENCE;
	var $tblTables__APP_SOLR_QUEUE;
	var $tblTables__APP_THREAD;
	var $tblTables__APP_TIMEOUT_ACTION_EXECUTED;
	var $tblTables__APPLICATION;
	var $tblTables__BPMBOXEoc2;
	var $tblTables__BPMBOXTEST;
	var $tblTables__BPMBOXTRANS;
	var $tblTables__BPMN_ACTIVITY;
	var $tblTables__BPMN_ARTIFACT;
	var $tblTables__BPMN_BOUND;
	var $tblTables__BPMN_DATA;
	var $tblTables__BPMN_DIAGRAM;
	var $tblTables__BPMN_DOCUMENTATION;
	var $tblTables__BPMN_EVENT;
	var $tblTables__BPMN_EXTENSION;
	var $tblTables__BPMN_FLOW;
	var $tblTables__BPMN_GATEWAY;
	var $tblTables__BPMN_LANE;
	var $tblTables__BPMN_LANESET;
	var $tblTables__BPMN_PARTICIPANT;
	var $tblTables__BPMN_PROCESS;
	var $tblTables__BPMN_PROJECT;
	var $tblTables__CALENDAR_ASSIGNMENTS;
	var $tblTables__CALENDAR_BUSINESS_HOURS;
	var $tblTables__CALENDAR_DEFINITION;
	var $tblTables__CALENDAR_HOLIDAYS;
	var $tblTables__CASE_CONSOLIDATED;
	var $tblTables__CASE_SCHEDULER;
	var $tblTables__CASE_TRACKER;
	var $tblTables__CASE_TRACKER_OBJECT;
	var $tblTables__CATALOG;
	var $tblTables__CONFIGURATION;
	var $tblTables__CONTENT;
	var $tblTables__DASHBOARD;
	var $tblTables__DASHBOARD_DAS_IND;
	var $tblTables__DASHBOARD_INDICATOR;
	var $tblTables__DASHLET;
	var $tblTables__DASHLET_INSTANCE;
	var $tblTables__DB_SOURCE;
	var $tblTables__DEPARTMENT;
	var $tblTables__DIM_TIME_COMPLETE;
	var $tblTables__DIM_TIME_DELEGATE;
	var $tblTables__DYNAFORM;
	var $tblTables__ELEMENT_TASK_RELATION;
	var $tblTables__EMAIL_EVENT;
	var $tblTables__FIELD_CONDITION;
	var $tblTables__FIELDS;
	var $tblTables__GATEWAY;
	var $tblTables__GMAIL_RELABELING;
	var $tblTables__GROUP_USER;
	var $tblTables__GROUPWF;
	var $tblTables__HITWORD;
	var $tblTables__HOLIDAY;
	var $tblTables__INPUT_DOCUMENT;
	var $tblTables__ISO_COUNTRY;
	var $tblTables__ISO_LOCATION;
	var $tblTables__ISO_SUBDIVISION;
	var $tblTables__items;
	var $tblTables__LANGUAGE;
	var $tblTables__LEXICO;
	var $tblTables__LICENSE_MANAGER;
	var $tblTables__LIST_CANCELED;
	var $tblTables__LIST_COMPLETED;
	var $tblTables__LIST_INBOX;
	var $tblTables__LIST_MY_INBOX;
	var $tblTables__LIST_PARTICIPATED_HISTORY;
	var $tblTables__LIST_PARTICIPATED_LAST;
	var $tblTables__LIST_PAUSED;
	var $tblTables__LIST_UNASSIGNED;
	var $tblTables__LIST_UNASSIGNED_GROUP;
	var $tblTables__LOG_CASES_SCHEDULER;
	var $tblTables__LOGIN_LOG;
	var $tblTables__MESSAGE_APPLICATION;
	var $tblTables__MESSAGE_EVENT_DEFINITION;
	var $tblTables__MESSAGE_EVENT_RELATION;
	var $tblTables__MESSAGE_TYPE;
	var $tblTables__MESSAGE_TYPE_VARIABLE;
	var $tblTables__modx_categories;
	var $tblTables__modx_site_htmlsnippets;
	var $tblTables__modx_site_plugins;
	var $tblTables__modx_site_snippets;
	var $tblTables__modx_site_templates;
	var $tblTables__modxdf_site_content;
	var $tblTables__modxdf_site_htmlsnippets;
	var $tblTables__modxdf_site_plugins;
	var $tblTables__modxdf_site_snippets;
	var $tblTables__modxdf_site_templates;
	var $tblTables__modxdf_site_tmplvars;
	var $tblTables__NOTIFICATION_DEVICE;
	var $tblTables__NOTIFICATION_QUEUE;
	var $tblTables__OAUTH_ACCESS_TOKENS;
	var $tblTables__OAUTH_AUTHORIZATION_CODES;
	var $tblTables__OAUTH_CLIENTS;
	var $tblTables__OAUTH_REFRESH_TOKENS;
	var $tblTables__OAUTH_SCOPES;
	var $tblTables__OBJECT_PERMISSION;
	var $tblTables__OUTPUT_DOCUMENT;
	var $tblTables__PMOAUTH_USER_ACCESS_TOKENS;
	var $tblTables__PMT_ANNUAL_REVENUE;
	var $tblTables__PMT_COMMAND;
	var $tblTables__PMT_ECCUBE;
	var $tblTables__PMT_ECCUBEBLOG;
	var $tblTables__PMT_FIELD;
	var $tblTables__PMT_INVOICE;
	var $tblTables__PMT_INVOICE_ITEMS;
	var $tblTables__PMT_LINE;
	var $tblTables__PMT_MENU;
	var $tblTables__PMT_MITUMORI1;
	var $tblTables__PMT_MST_BRMS;
	var $tblTables__PMT_PMSEIKYUUSHO;
	var $tblTables__PMT_PROGRAM_LIST;
	var $tblTables__PMT_QUOTE;
	var $tblTables__PMT_QUOTE_DETAILS;
	var $tblTables__PMT_RESIDENTS_BASIC_ATTRIBUTES;
	var $tblTables__PMT_SAGAWA;
	var $tblTables__PMT_SITE;
	var $tblTables__PMT_SITE_REGISTRATION;
	var $tblTables__PMT_SPREADMAIN;
	var $tblTables__PMT_SPREADSUB;
	var $tblTables__PMT_SUBCONTRACTORS;
	var $tblTables__PMT_TEST_BUSINESS;
	var $tblTables__PMT_TEST_BUSINESS_3;
	var $tblTables__PMT_TEST_SCREEN;
	var $tblTables__ppcategory;
	var $tblTables__ppmain;
	var $tblTables__pppaypal_info;
	var $tblTables__ppsubcategory;
	var $tblTables__ppusers;
	var $tblTables__PRO_REPORTING;
	var $tblTables__PROCESS;
	var $tblTables__PROCESS_CATEGORY;
	var $tblTables__PROCESS_FILES;
	var $tblTables__PROCESS_OWNER;
	var $tblTables__PROCESS_USER;
	var $tblTables__PROCESS_VARIABLES;
	var $tblTables__Processmaker111_4settings;
	var $tblTables__processmaker_audit;
	var $tblTables__processmaker_locking;
	var $tblTables__processmaker_uggroups;
	var $tblTables__processmaker_ugmembers;
	var $tblTables__processmaker_ugrights;
	var $tblTables__RBAC_AUTHENTICATION_SOURCE;
	var $tblTables__RBAC_PERMISSIONS;
	var $tblTables__RBAC_ROLES;
	var $tblTables__RBAC_ROLES_PERMISSIONS;
	var $tblTables__RBAC_SYSTEMS;
	var $tblTables__RBAC_USERS;
	var $tblTables__RBAC_USERS_ROLES;
	var $tblTables__REPORT_TABLE;
	var $tblTables__REPORT_VAR;
	var $tblTables__ROUTE;
	var $tblTables__SCRIPT_TASK;
	var $tblTables__SEQUENCES;
	var $tblTables__SESSION;
	var $tblTables__SESSION_STORAGE;
	var $tblTables__SHADOW_TABLE;
	var $tblTables__STAGE;
	var $tblTables__STEP;
	var $tblTables__STEP_SUPERVISOR;
	var $tblTables__STEP_TRIGGER;
	var $tblTables__SUB_APPLICATION;
	var $tblTables__SUB_PROCESS;
	var $tblTables__SWIMLANES_ELEMENTS;
	var $tblTables__TASK;
	var $tblTables__TASK_USER;
	var $tblTables__TIMER_EVENT;
	var $tblTables__TRANSLATION;
	var $tblTables__TRIGGERS;
	var $tblTables__USERS;
	var $tblTables__USERS_PROPERTIES;
	var $tblTables__USR_REPORTING;
	var $tblTables__WEB_ENTRY;
	var $tblTables__WEB_ENTRY_EVENT;
	var $tblTables__WEBSOCKET;
	var $tblTables__wpfg_commentmeta;
	var $tblTables__wpfg_comments;
	var $tblTables__wpfg_links;
	var $tblTables__wpfg_options;
	var $tblTables__wpfg_postmeta;
	var $tblTables__wpfg_posts;
	var $tblTables__wpfg_term_relationships;
	var $tblTables__wpfg_term_taxonomy;
	var $tblTables__wpfg_termmeta;
	var $tblTables__wpfg_terms;
	var $tblTables__wpfg_usermeta;
	var $tblTables__wpfg_users;
	var $tbldomainhere_at_iphere__general_log;
	var $tblinformation_schema_at_iphere__COLUMNS;
	var $tblinformation_schema_at_iphere__PLUGINS;
	var $tblinformation_schema_at_iphere__ROUTINES;
	var $tblinformation_schema_at_iphere__SCHEMATA;
	var $tblinformation_schema_at_iphere__TABLE_CONSTRAINTS;
	var $tblinformation_schema_at_iphere__TABLES;
	var $tblinformation_schema_at_iphere__TABLESPACES;
	var $tblinformation_schema_at_iphere__TRIGGERS;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "ABE_CONFIGURATION", "varname" => "Tables__ABE_CONFIGURATION", "altvarname" => "ABE_CONFIGURATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ABE_REQUESTS", "varname" => "Tables__ABE_REQUESTS", "altvarname" => "ABE_REQUESTS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ABE_RESPONSES", "varname" => "Tables__ABE_RESPONSES", "altvarname" => "ABE_RESPONSES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ADDITIONAL_TABLES", "varname" => "Tables__ADDITIONAL_TABLES", "altvarname" => "ADDITIONAL_TABLES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ADDONS_MANAGER", "varname" => "Tables__ADDONS_MANAGER", "altvarname" => "ADDONS_MANAGER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ADDONS_STORE", "varname" => "Tables__ADDONS_STORE", "altvarname" => "ADDONS_STORE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "API", "varname" => "Tables__API", "altvarname" => "API", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_ASSIGN_SELF_SERVICE_VALUE", "varname" => "Tables__APP_ASSIGN_SELF_SERVICE_VALUE", "altvarname" => "APP_ASSIGN_SELF_SERVICE_VALUE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_ASSIGN_SELF_SERVICE_VALUE_GROUP", "varname" => "Tables__APP_ASSIGN_SELF_SERVICE_VALUE_GROUP", "altvarname" => "APP_ASSIGN_SELF_SERVICE_VALUE_GROUP", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_CACHE_VIEW", "varname" => "Tables__APP_CACHE_VIEW", "altvarname" => "APP_CACHE_VIEW", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_DELAY", "varname" => "Tables__APP_DELAY", "altvarname" => "APP_DELAY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_DELEGATION", "varname" => "Tables__APP_DELEGATION", "altvarname" => "APP_DELEGATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_DOCUMENT", "varname" => "Tables__APP_DOCUMENT", "altvarname" => "APP_DOCUMENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_EVENT", "varname" => "Tables__APP_EVENT", "altvarname" => "APP_EVENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_FOLDER", "varname" => "Tables__APP_FOLDER", "altvarname" => "APP_FOLDER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_HISTORY", "varname" => "Tables__APP_HISTORY", "altvarname" => "APP_HISTORY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_MESSAGE", "varname" => "Tables__APP_MESSAGE", "altvarname" => "APP_MESSAGE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_NOTES", "varname" => "Tables__APP_NOTES", "altvarname" => "APP_NOTES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_OWNER", "varname" => "Tables__APP_OWNER", "altvarname" => "APP_OWNER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_SEQUENCE", "varname" => "Tables__APP_SEQUENCE", "altvarname" => "APP_SEQUENCE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_SOLR_QUEUE", "varname" => "Tables__APP_SOLR_QUEUE", "altvarname" => "APP_SOLR_QUEUE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_THREAD", "varname" => "Tables__APP_THREAD", "altvarname" => "APP_THREAD", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APP_TIMEOUT_ACTION_EXECUTED", "varname" => "Tables__APP_TIMEOUT_ACTION_EXECUTED", "altvarname" => "APP_TIMEOUT_ACTION_EXECUTED", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "APPLICATION", "varname" => "Tables__APPLICATION", "altvarname" => "APPLICATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMBOXEoc2", "varname" => "Tables__BPMBOXEoc2", "altvarname" => "BPMBOXEoc2", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMBOXTEST", "varname" => "Tables__BPMBOXTEST", "altvarname" => "BPMBOXTEST", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMBOXTRANS", "varname" => "Tables__BPMBOXTRANS", "altvarname" => "BPMBOXTRANS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_ACTIVITY", "varname" => "Tables__BPMN_ACTIVITY", "altvarname" => "BPMN_ACTIVITY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_ARTIFACT", "varname" => "Tables__BPMN_ARTIFACT", "altvarname" => "BPMN_ARTIFACT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_BOUND", "varname" => "Tables__BPMN_BOUND", "altvarname" => "BPMN_BOUND", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_DATA", "varname" => "Tables__BPMN_DATA", "altvarname" => "BPMN_DATA", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_DIAGRAM", "varname" => "Tables__BPMN_DIAGRAM", "altvarname" => "BPMN_DIAGRAM", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_DOCUMENTATION", "varname" => "Tables__BPMN_DOCUMENTATION", "altvarname" => "BPMN_DOCUMENTATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_EVENT", "varname" => "Tables__BPMN_EVENT", "altvarname" => "BPMN_EVENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_EXTENSION", "varname" => "Tables__BPMN_EXTENSION", "altvarname" => "BPMN_EXTENSION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_FLOW", "varname" => "Tables__BPMN_FLOW", "altvarname" => "BPMN_FLOW", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_GATEWAY", "varname" => "Tables__BPMN_GATEWAY", "altvarname" => "BPMN_GATEWAY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_LANE", "varname" => "Tables__BPMN_LANE", "altvarname" => "BPMN_LANE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_LANESET", "varname" => "Tables__BPMN_LANESET", "altvarname" => "BPMN_LANESET", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_PARTICIPANT", "varname" => "Tables__BPMN_PARTICIPANT", "altvarname" => "BPMN_PARTICIPANT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_PROCESS", "varname" => "Tables__BPMN_PROCESS", "altvarname" => "BPMN_PROCESS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "BPMN_PROJECT", "varname" => "Tables__BPMN_PROJECT", "altvarname" => "BPMN_PROJECT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CALENDAR_ASSIGNMENTS", "varname" => "Tables__CALENDAR_ASSIGNMENTS", "altvarname" => "CALENDAR_ASSIGNMENTS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CALENDAR_BUSINESS_HOURS", "varname" => "Tables__CALENDAR_BUSINESS_HOURS", "altvarname" => "CALENDAR_BUSINESS_HOURS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CALENDAR_DEFINITION", "varname" => "Tables__CALENDAR_DEFINITION", "altvarname" => "CALENDAR_DEFINITION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CALENDAR_HOLIDAYS", "varname" => "Tables__CALENDAR_HOLIDAYS", "altvarname" => "CALENDAR_HOLIDAYS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CASE_CONSOLIDATED", "varname" => "Tables__CASE_CONSOLIDATED", "altvarname" => "CASE_CONSOLIDATED", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CASE_SCHEDULER", "varname" => "Tables__CASE_SCHEDULER", "altvarname" => "CASE_SCHEDULER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CASE_TRACKER", "varname" => "Tables__CASE_TRACKER", "altvarname" => "CASE_TRACKER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CASE_TRACKER_OBJECT", "varname" => "Tables__CASE_TRACKER_OBJECT", "altvarname" => "CASE_TRACKER_OBJECT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CATALOG", "varname" => "Tables__CATALOG", "altvarname" => "CATALOG", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CONFIGURATION", "varname" => "Tables__CONFIGURATION", "altvarname" => "CONFIGURATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "CONTENT", "varname" => "Tables__CONTENT", "altvarname" => "CONTENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DASHBOARD", "varname" => "Tables__DASHBOARD", "altvarname" => "DASHBOARD", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DASHBOARD_DAS_IND", "varname" => "Tables__DASHBOARD_DAS_IND", "altvarname" => "DASHBOARD_DAS_IND", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DASHBOARD_INDICATOR", "varname" => "Tables__DASHBOARD_INDICATOR", "altvarname" => "DASHBOARD_INDICATOR", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DASHLET", "varname" => "Tables__DASHLET", "altvarname" => "DASHLET", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DASHLET_INSTANCE", "varname" => "Tables__DASHLET_INSTANCE", "altvarname" => "DASHLET_INSTANCE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DB_SOURCE", "varname" => "Tables__DB_SOURCE", "altvarname" => "DB_SOURCE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DEPARTMENT", "varname" => "Tables__DEPARTMENT", "altvarname" => "DEPARTMENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DIM_TIME_COMPLETE", "varname" => "Tables__DIM_TIME_COMPLETE", "altvarname" => "DIM_TIME_COMPLETE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DIM_TIME_DELEGATE", "varname" => "Tables__DIM_TIME_DELEGATE", "altvarname" => "DIM_TIME_DELEGATE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "DYNAFORM", "varname" => "Tables__DYNAFORM", "altvarname" => "DYNAFORM", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ELEMENT_TASK_RELATION", "varname" => "Tables__ELEMENT_TASK_RELATION", "altvarname" => "ELEMENT_TASK_RELATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "EMAIL_EVENT", "varname" => "Tables__EMAIL_EVENT", "altvarname" => "EMAIL_EVENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "FIELD_CONDITION", "varname" => "Tables__FIELD_CONDITION", "altvarname" => "FIELD_CONDITION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "FIELDS", "varname" => "Tables__FIELDS", "altvarname" => "FIELDS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "GATEWAY", "varname" => "Tables__GATEWAY", "altvarname" => "GATEWAY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "GMAIL_RELABELING", "varname" => "Tables__GMAIL_RELABELING", "altvarname" => "GMAIL_RELABELING", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "GROUP_USER", "varname" => "Tables__GROUP_USER", "altvarname" => "GROUP_USER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "GROUPWF", "varname" => "Tables__GROUPWF", "altvarname" => "GROUPWF", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "HITWORD", "varname" => "Tables__HITWORD", "altvarname" => "HITWORD", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "HOLIDAY", "varname" => "Tables__HOLIDAY", "altvarname" => "HOLIDAY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "INPUT_DOCUMENT", "varname" => "Tables__INPUT_DOCUMENT", "altvarname" => "INPUT_DOCUMENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ISO_COUNTRY", "varname" => "Tables__ISO_COUNTRY", "altvarname" => "ISO_COUNTRY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ISO_LOCATION", "varname" => "Tables__ISO_LOCATION", "altvarname" => "ISO_LOCATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ISO_SUBDIVISION", "varname" => "Tables__ISO_SUBDIVISION", "altvarname" => "ISO_SUBDIVISION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "items", "varname" => "Tables__items", "altvarname" => "items", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LANGUAGE", "varname" => "Tables__LANGUAGE", "altvarname" => "LANGUAGE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LEXICO", "varname" => "Tables__LEXICO", "altvarname" => "LEXICO", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LICENSE_MANAGER", "varname" => "Tables__LICENSE_MANAGER", "altvarname" => "LICENSE_MANAGER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_CANCELED", "varname" => "Tables__LIST_CANCELED", "altvarname" => "LIST_CANCELED", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_COMPLETED", "varname" => "Tables__LIST_COMPLETED", "altvarname" => "LIST_COMPLETED", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_INBOX", "varname" => "Tables__LIST_INBOX", "altvarname" => "LIST_INBOX", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_MY_INBOX", "varname" => "Tables__LIST_MY_INBOX", "altvarname" => "LIST_MY_INBOX", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_PARTICIPATED_HISTORY", "varname" => "Tables__LIST_PARTICIPATED_HISTORY", "altvarname" => "LIST_PARTICIPATED_HISTORY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_PARTICIPATED_LAST", "varname" => "Tables__LIST_PARTICIPATED_LAST", "altvarname" => "LIST_PARTICIPATED_LAST", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_PAUSED", "varname" => "Tables__LIST_PAUSED", "altvarname" => "LIST_PAUSED", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_UNASSIGNED", "varname" => "Tables__LIST_UNASSIGNED", "altvarname" => "LIST_UNASSIGNED", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LIST_UNASSIGNED_GROUP", "varname" => "Tables__LIST_UNASSIGNED_GROUP", "altvarname" => "LIST_UNASSIGNED_GROUP", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LOG_CASES_SCHEDULER", "varname" => "Tables__LOG_CASES_SCHEDULER", "altvarname" => "LOG_CASES_SCHEDULER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "LOGIN_LOG", "varname" => "Tables__LOGIN_LOG", "altvarname" => "LOGIN_LOG", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "MESSAGE_APPLICATION", "varname" => "Tables__MESSAGE_APPLICATION", "altvarname" => "MESSAGE_APPLICATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "MESSAGE_EVENT_DEFINITION", "varname" => "Tables__MESSAGE_EVENT_DEFINITION", "altvarname" => "MESSAGE_EVENT_DEFINITION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "MESSAGE_EVENT_RELATION", "varname" => "Tables__MESSAGE_EVENT_RELATION", "altvarname" => "MESSAGE_EVENT_RELATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "MESSAGE_TYPE", "varname" => "Tables__MESSAGE_TYPE", "altvarname" => "MESSAGE_TYPE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "MESSAGE_TYPE_VARIABLE", "varname" => "Tables__MESSAGE_TYPE_VARIABLE", "altvarname" => "MESSAGE_TYPE_VARIABLE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modx_categories", "varname" => "Tables__modx_categories", "altvarname" => "modx_categories", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modx_site_htmlsnippets", "varname" => "Tables__modx_site_htmlsnippets", "altvarname" => "modx_site_htmlsnippets", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modx_site_plugins", "varname" => "Tables__modx_site_plugins", "altvarname" => "modx_site_plugins", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modx_site_snippets", "varname" => "Tables__modx_site_snippets", "altvarname" => "modx_site_snippets", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modx_site_templates", "varname" => "Tables__modx_site_templates", "altvarname" => "modx_site_templates", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modxdf_site_content", "varname" => "Tables__modxdf_site_content", "altvarname" => "modxdf_site_content", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modxdf_site_htmlsnippets", "varname" => "Tables__modxdf_site_htmlsnippets", "altvarname" => "modxdf_site_htmlsnippets", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modxdf_site_plugins", "varname" => "Tables__modxdf_site_plugins", "altvarname" => "modxdf_site_plugins", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modxdf_site_snippets", "varname" => "Tables__modxdf_site_snippets", "altvarname" => "modxdf_site_snippets", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modxdf_site_templates", "varname" => "Tables__modxdf_site_templates", "altvarname" => "modxdf_site_templates", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "modxdf_site_tmplvars", "varname" => "Tables__modxdf_site_tmplvars", "altvarname" => "modxdf_site_tmplvars", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "NOTIFICATION_DEVICE", "varname" => "Tables__NOTIFICATION_DEVICE", "altvarname" => "NOTIFICATION_DEVICE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "NOTIFICATION_QUEUE", "varname" => "Tables__NOTIFICATION_QUEUE", "altvarname" => "NOTIFICATION_QUEUE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OAUTH_ACCESS_TOKENS", "varname" => "Tables__OAUTH_ACCESS_TOKENS", "altvarname" => "OAUTH_ACCESS_TOKENS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OAUTH_AUTHORIZATION_CODES", "varname" => "Tables__OAUTH_AUTHORIZATION_CODES", "altvarname" => "OAUTH_AUTHORIZATION_CODES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OAUTH_CLIENTS", "varname" => "Tables__OAUTH_CLIENTS", "altvarname" => "OAUTH_CLIENTS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OAUTH_REFRESH_TOKENS", "varname" => "Tables__OAUTH_REFRESH_TOKENS", "altvarname" => "OAUTH_REFRESH_TOKENS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OAUTH_SCOPES", "varname" => "Tables__OAUTH_SCOPES", "altvarname" => "OAUTH_SCOPES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OBJECT_PERMISSION", "varname" => "Tables__OBJECT_PERMISSION", "altvarname" => "OBJECT_PERMISSION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "OUTPUT_DOCUMENT", "varname" => "Tables__OUTPUT_DOCUMENT", "altvarname" => "OUTPUT_DOCUMENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMOAUTH_USER_ACCESS_TOKENS", "varname" => "Tables__PMOAUTH_USER_ACCESS_TOKENS", "altvarname" => "PMOAUTH_USER_ACCESS_TOKENS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_ANNUAL_REVENUE", "varname" => "Tables__PMT_ANNUAL_REVENUE", "altvarname" => "PMT_ANNUAL_REVENUE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_COMMAND", "varname" => "Tables__PMT_COMMAND", "altvarname" => "PMT_COMMAND", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_ECCUBE", "varname" => "Tables__PMT_ECCUBE", "altvarname" => "PMT_ECCUBE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_ECCUBEBLOG", "varname" => "Tables__PMT_ECCUBEBLOG", "altvarname" => "PMT_ECCUBEBLOG", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_FIELD", "varname" => "Tables__PMT_FIELD", "altvarname" => "PMT_FIELD", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_INVOICE", "varname" => "Tables__PMT_INVOICE", "altvarname" => "PMT_INVOICE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_INVOICE_ITEMS", "varname" => "Tables__PMT_INVOICE_ITEMS", "altvarname" => "PMT_INVOICE_ITEMS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_LINE", "varname" => "Tables__PMT_LINE", "altvarname" => "PMT_LINE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_MENU", "varname" => "Tables__PMT_MENU", "altvarname" => "PMT_MENU", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_MITUMORI1", "varname" => "Tables__PMT_MITUMORI1", "altvarname" => "PMT_MITUMORI1", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_MST_BRMS", "varname" => "Tables__PMT_MST_BRMS", "altvarname" => "PMT_MST_BRMS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_PMSEIKYUUSHO", "varname" => "Tables__PMT_PMSEIKYUUSHO", "altvarname" => "PMT_PMSEIKYUUSHO", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_PROGRAM_LIST", "varname" => "Tables__PMT_PROGRAM_LIST", "altvarname" => "PMT_PROGRAM_LIST", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_QUOTE", "varname" => "Tables__PMT_QUOTE", "altvarname" => "PMT_QUOTE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_QUOTE_DETAILS", "varname" => "Tables__PMT_QUOTE_DETAILS", "altvarname" => "PMT_QUOTE_DETAILS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_RESIDENTS_BASIC_ATTRIBUTES", "varname" => "Tables__PMT_RESIDENTS_BASIC_ATTRIBUTES", "altvarname" => "PMT_RESIDENTS_BASIC_ATTRIBUTES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_SAGAWA", "varname" => "Tables__PMT_SAGAWA", "altvarname" => "PMT_SAGAWA", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_SITE", "varname" => "Tables__PMT_SITE", "altvarname" => "PMT_SITE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_SITE_REGISTRATION", "varname" => "Tables__PMT_SITE_REGISTRATION", "altvarname" => "PMT_SITE_REGISTRATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_SPREADMAIN", "varname" => "Tables__PMT_SPREADMAIN", "altvarname" => "PMT_SPREADMAIN", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_SPREADSUB", "varname" => "Tables__PMT_SPREADSUB", "altvarname" => "PMT_SPREADSUB", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_SUBCONTRACTORS", "varname" => "Tables__PMT_SUBCONTRACTORS", "altvarname" => "PMT_SUBCONTRACTORS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_TEST_BUSINESS", "varname" => "Tables__PMT_TEST_BUSINESS", "altvarname" => "PMT_TEST_BUSINESS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_TEST_BUSINESS_3", "varname" => "Tables__PMT_TEST_BUSINESS_3", "altvarname" => "PMT_TEST_BUSINESS_3", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PMT_TEST_SCREEN", "varname" => "Tables__PMT_TEST_SCREEN", "altvarname" => "PMT_TEST_SCREEN", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ppcategory", "varname" => "Tables__ppcategory", "altvarname" => "ppcategory", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ppmain", "varname" => "Tables__ppmain", "altvarname" => "ppmain", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "pppaypal_info", "varname" => "Tables__pppaypal_info", "altvarname" => "pppaypal_info", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ppsubcategory", "varname" => "Tables__ppsubcategory", "altvarname" => "ppsubcategory", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ppusers", "varname" => "Tables__ppusers", "altvarname" => "ppusers", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PRO_REPORTING", "varname" => "Tables__PRO_REPORTING", "altvarname" => "PRO_REPORTING", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PROCESS", "varname" => "Tables__PROCESS", "altvarname" => "PROCESS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PROCESS_CATEGORY", "varname" => "Tables__PROCESS_CATEGORY", "altvarname" => "PROCESS_CATEGORY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PROCESS_FILES", "varname" => "Tables__PROCESS_FILES", "altvarname" => "PROCESS_FILES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PROCESS_OWNER", "varname" => "Tables__PROCESS_OWNER", "altvarname" => "PROCESS_OWNER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PROCESS_USER", "varname" => "Tables__PROCESS_USER", "altvarname" => "PROCESS_USER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "PROCESS_VARIABLES", "varname" => "Tables__PROCESS_VARIABLES", "altvarname" => "PROCESS_VARIABLES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "Processmaker111_4settings", "varname" => "Tables__Processmaker111_4settings", "altvarname" => "Processmaker111_4settings", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "processmaker_audit", "varname" => "Tables__processmaker_audit", "altvarname" => "processmaker_audit", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "processmaker_locking", "varname" => "Tables__processmaker_locking", "altvarname" => "processmaker_locking", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "processmaker_uggroups", "varname" => "Tables__processmaker_uggroups", "altvarname" => "processmaker_uggroups", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "processmaker_ugmembers", "varname" => "Tables__processmaker_ugmembers", "altvarname" => "processmaker_ugmembers", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "processmaker_ugrights", "varname" => "Tables__processmaker_ugrights", "altvarname" => "processmaker_ugrights", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_AUTHENTICATION_SOURCE", "varname" => "Tables__RBAC_AUTHENTICATION_SOURCE", "altvarname" => "RBAC_AUTHENTICATION_SOURCE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_PERMISSIONS", "varname" => "Tables__RBAC_PERMISSIONS", "altvarname" => "RBAC_PERMISSIONS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_ROLES", "varname" => "Tables__RBAC_ROLES", "altvarname" => "RBAC_ROLES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_ROLES_PERMISSIONS", "varname" => "Tables__RBAC_ROLES_PERMISSIONS", "altvarname" => "RBAC_ROLES_PERMISSIONS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_SYSTEMS", "varname" => "Tables__RBAC_SYSTEMS", "altvarname" => "RBAC_SYSTEMS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_USERS", "varname" => "Tables__RBAC_USERS", "altvarname" => "RBAC_USERS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "RBAC_USERS_ROLES", "varname" => "Tables__RBAC_USERS_ROLES", "altvarname" => "RBAC_USERS_ROLES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "REPORT_TABLE", "varname" => "Tables__REPORT_TABLE", "altvarname" => "REPORT_TABLE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "REPORT_VAR", "varname" => "Tables__REPORT_VAR", "altvarname" => "REPORT_VAR", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "ROUTE", "varname" => "Tables__ROUTE", "altvarname" => "ROUTE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SCRIPT_TASK", "varname" => "Tables__SCRIPT_TASK", "altvarname" => "SCRIPT_TASK", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SEQUENCES", "varname" => "Tables__SEQUENCES", "altvarname" => "SEQUENCES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SESSION", "varname" => "Tables__SESSION", "altvarname" => "SESSION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SESSION_STORAGE", "varname" => "Tables__SESSION_STORAGE", "altvarname" => "SESSION_STORAGE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SHADOW_TABLE", "varname" => "Tables__SHADOW_TABLE", "altvarname" => "SHADOW_TABLE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "STAGE", "varname" => "Tables__STAGE", "altvarname" => "STAGE", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "STEP", "varname" => "Tables__STEP", "altvarname" => "STEP", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "STEP_SUPERVISOR", "varname" => "Tables__STEP_SUPERVISOR", "altvarname" => "STEP_SUPERVISOR", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "STEP_TRIGGER", "varname" => "Tables__STEP_TRIGGER", "altvarname" => "STEP_TRIGGER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SUB_APPLICATION", "varname" => "Tables__SUB_APPLICATION", "altvarname" => "SUB_APPLICATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SUB_PROCESS", "varname" => "Tables__SUB_PROCESS", "altvarname" => "SUB_PROCESS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "SWIMLANES_ELEMENTS", "varname" => "Tables__SWIMLANES_ELEMENTS", "altvarname" => "SWIMLANES_ELEMENTS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "TASK", "varname" => "Tables__TASK", "altvarname" => "TASK", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "TASK_USER", "varname" => "Tables__TASK_USER", "altvarname" => "TASK_USER", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "TIMER_EVENT", "varname" => "Tables__TIMER_EVENT", "altvarname" => "TIMER_EVENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "TRANSLATION", "varname" => "Tables__TRANSLATION", "altvarname" => "TRANSLATION", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "TRIGGERS", "varname" => "Tables__TRIGGERS", "altvarname" => "TRIGGERS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "USERS", "varname" => "Tables__USERS", "altvarname" => "USERS", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "USERS_PROPERTIES", "varname" => "Tables__USERS_PROPERTIES", "altvarname" => "USERS_PROPERTIES", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "USR_REPORTING", "varname" => "Tables__USR_REPORTING", "altvarname" => "USR_REPORTING", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "WEB_ENTRY", "varname" => "Tables__WEB_ENTRY", "altvarname" => "WEB_ENTRY", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "WEB_ENTRY_EVENT", "varname" => "Tables__WEB_ENTRY_EVENT", "altvarname" => "WEB_ENTRY_EVENT", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "WEBSOCKET", "varname" => "Tables__WEBSOCKET", "altvarname" => "WEBSOCKET", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_commentmeta", "varname" => "Tables__wpfg_commentmeta", "altvarname" => "wpfg_commentmeta", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_comments", "varname" => "Tables__wpfg_comments", "altvarname" => "wpfg_comments", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_links", "varname" => "Tables__wpfg_links", "altvarname" => "wpfg_links", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_options", "varname" => "Tables__wpfg_options", "altvarname" => "wpfg_options", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_postmeta", "varname" => "Tables__wpfg_postmeta", "altvarname" => "wpfg_postmeta", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_posts", "varname" => "Tables__wpfg_posts", "altvarname" => "wpfg_posts", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_term_relationships", "varname" => "Tables__wpfg_term_relationships", "altvarname" => "wpfg_term_relationships", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_term_taxonomy", "varname" => "Tables__wpfg_term_taxonomy", "altvarname" => "wpfg_term_taxonomy", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_termmeta", "varname" => "Tables__wpfg_termmeta", "altvarname" => "wpfg_termmeta", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_terms", "varname" => "Tables__wpfg_terms", "altvarname" => "wpfg_terms", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_usermeta", "varname" => "Tables__wpfg_usermeta", "altvarname" => "wpfg_usermeta", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "wpfg_users", "varname" => "Tables__wpfg_users", "altvarname" => "wpfg_users", "connId" => "Tables", "schema" => "", "connName" => "RealEstate at localhost");
		$this->lstTables[] = array("name" => "general_log", "varname" => "domainhere_at_iphere__general_log", "altvarname" => "general_log", "connId" => "domainhere_at_iphere", "schema" => "", "connName" => "mysql at iphere");
		$this->lstTables[] = array("name" => "COLUMNS", "varname" => "information_schema_at_iphere__COLUMNS", "altvarname" => "COLUMNS", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "PLUGINS", "varname" => "information_schema_at_iphere__PLUGINS", "altvarname" => "PLUGINS", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "ROUTINES", "varname" => "information_schema_at_iphere__ROUTINES", "altvarname" => "ROUTINES", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "SCHEMATA", "varname" => "information_schema_at_iphere__SCHEMATA", "altvarname" => "SCHEMATA", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "TABLE_CONSTRAINTS", "varname" => "information_schema_at_iphere__TABLE_CONSTRAINTS", "altvarname" => "TABLE_CONSTRAINTS", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "TABLES", "varname" => "information_schema_at_iphere__TABLES", "altvarname" => "TABLES", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "TABLESPACES", "varname" => "information_schema_at_iphere__TABLESPACES", "altvarname" => "TABLESPACES", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
		$this->lstTables[] = array("name" => "TRIGGERS", "varname" => "information_schema_at_iphere__TRIGGERS", "altvarname" => "TRIGGERS", "connId" => "information_schema_at_iphere", "schema" => "", "connName" => "information_schema at iphere");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>
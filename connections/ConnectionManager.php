<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "Tables" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "Tables" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->getDefault();
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "Tables" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->byId( "Tables" );
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}
	
	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "Tables";
		$data["connName"] = "RealEstate at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;iphere;admin;passwordhere;3306;wf_workflow;;1"; //currently unused
		
		$this->_connectionsIdByName["RealEstate at localhost"] = "Tables";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "admin";
		$data["ODBCPWD"] = "passwordhere";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "iphere";
		$data["connInfo"][1] = "admin";
		$data["connInfo"][2] = "passwordhere";
		$data["connInfo"][3] = "3306";
		$data["connInfo"][4] = "wf_workflow";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=iphere;Uid=admin;Pwd=passwordhere;Port=3306;Database=wf_workflow;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["Tables"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "domainhere_at_iphere";
		$data["connName"] = "mysql at iphere";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;iphere;admin;passwordhere;3306;mysql;;1"; //currently unused
		
		$this->_connectionsIdByName["mysql at iphere"] = "domainhere_at_iphere";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "admin";
		$data["ODBCPWD"] = "passwordhere";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "iphere";
		$data["connInfo"][1] = "admin";
		$data["connInfo"][2] = "passwordhere";
		$data["connInfo"][3] = "3306";
		$data["connInfo"][4] = "mysql";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=iphere;Uid=admin;Pwd=passwordhere;Port=3306;Database=mysql;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["domainhere_at_iphere"] = $data;
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "information_schema_at_iphere";
		$data["connName"] = "information_schema at iphere";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;iphere;admin;passwordhere;3306;information_schema;;1"; //currently unused
		
		$this->_connectionsIdByName["information_schema at iphere"] = "information_schema_at_iphere";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "admin";
		$data["ODBCPWD"] = "passwordhere";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "iphere";
		$data["connInfo"][1] = "admin";
		$data["connInfo"][2] = "passwordhere";
		$data["connInfo"][3] = "3306";
		$data["connInfo"][4] = "information_schema";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=iphere;Uid=admin;Pwd=passwordhere;Port=3306;Database=information_schema;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["information_schema_at_iphere"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["ABE_CONFIGURATION"] = "Tables";
		$connectionsIds["ABE_REQUESTS"] = "Tables";
		$connectionsIds["ABE_RESPONSES"] = "Tables";
		$connectionsIds["ADDITIONAL_TABLES"] = "Tables";
		$connectionsIds["ADDONS_MANAGER"] = "Tables";
		$connectionsIds["ADDONS_STORE"] = "Tables";
		$connectionsIds["APPLICATION"] = "Tables";
		$connectionsIds["APP_ASSIGN_SELF_SERVICE_VALUE"] = "Tables";
		$connectionsIds["APP_CACHE_VIEW"] = "Tables";
		$connectionsIds["APP_DELAY"] = "Tables";
		$connectionsIds["APP_DELEGATION"] = "Tables";
		$connectionsIds["USERS"] = "Tables";
		$connectionsIds["TRANSLATION"] = "Tables";
		$connectionsIds["admin_rights"] = "Tables";
		$connectionsIds["BPMN_PROJECT"] = "Tables";
		$connectionsIds["BPMN_PROCESS"] = "Tables";
		$connectionsIds["CONTENT"] = "Tables";
		$connectionsIds["PROCESS"] = "Tables";
		$connectionsIds["PROCESS_CATEGORY"] = "Tables";
		$connectionsIds["PROCESS_FILES"] = "Tables";
		$connectionsIds["PROCESS_OWNER"] = "Tables";
		$connectionsIds["PROCESS_USER"] = "Tables";
		$connectionsIds["PROCESS_VARIABLES"] = "Tables";
		$connectionsIds["TRIGGERS"] = "Tables";
		$connectionsIds["USERS_PROPERTIES"] = "Tables";
		$connectionsIds["USR_REPORTING"] = "Tables";
		$connectionsIds["WEB_ENTRY"] = "Tables";
		$connectionsIds["TASK"] = "Tables";
		$connectionsIds["TASK_USER"] = "Tables";
		$connectionsIds["BPMN_PARTICIPANT"] = "Tables";
		$connectionsIds["BPMN_LANESET"] = "Tables";
		$connectionsIds["BPMN_LANE"] = "Tables";
		$connectionsIds["BPMN_GATEWAY"] = "Tables";
		$connectionsIds["BPMN_FLOW"] = "Tables";
		$connectionsIds["BPMN_EXTENSION"] = "Tables";
		$connectionsIds["BPMN_EVENT"] = "Tables";
		$connectionsIds["BPMN_DOCUMENTATION"] = "Tables";
		$connectionsIds["BPMN_DIAGRAM"] = "Tables";
		$connectionsIds["BPMN_DATA"] = "Tables";
		$connectionsIds["BPMN_BOUND"] = "Tables";
		$connectionsIds["BPMN_ACTIVITY"] = "Tables";
		$connectionsIds["BPMN_ARTIFACT"] = "Tables";
		$connectionsIds["DYNAFORM"] = "Tables";
		$connectionsIds["APPLICATION1"] = "Tables";
		$connectionsIds["APP_DOCUMENT"] = "Tables";
		$connectionsIds["APP_EVENT"] = "Tables";
		$connectionsIds["APP_FOLDER"] = "Tables";
		$connectionsIds["APP_HISTORY"] = "Tables";
		$connectionsIds["APP_MESSAGE"] = "Tables";
		$connectionsIds["APP_NOTES"] = "Tables";
		$connectionsIds["APP_OWNER"] = "Tables";
		$connectionsIds["APP_SEQUENCE"] = "Tables";
		$connectionsIds["APP_SOLR_QUEUE"] = "Tables";
		$connectionsIds["APP_THREAD"] = "Tables";
		$connectionsIds["APP_TIMEOUT_ACTION_EXECUTED"] = "Tables";
		$connectionsIds["ISO_COUNTRY"] = "Tables";
		$connectionsIds["ISO_LOCATION"] = "Tables";
		$connectionsIds["ISO_SUBDIVISION"] = "Tables";
		$connectionsIds["LANGUAGE"] = "Tables";
		$connectionsIds["LEXICO"] = "Tables";
		$connectionsIds["STEP"] = "Tables";
		$connectionsIds["STEP_TRIGGER"] = "Tables";
		$connectionsIds["SUB_APPLICATION"] = "Tables";
		$connectionsIds["ROUTE"] = "Tables";
		$connectionsIds["processmaker_audit"] = "Tables";
		$connectionsIds["processmaker_locking"] = "Tables";
		$connectionsIds["processmaker_uggroups"] = "Tables";
		$connectionsIds["processmaker_ugmembers"] = "Tables";
		$connectionsIds["processmaker_ugrights"] = "Tables";
		$connectionsIds["PMT_MENU"] = "Tables";
		$connectionsIds["PMT_MENU1"] = "Tables";
		$connectionsIds["CONTENT1"] = "Tables";
		$connectionsIds["CONTENT11"] = "Tables";
		$connectionsIds["CONTENT2"] = "Tables";
		$connectionsIds["CONTENT3"] = "Tables";
		$connectionsIds["PRO_REPORTING"] = "Tables";
		$connectionsIds["LOGIN_LOG"] = "Tables";
		$connectionsIds["LOG_CASES_SCHEDULER"] = "Tables";
		$connectionsIds["LIST_UNASSIGNED_GROUP"] = "Tables";
		$connectionsIds["LIST_UNASSIGNED"] = "Tables";
		$connectionsIds["LIST_PAUSED"] = "Tables";
		$connectionsIds["LIST_PARTICIPATED_LAST"] = "Tables";
		$connectionsIds["LIST_PARTICIPATED_HISTORY"] = "Tables";
		$connectionsIds["LIST_MY_INBOX"] = "Tables";
		$connectionsIds["LIST_INBOX"] = "Tables";
		$connectionsIds["LIST_COMPLETED"] = "Tables";
		$connectionsIds["LIST_CANCELED"] = "Tables";
		$connectionsIds["LICENSE_MANAGER"] = "Tables";
		$connectionsIds["CONTENT4"] = "Tables";
		$connectionsIds["CONTENT41"] = "Tables";
		$connectionsIds["CONTENT411"] = "Tables";
		$connectionsIds["RBAC_AUTHENTICATION_SOURCE"] = "Tables";
		$connectionsIds["RBAC_PERMISSIONS"] = "Tables";
		$connectionsIds["RBAC_ROLES"] = "Tables";
		$connectionsIds["RBAC_ROLES_PERMISSIONS"] = "Tables";
		$connectionsIds["RBAC_SYSTEMS"] = "Tables";
		$connectionsIds["RBAC_USERS"] = "Tables";
		$connectionsIds["RBAC_USERS_ROLES"] = "Tables";
		$connectionsIds["DB_SOURCE"] = "Tables";
		$connectionsIds["DEPARTMENT"] = "Tables";
		$connectionsIds["GROUPWF"] = "Tables";
		$connectionsIds["GROUP_USER"] = "Tables";
		$connectionsIds["MESSAGE_APPLICATION"] = "Tables";
		$connectionsIds["MESSAGE_EVENT_DEFINITION"] = "Tables";
		$connectionsIds["MESSAGE_EVENT_RELATION"] = "Tables";
		$connectionsIds["MESSAGE_TYPE"] = "Tables";
		$connectionsIds["SCRIPT_TASK"] = "Tables";
		$connectionsIds["SEQUENCES"] = "Tables";
		$connectionsIds["SESSION"] = "Tables";
		$connectionsIds["STAGE"] = "Tables";
		$connectionsIds["STEP_SUPERVISOR"] = "Tables";
		$connectionsIds["SUB_PROCESS"] = "Tables";
		$connectionsIds["SWIMLANES_ELEMENTS"] = "Tables";
		$connectionsIds["FIELDS"] = "Tables";
		$connectionsIds["FIELD_CONDITION"] = "Tables";
		$connectionsIds["CATALOG"] = "Tables";
		$connectionsIds["CASE_TRACKER_OBJECT"] = "Tables";
		$connectionsIds["CASE_TRACKER"] = "Tables";
		$connectionsIds["CASE_SCHEDULER"] = "Tables";
		$connectionsIds["CASE_CONSOLIDATED"] = "Tables";
		$connectionsIds["REPORT_TABLE"] = "Tables";
		$connectionsIds["REPORT_VAR"] = "Tables";
		$connectionsIds["WEB_ENTRY_EVENT"] = "Tables";
		$connectionsIds["CONFIGURATION"] = "Tables";
		$connectionsIds["DIM_TIME_COMPLETE"] = "Tables";
		$connectionsIds["DIM_TIME_DELEGATE"] = "Tables";
		$connectionsIds["ELEMENT_TASK_RELATION"] = "Tables";
		$connectionsIds["TIMER_EVENT"] = "Tables";
		$connectionsIds["PMT_COMMAND"] = "Tables";
		$connectionsIds["APP_CACHE_VIEW_INDEX"] = "Tables";
		$connectionsIds["admin_members"] = "Tables";
		$connectionsIds["admin_users"] = "Tables";
		$connectionsIds["PMT_LINE"] = "Tables";
		$connectionsIds["PMT_FIELD"] = "Tables";
		$connectionsIds["PMT_COMMAND Report"] = "Tables";
		$connectionsIds["APP_CACHE_VIEW_DRAFT"] = "Tables";
		$connectionsIds["APP_CACHE_VIEW_PARTICIPATE"] = "Tables";
		$connectionsIds["APP_CACHE_VIEW_PAUSE"] = "Tables";
		$connectionsIds["INPUT_DOCUMENT"] = "Tables";
		$connectionsIds["EMAIL_EVENT"] = "Tables";
		$connectionsIds["DASHLET_INSTANCE"] = "Tables";
		$connectionsIds["DASHBOARD_INDICATOR"] = "Tables";
		$connectionsIds["DASHLET"] = "Tables";
		$connectionsIds["DASHBOARD_DAS_IND"] = "Tables";
		$connectionsIds["DASHBOARD1"] = "Tables";
		$connectionsIds["general_log"] = "domainhere_at_iphere";
		$connectionsIds["COLUMNS"] = "information_schema_at_iphere";
		$connectionsIds["TRIGGERS1"] = "information_schema_at_iphere";
		$connectionsIds["TABLES"] = "information_schema_at_iphere";
		$connectionsIds["SCHEMATA"] = "information_schema_at_iphere";
		$connectionsIds["PMT_ECCUBE"] = "Tables";
		$connectionsIds["PMT_ECCUBEBLOG"] = "Tables";
		$connectionsIds["modx_site_content"] = "Tables";
		$connectionsIds["modx_site_htmlsnippets"] = "Tables";
		$connectionsIds["modx_site_snippets"] = "Tables";
		$connectionsIds["modx_site_templates"] = "Tables";
		$connectionsIds["modx_site_plugins"] = "Tables";
		$connectionsIds["modx_categories"] = "Tables";
		$connectionsIds["APPLICATION Chart"] = "Tables";
		$connectionsIds["APPLICATION Report"] = "Tables";
		$connectionsIds["modx_site_content_child"] = "Tables";
		$connectionsIds["modx_site_content_dash"] = "Tables";
		$connectionsIds["BPMBOXEoc2"] = "Tables";
		$connectionsIds["items"] = "Tables";
		$connectionsIds["ppmain"] = "Tables";
		$connectionsIds["pppaypal_info"] = "Tables";
		$connectionsIds["ppadmin main"] = "Tables";
		$connectionsIds["ppsubcategory"] = "Tables";
		$connectionsIds["ppusers"] = "Tables";
		$connectionsIds["ppcategory"] = "Tables";
		$connectionsIds["ppcategory1"] = "Tables";
		$connectionsIds["API"] = "Tables";
		$connectionsIds["CALENDAR_ASSIGNMENTS"] = "Tables";
		$connectionsIds["CALENDAR_BUSINESS_HOURS"] = "Tables";
		$connectionsIds["CALENDAR_DEFINITION"] = "Tables";
		$connectionsIds["CALENDAR_HOLIDAYS"] = "Tables";
		$connectionsIds["GATEWAY"] = "Tables";
		$connectionsIds["GMAIL_RELABELING"] = "Tables";
		$connectionsIds["HOLIDAY"] = "Tables";
		$connectionsIds["MESSAGE_TYPE_VARIABLE"] = "Tables";
		$connectionsIds["NOTIFICATION_DEVICE"] = "Tables";
		$connectionsIds["NOTIFICATION_QUEUE"] = "Tables";
		$connectionsIds["OAUTH_ACCESS_TOKENS"] = "Tables";
		$connectionsIds["OAUTH_AUTHORIZATION_CODES"] = "Tables";
		$connectionsIds["OAUTH_CLIENTS"] = "Tables";
		$connectionsIds["OAUTH_REFRESH_TOKENS"] = "Tables";
		$connectionsIds["OAUTH_SCOPES"] = "Tables";
		$connectionsIds["OBJECT_PERMISSION"] = "Tables";
		$connectionsIds["OUTPUT_DOCUMENT"] = "Tables";
		$connectionsIds["PMOAUTH_USER_ACCESS_TOKENS"] = "Tables";
		$connectionsIds["SESSION_STORAGE"] = "Tables";
		$connectionsIds["SHADOW_TABLE"] = "Tables";
		$connectionsIds["APP_ASSIGN_SELF_SERVICE_VALUE_GROUP"] = "Tables";
		$connectionsIds["modxdf_site_templates"] = "Tables";
		$connectionsIds["modxdf_site_snippets"] = "Tables";
		$connectionsIds["modxdf_site_plugins"] = "Tables";
		$connectionsIds["modxdf_site_content"] = "Tables";
		$connectionsIds["modxdf_site_htmlsnippets"] = "Tables";
		$connectionsIds["modxdf_site_tmplvars"] = "Tables";
		$connectionsIds["WEBSOCKET"] = "Tables";
		$connectionsIds["PMT_TEST_BUSINESS_3"] = "Tables";
		$connectionsIds["PMT_SITE_REGISTRATION"] = "Tables";
		$connectionsIds["HITWORD"] = "Tables";
		$connectionsIds["PLUGINS"] = "information_schema_at_iphere";
		$connectionsIds["TABLESPACES"] = "information_schema_at_iphere";
		$connectionsIds["TABLE_CONSTRAINTS"] = "information_schema_at_iphere";
		$connectionsIds["PMT_SITE"] = "Tables";
		$connectionsIds["wpfg_commentmeta"] = "Tables";
		$connectionsIds["wpfg_comments"] = "Tables";
		$connectionsIds["wpfg_links"] = "Tables";
		$connectionsIds["wpfg_options"] = "Tables";
		$connectionsIds["wpfg_postmeta"] = "Tables";
		$connectionsIds["wpfg_posts"] = "Tables";
		$connectionsIds["wpfg_term_relationships"] = "Tables";
		$connectionsIds["wpfg_term_taxonomy"] = "Tables";
		$connectionsIds["wpfg_termmeta"] = "Tables";
		$connectionsIds["wpfg_terms"] = "Tables";
		$connectionsIds["wpfg_usermeta"] = "Tables";
		$connectionsIds["wpfg_users"] = "Tables";
		$connectionsIds["PMT_ANNUAL_REVENUE"] = "Tables";
		$connectionsIds["PMT_TEST_BUSINESS"] = "Tables";
		$connectionsIds["PMT_SAGAWA"] = "Tables";
		$connectionsIds["PMT_RESIDENTS_BASIC_ATTRIBUTES"] = "Tables";
		$connectionsIds["PMT_QUOTE"] = "Tables";
		$connectionsIds["PMT_SUBCONTRACTORS"] = "Tables";
		$connectionsIds["PMT_MITUMORI1"] = "Tables";
		$connectionsIds["BPMBOXTRANS"] = "Tables";
		$connectionsIds["APPLICATION Report1"] = "Tables";
		$connectionsIds["ROUTINES"] = "information_schema_at_iphere";
		$connectionsIds["PMT_INVOICE"] = "Tables";
		$connectionsIds["PMT_INVOICE_ITEMS"] = "Tables";
		$connectionsIds["PMT_TEST_SCREEN"] = "Tables";
		$connectionsIds["PMT_SPREADMAIN"] = "Tables";
		$connectionsIds["PMT_SPREADSUB"] = "Tables";
		$connectionsIds["PMT_PROGRAM_LIST"] = "Tables";
		$connectionsIds["PMT_PMSEIKYUUSHO"] = "Tables";
		$connectionsIds["PMT_MST_BRMS"] = "Tables";
		$connectionsIds["PMT_QUOTE_DETAILS"] = "Tables";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>
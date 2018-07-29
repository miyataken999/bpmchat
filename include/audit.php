<?php
class AuditTrailTable
{
	var $logTableName="processmaker_audit";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function __construct()
	{
		global $cman;
		
		$this->connection = $cman->getForAudit();		
		$this->attLogin=3;
		$this->timeLogin=5;
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="USERS";
		$this->params[1]=$pUsername;
		$arr=array();
		$this->params=array($_SERVER["REMOTE_ADDR"],$_SESSION["UserID"]);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogin, "");
		}
		return $retval;
    }
	
    function LogLoginFailed($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="USERS";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strFailLogin, "");
		}
		$this->params=array($_SERVER["REMOTE_ADDR"],"");
		return $retval;
    }
	
    function LogLogout()
    {
	global $globalEvents;
	if($_SESSION["UserID"]!="")
	{
		$retval=true;
		$table="USERS";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogout, "");
		}
		return $retval;
	}
    }
	
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="USERS";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strChPass, "");
		}
		return $retval;
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="ABE_CONFIGURATION")
		{
			return true;
		}
		if($table=="ABE_REQUESTS")
		{
			return true;
		}
		if($table=="ABE_RESPONSES")
		{
			return true;
		}
		if($table=="ADDITIONAL_TABLES")
		{
			return true;
		}
		if($table=="ADDONS_MANAGER")
		{
			return true;
		}
		if($table=="ADDONS_STORE")
		{
			return true;
		}
		if($table=="APPLICATION")
		{
			return true;
		}
		if($table=="APP_ASSIGN_SELF_SERVICE_VALUE")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW")
		{
			return true;
		}
		if($table=="APP_DELAY")
		{
			return true;
		}
		if($table=="APP_DELEGATION")
		{
			return true;
		}
		if($table=="USERS")
		{
			return true;
		}
		if($table=="TRANSLATION")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="BPMN_PROJECT")
		{
			return true;
		}
		if($table=="BPMN_PROCESS")
		{
			return true;
		}
		if($table=="CONTENT")
		{
			return true;
		}
		if($table=="PROCESS")
		{
			return true;
		}
		if($table=="PROCESS_CATEGORY")
		{
			return true;
		}
		if($table=="PROCESS_FILES")
		{
			return true;
		}
		if($table=="PROCESS_OWNER")
		{
			return true;
		}
		if($table=="PROCESS_USER")
		{
			return true;
		}
		if($table=="PROCESS_VARIABLES")
		{
			return true;
		}
		if($table=="TRIGGERS")
		{
			return true;
		}
		if($table=="USERS_PROPERTIES")
		{
			return true;
		}
		if($table=="USR_REPORTING")
		{
			return true;
		}
		if($table=="WEB_ENTRY")
		{
			return true;
		}
		if($table=="TASK")
		{
			return true;
		}
		if($table=="TASK_USER")
		{
			return true;
		}
		if($table=="BPMN_PARTICIPANT")
		{
			return true;
		}
		if($table=="BPMN_LANESET")
		{
			return true;
		}
		if($table=="BPMN_LANE")
		{
			return true;
		}
		if($table=="BPMN_GATEWAY")
		{
			return true;
		}
		if($table=="BPMN_FLOW")
		{
			return true;
		}
		if($table=="BPMN_EXTENSION")
		{
			return true;
		}
		if($table=="BPMN_EVENT")
		{
			return true;
		}
		if($table=="BPMN_DOCUMENTATION")
		{
			return true;
		}
		if($table=="BPMN_DIAGRAM")
		{
			return true;
		}
		if($table=="BPMN_DATA")
		{
			return true;
		}
		if($table=="BPMN_BOUND")
		{
			return true;
		}
		if($table=="BPMN_ACTIVITY")
		{
			return true;
		}
		if($table=="BPMN_ARTIFACT")
		{
			return true;
		}
		if($table=="DYNAFORM")
		{
			return true;
		}
		if($table=="APPLICATION1")
		{
			return true;
		}
		if($table=="APP_DOCUMENT")
		{
			return true;
		}
		if($table=="APP_EVENT")
		{
			return true;
		}
		if($table=="APP_FOLDER")
		{
			return true;
		}
		if($table=="APP_HISTORY")
		{
			return true;
		}
		if($table=="APP_MESSAGE")
		{
			return true;
		}
		if($table=="APP_NOTES")
		{
			return true;
		}
		if($table=="APP_OWNER")
		{
			return true;
		}
		if($table=="APP_SEQUENCE")
		{
			return true;
		}
		if($table=="APP_SOLR_QUEUE")
		{
			return true;
		}
		if($table=="APP_THREAD")
		{
			return true;
		}
		if($table=="APP_TIMEOUT_ACTION_EXECUTED")
		{
			return true;
		}
		if($table=="ISO_COUNTRY")
		{
			return true;
		}
		if($table=="ISO_LOCATION")
		{
			return true;
		}
		if($table=="ISO_SUBDIVISION")
		{
			return true;
		}
		if($table=="LANGUAGE")
		{
			return true;
		}
		if($table=="LEXICO")
		{
			return true;
		}
		if($table=="STEP")
		{
			return true;
		}
		if($table=="STEP_TRIGGER")
		{
			return true;
		}
		if($table=="SUB_APPLICATION")
		{
			return true;
		}
		if($table=="ROUTE")
		{
			return true;
		}
		if($table=="processmaker_audit")
		{
			return true;
		}
		if($table=="processmaker_locking")
		{
			return true;
		}
		if($table=="processmaker_uggroups")
		{
			return true;
		}
		if($table=="processmaker_ugmembers")
		{
			return true;
		}
		if($table=="processmaker_ugrights")
		{
			return true;
		}
		if($table=="PMT_MENU")
		{
			return true;
		}
		if($table=="PMT_MENU1")
		{
			return true;
		}
		if($table=="CONTENT1")
		{
			return true;
		}
		if($table=="CONTENT11")
		{
			return true;
		}
		if($table=="CONTENT2")
		{
			return true;
		}
		if($table=="CONTENT3")
		{
			return true;
		}
		if($table=="PRO_REPORTING")
		{
			return true;
		}
		if($table=="LOGIN_LOG")
		{
			return true;
		}
		if($table=="LOG_CASES_SCHEDULER")
		{
			return true;
		}
		if($table=="LIST_UNASSIGNED_GROUP")
		{
			return true;
		}
		if($table=="LIST_UNASSIGNED")
		{
			return true;
		}
		if($table=="LIST_PAUSED")
		{
			return true;
		}
		if($table=="LIST_PARTICIPATED_LAST")
		{
			return true;
		}
		if($table=="LIST_PARTICIPATED_HISTORY")
		{
			return true;
		}
		if($table=="LIST_MY_INBOX")
		{
			return true;
		}
		if($table=="LIST_INBOX")
		{
			return true;
		}
		if($table=="LIST_COMPLETED")
		{
			return true;
		}
		if($table=="LIST_CANCELED")
		{
			return true;
		}
		if($table=="LICENSE_MANAGER")
		{
			return true;
		}
		if($table=="CONTENT4")
		{
			return true;
		}
		if($table=="CONTENT41")
		{
			return true;
		}
		if($table=="CONTENT411")
		{
			return true;
		}
		if($table=="RBAC_AUTHENTICATION_SOURCE")
		{
			return true;
		}
		if($table=="RBAC_PERMISSIONS")
		{
			return true;
		}
		if($table=="RBAC_ROLES")
		{
			return true;
		}
		if($table=="RBAC_ROLES_PERMISSIONS")
		{
			return true;
		}
		if($table=="RBAC_SYSTEMS")
		{
			return true;
		}
		if($table=="RBAC_USERS")
		{
			return true;
		}
		if($table=="RBAC_USERS_ROLES")
		{
			return true;
		}
		if($table=="DB_SOURCE")
		{
			return true;
		}
		if($table=="DEPARTMENT")
		{
			return true;
		}
		if($table=="GROUPWF")
		{
			return true;
		}
		if($table=="GROUP_USER")
		{
			return true;
		}
		if($table=="MESSAGE_APPLICATION")
		{
			return true;
		}
		if($table=="MESSAGE_EVENT_DEFINITION")
		{
			return true;
		}
		if($table=="MESSAGE_EVENT_RELATION")
		{
			return true;
		}
		if($table=="MESSAGE_TYPE")
		{
			return true;
		}
		if($table=="SCRIPT_TASK")
		{
			return true;
		}
		if($table=="SEQUENCES")
		{
			return true;
		}
		if($table=="SESSION")
		{
			return true;
		}
		if($table=="STAGE")
		{
			return true;
		}
		if($table=="STEP_SUPERVISOR")
		{
			return true;
		}
		if($table=="SUB_PROCESS")
		{
			return true;
		}
		if($table=="SWIMLANES_ELEMENTS")
		{
			return true;
		}
		if($table=="FIELDS")
		{
			return true;
		}
		if($table=="FIELD_CONDITION")
		{
			return true;
		}
		if($table=="CATALOG")
		{
			return true;
		}
		if($table=="CASE_TRACKER_OBJECT")
		{
			return true;
		}
		if($table=="CASE_TRACKER")
		{
			return true;
		}
		if($table=="CASE_SCHEDULER")
		{
			return true;
		}
		if($table=="CASE_CONSOLIDATED")
		{
			return true;
		}
		if($table=="REPORT_TABLE")
		{
			return true;
		}
		if($table=="REPORT_VAR")
		{
			return true;
		}
		if($table=="WEB_ENTRY_EVENT")
		{
			return true;
		}
		if($table=="CONFIGURATION")
		{
			return true;
		}
		if($table=="DIM_TIME_COMPLETE")
		{
			return true;
		}
		if($table=="DIM_TIME_DELEGATE")
		{
			return true;
		}
		if($table=="ELEMENT_TASK_RELATION")
		{
			return true;
		}
		if($table=="TIMER_EVENT")
		{
			return true;
		}
		if($table=="PMT_COMMAND")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW_INDEX")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="Dashboard")
		{
			return false;
		}
		if($table=="PMT_LINE")
		{
			return true;
		}
		if($table=="PMT_FIELD")
		{
			return true;
		}
		if($table=="PMT_COMMAND Report")
		{
			return false;
		}
		if($table=="APP_CACHE_VIEW_DRAFT")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW_PARTICIPATE")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW_PAUSE")
		{
			return true;
		}
		if($table=="INPUT_DOCUMENT")
		{
			return true;
		}
		if($table=="EMAIL_EVENT")
		{
			return true;
		}
		if($table=="DASHLET_INSTANCE")
		{
			return true;
		}
		if($table=="DASHBOARD_INDICATOR")
		{
			return true;
		}
		if($table=="DASHLET")
		{
			return true;
		}
		if($table=="DASHBOARD_DAS_IND")
		{
			return true;
		}
		if($table=="DASHBOARD1")
		{
			return true;
		}
		if($table=="general_log")
		{
			return true;
		}
		if($table=="COLUMNS")
		{
			return true;
		}
		if($table=="TRIGGERS1")
		{
			return true;
		}
		if($table=="TABLES")
		{
			return true;
		}
		if($table=="SCHEMATA")
		{
			return true;
		}
		if($table=="PMT_ECCUBE")
		{
			return true;
		}
		if($table=="PMT_ECCUBEBLOG")
		{
			return true;
		}
		if($table=="modx_site_content")
		{
			return true;
		}
		if($table=="modx_site_htmlsnippets")
		{
			return true;
		}
		if($table=="modx_site_snippets")
		{
			return true;
		}
		if($table=="modx_site_templates")
		{
			return true;
		}
		if($table=="modx_site_plugins")
		{
			return true;
		}
		if($table=="modx_categories")
		{
			return true;
		}
		if($table=="APPLICATION Chart")
		{
			return false;
		}
		if($table=="APPLICATION Report")
		{
			return false;
		}
		if($table=="modx_site_content_child")
		{
			return true;
		}
		if($table=="modx_site_content_dash")
		{
			return true;
		}
		if($table=="site_content_dashboard")
		{
			return false;
		}
		if($table=="Dashboard2")
		{
			return false;
		}
		if($table=="BPMBOXEoc2")
		{
			return false;
		}
		if($table=="items")
		{
			return false;
		}
		if($table=="ppmain")
		{
			return false;
		}
		if($table=="pppaypal_info")
		{
			return false;
		}
		if($table=="ppadmin main")
		{
			return false;
		}
		if($table=="ppsubcategory")
		{
			return false;
		}
		if($table=="ppusers")
		{
			return false;
		}
		if($table=="ppcategory")
		{
			return false;
		}
		if($table=="ppcategory1")
		{
			return false;
		}
		if($table=="API")
		{
			return false;
		}
		if($table=="CALENDAR_ASSIGNMENTS")
		{
			return false;
		}
		if($table=="CALENDAR_BUSINESS_HOURS")
		{
			return false;
		}
		if($table=="CALENDAR_DEFINITION")
		{
			return false;
		}
		if($table=="CALENDAR_HOLIDAYS")
		{
			return false;
		}
		if($table=="GATEWAY")
		{
			return false;
		}
		if($table=="GMAIL_RELABELING")
		{
			return false;
		}
		if($table=="HOLIDAY")
		{
			return false;
		}
		if($table=="MESSAGE_TYPE_VARIABLE")
		{
			return false;
		}
		if($table=="NOTIFICATION_DEVICE")
		{
			return false;
		}
		if($table=="NOTIFICATION_QUEUE")
		{
			return false;
		}
		if($table=="OAUTH_ACCESS_TOKENS")
		{
			return false;
		}
		if($table=="OAUTH_AUTHORIZATION_CODES")
		{
			return false;
		}
		if($table=="OAUTH_CLIENTS")
		{
			return false;
		}
		if($table=="OAUTH_REFRESH_TOKENS")
		{
			return false;
		}
		if($table=="OAUTH_SCOPES")
		{
			return false;
		}
		if($table=="OBJECT_PERMISSION")
		{
			return false;
		}
		if($table=="OUTPUT_DOCUMENT")
		{
			return false;
		}
		if($table=="PMOAUTH_USER_ACCESS_TOKENS")
		{
			return false;
		}
		if($table=="SESSION_STORAGE")
		{
			return false;
		}
		if($table=="SHADOW_TABLE")
		{
			return false;
		}
		if($table=="APP_ASSIGN_SELF_SERVICE_VALUE_GROUP")
		{
			return false;
		}
		if($table=="modxdf_site_templates")
		{
			return false;
		}
		if($table=="modxdf_site_snippets")
		{
			return false;
		}
		if($table=="modxdf_site_plugins")
		{
			return false;
		}
		if($table=="modxdf_site_content")
		{
			return false;
		}
		if($table=="modxdf_site_htmlsnippets")
		{
			return false;
		}
		if($table=="modxdf_site_tmplvars")
		{
			return false;
		}
		if($table=="WEBSOCKET")
		{
			return false;
		}
		if($table=="PMT_TEST_BUSINESS_3")
		{
			return false;
		}
		if($table=="PMT_SITE_REGISTRATION")
		{
			return false;
		}
		if($table=="BPMCHAT")
		{
			return false;
		}
		if($table=="HITWORD")
		{
			return false;
		}
		if($table=="PLUGINS")
		{
			return false;
		}
		if($table=="TABLESPACES")
		{
			return false;
		}
		if($table=="TABLE_CONSTRAINTS")
		{
			return false;
		}
		if($table=="PMT_SITE")
		{
			return false;
		}
		if($table=="wpfg_commentmeta")
		{
			return false;
		}
		if($table=="wpfg_comments")
		{
			return false;
		}
		if($table=="wpfg_links")
		{
			return false;
		}
		if($table=="wpfg_options")
		{
			return false;
		}
		if($table=="wpfg_postmeta")
		{
			return false;
		}
		if($table=="wpfg_posts")
		{
			return false;
		}
		if($table=="wpfg_term_relationships")
		{
			return false;
		}
		if($table=="wpfg_term_taxonomy")
		{
			return false;
		}
		if($table=="wpfg_termmeta")
		{
			return false;
		}
		if($table=="wpfg_terms")
		{
			return false;
		}
		if($table=="wpfg_usermeta")
		{
			return false;
		}
		if($table=="wpfg_users")
		{
			return false;
		}
		if($table=="PMT_ANNUAL_REVENUE")
		{
			return false;
		}
		if($table=="PMT_TEST_BUSINESS")
		{
			return false;
		}
		if($table=="PMT_SAGAWA")
		{
			return false;
		}
		if($table=="PMT_RESIDENTS_BASIC_ATTRIBUTES")
		{
			return false;
		}
		if($table=="PMT_QUOTE")
		{
			return false;
		}
		if($table=="PMT_SUBCONTRACTORS")
		{
			return false;
		}
		if($table=="PMT_MITUMORI1")
		{
			return false;
		}
		if($table=="BPMBOXTRANS")
		{
			return false;
		}
		if($table=="Dashboard3")
		{
			return false;
		}
		if($table=="APPLICATION Report1")
		{
			return false;
		}
		if($table=="ROUTINES")
		{
			return false;
		}
		if($table=="PMT_INVOICE")
		{
			return false;
		}
		if($table=="PMT_INVOICE_ITEMS")
		{
			return false;
		}
		if($table=="PMT_TEST_SCREEN")
		{
			return false;
		}
		if($table=="PMT_SPREADMAIN")
		{
			return false;
		}
		if($table=="PMT_SPREADSUB")
		{
			return false;
		}
		if($table=="PMT_PROGRAM_LIST")
		{
			return false;
		}
		if($table=="PMT_PMSEIKYUUSHO")
		{
			return false;
		}
		if($table=="PMT_MST_BRMS")
		{
			return false;
		}
		if($table=="PMT_QUOTE_DETAILS")
		{
			return false;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function __construct()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="USERS";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogLoginFailed($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="USERS";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strFailLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogLogout()
    {
		global $globalEvents;
		if($_SESSION["UserID"]!="")
		{
			$retval=true;
			$table="USERS";
			$arr=array();
			if($globalEvents->exists("OnAuditLog"))
				$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
			if($retval)
			{
				$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogout."\r\n";
				$this->writeToLogFile( $str );
			}
			return $retval;
		}
    }
	
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="USERS";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strChPass."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=runner_substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=runner_substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=runner_substr($v,0,$this->maxFieldLength);
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="ABE_CONFIGURATION")
		{
			return true;
		}
		if($table=="ABE_REQUESTS")
		{
			return true;
		}
		if($table=="ABE_RESPONSES")
		{
			return true;
		}
		if($table=="ADDITIONAL_TABLES")
		{
			return true;
		}
		if($table=="ADDONS_MANAGER")
		{
			return true;
		}
		if($table=="ADDONS_STORE")
		{
			return true;
		}
		if($table=="APPLICATION")
		{
			return true;
		}
		if($table=="APP_ASSIGN_SELF_SERVICE_VALUE")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW")
		{
			return true;
		}
		if($table=="APP_DELAY")
		{
			return true;
		}
		if($table=="APP_DELEGATION")
		{
			return true;
		}
		if($table=="USERS")
		{
			return true;
		}
		if($table=="TRANSLATION")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="BPMN_PROJECT")
		{
			return true;
		}
		if($table=="BPMN_PROCESS")
		{
			return true;
		}
		if($table=="CONTENT")
		{
			return true;
		}
		if($table=="PROCESS")
		{
			return true;
		}
		if($table=="PROCESS_CATEGORY")
		{
			return true;
		}
		if($table=="PROCESS_FILES")
		{
			return true;
		}
		if($table=="PROCESS_OWNER")
		{
			return true;
		}
		if($table=="PROCESS_USER")
		{
			return true;
		}
		if($table=="PROCESS_VARIABLES")
		{
			return true;
		}
		if($table=="TRIGGERS")
		{
			return true;
		}
		if($table=="USERS_PROPERTIES")
		{
			return true;
		}
		if($table=="USR_REPORTING")
		{
			return true;
		}
		if($table=="WEB_ENTRY")
		{
			return true;
		}
		if($table=="TASK")
		{
			return true;
		}
		if($table=="TASK_USER")
		{
			return true;
		}
		if($table=="BPMN_PARTICIPANT")
		{
			return true;
		}
		if($table=="BPMN_LANESET")
		{
			return true;
		}
		if($table=="BPMN_LANE")
		{
			return true;
		}
		if($table=="BPMN_GATEWAY")
		{
			return true;
		}
		if($table=="BPMN_FLOW")
		{
			return true;
		}
		if($table=="BPMN_EXTENSION")
		{
			return true;
		}
		if($table=="BPMN_EVENT")
		{
			return true;
		}
		if($table=="BPMN_DOCUMENTATION")
		{
			return true;
		}
		if($table=="BPMN_DIAGRAM")
		{
			return true;
		}
		if($table=="BPMN_DATA")
		{
			return true;
		}
		if($table=="BPMN_BOUND")
		{
			return true;
		}
		if($table=="BPMN_ACTIVITY")
		{
			return true;
		}
		if($table=="BPMN_ARTIFACT")
		{
			return true;
		}
		if($table=="DYNAFORM")
		{
			return true;
		}
		if($table=="APPLICATION1")
		{
			return true;
		}
		if($table=="APP_DOCUMENT")
		{
			return true;
		}
		if($table=="APP_EVENT")
		{
			return true;
		}
		if($table=="APP_FOLDER")
		{
			return true;
		}
		if($table=="APP_HISTORY")
		{
			return true;
		}
		if($table=="APP_MESSAGE")
		{
			return true;
		}
		if($table=="APP_NOTES")
		{
			return true;
		}
		if($table=="APP_OWNER")
		{
			return true;
		}
		if($table=="APP_SEQUENCE")
		{
			return true;
		}
		if($table=="APP_SOLR_QUEUE")
		{
			return true;
		}
		if($table=="APP_THREAD")
		{
			return true;
		}
		if($table=="APP_TIMEOUT_ACTION_EXECUTED")
		{
			return true;
		}
		if($table=="ISO_COUNTRY")
		{
			return true;
		}
		if($table=="ISO_LOCATION")
		{
			return true;
		}
		if($table=="ISO_SUBDIVISION")
		{
			return true;
		}
		if($table=="LANGUAGE")
		{
			return true;
		}
		if($table=="LEXICO")
		{
			return true;
		}
		if($table=="STEP")
		{
			return true;
		}
		if($table=="STEP_TRIGGER")
		{
			return true;
		}
		if($table=="SUB_APPLICATION")
		{
			return true;
		}
		if($table=="ROUTE")
		{
			return true;
		}
		if($table=="processmaker_audit")
		{
			return true;
		}
		if($table=="processmaker_locking")
		{
			return true;
		}
		if($table=="processmaker_uggroups")
		{
			return true;
		}
		if($table=="processmaker_ugmembers")
		{
			return true;
		}
		if($table=="processmaker_ugrights")
		{
			return true;
		}
		if($table=="PMT_MENU")
		{
			return true;
		}
		if($table=="PMT_MENU1")
		{
			return true;
		}
		if($table=="CONTENT1")
		{
			return true;
		}
		if($table=="CONTENT11")
		{
			return true;
		}
		if($table=="CONTENT2")
		{
			return true;
		}
		if($table=="CONTENT3")
		{
			return true;
		}
		if($table=="PRO_REPORTING")
		{
			return true;
		}
		if($table=="LOGIN_LOG")
		{
			return true;
		}
		if($table=="LOG_CASES_SCHEDULER")
		{
			return true;
		}
		if($table=="LIST_UNASSIGNED_GROUP")
		{
			return true;
		}
		if($table=="LIST_UNASSIGNED")
		{
			return true;
		}
		if($table=="LIST_PAUSED")
		{
			return true;
		}
		if($table=="LIST_PARTICIPATED_LAST")
		{
			return true;
		}
		if($table=="LIST_PARTICIPATED_HISTORY")
		{
			return true;
		}
		if($table=="LIST_MY_INBOX")
		{
			return true;
		}
		if($table=="LIST_INBOX")
		{
			return true;
		}
		if($table=="LIST_COMPLETED")
		{
			return true;
		}
		if($table=="LIST_CANCELED")
		{
			return true;
		}
		if($table=="LICENSE_MANAGER")
		{
			return true;
		}
		if($table=="CONTENT4")
		{
			return true;
		}
		if($table=="CONTENT41")
		{
			return true;
		}
		if($table=="CONTENT411")
		{
			return true;
		}
		if($table=="RBAC_AUTHENTICATION_SOURCE")
		{
			return true;
		}
		if($table=="RBAC_PERMISSIONS")
		{
			return true;
		}
		if($table=="RBAC_ROLES")
		{
			return true;
		}
		if($table=="RBAC_ROLES_PERMISSIONS")
		{
			return true;
		}
		if($table=="RBAC_SYSTEMS")
		{
			return true;
		}
		if($table=="RBAC_USERS")
		{
			return true;
		}
		if($table=="RBAC_USERS_ROLES")
		{
			return true;
		}
		if($table=="DB_SOURCE")
		{
			return true;
		}
		if($table=="DEPARTMENT")
		{
			return true;
		}
		if($table=="GROUPWF")
		{
			return true;
		}
		if($table=="GROUP_USER")
		{
			return true;
		}
		if($table=="MESSAGE_APPLICATION")
		{
			return true;
		}
		if($table=="MESSAGE_EVENT_DEFINITION")
		{
			return true;
		}
		if($table=="MESSAGE_EVENT_RELATION")
		{
			return true;
		}
		if($table=="MESSAGE_TYPE")
		{
			return true;
		}
		if($table=="SCRIPT_TASK")
		{
			return true;
		}
		if($table=="SEQUENCES")
		{
			return true;
		}
		if($table=="SESSION")
		{
			return true;
		}
		if($table=="STAGE")
		{
			return true;
		}
		if($table=="STEP_SUPERVISOR")
		{
			return true;
		}
		if($table=="SUB_PROCESS")
		{
			return true;
		}
		if($table=="SWIMLANES_ELEMENTS")
		{
			return true;
		}
		if($table=="FIELDS")
		{
			return true;
		}
		if($table=="FIELD_CONDITION")
		{
			return true;
		}
		if($table=="CATALOG")
		{
			return true;
		}
		if($table=="CASE_TRACKER_OBJECT")
		{
			return true;
		}
		if($table=="CASE_TRACKER")
		{
			return true;
		}
		if($table=="CASE_SCHEDULER")
		{
			return true;
		}
		if($table=="CASE_CONSOLIDATED")
		{
			return true;
		}
		if($table=="REPORT_TABLE")
		{
			return true;
		}
		if($table=="REPORT_VAR")
		{
			return true;
		}
		if($table=="WEB_ENTRY_EVENT")
		{
			return true;
		}
		if($table=="CONFIGURATION")
		{
			return true;
		}
		if($table=="DIM_TIME_COMPLETE")
		{
			return true;
		}
		if($table=="DIM_TIME_DELEGATE")
		{
			return true;
		}
		if($table=="ELEMENT_TASK_RELATION")
		{
			return true;
		}
		if($table=="TIMER_EVENT")
		{
			return true;
		}
		if($table=="PMT_COMMAND")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW_INDEX")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="Dashboard")
		{
			return false;
		}
		if($table=="PMT_LINE")
		{
			return true;
		}
		if($table=="PMT_FIELD")
		{
			return true;
		}
		if($table=="PMT_COMMAND Report")
		{
			return false;
		}
		if($table=="APP_CACHE_VIEW_DRAFT")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW_PARTICIPATE")
		{
			return true;
		}
		if($table=="APP_CACHE_VIEW_PAUSE")
		{
			return true;
		}
		if($table=="INPUT_DOCUMENT")
		{
			return true;
		}
		if($table=="EMAIL_EVENT")
		{
			return true;
		}
		if($table=="DASHLET_INSTANCE")
		{
			return true;
		}
		if($table=="DASHBOARD_INDICATOR")
		{
			return true;
		}
		if($table=="DASHLET")
		{
			return true;
		}
		if($table=="DASHBOARD_DAS_IND")
		{
			return true;
		}
		if($table=="DASHBOARD1")
		{
			return true;
		}
		if($table=="general_log")
		{
			return true;
		}
		if($table=="COLUMNS")
		{
			return true;
		}
		if($table=="TRIGGERS1")
		{
			return true;
		}
		if($table=="TABLES")
		{
			return true;
		}
		if($table=="SCHEMATA")
		{
			return true;
		}
		if($table=="PMT_ECCUBE")
		{
			return true;
		}
		if($table=="PMT_ECCUBEBLOG")
		{
			return true;
		}
		if($table=="modx_site_content")
		{
			return true;
		}
		if($table=="modx_site_htmlsnippets")
		{
			return true;
		}
		if($table=="modx_site_snippets")
		{
			return true;
		}
		if($table=="modx_site_templates")
		{
			return true;
		}
		if($table=="modx_site_plugins")
		{
			return true;
		}
		if($table=="modx_categories")
		{
			return true;
		}
		if($table=="APPLICATION Chart")
		{
			return false;
		}
		if($table=="APPLICATION Report")
		{
			return false;
		}
		if($table=="modx_site_content_child")
		{
			return true;
		}
		if($table=="modx_site_content_dash")
		{
			return true;
		}
		if($table=="site_content_dashboard")
		{
			return false;
		}
		if($table=="Dashboard2")
		{
			return false;
		}
		if($table=="BPMBOXEoc2")
		{
			return false;
		}
		if($table=="items")
		{
			return false;
		}
		if($table=="ppmain")
		{
			return false;
		}
		if($table=="pppaypal_info")
		{
			return false;
		}
		if($table=="ppadmin main")
		{
			return false;
		}
		if($table=="ppsubcategory")
		{
			return false;
		}
		if($table=="ppusers")
		{
			return false;
		}
		if($table=="ppcategory")
		{
			return false;
		}
		if($table=="ppcategory1")
		{
			return false;
		}
		if($table=="API")
		{
			return false;
		}
		if($table=="CALENDAR_ASSIGNMENTS")
		{
			return false;
		}
		if($table=="CALENDAR_BUSINESS_HOURS")
		{
			return false;
		}
		if($table=="CALENDAR_DEFINITION")
		{
			return false;
		}
		if($table=="CALENDAR_HOLIDAYS")
		{
			return false;
		}
		if($table=="GATEWAY")
		{
			return false;
		}
		if($table=="GMAIL_RELABELING")
		{
			return false;
		}
		if($table=="HOLIDAY")
		{
			return false;
		}
		if($table=="MESSAGE_TYPE_VARIABLE")
		{
			return false;
		}
		if($table=="NOTIFICATION_DEVICE")
		{
			return false;
		}
		if($table=="NOTIFICATION_QUEUE")
		{
			return false;
		}
		if($table=="OAUTH_ACCESS_TOKENS")
		{
			return false;
		}
		if($table=="OAUTH_AUTHORIZATION_CODES")
		{
			return false;
		}
		if($table=="OAUTH_CLIENTS")
		{
			return false;
		}
		if($table=="OAUTH_REFRESH_TOKENS")
		{
			return false;
		}
		if($table=="OAUTH_SCOPES")
		{
			return false;
		}
		if($table=="OBJECT_PERMISSION")
		{
			return false;
		}
		if($table=="OUTPUT_DOCUMENT")
		{
			return false;
		}
		if($table=="PMOAUTH_USER_ACCESS_TOKENS")
		{
			return false;
		}
		if($table=="SESSION_STORAGE")
		{
			return false;
		}
		if($table=="SHADOW_TABLE")
		{
			return false;
		}
		if($table=="APP_ASSIGN_SELF_SERVICE_VALUE_GROUP")
		{
			return false;
		}
		if($table=="modxdf_site_templates")
		{
			return false;
		}
		if($table=="modxdf_site_snippets")
		{
			return false;
		}
		if($table=="modxdf_site_plugins")
		{
			return false;
		}
		if($table=="modxdf_site_content")
		{
			return false;
		}
		if($table=="modxdf_site_htmlsnippets")
		{
			return false;
		}
		if($table=="modxdf_site_tmplvars")
		{
			return false;
		}
		if($table=="WEBSOCKET")
		{
			return false;
		}
		if($table=="PMT_TEST_BUSINESS_3")
		{
			return false;
		}
		if($table=="PMT_SITE_REGISTRATION")
		{
			return false;
		}
		if($table=="BPMCHAT")
		{
			return false;
		}
		if($table=="HITWORD")
		{
			return false;
		}
		if($table=="PLUGINS")
		{
			return false;
		}
		if($table=="TABLESPACES")
		{
			return false;
		}
		if($table=="TABLE_CONSTRAINTS")
		{
			return false;
		}
		if($table=="PMT_SITE")
		{
			return false;
		}
		if($table=="wpfg_commentmeta")
		{
			return false;
		}
		if($table=="wpfg_comments")
		{
			return false;
		}
		if($table=="wpfg_links")
		{
			return false;
		}
		if($table=="wpfg_options")
		{
			return false;
		}
		if($table=="wpfg_postmeta")
		{
			return false;
		}
		if($table=="wpfg_posts")
		{
			return false;
		}
		if($table=="wpfg_term_relationships")
		{
			return false;
		}
		if($table=="wpfg_term_taxonomy")
		{
			return false;
		}
		if($table=="wpfg_termmeta")
		{
			return false;
		}
		if($table=="wpfg_terms")
		{
			return false;
		}
		if($table=="wpfg_usermeta")
		{
			return false;
		}
		if($table=="wpfg_users")
		{
			return false;
		}
		if($table=="PMT_ANNUAL_REVENUE")
		{
			return false;
		}
		if($table=="PMT_TEST_BUSINESS")
		{
			return false;
		}
		if($table=="PMT_SAGAWA")
		{
			return false;
		}
		if($table=="PMT_RESIDENTS_BASIC_ATTRIBUTES")
		{
			return false;
		}
		if($table=="PMT_QUOTE")
		{
			return false;
		}
		if($table=="PMT_SUBCONTRACTORS")
		{
			return false;
		}
		if($table=="PMT_MITUMORI1")
		{
			return false;
		}
		if($table=="BPMBOXTRANS")
		{
			return false;
		}
		if($table=="Dashboard3")
		{
			return false;
		}
		if($table=="APPLICATION Report1")
		{
			return false;
		}
		if($table=="ROUTINES")
		{
			return false;
		}
		if($table=="PMT_INVOICE")
		{
			return false;
		}
		if($table=="PMT_INVOICE_ITEMS")
		{
			return false;
		}
		if($table=="PMT_TEST_SCREEN")
		{
			return false;
		}
		if($table=="PMT_SPREADMAIN")
		{
			return false;
		}
		if($table=="PMT_SPREADSUB")
		{
			return false;
		}
		if($table=="PMT_PROGRAM_LIST")
		{
			return false;
		}
		if($table=="PMT_PMSEIKYUUSHO")
		{
			return false;
		}
		if($table=="PMT_MST_BRMS")
		{
			return false;
		}
		if($table=="PMT_QUOTE_DETAILS")
		{
			return false;
		}
	}
}
?>
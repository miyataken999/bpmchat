<?php
$dalTableUSR_REPORTING = array();
$dalTableUSR_REPORTING["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableUSR_REPORTING["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableUSR_REPORTING["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableUSR_REPORTING["MONTH"] = array("type"=>3,"varname"=>"MONTH");
$dalTableUSR_REPORTING["YEAR"] = array("type"=>3,"varname"=>"YEAR");
$dalTableUSR_REPORTING["TOTAL_QUEUE_TIME_BY_TASK"] = array("type"=>14,"varname"=>"TOTAL_QUEUE_TIME_BY_TASK");
$dalTableUSR_REPORTING["TOTAL_TIME_BY_TASK"] = array("type"=>14,"varname"=>"TOTAL_TIME_BY_TASK");
$dalTableUSR_REPORTING["TOTAL_CASES_IN"] = array("type"=>14,"varname"=>"TOTAL_CASES_IN");
$dalTableUSR_REPORTING["TOTAL_CASES_OUT"] = array("type"=>14,"varname"=>"TOTAL_CASES_OUT");
$dalTableUSR_REPORTING["USER_HOUR_COST"] = array("type"=>14,"varname"=>"USER_HOUR_COST");
$dalTableUSR_REPORTING["AVG_TIME"] = array("type"=>14,"varname"=>"AVG_TIME");
$dalTableUSR_REPORTING["SDV_TIME"] = array("type"=>14,"varname"=>"SDV_TIME");
$dalTableUSR_REPORTING["CONFIGURED_TASK_TIME"] = array("type"=>14,"varname"=>"CONFIGURED_TASK_TIME");
$dalTableUSR_REPORTING["TOTAL_CASES_OVERDUE"] = array("type"=>14,"varname"=>"TOTAL_CASES_OVERDUE");
$dalTableUSR_REPORTING["TOTAL_CASES_ON_TIME"] = array("type"=>14,"varname"=>"TOTAL_CASES_ON_TIME");
$dalTableUSR_REPORTING["PRO_COST"] = array("type"=>14,"varname"=>"PRO_COST");
$dalTableUSR_REPORTING["PRO_UNIT_COST"] = array("type"=>200,"varname"=>"PRO_UNIT_COST");
	$dalTableUSR_REPORTING["USR_UID"]["key"]=true;
	$dalTableUSR_REPORTING["TAS_UID"]["key"]=true;
	$dalTableUSR_REPORTING["MONTH"]["key"]=true;
	$dalTableUSR_REPORTING["YEAR"]["key"]=true;

$dal_info["Tables__USR_REPORTING"] = &$dalTableUSR_REPORTING;
?>
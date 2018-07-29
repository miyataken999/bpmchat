<?php
$dalTablePRO_REPORTING = array();
$dalTablePRO_REPORTING["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTablePRO_REPORTING["MONTH"] = array("type"=>3,"varname"=>"MONTH");
$dalTablePRO_REPORTING["YEAR"] = array("type"=>3,"varname"=>"YEAR");
$dalTablePRO_REPORTING["AVG_TIME"] = array("type"=>14,"varname"=>"AVG_TIME");
$dalTablePRO_REPORTING["SDV_TIME"] = array("type"=>14,"varname"=>"SDV_TIME");
$dalTablePRO_REPORTING["TOTAL_CASES_IN"] = array("type"=>14,"varname"=>"TOTAL_CASES_IN");
$dalTablePRO_REPORTING["TOTAL_CASES_OUT"] = array("type"=>14,"varname"=>"TOTAL_CASES_OUT");
$dalTablePRO_REPORTING["CONFIGURED_PROCESS_TIME"] = array("type"=>14,"varname"=>"CONFIGURED_PROCESS_TIME");
$dalTablePRO_REPORTING["CONFIGURED_PROCESS_COST"] = array("type"=>14,"varname"=>"CONFIGURED_PROCESS_COST");
$dalTablePRO_REPORTING["TOTAL_CASES_OPEN"] = array("type"=>14,"varname"=>"TOTAL_CASES_OPEN");
$dalTablePRO_REPORTING["TOTAL_CASES_OVERDUE"] = array("type"=>14,"varname"=>"TOTAL_CASES_OVERDUE");
$dalTablePRO_REPORTING["TOTAL_CASES_ON_TIME"] = array("type"=>14,"varname"=>"TOTAL_CASES_ON_TIME");
$dalTablePRO_REPORTING["PRO_COST"] = array("type"=>14,"varname"=>"PRO_COST");
$dalTablePRO_REPORTING["PRO_UNIT_COST"] = array("type"=>200,"varname"=>"PRO_UNIT_COST");
	$dalTablePRO_REPORTING["PRO_UID"]["key"]=true;
	$dalTablePRO_REPORTING["MONTH"]["key"]=true;
	$dalTablePRO_REPORTING["YEAR"]["key"]=true;

$dal_info["Tables__PRO_REPORTING"] = &$dalTablePRO_REPORTING;
?>
<?php
$dalTableLOGIN_LOG = array();
$dalTableLOGIN_LOG["LOG_ID"] = array("type"=>3,"varname"=>"LOG_ID");
$dalTableLOGIN_LOG["LOG_UID"] = array("type"=>200,"varname"=>"LOG_UID");
$dalTableLOGIN_LOG["LOG_STATUS"] = array("type"=>200,"varname"=>"LOG_STATUS");
$dalTableLOGIN_LOG["LOG_IP"] = array("type"=>200,"varname"=>"LOG_IP");
$dalTableLOGIN_LOG["LOG_SID"] = array("type"=>200,"varname"=>"LOG_SID");
$dalTableLOGIN_LOG["LOG_INIT_DATE"] = array("type"=>135,"varname"=>"LOG_INIT_DATE");
$dalTableLOGIN_LOG["LOG_END_DATE"] = array("type"=>135,"varname"=>"LOG_END_DATE");
$dalTableLOGIN_LOG["LOG_CLIENT_HOSTNAME"] = array("type"=>200,"varname"=>"LOG_CLIENT_HOSTNAME");
$dalTableLOGIN_LOG["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
	$dalTableLOGIN_LOG["LOG_ID"]["key"]=true;

$dal_info["Tables__LOGIN_LOG"] = &$dalTableLOGIN_LOG;
?>
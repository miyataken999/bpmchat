<?php
$dalTableAPP_EVENT = array();
$dalTableAPP_EVENT["APP_UID"] = array("type"=>200,"varname"=>"APP_UID");
$dalTableAPP_EVENT["DEL_INDEX"] = array("type"=>3,"varname"=>"DEL_INDEX");
$dalTableAPP_EVENT["EVN_UID"] = array("type"=>200,"varname"=>"EVN_UID");
$dalTableAPP_EVENT["APP_EVN_ACTION_DATE"] = array("type"=>135,"varname"=>"APP_EVN_ACTION_DATE");
$dalTableAPP_EVENT["APP_EVN_ATTEMPTS"] = array("type"=>16,"varname"=>"APP_EVN_ATTEMPTS");
$dalTableAPP_EVENT["APP_EVN_LAST_EXECUTION_DATE"] = array("type"=>135,"varname"=>"APP_EVN_LAST_EXECUTION_DATE");
$dalTableAPP_EVENT["APP_EVN_STATUS"] = array("type"=>200,"varname"=>"APP_EVN_STATUS");
	$dalTableAPP_EVENT["APP_UID"]["key"]=true;
	$dalTableAPP_EVENT["DEL_INDEX"]["key"]=true;
	$dalTableAPP_EVENT["EVN_UID"]["key"]=true;

$dal_info["Tables__APP_EVENT"] = &$dalTableAPP_EVENT;
?>
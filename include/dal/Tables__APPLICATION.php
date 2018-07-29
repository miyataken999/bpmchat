<?php
$dalTableAPPLICATION = array();
$dalTableAPPLICATION["APP_UID"] = array("type"=>200,"varname"=>"APP_UID");
$dalTableAPPLICATION["APP_TITLE"] = array("type"=>201,"varname"=>"APP_TITLE");
$dalTableAPPLICATION["APP_DESCRIPTION"] = array("type"=>201,"varname"=>"APP_DESCRIPTION");
$dalTableAPPLICATION["APP_NUMBER"] = array("type"=>3,"varname"=>"APP_NUMBER");
$dalTableAPPLICATION["APP_PARENT"] = array("type"=>200,"varname"=>"APP_PARENT");
$dalTableAPPLICATION["APP_STATUS"] = array("type"=>200,"varname"=>"APP_STATUS");
$dalTableAPPLICATION["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableAPPLICATION["APP_PROC_STATUS"] = array("type"=>200,"varname"=>"APP_PROC_STATUS");
$dalTableAPPLICATION["APP_PROC_CODE"] = array("type"=>200,"varname"=>"APP_PROC_CODE");
$dalTableAPPLICATION["APP_PARALLEL"] = array("type"=>200,"varname"=>"APP_PARALLEL");
$dalTableAPPLICATION["APP_INIT_USER"] = array("type"=>200,"varname"=>"APP_INIT_USER");
$dalTableAPPLICATION["APP_CUR_USER"] = array("type"=>200,"varname"=>"APP_CUR_USER");
$dalTableAPPLICATION["APP_CREATE_DATE"] = array("type"=>135,"varname"=>"APP_CREATE_DATE");
$dalTableAPPLICATION["APP_INIT_DATE"] = array("type"=>135,"varname"=>"APP_INIT_DATE");
$dalTableAPPLICATION["APP_FINISH_DATE"] = array("type"=>135,"varname"=>"APP_FINISH_DATE");
$dalTableAPPLICATION["APP_UPDATE_DATE"] = array("type"=>135,"varname"=>"APP_UPDATE_DATE");
$dalTableAPPLICATION["APP_DATA"] = array("type"=>201,"varname"=>"APP_DATA");
$dalTableAPPLICATION["APP_PIN"] = array("type"=>200,"varname"=>"APP_PIN");
$dalTableAPPLICATION["APP_DURATION"] = array("type"=>5,"varname"=>"APP_DURATION");
$dalTableAPPLICATION["APP_DELAY_DURATION"] = array("type"=>5,"varname"=>"APP_DELAY_DURATION");
$dalTableAPPLICATION["APP_DRIVE_FOLDER_UID"] = array("type"=>200,"varname"=>"APP_DRIVE_FOLDER_UID");
$dalTableAPPLICATION["APP_ROUTING_DATA"] = array("type"=>201,"varname"=>"APP_ROUTING_DATA");
$dalTableAPPLICATION["APP_STATUS_ID"] = array("type"=>16,"varname"=>"APP_STATUS_ID");
	$dalTableAPPLICATION["APP_UID"]["key"]=true;

$dal_info["Tables__APPLICATION"] = &$dalTableAPPLICATION;
?>
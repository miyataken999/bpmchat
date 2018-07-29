<?php
$dalTableCONFIGURATION = array();
$dalTableCONFIGURATION["CFG_UID"] = array("type"=>200,"varname"=>"CFG_UID");
$dalTableCONFIGURATION["OBJ_UID"] = array("type"=>200,"varname"=>"OBJ_UID");
$dalTableCONFIGURATION["CFG_VALUE"] = array("type"=>201,"varname"=>"CFG_VALUE");
$dalTableCONFIGURATION["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableCONFIGURATION["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableCONFIGURATION["APP_UID"] = array("type"=>200,"varname"=>"APP_UID");
	$dalTableCONFIGURATION["CFG_UID"]["key"]=true;
	$dalTableCONFIGURATION["OBJ_UID"]["key"]=true;
	$dalTableCONFIGURATION["PRO_UID"]["key"]=true;
	$dalTableCONFIGURATION["USR_UID"]["key"]=true;
	$dalTableCONFIGURATION["APP_UID"]["key"]=true;

$dal_info["Tables__CONFIGURATION"] = &$dalTableCONFIGURATION;
?>
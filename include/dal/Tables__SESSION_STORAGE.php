<?php
$dalTableSESSION_STORAGE = array();
$dalTableSESSION_STORAGE["ID"] = array("type"=>200,"varname"=>"ID");
$dalTableSESSION_STORAGE["SET_TIME"] = array("type"=>200,"varname"=>"SET_TIME");
$dalTableSESSION_STORAGE["DATA"] = array("type"=>201,"varname"=>"DATA");
$dalTableSESSION_STORAGE["SESSION_KEY"] = array("type"=>200,"varname"=>"SESSION_KEY");
$dalTableSESSION_STORAGE["CLIENT_ADDRESS"] = array("type"=>200,"varname"=>"CLIENT_ADDRESS");
	$dalTableSESSION_STORAGE["ID"]["key"]=true;

$dal_info["Tables__SESSION_STORAGE"] = &$dalTableSESSION_STORAGE;
?>
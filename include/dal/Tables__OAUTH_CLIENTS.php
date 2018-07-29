<?php
$dalTableOAUTH_CLIENTS = array();
$dalTableOAUTH_CLIENTS["CLIENT_ID"] = array("type"=>200,"varname"=>"CLIENT_ID");
$dalTableOAUTH_CLIENTS["CLIENT_SECRET"] = array("type"=>200,"varname"=>"CLIENT_SECRET");
$dalTableOAUTH_CLIENTS["CLIENT_NAME"] = array("type"=>200,"varname"=>"CLIENT_NAME");
$dalTableOAUTH_CLIENTS["CLIENT_DESCRIPTION"] = array("type"=>200,"varname"=>"CLIENT_DESCRIPTION");
$dalTableOAUTH_CLIENTS["CLIENT_WEBSITE"] = array("type"=>200,"varname"=>"CLIENT_WEBSITE");
$dalTableOAUTH_CLIENTS["REDIRECT_URI"] = array("type"=>200,"varname"=>"REDIRECT_URI");
$dalTableOAUTH_CLIENTS["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
	$dalTableOAUTH_CLIENTS["CLIENT_ID"]["key"]=true;

$dal_info["Tables__OAUTH_CLIENTS"] = &$dalTableOAUTH_CLIENTS;
?>
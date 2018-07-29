<?php
$dalTableOAUTH_AUTHORIZATION_CODES = array();
$dalTableOAUTH_AUTHORIZATION_CODES["AUTHORIZATION_CODE"] = array("type"=>200,"varname"=>"AUTHORIZATION_CODE");
$dalTableOAUTH_AUTHORIZATION_CODES["CLIENT_ID"] = array("type"=>200,"varname"=>"CLIENT_ID");
$dalTableOAUTH_AUTHORIZATION_CODES["USER_ID"] = array("type"=>200,"varname"=>"USER_ID");
$dalTableOAUTH_AUTHORIZATION_CODES["REDIRECT_URI"] = array("type"=>200,"varname"=>"REDIRECT_URI");
$dalTableOAUTH_AUTHORIZATION_CODES["EXPIRES"] = array("type"=>135,"varname"=>"EXPIRES");
$dalTableOAUTH_AUTHORIZATION_CODES["SCOPE"] = array("type"=>200,"varname"=>"SCOPE");
	$dalTableOAUTH_AUTHORIZATION_CODES["AUTHORIZATION_CODE"]["key"]=true;

$dal_info["Tables__OAUTH_AUTHORIZATION_CODES"] = &$dalTableOAUTH_AUTHORIZATION_CODES;
?>
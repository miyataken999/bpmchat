<?php
$dalTableOAUTH_REFRESH_TOKENS = array();
$dalTableOAUTH_REFRESH_TOKENS["REFRESH_TOKEN"] = array("type"=>200,"varname"=>"REFRESH_TOKEN");
$dalTableOAUTH_REFRESH_TOKENS["CLIENT_ID"] = array("type"=>200,"varname"=>"CLIENT_ID");
$dalTableOAUTH_REFRESH_TOKENS["USER_ID"] = array("type"=>200,"varname"=>"USER_ID");
$dalTableOAUTH_REFRESH_TOKENS["EXPIRES"] = array("type"=>135,"varname"=>"EXPIRES");
$dalTableOAUTH_REFRESH_TOKENS["SCOPE"] = array("type"=>200,"varname"=>"SCOPE");
	$dalTableOAUTH_REFRESH_TOKENS["REFRESH_TOKEN"]["key"]=true;

$dal_info["Tables__OAUTH_REFRESH_TOKENS"] = &$dalTableOAUTH_REFRESH_TOKENS;
?>
<?php
$dalTableOAUTH_ACCESS_TOKENS = array();
$dalTableOAUTH_ACCESS_TOKENS["ACCESS_TOKEN"] = array("type"=>200,"varname"=>"ACCESS_TOKEN");
$dalTableOAUTH_ACCESS_TOKENS["CLIENT_ID"] = array("type"=>200,"varname"=>"CLIENT_ID");
$dalTableOAUTH_ACCESS_TOKENS["USER_ID"] = array("type"=>200,"varname"=>"USER_ID");
$dalTableOAUTH_ACCESS_TOKENS["EXPIRES"] = array("type"=>135,"varname"=>"EXPIRES");
$dalTableOAUTH_ACCESS_TOKENS["SCOPE"] = array("type"=>200,"varname"=>"SCOPE");
	$dalTableOAUTH_ACCESS_TOKENS["ACCESS_TOKEN"]["key"]=true;

$dal_info["Tables__OAUTH_ACCESS_TOKENS"] = &$dalTableOAUTH_ACCESS_TOKENS;
?>
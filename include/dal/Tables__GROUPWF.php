<?php
$dalTableGROUPWF = array();
$dalTableGROUPWF["GRP_UID"] = array("type"=>200,"varname"=>"GRP_UID");
$dalTableGROUPWF["GRP_TITLE"] = array("type"=>201,"varname"=>"GRP_TITLE");
$dalTableGROUPWF["GRP_STATUS"] = array("type"=>200,"varname"=>"GRP_STATUS");
$dalTableGROUPWF["GRP_LDAP_DN"] = array("type"=>200,"varname"=>"GRP_LDAP_DN");
$dalTableGROUPWF["GRP_UX"] = array("type"=>200,"varname"=>"GRP_UX");
	$dalTableGROUPWF["GRP_UID"]["key"]=true;

$dal_info["Tables__GROUPWF"] = &$dalTableGROUPWF;
?>
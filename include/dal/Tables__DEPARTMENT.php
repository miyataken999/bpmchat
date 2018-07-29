<?php
$dalTableDEPARTMENT = array();
$dalTableDEPARTMENT["DEP_UID"] = array("type"=>200,"varname"=>"DEP_UID");
$dalTableDEPARTMENT["DEP_TITLE"] = array("type"=>201,"varname"=>"DEP_TITLE");
$dalTableDEPARTMENT["DEP_PARENT"] = array("type"=>200,"varname"=>"DEP_PARENT");
$dalTableDEPARTMENT["DEP_MANAGER"] = array("type"=>200,"varname"=>"DEP_MANAGER");
$dalTableDEPARTMENT["DEP_LOCATION"] = array("type"=>3,"varname"=>"DEP_LOCATION");
$dalTableDEPARTMENT["DEP_STATUS"] = array("type"=>200,"varname"=>"DEP_STATUS");
$dalTableDEPARTMENT["DEP_REF_CODE"] = array("type"=>200,"varname"=>"DEP_REF_CODE");
$dalTableDEPARTMENT["DEP_LDAP_DN"] = array("type"=>200,"varname"=>"DEP_LDAP_DN");
	$dalTableDEPARTMENT["DEP_UID"]["key"]=true;

$dal_info["Tables__DEPARTMENT"] = &$dalTableDEPARTMENT;
?>
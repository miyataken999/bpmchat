<?php
$dalTableRBAC_USERS = array();
$dalTableRBAC_USERS["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableRBAC_USERS["USR_USERNAME"] = array("type"=>200,"varname"=>"USR_USERNAME");
$dalTableRBAC_USERS["USR_PASSWORD"] = array("type"=>200,"varname"=>"USR_PASSWORD");
$dalTableRBAC_USERS["USR_FIRSTNAME"] = array("type"=>200,"varname"=>"USR_FIRSTNAME");
$dalTableRBAC_USERS["USR_LASTNAME"] = array("type"=>200,"varname"=>"USR_LASTNAME");
$dalTableRBAC_USERS["USR_EMAIL"] = array("type"=>200,"varname"=>"USR_EMAIL");
$dalTableRBAC_USERS["USR_DUE_DATE"] = array("type"=>7,"varname"=>"USR_DUE_DATE");
$dalTableRBAC_USERS["USR_CREATE_DATE"] = array("type"=>135,"varname"=>"USR_CREATE_DATE");
$dalTableRBAC_USERS["USR_UPDATE_DATE"] = array("type"=>135,"varname"=>"USR_UPDATE_DATE");
$dalTableRBAC_USERS["USR_STATUS"] = array("type"=>3,"varname"=>"USR_STATUS");
$dalTableRBAC_USERS["USR_AUTH_TYPE"] = array("type"=>200,"varname"=>"USR_AUTH_TYPE");
$dalTableRBAC_USERS["UID_AUTH_SOURCE"] = array("type"=>200,"varname"=>"UID_AUTH_SOURCE");
$dalTableRBAC_USERS["USR_AUTH_USER_DN"] = array("type"=>200,"varname"=>"USR_AUTH_USER_DN");
$dalTableRBAC_USERS["USR_AUTH_SUPERVISOR_DN"] = array("type"=>200,"varname"=>"USR_AUTH_SUPERVISOR_DN");
	$dalTableRBAC_USERS["USR_UID"]["key"]=true;

$dal_info["Tables__RBAC_USERS"] = &$dalTableRBAC_USERS;
?>
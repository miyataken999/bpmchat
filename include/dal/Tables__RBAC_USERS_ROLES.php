<?php
$dalTableRBAC_USERS_ROLES = array();
$dalTableRBAC_USERS_ROLES["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableRBAC_USERS_ROLES["ROL_UID"] = array("type"=>200,"varname"=>"ROL_UID");
	$dalTableRBAC_USERS_ROLES["USR_UID"]["key"]=true;
	$dalTableRBAC_USERS_ROLES["ROL_UID"]["key"]=true;

$dal_info["Tables__RBAC_USERS_ROLES"] = &$dalTableRBAC_USERS_ROLES;
?>
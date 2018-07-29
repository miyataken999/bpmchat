<?php
$dalTableRBAC_ROLES = array();
$dalTableRBAC_ROLES["ROL_UID"] = array("type"=>200,"varname"=>"ROL_UID");
$dalTableRBAC_ROLES["ROL_PARENT"] = array("type"=>200,"varname"=>"ROL_PARENT");
$dalTableRBAC_ROLES["ROL_SYSTEM"] = array("type"=>200,"varname"=>"ROL_SYSTEM");
$dalTableRBAC_ROLES["ROL_CODE"] = array("type"=>200,"varname"=>"ROL_CODE");
$dalTableRBAC_ROLES["ROL_CREATE_DATE"] = array("type"=>135,"varname"=>"ROL_CREATE_DATE");
$dalTableRBAC_ROLES["ROL_UPDATE_DATE"] = array("type"=>135,"varname"=>"ROL_UPDATE_DATE");
$dalTableRBAC_ROLES["ROL_STATUS"] = array("type"=>3,"varname"=>"ROL_STATUS");
	$dalTableRBAC_ROLES["ROL_UID"]["key"]=true;

$dal_info["Tables__RBAC_ROLES"] = &$dalTableRBAC_ROLES;
?>
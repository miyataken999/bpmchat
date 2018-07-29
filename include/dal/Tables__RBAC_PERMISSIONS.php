<?php
$dalTableRBAC_PERMISSIONS = array();
$dalTableRBAC_PERMISSIONS["PER_UID"] = array("type"=>200,"varname"=>"PER_UID");
$dalTableRBAC_PERMISSIONS["PER_CODE"] = array("type"=>200,"varname"=>"PER_CODE");
$dalTableRBAC_PERMISSIONS["PER_CREATE_DATE"] = array("type"=>135,"varname"=>"PER_CREATE_DATE");
$dalTableRBAC_PERMISSIONS["PER_UPDATE_DATE"] = array("type"=>135,"varname"=>"PER_UPDATE_DATE");
$dalTableRBAC_PERMISSIONS["PER_STATUS"] = array("type"=>3,"varname"=>"PER_STATUS");
$dalTableRBAC_PERMISSIONS["PER_SYSTEM"] = array("type"=>200,"varname"=>"PER_SYSTEM");
	$dalTableRBAC_PERMISSIONS["PER_UID"]["key"]=true;

$dal_info["Tables__RBAC_PERMISSIONS"] = &$dalTableRBAC_PERMISSIONS;
?>
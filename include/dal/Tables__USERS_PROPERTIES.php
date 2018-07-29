<?php
$dalTableUSERS_PROPERTIES = array();
$dalTableUSERS_PROPERTIES["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableUSERS_PROPERTIES["USR_LAST_UPDATE_DATE"] = array("type"=>135,"varname"=>"USR_LAST_UPDATE_DATE");
$dalTableUSERS_PROPERTIES["USR_LOGGED_NEXT_TIME"] = array("type"=>3,"varname"=>"USR_LOGGED_NEXT_TIME");
$dalTableUSERS_PROPERTIES["USR_PASSWORD_HISTORY"] = array("type"=>201,"varname"=>"USR_PASSWORD_HISTORY");
	$dalTableUSERS_PROPERTIES["USR_UID"]["key"]=true;

$dal_info["Tables__USERS_PROPERTIES"] = &$dalTableUSERS_PROPERTIES;
?>
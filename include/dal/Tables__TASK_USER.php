<?php
$dalTableTASK_USER = array();
$dalTableTASK_USER["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableTASK_USER["USR_UID"] = array("type"=>200,"varname"=>"USR_UID");
$dalTableTASK_USER["TU_TYPE"] = array("type"=>3,"varname"=>"TU_TYPE");
$dalTableTASK_USER["TU_RELATION"] = array("type"=>3,"varname"=>"TU_RELATION");
	$dalTableTASK_USER["TAS_UID"]["key"]=true;
	$dalTableTASK_USER["USR_UID"]["key"]=true;
	$dalTableTASK_USER["TU_TYPE"]["key"]=true;
	$dalTableTASK_USER["TU_RELATION"]["key"]=true;

$dal_info["Tables__TASK_USER"] = &$dalTableTASK_USER;
?>
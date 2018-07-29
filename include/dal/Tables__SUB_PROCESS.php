<?php
$dalTableSUB_PROCESS = array();
$dalTableSUB_PROCESS["SP_UID"] = array("type"=>200,"varname"=>"SP_UID");
$dalTableSUB_PROCESS["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableSUB_PROCESS["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableSUB_PROCESS["PRO_PARENT"] = array("type"=>200,"varname"=>"PRO_PARENT");
$dalTableSUB_PROCESS["TAS_PARENT"] = array("type"=>200,"varname"=>"TAS_PARENT");
$dalTableSUB_PROCESS["SP_TYPE"] = array("type"=>200,"varname"=>"SP_TYPE");
$dalTableSUB_PROCESS["SP_SYNCHRONOUS"] = array("type"=>3,"varname"=>"SP_SYNCHRONOUS");
$dalTableSUB_PROCESS["SP_SYNCHRONOUS_TYPE"] = array("type"=>200,"varname"=>"SP_SYNCHRONOUS_TYPE");
$dalTableSUB_PROCESS["SP_SYNCHRONOUS_WAIT"] = array("type"=>3,"varname"=>"SP_SYNCHRONOUS_WAIT");
$dalTableSUB_PROCESS["SP_VARIABLES_OUT"] = array("type"=>201,"varname"=>"SP_VARIABLES_OUT");
$dalTableSUB_PROCESS["SP_VARIABLES_IN"] = array("type"=>201,"varname"=>"SP_VARIABLES_IN");
$dalTableSUB_PROCESS["SP_GRID_IN"] = array("type"=>200,"varname"=>"SP_GRID_IN");
	$dalTableSUB_PROCESS["SP_UID"]["key"]=true;

$dal_info["Tables__SUB_PROCESS"] = &$dalTableSUB_PROCESS;
?>
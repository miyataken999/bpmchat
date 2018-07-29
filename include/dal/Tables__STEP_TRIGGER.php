<?php
$dalTableSTEP_TRIGGER = array();
$dalTableSTEP_TRIGGER["STEP_UID"] = array("type"=>200,"varname"=>"STEP_UID");
$dalTableSTEP_TRIGGER["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableSTEP_TRIGGER["TRI_UID"] = array("type"=>200,"varname"=>"TRI_UID");
$dalTableSTEP_TRIGGER["ST_TYPE"] = array("type"=>200,"varname"=>"ST_TYPE");
$dalTableSTEP_TRIGGER["ST_CONDITION"] = array("type"=>200,"varname"=>"ST_CONDITION");
$dalTableSTEP_TRIGGER["ST_POSITION"] = array("type"=>3,"varname"=>"ST_POSITION");
	$dalTableSTEP_TRIGGER["STEP_UID"]["key"]=true;
	$dalTableSTEP_TRIGGER["TAS_UID"]["key"]=true;
	$dalTableSTEP_TRIGGER["TRI_UID"]["key"]=true;
	$dalTableSTEP_TRIGGER["ST_TYPE"]["key"]=true;

$dal_info["Tables__STEP_TRIGGER"] = &$dalTableSTEP_TRIGGER;
?>
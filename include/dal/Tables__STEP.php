<?php
$dalTableSTEP = array();
$dalTableSTEP["STEP_UID"] = array("type"=>200,"varname"=>"STEP_UID");
$dalTableSTEP["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableSTEP["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableSTEP["STEP_TYPE_OBJ"] = array("type"=>200,"varname"=>"STEP_TYPE_OBJ");
$dalTableSTEP["STEP_UID_OBJ"] = array("type"=>200,"varname"=>"STEP_UID_OBJ");
$dalTableSTEP["STEP_CONDITION"] = array("type"=>201,"varname"=>"STEP_CONDITION");
$dalTableSTEP["STEP_POSITION"] = array("type"=>3,"varname"=>"STEP_POSITION");
$dalTableSTEP["STEP_MODE"] = array("type"=>200,"varname"=>"STEP_MODE");
	$dalTableSTEP["STEP_UID"]["key"]=true;

$dal_info["Tables__STEP"] = &$dalTableSTEP;
?>
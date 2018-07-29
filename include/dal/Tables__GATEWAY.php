<?php
$dalTableGATEWAY = array();
$dalTableGATEWAY["GAT_UID"] = array("type"=>200,"varname"=>"GAT_UID");
$dalTableGATEWAY["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableGATEWAY["TAS_UID"] = array("type"=>200,"varname"=>"TAS_UID");
$dalTableGATEWAY["GAT_NEXT_TASK"] = array("type"=>200,"varname"=>"GAT_NEXT_TASK");
$dalTableGATEWAY["GAT_X"] = array("type"=>3,"varname"=>"GAT_X");
$dalTableGATEWAY["GAT_Y"] = array("type"=>3,"varname"=>"GAT_Y");
$dalTableGATEWAY["GAT_TYPE"] = array("type"=>200,"varname"=>"GAT_TYPE");
	$dalTableGATEWAY["GAT_UID"]["key"]=true;

$dal_info["Tables__GATEWAY"] = &$dalTableGATEWAY;
?>
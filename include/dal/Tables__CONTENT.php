<?php
$dalTableCONTENT = array();
$dalTableCONTENT["CON_CATEGORY"] = array("type"=>200,"varname"=>"CON_CATEGORY");
$dalTableCONTENT["CON_PARENT"] = array("type"=>200,"varname"=>"CON_PARENT");
$dalTableCONTENT["CON_ID"] = array("type"=>200,"varname"=>"CON_ID");
$dalTableCONTENT["CON_LANG"] = array("type"=>200,"varname"=>"CON_LANG");
$dalTableCONTENT["CON_VALUE"] = array("type"=>201,"varname"=>"CON_VALUE");
	$dalTableCONTENT["CON_CATEGORY"]["key"]=true;
	$dalTableCONTENT["CON_PARENT"]["key"]=true;
	$dalTableCONTENT["CON_ID"]["key"]=true;
	$dalTableCONTENT["CON_LANG"]["key"]=true;

$dal_info["Tables__CONTENT"] = &$dalTableCONTENT;
?>
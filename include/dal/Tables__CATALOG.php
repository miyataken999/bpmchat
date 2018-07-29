<?php
$dalTableCATALOG = array();
$dalTableCATALOG["CAT_UID"] = array("type"=>200,"varname"=>"CAT_UID");
$dalTableCATALOG["CAT_LABEL_ID"] = array("type"=>200,"varname"=>"CAT_LABEL_ID");
$dalTableCATALOG["CAT_TYPE"] = array("type"=>200,"varname"=>"CAT_TYPE");
$dalTableCATALOG["CAT_FLAG"] = array("type"=>200,"varname"=>"CAT_FLAG");
$dalTableCATALOG["CAT_OBSERVATION"] = array("type"=>201,"varname"=>"CAT_OBSERVATION");
$dalTableCATALOG["CAT_CREATE_DATE"] = array("type"=>135,"varname"=>"CAT_CREATE_DATE");
$dalTableCATALOG["CAT_UPDATE_DATE"] = array("type"=>135,"varname"=>"CAT_UPDATE_DATE");
	$dalTableCATALOG["CAT_UID"]["key"]=true;
	$dalTableCATALOG["CAT_TYPE"]["key"]=true;

$dal_info["Tables__CATALOG"] = &$dalTableCATALOG;
?>
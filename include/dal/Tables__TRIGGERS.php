<?php
$dalTableTRIGGERS = array();
$dalTableTRIGGERS["TRI_UID"] = array("type"=>200,"varname"=>"TRI_UID");
$dalTableTRIGGERS["PRO_UID"] = array("type"=>200,"varname"=>"PRO_UID");
$dalTableTRIGGERS["TRI_TYPE"] = array("type"=>200,"varname"=>"TRI_TYPE");
$dalTableTRIGGERS["TRI_WEBBOT"] = array("type"=>201,"varname"=>"TRI_WEBBOT");
$dalTableTRIGGERS["TRI_PARAM"] = array("type"=>201,"varname"=>"TRI_PARAM");
$dalTableTRIGGERS["TRI_TITLE"] = array("type"=>201,"varname"=>"TRI_TITLE");
$dalTableTRIGGERS["TRI_DESCRIPTION"] = array("type"=>201,"varname"=>"TRI_DESCRIPTION");
	$dalTableTRIGGERS["TRI_UID"]["key"]=true;

$dal_info["Tables__TRIGGERS"] = &$dalTableTRIGGERS;
?>
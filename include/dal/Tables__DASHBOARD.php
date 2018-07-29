<?php
$dalTableDASHBOARD = array();
$dalTableDASHBOARD["DAS_UID"] = array("type"=>200,"varname"=>"DAS_UID");
$dalTableDASHBOARD["DAS_TITLE"] = array("type"=>200,"varname"=>"DAS_TITLE");
$dalTableDASHBOARD["DAS_DESCRIPTION"] = array("type"=>201,"varname"=>"DAS_DESCRIPTION");
$dalTableDASHBOARD["DAS_CREATE_DATE"] = array("type"=>135,"varname"=>"DAS_CREATE_DATE");
$dalTableDASHBOARD["DAS_UPDATE_DATE"] = array("type"=>135,"varname"=>"DAS_UPDATE_DATE");
$dalTableDASHBOARD["DAS_STATUS"] = array("type"=>16,"varname"=>"DAS_STATUS");
	$dalTableDASHBOARD["DAS_UID"]["key"]=true;

$dal_info["Tables__DASHBOARD"] = &$dalTableDASHBOARD;
?>
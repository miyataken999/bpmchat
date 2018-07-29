<?php
$dalTableSUB_APPLICATION = array();
$dalTableSUB_APPLICATION["APP_UID"] = array("type"=>200,"varname"=>"APP_UID");
$dalTableSUB_APPLICATION["APP_PARENT"] = array("type"=>200,"varname"=>"APP_PARENT");
$dalTableSUB_APPLICATION["DEL_INDEX_PARENT"] = array("type"=>3,"varname"=>"DEL_INDEX_PARENT");
$dalTableSUB_APPLICATION["DEL_THREAD_PARENT"] = array("type"=>3,"varname"=>"DEL_THREAD_PARENT");
$dalTableSUB_APPLICATION["SA_STATUS"] = array("type"=>200,"varname"=>"SA_STATUS");
$dalTableSUB_APPLICATION["SA_VALUES_OUT"] = array("type"=>201,"varname"=>"SA_VALUES_OUT");
$dalTableSUB_APPLICATION["SA_VALUES_IN"] = array("type"=>201,"varname"=>"SA_VALUES_IN");
$dalTableSUB_APPLICATION["SA_INIT_DATE"] = array("type"=>135,"varname"=>"SA_INIT_DATE");
$dalTableSUB_APPLICATION["SA_FINISH_DATE"] = array("type"=>135,"varname"=>"SA_FINISH_DATE");
	$dalTableSUB_APPLICATION["APP_UID"]["key"]=true;
	$dalTableSUB_APPLICATION["APP_PARENT"]["key"]=true;
	$dalTableSUB_APPLICATION["DEL_INDEX_PARENT"]["key"]=true;
	$dalTableSUB_APPLICATION["DEL_THREAD_PARENT"]["key"]=true;

$dal_info["Tables__SUB_APPLICATION"] = &$dalTableSUB_APPLICATION;
?>
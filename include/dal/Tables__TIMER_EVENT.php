<?php
$dalTableTIMER_EVENT = array();
$dalTableTIMER_EVENT["TMREVN_UID"] = array("type"=>200,"varname"=>"TMREVN_UID");
$dalTableTIMER_EVENT["PRJ_UID"] = array("type"=>200,"varname"=>"PRJ_UID");
$dalTableTIMER_EVENT["EVN_UID"] = array("type"=>200,"varname"=>"EVN_UID");
$dalTableTIMER_EVENT["TMREVN_OPTION"] = array("type"=>200,"varname"=>"TMREVN_OPTION");
$dalTableTIMER_EVENT["TMREVN_START_DATE"] = array("type"=>7,"varname"=>"TMREVN_START_DATE");
$dalTableTIMER_EVENT["TMREVN_END_DATE"] = array("type"=>7,"varname"=>"TMREVN_END_DATE");
$dalTableTIMER_EVENT["TMREVN_DAY"] = array("type"=>200,"varname"=>"TMREVN_DAY");
$dalTableTIMER_EVENT["TMREVN_HOUR"] = array("type"=>200,"varname"=>"TMREVN_HOUR");
$dalTableTIMER_EVENT["TMREVN_MINUTE"] = array("type"=>200,"varname"=>"TMREVN_MINUTE");
$dalTableTIMER_EVENT["TMREVN_CONFIGURATION_DATA"] = array("type"=>201,"varname"=>"TMREVN_CONFIGURATION_DATA");
$dalTableTIMER_EVENT["TMREVN_NEXT_RUN_DATE"] = array("type"=>135,"varname"=>"TMREVN_NEXT_RUN_DATE");
$dalTableTIMER_EVENT["TMREVN_LAST_RUN_DATE"] = array("type"=>135,"varname"=>"TMREVN_LAST_RUN_DATE");
$dalTableTIMER_EVENT["TMREVN_LAST_EXECUTION_DATE"] = array("type"=>135,"varname"=>"TMREVN_LAST_EXECUTION_DATE");
$dalTableTIMER_EVENT["TMREVN_STATUS"] = array("type"=>200,"varname"=>"TMREVN_STATUS");
	$dalTableTIMER_EVENT["TMREVN_UID"]["key"]=true;

$dal_info["Tables__TIMER_EVENT"] = &$dalTableTIMER_EVENT;
?>
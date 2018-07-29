<?php
$dalTablewpfg_term_taxonomy = array();
$dalTablewpfg_term_taxonomy["term_taxonomy_id"] = array("type"=>20,"varname"=>"term_taxonomy_id");
$dalTablewpfg_term_taxonomy["term_id"] = array("type"=>20,"varname"=>"term_id");
$dalTablewpfg_term_taxonomy["taxonomy"] = array("type"=>200,"varname"=>"taxonomy");
$dalTablewpfg_term_taxonomy["description"] = array("type"=>201,"varname"=>"description");
$dalTablewpfg_term_taxonomy["parent"] = array("type"=>20,"varname"=>"parent");
$dalTablewpfg_term_taxonomy["count"] = array("type"=>20,"varname"=>"count");
	$dalTablewpfg_term_taxonomy["term_taxonomy_id"]["key"]=true;

$dal_info["Tables__wpfg_term_taxonomy"] = &$dalTablewpfg_term_taxonomy;
?>
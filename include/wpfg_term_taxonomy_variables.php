<?php
$strTableName="wpfg_term_taxonomy";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="wpfg_term_taxonomy";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("wpfg_term_taxonomy");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["wpfg_term_taxonomy"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
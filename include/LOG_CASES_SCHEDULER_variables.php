<?php
$strTableName="LOG_CASES_SCHEDULER";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="LOG_CASES_SCHEDULER";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LOG_CASES_SCHEDULER");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LOG_CASES_SCHEDULER"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
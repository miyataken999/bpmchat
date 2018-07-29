<?php
$strTableName="APP_TIMEOUT_ACTION_EXECUTED";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="APP_TIMEOUT_ACTION_EXECUTED";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("APP_TIMEOUT_ACTION_EXECUTED");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["APP_TIMEOUT_ACTION_EXECUTED"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
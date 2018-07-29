<?php
$strTableName="APP_CACHE_VIEW_INDEX";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="APP_CACHE_VIEW";

$gstrOrderBy="ORDER BY APP_NUMBER DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("APP_CACHE_VIEW_INDEX");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["APP_CACHE_VIEW_INDEX"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
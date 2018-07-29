<?php
$strTableName="APP_CACHE_VIEW";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="APP_CACHE_VIEW";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("APP_CACHE_VIEW");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["APP_CACHE_VIEW"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
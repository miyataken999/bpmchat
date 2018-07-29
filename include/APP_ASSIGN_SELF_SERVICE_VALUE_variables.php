<?php
$strTableName="APP_ASSIGN_SELF_SERVICE_VALUE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="APP_ASSIGN_SELF_SERVICE_VALUE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("APP_ASSIGN_SELF_SERVICE_VALUE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["APP_ASSIGN_SELF_SERVICE_VALUE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
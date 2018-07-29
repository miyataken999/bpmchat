<?php
$strTableName="CALENDAR_BUSINESS_HOURS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CALENDAR_BUSINESS_HOURS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CALENDAR_BUSINESS_HOURS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CALENDAR_BUSINESS_HOURS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
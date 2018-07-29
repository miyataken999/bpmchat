<?php
$strTableName="CALENDAR_ASSIGNMENTS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CALENDAR_ASSIGNMENTS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CALENDAR_ASSIGNMENTS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CALENDAR_ASSIGNMENTS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
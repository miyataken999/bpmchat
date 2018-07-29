<?php
$strTableName="CALENDAR_HOLIDAYS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CALENDAR_HOLIDAYS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CALENDAR_HOLIDAYS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CALENDAR_HOLIDAYS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
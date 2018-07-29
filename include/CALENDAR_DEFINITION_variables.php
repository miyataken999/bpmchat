<?php
$strTableName="CALENDAR_DEFINITION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CALENDAR_DEFINITION";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CALENDAR_DEFINITION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CALENDAR_DEFINITION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
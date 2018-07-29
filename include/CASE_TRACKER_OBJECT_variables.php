<?php
$strTableName="CASE_TRACKER_OBJECT";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CASE_TRACKER_OBJECT";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CASE_TRACKER_OBJECT");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CASE_TRACKER_OBJECT"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
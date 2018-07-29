<?php
$strTableName="CASE_SCHEDULER";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CASE_SCHEDULER";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CASE_SCHEDULER");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CASE_SCHEDULER"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
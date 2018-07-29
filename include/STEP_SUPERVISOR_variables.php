<?php
$strTableName="STEP_SUPERVISOR";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="STEP_SUPERVISOR";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("STEP_SUPERVISOR");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["STEP_SUPERVISOR"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
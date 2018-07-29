<?php
$strTableName="DASHBOARD_INDICATOR";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="DASHBOARD_INDICATOR";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("DASHBOARD_INDICATOR");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["DASHBOARD_INDICATOR"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
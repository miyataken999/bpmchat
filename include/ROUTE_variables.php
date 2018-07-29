<?php
$strTableName="ROUTE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ROUTE";

$gstrOrderBy="ORDER BY PRO_UID, TAS_UID";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("ROUTE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["ROUTE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
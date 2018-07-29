<?php
$strTableName="ADDITIONAL_TABLES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ADDITIONAL_TABLES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("ADDITIONAL_TABLES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["ADDITIONAL_TABLES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="OUTPUT_DOCUMENT";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="OUTPUT_DOCUMENT";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("OUTPUT_DOCUMENT");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["OUTPUT_DOCUMENT"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
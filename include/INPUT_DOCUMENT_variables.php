<?php
$strTableName="INPUT_DOCUMENT";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="INPUT_DOCUMENT";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("INPUT_DOCUMENT");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["INPUT_DOCUMENT"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
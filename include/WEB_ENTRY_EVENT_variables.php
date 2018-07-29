<?php
$strTableName="WEB_ENTRY_EVENT";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="WEB_ENTRY_EVENT";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("WEB_ENTRY_EVENT");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["WEB_ENTRY_EVENT"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
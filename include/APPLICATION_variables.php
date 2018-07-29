<?php
$strTableName="APPLICATION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="APPLICATION";

$gstrOrderBy="ORDER BY APP_NUMBER DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("APPLICATION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["APPLICATION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
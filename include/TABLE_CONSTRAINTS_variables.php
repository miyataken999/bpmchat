<?php
$strTableName="TABLE_CONSTRAINTS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="TABLE_CONSTRAINTS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("TABLE_CONSTRAINTS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["TABLE_CONSTRAINTS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
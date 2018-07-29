<?php
$strTableName="LIST_UNASSIGNED";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="LIST_UNASSIGNED";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LIST_UNASSIGNED");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LIST_UNASSIGNED"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="CASE_CONSOLIDATED";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="CASE_CONSOLIDATED";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("CASE_CONSOLIDATED");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["CASE_CONSOLIDATED"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="PMT_ANNUAL_REVENUE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_ANNUAL_REVENUE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_ANNUAL_REVENUE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_ANNUAL_REVENUE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
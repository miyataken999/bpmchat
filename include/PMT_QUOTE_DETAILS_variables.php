<?php
$strTableName="PMT_QUOTE_DETAILS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_QUOTE_DETAILS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_QUOTE_DETAILS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_QUOTE_DETAILS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
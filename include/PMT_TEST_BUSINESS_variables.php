<?php
$strTableName="PMT_TEST_BUSINESS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_TEST_BUSINESS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_TEST_BUSINESS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_TEST_BUSINESS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="PMT_SITE_REGISTRATION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_SITE_REGISTRATION";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_SITE_REGISTRATION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_SITE_REGISTRATION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
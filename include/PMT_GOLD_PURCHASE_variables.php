<?php
$strTableName="PMT_GOLD_PURCHASE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_GOLD_PURCHASE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_GOLD_PURCHASE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_GOLD_PURCHASE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
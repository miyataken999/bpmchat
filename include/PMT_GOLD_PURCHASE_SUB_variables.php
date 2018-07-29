<?php
$strTableName="PMT_GOLD_PURCHASE_SUB";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_GOLD_PURCHASE_SUB";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_GOLD_PURCHASE_SUB");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_GOLD_PURCHASE_SUB"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
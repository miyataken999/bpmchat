<?php
$strTableName="PMT_MENU1";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_MENU";

$gstrOrderBy="ORDER BY MENU_ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_MENU1");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_MENU1"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
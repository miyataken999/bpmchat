<?php
$strTableName="PMT_MENU";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_MENU";

$gstrOrderBy="ORDER BY MENU_SORT";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_MENU");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_MENU"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
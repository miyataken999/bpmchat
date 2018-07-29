<?php
$strTableName="WEBSOCKET";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="WEBSOCKET";

$gstrOrderBy="ORDER BY ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("WEBSOCKET");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["WEBSOCKET"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
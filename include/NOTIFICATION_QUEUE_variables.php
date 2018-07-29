<?php
$strTableName="NOTIFICATION_QUEUE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="NOTIFICATION_QUEUE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("NOTIFICATION_QUEUE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["NOTIFICATION_QUEUE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
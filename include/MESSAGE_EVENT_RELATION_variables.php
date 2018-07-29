<?php
$strTableName="MESSAGE_EVENT_RELATION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="MESSAGE_EVENT_RELATION";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("MESSAGE_EVENT_RELATION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["MESSAGE_EVENT_RELATION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="LIST_PARTICIPATED_LAST";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="LIST_PARTICIPATED_LAST";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LIST_PARTICIPATED_LAST");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LIST_PARTICIPATED_LAST"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
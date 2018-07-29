<?php
$strTableName="LIST_PARTICIPATED_HISTORY";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="LIST_PARTICIPATED_HISTORY";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LIST_PARTICIPATED_HISTORY");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LIST_PARTICIPATED_HISTORY"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
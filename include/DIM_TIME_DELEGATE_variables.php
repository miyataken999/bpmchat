<?php
$strTableName="DIM_TIME_DELEGATE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="DIM_TIME_DELEGATE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("DIM_TIME_DELEGATE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["DIM_TIME_DELEGATE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
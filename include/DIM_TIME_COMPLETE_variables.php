<?php
$strTableName="DIM_TIME_COMPLETE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="DIM_TIME_COMPLETE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("DIM_TIME_COMPLETE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["DIM_TIME_COMPLETE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
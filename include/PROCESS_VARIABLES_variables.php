<?php
$strTableName="PROCESS_VARIABLES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PROCESS_VARIABLES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PROCESS_VARIABLES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PROCESS_VARIABLES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
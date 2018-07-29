<?php
$strTableName="PMT_PROGRAM_LIST";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_PROGRAM_LIST";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_PROGRAM_LIST");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_PROGRAM_LIST"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
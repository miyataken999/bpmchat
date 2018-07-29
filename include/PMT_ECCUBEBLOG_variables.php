<?php
$strTableName="PMT_ECCUBEBLOG";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_ECCUBEBLOG";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_ECCUBEBLOG");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_ECCUBEBLOG"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
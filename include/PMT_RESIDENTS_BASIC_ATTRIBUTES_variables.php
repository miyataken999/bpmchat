<?php
$strTableName="PMT_RESIDENTS_BASIC_ATTRIBUTES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_RESIDENTS_BASIC_ATTRIBUTES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_RESIDENTS_BASIC_ATTRIBUTES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_RESIDENTS_BASIC_ATTRIBUTES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
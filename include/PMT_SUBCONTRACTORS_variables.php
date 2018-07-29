<?php
$strTableName="PMT_SUBCONTRACTORS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_SUBCONTRACTORS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_SUBCONTRACTORS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_SUBCONTRACTORS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
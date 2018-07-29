<?php
$strTableName="PMT_PMSEIKYUUSHO";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_PMSEIKYUUSHO";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_PMSEIKYUUSHO");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_PMSEIKYUUSHO"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
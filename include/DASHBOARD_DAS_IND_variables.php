<?php
$strTableName="DASHBOARD_DAS_IND";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="DASHBOARD_DAS_IND";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("DASHBOARD_DAS_IND");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["DASHBOARD_DAS_IND"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
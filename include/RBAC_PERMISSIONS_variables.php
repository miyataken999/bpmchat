<?php
$strTableName="RBAC_PERMISSIONS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="RBAC_PERMISSIONS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("RBAC_PERMISSIONS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["RBAC_PERMISSIONS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
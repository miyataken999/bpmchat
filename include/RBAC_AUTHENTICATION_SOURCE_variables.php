<?php
$strTableName="RBAC_AUTHENTICATION_SOURCE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="RBAC_AUTHENTICATION_SOURCE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("RBAC_AUTHENTICATION_SOURCE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["RBAC_AUTHENTICATION_SOURCE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
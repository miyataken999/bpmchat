<?php
$strTableName="RBAC_USERS_ROLES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="RBAC_USERS_ROLES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("RBAC_USERS_ROLES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["RBAC_USERS_ROLES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
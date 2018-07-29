<?php
$strTableName="PMOAUTH_USER_ACCESS_TOKENS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMOAUTH_USER_ACCESS_TOKENS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMOAUTH_USER_ACCESS_TOKENS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMOAUTH_USER_ACCESS_TOKENS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
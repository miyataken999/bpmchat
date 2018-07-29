<?php
$strTableName="OAUTH_REFRESH_TOKENS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="OAUTH_REFRESH_TOKENS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("OAUTH_REFRESH_TOKENS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["OAUTH_REFRESH_TOKENS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
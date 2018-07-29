<?php
$strTableName="OAUTH_AUTHORIZATION_CODES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="OAUTH_AUTHORIZATION_CODES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("OAUTH_AUTHORIZATION_CODES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["OAUTH_AUTHORIZATION_CODES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="OAUTH_SCOPES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="OAUTH_SCOPES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("OAUTH_SCOPES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["OAUTH_SCOPES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="MESSAGE_TYPE_VARIABLE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="MESSAGE_TYPE_VARIABLE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("MESSAGE_TYPE_VARIABLE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["MESSAGE_TYPE_VARIABLE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="SWIMLANES_ELEMENTS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="SWIMLANES_ELEMENTS";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("SWIMLANES_ELEMENTS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["SWIMLANES_ELEMENTS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
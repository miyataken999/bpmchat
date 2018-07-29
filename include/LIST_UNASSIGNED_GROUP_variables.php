<?php
$strTableName="LIST_UNASSIGNED_GROUP";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="LIST_UNASSIGNED_GROUP";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LIST_UNASSIGNED_GROUP");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LIST_UNASSIGNED_GROUP"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
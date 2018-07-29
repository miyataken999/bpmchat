<?php
$strTableName="BPMN_ARTIFACT";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="BPMN_ARTIFACT";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("BPMN_ARTIFACT");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["BPMN_ARTIFACT"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
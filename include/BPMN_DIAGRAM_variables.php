<?php
$strTableName="BPMN_DIAGRAM";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="BPMN_DIAGRAM";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("BPMN_DIAGRAM");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["BPMN_DIAGRAM"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
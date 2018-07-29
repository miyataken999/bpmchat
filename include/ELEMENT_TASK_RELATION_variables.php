<?php
$strTableName="ELEMENT_TASK_RELATION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ELEMENT_TASK_RELATION";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("ELEMENT_TASK_RELATION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["ELEMENT_TASK_RELATION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
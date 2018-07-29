<?php
$strTableName="APP_SOLR_QUEUE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="APP_SOLR_QUEUE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("APP_SOLR_QUEUE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["APP_SOLR_QUEUE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
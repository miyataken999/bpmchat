<?php
$strTableName="LIST_MY_INBOX";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="LIST_MY_INBOX";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("LIST_MY_INBOX");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["LIST_MY_INBOX"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
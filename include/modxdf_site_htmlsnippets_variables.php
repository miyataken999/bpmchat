<?php
$strTableName="modxdf_site_htmlsnippets";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="modxdf_site_htmlsnippets";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("modxdf_site_htmlsnippets");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["modxdf_site_htmlsnippets"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
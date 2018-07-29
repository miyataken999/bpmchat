<?php
$strTableName="modxdf_site_tmplvars";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="modxdf_site_tmplvars";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("modxdf_site_tmplvars");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["modxdf_site_tmplvars"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
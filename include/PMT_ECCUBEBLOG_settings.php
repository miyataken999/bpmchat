<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_ECCUBEBLOG = array();
	$tdataPMT_ECCUBEBLOG[".truncateText"] = true;
	$tdataPMT_ECCUBEBLOG[".NumberOfChars"] = 20;
	$tdataPMT_ECCUBEBLOG[".ShortName"] = "PMT_ECCUBEBLOG";
	$tdataPMT_ECCUBEBLOG[".OwnerID"] = "";
	$tdataPMT_ECCUBEBLOG[".OriginalTable"] = "PMT_ECCUBEBLOG";

//	field labels
$fieldLabelsPMT_ECCUBEBLOG = array();
$fieldToolTipsPMT_ECCUBEBLOG = array();
$pageTitlesPMT_ECCUBEBLOG = array();
$placeHoldersPMT_ECCUBEBLOG = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"] = array();
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"] = array();
	$placeHoldersPMT_ECCUBEBLOG["Japanese"] = array();
	$pageTitlesPMT_ECCUBEBLOG["Japanese"] = array();
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["BLOC_ID"] = "BLOC ID";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["BLOC_ID"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["BLOC_ID"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["BLOC_ID_LABEL"] = "BLOC ID LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["BLOC_ID_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["BLOC_ID_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["BLOC_NAME"] = "BLOC NAME";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["BLOC_NAME"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["BLOC_NAME"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["BLOC_NAME_LABEL"] = "BLOC NAME LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["BLOC_NAME_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["BLOC_NAME_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["APPLICATION"] = "APPLICATION";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["APPLICATION"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["APPLICATION"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["APPLICATION_LABEL"] = "APPLICATION LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["APPLICATION_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["APPLICATION_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["PROCESS"] = "PROCESS";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["PROCESS"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["PROCESS"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["PROCESS_LABEL"] = "PROCESS LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["PROCESS_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["PROCESS_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["CHECKBOXVAR001"] = "CHECKBOXVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["CHECKBOXVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["CHECKBOXVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR001"] = "DATETIMEVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR001_LABEL"] = "DATETIMEVAR001 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR001_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR001_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR002"] = "DATETIMEVAR002";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR002"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR002"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR002_LABEL"] = "DATETIMEVAR002 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR002_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DATETIMEVAR002_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR001"] = "DROPDOWNVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR002"] = "DROPDOWNVAR002";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR002"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR002"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR003"] = "DROPDOWNVAR003";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR003"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR003"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR003_LABEL"] = "DROPDOWNVAR003 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR003_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["DROPDOWNVAR003_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["SATEI"] = "SATEI";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["SATEI"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["SATEI"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["SATEI_LABEL"] = "SATEI LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["SATEI_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["SATEI_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR001"] = "TEXTVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR001_LABEL"] = "TEXTVAR001 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR001_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR001_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR004"] = "TEXTVAR004";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR004"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR004"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR004_LABEL"] = "TEXTVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR005"] = "TEXTVAR005";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR005"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR005"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR006"] = "TEXTVAR006";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR006"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR006"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR006_LABEL"] = "TEXTVAR006 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR006_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR006_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR007"] = "TEXTVAR007";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR007"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR007"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR007_LABEL"] = "TEXTVAR007 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR007_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR007_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR008"] = "TEXTVAR008";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR008"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR008"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR008_LABEL"] = "TEXTVAR008 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR008_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR008_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR009"] = "TEXTVAR009";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR009"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR009"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR009_LABEL"] = "TEXTVAR009 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR009_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR009_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR010"] = "TEXTVAR010";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR010"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR010"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR010_LABEL"] = "TEXTVAR010 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR010_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR010_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR011"] = "TEXTVAR011";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR011"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR011"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR011_LABEL"] = "TEXTVAR011 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR011_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR011_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR012"] = "TEXTVAR012";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR012"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR012"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR012_LABEL"] = "TEXTVAR012 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR012_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR012_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR013"] = "TEXTVAR013";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR013"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR013"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR013_LABEL"] = "TEXTVAR013 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR013_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR013_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR014"] = "TEXTVAR014";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR014"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR014"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR014_LABEL"] = "TEXTVAR014 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR014_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR014_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR015"] = "TEXTVAR015";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR015"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR015"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR015_LABEL"] = "TEXTVAR015 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTVAR015_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTVAR015_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR001"] = "TEXTAREAVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR002"] = "TEXTAREAVAR002";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR002"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR002"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR003"] = "TEXTAREAVAR003";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR003"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR003"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR003_LABEL"] = "TEXTAREAVAR003 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR003_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR003_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR004"] = "TEXTAREAVAR004";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR004"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR004"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR004_LABEL"] = "TEXTAREAVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR005"] = "TEXTAREAVAR005";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR005"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR005"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR005_LABEL"] = "TEXTAREAVAR005 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR005_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR005_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR006"] = "TEXTAREAVAR006";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR006"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR006"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR006_LABEL"] = "TEXTAREAVAR006 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR006_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TEXTAREAVAR006_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["JPN"] = "JPN";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["JPN"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["JPN"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["JPN_LABEL"] = "JPN LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["JPN_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["JPN_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TPL_PATH"] = "TPL PATH";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TPL_PATH"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TPL_PATH"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["Japanese"]["TPL_PATH_LABEL"] = "TPL PATH LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["Japanese"]["TPL_PATH_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["Japanese"]["TPL_PATH_LABEL"] = "";
	if (count($fieldToolTipsPMT_ECCUBEBLOG["Japanese"]))
		$tdataPMT_ECCUBEBLOG[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_ECCUBEBLOG["English"] = array();
	$fieldToolTipsPMT_ECCUBEBLOG["English"] = array();
	$placeHoldersPMT_ECCUBEBLOG["English"] = array();
	$pageTitlesPMT_ECCUBEBLOG["English"] = array();
	$fieldLabelsPMT_ECCUBEBLOG["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["APP_UID"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["APP_UID"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["BLOC_ID"] = "BLOC ID";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["BLOC_ID"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["BLOC_ID"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["BLOC_ID_LABEL"] = "BLOC ID LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["BLOC_ID_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["BLOC_ID_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["BLOC_NAME"] = "BLOC NAME";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["BLOC_NAME"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["BLOC_NAME"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["BLOC_NAME_LABEL"] = "BLOC NAME LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["BLOC_NAME_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["BLOC_NAME_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["APPLICATION"] = "APPLICATION";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["APPLICATION"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["APPLICATION"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["APPLICATION_LABEL"] = "APPLICATION LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["APPLICATION_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["APPLICATION_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["PROCESS"] = "PROCESS";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["PROCESS"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["PROCESS"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["PROCESS_LABEL"] = "PROCESS LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["PROCESS_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["PROCESS_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["CHECKBOXVAR001"] = "CHECKBOXVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["CHECKBOXVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["CHECKBOXVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DATETIMEVAR001"] = "DATETIMEVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DATETIMEVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DATETIMEVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DATETIMEVAR001_LABEL"] = "DATETIMEVAR001 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DATETIMEVAR001_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DATETIMEVAR001_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DATETIMEVAR002"] = "DATETIMEVAR002";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DATETIMEVAR002"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DATETIMEVAR002"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DATETIMEVAR002_LABEL"] = "DATETIMEVAR002 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DATETIMEVAR002_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DATETIMEVAR002_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR001"] = "DROPDOWNVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DROPDOWNVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR002"] = "DROPDOWNVAR002";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR002"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DROPDOWNVAR002"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR003"] = "DROPDOWNVAR003";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR003"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DROPDOWNVAR003"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR003_LABEL"] = "DROPDOWNVAR003 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["DROPDOWNVAR003_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["DROPDOWNVAR003_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["SATEI"] = "SATEI";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["SATEI"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["SATEI"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["SATEI_LABEL"] = "SATEI LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["SATEI_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["SATEI_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR001"] = "TEXTVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR001_LABEL"] = "TEXTVAR001 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR001_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR001_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR004"] = "TEXTVAR004";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR004"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR004"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR004_LABEL"] = "TEXTVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR005"] = "TEXTVAR005";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR005"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR005"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR006"] = "TEXTVAR006";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR006"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR006"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR006_LABEL"] = "TEXTVAR006 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR006_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR006_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR007"] = "TEXTVAR007";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR007"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR007"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR007_LABEL"] = "TEXTVAR007 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR007_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR007_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR008"] = "TEXTVAR008";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR008"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR008"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR008_LABEL"] = "TEXTVAR008 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR008_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR008_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR009"] = "TEXTVAR009";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR009"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR009"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR009_LABEL"] = "TEXTVAR009 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR009_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR009_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR010"] = "TEXTVAR010";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR010"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR010"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR010_LABEL"] = "TEXTVAR010 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR010_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR010_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR011"] = "TEXTVAR011";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR011"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR011"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR011_LABEL"] = "TEXTVAR011 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR011_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR011_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR012"] = "TEXTVAR012";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR012"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR012"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR012_LABEL"] = "TEXTVAR012 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR012_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR012_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR013"] = "TEXTVAR013";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR013"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR013"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR013_LABEL"] = "TEXTVAR013 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR013_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR013_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR014"] = "TEXTVAR014";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR014"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR014"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR014_LABEL"] = "TEXTVAR014 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR014_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR014_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR015"] = "TEXTVAR015";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR015"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR015"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTVAR015_LABEL"] = "TEXTVAR015 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTVAR015_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTVAR015_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR001"] = "TEXTAREAVAR001";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR001"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR001"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR002"] = "TEXTAREAVAR002";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR002"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR002"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR003"] = "TEXTAREAVAR003";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR003"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR003"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR003_LABEL"] = "TEXTAREAVAR003 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR003_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR003_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR004"] = "TEXTAREAVAR004";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR004"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR004"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR004_LABEL"] = "TEXTAREAVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR005"] = "TEXTAREAVAR005";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR005"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR005"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR005_LABEL"] = "TEXTAREAVAR005 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR005_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR005_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR006"] = "TEXTAREAVAR006";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR006"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR006"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR006_LABEL"] = "TEXTAREAVAR006 LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TEXTAREAVAR006_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TEXTAREAVAR006_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["JPN"] = "JPN";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["JPN"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["JPN"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["JPN_LABEL"] = "JPN LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["JPN_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["JPN_LABEL"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TPL_PATH"] = "TPL PATH";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TPL_PATH"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TPL_PATH"] = "";
	$fieldLabelsPMT_ECCUBEBLOG["English"]["TPL_PATH_LABEL"] = "TPL PATH LABEL";
	$fieldToolTipsPMT_ECCUBEBLOG["English"]["TPL_PATH_LABEL"] = "";
	$placeHoldersPMT_ECCUBEBLOG["English"]["TPL_PATH_LABEL"] = "";
	if (count($fieldToolTipsPMT_ECCUBEBLOG["English"]))
		$tdataPMT_ECCUBEBLOG[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_ECCUBEBLOG[""] = array();
	$fieldToolTipsPMT_ECCUBEBLOG[""] = array();
	$placeHoldersPMT_ECCUBEBLOG[""] = array();
	$pageTitlesPMT_ECCUBEBLOG[""] = array();
	if (count($fieldToolTipsPMT_ECCUBEBLOG[""]))
		$tdataPMT_ECCUBEBLOG[".isUseToolTips"] = true;
}


	$tdataPMT_ECCUBEBLOG[".NCSearch"] = true;



$tdataPMT_ECCUBEBLOG[".shortTableName"] = "PMT_ECCUBEBLOG";
$tdataPMT_ECCUBEBLOG[".nSecOptions"] = 0;
$tdataPMT_ECCUBEBLOG[".recsPerRowPrint"] = 1;
$tdataPMT_ECCUBEBLOG[".mainTableOwnerID"] = "";
$tdataPMT_ECCUBEBLOG[".moveNext"] = 0;
$tdataPMT_ECCUBEBLOG[".entityType"] = 0;

$tdataPMT_ECCUBEBLOG[".strOriginalTableName"] = "PMT_ECCUBEBLOG";

	



$tdataPMT_ECCUBEBLOG[".showAddInPopup"] = false;

$tdataPMT_ECCUBEBLOG[".showEditInPopup"] = false;

$tdataPMT_ECCUBEBLOG[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_ECCUBEBLOG[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_ECCUBEBLOG[".fieldsForRegister"] = array();
	
$tdataPMT_ECCUBEBLOG[".listAjax"] = false;

	$tdataPMT_ECCUBEBLOG[".audit"] = true;

	$tdataPMT_ECCUBEBLOG[".locking"] = false;

$tdataPMT_ECCUBEBLOG[".edit"] = true;
$tdataPMT_ECCUBEBLOG[".afterEditAction"] = 1;
$tdataPMT_ECCUBEBLOG[".closePopupAfterEdit"] = 1;
$tdataPMT_ECCUBEBLOG[".afterEditActionDetTable"] = "";

$tdataPMT_ECCUBEBLOG[".add"] = true;
$tdataPMT_ECCUBEBLOG[".afterAddAction"] = 1;
$tdataPMT_ECCUBEBLOG[".closePopupAfterAdd"] = 1;
$tdataPMT_ECCUBEBLOG[".afterAddActionDetTable"] = "";

$tdataPMT_ECCUBEBLOG[".list"] = true;



$tdataPMT_ECCUBEBLOG[".reorderRecordsByHeader"] = true;



$tdataPMT_ECCUBEBLOG[".view"] = true;

$tdataPMT_ECCUBEBLOG[".import"] = true;

$tdataPMT_ECCUBEBLOG[".exportTo"] = true;

$tdataPMT_ECCUBEBLOG[".printFriendly"] = true;

$tdataPMT_ECCUBEBLOG[".delete"] = true;

$tdataPMT_ECCUBEBLOG[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_ECCUBEBLOG[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_ECCUBEBLOG[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_ECCUBEBLOG[".searchSaving"] = false;
//

$tdataPMT_ECCUBEBLOG[".showSearchPanel"] = true;
		$tdataPMT_ECCUBEBLOG[".flexibleSearch"] = true;

$tdataPMT_ECCUBEBLOG[".isUseAjaxSuggest"] = true;

$tdataPMT_ECCUBEBLOG[".rowHighlite"] = true;



				

$tdataPMT_ECCUBEBLOG[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_ECCUBEBLOG[".buttonsAdded"] = false;

$tdataPMT_ECCUBEBLOG[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_ECCUBEBLOG[".isUseTimeForSearch"] = false;





$tdataPMT_ECCUBEBLOG[".allSearchFields"] = array();
$tdataPMT_ECCUBEBLOG[".filterFields"] = array();
$tdataPMT_ECCUBEBLOG[".requiredSearchFields"] = array();

$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "APP_UID";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "BLOC_ID";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "BLOC_ID_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "BLOC_NAME";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "BLOC_NAME_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "APPLICATION";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "APPLICATION_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "PROCESS";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "PROCESS_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "CHECKBOXVAR001";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DATETIMEVAR001";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DATETIMEVAR001_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DATETIMEVAR002";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DATETIMEVAR002_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DROPDOWNVAR001";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DROPDOWNVAR002";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DROPDOWNVAR003";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "DROPDOWNVAR003_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "SATEI";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "SATEI_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR001";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR001_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR004";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR004_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR005";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR006";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR006_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR007";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR007_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR008";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR008_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR009";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR009_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR010";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR010_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR011";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR011_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR012";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR012_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR013";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR013_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR014";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR014_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR015";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTVAR015_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR001";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR002";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR003";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR003_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR004";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR004_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR005";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR005_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR006";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TEXTAREAVAR006_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "JPN";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "JPN_LABEL";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TPL_PATH";
	$tdataPMT_ECCUBEBLOG[".allSearchFields"][] = "TPL_PATH_LABEL";
	

$tdataPMT_ECCUBEBLOG[".googleLikeFields"] = array();
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".googleLikeFields"][] = "TPL_PATH_LABEL";


$tdataPMT_ECCUBEBLOG[".advSearchFields"] = array();
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".advSearchFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".tableType"] = "list";

$tdataPMT_ECCUBEBLOG[".printerPageOrientation"] = 0;
$tdataPMT_ECCUBEBLOG[".nPrinterPageScale"] = 100;

$tdataPMT_ECCUBEBLOG[".nPrinterSplitRecords"] = 40;

$tdataPMT_ECCUBEBLOG[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_ECCUBEBLOG[".geocodingEnabled"] = false;





$tdataPMT_ECCUBEBLOG[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_ECCUBEBLOG[".pageSize"] = 20;

$tdataPMT_ECCUBEBLOG[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_ECCUBEBLOG[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_ECCUBEBLOG[".orderindexes"] = array();

$tdataPMT_ECCUBEBLOG[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	BLOC_ID,  	BLOC_ID_LABEL,  	BLOC_NAME,  	BLOC_NAME_LABEL,  	APPLICATION,  	APPLICATION_LABEL,  	PROCESS,  	PROCESS_LABEL,  	CHECKBOXVAR001,  	DATETIMEVAR001,  	DATETIMEVAR001_LABEL,  	DATETIMEVAR002,  	DATETIMEVAR002_LABEL,  	DROPDOWNVAR001,  	DROPDOWNVAR002,  	DROPDOWNVAR003,  	DROPDOWNVAR003_LABEL,  	SATEI,  	SATEI_LABEL,  	TEXTVAR001,  	TEXTVAR001_LABEL,  	TEXTVAR004,  	TEXTVAR004_LABEL,  	TEXTVAR005,  	TEXTVAR006,  	TEXTVAR006_LABEL,  	TEXTVAR007,  	TEXTVAR007_LABEL,  	TEXTVAR008,  	TEXTVAR008_LABEL,  	TEXTVAR009,  	TEXTVAR009_LABEL,  	TEXTVAR010,  	TEXTVAR010_LABEL,  	TEXTVAR011,  	TEXTVAR011_LABEL,  	TEXTVAR012,  	TEXTVAR012_LABEL,  	TEXTVAR013,  	TEXTVAR013_LABEL,  	TEXTVAR014,  	TEXTVAR014_LABEL,  	TEXTVAR015,  	TEXTVAR015_LABEL,  	TEXTAREAVAR001,  	TEXTAREAVAR002,  	TEXTAREAVAR003,  	TEXTAREAVAR003_LABEL,  	TEXTAREAVAR004,  	TEXTAREAVAR004_LABEL,  	TEXTAREAVAR005,  	TEXTAREAVAR005_LABEL,  	TEXTAREAVAR006,  	TEXTAREAVAR006_LABEL,  	JPN,  	JPN_LABEL,  	TPL_PATH,  	TPL_PATH_LABEL";
$tdataPMT_ECCUBEBLOG[".sqlFrom"] = "FROM PMT_ECCUBEBLOG";
$tdataPMT_ECCUBEBLOG[".sqlWhereExpr"] = "";
$tdataPMT_ECCUBEBLOG[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_ECCUBEBLOG[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_ECCUBEBLOG[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_ECCUBEBLOG[".highlightSearchResults"] = true;

$tableKeysPMT_ECCUBEBLOG = array();
$tableKeysPMT_ECCUBEBLOG[] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".Keys"] = $tableKeysPMT_ECCUBEBLOG;

$tdataPMT_ECCUBEBLOG[".listFields"] = array();
$tdataPMT_ECCUBEBLOG[".listFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".listFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".hideMobileList"] = array();


$tdataPMT_ECCUBEBLOG[".viewFields"] = array();
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".viewFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".addFields"] = array();
$tdataPMT_ECCUBEBLOG[".addFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".addFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".masterListFields"] = array();
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".masterListFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".inlineAddFields"] = array();
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".inlineAddFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".editFields"] = array();
$tdataPMT_ECCUBEBLOG[".editFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".editFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".inlineEditFields"] = array();
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".inlineEditFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".updateSelectedFields"] = array();
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".updateSelectedFields"][] = "TPL_PATH_LABEL";


$tdataPMT_ECCUBEBLOG[".exportFields"] = array();
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".exportFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".importFields"] = array();
$tdataPMT_ECCUBEBLOG[".importFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".importFields"][] = "TPL_PATH_LABEL";

$tdataPMT_ECCUBEBLOG[".printFields"] = array();
$tdataPMT_ECCUBEBLOG[".printFields"][] = "APP_UID";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "APP_STATUS";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "BLOC_ID";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "BLOC_ID_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "BLOC_NAME";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "BLOC_NAME_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "APPLICATION";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "PROCESS";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "CHECKBOXVAR001";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DROPDOWNVAR001";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DROPDOWNVAR002";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DROPDOWNVAR003";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "DROPDOWNVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "SATEI";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR001";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR001_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR005";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR006";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR007";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR007_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR008";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR008_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR010";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR010_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR014";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR014_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR015";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTVAR015_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR001";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR002";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "JPN";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TPL_PATH";
$tdataPMT_ECCUBEBLOG[".printFields"][] = "TPL_PATH_LABEL";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","APP_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","APP_NUMBER");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","APP_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["APP_STATUS"] = $fdata;
//	BLOC_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BLOC_ID";
	$fdata["GoodName"] = "BLOC_ID";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","BLOC_ID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BLOC_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BLOC_ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["BLOC_ID"] = $fdata;
//	BLOC_ID_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BLOC_ID_LABEL";
	$fdata["GoodName"] = "BLOC_ID_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","BLOC_ID_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BLOC_ID_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BLOC_ID_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["BLOC_ID_LABEL"] = $fdata;
//	BLOC_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BLOC_NAME";
	$fdata["GoodName"] = "BLOC_NAME";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","BLOC_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BLOC_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BLOC_NAME";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["BLOC_NAME"] = $fdata;
//	BLOC_NAME_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "BLOC_NAME_LABEL";
	$fdata["GoodName"] = "BLOC_NAME_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","BLOC_NAME_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BLOC_NAME_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BLOC_NAME_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["BLOC_NAME_LABEL"] = $fdata;
//	APPLICATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APPLICATION";
	$fdata["GoodName"] = "APPLICATION";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","APPLICATION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APPLICATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APPLICATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["APPLICATION"] = $fdata;
//	APPLICATION_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APPLICATION_LABEL";
	$fdata["GoodName"] = "APPLICATION_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","APPLICATION_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APPLICATION_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APPLICATION_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["APPLICATION_LABEL"] = $fdata;
//	PROCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PROCESS";
	$fdata["GoodName"] = "PROCESS";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","PROCESS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PROCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROCESS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["PROCESS"] = $fdata;
//	PROCESS_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PROCESS_LABEL";
	$fdata["GoodName"] = "PROCESS_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","PROCESS_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PROCESS_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROCESS_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["PROCESS_LABEL"] = $fdata;
//	CHECKBOXVAR001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CHECKBOXVAR001";
	$fdata["GoodName"] = "CHECKBOXVAR001";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","CHECKBOXVAR001");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHECKBOXVAR001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOXVAR001";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["CHECKBOXVAR001"] = $fdata;
//	DATETIMEVAR001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DATETIMEVAR001";
	$fdata["GoodName"] = "DATETIMEVAR001";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DATETIMEVAR001");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATETIMEVAR001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATETIMEVAR001";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DATETIMEVAR001"] = $fdata;
//	DATETIMEVAR001_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DATETIMEVAR001_LABEL";
	$fdata["GoodName"] = "DATETIMEVAR001_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DATETIMEVAR001_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATETIMEVAR001_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATETIMEVAR001_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DATETIMEVAR001_LABEL"] = $fdata;
//	DATETIMEVAR002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DATETIMEVAR002";
	$fdata["GoodName"] = "DATETIMEVAR002";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DATETIMEVAR002");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATETIMEVAR002";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATETIMEVAR002";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DATETIMEVAR002"] = $fdata;
//	DATETIMEVAR002_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DATETIMEVAR002_LABEL";
	$fdata["GoodName"] = "DATETIMEVAR002_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DATETIMEVAR002_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATETIMEVAR002_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATETIMEVAR002_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DATETIMEVAR002_LABEL"] = $fdata;
//	DROPDOWNVAR001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DROPDOWNVAR001";
	$fdata["GoodName"] = "DROPDOWNVAR001";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DROPDOWNVAR001");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DROPDOWNVAR001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DROPDOWNVAR001";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DROPDOWNVAR001"] = $fdata;
//	DROPDOWNVAR002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DROPDOWNVAR002";
	$fdata["GoodName"] = "DROPDOWNVAR002";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DROPDOWNVAR002");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DROPDOWNVAR002";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DROPDOWNVAR002";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DROPDOWNVAR002"] = $fdata;
//	DROPDOWNVAR003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DROPDOWNVAR003";
	$fdata["GoodName"] = "DROPDOWNVAR003";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DROPDOWNVAR003");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DROPDOWNVAR003";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DROPDOWNVAR003";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DROPDOWNVAR003"] = $fdata;
//	DROPDOWNVAR003_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DROPDOWNVAR003_LABEL";
	$fdata["GoodName"] = "DROPDOWNVAR003_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","DROPDOWNVAR003_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DROPDOWNVAR003_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DROPDOWNVAR003_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["DROPDOWNVAR003_LABEL"] = $fdata;
//	SATEI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SATEI";
	$fdata["GoodName"] = "SATEI";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","SATEI");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SATEI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SATEI";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["SATEI"] = $fdata;
//	SATEI_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SATEI_LABEL";
	$fdata["GoodName"] = "SATEI_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","SATEI_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SATEI_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SATEI_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["SATEI_LABEL"] = $fdata;
//	TEXTVAR001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "TEXTVAR001";
	$fdata["GoodName"] = "TEXTVAR001";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR001");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR001";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR001"] = $fdata;
//	TEXTVAR001_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TEXTVAR001_LABEL";
	$fdata["GoodName"] = "TEXTVAR001_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR001_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR001_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR001_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR001_LABEL"] = $fdata;
//	TEXTVAR004
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TEXTVAR004";
	$fdata["GoodName"] = "TEXTVAR004";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR004");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR004";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR004";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR004"] = $fdata;
//	TEXTVAR004_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "TEXTVAR004_LABEL";
	$fdata["GoodName"] = "TEXTVAR004_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR004_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR004_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR004_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR004_LABEL"] = $fdata;
//	TEXTVAR005
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TEXTVAR005";
	$fdata["GoodName"] = "TEXTVAR005";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR005");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR005";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR005";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR005"] = $fdata;
//	TEXTVAR006
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "TEXTVAR006";
	$fdata["GoodName"] = "TEXTVAR006";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR006");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR006";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR006";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR006"] = $fdata;
//	TEXTVAR006_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TEXTVAR006_LABEL";
	$fdata["GoodName"] = "TEXTVAR006_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR006_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR006_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR006_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR006_LABEL"] = $fdata;
//	TEXTVAR007
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "TEXTVAR007";
	$fdata["GoodName"] = "TEXTVAR007";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR007");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR007";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR007";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR007"] = $fdata;
//	TEXTVAR007_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TEXTVAR007_LABEL";
	$fdata["GoodName"] = "TEXTVAR007_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR007_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR007_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR007_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR007_LABEL"] = $fdata;
//	TEXTVAR008
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "TEXTVAR008";
	$fdata["GoodName"] = "TEXTVAR008";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR008");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR008";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR008";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR008"] = $fdata;
//	TEXTVAR008_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "TEXTVAR008_LABEL";
	$fdata["GoodName"] = "TEXTVAR008_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR008_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR008_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR008_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR008_LABEL"] = $fdata;
//	TEXTVAR009
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "TEXTVAR009";
	$fdata["GoodName"] = "TEXTVAR009";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR009");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR009";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR009";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR009"] = $fdata;
//	TEXTVAR009_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "TEXTVAR009_LABEL";
	$fdata["GoodName"] = "TEXTVAR009_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR009_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR009_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR009_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR009_LABEL"] = $fdata;
//	TEXTVAR010
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "TEXTVAR010";
	$fdata["GoodName"] = "TEXTVAR010";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR010");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR010";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR010";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR010"] = $fdata;
//	TEXTVAR010_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "TEXTVAR010_LABEL";
	$fdata["GoodName"] = "TEXTVAR010_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR010_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR010_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR010_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR010_LABEL"] = $fdata;
//	TEXTVAR011
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TEXTVAR011";
	$fdata["GoodName"] = "TEXTVAR011";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR011");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR011";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR011";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR011"] = $fdata;
//	TEXTVAR011_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "TEXTVAR011_LABEL";
	$fdata["GoodName"] = "TEXTVAR011_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR011_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR011_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR011_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR011_LABEL"] = $fdata;
//	TEXTVAR012
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "TEXTVAR012";
	$fdata["GoodName"] = "TEXTVAR012";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR012");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR012";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR012";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR012"] = $fdata;
//	TEXTVAR012_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "TEXTVAR012_LABEL";
	$fdata["GoodName"] = "TEXTVAR012_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR012_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR012_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR012_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR012_LABEL"] = $fdata;
//	TEXTVAR013
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "TEXTVAR013";
	$fdata["GoodName"] = "TEXTVAR013";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR013");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR013";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR013";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR013"] = $fdata;
//	TEXTVAR013_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "TEXTVAR013_LABEL";
	$fdata["GoodName"] = "TEXTVAR013_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR013_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR013_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR013_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR013_LABEL"] = $fdata;
//	TEXTVAR014
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "TEXTVAR014";
	$fdata["GoodName"] = "TEXTVAR014";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR014");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR014";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR014";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR014"] = $fdata;
//	TEXTVAR014_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "TEXTVAR014_LABEL";
	$fdata["GoodName"] = "TEXTVAR014_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR014_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR014_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR014_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR014_LABEL"] = $fdata;
//	TEXTVAR015
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "TEXTVAR015";
	$fdata["GoodName"] = "TEXTVAR015";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR015");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR015";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR015";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR015"] = $fdata;
//	TEXTVAR015_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "TEXTVAR015_LABEL";
	$fdata["GoodName"] = "TEXTVAR015_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTVAR015_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTVAR015_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTVAR015_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTVAR015_LABEL"] = $fdata;
//	TEXTAREAVAR001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "TEXTAREAVAR001";
	$fdata["GoodName"] = "TEXTAREAVAR001";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR001");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR001";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR001"] = $fdata;
//	TEXTAREAVAR002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "TEXTAREAVAR002";
	$fdata["GoodName"] = "TEXTAREAVAR002";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR002");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR002";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR002";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR002"] = $fdata;
//	TEXTAREAVAR003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "TEXTAREAVAR003";
	$fdata["GoodName"] = "TEXTAREAVAR003";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR003");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR003";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR003";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR003"] = $fdata;
//	TEXTAREAVAR003_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "TEXTAREAVAR003_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR003_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR003_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR003_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR003_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR003_LABEL"] = $fdata;
//	TEXTAREAVAR004
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "TEXTAREAVAR004";
	$fdata["GoodName"] = "TEXTAREAVAR004";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR004");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR004";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR004";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR004"] = $fdata;
//	TEXTAREAVAR004_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "TEXTAREAVAR004_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR004_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR004_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR004_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR004_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR004_LABEL"] = $fdata;
//	TEXTAREAVAR005
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "TEXTAREAVAR005";
	$fdata["GoodName"] = "TEXTAREAVAR005";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR005");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR005";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR005";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR005"] = $fdata;
//	TEXTAREAVAR005_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "TEXTAREAVAR005_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR005_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR005_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR005_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR005_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR005_LABEL"] = $fdata;
//	TEXTAREAVAR006
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "TEXTAREAVAR006";
	$fdata["GoodName"] = "TEXTAREAVAR006";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR006");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR006";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR006";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR006"] = $fdata;
//	TEXTAREAVAR006_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "TEXTAREAVAR006_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR006_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TEXTAREAVAR006_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEXTAREAVAR006_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXTAREAVAR006_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TEXTAREAVAR006_LABEL"] = $fdata;
//	JPN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "JPN";
	$fdata["GoodName"] = "JPN";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","JPN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JPN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JPN";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["JPN"] = $fdata;
//	JPN_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "JPN_LABEL";
	$fdata["GoodName"] = "JPN_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","JPN_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JPN_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JPN_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["JPN_LABEL"] = $fdata;
//	TPL_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "TPL_PATH";
	$fdata["GoodName"] = "TPL_PATH";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TPL_PATH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TPL_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TPL_PATH";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TPL_PATH"] = $fdata;
//	TPL_PATH_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "TPL_PATH_LABEL";
	$fdata["GoodName"] = "TPL_PATH_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBEBLOG";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBEBLOG","TPL_PATH_LABEL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TPL_PATH_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TPL_PATH_LABEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_ECCUBEBLOG["TPL_PATH_LABEL"] = $fdata;


$tables_data["PMT_ECCUBEBLOG"]=&$tdataPMT_ECCUBEBLOG;
$field_labels["PMT_ECCUBEBLOG"] = &$fieldLabelsPMT_ECCUBEBLOG;
$fieldToolTips["PMT_ECCUBEBLOG"] = &$fieldToolTipsPMT_ECCUBEBLOG;
$placeHolders["PMT_ECCUBEBLOG"] = &$placeHoldersPMT_ECCUBEBLOG;
$page_titles["PMT_ECCUBEBLOG"] = &$pageTitlesPMT_ECCUBEBLOG;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_ECCUBEBLOG"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_ECCUBEBLOG"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_ECCUBEBLOG()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	BLOC_ID,  	BLOC_ID_LABEL,  	BLOC_NAME,  	BLOC_NAME_LABEL,  	APPLICATION,  	APPLICATION_LABEL,  	PROCESS,  	PROCESS_LABEL,  	CHECKBOXVAR001,  	DATETIMEVAR001,  	DATETIMEVAR001_LABEL,  	DATETIMEVAR002,  	DATETIMEVAR002_LABEL,  	DROPDOWNVAR001,  	DROPDOWNVAR002,  	DROPDOWNVAR003,  	DROPDOWNVAR003_LABEL,  	SATEI,  	SATEI_LABEL,  	TEXTVAR001,  	TEXTVAR001_LABEL,  	TEXTVAR004,  	TEXTVAR004_LABEL,  	TEXTVAR005,  	TEXTVAR006,  	TEXTVAR006_LABEL,  	TEXTVAR007,  	TEXTVAR007_LABEL,  	TEXTVAR008,  	TEXTVAR008_LABEL,  	TEXTVAR009,  	TEXTVAR009_LABEL,  	TEXTVAR010,  	TEXTVAR010_LABEL,  	TEXTVAR011,  	TEXTVAR011_LABEL,  	TEXTVAR012,  	TEXTVAR012_LABEL,  	TEXTVAR013,  	TEXTVAR013_LABEL,  	TEXTVAR014,  	TEXTVAR014_LABEL,  	TEXTVAR015,  	TEXTVAR015_LABEL,  	TEXTAREAVAR001,  	TEXTAREAVAR002,  	TEXTAREAVAR003,  	TEXTAREAVAR003_LABEL,  	TEXTAREAVAR004,  	TEXTAREAVAR004_LABEL,  	TEXTAREAVAR005,  	TEXTAREAVAR005_LABEL,  	TEXTAREAVAR006,  	TEXTAREAVAR006_LABEL,  	JPN,  	JPN_LABEL,  	TPL_PATH,  	TPL_PATH_LABEL";
$proto0["m_strFrom"] = "FROM PMT_ECCUBEBLOG";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BLOC_ID",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto12["m_sql"] = "BLOC_ID";
$proto12["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BLOC_ID_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto14["m_sql"] = "BLOC_ID_LABEL";
$proto14["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BLOC_NAME",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto16["m_sql"] = "BLOC_NAME";
$proto16["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "BLOC_NAME_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto18["m_sql"] = "BLOC_NAME_LABEL";
$proto18["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APPLICATION",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto20["m_sql"] = "APPLICATION";
$proto20["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APPLICATION_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto22["m_sql"] = "APPLICATION_LABEL";
$proto22["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PROCESS",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto24["m_sql"] = "PROCESS";
$proto24["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PROCESS_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto26["m_sql"] = "PROCESS_LABEL";
$proto26["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOXVAR001",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto28["m_sql"] = "CHECKBOXVAR001";
$proto28["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR001",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto30["m_sql"] = "DATETIMEVAR001";
$proto30["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR001_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto32["m_sql"] = "DATETIMEVAR001_LABEL";
$proto32["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR002",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto34["m_sql"] = "DATETIMEVAR002";
$proto34["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR002_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto36["m_sql"] = "DATETIMEVAR002_LABEL";
$proto36["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DROPDOWNVAR001",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto38["m_sql"] = "DROPDOWNVAR001";
$proto38["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DROPDOWNVAR002",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto40["m_sql"] = "DROPDOWNVAR002";
$proto40["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DROPDOWNVAR003",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto42["m_sql"] = "DROPDOWNVAR003";
$proto42["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DROPDOWNVAR003_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto44["m_sql"] = "DROPDOWNVAR003_LABEL";
$proto44["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SATEI",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto46["m_sql"] = "SATEI";
$proto46["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SATEI_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto48["m_sql"] = "SATEI_LABEL";
$proto48["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR001",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto50["m_sql"] = "TEXTVAR001";
$proto50["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR001_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto52["m_sql"] = "TEXTVAR001_LABEL";
$proto52["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR004",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto54["m_sql"] = "TEXTVAR004";
$proto54["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR004_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto56["m_sql"] = "TEXTVAR004_LABEL";
$proto56["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR005",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto58["m_sql"] = "TEXTVAR005";
$proto58["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR006",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto60["m_sql"] = "TEXTVAR006";
$proto60["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR006_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto62["m_sql"] = "TEXTVAR006_LABEL";
$proto62["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR007",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto64["m_sql"] = "TEXTVAR007";
$proto64["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR007_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto66["m_sql"] = "TEXTVAR007_LABEL";
$proto66["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR008",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto68["m_sql"] = "TEXTVAR008";
$proto68["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR008_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto70["m_sql"] = "TEXTVAR008_LABEL";
$proto70["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR009",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto72["m_sql"] = "TEXTVAR009";
$proto72["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR009_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto74["m_sql"] = "TEXTVAR009_LABEL";
$proto74["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR010",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto76["m_sql"] = "TEXTVAR010";
$proto76["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR010_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto78["m_sql"] = "TEXTVAR010_LABEL";
$proto78["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR011",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto80["m_sql"] = "TEXTVAR011";
$proto80["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR011_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto82["m_sql"] = "TEXTVAR011_LABEL";
$proto82["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR012",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto84["m_sql"] = "TEXTVAR012";
$proto84["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR012_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto86["m_sql"] = "TEXTVAR012_LABEL";
$proto86["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR013",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto88["m_sql"] = "TEXTVAR013";
$proto88["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR013_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto90["m_sql"] = "TEXTVAR013_LABEL";
$proto90["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR014",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto92["m_sql"] = "TEXTVAR014";
$proto92["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR014_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto94["m_sql"] = "TEXTVAR014_LABEL";
$proto94["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR015",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto96["m_sql"] = "TEXTVAR015";
$proto96["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR015_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto98["m_sql"] = "TEXTVAR015_LABEL";
$proto98["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR001",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto100["m_sql"] = "TEXTAREAVAR001";
$proto100["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR002",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto102["m_sql"] = "TEXTAREAVAR002";
$proto102["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR003",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto104["m_sql"] = "TEXTAREAVAR003";
$proto104["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR003_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto106["m_sql"] = "TEXTAREAVAR003_LABEL";
$proto106["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR004",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto108["m_sql"] = "TEXTAREAVAR004";
$proto108["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR004_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto110["m_sql"] = "TEXTAREAVAR004_LABEL";
$proto110["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR005",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto112["m_sql"] = "TEXTAREAVAR005";
$proto112["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR005_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto114["m_sql"] = "TEXTAREAVAR005_LABEL";
$proto114["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR006",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto116["m_sql"] = "TEXTAREAVAR006";
$proto116["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR006_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto118["m_sql"] = "TEXTAREAVAR006_LABEL";
$proto118["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "JPN",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto120["m_sql"] = "JPN";
$proto120["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "JPN_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto122["m_sql"] = "JPN_LABEL";
$proto122["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "TPL_PATH",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto124["m_sql"] = "TPL_PATH";
$proto124["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "TPL_PATH_LABEL",
	"m_strTable" => "PMT_ECCUBEBLOG",
	"m_srcTableName" => "PMT_ECCUBEBLOG"
));

$proto126["m_sql"] = "TPL_PATH_LABEL";
$proto126["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto128=array();
$proto128["m_link"] = "SQLL_MAIN";
			$proto129=array();
$proto129["m_strName"] = "PMT_ECCUBEBLOG";
$proto129["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto129["m_columns"] = array();
$proto129["m_columns"][] = "APP_UID";
$proto129["m_columns"][] = "APP_NUMBER";
$proto129["m_columns"][] = "APP_STATUS";
$proto129["m_columns"][] = "BLOC_ID";
$proto129["m_columns"][] = "BLOC_ID_LABEL";
$proto129["m_columns"][] = "BLOC_NAME";
$proto129["m_columns"][] = "BLOC_NAME_LABEL";
$proto129["m_columns"][] = "APPLICATION";
$proto129["m_columns"][] = "APPLICATION_LABEL";
$proto129["m_columns"][] = "PROCESS";
$proto129["m_columns"][] = "PROCESS_LABEL";
$proto129["m_columns"][] = "CHECKBOXVAR001";
$proto129["m_columns"][] = "DATETIMEVAR001";
$proto129["m_columns"][] = "DATETIMEVAR001_LABEL";
$proto129["m_columns"][] = "DATETIMEVAR002";
$proto129["m_columns"][] = "DATETIMEVAR002_LABEL";
$proto129["m_columns"][] = "DROPDOWNVAR001";
$proto129["m_columns"][] = "DROPDOWNVAR002";
$proto129["m_columns"][] = "DROPDOWNVAR003";
$proto129["m_columns"][] = "DROPDOWNVAR003_LABEL";
$proto129["m_columns"][] = "SATEI";
$proto129["m_columns"][] = "SATEI_LABEL";
$proto129["m_columns"][] = "TEXTVAR001";
$proto129["m_columns"][] = "TEXTVAR001_LABEL";
$proto129["m_columns"][] = "TEXTVAR004";
$proto129["m_columns"][] = "TEXTVAR004_LABEL";
$proto129["m_columns"][] = "TEXTVAR005";
$proto129["m_columns"][] = "TEXTVAR006";
$proto129["m_columns"][] = "TEXTVAR006_LABEL";
$proto129["m_columns"][] = "TEXTVAR007";
$proto129["m_columns"][] = "TEXTVAR007_LABEL";
$proto129["m_columns"][] = "TEXTVAR008";
$proto129["m_columns"][] = "TEXTVAR008_LABEL";
$proto129["m_columns"][] = "TEXTVAR009";
$proto129["m_columns"][] = "TEXTVAR009_LABEL";
$proto129["m_columns"][] = "TEXTVAR010";
$proto129["m_columns"][] = "TEXTVAR010_LABEL";
$proto129["m_columns"][] = "TEXTVAR011";
$proto129["m_columns"][] = "TEXTVAR011_LABEL";
$proto129["m_columns"][] = "TEXTVAR012";
$proto129["m_columns"][] = "TEXTVAR012_LABEL";
$proto129["m_columns"][] = "TEXTVAR013";
$proto129["m_columns"][] = "TEXTVAR013_LABEL";
$proto129["m_columns"][] = "TEXTVAR014";
$proto129["m_columns"][] = "TEXTVAR014_LABEL";
$proto129["m_columns"][] = "TEXTVAR015";
$proto129["m_columns"][] = "TEXTVAR015_LABEL";
$proto129["m_columns"][] = "TEXTAREAVAR001";
$proto129["m_columns"][] = "TEXTAREAVAR002";
$proto129["m_columns"][] = "TEXTAREAVAR003";
$proto129["m_columns"][] = "TEXTAREAVAR003_LABEL";
$proto129["m_columns"][] = "TEXTAREAVAR004";
$proto129["m_columns"][] = "TEXTAREAVAR004_LABEL";
$proto129["m_columns"][] = "TEXTAREAVAR005";
$proto129["m_columns"][] = "TEXTAREAVAR005_LABEL";
$proto129["m_columns"][] = "TEXTAREAVAR006";
$proto129["m_columns"][] = "TEXTAREAVAR006_LABEL";
$proto129["m_columns"][] = "JPN";
$proto129["m_columns"][] = "JPN_LABEL";
$proto129["m_columns"][] = "TPL_PATH";
$proto129["m_columns"][] = "TPL_PATH_LABEL";
$obj = new SQLTable($proto129);

$proto128["m_table"] = $obj;
$proto128["m_sql"] = "PMT_ECCUBEBLOG";
$proto128["m_alias"] = "";
$proto128["m_srcTableName"] = "PMT_ECCUBEBLOG";
$proto130=array();
$proto130["m_sql"] = "";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

$proto128["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto128);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_ECCUBEBLOG";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_ECCUBEBLOG = createSqlQuery_PMT_ECCUBEBLOG();


	
						;

																																																													

$tdataPMT_ECCUBEBLOG[".sqlquery"] = $queryData_PMT_ECCUBEBLOG;

$tableEvents["PMT_ECCUBEBLOG"] = new eventsBase;
$tdataPMT_ECCUBEBLOG[".hasEvents"] = false;

?>
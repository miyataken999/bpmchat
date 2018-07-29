<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_ECCUBE = array();
	$tdataPMT_ECCUBE[".truncateText"] = true;
	$tdataPMT_ECCUBE[".NumberOfChars"] = 20;
	$tdataPMT_ECCUBE[".ShortName"] = "PMT_ECCUBE";
	$tdataPMT_ECCUBE[".OwnerID"] = "";
	$tdataPMT_ECCUBE[".OriginalTable"] = "PMT_ECCUBE";

//	field labels
$fieldLabelsPMT_ECCUBE = array();
$fieldToolTipsPMT_ECCUBE = array();
$pageTitlesPMT_ECCUBE = array();
$placeHoldersPMT_ECCUBE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_ECCUBE["Japanese"] = array();
	$fieldToolTipsPMT_ECCUBE["Japanese"] = array();
	$placeHoldersPMT_ECCUBE["Japanese"] = array();
	$pageTitlesPMT_ECCUBE["Japanese"] = array();
	$fieldLabelsPMT_ECCUBE["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["APPLICATION"] = "APPLICATION";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["APPLICATION"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["APPLICATION"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["APPLICATION_LABEL"] = "APPLICATION LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["APPLICATION_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["APPLICATION_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["ECCTEXTAREAVAR007"] = "ECCTEXTAREAVAR007";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["ECCTEXTAREAVAR007"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["ECCTEXTAREAVAR007"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["JPN"] = "JPN";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["JPN"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["JPN"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["JPN_LABEL"] = "JPN LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["JPN_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["JPN_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["PROCESS"] = "PROCESS";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["PROCESS"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["PROCESS"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["PROCESS_LABEL"] = "PROCESS LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["PROCESS_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["PROCESS_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["DATETIMEVAR001"] = "DATETIMEVAR001";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["DATETIMEVAR001"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["DATETIMEVAR001"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["DATETIMEVAR001_LABEL"] = "DATETIMEVAR001 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["DATETIMEVAR001_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["DATETIMEVAR001_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["DATETIMEVAR002"] = "DATETIMEVAR002";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["DATETIMEVAR002"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["DATETIMEVAR002"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["DATETIMEVAR002_LABEL"] = "DATETIMEVAR002 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["DATETIMEVAR002_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["DATETIMEVAR002_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["SATEI"] = "SATEI";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["SATEI"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["SATEI"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["SATEI_LABEL"] = "SATEI LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["SATEI_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["SATEI_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR004"] = "TEXTVAR004";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR004"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR004"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR004_LABEL"] = "TEXTVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR009"] = "TEXTVAR009";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR009"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR009"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR009_LABEL"] = "TEXTVAR009 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR009_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR009_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR011"] = "TEXTVAR011";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR011"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR011"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR011_LABEL"] = "TEXTVAR011 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR011_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR011_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR012"] = "TEXTVAR012";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR012"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR012"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR012_LABEL"] = "TEXTVAR012 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR012_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR012_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR013"] = "TEXTVAR013";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR013"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR013"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTVAR013_LABEL"] = "TEXTVAR013 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTVAR013_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTVAR013_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR003"] = "TEXTAREAVAR003";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR003"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR003"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR003_LABEL"] = "TEXTAREAVAR003 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR003_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR003_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR004"] = "TEXTAREAVAR004";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR004"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR004"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR004_LABEL"] = "TEXTAREAVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR005"] = "TEXTAREAVAR005";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR005"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR005"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR005_LABEL"] = "TEXTAREAVAR005 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR005_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR005_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR006"] = "TEXTAREAVAR006";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR006"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR006"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["TEXTAREAVAR006_LABEL"] = "TEXTAREAVAR006 LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["TEXTAREAVAR006_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["TEXTAREAVAR006_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["INDEX_LABEL"] = "INDEX LABEL";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["INDEX_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["INDEX_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["Japanese"]["INDEXA"] = "INDEXA";
	$fieldToolTipsPMT_ECCUBE["Japanese"]["INDEXA"] = "";
	$placeHoldersPMT_ECCUBE["Japanese"]["INDEXA"] = "";
	if (count($fieldToolTipsPMT_ECCUBE["Japanese"]))
		$tdataPMT_ECCUBE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_ECCUBE["English"] = array();
	$fieldToolTipsPMT_ECCUBE["English"] = array();
	$placeHoldersPMT_ECCUBE["English"] = array();
	$pageTitlesPMT_ECCUBE["English"] = array();
	$fieldLabelsPMT_ECCUBE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_ECCUBE["English"]["APP_UID"] = "";
	$placeHoldersPMT_ECCUBE["English"]["APP_UID"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_ECCUBE["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_ECCUBE["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_ECCUBE["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_ECCUBE["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["APPLICATION"] = "APPLICATION";
	$fieldToolTipsPMT_ECCUBE["English"]["APPLICATION"] = "";
	$placeHoldersPMT_ECCUBE["English"]["APPLICATION"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["APPLICATION_LABEL"] = "APPLICATION LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["APPLICATION_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["APPLICATION_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["ECCTEXTAREAVAR007"] = "ECCTEXTAREAVAR007";
	$fieldToolTipsPMT_ECCUBE["English"]["ECCTEXTAREAVAR007"] = "";
	$placeHoldersPMT_ECCUBE["English"]["ECCTEXTAREAVAR007"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["JPN"] = "JPN";
	$fieldToolTipsPMT_ECCUBE["English"]["JPN"] = "";
	$placeHoldersPMT_ECCUBE["English"]["JPN"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["JPN_LABEL"] = "JPN LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["JPN_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["JPN_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["PROCESS"] = "PROCESS";
	$fieldToolTipsPMT_ECCUBE["English"]["PROCESS"] = "";
	$placeHoldersPMT_ECCUBE["English"]["PROCESS"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["PROCESS_LABEL"] = "PROCESS LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["PROCESS_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["PROCESS_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["DATETIMEVAR001"] = "DATETIMEVAR001";
	$fieldToolTipsPMT_ECCUBE["English"]["DATETIMEVAR001"] = "";
	$placeHoldersPMT_ECCUBE["English"]["DATETIMEVAR001"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["DATETIMEVAR001_LABEL"] = "DATETIMEVAR001 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["DATETIMEVAR001_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["DATETIMEVAR001_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["DATETIMEVAR002"] = "DATETIMEVAR002";
	$fieldToolTipsPMT_ECCUBE["English"]["DATETIMEVAR002"] = "";
	$placeHoldersPMT_ECCUBE["English"]["DATETIMEVAR002"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["DATETIMEVAR002_LABEL"] = "DATETIMEVAR002 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["DATETIMEVAR002_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["DATETIMEVAR002_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["SATEI"] = "SATEI";
	$fieldToolTipsPMT_ECCUBE["English"]["SATEI"] = "";
	$placeHoldersPMT_ECCUBE["English"]["SATEI"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["SATEI_LABEL"] = "SATEI LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["SATEI_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["SATEI_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR004"] = "TEXTVAR004";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR004"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR004"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR004_LABEL"] = "TEXTVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR009"] = "TEXTVAR009";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR009"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR009"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR009_LABEL"] = "TEXTVAR009 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR009_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR009_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR011"] = "TEXTVAR011";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR011"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR011"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR011_LABEL"] = "TEXTVAR011 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR011_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR011_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR012"] = "TEXTVAR012";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR012"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR012"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR012_LABEL"] = "TEXTVAR012 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR012_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR012_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR013"] = "TEXTVAR013";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR013"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR013"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTVAR013_LABEL"] = "TEXTVAR013 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTVAR013_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTVAR013_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR003"] = "TEXTAREAVAR003";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR003"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR003"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR003_LABEL"] = "TEXTAREAVAR003 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR003_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR003_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR004"] = "TEXTAREAVAR004";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR004"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR004"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR004_LABEL"] = "TEXTAREAVAR004 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR004_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR004_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR005"] = "TEXTAREAVAR005";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR005"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR005"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR005_LABEL"] = "TEXTAREAVAR005 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR005_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR005_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR006"] = "TEXTAREAVAR006";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR006"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR006"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["TEXTAREAVAR006_LABEL"] = "TEXTAREAVAR006 LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["TEXTAREAVAR006_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["TEXTAREAVAR006_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["INDEX_LABEL"] = "INDEX LABEL";
	$fieldToolTipsPMT_ECCUBE["English"]["INDEX_LABEL"] = "";
	$placeHoldersPMT_ECCUBE["English"]["INDEX_LABEL"] = "";
	$fieldLabelsPMT_ECCUBE["English"]["INDEXA"] = "INDEXA";
	$fieldToolTipsPMT_ECCUBE["English"]["INDEXA"] = "";
	$placeHoldersPMT_ECCUBE["English"]["INDEXA"] = "";
	if (count($fieldToolTipsPMT_ECCUBE["English"]))
		$tdataPMT_ECCUBE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_ECCUBE[""] = array();
	$fieldToolTipsPMT_ECCUBE[""] = array();
	$placeHoldersPMT_ECCUBE[""] = array();
	$pageTitlesPMT_ECCUBE[""] = array();
	if (count($fieldToolTipsPMT_ECCUBE[""]))
		$tdataPMT_ECCUBE[".isUseToolTips"] = true;
}


	$tdataPMT_ECCUBE[".NCSearch"] = true;



$tdataPMT_ECCUBE[".shortTableName"] = "PMT_ECCUBE";
$tdataPMT_ECCUBE[".nSecOptions"] = 0;
$tdataPMT_ECCUBE[".recsPerRowPrint"] = 1;
$tdataPMT_ECCUBE[".mainTableOwnerID"] = "";
$tdataPMT_ECCUBE[".moveNext"] = 0;
$tdataPMT_ECCUBE[".entityType"] = 0;

$tdataPMT_ECCUBE[".strOriginalTableName"] = "PMT_ECCUBE";

	



$tdataPMT_ECCUBE[".showAddInPopup"] = false;

$tdataPMT_ECCUBE[".showEditInPopup"] = false;

$tdataPMT_ECCUBE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_ECCUBE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_ECCUBE[".fieldsForRegister"] = array();
	
$tdataPMT_ECCUBE[".listAjax"] = false;

	$tdataPMT_ECCUBE[".audit"] = true;

	$tdataPMT_ECCUBE[".locking"] = false;

$tdataPMT_ECCUBE[".edit"] = true;
$tdataPMT_ECCUBE[".afterEditAction"] = 1;
$tdataPMT_ECCUBE[".closePopupAfterEdit"] = 1;
$tdataPMT_ECCUBE[".afterEditActionDetTable"] = "";

$tdataPMT_ECCUBE[".add"] = true;
$tdataPMT_ECCUBE[".afterAddAction"] = 1;
$tdataPMT_ECCUBE[".closePopupAfterAdd"] = 1;
$tdataPMT_ECCUBE[".afterAddActionDetTable"] = "";

$tdataPMT_ECCUBE[".list"] = true;



$tdataPMT_ECCUBE[".reorderRecordsByHeader"] = true;



$tdataPMT_ECCUBE[".inlineAdd"] = true;
$tdataPMT_ECCUBE[".view"] = true;

$tdataPMT_ECCUBE[".import"] = true;

$tdataPMT_ECCUBE[".exportTo"] = true;

$tdataPMT_ECCUBE[".printFriendly"] = true;

$tdataPMT_ECCUBE[".delete"] = true;

$tdataPMT_ECCUBE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_ECCUBE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_ECCUBE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_ECCUBE[".searchSaving"] = false;
//

$tdataPMT_ECCUBE[".showSearchPanel"] = true;
		$tdataPMT_ECCUBE[".flexibleSearch"] = true;

$tdataPMT_ECCUBE[".isUseAjaxSuggest"] = true;

$tdataPMT_ECCUBE[".rowHighlite"] = true;



																

$tdataPMT_ECCUBE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_ECCUBE[".buttonsAdded"] = false;

$tdataPMT_ECCUBE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_ECCUBE[".isUseTimeForSearch"] = false;



$tdataPMT_ECCUBE[".badgeColor"] = "cfae83";


$tdataPMT_ECCUBE[".allSearchFields"] = array();
$tdataPMT_ECCUBE[".filterFields"] = array();
$tdataPMT_ECCUBE[".requiredSearchFields"] = array();

$tdataPMT_ECCUBE[".allSearchFields"][] = "APP_UID";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "APPLICATION";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "APPLICATION_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "ECCTEXTAREAVAR007";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "JPN";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "JPN_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "PROCESS";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "PROCESS_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "DATETIMEVAR001";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "DATETIMEVAR001_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "DATETIMEVAR002";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "DATETIMEVAR002_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "SATEI";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "SATEI_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR004";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR004_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR009";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR009_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR011";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR011_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR012";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR012_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR013";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTVAR013_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR003";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR003_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR004";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR004_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR005";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR005_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR006";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "TEXTAREAVAR006_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "INDEX_LABEL";
	$tdataPMT_ECCUBE[".allSearchFields"][] = "INDEXA";
	

$tdataPMT_ECCUBE[".googleLikeFields"] = array();
$tdataPMT_ECCUBE[".googleLikeFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "JPN";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "SATEI";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".googleLikeFields"][] = "INDEXA";


$tdataPMT_ECCUBE[".advSearchFields"] = array();
$tdataPMT_ECCUBE[".advSearchFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".advSearchFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".advSearchFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".advSearchFields"][] = "JPN";
$tdataPMT_ECCUBE[".advSearchFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".advSearchFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".advSearchFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".advSearchFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "SATEI";
$tdataPMT_ECCUBE[".advSearchFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".advSearchFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".advSearchFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".tableType"] = "list";

$tdataPMT_ECCUBE[".printerPageOrientation"] = 0;
$tdataPMT_ECCUBE[".nPrinterPageScale"] = 100;

$tdataPMT_ECCUBE[".nPrinterSplitRecords"] = 40;

$tdataPMT_ECCUBE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_ECCUBE[".geocodingEnabled"] = false;





$tdataPMT_ECCUBE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_ECCUBE[".pageSize"] = 20;

$tdataPMT_ECCUBE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_ECCUBE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_ECCUBE[".orderindexes"] = array();

$tdataPMT_ECCUBE[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	APPLICATION,  	APPLICATION_LABEL,  	ECCTEXTAREAVAR007,  	JPN,  	JPN_LABEL,  	PROCESS,  	PROCESS_LABEL,  	DATETIMEVAR001,  	DATETIMEVAR001_LABEL,  	DATETIMEVAR002,  	DATETIMEVAR002_LABEL,  	SATEI,  	SATEI_LABEL,  	TEXTVAR004,  	TEXTVAR004_LABEL,  	TEXTVAR009,  	TEXTVAR009_LABEL,  	TEXTVAR011,  	TEXTVAR011_LABEL,  	TEXTVAR012,  	TEXTVAR012_LABEL,  	TEXTVAR013,  	TEXTVAR013_LABEL,  	TEXTAREAVAR003,  	TEXTAREAVAR003_LABEL,  	TEXTAREAVAR004,  	TEXTAREAVAR004_LABEL,  	TEXTAREAVAR005,  	TEXTAREAVAR005_LABEL,  	TEXTAREAVAR006,  	TEXTAREAVAR006_LABEL,  	INDEX_LABEL,  	INDEXA";
$tdataPMT_ECCUBE[".sqlFrom"] = "FROM PMT_ECCUBE";
$tdataPMT_ECCUBE[".sqlWhereExpr"] = "";
$tdataPMT_ECCUBE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_ECCUBE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_ECCUBE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_ECCUBE[".highlightSearchResults"] = true;

$tableKeysPMT_ECCUBE = array();
$tableKeysPMT_ECCUBE[] = "APP_UID";
$tdataPMT_ECCUBE[".Keys"] = $tableKeysPMT_ECCUBE;

$tdataPMT_ECCUBE[".listFields"] = array();
$tdataPMT_ECCUBE[".listFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".listFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".listFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".listFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".listFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".listFields"][] = "JPN";
$tdataPMT_ECCUBE[".listFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".listFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".listFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".listFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "SATEI";
$tdataPMT_ECCUBE[".listFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".listFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".listFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".hideMobileList"] = array();


$tdataPMT_ECCUBE[".viewFields"] = array();
$tdataPMT_ECCUBE[".viewFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".viewFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".viewFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".viewFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".viewFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".viewFields"][] = "JPN";
$tdataPMT_ECCUBE[".viewFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".viewFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".viewFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".viewFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "SATEI";
$tdataPMT_ECCUBE[".viewFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".viewFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".viewFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".addFields"] = array();
$tdataPMT_ECCUBE[".addFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".addFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".addFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".addFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".addFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".addFields"][] = "JPN";
$tdataPMT_ECCUBE[".addFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".addFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".addFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".addFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "SATEI";
$tdataPMT_ECCUBE[".addFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".addFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".addFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".masterListFields"] = array();
$tdataPMT_ECCUBE[".masterListFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".masterListFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".masterListFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".masterListFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".masterListFields"][] = "JPN";
$tdataPMT_ECCUBE[".masterListFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".masterListFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".masterListFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".masterListFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "SATEI";
$tdataPMT_ECCUBE[".masterListFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".masterListFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".masterListFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".inlineAddFields"] = array();
$tdataPMT_ECCUBE[".inlineAddFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "JPN";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "SATEI";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".inlineAddFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".editFields"] = array();
$tdataPMT_ECCUBE[".editFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".editFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".editFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".editFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".editFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".editFields"][] = "JPN";
$tdataPMT_ECCUBE[".editFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".editFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".editFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".editFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "SATEI";
$tdataPMT_ECCUBE[".editFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".editFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".editFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".inlineEditFields"] = array();
$tdataPMT_ECCUBE[".inlineEditFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "JPN";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "SATEI";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".inlineEditFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".updateSelectedFields"] = array();
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "JPN";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "SATEI";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".updateSelectedFields"][] = "INDEXA";


$tdataPMT_ECCUBE[".exportFields"] = array();
$tdataPMT_ECCUBE[".exportFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".exportFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".exportFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".exportFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".exportFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".exportFields"][] = "JPN";
$tdataPMT_ECCUBE[".exportFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".exportFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".exportFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".exportFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "SATEI";
$tdataPMT_ECCUBE[".exportFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".exportFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".exportFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".importFields"] = array();
$tdataPMT_ECCUBE[".importFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".importFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".importFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".importFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".importFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".importFields"][] = "JPN";
$tdataPMT_ECCUBE[".importFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".importFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".importFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".importFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "SATEI";
$tdataPMT_ECCUBE[".importFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".importFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".importFields"][] = "INDEXA";

$tdataPMT_ECCUBE[".printFields"] = array();
$tdataPMT_ECCUBE[".printFields"][] = "APP_UID";
$tdataPMT_ECCUBE[".printFields"][] = "APP_NUMBER";
$tdataPMT_ECCUBE[".printFields"][] = "APP_STATUS";
$tdataPMT_ECCUBE[".printFields"][] = "APPLICATION";
$tdataPMT_ECCUBE[".printFields"][] = "APPLICATION_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "ECCTEXTAREAVAR007";
$tdataPMT_ECCUBE[".printFields"][] = "JPN";
$tdataPMT_ECCUBE[".printFields"][] = "JPN_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "PROCESS";
$tdataPMT_ECCUBE[".printFields"][] = "PROCESS_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "DATETIMEVAR001";
$tdataPMT_ECCUBE[".printFields"][] = "DATETIMEVAR001_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "DATETIMEVAR002";
$tdataPMT_ECCUBE[".printFields"][] = "DATETIMEVAR002_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "SATEI";
$tdataPMT_ECCUBE[".printFields"][] = "SATEI_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR004";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR004_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR009";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR009_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR011";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR011_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR012";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR012_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR013";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTVAR013_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR003";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR003_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR004";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR004_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR005";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR005_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR006";
$tdataPMT_ECCUBE[".printFields"][] = "TEXTAREAVAR006_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "INDEX_LABEL";
$tdataPMT_ECCUBE[".printFields"][] = "INDEXA";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","APP_UID");
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




	$tdataPMT_ECCUBE["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","APP_NUMBER");
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




	$tdataPMT_ECCUBE["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","APP_STATUS");
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




	$tdataPMT_ECCUBE["APP_STATUS"] = $fdata;
//	APPLICATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APPLICATION";
	$fdata["GoodName"] = "APPLICATION";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","APPLICATION");
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




	$tdataPMT_ECCUBE["APPLICATION"] = $fdata;
//	APPLICATION_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APPLICATION_LABEL";
	$fdata["GoodName"] = "APPLICATION_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","APPLICATION_LABEL");
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




	$tdataPMT_ECCUBE["APPLICATION_LABEL"] = $fdata;
//	ECCTEXTAREAVAR007
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ECCTEXTAREAVAR007";
	$fdata["GoodName"] = "ECCTEXTAREAVAR007";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","ECCTEXTAREAVAR007");
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

		$fdata["strField"] = "ECCTEXTAREAVAR007";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ECCTEXTAREAVAR007";

	
	
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




	$tdataPMT_ECCUBE["ECCTEXTAREAVAR007"] = $fdata;
//	JPN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "JPN";
	$fdata["GoodName"] = "JPN";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","JPN");
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




	$tdataPMT_ECCUBE["JPN"] = $fdata;
//	JPN_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "JPN_LABEL";
	$fdata["GoodName"] = "JPN_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","JPN_LABEL");
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




	$tdataPMT_ECCUBE["JPN_LABEL"] = $fdata;
//	PROCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PROCESS";
	$fdata["GoodName"] = "PROCESS";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","PROCESS");
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




	$tdataPMT_ECCUBE["PROCESS"] = $fdata;
//	PROCESS_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PROCESS_LABEL";
	$fdata["GoodName"] = "PROCESS_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","PROCESS_LABEL");
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




	$tdataPMT_ECCUBE["PROCESS_LABEL"] = $fdata;
//	DATETIMEVAR001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DATETIMEVAR001";
	$fdata["GoodName"] = "DATETIMEVAR001";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","DATETIMEVAR001");
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




	$tdataPMT_ECCUBE["DATETIMEVAR001"] = $fdata;
//	DATETIMEVAR001_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DATETIMEVAR001_LABEL";
	$fdata["GoodName"] = "DATETIMEVAR001_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","DATETIMEVAR001_LABEL");
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




	$tdataPMT_ECCUBE["DATETIMEVAR001_LABEL"] = $fdata;
//	DATETIMEVAR002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DATETIMEVAR002";
	$fdata["GoodName"] = "DATETIMEVAR002";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","DATETIMEVAR002");
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




	$tdataPMT_ECCUBE["DATETIMEVAR002"] = $fdata;
//	DATETIMEVAR002_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DATETIMEVAR002_LABEL";
	$fdata["GoodName"] = "DATETIMEVAR002_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","DATETIMEVAR002_LABEL");
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




	$tdataPMT_ECCUBE["DATETIMEVAR002_LABEL"] = $fdata;
//	SATEI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SATEI";
	$fdata["GoodName"] = "SATEI";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","SATEI");
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




	$tdataPMT_ECCUBE["SATEI"] = $fdata;
//	SATEI_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SATEI_LABEL";
	$fdata["GoodName"] = "SATEI_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","SATEI_LABEL");
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




	$tdataPMT_ECCUBE["SATEI_LABEL"] = $fdata;
//	TEXTVAR004
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TEXTVAR004";
	$fdata["GoodName"] = "TEXTVAR004";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR004");
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




	$tdataPMT_ECCUBE["TEXTVAR004"] = $fdata;
//	TEXTVAR004_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TEXTVAR004_LABEL";
	$fdata["GoodName"] = "TEXTVAR004_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR004_LABEL");
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




	$tdataPMT_ECCUBE["TEXTVAR004_LABEL"] = $fdata;
//	TEXTVAR009
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TEXTVAR009";
	$fdata["GoodName"] = "TEXTVAR009";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR009");
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




	$tdataPMT_ECCUBE["TEXTVAR009"] = $fdata;
//	TEXTVAR009_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "TEXTVAR009_LABEL";
	$fdata["GoodName"] = "TEXTVAR009_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR009_LABEL");
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




	$tdataPMT_ECCUBE["TEXTVAR009_LABEL"] = $fdata;
//	TEXTVAR011
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TEXTVAR011";
	$fdata["GoodName"] = "TEXTVAR011";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR011");
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




	$tdataPMT_ECCUBE["TEXTVAR011"] = $fdata;
//	TEXTVAR011_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TEXTVAR011_LABEL";
	$fdata["GoodName"] = "TEXTVAR011_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR011_LABEL");
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




	$tdataPMT_ECCUBE["TEXTVAR011_LABEL"] = $fdata;
//	TEXTVAR012
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "TEXTVAR012";
	$fdata["GoodName"] = "TEXTVAR012";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR012");
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




	$tdataPMT_ECCUBE["TEXTVAR012"] = $fdata;
//	TEXTVAR012_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TEXTVAR012_LABEL";
	$fdata["GoodName"] = "TEXTVAR012_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR012_LABEL");
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




	$tdataPMT_ECCUBE["TEXTVAR012_LABEL"] = $fdata;
//	TEXTVAR013
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TEXTVAR013";
	$fdata["GoodName"] = "TEXTVAR013";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR013");
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




	$tdataPMT_ECCUBE["TEXTVAR013"] = $fdata;
//	TEXTVAR013_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "TEXTVAR013_LABEL";
	$fdata["GoodName"] = "TEXTVAR013_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTVAR013_LABEL");
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




	$tdataPMT_ECCUBE["TEXTVAR013_LABEL"] = $fdata;
//	TEXTAREAVAR003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TEXTAREAVAR003";
	$fdata["GoodName"] = "TEXTAREAVAR003";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR003");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR003"] = $fdata;
//	TEXTAREAVAR003_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "TEXTAREAVAR003_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR003_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR003_LABEL");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR003_LABEL"] = $fdata;
//	TEXTAREAVAR004
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TEXTAREAVAR004";
	$fdata["GoodName"] = "TEXTAREAVAR004";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR004");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR004"] = $fdata;
//	TEXTAREAVAR004_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "TEXTAREAVAR004_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR004_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR004_LABEL");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR004_LABEL"] = $fdata;
//	TEXTAREAVAR005
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TEXTAREAVAR005";
	$fdata["GoodName"] = "TEXTAREAVAR005";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR005");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR005"] = $fdata;
//	TEXTAREAVAR005_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "TEXTAREAVAR005_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR005_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR005_LABEL");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR005_LABEL"] = $fdata;
//	TEXTAREAVAR006
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "TEXTAREAVAR006";
	$fdata["GoodName"] = "TEXTAREAVAR006";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR006");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR006"] = $fdata;
//	TEXTAREAVAR006_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "TEXTAREAVAR006_LABEL";
	$fdata["GoodName"] = "TEXTAREAVAR006_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","TEXTAREAVAR006_LABEL");
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




	$tdataPMT_ECCUBE["TEXTAREAVAR006_LABEL"] = $fdata;
//	INDEX_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "INDEX_LABEL";
	$fdata["GoodName"] = "INDEX_LABEL";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","INDEX_LABEL");
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

		$fdata["strField"] = "INDEX_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INDEX_LABEL";

	
	
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




	$tdataPMT_ECCUBE["INDEX_LABEL"] = $fdata;
//	INDEXA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "INDEXA";
	$fdata["GoodName"] = "INDEXA";
	$fdata["ownerTable"] = "PMT_ECCUBE";
	$fdata["Label"] = GetFieldLabel("PMT_ECCUBE","INDEXA");
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

		$fdata["strField"] = "INDEXA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INDEXA";

	
	
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




	$tdataPMT_ECCUBE["INDEXA"] = $fdata;


$tables_data["PMT_ECCUBE"]=&$tdataPMT_ECCUBE;
$field_labels["PMT_ECCUBE"] = &$fieldLabelsPMT_ECCUBE;
$fieldToolTips["PMT_ECCUBE"] = &$fieldToolTipsPMT_ECCUBE;
$placeHolders["PMT_ECCUBE"] = &$placeHoldersPMT_ECCUBE;
$page_titles["PMT_ECCUBE"] = &$pageTitlesPMT_ECCUBE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_ECCUBE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_ECCUBE"] = array();


	
				$strOriginalDetailsTable="APPLICATION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="APPLICATION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "APPLICATION";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PMT_ECCUBE"][0] = $masterParams;
				$masterTablesData["PMT_ECCUBE"][0]["masterKeys"] = array();
	$masterTablesData["PMT_ECCUBE"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["PMT_ECCUBE"][0]["detailKeys"] = array();
	$masterTablesData["PMT_ECCUBE"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_ECCUBE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	APPLICATION,  	APPLICATION_LABEL,  	ECCTEXTAREAVAR007,  	JPN,  	JPN_LABEL,  	PROCESS,  	PROCESS_LABEL,  	DATETIMEVAR001,  	DATETIMEVAR001_LABEL,  	DATETIMEVAR002,  	DATETIMEVAR002_LABEL,  	SATEI,  	SATEI_LABEL,  	TEXTVAR004,  	TEXTVAR004_LABEL,  	TEXTVAR009,  	TEXTVAR009_LABEL,  	TEXTVAR011,  	TEXTVAR011_LABEL,  	TEXTVAR012,  	TEXTVAR012_LABEL,  	TEXTVAR013,  	TEXTVAR013_LABEL,  	TEXTAREAVAR003,  	TEXTAREAVAR003_LABEL,  	TEXTAREAVAR004,  	TEXTAREAVAR004_LABEL,  	TEXTAREAVAR005,  	TEXTAREAVAR005_LABEL,  	TEXTAREAVAR006,  	TEXTAREAVAR006_LABEL,  	INDEX_LABEL,  	INDEXA";
$proto0["m_strFrom"] = "FROM PMT_ECCUBE";
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
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_ECCUBE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_ECCUBE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_ECCUBE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APPLICATION",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto12["m_sql"] = "APPLICATION";
$proto12["m_srcTableName"] = "PMT_ECCUBE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APPLICATION_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto14["m_sql"] = "APPLICATION_LABEL";
$proto14["m_srcTableName"] = "PMT_ECCUBE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ECCTEXTAREAVAR007",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto16["m_sql"] = "ECCTEXTAREAVAR007";
$proto16["m_srcTableName"] = "PMT_ECCUBE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "JPN",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto18["m_sql"] = "JPN";
$proto18["m_srcTableName"] = "PMT_ECCUBE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "JPN_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto20["m_sql"] = "JPN_LABEL";
$proto20["m_srcTableName"] = "PMT_ECCUBE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PROCESS",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto22["m_sql"] = "PROCESS";
$proto22["m_srcTableName"] = "PMT_ECCUBE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PROCESS_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto24["m_sql"] = "PROCESS_LABEL";
$proto24["m_srcTableName"] = "PMT_ECCUBE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR001",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto26["m_sql"] = "DATETIMEVAR001";
$proto26["m_srcTableName"] = "PMT_ECCUBE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR001_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto28["m_sql"] = "DATETIMEVAR001_LABEL";
$proto28["m_srcTableName"] = "PMT_ECCUBE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR002",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto30["m_sql"] = "DATETIMEVAR002";
$proto30["m_srcTableName"] = "PMT_ECCUBE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIMEVAR002_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto32["m_sql"] = "DATETIMEVAR002_LABEL";
$proto32["m_srcTableName"] = "PMT_ECCUBE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SATEI",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto34["m_sql"] = "SATEI";
$proto34["m_srcTableName"] = "PMT_ECCUBE";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SATEI_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto36["m_sql"] = "SATEI_LABEL";
$proto36["m_srcTableName"] = "PMT_ECCUBE";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR004",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto38["m_sql"] = "TEXTVAR004";
$proto38["m_srcTableName"] = "PMT_ECCUBE";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR004_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto40["m_sql"] = "TEXTVAR004_LABEL";
$proto40["m_srcTableName"] = "PMT_ECCUBE";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR009",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto42["m_sql"] = "TEXTVAR009";
$proto42["m_srcTableName"] = "PMT_ECCUBE";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR009_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto44["m_sql"] = "TEXTVAR009_LABEL";
$proto44["m_srcTableName"] = "PMT_ECCUBE";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR011",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto46["m_sql"] = "TEXTVAR011";
$proto46["m_srcTableName"] = "PMT_ECCUBE";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR011_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto48["m_sql"] = "TEXTVAR011_LABEL";
$proto48["m_srcTableName"] = "PMT_ECCUBE";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR012",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto50["m_sql"] = "TEXTVAR012";
$proto50["m_srcTableName"] = "PMT_ECCUBE";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR012_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto52["m_sql"] = "TEXTVAR012_LABEL";
$proto52["m_srcTableName"] = "PMT_ECCUBE";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR013",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto54["m_sql"] = "TEXTVAR013";
$proto54["m_srcTableName"] = "PMT_ECCUBE";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTVAR013_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto56["m_sql"] = "TEXTVAR013_LABEL";
$proto56["m_srcTableName"] = "PMT_ECCUBE";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR003",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto58["m_sql"] = "TEXTAREAVAR003";
$proto58["m_srcTableName"] = "PMT_ECCUBE";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR003_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto60["m_sql"] = "TEXTAREAVAR003_LABEL";
$proto60["m_srcTableName"] = "PMT_ECCUBE";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR004",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto62["m_sql"] = "TEXTAREAVAR004";
$proto62["m_srcTableName"] = "PMT_ECCUBE";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR004_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto64["m_sql"] = "TEXTAREAVAR004_LABEL";
$proto64["m_srcTableName"] = "PMT_ECCUBE";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR005",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto66["m_sql"] = "TEXTAREAVAR005";
$proto66["m_srcTableName"] = "PMT_ECCUBE";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR005_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto68["m_sql"] = "TEXTAREAVAR005_LABEL";
$proto68["m_srcTableName"] = "PMT_ECCUBE";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR006",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto70["m_sql"] = "TEXTAREAVAR006";
$proto70["m_srcTableName"] = "PMT_ECCUBE";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXTAREAVAR006_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto72["m_sql"] = "TEXTAREAVAR006_LABEL";
$proto72["m_srcTableName"] = "PMT_ECCUBE";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "INDEX_LABEL",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto74["m_sql"] = "INDEX_LABEL";
$proto74["m_srcTableName"] = "PMT_ECCUBE";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "INDEXA",
	"m_strTable" => "PMT_ECCUBE",
	"m_srcTableName" => "PMT_ECCUBE"
));

$proto76["m_sql"] = "INDEXA";
$proto76["m_srcTableName"] = "PMT_ECCUBE";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "PMT_ECCUBE";
$proto79["m_srcTableName"] = "PMT_ECCUBE";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "APP_UID";
$proto79["m_columns"][] = "APP_NUMBER";
$proto79["m_columns"][] = "APP_STATUS";
$proto79["m_columns"][] = "APPLICATION";
$proto79["m_columns"][] = "APPLICATION_LABEL";
$proto79["m_columns"][] = "ECCTEXTAREAVAR007";
$proto79["m_columns"][] = "JPN";
$proto79["m_columns"][] = "JPN_LABEL";
$proto79["m_columns"][] = "PROCESS";
$proto79["m_columns"][] = "PROCESS_LABEL";
$proto79["m_columns"][] = "DATETIMEVAR001";
$proto79["m_columns"][] = "DATETIMEVAR001_LABEL";
$proto79["m_columns"][] = "DATETIMEVAR002";
$proto79["m_columns"][] = "DATETIMEVAR002_LABEL";
$proto79["m_columns"][] = "SATEI";
$proto79["m_columns"][] = "SATEI_LABEL";
$proto79["m_columns"][] = "TEXTVAR004";
$proto79["m_columns"][] = "TEXTVAR004_LABEL";
$proto79["m_columns"][] = "TEXTVAR009";
$proto79["m_columns"][] = "TEXTVAR009_LABEL";
$proto79["m_columns"][] = "TEXTVAR011";
$proto79["m_columns"][] = "TEXTVAR011_LABEL";
$proto79["m_columns"][] = "TEXTVAR012";
$proto79["m_columns"][] = "TEXTVAR012_LABEL";
$proto79["m_columns"][] = "TEXTVAR013";
$proto79["m_columns"][] = "TEXTVAR013_LABEL";
$proto79["m_columns"][] = "TEXTAREAVAR003";
$proto79["m_columns"][] = "TEXTAREAVAR003_LABEL";
$proto79["m_columns"][] = "TEXTAREAVAR004";
$proto79["m_columns"][] = "TEXTAREAVAR004_LABEL";
$proto79["m_columns"][] = "TEXTAREAVAR005";
$proto79["m_columns"][] = "TEXTAREAVAR005_LABEL";
$proto79["m_columns"][] = "TEXTAREAVAR006";
$proto79["m_columns"][] = "TEXTAREAVAR006_LABEL";
$proto79["m_columns"][] = "INDEX_LABEL";
$proto79["m_columns"][] = "INDEXA";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "PMT_ECCUBE";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "PMT_ECCUBE";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_ECCUBE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_ECCUBE = createSqlQuery_PMT_ECCUBE();


	
						;

																																				

$tdataPMT_ECCUBE[".sqlquery"] = $queryData_PMT_ECCUBE;

$tableEvents["PMT_ECCUBE"] = new eventsBase;
$tdataPMT_ECCUBE[".hasEvents"] = false;

?>
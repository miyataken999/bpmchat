<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_FIELD = array();
	$tdataPMT_FIELD[".truncateText"] = true;
	$tdataPMT_FIELD[".NumberOfChars"] = 20;
	$tdataPMT_FIELD[".ShortName"] = "PMT_FIELD";
	$tdataPMT_FIELD[".OwnerID"] = "";
	$tdataPMT_FIELD[".OriginalTable"] = "PMT_FIELD";

//	field labels
$fieldLabelsPMT_FIELD = array();
$fieldToolTipsPMT_FIELD = array();
$pageTitlesPMT_FIELD = array();
$placeHoldersPMT_FIELD = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_FIELD["Japanese"] = array();
	$fieldToolTipsPMT_FIELD["Japanese"] = array();
	$placeHoldersPMT_FIELD["Japanese"] = array();
	$pageTitlesPMT_FIELD["Japanese"] = array();
	$fieldLabelsPMT_FIELD["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsPMT_FIELD["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsPMT_FIELD["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsPMT_FIELD["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["ROW"] = "行";
	$fieldToolTipsPMT_FIELD["Japanese"]["ROW"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000001"] = "checkbox0000000001";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000001"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000001"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000002"] = "checkbox0000000002";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000002"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000002"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000003"] = "checkbox0000000003";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000003"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000003"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000004"] = "checkbox0000000004";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000004"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000004"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000005"] = "checkbox0000000005";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000005"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000005"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000006"] = "checkbox0000000006";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000006"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000006"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000007"] = "checkbox0000000007";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000007"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000007"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000008"] = "checkbox0000000008";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000008"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000008"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000009"] = "checkbox0000000009";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000009"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000009"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000010"] = "checkbox0000000010";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000010"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000010"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000011"] = "checkbox0000000011";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000011"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000011"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["CHECKBOX0000000012"] = "checkbox0000000012";
	$fieldToolTipsPMT_FIELD["Japanese"]["CHECKBOX0000000012"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["CHECKBOX0000000012"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["DROPDOWN0000000003"] = "dropdown0000000003";
	$fieldToolTipsPMT_FIELD["Japanese"]["DROPDOWN0000000003"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["DROPDOWN0000000003"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["DROPDOWN0000000003_LABEL"] = "dropdown0000000003ラベル";
	$fieldToolTipsPMT_FIELD["Japanese"]["DROPDOWN0000000003_LABEL"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["DROPDOWN0000000003_LABEL"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["TEXT0000000005"] = "text0000000005";
	$fieldToolTipsPMT_FIELD["Japanese"]["TEXT0000000005"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["TEXT0000000005"] = "";
	$fieldLabelsPMT_FIELD["Japanese"]["TEXT0000000006"] = "text0000000006";
	$fieldToolTipsPMT_FIELD["Japanese"]["TEXT0000000006"] = "";
	$placeHoldersPMT_FIELD["Japanese"]["TEXT0000000006"] = "";
	if (count($fieldToolTipsPMT_FIELD["Japanese"]))
		$tdataPMT_FIELD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_FIELD["English"] = array();
	$fieldToolTipsPMT_FIELD["English"] = array();
	$placeHoldersPMT_FIELD["English"] = array();
	$pageTitlesPMT_FIELD["English"] = array();
	$fieldLabelsPMT_FIELD["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsPMT_FIELD["English"]["APP_UID"] = "";
	$placeHoldersPMT_FIELD["English"]["APP_UID"] = "";
	$fieldLabelsPMT_FIELD["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsPMT_FIELD["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_FIELD["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_FIELD["English"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsPMT_FIELD["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_FIELD["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_FIELD["English"]["ROW"] = "行";
	$fieldToolTipsPMT_FIELD["English"]["ROW"] = "";
	$placeHoldersPMT_FIELD["English"]["ROW"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000001"] = "checkbox0000000001";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000001"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000001"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000002"] = "checkbox0000000002";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000002"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000002"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000003"] = "checkbox0000000003";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000003"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000003"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000004"] = "checkbox0000000004";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000004"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000004"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000005"] = "checkbox0000000005";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000005"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000005"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000006"] = "checkbox0000000006";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000006"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000006"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000007"] = "checkbox0000000007";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000007"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000007"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000008"] = "checkbox0000000008";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000008"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000008"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000009"] = "checkbox0000000009";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000009"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000009"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000010"] = "checkbox0000000010";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000010"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000010"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000011"] = "checkbox0000000011";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000011"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000011"] = "";
	$fieldLabelsPMT_FIELD["English"]["CHECKBOX0000000012"] = "checkbox0000000012";
	$fieldToolTipsPMT_FIELD["English"]["CHECKBOX0000000012"] = "";
	$placeHoldersPMT_FIELD["English"]["CHECKBOX0000000012"] = "";
	$fieldLabelsPMT_FIELD["English"]["DROPDOWN0000000003"] = "dropdown0000000003";
	$fieldToolTipsPMT_FIELD["English"]["DROPDOWN0000000003"] = "";
	$placeHoldersPMT_FIELD["English"]["DROPDOWN0000000003"] = "";
	$fieldLabelsPMT_FIELD["English"]["DROPDOWN0000000003_LABEL"] = "dropdown0000000003ラベル";
	$fieldToolTipsPMT_FIELD["English"]["DROPDOWN0000000003_LABEL"] = "";
	$placeHoldersPMT_FIELD["English"]["DROPDOWN0000000003_LABEL"] = "";
	$fieldLabelsPMT_FIELD["English"]["TEXT0000000005"] = "text0000000005";
	$fieldToolTipsPMT_FIELD["English"]["TEXT0000000005"] = "";
	$placeHoldersPMT_FIELD["English"]["TEXT0000000005"] = "";
	$fieldLabelsPMT_FIELD["English"]["TEXT0000000006"] = "text0000000006";
	$fieldToolTipsPMT_FIELD["English"]["TEXT0000000006"] = "";
	$placeHoldersPMT_FIELD["English"]["TEXT0000000006"] = "";
	if (count($fieldToolTipsPMT_FIELD["English"]))
		$tdataPMT_FIELD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_FIELD[""] = array();
	$fieldToolTipsPMT_FIELD[""] = array();
	$placeHoldersPMT_FIELD[""] = array();
	$pageTitlesPMT_FIELD[""] = array();
	if (count($fieldToolTipsPMT_FIELD[""]))
		$tdataPMT_FIELD[".isUseToolTips"] = true;
}


	$tdataPMT_FIELD[".NCSearch"] = true;



$tdataPMT_FIELD[".shortTableName"] = "PMT_FIELD";
$tdataPMT_FIELD[".nSecOptions"] = 0;
$tdataPMT_FIELD[".recsPerRowPrint"] = 1;
$tdataPMT_FIELD[".mainTableOwnerID"] = "";
$tdataPMT_FIELD[".moveNext"] = 0;
$tdataPMT_FIELD[".entityType"] = 0;

$tdataPMT_FIELD[".strOriginalTableName"] = "PMT_FIELD";

	



$tdataPMT_FIELD[".showAddInPopup"] = false;

$tdataPMT_FIELD[".showEditInPopup"] = false;

$tdataPMT_FIELD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_FIELD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_FIELD[".fieldsForRegister"] = array();
	
$tdataPMT_FIELD[".listAjax"] = false;

	$tdataPMT_FIELD[".audit"] = true;

	$tdataPMT_FIELD[".locking"] = false;

$tdataPMT_FIELD[".edit"] = true;
$tdataPMT_FIELD[".afterEditAction"] = 1;
$tdataPMT_FIELD[".closePopupAfterEdit"] = 1;
$tdataPMT_FIELD[".afterEditActionDetTable"] = "";

$tdataPMT_FIELD[".add"] = true;
$tdataPMT_FIELD[".afterAddAction"] = 1;
$tdataPMT_FIELD[".closePopupAfterAdd"] = 1;
$tdataPMT_FIELD[".afterAddActionDetTable"] = "";

$tdataPMT_FIELD[".list"] = true;



$tdataPMT_FIELD[".reorderRecordsByHeader"] = true;



$tdataPMT_FIELD[".view"] = true;

$tdataPMT_FIELD[".import"] = true;

$tdataPMT_FIELD[".exportTo"] = true;

$tdataPMT_FIELD[".printFriendly"] = true;

$tdataPMT_FIELD[".delete"] = true;

$tdataPMT_FIELD[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_FIELD[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_FIELD[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_FIELD[".searchSaving"] = false;
//

$tdataPMT_FIELD[".showSearchPanel"] = true;
		$tdataPMT_FIELD[".flexibleSearch"] = true;

$tdataPMT_FIELD[".isUseAjaxSuggest"] = true;

$tdataPMT_FIELD[".rowHighlite"] = true;



				

$tdataPMT_FIELD[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_FIELD[".buttonsAdded"] = false;

$tdataPMT_FIELD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_FIELD[".isUseTimeForSearch"] = false;





$tdataPMT_FIELD[".allSearchFields"] = array();
$tdataPMT_FIELD[".filterFields"] = array();
$tdataPMT_FIELD[".requiredSearchFields"] = array();

$tdataPMT_FIELD[".allSearchFields"][] = "APP_UID";
	$tdataPMT_FIELD[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_FIELD[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_FIELD[".allSearchFields"][] = "ROW";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000001";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000002";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000003";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000004";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000005";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000006";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000007";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000008";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000009";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000010";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000011";
	$tdataPMT_FIELD[".allSearchFields"][] = "CHECKBOX0000000012";
	$tdataPMT_FIELD[".allSearchFields"][] = "DROPDOWN0000000003";
	$tdataPMT_FIELD[".allSearchFields"][] = "DROPDOWN0000000003_LABEL";
	$tdataPMT_FIELD[".allSearchFields"][] = "TEXT0000000005";
	$tdataPMT_FIELD[".allSearchFields"][] = "TEXT0000000006";
	

$tdataPMT_FIELD[".googleLikeFields"] = array();
$tdataPMT_FIELD[".googleLikeFields"][] = "APP_UID";
$tdataPMT_FIELD[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".googleLikeFields"][] = "ROW";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".googleLikeFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".googleLikeFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".googleLikeFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".googleLikeFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".googleLikeFields"][] = "TEXT0000000006";


$tdataPMT_FIELD[".advSearchFields"] = array();
$tdataPMT_FIELD[".advSearchFields"][] = "APP_UID";
$tdataPMT_FIELD[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".advSearchFields"][] = "ROW";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".advSearchFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".advSearchFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".advSearchFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".advSearchFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".advSearchFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".tableType"] = "list";

$tdataPMT_FIELD[".printerPageOrientation"] = 0;
$tdataPMT_FIELD[".nPrinterPageScale"] = 100;

$tdataPMT_FIELD[".nPrinterSplitRecords"] = 40;

$tdataPMT_FIELD[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_FIELD[".geocodingEnabled"] = false;





$tdataPMT_FIELD[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_FIELD[".pageSize"] = 20;

$tdataPMT_FIELD[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_FIELD[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_FIELD[".orderindexes"] = array();

$tdataPMT_FIELD[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	CHECKBOX0000000001,  	CHECKBOX0000000002,  	CHECKBOX0000000003,  	CHECKBOX0000000004,  	CHECKBOX0000000005,  	CHECKBOX0000000006,  	CHECKBOX0000000007,  	CHECKBOX0000000008,  	CHECKBOX0000000009,  	CHECKBOX0000000010,  	CHECKBOX0000000011,  	CHECKBOX0000000012,  	DROPDOWN0000000003,  	DROPDOWN0000000003_LABEL,  	TEXT0000000005,  	TEXT0000000006";
$tdataPMT_FIELD[".sqlFrom"] = "FROM PMT_FIELD";
$tdataPMT_FIELD[".sqlWhereExpr"] = "";
$tdataPMT_FIELD[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_FIELD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_FIELD[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_FIELD[".highlightSearchResults"] = true;

$tableKeysPMT_FIELD = array();
$tableKeysPMT_FIELD[] = "APP_UID";
$tableKeysPMT_FIELD[] = "ROW";
$tdataPMT_FIELD[".Keys"] = $tableKeysPMT_FIELD;

$tdataPMT_FIELD[".listFields"] = array();
$tdataPMT_FIELD[".listFields"][] = "APP_UID";
$tdataPMT_FIELD[".listFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".listFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".listFields"][] = "ROW";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".listFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".listFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".listFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".listFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".listFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".hideMobileList"] = array();


$tdataPMT_FIELD[".viewFields"] = array();
$tdataPMT_FIELD[".viewFields"][] = "APP_UID";
$tdataPMT_FIELD[".viewFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".viewFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".viewFields"][] = "ROW";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".viewFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".viewFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".viewFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".viewFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".viewFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".addFields"] = array();
$tdataPMT_FIELD[".addFields"][] = "APP_UID";
$tdataPMT_FIELD[".addFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".addFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".addFields"][] = "ROW";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".addFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".addFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".addFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".addFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".addFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".masterListFields"] = array();
$tdataPMT_FIELD[".masterListFields"][] = "APP_UID";
$tdataPMT_FIELD[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".masterListFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".masterListFields"][] = "ROW";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".masterListFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".masterListFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".masterListFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".masterListFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".masterListFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".inlineAddFields"] = array();
$tdataPMT_FIELD[".inlineAddFields"][] = "APP_UID";
$tdataPMT_FIELD[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".inlineAddFields"][] = "ROW";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".inlineAddFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".inlineAddFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".inlineAddFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".inlineAddFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".inlineAddFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".editFields"] = array();
$tdataPMT_FIELD[".editFields"][] = "APP_UID";
$tdataPMT_FIELD[".editFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".editFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".editFields"][] = "ROW";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".editFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".editFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".editFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".editFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".editFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".inlineEditFields"] = array();
$tdataPMT_FIELD[".inlineEditFields"][] = "APP_UID";
$tdataPMT_FIELD[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".inlineEditFields"][] = "ROW";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".inlineEditFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".inlineEditFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".inlineEditFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".inlineEditFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".inlineEditFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".updateSelectedFields"] = array();
$tdataPMT_FIELD[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_FIELD[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".updateSelectedFields"][] = "ROW";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".updateSelectedFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".updateSelectedFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".updateSelectedFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".updateSelectedFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".updateSelectedFields"][] = "TEXT0000000006";


$tdataPMT_FIELD[".exportFields"] = array();
$tdataPMT_FIELD[".exportFields"][] = "APP_UID";
$tdataPMT_FIELD[".exportFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".exportFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".exportFields"][] = "ROW";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".exportFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".exportFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".exportFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".exportFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".exportFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".importFields"] = array();
$tdataPMT_FIELD[".importFields"][] = "APP_UID";
$tdataPMT_FIELD[".importFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".importFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".importFields"][] = "ROW";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".importFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".importFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".importFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".importFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".importFields"][] = "TEXT0000000006";

$tdataPMT_FIELD[".printFields"] = array();
$tdataPMT_FIELD[".printFields"][] = "APP_UID";
$tdataPMT_FIELD[".printFields"][] = "APP_NUMBER";
$tdataPMT_FIELD[".printFields"][] = "APP_STATUS";
$tdataPMT_FIELD[".printFields"][] = "ROW";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000001";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000002";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000003";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000004";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000005";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000006";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000007";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000008";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000009";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000010";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000011";
$tdataPMT_FIELD[".printFields"][] = "CHECKBOX0000000012";
$tdataPMT_FIELD[".printFields"][] = "DROPDOWN0000000003";
$tdataPMT_FIELD[".printFields"][] = "DROPDOWN0000000003_LABEL";
$tdataPMT_FIELD[".printFields"][] = "TEXT0000000005";
$tdataPMT_FIELD[".printFields"][] = "TEXT0000000006";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","APP_UID");
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




	$tdataPMT_FIELD["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","APP_NUMBER");
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




	$tdataPMT_FIELD["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","APP_STATUS");
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




	$tdataPMT_FIELD["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","ROW");
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

		$fdata["strField"] = "ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ROW`";

	
	
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




	$tdataPMT_FIELD["ROW"] = $fdata;
//	CHECKBOX0000000001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CHECKBOX0000000001";
	$fdata["GoodName"] = "CHECKBOX0000000001";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000001");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "CHECKBOX0000000001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000001";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000001"] = $fdata;
//	CHECKBOX0000000002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CHECKBOX0000000002";
	$fdata["GoodName"] = "CHECKBOX0000000002";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000002");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "CHECKBOX0000000002";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000002";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000002"] = $fdata;
//	CHECKBOX0000000003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CHECKBOX0000000003";
	$fdata["GoodName"] = "CHECKBOX0000000003";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000003");
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

		$fdata["strField"] = "CHECKBOX0000000003";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000003";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000003"] = $fdata;
//	CHECKBOX0000000004
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CHECKBOX0000000004";
	$fdata["GoodName"] = "CHECKBOX0000000004";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000004");
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

		$fdata["strField"] = "CHECKBOX0000000004";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000004";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000004"] = $fdata;
//	CHECKBOX0000000005
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CHECKBOX0000000005";
	$fdata["GoodName"] = "CHECKBOX0000000005";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000005");
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

		$fdata["strField"] = "CHECKBOX0000000005";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000005";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000005"] = $fdata;
//	CHECKBOX0000000006
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CHECKBOX0000000006";
	$fdata["GoodName"] = "CHECKBOX0000000006";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000006");
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

		$fdata["strField"] = "CHECKBOX0000000006";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000006";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000006"] = $fdata;
//	CHECKBOX0000000007
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CHECKBOX0000000007";
	$fdata["GoodName"] = "CHECKBOX0000000007";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000007");
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

		$fdata["strField"] = "CHECKBOX0000000007";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000007";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000007"] = $fdata;
//	CHECKBOX0000000008
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CHECKBOX0000000008";
	$fdata["GoodName"] = "CHECKBOX0000000008";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000008");
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

		$fdata["strField"] = "CHECKBOX0000000008";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000008";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000008"] = $fdata;
//	CHECKBOX0000000009
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CHECKBOX0000000009";
	$fdata["GoodName"] = "CHECKBOX0000000009";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000009");
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

		$fdata["strField"] = "CHECKBOX0000000009";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000009";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000009"] = $fdata;
//	CHECKBOX0000000010
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CHECKBOX0000000010";
	$fdata["GoodName"] = "CHECKBOX0000000010";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000010");
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

		$fdata["strField"] = "CHECKBOX0000000010";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000010";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000010"] = $fdata;
//	CHECKBOX0000000011
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CHECKBOX0000000011";
	$fdata["GoodName"] = "CHECKBOX0000000011";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000011");
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

		$fdata["strField"] = "CHECKBOX0000000011";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000011";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000011"] = $fdata;
//	CHECKBOX0000000012
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CHECKBOX0000000012";
	$fdata["GoodName"] = "CHECKBOX0000000012";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","CHECKBOX0000000012");
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

		$fdata["strField"] = "CHECKBOX0000000012";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKBOX0000000012";

	
	
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




	$tdataPMT_FIELD["CHECKBOX0000000012"] = $fdata;
//	DROPDOWN0000000003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DROPDOWN0000000003";
	$fdata["GoodName"] = "DROPDOWN0000000003";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","DROPDOWN0000000003");
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

		$fdata["strField"] = "DROPDOWN0000000003";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DROPDOWN0000000003";

	
	
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




	$tdataPMT_FIELD["DROPDOWN0000000003"] = $fdata;
//	DROPDOWN0000000003_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DROPDOWN0000000003_LABEL";
	$fdata["GoodName"] = "DROPDOWN0000000003_LABEL";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","DROPDOWN0000000003_LABEL");
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

		$fdata["strField"] = "DROPDOWN0000000003_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DROPDOWN0000000003_LABEL";

	
	
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




	$tdataPMT_FIELD["DROPDOWN0000000003_LABEL"] = $fdata;
//	TEXT0000000005
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TEXT0000000005";
	$fdata["GoodName"] = "TEXT0000000005";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","TEXT0000000005");
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

		$fdata["strField"] = "TEXT0000000005";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXT0000000005";

	
	
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




	$tdataPMT_FIELD["TEXT0000000005"] = $fdata;
//	TEXT0000000006
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "TEXT0000000006";
	$fdata["GoodName"] = "TEXT0000000006";
	$fdata["ownerTable"] = "PMT_FIELD";
	$fdata["Label"] = GetFieldLabel("PMT_FIELD","TEXT0000000006");
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

		$fdata["strField"] = "TEXT0000000006";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXT0000000006";

	
	
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




	$tdataPMT_FIELD["TEXT0000000006"] = $fdata;


$tables_data["PMT_FIELD"]=&$tdataPMT_FIELD;
$field_labels["PMT_FIELD"] = &$fieldLabelsPMT_FIELD;
$fieldToolTips["PMT_FIELD"] = &$fieldToolTipsPMT_FIELD;
$placeHolders["PMT_FIELD"] = &$placeHoldersPMT_FIELD;
$page_titles["PMT_FIELD"] = &$pageTitlesPMT_FIELD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_FIELD"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_FIELD"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_FIELD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	CHECKBOX0000000001,  	CHECKBOX0000000002,  	CHECKBOX0000000003,  	CHECKBOX0000000004,  	CHECKBOX0000000005,  	CHECKBOX0000000006,  	CHECKBOX0000000007,  	CHECKBOX0000000008,  	CHECKBOX0000000009,  	CHECKBOX0000000010,  	CHECKBOX0000000011,  	CHECKBOX0000000012,  	DROPDOWN0000000003,  	DROPDOWN0000000003_LABEL,  	TEXT0000000005,  	TEXT0000000006";
$proto0["m_strFrom"] = "FROM PMT_FIELD";
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
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_FIELD";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_FIELD";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_FIELD";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_FIELD";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000001",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto14["m_sql"] = "CHECKBOX0000000001";
$proto14["m_srcTableName"] = "PMT_FIELD";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000002",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto16["m_sql"] = "CHECKBOX0000000002";
$proto16["m_srcTableName"] = "PMT_FIELD";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000003",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto18["m_sql"] = "CHECKBOX0000000003";
$proto18["m_srcTableName"] = "PMT_FIELD";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000004",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto20["m_sql"] = "CHECKBOX0000000004";
$proto20["m_srcTableName"] = "PMT_FIELD";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000005",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto22["m_sql"] = "CHECKBOX0000000005";
$proto22["m_srcTableName"] = "PMT_FIELD";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000006",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto24["m_sql"] = "CHECKBOX0000000006";
$proto24["m_srcTableName"] = "PMT_FIELD";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000007",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto26["m_sql"] = "CHECKBOX0000000007";
$proto26["m_srcTableName"] = "PMT_FIELD";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000008",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto28["m_sql"] = "CHECKBOX0000000008";
$proto28["m_srcTableName"] = "PMT_FIELD";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000009",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto30["m_sql"] = "CHECKBOX0000000009";
$proto30["m_srcTableName"] = "PMT_FIELD";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000010",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto32["m_sql"] = "CHECKBOX0000000010";
$proto32["m_srcTableName"] = "PMT_FIELD";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000011",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto34["m_sql"] = "CHECKBOX0000000011";
$proto34["m_srcTableName"] = "PMT_FIELD";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKBOX0000000012",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto36["m_sql"] = "CHECKBOX0000000012";
$proto36["m_srcTableName"] = "PMT_FIELD";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DROPDOWN0000000003",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto38["m_sql"] = "DROPDOWN0000000003";
$proto38["m_srcTableName"] = "PMT_FIELD";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DROPDOWN0000000003_LABEL",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto40["m_sql"] = "DROPDOWN0000000003_LABEL";
$proto40["m_srcTableName"] = "PMT_FIELD";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXT0000000005",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto42["m_sql"] = "TEXT0000000005";
$proto42["m_srcTableName"] = "PMT_FIELD";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXT0000000006",
	"m_strTable" => "PMT_FIELD",
	"m_srcTableName" => "PMT_FIELD"
));

$proto44["m_sql"] = "TEXT0000000006";
$proto44["m_srcTableName"] = "PMT_FIELD";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "PMT_FIELD";
$proto47["m_srcTableName"] = "PMT_FIELD";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "APP_UID";
$proto47["m_columns"][] = "APP_NUMBER";
$proto47["m_columns"][] = "APP_STATUS";
$proto47["m_columns"][] = "ROW";
$proto47["m_columns"][] = "CHECKBOX0000000001";
$proto47["m_columns"][] = "CHECKBOX0000000002";
$proto47["m_columns"][] = "CHECKBOX0000000003";
$proto47["m_columns"][] = "CHECKBOX0000000004";
$proto47["m_columns"][] = "CHECKBOX0000000005";
$proto47["m_columns"][] = "CHECKBOX0000000006";
$proto47["m_columns"][] = "CHECKBOX0000000007";
$proto47["m_columns"][] = "CHECKBOX0000000008";
$proto47["m_columns"][] = "CHECKBOX0000000009";
$proto47["m_columns"][] = "CHECKBOX0000000010";
$proto47["m_columns"][] = "CHECKBOX0000000011";
$proto47["m_columns"][] = "CHECKBOX0000000012";
$proto47["m_columns"][] = "DROPDOWN0000000003";
$proto47["m_columns"][] = "DROPDOWN0000000003_LABEL";
$proto47["m_columns"][] = "TEXT0000000005";
$proto47["m_columns"][] = "TEXT0000000006";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "PMT_FIELD";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "PMT_FIELD";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_FIELD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_FIELD = createSqlQuery_PMT_FIELD();


	
						;

																				

$tdataPMT_FIELD[".sqlquery"] = $queryData_PMT_FIELD;

$tableEvents["PMT_FIELD"] = new eventsBase;
$tdataPMT_FIELD[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_CANCELED = array();
	$tdataLIST_CANCELED[".truncateText"] = true;
	$tdataLIST_CANCELED[".NumberOfChars"] = 20;
	$tdataLIST_CANCELED[".ShortName"] = "LIST_CANCELED";
	$tdataLIST_CANCELED[".OwnerID"] = "";
	$tdataLIST_CANCELED[".OriginalTable"] = "LIST_CANCELED";

//	field labels
$fieldLabelsLIST_CANCELED = array();
$fieldToolTipsLIST_CANCELED = array();
$pageTitlesLIST_CANCELED = array();
$placeHoldersLIST_CANCELED = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_CANCELED["Japanese"] = array();
	$fieldToolTipsLIST_CANCELED["Japanese"] = array();
	$placeHoldersLIST_CANCELED["Japanese"] = array();
	$pageTitlesLIST_CANCELED["Japanese"] = array();
	$fieldLabelsLIST_CANCELED["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_CANCELED["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_CANCELED["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_CANCELED["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_CANCELED["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_CANCELED["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["APP_CANCELED_DATE"] = "アプリキャンセル日";
	$fieldToolTipsLIST_CANCELED["Japanese"]["APP_CANCELED_DATE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["APP_CANCELED_DATE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_CANCELED["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["USR_ID"] = "";
	$fieldLabelsLIST_CANCELED["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_CANCELED["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_CANCELED["Japanese"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_CANCELED["Japanese"]))
		$tdataLIST_CANCELED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_CANCELED["English"] = array();
	$fieldToolTipsLIST_CANCELED["English"] = array();
	$placeHoldersLIST_CANCELED["English"] = array();
	$pageTitlesLIST_CANCELED["English"] = array();
	$fieldLabelsLIST_CANCELED["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_CANCELED["English"]["APP_UID"] = "";
	$placeHoldersLIST_CANCELED["English"]["APP_UID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_CANCELED["English"]["USR_UID"] = "";
	$placeHoldersLIST_CANCELED["English"]["USR_UID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_CANCELED["English"]["TAS_UID"] = "";
	$placeHoldersLIST_CANCELED["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_CANCELED["English"]["PRO_UID"] = "";
	$placeHoldersLIST_CANCELED["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_CANCELED["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_CANCELED["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_CANCELED["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_CANCELED["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_CANCELED["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_CANCELED["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_CANCELED["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_CANCELED["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_CANCELED["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["APP_CANCELED_DATE"] = "アプリキャンセル日";
	$fieldToolTipsLIST_CANCELED["English"]["APP_CANCELED_DATE"] = "";
	$placeHoldersLIST_CANCELED["English"]["APP_CANCELED_DATE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_CANCELED["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_CANCELED["English"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_CANCELED["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_CANCELED["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_CANCELED["English"]["PRO_ID"] = "";
	$placeHoldersLIST_CANCELED["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_CANCELED["English"]["USR_ID"] = "";
	$placeHoldersLIST_CANCELED["English"]["USR_ID"] = "";
	$fieldLabelsLIST_CANCELED["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_CANCELED["English"]["TAS_ID"] = "";
	$placeHoldersLIST_CANCELED["English"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_CANCELED["English"]))
		$tdataLIST_CANCELED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_CANCELED[""] = array();
	$fieldToolTipsLIST_CANCELED[""] = array();
	$placeHoldersLIST_CANCELED[""] = array();
	$pageTitlesLIST_CANCELED[""] = array();
	if (count($fieldToolTipsLIST_CANCELED[""]))
		$tdataLIST_CANCELED[".isUseToolTips"] = true;
}


	$tdataLIST_CANCELED[".NCSearch"] = true;



$tdataLIST_CANCELED[".shortTableName"] = "LIST_CANCELED";
$tdataLIST_CANCELED[".nSecOptions"] = 0;
$tdataLIST_CANCELED[".recsPerRowPrint"] = 1;
$tdataLIST_CANCELED[".mainTableOwnerID"] = "";
$tdataLIST_CANCELED[".moveNext"] = 0;
$tdataLIST_CANCELED[".entityType"] = 0;

$tdataLIST_CANCELED[".strOriginalTableName"] = "LIST_CANCELED";

	



$tdataLIST_CANCELED[".showAddInPopup"] = false;

$tdataLIST_CANCELED[".showEditInPopup"] = false;

$tdataLIST_CANCELED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_CANCELED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_CANCELED[".fieldsForRegister"] = array();
	
$tdataLIST_CANCELED[".listAjax"] = false;

	$tdataLIST_CANCELED[".audit"] = true;

	$tdataLIST_CANCELED[".locking"] = false;

$tdataLIST_CANCELED[".edit"] = true;
$tdataLIST_CANCELED[".afterEditAction"] = 1;
$tdataLIST_CANCELED[".closePopupAfterEdit"] = 1;
$tdataLIST_CANCELED[".afterEditActionDetTable"] = "";

$tdataLIST_CANCELED[".add"] = true;
$tdataLIST_CANCELED[".afterAddAction"] = 1;
$tdataLIST_CANCELED[".closePopupAfterAdd"] = 1;
$tdataLIST_CANCELED[".afterAddActionDetTable"] = "";

$tdataLIST_CANCELED[".list"] = true;

$tdataLIST_CANCELED[".inlineEdit"] = true;


$tdataLIST_CANCELED[".reorderRecordsByHeader"] = true;
$tdataLIST_CANCELED[".createSortByDropdown"] = true;
$tdataLIST_CANCELED[".strSortControlSettingsJSON"] = "";



$tdataLIST_CANCELED[".inlineAdd"] = true;
$tdataLIST_CANCELED[".view"] = true;

$tdataLIST_CANCELED[".import"] = true;

$tdataLIST_CANCELED[".exportTo"] = true;

$tdataLIST_CANCELED[".printFriendly"] = true;

$tdataLIST_CANCELED[".delete"] = true;

$tdataLIST_CANCELED[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_CANCELED[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_CANCELED[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_CANCELED[".searchSaving"] = false;
//

$tdataLIST_CANCELED[".showSearchPanel"] = true;
		$tdataLIST_CANCELED[".flexibleSearch"] = true;

$tdataLIST_CANCELED[".isUseAjaxSuggest"] = true;

$tdataLIST_CANCELED[".rowHighlite"] = true;



				

$tdataLIST_CANCELED[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_CANCELED[".buttonsAdded"] = false;

$tdataLIST_CANCELED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_CANCELED[".isUseTimeForSearch"] = false;





$tdataLIST_CANCELED[".allSearchFields"] = array();
$tdataLIST_CANCELED[".filterFields"] = array();
$tdataLIST_CANCELED[".requiredSearchFields"] = array();

$tdataLIST_CANCELED[".allSearchFields"][] = "APP_UID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "USR_UID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_CANCELED[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "APP_CANCELED_DATE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_DUE_DATE";
	$tdataLIST_CANCELED[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataLIST_CANCELED[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "USR_ID";
	$tdataLIST_CANCELED[".allSearchFields"][] = "TAS_ID";
	

$tdataLIST_CANCELED[".googleLikeFields"] = array();
$tdataLIST_CANCELED[".googleLikeFields"][] = "APP_UID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "USR_UID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "USR_ID";
$tdataLIST_CANCELED[".googleLikeFields"][] = "TAS_ID";


$tdataLIST_CANCELED[".advSearchFields"] = array();
$tdataLIST_CANCELED[".advSearchFields"][] = "APP_UID";
$tdataLIST_CANCELED[".advSearchFields"][] = "USR_UID";
$tdataLIST_CANCELED[".advSearchFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".advSearchFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".advSearchFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".advSearchFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".advSearchFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".advSearchFields"][] = "USR_ID";
$tdataLIST_CANCELED[".advSearchFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".tableType"] = "list";

$tdataLIST_CANCELED[".printerPageOrientation"] = 0;
$tdataLIST_CANCELED[".nPrinterPageScale"] = 100;

$tdataLIST_CANCELED[".nPrinterSplitRecords"] = 40;

$tdataLIST_CANCELED[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_CANCELED[".geocodingEnabled"] = false;





$tdataLIST_CANCELED[".listGridLayout"] = 3;


$tdataLIST_CANCELED[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_CANCELED[".pageSize"] = 20;

$tdataLIST_CANCELED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_CANCELED[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_CANCELED[".orderindexes"] = array();

$tdataLIST_CANCELED[".sqlHead"] = "SELECT APP_UID,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CANCELED_DATE,  	DEL_INDEX,  	DEL_PREVIOUS_USR_UID,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID";
$tdataLIST_CANCELED[".sqlFrom"] = "FROM LIST_CANCELED";
$tdataLIST_CANCELED[".sqlWhereExpr"] = "";
$tdataLIST_CANCELED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_CANCELED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_CANCELED[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_CANCELED[".highlightSearchResults"] = true;

$tableKeysLIST_CANCELED = array();
$tableKeysLIST_CANCELED[] = "APP_UID";
$tdataLIST_CANCELED[".Keys"] = $tableKeysLIST_CANCELED;

$tdataLIST_CANCELED[".listFields"] = array();
$tdataLIST_CANCELED[".listFields"][] = "APP_UID";
$tdataLIST_CANCELED[".listFields"][] = "USR_UID";
$tdataLIST_CANCELED[".listFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".listFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".listFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".listFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".listFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".listFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".listFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".listFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".listFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".listFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".listFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".listFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".listFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".listFields"][] = "USR_ID";
$tdataLIST_CANCELED[".listFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".hideMobileList"] = array();


$tdataLIST_CANCELED[".viewFields"] = array();
$tdataLIST_CANCELED[".viewFields"][] = "APP_UID";
$tdataLIST_CANCELED[".viewFields"][] = "USR_UID";
$tdataLIST_CANCELED[".viewFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".viewFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".viewFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".viewFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".viewFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".viewFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".viewFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".viewFields"][] = "USR_ID";
$tdataLIST_CANCELED[".viewFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".addFields"] = array();
$tdataLIST_CANCELED[".addFields"][] = "APP_UID";
$tdataLIST_CANCELED[".addFields"][] = "USR_UID";
$tdataLIST_CANCELED[".addFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".addFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".addFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".addFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".addFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".addFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".addFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".addFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".addFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".addFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".addFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".addFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".addFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".addFields"][] = "USR_ID";
$tdataLIST_CANCELED[".addFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".masterListFields"] = array();
$tdataLIST_CANCELED[".masterListFields"][] = "APP_UID";
$tdataLIST_CANCELED[".masterListFields"][] = "USR_UID";
$tdataLIST_CANCELED[".masterListFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".masterListFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".masterListFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".masterListFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".masterListFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".masterListFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".masterListFields"][] = "USR_ID";
$tdataLIST_CANCELED[".masterListFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".inlineAddFields"] = array();
$tdataLIST_CANCELED[".inlineAddFields"][] = "APP_UID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "USR_UID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "USR_ID";
$tdataLIST_CANCELED[".inlineAddFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".editFields"] = array();
$tdataLIST_CANCELED[".editFields"][] = "APP_UID";
$tdataLIST_CANCELED[".editFields"][] = "USR_UID";
$tdataLIST_CANCELED[".editFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".editFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".editFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".editFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".editFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".editFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".editFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".editFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".editFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".editFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".editFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".editFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".editFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".editFields"][] = "USR_ID";
$tdataLIST_CANCELED[".editFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".inlineEditFields"] = array();
$tdataLIST_CANCELED[".inlineEditFields"][] = "APP_UID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "USR_UID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "USR_ID";
$tdataLIST_CANCELED[".inlineEditFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".updateSelectedFields"] = array();
$tdataLIST_CANCELED[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "USR_ID";
$tdataLIST_CANCELED[".updateSelectedFields"][] = "TAS_ID";


$tdataLIST_CANCELED[".exportFields"] = array();
$tdataLIST_CANCELED[".exportFields"][] = "APP_UID";
$tdataLIST_CANCELED[".exportFields"][] = "USR_UID";
$tdataLIST_CANCELED[".exportFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".exportFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".exportFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".exportFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".exportFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".exportFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".exportFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".exportFields"][] = "USR_ID";
$tdataLIST_CANCELED[".exportFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".importFields"] = array();
$tdataLIST_CANCELED[".importFields"][] = "APP_UID";
$tdataLIST_CANCELED[".importFields"][] = "USR_UID";
$tdataLIST_CANCELED[".importFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".importFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".importFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".importFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".importFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".importFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".importFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".importFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".importFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".importFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".importFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".importFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".importFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".importFields"][] = "USR_ID";
$tdataLIST_CANCELED[".importFields"][] = "TAS_ID";

$tdataLIST_CANCELED[".printFields"] = array();
$tdataLIST_CANCELED[".printFields"][] = "APP_UID";
$tdataLIST_CANCELED[".printFields"][] = "USR_UID";
$tdataLIST_CANCELED[".printFields"][] = "TAS_UID";
$tdataLIST_CANCELED[".printFields"][] = "PRO_UID";
$tdataLIST_CANCELED[".printFields"][] = "APP_NUMBER";
$tdataLIST_CANCELED[".printFields"][] = "APP_TITLE";
$tdataLIST_CANCELED[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_CANCELED[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_CANCELED[".printFields"][] = "APP_CANCELED_DATE";
$tdataLIST_CANCELED[".printFields"][] = "DEL_INDEX";
$tdataLIST_CANCELED[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_CANCELED[".printFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_CANCELED[".printFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_CANCELED[".printFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_CANCELED[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_CANCELED[".printFields"][] = "DEL_INIT_DATE";
$tdataLIST_CANCELED[".printFields"][] = "DEL_DUE_DATE";
$tdataLIST_CANCELED[".printFields"][] = "DEL_PRIORITY";
$tdataLIST_CANCELED[".printFields"][] = "PRO_ID";
$tdataLIST_CANCELED[".printFields"][] = "USR_ID";
$tdataLIST_CANCELED[".printFields"][] = "TAS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","APP_UID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["APP_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","USR_UID");
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

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","PRO_UID");
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","APP_NUMBER");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","APP_TITLE");
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

		$fdata["strField"] = "APP_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TITLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","APP_PRO_TITLE");
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

		$fdata["strField"] = "APP_PRO_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PRO_TITLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","APP_TAS_TITLE");
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

		$fdata["strField"] = "APP_TAS_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TAS_TITLE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["APP_TAS_TITLE"] = $fdata;
//	APP_CANCELED_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_CANCELED_DATE";
	$fdata["GoodName"] = "APP_CANCELED_DATE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","APP_CANCELED_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "APP_CANCELED_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CANCELED_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataLIST_CANCELED["APP_CANCELED_DATE"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["DEL_INDEX"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_PREVIOUS_USR_UID");
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

		$fdata["strField"] = "DEL_PREVIOUS_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PREVIOUS_USR_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_CURRENT_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_CURRENT_USR_USERNAME");
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

		$fdata["strField"] = "DEL_CURRENT_USR_USERNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_CURRENT_USR_USERNAME";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["DEL_CURRENT_USR_USERNAME"] = $fdata;
//	DEL_CURRENT_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_CURRENT_USR_FIRSTNAME");
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

		$fdata["strField"] = "DEL_CURRENT_USR_FIRSTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_CURRENT_USR_FIRSTNAME";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["DEL_CURRENT_USR_FIRSTNAME"] = $fdata;
//	DEL_CURRENT_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_CURRENT_USR_LASTNAME");
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

		$fdata["strField"] = "DEL_CURRENT_USR_LASTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_CURRENT_USR_LASTNAME";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["DEL_CURRENT_USR_LASTNAME"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_DELEGATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "DEL_DELEGATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DELEGATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataLIST_CANCELED["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_INIT_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "DEL_INIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INIT_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataLIST_CANCELED["DEL_INIT_DATE"] = $fdata;
//	DEL_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEL_DUE_DATE";
	$fdata["GoodName"] = "DEL_DUE_DATE";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_DUE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "DEL_DUE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DUE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataLIST_CANCELED["DEL_DUE_DATE"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","DEL_PRIORITY");
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

		$fdata["strField"] = "DEL_PRIORITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PRIORITY";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_CANCELED["DEL_PRIORITY"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","PRO_ID");
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

		$fdata["strField"] = "PRO_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_ID";

	
	
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




	$tdataLIST_CANCELED["PRO_ID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","USR_ID");
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

		$fdata["strField"] = "USR_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_ID";

	
	
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




	$tdataLIST_CANCELED["USR_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_CANCELED";
	$fdata["Label"] = GetFieldLabel("LIST_CANCELED","TAS_ID");
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

		$fdata["strField"] = "TAS_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_ID";

	
	
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




	$tdataLIST_CANCELED["TAS_ID"] = $fdata;


$tables_data["LIST_CANCELED"]=&$tdataLIST_CANCELED;
$field_labels["LIST_CANCELED"] = &$fieldLabelsLIST_CANCELED;
$fieldToolTips["LIST_CANCELED"] = &$fieldToolTipsLIST_CANCELED;
$placeHolders["LIST_CANCELED"] = &$placeHoldersLIST_CANCELED;
$page_titles["LIST_CANCELED"] = &$pageTitlesLIST_CANCELED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_CANCELED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_CANCELED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_CANCELED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CANCELED_DATE,  	DEL_INDEX,  	DEL_PREVIOUS_USR_UID,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID";
$proto0["m_strFrom"] = "FROM LIST_CANCELED";
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
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_CANCELED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "LIST_CANCELED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "LIST_CANCELED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto12["m_sql"] = "PRO_UID";
$proto12["m_srcTableName"] = "LIST_CANCELED";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto14["m_sql"] = "APP_NUMBER";
$proto14["m_srcTableName"] = "LIST_CANCELED";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto16["m_sql"] = "APP_TITLE";
$proto16["m_srcTableName"] = "LIST_CANCELED";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto18["m_sql"] = "APP_PRO_TITLE";
$proto18["m_srcTableName"] = "LIST_CANCELED";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto20["m_sql"] = "APP_TAS_TITLE";
$proto20["m_srcTableName"] = "LIST_CANCELED";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CANCELED_DATE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto22["m_sql"] = "APP_CANCELED_DATE";
$proto22["m_srcTableName"] = "LIST_CANCELED";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto24["m_sql"] = "DEL_INDEX";
$proto24["m_srcTableName"] = "LIST_CANCELED";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto26["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto26["m_srcTableName"] = "LIST_CANCELED";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_USERNAME",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto28["m_sql"] = "DEL_CURRENT_USR_USERNAME";
$proto28["m_srcTableName"] = "LIST_CANCELED";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_FIRSTNAME",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto30["m_sql"] = "DEL_CURRENT_USR_FIRSTNAME";
$proto30["m_srcTableName"] = "LIST_CANCELED";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_LASTNAME",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto32["m_sql"] = "DEL_CURRENT_USR_LASTNAME";
$proto32["m_srcTableName"] = "LIST_CANCELED";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto34["m_sql"] = "DEL_DELEGATE_DATE";
$proto34["m_srcTableName"] = "LIST_CANCELED";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto36["m_sql"] = "DEL_INIT_DATE";
$proto36["m_srcTableName"] = "LIST_CANCELED";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DUE_DATE",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto38["m_sql"] = "DEL_DUE_DATE";
$proto38["m_srcTableName"] = "LIST_CANCELED";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto40["m_sql"] = "DEL_PRIORITY";
$proto40["m_srcTableName"] = "LIST_CANCELED";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto42["m_sql"] = "PRO_ID";
$proto42["m_srcTableName"] = "LIST_CANCELED";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto44["m_sql"] = "USR_ID";
$proto44["m_srcTableName"] = "LIST_CANCELED";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_CANCELED",
	"m_srcTableName" => "LIST_CANCELED"
));

$proto46["m_sql"] = "TAS_ID";
$proto46["m_srcTableName"] = "LIST_CANCELED";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "LIST_CANCELED";
$proto49["m_srcTableName"] = "LIST_CANCELED";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "APP_UID";
$proto49["m_columns"][] = "USR_UID";
$proto49["m_columns"][] = "TAS_UID";
$proto49["m_columns"][] = "PRO_UID";
$proto49["m_columns"][] = "APP_NUMBER";
$proto49["m_columns"][] = "APP_TITLE";
$proto49["m_columns"][] = "APP_PRO_TITLE";
$proto49["m_columns"][] = "APP_TAS_TITLE";
$proto49["m_columns"][] = "APP_CANCELED_DATE";
$proto49["m_columns"][] = "DEL_INDEX";
$proto49["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto49["m_columns"][] = "DEL_CURRENT_USR_USERNAME";
$proto49["m_columns"][] = "DEL_CURRENT_USR_FIRSTNAME";
$proto49["m_columns"][] = "DEL_CURRENT_USR_LASTNAME";
$proto49["m_columns"][] = "DEL_DELEGATE_DATE";
$proto49["m_columns"][] = "DEL_INIT_DATE";
$proto49["m_columns"][] = "DEL_DUE_DATE";
$proto49["m_columns"][] = "DEL_PRIORITY";
$proto49["m_columns"][] = "PRO_ID";
$proto49["m_columns"][] = "USR_ID";
$proto49["m_columns"][] = "TAS_ID";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LIST_CANCELED";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "LIST_CANCELED";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LIST_CANCELED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_CANCELED = createSqlQuery_LIST_CANCELED();


	
						;

																					

$tdataLIST_CANCELED[".sqlquery"] = $queryData_LIST_CANCELED;

$tableEvents["LIST_CANCELED"] = new eventsBase;
$tdataLIST_CANCELED[".hasEvents"] = false;

?>
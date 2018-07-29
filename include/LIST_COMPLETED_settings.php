<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_COMPLETED = array();
	$tdataLIST_COMPLETED[".truncateText"] = true;
	$tdataLIST_COMPLETED[".NumberOfChars"] = 20;
	$tdataLIST_COMPLETED[".ShortName"] = "LIST_COMPLETED";
	$tdataLIST_COMPLETED[".OwnerID"] = "";
	$tdataLIST_COMPLETED[".OriginalTable"] = "LIST_COMPLETED";

//	field labels
$fieldLabelsLIST_COMPLETED = array();
$fieldToolTipsLIST_COMPLETED = array();
$pageTitlesLIST_COMPLETED = array();
$placeHoldersLIST_COMPLETED = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_COMPLETED["Japanese"] = array();
	$fieldToolTipsLIST_COMPLETED["Japanese"] = array();
	$placeHoldersLIST_COMPLETED["Japanese"] = array();
	$pageTitlesLIST_COMPLETED["Japanese"] = array();
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_CREATE_DATE"] = "アプリは、日付を作成します";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["USR_ID"] = "";
	$fieldLabelsLIST_COMPLETED["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_COMPLETED["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_COMPLETED["Japanese"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_COMPLETED["Japanese"]))
		$tdataLIST_COMPLETED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_COMPLETED["English"] = array();
	$fieldToolTipsLIST_COMPLETED["English"] = array();
	$placeHoldersLIST_COMPLETED["English"] = array();
	$pageTitlesLIST_COMPLETED["English"] = array();
	$fieldLabelsLIST_COMPLETED["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_UID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_UID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_COMPLETED["English"]["USR_UID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["USR_UID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_COMPLETED["English"]["TAS_UID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_COMPLETED["English"]["PRO_UID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["APP_CREATE_DATE"] = "アプリは、日付を作成します";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_CREATE_DATE"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_CREATE_DATE"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsLIST_COMPLETED["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersLIST_COMPLETED["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_COMPLETED["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_COMPLETED["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_COMPLETED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_COMPLETED["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_COMPLETED["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_COMPLETED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_COMPLETED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_COMPLETED["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_COMPLETED["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_COMPLETED["English"]["PRO_ID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_COMPLETED["English"]["USR_ID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["USR_ID"] = "";
	$fieldLabelsLIST_COMPLETED["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_COMPLETED["English"]["TAS_ID"] = "";
	$placeHoldersLIST_COMPLETED["English"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_COMPLETED["English"]))
		$tdataLIST_COMPLETED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_COMPLETED[""] = array();
	$fieldToolTipsLIST_COMPLETED[""] = array();
	$placeHoldersLIST_COMPLETED[""] = array();
	$pageTitlesLIST_COMPLETED[""] = array();
	if (count($fieldToolTipsLIST_COMPLETED[""]))
		$tdataLIST_COMPLETED[".isUseToolTips"] = true;
}


	$tdataLIST_COMPLETED[".NCSearch"] = true;



$tdataLIST_COMPLETED[".shortTableName"] = "LIST_COMPLETED";
$tdataLIST_COMPLETED[".nSecOptions"] = 0;
$tdataLIST_COMPLETED[".recsPerRowPrint"] = 1;
$tdataLIST_COMPLETED[".mainTableOwnerID"] = "";
$tdataLIST_COMPLETED[".moveNext"] = 0;
$tdataLIST_COMPLETED[".entityType"] = 0;

$tdataLIST_COMPLETED[".strOriginalTableName"] = "LIST_COMPLETED";

	



$tdataLIST_COMPLETED[".showAddInPopup"] = false;

$tdataLIST_COMPLETED[".showEditInPopup"] = false;

$tdataLIST_COMPLETED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_COMPLETED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_COMPLETED[".fieldsForRegister"] = array();
	
$tdataLIST_COMPLETED[".listAjax"] = false;

	$tdataLIST_COMPLETED[".audit"] = true;

	$tdataLIST_COMPLETED[".locking"] = false;

$tdataLIST_COMPLETED[".edit"] = true;
$tdataLIST_COMPLETED[".afterEditAction"] = 1;
$tdataLIST_COMPLETED[".closePopupAfterEdit"] = 1;
$tdataLIST_COMPLETED[".afterEditActionDetTable"] = "";

$tdataLIST_COMPLETED[".add"] = true;
$tdataLIST_COMPLETED[".afterAddAction"] = 1;
$tdataLIST_COMPLETED[".closePopupAfterAdd"] = 1;
$tdataLIST_COMPLETED[".afterAddActionDetTable"] = "";

$tdataLIST_COMPLETED[".list"] = true;

$tdataLIST_COMPLETED[".inlineEdit"] = true;


$tdataLIST_COMPLETED[".reorderRecordsByHeader"] = true;
$tdataLIST_COMPLETED[".createSortByDropdown"] = true;
$tdataLIST_COMPLETED[".strSortControlSettingsJSON"] = "";



$tdataLIST_COMPLETED[".inlineAdd"] = true;
$tdataLIST_COMPLETED[".view"] = true;

$tdataLIST_COMPLETED[".import"] = true;

$tdataLIST_COMPLETED[".exportTo"] = true;

$tdataLIST_COMPLETED[".printFriendly"] = true;

$tdataLIST_COMPLETED[".delete"] = true;

$tdataLIST_COMPLETED[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_COMPLETED[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_COMPLETED[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_COMPLETED[".searchSaving"] = false;
//

$tdataLIST_COMPLETED[".showSearchPanel"] = true;
		$tdataLIST_COMPLETED[".flexibleSearch"] = true;

$tdataLIST_COMPLETED[".isUseAjaxSuggest"] = true;

$tdataLIST_COMPLETED[".rowHighlite"] = true;



				

$tdataLIST_COMPLETED[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_COMPLETED[".buttonsAdded"] = false;

$tdataLIST_COMPLETED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_COMPLETED[".isUseTimeForSearch"] = false;





$tdataLIST_COMPLETED[".allSearchFields"] = array();
$tdataLIST_COMPLETED[".filterFields"] = array();
$tdataLIST_COMPLETED[".requiredSearchFields"] = array();

$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_UID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "USR_UID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "USR_ID";
	$tdataLIST_COMPLETED[".allSearchFields"][] = "TAS_ID";
	

$tdataLIST_COMPLETED[".googleLikeFields"] = array();
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".googleLikeFields"][] = "TAS_ID";


$tdataLIST_COMPLETED[".advSearchFields"] = array();
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".advSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".advSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".advSearchFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".advSearchFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".tableType"] = "list";

$tdataLIST_COMPLETED[".printerPageOrientation"] = 0;
$tdataLIST_COMPLETED[".nPrinterPageScale"] = 100;

$tdataLIST_COMPLETED[".nPrinterSplitRecords"] = 40;

$tdataLIST_COMPLETED[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_COMPLETED[".geocodingEnabled"] = false;





$tdataLIST_COMPLETED[".listGridLayout"] = 3;


$tdataLIST_COMPLETED[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_COMPLETED[".pageSize"] = 20;

$tdataLIST_COMPLETED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_COMPLETED[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_COMPLETED[".orderindexes"] = array();

$tdataLIST_COMPLETED[".sqlHead"] = "SELECT APP_UID,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CREATE_DATE,  	APP_FINISH_DATE,  	DEL_INDEX,  	DEL_PREVIOUS_USR_UID,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	PRO_ID,  	USR_ID,  	TAS_ID";
$tdataLIST_COMPLETED[".sqlFrom"] = "FROM LIST_COMPLETED";
$tdataLIST_COMPLETED[".sqlWhereExpr"] = "";
$tdataLIST_COMPLETED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_COMPLETED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_COMPLETED[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_COMPLETED[".highlightSearchResults"] = true;

$tableKeysLIST_COMPLETED = array();
$tableKeysLIST_COMPLETED[] = "APP_UID";
$tdataLIST_COMPLETED[".Keys"] = $tableKeysLIST_COMPLETED;

$tdataLIST_COMPLETED[".listFields"] = array();
$tdataLIST_COMPLETED[".listFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".listFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".listFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".listFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".listFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".listFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".listFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".listFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".listFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".listFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".listFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".listFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".listFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".listFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".listFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".hideMobileList"] = array();


$tdataLIST_COMPLETED[".viewFields"] = array();
$tdataLIST_COMPLETED[".viewFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".viewFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".viewFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".viewFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".viewFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".viewFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".viewFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".viewFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".viewFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".viewFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".viewFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".viewFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".viewFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".viewFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".viewFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".addFields"] = array();
$tdataLIST_COMPLETED[".addFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".addFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".addFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".addFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".addFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".addFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".addFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".addFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".addFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".addFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".addFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".addFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".addFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".addFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".addFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".masterListFields"] = array();
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".masterListFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".masterListFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".masterListFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".masterListFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".masterListFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".masterListFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".masterListFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".masterListFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".masterListFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".masterListFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".inlineAddFields"] = array();
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".inlineAddFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".editFields"] = array();
$tdataLIST_COMPLETED[".editFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".editFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".editFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".editFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".editFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".editFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".editFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".editFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".editFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".editFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".editFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".editFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".editFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".editFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".editFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".inlineEditFields"] = array();
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".inlineEditFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".updateSelectedFields"] = array();
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".updateSelectedFields"][] = "TAS_ID";


$tdataLIST_COMPLETED[".exportFields"] = array();
$tdataLIST_COMPLETED[".exportFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".exportFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".exportFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".exportFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".exportFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".exportFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".exportFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".exportFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".exportFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".exportFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".exportFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".exportFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".exportFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".exportFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".exportFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".importFields"] = array();
$tdataLIST_COMPLETED[".importFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".importFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".importFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".importFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".importFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".importFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".importFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".importFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".importFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".importFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".importFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".importFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".importFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".importFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".importFields"][] = "TAS_ID";

$tdataLIST_COMPLETED[".printFields"] = array();
$tdataLIST_COMPLETED[".printFields"][] = "APP_UID";
$tdataLIST_COMPLETED[".printFields"][] = "USR_UID";
$tdataLIST_COMPLETED[".printFields"][] = "TAS_UID";
$tdataLIST_COMPLETED[".printFields"][] = "PRO_UID";
$tdataLIST_COMPLETED[".printFields"][] = "APP_NUMBER";
$tdataLIST_COMPLETED[".printFields"][] = "APP_TITLE";
$tdataLIST_COMPLETED[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_COMPLETED[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_COMPLETED[".printFields"][] = "APP_CREATE_DATE";
$tdataLIST_COMPLETED[".printFields"][] = "APP_FINISH_DATE";
$tdataLIST_COMPLETED[".printFields"][] = "DEL_INDEX";
$tdataLIST_COMPLETED[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_COMPLETED[".printFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_COMPLETED[".printFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_COMPLETED[".printFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_COMPLETED[".printFields"][] = "PRO_ID";
$tdataLIST_COMPLETED[".printFields"][] = "USR_ID";
$tdataLIST_COMPLETED[".printFields"][] = "TAS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_UID");
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




	$tdataLIST_COMPLETED["APP_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","USR_UID");
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




	$tdataLIST_COMPLETED["USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","TAS_UID");
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




	$tdataLIST_COMPLETED["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","PRO_UID");
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




	$tdataLIST_COMPLETED["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_NUMBER");
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




	$tdataLIST_COMPLETED["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_TITLE");
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




	$tdataLIST_COMPLETED["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_PRO_TITLE");
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




	$tdataLIST_COMPLETED["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_TAS_TITLE");
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




	$tdataLIST_COMPLETED["APP_TAS_TITLE"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_CREATE_DATE");
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

		$fdata["strField"] = "APP_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CREATE_DATE";

	
	
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




	$tdataLIST_COMPLETED["APP_CREATE_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","APP_FINISH_DATE");
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

		$fdata["strField"] = "APP_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_FINISH_DATE";

	
	
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




	$tdataLIST_COMPLETED["APP_FINISH_DATE"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","DEL_INDEX");
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




	$tdataLIST_COMPLETED["DEL_INDEX"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","DEL_PREVIOUS_USR_UID");
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




	$tdataLIST_COMPLETED["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_CURRENT_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","DEL_CURRENT_USR_USERNAME");
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




	$tdataLIST_COMPLETED["DEL_CURRENT_USR_USERNAME"] = $fdata;
//	DEL_CURRENT_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","DEL_CURRENT_USR_FIRSTNAME");
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




	$tdataLIST_COMPLETED["DEL_CURRENT_USR_FIRSTNAME"] = $fdata;
//	DEL_CURRENT_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","DEL_CURRENT_USR_LASTNAME");
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




	$tdataLIST_COMPLETED["DEL_CURRENT_USR_LASTNAME"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","PRO_ID");
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




	$tdataLIST_COMPLETED["PRO_ID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","USR_ID");
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




	$tdataLIST_COMPLETED["USR_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_COMPLETED";
	$fdata["Label"] = GetFieldLabel("LIST_COMPLETED","TAS_ID");
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




	$tdataLIST_COMPLETED["TAS_ID"] = $fdata;


$tables_data["LIST_COMPLETED"]=&$tdataLIST_COMPLETED;
$field_labels["LIST_COMPLETED"] = &$fieldLabelsLIST_COMPLETED;
$fieldToolTips["LIST_COMPLETED"] = &$fieldToolTipsLIST_COMPLETED;
$placeHolders["LIST_COMPLETED"] = &$placeHoldersLIST_COMPLETED;
$page_titles["LIST_COMPLETED"] = &$pageTitlesLIST_COMPLETED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_COMPLETED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_COMPLETED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_COMPLETED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CREATE_DATE,  	APP_FINISH_DATE,  	DEL_INDEX,  	DEL_PREVIOUS_USR_UID,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	PRO_ID,  	USR_ID,  	TAS_ID";
$proto0["m_strFrom"] = "FROM LIST_COMPLETED";
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
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_COMPLETED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "LIST_COMPLETED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "LIST_COMPLETED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto12["m_sql"] = "PRO_UID";
$proto12["m_srcTableName"] = "LIST_COMPLETED";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto14["m_sql"] = "APP_NUMBER";
$proto14["m_srcTableName"] = "LIST_COMPLETED";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto16["m_sql"] = "APP_TITLE";
$proto16["m_srcTableName"] = "LIST_COMPLETED";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto18["m_sql"] = "APP_PRO_TITLE";
$proto18["m_srcTableName"] = "LIST_COMPLETED";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto20["m_sql"] = "APP_TAS_TITLE";
$proto20["m_srcTableName"] = "LIST_COMPLETED";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto22["m_sql"] = "APP_CREATE_DATE";
$proto22["m_srcTableName"] = "LIST_COMPLETED";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto24["m_sql"] = "APP_FINISH_DATE";
$proto24["m_srcTableName"] = "LIST_COMPLETED";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto26["m_sql"] = "DEL_INDEX";
$proto26["m_srcTableName"] = "LIST_COMPLETED";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto28["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto28["m_srcTableName"] = "LIST_COMPLETED";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_USERNAME",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto30["m_sql"] = "DEL_CURRENT_USR_USERNAME";
$proto30["m_srcTableName"] = "LIST_COMPLETED";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_FIRSTNAME",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto32["m_sql"] = "DEL_CURRENT_USR_FIRSTNAME";
$proto32["m_srcTableName"] = "LIST_COMPLETED";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_LASTNAME",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto34["m_sql"] = "DEL_CURRENT_USR_LASTNAME";
$proto34["m_srcTableName"] = "LIST_COMPLETED";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto36["m_sql"] = "PRO_ID";
$proto36["m_srcTableName"] = "LIST_COMPLETED";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto38["m_sql"] = "USR_ID";
$proto38["m_srcTableName"] = "LIST_COMPLETED";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_COMPLETED",
	"m_srcTableName" => "LIST_COMPLETED"
));

$proto40["m_sql"] = "TAS_ID";
$proto40["m_srcTableName"] = "LIST_COMPLETED";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "LIST_COMPLETED";
$proto43["m_srcTableName"] = "LIST_COMPLETED";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "APP_UID";
$proto43["m_columns"][] = "USR_UID";
$proto43["m_columns"][] = "TAS_UID";
$proto43["m_columns"][] = "PRO_UID";
$proto43["m_columns"][] = "APP_NUMBER";
$proto43["m_columns"][] = "APP_TITLE";
$proto43["m_columns"][] = "APP_PRO_TITLE";
$proto43["m_columns"][] = "APP_TAS_TITLE";
$proto43["m_columns"][] = "APP_CREATE_DATE";
$proto43["m_columns"][] = "APP_FINISH_DATE";
$proto43["m_columns"][] = "DEL_INDEX";
$proto43["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto43["m_columns"][] = "DEL_CURRENT_USR_USERNAME";
$proto43["m_columns"][] = "DEL_CURRENT_USR_FIRSTNAME";
$proto43["m_columns"][] = "DEL_CURRENT_USR_LASTNAME";
$proto43["m_columns"][] = "PRO_ID";
$proto43["m_columns"][] = "USR_ID";
$proto43["m_columns"][] = "TAS_ID";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LIST_COMPLETED";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "LIST_COMPLETED";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LIST_COMPLETED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_COMPLETED = createSqlQuery_LIST_COMPLETED();


	
						;

																		

$tdataLIST_COMPLETED[".sqlquery"] = $queryData_LIST_COMPLETED;

$tableEvents["LIST_COMPLETED"] = new eventsBase;
$tdataLIST_COMPLETED[".hasEvents"] = false;

?>
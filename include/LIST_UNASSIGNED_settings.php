<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_UNASSIGNED = array();
	$tdataLIST_UNASSIGNED[".truncateText"] = true;
	$tdataLIST_UNASSIGNED[".NumberOfChars"] = 20;
	$tdataLIST_UNASSIGNED[".ShortName"] = "LIST_UNASSIGNED";
	$tdataLIST_UNASSIGNED[".OwnerID"] = "";
	$tdataLIST_UNASSIGNED[".OriginalTable"] = "LIST_UNASSIGNED";

//	field labels
$fieldLabelsLIST_UNASSIGNED = array();
$fieldToolTipsLIST_UNASSIGNED = array();
$pageTitlesLIST_UNASSIGNED = array();
$placeHoldersLIST_UNASSIGNED = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_UNASSIGNED["Japanese"] = array();
	$fieldToolTipsLIST_UNASSIGNED["Japanese"] = array();
	$placeHoldersLIST_UNASSIGNED["Japanese"] = array();
	$pageTitlesLIST_UNASSIGNED["Japanese"] = array();
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_UNASSIGNED["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_UNASSIGNED["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_UNASSIGNED["Japanese"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_UNASSIGNED["Japanese"]))
		$tdataLIST_UNASSIGNED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_UNASSIGNED["English"] = array();
	$fieldToolTipsLIST_UNASSIGNED["English"] = array();
	$placeHoldersLIST_UNASSIGNED["English"] = array();
	$pageTitlesLIST_UNASSIGNED["English"] = array();
	$fieldLabelsLIST_UNASSIGNED["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_UNASSIGNED["English"]["APP_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["APP_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_UNASSIGNED["English"]["TAS_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_UNASSIGNED["English"]["PRO_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_UNASSIGNED["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_UNASSIGNED["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_UNASSIGNED["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_UNASSIGNED["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsLIST_UNASSIGNED["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_UNASSIGNED["English"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_UNASSIGNED["English"]["PRO_ID"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_UNASSIGNED["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_UNASSIGNED["English"]["TAS_ID"] = "";
	$placeHoldersLIST_UNASSIGNED["English"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_UNASSIGNED["English"]))
		$tdataLIST_UNASSIGNED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_UNASSIGNED[""] = array();
	$fieldToolTipsLIST_UNASSIGNED[""] = array();
	$placeHoldersLIST_UNASSIGNED[""] = array();
	$pageTitlesLIST_UNASSIGNED[""] = array();
	if (count($fieldToolTipsLIST_UNASSIGNED[""]))
		$tdataLIST_UNASSIGNED[".isUseToolTips"] = true;
}


	$tdataLIST_UNASSIGNED[".NCSearch"] = true;



$tdataLIST_UNASSIGNED[".shortTableName"] = "LIST_UNASSIGNED";
$tdataLIST_UNASSIGNED[".nSecOptions"] = 0;
$tdataLIST_UNASSIGNED[".recsPerRowPrint"] = 1;
$tdataLIST_UNASSIGNED[".mainTableOwnerID"] = "";
$tdataLIST_UNASSIGNED[".moveNext"] = 0;
$tdataLIST_UNASSIGNED[".entityType"] = 0;

$tdataLIST_UNASSIGNED[".strOriginalTableName"] = "LIST_UNASSIGNED";

	



$tdataLIST_UNASSIGNED[".showAddInPopup"] = false;

$tdataLIST_UNASSIGNED[".showEditInPopup"] = false;

$tdataLIST_UNASSIGNED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_UNASSIGNED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_UNASSIGNED[".fieldsForRegister"] = array();
	
$tdataLIST_UNASSIGNED[".listAjax"] = false;

	$tdataLIST_UNASSIGNED[".audit"] = true;

	$tdataLIST_UNASSIGNED[".locking"] = false;

$tdataLIST_UNASSIGNED[".edit"] = true;
$tdataLIST_UNASSIGNED[".afterEditAction"] = 1;
$tdataLIST_UNASSIGNED[".closePopupAfterEdit"] = 1;
$tdataLIST_UNASSIGNED[".afterEditActionDetTable"] = "";

$tdataLIST_UNASSIGNED[".add"] = true;
$tdataLIST_UNASSIGNED[".afterAddAction"] = 1;
$tdataLIST_UNASSIGNED[".closePopupAfterAdd"] = 1;
$tdataLIST_UNASSIGNED[".afterAddActionDetTable"] = "";

$tdataLIST_UNASSIGNED[".list"] = true;

$tdataLIST_UNASSIGNED[".inlineEdit"] = true;


$tdataLIST_UNASSIGNED[".reorderRecordsByHeader"] = true;
$tdataLIST_UNASSIGNED[".createSortByDropdown"] = true;
$tdataLIST_UNASSIGNED[".strSortControlSettingsJSON"] = "";



$tdataLIST_UNASSIGNED[".inlineAdd"] = true;
$tdataLIST_UNASSIGNED[".view"] = true;

$tdataLIST_UNASSIGNED[".import"] = true;

$tdataLIST_UNASSIGNED[".exportTo"] = true;

$tdataLIST_UNASSIGNED[".printFriendly"] = true;

$tdataLIST_UNASSIGNED[".delete"] = true;

$tdataLIST_UNASSIGNED[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_UNASSIGNED[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_UNASSIGNED[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_UNASSIGNED[".searchSaving"] = false;
//

$tdataLIST_UNASSIGNED[".showSearchPanel"] = true;
		$tdataLIST_UNASSIGNED[".flexibleSearch"] = true;

$tdataLIST_UNASSIGNED[".isUseAjaxSuggest"] = true;

$tdataLIST_UNASSIGNED[".rowHighlite"] = true;



				

$tdataLIST_UNASSIGNED[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_UNASSIGNED[".buttonsAdded"] = false;

$tdataLIST_UNASSIGNED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_UNASSIGNED[".isUseTimeForSearch"] = false;





$tdataLIST_UNASSIGNED[".allSearchFields"] = array();
$tdataLIST_UNASSIGNED[".filterFields"] = array();
$tdataLIST_UNASSIGNED[".requiredSearchFields"] = array();

$tdataLIST_UNASSIGNED[".allSearchFields"][] = "APP_UID";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_DUE_DATE";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_UNASSIGNED[".allSearchFields"][] = "TAS_ID";
	

$tdataLIST_UNASSIGNED[".googleLikeFields"] = array();
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".googleLikeFields"][] = "TAS_ID";


$tdataLIST_UNASSIGNED[".advSearchFields"] = array();
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".advSearchFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".tableType"] = "list";

$tdataLIST_UNASSIGNED[".printerPageOrientation"] = 0;
$tdataLIST_UNASSIGNED[".nPrinterPageScale"] = 100;

$tdataLIST_UNASSIGNED[".nPrinterSplitRecords"] = 40;

$tdataLIST_UNASSIGNED[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_UNASSIGNED[".geocodingEnabled"] = false;





$tdataLIST_UNASSIGNED[".listGridLayout"] = 3;


$tdataLIST_UNASSIGNED[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_UNASSIGNED[".pageSize"] = 20;

$tdataLIST_UNASSIGNED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_UNASSIGNED[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_UNASSIGNED[".orderindexes"] = array();

$tdataLIST_UNASSIGNED[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	APP_UPDATE_DATE,  	DEL_PREVIOUS_USR_UID,  	DEL_DELEGATE_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	TAS_ID";
$tdataLIST_UNASSIGNED[".sqlFrom"] = "FROM LIST_UNASSIGNED";
$tdataLIST_UNASSIGNED[".sqlWhereExpr"] = "";
$tdataLIST_UNASSIGNED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_UNASSIGNED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_UNASSIGNED[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_UNASSIGNED[".highlightSearchResults"] = true;

$tableKeysLIST_UNASSIGNED = array();
$tableKeysLIST_UNASSIGNED[] = "APP_UID";
$tableKeysLIST_UNASSIGNED[] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".Keys"] = $tableKeysLIST_UNASSIGNED;

$tdataLIST_UNASSIGNED[".listFields"] = array();
$tdataLIST_UNASSIGNED[".listFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".listFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".listFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".listFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".listFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".listFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".listFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".listFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".listFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".hideMobileList"] = array();


$tdataLIST_UNASSIGNED[".viewFields"] = array();
$tdataLIST_UNASSIGNED[".viewFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".viewFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".viewFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".viewFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".viewFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".viewFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".viewFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".viewFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".viewFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".addFields"] = array();
$tdataLIST_UNASSIGNED[".addFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".addFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".addFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".addFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".addFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".addFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".addFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".addFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".addFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".masterListFields"] = array();
$tdataLIST_UNASSIGNED[".masterListFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".masterListFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".inlineAddFields"] = array();
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".inlineAddFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".editFields"] = array();
$tdataLIST_UNASSIGNED[".editFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".editFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".editFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".editFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".editFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".editFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".editFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".editFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".editFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".inlineEditFields"] = array();
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".inlineEditFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".updateSelectedFields"] = array();
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".updateSelectedFields"][] = "TAS_ID";


$tdataLIST_UNASSIGNED[".exportFields"] = array();
$tdataLIST_UNASSIGNED[".exportFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".exportFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".exportFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".exportFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".exportFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".exportFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".exportFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".exportFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".exportFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".importFields"] = array();
$tdataLIST_UNASSIGNED[".importFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".importFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".importFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".importFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".importFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".importFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".importFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".importFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".importFields"][] = "TAS_ID";

$tdataLIST_UNASSIGNED[".printFields"] = array();
$tdataLIST_UNASSIGNED[".printFields"][] = "APP_UID";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_INDEX";
$tdataLIST_UNASSIGNED[".printFields"][] = "TAS_UID";
$tdataLIST_UNASSIGNED[".printFields"][] = "PRO_UID";
$tdataLIST_UNASSIGNED[".printFields"][] = "APP_NUMBER";
$tdataLIST_UNASSIGNED[".printFields"][] = "APP_TITLE";
$tdataLIST_UNASSIGNED[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_UNASSIGNED[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_UNASSIGNED[".printFields"][] = "APP_UPDATE_DATE";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_DUE_DATE";
$tdataLIST_UNASSIGNED[".printFields"][] = "DEL_PRIORITY";
$tdataLIST_UNASSIGNED[".printFields"][] = "PRO_ID";
$tdataLIST_UNASSIGNED[".printFields"][] = "TAS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","APP_UID");
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




	$tdataLIST_UNASSIGNED["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_INDEX");
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




	$tdataLIST_UNASSIGNED["DEL_INDEX"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","TAS_UID");
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




	$tdataLIST_UNASSIGNED["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","PRO_UID");
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




	$tdataLIST_UNASSIGNED["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","APP_NUMBER");
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




	$tdataLIST_UNASSIGNED["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","APP_TITLE");
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




	$tdataLIST_UNASSIGNED["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","APP_PRO_TITLE");
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




	$tdataLIST_UNASSIGNED["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","APP_TAS_TITLE");
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




	$tdataLIST_UNASSIGNED["APP_TAS_TITLE"] = $fdata;
//	DEL_PREVIOUS_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_PREVIOUS_USR_USERNAME");
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

		$fdata["strField"] = "DEL_PREVIOUS_USR_USERNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PREVIOUS_USR_USERNAME";

	
	
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




	$tdataLIST_UNASSIGNED["DEL_PREVIOUS_USR_USERNAME"] = $fdata;
//	DEL_PREVIOUS_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_PREVIOUS_USR_FIRSTNAME");
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

		$fdata["strField"] = "DEL_PREVIOUS_USR_FIRSTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PREVIOUS_USR_FIRSTNAME";

	
	
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




	$tdataLIST_UNASSIGNED["DEL_PREVIOUS_USR_FIRSTNAME"] = $fdata;
//	DEL_PREVIOUS_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_PREVIOUS_USR_LASTNAME");
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

		$fdata["strField"] = "DEL_PREVIOUS_USR_LASTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PREVIOUS_USR_LASTNAME";

	
	
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




	$tdataLIST_UNASSIGNED["DEL_PREVIOUS_USR_LASTNAME"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","APP_UPDATE_DATE");
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

		$fdata["strField"] = "APP_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UPDATE_DATE";

	
	
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




	$tdataLIST_UNASSIGNED["APP_UPDATE_DATE"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_PREVIOUS_USR_UID");
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




	$tdataLIST_UNASSIGNED["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_DELEGATE_DATE");
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




	$tdataLIST_UNASSIGNED["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_DUE_DATE";
	$fdata["GoodName"] = "DEL_DUE_DATE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_DUE_DATE");
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




	$tdataLIST_UNASSIGNED["DEL_DUE_DATE"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","DEL_PRIORITY");
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




	$tdataLIST_UNASSIGNED["DEL_PRIORITY"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","PRO_ID");
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




	$tdataLIST_UNASSIGNED["PRO_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED","TAS_ID");
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




	$tdataLIST_UNASSIGNED["TAS_ID"] = $fdata;


$tables_data["LIST_UNASSIGNED"]=&$tdataLIST_UNASSIGNED;
$field_labels["LIST_UNASSIGNED"] = &$fieldLabelsLIST_UNASSIGNED;
$fieldToolTips["LIST_UNASSIGNED"] = &$fieldToolTipsLIST_UNASSIGNED;
$placeHolders["LIST_UNASSIGNED"] = &$placeHoldersLIST_UNASSIGNED;
$page_titles["LIST_UNASSIGNED"] = &$pageTitlesLIST_UNASSIGNED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_UNASSIGNED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_UNASSIGNED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_UNASSIGNED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	APP_UPDATE_DATE,  	DEL_PREVIOUS_USR_UID,  	DEL_DELEGATE_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	TAS_ID";
$proto0["m_strFrom"] = "FROM LIST_UNASSIGNED";
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
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_UNASSIGNED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "LIST_UNASSIGNED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "LIST_UNASSIGNED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto12["m_sql"] = "PRO_UID";
$proto12["m_srcTableName"] = "LIST_UNASSIGNED";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto14["m_sql"] = "APP_NUMBER";
$proto14["m_srcTableName"] = "LIST_UNASSIGNED";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto16["m_sql"] = "APP_TITLE";
$proto16["m_srcTableName"] = "LIST_UNASSIGNED";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto18["m_sql"] = "APP_PRO_TITLE";
$proto18["m_srcTableName"] = "LIST_UNASSIGNED";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto20["m_sql"] = "APP_TAS_TITLE";
$proto20["m_srcTableName"] = "LIST_UNASSIGNED";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_USERNAME",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto22["m_sql"] = "DEL_PREVIOUS_USR_USERNAME";
$proto22["m_srcTableName"] = "LIST_UNASSIGNED";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_FIRSTNAME",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto24["m_sql"] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto24["m_srcTableName"] = "LIST_UNASSIGNED";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_LASTNAME",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto26["m_sql"] = "DEL_PREVIOUS_USR_LASTNAME";
$proto26["m_srcTableName"] = "LIST_UNASSIGNED";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto28["m_sql"] = "APP_UPDATE_DATE";
$proto28["m_srcTableName"] = "LIST_UNASSIGNED";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto30["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto30["m_srcTableName"] = "LIST_UNASSIGNED";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto32["m_sql"] = "DEL_DELEGATE_DATE";
$proto32["m_srcTableName"] = "LIST_UNASSIGNED";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DUE_DATE",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto34["m_sql"] = "DEL_DUE_DATE";
$proto34["m_srcTableName"] = "LIST_UNASSIGNED";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto36["m_sql"] = "DEL_PRIORITY";
$proto36["m_srcTableName"] = "LIST_UNASSIGNED";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto38["m_sql"] = "PRO_ID";
$proto38["m_srcTableName"] = "LIST_UNASSIGNED";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_UNASSIGNED",
	"m_srcTableName" => "LIST_UNASSIGNED"
));

$proto40["m_sql"] = "TAS_ID";
$proto40["m_srcTableName"] = "LIST_UNASSIGNED";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "LIST_UNASSIGNED";
$proto43["m_srcTableName"] = "LIST_UNASSIGNED";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "APP_UID";
$proto43["m_columns"][] = "DEL_INDEX";
$proto43["m_columns"][] = "TAS_UID";
$proto43["m_columns"][] = "PRO_UID";
$proto43["m_columns"][] = "APP_NUMBER";
$proto43["m_columns"][] = "APP_TITLE";
$proto43["m_columns"][] = "APP_PRO_TITLE";
$proto43["m_columns"][] = "APP_TAS_TITLE";
$proto43["m_columns"][] = "DEL_PREVIOUS_USR_USERNAME";
$proto43["m_columns"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto43["m_columns"][] = "DEL_PREVIOUS_USR_LASTNAME";
$proto43["m_columns"][] = "APP_UPDATE_DATE";
$proto43["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto43["m_columns"][] = "DEL_DELEGATE_DATE";
$proto43["m_columns"][] = "DEL_DUE_DATE";
$proto43["m_columns"][] = "DEL_PRIORITY";
$proto43["m_columns"][] = "PRO_ID";
$proto43["m_columns"][] = "TAS_ID";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LIST_UNASSIGNED";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "LIST_UNASSIGNED";
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
$proto0["m_srcTableName"]="LIST_UNASSIGNED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_UNASSIGNED = createSqlQuery_LIST_UNASSIGNED();


	
						;

																		

$tdataLIST_UNASSIGNED[".sqlquery"] = $queryData_LIST_UNASSIGNED;

$tableEvents["LIST_UNASSIGNED"] = new eventsBase;
$tdataLIST_UNASSIGNED[".hasEvents"] = false;

?>
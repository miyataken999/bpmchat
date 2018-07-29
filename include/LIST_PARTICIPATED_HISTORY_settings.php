<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_PARTICIPATED_HISTORY = array();
	$tdataLIST_PARTICIPATED_HISTORY[".truncateText"] = true;
	$tdataLIST_PARTICIPATED_HISTORY[".NumberOfChars"] = 20;
	$tdataLIST_PARTICIPATED_HISTORY[".ShortName"] = "LIST_PARTICIPATED_HISTORY";
	$tdataLIST_PARTICIPATED_HISTORY[".OwnerID"] = "";
	$tdataLIST_PARTICIPATED_HISTORY[".OriginalTable"] = "LIST_PARTICIPATED_HISTORY";

//	field labels
$fieldLabelsLIST_PARTICIPATED_HISTORY = array();
$fieldToolTipsLIST_PARTICIPATED_HISTORY = array();
$pageTitlesLIST_PARTICIPATED_HISTORY = array();
$placeHoldersLIST_PARTICIPATED_HISTORY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"] = array();
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"] = array();
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"] = array();
	$pageTitlesLIST_PARTICIPATED_HISTORY["Japanese"] = array();
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["USR_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["Japanese"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_PARTICIPATED_HISTORY["Japanese"]))
		$tdataLIST_PARTICIPATED_HISTORY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"] = array();
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"] = array();
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"] = array();
	$pageTitlesLIST_PARTICIPATED_HISTORY["English"] = array();
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["APP_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["APP_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["TAS_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["PRO_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["PRO_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["USR_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["USR_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_HISTORY["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]["TAS_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_HISTORY["English"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_PARTICIPATED_HISTORY["English"]))
		$tdataLIST_PARTICIPATED_HISTORY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_PARTICIPATED_HISTORY[""] = array();
	$fieldToolTipsLIST_PARTICIPATED_HISTORY[""] = array();
	$placeHoldersLIST_PARTICIPATED_HISTORY[""] = array();
	$pageTitlesLIST_PARTICIPATED_HISTORY[""] = array();
	if (count($fieldToolTipsLIST_PARTICIPATED_HISTORY[""]))
		$tdataLIST_PARTICIPATED_HISTORY[".isUseToolTips"] = true;
}


	$tdataLIST_PARTICIPATED_HISTORY[".NCSearch"] = true;



$tdataLIST_PARTICIPATED_HISTORY[".shortTableName"] = "LIST_PARTICIPATED_HISTORY";
$tdataLIST_PARTICIPATED_HISTORY[".nSecOptions"] = 0;
$tdataLIST_PARTICIPATED_HISTORY[".recsPerRowPrint"] = 1;
$tdataLIST_PARTICIPATED_HISTORY[".mainTableOwnerID"] = "";
$tdataLIST_PARTICIPATED_HISTORY[".moveNext"] = 0;
$tdataLIST_PARTICIPATED_HISTORY[".entityType"] = 0;

$tdataLIST_PARTICIPATED_HISTORY[".strOriginalTableName"] = "LIST_PARTICIPATED_HISTORY";

	



$tdataLIST_PARTICIPATED_HISTORY[".showAddInPopup"] = false;

$tdataLIST_PARTICIPATED_HISTORY[".showEditInPopup"] = false;

$tdataLIST_PARTICIPATED_HISTORY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_PARTICIPATED_HISTORY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_PARTICIPATED_HISTORY[".fieldsForRegister"] = array();
	
$tdataLIST_PARTICIPATED_HISTORY[".listAjax"] = false;

	$tdataLIST_PARTICIPATED_HISTORY[".audit"] = true;

	$tdataLIST_PARTICIPATED_HISTORY[".locking"] = false;

$tdataLIST_PARTICIPATED_HISTORY[".edit"] = true;
$tdataLIST_PARTICIPATED_HISTORY[".afterEditAction"] = 1;
$tdataLIST_PARTICIPATED_HISTORY[".closePopupAfterEdit"] = 1;
$tdataLIST_PARTICIPATED_HISTORY[".afterEditActionDetTable"] = "";

$tdataLIST_PARTICIPATED_HISTORY[".add"] = true;
$tdataLIST_PARTICIPATED_HISTORY[".afterAddAction"] = 1;
$tdataLIST_PARTICIPATED_HISTORY[".closePopupAfterAdd"] = 1;
$tdataLIST_PARTICIPATED_HISTORY[".afterAddActionDetTable"] = "";

$tdataLIST_PARTICIPATED_HISTORY[".list"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".inlineEdit"] = true;


$tdataLIST_PARTICIPATED_HISTORY[".reorderRecordsByHeader"] = true;
$tdataLIST_PARTICIPATED_HISTORY[".createSortByDropdown"] = true;
$tdataLIST_PARTICIPATED_HISTORY[".strSortControlSettingsJSON"] = "";



$tdataLIST_PARTICIPATED_HISTORY[".inlineAdd"] = true;
$tdataLIST_PARTICIPATED_HISTORY[".view"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".import"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".exportTo"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".printFriendly"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".delete"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_PARTICIPATED_HISTORY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_PARTICIPATED_HISTORY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_PARTICIPATED_HISTORY[".searchSaving"] = false;
//

$tdataLIST_PARTICIPATED_HISTORY[".showSearchPanel"] = true;
		$tdataLIST_PARTICIPATED_HISTORY[".flexibleSearch"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".isUseAjaxSuggest"] = true;

$tdataLIST_PARTICIPATED_HISTORY[".rowHighlite"] = true;



				

$tdataLIST_PARTICIPATED_HISTORY[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_PARTICIPATED_HISTORY[".buttonsAdded"] = false;

$tdataLIST_PARTICIPATED_HISTORY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_PARTICIPATED_HISTORY[".isUseTimeForSearch"] = false;





$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".filterFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".requiredSearchFields"] = array();

$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "APP_UID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "USR_UID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_DUE_DATE";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "USR_ID";
	$tdataLIST_PARTICIPATED_HISTORY[".allSearchFields"][] = "TAS_ID";
	

$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".googleLikeFields"][] = "TAS_ID";


$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".advSearchFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".tableType"] = "list";

$tdataLIST_PARTICIPATED_HISTORY[".printerPageOrientation"] = 0;
$tdataLIST_PARTICIPATED_HISTORY[".nPrinterPageScale"] = 100;

$tdataLIST_PARTICIPATED_HISTORY[".nPrinterSplitRecords"] = 40;

$tdataLIST_PARTICIPATED_HISTORY[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_PARTICIPATED_HISTORY[".geocodingEnabled"] = false;





$tdataLIST_PARTICIPATED_HISTORY[".listGridLayout"] = 3;


$tdataLIST_PARTICIPATED_HISTORY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_PARTICIPATED_HISTORY[".pageSize"] = 20;

$tdataLIST_PARTICIPATED_HISTORY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_PARTICIPATED_HISTORY[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_PARTICIPATED_HISTORY[".orderindexes"] = array();

$tdataLIST_PARTICIPATED_HISTORY[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID";
$tdataLIST_PARTICIPATED_HISTORY[".sqlFrom"] = "FROM LIST_PARTICIPATED_HISTORY";
$tdataLIST_PARTICIPATED_HISTORY[".sqlWhereExpr"] = "";
$tdataLIST_PARTICIPATED_HISTORY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_PARTICIPATED_HISTORY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_PARTICIPATED_HISTORY[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_PARTICIPATED_HISTORY[".highlightSearchResults"] = true;

$tableKeysLIST_PARTICIPATED_HISTORY = array();
$tableKeysLIST_PARTICIPATED_HISTORY[] = "APP_UID";
$tableKeysLIST_PARTICIPATED_HISTORY[] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".Keys"] = $tableKeysLIST_PARTICIPATED_HISTORY;

$tdataLIST_PARTICIPATED_HISTORY[".listFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".listFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".hideMobileList"] = array();


$tdataLIST_PARTICIPATED_HISTORY[".viewFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".viewFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".addFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".addFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".masterListFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineAddFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".editFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".editFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".inlineEditFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".updateSelectedFields"][] = "TAS_ID";


$tdataLIST_PARTICIPATED_HISTORY[".exportFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".exportFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".importFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".importFields"][] = "TAS_ID";

$tdataLIST_PARTICIPATED_HISTORY[".printFields"] = array();
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_HISTORY[".printFields"][] = "TAS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","APP_UID");
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




	$tdataLIST_PARTICIPATED_HISTORY["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_INDEX");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_INDEX"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","USR_UID");
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




	$tdataLIST_PARTICIPATED_HISTORY["USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","TAS_UID");
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




	$tdataLIST_PARTICIPATED_HISTORY["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","PRO_UID");
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




	$tdataLIST_PARTICIPATED_HISTORY["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","APP_NUMBER");
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




	$tdataLIST_PARTICIPATED_HISTORY["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","APP_TITLE");
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




	$tdataLIST_PARTICIPATED_HISTORY["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","APP_PRO_TITLE");
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




	$tdataLIST_PARTICIPATED_HISTORY["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","APP_TAS_TITLE");
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




	$tdataLIST_PARTICIPATED_HISTORY["APP_TAS_TITLE"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_PREVIOUS_USR_UID");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_PREVIOUS_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_PREVIOUS_USR_USERNAME");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_PREVIOUS_USR_USERNAME"] = $fdata;
//	DEL_PREVIOUS_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_PREVIOUS_USR_FIRSTNAME");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_PREVIOUS_USR_FIRSTNAME"] = $fdata;
//	DEL_PREVIOUS_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_PREVIOUS_USR_LASTNAME");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_PREVIOUS_USR_LASTNAME"] = $fdata;
//	DEL_CURRENT_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_CURRENT_USR_USERNAME");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_CURRENT_USR_USERNAME"] = $fdata;
//	DEL_CURRENT_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_CURRENT_USR_FIRSTNAME");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_CURRENT_USR_FIRSTNAME"] = $fdata;
//	DEL_CURRENT_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_CURRENT_USR_LASTNAME");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_CURRENT_USR_LASTNAME"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_DELEGATE_DATE");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_INIT_DATE");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_INIT_DATE"] = $fdata;
//	DEL_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEL_DUE_DATE";
	$fdata["GoodName"] = "DEL_DUE_DATE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_DUE_DATE");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_DUE_DATE"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","DEL_PRIORITY");
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




	$tdataLIST_PARTICIPATED_HISTORY["DEL_PRIORITY"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","PRO_ID");
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




	$tdataLIST_PARTICIPATED_HISTORY["PRO_ID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","USR_ID");
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




	$tdataLIST_PARTICIPATED_HISTORY["USR_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_HISTORY";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_HISTORY","TAS_ID");
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




	$tdataLIST_PARTICIPATED_HISTORY["TAS_ID"] = $fdata;


$tables_data["LIST_PARTICIPATED_HISTORY"]=&$tdataLIST_PARTICIPATED_HISTORY;
$field_labels["LIST_PARTICIPATED_HISTORY"] = &$fieldLabelsLIST_PARTICIPATED_HISTORY;
$fieldToolTips["LIST_PARTICIPATED_HISTORY"] = &$fieldToolTipsLIST_PARTICIPATED_HISTORY;
$placeHolders["LIST_PARTICIPATED_HISTORY"] = &$placeHoldersLIST_PARTICIPATED_HISTORY;
$page_titles["LIST_PARTICIPATED_HISTORY"] = &$pageTitlesLIST_PARTICIPATED_HISTORY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_PARTICIPATED_HISTORY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_PARTICIPATED_HISTORY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_PARTICIPATED_HISTORY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID";
$proto0["m_strFrom"] = "FROM LIST_PARTICIPATED_HISTORY";
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
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto10["m_sql"] = "USR_UID";
$proto10["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto12["m_sql"] = "TAS_UID";
$proto12["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto14["m_sql"] = "PRO_UID";
$proto14["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto16["m_sql"] = "APP_NUMBER";
$proto16["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto18["m_sql"] = "APP_TITLE";
$proto18["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto20["m_sql"] = "APP_PRO_TITLE";
$proto20["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto22["m_sql"] = "APP_TAS_TITLE";
$proto22["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto24["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto24["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_USERNAME",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto26["m_sql"] = "DEL_PREVIOUS_USR_USERNAME";
$proto26["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_FIRSTNAME",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto28["m_sql"] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto28["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_LASTNAME",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto30["m_sql"] = "DEL_PREVIOUS_USR_LASTNAME";
$proto30["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_USERNAME",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto32["m_sql"] = "DEL_CURRENT_USR_USERNAME";
$proto32["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_FIRSTNAME",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto34["m_sql"] = "DEL_CURRENT_USR_FIRSTNAME";
$proto34["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_LASTNAME",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto36["m_sql"] = "DEL_CURRENT_USR_LASTNAME";
$proto36["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto38["m_sql"] = "DEL_DELEGATE_DATE";
$proto38["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto40["m_sql"] = "DEL_INIT_DATE";
$proto40["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DUE_DATE",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto42["m_sql"] = "DEL_DUE_DATE";
$proto42["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto44["m_sql"] = "DEL_PRIORITY";
$proto44["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto46["m_sql"] = "PRO_ID";
$proto46["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto48["m_sql"] = "USR_ID";
$proto48["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_PARTICIPATED_HISTORY",
	"m_srcTableName" => "LIST_PARTICIPATED_HISTORY"
));

$proto50["m_sql"] = "TAS_ID";
$proto50["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "LIST_PARTICIPATED_HISTORY";
$proto53["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "APP_UID";
$proto53["m_columns"][] = "DEL_INDEX";
$proto53["m_columns"][] = "USR_UID";
$proto53["m_columns"][] = "TAS_UID";
$proto53["m_columns"][] = "PRO_UID";
$proto53["m_columns"][] = "APP_NUMBER";
$proto53["m_columns"][] = "APP_TITLE";
$proto53["m_columns"][] = "APP_PRO_TITLE";
$proto53["m_columns"][] = "APP_TAS_TITLE";
$proto53["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto53["m_columns"][] = "DEL_PREVIOUS_USR_USERNAME";
$proto53["m_columns"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto53["m_columns"][] = "DEL_PREVIOUS_USR_LASTNAME";
$proto53["m_columns"][] = "DEL_CURRENT_USR_USERNAME";
$proto53["m_columns"][] = "DEL_CURRENT_USR_FIRSTNAME";
$proto53["m_columns"][] = "DEL_CURRENT_USR_LASTNAME";
$proto53["m_columns"][] = "DEL_DELEGATE_DATE";
$proto53["m_columns"][] = "DEL_INIT_DATE";
$proto53["m_columns"][] = "DEL_DUE_DATE";
$proto53["m_columns"][] = "DEL_PRIORITY";
$proto53["m_columns"][] = "PRO_ID";
$proto53["m_columns"][] = "USR_ID";
$proto53["m_columns"][] = "TAS_ID";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LIST_PARTICIPATED_HISTORY";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "LIST_PARTICIPATED_HISTORY";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LIST_PARTICIPATED_HISTORY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_PARTICIPATED_HISTORY = createSqlQuery_LIST_PARTICIPATED_HISTORY();


	
						;

																							

$tdataLIST_PARTICIPATED_HISTORY[".sqlquery"] = $queryData_LIST_PARTICIPATED_HISTORY;

$tableEvents["LIST_PARTICIPATED_HISTORY"] = new eventsBase;
$tdataLIST_PARTICIPATED_HISTORY[".hasEvents"] = false;

?>
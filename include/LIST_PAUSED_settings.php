<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_PAUSED = array();
	$tdataLIST_PAUSED[".truncateText"] = true;
	$tdataLIST_PAUSED[".NumberOfChars"] = 20;
	$tdataLIST_PAUSED[".ShortName"] = "LIST_PAUSED";
	$tdataLIST_PAUSED[".OwnerID"] = "";
	$tdataLIST_PAUSED[".OriginalTable"] = "LIST_PAUSED";

//	field labels
$fieldLabelsLIST_PAUSED = array();
$fieldToolTipsLIST_PAUSED = array();
$pageTitlesLIST_PAUSED = array();
$placeHoldersLIST_PAUSED = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_PAUSED["Japanese"] = array();
	$fieldToolTipsLIST_PAUSED["Japanese"] = array();
	$placeHoldersLIST_PAUSED["Japanese"] = array();
	$pageTitlesLIST_PAUSED["Japanese"] = array();
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_PAUSED["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_PAUSED_DATE"] = "アプリは、日付を一時停止しました";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_PAUSED_DATE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_PAUSED_DATE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["APP_RESTART_DATE"] = "アプリの再起動日";
	$fieldToolTipsLIST_PAUSED["Japanese"]["APP_RESTART_DATE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["APP_RESTART_DATE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_PAUSED["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["USR_ID"] = "";
	$fieldLabelsLIST_PAUSED["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_PAUSED["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_PAUSED["Japanese"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_PAUSED["Japanese"]))
		$tdataLIST_PAUSED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_PAUSED["English"] = array();
	$fieldToolTipsLIST_PAUSED["English"] = array();
	$placeHoldersLIST_PAUSED["English"] = array();
	$pageTitlesLIST_PAUSED["English"] = array();
	$fieldLabelsLIST_PAUSED["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_PAUSED["English"]["APP_UID"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_UID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_PAUSED["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_PAUSED["English"]["USR_UID"] = "";
	$placeHoldersLIST_PAUSED["English"]["USR_UID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_PAUSED["English"]["TAS_UID"] = "";
	$placeHoldersLIST_PAUSED["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_PAUSED["English"]["PRO_UID"] = "";
	$placeHoldersLIST_PAUSED["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_PAUSED["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_PAUSED["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_PAUSED["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_PAUSED["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_PAUSED["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["APP_PAUSED_DATE"] = "アプリは、日付を一時停止しました";
	$fieldToolTipsLIST_PAUSED["English"]["APP_PAUSED_DATE"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_PAUSED_DATE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["APP_RESTART_DATE"] = "アプリの再起動日";
	$fieldToolTipsLIST_PAUSED["English"]["APP_RESTART_DATE"] = "";
	$placeHoldersLIST_PAUSED["English"]["APP_RESTART_DATE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_PAUSED["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_PAUSED["English"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_PAUSED["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_PAUSED["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_PAUSED["English"]["PRO_ID"] = "";
	$placeHoldersLIST_PAUSED["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_PAUSED["English"]["USR_ID"] = "";
	$placeHoldersLIST_PAUSED["English"]["USR_ID"] = "";
	$fieldLabelsLIST_PAUSED["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_PAUSED["English"]["TAS_ID"] = "";
	$placeHoldersLIST_PAUSED["English"]["TAS_ID"] = "";
	if (count($fieldToolTipsLIST_PAUSED["English"]))
		$tdataLIST_PAUSED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_PAUSED[""] = array();
	$fieldToolTipsLIST_PAUSED[""] = array();
	$placeHoldersLIST_PAUSED[""] = array();
	$pageTitlesLIST_PAUSED[""] = array();
	if (count($fieldToolTipsLIST_PAUSED[""]))
		$tdataLIST_PAUSED[".isUseToolTips"] = true;
}


	$tdataLIST_PAUSED[".NCSearch"] = true;



$tdataLIST_PAUSED[".shortTableName"] = "LIST_PAUSED";
$tdataLIST_PAUSED[".nSecOptions"] = 0;
$tdataLIST_PAUSED[".recsPerRowPrint"] = 1;
$tdataLIST_PAUSED[".mainTableOwnerID"] = "";
$tdataLIST_PAUSED[".moveNext"] = 0;
$tdataLIST_PAUSED[".entityType"] = 0;

$tdataLIST_PAUSED[".strOriginalTableName"] = "LIST_PAUSED";

	



$tdataLIST_PAUSED[".showAddInPopup"] = false;

$tdataLIST_PAUSED[".showEditInPopup"] = false;

$tdataLIST_PAUSED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_PAUSED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_PAUSED[".fieldsForRegister"] = array();
	
$tdataLIST_PAUSED[".listAjax"] = false;

	$tdataLIST_PAUSED[".audit"] = true;

	$tdataLIST_PAUSED[".locking"] = false;

$tdataLIST_PAUSED[".edit"] = true;
$tdataLIST_PAUSED[".afterEditAction"] = 1;
$tdataLIST_PAUSED[".closePopupAfterEdit"] = 1;
$tdataLIST_PAUSED[".afterEditActionDetTable"] = "";

$tdataLIST_PAUSED[".add"] = true;
$tdataLIST_PAUSED[".afterAddAction"] = 1;
$tdataLIST_PAUSED[".closePopupAfterAdd"] = 1;
$tdataLIST_PAUSED[".afterAddActionDetTable"] = "";

$tdataLIST_PAUSED[".list"] = true;

$tdataLIST_PAUSED[".inlineEdit"] = true;


$tdataLIST_PAUSED[".reorderRecordsByHeader"] = true;
$tdataLIST_PAUSED[".createSortByDropdown"] = true;
$tdataLIST_PAUSED[".strSortControlSettingsJSON"] = "";



$tdataLIST_PAUSED[".inlineAdd"] = true;
$tdataLIST_PAUSED[".view"] = true;

$tdataLIST_PAUSED[".import"] = true;

$tdataLIST_PAUSED[".exportTo"] = true;

$tdataLIST_PAUSED[".printFriendly"] = true;

$tdataLIST_PAUSED[".delete"] = true;

$tdataLIST_PAUSED[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_PAUSED[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_PAUSED[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_PAUSED[".searchSaving"] = false;
//

$tdataLIST_PAUSED[".showSearchPanel"] = true;
		$tdataLIST_PAUSED[".flexibleSearch"] = true;

$tdataLIST_PAUSED[".isUseAjaxSuggest"] = true;

$tdataLIST_PAUSED[".rowHighlite"] = true;



				

$tdataLIST_PAUSED[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_PAUSED[".buttonsAdded"] = false;

$tdataLIST_PAUSED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_PAUSED[".isUseTimeForSearch"] = false;





$tdataLIST_PAUSED[".allSearchFields"] = array();
$tdataLIST_PAUSED[".filterFields"] = array();
$tdataLIST_PAUSED[".requiredSearchFields"] = array();

$tdataLIST_PAUSED[".allSearchFields"][] = "APP_UID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_PAUSED[".allSearchFields"][] = "USR_UID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_PAUSED[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "APP_PAUSED_DATE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "APP_RESTART_DATE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_DUE_DATE";
	$tdataLIST_PAUSED[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataLIST_PAUSED[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "USR_ID";
	$tdataLIST_PAUSED[".allSearchFields"][] = "TAS_ID";
	

$tdataLIST_PAUSED[".googleLikeFields"] = array();
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_UID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".googleLikeFields"][] = "USR_UID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "USR_ID";
$tdataLIST_PAUSED[".googleLikeFields"][] = "TAS_ID";


$tdataLIST_PAUSED[".advSearchFields"] = array();
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_UID";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".advSearchFields"][] = "USR_UID";
$tdataLIST_PAUSED[".advSearchFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".advSearchFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".advSearchFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".advSearchFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".advSearchFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".advSearchFields"][] = "USR_ID";
$tdataLIST_PAUSED[".advSearchFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".tableType"] = "list";

$tdataLIST_PAUSED[".printerPageOrientation"] = 0;
$tdataLIST_PAUSED[".nPrinterPageScale"] = 100;

$tdataLIST_PAUSED[".nPrinterSplitRecords"] = 40;

$tdataLIST_PAUSED[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_PAUSED[".geocodingEnabled"] = false;





$tdataLIST_PAUSED[".listGridLayout"] = 3;


$tdataLIST_PAUSED[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_PAUSED[".pageSize"] = 20;

$tdataLIST_PAUSED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_PAUSED[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_PAUSED[".orderindexes"] = array();

$tdataLIST_PAUSED[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_PAUSED_DATE,  	APP_RESTART_DATE,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID";
$tdataLIST_PAUSED[".sqlFrom"] = "FROM LIST_PAUSED";
$tdataLIST_PAUSED[".sqlWhereExpr"] = "";
$tdataLIST_PAUSED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_PAUSED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_PAUSED[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_PAUSED[".highlightSearchResults"] = true;

$tableKeysLIST_PAUSED = array();
$tableKeysLIST_PAUSED[] = "APP_UID";
$tableKeysLIST_PAUSED[] = "DEL_INDEX";
$tdataLIST_PAUSED[".Keys"] = $tableKeysLIST_PAUSED;

$tdataLIST_PAUSED[".listFields"] = array();
$tdataLIST_PAUSED[".listFields"][] = "APP_UID";
$tdataLIST_PAUSED[".listFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".listFields"][] = "USR_UID";
$tdataLIST_PAUSED[".listFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".listFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".listFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".listFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".listFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".listFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".listFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".listFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".listFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".listFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".listFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".listFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".listFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".listFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".listFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".listFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".listFields"][] = "USR_ID";
$tdataLIST_PAUSED[".listFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".hideMobileList"] = array();


$tdataLIST_PAUSED[".viewFields"] = array();
$tdataLIST_PAUSED[".viewFields"][] = "APP_UID";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".viewFields"][] = "USR_UID";
$tdataLIST_PAUSED[".viewFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".viewFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".viewFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".viewFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".viewFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".viewFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".viewFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".viewFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".viewFields"][] = "USR_ID";
$tdataLIST_PAUSED[".viewFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".addFields"] = array();
$tdataLIST_PAUSED[".addFields"][] = "APP_UID";
$tdataLIST_PAUSED[".addFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".addFields"][] = "USR_UID";
$tdataLIST_PAUSED[".addFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".addFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".addFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".addFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".addFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".addFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".addFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".addFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".addFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".addFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".addFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".addFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".addFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".addFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".addFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".addFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".addFields"][] = "USR_ID";
$tdataLIST_PAUSED[".addFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".masterListFields"] = array();
$tdataLIST_PAUSED[".masterListFields"][] = "APP_UID";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".masterListFields"][] = "USR_UID";
$tdataLIST_PAUSED[".masterListFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".masterListFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".masterListFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".masterListFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".masterListFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".masterListFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".masterListFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".masterListFields"][] = "USR_ID";
$tdataLIST_PAUSED[".masterListFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".inlineAddFields"] = array();
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_UID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".inlineAddFields"][] = "USR_UID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "USR_ID";
$tdataLIST_PAUSED[".inlineAddFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".editFields"] = array();
$tdataLIST_PAUSED[".editFields"][] = "APP_UID";
$tdataLIST_PAUSED[".editFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".editFields"][] = "USR_UID";
$tdataLIST_PAUSED[".editFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".editFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".editFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".editFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".editFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".editFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".editFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".editFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".editFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".editFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".editFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".editFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".editFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".editFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".editFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".editFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".editFields"][] = "USR_ID";
$tdataLIST_PAUSED[".editFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".inlineEditFields"] = array();
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_UID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".inlineEditFields"][] = "USR_UID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "USR_ID";
$tdataLIST_PAUSED[".inlineEditFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".updateSelectedFields"] = array();
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "USR_ID";
$tdataLIST_PAUSED[".updateSelectedFields"][] = "TAS_ID";


$tdataLIST_PAUSED[".exportFields"] = array();
$tdataLIST_PAUSED[".exportFields"][] = "APP_UID";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".exportFields"][] = "USR_UID";
$tdataLIST_PAUSED[".exportFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".exportFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".exportFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".exportFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".exportFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".exportFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".exportFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".exportFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".exportFields"][] = "USR_ID";
$tdataLIST_PAUSED[".exportFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".importFields"] = array();
$tdataLIST_PAUSED[".importFields"][] = "APP_UID";
$tdataLIST_PAUSED[".importFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".importFields"][] = "USR_UID";
$tdataLIST_PAUSED[".importFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".importFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".importFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".importFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".importFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".importFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".importFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".importFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".importFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".importFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".importFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".importFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".importFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".importFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".importFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".importFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".importFields"][] = "USR_ID";
$tdataLIST_PAUSED[".importFields"][] = "TAS_ID";

$tdataLIST_PAUSED[".printFields"] = array();
$tdataLIST_PAUSED[".printFields"][] = "APP_UID";
$tdataLIST_PAUSED[".printFields"][] = "DEL_INDEX";
$tdataLIST_PAUSED[".printFields"][] = "USR_UID";
$tdataLIST_PAUSED[".printFields"][] = "TAS_UID";
$tdataLIST_PAUSED[".printFields"][] = "PRO_UID";
$tdataLIST_PAUSED[".printFields"][] = "APP_NUMBER";
$tdataLIST_PAUSED[".printFields"][] = "APP_TITLE";
$tdataLIST_PAUSED[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_PAUSED[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_PAUSED[".printFields"][] = "APP_PAUSED_DATE";
$tdataLIST_PAUSED[".printFields"][] = "APP_RESTART_DATE";
$tdataLIST_PAUSED[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PAUSED[".printFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PAUSED[".printFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PAUSED[".printFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PAUSED[".printFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PAUSED[".printFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PAUSED[".printFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PAUSED[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PAUSED[".printFields"][] = "DEL_INIT_DATE";
$tdataLIST_PAUSED[".printFields"][] = "DEL_DUE_DATE";
$tdataLIST_PAUSED[".printFields"][] = "DEL_PRIORITY";
$tdataLIST_PAUSED[".printFields"][] = "PRO_ID";
$tdataLIST_PAUSED[".printFields"][] = "USR_ID";
$tdataLIST_PAUSED[".printFields"][] = "TAS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_UID");
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




	$tdataLIST_PAUSED["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_INDEX");
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




	$tdataLIST_PAUSED["DEL_INDEX"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","USR_UID");
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




	$tdataLIST_PAUSED["USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","TAS_UID");
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




	$tdataLIST_PAUSED["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","PRO_UID");
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




	$tdataLIST_PAUSED["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_NUMBER");
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




	$tdataLIST_PAUSED["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_TITLE");
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




	$tdataLIST_PAUSED["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_PRO_TITLE");
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




	$tdataLIST_PAUSED["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_TAS_TITLE");
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




	$tdataLIST_PAUSED["APP_TAS_TITLE"] = $fdata;
//	APP_PAUSED_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_PAUSED_DATE";
	$fdata["GoodName"] = "APP_PAUSED_DATE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_PAUSED_DATE");
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

		$fdata["strField"] = "APP_PAUSED_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PAUSED_DATE";

	
	
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




	$tdataLIST_PAUSED["APP_PAUSED_DATE"] = $fdata;
//	APP_RESTART_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_RESTART_DATE";
	$fdata["GoodName"] = "APP_RESTART_DATE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","APP_RESTART_DATE");
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

		$fdata["strField"] = "APP_RESTART_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_RESTART_DATE";

	
	
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




	$tdataLIST_PAUSED["APP_RESTART_DATE"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_PREVIOUS_USR_UID");
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




	$tdataLIST_PAUSED["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_PREVIOUS_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_PREVIOUS_USR_USERNAME");
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




	$tdataLIST_PAUSED["DEL_PREVIOUS_USR_USERNAME"] = $fdata;
//	DEL_PREVIOUS_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_PREVIOUS_USR_FIRSTNAME");
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




	$tdataLIST_PAUSED["DEL_PREVIOUS_USR_FIRSTNAME"] = $fdata;
//	DEL_PREVIOUS_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_PREVIOUS_USR_LASTNAME");
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




	$tdataLIST_PAUSED["DEL_PREVIOUS_USR_LASTNAME"] = $fdata;
//	DEL_CURRENT_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_CURRENT_USR_USERNAME");
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




	$tdataLIST_PAUSED["DEL_CURRENT_USR_USERNAME"] = $fdata;
//	DEL_CURRENT_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_CURRENT_USR_FIRSTNAME");
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




	$tdataLIST_PAUSED["DEL_CURRENT_USR_FIRSTNAME"] = $fdata;
//	DEL_CURRENT_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_CURRENT_USR_LASTNAME");
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




	$tdataLIST_PAUSED["DEL_CURRENT_USR_LASTNAME"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_DELEGATE_DATE");
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




	$tdataLIST_PAUSED["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_INIT_DATE");
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




	$tdataLIST_PAUSED["DEL_INIT_DATE"] = $fdata;
//	DEL_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DEL_DUE_DATE";
	$fdata["GoodName"] = "DEL_DUE_DATE";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_DUE_DATE");
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




	$tdataLIST_PAUSED["DEL_DUE_DATE"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","DEL_PRIORITY");
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




	$tdataLIST_PAUSED["DEL_PRIORITY"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","PRO_ID");
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




	$tdataLIST_PAUSED["PRO_ID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","USR_ID");
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




	$tdataLIST_PAUSED["USR_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_PAUSED";
	$fdata["Label"] = GetFieldLabel("LIST_PAUSED","TAS_ID");
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




	$tdataLIST_PAUSED["TAS_ID"] = $fdata;


$tables_data["LIST_PAUSED"]=&$tdataLIST_PAUSED;
$field_labels["LIST_PAUSED"] = &$fieldLabelsLIST_PAUSED;
$fieldToolTips["LIST_PAUSED"] = &$fieldToolTipsLIST_PAUSED;
$placeHolders["LIST_PAUSED"] = &$placeHoldersLIST_PAUSED;
$page_titles["LIST_PAUSED"] = &$pageTitlesLIST_PAUSED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_PAUSED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_PAUSED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_PAUSED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_PAUSED_DATE,  	APP_RESTART_DATE,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID";
$proto0["m_strFrom"] = "FROM LIST_PAUSED";
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
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_PAUSED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "LIST_PAUSED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto10["m_sql"] = "USR_UID";
$proto10["m_srcTableName"] = "LIST_PAUSED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto12["m_sql"] = "TAS_UID";
$proto12["m_srcTableName"] = "LIST_PAUSED";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto14["m_sql"] = "PRO_UID";
$proto14["m_srcTableName"] = "LIST_PAUSED";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto16["m_sql"] = "APP_NUMBER";
$proto16["m_srcTableName"] = "LIST_PAUSED";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto18["m_sql"] = "APP_TITLE";
$proto18["m_srcTableName"] = "LIST_PAUSED";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto20["m_sql"] = "APP_PRO_TITLE";
$proto20["m_srcTableName"] = "LIST_PAUSED";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto22["m_sql"] = "APP_TAS_TITLE";
$proto22["m_srcTableName"] = "LIST_PAUSED";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PAUSED_DATE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto24["m_sql"] = "APP_PAUSED_DATE";
$proto24["m_srcTableName"] = "LIST_PAUSED";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_RESTART_DATE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto26["m_sql"] = "APP_RESTART_DATE";
$proto26["m_srcTableName"] = "LIST_PAUSED";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto28["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto28["m_srcTableName"] = "LIST_PAUSED";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_USERNAME",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto30["m_sql"] = "DEL_PREVIOUS_USR_USERNAME";
$proto30["m_srcTableName"] = "LIST_PAUSED";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_FIRSTNAME",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto32["m_sql"] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto32["m_srcTableName"] = "LIST_PAUSED";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_LASTNAME",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto34["m_sql"] = "DEL_PREVIOUS_USR_LASTNAME";
$proto34["m_srcTableName"] = "LIST_PAUSED";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_USERNAME",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto36["m_sql"] = "DEL_CURRENT_USR_USERNAME";
$proto36["m_srcTableName"] = "LIST_PAUSED";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_FIRSTNAME",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto38["m_sql"] = "DEL_CURRENT_USR_FIRSTNAME";
$proto38["m_srcTableName"] = "LIST_PAUSED";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_LASTNAME",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto40["m_sql"] = "DEL_CURRENT_USR_LASTNAME";
$proto40["m_srcTableName"] = "LIST_PAUSED";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto42["m_sql"] = "DEL_DELEGATE_DATE";
$proto42["m_srcTableName"] = "LIST_PAUSED";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto44["m_sql"] = "DEL_INIT_DATE";
$proto44["m_srcTableName"] = "LIST_PAUSED";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DUE_DATE",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto46["m_sql"] = "DEL_DUE_DATE";
$proto46["m_srcTableName"] = "LIST_PAUSED";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto48["m_sql"] = "DEL_PRIORITY";
$proto48["m_srcTableName"] = "LIST_PAUSED";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto50["m_sql"] = "PRO_ID";
$proto50["m_srcTableName"] = "LIST_PAUSED";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto52["m_sql"] = "USR_ID";
$proto52["m_srcTableName"] = "LIST_PAUSED";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_PAUSED",
	"m_srcTableName" => "LIST_PAUSED"
));

$proto54["m_sql"] = "TAS_ID";
$proto54["m_srcTableName"] = "LIST_PAUSED";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "LIST_PAUSED";
$proto57["m_srcTableName"] = "LIST_PAUSED";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "APP_UID";
$proto57["m_columns"][] = "DEL_INDEX";
$proto57["m_columns"][] = "USR_UID";
$proto57["m_columns"][] = "TAS_UID";
$proto57["m_columns"][] = "PRO_UID";
$proto57["m_columns"][] = "APP_NUMBER";
$proto57["m_columns"][] = "APP_TITLE";
$proto57["m_columns"][] = "APP_PRO_TITLE";
$proto57["m_columns"][] = "APP_TAS_TITLE";
$proto57["m_columns"][] = "APP_PAUSED_DATE";
$proto57["m_columns"][] = "APP_RESTART_DATE";
$proto57["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto57["m_columns"][] = "DEL_PREVIOUS_USR_USERNAME";
$proto57["m_columns"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto57["m_columns"][] = "DEL_PREVIOUS_USR_LASTNAME";
$proto57["m_columns"][] = "DEL_CURRENT_USR_USERNAME";
$proto57["m_columns"][] = "DEL_CURRENT_USR_FIRSTNAME";
$proto57["m_columns"][] = "DEL_CURRENT_USR_LASTNAME";
$proto57["m_columns"][] = "DEL_DELEGATE_DATE";
$proto57["m_columns"][] = "DEL_INIT_DATE";
$proto57["m_columns"][] = "DEL_DUE_DATE";
$proto57["m_columns"][] = "DEL_PRIORITY";
$proto57["m_columns"][] = "PRO_ID";
$proto57["m_columns"][] = "USR_ID";
$proto57["m_columns"][] = "TAS_ID";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LIST_PAUSED";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "LIST_PAUSED";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LIST_PAUSED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_PAUSED = createSqlQuery_LIST_PAUSED();


	
						;

																									

$tdataLIST_PAUSED[".sqlquery"] = $queryData_LIST_PAUSED;

$tableEvents["LIST_PAUSED"] = new eventsBase;
$tdataLIST_PAUSED[".hasEvents"] = false;

?>
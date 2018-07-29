<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_PARTICIPATED_LAST = array();
	$tdataLIST_PARTICIPATED_LAST[".truncateText"] = true;
	$tdataLIST_PARTICIPATED_LAST[".NumberOfChars"] = 20;
	$tdataLIST_PARTICIPATED_LAST[".ShortName"] = "LIST_PARTICIPATED_LAST";
	$tdataLIST_PARTICIPATED_LAST[".OwnerID"] = "";
	$tdataLIST_PARTICIPATED_LAST[".OriginalTable"] = "LIST_PARTICIPATED_LAST";

//	field labels
$fieldLabelsLIST_PARTICIPATED_LAST = array();
$fieldToolTipsLIST_PARTICIPATED_LAST = array();
$pageTitlesLIST_PARTICIPATED_LAST = array();
$placeHoldersLIST_PARTICIPATED_LAST = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"] = array();
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"] = array();
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"] = array();
	$pageTitlesLIST_PARTICIPATED_LAST["Japanese"] = array();
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_STATUS"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_TAS_TITLE"] = "デル現在のTASタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_TAS_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_CURRENT_TAS_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["DEL_THREAD_STATUS"] = "デルスレッドステータス";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["USR_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["TAS_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["Japanese"]["APP_STATUS_ID"] = "APP STATUS ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]["APP_STATUS_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["Japanese"]["APP_STATUS_ID"] = "";
	if (count($fieldToolTipsLIST_PARTICIPATED_LAST["Japanese"]))
		$tdataLIST_PARTICIPATED_LAST[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_PARTICIPATED_LAST["English"] = array();
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"] = array();
	$placeHoldersLIST_PARTICIPATED_LAST["English"] = array();
	$pageTitlesLIST_PARTICIPATED_LAST["English"] = array();
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["TAS_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["PRO_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_STATUS"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_STATUS"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_TAS_TITLE"] = "デル現在のTASタイトル";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_TAS_TITLE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_CURRENT_TAS_TITLE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["DEL_THREAD_STATUS"] = "デルスレッドステータス";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["PRO_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["USR_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["USR_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["TAS_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["TAS_ID"] = "";
	$fieldLabelsLIST_PARTICIPATED_LAST["English"]["APP_STATUS_ID"] = "APP STATUS ID";
	$fieldToolTipsLIST_PARTICIPATED_LAST["English"]["APP_STATUS_ID"] = "";
	$placeHoldersLIST_PARTICIPATED_LAST["English"]["APP_STATUS_ID"] = "";
	if (count($fieldToolTipsLIST_PARTICIPATED_LAST["English"]))
		$tdataLIST_PARTICIPATED_LAST[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_PARTICIPATED_LAST[""] = array();
	$fieldToolTipsLIST_PARTICIPATED_LAST[""] = array();
	$placeHoldersLIST_PARTICIPATED_LAST[""] = array();
	$pageTitlesLIST_PARTICIPATED_LAST[""] = array();
	if (count($fieldToolTipsLIST_PARTICIPATED_LAST[""]))
		$tdataLIST_PARTICIPATED_LAST[".isUseToolTips"] = true;
}


	$tdataLIST_PARTICIPATED_LAST[".NCSearch"] = true;



$tdataLIST_PARTICIPATED_LAST[".shortTableName"] = "LIST_PARTICIPATED_LAST";
$tdataLIST_PARTICIPATED_LAST[".nSecOptions"] = 0;
$tdataLIST_PARTICIPATED_LAST[".recsPerRowPrint"] = 1;
$tdataLIST_PARTICIPATED_LAST[".mainTableOwnerID"] = "";
$tdataLIST_PARTICIPATED_LAST[".moveNext"] = 0;
$tdataLIST_PARTICIPATED_LAST[".entityType"] = 0;

$tdataLIST_PARTICIPATED_LAST[".strOriginalTableName"] = "LIST_PARTICIPATED_LAST";

	



$tdataLIST_PARTICIPATED_LAST[".showAddInPopup"] = false;

$tdataLIST_PARTICIPATED_LAST[".showEditInPopup"] = false;

$tdataLIST_PARTICIPATED_LAST[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_PARTICIPATED_LAST[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_PARTICIPATED_LAST[".fieldsForRegister"] = array();
	
$tdataLIST_PARTICIPATED_LAST[".listAjax"] = false;

	$tdataLIST_PARTICIPATED_LAST[".audit"] = true;

	$tdataLIST_PARTICIPATED_LAST[".locking"] = false;

$tdataLIST_PARTICIPATED_LAST[".edit"] = true;
$tdataLIST_PARTICIPATED_LAST[".afterEditAction"] = 1;
$tdataLIST_PARTICIPATED_LAST[".closePopupAfterEdit"] = 1;
$tdataLIST_PARTICIPATED_LAST[".afterEditActionDetTable"] = "";

$tdataLIST_PARTICIPATED_LAST[".add"] = true;
$tdataLIST_PARTICIPATED_LAST[".afterAddAction"] = 1;
$tdataLIST_PARTICIPATED_LAST[".closePopupAfterAdd"] = 1;
$tdataLIST_PARTICIPATED_LAST[".afterAddActionDetTable"] = "";

$tdataLIST_PARTICIPATED_LAST[".list"] = true;

$tdataLIST_PARTICIPATED_LAST[".inlineEdit"] = true;


$tdataLIST_PARTICIPATED_LAST[".reorderRecordsByHeader"] = true;
$tdataLIST_PARTICIPATED_LAST[".createSortByDropdown"] = true;
$tdataLIST_PARTICIPATED_LAST[".strSortControlSettingsJSON"] = "";



$tdataLIST_PARTICIPATED_LAST[".inlineAdd"] = true;
$tdataLIST_PARTICIPATED_LAST[".view"] = true;

$tdataLIST_PARTICIPATED_LAST[".import"] = true;

$tdataLIST_PARTICIPATED_LAST[".exportTo"] = true;

$tdataLIST_PARTICIPATED_LAST[".printFriendly"] = true;

$tdataLIST_PARTICIPATED_LAST[".delete"] = true;

$tdataLIST_PARTICIPATED_LAST[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_PARTICIPATED_LAST[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_PARTICIPATED_LAST[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_PARTICIPATED_LAST[".searchSaving"] = false;
//

$tdataLIST_PARTICIPATED_LAST[".showSearchPanel"] = true;
		$tdataLIST_PARTICIPATED_LAST[".flexibleSearch"] = true;

$tdataLIST_PARTICIPATED_LAST[".isUseAjaxSuggest"] = true;

$tdataLIST_PARTICIPATED_LAST[".rowHighlite"] = true;



				

$tdataLIST_PARTICIPATED_LAST[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_PARTICIPATED_LAST[".buttonsAdded"] = false;

$tdataLIST_PARTICIPATED_LAST[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_PARTICIPATED_LAST[".isUseTimeForSearch"] = false;





$tdataLIST_PARTICIPATED_LAST[".allSearchFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".filterFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".requiredSearchFields"] = array();

$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_UID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "USR_UID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_STATUS";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_CURRENT_TAS_TITLE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_DUE_DATE";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "DEL_THREAD_STATUS";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "USR_ID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "TAS_ID";
	$tdataLIST_PARTICIPATED_LAST[".allSearchFields"][] = "APP_STATUS_ID";
	

$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".googleLikeFields"][] = "APP_STATUS_ID";


$tdataLIST_PARTICIPATED_LAST[".advSearchFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".advSearchFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".tableType"] = "list";

$tdataLIST_PARTICIPATED_LAST[".printerPageOrientation"] = 0;
$tdataLIST_PARTICIPATED_LAST[".nPrinterPageScale"] = 100;

$tdataLIST_PARTICIPATED_LAST[".nPrinterSplitRecords"] = 40;

$tdataLIST_PARTICIPATED_LAST[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_PARTICIPATED_LAST[".geocodingEnabled"] = false;





$tdataLIST_PARTICIPATED_LAST[".listGridLayout"] = 3;


$tdataLIST_PARTICIPATED_LAST[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_PARTICIPATED_LAST[".pageSize"] = 20;

$tdataLIST_PARTICIPATED_LAST[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_PARTICIPATED_LAST[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_PARTICIPATED_LAST[".orderindexes"] = array();

$tdataLIST_PARTICIPATED_LAST[".sqlHead"] = "SELECT APP_UID,  	USR_UID,  	DEL_INDEX,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_STATUS,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_CURRENT_TAS_TITLE,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	DEL_THREAD_STATUS,  	PRO_ID,  	USR_ID,  	TAS_ID,  	APP_STATUS_ID";
$tdataLIST_PARTICIPATED_LAST[".sqlFrom"] = "FROM LIST_PARTICIPATED_LAST";
$tdataLIST_PARTICIPATED_LAST[".sqlWhereExpr"] = "";
$tdataLIST_PARTICIPATED_LAST[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_PARTICIPATED_LAST[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_PARTICIPATED_LAST[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_PARTICIPATED_LAST[".highlightSearchResults"] = true;

$tableKeysLIST_PARTICIPATED_LAST = array();
$tableKeysLIST_PARTICIPATED_LAST[] = "APP_UID";
$tableKeysLIST_PARTICIPATED_LAST[] = "USR_UID";
$tableKeysLIST_PARTICIPATED_LAST[] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".Keys"] = $tableKeysLIST_PARTICIPATED_LAST;

$tdataLIST_PARTICIPATED_LAST[".listFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".listFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".hideMobileList"] = array();


$tdataLIST_PARTICIPATED_LAST[".viewFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".viewFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".addFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".addFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".masterListFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".masterListFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".inlineAddFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".editFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".editFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".inlineEditFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".updateSelectedFields"][] = "APP_STATUS_ID";


$tdataLIST_PARTICIPATED_LAST[".exportFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".exportFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".importFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".importFields"][] = "APP_STATUS_ID";

$tdataLIST_PARTICIPATED_LAST[".printFields"] = array();
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_UID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "USR_UID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_INDEX";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "TAS_UID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "PRO_UID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_NUMBER";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_TITLE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_STATUS";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_CURRENT_TAS_TITLE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_INIT_DATE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_DUE_DATE";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_PRIORITY";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "DEL_THREAD_STATUS";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "PRO_ID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "USR_ID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "TAS_ID";
$tdataLIST_PARTICIPATED_LAST[".printFields"][] = "APP_STATUS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_UID");
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




	$tdataLIST_PARTICIPATED_LAST["APP_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","USR_UID");
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




	$tdataLIST_PARTICIPATED_LAST["USR_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_INDEX");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_INDEX"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","TAS_UID");
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




	$tdataLIST_PARTICIPATED_LAST["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","PRO_UID");
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




	$tdataLIST_PARTICIPATED_LAST["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_NUMBER");
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




	$tdataLIST_PARTICIPATED_LAST["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_TITLE");
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




	$tdataLIST_PARTICIPATED_LAST["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_PRO_TITLE");
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




	$tdataLIST_PARTICIPATED_LAST["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_TAS_TITLE");
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




	$tdataLIST_PARTICIPATED_LAST["APP_TAS_TITLE"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_STATUS");
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataLIST_PARTICIPATED_LAST["APP_STATUS"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_PREVIOUS_USR_UID");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_PREVIOUS_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_PREVIOUS_USR_USERNAME");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_PREVIOUS_USR_USERNAME"] = $fdata;
//	DEL_PREVIOUS_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_PREVIOUS_USR_FIRSTNAME");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_PREVIOUS_USR_FIRSTNAME"] = $fdata;
//	DEL_PREVIOUS_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_PREVIOUS_USR_LASTNAME");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_PREVIOUS_USR_LASTNAME"] = $fdata;
//	DEL_CURRENT_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_CURRENT_USR_USERNAME");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_CURRENT_USR_USERNAME"] = $fdata;
//	DEL_CURRENT_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_CURRENT_USR_FIRSTNAME");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_CURRENT_USR_FIRSTNAME"] = $fdata;
//	DEL_CURRENT_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_CURRENT_USR_LASTNAME");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_CURRENT_USR_LASTNAME"] = $fdata;
//	DEL_CURRENT_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEL_CURRENT_TAS_TITLE";
	$fdata["GoodName"] = "DEL_CURRENT_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_CURRENT_TAS_TITLE");
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

		$fdata["strField"] = "DEL_CURRENT_TAS_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_CURRENT_TAS_TITLE";

	
	
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




	$tdataLIST_PARTICIPATED_LAST["DEL_CURRENT_TAS_TITLE"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_DELEGATE_DATE");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_INIT_DATE");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_INIT_DATE"] = $fdata;
//	DEL_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DEL_DUE_DATE";
	$fdata["GoodName"] = "DEL_DUE_DATE";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_DUE_DATE");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_DUE_DATE"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_PRIORITY");
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




	$tdataLIST_PARTICIPATED_LAST["DEL_PRIORITY"] = $fdata;
//	DEL_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DEL_THREAD_STATUS";
	$fdata["GoodName"] = "DEL_THREAD_STATUS";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","DEL_THREAD_STATUS");
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

		$fdata["strField"] = "DEL_THREAD_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_THREAD_STATUS";

	
	
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




	$tdataLIST_PARTICIPATED_LAST["DEL_THREAD_STATUS"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","PRO_ID");
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




	$tdataLIST_PARTICIPATED_LAST["PRO_ID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","USR_ID");
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




	$tdataLIST_PARTICIPATED_LAST["USR_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","TAS_ID");
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




	$tdataLIST_PARTICIPATED_LAST["TAS_ID"] = $fdata;
//	APP_STATUS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "APP_STATUS_ID";
	$fdata["GoodName"] = "APP_STATUS_ID";
	$fdata["ownerTable"] = "LIST_PARTICIPATED_LAST";
	$fdata["Label"] = GetFieldLabel("LIST_PARTICIPATED_LAST","APP_STATUS_ID");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "APP_STATUS_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS_ID";

	
	
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




	$tdataLIST_PARTICIPATED_LAST["APP_STATUS_ID"] = $fdata;


$tables_data["LIST_PARTICIPATED_LAST"]=&$tdataLIST_PARTICIPATED_LAST;
$field_labels["LIST_PARTICIPATED_LAST"] = &$fieldLabelsLIST_PARTICIPATED_LAST;
$fieldToolTips["LIST_PARTICIPATED_LAST"] = &$fieldToolTipsLIST_PARTICIPATED_LAST;
$placeHolders["LIST_PARTICIPATED_LAST"] = &$placeHoldersLIST_PARTICIPATED_LAST;
$page_titles["LIST_PARTICIPATED_LAST"] = &$pageTitlesLIST_PARTICIPATED_LAST;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_PARTICIPATED_LAST"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_PARTICIPATED_LAST"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_PARTICIPATED_LAST()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	USR_UID,  	DEL_INDEX,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_STATUS,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_CURRENT_TAS_TITLE,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	DEL_THREAD_STATUS,  	PRO_ID,  	USR_ID,  	TAS_ID,  	APP_STATUS_ID";
$proto0["m_strFrom"] = "FROM LIST_PARTICIPATED_LAST";
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
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto10["m_sql"] = "DEL_INDEX";
$proto10["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto12["m_sql"] = "TAS_UID";
$proto12["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto14["m_sql"] = "PRO_UID";
$proto14["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto16["m_sql"] = "APP_NUMBER";
$proto16["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto18["m_sql"] = "APP_TITLE";
$proto18["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto20["m_sql"] = "APP_PRO_TITLE";
$proto20["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto22["m_sql"] = "APP_TAS_TITLE";
$proto22["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto24["m_sql"] = "APP_STATUS";
$proto24["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto26["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto26["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_USERNAME",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto28["m_sql"] = "DEL_PREVIOUS_USR_USERNAME";
$proto28["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_FIRSTNAME",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto30["m_sql"] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto30["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_LASTNAME",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto32["m_sql"] = "DEL_PREVIOUS_USR_LASTNAME";
$proto32["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_USERNAME",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto34["m_sql"] = "DEL_CURRENT_USR_USERNAME";
$proto34["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_FIRSTNAME",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto36["m_sql"] = "DEL_CURRENT_USR_FIRSTNAME";
$proto36["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_LASTNAME",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto38["m_sql"] = "DEL_CURRENT_USR_LASTNAME";
$proto38["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_TAS_TITLE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto40["m_sql"] = "DEL_CURRENT_TAS_TITLE";
$proto40["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto42["m_sql"] = "DEL_DELEGATE_DATE";
$proto42["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto44["m_sql"] = "DEL_INIT_DATE";
$proto44["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DUE_DATE",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto46["m_sql"] = "DEL_DUE_DATE";
$proto46["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto48["m_sql"] = "DEL_PRIORITY";
$proto48["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_THREAD_STATUS",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto50["m_sql"] = "DEL_THREAD_STATUS";
$proto50["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto52["m_sql"] = "PRO_ID";
$proto52["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto54["m_sql"] = "USR_ID";
$proto54["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto56["m_sql"] = "TAS_ID";
$proto56["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS_ID",
	"m_strTable" => "LIST_PARTICIPATED_LAST",
	"m_srcTableName" => "LIST_PARTICIPATED_LAST"
));

$proto58["m_sql"] = "APP_STATUS_ID";
$proto58["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "LIST_PARTICIPATED_LAST";
$proto61["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "APP_UID";
$proto61["m_columns"][] = "USR_UID";
$proto61["m_columns"][] = "DEL_INDEX";
$proto61["m_columns"][] = "TAS_UID";
$proto61["m_columns"][] = "PRO_UID";
$proto61["m_columns"][] = "APP_NUMBER";
$proto61["m_columns"][] = "APP_TITLE";
$proto61["m_columns"][] = "APP_PRO_TITLE";
$proto61["m_columns"][] = "APP_TAS_TITLE";
$proto61["m_columns"][] = "APP_STATUS";
$proto61["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto61["m_columns"][] = "DEL_PREVIOUS_USR_USERNAME";
$proto61["m_columns"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto61["m_columns"][] = "DEL_PREVIOUS_USR_LASTNAME";
$proto61["m_columns"][] = "DEL_CURRENT_USR_USERNAME";
$proto61["m_columns"][] = "DEL_CURRENT_USR_FIRSTNAME";
$proto61["m_columns"][] = "DEL_CURRENT_USR_LASTNAME";
$proto61["m_columns"][] = "DEL_CURRENT_TAS_TITLE";
$proto61["m_columns"][] = "DEL_DELEGATE_DATE";
$proto61["m_columns"][] = "DEL_INIT_DATE";
$proto61["m_columns"][] = "DEL_DUE_DATE";
$proto61["m_columns"][] = "DEL_PRIORITY";
$proto61["m_columns"][] = "DEL_THREAD_STATUS";
$proto61["m_columns"][] = "PRO_ID";
$proto61["m_columns"][] = "USR_ID";
$proto61["m_columns"][] = "TAS_ID";
$proto61["m_columns"][] = "APP_STATUS_ID";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "LIST_PARTICIPATED_LAST";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "LIST_PARTICIPATED_LAST";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LIST_PARTICIPATED_LAST";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_PARTICIPATED_LAST = createSqlQuery_LIST_PARTICIPATED_LAST();


	
						;

																											

$tdataLIST_PARTICIPATED_LAST[".sqlquery"] = $queryData_LIST_PARTICIPATED_LAST;

$tableEvents["LIST_PARTICIPATED_LAST"] = new eventsBase;
$tdataLIST_PARTICIPATED_LAST[".hasEvents"] = false;

?>
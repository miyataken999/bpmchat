<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_MY_INBOX = array();
	$tdataLIST_MY_INBOX[".truncateText"] = true;
	$tdataLIST_MY_INBOX[".NumberOfChars"] = 20;
	$tdataLIST_MY_INBOX[".ShortName"] = "LIST_MY_INBOX";
	$tdataLIST_MY_INBOX[".OwnerID"] = "";
	$tdataLIST_MY_INBOX[".OriginalTable"] = "LIST_MY_INBOX";

//	field labels
$fieldLabelsLIST_MY_INBOX = array();
$fieldToolTipsLIST_MY_INBOX = array();
$pageTitlesLIST_MY_INBOX = array();
$placeHoldersLIST_MY_INBOX = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_MY_INBOX["Japanese"] = array();
	$fieldToolTipsLIST_MY_INBOX["Japanese"] = array();
	$placeHoldersLIST_MY_INBOX["Japanese"] = array();
	$pageTitlesLIST_MY_INBOX["Japanese"] = array();
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_UID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["TAS_UID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["PRO_UID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_TITLE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_CREATE_DATE"] = "アプリは、日付を作成します";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_STATUS"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_UID"] = "デル現在USRのuid";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_UID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["PRO_ID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["PRO_ID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["USR_ID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["TAS_ID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["TAS_ID"] = "";
	$fieldLabelsLIST_MY_INBOX["Japanese"]["APP_STATUS_ID"] = "APP STATUS ID";
	$fieldToolTipsLIST_MY_INBOX["Japanese"]["APP_STATUS_ID"] = "";
	$placeHoldersLIST_MY_INBOX["Japanese"]["APP_STATUS_ID"] = "";
	if (count($fieldToolTipsLIST_MY_INBOX["Japanese"]))
		$tdataLIST_MY_INBOX[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_MY_INBOX["English"] = array();
	$fieldToolTipsLIST_MY_INBOX["English"] = array();
	$placeHoldersLIST_MY_INBOX["English"] = array();
	$pageTitlesLIST_MY_INBOX["English"] = array();
	$fieldLabelsLIST_MY_INBOX["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_UID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_MY_INBOX["English"]["USR_UID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["USR_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLIST_MY_INBOX["English"]["TAS_UID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["TAS_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLIST_MY_INBOX["English"]["PRO_UID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["PRO_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_NUMBER"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_NUMBER"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_TITLE"] = "アプリのタイトル";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_TITLE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_TITLE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_PRO_TITLE"] = "アプリのプロのタイトル";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_TAS_TITLE"] = "アプリTASタイトル";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_CREATE_DATE"] = "アプリは、日付を作成します";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_CREATE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_CREATE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_STATUS"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_STATUS"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_INDEX"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_INDEX"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_UID"] = "デル以前USR UID";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_USERNAME"] = "デル以前USRユーザ名";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_USERNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "デル以前USR FIRSTNAME";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "デル以前USR姓";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_PREVIOUS_USR_LASTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_UID"] = "デル現在USRのuid";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_UID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_CURRENT_USR_UID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_USERNAME"] = "デル現在USRユーザ名";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_CURRENT_USR_USERNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "デル現在USR FIRSTNAME";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_CURRENT_USR_FIRSTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_LASTNAME"] = "デル現在USR姓";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_CURRENT_USR_LASTNAME"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_DUE_DATE"] = "デル期日";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_DUE_DATE"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_DUE_DATE"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsLIST_MY_INBOX["English"]["DEL_PRIORITY"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsLIST_MY_INBOX["English"]["PRO_ID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["PRO_ID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_MY_INBOX["English"]["USR_ID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["USR_ID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsLIST_MY_INBOX["English"]["TAS_ID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["TAS_ID"] = "";
	$fieldLabelsLIST_MY_INBOX["English"]["APP_STATUS_ID"] = "APP STATUS ID";
	$fieldToolTipsLIST_MY_INBOX["English"]["APP_STATUS_ID"] = "";
	$placeHoldersLIST_MY_INBOX["English"]["APP_STATUS_ID"] = "";
	if (count($fieldToolTipsLIST_MY_INBOX["English"]))
		$tdataLIST_MY_INBOX[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_MY_INBOX[""] = array();
	$fieldToolTipsLIST_MY_INBOX[""] = array();
	$placeHoldersLIST_MY_INBOX[""] = array();
	$pageTitlesLIST_MY_INBOX[""] = array();
	if (count($fieldToolTipsLIST_MY_INBOX[""]))
		$tdataLIST_MY_INBOX[".isUseToolTips"] = true;
}


	$tdataLIST_MY_INBOX[".NCSearch"] = true;



$tdataLIST_MY_INBOX[".shortTableName"] = "LIST_MY_INBOX";
$tdataLIST_MY_INBOX[".nSecOptions"] = 0;
$tdataLIST_MY_INBOX[".recsPerRowPrint"] = 1;
$tdataLIST_MY_INBOX[".mainTableOwnerID"] = "";
$tdataLIST_MY_INBOX[".moveNext"] = 0;
$tdataLIST_MY_INBOX[".entityType"] = 0;

$tdataLIST_MY_INBOX[".strOriginalTableName"] = "LIST_MY_INBOX";

	



$tdataLIST_MY_INBOX[".showAddInPopup"] = false;

$tdataLIST_MY_INBOX[".showEditInPopup"] = false;

$tdataLIST_MY_INBOX[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_MY_INBOX[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_MY_INBOX[".fieldsForRegister"] = array();
	
$tdataLIST_MY_INBOX[".listAjax"] = false;

	$tdataLIST_MY_INBOX[".audit"] = true;

	$tdataLIST_MY_INBOX[".locking"] = false;

$tdataLIST_MY_INBOX[".edit"] = true;
$tdataLIST_MY_INBOX[".afterEditAction"] = 1;
$tdataLIST_MY_INBOX[".closePopupAfterEdit"] = 1;
$tdataLIST_MY_INBOX[".afterEditActionDetTable"] = "";

$tdataLIST_MY_INBOX[".add"] = true;
$tdataLIST_MY_INBOX[".afterAddAction"] = 1;
$tdataLIST_MY_INBOX[".closePopupAfterAdd"] = 1;
$tdataLIST_MY_INBOX[".afterAddActionDetTable"] = "";

$tdataLIST_MY_INBOX[".list"] = true;

$tdataLIST_MY_INBOX[".inlineEdit"] = true;


$tdataLIST_MY_INBOX[".reorderRecordsByHeader"] = true;
$tdataLIST_MY_INBOX[".createSortByDropdown"] = true;
$tdataLIST_MY_INBOX[".strSortControlSettingsJSON"] = "";



$tdataLIST_MY_INBOX[".inlineAdd"] = true;
$tdataLIST_MY_INBOX[".view"] = true;

$tdataLIST_MY_INBOX[".import"] = true;

$tdataLIST_MY_INBOX[".exportTo"] = true;

$tdataLIST_MY_INBOX[".printFriendly"] = true;

$tdataLIST_MY_INBOX[".delete"] = true;

$tdataLIST_MY_INBOX[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_MY_INBOX[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_MY_INBOX[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_MY_INBOX[".searchSaving"] = false;
//

$tdataLIST_MY_INBOX[".showSearchPanel"] = true;
		$tdataLIST_MY_INBOX[".flexibleSearch"] = true;

$tdataLIST_MY_INBOX[".isUseAjaxSuggest"] = true;

$tdataLIST_MY_INBOX[".rowHighlite"] = true;



				

$tdataLIST_MY_INBOX[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_MY_INBOX[".buttonsAdded"] = false;

$tdataLIST_MY_INBOX[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_MY_INBOX[".isUseTimeForSearch"] = false;





$tdataLIST_MY_INBOX[".allSearchFields"] = array();
$tdataLIST_MY_INBOX[".filterFields"] = array();
$tdataLIST_MY_INBOX[".requiredSearchFields"] = array();

$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_UID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "USR_UID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "TAS_UID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "PRO_UID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_NUMBER";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_TITLE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_STATUS";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_INDEX";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_PREVIOUS_USR_UID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_CURRENT_USR_UID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_DUE_DATE";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "PRO_ID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "USR_ID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "TAS_ID";
	$tdataLIST_MY_INBOX[".allSearchFields"][] = "APP_STATUS_ID";
	

$tdataLIST_MY_INBOX[".googleLikeFields"] = array();
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".googleLikeFields"][] = "APP_STATUS_ID";


$tdataLIST_MY_INBOX[".advSearchFields"] = array();
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".advSearchFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".tableType"] = "list";

$tdataLIST_MY_INBOX[".printerPageOrientation"] = 0;
$tdataLIST_MY_INBOX[".nPrinterPageScale"] = 100;

$tdataLIST_MY_INBOX[".nPrinterSplitRecords"] = 40;

$tdataLIST_MY_INBOX[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_MY_INBOX[".geocodingEnabled"] = false;





$tdataLIST_MY_INBOX[".listGridLayout"] = 3;


$tdataLIST_MY_INBOX[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_MY_INBOX[".pageSize"] = 20;

$tdataLIST_MY_INBOX[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_MY_INBOX[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_MY_INBOX[".orderindexes"] = array();

$tdataLIST_MY_INBOX[".sqlHead"] = "SELECT APP_UID,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CREATE_DATE,  	APP_UPDATE_DATE,  	APP_FINISH_DATE,  	APP_STATUS,  	DEL_INDEX,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_UID,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID,  	APP_STATUS_ID";
$tdataLIST_MY_INBOX[".sqlFrom"] = "FROM LIST_MY_INBOX";
$tdataLIST_MY_INBOX[".sqlWhereExpr"] = "";
$tdataLIST_MY_INBOX[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_MY_INBOX[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_MY_INBOX[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_MY_INBOX[".highlightSearchResults"] = true;

$tableKeysLIST_MY_INBOX = array();
$tableKeysLIST_MY_INBOX[] = "APP_UID";
$tdataLIST_MY_INBOX[".Keys"] = $tableKeysLIST_MY_INBOX;

$tdataLIST_MY_INBOX[".listFields"] = array();
$tdataLIST_MY_INBOX[".listFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".listFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".listFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_STATUS_ID";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".listFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".listFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".listFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".listFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".listFields"][] = "DEL_PRIORITY";

$tdataLIST_MY_INBOX[".hideMobileList"] = array();


$tdataLIST_MY_INBOX[".viewFields"] = array();
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".viewFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".viewFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".viewFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".viewFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".viewFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".viewFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".viewFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".viewFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".addFields"] = array();
$tdataLIST_MY_INBOX[".addFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".addFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".addFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".addFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".addFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".addFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".addFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".addFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".addFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".masterListFields"] = array();
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".masterListFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".masterListFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".masterListFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".inlineAddFields"] = array();
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_STATUS_ID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".inlineAddFields"][] = "DEL_PRIORITY";

$tdataLIST_MY_INBOX[".editFields"] = array();
$tdataLIST_MY_INBOX[".editFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".editFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".editFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".editFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".editFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".editFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".editFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".editFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".editFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".inlineEditFields"] = array();
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_STATUS_ID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".inlineEditFields"][] = "DEL_PRIORITY";

$tdataLIST_MY_INBOX[".updateSelectedFields"] = array();
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".updateSelectedFields"][] = "APP_STATUS_ID";


$tdataLIST_MY_INBOX[".exportFields"] = array();
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".exportFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".exportFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".exportFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".exportFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".exportFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".exportFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".exportFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".exportFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".importFields"] = array();
$tdataLIST_MY_INBOX[".importFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".importFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".importFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".importFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".importFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".importFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".importFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".importFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".importFields"][] = "APP_STATUS_ID";

$tdataLIST_MY_INBOX[".printFields"] = array();
$tdataLIST_MY_INBOX[".printFields"][] = "APP_UID";
$tdataLIST_MY_INBOX[".printFields"][] = "USR_UID";
$tdataLIST_MY_INBOX[".printFields"][] = "TAS_UID";
$tdataLIST_MY_INBOX[".printFields"][] = "PRO_UID";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_NUMBER";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_TITLE";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_PRO_TITLE";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_TAS_TITLE";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_CREATE_DATE";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_UPDATE_DATE";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_FINISH_DATE";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_STATUS";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_INDEX";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_PREVIOUS_USR_UID";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_PREVIOUS_USR_USERNAME";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_PREVIOUS_USR_LASTNAME";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_CURRENT_USR_UID";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_CURRENT_USR_USERNAME";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_CURRENT_USR_FIRSTNAME";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_CURRENT_USR_LASTNAME";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_INIT_DATE";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_DUE_DATE";
$tdataLIST_MY_INBOX[".printFields"][] = "DEL_PRIORITY";
$tdataLIST_MY_INBOX[".printFields"][] = "PRO_ID";
$tdataLIST_MY_INBOX[".printFields"][] = "USR_ID";
$tdataLIST_MY_INBOX[".printFields"][] = "TAS_ID";
$tdataLIST_MY_INBOX[".printFields"][] = "APP_STATUS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_UID");
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




	$tdataLIST_MY_INBOX["APP_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","USR_UID");
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




	$tdataLIST_MY_INBOX["USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","TAS_UID");
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




	$tdataLIST_MY_INBOX["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","PRO_UID");
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




	$tdataLIST_MY_INBOX["PRO_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_NUMBER");
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




	$tdataLIST_MY_INBOX["APP_NUMBER"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_TITLE");
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




	$tdataLIST_MY_INBOX["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_PRO_TITLE");
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




	$tdataLIST_MY_INBOX["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_TAS_TITLE");
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




	$tdataLIST_MY_INBOX["APP_TAS_TITLE"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_CREATE_DATE");
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




	$tdataLIST_MY_INBOX["APP_CREATE_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_UPDATE_DATE");
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




	$tdataLIST_MY_INBOX["APP_UPDATE_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_FINISH_DATE");
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




	$tdataLIST_MY_INBOX["APP_FINISH_DATE"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_STATUS");
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




	$tdataLIST_MY_INBOX["APP_STATUS"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_INDEX");
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




	$tdataLIST_MY_INBOX["DEL_INDEX"] = $fdata;
//	DEL_PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_PREVIOUS_USR_UID");
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




	$tdataLIST_MY_INBOX["DEL_PREVIOUS_USR_UID"] = $fdata;
//	DEL_PREVIOUS_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_PREVIOUS_USR_USERNAME");
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




	$tdataLIST_MY_INBOX["DEL_PREVIOUS_USR_USERNAME"] = $fdata;
//	DEL_PREVIOUS_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_PREVIOUS_USR_FIRSTNAME");
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




	$tdataLIST_MY_INBOX["DEL_PREVIOUS_USR_FIRSTNAME"] = $fdata;
//	DEL_PREVIOUS_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_PREVIOUS_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_PREVIOUS_USR_LASTNAME");
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




	$tdataLIST_MY_INBOX["DEL_PREVIOUS_USR_LASTNAME"] = $fdata;
//	DEL_CURRENT_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEL_CURRENT_USR_UID";
	$fdata["GoodName"] = "DEL_CURRENT_USR_UID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_CURRENT_USR_UID");
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

		$fdata["strField"] = "DEL_CURRENT_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_CURRENT_USR_UID";

	
	
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




	$tdataLIST_MY_INBOX["DEL_CURRENT_USR_UID"] = $fdata;
//	DEL_CURRENT_USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_USERNAME";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_CURRENT_USR_USERNAME");
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




	$tdataLIST_MY_INBOX["DEL_CURRENT_USR_USERNAME"] = $fdata;
//	DEL_CURRENT_USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_FIRSTNAME";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_CURRENT_USR_FIRSTNAME");
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




	$tdataLIST_MY_INBOX["DEL_CURRENT_USR_FIRSTNAME"] = $fdata;
//	DEL_CURRENT_USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["GoodName"] = "DEL_CURRENT_USR_LASTNAME";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_CURRENT_USR_LASTNAME");
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




	$tdataLIST_MY_INBOX["DEL_CURRENT_USR_LASTNAME"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_DELEGATE_DATE");
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




	$tdataLIST_MY_INBOX["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_INIT_DATE");
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




	$tdataLIST_MY_INBOX["DEL_INIT_DATE"] = $fdata;
//	DEL_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DEL_DUE_DATE";
	$fdata["GoodName"] = "DEL_DUE_DATE";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_DUE_DATE");
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




	$tdataLIST_MY_INBOX["DEL_DUE_DATE"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","DEL_PRIORITY");
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




	$tdataLIST_MY_INBOX["DEL_PRIORITY"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","PRO_ID");
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




	$tdataLIST_MY_INBOX["PRO_ID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","USR_ID");
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




	$tdataLIST_MY_INBOX["USR_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","TAS_ID");
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




	$tdataLIST_MY_INBOX["TAS_ID"] = $fdata;
//	APP_STATUS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "APP_STATUS_ID";
	$fdata["GoodName"] = "APP_STATUS_ID";
	$fdata["ownerTable"] = "LIST_MY_INBOX";
	$fdata["Label"] = GetFieldLabel("LIST_MY_INBOX","APP_STATUS_ID");
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




	$tdataLIST_MY_INBOX["APP_STATUS_ID"] = $fdata;


$tables_data["LIST_MY_INBOX"]=&$tdataLIST_MY_INBOX;
$field_labels["LIST_MY_INBOX"] = &$fieldLabelsLIST_MY_INBOX;
$fieldToolTips["LIST_MY_INBOX"] = &$fieldToolTipsLIST_MY_INBOX;
$placeHolders["LIST_MY_INBOX"] = &$placeHoldersLIST_MY_INBOX;
$page_titles["LIST_MY_INBOX"] = &$pageTitlesLIST_MY_INBOX;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_MY_INBOX"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_MY_INBOX"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_MY_INBOX()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	USR_UID,  	TAS_UID,  	PRO_UID,  	APP_NUMBER,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CREATE_DATE,  	APP_UPDATE_DATE,  	APP_FINISH_DATE,  	APP_STATUS,  	DEL_INDEX,  	DEL_PREVIOUS_USR_UID,  	DEL_PREVIOUS_USR_USERNAME,  	DEL_PREVIOUS_USR_FIRSTNAME,  	DEL_PREVIOUS_USR_LASTNAME,  	DEL_CURRENT_USR_UID,  	DEL_CURRENT_USR_USERNAME,  	DEL_CURRENT_USR_FIRSTNAME,  	DEL_CURRENT_USR_LASTNAME,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_DUE_DATE,  	DEL_PRIORITY,  	PRO_ID,  	USR_ID,  	TAS_ID,  	APP_STATUS_ID";
$proto0["m_strFrom"] = "FROM LIST_MY_INBOX";
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
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "LIST_MY_INBOX";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "LIST_MY_INBOX";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "LIST_MY_INBOX";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto12["m_sql"] = "PRO_UID";
$proto12["m_srcTableName"] = "LIST_MY_INBOX";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto14["m_sql"] = "APP_NUMBER";
$proto14["m_srcTableName"] = "LIST_MY_INBOX";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto16["m_sql"] = "APP_TITLE";
$proto16["m_srcTableName"] = "LIST_MY_INBOX";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto18["m_sql"] = "APP_PRO_TITLE";
$proto18["m_srcTableName"] = "LIST_MY_INBOX";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto20["m_sql"] = "APP_TAS_TITLE";
$proto20["m_srcTableName"] = "LIST_MY_INBOX";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto22["m_sql"] = "APP_CREATE_DATE";
$proto22["m_srcTableName"] = "LIST_MY_INBOX";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto24["m_sql"] = "APP_UPDATE_DATE";
$proto24["m_srcTableName"] = "LIST_MY_INBOX";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto26["m_sql"] = "APP_FINISH_DATE";
$proto26["m_srcTableName"] = "LIST_MY_INBOX";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto28["m_sql"] = "APP_STATUS";
$proto28["m_srcTableName"] = "LIST_MY_INBOX";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto30["m_sql"] = "DEL_INDEX";
$proto30["m_srcTableName"] = "LIST_MY_INBOX";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_UID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto32["m_sql"] = "DEL_PREVIOUS_USR_UID";
$proto32["m_srcTableName"] = "LIST_MY_INBOX";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_USERNAME",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto34["m_sql"] = "DEL_PREVIOUS_USR_USERNAME";
$proto34["m_srcTableName"] = "LIST_MY_INBOX";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_FIRSTNAME",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto36["m_sql"] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto36["m_srcTableName"] = "LIST_MY_INBOX";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS_USR_LASTNAME",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto38["m_sql"] = "DEL_PREVIOUS_USR_LASTNAME";
$proto38["m_srcTableName"] = "LIST_MY_INBOX";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_UID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto40["m_sql"] = "DEL_CURRENT_USR_UID";
$proto40["m_srcTableName"] = "LIST_MY_INBOX";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_USERNAME",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto42["m_sql"] = "DEL_CURRENT_USR_USERNAME";
$proto42["m_srcTableName"] = "LIST_MY_INBOX";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_FIRSTNAME",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto44["m_sql"] = "DEL_CURRENT_USR_FIRSTNAME";
$proto44["m_srcTableName"] = "LIST_MY_INBOX";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_CURRENT_USR_LASTNAME",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto46["m_sql"] = "DEL_CURRENT_USR_LASTNAME";
$proto46["m_srcTableName"] = "LIST_MY_INBOX";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto48["m_sql"] = "DEL_DELEGATE_DATE";
$proto48["m_srcTableName"] = "LIST_MY_INBOX";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto50["m_sql"] = "DEL_INIT_DATE";
$proto50["m_srcTableName"] = "LIST_MY_INBOX";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DUE_DATE",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto52["m_sql"] = "DEL_DUE_DATE";
$proto52["m_srcTableName"] = "LIST_MY_INBOX";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto54["m_sql"] = "DEL_PRIORITY";
$proto54["m_srcTableName"] = "LIST_MY_INBOX";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto56["m_sql"] = "PRO_ID";
$proto56["m_srcTableName"] = "LIST_MY_INBOX";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto58["m_sql"] = "USR_ID";
$proto58["m_srcTableName"] = "LIST_MY_INBOX";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto60["m_sql"] = "TAS_ID";
$proto60["m_srcTableName"] = "LIST_MY_INBOX";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS_ID",
	"m_strTable" => "LIST_MY_INBOX",
	"m_srcTableName" => "LIST_MY_INBOX"
));

$proto62["m_sql"] = "APP_STATUS_ID";
$proto62["m_srcTableName"] = "LIST_MY_INBOX";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "LIST_MY_INBOX";
$proto65["m_srcTableName"] = "LIST_MY_INBOX";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "APP_UID";
$proto65["m_columns"][] = "USR_UID";
$proto65["m_columns"][] = "TAS_UID";
$proto65["m_columns"][] = "PRO_UID";
$proto65["m_columns"][] = "APP_NUMBER";
$proto65["m_columns"][] = "APP_TITLE";
$proto65["m_columns"][] = "APP_PRO_TITLE";
$proto65["m_columns"][] = "APP_TAS_TITLE";
$proto65["m_columns"][] = "APP_CREATE_DATE";
$proto65["m_columns"][] = "APP_UPDATE_DATE";
$proto65["m_columns"][] = "APP_FINISH_DATE";
$proto65["m_columns"][] = "APP_STATUS";
$proto65["m_columns"][] = "DEL_INDEX";
$proto65["m_columns"][] = "DEL_PREVIOUS_USR_UID";
$proto65["m_columns"][] = "DEL_PREVIOUS_USR_USERNAME";
$proto65["m_columns"][] = "DEL_PREVIOUS_USR_FIRSTNAME";
$proto65["m_columns"][] = "DEL_PREVIOUS_USR_LASTNAME";
$proto65["m_columns"][] = "DEL_CURRENT_USR_UID";
$proto65["m_columns"][] = "DEL_CURRENT_USR_USERNAME";
$proto65["m_columns"][] = "DEL_CURRENT_USR_FIRSTNAME";
$proto65["m_columns"][] = "DEL_CURRENT_USR_LASTNAME";
$proto65["m_columns"][] = "DEL_DELEGATE_DATE";
$proto65["m_columns"][] = "DEL_INIT_DATE";
$proto65["m_columns"][] = "DEL_DUE_DATE";
$proto65["m_columns"][] = "DEL_PRIORITY";
$proto65["m_columns"][] = "PRO_ID";
$proto65["m_columns"][] = "USR_ID";
$proto65["m_columns"][] = "TAS_ID";
$proto65["m_columns"][] = "APP_STATUS_ID";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "LIST_MY_INBOX";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "LIST_MY_INBOX";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LIST_MY_INBOX";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_MY_INBOX = createSqlQuery_LIST_MY_INBOX();


	
						;

																													

$tdataLIST_MY_INBOX[".sqlquery"] = $queryData_LIST_MY_INBOX;

$tableEvents["LIST_MY_INBOX"] = new eventsBase;
$tdataLIST_MY_INBOX[".hasEvents"] = false;

?>
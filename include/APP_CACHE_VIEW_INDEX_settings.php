<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_CACHE_VIEW_INDEX = array();
	$tdataAPP_CACHE_VIEW_INDEX[".truncateText"] = true;
	$tdataAPP_CACHE_VIEW_INDEX[".NumberOfChars"] = 20;
	$tdataAPP_CACHE_VIEW_INDEX[".ShortName"] = "APP_CACHE_VIEW_INDEX";
	$tdataAPP_CACHE_VIEW_INDEX[".OwnerID"] = "USR_UID";
	$tdataAPP_CACHE_VIEW_INDEX[".OriginalTable"] = "APP_CACHE_VIEW";

//	field labels
$fieldLabelsAPP_CACHE_VIEW_INDEX = array();
$fieldToolTipsAPP_CACHE_VIEW_INDEX = array();
$pageTitlesAPP_CACHE_VIEW_INDEX = array();
$placeHoldersAPP_CACHE_VIEW_INDEX = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"] = array();
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"] = array();
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"] = array();
	$pageTitlesAPP_CACHE_VIEW_INDEX["Japanese"] = array();
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_UID"] = "UID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_LAST_INDEX"] = "デル最後のインデックス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_LAST_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_LAST_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_STATUS"] = "ステータス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["PREVIOUS_USR_UID"] = "前のUSR UID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["PREVIOUS_USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["PREVIOUS_USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["TAS_UID"] = "TASのID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["TAS_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["TAS_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_FINISH_DATE"] = "デル終了日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_TASK_DUE_DATE"] = "デルタスク期日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_TASK_DUE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_TASK_DUE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_RISK_DATE"] = "デルリスク日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_RISK_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_RISK_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_THREAD_STATUS"] = "デルスレッドステータス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_THREAD_STATUS"] = "スレッドの状態";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_TITLE"] = "タイトル";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_PRO_TITLE"] = "プロのタイトル";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_TAS_TITLE"] = "TASタイトル";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_CURRENT_USER"] = "現在のユーザー";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_CURRENT_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_CURRENT_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_DEL_PREVIOUS_USER"] = "デル、前のユーザーがアプリ";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_DEL_PREVIOUS_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_DEL_PREVIOUS_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DURATION"] = "デルの期間";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_QUEUE_DURATION"] = "デルキュー時間";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_QUEUE_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_QUEUE_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELAY_DURATION"] = "デル遅延時間";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELAY_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELAY_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_STARTED"] = "デル開始";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_STARTED"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_STARTED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_FINISHED"] = "デル完成";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_FINISHED"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_FINISHED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELAYED"] = "デルが遅れます";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELAYED"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["DEL_DELAYED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_CREATE_DATE"] = "アプリは、日付を作成します";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "アプリ延滞率";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "";
	if (count($fieldToolTipsAPP_CACHE_VIEW_INDEX["Japanese"]))
		$tdataAPP_CACHE_VIEW_INDEX[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"] = array();
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"] = array();
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"] = array();
	$pageTitlesAPP_CACHE_VIEW_INDEX["English"] = array();
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_UID"] = "UID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_LAST_INDEX"] = "デル最後のインデックス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_LAST_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_LAST_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_NUMBER"] = "アプリの数";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_NUMBER"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_NUMBER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_STATUS"] = "ステータス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["PREVIOUS_USR_UID"] = "前のUSR UID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["PREVIOUS_USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["PREVIOUS_USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["TAS_UID"] = "TASのID";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["TAS_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["TAS_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["PRO_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["PRO_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_DELEGATE_DATE"] = "デルデリゲート日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_INIT_DATE"] = "デルのinit日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_FINISH_DATE"] = "デル終了日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_TASK_DUE_DATE"] = "デルタスク期日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_TASK_DUE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_TASK_DUE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_RISK_DATE"] = "デルリスク日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_RISK_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_RISK_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_THREAD_STATUS"] = "デルスレッドステータス";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_THREAD_STATUS"] = "スレッドの状態";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_TITLE"] = "タイトル";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_PRO_TITLE"] = "プロのタイトル";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_PRO_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_PRO_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_TAS_TITLE"] = "TASタイトル";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_TAS_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_TAS_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_CURRENT_USER"] = "現在のユーザー";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_CURRENT_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_CURRENT_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_DEL_PREVIOUS_USER"] = "デル、前のユーザーがアプリ";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_DEL_PREVIOUS_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_DEL_PREVIOUS_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_PRIORITY"] = "デルの優先順位";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_PRIORITY"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_DURATION"] = "デルの期間";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_QUEUE_DURATION"] = "デルキュー時間";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_QUEUE_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_QUEUE_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_DELAY_DURATION"] = "デル遅延時間";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_DELAY_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_DELAY_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_STARTED"] = "デル開始";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_STARTED"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_STARTED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_FINISHED"] = "デル完成";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_FINISHED"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_FINISHED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["DEL_DELAYED"] = "デルが遅れます";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["DEL_DELAYED"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["DEL_DELAYED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_CREATE_DATE"] = "アプリは、日付を作成します";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_INDEX["English"]["APP_OVERDUE_PERCENTAGE"] = "アプリ延滞率";
	$fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]["APP_OVERDUE_PERCENTAGE"] = "";
	$placeHoldersAPP_CACHE_VIEW_INDEX["English"]["APP_OVERDUE_PERCENTAGE"] = "";
	if (count($fieldToolTipsAPP_CACHE_VIEW_INDEX["English"]))
		$tdataAPP_CACHE_VIEW_INDEX[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_CACHE_VIEW_INDEX[""] = array();
	$fieldToolTipsAPP_CACHE_VIEW_INDEX[""] = array();
	$placeHoldersAPP_CACHE_VIEW_INDEX[""] = array();
	$pageTitlesAPP_CACHE_VIEW_INDEX[""] = array();
	if (count($fieldToolTipsAPP_CACHE_VIEW_INDEX[""]))
		$tdataAPP_CACHE_VIEW_INDEX[".isUseToolTips"] = true;
}


	$tdataAPP_CACHE_VIEW_INDEX[".NCSearch"] = true;



$tdataAPP_CACHE_VIEW_INDEX[".shortTableName"] = "APP_CACHE_VIEW_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".nSecOptions"] = 1;
$tdataAPP_CACHE_VIEW_INDEX[".recsPerRowPrint"] = 1;
$tdataAPP_CACHE_VIEW_INDEX[".mainTableOwnerID"] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".moveNext"] = 0;
$tdataAPP_CACHE_VIEW_INDEX[".entityType"] = 1;

$tdataAPP_CACHE_VIEW_INDEX[".strOriginalTableName"] = "APP_CACHE_VIEW";

	



$tdataAPP_CACHE_VIEW_INDEX[".showAddInPopup"] = false;

$tdataAPP_CACHE_VIEW_INDEX[".showEditInPopup"] = false;

$tdataAPP_CACHE_VIEW_INDEX[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_CACHE_VIEW_INDEX[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_CACHE_VIEW_INDEX[".fieldsForRegister"] = array();
	
$tdataAPP_CACHE_VIEW_INDEX[".listAjax"] = false;

	$tdataAPP_CACHE_VIEW_INDEX[".audit"] = true;

	$tdataAPP_CACHE_VIEW_INDEX[".locking"] = false;

$tdataAPP_CACHE_VIEW_INDEX[".edit"] = true;
$tdataAPP_CACHE_VIEW_INDEX[".afterEditAction"] = 1;
$tdataAPP_CACHE_VIEW_INDEX[".closePopupAfterEdit"] = 1;
$tdataAPP_CACHE_VIEW_INDEX[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataAPP_CACHE_VIEW_INDEX[".add"] = true;
$tdataAPP_CACHE_VIEW_INDEX[".afterAddAction"] = 1;
$tdataAPP_CACHE_VIEW_INDEX[".closePopupAfterAdd"] = 1;
$tdataAPP_CACHE_VIEW_INDEX[".afterAddActionDetTable"] = "";

$tdataAPP_CACHE_VIEW_INDEX[".list"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".inlineEdit"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".updateSelected"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".reorderRecordsByHeader"] = true;
$tdataAPP_CACHE_VIEW_INDEX[".createSortByDropdown"] = true;
$tdataAPP_CACHE_VIEW_INDEX[".strSortControlSettingsJSON"] = "";



$tdataAPP_CACHE_VIEW_INDEX[".inlineAdd"] = true;
$tdataAPP_CACHE_VIEW_INDEX[".view"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".import"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".exportTo"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".printFriendly"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".delete"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_CACHE_VIEW_INDEX[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_CACHE_VIEW_INDEX[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_CACHE_VIEW_INDEX[".searchSaving"] = false;
//

$tdataAPP_CACHE_VIEW_INDEX[".showSearchPanel"] = true;
		$tdataAPP_CACHE_VIEW_INDEX[".flexibleSearch"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".isUseAjaxSuggest"] = true;

$tdataAPP_CACHE_VIEW_INDEX[".rowHighlite"] = true;



																

$tdataAPP_CACHE_VIEW_INDEX[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_CACHE_VIEW_INDEX[".buttonsAdded"] = false;

$tdataAPP_CACHE_VIEW_INDEX[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_CACHE_VIEW_INDEX[".isUseTimeForSearch"] = false;



$tdataAPP_CACHE_VIEW_INDEX[".badgeColor"] = "2f4f4f";


$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".filterFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".requiredSearchFields"] = array();

$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_UID";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_LAST_INDEX";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_NUMBER";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_STATUS";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "USR_UID";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "PREVIOUS_USR_UID";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "TAS_UID";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "PRO_UID";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_FINISH_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_TASK_DUE_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_RISK_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_THREAD_STATUS";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_THREAD_STATUS";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_TITLE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_CURRENT_USER";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_DEL_PREVIOUS_USER";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_DURATION";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_QUEUE_DURATION";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_DELAY_DURATION";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_STARTED";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_FINISHED";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "DEL_DELAYED";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataAPP_CACHE_VIEW_INDEX[".allSearchFields"][] = "APP_OVERDUE_PERCENTAGE";
	

$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".googleLikeFields"][] = "APP_OVERDUE_PERCENTAGE";


$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".advSearchFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".tableType"] = "list";

$tdataAPP_CACHE_VIEW_INDEX[".printerPageOrientation"] = 0;
$tdataAPP_CACHE_VIEW_INDEX[".nPrinterPageScale"] = 100;

$tdataAPP_CACHE_VIEW_INDEX[".nPrinterSplitRecords"] = 40;

$tdataAPP_CACHE_VIEW_INDEX[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_CACHE_VIEW_INDEX[".geocodingEnabled"] = false;





$tdataAPP_CACHE_VIEW_INDEX[".listGridLayout"] = 3;


$tdataAPP_CACHE_VIEW_INDEX[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_CACHE_VIEW_INDEX[".pageSize"] = 20;

$tdataAPP_CACHE_VIEW_INDEX[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY APP_NUMBER DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_CACHE_VIEW_INDEX[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_CACHE_VIEW_INDEX[".orderindexes"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "APP_NUMBER");

$tdataAPP_CACHE_VIEW_INDEX[".sqlHead"] = "SELECT APP_UID,  DEL_INDEX,  DEL_LAST_INDEX,  APP_NUMBER,  APP_STATUS,  USR_UID,  PREVIOUS_USR_UID,  TAS_UID,  PRO_UID,  DEL_DELEGATE_DATE,  DEL_INIT_DATE,  DEL_FINISH_DATE,  DEL_TASK_DUE_DATE,  DEL_RISK_DATE,  DEL_THREAD_STATUS,  APP_THREAD_STATUS,  APP_TITLE,  APP_PRO_TITLE,  APP_TAS_TITLE,  APP_CURRENT_USER,  APP_DEL_PREVIOUS_USER,  DEL_PRIORITY,  DEL_DURATION,  DEL_QUEUE_DURATION,  DEL_DELAY_DURATION,  DEL_STARTED,  DEL_FINISHED,  DEL_DELAYED,  APP_CREATE_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_OVERDUE_PERCENTAGE";
$tdataAPP_CACHE_VIEW_INDEX[".sqlFrom"] = "FROM APP_CACHE_VIEW";
$tdataAPP_CACHE_VIEW_INDEX[".sqlWhereExpr"] = "(DEL_LAST_INDEX = 1) AND (APP_STATUS =\"TO_DO\")";
$tdataAPP_CACHE_VIEW_INDEX[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_CACHE_VIEW_INDEX[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_CACHE_VIEW_INDEX[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_CACHE_VIEW_INDEX[".highlightSearchResults"] = true;

$tableKeysAPP_CACHE_VIEW_INDEX = array();
$tableKeysAPP_CACHE_VIEW_INDEX[] = "APP_UID";
$tableKeysAPP_CACHE_VIEW_INDEX[] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".Keys"] = $tableKeysAPP_CACHE_VIEW_INDEX;

$tdataAPP_CACHE_VIEW_INDEX[".listFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".listFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".hideMobileList"] = array();


$tdataAPP_CACHE_VIEW_INDEX[".viewFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".viewFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".addFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".addFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".masterListFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineAddFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".editFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".editFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".inlineEditFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".updateSelectedFields"][] = "APP_OVERDUE_PERCENTAGE";


$tdataAPP_CACHE_VIEW_INDEX[".exportFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".exportFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".importFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".importFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_INDEX[".printFields"] = array();
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_INDEX[".printFields"][] = "APP_OVERDUE_PERCENTAGE";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_UID");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataAPP_CACHE_VIEW_INDEX["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_INDEX");
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

	
		$vdata["LinkPrefix"] ="4343434343";

	
	
	
	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_INDEX"] = $fdata;
//	DEL_LAST_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEL_LAST_INDEX";
	$fdata["GoodName"] = "DEL_LAST_INDEX";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_LAST_INDEX");
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

		$fdata["strField"] = "DEL_LAST_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_LAST_INDEX";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_LAST_INDEX"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_NUMBER");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_STATUS");
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




	$tdataAPP_CACHE_VIEW_INDEX["APP_STATUS"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","USR_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "USERS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "USR_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "USR_FIRSTNAME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["USR_UID"] = $fdata;
//	PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PREVIOUS_USR_UID";
	$fdata["GoodName"] = "PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","PREVIOUS_USR_UID");
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

		$fdata["strField"] = "PREVIOUS_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PREVIOUS_USR_UID";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "USERS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "USR_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "USR_FIRSTNAME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["PREVIOUS_USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","TAS_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "TASK";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TAS_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TAS_TITLE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","PRO_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PRO_TITLE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["PRO_UID"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_DELEGATE_DATE");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_INIT_DATE");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_INIT_DATE"] = $fdata;
//	DEL_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_FINISH_DATE";
	$fdata["GoodName"] = "DEL_FINISH_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_FINISH_DATE");
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

		$fdata["strField"] = "DEL_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_FINISH_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_FINISH_DATE"] = $fdata;
//	DEL_TASK_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_TASK_DUE_DATE";
	$fdata["GoodName"] = "DEL_TASK_DUE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_TASK_DUE_DATE");
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

		$fdata["strField"] = "DEL_TASK_DUE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_TASK_DUE_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_TASK_DUE_DATE"] = $fdata;
//	DEL_RISK_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_RISK_DATE";
	$fdata["GoodName"] = "DEL_RISK_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_RISK_DATE");
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

		$fdata["strField"] = "DEL_RISK_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_RISK_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_RISK_DATE"] = $fdata;
//	DEL_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_THREAD_STATUS";
	$fdata["GoodName"] = "DEL_THREAD_STATUS";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_THREAD_STATUS");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_THREAD_STATUS"] = $fdata;
//	APP_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "APP_THREAD_STATUS";
	$fdata["GoodName"] = "APP_THREAD_STATUS";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_THREAD_STATUS");
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

		$fdata["strField"] = "APP_THREAD_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_THREAD_STATUS";

	
	
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




	$tdataAPP_CACHE_VIEW_INDEX["APP_THREAD_STATUS"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_TITLE");
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

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdataAPP_CACHE_VIEW_INDEX["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_PRO_TITLE");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_TAS_TITLE");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_TAS_TITLE"] = $fdata;
//	APP_CURRENT_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APP_CURRENT_USER";
	$fdata["GoodName"] = "APP_CURRENT_USER";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_CURRENT_USER");
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

		$fdata["strField"] = "APP_CURRENT_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CURRENT_USER";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataAPP_CACHE_VIEW_INDEX["APP_CURRENT_USER"] = $fdata;
//	APP_DEL_PREVIOUS_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APP_DEL_PREVIOUS_USER";
	$fdata["GoodName"] = "APP_DEL_PREVIOUS_USER";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_DEL_PREVIOUS_USER");
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

		$fdata["strField"] = "APP_DEL_PREVIOUS_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DEL_PREVIOUS_USER";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataAPP_CACHE_VIEW_INDEX["APP_DEL_PREVIOUS_USER"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_PRIORITY");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_PRIORITY"] = $fdata;
//	DEL_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DEL_DURATION";
	$fdata["GoodName"] = "DEL_DURATION";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_DURATION");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DEL_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_DURATION"] = $fdata;
//	DEL_QUEUE_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DEL_QUEUE_DURATION";
	$fdata["GoodName"] = "DEL_QUEUE_DURATION";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_QUEUE_DURATION");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DEL_QUEUE_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_QUEUE_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_QUEUE_DURATION"] = $fdata;
//	DEL_DELAY_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DEL_DELAY_DURATION";
	$fdata["GoodName"] = "DEL_DELAY_DURATION";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_DELAY_DURATION");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DEL_DELAY_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DELAY_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_DELAY_DURATION"] = $fdata;
//	DEL_STARTED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DEL_STARTED";
	$fdata["GoodName"] = "DEL_STARTED";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_STARTED");
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

		$fdata["strField"] = "DEL_STARTED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_STARTED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_STARTED"] = $fdata;
//	DEL_FINISHED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DEL_FINISHED";
	$fdata["GoodName"] = "DEL_FINISHED";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_FINISHED");
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

		$fdata["strField"] = "DEL_FINISHED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_FINISHED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_FINISHED"] = $fdata;
//	DEL_DELAYED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DEL_DELAYED";
	$fdata["GoodName"] = "DEL_DELAYED";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","DEL_DELAYED");
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

		$fdata["strField"] = "DEL_DELAYED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DELAYED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["DEL_DELAYED"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_CREATE_DATE");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_CREATE_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_FINISH_DATE");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_FINISH_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_UPDATE_DATE");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_UPDATE_DATE"] = $fdata;
//	APP_OVERDUE_PERCENTAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "APP_OVERDUE_PERCENTAGE";
	$fdata["GoodName"] = "APP_OVERDUE_PERCENTAGE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_INDEX","APP_OVERDUE_PERCENTAGE");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_OVERDUE_PERCENTAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_OVERDUE_PERCENTAGE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_INDEX["APP_OVERDUE_PERCENTAGE"] = $fdata;


$tables_data["APP_CACHE_VIEW_INDEX"]=&$tdataAPP_CACHE_VIEW_INDEX;
$field_labels["APP_CACHE_VIEW_INDEX"] = &$fieldLabelsAPP_CACHE_VIEW_INDEX;
$fieldToolTips["APP_CACHE_VIEW_INDEX"] = &$fieldToolTipsAPP_CACHE_VIEW_INDEX;
$placeHolders["APP_CACHE_VIEW_INDEX"] = &$placeHoldersAPP_CACHE_VIEW_INDEX;
$page_titles["APP_CACHE_VIEW_INDEX"] = &$pageTitlesAPP_CACHE_VIEW_INDEX;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_CACHE_VIEW_INDEX"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_CACHE_VIEW_INDEX"] = array();


	
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
					$masterTablesData["APP_CACHE_VIEW_INDEX"][0] = $masterParams;
				$masterTablesData["APP_CACHE_VIEW_INDEX"][0]["masterKeys"] = array();
	$masterTablesData["APP_CACHE_VIEW_INDEX"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["APP_CACHE_VIEW_INDEX"][0]["detailKeys"] = array();
	$masterTablesData["APP_CACHE_VIEW_INDEX"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_CACHE_VIEW_INDEX()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  DEL_INDEX,  DEL_LAST_INDEX,  APP_NUMBER,  APP_STATUS,  USR_UID,  PREVIOUS_USR_UID,  TAS_UID,  PRO_UID,  DEL_DELEGATE_DATE,  DEL_INIT_DATE,  DEL_FINISH_DATE,  DEL_TASK_DUE_DATE,  DEL_RISK_DATE,  DEL_THREAD_STATUS,  APP_THREAD_STATUS,  APP_TITLE,  APP_PRO_TITLE,  APP_TAS_TITLE,  APP_CURRENT_USER,  APP_DEL_PREVIOUS_USER,  DEL_PRIORITY,  DEL_DURATION,  DEL_QUEUE_DURATION,  DEL_DELAY_DURATION,  DEL_STARTED,  DEL_FINISHED,  DEL_DELAYED,  APP_CREATE_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_OVERDUE_PERCENTAGE";
$proto0["m_strFrom"] = "FROM APP_CACHE_VIEW";
$proto0["m_strWhere"] = "(DEL_LAST_INDEX = 1) AND (APP_STATUS =\"TO_DO\")";
$proto0["m_strOrderBy"] = "ORDER BY APP_NUMBER DESC";
$proto0["m_strTail"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(DEL_LAST_INDEX = 1) AND (APP_STATUS =\"TO_DO\")";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(DEL_LAST_INDEX = 1) AND (APP_STATUS =\"TO_DO\")"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "DEL_LAST_INDEX = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DEL_LAST_INDEX",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "APP_STATUS =\"TO_DO\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=\"TO_DO\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto10["m_sql"] = "APP_UID";
$proto10["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto12["m_sql"] = "DEL_INDEX";
$proto12["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_LAST_INDEX",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto14["m_sql"] = "DEL_LAST_INDEX";
$proto14["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto16["m_sql"] = "APP_NUMBER";
$proto16["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto18["m_sql"] = "APP_STATUS";
$proto18["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto20["m_sql"] = "USR_UID";
$proto20["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PREVIOUS_USR_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto22["m_sql"] = "PREVIOUS_USR_UID";
$proto22["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto24["m_sql"] = "TAS_UID";
$proto24["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto26["m_sql"] = "PRO_UID";
$proto26["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto28["m_sql"] = "DEL_DELEGATE_DATE";
$proto28["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto30["m_sql"] = "DEL_INIT_DATE";
$proto30["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_FINISH_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto32["m_sql"] = "DEL_FINISH_DATE";
$proto32["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_TASK_DUE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto34["m_sql"] = "DEL_TASK_DUE_DATE";
$proto34["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_RISK_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto36["m_sql"] = "DEL_RISK_DATE";
$proto36["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_THREAD_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto38["m_sql"] = "DEL_THREAD_STATUS";
$proto38["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_THREAD_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto40["m_sql"] = "APP_THREAD_STATUS";
$proto40["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto42["m_sql"] = "APP_TITLE";
$proto42["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto44["m_sql"] = "APP_PRO_TITLE";
$proto44["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto46["m_sql"] = "APP_TAS_TITLE";
$proto46["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CURRENT_USER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto48["m_sql"] = "APP_CURRENT_USER";
$proto48["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DEL_PREVIOUS_USER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto50["m_sql"] = "APP_DEL_PREVIOUS_USER";
$proto50["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto52["m_sql"] = "DEL_PRIORITY";
$proto52["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DURATION",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto54["m_sql"] = "DEL_DURATION";
$proto54["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_QUEUE_DURATION",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto56["m_sql"] = "DEL_QUEUE_DURATION";
$proto56["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELAY_DURATION",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto58["m_sql"] = "DEL_DELAY_DURATION";
$proto58["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_STARTED",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto60["m_sql"] = "DEL_STARTED";
$proto60["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_FINISHED",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto62["m_sql"] = "DEL_FINISHED";
$proto62["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELAYED",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto64["m_sql"] = "DEL_DELAYED";
$proto64["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto66["m_sql"] = "APP_CREATE_DATE";
$proto66["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto68["m_sql"] = "APP_FINISH_DATE";
$proto68["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto70["m_sql"] = "APP_UPDATE_DATE";
$proto70["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_OVERDUE_PERCENTAGE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto72["m_sql"] = "APP_OVERDUE_PERCENTAGE";
$proto72["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "APP_CACHE_VIEW";
$proto75["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "APP_UID";
$proto75["m_columns"][] = "DEL_INDEX";
$proto75["m_columns"][] = "DEL_LAST_INDEX";
$proto75["m_columns"][] = "APP_NUMBER";
$proto75["m_columns"][] = "APP_STATUS";
$proto75["m_columns"][] = "USR_UID";
$proto75["m_columns"][] = "PREVIOUS_USR_UID";
$proto75["m_columns"][] = "TAS_UID";
$proto75["m_columns"][] = "PRO_UID";
$proto75["m_columns"][] = "DEL_DELEGATE_DATE";
$proto75["m_columns"][] = "DEL_INIT_DATE";
$proto75["m_columns"][] = "DEL_FINISH_DATE";
$proto75["m_columns"][] = "DEL_TASK_DUE_DATE";
$proto75["m_columns"][] = "DEL_RISK_DATE";
$proto75["m_columns"][] = "DEL_THREAD_STATUS";
$proto75["m_columns"][] = "APP_THREAD_STATUS";
$proto75["m_columns"][] = "APP_TITLE";
$proto75["m_columns"][] = "APP_PRO_TITLE";
$proto75["m_columns"][] = "APP_TAS_TITLE";
$proto75["m_columns"][] = "APP_CURRENT_USER";
$proto75["m_columns"][] = "APP_DEL_PREVIOUS_USER";
$proto75["m_columns"][] = "DEL_PRIORITY";
$proto75["m_columns"][] = "DEL_DURATION";
$proto75["m_columns"][] = "DEL_QUEUE_DURATION";
$proto75["m_columns"][] = "DEL_DELAY_DURATION";
$proto75["m_columns"][] = "DEL_STARTED";
$proto75["m_columns"][] = "DEL_FINISHED";
$proto75["m_columns"][] = "DEL_DELAYED";
$proto75["m_columns"][] = "APP_CREATE_DATE";
$proto75["m_columns"][] = "APP_FINISH_DATE";
$proto75["m_columns"][] = "APP_UPDATE_DATE";
$proto75["m_columns"][] = "APP_OVERDUE_PERCENTAGE";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "APP_CACHE_VIEW";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "APP_CACHE_VIEW_INDEX";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW_INDEX"
));

$proto78["m_column"]=$obj;
$proto78["m_bAsc"] = 0;
$proto78["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto78);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="APP_CACHE_VIEW_INDEX";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_CACHE_VIEW_INDEX = createSqlQuery_APP_CACHE_VIEW_INDEX();


	
						;

																																

$tdataAPP_CACHE_VIEW_INDEX[".sqlquery"] = $queryData_APP_CACHE_VIEW_INDEX;

include_once(getabspath("include/APP_CACHE_VIEW_INDEX_events.php"));
$tableEvents["APP_CACHE_VIEW_INDEX"] = new eventclass_APP_CACHE_VIEW_INDEX;
$tdataAPP_CACHE_VIEW_INDEX[".hasEvents"] = true;

?>
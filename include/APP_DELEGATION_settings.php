<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_DELEGATION = array();
	$tdataAPP_DELEGATION[".truncateText"] = true;
	$tdataAPP_DELEGATION[".NumberOfChars"] = 20;
	$tdataAPP_DELEGATION[".ShortName"] = "APP_DELEGATION";
	$tdataAPP_DELEGATION[".OwnerID"] = "";
	$tdataAPP_DELEGATION[".OriginalTable"] = "APP_DELEGATION";

//	field labels
$fieldLabelsAPP_DELEGATION = array();
$fieldToolTipsAPP_DELEGATION = array();
$pageTitlesAPP_DELEGATION = array();
$placeHoldersAPP_DELEGATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_DELEGATION["Japanese"] = array();
	$fieldToolTipsAPP_DELEGATION["Japanese"] = array();
	$placeHoldersAPP_DELEGATION["Japanese"] = array();
	$pageTitlesAPP_DELEGATION["Japanese"] = array();
	$fieldLabelsAPP_DELEGATION["Japanese"]["APP_UID"] = "UID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_INDEX"] = "委任状態";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_PREVIOUS"] = "前の委任";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_PREVIOUS"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_PREVIOUS"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_LAST_INDEX"] = "委任最後の番号";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_LAST_INDEX"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_LAST_INDEX"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["TAS_UID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["TAS_UID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["USR_UID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_TYPE"] = "委任タイプ";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_TYPE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_TYPE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_THREAD"] = "委任のスレッド";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_THREAD"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_THREAD"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_THREAD_STATUS"] = "委任スレッドステータス";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_PRIORITY"] = "委任の優先順位";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_DELEGATE_DATE"] = "委任デリゲート日";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_INIT_DATE"] = "委任のinit日";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_FINISH_DATE"] = "委任終了日";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_FINISH_DATE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_FINISH_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_TASK_DUE_DATE"] = "委任タスク期日";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_TASK_DUE_DATE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_TASK_DUE_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_RISK_DATE"] = "委任リスク日";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_RISK_DATE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_RISK_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_DURATION"] = "委任の期間";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_DURATION"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_DURATION"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_QUEUE_DURATION"] = "委任キュー時間";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_QUEUE_DURATION"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_QUEUE_DURATION"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_DELAY_DURATION"] = "委任遅延時間";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_DELAY_DURATION"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_DELAY_DURATION"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_STARTED"] = "委任開始";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_STARTED"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_STARTED"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_FINISHED"] = "委任完成";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_FINISHED"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_FINISHED"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_DELAYED"] = "委任が遅れます";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_DELAYED"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_DELAYED"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DEL_DATA"] = "委任データ";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DEL_DATA"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DEL_DATA"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "延滞率";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["DELEGATION_ID"] = "DELEGATION ID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["DELEGATION_ID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["DELEGATION_ID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["USR_ID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["USR_ID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["PRO_ID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["PRO_ID"] = "";
	$fieldLabelsAPP_DELEGATION["Japanese"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsAPP_DELEGATION["Japanese"]["TAS_ID"] = "";
	$placeHoldersAPP_DELEGATION["Japanese"]["TAS_ID"] = "";
	if (count($fieldToolTipsAPP_DELEGATION["Japanese"]))
		$tdataAPP_DELEGATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_DELEGATION["English"] = array();
	$fieldToolTipsAPP_DELEGATION["English"] = array();
	$placeHoldersAPP_DELEGATION["English"] = array();
	$pageTitlesAPP_DELEGATION["English"] = array();
	$fieldLabelsAPP_DELEGATION["English"]["APP_UID"] = "UID";
	$fieldToolTipsAPP_DELEGATION["English"]["APP_UID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["APP_UID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_INDEX"] = "委任状態";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_PREVIOUS"] = "前の委任";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_PREVIOUS"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_PREVIOUS"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_LAST_INDEX"] = "委任最後の番号";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_LAST_INDEX"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_LAST_INDEX"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_DELEGATION["English"]["PRO_UID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["PRO_UID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsAPP_DELEGATION["English"]["TAS_UID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["TAS_UID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_DELEGATION["English"]["USR_UID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["USR_UID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_TYPE"] = "委任タイプ";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_TYPE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_TYPE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_THREAD"] = "委任のスレッド";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_THREAD"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_THREAD"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_THREAD_STATUS"] = "委任スレッドステータス";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_PRIORITY"] = "委任の優先順位";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_PRIORITY"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_PRIORITY"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_DELEGATE_DATE"] = "委任デリゲート日";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_INIT_DATE"] = "委任のinit日";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_INIT_DATE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_INIT_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_FINISH_DATE"] = "委任終了日";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_FINISH_DATE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_FINISH_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_TASK_DUE_DATE"] = "委任タスク期日";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_TASK_DUE_DATE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_TASK_DUE_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_RISK_DATE"] = "委任リスク日";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_RISK_DATE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_RISK_DATE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_DURATION"] = "委任の期間";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_DURATION"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_DURATION"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_QUEUE_DURATION"] = "委任キュー時間";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_QUEUE_DURATION"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_QUEUE_DURATION"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_DELAY_DURATION"] = "委任遅延時間";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_DELAY_DURATION"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_DELAY_DURATION"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_STARTED"] = "委任開始";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_STARTED"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_STARTED"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_FINISHED"] = "委任完成";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_FINISHED"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_FINISHED"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_DELAYED"] = "委任が遅れます";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_DELAYED"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_DELAYED"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DEL_DATA"] = "委任データ";
	$fieldToolTipsAPP_DELEGATION["English"]["DEL_DATA"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DEL_DATA"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["APP_OVERDUE_PERCENTAGE"] = "延滞率";
	$fieldToolTipsAPP_DELEGATION["English"]["APP_OVERDUE_PERCENTAGE"] = "";
	$placeHoldersAPP_DELEGATION["English"]["APP_OVERDUE_PERCENTAGE"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["DELEGATION_ID"] = "DELEGATION ID";
	$fieldToolTipsAPP_DELEGATION["English"]["DELEGATION_ID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["DELEGATION_ID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPP_DELEGATION["English"]["APP_NUMBER"] = "";
	$placeHoldersAPP_DELEGATION["English"]["APP_NUMBER"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsAPP_DELEGATION["English"]["USR_ID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["USR_ID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsAPP_DELEGATION["English"]["PRO_ID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["PRO_ID"] = "";
	$fieldLabelsAPP_DELEGATION["English"]["TAS_ID"] = "TAS ID";
	$fieldToolTipsAPP_DELEGATION["English"]["TAS_ID"] = "";
	$placeHoldersAPP_DELEGATION["English"]["TAS_ID"] = "";
	if (count($fieldToolTipsAPP_DELEGATION["English"]))
		$tdataAPP_DELEGATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_DELEGATION[""] = array();
	$fieldToolTipsAPP_DELEGATION[""] = array();
	$placeHoldersAPP_DELEGATION[""] = array();
	$pageTitlesAPP_DELEGATION[""] = array();
	if (count($fieldToolTipsAPP_DELEGATION[""]))
		$tdataAPP_DELEGATION[".isUseToolTips"] = true;
}


	$tdataAPP_DELEGATION[".NCSearch"] = true;



$tdataAPP_DELEGATION[".shortTableName"] = "APP_DELEGATION";
$tdataAPP_DELEGATION[".nSecOptions"] = 0;
$tdataAPP_DELEGATION[".recsPerRowPrint"] = 1;
$tdataAPP_DELEGATION[".mainTableOwnerID"] = "";
$tdataAPP_DELEGATION[".moveNext"] = 0;
$tdataAPP_DELEGATION[".entityType"] = 0;

$tdataAPP_DELEGATION[".strOriginalTableName"] = "APP_DELEGATION";

	



$tdataAPP_DELEGATION[".showAddInPopup"] = false;

$tdataAPP_DELEGATION[".showEditInPopup"] = false;

$tdataAPP_DELEGATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_DELEGATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_DELEGATION[".fieldsForRegister"] = array();
	
$tdataAPP_DELEGATION[".listAjax"] = false;

	$tdataAPP_DELEGATION[".audit"] = true;

	$tdataAPP_DELEGATION[".locking"] = false;

$tdataAPP_DELEGATION[".edit"] = true;
$tdataAPP_DELEGATION[".afterEditAction"] = 1;
$tdataAPP_DELEGATION[".closePopupAfterEdit"] = 1;
$tdataAPP_DELEGATION[".afterEditActionDetTable"] = "";

$tdataAPP_DELEGATION[".add"] = true;
$tdataAPP_DELEGATION[".afterAddAction"] = 1;
$tdataAPP_DELEGATION[".closePopupAfterAdd"] = 1;
$tdataAPP_DELEGATION[".afterAddActionDetTable"] = "";

$tdataAPP_DELEGATION[".list"] = true;

$tdataAPP_DELEGATION[".inlineEdit"] = true;

$tdataAPP_DELEGATION[".updateSelected"] = true;

$tdataAPP_DELEGATION[".reorderRecordsByHeader"] = true;
$tdataAPP_DELEGATION[".createSortByDropdown"] = true;
$tdataAPP_DELEGATION[".strSortControlSettingsJSON"] = "";



$tdataAPP_DELEGATION[".inlineAdd"] = true;
$tdataAPP_DELEGATION[".copy"] = true;
$tdataAPP_DELEGATION[".view"] = true;

$tdataAPP_DELEGATION[".import"] = true;

$tdataAPP_DELEGATION[".exportTo"] = true;

$tdataAPP_DELEGATION[".printFriendly"] = true;

$tdataAPP_DELEGATION[".delete"] = true;

$tdataAPP_DELEGATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_DELEGATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_DELEGATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_DELEGATION[".searchSaving"] = false;
//

$tdataAPP_DELEGATION[".showSearchPanel"] = true;
		$tdataAPP_DELEGATION[".flexibleSearch"] = true;

$tdataAPP_DELEGATION[".isUseAjaxSuggest"] = true;

$tdataAPP_DELEGATION[".rowHighlite"] = true;



																

$tdataAPP_DELEGATION[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_DELEGATION[".buttonsAdded"] = false;

$tdataAPP_DELEGATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_DELEGATION[".isUseTimeForSearch"] = false;



$tdataAPP_DELEGATION[".badgeColor"] = "BC8F8F";


$tdataAPP_DELEGATION[".allSearchFields"] = array();
$tdataAPP_DELEGATION[".filterFields"] = array();
$tdataAPP_DELEGATION[".requiredSearchFields"] = array();

$tdataAPP_DELEGATION[".allSearchFields"][] = "APP_UID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_PREVIOUS";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_LAST_INDEX";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "PRO_UID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "TAS_UID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "USR_UID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_TYPE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_THREAD";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_THREAD_STATUS";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_FINISH_DATE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_TASK_DUE_DATE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_RISK_DATE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_DURATION";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_QUEUE_DURATION";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_DELAY_DURATION";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_STARTED";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_FINISHED";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_DELAYED";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DEL_DATA";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "APP_OVERDUE_PERCENTAGE";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "DELEGATION_ID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "APP_NUMBER";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "USR_ID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "PRO_ID";
	$tdataAPP_DELEGATION[".allSearchFields"][] = "TAS_ID";
	

$tdataAPP_DELEGATION[".googleLikeFields"] = array();
$tdataAPP_DELEGATION[".googleLikeFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".googleLikeFields"][] = "TAS_ID";


$tdataAPP_DELEGATION[".advSearchFields"] = array();
$tdataAPP_DELEGATION[".advSearchFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".advSearchFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".advSearchFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".advSearchFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".advSearchFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".advSearchFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".tableType"] = "list";

$tdataAPP_DELEGATION[".printerPageOrientation"] = 0;
$tdataAPP_DELEGATION[".nPrinterPageScale"] = 100;

$tdataAPP_DELEGATION[".nPrinterSplitRecords"] = 40;

$tdataAPP_DELEGATION[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_DELEGATION[".geocodingEnabled"] = false;





$tdataAPP_DELEGATION[".listGridLayout"] = 3;


$tdataAPP_DELEGATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_DELEGATION[".pageSize"] = 20;

$tdataAPP_DELEGATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_DELEGATION[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_DELEGATION[".orderindexes"] = array();

$tdataAPP_DELEGATION[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	DEL_PREVIOUS,  	DEL_LAST_INDEX,  	PRO_UID,  	TAS_UID,  	USR_UID,  	DEL_TYPE,  	DEL_THREAD,  	DEL_THREAD_STATUS,  	DEL_PRIORITY,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_FINISH_DATE,  	DEL_TASK_DUE_DATE,  	DEL_RISK_DATE,  	DEL_DURATION,  	DEL_QUEUE_DURATION,  	DEL_DELAY_DURATION,  	DEL_STARTED,  	DEL_FINISHED,  	DEL_DELAYED,  	DEL_DATA,  	APP_OVERDUE_PERCENTAGE,  	DELEGATION_ID,  	APP_NUMBER,  	USR_ID,  	PRO_ID,  	TAS_ID";
$tdataAPP_DELEGATION[".sqlFrom"] = "FROM APP_DELEGATION";
$tdataAPP_DELEGATION[".sqlWhereExpr"] = "";
$tdataAPP_DELEGATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_DELEGATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_DELEGATION[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_DELEGATION[".highlightSearchResults"] = true;

$tableKeysAPP_DELEGATION = array();
$tableKeysAPP_DELEGATION[] = "APP_UID";
$tableKeysAPP_DELEGATION[] = "DEL_INDEX";
$tdataAPP_DELEGATION[".Keys"] = $tableKeysAPP_DELEGATION;

$tdataAPP_DELEGATION[".listFields"] = array();
$tdataAPP_DELEGATION[".listFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".listFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".listFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".listFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".listFields"][] = "TAS_ID";
$tdataAPP_DELEGATION[".listFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".listFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".listFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".listFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".listFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".listFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_DELEGATION[".hideMobileList"] = array();


$tdataAPP_DELEGATION[".viewFields"] = array();
$tdataAPP_DELEGATION[".viewFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".viewFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".viewFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".viewFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".viewFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".viewFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".viewFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".viewFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".viewFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".viewFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".viewFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".addFields"] = array();
$tdataAPP_DELEGATION[".addFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".addFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".addFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".addFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".addFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".addFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".addFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".addFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".addFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".addFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".masterListFields"] = array();
$tdataAPP_DELEGATION[".masterListFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".masterListFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".masterListFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".masterListFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".masterListFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".masterListFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".masterListFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".masterListFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".masterListFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".masterListFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".masterListFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".inlineAddFields"] = array();
$tdataAPP_DELEGATION[".inlineAddFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "TAS_ID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".inlineAddFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_DELEGATION[".editFields"] = array();
$tdataAPP_DELEGATION[".editFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".editFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".editFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".editFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".editFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".editFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".editFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".editFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".editFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".editFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".inlineEditFields"] = array();
$tdataAPP_DELEGATION[".inlineEditFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "TAS_ID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".inlineEditFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_DELEGATION[".updateSelectedFields"] = array();
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".updateSelectedFields"][] = "APP_OVERDUE_PERCENTAGE";


$tdataAPP_DELEGATION[".exportFields"] = array();
$tdataAPP_DELEGATION[".exportFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".exportFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".exportFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".exportFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".exportFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".exportFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".exportFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".exportFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".exportFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".exportFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".exportFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".importFields"] = array();
$tdataAPP_DELEGATION[".importFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".importFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".importFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".importFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".importFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".importFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".importFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".importFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".importFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".importFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".importFields"][] = "TAS_ID";

$tdataAPP_DELEGATION[".printFields"] = array();
$tdataAPP_DELEGATION[".printFields"][] = "APP_UID";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_INDEX";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_PREVIOUS";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_LAST_INDEX";
$tdataAPP_DELEGATION[".printFields"][] = "PRO_UID";
$tdataAPP_DELEGATION[".printFields"][] = "TAS_UID";
$tdataAPP_DELEGATION[".printFields"][] = "USR_UID";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_TYPE";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_THREAD";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_PRIORITY";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_INIT_DATE";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_FINISH_DATE";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_RISK_DATE";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_DURATION";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_STARTED";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_FINISHED";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_DELAYED";
$tdataAPP_DELEGATION[".printFields"][] = "DEL_DATA";
$tdataAPP_DELEGATION[".printFields"][] = "APP_OVERDUE_PERCENTAGE";
$tdataAPP_DELEGATION[".printFields"][] = "DELEGATION_ID";
$tdataAPP_DELEGATION[".printFields"][] = "APP_NUMBER";
$tdataAPP_DELEGATION[".printFields"][] = "USR_ID";
$tdataAPP_DELEGATION[".printFields"][] = "PRO_ID";
$tdataAPP_DELEGATION[".printFields"][] = "TAS_ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","APP_UID");
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




	$tdataAPP_DELEGATION["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_INDEX");
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




	$tdataAPP_DELEGATION["DEL_INDEX"] = $fdata;
//	DEL_PREVIOUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEL_PREVIOUS";
	$fdata["GoodName"] = "DEL_PREVIOUS";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_PREVIOUS");
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

		$fdata["strField"] = "DEL_PREVIOUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PREVIOUS";

	
	
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




	$tdataAPP_DELEGATION["DEL_PREVIOUS"] = $fdata;
//	DEL_LAST_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEL_LAST_INDEX";
	$fdata["GoodName"] = "DEL_LAST_INDEX";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_LAST_INDEX");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_LAST_INDEX"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","PRO_UID");
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




	$tdataAPP_DELEGATION["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","TAS_UID");
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




	$tdataAPP_DELEGATION["TAS_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","USR_UID");
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




	$tdataAPP_DELEGATION["USR_UID"] = $fdata;
//	DEL_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DEL_TYPE";
	$fdata["GoodName"] = "DEL_TYPE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_TYPE");
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

		$fdata["strField"] = "DEL_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_TYPE";

	
	
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




	$tdataAPP_DELEGATION["DEL_TYPE"] = $fdata;
//	DEL_THREAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DEL_THREAD";
	$fdata["GoodName"] = "DEL_THREAD";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_THREAD");
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

		$fdata["strField"] = "DEL_THREAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_THREAD";

	
	
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




	$tdataAPP_DELEGATION["DEL_THREAD"] = $fdata;
//	DEL_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DEL_THREAD_STATUS";
	$fdata["GoodName"] = "DEL_THREAD_STATUS";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_THREAD_STATUS");
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




	$tdataAPP_DELEGATION["DEL_THREAD_STATUS"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_PRIORITY");
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




	$tdataAPP_DELEGATION["DEL_PRIORITY"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_DELEGATE_DATE");
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




	$tdataAPP_DELEGATION["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_INIT_DATE");
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




	$tdataAPP_DELEGATION["DEL_INIT_DATE"] = $fdata;
//	DEL_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_FINISH_DATE";
	$fdata["GoodName"] = "DEL_FINISH_DATE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_FINISH_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_FINISH_DATE"] = $fdata;
//	DEL_TASK_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_TASK_DUE_DATE";
	$fdata["GoodName"] = "DEL_TASK_DUE_DATE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_TASK_DUE_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_TASK_DUE_DATE"] = $fdata;
//	DEL_RISK_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEL_RISK_DATE";
	$fdata["GoodName"] = "DEL_RISK_DATE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_RISK_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_RISK_DATE"] = $fdata;
//	DEL_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DEL_DURATION";
	$fdata["GoodName"] = "DEL_DURATION";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_DURATION");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_DURATION"] = $fdata;
//	DEL_QUEUE_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DEL_QUEUE_DURATION";
	$fdata["GoodName"] = "DEL_QUEUE_DURATION";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_QUEUE_DURATION");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_QUEUE_DURATION"] = $fdata;
//	DEL_DELAY_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEL_DELAY_DURATION";
	$fdata["GoodName"] = "DEL_DELAY_DURATION";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_DELAY_DURATION");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_DELAY_DURATION"] = $fdata;
//	DEL_STARTED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DEL_STARTED";
	$fdata["GoodName"] = "DEL_STARTED";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_STARTED");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_STARTED"] = $fdata;
//	DEL_FINISHED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DEL_FINISHED";
	$fdata["GoodName"] = "DEL_FINISHED";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_FINISHED");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_FINISHED"] = $fdata;
//	DEL_DELAYED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DEL_DELAYED";
	$fdata["GoodName"] = "DEL_DELAYED";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_DELAYED");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["DEL_DELAYED"] = $fdata;
//	DEL_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DEL_DATA";
	$fdata["GoodName"] = "DEL_DATA";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DEL_DATA");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "DEL_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DATA";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataAPP_DELEGATION["DEL_DATA"] = $fdata;
//	APP_OVERDUE_PERCENTAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "APP_OVERDUE_PERCENTAGE";
	$fdata["GoodName"] = "APP_OVERDUE_PERCENTAGE";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","APP_OVERDUE_PERCENTAGE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DELEGATION["APP_OVERDUE_PERCENTAGE"] = $fdata;
//	DELEGATION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DELEGATION_ID";
	$fdata["GoodName"] = "DELEGATION_ID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","DELEGATION_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DELEGATION_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DELEGATION_ID";

	
	
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




	$tdataAPP_DELEGATION["DELEGATION_ID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","APP_NUMBER");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataAPP_DELEGATION["APP_NUMBER"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","USR_ID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataAPP_DELEGATION["USR_ID"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","PRO_ID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataAPP_DELEGATION["PRO_ID"] = $fdata;
//	TAS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "TAS_ID";
	$fdata["GoodName"] = "TAS_ID";
	$fdata["ownerTable"] = "APP_DELEGATION";
	$fdata["Label"] = GetFieldLabel("APP_DELEGATION","TAS_ID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataAPP_DELEGATION["TAS_ID"] = $fdata;


$tables_data["APP_DELEGATION"]=&$tdataAPP_DELEGATION;
$field_labels["APP_DELEGATION"] = &$fieldLabelsAPP_DELEGATION;
$fieldToolTips["APP_DELEGATION"] = &$fieldToolTipsAPP_DELEGATION;
$placeHolders["APP_DELEGATION"] = &$placeHoldersAPP_DELEGATION;
$page_titles["APP_DELEGATION"] = &$pageTitlesAPP_DELEGATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_DELEGATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_DELEGATION"] = array();


	
				$strOriginalDetailsTable="APPLICATION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="APPLICATION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "APPLICATION";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["APP_DELEGATION"][0] = $masterParams;
				$masterTablesData["APP_DELEGATION"][0]["masterKeys"] = array();
	$masterTablesData["APP_DELEGATION"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["APP_DELEGATION"][0]["detailKeys"] = array();
	$masterTablesData["APP_DELEGATION"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_DELEGATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	DEL_PREVIOUS,  	DEL_LAST_INDEX,  	PRO_UID,  	TAS_UID,  	USR_UID,  	DEL_TYPE,  	DEL_THREAD,  	DEL_THREAD_STATUS,  	DEL_PRIORITY,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_FINISH_DATE,  	DEL_TASK_DUE_DATE,  	DEL_RISK_DATE,  	DEL_DURATION,  	DEL_QUEUE_DURATION,  	DEL_DELAY_DURATION,  	DEL_STARTED,  	DEL_FINISHED,  	DEL_DELAYED,  	DEL_DATA,  	APP_OVERDUE_PERCENTAGE,  	DELEGATION_ID,  	APP_NUMBER,  	USR_ID,  	PRO_ID,  	TAS_ID";
$proto0["m_strFrom"] = "FROM APP_DELEGATION";
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
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_DELEGATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "APP_DELEGATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PREVIOUS",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto10["m_sql"] = "DEL_PREVIOUS";
$proto10["m_srcTableName"] = "APP_DELEGATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_LAST_INDEX",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto12["m_sql"] = "DEL_LAST_INDEX";
$proto12["m_srcTableName"] = "APP_DELEGATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto14["m_sql"] = "PRO_UID";
$proto14["m_srcTableName"] = "APP_DELEGATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto16["m_sql"] = "TAS_UID";
$proto16["m_srcTableName"] = "APP_DELEGATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto18["m_sql"] = "USR_UID";
$proto18["m_srcTableName"] = "APP_DELEGATION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_TYPE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto20["m_sql"] = "DEL_TYPE";
$proto20["m_srcTableName"] = "APP_DELEGATION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_THREAD",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto22["m_sql"] = "DEL_THREAD";
$proto22["m_srcTableName"] = "APP_DELEGATION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_THREAD_STATUS",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto24["m_sql"] = "DEL_THREAD_STATUS";
$proto24["m_srcTableName"] = "APP_DELEGATION";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto26["m_sql"] = "DEL_PRIORITY";
$proto26["m_srcTableName"] = "APP_DELEGATION";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto28["m_sql"] = "DEL_DELEGATE_DATE";
$proto28["m_srcTableName"] = "APP_DELEGATION";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto30["m_sql"] = "DEL_INIT_DATE";
$proto30["m_srcTableName"] = "APP_DELEGATION";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_FINISH_DATE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto32["m_sql"] = "DEL_FINISH_DATE";
$proto32["m_srcTableName"] = "APP_DELEGATION";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_TASK_DUE_DATE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto34["m_sql"] = "DEL_TASK_DUE_DATE";
$proto34["m_srcTableName"] = "APP_DELEGATION";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_RISK_DATE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto36["m_sql"] = "DEL_RISK_DATE";
$proto36["m_srcTableName"] = "APP_DELEGATION";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DURATION",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto38["m_sql"] = "DEL_DURATION";
$proto38["m_srcTableName"] = "APP_DELEGATION";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_QUEUE_DURATION",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto40["m_sql"] = "DEL_QUEUE_DURATION";
$proto40["m_srcTableName"] = "APP_DELEGATION";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELAY_DURATION",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto42["m_sql"] = "DEL_DELAY_DURATION";
$proto42["m_srcTableName"] = "APP_DELEGATION";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_STARTED",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto44["m_sql"] = "DEL_STARTED";
$proto44["m_srcTableName"] = "APP_DELEGATION";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_FINISHED",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto46["m_sql"] = "DEL_FINISHED";
$proto46["m_srcTableName"] = "APP_DELEGATION";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELAYED",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto48["m_sql"] = "DEL_DELAYED";
$proto48["m_srcTableName"] = "APP_DELEGATION";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DATA",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto50["m_sql"] = "DEL_DATA";
$proto50["m_srcTableName"] = "APP_DELEGATION";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_OVERDUE_PERCENTAGE",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto52["m_sql"] = "APP_OVERDUE_PERCENTAGE";
$proto52["m_srcTableName"] = "APP_DELEGATION";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DELEGATION_ID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto54["m_sql"] = "DELEGATION_ID";
$proto54["m_srcTableName"] = "APP_DELEGATION";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto56["m_sql"] = "APP_NUMBER";
$proto56["m_srcTableName"] = "APP_DELEGATION";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto58["m_sql"] = "USR_ID";
$proto58["m_srcTableName"] = "APP_DELEGATION";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto60["m_sql"] = "PRO_ID";
$proto60["m_srcTableName"] = "APP_DELEGATION";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_ID",
	"m_strTable" => "APP_DELEGATION",
	"m_srcTableName" => "APP_DELEGATION"
));

$proto62["m_sql"] = "TAS_ID";
$proto62["m_srcTableName"] = "APP_DELEGATION";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "APP_DELEGATION";
$proto65["m_srcTableName"] = "APP_DELEGATION";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "APP_UID";
$proto65["m_columns"][] = "DEL_INDEX";
$proto65["m_columns"][] = "DEL_PREVIOUS";
$proto65["m_columns"][] = "DEL_LAST_INDEX";
$proto65["m_columns"][] = "PRO_UID";
$proto65["m_columns"][] = "TAS_UID";
$proto65["m_columns"][] = "USR_UID";
$proto65["m_columns"][] = "DEL_TYPE";
$proto65["m_columns"][] = "DEL_THREAD";
$proto65["m_columns"][] = "DEL_THREAD_STATUS";
$proto65["m_columns"][] = "DEL_PRIORITY";
$proto65["m_columns"][] = "DEL_DELEGATE_DATE";
$proto65["m_columns"][] = "DEL_INIT_DATE";
$proto65["m_columns"][] = "DEL_FINISH_DATE";
$proto65["m_columns"][] = "DEL_TASK_DUE_DATE";
$proto65["m_columns"][] = "DEL_RISK_DATE";
$proto65["m_columns"][] = "DEL_DURATION";
$proto65["m_columns"][] = "DEL_QUEUE_DURATION";
$proto65["m_columns"][] = "DEL_DELAY_DURATION";
$proto65["m_columns"][] = "DEL_STARTED";
$proto65["m_columns"][] = "DEL_FINISHED";
$proto65["m_columns"][] = "DEL_DELAYED";
$proto65["m_columns"][] = "DEL_DATA";
$proto65["m_columns"][] = "APP_OVERDUE_PERCENTAGE";
$proto65["m_columns"][] = "DELEGATION_ID";
$proto65["m_columns"][] = "APP_NUMBER";
$proto65["m_columns"][] = "USR_ID";
$proto65["m_columns"][] = "PRO_ID";
$proto65["m_columns"][] = "TAS_ID";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "APP_DELEGATION";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "APP_DELEGATION";
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
$proto0["m_srcTableName"]="APP_DELEGATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_DELEGATION = createSqlQuery_APP_DELEGATION();


	
						;

																													

$tdataAPP_DELEGATION[".sqlquery"] = $queryData_APP_DELEGATION;

$tableEvents["APP_DELEGATION"] = new eventsBase;
$tdataAPP_DELEGATION[".hasEvents"] = false;

?>
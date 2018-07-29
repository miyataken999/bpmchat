<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCASE_SCHEDULER = array();
	$tdataCASE_SCHEDULER[".truncateText"] = true;
	$tdataCASE_SCHEDULER[".NumberOfChars"] = 20;
	$tdataCASE_SCHEDULER[".ShortName"] = "CASE_SCHEDULER";
	$tdataCASE_SCHEDULER[".OwnerID"] = "";
	$tdataCASE_SCHEDULER[".OriginalTable"] = "CASE_SCHEDULER";

//	field labels
$fieldLabelsCASE_SCHEDULER = array();
$fieldToolTipsCASE_SCHEDULER = array();
$pageTitlesCASE_SCHEDULER = array();
$placeHoldersCASE_SCHEDULER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCASE_SCHEDULER["Japanese"] = array();
	$fieldToolTipsCASE_SCHEDULER["Japanese"] = array();
	$placeHoldersCASE_SCHEDULER["Japanese"] = array();
	$pageTitlesCASE_SCHEDULER["Japanese"] = array();
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_UID"] = "SCHのUID";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_UID"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_NAME"] = "SCHデル・ユーザー名";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_NAME"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_NAME"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_PASS"] = "SCHデルユーザーパス";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_PASS"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_PASS"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_UID"] = "SCHデルユーザーのuid";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_UID"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_DEL_USER_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_NAME"] = "SCH名";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_NAME"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_NAME"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["PRO_UID"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["PRO_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["TAS_UID"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["TAS_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_TIME_NEXT_RUN"] = "SCH時間次のラン";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_TIME_NEXT_RUN"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_TIME_NEXT_RUN"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_LAST_RUN_TIME"] = "SCH最後の実行時間";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_LAST_RUN_TIME"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_LAST_RUN_TIME"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_STATE"] = "SCH状態";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_STATE"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_STATE"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_LAST_STATE"] = "SCH最後の状態";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_LAST_STATE"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_LAST_STATE"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["USR_UID"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["USR_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_OPTION"] = "SCHオプション";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_OPTION"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_OPTION"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_START_TIME"] = "SCH時間を開始";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_START_TIME"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_START_TIME"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_START_DATE"] = "SCH開始日";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_START_DATE"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_START_DATE"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_DAYS_PERFORM_TASK"] = "SCH日は、タスクを実行します";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_DAYS_PERFORM_TASK"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_DAYS_PERFORM_TASK"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_EVERY_DAYS"] = "SCHすべての日";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_EVERY_DAYS"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_EVERY_DAYS"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_WEEK_DAYS"] = "SCHの曜日";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_WEEK_DAYS"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_WEEK_DAYS"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_START_DAY"] = "SCH日スタート";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_START_DAY"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_START_DAY"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_MONTHS"] = "SCHヶ月";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_MONTHS"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_MONTHS"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_END_DATE"] = "SCHの終了日";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_END_DATE"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_END_DATE"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_REPEAT_EVERY"] = "SCHごとに繰り返します";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_REPEAT_EVERY"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_REPEAT_EVERY"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_REPEAT_UNTIL"] = "SCHリピートまで";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_REPEAT_UNTIL"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_REPEAT_UNTIL"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_REPEAT_STOP_IF_RUNNING"] = "SCHリピート停止実行している場合";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_REPEAT_STOP_IF_RUNNING"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_REPEAT_STOP_IF_RUNNING"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["SCH_EXECUTION_DATE"] = "SCH実行日";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["SCH_EXECUTION_DATE"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["SCH_EXECUTION_DATE"] = "";
	$fieldLabelsCASE_SCHEDULER["Japanese"]["CASE_SH_PLUGIN_UID"] = "ケースSHのプラグインのUID";
	$fieldToolTipsCASE_SCHEDULER["Japanese"]["CASE_SH_PLUGIN_UID"] = "";
	$placeHoldersCASE_SCHEDULER["Japanese"]["CASE_SH_PLUGIN_UID"] = "";
	if (count($fieldToolTipsCASE_SCHEDULER["Japanese"]))
		$tdataCASE_SCHEDULER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCASE_SCHEDULER["English"] = array();
	$fieldToolTipsCASE_SCHEDULER["English"] = array();
	$placeHoldersCASE_SCHEDULER["English"] = array();
	$pageTitlesCASE_SCHEDULER["English"] = array();
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_UID"] = "SCHのUID";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_UID"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_DEL_USER_NAME"] = "SCHデル・ユーザー名";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_DEL_USER_NAME"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_DEL_USER_NAME"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_DEL_USER_PASS"] = "SCHデルユーザーパス";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_DEL_USER_PASS"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_DEL_USER_PASS"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_DEL_USER_UID"] = "SCHデルユーザーのuid";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_DEL_USER_UID"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_DEL_USER_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_NAME"] = "SCH名";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_NAME"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_NAME"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCASE_SCHEDULER["English"]["PRO_UID"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["PRO_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsCASE_SCHEDULER["English"]["TAS_UID"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["TAS_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_TIME_NEXT_RUN"] = "SCH時間次のラン";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_TIME_NEXT_RUN"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_TIME_NEXT_RUN"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_LAST_RUN_TIME"] = "SCH最後の実行時間";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_LAST_RUN_TIME"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_LAST_RUN_TIME"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_STATE"] = "SCH状態";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_STATE"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_STATE"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_LAST_STATE"] = "SCH最後の状態";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_LAST_STATE"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_LAST_STATE"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsCASE_SCHEDULER["English"]["USR_UID"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["USR_UID"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_OPTION"] = "SCHオプション";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_OPTION"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_OPTION"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_START_TIME"] = "SCH時間を開始";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_START_TIME"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_START_TIME"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_START_DATE"] = "SCH開始日";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_START_DATE"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_START_DATE"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_DAYS_PERFORM_TASK"] = "SCH日は、タスクを実行します";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_DAYS_PERFORM_TASK"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_DAYS_PERFORM_TASK"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_EVERY_DAYS"] = "SCHすべての日";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_EVERY_DAYS"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_EVERY_DAYS"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_WEEK_DAYS"] = "SCHの曜日";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_WEEK_DAYS"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_WEEK_DAYS"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_START_DAY"] = "SCH日スタート";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_START_DAY"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_START_DAY"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_MONTHS"] = "SCHヶ月";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_MONTHS"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_MONTHS"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_END_DATE"] = "SCHの終了日";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_END_DATE"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_END_DATE"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_REPEAT_EVERY"] = "SCHごとに繰り返します";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_REPEAT_EVERY"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_REPEAT_EVERY"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_REPEAT_UNTIL"] = "SCHリピートまで";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_REPEAT_UNTIL"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_REPEAT_UNTIL"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_REPEAT_STOP_IF_RUNNING"] = "SCHリピート停止実行している場合";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_REPEAT_STOP_IF_RUNNING"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_REPEAT_STOP_IF_RUNNING"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["SCH_EXECUTION_DATE"] = "SCH実行日";
	$fieldToolTipsCASE_SCHEDULER["English"]["SCH_EXECUTION_DATE"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["SCH_EXECUTION_DATE"] = "";
	$fieldLabelsCASE_SCHEDULER["English"]["CASE_SH_PLUGIN_UID"] = "ケースSHのプラグインのUID";
	$fieldToolTipsCASE_SCHEDULER["English"]["CASE_SH_PLUGIN_UID"] = "";
	$placeHoldersCASE_SCHEDULER["English"]["CASE_SH_PLUGIN_UID"] = "";
	if (count($fieldToolTipsCASE_SCHEDULER["English"]))
		$tdataCASE_SCHEDULER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCASE_SCHEDULER[""] = array();
	$fieldToolTipsCASE_SCHEDULER[""] = array();
	$placeHoldersCASE_SCHEDULER[""] = array();
	$pageTitlesCASE_SCHEDULER[""] = array();
	if (count($fieldToolTipsCASE_SCHEDULER[""]))
		$tdataCASE_SCHEDULER[".isUseToolTips"] = true;
}


	$tdataCASE_SCHEDULER[".NCSearch"] = true;



$tdataCASE_SCHEDULER[".shortTableName"] = "CASE_SCHEDULER";
$tdataCASE_SCHEDULER[".nSecOptions"] = 0;
$tdataCASE_SCHEDULER[".recsPerRowPrint"] = 1;
$tdataCASE_SCHEDULER[".mainTableOwnerID"] = "";
$tdataCASE_SCHEDULER[".moveNext"] = 0;
$tdataCASE_SCHEDULER[".entityType"] = 0;

$tdataCASE_SCHEDULER[".strOriginalTableName"] = "CASE_SCHEDULER";

	



$tdataCASE_SCHEDULER[".showAddInPopup"] = false;

$tdataCASE_SCHEDULER[".showEditInPopup"] = false;

$tdataCASE_SCHEDULER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCASE_SCHEDULER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCASE_SCHEDULER[".fieldsForRegister"] = array();
	
$tdataCASE_SCHEDULER[".listAjax"] = false;

	$tdataCASE_SCHEDULER[".audit"] = true;

	$tdataCASE_SCHEDULER[".locking"] = false;

$tdataCASE_SCHEDULER[".edit"] = true;
$tdataCASE_SCHEDULER[".afterEditAction"] = 1;
$tdataCASE_SCHEDULER[".closePopupAfterEdit"] = 1;
$tdataCASE_SCHEDULER[".afterEditActionDetTable"] = "";

$tdataCASE_SCHEDULER[".add"] = true;
$tdataCASE_SCHEDULER[".afterAddAction"] = 1;
$tdataCASE_SCHEDULER[".closePopupAfterAdd"] = 1;
$tdataCASE_SCHEDULER[".afterAddActionDetTable"] = "";

$tdataCASE_SCHEDULER[".list"] = true;

$tdataCASE_SCHEDULER[".inlineEdit"] = true;


$tdataCASE_SCHEDULER[".reorderRecordsByHeader"] = true;
$tdataCASE_SCHEDULER[".createSortByDropdown"] = true;
$tdataCASE_SCHEDULER[".strSortControlSettingsJSON"] = "";



$tdataCASE_SCHEDULER[".inlineAdd"] = true;
$tdataCASE_SCHEDULER[".view"] = true;

$tdataCASE_SCHEDULER[".import"] = true;

$tdataCASE_SCHEDULER[".exportTo"] = true;

$tdataCASE_SCHEDULER[".printFriendly"] = true;

$tdataCASE_SCHEDULER[".delete"] = true;

$tdataCASE_SCHEDULER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCASE_SCHEDULER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCASE_SCHEDULER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCASE_SCHEDULER[".searchSaving"] = false;
//

$tdataCASE_SCHEDULER[".showSearchPanel"] = true;
		$tdataCASE_SCHEDULER[".flexibleSearch"] = true;

$tdataCASE_SCHEDULER[".isUseAjaxSuggest"] = true;

$tdataCASE_SCHEDULER[".rowHighlite"] = true;



				

$tdataCASE_SCHEDULER[".ajaxCodeSnippetAdded"] = false;

$tdataCASE_SCHEDULER[".buttonsAdded"] = false;

$tdataCASE_SCHEDULER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCASE_SCHEDULER[".isUseTimeForSearch"] = false;





$tdataCASE_SCHEDULER[".allSearchFields"] = array();
$tdataCASE_SCHEDULER[".filterFields"] = array();
$tdataCASE_SCHEDULER[".requiredSearchFields"] = array();

$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_UID";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_DEL_USER_NAME";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_DEL_USER_PASS";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_DEL_USER_UID";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_NAME";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "PRO_UID";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "TAS_UID";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_TIME_NEXT_RUN";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_LAST_RUN_TIME";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_STATE";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_LAST_STATE";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "USR_UID";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_OPTION";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_START_TIME";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_START_DATE";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_DAYS_PERFORM_TASK";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_EVERY_DAYS";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_WEEK_DAYS";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_START_DAY";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_MONTHS";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_END_DATE";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_REPEAT_EVERY";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_REPEAT_UNTIL";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "SCH_EXECUTION_DATE";
	$tdataCASE_SCHEDULER[".allSearchFields"][] = "CASE_SH_PLUGIN_UID";
	

$tdataCASE_SCHEDULER[".googleLikeFields"] = array();
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".googleLikeFields"][] = "CASE_SH_PLUGIN_UID";


$tdataCASE_SCHEDULER[".advSearchFields"] = array();
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".advSearchFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".tableType"] = "list";

$tdataCASE_SCHEDULER[".printerPageOrientation"] = 0;
$tdataCASE_SCHEDULER[".nPrinterPageScale"] = 100;

$tdataCASE_SCHEDULER[".nPrinterSplitRecords"] = 40;

$tdataCASE_SCHEDULER[".nPrinterPDFSplitRecords"] = 40;



$tdataCASE_SCHEDULER[".geocodingEnabled"] = false;





$tdataCASE_SCHEDULER[".listGridLayout"] = 3;


$tdataCASE_SCHEDULER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCASE_SCHEDULER[".pageSize"] = 20;

$tdataCASE_SCHEDULER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCASE_SCHEDULER[".strOrderBy"] = $tstrOrderBy;

$tdataCASE_SCHEDULER[".orderindexes"] = array();

$tdataCASE_SCHEDULER[".sqlHead"] = "SELECT SCH_UID,  	SCH_DEL_USER_NAME,  	SCH_DEL_USER_PASS,  	SCH_DEL_USER_UID,  	SCH_NAME,  	PRO_UID,  	TAS_UID,  	SCH_TIME_NEXT_RUN,  	SCH_LAST_RUN_TIME,  	SCH_STATE,  	SCH_LAST_STATE,  	USR_UID,  	SCH_OPTION,  	SCH_START_TIME,  	SCH_START_DATE,  	SCH_DAYS_PERFORM_TASK,  	SCH_EVERY_DAYS,  	SCH_WEEK_DAYS,  	SCH_START_DAY,  	SCH_MONTHS,  	SCH_END_DATE,  	SCH_REPEAT_EVERY,  	SCH_REPEAT_UNTIL,  	SCH_REPEAT_STOP_IF_RUNNING,  	SCH_EXECUTION_DATE,  	CASE_SH_PLUGIN_UID";
$tdataCASE_SCHEDULER[".sqlFrom"] = "FROM CASE_SCHEDULER";
$tdataCASE_SCHEDULER[".sqlWhereExpr"] = "";
$tdataCASE_SCHEDULER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCASE_SCHEDULER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCASE_SCHEDULER[".arrGroupsPerPage"] = $arrGPP;

$tdataCASE_SCHEDULER[".highlightSearchResults"] = true;

$tableKeysCASE_SCHEDULER = array();
$tableKeysCASE_SCHEDULER[] = "SCH_UID";
$tdataCASE_SCHEDULER[".Keys"] = $tableKeysCASE_SCHEDULER;

$tdataCASE_SCHEDULER[".listFields"] = array();
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".listFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".listFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".listFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".listFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".listFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".hideMobileList"] = array();


$tdataCASE_SCHEDULER[".viewFields"] = array();
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".viewFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".viewFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".viewFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".viewFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".viewFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".addFields"] = array();
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".addFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".addFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".addFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".addFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".addFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".masterListFields"] = array();
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".masterListFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".masterListFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".masterListFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".masterListFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".masterListFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".inlineAddFields"] = array();
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".inlineAddFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".editFields"] = array();
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".editFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".editFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".editFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".editFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".editFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".inlineEditFields"] = array();
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".inlineEditFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".updateSelectedFields"] = array();
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".updateSelectedFields"][] = "CASE_SH_PLUGIN_UID";


$tdataCASE_SCHEDULER[".exportFields"] = array();
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".exportFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".exportFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".exportFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".exportFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".exportFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".importFields"] = array();
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".importFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".importFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".importFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".importFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".importFields"][] = "CASE_SH_PLUGIN_UID";

$tdataCASE_SCHEDULER[".printFields"] = array();
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_UID";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_DEL_USER_NAME";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_DEL_USER_PASS";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_DEL_USER_UID";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_NAME";
$tdataCASE_SCHEDULER[".printFields"][] = "PRO_UID";
$tdataCASE_SCHEDULER[".printFields"][] = "TAS_UID";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_TIME_NEXT_RUN";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_LAST_RUN_TIME";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_STATE";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_LAST_STATE";
$tdataCASE_SCHEDULER[".printFields"][] = "USR_UID";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_OPTION";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_START_TIME";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_START_DATE";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_DAYS_PERFORM_TASK";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_EVERY_DAYS";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_WEEK_DAYS";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_START_DAY";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_MONTHS";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_END_DATE";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_REPEAT_EVERY";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_REPEAT_UNTIL";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$tdataCASE_SCHEDULER[".printFields"][] = "SCH_EXECUTION_DATE";
$tdataCASE_SCHEDULER[".printFields"][] = "CASE_SH_PLUGIN_UID";

//	SCH_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SCH_UID";
	$fdata["GoodName"] = "SCH_UID";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_UID");
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

		$fdata["strField"] = "SCH_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_UID";

	
	
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




	$tdataCASE_SCHEDULER["SCH_UID"] = $fdata;
//	SCH_DEL_USER_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SCH_DEL_USER_NAME";
	$fdata["GoodName"] = "SCH_DEL_USER_NAME";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_DEL_USER_NAME");
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

		$fdata["strField"] = "SCH_DEL_USER_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_DEL_USER_NAME";

	
	
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




	$tdataCASE_SCHEDULER["SCH_DEL_USER_NAME"] = $fdata;
//	SCH_DEL_USER_PASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SCH_DEL_USER_PASS";
	$fdata["GoodName"] = "SCH_DEL_USER_PASS";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_DEL_USER_PASS");
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

		$fdata["strField"] = "SCH_DEL_USER_PASS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_DEL_USER_PASS";

	
	
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




	$tdataCASE_SCHEDULER["SCH_DEL_USER_PASS"] = $fdata;
//	SCH_DEL_USER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SCH_DEL_USER_UID";
	$fdata["GoodName"] = "SCH_DEL_USER_UID";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_DEL_USER_UID");
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

		$fdata["strField"] = "SCH_DEL_USER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_DEL_USER_UID";

	
	
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




	$tdataCASE_SCHEDULER["SCH_DEL_USER_UID"] = $fdata;
//	SCH_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SCH_NAME";
	$fdata["GoodName"] = "SCH_NAME";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_NAME");
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

		$fdata["strField"] = "SCH_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_NAME";

	
	
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




	$tdataCASE_SCHEDULER["SCH_NAME"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","PRO_UID");
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




	$tdataCASE_SCHEDULER["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","TAS_UID");
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




	$tdataCASE_SCHEDULER["TAS_UID"] = $fdata;
//	SCH_TIME_NEXT_RUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SCH_TIME_NEXT_RUN";
	$fdata["GoodName"] = "SCH_TIME_NEXT_RUN";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_TIME_NEXT_RUN");
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

		$fdata["strField"] = "SCH_TIME_NEXT_RUN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_TIME_NEXT_RUN";

	
	
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




	$tdataCASE_SCHEDULER["SCH_TIME_NEXT_RUN"] = $fdata;
//	SCH_LAST_RUN_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SCH_LAST_RUN_TIME";
	$fdata["GoodName"] = "SCH_LAST_RUN_TIME";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_LAST_RUN_TIME");
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

		$fdata["strField"] = "SCH_LAST_RUN_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_LAST_RUN_TIME";

	
	
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




	$tdataCASE_SCHEDULER["SCH_LAST_RUN_TIME"] = $fdata;
//	SCH_STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SCH_STATE";
	$fdata["GoodName"] = "SCH_STATE";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_STATE");
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

		$fdata["strField"] = "SCH_STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_STATE";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataCASE_SCHEDULER["SCH_STATE"] = $fdata;
//	SCH_LAST_STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SCH_LAST_STATE";
	$fdata["GoodName"] = "SCH_LAST_STATE";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_LAST_STATE");
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

		$fdata["strField"] = "SCH_LAST_STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_LAST_STATE";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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




	$tdataCASE_SCHEDULER["SCH_LAST_STATE"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","USR_UID");
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




	$tdataCASE_SCHEDULER["USR_UID"] = $fdata;
//	SCH_OPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SCH_OPTION";
	$fdata["GoodName"] = "SCH_OPTION";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_OPTION");
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

		$fdata["strField"] = "SCH_OPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_OPTION";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataCASE_SCHEDULER["SCH_OPTION"] = $fdata;
//	SCH_START_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SCH_START_TIME";
	$fdata["GoodName"] = "SCH_START_TIME";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_START_TIME");
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

		$fdata["strField"] = "SCH_START_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_START_TIME";

	
	
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




	$tdataCASE_SCHEDULER["SCH_START_TIME"] = $fdata;
//	SCH_START_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SCH_START_DATE";
	$fdata["GoodName"] = "SCH_START_DATE";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_START_DATE");
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

		$fdata["strField"] = "SCH_START_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_START_DATE";

	
	
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




	$tdataCASE_SCHEDULER["SCH_START_DATE"] = $fdata;
//	SCH_DAYS_PERFORM_TASK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SCH_DAYS_PERFORM_TASK";
	$fdata["GoodName"] = "SCH_DAYS_PERFORM_TASK";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_DAYS_PERFORM_TASK");
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

		$fdata["strField"] = "SCH_DAYS_PERFORM_TASK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_DAYS_PERFORM_TASK";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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




	$tdataCASE_SCHEDULER["SCH_DAYS_PERFORM_TASK"] = $fdata;
//	SCH_EVERY_DAYS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SCH_EVERY_DAYS";
	$fdata["GoodName"] = "SCH_EVERY_DAYS";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_EVERY_DAYS");
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

		$fdata["strField"] = "SCH_EVERY_DAYS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_EVERY_DAYS";

	
	
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




	$tdataCASE_SCHEDULER["SCH_EVERY_DAYS"] = $fdata;
//	SCH_WEEK_DAYS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SCH_WEEK_DAYS";
	$fdata["GoodName"] = "SCH_WEEK_DAYS";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_WEEK_DAYS");
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

		$fdata["strField"] = "SCH_WEEK_DAYS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_WEEK_DAYS";

	
	
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
			$edata["EditParams"].= " maxlength=14";

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




	$tdataCASE_SCHEDULER["SCH_WEEK_DAYS"] = $fdata;
//	SCH_START_DAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SCH_START_DAY";
	$fdata["GoodName"] = "SCH_START_DAY";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_START_DAY");
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

		$fdata["strField"] = "SCH_START_DAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_START_DAY";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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




	$tdataCASE_SCHEDULER["SCH_START_DAY"] = $fdata;
//	SCH_MONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SCH_MONTHS";
	$fdata["GoodName"] = "SCH_MONTHS";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_MONTHS");
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

		$fdata["strField"] = "SCH_MONTHS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_MONTHS";

	
	
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
			$edata["EditParams"].= " maxlength=27";

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




	$tdataCASE_SCHEDULER["SCH_MONTHS"] = $fdata;
//	SCH_END_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SCH_END_DATE";
	$fdata["GoodName"] = "SCH_END_DATE";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_END_DATE");
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

		$fdata["strField"] = "SCH_END_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_END_DATE";

	
	
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




	$tdataCASE_SCHEDULER["SCH_END_DATE"] = $fdata;
//	SCH_REPEAT_EVERY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SCH_REPEAT_EVERY";
	$fdata["GoodName"] = "SCH_REPEAT_EVERY";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_REPEAT_EVERY");
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

		$fdata["strField"] = "SCH_REPEAT_EVERY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_REPEAT_EVERY";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataCASE_SCHEDULER["SCH_REPEAT_EVERY"] = $fdata;
//	SCH_REPEAT_UNTIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SCH_REPEAT_UNTIL";
	$fdata["GoodName"] = "SCH_REPEAT_UNTIL";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_REPEAT_UNTIL");
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

		$fdata["strField"] = "SCH_REPEAT_UNTIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_REPEAT_UNTIL";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataCASE_SCHEDULER["SCH_REPEAT_UNTIL"] = $fdata;
//	SCH_REPEAT_STOP_IF_RUNNING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SCH_REPEAT_STOP_IF_RUNNING";
	$fdata["GoodName"] = "SCH_REPEAT_STOP_IF_RUNNING";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_REPEAT_STOP_IF_RUNNING");
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

		$fdata["strField"] = "SCH_REPEAT_STOP_IF_RUNNING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_REPEAT_STOP_IF_RUNNING";

	
	
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




	$tdataCASE_SCHEDULER["SCH_REPEAT_STOP_IF_RUNNING"] = $fdata;
//	SCH_EXECUTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "SCH_EXECUTION_DATE";
	$fdata["GoodName"] = "SCH_EXECUTION_DATE";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","SCH_EXECUTION_DATE");
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

		$fdata["strField"] = "SCH_EXECUTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCH_EXECUTION_DATE";

	
	
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




	$tdataCASE_SCHEDULER["SCH_EXECUTION_DATE"] = $fdata;
//	CASE_SH_PLUGIN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "CASE_SH_PLUGIN_UID";
	$fdata["GoodName"] = "CASE_SH_PLUGIN_UID";
	$fdata["ownerTable"] = "CASE_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("CASE_SCHEDULER","CASE_SH_PLUGIN_UID");
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

		$fdata["strField"] = "CASE_SH_PLUGIN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE_SH_PLUGIN_UID";

	
	
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




	$tdataCASE_SCHEDULER["CASE_SH_PLUGIN_UID"] = $fdata;


$tables_data["CASE_SCHEDULER"]=&$tdataCASE_SCHEDULER;
$field_labels["CASE_SCHEDULER"] = &$fieldLabelsCASE_SCHEDULER;
$fieldToolTips["CASE_SCHEDULER"] = &$fieldToolTipsCASE_SCHEDULER;
$placeHolders["CASE_SCHEDULER"] = &$placeHoldersCASE_SCHEDULER;
$page_titles["CASE_SCHEDULER"] = &$pageTitlesCASE_SCHEDULER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CASE_SCHEDULER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CASE_SCHEDULER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CASE_SCHEDULER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SCH_UID,  	SCH_DEL_USER_NAME,  	SCH_DEL_USER_PASS,  	SCH_DEL_USER_UID,  	SCH_NAME,  	PRO_UID,  	TAS_UID,  	SCH_TIME_NEXT_RUN,  	SCH_LAST_RUN_TIME,  	SCH_STATE,  	SCH_LAST_STATE,  	USR_UID,  	SCH_OPTION,  	SCH_START_TIME,  	SCH_START_DATE,  	SCH_DAYS_PERFORM_TASK,  	SCH_EVERY_DAYS,  	SCH_WEEK_DAYS,  	SCH_START_DAY,  	SCH_MONTHS,  	SCH_END_DATE,  	SCH_REPEAT_EVERY,  	SCH_REPEAT_UNTIL,  	SCH_REPEAT_STOP_IF_RUNNING,  	SCH_EXECUTION_DATE,  	CASE_SH_PLUGIN_UID";
$proto0["m_strFrom"] = "FROM CASE_SCHEDULER";
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
	"m_strName" => "SCH_UID",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto6["m_sql"] = "SCH_UID";
$proto6["m_srcTableName"] = "CASE_SCHEDULER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_DEL_USER_NAME",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto8["m_sql"] = "SCH_DEL_USER_NAME";
$proto8["m_srcTableName"] = "CASE_SCHEDULER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_DEL_USER_PASS",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto10["m_sql"] = "SCH_DEL_USER_PASS";
$proto10["m_srcTableName"] = "CASE_SCHEDULER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_DEL_USER_UID",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto12["m_sql"] = "SCH_DEL_USER_UID";
$proto12["m_srcTableName"] = "CASE_SCHEDULER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_NAME",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto14["m_sql"] = "SCH_NAME";
$proto14["m_srcTableName"] = "CASE_SCHEDULER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto16["m_sql"] = "PRO_UID";
$proto16["m_srcTableName"] = "CASE_SCHEDULER";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto18["m_sql"] = "TAS_UID";
$proto18["m_srcTableName"] = "CASE_SCHEDULER";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_TIME_NEXT_RUN",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto20["m_sql"] = "SCH_TIME_NEXT_RUN";
$proto20["m_srcTableName"] = "CASE_SCHEDULER";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_LAST_RUN_TIME",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto22["m_sql"] = "SCH_LAST_RUN_TIME";
$proto22["m_srcTableName"] = "CASE_SCHEDULER";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_STATE",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto24["m_sql"] = "SCH_STATE";
$proto24["m_srcTableName"] = "CASE_SCHEDULER";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_LAST_STATE",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto26["m_sql"] = "SCH_LAST_STATE";
$proto26["m_srcTableName"] = "CASE_SCHEDULER";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto28["m_sql"] = "USR_UID";
$proto28["m_srcTableName"] = "CASE_SCHEDULER";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_OPTION",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto30["m_sql"] = "SCH_OPTION";
$proto30["m_srcTableName"] = "CASE_SCHEDULER";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_START_TIME",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto32["m_sql"] = "SCH_START_TIME";
$proto32["m_srcTableName"] = "CASE_SCHEDULER";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_START_DATE",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto34["m_sql"] = "SCH_START_DATE";
$proto34["m_srcTableName"] = "CASE_SCHEDULER";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_DAYS_PERFORM_TASK",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto36["m_sql"] = "SCH_DAYS_PERFORM_TASK";
$proto36["m_srcTableName"] = "CASE_SCHEDULER";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_EVERY_DAYS",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto38["m_sql"] = "SCH_EVERY_DAYS";
$proto38["m_srcTableName"] = "CASE_SCHEDULER";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_WEEK_DAYS",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto40["m_sql"] = "SCH_WEEK_DAYS";
$proto40["m_srcTableName"] = "CASE_SCHEDULER";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_START_DAY",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto42["m_sql"] = "SCH_START_DAY";
$proto42["m_srcTableName"] = "CASE_SCHEDULER";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_MONTHS",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto44["m_sql"] = "SCH_MONTHS";
$proto44["m_srcTableName"] = "CASE_SCHEDULER";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_END_DATE",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto46["m_sql"] = "SCH_END_DATE";
$proto46["m_srcTableName"] = "CASE_SCHEDULER";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_REPEAT_EVERY",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto48["m_sql"] = "SCH_REPEAT_EVERY";
$proto48["m_srcTableName"] = "CASE_SCHEDULER";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_REPEAT_UNTIL",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto50["m_sql"] = "SCH_REPEAT_UNTIL";
$proto50["m_srcTableName"] = "CASE_SCHEDULER";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_REPEAT_STOP_IF_RUNNING",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto52["m_sql"] = "SCH_REPEAT_STOP_IF_RUNNING";
$proto52["m_srcTableName"] = "CASE_SCHEDULER";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_EXECUTION_DATE",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto54["m_sql"] = "SCH_EXECUTION_DATE";
$proto54["m_srcTableName"] = "CASE_SCHEDULER";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "CASE_SH_PLUGIN_UID",
	"m_strTable" => "CASE_SCHEDULER",
	"m_srcTableName" => "CASE_SCHEDULER"
));

$proto56["m_sql"] = "CASE_SH_PLUGIN_UID";
$proto56["m_srcTableName"] = "CASE_SCHEDULER";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "CASE_SCHEDULER";
$proto59["m_srcTableName"] = "CASE_SCHEDULER";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "SCH_UID";
$proto59["m_columns"][] = "SCH_DEL_USER_NAME";
$proto59["m_columns"][] = "SCH_DEL_USER_PASS";
$proto59["m_columns"][] = "SCH_DEL_USER_UID";
$proto59["m_columns"][] = "SCH_NAME";
$proto59["m_columns"][] = "PRO_UID";
$proto59["m_columns"][] = "TAS_UID";
$proto59["m_columns"][] = "SCH_TIME_NEXT_RUN";
$proto59["m_columns"][] = "SCH_LAST_RUN_TIME";
$proto59["m_columns"][] = "SCH_STATE";
$proto59["m_columns"][] = "SCH_LAST_STATE";
$proto59["m_columns"][] = "USR_UID";
$proto59["m_columns"][] = "SCH_OPTION";
$proto59["m_columns"][] = "SCH_START_TIME";
$proto59["m_columns"][] = "SCH_START_DATE";
$proto59["m_columns"][] = "SCH_DAYS_PERFORM_TASK";
$proto59["m_columns"][] = "SCH_EVERY_DAYS";
$proto59["m_columns"][] = "SCH_WEEK_DAYS";
$proto59["m_columns"][] = "SCH_START_DAY";
$proto59["m_columns"][] = "SCH_MONTHS";
$proto59["m_columns"][] = "SCH_END_DATE";
$proto59["m_columns"][] = "SCH_REPEAT_EVERY";
$proto59["m_columns"][] = "SCH_REPEAT_UNTIL";
$proto59["m_columns"][] = "SCH_REPEAT_STOP_IF_RUNNING";
$proto59["m_columns"][] = "SCH_EXECUTION_DATE";
$proto59["m_columns"][] = "CASE_SH_PLUGIN_UID";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "CASE_SCHEDULER";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "CASE_SCHEDULER";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="CASE_SCHEDULER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CASE_SCHEDULER = createSqlQuery_CASE_SCHEDULER();


	
						;

																										

$tdataCASE_SCHEDULER[".sqlquery"] = $queryData_CASE_SCHEDULER;

$tableEvents["CASE_SCHEDULER"] = new eventsBase;
$tdataCASE_SCHEDULER[".hasEvents"] = false;

?>
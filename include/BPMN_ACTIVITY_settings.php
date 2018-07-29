<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_ACTIVITY = array();
	$tdataBPMN_ACTIVITY[".truncateText"] = true;
	$tdataBPMN_ACTIVITY[".NumberOfChars"] = 20;
	$tdataBPMN_ACTIVITY[".ShortName"] = "BPMN_ACTIVITY";
	$tdataBPMN_ACTIVITY[".OwnerID"] = "";
	$tdataBPMN_ACTIVITY[".OriginalTable"] = "BPMN_ACTIVITY";

//	field labels
$fieldLabelsBPMN_ACTIVITY = array();
$fieldToolTipsBPMN_ACTIVITY = array();
$pageTitlesBPMN_ACTIVITY = array();
$placeHoldersBPMN_ACTIVITY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_ACTIVITY["Japanese"] = array();
	$fieldToolTipsBPMN_ACTIVITY["Japanese"] = array();
	$placeHoldersBPMN_ACTIVITY["Japanese"] = array();
	$pageTitlesBPMN_ACTIVITY["Japanese"] = array();
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_UID"] = "行為のUID";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_UID"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_UID"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_NAME"] = "行為の名前";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_NAME"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_NAME"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_TYPE"] = "行為の種類";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_IS_FOR_COMPENSATION"] = "行為は、補償のためのものです";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_IS_FOR_COMPENSATION"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_IS_FOR_COMPENSATION"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_START_QUANTITY"] = "行為の開始量";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_START_QUANTITY"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_START_QUANTITY"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_COMPLETION_QUANTITY"] = "行為の完了量";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_COMPLETION_QUANTITY"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_COMPLETION_QUANTITY"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_TASK_TYPE"] = "行為のタスクタイプ";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_TASK_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_TASK_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_IMPLEMENTATION"] = "行為の実装";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_IMPLEMENTATION"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_IMPLEMENTATION"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_INSTANTIATE"] = "行為のインスタンス化";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_INSTANTIATE"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_INSTANTIATE"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_SCRIPT_TYPE"] = "行為のスクリプトタイプ";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_SCRIPT_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_SCRIPT_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_SCRIPT"] = "行為スクリプト";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_SCRIPT"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_SCRIPT"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_TYPE"] = "行為のループタイプ";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_LOOP_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_TEST_BEFORE"] = "前にテストを行動";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_TEST_BEFORE"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_TEST_BEFORE"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_MAXIMUM"] = "行為のループ最大";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_MAXIMUM"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_LOOP_MAXIMUM"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_CONDITION"] = "行為のループ条件";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_CONDITION"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_LOOP_CONDITION"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_CARDINALITY"] = "行為のループカーディナリティ";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_CARDINALITY"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_LOOP_CARDINALITY"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_BEHAVIOR"] = "行為ループ動作";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_LOOP_BEHAVIOR"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_LOOP_BEHAVIOR"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_IS_ADHOC"] = "行為はアドホックであります";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_IS_ADHOC"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_IS_ADHOC"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_IS_COLLAPSED"] = "行為が折りたたまれています";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_IS_COLLAPSED"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_IS_COLLAPSED"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_COMPLETION_CONDITION"] = "行為の完了条件";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_COMPLETION_CONDITION"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_COMPLETION_CONDITION"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_ORDERING"] = "行為の順序";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_ORDERING"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_ORDERING"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_CANCEL_REMAINING_INSTANCES"] = "行為は残りのインスタンスをキャンセル";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_CANCEL_REMAINING_INSTANCES"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_CANCEL_REMAINING_INSTANCES"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_PROTOCOL"] = "行為プロトコル";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_PROTOCOL"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_PROTOCOL"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_METHOD"] = "actメソッド";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_METHOD"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_METHOD"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_IS_GLOBAL"] = "行為はグローバルです";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_IS_GLOBAL"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_IS_GLOBAL"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_REFERER"] = "行為のリファラ";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_REFERER"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_REFERER"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_DEFAULT_FLOW"] = "行為のデフォルトの流れ";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_DEFAULT_FLOW"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_DEFAULT_FLOW"] = "";
	$fieldLabelsBPMN_ACTIVITY["Japanese"]["ACT_MASTER_DIAGRAM"] = "行為マスター図";
	$fieldToolTipsBPMN_ACTIVITY["Japanese"]["ACT_MASTER_DIAGRAM"] = "";
	$placeHoldersBPMN_ACTIVITY["Japanese"]["ACT_MASTER_DIAGRAM"] = "";
	if (count($fieldToolTipsBPMN_ACTIVITY["Japanese"]))
		$tdataBPMN_ACTIVITY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_ACTIVITY["English"] = array();
	$fieldToolTipsBPMN_ACTIVITY["English"] = array();
	$placeHoldersBPMN_ACTIVITY["English"] = array();
	$pageTitlesBPMN_ACTIVITY["English"] = array();
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_UID"] = "行為のUID";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_UID"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_UID"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_ACTIVITY["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_ACTIVITY["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_NAME"] = "行為の名前";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_NAME"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_NAME"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_TYPE"] = "行為の種類";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_IS_FOR_COMPENSATION"] = "行為は、補償のためのものです";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_IS_FOR_COMPENSATION"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_IS_FOR_COMPENSATION"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_START_QUANTITY"] = "行為の開始量";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_START_QUANTITY"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_START_QUANTITY"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_COMPLETION_QUANTITY"] = "行為の完了量";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_COMPLETION_QUANTITY"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_COMPLETION_QUANTITY"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_TASK_TYPE"] = "行為のタスクタイプ";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_TASK_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_TASK_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_IMPLEMENTATION"] = "行為の実装";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_IMPLEMENTATION"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_IMPLEMENTATION"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_INSTANTIATE"] = "行為のインスタンス化";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_INSTANTIATE"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_INSTANTIATE"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_SCRIPT_TYPE"] = "行為のスクリプトタイプ";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_SCRIPT_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_SCRIPT_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_SCRIPT"] = "行為スクリプト";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_SCRIPT"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_SCRIPT"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_LOOP_TYPE"] = "行為のループタイプ";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_LOOP_TYPE"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_LOOP_TYPE"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_TEST_BEFORE"] = "前にテストを行動";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_TEST_BEFORE"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_TEST_BEFORE"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_LOOP_MAXIMUM"] = "行為のループ最大";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_LOOP_MAXIMUM"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_LOOP_MAXIMUM"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_LOOP_CONDITION"] = "行為のループ条件";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_LOOP_CONDITION"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_LOOP_CONDITION"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_LOOP_CARDINALITY"] = "行為のループカーディナリティ";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_LOOP_CARDINALITY"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_LOOP_CARDINALITY"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_LOOP_BEHAVIOR"] = "行為ループ動作";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_LOOP_BEHAVIOR"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_LOOP_BEHAVIOR"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_IS_ADHOC"] = "行為はアドホックであります";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_IS_ADHOC"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_IS_ADHOC"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_IS_COLLAPSED"] = "行為が折りたたまれています";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_IS_COLLAPSED"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_IS_COLLAPSED"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_COMPLETION_CONDITION"] = "行為の完了条件";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_COMPLETION_CONDITION"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_COMPLETION_CONDITION"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_ORDERING"] = "行為の順序";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_ORDERING"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_ORDERING"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_CANCEL_REMAINING_INSTANCES"] = "行為は残りのインスタンスをキャンセル";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_CANCEL_REMAINING_INSTANCES"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_CANCEL_REMAINING_INSTANCES"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_PROTOCOL"] = "行為プロトコル";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_PROTOCOL"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_PROTOCOL"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_METHOD"] = "actメソッド";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_METHOD"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_METHOD"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_IS_GLOBAL"] = "行為はグローバルです";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_IS_GLOBAL"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_IS_GLOBAL"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_REFERER"] = "行為のリファラ";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_REFERER"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_REFERER"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_DEFAULT_FLOW"] = "行為のデフォルトの流れ";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_DEFAULT_FLOW"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_DEFAULT_FLOW"] = "";
	$fieldLabelsBPMN_ACTIVITY["English"]["ACT_MASTER_DIAGRAM"] = "行為マスター図";
	$fieldToolTipsBPMN_ACTIVITY["English"]["ACT_MASTER_DIAGRAM"] = "";
	$placeHoldersBPMN_ACTIVITY["English"]["ACT_MASTER_DIAGRAM"] = "";
	if (count($fieldToolTipsBPMN_ACTIVITY["English"]))
		$tdataBPMN_ACTIVITY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_ACTIVITY[""] = array();
	$fieldToolTipsBPMN_ACTIVITY[""] = array();
	$placeHoldersBPMN_ACTIVITY[""] = array();
	$pageTitlesBPMN_ACTIVITY[""] = array();
	if (count($fieldToolTipsBPMN_ACTIVITY[""]))
		$tdataBPMN_ACTIVITY[".isUseToolTips"] = true;
}


	$tdataBPMN_ACTIVITY[".NCSearch"] = true;



$tdataBPMN_ACTIVITY[".shortTableName"] = "BPMN_ACTIVITY";
$tdataBPMN_ACTIVITY[".nSecOptions"] = 0;
$tdataBPMN_ACTIVITY[".recsPerRowPrint"] = 1;
$tdataBPMN_ACTIVITY[".mainTableOwnerID"] = "";
$tdataBPMN_ACTIVITY[".moveNext"] = 0;
$tdataBPMN_ACTIVITY[".entityType"] = 0;

$tdataBPMN_ACTIVITY[".strOriginalTableName"] = "BPMN_ACTIVITY";

	



$tdataBPMN_ACTIVITY[".showAddInPopup"] = false;

$tdataBPMN_ACTIVITY[".showEditInPopup"] = false;

$tdataBPMN_ACTIVITY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_ACTIVITY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_ACTIVITY[".fieldsForRegister"] = array();
	
$tdataBPMN_ACTIVITY[".listAjax"] = false;

	$tdataBPMN_ACTIVITY[".audit"] = true;

	$tdataBPMN_ACTIVITY[".locking"] = false;

$tdataBPMN_ACTIVITY[".edit"] = true;
$tdataBPMN_ACTIVITY[".afterEditAction"] = 1;
$tdataBPMN_ACTIVITY[".closePopupAfterEdit"] = 1;
$tdataBPMN_ACTIVITY[".afterEditActionDetTable"] = "";

$tdataBPMN_ACTIVITY[".add"] = true;
$tdataBPMN_ACTIVITY[".afterAddAction"] = 1;
$tdataBPMN_ACTIVITY[".closePopupAfterAdd"] = 1;
$tdataBPMN_ACTIVITY[".afterAddActionDetTable"] = "";

$tdataBPMN_ACTIVITY[".list"] = true;

$tdataBPMN_ACTIVITY[".inlineEdit"] = true;


$tdataBPMN_ACTIVITY[".reorderRecordsByHeader"] = true;
$tdataBPMN_ACTIVITY[".createSortByDropdown"] = true;
$tdataBPMN_ACTIVITY[".strSortControlSettingsJSON"] = "";



$tdataBPMN_ACTIVITY[".inlineAdd"] = true;
$tdataBPMN_ACTIVITY[".view"] = true;

$tdataBPMN_ACTIVITY[".import"] = true;

$tdataBPMN_ACTIVITY[".exportTo"] = true;

$tdataBPMN_ACTIVITY[".printFriendly"] = true;

$tdataBPMN_ACTIVITY[".delete"] = true;

$tdataBPMN_ACTIVITY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_ACTIVITY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_ACTIVITY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_ACTIVITY[".searchSaving"] = false;
//

$tdataBPMN_ACTIVITY[".showSearchPanel"] = true;
		$tdataBPMN_ACTIVITY[".flexibleSearch"] = true;

$tdataBPMN_ACTIVITY[".isUseAjaxSuggest"] = true;

$tdataBPMN_ACTIVITY[".rowHighlite"] = true;



																												

$tdataBPMN_ACTIVITY[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_ACTIVITY[".buttonsAdded"] = false;

$tdataBPMN_ACTIVITY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_ACTIVITY[".isUseTimeForSearch"] = false;



$tdataBPMN_ACTIVITY[".badgeColor"] = "2F4F4F";


$tdataBPMN_ACTIVITY[".allSearchFields"] = array();
$tdataBPMN_ACTIVITY[".filterFields"] = array();
$tdataBPMN_ACTIVITY[".requiredSearchFields"] = array();

$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_UID";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_NAME";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_TYPE";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_IS_FOR_COMPENSATION";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_START_QUANTITY";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_COMPLETION_QUANTITY";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_TASK_TYPE";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_IMPLEMENTATION";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_INSTANTIATE";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_SCRIPT_TYPE";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_SCRIPT";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_LOOP_TYPE";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_TEST_BEFORE";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_LOOP_MAXIMUM";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_LOOP_CONDITION";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_LOOP_CARDINALITY";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_LOOP_BEHAVIOR";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_IS_ADHOC";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_IS_COLLAPSED";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_COMPLETION_CONDITION";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_ORDERING";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_PROTOCOL";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_METHOD";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_IS_GLOBAL";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_REFERER";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_DEFAULT_FLOW";
	$tdataBPMN_ACTIVITY[".allSearchFields"][] = "ACT_MASTER_DIAGRAM";
	

$tdataBPMN_ACTIVITY[".googleLikeFields"] = array();
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".googleLikeFields"][] = "ACT_MASTER_DIAGRAM";


$tdataBPMN_ACTIVITY[".advSearchFields"] = array();
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".advSearchFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".tableType"] = "list";

$tdataBPMN_ACTIVITY[".printerPageOrientation"] = 0;
$tdataBPMN_ACTIVITY[".nPrinterPageScale"] = 100;

$tdataBPMN_ACTIVITY[".nPrinterSplitRecords"] = 40;

$tdataBPMN_ACTIVITY[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_ACTIVITY[".geocodingEnabled"] = false;





$tdataBPMN_ACTIVITY[".listGridLayout"] = 3;


$tdataBPMN_ACTIVITY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_ACTIVITY[".pageSize"] = 20;

$tdataBPMN_ACTIVITY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_ACTIVITY[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_ACTIVITY[".orderindexes"] = array();

$tdataBPMN_ACTIVITY[".sqlHead"] = "SELECT ACT_UID,  	PRJ_UID,  	PRO_UID,  	ACT_NAME,  	ACT_TYPE,  	ACT_IS_FOR_COMPENSATION,  	ACT_START_QUANTITY,  	ACT_COMPLETION_QUANTITY,  	ACT_TASK_TYPE,  	ACT_IMPLEMENTATION,  	ACT_INSTANTIATE,  	ACT_SCRIPT_TYPE,  	ACT_SCRIPT,  	ACT_LOOP_TYPE,  	ACT_TEST_BEFORE,  	ACT_LOOP_MAXIMUM,  	ACT_LOOP_CONDITION,  	ACT_LOOP_CARDINALITY,  	ACT_LOOP_BEHAVIOR,  	ACT_IS_ADHOC,  	ACT_IS_COLLAPSED,  	ACT_COMPLETION_CONDITION,  	ACT_ORDERING,  	ACT_CANCEL_REMAINING_INSTANCES,  	ACT_PROTOCOL,  	ACT_METHOD,  	ACT_IS_GLOBAL,  	ACT_REFERER,  	ACT_DEFAULT_FLOW,  	ACT_MASTER_DIAGRAM";
$tdataBPMN_ACTIVITY[".sqlFrom"] = "FROM BPMN_ACTIVITY";
$tdataBPMN_ACTIVITY[".sqlWhereExpr"] = "";
$tdataBPMN_ACTIVITY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_ACTIVITY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_ACTIVITY[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_ACTIVITY[".highlightSearchResults"] = true;

$tableKeysBPMN_ACTIVITY = array();
$tableKeysBPMN_ACTIVITY[] = "ACT_UID";
$tdataBPMN_ACTIVITY[".Keys"] = $tableKeysBPMN_ACTIVITY;

$tdataBPMN_ACTIVITY[".listFields"] = array();
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".listFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".listFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".listFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".hideMobileList"] = array();


$tdataBPMN_ACTIVITY[".viewFields"] = array();
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".viewFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".viewFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".viewFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".addFields"] = array();
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".addFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".addFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".addFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".masterListFields"] = array();
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".masterListFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".inlineAddFields"] = array();
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".inlineAddFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".editFields"] = array();
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".editFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".editFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".editFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".inlineEditFields"] = array();
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".inlineEditFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".updateSelectedFields"] = array();
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".updateSelectedFields"][] = "ACT_MASTER_DIAGRAM";


$tdataBPMN_ACTIVITY[".exportFields"] = array();
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".exportFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".exportFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".exportFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".importFields"] = array();
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".importFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".importFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".importFields"][] = "ACT_MASTER_DIAGRAM";

$tdataBPMN_ACTIVITY[".printFields"] = array();
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_UID";
$tdataBPMN_ACTIVITY[".printFields"][] = "PRJ_UID";
$tdataBPMN_ACTIVITY[".printFields"][] = "PRO_UID";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_NAME";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_TYPE";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_IS_FOR_COMPENSATION";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_START_QUANTITY";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_COMPLETION_QUANTITY";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_TASK_TYPE";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_IMPLEMENTATION";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_INSTANTIATE";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_SCRIPT_TYPE";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_SCRIPT";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_LOOP_TYPE";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_TEST_BEFORE";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_LOOP_MAXIMUM";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_LOOP_CONDITION";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_LOOP_CARDINALITY";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_LOOP_BEHAVIOR";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_IS_ADHOC";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_IS_COLLAPSED";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_COMPLETION_CONDITION";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_ORDERING";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_PROTOCOL";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_METHOD";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_IS_GLOBAL";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_REFERER";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_DEFAULT_FLOW";
$tdataBPMN_ACTIVITY[".printFields"][] = "ACT_MASTER_DIAGRAM";

//	ACT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACT_UID";
	$fdata["GoodName"] = "ACT_UID";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_UID");
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

		$fdata["strField"] = "ACT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_UID";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","PRJ_UID");
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

		$fdata["strField"] = "PRJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UID";

	
	
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
	$edata["LookupTable"] = "BPMN_PROJECT";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRJ_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRJ_UID";

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_ACTIVITY["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","PRO_UID");
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
	$edata["LookupTable"] = "BPMN_PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRO_UID";

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_ACTIVITY["PRO_UID"] = $fdata;
//	ACT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ACT_NAME";
	$fdata["GoodName"] = "ACT_NAME";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_NAME");
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

		$fdata["strField"] = "ACT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_NAME";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_NAME"] = $fdata;
//	ACT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ACT_TYPE";
	$fdata["GoodName"] = "ACT_TYPE";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_TYPE");
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

		$fdata["strField"] = "ACT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataBPMN_ACTIVITY["ACT_TYPE"] = $fdata;
//	ACT_IS_FOR_COMPENSATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ACT_IS_FOR_COMPENSATION";
	$fdata["GoodName"] = "ACT_IS_FOR_COMPENSATION";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_IS_FOR_COMPENSATION");
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

		$fdata["strField"] = "ACT_IS_FOR_COMPENSATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_IS_FOR_COMPENSATION";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_IS_FOR_COMPENSATION"] = $fdata;
//	ACT_START_QUANTITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ACT_START_QUANTITY";
	$fdata["GoodName"] = "ACT_START_QUANTITY";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_START_QUANTITY");
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

		$fdata["strField"] = "ACT_START_QUANTITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_START_QUANTITY";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_START_QUANTITY"] = $fdata;
//	ACT_COMPLETION_QUANTITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACT_COMPLETION_QUANTITY";
	$fdata["GoodName"] = "ACT_COMPLETION_QUANTITY";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_COMPLETION_QUANTITY");
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

		$fdata["strField"] = "ACT_COMPLETION_QUANTITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_COMPLETION_QUANTITY";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_COMPLETION_QUANTITY"] = $fdata;
//	ACT_TASK_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ACT_TASK_TYPE";
	$fdata["GoodName"] = "ACT_TASK_TYPE";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_TASK_TYPE");
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

		$fdata["strField"] = "ACT_TASK_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_TASK_TYPE";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_TASK_TYPE"] = $fdata;
//	ACT_IMPLEMENTATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ACT_IMPLEMENTATION";
	$fdata["GoodName"] = "ACT_IMPLEMENTATION";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_IMPLEMENTATION");
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

		$fdata["strField"] = "ACT_IMPLEMENTATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_IMPLEMENTATION";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_IMPLEMENTATION"] = $fdata;
//	ACT_INSTANTIATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ACT_INSTANTIATE";
	$fdata["GoodName"] = "ACT_INSTANTIATE";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_INSTANTIATE");
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

		$fdata["strField"] = "ACT_INSTANTIATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_INSTANTIATE";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_INSTANTIATE"] = $fdata;
//	ACT_SCRIPT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ACT_SCRIPT_TYPE";
	$fdata["GoodName"] = "ACT_SCRIPT_TYPE";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_SCRIPT_TYPE");
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

		$fdata["strField"] = "ACT_SCRIPT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_SCRIPT_TYPE";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_SCRIPT_TYPE"] = $fdata;
//	ACT_SCRIPT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ACT_SCRIPT";
	$fdata["GoodName"] = "ACT_SCRIPT";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_SCRIPT");
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

		$fdata["strField"] = "ACT_SCRIPT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_SCRIPT";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_SCRIPT"] = $fdata;
//	ACT_LOOP_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ACT_LOOP_TYPE";
	$fdata["GoodName"] = "ACT_LOOP_TYPE";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_LOOP_TYPE");
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

		$fdata["strField"] = "ACT_LOOP_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_LOOP_TYPE";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_LOOP_TYPE"] = $fdata;
//	ACT_TEST_BEFORE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ACT_TEST_BEFORE";
	$fdata["GoodName"] = "ACT_TEST_BEFORE";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_TEST_BEFORE");
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

		$fdata["strField"] = "ACT_TEST_BEFORE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_TEST_BEFORE";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_TEST_BEFORE"] = $fdata;
//	ACT_LOOP_MAXIMUM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ACT_LOOP_MAXIMUM";
	$fdata["GoodName"] = "ACT_LOOP_MAXIMUM";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_LOOP_MAXIMUM");
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

		$fdata["strField"] = "ACT_LOOP_MAXIMUM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_LOOP_MAXIMUM";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_LOOP_MAXIMUM"] = $fdata;
//	ACT_LOOP_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ACT_LOOP_CONDITION";
	$fdata["GoodName"] = "ACT_LOOP_CONDITION";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_LOOP_CONDITION");
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

		$fdata["strField"] = "ACT_LOOP_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_LOOP_CONDITION";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_LOOP_CONDITION"] = $fdata;
//	ACT_LOOP_CARDINALITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ACT_LOOP_CARDINALITY";
	$fdata["GoodName"] = "ACT_LOOP_CARDINALITY";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_LOOP_CARDINALITY");
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

		$fdata["strField"] = "ACT_LOOP_CARDINALITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_LOOP_CARDINALITY";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_LOOP_CARDINALITY"] = $fdata;
//	ACT_LOOP_BEHAVIOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ACT_LOOP_BEHAVIOR";
	$fdata["GoodName"] = "ACT_LOOP_BEHAVIOR";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_LOOP_BEHAVIOR");
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

		$fdata["strField"] = "ACT_LOOP_BEHAVIOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_LOOP_BEHAVIOR";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_LOOP_BEHAVIOR"] = $fdata;
//	ACT_IS_ADHOC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ACT_IS_ADHOC";
	$fdata["GoodName"] = "ACT_IS_ADHOC";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_IS_ADHOC");
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

		$fdata["strField"] = "ACT_IS_ADHOC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_IS_ADHOC";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_IS_ADHOC"] = $fdata;
//	ACT_IS_COLLAPSED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ACT_IS_COLLAPSED";
	$fdata["GoodName"] = "ACT_IS_COLLAPSED";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_IS_COLLAPSED");
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

		$fdata["strField"] = "ACT_IS_COLLAPSED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_IS_COLLAPSED";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_IS_COLLAPSED"] = $fdata;
//	ACT_COMPLETION_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ACT_COMPLETION_CONDITION";
	$fdata["GoodName"] = "ACT_COMPLETION_CONDITION";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_COMPLETION_CONDITION");
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

		$fdata["strField"] = "ACT_COMPLETION_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_COMPLETION_CONDITION";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_COMPLETION_CONDITION"] = $fdata;
//	ACT_ORDERING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ACT_ORDERING";
	$fdata["GoodName"] = "ACT_ORDERING";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_ORDERING");
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

		$fdata["strField"] = "ACT_ORDERING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_ORDERING";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_ORDERING"] = $fdata;
//	ACT_CANCEL_REMAINING_INSTANCES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ACT_CANCEL_REMAINING_INSTANCES";
	$fdata["GoodName"] = "ACT_CANCEL_REMAINING_INSTANCES";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_CANCEL_REMAINING_INSTANCES");
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

		$fdata["strField"] = "ACT_CANCEL_REMAINING_INSTANCES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_CANCEL_REMAINING_INSTANCES";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_CANCEL_REMAINING_INSTANCES"] = $fdata;
//	ACT_PROTOCOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ACT_PROTOCOL";
	$fdata["GoodName"] = "ACT_PROTOCOL";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_PROTOCOL");
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

		$fdata["strField"] = "ACT_PROTOCOL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_PROTOCOL";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_PROTOCOL"] = $fdata;
//	ACT_METHOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ACT_METHOD";
	$fdata["GoodName"] = "ACT_METHOD";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_METHOD");
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

		$fdata["strField"] = "ACT_METHOD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_METHOD";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_METHOD"] = $fdata;
//	ACT_IS_GLOBAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ACT_IS_GLOBAL";
	$fdata["GoodName"] = "ACT_IS_GLOBAL";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_IS_GLOBAL");
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

		$fdata["strField"] = "ACT_IS_GLOBAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_IS_GLOBAL";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_IS_GLOBAL"] = $fdata;
//	ACT_REFERER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ACT_REFERER";
	$fdata["GoodName"] = "ACT_REFERER";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_REFERER");
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

		$fdata["strField"] = "ACT_REFERER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_REFERER";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_REFERER"] = $fdata;
//	ACT_DEFAULT_FLOW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ACT_DEFAULT_FLOW";
	$fdata["GoodName"] = "ACT_DEFAULT_FLOW";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_DEFAULT_FLOW");
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

		$fdata["strField"] = "ACT_DEFAULT_FLOW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_DEFAULT_FLOW";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_DEFAULT_FLOW"] = $fdata;
//	ACT_MASTER_DIAGRAM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ACT_MASTER_DIAGRAM";
	$fdata["GoodName"] = "ACT_MASTER_DIAGRAM";
	$fdata["ownerTable"] = "BPMN_ACTIVITY";
	$fdata["Label"] = GetFieldLabel("BPMN_ACTIVITY","ACT_MASTER_DIAGRAM");
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

		$fdata["strField"] = "ACT_MASTER_DIAGRAM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_MASTER_DIAGRAM";

	
	
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




	$tdataBPMN_ACTIVITY["ACT_MASTER_DIAGRAM"] = $fdata;


$tables_data["BPMN_ACTIVITY"]=&$tdataBPMN_ACTIVITY;
$field_labels["BPMN_ACTIVITY"] = &$fieldLabelsBPMN_ACTIVITY;
$fieldToolTips["BPMN_ACTIVITY"] = &$fieldToolTipsBPMN_ACTIVITY;
$placeHolders["BPMN_ACTIVITY"] = &$placeHoldersBPMN_ACTIVITY;
$page_titles["BPMN_ACTIVITY"] = &$pageTitlesBPMN_ACTIVITY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_ACTIVITY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_ACTIVITY"] = array();


	
				$strOriginalDetailsTable="BPMN_PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_ACTIVITY"][0] = $masterParams;
				$masterTablesData["BPMN_ACTIVITY"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_ACTIVITY"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["BPMN_ACTIVITY"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_ACTIVITY"][0]["detailKeys"][]="PRO_UID";
		
	
				$strOriginalDetailsTable="BPMN_PROJECT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROJECT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROJECT";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_ACTIVITY"][1] = $masterParams;
				$masterTablesData["BPMN_ACTIVITY"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_ACTIVITY"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_ACTIVITY"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_ACTIVITY"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_ACTIVITY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ACT_UID,  	PRJ_UID,  	PRO_UID,  	ACT_NAME,  	ACT_TYPE,  	ACT_IS_FOR_COMPENSATION,  	ACT_START_QUANTITY,  	ACT_COMPLETION_QUANTITY,  	ACT_TASK_TYPE,  	ACT_IMPLEMENTATION,  	ACT_INSTANTIATE,  	ACT_SCRIPT_TYPE,  	ACT_SCRIPT,  	ACT_LOOP_TYPE,  	ACT_TEST_BEFORE,  	ACT_LOOP_MAXIMUM,  	ACT_LOOP_CONDITION,  	ACT_LOOP_CARDINALITY,  	ACT_LOOP_BEHAVIOR,  	ACT_IS_ADHOC,  	ACT_IS_COLLAPSED,  	ACT_COMPLETION_CONDITION,  	ACT_ORDERING,  	ACT_CANCEL_REMAINING_INSTANCES,  	ACT_PROTOCOL,  	ACT_METHOD,  	ACT_IS_GLOBAL,  	ACT_REFERER,  	ACT_DEFAULT_FLOW,  	ACT_MASTER_DIAGRAM";
$proto0["m_strFrom"] = "FROM BPMN_ACTIVITY";
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
	"m_strName" => "ACT_UID",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto6["m_sql"] = "ACT_UID";
$proto6["m_srcTableName"] = "BPMN_ACTIVITY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_ACTIVITY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_ACTIVITY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_NAME",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto12["m_sql"] = "ACT_NAME";
$proto12["m_srcTableName"] = "BPMN_ACTIVITY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_TYPE",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto14["m_sql"] = "ACT_TYPE";
$proto14["m_srcTableName"] = "BPMN_ACTIVITY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_IS_FOR_COMPENSATION",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto16["m_sql"] = "ACT_IS_FOR_COMPENSATION";
$proto16["m_srcTableName"] = "BPMN_ACTIVITY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_START_QUANTITY",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto18["m_sql"] = "ACT_START_QUANTITY";
$proto18["m_srcTableName"] = "BPMN_ACTIVITY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_COMPLETION_QUANTITY",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto20["m_sql"] = "ACT_COMPLETION_QUANTITY";
$proto20["m_srcTableName"] = "BPMN_ACTIVITY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_TASK_TYPE",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto22["m_sql"] = "ACT_TASK_TYPE";
$proto22["m_srcTableName"] = "BPMN_ACTIVITY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_IMPLEMENTATION",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto24["m_sql"] = "ACT_IMPLEMENTATION";
$proto24["m_srcTableName"] = "BPMN_ACTIVITY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_INSTANTIATE",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto26["m_sql"] = "ACT_INSTANTIATE";
$proto26["m_srcTableName"] = "BPMN_ACTIVITY";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_SCRIPT_TYPE",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto28["m_sql"] = "ACT_SCRIPT_TYPE";
$proto28["m_srcTableName"] = "BPMN_ACTIVITY";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_SCRIPT",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto30["m_sql"] = "ACT_SCRIPT";
$proto30["m_srcTableName"] = "BPMN_ACTIVITY";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_LOOP_TYPE",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto32["m_sql"] = "ACT_LOOP_TYPE";
$proto32["m_srcTableName"] = "BPMN_ACTIVITY";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_TEST_BEFORE",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto34["m_sql"] = "ACT_TEST_BEFORE";
$proto34["m_srcTableName"] = "BPMN_ACTIVITY";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_LOOP_MAXIMUM",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto36["m_sql"] = "ACT_LOOP_MAXIMUM";
$proto36["m_srcTableName"] = "BPMN_ACTIVITY";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_LOOP_CONDITION",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto38["m_sql"] = "ACT_LOOP_CONDITION";
$proto38["m_srcTableName"] = "BPMN_ACTIVITY";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_LOOP_CARDINALITY",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto40["m_sql"] = "ACT_LOOP_CARDINALITY";
$proto40["m_srcTableName"] = "BPMN_ACTIVITY";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_LOOP_BEHAVIOR",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto42["m_sql"] = "ACT_LOOP_BEHAVIOR";
$proto42["m_srcTableName"] = "BPMN_ACTIVITY";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_IS_ADHOC",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto44["m_sql"] = "ACT_IS_ADHOC";
$proto44["m_srcTableName"] = "BPMN_ACTIVITY";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_IS_COLLAPSED",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto46["m_sql"] = "ACT_IS_COLLAPSED";
$proto46["m_srcTableName"] = "BPMN_ACTIVITY";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_COMPLETION_CONDITION",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto48["m_sql"] = "ACT_COMPLETION_CONDITION";
$proto48["m_srcTableName"] = "BPMN_ACTIVITY";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ORDERING",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto50["m_sql"] = "ACT_ORDERING";
$proto50["m_srcTableName"] = "BPMN_ACTIVITY";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_CANCEL_REMAINING_INSTANCES",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto52["m_sql"] = "ACT_CANCEL_REMAINING_INSTANCES";
$proto52["m_srcTableName"] = "BPMN_ACTIVITY";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_PROTOCOL",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto54["m_sql"] = "ACT_PROTOCOL";
$proto54["m_srcTableName"] = "BPMN_ACTIVITY";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_METHOD",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto56["m_sql"] = "ACT_METHOD";
$proto56["m_srcTableName"] = "BPMN_ACTIVITY";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_IS_GLOBAL",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto58["m_sql"] = "ACT_IS_GLOBAL";
$proto58["m_srcTableName"] = "BPMN_ACTIVITY";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_REFERER",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto60["m_sql"] = "ACT_REFERER";
$proto60["m_srcTableName"] = "BPMN_ACTIVITY";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_DEFAULT_FLOW",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto62["m_sql"] = "ACT_DEFAULT_FLOW";
$proto62["m_srcTableName"] = "BPMN_ACTIVITY";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_MASTER_DIAGRAM",
	"m_strTable" => "BPMN_ACTIVITY",
	"m_srcTableName" => "BPMN_ACTIVITY"
));

$proto64["m_sql"] = "ACT_MASTER_DIAGRAM";
$proto64["m_srcTableName"] = "BPMN_ACTIVITY";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "BPMN_ACTIVITY";
$proto67["m_srcTableName"] = "BPMN_ACTIVITY";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "ACT_UID";
$proto67["m_columns"][] = "PRJ_UID";
$proto67["m_columns"][] = "PRO_UID";
$proto67["m_columns"][] = "ACT_NAME";
$proto67["m_columns"][] = "ACT_TYPE";
$proto67["m_columns"][] = "ACT_IS_FOR_COMPENSATION";
$proto67["m_columns"][] = "ACT_START_QUANTITY";
$proto67["m_columns"][] = "ACT_COMPLETION_QUANTITY";
$proto67["m_columns"][] = "ACT_TASK_TYPE";
$proto67["m_columns"][] = "ACT_IMPLEMENTATION";
$proto67["m_columns"][] = "ACT_INSTANTIATE";
$proto67["m_columns"][] = "ACT_SCRIPT_TYPE";
$proto67["m_columns"][] = "ACT_SCRIPT";
$proto67["m_columns"][] = "ACT_LOOP_TYPE";
$proto67["m_columns"][] = "ACT_TEST_BEFORE";
$proto67["m_columns"][] = "ACT_LOOP_MAXIMUM";
$proto67["m_columns"][] = "ACT_LOOP_CONDITION";
$proto67["m_columns"][] = "ACT_LOOP_CARDINALITY";
$proto67["m_columns"][] = "ACT_LOOP_BEHAVIOR";
$proto67["m_columns"][] = "ACT_IS_ADHOC";
$proto67["m_columns"][] = "ACT_IS_COLLAPSED";
$proto67["m_columns"][] = "ACT_COMPLETION_CONDITION";
$proto67["m_columns"][] = "ACT_ORDERING";
$proto67["m_columns"][] = "ACT_CANCEL_REMAINING_INSTANCES";
$proto67["m_columns"][] = "ACT_PROTOCOL";
$proto67["m_columns"][] = "ACT_METHOD";
$proto67["m_columns"][] = "ACT_IS_GLOBAL";
$proto67["m_columns"][] = "ACT_REFERER";
$proto67["m_columns"][] = "ACT_DEFAULT_FLOW";
$proto67["m_columns"][] = "ACT_MASTER_DIAGRAM";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "BPMN_ACTIVITY";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "BPMN_ACTIVITY";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_ACTIVITY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_ACTIVITY = createSqlQuery_BPMN_ACTIVITY();


	
						;

																														

$tdataBPMN_ACTIVITY[".sqlquery"] = $queryData_BPMN_ACTIVITY;

$tableEvents["BPMN_ACTIVITY"] = new eventsBase;
$tdataBPMN_ACTIVITY[".hasEvents"] = false;

?>
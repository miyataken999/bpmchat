<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_EVENT = array();
	$tdataBPMN_EVENT[".truncateText"] = true;
	$tdataBPMN_EVENT[".NumberOfChars"] = 20;
	$tdataBPMN_EVENT[".ShortName"] = "BPMN_EVENT";
	$tdataBPMN_EVENT[".OwnerID"] = "";
	$tdataBPMN_EVENT[".OriginalTable"] = "BPMN_EVENT";

//	field labels
$fieldLabelsBPMN_EVENT = array();
$fieldToolTipsBPMN_EVENT = array();
$pageTitlesBPMN_EVENT = array();
$placeHoldersBPMN_EVENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_EVENT["Japanese"] = array();
	$fieldToolTipsBPMN_EVENT["Japanese"] = array();
	$placeHoldersBPMN_EVENT["Japanese"] = array();
	$pageTitlesBPMN_EVENT["Japanese"] = array();
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_UID"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_UID"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_EVENT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_EVENT["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_NAME"] = "EVNの名前";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_NAME"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_NAME"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_TYPE"] = "EVNタイプ";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_TYPE"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_TYPE"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_MARKER"] = "EVNマーカー";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_MARKER"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_MARKER"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_IS_INTERRUPTING"] = "EVNが中断されます";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_IS_INTERRUPTING"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_IS_INTERRUPTING"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_ATTACHED_TO"] = "EVNに添付";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_ATTACHED_TO"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_ATTACHED_TO"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_CANCEL_ACTIVITY"] = "EVNの活動をキャンセル";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_CANCEL_ACTIVITY"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_CANCEL_ACTIVITY"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_ACTIVITY_REF"] = "EVN活動REF";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_ACTIVITY_REF"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_ACTIVITY_REF"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_WAIT_FOR_COMPLETION"] = "EVN完了を待ちます";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_WAIT_FOR_COMPLETION"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_WAIT_FOR_COMPLETION"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_ERROR_NAME"] = "EVNのエラー名";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_ERROR_NAME"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_ERROR_NAME"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_ERROR_CODE"] = "EVNのエラーコード";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_ERROR_CODE"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_ERROR_CODE"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_ESCALATION_NAME"] = "EVNエスカレーション名";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_ESCALATION_NAME"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_ESCALATION_NAME"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_ESCALATION_CODE"] = "EVNエスカレーションコード";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_ESCALATION_CODE"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_ESCALATION_CODE"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_CONDITION"] = "EVN条件";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_CONDITION"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_CONDITION"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_MESSAGE"] = "EVNメッセージ";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_MESSAGE"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_MESSAGE"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_OPERATION_NAME"] = "EVNの操作名";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_OPERATION_NAME"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_OPERATION_NAME"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_OPERATION_IMPLEMENTATION_REF"] = "EVN操作の実装参照";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_OPERATION_IMPLEMENTATION_REF"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_OPERATION_IMPLEMENTATION_REF"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_TIME_DATE"] = "EVN時間日付";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_TIME_DATE"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_TIME_DATE"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_TIME_CYCLE"] = "EVN時間サイクル";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_TIME_CYCLE"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_TIME_CYCLE"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_TIME_DURATION"] = "EVNの持続時間";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_TIME_DURATION"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_TIME_DURATION"] = "";
	$fieldLabelsBPMN_EVENT["Japanese"]["EVN_BEHAVIOR"] = "EVNの挙動";
	$fieldToolTipsBPMN_EVENT["Japanese"]["EVN_BEHAVIOR"] = "";
	$placeHoldersBPMN_EVENT["Japanese"]["EVN_BEHAVIOR"] = "";
	if (count($fieldToolTipsBPMN_EVENT["Japanese"]))
		$tdataBPMN_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_EVENT["English"] = array();
	$fieldToolTipsBPMN_EVENT["English"] = array();
	$placeHoldersBPMN_EVENT["English"] = array();
	$pageTitlesBPMN_EVENT["English"] = array();
	$fieldLabelsBPMN_EVENT["English"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_UID"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_UID"] = "";
	$fieldLabelsBPMN_EVENT["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_EVENT["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_EVENT["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_EVENT["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_EVENT["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_EVENT["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_NAME"] = "EVNの名前";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_NAME"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_NAME"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_TYPE"] = "EVNタイプ";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_TYPE"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_TYPE"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_MARKER"] = "EVNマーカー";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_MARKER"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_MARKER"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_IS_INTERRUPTING"] = "EVNが中断されます";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_IS_INTERRUPTING"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_IS_INTERRUPTING"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_ATTACHED_TO"] = "EVNに添付";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_ATTACHED_TO"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_ATTACHED_TO"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_CANCEL_ACTIVITY"] = "EVNの活動をキャンセル";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_CANCEL_ACTIVITY"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_CANCEL_ACTIVITY"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_ACTIVITY_REF"] = "EVN活動REF";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_ACTIVITY_REF"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_ACTIVITY_REF"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_WAIT_FOR_COMPLETION"] = "EVN完了を待ちます";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_WAIT_FOR_COMPLETION"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_WAIT_FOR_COMPLETION"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_ERROR_NAME"] = "EVNのエラー名";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_ERROR_NAME"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_ERROR_NAME"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_ERROR_CODE"] = "EVNのエラーコード";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_ERROR_CODE"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_ERROR_CODE"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_ESCALATION_NAME"] = "EVNエスカレーション名";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_ESCALATION_NAME"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_ESCALATION_NAME"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_ESCALATION_CODE"] = "EVNエスカレーションコード";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_ESCALATION_CODE"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_ESCALATION_CODE"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_CONDITION"] = "EVN条件";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_CONDITION"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_CONDITION"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_MESSAGE"] = "EVNメッセージ";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_MESSAGE"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_MESSAGE"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_OPERATION_NAME"] = "EVNの操作名";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_OPERATION_NAME"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_OPERATION_NAME"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_OPERATION_IMPLEMENTATION_REF"] = "EVN操作の実装参照";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_OPERATION_IMPLEMENTATION_REF"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_OPERATION_IMPLEMENTATION_REF"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_TIME_DATE"] = "EVN時間日付";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_TIME_DATE"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_TIME_DATE"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_TIME_CYCLE"] = "EVN時間サイクル";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_TIME_CYCLE"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_TIME_CYCLE"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_TIME_DURATION"] = "EVNの持続時間";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_TIME_DURATION"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_TIME_DURATION"] = "";
	$fieldLabelsBPMN_EVENT["English"]["EVN_BEHAVIOR"] = "EVNの挙動";
	$fieldToolTipsBPMN_EVENT["English"]["EVN_BEHAVIOR"] = "";
	$placeHoldersBPMN_EVENT["English"]["EVN_BEHAVIOR"] = "";
	if (count($fieldToolTipsBPMN_EVENT["English"]))
		$tdataBPMN_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_EVENT[""] = array();
	$fieldToolTipsBPMN_EVENT[""] = array();
	$placeHoldersBPMN_EVENT[""] = array();
	$pageTitlesBPMN_EVENT[""] = array();
	if (count($fieldToolTipsBPMN_EVENT[""]))
		$tdataBPMN_EVENT[".isUseToolTips"] = true;
}


	$tdataBPMN_EVENT[".NCSearch"] = true;



$tdataBPMN_EVENT[".shortTableName"] = "BPMN_EVENT";
$tdataBPMN_EVENT[".nSecOptions"] = 0;
$tdataBPMN_EVENT[".recsPerRowPrint"] = 1;
$tdataBPMN_EVENT[".mainTableOwnerID"] = "";
$tdataBPMN_EVENT[".moveNext"] = 0;
$tdataBPMN_EVENT[".entityType"] = 0;

$tdataBPMN_EVENT[".strOriginalTableName"] = "BPMN_EVENT";

	



$tdataBPMN_EVENT[".showAddInPopup"] = false;

$tdataBPMN_EVENT[".showEditInPopup"] = false;

$tdataBPMN_EVENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_EVENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_EVENT[".fieldsForRegister"] = array();
	
$tdataBPMN_EVENT[".listAjax"] = false;

	$tdataBPMN_EVENT[".audit"] = true;

	$tdataBPMN_EVENT[".locking"] = false;

$tdataBPMN_EVENT[".edit"] = true;
$tdataBPMN_EVENT[".afterEditAction"] = 1;
$tdataBPMN_EVENT[".closePopupAfterEdit"] = 1;
$tdataBPMN_EVENT[".afterEditActionDetTable"] = "";

$tdataBPMN_EVENT[".add"] = true;
$tdataBPMN_EVENT[".afterAddAction"] = 1;
$tdataBPMN_EVENT[".closePopupAfterAdd"] = 1;
$tdataBPMN_EVENT[".afterAddActionDetTable"] = "";

$tdataBPMN_EVENT[".list"] = true;

$tdataBPMN_EVENT[".inlineEdit"] = true;


$tdataBPMN_EVENT[".reorderRecordsByHeader"] = true;
$tdataBPMN_EVENT[".createSortByDropdown"] = true;
$tdataBPMN_EVENT[".strSortControlSettingsJSON"] = "";



$tdataBPMN_EVENT[".inlineAdd"] = true;
$tdataBPMN_EVENT[".view"] = true;

$tdataBPMN_EVENT[".import"] = true;

$tdataBPMN_EVENT[".exportTo"] = true;

$tdataBPMN_EVENT[".printFriendly"] = true;

$tdataBPMN_EVENT[".delete"] = true;

$tdataBPMN_EVENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_EVENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_EVENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_EVENT[".searchSaving"] = false;
//

$tdataBPMN_EVENT[".showSearchPanel"] = true;
		$tdataBPMN_EVENT[".flexibleSearch"] = true;

$tdataBPMN_EVENT[".isUseAjaxSuggest"] = true;

$tdataBPMN_EVENT[".rowHighlite"] = true;



																												

$tdataBPMN_EVENT[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_EVENT[".buttonsAdded"] = false;

$tdataBPMN_EVENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_EVENT[".isUseTimeForSearch"] = false;



$tdataBPMN_EVENT[".badgeColor"] = "CD853F";


$tdataBPMN_EVENT[".allSearchFields"] = array();
$tdataBPMN_EVENT[".filterFields"] = array();
$tdataBPMN_EVENT[".requiredSearchFields"] = array();

$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_UID";
	$tdataBPMN_EVENT[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_EVENT[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_NAME";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_TYPE";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_MARKER";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_IS_INTERRUPTING";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_ATTACHED_TO";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_CANCEL_ACTIVITY";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_ACTIVITY_REF";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_WAIT_FOR_COMPLETION";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_ERROR_NAME";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_ERROR_CODE";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_ESCALATION_NAME";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_ESCALATION_CODE";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_CONDITION";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_MESSAGE";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_OPERATION_NAME";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_TIME_DATE";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_TIME_CYCLE";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_TIME_DURATION";
	$tdataBPMN_EVENT[".allSearchFields"][] = "EVN_BEHAVIOR";
	

$tdataBPMN_EVENT[".googleLikeFields"] = array();
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".googleLikeFields"][] = "EVN_BEHAVIOR";


$tdataBPMN_EVENT[".advSearchFields"] = array();
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".advSearchFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".tableType"] = "list";

$tdataBPMN_EVENT[".printerPageOrientation"] = 0;
$tdataBPMN_EVENT[".nPrinterPageScale"] = 100;

$tdataBPMN_EVENT[".nPrinterSplitRecords"] = 40;

$tdataBPMN_EVENT[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_EVENT[".geocodingEnabled"] = false;





$tdataBPMN_EVENT[".listGridLayout"] = 3;


$tdataBPMN_EVENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_EVENT[".pageSize"] = 20;

$tdataBPMN_EVENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_EVENT[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_EVENT[".orderindexes"] = array();

$tdataBPMN_EVENT[".sqlHead"] = "SELECT EVN_UID,  	PRJ_UID,  	PRO_UID,  	EVN_NAME,  	EVN_TYPE,  	EVN_MARKER,  	EVN_IS_INTERRUPTING,  	EVN_ATTACHED_TO,  	EVN_CANCEL_ACTIVITY,  	EVN_ACTIVITY_REF,  	EVN_WAIT_FOR_COMPLETION,  	EVN_ERROR_NAME,  	EVN_ERROR_CODE,  	EVN_ESCALATION_NAME,  	EVN_ESCALATION_CODE,  	EVN_CONDITION,  	EVN_MESSAGE,  	EVN_OPERATION_NAME,  	EVN_OPERATION_IMPLEMENTATION_REF,  	EVN_TIME_DATE,  	EVN_TIME_CYCLE,  	EVN_TIME_DURATION,  	EVN_BEHAVIOR";
$tdataBPMN_EVENT[".sqlFrom"] = "FROM BPMN_EVENT";
$tdataBPMN_EVENT[".sqlWhereExpr"] = "";
$tdataBPMN_EVENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_EVENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_EVENT[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_EVENT[".highlightSearchResults"] = true;

$tableKeysBPMN_EVENT = array();
$tableKeysBPMN_EVENT[] = "EVN_UID";
$tdataBPMN_EVENT[".Keys"] = $tableKeysBPMN_EVENT;

$tdataBPMN_EVENT[".listFields"] = array();
$tdataBPMN_EVENT[".listFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".listFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".listFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".listFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".listFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".listFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".listFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".listFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".listFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".listFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".listFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".listFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".listFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".listFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".listFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".listFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".listFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".listFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".listFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".listFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".listFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".listFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".listFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".hideMobileList"] = array();


$tdataBPMN_EVENT[".viewFields"] = array();
$tdataBPMN_EVENT[".viewFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".viewFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".viewFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".viewFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".addFields"] = array();
$tdataBPMN_EVENT[".addFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".addFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".addFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".addFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".addFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".addFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".addFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".addFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".addFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".addFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".addFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".addFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".addFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".addFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".addFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".addFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".addFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".addFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".addFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".addFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".addFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".addFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".addFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".masterListFields"] = array();
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".masterListFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".masterListFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".inlineAddFields"] = array();
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".inlineAddFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".editFields"] = array();
$tdataBPMN_EVENT[".editFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".editFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".editFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".editFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".editFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".editFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".editFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".editFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".editFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".editFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".editFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".editFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".editFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".editFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".editFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".editFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".editFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".editFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".editFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".editFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".editFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".editFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".editFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".inlineEditFields"] = array();
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".inlineEditFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".updateSelectedFields"] = array();
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".updateSelectedFields"][] = "EVN_BEHAVIOR";


$tdataBPMN_EVENT[".exportFields"] = array();
$tdataBPMN_EVENT[".exportFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".exportFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".exportFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".exportFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".importFields"] = array();
$tdataBPMN_EVENT[".importFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".importFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".importFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".importFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".importFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".importFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".importFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".importFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".importFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".importFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".importFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".importFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".importFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".importFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".importFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".importFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".importFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".importFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".importFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".importFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".importFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".importFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".importFields"][] = "EVN_BEHAVIOR";

$tdataBPMN_EVENT[".printFields"] = array();
$tdataBPMN_EVENT[".printFields"][] = "EVN_UID";
$tdataBPMN_EVENT[".printFields"][] = "PRJ_UID";
$tdataBPMN_EVENT[".printFields"][] = "PRO_UID";
$tdataBPMN_EVENT[".printFields"][] = "EVN_NAME";
$tdataBPMN_EVENT[".printFields"][] = "EVN_TYPE";
$tdataBPMN_EVENT[".printFields"][] = "EVN_MARKER";
$tdataBPMN_EVENT[".printFields"][] = "EVN_IS_INTERRUPTING";
$tdataBPMN_EVENT[".printFields"][] = "EVN_ATTACHED_TO";
$tdataBPMN_EVENT[".printFields"][] = "EVN_CANCEL_ACTIVITY";
$tdataBPMN_EVENT[".printFields"][] = "EVN_ACTIVITY_REF";
$tdataBPMN_EVENT[".printFields"][] = "EVN_WAIT_FOR_COMPLETION";
$tdataBPMN_EVENT[".printFields"][] = "EVN_ERROR_NAME";
$tdataBPMN_EVENT[".printFields"][] = "EVN_ERROR_CODE";
$tdataBPMN_EVENT[".printFields"][] = "EVN_ESCALATION_NAME";
$tdataBPMN_EVENT[".printFields"][] = "EVN_ESCALATION_CODE";
$tdataBPMN_EVENT[".printFields"][] = "EVN_CONDITION";
$tdataBPMN_EVENT[".printFields"][] = "EVN_MESSAGE";
$tdataBPMN_EVENT[".printFields"][] = "EVN_OPERATION_NAME";
$tdataBPMN_EVENT[".printFields"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$tdataBPMN_EVENT[".printFields"][] = "EVN_TIME_DATE";
$tdataBPMN_EVENT[".printFields"][] = "EVN_TIME_CYCLE";
$tdataBPMN_EVENT[".printFields"][] = "EVN_TIME_DURATION";
$tdataBPMN_EVENT[".printFields"][] = "EVN_BEHAVIOR";

//	EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EVN_UID";
	$fdata["GoodName"] = "EVN_UID";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_UID");
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

		$fdata["strField"] = "EVN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID";

	
	
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




	$tdataBPMN_EVENT["EVN_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","PRJ_UID");
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




	$tdataBPMN_EVENT["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","PRO_UID");
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




	$tdataBPMN_EVENT["PRO_UID"] = $fdata;
//	EVN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EVN_NAME";
	$fdata["GoodName"] = "EVN_NAME";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_NAME");
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

		$fdata["strField"] = "EVN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_NAME";

	
	
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




	$tdataBPMN_EVENT["EVN_NAME"] = $fdata;
//	EVN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EVN_TYPE";
	$fdata["GoodName"] = "EVN_TYPE";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_TYPE");
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

		$fdata["strField"] = "EVN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_TYPE";

	
	
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




	$tdataBPMN_EVENT["EVN_TYPE"] = $fdata;
//	EVN_MARKER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EVN_MARKER";
	$fdata["GoodName"] = "EVN_MARKER";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_MARKER");
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

		$fdata["strField"] = "EVN_MARKER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_MARKER";

	
	
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




	$tdataBPMN_EVENT["EVN_MARKER"] = $fdata;
//	EVN_IS_INTERRUPTING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EVN_IS_INTERRUPTING";
	$fdata["GoodName"] = "EVN_IS_INTERRUPTING";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_IS_INTERRUPTING");
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

		$fdata["strField"] = "EVN_IS_INTERRUPTING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_IS_INTERRUPTING";

	
	
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




	$tdataBPMN_EVENT["EVN_IS_INTERRUPTING"] = $fdata;
//	EVN_ATTACHED_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EVN_ATTACHED_TO";
	$fdata["GoodName"] = "EVN_ATTACHED_TO";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_ATTACHED_TO");
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

		$fdata["strField"] = "EVN_ATTACHED_TO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_ATTACHED_TO";

	
	
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




	$tdataBPMN_EVENT["EVN_ATTACHED_TO"] = $fdata;
//	EVN_CANCEL_ACTIVITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EVN_CANCEL_ACTIVITY";
	$fdata["GoodName"] = "EVN_CANCEL_ACTIVITY";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_CANCEL_ACTIVITY");
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

		$fdata["strField"] = "EVN_CANCEL_ACTIVITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_CANCEL_ACTIVITY";

	
	
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




	$tdataBPMN_EVENT["EVN_CANCEL_ACTIVITY"] = $fdata;
//	EVN_ACTIVITY_REF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EVN_ACTIVITY_REF";
	$fdata["GoodName"] = "EVN_ACTIVITY_REF";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_ACTIVITY_REF");
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

		$fdata["strField"] = "EVN_ACTIVITY_REF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_ACTIVITY_REF";

	
	
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




	$tdataBPMN_EVENT["EVN_ACTIVITY_REF"] = $fdata;
//	EVN_WAIT_FOR_COMPLETION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EVN_WAIT_FOR_COMPLETION";
	$fdata["GoodName"] = "EVN_WAIT_FOR_COMPLETION";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_WAIT_FOR_COMPLETION");
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

		$fdata["strField"] = "EVN_WAIT_FOR_COMPLETION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_WAIT_FOR_COMPLETION";

	
	
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




	$tdataBPMN_EVENT["EVN_WAIT_FOR_COMPLETION"] = $fdata;
//	EVN_ERROR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EVN_ERROR_NAME";
	$fdata["GoodName"] = "EVN_ERROR_NAME";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_ERROR_NAME");
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

		$fdata["strField"] = "EVN_ERROR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_ERROR_NAME";

	
	
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




	$tdataBPMN_EVENT["EVN_ERROR_NAME"] = $fdata;
//	EVN_ERROR_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EVN_ERROR_CODE";
	$fdata["GoodName"] = "EVN_ERROR_CODE";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_ERROR_CODE");
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

		$fdata["strField"] = "EVN_ERROR_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_ERROR_CODE";

	
	
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




	$tdataBPMN_EVENT["EVN_ERROR_CODE"] = $fdata;
//	EVN_ESCALATION_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EVN_ESCALATION_NAME";
	$fdata["GoodName"] = "EVN_ESCALATION_NAME";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_ESCALATION_NAME");
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

		$fdata["strField"] = "EVN_ESCALATION_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_ESCALATION_NAME";

	
	
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




	$tdataBPMN_EVENT["EVN_ESCALATION_NAME"] = $fdata;
//	EVN_ESCALATION_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EVN_ESCALATION_CODE";
	$fdata["GoodName"] = "EVN_ESCALATION_CODE";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_ESCALATION_CODE");
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

		$fdata["strField"] = "EVN_ESCALATION_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_ESCALATION_CODE";

	
	
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




	$tdataBPMN_EVENT["EVN_ESCALATION_CODE"] = $fdata;
//	EVN_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EVN_CONDITION";
	$fdata["GoodName"] = "EVN_CONDITION";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_CONDITION");
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

		$fdata["strField"] = "EVN_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_CONDITION";

	
	
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




	$tdataBPMN_EVENT["EVN_CONDITION"] = $fdata;
//	EVN_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EVN_MESSAGE";
	$fdata["GoodName"] = "EVN_MESSAGE";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_MESSAGE");
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

		$fdata["strField"] = "EVN_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_MESSAGE";

	
	
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




	$tdataBPMN_EVENT["EVN_MESSAGE"] = $fdata;
//	EVN_OPERATION_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EVN_OPERATION_NAME";
	$fdata["GoodName"] = "EVN_OPERATION_NAME";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_OPERATION_NAME");
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

		$fdata["strField"] = "EVN_OPERATION_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_OPERATION_NAME";

	
	
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




	$tdataBPMN_EVENT["EVN_OPERATION_NAME"] = $fdata;
//	EVN_OPERATION_IMPLEMENTATION_REF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "EVN_OPERATION_IMPLEMENTATION_REF";
	$fdata["GoodName"] = "EVN_OPERATION_IMPLEMENTATION_REF";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_OPERATION_IMPLEMENTATION_REF");
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

		$fdata["strField"] = "EVN_OPERATION_IMPLEMENTATION_REF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_OPERATION_IMPLEMENTATION_REF";

	
	
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




	$tdataBPMN_EVENT["EVN_OPERATION_IMPLEMENTATION_REF"] = $fdata;
//	EVN_TIME_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "EVN_TIME_DATE";
	$fdata["GoodName"] = "EVN_TIME_DATE";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_TIME_DATE");
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

		$fdata["strField"] = "EVN_TIME_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_TIME_DATE";

	
	
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




	$tdataBPMN_EVENT["EVN_TIME_DATE"] = $fdata;
//	EVN_TIME_CYCLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EVN_TIME_CYCLE";
	$fdata["GoodName"] = "EVN_TIME_CYCLE";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_TIME_CYCLE");
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

		$fdata["strField"] = "EVN_TIME_CYCLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_TIME_CYCLE";

	
	
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




	$tdataBPMN_EVENT["EVN_TIME_CYCLE"] = $fdata;
//	EVN_TIME_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "EVN_TIME_DURATION";
	$fdata["GoodName"] = "EVN_TIME_DURATION";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_TIME_DURATION");
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

		$fdata["strField"] = "EVN_TIME_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_TIME_DURATION";

	
	
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




	$tdataBPMN_EVENT["EVN_TIME_DURATION"] = $fdata;
//	EVN_BEHAVIOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "EVN_BEHAVIOR";
	$fdata["GoodName"] = "EVN_BEHAVIOR";
	$fdata["ownerTable"] = "BPMN_EVENT";
	$fdata["Label"] = GetFieldLabel("BPMN_EVENT","EVN_BEHAVIOR");
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

		$fdata["strField"] = "EVN_BEHAVIOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_BEHAVIOR";

	
	
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




	$tdataBPMN_EVENT["EVN_BEHAVIOR"] = $fdata;


$tables_data["BPMN_EVENT"]=&$tdataBPMN_EVENT;
$field_labels["BPMN_EVENT"] = &$fieldLabelsBPMN_EVENT;
$fieldToolTips["BPMN_EVENT"] = &$fieldToolTipsBPMN_EVENT;
$placeHolders["BPMN_EVENT"] = &$placeHoldersBPMN_EVENT;
$page_titles["BPMN_EVENT"] = &$pageTitlesBPMN_EVENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_EVENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_EVENT"] = array();


	
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
					$masterTablesData["BPMN_EVENT"][0] = $masterParams;
				$masterTablesData["BPMN_EVENT"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_EVENT"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["BPMN_EVENT"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_EVENT"][0]["detailKeys"][]="PRO_UID";
		
	
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
					$masterTablesData["BPMN_EVENT"][1] = $masterParams;
				$masterTablesData["BPMN_EVENT"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_EVENT"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_EVENT"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_EVENT"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_EVENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EVN_UID,  	PRJ_UID,  	PRO_UID,  	EVN_NAME,  	EVN_TYPE,  	EVN_MARKER,  	EVN_IS_INTERRUPTING,  	EVN_ATTACHED_TO,  	EVN_CANCEL_ACTIVITY,  	EVN_ACTIVITY_REF,  	EVN_WAIT_FOR_COMPLETION,  	EVN_ERROR_NAME,  	EVN_ERROR_CODE,  	EVN_ESCALATION_NAME,  	EVN_ESCALATION_CODE,  	EVN_CONDITION,  	EVN_MESSAGE,  	EVN_OPERATION_NAME,  	EVN_OPERATION_IMPLEMENTATION_REF,  	EVN_TIME_DATE,  	EVN_TIME_CYCLE,  	EVN_TIME_DURATION,  	EVN_BEHAVIOR";
$proto0["m_strFrom"] = "FROM BPMN_EVENT";
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
	"m_strName" => "EVN_UID",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto6["m_sql"] = "EVN_UID";
$proto6["m_srcTableName"] = "BPMN_EVENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_EVENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_EVENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_NAME",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto12["m_sql"] = "EVN_NAME";
$proto12["m_srcTableName"] = "BPMN_EVENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_TYPE",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto14["m_sql"] = "EVN_TYPE";
$proto14["m_srcTableName"] = "BPMN_EVENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_MARKER",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto16["m_sql"] = "EVN_MARKER";
$proto16["m_srcTableName"] = "BPMN_EVENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_IS_INTERRUPTING",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto18["m_sql"] = "EVN_IS_INTERRUPTING";
$proto18["m_srcTableName"] = "BPMN_EVENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_ATTACHED_TO",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto20["m_sql"] = "EVN_ATTACHED_TO";
$proto20["m_srcTableName"] = "BPMN_EVENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_CANCEL_ACTIVITY",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto22["m_sql"] = "EVN_CANCEL_ACTIVITY";
$proto22["m_srcTableName"] = "BPMN_EVENT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_ACTIVITY_REF",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto24["m_sql"] = "EVN_ACTIVITY_REF";
$proto24["m_srcTableName"] = "BPMN_EVENT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_WAIT_FOR_COMPLETION",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto26["m_sql"] = "EVN_WAIT_FOR_COMPLETION";
$proto26["m_srcTableName"] = "BPMN_EVENT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_ERROR_NAME",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto28["m_sql"] = "EVN_ERROR_NAME";
$proto28["m_srcTableName"] = "BPMN_EVENT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_ERROR_CODE",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto30["m_sql"] = "EVN_ERROR_CODE";
$proto30["m_srcTableName"] = "BPMN_EVENT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_ESCALATION_NAME",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto32["m_sql"] = "EVN_ESCALATION_NAME";
$proto32["m_srcTableName"] = "BPMN_EVENT";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_ESCALATION_CODE",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto34["m_sql"] = "EVN_ESCALATION_CODE";
$proto34["m_srcTableName"] = "BPMN_EVENT";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_CONDITION",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto36["m_sql"] = "EVN_CONDITION";
$proto36["m_srcTableName"] = "BPMN_EVENT";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_MESSAGE",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto38["m_sql"] = "EVN_MESSAGE";
$proto38["m_srcTableName"] = "BPMN_EVENT";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_OPERATION_NAME",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto40["m_sql"] = "EVN_OPERATION_NAME";
$proto40["m_srcTableName"] = "BPMN_EVENT";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_OPERATION_IMPLEMENTATION_REF",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto42["m_sql"] = "EVN_OPERATION_IMPLEMENTATION_REF";
$proto42["m_srcTableName"] = "BPMN_EVENT";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_TIME_DATE",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto44["m_sql"] = "EVN_TIME_DATE";
$proto44["m_srcTableName"] = "BPMN_EVENT";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_TIME_CYCLE",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto46["m_sql"] = "EVN_TIME_CYCLE";
$proto46["m_srcTableName"] = "BPMN_EVENT";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_TIME_DURATION",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto48["m_sql"] = "EVN_TIME_DURATION";
$proto48["m_srcTableName"] = "BPMN_EVENT";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_BEHAVIOR",
	"m_strTable" => "BPMN_EVENT",
	"m_srcTableName" => "BPMN_EVENT"
));

$proto50["m_sql"] = "EVN_BEHAVIOR";
$proto50["m_srcTableName"] = "BPMN_EVENT";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "BPMN_EVENT";
$proto53["m_srcTableName"] = "BPMN_EVENT";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "EVN_UID";
$proto53["m_columns"][] = "PRJ_UID";
$proto53["m_columns"][] = "PRO_UID";
$proto53["m_columns"][] = "EVN_NAME";
$proto53["m_columns"][] = "EVN_TYPE";
$proto53["m_columns"][] = "EVN_MARKER";
$proto53["m_columns"][] = "EVN_IS_INTERRUPTING";
$proto53["m_columns"][] = "EVN_ATTACHED_TO";
$proto53["m_columns"][] = "EVN_CANCEL_ACTIVITY";
$proto53["m_columns"][] = "EVN_ACTIVITY_REF";
$proto53["m_columns"][] = "EVN_WAIT_FOR_COMPLETION";
$proto53["m_columns"][] = "EVN_ERROR_NAME";
$proto53["m_columns"][] = "EVN_ERROR_CODE";
$proto53["m_columns"][] = "EVN_ESCALATION_NAME";
$proto53["m_columns"][] = "EVN_ESCALATION_CODE";
$proto53["m_columns"][] = "EVN_CONDITION";
$proto53["m_columns"][] = "EVN_MESSAGE";
$proto53["m_columns"][] = "EVN_OPERATION_NAME";
$proto53["m_columns"][] = "EVN_OPERATION_IMPLEMENTATION_REF";
$proto53["m_columns"][] = "EVN_TIME_DATE";
$proto53["m_columns"][] = "EVN_TIME_CYCLE";
$proto53["m_columns"][] = "EVN_TIME_DURATION";
$proto53["m_columns"][] = "EVN_BEHAVIOR";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "BPMN_EVENT";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "BPMN_EVENT";
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
$proto0["m_srcTableName"]="BPMN_EVENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_EVENT = createSqlQuery_BPMN_EVENT();


	
						;

																							

$tdataBPMN_EVENT[".sqlquery"] = $queryData_BPMN_EVENT;

$tableEvents["BPMN_EVENT"] = new eventsBase;
$tdataBPMN_EVENT[".hasEvents"] = false;

?>
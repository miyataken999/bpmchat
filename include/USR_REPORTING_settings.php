<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUSR_REPORTING = array();
	$tdataUSR_REPORTING[".truncateText"] = true;
	$tdataUSR_REPORTING[".NumberOfChars"] = 20;
	$tdataUSR_REPORTING[".ShortName"] = "USR_REPORTING";
	$tdataUSR_REPORTING[".OwnerID"] = "";
	$tdataUSR_REPORTING[".OriginalTable"] = "USR_REPORTING";

//	field labels
$fieldLabelsUSR_REPORTING = array();
$fieldToolTipsUSR_REPORTING = array();
$pageTitlesUSR_REPORTING = array();
$placeHoldersUSR_REPORTING = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsUSR_REPORTING["Japanese"] = array();
	$fieldToolTipsUSR_REPORTING["Japanese"] = array();
	$placeHoldersUSR_REPORTING["Japanese"] = array();
	$pageTitlesUSR_REPORTING["Japanese"] = array();
	$fieldLabelsUSR_REPORTING["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsUSR_REPORTING["Japanese"]["USR_UID"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["USR_UID"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TAS_UID"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TAS_UID"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsUSR_REPORTING["Japanese"]["PRO_UID"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["PRO_UID"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["MONTH"] = "月";
	$fieldToolTipsUSR_REPORTING["Japanese"]["MONTH"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["MONTH"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["YEAR"] = "年";
	$fieldToolTipsUSR_REPORTING["Japanese"]["YEAR"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["YEAR"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TOTAL_QUEUE_TIME_BY_TASK"] = "タスクによって合計キュー時間";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TOTAL_QUEUE_TIME_BY_TASK"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TOTAL_QUEUE_TIME_BY_TASK"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TOTAL_TIME_BY_TASK"] = "タスクによって合計時間";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TOTAL_TIME_BY_TASK"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TOTAL_TIME_BY_TASK"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TOTAL_CASES_IN"] = "の総例";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TOTAL_CASES_IN"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TOTAL_CASES_IN"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TOTAL_CASES_OUT"] = "アウトの合計例";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TOTAL_CASES_OUT"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TOTAL_CASES_OUT"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["USER_HOUR_COST"] = "ユーザーの時間コスト";
	$fieldToolTipsUSR_REPORTING["Japanese"]["USER_HOUR_COST"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["USER_HOUR_COST"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["AVG_TIME"] = "平均時間";
	$fieldToolTipsUSR_REPORTING["Japanese"]["AVG_TIME"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["AVG_TIME"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["SDV_TIME"] = "SDVの時間";
	$fieldToolTipsUSR_REPORTING["Japanese"]["SDV_TIME"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["SDV_TIME"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["CONFIGURED_TASK_TIME"] = "設定されたタスクの時間";
	$fieldToolTipsUSR_REPORTING["Japanese"]["CONFIGURED_TASK_TIME"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["CONFIGURED_TASK_TIME"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TOTAL_CASES_OVERDUE"] = "延滞合計例";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TOTAL_CASES_OVERDUE"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TOTAL_CASES_OVERDUE"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["TOTAL_CASES_ON_TIME"] = "時間の合計例";
	$fieldToolTipsUSR_REPORTING["Japanese"]["TOTAL_CASES_ON_TIME"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["TOTAL_CASES_ON_TIME"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["PRO_COST"] = "プロコスト";
	$fieldToolTipsUSR_REPORTING["Japanese"]["PRO_COST"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["PRO_COST"] = "";
	$fieldLabelsUSR_REPORTING["Japanese"]["PRO_UNIT_COST"] = "プロ単価";
	$fieldToolTipsUSR_REPORTING["Japanese"]["PRO_UNIT_COST"] = "";
	$placeHoldersUSR_REPORTING["Japanese"]["PRO_UNIT_COST"] = "";
	if (count($fieldToolTipsUSR_REPORTING["Japanese"]))
		$tdataUSR_REPORTING[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUSR_REPORTING["English"] = array();
	$fieldToolTipsUSR_REPORTING["English"] = array();
	$placeHoldersUSR_REPORTING["English"] = array();
	$pageTitlesUSR_REPORTING["English"] = array();
	$fieldLabelsUSR_REPORTING["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsUSR_REPORTING["English"]["USR_UID"] = "";
	$placeHoldersUSR_REPORTING["English"]["USR_UID"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsUSR_REPORTING["English"]["TAS_UID"] = "";
	$placeHoldersUSR_REPORTING["English"]["TAS_UID"] = "";
	$fieldLabelsUSR_REPORTING["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsUSR_REPORTING["English"]["PRO_UID"] = "";
	$placeHoldersUSR_REPORTING["English"]["PRO_UID"] = "";
	$fieldLabelsUSR_REPORTING["English"]["MONTH"] = "月";
	$fieldToolTipsUSR_REPORTING["English"]["MONTH"] = "";
	$placeHoldersUSR_REPORTING["English"]["MONTH"] = "";
	$fieldLabelsUSR_REPORTING["English"]["YEAR"] = "年";
	$fieldToolTipsUSR_REPORTING["English"]["YEAR"] = "";
	$placeHoldersUSR_REPORTING["English"]["YEAR"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TOTAL_QUEUE_TIME_BY_TASK"] = "タスクによって合計キュー時間";
	$fieldToolTipsUSR_REPORTING["English"]["TOTAL_QUEUE_TIME_BY_TASK"] = "";
	$placeHoldersUSR_REPORTING["English"]["TOTAL_QUEUE_TIME_BY_TASK"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TOTAL_TIME_BY_TASK"] = "タスクによって合計時間";
	$fieldToolTipsUSR_REPORTING["English"]["TOTAL_TIME_BY_TASK"] = "";
	$placeHoldersUSR_REPORTING["English"]["TOTAL_TIME_BY_TASK"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TOTAL_CASES_IN"] = "の総例";
	$fieldToolTipsUSR_REPORTING["English"]["TOTAL_CASES_IN"] = "";
	$placeHoldersUSR_REPORTING["English"]["TOTAL_CASES_IN"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TOTAL_CASES_OUT"] = "アウトの合計例";
	$fieldToolTipsUSR_REPORTING["English"]["TOTAL_CASES_OUT"] = "";
	$placeHoldersUSR_REPORTING["English"]["TOTAL_CASES_OUT"] = "";
	$fieldLabelsUSR_REPORTING["English"]["USER_HOUR_COST"] = "ユーザーの時間コスト";
	$fieldToolTipsUSR_REPORTING["English"]["USER_HOUR_COST"] = "";
	$placeHoldersUSR_REPORTING["English"]["USER_HOUR_COST"] = "";
	$fieldLabelsUSR_REPORTING["English"]["AVG_TIME"] = "平均時間";
	$fieldToolTipsUSR_REPORTING["English"]["AVG_TIME"] = "";
	$placeHoldersUSR_REPORTING["English"]["AVG_TIME"] = "";
	$fieldLabelsUSR_REPORTING["English"]["SDV_TIME"] = "SDVの時間";
	$fieldToolTipsUSR_REPORTING["English"]["SDV_TIME"] = "";
	$placeHoldersUSR_REPORTING["English"]["SDV_TIME"] = "";
	$fieldLabelsUSR_REPORTING["English"]["CONFIGURED_TASK_TIME"] = "設定されたタスクの時間";
	$fieldToolTipsUSR_REPORTING["English"]["CONFIGURED_TASK_TIME"] = "";
	$placeHoldersUSR_REPORTING["English"]["CONFIGURED_TASK_TIME"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TOTAL_CASES_OVERDUE"] = "延滞合計例";
	$fieldToolTipsUSR_REPORTING["English"]["TOTAL_CASES_OVERDUE"] = "";
	$placeHoldersUSR_REPORTING["English"]["TOTAL_CASES_OVERDUE"] = "";
	$fieldLabelsUSR_REPORTING["English"]["TOTAL_CASES_ON_TIME"] = "時間の合計例";
	$fieldToolTipsUSR_REPORTING["English"]["TOTAL_CASES_ON_TIME"] = "";
	$placeHoldersUSR_REPORTING["English"]["TOTAL_CASES_ON_TIME"] = "";
	$fieldLabelsUSR_REPORTING["English"]["PRO_COST"] = "プロコスト";
	$fieldToolTipsUSR_REPORTING["English"]["PRO_COST"] = "";
	$placeHoldersUSR_REPORTING["English"]["PRO_COST"] = "";
	$fieldLabelsUSR_REPORTING["English"]["PRO_UNIT_COST"] = "プロ単価";
	$fieldToolTipsUSR_REPORTING["English"]["PRO_UNIT_COST"] = "";
	$placeHoldersUSR_REPORTING["English"]["PRO_UNIT_COST"] = "";
	if (count($fieldToolTipsUSR_REPORTING["English"]))
		$tdataUSR_REPORTING[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUSR_REPORTING[""] = array();
	$fieldToolTipsUSR_REPORTING[""] = array();
	$placeHoldersUSR_REPORTING[""] = array();
	$pageTitlesUSR_REPORTING[""] = array();
	if (count($fieldToolTipsUSR_REPORTING[""]))
		$tdataUSR_REPORTING[".isUseToolTips"] = true;
}


	$tdataUSR_REPORTING[".NCSearch"] = true;



$tdataUSR_REPORTING[".shortTableName"] = "USR_REPORTING";
$tdataUSR_REPORTING[".nSecOptions"] = 0;
$tdataUSR_REPORTING[".recsPerRowPrint"] = 1;
$tdataUSR_REPORTING[".mainTableOwnerID"] = "";
$tdataUSR_REPORTING[".moveNext"] = 0;
$tdataUSR_REPORTING[".entityType"] = 0;

$tdataUSR_REPORTING[".strOriginalTableName"] = "USR_REPORTING";

	



$tdataUSR_REPORTING[".showAddInPopup"] = false;

$tdataUSR_REPORTING[".showEditInPopup"] = false;

$tdataUSR_REPORTING[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUSR_REPORTING[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUSR_REPORTING[".fieldsForRegister"] = array();
	
$tdataUSR_REPORTING[".listAjax"] = false;

	$tdataUSR_REPORTING[".audit"] = true;

	$tdataUSR_REPORTING[".locking"] = false;

$tdataUSR_REPORTING[".edit"] = true;
$tdataUSR_REPORTING[".afterEditAction"] = 1;
$tdataUSR_REPORTING[".closePopupAfterEdit"] = 1;
$tdataUSR_REPORTING[".afterEditActionDetTable"] = "";

$tdataUSR_REPORTING[".add"] = true;
$tdataUSR_REPORTING[".afterAddAction"] = 1;
$tdataUSR_REPORTING[".closePopupAfterAdd"] = 1;
$tdataUSR_REPORTING[".afterAddActionDetTable"] = "";

$tdataUSR_REPORTING[".list"] = true;

$tdataUSR_REPORTING[".inlineEdit"] = true;


$tdataUSR_REPORTING[".reorderRecordsByHeader"] = true;
$tdataUSR_REPORTING[".createSortByDropdown"] = true;
$tdataUSR_REPORTING[".strSortControlSettingsJSON"] = "";



$tdataUSR_REPORTING[".inlineAdd"] = true;
$tdataUSR_REPORTING[".view"] = true;

$tdataUSR_REPORTING[".import"] = true;

$tdataUSR_REPORTING[".exportTo"] = true;

$tdataUSR_REPORTING[".printFriendly"] = true;

$tdataUSR_REPORTING[".delete"] = true;

$tdataUSR_REPORTING[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataUSR_REPORTING[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataUSR_REPORTING[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataUSR_REPORTING[".searchSaving"] = false;
//

$tdataUSR_REPORTING[".showSearchPanel"] = true;
		$tdataUSR_REPORTING[".flexibleSearch"] = true;

$tdataUSR_REPORTING[".isUseAjaxSuggest"] = true;

$tdataUSR_REPORTING[".rowHighlite"] = true;



				

$tdataUSR_REPORTING[".ajaxCodeSnippetAdded"] = false;

$tdataUSR_REPORTING[".buttonsAdded"] = false;

$tdataUSR_REPORTING[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUSR_REPORTING[".isUseTimeForSearch"] = false;





$tdataUSR_REPORTING[".allSearchFields"] = array();
$tdataUSR_REPORTING[".filterFields"] = array();
$tdataUSR_REPORTING[".requiredSearchFields"] = array();

$tdataUSR_REPORTING[".allSearchFields"][] = "USR_UID";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TAS_UID";
	$tdataUSR_REPORTING[".allSearchFields"][] = "PRO_UID";
	$tdataUSR_REPORTING[".allSearchFields"][] = "MONTH";
	$tdataUSR_REPORTING[".allSearchFields"][] = "YEAR";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TOTAL_TIME_BY_TASK";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TOTAL_CASES_IN";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TOTAL_CASES_OUT";
	$tdataUSR_REPORTING[".allSearchFields"][] = "USER_HOUR_COST";
	$tdataUSR_REPORTING[".allSearchFields"][] = "AVG_TIME";
	$tdataUSR_REPORTING[".allSearchFields"][] = "SDV_TIME";
	$tdataUSR_REPORTING[".allSearchFields"][] = "CONFIGURED_TASK_TIME";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TOTAL_CASES_OVERDUE";
	$tdataUSR_REPORTING[".allSearchFields"][] = "TOTAL_CASES_ON_TIME";
	$tdataUSR_REPORTING[".allSearchFields"][] = "PRO_COST";
	$tdataUSR_REPORTING[".allSearchFields"][] = "PRO_UNIT_COST";
	

$tdataUSR_REPORTING[".googleLikeFields"] = array();
$tdataUSR_REPORTING[".googleLikeFields"][] = "USR_UID";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".googleLikeFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".googleLikeFields"][] = "MONTH";
$tdataUSR_REPORTING[".googleLikeFields"][] = "YEAR";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".googleLikeFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".googleLikeFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".googleLikeFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".googleLikeFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".googleLikeFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".googleLikeFields"][] = "PRO_UNIT_COST";


$tdataUSR_REPORTING[".advSearchFields"] = array();
$tdataUSR_REPORTING[".advSearchFields"][] = "USR_UID";
$tdataUSR_REPORTING[".advSearchFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".advSearchFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".advSearchFields"][] = "MONTH";
$tdataUSR_REPORTING[".advSearchFields"][] = "YEAR";
$tdataUSR_REPORTING[".advSearchFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".advSearchFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".advSearchFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".advSearchFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".advSearchFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".advSearchFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".advSearchFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".advSearchFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".advSearchFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".advSearchFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".advSearchFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".advSearchFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".tableType"] = "list";

$tdataUSR_REPORTING[".printerPageOrientation"] = 0;
$tdataUSR_REPORTING[".nPrinterPageScale"] = 100;

$tdataUSR_REPORTING[".nPrinterSplitRecords"] = 40;

$tdataUSR_REPORTING[".nPrinterPDFSplitRecords"] = 40;



$tdataUSR_REPORTING[".geocodingEnabled"] = false;





$tdataUSR_REPORTING[".listGridLayout"] = 3;


$tdataUSR_REPORTING[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataUSR_REPORTING[".pageSize"] = 20;

$tdataUSR_REPORTING[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUSR_REPORTING[".strOrderBy"] = $tstrOrderBy;

$tdataUSR_REPORTING[".orderindexes"] = array();

$tdataUSR_REPORTING[".sqlHead"] = "SELECT USR_UID,  	TAS_UID,  	PRO_UID,  	`MONTH`,  	`YEAR`,  	TOTAL_QUEUE_TIME_BY_TASK,  	TOTAL_TIME_BY_TASK,  	TOTAL_CASES_IN,  	TOTAL_CASES_OUT,  	USER_HOUR_COST,  	AVG_TIME,  	SDV_TIME,  	CONFIGURED_TASK_TIME,  	TOTAL_CASES_OVERDUE,  	TOTAL_CASES_ON_TIME,  	PRO_COST,  	PRO_UNIT_COST";
$tdataUSR_REPORTING[".sqlFrom"] = "FROM USR_REPORTING";
$tdataUSR_REPORTING[".sqlWhereExpr"] = "";
$tdataUSR_REPORTING[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUSR_REPORTING[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUSR_REPORTING[".arrGroupsPerPage"] = $arrGPP;

$tdataUSR_REPORTING[".highlightSearchResults"] = true;

$tableKeysUSR_REPORTING = array();
$tableKeysUSR_REPORTING[] = "USR_UID";
$tableKeysUSR_REPORTING[] = "TAS_UID";
$tableKeysUSR_REPORTING[] = "MONTH";
$tableKeysUSR_REPORTING[] = "YEAR";
$tdataUSR_REPORTING[".Keys"] = $tableKeysUSR_REPORTING;

$tdataUSR_REPORTING[".listFields"] = array();
$tdataUSR_REPORTING[".listFields"][] = "USR_UID";
$tdataUSR_REPORTING[".listFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".listFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".listFields"][] = "MONTH";
$tdataUSR_REPORTING[".listFields"][] = "YEAR";
$tdataUSR_REPORTING[".listFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".listFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".listFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".listFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".listFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".listFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".listFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".listFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".listFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".listFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".listFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".listFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".hideMobileList"] = array();


$tdataUSR_REPORTING[".viewFields"] = array();
$tdataUSR_REPORTING[".viewFields"][] = "USR_UID";
$tdataUSR_REPORTING[".viewFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".viewFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".viewFields"][] = "MONTH";
$tdataUSR_REPORTING[".viewFields"][] = "YEAR";
$tdataUSR_REPORTING[".viewFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".viewFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".viewFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".viewFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".viewFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".viewFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".viewFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".viewFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".viewFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".viewFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".viewFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".viewFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".addFields"] = array();
$tdataUSR_REPORTING[".addFields"][] = "USR_UID";
$tdataUSR_REPORTING[".addFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".addFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".addFields"][] = "MONTH";
$tdataUSR_REPORTING[".addFields"][] = "YEAR";
$tdataUSR_REPORTING[".addFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".addFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".addFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".addFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".addFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".addFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".addFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".addFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".addFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".addFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".addFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".addFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".masterListFields"] = array();
$tdataUSR_REPORTING[".masterListFields"][] = "USR_UID";
$tdataUSR_REPORTING[".masterListFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".masterListFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".masterListFields"][] = "MONTH";
$tdataUSR_REPORTING[".masterListFields"][] = "YEAR";
$tdataUSR_REPORTING[".masterListFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".masterListFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".masterListFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".masterListFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".masterListFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".masterListFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".masterListFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".masterListFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".masterListFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".masterListFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".masterListFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".masterListFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".inlineAddFields"] = array();
$tdataUSR_REPORTING[".inlineAddFields"][] = "USR_UID";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".inlineAddFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".inlineAddFields"][] = "MONTH";
$tdataUSR_REPORTING[".inlineAddFields"][] = "YEAR";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".inlineAddFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".inlineAddFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".inlineAddFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".inlineAddFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".inlineAddFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".inlineAddFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".editFields"] = array();
$tdataUSR_REPORTING[".editFields"][] = "USR_UID";
$tdataUSR_REPORTING[".editFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".editFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".editFields"][] = "MONTH";
$tdataUSR_REPORTING[".editFields"][] = "YEAR";
$tdataUSR_REPORTING[".editFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".editFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".editFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".editFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".editFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".editFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".editFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".editFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".editFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".editFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".editFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".editFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".inlineEditFields"] = array();
$tdataUSR_REPORTING[".inlineEditFields"][] = "USR_UID";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".inlineEditFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".inlineEditFields"][] = "MONTH";
$tdataUSR_REPORTING[".inlineEditFields"][] = "YEAR";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".inlineEditFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".inlineEditFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".inlineEditFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".inlineEditFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".inlineEditFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".inlineEditFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".updateSelectedFields"] = array();
$tdataUSR_REPORTING[".updateSelectedFields"][] = "USR_UID";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "MONTH";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "YEAR";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".updateSelectedFields"][] = "PRO_UNIT_COST";


$tdataUSR_REPORTING[".exportFields"] = array();
$tdataUSR_REPORTING[".exportFields"][] = "USR_UID";
$tdataUSR_REPORTING[".exportFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".exportFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".exportFields"][] = "MONTH";
$tdataUSR_REPORTING[".exportFields"][] = "YEAR";
$tdataUSR_REPORTING[".exportFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".exportFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".exportFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".exportFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".exportFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".exportFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".exportFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".exportFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".exportFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".exportFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".exportFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".exportFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".importFields"] = array();
$tdataUSR_REPORTING[".importFields"][] = "USR_UID";
$tdataUSR_REPORTING[".importFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".importFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".importFields"][] = "MONTH";
$tdataUSR_REPORTING[".importFields"][] = "YEAR";
$tdataUSR_REPORTING[".importFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".importFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".importFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".importFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".importFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".importFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".importFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".importFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".importFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".importFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".importFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".importFields"][] = "PRO_UNIT_COST";

$tdataUSR_REPORTING[".printFields"] = array();
$tdataUSR_REPORTING[".printFields"][] = "USR_UID";
$tdataUSR_REPORTING[".printFields"][] = "TAS_UID";
$tdataUSR_REPORTING[".printFields"][] = "PRO_UID";
$tdataUSR_REPORTING[".printFields"][] = "MONTH";
$tdataUSR_REPORTING[".printFields"][] = "YEAR";
$tdataUSR_REPORTING[".printFields"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$tdataUSR_REPORTING[".printFields"][] = "TOTAL_TIME_BY_TASK";
$tdataUSR_REPORTING[".printFields"][] = "TOTAL_CASES_IN";
$tdataUSR_REPORTING[".printFields"][] = "TOTAL_CASES_OUT";
$tdataUSR_REPORTING[".printFields"][] = "USER_HOUR_COST";
$tdataUSR_REPORTING[".printFields"][] = "AVG_TIME";
$tdataUSR_REPORTING[".printFields"][] = "SDV_TIME";
$tdataUSR_REPORTING[".printFields"][] = "CONFIGURED_TASK_TIME";
$tdataUSR_REPORTING[".printFields"][] = "TOTAL_CASES_OVERDUE";
$tdataUSR_REPORTING[".printFields"][] = "TOTAL_CASES_ON_TIME";
$tdataUSR_REPORTING[".printFields"][] = "PRO_COST";
$tdataUSR_REPORTING[".printFields"][] = "PRO_UNIT_COST";

//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","USR_UID");
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




	$tdataUSR_REPORTING["USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TAS_UID");
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




	$tdataUSR_REPORTING["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","PRO_UID");
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




	$tdataUSR_REPORTING["PRO_UID"] = $fdata;
//	MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MONTH";
	$fdata["GoodName"] = "MONTH";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","MONTH");
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

		$fdata["strField"] = "MONTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`MONTH`";

	
	
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




	$tdataUSR_REPORTING["MONTH"] = $fdata;
//	YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "YEAR";
	$fdata["GoodName"] = "YEAR";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","YEAR");
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

		$fdata["strField"] = "YEAR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`YEAR`";

	
	
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




	$tdataUSR_REPORTING["YEAR"] = $fdata;
//	TOTAL_QUEUE_TIME_BY_TASK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TOTAL_QUEUE_TIME_BY_TASK";
	$fdata["GoodName"] = "TOTAL_QUEUE_TIME_BY_TASK";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TOTAL_QUEUE_TIME_BY_TASK");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TOTAL_QUEUE_TIME_BY_TASK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_QUEUE_TIME_BY_TASK";

	
	
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




	$tdataUSR_REPORTING["TOTAL_QUEUE_TIME_BY_TASK"] = $fdata;
//	TOTAL_TIME_BY_TASK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOTAL_TIME_BY_TASK";
	$fdata["GoodName"] = "TOTAL_TIME_BY_TASK";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TOTAL_TIME_BY_TASK");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TOTAL_TIME_BY_TASK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_TIME_BY_TASK";

	
	
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




	$tdataUSR_REPORTING["TOTAL_TIME_BY_TASK"] = $fdata;
//	TOTAL_CASES_IN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TOTAL_CASES_IN";
	$fdata["GoodName"] = "TOTAL_CASES_IN";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TOTAL_CASES_IN");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TOTAL_CASES_IN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_CASES_IN";

	
	
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




	$tdataUSR_REPORTING["TOTAL_CASES_IN"] = $fdata;
//	TOTAL_CASES_OUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TOTAL_CASES_OUT";
	$fdata["GoodName"] = "TOTAL_CASES_OUT";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TOTAL_CASES_OUT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TOTAL_CASES_OUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_CASES_OUT";

	
	
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




	$tdataUSR_REPORTING["TOTAL_CASES_OUT"] = $fdata;
//	USER_HOUR_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "USER_HOUR_COST";
	$fdata["GoodName"] = "USER_HOUR_COST";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","USER_HOUR_COST");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "USER_HOUR_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USER_HOUR_COST";

	
	
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




	$tdataUSR_REPORTING["USER_HOUR_COST"] = $fdata;
//	AVG_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AVG_TIME";
	$fdata["GoodName"] = "AVG_TIME";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","AVG_TIME");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "AVG_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG_TIME";

	
	
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




	$tdataUSR_REPORTING["AVG_TIME"] = $fdata;
//	SDV_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SDV_TIME";
	$fdata["GoodName"] = "SDV_TIME";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","SDV_TIME");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "SDV_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDV_TIME";

	
	
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




	$tdataUSR_REPORTING["SDV_TIME"] = $fdata;
//	CONFIGURED_TASK_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CONFIGURED_TASK_TIME";
	$fdata["GoodName"] = "CONFIGURED_TASK_TIME";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","CONFIGURED_TASK_TIME");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "CONFIGURED_TASK_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONFIGURED_TASK_TIME";

	
	
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




	$tdataUSR_REPORTING["CONFIGURED_TASK_TIME"] = $fdata;
//	TOTAL_CASES_OVERDUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TOTAL_CASES_OVERDUE";
	$fdata["GoodName"] = "TOTAL_CASES_OVERDUE";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TOTAL_CASES_OVERDUE");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TOTAL_CASES_OVERDUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_CASES_OVERDUE";

	
	
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




	$tdataUSR_REPORTING["TOTAL_CASES_OVERDUE"] = $fdata;
//	TOTAL_CASES_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "TOTAL_CASES_ON_TIME";
	$fdata["GoodName"] = "TOTAL_CASES_ON_TIME";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","TOTAL_CASES_ON_TIME");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "TOTAL_CASES_ON_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_CASES_ON_TIME";

	
	
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




	$tdataUSR_REPORTING["TOTAL_CASES_ON_TIME"] = $fdata;
//	PRO_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PRO_COST";
	$fdata["GoodName"] = "PRO_COST";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","PRO_COST");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "PRO_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_COST";

	
	
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




	$tdataUSR_REPORTING["PRO_COST"] = $fdata;
//	PRO_UNIT_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PRO_UNIT_COST";
	$fdata["GoodName"] = "PRO_UNIT_COST";
	$fdata["ownerTable"] = "USR_REPORTING";
	$fdata["Label"] = GetFieldLabel("USR_REPORTING","PRO_UNIT_COST");
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

		$fdata["strField"] = "PRO_UNIT_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UNIT_COST";

	
	
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




	$tdataUSR_REPORTING["PRO_UNIT_COST"] = $fdata;


$tables_data["USR_REPORTING"]=&$tdataUSR_REPORTING;
$field_labels["USR_REPORTING"] = &$fieldLabelsUSR_REPORTING;
$fieldToolTips["USR_REPORTING"] = &$fieldToolTipsUSR_REPORTING;
$placeHolders["USR_REPORTING"] = &$placeHoldersUSR_REPORTING;
$page_titles["USR_REPORTING"] = &$pageTitlesUSR_REPORTING;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["USR_REPORTING"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["USR_REPORTING"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_USR_REPORTING()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USR_UID,  	TAS_UID,  	PRO_UID,  	`MONTH`,  	`YEAR`,  	TOTAL_QUEUE_TIME_BY_TASK,  	TOTAL_TIME_BY_TASK,  	TOTAL_CASES_IN,  	TOTAL_CASES_OUT,  	USER_HOUR_COST,  	AVG_TIME,  	SDV_TIME,  	CONFIGURED_TASK_TIME,  	TOTAL_CASES_OVERDUE,  	TOTAL_CASES_ON_TIME,  	PRO_COST,  	PRO_UNIT_COST";
$proto0["m_strFrom"] = "FROM USR_REPORTING";
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
	"m_strName" => "USR_UID",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto6["m_sql"] = "USR_UID";
$proto6["m_srcTableName"] = "USR_REPORTING";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto8["m_sql"] = "TAS_UID";
$proto8["m_srcTableName"] = "USR_REPORTING";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "USR_REPORTING";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto12["m_sql"] = "`MONTH`";
$proto12["m_srcTableName"] = "USR_REPORTING";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "YEAR",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto14["m_sql"] = "`YEAR`";
$proto14["m_srcTableName"] = "USR_REPORTING";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_QUEUE_TIME_BY_TASK",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto16["m_sql"] = "TOTAL_QUEUE_TIME_BY_TASK";
$proto16["m_srcTableName"] = "USR_REPORTING";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_TIME_BY_TASK",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto18["m_sql"] = "TOTAL_TIME_BY_TASK";
$proto18["m_srcTableName"] = "USR_REPORTING";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_IN",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto20["m_sql"] = "TOTAL_CASES_IN";
$proto20["m_srcTableName"] = "USR_REPORTING";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_OUT",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto22["m_sql"] = "TOTAL_CASES_OUT";
$proto22["m_srcTableName"] = "USR_REPORTING";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_HOUR_COST",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto24["m_sql"] = "USER_HOUR_COST";
$proto24["m_srcTableName"] = "USR_REPORTING";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AVG_TIME",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto26["m_sql"] = "AVG_TIME";
$proto26["m_srcTableName"] = "USR_REPORTING";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SDV_TIME",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto28["m_sql"] = "SDV_TIME";
$proto28["m_srcTableName"] = "USR_REPORTING";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CONFIGURED_TASK_TIME",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto30["m_sql"] = "CONFIGURED_TASK_TIME";
$proto30["m_srcTableName"] = "USR_REPORTING";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_OVERDUE",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto32["m_sql"] = "TOTAL_CASES_OVERDUE";
$proto32["m_srcTableName"] = "USR_REPORTING";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_ON_TIME",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto34["m_sql"] = "TOTAL_CASES_ON_TIME";
$proto34["m_srcTableName"] = "USR_REPORTING";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_COST",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto36["m_sql"] = "PRO_COST";
$proto36["m_srcTableName"] = "USR_REPORTING";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UNIT_COST",
	"m_strTable" => "USR_REPORTING",
	"m_srcTableName" => "USR_REPORTING"
));

$proto38["m_sql"] = "PRO_UNIT_COST";
$proto38["m_srcTableName"] = "USR_REPORTING";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "USR_REPORTING";
$proto41["m_srcTableName"] = "USR_REPORTING";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "USR_UID";
$proto41["m_columns"][] = "TAS_UID";
$proto41["m_columns"][] = "PRO_UID";
$proto41["m_columns"][] = "MONTH";
$proto41["m_columns"][] = "YEAR";
$proto41["m_columns"][] = "TOTAL_QUEUE_TIME_BY_TASK";
$proto41["m_columns"][] = "TOTAL_TIME_BY_TASK";
$proto41["m_columns"][] = "TOTAL_CASES_IN";
$proto41["m_columns"][] = "TOTAL_CASES_OUT";
$proto41["m_columns"][] = "USER_HOUR_COST";
$proto41["m_columns"][] = "AVG_TIME";
$proto41["m_columns"][] = "SDV_TIME";
$proto41["m_columns"][] = "CONFIGURED_TASK_TIME";
$proto41["m_columns"][] = "TOTAL_CASES_OVERDUE";
$proto41["m_columns"][] = "TOTAL_CASES_ON_TIME";
$proto41["m_columns"][] = "PRO_COST";
$proto41["m_columns"][] = "PRO_UNIT_COST";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "USR_REPORTING";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "USR_REPORTING";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="USR_REPORTING";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_USR_REPORTING = createSqlQuery_USR_REPORTING();


	
						;

																	

$tdataUSR_REPORTING[".sqlquery"] = $queryData_USR_REPORTING;

$tableEvents["USR_REPORTING"] = new eventsBase;
$tdataUSR_REPORTING[".hasEvents"] = false;

?>
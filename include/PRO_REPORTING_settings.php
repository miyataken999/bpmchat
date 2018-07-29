<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPRO_REPORTING = array();
	$tdataPRO_REPORTING[".truncateText"] = true;
	$tdataPRO_REPORTING[".NumberOfChars"] = 20;
	$tdataPRO_REPORTING[".ShortName"] = "PRO_REPORTING";
	$tdataPRO_REPORTING[".OwnerID"] = "";
	$tdataPRO_REPORTING[".OriginalTable"] = "PRO_REPORTING";

//	field labels
$fieldLabelsPRO_REPORTING = array();
$fieldToolTipsPRO_REPORTING = array();
$pageTitlesPRO_REPORTING = array();
$placeHoldersPRO_REPORTING = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPRO_REPORTING["Japanese"] = array();
	$fieldToolTipsPRO_REPORTING["Japanese"] = array();
	$placeHoldersPRO_REPORTING["Japanese"] = array();
	$pageTitlesPRO_REPORTING["Japanese"] = array();
	$fieldLabelsPRO_REPORTING["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPRO_REPORTING["Japanese"]["PRO_UID"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["PRO_UID"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["MONTH"] = "月";
	$fieldToolTipsPRO_REPORTING["Japanese"]["MONTH"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["MONTH"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["YEAR"] = "年";
	$fieldToolTipsPRO_REPORTING["Japanese"]["YEAR"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["YEAR"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["AVG_TIME"] = "平均時間";
	$fieldToolTipsPRO_REPORTING["Japanese"]["AVG_TIME"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["AVG_TIME"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["SDV_TIME"] = "SDVの時間";
	$fieldToolTipsPRO_REPORTING["Japanese"]["SDV_TIME"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["SDV_TIME"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["TOTAL_CASES_IN"] = "の総例";
	$fieldToolTipsPRO_REPORTING["Japanese"]["TOTAL_CASES_IN"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["TOTAL_CASES_IN"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["TOTAL_CASES_OUT"] = "アウトの合計例";
	$fieldToolTipsPRO_REPORTING["Japanese"]["TOTAL_CASES_OUT"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["TOTAL_CASES_OUT"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["CONFIGURED_PROCESS_TIME"] = "構成された処理時間";
	$fieldToolTipsPRO_REPORTING["Japanese"]["CONFIGURED_PROCESS_TIME"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["CONFIGURED_PROCESS_TIME"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["CONFIGURED_PROCESS_COST"] = "構成されたプロセスコスト";
	$fieldToolTipsPRO_REPORTING["Japanese"]["CONFIGURED_PROCESS_COST"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["CONFIGURED_PROCESS_COST"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["TOTAL_CASES_OPEN"] = "総症例オープン";
	$fieldToolTipsPRO_REPORTING["Japanese"]["TOTAL_CASES_OPEN"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["TOTAL_CASES_OPEN"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["TOTAL_CASES_OVERDUE"] = "延滞合計例";
	$fieldToolTipsPRO_REPORTING["Japanese"]["TOTAL_CASES_OVERDUE"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["TOTAL_CASES_OVERDUE"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["TOTAL_CASES_ON_TIME"] = "時間の合計例";
	$fieldToolTipsPRO_REPORTING["Japanese"]["TOTAL_CASES_ON_TIME"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["TOTAL_CASES_ON_TIME"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["PRO_COST"] = "プロコスト";
	$fieldToolTipsPRO_REPORTING["Japanese"]["PRO_COST"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["PRO_COST"] = "";
	$fieldLabelsPRO_REPORTING["Japanese"]["PRO_UNIT_COST"] = "プロ単価";
	$fieldToolTipsPRO_REPORTING["Japanese"]["PRO_UNIT_COST"] = "";
	$placeHoldersPRO_REPORTING["Japanese"]["PRO_UNIT_COST"] = "";
	if (count($fieldToolTipsPRO_REPORTING["Japanese"]))
		$tdataPRO_REPORTING[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPRO_REPORTING["English"] = array();
	$fieldToolTipsPRO_REPORTING["English"] = array();
	$placeHoldersPRO_REPORTING["English"] = array();
	$pageTitlesPRO_REPORTING["English"] = array();
	$fieldLabelsPRO_REPORTING["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPRO_REPORTING["English"]["PRO_UID"] = "";
	$placeHoldersPRO_REPORTING["English"]["PRO_UID"] = "";
	$fieldLabelsPRO_REPORTING["English"]["MONTH"] = "月";
	$fieldToolTipsPRO_REPORTING["English"]["MONTH"] = "";
	$placeHoldersPRO_REPORTING["English"]["MONTH"] = "";
	$fieldLabelsPRO_REPORTING["English"]["YEAR"] = "年";
	$fieldToolTipsPRO_REPORTING["English"]["YEAR"] = "";
	$placeHoldersPRO_REPORTING["English"]["YEAR"] = "";
	$fieldLabelsPRO_REPORTING["English"]["AVG_TIME"] = "平均時間";
	$fieldToolTipsPRO_REPORTING["English"]["AVG_TIME"] = "";
	$placeHoldersPRO_REPORTING["English"]["AVG_TIME"] = "";
	$fieldLabelsPRO_REPORTING["English"]["SDV_TIME"] = "SDVの時間";
	$fieldToolTipsPRO_REPORTING["English"]["SDV_TIME"] = "";
	$placeHoldersPRO_REPORTING["English"]["SDV_TIME"] = "";
	$fieldLabelsPRO_REPORTING["English"]["TOTAL_CASES_IN"] = "の総例";
	$fieldToolTipsPRO_REPORTING["English"]["TOTAL_CASES_IN"] = "";
	$placeHoldersPRO_REPORTING["English"]["TOTAL_CASES_IN"] = "";
	$fieldLabelsPRO_REPORTING["English"]["TOTAL_CASES_OUT"] = "アウトの合計例";
	$fieldToolTipsPRO_REPORTING["English"]["TOTAL_CASES_OUT"] = "";
	$placeHoldersPRO_REPORTING["English"]["TOTAL_CASES_OUT"] = "";
	$fieldLabelsPRO_REPORTING["English"]["CONFIGURED_PROCESS_TIME"] = "構成された処理時間";
	$fieldToolTipsPRO_REPORTING["English"]["CONFIGURED_PROCESS_TIME"] = "";
	$placeHoldersPRO_REPORTING["English"]["CONFIGURED_PROCESS_TIME"] = "";
	$fieldLabelsPRO_REPORTING["English"]["CONFIGURED_PROCESS_COST"] = "構成されたプロセスコスト";
	$fieldToolTipsPRO_REPORTING["English"]["CONFIGURED_PROCESS_COST"] = "";
	$placeHoldersPRO_REPORTING["English"]["CONFIGURED_PROCESS_COST"] = "";
	$fieldLabelsPRO_REPORTING["English"]["TOTAL_CASES_OPEN"] = "総症例オープン";
	$fieldToolTipsPRO_REPORTING["English"]["TOTAL_CASES_OPEN"] = "";
	$placeHoldersPRO_REPORTING["English"]["TOTAL_CASES_OPEN"] = "";
	$fieldLabelsPRO_REPORTING["English"]["TOTAL_CASES_OVERDUE"] = "延滞合計例";
	$fieldToolTipsPRO_REPORTING["English"]["TOTAL_CASES_OVERDUE"] = "";
	$placeHoldersPRO_REPORTING["English"]["TOTAL_CASES_OVERDUE"] = "";
	$fieldLabelsPRO_REPORTING["English"]["TOTAL_CASES_ON_TIME"] = "時間の合計例";
	$fieldToolTipsPRO_REPORTING["English"]["TOTAL_CASES_ON_TIME"] = "";
	$placeHoldersPRO_REPORTING["English"]["TOTAL_CASES_ON_TIME"] = "";
	$fieldLabelsPRO_REPORTING["English"]["PRO_COST"] = "プロコスト";
	$fieldToolTipsPRO_REPORTING["English"]["PRO_COST"] = "";
	$placeHoldersPRO_REPORTING["English"]["PRO_COST"] = "";
	$fieldLabelsPRO_REPORTING["English"]["PRO_UNIT_COST"] = "プロ単価";
	$fieldToolTipsPRO_REPORTING["English"]["PRO_UNIT_COST"] = "";
	$placeHoldersPRO_REPORTING["English"]["PRO_UNIT_COST"] = "";
	if (count($fieldToolTipsPRO_REPORTING["English"]))
		$tdataPRO_REPORTING[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPRO_REPORTING[""] = array();
	$fieldToolTipsPRO_REPORTING[""] = array();
	$placeHoldersPRO_REPORTING[""] = array();
	$pageTitlesPRO_REPORTING[""] = array();
	if (count($fieldToolTipsPRO_REPORTING[""]))
		$tdataPRO_REPORTING[".isUseToolTips"] = true;
}


	$tdataPRO_REPORTING[".NCSearch"] = true;



$tdataPRO_REPORTING[".shortTableName"] = "PRO_REPORTING";
$tdataPRO_REPORTING[".nSecOptions"] = 0;
$tdataPRO_REPORTING[".recsPerRowPrint"] = 1;
$tdataPRO_REPORTING[".mainTableOwnerID"] = "";
$tdataPRO_REPORTING[".moveNext"] = 0;
$tdataPRO_REPORTING[".entityType"] = 0;

$tdataPRO_REPORTING[".strOriginalTableName"] = "PRO_REPORTING";

	



$tdataPRO_REPORTING[".showAddInPopup"] = false;

$tdataPRO_REPORTING[".showEditInPopup"] = false;

$tdataPRO_REPORTING[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPRO_REPORTING[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPRO_REPORTING[".fieldsForRegister"] = array();
	
$tdataPRO_REPORTING[".listAjax"] = false;

	$tdataPRO_REPORTING[".audit"] = true;

	$tdataPRO_REPORTING[".locking"] = false;

$tdataPRO_REPORTING[".edit"] = true;
$tdataPRO_REPORTING[".afterEditAction"] = 1;
$tdataPRO_REPORTING[".closePopupAfterEdit"] = 1;
$tdataPRO_REPORTING[".afterEditActionDetTable"] = "";

$tdataPRO_REPORTING[".add"] = true;
$tdataPRO_REPORTING[".afterAddAction"] = 1;
$tdataPRO_REPORTING[".closePopupAfterAdd"] = 1;
$tdataPRO_REPORTING[".afterAddActionDetTable"] = "";

$tdataPRO_REPORTING[".list"] = true;

$tdataPRO_REPORTING[".inlineEdit"] = true;


$tdataPRO_REPORTING[".reorderRecordsByHeader"] = true;
$tdataPRO_REPORTING[".createSortByDropdown"] = true;
$tdataPRO_REPORTING[".strSortControlSettingsJSON"] = "";



$tdataPRO_REPORTING[".inlineAdd"] = true;
$tdataPRO_REPORTING[".view"] = true;

$tdataPRO_REPORTING[".import"] = true;

$tdataPRO_REPORTING[".exportTo"] = true;

$tdataPRO_REPORTING[".printFriendly"] = true;

$tdataPRO_REPORTING[".delete"] = true;

$tdataPRO_REPORTING[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPRO_REPORTING[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPRO_REPORTING[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPRO_REPORTING[".searchSaving"] = false;
//

$tdataPRO_REPORTING[".showSearchPanel"] = true;
		$tdataPRO_REPORTING[".flexibleSearch"] = true;

$tdataPRO_REPORTING[".isUseAjaxSuggest"] = true;

$tdataPRO_REPORTING[".rowHighlite"] = true;



				

$tdataPRO_REPORTING[".ajaxCodeSnippetAdded"] = false;

$tdataPRO_REPORTING[".buttonsAdded"] = false;

$tdataPRO_REPORTING[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPRO_REPORTING[".isUseTimeForSearch"] = false;





$tdataPRO_REPORTING[".allSearchFields"] = array();
$tdataPRO_REPORTING[".filterFields"] = array();
$tdataPRO_REPORTING[".requiredSearchFields"] = array();

$tdataPRO_REPORTING[".allSearchFields"][] = "PRO_UID";
	$tdataPRO_REPORTING[".allSearchFields"][] = "MONTH";
	$tdataPRO_REPORTING[".allSearchFields"][] = "YEAR";
	$tdataPRO_REPORTING[".allSearchFields"][] = "AVG_TIME";
	$tdataPRO_REPORTING[".allSearchFields"][] = "SDV_TIME";
	$tdataPRO_REPORTING[".allSearchFields"][] = "TOTAL_CASES_IN";
	$tdataPRO_REPORTING[".allSearchFields"][] = "TOTAL_CASES_OUT";
	$tdataPRO_REPORTING[".allSearchFields"][] = "CONFIGURED_PROCESS_TIME";
	$tdataPRO_REPORTING[".allSearchFields"][] = "CONFIGURED_PROCESS_COST";
	$tdataPRO_REPORTING[".allSearchFields"][] = "TOTAL_CASES_OPEN";
	$tdataPRO_REPORTING[".allSearchFields"][] = "TOTAL_CASES_OVERDUE";
	$tdataPRO_REPORTING[".allSearchFields"][] = "TOTAL_CASES_ON_TIME";
	$tdataPRO_REPORTING[".allSearchFields"][] = "PRO_COST";
	$tdataPRO_REPORTING[".allSearchFields"][] = "PRO_UNIT_COST";
	

$tdataPRO_REPORTING[".googleLikeFields"] = array();
$tdataPRO_REPORTING[".googleLikeFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".googleLikeFields"][] = "MONTH";
$tdataPRO_REPORTING[".googleLikeFields"][] = "YEAR";
$tdataPRO_REPORTING[".googleLikeFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".googleLikeFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".googleLikeFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".googleLikeFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".googleLikeFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".googleLikeFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".googleLikeFields"][] = "PRO_UNIT_COST";


$tdataPRO_REPORTING[".advSearchFields"] = array();
$tdataPRO_REPORTING[".advSearchFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".advSearchFields"][] = "MONTH";
$tdataPRO_REPORTING[".advSearchFields"][] = "YEAR";
$tdataPRO_REPORTING[".advSearchFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".advSearchFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".advSearchFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".advSearchFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".advSearchFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".advSearchFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".advSearchFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".advSearchFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".advSearchFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".advSearchFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".advSearchFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".tableType"] = "list";

$tdataPRO_REPORTING[".printerPageOrientation"] = 0;
$tdataPRO_REPORTING[".nPrinterPageScale"] = 100;

$tdataPRO_REPORTING[".nPrinterSplitRecords"] = 40;

$tdataPRO_REPORTING[".nPrinterPDFSplitRecords"] = 40;



$tdataPRO_REPORTING[".geocodingEnabled"] = false;





$tdataPRO_REPORTING[".listGridLayout"] = 3;


$tdataPRO_REPORTING[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPRO_REPORTING[".pageSize"] = 20;

$tdataPRO_REPORTING[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPRO_REPORTING[".strOrderBy"] = $tstrOrderBy;

$tdataPRO_REPORTING[".orderindexes"] = array();

$tdataPRO_REPORTING[".sqlHead"] = "SELECT PRO_UID,  	`MONTH`,  	`YEAR`,  	AVG_TIME,  	SDV_TIME,  	TOTAL_CASES_IN,  	TOTAL_CASES_OUT,  	CONFIGURED_PROCESS_TIME,  	CONFIGURED_PROCESS_COST,  	TOTAL_CASES_OPEN,  	TOTAL_CASES_OVERDUE,  	TOTAL_CASES_ON_TIME,  	PRO_COST,  	PRO_UNIT_COST";
$tdataPRO_REPORTING[".sqlFrom"] = "FROM PRO_REPORTING";
$tdataPRO_REPORTING[".sqlWhereExpr"] = "";
$tdataPRO_REPORTING[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPRO_REPORTING[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPRO_REPORTING[".arrGroupsPerPage"] = $arrGPP;

$tdataPRO_REPORTING[".highlightSearchResults"] = true;

$tableKeysPRO_REPORTING = array();
$tableKeysPRO_REPORTING[] = "PRO_UID";
$tableKeysPRO_REPORTING[] = "MONTH";
$tableKeysPRO_REPORTING[] = "YEAR";
$tdataPRO_REPORTING[".Keys"] = $tableKeysPRO_REPORTING;

$tdataPRO_REPORTING[".listFields"] = array();
$tdataPRO_REPORTING[".listFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".listFields"][] = "MONTH";
$tdataPRO_REPORTING[".listFields"][] = "YEAR";
$tdataPRO_REPORTING[".listFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".listFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".listFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".listFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".listFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".listFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".listFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".listFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".listFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".listFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".listFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".hideMobileList"] = array();


$tdataPRO_REPORTING[".viewFields"] = array();
$tdataPRO_REPORTING[".viewFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".viewFields"][] = "MONTH";
$tdataPRO_REPORTING[".viewFields"][] = "YEAR";
$tdataPRO_REPORTING[".viewFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".viewFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".viewFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".viewFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".viewFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".viewFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".viewFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".viewFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".viewFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".viewFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".viewFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".addFields"] = array();
$tdataPRO_REPORTING[".addFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".addFields"][] = "MONTH";
$tdataPRO_REPORTING[".addFields"][] = "YEAR";
$tdataPRO_REPORTING[".addFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".addFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".addFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".addFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".addFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".addFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".addFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".addFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".addFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".addFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".addFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".masterListFields"] = array();
$tdataPRO_REPORTING[".masterListFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".masterListFields"][] = "MONTH";
$tdataPRO_REPORTING[".masterListFields"][] = "YEAR";
$tdataPRO_REPORTING[".masterListFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".masterListFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".masterListFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".masterListFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".masterListFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".masterListFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".masterListFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".masterListFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".masterListFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".masterListFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".masterListFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".inlineAddFields"] = array();
$tdataPRO_REPORTING[".inlineAddFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".inlineAddFields"][] = "MONTH";
$tdataPRO_REPORTING[".inlineAddFields"][] = "YEAR";
$tdataPRO_REPORTING[".inlineAddFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".inlineAddFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".inlineAddFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".inlineAddFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".inlineAddFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".inlineAddFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".inlineAddFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".editFields"] = array();
$tdataPRO_REPORTING[".editFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".editFields"][] = "MONTH";
$tdataPRO_REPORTING[".editFields"][] = "YEAR";
$tdataPRO_REPORTING[".editFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".editFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".editFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".editFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".editFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".editFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".editFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".editFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".editFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".editFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".editFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".inlineEditFields"] = array();
$tdataPRO_REPORTING[".inlineEditFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".inlineEditFields"][] = "MONTH";
$tdataPRO_REPORTING[".inlineEditFields"][] = "YEAR";
$tdataPRO_REPORTING[".inlineEditFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".inlineEditFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".inlineEditFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".inlineEditFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".inlineEditFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".inlineEditFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".inlineEditFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".updateSelectedFields"] = array();
$tdataPRO_REPORTING[".updateSelectedFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "MONTH";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "YEAR";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".updateSelectedFields"][] = "PRO_UNIT_COST";


$tdataPRO_REPORTING[".exportFields"] = array();
$tdataPRO_REPORTING[".exportFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".exportFields"][] = "MONTH";
$tdataPRO_REPORTING[".exportFields"][] = "YEAR";
$tdataPRO_REPORTING[".exportFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".exportFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".exportFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".exportFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".exportFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".exportFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".exportFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".exportFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".exportFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".exportFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".exportFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".importFields"] = array();
$tdataPRO_REPORTING[".importFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".importFields"][] = "MONTH";
$tdataPRO_REPORTING[".importFields"][] = "YEAR";
$tdataPRO_REPORTING[".importFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".importFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".importFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".importFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".importFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".importFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".importFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".importFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".importFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".importFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".importFields"][] = "PRO_UNIT_COST";

$tdataPRO_REPORTING[".printFields"] = array();
$tdataPRO_REPORTING[".printFields"][] = "PRO_UID";
$tdataPRO_REPORTING[".printFields"][] = "MONTH";
$tdataPRO_REPORTING[".printFields"][] = "YEAR";
$tdataPRO_REPORTING[".printFields"][] = "AVG_TIME";
$tdataPRO_REPORTING[".printFields"][] = "SDV_TIME";
$tdataPRO_REPORTING[".printFields"][] = "TOTAL_CASES_IN";
$tdataPRO_REPORTING[".printFields"][] = "TOTAL_CASES_OUT";
$tdataPRO_REPORTING[".printFields"][] = "CONFIGURED_PROCESS_TIME";
$tdataPRO_REPORTING[".printFields"][] = "CONFIGURED_PROCESS_COST";
$tdataPRO_REPORTING[".printFields"][] = "TOTAL_CASES_OPEN";
$tdataPRO_REPORTING[".printFields"][] = "TOTAL_CASES_OVERDUE";
$tdataPRO_REPORTING[".printFields"][] = "TOTAL_CASES_ON_TIME";
$tdataPRO_REPORTING[".printFields"][] = "PRO_COST";
$tdataPRO_REPORTING[".printFields"][] = "PRO_UNIT_COST";

//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","PRO_UID");
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




	$tdataPRO_REPORTING["PRO_UID"] = $fdata;
//	MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MONTH";
	$fdata["GoodName"] = "MONTH";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","MONTH");
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




	$tdataPRO_REPORTING["MONTH"] = $fdata;
//	YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "YEAR";
	$fdata["GoodName"] = "YEAR";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","YEAR");
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




	$tdataPRO_REPORTING["YEAR"] = $fdata;
//	AVG_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AVG_TIME";
	$fdata["GoodName"] = "AVG_TIME";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","AVG_TIME");
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




	$tdataPRO_REPORTING["AVG_TIME"] = $fdata;
//	SDV_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDV_TIME";
	$fdata["GoodName"] = "SDV_TIME";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","SDV_TIME");
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




	$tdataPRO_REPORTING["SDV_TIME"] = $fdata;
//	TOTAL_CASES_IN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TOTAL_CASES_IN";
	$fdata["GoodName"] = "TOTAL_CASES_IN";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","TOTAL_CASES_IN");
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




	$tdataPRO_REPORTING["TOTAL_CASES_IN"] = $fdata;
//	TOTAL_CASES_OUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOTAL_CASES_OUT";
	$fdata["GoodName"] = "TOTAL_CASES_OUT";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","TOTAL_CASES_OUT");
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




	$tdataPRO_REPORTING["TOTAL_CASES_OUT"] = $fdata;
//	CONFIGURED_PROCESS_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CONFIGURED_PROCESS_TIME";
	$fdata["GoodName"] = "CONFIGURED_PROCESS_TIME";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","CONFIGURED_PROCESS_TIME");
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

		$fdata["strField"] = "CONFIGURED_PROCESS_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONFIGURED_PROCESS_TIME";

	
	
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




	$tdataPRO_REPORTING["CONFIGURED_PROCESS_TIME"] = $fdata;
//	CONFIGURED_PROCESS_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CONFIGURED_PROCESS_COST";
	$fdata["GoodName"] = "CONFIGURED_PROCESS_COST";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","CONFIGURED_PROCESS_COST");
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

		$fdata["strField"] = "CONFIGURED_PROCESS_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONFIGURED_PROCESS_COST";

	
	
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




	$tdataPRO_REPORTING["CONFIGURED_PROCESS_COST"] = $fdata;
//	TOTAL_CASES_OPEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TOTAL_CASES_OPEN";
	$fdata["GoodName"] = "TOTAL_CASES_OPEN";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","TOTAL_CASES_OPEN");
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

		$fdata["strField"] = "TOTAL_CASES_OPEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTAL_CASES_OPEN";

	
	
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




	$tdataPRO_REPORTING["TOTAL_CASES_OPEN"] = $fdata;
//	TOTAL_CASES_OVERDUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TOTAL_CASES_OVERDUE";
	$fdata["GoodName"] = "TOTAL_CASES_OVERDUE";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","TOTAL_CASES_OVERDUE");
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




	$tdataPRO_REPORTING["TOTAL_CASES_OVERDUE"] = $fdata;
//	TOTAL_CASES_ON_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TOTAL_CASES_ON_TIME";
	$fdata["GoodName"] = "TOTAL_CASES_ON_TIME";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","TOTAL_CASES_ON_TIME");
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




	$tdataPRO_REPORTING["TOTAL_CASES_ON_TIME"] = $fdata;
//	PRO_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PRO_COST";
	$fdata["GoodName"] = "PRO_COST";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","PRO_COST");
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




	$tdataPRO_REPORTING["PRO_COST"] = $fdata;
//	PRO_UNIT_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PRO_UNIT_COST";
	$fdata["GoodName"] = "PRO_UNIT_COST";
	$fdata["ownerTable"] = "PRO_REPORTING";
	$fdata["Label"] = GetFieldLabel("PRO_REPORTING","PRO_UNIT_COST");
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




	$tdataPRO_REPORTING["PRO_UNIT_COST"] = $fdata;


$tables_data["PRO_REPORTING"]=&$tdataPRO_REPORTING;
$field_labels["PRO_REPORTING"] = &$fieldLabelsPRO_REPORTING;
$fieldToolTips["PRO_REPORTING"] = &$fieldToolTipsPRO_REPORTING;
$placeHolders["PRO_REPORTING"] = &$placeHoldersPRO_REPORTING;
$page_titles["PRO_REPORTING"] = &$pageTitlesPRO_REPORTING;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PRO_REPORTING"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PRO_REPORTING"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PRO_REPORTING()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRO_UID,  	`MONTH`,  	`YEAR`,  	AVG_TIME,  	SDV_TIME,  	TOTAL_CASES_IN,  	TOTAL_CASES_OUT,  	CONFIGURED_PROCESS_TIME,  	CONFIGURED_PROCESS_COST,  	TOTAL_CASES_OPEN,  	TOTAL_CASES_OVERDUE,  	TOTAL_CASES_ON_TIME,  	PRO_COST,  	PRO_UNIT_COST";
$proto0["m_strFrom"] = "FROM PRO_REPORTING";
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
	"m_strName" => "PRO_UID",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto6["m_sql"] = "PRO_UID";
$proto6["m_srcTableName"] = "PRO_REPORTING";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto8["m_sql"] = "`MONTH`";
$proto8["m_srcTableName"] = "PRO_REPORTING";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "YEAR",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto10["m_sql"] = "`YEAR`";
$proto10["m_srcTableName"] = "PRO_REPORTING";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AVG_TIME",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto12["m_sql"] = "AVG_TIME";
$proto12["m_srcTableName"] = "PRO_REPORTING";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SDV_TIME",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto14["m_sql"] = "SDV_TIME";
$proto14["m_srcTableName"] = "PRO_REPORTING";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_IN",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto16["m_sql"] = "TOTAL_CASES_IN";
$proto16["m_srcTableName"] = "PRO_REPORTING";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_OUT",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto18["m_sql"] = "TOTAL_CASES_OUT";
$proto18["m_srcTableName"] = "PRO_REPORTING";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CONFIGURED_PROCESS_TIME",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto20["m_sql"] = "CONFIGURED_PROCESS_TIME";
$proto20["m_srcTableName"] = "PRO_REPORTING";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CONFIGURED_PROCESS_COST",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto22["m_sql"] = "CONFIGURED_PROCESS_COST";
$proto22["m_srcTableName"] = "PRO_REPORTING";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_OPEN",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto24["m_sql"] = "TOTAL_CASES_OPEN";
$proto24["m_srcTableName"] = "PRO_REPORTING";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_OVERDUE",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto26["m_sql"] = "TOTAL_CASES_OVERDUE";
$proto26["m_srcTableName"] = "PRO_REPORTING";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_CASES_ON_TIME",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto28["m_sql"] = "TOTAL_CASES_ON_TIME";
$proto28["m_srcTableName"] = "PRO_REPORTING";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_COST",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto30["m_sql"] = "PRO_COST";
$proto30["m_srcTableName"] = "PRO_REPORTING";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UNIT_COST",
	"m_strTable" => "PRO_REPORTING",
	"m_srcTableName" => "PRO_REPORTING"
));

$proto32["m_sql"] = "PRO_UNIT_COST";
$proto32["m_srcTableName"] = "PRO_REPORTING";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "PRO_REPORTING";
$proto35["m_srcTableName"] = "PRO_REPORTING";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "PRO_UID";
$proto35["m_columns"][] = "MONTH";
$proto35["m_columns"][] = "YEAR";
$proto35["m_columns"][] = "AVG_TIME";
$proto35["m_columns"][] = "SDV_TIME";
$proto35["m_columns"][] = "TOTAL_CASES_IN";
$proto35["m_columns"][] = "TOTAL_CASES_OUT";
$proto35["m_columns"][] = "CONFIGURED_PROCESS_TIME";
$proto35["m_columns"][] = "CONFIGURED_PROCESS_COST";
$proto35["m_columns"][] = "TOTAL_CASES_OPEN";
$proto35["m_columns"][] = "TOTAL_CASES_OVERDUE";
$proto35["m_columns"][] = "TOTAL_CASES_ON_TIME";
$proto35["m_columns"][] = "PRO_COST";
$proto35["m_columns"][] = "PRO_UNIT_COST";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "PRO_REPORTING";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "PRO_REPORTING";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PRO_REPORTING";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PRO_REPORTING = createSqlQuery_PRO_REPORTING();


	
						;

														

$tdataPRO_REPORTING[".sqlquery"] = $queryData_PRO_REPORTING;

$tableEvents["PRO_REPORTING"] = new eventsBase;
$tdataPRO_REPORTING[".hasEvents"] = false;

?>
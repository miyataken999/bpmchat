<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLOG_CASES_SCHEDULER = array();
	$tdataLOG_CASES_SCHEDULER[".truncateText"] = true;
	$tdataLOG_CASES_SCHEDULER[".NumberOfChars"] = 20;
	$tdataLOG_CASES_SCHEDULER[".ShortName"] = "LOG_CASES_SCHEDULER";
	$tdataLOG_CASES_SCHEDULER[".OwnerID"] = "";
	$tdataLOG_CASES_SCHEDULER[".OriginalTable"] = "LOG_CASES_SCHEDULER";

//	field labels
$fieldLabelsLOG_CASES_SCHEDULER = array();
$fieldToolTipsLOG_CASES_SCHEDULER = array();
$pageTitlesLOG_CASES_SCHEDULER = array();
$placeHoldersLOG_CASES_SCHEDULER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"] = array();
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"] = array();
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"] = array();
	$pageTitlesLOG_CASES_SCHEDULER["Japanese"] = array();
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["LOG_CASE_UID"] = "ケースのUIDを記録";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["LOG_CASE_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["LOG_CASE_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["PRO_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["PRO_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["TAS_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["TAS_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["USR_NAME"] = "USR名前";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["USR_NAME"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["USR_NAME"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["EXEC_DATE"] = "execの日付";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["EXEC_DATE"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["EXEC_DATE"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["EXEC_HOUR"] = "execの時間";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["EXEC_HOUR"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["EXEC_HOUR"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["RESULT"] = "結果";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["RESULT"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["RESULT"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["SCH_UID"] = "SCHのUID";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["SCH_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["SCH_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["WS_CREATE_CASE_STATUS"] = "WSケースのステータスを作成します";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["WS_CREATE_CASE_STATUS"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["WS_CREATE_CASE_STATUS"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["Japanese"]["WS_ROUTE_CASE_STATUS"] = "WSルートケースステータス";
	$fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]["WS_ROUTE_CASE_STATUS"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["Japanese"]["WS_ROUTE_CASE_STATUS"] = "";
	if (count($fieldToolTipsLOG_CASES_SCHEDULER["Japanese"]))
		$tdataLOG_CASES_SCHEDULER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLOG_CASES_SCHEDULER["English"] = array();
	$fieldToolTipsLOG_CASES_SCHEDULER["English"] = array();
	$placeHoldersLOG_CASES_SCHEDULER["English"] = array();
	$pageTitlesLOG_CASES_SCHEDULER["English"] = array();
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["LOG_CASE_UID"] = "ケースのUIDを記録";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["LOG_CASE_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["LOG_CASE_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["PRO_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["PRO_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["TAS_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["TAS_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["USR_NAME"] = "USR名前";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["USR_NAME"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["USR_NAME"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["EXEC_DATE"] = "execの日付";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["EXEC_DATE"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["EXEC_DATE"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["EXEC_HOUR"] = "execの時間";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["EXEC_HOUR"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["EXEC_HOUR"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["RESULT"] = "結果";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["RESULT"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["RESULT"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["SCH_UID"] = "SCHのUID";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["SCH_UID"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["SCH_UID"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["WS_CREATE_CASE_STATUS"] = "WSケースのステータスを作成します";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["WS_CREATE_CASE_STATUS"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["WS_CREATE_CASE_STATUS"] = "";
	$fieldLabelsLOG_CASES_SCHEDULER["English"]["WS_ROUTE_CASE_STATUS"] = "WSルートケースステータス";
	$fieldToolTipsLOG_CASES_SCHEDULER["English"]["WS_ROUTE_CASE_STATUS"] = "";
	$placeHoldersLOG_CASES_SCHEDULER["English"]["WS_ROUTE_CASE_STATUS"] = "";
	if (count($fieldToolTipsLOG_CASES_SCHEDULER["English"]))
		$tdataLOG_CASES_SCHEDULER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLOG_CASES_SCHEDULER[""] = array();
	$fieldToolTipsLOG_CASES_SCHEDULER[""] = array();
	$placeHoldersLOG_CASES_SCHEDULER[""] = array();
	$pageTitlesLOG_CASES_SCHEDULER[""] = array();
	if (count($fieldToolTipsLOG_CASES_SCHEDULER[""]))
		$tdataLOG_CASES_SCHEDULER[".isUseToolTips"] = true;
}


	$tdataLOG_CASES_SCHEDULER[".NCSearch"] = true;



$tdataLOG_CASES_SCHEDULER[".shortTableName"] = "LOG_CASES_SCHEDULER";
$tdataLOG_CASES_SCHEDULER[".nSecOptions"] = 0;
$tdataLOG_CASES_SCHEDULER[".recsPerRowPrint"] = 1;
$tdataLOG_CASES_SCHEDULER[".mainTableOwnerID"] = "";
$tdataLOG_CASES_SCHEDULER[".moveNext"] = 0;
$tdataLOG_CASES_SCHEDULER[".entityType"] = 0;

$tdataLOG_CASES_SCHEDULER[".strOriginalTableName"] = "LOG_CASES_SCHEDULER";

	



$tdataLOG_CASES_SCHEDULER[".showAddInPopup"] = false;

$tdataLOG_CASES_SCHEDULER[".showEditInPopup"] = false;

$tdataLOG_CASES_SCHEDULER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLOG_CASES_SCHEDULER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLOG_CASES_SCHEDULER[".fieldsForRegister"] = array();
	
$tdataLOG_CASES_SCHEDULER[".listAjax"] = false;

	$tdataLOG_CASES_SCHEDULER[".audit"] = true;

	$tdataLOG_CASES_SCHEDULER[".locking"] = false;

$tdataLOG_CASES_SCHEDULER[".edit"] = true;
$tdataLOG_CASES_SCHEDULER[".afterEditAction"] = 1;
$tdataLOG_CASES_SCHEDULER[".closePopupAfterEdit"] = 1;
$tdataLOG_CASES_SCHEDULER[".afterEditActionDetTable"] = "";

$tdataLOG_CASES_SCHEDULER[".add"] = true;
$tdataLOG_CASES_SCHEDULER[".afterAddAction"] = 1;
$tdataLOG_CASES_SCHEDULER[".closePopupAfterAdd"] = 1;
$tdataLOG_CASES_SCHEDULER[".afterAddActionDetTable"] = "";

$tdataLOG_CASES_SCHEDULER[".list"] = true;

$tdataLOG_CASES_SCHEDULER[".inlineEdit"] = true;


$tdataLOG_CASES_SCHEDULER[".reorderRecordsByHeader"] = true;
$tdataLOG_CASES_SCHEDULER[".createSortByDropdown"] = true;
$tdataLOG_CASES_SCHEDULER[".strSortControlSettingsJSON"] = "";



$tdataLOG_CASES_SCHEDULER[".inlineAdd"] = true;
$tdataLOG_CASES_SCHEDULER[".view"] = true;

$tdataLOG_CASES_SCHEDULER[".import"] = true;

$tdataLOG_CASES_SCHEDULER[".exportTo"] = true;

$tdataLOG_CASES_SCHEDULER[".printFriendly"] = true;

$tdataLOG_CASES_SCHEDULER[".delete"] = true;

$tdataLOG_CASES_SCHEDULER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLOG_CASES_SCHEDULER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLOG_CASES_SCHEDULER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLOG_CASES_SCHEDULER[".searchSaving"] = false;
//

$tdataLOG_CASES_SCHEDULER[".showSearchPanel"] = true;
		$tdataLOG_CASES_SCHEDULER[".flexibleSearch"] = true;

$tdataLOG_CASES_SCHEDULER[".isUseAjaxSuggest"] = true;

$tdataLOG_CASES_SCHEDULER[".rowHighlite"] = true;



				

$tdataLOG_CASES_SCHEDULER[".ajaxCodeSnippetAdded"] = false;

$tdataLOG_CASES_SCHEDULER[".buttonsAdded"] = false;

$tdataLOG_CASES_SCHEDULER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLOG_CASES_SCHEDULER[".isUseTimeForSearch"] = false;





$tdataLOG_CASES_SCHEDULER[".allSearchFields"] = array();
$tdataLOG_CASES_SCHEDULER[".filterFields"] = array();
$tdataLOG_CASES_SCHEDULER[".requiredSearchFields"] = array();

$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "LOG_CASE_UID";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "PRO_UID";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "TAS_UID";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "USR_NAME";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "EXEC_DATE";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "EXEC_HOUR";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "RESULT";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "SCH_UID";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "WS_CREATE_CASE_STATUS";
	$tdataLOG_CASES_SCHEDULER[".allSearchFields"][] = "WS_ROUTE_CASE_STATUS";
	

$tdataLOG_CASES_SCHEDULER[".googleLikeFields"] = array();
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".googleLikeFields"][] = "WS_ROUTE_CASE_STATUS";


$tdataLOG_CASES_SCHEDULER[".advSearchFields"] = array();
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".advSearchFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".tableType"] = "list";

$tdataLOG_CASES_SCHEDULER[".printerPageOrientation"] = 0;
$tdataLOG_CASES_SCHEDULER[".nPrinterPageScale"] = 100;

$tdataLOG_CASES_SCHEDULER[".nPrinterSplitRecords"] = 40;

$tdataLOG_CASES_SCHEDULER[".nPrinterPDFSplitRecords"] = 40;



$tdataLOG_CASES_SCHEDULER[".geocodingEnabled"] = false;





$tdataLOG_CASES_SCHEDULER[".listGridLayout"] = 3;


$tdataLOG_CASES_SCHEDULER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLOG_CASES_SCHEDULER[".pageSize"] = 20;

$tdataLOG_CASES_SCHEDULER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLOG_CASES_SCHEDULER[".strOrderBy"] = $tstrOrderBy;

$tdataLOG_CASES_SCHEDULER[".orderindexes"] = array();

$tdataLOG_CASES_SCHEDULER[".sqlHead"] = "SELECT LOG_CASE_UID,  	PRO_UID,  	TAS_UID,  	USR_NAME,  	EXEC_DATE,  	EXEC_HOUR,  	`RESULT`,  	SCH_UID,  	WS_CREATE_CASE_STATUS,  	WS_ROUTE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".sqlFrom"] = "FROM LOG_CASES_SCHEDULER";
$tdataLOG_CASES_SCHEDULER[".sqlWhereExpr"] = "";
$tdataLOG_CASES_SCHEDULER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLOG_CASES_SCHEDULER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLOG_CASES_SCHEDULER[".arrGroupsPerPage"] = $arrGPP;

$tdataLOG_CASES_SCHEDULER[".highlightSearchResults"] = true;

$tableKeysLOG_CASES_SCHEDULER = array();
$tableKeysLOG_CASES_SCHEDULER[] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".Keys"] = $tableKeysLOG_CASES_SCHEDULER;

$tdataLOG_CASES_SCHEDULER[".listFields"] = array();
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".listFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".hideMobileList"] = array();


$tdataLOG_CASES_SCHEDULER[".viewFields"] = array();
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".viewFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".addFields"] = array();
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".addFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".masterListFields"] = array();
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".masterListFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".inlineAddFields"] = array();
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".inlineAddFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".editFields"] = array();
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".editFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".inlineEditFields"] = array();
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".inlineEditFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"] = array();
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".updateSelectedFields"][] = "WS_ROUTE_CASE_STATUS";


$tdataLOG_CASES_SCHEDULER[".exportFields"] = array();
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".exportFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".importFields"] = array();
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".importFields"][] = "WS_ROUTE_CASE_STATUS";

$tdataLOG_CASES_SCHEDULER[".printFields"] = array();
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "LOG_CASE_UID";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "PRO_UID";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "TAS_UID";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "USR_NAME";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "EXEC_DATE";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "EXEC_HOUR";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "RESULT";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "SCH_UID";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "WS_CREATE_CASE_STATUS";
$tdataLOG_CASES_SCHEDULER[".printFields"][] = "WS_ROUTE_CASE_STATUS";

//	LOG_CASE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LOG_CASE_UID";
	$fdata["GoodName"] = "LOG_CASE_UID";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","LOG_CASE_UID");
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

		$fdata["strField"] = "LOG_CASE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_CASE_UID";

	
	
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




	$tdataLOG_CASES_SCHEDULER["LOG_CASE_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","PRO_UID");
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




	$tdataLOG_CASES_SCHEDULER["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","TAS_UID");
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




	$tdataLOG_CASES_SCHEDULER["TAS_UID"] = $fdata;
//	USR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USR_NAME";
	$fdata["GoodName"] = "USR_NAME";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","USR_NAME");
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

		$fdata["strField"] = "USR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_NAME";

	
	
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




	$tdataLOG_CASES_SCHEDULER["USR_NAME"] = $fdata;
//	EXEC_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EXEC_DATE";
	$fdata["GoodName"] = "EXEC_DATE";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","EXEC_DATE");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "EXEC_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXEC_DATE";

	
	
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




	$tdataLOG_CASES_SCHEDULER["EXEC_DATE"] = $fdata;
//	EXEC_HOUR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EXEC_HOUR";
	$fdata["GoodName"] = "EXEC_HOUR";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","EXEC_HOUR");
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

		$fdata["strField"] = "EXEC_HOUR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXEC_HOUR";

	
	
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




	$tdataLOG_CASES_SCHEDULER["EXEC_HOUR"] = $fdata;
//	RESULT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RESULT";
	$fdata["GoodName"] = "RESULT";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","RESULT");
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

		$fdata["strField"] = "RESULT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RESULT`";

	
	
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




	$tdataLOG_CASES_SCHEDULER["RESULT"] = $fdata;
//	SCH_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SCH_UID";
	$fdata["GoodName"] = "SCH_UID";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","SCH_UID");
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




	$tdataLOG_CASES_SCHEDULER["SCH_UID"] = $fdata;
//	WS_CREATE_CASE_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WS_CREATE_CASE_STATUS";
	$fdata["GoodName"] = "WS_CREATE_CASE_STATUS";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","WS_CREATE_CASE_STATUS");
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

		$fdata["strField"] = "WS_CREATE_CASE_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WS_CREATE_CASE_STATUS";

	
	
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




	$tdataLOG_CASES_SCHEDULER["WS_CREATE_CASE_STATUS"] = $fdata;
//	WS_ROUTE_CASE_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WS_ROUTE_CASE_STATUS";
	$fdata["GoodName"] = "WS_ROUTE_CASE_STATUS";
	$fdata["ownerTable"] = "LOG_CASES_SCHEDULER";
	$fdata["Label"] = GetFieldLabel("LOG_CASES_SCHEDULER","WS_ROUTE_CASE_STATUS");
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

		$fdata["strField"] = "WS_ROUTE_CASE_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WS_ROUTE_CASE_STATUS";

	
	
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




	$tdataLOG_CASES_SCHEDULER["WS_ROUTE_CASE_STATUS"] = $fdata;


$tables_data["LOG_CASES_SCHEDULER"]=&$tdataLOG_CASES_SCHEDULER;
$field_labels["LOG_CASES_SCHEDULER"] = &$fieldLabelsLOG_CASES_SCHEDULER;
$fieldToolTips["LOG_CASES_SCHEDULER"] = &$fieldToolTipsLOG_CASES_SCHEDULER;
$placeHolders["LOG_CASES_SCHEDULER"] = &$placeHoldersLOG_CASES_SCHEDULER;
$page_titles["LOG_CASES_SCHEDULER"] = &$pageTitlesLOG_CASES_SCHEDULER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LOG_CASES_SCHEDULER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LOG_CASES_SCHEDULER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LOG_CASES_SCHEDULER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LOG_CASE_UID,  	PRO_UID,  	TAS_UID,  	USR_NAME,  	EXEC_DATE,  	EXEC_HOUR,  	`RESULT`,  	SCH_UID,  	WS_CREATE_CASE_STATUS,  	WS_ROUTE_CASE_STATUS";
$proto0["m_strFrom"] = "FROM LOG_CASES_SCHEDULER";
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
	"m_strName" => "LOG_CASE_UID",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto6["m_sql"] = "LOG_CASE_UID";
$proto6["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_NAME",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto12["m_sql"] = "USR_NAME";
$proto12["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EXEC_DATE",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto14["m_sql"] = "EXEC_DATE";
$proto14["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EXEC_HOUR",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto16["m_sql"] = "EXEC_HOUR";
$proto16["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RESULT",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto18["m_sql"] = "`RESULT`";
$proto18["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SCH_UID",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto20["m_sql"] = "SCH_UID";
$proto20["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WS_CREATE_CASE_STATUS",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto22["m_sql"] = "WS_CREATE_CASE_STATUS";
$proto22["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WS_ROUTE_CASE_STATUS",
	"m_strTable" => "LOG_CASES_SCHEDULER",
	"m_srcTableName" => "LOG_CASES_SCHEDULER"
));

$proto24["m_sql"] = "WS_ROUTE_CASE_STATUS";
$proto24["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "LOG_CASES_SCHEDULER";
$proto27["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "LOG_CASE_UID";
$proto27["m_columns"][] = "PRO_UID";
$proto27["m_columns"][] = "TAS_UID";
$proto27["m_columns"][] = "USR_NAME";
$proto27["m_columns"][] = "EXEC_DATE";
$proto27["m_columns"][] = "EXEC_HOUR";
$proto27["m_columns"][] = "RESULT";
$proto27["m_columns"][] = "SCH_UID";
$proto27["m_columns"][] = "WS_CREATE_CASE_STATUS";
$proto27["m_columns"][] = "WS_ROUTE_CASE_STATUS";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "LOG_CASES_SCHEDULER";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "LOG_CASES_SCHEDULER";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LOG_CASES_SCHEDULER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LOG_CASES_SCHEDULER = createSqlQuery_LOG_CASES_SCHEDULER();


	
						;

										

$tdataLOG_CASES_SCHEDULER[".sqlquery"] = $queryData_LOG_CASES_SCHEDULER;

$tableEvents["LOG_CASES_SCHEDULER"] = new eventsBase;
$tdataLOG_CASES_SCHEDULER[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTIMER_EVENT = array();
	$tdataTIMER_EVENT[".truncateText"] = true;
	$tdataTIMER_EVENT[".NumberOfChars"] = 20;
	$tdataTIMER_EVENT[".ShortName"] = "TIMER_EVENT";
	$tdataTIMER_EVENT[".OwnerID"] = "";
	$tdataTIMER_EVENT[".OriginalTable"] = "TIMER_EVENT";

//	field labels
$fieldLabelsTIMER_EVENT = array();
$fieldToolTipsTIMER_EVENT = array();
$pageTitlesTIMER_EVENT = array();
$placeHoldersTIMER_EVENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTIMER_EVENT["Japanese"] = array();
	$fieldToolTipsTIMER_EVENT["Japanese"] = array();
	$placeHoldersTIMER_EVENT["Japanese"] = array();
	$pageTitlesTIMER_EVENT["Japanese"] = array();
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_UID"] = "UID tmrevn";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_UID"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_UID"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsTIMER_EVENT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsTIMER_EVENT["Japanese"]["EVN_UID"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["EVN_UID"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_OPTION"] = "tmrevnオプション";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_OPTION"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_OPTION"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_START_DATE"] = "tmrevn開始日";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_START_DATE"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_START_DATE"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_END_DATE"] = "終了日tmrevn";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_END_DATE"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_END_DATE"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_DAY"] = "tmrevn日";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_DAY"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_DAY"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_HOUR"] = "tmrevn時間";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_HOUR"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_HOUR"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_MINUTE"] = "tmrevn分";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_MINUTE"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_MINUTE"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_CONFIGURATION_DATA"] = "tmrevn構成データ";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_CONFIGURATION_DATA"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_CONFIGURATION_DATA"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_NEXT_RUN_DATE"] = "次回の実行日tmrevn";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_NEXT_RUN_DATE"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_NEXT_RUN_DATE"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_LAST_RUN_DATE"] = "前回の実行日tmrevn";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_LAST_RUN_DATE"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_LAST_RUN_DATE"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_LAST_EXECUTION_DATE"] = "前回の実行日tmrevn";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_LAST_EXECUTION_DATE"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_LAST_EXECUTION_DATE"] = "";
	$fieldLabelsTIMER_EVENT["Japanese"]["TMREVN_STATUS"] = "tmrevn状況";
	$fieldToolTipsTIMER_EVENT["Japanese"]["TMREVN_STATUS"] = "";
	$placeHoldersTIMER_EVENT["Japanese"]["TMREVN_STATUS"] = "";
	if (count($fieldToolTipsTIMER_EVENT["Japanese"]))
		$tdataTIMER_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTIMER_EVENT["English"] = array();
	$fieldToolTipsTIMER_EVENT["English"] = array();
	$placeHoldersTIMER_EVENT["English"] = array();
	$pageTitlesTIMER_EVENT["English"] = array();
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_UID"] = "UID tmrevn";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_UID"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_UID"] = "";
	$fieldLabelsTIMER_EVENT["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsTIMER_EVENT["English"]["PRJ_UID"] = "";
	$placeHoldersTIMER_EVENT["English"]["PRJ_UID"] = "";
	$fieldLabelsTIMER_EVENT["English"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsTIMER_EVENT["English"]["EVN_UID"] = "";
	$placeHoldersTIMER_EVENT["English"]["EVN_UID"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_OPTION"] = "tmrevnオプション";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_OPTION"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_OPTION"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_START_DATE"] = "tmrevn開始日";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_START_DATE"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_START_DATE"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_END_DATE"] = "終了日tmrevn";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_END_DATE"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_END_DATE"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_DAY"] = "tmrevn日";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_DAY"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_DAY"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_HOUR"] = "tmrevn時間";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_HOUR"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_HOUR"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_MINUTE"] = "tmrevn分";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_MINUTE"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_MINUTE"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_CONFIGURATION_DATA"] = "tmrevn構成データ";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_CONFIGURATION_DATA"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_CONFIGURATION_DATA"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_NEXT_RUN_DATE"] = "次回の実行日tmrevn";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_NEXT_RUN_DATE"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_NEXT_RUN_DATE"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_LAST_RUN_DATE"] = "前回の実行日tmrevn";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_LAST_RUN_DATE"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_LAST_RUN_DATE"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_LAST_EXECUTION_DATE"] = "前回の実行日tmrevn";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_LAST_EXECUTION_DATE"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_LAST_EXECUTION_DATE"] = "";
	$fieldLabelsTIMER_EVENT["English"]["TMREVN_STATUS"] = "tmrevn状況";
	$fieldToolTipsTIMER_EVENT["English"]["TMREVN_STATUS"] = "";
	$placeHoldersTIMER_EVENT["English"]["TMREVN_STATUS"] = "";
	if (count($fieldToolTipsTIMER_EVENT["English"]))
		$tdataTIMER_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTIMER_EVENT[""] = array();
	$fieldToolTipsTIMER_EVENT[""] = array();
	$placeHoldersTIMER_EVENT[""] = array();
	$pageTitlesTIMER_EVENT[""] = array();
	if (count($fieldToolTipsTIMER_EVENT[""]))
		$tdataTIMER_EVENT[".isUseToolTips"] = true;
}


	$tdataTIMER_EVENT[".NCSearch"] = true;



$tdataTIMER_EVENT[".shortTableName"] = "TIMER_EVENT";
$tdataTIMER_EVENT[".nSecOptions"] = 0;
$tdataTIMER_EVENT[".recsPerRowPrint"] = 1;
$tdataTIMER_EVENT[".mainTableOwnerID"] = "";
$tdataTIMER_EVENT[".moveNext"] = 0;
$tdataTIMER_EVENT[".entityType"] = 0;

$tdataTIMER_EVENT[".strOriginalTableName"] = "TIMER_EVENT";

	



$tdataTIMER_EVENT[".showAddInPopup"] = false;

$tdataTIMER_EVENT[".showEditInPopup"] = false;

$tdataTIMER_EVENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTIMER_EVENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTIMER_EVENT[".fieldsForRegister"] = array();
	
$tdataTIMER_EVENT[".listAjax"] = false;

	$tdataTIMER_EVENT[".audit"] = true;

	$tdataTIMER_EVENT[".locking"] = false;

$tdataTIMER_EVENT[".edit"] = true;
$tdataTIMER_EVENT[".afterEditAction"] = 1;
$tdataTIMER_EVENT[".closePopupAfterEdit"] = 1;
$tdataTIMER_EVENT[".afterEditActionDetTable"] = "";

$tdataTIMER_EVENT[".add"] = true;
$tdataTIMER_EVENT[".afterAddAction"] = 1;
$tdataTIMER_EVENT[".closePopupAfterAdd"] = 1;
$tdataTIMER_EVENT[".afterAddActionDetTable"] = "";

$tdataTIMER_EVENT[".list"] = true;

$tdataTIMER_EVENT[".inlineEdit"] = true;


$tdataTIMER_EVENT[".reorderRecordsByHeader"] = true;
$tdataTIMER_EVENT[".createSortByDropdown"] = true;
$tdataTIMER_EVENT[".strSortControlSettingsJSON"] = "";



$tdataTIMER_EVENT[".inlineAdd"] = true;
$tdataTIMER_EVENT[".view"] = true;

$tdataTIMER_EVENT[".import"] = true;

$tdataTIMER_EVENT[".exportTo"] = true;

$tdataTIMER_EVENT[".printFriendly"] = true;

$tdataTIMER_EVENT[".delete"] = true;

$tdataTIMER_EVENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataTIMER_EVENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataTIMER_EVENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataTIMER_EVENT[".searchSaving"] = false;
//

$tdataTIMER_EVENT[".showSearchPanel"] = true;
		$tdataTIMER_EVENT[".flexibleSearch"] = true;

$tdataTIMER_EVENT[".isUseAjaxSuggest"] = true;

$tdataTIMER_EVENT[".rowHighlite"] = true;



				

$tdataTIMER_EVENT[".ajaxCodeSnippetAdded"] = false;

$tdataTIMER_EVENT[".buttonsAdded"] = false;

$tdataTIMER_EVENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTIMER_EVENT[".isUseTimeForSearch"] = false;





$tdataTIMER_EVENT[".allSearchFields"] = array();
$tdataTIMER_EVENT[".filterFields"] = array();
$tdataTIMER_EVENT[".requiredSearchFields"] = array();

$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_UID";
	$tdataTIMER_EVENT[".allSearchFields"][] = "PRJ_UID";
	$tdataTIMER_EVENT[".allSearchFields"][] = "EVN_UID";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_OPTION";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_START_DATE";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_END_DATE";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_DAY";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_HOUR";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_MINUTE";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_CONFIGURATION_DATA";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_NEXT_RUN_DATE";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_LAST_RUN_DATE";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_LAST_EXECUTION_DATE";
	$tdataTIMER_EVENT[".allSearchFields"][] = "TMREVN_STATUS";
	

$tdataTIMER_EVENT[".googleLikeFields"] = array();
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".googleLikeFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".googleLikeFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".googleLikeFields"][] = "TMREVN_STATUS";


$tdataTIMER_EVENT[".advSearchFields"] = array();
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".advSearchFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".advSearchFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".advSearchFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".tableType"] = "list";

$tdataTIMER_EVENT[".printerPageOrientation"] = 0;
$tdataTIMER_EVENT[".nPrinterPageScale"] = 100;

$tdataTIMER_EVENT[".nPrinterSplitRecords"] = 40;

$tdataTIMER_EVENT[".nPrinterPDFSplitRecords"] = 40;



$tdataTIMER_EVENT[".geocodingEnabled"] = false;





$tdataTIMER_EVENT[".listGridLayout"] = 3;


$tdataTIMER_EVENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataTIMER_EVENT[".pageSize"] = 20;

$tdataTIMER_EVENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTIMER_EVENT[".strOrderBy"] = $tstrOrderBy;

$tdataTIMER_EVENT[".orderindexes"] = array();

$tdataTIMER_EVENT[".sqlHead"] = "SELECT TMREVN_UID,  	PRJ_UID,  	EVN_UID,  	TMREVN_OPTION,  	TMREVN_START_DATE,  	TMREVN_END_DATE,  	TMREVN_DAY,  	TMREVN_HOUR,  	TMREVN_MINUTE,  	TMREVN_CONFIGURATION_DATA,  	TMREVN_NEXT_RUN_DATE,  	TMREVN_LAST_RUN_DATE,  	TMREVN_LAST_EXECUTION_DATE,  	TMREVN_STATUS";
$tdataTIMER_EVENT[".sqlFrom"] = "FROM TIMER_EVENT";
$tdataTIMER_EVENT[".sqlWhereExpr"] = "";
$tdataTIMER_EVENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTIMER_EVENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTIMER_EVENT[".arrGroupsPerPage"] = $arrGPP;

$tdataTIMER_EVENT[".highlightSearchResults"] = true;

$tableKeysTIMER_EVENT = array();
$tableKeysTIMER_EVENT[] = "TMREVN_UID";
$tdataTIMER_EVENT[".Keys"] = $tableKeysTIMER_EVENT;

$tdataTIMER_EVENT[".listFields"] = array();
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".listFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".listFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".listFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".hideMobileList"] = array();


$tdataTIMER_EVENT[".viewFields"] = array();
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".viewFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".viewFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".viewFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".addFields"] = array();
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".addFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".addFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".addFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".masterListFields"] = array();
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".masterListFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".masterListFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".masterListFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".inlineAddFields"] = array();
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".inlineAddFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".inlineAddFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".inlineAddFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".editFields"] = array();
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".editFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".editFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".editFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".inlineEditFields"] = array();
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".inlineEditFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".inlineEditFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".inlineEditFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".updateSelectedFields"] = array();
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".updateSelectedFields"][] = "TMREVN_STATUS";


$tdataTIMER_EVENT[".exportFields"] = array();
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".exportFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".exportFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".exportFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".importFields"] = array();
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".importFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".importFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".importFields"][] = "TMREVN_STATUS";

$tdataTIMER_EVENT[".printFields"] = array();
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_UID";
$tdataTIMER_EVENT[".printFields"][] = "PRJ_UID";
$tdataTIMER_EVENT[".printFields"][] = "EVN_UID";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_OPTION";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_START_DATE";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_END_DATE";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_DAY";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_HOUR";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_MINUTE";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_CONFIGURATION_DATA";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_NEXT_RUN_DATE";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_LAST_RUN_DATE";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_LAST_EXECUTION_DATE";
$tdataTIMER_EVENT[".printFields"][] = "TMREVN_STATUS";

//	TMREVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TMREVN_UID";
	$fdata["GoodName"] = "TMREVN_UID";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_UID");
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

		$fdata["strField"] = "TMREVN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_UID";

	
	
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




	$tdataTIMER_EVENT["TMREVN_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","PRJ_UID");
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




	$tdataTIMER_EVENT["PRJ_UID"] = $fdata;
//	EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EVN_UID";
	$fdata["GoodName"] = "EVN_UID";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","EVN_UID");
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




	$tdataTIMER_EVENT["EVN_UID"] = $fdata;
//	TMREVN_OPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TMREVN_OPTION";
	$fdata["GoodName"] = "TMREVN_OPTION";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_OPTION");
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

		$fdata["strField"] = "TMREVN_OPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_OPTION";

	
	
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




	$tdataTIMER_EVENT["TMREVN_OPTION"] = $fdata;
//	TMREVN_START_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TMREVN_START_DATE";
	$fdata["GoodName"] = "TMREVN_START_DATE";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_START_DATE");
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

		$fdata["strField"] = "TMREVN_START_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_START_DATE";

	
	
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




	$tdataTIMER_EVENT["TMREVN_START_DATE"] = $fdata;
//	TMREVN_END_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TMREVN_END_DATE";
	$fdata["GoodName"] = "TMREVN_END_DATE";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_END_DATE");
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

		$fdata["strField"] = "TMREVN_END_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_END_DATE";

	
	
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




	$tdataTIMER_EVENT["TMREVN_END_DATE"] = $fdata;
//	TMREVN_DAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TMREVN_DAY";
	$fdata["GoodName"] = "TMREVN_DAY";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_DAY");
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

		$fdata["strField"] = "TMREVN_DAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_DAY";

	
	
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




	$tdataTIMER_EVENT["TMREVN_DAY"] = $fdata;
//	TMREVN_HOUR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TMREVN_HOUR";
	$fdata["GoodName"] = "TMREVN_HOUR";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_HOUR");
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

		$fdata["strField"] = "TMREVN_HOUR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_HOUR";

	
	
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




	$tdataTIMER_EVENT["TMREVN_HOUR"] = $fdata;
//	TMREVN_MINUTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TMREVN_MINUTE";
	$fdata["GoodName"] = "TMREVN_MINUTE";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_MINUTE");
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

		$fdata["strField"] = "TMREVN_MINUTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_MINUTE";

	
	
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




	$tdataTIMER_EVENT["TMREVN_MINUTE"] = $fdata;
//	TMREVN_CONFIGURATION_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TMREVN_CONFIGURATION_DATA";
	$fdata["GoodName"] = "TMREVN_CONFIGURATION_DATA";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_CONFIGURATION_DATA");
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

		$fdata["strField"] = "TMREVN_CONFIGURATION_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_CONFIGURATION_DATA";

	
	
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




	$tdataTIMER_EVENT["TMREVN_CONFIGURATION_DATA"] = $fdata;
//	TMREVN_NEXT_RUN_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TMREVN_NEXT_RUN_DATE";
	$fdata["GoodName"] = "TMREVN_NEXT_RUN_DATE";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_NEXT_RUN_DATE");
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

		$fdata["strField"] = "TMREVN_NEXT_RUN_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_NEXT_RUN_DATE";

	
	
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




	$tdataTIMER_EVENT["TMREVN_NEXT_RUN_DATE"] = $fdata;
//	TMREVN_LAST_RUN_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TMREVN_LAST_RUN_DATE";
	$fdata["GoodName"] = "TMREVN_LAST_RUN_DATE";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_LAST_RUN_DATE");
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

		$fdata["strField"] = "TMREVN_LAST_RUN_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_LAST_RUN_DATE";

	
	
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




	$tdataTIMER_EVENT["TMREVN_LAST_RUN_DATE"] = $fdata;
//	TMREVN_LAST_EXECUTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TMREVN_LAST_EXECUTION_DATE";
	$fdata["GoodName"] = "TMREVN_LAST_EXECUTION_DATE";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_LAST_EXECUTION_DATE");
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

		$fdata["strField"] = "TMREVN_LAST_EXECUTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_LAST_EXECUTION_DATE";

	
	
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




	$tdataTIMER_EVENT["TMREVN_LAST_EXECUTION_DATE"] = $fdata;
//	TMREVN_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TMREVN_STATUS";
	$fdata["GoodName"] = "TMREVN_STATUS";
	$fdata["ownerTable"] = "TIMER_EVENT";
	$fdata["Label"] = GetFieldLabel("TIMER_EVENT","TMREVN_STATUS");
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

		$fdata["strField"] = "TMREVN_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TMREVN_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdataTIMER_EVENT["TMREVN_STATUS"] = $fdata;


$tables_data["TIMER_EVENT"]=&$tdataTIMER_EVENT;
$field_labels["TIMER_EVENT"] = &$fieldLabelsTIMER_EVENT;
$fieldToolTips["TIMER_EVENT"] = &$fieldToolTipsTIMER_EVENT;
$placeHolders["TIMER_EVENT"] = &$placeHoldersTIMER_EVENT;
$page_titles["TIMER_EVENT"] = &$pageTitlesTIMER_EVENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TIMER_EVENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TIMER_EVENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TIMER_EVENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TMREVN_UID,  	PRJ_UID,  	EVN_UID,  	TMREVN_OPTION,  	TMREVN_START_DATE,  	TMREVN_END_DATE,  	TMREVN_DAY,  	TMREVN_HOUR,  	TMREVN_MINUTE,  	TMREVN_CONFIGURATION_DATA,  	TMREVN_NEXT_RUN_DATE,  	TMREVN_LAST_RUN_DATE,  	TMREVN_LAST_EXECUTION_DATE,  	TMREVN_STATUS";
$proto0["m_strFrom"] = "FROM TIMER_EVENT";
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
	"m_strName" => "TMREVN_UID",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto6["m_sql"] = "TMREVN_UID";
$proto6["m_srcTableName"] = "TIMER_EVENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "TIMER_EVENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto10["m_sql"] = "EVN_UID";
$proto10["m_srcTableName"] = "TIMER_EVENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_OPTION",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto12["m_sql"] = "TMREVN_OPTION";
$proto12["m_srcTableName"] = "TIMER_EVENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_START_DATE",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto14["m_sql"] = "TMREVN_START_DATE";
$proto14["m_srcTableName"] = "TIMER_EVENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_END_DATE",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto16["m_sql"] = "TMREVN_END_DATE";
$proto16["m_srcTableName"] = "TIMER_EVENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_DAY",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto18["m_sql"] = "TMREVN_DAY";
$proto18["m_srcTableName"] = "TIMER_EVENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_HOUR",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto20["m_sql"] = "TMREVN_HOUR";
$proto20["m_srcTableName"] = "TIMER_EVENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_MINUTE",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto22["m_sql"] = "TMREVN_MINUTE";
$proto22["m_srcTableName"] = "TIMER_EVENT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_CONFIGURATION_DATA",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto24["m_sql"] = "TMREVN_CONFIGURATION_DATA";
$proto24["m_srcTableName"] = "TIMER_EVENT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_NEXT_RUN_DATE",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto26["m_sql"] = "TMREVN_NEXT_RUN_DATE";
$proto26["m_srcTableName"] = "TIMER_EVENT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_LAST_RUN_DATE",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto28["m_sql"] = "TMREVN_LAST_RUN_DATE";
$proto28["m_srcTableName"] = "TIMER_EVENT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_LAST_EXECUTION_DATE",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto30["m_sql"] = "TMREVN_LAST_EXECUTION_DATE";
$proto30["m_srcTableName"] = "TIMER_EVENT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "TMREVN_STATUS",
	"m_strTable" => "TIMER_EVENT",
	"m_srcTableName" => "TIMER_EVENT"
));

$proto32["m_sql"] = "TMREVN_STATUS";
$proto32["m_srcTableName"] = "TIMER_EVENT";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "TIMER_EVENT";
$proto35["m_srcTableName"] = "TIMER_EVENT";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "TMREVN_UID";
$proto35["m_columns"][] = "PRJ_UID";
$proto35["m_columns"][] = "EVN_UID";
$proto35["m_columns"][] = "TMREVN_OPTION";
$proto35["m_columns"][] = "TMREVN_START_DATE";
$proto35["m_columns"][] = "TMREVN_END_DATE";
$proto35["m_columns"][] = "TMREVN_DAY";
$proto35["m_columns"][] = "TMREVN_HOUR";
$proto35["m_columns"][] = "TMREVN_MINUTE";
$proto35["m_columns"][] = "TMREVN_CONFIGURATION_DATA";
$proto35["m_columns"][] = "TMREVN_NEXT_RUN_DATE";
$proto35["m_columns"][] = "TMREVN_LAST_RUN_DATE";
$proto35["m_columns"][] = "TMREVN_LAST_EXECUTION_DATE";
$proto35["m_columns"][] = "TMREVN_STATUS";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "TIMER_EVENT";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "TIMER_EVENT";
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
$proto0["m_srcTableName"]="TIMER_EVENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TIMER_EVENT = createSqlQuery_TIMER_EVENT();


	
						;

														

$tdataTIMER_EVENT[".sqlquery"] = $queryData_TIMER_EVENT;

$tableEvents["TIMER_EVENT"] = new eventsBase;
$tdataTIMER_EVENT[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMESSAGE_APPLICATION = array();
	$tdataMESSAGE_APPLICATION[".truncateText"] = true;
	$tdataMESSAGE_APPLICATION[".NumberOfChars"] = 20;
	$tdataMESSAGE_APPLICATION[".ShortName"] = "MESSAGE_APPLICATION";
	$tdataMESSAGE_APPLICATION[".OwnerID"] = "";
	$tdataMESSAGE_APPLICATION[".OriginalTable"] = "MESSAGE_APPLICATION";

//	field labels
$fieldLabelsMESSAGE_APPLICATION = array();
$fieldToolTipsMESSAGE_APPLICATION = array();
$pageTitlesMESSAGE_APPLICATION = array();
$placeHoldersMESSAGE_APPLICATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsMESSAGE_APPLICATION["Japanese"] = array();
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"] = array();
	$placeHoldersMESSAGE_APPLICATION["Japanese"] = array();
	$pageTitlesMESSAGE_APPLICATION["Japanese"] = array();
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["MSGAPP_UID"] = "msgappのUID";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["MSGAPP_UID"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["MSGAPP_UID"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["APP_UID"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["APP_UID"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["EVN_UID_THROW"] = "EVNのuidスロー";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["EVN_UID_THROW"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["EVN_UID_THROW"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["EVN_UID_CATCH"] = "EVNのuidキャッチ";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["EVN_UID_CATCH"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["EVN_UID_CATCH"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["MSGAPP_VARIABLES"] = "msgapp変数";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["MSGAPP_VARIABLES"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["MSGAPP_VARIABLES"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["MSGAPP_CORRELATION"] = "msgapp相関";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["MSGAPP_CORRELATION"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["MSGAPP_CORRELATION"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["MSGAPP_THROW_DATE"] = "msgappスロー日";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["MSGAPP_THROW_DATE"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["MSGAPP_THROW_DATE"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["MSGAPP_CATCH_DATE"] = "msgappキャッチ日";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["MSGAPP_CATCH_DATE"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["MSGAPP_CATCH_DATE"] = "";
	$fieldLabelsMESSAGE_APPLICATION["Japanese"]["MSGAPP_STATUS"] = "msgappステータス";
	$fieldToolTipsMESSAGE_APPLICATION["Japanese"]["MSGAPP_STATUS"] = "";
	$placeHoldersMESSAGE_APPLICATION["Japanese"]["MSGAPP_STATUS"] = "";
	if (count($fieldToolTipsMESSAGE_APPLICATION["Japanese"]))
		$tdataMESSAGE_APPLICATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMESSAGE_APPLICATION["English"] = array();
	$fieldToolTipsMESSAGE_APPLICATION["English"] = array();
	$placeHoldersMESSAGE_APPLICATION["English"] = array();
	$pageTitlesMESSAGE_APPLICATION["English"] = array();
	$fieldLabelsMESSAGE_APPLICATION["English"]["MSGAPP_UID"] = "msgappのUID";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["MSGAPP_UID"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["MSGAPP_UID"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["APP_UID"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["APP_UID"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["EVN_UID_THROW"] = "EVNのuidスロー";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["EVN_UID_THROW"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["EVN_UID_THROW"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["EVN_UID_CATCH"] = "EVNのuidキャッチ";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["EVN_UID_CATCH"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["EVN_UID_CATCH"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["MSGAPP_VARIABLES"] = "msgapp変数";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["MSGAPP_VARIABLES"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["MSGAPP_VARIABLES"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["MSGAPP_CORRELATION"] = "msgapp相関";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["MSGAPP_CORRELATION"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["MSGAPP_CORRELATION"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["MSGAPP_THROW_DATE"] = "msgappスロー日";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["MSGAPP_THROW_DATE"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["MSGAPP_THROW_DATE"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["MSGAPP_CATCH_DATE"] = "msgappキャッチ日";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["MSGAPP_CATCH_DATE"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["MSGAPP_CATCH_DATE"] = "";
	$fieldLabelsMESSAGE_APPLICATION["English"]["MSGAPP_STATUS"] = "msgappステータス";
	$fieldToolTipsMESSAGE_APPLICATION["English"]["MSGAPP_STATUS"] = "";
	$placeHoldersMESSAGE_APPLICATION["English"]["MSGAPP_STATUS"] = "";
	if (count($fieldToolTipsMESSAGE_APPLICATION["English"]))
		$tdataMESSAGE_APPLICATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMESSAGE_APPLICATION[""] = array();
	$fieldToolTipsMESSAGE_APPLICATION[""] = array();
	$placeHoldersMESSAGE_APPLICATION[""] = array();
	$pageTitlesMESSAGE_APPLICATION[""] = array();
	if (count($fieldToolTipsMESSAGE_APPLICATION[""]))
		$tdataMESSAGE_APPLICATION[".isUseToolTips"] = true;
}


	$tdataMESSAGE_APPLICATION[".NCSearch"] = true;



$tdataMESSAGE_APPLICATION[".shortTableName"] = "MESSAGE_APPLICATION";
$tdataMESSAGE_APPLICATION[".nSecOptions"] = 0;
$tdataMESSAGE_APPLICATION[".recsPerRowPrint"] = 1;
$tdataMESSAGE_APPLICATION[".mainTableOwnerID"] = "";
$tdataMESSAGE_APPLICATION[".moveNext"] = 0;
$tdataMESSAGE_APPLICATION[".entityType"] = 0;

$tdataMESSAGE_APPLICATION[".strOriginalTableName"] = "MESSAGE_APPLICATION";

	



$tdataMESSAGE_APPLICATION[".showAddInPopup"] = false;

$tdataMESSAGE_APPLICATION[".showEditInPopup"] = false;

$tdataMESSAGE_APPLICATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMESSAGE_APPLICATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMESSAGE_APPLICATION[".fieldsForRegister"] = array();
	
$tdataMESSAGE_APPLICATION[".listAjax"] = false;

	$tdataMESSAGE_APPLICATION[".audit"] = true;

	$tdataMESSAGE_APPLICATION[".locking"] = false;

$tdataMESSAGE_APPLICATION[".edit"] = true;
$tdataMESSAGE_APPLICATION[".afterEditAction"] = 1;
$tdataMESSAGE_APPLICATION[".closePopupAfterEdit"] = 1;
$tdataMESSAGE_APPLICATION[".afterEditActionDetTable"] = "";

$tdataMESSAGE_APPLICATION[".add"] = true;
$tdataMESSAGE_APPLICATION[".afterAddAction"] = 1;
$tdataMESSAGE_APPLICATION[".closePopupAfterAdd"] = 1;
$tdataMESSAGE_APPLICATION[".afterAddActionDetTable"] = "";

$tdataMESSAGE_APPLICATION[".list"] = true;

$tdataMESSAGE_APPLICATION[".inlineEdit"] = true;


$tdataMESSAGE_APPLICATION[".reorderRecordsByHeader"] = true;
$tdataMESSAGE_APPLICATION[".createSortByDropdown"] = true;
$tdataMESSAGE_APPLICATION[".strSortControlSettingsJSON"] = "";



$tdataMESSAGE_APPLICATION[".inlineAdd"] = true;
$tdataMESSAGE_APPLICATION[".view"] = true;

$tdataMESSAGE_APPLICATION[".import"] = true;

$tdataMESSAGE_APPLICATION[".exportTo"] = true;

$tdataMESSAGE_APPLICATION[".printFriendly"] = true;

$tdataMESSAGE_APPLICATION[".delete"] = true;

$tdataMESSAGE_APPLICATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataMESSAGE_APPLICATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataMESSAGE_APPLICATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataMESSAGE_APPLICATION[".searchSaving"] = false;
//

$tdataMESSAGE_APPLICATION[".showSearchPanel"] = true;
		$tdataMESSAGE_APPLICATION[".flexibleSearch"] = true;

$tdataMESSAGE_APPLICATION[".isUseAjaxSuggest"] = true;

$tdataMESSAGE_APPLICATION[".rowHighlite"] = true;



				

$tdataMESSAGE_APPLICATION[".ajaxCodeSnippetAdded"] = false;

$tdataMESSAGE_APPLICATION[".buttonsAdded"] = false;

$tdataMESSAGE_APPLICATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMESSAGE_APPLICATION[".isUseTimeForSearch"] = false;





$tdataMESSAGE_APPLICATION[".allSearchFields"] = array();
$tdataMESSAGE_APPLICATION[".filterFields"] = array();
$tdataMESSAGE_APPLICATION[".requiredSearchFields"] = array();

$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "MSGAPP_UID";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "APP_UID";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "PRJ_UID";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "EVN_UID_THROW";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "EVN_UID_CATCH";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "MSGAPP_VARIABLES";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "MSGAPP_CORRELATION";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "MSGAPP_THROW_DATE";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "MSGAPP_CATCH_DATE";
	$tdataMESSAGE_APPLICATION[".allSearchFields"][] = "MSGAPP_STATUS";
	

$tdataMESSAGE_APPLICATION[".googleLikeFields"] = array();
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".googleLikeFields"][] = "MSGAPP_STATUS";


$tdataMESSAGE_APPLICATION[".advSearchFields"] = array();
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".advSearchFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".tableType"] = "list";

$tdataMESSAGE_APPLICATION[".printerPageOrientation"] = 0;
$tdataMESSAGE_APPLICATION[".nPrinterPageScale"] = 100;

$tdataMESSAGE_APPLICATION[".nPrinterSplitRecords"] = 40;

$tdataMESSAGE_APPLICATION[".nPrinterPDFSplitRecords"] = 40;



$tdataMESSAGE_APPLICATION[".geocodingEnabled"] = false;





$tdataMESSAGE_APPLICATION[".listGridLayout"] = 3;


$tdataMESSAGE_APPLICATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataMESSAGE_APPLICATION[".pageSize"] = 20;

$tdataMESSAGE_APPLICATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMESSAGE_APPLICATION[".strOrderBy"] = $tstrOrderBy;

$tdataMESSAGE_APPLICATION[".orderindexes"] = array();

$tdataMESSAGE_APPLICATION[".sqlHead"] = "SELECT MSGAPP_UID,  	APP_UID,  	PRJ_UID,  	EVN_UID_THROW,  	EVN_UID_CATCH,  	MSGAPP_VARIABLES,  	MSGAPP_CORRELATION,  	MSGAPP_THROW_DATE,  	MSGAPP_CATCH_DATE,  	MSGAPP_STATUS";
$tdataMESSAGE_APPLICATION[".sqlFrom"] = "FROM MESSAGE_APPLICATION";
$tdataMESSAGE_APPLICATION[".sqlWhereExpr"] = "";
$tdataMESSAGE_APPLICATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMESSAGE_APPLICATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMESSAGE_APPLICATION[".arrGroupsPerPage"] = $arrGPP;

$tdataMESSAGE_APPLICATION[".highlightSearchResults"] = true;

$tableKeysMESSAGE_APPLICATION = array();
$tableKeysMESSAGE_APPLICATION[] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".Keys"] = $tableKeysMESSAGE_APPLICATION;

$tdataMESSAGE_APPLICATION[".listFields"] = array();
$tdataMESSAGE_APPLICATION[".listFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".listFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".listFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".listFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".listFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".listFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".listFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".listFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".listFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".listFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".hideMobileList"] = array();


$tdataMESSAGE_APPLICATION[".viewFields"] = array();
$tdataMESSAGE_APPLICATION[".viewFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".viewFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".addFields"] = array();
$tdataMESSAGE_APPLICATION[".addFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".addFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".addFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".addFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".addFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".addFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".addFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".addFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".addFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".addFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".masterListFields"] = array();
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".masterListFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".inlineAddFields"] = array();
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".inlineAddFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".editFields"] = array();
$tdataMESSAGE_APPLICATION[".editFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".editFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".editFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".editFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".editFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".editFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".editFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".editFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".editFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".editFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".inlineEditFields"] = array();
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".inlineEditFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".updateSelectedFields"] = array();
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".updateSelectedFields"][] = "MSGAPP_STATUS";


$tdataMESSAGE_APPLICATION[".exportFields"] = array();
$tdataMESSAGE_APPLICATION[".exportFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".exportFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".importFields"] = array();
$tdataMESSAGE_APPLICATION[".importFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".importFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".importFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".importFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".importFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".importFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".importFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".importFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".importFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".importFields"][] = "MSGAPP_STATUS";

$tdataMESSAGE_APPLICATION[".printFields"] = array();
$tdataMESSAGE_APPLICATION[".printFields"][] = "MSGAPP_UID";
$tdataMESSAGE_APPLICATION[".printFields"][] = "APP_UID";
$tdataMESSAGE_APPLICATION[".printFields"][] = "PRJ_UID";
$tdataMESSAGE_APPLICATION[".printFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_APPLICATION[".printFields"][] = "EVN_UID_CATCH";
$tdataMESSAGE_APPLICATION[".printFields"][] = "MSGAPP_VARIABLES";
$tdataMESSAGE_APPLICATION[".printFields"][] = "MSGAPP_CORRELATION";
$tdataMESSAGE_APPLICATION[".printFields"][] = "MSGAPP_THROW_DATE";
$tdataMESSAGE_APPLICATION[".printFields"][] = "MSGAPP_CATCH_DATE";
$tdataMESSAGE_APPLICATION[".printFields"][] = "MSGAPP_STATUS";

//	MSGAPP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MSGAPP_UID";
	$fdata["GoodName"] = "MSGAPP_UID";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","MSGAPP_UID");
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

		$fdata["strField"] = "MSGAPP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGAPP_UID";

	
	
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




	$tdataMESSAGE_APPLICATION["MSGAPP_UID"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","APP_UID");
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




	$tdataMESSAGE_APPLICATION["APP_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","PRJ_UID");
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




	$tdataMESSAGE_APPLICATION["PRJ_UID"] = $fdata;
//	EVN_UID_THROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EVN_UID_THROW";
	$fdata["GoodName"] = "EVN_UID_THROW";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","EVN_UID_THROW");
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

		$fdata["strField"] = "EVN_UID_THROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID_THROW";

	
	
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




	$tdataMESSAGE_APPLICATION["EVN_UID_THROW"] = $fdata;
//	EVN_UID_CATCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EVN_UID_CATCH";
	$fdata["GoodName"] = "EVN_UID_CATCH";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","EVN_UID_CATCH");
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

		$fdata["strField"] = "EVN_UID_CATCH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID_CATCH";

	
	
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




	$tdataMESSAGE_APPLICATION["EVN_UID_CATCH"] = $fdata;
//	MSGAPP_VARIABLES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MSGAPP_VARIABLES";
	$fdata["GoodName"] = "MSGAPP_VARIABLES";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","MSGAPP_VARIABLES");
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

		$fdata["strField"] = "MSGAPP_VARIABLES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGAPP_VARIABLES";

	
	
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




	$tdataMESSAGE_APPLICATION["MSGAPP_VARIABLES"] = $fdata;
//	MSGAPP_CORRELATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MSGAPP_CORRELATION";
	$fdata["GoodName"] = "MSGAPP_CORRELATION";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","MSGAPP_CORRELATION");
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

		$fdata["strField"] = "MSGAPP_CORRELATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGAPP_CORRELATION";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataMESSAGE_APPLICATION["MSGAPP_CORRELATION"] = $fdata;
//	MSGAPP_THROW_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MSGAPP_THROW_DATE";
	$fdata["GoodName"] = "MSGAPP_THROW_DATE";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","MSGAPP_THROW_DATE");
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

		$fdata["strField"] = "MSGAPP_THROW_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGAPP_THROW_DATE";

	
	
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




	$tdataMESSAGE_APPLICATION["MSGAPP_THROW_DATE"] = $fdata;
//	MSGAPP_CATCH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MSGAPP_CATCH_DATE";
	$fdata["GoodName"] = "MSGAPP_CATCH_DATE";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","MSGAPP_CATCH_DATE");
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

		$fdata["strField"] = "MSGAPP_CATCH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGAPP_CATCH_DATE";

	
	
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




	$tdataMESSAGE_APPLICATION["MSGAPP_CATCH_DATE"] = $fdata;
//	MSGAPP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MSGAPP_STATUS";
	$fdata["GoodName"] = "MSGAPP_STATUS";
	$fdata["ownerTable"] = "MESSAGE_APPLICATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_APPLICATION","MSGAPP_STATUS");
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

		$fdata["strField"] = "MSGAPP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGAPP_STATUS";

	
	
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




	$tdataMESSAGE_APPLICATION["MSGAPP_STATUS"] = $fdata;


$tables_data["MESSAGE_APPLICATION"]=&$tdataMESSAGE_APPLICATION;
$field_labels["MESSAGE_APPLICATION"] = &$fieldLabelsMESSAGE_APPLICATION;
$fieldToolTips["MESSAGE_APPLICATION"] = &$fieldToolTipsMESSAGE_APPLICATION;
$placeHolders["MESSAGE_APPLICATION"] = &$placeHoldersMESSAGE_APPLICATION;
$page_titles["MESSAGE_APPLICATION"] = &$pageTitlesMESSAGE_APPLICATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MESSAGE_APPLICATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MESSAGE_APPLICATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MESSAGE_APPLICATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MSGAPP_UID,  	APP_UID,  	PRJ_UID,  	EVN_UID_THROW,  	EVN_UID_CATCH,  	MSGAPP_VARIABLES,  	MSGAPP_CORRELATION,  	MSGAPP_THROW_DATE,  	MSGAPP_CATCH_DATE,  	MSGAPP_STATUS";
$proto0["m_strFrom"] = "FROM MESSAGE_APPLICATION";
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
	"m_strName" => "MSGAPP_UID",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto6["m_sql"] = "MSGAPP_UID";
$proto6["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto8["m_sql"] = "APP_UID";
$proto8["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto10["m_sql"] = "PRJ_UID";
$proto10["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID_THROW",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto12["m_sql"] = "EVN_UID_THROW";
$proto12["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID_CATCH",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto14["m_sql"] = "EVN_UID_CATCH";
$proto14["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGAPP_VARIABLES",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto16["m_sql"] = "MSGAPP_VARIABLES";
$proto16["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGAPP_CORRELATION",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto18["m_sql"] = "MSGAPP_CORRELATION";
$proto18["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGAPP_THROW_DATE",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto20["m_sql"] = "MSGAPP_THROW_DATE";
$proto20["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGAPP_CATCH_DATE",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto22["m_sql"] = "MSGAPP_CATCH_DATE";
$proto22["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGAPP_STATUS",
	"m_strTable" => "MESSAGE_APPLICATION",
	"m_srcTableName" => "MESSAGE_APPLICATION"
));

$proto24["m_sql"] = "MSGAPP_STATUS";
$proto24["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "MESSAGE_APPLICATION";
$proto27["m_srcTableName"] = "MESSAGE_APPLICATION";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "MSGAPP_UID";
$proto27["m_columns"][] = "APP_UID";
$proto27["m_columns"][] = "PRJ_UID";
$proto27["m_columns"][] = "EVN_UID_THROW";
$proto27["m_columns"][] = "EVN_UID_CATCH";
$proto27["m_columns"][] = "MSGAPP_VARIABLES";
$proto27["m_columns"][] = "MSGAPP_CORRELATION";
$proto27["m_columns"][] = "MSGAPP_THROW_DATE";
$proto27["m_columns"][] = "MSGAPP_CATCH_DATE";
$proto27["m_columns"][] = "MSGAPP_STATUS";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "MESSAGE_APPLICATION";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "MESSAGE_APPLICATION";
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
$proto0["m_srcTableName"]="MESSAGE_APPLICATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MESSAGE_APPLICATION = createSqlQuery_MESSAGE_APPLICATION();


	
						;

										

$tdataMESSAGE_APPLICATION[".sqlquery"] = $queryData_MESSAGE_APPLICATION;

$tableEvents["MESSAGE_APPLICATION"] = new eventsBase;
$tdataMESSAGE_APPLICATION[".hasEvents"] = false;

?>
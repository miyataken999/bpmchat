<?php
require_once(getabspath("classes/cipherer.php"));




$tdataWEB_ENTRY_EVENT = array();
	$tdataWEB_ENTRY_EVENT[".truncateText"] = true;
	$tdataWEB_ENTRY_EVENT[".NumberOfChars"] = 20;
	$tdataWEB_ENTRY_EVENT[".ShortName"] = "WEB_ENTRY_EVENT";
	$tdataWEB_ENTRY_EVENT[".OwnerID"] = "";
	$tdataWEB_ENTRY_EVENT[".OriginalTable"] = "WEB_ENTRY_EVENT";

//	field labels
$fieldLabelsWEB_ENTRY_EVENT = array();
$fieldToolTipsWEB_ENTRY_EVENT = array();
$pageTitlesWEB_ENTRY_EVENT = array();
$placeHoldersWEB_ENTRY_EVENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"] = array();
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"] = array();
	$placeHoldersWEB_ENTRY_EVENT["Japanese"] = array();
	$pageTitlesWEB_ENTRY_EVENT["Japanese"] = array();
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["WEE_UID"] = "WEBuid";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["WEE_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["WEE_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["PRJ_UID"] = "PRJUIDT";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["EVN_UID"] = "EVNUID";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["EVN_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["EVN_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["ACT_UID"] = "ACTUID";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["ACT_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["ACT_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["DYN_UID"] = "DYNUID";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["DYN_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["DYN_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["USR_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["USR_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["WEE_STATUS"] = "WEBステータス";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["WEE_STATUS"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["WEE_STATUS"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["WEE_WE_UID"] = "WEBWEUID";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["WEE_WE_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["WEE_WE_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["WEE_WE_TAS_UID"] = "WEBWEUID";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["WEE_WE_TAS_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["WEE_WE_TAS_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["WEE_TITLE"] = "WEE TITLE";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["WEE_TITLE"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["WEE_TITLE"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["Japanese"]["WEE_DESCRIPTION"] = "WEE DESCRIPTION";
	$fieldToolTipsWEB_ENTRY_EVENT["Japanese"]["WEE_DESCRIPTION"] = "";
	$placeHoldersWEB_ENTRY_EVENT["Japanese"]["WEE_DESCRIPTION"] = "";
	if (count($fieldToolTipsWEB_ENTRY_EVENT["Japanese"]))
		$tdataWEB_ENTRY_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsWEB_ENTRY_EVENT["English"] = array();
	$fieldToolTipsWEB_ENTRY_EVENT["English"] = array();
	$placeHoldersWEB_ENTRY_EVENT["English"] = array();
	$pageTitlesWEB_ENTRY_EVENT["English"] = array();
	$fieldLabelsWEB_ENTRY_EVENT["English"]["WEE_UID"] = "WEBuid";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["WEE_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["WEE_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["PRJ_UID"] = "PRJUIDT";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["PRJ_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["PRJ_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["EVN_UID"] = "EVNUID";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["EVN_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["EVN_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["ACT_UID"] = "ACTUID";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["ACT_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["ACT_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["DYN_UID"] = "DYNUID";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["DYN_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["DYN_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["USR_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["USR_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["WEE_STATUS"] = "WEBステータス";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["WEE_STATUS"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["WEE_STATUS"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["WEE_WE_UID"] = "WEBWEUID";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["WEE_WE_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["WEE_WE_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["WEE_WE_TAS_UID"] = "WEBWEUID";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["WEE_WE_TAS_UID"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["WEE_WE_TAS_UID"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["WEE_TITLE"] = "WEE TITLE";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["WEE_TITLE"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["WEE_TITLE"] = "";
	$fieldLabelsWEB_ENTRY_EVENT["English"]["WEE_DESCRIPTION"] = "WEE DESCRIPTION";
	$fieldToolTipsWEB_ENTRY_EVENT["English"]["WEE_DESCRIPTION"] = "";
	$placeHoldersWEB_ENTRY_EVENT["English"]["WEE_DESCRIPTION"] = "";
	if (count($fieldToolTipsWEB_ENTRY_EVENT["English"]))
		$tdataWEB_ENTRY_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsWEB_ENTRY_EVENT[""] = array();
	$fieldToolTipsWEB_ENTRY_EVENT[""] = array();
	$placeHoldersWEB_ENTRY_EVENT[""] = array();
	$pageTitlesWEB_ENTRY_EVENT[""] = array();
	if (count($fieldToolTipsWEB_ENTRY_EVENT[""]))
		$tdataWEB_ENTRY_EVENT[".isUseToolTips"] = true;
}


	$tdataWEB_ENTRY_EVENT[".NCSearch"] = true;



$tdataWEB_ENTRY_EVENT[".shortTableName"] = "WEB_ENTRY_EVENT";
$tdataWEB_ENTRY_EVENT[".nSecOptions"] = 0;
$tdataWEB_ENTRY_EVENT[".recsPerRowPrint"] = 1;
$tdataWEB_ENTRY_EVENT[".mainTableOwnerID"] = "";
$tdataWEB_ENTRY_EVENT[".moveNext"] = 0;
$tdataWEB_ENTRY_EVENT[".entityType"] = 0;

$tdataWEB_ENTRY_EVENT[".strOriginalTableName"] = "WEB_ENTRY_EVENT";

	



$tdataWEB_ENTRY_EVENT[".showAddInPopup"] = false;

$tdataWEB_ENTRY_EVENT[".showEditInPopup"] = false;

$tdataWEB_ENTRY_EVENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataWEB_ENTRY_EVENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataWEB_ENTRY_EVENT[".fieldsForRegister"] = array();
	
$tdataWEB_ENTRY_EVENT[".listAjax"] = false;

	$tdataWEB_ENTRY_EVENT[".audit"] = true;

	$tdataWEB_ENTRY_EVENT[".locking"] = false;

$tdataWEB_ENTRY_EVENT[".edit"] = true;
$tdataWEB_ENTRY_EVENT[".afterEditAction"] = 1;
$tdataWEB_ENTRY_EVENT[".closePopupAfterEdit"] = 1;
$tdataWEB_ENTRY_EVENT[".afterEditActionDetTable"] = "";

$tdataWEB_ENTRY_EVENT[".add"] = true;
$tdataWEB_ENTRY_EVENT[".afterAddAction"] = 1;
$tdataWEB_ENTRY_EVENT[".closePopupAfterAdd"] = 1;
$tdataWEB_ENTRY_EVENT[".afterAddActionDetTable"] = "";

$tdataWEB_ENTRY_EVENT[".list"] = true;

$tdataWEB_ENTRY_EVENT[".inlineEdit"] = true;


$tdataWEB_ENTRY_EVENT[".reorderRecordsByHeader"] = true;
$tdataWEB_ENTRY_EVENT[".createSortByDropdown"] = true;
$tdataWEB_ENTRY_EVENT[".strSortControlSettingsJSON"] = "";



$tdataWEB_ENTRY_EVENT[".inlineAdd"] = true;
$tdataWEB_ENTRY_EVENT[".view"] = true;

$tdataWEB_ENTRY_EVENT[".import"] = true;

$tdataWEB_ENTRY_EVENT[".exportTo"] = true;

$tdataWEB_ENTRY_EVENT[".printFriendly"] = true;

$tdataWEB_ENTRY_EVENT[".delete"] = true;

$tdataWEB_ENTRY_EVENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataWEB_ENTRY_EVENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataWEB_ENTRY_EVENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataWEB_ENTRY_EVENT[".searchSaving"] = false;
//

$tdataWEB_ENTRY_EVENT[".showSearchPanel"] = true;
		$tdataWEB_ENTRY_EVENT[".flexibleSearch"] = true;

$tdataWEB_ENTRY_EVENT[".isUseAjaxSuggest"] = true;

$tdataWEB_ENTRY_EVENT[".rowHighlite"] = true;



				

$tdataWEB_ENTRY_EVENT[".ajaxCodeSnippetAdded"] = false;

$tdataWEB_ENTRY_EVENT[".buttonsAdded"] = false;

$tdataWEB_ENTRY_EVENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataWEB_ENTRY_EVENT[".isUseTimeForSearch"] = false;





$tdataWEB_ENTRY_EVENT[".allSearchFields"] = array();
$tdataWEB_ENTRY_EVENT[".filterFields"] = array();
$tdataWEB_ENTRY_EVENT[".requiredSearchFields"] = array();

$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "WEE_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "PRJ_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "EVN_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "ACT_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "DYN_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "USR_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "WEE_STATUS";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "WEE_WE_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "WEE_WE_TAS_UID";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "WEE_TITLE";
	$tdataWEB_ENTRY_EVENT[".allSearchFields"][] = "WEE_DESCRIPTION";
	

$tdataWEB_ENTRY_EVENT[".googleLikeFields"] = array();
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".googleLikeFields"][] = "WEE_DESCRIPTION";


$tdataWEB_ENTRY_EVENT[".advSearchFields"] = array();
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".advSearchFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".tableType"] = "list";

$tdataWEB_ENTRY_EVENT[".printerPageOrientation"] = 0;
$tdataWEB_ENTRY_EVENT[".nPrinterPageScale"] = 100;

$tdataWEB_ENTRY_EVENT[".nPrinterSplitRecords"] = 40;

$tdataWEB_ENTRY_EVENT[".nPrinterPDFSplitRecords"] = 40;



$tdataWEB_ENTRY_EVENT[".geocodingEnabled"] = false;





$tdataWEB_ENTRY_EVENT[".listGridLayout"] = 3;


$tdataWEB_ENTRY_EVENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataWEB_ENTRY_EVENT[".pageSize"] = 20;

$tdataWEB_ENTRY_EVENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataWEB_ENTRY_EVENT[".strOrderBy"] = $tstrOrderBy;

$tdataWEB_ENTRY_EVENT[".orderindexes"] = array();

$tdataWEB_ENTRY_EVENT[".sqlHead"] = "SELECT WEE_UID,  	PRJ_UID,  	EVN_UID,  	ACT_UID,  	DYN_UID,  	USR_UID,  	WEE_STATUS,  	WEE_WE_UID,  	WEE_WE_TAS_UID,  	WEE_TITLE,  	WEE_DESCRIPTION";
$tdataWEB_ENTRY_EVENT[".sqlFrom"] = "FROM WEB_ENTRY_EVENT";
$tdataWEB_ENTRY_EVENT[".sqlWhereExpr"] = "";
$tdataWEB_ENTRY_EVENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataWEB_ENTRY_EVENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataWEB_ENTRY_EVENT[".arrGroupsPerPage"] = $arrGPP;

$tdataWEB_ENTRY_EVENT[".highlightSearchResults"] = true;

$tableKeysWEB_ENTRY_EVENT = array();
$tableKeysWEB_ENTRY_EVENT[] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".Keys"] = $tableKeysWEB_ENTRY_EVENT;

$tdataWEB_ENTRY_EVENT[".listFields"] = array();
$tdataWEB_ENTRY_EVENT[".listFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".listFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".hideMobileList"] = array();


$tdataWEB_ENTRY_EVENT[".viewFields"] = array();
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".viewFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".addFields"] = array();
$tdataWEB_ENTRY_EVENT[".addFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".addFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".masterListFields"] = array();
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".masterListFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".inlineAddFields"] = array();
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".inlineAddFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".editFields"] = array();
$tdataWEB_ENTRY_EVENT[".editFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".editFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".inlineEditFields"] = array();
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".inlineEditFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".updateSelectedFields"] = array();
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".updateSelectedFields"][] = "WEE_DESCRIPTION";


$tdataWEB_ENTRY_EVENT[".exportFields"] = array();
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".exportFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".importFields"] = array();
$tdataWEB_ENTRY_EVENT[".importFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".importFields"][] = "WEE_DESCRIPTION";

$tdataWEB_ENTRY_EVENT[".printFields"] = array();
$tdataWEB_ENTRY_EVENT[".printFields"][] = "WEE_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "PRJ_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "EVN_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "ACT_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "DYN_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "USR_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "WEE_STATUS";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "WEE_WE_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "WEE_WE_TAS_UID";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "WEE_TITLE";
$tdataWEB_ENTRY_EVENT[".printFields"][] = "WEE_DESCRIPTION";

//	WEE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "WEE_UID";
	$fdata["GoodName"] = "WEE_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","WEE_UID");
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

		$fdata["strField"] = "WEE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEE_UID";

	
	
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




	$tdataWEB_ENTRY_EVENT["WEE_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","PRJ_UID");
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




	$tdataWEB_ENTRY_EVENT["PRJ_UID"] = $fdata;
//	EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EVN_UID";
	$fdata["GoodName"] = "EVN_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","EVN_UID");
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




	$tdataWEB_ENTRY_EVENT["EVN_UID"] = $fdata;
//	ACT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ACT_UID";
	$fdata["GoodName"] = "ACT_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","ACT_UID");
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




	$tdataWEB_ENTRY_EVENT["ACT_UID"] = $fdata;
//	DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DYN_UID";
	$fdata["GoodName"] = "DYN_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","DYN_UID");
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

		$fdata["strField"] = "DYN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_UID";

	
	
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




	$tdataWEB_ENTRY_EVENT["DYN_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","USR_UID");
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




	$tdataWEB_ENTRY_EVENT["USR_UID"] = $fdata;
//	WEE_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WEE_STATUS";
	$fdata["GoodName"] = "WEE_STATUS";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","WEE_STATUS");
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

		$fdata["strField"] = "WEE_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEE_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataWEB_ENTRY_EVENT["WEE_STATUS"] = $fdata;
//	WEE_WE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "WEE_WE_UID";
	$fdata["GoodName"] = "WEE_WE_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","WEE_WE_UID");
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

		$fdata["strField"] = "WEE_WE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEE_WE_UID";

	
	
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




	$tdataWEB_ENTRY_EVENT["WEE_WE_UID"] = $fdata;
//	WEE_WE_TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WEE_WE_TAS_UID";
	$fdata["GoodName"] = "WEE_WE_TAS_UID";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","WEE_WE_TAS_UID");
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

		$fdata["strField"] = "WEE_WE_TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEE_WE_TAS_UID";

	
	
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




	$tdataWEB_ENTRY_EVENT["WEE_WE_TAS_UID"] = $fdata;
//	WEE_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WEE_TITLE";
	$fdata["GoodName"] = "WEE_TITLE";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","WEE_TITLE");
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

		$fdata["strField"] = "WEE_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEE_TITLE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataWEB_ENTRY_EVENT["WEE_TITLE"] = $fdata;
//	WEE_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "WEE_DESCRIPTION";
	$fdata["GoodName"] = "WEE_DESCRIPTION";
	$fdata["ownerTable"] = "WEB_ENTRY_EVENT";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY_EVENT","WEE_DESCRIPTION");
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

		$fdata["strField"] = "WEE_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WEE_DESCRIPTION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataWEB_ENTRY_EVENT["WEE_DESCRIPTION"] = $fdata;


$tables_data["WEB_ENTRY_EVENT"]=&$tdataWEB_ENTRY_EVENT;
$field_labels["WEB_ENTRY_EVENT"] = &$fieldLabelsWEB_ENTRY_EVENT;
$fieldToolTips["WEB_ENTRY_EVENT"] = &$fieldToolTipsWEB_ENTRY_EVENT;
$placeHolders["WEB_ENTRY_EVENT"] = &$placeHoldersWEB_ENTRY_EVENT;
$page_titles["WEB_ENTRY_EVENT"] = &$pageTitlesWEB_ENTRY_EVENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["WEB_ENTRY_EVENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["WEB_ENTRY_EVENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_WEB_ENTRY_EVENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "WEE_UID,  	PRJ_UID,  	EVN_UID,  	ACT_UID,  	DYN_UID,  	USR_UID,  	WEE_STATUS,  	WEE_WE_UID,  	WEE_WE_TAS_UID,  	WEE_TITLE,  	WEE_DESCRIPTION";
$proto0["m_strFrom"] = "FROM WEB_ENTRY_EVENT";
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
	"m_strName" => "WEE_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto6["m_sql"] = "WEE_UID";
$proto6["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto10["m_sql"] = "EVN_UID";
$proto10["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto12["m_sql"] = "ACT_UID";
$proto12["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto14["m_sql"] = "DYN_UID";
$proto14["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto16["m_sql"] = "USR_UID";
$proto16["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "WEE_STATUS",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto18["m_sql"] = "WEE_STATUS";
$proto18["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "WEE_WE_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto20["m_sql"] = "WEE_WE_UID";
$proto20["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WEE_WE_TAS_UID",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto22["m_sql"] = "WEE_WE_TAS_UID";
$proto22["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WEE_TITLE",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto24["m_sql"] = "WEE_TITLE";
$proto24["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "WEE_DESCRIPTION",
	"m_strTable" => "WEB_ENTRY_EVENT",
	"m_srcTableName" => "WEB_ENTRY_EVENT"
));

$proto26["m_sql"] = "WEE_DESCRIPTION";
$proto26["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "WEB_ENTRY_EVENT";
$proto29["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "WEE_UID";
$proto29["m_columns"][] = "PRJ_UID";
$proto29["m_columns"][] = "EVN_UID";
$proto29["m_columns"][] = "ACT_UID";
$proto29["m_columns"][] = "DYN_UID";
$proto29["m_columns"][] = "USR_UID";
$proto29["m_columns"][] = "WEE_STATUS";
$proto29["m_columns"][] = "WEE_WE_UID";
$proto29["m_columns"][] = "WEE_WE_TAS_UID";
$proto29["m_columns"][] = "WEE_TITLE";
$proto29["m_columns"][] = "WEE_DESCRIPTION";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "WEB_ENTRY_EVENT";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "WEB_ENTRY_EVENT";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="WEB_ENTRY_EVENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_WEB_ENTRY_EVENT = createSqlQuery_WEB_ENTRY_EVENT();


	
						;

											

$tdataWEB_ENTRY_EVENT[".sqlquery"] = $queryData_WEB_ENTRY_EVENT;

$tableEvents["WEB_ENTRY_EVENT"] = new eventsBase;
$tdataWEB_ENTRY_EVENT[".hasEvents"] = false;

?>
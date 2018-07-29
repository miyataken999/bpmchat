<?php
require_once(getabspath("classes/cipherer.php"));




$tdataWEB_ENTRY = array();
	$tdataWEB_ENTRY[".truncateText"] = true;
	$tdataWEB_ENTRY[".NumberOfChars"] = 20;
	$tdataWEB_ENTRY[".ShortName"] = "WEB_ENTRY";
	$tdataWEB_ENTRY[".OwnerID"] = "";
	$tdataWEB_ENTRY[".OriginalTable"] = "WEB_ENTRY";

//	field labels
$fieldLabelsWEB_ENTRY = array();
$fieldToolTipsWEB_ENTRY = array();
$pageTitlesWEB_ENTRY = array();
$placeHoldersWEB_ENTRY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsWEB_ENTRY["Japanese"] = array();
	$fieldToolTipsWEB_ENTRY["Japanese"] = array();
	$placeHoldersWEB_ENTRY["Japanese"] = array();
	$pageTitlesWEB_ENTRY["Japanese"] = array();
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_UID"] = "私たちは、UID";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsWEB_ENTRY["Japanese"]["PRO_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsWEB_ENTRY["Japanese"]["TAS_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["TAS_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsWEB_ENTRY["Japanese"]["DYN_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["DYN_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsWEB_ENTRY["Japanese"]["USR_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["USR_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_METHOD"] = "我々の方法";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_METHOD"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_METHOD"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_INPUT_DOCUMENT_ACCESS"] = "我々は、入力された文書へのアクセス";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_INPUT_DOCUMENT_ACCESS"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_INPUT_DOCUMENT_ACCESS"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_DATA"] = "我々のデータ";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_DATA"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_DATA"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_CREATE_USR_UID"] = "私たちは、USR UIDを作成します";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_CREATE_USR_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_CREATE_USR_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_UPDATE_USR_UID"] = "私たちは、USRのuidを更新します";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_UPDATE_USR_UID"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_UPDATE_USR_UID"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_CREATE_DATE"] = "我々は、日付を作成します";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_CREATE_DATE"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_CREATE_DATE"] = "";
	$fieldLabelsWEB_ENTRY["Japanese"]["WE_UPDATE_DATE"] = "我々は、日付を更新します";
	$fieldToolTipsWEB_ENTRY["Japanese"]["WE_UPDATE_DATE"] = "";
	$placeHoldersWEB_ENTRY["Japanese"]["WE_UPDATE_DATE"] = "";
	if (count($fieldToolTipsWEB_ENTRY["Japanese"]))
		$tdataWEB_ENTRY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsWEB_ENTRY["English"] = array();
	$fieldToolTipsWEB_ENTRY["English"] = array();
	$placeHoldersWEB_ENTRY["English"] = array();
	$pageTitlesWEB_ENTRY["English"] = array();
	$fieldLabelsWEB_ENTRY["English"]["WE_UID"] = "私たちは、UID";
	$fieldToolTipsWEB_ENTRY["English"]["WE_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsWEB_ENTRY["English"]["PRO_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["PRO_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsWEB_ENTRY["English"]["TAS_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["TAS_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsWEB_ENTRY["English"]["DYN_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["DYN_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsWEB_ENTRY["English"]["USR_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["USR_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_METHOD"] = "我々の方法";
	$fieldToolTipsWEB_ENTRY["English"]["WE_METHOD"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_METHOD"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_INPUT_DOCUMENT_ACCESS"] = "我々は、入力された文書へのアクセス";
	$fieldToolTipsWEB_ENTRY["English"]["WE_INPUT_DOCUMENT_ACCESS"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_INPUT_DOCUMENT_ACCESS"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_DATA"] = "我々のデータ";
	$fieldToolTipsWEB_ENTRY["English"]["WE_DATA"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_DATA"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_CREATE_USR_UID"] = "私たちは、USR UIDを作成します";
	$fieldToolTipsWEB_ENTRY["English"]["WE_CREATE_USR_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_CREATE_USR_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_UPDATE_USR_UID"] = "私たちは、USRのuidを更新します";
	$fieldToolTipsWEB_ENTRY["English"]["WE_UPDATE_USR_UID"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_UPDATE_USR_UID"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_CREATE_DATE"] = "我々は、日付を作成します";
	$fieldToolTipsWEB_ENTRY["English"]["WE_CREATE_DATE"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_CREATE_DATE"] = "";
	$fieldLabelsWEB_ENTRY["English"]["WE_UPDATE_DATE"] = "我々は、日付を更新します";
	$fieldToolTipsWEB_ENTRY["English"]["WE_UPDATE_DATE"] = "";
	$placeHoldersWEB_ENTRY["English"]["WE_UPDATE_DATE"] = "";
	if (count($fieldToolTipsWEB_ENTRY["English"]))
		$tdataWEB_ENTRY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsWEB_ENTRY[""] = array();
	$fieldToolTipsWEB_ENTRY[""] = array();
	$placeHoldersWEB_ENTRY[""] = array();
	$pageTitlesWEB_ENTRY[""] = array();
	if (count($fieldToolTipsWEB_ENTRY[""]))
		$tdataWEB_ENTRY[".isUseToolTips"] = true;
}


	$tdataWEB_ENTRY[".NCSearch"] = true;



$tdataWEB_ENTRY[".shortTableName"] = "WEB_ENTRY";
$tdataWEB_ENTRY[".nSecOptions"] = 0;
$tdataWEB_ENTRY[".recsPerRowPrint"] = 1;
$tdataWEB_ENTRY[".mainTableOwnerID"] = "";
$tdataWEB_ENTRY[".moveNext"] = 0;
$tdataWEB_ENTRY[".entityType"] = 0;

$tdataWEB_ENTRY[".strOriginalTableName"] = "WEB_ENTRY";

	



$tdataWEB_ENTRY[".showAddInPopup"] = false;

$tdataWEB_ENTRY[".showEditInPopup"] = false;

$tdataWEB_ENTRY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataWEB_ENTRY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataWEB_ENTRY[".fieldsForRegister"] = array();
	
$tdataWEB_ENTRY[".listAjax"] = false;

	$tdataWEB_ENTRY[".audit"] = true;

	$tdataWEB_ENTRY[".locking"] = false;

$tdataWEB_ENTRY[".edit"] = true;
$tdataWEB_ENTRY[".afterEditAction"] = 1;
$tdataWEB_ENTRY[".closePopupAfterEdit"] = 1;
$tdataWEB_ENTRY[".afterEditActionDetTable"] = "";

$tdataWEB_ENTRY[".add"] = true;
$tdataWEB_ENTRY[".afterAddAction"] = 1;
$tdataWEB_ENTRY[".closePopupAfterAdd"] = 1;
$tdataWEB_ENTRY[".afterAddActionDetTable"] = "";

$tdataWEB_ENTRY[".list"] = true;

$tdataWEB_ENTRY[".inlineEdit"] = true;


$tdataWEB_ENTRY[".reorderRecordsByHeader"] = true;
$tdataWEB_ENTRY[".createSortByDropdown"] = true;
$tdataWEB_ENTRY[".strSortControlSettingsJSON"] = "";



$tdataWEB_ENTRY[".inlineAdd"] = true;
$tdataWEB_ENTRY[".view"] = true;

$tdataWEB_ENTRY[".import"] = true;

$tdataWEB_ENTRY[".exportTo"] = true;

$tdataWEB_ENTRY[".printFriendly"] = true;

$tdataWEB_ENTRY[".delete"] = true;

$tdataWEB_ENTRY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataWEB_ENTRY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataWEB_ENTRY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataWEB_ENTRY[".searchSaving"] = false;
//

$tdataWEB_ENTRY[".showSearchPanel"] = true;
		$tdataWEB_ENTRY[".flexibleSearch"] = true;

$tdataWEB_ENTRY[".isUseAjaxSuggest"] = true;

$tdataWEB_ENTRY[".rowHighlite"] = true;



				

$tdataWEB_ENTRY[".ajaxCodeSnippetAdded"] = false;

$tdataWEB_ENTRY[".buttonsAdded"] = false;

$tdataWEB_ENTRY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataWEB_ENTRY[".isUseTimeForSearch"] = false;





$tdataWEB_ENTRY[".allSearchFields"] = array();
$tdataWEB_ENTRY[".filterFields"] = array();
$tdataWEB_ENTRY[".requiredSearchFields"] = array();

$tdataWEB_ENTRY[".allSearchFields"][] = "WE_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "PRO_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "TAS_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "DYN_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "USR_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_METHOD";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_DATA";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_CREATE_USR_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_UPDATE_USR_UID";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_CREATE_DATE";
	$tdataWEB_ENTRY[".allSearchFields"][] = "WE_UPDATE_DATE";
	

$tdataWEB_ENTRY[".googleLikeFields"] = array();
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "USR_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".googleLikeFields"][] = "WE_UPDATE_DATE";


$tdataWEB_ENTRY[".advSearchFields"] = array();
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "USR_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".advSearchFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".tableType"] = "list";

$tdataWEB_ENTRY[".printerPageOrientation"] = 0;
$tdataWEB_ENTRY[".nPrinterPageScale"] = 100;

$tdataWEB_ENTRY[".nPrinterSplitRecords"] = 40;

$tdataWEB_ENTRY[".nPrinterPDFSplitRecords"] = 40;



$tdataWEB_ENTRY[".geocodingEnabled"] = false;





$tdataWEB_ENTRY[".listGridLayout"] = 3;


$tdataWEB_ENTRY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataWEB_ENTRY[".pageSize"] = 20;

$tdataWEB_ENTRY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataWEB_ENTRY[".strOrderBy"] = $tstrOrderBy;

$tdataWEB_ENTRY[".orderindexes"] = array();

$tdataWEB_ENTRY[".sqlHead"] = "SELECT WE_UID,  	PRO_UID,  	TAS_UID,  	DYN_UID,  	USR_UID,  	WE_METHOD,  	WE_INPUT_DOCUMENT_ACCESS,  	WE_DATA,  	WE_CREATE_USR_UID,  	WE_UPDATE_USR_UID,  	WE_CREATE_DATE,  	WE_UPDATE_DATE";
$tdataWEB_ENTRY[".sqlFrom"] = "FROM WEB_ENTRY";
$tdataWEB_ENTRY[".sqlWhereExpr"] = "";
$tdataWEB_ENTRY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataWEB_ENTRY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataWEB_ENTRY[".arrGroupsPerPage"] = $arrGPP;

$tdataWEB_ENTRY[".highlightSearchResults"] = true;

$tableKeysWEB_ENTRY = array();
$tableKeysWEB_ENTRY[] = "WE_UID";
$tdataWEB_ENTRY[".Keys"] = $tableKeysWEB_ENTRY;

$tdataWEB_ENTRY[".listFields"] = array();
$tdataWEB_ENTRY[".listFields"][] = "WE_UID";
$tdataWEB_ENTRY[".listFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".listFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".listFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".listFields"][] = "USR_UID";
$tdataWEB_ENTRY[".listFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".listFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".listFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".listFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".listFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".listFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".listFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".hideMobileList"] = array();


$tdataWEB_ENTRY[".viewFields"] = array();
$tdataWEB_ENTRY[".viewFields"][] = "WE_UID";
$tdataWEB_ENTRY[".viewFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".viewFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".viewFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".viewFields"][] = "USR_UID";
$tdataWEB_ENTRY[".viewFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".viewFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".viewFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".viewFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".viewFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".viewFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".viewFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".addFields"] = array();
$tdataWEB_ENTRY[".addFields"][] = "WE_UID";
$tdataWEB_ENTRY[".addFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".addFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".addFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".addFields"][] = "USR_UID";
$tdataWEB_ENTRY[".addFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".addFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".addFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".addFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".addFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".addFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".addFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".masterListFields"] = array();
$tdataWEB_ENTRY[".masterListFields"][] = "WE_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "USR_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".masterListFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".inlineAddFields"] = array();
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "USR_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".inlineAddFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".editFields"] = array();
$tdataWEB_ENTRY[".editFields"][] = "WE_UID";
$tdataWEB_ENTRY[".editFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".editFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".editFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".editFields"][] = "USR_UID";
$tdataWEB_ENTRY[".editFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".editFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".editFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".editFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".editFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".editFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".editFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".inlineEditFields"] = array();
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "USR_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".inlineEditFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".updateSelectedFields"] = array();
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "USR_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".updateSelectedFields"][] = "WE_UPDATE_DATE";


$tdataWEB_ENTRY[".exportFields"] = array();
$tdataWEB_ENTRY[".exportFields"][] = "WE_UID";
$tdataWEB_ENTRY[".exportFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".exportFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".exportFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".exportFields"][] = "USR_UID";
$tdataWEB_ENTRY[".exportFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".exportFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".exportFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".exportFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".exportFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".exportFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".exportFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".importFields"] = array();
$tdataWEB_ENTRY[".importFields"][] = "WE_UID";
$tdataWEB_ENTRY[".importFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".importFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".importFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".importFields"][] = "USR_UID";
$tdataWEB_ENTRY[".importFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".importFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".importFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".importFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".importFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".importFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".importFields"][] = "WE_UPDATE_DATE";

$tdataWEB_ENTRY[".printFields"] = array();
$tdataWEB_ENTRY[".printFields"][] = "WE_UID";
$tdataWEB_ENTRY[".printFields"][] = "PRO_UID";
$tdataWEB_ENTRY[".printFields"][] = "TAS_UID";
$tdataWEB_ENTRY[".printFields"][] = "DYN_UID";
$tdataWEB_ENTRY[".printFields"][] = "USR_UID";
$tdataWEB_ENTRY[".printFields"][] = "WE_METHOD";
$tdataWEB_ENTRY[".printFields"][] = "WE_INPUT_DOCUMENT_ACCESS";
$tdataWEB_ENTRY[".printFields"][] = "WE_DATA";
$tdataWEB_ENTRY[".printFields"][] = "WE_CREATE_USR_UID";
$tdataWEB_ENTRY[".printFields"][] = "WE_UPDATE_USR_UID";
$tdataWEB_ENTRY[".printFields"][] = "WE_CREATE_DATE";
$tdataWEB_ENTRY[".printFields"][] = "WE_UPDATE_DATE";

//	WE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "WE_UID";
	$fdata["GoodName"] = "WE_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_UID");
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

		$fdata["strField"] = "WE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_UID";

	
	
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




	$tdataWEB_ENTRY["WE_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","PRO_UID");
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




	$tdataWEB_ENTRY["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","TAS_UID");
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




	$tdataWEB_ENTRY["TAS_UID"] = $fdata;
//	DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DYN_UID";
	$fdata["GoodName"] = "DYN_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","DYN_UID");
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




	$tdataWEB_ENTRY["DYN_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","USR_UID");
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




	$tdataWEB_ENTRY["USR_UID"] = $fdata;
//	WE_METHOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WE_METHOD";
	$fdata["GoodName"] = "WE_METHOD";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_METHOD");
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

		$fdata["strField"] = "WE_METHOD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_METHOD";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataWEB_ENTRY["WE_METHOD"] = $fdata;
//	WE_INPUT_DOCUMENT_ACCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WE_INPUT_DOCUMENT_ACCESS";
	$fdata["GoodName"] = "WE_INPUT_DOCUMENT_ACCESS";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_INPUT_DOCUMENT_ACCESS");
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

		$fdata["strField"] = "WE_INPUT_DOCUMENT_ACCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_INPUT_DOCUMENT_ACCESS";

	
	
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




	$tdataWEB_ENTRY["WE_INPUT_DOCUMENT_ACCESS"] = $fdata;
//	WE_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "WE_DATA";
	$fdata["GoodName"] = "WE_DATA";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_DATA");
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

		$fdata["strField"] = "WE_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_DATA";

	
	
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




	$tdataWEB_ENTRY["WE_DATA"] = $fdata;
//	WE_CREATE_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "WE_CREATE_USR_UID";
	$fdata["GoodName"] = "WE_CREATE_USR_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_CREATE_USR_UID");
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

		$fdata["strField"] = "WE_CREATE_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_CREATE_USR_UID";

	
	
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




	$tdataWEB_ENTRY["WE_CREATE_USR_UID"] = $fdata;
//	WE_UPDATE_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WE_UPDATE_USR_UID";
	$fdata["GoodName"] = "WE_UPDATE_USR_UID";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_UPDATE_USR_UID");
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

		$fdata["strField"] = "WE_UPDATE_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_UPDATE_USR_UID";

	
	
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




	$tdataWEB_ENTRY["WE_UPDATE_USR_UID"] = $fdata;
//	WE_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "WE_CREATE_DATE";
	$fdata["GoodName"] = "WE_CREATE_DATE";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_CREATE_DATE");
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

		$fdata["strField"] = "WE_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_CREATE_DATE";

	
	
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




	$tdataWEB_ENTRY["WE_CREATE_DATE"] = $fdata;
//	WE_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "WE_UPDATE_DATE";
	$fdata["GoodName"] = "WE_UPDATE_DATE";
	$fdata["ownerTable"] = "WEB_ENTRY";
	$fdata["Label"] = GetFieldLabel("WEB_ENTRY","WE_UPDATE_DATE");
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

		$fdata["strField"] = "WE_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WE_UPDATE_DATE";

	
	
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




	$tdataWEB_ENTRY["WE_UPDATE_DATE"] = $fdata;


$tables_data["WEB_ENTRY"]=&$tdataWEB_ENTRY;
$field_labels["WEB_ENTRY"] = &$fieldLabelsWEB_ENTRY;
$fieldToolTips["WEB_ENTRY"] = &$fieldToolTipsWEB_ENTRY;
$placeHolders["WEB_ENTRY"] = &$placeHoldersWEB_ENTRY;
$page_titles["WEB_ENTRY"] = &$pageTitlesWEB_ENTRY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["WEB_ENTRY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["WEB_ENTRY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_WEB_ENTRY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "WE_UID,  	PRO_UID,  	TAS_UID,  	DYN_UID,  	USR_UID,  	WE_METHOD,  	WE_INPUT_DOCUMENT_ACCESS,  	WE_DATA,  	WE_CREATE_USR_UID,  	WE_UPDATE_USR_UID,  	WE_CREATE_DATE,  	WE_UPDATE_DATE";
$proto0["m_strFrom"] = "FROM WEB_ENTRY";
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
	"m_strName" => "WE_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto6["m_sql"] = "WE_UID";
$proto6["m_srcTableName"] = "WEB_ENTRY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "WEB_ENTRY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "WEB_ENTRY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto12["m_sql"] = "DYN_UID";
$proto12["m_srcTableName"] = "WEB_ENTRY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto14["m_sql"] = "USR_UID";
$proto14["m_srcTableName"] = "WEB_ENTRY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_METHOD",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto16["m_sql"] = "WE_METHOD";
$proto16["m_srcTableName"] = "WEB_ENTRY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_INPUT_DOCUMENT_ACCESS",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto18["m_sql"] = "WE_INPUT_DOCUMENT_ACCESS";
$proto18["m_srcTableName"] = "WEB_ENTRY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_DATA",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto20["m_sql"] = "WE_DATA";
$proto20["m_srcTableName"] = "WEB_ENTRY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_CREATE_USR_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto22["m_sql"] = "WE_CREATE_USR_UID";
$proto22["m_srcTableName"] = "WEB_ENTRY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_UPDATE_USR_UID",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto24["m_sql"] = "WE_UPDATE_USR_UID";
$proto24["m_srcTableName"] = "WEB_ENTRY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_CREATE_DATE",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto26["m_sql"] = "WE_CREATE_DATE";
$proto26["m_srcTableName"] = "WEB_ENTRY";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "WE_UPDATE_DATE",
	"m_strTable" => "WEB_ENTRY",
	"m_srcTableName" => "WEB_ENTRY"
));

$proto28["m_sql"] = "WE_UPDATE_DATE";
$proto28["m_srcTableName"] = "WEB_ENTRY";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "WEB_ENTRY";
$proto31["m_srcTableName"] = "WEB_ENTRY";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "WE_UID";
$proto31["m_columns"][] = "PRO_UID";
$proto31["m_columns"][] = "TAS_UID";
$proto31["m_columns"][] = "DYN_UID";
$proto31["m_columns"][] = "USR_UID";
$proto31["m_columns"][] = "WE_METHOD";
$proto31["m_columns"][] = "WE_INPUT_DOCUMENT_ACCESS";
$proto31["m_columns"][] = "WE_DATA";
$proto31["m_columns"][] = "WE_CREATE_USR_UID";
$proto31["m_columns"][] = "WE_UPDATE_USR_UID";
$proto31["m_columns"][] = "WE_CREATE_DATE";
$proto31["m_columns"][] = "WE_UPDATE_DATE";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "WEB_ENTRY";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "WEB_ENTRY";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="WEB_ENTRY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_WEB_ENTRY = createSqlQuery_WEB_ENTRY();


	
						;

												

$tdataWEB_ENTRY[".sqlquery"] = $queryData_WEB_ENTRY;

$tableEvents["WEB_ENTRY"] = new eventsBase;
$tdataWEB_ENTRY[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLICENSE_MANAGER = array();
	$tdataLICENSE_MANAGER[".truncateText"] = true;
	$tdataLICENSE_MANAGER[".NumberOfChars"] = 20;
	$tdataLICENSE_MANAGER[".ShortName"] = "LICENSE_MANAGER";
	$tdataLICENSE_MANAGER[".OwnerID"] = "";
	$tdataLICENSE_MANAGER[".OriginalTable"] = "LICENSE_MANAGER";

//	field labels
$fieldLabelsLICENSE_MANAGER = array();
$fieldToolTipsLICENSE_MANAGER = array();
$pageTitlesLICENSE_MANAGER = array();
$placeHoldersLICENSE_MANAGER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLICENSE_MANAGER["Japanese"] = array();
	$fieldToolTipsLICENSE_MANAGER["Japanese"] = array();
	$placeHoldersLICENSE_MANAGER["Japanese"] = array();
	$pageTitlesLICENSE_MANAGER["Japanese"] = array();
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_UID"] = "ライセンスUID";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_UID"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_UID"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_USER"] = "ライセンスユーザー";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_USER"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_USER"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_START"] = "ライセンス開始";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_START"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_START"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_END"] = "ライセンス終了";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_END"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_END"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_SPAN"] = "ライセンススパン";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_SPAN"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_SPAN"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_STATUS"] = "ライセンスの状態";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_STATUS"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_STATUS"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_DATA"] = "ライセンスデータ";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_DATA"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_DATA"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_PATH"] = "ライセンスパス";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_PATH"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_PATH"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_WORKSPACE"] = "ライセンスワークスペース";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_WORKSPACE"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_WORKSPACE"] = "";
	$fieldLabelsLICENSE_MANAGER["Japanese"]["LICENSE_TYPE"] = "ライセンスの種類";
	$fieldToolTipsLICENSE_MANAGER["Japanese"]["LICENSE_TYPE"] = "";
	$placeHoldersLICENSE_MANAGER["Japanese"]["LICENSE_TYPE"] = "";
	if (count($fieldToolTipsLICENSE_MANAGER["Japanese"]))
		$tdataLICENSE_MANAGER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLICENSE_MANAGER["English"] = array();
	$fieldToolTipsLICENSE_MANAGER["English"] = array();
	$placeHoldersLICENSE_MANAGER["English"] = array();
	$pageTitlesLICENSE_MANAGER["English"] = array();
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_UID"] = "ライセンスUID";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_UID"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_UID"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_USER"] = "ライセンスユーザー";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_USER"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_USER"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_START"] = "ライセンス開始";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_START"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_START"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_END"] = "ライセンス終了";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_END"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_END"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_SPAN"] = "ライセンススパン";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_SPAN"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_SPAN"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_STATUS"] = "ライセンスの状態";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_STATUS"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_STATUS"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_DATA"] = "ライセンスデータ";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_DATA"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_DATA"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_PATH"] = "ライセンスパス";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_PATH"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_PATH"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_WORKSPACE"] = "ライセンスワークスペース";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_WORKSPACE"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_WORKSPACE"] = "";
	$fieldLabelsLICENSE_MANAGER["English"]["LICENSE_TYPE"] = "ライセンスの種類";
	$fieldToolTipsLICENSE_MANAGER["English"]["LICENSE_TYPE"] = "";
	$placeHoldersLICENSE_MANAGER["English"]["LICENSE_TYPE"] = "";
	if (count($fieldToolTipsLICENSE_MANAGER["English"]))
		$tdataLICENSE_MANAGER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLICENSE_MANAGER[""] = array();
	$fieldToolTipsLICENSE_MANAGER[""] = array();
	$placeHoldersLICENSE_MANAGER[""] = array();
	$pageTitlesLICENSE_MANAGER[""] = array();
	if (count($fieldToolTipsLICENSE_MANAGER[""]))
		$tdataLICENSE_MANAGER[".isUseToolTips"] = true;
}


	$tdataLICENSE_MANAGER[".NCSearch"] = true;



$tdataLICENSE_MANAGER[".shortTableName"] = "LICENSE_MANAGER";
$tdataLICENSE_MANAGER[".nSecOptions"] = 0;
$tdataLICENSE_MANAGER[".recsPerRowPrint"] = 1;
$tdataLICENSE_MANAGER[".mainTableOwnerID"] = "";
$tdataLICENSE_MANAGER[".moveNext"] = 0;
$tdataLICENSE_MANAGER[".entityType"] = 0;

$tdataLICENSE_MANAGER[".strOriginalTableName"] = "LICENSE_MANAGER";

	



$tdataLICENSE_MANAGER[".showAddInPopup"] = false;

$tdataLICENSE_MANAGER[".showEditInPopup"] = false;

$tdataLICENSE_MANAGER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLICENSE_MANAGER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLICENSE_MANAGER[".fieldsForRegister"] = array();
	
$tdataLICENSE_MANAGER[".listAjax"] = false;

	$tdataLICENSE_MANAGER[".audit"] = true;

	$tdataLICENSE_MANAGER[".locking"] = false;

$tdataLICENSE_MANAGER[".edit"] = true;
$tdataLICENSE_MANAGER[".afterEditAction"] = 1;
$tdataLICENSE_MANAGER[".closePopupAfterEdit"] = 1;
$tdataLICENSE_MANAGER[".afterEditActionDetTable"] = "";

$tdataLICENSE_MANAGER[".add"] = true;
$tdataLICENSE_MANAGER[".afterAddAction"] = 1;
$tdataLICENSE_MANAGER[".closePopupAfterAdd"] = 1;
$tdataLICENSE_MANAGER[".afterAddActionDetTable"] = "";

$tdataLICENSE_MANAGER[".list"] = true;

$tdataLICENSE_MANAGER[".inlineEdit"] = true;


$tdataLICENSE_MANAGER[".reorderRecordsByHeader"] = true;
$tdataLICENSE_MANAGER[".createSortByDropdown"] = true;
$tdataLICENSE_MANAGER[".strSortControlSettingsJSON"] = "";



$tdataLICENSE_MANAGER[".inlineAdd"] = true;
$tdataLICENSE_MANAGER[".view"] = true;

$tdataLICENSE_MANAGER[".import"] = true;

$tdataLICENSE_MANAGER[".exportTo"] = true;

$tdataLICENSE_MANAGER[".printFriendly"] = true;

$tdataLICENSE_MANAGER[".delete"] = true;

$tdataLICENSE_MANAGER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLICENSE_MANAGER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLICENSE_MANAGER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLICENSE_MANAGER[".searchSaving"] = false;
//

$tdataLICENSE_MANAGER[".showSearchPanel"] = true;
		$tdataLICENSE_MANAGER[".flexibleSearch"] = true;

$tdataLICENSE_MANAGER[".isUseAjaxSuggest"] = true;

$tdataLICENSE_MANAGER[".rowHighlite"] = true;



				

$tdataLICENSE_MANAGER[".ajaxCodeSnippetAdded"] = false;

$tdataLICENSE_MANAGER[".buttonsAdded"] = false;

$tdataLICENSE_MANAGER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLICENSE_MANAGER[".isUseTimeForSearch"] = false;





$tdataLICENSE_MANAGER[".allSearchFields"] = array();
$tdataLICENSE_MANAGER[".filterFields"] = array();
$tdataLICENSE_MANAGER[".requiredSearchFields"] = array();

$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_UID";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_USER";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_START";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_END";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_SPAN";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_STATUS";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_DATA";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_PATH";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_WORKSPACE";
	$tdataLICENSE_MANAGER[".allSearchFields"][] = "LICENSE_TYPE";
	

$tdataLICENSE_MANAGER[".googleLikeFields"] = array();
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".googleLikeFields"][] = "LICENSE_TYPE";


$tdataLICENSE_MANAGER[".advSearchFields"] = array();
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".advSearchFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".tableType"] = "list";

$tdataLICENSE_MANAGER[".printerPageOrientation"] = 0;
$tdataLICENSE_MANAGER[".nPrinterPageScale"] = 100;

$tdataLICENSE_MANAGER[".nPrinterSplitRecords"] = 40;

$tdataLICENSE_MANAGER[".nPrinterPDFSplitRecords"] = 40;



$tdataLICENSE_MANAGER[".geocodingEnabled"] = false;





$tdataLICENSE_MANAGER[".listGridLayout"] = 3;


$tdataLICENSE_MANAGER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLICENSE_MANAGER[".pageSize"] = 20;

$tdataLICENSE_MANAGER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLICENSE_MANAGER[".strOrderBy"] = $tstrOrderBy;

$tdataLICENSE_MANAGER[".orderindexes"] = array();

$tdataLICENSE_MANAGER[".sqlHead"] = "SELECT LICENSE_UID,  	LICENSE_USER,  	LICENSE_START,  	LICENSE_END,  	LICENSE_SPAN,  	LICENSE_STATUS,  	LICENSE_DATA,  	LICENSE_PATH,  	LICENSE_WORKSPACE,  	LICENSE_TYPE";
$tdataLICENSE_MANAGER[".sqlFrom"] = "FROM LICENSE_MANAGER";
$tdataLICENSE_MANAGER[".sqlWhereExpr"] = "";
$tdataLICENSE_MANAGER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLICENSE_MANAGER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLICENSE_MANAGER[".arrGroupsPerPage"] = $arrGPP;

$tdataLICENSE_MANAGER[".highlightSearchResults"] = true;

$tableKeysLICENSE_MANAGER = array();
$tableKeysLICENSE_MANAGER[] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".Keys"] = $tableKeysLICENSE_MANAGER;

$tdataLICENSE_MANAGER[".listFields"] = array();
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".listFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".hideMobileList"] = array();


$tdataLICENSE_MANAGER[".viewFields"] = array();
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".viewFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".addFields"] = array();
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".addFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".masterListFields"] = array();
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".masterListFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".inlineAddFields"] = array();
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".inlineAddFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".editFields"] = array();
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".editFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".inlineEditFields"] = array();
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".inlineEditFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".updateSelectedFields"] = array();
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".updateSelectedFields"][] = "LICENSE_TYPE";


$tdataLICENSE_MANAGER[".exportFields"] = array();
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".exportFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".importFields"] = array();
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".importFields"][] = "LICENSE_TYPE";

$tdataLICENSE_MANAGER[".printFields"] = array();
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_UID";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_USER";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_START";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_END";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_SPAN";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_STATUS";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_DATA";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_PATH";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_WORKSPACE";
$tdataLICENSE_MANAGER[".printFields"][] = "LICENSE_TYPE";

//	LICENSE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LICENSE_UID";
	$fdata["GoodName"] = "LICENSE_UID";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_UID");
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

		$fdata["strField"] = "LICENSE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_UID";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_UID"] = $fdata;
//	LICENSE_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LICENSE_USER";
	$fdata["GoodName"] = "LICENSE_USER";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_USER");
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

		$fdata["strField"] = "LICENSE_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_USER";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataLICENSE_MANAGER["LICENSE_USER"] = $fdata;
//	LICENSE_START
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LICENSE_START";
	$fdata["GoodName"] = "LICENSE_START";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_START");
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

		$fdata["strField"] = "LICENSE_START";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_START";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_START"] = $fdata;
//	LICENSE_END
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LICENSE_END";
	$fdata["GoodName"] = "LICENSE_END";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_END");
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

		$fdata["strField"] = "LICENSE_END";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_END";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_END"] = $fdata;
//	LICENSE_SPAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LICENSE_SPAN";
	$fdata["GoodName"] = "LICENSE_SPAN";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_SPAN");
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

		$fdata["strField"] = "LICENSE_SPAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_SPAN";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_SPAN"] = $fdata;
//	LICENSE_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LICENSE_STATUS";
	$fdata["GoodName"] = "LICENSE_STATUS";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_STATUS");
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

		$fdata["strField"] = "LICENSE_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_STATUS";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_STATUS"] = $fdata;
//	LICENSE_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LICENSE_DATA";
	$fdata["GoodName"] = "LICENSE_DATA";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_DATA");
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

		$fdata["strField"] = "LICENSE_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_DATA";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_DATA"] = $fdata;
//	LICENSE_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LICENSE_PATH";
	$fdata["GoodName"] = "LICENSE_PATH";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_PATH");
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

		$fdata["strField"] = "LICENSE_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_PATH";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_PATH"] = $fdata;
//	LICENSE_WORKSPACE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LICENSE_WORKSPACE";
	$fdata["GoodName"] = "LICENSE_WORKSPACE";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_WORKSPACE");
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

		$fdata["strField"] = "LICENSE_WORKSPACE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_WORKSPACE";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_WORKSPACE"] = $fdata;
//	LICENSE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LICENSE_TYPE";
	$fdata["GoodName"] = "LICENSE_TYPE";
	$fdata["ownerTable"] = "LICENSE_MANAGER";
	$fdata["Label"] = GetFieldLabel("LICENSE_MANAGER","LICENSE_TYPE");
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

		$fdata["strField"] = "LICENSE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LICENSE_TYPE";

	
	
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




	$tdataLICENSE_MANAGER["LICENSE_TYPE"] = $fdata;


$tables_data["LICENSE_MANAGER"]=&$tdataLICENSE_MANAGER;
$field_labels["LICENSE_MANAGER"] = &$fieldLabelsLICENSE_MANAGER;
$fieldToolTips["LICENSE_MANAGER"] = &$fieldToolTipsLICENSE_MANAGER;
$placeHolders["LICENSE_MANAGER"] = &$placeHoldersLICENSE_MANAGER;
$page_titles["LICENSE_MANAGER"] = &$pageTitlesLICENSE_MANAGER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LICENSE_MANAGER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LICENSE_MANAGER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LICENSE_MANAGER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LICENSE_UID,  	LICENSE_USER,  	LICENSE_START,  	LICENSE_END,  	LICENSE_SPAN,  	LICENSE_STATUS,  	LICENSE_DATA,  	LICENSE_PATH,  	LICENSE_WORKSPACE,  	LICENSE_TYPE";
$proto0["m_strFrom"] = "FROM LICENSE_MANAGER";
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
	"m_strName" => "LICENSE_UID",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto6["m_sql"] = "LICENSE_UID";
$proto6["m_srcTableName"] = "LICENSE_MANAGER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_USER",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto8["m_sql"] = "LICENSE_USER";
$proto8["m_srcTableName"] = "LICENSE_MANAGER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_START",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto10["m_sql"] = "LICENSE_START";
$proto10["m_srcTableName"] = "LICENSE_MANAGER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_END",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto12["m_sql"] = "LICENSE_END";
$proto12["m_srcTableName"] = "LICENSE_MANAGER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_SPAN",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto14["m_sql"] = "LICENSE_SPAN";
$proto14["m_srcTableName"] = "LICENSE_MANAGER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_STATUS",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto16["m_sql"] = "LICENSE_STATUS";
$proto16["m_srcTableName"] = "LICENSE_MANAGER";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_DATA",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto18["m_sql"] = "LICENSE_DATA";
$proto18["m_srcTableName"] = "LICENSE_MANAGER";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_PATH",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto20["m_sql"] = "LICENSE_PATH";
$proto20["m_srcTableName"] = "LICENSE_MANAGER";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_WORKSPACE",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto22["m_sql"] = "LICENSE_WORKSPACE";
$proto22["m_srcTableName"] = "LICENSE_MANAGER";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LICENSE_TYPE",
	"m_strTable" => "LICENSE_MANAGER",
	"m_srcTableName" => "LICENSE_MANAGER"
));

$proto24["m_sql"] = "LICENSE_TYPE";
$proto24["m_srcTableName"] = "LICENSE_MANAGER";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "LICENSE_MANAGER";
$proto27["m_srcTableName"] = "LICENSE_MANAGER";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "LICENSE_UID";
$proto27["m_columns"][] = "LICENSE_USER";
$proto27["m_columns"][] = "LICENSE_START";
$proto27["m_columns"][] = "LICENSE_END";
$proto27["m_columns"][] = "LICENSE_SPAN";
$proto27["m_columns"][] = "LICENSE_STATUS";
$proto27["m_columns"][] = "LICENSE_DATA";
$proto27["m_columns"][] = "LICENSE_PATH";
$proto27["m_columns"][] = "LICENSE_WORKSPACE";
$proto27["m_columns"][] = "LICENSE_TYPE";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "LICENSE_MANAGER";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "LICENSE_MANAGER";
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
$proto0["m_srcTableName"]="LICENSE_MANAGER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LICENSE_MANAGER = createSqlQuery_LICENSE_MANAGER();


	
						;

										

$tdataLICENSE_MANAGER[".sqlquery"] = $queryData_LICENSE_MANAGER;

$tableEvents["LICENSE_MANAGER"] = new eventsBase;
$tdataLICENSE_MANAGER[".hasEvents"] = false;

?>
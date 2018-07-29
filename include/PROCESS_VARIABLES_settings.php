<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPROCESS_VARIABLES = array();
	$tdataPROCESS_VARIABLES[".truncateText"] = true;
	$tdataPROCESS_VARIABLES[".NumberOfChars"] = 20;
	$tdataPROCESS_VARIABLES[".ShortName"] = "PROCESS_VARIABLES";
	$tdataPROCESS_VARIABLES[".OwnerID"] = "";
	$tdataPROCESS_VARIABLES[".OriginalTable"] = "PROCESS_VARIABLES";

//	field labels
$fieldLabelsPROCESS_VARIABLES = array();
$fieldToolTipsPROCESS_VARIABLES = array();
$pageTitlesPROCESS_VARIABLES = array();
$placeHoldersPROCESS_VARIABLES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPROCESS_VARIABLES["Japanese"] = array();
	$fieldToolTipsPROCESS_VARIABLES["Japanese"] = array();
	$placeHoldersPROCESS_VARIABLES["Japanese"] = array();
	$pageTitlesPROCESS_VARIABLES["Japanese"] = array();
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_UID"] = "VaRのUID";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_UID"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_UID"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["PRJ_UID"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_NAME"] = "VAR名";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_NAME"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_NAME"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_FIELD_TYPE"] = "VARフィールドタイプ";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_FIELD_TYPE"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_FIELD_TYPE"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_FIELD_SIZE"] = "VARフィールドのサイズ";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_FIELD_SIZE"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_FIELD_SIZE"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_LABEL"] = "VaRのラベル";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_LABEL"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_LABEL"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_DBCONNECTION"] = "VaRののDBConnection";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_DBCONNECTION"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_DBCONNECTION"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_SQL"] = "VaRのSQL";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_SQL"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_SQL"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_NULL"] = "VaRのヌル";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_NULL"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_NULL"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_DEFAULT"] = "VaRのデフォルト";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_DEFAULT"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_DEFAULT"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["VAR_ACCEPTED_VALUES"] = "varが値を受け入れ";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["VAR_ACCEPTED_VALUES"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["VAR_ACCEPTED_VALUES"] = "";
	$fieldLabelsPROCESS_VARIABLES["Japanese"]["INP_DOC_UID"] = "ドキュメントのUID INP";
	$fieldToolTipsPROCESS_VARIABLES["Japanese"]["INP_DOC_UID"] = "";
	$placeHoldersPROCESS_VARIABLES["Japanese"]["INP_DOC_UID"] = "";
	if (count($fieldToolTipsPROCESS_VARIABLES["Japanese"]))
		$tdataPROCESS_VARIABLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROCESS_VARIABLES["English"] = array();
	$fieldToolTipsPROCESS_VARIABLES["English"] = array();
	$placeHoldersPROCESS_VARIABLES["English"] = array();
	$pageTitlesPROCESS_VARIABLES["English"] = array();
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_UID"] = "VaRのUID";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_UID"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_UID"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsPROCESS_VARIABLES["English"]["PRJ_UID"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["PRJ_UID"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_NAME"] = "VAR名";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_NAME"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_NAME"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_FIELD_TYPE"] = "VARフィールドタイプ";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_FIELD_TYPE"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_FIELD_TYPE"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_FIELD_SIZE"] = "VARフィールドのサイズ";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_FIELD_SIZE"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_FIELD_SIZE"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_LABEL"] = "VaRのラベル";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_LABEL"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_LABEL"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_DBCONNECTION"] = "VaRののDBConnection";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_DBCONNECTION"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_DBCONNECTION"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_SQL"] = "VaRのSQL";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_SQL"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_SQL"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_NULL"] = "VaRのヌル";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_NULL"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_NULL"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_DEFAULT"] = "VaRのデフォルト";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_DEFAULT"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_DEFAULT"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["VAR_ACCEPTED_VALUES"] = "varが値を受け入れ";
	$fieldToolTipsPROCESS_VARIABLES["English"]["VAR_ACCEPTED_VALUES"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["VAR_ACCEPTED_VALUES"] = "";
	$fieldLabelsPROCESS_VARIABLES["English"]["INP_DOC_UID"] = "ドキュメントのUID INP";
	$fieldToolTipsPROCESS_VARIABLES["English"]["INP_DOC_UID"] = "";
	$placeHoldersPROCESS_VARIABLES["English"]["INP_DOC_UID"] = "";
	if (count($fieldToolTipsPROCESS_VARIABLES["English"]))
		$tdataPROCESS_VARIABLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROCESS_VARIABLES[""] = array();
	$fieldToolTipsPROCESS_VARIABLES[""] = array();
	$placeHoldersPROCESS_VARIABLES[""] = array();
	$pageTitlesPROCESS_VARIABLES[""] = array();
	if (count($fieldToolTipsPROCESS_VARIABLES[""]))
		$tdataPROCESS_VARIABLES[".isUseToolTips"] = true;
}


	$tdataPROCESS_VARIABLES[".NCSearch"] = true;



$tdataPROCESS_VARIABLES[".shortTableName"] = "PROCESS_VARIABLES";
$tdataPROCESS_VARIABLES[".nSecOptions"] = 0;
$tdataPROCESS_VARIABLES[".recsPerRowPrint"] = 1;
$tdataPROCESS_VARIABLES[".mainTableOwnerID"] = "";
$tdataPROCESS_VARIABLES[".moveNext"] = 0;
$tdataPROCESS_VARIABLES[".entityType"] = 0;

$tdataPROCESS_VARIABLES[".strOriginalTableName"] = "PROCESS_VARIABLES";

	



$tdataPROCESS_VARIABLES[".showAddInPopup"] = false;

$tdataPROCESS_VARIABLES[".showEditInPopup"] = false;

$tdataPROCESS_VARIABLES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPROCESS_VARIABLES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPROCESS_VARIABLES[".fieldsForRegister"] = array();
	
$tdataPROCESS_VARIABLES[".listAjax"] = false;

	$tdataPROCESS_VARIABLES[".audit"] = true;

	$tdataPROCESS_VARIABLES[".locking"] = false;

$tdataPROCESS_VARIABLES[".edit"] = true;
$tdataPROCESS_VARIABLES[".afterEditAction"] = 1;
$tdataPROCESS_VARIABLES[".closePopupAfterEdit"] = 1;
$tdataPROCESS_VARIABLES[".afterEditActionDetTable"] = "";

$tdataPROCESS_VARIABLES[".add"] = true;
$tdataPROCESS_VARIABLES[".afterAddAction"] = 1;
$tdataPROCESS_VARIABLES[".closePopupAfterAdd"] = 1;
$tdataPROCESS_VARIABLES[".afterAddActionDetTable"] = "";

$tdataPROCESS_VARIABLES[".list"] = true;

$tdataPROCESS_VARIABLES[".inlineEdit"] = true;


$tdataPROCESS_VARIABLES[".reorderRecordsByHeader"] = true;
$tdataPROCESS_VARIABLES[".createSortByDropdown"] = true;
$tdataPROCESS_VARIABLES[".strSortControlSettingsJSON"] = "";



$tdataPROCESS_VARIABLES[".inlineAdd"] = true;
$tdataPROCESS_VARIABLES[".view"] = true;

$tdataPROCESS_VARIABLES[".import"] = true;

$tdataPROCESS_VARIABLES[".exportTo"] = true;

$tdataPROCESS_VARIABLES[".printFriendly"] = true;

$tdataPROCESS_VARIABLES[".delete"] = true;

$tdataPROCESS_VARIABLES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPROCESS_VARIABLES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPROCESS_VARIABLES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPROCESS_VARIABLES[".searchSaving"] = false;
//

$tdataPROCESS_VARIABLES[".showSearchPanel"] = true;
		$tdataPROCESS_VARIABLES[".flexibleSearch"] = true;

$tdataPROCESS_VARIABLES[".isUseAjaxSuggest"] = true;

$tdataPROCESS_VARIABLES[".rowHighlite"] = true;



																

$tdataPROCESS_VARIABLES[".ajaxCodeSnippetAdded"] = false;

$tdataPROCESS_VARIABLES[".buttonsAdded"] = false;

$tdataPROCESS_VARIABLES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPROCESS_VARIABLES[".isUseTimeForSearch"] = false;



$tdataPROCESS_VARIABLES[".badgeColor"] = "CD853F";


$tdataPROCESS_VARIABLES[".allSearchFields"] = array();
$tdataPROCESS_VARIABLES[".filterFields"] = array();
$tdataPROCESS_VARIABLES[".requiredSearchFields"] = array();

$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_UID";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "PRJ_UID";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_NAME";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_FIELD_TYPE";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_FIELD_SIZE";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_LABEL";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_DBCONNECTION";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_SQL";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_NULL";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_DEFAULT";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "VAR_ACCEPTED_VALUES";
	$tdataPROCESS_VARIABLES[".allSearchFields"][] = "INP_DOC_UID";
	

$tdataPROCESS_VARIABLES[".googleLikeFields"] = array();
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".googleLikeFields"][] = "INP_DOC_UID";


$tdataPROCESS_VARIABLES[".advSearchFields"] = array();
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".advSearchFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".tableType"] = "list";

$tdataPROCESS_VARIABLES[".printerPageOrientation"] = 0;
$tdataPROCESS_VARIABLES[".nPrinterPageScale"] = 100;

$tdataPROCESS_VARIABLES[".nPrinterSplitRecords"] = 40;

$tdataPROCESS_VARIABLES[".nPrinterPDFSplitRecords"] = 40;



$tdataPROCESS_VARIABLES[".geocodingEnabled"] = false;





$tdataPROCESS_VARIABLES[".listGridLayout"] = 3;


$tdataPROCESS_VARIABLES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPROCESS_VARIABLES[".pageSize"] = 20;

$tdataPROCESS_VARIABLES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPROCESS_VARIABLES[".strOrderBy"] = $tstrOrderBy;

$tdataPROCESS_VARIABLES[".orderindexes"] = array();

$tdataPROCESS_VARIABLES[".sqlHead"] = "SELECT VAR_UID,  	PRJ_UID,  	VAR_NAME,  	VAR_FIELD_TYPE,  	VAR_FIELD_SIZE,  	VAR_LABEL,  	VAR_DBCONNECTION,  	VAR_SQL,  	VAR_NULL,  	VAR_DEFAULT,  	VAR_ACCEPTED_VALUES,  	INP_DOC_UID";
$tdataPROCESS_VARIABLES[".sqlFrom"] = "FROM PROCESS_VARIABLES";
$tdataPROCESS_VARIABLES[".sqlWhereExpr"] = "";
$tdataPROCESS_VARIABLES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPROCESS_VARIABLES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPROCESS_VARIABLES[".arrGroupsPerPage"] = $arrGPP;

$tdataPROCESS_VARIABLES[".highlightSearchResults"] = true;

$tableKeysPROCESS_VARIABLES = array();
$tableKeysPROCESS_VARIABLES[] = "VAR_UID";
$tdataPROCESS_VARIABLES[".Keys"] = $tableKeysPROCESS_VARIABLES;

$tdataPROCESS_VARIABLES[".listFields"] = array();
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".listFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".listFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".listFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".hideMobileList"] = array();


$tdataPROCESS_VARIABLES[".viewFields"] = array();
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".viewFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".viewFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".viewFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".addFields"] = array();
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".addFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".addFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".addFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".masterListFields"] = array();
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".masterListFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".inlineAddFields"] = array();
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".inlineAddFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".editFields"] = array();
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".editFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".editFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".editFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".inlineEditFields"] = array();
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".inlineEditFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".updateSelectedFields"] = array();
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".updateSelectedFields"][] = "INP_DOC_UID";


$tdataPROCESS_VARIABLES[".exportFields"] = array();
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".exportFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".exportFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".exportFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".importFields"] = array();
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".importFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".importFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".importFields"][] = "INP_DOC_UID";

$tdataPROCESS_VARIABLES[".printFields"] = array();
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_UID";
$tdataPROCESS_VARIABLES[".printFields"][] = "PRJ_UID";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_NAME";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_FIELD_TYPE";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_FIELD_SIZE";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_LABEL";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_DBCONNECTION";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_SQL";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_NULL";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_DEFAULT";
$tdataPROCESS_VARIABLES[".printFields"][] = "VAR_ACCEPTED_VALUES";
$tdataPROCESS_VARIABLES[".printFields"][] = "INP_DOC_UID";

//	VAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VAR_UID";
	$fdata["GoodName"] = "VAR_UID";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_UID");
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

		$fdata["strField"] = "VAR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_UID";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","PRJ_UID");
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




	$tdataPROCESS_VARIABLES["PRJ_UID"] = $fdata;
//	VAR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VAR_NAME";
	$fdata["GoodName"] = "VAR_NAME";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_NAME");
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

		$fdata["strField"] = "VAR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_NAME";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_NAME"] = $fdata;
//	VAR_FIELD_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VAR_FIELD_TYPE";
	$fdata["GoodName"] = "VAR_FIELD_TYPE";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_FIELD_TYPE");
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

		$fdata["strField"] = "VAR_FIELD_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_FIELD_TYPE";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_FIELD_TYPE"] = $fdata;
//	VAR_FIELD_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VAR_FIELD_SIZE";
	$fdata["GoodName"] = "VAR_FIELD_SIZE";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_FIELD_SIZE");
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

		$fdata["strField"] = "VAR_FIELD_SIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_FIELD_SIZE";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_FIELD_SIZE"] = $fdata;
//	VAR_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "VAR_LABEL";
	$fdata["GoodName"] = "VAR_LABEL";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_LABEL");
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

		$fdata["strField"] = "VAR_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_LABEL";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_LABEL"] = $fdata;
//	VAR_DBCONNECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VAR_DBCONNECTION";
	$fdata["GoodName"] = "VAR_DBCONNECTION";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_DBCONNECTION");
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

		$fdata["strField"] = "VAR_DBCONNECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_DBCONNECTION";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_DBCONNECTION"] = $fdata;
//	VAR_SQL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "VAR_SQL";
	$fdata["GoodName"] = "VAR_SQL";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_SQL");
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

		$fdata["strField"] = "VAR_SQL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_SQL";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_SQL"] = $fdata;
//	VAR_NULL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "VAR_NULL";
	$fdata["GoodName"] = "VAR_NULL";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_NULL");
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

		$fdata["strField"] = "VAR_NULL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_NULL";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_NULL"] = $fdata;
//	VAR_DEFAULT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "VAR_DEFAULT";
	$fdata["GoodName"] = "VAR_DEFAULT";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_DEFAULT");
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

		$fdata["strField"] = "VAR_DEFAULT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_DEFAULT";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_DEFAULT"] = $fdata;
//	VAR_ACCEPTED_VALUES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "VAR_ACCEPTED_VALUES";
	$fdata["GoodName"] = "VAR_ACCEPTED_VALUES";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","VAR_ACCEPTED_VALUES");
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

		$fdata["strField"] = "VAR_ACCEPTED_VALUES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAR_ACCEPTED_VALUES";

	
	
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




	$tdataPROCESS_VARIABLES["VAR_ACCEPTED_VALUES"] = $fdata;
//	INP_DOC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "INP_DOC_UID";
	$fdata["GoodName"] = "INP_DOC_UID";
	$fdata["ownerTable"] = "PROCESS_VARIABLES";
	$fdata["Label"] = GetFieldLabel("PROCESS_VARIABLES","INP_DOC_UID");
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

		$fdata["strField"] = "INP_DOC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INP_DOC_UID";

	
	
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




	$tdataPROCESS_VARIABLES["INP_DOC_UID"] = $fdata;


$tables_data["PROCESS_VARIABLES"]=&$tdataPROCESS_VARIABLES;
$field_labels["PROCESS_VARIABLES"] = &$fieldLabelsPROCESS_VARIABLES;
$fieldToolTips["PROCESS_VARIABLES"] = &$fieldToolTipsPROCESS_VARIABLES;
$placeHolders["PROCESS_VARIABLES"] = &$placeHoldersPROCESS_VARIABLES;
$page_titles["PROCESS_VARIABLES"] = &$pageTitlesPROCESS_VARIABLES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PROCESS_VARIABLES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PROCESS_VARIABLES"] = array();


	
				$strOriginalDetailsTable="PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PROCESS_VARIABLES"][0] = $masterParams;
				$masterTablesData["PROCESS_VARIABLES"][0]["masterKeys"] = array();
	$masterTablesData["PROCESS_VARIABLES"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["PROCESS_VARIABLES"][0]["detailKeys"] = array();
	$masterTablesData["PROCESS_VARIABLES"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PROCESS_VARIABLES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "VAR_UID,  	PRJ_UID,  	VAR_NAME,  	VAR_FIELD_TYPE,  	VAR_FIELD_SIZE,  	VAR_LABEL,  	VAR_DBCONNECTION,  	VAR_SQL,  	VAR_NULL,  	VAR_DEFAULT,  	VAR_ACCEPTED_VALUES,  	INP_DOC_UID";
$proto0["m_strFrom"] = "FROM PROCESS_VARIABLES";
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
	"m_strName" => "VAR_UID",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto6["m_sql"] = "VAR_UID";
$proto6["m_srcTableName"] = "PROCESS_VARIABLES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "PROCESS_VARIABLES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_NAME",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto10["m_sql"] = "VAR_NAME";
$proto10["m_srcTableName"] = "PROCESS_VARIABLES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_FIELD_TYPE",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto12["m_sql"] = "VAR_FIELD_TYPE";
$proto12["m_srcTableName"] = "PROCESS_VARIABLES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_FIELD_SIZE",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto14["m_sql"] = "VAR_FIELD_SIZE";
$proto14["m_srcTableName"] = "PROCESS_VARIABLES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_LABEL",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto16["m_sql"] = "VAR_LABEL";
$proto16["m_srcTableName"] = "PROCESS_VARIABLES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_DBCONNECTION",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto18["m_sql"] = "VAR_DBCONNECTION";
$proto18["m_srcTableName"] = "PROCESS_VARIABLES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_SQL",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto20["m_sql"] = "VAR_SQL";
$proto20["m_srcTableName"] = "PROCESS_VARIABLES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_NULL",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto22["m_sql"] = "VAR_NULL";
$proto22["m_srcTableName"] = "PROCESS_VARIABLES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_DEFAULT",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto24["m_sql"] = "VAR_DEFAULT";
$proto24["m_srcTableName"] = "PROCESS_VARIABLES";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "VAR_ACCEPTED_VALUES",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto26["m_sql"] = "VAR_ACCEPTED_VALUES";
$proto26["m_srcTableName"] = "PROCESS_VARIABLES";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "INP_DOC_UID",
	"m_strTable" => "PROCESS_VARIABLES",
	"m_srcTableName" => "PROCESS_VARIABLES"
));

$proto28["m_sql"] = "INP_DOC_UID";
$proto28["m_srcTableName"] = "PROCESS_VARIABLES";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "PROCESS_VARIABLES";
$proto31["m_srcTableName"] = "PROCESS_VARIABLES";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "VAR_UID";
$proto31["m_columns"][] = "PRJ_UID";
$proto31["m_columns"][] = "VAR_NAME";
$proto31["m_columns"][] = "VAR_FIELD_TYPE";
$proto31["m_columns"][] = "VAR_FIELD_SIZE";
$proto31["m_columns"][] = "VAR_LABEL";
$proto31["m_columns"][] = "VAR_DBCONNECTION";
$proto31["m_columns"][] = "VAR_SQL";
$proto31["m_columns"][] = "VAR_NULL";
$proto31["m_columns"][] = "VAR_DEFAULT";
$proto31["m_columns"][] = "VAR_ACCEPTED_VALUES";
$proto31["m_columns"][] = "INP_DOC_UID";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "PROCESS_VARIABLES";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "PROCESS_VARIABLES";
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
$proto0["m_srcTableName"]="PROCESS_VARIABLES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PROCESS_VARIABLES = createSqlQuery_PROCESS_VARIABLES();


	
						;

												

$tdataPROCESS_VARIABLES[".sqlquery"] = $queryData_PROCESS_VARIABLES;

$tableEvents["PROCESS_VARIABLES"] = new eventsBase;
$tdataPROCESS_VARIABLES[".hasEvents"] = false;

?>
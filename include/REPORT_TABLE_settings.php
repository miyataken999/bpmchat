<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORT_TABLE = array();
	$tdataREPORT_TABLE[".truncateText"] = true;
	$tdataREPORT_TABLE[".NumberOfChars"] = 20;
	$tdataREPORT_TABLE[".ShortName"] = "REPORT_TABLE";
	$tdataREPORT_TABLE[".OwnerID"] = "";
	$tdataREPORT_TABLE[".OriginalTable"] = "REPORT_TABLE";

//	field labels
$fieldLabelsREPORT_TABLE = array();
$fieldToolTipsREPORT_TABLE = array();
$pageTitlesREPORT_TABLE = array();
$placeHoldersREPORT_TABLE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsREPORT_TABLE["Japanese"] = array();
	$fieldToolTipsREPORT_TABLE["Japanese"] = array();
	$placeHoldersREPORT_TABLE["Japanese"] = array();
	$pageTitlesREPORT_TABLE["Japanese"] = array();
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_UID"] = "担当者]タブのUID";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_UID"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_UID"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsREPORT_TABLE["Japanese"]["PRO_UID"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["PRO_UID"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_NAME"] = "担当者タブ名";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_NAME"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_NAME"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_TYPE"] = "担当者タブタイプ";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_TYPE"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_TYPE"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_GRID"] = "担当者タブグリッド";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_GRID"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_GRID"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_CONNECTION"] = "担当者タブ接続";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_CONNECTION"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_CONNECTION"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_CREATE_DATE"] = "担当者]タブには日付を作成します";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_CREATE_DATE"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_CREATE_DATE"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_STATUS"] = "担当者]タブのステータス";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_STATUS"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_STATUS"] = "";
	$fieldLabelsREPORT_TABLE["Japanese"]["REP_TAB_TITLE"] = "REP TAB TITLE";
	$fieldToolTipsREPORT_TABLE["Japanese"]["REP_TAB_TITLE"] = "";
	$placeHoldersREPORT_TABLE["Japanese"]["REP_TAB_TITLE"] = "";
	if (count($fieldToolTipsREPORT_TABLE["Japanese"]))
		$tdataREPORT_TABLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsREPORT_TABLE["English"] = array();
	$fieldToolTipsREPORT_TABLE["English"] = array();
	$placeHoldersREPORT_TABLE["English"] = array();
	$pageTitlesREPORT_TABLE["English"] = array();
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_UID"] = "担当者]タブのUID";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_UID"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_UID"] = "";
	$fieldLabelsREPORT_TABLE["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsREPORT_TABLE["English"]["PRO_UID"] = "";
	$placeHoldersREPORT_TABLE["English"]["PRO_UID"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_NAME"] = "担当者タブ名";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_NAME"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_NAME"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_TYPE"] = "担当者タブタイプ";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_TYPE"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_TYPE"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_GRID"] = "担当者タブグリッド";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_GRID"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_GRID"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_CONNECTION"] = "担当者タブ接続";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_CONNECTION"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_CONNECTION"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_CREATE_DATE"] = "担当者]タブには日付を作成します";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_CREATE_DATE"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_CREATE_DATE"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_STATUS"] = "担当者]タブのステータス";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_STATUS"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_STATUS"] = "";
	$fieldLabelsREPORT_TABLE["English"]["REP_TAB_TITLE"] = "REP TAB TITLE";
	$fieldToolTipsREPORT_TABLE["English"]["REP_TAB_TITLE"] = "";
	$placeHoldersREPORT_TABLE["English"]["REP_TAB_TITLE"] = "";
	if (count($fieldToolTipsREPORT_TABLE["English"]))
		$tdataREPORT_TABLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORT_TABLE[""] = array();
	$fieldToolTipsREPORT_TABLE[""] = array();
	$placeHoldersREPORT_TABLE[""] = array();
	$pageTitlesREPORT_TABLE[""] = array();
	if (count($fieldToolTipsREPORT_TABLE[""]))
		$tdataREPORT_TABLE[".isUseToolTips"] = true;
}


	$tdataREPORT_TABLE[".NCSearch"] = true;



$tdataREPORT_TABLE[".shortTableName"] = "REPORT_TABLE";
$tdataREPORT_TABLE[".nSecOptions"] = 0;
$tdataREPORT_TABLE[".recsPerRowPrint"] = 1;
$tdataREPORT_TABLE[".mainTableOwnerID"] = "";
$tdataREPORT_TABLE[".moveNext"] = 0;
$tdataREPORT_TABLE[".entityType"] = 0;

$tdataREPORT_TABLE[".strOriginalTableName"] = "REPORT_TABLE";

	



$tdataREPORT_TABLE[".showAddInPopup"] = false;

$tdataREPORT_TABLE[".showEditInPopup"] = false;

$tdataREPORT_TABLE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORT_TABLE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORT_TABLE[".fieldsForRegister"] = array();
	
$tdataREPORT_TABLE[".listAjax"] = false;

	$tdataREPORT_TABLE[".audit"] = true;

	$tdataREPORT_TABLE[".locking"] = false;

$tdataREPORT_TABLE[".edit"] = true;
$tdataREPORT_TABLE[".afterEditAction"] = 1;
$tdataREPORT_TABLE[".closePopupAfterEdit"] = 1;
$tdataREPORT_TABLE[".afterEditActionDetTable"] = "";

$tdataREPORT_TABLE[".add"] = true;
$tdataREPORT_TABLE[".afterAddAction"] = 1;
$tdataREPORT_TABLE[".closePopupAfterAdd"] = 1;
$tdataREPORT_TABLE[".afterAddActionDetTable"] = "";

$tdataREPORT_TABLE[".list"] = true;

$tdataREPORT_TABLE[".inlineEdit"] = true;


$tdataREPORT_TABLE[".reorderRecordsByHeader"] = true;
$tdataREPORT_TABLE[".createSortByDropdown"] = true;
$tdataREPORT_TABLE[".strSortControlSettingsJSON"] = "";



$tdataREPORT_TABLE[".inlineAdd"] = true;
$tdataREPORT_TABLE[".view"] = true;

$tdataREPORT_TABLE[".import"] = true;

$tdataREPORT_TABLE[".exportTo"] = true;

$tdataREPORT_TABLE[".printFriendly"] = true;

$tdataREPORT_TABLE[".delete"] = true;

$tdataREPORT_TABLE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataREPORT_TABLE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataREPORT_TABLE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataREPORT_TABLE[".searchSaving"] = false;
//

$tdataREPORT_TABLE[".showSearchPanel"] = true;
		$tdataREPORT_TABLE[".flexibleSearch"] = true;

$tdataREPORT_TABLE[".isUseAjaxSuggest"] = true;

$tdataREPORT_TABLE[".rowHighlite"] = true;



				

$tdataREPORT_TABLE[".ajaxCodeSnippetAdded"] = false;

$tdataREPORT_TABLE[".buttonsAdded"] = false;

$tdataREPORT_TABLE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORT_TABLE[".isUseTimeForSearch"] = false;





$tdataREPORT_TABLE[".allSearchFields"] = array();
$tdataREPORT_TABLE[".filterFields"] = array();
$tdataREPORT_TABLE[".requiredSearchFields"] = array();

$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_UID";
	$tdataREPORT_TABLE[".allSearchFields"][] = "PRO_UID";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_NAME";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_TYPE";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_GRID";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_CONNECTION";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_CREATE_DATE";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_STATUS";
	$tdataREPORT_TABLE[".allSearchFields"][] = "REP_TAB_TITLE";
	

$tdataREPORT_TABLE[".googleLikeFields"] = array();
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".googleLikeFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".googleLikeFields"][] = "REP_TAB_TITLE";


$tdataREPORT_TABLE[".advSearchFields"] = array();
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".advSearchFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".advSearchFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".tableType"] = "list";

$tdataREPORT_TABLE[".printerPageOrientation"] = 0;
$tdataREPORT_TABLE[".nPrinterPageScale"] = 100;

$tdataREPORT_TABLE[".nPrinterSplitRecords"] = 40;

$tdataREPORT_TABLE[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORT_TABLE[".geocodingEnabled"] = false;





$tdataREPORT_TABLE[".listGridLayout"] = 3;


$tdataREPORT_TABLE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataREPORT_TABLE[".pageSize"] = 20;

$tdataREPORT_TABLE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORT_TABLE[".strOrderBy"] = $tstrOrderBy;

$tdataREPORT_TABLE[".orderindexes"] = array();

$tdataREPORT_TABLE[".sqlHead"] = "SELECT REP_TAB_UID,  	PRO_UID,  	REP_TAB_NAME,  	REP_TAB_TYPE,  	REP_TAB_GRID,  	REP_TAB_CONNECTION,  	REP_TAB_CREATE_DATE,  	REP_TAB_STATUS,  	REP_TAB_TITLE";
$tdataREPORT_TABLE[".sqlFrom"] = "FROM REPORT_TABLE";
$tdataREPORT_TABLE[".sqlWhereExpr"] = "";
$tdataREPORT_TABLE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORT_TABLE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORT_TABLE[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORT_TABLE[".highlightSearchResults"] = true;

$tableKeysREPORT_TABLE = array();
$tableKeysREPORT_TABLE[] = "REP_TAB_UID";
$tdataREPORT_TABLE[".Keys"] = $tableKeysREPORT_TABLE;

$tdataREPORT_TABLE[".listFields"] = array();
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_TITLE";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".listFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".listFields"][] = "REP_TAB_STATUS";

$tdataREPORT_TABLE[".hideMobileList"] = array();


$tdataREPORT_TABLE[".viewFields"] = array();
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".viewFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".viewFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".addFields"] = array();
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".addFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".addFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".masterListFields"] = array();
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".masterListFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".masterListFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".inlineAddFields"] = array();
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_TITLE";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".inlineAddFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".inlineAddFields"][] = "REP_TAB_STATUS";

$tdataREPORT_TABLE[".editFields"] = array();
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".editFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".editFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".inlineEditFields"] = array();
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_TITLE";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".inlineEditFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".inlineEditFields"][] = "REP_TAB_STATUS";

$tdataREPORT_TABLE[".updateSelectedFields"] = array();
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".updateSelectedFields"][] = "REP_TAB_TITLE";


$tdataREPORT_TABLE[".exportFields"] = array();
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".exportFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".exportFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".importFields"] = array();
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".importFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".importFields"][] = "REP_TAB_TITLE";

$tdataREPORT_TABLE[".printFields"] = array();
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_UID";
$tdataREPORT_TABLE[".printFields"][] = "PRO_UID";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_NAME";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_TYPE";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_GRID";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_CONNECTION";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_CREATE_DATE";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_STATUS";
$tdataREPORT_TABLE[".printFields"][] = "REP_TAB_TITLE";

//	REP_TAB_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "REP_TAB_UID";
	$fdata["GoodName"] = "REP_TAB_UID";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_UID");
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

		$fdata["strField"] = "REP_TAB_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_UID";

	
	
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




	$tdataREPORT_TABLE["REP_TAB_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","PRO_UID");
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




	$tdataREPORT_TABLE["PRO_UID"] = $fdata;
//	REP_TAB_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "REP_TAB_NAME";
	$fdata["GoodName"] = "REP_TAB_NAME";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_NAME");
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

		$fdata["strField"] = "REP_TAB_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_NAME";

	
	
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




	$tdataREPORT_TABLE["REP_TAB_NAME"] = $fdata;
//	REP_TAB_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "REP_TAB_TYPE";
	$fdata["GoodName"] = "REP_TAB_TYPE";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_TYPE");
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

		$fdata["strField"] = "REP_TAB_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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




	$tdataREPORT_TABLE["REP_TAB_TYPE"] = $fdata;
//	REP_TAB_GRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "REP_TAB_GRID";
	$fdata["GoodName"] = "REP_TAB_GRID";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_GRID");
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

		$fdata["strField"] = "REP_TAB_GRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_GRID";

	
	
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




	$tdataREPORT_TABLE["REP_TAB_GRID"] = $fdata;
//	REP_TAB_CONNECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "REP_TAB_CONNECTION";
	$fdata["GoodName"] = "REP_TAB_CONNECTION";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_CONNECTION");
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

		$fdata["strField"] = "REP_TAB_CONNECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_CONNECTION";

	
	
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




	$tdataREPORT_TABLE["REP_TAB_CONNECTION"] = $fdata;
//	REP_TAB_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REP_TAB_CREATE_DATE";
	$fdata["GoodName"] = "REP_TAB_CREATE_DATE";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_CREATE_DATE");
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

		$fdata["strField"] = "REP_TAB_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_CREATE_DATE";

	
	
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




	$tdataREPORT_TABLE["REP_TAB_CREATE_DATE"] = $fdata;
//	REP_TAB_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "REP_TAB_STATUS";
	$fdata["GoodName"] = "REP_TAB_STATUS";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_STATUS");
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

		$fdata["strField"] = "REP_TAB_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataREPORT_TABLE["REP_TAB_STATUS"] = $fdata;
//	REP_TAB_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REP_TAB_TITLE";
	$fdata["GoodName"] = "REP_TAB_TITLE";
	$fdata["ownerTable"] = "REPORT_TABLE";
	$fdata["Label"] = GetFieldLabel("REPORT_TABLE","REP_TAB_TITLE");
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

		$fdata["strField"] = "REP_TAB_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_TITLE";

	
	
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




	$tdataREPORT_TABLE["REP_TAB_TITLE"] = $fdata;


$tables_data["REPORT_TABLE"]=&$tdataREPORT_TABLE;
$field_labels["REPORT_TABLE"] = &$fieldLabelsREPORT_TABLE;
$fieldToolTips["REPORT_TABLE"] = &$fieldToolTipsREPORT_TABLE;
$placeHolders["REPORT_TABLE"] = &$placeHoldersREPORT_TABLE;
$page_titles["REPORT_TABLE"] = &$pageTitlesREPORT_TABLE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORT_TABLE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORT_TABLE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORT_TABLE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "REP_TAB_UID,  	PRO_UID,  	REP_TAB_NAME,  	REP_TAB_TYPE,  	REP_TAB_GRID,  	REP_TAB_CONNECTION,  	REP_TAB_CREATE_DATE,  	REP_TAB_STATUS,  	REP_TAB_TITLE";
$proto0["m_strFrom"] = "FROM REPORT_TABLE";
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
	"m_strName" => "REP_TAB_UID",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto6["m_sql"] = "REP_TAB_UID";
$proto6["m_srcTableName"] = "REPORT_TABLE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "REPORT_TABLE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_NAME",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto10["m_sql"] = "REP_TAB_NAME";
$proto10["m_srcTableName"] = "REPORT_TABLE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_TYPE",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto12["m_sql"] = "REP_TAB_TYPE";
$proto12["m_srcTableName"] = "REPORT_TABLE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_GRID",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto14["m_sql"] = "REP_TAB_GRID";
$proto14["m_srcTableName"] = "REPORT_TABLE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_CONNECTION",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto16["m_sql"] = "REP_TAB_CONNECTION";
$proto16["m_srcTableName"] = "REPORT_TABLE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_CREATE_DATE",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto18["m_sql"] = "REP_TAB_CREATE_DATE";
$proto18["m_srcTableName"] = "REPORT_TABLE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_STATUS",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto20["m_sql"] = "REP_TAB_STATUS";
$proto20["m_srcTableName"] = "REPORT_TABLE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_TITLE",
	"m_strTable" => "REPORT_TABLE",
	"m_srcTableName" => "REPORT_TABLE"
));

$proto22["m_sql"] = "REP_TAB_TITLE";
$proto22["m_srcTableName"] = "REPORT_TABLE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "REPORT_TABLE";
$proto25["m_srcTableName"] = "REPORT_TABLE";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "REP_TAB_UID";
$proto25["m_columns"][] = "PRO_UID";
$proto25["m_columns"][] = "REP_TAB_NAME";
$proto25["m_columns"][] = "REP_TAB_TYPE";
$proto25["m_columns"][] = "REP_TAB_GRID";
$proto25["m_columns"][] = "REP_TAB_CONNECTION";
$proto25["m_columns"][] = "REP_TAB_CREATE_DATE";
$proto25["m_columns"][] = "REP_TAB_STATUS";
$proto25["m_columns"][] = "REP_TAB_TITLE";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "REPORT_TABLE";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "REPORT_TABLE";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORT_TABLE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORT_TABLE = createSqlQuery_REPORT_TABLE();


	
						;

									

$tdataREPORT_TABLE[".sqlquery"] = $queryData_REPORT_TABLE;

$tableEvents["REPORT_TABLE"] = new eventsBase;
$tdataREPORT_TABLE[".hasEvents"] = false;

?>
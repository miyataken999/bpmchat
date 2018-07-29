<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPROCESS_FILES = array();
	$tdataPROCESS_FILES[".truncateText"] = true;
	$tdataPROCESS_FILES[".NumberOfChars"] = 20;
	$tdataPROCESS_FILES[".ShortName"] = "PROCESS_FILES";
	$tdataPROCESS_FILES[".OwnerID"] = "";
	$tdataPROCESS_FILES[".OriginalTable"] = "PROCESS_FILES";

//	field labels
$fieldLabelsPROCESS_FILES = array();
$fieldToolTipsPROCESS_FILES = array();
$pageTitlesPROCESS_FILES = array();
$placeHoldersPROCESS_FILES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPROCESS_FILES["Japanese"] = array();
	$fieldToolTipsPROCESS_FILES["Japanese"] = array();
	$placeHoldersPROCESS_FILES["Japanese"] = array();
	$pageTitlesPROCESS_FILES["Japanese"] = array();
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_UID"] = "PRF UID";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_UID"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_UID"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRO_UID"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRO_UID"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsPROCESS_FILES["Japanese"]["USR_UID"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["USR_UID"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_UPDATE_USR_UID"] = "PRF更新USRのUID";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_UPDATE_USR_UID"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_UPDATE_USR_UID"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_PATH"] = "PRFパス";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_PATH"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_PATH"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_TYPE"] = "PRFタイプ";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_TYPE"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_TYPE"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_EDITABLE"] = "編集可能なPRF";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_EDITABLE"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_EDITABLE"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_CREATE_DATE"] = "PRF日付を作成します";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_CREATE_DATE"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_CREATE_DATE"] = "";
	$fieldLabelsPROCESS_FILES["Japanese"]["PRF_UPDATE_DATE"] = "PRF更新日";
	$fieldToolTipsPROCESS_FILES["Japanese"]["PRF_UPDATE_DATE"] = "";
	$placeHoldersPROCESS_FILES["Japanese"]["PRF_UPDATE_DATE"] = "";
	if (count($fieldToolTipsPROCESS_FILES["Japanese"]))
		$tdataPROCESS_FILES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROCESS_FILES["English"] = array();
	$fieldToolTipsPROCESS_FILES["English"] = array();
	$placeHoldersPROCESS_FILES["English"] = array();
	$pageTitlesPROCESS_FILES["English"] = array();
	$fieldLabelsPROCESS_FILES["English"]["PRF_UID"] = "PRF UID";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_UID"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_UID"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS_FILES["English"]["PRO_UID"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRO_UID"] = "";
	$fieldLabelsPROCESS_FILES["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsPROCESS_FILES["English"]["USR_UID"] = "";
	$placeHoldersPROCESS_FILES["English"]["USR_UID"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRF_UPDATE_USR_UID"] = "PRF更新USRのUID";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_UPDATE_USR_UID"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_UPDATE_USR_UID"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRF_PATH"] = "PRFパス";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_PATH"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_PATH"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRF_TYPE"] = "PRFタイプ";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_TYPE"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_TYPE"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRF_EDITABLE"] = "編集可能なPRF";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_EDITABLE"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_EDITABLE"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRF_CREATE_DATE"] = "PRF日付を作成します";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_CREATE_DATE"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_CREATE_DATE"] = "";
	$fieldLabelsPROCESS_FILES["English"]["PRF_UPDATE_DATE"] = "PRF更新日";
	$fieldToolTipsPROCESS_FILES["English"]["PRF_UPDATE_DATE"] = "";
	$placeHoldersPROCESS_FILES["English"]["PRF_UPDATE_DATE"] = "";
	if (count($fieldToolTipsPROCESS_FILES["English"]))
		$tdataPROCESS_FILES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROCESS_FILES[""] = array();
	$fieldToolTipsPROCESS_FILES[""] = array();
	$placeHoldersPROCESS_FILES[""] = array();
	$pageTitlesPROCESS_FILES[""] = array();
	if (count($fieldToolTipsPROCESS_FILES[""]))
		$tdataPROCESS_FILES[".isUseToolTips"] = true;
}


	$tdataPROCESS_FILES[".NCSearch"] = true;



$tdataPROCESS_FILES[".shortTableName"] = "PROCESS_FILES";
$tdataPROCESS_FILES[".nSecOptions"] = 0;
$tdataPROCESS_FILES[".recsPerRowPrint"] = 1;
$tdataPROCESS_FILES[".mainTableOwnerID"] = "";
$tdataPROCESS_FILES[".moveNext"] = 0;
$tdataPROCESS_FILES[".entityType"] = 0;

$tdataPROCESS_FILES[".strOriginalTableName"] = "PROCESS_FILES";

	



$tdataPROCESS_FILES[".showAddInPopup"] = false;

$tdataPROCESS_FILES[".showEditInPopup"] = false;

$tdataPROCESS_FILES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPROCESS_FILES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPROCESS_FILES[".fieldsForRegister"] = array();
	
$tdataPROCESS_FILES[".listAjax"] = false;

	$tdataPROCESS_FILES[".audit"] = true;

	$tdataPROCESS_FILES[".locking"] = false;

$tdataPROCESS_FILES[".edit"] = true;
$tdataPROCESS_FILES[".afterEditAction"] = 1;
$tdataPROCESS_FILES[".closePopupAfterEdit"] = 1;
$tdataPROCESS_FILES[".afterEditActionDetTable"] = "";

$tdataPROCESS_FILES[".add"] = true;
$tdataPROCESS_FILES[".afterAddAction"] = 1;
$tdataPROCESS_FILES[".closePopupAfterAdd"] = 1;
$tdataPROCESS_FILES[".afterAddActionDetTable"] = "";

$tdataPROCESS_FILES[".list"] = true;

$tdataPROCESS_FILES[".inlineEdit"] = true;


$tdataPROCESS_FILES[".reorderRecordsByHeader"] = true;
$tdataPROCESS_FILES[".createSortByDropdown"] = true;
$tdataPROCESS_FILES[".strSortControlSettingsJSON"] = "";



$tdataPROCESS_FILES[".inlineAdd"] = true;
$tdataPROCESS_FILES[".view"] = true;

$tdataPROCESS_FILES[".import"] = true;

$tdataPROCESS_FILES[".exportTo"] = true;

$tdataPROCESS_FILES[".printFriendly"] = true;

$tdataPROCESS_FILES[".delete"] = true;

$tdataPROCESS_FILES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPROCESS_FILES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPROCESS_FILES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPROCESS_FILES[".searchSaving"] = false;
//

$tdataPROCESS_FILES[".showSearchPanel"] = true;
		$tdataPROCESS_FILES[".flexibleSearch"] = true;

$tdataPROCESS_FILES[".isUseAjaxSuggest"] = true;

$tdataPROCESS_FILES[".rowHighlite"] = true;



				

$tdataPROCESS_FILES[".ajaxCodeSnippetAdded"] = false;

$tdataPROCESS_FILES[".buttonsAdded"] = false;

$tdataPROCESS_FILES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPROCESS_FILES[".isUseTimeForSearch"] = false;





$tdataPROCESS_FILES[".allSearchFields"] = array();
$tdataPROCESS_FILES[".filterFields"] = array();
$tdataPROCESS_FILES[".requiredSearchFields"] = array();

$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_UID";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRO_UID";
	$tdataPROCESS_FILES[".allSearchFields"][] = "USR_UID";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_UPDATE_USR_UID";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_PATH";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_TYPE";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_EDITABLE";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_CREATE_DATE";
	$tdataPROCESS_FILES[".allSearchFields"][] = "PRF_UPDATE_DATE";
	

$tdataPROCESS_FILES[".googleLikeFields"] = array();
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".googleLikeFields"][] = "USR_UID";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".googleLikeFields"][] = "PRF_UPDATE_DATE";


$tdataPROCESS_FILES[".advSearchFields"] = array();
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".advSearchFields"][] = "USR_UID";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".advSearchFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".tableType"] = "list";

$tdataPROCESS_FILES[".printerPageOrientation"] = 0;
$tdataPROCESS_FILES[".nPrinterPageScale"] = 100;

$tdataPROCESS_FILES[".nPrinterSplitRecords"] = 40;

$tdataPROCESS_FILES[".nPrinterPDFSplitRecords"] = 40;



$tdataPROCESS_FILES[".geocodingEnabled"] = false;





$tdataPROCESS_FILES[".listGridLayout"] = 3;


$tdataPROCESS_FILES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPROCESS_FILES[".pageSize"] = 20;

$tdataPROCESS_FILES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPROCESS_FILES[".strOrderBy"] = $tstrOrderBy;

$tdataPROCESS_FILES[".orderindexes"] = array();

$tdataPROCESS_FILES[".sqlHead"] = "SELECT PRF_UID,  	PRO_UID,  	USR_UID,  	PRF_UPDATE_USR_UID,  	PRF_PATH,  	PRF_TYPE,  	PRF_EDITABLE,  	PRF_CREATE_DATE,  	PRF_UPDATE_DATE";
$tdataPROCESS_FILES[".sqlFrom"] = "FROM PROCESS_FILES";
$tdataPROCESS_FILES[".sqlWhereExpr"] = "";
$tdataPROCESS_FILES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPROCESS_FILES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPROCESS_FILES[".arrGroupsPerPage"] = $arrGPP;

$tdataPROCESS_FILES[".highlightSearchResults"] = true;

$tableKeysPROCESS_FILES = array();
$tableKeysPROCESS_FILES[] = "PRF_UID";
$tdataPROCESS_FILES[".Keys"] = $tableKeysPROCESS_FILES;

$tdataPROCESS_FILES[".listFields"] = array();
$tdataPROCESS_FILES[".listFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".listFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".listFields"][] = "USR_UID";
$tdataPROCESS_FILES[".listFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".listFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".listFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".listFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".listFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".listFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".hideMobileList"] = array();


$tdataPROCESS_FILES[".viewFields"] = array();
$tdataPROCESS_FILES[".viewFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".viewFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".viewFields"][] = "USR_UID";
$tdataPROCESS_FILES[".viewFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".viewFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".viewFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".viewFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".viewFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".viewFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".addFields"] = array();
$tdataPROCESS_FILES[".addFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".addFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".addFields"][] = "USR_UID";
$tdataPROCESS_FILES[".addFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".addFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".addFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".addFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".addFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".addFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".masterListFields"] = array();
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".masterListFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".masterListFields"][] = "USR_UID";
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".masterListFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".inlineAddFields"] = array();
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".inlineAddFields"][] = "USR_UID";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".inlineAddFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".editFields"] = array();
$tdataPROCESS_FILES[".editFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".editFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".editFields"][] = "USR_UID";
$tdataPROCESS_FILES[".editFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".editFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".editFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".editFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".editFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".editFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".inlineEditFields"] = array();
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".inlineEditFields"][] = "USR_UID";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".inlineEditFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".updateSelectedFields"] = array();
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "USR_UID";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".updateSelectedFields"][] = "PRF_UPDATE_DATE";


$tdataPROCESS_FILES[".exportFields"] = array();
$tdataPROCESS_FILES[".exportFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".exportFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".exportFields"][] = "USR_UID";
$tdataPROCESS_FILES[".exportFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".exportFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".exportFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".exportFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".exportFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".exportFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".importFields"] = array();
$tdataPROCESS_FILES[".importFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".importFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".importFields"][] = "USR_UID";
$tdataPROCESS_FILES[".importFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".importFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".importFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".importFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".importFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".importFields"][] = "PRF_UPDATE_DATE";

$tdataPROCESS_FILES[".printFields"] = array();
$tdataPROCESS_FILES[".printFields"][] = "PRF_UID";
$tdataPROCESS_FILES[".printFields"][] = "PRO_UID";
$tdataPROCESS_FILES[".printFields"][] = "USR_UID";
$tdataPROCESS_FILES[".printFields"][] = "PRF_UPDATE_USR_UID";
$tdataPROCESS_FILES[".printFields"][] = "PRF_PATH";
$tdataPROCESS_FILES[".printFields"][] = "PRF_TYPE";
$tdataPROCESS_FILES[".printFields"][] = "PRF_EDITABLE";
$tdataPROCESS_FILES[".printFields"][] = "PRF_CREATE_DATE";
$tdataPROCESS_FILES[".printFields"][] = "PRF_UPDATE_DATE";

//	PRF_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRF_UID";
	$fdata["GoodName"] = "PRF_UID";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_UID");
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

		$fdata["strField"] = "PRF_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_UID";

	
	
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




	$tdataPROCESS_FILES["PRF_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRO_UID");
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




	$tdataPROCESS_FILES["PRO_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","USR_UID");
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




	$tdataPROCESS_FILES["USR_UID"] = $fdata;
//	PRF_UPDATE_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRF_UPDATE_USR_UID";
	$fdata["GoodName"] = "PRF_UPDATE_USR_UID";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_UPDATE_USR_UID");
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

		$fdata["strField"] = "PRF_UPDATE_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_UPDATE_USR_UID";

	
	
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




	$tdataPROCESS_FILES["PRF_UPDATE_USR_UID"] = $fdata;
//	PRF_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRF_PATH";
	$fdata["GoodName"] = "PRF_PATH";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_PATH");
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

		$fdata["strField"] = "PRF_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_PATH";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdataPROCESS_FILES["PRF_PATH"] = $fdata;
//	PRF_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRF_TYPE";
	$fdata["GoodName"] = "PRF_TYPE";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_TYPE");
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

		$fdata["strField"] = "PRF_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_TYPE";

	
	
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




	$tdataPROCESS_FILES["PRF_TYPE"] = $fdata;
//	PRF_EDITABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRF_EDITABLE";
	$fdata["GoodName"] = "PRF_EDITABLE";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_EDITABLE");
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

		$fdata["strField"] = "PRF_EDITABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_EDITABLE";

	
	
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




	$tdataPROCESS_FILES["PRF_EDITABLE"] = $fdata;
//	PRF_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRF_CREATE_DATE";
	$fdata["GoodName"] = "PRF_CREATE_DATE";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_CREATE_DATE");
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

		$fdata["strField"] = "PRF_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_CREATE_DATE";

	
	
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




	$tdataPROCESS_FILES["PRF_CREATE_DATE"] = $fdata;
//	PRF_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRF_UPDATE_DATE";
	$fdata["GoodName"] = "PRF_UPDATE_DATE";
	$fdata["ownerTable"] = "PROCESS_FILES";
	$fdata["Label"] = GetFieldLabel("PROCESS_FILES","PRF_UPDATE_DATE");
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

		$fdata["strField"] = "PRF_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_UPDATE_DATE";

	
	
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




	$tdataPROCESS_FILES["PRF_UPDATE_DATE"] = $fdata;


$tables_data["PROCESS_FILES"]=&$tdataPROCESS_FILES;
$field_labels["PROCESS_FILES"] = &$fieldLabelsPROCESS_FILES;
$fieldToolTips["PROCESS_FILES"] = &$fieldToolTipsPROCESS_FILES;
$placeHolders["PROCESS_FILES"] = &$placeHoldersPROCESS_FILES;
$page_titles["PROCESS_FILES"] = &$pageTitlesPROCESS_FILES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PROCESS_FILES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PROCESS_FILES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PROCESS_FILES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRF_UID,  	PRO_UID,  	USR_UID,  	PRF_UPDATE_USR_UID,  	PRF_PATH,  	PRF_TYPE,  	PRF_EDITABLE,  	PRF_CREATE_DATE,  	PRF_UPDATE_DATE";
$proto0["m_strFrom"] = "FROM PROCESS_FILES";
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
	"m_strName" => "PRF_UID",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto6["m_sql"] = "PRF_UID";
$proto6["m_srcTableName"] = "PROCESS_FILES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "PROCESS_FILES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto10["m_sql"] = "USR_UID";
$proto10["m_srcTableName"] = "PROCESS_FILES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_UPDATE_USR_UID",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto12["m_sql"] = "PRF_UPDATE_USR_UID";
$proto12["m_srcTableName"] = "PROCESS_FILES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_PATH",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto14["m_sql"] = "PRF_PATH";
$proto14["m_srcTableName"] = "PROCESS_FILES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_TYPE",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto16["m_sql"] = "PRF_TYPE";
$proto16["m_srcTableName"] = "PROCESS_FILES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_EDITABLE",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto18["m_sql"] = "PRF_EDITABLE";
$proto18["m_srcTableName"] = "PROCESS_FILES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_CREATE_DATE",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto20["m_sql"] = "PRF_CREATE_DATE";
$proto20["m_srcTableName"] = "PROCESS_FILES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_UPDATE_DATE",
	"m_strTable" => "PROCESS_FILES",
	"m_srcTableName" => "PROCESS_FILES"
));

$proto22["m_sql"] = "PRF_UPDATE_DATE";
$proto22["m_srcTableName"] = "PROCESS_FILES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "PROCESS_FILES";
$proto25["m_srcTableName"] = "PROCESS_FILES";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "PRF_UID";
$proto25["m_columns"][] = "PRO_UID";
$proto25["m_columns"][] = "USR_UID";
$proto25["m_columns"][] = "PRF_UPDATE_USR_UID";
$proto25["m_columns"][] = "PRF_PATH";
$proto25["m_columns"][] = "PRF_TYPE";
$proto25["m_columns"][] = "PRF_EDITABLE";
$proto25["m_columns"][] = "PRF_CREATE_DATE";
$proto25["m_columns"][] = "PRF_UPDATE_DATE";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "PROCESS_FILES";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "PROCESS_FILES";
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
$proto0["m_srcTableName"]="PROCESS_FILES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PROCESS_FILES = createSqlQuery_PROCESS_FILES();


	
						;

									

$tdataPROCESS_FILES[".sqlquery"] = $queryData_PROCESS_FILES;

$tableEvents["PROCESS_FILES"] = new eventsBase;
$tdataPROCESS_FILES[".hasEvents"] = false;

?>
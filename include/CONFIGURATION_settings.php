<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONFIGURATION = array();
	$tdataCONFIGURATION[".truncateText"] = true;
	$tdataCONFIGURATION[".NumberOfChars"] = 20;
	$tdataCONFIGURATION[".ShortName"] = "CONFIGURATION";
	$tdataCONFIGURATION[".OwnerID"] = "";
	$tdataCONFIGURATION[".OriginalTable"] = "CONFIGURATION";

//	field labels
$fieldLabelsCONFIGURATION = array();
$fieldToolTipsCONFIGURATION = array();
$pageTitlesCONFIGURATION = array();
$placeHoldersCONFIGURATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONFIGURATION["Japanese"] = array();
	$fieldToolTipsCONFIGURATION["Japanese"] = array();
	$placeHoldersCONFIGURATION["Japanese"] = array();
	$pageTitlesCONFIGURATION["Japanese"] = array();
	$fieldLabelsCONFIGURATION["Japanese"]["CFG_UID"] = "CFGのUID";
	$fieldToolTipsCONFIGURATION["Japanese"]["CFG_UID"] = "";
	$placeHoldersCONFIGURATION["Japanese"]["CFG_UID"] = "";
	$fieldLabelsCONFIGURATION["Japanese"]["OBJ_UID"] = "OBJのuid";
	$fieldToolTipsCONFIGURATION["Japanese"]["OBJ_UID"] = "";
	$placeHoldersCONFIGURATION["Japanese"]["OBJ_UID"] = "";
	$fieldLabelsCONFIGURATION["Japanese"]["CFG_VALUE"] = "CFG値";
	$fieldToolTipsCONFIGURATION["Japanese"]["CFG_VALUE"] = "";
	$placeHoldersCONFIGURATION["Japanese"]["CFG_VALUE"] = "";
	$fieldLabelsCONFIGURATION["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCONFIGURATION["Japanese"]["PRO_UID"] = "";
	$placeHoldersCONFIGURATION["Japanese"]["PRO_UID"] = "";
	$fieldLabelsCONFIGURATION["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsCONFIGURATION["Japanese"]["USR_UID"] = "";
	$placeHoldersCONFIGURATION["Japanese"]["USR_UID"] = "";
	$fieldLabelsCONFIGURATION["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsCONFIGURATION["Japanese"]["APP_UID"] = "";
	$placeHoldersCONFIGURATION["Japanese"]["APP_UID"] = "";
	if (count($fieldToolTipsCONFIGURATION["Japanese"]))
		$tdataCONFIGURATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONFIGURATION["English"] = array();
	$fieldToolTipsCONFIGURATION["English"] = array();
	$placeHoldersCONFIGURATION["English"] = array();
	$pageTitlesCONFIGURATION["English"] = array();
	$fieldLabelsCONFIGURATION["English"]["CFG_UID"] = "CFGのUID";
	$fieldToolTipsCONFIGURATION["English"]["CFG_UID"] = "";
	$placeHoldersCONFIGURATION["English"]["CFG_UID"] = "";
	$fieldLabelsCONFIGURATION["English"]["OBJ_UID"] = "OBJのuid";
	$fieldToolTipsCONFIGURATION["English"]["OBJ_UID"] = "";
	$placeHoldersCONFIGURATION["English"]["OBJ_UID"] = "";
	$fieldLabelsCONFIGURATION["English"]["CFG_VALUE"] = "CFG値";
	$fieldToolTipsCONFIGURATION["English"]["CFG_VALUE"] = "";
	$placeHoldersCONFIGURATION["English"]["CFG_VALUE"] = "";
	$fieldLabelsCONFIGURATION["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCONFIGURATION["English"]["PRO_UID"] = "";
	$placeHoldersCONFIGURATION["English"]["PRO_UID"] = "";
	$fieldLabelsCONFIGURATION["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsCONFIGURATION["English"]["USR_UID"] = "";
	$placeHoldersCONFIGURATION["English"]["USR_UID"] = "";
	$fieldLabelsCONFIGURATION["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsCONFIGURATION["English"]["APP_UID"] = "";
	$placeHoldersCONFIGURATION["English"]["APP_UID"] = "";
	if (count($fieldToolTipsCONFIGURATION["English"]))
		$tdataCONFIGURATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONFIGURATION[""] = array();
	$fieldToolTipsCONFIGURATION[""] = array();
	$placeHoldersCONFIGURATION[""] = array();
	$pageTitlesCONFIGURATION[""] = array();
	if (count($fieldToolTipsCONFIGURATION[""]))
		$tdataCONFIGURATION[".isUseToolTips"] = true;
}


	$tdataCONFIGURATION[".NCSearch"] = true;



$tdataCONFIGURATION[".shortTableName"] = "CONFIGURATION";
$tdataCONFIGURATION[".nSecOptions"] = 0;
$tdataCONFIGURATION[".recsPerRowPrint"] = 1;
$tdataCONFIGURATION[".mainTableOwnerID"] = "";
$tdataCONFIGURATION[".moveNext"] = 0;
$tdataCONFIGURATION[".entityType"] = 0;

$tdataCONFIGURATION[".strOriginalTableName"] = "CONFIGURATION";

	



$tdataCONFIGURATION[".showAddInPopup"] = false;

$tdataCONFIGURATION[".showEditInPopup"] = false;

$tdataCONFIGURATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONFIGURATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONFIGURATION[".fieldsForRegister"] = array();
	
$tdataCONFIGURATION[".listAjax"] = false;

	$tdataCONFIGURATION[".audit"] = true;

	$tdataCONFIGURATION[".locking"] = false;

$tdataCONFIGURATION[".edit"] = true;
$tdataCONFIGURATION[".afterEditAction"] = 1;
$tdataCONFIGURATION[".closePopupAfterEdit"] = 1;
$tdataCONFIGURATION[".afterEditActionDetTable"] = "";

$tdataCONFIGURATION[".add"] = true;
$tdataCONFIGURATION[".afterAddAction"] = 1;
$tdataCONFIGURATION[".closePopupAfterAdd"] = 1;
$tdataCONFIGURATION[".afterAddActionDetTable"] = "";

$tdataCONFIGURATION[".list"] = true;

$tdataCONFIGURATION[".inlineEdit"] = true;


$tdataCONFIGURATION[".reorderRecordsByHeader"] = true;
$tdataCONFIGURATION[".createSortByDropdown"] = true;
$tdataCONFIGURATION[".strSortControlSettingsJSON"] = "";



$tdataCONFIGURATION[".inlineAdd"] = true;
$tdataCONFIGURATION[".view"] = true;

$tdataCONFIGURATION[".import"] = true;

$tdataCONFIGURATION[".exportTo"] = true;

$tdataCONFIGURATION[".printFriendly"] = true;

$tdataCONFIGURATION[".delete"] = true;

$tdataCONFIGURATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONFIGURATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONFIGURATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONFIGURATION[".searchSaving"] = false;
//

$tdataCONFIGURATION[".showSearchPanel"] = true;
		$tdataCONFIGURATION[".flexibleSearch"] = true;

$tdataCONFIGURATION[".isUseAjaxSuggest"] = true;

$tdataCONFIGURATION[".rowHighlite"] = true;



				

$tdataCONFIGURATION[".ajaxCodeSnippetAdded"] = false;

$tdataCONFIGURATION[".buttonsAdded"] = false;

$tdataCONFIGURATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONFIGURATION[".isUseTimeForSearch"] = false;





$tdataCONFIGURATION[".allSearchFields"] = array();
$tdataCONFIGURATION[".filterFields"] = array();
$tdataCONFIGURATION[".requiredSearchFields"] = array();

$tdataCONFIGURATION[".allSearchFields"][] = "CFG_UID";
	$tdataCONFIGURATION[".allSearchFields"][] = "OBJ_UID";
	$tdataCONFIGURATION[".allSearchFields"][] = "CFG_VALUE";
	$tdataCONFIGURATION[".allSearchFields"][] = "PRO_UID";
	$tdataCONFIGURATION[".allSearchFields"][] = "USR_UID";
	$tdataCONFIGURATION[".allSearchFields"][] = "APP_UID";
	

$tdataCONFIGURATION[".googleLikeFields"] = array();
$tdataCONFIGURATION[".googleLikeFields"][] = "CFG_UID";
$tdataCONFIGURATION[".googleLikeFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".googleLikeFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".googleLikeFields"][] = "PRO_UID";
$tdataCONFIGURATION[".googleLikeFields"][] = "USR_UID";
$tdataCONFIGURATION[".googleLikeFields"][] = "APP_UID";


$tdataCONFIGURATION[".advSearchFields"] = array();
$tdataCONFIGURATION[".advSearchFields"][] = "CFG_UID";
$tdataCONFIGURATION[".advSearchFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".advSearchFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".advSearchFields"][] = "PRO_UID";
$tdataCONFIGURATION[".advSearchFields"][] = "USR_UID";
$tdataCONFIGURATION[".advSearchFields"][] = "APP_UID";

$tdataCONFIGURATION[".tableType"] = "list";

$tdataCONFIGURATION[".printerPageOrientation"] = 0;
$tdataCONFIGURATION[".nPrinterPageScale"] = 100;

$tdataCONFIGURATION[".nPrinterSplitRecords"] = 40;

$tdataCONFIGURATION[".nPrinterPDFSplitRecords"] = 40;



$tdataCONFIGURATION[".geocodingEnabled"] = false;





$tdataCONFIGURATION[".listGridLayout"] = 3;


$tdataCONFIGURATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONFIGURATION[".pageSize"] = 20;

$tdataCONFIGURATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONFIGURATION[".strOrderBy"] = $tstrOrderBy;

$tdataCONFIGURATION[".orderindexes"] = array();

$tdataCONFIGURATION[".sqlHead"] = "SELECT CFG_UID,  	OBJ_UID,  	CFG_VALUE,  	PRO_UID,  	USR_UID,  	APP_UID";
$tdataCONFIGURATION[".sqlFrom"] = "FROM CONFIGURATION";
$tdataCONFIGURATION[".sqlWhereExpr"] = "";
$tdataCONFIGURATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONFIGURATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONFIGURATION[".arrGroupsPerPage"] = $arrGPP;

$tdataCONFIGURATION[".highlightSearchResults"] = true;

$tableKeysCONFIGURATION = array();
$tableKeysCONFIGURATION[] = "CFG_UID";
$tableKeysCONFIGURATION[] = "OBJ_UID";
$tableKeysCONFIGURATION[] = "PRO_UID";
$tableKeysCONFIGURATION[] = "USR_UID";
$tableKeysCONFIGURATION[] = "APP_UID";
$tdataCONFIGURATION[".Keys"] = $tableKeysCONFIGURATION;

$tdataCONFIGURATION[".listFields"] = array();
$tdataCONFIGURATION[".listFields"][] = "CFG_UID";
$tdataCONFIGURATION[".listFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".listFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".listFields"][] = "PRO_UID";
$tdataCONFIGURATION[".listFields"][] = "USR_UID";
$tdataCONFIGURATION[".listFields"][] = "APP_UID";

$tdataCONFIGURATION[".hideMobileList"] = array();


$tdataCONFIGURATION[".viewFields"] = array();
$tdataCONFIGURATION[".viewFields"][] = "CFG_UID";
$tdataCONFIGURATION[".viewFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".viewFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".viewFields"][] = "PRO_UID";
$tdataCONFIGURATION[".viewFields"][] = "USR_UID";
$tdataCONFIGURATION[".viewFields"][] = "APP_UID";

$tdataCONFIGURATION[".addFields"] = array();
$tdataCONFIGURATION[".addFields"][] = "CFG_UID";
$tdataCONFIGURATION[".addFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".addFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".addFields"][] = "PRO_UID";
$tdataCONFIGURATION[".addFields"][] = "USR_UID";
$tdataCONFIGURATION[".addFields"][] = "APP_UID";

$tdataCONFIGURATION[".masterListFields"] = array();
$tdataCONFIGURATION[".masterListFields"][] = "CFG_UID";
$tdataCONFIGURATION[".masterListFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".masterListFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".masterListFields"][] = "PRO_UID";
$tdataCONFIGURATION[".masterListFields"][] = "USR_UID";
$tdataCONFIGURATION[".masterListFields"][] = "APP_UID";

$tdataCONFIGURATION[".inlineAddFields"] = array();
$tdataCONFIGURATION[".inlineAddFields"][] = "CFG_UID";
$tdataCONFIGURATION[".inlineAddFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".inlineAddFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".inlineAddFields"][] = "PRO_UID";
$tdataCONFIGURATION[".inlineAddFields"][] = "USR_UID";
$tdataCONFIGURATION[".inlineAddFields"][] = "APP_UID";

$tdataCONFIGURATION[".editFields"] = array();
$tdataCONFIGURATION[".editFields"][] = "CFG_UID";
$tdataCONFIGURATION[".editFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".editFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".editFields"][] = "PRO_UID";
$tdataCONFIGURATION[".editFields"][] = "USR_UID";
$tdataCONFIGURATION[".editFields"][] = "APP_UID";

$tdataCONFIGURATION[".inlineEditFields"] = array();
$tdataCONFIGURATION[".inlineEditFields"][] = "CFG_UID";
$tdataCONFIGURATION[".inlineEditFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".inlineEditFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".inlineEditFields"][] = "PRO_UID";
$tdataCONFIGURATION[".inlineEditFields"][] = "USR_UID";
$tdataCONFIGURATION[".inlineEditFields"][] = "APP_UID";

$tdataCONFIGURATION[".updateSelectedFields"] = array();
$tdataCONFIGURATION[".updateSelectedFields"][] = "CFG_UID";
$tdataCONFIGURATION[".updateSelectedFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".updateSelectedFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".updateSelectedFields"][] = "PRO_UID";
$tdataCONFIGURATION[".updateSelectedFields"][] = "USR_UID";
$tdataCONFIGURATION[".updateSelectedFields"][] = "APP_UID";


$tdataCONFIGURATION[".exportFields"] = array();
$tdataCONFIGURATION[".exportFields"][] = "CFG_UID";
$tdataCONFIGURATION[".exportFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".exportFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".exportFields"][] = "PRO_UID";
$tdataCONFIGURATION[".exportFields"][] = "USR_UID";
$tdataCONFIGURATION[".exportFields"][] = "APP_UID";

$tdataCONFIGURATION[".importFields"] = array();
$tdataCONFIGURATION[".importFields"][] = "CFG_UID";
$tdataCONFIGURATION[".importFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".importFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".importFields"][] = "PRO_UID";
$tdataCONFIGURATION[".importFields"][] = "USR_UID";
$tdataCONFIGURATION[".importFields"][] = "APP_UID";

$tdataCONFIGURATION[".printFields"] = array();
$tdataCONFIGURATION[".printFields"][] = "CFG_UID";
$tdataCONFIGURATION[".printFields"][] = "OBJ_UID";
$tdataCONFIGURATION[".printFields"][] = "CFG_VALUE";
$tdataCONFIGURATION[".printFields"][] = "PRO_UID";
$tdataCONFIGURATION[".printFields"][] = "USR_UID";
$tdataCONFIGURATION[".printFields"][] = "APP_UID";

//	CFG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CFG_UID";
	$fdata["GoodName"] = "CFG_UID";
	$fdata["ownerTable"] = "CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("CONFIGURATION","CFG_UID");
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

		$fdata["strField"] = "CFG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CFG_UID";

	
	
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




	$tdataCONFIGURATION["CFG_UID"] = $fdata;
//	OBJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OBJ_UID";
	$fdata["GoodName"] = "OBJ_UID";
	$fdata["ownerTable"] = "CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("CONFIGURATION","OBJ_UID");
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

		$fdata["strField"] = "OBJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ_UID";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataCONFIGURATION["OBJ_UID"] = $fdata;
//	CFG_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CFG_VALUE";
	$fdata["GoodName"] = "CFG_VALUE";
	$fdata["ownerTable"] = "CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("CONFIGURATION","CFG_VALUE");
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

		$fdata["strField"] = "CFG_VALUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CFG_VALUE";

	
	
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




	$tdataCONFIGURATION["CFG_VALUE"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("CONFIGURATION","PRO_UID");
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




	$tdataCONFIGURATION["PRO_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("CONFIGURATION","USR_UID");
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




	$tdataCONFIGURATION["USR_UID"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("CONFIGURATION","APP_UID");
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




	$tdataCONFIGURATION["APP_UID"] = $fdata;


$tables_data["CONFIGURATION"]=&$tdataCONFIGURATION;
$field_labels["CONFIGURATION"] = &$fieldLabelsCONFIGURATION;
$fieldToolTips["CONFIGURATION"] = &$fieldToolTipsCONFIGURATION;
$placeHolders["CONFIGURATION"] = &$placeHoldersCONFIGURATION;
$page_titles["CONFIGURATION"] = &$pageTitlesCONFIGURATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONFIGURATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONFIGURATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONFIGURATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CFG_UID,  	OBJ_UID,  	CFG_VALUE,  	PRO_UID,  	USR_UID,  	APP_UID";
$proto0["m_strFrom"] = "FROM CONFIGURATION";
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
	"m_strName" => "CFG_UID",
	"m_strTable" => "CONFIGURATION",
	"m_srcTableName" => "CONFIGURATION"
));

$proto6["m_sql"] = "CFG_UID";
$proto6["m_srcTableName"] = "CONFIGURATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ_UID",
	"m_strTable" => "CONFIGURATION",
	"m_srcTableName" => "CONFIGURATION"
));

$proto8["m_sql"] = "OBJ_UID";
$proto8["m_srcTableName"] = "CONFIGURATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CFG_VALUE",
	"m_strTable" => "CONFIGURATION",
	"m_srcTableName" => "CONFIGURATION"
));

$proto10["m_sql"] = "CFG_VALUE";
$proto10["m_srcTableName"] = "CONFIGURATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "CONFIGURATION",
	"m_srcTableName" => "CONFIGURATION"
));

$proto12["m_sql"] = "PRO_UID";
$proto12["m_srcTableName"] = "CONFIGURATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "CONFIGURATION",
	"m_srcTableName" => "CONFIGURATION"
));

$proto14["m_sql"] = "USR_UID";
$proto14["m_srcTableName"] = "CONFIGURATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "CONFIGURATION",
	"m_srcTableName" => "CONFIGURATION"
));

$proto16["m_sql"] = "APP_UID";
$proto16["m_srcTableName"] = "CONFIGURATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "CONFIGURATION";
$proto19["m_srcTableName"] = "CONFIGURATION";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "CFG_UID";
$proto19["m_columns"][] = "OBJ_UID";
$proto19["m_columns"][] = "CFG_VALUE";
$proto19["m_columns"][] = "PRO_UID";
$proto19["m_columns"][] = "USR_UID";
$proto19["m_columns"][] = "APP_UID";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "CONFIGURATION";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "CONFIGURATION";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="CONFIGURATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONFIGURATION = createSqlQuery_CONFIGURATION();


	
						;

						

$tdataCONFIGURATION[".sqlquery"] = $queryData_CONFIGURATION;

$tableEvents["CONFIGURATION"] = new eventsBase;
$tdataCONFIGURATION[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSHADOW_TABLE = array();
	$tdataSHADOW_TABLE[".truncateText"] = true;
	$tdataSHADOW_TABLE[".NumberOfChars"] = 80;
	$tdataSHADOW_TABLE[".ShortName"] = "SHADOW_TABLE";
	$tdataSHADOW_TABLE[".OwnerID"] = "";
	$tdataSHADOW_TABLE[".OriginalTable"] = "SHADOW_TABLE";

//	field labels
$fieldLabelsSHADOW_TABLE = array();
$fieldToolTipsSHADOW_TABLE = array();
$pageTitlesSHADOW_TABLE = array();
$placeHoldersSHADOW_TABLE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSHADOW_TABLE["Japanese"] = array();
	$fieldToolTipsSHADOW_TABLE["Japanese"] = array();
	$placeHoldersSHADOW_TABLE["Japanese"] = array();
	$pageTitlesSHADOW_TABLE["Japanese"] = array();
	$fieldLabelsSHADOW_TABLE["Japanese"]["SHD_UID"] = "SHD UID";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["SHD_UID"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["SHD_UID"] = "";
	$fieldLabelsSHADOW_TABLE["Japanese"]["ADD_TAB_UID"] = "ADD TAB UID";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["ADD_TAB_UID"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["ADD_TAB_UID"] = "";
	$fieldLabelsSHADOW_TABLE["Japanese"]["SHD_ACTION"] = "SHD ACTION";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["SHD_ACTION"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["SHD_ACTION"] = "";
	$fieldLabelsSHADOW_TABLE["Japanese"]["SHD_DETAILS"] = "SHD DETAILS";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["SHD_DETAILS"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["SHD_DETAILS"] = "";
	$fieldLabelsSHADOW_TABLE["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["USR_UID"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["USR_UID"] = "";
	$fieldLabelsSHADOW_TABLE["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["APP_UID"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["APP_UID"] = "";
	$fieldLabelsSHADOW_TABLE["Japanese"]["SHD_DATE"] = "SHD DATE";
	$fieldToolTipsSHADOW_TABLE["Japanese"]["SHD_DATE"] = "";
	$placeHoldersSHADOW_TABLE["Japanese"]["SHD_DATE"] = "";
	if (count($fieldToolTipsSHADOW_TABLE["Japanese"]))
		$tdataSHADOW_TABLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSHADOW_TABLE["English"] = array();
	$fieldToolTipsSHADOW_TABLE["English"] = array();
	$placeHoldersSHADOW_TABLE["English"] = array();
	$pageTitlesSHADOW_TABLE["English"] = array();
	$fieldLabelsSHADOW_TABLE["English"]["SHD_UID"] = "SHD UID";
	$fieldToolTipsSHADOW_TABLE["English"]["SHD_UID"] = "";
	$placeHoldersSHADOW_TABLE["English"]["SHD_UID"] = "";
	$fieldLabelsSHADOW_TABLE["English"]["ADD_TAB_UID"] = "ADD TAB UID";
	$fieldToolTipsSHADOW_TABLE["English"]["ADD_TAB_UID"] = "";
	$placeHoldersSHADOW_TABLE["English"]["ADD_TAB_UID"] = "";
	$fieldLabelsSHADOW_TABLE["English"]["SHD_ACTION"] = "SHD ACTION";
	$fieldToolTipsSHADOW_TABLE["English"]["SHD_ACTION"] = "";
	$placeHoldersSHADOW_TABLE["English"]["SHD_ACTION"] = "";
	$fieldLabelsSHADOW_TABLE["English"]["SHD_DETAILS"] = "SHD DETAILS";
	$fieldToolTipsSHADOW_TABLE["English"]["SHD_DETAILS"] = "";
	$placeHoldersSHADOW_TABLE["English"]["SHD_DETAILS"] = "";
	$fieldLabelsSHADOW_TABLE["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsSHADOW_TABLE["English"]["USR_UID"] = "";
	$placeHoldersSHADOW_TABLE["English"]["USR_UID"] = "";
	$fieldLabelsSHADOW_TABLE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsSHADOW_TABLE["English"]["APP_UID"] = "";
	$placeHoldersSHADOW_TABLE["English"]["APP_UID"] = "";
	$fieldLabelsSHADOW_TABLE["English"]["SHD_DATE"] = "SHD DATE";
	$fieldToolTipsSHADOW_TABLE["English"]["SHD_DATE"] = "";
	$placeHoldersSHADOW_TABLE["English"]["SHD_DATE"] = "";
	if (count($fieldToolTipsSHADOW_TABLE["English"]))
		$tdataSHADOW_TABLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSHADOW_TABLE[""] = array();
	$fieldToolTipsSHADOW_TABLE[""] = array();
	$placeHoldersSHADOW_TABLE[""] = array();
	$pageTitlesSHADOW_TABLE[""] = array();
	$fieldLabelsSHADOW_TABLE[""]["SHD_UID"] = "SHD UID";
	$fieldToolTipsSHADOW_TABLE[""]["SHD_UID"] = "";
	$placeHoldersSHADOW_TABLE[""]["SHD_UID"] = "";
	$fieldLabelsSHADOW_TABLE[""]["ADD_TAB_UID"] = "ADD TAB UID";
	$fieldToolTipsSHADOW_TABLE[""]["ADD_TAB_UID"] = "";
	$placeHoldersSHADOW_TABLE[""]["ADD_TAB_UID"] = "";
	$fieldLabelsSHADOW_TABLE[""]["SHD_ACTION"] = "SHD ACTION";
	$fieldToolTipsSHADOW_TABLE[""]["SHD_ACTION"] = "";
	$placeHoldersSHADOW_TABLE[""]["SHD_ACTION"] = "";
	$fieldLabelsSHADOW_TABLE[""]["SHD_DETAILS"] = "SHD DETAILS";
	$fieldToolTipsSHADOW_TABLE[""]["SHD_DETAILS"] = "";
	$placeHoldersSHADOW_TABLE[""]["SHD_DETAILS"] = "";
	$fieldLabelsSHADOW_TABLE[""]["USR_UID"] = "USR UID";
	$fieldToolTipsSHADOW_TABLE[""]["USR_UID"] = "";
	$placeHoldersSHADOW_TABLE[""]["USR_UID"] = "";
	$fieldLabelsSHADOW_TABLE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsSHADOW_TABLE[""]["APP_UID"] = "";
	$placeHoldersSHADOW_TABLE[""]["APP_UID"] = "";
	$fieldLabelsSHADOW_TABLE[""]["SHD_DATE"] = "SHD DATE";
	$fieldToolTipsSHADOW_TABLE[""]["SHD_DATE"] = "";
	$placeHoldersSHADOW_TABLE[""]["SHD_DATE"] = "";
	if (count($fieldToolTipsSHADOW_TABLE[""]))
		$tdataSHADOW_TABLE[".isUseToolTips"] = true;
}


	$tdataSHADOW_TABLE[".NCSearch"] = true;



$tdataSHADOW_TABLE[".shortTableName"] = "SHADOW_TABLE";
$tdataSHADOW_TABLE[".nSecOptions"] = 0;
$tdataSHADOW_TABLE[".recsPerRowPrint"] = 1;
$tdataSHADOW_TABLE[".mainTableOwnerID"] = "";
$tdataSHADOW_TABLE[".moveNext"] = 1;
$tdataSHADOW_TABLE[".entityType"] = 0;

$tdataSHADOW_TABLE[".strOriginalTableName"] = "SHADOW_TABLE";

	



$tdataSHADOW_TABLE[".showAddInPopup"] = false;

$tdataSHADOW_TABLE[".showEditInPopup"] = false;

$tdataSHADOW_TABLE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSHADOW_TABLE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSHADOW_TABLE[".fieldsForRegister"] = array();
	
$tdataSHADOW_TABLE[".listAjax"] = false;

	$tdataSHADOW_TABLE[".audit"] = false;

	$tdataSHADOW_TABLE[".locking"] = false;

$tdataSHADOW_TABLE[".edit"] = true;
$tdataSHADOW_TABLE[".afterEditAction"] = 1;
$tdataSHADOW_TABLE[".closePopupAfterEdit"] = 1;
$tdataSHADOW_TABLE[".afterEditActionDetTable"] = "";

$tdataSHADOW_TABLE[".add"] = true;
$tdataSHADOW_TABLE[".afterAddAction"] = 1;
$tdataSHADOW_TABLE[".closePopupAfterAdd"] = 1;
$tdataSHADOW_TABLE[".afterAddActionDetTable"] = "";

$tdataSHADOW_TABLE[".list"] = true;



$tdataSHADOW_TABLE[".reorderRecordsByHeader"] = true;



$tdataSHADOW_TABLE[".view"] = true;

$tdataSHADOW_TABLE[".import"] = true;

$tdataSHADOW_TABLE[".exportTo"] = true;

$tdataSHADOW_TABLE[".printFriendly"] = true;

$tdataSHADOW_TABLE[".delete"] = true;

$tdataSHADOW_TABLE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSHADOW_TABLE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSHADOW_TABLE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSHADOW_TABLE[".searchSaving"] = false;
//

$tdataSHADOW_TABLE[".showSearchPanel"] = true;
		$tdataSHADOW_TABLE[".flexibleSearch"] = true;

$tdataSHADOW_TABLE[".isUseAjaxSuggest"] = true;

$tdataSHADOW_TABLE[".rowHighlite"] = true;



				

$tdataSHADOW_TABLE[".ajaxCodeSnippetAdded"] = false;

$tdataSHADOW_TABLE[".buttonsAdded"] = false;

$tdataSHADOW_TABLE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSHADOW_TABLE[".isUseTimeForSearch"] = false;





$tdataSHADOW_TABLE[".allSearchFields"] = array();
$tdataSHADOW_TABLE[".filterFields"] = array();
$tdataSHADOW_TABLE[".requiredSearchFields"] = array();

$tdataSHADOW_TABLE[".allSearchFields"][] = "SHD_UID";
	$tdataSHADOW_TABLE[".allSearchFields"][] = "ADD_TAB_UID";
	$tdataSHADOW_TABLE[".allSearchFields"][] = "SHD_ACTION";
	$tdataSHADOW_TABLE[".allSearchFields"][] = "SHD_DETAILS";
	$tdataSHADOW_TABLE[".allSearchFields"][] = "USR_UID";
	$tdataSHADOW_TABLE[".allSearchFields"][] = "APP_UID";
	$tdataSHADOW_TABLE[".allSearchFields"][] = "SHD_DATE";
	

$tdataSHADOW_TABLE[".googleLikeFields"] = array();
$tdataSHADOW_TABLE[".googleLikeFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".googleLikeFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".googleLikeFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".googleLikeFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".googleLikeFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".googleLikeFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".googleLikeFields"][] = "SHD_DATE";


$tdataSHADOW_TABLE[".advSearchFields"] = array();
$tdataSHADOW_TABLE[".advSearchFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".advSearchFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".advSearchFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".advSearchFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".advSearchFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".advSearchFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".advSearchFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".tableType"] = "list";

$tdataSHADOW_TABLE[".printerPageOrientation"] = 0;
$tdataSHADOW_TABLE[".nPrinterPageScale"] = 100;

$tdataSHADOW_TABLE[".nPrinterSplitRecords"] = 40;

$tdataSHADOW_TABLE[".nPrinterPDFSplitRecords"] = 40;



$tdataSHADOW_TABLE[".geocodingEnabled"] = false;





$tdataSHADOW_TABLE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataSHADOW_TABLE[".pageSize"] = 20;

$tdataSHADOW_TABLE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSHADOW_TABLE[".strOrderBy"] = $tstrOrderBy;

$tdataSHADOW_TABLE[".orderindexes"] = array();

$tdataSHADOW_TABLE[".sqlHead"] = "SELECT SHD_UID,  	ADD_TAB_UID,  	SHD_ACTION,  	SHD_DETAILS,  	USR_UID,  	APP_UID,  	SHD_DATE";
$tdataSHADOW_TABLE[".sqlFrom"] = "FROM SHADOW_TABLE";
$tdataSHADOW_TABLE[".sqlWhereExpr"] = "";
$tdataSHADOW_TABLE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSHADOW_TABLE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSHADOW_TABLE[".arrGroupsPerPage"] = $arrGPP;

$tdataSHADOW_TABLE[".highlightSearchResults"] = true;

$tableKeysSHADOW_TABLE = array();
$tableKeysSHADOW_TABLE[] = "SHD_UID";
$tdataSHADOW_TABLE[".Keys"] = $tableKeysSHADOW_TABLE;

$tdataSHADOW_TABLE[".listFields"] = array();
$tdataSHADOW_TABLE[".listFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".listFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".listFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".listFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".listFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".listFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".listFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".hideMobileList"] = array();


$tdataSHADOW_TABLE[".viewFields"] = array();
$tdataSHADOW_TABLE[".viewFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".viewFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".viewFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".viewFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".viewFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".viewFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".viewFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".addFields"] = array();
$tdataSHADOW_TABLE[".addFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".addFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".addFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".addFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".addFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".addFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".addFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".masterListFields"] = array();
$tdataSHADOW_TABLE[".masterListFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".masterListFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".masterListFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".masterListFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".masterListFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".masterListFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".masterListFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".inlineAddFields"] = array();
$tdataSHADOW_TABLE[".inlineAddFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".inlineAddFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".inlineAddFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".inlineAddFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".inlineAddFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".inlineAddFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".inlineAddFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".editFields"] = array();
$tdataSHADOW_TABLE[".editFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".editFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".editFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".editFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".editFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".editFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".editFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".inlineEditFields"] = array();
$tdataSHADOW_TABLE[".inlineEditFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".inlineEditFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".inlineEditFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".inlineEditFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".inlineEditFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".inlineEditFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".inlineEditFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".updateSelectedFields"] = array();
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".updateSelectedFields"][] = "SHD_DATE";


$tdataSHADOW_TABLE[".exportFields"] = array();
$tdataSHADOW_TABLE[".exportFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".exportFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".exportFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".exportFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".exportFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".exportFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".exportFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".importFields"] = array();
$tdataSHADOW_TABLE[".importFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".importFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".importFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".importFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".importFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".importFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".importFields"][] = "SHD_DATE";

$tdataSHADOW_TABLE[".printFields"] = array();
$tdataSHADOW_TABLE[".printFields"][] = "SHD_UID";
$tdataSHADOW_TABLE[".printFields"][] = "ADD_TAB_UID";
$tdataSHADOW_TABLE[".printFields"][] = "SHD_ACTION";
$tdataSHADOW_TABLE[".printFields"][] = "SHD_DETAILS";
$tdataSHADOW_TABLE[".printFields"][] = "USR_UID";
$tdataSHADOW_TABLE[".printFields"][] = "APP_UID";
$tdataSHADOW_TABLE[".printFields"][] = "SHD_DATE";

//	SHD_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SHD_UID";
	$fdata["GoodName"] = "SHD_UID";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","SHD_UID");
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

		$fdata["strField"] = "SHD_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHD_UID";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSHADOW_TABLE["SHD_UID"] = $fdata;
//	ADD_TAB_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ADD_TAB_UID";
	$fdata["GoodName"] = "ADD_TAB_UID";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","ADD_TAB_UID");
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

		$fdata["strField"] = "ADD_TAB_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_UID";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSHADOW_TABLE["ADD_TAB_UID"] = $fdata;
//	SHD_ACTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SHD_ACTION";
	$fdata["GoodName"] = "SHD_ACTION";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","SHD_ACTION");
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

		$fdata["strField"] = "SHD_ACTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHD_ACTION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSHADOW_TABLE["SHD_ACTION"] = $fdata;
//	SHD_DETAILS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SHD_DETAILS";
	$fdata["GoodName"] = "SHD_DETAILS";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","SHD_DETAILS");
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

		$fdata["strField"] = "SHD_DETAILS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHD_DETAILS";

	
	
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




	$tdataSHADOW_TABLE["SHD_DETAILS"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","USR_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSHADOW_TABLE["USR_UID"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","APP_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSHADOW_TABLE["APP_UID"] = $fdata;
//	SHD_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SHD_DATE";
	$fdata["GoodName"] = "SHD_DATE";
	$fdata["ownerTable"] = "SHADOW_TABLE";
	$fdata["Label"] = GetFieldLabel("SHADOW_TABLE","SHD_DATE");
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

		$fdata["strField"] = "SHD_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SHD_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataSHADOW_TABLE["SHD_DATE"] = $fdata;


$tables_data["SHADOW_TABLE"]=&$tdataSHADOW_TABLE;
$field_labels["SHADOW_TABLE"] = &$fieldLabelsSHADOW_TABLE;
$fieldToolTips["SHADOW_TABLE"] = &$fieldToolTipsSHADOW_TABLE;
$placeHolders["SHADOW_TABLE"] = &$placeHoldersSHADOW_TABLE;
$page_titles["SHADOW_TABLE"] = &$pageTitlesSHADOW_TABLE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SHADOW_TABLE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SHADOW_TABLE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SHADOW_TABLE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SHD_UID,  	ADD_TAB_UID,  	SHD_ACTION,  	SHD_DETAILS,  	USR_UID,  	APP_UID,  	SHD_DATE";
$proto0["m_strFrom"] = "FROM SHADOW_TABLE";
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
	"m_strName" => "SHD_UID",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto6["m_sql"] = "SHD_UID";
$proto6["m_srcTableName"] = "SHADOW_TABLE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_UID",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto8["m_sql"] = "ADD_TAB_UID";
$proto8["m_srcTableName"] = "SHADOW_TABLE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SHD_ACTION",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto10["m_sql"] = "SHD_ACTION";
$proto10["m_srcTableName"] = "SHADOW_TABLE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SHD_DETAILS",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto12["m_sql"] = "SHD_DETAILS";
$proto12["m_srcTableName"] = "SHADOW_TABLE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto14["m_sql"] = "USR_UID";
$proto14["m_srcTableName"] = "SHADOW_TABLE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto16["m_sql"] = "APP_UID";
$proto16["m_srcTableName"] = "SHADOW_TABLE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SHD_DATE",
	"m_strTable" => "SHADOW_TABLE",
	"m_srcTableName" => "SHADOW_TABLE"
));

$proto18["m_sql"] = "SHD_DATE";
$proto18["m_srcTableName"] = "SHADOW_TABLE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "SHADOW_TABLE";
$proto21["m_srcTableName"] = "SHADOW_TABLE";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "SHD_UID";
$proto21["m_columns"][] = "ADD_TAB_UID";
$proto21["m_columns"][] = "SHD_ACTION";
$proto21["m_columns"][] = "SHD_DETAILS";
$proto21["m_columns"][] = "USR_UID";
$proto21["m_columns"][] = "APP_UID";
$proto21["m_columns"][] = "SHD_DATE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "SHADOW_TABLE";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "SHADOW_TABLE";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SHADOW_TABLE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SHADOW_TABLE = createSqlQuery_SHADOW_TABLE();


	
						;

							

$tdataSHADOW_TABLE[".sqlquery"] = $queryData_SHADOW_TABLE;

$tableEvents["SHADOW_TABLE"] = new eventsBase;
$tdataSHADOW_TABLE[".hasEvents"] = false;

?>
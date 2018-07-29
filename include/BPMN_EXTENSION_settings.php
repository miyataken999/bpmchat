<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_EXTENSION = array();
	$tdataBPMN_EXTENSION[".truncateText"] = true;
	$tdataBPMN_EXTENSION[".NumberOfChars"] = 20;
	$tdataBPMN_EXTENSION[".ShortName"] = "BPMN_EXTENSION";
	$tdataBPMN_EXTENSION[".OwnerID"] = "";
	$tdataBPMN_EXTENSION[".OriginalTable"] = "BPMN_EXTENSION";

//	field labels
$fieldLabelsBPMN_EXTENSION = array();
$fieldToolTipsBPMN_EXTENSION = array();
$pageTitlesBPMN_EXTENSION = array();
$placeHoldersBPMN_EXTENSION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_EXTENSION["Japanese"] = array();
	$fieldToolTipsBPMN_EXTENSION["Japanese"] = array();
	$placeHoldersBPMN_EXTENSION["Japanese"] = array();
	$pageTitlesBPMN_EXTENSION["Japanese"] = array();
	$fieldLabelsBPMN_EXTENSION["Japanese"]["EXT_UID"] = "EXT UID";
	$fieldToolTipsBPMN_EXTENSION["Japanese"]["EXT_UID"] = "";
	$placeHoldersBPMN_EXTENSION["Japanese"]["EXT_UID"] = "";
	$fieldLabelsBPMN_EXTENSION["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_EXTENSION["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_EXTENSION["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_EXTENSION["Japanese"]["EXT_ELEMENT"] = "EXT要素";
	$fieldToolTipsBPMN_EXTENSION["Japanese"]["EXT_ELEMENT"] = "";
	$placeHoldersBPMN_EXTENSION["Japanese"]["EXT_ELEMENT"] = "";
	$fieldLabelsBPMN_EXTENSION["Japanese"]["EXT_ELEMENT_TYPE"] = "EXT要素型";
	$fieldToolTipsBPMN_EXTENSION["Japanese"]["EXT_ELEMENT_TYPE"] = "";
	$placeHoldersBPMN_EXTENSION["Japanese"]["EXT_ELEMENT_TYPE"] = "";
	$fieldLabelsBPMN_EXTENSION["Japanese"]["EXT_EXTENSION"] = "内線延長";
	$fieldToolTipsBPMN_EXTENSION["Japanese"]["EXT_EXTENSION"] = "";
	$placeHoldersBPMN_EXTENSION["Japanese"]["EXT_EXTENSION"] = "";
	if (count($fieldToolTipsBPMN_EXTENSION["Japanese"]))
		$tdataBPMN_EXTENSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_EXTENSION["English"] = array();
	$fieldToolTipsBPMN_EXTENSION["English"] = array();
	$placeHoldersBPMN_EXTENSION["English"] = array();
	$pageTitlesBPMN_EXTENSION["English"] = array();
	$fieldLabelsBPMN_EXTENSION["English"]["EXT_UID"] = "EXT UID";
	$fieldToolTipsBPMN_EXTENSION["English"]["EXT_UID"] = "";
	$placeHoldersBPMN_EXTENSION["English"]["EXT_UID"] = "";
	$fieldLabelsBPMN_EXTENSION["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_EXTENSION["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_EXTENSION["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_EXTENSION["English"]["EXT_ELEMENT"] = "EXT要素";
	$fieldToolTipsBPMN_EXTENSION["English"]["EXT_ELEMENT"] = "";
	$placeHoldersBPMN_EXTENSION["English"]["EXT_ELEMENT"] = "";
	$fieldLabelsBPMN_EXTENSION["English"]["EXT_ELEMENT_TYPE"] = "EXT要素型";
	$fieldToolTipsBPMN_EXTENSION["English"]["EXT_ELEMENT_TYPE"] = "";
	$placeHoldersBPMN_EXTENSION["English"]["EXT_ELEMENT_TYPE"] = "";
	$fieldLabelsBPMN_EXTENSION["English"]["EXT_EXTENSION"] = "内線延長";
	$fieldToolTipsBPMN_EXTENSION["English"]["EXT_EXTENSION"] = "";
	$placeHoldersBPMN_EXTENSION["English"]["EXT_EXTENSION"] = "";
	if (count($fieldToolTipsBPMN_EXTENSION["English"]))
		$tdataBPMN_EXTENSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_EXTENSION[""] = array();
	$fieldToolTipsBPMN_EXTENSION[""] = array();
	$placeHoldersBPMN_EXTENSION[""] = array();
	$pageTitlesBPMN_EXTENSION[""] = array();
	if (count($fieldToolTipsBPMN_EXTENSION[""]))
		$tdataBPMN_EXTENSION[".isUseToolTips"] = true;
}


	$tdataBPMN_EXTENSION[".NCSearch"] = true;



$tdataBPMN_EXTENSION[".shortTableName"] = "BPMN_EXTENSION";
$tdataBPMN_EXTENSION[".nSecOptions"] = 0;
$tdataBPMN_EXTENSION[".recsPerRowPrint"] = 1;
$tdataBPMN_EXTENSION[".mainTableOwnerID"] = "";
$tdataBPMN_EXTENSION[".moveNext"] = 0;
$tdataBPMN_EXTENSION[".entityType"] = 0;

$tdataBPMN_EXTENSION[".strOriginalTableName"] = "BPMN_EXTENSION";

	



$tdataBPMN_EXTENSION[".showAddInPopup"] = false;

$tdataBPMN_EXTENSION[".showEditInPopup"] = false;

$tdataBPMN_EXTENSION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_EXTENSION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_EXTENSION[".fieldsForRegister"] = array();
	
$tdataBPMN_EXTENSION[".listAjax"] = false;

	$tdataBPMN_EXTENSION[".audit"] = true;

	$tdataBPMN_EXTENSION[".locking"] = false;

$tdataBPMN_EXTENSION[".edit"] = true;
$tdataBPMN_EXTENSION[".afterEditAction"] = 1;
$tdataBPMN_EXTENSION[".closePopupAfterEdit"] = 1;
$tdataBPMN_EXTENSION[".afterEditActionDetTable"] = "";

$tdataBPMN_EXTENSION[".add"] = true;
$tdataBPMN_EXTENSION[".afterAddAction"] = 1;
$tdataBPMN_EXTENSION[".closePopupAfterAdd"] = 1;
$tdataBPMN_EXTENSION[".afterAddActionDetTable"] = "";

$tdataBPMN_EXTENSION[".list"] = true;

$tdataBPMN_EXTENSION[".inlineEdit"] = true;


$tdataBPMN_EXTENSION[".reorderRecordsByHeader"] = true;
$tdataBPMN_EXTENSION[".createSortByDropdown"] = true;
$tdataBPMN_EXTENSION[".strSortControlSettingsJSON"] = "";



$tdataBPMN_EXTENSION[".inlineAdd"] = true;
$tdataBPMN_EXTENSION[".view"] = true;

$tdataBPMN_EXTENSION[".import"] = true;

$tdataBPMN_EXTENSION[".exportTo"] = true;

$tdataBPMN_EXTENSION[".printFriendly"] = true;

$tdataBPMN_EXTENSION[".delete"] = true;

$tdataBPMN_EXTENSION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_EXTENSION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_EXTENSION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_EXTENSION[".searchSaving"] = false;
//

$tdataBPMN_EXTENSION[".showSearchPanel"] = true;
		$tdataBPMN_EXTENSION[".flexibleSearch"] = true;

$tdataBPMN_EXTENSION[".isUseAjaxSuggest"] = true;

$tdataBPMN_EXTENSION[".rowHighlite"] = true;



																

$tdataBPMN_EXTENSION[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_EXTENSION[".buttonsAdded"] = false;

$tdataBPMN_EXTENSION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_EXTENSION[".isUseTimeForSearch"] = false;



$tdataBPMN_EXTENSION[".badgeColor"] = "E8926F";


$tdataBPMN_EXTENSION[".allSearchFields"] = array();
$tdataBPMN_EXTENSION[".filterFields"] = array();
$tdataBPMN_EXTENSION[".requiredSearchFields"] = array();

$tdataBPMN_EXTENSION[".allSearchFields"][] = "EXT_UID";
	$tdataBPMN_EXTENSION[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_EXTENSION[".allSearchFields"][] = "EXT_ELEMENT";
	$tdataBPMN_EXTENSION[".allSearchFields"][] = "EXT_ELEMENT_TYPE";
	$tdataBPMN_EXTENSION[".allSearchFields"][] = "EXT_EXTENSION";
	

$tdataBPMN_EXTENSION[".googleLikeFields"] = array();
$tdataBPMN_EXTENSION[".googleLikeFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".googleLikeFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".googleLikeFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".googleLikeFields"][] = "EXT_EXTENSION";


$tdataBPMN_EXTENSION[".advSearchFields"] = array();
$tdataBPMN_EXTENSION[".advSearchFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".advSearchFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".advSearchFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".advSearchFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".tableType"] = "list";

$tdataBPMN_EXTENSION[".printerPageOrientation"] = 0;
$tdataBPMN_EXTENSION[".nPrinterPageScale"] = 100;

$tdataBPMN_EXTENSION[".nPrinterSplitRecords"] = 40;

$tdataBPMN_EXTENSION[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_EXTENSION[".geocodingEnabled"] = false;





$tdataBPMN_EXTENSION[".listGridLayout"] = 3;


$tdataBPMN_EXTENSION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_EXTENSION[".pageSize"] = 20;

$tdataBPMN_EXTENSION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_EXTENSION[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_EXTENSION[".orderindexes"] = array();

$tdataBPMN_EXTENSION[".sqlHead"] = "SELECT EXT_UID,  	PRJ_UID,  	EXT_ELEMENT,  	EXT_ELEMENT_TYPE,  	EXT_EXTENSION";
$tdataBPMN_EXTENSION[".sqlFrom"] = "FROM BPMN_EXTENSION";
$tdataBPMN_EXTENSION[".sqlWhereExpr"] = "";
$tdataBPMN_EXTENSION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_EXTENSION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_EXTENSION[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_EXTENSION[".highlightSearchResults"] = true;

$tableKeysBPMN_EXTENSION = array();
$tableKeysBPMN_EXTENSION[] = "EXT_UID";
$tdataBPMN_EXTENSION[".Keys"] = $tableKeysBPMN_EXTENSION;

$tdataBPMN_EXTENSION[".listFields"] = array();
$tdataBPMN_EXTENSION[".listFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".listFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".listFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".listFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".listFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".hideMobileList"] = array();


$tdataBPMN_EXTENSION[".viewFields"] = array();
$tdataBPMN_EXTENSION[".viewFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".viewFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".viewFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".viewFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".viewFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".addFields"] = array();
$tdataBPMN_EXTENSION[".addFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".addFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".addFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".addFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".addFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".masterListFields"] = array();
$tdataBPMN_EXTENSION[".masterListFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".masterListFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".masterListFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".masterListFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".inlineAddFields"] = array();
$tdataBPMN_EXTENSION[".inlineAddFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".inlineAddFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".inlineAddFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".inlineAddFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".editFields"] = array();
$tdataBPMN_EXTENSION[".editFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".editFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".editFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".editFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".editFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".inlineEditFields"] = array();
$tdataBPMN_EXTENSION[".inlineEditFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".inlineEditFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".inlineEditFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".inlineEditFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".updateSelectedFields"] = array();
$tdataBPMN_EXTENSION[".updateSelectedFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".updateSelectedFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".updateSelectedFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".updateSelectedFields"][] = "EXT_EXTENSION";


$tdataBPMN_EXTENSION[".exportFields"] = array();
$tdataBPMN_EXTENSION[".exportFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".exportFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".exportFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".exportFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".exportFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".importFields"] = array();
$tdataBPMN_EXTENSION[".importFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".importFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".importFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".importFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".importFields"][] = "EXT_EXTENSION";

$tdataBPMN_EXTENSION[".printFields"] = array();
$tdataBPMN_EXTENSION[".printFields"][] = "EXT_UID";
$tdataBPMN_EXTENSION[".printFields"][] = "PRJ_UID";
$tdataBPMN_EXTENSION[".printFields"][] = "EXT_ELEMENT";
$tdataBPMN_EXTENSION[".printFields"][] = "EXT_ELEMENT_TYPE";
$tdataBPMN_EXTENSION[".printFields"][] = "EXT_EXTENSION";

//	EXT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EXT_UID";
	$fdata["GoodName"] = "EXT_UID";
	$fdata["ownerTable"] = "BPMN_EXTENSION";
	$fdata["Label"] = GetFieldLabel("BPMN_EXTENSION","EXT_UID");
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

		$fdata["strField"] = "EXT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXT_UID";

	
	
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




	$tdataBPMN_EXTENSION["EXT_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_EXTENSION";
	$fdata["Label"] = GetFieldLabel("BPMN_EXTENSION","PRJ_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BPMN_PROJECT";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRJ_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRJ_UID";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
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




	$tdataBPMN_EXTENSION["PRJ_UID"] = $fdata;
//	EXT_ELEMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EXT_ELEMENT";
	$fdata["GoodName"] = "EXT_ELEMENT";
	$fdata["ownerTable"] = "BPMN_EXTENSION";
	$fdata["Label"] = GetFieldLabel("BPMN_EXTENSION","EXT_ELEMENT");
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

		$fdata["strField"] = "EXT_ELEMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXT_ELEMENT";

	
	
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




	$tdataBPMN_EXTENSION["EXT_ELEMENT"] = $fdata;
//	EXT_ELEMENT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EXT_ELEMENT_TYPE";
	$fdata["GoodName"] = "EXT_ELEMENT_TYPE";
	$fdata["ownerTable"] = "BPMN_EXTENSION";
	$fdata["Label"] = GetFieldLabel("BPMN_EXTENSION","EXT_ELEMENT_TYPE");
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

		$fdata["strField"] = "EXT_ELEMENT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXT_ELEMENT_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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




	$tdataBPMN_EXTENSION["EXT_ELEMENT_TYPE"] = $fdata;
//	EXT_EXTENSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EXT_EXTENSION";
	$fdata["GoodName"] = "EXT_EXTENSION";
	$fdata["ownerTable"] = "BPMN_EXTENSION";
	$fdata["Label"] = GetFieldLabel("BPMN_EXTENSION","EXT_EXTENSION");
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

		$fdata["strField"] = "EXT_EXTENSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXT_EXTENSION";

	
	
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




	$tdataBPMN_EXTENSION["EXT_EXTENSION"] = $fdata;


$tables_data["BPMN_EXTENSION"]=&$tdataBPMN_EXTENSION;
$field_labels["BPMN_EXTENSION"] = &$fieldLabelsBPMN_EXTENSION;
$fieldToolTips["BPMN_EXTENSION"] = &$fieldToolTipsBPMN_EXTENSION;
$placeHolders["BPMN_EXTENSION"] = &$placeHoldersBPMN_EXTENSION;
$page_titles["BPMN_EXTENSION"] = &$pageTitlesBPMN_EXTENSION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_EXTENSION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_EXTENSION"] = array();


	
				$strOriginalDetailsTable="BPMN_PROJECT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROJECT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROJECT";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_EXTENSION"][0] = $masterParams;
				$masterTablesData["BPMN_EXTENSION"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_EXTENSION"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_EXTENSION"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_EXTENSION"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_EXTENSION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EXT_UID,  	PRJ_UID,  	EXT_ELEMENT,  	EXT_ELEMENT_TYPE,  	EXT_EXTENSION";
$proto0["m_strFrom"] = "FROM BPMN_EXTENSION";
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
	"m_strName" => "EXT_UID",
	"m_strTable" => "BPMN_EXTENSION",
	"m_srcTableName" => "BPMN_EXTENSION"
));

$proto6["m_sql"] = "EXT_UID";
$proto6["m_srcTableName"] = "BPMN_EXTENSION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_EXTENSION",
	"m_srcTableName" => "BPMN_EXTENSION"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_EXTENSION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EXT_ELEMENT",
	"m_strTable" => "BPMN_EXTENSION",
	"m_srcTableName" => "BPMN_EXTENSION"
));

$proto10["m_sql"] = "EXT_ELEMENT";
$proto10["m_srcTableName"] = "BPMN_EXTENSION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EXT_ELEMENT_TYPE",
	"m_strTable" => "BPMN_EXTENSION",
	"m_srcTableName" => "BPMN_EXTENSION"
));

$proto12["m_sql"] = "EXT_ELEMENT_TYPE";
$proto12["m_srcTableName"] = "BPMN_EXTENSION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EXT_EXTENSION",
	"m_strTable" => "BPMN_EXTENSION",
	"m_srcTableName" => "BPMN_EXTENSION"
));

$proto14["m_sql"] = "EXT_EXTENSION";
$proto14["m_srcTableName"] = "BPMN_EXTENSION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "BPMN_EXTENSION";
$proto17["m_srcTableName"] = "BPMN_EXTENSION";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "EXT_UID";
$proto17["m_columns"][] = "PRJ_UID";
$proto17["m_columns"][] = "EXT_ELEMENT";
$proto17["m_columns"][] = "EXT_ELEMENT_TYPE";
$proto17["m_columns"][] = "EXT_EXTENSION";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "BPMN_EXTENSION";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "BPMN_EXTENSION";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_EXTENSION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_EXTENSION = createSqlQuery_BPMN_EXTENSION();


	
						;

					

$tdataBPMN_EXTENSION[".sqlquery"] = $queryData_BPMN_EXTENSION;

$tableEvents["BPMN_EXTENSION"] = new eventsBase;
$tdataBPMN_EXTENSION[".hasEvents"] = false;

?>
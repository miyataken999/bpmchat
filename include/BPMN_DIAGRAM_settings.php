<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_DIAGRAM = array();
	$tdataBPMN_DIAGRAM[".truncateText"] = true;
	$tdataBPMN_DIAGRAM[".NumberOfChars"] = 20;
	$tdataBPMN_DIAGRAM[".ShortName"] = "BPMN_DIAGRAM";
	$tdataBPMN_DIAGRAM[".OwnerID"] = "";
	$tdataBPMN_DIAGRAM[".OriginalTable"] = "BPMN_DIAGRAM";

//	field labels
$fieldLabelsBPMN_DIAGRAM = array();
$fieldToolTipsBPMN_DIAGRAM = array();
$pageTitlesBPMN_DIAGRAM = array();
$placeHoldersBPMN_DIAGRAM = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_DIAGRAM["Japanese"] = array();
	$fieldToolTipsBPMN_DIAGRAM["Japanese"] = array();
	$placeHoldersBPMN_DIAGRAM["Japanese"] = array();
	$pageTitlesBPMN_DIAGRAM["Japanese"] = array();
	$fieldLabelsBPMN_DIAGRAM["Japanese"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_DIAGRAM["Japanese"]["DIA_UID"] = "";
	$placeHoldersBPMN_DIAGRAM["Japanese"]["DIA_UID"] = "";
	$fieldLabelsBPMN_DIAGRAM["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_DIAGRAM["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_DIAGRAM["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_DIAGRAM["Japanese"]["DIA_NAME"] = "DIA名";
	$fieldToolTipsBPMN_DIAGRAM["Japanese"]["DIA_NAME"] = "";
	$placeHoldersBPMN_DIAGRAM["Japanese"]["DIA_NAME"] = "";
	$fieldLabelsBPMN_DIAGRAM["Japanese"]["DIA_IS_CLOSABLE"] = "DIAは閉鎖可能です";
	$fieldToolTipsBPMN_DIAGRAM["Japanese"]["DIA_IS_CLOSABLE"] = "";
	$placeHoldersBPMN_DIAGRAM["Japanese"]["DIA_IS_CLOSABLE"] = "";
	if (count($fieldToolTipsBPMN_DIAGRAM["Japanese"]))
		$tdataBPMN_DIAGRAM[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_DIAGRAM["English"] = array();
	$fieldToolTipsBPMN_DIAGRAM["English"] = array();
	$placeHoldersBPMN_DIAGRAM["English"] = array();
	$pageTitlesBPMN_DIAGRAM["English"] = array();
	$fieldLabelsBPMN_DIAGRAM["English"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_DIAGRAM["English"]["DIA_UID"] = "";
	$placeHoldersBPMN_DIAGRAM["English"]["DIA_UID"] = "";
	$fieldLabelsBPMN_DIAGRAM["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_DIAGRAM["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_DIAGRAM["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_DIAGRAM["English"]["DIA_NAME"] = "DIA名";
	$fieldToolTipsBPMN_DIAGRAM["English"]["DIA_NAME"] = "";
	$placeHoldersBPMN_DIAGRAM["English"]["DIA_NAME"] = "";
	$fieldLabelsBPMN_DIAGRAM["English"]["DIA_IS_CLOSABLE"] = "DIAは閉鎖可能です";
	$fieldToolTipsBPMN_DIAGRAM["English"]["DIA_IS_CLOSABLE"] = "";
	$placeHoldersBPMN_DIAGRAM["English"]["DIA_IS_CLOSABLE"] = "";
	if (count($fieldToolTipsBPMN_DIAGRAM["English"]))
		$tdataBPMN_DIAGRAM[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_DIAGRAM[""] = array();
	$fieldToolTipsBPMN_DIAGRAM[""] = array();
	$placeHoldersBPMN_DIAGRAM[""] = array();
	$pageTitlesBPMN_DIAGRAM[""] = array();
	if (count($fieldToolTipsBPMN_DIAGRAM[""]))
		$tdataBPMN_DIAGRAM[".isUseToolTips"] = true;
}


	$tdataBPMN_DIAGRAM[".NCSearch"] = true;



$tdataBPMN_DIAGRAM[".shortTableName"] = "BPMN_DIAGRAM";
$tdataBPMN_DIAGRAM[".nSecOptions"] = 0;
$tdataBPMN_DIAGRAM[".recsPerRowPrint"] = 1;
$tdataBPMN_DIAGRAM[".mainTableOwnerID"] = "";
$tdataBPMN_DIAGRAM[".moveNext"] = 0;
$tdataBPMN_DIAGRAM[".entityType"] = 0;

$tdataBPMN_DIAGRAM[".strOriginalTableName"] = "BPMN_DIAGRAM";

	



$tdataBPMN_DIAGRAM[".showAddInPopup"] = false;

$tdataBPMN_DIAGRAM[".showEditInPopup"] = false;

$tdataBPMN_DIAGRAM[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_DIAGRAM[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_DIAGRAM[".fieldsForRegister"] = array();
	
$tdataBPMN_DIAGRAM[".listAjax"] = false;

	$tdataBPMN_DIAGRAM[".audit"] = true;

	$tdataBPMN_DIAGRAM[".locking"] = false;

$tdataBPMN_DIAGRAM[".edit"] = true;
$tdataBPMN_DIAGRAM[".afterEditAction"] = 1;
$tdataBPMN_DIAGRAM[".closePopupAfterEdit"] = 1;
$tdataBPMN_DIAGRAM[".afterEditActionDetTable"] = "";

$tdataBPMN_DIAGRAM[".add"] = true;
$tdataBPMN_DIAGRAM[".afterAddAction"] = 1;
$tdataBPMN_DIAGRAM[".closePopupAfterAdd"] = 1;
$tdataBPMN_DIAGRAM[".afterAddActionDetTable"] = "";

$tdataBPMN_DIAGRAM[".list"] = true;

$tdataBPMN_DIAGRAM[".inlineEdit"] = true;


$tdataBPMN_DIAGRAM[".reorderRecordsByHeader"] = true;
$tdataBPMN_DIAGRAM[".createSortByDropdown"] = true;
$tdataBPMN_DIAGRAM[".strSortControlSettingsJSON"] = "";



$tdataBPMN_DIAGRAM[".inlineAdd"] = true;
$tdataBPMN_DIAGRAM[".view"] = true;

$tdataBPMN_DIAGRAM[".import"] = true;

$tdataBPMN_DIAGRAM[".exportTo"] = true;

$tdataBPMN_DIAGRAM[".printFriendly"] = true;

$tdataBPMN_DIAGRAM[".delete"] = true;

$tdataBPMN_DIAGRAM[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_DIAGRAM[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_DIAGRAM[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_DIAGRAM[".searchSaving"] = false;
//

$tdataBPMN_DIAGRAM[".showSearchPanel"] = true;
		$tdataBPMN_DIAGRAM[".flexibleSearch"] = true;

$tdataBPMN_DIAGRAM[".isUseAjaxSuggest"] = true;

$tdataBPMN_DIAGRAM[".rowHighlite"] = true;



																

$tdataBPMN_DIAGRAM[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_DIAGRAM[".buttonsAdded"] = false;

$tdataBPMN_DIAGRAM[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_DIAGRAM[".isUseTimeForSearch"] = false;



$tdataBPMN_DIAGRAM[".badgeColor"] = "E8926F";


$tdataBPMN_DIAGRAM[".allSearchFields"] = array();
$tdataBPMN_DIAGRAM[".filterFields"] = array();
$tdataBPMN_DIAGRAM[".requiredSearchFields"] = array();

$tdataBPMN_DIAGRAM[".allSearchFields"][] = "DIA_UID";
	$tdataBPMN_DIAGRAM[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_DIAGRAM[".allSearchFields"][] = "DIA_NAME";
	$tdataBPMN_DIAGRAM[".allSearchFields"][] = "DIA_IS_CLOSABLE";
	

$tdataBPMN_DIAGRAM[".googleLikeFields"] = array();
$tdataBPMN_DIAGRAM[".googleLikeFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".googleLikeFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".googleLikeFields"][] = "DIA_IS_CLOSABLE";


$tdataBPMN_DIAGRAM[".advSearchFields"] = array();
$tdataBPMN_DIAGRAM[".advSearchFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".advSearchFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".advSearchFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".tableType"] = "list";

$tdataBPMN_DIAGRAM[".printerPageOrientation"] = 0;
$tdataBPMN_DIAGRAM[".nPrinterPageScale"] = 100;

$tdataBPMN_DIAGRAM[".nPrinterSplitRecords"] = 40;

$tdataBPMN_DIAGRAM[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_DIAGRAM[".geocodingEnabled"] = false;





$tdataBPMN_DIAGRAM[".listGridLayout"] = 3;


$tdataBPMN_DIAGRAM[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_DIAGRAM[".pageSize"] = 20;

$tdataBPMN_DIAGRAM[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_DIAGRAM[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_DIAGRAM[".orderindexes"] = array();

$tdataBPMN_DIAGRAM[".sqlHead"] = "SELECT DIA_UID,  	PRJ_UID,  	DIA_NAME,  	DIA_IS_CLOSABLE";
$tdataBPMN_DIAGRAM[".sqlFrom"] = "FROM BPMN_DIAGRAM";
$tdataBPMN_DIAGRAM[".sqlWhereExpr"] = "";
$tdataBPMN_DIAGRAM[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_DIAGRAM[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_DIAGRAM[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_DIAGRAM[".highlightSearchResults"] = true;

$tableKeysBPMN_DIAGRAM = array();
$tableKeysBPMN_DIAGRAM[] = "DIA_UID";
$tdataBPMN_DIAGRAM[".Keys"] = $tableKeysBPMN_DIAGRAM;

$tdataBPMN_DIAGRAM[".listFields"] = array();
$tdataBPMN_DIAGRAM[".listFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".listFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".listFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".listFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".hideMobileList"] = array();


$tdataBPMN_DIAGRAM[".viewFields"] = array();
$tdataBPMN_DIAGRAM[".viewFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".viewFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".viewFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".viewFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".addFields"] = array();
$tdataBPMN_DIAGRAM[".addFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".addFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".addFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".addFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".masterListFields"] = array();
$tdataBPMN_DIAGRAM[".masterListFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".masterListFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".masterListFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".inlineAddFields"] = array();
$tdataBPMN_DIAGRAM[".inlineAddFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".inlineAddFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".inlineAddFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".editFields"] = array();
$tdataBPMN_DIAGRAM[".editFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".editFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".editFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".editFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".inlineEditFields"] = array();
$tdataBPMN_DIAGRAM[".inlineEditFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".inlineEditFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".inlineEditFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".updateSelectedFields"] = array();
$tdataBPMN_DIAGRAM[".updateSelectedFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".updateSelectedFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".updateSelectedFields"][] = "DIA_IS_CLOSABLE";


$tdataBPMN_DIAGRAM[".exportFields"] = array();
$tdataBPMN_DIAGRAM[".exportFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".exportFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".exportFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".exportFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".importFields"] = array();
$tdataBPMN_DIAGRAM[".importFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".importFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".importFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".importFields"][] = "DIA_IS_CLOSABLE";

$tdataBPMN_DIAGRAM[".printFields"] = array();
$tdataBPMN_DIAGRAM[".printFields"][] = "DIA_UID";
$tdataBPMN_DIAGRAM[".printFields"][] = "PRJ_UID";
$tdataBPMN_DIAGRAM[".printFields"][] = "DIA_NAME";
$tdataBPMN_DIAGRAM[".printFields"][] = "DIA_IS_CLOSABLE";

//	DIA_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DIA_UID";
	$fdata["GoodName"] = "DIA_UID";
	$fdata["ownerTable"] = "BPMN_DIAGRAM";
	$fdata["Label"] = GetFieldLabel("BPMN_DIAGRAM","DIA_UID");
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

		$fdata["strField"] = "DIA_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIA_UID";

	
	
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




	$tdataBPMN_DIAGRAM["DIA_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_DIAGRAM";
	$fdata["Label"] = GetFieldLabel("BPMN_DIAGRAM","PRJ_UID");
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




	$tdataBPMN_DIAGRAM["PRJ_UID"] = $fdata;
//	DIA_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DIA_NAME";
	$fdata["GoodName"] = "DIA_NAME";
	$fdata["ownerTable"] = "BPMN_DIAGRAM";
	$fdata["Label"] = GetFieldLabel("BPMN_DIAGRAM","DIA_NAME");
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

		$fdata["strField"] = "DIA_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIA_NAME";

	
	
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




	$tdataBPMN_DIAGRAM["DIA_NAME"] = $fdata;
//	DIA_IS_CLOSABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DIA_IS_CLOSABLE";
	$fdata["GoodName"] = "DIA_IS_CLOSABLE";
	$fdata["ownerTable"] = "BPMN_DIAGRAM";
	$fdata["Label"] = GetFieldLabel("BPMN_DIAGRAM","DIA_IS_CLOSABLE");
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

		$fdata["strField"] = "DIA_IS_CLOSABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIA_IS_CLOSABLE";

	
	
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




	$tdataBPMN_DIAGRAM["DIA_IS_CLOSABLE"] = $fdata;


$tables_data["BPMN_DIAGRAM"]=&$tdataBPMN_DIAGRAM;
$field_labels["BPMN_DIAGRAM"] = &$fieldLabelsBPMN_DIAGRAM;
$fieldToolTips["BPMN_DIAGRAM"] = &$fieldToolTipsBPMN_DIAGRAM;
$placeHolders["BPMN_DIAGRAM"] = &$placeHoldersBPMN_DIAGRAM;
$page_titles["BPMN_DIAGRAM"] = &$pageTitlesBPMN_DIAGRAM;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_DIAGRAM"] = array();
//	BPMN_FLOW
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_FLOW";
		$detailsParam["dOriginalTable"] = "BPMN_FLOW";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_FLOW";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_FLOW");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_DIAGRAM"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["masterKeys"][]="DIA_UID";

				$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["detailKeys"][]="DIA_UID";
//	BPMN_BOUND
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_BOUND";
		$detailsParam["dOriginalTable"] = "BPMN_BOUND";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_BOUND";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_BOUND");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_DIAGRAM"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["masterKeys"][]="DIA_UID";

				$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_DIAGRAM"][$dIndex]["detailKeys"][]="DIA_UID";

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_DIAGRAM"] = array();


	
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
					$masterTablesData["BPMN_DIAGRAM"][0] = $masterParams;
				$masterTablesData["BPMN_DIAGRAM"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_DIAGRAM"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_DIAGRAM"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_DIAGRAM"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_DIAGRAM()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DIA_UID,  	PRJ_UID,  	DIA_NAME,  	DIA_IS_CLOSABLE";
$proto0["m_strFrom"] = "FROM BPMN_DIAGRAM";
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
	"m_strName" => "DIA_UID",
	"m_strTable" => "BPMN_DIAGRAM",
	"m_srcTableName" => "BPMN_DIAGRAM"
));

$proto6["m_sql"] = "DIA_UID";
$proto6["m_srcTableName"] = "BPMN_DIAGRAM";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_DIAGRAM",
	"m_srcTableName" => "BPMN_DIAGRAM"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_DIAGRAM";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DIA_NAME",
	"m_strTable" => "BPMN_DIAGRAM",
	"m_srcTableName" => "BPMN_DIAGRAM"
));

$proto10["m_sql"] = "DIA_NAME";
$proto10["m_srcTableName"] = "BPMN_DIAGRAM";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DIA_IS_CLOSABLE",
	"m_strTable" => "BPMN_DIAGRAM",
	"m_srcTableName" => "BPMN_DIAGRAM"
));

$proto12["m_sql"] = "DIA_IS_CLOSABLE";
$proto12["m_srcTableName"] = "BPMN_DIAGRAM";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "BPMN_DIAGRAM";
$proto15["m_srcTableName"] = "BPMN_DIAGRAM";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "DIA_UID";
$proto15["m_columns"][] = "PRJ_UID";
$proto15["m_columns"][] = "DIA_NAME";
$proto15["m_columns"][] = "DIA_IS_CLOSABLE";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "BPMN_DIAGRAM";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "BPMN_DIAGRAM";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_DIAGRAM";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_DIAGRAM = createSqlQuery_BPMN_DIAGRAM();


	
						;

				

$tdataBPMN_DIAGRAM[".sqlquery"] = $queryData_BPMN_DIAGRAM;

$tableEvents["BPMN_DIAGRAM"] = new eventsBase;
$tdataBPMN_DIAGRAM[".hasEvents"] = false;

?>
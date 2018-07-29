<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_DOCUMENTATION = array();
	$tdataBPMN_DOCUMENTATION[".truncateText"] = true;
	$tdataBPMN_DOCUMENTATION[".NumberOfChars"] = 20;
	$tdataBPMN_DOCUMENTATION[".ShortName"] = "BPMN_DOCUMENTATION";
	$tdataBPMN_DOCUMENTATION[".OwnerID"] = "";
	$tdataBPMN_DOCUMENTATION[".OriginalTable"] = "BPMN_DOCUMENTATION";

//	field labels
$fieldLabelsBPMN_DOCUMENTATION = array();
$fieldToolTipsBPMN_DOCUMENTATION = array();
$pageTitlesBPMN_DOCUMENTATION = array();
$placeHoldersBPMN_DOCUMENTATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_DOCUMENTATION["Japanese"] = array();
	$fieldToolTipsBPMN_DOCUMENTATION["Japanese"] = array();
	$placeHoldersBPMN_DOCUMENTATION["Japanese"] = array();
	$pageTitlesBPMN_DOCUMENTATION["Japanese"] = array();
	$fieldLabelsBPMN_DOCUMENTATION["Japanese"]["DOC_UID"] = "ドキュメントのUID";
	$fieldToolTipsBPMN_DOCUMENTATION["Japanese"]["DOC_UID"] = "";
	$placeHoldersBPMN_DOCUMENTATION["Japanese"]["DOC_UID"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_DOCUMENTATION["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_DOCUMENTATION["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["Japanese"]["DOC_ELEMENT"] = "doc要素";
	$fieldToolTipsBPMN_DOCUMENTATION["Japanese"]["DOC_ELEMENT"] = "";
	$placeHoldersBPMN_DOCUMENTATION["Japanese"]["DOC_ELEMENT"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["Japanese"]["DOC_ELEMENT_TYPE"] = "doc要素タイプ";
	$fieldToolTipsBPMN_DOCUMENTATION["Japanese"]["DOC_ELEMENT_TYPE"] = "";
	$placeHoldersBPMN_DOCUMENTATION["Japanese"]["DOC_ELEMENT_TYPE"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["Japanese"]["DOC_DOCUMENTATION"] = "ドキュメントのドキュメント";
	$fieldToolTipsBPMN_DOCUMENTATION["Japanese"]["DOC_DOCUMENTATION"] = "";
	$placeHoldersBPMN_DOCUMENTATION["Japanese"]["DOC_DOCUMENTATION"] = "";
	if (count($fieldToolTipsBPMN_DOCUMENTATION["Japanese"]))
		$tdataBPMN_DOCUMENTATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_DOCUMENTATION["English"] = array();
	$fieldToolTipsBPMN_DOCUMENTATION["English"] = array();
	$placeHoldersBPMN_DOCUMENTATION["English"] = array();
	$pageTitlesBPMN_DOCUMENTATION["English"] = array();
	$fieldLabelsBPMN_DOCUMENTATION["English"]["DOC_UID"] = "ドキュメントのUID";
	$fieldToolTipsBPMN_DOCUMENTATION["English"]["DOC_UID"] = "";
	$placeHoldersBPMN_DOCUMENTATION["English"]["DOC_UID"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_DOCUMENTATION["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_DOCUMENTATION["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["English"]["DOC_ELEMENT"] = "doc要素";
	$fieldToolTipsBPMN_DOCUMENTATION["English"]["DOC_ELEMENT"] = "";
	$placeHoldersBPMN_DOCUMENTATION["English"]["DOC_ELEMENT"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["English"]["DOC_ELEMENT_TYPE"] = "doc要素タイプ";
	$fieldToolTipsBPMN_DOCUMENTATION["English"]["DOC_ELEMENT_TYPE"] = "";
	$placeHoldersBPMN_DOCUMENTATION["English"]["DOC_ELEMENT_TYPE"] = "";
	$fieldLabelsBPMN_DOCUMENTATION["English"]["DOC_DOCUMENTATION"] = "ドキュメントのドキュメント";
	$fieldToolTipsBPMN_DOCUMENTATION["English"]["DOC_DOCUMENTATION"] = "";
	$placeHoldersBPMN_DOCUMENTATION["English"]["DOC_DOCUMENTATION"] = "";
	if (count($fieldToolTipsBPMN_DOCUMENTATION["English"]))
		$tdataBPMN_DOCUMENTATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_DOCUMENTATION[""] = array();
	$fieldToolTipsBPMN_DOCUMENTATION[""] = array();
	$placeHoldersBPMN_DOCUMENTATION[""] = array();
	$pageTitlesBPMN_DOCUMENTATION[""] = array();
	if (count($fieldToolTipsBPMN_DOCUMENTATION[""]))
		$tdataBPMN_DOCUMENTATION[".isUseToolTips"] = true;
}


	$tdataBPMN_DOCUMENTATION[".NCSearch"] = true;



$tdataBPMN_DOCUMENTATION[".shortTableName"] = "BPMN_DOCUMENTATION";
$tdataBPMN_DOCUMENTATION[".nSecOptions"] = 0;
$tdataBPMN_DOCUMENTATION[".recsPerRowPrint"] = 1;
$tdataBPMN_DOCUMENTATION[".mainTableOwnerID"] = "";
$tdataBPMN_DOCUMENTATION[".moveNext"] = 0;
$tdataBPMN_DOCUMENTATION[".entityType"] = 0;

$tdataBPMN_DOCUMENTATION[".strOriginalTableName"] = "BPMN_DOCUMENTATION";

	



$tdataBPMN_DOCUMENTATION[".showAddInPopup"] = false;

$tdataBPMN_DOCUMENTATION[".showEditInPopup"] = false;

$tdataBPMN_DOCUMENTATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_DOCUMENTATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_DOCUMENTATION[".fieldsForRegister"] = array();
	
$tdataBPMN_DOCUMENTATION[".listAjax"] = false;

	$tdataBPMN_DOCUMENTATION[".audit"] = true;

	$tdataBPMN_DOCUMENTATION[".locking"] = false;

$tdataBPMN_DOCUMENTATION[".edit"] = true;
$tdataBPMN_DOCUMENTATION[".afterEditAction"] = 1;
$tdataBPMN_DOCUMENTATION[".closePopupAfterEdit"] = 1;
$tdataBPMN_DOCUMENTATION[".afterEditActionDetTable"] = "";

$tdataBPMN_DOCUMENTATION[".add"] = true;
$tdataBPMN_DOCUMENTATION[".afterAddAction"] = 1;
$tdataBPMN_DOCUMENTATION[".closePopupAfterAdd"] = 1;
$tdataBPMN_DOCUMENTATION[".afterAddActionDetTable"] = "";

$tdataBPMN_DOCUMENTATION[".list"] = true;

$tdataBPMN_DOCUMENTATION[".inlineEdit"] = true;


$tdataBPMN_DOCUMENTATION[".reorderRecordsByHeader"] = true;
$tdataBPMN_DOCUMENTATION[".createSortByDropdown"] = true;
$tdataBPMN_DOCUMENTATION[".strSortControlSettingsJSON"] = "";



$tdataBPMN_DOCUMENTATION[".inlineAdd"] = true;
$tdataBPMN_DOCUMENTATION[".view"] = true;

$tdataBPMN_DOCUMENTATION[".import"] = true;

$tdataBPMN_DOCUMENTATION[".exportTo"] = true;

$tdataBPMN_DOCUMENTATION[".printFriendly"] = true;

$tdataBPMN_DOCUMENTATION[".delete"] = true;

$tdataBPMN_DOCUMENTATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_DOCUMENTATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_DOCUMENTATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_DOCUMENTATION[".searchSaving"] = false;
//

$tdataBPMN_DOCUMENTATION[".showSearchPanel"] = true;
		$tdataBPMN_DOCUMENTATION[".flexibleSearch"] = true;

$tdataBPMN_DOCUMENTATION[".isUseAjaxSuggest"] = true;

$tdataBPMN_DOCUMENTATION[".rowHighlite"] = true;



																

$tdataBPMN_DOCUMENTATION[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_DOCUMENTATION[".buttonsAdded"] = false;

$tdataBPMN_DOCUMENTATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_DOCUMENTATION[".isUseTimeForSearch"] = false;



$tdataBPMN_DOCUMENTATION[".badgeColor"] = "008B8B";


$tdataBPMN_DOCUMENTATION[".allSearchFields"] = array();
$tdataBPMN_DOCUMENTATION[".filterFields"] = array();
$tdataBPMN_DOCUMENTATION[".requiredSearchFields"] = array();

$tdataBPMN_DOCUMENTATION[".allSearchFields"][] = "DOC_UID";
	$tdataBPMN_DOCUMENTATION[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_DOCUMENTATION[".allSearchFields"][] = "DOC_ELEMENT";
	$tdataBPMN_DOCUMENTATION[".allSearchFields"][] = "DOC_ELEMENT_TYPE";
	$tdataBPMN_DOCUMENTATION[".allSearchFields"][] = "DOC_DOCUMENTATION";
	

$tdataBPMN_DOCUMENTATION[".googleLikeFields"] = array();
$tdataBPMN_DOCUMENTATION[".googleLikeFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".googleLikeFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".googleLikeFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".googleLikeFields"][] = "DOC_DOCUMENTATION";


$tdataBPMN_DOCUMENTATION[".advSearchFields"] = array();
$tdataBPMN_DOCUMENTATION[".advSearchFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".advSearchFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".advSearchFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".advSearchFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".tableType"] = "list";

$tdataBPMN_DOCUMENTATION[".printerPageOrientation"] = 0;
$tdataBPMN_DOCUMENTATION[".nPrinterPageScale"] = 100;

$tdataBPMN_DOCUMENTATION[".nPrinterSplitRecords"] = 40;

$tdataBPMN_DOCUMENTATION[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_DOCUMENTATION[".geocodingEnabled"] = false;





$tdataBPMN_DOCUMENTATION[".listGridLayout"] = 3;


$tdataBPMN_DOCUMENTATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_DOCUMENTATION[".pageSize"] = 20;

$tdataBPMN_DOCUMENTATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_DOCUMENTATION[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_DOCUMENTATION[".orderindexes"] = array();

$tdataBPMN_DOCUMENTATION[".sqlHead"] = "SELECT DOC_UID,  	PRJ_UID,  	DOC_ELEMENT,  	DOC_ELEMENT_TYPE,  	DOC_DOCUMENTATION";
$tdataBPMN_DOCUMENTATION[".sqlFrom"] = "FROM BPMN_DOCUMENTATION";
$tdataBPMN_DOCUMENTATION[".sqlWhereExpr"] = "";
$tdataBPMN_DOCUMENTATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_DOCUMENTATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_DOCUMENTATION[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_DOCUMENTATION[".highlightSearchResults"] = true;

$tableKeysBPMN_DOCUMENTATION = array();
$tableKeysBPMN_DOCUMENTATION[] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".Keys"] = $tableKeysBPMN_DOCUMENTATION;

$tdataBPMN_DOCUMENTATION[".listFields"] = array();
$tdataBPMN_DOCUMENTATION[".listFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".listFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".listFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".listFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".listFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".hideMobileList"] = array();


$tdataBPMN_DOCUMENTATION[".viewFields"] = array();
$tdataBPMN_DOCUMENTATION[".viewFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".viewFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".viewFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".viewFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".viewFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".addFields"] = array();
$tdataBPMN_DOCUMENTATION[".addFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".addFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".addFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".addFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".addFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".masterListFields"] = array();
$tdataBPMN_DOCUMENTATION[".masterListFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".masterListFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".masterListFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".masterListFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".inlineAddFields"] = array();
$tdataBPMN_DOCUMENTATION[".inlineAddFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".inlineAddFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".inlineAddFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".inlineAddFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".editFields"] = array();
$tdataBPMN_DOCUMENTATION[".editFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".editFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".editFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".editFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".editFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".inlineEditFields"] = array();
$tdataBPMN_DOCUMENTATION[".inlineEditFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".inlineEditFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".inlineEditFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".inlineEditFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".updateSelectedFields"] = array();
$tdataBPMN_DOCUMENTATION[".updateSelectedFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".updateSelectedFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".updateSelectedFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".updateSelectedFields"][] = "DOC_DOCUMENTATION";


$tdataBPMN_DOCUMENTATION[".exportFields"] = array();
$tdataBPMN_DOCUMENTATION[".exportFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".exportFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".exportFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".exportFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".exportFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".importFields"] = array();
$tdataBPMN_DOCUMENTATION[".importFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".importFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".importFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".importFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".importFields"][] = "DOC_DOCUMENTATION";

$tdataBPMN_DOCUMENTATION[".printFields"] = array();
$tdataBPMN_DOCUMENTATION[".printFields"][] = "DOC_UID";
$tdataBPMN_DOCUMENTATION[".printFields"][] = "PRJ_UID";
$tdataBPMN_DOCUMENTATION[".printFields"][] = "DOC_ELEMENT";
$tdataBPMN_DOCUMENTATION[".printFields"][] = "DOC_ELEMENT_TYPE";
$tdataBPMN_DOCUMENTATION[".printFields"][] = "DOC_DOCUMENTATION";

//	DOC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DOC_UID";
	$fdata["GoodName"] = "DOC_UID";
	$fdata["ownerTable"] = "BPMN_DOCUMENTATION";
	$fdata["Label"] = GetFieldLabel("BPMN_DOCUMENTATION","DOC_UID");
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

		$fdata["strField"] = "DOC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOC_UID";

	
	
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




	$tdataBPMN_DOCUMENTATION["DOC_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_DOCUMENTATION";
	$fdata["Label"] = GetFieldLabel("BPMN_DOCUMENTATION","PRJ_UID");
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




	$tdataBPMN_DOCUMENTATION["PRJ_UID"] = $fdata;
//	DOC_ELEMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DOC_ELEMENT";
	$fdata["GoodName"] = "DOC_ELEMENT";
	$fdata["ownerTable"] = "BPMN_DOCUMENTATION";
	$fdata["Label"] = GetFieldLabel("BPMN_DOCUMENTATION","DOC_ELEMENT");
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

		$fdata["strField"] = "DOC_ELEMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOC_ELEMENT";

	
	
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




	$tdataBPMN_DOCUMENTATION["DOC_ELEMENT"] = $fdata;
//	DOC_ELEMENT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOC_ELEMENT_TYPE";
	$fdata["GoodName"] = "DOC_ELEMENT_TYPE";
	$fdata["ownerTable"] = "BPMN_DOCUMENTATION";
	$fdata["Label"] = GetFieldLabel("BPMN_DOCUMENTATION","DOC_ELEMENT_TYPE");
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

		$fdata["strField"] = "DOC_ELEMENT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOC_ELEMENT_TYPE";

	
	
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




	$tdataBPMN_DOCUMENTATION["DOC_ELEMENT_TYPE"] = $fdata;
//	DOC_DOCUMENTATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DOC_DOCUMENTATION";
	$fdata["GoodName"] = "DOC_DOCUMENTATION";
	$fdata["ownerTable"] = "BPMN_DOCUMENTATION";
	$fdata["Label"] = GetFieldLabel("BPMN_DOCUMENTATION","DOC_DOCUMENTATION");
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

		$fdata["strField"] = "DOC_DOCUMENTATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOC_DOCUMENTATION";

	
	
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




	$tdataBPMN_DOCUMENTATION["DOC_DOCUMENTATION"] = $fdata;


$tables_data["BPMN_DOCUMENTATION"]=&$tdataBPMN_DOCUMENTATION;
$field_labels["BPMN_DOCUMENTATION"] = &$fieldLabelsBPMN_DOCUMENTATION;
$fieldToolTips["BPMN_DOCUMENTATION"] = &$fieldToolTipsBPMN_DOCUMENTATION;
$placeHolders["BPMN_DOCUMENTATION"] = &$placeHoldersBPMN_DOCUMENTATION;
$page_titles["BPMN_DOCUMENTATION"] = &$pageTitlesBPMN_DOCUMENTATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_DOCUMENTATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_DOCUMENTATION"] = array();


	
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
					$masterTablesData["BPMN_DOCUMENTATION"][0] = $masterParams;
				$masterTablesData["BPMN_DOCUMENTATION"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_DOCUMENTATION"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_DOCUMENTATION"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_DOCUMENTATION"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_DOCUMENTATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DOC_UID,  	PRJ_UID,  	DOC_ELEMENT,  	DOC_ELEMENT_TYPE,  	DOC_DOCUMENTATION";
$proto0["m_strFrom"] = "FROM BPMN_DOCUMENTATION";
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
	"m_strName" => "DOC_UID",
	"m_strTable" => "BPMN_DOCUMENTATION",
	"m_srcTableName" => "BPMN_DOCUMENTATION"
));

$proto6["m_sql"] = "DOC_UID";
$proto6["m_srcTableName"] = "BPMN_DOCUMENTATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_DOCUMENTATION",
	"m_srcTableName" => "BPMN_DOCUMENTATION"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_DOCUMENTATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DOC_ELEMENT",
	"m_strTable" => "BPMN_DOCUMENTATION",
	"m_srcTableName" => "BPMN_DOCUMENTATION"
));

$proto10["m_sql"] = "DOC_ELEMENT";
$proto10["m_srcTableName"] = "BPMN_DOCUMENTATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DOC_ELEMENT_TYPE",
	"m_strTable" => "BPMN_DOCUMENTATION",
	"m_srcTableName" => "BPMN_DOCUMENTATION"
));

$proto12["m_sql"] = "DOC_ELEMENT_TYPE";
$proto12["m_srcTableName"] = "BPMN_DOCUMENTATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DOC_DOCUMENTATION",
	"m_strTable" => "BPMN_DOCUMENTATION",
	"m_srcTableName" => "BPMN_DOCUMENTATION"
));

$proto14["m_sql"] = "DOC_DOCUMENTATION";
$proto14["m_srcTableName"] = "BPMN_DOCUMENTATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "BPMN_DOCUMENTATION";
$proto17["m_srcTableName"] = "BPMN_DOCUMENTATION";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "DOC_UID";
$proto17["m_columns"][] = "PRJ_UID";
$proto17["m_columns"][] = "DOC_ELEMENT";
$proto17["m_columns"][] = "DOC_ELEMENT_TYPE";
$proto17["m_columns"][] = "DOC_DOCUMENTATION";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "BPMN_DOCUMENTATION";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "BPMN_DOCUMENTATION";
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
$proto0["m_srcTableName"]="BPMN_DOCUMENTATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_DOCUMENTATION = createSqlQuery_BPMN_DOCUMENTATION();


	
						;

					

$tdataBPMN_DOCUMENTATION[".sqlquery"] = $queryData_BPMN_DOCUMENTATION;

$tableEvents["BPMN_DOCUMENTATION"] = new eventsBase;
$tdataBPMN_DOCUMENTATION[".hasEvents"] = false;

?>
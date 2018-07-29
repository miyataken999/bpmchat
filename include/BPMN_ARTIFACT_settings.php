<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_ARTIFACT = array();
	$tdataBPMN_ARTIFACT[".truncateText"] = true;
	$tdataBPMN_ARTIFACT[".NumberOfChars"] = 20;
	$tdataBPMN_ARTIFACT[".ShortName"] = "BPMN_ARTIFACT";
	$tdataBPMN_ARTIFACT[".OwnerID"] = "";
	$tdataBPMN_ARTIFACT[".OriginalTable"] = "BPMN_ARTIFACT";

//	field labels
$fieldLabelsBPMN_ARTIFACT = array();
$fieldToolTipsBPMN_ARTIFACT = array();
$pageTitlesBPMN_ARTIFACT = array();
$placeHoldersBPMN_ARTIFACT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_ARTIFACT["Japanese"] = array();
	$fieldToolTipsBPMN_ARTIFACT["Japanese"] = array();
	$placeHoldersBPMN_ARTIFACT["Japanese"] = array();
	$pageTitlesBPMN_ARTIFACT["Japanese"] = array();
	$fieldLabelsBPMN_ARTIFACT["Japanese"]["ART_UID"] = "芸術のUID";
	$fieldToolTipsBPMN_ARTIFACT["Japanese"]["ART_UID"] = "";
	$placeHoldersBPMN_ARTIFACT["Japanese"]["ART_UID"] = "";
	$fieldLabelsBPMN_ARTIFACT["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_ARTIFACT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_ARTIFACT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_ARTIFACT["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_ARTIFACT["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_ARTIFACT["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_ARTIFACT["Japanese"]["ART_TYPE"] = "アートタイプ";
	$fieldToolTipsBPMN_ARTIFACT["Japanese"]["ART_TYPE"] = "";
	$placeHoldersBPMN_ARTIFACT["Japanese"]["ART_TYPE"] = "";
	$fieldLabelsBPMN_ARTIFACT["Japanese"]["ART_NAME"] = "芸術の名";
	$fieldToolTipsBPMN_ARTIFACT["Japanese"]["ART_NAME"] = "";
	$placeHoldersBPMN_ARTIFACT["Japanese"]["ART_NAME"] = "";
	$fieldLabelsBPMN_ARTIFACT["Japanese"]["ART_CATEGORY_REF"] = "アートカテゴリREF";
	$fieldToolTipsBPMN_ARTIFACT["Japanese"]["ART_CATEGORY_REF"] = "";
	$placeHoldersBPMN_ARTIFACT["Japanese"]["ART_CATEGORY_REF"] = "";
	if (count($fieldToolTipsBPMN_ARTIFACT["Japanese"]))
		$tdataBPMN_ARTIFACT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_ARTIFACT["English"] = array();
	$fieldToolTipsBPMN_ARTIFACT["English"] = array();
	$placeHoldersBPMN_ARTIFACT["English"] = array();
	$pageTitlesBPMN_ARTIFACT["English"] = array();
	$fieldLabelsBPMN_ARTIFACT["English"]["ART_UID"] = "芸術のUID";
	$fieldToolTipsBPMN_ARTIFACT["English"]["ART_UID"] = "";
	$placeHoldersBPMN_ARTIFACT["English"]["ART_UID"] = "";
	$fieldLabelsBPMN_ARTIFACT["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_ARTIFACT["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_ARTIFACT["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_ARTIFACT["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_ARTIFACT["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_ARTIFACT["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_ARTIFACT["English"]["ART_TYPE"] = "アートタイプ";
	$fieldToolTipsBPMN_ARTIFACT["English"]["ART_TYPE"] = "";
	$placeHoldersBPMN_ARTIFACT["English"]["ART_TYPE"] = "";
	$fieldLabelsBPMN_ARTIFACT["English"]["ART_NAME"] = "芸術の名";
	$fieldToolTipsBPMN_ARTIFACT["English"]["ART_NAME"] = "";
	$placeHoldersBPMN_ARTIFACT["English"]["ART_NAME"] = "";
	$fieldLabelsBPMN_ARTIFACT["English"]["ART_CATEGORY_REF"] = "アートカテゴリREF";
	$fieldToolTipsBPMN_ARTIFACT["English"]["ART_CATEGORY_REF"] = "";
	$placeHoldersBPMN_ARTIFACT["English"]["ART_CATEGORY_REF"] = "";
	if (count($fieldToolTipsBPMN_ARTIFACT["English"]))
		$tdataBPMN_ARTIFACT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_ARTIFACT[""] = array();
	$fieldToolTipsBPMN_ARTIFACT[""] = array();
	$placeHoldersBPMN_ARTIFACT[""] = array();
	$pageTitlesBPMN_ARTIFACT[""] = array();
	if (count($fieldToolTipsBPMN_ARTIFACT[""]))
		$tdataBPMN_ARTIFACT[".isUseToolTips"] = true;
}


	$tdataBPMN_ARTIFACT[".NCSearch"] = true;



$tdataBPMN_ARTIFACT[".shortTableName"] = "BPMN_ARTIFACT";
$tdataBPMN_ARTIFACT[".nSecOptions"] = 0;
$tdataBPMN_ARTIFACT[".recsPerRowPrint"] = 1;
$tdataBPMN_ARTIFACT[".mainTableOwnerID"] = "";
$tdataBPMN_ARTIFACT[".moveNext"] = 0;
$tdataBPMN_ARTIFACT[".entityType"] = 0;

$tdataBPMN_ARTIFACT[".strOriginalTableName"] = "BPMN_ARTIFACT";

	



$tdataBPMN_ARTIFACT[".showAddInPopup"] = false;

$tdataBPMN_ARTIFACT[".showEditInPopup"] = false;

$tdataBPMN_ARTIFACT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_ARTIFACT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_ARTIFACT[".fieldsForRegister"] = array();
	
$tdataBPMN_ARTIFACT[".listAjax"] = false;

	$tdataBPMN_ARTIFACT[".audit"] = true;

	$tdataBPMN_ARTIFACT[".locking"] = false;

$tdataBPMN_ARTIFACT[".edit"] = true;
$tdataBPMN_ARTIFACT[".afterEditAction"] = 1;
$tdataBPMN_ARTIFACT[".closePopupAfterEdit"] = 1;
$tdataBPMN_ARTIFACT[".afterEditActionDetTable"] = "";

$tdataBPMN_ARTIFACT[".add"] = true;
$tdataBPMN_ARTIFACT[".afterAddAction"] = 1;
$tdataBPMN_ARTIFACT[".closePopupAfterAdd"] = 1;
$tdataBPMN_ARTIFACT[".afterAddActionDetTable"] = "";

$tdataBPMN_ARTIFACT[".list"] = true;

$tdataBPMN_ARTIFACT[".inlineEdit"] = true;


$tdataBPMN_ARTIFACT[".reorderRecordsByHeader"] = true;
$tdataBPMN_ARTIFACT[".createSortByDropdown"] = true;
$tdataBPMN_ARTIFACT[".strSortControlSettingsJSON"] = "";



$tdataBPMN_ARTIFACT[".inlineAdd"] = true;
$tdataBPMN_ARTIFACT[".view"] = true;

$tdataBPMN_ARTIFACT[".import"] = true;

$tdataBPMN_ARTIFACT[".exportTo"] = true;

$tdataBPMN_ARTIFACT[".printFriendly"] = true;

$tdataBPMN_ARTIFACT[".delete"] = true;

$tdataBPMN_ARTIFACT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_ARTIFACT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_ARTIFACT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_ARTIFACT[".searchSaving"] = false;
//

$tdataBPMN_ARTIFACT[".showSearchPanel"] = true;
		$tdataBPMN_ARTIFACT[".flexibleSearch"] = true;

$tdataBPMN_ARTIFACT[".isUseAjaxSuggest"] = true;

$tdataBPMN_ARTIFACT[".rowHighlite"] = true;



																												

$tdataBPMN_ARTIFACT[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_ARTIFACT[".buttonsAdded"] = false;

$tdataBPMN_ARTIFACT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_ARTIFACT[".isUseTimeForSearch"] = false;



$tdataBPMN_ARTIFACT[".badgeColor"] = "DC143C";


$tdataBPMN_ARTIFACT[".allSearchFields"] = array();
$tdataBPMN_ARTIFACT[".filterFields"] = array();
$tdataBPMN_ARTIFACT[".requiredSearchFields"] = array();

$tdataBPMN_ARTIFACT[".allSearchFields"][] = "ART_UID";
	$tdataBPMN_ARTIFACT[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_ARTIFACT[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_ARTIFACT[".allSearchFields"][] = "ART_TYPE";
	$tdataBPMN_ARTIFACT[".allSearchFields"][] = "ART_NAME";
	$tdataBPMN_ARTIFACT[".allSearchFields"][] = "ART_CATEGORY_REF";
	

$tdataBPMN_ARTIFACT[".googleLikeFields"] = array();
$tdataBPMN_ARTIFACT[".googleLikeFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".googleLikeFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".googleLikeFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".googleLikeFields"][] = "ART_CATEGORY_REF";


$tdataBPMN_ARTIFACT[".advSearchFields"] = array();
$tdataBPMN_ARTIFACT[".advSearchFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".advSearchFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".advSearchFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".advSearchFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".tableType"] = "list";

$tdataBPMN_ARTIFACT[".printerPageOrientation"] = 0;
$tdataBPMN_ARTIFACT[".nPrinterPageScale"] = 100;

$tdataBPMN_ARTIFACT[".nPrinterSplitRecords"] = 40;

$tdataBPMN_ARTIFACT[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_ARTIFACT[".geocodingEnabled"] = false;





$tdataBPMN_ARTIFACT[".listGridLayout"] = 3;


$tdataBPMN_ARTIFACT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_ARTIFACT[".pageSize"] = 20;

$tdataBPMN_ARTIFACT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_ARTIFACT[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_ARTIFACT[".orderindexes"] = array();

$tdataBPMN_ARTIFACT[".sqlHead"] = "SELECT ART_UID,  	PRJ_UID,  	PRO_UID,  	ART_TYPE,  	ART_NAME,  	ART_CATEGORY_REF";
$tdataBPMN_ARTIFACT[".sqlFrom"] = "FROM BPMN_ARTIFACT";
$tdataBPMN_ARTIFACT[".sqlWhereExpr"] = "";
$tdataBPMN_ARTIFACT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_ARTIFACT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_ARTIFACT[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_ARTIFACT[".highlightSearchResults"] = true;

$tableKeysBPMN_ARTIFACT = array();
$tableKeysBPMN_ARTIFACT[] = "ART_UID";
$tdataBPMN_ARTIFACT[".Keys"] = $tableKeysBPMN_ARTIFACT;

$tdataBPMN_ARTIFACT[".listFields"] = array();
$tdataBPMN_ARTIFACT[".listFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".listFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".listFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".listFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".listFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".listFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".hideMobileList"] = array();


$tdataBPMN_ARTIFACT[".viewFields"] = array();
$tdataBPMN_ARTIFACT[".viewFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".viewFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".viewFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".viewFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".viewFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".viewFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".addFields"] = array();
$tdataBPMN_ARTIFACT[".addFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".addFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".addFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".addFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".addFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".addFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".masterListFields"] = array();
$tdataBPMN_ARTIFACT[".masterListFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".masterListFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".masterListFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".masterListFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".masterListFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".inlineAddFields"] = array();
$tdataBPMN_ARTIFACT[".inlineAddFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".inlineAddFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".inlineAddFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".inlineAddFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".editFields"] = array();
$tdataBPMN_ARTIFACT[".editFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".editFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".editFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".editFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".editFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".editFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".inlineEditFields"] = array();
$tdataBPMN_ARTIFACT[".inlineEditFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".inlineEditFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".inlineEditFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".inlineEditFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".updateSelectedFields"] = array();
$tdataBPMN_ARTIFACT[".updateSelectedFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".updateSelectedFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".updateSelectedFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".updateSelectedFields"][] = "ART_CATEGORY_REF";


$tdataBPMN_ARTIFACT[".exportFields"] = array();
$tdataBPMN_ARTIFACT[".exportFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".exportFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".exportFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".exportFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".exportFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".exportFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".importFields"] = array();
$tdataBPMN_ARTIFACT[".importFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".importFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".importFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".importFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".importFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".importFields"][] = "ART_CATEGORY_REF";

$tdataBPMN_ARTIFACT[".printFields"] = array();
$tdataBPMN_ARTIFACT[".printFields"][] = "ART_UID";
$tdataBPMN_ARTIFACT[".printFields"][] = "PRJ_UID";
$tdataBPMN_ARTIFACT[".printFields"][] = "PRO_UID";
$tdataBPMN_ARTIFACT[".printFields"][] = "ART_TYPE";
$tdataBPMN_ARTIFACT[".printFields"][] = "ART_NAME";
$tdataBPMN_ARTIFACT[".printFields"][] = "ART_CATEGORY_REF";

//	ART_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ART_UID";
	$fdata["GoodName"] = "ART_UID";
	$fdata["ownerTable"] = "BPMN_ARTIFACT";
	$fdata["Label"] = GetFieldLabel("BPMN_ARTIFACT","ART_UID");
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

		$fdata["strField"] = "ART_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ART_UID";

	
	
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




	$tdataBPMN_ARTIFACT["ART_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_ARTIFACT";
	$fdata["Label"] = GetFieldLabel("BPMN_ARTIFACT","PRJ_UID");
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




	$tdataBPMN_ARTIFACT["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_ARTIFACT";
	$fdata["Label"] = GetFieldLabel("BPMN_ARTIFACT","PRO_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BPMN_PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRO_UID";

	
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




	$tdataBPMN_ARTIFACT["PRO_UID"] = $fdata;
//	ART_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ART_TYPE";
	$fdata["GoodName"] = "ART_TYPE";
	$fdata["ownerTable"] = "BPMN_ARTIFACT";
	$fdata["Label"] = GetFieldLabel("BPMN_ARTIFACT","ART_TYPE");
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

		$fdata["strField"] = "ART_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ART_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataBPMN_ARTIFACT["ART_TYPE"] = $fdata;
//	ART_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ART_NAME";
	$fdata["GoodName"] = "ART_NAME";
	$fdata["ownerTable"] = "BPMN_ARTIFACT";
	$fdata["Label"] = GetFieldLabel("BPMN_ARTIFACT","ART_NAME");
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

		$fdata["strField"] = "ART_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ART_NAME";

	
	
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




	$tdataBPMN_ARTIFACT["ART_NAME"] = $fdata;
//	ART_CATEGORY_REF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ART_CATEGORY_REF";
	$fdata["GoodName"] = "ART_CATEGORY_REF";
	$fdata["ownerTable"] = "BPMN_ARTIFACT";
	$fdata["Label"] = GetFieldLabel("BPMN_ARTIFACT","ART_CATEGORY_REF");
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

		$fdata["strField"] = "ART_CATEGORY_REF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ART_CATEGORY_REF";

	
	
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




	$tdataBPMN_ARTIFACT["ART_CATEGORY_REF"] = $fdata;


$tables_data["BPMN_ARTIFACT"]=&$tdataBPMN_ARTIFACT;
$field_labels["BPMN_ARTIFACT"] = &$fieldLabelsBPMN_ARTIFACT;
$fieldToolTips["BPMN_ARTIFACT"] = &$fieldToolTipsBPMN_ARTIFACT;
$placeHolders["BPMN_ARTIFACT"] = &$placeHoldersBPMN_ARTIFACT;
$page_titles["BPMN_ARTIFACT"] = &$pageTitlesBPMN_ARTIFACT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_ARTIFACT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_ARTIFACT"] = array();


	
				$strOriginalDetailsTable="BPMN_PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROCESS";
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
					$masterTablesData["BPMN_ARTIFACT"][0] = $masterParams;
				$masterTablesData["BPMN_ARTIFACT"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_ARTIFACT"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["BPMN_ARTIFACT"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_ARTIFACT"][0]["detailKeys"][]="PRO_UID";
		
	
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
					$masterTablesData["BPMN_ARTIFACT"][1] = $masterParams;
				$masterTablesData["BPMN_ARTIFACT"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_ARTIFACT"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_ARTIFACT"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_ARTIFACT"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_ARTIFACT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ART_UID,  	PRJ_UID,  	PRO_UID,  	ART_TYPE,  	ART_NAME,  	ART_CATEGORY_REF";
$proto0["m_strFrom"] = "FROM BPMN_ARTIFACT";
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
	"m_strName" => "ART_UID",
	"m_strTable" => "BPMN_ARTIFACT",
	"m_srcTableName" => "BPMN_ARTIFACT"
));

$proto6["m_sql"] = "ART_UID";
$proto6["m_srcTableName"] = "BPMN_ARTIFACT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_ARTIFACT",
	"m_srcTableName" => "BPMN_ARTIFACT"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_ARTIFACT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_ARTIFACT",
	"m_srcTableName" => "BPMN_ARTIFACT"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_ARTIFACT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ART_TYPE",
	"m_strTable" => "BPMN_ARTIFACT",
	"m_srcTableName" => "BPMN_ARTIFACT"
));

$proto12["m_sql"] = "ART_TYPE";
$proto12["m_srcTableName"] = "BPMN_ARTIFACT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ART_NAME",
	"m_strTable" => "BPMN_ARTIFACT",
	"m_srcTableName" => "BPMN_ARTIFACT"
));

$proto14["m_sql"] = "ART_NAME";
$proto14["m_srcTableName"] = "BPMN_ARTIFACT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ART_CATEGORY_REF",
	"m_strTable" => "BPMN_ARTIFACT",
	"m_srcTableName" => "BPMN_ARTIFACT"
));

$proto16["m_sql"] = "ART_CATEGORY_REF";
$proto16["m_srcTableName"] = "BPMN_ARTIFACT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "BPMN_ARTIFACT";
$proto19["m_srcTableName"] = "BPMN_ARTIFACT";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ART_UID";
$proto19["m_columns"][] = "PRJ_UID";
$proto19["m_columns"][] = "PRO_UID";
$proto19["m_columns"][] = "ART_TYPE";
$proto19["m_columns"][] = "ART_NAME";
$proto19["m_columns"][] = "ART_CATEGORY_REF";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "BPMN_ARTIFACT";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "BPMN_ARTIFACT";
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
$proto0["m_srcTableName"]="BPMN_ARTIFACT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_ARTIFACT = createSqlQuery_BPMN_ARTIFACT();


	
						;

						

$tdataBPMN_ARTIFACT[".sqlquery"] = $queryData_BPMN_ARTIFACT;

$tableEvents["BPMN_ARTIFACT"] = new eventsBase;
$tdataBPMN_ARTIFACT[".hasEvents"] = false;

?>
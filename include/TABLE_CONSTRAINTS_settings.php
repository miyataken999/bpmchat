<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTABLE_CONSTRAINTS = array();
	$tdataTABLE_CONSTRAINTS[".truncateText"] = true;
	$tdataTABLE_CONSTRAINTS[".NumberOfChars"] = 80;
	$tdataTABLE_CONSTRAINTS[".ShortName"] = "TABLE_CONSTRAINTS";
	$tdataTABLE_CONSTRAINTS[".OwnerID"] = "";
	$tdataTABLE_CONSTRAINTS[".OriginalTable"] = "TABLE_CONSTRAINTS";

//	field labels
$fieldLabelsTABLE_CONSTRAINTS = array();
$fieldToolTipsTABLE_CONSTRAINTS = array();
$pageTitlesTABLE_CONSTRAINTS = array();
$placeHoldersTABLE_CONSTRAINTS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"] = array();
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"] = array();
	$placeHoldersTABLE_CONSTRAINTS["Japanese"] = array();
	$pageTitlesTABLE_CONSTRAINTS["Japanese"] = array();
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_CATALOG"] = "CONSTRAINT CATALOG";
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_CATALOG"] = "";
	$placeHoldersTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_CATALOG"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_SCHEMA"] = "CONSTRAINT SCHEMA";
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_SCHEMA"] = "";
	$placeHoldersTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_SCHEMA"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_NAME"] = "CONSTRAINT NAME";
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_NAME"] = "";
	$placeHoldersTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_NAME"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"]["TABLE_SCHEMA"] = "TABLE SCHEMA";
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"]["TABLE_SCHEMA"] = "";
	$placeHoldersTABLE_CONSTRAINTS["Japanese"]["TABLE_SCHEMA"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"]["TABLE_NAME"] = "TABLE NAME";
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"]["TABLE_NAME"] = "";
	$placeHoldersTABLE_CONSTRAINTS["Japanese"]["TABLE_NAME"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_TYPE"] = "CONSTRAINT TYPE";
	$fieldToolTipsTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_TYPE"] = "";
	$placeHoldersTABLE_CONSTRAINTS["Japanese"]["CONSTRAINT_TYPE"] = "";
	if (count($fieldToolTipsTABLE_CONSTRAINTS["Japanese"]))
		$tdataTABLE_CONSTRAINTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTABLE_CONSTRAINTS["English"] = array();
	$fieldToolTipsTABLE_CONSTRAINTS["English"] = array();
	$placeHoldersTABLE_CONSTRAINTS["English"] = array();
	$pageTitlesTABLE_CONSTRAINTS["English"] = array();
	$fieldLabelsTABLE_CONSTRAINTS["English"]["CONSTRAINT_CATALOG"] = "CONSTRAINT CATALOG";
	$fieldToolTipsTABLE_CONSTRAINTS["English"]["CONSTRAINT_CATALOG"] = "";
	$placeHoldersTABLE_CONSTRAINTS["English"]["CONSTRAINT_CATALOG"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["English"]["CONSTRAINT_SCHEMA"] = "CONSTRAINT SCHEMA";
	$fieldToolTipsTABLE_CONSTRAINTS["English"]["CONSTRAINT_SCHEMA"] = "";
	$placeHoldersTABLE_CONSTRAINTS["English"]["CONSTRAINT_SCHEMA"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["English"]["CONSTRAINT_NAME"] = "CONSTRAINT NAME";
	$fieldToolTipsTABLE_CONSTRAINTS["English"]["CONSTRAINT_NAME"] = "";
	$placeHoldersTABLE_CONSTRAINTS["English"]["CONSTRAINT_NAME"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["English"]["TABLE_SCHEMA"] = "TABLE SCHEMA";
	$fieldToolTipsTABLE_CONSTRAINTS["English"]["TABLE_SCHEMA"] = "";
	$placeHoldersTABLE_CONSTRAINTS["English"]["TABLE_SCHEMA"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["English"]["TABLE_NAME"] = "TABLE NAME";
	$fieldToolTipsTABLE_CONSTRAINTS["English"]["TABLE_NAME"] = "";
	$placeHoldersTABLE_CONSTRAINTS["English"]["TABLE_NAME"] = "";
	$fieldLabelsTABLE_CONSTRAINTS["English"]["CONSTRAINT_TYPE"] = "CONSTRAINT TYPE";
	$fieldToolTipsTABLE_CONSTRAINTS["English"]["CONSTRAINT_TYPE"] = "";
	$placeHoldersTABLE_CONSTRAINTS["English"]["CONSTRAINT_TYPE"] = "";
	if (count($fieldToolTipsTABLE_CONSTRAINTS["English"]))
		$tdataTABLE_CONSTRAINTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTABLE_CONSTRAINTS[""] = array();
	$fieldToolTipsTABLE_CONSTRAINTS[""] = array();
	$placeHoldersTABLE_CONSTRAINTS[""] = array();
	$pageTitlesTABLE_CONSTRAINTS[""] = array();
	$fieldLabelsTABLE_CONSTRAINTS[""]["CONSTRAINT_CATALOG"] = "CONSTRAINT CATALOG";
	$fieldToolTipsTABLE_CONSTRAINTS[""]["CONSTRAINT_CATALOG"] = "";
	$placeHoldersTABLE_CONSTRAINTS[""]["CONSTRAINT_CATALOG"] = "";
	$fieldLabelsTABLE_CONSTRAINTS[""]["CONSTRAINT_SCHEMA"] = "CONSTRAINT SCHEMA";
	$fieldToolTipsTABLE_CONSTRAINTS[""]["CONSTRAINT_SCHEMA"] = "";
	$placeHoldersTABLE_CONSTRAINTS[""]["CONSTRAINT_SCHEMA"] = "";
	$fieldLabelsTABLE_CONSTRAINTS[""]["CONSTRAINT_NAME"] = "CONSTRAINT NAME";
	$fieldToolTipsTABLE_CONSTRAINTS[""]["CONSTRAINT_NAME"] = "";
	$placeHoldersTABLE_CONSTRAINTS[""]["CONSTRAINT_NAME"] = "";
	$fieldLabelsTABLE_CONSTRAINTS[""]["TABLE_SCHEMA"] = "TABLE SCHEMA";
	$fieldToolTipsTABLE_CONSTRAINTS[""]["TABLE_SCHEMA"] = "";
	$placeHoldersTABLE_CONSTRAINTS[""]["TABLE_SCHEMA"] = "";
	$fieldLabelsTABLE_CONSTRAINTS[""]["TABLE_NAME"] = "TABLE NAME";
	$fieldToolTipsTABLE_CONSTRAINTS[""]["TABLE_NAME"] = "";
	$placeHoldersTABLE_CONSTRAINTS[""]["TABLE_NAME"] = "";
	$fieldLabelsTABLE_CONSTRAINTS[""]["CONSTRAINT_TYPE"] = "CONSTRAINT TYPE";
	$fieldToolTipsTABLE_CONSTRAINTS[""]["CONSTRAINT_TYPE"] = "";
	$placeHoldersTABLE_CONSTRAINTS[""]["CONSTRAINT_TYPE"] = "";
	if (count($fieldToolTipsTABLE_CONSTRAINTS[""]))
		$tdataTABLE_CONSTRAINTS[".isUseToolTips"] = true;
}


	$tdataTABLE_CONSTRAINTS[".NCSearch"] = true;



$tdataTABLE_CONSTRAINTS[".shortTableName"] = "TABLE_CONSTRAINTS";
$tdataTABLE_CONSTRAINTS[".nSecOptions"] = 0;
$tdataTABLE_CONSTRAINTS[".recsPerRowPrint"] = 1;
$tdataTABLE_CONSTRAINTS[".mainTableOwnerID"] = "";
$tdataTABLE_CONSTRAINTS[".moveNext"] = 1;
$tdataTABLE_CONSTRAINTS[".entityType"] = 0;

$tdataTABLE_CONSTRAINTS[".strOriginalTableName"] = "TABLE_CONSTRAINTS";

	



$tdataTABLE_CONSTRAINTS[".showAddInPopup"] = false;

$tdataTABLE_CONSTRAINTS[".showEditInPopup"] = false;

$tdataTABLE_CONSTRAINTS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTABLE_CONSTRAINTS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTABLE_CONSTRAINTS[".fieldsForRegister"] = array();
	
$tdataTABLE_CONSTRAINTS[".listAjax"] = false;

	$tdataTABLE_CONSTRAINTS[".audit"] = false;

	$tdataTABLE_CONSTRAINTS[".locking"] = false;



$tdataTABLE_CONSTRAINTS[".list"] = true;



$tdataTABLE_CONSTRAINTS[".reorderRecordsByHeader"] = true;




$tdataTABLE_CONSTRAINTS[".import"] = true;

$tdataTABLE_CONSTRAINTS[".exportTo"] = true;

$tdataTABLE_CONSTRAINTS[".printFriendly"] = true;


$tdataTABLE_CONSTRAINTS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTABLE_CONSTRAINTS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTABLE_CONSTRAINTS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTABLE_CONSTRAINTS[".searchSaving"] = false;
//

$tdataTABLE_CONSTRAINTS[".showSearchPanel"] = true;
		$tdataTABLE_CONSTRAINTS[".flexibleSearch"] = true;

$tdataTABLE_CONSTRAINTS[".isUseAjaxSuggest"] = true;

$tdataTABLE_CONSTRAINTS[".rowHighlite"] = true;



				

$tdataTABLE_CONSTRAINTS[".ajaxCodeSnippetAdded"] = false;

$tdataTABLE_CONSTRAINTS[".buttonsAdded"] = false;

$tdataTABLE_CONSTRAINTS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTABLE_CONSTRAINTS[".isUseTimeForSearch"] = false;





$tdataTABLE_CONSTRAINTS[".allSearchFields"] = array();
$tdataTABLE_CONSTRAINTS[".filterFields"] = array();
$tdataTABLE_CONSTRAINTS[".requiredSearchFields"] = array();

$tdataTABLE_CONSTRAINTS[".allSearchFields"][] = "CONSTRAINT_CATALOG";
	$tdataTABLE_CONSTRAINTS[".allSearchFields"][] = "CONSTRAINT_SCHEMA";
	$tdataTABLE_CONSTRAINTS[".allSearchFields"][] = "CONSTRAINT_NAME";
	$tdataTABLE_CONSTRAINTS[".allSearchFields"][] = "TABLE_SCHEMA";
	$tdataTABLE_CONSTRAINTS[".allSearchFields"][] = "TABLE_NAME";
	$tdataTABLE_CONSTRAINTS[".allSearchFields"][] = "CONSTRAINT_TYPE";
	

$tdataTABLE_CONSTRAINTS[".googleLikeFields"] = array();
$tdataTABLE_CONSTRAINTS[".googleLikeFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".googleLikeFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".googleLikeFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".googleLikeFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".googleLikeFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".googleLikeFields"][] = "CONSTRAINT_TYPE";


$tdataTABLE_CONSTRAINTS[".advSearchFields"] = array();
$tdataTABLE_CONSTRAINTS[".advSearchFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".advSearchFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".advSearchFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".advSearchFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".advSearchFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".advSearchFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".tableType"] = "list";

$tdataTABLE_CONSTRAINTS[".printerPageOrientation"] = 0;
$tdataTABLE_CONSTRAINTS[".nPrinterPageScale"] = 100;

$tdataTABLE_CONSTRAINTS[".nPrinterSplitRecords"] = 40;

$tdataTABLE_CONSTRAINTS[".nPrinterPDFSplitRecords"] = 40;



$tdataTABLE_CONSTRAINTS[".geocodingEnabled"] = false;





$tdataTABLE_CONSTRAINTS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataTABLE_CONSTRAINTS[".pageSize"] = 20;

$tdataTABLE_CONSTRAINTS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTABLE_CONSTRAINTS[".strOrderBy"] = $tstrOrderBy;

$tdataTABLE_CONSTRAINTS[".orderindexes"] = array();

$tdataTABLE_CONSTRAINTS[".sqlHead"] = "SELECT CONSTRAINT_CATALOG,  	CONSTRAINT_SCHEMA,  	CONSTRAINT_NAME,  	TABLE_SCHEMA,  	TABLE_NAME,  	CONSTRAINT_TYPE";
$tdataTABLE_CONSTRAINTS[".sqlFrom"] = "FROM TABLE_CONSTRAINTS";
$tdataTABLE_CONSTRAINTS[".sqlWhereExpr"] = "";
$tdataTABLE_CONSTRAINTS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTABLE_CONSTRAINTS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTABLE_CONSTRAINTS[".arrGroupsPerPage"] = $arrGPP;

$tdataTABLE_CONSTRAINTS[".highlightSearchResults"] = true;

$tableKeysTABLE_CONSTRAINTS = array();
$tdataTABLE_CONSTRAINTS[".Keys"] = $tableKeysTABLE_CONSTRAINTS;

$tdataTABLE_CONSTRAINTS[".listFields"] = array();
$tdataTABLE_CONSTRAINTS[".listFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".listFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".listFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".listFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".listFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".listFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".hideMobileList"] = array();


$tdataTABLE_CONSTRAINTS[".viewFields"] = array();
$tdataTABLE_CONSTRAINTS[".viewFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".viewFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".viewFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".viewFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".viewFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".viewFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".addFields"] = array();
$tdataTABLE_CONSTRAINTS[".addFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".addFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".addFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".addFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".addFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".addFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".masterListFields"] = array();
$tdataTABLE_CONSTRAINTS[".masterListFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".masterListFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".masterListFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".masterListFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".masterListFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".masterListFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".inlineAddFields"] = array();
$tdataTABLE_CONSTRAINTS[".inlineAddFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".inlineAddFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".inlineAddFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".inlineAddFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".inlineAddFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".inlineAddFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".editFields"] = array();
$tdataTABLE_CONSTRAINTS[".editFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".editFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".editFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".editFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".editFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".editFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".inlineEditFields"] = array();
$tdataTABLE_CONSTRAINTS[".inlineEditFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".inlineEditFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".inlineEditFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".inlineEditFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".inlineEditFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".inlineEditFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".updateSelectedFields"] = array();
$tdataTABLE_CONSTRAINTS[".updateSelectedFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".updateSelectedFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".updateSelectedFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".updateSelectedFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".updateSelectedFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".updateSelectedFields"][] = "CONSTRAINT_TYPE";


$tdataTABLE_CONSTRAINTS[".exportFields"] = array();
$tdataTABLE_CONSTRAINTS[".exportFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".exportFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".exportFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".exportFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".exportFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".exportFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".importFields"] = array();
$tdataTABLE_CONSTRAINTS[".importFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".importFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".importFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".importFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".importFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".importFields"][] = "CONSTRAINT_TYPE";

$tdataTABLE_CONSTRAINTS[".printFields"] = array();
$tdataTABLE_CONSTRAINTS[".printFields"][] = "CONSTRAINT_CATALOG";
$tdataTABLE_CONSTRAINTS[".printFields"][] = "CONSTRAINT_SCHEMA";
$tdataTABLE_CONSTRAINTS[".printFields"][] = "CONSTRAINT_NAME";
$tdataTABLE_CONSTRAINTS[".printFields"][] = "TABLE_SCHEMA";
$tdataTABLE_CONSTRAINTS[".printFields"][] = "TABLE_NAME";
$tdataTABLE_CONSTRAINTS[".printFields"][] = "CONSTRAINT_TYPE";

//	CONSTRAINT_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CONSTRAINT_CATALOG";
	$fdata["GoodName"] = "CONSTRAINT_CATALOG";
	$fdata["ownerTable"] = "TABLE_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("TABLE_CONSTRAINTS","CONSTRAINT_CATALOG");
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

		$fdata["strField"] = "CONSTRAINT_CATALOG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_CATALOG";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataTABLE_CONSTRAINTS["CONSTRAINT_CATALOG"] = $fdata;
//	CONSTRAINT_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CONSTRAINT_SCHEMA";
	$fdata["GoodName"] = "CONSTRAINT_SCHEMA";
	$fdata["ownerTable"] = "TABLE_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("TABLE_CONSTRAINTS","CONSTRAINT_SCHEMA");
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

		$fdata["strField"] = "CONSTRAINT_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_SCHEMA";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLE_CONSTRAINTS["CONSTRAINT_SCHEMA"] = $fdata;
//	CONSTRAINT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CONSTRAINT_NAME";
	$fdata["GoodName"] = "CONSTRAINT_NAME";
	$fdata["ownerTable"] = "TABLE_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("TABLE_CONSTRAINTS","CONSTRAINT_NAME");
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

		$fdata["strField"] = "CONSTRAINT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLE_CONSTRAINTS["CONSTRAINT_NAME"] = $fdata;
//	TABLE_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TABLE_SCHEMA";
	$fdata["GoodName"] = "TABLE_SCHEMA";
	$fdata["ownerTable"] = "TABLE_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("TABLE_CONSTRAINTS","TABLE_SCHEMA");
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

		$fdata["strField"] = "TABLE_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_SCHEMA";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLE_CONSTRAINTS["TABLE_SCHEMA"] = $fdata;
//	TABLE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TABLE_NAME";
	$fdata["GoodName"] = "TABLE_NAME";
	$fdata["ownerTable"] = "TABLE_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("TABLE_CONSTRAINTS","TABLE_NAME");
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

		$fdata["strField"] = "TABLE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLE_CONSTRAINTS["TABLE_NAME"] = $fdata;
//	CONSTRAINT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CONSTRAINT_TYPE";
	$fdata["GoodName"] = "CONSTRAINT_TYPE";
	$fdata["ownerTable"] = "TABLE_CONSTRAINTS";
	$fdata["Label"] = GetFieldLabel("TABLE_CONSTRAINTS","CONSTRAINT_TYPE");
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

		$fdata["strField"] = "CONSTRAINT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSTRAINT_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLE_CONSTRAINTS["CONSTRAINT_TYPE"] = $fdata;


$tables_data["TABLE_CONSTRAINTS"]=&$tdataTABLE_CONSTRAINTS;
$field_labels["TABLE_CONSTRAINTS"] = &$fieldLabelsTABLE_CONSTRAINTS;
$fieldToolTips["TABLE_CONSTRAINTS"] = &$fieldToolTipsTABLE_CONSTRAINTS;
$placeHolders["TABLE_CONSTRAINTS"] = &$placeHoldersTABLE_CONSTRAINTS;
$page_titles["TABLE_CONSTRAINTS"] = &$pageTitlesTABLE_CONSTRAINTS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TABLE_CONSTRAINTS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TABLE_CONSTRAINTS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TABLE_CONSTRAINTS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CONSTRAINT_CATALOG,  	CONSTRAINT_SCHEMA,  	CONSTRAINT_NAME,  	TABLE_SCHEMA,  	TABLE_NAME,  	CONSTRAINT_TYPE";
$proto0["m_strFrom"] = "FROM TABLE_CONSTRAINTS";
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
	"m_strName" => "CONSTRAINT_CATALOG",
	"m_strTable" => "TABLE_CONSTRAINTS",
	"m_srcTableName" => "TABLE_CONSTRAINTS"
));

$proto6["m_sql"] = "CONSTRAINT_CATALOG";
$proto6["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSTRAINT_SCHEMA",
	"m_strTable" => "TABLE_CONSTRAINTS",
	"m_srcTableName" => "TABLE_CONSTRAINTS"
));

$proto8["m_sql"] = "CONSTRAINT_SCHEMA";
$proto8["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSTRAINT_NAME",
	"m_strTable" => "TABLE_CONSTRAINTS",
	"m_srcTableName" => "TABLE_CONSTRAINTS"
));

$proto10["m_sql"] = "CONSTRAINT_NAME";
$proto10["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_SCHEMA",
	"m_strTable" => "TABLE_CONSTRAINTS",
	"m_srcTableName" => "TABLE_CONSTRAINTS"
));

$proto12["m_sql"] = "TABLE_SCHEMA";
$proto12["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_NAME",
	"m_strTable" => "TABLE_CONSTRAINTS",
	"m_srcTableName" => "TABLE_CONSTRAINTS"
));

$proto14["m_sql"] = "TABLE_NAME";
$proto14["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSTRAINT_TYPE",
	"m_strTable" => "TABLE_CONSTRAINTS",
	"m_srcTableName" => "TABLE_CONSTRAINTS"
));

$proto16["m_sql"] = "CONSTRAINT_TYPE";
$proto16["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "TABLE_CONSTRAINTS";
$proto19["m_srcTableName"] = "TABLE_CONSTRAINTS";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "CONSTRAINT_CATALOG";
$proto19["m_columns"][] = "CONSTRAINT_SCHEMA";
$proto19["m_columns"][] = "CONSTRAINT_NAME";
$proto19["m_columns"][] = "TABLE_SCHEMA";
$proto19["m_columns"][] = "TABLE_NAME";
$proto19["m_columns"][] = "CONSTRAINT_TYPE";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "TABLE_CONSTRAINTS";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TABLE_CONSTRAINTS";
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
$proto0["m_srcTableName"]="TABLE_CONSTRAINTS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TABLE_CONSTRAINTS = createSqlQuery_TABLE_CONSTRAINTS();


	
						;

						

$tdataTABLE_CONSTRAINTS[".sqlquery"] = $queryData_TABLE_CONSTRAINTS;

$tableEvents["TABLE_CONSTRAINTS"] = new eventsBase;
$tdataTABLE_CONSTRAINTS[".hasEvents"] = false;

?>
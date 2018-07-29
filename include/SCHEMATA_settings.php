<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSCHEMATA = array();
	$tdataSCHEMATA[".truncateText"] = true;
	$tdataSCHEMATA[".NumberOfChars"] = 20;
	$tdataSCHEMATA[".ShortName"] = "SCHEMATA";
	$tdataSCHEMATA[".OwnerID"] = "";
	$tdataSCHEMATA[".OriginalTable"] = "SCHEMATA";

//	field labels
$fieldLabelsSCHEMATA = array();
$fieldToolTipsSCHEMATA = array();
$pageTitlesSCHEMATA = array();
$placeHoldersSCHEMATA = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSCHEMATA["Japanese"] = array();
	$fieldToolTipsSCHEMATA["Japanese"] = array();
	$placeHoldersSCHEMATA["Japanese"] = array();
	$pageTitlesSCHEMATA["Japanese"] = array();
	$fieldLabelsSCHEMATA["Japanese"]["CATALOG_NAME"] = "カタログ名";
	$fieldToolTipsSCHEMATA["Japanese"]["CATALOG_NAME"] = "";
	$placeHoldersSCHEMATA["Japanese"]["CATALOG_NAME"] = "";
	$fieldLabelsSCHEMATA["Japanese"]["SCHEMA_NAME"] = "スキーマ名";
	$fieldToolTipsSCHEMATA["Japanese"]["SCHEMA_NAME"] = "";
	$placeHoldersSCHEMATA["Japanese"]["SCHEMA_NAME"] = "";
	$fieldLabelsSCHEMATA["Japanese"]["DEFAULT_CHARACTER_SET_NAME"] = "デフォルトの文字セット名";
	$fieldToolTipsSCHEMATA["Japanese"]["DEFAULT_CHARACTER_SET_NAME"] = "";
	$placeHoldersSCHEMATA["Japanese"]["DEFAULT_CHARACTER_SET_NAME"] = "";
	$fieldLabelsSCHEMATA["Japanese"]["DEFAULT_COLLATION_NAME"] = "デフォルトの照合名";
	$fieldToolTipsSCHEMATA["Japanese"]["DEFAULT_COLLATION_NAME"] = "";
	$placeHoldersSCHEMATA["Japanese"]["DEFAULT_COLLATION_NAME"] = "";
	$fieldLabelsSCHEMATA["Japanese"]["SQL_PATH"] = "SQLパス";
	$fieldToolTipsSCHEMATA["Japanese"]["SQL_PATH"] = "";
	$placeHoldersSCHEMATA["Japanese"]["SQL_PATH"] = "";
	if (count($fieldToolTipsSCHEMATA["Japanese"]))
		$tdataSCHEMATA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSCHEMATA["English"] = array();
	$fieldToolTipsSCHEMATA["English"] = array();
	$placeHoldersSCHEMATA["English"] = array();
	$pageTitlesSCHEMATA["English"] = array();
	$fieldLabelsSCHEMATA["English"]["CATALOG_NAME"] = "カタログ名";
	$fieldToolTipsSCHEMATA["English"]["CATALOG_NAME"] = "";
	$placeHoldersSCHEMATA["English"]["CATALOG_NAME"] = "";
	$fieldLabelsSCHEMATA["English"]["SCHEMA_NAME"] = "スキーマ名";
	$fieldToolTipsSCHEMATA["English"]["SCHEMA_NAME"] = "";
	$placeHoldersSCHEMATA["English"]["SCHEMA_NAME"] = "";
	$fieldLabelsSCHEMATA["English"]["DEFAULT_CHARACTER_SET_NAME"] = "デフォルトの文字セット名";
	$fieldToolTipsSCHEMATA["English"]["DEFAULT_CHARACTER_SET_NAME"] = "";
	$placeHoldersSCHEMATA["English"]["DEFAULT_CHARACTER_SET_NAME"] = "";
	$fieldLabelsSCHEMATA["English"]["DEFAULT_COLLATION_NAME"] = "デフォルトの照合名";
	$fieldToolTipsSCHEMATA["English"]["DEFAULT_COLLATION_NAME"] = "";
	$placeHoldersSCHEMATA["English"]["DEFAULT_COLLATION_NAME"] = "";
	$fieldLabelsSCHEMATA["English"]["SQL_PATH"] = "SQLパス";
	$fieldToolTipsSCHEMATA["English"]["SQL_PATH"] = "";
	$placeHoldersSCHEMATA["English"]["SQL_PATH"] = "";
	if (count($fieldToolTipsSCHEMATA["English"]))
		$tdataSCHEMATA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSCHEMATA[""] = array();
	$fieldToolTipsSCHEMATA[""] = array();
	$placeHoldersSCHEMATA[""] = array();
	$pageTitlesSCHEMATA[""] = array();
	if (count($fieldToolTipsSCHEMATA[""]))
		$tdataSCHEMATA[".isUseToolTips"] = true;
}


	$tdataSCHEMATA[".NCSearch"] = true;



$tdataSCHEMATA[".shortTableName"] = "SCHEMATA";
$tdataSCHEMATA[".nSecOptions"] = 0;
$tdataSCHEMATA[".recsPerRowPrint"] = 1;
$tdataSCHEMATA[".mainTableOwnerID"] = "";
$tdataSCHEMATA[".moveNext"] = 0;
$tdataSCHEMATA[".entityType"] = 0;

$tdataSCHEMATA[".strOriginalTableName"] = "SCHEMATA";

	



$tdataSCHEMATA[".showAddInPopup"] = false;

$tdataSCHEMATA[".showEditInPopup"] = false;

$tdataSCHEMATA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSCHEMATA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSCHEMATA[".fieldsForRegister"] = array();
	
$tdataSCHEMATA[".listAjax"] = false;

	$tdataSCHEMATA[".audit"] = true;

	$tdataSCHEMATA[".locking"] = false;



$tdataSCHEMATA[".list"] = true;



$tdataSCHEMATA[".reorderRecordsByHeader"] = true;




$tdataSCHEMATA[".import"] = true;

$tdataSCHEMATA[".exportTo"] = true;

$tdataSCHEMATA[".printFriendly"] = true;


$tdataSCHEMATA[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSCHEMATA[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSCHEMATA[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSCHEMATA[".searchSaving"] = false;
//

$tdataSCHEMATA[".showSearchPanel"] = true;
		$tdataSCHEMATA[".flexibleSearch"] = true;

$tdataSCHEMATA[".isUseAjaxSuggest"] = true;

$tdataSCHEMATA[".rowHighlite"] = true;



				

$tdataSCHEMATA[".ajaxCodeSnippetAdded"] = false;

$tdataSCHEMATA[".buttonsAdded"] = false;

$tdataSCHEMATA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSCHEMATA[".isUseTimeForSearch"] = false;





$tdataSCHEMATA[".allSearchFields"] = array();
$tdataSCHEMATA[".filterFields"] = array();
$tdataSCHEMATA[".requiredSearchFields"] = array();

$tdataSCHEMATA[".allSearchFields"][] = "CATALOG_NAME";
	$tdataSCHEMATA[".allSearchFields"][] = "SCHEMA_NAME";
	$tdataSCHEMATA[".allSearchFields"][] = "DEFAULT_CHARACTER_SET_NAME";
	$tdataSCHEMATA[".allSearchFields"][] = "DEFAULT_COLLATION_NAME";
	$tdataSCHEMATA[".allSearchFields"][] = "SQL_PATH";
	

$tdataSCHEMATA[".googleLikeFields"] = array();
$tdataSCHEMATA[".googleLikeFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".googleLikeFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".googleLikeFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".googleLikeFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".googleLikeFields"][] = "SQL_PATH";


$tdataSCHEMATA[".advSearchFields"] = array();
$tdataSCHEMATA[".advSearchFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".advSearchFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".advSearchFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".advSearchFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".advSearchFields"][] = "SQL_PATH";

$tdataSCHEMATA[".tableType"] = "list";

$tdataSCHEMATA[".printerPageOrientation"] = 0;
$tdataSCHEMATA[".nPrinterPageScale"] = 100;

$tdataSCHEMATA[".nPrinterSplitRecords"] = 40;

$tdataSCHEMATA[".nPrinterPDFSplitRecords"] = 40;



$tdataSCHEMATA[".geocodingEnabled"] = false;





$tdataSCHEMATA[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataSCHEMATA[".pageSize"] = 20;

$tdataSCHEMATA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSCHEMATA[".strOrderBy"] = $tstrOrderBy;

$tdataSCHEMATA[".orderindexes"] = array();

$tdataSCHEMATA[".sqlHead"] = "SELECT CATALOG_NAME,  	SCHEMA_NAME,  	DEFAULT_CHARACTER_SET_NAME,  	DEFAULT_COLLATION_NAME,  	SQL_PATH";
$tdataSCHEMATA[".sqlFrom"] = "FROM SCHEMATA";
$tdataSCHEMATA[".sqlWhereExpr"] = "";
$tdataSCHEMATA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSCHEMATA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSCHEMATA[".arrGroupsPerPage"] = $arrGPP;

$tdataSCHEMATA[".highlightSearchResults"] = true;

$tableKeysSCHEMATA = array();
$tdataSCHEMATA[".Keys"] = $tableKeysSCHEMATA;

$tdataSCHEMATA[".listFields"] = array();
$tdataSCHEMATA[".listFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".listFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".listFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".listFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".listFields"][] = "SQL_PATH";

$tdataSCHEMATA[".hideMobileList"] = array();


$tdataSCHEMATA[".viewFields"] = array();
$tdataSCHEMATA[".viewFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".viewFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".viewFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".viewFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".viewFields"][] = "SQL_PATH";

$tdataSCHEMATA[".addFields"] = array();
$tdataSCHEMATA[".addFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".addFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".addFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".addFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".addFields"][] = "SQL_PATH";

$tdataSCHEMATA[".masterListFields"] = array();
$tdataSCHEMATA[".masterListFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".masterListFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".masterListFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".masterListFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".masterListFields"][] = "SQL_PATH";

$tdataSCHEMATA[".inlineAddFields"] = array();
$tdataSCHEMATA[".inlineAddFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".inlineAddFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".inlineAddFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".inlineAddFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".inlineAddFields"][] = "SQL_PATH";

$tdataSCHEMATA[".editFields"] = array();
$tdataSCHEMATA[".editFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".editFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".editFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".editFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".editFields"][] = "SQL_PATH";

$tdataSCHEMATA[".inlineEditFields"] = array();
$tdataSCHEMATA[".inlineEditFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".inlineEditFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".inlineEditFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".inlineEditFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".inlineEditFields"][] = "SQL_PATH";

$tdataSCHEMATA[".updateSelectedFields"] = array();
$tdataSCHEMATA[".updateSelectedFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".updateSelectedFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".updateSelectedFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".updateSelectedFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".updateSelectedFields"][] = "SQL_PATH";


$tdataSCHEMATA[".exportFields"] = array();
$tdataSCHEMATA[".exportFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".exportFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".exportFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".exportFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".exportFields"][] = "SQL_PATH";

$tdataSCHEMATA[".importFields"] = array();
$tdataSCHEMATA[".importFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".importFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".importFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".importFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".importFields"][] = "SQL_PATH";

$tdataSCHEMATA[".printFields"] = array();
$tdataSCHEMATA[".printFields"][] = "CATALOG_NAME";
$tdataSCHEMATA[".printFields"][] = "SCHEMA_NAME";
$tdataSCHEMATA[".printFields"][] = "DEFAULT_CHARACTER_SET_NAME";
$tdataSCHEMATA[".printFields"][] = "DEFAULT_COLLATION_NAME";
$tdataSCHEMATA[".printFields"][] = "SQL_PATH";

//	CATALOG_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CATALOG_NAME";
	$fdata["GoodName"] = "CATALOG_NAME";
	$fdata["ownerTable"] = "SCHEMATA";
	$fdata["Label"] = GetFieldLabel("SCHEMATA","CATALOG_NAME");
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

		$fdata["strField"] = "CATALOG_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATALOG_NAME";

	
	
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




	$tdataSCHEMATA["CATALOG_NAME"] = $fdata;
//	SCHEMA_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SCHEMA_NAME";
	$fdata["GoodName"] = "SCHEMA_NAME";
	$fdata["ownerTable"] = "SCHEMATA";
	$fdata["Label"] = GetFieldLabel("SCHEMATA","SCHEMA_NAME");
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

		$fdata["strField"] = "SCHEMA_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCHEMA_NAME";

	
	
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




	$tdataSCHEMATA["SCHEMA_NAME"] = $fdata;
//	DEFAULT_CHARACTER_SET_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEFAULT_CHARACTER_SET_NAME";
	$fdata["GoodName"] = "DEFAULT_CHARACTER_SET_NAME";
	$fdata["ownerTable"] = "SCHEMATA";
	$fdata["Label"] = GetFieldLabel("SCHEMATA","DEFAULT_CHARACTER_SET_NAME");
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

		$fdata["strField"] = "DEFAULT_CHARACTER_SET_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEFAULT_CHARACTER_SET_NAME";

	
	
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




	$tdataSCHEMATA["DEFAULT_CHARACTER_SET_NAME"] = $fdata;
//	DEFAULT_COLLATION_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEFAULT_COLLATION_NAME";
	$fdata["GoodName"] = "DEFAULT_COLLATION_NAME";
	$fdata["ownerTable"] = "SCHEMATA";
	$fdata["Label"] = GetFieldLabel("SCHEMATA","DEFAULT_COLLATION_NAME");
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

		$fdata["strField"] = "DEFAULT_COLLATION_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEFAULT_COLLATION_NAME";

	
	
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




	$tdataSCHEMATA["DEFAULT_COLLATION_NAME"] = $fdata;
//	SQL_PATH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SQL_PATH";
	$fdata["GoodName"] = "SQL_PATH";
	$fdata["ownerTable"] = "SCHEMATA";
	$fdata["Label"] = GetFieldLabel("SCHEMATA","SQL_PATH");
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

		$fdata["strField"] = "SQL_PATH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SQL_PATH";

	
	
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




	$tdataSCHEMATA["SQL_PATH"] = $fdata;


$tables_data["SCHEMATA"]=&$tdataSCHEMATA;
$field_labels["SCHEMATA"] = &$fieldLabelsSCHEMATA;
$fieldToolTips["SCHEMATA"] = &$fieldToolTipsSCHEMATA;
$placeHolders["SCHEMATA"] = &$placeHoldersSCHEMATA;
$page_titles["SCHEMATA"] = &$pageTitlesSCHEMATA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SCHEMATA"] = array();
//	TABLES
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TABLES";
		$detailsParam["dOriginalTable"] = "TABLES";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "TABLES";
	$detailsParam["dCaptionTable"] = GetTableCaption("TABLES");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["SCHEMATA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["SCHEMATA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["SCHEMATA"][$dIndex]["masterKeys"][]="SCHEMA_NAME";

				$detailsTablesData["SCHEMATA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["SCHEMATA"][$dIndex]["detailKeys"][]="TABLE_SCHEMA";

// tables which are master tables for current table (detail)
$masterTablesData["SCHEMATA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SCHEMATA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CATALOG_NAME,  	SCHEMA_NAME,  	DEFAULT_CHARACTER_SET_NAME,  	DEFAULT_COLLATION_NAME,  	SQL_PATH";
$proto0["m_strFrom"] = "FROM SCHEMATA";
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
	"m_strName" => "CATALOG_NAME",
	"m_strTable" => "SCHEMATA",
	"m_srcTableName" => "SCHEMATA"
));

$proto6["m_sql"] = "CATALOG_NAME";
$proto6["m_srcTableName"] = "SCHEMATA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SCHEMA_NAME",
	"m_strTable" => "SCHEMATA",
	"m_srcTableName" => "SCHEMATA"
));

$proto8["m_sql"] = "SCHEMA_NAME";
$proto8["m_srcTableName"] = "SCHEMATA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEFAULT_CHARACTER_SET_NAME",
	"m_strTable" => "SCHEMATA",
	"m_srcTableName" => "SCHEMATA"
));

$proto10["m_sql"] = "DEFAULT_CHARACTER_SET_NAME";
$proto10["m_srcTableName"] = "SCHEMATA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEFAULT_COLLATION_NAME",
	"m_strTable" => "SCHEMATA",
	"m_srcTableName" => "SCHEMATA"
));

$proto12["m_sql"] = "DEFAULT_COLLATION_NAME";
$proto12["m_srcTableName"] = "SCHEMATA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SQL_PATH",
	"m_strTable" => "SCHEMATA",
	"m_srcTableName" => "SCHEMATA"
));

$proto14["m_sql"] = "SQL_PATH";
$proto14["m_srcTableName"] = "SCHEMATA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "SCHEMATA";
$proto17["m_srcTableName"] = "SCHEMATA";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "CATALOG_NAME";
$proto17["m_columns"][] = "SCHEMA_NAME";
$proto17["m_columns"][] = "DEFAULT_CHARACTER_SET_NAME";
$proto17["m_columns"][] = "DEFAULT_COLLATION_NAME";
$proto17["m_columns"][] = "SQL_PATH";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "SCHEMATA";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "SCHEMATA";
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
$proto0["m_srcTableName"]="SCHEMATA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SCHEMATA = createSqlQuery_SCHEMATA();


	
						;

					

$tdataSCHEMATA[".sqlquery"] = $queryData_SCHEMATA;

$tableEvents["SCHEMATA"] = new eventsBase;
$tdataSCHEMATA[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_SAGAWA = array();
	$tdataPMT_SAGAWA[".truncateText"] = true;
	$tdataPMT_SAGAWA[".NumberOfChars"] = 80;
	$tdataPMT_SAGAWA[".ShortName"] = "PMT_SAGAWA";
	$tdataPMT_SAGAWA[".OwnerID"] = "";
	$tdataPMT_SAGAWA[".OriginalTable"] = "PMT_SAGAWA";

//	field labels
$fieldLabelsPMT_SAGAWA = array();
$fieldToolTipsPMT_SAGAWA = array();
$pageTitlesPMT_SAGAWA = array();
$placeHoldersPMT_SAGAWA = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_SAGAWA["Japanese"] = array();
	$fieldToolTipsPMT_SAGAWA["Japanese"] = array();
	$placeHoldersPMT_SAGAWA["Japanese"] = array();
	$pageTitlesPMT_SAGAWA["Japanese"] = array();
	$fieldLabelsPMT_SAGAWA["Japanese"]["DATA1"] = "DATA1";
	$fieldToolTipsPMT_SAGAWA["Japanese"]["DATA1"] = "";
	$placeHoldersPMT_SAGAWA["Japanese"]["DATA1"] = "";
	$fieldLabelsPMT_SAGAWA["Japanese"]["DATA2"] = "DATA2";
	$fieldToolTipsPMT_SAGAWA["Japanese"]["DATA2"] = "";
	$placeHoldersPMT_SAGAWA["Japanese"]["DATA2"] = "";
	$fieldLabelsPMT_SAGAWA["Japanese"]["DATA3"] = "DATA3";
	$fieldToolTipsPMT_SAGAWA["Japanese"]["DATA3"] = "";
	$placeHoldersPMT_SAGAWA["Japanese"]["DATA3"] = "";
	$fieldLabelsPMT_SAGAWA["Japanese"]["DATE4"] = "DATE4";
	$fieldToolTipsPMT_SAGAWA["Japanese"]["DATE4"] = "";
	$placeHoldersPMT_SAGAWA["Japanese"]["DATE4"] = "";
	if (count($fieldToolTipsPMT_SAGAWA["Japanese"]))
		$tdataPMT_SAGAWA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_SAGAWA["English"] = array();
	$fieldToolTipsPMT_SAGAWA["English"] = array();
	$placeHoldersPMT_SAGAWA["English"] = array();
	$pageTitlesPMT_SAGAWA["English"] = array();
	$fieldLabelsPMT_SAGAWA["English"]["DATA1"] = "DATA1";
	$fieldToolTipsPMT_SAGAWA["English"]["DATA1"] = "";
	$placeHoldersPMT_SAGAWA["English"]["DATA1"] = "";
	$fieldLabelsPMT_SAGAWA["English"]["DATA2"] = "DATA2";
	$fieldToolTipsPMT_SAGAWA["English"]["DATA2"] = "";
	$placeHoldersPMT_SAGAWA["English"]["DATA2"] = "";
	$fieldLabelsPMT_SAGAWA["English"]["DATA3"] = "DATA3";
	$fieldToolTipsPMT_SAGAWA["English"]["DATA3"] = "";
	$placeHoldersPMT_SAGAWA["English"]["DATA3"] = "";
	$fieldLabelsPMT_SAGAWA["English"]["DATE4"] = "DATE4";
	$fieldToolTipsPMT_SAGAWA["English"]["DATE4"] = "";
	$placeHoldersPMT_SAGAWA["English"]["DATE4"] = "";
	if (count($fieldToolTipsPMT_SAGAWA["English"]))
		$tdataPMT_SAGAWA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_SAGAWA[""] = array();
	$fieldToolTipsPMT_SAGAWA[""] = array();
	$placeHoldersPMT_SAGAWA[""] = array();
	$pageTitlesPMT_SAGAWA[""] = array();
	$fieldLabelsPMT_SAGAWA[""]["DATA1"] = "DATA1";
	$fieldToolTipsPMT_SAGAWA[""]["DATA1"] = "";
	$placeHoldersPMT_SAGAWA[""]["DATA1"] = "";
	$fieldLabelsPMT_SAGAWA[""]["DATA2"] = "DATA2";
	$fieldToolTipsPMT_SAGAWA[""]["DATA2"] = "";
	$placeHoldersPMT_SAGAWA[""]["DATA2"] = "";
	$fieldLabelsPMT_SAGAWA[""]["DATA3"] = "DATA3";
	$fieldToolTipsPMT_SAGAWA[""]["DATA3"] = "";
	$placeHoldersPMT_SAGAWA[""]["DATA3"] = "";
	$fieldLabelsPMT_SAGAWA[""]["DATE4"] = "DATE4";
	$fieldToolTipsPMT_SAGAWA[""]["DATE4"] = "";
	$placeHoldersPMT_SAGAWA[""]["DATE4"] = "";
	if (count($fieldToolTipsPMT_SAGAWA[""]))
		$tdataPMT_SAGAWA[".isUseToolTips"] = true;
}


	$tdataPMT_SAGAWA[".NCSearch"] = true;



$tdataPMT_SAGAWA[".shortTableName"] = "PMT_SAGAWA";
$tdataPMT_SAGAWA[".nSecOptions"] = 0;
$tdataPMT_SAGAWA[".recsPerRowPrint"] = 1;
$tdataPMT_SAGAWA[".mainTableOwnerID"] = "";
$tdataPMT_SAGAWA[".moveNext"] = 1;
$tdataPMT_SAGAWA[".entityType"] = 0;

$tdataPMT_SAGAWA[".strOriginalTableName"] = "PMT_SAGAWA";

	



$tdataPMT_SAGAWA[".showAddInPopup"] = false;

$tdataPMT_SAGAWA[".showEditInPopup"] = false;

$tdataPMT_SAGAWA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_SAGAWA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_SAGAWA[".fieldsForRegister"] = array();
	
$tdataPMT_SAGAWA[".listAjax"] = false;

	$tdataPMT_SAGAWA[".audit"] = false;

	$tdataPMT_SAGAWA[".locking"] = false;



$tdataPMT_SAGAWA[".list"] = true;



$tdataPMT_SAGAWA[".reorderRecordsByHeader"] = true;




$tdataPMT_SAGAWA[".import"] = true;

$tdataPMT_SAGAWA[".exportTo"] = true;

$tdataPMT_SAGAWA[".printFriendly"] = true;


$tdataPMT_SAGAWA[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_SAGAWA[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_SAGAWA[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_SAGAWA[".searchSaving"] = false;
//

$tdataPMT_SAGAWA[".showSearchPanel"] = true;
		$tdataPMT_SAGAWA[".flexibleSearch"] = true;

$tdataPMT_SAGAWA[".isUseAjaxSuggest"] = true;

$tdataPMT_SAGAWA[".rowHighlite"] = true;



				

$tdataPMT_SAGAWA[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_SAGAWA[".buttonsAdded"] = false;

$tdataPMT_SAGAWA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_SAGAWA[".isUseTimeForSearch"] = false;





$tdataPMT_SAGAWA[".allSearchFields"] = array();
$tdataPMT_SAGAWA[".filterFields"] = array();
$tdataPMT_SAGAWA[".requiredSearchFields"] = array();

$tdataPMT_SAGAWA[".allSearchFields"][] = "DATA1";
	$tdataPMT_SAGAWA[".allSearchFields"][] = "DATA2";
	$tdataPMT_SAGAWA[".allSearchFields"][] = "DATA3";
	$tdataPMT_SAGAWA[".allSearchFields"][] = "DATE4";
	

$tdataPMT_SAGAWA[".googleLikeFields"] = array();
$tdataPMT_SAGAWA[".googleLikeFields"][] = "DATA1";
$tdataPMT_SAGAWA[".googleLikeFields"][] = "DATA2";
$tdataPMT_SAGAWA[".googleLikeFields"][] = "DATA3";
$tdataPMT_SAGAWA[".googleLikeFields"][] = "DATE4";


$tdataPMT_SAGAWA[".advSearchFields"] = array();
$tdataPMT_SAGAWA[".advSearchFields"][] = "DATA1";
$tdataPMT_SAGAWA[".advSearchFields"][] = "DATA2";
$tdataPMT_SAGAWA[".advSearchFields"][] = "DATA3";
$tdataPMT_SAGAWA[".advSearchFields"][] = "DATE4";

$tdataPMT_SAGAWA[".tableType"] = "list";

$tdataPMT_SAGAWA[".printerPageOrientation"] = 0;
$tdataPMT_SAGAWA[".nPrinterPageScale"] = 100;

$tdataPMT_SAGAWA[".nPrinterSplitRecords"] = 40;

$tdataPMT_SAGAWA[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_SAGAWA[".geocodingEnabled"] = false;





$tdataPMT_SAGAWA[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_SAGAWA[".pageSize"] = 20;

$tdataPMT_SAGAWA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_SAGAWA[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_SAGAWA[".orderindexes"] = array();

$tdataPMT_SAGAWA[".sqlHead"] = "SELECT DATA1,  	DATA2,  	DATA3,  	DATE4";
$tdataPMT_SAGAWA[".sqlFrom"] = "FROM PMT_SAGAWA";
$tdataPMT_SAGAWA[".sqlWhereExpr"] = "";
$tdataPMT_SAGAWA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_SAGAWA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_SAGAWA[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_SAGAWA[".highlightSearchResults"] = true;

$tableKeysPMT_SAGAWA = array();
$tdataPMT_SAGAWA[".Keys"] = $tableKeysPMT_SAGAWA;

$tdataPMT_SAGAWA[".listFields"] = array();
$tdataPMT_SAGAWA[".listFields"][] = "DATA1";
$tdataPMT_SAGAWA[".listFields"][] = "DATA2";
$tdataPMT_SAGAWA[".listFields"][] = "DATA3";
$tdataPMT_SAGAWA[".listFields"][] = "DATE4";

$tdataPMT_SAGAWA[".hideMobileList"] = array();


$tdataPMT_SAGAWA[".viewFields"] = array();
$tdataPMT_SAGAWA[".viewFields"][] = "DATA1";
$tdataPMT_SAGAWA[".viewFields"][] = "DATA2";
$tdataPMT_SAGAWA[".viewFields"][] = "DATA3";
$tdataPMT_SAGAWA[".viewFields"][] = "DATE4";

$tdataPMT_SAGAWA[".addFields"] = array();
$tdataPMT_SAGAWA[".addFields"][] = "DATA1";
$tdataPMT_SAGAWA[".addFields"][] = "DATA2";
$tdataPMT_SAGAWA[".addFields"][] = "DATA3";
$tdataPMT_SAGAWA[".addFields"][] = "DATE4";

$tdataPMT_SAGAWA[".masterListFields"] = array();
$tdataPMT_SAGAWA[".masterListFields"][] = "DATA1";
$tdataPMT_SAGAWA[".masterListFields"][] = "DATA2";
$tdataPMT_SAGAWA[".masterListFields"][] = "DATA3";
$tdataPMT_SAGAWA[".masterListFields"][] = "DATE4";

$tdataPMT_SAGAWA[".inlineAddFields"] = array();
$tdataPMT_SAGAWA[".inlineAddFields"][] = "DATA1";
$tdataPMT_SAGAWA[".inlineAddFields"][] = "DATA2";
$tdataPMT_SAGAWA[".inlineAddFields"][] = "DATA3";
$tdataPMT_SAGAWA[".inlineAddFields"][] = "DATE4";

$tdataPMT_SAGAWA[".editFields"] = array();
$tdataPMT_SAGAWA[".editFields"][] = "DATA1";
$tdataPMT_SAGAWA[".editFields"][] = "DATA2";
$tdataPMT_SAGAWA[".editFields"][] = "DATA3";
$tdataPMT_SAGAWA[".editFields"][] = "DATE4";

$tdataPMT_SAGAWA[".inlineEditFields"] = array();
$tdataPMT_SAGAWA[".inlineEditFields"][] = "DATA1";
$tdataPMT_SAGAWA[".inlineEditFields"][] = "DATA2";
$tdataPMT_SAGAWA[".inlineEditFields"][] = "DATA3";
$tdataPMT_SAGAWA[".inlineEditFields"][] = "DATE4";

$tdataPMT_SAGAWA[".updateSelectedFields"] = array();
$tdataPMT_SAGAWA[".updateSelectedFields"][] = "DATA1";
$tdataPMT_SAGAWA[".updateSelectedFields"][] = "DATA2";
$tdataPMT_SAGAWA[".updateSelectedFields"][] = "DATA3";
$tdataPMT_SAGAWA[".updateSelectedFields"][] = "DATE4";


$tdataPMT_SAGAWA[".exportFields"] = array();
$tdataPMT_SAGAWA[".exportFields"][] = "DATA1";
$tdataPMT_SAGAWA[".exportFields"][] = "DATA2";
$tdataPMT_SAGAWA[".exportFields"][] = "DATA3";
$tdataPMT_SAGAWA[".exportFields"][] = "DATE4";

$tdataPMT_SAGAWA[".importFields"] = array();
$tdataPMT_SAGAWA[".importFields"][] = "DATA1";
$tdataPMT_SAGAWA[".importFields"][] = "DATA2";
$tdataPMT_SAGAWA[".importFields"][] = "DATA3";
$tdataPMT_SAGAWA[".importFields"][] = "DATE4";

$tdataPMT_SAGAWA[".printFields"] = array();
$tdataPMT_SAGAWA[".printFields"][] = "DATA1";
$tdataPMT_SAGAWA[".printFields"][] = "DATA2";
$tdataPMT_SAGAWA[".printFields"][] = "DATA3";
$tdataPMT_SAGAWA[".printFields"][] = "DATE4";

//	DATA1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DATA1";
	$fdata["GoodName"] = "DATA1";
	$fdata["ownerTable"] = "PMT_SAGAWA";
	$fdata["Label"] = GetFieldLabel("PMT_SAGAWA","DATA1");
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

		$fdata["strField"] = "DATA1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA1";

	
	
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




	$tdataPMT_SAGAWA["DATA1"] = $fdata;
//	DATA2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DATA2";
	$fdata["GoodName"] = "DATA2";
	$fdata["ownerTable"] = "PMT_SAGAWA";
	$fdata["Label"] = GetFieldLabel("PMT_SAGAWA","DATA2");
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

		$fdata["strField"] = "DATA2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA2";

	
	
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




	$tdataPMT_SAGAWA["DATA2"] = $fdata;
//	DATA3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DATA3";
	$fdata["GoodName"] = "DATA3";
	$fdata["ownerTable"] = "PMT_SAGAWA";
	$fdata["Label"] = GetFieldLabel("PMT_SAGAWA","DATA3");
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

		$fdata["strField"] = "DATA3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA3";

	
	
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




	$tdataPMT_SAGAWA["DATA3"] = $fdata;
//	DATE4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DATE4";
	$fdata["GoodName"] = "DATE4";
	$fdata["ownerTable"] = "PMT_SAGAWA";
	$fdata["Label"] = GetFieldLabel("PMT_SAGAWA","DATE4");
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

		$fdata["strField"] = "DATE4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE4";

	
	
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




	$tdataPMT_SAGAWA["DATE4"] = $fdata;


$tables_data["PMT_SAGAWA"]=&$tdataPMT_SAGAWA;
$field_labels["PMT_SAGAWA"] = &$fieldLabelsPMT_SAGAWA;
$fieldToolTips["PMT_SAGAWA"] = &$fieldToolTipsPMT_SAGAWA;
$placeHolders["PMT_SAGAWA"] = &$placeHoldersPMT_SAGAWA;
$page_titles["PMT_SAGAWA"] = &$pageTitlesPMT_SAGAWA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_SAGAWA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_SAGAWA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_SAGAWA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATA1,  	DATA2,  	DATA3,  	DATE4";
$proto0["m_strFrom"] = "FROM PMT_SAGAWA";
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
	"m_strName" => "DATA1",
	"m_strTable" => "PMT_SAGAWA",
	"m_srcTableName" => "PMT_SAGAWA"
));

$proto6["m_sql"] = "DATA1";
$proto6["m_srcTableName"] = "PMT_SAGAWA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA2",
	"m_strTable" => "PMT_SAGAWA",
	"m_srcTableName" => "PMT_SAGAWA"
));

$proto8["m_sql"] = "DATA2";
$proto8["m_srcTableName"] = "PMT_SAGAWA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA3",
	"m_strTable" => "PMT_SAGAWA",
	"m_srcTableName" => "PMT_SAGAWA"
));

$proto10["m_sql"] = "DATA3";
$proto10["m_srcTableName"] = "PMT_SAGAWA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE4",
	"m_strTable" => "PMT_SAGAWA",
	"m_srcTableName" => "PMT_SAGAWA"
));

$proto12["m_sql"] = "DATE4";
$proto12["m_srcTableName"] = "PMT_SAGAWA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "PMT_SAGAWA";
$proto15["m_srcTableName"] = "PMT_SAGAWA";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "DATA1";
$proto15["m_columns"][] = "DATA2";
$proto15["m_columns"][] = "DATA3";
$proto15["m_columns"][] = "DATE4";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "PMT_SAGAWA";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "PMT_SAGAWA";
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
$proto0["m_srcTableName"]="PMT_SAGAWA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_SAGAWA = createSqlQuery_PMT_SAGAWA();


	
						;

				

$tdataPMT_SAGAWA[".sqlquery"] = $queryData_PMT_SAGAWA;

$tableEvents["PMT_SAGAWA"] = new eventsBase;
$tdataPMT_SAGAWA[".hasEvents"] = false;

?>
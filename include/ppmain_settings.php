<?php
require_once(getabspath("classes/cipherer.php"));




$tdatappmain = array();
	$tdatappmain[".truncateText"] = true;
	$tdatappmain[".NumberOfChars"] = 80;
	$tdatappmain[".ShortName"] = "ppmain";
	$tdatappmain[".OwnerID"] = "";
	$tdatappmain[".OriginalTable"] = "ppmain";

//	field labels
$fieldLabelsppmain = array();
$fieldToolTipsppmain = array();
$pageTitlesppmain = array();
$placeHoldersppmain = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsppmain["Japanese"] = array();
	$fieldToolTipsppmain["Japanese"] = array();
	$placeHoldersppmain["Japanese"] = array();
	$pageTitlesppmain["Japanese"] = array();
	$fieldLabelsppmain["Japanese"]["ID"] = "ID";
	$fieldToolTipsppmain["Japanese"]["ID"] = "";
	$placeHoldersppmain["Japanese"]["ID"] = "";
	$fieldLabelsppmain["Japanese"]["but"] = "but";
	$fieldToolTipsppmain["Japanese"]["but"] = "";
	$placeHoldersppmain["Japanese"]["but"] = "";
	$fieldLabelsppmain["Japanese"]["Category"] = "Category";
	$fieldToolTipsppmain["Japanese"]["Category"] = "";
	$placeHoldersppmain["Japanese"]["Category"] = "";
	$fieldLabelsppmain["Japanese"]["Subcategory"] = "Subcategory";
	$fieldToolTipsppmain["Japanese"]["Subcategory"] = "";
	$placeHoldersppmain["Japanese"]["Subcategory"] = "";
	$fieldLabelsppmain["Japanese"]["Title"] = "Title";
	$fieldToolTipsppmain["Japanese"]["Title"] = "";
	$placeHoldersppmain["Japanese"]["Title"] = "";
	$fieldLabelsppmain["Japanese"]["Price"] = "Price";
	$fieldToolTipsppmain["Japanese"]["Price"] = "";
	$placeHoldersppmain["Japanese"]["Price"] = "";
	$fieldLabelsppmain["Japanese"]["Details"] = "Details";
	$fieldToolTipsppmain["Japanese"]["Details"] = "";
	$placeHoldersppmain["Japanese"]["Details"] = "";
	$fieldLabelsppmain["Japanese"]["Fullinfo"] = "Description";
	$fieldToolTipsppmain["Japanese"]["Fullinfo"] = "";
	$placeHoldersppmain["Japanese"]["Fullinfo"] = "";
	$fieldLabelsppmain["Japanese"]["Picture"] = "Picture";
	$fieldToolTipsppmain["Japanese"]["Picture"] = "";
	$placeHoldersppmain["Japanese"]["Picture"] = "";
	$fieldLabelsppmain["Japanese"]["UserID"] = "UserID";
	$fieldToolTipsppmain["Japanese"]["UserID"] = "";
	$placeHoldersppmain["Japanese"]["UserID"] = "";
	if (count($fieldToolTipsppmain["Japanese"]))
		$tdatappmain[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsppmain["English"] = array();
	$fieldToolTipsppmain["English"] = array();
	$placeHoldersppmain["English"] = array();
	$pageTitlesppmain["English"] = array();
	$fieldLabelsppmain["English"]["ID"] = "ID";
	$fieldToolTipsppmain["English"]["ID"] = "";
	$placeHoldersppmain["English"]["ID"] = "";
	$fieldLabelsppmain["English"]["but"] = "but";
	$fieldToolTipsppmain["English"]["but"] = "";
	$placeHoldersppmain["English"]["but"] = "";
	$fieldLabelsppmain["English"]["Category"] = "Category";
	$fieldToolTipsppmain["English"]["Category"] = "";
	$placeHoldersppmain["English"]["Category"] = "";
	$fieldLabelsppmain["English"]["Subcategory"] = "Subcategory";
	$fieldToolTipsppmain["English"]["Subcategory"] = "";
	$placeHoldersppmain["English"]["Subcategory"] = "";
	$fieldLabelsppmain["English"]["Title"] = "Title";
	$fieldToolTipsppmain["English"]["Title"] = "";
	$placeHoldersppmain["English"]["Title"] = "";
	$fieldLabelsppmain["English"]["Price"] = "Price";
	$fieldToolTipsppmain["English"]["Price"] = "";
	$placeHoldersppmain["English"]["Price"] = "";
	$fieldLabelsppmain["English"]["Details"] = "Details";
	$fieldToolTipsppmain["English"]["Details"] = "";
	$placeHoldersppmain["English"]["Details"] = "";
	$fieldLabelsppmain["English"]["Fullinfo"] = "Description";
	$fieldToolTipsppmain["English"]["Fullinfo"] = "";
	$placeHoldersppmain["English"]["Fullinfo"] = "";
	$fieldLabelsppmain["English"]["Picture"] = "Picture";
	$fieldToolTipsppmain["English"]["Picture"] = "";
	$placeHoldersppmain["English"]["Picture"] = "";
	$fieldLabelsppmain["English"]["UserID"] = "UserID";
	$fieldToolTipsppmain["English"]["UserID"] = "";
	$placeHoldersppmain["English"]["UserID"] = "";
	if (count($fieldToolTipsppmain["English"]))
		$tdatappmain[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsppmain[""] = array();
	$fieldToolTipsppmain[""] = array();
	$placeHoldersppmain[""] = array();
	$pageTitlesppmain[""] = array();
	if (count($fieldToolTipsppmain[""]))
		$tdatappmain[".isUseToolTips"] = true;
}





$tdatappmain[".shortTableName"] = "ppmain";
$tdatappmain[".nSecOptions"] = 0;
$tdatappmain[".recsPerRowList"] = 1;
$tdatappmain[".recsPerRowPrint"] = 1;
$tdatappmain[".mainTableOwnerID"] = "";
$tdatappmain[".moveNext"] = 1;
$tdatappmain[".entityType"] = 0;

$tdatappmain[".strOriginalTableName"] = "ppmain";

	



$tdatappmain[".showAddInPopup"] = false;

$tdatappmain[".showEditInPopup"] = false;

$tdatappmain[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatappmain[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatappmain[".fieldsForRegister"] = array();
	
$tdatappmain[".listAjax"] = false;

	$tdatappmain[".audit"] = false;

	$tdatappmain[".locking"] = false;



$tdatappmain[".list"] = true;



$tdatappmain[".reorderRecordsByHeader"] = true;



$tdatappmain[".view"] = true;


$tdatappmain[".exportTo"] = true;

$tdatappmain[".printFriendly"] = true;


$tdatappmain[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatappmain[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatappmain[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatappmain[".searchSaving"] = false;
//

$tdatappmain[".showSearchPanel"] = true;
		$tdatappmain[".flexibleSearch"] = true;

$tdatappmain[".isUseAjaxSuggest"] = true;




				

$tdatappmain[".ajaxCodeSnippetAdded"] = false;

$tdatappmain[".buttonsAdded"] = false;

$tdatappmain[".addPageEvents"] = false;

// use timepicker for search panel
$tdatappmain[".isUseTimeForSearch"] = false;



$tdatappmain[".badgeColor"] = "778899";


$tdatappmain[".allSearchFields"] = array();
$tdatappmain[".filterFields"] = array();
$tdatappmain[".requiredSearchFields"] = array();

$tdatappmain[".allSearchFields"][] = "Category";
	$tdatappmain[".allSearchFields"][] = "Subcategory";
	$tdatappmain[".allSearchFields"][] = "Title";
	$tdatappmain[".allSearchFields"][] = "Price";
	$tdatappmain[".allSearchFields"][] = "Details";
	
$tdatappmain[".filterFields"][] = "Category";
$tdatappmain[".filterFields"][] = "Subcategory";

$tdatappmain[".googleLikeFields"] = array();
$tdatappmain[".googleLikeFields"][] = "Category";
$tdatappmain[".googleLikeFields"][] = "Subcategory";
$tdatappmain[".googleLikeFields"][] = "Title";
$tdatappmain[".googleLikeFields"][] = "Price";
$tdatappmain[".googleLikeFields"][] = "Details";


$tdatappmain[".advSearchFields"] = array();
$tdatappmain[".advSearchFields"][] = "Category";
$tdatappmain[".advSearchFields"][] = "Subcategory";
$tdatappmain[".advSearchFields"][] = "Title";
$tdatappmain[".advSearchFields"][] = "Price";
$tdatappmain[".advSearchFields"][] = "Details";

$tdatappmain[".tableType"] = "list";

$tdatappmain[".printerPageOrientation"] = 0;
$tdatappmain[".nPrinterPageScale"] = 100;

$tdatappmain[".nPrinterSplitRecords"] = 40;

$tdatappmain[".nPrinterPDFSplitRecords"] = 40;



$tdatappmain[".geocodingEnabled"] = false;




$tdatappmain[".printGridLayout"] = 1;

$tdatappmain[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdatappmain[".pageSize"] = 20;

$tdatappmain[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatappmain[".strOrderBy"] = $tstrOrderBy;

$tdatappmain[".orderindexes"] = array();

$tdatappmain[".sqlHead"] = "select ID, ID AS but, Category, Subcategory, Title, Price, Details, Fullinfo, Picture, UserID";
$tdatappmain[".sqlFrom"] = "FROM ppmain";
$tdatappmain[".sqlWhereExpr"] = "";
$tdatappmain[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatappmain[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatappmain[".arrGroupsPerPage"] = $arrGPP;


$tableKeysppmain = array();
$tableKeysppmain[] = "ID";
$tdatappmain[".Keys"] = $tableKeysppmain;

$tdatappmain[".listFields"] = array();
$tdatappmain[".listFields"][] = "Price";
$tdatappmain[".listFields"][] = "but";
$tdatappmain[".listFields"][] = "Category";
$tdatappmain[".listFields"][] = "Subcategory";
$tdatappmain[".listFields"][] = "Title";
$tdatappmain[".listFields"][] = "Details";
$tdatappmain[".listFields"][] = "Picture";

$tdatappmain[".hideMobileList"] = array();


$tdatappmain[".viewFields"] = array();
$tdatappmain[".viewFields"][] = "Picture";
$tdatappmain[".viewFields"][] = "Category";
$tdatappmain[".viewFields"][] = "Subcategory";
$tdatappmain[".viewFields"][] = "but";
$tdatappmain[".viewFields"][] = "Title";
$tdatappmain[".viewFields"][] = "Price";
$tdatappmain[".viewFields"][] = "Details";
$tdatappmain[".viewFields"][] = "Fullinfo";

$tdatappmain[".addFields"] = array();

$tdatappmain[".masterListFields"] = array();

$tdatappmain[".inlineAddFields"] = array();

$tdatappmain[".editFields"] = array();

$tdatappmain[".inlineEditFields"] = array();

$tdatappmain[".updateSelectedFields"] = array();


$tdatappmain[".exportFields"] = array();
$tdatappmain[".exportFields"][] = "Price";
$tdatappmain[".exportFields"][] = "Category";
$tdatappmain[".exportFields"][] = "Subcategory";
$tdatappmain[".exportFields"][] = "Title";
$tdatappmain[".exportFields"][] = "Details";
$tdatappmain[".exportFields"][] = "Fullinfo";

$tdatappmain[".importFields"] = array();
$tdatappmain[".importFields"][] = "ID";
$tdatappmain[".importFields"][] = "but";
$tdatappmain[".importFields"][] = "Category";
$tdatappmain[".importFields"][] = "Subcategory";
$tdatappmain[".importFields"][] = "Title";
$tdatappmain[".importFields"][] = "Price";
$tdatappmain[".importFields"][] = "Details";
$tdatappmain[".importFields"][] = "Fullinfo";
$tdatappmain[".importFields"][] = "Picture";
$tdatappmain[".importFields"][] = "UserID";

$tdatappmain[".printFields"] = array();
$tdatappmain[".printFields"][] = "Price";
$tdatappmain[".printFields"][] = "Category";
$tdatappmain[".printFields"][] = "Subcategory";
$tdatappmain[".printFields"][] = "Title";
$tdatappmain[".printFields"][] = "Details";
$tdatappmain[".printFields"][] = "Fullinfo";
$tdatappmain[".printFields"][] = "Picture";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
			
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappmain["ID"] = $fdata;
//	but
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "but";
	$fdata["GoodName"] = "but";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","but");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappmain["but"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
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
	$edata["LookupTable"] = "ppcategory";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CategoryName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "CategoryName";

	
	$edata["LookupOrderBy"] = "CategoryName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
		$fdata["searchOptionsList"][] = "NOT Contains";
		$fdata["searchOptionsList"][] = "NOT Equals";
		$fdata["searchOptionsList"][] = "NOT Starts with";
		$fdata["searchOptionsList"][] = "NOT More than";
		$fdata["searchOptionsList"][] = "NOT Less than";
		$fdata["searchOptionsList"][] = "NOT Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

					$fdata["dependentFilterName"] = "Subcategory";
	$fdata["dependentFilters"] = array();
					$fdata["dependentFilters"][] = "Subcategory";
				;
;

	
	
//end of Filters settings


	$tdatappmain["Category"] = $fdata;
//	Subcategory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subcategory";
	$fdata["GoodName"] = "Subcategory";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Subcategory");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Subcategory";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subcategory";

	
	
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			$fdata["parentFilterField"] = "Category";
	$fdata["parentFilters"] = array();
					$fdata["parentFilters"][] = "Category";
				;
;
	
	
	
//end of Filters settings


	$tdatappmain["Subcategory"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Title";

	
	
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdatappmain["Title"] = $fdata;
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Price";

	
	
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdatappmain["Price"] = $fdata;
//	Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Details";
	$fdata["GoodName"] = "Details";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Details";

	
	
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

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 500;

	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdatappmain["Details"] = $fdata;
//	Fullinfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fullinfo";
	$fdata["GoodName"] = "Fullinfo";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Fullinfo");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fullinfo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fullinfo";

	
	
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

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 500;

	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappmain["Fullinfo"] = $fdata;
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","Picture");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Picture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Picture";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="files";

						$vdata["ImageWidth"] = 120;
	$vdata["ImageHeight"] = 120;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappmain["Picture"] = $fdata;
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppmain","UserID");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "UserID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserID";

	
	
			
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappmain["UserID"] = $fdata;


$tables_data["ppmain"]=&$tdatappmain;
$field_labels["ppmain"] = &$fieldLabelsppmain;
$fieldToolTips["ppmain"] = &$fieldToolTipsppmain;
$placeHolders["ppmain"] = &$placeHoldersppmain;
$page_titles["ppmain"] = &$pageTitlesppmain;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ppmain"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ppmain"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ppmain()
{
$proto4=array();
$proto4["m_strHead"] = "select";
$proto4["m_strFieldList"] = "ID, ID AS but, Category, Subcategory, Title, Price, Details, Fullinfo, Picture, UserID";
$proto4["m_strFrom"] = "FROM ppmain";
$proto4["m_strWhere"] = "";
$proto4["m_strOrderBy"] = "";
$proto4["m_strTail"] = "";
	
						;
			$proto4["cipherer"] = null;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto4["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto4["m_having"] = $obj;
$proto4["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto10["m_sql"] = "ID";
$proto10["m_srcTableName"] = "ppmain";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto4["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto12["m_sql"] = "ID";
$proto12["m_srcTableName"] = "ppmain";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "but";
$obj = new SQLFieldListItem($proto12);

$proto4["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto14["m_sql"] = "Category";
$proto14["m_srcTableName"] = "ppmain";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto4["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Subcategory",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto16["m_sql"] = "Subcategory";
$proto16["m_srcTableName"] = "ppmain";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto4["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto18["m_sql"] = "Title";
$proto18["m_srcTableName"] = "ppmain";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto4["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto20["m_sql"] = "Price";
$proto20["m_srcTableName"] = "ppmain";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto4["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Details",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto22["m_sql"] = "Details";
$proto22["m_srcTableName"] = "ppmain";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto4["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Fullinfo",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto24["m_sql"] = "Fullinfo";
$proto24["m_srcTableName"] = "ppmain";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto4["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto26["m_sql"] = "Picture";
$proto26["m_srcTableName"] = "ppmain";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto4["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppmain"
));

$proto28["m_sql"] = "UserID";
$proto28["m_srcTableName"] = "ppmain";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto4["m_fieldlist"][]=$obj;
$proto4["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "ppmain";
$proto31["m_srcTableName"] = "ppmain";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "Category";
$proto31["m_columns"][] = "Details";
$proto31["m_columns"][] = "Fullinfo";
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "Picture";
$proto31["m_columns"][] = "Price";
$proto31["m_columns"][] = "Subcategory";
$proto31["m_columns"][] = "Title";
$proto31["m_columns"][] = "UserID";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "ppmain";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "ppmain";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto4["m_fromlist"][]=$obj;
$proto4["m_groupby"] = array();
$proto4["m_orderby"] = array();
$proto4["m_srcTableName"]="ppmain";		
$obj = new SQLQuery($proto4);

	return $obj;
}
$queryData_ppmain = createSqlQuery_ppmain();


	
						;

										

$tdatappmain[".sqlquery"] = $queryData_ppmain;

include_once(getabspath("include/ppmain_events.php"));
$tableEvents["ppmain"] = new eventclass_ppmain;
$tdatappmain[".hasEvents"] = true;

?>
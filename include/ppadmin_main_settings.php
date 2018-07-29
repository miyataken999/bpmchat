<?php
require_once(getabspath("classes/cipherer.php"));




$tdatappadmin_main = array();
	$tdatappadmin_main[".truncateText"] = true;
	$tdatappadmin_main[".NumberOfChars"] = 80;
	$tdatappadmin_main[".ShortName"] = "ppadmin_main";
	$tdatappadmin_main[".OwnerID"] = "";
	$tdatappadmin_main[".OriginalTable"] = "ppmain";

//	field labels
$fieldLabelsppadmin_main = array();
$fieldToolTipsppadmin_main = array();
$pageTitlesppadmin_main = array();
$placeHoldersppadmin_main = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsppadmin_main["Japanese"] = array();
	$fieldToolTipsppadmin_main["Japanese"] = array();
	$placeHoldersppadmin_main["Japanese"] = array();
	$pageTitlesppadmin_main["Japanese"] = array();
	$fieldLabelsppadmin_main["Japanese"]["ID"] = "ID";
	$fieldToolTipsppadmin_main["Japanese"]["ID"] = "";
	$placeHoldersppadmin_main["Japanese"]["ID"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Category"] = "Category";
	$fieldToolTipsppadmin_main["Japanese"]["Category"] = "";
	$placeHoldersppadmin_main["Japanese"]["Category"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Subcategory"] = "Subcategory";
	$fieldToolTipsppadmin_main["Japanese"]["Subcategory"] = "";
	$placeHoldersppadmin_main["Japanese"]["Subcategory"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Title"] = "Title";
	$fieldToolTipsppadmin_main["Japanese"]["Title"] = "";
	$placeHoldersppadmin_main["Japanese"]["Title"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Price"] = "Price";
	$fieldToolTipsppadmin_main["Japanese"]["Price"] = "";
	$placeHoldersppadmin_main["Japanese"]["Price"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Details"] = "Details";
	$fieldToolTipsppadmin_main["Japanese"]["Details"] = "";
	$placeHoldersppadmin_main["Japanese"]["Details"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Fullinfo"] = "Description";
	$fieldToolTipsppadmin_main["Japanese"]["Fullinfo"] = "";
	$placeHoldersppadmin_main["Japanese"]["Fullinfo"] = "";
	$fieldLabelsppadmin_main["Japanese"]["Picture"] = "Picture";
	$fieldToolTipsppadmin_main["Japanese"]["Picture"] = "";
	$placeHoldersppadmin_main["Japanese"]["Picture"] = "";
	$fieldLabelsppadmin_main["Japanese"]["UserID"] = "UserID";
	$fieldToolTipsppadmin_main["Japanese"]["UserID"] = "";
	$placeHoldersppadmin_main["Japanese"]["UserID"] = "";
	if (count($fieldToolTipsppadmin_main["Japanese"]))
		$tdatappadmin_main[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsppadmin_main["English"] = array();
	$fieldToolTipsppadmin_main["English"] = array();
	$placeHoldersppadmin_main["English"] = array();
	$pageTitlesppadmin_main["English"] = array();
	$fieldLabelsppadmin_main["English"]["ID"] = "ID";
	$fieldToolTipsppadmin_main["English"]["ID"] = "";
	$placeHoldersppadmin_main["English"]["ID"] = "";
	$fieldLabelsppadmin_main["English"]["Category"] = "Category";
	$fieldToolTipsppadmin_main["English"]["Category"] = "";
	$placeHoldersppadmin_main["English"]["Category"] = "";
	$fieldLabelsppadmin_main["English"]["Subcategory"] = "Subcategory";
	$fieldToolTipsppadmin_main["English"]["Subcategory"] = "";
	$placeHoldersppadmin_main["English"]["Subcategory"] = "";
	$fieldLabelsppadmin_main["English"]["Title"] = "Title";
	$fieldToolTipsppadmin_main["English"]["Title"] = "";
	$placeHoldersppadmin_main["English"]["Title"] = "";
	$fieldLabelsppadmin_main["English"]["Price"] = "Price";
	$fieldToolTipsppadmin_main["English"]["Price"] = "";
	$placeHoldersppadmin_main["English"]["Price"] = "";
	$fieldLabelsppadmin_main["English"]["Details"] = "Details";
	$fieldToolTipsppadmin_main["English"]["Details"] = "";
	$placeHoldersppadmin_main["English"]["Details"] = "";
	$fieldLabelsppadmin_main["English"]["Fullinfo"] = "Description";
	$fieldToolTipsppadmin_main["English"]["Fullinfo"] = "";
	$placeHoldersppadmin_main["English"]["Fullinfo"] = "";
	$fieldLabelsppadmin_main["English"]["Picture"] = "Picture";
	$fieldToolTipsppadmin_main["English"]["Picture"] = "";
	$placeHoldersppadmin_main["English"]["Picture"] = "";
	$fieldLabelsppadmin_main["English"]["UserID"] = "UserID";
	$fieldToolTipsppadmin_main["English"]["UserID"] = "";
	$placeHoldersppadmin_main["English"]["UserID"] = "";
	if (count($fieldToolTipsppadmin_main["English"]))
		$tdatappadmin_main[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsppadmin_main[""] = array();
	$fieldToolTipsppadmin_main[""] = array();
	$placeHoldersppadmin_main[""] = array();
	$pageTitlesppadmin_main[""] = array();
	if (count($fieldToolTipsppadmin_main[""]))
		$tdatappadmin_main[".isUseToolTips"] = true;
}





$tdatappadmin_main[".shortTableName"] = "ppadmin_main";
$tdatappadmin_main[".nSecOptions"] = 0;
$tdatappadmin_main[".recsPerRowPrint"] = 1;
$tdatappadmin_main[".mainTableOwnerID"] = "";
$tdatappadmin_main[".moveNext"] = 1;
$tdatappadmin_main[".entityType"] = 1;

$tdatappadmin_main[".strOriginalTableName"] = "ppmain";

	



$tdatappadmin_main[".showAddInPopup"] = false;

$tdatappadmin_main[".showEditInPopup"] = false;

$tdatappadmin_main[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatappadmin_main[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatappadmin_main[".fieldsForRegister"] = array();
	
$tdatappadmin_main[".listAjax"] = false;

	$tdatappadmin_main[".audit"] = false;

	$tdatappadmin_main[".locking"] = false;

$tdatappadmin_main[".edit"] = true;
$tdatappadmin_main[".afterEditAction"] = 1;
$tdatappadmin_main[".closePopupAfterEdit"] = 1;
$tdatappadmin_main[".afterEditActionDetTable"] = "";

$tdatappadmin_main[".add"] = true;
$tdatappadmin_main[".afterAddAction"] = 1;
$tdatappadmin_main[".closePopupAfterAdd"] = 1;
$tdatappadmin_main[".afterAddActionDetTable"] = "";

$tdatappadmin_main[".list"] = true;



$tdatappadmin_main[".reorderRecordsByHeader"] = true;



$tdatappadmin_main[".view"] = true;


$tdatappadmin_main[".exportTo"] = true;

$tdatappadmin_main[".printFriendly"] = true;

$tdatappadmin_main[".delete"] = true;

$tdatappadmin_main[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatappadmin_main[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatappadmin_main[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatappadmin_main[".searchSaving"] = false;
//

$tdatappadmin_main[".showSearchPanel"] = true;
		$tdatappadmin_main[".flexibleSearch"] = true;

$tdatappadmin_main[".isUseAjaxSuggest"] = true;




				

$tdatappadmin_main[".ajaxCodeSnippetAdded"] = false;

$tdatappadmin_main[".buttonsAdded"] = false;

$tdatappadmin_main[".addPageEvents"] = false;

// use timepicker for search panel
$tdatappadmin_main[".isUseTimeForSearch"] = false;



$tdatappadmin_main[".badgeColor"] = "778899";


$tdatappadmin_main[".allSearchFields"] = array();
$tdatappadmin_main[".filterFields"] = array();
$tdatappadmin_main[".requiredSearchFields"] = array();

$tdatappadmin_main[".allSearchFields"][] = "Category";
	$tdatappadmin_main[".allSearchFields"][] = "Subcategory";
	$tdatappadmin_main[".allSearchFields"][] = "Title";
	$tdatappadmin_main[".allSearchFields"][] = "Price";
	$tdatappadmin_main[".allSearchFields"][] = "Details";
	

$tdatappadmin_main[".googleLikeFields"] = array();
$tdatappadmin_main[".googleLikeFields"][] = "ID";
$tdatappadmin_main[".googleLikeFields"][] = "Category";
$tdatappadmin_main[".googleLikeFields"][] = "Subcategory";
$tdatappadmin_main[".googleLikeFields"][] = "Title";
$tdatappadmin_main[".googleLikeFields"][] = "Price";
$tdatappadmin_main[".googleLikeFields"][] = "Details";
$tdatappadmin_main[".googleLikeFields"][] = "Fullinfo";
$tdatappadmin_main[".googleLikeFields"][] = "Picture";
$tdatappadmin_main[".googleLikeFields"][] = "UserID";


$tdatappadmin_main[".advSearchFields"] = array();
$tdatappadmin_main[".advSearchFields"][] = "Category";
$tdatappadmin_main[".advSearchFields"][] = "Subcategory";
$tdatappadmin_main[".advSearchFields"][] = "Title";
$tdatappadmin_main[".advSearchFields"][] = "Price";
$tdatappadmin_main[".advSearchFields"][] = "Details";

$tdatappadmin_main[".tableType"] = "list";

$tdatappadmin_main[".printerPageOrientation"] = 0;
$tdatappadmin_main[".nPrinterPageScale"] = 100;

$tdatappadmin_main[".nPrinterSplitRecords"] = 40;

$tdatappadmin_main[".nPrinterPDFSplitRecords"] = 40;



$tdatappadmin_main[".geocodingEnabled"] = false;





$tdatappadmin_main[".listGridLayout"] = 3;



$tdatappadmin_main[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatappadmin_main[".pageSize"] = 20;

$tdatappadmin_main[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatappadmin_main[".strOrderBy"] = $tstrOrderBy;

$tdatappadmin_main[".orderindexes"] = array();

$tdatappadmin_main[".sqlHead"] = "select ID, Category, Subcategory, Title, Price, Details, Fullinfo, Picture, UserID";
$tdatappadmin_main[".sqlFrom"] = "FROM ppmain";
$tdatappadmin_main[".sqlWhereExpr"] = "";
$tdatappadmin_main[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatappadmin_main[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatappadmin_main[".arrGroupsPerPage"] = $arrGPP;


$tableKeysppadmin_main = array();
$tableKeysppadmin_main[] = "ID";
$tdatappadmin_main[".Keys"] = $tableKeysppadmin_main;

$tdatappadmin_main[".listFields"] = array();
$tdatappadmin_main[".listFields"][] = "Price";
$tdatappadmin_main[".listFields"][] = "Category";
$tdatappadmin_main[".listFields"][] = "Subcategory";
$tdatappadmin_main[".listFields"][] = "Title";
$tdatappadmin_main[".listFields"][] = "Details";
$tdatappadmin_main[".listFields"][] = "Picture";

$tdatappadmin_main[".hideMobileList"] = array();


$tdatappadmin_main[".viewFields"] = array();
$tdatappadmin_main[".viewFields"][] = "Category";
$tdatappadmin_main[".viewFields"][] = "Subcategory";
$tdatappadmin_main[".viewFields"][] = "Title";
$tdatappadmin_main[".viewFields"][] = "Price";
$tdatappadmin_main[".viewFields"][] = "Details";
$tdatappadmin_main[".viewFields"][] = "Fullinfo";
$tdatappadmin_main[".viewFields"][] = "Picture";

$tdatappadmin_main[".addFields"] = array();
$tdatappadmin_main[".addFields"][] = "Category";
$tdatappadmin_main[".addFields"][] = "Subcategory";
$tdatappadmin_main[".addFields"][] = "Title";
$tdatappadmin_main[".addFields"][] = "Price";
$tdatappadmin_main[".addFields"][] = "Details";
$tdatappadmin_main[".addFields"][] = "Fullinfo";
$tdatappadmin_main[".addFields"][] = "Picture";

$tdatappadmin_main[".masterListFields"] = array();

$tdatappadmin_main[".inlineAddFields"] = array();

$tdatappadmin_main[".editFields"] = array();
$tdatappadmin_main[".editFields"][] = "Category";
$tdatappadmin_main[".editFields"][] = "Subcategory";
$tdatappadmin_main[".editFields"][] = "Title";
$tdatappadmin_main[".editFields"][] = "Price";
$tdatappadmin_main[".editFields"][] = "Details";
$tdatappadmin_main[".editFields"][] = "Fullinfo";
$tdatappadmin_main[".editFields"][] = "Picture";

$tdatappadmin_main[".inlineEditFields"] = array();

$tdatappadmin_main[".updateSelectedFields"] = array();
$tdatappadmin_main[".updateSelectedFields"][] = "Category";
$tdatappadmin_main[".updateSelectedFields"][] = "Subcategory";
$tdatappadmin_main[".updateSelectedFields"][] = "Title";
$tdatappadmin_main[".updateSelectedFields"][] = "Price";
$tdatappadmin_main[".updateSelectedFields"][] = "Details";
$tdatappadmin_main[".updateSelectedFields"][] = "Fullinfo";
$tdatappadmin_main[".updateSelectedFields"][] = "Picture";


$tdatappadmin_main[".exportFields"] = array();
$tdatappadmin_main[".exportFields"][] = "Category";
$tdatappadmin_main[".exportFields"][] = "Subcategory";
$tdatappadmin_main[".exportFields"][] = "Title";
$tdatappadmin_main[".exportFields"][] = "Price";
$tdatappadmin_main[".exportFields"][] = "Details";
$tdatappadmin_main[".exportFields"][] = "Fullinfo";

$tdatappadmin_main[".importFields"] = array();
$tdatappadmin_main[".importFields"][] = "ID";
$tdatappadmin_main[".importFields"][] = "Category";
$tdatappadmin_main[".importFields"][] = "Subcategory";
$tdatappadmin_main[".importFields"][] = "Title";
$tdatappadmin_main[".importFields"][] = "Price";
$tdatappadmin_main[".importFields"][] = "Details";
$tdatappadmin_main[".importFields"][] = "Fullinfo";
$tdatappadmin_main[".importFields"][] = "Picture";
$tdatappadmin_main[".importFields"][] = "UserID";

$tdatappadmin_main[".printFields"] = array();
$tdatappadmin_main[".printFields"][] = "Category";
$tdatappadmin_main[".printFields"][] = "Subcategory";
$tdatappadmin_main[".printFields"][] = "Title";
$tdatappadmin_main[".printFields"][] = "Price";
$tdatappadmin_main[".printFields"][] = "Details";
$tdatappadmin_main[".printFields"][] = "Fullinfo";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","ID");
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








	$tdatappadmin_main["ID"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	
	
		$edata["AllowToAdd"] = true;

	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Subcategory";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdatappadmin_main["Category"] = $fdata;
//	Subcategory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Subcategory";
	$fdata["GoodName"] = "Subcategory";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Subcategory");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ppsubcategory";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SubcategoryName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "SubcategoryName";

	
	$edata["LookupOrderBy"] = "SubcategoryName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Category", "lookup" => "Category" );

		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdatappadmin_main["Subcategory"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
		
		$edata["controlWidth"] = 300;

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

	// the end of search options settings




	$tdatappadmin_main["Title"] = $fdata;
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
		
		$edata["controlWidth"] = 100;

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

	// the end of search options settings




	$tdatappadmin_main["Price"] = $fdata;
//	Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Details";
	$fdata["GoodName"] = "Details";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 400;

	
	
	
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

	// the end of search options settings




	$tdatappadmin_main["Details"] = $fdata;
//	Fullinfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Fullinfo";
	$fdata["GoodName"] = "Fullinfo";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Fullinfo");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 400;

	
	
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatappadmin_main["Fullinfo"] = $fdata;
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","Picture");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Picture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Picture";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
		$vdata["LinkPrefix"] ="files";

						$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
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








	$tdatappadmin_main["Picture"] = $fdata;
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "ppmain";
	$fdata["Label"] = GetFieldLabel("ppadmin_main","UserID");
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








	$tdatappadmin_main["UserID"] = $fdata;


$tables_data["ppadmin main"]=&$tdatappadmin_main;
$field_labels["ppadmin_main"] = &$fieldLabelsppadmin_main;
$fieldToolTips["ppadmin_main"] = &$fieldToolTipsppadmin_main;
$placeHolders["ppadmin_main"] = &$placeHoldersppadmin_main;
$page_titles["ppadmin_main"] = &$pageTitlesppadmin_main;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ppadmin main"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ppadmin main"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ppadmin_main()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ID, Category, Subcategory, Title, Price, Details, Fullinfo, Picture, UserID";
$proto0["m_strFrom"] = "FROM ppmain";
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
	"m_strName" => "ID",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "ppadmin main";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto8["m_sql"] = "Category";
$proto8["m_srcTableName"] = "ppadmin main";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Subcategory",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto10["m_sql"] = "Subcategory";
$proto10["m_srcTableName"] = "ppadmin main";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto12["m_sql"] = "Title";
$proto12["m_srcTableName"] = "ppadmin main";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto14["m_sql"] = "Price";
$proto14["m_srcTableName"] = "ppadmin main";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Details",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto16["m_sql"] = "Details";
$proto16["m_srcTableName"] = "ppadmin main";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Fullinfo",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto18["m_sql"] = "Fullinfo";
$proto18["m_srcTableName"] = "ppadmin main";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto20["m_sql"] = "Picture";
$proto20["m_srcTableName"] = "ppadmin main";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "ppmain",
	"m_srcTableName" => "ppadmin main"
));

$proto22["m_sql"] = "UserID";
$proto22["m_srcTableName"] = "ppadmin main";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "ppmain";
$proto25["m_srcTableName"] = "ppadmin main";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Category";
$proto25["m_columns"][] = "Details";
$proto25["m_columns"][] = "Fullinfo";
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "Picture";
$proto25["m_columns"][] = "Price";
$proto25["m_columns"][] = "Subcategory";
$proto25["m_columns"][] = "Title";
$proto25["m_columns"][] = "UserID";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "ppmain";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "ppadmin main";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ppadmin main";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ppadmin_main = createSqlQuery_ppadmin_main();


	
						;

									

$tdatappadmin_main[".sqlquery"] = $queryData_ppadmin_main;

$tableEvents["ppadmin main"] = new eventsBase;
$tdatappadmin_main[".hasEvents"] = false;

?>
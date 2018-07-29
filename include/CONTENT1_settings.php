<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT1 = array();
	$tdataCONTENT1[".truncateText"] = true;
	$tdataCONTENT1[".NumberOfChars"] = 20;
	$tdataCONTENT1[".ShortName"] = "CONTENT1";
	$tdataCONTENT1[".OwnerID"] = "";
	$tdataCONTENT1[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT1 = array();
$fieldToolTipsCONTENT1 = array();
$pageTitlesCONTENT1 = array();
$placeHoldersCONTENT1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT1["Japanese"] = array();
	$fieldToolTipsCONTENT1["Japanese"] = array();
	$placeHoldersCONTENT1["Japanese"] = array();
	$pageTitlesCONTENT1["Japanese"] = array();
	$fieldLabelsCONTENT1["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT1["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT1["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT1["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT1["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT1["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT1["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT1["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT1["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT1["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT1["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT1["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT1["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT1["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT1["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT1["Japanese"]))
		$tdataCONTENT1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT1["English"] = array();
	$fieldToolTipsCONTENT1["English"] = array();
	$placeHoldersCONTENT1["English"] = array();
	$pageTitlesCONTENT1["English"] = array();
	$fieldLabelsCONTENT1["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT1["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT1["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT1["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT1["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT1["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT1["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT1["English"]["CON_ID"] = "";
	$placeHoldersCONTENT1["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT1["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT1["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT1["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT1["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT1["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT1["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT1["English"]))
		$tdataCONTENT1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT1[""] = array();
	$fieldToolTipsCONTENT1[""] = array();
	$placeHoldersCONTENT1[""] = array();
	$pageTitlesCONTENT1[""] = array();
	if (count($fieldToolTipsCONTENT1[""]))
		$tdataCONTENT1[".isUseToolTips"] = true;
}


	$tdataCONTENT1[".NCSearch"] = true;



$tdataCONTENT1[".shortTableName"] = "CONTENT1";
$tdataCONTENT1[".nSecOptions"] = 0;
$tdataCONTENT1[".recsPerRowPrint"] = 1;
$tdataCONTENT1[".mainTableOwnerID"] = "";
$tdataCONTENT1[".moveNext"] = 0;
$tdataCONTENT1[".entityType"] = 1;

$tdataCONTENT1[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT1[".showAddInPopup"] = false;

$tdataCONTENT1[".showEditInPopup"] = false;

$tdataCONTENT1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT1[".fieldsForRegister"] = array();
	
$tdataCONTENT1[".listAjax"] = false;

	$tdataCONTENT1[".audit"] = true;

	$tdataCONTENT1[".locking"] = false;

$tdataCONTENT1[".edit"] = true;
$tdataCONTENT1[".afterEditAction"] = 1;
$tdataCONTENT1[".closePopupAfterEdit"] = 1;
$tdataCONTENT1[".afterEditActionDetTable"] = "";

$tdataCONTENT1[".add"] = true;
$tdataCONTENT1[".afterAddAction"] = 1;
$tdataCONTENT1[".closePopupAfterAdd"] = 1;
$tdataCONTENT1[".afterAddActionDetTable"] = "";

$tdataCONTENT1[".list"] = true;

$tdataCONTENT1[".inlineEdit"] = true;


$tdataCONTENT1[".reorderRecordsByHeader"] = true;
$tdataCONTENT1[".createSortByDropdown"] = true;
$tdataCONTENT1[".strSortControlSettingsJSON"] = "";



$tdataCONTENT1[".inlineAdd"] = true;
$tdataCONTENT1[".view"] = true;

$tdataCONTENT1[".import"] = true;

$tdataCONTENT1[".exportTo"] = true;

$tdataCONTENT1[".printFriendly"] = true;

$tdataCONTENT1[".delete"] = true;

$tdataCONTENT1[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT1[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT1[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT1[".searchSaving"] = false;
//

$tdataCONTENT1[".showSearchPanel"] = true;
		$tdataCONTENT1[".flexibleSearch"] = true;

$tdataCONTENT1[".isUseAjaxSuggest"] = true;

$tdataCONTENT1[".rowHighlite"] = true;



				

$tdataCONTENT1[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT1[".buttonsAdded"] = false;

$tdataCONTENT1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT1[".isUseTimeForSearch"] = false;





$tdataCONTENT1[".allSearchFields"] = array();
$tdataCONTENT1[".filterFields"] = array();
$tdataCONTENT1[".requiredSearchFields"] = array();

$tdataCONTENT1[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT1[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT1[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT1[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT1[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT1[".googleLikeFields"] = array();
$tdataCONTENT1[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT1[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT1[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT1[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT1[".advSearchFields"] = array();
$tdataCONTENT1[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT1[".advSearchFields"][] = "CON_ID";
$tdataCONTENT1[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT1[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT1[".tableType"] = "list";

$tdataCONTENT1[".printerPageOrientation"] = 0;
$tdataCONTENT1[".nPrinterPageScale"] = 100;

$tdataCONTENT1[".nPrinterSplitRecords"] = 40;

$tdataCONTENT1[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT1[".geocodingEnabled"] = false;





$tdataCONTENT1[".listGridLayout"] = 3;


$tdataCONTENT1[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT1[".pageSize"] = 20;

$tdataCONTENT1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT1[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT1[".orderindexes"] = array();

$tdataCONTENT1[".sqlHead"] = "SELECT CON_CATEGORY,  	CON_PARENT,  	CON_ID,  	CON_LANG,  	CON_VALUE";
$tdataCONTENT1[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT1[".sqlWhereExpr"] = "CON_CATEGORY = 'TAS_TITLE'";
$tdataCONTENT1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT1[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT1[".highlightSearchResults"] = true;

$tableKeysCONTENT1 = array();
$tableKeysCONTENT1[] = "CON_CATEGORY";
$tableKeysCONTENT1[] = "CON_PARENT";
$tableKeysCONTENT1[] = "CON_ID";
$tableKeysCONTENT1[] = "CON_LANG";
$tdataCONTENT1[".Keys"] = $tableKeysCONTENT1;

$tdataCONTENT1[".listFields"] = array();
$tdataCONTENT1[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".listFields"][] = "CON_PARENT";
$tdataCONTENT1[".listFields"][] = "CON_ID";
$tdataCONTENT1[".listFields"][] = "CON_LANG";
$tdataCONTENT1[".listFields"][] = "CON_VALUE";

$tdataCONTENT1[".hideMobileList"] = array();


$tdataCONTENT1[".viewFields"] = array();
$tdataCONTENT1[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".viewFields"][] = "CON_PARENT";
$tdataCONTENT1[".viewFields"][] = "CON_ID";
$tdataCONTENT1[".viewFields"][] = "CON_LANG";
$tdataCONTENT1[".viewFields"][] = "CON_VALUE";

$tdataCONTENT1[".addFields"] = array();
$tdataCONTENT1[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".addFields"][] = "CON_PARENT";
$tdataCONTENT1[".addFields"][] = "CON_ID";
$tdataCONTENT1[".addFields"][] = "CON_LANG";
$tdataCONTENT1[".addFields"][] = "CON_VALUE";

$tdataCONTENT1[".masterListFields"] = array();
$tdataCONTENT1[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT1[".masterListFields"][] = "CON_ID";
$tdataCONTENT1[".masterListFields"][] = "CON_LANG";
$tdataCONTENT1[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT1[".inlineAddFields"] = array();
$tdataCONTENT1[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT1[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT1[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT1[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT1[".editFields"] = array();
$tdataCONTENT1[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".editFields"][] = "CON_PARENT";
$tdataCONTENT1[".editFields"][] = "CON_ID";
$tdataCONTENT1[".editFields"][] = "CON_LANG";
$tdataCONTENT1[".editFields"][] = "CON_VALUE";

$tdataCONTENT1[".inlineEditFields"] = array();
$tdataCONTENT1[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT1[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT1[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT1[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT1[".updateSelectedFields"] = array();
$tdataCONTENT1[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT1[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT1[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT1[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT1[".exportFields"] = array();
$tdataCONTENT1[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".exportFields"][] = "CON_PARENT";
$tdataCONTENT1[".exportFields"][] = "CON_ID";
$tdataCONTENT1[".exportFields"][] = "CON_LANG";
$tdataCONTENT1[".exportFields"][] = "CON_VALUE";

$tdataCONTENT1[".importFields"] = array();
$tdataCONTENT1[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".importFields"][] = "CON_PARENT";
$tdataCONTENT1[".importFields"][] = "CON_ID";
$tdataCONTENT1[".importFields"][] = "CON_LANG";
$tdataCONTENT1[".importFields"][] = "CON_VALUE";

$tdataCONTENT1[".printFields"] = array();
$tdataCONTENT1[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT1[".printFields"][] = "CON_PARENT";
$tdataCONTENT1[".printFields"][] = "CON_ID";
$tdataCONTENT1[".printFields"][] = "CON_LANG";
$tdataCONTENT1[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT1","CON_CATEGORY");
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

		$fdata["strField"] = "CON_CATEGORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_CATEGORY";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataCONTENT1["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT1","CON_PARENT");
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

		$fdata["strField"] = "CON_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_PARENT";

	
	
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




	$tdataCONTENT1["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT1","CON_ID");
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

		$fdata["strField"] = "CON_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_ID";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdataCONTENT1["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT1","CON_LANG");
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

		$fdata["strField"] = "CON_LANG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_LANG";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataCONTENT1["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT1","CON_VALUE");
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

		$fdata["strField"] = "CON_VALUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_VALUE";

	
	
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




	$tdataCONTENT1["CON_VALUE"] = $fdata;


$tables_data["CONTENT1"]=&$tdataCONTENT1;
$field_labels["CONTENT1"] = &$fieldLabelsCONTENT1;
$fieldToolTips["CONTENT1"] = &$fieldToolTipsCONTENT1;
$placeHolders["CONTENT1"] = &$placeHoldersCONTENT1;
$page_titles["CONTENT1"] = &$pageTitlesCONTENT1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CON_CATEGORY,  	CON_PARENT,  	CON_ID,  	CON_LANG,  	CON_VALUE";
$proto0["m_strFrom"] = "FROM CONTENT";
$proto0["m_strWhere"] = "CON_CATEGORY = 'TAS_TITLE'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CON_CATEGORY = 'TAS_TITLE'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CON_CATEGORY",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'TAS_TITLE'";
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
	"m_strName" => "CON_CATEGORY",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT1"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT1"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT1"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT1"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT1"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "CON_CATEGORY";
$proto17["m_columns"][] = "CON_PARENT";
$proto17["m_columns"][] = "CON_ID";
$proto17["m_columns"][] = "CON_LANG";
$proto17["m_columns"][] = "CON_VALUE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "CONTENT";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "CONTENT1";
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
$proto0["m_srcTableName"]="CONTENT1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT1 = createSqlQuery_CONTENT1();


	
						;

					

$tdataCONTENT1[".sqlquery"] = $queryData_CONTENT1;

$tableEvents["CONTENT1"] = new eventsBase;
$tdataCONTENT1[".hasEvents"] = false;

?>
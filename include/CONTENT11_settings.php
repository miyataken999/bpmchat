<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT11 = array();
	$tdataCONTENT11[".truncateText"] = true;
	$tdataCONTENT11[".NumberOfChars"] = 20;
	$tdataCONTENT11[".ShortName"] = "CONTENT11";
	$tdataCONTENT11[".OwnerID"] = "";
	$tdataCONTENT11[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT11 = array();
$fieldToolTipsCONTENT11 = array();
$pageTitlesCONTENT11 = array();
$placeHoldersCONTENT11 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT11["Japanese"] = array();
	$fieldToolTipsCONTENT11["Japanese"] = array();
	$placeHoldersCONTENT11["Japanese"] = array();
	$pageTitlesCONTENT11["Japanese"] = array();
	$fieldLabelsCONTENT11["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT11["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT11["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT11["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT11["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT11["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT11["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT11["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT11["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT11["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT11["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT11["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT11["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT11["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT11["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT11["Japanese"]))
		$tdataCONTENT11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT11["English"] = array();
	$fieldToolTipsCONTENT11["English"] = array();
	$placeHoldersCONTENT11["English"] = array();
	$pageTitlesCONTENT11["English"] = array();
	$fieldLabelsCONTENT11["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT11["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT11["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT11["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT11["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT11["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT11["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT11["English"]["CON_ID"] = "";
	$placeHoldersCONTENT11["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT11["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT11["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT11["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT11["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT11["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT11["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT11["English"]))
		$tdataCONTENT11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT11[""] = array();
	$fieldToolTipsCONTENT11[""] = array();
	$placeHoldersCONTENT11[""] = array();
	$pageTitlesCONTENT11[""] = array();
	if (count($fieldToolTipsCONTENT11[""]))
		$tdataCONTENT11[".isUseToolTips"] = true;
}


	$tdataCONTENT11[".NCSearch"] = true;



$tdataCONTENT11[".shortTableName"] = "CONTENT11";
$tdataCONTENT11[".nSecOptions"] = 0;
$tdataCONTENT11[".recsPerRowPrint"] = 1;
$tdataCONTENT11[".mainTableOwnerID"] = "";
$tdataCONTENT11[".moveNext"] = 0;
$tdataCONTENT11[".entityType"] = 1;

$tdataCONTENT11[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT11[".showAddInPopup"] = false;

$tdataCONTENT11[".showEditInPopup"] = false;

$tdataCONTENT11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT11[".fieldsForRegister"] = array();
	
$tdataCONTENT11[".listAjax"] = false;

	$tdataCONTENT11[".audit"] = true;

	$tdataCONTENT11[".locking"] = false;

$tdataCONTENT11[".edit"] = true;
$tdataCONTENT11[".afterEditAction"] = 1;
$tdataCONTENT11[".closePopupAfterEdit"] = 1;
$tdataCONTENT11[".afterEditActionDetTable"] = "";

$tdataCONTENT11[".add"] = true;
$tdataCONTENT11[".afterAddAction"] = 1;
$tdataCONTENT11[".closePopupAfterAdd"] = 1;
$tdataCONTENT11[".afterAddActionDetTable"] = "";

$tdataCONTENT11[".list"] = true;

$tdataCONTENT11[".inlineEdit"] = true;


$tdataCONTENT11[".reorderRecordsByHeader"] = true;
$tdataCONTENT11[".createSortByDropdown"] = true;
$tdataCONTENT11[".strSortControlSettingsJSON"] = "";



$tdataCONTENT11[".inlineAdd"] = true;
$tdataCONTENT11[".view"] = true;

$tdataCONTENT11[".import"] = true;

$tdataCONTENT11[".exportTo"] = true;

$tdataCONTENT11[".printFriendly"] = true;

$tdataCONTENT11[".delete"] = true;

$tdataCONTENT11[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT11[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT11[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT11[".searchSaving"] = false;
//

$tdataCONTENT11[".showSearchPanel"] = true;
		$tdataCONTENT11[".flexibleSearch"] = true;

$tdataCONTENT11[".isUseAjaxSuggest"] = true;

$tdataCONTENT11[".rowHighlite"] = true;



				

$tdataCONTENT11[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT11[".buttonsAdded"] = false;

$tdataCONTENT11[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT11[".isUseTimeForSearch"] = false;





$tdataCONTENT11[".allSearchFields"] = array();
$tdataCONTENT11[".filterFields"] = array();
$tdataCONTENT11[".requiredSearchFields"] = array();

$tdataCONTENT11[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT11[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT11[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT11[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT11[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT11[".googleLikeFields"] = array();
$tdataCONTENT11[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT11[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT11[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT11[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT11[".advSearchFields"] = array();
$tdataCONTENT11[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT11[".advSearchFields"][] = "CON_ID";
$tdataCONTENT11[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT11[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT11[".tableType"] = "list";

$tdataCONTENT11[".printerPageOrientation"] = 0;
$tdataCONTENT11[".nPrinterPageScale"] = 100;

$tdataCONTENT11[".nPrinterSplitRecords"] = 40;

$tdataCONTENT11[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT11[".geocodingEnabled"] = false;





$tdataCONTENT11[".listGridLayout"] = 3;


$tdataCONTENT11[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT11[".pageSize"] = 20;

$tdataCONTENT11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT11[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT11[".orderindexes"] = array();

$tdataCONTENT11[".sqlHead"] = "SELECT CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$tdataCONTENT11[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT11[".sqlWhereExpr"] = "(CON_CATEGORY = 'TAS_TITLE')";
$tdataCONTENT11[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT11[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT11[".highlightSearchResults"] = true;

$tableKeysCONTENT11 = array();
$tableKeysCONTENT11[] = "CON_CATEGORY";
$tableKeysCONTENT11[] = "CON_PARENT";
$tableKeysCONTENT11[] = "CON_ID";
$tableKeysCONTENT11[] = "CON_LANG";
$tdataCONTENT11[".Keys"] = $tableKeysCONTENT11;

$tdataCONTENT11[".listFields"] = array();
$tdataCONTENT11[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".listFields"][] = "CON_PARENT";
$tdataCONTENT11[".listFields"][] = "CON_ID";
$tdataCONTENT11[".listFields"][] = "CON_LANG";
$tdataCONTENT11[".listFields"][] = "CON_VALUE";

$tdataCONTENT11[".hideMobileList"] = array();


$tdataCONTENT11[".viewFields"] = array();
$tdataCONTENT11[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".viewFields"][] = "CON_PARENT";
$tdataCONTENT11[".viewFields"][] = "CON_ID";
$tdataCONTENT11[".viewFields"][] = "CON_LANG";
$tdataCONTENT11[".viewFields"][] = "CON_VALUE";

$tdataCONTENT11[".addFields"] = array();
$tdataCONTENT11[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".addFields"][] = "CON_PARENT";
$tdataCONTENT11[".addFields"][] = "CON_ID";
$tdataCONTENT11[".addFields"][] = "CON_LANG";
$tdataCONTENT11[".addFields"][] = "CON_VALUE";

$tdataCONTENT11[".masterListFields"] = array();
$tdataCONTENT11[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT11[".masterListFields"][] = "CON_ID";
$tdataCONTENT11[".masterListFields"][] = "CON_LANG";
$tdataCONTENT11[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT11[".inlineAddFields"] = array();
$tdataCONTENT11[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT11[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT11[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT11[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT11[".editFields"] = array();
$tdataCONTENT11[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".editFields"][] = "CON_PARENT";
$tdataCONTENT11[".editFields"][] = "CON_ID";
$tdataCONTENT11[".editFields"][] = "CON_LANG";
$tdataCONTENT11[".editFields"][] = "CON_VALUE";

$tdataCONTENT11[".inlineEditFields"] = array();
$tdataCONTENT11[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT11[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT11[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT11[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT11[".updateSelectedFields"] = array();
$tdataCONTENT11[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT11[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT11[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT11[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT11[".exportFields"] = array();
$tdataCONTENT11[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".exportFields"][] = "CON_PARENT";
$tdataCONTENT11[".exportFields"][] = "CON_ID";
$tdataCONTENT11[".exportFields"][] = "CON_LANG";
$tdataCONTENT11[".exportFields"][] = "CON_VALUE";

$tdataCONTENT11[".importFields"] = array();
$tdataCONTENT11[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".importFields"][] = "CON_PARENT";
$tdataCONTENT11[".importFields"][] = "CON_ID";
$tdataCONTENT11[".importFields"][] = "CON_LANG";
$tdataCONTENT11[".importFields"][] = "CON_VALUE";

$tdataCONTENT11[".printFields"] = array();
$tdataCONTENT11[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT11[".printFields"][] = "CON_PARENT";
$tdataCONTENT11[".printFields"][] = "CON_ID";
$tdataCONTENT11[".printFields"][] = "CON_LANG";
$tdataCONTENT11[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT11","CON_CATEGORY");
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




	$tdataCONTENT11["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT11","CON_PARENT");
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




	$tdataCONTENT11["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT11","CON_ID");
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




	$tdataCONTENT11["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT11","CON_LANG");
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




	$tdataCONTENT11["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT11","CON_VALUE");
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




	$tdataCONTENT11["CON_VALUE"] = $fdata;


$tables_data["CONTENT11"]=&$tdataCONTENT11;
$field_labels["CONTENT11"] = &$fieldLabelsCONTENT11;
$fieldToolTips["CONTENT11"] = &$fieldToolTipsCONTENT11;
$placeHolders["CONTENT11"] = &$placeHoldersCONTENT11;
$page_titles["CONTENT11"] = &$pageTitlesCONTENT11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$proto0["m_strFrom"] = "FROM CONTENT";
$proto0["m_strWhere"] = "(CON_CATEGORY = 'TAS_TITLE')";
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
	"m_srcTableName" => "CONTENT11"
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
	"m_srcTableName" => "CONTENT11"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT11"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT11"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT11"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT11"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT11";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT11";
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
$proto16["m_srcTableName"] = "CONTENT11";
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
$proto0["m_srcTableName"]="CONTENT11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT11 = createSqlQuery_CONTENT11();


	
						;

					

$tdataCONTENT11[".sqlquery"] = $queryData_CONTENT11;

$tableEvents["CONTENT11"] = new eventsBase;
$tdataCONTENT11[".hasEvents"] = false;

?>
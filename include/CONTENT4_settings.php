<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT4 = array();
	$tdataCONTENT4[".truncateText"] = true;
	$tdataCONTENT4[".NumberOfChars"] = 20;
	$tdataCONTENT4[".ShortName"] = "CONTENT4";
	$tdataCONTENT4[".OwnerID"] = "";
	$tdataCONTENT4[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT4 = array();
$fieldToolTipsCONTENT4 = array();
$pageTitlesCONTENT4 = array();
$placeHoldersCONTENT4 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT4["Japanese"] = array();
	$fieldToolTipsCONTENT4["Japanese"] = array();
	$placeHoldersCONTENT4["Japanese"] = array();
	$pageTitlesCONTENT4["Japanese"] = array();
	$fieldLabelsCONTENT4["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT4["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT4["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT4["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT4["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT4["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT4["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT4["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT4["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT4["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT4["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT4["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT4["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT4["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT4["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT4["Japanese"]))
		$tdataCONTENT4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT4["English"] = array();
	$fieldToolTipsCONTENT4["English"] = array();
	$placeHoldersCONTENT4["English"] = array();
	$pageTitlesCONTENT4["English"] = array();
	$fieldLabelsCONTENT4["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT4["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT4["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT4["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT4["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT4["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT4["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT4["English"]["CON_ID"] = "";
	$placeHoldersCONTENT4["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT4["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT4["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT4["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT4["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT4["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT4["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT4["English"]))
		$tdataCONTENT4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT4[""] = array();
	$fieldToolTipsCONTENT4[""] = array();
	$placeHoldersCONTENT4[""] = array();
	$pageTitlesCONTENT4[""] = array();
	if (count($fieldToolTipsCONTENT4[""]))
		$tdataCONTENT4[".isUseToolTips"] = true;
}


	$tdataCONTENT4[".NCSearch"] = true;



$tdataCONTENT4[".shortTableName"] = "CONTENT4";
$tdataCONTENT4[".nSecOptions"] = 0;
$tdataCONTENT4[".recsPerRowPrint"] = 1;
$tdataCONTENT4[".mainTableOwnerID"] = "";
$tdataCONTENT4[".moveNext"] = 0;
$tdataCONTENT4[".entityType"] = 1;

$tdataCONTENT4[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT4[".showAddInPopup"] = false;

$tdataCONTENT4[".showEditInPopup"] = false;

$tdataCONTENT4[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT4[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT4[".fieldsForRegister"] = array();
	
$tdataCONTENT4[".listAjax"] = false;

	$tdataCONTENT4[".audit"] = true;

	$tdataCONTENT4[".locking"] = false;

$tdataCONTENT4[".edit"] = true;
$tdataCONTENT4[".afterEditAction"] = 1;
$tdataCONTENT4[".closePopupAfterEdit"] = 1;
$tdataCONTENT4[".afterEditActionDetTable"] = "";

$tdataCONTENT4[".add"] = true;
$tdataCONTENT4[".afterAddAction"] = 1;
$tdataCONTENT4[".closePopupAfterAdd"] = 1;
$tdataCONTENT4[".afterAddActionDetTable"] = "";

$tdataCONTENT4[".list"] = true;

$tdataCONTENT4[".inlineEdit"] = true;


$tdataCONTENT4[".reorderRecordsByHeader"] = true;
$tdataCONTENT4[".createSortByDropdown"] = true;
$tdataCONTENT4[".strSortControlSettingsJSON"] = "";



$tdataCONTENT4[".inlineAdd"] = true;
$tdataCONTENT4[".view"] = true;

$tdataCONTENT4[".import"] = true;

$tdataCONTENT4[".exportTo"] = true;

$tdataCONTENT4[".printFriendly"] = true;

$tdataCONTENT4[".delete"] = true;

$tdataCONTENT4[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT4[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT4[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT4[".searchSaving"] = false;
//

$tdataCONTENT4[".showSearchPanel"] = true;
		$tdataCONTENT4[".flexibleSearch"] = true;

$tdataCONTENT4[".isUseAjaxSuggest"] = true;

$tdataCONTENT4[".rowHighlite"] = true;



				

$tdataCONTENT4[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT4[".buttonsAdded"] = false;

$tdataCONTENT4[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT4[".isUseTimeForSearch"] = false;





$tdataCONTENT4[".allSearchFields"] = array();
$tdataCONTENT4[".filterFields"] = array();
$tdataCONTENT4[".requiredSearchFields"] = array();

$tdataCONTENT4[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT4[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT4[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT4[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT4[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT4[".googleLikeFields"] = array();
$tdataCONTENT4[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT4[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT4[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT4[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT4[".advSearchFields"] = array();
$tdataCONTENT4[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT4[".advSearchFields"][] = "CON_ID";
$tdataCONTENT4[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT4[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT4[".tableType"] = "list";

$tdataCONTENT4[".printerPageOrientation"] = 0;
$tdataCONTENT4[".nPrinterPageScale"] = 100;

$tdataCONTENT4[".nPrinterSplitRecords"] = 40;

$tdataCONTENT4[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT4[".geocodingEnabled"] = false;





$tdataCONTENT4[".listGridLayout"] = 3;


$tdataCONTENT4[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT4[".pageSize"] = 20;

$tdataCONTENT4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT4[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT4[".orderindexes"] = array();

$tdataCONTENT4[".sqlHead"] = "SELECT CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$tdataCONTENT4[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT4[".sqlWhereExpr"] = "(CON_CATEGORY = 'TAS_TITLE')";
$tdataCONTENT4[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT4[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT4[".highlightSearchResults"] = true;

$tableKeysCONTENT4 = array();
$tableKeysCONTENT4[] = "CON_CATEGORY";
$tableKeysCONTENT4[] = "CON_PARENT";
$tableKeysCONTENT4[] = "CON_ID";
$tableKeysCONTENT4[] = "CON_LANG";
$tdataCONTENT4[".Keys"] = $tableKeysCONTENT4;

$tdataCONTENT4[".listFields"] = array();
$tdataCONTENT4[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".listFields"][] = "CON_PARENT";
$tdataCONTENT4[".listFields"][] = "CON_ID";
$tdataCONTENT4[".listFields"][] = "CON_LANG";
$tdataCONTENT4[".listFields"][] = "CON_VALUE";

$tdataCONTENT4[".hideMobileList"] = array();


$tdataCONTENT4[".viewFields"] = array();
$tdataCONTENT4[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".viewFields"][] = "CON_PARENT";
$tdataCONTENT4[".viewFields"][] = "CON_ID";
$tdataCONTENT4[".viewFields"][] = "CON_LANG";
$tdataCONTENT4[".viewFields"][] = "CON_VALUE";

$tdataCONTENT4[".addFields"] = array();
$tdataCONTENT4[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".addFields"][] = "CON_PARENT";
$tdataCONTENT4[".addFields"][] = "CON_ID";
$tdataCONTENT4[".addFields"][] = "CON_LANG";
$tdataCONTENT4[".addFields"][] = "CON_VALUE";

$tdataCONTENT4[".masterListFields"] = array();
$tdataCONTENT4[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT4[".masterListFields"][] = "CON_ID";
$tdataCONTENT4[".masterListFields"][] = "CON_LANG";
$tdataCONTENT4[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT4[".inlineAddFields"] = array();
$tdataCONTENT4[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT4[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT4[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT4[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT4[".editFields"] = array();
$tdataCONTENT4[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".editFields"][] = "CON_PARENT";
$tdataCONTENT4[".editFields"][] = "CON_ID";
$tdataCONTENT4[".editFields"][] = "CON_LANG";
$tdataCONTENT4[".editFields"][] = "CON_VALUE";

$tdataCONTENT4[".inlineEditFields"] = array();
$tdataCONTENT4[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT4[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT4[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT4[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT4[".updateSelectedFields"] = array();
$tdataCONTENT4[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT4[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT4[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT4[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT4[".exportFields"] = array();
$tdataCONTENT4[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".exportFields"][] = "CON_PARENT";
$tdataCONTENT4[".exportFields"][] = "CON_ID";
$tdataCONTENT4[".exportFields"][] = "CON_LANG";
$tdataCONTENT4[".exportFields"][] = "CON_VALUE";

$tdataCONTENT4[".importFields"] = array();
$tdataCONTENT4[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".importFields"][] = "CON_PARENT";
$tdataCONTENT4[".importFields"][] = "CON_ID";
$tdataCONTENT4[".importFields"][] = "CON_LANG";
$tdataCONTENT4[".importFields"][] = "CON_VALUE";

$tdataCONTENT4[".printFields"] = array();
$tdataCONTENT4[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT4[".printFields"][] = "CON_PARENT";
$tdataCONTENT4[".printFields"][] = "CON_ID";
$tdataCONTENT4[".printFields"][] = "CON_LANG";
$tdataCONTENT4[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT4","CON_CATEGORY");
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




	$tdataCONTENT4["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT4","CON_PARENT");
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




	$tdataCONTENT4["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT4","CON_ID");
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




	$tdataCONTENT4["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT4","CON_LANG");
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




	$tdataCONTENT4["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT4","CON_VALUE");
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




	$tdataCONTENT4["CON_VALUE"] = $fdata;


$tables_data["CONTENT4"]=&$tdataCONTENT4;
$field_labels["CONTENT4"] = &$fieldLabelsCONTENT4;
$fieldToolTips["CONTENT4"] = &$fieldToolTipsCONTENT4;
$placeHolders["CONTENT4"] = &$placeHoldersCONTENT4;
$page_titles["CONTENT4"] = &$pageTitlesCONTENT4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT4"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT4"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT4()
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
	"m_srcTableName" => "CONTENT4"
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
	"m_srcTableName" => "CONTENT4"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT4"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT4"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT4"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT4"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT4";
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
$proto16["m_srcTableName"] = "CONTENT4";
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
$proto0["m_srcTableName"]="CONTENT4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT4 = createSqlQuery_CONTENT4();


	
						;

					

$tdataCONTENT4[".sqlquery"] = $queryData_CONTENT4;

$tableEvents["CONTENT4"] = new eventsBase;
$tdataCONTENT4[".hasEvents"] = false;

?>
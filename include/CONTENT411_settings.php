<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT411 = array();
	$tdataCONTENT411[".truncateText"] = true;
	$tdataCONTENT411[".NumberOfChars"] = 20;
	$tdataCONTENT411[".ShortName"] = "CONTENT411";
	$tdataCONTENT411[".OwnerID"] = "";
	$tdataCONTENT411[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT411 = array();
$fieldToolTipsCONTENT411 = array();
$pageTitlesCONTENT411 = array();
$placeHoldersCONTENT411 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT411["Japanese"] = array();
	$fieldToolTipsCONTENT411["Japanese"] = array();
	$placeHoldersCONTENT411["Japanese"] = array();
	$pageTitlesCONTENT411["Japanese"] = array();
	$fieldLabelsCONTENT411["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT411["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT411["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT411["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT411["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT411["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT411["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT411["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT411["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT411["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT411["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT411["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT411["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT411["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT411["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT411["Japanese"]))
		$tdataCONTENT411[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT411["English"] = array();
	$fieldToolTipsCONTENT411["English"] = array();
	$placeHoldersCONTENT411["English"] = array();
	$pageTitlesCONTENT411["English"] = array();
	$fieldLabelsCONTENT411["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT411["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT411["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT411["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT411["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT411["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT411["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT411["English"]["CON_ID"] = "";
	$placeHoldersCONTENT411["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT411["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT411["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT411["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT411["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT411["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT411["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT411["English"]))
		$tdataCONTENT411[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT411[""] = array();
	$fieldToolTipsCONTENT411[""] = array();
	$placeHoldersCONTENT411[""] = array();
	$pageTitlesCONTENT411[""] = array();
	if (count($fieldToolTipsCONTENT411[""]))
		$tdataCONTENT411[".isUseToolTips"] = true;
}


	$tdataCONTENT411[".NCSearch"] = true;



$tdataCONTENT411[".shortTableName"] = "CONTENT411";
$tdataCONTENT411[".nSecOptions"] = 0;
$tdataCONTENT411[".recsPerRowPrint"] = 1;
$tdataCONTENT411[".mainTableOwnerID"] = "";
$tdataCONTENT411[".moveNext"] = 0;
$tdataCONTENT411[".entityType"] = 1;

$tdataCONTENT411[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT411[".showAddInPopup"] = false;

$tdataCONTENT411[".showEditInPopup"] = false;

$tdataCONTENT411[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT411[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT411[".fieldsForRegister"] = array();
	
$tdataCONTENT411[".listAjax"] = false;

	$tdataCONTENT411[".audit"] = true;

	$tdataCONTENT411[".locking"] = false;

$tdataCONTENT411[".edit"] = true;
$tdataCONTENT411[".afterEditAction"] = 1;
$tdataCONTENT411[".closePopupAfterEdit"] = 1;
$tdataCONTENT411[".afterEditActionDetTable"] = "";

$tdataCONTENT411[".add"] = true;
$tdataCONTENT411[".afterAddAction"] = 1;
$tdataCONTENT411[".closePopupAfterAdd"] = 1;
$tdataCONTENT411[".afterAddActionDetTable"] = "";

$tdataCONTENT411[".list"] = true;

$tdataCONTENT411[".inlineEdit"] = true;


$tdataCONTENT411[".reorderRecordsByHeader"] = true;
$tdataCONTENT411[".createSortByDropdown"] = true;
$tdataCONTENT411[".strSortControlSettingsJSON"] = "";



$tdataCONTENT411[".inlineAdd"] = true;
$tdataCONTENT411[".view"] = true;

$tdataCONTENT411[".import"] = true;

$tdataCONTENT411[".exportTo"] = true;

$tdataCONTENT411[".printFriendly"] = true;

$tdataCONTENT411[".delete"] = true;

$tdataCONTENT411[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT411[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT411[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT411[".searchSaving"] = false;
//

$tdataCONTENT411[".showSearchPanel"] = true;
		$tdataCONTENT411[".flexibleSearch"] = true;

$tdataCONTENT411[".isUseAjaxSuggest"] = true;

$tdataCONTENT411[".rowHighlite"] = true;



				

$tdataCONTENT411[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT411[".buttonsAdded"] = false;

$tdataCONTENT411[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT411[".isUseTimeForSearch"] = false;





$tdataCONTENT411[".allSearchFields"] = array();
$tdataCONTENT411[".filterFields"] = array();
$tdataCONTENT411[".requiredSearchFields"] = array();

$tdataCONTENT411[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT411[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT411[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT411[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT411[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT411[".googleLikeFields"] = array();
$tdataCONTENT411[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT411[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT411[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT411[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT411[".advSearchFields"] = array();
$tdataCONTENT411[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT411[".advSearchFields"][] = "CON_ID";
$tdataCONTENT411[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT411[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT411[".tableType"] = "list";

$tdataCONTENT411[".printerPageOrientation"] = 0;
$tdataCONTENT411[".nPrinterPageScale"] = 100;

$tdataCONTENT411[".nPrinterSplitRecords"] = 40;

$tdataCONTENT411[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT411[".geocodingEnabled"] = false;





$tdataCONTENT411[".listGridLayout"] = 3;


$tdataCONTENT411[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT411[".pageSize"] = 20;

$tdataCONTENT411[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT411[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT411[".orderindexes"] = array();

$tdataCONTENT411[".sqlHead"] = "SELECT CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$tdataCONTENT411[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT411[".sqlWhereExpr"] = "(CON_CATEGORY = 'PRO_TITLE')";
$tdataCONTENT411[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT411[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT411[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT411[".highlightSearchResults"] = true;

$tableKeysCONTENT411 = array();
$tableKeysCONTENT411[] = "CON_CATEGORY";
$tableKeysCONTENT411[] = "CON_PARENT";
$tableKeysCONTENT411[] = "CON_ID";
$tableKeysCONTENT411[] = "CON_LANG";
$tdataCONTENT411[".Keys"] = $tableKeysCONTENT411;

$tdataCONTENT411[".listFields"] = array();
$tdataCONTENT411[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".listFields"][] = "CON_PARENT";
$tdataCONTENT411[".listFields"][] = "CON_ID";
$tdataCONTENT411[".listFields"][] = "CON_LANG";
$tdataCONTENT411[".listFields"][] = "CON_VALUE";

$tdataCONTENT411[".hideMobileList"] = array();


$tdataCONTENT411[".viewFields"] = array();
$tdataCONTENT411[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".viewFields"][] = "CON_PARENT";
$tdataCONTENT411[".viewFields"][] = "CON_ID";
$tdataCONTENT411[".viewFields"][] = "CON_LANG";
$tdataCONTENT411[".viewFields"][] = "CON_VALUE";

$tdataCONTENT411[".addFields"] = array();
$tdataCONTENT411[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".addFields"][] = "CON_PARENT";
$tdataCONTENT411[".addFields"][] = "CON_ID";
$tdataCONTENT411[".addFields"][] = "CON_LANG";
$tdataCONTENT411[".addFields"][] = "CON_VALUE";

$tdataCONTENT411[".masterListFields"] = array();
$tdataCONTENT411[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT411[".masterListFields"][] = "CON_ID";
$tdataCONTENT411[".masterListFields"][] = "CON_LANG";
$tdataCONTENT411[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT411[".inlineAddFields"] = array();
$tdataCONTENT411[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT411[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT411[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT411[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT411[".editFields"] = array();
$tdataCONTENT411[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".editFields"][] = "CON_PARENT";
$tdataCONTENT411[".editFields"][] = "CON_ID";
$tdataCONTENT411[".editFields"][] = "CON_LANG";
$tdataCONTENT411[".editFields"][] = "CON_VALUE";

$tdataCONTENT411[".inlineEditFields"] = array();
$tdataCONTENT411[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT411[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT411[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT411[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT411[".updateSelectedFields"] = array();
$tdataCONTENT411[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT411[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT411[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT411[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT411[".exportFields"] = array();
$tdataCONTENT411[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".exportFields"][] = "CON_PARENT";
$tdataCONTENT411[".exportFields"][] = "CON_ID";
$tdataCONTENT411[".exportFields"][] = "CON_LANG";
$tdataCONTENT411[".exportFields"][] = "CON_VALUE";

$tdataCONTENT411[".importFields"] = array();
$tdataCONTENT411[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".importFields"][] = "CON_PARENT";
$tdataCONTENT411[".importFields"][] = "CON_ID";
$tdataCONTENT411[".importFields"][] = "CON_LANG";
$tdataCONTENT411[".importFields"][] = "CON_VALUE";

$tdataCONTENT411[".printFields"] = array();
$tdataCONTENT411[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT411[".printFields"][] = "CON_PARENT";
$tdataCONTENT411[".printFields"][] = "CON_ID";
$tdataCONTENT411[".printFields"][] = "CON_LANG";
$tdataCONTENT411[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT411","CON_CATEGORY");
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




	$tdataCONTENT411["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT411","CON_PARENT");
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




	$tdataCONTENT411["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT411","CON_ID");
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




	$tdataCONTENT411["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT411","CON_LANG");
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




	$tdataCONTENT411["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT411","CON_VALUE");
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




	$tdataCONTENT411["CON_VALUE"] = $fdata;


$tables_data["CONTENT411"]=&$tdataCONTENT411;
$field_labels["CONTENT411"] = &$fieldLabelsCONTENT411;
$fieldToolTips["CONTENT411"] = &$fieldToolTipsCONTENT411;
$placeHolders["CONTENT411"] = &$placeHoldersCONTENT411;
$page_titles["CONTENT411"] = &$pageTitlesCONTENT411;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT411"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT411"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT411()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$proto0["m_strFrom"] = "FROM CONTENT";
$proto0["m_strWhere"] = "(CON_CATEGORY = 'PRO_TITLE')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CON_CATEGORY = 'PRO_TITLE'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CON_CATEGORY",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT411"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'PRO_TITLE'";
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
	"m_srcTableName" => "CONTENT411"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT411";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT411"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT411";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT411"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT411";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT411"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT411";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT411"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT411";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT411";
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
$proto16["m_srcTableName"] = "CONTENT411";
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
$proto0["m_srcTableName"]="CONTENT411";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT411 = createSqlQuery_CONTENT411();


	
						;

					

$tdataCONTENT411[".sqlquery"] = $queryData_CONTENT411;

$tableEvents["CONTENT411"] = new eventsBase;
$tdataCONTENT411[".hasEvents"] = false;

?>
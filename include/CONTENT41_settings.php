<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT41 = array();
	$tdataCONTENT41[".truncateText"] = true;
	$tdataCONTENT41[".NumberOfChars"] = 20;
	$tdataCONTENT41[".ShortName"] = "CONTENT41";
	$tdataCONTENT41[".OwnerID"] = "";
	$tdataCONTENT41[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT41 = array();
$fieldToolTipsCONTENT41 = array();
$pageTitlesCONTENT41 = array();
$placeHoldersCONTENT41 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT41["Japanese"] = array();
	$fieldToolTipsCONTENT41["Japanese"] = array();
	$placeHoldersCONTENT41["Japanese"] = array();
	$pageTitlesCONTENT41["Japanese"] = array();
	$fieldLabelsCONTENT41["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT41["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT41["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT41["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT41["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT41["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT41["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT41["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT41["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT41["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT41["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT41["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT41["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT41["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT41["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT41["Japanese"]))
		$tdataCONTENT41[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT41["English"] = array();
	$fieldToolTipsCONTENT41["English"] = array();
	$placeHoldersCONTENT41["English"] = array();
	$pageTitlesCONTENT41["English"] = array();
	$fieldLabelsCONTENT41["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT41["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT41["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT41["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT41["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT41["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT41["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT41["English"]["CON_ID"] = "";
	$placeHoldersCONTENT41["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT41["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT41["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT41["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT41["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT41["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT41["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT41["English"]))
		$tdataCONTENT41[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT41[""] = array();
	$fieldToolTipsCONTENT41[""] = array();
	$placeHoldersCONTENT41[""] = array();
	$pageTitlesCONTENT41[""] = array();
	if (count($fieldToolTipsCONTENT41[""]))
		$tdataCONTENT41[".isUseToolTips"] = true;
}


	$tdataCONTENT41[".NCSearch"] = true;



$tdataCONTENT41[".shortTableName"] = "CONTENT41";
$tdataCONTENT41[".nSecOptions"] = 0;
$tdataCONTENT41[".recsPerRowPrint"] = 1;
$tdataCONTENT41[".mainTableOwnerID"] = "";
$tdataCONTENT41[".moveNext"] = 0;
$tdataCONTENT41[".entityType"] = 1;

$tdataCONTENT41[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT41[".showAddInPopup"] = false;

$tdataCONTENT41[".showEditInPopup"] = false;

$tdataCONTENT41[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT41[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT41[".fieldsForRegister"] = array();
	
$tdataCONTENT41[".listAjax"] = false;

	$tdataCONTENT41[".audit"] = true;

	$tdataCONTENT41[".locking"] = false;

$tdataCONTENT41[".edit"] = true;
$tdataCONTENT41[".afterEditAction"] = 1;
$tdataCONTENT41[".closePopupAfterEdit"] = 1;
$tdataCONTENT41[".afterEditActionDetTable"] = "";

$tdataCONTENT41[".add"] = true;
$tdataCONTENT41[".afterAddAction"] = 1;
$tdataCONTENT41[".closePopupAfterAdd"] = 1;
$tdataCONTENT41[".afterAddActionDetTable"] = "";

$tdataCONTENT41[".list"] = true;

$tdataCONTENT41[".inlineEdit"] = true;


$tdataCONTENT41[".reorderRecordsByHeader"] = true;
$tdataCONTENT41[".createSortByDropdown"] = true;
$tdataCONTENT41[".strSortControlSettingsJSON"] = "";



$tdataCONTENT41[".inlineAdd"] = true;
$tdataCONTENT41[".view"] = true;

$tdataCONTENT41[".import"] = true;

$tdataCONTENT41[".exportTo"] = true;

$tdataCONTENT41[".printFriendly"] = true;

$tdataCONTENT41[".delete"] = true;

$tdataCONTENT41[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT41[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT41[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT41[".searchSaving"] = false;
//

$tdataCONTENT41[".showSearchPanel"] = true;
		$tdataCONTENT41[".flexibleSearch"] = true;

$tdataCONTENT41[".isUseAjaxSuggest"] = true;

$tdataCONTENT41[".rowHighlite"] = true;



				

$tdataCONTENT41[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT41[".buttonsAdded"] = false;

$tdataCONTENT41[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT41[".isUseTimeForSearch"] = false;





$tdataCONTENT41[".allSearchFields"] = array();
$tdataCONTENT41[".filterFields"] = array();
$tdataCONTENT41[".requiredSearchFields"] = array();

$tdataCONTENT41[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT41[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT41[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT41[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT41[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT41[".googleLikeFields"] = array();
$tdataCONTENT41[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT41[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT41[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT41[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT41[".advSearchFields"] = array();
$tdataCONTENT41[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT41[".advSearchFields"][] = "CON_ID";
$tdataCONTENT41[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT41[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT41[".tableType"] = "list";

$tdataCONTENT41[".printerPageOrientation"] = 0;
$tdataCONTENT41[".nPrinterPageScale"] = 100;

$tdataCONTENT41[".nPrinterSplitRecords"] = 40;

$tdataCONTENT41[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT41[".geocodingEnabled"] = false;





$tdataCONTENT41[".listGridLayout"] = 3;


$tdataCONTENT41[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT41[".pageSize"] = 20;

$tdataCONTENT41[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT41[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT41[".orderindexes"] = array();

$tdataCONTENT41[".sqlHead"] = "SELECT CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$tdataCONTENT41[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT41[".sqlWhereExpr"] = "(CON_CATEGORY = 'TAS_TITLE')";
$tdataCONTENT41[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT41[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT41[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT41[".highlightSearchResults"] = true;

$tableKeysCONTENT41 = array();
$tableKeysCONTENT41[] = "CON_CATEGORY";
$tableKeysCONTENT41[] = "CON_PARENT";
$tableKeysCONTENT41[] = "CON_ID";
$tableKeysCONTENT41[] = "CON_LANG";
$tdataCONTENT41[".Keys"] = $tableKeysCONTENT41;

$tdataCONTENT41[".listFields"] = array();
$tdataCONTENT41[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".listFields"][] = "CON_PARENT";
$tdataCONTENT41[".listFields"][] = "CON_ID";
$tdataCONTENT41[".listFields"][] = "CON_LANG";
$tdataCONTENT41[".listFields"][] = "CON_VALUE";

$tdataCONTENT41[".hideMobileList"] = array();


$tdataCONTENT41[".viewFields"] = array();
$tdataCONTENT41[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".viewFields"][] = "CON_PARENT";
$tdataCONTENT41[".viewFields"][] = "CON_ID";
$tdataCONTENT41[".viewFields"][] = "CON_LANG";
$tdataCONTENT41[".viewFields"][] = "CON_VALUE";

$tdataCONTENT41[".addFields"] = array();
$tdataCONTENT41[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".addFields"][] = "CON_PARENT";
$tdataCONTENT41[".addFields"][] = "CON_ID";
$tdataCONTENT41[".addFields"][] = "CON_LANG";
$tdataCONTENT41[".addFields"][] = "CON_VALUE";

$tdataCONTENT41[".masterListFields"] = array();
$tdataCONTENT41[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT41[".masterListFields"][] = "CON_ID";
$tdataCONTENT41[".masterListFields"][] = "CON_LANG";
$tdataCONTENT41[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT41[".inlineAddFields"] = array();
$tdataCONTENT41[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT41[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT41[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT41[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT41[".editFields"] = array();
$tdataCONTENT41[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".editFields"][] = "CON_PARENT";
$tdataCONTENT41[".editFields"][] = "CON_ID";
$tdataCONTENT41[".editFields"][] = "CON_LANG";
$tdataCONTENT41[".editFields"][] = "CON_VALUE";

$tdataCONTENT41[".inlineEditFields"] = array();
$tdataCONTENT41[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT41[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT41[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT41[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT41[".updateSelectedFields"] = array();
$tdataCONTENT41[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT41[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT41[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT41[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT41[".exportFields"] = array();
$tdataCONTENT41[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".exportFields"][] = "CON_PARENT";
$tdataCONTENT41[".exportFields"][] = "CON_ID";
$tdataCONTENT41[".exportFields"][] = "CON_LANG";
$tdataCONTENT41[".exportFields"][] = "CON_VALUE";

$tdataCONTENT41[".importFields"] = array();
$tdataCONTENT41[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".importFields"][] = "CON_PARENT";
$tdataCONTENT41[".importFields"][] = "CON_ID";
$tdataCONTENT41[".importFields"][] = "CON_LANG";
$tdataCONTENT41[".importFields"][] = "CON_VALUE";

$tdataCONTENT41[".printFields"] = array();
$tdataCONTENT41[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT41[".printFields"][] = "CON_PARENT";
$tdataCONTENT41[".printFields"][] = "CON_ID";
$tdataCONTENT41[".printFields"][] = "CON_LANG";
$tdataCONTENT41[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT41","CON_CATEGORY");
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




	$tdataCONTENT41["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT41","CON_PARENT");
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




	$tdataCONTENT41["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT41","CON_ID");
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




	$tdataCONTENT41["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT41","CON_LANG");
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




	$tdataCONTENT41["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT41","CON_VALUE");
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




	$tdataCONTENT41["CON_VALUE"] = $fdata;


$tables_data["CONTENT41"]=&$tdataCONTENT41;
$field_labels["CONTENT41"] = &$fieldLabelsCONTENT41;
$fieldToolTips["CONTENT41"] = &$fieldToolTipsCONTENT41;
$placeHolders["CONTENT41"] = &$placeHoldersCONTENT41;
$page_titles["CONTENT41"] = &$pageTitlesCONTENT41;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT41"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT41"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT41()
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
	"m_srcTableName" => "CONTENT41"
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
	"m_srcTableName" => "CONTENT41"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT41";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT41"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT41";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT41"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT41";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT41"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT41";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT41"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT41";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT41";
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
$proto16["m_srcTableName"] = "CONTENT41";
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
$proto0["m_srcTableName"]="CONTENT41";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT41 = createSqlQuery_CONTENT41();


	
						;

					

$tdataCONTENT41[".sqlquery"] = $queryData_CONTENT41;

$tableEvents["CONTENT41"] = new eventsBase;
$tdataCONTENT41[".hasEvents"] = false;

?>
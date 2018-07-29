<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT3 = array();
	$tdataCONTENT3[".truncateText"] = true;
	$tdataCONTENT3[".NumberOfChars"] = 20;
	$tdataCONTENT3[".ShortName"] = "CONTENT3";
	$tdataCONTENT3[".OwnerID"] = "";
	$tdataCONTENT3[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT3 = array();
$fieldToolTipsCONTENT3 = array();
$pageTitlesCONTENT3 = array();
$placeHoldersCONTENT3 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT3["Japanese"] = array();
	$fieldToolTipsCONTENT3["Japanese"] = array();
	$placeHoldersCONTENT3["Japanese"] = array();
	$pageTitlesCONTENT3["Japanese"] = array();
	$fieldLabelsCONTENT3["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT3["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT3["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT3["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT3["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT3["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT3["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT3["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT3["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT3["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT3["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT3["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT3["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT3["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT3["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT3["Japanese"]))
		$tdataCONTENT3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT3["English"] = array();
	$fieldToolTipsCONTENT3["English"] = array();
	$placeHoldersCONTENT3["English"] = array();
	$pageTitlesCONTENT3["English"] = array();
	$fieldLabelsCONTENT3["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT3["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT3["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT3["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT3["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT3["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT3["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT3["English"]["CON_ID"] = "";
	$placeHoldersCONTENT3["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT3["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT3["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT3["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT3["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT3["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT3["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT3["English"]))
		$tdataCONTENT3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT3[""] = array();
	$fieldToolTipsCONTENT3[""] = array();
	$placeHoldersCONTENT3[""] = array();
	$pageTitlesCONTENT3[""] = array();
	if (count($fieldToolTipsCONTENT3[""]))
		$tdataCONTENT3[".isUseToolTips"] = true;
}


	$tdataCONTENT3[".NCSearch"] = true;



$tdataCONTENT3[".shortTableName"] = "CONTENT3";
$tdataCONTENT3[".nSecOptions"] = 0;
$tdataCONTENT3[".recsPerRowPrint"] = 1;
$tdataCONTENT3[".mainTableOwnerID"] = "";
$tdataCONTENT3[".moveNext"] = 0;
$tdataCONTENT3[".entityType"] = 1;

$tdataCONTENT3[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT3[".showAddInPopup"] = false;

$tdataCONTENT3[".showEditInPopup"] = false;

$tdataCONTENT3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT3[".fieldsForRegister"] = array();
	
$tdataCONTENT3[".listAjax"] = false;

	$tdataCONTENT3[".audit"] = true;

	$tdataCONTENT3[".locking"] = false;

$tdataCONTENT3[".edit"] = true;
$tdataCONTENT3[".afterEditAction"] = 1;
$tdataCONTENT3[".closePopupAfterEdit"] = 1;
$tdataCONTENT3[".afterEditActionDetTable"] = "";

$tdataCONTENT3[".add"] = true;
$tdataCONTENT3[".afterAddAction"] = 1;
$tdataCONTENT3[".closePopupAfterAdd"] = 1;
$tdataCONTENT3[".afterAddActionDetTable"] = "";

$tdataCONTENT3[".list"] = true;

$tdataCONTENT3[".inlineEdit"] = true;


$tdataCONTENT3[".reorderRecordsByHeader"] = true;
$tdataCONTENT3[".createSortByDropdown"] = true;
$tdataCONTENT3[".strSortControlSettingsJSON"] = "";



$tdataCONTENT3[".inlineAdd"] = true;
$tdataCONTENT3[".view"] = true;

$tdataCONTENT3[".import"] = true;

$tdataCONTENT3[".exportTo"] = true;

$tdataCONTENT3[".printFriendly"] = true;

$tdataCONTENT3[".delete"] = true;

$tdataCONTENT3[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT3[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT3[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT3[".searchSaving"] = false;
//

$tdataCONTENT3[".showSearchPanel"] = true;
		$tdataCONTENT3[".flexibleSearch"] = true;

$tdataCONTENT3[".isUseAjaxSuggest"] = true;

$tdataCONTENT3[".rowHighlite"] = true;



				

$tdataCONTENT3[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT3[".buttonsAdded"] = false;

$tdataCONTENT3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT3[".isUseTimeForSearch"] = false;





$tdataCONTENT3[".allSearchFields"] = array();
$tdataCONTENT3[".filterFields"] = array();
$tdataCONTENT3[".requiredSearchFields"] = array();

$tdataCONTENT3[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT3[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT3[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT3[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT3[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT3[".googleLikeFields"] = array();
$tdataCONTENT3[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT3[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT3[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT3[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT3[".advSearchFields"] = array();
$tdataCONTENT3[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT3[".advSearchFields"][] = "CON_ID";
$tdataCONTENT3[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT3[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT3[".tableType"] = "list";

$tdataCONTENT3[".printerPageOrientation"] = 0;
$tdataCONTENT3[".nPrinterPageScale"] = 100;

$tdataCONTENT3[".nPrinterSplitRecords"] = 40;

$tdataCONTENT3[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT3[".geocodingEnabled"] = false;





$tdataCONTENT3[".listGridLayout"] = 3;


$tdataCONTENT3[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT3[".pageSize"] = 20;

$tdataCONTENT3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT3[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT3[".orderindexes"] = array();

$tdataCONTENT3[".sqlHead"] = "SELECT CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$tdataCONTENT3[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT3[".sqlWhereExpr"] = "(CON_CATEGORY = 'TAS_TITLE')";
$tdataCONTENT3[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT3[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT3[".highlightSearchResults"] = true;

$tableKeysCONTENT3 = array();
$tableKeysCONTENT3[] = "CON_CATEGORY";
$tableKeysCONTENT3[] = "CON_PARENT";
$tableKeysCONTENT3[] = "CON_ID";
$tableKeysCONTENT3[] = "CON_LANG";
$tdataCONTENT3[".Keys"] = $tableKeysCONTENT3;

$tdataCONTENT3[".listFields"] = array();
$tdataCONTENT3[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".listFields"][] = "CON_PARENT";
$tdataCONTENT3[".listFields"][] = "CON_ID";
$tdataCONTENT3[".listFields"][] = "CON_LANG";
$tdataCONTENT3[".listFields"][] = "CON_VALUE";

$tdataCONTENT3[".hideMobileList"] = array();


$tdataCONTENT3[".viewFields"] = array();
$tdataCONTENT3[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".viewFields"][] = "CON_PARENT";
$tdataCONTENT3[".viewFields"][] = "CON_ID";
$tdataCONTENT3[".viewFields"][] = "CON_LANG";
$tdataCONTENT3[".viewFields"][] = "CON_VALUE";

$tdataCONTENT3[".addFields"] = array();
$tdataCONTENT3[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".addFields"][] = "CON_PARENT";
$tdataCONTENT3[".addFields"][] = "CON_ID";
$tdataCONTENT3[".addFields"][] = "CON_LANG";
$tdataCONTENT3[".addFields"][] = "CON_VALUE";

$tdataCONTENT3[".masterListFields"] = array();
$tdataCONTENT3[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT3[".masterListFields"][] = "CON_ID";
$tdataCONTENT3[".masterListFields"][] = "CON_LANG";
$tdataCONTENT3[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT3[".inlineAddFields"] = array();
$tdataCONTENT3[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT3[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT3[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT3[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT3[".editFields"] = array();
$tdataCONTENT3[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".editFields"][] = "CON_PARENT";
$tdataCONTENT3[".editFields"][] = "CON_ID";
$tdataCONTENT3[".editFields"][] = "CON_LANG";
$tdataCONTENT3[".editFields"][] = "CON_VALUE";

$tdataCONTENT3[".inlineEditFields"] = array();
$tdataCONTENT3[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT3[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT3[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT3[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT3[".updateSelectedFields"] = array();
$tdataCONTENT3[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT3[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT3[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT3[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT3[".exportFields"] = array();
$tdataCONTENT3[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".exportFields"][] = "CON_PARENT";
$tdataCONTENT3[".exportFields"][] = "CON_ID";
$tdataCONTENT3[".exportFields"][] = "CON_LANG";
$tdataCONTENT3[".exportFields"][] = "CON_VALUE";

$tdataCONTENT3[".importFields"] = array();
$tdataCONTENT3[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".importFields"][] = "CON_PARENT";
$tdataCONTENT3[".importFields"][] = "CON_ID";
$tdataCONTENT3[".importFields"][] = "CON_LANG";
$tdataCONTENT3[".importFields"][] = "CON_VALUE";

$tdataCONTENT3[".printFields"] = array();
$tdataCONTENT3[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT3[".printFields"][] = "CON_PARENT";
$tdataCONTENT3[".printFields"][] = "CON_ID";
$tdataCONTENT3[".printFields"][] = "CON_LANG";
$tdataCONTENT3[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT3","CON_CATEGORY");
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




	$tdataCONTENT3["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT3","CON_PARENT");
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




	$tdataCONTENT3["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT3","CON_ID");
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




	$tdataCONTENT3["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT3","CON_LANG");
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




	$tdataCONTENT3["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT3","CON_VALUE");
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




	$tdataCONTENT3["CON_VALUE"] = $fdata;


$tables_data["CONTENT3"]=&$tdataCONTENT3;
$field_labels["CONTENT3"] = &$fieldLabelsCONTENT3;
$fieldToolTips["CONTENT3"] = &$fieldToolTipsCONTENT3;
$placeHolders["CONTENT3"] = &$placeHoldersCONTENT3;
$page_titles["CONTENT3"] = &$pageTitlesCONTENT3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT3()
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
	"m_srcTableName" => "CONTENT3"
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
	"m_srcTableName" => "CONTENT3"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT3"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT3"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT3"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT3"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT3";
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
$proto16["m_srcTableName"] = "CONTENT3";
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
$proto0["m_srcTableName"]="CONTENT3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT3 = createSqlQuery_CONTENT3();


	
						;

					

$tdataCONTENT3[".sqlquery"] = $queryData_CONTENT3;

$tableEvents["CONTENT3"] = new eventsBase;
$tdataCONTENT3[".hasEvents"] = false;

?>
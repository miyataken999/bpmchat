<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT2 = array();
	$tdataCONTENT2[".truncateText"] = true;
	$tdataCONTENT2[".NumberOfChars"] = 20;
	$tdataCONTENT2[".ShortName"] = "CONTENT2";
	$tdataCONTENT2[".OwnerID"] = "";
	$tdataCONTENT2[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT2 = array();
$fieldToolTipsCONTENT2 = array();
$pageTitlesCONTENT2 = array();
$placeHoldersCONTENT2 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT2["Japanese"] = array();
	$fieldToolTipsCONTENT2["Japanese"] = array();
	$placeHoldersCONTENT2["Japanese"] = array();
	$pageTitlesCONTENT2["Japanese"] = array();
	$fieldLabelsCONTENT2["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT2["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT2["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT2["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT2["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT2["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT2["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT2["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT2["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT2["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT2["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT2["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT2["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT2["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT2["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT2["Japanese"]))
		$tdataCONTENT2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT2["English"] = array();
	$fieldToolTipsCONTENT2["English"] = array();
	$placeHoldersCONTENT2["English"] = array();
	$pageTitlesCONTENT2["English"] = array();
	$fieldLabelsCONTENT2["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT2["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT2["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT2["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT2["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT2["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT2["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT2["English"]["CON_ID"] = "";
	$placeHoldersCONTENT2["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT2["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT2["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT2["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT2["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT2["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT2["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT2["English"]))
		$tdataCONTENT2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT2[""] = array();
	$fieldToolTipsCONTENT2[""] = array();
	$placeHoldersCONTENT2[""] = array();
	$pageTitlesCONTENT2[""] = array();
	if (count($fieldToolTipsCONTENT2[""]))
		$tdataCONTENT2[".isUseToolTips"] = true;
}


	$tdataCONTENT2[".NCSearch"] = true;



$tdataCONTENT2[".shortTableName"] = "CONTENT2";
$tdataCONTENT2[".nSecOptions"] = 0;
$tdataCONTENT2[".recsPerRowPrint"] = 1;
$tdataCONTENT2[".mainTableOwnerID"] = "";
$tdataCONTENT2[".moveNext"] = 0;
$tdataCONTENT2[".entityType"] = 1;

$tdataCONTENT2[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT2[".showAddInPopup"] = false;

$tdataCONTENT2[".showEditInPopup"] = false;

$tdataCONTENT2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT2[".fieldsForRegister"] = array();
	
$tdataCONTENT2[".listAjax"] = false;

	$tdataCONTENT2[".audit"] = true;

	$tdataCONTENT2[".locking"] = false;

$tdataCONTENT2[".edit"] = true;
$tdataCONTENT2[".afterEditAction"] = 1;
$tdataCONTENT2[".closePopupAfterEdit"] = 1;
$tdataCONTENT2[".afterEditActionDetTable"] = "";

$tdataCONTENT2[".add"] = true;
$tdataCONTENT2[".afterAddAction"] = 1;
$tdataCONTENT2[".closePopupAfterAdd"] = 1;
$tdataCONTENT2[".afterAddActionDetTable"] = "";

$tdataCONTENT2[".list"] = true;

$tdataCONTENT2[".inlineEdit"] = true;


$tdataCONTENT2[".reorderRecordsByHeader"] = true;
$tdataCONTENT2[".createSortByDropdown"] = true;
$tdataCONTENT2[".strSortControlSettingsJSON"] = "";



$tdataCONTENT2[".inlineAdd"] = true;
$tdataCONTENT2[".view"] = true;

$tdataCONTENT2[".import"] = true;

$tdataCONTENT2[".exportTo"] = true;

$tdataCONTENT2[".printFriendly"] = true;

$tdataCONTENT2[".delete"] = true;

$tdataCONTENT2[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT2[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT2[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT2[".searchSaving"] = false;
//

$tdataCONTENT2[".showSearchPanel"] = true;
		$tdataCONTENT2[".flexibleSearch"] = true;

$tdataCONTENT2[".isUseAjaxSuggest"] = true;

$tdataCONTENT2[".rowHighlite"] = true;



				

$tdataCONTENT2[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT2[".buttonsAdded"] = false;

$tdataCONTENT2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT2[".isUseTimeForSearch"] = false;





$tdataCONTENT2[".allSearchFields"] = array();
$tdataCONTENT2[".filterFields"] = array();
$tdataCONTENT2[".requiredSearchFields"] = array();

$tdataCONTENT2[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT2[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT2[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT2[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT2[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT2[".googleLikeFields"] = array();
$tdataCONTENT2[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT2[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT2[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT2[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT2[".advSearchFields"] = array();
$tdataCONTENT2[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT2[".advSearchFields"][] = "CON_ID";
$tdataCONTENT2[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT2[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT2[".tableType"] = "list";

$tdataCONTENT2[".printerPageOrientation"] = 0;
$tdataCONTENT2[".nPrinterPageScale"] = 100;

$tdataCONTENT2[".nPrinterSplitRecords"] = 40;

$tdataCONTENT2[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT2[".geocodingEnabled"] = false;





$tdataCONTENT2[".listGridLayout"] = 3;


$tdataCONTENT2[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT2[".pageSize"] = 20;

$tdataCONTENT2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT2[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT2[".orderindexes"] = array();

$tdataCONTENT2[".sqlHead"] = "SELECT CON_CATEGORY,  CON_PARENT,  CON_ID,  CON_LANG,  CON_VALUE";
$tdataCONTENT2[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT2[".sqlWhereExpr"] = "(CON_CATEGORY = 'TAS_TITLE')";
$tdataCONTENT2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT2[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT2[".highlightSearchResults"] = true;

$tableKeysCONTENT2 = array();
$tableKeysCONTENT2[] = "CON_CATEGORY";
$tableKeysCONTENT2[] = "CON_PARENT";
$tableKeysCONTENT2[] = "CON_ID";
$tableKeysCONTENT2[] = "CON_LANG";
$tdataCONTENT2[".Keys"] = $tableKeysCONTENT2;

$tdataCONTENT2[".listFields"] = array();
$tdataCONTENT2[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".listFields"][] = "CON_PARENT";
$tdataCONTENT2[".listFields"][] = "CON_ID";
$tdataCONTENT2[".listFields"][] = "CON_LANG";
$tdataCONTENT2[".listFields"][] = "CON_VALUE";

$tdataCONTENT2[".hideMobileList"] = array();


$tdataCONTENT2[".viewFields"] = array();
$tdataCONTENT2[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".viewFields"][] = "CON_PARENT";
$tdataCONTENT2[".viewFields"][] = "CON_ID";
$tdataCONTENT2[".viewFields"][] = "CON_LANG";
$tdataCONTENT2[".viewFields"][] = "CON_VALUE";

$tdataCONTENT2[".addFields"] = array();
$tdataCONTENT2[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".addFields"][] = "CON_PARENT";
$tdataCONTENT2[".addFields"][] = "CON_ID";
$tdataCONTENT2[".addFields"][] = "CON_LANG";
$tdataCONTENT2[".addFields"][] = "CON_VALUE";

$tdataCONTENT2[".masterListFields"] = array();
$tdataCONTENT2[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT2[".masterListFields"][] = "CON_ID";
$tdataCONTENT2[".masterListFields"][] = "CON_LANG";
$tdataCONTENT2[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT2[".inlineAddFields"] = array();
$tdataCONTENT2[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT2[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT2[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT2[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT2[".editFields"] = array();
$tdataCONTENT2[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".editFields"][] = "CON_PARENT";
$tdataCONTENT2[".editFields"][] = "CON_ID";
$tdataCONTENT2[".editFields"][] = "CON_LANG";
$tdataCONTENT2[".editFields"][] = "CON_VALUE";

$tdataCONTENT2[".inlineEditFields"] = array();
$tdataCONTENT2[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT2[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT2[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT2[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT2[".updateSelectedFields"] = array();
$tdataCONTENT2[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT2[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT2[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT2[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT2[".exportFields"] = array();
$tdataCONTENT2[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".exportFields"][] = "CON_PARENT";
$tdataCONTENT2[".exportFields"][] = "CON_ID";
$tdataCONTENT2[".exportFields"][] = "CON_LANG";
$tdataCONTENT2[".exportFields"][] = "CON_VALUE";

$tdataCONTENT2[".importFields"] = array();
$tdataCONTENT2[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".importFields"][] = "CON_PARENT";
$tdataCONTENT2[".importFields"][] = "CON_ID";
$tdataCONTENT2[".importFields"][] = "CON_LANG";
$tdataCONTENT2[".importFields"][] = "CON_VALUE";

$tdataCONTENT2[".printFields"] = array();
$tdataCONTENT2[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT2[".printFields"][] = "CON_PARENT";
$tdataCONTENT2[".printFields"][] = "CON_ID";
$tdataCONTENT2[".printFields"][] = "CON_LANG";
$tdataCONTENT2[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT2","CON_CATEGORY");
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




	$tdataCONTENT2["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT2","CON_PARENT");
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




	$tdataCONTENT2["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT2","CON_ID");
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




	$tdataCONTENT2["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT2","CON_LANG");
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




	$tdataCONTENT2["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT2","CON_VALUE");
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




	$tdataCONTENT2["CON_VALUE"] = $fdata;


$tables_data["CONTENT2"]=&$tdataCONTENT2;
$field_labels["CONTENT2"] = &$fieldLabelsCONTENT2;
$fieldToolTips["CONTENT2"] = &$fieldToolTipsCONTENT2;
$placeHolders["CONTENT2"] = &$placeHoldersCONTENT2;
$page_titles["CONTENT2"] = &$pageTitlesCONTENT2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT2()
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
	"m_srcTableName" => "CONTENT2"
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
	"m_srcTableName" => "CONTENT2"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT2"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT2"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT2"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT2"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT2";
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
$proto16["m_srcTableName"] = "CONTENT2";
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
$proto0["m_srcTableName"]="CONTENT2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT2 = createSqlQuery_CONTENT2();


	
						;

					

$tdataCONTENT2[".sqlquery"] = $queryData_CONTENT2;

$tableEvents["CONTENT2"] = new eventsBase;
$tdataCONTENT2[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCONTENT = array();
	$tdataCONTENT[".truncateText"] = true;
	$tdataCONTENT[".NumberOfChars"] = 20;
	$tdataCONTENT[".ShortName"] = "CONTENT";
	$tdataCONTENT[".OwnerID"] = "";
	$tdataCONTENT[".OriginalTable"] = "CONTENT";

//	field labels
$fieldLabelsCONTENT = array();
$fieldToolTipsCONTENT = array();
$pageTitlesCONTENT = array();
$placeHoldersCONTENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCONTENT["Japanese"] = array();
	$fieldToolTipsCONTENT["Japanese"] = array();
	$placeHoldersCONTENT["Japanese"] = array();
	$pageTitlesCONTENT["Japanese"] = array();
	$fieldLabelsCONTENT["Japanese"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT["Japanese"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT["Japanese"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT["Japanese"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT["Japanese"]["CON_PARENT"] = "";
	$placeHoldersCONTENT["Japanese"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT["Japanese"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT["Japanese"]["CON_ID"] = "";
	$placeHoldersCONTENT["Japanese"]["CON_ID"] = "";
	$fieldLabelsCONTENT["Japanese"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT["Japanese"]["CON_LANG"] = "";
	$placeHoldersCONTENT["Japanese"]["CON_LANG"] = "";
	$fieldLabelsCONTENT["Japanese"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT["Japanese"]["CON_VALUE"] = "";
	$placeHoldersCONTENT["Japanese"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT["Japanese"]))
		$tdataCONTENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCONTENT["English"] = array();
	$fieldToolTipsCONTENT["English"] = array();
	$placeHoldersCONTENT["English"] = array();
	$pageTitlesCONTENT["English"] = array();
	$fieldLabelsCONTENT["English"]["CON_CATEGORY"] = "詐欺カテゴリ";
	$fieldToolTipsCONTENT["English"]["CON_CATEGORY"] = "";
	$placeHoldersCONTENT["English"]["CON_CATEGORY"] = "";
	$fieldLabelsCONTENT["English"]["CON_PARENT"] = "詐欺親";
	$fieldToolTipsCONTENT["English"]["CON_PARENT"] = "";
	$placeHoldersCONTENT["English"]["CON_PARENT"] = "";
	$fieldLabelsCONTENT["English"]["CON_ID"] = "詐欺ID";
	$fieldToolTipsCONTENT["English"]["CON_ID"] = "";
	$placeHoldersCONTENT["English"]["CON_ID"] = "";
	$fieldLabelsCONTENT["English"]["CON_LANG"] = "詐欺LANG";
	$fieldToolTipsCONTENT["English"]["CON_LANG"] = "";
	$placeHoldersCONTENT["English"]["CON_LANG"] = "";
	$fieldLabelsCONTENT["English"]["CON_VALUE"] = "CON値";
	$fieldToolTipsCONTENT["English"]["CON_VALUE"] = "";
	$placeHoldersCONTENT["English"]["CON_VALUE"] = "";
	if (count($fieldToolTipsCONTENT["English"]))
		$tdataCONTENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCONTENT[""] = array();
	$fieldToolTipsCONTENT[""] = array();
	$placeHoldersCONTENT[""] = array();
	$pageTitlesCONTENT[""] = array();
	if (count($fieldToolTipsCONTENT[""]))
		$tdataCONTENT[".isUseToolTips"] = true;
}


	$tdataCONTENT[".NCSearch"] = true;



$tdataCONTENT[".shortTableName"] = "CONTENT";
$tdataCONTENT[".nSecOptions"] = 0;
$tdataCONTENT[".recsPerRowPrint"] = 1;
$tdataCONTENT[".mainTableOwnerID"] = "";
$tdataCONTENT[".moveNext"] = 0;
$tdataCONTENT[".entityType"] = 0;

$tdataCONTENT[".strOriginalTableName"] = "CONTENT";

	



$tdataCONTENT[".showAddInPopup"] = false;

$tdataCONTENT[".showEditInPopup"] = false;

$tdataCONTENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCONTENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCONTENT[".fieldsForRegister"] = array();
	
$tdataCONTENT[".listAjax"] = false;

	$tdataCONTENT[".audit"] = true;

	$tdataCONTENT[".locking"] = false;

$tdataCONTENT[".edit"] = true;
$tdataCONTENT[".afterEditAction"] = 1;
$tdataCONTENT[".closePopupAfterEdit"] = 1;
$tdataCONTENT[".afterEditActionDetTable"] = "";

$tdataCONTENT[".add"] = true;
$tdataCONTENT[".afterAddAction"] = 1;
$tdataCONTENT[".closePopupAfterAdd"] = 1;
$tdataCONTENT[".afterAddActionDetTable"] = "";

$tdataCONTENT[".list"] = true;

$tdataCONTENT[".inlineEdit"] = true;


$tdataCONTENT[".reorderRecordsByHeader"] = true;
$tdataCONTENT[".createSortByDropdown"] = true;
$tdataCONTENT[".strSortControlSettingsJSON"] = "";



$tdataCONTENT[".inlineAdd"] = true;
$tdataCONTENT[".view"] = true;

$tdataCONTENT[".import"] = true;

$tdataCONTENT[".exportTo"] = true;

$tdataCONTENT[".printFriendly"] = true;

$tdataCONTENT[".delete"] = true;

$tdataCONTENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCONTENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCONTENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCONTENT[".searchSaving"] = false;
//

$tdataCONTENT[".showSearchPanel"] = true;
		$tdataCONTENT[".flexibleSearch"] = true;

$tdataCONTENT[".isUseAjaxSuggest"] = true;

$tdataCONTENT[".rowHighlite"] = true;



																

$tdataCONTENT[".ajaxCodeSnippetAdded"] = false;

$tdataCONTENT[".buttonsAdded"] = false;

$tdataCONTENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCONTENT[".isUseTimeForSearch"] = false;



$tdataCONTENT[".badgeColor"] = "DB7093";


$tdataCONTENT[".allSearchFields"] = array();
$tdataCONTENT[".filterFields"] = array();
$tdataCONTENT[".requiredSearchFields"] = array();

$tdataCONTENT[".allSearchFields"][] = "CON_CATEGORY";
	$tdataCONTENT[".allSearchFields"][] = "CON_PARENT";
	$tdataCONTENT[".allSearchFields"][] = "CON_ID";
	$tdataCONTENT[".allSearchFields"][] = "CON_LANG";
	$tdataCONTENT[".allSearchFields"][] = "CON_VALUE";
	

$tdataCONTENT[".googleLikeFields"] = array();
$tdataCONTENT[".googleLikeFields"][] = "CON_CATEGORY";
$tdataCONTENT[".googleLikeFields"][] = "CON_PARENT";
$tdataCONTENT[".googleLikeFields"][] = "CON_ID";
$tdataCONTENT[".googleLikeFields"][] = "CON_LANG";
$tdataCONTENT[".googleLikeFields"][] = "CON_VALUE";


$tdataCONTENT[".advSearchFields"] = array();
$tdataCONTENT[".advSearchFields"][] = "CON_CATEGORY";
$tdataCONTENT[".advSearchFields"][] = "CON_PARENT";
$tdataCONTENT[".advSearchFields"][] = "CON_ID";
$tdataCONTENT[".advSearchFields"][] = "CON_LANG";
$tdataCONTENT[".advSearchFields"][] = "CON_VALUE";

$tdataCONTENT[".tableType"] = "list";

$tdataCONTENT[".printerPageOrientation"] = 0;
$tdataCONTENT[".nPrinterPageScale"] = 100;

$tdataCONTENT[".nPrinterSplitRecords"] = 40;

$tdataCONTENT[".nPrinterPDFSplitRecords"] = 40;



$tdataCONTENT[".geocodingEnabled"] = false;





$tdataCONTENT[".listGridLayout"] = 3;


$tdataCONTENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCONTENT[".pageSize"] = 20;

$tdataCONTENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCONTENT[".strOrderBy"] = $tstrOrderBy;

$tdataCONTENT[".orderindexes"] = array();

$tdataCONTENT[".sqlHead"] = "SELECT CON_CATEGORY,  	CON_PARENT,  	CON_ID,  	CON_LANG,  	CON_VALUE";
$tdataCONTENT[".sqlFrom"] = "FROM CONTENT";
$tdataCONTENT[".sqlWhereExpr"] = "";
$tdataCONTENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCONTENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCONTENT[".arrGroupsPerPage"] = $arrGPP;

$tdataCONTENT[".highlightSearchResults"] = true;

$tableKeysCONTENT = array();
$tableKeysCONTENT[] = "CON_CATEGORY";
$tableKeysCONTENT[] = "CON_PARENT";
$tableKeysCONTENT[] = "CON_ID";
$tableKeysCONTENT[] = "CON_LANG";
$tdataCONTENT[".Keys"] = $tableKeysCONTENT;

$tdataCONTENT[".listFields"] = array();
$tdataCONTENT[".listFields"][] = "CON_CATEGORY";
$tdataCONTENT[".listFields"][] = "CON_PARENT";
$tdataCONTENT[".listFields"][] = "CON_ID";
$tdataCONTENT[".listFields"][] = "CON_LANG";
$tdataCONTENT[".listFields"][] = "CON_VALUE";

$tdataCONTENT[".hideMobileList"] = array();


$tdataCONTENT[".viewFields"] = array();
$tdataCONTENT[".viewFields"][] = "CON_CATEGORY";
$tdataCONTENT[".viewFields"][] = "CON_PARENT";
$tdataCONTENT[".viewFields"][] = "CON_ID";
$tdataCONTENT[".viewFields"][] = "CON_LANG";
$tdataCONTENT[".viewFields"][] = "CON_VALUE";

$tdataCONTENT[".addFields"] = array();
$tdataCONTENT[".addFields"][] = "CON_CATEGORY";
$tdataCONTENT[".addFields"][] = "CON_PARENT";
$tdataCONTENT[".addFields"][] = "CON_ID";
$tdataCONTENT[".addFields"][] = "CON_LANG";
$tdataCONTENT[".addFields"][] = "CON_VALUE";

$tdataCONTENT[".masterListFields"] = array();
$tdataCONTENT[".masterListFields"][] = "CON_CATEGORY";
$tdataCONTENT[".masterListFields"][] = "CON_PARENT";
$tdataCONTENT[".masterListFields"][] = "CON_ID";
$tdataCONTENT[".masterListFields"][] = "CON_LANG";
$tdataCONTENT[".masterListFields"][] = "CON_VALUE";

$tdataCONTENT[".inlineAddFields"] = array();
$tdataCONTENT[".inlineAddFields"][] = "CON_CATEGORY";
$tdataCONTENT[".inlineAddFields"][] = "CON_PARENT";
$tdataCONTENT[".inlineAddFields"][] = "CON_ID";
$tdataCONTENT[".inlineAddFields"][] = "CON_LANG";
$tdataCONTENT[".inlineAddFields"][] = "CON_VALUE";

$tdataCONTENT[".editFields"] = array();
$tdataCONTENT[".editFields"][] = "CON_CATEGORY";
$tdataCONTENT[".editFields"][] = "CON_PARENT";
$tdataCONTENT[".editFields"][] = "CON_ID";
$tdataCONTENT[".editFields"][] = "CON_LANG";
$tdataCONTENT[".editFields"][] = "CON_VALUE";

$tdataCONTENT[".inlineEditFields"] = array();
$tdataCONTENT[".inlineEditFields"][] = "CON_CATEGORY";
$tdataCONTENT[".inlineEditFields"][] = "CON_PARENT";
$tdataCONTENT[".inlineEditFields"][] = "CON_ID";
$tdataCONTENT[".inlineEditFields"][] = "CON_LANG";
$tdataCONTENT[".inlineEditFields"][] = "CON_VALUE";

$tdataCONTENT[".updateSelectedFields"] = array();
$tdataCONTENT[".updateSelectedFields"][] = "CON_CATEGORY";
$tdataCONTENT[".updateSelectedFields"][] = "CON_PARENT";
$tdataCONTENT[".updateSelectedFields"][] = "CON_ID";
$tdataCONTENT[".updateSelectedFields"][] = "CON_LANG";
$tdataCONTENT[".updateSelectedFields"][] = "CON_VALUE";


$tdataCONTENT[".exportFields"] = array();
$tdataCONTENT[".exportFields"][] = "CON_CATEGORY";
$tdataCONTENT[".exportFields"][] = "CON_PARENT";
$tdataCONTENT[".exportFields"][] = "CON_ID";
$tdataCONTENT[".exportFields"][] = "CON_LANG";
$tdataCONTENT[".exportFields"][] = "CON_VALUE";

$tdataCONTENT[".importFields"] = array();
$tdataCONTENT[".importFields"][] = "CON_CATEGORY";
$tdataCONTENT[".importFields"][] = "CON_PARENT";
$tdataCONTENT[".importFields"][] = "CON_ID";
$tdataCONTENT[".importFields"][] = "CON_LANG";
$tdataCONTENT[".importFields"][] = "CON_VALUE";

$tdataCONTENT[".printFields"] = array();
$tdataCONTENT[".printFields"][] = "CON_CATEGORY";
$tdataCONTENT[".printFields"][] = "CON_PARENT";
$tdataCONTENT[".printFields"][] = "CON_ID";
$tdataCONTENT[".printFields"][] = "CON_LANG";
$tdataCONTENT[".printFields"][] = "CON_VALUE";

//	CON_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_CATEGORY";
	$fdata["GoodName"] = "CON_CATEGORY";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT","CON_CATEGORY");
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




	$tdataCONTENT["CON_CATEGORY"] = $fdata;
//	CON_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CON_PARENT";
	$fdata["GoodName"] = "CON_PARENT";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT","CON_PARENT");
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




	$tdataCONTENT["CON_PARENT"] = $fdata;
//	CON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CON_ID";
	$fdata["GoodName"] = "CON_ID";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT","CON_ID");
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




	$tdataCONTENT["CON_ID"] = $fdata;
//	CON_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_LANG";
	$fdata["GoodName"] = "CON_LANG";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT","CON_LANG");
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




	$tdataCONTENT["CON_LANG"] = $fdata;
//	CON_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CON_VALUE";
	$fdata["GoodName"] = "CON_VALUE";
	$fdata["ownerTable"] = "CONTENT";
	$fdata["Label"] = GetFieldLabel("CONTENT","CON_VALUE");
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




	$tdataCONTENT["CON_VALUE"] = $fdata;


$tables_data["CONTENT"]=&$tdataCONTENT;
$field_labels["CONTENT"] = &$fieldLabelsCONTENT;
$fieldToolTips["CONTENT"] = &$fieldToolTipsCONTENT;
$placeHolders["CONTENT"] = &$placeHoldersCONTENT;
$page_titles["CONTENT"] = &$pageTitlesCONTENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CONTENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CONTENT"] = array();


	
				$strOriginalDetailsTable="ROUTE";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ROUTE";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ROUTE";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["CONTENT"][0] = $masterParams;
				$masterTablesData["CONTENT"][0]["masterKeys"] = array();
	$masterTablesData["CONTENT"][0]["masterKeys"][]="TAS_UID";
				$masterTablesData["CONTENT"][0]["detailKeys"] = array();
	$masterTablesData["CONTENT"][0]["detailKeys"][]="CON_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CONTENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CON_CATEGORY,  	CON_PARENT,  	CON_ID,  	CON_LANG,  	CON_VALUE";
$proto0["m_strFrom"] = "FROM CONTENT";
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
	"m_strName" => "CON_CATEGORY",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT"
));

$proto6["m_sql"] = "CON_CATEGORY";
$proto6["m_srcTableName"] = "CONTENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_PARENT",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT"
));

$proto8["m_sql"] = "CON_PARENT";
$proto8["m_srcTableName"] = "CONTENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_ID",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT"
));

$proto10["m_sql"] = "CON_ID";
$proto10["m_srcTableName"] = "CONTENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_LANG",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT"
));

$proto12["m_sql"] = "CON_LANG";
$proto12["m_srcTableName"] = "CONTENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_VALUE",
	"m_strTable" => "CONTENT",
	"m_srcTableName" => "CONTENT"
));

$proto14["m_sql"] = "CON_VALUE";
$proto14["m_srcTableName"] = "CONTENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "CONTENT";
$proto17["m_srcTableName"] = "CONTENT";
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
$proto16["m_srcTableName"] = "CONTENT";
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
$proto0["m_srcTableName"]="CONTENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CONTENT = createSqlQuery_CONTENT();


	
						;

					

$tdataCONTENT[".sqlquery"] = $queryData_CONTENT;

$tableEvents["CONTENT"] = new eventsBase;
$tdataCONTENT[".hasEvents"] = false;

?>
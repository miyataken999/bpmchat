<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTRANSLATION = array();
	$tdataTRANSLATION[".truncateText"] = true;
	$tdataTRANSLATION[".NumberOfChars"] = 20;
	$tdataTRANSLATION[".ShortName"] = "TRANSLATION";
	$tdataTRANSLATION[".OwnerID"] = "";
	$tdataTRANSLATION[".OriginalTable"] = "TRANSLATION";

//	field labels
$fieldLabelsTRANSLATION = array();
$fieldToolTipsTRANSLATION = array();
$pageTitlesTRANSLATION = array();
$placeHoldersTRANSLATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTRANSLATION["Japanese"] = array();
	$fieldToolTipsTRANSLATION["Japanese"] = array();
	$placeHoldersTRANSLATION["Japanese"] = array();
	$pageTitlesTRANSLATION["Japanese"] = array();
	$fieldLabelsTRANSLATION["Japanese"]["TRN_CATEGORY"] = "TRNカテゴリ";
	$fieldToolTipsTRANSLATION["Japanese"]["TRN_CATEGORY"] = "";
	$placeHoldersTRANSLATION["Japanese"]["TRN_CATEGORY"] = "";
	$fieldLabelsTRANSLATION["Japanese"]["TRN_ID"] = "TRN番号";
	$fieldToolTipsTRANSLATION["Japanese"]["TRN_ID"] = "";
	$placeHoldersTRANSLATION["Japanese"]["TRN_ID"] = "";
	$fieldLabelsTRANSLATION["Japanese"]["TRN_LANG"] = "TRN LANG";
	$fieldToolTipsTRANSLATION["Japanese"]["TRN_LANG"] = "";
	$placeHoldersTRANSLATION["Japanese"]["TRN_LANG"] = "";
	$fieldLabelsTRANSLATION["Japanese"]["TRN_VALUE"] = "TRN値";
	$fieldToolTipsTRANSLATION["Japanese"]["TRN_VALUE"] = "";
	$placeHoldersTRANSLATION["Japanese"]["TRN_VALUE"] = "";
	$fieldLabelsTRANSLATION["Japanese"]["TRN_UPDATE_DATE"] = "TRNの更新日";
	$fieldToolTipsTRANSLATION["Japanese"]["TRN_UPDATE_DATE"] = "";
	$placeHoldersTRANSLATION["Japanese"]["TRN_UPDATE_DATE"] = "";
	if (count($fieldToolTipsTRANSLATION["Japanese"]))
		$tdataTRANSLATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTRANSLATION["English"] = array();
	$fieldToolTipsTRANSLATION["English"] = array();
	$placeHoldersTRANSLATION["English"] = array();
	$pageTitlesTRANSLATION["English"] = array();
	$fieldLabelsTRANSLATION["English"]["TRN_CATEGORY"] = "TRNカテゴリ";
	$fieldToolTipsTRANSLATION["English"]["TRN_CATEGORY"] = "";
	$placeHoldersTRANSLATION["English"]["TRN_CATEGORY"] = "";
	$fieldLabelsTRANSLATION["English"]["TRN_ID"] = "TRN番号";
	$fieldToolTipsTRANSLATION["English"]["TRN_ID"] = "";
	$placeHoldersTRANSLATION["English"]["TRN_ID"] = "";
	$fieldLabelsTRANSLATION["English"]["TRN_LANG"] = "TRN LANG";
	$fieldToolTipsTRANSLATION["English"]["TRN_LANG"] = "";
	$placeHoldersTRANSLATION["English"]["TRN_LANG"] = "";
	$fieldLabelsTRANSLATION["English"]["TRN_VALUE"] = "TRN値";
	$fieldToolTipsTRANSLATION["English"]["TRN_VALUE"] = "";
	$placeHoldersTRANSLATION["English"]["TRN_VALUE"] = "";
	$fieldLabelsTRANSLATION["English"]["TRN_UPDATE_DATE"] = "TRNの更新日";
	$fieldToolTipsTRANSLATION["English"]["TRN_UPDATE_DATE"] = "";
	$placeHoldersTRANSLATION["English"]["TRN_UPDATE_DATE"] = "";
	if (count($fieldToolTipsTRANSLATION["English"]))
		$tdataTRANSLATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTRANSLATION[""] = array();
	$fieldToolTipsTRANSLATION[""] = array();
	$placeHoldersTRANSLATION[""] = array();
	$pageTitlesTRANSLATION[""] = array();
	if (count($fieldToolTipsTRANSLATION[""]))
		$tdataTRANSLATION[".isUseToolTips"] = true;
}


	$tdataTRANSLATION[".NCSearch"] = true;



$tdataTRANSLATION[".shortTableName"] = "TRANSLATION";
$tdataTRANSLATION[".nSecOptions"] = 0;
$tdataTRANSLATION[".recsPerRowPrint"] = 1;
$tdataTRANSLATION[".mainTableOwnerID"] = "";
$tdataTRANSLATION[".moveNext"] = 0;
$tdataTRANSLATION[".entityType"] = 0;

$tdataTRANSLATION[".strOriginalTableName"] = "TRANSLATION";

	



$tdataTRANSLATION[".showAddInPopup"] = false;

$tdataTRANSLATION[".showEditInPopup"] = false;

$tdataTRANSLATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTRANSLATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTRANSLATION[".fieldsForRegister"] = array();
	
$tdataTRANSLATION[".listAjax"] = false;

	$tdataTRANSLATION[".audit"] = true;

	$tdataTRANSLATION[".locking"] = false;

$tdataTRANSLATION[".edit"] = true;
$tdataTRANSLATION[".afterEditAction"] = 1;
$tdataTRANSLATION[".closePopupAfterEdit"] = 1;
$tdataTRANSLATION[".afterEditActionDetTable"] = "";

$tdataTRANSLATION[".add"] = true;
$tdataTRANSLATION[".afterAddAction"] = 1;
$tdataTRANSLATION[".closePopupAfterAdd"] = 1;
$tdataTRANSLATION[".afterAddActionDetTable"] = "";

$tdataTRANSLATION[".list"] = true;

$tdataTRANSLATION[".inlineEdit"] = true;


$tdataTRANSLATION[".reorderRecordsByHeader"] = true;
$tdataTRANSLATION[".createSortByDropdown"] = true;
$tdataTRANSLATION[".strSortControlSettingsJSON"] = "";



$tdataTRANSLATION[".inlineAdd"] = true;
$tdataTRANSLATION[".view"] = true;

$tdataTRANSLATION[".import"] = true;

$tdataTRANSLATION[".exportTo"] = true;

$tdataTRANSLATION[".printFriendly"] = true;

$tdataTRANSLATION[".delete"] = true;

$tdataTRANSLATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataTRANSLATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataTRANSLATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataTRANSLATION[".searchSaving"] = false;
//

$tdataTRANSLATION[".showSearchPanel"] = true;
		$tdataTRANSLATION[".flexibleSearch"] = true;

$tdataTRANSLATION[".isUseAjaxSuggest"] = true;

$tdataTRANSLATION[".rowHighlite"] = true;



				

$tdataTRANSLATION[".ajaxCodeSnippetAdded"] = false;

$tdataTRANSLATION[".buttonsAdded"] = false;

$tdataTRANSLATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTRANSLATION[".isUseTimeForSearch"] = false;





$tdataTRANSLATION[".allSearchFields"] = array();
$tdataTRANSLATION[".filterFields"] = array();
$tdataTRANSLATION[".requiredSearchFields"] = array();

$tdataTRANSLATION[".allSearchFields"][] = "TRN_CATEGORY";
	$tdataTRANSLATION[".allSearchFields"][] = "TRN_ID";
	$tdataTRANSLATION[".allSearchFields"][] = "TRN_LANG";
	$tdataTRANSLATION[".allSearchFields"][] = "TRN_VALUE";
	$tdataTRANSLATION[".allSearchFields"][] = "TRN_UPDATE_DATE";
	

$tdataTRANSLATION[".googleLikeFields"] = array();
$tdataTRANSLATION[".googleLikeFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".googleLikeFields"][] = "TRN_ID";
$tdataTRANSLATION[".googleLikeFields"][] = "TRN_LANG";
$tdataTRANSLATION[".googleLikeFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".googleLikeFields"][] = "TRN_UPDATE_DATE";


$tdataTRANSLATION[".advSearchFields"] = array();
$tdataTRANSLATION[".advSearchFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".advSearchFields"][] = "TRN_ID";
$tdataTRANSLATION[".advSearchFields"][] = "TRN_LANG";
$tdataTRANSLATION[".advSearchFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".advSearchFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".tableType"] = "list";

$tdataTRANSLATION[".printerPageOrientation"] = 0;
$tdataTRANSLATION[".nPrinterPageScale"] = 100;

$tdataTRANSLATION[".nPrinterSplitRecords"] = 40;

$tdataTRANSLATION[".nPrinterPDFSplitRecords"] = 40;



$tdataTRANSLATION[".geocodingEnabled"] = false;





$tdataTRANSLATION[".listGridLayout"] = 3;


$tdataTRANSLATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataTRANSLATION[".pageSize"] = 20;

$tdataTRANSLATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTRANSLATION[".strOrderBy"] = $tstrOrderBy;

$tdataTRANSLATION[".orderindexes"] = array();

$tdataTRANSLATION[".sqlHead"] = "SELECT TRN_CATEGORY,  	TRN_ID,  	TRN_LANG,  	TRN_VALUE,  	TRN_UPDATE_DATE";
$tdataTRANSLATION[".sqlFrom"] = "FROM `TRANSLATION`";
$tdataTRANSLATION[".sqlWhereExpr"] = "";
$tdataTRANSLATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTRANSLATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTRANSLATION[".arrGroupsPerPage"] = $arrGPP;

$tdataTRANSLATION[".highlightSearchResults"] = true;

$tableKeysTRANSLATION = array();
$tableKeysTRANSLATION[] = "TRN_CATEGORY";
$tableKeysTRANSLATION[] = "TRN_ID";
$tableKeysTRANSLATION[] = "TRN_LANG";
$tdataTRANSLATION[".Keys"] = $tableKeysTRANSLATION;

$tdataTRANSLATION[".listFields"] = array();
$tdataTRANSLATION[".listFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".listFields"][] = "TRN_ID";
$tdataTRANSLATION[".listFields"][] = "TRN_LANG";
$tdataTRANSLATION[".listFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".listFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".hideMobileList"] = array();


$tdataTRANSLATION[".viewFields"] = array();
$tdataTRANSLATION[".viewFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".viewFields"][] = "TRN_ID";
$tdataTRANSLATION[".viewFields"][] = "TRN_LANG";
$tdataTRANSLATION[".viewFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".viewFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".addFields"] = array();
$tdataTRANSLATION[".addFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".addFields"][] = "TRN_ID";
$tdataTRANSLATION[".addFields"][] = "TRN_LANG";
$tdataTRANSLATION[".addFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".addFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".masterListFields"] = array();
$tdataTRANSLATION[".masterListFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".masterListFields"][] = "TRN_ID";
$tdataTRANSLATION[".masterListFields"][] = "TRN_LANG";
$tdataTRANSLATION[".masterListFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".masterListFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".inlineAddFields"] = array();
$tdataTRANSLATION[".inlineAddFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".inlineAddFields"][] = "TRN_ID";
$tdataTRANSLATION[".inlineAddFields"][] = "TRN_LANG";
$tdataTRANSLATION[".inlineAddFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".inlineAddFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".editFields"] = array();
$tdataTRANSLATION[".editFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".editFields"][] = "TRN_ID";
$tdataTRANSLATION[".editFields"][] = "TRN_LANG";
$tdataTRANSLATION[".editFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".editFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".inlineEditFields"] = array();
$tdataTRANSLATION[".inlineEditFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".inlineEditFields"][] = "TRN_ID";
$tdataTRANSLATION[".inlineEditFields"][] = "TRN_LANG";
$tdataTRANSLATION[".inlineEditFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".inlineEditFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".updateSelectedFields"] = array();
$tdataTRANSLATION[".updateSelectedFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".updateSelectedFields"][] = "TRN_ID";
$tdataTRANSLATION[".updateSelectedFields"][] = "TRN_LANG";
$tdataTRANSLATION[".updateSelectedFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".updateSelectedFields"][] = "TRN_UPDATE_DATE";


$tdataTRANSLATION[".exportFields"] = array();
$tdataTRANSLATION[".exportFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".exportFields"][] = "TRN_ID";
$tdataTRANSLATION[".exportFields"][] = "TRN_LANG";
$tdataTRANSLATION[".exportFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".exportFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".importFields"] = array();
$tdataTRANSLATION[".importFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".importFields"][] = "TRN_ID";
$tdataTRANSLATION[".importFields"][] = "TRN_LANG";
$tdataTRANSLATION[".importFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".importFields"][] = "TRN_UPDATE_DATE";

$tdataTRANSLATION[".printFields"] = array();
$tdataTRANSLATION[".printFields"][] = "TRN_CATEGORY";
$tdataTRANSLATION[".printFields"][] = "TRN_ID";
$tdataTRANSLATION[".printFields"][] = "TRN_LANG";
$tdataTRANSLATION[".printFields"][] = "TRN_VALUE";
$tdataTRANSLATION[".printFields"][] = "TRN_UPDATE_DATE";

//	TRN_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TRN_CATEGORY";
	$fdata["GoodName"] = "TRN_CATEGORY";
	$fdata["ownerTable"] = "TRANSLATION";
	$fdata["Label"] = GetFieldLabel("TRANSLATION","TRN_CATEGORY");
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

		$fdata["strField"] = "TRN_CATEGORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRN_CATEGORY";

	
	
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




	$tdataTRANSLATION["TRN_CATEGORY"] = $fdata;
//	TRN_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TRN_ID";
	$fdata["GoodName"] = "TRN_ID";
	$fdata["ownerTable"] = "TRANSLATION";
	$fdata["Label"] = GetFieldLabel("TRANSLATION","TRN_ID");
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

		$fdata["strField"] = "TRN_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRN_ID";

	
	
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




	$tdataTRANSLATION["TRN_ID"] = $fdata;
//	TRN_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TRN_LANG";
	$fdata["GoodName"] = "TRN_LANG";
	$fdata["ownerTable"] = "TRANSLATION";
	$fdata["Label"] = GetFieldLabel("TRANSLATION","TRN_LANG");
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

		$fdata["strField"] = "TRN_LANG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRN_LANG";

	
	
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




	$tdataTRANSLATION["TRN_LANG"] = $fdata;
//	TRN_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TRN_VALUE";
	$fdata["GoodName"] = "TRN_VALUE";
	$fdata["ownerTable"] = "TRANSLATION";
	$fdata["Label"] = GetFieldLabel("TRANSLATION","TRN_VALUE");
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

		$fdata["strField"] = "TRN_VALUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRN_VALUE";

	
	
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




	$tdataTRANSLATION["TRN_VALUE"] = $fdata;
//	TRN_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TRN_UPDATE_DATE";
	$fdata["GoodName"] = "TRN_UPDATE_DATE";
	$fdata["ownerTable"] = "TRANSLATION";
	$fdata["Label"] = GetFieldLabel("TRANSLATION","TRN_UPDATE_DATE");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "TRN_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRN_UPDATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataTRANSLATION["TRN_UPDATE_DATE"] = $fdata;


$tables_data["TRANSLATION"]=&$tdataTRANSLATION;
$field_labels["TRANSLATION"] = &$fieldLabelsTRANSLATION;
$fieldToolTips["TRANSLATION"] = &$fieldToolTipsTRANSLATION;
$placeHolders["TRANSLATION"] = &$placeHoldersTRANSLATION;
$page_titles["TRANSLATION"] = &$pageTitlesTRANSLATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TRANSLATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TRANSLATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TRANSLATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TRN_CATEGORY,  	TRN_ID,  	TRN_LANG,  	TRN_VALUE,  	TRN_UPDATE_DATE";
$proto0["m_strFrom"] = "FROM `TRANSLATION`";
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
	"m_strName" => "TRN_CATEGORY",
	"m_strTable" => "TRANSLATION",
	"m_srcTableName" => "TRANSLATION"
));

$proto6["m_sql"] = "TRN_CATEGORY";
$proto6["m_srcTableName"] = "TRANSLATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TRN_ID",
	"m_strTable" => "TRANSLATION",
	"m_srcTableName" => "TRANSLATION"
));

$proto8["m_sql"] = "TRN_ID";
$proto8["m_srcTableName"] = "TRANSLATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TRN_LANG",
	"m_strTable" => "TRANSLATION",
	"m_srcTableName" => "TRANSLATION"
));

$proto10["m_sql"] = "TRN_LANG";
$proto10["m_srcTableName"] = "TRANSLATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TRN_VALUE",
	"m_strTable" => "TRANSLATION",
	"m_srcTableName" => "TRANSLATION"
));

$proto12["m_sql"] = "TRN_VALUE";
$proto12["m_srcTableName"] = "TRANSLATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TRN_UPDATE_DATE",
	"m_strTable" => "TRANSLATION",
	"m_srcTableName" => "TRANSLATION"
));

$proto14["m_sql"] = "TRN_UPDATE_DATE";
$proto14["m_srcTableName"] = "TRANSLATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "TRANSLATION";
$proto17["m_srcTableName"] = "TRANSLATION";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "TRN_CATEGORY";
$proto17["m_columns"][] = "TRN_ID";
$proto17["m_columns"][] = "TRN_LANG";
$proto17["m_columns"][] = "TRN_VALUE";
$proto17["m_columns"][] = "TRN_UPDATE_DATE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`TRANSLATION`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "TRANSLATION";
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
$proto0["m_srcTableName"]="TRANSLATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TRANSLATION = createSqlQuery_TRANSLATION();


	
						;

					

$tdataTRANSLATION[".sqlquery"] = $queryData_TRANSLATION;

$tableEvents["TRANSLATION"] = new eventsBase;
$tdataTRANSLATION[".hasEvents"] = false;

?>
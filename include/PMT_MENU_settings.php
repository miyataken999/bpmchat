<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_MENU = array();
	$tdataPMT_MENU[".truncateText"] = true;
	$tdataPMT_MENU[".NumberOfChars"] = 20;
	$tdataPMT_MENU[".ShortName"] = "PMT_MENU";
	$tdataPMT_MENU[".OwnerID"] = "";
	$tdataPMT_MENU[".OriginalTable"] = "PMT_MENU";

//	field labels
$fieldLabelsPMT_MENU = array();
$fieldToolTipsPMT_MENU = array();
$pageTitlesPMT_MENU = array();
$placeHoldersPMT_MENU = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_MENU["Japanese"] = array();
	$fieldToolTipsPMT_MENU["Japanese"] = array();
	$placeHoldersPMT_MENU["Japanese"] = array();
	$pageTitlesPMT_MENU["Japanese"] = array();
	$fieldLabelsPMT_MENU["Japanese"]["MENU_ID"] = "メニューID";
	$fieldToolTipsPMT_MENU["Japanese"]["MENU_ID"] = "";
	$placeHoldersPMT_MENU["Japanese"]["MENU_ID"] = "";
	$fieldLabelsPMT_MENU["Japanese"]["MENU_URL"] = "メニューのURL";
	$fieldToolTipsPMT_MENU["Japanese"]["MENU_URL"] = "";
	$placeHoldersPMT_MENU["Japanese"]["MENU_URL"] = "";
	$fieldLabelsPMT_MENU["Japanese"]["MENU_PAL"] = "メニューPAL";
	$fieldToolTipsPMT_MENU["Japanese"]["MENU_PAL"] = "";
	$placeHoldersPMT_MENU["Japanese"]["MENU_PAL"] = "";
	$fieldLabelsPMT_MENU["Japanese"]["MENU_VAL"] = "メニューヴァル";
	$fieldToolTipsPMT_MENU["Japanese"]["MENU_VAL"] = "";
	$placeHoldersPMT_MENU["Japanese"]["MENU_VAL"] = "";
	$fieldLabelsPMT_MENU["Japanese"]["MENU_SORT"] = "メニューの並べ替え";
	$fieldToolTipsPMT_MENU["Japanese"]["MENU_SORT"] = "";
	$placeHoldersPMT_MENU["Japanese"]["MENU_SORT"] = "";
	if (count($fieldToolTipsPMT_MENU["Japanese"]))
		$tdataPMT_MENU[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_MENU["English"] = array();
	$fieldToolTipsPMT_MENU["English"] = array();
	$placeHoldersPMT_MENU["English"] = array();
	$pageTitlesPMT_MENU["English"] = array();
	$fieldLabelsPMT_MENU["English"]["MENU_ID"] = "メニューID";
	$fieldToolTipsPMT_MENU["English"]["MENU_ID"] = "";
	$placeHoldersPMT_MENU["English"]["MENU_ID"] = "";
	$fieldLabelsPMT_MENU["English"]["MENU_URL"] = "メニューのURL";
	$fieldToolTipsPMT_MENU["English"]["MENU_URL"] = "";
	$placeHoldersPMT_MENU["English"]["MENU_URL"] = "";
	$fieldLabelsPMT_MENU["English"]["MENU_PAL"] = "メニューPAL";
	$fieldToolTipsPMT_MENU["English"]["MENU_PAL"] = "";
	$placeHoldersPMT_MENU["English"]["MENU_PAL"] = "";
	$fieldLabelsPMT_MENU["English"]["MENU_VAL"] = "メニューヴァル";
	$fieldToolTipsPMT_MENU["English"]["MENU_VAL"] = "";
	$placeHoldersPMT_MENU["English"]["MENU_VAL"] = "";
	$fieldLabelsPMT_MENU["English"]["MENU_SORT"] = "メニューの並べ替え";
	$fieldToolTipsPMT_MENU["English"]["MENU_SORT"] = "";
	$placeHoldersPMT_MENU["English"]["MENU_SORT"] = "";
	if (count($fieldToolTipsPMT_MENU["English"]))
		$tdataPMT_MENU[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_MENU[""] = array();
	$fieldToolTipsPMT_MENU[""] = array();
	$placeHoldersPMT_MENU[""] = array();
	$pageTitlesPMT_MENU[""] = array();
	if (count($fieldToolTipsPMT_MENU[""]))
		$tdataPMT_MENU[".isUseToolTips"] = true;
}


	$tdataPMT_MENU[".NCSearch"] = true;



$tdataPMT_MENU[".shortTableName"] = "PMT_MENU";
$tdataPMT_MENU[".nSecOptions"] = 0;
$tdataPMT_MENU[".recsPerRowPrint"] = 1;
$tdataPMT_MENU[".mainTableOwnerID"] = "";
$tdataPMT_MENU[".moveNext"] = 0;
$tdataPMT_MENU[".entityType"] = 0;

$tdataPMT_MENU[".strOriginalTableName"] = "PMT_MENU";

	



$tdataPMT_MENU[".showAddInPopup"] = false;

$tdataPMT_MENU[".showEditInPopup"] = false;

$tdataPMT_MENU[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_MENU[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_MENU[".fieldsForRegister"] = array();
	
$tdataPMT_MENU[".listAjax"] = false;

	$tdataPMT_MENU[".audit"] = true;

	$tdataPMT_MENU[".locking"] = false;

$tdataPMT_MENU[".edit"] = true;
$tdataPMT_MENU[".afterEditAction"] = 1;
$tdataPMT_MENU[".closePopupAfterEdit"] = 1;
$tdataPMT_MENU[".afterEditActionDetTable"] = "";

$tdataPMT_MENU[".add"] = true;
$tdataPMT_MENU[".afterAddAction"] = 1;
$tdataPMT_MENU[".closePopupAfterAdd"] = 1;
$tdataPMT_MENU[".afterAddActionDetTable"] = "";

$tdataPMT_MENU[".list"] = true;

$tdataPMT_MENU[".inlineEdit"] = true;

$tdataPMT_MENU[".updateSelected"] = true;

$tdataPMT_MENU[".reorderRecordsByHeader"] = true;
$tdataPMT_MENU[".createSortByDropdown"] = true;
$tdataPMT_MENU[".strSortControlSettingsJSON"] = "";



$tdataPMT_MENU[".inlineAdd"] = true;
$tdataPMT_MENU[".copy"] = true;
$tdataPMT_MENU[".view"] = true;

$tdataPMT_MENU[".import"] = true;

$tdataPMT_MENU[".exportTo"] = true;

$tdataPMT_MENU[".printFriendly"] = true;

$tdataPMT_MENU[".delete"] = true;

$tdataPMT_MENU[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPMT_MENU[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPMT_MENU[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPMT_MENU[".searchSaving"] = false;
//

$tdataPMT_MENU[".showSearchPanel"] = true;
		$tdataPMT_MENU[".flexibleSearch"] = true;

$tdataPMT_MENU[".isUseAjaxSuggest"] = true;

$tdataPMT_MENU[".rowHighlite"] = true;



																

$tdataPMT_MENU[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_MENU[".buttonsAdded"] = false;

$tdataPMT_MENU[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_MENU[".isUseTimeForSearch"] = false;



$tdataPMT_MENU[".badgeColor"] = "00c2c5";


$tdataPMT_MENU[".allSearchFields"] = array();
$tdataPMT_MENU[".filterFields"] = array();
$tdataPMT_MENU[".requiredSearchFields"] = array();

$tdataPMT_MENU[".allSearchFields"][] = "MENU_SORT";
	$tdataPMT_MENU[".allSearchFields"][] = "MENU_ID";
	$tdataPMT_MENU[".allSearchFields"][] = "MENU_VAL";
	$tdataPMT_MENU[".allSearchFields"][] = "MENU_URL";
	$tdataPMT_MENU[".allSearchFields"][] = "MENU_PAL";
	

$tdataPMT_MENU[".googleLikeFields"] = array();
$tdataPMT_MENU[".googleLikeFields"][] = "MENU_ID";
$tdataPMT_MENU[".googleLikeFields"][] = "MENU_URL";
$tdataPMT_MENU[".googleLikeFields"][] = "MENU_PAL";
$tdataPMT_MENU[".googleLikeFields"][] = "MENU_VAL";
$tdataPMT_MENU[".googleLikeFields"][] = "MENU_SORT";


$tdataPMT_MENU[".advSearchFields"] = array();
$tdataPMT_MENU[".advSearchFields"][] = "MENU_SORT";
$tdataPMT_MENU[".advSearchFields"][] = "MENU_ID";
$tdataPMT_MENU[".advSearchFields"][] = "MENU_VAL";
$tdataPMT_MENU[".advSearchFields"][] = "MENU_URL";
$tdataPMT_MENU[".advSearchFields"][] = "MENU_PAL";

$tdataPMT_MENU[".tableType"] = "list";

$tdataPMT_MENU[".printerPageOrientation"] = 0;
$tdataPMT_MENU[".nPrinterPageScale"] = 100;

$tdataPMT_MENU[".nPrinterSplitRecords"] = 40;

$tdataPMT_MENU[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_MENU[".geocodingEnabled"] = false;





$tdataPMT_MENU[".listGridLayout"] = 3;


$tdataPMT_MENU[".isResizeColumns"] = true;



// view page pdf
$tdataPMT_MENU[".isViewPagePDF"] = true;
$tdataPMT_MENU[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataPMT_MENU[".isPrinterPagePDF"] = true;
$tdataPMT_MENU[".nPrinterPagePDFScale"] = 100;


$tdataPMT_MENU[".pageSize"] = 20;

$tdataPMT_MENU[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY MENU_SORT";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_MENU[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_MENU[".orderindexes"] = array();
$tdataPMT_MENU[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "MENU_SORT");

$tdataPMT_MENU[".sqlHead"] = "SELECT MENU_ID,  MENU_URL,  MENU_PAL,  MENU_VAL,  MENU_SORT";
$tdataPMT_MENU[".sqlFrom"] = "FROM PMT_MENU";
$tdataPMT_MENU[".sqlWhereExpr"] = "(MENU_PAL = 0)";
$tdataPMT_MENU[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_MENU[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_MENU[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_MENU[".highlightSearchResults"] = true;

$tableKeysPMT_MENU = array();
$tableKeysPMT_MENU[] = "MENU_ID";
$tdataPMT_MENU[".Keys"] = $tableKeysPMT_MENU;

$tdataPMT_MENU[".listFields"] = array();
$tdataPMT_MENU[".listFields"][] = "MENU_SORT";
$tdataPMT_MENU[".listFields"][] = "MENU_ID";
$tdataPMT_MENU[".listFields"][] = "MENU_VAL";
$tdataPMT_MENU[".listFields"][] = "MENU_URL";
$tdataPMT_MENU[".listFields"][] = "MENU_PAL";

$tdataPMT_MENU[".hideMobileList"] = array();


$tdataPMT_MENU[".viewFields"] = array();
$tdataPMT_MENU[".viewFields"][] = "MENU_SORT";
$tdataPMT_MENU[".viewFields"][] = "MENU_ID";
$tdataPMT_MENU[".viewFields"][] = "MENU_VAL";
$tdataPMT_MENU[".viewFields"][] = "MENU_URL";
$tdataPMT_MENU[".viewFields"][] = "MENU_PAL";

$tdataPMT_MENU[".addFields"] = array();
$tdataPMT_MENU[".addFields"][] = "MENU_SORT";
$tdataPMT_MENU[".addFields"][] = "MENU_VAL";
$tdataPMT_MENU[".addFields"][] = "MENU_URL";
$tdataPMT_MENU[".addFields"][] = "MENU_PAL";

$tdataPMT_MENU[".masterListFields"] = array();
$tdataPMT_MENU[".masterListFields"][] = "MENU_SORT";
$tdataPMT_MENU[".masterListFields"][] = "MENU_ID";
$tdataPMT_MENU[".masterListFields"][] = "MENU_VAL";
$tdataPMT_MENU[".masterListFields"][] = "MENU_URL";
$tdataPMT_MENU[".masterListFields"][] = "MENU_PAL";

$tdataPMT_MENU[".inlineAddFields"] = array();
$tdataPMT_MENU[".inlineAddFields"][] = "MENU_SORT";
$tdataPMT_MENU[".inlineAddFields"][] = "MENU_VAL";
$tdataPMT_MENU[".inlineAddFields"][] = "MENU_URL";
$tdataPMT_MENU[".inlineAddFields"][] = "MENU_PAL";

$tdataPMT_MENU[".editFields"] = array();
$tdataPMT_MENU[".editFields"][] = "MENU_SORT";
$tdataPMT_MENU[".editFields"][] = "MENU_VAL";
$tdataPMT_MENU[".editFields"][] = "MENU_URL";
$tdataPMT_MENU[".editFields"][] = "MENU_PAL";

$tdataPMT_MENU[".inlineEditFields"] = array();
$tdataPMT_MENU[".inlineEditFields"][] = "MENU_SORT";
$tdataPMT_MENU[".inlineEditFields"][] = "MENU_VAL";
$tdataPMT_MENU[".inlineEditFields"][] = "MENU_URL";
$tdataPMT_MENU[".inlineEditFields"][] = "MENU_PAL";

$tdataPMT_MENU[".updateSelectedFields"] = array();
$tdataPMT_MENU[".updateSelectedFields"][] = "MENU_SORT";
$tdataPMT_MENU[".updateSelectedFields"][] = "MENU_VAL";
$tdataPMT_MENU[".updateSelectedFields"][] = "MENU_URL";
$tdataPMT_MENU[".updateSelectedFields"][] = "MENU_PAL";


$tdataPMT_MENU[".exportFields"] = array();
$tdataPMT_MENU[".exportFields"][] = "MENU_SORT";
$tdataPMT_MENU[".exportFields"][] = "MENU_ID";
$tdataPMT_MENU[".exportFields"][] = "MENU_VAL";
$tdataPMT_MENU[".exportFields"][] = "MENU_URL";
$tdataPMT_MENU[".exportFields"][] = "MENU_PAL";

$tdataPMT_MENU[".importFields"] = array();
$tdataPMT_MENU[".importFields"][] = "MENU_ID";
$tdataPMT_MENU[".importFields"][] = "MENU_URL";
$tdataPMT_MENU[".importFields"][] = "MENU_PAL";
$tdataPMT_MENU[".importFields"][] = "MENU_VAL";
$tdataPMT_MENU[".importFields"][] = "MENU_SORT";

$tdataPMT_MENU[".printFields"] = array();
$tdataPMT_MENU[".printFields"][] = "MENU_SORT";
$tdataPMT_MENU[".printFields"][] = "MENU_ID";
$tdataPMT_MENU[".printFields"][] = "MENU_VAL";
$tdataPMT_MENU[".printFields"][] = "MENU_URL";
$tdataPMT_MENU[".printFields"][] = "MENU_PAL";

//	MENU_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MENU_ID";
	$fdata["GoodName"] = "MENU_ID";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU","MENU_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MENU_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MENU_ID";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_MENU["MENU_ID"] = $fdata;
//	MENU_URL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MENU_URL";
	$fdata["GoodName"] = "MENU_URL";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU","MENU_URL");
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

		$fdata["strField"] = "MENU_URL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MENU_URL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdataPMT_MENU["MENU_URL"] = $fdata;
//	MENU_PAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MENU_PAL";
	$fdata["GoodName"] = "MENU_PAL";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU","MENU_PAL");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "MENU_PAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MENU_PAL";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_MENU["MENU_PAL"] = $fdata;
//	MENU_VAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MENU_VAL";
	$fdata["GoodName"] = "MENU_VAL";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU","MENU_VAL");
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

		$fdata["strField"] = "MENU_VAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MENU_VAL";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataPMT_MENU["MENU_VAL"] = $fdata;
//	MENU_SORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MENU_SORT";
	$fdata["GoodName"] = "MENU_SORT";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU","MENU_SORT");
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

		$fdata["strField"] = "MENU_SORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MENU_SORT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_MENU["MENU_SORT"] = $fdata;


$tables_data["PMT_MENU"]=&$tdataPMT_MENU;
$field_labels["PMT_MENU"] = &$fieldLabelsPMT_MENU;
$fieldToolTips["PMT_MENU"] = &$fieldToolTipsPMT_MENU;
$placeHolders["PMT_MENU"] = &$placeHoldersPMT_MENU;
$page_titles["PMT_MENU"] = &$pageTitlesPMT_MENU;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_MENU"] = array();
//	PMT_MENU1
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_MENU1";
		$detailsParam["dOriginalTable"] = "PMT_MENU";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_MENU1";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_MENU1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PMT_MENU"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_MENU"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_MENU"][$dIndex]["masterKeys"][]="MENU_ID";

				$detailsTablesData["PMT_MENU"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_MENU"][$dIndex]["detailKeys"][]="MENU_PAL";
//	ABE_CONFIGURATION
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ABE_CONFIGURATION";
		$detailsParam["dOriginalTable"] = "ABE_CONFIGURATION";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ABE_CONFIGURATION";
	$detailsParam["dCaptionTable"] = GetTableCaption("ABE_CONFIGURATION");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["PMT_MENU"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_MENU"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_MENU"][$dIndex]["masterKeys"][]="MENU_URL";

				$detailsTablesData["PMT_MENU"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_MENU"][$dIndex]["detailKeys"][]="PRO_UID";
//	PMT_COMMAND
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_COMMAND";
		$detailsParam["dOriginalTable"] = "PMT_COMMAND";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_COMMAND";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_COMMAND");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["PMT_MENU"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_MENU"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_MENU"][$dIndex]["masterKeys"][]="MENU_ID";

				$detailsTablesData["PMT_MENU"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_MENU"][$dIndex]["detailKeys"][]="cmd";

// tables which are master tables for current table (detail)
$masterTablesData["PMT_MENU"] = array();


	
				$strOriginalDetailsTable="ABE_REQUESTS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ABE_REQUESTS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ABE_REQUESTS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["PMT_MENU"][0] = $masterParams;
				$masterTablesData["PMT_MENU"][0]["masterKeys"] = array();
	$masterTablesData["PMT_MENU"][0]["masterKeys"][]="ABE_UID";
				$masterTablesData["PMT_MENU"][0]["detailKeys"] = array();
	$masterTablesData["PMT_MENU"][0]["detailKeys"][]="MENU_URL";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_MENU()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MENU_ID,  MENU_URL,  MENU_PAL,  MENU_VAL,  MENU_SORT";
$proto0["m_strFrom"] = "FROM PMT_MENU";
$proto0["m_strWhere"] = "(MENU_PAL = 0)";
$proto0["m_strOrderBy"] = "ORDER BY MENU_SORT";
$proto0["m_strTail"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "MENU_PAL = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MENU_PAL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 0";
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
	"m_strName" => "MENU_ID",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto6["m_sql"] = "MENU_ID";
$proto6["m_srcTableName"] = "PMT_MENU";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_URL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto8["m_sql"] = "MENU_URL";
$proto8["m_srcTableName"] = "PMT_MENU";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_PAL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto10["m_sql"] = "MENU_PAL";
$proto10["m_srcTableName"] = "PMT_MENU";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_VAL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto12["m_sql"] = "MENU_VAL";
$proto12["m_srcTableName"] = "PMT_MENU";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_SORT",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto14["m_sql"] = "MENU_SORT";
$proto14["m_srcTableName"] = "PMT_MENU";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "PMT_MENU";
$proto17["m_srcTableName"] = "PMT_MENU";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "APP_UID";
$proto17["m_columns"][] = "MENU_ID";
$proto17["m_columns"][] = "MENU_URL";
$proto17["m_columns"][] = "MENU_PAL";
$proto17["m_columns"][] = "MENU_VAL";
$proto17["m_columns"][] = "MENU_SORT";
$proto17["m_columns"][] = "F";
$proto17["m_columns"][] = "G";
$proto17["m_columns"][] = "H";
$proto17["m_columns"][] = "I";
$proto17["m_columns"][] = "J";
$proto17["m_columns"][] = "K";
$proto17["m_columns"][] = "E_LABEL";
$proto17["m_columns"][] = "A_LABEL";
$proto17["m_columns"][] = "B_LABEL";
$proto17["m_columns"][] = "C_LABEL";
$proto17["m_columns"][] = "D_LABEL";
$proto17["m_columns"][] = "APP_NUMBER";
$proto17["m_columns"][] = "APP_STATUS";
$proto17["m_columns"][] = "ROW";
$proto17["m_columns"][] = "EMPLOYEE_NO";
$proto17["m_columns"][] = "TIME";
$proto17["m_columns"][] = "MONTHLY_REPORT";
$proto17["m_columns"][] = "BUSINESS_CONFIRMATION_17";
$proto17["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto17["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "PMT_MENU";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "PMT_MENU";
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
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "MENU_SORT",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PMT_MENU";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_MENU = createSqlQuery_PMT_MENU();


	
						;

					

$tdataPMT_MENU[".sqlquery"] = $queryData_PMT_MENU;

include_once(getabspath("include/PMT_MENU_events.php"));
$tableEvents["PMT_MENU"] = new eventclass_PMT_MENU;
$tdataPMT_MENU[".hasEvents"] = true;

?>
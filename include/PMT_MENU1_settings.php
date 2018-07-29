<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_MENU1 = array();
	$tdataPMT_MENU1[".truncateText"] = true;
	$tdataPMT_MENU1[".NumberOfChars"] = 20;
	$tdataPMT_MENU1[".ShortName"] = "PMT_MENU1";
	$tdataPMT_MENU1[".OwnerID"] = "";
	$tdataPMT_MENU1[".OriginalTable"] = "PMT_MENU";

//	field labels
$fieldLabelsPMT_MENU1 = array();
$fieldToolTipsPMT_MENU1 = array();
$pageTitlesPMT_MENU1 = array();
$placeHoldersPMT_MENU1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_MENU1["Japanese"] = array();
	$fieldToolTipsPMT_MENU1["Japanese"] = array();
	$placeHoldersPMT_MENU1["Japanese"] = array();
	$pageTitlesPMT_MENU1["Japanese"] = array();
	$fieldLabelsPMT_MENU1["Japanese"]["MENU_ID"] = "メニューID";
	$fieldToolTipsPMT_MENU1["Japanese"]["MENU_ID"] = "";
	$placeHoldersPMT_MENU1["Japanese"]["MENU_ID"] = "";
	$fieldLabelsPMT_MENU1["Japanese"]["MENU_URL"] = "メニューのURL";
	$fieldToolTipsPMT_MENU1["Japanese"]["MENU_URL"] = "";
	$placeHoldersPMT_MENU1["Japanese"]["MENU_URL"] = "";
	$fieldLabelsPMT_MENU1["Japanese"]["MENU_PAL"] = "メニューPAL";
	$fieldToolTipsPMT_MENU1["Japanese"]["MENU_PAL"] = "";
	$placeHoldersPMT_MENU1["Japanese"]["MENU_PAL"] = "";
	$fieldLabelsPMT_MENU1["Japanese"]["MENU_VAL"] = "メニューヴァル";
	$fieldToolTipsPMT_MENU1["Japanese"]["MENU_VAL"] = "";
	$placeHoldersPMT_MENU1["Japanese"]["MENU_VAL"] = "";
	$fieldLabelsPMT_MENU1["Japanese"]["MENU_SORT"] = "メニューの並べ替え";
	$fieldToolTipsPMT_MENU1["Japanese"]["MENU_SORT"] = "";
	$placeHoldersPMT_MENU1["Japanese"]["MENU_SORT"] = "";
	if (count($fieldToolTipsPMT_MENU1["Japanese"]))
		$tdataPMT_MENU1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_MENU1["English"] = array();
	$fieldToolTipsPMT_MENU1["English"] = array();
	$placeHoldersPMT_MENU1["English"] = array();
	$pageTitlesPMT_MENU1["English"] = array();
	$fieldLabelsPMT_MENU1["English"]["MENU_ID"] = "メニューID";
	$fieldToolTipsPMT_MENU1["English"]["MENU_ID"] = "";
	$placeHoldersPMT_MENU1["English"]["MENU_ID"] = "";
	$fieldLabelsPMT_MENU1["English"]["MENU_URL"] = "メニューのURL";
	$fieldToolTipsPMT_MENU1["English"]["MENU_URL"] = "";
	$placeHoldersPMT_MENU1["English"]["MENU_URL"] = "";
	$fieldLabelsPMT_MENU1["English"]["MENU_PAL"] = "メニューPAL";
	$fieldToolTipsPMT_MENU1["English"]["MENU_PAL"] = "";
	$placeHoldersPMT_MENU1["English"]["MENU_PAL"] = "";
	$fieldLabelsPMT_MENU1["English"]["MENU_VAL"] = "メニューヴァル";
	$fieldToolTipsPMT_MENU1["English"]["MENU_VAL"] = "";
	$placeHoldersPMT_MENU1["English"]["MENU_VAL"] = "";
	$fieldLabelsPMT_MENU1["English"]["MENU_SORT"] = "メニューの並べ替え";
	$fieldToolTipsPMT_MENU1["English"]["MENU_SORT"] = "";
	$placeHoldersPMT_MENU1["English"]["MENU_SORT"] = "";
	if (count($fieldToolTipsPMT_MENU1["English"]))
		$tdataPMT_MENU1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_MENU1[""] = array();
	$fieldToolTipsPMT_MENU1[""] = array();
	$placeHoldersPMT_MENU1[""] = array();
	$pageTitlesPMT_MENU1[""] = array();
	if (count($fieldToolTipsPMT_MENU1[""]))
		$tdataPMT_MENU1[".isUseToolTips"] = true;
}


	$tdataPMT_MENU1[".NCSearch"] = true;



$tdataPMT_MENU1[".shortTableName"] = "PMT_MENU1";
$tdataPMT_MENU1[".nSecOptions"] = 0;
$tdataPMT_MENU1[".recsPerRowPrint"] = 1;
$tdataPMT_MENU1[".mainTableOwnerID"] = "";
$tdataPMT_MENU1[".moveNext"] = 0;
$tdataPMT_MENU1[".entityType"] = 1;

$tdataPMT_MENU1[".strOriginalTableName"] = "PMT_MENU";

	



$tdataPMT_MENU1[".showAddInPopup"] = false;

$tdataPMT_MENU1[".showEditInPopup"] = false;

$tdataPMT_MENU1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_MENU1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_MENU1[".fieldsForRegister"] = array();
	
	$tdataPMT_MENU1[".listAjax"] = true;

	$tdataPMT_MENU1[".audit"] = true;

	$tdataPMT_MENU1[".locking"] = false;

$tdataPMT_MENU1[".edit"] = true;
$tdataPMT_MENU1[".afterEditAction"] = 1;
$tdataPMT_MENU1[".closePopupAfterEdit"] = 1;
$tdataPMT_MENU1[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataPMT_MENU1[".add"] = true;
$tdataPMT_MENU1[".afterAddAction"] = 1;
$tdataPMT_MENU1[".closePopupAfterAdd"] = 1;
$tdataPMT_MENU1[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataPMT_MENU1[".list"] = true;

$tdataPMT_MENU1[".inlineEdit"] = true;

$tdataPMT_MENU1[".updateSelected"] = true;

$tdataPMT_MENU1[".reorderRecordsByHeader"] = true;
$tdataPMT_MENU1[".createSortByDropdown"] = true;
$tdataPMT_MENU1[".strSortControlSettingsJSON"] = "";



$tdataPMT_MENU1[".inlineAdd"] = true;
$tdataPMT_MENU1[".copy"] = true;
$tdataPMT_MENU1[".view"] = true;

$tdataPMT_MENU1[".import"] = true;

$tdataPMT_MENU1[".exportTo"] = true;

$tdataPMT_MENU1[".printFriendly"] = true;

$tdataPMT_MENU1[".delete"] = true;

$tdataPMT_MENU1[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPMT_MENU1[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPMT_MENU1[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPMT_MENU1[".searchSaving"] = false;
//

$tdataPMT_MENU1[".showSearchPanel"] = true;
		$tdataPMT_MENU1[".flexibleSearch"] = true;

$tdataPMT_MENU1[".isUseAjaxSuggest"] = true;

$tdataPMT_MENU1[".rowHighlite"] = true;



																

$tdataPMT_MENU1[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_MENU1[".buttonsAdded"] = false;

$tdataPMT_MENU1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_MENU1[".isUseTimeForSearch"] = false;



$tdataPMT_MENU1[".badgeColor"] = "cd853f";


$tdataPMT_MENU1[".allSearchFields"] = array();
$tdataPMT_MENU1[".filterFields"] = array();
$tdataPMT_MENU1[".requiredSearchFields"] = array();

$tdataPMT_MENU1[".allSearchFields"][] = "MENU_ID";
	$tdataPMT_MENU1[".allSearchFields"][] = "MENU_URL";
	$tdataPMT_MENU1[".allSearchFields"][] = "MENU_PAL";
	$tdataPMT_MENU1[".allSearchFields"][] = "MENU_VAL";
	$tdataPMT_MENU1[".allSearchFields"][] = "MENU_SORT";
	

$tdataPMT_MENU1[".googleLikeFields"] = array();
$tdataPMT_MENU1[".googleLikeFields"][] = "MENU_ID";
$tdataPMT_MENU1[".googleLikeFields"][] = "MENU_URL";
$tdataPMT_MENU1[".googleLikeFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".googleLikeFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".googleLikeFields"][] = "MENU_SORT";


$tdataPMT_MENU1[".advSearchFields"] = array();
$tdataPMT_MENU1[".advSearchFields"][] = "MENU_ID";
$tdataPMT_MENU1[".advSearchFields"][] = "MENU_URL";
$tdataPMT_MENU1[".advSearchFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".advSearchFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".advSearchFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".tableType"] = "list";

$tdataPMT_MENU1[".printerPageOrientation"] = 0;
$tdataPMT_MENU1[".nPrinterPageScale"] = 100;

$tdataPMT_MENU1[".nPrinterSplitRecords"] = 40;

$tdataPMT_MENU1[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_MENU1[".geocodingEnabled"] = false;





$tdataPMT_MENU1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_MENU1[".pageSize"] = 20;

$tdataPMT_MENU1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY MENU_ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_MENU1[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_MENU1[".orderindexes"] = array();
$tdataPMT_MENU1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "MENU_ID");

$tdataPMT_MENU1[".sqlHead"] = "SELECT MENU_ID,  MENU_URL,  MENU_PAL,  MENU_VAL,  MENU_SORT";
$tdataPMT_MENU1[".sqlFrom"] = "FROM PMT_MENU";
$tdataPMT_MENU1[".sqlWhereExpr"] = "";
$tdataPMT_MENU1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_MENU1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_MENU1[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_MENU1[".highlightSearchResults"] = true;

$tableKeysPMT_MENU1 = array();
$tableKeysPMT_MENU1[] = "MENU_ID";
$tdataPMT_MENU1[".Keys"] = $tableKeysPMT_MENU1;

$tdataPMT_MENU1[".listFields"] = array();
$tdataPMT_MENU1[".listFields"][] = "MENU_ID";
$tdataPMT_MENU1[".listFields"][] = "MENU_URL";
$tdataPMT_MENU1[".listFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".listFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".listFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".hideMobileList"] = array();


$tdataPMT_MENU1[".viewFields"] = array();
$tdataPMT_MENU1[".viewFields"][] = "MENU_URL";

$tdataPMT_MENU1[".addFields"] = array();
$tdataPMT_MENU1[".addFields"][] = "MENU_URL";
$tdataPMT_MENU1[".addFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".addFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".addFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".masterListFields"] = array();
$tdataPMT_MENU1[".masterListFields"][] = "MENU_ID";
$tdataPMT_MENU1[".masterListFields"][] = "MENU_URL";
$tdataPMT_MENU1[".masterListFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".masterListFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".masterListFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".inlineAddFields"] = array();
$tdataPMT_MENU1[".inlineAddFields"][] = "MENU_URL";
$tdataPMT_MENU1[".inlineAddFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".inlineAddFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".inlineAddFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".editFields"] = array();
$tdataPMT_MENU1[".editFields"][] = "MENU_URL";
$tdataPMT_MENU1[".editFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".editFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".editFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".inlineEditFields"] = array();
$tdataPMT_MENU1[".inlineEditFields"][] = "MENU_URL";
$tdataPMT_MENU1[".inlineEditFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".inlineEditFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".inlineEditFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".updateSelectedFields"] = array();
$tdataPMT_MENU1[".updateSelectedFields"][] = "MENU_URL";
$tdataPMT_MENU1[".updateSelectedFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".updateSelectedFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".updateSelectedFields"][] = "MENU_SORT";


$tdataPMT_MENU1[".exportFields"] = array();
$tdataPMT_MENU1[".exportFields"][] = "MENU_ID";
$tdataPMT_MENU1[".exportFields"][] = "MENU_URL";
$tdataPMT_MENU1[".exportFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".exportFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".exportFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".importFields"] = array();
$tdataPMT_MENU1[".importFields"][] = "MENU_ID";
$tdataPMT_MENU1[".importFields"][] = "MENU_URL";
$tdataPMT_MENU1[".importFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".importFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".importFields"][] = "MENU_SORT";

$tdataPMT_MENU1[".printFields"] = array();
$tdataPMT_MENU1[".printFields"][] = "MENU_ID";
$tdataPMT_MENU1[".printFields"][] = "MENU_URL";
$tdataPMT_MENU1[".printFields"][] = "MENU_PAL";
$tdataPMT_MENU1[".printFields"][] = "MENU_VAL";
$tdataPMT_MENU1[".printFields"][] = "MENU_SORT";

//	MENU_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MENU_ID";
	$fdata["GoodName"] = "MENU_ID";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU1","MENU_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataPMT_MENU1["MENU_ID"] = $fdata;
//	MENU_URL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MENU_URL";
	$fdata["GoodName"] = "MENU_URL";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU1","MENU_URL");
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
	$vdata["hlType"] = 2;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "MENU_URL";

	
	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_MENU1["MENU_URL"] = $fdata;
//	MENU_PAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MENU_PAL";
	$fdata["GoodName"] = "MENU_PAL";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU1","MENU_PAL");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataPMT_MENU1["MENU_PAL"] = $fdata;
//	MENU_VAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MENU_VAL";
	$fdata["GoodName"] = "MENU_VAL";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU1","MENU_VAL");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataPMT_MENU1["MENU_VAL"] = $fdata;
//	MENU_SORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MENU_SORT";
	$fdata["GoodName"] = "MENU_SORT";
	$fdata["ownerTable"] = "PMT_MENU";
	$fdata["Label"] = GetFieldLabel("PMT_MENU1","MENU_SORT");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdataPMT_MENU1["MENU_SORT"] = $fdata;


$tables_data["PMT_MENU1"]=&$tdataPMT_MENU1;
$field_labels["PMT_MENU1"] = &$fieldLabelsPMT_MENU1;
$fieldToolTips["PMT_MENU1"] = &$fieldToolTipsPMT_MENU1;
$placeHolders["PMT_MENU1"] = &$placeHoldersPMT_MENU1;
$page_titles["PMT_MENU1"] = &$pageTitlesPMT_MENU1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_MENU1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_MENU1"] = array();


	
				$strOriginalDetailsTable="PMT_MENU";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_MENU";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_MENU";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PMT_MENU1"][0] = $masterParams;
				$masterTablesData["PMT_MENU1"][0]["masterKeys"] = array();
	$masterTablesData["PMT_MENU1"][0]["masterKeys"][]="MENU_ID";
				$masterTablesData["PMT_MENU1"][0]["detailKeys"] = array();
	$masterTablesData["PMT_MENU1"][0]["detailKeys"][]="MENU_PAL";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_MENU1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MENU_ID,  MENU_URL,  MENU_PAL,  MENU_VAL,  MENU_SORT";
$proto0["m_strFrom"] = "FROM PMT_MENU";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY MENU_ID DESC";
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
	"m_strName" => "MENU_ID",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU1"
));

$proto6["m_sql"] = "MENU_ID";
$proto6["m_srcTableName"] = "PMT_MENU1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_URL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU1"
));

$proto8["m_sql"] = "MENU_URL";
$proto8["m_srcTableName"] = "PMT_MENU1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_PAL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU1"
));

$proto10["m_sql"] = "MENU_PAL";
$proto10["m_srcTableName"] = "PMT_MENU1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_VAL",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU1"
));

$proto12["m_sql"] = "MENU_VAL";
$proto12["m_srcTableName"] = "PMT_MENU1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MENU_SORT",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU1"
));

$proto14["m_sql"] = "MENU_SORT";
$proto14["m_srcTableName"] = "PMT_MENU1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "PMT_MENU";
$proto17["m_srcTableName"] = "PMT_MENU1";
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
$proto16["m_srcTableName"] = "PMT_MENU1";
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
	"m_strName" => "MENU_ID",
	"m_strTable" => "PMT_MENU",
	"m_srcTableName" => "PMT_MENU1"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PMT_MENU1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_MENU1 = createSqlQuery_PMT_MENU1();


	
						;

					

$tdataPMT_MENU1[".sqlquery"] = $queryData_PMT_MENU1;

include_once(getabspath("include/PMT_MENU1_events.php"));
$tableEvents["PMT_MENU1"] = new eventclass_PMT_MENU1;
$tdataPMT_MENU1[".hasEvents"] = true;

?>
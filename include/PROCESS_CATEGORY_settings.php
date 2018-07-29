<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPROCESS_CATEGORY = array();
	$tdataPROCESS_CATEGORY[".truncateText"] = true;
	$tdataPROCESS_CATEGORY[".NumberOfChars"] = 20;
	$tdataPROCESS_CATEGORY[".ShortName"] = "PROCESS_CATEGORY";
	$tdataPROCESS_CATEGORY[".OwnerID"] = "";
	$tdataPROCESS_CATEGORY[".OriginalTable"] = "PROCESS_CATEGORY";

//	field labels
$fieldLabelsPROCESS_CATEGORY = array();
$fieldToolTipsPROCESS_CATEGORY = array();
$pageTitlesPROCESS_CATEGORY = array();
$placeHoldersPROCESS_CATEGORY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPROCESS_CATEGORY["Japanese"] = array();
	$fieldToolTipsPROCESS_CATEGORY["Japanese"] = array();
	$placeHoldersPROCESS_CATEGORY["Japanese"] = array();
	$pageTitlesPROCESS_CATEGORY["Japanese"] = array();
	$fieldLabelsPROCESS_CATEGORY["Japanese"]["CATEGORY_UID"] = "カテゴリUID";
	$fieldToolTipsPROCESS_CATEGORY["Japanese"]["CATEGORY_UID"] = "";
	$placeHoldersPROCESS_CATEGORY["Japanese"]["CATEGORY_UID"] = "";
	$fieldLabelsPROCESS_CATEGORY["Japanese"]["CATEGORY_PARENT"] = "親カテゴリ";
	$fieldToolTipsPROCESS_CATEGORY["Japanese"]["CATEGORY_PARENT"] = "";
	$placeHoldersPROCESS_CATEGORY["Japanese"]["CATEGORY_PARENT"] = "";
	$fieldLabelsPROCESS_CATEGORY["Japanese"]["CATEGORY_NAME"] = "種別名";
	$fieldToolTipsPROCESS_CATEGORY["Japanese"]["CATEGORY_NAME"] = "";
	$placeHoldersPROCESS_CATEGORY["Japanese"]["CATEGORY_NAME"] = "";
	$fieldLabelsPROCESS_CATEGORY["Japanese"]["CATEGORY_ICON"] = "カテゴリアイコン";
	$fieldToolTipsPROCESS_CATEGORY["Japanese"]["CATEGORY_ICON"] = "";
	$placeHoldersPROCESS_CATEGORY["Japanese"]["CATEGORY_ICON"] = "";
	if (count($fieldToolTipsPROCESS_CATEGORY["Japanese"]))
		$tdataPROCESS_CATEGORY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROCESS_CATEGORY["English"] = array();
	$fieldToolTipsPROCESS_CATEGORY["English"] = array();
	$placeHoldersPROCESS_CATEGORY["English"] = array();
	$pageTitlesPROCESS_CATEGORY["English"] = array();
	$fieldLabelsPROCESS_CATEGORY["English"]["CATEGORY_UID"] = "カテゴリUID";
	$fieldToolTipsPROCESS_CATEGORY["English"]["CATEGORY_UID"] = "";
	$placeHoldersPROCESS_CATEGORY["English"]["CATEGORY_UID"] = "";
	$fieldLabelsPROCESS_CATEGORY["English"]["CATEGORY_PARENT"] = "親カテゴリ";
	$fieldToolTipsPROCESS_CATEGORY["English"]["CATEGORY_PARENT"] = "";
	$placeHoldersPROCESS_CATEGORY["English"]["CATEGORY_PARENT"] = "";
	$fieldLabelsPROCESS_CATEGORY["English"]["CATEGORY_NAME"] = "種別名";
	$fieldToolTipsPROCESS_CATEGORY["English"]["CATEGORY_NAME"] = "";
	$placeHoldersPROCESS_CATEGORY["English"]["CATEGORY_NAME"] = "";
	$fieldLabelsPROCESS_CATEGORY["English"]["CATEGORY_ICON"] = "カテゴリアイコン";
	$fieldToolTipsPROCESS_CATEGORY["English"]["CATEGORY_ICON"] = "";
	$placeHoldersPROCESS_CATEGORY["English"]["CATEGORY_ICON"] = "";
	if (count($fieldToolTipsPROCESS_CATEGORY["English"]))
		$tdataPROCESS_CATEGORY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROCESS_CATEGORY[""] = array();
	$fieldToolTipsPROCESS_CATEGORY[""] = array();
	$placeHoldersPROCESS_CATEGORY[""] = array();
	$pageTitlesPROCESS_CATEGORY[""] = array();
	if (count($fieldToolTipsPROCESS_CATEGORY[""]))
		$tdataPROCESS_CATEGORY[".isUseToolTips"] = true;
}


	$tdataPROCESS_CATEGORY[".NCSearch"] = true;



$tdataPROCESS_CATEGORY[".shortTableName"] = "PROCESS_CATEGORY";
$tdataPROCESS_CATEGORY[".nSecOptions"] = 0;
$tdataPROCESS_CATEGORY[".recsPerRowPrint"] = 1;
$tdataPROCESS_CATEGORY[".mainTableOwnerID"] = "";
$tdataPROCESS_CATEGORY[".moveNext"] = 0;
$tdataPROCESS_CATEGORY[".entityType"] = 0;

$tdataPROCESS_CATEGORY[".strOriginalTableName"] = "PROCESS_CATEGORY";

	



$tdataPROCESS_CATEGORY[".showAddInPopup"] = false;

$tdataPROCESS_CATEGORY[".showEditInPopup"] = false;

$tdataPROCESS_CATEGORY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPROCESS_CATEGORY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPROCESS_CATEGORY[".fieldsForRegister"] = array();
	
$tdataPROCESS_CATEGORY[".listAjax"] = false;

	$tdataPROCESS_CATEGORY[".audit"] = true;

	$tdataPROCESS_CATEGORY[".locking"] = false;

$tdataPROCESS_CATEGORY[".edit"] = true;
$tdataPROCESS_CATEGORY[".afterEditAction"] = 1;
$tdataPROCESS_CATEGORY[".closePopupAfterEdit"] = 1;
$tdataPROCESS_CATEGORY[".afterEditActionDetTable"] = "";

$tdataPROCESS_CATEGORY[".add"] = true;
$tdataPROCESS_CATEGORY[".afterAddAction"] = 1;
$tdataPROCESS_CATEGORY[".closePopupAfterAdd"] = 1;
$tdataPROCESS_CATEGORY[".afterAddActionDetTable"] = "";

$tdataPROCESS_CATEGORY[".list"] = true;

$tdataPROCESS_CATEGORY[".inlineEdit"] = true;


$tdataPROCESS_CATEGORY[".reorderRecordsByHeader"] = true;
$tdataPROCESS_CATEGORY[".createSortByDropdown"] = true;
$tdataPROCESS_CATEGORY[".strSortControlSettingsJSON"] = "";



$tdataPROCESS_CATEGORY[".inlineAdd"] = true;
$tdataPROCESS_CATEGORY[".view"] = true;

$tdataPROCESS_CATEGORY[".import"] = true;

$tdataPROCESS_CATEGORY[".exportTo"] = true;

$tdataPROCESS_CATEGORY[".printFriendly"] = true;

$tdataPROCESS_CATEGORY[".delete"] = true;

$tdataPROCESS_CATEGORY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPROCESS_CATEGORY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPROCESS_CATEGORY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPROCESS_CATEGORY[".searchSaving"] = false;
//

$tdataPROCESS_CATEGORY[".showSearchPanel"] = true;
		$tdataPROCESS_CATEGORY[".flexibleSearch"] = true;

$tdataPROCESS_CATEGORY[".isUseAjaxSuggest"] = true;

$tdataPROCESS_CATEGORY[".rowHighlite"] = true;



				

$tdataPROCESS_CATEGORY[".ajaxCodeSnippetAdded"] = false;

$tdataPROCESS_CATEGORY[".buttonsAdded"] = false;

$tdataPROCESS_CATEGORY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPROCESS_CATEGORY[".isUseTimeForSearch"] = false;




$tdataPROCESS_CATEGORY[".detailsLinksOnList"] = "1";

$tdataPROCESS_CATEGORY[".allSearchFields"] = array();
$tdataPROCESS_CATEGORY[".filterFields"] = array();
$tdataPROCESS_CATEGORY[".requiredSearchFields"] = array();

$tdataPROCESS_CATEGORY[".allSearchFields"][] = "CATEGORY_UID";
	$tdataPROCESS_CATEGORY[".allSearchFields"][] = "CATEGORY_PARENT";
	$tdataPROCESS_CATEGORY[".allSearchFields"][] = "CATEGORY_NAME";
	$tdataPROCESS_CATEGORY[".allSearchFields"][] = "CATEGORY_ICON";
	

$tdataPROCESS_CATEGORY[".googleLikeFields"] = array();
$tdataPROCESS_CATEGORY[".googleLikeFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".googleLikeFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".googleLikeFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".googleLikeFields"][] = "CATEGORY_ICON";


$tdataPROCESS_CATEGORY[".advSearchFields"] = array();
$tdataPROCESS_CATEGORY[".advSearchFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".advSearchFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".advSearchFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".advSearchFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".tableType"] = "list";

$tdataPROCESS_CATEGORY[".printerPageOrientation"] = 0;
$tdataPROCESS_CATEGORY[".nPrinterPageScale"] = 100;

$tdataPROCESS_CATEGORY[".nPrinterSplitRecords"] = 40;

$tdataPROCESS_CATEGORY[".nPrinterPDFSplitRecords"] = 40;



$tdataPROCESS_CATEGORY[".geocodingEnabled"] = false;





$tdataPROCESS_CATEGORY[".listGridLayout"] = 3;


$tdataPROCESS_CATEGORY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPROCESS_CATEGORY[".pageSize"] = 20;

$tdataPROCESS_CATEGORY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPROCESS_CATEGORY[".strOrderBy"] = $tstrOrderBy;

$tdataPROCESS_CATEGORY[".orderindexes"] = array();

$tdataPROCESS_CATEGORY[".sqlHead"] = "SELECT CATEGORY_UID,  	CATEGORY_PARENT,  	CATEGORY_NAME,  	CATEGORY_ICON";
$tdataPROCESS_CATEGORY[".sqlFrom"] = "FROM PROCESS_CATEGORY";
$tdataPROCESS_CATEGORY[".sqlWhereExpr"] = "";
$tdataPROCESS_CATEGORY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPROCESS_CATEGORY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPROCESS_CATEGORY[".arrGroupsPerPage"] = $arrGPP;

$tdataPROCESS_CATEGORY[".highlightSearchResults"] = true;

$tableKeysPROCESS_CATEGORY = array();
$tableKeysPROCESS_CATEGORY[] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".Keys"] = $tableKeysPROCESS_CATEGORY;

$tdataPROCESS_CATEGORY[".listFields"] = array();
$tdataPROCESS_CATEGORY[".listFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".listFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".listFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".listFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".hideMobileList"] = array();


$tdataPROCESS_CATEGORY[".viewFields"] = array();
$tdataPROCESS_CATEGORY[".viewFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".viewFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".viewFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".viewFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".addFields"] = array();
$tdataPROCESS_CATEGORY[".addFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".addFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".addFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".addFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".masterListFields"] = array();
$tdataPROCESS_CATEGORY[".masterListFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".masterListFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".masterListFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".masterListFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".inlineAddFields"] = array();
$tdataPROCESS_CATEGORY[".inlineAddFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".inlineAddFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".inlineAddFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".inlineAddFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".editFields"] = array();
$tdataPROCESS_CATEGORY[".editFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".editFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".editFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".editFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".inlineEditFields"] = array();
$tdataPROCESS_CATEGORY[".inlineEditFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".inlineEditFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".inlineEditFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".inlineEditFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".updateSelectedFields"] = array();
$tdataPROCESS_CATEGORY[".updateSelectedFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".updateSelectedFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".updateSelectedFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".updateSelectedFields"][] = "CATEGORY_ICON";


$tdataPROCESS_CATEGORY[".exportFields"] = array();
$tdataPROCESS_CATEGORY[".exportFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".exportFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".exportFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".exportFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".importFields"] = array();
$tdataPROCESS_CATEGORY[".importFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".importFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".importFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".importFields"][] = "CATEGORY_ICON";

$tdataPROCESS_CATEGORY[".printFields"] = array();
$tdataPROCESS_CATEGORY[".printFields"][] = "CATEGORY_UID";
$tdataPROCESS_CATEGORY[".printFields"][] = "CATEGORY_PARENT";
$tdataPROCESS_CATEGORY[".printFields"][] = "CATEGORY_NAME";
$tdataPROCESS_CATEGORY[".printFields"][] = "CATEGORY_ICON";

//	CATEGORY_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CATEGORY_UID";
	$fdata["GoodName"] = "CATEGORY_UID";
	$fdata["ownerTable"] = "PROCESS_CATEGORY";
	$fdata["Label"] = GetFieldLabel("PROCESS_CATEGORY","CATEGORY_UID");
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

		$fdata["strField"] = "CATEGORY_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATEGORY_UID";

	
	
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




	$tdataPROCESS_CATEGORY["CATEGORY_UID"] = $fdata;
//	CATEGORY_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CATEGORY_PARENT";
	$fdata["GoodName"] = "CATEGORY_PARENT";
	$fdata["ownerTable"] = "PROCESS_CATEGORY";
	$fdata["Label"] = GetFieldLabel("PROCESS_CATEGORY","CATEGORY_PARENT");
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

		$fdata["strField"] = "CATEGORY_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATEGORY_PARENT";

	
	
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




	$tdataPROCESS_CATEGORY["CATEGORY_PARENT"] = $fdata;
//	CATEGORY_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CATEGORY_NAME";
	$fdata["GoodName"] = "CATEGORY_NAME";
	$fdata["ownerTable"] = "PROCESS_CATEGORY";
	$fdata["Label"] = GetFieldLabel("PROCESS_CATEGORY","CATEGORY_NAME");
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

		$fdata["strField"] = "CATEGORY_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATEGORY_NAME";

	
	
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




	$tdataPROCESS_CATEGORY["CATEGORY_NAME"] = $fdata;
//	CATEGORY_ICON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CATEGORY_ICON";
	$fdata["GoodName"] = "CATEGORY_ICON";
	$fdata["ownerTable"] = "PROCESS_CATEGORY";
	$fdata["Label"] = GetFieldLabel("PROCESS_CATEGORY","CATEGORY_ICON");
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

		$fdata["strField"] = "CATEGORY_ICON";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATEGORY_ICON";

	
	
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




	$tdataPROCESS_CATEGORY["CATEGORY_ICON"] = $fdata;


$tables_data["PROCESS_CATEGORY"]=&$tdataPROCESS_CATEGORY;
$field_labels["PROCESS_CATEGORY"] = &$fieldLabelsPROCESS_CATEGORY;
$fieldToolTips["PROCESS_CATEGORY"] = &$fieldToolTipsPROCESS_CATEGORY;
$placeHolders["PROCESS_CATEGORY"] = &$placeHoldersPROCESS_CATEGORY;
$page_titles["PROCESS_CATEGORY"] = &$pageTitlesPROCESS_CATEGORY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PROCESS_CATEGORY"] = array();
//	PROCESS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PROCESS";
		$detailsParam["dOriginalTable"] = "PROCESS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PROCESS";
	$detailsParam["dCaptionTable"] = GetTableCaption("PROCESS");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PROCESS_CATEGORY"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS_CATEGORY"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS_CATEGORY"][$dIndex]["masterKeys"][]="CATEGORY_UID";

				$detailsTablesData["PROCESS_CATEGORY"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS_CATEGORY"][$dIndex]["detailKeys"][]="PRO_CATEGORY";

// tables which are master tables for current table (detail)
$masterTablesData["PROCESS_CATEGORY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PROCESS_CATEGORY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CATEGORY_UID,  	CATEGORY_PARENT,  	CATEGORY_NAME,  	CATEGORY_ICON";
$proto0["m_strFrom"] = "FROM PROCESS_CATEGORY";
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
	"m_strName" => "CATEGORY_UID",
	"m_strTable" => "PROCESS_CATEGORY",
	"m_srcTableName" => "PROCESS_CATEGORY"
));

$proto6["m_sql"] = "CATEGORY_UID";
$proto6["m_srcTableName"] = "PROCESS_CATEGORY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CATEGORY_PARENT",
	"m_strTable" => "PROCESS_CATEGORY",
	"m_srcTableName" => "PROCESS_CATEGORY"
));

$proto8["m_sql"] = "CATEGORY_PARENT";
$proto8["m_srcTableName"] = "PROCESS_CATEGORY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CATEGORY_NAME",
	"m_strTable" => "PROCESS_CATEGORY",
	"m_srcTableName" => "PROCESS_CATEGORY"
));

$proto10["m_sql"] = "CATEGORY_NAME";
$proto10["m_srcTableName"] = "PROCESS_CATEGORY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CATEGORY_ICON",
	"m_strTable" => "PROCESS_CATEGORY",
	"m_srcTableName" => "PROCESS_CATEGORY"
));

$proto12["m_sql"] = "CATEGORY_ICON";
$proto12["m_srcTableName"] = "PROCESS_CATEGORY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "PROCESS_CATEGORY";
$proto15["m_srcTableName"] = "PROCESS_CATEGORY";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CATEGORY_UID";
$proto15["m_columns"][] = "CATEGORY_PARENT";
$proto15["m_columns"][] = "CATEGORY_NAME";
$proto15["m_columns"][] = "CATEGORY_ICON";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "PROCESS_CATEGORY";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "PROCESS_CATEGORY";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PROCESS_CATEGORY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PROCESS_CATEGORY = createSqlQuery_PROCESS_CATEGORY();


	
						;

				

$tdataPROCESS_CATEGORY[".sqlquery"] = $queryData_PROCESS_CATEGORY;

$tableEvents["PROCESS_CATEGORY"] = new eventsBase;
$tdataPROCESS_CATEGORY[".hasEvents"] = false;

?>
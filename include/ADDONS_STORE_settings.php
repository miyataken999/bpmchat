<?php
require_once(getabspath("classes/cipherer.php"));




$tdataADDONS_STORE = array();
	$tdataADDONS_STORE[".truncateText"] = true;
	$tdataADDONS_STORE[".NumberOfChars"] = 20;
	$tdataADDONS_STORE[".ShortName"] = "ADDONS_STORE";
	$tdataADDONS_STORE[".OwnerID"] = "";
	$tdataADDONS_STORE[".OriginalTable"] = "ADDONS_STORE";

//	field labels
$fieldLabelsADDONS_STORE = array();
$fieldToolTipsADDONS_STORE = array();
$pageTitlesADDONS_STORE = array();
$placeHoldersADDONS_STORE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsADDONS_STORE["Japanese"] = array();
	$fieldToolTipsADDONS_STORE["Japanese"] = array();
	$placeHoldersADDONS_STORE["Japanese"] = array();
	$pageTitlesADDONS_STORE["Japanese"] = array();
	$fieldLabelsADDONS_STORE["Japanese"]["STORE_ID"] = "ストアID";
	$fieldToolTipsADDONS_STORE["Japanese"]["STORE_ID"] = "";
	$placeHoldersADDONS_STORE["Japanese"]["STORE_ID"] = "";
	$fieldLabelsADDONS_STORE["Japanese"]["STORE_VERSION"] = "店舗のバージョン";
	$fieldToolTipsADDONS_STORE["Japanese"]["STORE_VERSION"] = "";
	$placeHoldersADDONS_STORE["Japanese"]["STORE_VERSION"] = "";
	$fieldLabelsADDONS_STORE["Japanese"]["STORE_LOCATION"] = "店舗の場所";
	$fieldToolTipsADDONS_STORE["Japanese"]["STORE_LOCATION"] = "";
	$placeHoldersADDONS_STORE["Japanese"]["STORE_LOCATION"] = "";
	$fieldLabelsADDONS_STORE["Japanese"]["STORE_TYPE"] = "ストアのタイプ";
	$fieldToolTipsADDONS_STORE["Japanese"]["STORE_TYPE"] = "";
	$placeHoldersADDONS_STORE["Japanese"]["STORE_TYPE"] = "";
	$fieldLabelsADDONS_STORE["Japanese"]["STORE_LAST_UPDATED"] = "店最終更新";
	$fieldToolTipsADDONS_STORE["Japanese"]["STORE_LAST_UPDATED"] = "";
	$placeHoldersADDONS_STORE["Japanese"]["STORE_LAST_UPDATED"] = "";
	if (count($fieldToolTipsADDONS_STORE["Japanese"]))
		$tdataADDONS_STORE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsADDONS_STORE["English"] = array();
	$fieldToolTipsADDONS_STORE["English"] = array();
	$placeHoldersADDONS_STORE["English"] = array();
	$pageTitlesADDONS_STORE["English"] = array();
	$fieldLabelsADDONS_STORE["English"]["STORE_ID"] = "ストアID";
	$fieldToolTipsADDONS_STORE["English"]["STORE_ID"] = "";
	$placeHoldersADDONS_STORE["English"]["STORE_ID"] = "";
	$fieldLabelsADDONS_STORE["English"]["STORE_VERSION"] = "店舗のバージョン";
	$fieldToolTipsADDONS_STORE["English"]["STORE_VERSION"] = "";
	$placeHoldersADDONS_STORE["English"]["STORE_VERSION"] = "";
	$fieldLabelsADDONS_STORE["English"]["STORE_LOCATION"] = "店舗の場所";
	$fieldToolTipsADDONS_STORE["English"]["STORE_LOCATION"] = "";
	$placeHoldersADDONS_STORE["English"]["STORE_LOCATION"] = "";
	$fieldLabelsADDONS_STORE["English"]["STORE_TYPE"] = "ストアのタイプ";
	$fieldToolTipsADDONS_STORE["English"]["STORE_TYPE"] = "";
	$placeHoldersADDONS_STORE["English"]["STORE_TYPE"] = "";
	$fieldLabelsADDONS_STORE["English"]["STORE_LAST_UPDATED"] = "店最終更新";
	$fieldToolTipsADDONS_STORE["English"]["STORE_LAST_UPDATED"] = "";
	$placeHoldersADDONS_STORE["English"]["STORE_LAST_UPDATED"] = "";
	if (count($fieldToolTipsADDONS_STORE["English"]))
		$tdataADDONS_STORE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsADDONS_STORE[""] = array();
	$fieldToolTipsADDONS_STORE[""] = array();
	$placeHoldersADDONS_STORE[""] = array();
	$pageTitlesADDONS_STORE[""] = array();
	if (count($fieldToolTipsADDONS_STORE[""]))
		$tdataADDONS_STORE[".isUseToolTips"] = true;
}


	$tdataADDONS_STORE[".NCSearch"] = true;



$tdataADDONS_STORE[".shortTableName"] = "ADDONS_STORE";
$tdataADDONS_STORE[".nSecOptions"] = 0;
$tdataADDONS_STORE[".recsPerRowPrint"] = 1;
$tdataADDONS_STORE[".mainTableOwnerID"] = "";
$tdataADDONS_STORE[".moveNext"] = 0;
$tdataADDONS_STORE[".entityType"] = 0;

$tdataADDONS_STORE[".strOriginalTableName"] = "ADDONS_STORE";

	



$tdataADDONS_STORE[".showAddInPopup"] = false;

$tdataADDONS_STORE[".showEditInPopup"] = false;

$tdataADDONS_STORE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataADDONS_STORE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataADDONS_STORE[".fieldsForRegister"] = array();
	
$tdataADDONS_STORE[".listAjax"] = false;

	$tdataADDONS_STORE[".audit"] = true;

	$tdataADDONS_STORE[".locking"] = false;

$tdataADDONS_STORE[".edit"] = true;
$tdataADDONS_STORE[".afterEditAction"] = 1;
$tdataADDONS_STORE[".closePopupAfterEdit"] = 1;
$tdataADDONS_STORE[".afterEditActionDetTable"] = "";

$tdataADDONS_STORE[".add"] = true;
$tdataADDONS_STORE[".afterAddAction"] = 1;
$tdataADDONS_STORE[".closePopupAfterAdd"] = 1;
$tdataADDONS_STORE[".afterAddActionDetTable"] = "";

$tdataADDONS_STORE[".list"] = true;

$tdataADDONS_STORE[".inlineEdit"] = true;


$tdataADDONS_STORE[".reorderRecordsByHeader"] = true;
$tdataADDONS_STORE[".createSortByDropdown"] = true;
$tdataADDONS_STORE[".strSortControlSettingsJSON"] = "";



$tdataADDONS_STORE[".inlineAdd"] = true;
$tdataADDONS_STORE[".view"] = true;

$tdataADDONS_STORE[".import"] = true;

$tdataADDONS_STORE[".exportTo"] = true;

$tdataADDONS_STORE[".printFriendly"] = true;

$tdataADDONS_STORE[".delete"] = true;

$tdataADDONS_STORE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataADDONS_STORE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataADDONS_STORE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataADDONS_STORE[".searchSaving"] = false;
//

$tdataADDONS_STORE[".showSearchPanel"] = true;
		$tdataADDONS_STORE[".flexibleSearch"] = true;

$tdataADDONS_STORE[".isUseAjaxSuggest"] = true;

$tdataADDONS_STORE[".rowHighlite"] = true;



				

$tdataADDONS_STORE[".ajaxCodeSnippetAdded"] = false;

$tdataADDONS_STORE[".buttonsAdded"] = false;

$tdataADDONS_STORE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataADDONS_STORE[".isUseTimeForSearch"] = false;





$tdataADDONS_STORE[".allSearchFields"] = array();
$tdataADDONS_STORE[".filterFields"] = array();
$tdataADDONS_STORE[".requiredSearchFields"] = array();

$tdataADDONS_STORE[".allSearchFields"][] = "STORE_ID";
	$tdataADDONS_STORE[".allSearchFields"][] = "STORE_VERSION";
	$tdataADDONS_STORE[".allSearchFields"][] = "STORE_LOCATION";
	$tdataADDONS_STORE[".allSearchFields"][] = "STORE_TYPE";
	$tdataADDONS_STORE[".allSearchFields"][] = "STORE_LAST_UPDATED";
	

$tdataADDONS_STORE[".googleLikeFields"] = array();
$tdataADDONS_STORE[".googleLikeFields"][] = "STORE_ID";
$tdataADDONS_STORE[".googleLikeFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".googleLikeFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".googleLikeFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".googleLikeFields"][] = "STORE_LAST_UPDATED";


$tdataADDONS_STORE[".advSearchFields"] = array();
$tdataADDONS_STORE[".advSearchFields"][] = "STORE_ID";
$tdataADDONS_STORE[".advSearchFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".advSearchFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".advSearchFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".advSearchFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".tableType"] = "list";

$tdataADDONS_STORE[".printerPageOrientation"] = 0;
$tdataADDONS_STORE[".nPrinterPageScale"] = 100;

$tdataADDONS_STORE[".nPrinterSplitRecords"] = 40;

$tdataADDONS_STORE[".nPrinterPDFSplitRecords"] = 40;



$tdataADDONS_STORE[".geocodingEnabled"] = false;





$tdataADDONS_STORE[".listGridLayout"] = 3;


$tdataADDONS_STORE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataADDONS_STORE[".pageSize"] = 20;

$tdataADDONS_STORE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataADDONS_STORE[".strOrderBy"] = $tstrOrderBy;

$tdataADDONS_STORE[".orderindexes"] = array();

$tdataADDONS_STORE[".sqlHead"] = "SELECT STORE_ID,  	STORE_VERSION,  	STORE_LOCATION,  	STORE_TYPE,  	STORE_LAST_UPDATED";
$tdataADDONS_STORE[".sqlFrom"] = "FROM ADDONS_STORE";
$tdataADDONS_STORE[".sqlWhereExpr"] = "";
$tdataADDONS_STORE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataADDONS_STORE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataADDONS_STORE[".arrGroupsPerPage"] = $arrGPP;

$tdataADDONS_STORE[".highlightSearchResults"] = true;

$tableKeysADDONS_STORE = array();
$tableKeysADDONS_STORE[] = "STORE_ID";
$tdataADDONS_STORE[".Keys"] = $tableKeysADDONS_STORE;

$tdataADDONS_STORE[".listFields"] = array();
$tdataADDONS_STORE[".listFields"][] = "STORE_ID";
$tdataADDONS_STORE[".listFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".listFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".listFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".listFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".hideMobileList"] = array();


$tdataADDONS_STORE[".viewFields"] = array();
$tdataADDONS_STORE[".viewFields"][] = "STORE_ID";
$tdataADDONS_STORE[".viewFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".viewFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".viewFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".viewFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".addFields"] = array();
$tdataADDONS_STORE[".addFields"][] = "STORE_ID";
$tdataADDONS_STORE[".addFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".addFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".addFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".addFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".masterListFields"] = array();
$tdataADDONS_STORE[".masterListFields"][] = "STORE_ID";
$tdataADDONS_STORE[".masterListFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".masterListFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".masterListFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".masterListFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".inlineAddFields"] = array();
$tdataADDONS_STORE[".inlineAddFields"][] = "STORE_ID";
$tdataADDONS_STORE[".inlineAddFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".inlineAddFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".inlineAddFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".inlineAddFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".editFields"] = array();
$tdataADDONS_STORE[".editFields"][] = "STORE_ID";
$tdataADDONS_STORE[".editFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".editFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".editFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".editFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".inlineEditFields"] = array();
$tdataADDONS_STORE[".inlineEditFields"][] = "STORE_ID";
$tdataADDONS_STORE[".inlineEditFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".inlineEditFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".inlineEditFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".inlineEditFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".updateSelectedFields"] = array();
$tdataADDONS_STORE[".updateSelectedFields"][] = "STORE_ID";
$tdataADDONS_STORE[".updateSelectedFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".updateSelectedFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".updateSelectedFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".updateSelectedFields"][] = "STORE_LAST_UPDATED";


$tdataADDONS_STORE[".exportFields"] = array();
$tdataADDONS_STORE[".exportFields"][] = "STORE_ID";
$tdataADDONS_STORE[".exportFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".exportFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".exportFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".exportFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".importFields"] = array();
$tdataADDONS_STORE[".importFields"][] = "STORE_ID";
$tdataADDONS_STORE[".importFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".importFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".importFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".importFields"][] = "STORE_LAST_UPDATED";

$tdataADDONS_STORE[".printFields"] = array();
$tdataADDONS_STORE[".printFields"][] = "STORE_ID";
$tdataADDONS_STORE[".printFields"][] = "STORE_VERSION";
$tdataADDONS_STORE[".printFields"][] = "STORE_LOCATION";
$tdataADDONS_STORE[".printFields"][] = "STORE_TYPE";
$tdataADDONS_STORE[".printFields"][] = "STORE_LAST_UPDATED";

//	STORE_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "STORE_ID";
	$fdata["GoodName"] = "STORE_ID";
	$fdata["ownerTable"] = "ADDONS_STORE";
	$fdata["Label"] = GetFieldLabel("ADDONS_STORE","STORE_ID");
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

		$fdata["strField"] = "STORE_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STORE_ID";

	
	
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




	$tdataADDONS_STORE["STORE_ID"] = $fdata;
//	STORE_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "STORE_VERSION";
	$fdata["GoodName"] = "STORE_VERSION";
	$fdata["ownerTable"] = "ADDONS_STORE";
	$fdata["Label"] = GetFieldLabel("ADDONS_STORE","STORE_VERSION");
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

		$fdata["strField"] = "STORE_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STORE_VERSION";

	
	
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




	$tdataADDONS_STORE["STORE_VERSION"] = $fdata;
//	STORE_LOCATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "STORE_LOCATION";
	$fdata["GoodName"] = "STORE_LOCATION";
	$fdata["ownerTable"] = "ADDONS_STORE";
	$fdata["Label"] = GetFieldLabel("ADDONS_STORE","STORE_LOCATION");
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

		$fdata["strField"] = "STORE_LOCATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STORE_LOCATION";

	
	
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
			$edata["EditParams"].= " maxlength=2048";

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




	$tdataADDONS_STORE["STORE_LOCATION"] = $fdata;
//	STORE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STORE_TYPE";
	$fdata["GoodName"] = "STORE_TYPE";
	$fdata["ownerTable"] = "ADDONS_STORE";
	$fdata["Label"] = GetFieldLabel("ADDONS_STORE","STORE_TYPE");
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

		$fdata["strField"] = "STORE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STORE_TYPE";

	
	
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




	$tdataADDONS_STORE["STORE_TYPE"] = $fdata;
//	STORE_LAST_UPDATED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STORE_LAST_UPDATED";
	$fdata["GoodName"] = "STORE_LAST_UPDATED";
	$fdata["ownerTable"] = "ADDONS_STORE";
	$fdata["Label"] = GetFieldLabel("ADDONS_STORE","STORE_LAST_UPDATED");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "STORE_LAST_UPDATED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STORE_LAST_UPDATED";

	
	
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

		$edata["ShowTime"] = true;

	



	
	
	
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




	$tdataADDONS_STORE["STORE_LAST_UPDATED"] = $fdata;


$tables_data["ADDONS_STORE"]=&$tdataADDONS_STORE;
$field_labels["ADDONS_STORE"] = &$fieldLabelsADDONS_STORE;
$fieldToolTips["ADDONS_STORE"] = &$fieldToolTipsADDONS_STORE;
$placeHolders["ADDONS_STORE"] = &$placeHoldersADDONS_STORE;
$page_titles["ADDONS_STORE"] = &$pageTitlesADDONS_STORE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ADDONS_STORE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ADDONS_STORE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ADDONS_STORE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "STORE_ID,  	STORE_VERSION,  	STORE_LOCATION,  	STORE_TYPE,  	STORE_LAST_UPDATED";
$proto0["m_strFrom"] = "FROM ADDONS_STORE";
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
	"m_strName" => "STORE_ID",
	"m_strTable" => "ADDONS_STORE",
	"m_srcTableName" => "ADDONS_STORE"
));

$proto6["m_sql"] = "STORE_ID";
$proto6["m_srcTableName"] = "ADDONS_STORE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "STORE_VERSION",
	"m_strTable" => "ADDONS_STORE",
	"m_srcTableName" => "ADDONS_STORE"
));

$proto8["m_sql"] = "STORE_VERSION";
$proto8["m_srcTableName"] = "ADDONS_STORE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "STORE_LOCATION",
	"m_strTable" => "ADDONS_STORE",
	"m_srcTableName" => "ADDONS_STORE"
));

$proto10["m_sql"] = "STORE_LOCATION";
$proto10["m_srcTableName"] = "ADDONS_STORE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STORE_TYPE",
	"m_strTable" => "ADDONS_STORE",
	"m_srcTableName" => "ADDONS_STORE"
));

$proto12["m_sql"] = "STORE_TYPE";
$proto12["m_srcTableName"] = "ADDONS_STORE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STORE_LAST_UPDATED",
	"m_strTable" => "ADDONS_STORE",
	"m_srcTableName" => "ADDONS_STORE"
));

$proto14["m_sql"] = "STORE_LAST_UPDATED";
$proto14["m_srcTableName"] = "ADDONS_STORE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "ADDONS_STORE";
$proto17["m_srcTableName"] = "ADDONS_STORE";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "STORE_ID";
$proto17["m_columns"][] = "STORE_VERSION";
$proto17["m_columns"][] = "STORE_LOCATION";
$proto17["m_columns"][] = "STORE_TYPE";
$proto17["m_columns"][] = "STORE_LAST_UPDATED";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "ADDONS_STORE";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "ADDONS_STORE";
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
$proto0["m_srcTableName"]="ADDONS_STORE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ADDONS_STORE = createSqlQuery_ADDONS_STORE();


	
						;

					

$tdataADDONS_STORE[".sqlquery"] = $queryData_ADDONS_STORE;

$tableEvents["ADDONS_STORE"] = new eventsBase;
$tdataADDONS_STORE[".hasEvents"] = false;

?>
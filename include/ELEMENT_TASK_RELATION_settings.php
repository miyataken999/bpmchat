<?php
require_once(getabspath("classes/cipherer.php"));




$tdataELEMENT_TASK_RELATION = array();
	$tdataELEMENT_TASK_RELATION[".truncateText"] = true;
	$tdataELEMENT_TASK_RELATION[".NumberOfChars"] = 20;
	$tdataELEMENT_TASK_RELATION[".ShortName"] = "ELEMENT_TASK_RELATION";
	$tdataELEMENT_TASK_RELATION[".OwnerID"] = "";
	$tdataELEMENT_TASK_RELATION[".OriginalTable"] = "ELEMENT_TASK_RELATION";

//	field labels
$fieldLabelsELEMENT_TASK_RELATION = array();
$fieldToolTipsELEMENT_TASK_RELATION = array();
$pageTitlesELEMENT_TASK_RELATION = array();
$placeHoldersELEMENT_TASK_RELATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsELEMENT_TASK_RELATION["Japanese"] = array();
	$fieldToolTipsELEMENT_TASK_RELATION["Japanese"] = array();
	$placeHoldersELEMENT_TASK_RELATION["Japanese"] = array();
	$pageTitlesELEMENT_TASK_RELATION["Japanese"] = array();
	$fieldLabelsELEMENT_TASK_RELATION["Japanese"]["ETR_UID"] = "ETRのUID";
	$fieldToolTipsELEMENT_TASK_RELATION["Japanese"]["ETR_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["Japanese"]["ETR_UID"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsELEMENT_TASK_RELATION["Japanese"]["PRJ_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["Japanese"]["ELEMENT_UID"] = "要素のUID";
	$fieldToolTipsELEMENT_TASK_RELATION["Japanese"]["ELEMENT_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["Japanese"]["ELEMENT_UID"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["Japanese"]["ELEMENT_TYPE"] = "要素タイプ";
	$fieldToolTipsELEMENT_TASK_RELATION["Japanese"]["ELEMENT_TYPE"] = "";
	$placeHoldersELEMENT_TASK_RELATION["Japanese"]["ELEMENT_TYPE"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsELEMENT_TASK_RELATION["Japanese"]["TAS_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["Japanese"]["TAS_UID"] = "";
	if (count($fieldToolTipsELEMENT_TASK_RELATION["Japanese"]))
		$tdataELEMENT_TASK_RELATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsELEMENT_TASK_RELATION["English"] = array();
	$fieldToolTipsELEMENT_TASK_RELATION["English"] = array();
	$placeHoldersELEMENT_TASK_RELATION["English"] = array();
	$pageTitlesELEMENT_TASK_RELATION["English"] = array();
	$fieldLabelsELEMENT_TASK_RELATION["English"]["ETR_UID"] = "ETRのUID";
	$fieldToolTipsELEMENT_TASK_RELATION["English"]["ETR_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["English"]["ETR_UID"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsELEMENT_TASK_RELATION["English"]["PRJ_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["English"]["PRJ_UID"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["English"]["ELEMENT_UID"] = "要素のUID";
	$fieldToolTipsELEMENT_TASK_RELATION["English"]["ELEMENT_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["English"]["ELEMENT_UID"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["English"]["ELEMENT_TYPE"] = "要素タイプ";
	$fieldToolTipsELEMENT_TASK_RELATION["English"]["ELEMENT_TYPE"] = "";
	$placeHoldersELEMENT_TASK_RELATION["English"]["ELEMENT_TYPE"] = "";
	$fieldLabelsELEMENT_TASK_RELATION["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsELEMENT_TASK_RELATION["English"]["TAS_UID"] = "";
	$placeHoldersELEMENT_TASK_RELATION["English"]["TAS_UID"] = "";
	if (count($fieldToolTipsELEMENT_TASK_RELATION["English"]))
		$tdataELEMENT_TASK_RELATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsELEMENT_TASK_RELATION[""] = array();
	$fieldToolTipsELEMENT_TASK_RELATION[""] = array();
	$placeHoldersELEMENT_TASK_RELATION[""] = array();
	$pageTitlesELEMENT_TASK_RELATION[""] = array();
	if (count($fieldToolTipsELEMENT_TASK_RELATION[""]))
		$tdataELEMENT_TASK_RELATION[".isUseToolTips"] = true;
}


	$tdataELEMENT_TASK_RELATION[".NCSearch"] = true;



$tdataELEMENT_TASK_RELATION[".shortTableName"] = "ELEMENT_TASK_RELATION";
$tdataELEMENT_TASK_RELATION[".nSecOptions"] = 0;
$tdataELEMENT_TASK_RELATION[".recsPerRowPrint"] = 1;
$tdataELEMENT_TASK_RELATION[".mainTableOwnerID"] = "";
$tdataELEMENT_TASK_RELATION[".moveNext"] = 0;
$tdataELEMENT_TASK_RELATION[".entityType"] = 0;

$tdataELEMENT_TASK_RELATION[".strOriginalTableName"] = "ELEMENT_TASK_RELATION";

	



$tdataELEMENT_TASK_RELATION[".showAddInPopup"] = false;

$tdataELEMENT_TASK_RELATION[".showEditInPopup"] = false;

$tdataELEMENT_TASK_RELATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataELEMENT_TASK_RELATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataELEMENT_TASK_RELATION[".fieldsForRegister"] = array();
	
$tdataELEMENT_TASK_RELATION[".listAjax"] = false;

	$tdataELEMENT_TASK_RELATION[".audit"] = true;

	$tdataELEMENT_TASK_RELATION[".locking"] = false;

$tdataELEMENT_TASK_RELATION[".edit"] = true;
$tdataELEMENT_TASK_RELATION[".afterEditAction"] = 1;
$tdataELEMENT_TASK_RELATION[".closePopupAfterEdit"] = 1;
$tdataELEMENT_TASK_RELATION[".afterEditActionDetTable"] = "";

$tdataELEMENT_TASK_RELATION[".add"] = true;
$tdataELEMENT_TASK_RELATION[".afterAddAction"] = 1;
$tdataELEMENT_TASK_RELATION[".closePopupAfterAdd"] = 1;
$tdataELEMENT_TASK_RELATION[".afterAddActionDetTable"] = "";

$tdataELEMENT_TASK_RELATION[".list"] = true;

$tdataELEMENT_TASK_RELATION[".inlineEdit"] = true;


$tdataELEMENT_TASK_RELATION[".reorderRecordsByHeader"] = true;
$tdataELEMENT_TASK_RELATION[".createSortByDropdown"] = true;
$tdataELEMENT_TASK_RELATION[".strSortControlSettingsJSON"] = "";



$tdataELEMENT_TASK_RELATION[".inlineAdd"] = true;
$tdataELEMENT_TASK_RELATION[".view"] = true;

$tdataELEMENT_TASK_RELATION[".import"] = true;

$tdataELEMENT_TASK_RELATION[".exportTo"] = true;

$tdataELEMENT_TASK_RELATION[".printFriendly"] = true;

$tdataELEMENT_TASK_RELATION[".delete"] = true;

$tdataELEMENT_TASK_RELATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataELEMENT_TASK_RELATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataELEMENT_TASK_RELATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataELEMENT_TASK_RELATION[".searchSaving"] = false;
//

$tdataELEMENT_TASK_RELATION[".showSearchPanel"] = true;
		$tdataELEMENT_TASK_RELATION[".flexibleSearch"] = true;

$tdataELEMENT_TASK_RELATION[".isUseAjaxSuggest"] = true;

$tdataELEMENT_TASK_RELATION[".rowHighlite"] = true;



				

$tdataELEMENT_TASK_RELATION[".ajaxCodeSnippetAdded"] = false;

$tdataELEMENT_TASK_RELATION[".buttonsAdded"] = false;

$tdataELEMENT_TASK_RELATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataELEMENT_TASK_RELATION[".isUseTimeForSearch"] = false;





$tdataELEMENT_TASK_RELATION[".allSearchFields"] = array();
$tdataELEMENT_TASK_RELATION[".filterFields"] = array();
$tdataELEMENT_TASK_RELATION[".requiredSearchFields"] = array();

$tdataELEMENT_TASK_RELATION[".allSearchFields"][] = "ETR_UID";
	$tdataELEMENT_TASK_RELATION[".allSearchFields"][] = "PRJ_UID";
	$tdataELEMENT_TASK_RELATION[".allSearchFields"][] = "ELEMENT_UID";
	$tdataELEMENT_TASK_RELATION[".allSearchFields"][] = "ELEMENT_TYPE";
	$tdataELEMENT_TASK_RELATION[".allSearchFields"][] = "TAS_UID";
	

$tdataELEMENT_TASK_RELATION[".googleLikeFields"] = array();
$tdataELEMENT_TASK_RELATION[".googleLikeFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".googleLikeFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".googleLikeFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".googleLikeFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".googleLikeFields"][] = "TAS_UID";


$tdataELEMENT_TASK_RELATION[".advSearchFields"] = array();
$tdataELEMENT_TASK_RELATION[".advSearchFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".advSearchFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".advSearchFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".advSearchFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".advSearchFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".tableType"] = "list";

$tdataELEMENT_TASK_RELATION[".printerPageOrientation"] = 0;
$tdataELEMENT_TASK_RELATION[".nPrinterPageScale"] = 100;

$tdataELEMENT_TASK_RELATION[".nPrinterSplitRecords"] = 40;

$tdataELEMENT_TASK_RELATION[".nPrinterPDFSplitRecords"] = 40;



$tdataELEMENT_TASK_RELATION[".geocodingEnabled"] = false;





$tdataELEMENT_TASK_RELATION[".listGridLayout"] = 3;


$tdataELEMENT_TASK_RELATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataELEMENT_TASK_RELATION[".pageSize"] = 20;

$tdataELEMENT_TASK_RELATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataELEMENT_TASK_RELATION[".strOrderBy"] = $tstrOrderBy;

$tdataELEMENT_TASK_RELATION[".orderindexes"] = array();

$tdataELEMENT_TASK_RELATION[".sqlHead"] = "SELECT ETR_UID,  	PRJ_UID,  	ELEMENT_UID,  	ELEMENT_TYPE,  	TAS_UID";
$tdataELEMENT_TASK_RELATION[".sqlFrom"] = "FROM ELEMENT_TASK_RELATION";
$tdataELEMENT_TASK_RELATION[".sqlWhereExpr"] = "";
$tdataELEMENT_TASK_RELATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataELEMENT_TASK_RELATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataELEMENT_TASK_RELATION[".arrGroupsPerPage"] = $arrGPP;

$tdataELEMENT_TASK_RELATION[".highlightSearchResults"] = true;

$tableKeysELEMENT_TASK_RELATION = array();
$tableKeysELEMENT_TASK_RELATION[] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".Keys"] = $tableKeysELEMENT_TASK_RELATION;

$tdataELEMENT_TASK_RELATION[".listFields"] = array();
$tdataELEMENT_TASK_RELATION[".listFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".listFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".listFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".listFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".listFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".hideMobileList"] = array();


$tdataELEMENT_TASK_RELATION[".viewFields"] = array();
$tdataELEMENT_TASK_RELATION[".viewFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".viewFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".viewFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".viewFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".viewFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".addFields"] = array();
$tdataELEMENT_TASK_RELATION[".addFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".addFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".addFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".addFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".addFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".masterListFields"] = array();
$tdataELEMENT_TASK_RELATION[".masterListFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".masterListFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".masterListFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".masterListFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".masterListFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".inlineAddFields"] = array();
$tdataELEMENT_TASK_RELATION[".inlineAddFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".inlineAddFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".inlineAddFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".inlineAddFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".inlineAddFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".editFields"] = array();
$tdataELEMENT_TASK_RELATION[".editFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".editFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".editFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".editFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".editFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".inlineEditFields"] = array();
$tdataELEMENT_TASK_RELATION[".inlineEditFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".inlineEditFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".inlineEditFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".inlineEditFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".inlineEditFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".updateSelectedFields"] = array();
$tdataELEMENT_TASK_RELATION[".updateSelectedFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".updateSelectedFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".updateSelectedFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".updateSelectedFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".updateSelectedFields"][] = "TAS_UID";


$tdataELEMENT_TASK_RELATION[".exportFields"] = array();
$tdataELEMENT_TASK_RELATION[".exportFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".exportFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".exportFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".exportFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".exportFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".importFields"] = array();
$tdataELEMENT_TASK_RELATION[".importFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".importFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".importFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".importFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".importFields"][] = "TAS_UID";

$tdataELEMENT_TASK_RELATION[".printFields"] = array();
$tdataELEMENT_TASK_RELATION[".printFields"][] = "ETR_UID";
$tdataELEMENT_TASK_RELATION[".printFields"][] = "PRJ_UID";
$tdataELEMENT_TASK_RELATION[".printFields"][] = "ELEMENT_UID";
$tdataELEMENT_TASK_RELATION[".printFields"][] = "ELEMENT_TYPE";
$tdataELEMENT_TASK_RELATION[".printFields"][] = "TAS_UID";

//	ETR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ETR_UID";
	$fdata["GoodName"] = "ETR_UID";
	$fdata["ownerTable"] = "ELEMENT_TASK_RELATION";
	$fdata["Label"] = GetFieldLabel("ELEMENT_TASK_RELATION","ETR_UID");
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

		$fdata["strField"] = "ETR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ETR_UID";

	
	
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




	$tdataELEMENT_TASK_RELATION["ETR_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "ELEMENT_TASK_RELATION";
	$fdata["Label"] = GetFieldLabel("ELEMENT_TASK_RELATION","PRJ_UID");
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

		$fdata["strField"] = "PRJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UID";

	
	
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




	$tdataELEMENT_TASK_RELATION["PRJ_UID"] = $fdata;
//	ELEMENT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ELEMENT_UID";
	$fdata["GoodName"] = "ELEMENT_UID";
	$fdata["ownerTable"] = "ELEMENT_TASK_RELATION";
	$fdata["Label"] = GetFieldLabel("ELEMENT_TASK_RELATION","ELEMENT_UID");
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

		$fdata["strField"] = "ELEMENT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELEMENT_UID";

	
	
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




	$tdataELEMENT_TASK_RELATION["ELEMENT_UID"] = $fdata;
//	ELEMENT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ELEMENT_TYPE";
	$fdata["GoodName"] = "ELEMENT_TYPE";
	$fdata["ownerTable"] = "ELEMENT_TASK_RELATION";
	$fdata["Label"] = GetFieldLabel("ELEMENT_TASK_RELATION","ELEMENT_TYPE");
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

		$fdata["strField"] = "ELEMENT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELEMENT_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataELEMENT_TASK_RELATION["ELEMENT_TYPE"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "ELEMENT_TASK_RELATION";
	$fdata["Label"] = GetFieldLabel("ELEMENT_TASK_RELATION","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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




	$tdataELEMENT_TASK_RELATION["TAS_UID"] = $fdata;


$tables_data["ELEMENT_TASK_RELATION"]=&$tdataELEMENT_TASK_RELATION;
$field_labels["ELEMENT_TASK_RELATION"] = &$fieldLabelsELEMENT_TASK_RELATION;
$fieldToolTips["ELEMENT_TASK_RELATION"] = &$fieldToolTipsELEMENT_TASK_RELATION;
$placeHolders["ELEMENT_TASK_RELATION"] = &$placeHoldersELEMENT_TASK_RELATION;
$page_titles["ELEMENT_TASK_RELATION"] = &$pageTitlesELEMENT_TASK_RELATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ELEMENT_TASK_RELATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ELEMENT_TASK_RELATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ELEMENT_TASK_RELATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ETR_UID,  	PRJ_UID,  	ELEMENT_UID,  	ELEMENT_TYPE,  	TAS_UID";
$proto0["m_strFrom"] = "FROM ELEMENT_TASK_RELATION";
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
	"m_strName" => "ETR_UID",
	"m_strTable" => "ELEMENT_TASK_RELATION",
	"m_srcTableName" => "ELEMENT_TASK_RELATION"
));

$proto6["m_sql"] = "ETR_UID";
$proto6["m_srcTableName"] = "ELEMENT_TASK_RELATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "ELEMENT_TASK_RELATION",
	"m_srcTableName" => "ELEMENT_TASK_RELATION"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "ELEMENT_TASK_RELATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ELEMENT_UID",
	"m_strTable" => "ELEMENT_TASK_RELATION",
	"m_srcTableName" => "ELEMENT_TASK_RELATION"
));

$proto10["m_sql"] = "ELEMENT_UID";
$proto10["m_srcTableName"] = "ELEMENT_TASK_RELATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ELEMENT_TYPE",
	"m_strTable" => "ELEMENT_TASK_RELATION",
	"m_srcTableName" => "ELEMENT_TASK_RELATION"
));

$proto12["m_sql"] = "ELEMENT_TYPE";
$proto12["m_srcTableName"] = "ELEMENT_TASK_RELATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "ELEMENT_TASK_RELATION",
	"m_srcTableName" => "ELEMENT_TASK_RELATION"
));

$proto14["m_sql"] = "TAS_UID";
$proto14["m_srcTableName"] = "ELEMENT_TASK_RELATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "ELEMENT_TASK_RELATION";
$proto17["m_srcTableName"] = "ELEMENT_TASK_RELATION";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ETR_UID";
$proto17["m_columns"][] = "PRJ_UID";
$proto17["m_columns"][] = "ELEMENT_UID";
$proto17["m_columns"][] = "ELEMENT_TYPE";
$proto17["m_columns"][] = "TAS_UID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "ELEMENT_TASK_RELATION";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "ELEMENT_TASK_RELATION";
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
$proto0["m_srcTableName"]="ELEMENT_TASK_RELATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ELEMENT_TASK_RELATION = createSqlQuery_ELEMENT_TASK_RELATION();


	
						;

					

$tdataELEMENT_TASK_RELATION[".sqlquery"] = $queryData_ELEMENT_TASK_RELATION;

$tableEvents["ELEMENT_TASK_RELATION"] = new eventsBase;
$tdataELEMENT_TASK_RELATION[".hasEvents"] = false;

?>
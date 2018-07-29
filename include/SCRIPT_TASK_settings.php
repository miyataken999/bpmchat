<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSCRIPT_TASK = array();
	$tdataSCRIPT_TASK[".truncateText"] = true;
	$tdataSCRIPT_TASK[".NumberOfChars"] = 20;
	$tdataSCRIPT_TASK[".ShortName"] = "SCRIPT_TASK";
	$tdataSCRIPT_TASK[".OwnerID"] = "";
	$tdataSCRIPT_TASK[".OriginalTable"] = "SCRIPT_TASK";

//	field labels
$fieldLabelsSCRIPT_TASK = array();
$fieldToolTipsSCRIPT_TASK = array();
$pageTitlesSCRIPT_TASK = array();
$placeHoldersSCRIPT_TASK = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSCRIPT_TASK["Japanese"] = array();
	$fieldToolTipsSCRIPT_TASK["Japanese"] = array();
	$placeHoldersSCRIPT_TASK["Japanese"] = array();
	$pageTitlesSCRIPT_TASK["Japanese"] = array();
	$fieldLabelsSCRIPT_TASK["Japanese"]["SCRTAS_UID"] = "scrtasのUID";
	$fieldToolTipsSCRIPT_TASK["Japanese"]["SCRTAS_UID"] = "";
	$placeHoldersSCRIPT_TASK["Japanese"]["SCRTAS_UID"] = "";
	$fieldLabelsSCRIPT_TASK["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsSCRIPT_TASK["Japanese"]["PRJ_UID"] = "";
	$placeHoldersSCRIPT_TASK["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsSCRIPT_TASK["Japanese"]["ACT_UID"] = "行為のUID";
	$fieldToolTipsSCRIPT_TASK["Japanese"]["ACT_UID"] = "";
	$placeHoldersSCRIPT_TASK["Japanese"]["ACT_UID"] = "";
	$fieldLabelsSCRIPT_TASK["Japanese"]["SCRTAS_OBJ_TYPE"] = "scrtas OBJタイプ";
	$fieldToolTipsSCRIPT_TASK["Japanese"]["SCRTAS_OBJ_TYPE"] = "";
	$placeHoldersSCRIPT_TASK["Japanese"]["SCRTAS_OBJ_TYPE"] = "";
	$fieldLabelsSCRIPT_TASK["Japanese"]["SCRTAS_OBJ_UID"] = "scrtas OBJ UID";
	$fieldToolTipsSCRIPT_TASK["Japanese"]["SCRTAS_OBJ_UID"] = "";
	$placeHoldersSCRIPT_TASK["Japanese"]["SCRTAS_OBJ_UID"] = "";
	if (count($fieldToolTipsSCRIPT_TASK["Japanese"]))
		$tdataSCRIPT_TASK[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSCRIPT_TASK["English"] = array();
	$fieldToolTipsSCRIPT_TASK["English"] = array();
	$placeHoldersSCRIPT_TASK["English"] = array();
	$pageTitlesSCRIPT_TASK["English"] = array();
	$fieldLabelsSCRIPT_TASK["English"]["SCRTAS_UID"] = "scrtasのUID";
	$fieldToolTipsSCRIPT_TASK["English"]["SCRTAS_UID"] = "";
	$placeHoldersSCRIPT_TASK["English"]["SCRTAS_UID"] = "";
	$fieldLabelsSCRIPT_TASK["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsSCRIPT_TASK["English"]["PRJ_UID"] = "";
	$placeHoldersSCRIPT_TASK["English"]["PRJ_UID"] = "";
	$fieldLabelsSCRIPT_TASK["English"]["ACT_UID"] = "行為のUID";
	$fieldToolTipsSCRIPT_TASK["English"]["ACT_UID"] = "";
	$placeHoldersSCRIPT_TASK["English"]["ACT_UID"] = "";
	$fieldLabelsSCRIPT_TASK["English"]["SCRTAS_OBJ_TYPE"] = "scrtas OBJタイプ";
	$fieldToolTipsSCRIPT_TASK["English"]["SCRTAS_OBJ_TYPE"] = "";
	$placeHoldersSCRIPT_TASK["English"]["SCRTAS_OBJ_TYPE"] = "";
	$fieldLabelsSCRIPT_TASK["English"]["SCRTAS_OBJ_UID"] = "scrtas OBJ UID";
	$fieldToolTipsSCRIPT_TASK["English"]["SCRTAS_OBJ_UID"] = "";
	$placeHoldersSCRIPT_TASK["English"]["SCRTAS_OBJ_UID"] = "";
	if (count($fieldToolTipsSCRIPT_TASK["English"]))
		$tdataSCRIPT_TASK[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSCRIPT_TASK[""] = array();
	$fieldToolTipsSCRIPT_TASK[""] = array();
	$placeHoldersSCRIPT_TASK[""] = array();
	$pageTitlesSCRIPT_TASK[""] = array();
	if (count($fieldToolTipsSCRIPT_TASK[""]))
		$tdataSCRIPT_TASK[".isUseToolTips"] = true;
}


	$tdataSCRIPT_TASK[".NCSearch"] = true;



$tdataSCRIPT_TASK[".shortTableName"] = "SCRIPT_TASK";
$tdataSCRIPT_TASK[".nSecOptions"] = 0;
$tdataSCRIPT_TASK[".recsPerRowPrint"] = 1;
$tdataSCRIPT_TASK[".mainTableOwnerID"] = "";
$tdataSCRIPT_TASK[".moveNext"] = 0;
$tdataSCRIPT_TASK[".entityType"] = 0;

$tdataSCRIPT_TASK[".strOriginalTableName"] = "SCRIPT_TASK";

	



$tdataSCRIPT_TASK[".showAddInPopup"] = false;

$tdataSCRIPT_TASK[".showEditInPopup"] = false;

$tdataSCRIPT_TASK[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSCRIPT_TASK[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSCRIPT_TASK[".fieldsForRegister"] = array();
	
$tdataSCRIPT_TASK[".listAjax"] = false;

	$tdataSCRIPT_TASK[".audit"] = true;

	$tdataSCRIPT_TASK[".locking"] = false;

$tdataSCRIPT_TASK[".edit"] = true;
$tdataSCRIPT_TASK[".afterEditAction"] = 1;
$tdataSCRIPT_TASK[".closePopupAfterEdit"] = 1;
$tdataSCRIPT_TASK[".afterEditActionDetTable"] = "";

$tdataSCRIPT_TASK[".add"] = true;
$tdataSCRIPT_TASK[".afterAddAction"] = 1;
$tdataSCRIPT_TASK[".closePopupAfterAdd"] = 1;
$tdataSCRIPT_TASK[".afterAddActionDetTable"] = "";

$tdataSCRIPT_TASK[".list"] = true;

$tdataSCRIPT_TASK[".inlineEdit"] = true;


$tdataSCRIPT_TASK[".reorderRecordsByHeader"] = true;
$tdataSCRIPT_TASK[".createSortByDropdown"] = true;
$tdataSCRIPT_TASK[".strSortControlSettingsJSON"] = "";



$tdataSCRIPT_TASK[".inlineAdd"] = true;
$tdataSCRIPT_TASK[".view"] = true;

$tdataSCRIPT_TASK[".import"] = true;

$tdataSCRIPT_TASK[".exportTo"] = true;

$tdataSCRIPT_TASK[".printFriendly"] = true;

$tdataSCRIPT_TASK[".delete"] = true;

$tdataSCRIPT_TASK[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSCRIPT_TASK[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSCRIPT_TASK[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSCRIPT_TASK[".searchSaving"] = false;
//

$tdataSCRIPT_TASK[".showSearchPanel"] = true;
		$tdataSCRIPT_TASK[".flexibleSearch"] = true;

$tdataSCRIPT_TASK[".isUseAjaxSuggest"] = true;

$tdataSCRIPT_TASK[".rowHighlite"] = true;



				

$tdataSCRIPT_TASK[".ajaxCodeSnippetAdded"] = false;

$tdataSCRIPT_TASK[".buttonsAdded"] = false;

$tdataSCRIPT_TASK[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSCRIPT_TASK[".isUseTimeForSearch"] = false;





$tdataSCRIPT_TASK[".allSearchFields"] = array();
$tdataSCRIPT_TASK[".filterFields"] = array();
$tdataSCRIPT_TASK[".requiredSearchFields"] = array();

$tdataSCRIPT_TASK[".allSearchFields"][] = "SCRTAS_UID";
	$tdataSCRIPT_TASK[".allSearchFields"][] = "PRJ_UID";
	$tdataSCRIPT_TASK[".allSearchFields"][] = "ACT_UID";
	$tdataSCRIPT_TASK[".allSearchFields"][] = "SCRTAS_OBJ_TYPE";
	$tdataSCRIPT_TASK[".allSearchFields"][] = "SCRTAS_OBJ_UID";
	

$tdataSCRIPT_TASK[".googleLikeFields"] = array();
$tdataSCRIPT_TASK[".googleLikeFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".googleLikeFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".googleLikeFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".googleLikeFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".googleLikeFields"][] = "SCRTAS_OBJ_UID";


$tdataSCRIPT_TASK[".advSearchFields"] = array();
$tdataSCRIPT_TASK[".advSearchFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".advSearchFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".advSearchFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".advSearchFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".advSearchFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".tableType"] = "list";

$tdataSCRIPT_TASK[".printerPageOrientation"] = 0;
$tdataSCRIPT_TASK[".nPrinterPageScale"] = 100;

$tdataSCRIPT_TASK[".nPrinterSplitRecords"] = 40;

$tdataSCRIPT_TASK[".nPrinterPDFSplitRecords"] = 40;



$tdataSCRIPT_TASK[".geocodingEnabled"] = false;





$tdataSCRIPT_TASK[".listGridLayout"] = 3;


$tdataSCRIPT_TASK[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSCRIPT_TASK[".pageSize"] = 20;

$tdataSCRIPT_TASK[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSCRIPT_TASK[".strOrderBy"] = $tstrOrderBy;

$tdataSCRIPT_TASK[".orderindexes"] = array();

$tdataSCRIPT_TASK[".sqlHead"] = "SELECT SCRTAS_UID,  	PRJ_UID,  	ACT_UID,  	SCRTAS_OBJ_TYPE,  	SCRTAS_OBJ_UID";
$tdataSCRIPT_TASK[".sqlFrom"] = "FROM SCRIPT_TASK";
$tdataSCRIPT_TASK[".sqlWhereExpr"] = "";
$tdataSCRIPT_TASK[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSCRIPT_TASK[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSCRIPT_TASK[".arrGroupsPerPage"] = $arrGPP;

$tdataSCRIPT_TASK[".highlightSearchResults"] = true;

$tableKeysSCRIPT_TASK = array();
$tableKeysSCRIPT_TASK[] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".Keys"] = $tableKeysSCRIPT_TASK;

$tdataSCRIPT_TASK[".listFields"] = array();
$tdataSCRIPT_TASK[".listFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".listFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".listFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".listFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".listFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".hideMobileList"] = array();


$tdataSCRIPT_TASK[".viewFields"] = array();
$tdataSCRIPT_TASK[".viewFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".viewFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".viewFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".viewFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".viewFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".addFields"] = array();
$tdataSCRIPT_TASK[".addFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".addFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".addFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".addFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".addFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".masterListFields"] = array();
$tdataSCRIPT_TASK[".masterListFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".masterListFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".masterListFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".masterListFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".masterListFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".inlineAddFields"] = array();
$tdataSCRIPT_TASK[".inlineAddFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".inlineAddFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".inlineAddFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".inlineAddFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".inlineAddFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".editFields"] = array();
$tdataSCRIPT_TASK[".editFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".editFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".editFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".editFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".editFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".inlineEditFields"] = array();
$tdataSCRIPT_TASK[".inlineEditFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".inlineEditFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".inlineEditFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".inlineEditFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".inlineEditFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".updateSelectedFields"] = array();
$tdataSCRIPT_TASK[".updateSelectedFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".updateSelectedFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".updateSelectedFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".updateSelectedFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".updateSelectedFields"][] = "SCRTAS_OBJ_UID";


$tdataSCRIPT_TASK[".exportFields"] = array();
$tdataSCRIPT_TASK[".exportFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".exportFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".exportFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".exportFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".exportFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".importFields"] = array();
$tdataSCRIPT_TASK[".importFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".importFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".importFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".importFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".importFields"][] = "SCRTAS_OBJ_UID";

$tdataSCRIPT_TASK[".printFields"] = array();
$tdataSCRIPT_TASK[".printFields"][] = "SCRTAS_UID";
$tdataSCRIPT_TASK[".printFields"][] = "PRJ_UID";
$tdataSCRIPT_TASK[".printFields"][] = "ACT_UID";
$tdataSCRIPT_TASK[".printFields"][] = "SCRTAS_OBJ_TYPE";
$tdataSCRIPT_TASK[".printFields"][] = "SCRTAS_OBJ_UID";

//	SCRTAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SCRTAS_UID";
	$fdata["GoodName"] = "SCRTAS_UID";
	$fdata["ownerTable"] = "SCRIPT_TASK";
	$fdata["Label"] = GetFieldLabel("SCRIPT_TASK","SCRTAS_UID");
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

		$fdata["strField"] = "SCRTAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCRTAS_UID";

	
	
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




	$tdataSCRIPT_TASK["SCRTAS_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "SCRIPT_TASK";
	$fdata["Label"] = GetFieldLabel("SCRIPT_TASK","PRJ_UID");
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




	$tdataSCRIPT_TASK["PRJ_UID"] = $fdata;
//	ACT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ACT_UID";
	$fdata["GoodName"] = "ACT_UID";
	$fdata["ownerTable"] = "SCRIPT_TASK";
	$fdata["Label"] = GetFieldLabel("SCRIPT_TASK","ACT_UID");
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

		$fdata["strField"] = "ACT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_UID";

	
	
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




	$tdataSCRIPT_TASK["ACT_UID"] = $fdata;
//	SCRTAS_OBJ_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SCRTAS_OBJ_TYPE";
	$fdata["GoodName"] = "SCRTAS_OBJ_TYPE";
	$fdata["ownerTable"] = "SCRIPT_TASK";
	$fdata["Label"] = GetFieldLabel("SCRIPT_TASK","SCRTAS_OBJ_TYPE");
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

		$fdata["strField"] = "SCRTAS_OBJ_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCRTAS_OBJ_TYPE";

	
	
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




	$tdataSCRIPT_TASK["SCRTAS_OBJ_TYPE"] = $fdata;
//	SCRTAS_OBJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SCRTAS_OBJ_UID";
	$fdata["GoodName"] = "SCRTAS_OBJ_UID";
	$fdata["ownerTable"] = "SCRIPT_TASK";
	$fdata["Label"] = GetFieldLabel("SCRIPT_TASK","SCRTAS_OBJ_UID");
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

		$fdata["strField"] = "SCRTAS_OBJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SCRTAS_OBJ_UID";

	
	
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




	$tdataSCRIPT_TASK["SCRTAS_OBJ_UID"] = $fdata;


$tables_data["SCRIPT_TASK"]=&$tdataSCRIPT_TASK;
$field_labels["SCRIPT_TASK"] = &$fieldLabelsSCRIPT_TASK;
$fieldToolTips["SCRIPT_TASK"] = &$fieldToolTipsSCRIPT_TASK;
$placeHolders["SCRIPT_TASK"] = &$placeHoldersSCRIPT_TASK;
$page_titles["SCRIPT_TASK"] = &$pageTitlesSCRIPT_TASK;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SCRIPT_TASK"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SCRIPT_TASK"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SCRIPT_TASK()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SCRTAS_UID,  	PRJ_UID,  	ACT_UID,  	SCRTAS_OBJ_TYPE,  	SCRTAS_OBJ_UID";
$proto0["m_strFrom"] = "FROM SCRIPT_TASK";
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
	"m_strName" => "SCRTAS_UID",
	"m_strTable" => "SCRIPT_TASK",
	"m_srcTableName" => "SCRIPT_TASK"
));

$proto6["m_sql"] = "SCRTAS_UID";
$proto6["m_srcTableName"] = "SCRIPT_TASK";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "SCRIPT_TASK",
	"m_srcTableName" => "SCRIPT_TASK"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "SCRIPT_TASK";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_UID",
	"m_strTable" => "SCRIPT_TASK",
	"m_srcTableName" => "SCRIPT_TASK"
));

$proto10["m_sql"] = "ACT_UID";
$proto10["m_srcTableName"] = "SCRIPT_TASK";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SCRTAS_OBJ_TYPE",
	"m_strTable" => "SCRIPT_TASK",
	"m_srcTableName" => "SCRIPT_TASK"
));

$proto12["m_sql"] = "SCRTAS_OBJ_TYPE";
$proto12["m_srcTableName"] = "SCRIPT_TASK";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SCRTAS_OBJ_UID",
	"m_strTable" => "SCRIPT_TASK",
	"m_srcTableName" => "SCRIPT_TASK"
));

$proto14["m_sql"] = "SCRTAS_OBJ_UID";
$proto14["m_srcTableName"] = "SCRIPT_TASK";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "SCRIPT_TASK";
$proto17["m_srcTableName"] = "SCRIPT_TASK";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "SCRTAS_UID";
$proto17["m_columns"][] = "PRJ_UID";
$proto17["m_columns"][] = "ACT_UID";
$proto17["m_columns"][] = "SCRTAS_OBJ_TYPE";
$proto17["m_columns"][] = "SCRTAS_OBJ_UID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "SCRIPT_TASK";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "SCRIPT_TASK";
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
$proto0["m_srcTableName"]="SCRIPT_TASK";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SCRIPT_TASK = createSqlQuery_SCRIPT_TASK();


	
						;

					

$tdataSCRIPT_TASK[".sqlquery"] = $queryData_SCRIPT_TASK;

$tableEvents["SCRIPT_TASK"] = new eventsBase;
$tdataSCRIPT_TASK[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSTEP = array();
	$tdataSTEP[".truncateText"] = true;
	$tdataSTEP[".NumberOfChars"] = 20;
	$tdataSTEP[".ShortName"] = "STEP";
	$tdataSTEP[".OwnerID"] = "";
	$tdataSTEP[".OriginalTable"] = "STEP";

//	field labels
$fieldLabelsSTEP = array();
$fieldToolTipsSTEP = array();
$pageTitlesSTEP = array();
$placeHoldersSTEP = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSTEP["Japanese"] = array();
	$fieldToolTipsSTEP["Japanese"] = array();
	$placeHoldersSTEP["Japanese"] = array();
	$pageTitlesSTEP["Japanese"] = array();
	$fieldLabelsSTEP["Japanese"]["STEP_UID"] = "ステップUID";
	$fieldToolTipsSTEP["Japanese"]["STEP_UID"] = "";
	$placeHoldersSTEP["Japanese"]["STEP_UID"] = "";
	$fieldLabelsSTEP["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSTEP["Japanese"]["PRO_UID"] = "";
	$placeHoldersSTEP["Japanese"]["PRO_UID"] = "";
	$fieldLabelsSTEP["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsSTEP["Japanese"]["TAS_UID"] = "";
	$placeHoldersSTEP["Japanese"]["TAS_UID"] = "";
	$fieldLabelsSTEP["Japanese"]["STEP_TYPE_OBJ"] = "ステップタイプOBJ";
	$fieldToolTipsSTEP["Japanese"]["STEP_TYPE_OBJ"] = "";
	$placeHoldersSTEP["Japanese"]["STEP_TYPE_OBJ"] = "";
	$fieldLabelsSTEP["Japanese"]["STEP_UID_OBJ"] = "ステップUIDのOBJ";
	$fieldToolTipsSTEP["Japanese"]["STEP_UID_OBJ"] = "";
	$placeHoldersSTEP["Japanese"]["STEP_UID_OBJ"] = "";
	$fieldLabelsSTEP["Japanese"]["STEP_CONDITION"] = "ステップ条件";
	$fieldToolTipsSTEP["Japanese"]["STEP_CONDITION"] = "";
	$placeHoldersSTEP["Japanese"]["STEP_CONDITION"] = "";
	$fieldLabelsSTEP["Japanese"]["STEP_POSITION"] = "ステップ位置";
	$fieldToolTipsSTEP["Japanese"]["STEP_POSITION"] = "";
	$placeHoldersSTEP["Japanese"]["STEP_POSITION"] = "";
	$fieldLabelsSTEP["Japanese"]["STEP_MODE"] = "ステップモード";
	$fieldToolTipsSTEP["Japanese"]["STEP_MODE"] = "";
	$placeHoldersSTEP["Japanese"]["STEP_MODE"] = "";
	if (count($fieldToolTipsSTEP["Japanese"]))
		$tdataSTEP[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSTEP["English"] = array();
	$fieldToolTipsSTEP["English"] = array();
	$placeHoldersSTEP["English"] = array();
	$pageTitlesSTEP["English"] = array();
	$fieldLabelsSTEP["English"]["STEP_UID"] = "ステップUID";
	$fieldToolTipsSTEP["English"]["STEP_UID"] = "";
	$placeHoldersSTEP["English"]["STEP_UID"] = "";
	$fieldLabelsSTEP["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSTEP["English"]["PRO_UID"] = "";
	$placeHoldersSTEP["English"]["PRO_UID"] = "";
	$fieldLabelsSTEP["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsSTEP["English"]["TAS_UID"] = "";
	$placeHoldersSTEP["English"]["TAS_UID"] = "";
	$fieldLabelsSTEP["English"]["STEP_TYPE_OBJ"] = "ステップタイプOBJ";
	$fieldToolTipsSTEP["English"]["STEP_TYPE_OBJ"] = "";
	$placeHoldersSTEP["English"]["STEP_TYPE_OBJ"] = "";
	$fieldLabelsSTEP["English"]["STEP_UID_OBJ"] = "ステップUIDのOBJ";
	$fieldToolTipsSTEP["English"]["STEP_UID_OBJ"] = "";
	$placeHoldersSTEP["English"]["STEP_UID_OBJ"] = "";
	$fieldLabelsSTEP["English"]["STEP_CONDITION"] = "ステップ条件";
	$fieldToolTipsSTEP["English"]["STEP_CONDITION"] = "";
	$placeHoldersSTEP["English"]["STEP_CONDITION"] = "";
	$fieldLabelsSTEP["English"]["STEP_POSITION"] = "ステップ位置";
	$fieldToolTipsSTEP["English"]["STEP_POSITION"] = "";
	$placeHoldersSTEP["English"]["STEP_POSITION"] = "";
	$fieldLabelsSTEP["English"]["STEP_MODE"] = "ステップモード";
	$fieldToolTipsSTEP["English"]["STEP_MODE"] = "";
	$placeHoldersSTEP["English"]["STEP_MODE"] = "";
	if (count($fieldToolTipsSTEP["English"]))
		$tdataSTEP[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSTEP[""] = array();
	$fieldToolTipsSTEP[""] = array();
	$placeHoldersSTEP[""] = array();
	$pageTitlesSTEP[""] = array();
	if (count($fieldToolTipsSTEP[""]))
		$tdataSTEP[".isUseToolTips"] = true;
}


	$tdataSTEP[".NCSearch"] = true;



$tdataSTEP[".shortTableName"] = "STEP";
$tdataSTEP[".nSecOptions"] = 0;
$tdataSTEP[".recsPerRowPrint"] = 1;
$tdataSTEP[".mainTableOwnerID"] = "";
$tdataSTEP[".moveNext"] = 0;
$tdataSTEP[".entityType"] = 0;

$tdataSTEP[".strOriginalTableName"] = "STEP";

	



$tdataSTEP[".showAddInPopup"] = false;

$tdataSTEP[".showEditInPopup"] = false;

$tdataSTEP[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSTEP[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSTEP[".fieldsForRegister"] = array();
	
$tdataSTEP[".listAjax"] = false;

	$tdataSTEP[".audit"] = true;

	$tdataSTEP[".locking"] = false;

$tdataSTEP[".edit"] = true;
$tdataSTEP[".afterEditAction"] = 1;
$tdataSTEP[".closePopupAfterEdit"] = 1;
$tdataSTEP[".afterEditActionDetTable"] = "";

$tdataSTEP[".add"] = true;
$tdataSTEP[".afterAddAction"] = 1;
$tdataSTEP[".closePopupAfterAdd"] = 1;
$tdataSTEP[".afterAddActionDetTable"] = "";

$tdataSTEP[".list"] = true;

$tdataSTEP[".inlineEdit"] = true;


$tdataSTEP[".reorderRecordsByHeader"] = true;
$tdataSTEP[".createSortByDropdown"] = true;
$tdataSTEP[".strSortControlSettingsJSON"] = "";



$tdataSTEP[".inlineAdd"] = true;
$tdataSTEP[".view"] = true;

$tdataSTEP[".import"] = true;

$tdataSTEP[".exportTo"] = true;

$tdataSTEP[".printFriendly"] = true;

$tdataSTEP[".delete"] = true;

$tdataSTEP[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSTEP[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSTEP[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSTEP[".searchSaving"] = false;
//

$tdataSTEP[".showSearchPanel"] = true;
		$tdataSTEP[".flexibleSearch"] = true;

$tdataSTEP[".isUseAjaxSuggest"] = true;

$tdataSTEP[".rowHighlite"] = true;



																

$tdataSTEP[".ajaxCodeSnippetAdded"] = false;

$tdataSTEP[".buttonsAdded"] = false;

$tdataSTEP[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSTEP[".isUseTimeForSearch"] = false;



$tdataSTEP[".badgeColor"] = "00c2c5";


$tdataSTEP[".allSearchFields"] = array();
$tdataSTEP[".filterFields"] = array();
$tdataSTEP[".requiredSearchFields"] = array();

$tdataSTEP[".allSearchFields"][] = "STEP_UID";
	$tdataSTEP[".allSearchFields"][] = "PRO_UID";
	$tdataSTEP[".allSearchFields"][] = "TAS_UID";
	$tdataSTEP[".allSearchFields"][] = "STEP_TYPE_OBJ";
	$tdataSTEP[".allSearchFields"][] = "STEP_UID_OBJ";
	$tdataSTEP[".allSearchFields"][] = "STEP_CONDITION";
	$tdataSTEP[".allSearchFields"][] = "STEP_POSITION";
	$tdataSTEP[".allSearchFields"][] = "STEP_MODE";
	

$tdataSTEP[".googleLikeFields"] = array();
$tdataSTEP[".googleLikeFields"][] = "STEP_UID";
$tdataSTEP[".googleLikeFields"][] = "PRO_UID";
$tdataSTEP[".googleLikeFields"][] = "TAS_UID";
$tdataSTEP[".googleLikeFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".googleLikeFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".googleLikeFields"][] = "STEP_CONDITION";
$tdataSTEP[".googleLikeFields"][] = "STEP_POSITION";
$tdataSTEP[".googleLikeFields"][] = "STEP_MODE";


$tdataSTEP[".advSearchFields"] = array();
$tdataSTEP[".advSearchFields"][] = "STEP_UID";
$tdataSTEP[".advSearchFields"][] = "PRO_UID";
$tdataSTEP[".advSearchFields"][] = "TAS_UID";
$tdataSTEP[".advSearchFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".advSearchFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".advSearchFields"][] = "STEP_CONDITION";
$tdataSTEP[".advSearchFields"][] = "STEP_POSITION";
$tdataSTEP[".advSearchFields"][] = "STEP_MODE";

$tdataSTEP[".tableType"] = "list";

$tdataSTEP[".printerPageOrientation"] = 0;
$tdataSTEP[".nPrinterPageScale"] = 100;

$tdataSTEP[".nPrinterSplitRecords"] = 40;

$tdataSTEP[".nPrinterPDFSplitRecords"] = 40;



$tdataSTEP[".geocodingEnabled"] = false;





$tdataSTEP[".listGridLayout"] = 3;


$tdataSTEP[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSTEP[".pageSize"] = 20;

$tdataSTEP[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSTEP[".strOrderBy"] = $tstrOrderBy;

$tdataSTEP[".orderindexes"] = array();

$tdataSTEP[".sqlHead"] = "SELECT STEP_UID,  	PRO_UID,  	TAS_UID,  	STEP_TYPE_OBJ,  	STEP_UID_OBJ,  	STEP_CONDITION,  	STEP_POSITION,  	STEP_MODE";
$tdataSTEP[".sqlFrom"] = "FROM STEP";
$tdataSTEP[".sqlWhereExpr"] = "";
$tdataSTEP[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSTEP[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSTEP[".arrGroupsPerPage"] = $arrGPP;

$tdataSTEP[".highlightSearchResults"] = true;

$tableKeysSTEP = array();
$tableKeysSTEP[] = "STEP_UID";
$tdataSTEP[".Keys"] = $tableKeysSTEP;

$tdataSTEP[".listFields"] = array();
$tdataSTEP[".listFields"][] = "STEP_UID";
$tdataSTEP[".listFields"][] = "PRO_UID";
$tdataSTEP[".listFields"][] = "TAS_UID";
$tdataSTEP[".listFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".listFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".listFields"][] = "STEP_CONDITION";
$tdataSTEP[".listFields"][] = "STEP_POSITION";
$tdataSTEP[".listFields"][] = "STEP_MODE";

$tdataSTEP[".hideMobileList"] = array();


$tdataSTEP[".viewFields"] = array();
$tdataSTEP[".viewFields"][] = "STEP_UID";
$tdataSTEP[".viewFields"][] = "PRO_UID";
$tdataSTEP[".viewFields"][] = "TAS_UID";
$tdataSTEP[".viewFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".viewFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".viewFields"][] = "STEP_CONDITION";
$tdataSTEP[".viewFields"][] = "STEP_POSITION";
$tdataSTEP[".viewFields"][] = "STEP_MODE";

$tdataSTEP[".addFields"] = array();
$tdataSTEP[".addFields"][] = "STEP_UID";
$tdataSTEP[".addFields"][] = "PRO_UID";
$tdataSTEP[".addFields"][] = "TAS_UID";
$tdataSTEP[".addFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".addFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".addFields"][] = "STEP_CONDITION";
$tdataSTEP[".addFields"][] = "STEP_POSITION";
$tdataSTEP[".addFields"][] = "STEP_MODE";

$tdataSTEP[".masterListFields"] = array();
$tdataSTEP[".masterListFields"][] = "STEP_UID";
$tdataSTEP[".masterListFields"][] = "PRO_UID";
$tdataSTEP[".masterListFields"][] = "TAS_UID";
$tdataSTEP[".masterListFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".masterListFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".masterListFields"][] = "STEP_CONDITION";
$tdataSTEP[".masterListFields"][] = "STEP_POSITION";
$tdataSTEP[".masterListFields"][] = "STEP_MODE";

$tdataSTEP[".inlineAddFields"] = array();
$tdataSTEP[".inlineAddFields"][] = "STEP_UID";
$tdataSTEP[".inlineAddFields"][] = "PRO_UID";
$tdataSTEP[".inlineAddFields"][] = "TAS_UID";
$tdataSTEP[".inlineAddFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".inlineAddFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".inlineAddFields"][] = "STEP_CONDITION";
$tdataSTEP[".inlineAddFields"][] = "STEP_POSITION";
$tdataSTEP[".inlineAddFields"][] = "STEP_MODE";

$tdataSTEP[".editFields"] = array();
$tdataSTEP[".editFields"][] = "STEP_UID";
$tdataSTEP[".editFields"][] = "PRO_UID";
$tdataSTEP[".editFields"][] = "TAS_UID";
$tdataSTEP[".editFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".editFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".editFields"][] = "STEP_CONDITION";
$tdataSTEP[".editFields"][] = "STEP_POSITION";
$tdataSTEP[".editFields"][] = "STEP_MODE";

$tdataSTEP[".inlineEditFields"] = array();
$tdataSTEP[".inlineEditFields"][] = "STEP_UID";
$tdataSTEP[".inlineEditFields"][] = "PRO_UID";
$tdataSTEP[".inlineEditFields"][] = "TAS_UID";
$tdataSTEP[".inlineEditFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".inlineEditFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".inlineEditFields"][] = "STEP_CONDITION";
$tdataSTEP[".inlineEditFields"][] = "STEP_POSITION";
$tdataSTEP[".inlineEditFields"][] = "STEP_MODE";

$tdataSTEP[".updateSelectedFields"] = array();
$tdataSTEP[".updateSelectedFields"][] = "STEP_UID";
$tdataSTEP[".updateSelectedFields"][] = "PRO_UID";
$tdataSTEP[".updateSelectedFields"][] = "TAS_UID";
$tdataSTEP[".updateSelectedFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".updateSelectedFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".updateSelectedFields"][] = "STEP_CONDITION";
$tdataSTEP[".updateSelectedFields"][] = "STEP_POSITION";
$tdataSTEP[".updateSelectedFields"][] = "STEP_MODE";


$tdataSTEP[".exportFields"] = array();
$tdataSTEP[".exportFields"][] = "STEP_UID";
$tdataSTEP[".exportFields"][] = "PRO_UID";
$tdataSTEP[".exportFields"][] = "TAS_UID";
$tdataSTEP[".exportFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".exportFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".exportFields"][] = "STEP_CONDITION";
$tdataSTEP[".exportFields"][] = "STEP_POSITION";
$tdataSTEP[".exportFields"][] = "STEP_MODE";

$tdataSTEP[".importFields"] = array();
$tdataSTEP[".importFields"][] = "STEP_UID";
$tdataSTEP[".importFields"][] = "PRO_UID";
$tdataSTEP[".importFields"][] = "TAS_UID";
$tdataSTEP[".importFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".importFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".importFields"][] = "STEP_CONDITION";
$tdataSTEP[".importFields"][] = "STEP_POSITION";
$tdataSTEP[".importFields"][] = "STEP_MODE";

$tdataSTEP[".printFields"] = array();
$tdataSTEP[".printFields"][] = "STEP_UID";
$tdataSTEP[".printFields"][] = "PRO_UID";
$tdataSTEP[".printFields"][] = "TAS_UID";
$tdataSTEP[".printFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP[".printFields"][] = "STEP_UID_OBJ";
$tdataSTEP[".printFields"][] = "STEP_CONDITION";
$tdataSTEP[".printFields"][] = "STEP_POSITION";
$tdataSTEP[".printFields"][] = "STEP_MODE";

//	STEP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "STEP_UID";
	$fdata["GoodName"] = "STEP_UID";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","STEP_UID");
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

		$fdata["strField"] = "STEP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STEP_UID";

	
	
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




	$tdataSTEP["STEP_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","PRO_UID");
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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




	$tdataSTEP["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","TAS_UID");
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




	$tdataSTEP["TAS_UID"] = $fdata;
//	STEP_TYPE_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STEP_TYPE_OBJ";
	$fdata["GoodName"] = "STEP_TYPE_OBJ";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","STEP_TYPE_OBJ");
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

		$fdata["strField"] = "STEP_TYPE_OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STEP_TYPE_OBJ";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataSTEP["STEP_TYPE_OBJ"] = $fdata;
//	STEP_UID_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STEP_UID_OBJ";
	$fdata["GoodName"] = "STEP_UID_OBJ";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","STEP_UID_OBJ");
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

		$fdata["strField"] = "STEP_UID_OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STEP_UID_OBJ";

	
	
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




	$tdataSTEP["STEP_UID_OBJ"] = $fdata;
//	STEP_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "STEP_CONDITION";
	$fdata["GoodName"] = "STEP_CONDITION";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","STEP_CONDITION");
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

		$fdata["strField"] = "STEP_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STEP_CONDITION";

	
	
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




	$tdataSTEP["STEP_CONDITION"] = $fdata;
//	STEP_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "STEP_POSITION";
	$fdata["GoodName"] = "STEP_POSITION";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","STEP_POSITION");
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

		$fdata["strField"] = "STEP_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STEP_POSITION";

	
	
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




	$tdataSTEP["STEP_POSITION"] = $fdata;
//	STEP_MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "STEP_MODE";
	$fdata["GoodName"] = "STEP_MODE";
	$fdata["ownerTable"] = "STEP";
	$fdata["Label"] = GetFieldLabel("STEP","STEP_MODE");
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

		$fdata["strField"] = "STEP_MODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STEP_MODE";

	
	
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




	$tdataSTEP["STEP_MODE"] = $fdata;


$tables_data["STEP"]=&$tdataSTEP;
$field_labels["STEP"] = &$fieldLabelsSTEP;
$fieldToolTips["STEP"] = &$fieldToolTipsSTEP;
$placeHolders["STEP"] = &$placeHoldersSTEP;
$page_titles["STEP"] = &$pageTitlesSTEP;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["STEP"] = array();
//	STEP_TRIGGER
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="STEP_TRIGGER";
		$detailsParam["dOriginalTable"] = "STEP_TRIGGER";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "STEP_TRIGGER";
	$detailsParam["dCaptionTable"] = GetTableCaption("STEP_TRIGGER");
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
		
	$detailsTablesData["STEP"][$dIndex] = $detailsParam;

	
		$detailsTablesData["STEP"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["STEP"][$dIndex]["masterKeys"][]="STEP_UID";

				$detailsTablesData["STEP"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["STEP"][$dIndex]["detailKeys"][]="STEP_UID";

// tables which are master tables for current table (detail)
$masterTablesData["STEP"] = array();


	
				$strOriginalDetailsTable="PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["STEP"][0] = $masterParams;
				$masterTablesData["STEP"][0]["masterKeys"] = array();
	$masterTablesData["STEP"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["STEP"][0]["detailKeys"] = array();
	$masterTablesData["STEP"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_STEP()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "STEP_UID,  	PRO_UID,  	TAS_UID,  	STEP_TYPE_OBJ,  	STEP_UID_OBJ,  	STEP_CONDITION,  	STEP_POSITION,  	STEP_MODE";
$proto0["m_strFrom"] = "FROM STEP";
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
	"m_strName" => "STEP_UID",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto6["m_sql"] = "STEP_UID";
$proto6["m_srcTableName"] = "STEP";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "STEP";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "STEP";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_TYPE_OBJ",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto12["m_sql"] = "STEP_TYPE_OBJ";
$proto12["m_srcTableName"] = "STEP";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_UID_OBJ",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto14["m_sql"] = "STEP_UID_OBJ";
$proto14["m_srcTableName"] = "STEP";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_CONDITION",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto16["m_sql"] = "STEP_CONDITION";
$proto16["m_srcTableName"] = "STEP";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_POSITION",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto18["m_sql"] = "STEP_POSITION";
$proto18["m_srcTableName"] = "STEP";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_MODE",
	"m_strTable" => "STEP",
	"m_srcTableName" => "STEP"
));

$proto20["m_sql"] = "STEP_MODE";
$proto20["m_srcTableName"] = "STEP";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "STEP";
$proto23["m_srcTableName"] = "STEP";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "STEP_UID";
$proto23["m_columns"][] = "PRO_UID";
$proto23["m_columns"][] = "TAS_UID";
$proto23["m_columns"][] = "STEP_TYPE_OBJ";
$proto23["m_columns"][] = "STEP_UID_OBJ";
$proto23["m_columns"][] = "STEP_CONDITION";
$proto23["m_columns"][] = "STEP_POSITION";
$proto23["m_columns"][] = "STEP_MODE";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "STEP";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "STEP";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="STEP";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_STEP = createSqlQuery_STEP();


	
						;

								

$tdataSTEP[".sqlquery"] = $queryData_STEP;

$tableEvents["STEP"] = new eventsBase;
$tdataSTEP[".hasEvents"] = false;

?>
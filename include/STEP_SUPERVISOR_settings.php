<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSTEP_SUPERVISOR = array();
	$tdataSTEP_SUPERVISOR[".truncateText"] = true;
	$tdataSTEP_SUPERVISOR[".NumberOfChars"] = 20;
	$tdataSTEP_SUPERVISOR[".ShortName"] = "STEP_SUPERVISOR";
	$tdataSTEP_SUPERVISOR[".OwnerID"] = "";
	$tdataSTEP_SUPERVISOR[".OriginalTable"] = "STEP_SUPERVISOR";

//	field labels
$fieldLabelsSTEP_SUPERVISOR = array();
$fieldToolTipsSTEP_SUPERVISOR = array();
$pageTitlesSTEP_SUPERVISOR = array();
$placeHoldersSTEP_SUPERVISOR = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSTEP_SUPERVISOR["Japanese"] = array();
	$fieldToolTipsSTEP_SUPERVISOR["Japanese"] = array();
	$placeHoldersSTEP_SUPERVISOR["Japanese"] = array();
	$pageTitlesSTEP_SUPERVISOR["Japanese"] = array();
	$fieldLabelsSTEP_SUPERVISOR["Japanese"]["STEP_UID"] = "ステップUID";
	$fieldToolTipsSTEP_SUPERVISOR["Japanese"]["STEP_UID"] = "";
	$placeHoldersSTEP_SUPERVISOR["Japanese"]["STEP_UID"] = "";
	$fieldLabelsSTEP_SUPERVISOR["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSTEP_SUPERVISOR["Japanese"]["PRO_UID"] = "";
	$placeHoldersSTEP_SUPERVISOR["Japanese"]["PRO_UID"] = "";
	$fieldLabelsSTEP_SUPERVISOR["Japanese"]["STEP_TYPE_OBJ"] = "ステップタイプOBJ";
	$fieldToolTipsSTEP_SUPERVISOR["Japanese"]["STEP_TYPE_OBJ"] = "";
	$placeHoldersSTEP_SUPERVISOR["Japanese"]["STEP_TYPE_OBJ"] = "";
	$fieldLabelsSTEP_SUPERVISOR["Japanese"]["STEP_UID_OBJ"] = "ステップUIDのOBJ";
	$fieldToolTipsSTEP_SUPERVISOR["Japanese"]["STEP_UID_OBJ"] = "";
	$placeHoldersSTEP_SUPERVISOR["Japanese"]["STEP_UID_OBJ"] = "";
	$fieldLabelsSTEP_SUPERVISOR["Japanese"]["STEP_POSITION"] = "ステップ位置";
	$fieldToolTipsSTEP_SUPERVISOR["Japanese"]["STEP_POSITION"] = "";
	$placeHoldersSTEP_SUPERVISOR["Japanese"]["STEP_POSITION"] = "";
	if (count($fieldToolTipsSTEP_SUPERVISOR["Japanese"]))
		$tdataSTEP_SUPERVISOR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSTEP_SUPERVISOR["English"] = array();
	$fieldToolTipsSTEP_SUPERVISOR["English"] = array();
	$placeHoldersSTEP_SUPERVISOR["English"] = array();
	$pageTitlesSTEP_SUPERVISOR["English"] = array();
	$fieldLabelsSTEP_SUPERVISOR["English"]["STEP_UID"] = "ステップUID";
	$fieldToolTipsSTEP_SUPERVISOR["English"]["STEP_UID"] = "";
	$placeHoldersSTEP_SUPERVISOR["English"]["STEP_UID"] = "";
	$fieldLabelsSTEP_SUPERVISOR["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSTEP_SUPERVISOR["English"]["PRO_UID"] = "";
	$placeHoldersSTEP_SUPERVISOR["English"]["PRO_UID"] = "";
	$fieldLabelsSTEP_SUPERVISOR["English"]["STEP_TYPE_OBJ"] = "ステップタイプOBJ";
	$fieldToolTipsSTEP_SUPERVISOR["English"]["STEP_TYPE_OBJ"] = "";
	$placeHoldersSTEP_SUPERVISOR["English"]["STEP_TYPE_OBJ"] = "";
	$fieldLabelsSTEP_SUPERVISOR["English"]["STEP_UID_OBJ"] = "ステップUIDのOBJ";
	$fieldToolTipsSTEP_SUPERVISOR["English"]["STEP_UID_OBJ"] = "";
	$placeHoldersSTEP_SUPERVISOR["English"]["STEP_UID_OBJ"] = "";
	$fieldLabelsSTEP_SUPERVISOR["English"]["STEP_POSITION"] = "ステップ位置";
	$fieldToolTipsSTEP_SUPERVISOR["English"]["STEP_POSITION"] = "";
	$placeHoldersSTEP_SUPERVISOR["English"]["STEP_POSITION"] = "";
	if (count($fieldToolTipsSTEP_SUPERVISOR["English"]))
		$tdataSTEP_SUPERVISOR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSTEP_SUPERVISOR[""] = array();
	$fieldToolTipsSTEP_SUPERVISOR[""] = array();
	$placeHoldersSTEP_SUPERVISOR[""] = array();
	$pageTitlesSTEP_SUPERVISOR[""] = array();
	if (count($fieldToolTipsSTEP_SUPERVISOR[""]))
		$tdataSTEP_SUPERVISOR[".isUseToolTips"] = true;
}


	$tdataSTEP_SUPERVISOR[".NCSearch"] = true;



$tdataSTEP_SUPERVISOR[".shortTableName"] = "STEP_SUPERVISOR";
$tdataSTEP_SUPERVISOR[".nSecOptions"] = 0;
$tdataSTEP_SUPERVISOR[".recsPerRowPrint"] = 1;
$tdataSTEP_SUPERVISOR[".mainTableOwnerID"] = "";
$tdataSTEP_SUPERVISOR[".moveNext"] = 0;
$tdataSTEP_SUPERVISOR[".entityType"] = 0;

$tdataSTEP_SUPERVISOR[".strOriginalTableName"] = "STEP_SUPERVISOR";

	



$tdataSTEP_SUPERVISOR[".showAddInPopup"] = false;

$tdataSTEP_SUPERVISOR[".showEditInPopup"] = false;

$tdataSTEP_SUPERVISOR[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSTEP_SUPERVISOR[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSTEP_SUPERVISOR[".fieldsForRegister"] = array();
	
$tdataSTEP_SUPERVISOR[".listAjax"] = false;

	$tdataSTEP_SUPERVISOR[".audit"] = true;

	$tdataSTEP_SUPERVISOR[".locking"] = false;

$tdataSTEP_SUPERVISOR[".edit"] = true;
$tdataSTEP_SUPERVISOR[".afterEditAction"] = 1;
$tdataSTEP_SUPERVISOR[".closePopupAfterEdit"] = 1;
$tdataSTEP_SUPERVISOR[".afterEditActionDetTable"] = "";

$tdataSTEP_SUPERVISOR[".add"] = true;
$tdataSTEP_SUPERVISOR[".afterAddAction"] = 1;
$tdataSTEP_SUPERVISOR[".closePopupAfterAdd"] = 1;
$tdataSTEP_SUPERVISOR[".afterAddActionDetTable"] = "";

$tdataSTEP_SUPERVISOR[".list"] = true;

$tdataSTEP_SUPERVISOR[".inlineEdit"] = true;


$tdataSTEP_SUPERVISOR[".reorderRecordsByHeader"] = true;
$tdataSTEP_SUPERVISOR[".createSortByDropdown"] = true;
$tdataSTEP_SUPERVISOR[".strSortControlSettingsJSON"] = "";



$tdataSTEP_SUPERVISOR[".inlineAdd"] = true;
$tdataSTEP_SUPERVISOR[".view"] = true;

$tdataSTEP_SUPERVISOR[".import"] = true;

$tdataSTEP_SUPERVISOR[".exportTo"] = true;

$tdataSTEP_SUPERVISOR[".printFriendly"] = true;

$tdataSTEP_SUPERVISOR[".delete"] = true;

$tdataSTEP_SUPERVISOR[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSTEP_SUPERVISOR[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSTEP_SUPERVISOR[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSTEP_SUPERVISOR[".searchSaving"] = false;
//

$tdataSTEP_SUPERVISOR[".showSearchPanel"] = true;
		$tdataSTEP_SUPERVISOR[".flexibleSearch"] = true;

$tdataSTEP_SUPERVISOR[".isUseAjaxSuggest"] = true;

$tdataSTEP_SUPERVISOR[".rowHighlite"] = true;



				

$tdataSTEP_SUPERVISOR[".ajaxCodeSnippetAdded"] = false;

$tdataSTEP_SUPERVISOR[".buttonsAdded"] = false;

$tdataSTEP_SUPERVISOR[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSTEP_SUPERVISOR[".isUseTimeForSearch"] = false;





$tdataSTEP_SUPERVISOR[".allSearchFields"] = array();
$tdataSTEP_SUPERVISOR[".filterFields"] = array();
$tdataSTEP_SUPERVISOR[".requiredSearchFields"] = array();

$tdataSTEP_SUPERVISOR[".allSearchFields"][] = "STEP_UID";
	$tdataSTEP_SUPERVISOR[".allSearchFields"][] = "PRO_UID";
	$tdataSTEP_SUPERVISOR[".allSearchFields"][] = "STEP_TYPE_OBJ";
	$tdataSTEP_SUPERVISOR[".allSearchFields"][] = "STEP_UID_OBJ";
	$tdataSTEP_SUPERVISOR[".allSearchFields"][] = "STEP_POSITION";
	

$tdataSTEP_SUPERVISOR[".googleLikeFields"] = array();
$tdataSTEP_SUPERVISOR[".googleLikeFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".googleLikeFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".googleLikeFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".googleLikeFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".googleLikeFields"][] = "STEP_POSITION";


$tdataSTEP_SUPERVISOR[".advSearchFields"] = array();
$tdataSTEP_SUPERVISOR[".advSearchFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".advSearchFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".advSearchFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".advSearchFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".advSearchFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".tableType"] = "list";

$tdataSTEP_SUPERVISOR[".printerPageOrientation"] = 0;
$tdataSTEP_SUPERVISOR[".nPrinterPageScale"] = 100;

$tdataSTEP_SUPERVISOR[".nPrinterSplitRecords"] = 40;

$tdataSTEP_SUPERVISOR[".nPrinterPDFSplitRecords"] = 40;



$tdataSTEP_SUPERVISOR[".geocodingEnabled"] = false;





$tdataSTEP_SUPERVISOR[".listGridLayout"] = 3;


$tdataSTEP_SUPERVISOR[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSTEP_SUPERVISOR[".pageSize"] = 20;

$tdataSTEP_SUPERVISOR[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSTEP_SUPERVISOR[".strOrderBy"] = $tstrOrderBy;

$tdataSTEP_SUPERVISOR[".orderindexes"] = array();

$tdataSTEP_SUPERVISOR[".sqlHead"] = "SELECT STEP_UID,  	PRO_UID,  	STEP_TYPE_OBJ,  	STEP_UID_OBJ,  	STEP_POSITION";
$tdataSTEP_SUPERVISOR[".sqlFrom"] = "FROM STEP_SUPERVISOR";
$tdataSTEP_SUPERVISOR[".sqlWhereExpr"] = "";
$tdataSTEP_SUPERVISOR[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSTEP_SUPERVISOR[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSTEP_SUPERVISOR[".arrGroupsPerPage"] = $arrGPP;

$tdataSTEP_SUPERVISOR[".highlightSearchResults"] = true;

$tableKeysSTEP_SUPERVISOR = array();
$tableKeysSTEP_SUPERVISOR[] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".Keys"] = $tableKeysSTEP_SUPERVISOR;

$tdataSTEP_SUPERVISOR[".listFields"] = array();
$tdataSTEP_SUPERVISOR[".listFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".listFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".listFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".listFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".listFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".hideMobileList"] = array();


$tdataSTEP_SUPERVISOR[".viewFields"] = array();
$tdataSTEP_SUPERVISOR[".viewFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".viewFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".viewFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".viewFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".viewFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".addFields"] = array();
$tdataSTEP_SUPERVISOR[".addFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".addFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".addFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".addFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".addFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".masterListFields"] = array();
$tdataSTEP_SUPERVISOR[".masterListFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".masterListFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".masterListFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".masterListFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".masterListFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".inlineAddFields"] = array();
$tdataSTEP_SUPERVISOR[".inlineAddFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".inlineAddFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".inlineAddFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".inlineAddFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".inlineAddFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".editFields"] = array();
$tdataSTEP_SUPERVISOR[".editFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".editFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".editFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".editFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".editFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".inlineEditFields"] = array();
$tdataSTEP_SUPERVISOR[".inlineEditFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".inlineEditFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".inlineEditFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".inlineEditFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".inlineEditFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".updateSelectedFields"] = array();
$tdataSTEP_SUPERVISOR[".updateSelectedFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".updateSelectedFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".updateSelectedFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".updateSelectedFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".updateSelectedFields"][] = "STEP_POSITION";


$tdataSTEP_SUPERVISOR[".exportFields"] = array();
$tdataSTEP_SUPERVISOR[".exportFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".exportFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".exportFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".exportFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".exportFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".importFields"] = array();
$tdataSTEP_SUPERVISOR[".importFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".importFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".importFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".importFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".importFields"][] = "STEP_POSITION";

$tdataSTEP_SUPERVISOR[".printFields"] = array();
$tdataSTEP_SUPERVISOR[".printFields"][] = "STEP_UID";
$tdataSTEP_SUPERVISOR[".printFields"][] = "PRO_UID";
$tdataSTEP_SUPERVISOR[".printFields"][] = "STEP_TYPE_OBJ";
$tdataSTEP_SUPERVISOR[".printFields"][] = "STEP_UID_OBJ";
$tdataSTEP_SUPERVISOR[".printFields"][] = "STEP_POSITION";

//	STEP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "STEP_UID";
	$fdata["GoodName"] = "STEP_UID";
	$fdata["ownerTable"] = "STEP_SUPERVISOR";
	$fdata["Label"] = GetFieldLabel("STEP_SUPERVISOR","STEP_UID");
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




	$tdataSTEP_SUPERVISOR["STEP_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "STEP_SUPERVISOR";
	$fdata["Label"] = GetFieldLabel("STEP_SUPERVISOR","PRO_UID");
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




	$tdataSTEP_SUPERVISOR["PRO_UID"] = $fdata;
//	STEP_TYPE_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "STEP_TYPE_OBJ";
	$fdata["GoodName"] = "STEP_TYPE_OBJ";
	$fdata["ownerTable"] = "STEP_SUPERVISOR";
	$fdata["Label"] = GetFieldLabel("STEP_SUPERVISOR","STEP_TYPE_OBJ");
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




	$tdataSTEP_SUPERVISOR["STEP_TYPE_OBJ"] = $fdata;
//	STEP_UID_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STEP_UID_OBJ";
	$fdata["GoodName"] = "STEP_UID_OBJ";
	$fdata["ownerTable"] = "STEP_SUPERVISOR";
	$fdata["Label"] = GetFieldLabel("STEP_SUPERVISOR","STEP_UID_OBJ");
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




	$tdataSTEP_SUPERVISOR["STEP_UID_OBJ"] = $fdata;
//	STEP_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STEP_POSITION";
	$fdata["GoodName"] = "STEP_POSITION";
	$fdata["ownerTable"] = "STEP_SUPERVISOR";
	$fdata["Label"] = GetFieldLabel("STEP_SUPERVISOR","STEP_POSITION");
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




	$tdataSTEP_SUPERVISOR["STEP_POSITION"] = $fdata;


$tables_data["STEP_SUPERVISOR"]=&$tdataSTEP_SUPERVISOR;
$field_labels["STEP_SUPERVISOR"] = &$fieldLabelsSTEP_SUPERVISOR;
$fieldToolTips["STEP_SUPERVISOR"] = &$fieldToolTipsSTEP_SUPERVISOR;
$placeHolders["STEP_SUPERVISOR"] = &$placeHoldersSTEP_SUPERVISOR;
$page_titles["STEP_SUPERVISOR"] = &$pageTitlesSTEP_SUPERVISOR;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["STEP_SUPERVISOR"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["STEP_SUPERVISOR"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_STEP_SUPERVISOR()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "STEP_UID,  	PRO_UID,  	STEP_TYPE_OBJ,  	STEP_UID_OBJ,  	STEP_POSITION";
$proto0["m_strFrom"] = "FROM STEP_SUPERVISOR";
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
	"m_strTable" => "STEP_SUPERVISOR",
	"m_srcTableName" => "STEP_SUPERVISOR"
));

$proto6["m_sql"] = "STEP_UID";
$proto6["m_srcTableName"] = "STEP_SUPERVISOR";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "STEP_SUPERVISOR",
	"m_srcTableName" => "STEP_SUPERVISOR"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "STEP_SUPERVISOR";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_TYPE_OBJ",
	"m_strTable" => "STEP_SUPERVISOR",
	"m_srcTableName" => "STEP_SUPERVISOR"
));

$proto10["m_sql"] = "STEP_TYPE_OBJ";
$proto10["m_srcTableName"] = "STEP_SUPERVISOR";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_UID_OBJ",
	"m_strTable" => "STEP_SUPERVISOR",
	"m_srcTableName" => "STEP_SUPERVISOR"
));

$proto12["m_sql"] = "STEP_UID_OBJ";
$proto12["m_srcTableName"] = "STEP_SUPERVISOR";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STEP_POSITION",
	"m_strTable" => "STEP_SUPERVISOR",
	"m_srcTableName" => "STEP_SUPERVISOR"
));

$proto14["m_sql"] = "STEP_POSITION";
$proto14["m_srcTableName"] = "STEP_SUPERVISOR";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "STEP_SUPERVISOR";
$proto17["m_srcTableName"] = "STEP_SUPERVISOR";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "STEP_UID";
$proto17["m_columns"][] = "PRO_UID";
$proto17["m_columns"][] = "STEP_TYPE_OBJ";
$proto17["m_columns"][] = "STEP_UID_OBJ";
$proto17["m_columns"][] = "STEP_POSITION";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "STEP_SUPERVISOR";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "STEP_SUPERVISOR";
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
$proto0["m_srcTableName"]="STEP_SUPERVISOR";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_STEP_SUPERVISOR = createSqlQuery_STEP_SUPERVISOR();


	
						;

					

$tdataSTEP_SUPERVISOR[".sqlquery"] = $queryData_STEP_SUPERVISOR;

$tableEvents["STEP_SUPERVISOR"] = new eventsBase;
$tdataSTEP_SUPERVISOR[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSTEP_TRIGGER = array();
	$tdataSTEP_TRIGGER[".truncateText"] = true;
	$tdataSTEP_TRIGGER[".NumberOfChars"] = 20;
	$tdataSTEP_TRIGGER[".ShortName"] = "STEP_TRIGGER";
	$tdataSTEP_TRIGGER[".OwnerID"] = "";
	$tdataSTEP_TRIGGER[".OriginalTable"] = "STEP_TRIGGER";

//	field labels
$fieldLabelsSTEP_TRIGGER = array();
$fieldToolTipsSTEP_TRIGGER = array();
$pageTitlesSTEP_TRIGGER = array();
$placeHoldersSTEP_TRIGGER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSTEP_TRIGGER["Japanese"] = array();
	$fieldToolTipsSTEP_TRIGGER["Japanese"] = array();
	$placeHoldersSTEP_TRIGGER["Japanese"] = array();
	$pageTitlesSTEP_TRIGGER["Japanese"] = array();
	$fieldLabelsSTEP_TRIGGER["Japanese"]["STEP_UID"] = "ステップUID";
	$fieldToolTipsSTEP_TRIGGER["Japanese"]["STEP_UID"] = "";
	$placeHoldersSTEP_TRIGGER["Japanese"]["STEP_UID"] = "";
	$fieldLabelsSTEP_TRIGGER["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsSTEP_TRIGGER["Japanese"]["TAS_UID"] = "";
	$placeHoldersSTEP_TRIGGER["Japanese"]["TAS_UID"] = "";
	$fieldLabelsSTEP_TRIGGER["Japanese"]["TRI_UID"] = "トライUID";
	$fieldToolTipsSTEP_TRIGGER["Japanese"]["TRI_UID"] = "";
	$placeHoldersSTEP_TRIGGER["Japanese"]["TRI_UID"] = "";
	$fieldLabelsSTEP_TRIGGER["Japanese"]["ST_TYPE"] = "STタイプ";
	$fieldToolTipsSTEP_TRIGGER["Japanese"]["ST_TYPE"] = "";
	$placeHoldersSTEP_TRIGGER["Japanese"]["ST_TYPE"] = "";
	$fieldLabelsSTEP_TRIGGER["Japanese"]["ST_CONDITION"] = "番目の条件";
	$fieldToolTipsSTEP_TRIGGER["Japanese"]["ST_CONDITION"] = "";
	$placeHoldersSTEP_TRIGGER["Japanese"]["ST_CONDITION"] = "";
	$fieldLabelsSTEP_TRIGGER["Japanese"]["ST_POSITION"] = "番目の位置";
	$fieldToolTipsSTEP_TRIGGER["Japanese"]["ST_POSITION"] = "";
	$placeHoldersSTEP_TRIGGER["Japanese"]["ST_POSITION"] = "";
	if (count($fieldToolTipsSTEP_TRIGGER["Japanese"]))
		$tdataSTEP_TRIGGER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSTEP_TRIGGER["English"] = array();
	$fieldToolTipsSTEP_TRIGGER["English"] = array();
	$placeHoldersSTEP_TRIGGER["English"] = array();
	$pageTitlesSTEP_TRIGGER["English"] = array();
	$fieldLabelsSTEP_TRIGGER["English"]["STEP_UID"] = "ステップUID";
	$fieldToolTipsSTEP_TRIGGER["English"]["STEP_UID"] = "";
	$placeHoldersSTEP_TRIGGER["English"]["STEP_UID"] = "";
	$fieldLabelsSTEP_TRIGGER["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsSTEP_TRIGGER["English"]["TAS_UID"] = "";
	$placeHoldersSTEP_TRIGGER["English"]["TAS_UID"] = "";
	$fieldLabelsSTEP_TRIGGER["English"]["TRI_UID"] = "トライUID";
	$fieldToolTipsSTEP_TRIGGER["English"]["TRI_UID"] = "";
	$placeHoldersSTEP_TRIGGER["English"]["TRI_UID"] = "";
	$fieldLabelsSTEP_TRIGGER["English"]["ST_TYPE"] = "STタイプ";
	$fieldToolTipsSTEP_TRIGGER["English"]["ST_TYPE"] = "";
	$placeHoldersSTEP_TRIGGER["English"]["ST_TYPE"] = "";
	$fieldLabelsSTEP_TRIGGER["English"]["ST_CONDITION"] = "番目の条件";
	$fieldToolTipsSTEP_TRIGGER["English"]["ST_CONDITION"] = "";
	$placeHoldersSTEP_TRIGGER["English"]["ST_CONDITION"] = "";
	$fieldLabelsSTEP_TRIGGER["English"]["ST_POSITION"] = "番目の位置";
	$fieldToolTipsSTEP_TRIGGER["English"]["ST_POSITION"] = "";
	$placeHoldersSTEP_TRIGGER["English"]["ST_POSITION"] = "";
	if (count($fieldToolTipsSTEP_TRIGGER["English"]))
		$tdataSTEP_TRIGGER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSTEP_TRIGGER[""] = array();
	$fieldToolTipsSTEP_TRIGGER[""] = array();
	$placeHoldersSTEP_TRIGGER[""] = array();
	$pageTitlesSTEP_TRIGGER[""] = array();
	if (count($fieldToolTipsSTEP_TRIGGER[""]))
		$tdataSTEP_TRIGGER[".isUseToolTips"] = true;
}


	$tdataSTEP_TRIGGER[".NCSearch"] = true;



$tdataSTEP_TRIGGER[".shortTableName"] = "STEP_TRIGGER";
$tdataSTEP_TRIGGER[".nSecOptions"] = 0;
$tdataSTEP_TRIGGER[".recsPerRowPrint"] = 1;
$tdataSTEP_TRIGGER[".mainTableOwnerID"] = "";
$tdataSTEP_TRIGGER[".moveNext"] = 0;
$tdataSTEP_TRIGGER[".entityType"] = 0;

$tdataSTEP_TRIGGER[".strOriginalTableName"] = "STEP_TRIGGER";

	



$tdataSTEP_TRIGGER[".showAddInPopup"] = false;

$tdataSTEP_TRIGGER[".showEditInPopup"] = false;

$tdataSTEP_TRIGGER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSTEP_TRIGGER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSTEP_TRIGGER[".fieldsForRegister"] = array();
	
$tdataSTEP_TRIGGER[".listAjax"] = false;

	$tdataSTEP_TRIGGER[".audit"] = true;

	$tdataSTEP_TRIGGER[".locking"] = false;

$tdataSTEP_TRIGGER[".edit"] = true;
$tdataSTEP_TRIGGER[".afterEditAction"] = 1;
$tdataSTEP_TRIGGER[".closePopupAfterEdit"] = 1;
$tdataSTEP_TRIGGER[".afterEditActionDetTable"] = "";

$tdataSTEP_TRIGGER[".add"] = true;
$tdataSTEP_TRIGGER[".afterAddAction"] = 1;
$tdataSTEP_TRIGGER[".closePopupAfterAdd"] = 1;
$tdataSTEP_TRIGGER[".afterAddActionDetTable"] = "";

$tdataSTEP_TRIGGER[".list"] = true;

$tdataSTEP_TRIGGER[".inlineEdit"] = true;


$tdataSTEP_TRIGGER[".reorderRecordsByHeader"] = true;
$tdataSTEP_TRIGGER[".createSortByDropdown"] = true;
$tdataSTEP_TRIGGER[".strSortControlSettingsJSON"] = "";



$tdataSTEP_TRIGGER[".inlineAdd"] = true;
$tdataSTEP_TRIGGER[".view"] = true;

$tdataSTEP_TRIGGER[".import"] = true;

$tdataSTEP_TRIGGER[".exportTo"] = true;

$tdataSTEP_TRIGGER[".printFriendly"] = true;

$tdataSTEP_TRIGGER[".delete"] = true;

$tdataSTEP_TRIGGER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSTEP_TRIGGER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSTEP_TRIGGER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSTEP_TRIGGER[".searchSaving"] = false;
//

$tdataSTEP_TRIGGER[".showSearchPanel"] = true;
		$tdataSTEP_TRIGGER[".flexibleSearch"] = true;

$tdataSTEP_TRIGGER[".isUseAjaxSuggest"] = true;

$tdataSTEP_TRIGGER[".rowHighlite"] = true;



																																								

$tdataSTEP_TRIGGER[".ajaxCodeSnippetAdded"] = false;

$tdataSTEP_TRIGGER[".buttonsAdded"] = false;

$tdataSTEP_TRIGGER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSTEP_TRIGGER[".isUseTimeForSearch"] = false;



$tdataSTEP_TRIGGER[".badgeColor"] = "00c2c5";


$tdataSTEP_TRIGGER[".allSearchFields"] = array();
$tdataSTEP_TRIGGER[".filterFields"] = array();
$tdataSTEP_TRIGGER[".requiredSearchFields"] = array();

$tdataSTEP_TRIGGER[".allSearchFields"][] = "STEP_UID";
	$tdataSTEP_TRIGGER[".allSearchFields"][] = "TAS_UID";
	$tdataSTEP_TRIGGER[".allSearchFields"][] = "TRI_UID";
	$tdataSTEP_TRIGGER[".allSearchFields"][] = "ST_TYPE";
	$tdataSTEP_TRIGGER[".allSearchFields"][] = "ST_CONDITION";
	$tdataSTEP_TRIGGER[".allSearchFields"][] = "ST_POSITION";
	

$tdataSTEP_TRIGGER[".googleLikeFields"] = array();
$tdataSTEP_TRIGGER[".googleLikeFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".googleLikeFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".googleLikeFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".googleLikeFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".googleLikeFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".googleLikeFields"][] = "ST_POSITION";


$tdataSTEP_TRIGGER[".advSearchFields"] = array();
$tdataSTEP_TRIGGER[".advSearchFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".advSearchFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".advSearchFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".advSearchFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".advSearchFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".advSearchFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".tableType"] = "list";

$tdataSTEP_TRIGGER[".printerPageOrientation"] = 0;
$tdataSTEP_TRIGGER[".nPrinterPageScale"] = 100;

$tdataSTEP_TRIGGER[".nPrinterSplitRecords"] = 40;

$tdataSTEP_TRIGGER[".nPrinterPDFSplitRecords"] = 40;



$tdataSTEP_TRIGGER[".geocodingEnabled"] = false;





$tdataSTEP_TRIGGER[".listGridLayout"] = 3;


$tdataSTEP_TRIGGER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSTEP_TRIGGER[".pageSize"] = 20;

$tdataSTEP_TRIGGER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSTEP_TRIGGER[".strOrderBy"] = $tstrOrderBy;

$tdataSTEP_TRIGGER[".orderindexes"] = array();

$tdataSTEP_TRIGGER[".sqlHead"] = "SELECT STEP_UID,  	TAS_UID,  	TRI_UID,  	ST_TYPE,  	ST_CONDITION,  	ST_POSITION";
$tdataSTEP_TRIGGER[".sqlFrom"] = "FROM STEP_TRIGGER";
$tdataSTEP_TRIGGER[".sqlWhereExpr"] = "";
$tdataSTEP_TRIGGER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSTEP_TRIGGER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSTEP_TRIGGER[".arrGroupsPerPage"] = $arrGPP;

$tdataSTEP_TRIGGER[".highlightSearchResults"] = true;

$tableKeysSTEP_TRIGGER = array();
$tableKeysSTEP_TRIGGER[] = "STEP_UID";
$tableKeysSTEP_TRIGGER[] = "TAS_UID";
$tableKeysSTEP_TRIGGER[] = "TRI_UID";
$tableKeysSTEP_TRIGGER[] = "ST_TYPE";
$tdataSTEP_TRIGGER[".Keys"] = $tableKeysSTEP_TRIGGER;

$tdataSTEP_TRIGGER[".listFields"] = array();
$tdataSTEP_TRIGGER[".listFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".listFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".listFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".listFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".listFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".listFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".hideMobileList"] = array();


$tdataSTEP_TRIGGER[".viewFields"] = array();
$tdataSTEP_TRIGGER[".viewFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".viewFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".viewFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".viewFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".viewFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".viewFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".addFields"] = array();
$tdataSTEP_TRIGGER[".addFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".addFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".addFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".addFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".addFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".addFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".masterListFields"] = array();
$tdataSTEP_TRIGGER[".masterListFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".masterListFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".masterListFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".masterListFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".masterListFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".masterListFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".inlineAddFields"] = array();
$tdataSTEP_TRIGGER[".inlineAddFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".inlineAddFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".inlineAddFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".inlineAddFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".inlineAddFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".inlineAddFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".editFields"] = array();
$tdataSTEP_TRIGGER[".editFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".editFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".editFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".editFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".editFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".editFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".inlineEditFields"] = array();
$tdataSTEP_TRIGGER[".inlineEditFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".inlineEditFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".inlineEditFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".inlineEditFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".inlineEditFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".inlineEditFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".updateSelectedFields"] = array();
$tdataSTEP_TRIGGER[".updateSelectedFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".updateSelectedFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".updateSelectedFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".updateSelectedFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".updateSelectedFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".updateSelectedFields"][] = "ST_POSITION";


$tdataSTEP_TRIGGER[".exportFields"] = array();
$tdataSTEP_TRIGGER[".exportFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".exportFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".exportFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".exportFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".exportFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".exportFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".importFields"] = array();
$tdataSTEP_TRIGGER[".importFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".importFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".importFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".importFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".importFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".importFields"][] = "ST_POSITION";

$tdataSTEP_TRIGGER[".printFields"] = array();
$tdataSTEP_TRIGGER[".printFields"][] = "STEP_UID";
$tdataSTEP_TRIGGER[".printFields"][] = "TAS_UID";
$tdataSTEP_TRIGGER[".printFields"][] = "TRI_UID";
$tdataSTEP_TRIGGER[".printFields"][] = "ST_TYPE";
$tdataSTEP_TRIGGER[".printFields"][] = "ST_CONDITION";
$tdataSTEP_TRIGGER[".printFields"][] = "ST_POSITION";

//	STEP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "STEP_UID";
	$fdata["GoodName"] = "STEP_UID";
	$fdata["ownerTable"] = "STEP_TRIGGER";
	$fdata["Label"] = GetFieldLabel("STEP_TRIGGER","STEP_UID");
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




	$tdataSTEP_TRIGGER["STEP_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "STEP_TRIGGER";
	$fdata["Label"] = GetFieldLabel("STEP_TRIGGER","TAS_UID");
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




	$tdataSTEP_TRIGGER["TAS_UID"] = $fdata;
//	TRI_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TRI_UID";
	$fdata["GoodName"] = "TRI_UID";
	$fdata["ownerTable"] = "STEP_TRIGGER";
	$fdata["Label"] = GetFieldLabel("STEP_TRIGGER","TRI_UID");
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

		$fdata["strField"] = "TRI_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_UID";

	
	
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




	$tdataSTEP_TRIGGER["TRI_UID"] = $fdata;
//	ST_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ST_TYPE";
	$fdata["GoodName"] = "ST_TYPE";
	$fdata["ownerTable"] = "STEP_TRIGGER";
	$fdata["Label"] = GetFieldLabel("STEP_TRIGGER","ST_TYPE");
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

		$fdata["strField"] = "ST_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ST_TYPE";

	
	
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




	$tdataSTEP_TRIGGER["ST_TYPE"] = $fdata;
//	ST_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ST_CONDITION";
	$fdata["GoodName"] = "ST_CONDITION";
	$fdata["ownerTable"] = "STEP_TRIGGER";
	$fdata["Label"] = GetFieldLabel("STEP_TRIGGER","ST_CONDITION");
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

		$fdata["strField"] = "ST_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ST_CONDITION";

	
	
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




	$tdataSTEP_TRIGGER["ST_CONDITION"] = $fdata;
//	ST_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ST_POSITION";
	$fdata["GoodName"] = "ST_POSITION";
	$fdata["ownerTable"] = "STEP_TRIGGER";
	$fdata["Label"] = GetFieldLabel("STEP_TRIGGER","ST_POSITION");
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

		$fdata["strField"] = "ST_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ST_POSITION";

	
	
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




	$tdataSTEP_TRIGGER["ST_POSITION"] = $fdata;


$tables_data["STEP_TRIGGER"]=&$tdataSTEP_TRIGGER;
$field_labels["STEP_TRIGGER"] = &$fieldLabelsSTEP_TRIGGER;
$fieldToolTips["STEP_TRIGGER"] = &$fieldToolTipsSTEP_TRIGGER;
$placeHolders["STEP_TRIGGER"] = &$placeHoldersSTEP_TRIGGER;
$page_titles["STEP_TRIGGER"] = &$pageTitlesSTEP_TRIGGER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["STEP_TRIGGER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["STEP_TRIGGER"] = array();


	
				$strOriginalDetailsTable="STEP";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="STEP";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "STEP";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["STEP_TRIGGER"][0] = $masterParams;
				$masterTablesData["STEP_TRIGGER"][0]["masterKeys"] = array();
	$masterTablesData["STEP_TRIGGER"][0]["masterKeys"][]="STEP_UID";
				$masterTablesData["STEP_TRIGGER"][0]["detailKeys"] = array();
	$masterTablesData["STEP_TRIGGER"][0]["detailKeys"][]="STEP_UID";
		
	
				$strOriginalDetailsTable="TRIGGERS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TRIGGERS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "TRIGGERS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["STEP_TRIGGER"][1] = $masterParams;
				$masterTablesData["STEP_TRIGGER"][1]["masterKeys"] = array();
	$masterTablesData["STEP_TRIGGER"][1]["masterKeys"][]="TRI_UID";
				$masterTablesData["STEP_TRIGGER"][1]["detailKeys"] = array();
	$masterTablesData["STEP_TRIGGER"][1]["detailKeys"][]="TRI_UID";
		
	
				$strOriginalDetailsTable="TASK";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TASK";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "TASK";
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
					$masterTablesData["STEP_TRIGGER"][2] = $masterParams;
				$masterTablesData["STEP_TRIGGER"][2]["masterKeys"] = array();
	$masterTablesData["STEP_TRIGGER"][2]["masterKeys"][]="TAS_UID";
				$masterTablesData["STEP_TRIGGER"][2]["detailKeys"] = array();
	$masterTablesData["STEP_TRIGGER"][2]["detailKeys"][]="TAS_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_STEP_TRIGGER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "STEP_UID,  	TAS_UID,  	TRI_UID,  	ST_TYPE,  	ST_CONDITION,  	ST_POSITION";
$proto0["m_strFrom"] = "FROM STEP_TRIGGER";
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
	"m_strTable" => "STEP_TRIGGER",
	"m_srcTableName" => "STEP_TRIGGER"
));

$proto6["m_sql"] = "STEP_UID";
$proto6["m_srcTableName"] = "STEP_TRIGGER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "STEP_TRIGGER",
	"m_srcTableName" => "STEP_TRIGGER"
));

$proto8["m_sql"] = "TAS_UID";
$proto8["m_srcTableName"] = "STEP_TRIGGER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TRI_UID",
	"m_strTable" => "STEP_TRIGGER",
	"m_srcTableName" => "STEP_TRIGGER"
));

$proto10["m_sql"] = "TRI_UID";
$proto10["m_srcTableName"] = "STEP_TRIGGER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ST_TYPE",
	"m_strTable" => "STEP_TRIGGER",
	"m_srcTableName" => "STEP_TRIGGER"
));

$proto12["m_sql"] = "ST_TYPE";
$proto12["m_srcTableName"] = "STEP_TRIGGER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ST_CONDITION",
	"m_strTable" => "STEP_TRIGGER",
	"m_srcTableName" => "STEP_TRIGGER"
));

$proto14["m_sql"] = "ST_CONDITION";
$proto14["m_srcTableName"] = "STEP_TRIGGER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ST_POSITION",
	"m_strTable" => "STEP_TRIGGER",
	"m_srcTableName" => "STEP_TRIGGER"
));

$proto16["m_sql"] = "ST_POSITION";
$proto16["m_srcTableName"] = "STEP_TRIGGER";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "STEP_TRIGGER";
$proto19["m_srcTableName"] = "STEP_TRIGGER";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "STEP_UID";
$proto19["m_columns"][] = "TAS_UID";
$proto19["m_columns"][] = "TRI_UID";
$proto19["m_columns"][] = "ST_TYPE";
$proto19["m_columns"][] = "ST_CONDITION";
$proto19["m_columns"][] = "ST_POSITION";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "STEP_TRIGGER";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "STEP_TRIGGER";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="STEP_TRIGGER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_STEP_TRIGGER = createSqlQuery_STEP_TRIGGER();


	
						;

						

$tdataSTEP_TRIGGER[".sqlquery"] = $queryData_STEP_TRIGGER;

$tableEvents["STEP_TRIGGER"] = new eventsBase;
$tdataSTEP_TRIGGER[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFIELD_CONDITION = array();
	$tdataFIELD_CONDITION[".truncateText"] = true;
	$tdataFIELD_CONDITION[".NumberOfChars"] = 20;
	$tdataFIELD_CONDITION[".ShortName"] = "FIELD_CONDITION";
	$tdataFIELD_CONDITION[".OwnerID"] = "";
	$tdataFIELD_CONDITION[".OriginalTable"] = "FIELD_CONDITION";

//	field labels
$fieldLabelsFIELD_CONDITION = array();
$fieldToolTipsFIELD_CONDITION = array();
$pageTitlesFIELD_CONDITION = array();
$placeHoldersFIELD_CONDITION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsFIELD_CONDITION["Japanese"] = array();
	$fieldToolTipsFIELD_CONDITION["Japanese"] = array();
	$placeHoldersFIELD_CONDITION["Japanese"] = array();
	$pageTitlesFIELD_CONDITION["Japanese"] = array();
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_UID"] = "FCDのUID";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_UID"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_UID"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_FUNCTION"] = "FCD機能";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_FUNCTION"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_FUNCTION"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_FIELDS"] = "FCDフィールド";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_FIELDS"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_FIELDS"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_CONDITION"] = "FCD条件";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_CONDITION"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_CONDITION"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_EVENTS"] = "FCDイベント";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_EVENTS"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_EVENTS"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_EVENT_OWNERS"] = "FCDイベントの所有者";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_EVENT_OWNERS"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_EVENT_OWNERS"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_STATUS"] = "FCDのステータス";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_STATUS"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_STATUS"] = "";
	$fieldLabelsFIELD_CONDITION["Japanese"]["FCD_DYN_UID"] = "FCDのDYNのUID";
	$fieldToolTipsFIELD_CONDITION["Japanese"]["FCD_DYN_UID"] = "";
	$placeHoldersFIELD_CONDITION["Japanese"]["FCD_DYN_UID"] = "";
	if (count($fieldToolTipsFIELD_CONDITION["Japanese"]))
		$tdataFIELD_CONDITION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFIELD_CONDITION["English"] = array();
	$fieldToolTipsFIELD_CONDITION["English"] = array();
	$placeHoldersFIELD_CONDITION["English"] = array();
	$pageTitlesFIELD_CONDITION["English"] = array();
	$fieldLabelsFIELD_CONDITION["English"]["FCD_UID"] = "FCDのUID";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_UID"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_UID"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_FUNCTION"] = "FCD機能";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_FUNCTION"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_FUNCTION"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_FIELDS"] = "FCDフィールド";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_FIELDS"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_FIELDS"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_CONDITION"] = "FCD条件";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_CONDITION"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_CONDITION"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_EVENTS"] = "FCDイベント";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_EVENTS"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_EVENTS"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_EVENT_OWNERS"] = "FCDイベントの所有者";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_EVENT_OWNERS"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_EVENT_OWNERS"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_STATUS"] = "FCDのステータス";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_STATUS"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_STATUS"] = "";
	$fieldLabelsFIELD_CONDITION["English"]["FCD_DYN_UID"] = "FCDのDYNのUID";
	$fieldToolTipsFIELD_CONDITION["English"]["FCD_DYN_UID"] = "";
	$placeHoldersFIELD_CONDITION["English"]["FCD_DYN_UID"] = "";
	if (count($fieldToolTipsFIELD_CONDITION["English"]))
		$tdataFIELD_CONDITION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFIELD_CONDITION[""] = array();
	$fieldToolTipsFIELD_CONDITION[""] = array();
	$placeHoldersFIELD_CONDITION[""] = array();
	$pageTitlesFIELD_CONDITION[""] = array();
	if (count($fieldToolTipsFIELD_CONDITION[""]))
		$tdataFIELD_CONDITION[".isUseToolTips"] = true;
}


	$tdataFIELD_CONDITION[".NCSearch"] = true;



$tdataFIELD_CONDITION[".shortTableName"] = "FIELD_CONDITION";
$tdataFIELD_CONDITION[".nSecOptions"] = 0;
$tdataFIELD_CONDITION[".recsPerRowPrint"] = 1;
$tdataFIELD_CONDITION[".mainTableOwnerID"] = "";
$tdataFIELD_CONDITION[".moveNext"] = 0;
$tdataFIELD_CONDITION[".entityType"] = 0;

$tdataFIELD_CONDITION[".strOriginalTableName"] = "FIELD_CONDITION";

	



$tdataFIELD_CONDITION[".showAddInPopup"] = false;

$tdataFIELD_CONDITION[".showEditInPopup"] = false;

$tdataFIELD_CONDITION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFIELD_CONDITION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFIELD_CONDITION[".fieldsForRegister"] = array();
	
$tdataFIELD_CONDITION[".listAjax"] = false;

	$tdataFIELD_CONDITION[".audit"] = true;

	$tdataFIELD_CONDITION[".locking"] = false;

$tdataFIELD_CONDITION[".edit"] = true;
$tdataFIELD_CONDITION[".afterEditAction"] = 1;
$tdataFIELD_CONDITION[".closePopupAfterEdit"] = 1;
$tdataFIELD_CONDITION[".afterEditActionDetTable"] = "";

$tdataFIELD_CONDITION[".add"] = true;
$tdataFIELD_CONDITION[".afterAddAction"] = 1;
$tdataFIELD_CONDITION[".closePopupAfterAdd"] = 1;
$tdataFIELD_CONDITION[".afterAddActionDetTable"] = "";

$tdataFIELD_CONDITION[".list"] = true;

$tdataFIELD_CONDITION[".inlineEdit"] = true;


$tdataFIELD_CONDITION[".reorderRecordsByHeader"] = true;
$tdataFIELD_CONDITION[".createSortByDropdown"] = true;
$tdataFIELD_CONDITION[".strSortControlSettingsJSON"] = "";



$tdataFIELD_CONDITION[".inlineAdd"] = true;
$tdataFIELD_CONDITION[".view"] = true;

$tdataFIELD_CONDITION[".import"] = true;

$tdataFIELD_CONDITION[".exportTo"] = true;

$tdataFIELD_CONDITION[".printFriendly"] = true;

$tdataFIELD_CONDITION[".delete"] = true;

$tdataFIELD_CONDITION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataFIELD_CONDITION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataFIELD_CONDITION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataFIELD_CONDITION[".searchSaving"] = false;
//

$tdataFIELD_CONDITION[".showSearchPanel"] = true;
		$tdataFIELD_CONDITION[".flexibleSearch"] = true;

$tdataFIELD_CONDITION[".isUseAjaxSuggest"] = true;

$tdataFIELD_CONDITION[".rowHighlite"] = true;



				

$tdataFIELD_CONDITION[".ajaxCodeSnippetAdded"] = false;

$tdataFIELD_CONDITION[".buttonsAdded"] = false;

$tdataFIELD_CONDITION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFIELD_CONDITION[".isUseTimeForSearch"] = false;





$tdataFIELD_CONDITION[".allSearchFields"] = array();
$tdataFIELD_CONDITION[".filterFields"] = array();
$tdataFIELD_CONDITION[".requiredSearchFields"] = array();

$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_UID";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_FUNCTION";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_FIELDS";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_CONDITION";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_EVENTS";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_EVENT_OWNERS";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_STATUS";
	$tdataFIELD_CONDITION[".allSearchFields"][] = "FCD_DYN_UID";
	

$tdataFIELD_CONDITION[".googleLikeFields"] = array();
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".googleLikeFields"][] = "FCD_DYN_UID";


$tdataFIELD_CONDITION[".advSearchFields"] = array();
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".advSearchFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".tableType"] = "list";

$tdataFIELD_CONDITION[".printerPageOrientation"] = 0;
$tdataFIELD_CONDITION[".nPrinterPageScale"] = 100;

$tdataFIELD_CONDITION[".nPrinterSplitRecords"] = 40;

$tdataFIELD_CONDITION[".nPrinterPDFSplitRecords"] = 40;



$tdataFIELD_CONDITION[".geocodingEnabled"] = false;





$tdataFIELD_CONDITION[".listGridLayout"] = 3;


$tdataFIELD_CONDITION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataFIELD_CONDITION[".pageSize"] = 20;

$tdataFIELD_CONDITION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFIELD_CONDITION[".strOrderBy"] = $tstrOrderBy;

$tdataFIELD_CONDITION[".orderindexes"] = array();

$tdataFIELD_CONDITION[".sqlHead"] = "SELECT FCD_UID,  	FCD_FUNCTION,  	FCD_FIELDS,  	FCD_CONDITION,  	FCD_EVENTS,  	FCD_EVENT_OWNERS,  	FCD_STATUS,  	FCD_DYN_UID";
$tdataFIELD_CONDITION[".sqlFrom"] = "FROM FIELD_CONDITION";
$tdataFIELD_CONDITION[".sqlWhereExpr"] = "";
$tdataFIELD_CONDITION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFIELD_CONDITION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFIELD_CONDITION[".arrGroupsPerPage"] = $arrGPP;

$tdataFIELD_CONDITION[".highlightSearchResults"] = true;

$tableKeysFIELD_CONDITION = array();
$tableKeysFIELD_CONDITION[] = "FCD_UID";
$tdataFIELD_CONDITION[".Keys"] = $tableKeysFIELD_CONDITION;

$tdataFIELD_CONDITION[".listFields"] = array();
$tdataFIELD_CONDITION[".listFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".listFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".hideMobileList"] = array();


$tdataFIELD_CONDITION[".viewFields"] = array();
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".viewFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".addFields"] = array();
$tdataFIELD_CONDITION[".addFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".addFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".masterListFields"] = array();
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".masterListFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".inlineAddFields"] = array();
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".inlineAddFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".editFields"] = array();
$tdataFIELD_CONDITION[".editFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".editFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".inlineEditFields"] = array();
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".inlineEditFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".updateSelectedFields"] = array();
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".updateSelectedFields"][] = "FCD_DYN_UID";


$tdataFIELD_CONDITION[".exportFields"] = array();
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".exportFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".importFields"] = array();
$tdataFIELD_CONDITION[".importFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".importFields"][] = "FCD_DYN_UID";

$tdataFIELD_CONDITION[".printFields"] = array();
$tdataFIELD_CONDITION[".printFields"][] = "FCD_UID";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_FUNCTION";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_FIELDS";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_CONDITION";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_EVENTS";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_EVENT_OWNERS";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_STATUS";
$tdataFIELD_CONDITION[".printFields"][] = "FCD_DYN_UID";

//	FCD_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FCD_UID";
	$fdata["GoodName"] = "FCD_UID";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_UID");
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

		$fdata["strField"] = "FCD_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_UID";

	
	
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




	$tdataFIELD_CONDITION["FCD_UID"] = $fdata;
//	FCD_FUNCTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FCD_FUNCTION";
	$fdata["GoodName"] = "FCD_FUNCTION";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_FUNCTION");
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

		$fdata["strField"] = "FCD_FUNCTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_FUNCTION";

	
	
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




	$tdataFIELD_CONDITION["FCD_FUNCTION"] = $fdata;
//	FCD_FIELDS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FCD_FIELDS";
	$fdata["GoodName"] = "FCD_FIELDS";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_FIELDS");
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

		$fdata["strField"] = "FCD_FIELDS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_FIELDS";

	
	
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




	$tdataFIELD_CONDITION["FCD_FIELDS"] = $fdata;
//	FCD_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FCD_CONDITION";
	$fdata["GoodName"] = "FCD_CONDITION";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_CONDITION");
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

		$fdata["strField"] = "FCD_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_CONDITION";

	
	
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




	$tdataFIELD_CONDITION["FCD_CONDITION"] = $fdata;
//	FCD_EVENTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FCD_EVENTS";
	$fdata["GoodName"] = "FCD_EVENTS";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_EVENTS");
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

		$fdata["strField"] = "FCD_EVENTS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_EVENTS";

	
	
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




	$tdataFIELD_CONDITION["FCD_EVENTS"] = $fdata;
//	FCD_EVENT_OWNERS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FCD_EVENT_OWNERS";
	$fdata["GoodName"] = "FCD_EVENT_OWNERS";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_EVENT_OWNERS");
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

		$fdata["strField"] = "FCD_EVENT_OWNERS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_EVENT_OWNERS";

	
	
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




	$tdataFIELD_CONDITION["FCD_EVENT_OWNERS"] = $fdata;
//	FCD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FCD_STATUS";
	$fdata["GoodName"] = "FCD_STATUS";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_STATUS");
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

		$fdata["strField"] = "FCD_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_STATUS";

	
	
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




	$tdataFIELD_CONDITION["FCD_STATUS"] = $fdata;
//	FCD_DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FCD_DYN_UID";
	$fdata["GoodName"] = "FCD_DYN_UID";
	$fdata["ownerTable"] = "FIELD_CONDITION";
	$fdata["Label"] = GetFieldLabel("FIELD_CONDITION","FCD_DYN_UID");
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

		$fdata["strField"] = "FCD_DYN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCD_DYN_UID";

	
	
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




	$tdataFIELD_CONDITION["FCD_DYN_UID"] = $fdata;


$tables_data["FIELD_CONDITION"]=&$tdataFIELD_CONDITION;
$field_labels["FIELD_CONDITION"] = &$fieldLabelsFIELD_CONDITION;
$fieldToolTips["FIELD_CONDITION"] = &$fieldToolTipsFIELD_CONDITION;
$placeHolders["FIELD_CONDITION"] = &$placeHoldersFIELD_CONDITION;
$page_titles["FIELD_CONDITION"] = &$pageTitlesFIELD_CONDITION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["FIELD_CONDITION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["FIELD_CONDITION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_FIELD_CONDITION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FCD_UID,  	FCD_FUNCTION,  	FCD_FIELDS,  	FCD_CONDITION,  	FCD_EVENTS,  	FCD_EVENT_OWNERS,  	FCD_STATUS,  	FCD_DYN_UID";
$proto0["m_strFrom"] = "FROM FIELD_CONDITION";
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
	"m_strName" => "FCD_UID",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto6["m_sql"] = "FCD_UID";
$proto6["m_srcTableName"] = "FIELD_CONDITION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_FUNCTION",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto8["m_sql"] = "FCD_FUNCTION";
$proto8["m_srcTableName"] = "FIELD_CONDITION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_FIELDS",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto10["m_sql"] = "FCD_FIELDS";
$proto10["m_srcTableName"] = "FIELD_CONDITION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_CONDITION",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto12["m_sql"] = "FCD_CONDITION";
$proto12["m_srcTableName"] = "FIELD_CONDITION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_EVENTS",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto14["m_sql"] = "FCD_EVENTS";
$proto14["m_srcTableName"] = "FIELD_CONDITION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_EVENT_OWNERS",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto16["m_sql"] = "FCD_EVENT_OWNERS";
$proto16["m_srcTableName"] = "FIELD_CONDITION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_STATUS",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto18["m_sql"] = "FCD_STATUS";
$proto18["m_srcTableName"] = "FIELD_CONDITION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FCD_DYN_UID",
	"m_strTable" => "FIELD_CONDITION",
	"m_srcTableName" => "FIELD_CONDITION"
));

$proto20["m_sql"] = "FCD_DYN_UID";
$proto20["m_srcTableName"] = "FIELD_CONDITION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "FIELD_CONDITION";
$proto23["m_srcTableName"] = "FIELD_CONDITION";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "FCD_UID";
$proto23["m_columns"][] = "FCD_FUNCTION";
$proto23["m_columns"][] = "FCD_FIELDS";
$proto23["m_columns"][] = "FCD_CONDITION";
$proto23["m_columns"][] = "FCD_EVENTS";
$proto23["m_columns"][] = "FCD_EVENT_OWNERS";
$proto23["m_columns"][] = "FCD_STATUS";
$proto23["m_columns"][] = "FCD_DYN_UID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "FIELD_CONDITION";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "FIELD_CONDITION";
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
$proto0["m_srcTableName"]="FIELD_CONDITION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_FIELD_CONDITION = createSqlQuery_FIELD_CONDITION();


	
						;

								

$tdataFIELD_CONDITION[".sqlquery"] = $queryData_FIELD_CONDITION;

$tableEvents["FIELD_CONDITION"] = new eventsBase;
$tdataFIELD_CONDITION[".hasEvents"] = false;

?>
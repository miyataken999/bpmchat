<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMESSAGE_EVENT_RELATION = array();
	$tdataMESSAGE_EVENT_RELATION[".truncateText"] = true;
	$tdataMESSAGE_EVENT_RELATION[".NumberOfChars"] = 20;
	$tdataMESSAGE_EVENT_RELATION[".ShortName"] = "MESSAGE_EVENT_RELATION";
	$tdataMESSAGE_EVENT_RELATION[".OwnerID"] = "";
	$tdataMESSAGE_EVENT_RELATION[".OriginalTable"] = "MESSAGE_EVENT_RELATION";

//	field labels
$fieldLabelsMESSAGE_EVENT_RELATION = array();
$fieldToolTipsMESSAGE_EVENT_RELATION = array();
$pageTitlesMESSAGE_EVENT_RELATION = array();
$placeHoldersMESSAGE_EVENT_RELATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsMESSAGE_EVENT_RELATION["Japanese"] = array();
	$fieldToolTipsMESSAGE_EVENT_RELATION["Japanese"] = array();
	$placeHoldersMESSAGE_EVENT_RELATION["Japanese"] = array();
	$pageTitlesMESSAGE_EVENT_RELATION["Japanese"] = array();
	$fieldLabelsMESSAGE_EVENT_RELATION["Japanese"]["MSGER_UID"] = "msgerのUID";
	$fieldToolTipsMESSAGE_EVENT_RELATION["Japanese"]["MSGER_UID"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["Japanese"]["MSGER_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_RELATION["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_EVENT_RELATION["Japanese"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_RELATION["Japanese"]["EVN_UID_THROW"] = "EVNのuidスロー";
	$fieldToolTipsMESSAGE_EVENT_RELATION["Japanese"]["EVN_UID_THROW"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["Japanese"]["EVN_UID_THROW"] = "";
	$fieldLabelsMESSAGE_EVENT_RELATION["Japanese"]["EVN_UID_CATCH"] = "EVNのuidキャッチ";
	$fieldToolTipsMESSAGE_EVENT_RELATION["Japanese"]["EVN_UID_CATCH"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["Japanese"]["EVN_UID_CATCH"] = "";
	if (count($fieldToolTipsMESSAGE_EVENT_RELATION["Japanese"]))
		$tdataMESSAGE_EVENT_RELATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMESSAGE_EVENT_RELATION["English"] = array();
	$fieldToolTipsMESSAGE_EVENT_RELATION["English"] = array();
	$placeHoldersMESSAGE_EVENT_RELATION["English"] = array();
	$pageTitlesMESSAGE_EVENT_RELATION["English"] = array();
	$fieldLabelsMESSAGE_EVENT_RELATION["English"]["MSGER_UID"] = "msgerのUID";
	$fieldToolTipsMESSAGE_EVENT_RELATION["English"]["MSGER_UID"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["English"]["MSGER_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_RELATION["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_EVENT_RELATION["English"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["English"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_RELATION["English"]["EVN_UID_THROW"] = "EVNのuidスロー";
	$fieldToolTipsMESSAGE_EVENT_RELATION["English"]["EVN_UID_THROW"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["English"]["EVN_UID_THROW"] = "";
	$fieldLabelsMESSAGE_EVENT_RELATION["English"]["EVN_UID_CATCH"] = "EVNのuidキャッチ";
	$fieldToolTipsMESSAGE_EVENT_RELATION["English"]["EVN_UID_CATCH"] = "";
	$placeHoldersMESSAGE_EVENT_RELATION["English"]["EVN_UID_CATCH"] = "";
	if (count($fieldToolTipsMESSAGE_EVENT_RELATION["English"]))
		$tdataMESSAGE_EVENT_RELATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMESSAGE_EVENT_RELATION[""] = array();
	$fieldToolTipsMESSAGE_EVENT_RELATION[""] = array();
	$placeHoldersMESSAGE_EVENT_RELATION[""] = array();
	$pageTitlesMESSAGE_EVENT_RELATION[""] = array();
	if (count($fieldToolTipsMESSAGE_EVENT_RELATION[""]))
		$tdataMESSAGE_EVENT_RELATION[".isUseToolTips"] = true;
}


	$tdataMESSAGE_EVENT_RELATION[".NCSearch"] = true;



$tdataMESSAGE_EVENT_RELATION[".shortTableName"] = "MESSAGE_EVENT_RELATION";
$tdataMESSAGE_EVENT_RELATION[".nSecOptions"] = 0;
$tdataMESSAGE_EVENT_RELATION[".recsPerRowPrint"] = 1;
$tdataMESSAGE_EVENT_RELATION[".mainTableOwnerID"] = "";
$tdataMESSAGE_EVENT_RELATION[".moveNext"] = 0;
$tdataMESSAGE_EVENT_RELATION[".entityType"] = 0;

$tdataMESSAGE_EVENT_RELATION[".strOriginalTableName"] = "MESSAGE_EVENT_RELATION";

	



$tdataMESSAGE_EVENT_RELATION[".showAddInPopup"] = false;

$tdataMESSAGE_EVENT_RELATION[".showEditInPopup"] = false;

$tdataMESSAGE_EVENT_RELATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMESSAGE_EVENT_RELATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMESSAGE_EVENT_RELATION[".fieldsForRegister"] = array();
	
$tdataMESSAGE_EVENT_RELATION[".listAjax"] = false;

	$tdataMESSAGE_EVENT_RELATION[".audit"] = true;

	$tdataMESSAGE_EVENT_RELATION[".locking"] = false;

$tdataMESSAGE_EVENT_RELATION[".edit"] = true;
$tdataMESSAGE_EVENT_RELATION[".afterEditAction"] = 1;
$tdataMESSAGE_EVENT_RELATION[".closePopupAfterEdit"] = 1;
$tdataMESSAGE_EVENT_RELATION[".afterEditActionDetTable"] = "";

$tdataMESSAGE_EVENT_RELATION[".add"] = true;
$tdataMESSAGE_EVENT_RELATION[".afterAddAction"] = 1;
$tdataMESSAGE_EVENT_RELATION[".closePopupAfterAdd"] = 1;
$tdataMESSAGE_EVENT_RELATION[".afterAddActionDetTable"] = "";

$tdataMESSAGE_EVENT_RELATION[".list"] = true;

$tdataMESSAGE_EVENT_RELATION[".inlineEdit"] = true;


$tdataMESSAGE_EVENT_RELATION[".reorderRecordsByHeader"] = true;
$tdataMESSAGE_EVENT_RELATION[".createSortByDropdown"] = true;
$tdataMESSAGE_EVENT_RELATION[".strSortControlSettingsJSON"] = "";



$tdataMESSAGE_EVENT_RELATION[".inlineAdd"] = true;
$tdataMESSAGE_EVENT_RELATION[".view"] = true;

$tdataMESSAGE_EVENT_RELATION[".import"] = true;

$tdataMESSAGE_EVENT_RELATION[".exportTo"] = true;

$tdataMESSAGE_EVENT_RELATION[".printFriendly"] = true;

$tdataMESSAGE_EVENT_RELATION[".delete"] = true;

$tdataMESSAGE_EVENT_RELATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataMESSAGE_EVENT_RELATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataMESSAGE_EVENT_RELATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataMESSAGE_EVENT_RELATION[".searchSaving"] = false;
//

$tdataMESSAGE_EVENT_RELATION[".showSearchPanel"] = true;
		$tdataMESSAGE_EVENT_RELATION[".flexibleSearch"] = true;

$tdataMESSAGE_EVENT_RELATION[".isUseAjaxSuggest"] = true;

$tdataMESSAGE_EVENT_RELATION[".rowHighlite"] = true;



				

$tdataMESSAGE_EVENT_RELATION[".ajaxCodeSnippetAdded"] = false;

$tdataMESSAGE_EVENT_RELATION[".buttonsAdded"] = false;

$tdataMESSAGE_EVENT_RELATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMESSAGE_EVENT_RELATION[".isUseTimeForSearch"] = false;





$tdataMESSAGE_EVENT_RELATION[".allSearchFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".filterFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".requiredSearchFields"] = array();

$tdataMESSAGE_EVENT_RELATION[".allSearchFields"][] = "MSGER_UID";
	$tdataMESSAGE_EVENT_RELATION[".allSearchFields"][] = "PRJ_UID";
	$tdataMESSAGE_EVENT_RELATION[".allSearchFields"][] = "EVN_UID_THROW";
	$tdataMESSAGE_EVENT_RELATION[".allSearchFields"][] = "EVN_UID_CATCH";
	

$tdataMESSAGE_EVENT_RELATION[".googleLikeFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".googleLikeFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".googleLikeFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".googleLikeFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".googleLikeFields"][] = "EVN_UID_CATCH";


$tdataMESSAGE_EVENT_RELATION[".advSearchFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".advSearchFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".advSearchFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".advSearchFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".advSearchFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".tableType"] = "list";

$tdataMESSAGE_EVENT_RELATION[".printerPageOrientation"] = 0;
$tdataMESSAGE_EVENT_RELATION[".nPrinterPageScale"] = 100;

$tdataMESSAGE_EVENT_RELATION[".nPrinterSplitRecords"] = 40;

$tdataMESSAGE_EVENT_RELATION[".nPrinterPDFSplitRecords"] = 40;



$tdataMESSAGE_EVENT_RELATION[".geocodingEnabled"] = false;





$tdataMESSAGE_EVENT_RELATION[".listGridLayout"] = 3;


$tdataMESSAGE_EVENT_RELATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataMESSAGE_EVENT_RELATION[".pageSize"] = 20;

$tdataMESSAGE_EVENT_RELATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMESSAGE_EVENT_RELATION[".strOrderBy"] = $tstrOrderBy;

$tdataMESSAGE_EVENT_RELATION[".orderindexes"] = array();

$tdataMESSAGE_EVENT_RELATION[".sqlHead"] = "SELECT MSGER_UID,  	PRJ_UID,  	EVN_UID_THROW,  	EVN_UID_CATCH";
$tdataMESSAGE_EVENT_RELATION[".sqlFrom"] = "FROM MESSAGE_EVENT_RELATION";
$tdataMESSAGE_EVENT_RELATION[".sqlWhereExpr"] = "";
$tdataMESSAGE_EVENT_RELATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMESSAGE_EVENT_RELATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMESSAGE_EVENT_RELATION[".arrGroupsPerPage"] = $arrGPP;

$tdataMESSAGE_EVENT_RELATION[".highlightSearchResults"] = true;

$tableKeysMESSAGE_EVENT_RELATION = array();
$tableKeysMESSAGE_EVENT_RELATION[] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".Keys"] = $tableKeysMESSAGE_EVENT_RELATION;

$tdataMESSAGE_EVENT_RELATION[".listFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".listFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".listFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".listFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".listFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".hideMobileList"] = array();


$tdataMESSAGE_EVENT_RELATION[".viewFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".viewFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".viewFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".viewFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".viewFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".addFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".addFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".addFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".addFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".addFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".masterListFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".masterListFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".masterListFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".masterListFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".masterListFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".inlineAddFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".inlineAddFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".inlineAddFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".inlineAddFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".inlineAddFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".editFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".editFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".editFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".editFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".editFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".inlineEditFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".inlineEditFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".inlineEditFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".inlineEditFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".inlineEditFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".updateSelectedFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".updateSelectedFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".updateSelectedFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".updateSelectedFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".updateSelectedFields"][] = "EVN_UID_CATCH";


$tdataMESSAGE_EVENT_RELATION[".exportFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".exportFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".exportFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".exportFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".exportFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".importFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".importFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".importFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".importFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".importFields"][] = "EVN_UID_CATCH";

$tdataMESSAGE_EVENT_RELATION[".printFields"] = array();
$tdataMESSAGE_EVENT_RELATION[".printFields"][] = "MSGER_UID";
$tdataMESSAGE_EVENT_RELATION[".printFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_RELATION[".printFields"][] = "EVN_UID_THROW";
$tdataMESSAGE_EVENT_RELATION[".printFields"][] = "EVN_UID_CATCH";

//	MSGER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MSGER_UID";
	$fdata["GoodName"] = "MSGER_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_RELATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_RELATION","MSGER_UID");
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

		$fdata["strField"] = "MSGER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGER_UID";

	
	
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




	$tdataMESSAGE_EVENT_RELATION["MSGER_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_RELATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_RELATION","PRJ_UID");
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




	$tdataMESSAGE_EVENT_RELATION["PRJ_UID"] = $fdata;
//	EVN_UID_THROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EVN_UID_THROW";
	$fdata["GoodName"] = "EVN_UID_THROW";
	$fdata["ownerTable"] = "MESSAGE_EVENT_RELATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_RELATION","EVN_UID_THROW");
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

		$fdata["strField"] = "EVN_UID_THROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID_THROW";

	
	
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




	$tdataMESSAGE_EVENT_RELATION["EVN_UID_THROW"] = $fdata;
//	EVN_UID_CATCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EVN_UID_CATCH";
	$fdata["GoodName"] = "EVN_UID_CATCH";
	$fdata["ownerTable"] = "MESSAGE_EVENT_RELATION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_RELATION","EVN_UID_CATCH");
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

		$fdata["strField"] = "EVN_UID_CATCH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID_CATCH";

	
	
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




	$tdataMESSAGE_EVENT_RELATION["EVN_UID_CATCH"] = $fdata;


$tables_data["MESSAGE_EVENT_RELATION"]=&$tdataMESSAGE_EVENT_RELATION;
$field_labels["MESSAGE_EVENT_RELATION"] = &$fieldLabelsMESSAGE_EVENT_RELATION;
$fieldToolTips["MESSAGE_EVENT_RELATION"] = &$fieldToolTipsMESSAGE_EVENT_RELATION;
$placeHolders["MESSAGE_EVENT_RELATION"] = &$placeHoldersMESSAGE_EVENT_RELATION;
$page_titles["MESSAGE_EVENT_RELATION"] = &$pageTitlesMESSAGE_EVENT_RELATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MESSAGE_EVENT_RELATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MESSAGE_EVENT_RELATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MESSAGE_EVENT_RELATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MSGER_UID,  	PRJ_UID,  	EVN_UID_THROW,  	EVN_UID_CATCH";
$proto0["m_strFrom"] = "FROM MESSAGE_EVENT_RELATION";
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
	"m_strName" => "MSGER_UID",
	"m_strTable" => "MESSAGE_EVENT_RELATION",
	"m_srcTableName" => "MESSAGE_EVENT_RELATION"
));

$proto6["m_sql"] = "MSGER_UID";
$proto6["m_srcTableName"] = "MESSAGE_EVENT_RELATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "MESSAGE_EVENT_RELATION",
	"m_srcTableName" => "MESSAGE_EVENT_RELATION"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "MESSAGE_EVENT_RELATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID_THROW",
	"m_strTable" => "MESSAGE_EVENT_RELATION",
	"m_srcTableName" => "MESSAGE_EVENT_RELATION"
));

$proto10["m_sql"] = "EVN_UID_THROW";
$proto10["m_srcTableName"] = "MESSAGE_EVENT_RELATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID_CATCH",
	"m_strTable" => "MESSAGE_EVENT_RELATION",
	"m_srcTableName" => "MESSAGE_EVENT_RELATION"
));

$proto12["m_sql"] = "EVN_UID_CATCH";
$proto12["m_srcTableName"] = "MESSAGE_EVENT_RELATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "MESSAGE_EVENT_RELATION";
$proto15["m_srcTableName"] = "MESSAGE_EVENT_RELATION";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "MSGER_UID";
$proto15["m_columns"][] = "PRJ_UID";
$proto15["m_columns"][] = "EVN_UID_THROW";
$proto15["m_columns"][] = "EVN_UID_CATCH";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "MESSAGE_EVENT_RELATION";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "MESSAGE_EVENT_RELATION";
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
$proto0["m_srcTableName"]="MESSAGE_EVENT_RELATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MESSAGE_EVENT_RELATION = createSqlQuery_MESSAGE_EVENT_RELATION();


	
						;

				

$tdataMESSAGE_EVENT_RELATION[".sqlquery"] = $queryData_MESSAGE_EVENT_RELATION;

$tableEvents["MESSAGE_EVENT_RELATION"] = new eventsBase;
$tdataMESSAGE_EVENT_RELATION[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMESSAGE_EVENT_DEFINITION = array();
	$tdataMESSAGE_EVENT_DEFINITION[".truncateText"] = true;
	$tdataMESSAGE_EVENT_DEFINITION[".NumberOfChars"] = 20;
	$tdataMESSAGE_EVENT_DEFINITION[".ShortName"] = "MESSAGE_EVENT_DEFINITION";
	$tdataMESSAGE_EVENT_DEFINITION[".OwnerID"] = "";
	$tdataMESSAGE_EVENT_DEFINITION[".OriginalTable"] = "MESSAGE_EVENT_DEFINITION";

//	field labels
$fieldLabelsMESSAGE_EVENT_DEFINITION = array();
$fieldToolTipsMESSAGE_EVENT_DEFINITION = array();
$pageTitlesMESSAGE_EVENT_DEFINITION = array();
$placeHoldersMESSAGE_EVENT_DEFINITION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"] = array();
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"] = array();
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"] = array();
	$pageTitlesMESSAGE_EVENT_DEFINITION["Japanese"] = array();
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_UID"] = "msged UID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["EVN_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["EVN_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGT_UID"] = "msgtのUID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_USR_UID"] = "msged USR UID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_USR_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_USR_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_VARIABLES"] = "msged変数";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_VARIABLES"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_VARIABLES"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_CORRELATION"] = "msged相関";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_CORRELATION"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["Japanese"]["MSGED_CORRELATION"] = "";
	if (count($fieldToolTipsMESSAGE_EVENT_DEFINITION["Japanese"]))
		$tdataMESSAGE_EVENT_DEFINITION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"] = array();
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"] = array();
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"] = array();
	$pageTitlesMESSAGE_EVENT_DEFINITION["English"] = array();
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["MSGED_UID"] = "msged UID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["MSGED_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["MSGED_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["EVN_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["EVN_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["MSGT_UID"] = "msgtのUID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["MSGED_USR_UID"] = "msged USR UID";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["MSGED_USR_UID"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["MSGED_USR_UID"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["MSGED_VARIABLES"] = "msged変数";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["MSGED_VARIABLES"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["MSGED_VARIABLES"] = "";
	$fieldLabelsMESSAGE_EVENT_DEFINITION["English"]["MSGED_CORRELATION"] = "msged相関";
	$fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]["MSGED_CORRELATION"] = "";
	$placeHoldersMESSAGE_EVENT_DEFINITION["English"]["MSGED_CORRELATION"] = "";
	if (count($fieldToolTipsMESSAGE_EVENT_DEFINITION["English"]))
		$tdataMESSAGE_EVENT_DEFINITION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMESSAGE_EVENT_DEFINITION[""] = array();
	$fieldToolTipsMESSAGE_EVENT_DEFINITION[""] = array();
	$placeHoldersMESSAGE_EVENT_DEFINITION[""] = array();
	$pageTitlesMESSAGE_EVENT_DEFINITION[""] = array();
	if (count($fieldToolTipsMESSAGE_EVENT_DEFINITION[""]))
		$tdataMESSAGE_EVENT_DEFINITION[".isUseToolTips"] = true;
}


	$tdataMESSAGE_EVENT_DEFINITION[".NCSearch"] = true;



$tdataMESSAGE_EVENT_DEFINITION[".shortTableName"] = "MESSAGE_EVENT_DEFINITION";
$tdataMESSAGE_EVENT_DEFINITION[".nSecOptions"] = 0;
$tdataMESSAGE_EVENT_DEFINITION[".recsPerRowPrint"] = 1;
$tdataMESSAGE_EVENT_DEFINITION[".mainTableOwnerID"] = "";
$tdataMESSAGE_EVENT_DEFINITION[".moveNext"] = 0;
$tdataMESSAGE_EVENT_DEFINITION[".entityType"] = 0;

$tdataMESSAGE_EVENT_DEFINITION[".strOriginalTableName"] = "MESSAGE_EVENT_DEFINITION";

	



$tdataMESSAGE_EVENT_DEFINITION[".showAddInPopup"] = false;

$tdataMESSAGE_EVENT_DEFINITION[".showEditInPopup"] = false;

$tdataMESSAGE_EVENT_DEFINITION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMESSAGE_EVENT_DEFINITION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMESSAGE_EVENT_DEFINITION[".fieldsForRegister"] = array();
	
$tdataMESSAGE_EVENT_DEFINITION[".listAjax"] = false;

	$tdataMESSAGE_EVENT_DEFINITION[".audit"] = true;

	$tdataMESSAGE_EVENT_DEFINITION[".locking"] = false;

$tdataMESSAGE_EVENT_DEFINITION[".edit"] = true;
$tdataMESSAGE_EVENT_DEFINITION[".afterEditAction"] = 1;
$tdataMESSAGE_EVENT_DEFINITION[".closePopupAfterEdit"] = 1;
$tdataMESSAGE_EVENT_DEFINITION[".afterEditActionDetTable"] = "";

$tdataMESSAGE_EVENT_DEFINITION[".add"] = true;
$tdataMESSAGE_EVENT_DEFINITION[".afterAddAction"] = 1;
$tdataMESSAGE_EVENT_DEFINITION[".closePopupAfterAdd"] = 1;
$tdataMESSAGE_EVENT_DEFINITION[".afterAddActionDetTable"] = "";

$tdataMESSAGE_EVENT_DEFINITION[".list"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".inlineEdit"] = true;


$tdataMESSAGE_EVENT_DEFINITION[".reorderRecordsByHeader"] = true;
$tdataMESSAGE_EVENT_DEFINITION[".createSortByDropdown"] = true;
$tdataMESSAGE_EVENT_DEFINITION[".strSortControlSettingsJSON"] = "";



$tdataMESSAGE_EVENT_DEFINITION[".inlineAdd"] = true;
$tdataMESSAGE_EVENT_DEFINITION[".view"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".import"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".exportTo"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".printFriendly"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".delete"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataMESSAGE_EVENT_DEFINITION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataMESSAGE_EVENT_DEFINITION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataMESSAGE_EVENT_DEFINITION[".searchSaving"] = false;
//

$tdataMESSAGE_EVENT_DEFINITION[".showSearchPanel"] = true;
		$tdataMESSAGE_EVENT_DEFINITION[".flexibleSearch"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".isUseAjaxSuggest"] = true;

$tdataMESSAGE_EVENT_DEFINITION[".rowHighlite"] = true;



				

$tdataMESSAGE_EVENT_DEFINITION[".ajaxCodeSnippetAdded"] = false;

$tdataMESSAGE_EVENT_DEFINITION[".buttonsAdded"] = false;

$tdataMESSAGE_EVENT_DEFINITION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMESSAGE_EVENT_DEFINITION[".isUseTimeForSearch"] = false;





$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".filterFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".requiredSearchFields"] = array();

$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "MSGED_UID";
	$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "PRJ_UID";
	$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "EVN_UID";
	$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "MSGT_UID";
	$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "MSGED_USR_UID";
	$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "MSGED_VARIABLES";
	$tdataMESSAGE_EVENT_DEFINITION[".allSearchFields"][] = "MSGED_CORRELATION";
	

$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".googleLikeFields"][] = "MSGED_CORRELATION";


$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".advSearchFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".tableType"] = "list";

$tdataMESSAGE_EVENT_DEFINITION[".printerPageOrientation"] = 0;
$tdataMESSAGE_EVENT_DEFINITION[".nPrinterPageScale"] = 100;

$tdataMESSAGE_EVENT_DEFINITION[".nPrinterSplitRecords"] = 40;

$tdataMESSAGE_EVENT_DEFINITION[".nPrinterPDFSplitRecords"] = 40;



$tdataMESSAGE_EVENT_DEFINITION[".geocodingEnabled"] = false;





$tdataMESSAGE_EVENT_DEFINITION[".listGridLayout"] = 3;


$tdataMESSAGE_EVENT_DEFINITION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataMESSAGE_EVENT_DEFINITION[".pageSize"] = 20;

$tdataMESSAGE_EVENT_DEFINITION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMESSAGE_EVENT_DEFINITION[".strOrderBy"] = $tstrOrderBy;

$tdataMESSAGE_EVENT_DEFINITION[".orderindexes"] = array();

$tdataMESSAGE_EVENT_DEFINITION[".sqlHead"] = "SELECT MSGED_UID,  	PRJ_UID,  	EVN_UID,  	MSGT_UID,  	MSGED_USR_UID,  	MSGED_VARIABLES,  	MSGED_CORRELATION";
$tdataMESSAGE_EVENT_DEFINITION[".sqlFrom"] = "FROM MESSAGE_EVENT_DEFINITION";
$tdataMESSAGE_EVENT_DEFINITION[".sqlWhereExpr"] = "";
$tdataMESSAGE_EVENT_DEFINITION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMESSAGE_EVENT_DEFINITION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMESSAGE_EVENT_DEFINITION[".arrGroupsPerPage"] = $arrGPP;

$tdataMESSAGE_EVENT_DEFINITION[".highlightSearchResults"] = true;

$tableKeysMESSAGE_EVENT_DEFINITION = array();
$tableKeysMESSAGE_EVENT_DEFINITION[] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".Keys"] = $tableKeysMESSAGE_EVENT_DEFINITION;

$tdataMESSAGE_EVENT_DEFINITION[".listFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".listFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".hideMobileList"] = array();


$tdataMESSAGE_EVENT_DEFINITION[".viewFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".viewFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".addFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".addFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".masterListFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".inlineAddFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".editFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".editFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".inlineEditFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".updateSelectedFields"][] = "MSGED_CORRELATION";


$tdataMESSAGE_EVENT_DEFINITION[".exportFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".exportFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".importFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".importFields"][] = "MSGED_CORRELATION";

$tdataMESSAGE_EVENT_DEFINITION[".printFields"] = array();
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "MSGED_UID";
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "PRJ_UID";
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "EVN_UID";
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "MSGT_UID";
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "MSGED_USR_UID";
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "MSGED_VARIABLES";
$tdataMESSAGE_EVENT_DEFINITION[".printFields"][] = "MSGED_CORRELATION";

//	MSGED_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MSGED_UID";
	$fdata["GoodName"] = "MSGED_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","MSGED_UID");
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

		$fdata["strField"] = "MSGED_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGED_UID";

	
	
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




	$tdataMESSAGE_EVENT_DEFINITION["MSGED_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","PRJ_UID");
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




	$tdataMESSAGE_EVENT_DEFINITION["PRJ_UID"] = $fdata;
//	EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EVN_UID";
	$fdata["GoodName"] = "EVN_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","EVN_UID");
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

		$fdata["strField"] = "EVN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID";

	
	
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




	$tdataMESSAGE_EVENT_DEFINITION["EVN_UID"] = $fdata;
//	MSGT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MSGT_UID";
	$fdata["GoodName"] = "MSGT_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","MSGT_UID");
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

		$fdata["strField"] = "MSGT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGT_UID";

	
	
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




	$tdataMESSAGE_EVENT_DEFINITION["MSGT_UID"] = $fdata;
//	MSGED_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MSGED_USR_UID";
	$fdata["GoodName"] = "MSGED_USR_UID";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","MSGED_USR_UID");
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

		$fdata["strField"] = "MSGED_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGED_USR_UID";

	
	
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




	$tdataMESSAGE_EVENT_DEFINITION["MSGED_USR_UID"] = $fdata;
//	MSGED_VARIABLES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MSGED_VARIABLES";
	$fdata["GoodName"] = "MSGED_VARIABLES";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","MSGED_VARIABLES");
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

		$fdata["strField"] = "MSGED_VARIABLES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGED_VARIABLES";

	
	
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




	$tdataMESSAGE_EVENT_DEFINITION["MSGED_VARIABLES"] = $fdata;
//	MSGED_CORRELATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MSGED_CORRELATION";
	$fdata["GoodName"] = "MSGED_CORRELATION";
	$fdata["ownerTable"] = "MESSAGE_EVENT_DEFINITION";
	$fdata["Label"] = GetFieldLabel("MESSAGE_EVENT_DEFINITION","MSGED_CORRELATION");
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

		$fdata["strField"] = "MSGED_CORRELATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGED_CORRELATION";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataMESSAGE_EVENT_DEFINITION["MSGED_CORRELATION"] = $fdata;


$tables_data["MESSAGE_EVENT_DEFINITION"]=&$tdataMESSAGE_EVENT_DEFINITION;
$field_labels["MESSAGE_EVENT_DEFINITION"] = &$fieldLabelsMESSAGE_EVENT_DEFINITION;
$fieldToolTips["MESSAGE_EVENT_DEFINITION"] = &$fieldToolTipsMESSAGE_EVENT_DEFINITION;
$placeHolders["MESSAGE_EVENT_DEFINITION"] = &$placeHoldersMESSAGE_EVENT_DEFINITION;
$page_titles["MESSAGE_EVENT_DEFINITION"] = &$pageTitlesMESSAGE_EVENT_DEFINITION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MESSAGE_EVENT_DEFINITION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MESSAGE_EVENT_DEFINITION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MESSAGE_EVENT_DEFINITION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MSGED_UID,  	PRJ_UID,  	EVN_UID,  	MSGT_UID,  	MSGED_USR_UID,  	MSGED_VARIABLES,  	MSGED_CORRELATION";
$proto0["m_strFrom"] = "FROM MESSAGE_EVENT_DEFINITION";
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
	"m_strName" => "MSGED_UID",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto6["m_sql"] = "MSGED_UID";
$proto6["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto10["m_sql"] = "EVN_UID";
$proto10["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGT_UID",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto12["m_sql"] = "MSGT_UID";
$proto12["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGED_USR_UID",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto14["m_sql"] = "MSGED_USR_UID";
$proto14["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGED_VARIABLES",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto16["m_sql"] = "MSGED_VARIABLES";
$proto16["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGED_CORRELATION",
	"m_strTable" => "MESSAGE_EVENT_DEFINITION",
	"m_srcTableName" => "MESSAGE_EVENT_DEFINITION"
));

$proto18["m_sql"] = "MSGED_CORRELATION";
$proto18["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "MESSAGE_EVENT_DEFINITION";
$proto21["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "MSGED_UID";
$proto21["m_columns"][] = "PRJ_UID";
$proto21["m_columns"][] = "EVN_UID";
$proto21["m_columns"][] = "MSGT_UID";
$proto21["m_columns"][] = "MSGED_USR_UID";
$proto21["m_columns"][] = "MSGED_VARIABLES";
$proto21["m_columns"][] = "MSGED_CORRELATION";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "MESSAGE_EVENT_DEFINITION";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "MESSAGE_EVENT_DEFINITION";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="MESSAGE_EVENT_DEFINITION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MESSAGE_EVENT_DEFINITION = createSqlQuery_MESSAGE_EVENT_DEFINITION();


	
						;

							

$tdataMESSAGE_EVENT_DEFINITION[".sqlquery"] = $queryData_MESSAGE_EVENT_DEFINITION;

$tableEvents["MESSAGE_EVENT_DEFINITION"] = new eventsBase;
$tdataMESSAGE_EVENT_DEFINITION[".hasEvents"] = false;

?>
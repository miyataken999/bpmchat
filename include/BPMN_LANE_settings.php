<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_LANE = array();
	$tdataBPMN_LANE[".truncateText"] = true;
	$tdataBPMN_LANE[".NumberOfChars"] = 20;
	$tdataBPMN_LANE[".ShortName"] = "BPMN_LANE";
	$tdataBPMN_LANE[".OwnerID"] = "";
	$tdataBPMN_LANE[".OriginalTable"] = "BPMN_LANE";

//	field labels
$fieldLabelsBPMN_LANE = array();
$fieldToolTipsBPMN_LANE = array();
$pageTitlesBPMN_LANE = array();
$placeHoldersBPMN_LANE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_LANE["Japanese"] = array();
	$fieldToolTipsBPMN_LANE["Japanese"] = array();
	$placeHoldersBPMN_LANE["Japanese"] = array();
	$pageTitlesBPMN_LANE["Japanese"] = array();
	$fieldLabelsBPMN_LANE["Japanese"]["LAN_UID"] = "LANのUID";
	$fieldToolTipsBPMN_LANE["Japanese"]["LAN_UID"] = "";
	$placeHoldersBPMN_LANE["Japanese"]["LAN_UID"] = "";
	$fieldLabelsBPMN_LANE["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_LANE["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_LANE["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_LANE["Japanese"]["LNS_UID"] = "LNSのUID";
	$fieldToolTipsBPMN_LANE["Japanese"]["LNS_UID"] = "";
	$placeHoldersBPMN_LANE["Japanese"]["LNS_UID"] = "";
	$fieldLabelsBPMN_LANE["Japanese"]["LAN_NAME"] = "LAN名";
	$fieldToolTipsBPMN_LANE["Japanese"]["LAN_NAME"] = "";
	$placeHoldersBPMN_LANE["Japanese"]["LAN_NAME"] = "";
	$fieldLabelsBPMN_LANE["Japanese"]["LAN_CHILD_LANESET"] = "LAN子laneset";
	$fieldToolTipsBPMN_LANE["Japanese"]["LAN_CHILD_LANESET"] = "";
	$placeHoldersBPMN_LANE["Japanese"]["LAN_CHILD_LANESET"] = "";
	$fieldLabelsBPMN_LANE["Japanese"]["LAN_IS_HORIZONTAL"] = "LANが水平です";
	$fieldToolTipsBPMN_LANE["Japanese"]["LAN_IS_HORIZONTAL"] = "";
	$placeHoldersBPMN_LANE["Japanese"]["LAN_IS_HORIZONTAL"] = "";
	if (count($fieldToolTipsBPMN_LANE["Japanese"]))
		$tdataBPMN_LANE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_LANE["English"] = array();
	$fieldToolTipsBPMN_LANE["English"] = array();
	$placeHoldersBPMN_LANE["English"] = array();
	$pageTitlesBPMN_LANE["English"] = array();
	$fieldLabelsBPMN_LANE["English"]["LAN_UID"] = "LANのUID";
	$fieldToolTipsBPMN_LANE["English"]["LAN_UID"] = "";
	$placeHoldersBPMN_LANE["English"]["LAN_UID"] = "";
	$fieldLabelsBPMN_LANE["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_LANE["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_LANE["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_LANE["English"]["LNS_UID"] = "LNSのUID";
	$fieldToolTipsBPMN_LANE["English"]["LNS_UID"] = "";
	$placeHoldersBPMN_LANE["English"]["LNS_UID"] = "";
	$fieldLabelsBPMN_LANE["English"]["LAN_NAME"] = "LAN名";
	$fieldToolTipsBPMN_LANE["English"]["LAN_NAME"] = "";
	$placeHoldersBPMN_LANE["English"]["LAN_NAME"] = "";
	$fieldLabelsBPMN_LANE["English"]["LAN_CHILD_LANESET"] = "LAN子laneset";
	$fieldToolTipsBPMN_LANE["English"]["LAN_CHILD_LANESET"] = "";
	$placeHoldersBPMN_LANE["English"]["LAN_CHILD_LANESET"] = "";
	$fieldLabelsBPMN_LANE["English"]["LAN_IS_HORIZONTAL"] = "LANが水平です";
	$fieldToolTipsBPMN_LANE["English"]["LAN_IS_HORIZONTAL"] = "";
	$placeHoldersBPMN_LANE["English"]["LAN_IS_HORIZONTAL"] = "";
	if (count($fieldToolTipsBPMN_LANE["English"]))
		$tdataBPMN_LANE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_LANE[""] = array();
	$fieldToolTipsBPMN_LANE[""] = array();
	$placeHoldersBPMN_LANE[""] = array();
	$pageTitlesBPMN_LANE[""] = array();
	if (count($fieldToolTipsBPMN_LANE[""]))
		$tdataBPMN_LANE[".isUseToolTips"] = true;
}


	$tdataBPMN_LANE[".NCSearch"] = true;



$tdataBPMN_LANE[".shortTableName"] = "BPMN_LANE";
$tdataBPMN_LANE[".nSecOptions"] = 0;
$tdataBPMN_LANE[".recsPerRowPrint"] = 1;
$tdataBPMN_LANE[".mainTableOwnerID"] = "";
$tdataBPMN_LANE[".moveNext"] = 0;
$tdataBPMN_LANE[".entityType"] = 0;

$tdataBPMN_LANE[".strOriginalTableName"] = "BPMN_LANE";

	



$tdataBPMN_LANE[".showAddInPopup"] = false;

$tdataBPMN_LANE[".showEditInPopup"] = false;

$tdataBPMN_LANE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_LANE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_LANE[".fieldsForRegister"] = array();
	
$tdataBPMN_LANE[".listAjax"] = false;

	$tdataBPMN_LANE[".audit"] = true;

	$tdataBPMN_LANE[".locking"] = false;

$tdataBPMN_LANE[".edit"] = true;
$tdataBPMN_LANE[".afterEditAction"] = 1;
$tdataBPMN_LANE[".closePopupAfterEdit"] = 1;
$tdataBPMN_LANE[".afterEditActionDetTable"] = "";

$tdataBPMN_LANE[".add"] = true;
$tdataBPMN_LANE[".afterAddAction"] = 1;
$tdataBPMN_LANE[".closePopupAfterAdd"] = 1;
$tdataBPMN_LANE[".afterAddActionDetTable"] = "";

$tdataBPMN_LANE[".list"] = true;

$tdataBPMN_LANE[".inlineEdit"] = true;


$tdataBPMN_LANE[".reorderRecordsByHeader"] = true;
$tdataBPMN_LANE[".createSortByDropdown"] = true;
$tdataBPMN_LANE[".strSortControlSettingsJSON"] = "";



$tdataBPMN_LANE[".inlineAdd"] = true;
$tdataBPMN_LANE[".view"] = true;

$tdataBPMN_LANE[".import"] = true;

$tdataBPMN_LANE[".exportTo"] = true;

$tdataBPMN_LANE[".printFriendly"] = true;

$tdataBPMN_LANE[".delete"] = true;

$tdataBPMN_LANE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_LANE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_LANE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_LANE[".searchSaving"] = false;
//

$tdataBPMN_LANE[".showSearchPanel"] = true;
		$tdataBPMN_LANE[".flexibleSearch"] = true;

$tdataBPMN_LANE[".isUseAjaxSuggest"] = true;

$tdataBPMN_LANE[".rowHighlite"] = true;



																

$tdataBPMN_LANE[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_LANE[".buttonsAdded"] = false;

$tdataBPMN_LANE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_LANE[".isUseTimeForSearch"] = false;



$tdataBPMN_LANE[".badgeColor"] = "D2691E";


$tdataBPMN_LANE[".allSearchFields"] = array();
$tdataBPMN_LANE[".filterFields"] = array();
$tdataBPMN_LANE[".requiredSearchFields"] = array();

$tdataBPMN_LANE[".allSearchFields"][] = "LAN_UID";
	$tdataBPMN_LANE[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_LANE[".allSearchFields"][] = "LNS_UID";
	$tdataBPMN_LANE[".allSearchFields"][] = "LAN_NAME";
	$tdataBPMN_LANE[".allSearchFields"][] = "LAN_CHILD_LANESET";
	$tdataBPMN_LANE[".allSearchFields"][] = "LAN_IS_HORIZONTAL";
	

$tdataBPMN_LANE[".googleLikeFields"] = array();
$tdataBPMN_LANE[".googleLikeFields"][] = "LAN_UID";
$tdataBPMN_LANE[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".googleLikeFields"][] = "LNS_UID";
$tdataBPMN_LANE[".googleLikeFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".googleLikeFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".googleLikeFields"][] = "LAN_IS_HORIZONTAL";


$tdataBPMN_LANE[".advSearchFields"] = array();
$tdataBPMN_LANE[".advSearchFields"][] = "LAN_UID";
$tdataBPMN_LANE[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".advSearchFields"][] = "LNS_UID";
$tdataBPMN_LANE[".advSearchFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".advSearchFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".advSearchFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".tableType"] = "list";

$tdataBPMN_LANE[".printerPageOrientation"] = 0;
$tdataBPMN_LANE[".nPrinterPageScale"] = 100;

$tdataBPMN_LANE[".nPrinterSplitRecords"] = 40;

$tdataBPMN_LANE[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_LANE[".geocodingEnabled"] = false;





$tdataBPMN_LANE[".listGridLayout"] = 3;


$tdataBPMN_LANE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_LANE[".pageSize"] = 20;

$tdataBPMN_LANE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_LANE[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_LANE[".orderindexes"] = array();

$tdataBPMN_LANE[".sqlHead"] = "SELECT LAN_UID,  	PRJ_UID,  	LNS_UID,  	LAN_NAME,  	LAN_CHILD_LANESET,  	LAN_IS_HORIZONTAL";
$tdataBPMN_LANE[".sqlFrom"] = "FROM BPMN_LANE";
$tdataBPMN_LANE[".sqlWhereExpr"] = "";
$tdataBPMN_LANE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_LANE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_LANE[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_LANE[".highlightSearchResults"] = true;

$tableKeysBPMN_LANE = array();
$tableKeysBPMN_LANE[] = "LAN_UID";
$tdataBPMN_LANE[".Keys"] = $tableKeysBPMN_LANE;

$tdataBPMN_LANE[".listFields"] = array();
$tdataBPMN_LANE[".listFields"][] = "LAN_UID";
$tdataBPMN_LANE[".listFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".listFields"][] = "LNS_UID";
$tdataBPMN_LANE[".listFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".listFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".listFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".hideMobileList"] = array();


$tdataBPMN_LANE[".viewFields"] = array();
$tdataBPMN_LANE[".viewFields"][] = "LAN_UID";
$tdataBPMN_LANE[".viewFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".viewFields"][] = "LNS_UID";
$tdataBPMN_LANE[".viewFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".viewFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".viewFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".addFields"] = array();
$tdataBPMN_LANE[".addFields"][] = "LAN_UID";
$tdataBPMN_LANE[".addFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".addFields"][] = "LNS_UID";
$tdataBPMN_LANE[".addFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".addFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".addFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".masterListFields"] = array();
$tdataBPMN_LANE[".masterListFields"][] = "LAN_UID";
$tdataBPMN_LANE[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".masterListFields"][] = "LNS_UID";
$tdataBPMN_LANE[".masterListFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".masterListFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".masterListFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".inlineAddFields"] = array();
$tdataBPMN_LANE[".inlineAddFields"][] = "LAN_UID";
$tdataBPMN_LANE[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".inlineAddFields"][] = "LNS_UID";
$tdataBPMN_LANE[".inlineAddFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".inlineAddFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".inlineAddFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".editFields"] = array();
$tdataBPMN_LANE[".editFields"][] = "LAN_UID";
$tdataBPMN_LANE[".editFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".editFields"][] = "LNS_UID";
$tdataBPMN_LANE[".editFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".editFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".editFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".inlineEditFields"] = array();
$tdataBPMN_LANE[".inlineEditFields"][] = "LAN_UID";
$tdataBPMN_LANE[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".inlineEditFields"][] = "LNS_UID";
$tdataBPMN_LANE[".inlineEditFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".inlineEditFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".inlineEditFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".updateSelectedFields"] = array();
$tdataBPMN_LANE[".updateSelectedFields"][] = "LAN_UID";
$tdataBPMN_LANE[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".updateSelectedFields"][] = "LNS_UID";
$tdataBPMN_LANE[".updateSelectedFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".updateSelectedFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".updateSelectedFields"][] = "LAN_IS_HORIZONTAL";


$tdataBPMN_LANE[".exportFields"] = array();
$tdataBPMN_LANE[".exportFields"][] = "LAN_UID";
$tdataBPMN_LANE[".exportFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".exportFields"][] = "LNS_UID";
$tdataBPMN_LANE[".exportFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".exportFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".exportFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".importFields"] = array();
$tdataBPMN_LANE[".importFields"][] = "LAN_UID";
$tdataBPMN_LANE[".importFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".importFields"][] = "LNS_UID";
$tdataBPMN_LANE[".importFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".importFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".importFields"][] = "LAN_IS_HORIZONTAL";

$tdataBPMN_LANE[".printFields"] = array();
$tdataBPMN_LANE[".printFields"][] = "LAN_UID";
$tdataBPMN_LANE[".printFields"][] = "PRJ_UID";
$tdataBPMN_LANE[".printFields"][] = "LNS_UID";
$tdataBPMN_LANE[".printFields"][] = "LAN_NAME";
$tdataBPMN_LANE[".printFields"][] = "LAN_CHILD_LANESET";
$tdataBPMN_LANE[".printFields"][] = "LAN_IS_HORIZONTAL";

//	LAN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LAN_UID";
	$fdata["GoodName"] = "LAN_UID";
	$fdata["ownerTable"] = "BPMN_LANE";
	$fdata["Label"] = GetFieldLabel("BPMN_LANE","LAN_UID");
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

		$fdata["strField"] = "LAN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_UID";

	
	
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




	$tdataBPMN_LANE["LAN_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_LANE";
	$fdata["Label"] = GetFieldLabel("BPMN_LANE","PRJ_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BPMN_PROJECT";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRJ_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRJ_UID";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataBPMN_LANE["PRJ_UID"] = $fdata;
//	LNS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LNS_UID";
	$fdata["GoodName"] = "LNS_UID";
	$fdata["ownerTable"] = "BPMN_LANE";
	$fdata["Label"] = GetFieldLabel("BPMN_LANE","LNS_UID");
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

		$fdata["strField"] = "LNS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LNS_UID";

	
	
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




	$tdataBPMN_LANE["LNS_UID"] = $fdata;
//	LAN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LAN_NAME";
	$fdata["GoodName"] = "LAN_NAME";
	$fdata["ownerTable"] = "BPMN_LANE";
	$fdata["Label"] = GetFieldLabel("BPMN_LANE","LAN_NAME");
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

		$fdata["strField"] = "LAN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_NAME";

	
	
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




	$tdataBPMN_LANE["LAN_NAME"] = $fdata;
//	LAN_CHILD_LANESET
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LAN_CHILD_LANESET";
	$fdata["GoodName"] = "LAN_CHILD_LANESET";
	$fdata["ownerTable"] = "BPMN_LANE";
	$fdata["Label"] = GetFieldLabel("BPMN_LANE","LAN_CHILD_LANESET");
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

		$fdata["strField"] = "LAN_CHILD_LANESET";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_CHILD_LANESET";

	
	
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




	$tdataBPMN_LANE["LAN_CHILD_LANESET"] = $fdata;
//	LAN_IS_HORIZONTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LAN_IS_HORIZONTAL";
	$fdata["GoodName"] = "LAN_IS_HORIZONTAL";
	$fdata["ownerTable"] = "BPMN_LANE";
	$fdata["Label"] = GetFieldLabel("BPMN_LANE","LAN_IS_HORIZONTAL");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "LAN_IS_HORIZONTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_IS_HORIZONTAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataBPMN_LANE["LAN_IS_HORIZONTAL"] = $fdata;


$tables_data["BPMN_LANE"]=&$tdataBPMN_LANE;
$field_labels["BPMN_LANE"] = &$fieldLabelsBPMN_LANE;
$fieldToolTips["BPMN_LANE"] = &$fieldToolTipsBPMN_LANE;
$placeHolders["BPMN_LANE"] = &$placeHoldersBPMN_LANE;
$page_titles["BPMN_LANE"] = &$pageTitlesBPMN_LANE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_LANE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_LANE"] = array();


	
				$strOriginalDetailsTable="BPMN_PROJECT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROJECT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROJECT";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_LANE"][0] = $masterParams;
				$masterTablesData["BPMN_LANE"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_LANE"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_LANE"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_LANE"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_LANE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LAN_UID,  	PRJ_UID,  	LNS_UID,  	LAN_NAME,  	LAN_CHILD_LANESET,  	LAN_IS_HORIZONTAL";
$proto0["m_strFrom"] = "FROM BPMN_LANE";
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
	"m_strName" => "LAN_UID",
	"m_strTable" => "BPMN_LANE",
	"m_srcTableName" => "BPMN_LANE"
));

$proto6["m_sql"] = "LAN_UID";
$proto6["m_srcTableName"] = "BPMN_LANE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_LANE",
	"m_srcTableName" => "BPMN_LANE"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_LANE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LNS_UID",
	"m_strTable" => "BPMN_LANE",
	"m_srcTableName" => "BPMN_LANE"
));

$proto10["m_sql"] = "LNS_UID";
$proto10["m_srcTableName"] = "BPMN_LANE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_NAME",
	"m_strTable" => "BPMN_LANE",
	"m_srcTableName" => "BPMN_LANE"
));

$proto12["m_sql"] = "LAN_NAME";
$proto12["m_srcTableName"] = "BPMN_LANE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_CHILD_LANESET",
	"m_strTable" => "BPMN_LANE",
	"m_srcTableName" => "BPMN_LANE"
));

$proto14["m_sql"] = "LAN_CHILD_LANESET";
$proto14["m_srcTableName"] = "BPMN_LANE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_IS_HORIZONTAL",
	"m_strTable" => "BPMN_LANE",
	"m_srcTableName" => "BPMN_LANE"
));

$proto16["m_sql"] = "LAN_IS_HORIZONTAL";
$proto16["m_srcTableName"] = "BPMN_LANE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "BPMN_LANE";
$proto19["m_srcTableName"] = "BPMN_LANE";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "LAN_UID";
$proto19["m_columns"][] = "PRJ_UID";
$proto19["m_columns"][] = "LNS_UID";
$proto19["m_columns"][] = "LAN_NAME";
$proto19["m_columns"][] = "LAN_CHILD_LANESET";
$proto19["m_columns"][] = "LAN_IS_HORIZONTAL";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "BPMN_LANE";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "BPMN_LANE";
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
$proto0["m_srcTableName"]="BPMN_LANE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_LANE = createSqlQuery_BPMN_LANE();


	
						;

						

$tdataBPMN_LANE[".sqlquery"] = $queryData_BPMN_LANE;

$tableEvents["BPMN_LANE"] = new eventsBase;
$tdataBPMN_LANE[".hasEvents"] = false;

?>
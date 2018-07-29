<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_LANESET = array();
	$tdataBPMN_LANESET[".truncateText"] = true;
	$tdataBPMN_LANESET[".NumberOfChars"] = 20;
	$tdataBPMN_LANESET[".ShortName"] = "BPMN_LANESET";
	$tdataBPMN_LANESET[".OwnerID"] = "";
	$tdataBPMN_LANESET[".OriginalTable"] = "BPMN_LANESET";

//	field labels
$fieldLabelsBPMN_LANESET = array();
$fieldToolTipsBPMN_LANESET = array();
$pageTitlesBPMN_LANESET = array();
$placeHoldersBPMN_LANESET = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_LANESET["Japanese"] = array();
	$fieldToolTipsBPMN_LANESET["Japanese"] = array();
	$placeHoldersBPMN_LANESET["Japanese"] = array();
	$pageTitlesBPMN_LANESET["Japanese"] = array();
	$fieldLabelsBPMN_LANESET["Japanese"]["LNS_UID"] = "LNSのUID";
	$fieldToolTipsBPMN_LANESET["Japanese"]["LNS_UID"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["LNS_UID"] = "";
	$fieldLabelsBPMN_LANESET["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_LANESET["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_LANESET["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_LANESET["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_LANESET["Japanese"]["LNS_NAME"] = "LNS名";
	$fieldToolTipsBPMN_LANESET["Japanese"]["LNS_NAME"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["LNS_NAME"] = "";
	$fieldLabelsBPMN_LANESET["Japanese"]["LNS_PARENT_LANE"] = "LNSの親レーン";
	$fieldToolTipsBPMN_LANESET["Japanese"]["LNS_PARENT_LANE"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["LNS_PARENT_LANE"] = "";
	$fieldLabelsBPMN_LANESET["Japanese"]["LNS_IS_HORIZONTAL"] = "LNSは水平です";
	$fieldToolTipsBPMN_LANESET["Japanese"]["LNS_IS_HORIZONTAL"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["LNS_IS_HORIZONTAL"] = "";
	$fieldLabelsBPMN_LANESET["Japanese"]["LNS_STATE"] = "LNS状態";
	$fieldToolTipsBPMN_LANESET["Japanese"]["LNS_STATE"] = "";
	$placeHoldersBPMN_LANESET["Japanese"]["LNS_STATE"] = "";
	if (count($fieldToolTipsBPMN_LANESET["Japanese"]))
		$tdataBPMN_LANESET[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_LANESET["English"] = array();
	$fieldToolTipsBPMN_LANESET["English"] = array();
	$placeHoldersBPMN_LANESET["English"] = array();
	$pageTitlesBPMN_LANESET["English"] = array();
	$fieldLabelsBPMN_LANESET["English"]["LNS_UID"] = "LNSのUID";
	$fieldToolTipsBPMN_LANESET["English"]["LNS_UID"] = "";
	$placeHoldersBPMN_LANESET["English"]["LNS_UID"] = "";
	$fieldLabelsBPMN_LANESET["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_LANESET["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_LANESET["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_LANESET["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_LANESET["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_LANESET["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_LANESET["English"]["LNS_NAME"] = "LNS名";
	$fieldToolTipsBPMN_LANESET["English"]["LNS_NAME"] = "";
	$placeHoldersBPMN_LANESET["English"]["LNS_NAME"] = "";
	$fieldLabelsBPMN_LANESET["English"]["LNS_PARENT_LANE"] = "LNSの親レーン";
	$fieldToolTipsBPMN_LANESET["English"]["LNS_PARENT_LANE"] = "";
	$placeHoldersBPMN_LANESET["English"]["LNS_PARENT_LANE"] = "";
	$fieldLabelsBPMN_LANESET["English"]["LNS_IS_HORIZONTAL"] = "LNSは水平です";
	$fieldToolTipsBPMN_LANESET["English"]["LNS_IS_HORIZONTAL"] = "";
	$placeHoldersBPMN_LANESET["English"]["LNS_IS_HORIZONTAL"] = "";
	$fieldLabelsBPMN_LANESET["English"]["LNS_STATE"] = "LNS状態";
	$fieldToolTipsBPMN_LANESET["English"]["LNS_STATE"] = "";
	$placeHoldersBPMN_LANESET["English"]["LNS_STATE"] = "";
	if (count($fieldToolTipsBPMN_LANESET["English"]))
		$tdataBPMN_LANESET[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_LANESET[""] = array();
	$fieldToolTipsBPMN_LANESET[""] = array();
	$placeHoldersBPMN_LANESET[""] = array();
	$pageTitlesBPMN_LANESET[""] = array();
	if (count($fieldToolTipsBPMN_LANESET[""]))
		$tdataBPMN_LANESET[".isUseToolTips"] = true;
}


	$tdataBPMN_LANESET[".NCSearch"] = true;



$tdataBPMN_LANESET[".shortTableName"] = "BPMN_LANESET";
$tdataBPMN_LANESET[".nSecOptions"] = 0;
$tdataBPMN_LANESET[".recsPerRowPrint"] = 1;
$tdataBPMN_LANESET[".mainTableOwnerID"] = "";
$tdataBPMN_LANESET[".moveNext"] = 0;
$tdataBPMN_LANESET[".entityType"] = 0;

$tdataBPMN_LANESET[".strOriginalTableName"] = "BPMN_LANESET";

	



$tdataBPMN_LANESET[".showAddInPopup"] = false;

$tdataBPMN_LANESET[".showEditInPopup"] = false;

$tdataBPMN_LANESET[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_LANESET[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_LANESET[".fieldsForRegister"] = array();
	
$tdataBPMN_LANESET[".listAjax"] = false;

	$tdataBPMN_LANESET[".audit"] = true;

	$tdataBPMN_LANESET[".locking"] = false;

$tdataBPMN_LANESET[".edit"] = true;
$tdataBPMN_LANESET[".afterEditAction"] = 1;
$tdataBPMN_LANESET[".closePopupAfterEdit"] = 1;
$tdataBPMN_LANESET[".afterEditActionDetTable"] = "";

$tdataBPMN_LANESET[".add"] = true;
$tdataBPMN_LANESET[".afterAddAction"] = 1;
$tdataBPMN_LANESET[".closePopupAfterAdd"] = 1;
$tdataBPMN_LANESET[".afterAddActionDetTable"] = "";

$tdataBPMN_LANESET[".list"] = true;

$tdataBPMN_LANESET[".inlineEdit"] = true;


$tdataBPMN_LANESET[".reorderRecordsByHeader"] = true;
$tdataBPMN_LANESET[".createSortByDropdown"] = true;
$tdataBPMN_LANESET[".strSortControlSettingsJSON"] = "";



$tdataBPMN_LANESET[".inlineAdd"] = true;
$tdataBPMN_LANESET[".view"] = true;

$tdataBPMN_LANESET[".import"] = true;

$tdataBPMN_LANESET[".exportTo"] = true;

$tdataBPMN_LANESET[".printFriendly"] = true;

$tdataBPMN_LANESET[".delete"] = true;

$tdataBPMN_LANESET[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_LANESET[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_LANESET[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_LANESET[".searchSaving"] = false;
//

$tdataBPMN_LANESET[".showSearchPanel"] = true;
		$tdataBPMN_LANESET[".flexibleSearch"] = true;

$tdataBPMN_LANESET[".isUseAjaxSuggest"] = true;

$tdataBPMN_LANESET[".rowHighlite"] = true;



																												

$tdataBPMN_LANESET[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_LANESET[".buttonsAdded"] = false;

$tdataBPMN_LANESET[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_LANESET[".isUseTimeForSearch"] = false;



$tdataBPMN_LANESET[".badgeColor"] = "3CB371";


$tdataBPMN_LANESET[".allSearchFields"] = array();
$tdataBPMN_LANESET[".filterFields"] = array();
$tdataBPMN_LANESET[".requiredSearchFields"] = array();

$tdataBPMN_LANESET[".allSearchFields"][] = "LNS_UID";
	$tdataBPMN_LANESET[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_LANESET[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_LANESET[".allSearchFields"][] = "LNS_NAME";
	$tdataBPMN_LANESET[".allSearchFields"][] = "LNS_PARENT_LANE";
	$tdataBPMN_LANESET[".allSearchFields"][] = "LNS_IS_HORIZONTAL";
	$tdataBPMN_LANESET[".allSearchFields"][] = "LNS_STATE";
	

$tdataBPMN_LANESET[".googleLikeFields"] = array();
$tdataBPMN_LANESET[".googleLikeFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".googleLikeFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".googleLikeFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".googleLikeFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".googleLikeFields"][] = "LNS_STATE";


$tdataBPMN_LANESET[".advSearchFields"] = array();
$tdataBPMN_LANESET[".advSearchFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".advSearchFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".advSearchFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".advSearchFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".advSearchFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".tableType"] = "list";

$tdataBPMN_LANESET[".printerPageOrientation"] = 0;
$tdataBPMN_LANESET[".nPrinterPageScale"] = 100;

$tdataBPMN_LANESET[".nPrinterSplitRecords"] = 40;

$tdataBPMN_LANESET[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_LANESET[".geocodingEnabled"] = false;





$tdataBPMN_LANESET[".listGridLayout"] = 3;


$tdataBPMN_LANESET[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_LANESET[".pageSize"] = 20;

$tdataBPMN_LANESET[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_LANESET[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_LANESET[".orderindexes"] = array();

$tdataBPMN_LANESET[".sqlHead"] = "SELECT LNS_UID,  	PRJ_UID,  	PRO_UID,  	LNS_NAME,  	LNS_PARENT_LANE,  	LNS_IS_HORIZONTAL,  	LNS_STATE";
$tdataBPMN_LANESET[".sqlFrom"] = "FROM BPMN_LANESET";
$tdataBPMN_LANESET[".sqlWhereExpr"] = "";
$tdataBPMN_LANESET[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_LANESET[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_LANESET[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_LANESET[".highlightSearchResults"] = true;

$tableKeysBPMN_LANESET = array();
$tableKeysBPMN_LANESET[] = "LNS_UID";
$tdataBPMN_LANESET[".Keys"] = $tableKeysBPMN_LANESET;

$tdataBPMN_LANESET[".listFields"] = array();
$tdataBPMN_LANESET[".listFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".listFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".listFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".listFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".listFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".listFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".listFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".hideMobileList"] = array();


$tdataBPMN_LANESET[".viewFields"] = array();
$tdataBPMN_LANESET[".viewFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".viewFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".viewFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".viewFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".viewFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".viewFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".viewFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".addFields"] = array();
$tdataBPMN_LANESET[".addFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".addFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".addFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".addFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".addFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".addFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".addFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".masterListFields"] = array();
$tdataBPMN_LANESET[".masterListFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".masterListFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".masterListFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".masterListFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".masterListFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".masterListFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".inlineAddFields"] = array();
$tdataBPMN_LANESET[".inlineAddFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".inlineAddFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".inlineAddFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".inlineAddFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".inlineAddFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".editFields"] = array();
$tdataBPMN_LANESET[".editFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".editFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".editFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".editFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".editFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".editFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".editFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".inlineEditFields"] = array();
$tdataBPMN_LANESET[".inlineEditFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".inlineEditFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".inlineEditFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".inlineEditFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".inlineEditFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".updateSelectedFields"] = array();
$tdataBPMN_LANESET[".updateSelectedFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".updateSelectedFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".updateSelectedFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".updateSelectedFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".updateSelectedFields"][] = "LNS_STATE";


$tdataBPMN_LANESET[".exportFields"] = array();
$tdataBPMN_LANESET[".exportFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".exportFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".exportFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".exportFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".exportFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".exportFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".exportFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".importFields"] = array();
$tdataBPMN_LANESET[".importFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".importFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".importFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".importFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".importFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".importFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".importFields"][] = "LNS_STATE";

$tdataBPMN_LANESET[".printFields"] = array();
$tdataBPMN_LANESET[".printFields"][] = "LNS_UID";
$tdataBPMN_LANESET[".printFields"][] = "PRJ_UID";
$tdataBPMN_LANESET[".printFields"][] = "PRO_UID";
$tdataBPMN_LANESET[".printFields"][] = "LNS_NAME";
$tdataBPMN_LANESET[".printFields"][] = "LNS_PARENT_LANE";
$tdataBPMN_LANESET[".printFields"][] = "LNS_IS_HORIZONTAL";
$tdataBPMN_LANESET[".printFields"][] = "LNS_STATE";

//	LNS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LNS_UID";
	$fdata["GoodName"] = "LNS_UID";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","LNS_UID");
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




	$tdataBPMN_LANESET["LNS_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","PRJ_UID");
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




	$tdataBPMN_LANESET["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","PRO_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BPMN_PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRO_UID";

	
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




	$tdataBPMN_LANESET["PRO_UID"] = $fdata;
//	LNS_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LNS_NAME";
	$fdata["GoodName"] = "LNS_NAME";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","LNS_NAME");
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

		$fdata["strField"] = "LNS_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LNS_NAME";

	
	
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




	$tdataBPMN_LANESET["LNS_NAME"] = $fdata;
//	LNS_PARENT_LANE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LNS_PARENT_LANE";
	$fdata["GoodName"] = "LNS_PARENT_LANE";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","LNS_PARENT_LANE");
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

		$fdata["strField"] = "LNS_PARENT_LANE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LNS_PARENT_LANE";

	
	
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




	$tdataBPMN_LANESET["LNS_PARENT_LANE"] = $fdata;
//	LNS_IS_HORIZONTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LNS_IS_HORIZONTAL";
	$fdata["GoodName"] = "LNS_IS_HORIZONTAL";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","LNS_IS_HORIZONTAL");
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

		$fdata["strField"] = "LNS_IS_HORIZONTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LNS_IS_HORIZONTAL";

	
	
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




	$tdataBPMN_LANESET["LNS_IS_HORIZONTAL"] = $fdata;
//	LNS_STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LNS_STATE";
	$fdata["GoodName"] = "LNS_STATE";
	$fdata["ownerTable"] = "BPMN_LANESET";
	$fdata["Label"] = GetFieldLabel("BPMN_LANESET","LNS_STATE");
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

		$fdata["strField"] = "LNS_STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LNS_STATE";

	
	
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




	$tdataBPMN_LANESET["LNS_STATE"] = $fdata;


$tables_data["BPMN_LANESET"]=&$tdataBPMN_LANESET;
$field_labels["BPMN_LANESET"] = &$fieldLabelsBPMN_LANESET;
$fieldToolTips["BPMN_LANESET"] = &$fieldToolTipsBPMN_LANESET;
$placeHolders["BPMN_LANESET"] = &$placeHoldersBPMN_LANESET;
$page_titles["BPMN_LANESET"] = &$pageTitlesBPMN_LANESET;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_LANESET"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_LANESET"] = array();


	
				$strOriginalDetailsTable="BPMN_PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROCESS";
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
					$masterTablesData["BPMN_LANESET"][0] = $masterParams;
				$masterTablesData["BPMN_LANESET"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_LANESET"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["BPMN_LANESET"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_LANESET"][0]["detailKeys"][]="PRO_UID";
		
	
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
					$masterTablesData["BPMN_LANESET"][1] = $masterParams;
				$masterTablesData["BPMN_LANESET"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_LANESET"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_LANESET"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_LANESET"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_LANESET()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LNS_UID,  	PRJ_UID,  	PRO_UID,  	LNS_NAME,  	LNS_PARENT_LANE,  	LNS_IS_HORIZONTAL,  	LNS_STATE";
$proto0["m_strFrom"] = "FROM BPMN_LANESET";
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
	"m_strName" => "LNS_UID",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto6["m_sql"] = "LNS_UID";
$proto6["m_srcTableName"] = "BPMN_LANESET";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_LANESET";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_LANESET";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LNS_NAME",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto12["m_sql"] = "LNS_NAME";
$proto12["m_srcTableName"] = "BPMN_LANESET";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LNS_PARENT_LANE",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto14["m_sql"] = "LNS_PARENT_LANE";
$proto14["m_srcTableName"] = "BPMN_LANESET";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LNS_IS_HORIZONTAL",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto16["m_sql"] = "LNS_IS_HORIZONTAL";
$proto16["m_srcTableName"] = "BPMN_LANESET";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LNS_STATE",
	"m_strTable" => "BPMN_LANESET",
	"m_srcTableName" => "BPMN_LANESET"
));

$proto18["m_sql"] = "LNS_STATE";
$proto18["m_srcTableName"] = "BPMN_LANESET";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "BPMN_LANESET";
$proto21["m_srcTableName"] = "BPMN_LANESET";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "LNS_UID";
$proto21["m_columns"][] = "PRJ_UID";
$proto21["m_columns"][] = "PRO_UID";
$proto21["m_columns"][] = "LNS_NAME";
$proto21["m_columns"][] = "LNS_PARENT_LANE";
$proto21["m_columns"][] = "LNS_IS_HORIZONTAL";
$proto21["m_columns"][] = "LNS_STATE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "BPMN_LANESET";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "BPMN_LANESET";
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
$proto0["m_srcTableName"]="BPMN_LANESET";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_LANESET = createSqlQuery_BPMN_LANESET();


	
						;

							

$tdataBPMN_LANESET[".sqlquery"] = $queryData_BPMN_LANESET;

$tableEvents["BPMN_LANESET"] = new eventsBase;
$tdataBPMN_LANESET[".hasEvents"] = false;

?>
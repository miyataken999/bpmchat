<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_PARTICIPANT = array();
	$tdataBPMN_PARTICIPANT[".truncateText"] = true;
	$tdataBPMN_PARTICIPANT[".NumberOfChars"] = 20;
	$tdataBPMN_PARTICIPANT[".ShortName"] = "BPMN_PARTICIPANT";
	$tdataBPMN_PARTICIPANT[".OwnerID"] = "";
	$tdataBPMN_PARTICIPANT[".OriginalTable"] = "BPMN_PARTICIPANT";

//	field labels
$fieldLabelsBPMN_PARTICIPANT = array();
$fieldToolTipsBPMN_PARTICIPANT = array();
$pageTitlesBPMN_PARTICIPANT = array();
$placeHoldersBPMN_PARTICIPANT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_PARTICIPANT["Japanese"] = array();
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"] = array();
	$placeHoldersBPMN_PARTICIPANT["Japanese"] = array();
	$pageTitlesBPMN_PARTICIPANT["Japanese"] = array();
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PAR_UID"] = "パーUID";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PAR_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PAR_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["LNS_UID"] = "LNSのUID";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["LNS_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["LNS_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PAR_NAME"] = "パー名前";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PAR_NAME"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PAR_NAME"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PAR_MINIMUM"] = "パー最小";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PAR_MINIMUM"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PAR_MINIMUM"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PAR_MAXIMUM"] = "パー最大";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PAR_MAXIMUM"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PAR_MAXIMUM"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PAR_NUM_PARTICIPANTS"] = "パーNUM参加";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PAR_NUM_PARTICIPANTS"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PAR_NUM_PARTICIPANTS"] = "";
	$fieldLabelsBPMN_PARTICIPANT["Japanese"]["PAR_IS_HORIZONTAL"] = "パーは水平で";
	$fieldToolTipsBPMN_PARTICIPANT["Japanese"]["PAR_IS_HORIZONTAL"] = "";
	$placeHoldersBPMN_PARTICIPANT["Japanese"]["PAR_IS_HORIZONTAL"] = "";
	if (count($fieldToolTipsBPMN_PARTICIPANT["Japanese"]))
		$tdataBPMN_PARTICIPANT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_PARTICIPANT["English"] = array();
	$fieldToolTipsBPMN_PARTICIPANT["English"] = array();
	$placeHoldersBPMN_PARTICIPANT["English"] = array();
	$pageTitlesBPMN_PARTICIPANT["English"] = array();
	$fieldLabelsBPMN_PARTICIPANT["English"]["PAR_UID"] = "パーUID";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PAR_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PAR_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["LNS_UID"] = "LNSのUID";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["LNS_UID"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["LNS_UID"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PAR_NAME"] = "パー名前";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PAR_NAME"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PAR_NAME"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PAR_MINIMUM"] = "パー最小";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PAR_MINIMUM"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PAR_MINIMUM"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PAR_MAXIMUM"] = "パー最大";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PAR_MAXIMUM"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PAR_MAXIMUM"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PAR_NUM_PARTICIPANTS"] = "パーNUM参加";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PAR_NUM_PARTICIPANTS"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PAR_NUM_PARTICIPANTS"] = "";
	$fieldLabelsBPMN_PARTICIPANT["English"]["PAR_IS_HORIZONTAL"] = "パーは水平で";
	$fieldToolTipsBPMN_PARTICIPANT["English"]["PAR_IS_HORIZONTAL"] = "";
	$placeHoldersBPMN_PARTICIPANT["English"]["PAR_IS_HORIZONTAL"] = "";
	if (count($fieldToolTipsBPMN_PARTICIPANT["English"]))
		$tdataBPMN_PARTICIPANT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_PARTICIPANT[""] = array();
	$fieldToolTipsBPMN_PARTICIPANT[""] = array();
	$placeHoldersBPMN_PARTICIPANT[""] = array();
	$pageTitlesBPMN_PARTICIPANT[""] = array();
	if (count($fieldToolTipsBPMN_PARTICIPANT[""]))
		$tdataBPMN_PARTICIPANT[".isUseToolTips"] = true;
}


	$tdataBPMN_PARTICIPANT[".NCSearch"] = true;



$tdataBPMN_PARTICIPANT[".shortTableName"] = "BPMN_PARTICIPANT";
$tdataBPMN_PARTICIPANT[".nSecOptions"] = 0;
$tdataBPMN_PARTICIPANT[".recsPerRowPrint"] = 1;
$tdataBPMN_PARTICIPANT[".mainTableOwnerID"] = "";
$tdataBPMN_PARTICIPANT[".moveNext"] = 0;
$tdataBPMN_PARTICIPANT[".entityType"] = 0;

$tdataBPMN_PARTICIPANT[".strOriginalTableName"] = "BPMN_PARTICIPANT";

	



$tdataBPMN_PARTICIPANT[".showAddInPopup"] = false;

$tdataBPMN_PARTICIPANT[".showEditInPopup"] = false;

$tdataBPMN_PARTICIPANT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_PARTICIPANT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_PARTICIPANT[".fieldsForRegister"] = array();
	
$tdataBPMN_PARTICIPANT[".listAjax"] = false;

	$tdataBPMN_PARTICIPANT[".audit"] = true;

	$tdataBPMN_PARTICIPANT[".locking"] = false;

$tdataBPMN_PARTICIPANT[".edit"] = true;
$tdataBPMN_PARTICIPANT[".afterEditAction"] = 1;
$tdataBPMN_PARTICIPANT[".closePopupAfterEdit"] = 1;
$tdataBPMN_PARTICIPANT[".afterEditActionDetTable"] = "";

$tdataBPMN_PARTICIPANT[".add"] = true;
$tdataBPMN_PARTICIPANT[".afterAddAction"] = 1;
$tdataBPMN_PARTICIPANT[".closePopupAfterAdd"] = 1;
$tdataBPMN_PARTICIPANT[".afterAddActionDetTable"] = "";

$tdataBPMN_PARTICIPANT[".list"] = true;

$tdataBPMN_PARTICIPANT[".inlineEdit"] = true;


$tdataBPMN_PARTICIPANT[".reorderRecordsByHeader"] = true;
$tdataBPMN_PARTICIPANT[".createSortByDropdown"] = true;
$tdataBPMN_PARTICIPANT[".strSortControlSettingsJSON"] = "";



$tdataBPMN_PARTICIPANT[".inlineAdd"] = true;
$tdataBPMN_PARTICIPANT[".view"] = true;

$tdataBPMN_PARTICIPANT[".import"] = true;

$tdataBPMN_PARTICIPANT[".exportTo"] = true;

$tdataBPMN_PARTICIPANT[".printFriendly"] = true;

$tdataBPMN_PARTICIPANT[".delete"] = true;

$tdataBPMN_PARTICIPANT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_PARTICIPANT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_PARTICIPANT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_PARTICIPANT[".searchSaving"] = false;
//

$tdataBPMN_PARTICIPANT[".showSearchPanel"] = true;
		$tdataBPMN_PARTICIPANT[".flexibleSearch"] = true;

$tdataBPMN_PARTICIPANT[".isUseAjaxSuggest"] = true;

$tdataBPMN_PARTICIPANT[".rowHighlite"] = true;



																

$tdataBPMN_PARTICIPANT[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_PARTICIPANT[".buttonsAdded"] = false;

$tdataBPMN_PARTICIPANT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_PARTICIPANT[".isUseTimeForSearch"] = false;



$tdataBPMN_PARTICIPANT[".badgeColor"] = "008B8B";


$tdataBPMN_PARTICIPANT[".allSearchFields"] = array();
$tdataBPMN_PARTICIPANT[".filterFields"] = array();
$tdataBPMN_PARTICIPANT[".requiredSearchFields"] = array();

$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PAR_UID";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "LNS_UID";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PAR_NAME";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PAR_MINIMUM";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PAR_MAXIMUM";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PAR_NUM_PARTICIPANTS";
	$tdataBPMN_PARTICIPANT[".allSearchFields"][] = "PAR_IS_HORIZONTAL";
	

$tdataBPMN_PARTICIPANT[".googleLikeFields"] = array();
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".googleLikeFields"][] = "PAR_IS_HORIZONTAL";


$tdataBPMN_PARTICIPANT[".advSearchFields"] = array();
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".advSearchFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".tableType"] = "list";

$tdataBPMN_PARTICIPANT[".printerPageOrientation"] = 0;
$tdataBPMN_PARTICIPANT[".nPrinterPageScale"] = 100;

$tdataBPMN_PARTICIPANT[".nPrinterSplitRecords"] = 40;

$tdataBPMN_PARTICIPANT[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_PARTICIPANT[".geocodingEnabled"] = false;





$tdataBPMN_PARTICIPANT[".listGridLayout"] = 3;


$tdataBPMN_PARTICIPANT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_PARTICIPANT[".pageSize"] = 20;

$tdataBPMN_PARTICIPANT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_PARTICIPANT[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_PARTICIPANT[".orderindexes"] = array();

$tdataBPMN_PARTICIPANT[".sqlHead"] = "SELECT PAR_UID,  	PRJ_UID,  	PRO_UID,  	LNS_UID,  	PAR_NAME,  	PAR_MINIMUM,  	PAR_MAXIMUM,  	PAR_NUM_PARTICIPANTS,  	PAR_IS_HORIZONTAL";
$tdataBPMN_PARTICIPANT[".sqlFrom"] = "FROM BPMN_PARTICIPANT";
$tdataBPMN_PARTICIPANT[".sqlWhereExpr"] = "";
$tdataBPMN_PARTICIPANT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_PARTICIPANT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_PARTICIPANT[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_PARTICIPANT[".highlightSearchResults"] = true;

$tableKeysBPMN_PARTICIPANT = array();
$tableKeysBPMN_PARTICIPANT[] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".Keys"] = $tableKeysBPMN_PARTICIPANT;

$tdataBPMN_PARTICIPANT[".listFields"] = array();
$tdataBPMN_PARTICIPANT[".listFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".listFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".listFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".hideMobileList"] = array();


$tdataBPMN_PARTICIPANT[".viewFields"] = array();
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".viewFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".addFields"] = array();
$tdataBPMN_PARTICIPANT[".addFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".addFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".addFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".masterListFields"] = array();
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".masterListFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".inlineAddFields"] = array();
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".inlineAddFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".editFields"] = array();
$tdataBPMN_PARTICIPANT[".editFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".editFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".editFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".inlineEditFields"] = array();
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".inlineEditFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".updateSelectedFields"] = array();
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".updateSelectedFields"][] = "PAR_IS_HORIZONTAL";


$tdataBPMN_PARTICIPANT[".exportFields"] = array();
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".exportFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".importFields"] = array();
$tdataBPMN_PARTICIPANT[".importFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".importFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".importFields"][] = "PAR_IS_HORIZONTAL";

$tdataBPMN_PARTICIPANT[".printFields"] = array();
$tdataBPMN_PARTICIPANT[".printFields"][] = "PAR_UID";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PRJ_UID";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PRO_UID";
$tdataBPMN_PARTICIPANT[".printFields"][] = "LNS_UID";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PAR_NAME";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PAR_MINIMUM";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PAR_MAXIMUM";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PAR_NUM_PARTICIPANTS";
$tdataBPMN_PARTICIPANT[".printFields"][] = "PAR_IS_HORIZONTAL";

//	PAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAR_UID";
	$fdata["GoodName"] = "PAR_UID";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PAR_UID");
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

		$fdata["strField"] = "PAR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAR_UID";

	
	
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




	$tdataBPMN_PARTICIPANT["PAR_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PRJ_UID");
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




	$tdataBPMN_PARTICIPANT["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PRO_UID");
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




	$tdataBPMN_PARTICIPANT["PRO_UID"] = $fdata;
//	LNS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LNS_UID";
	$fdata["GoodName"] = "LNS_UID";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","LNS_UID");
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




	$tdataBPMN_PARTICIPANT["LNS_UID"] = $fdata;
//	PAR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PAR_NAME";
	$fdata["GoodName"] = "PAR_NAME";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PAR_NAME");
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

		$fdata["strField"] = "PAR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAR_NAME";

	
	
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




	$tdataBPMN_PARTICIPANT["PAR_NAME"] = $fdata;
//	PAR_MINIMUM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PAR_MINIMUM";
	$fdata["GoodName"] = "PAR_MINIMUM";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PAR_MINIMUM");
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

		$fdata["strField"] = "PAR_MINIMUM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAR_MINIMUM";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PARTICIPANT["PAR_MINIMUM"] = $fdata;
//	PAR_MAXIMUM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PAR_MAXIMUM";
	$fdata["GoodName"] = "PAR_MAXIMUM";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PAR_MAXIMUM");
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

		$fdata["strField"] = "PAR_MAXIMUM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAR_MAXIMUM";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PARTICIPANT["PAR_MAXIMUM"] = $fdata;
//	PAR_NUM_PARTICIPANTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PAR_NUM_PARTICIPANTS";
	$fdata["GoodName"] = "PAR_NUM_PARTICIPANTS";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PAR_NUM_PARTICIPANTS");
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

		$fdata["strField"] = "PAR_NUM_PARTICIPANTS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAR_NUM_PARTICIPANTS";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PARTICIPANT["PAR_NUM_PARTICIPANTS"] = $fdata;
//	PAR_IS_HORIZONTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PAR_IS_HORIZONTAL";
	$fdata["GoodName"] = "PAR_IS_HORIZONTAL";
	$fdata["ownerTable"] = "BPMN_PARTICIPANT";
	$fdata["Label"] = GetFieldLabel("BPMN_PARTICIPANT","PAR_IS_HORIZONTAL");
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

		$fdata["strField"] = "PAR_IS_HORIZONTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAR_IS_HORIZONTAL";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PARTICIPANT["PAR_IS_HORIZONTAL"] = $fdata;


$tables_data["BPMN_PARTICIPANT"]=&$tdataBPMN_PARTICIPANT;
$field_labels["BPMN_PARTICIPANT"] = &$fieldLabelsBPMN_PARTICIPANT;
$fieldToolTips["BPMN_PARTICIPANT"] = &$fieldToolTipsBPMN_PARTICIPANT;
$placeHolders["BPMN_PARTICIPANT"] = &$placeHoldersBPMN_PARTICIPANT;
$page_titles["BPMN_PARTICIPANT"] = &$pageTitlesBPMN_PARTICIPANT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_PARTICIPANT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_PARTICIPANT"] = array();


	
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
					$masterTablesData["BPMN_PARTICIPANT"][0] = $masterParams;
				$masterTablesData["BPMN_PARTICIPANT"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_PARTICIPANT"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_PARTICIPANT"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_PARTICIPANT"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_PARTICIPANT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAR_UID,  	PRJ_UID,  	PRO_UID,  	LNS_UID,  	PAR_NAME,  	PAR_MINIMUM,  	PAR_MAXIMUM,  	PAR_NUM_PARTICIPANTS,  	PAR_IS_HORIZONTAL";
$proto0["m_strFrom"] = "FROM BPMN_PARTICIPANT";
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
	"m_strName" => "PAR_UID",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto6["m_sql"] = "PAR_UID";
$proto6["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LNS_UID",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto12["m_sql"] = "LNS_UID";
$proto12["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PAR_NAME",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto14["m_sql"] = "PAR_NAME";
$proto14["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PAR_MINIMUM",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto16["m_sql"] = "PAR_MINIMUM";
$proto16["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PAR_MAXIMUM",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto18["m_sql"] = "PAR_MAXIMUM";
$proto18["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PAR_NUM_PARTICIPANTS",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto20["m_sql"] = "PAR_NUM_PARTICIPANTS";
$proto20["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PAR_IS_HORIZONTAL",
	"m_strTable" => "BPMN_PARTICIPANT",
	"m_srcTableName" => "BPMN_PARTICIPANT"
));

$proto22["m_sql"] = "PAR_IS_HORIZONTAL";
$proto22["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "BPMN_PARTICIPANT";
$proto25["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "PAR_UID";
$proto25["m_columns"][] = "PRJ_UID";
$proto25["m_columns"][] = "PRO_UID";
$proto25["m_columns"][] = "LNS_UID";
$proto25["m_columns"][] = "PAR_NAME";
$proto25["m_columns"][] = "PAR_MINIMUM";
$proto25["m_columns"][] = "PAR_MAXIMUM";
$proto25["m_columns"][] = "PAR_NUM_PARTICIPANTS";
$proto25["m_columns"][] = "PAR_IS_HORIZONTAL";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "BPMN_PARTICIPANT";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "BPMN_PARTICIPANT";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_PARTICIPANT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_PARTICIPANT = createSqlQuery_BPMN_PARTICIPANT();


	
						;

									

$tdataBPMN_PARTICIPANT[".sqlquery"] = $queryData_BPMN_PARTICIPANT;

$tableEvents["BPMN_PARTICIPANT"] = new eventsBase;
$tdataBPMN_PARTICIPANT[".hasEvents"] = false;

?>
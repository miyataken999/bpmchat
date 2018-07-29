<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSWIMLANES_ELEMENTS = array();
	$tdataSWIMLANES_ELEMENTS[".truncateText"] = true;
	$tdataSWIMLANES_ELEMENTS[".NumberOfChars"] = 20;
	$tdataSWIMLANES_ELEMENTS[".ShortName"] = "SWIMLANES_ELEMENTS";
	$tdataSWIMLANES_ELEMENTS[".OwnerID"] = "";
	$tdataSWIMLANES_ELEMENTS[".OriginalTable"] = "SWIMLANES_ELEMENTS";

//	field labels
$fieldLabelsSWIMLANES_ELEMENTS = array();
$fieldToolTipsSWIMLANES_ELEMENTS = array();
$pageTitlesSWIMLANES_ELEMENTS = array();
$placeHoldersSWIMLANES_ELEMENTS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"] = array();
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"] = array();
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"] = array();
	$pageTitlesSWIMLANES_ELEMENTS["Japanese"] = array();
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_UID"] = "SWIのUID";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_UID"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_UID"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["PRO_UID"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["PRO_UID"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_TYPE"] = "SWIタイプ";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_TYPE"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_TYPE"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_X"] = "SWI X";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_X"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_X"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_Y"] = "SWI Y";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_Y"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_Y"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_WIDTH"] = "SWI幅";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_WIDTH"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_WIDTH"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_HEIGHT"] = "SWIの高さ";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_HEIGHT"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_HEIGHT"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["Japanese"]["SWI_NEXT_UID"] = "SWI次のuid";
	$fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]["SWI_NEXT_UID"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["Japanese"]["SWI_NEXT_UID"] = "";
	if (count($fieldToolTipsSWIMLANES_ELEMENTS["Japanese"]))
		$tdataSWIMLANES_ELEMENTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSWIMLANES_ELEMENTS["English"] = array();
	$fieldToolTipsSWIMLANES_ELEMENTS["English"] = array();
	$placeHoldersSWIMLANES_ELEMENTS["English"] = array();
	$pageTitlesSWIMLANES_ELEMENTS["English"] = array();
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_UID"] = "SWIのUID";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_UID"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_UID"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["PRO_UID"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["PRO_UID"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_TYPE"] = "SWIタイプ";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_TYPE"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_TYPE"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_X"] = "SWI X";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_X"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_X"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_Y"] = "SWI Y";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_Y"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_Y"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_WIDTH"] = "SWI幅";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_WIDTH"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_WIDTH"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_HEIGHT"] = "SWIの高さ";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_HEIGHT"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_HEIGHT"] = "";
	$fieldLabelsSWIMLANES_ELEMENTS["English"]["SWI_NEXT_UID"] = "SWI次のuid";
	$fieldToolTipsSWIMLANES_ELEMENTS["English"]["SWI_NEXT_UID"] = "";
	$placeHoldersSWIMLANES_ELEMENTS["English"]["SWI_NEXT_UID"] = "";
	if (count($fieldToolTipsSWIMLANES_ELEMENTS["English"]))
		$tdataSWIMLANES_ELEMENTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSWIMLANES_ELEMENTS[""] = array();
	$fieldToolTipsSWIMLANES_ELEMENTS[""] = array();
	$placeHoldersSWIMLANES_ELEMENTS[""] = array();
	$pageTitlesSWIMLANES_ELEMENTS[""] = array();
	if (count($fieldToolTipsSWIMLANES_ELEMENTS[""]))
		$tdataSWIMLANES_ELEMENTS[".isUseToolTips"] = true;
}


	$tdataSWIMLANES_ELEMENTS[".NCSearch"] = true;



$tdataSWIMLANES_ELEMENTS[".shortTableName"] = "SWIMLANES_ELEMENTS";
$tdataSWIMLANES_ELEMENTS[".nSecOptions"] = 0;
$tdataSWIMLANES_ELEMENTS[".recsPerRowPrint"] = 1;
$tdataSWIMLANES_ELEMENTS[".mainTableOwnerID"] = "";
$tdataSWIMLANES_ELEMENTS[".moveNext"] = 0;
$tdataSWIMLANES_ELEMENTS[".entityType"] = 0;

$tdataSWIMLANES_ELEMENTS[".strOriginalTableName"] = "SWIMLANES_ELEMENTS";

	



$tdataSWIMLANES_ELEMENTS[".showAddInPopup"] = false;

$tdataSWIMLANES_ELEMENTS[".showEditInPopup"] = false;

$tdataSWIMLANES_ELEMENTS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSWIMLANES_ELEMENTS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSWIMLANES_ELEMENTS[".fieldsForRegister"] = array();
	
$tdataSWIMLANES_ELEMENTS[".listAjax"] = false;

	$tdataSWIMLANES_ELEMENTS[".audit"] = true;

	$tdataSWIMLANES_ELEMENTS[".locking"] = false;

$tdataSWIMLANES_ELEMENTS[".edit"] = true;
$tdataSWIMLANES_ELEMENTS[".afterEditAction"] = 1;
$tdataSWIMLANES_ELEMENTS[".closePopupAfterEdit"] = 1;
$tdataSWIMLANES_ELEMENTS[".afterEditActionDetTable"] = "";

$tdataSWIMLANES_ELEMENTS[".add"] = true;
$tdataSWIMLANES_ELEMENTS[".afterAddAction"] = 1;
$tdataSWIMLANES_ELEMENTS[".closePopupAfterAdd"] = 1;
$tdataSWIMLANES_ELEMENTS[".afterAddActionDetTable"] = "";

$tdataSWIMLANES_ELEMENTS[".list"] = true;

$tdataSWIMLANES_ELEMENTS[".inlineEdit"] = true;


$tdataSWIMLANES_ELEMENTS[".reorderRecordsByHeader"] = true;
$tdataSWIMLANES_ELEMENTS[".createSortByDropdown"] = true;
$tdataSWIMLANES_ELEMENTS[".strSortControlSettingsJSON"] = "";



$tdataSWIMLANES_ELEMENTS[".inlineAdd"] = true;
$tdataSWIMLANES_ELEMENTS[".view"] = true;

$tdataSWIMLANES_ELEMENTS[".import"] = true;

$tdataSWIMLANES_ELEMENTS[".exportTo"] = true;

$tdataSWIMLANES_ELEMENTS[".printFriendly"] = true;

$tdataSWIMLANES_ELEMENTS[".delete"] = true;

$tdataSWIMLANES_ELEMENTS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSWIMLANES_ELEMENTS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSWIMLANES_ELEMENTS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSWIMLANES_ELEMENTS[".searchSaving"] = false;
//

$tdataSWIMLANES_ELEMENTS[".showSearchPanel"] = true;
		$tdataSWIMLANES_ELEMENTS[".flexibleSearch"] = true;

$tdataSWIMLANES_ELEMENTS[".isUseAjaxSuggest"] = true;

$tdataSWIMLANES_ELEMENTS[".rowHighlite"] = true;



				

$tdataSWIMLANES_ELEMENTS[".ajaxCodeSnippetAdded"] = false;

$tdataSWIMLANES_ELEMENTS[".buttonsAdded"] = false;

$tdataSWIMLANES_ELEMENTS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSWIMLANES_ELEMENTS[".isUseTimeForSearch"] = false;





$tdataSWIMLANES_ELEMENTS[".allSearchFields"] = array();
$tdataSWIMLANES_ELEMENTS[".filterFields"] = array();
$tdataSWIMLANES_ELEMENTS[".requiredSearchFields"] = array();

$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_UID";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "PRO_UID";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_TYPE";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_X";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_Y";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_WIDTH";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_HEIGHT";
	$tdataSWIMLANES_ELEMENTS[".allSearchFields"][] = "SWI_NEXT_UID";
	

$tdataSWIMLANES_ELEMENTS[".googleLikeFields"] = array();
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".googleLikeFields"][] = "SWI_NEXT_UID";


$tdataSWIMLANES_ELEMENTS[".advSearchFields"] = array();
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".advSearchFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".tableType"] = "list";

$tdataSWIMLANES_ELEMENTS[".printerPageOrientation"] = 0;
$tdataSWIMLANES_ELEMENTS[".nPrinterPageScale"] = 100;

$tdataSWIMLANES_ELEMENTS[".nPrinterSplitRecords"] = 40;

$tdataSWIMLANES_ELEMENTS[".nPrinterPDFSplitRecords"] = 40;



$tdataSWIMLANES_ELEMENTS[".geocodingEnabled"] = false;





$tdataSWIMLANES_ELEMENTS[".listGridLayout"] = 3;


$tdataSWIMLANES_ELEMENTS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSWIMLANES_ELEMENTS[".pageSize"] = 20;

$tdataSWIMLANES_ELEMENTS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSWIMLANES_ELEMENTS[".strOrderBy"] = $tstrOrderBy;

$tdataSWIMLANES_ELEMENTS[".orderindexes"] = array();

$tdataSWIMLANES_ELEMENTS[".sqlHead"] = "SELECT SWI_UID,  	PRO_UID,  	SWI_TYPE,  	SWI_X,  	SWI_Y,  	SWI_WIDTH,  	SWI_HEIGHT,  	SWI_NEXT_UID";
$tdataSWIMLANES_ELEMENTS[".sqlFrom"] = "FROM SWIMLANES_ELEMENTS";
$tdataSWIMLANES_ELEMENTS[".sqlWhereExpr"] = "";
$tdataSWIMLANES_ELEMENTS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSWIMLANES_ELEMENTS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSWIMLANES_ELEMENTS[".arrGroupsPerPage"] = $arrGPP;

$tdataSWIMLANES_ELEMENTS[".highlightSearchResults"] = true;

$tableKeysSWIMLANES_ELEMENTS = array();
$tableKeysSWIMLANES_ELEMENTS[] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".Keys"] = $tableKeysSWIMLANES_ELEMENTS;

$tdataSWIMLANES_ELEMENTS[".listFields"] = array();
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".listFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".hideMobileList"] = array();


$tdataSWIMLANES_ELEMENTS[".viewFields"] = array();
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".viewFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".addFields"] = array();
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".addFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".masterListFields"] = array();
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".masterListFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".inlineAddFields"] = array();
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".inlineAddFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".editFields"] = array();
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".editFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".inlineEditFields"] = array();
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".inlineEditFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"] = array();
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".updateSelectedFields"][] = "SWI_NEXT_UID";


$tdataSWIMLANES_ELEMENTS[".exportFields"] = array();
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".exportFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".importFields"] = array();
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".importFields"][] = "SWI_NEXT_UID";

$tdataSWIMLANES_ELEMENTS[".printFields"] = array();
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_UID";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "PRO_UID";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_TYPE";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_X";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_Y";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_WIDTH";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_HEIGHT";
$tdataSWIMLANES_ELEMENTS[".printFields"][] = "SWI_NEXT_UID";

//	SWI_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SWI_UID";
	$fdata["GoodName"] = "SWI_UID";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_UID");
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

		$fdata["strField"] = "SWI_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_UID";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","PRO_UID");
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




	$tdataSWIMLANES_ELEMENTS["PRO_UID"] = $fdata;
//	SWI_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SWI_TYPE";
	$fdata["GoodName"] = "SWI_TYPE";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_TYPE");
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

		$fdata["strField"] = "SWI_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_TYPE";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_TYPE"] = $fdata;
//	SWI_X
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SWI_X";
	$fdata["GoodName"] = "SWI_X";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_X");
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

		$fdata["strField"] = "SWI_X";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_X";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_X"] = $fdata;
//	SWI_Y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SWI_Y";
	$fdata["GoodName"] = "SWI_Y";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_Y");
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

		$fdata["strField"] = "SWI_Y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_Y";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_Y"] = $fdata;
//	SWI_WIDTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SWI_WIDTH";
	$fdata["GoodName"] = "SWI_WIDTH";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_WIDTH");
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

		$fdata["strField"] = "SWI_WIDTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_WIDTH";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_WIDTH"] = $fdata;
//	SWI_HEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SWI_HEIGHT";
	$fdata["GoodName"] = "SWI_HEIGHT";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_HEIGHT");
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

		$fdata["strField"] = "SWI_HEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_HEIGHT";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_HEIGHT"] = $fdata;
//	SWI_NEXT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SWI_NEXT_UID";
	$fdata["GoodName"] = "SWI_NEXT_UID";
	$fdata["ownerTable"] = "SWIMLANES_ELEMENTS";
	$fdata["Label"] = GetFieldLabel("SWIMLANES_ELEMENTS","SWI_NEXT_UID");
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

		$fdata["strField"] = "SWI_NEXT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SWI_NEXT_UID";

	
	
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




	$tdataSWIMLANES_ELEMENTS["SWI_NEXT_UID"] = $fdata;


$tables_data["SWIMLANES_ELEMENTS"]=&$tdataSWIMLANES_ELEMENTS;
$field_labels["SWIMLANES_ELEMENTS"] = &$fieldLabelsSWIMLANES_ELEMENTS;
$fieldToolTips["SWIMLANES_ELEMENTS"] = &$fieldToolTipsSWIMLANES_ELEMENTS;
$placeHolders["SWIMLANES_ELEMENTS"] = &$placeHoldersSWIMLANES_ELEMENTS;
$page_titles["SWIMLANES_ELEMENTS"] = &$pageTitlesSWIMLANES_ELEMENTS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SWIMLANES_ELEMENTS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SWIMLANES_ELEMENTS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SWIMLANES_ELEMENTS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SWI_UID,  	PRO_UID,  	SWI_TYPE,  	SWI_X,  	SWI_Y,  	SWI_WIDTH,  	SWI_HEIGHT,  	SWI_NEXT_UID";
$proto0["m_strFrom"] = "FROM SWIMLANES_ELEMENTS";
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
	"m_strName" => "SWI_UID",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto6["m_sql"] = "SWI_UID";
$proto6["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SWI_TYPE",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto10["m_sql"] = "SWI_TYPE";
$proto10["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SWI_X",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto12["m_sql"] = "SWI_X";
$proto12["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SWI_Y",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto14["m_sql"] = "SWI_Y";
$proto14["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SWI_WIDTH",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto16["m_sql"] = "SWI_WIDTH";
$proto16["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SWI_HEIGHT",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto18["m_sql"] = "SWI_HEIGHT";
$proto18["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SWI_NEXT_UID",
	"m_strTable" => "SWIMLANES_ELEMENTS",
	"m_srcTableName" => "SWIMLANES_ELEMENTS"
));

$proto20["m_sql"] = "SWI_NEXT_UID";
$proto20["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "SWIMLANES_ELEMENTS";
$proto23["m_srcTableName"] = "SWIMLANES_ELEMENTS";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "SWI_UID";
$proto23["m_columns"][] = "PRO_UID";
$proto23["m_columns"][] = "SWI_TYPE";
$proto23["m_columns"][] = "SWI_X";
$proto23["m_columns"][] = "SWI_Y";
$proto23["m_columns"][] = "SWI_WIDTH";
$proto23["m_columns"][] = "SWI_HEIGHT";
$proto23["m_columns"][] = "SWI_NEXT_UID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "SWIMLANES_ELEMENTS";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "SWIMLANES_ELEMENTS";
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
$proto0["m_srcTableName"]="SWIMLANES_ELEMENTS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SWIMLANES_ELEMENTS = createSqlQuery_SWIMLANES_ELEMENTS();


	
						;

								

$tdataSWIMLANES_ELEMENTS[".sqlquery"] = $queryData_SWIMLANES_ELEMENTS;

$tableEvents["SWIMLANES_ELEMENTS"] = new eventsBase;
$tdataSWIMLANES_ELEMENTS[".hasEvents"] = false;

?>
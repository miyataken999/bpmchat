<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_BOUND = array();
	$tdataBPMN_BOUND[".truncateText"] = true;
	$tdataBPMN_BOUND[".NumberOfChars"] = 20;
	$tdataBPMN_BOUND[".ShortName"] = "BPMN_BOUND";
	$tdataBPMN_BOUND[".OwnerID"] = "";
	$tdataBPMN_BOUND[".OriginalTable"] = "BPMN_BOUND";

//	field labels
$fieldLabelsBPMN_BOUND = array();
$fieldToolTipsBPMN_BOUND = array();
$pageTitlesBPMN_BOUND = array();
$placeHoldersBPMN_BOUND = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_BOUND["Japanese"] = array();
	$fieldToolTipsBPMN_BOUND["Japanese"] = array();
	$placeHoldersBPMN_BOUND["Japanese"] = array();
	$pageTitlesBPMN_BOUND["Japanese"] = array();
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_UID"] = "坊のUID";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_UID"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_UID"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_BOUND["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_BOUND["Japanese"]["DIA_UID"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["DIA_UID"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["ELEMENT_UID"] = "要素のUID";
	$fieldToolTipsBPMN_BOUND["Japanese"]["ELEMENT_UID"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["ELEMENT_UID"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_ELEMENT"] = "坊要素";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_ELEMENT"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_ELEMENT"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_ELEMENT_TYPE"] = "坊の要素型";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_ELEMENT_TYPE"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_ELEMENT_TYPE"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_X"] = "坊のX";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_X"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_X"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_Y"] = "坊のy";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_Y"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_Y"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_WIDTH"] = "坊幅";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_WIDTH"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_WIDTH"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_HEIGHT"] = "坊の高さ";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_HEIGHT"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_HEIGHT"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_REL_POSITION"] = "坊の相対位置";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_REL_POSITION"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_REL_POSITION"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_SIZE_IDENTICAL"] = "坊のサイズと同じ";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_SIZE_IDENTICAL"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_SIZE_IDENTICAL"] = "";
	$fieldLabelsBPMN_BOUND["Japanese"]["BOU_CONTAINER"] = "坊コンテナ";
	$fieldToolTipsBPMN_BOUND["Japanese"]["BOU_CONTAINER"] = "";
	$placeHoldersBPMN_BOUND["Japanese"]["BOU_CONTAINER"] = "";
	if (count($fieldToolTipsBPMN_BOUND["Japanese"]))
		$tdataBPMN_BOUND[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_BOUND["English"] = array();
	$fieldToolTipsBPMN_BOUND["English"] = array();
	$placeHoldersBPMN_BOUND["English"] = array();
	$pageTitlesBPMN_BOUND["English"] = array();
	$fieldLabelsBPMN_BOUND["English"]["BOU_UID"] = "坊のUID";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_UID"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_UID"] = "";
	$fieldLabelsBPMN_BOUND["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_BOUND["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_BOUND["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_BOUND["English"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_BOUND["English"]["DIA_UID"] = "";
	$placeHoldersBPMN_BOUND["English"]["DIA_UID"] = "";
	$fieldLabelsBPMN_BOUND["English"]["ELEMENT_UID"] = "要素のUID";
	$fieldToolTipsBPMN_BOUND["English"]["ELEMENT_UID"] = "";
	$placeHoldersBPMN_BOUND["English"]["ELEMENT_UID"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_ELEMENT"] = "坊要素";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_ELEMENT"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_ELEMENT"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_ELEMENT_TYPE"] = "坊の要素型";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_ELEMENT_TYPE"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_ELEMENT_TYPE"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_X"] = "坊のX";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_X"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_X"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_Y"] = "坊のy";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_Y"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_Y"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_WIDTH"] = "坊幅";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_WIDTH"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_WIDTH"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_HEIGHT"] = "坊の高さ";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_HEIGHT"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_HEIGHT"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_REL_POSITION"] = "坊の相対位置";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_REL_POSITION"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_REL_POSITION"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_SIZE_IDENTICAL"] = "坊のサイズと同じ";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_SIZE_IDENTICAL"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_SIZE_IDENTICAL"] = "";
	$fieldLabelsBPMN_BOUND["English"]["BOU_CONTAINER"] = "坊コンテナ";
	$fieldToolTipsBPMN_BOUND["English"]["BOU_CONTAINER"] = "";
	$placeHoldersBPMN_BOUND["English"]["BOU_CONTAINER"] = "";
	if (count($fieldToolTipsBPMN_BOUND["English"]))
		$tdataBPMN_BOUND[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_BOUND[""] = array();
	$fieldToolTipsBPMN_BOUND[""] = array();
	$placeHoldersBPMN_BOUND[""] = array();
	$pageTitlesBPMN_BOUND[""] = array();
	if (count($fieldToolTipsBPMN_BOUND[""]))
		$tdataBPMN_BOUND[".isUseToolTips"] = true;
}


	$tdataBPMN_BOUND[".NCSearch"] = true;



$tdataBPMN_BOUND[".shortTableName"] = "BPMN_BOUND";
$tdataBPMN_BOUND[".nSecOptions"] = 0;
$tdataBPMN_BOUND[".recsPerRowPrint"] = 1;
$tdataBPMN_BOUND[".mainTableOwnerID"] = "";
$tdataBPMN_BOUND[".moveNext"] = 0;
$tdataBPMN_BOUND[".entityType"] = 0;

$tdataBPMN_BOUND[".strOriginalTableName"] = "BPMN_BOUND";

	



$tdataBPMN_BOUND[".showAddInPopup"] = false;

$tdataBPMN_BOUND[".showEditInPopup"] = false;

$tdataBPMN_BOUND[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_BOUND[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_BOUND[".fieldsForRegister"] = array();
	
$tdataBPMN_BOUND[".listAjax"] = false;

	$tdataBPMN_BOUND[".audit"] = true;

	$tdataBPMN_BOUND[".locking"] = false;

$tdataBPMN_BOUND[".edit"] = true;
$tdataBPMN_BOUND[".afterEditAction"] = 1;
$tdataBPMN_BOUND[".closePopupAfterEdit"] = 1;
$tdataBPMN_BOUND[".afterEditActionDetTable"] = "";

$tdataBPMN_BOUND[".add"] = true;
$tdataBPMN_BOUND[".afterAddAction"] = 1;
$tdataBPMN_BOUND[".closePopupAfterAdd"] = 1;
$tdataBPMN_BOUND[".afterAddActionDetTable"] = "";

$tdataBPMN_BOUND[".list"] = true;

$tdataBPMN_BOUND[".inlineEdit"] = true;


$tdataBPMN_BOUND[".reorderRecordsByHeader"] = true;
$tdataBPMN_BOUND[".createSortByDropdown"] = true;
$tdataBPMN_BOUND[".strSortControlSettingsJSON"] = "";



$tdataBPMN_BOUND[".inlineAdd"] = true;
$tdataBPMN_BOUND[".view"] = true;

$tdataBPMN_BOUND[".import"] = true;

$tdataBPMN_BOUND[".exportTo"] = true;

$tdataBPMN_BOUND[".printFriendly"] = true;

$tdataBPMN_BOUND[".delete"] = true;

$tdataBPMN_BOUND[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_BOUND[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_BOUND[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_BOUND[".searchSaving"] = false;
//

$tdataBPMN_BOUND[".showSearchPanel"] = true;
		$tdataBPMN_BOUND[".flexibleSearch"] = true;

$tdataBPMN_BOUND[".isUseAjaxSuggest"] = true;

$tdataBPMN_BOUND[".rowHighlite"] = true;



																												

$tdataBPMN_BOUND[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_BOUND[".buttonsAdded"] = false;

$tdataBPMN_BOUND[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_BOUND[".isUseTimeForSearch"] = false;



$tdataBPMN_BOUND[".badgeColor"] = "6B8E23";


$tdataBPMN_BOUND[".allSearchFields"] = array();
$tdataBPMN_BOUND[".filterFields"] = array();
$tdataBPMN_BOUND[".requiredSearchFields"] = array();

$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_UID";
	$tdataBPMN_BOUND[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_BOUND[".allSearchFields"][] = "DIA_UID";
	$tdataBPMN_BOUND[".allSearchFields"][] = "ELEMENT_UID";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_ELEMENT";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_ELEMENT_TYPE";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_X";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_Y";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_WIDTH";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_HEIGHT";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_REL_POSITION";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_SIZE_IDENTICAL";
	$tdataBPMN_BOUND[".allSearchFields"][] = "BOU_CONTAINER";
	

$tdataBPMN_BOUND[".googleLikeFields"] = array();
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".googleLikeFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".googleLikeFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_X";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".googleLikeFields"][] = "BOU_CONTAINER";


$tdataBPMN_BOUND[".advSearchFields"] = array();
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".advSearchFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".advSearchFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_X";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".advSearchFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".tableType"] = "list";

$tdataBPMN_BOUND[".printerPageOrientation"] = 0;
$tdataBPMN_BOUND[".nPrinterPageScale"] = 100;

$tdataBPMN_BOUND[".nPrinterSplitRecords"] = 40;

$tdataBPMN_BOUND[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_BOUND[".geocodingEnabled"] = false;





$tdataBPMN_BOUND[".listGridLayout"] = 3;


$tdataBPMN_BOUND[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_BOUND[".pageSize"] = 20;

$tdataBPMN_BOUND[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_BOUND[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_BOUND[".orderindexes"] = array();

$tdataBPMN_BOUND[".sqlHead"] = "SELECT BOU_UID,  	PRJ_UID,  	DIA_UID,  	ELEMENT_UID,  	BOU_ELEMENT,  	BOU_ELEMENT_TYPE,  	BOU_X,  	BOU_Y,  	BOU_WIDTH,  	BOU_HEIGHT,  	BOU_REL_POSITION,  	BOU_SIZE_IDENTICAL,  	BOU_CONTAINER";
$tdataBPMN_BOUND[".sqlFrom"] = "FROM BPMN_BOUND";
$tdataBPMN_BOUND[".sqlWhereExpr"] = "";
$tdataBPMN_BOUND[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_BOUND[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_BOUND[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_BOUND[".highlightSearchResults"] = true;

$tableKeysBPMN_BOUND = array();
$tableKeysBPMN_BOUND[] = "BOU_UID";
$tdataBPMN_BOUND[".Keys"] = $tableKeysBPMN_BOUND;

$tdataBPMN_BOUND[".listFields"] = array();
$tdataBPMN_BOUND[".listFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".listFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".listFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".listFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".listFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".listFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".listFields"][] = "BOU_X";
$tdataBPMN_BOUND[".listFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".listFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".listFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".listFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".listFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".listFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".hideMobileList"] = array();


$tdataBPMN_BOUND[".viewFields"] = array();
$tdataBPMN_BOUND[".viewFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".viewFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".viewFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".viewFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_X";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".viewFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".addFields"] = array();
$tdataBPMN_BOUND[".addFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".addFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".addFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".addFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".addFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".addFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".addFields"][] = "BOU_X";
$tdataBPMN_BOUND[".addFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".addFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".addFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".addFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".addFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".addFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".masterListFields"] = array();
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".masterListFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".masterListFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_X";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".masterListFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".inlineAddFields"] = array();
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".inlineAddFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".inlineAddFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_X";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".inlineAddFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".editFields"] = array();
$tdataBPMN_BOUND[".editFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".editFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".editFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".editFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".editFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".editFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".editFields"][] = "BOU_X";
$tdataBPMN_BOUND[".editFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".editFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".editFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".editFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".editFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".editFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".inlineEditFields"] = array();
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".inlineEditFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".inlineEditFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_X";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".inlineEditFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".updateSelectedFields"] = array();
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_X";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".updateSelectedFields"][] = "BOU_CONTAINER";


$tdataBPMN_BOUND[".exportFields"] = array();
$tdataBPMN_BOUND[".exportFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".exportFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".exportFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".exportFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_X";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".exportFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".importFields"] = array();
$tdataBPMN_BOUND[".importFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".importFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".importFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".importFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".importFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".importFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".importFields"][] = "BOU_X";
$tdataBPMN_BOUND[".importFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".importFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".importFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".importFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".importFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".importFields"][] = "BOU_CONTAINER";

$tdataBPMN_BOUND[".printFields"] = array();
$tdataBPMN_BOUND[".printFields"][] = "BOU_UID";
$tdataBPMN_BOUND[".printFields"][] = "PRJ_UID";
$tdataBPMN_BOUND[".printFields"][] = "DIA_UID";
$tdataBPMN_BOUND[".printFields"][] = "ELEMENT_UID";
$tdataBPMN_BOUND[".printFields"][] = "BOU_ELEMENT";
$tdataBPMN_BOUND[".printFields"][] = "BOU_ELEMENT_TYPE";
$tdataBPMN_BOUND[".printFields"][] = "BOU_X";
$tdataBPMN_BOUND[".printFields"][] = "BOU_Y";
$tdataBPMN_BOUND[".printFields"][] = "BOU_WIDTH";
$tdataBPMN_BOUND[".printFields"][] = "BOU_HEIGHT";
$tdataBPMN_BOUND[".printFields"][] = "BOU_REL_POSITION";
$tdataBPMN_BOUND[".printFields"][] = "BOU_SIZE_IDENTICAL";
$tdataBPMN_BOUND[".printFields"][] = "BOU_CONTAINER";

//	BOU_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BOU_UID";
	$fdata["GoodName"] = "BOU_UID";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_UID");
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

		$fdata["strField"] = "BOU_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_UID";

	
	
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




	$tdataBPMN_BOUND["BOU_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","PRJ_UID");
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




	$tdataBPMN_BOUND["PRJ_UID"] = $fdata;
//	DIA_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DIA_UID";
	$fdata["GoodName"] = "DIA_UID";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","DIA_UID");
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

		$fdata["strField"] = "DIA_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIA_UID";

	
	
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
	$edata["LookupTable"] = "BPMN_DIAGRAM";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DIA_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "DIA_UID";

	
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




	$tdataBPMN_BOUND["DIA_UID"] = $fdata;
//	ELEMENT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ELEMENT_UID";
	$fdata["GoodName"] = "ELEMENT_UID";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","ELEMENT_UID");
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

		$fdata["strField"] = "ELEMENT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ELEMENT_UID";

	
	
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




	$tdataBPMN_BOUND["ELEMENT_UID"] = $fdata;
//	BOU_ELEMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BOU_ELEMENT";
	$fdata["GoodName"] = "BOU_ELEMENT";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_ELEMENT");
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

		$fdata["strField"] = "BOU_ELEMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_ELEMENT";

	
	
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




	$tdataBPMN_BOUND["BOU_ELEMENT"] = $fdata;
//	BOU_ELEMENT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BOU_ELEMENT_TYPE";
	$fdata["GoodName"] = "BOU_ELEMENT_TYPE";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_ELEMENT_TYPE");
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

		$fdata["strField"] = "BOU_ELEMENT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_ELEMENT_TYPE";

	
	
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




	$tdataBPMN_BOUND["BOU_ELEMENT_TYPE"] = $fdata;
//	BOU_X
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "BOU_X";
	$fdata["GoodName"] = "BOU_X";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_X");
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

		$fdata["strField"] = "BOU_X";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_X";

	
	
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




	$tdataBPMN_BOUND["BOU_X"] = $fdata;
//	BOU_Y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BOU_Y";
	$fdata["GoodName"] = "BOU_Y";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_Y");
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

		$fdata["strField"] = "BOU_Y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_Y";

	
	
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




	$tdataBPMN_BOUND["BOU_Y"] = $fdata;
//	BOU_WIDTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "BOU_WIDTH";
	$fdata["GoodName"] = "BOU_WIDTH";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_WIDTH");
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

		$fdata["strField"] = "BOU_WIDTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_WIDTH";

	
	
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




	$tdataBPMN_BOUND["BOU_WIDTH"] = $fdata;
//	BOU_HEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BOU_HEIGHT";
	$fdata["GoodName"] = "BOU_HEIGHT";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_HEIGHT");
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

		$fdata["strField"] = "BOU_HEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_HEIGHT";

	
	
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




	$tdataBPMN_BOUND["BOU_HEIGHT"] = $fdata;
//	BOU_REL_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BOU_REL_POSITION";
	$fdata["GoodName"] = "BOU_REL_POSITION";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_REL_POSITION");
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

		$fdata["strField"] = "BOU_REL_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_REL_POSITION";

	
	
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




	$tdataBPMN_BOUND["BOU_REL_POSITION"] = $fdata;
//	BOU_SIZE_IDENTICAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "BOU_SIZE_IDENTICAL";
	$fdata["GoodName"] = "BOU_SIZE_IDENTICAL";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_SIZE_IDENTICAL");
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

		$fdata["strField"] = "BOU_SIZE_IDENTICAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_SIZE_IDENTICAL";

	
	
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




	$tdataBPMN_BOUND["BOU_SIZE_IDENTICAL"] = $fdata;
//	BOU_CONTAINER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "BOU_CONTAINER";
	$fdata["GoodName"] = "BOU_CONTAINER";
	$fdata["ownerTable"] = "BPMN_BOUND";
	$fdata["Label"] = GetFieldLabel("BPMN_BOUND","BOU_CONTAINER");
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

		$fdata["strField"] = "BOU_CONTAINER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOU_CONTAINER";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataBPMN_BOUND["BOU_CONTAINER"] = $fdata;


$tables_data["BPMN_BOUND"]=&$tdataBPMN_BOUND;
$field_labels["BPMN_BOUND"] = &$fieldLabelsBPMN_BOUND;
$fieldToolTips["BPMN_BOUND"] = &$fieldToolTipsBPMN_BOUND;
$placeHolders["BPMN_BOUND"] = &$placeHoldersBPMN_BOUND;
$page_titles["BPMN_BOUND"] = &$pageTitlesBPMN_BOUND;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_BOUND"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_BOUND"] = array();


	
				$strOriginalDetailsTable="BPMN_DIAGRAM";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_DIAGRAM";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_DIAGRAM";
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
					$masterTablesData["BPMN_BOUND"][0] = $masterParams;
				$masterTablesData["BPMN_BOUND"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_BOUND"][0]["masterKeys"][]="DIA_UID";
				$masterTablesData["BPMN_BOUND"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_BOUND"][0]["detailKeys"][]="DIA_UID";
		
	
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
					$masterTablesData["BPMN_BOUND"][1] = $masterParams;
				$masterTablesData["BPMN_BOUND"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_BOUND"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_BOUND"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_BOUND"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_BOUND()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BOU_UID,  	PRJ_UID,  	DIA_UID,  	ELEMENT_UID,  	BOU_ELEMENT,  	BOU_ELEMENT_TYPE,  	BOU_X,  	BOU_Y,  	BOU_WIDTH,  	BOU_HEIGHT,  	BOU_REL_POSITION,  	BOU_SIZE_IDENTICAL,  	BOU_CONTAINER";
$proto0["m_strFrom"] = "FROM BPMN_BOUND";
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
	"m_strName" => "BOU_UID",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto6["m_sql"] = "BOU_UID";
$proto6["m_srcTableName"] = "BPMN_BOUND";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_BOUND";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DIA_UID",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto10["m_sql"] = "DIA_UID";
$proto10["m_srcTableName"] = "BPMN_BOUND";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ELEMENT_UID",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto12["m_sql"] = "ELEMENT_UID";
$proto12["m_srcTableName"] = "BPMN_BOUND";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_ELEMENT",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto14["m_sql"] = "BOU_ELEMENT";
$proto14["m_srcTableName"] = "BPMN_BOUND";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_ELEMENT_TYPE",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto16["m_sql"] = "BOU_ELEMENT_TYPE";
$proto16["m_srcTableName"] = "BPMN_BOUND";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_X",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto18["m_sql"] = "BOU_X";
$proto18["m_srcTableName"] = "BPMN_BOUND";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_Y",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto20["m_sql"] = "BOU_Y";
$proto20["m_srcTableName"] = "BPMN_BOUND";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_WIDTH",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto22["m_sql"] = "BOU_WIDTH";
$proto22["m_srcTableName"] = "BPMN_BOUND";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_HEIGHT",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto24["m_sql"] = "BOU_HEIGHT";
$proto24["m_srcTableName"] = "BPMN_BOUND";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_REL_POSITION",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto26["m_sql"] = "BOU_REL_POSITION";
$proto26["m_srcTableName"] = "BPMN_BOUND";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_SIZE_IDENTICAL",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto28["m_sql"] = "BOU_SIZE_IDENTICAL";
$proto28["m_srcTableName"] = "BPMN_BOUND";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "BOU_CONTAINER",
	"m_strTable" => "BPMN_BOUND",
	"m_srcTableName" => "BPMN_BOUND"
));

$proto30["m_sql"] = "BOU_CONTAINER";
$proto30["m_srcTableName"] = "BPMN_BOUND";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "BPMN_BOUND";
$proto33["m_srcTableName"] = "BPMN_BOUND";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "BOU_UID";
$proto33["m_columns"][] = "PRJ_UID";
$proto33["m_columns"][] = "DIA_UID";
$proto33["m_columns"][] = "ELEMENT_UID";
$proto33["m_columns"][] = "BOU_ELEMENT";
$proto33["m_columns"][] = "BOU_ELEMENT_TYPE";
$proto33["m_columns"][] = "BOU_X";
$proto33["m_columns"][] = "BOU_Y";
$proto33["m_columns"][] = "BOU_WIDTH";
$proto33["m_columns"][] = "BOU_HEIGHT";
$proto33["m_columns"][] = "BOU_REL_POSITION";
$proto33["m_columns"][] = "BOU_SIZE_IDENTICAL";
$proto33["m_columns"][] = "BOU_CONTAINER";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "BPMN_BOUND";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "BPMN_BOUND";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_BOUND";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_BOUND = createSqlQuery_BPMN_BOUND();


	
						;

													

$tdataBPMN_BOUND[".sqlquery"] = $queryData_BPMN_BOUND;

$tableEvents["BPMN_BOUND"] = new eventsBase;
$tdataBPMN_BOUND[".hasEvents"] = false;

?>
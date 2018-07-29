<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_FLOW = array();
	$tdataBPMN_FLOW[".truncateText"] = true;
	$tdataBPMN_FLOW[".NumberOfChars"] = 20;
	$tdataBPMN_FLOW[".ShortName"] = "BPMN_FLOW";
	$tdataBPMN_FLOW[".OwnerID"] = "";
	$tdataBPMN_FLOW[".OriginalTable"] = "BPMN_FLOW";

//	field labels
$fieldLabelsBPMN_FLOW = array();
$fieldToolTipsBPMN_FLOW = array();
$pageTitlesBPMN_FLOW = array();
$placeHoldersBPMN_FLOW = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_FLOW["Japanese"] = array();
	$fieldToolTipsBPMN_FLOW["Japanese"] = array();
	$placeHoldersBPMN_FLOW["Japanese"] = array();
	$pageTitlesBPMN_FLOW["Japanese"] = array();
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_UID"] = "FLO UID";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_UID"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_UID"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_FLOW["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_FLOW["Japanese"]["DIA_UID"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["DIA_UID"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_TYPE"] = "FLOタイプ";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_TYPE"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_TYPE"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_NAME"] = "FLO名前";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_NAME"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_NAME"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN"] = "FLO要素の起源";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN_TYPE"] = "FLO要素の原点タイプ";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN_TYPE"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN_TYPE"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN_PORT"] = "FLO要素の原点ポート";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN_PORT"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_ELEMENT_ORIGIN_PORT"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST"] = "FLO要素DEST";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST_TYPE"] = "FLO要素DESTタイプ";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST_TYPE"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST_TYPE"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST_PORT"] = "FLO要素DESTポート";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST_PORT"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_ELEMENT_DEST_PORT"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_IS_INMEDIATE"] = "FLOはinmediateです";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_IS_INMEDIATE"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_IS_INMEDIATE"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_CONDITION"] = "FLO条件";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_CONDITION"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_CONDITION"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_X1"] = "FLO×1";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_X1"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_X1"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_Y1"] = "FLO Y1";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_Y1"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_Y1"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_X2"] = "FLO×2";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_X2"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_X2"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_Y2"] = "FLO Y2";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_Y2"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_Y2"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_STATE"] = "FLO状態";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_STATE"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_STATE"] = "";
	$fieldLabelsBPMN_FLOW["Japanese"]["FLO_POSITION"] = "FLO位置";
	$fieldToolTipsBPMN_FLOW["Japanese"]["FLO_POSITION"] = "";
	$placeHoldersBPMN_FLOW["Japanese"]["FLO_POSITION"] = "";
	if (count($fieldToolTipsBPMN_FLOW["Japanese"]))
		$tdataBPMN_FLOW[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_FLOW["English"] = array();
	$fieldToolTipsBPMN_FLOW["English"] = array();
	$placeHoldersBPMN_FLOW["English"] = array();
	$pageTitlesBPMN_FLOW["English"] = array();
	$fieldLabelsBPMN_FLOW["English"]["FLO_UID"] = "FLO UID";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_UID"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_UID"] = "";
	$fieldLabelsBPMN_FLOW["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_FLOW["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_FLOW["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_FLOW["English"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_FLOW["English"]["DIA_UID"] = "";
	$placeHoldersBPMN_FLOW["English"]["DIA_UID"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_TYPE"] = "FLOタイプ";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_TYPE"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_TYPE"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_NAME"] = "FLO名前";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_NAME"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_NAME"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN"] = "FLO要素の起源";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN_TYPE"] = "FLO要素の原点タイプ";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN_TYPE"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN_TYPE"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN_PORT"] = "FLO要素の原点ポート";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN_PORT"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_ELEMENT_ORIGIN_PORT"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_ELEMENT_DEST"] = "FLO要素DEST";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_ELEMENT_DEST"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_ELEMENT_DEST"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_ELEMENT_DEST_TYPE"] = "FLO要素DESTタイプ";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_ELEMENT_DEST_TYPE"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_ELEMENT_DEST_TYPE"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_ELEMENT_DEST_PORT"] = "FLO要素DESTポート";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_ELEMENT_DEST_PORT"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_ELEMENT_DEST_PORT"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_IS_INMEDIATE"] = "FLOはinmediateです";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_IS_INMEDIATE"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_IS_INMEDIATE"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_CONDITION"] = "FLO条件";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_CONDITION"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_CONDITION"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_X1"] = "FLO×1";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_X1"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_X1"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_Y1"] = "FLO Y1";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_Y1"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_Y1"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_X2"] = "FLO×2";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_X2"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_X2"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_Y2"] = "FLO Y2";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_Y2"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_Y2"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_STATE"] = "FLO状態";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_STATE"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_STATE"] = "";
	$fieldLabelsBPMN_FLOW["English"]["FLO_POSITION"] = "FLO位置";
	$fieldToolTipsBPMN_FLOW["English"]["FLO_POSITION"] = "";
	$placeHoldersBPMN_FLOW["English"]["FLO_POSITION"] = "";
	if (count($fieldToolTipsBPMN_FLOW["English"]))
		$tdataBPMN_FLOW[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_FLOW[""] = array();
	$fieldToolTipsBPMN_FLOW[""] = array();
	$placeHoldersBPMN_FLOW[""] = array();
	$pageTitlesBPMN_FLOW[""] = array();
	if (count($fieldToolTipsBPMN_FLOW[""]))
		$tdataBPMN_FLOW[".isUseToolTips"] = true;
}


	$tdataBPMN_FLOW[".NCSearch"] = true;



$tdataBPMN_FLOW[".shortTableName"] = "BPMN_FLOW";
$tdataBPMN_FLOW[".nSecOptions"] = 0;
$tdataBPMN_FLOW[".recsPerRowPrint"] = 1;
$tdataBPMN_FLOW[".mainTableOwnerID"] = "";
$tdataBPMN_FLOW[".moveNext"] = 0;
$tdataBPMN_FLOW[".entityType"] = 0;

$tdataBPMN_FLOW[".strOriginalTableName"] = "BPMN_FLOW";

	



$tdataBPMN_FLOW[".showAddInPopup"] = false;

$tdataBPMN_FLOW[".showEditInPopup"] = false;

$tdataBPMN_FLOW[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_FLOW[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_FLOW[".fieldsForRegister"] = array();
	
$tdataBPMN_FLOW[".listAjax"] = false;

	$tdataBPMN_FLOW[".audit"] = true;

	$tdataBPMN_FLOW[".locking"] = false;

$tdataBPMN_FLOW[".edit"] = true;
$tdataBPMN_FLOW[".afterEditAction"] = 1;
$tdataBPMN_FLOW[".closePopupAfterEdit"] = 1;
$tdataBPMN_FLOW[".afterEditActionDetTable"] = "";

$tdataBPMN_FLOW[".add"] = true;
$tdataBPMN_FLOW[".afterAddAction"] = 1;
$tdataBPMN_FLOW[".closePopupAfterAdd"] = 1;
$tdataBPMN_FLOW[".afterAddActionDetTable"] = "";

$tdataBPMN_FLOW[".list"] = true;

$tdataBPMN_FLOW[".inlineEdit"] = true;


$tdataBPMN_FLOW[".reorderRecordsByHeader"] = true;
$tdataBPMN_FLOW[".createSortByDropdown"] = true;
$tdataBPMN_FLOW[".strSortControlSettingsJSON"] = "";



$tdataBPMN_FLOW[".inlineAdd"] = true;
$tdataBPMN_FLOW[".view"] = true;

$tdataBPMN_FLOW[".import"] = true;

$tdataBPMN_FLOW[".exportTo"] = true;

$tdataBPMN_FLOW[".printFriendly"] = true;

$tdataBPMN_FLOW[".delete"] = true;

$tdataBPMN_FLOW[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_FLOW[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_FLOW[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_FLOW[".searchSaving"] = false;
//

$tdataBPMN_FLOW[".showSearchPanel"] = true;
		$tdataBPMN_FLOW[".flexibleSearch"] = true;

$tdataBPMN_FLOW[".isUseAjaxSuggest"] = true;

$tdataBPMN_FLOW[".rowHighlite"] = true;



																												

$tdataBPMN_FLOW[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_FLOW[".buttonsAdded"] = false;

$tdataBPMN_FLOW[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_FLOW[".isUseTimeForSearch"] = false;



$tdataBPMN_FLOW[".badgeColor"] = "E8926F";


$tdataBPMN_FLOW[".allSearchFields"] = array();
$tdataBPMN_FLOW[".filterFields"] = array();
$tdataBPMN_FLOW[".requiredSearchFields"] = array();

$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_UID";
	$tdataBPMN_FLOW[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_FLOW[".allSearchFields"][] = "DIA_UID";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_TYPE";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_NAME";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_ELEMENT_ORIGIN";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_ELEMENT_DEST";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_ELEMENT_DEST_TYPE";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_ELEMENT_DEST_PORT";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_IS_INMEDIATE";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_CONDITION";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_X1";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_Y1";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_X2";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_Y2";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_STATE";
	$tdataBPMN_FLOW[".allSearchFields"][] = "FLO_POSITION";
	

$tdataBPMN_FLOW[".googleLikeFields"] = array();
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".googleLikeFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".googleLikeFields"][] = "FLO_POSITION";


$tdataBPMN_FLOW[".advSearchFields"] = array();
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".advSearchFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".advSearchFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".tableType"] = "list";

$tdataBPMN_FLOW[".printerPageOrientation"] = 0;
$tdataBPMN_FLOW[".nPrinterPageScale"] = 100;

$tdataBPMN_FLOW[".nPrinterSplitRecords"] = 40;

$tdataBPMN_FLOW[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_FLOW[".geocodingEnabled"] = false;





$tdataBPMN_FLOW[".listGridLayout"] = 3;


$tdataBPMN_FLOW[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_FLOW[".pageSize"] = 20;

$tdataBPMN_FLOW[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_FLOW[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_FLOW[".orderindexes"] = array();

$tdataBPMN_FLOW[".sqlHead"] = "SELECT FLO_UID,  	PRJ_UID,  	DIA_UID,  	FLO_TYPE,  	FLO_NAME,  	FLO_ELEMENT_ORIGIN,  	FLO_ELEMENT_ORIGIN_TYPE,  	FLO_ELEMENT_ORIGIN_PORT,  	FLO_ELEMENT_DEST,  	FLO_ELEMENT_DEST_TYPE,  	FLO_ELEMENT_DEST_PORT,  	FLO_IS_INMEDIATE,  	FLO_CONDITION,  	FLO_X1,  	FLO_Y1,  	FLO_X2,  	FLO_Y2,  	FLO_STATE,  	FLO_POSITION";
$tdataBPMN_FLOW[".sqlFrom"] = "FROM BPMN_FLOW";
$tdataBPMN_FLOW[".sqlWhereExpr"] = "";
$tdataBPMN_FLOW[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_FLOW[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_FLOW[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_FLOW[".highlightSearchResults"] = true;

$tableKeysBPMN_FLOW = array();
$tableKeysBPMN_FLOW[] = "FLO_UID";
$tdataBPMN_FLOW[".Keys"] = $tableKeysBPMN_FLOW;

$tdataBPMN_FLOW[".listFields"] = array();
$tdataBPMN_FLOW[".listFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".listFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".listFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".listFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".listFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".listFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".listFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".listFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".listFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".listFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".listFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".listFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".listFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".listFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".listFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".listFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".listFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".listFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".listFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".hideMobileList"] = array();


$tdataBPMN_FLOW[".viewFields"] = array();
$tdataBPMN_FLOW[".viewFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".viewFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".viewFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".viewFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".addFields"] = array();
$tdataBPMN_FLOW[".addFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".addFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".addFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".addFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".addFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".addFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".addFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".addFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".addFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".addFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".addFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".addFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".addFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".addFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".addFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".addFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".addFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".addFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".addFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".masterListFields"] = array();
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".masterListFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".masterListFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".inlineAddFields"] = array();
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".inlineAddFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".inlineAddFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".editFields"] = array();
$tdataBPMN_FLOW[".editFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".editFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".editFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".editFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".editFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".editFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".editFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".editFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".editFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".editFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".editFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".editFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".editFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".editFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".editFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".editFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".editFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".editFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".editFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".inlineEditFields"] = array();
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".inlineEditFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".inlineEditFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".updateSelectedFields"] = array();
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".updateSelectedFields"][] = "FLO_POSITION";


$tdataBPMN_FLOW[".exportFields"] = array();
$tdataBPMN_FLOW[".exportFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".exportFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".exportFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".exportFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".importFields"] = array();
$tdataBPMN_FLOW[".importFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".importFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".importFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".importFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".importFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".importFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".importFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".importFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".importFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".importFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".importFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".importFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".importFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".importFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".importFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".importFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".importFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".importFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".importFields"][] = "FLO_POSITION";

$tdataBPMN_FLOW[".printFields"] = array();
$tdataBPMN_FLOW[".printFields"][] = "FLO_UID";
$tdataBPMN_FLOW[".printFields"][] = "PRJ_UID";
$tdataBPMN_FLOW[".printFields"][] = "DIA_UID";
$tdataBPMN_FLOW[".printFields"][] = "FLO_TYPE";
$tdataBPMN_FLOW[".printFields"][] = "FLO_NAME";
$tdataBPMN_FLOW[".printFields"][] = "FLO_ELEMENT_ORIGIN";
$tdataBPMN_FLOW[".printFields"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$tdataBPMN_FLOW[".printFields"][] = "FLO_ELEMENT_ORIGIN_PORT";
$tdataBPMN_FLOW[".printFields"][] = "FLO_ELEMENT_DEST";
$tdataBPMN_FLOW[".printFields"][] = "FLO_ELEMENT_DEST_TYPE";
$tdataBPMN_FLOW[".printFields"][] = "FLO_ELEMENT_DEST_PORT";
$tdataBPMN_FLOW[".printFields"][] = "FLO_IS_INMEDIATE";
$tdataBPMN_FLOW[".printFields"][] = "FLO_CONDITION";
$tdataBPMN_FLOW[".printFields"][] = "FLO_X1";
$tdataBPMN_FLOW[".printFields"][] = "FLO_Y1";
$tdataBPMN_FLOW[".printFields"][] = "FLO_X2";
$tdataBPMN_FLOW[".printFields"][] = "FLO_Y2";
$tdataBPMN_FLOW[".printFields"][] = "FLO_STATE";
$tdataBPMN_FLOW[".printFields"][] = "FLO_POSITION";

//	FLO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FLO_UID";
	$fdata["GoodName"] = "FLO_UID";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_UID");
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

		$fdata["strField"] = "FLO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_UID";

	
	
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




	$tdataBPMN_FLOW["FLO_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","PRJ_UID");
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




	$tdataBPMN_FLOW["PRJ_UID"] = $fdata;
//	DIA_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DIA_UID";
	$fdata["GoodName"] = "DIA_UID";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","DIA_UID");
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




	$tdataBPMN_FLOW["DIA_UID"] = $fdata;
//	FLO_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FLO_TYPE";
	$fdata["GoodName"] = "FLO_TYPE";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_TYPE");
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

		$fdata["strField"] = "FLO_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_TYPE";

	
	
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




	$tdataBPMN_FLOW["FLO_TYPE"] = $fdata;
//	FLO_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FLO_NAME";
	$fdata["GoodName"] = "FLO_NAME";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_NAME");
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

		$fdata["strField"] = "FLO_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_NAME";

	
	
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




	$tdataBPMN_FLOW["FLO_NAME"] = $fdata;
//	FLO_ELEMENT_ORIGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FLO_ELEMENT_ORIGIN";
	$fdata["GoodName"] = "FLO_ELEMENT_ORIGIN";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_ELEMENT_ORIGIN");
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

		$fdata["strField"] = "FLO_ELEMENT_ORIGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_ELEMENT_ORIGIN";

	
	
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




	$tdataBPMN_FLOW["FLO_ELEMENT_ORIGIN"] = $fdata;
//	FLO_ELEMENT_ORIGIN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FLO_ELEMENT_ORIGIN_TYPE";
	$fdata["GoodName"] = "FLO_ELEMENT_ORIGIN_TYPE";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_ELEMENT_ORIGIN_TYPE");
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

		$fdata["strField"] = "FLO_ELEMENT_ORIGIN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_ELEMENT_ORIGIN_TYPE";

	
	
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




	$tdataBPMN_FLOW["FLO_ELEMENT_ORIGIN_TYPE"] = $fdata;
//	FLO_ELEMENT_ORIGIN_PORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FLO_ELEMENT_ORIGIN_PORT";
	$fdata["GoodName"] = "FLO_ELEMENT_ORIGIN_PORT";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_ELEMENT_ORIGIN_PORT");
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

		$fdata["strField"] = "FLO_ELEMENT_ORIGIN_PORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_ELEMENT_ORIGIN_PORT";

	
	
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




	$tdataBPMN_FLOW["FLO_ELEMENT_ORIGIN_PORT"] = $fdata;
//	FLO_ELEMENT_DEST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FLO_ELEMENT_DEST";
	$fdata["GoodName"] = "FLO_ELEMENT_DEST";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_ELEMENT_DEST");
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

		$fdata["strField"] = "FLO_ELEMENT_DEST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_ELEMENT_DEST";

	
	
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




	$tdataBPMN_FLOW["FLO_ELEMENT_DEST"] = $fdata;
//	FLO_ELEMENT_DEST_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FLO_ELEMENT_DEST_TYPE";
	$fdata["GoodName"] = "FLO_ELEMENT_DEST_TYPE";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_ELEMENT_DEST_TYPE");
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

		$fdata["strField"] = "FLO_ELEMENT_DEST_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_ELEMENT_DEST_TYPE";

	
	
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




	$tdataBPMN_FLOW["FLO_ELEMENT_DEST_TYPE"] = $fdata;
//	FLO_ELEMENT_DEST_PORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FLO_ELEMENT_DEST_PORT";
	$fdata["GoodName"] = "FLO_ELEMENT_DEST_PORT";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_ELEMENT_DEST_PORT");
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

		$fdata["strField"] = "FLO_ELEMENT_DEST_PORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_ELEMENT_DEST_PORT";

	
	
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




	$tdataBPMN_FLOW["FLO_ELEMENT_DEST_PORT"] = $fdata;
//	FLO_IS_INMEDIATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FLO_IS_INMEDIATE";
	$fdata["GoodName"] = "FLO_IS_INMEDIATE";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_IS_INMEDIATE");
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

		$fdata["strField"] = "FLO_IS_INMEDIATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_IS_INMEDIATE";

	
	
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




	$tdataBPMN_FLOW["FLO_IS_INMEDIATE"] = $fdata;
//	FLO_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FLO_CONDITION";
	$fdata["GoodName"] = "FLO_CONDITION";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_CONDITION");
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

		$fdata["strField"] = "FLO_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_CONDITION";

	
	
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




	$tdataBPMN_FLOW["FLO_CONDITION"] = $fdata;
//	FLO_X1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FLO_X1";
	$fdata["GoodName"] = "FLO_X1";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_X1");
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

		$fdata["strField"] = "FLO_X1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_X1";

	
	
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




	$tdataBPMN_FLOW["FLO_X1"] = $fdata;
//	FLO_Y1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FLO_Y1";
	$fdata["GoodName"] = "FLO_Y1";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_Y1");
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

		$fdata["strField"] = "FLO_Y1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_Y1";

	
	
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




	$tdataBPMN_FLOW["FLO_Y1"] = $fdata;
//	FLO_X2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FLO_X2";
	$fdata["GoodName"] = "FLO_X2";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_X2");
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

		$fdata["strField"] = "FLO_X2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_X2";

	
	
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




	$tdataBPMN_FLOW["FLO_X2"] = $fdata;
//	FLO_Y2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FLO_Y2";
	$fdata["GoodName"] = "FLO_Y2";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_Y2");
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

		$fdata["strField"] = "FLO_Y2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_Y2";

	
	
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




	$tdataBPMN_FLOW["FLO_Y2"] = $fdata;
//	FLO_STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "FLO_STATE";
	$fdata["GoodName"] = "FLO_STATE";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_STATE");
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

		$fdata["strField"] = "FLO_STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_STATE";

	
	
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




	$tdataBPMN_FLOW["FLO_STATE"] = $fdata;
//	FLO_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "FLO_POSITION";
	$fdata["GoodName"] = "FLO_POSITION";
	$fdata["ownerTable"] = "BPMN_FLOW";
	$fdata["Label"] = GetFieldLabel("BPMN_FLOW","FLO_POSITION");
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

		$fdata["strField"] = "FLO_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLO_POSITION";

	
	
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




	$tdataBPMN_FLOW["FLO_POSITION"] = $fdata;


$tables_data["BPMN_FLOW"]=&$tdataBPMN_FLOW;
$field_labels["BPMN_FLOW"] = &$fieldLabelsBPMN_FLOW;
$fieldToolTips["BPMN_FLOW"] = &$fieldToolTipsBPMN_FLOW;
$placeHolders["BPMN_FLOW"] = &$placeHoldersBPMN_FLOW;
$page_titles["BPMN_FLOW"] = &$pageTitlesBPMN_FLOW;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_FLOW"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_FLOW"] = array();


	
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
					$masterTablesData["BPMN_FLOW"][0] = $masterParams;
				$masterTablesData["BPMN_FLOW"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_FLOW"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_FLOW"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_FLOW"][0]["detailKeys"][]="PRJ_UID";
		
	
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
					$masterTablesData["BPMN_FLOW"][1] = $masterParams;
				$masterTablesData["BPMN_FLOW"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_FLOW"][1]["masterKeys"][]="DIA_UID";
				$masterTablesData["BPMN_FLOW"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_FLOW"][1]["detailKeys"][]="DIA_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_FLOW()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FLO_UID,  	PRJ_UID,  	DIA_UID,  	FLO_TYPE,  	FLO_NAME,  	FLO_ELEMENT_ORIGIN,  	FLO_ELEMENT_ORIGIN_TYPE,  	FLO_ELEMENT_ORIGIN_PORT,  	FLO_ELEMENT_DEST,  	FLO_ELEMENT_DEST_TYPE,  	FLO_ELEMENT_DEST_PORT,  	FLO_IS_INMEDIATE,  	FLO_CONDITION,  	FLO_X1,  	FLO_Y1,  	FLO_X2,  	FLO_Y2,  	FLO_STATE,  	FLO_POSITION";
$proto0["m_strFrom"] = "FROM BPMN_FLOW";
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
	"m_strName" => "FLO_UID",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto6["m_sql"] = "FLO_UID";
$proto6["m_srcTableName"] = "BPMN_FLOW";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_FLOW";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DIA_UID",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto10["m_sql"] = "DIA_UID";
$proto10["m_srcTableName"] = "BPMN_FLOW";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_TYPE",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto12["m_sql"] = "FLO_TYPE";
$proto12["m_srcTableName"] = "BPMN_FLOW";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_NAME",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto14["m_sql"] = "FLO_NAME";
$proto14["m_srcTableName"] = "BPMN_FLOW";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_ELEMENT_ORIGIN",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto16["m_sql"] = "FLO_ELEMENT_ORIGIN";
$proto16["m_srcTableName"] = "BPMN_FLOW";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_ELEMENT_ORIGIN_TYPE",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto18["m_sql"] = "FLO_ELEMENT_ORIGIN_TYPE";
$proto18["m_srcTableName"] = "BPMN_FLOW";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_ELEMENT_ORIGIN_PORT",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto20["m_sql"] = "FLO_ELEMENT_ORIGIN_PORT";
$proto20["m_srcTableName"] = "BPMN_FLOW";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_ELEMENT_DEST",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto22["m_sql"] = "FLO_ELEMENT_DEST";
$proto22["m_srcTableName"] = "BPMN_FLOW";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_ELEMENT_DEST_TYPE",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto24["m_sql"] = "FLO_ELEMENT_DEST_TYPE";
$proto24["m_srcTableName"] = "BPMN_FLOW";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_ELEMENT_DEST_PORT",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto26["m_sql"] = "FLO_ELEMENT_DEST_PORT";
$proto26["m_srcTableName"] = "BPMN_FLOW";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_IS_INMEDIATE",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto28["m_sql"] = "FLO_IS_INMEDIATE";
$proto28["m_srcTableName"] = "BPMN_FLOW";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_CONDITION",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto30["m_sql"] = "FLO_CONDITION";
$proto30["m_srcTableName"] = "BPMN_FLOW";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_X1",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto32["m_sql"] = "FLO_X1";
$proto32["m_srcTableName"] = "BPMN_FLOW";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_Y1",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto34["m_sql"] = "FLO_Y1";
$proto34["m_srcTableName"] = "BPMN_FLOW";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_X2",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto36["m_sql"] = "FLO_X2";
$proto36["m_srcTableName"] = "BPMN_FLOW";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_Y2",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto38["m_sql"] = "FLO_Y2";
$proto38["m_srcTableName"] = "BPMN_FLOW";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_STATE",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto40["m_sql"] = "FLO_STATE";
$proto40["m_srcTableName"] = "BPMN_FLOW";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "FLO_POSITION",
	"m_strTable" => "BPMN_FLOW",
	"m_srcTableName" => "BPMN_FLOW"
));

$proto42["m_sql"] = "FLO_POSITION";
$proto42["m_srcTableName"] = "BPMN_FLOW";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "BPMN_FLOW";
$proto45["m_srcTableName"] = "BPMN_FLOW";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "FLO_UID";
$proto45["m_columns"][] = "PRJ_UID";
$proto45["m_columns"][] = "DIA_UID";
$proto45["m_columns"][] = "FLO_TYPE";
$proto45["m_columns"][] = "FLO_NAME";
$proto45["m_columns"][] = "FLO_ELEMENT_ORIGIN";
$proto45["m_columns"][] = "FLO_ELEMENT_ORIGIN_TYPE";
$proto45["m_columns"][] = "FLO_ELEMENT_ORIGIN_PORT";
$proto45["m_columns"][] = "FLO_ELEMENT_DEST";
$proto45["m_columns"][] = "FLO_ELEMENT_DEST_TYPE";
$proto45["m_columns"][] = "FLO_ELEMENT_DEST_PORT";
$proto45["m_columns"][] = "FLO_IS_INMEDIATE";
$proto45["m_columns"][] = "FLO_CONDITION";
$proto45["m_columns"][] = "FLO_X1";
$proto45["m_columns"][] = "FLO_Y1";
$proto45["m_columns"][] = "FLO_X2";
$proto45["m_columns"][] = "FLO_Y2";
$proto45["m_columns"][] = "FLO_STATE";
$proto45["m_columns"][] = "FLO_POSITION";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "BPMN_FLOW";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "BPMN_FLOW";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_FLOW";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_FLOW = createSqlQuery_BPMN_FLOW();


	
						;

																			

$tdataBPMN_FLOW[".sqlquery"] = $queryData_BPMN_FLOW;

$tableEvents["BPMN_FLOW"] = new eventsBase;
$tdataBPMN_FLOW[".hasEvents"] = false;

?>
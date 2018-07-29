<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_GATEWAY = array();
	$tdataBPMN_GATEWAY[".truncateText"] = true;
	$tdataBPMN_GATEWAY[".NumberOfChars"] = 20;
	$tdataBPMN_GATEWAY[".ShortName"] = "BPMN_GATEWAY";
	$tdataBPMN_GATEWAY[".OwnerID"] = "";
	$tdataBPMN_GATEWAY[".OriginalTable"] = "BPMN_GATEWAY";

//	field labels
$fieldLabelsBPMN_GATEWAY = array();
$fieldToolTipsBPMN_GATEWAY = array();
$pageTitlesBPMN_GATEWAY = array();
$placeHoldersBPMN_GATEWAY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_GATEWAY["Japanese"] = array();
	$fieldToolTipsBPMN_GATEWAY["Japanese"] = array();
	$placeHoldersBPMN_GATEWAY["Japanese"] = array();
	$pageTitlesBPMN_GATEWAY["Japanese"] = array();
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_UID"] = "GATのUID";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_UID"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_UID"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_NAME"] = "GAT名";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_NAME"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_NAME"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_TYPE"] = "GATタイプ";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_TYPE"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_TYPE"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_DIRECTION"] = "GAT方向";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_DIRECTION"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_DIRECTION"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_INSTANTIATE"] = "GATのインスタンス化";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_INSTANTIATE"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_INSTANTIATE"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_EVENT_GATEWAY_TYPE"] = "GATイベントゲートウェイタイプ";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_EVENT_GATEWAY_TYPE"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_EVENT_GATEWAY_TYPE"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_ACTIVATION_COUNT"] = "GAT活性化回数";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_ACTIVATION_COUNT"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_ACTIVATION_COUNT"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_WAITING_FOR_START"] = "開始を待っているGAT";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_WAITING_FOR_START"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_WAITING_FOR_START"] = "";
	$fieldLabelsBPMN_GATEWAY["Japanese"]["GAT_DEFAULT_FLOW"] = "GATのデフォルトの流れ";
	$fieldToolTipsBPMN_GATEWAY["Japanese"]["GAT_DEFAULT_FLOW"] = "";
	$placeHoldersBPMN_GATEWAY["Japanese"]["GAT_DEFAULT_FLOW"] = "";
	if (count($fieldToolTipsBPMN_GATEWAY["Japanese"]))
		$tdataBPMN_GATEWAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_GATEWAY["English"] = array();
	$fieldToolTipsBPMN_GATEWAY["English"] = array();
	$placeHoldersBPMN_GATEWAY["English"] = array();
	$pageTitlesBPMN_GATEWAY["English"] = array();
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_UID"] = "GATのUID";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_UID"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_UID"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_GATEWAY["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_GATEWAY["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_NAME"] = "GAT名";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_NAME"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_NAME"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_TYPE"] = "GATタイプ";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_TYPE"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_TYPE"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_DIRECTION"] = "GAT方向";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_DIRECTION"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_DIRECTION"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_INSTANTIATE"] = "GATのインスタンス化";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_INSTANTIATE"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_INSTANTIATE"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_EVENT_GATEWAY_TYPE"] = "GATイベントゲートウェイタイプ";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_EVENT_GATEWAY_TYPE"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_EVENT_GATEWAY_TYPE"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_ACTIVATION_COUNT"] = "GAT活性化回数";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_ACTIVATION_COUNT"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_ACTIVATION_COUNT"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_WAITING_FOR_START"] = "開始を待っているGAT";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_WAITING_FOR_START"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_WAITING_FOR_START"] = "";
	$fieldLabelsBPMN_GATEWAY["English"]["GAT_DEFAULT_FLOW"] = "GATのデフォルトの流れ";
	$fieldToolTipsBPMN_GATEWAY["English"]["GAT_DEFAULT_FLOW"] = "";
	$placeHoldersBPMN_GATEWAY["English"]["GAT_DEFAULT_FLOW"] = "";
	if (count($fieldToolTipsBPMN_GATEWAY["English"]))
		$tdataBPMN_GATEWAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_GATEWAY[""] = array();
	$fieldToolTipsBPMN_GATEWAY[""] = array();
	$placeHoldersBPMN_GATEWAY[""] = array();
	$pageTitlesBPMN_GATEWAY[""] = array();
	if (count($fieldToolTipsBPMN_GATEWAY[""]))
		$tdataBPMN_GATEWAY[".isUseToolTips"] = true;
}


	$tdataBPMN_GATEWAY[".NCSearch"] = true;



$tdataBPMN_GATEWAY[".shortTableName"] = "BPMN_GATEWAY";
$tdataBPMN_GATEWAY[".nSecOptions"] = 0;
$tdataBPMN_GATEWAY[".recsPerRowPrint"] = 1;
$tdataBPMN_GATEWAY[".mainTableOwnerID"] = "";
$tdataBPMN_GATEWAY[".moveNext"] = 0;
$tdataBPMN_GATEWAY[".entityType"] = 0;

$tdataBPMN_GATEWAY[".strOriginalTableName"] = "BPMN_GATEWAY";

	



$tdataBPMN_GATEWAY[".showAddInPopup"] = false;

$tdataBPMN_GATEWAY[".showEditInPopup"] = false;

$tdataBPMN_GATEWAY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_GATEWAY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_GATEWAY[".fieldsForRegister"] = array();
	
$tdataBPMN_GATEWAY[".listAjax"] = false;

	$tdataBPMN_GATEWAY[".audit"] = true;

	$tdataBPMN_GATEWAY[".locking"] = false;

$tdataBPMN_GATEWAY[".edit"] = true;
$tdataBPMN_GATEWAY[".afterEditAction"] = 1;
$tdataBPMN_GATEWAY[".closePopupAfterEdit"] = 1;
$tdataBPMN_GATEWAY[".afterEditActionDetTable"] = "";

$tdataBPMN_GATEWAY[".add"] = true;
$tdataBPMN_GATEWAY[".afterAddAction"] = 1;
$tdataBPMN_GATEWAY[".closePopupAfterAdd"] = 1;
$tdataBPMN_GATEWAY[".afterAddActionDetTable"] = "";

$tdataBPMN_GATEWAY[".list"] = true;

$tdataBPMN_GATEWAY[".inlineEdit"] = true;


$tdataBPMN_GATEWAY[".reorderRecordsByHeader"] = true;
$tdataBPMN_GATEWAY[".createSortByDropdown"] = true;
$tdataBPMN_GATEWAY[".strSortControlSettingsJSON"] = "";



$tdataBPMN_GATEWAY[".inlineAdd"] = true;
$tdataBPMN_GATEWAY[".view"] = true;

$tdataBPMN_GATEWAY[".import"] = true;

$tdataBPMN_GATEWAY[".exportTo"] = true;

$tdataBPMN_GATEWAY[".printFriendly"] = true;

$tdataBPMN_GATEWAY[".delete"] = true;

$tdataBPMN_GATEWAY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_GATEWAY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_GATEWAY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_GATEWAY[".searchSaving"] = false;
//

$tdataBPMN_GATEWAY[".showSearchPanel"] = true;
		$tdataBPMN_GATEWAY[".flexibleSearch"] = true;

$tdataBPMN_GATEWAY[".isUseAjaxSuggest"] = true;

$tdataBPMN_GATEWAY[".rowHighlite"] = true;



																												

$tdataBPMN_GATEWAY[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_GATEWAY[".buttonsAdded"] = false;

$tdataBPMN_GATEWAY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_GATEWAY[".isUseTimeForSearch"] = false;



$tdataBPMN_GATEWAY[".badgeColor"] = "6DA5C8";


$tdataBPMN_GATEWAY[".allSearchFields"] = array();
$tdataBPMN_GATEWAY[".filterFields"] = array();
$tdataBPMN_GATEWAY[".requiredSearchFields"] = array();

$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_UID";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_NAME";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_TYPE";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_DIRECTION";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_INSTANTIATE";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_EVENT_GATEWAY_TYPE";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_ACTIVATION_COUNT";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_WAITING_FOR_START";
	$tdataBPMN_GATEWAY[".allSearchFields"][] = "GAT_DEFAULT_FLOW";
	

$tdataBPMN_GATEWAY[".googleLikeFields"] = array();
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".googleLikeFields"][] = "GAT_DEFAULT_FLOW";


$tdataBPMN_GATEWAY[".advSearchFields"] = array();
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".advSearchFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".tableType"] = "list";

$tdataBPMN_GATEWAY[".printerPageOrientation"] = 0;
$tdataBPMN_GATEWAY[".nPrinterPageScale"] = 100;

$tdataBPMN_GATEWAY[".nPrinterSplitRecords"] = 40;

$tdataBPMN_GATEWAY[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_GATEWAY[".geocodingEnabled"] = false;





$tdataBPMN_GATEWAY[".listGridLayout"] = 3;


$tdataBPMN_GATEWAY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_GATEWAY[".pageSize"] = 20;

$tdataBPMN_GATEWAY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_GATEWAY[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_GATEWAY[".orderindexes"] = array();

$tdataBPMN_GATEWAY[".sqlHead"] = "SELECT GAT_UID,  	PRJ_UID,  	PRO_UID,  	GAT_NAME,  	GAT_TYPE,  	GAT_DIRECTION,  	GAT_INSTANTIATE,  	GAT_EVENT_GATEWAY_TYPE,  	GAT_ACTIVATION_COUNT,  	GAT_WAITING_FOR_START,  	GAT_DEFAULT_FLOW";
$tdataBPMN_GATEWAY[".sqlFrom"] = "FROM BPMN_GATEWAY";
$tdataBPMN_GATEWAY[".sqlWhereExpr"] = "";
$tdataBPMN_GATEWAY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_GATEWAY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_GATEWAY[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_GATEWAY[".highlightSearchResults"] = true;

$tableKeysBPMN_GATEWAY = array();
$tableKeysBPMN_GATEWAY[] = "GAT_UID";
$tdataBPMN_GATEWAY[".Keys"] = $tableKeysBPMN_GATEWAY;

$tdataBPMN_GATEWAY[".listFields"] = array();
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".listFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".listFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".listFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".hideMobileList"] = array();


$tdataBPMN_GATEWAY[".viewFields"] = array();
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".viewFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".viewFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".viewFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".addFields"] = array();
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".addFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".addFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".addFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".masterListFields"] = array();
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".masterListFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".masterListFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".inlineAddFields"] = array();
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".inlineAddFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".editFields"] = array();
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".editFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".editFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".editFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".inlineEditFields"] = array();
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".inlineEditFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".updateSelectedFields"] = array();
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".updateSelectedFields"][] = "GAT_DEFAULT_FLOW";


$tdataBPMN_GATEWAY[".exportFields"] = array();
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".exportFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".exportFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".exportFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".importFields"] = array();
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".importFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".importFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".importFields"][] = "GAT_DEFAULT_FLOW";

$tdataBPMN_GATEWAY[".printFields"] = array();
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_UID";
$tdataBPMN_GATEWAY[".printFields"][] = "PRJ_UID";
$tdataBPMN_GATEWAY[".printFields"][] = "PRO_UID";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_NAME";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_TYPE";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_DIRECTION";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_INSTANTIATE";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_EVENT_GATEWAY_TYPE";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_ACTIVATION_COUNT";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_WAITING_FOR_START";
$tdataBPMN_GATEWAY[".printFields"][] = "GAT_DEFAULT_FLOW";

//	GAT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GAT_UID";
	$fdata["GoodName"] = "GAT_UID";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_UID");
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

		$fdata["strField"] = "GAT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_UID";

	
	
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




	$tdataBPMN_GATEWAY["GAT_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","PRJ_UID");
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




	$tdataBPMN_GATEWAY["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","PRO_UID");
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




	$tdataBPMN_GATEWAY["PRO_UID"] = $fdata;
//	GAT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "GAT_NAME";
	$fdata["GoodName"] = "GAT_NAME";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_NAME");
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

		$fdata["strField"] = "GAT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_NAME";

	
	
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




	$tdataBPMN_GATEWAY["GAT_NAME"] = $fdata;
//	GAT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GAT_TYPE";
	$fdata["GoodName"] = "GAT_TYPE";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_TYPE");
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

		$fdata["strField"] = "GAT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_TYPE";

	
	
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




	$tdataBPMN_GATEWAY["GAT_TYPE"] = $fdata;
//	GAT_DIRECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "GAT_DIRECTION";
	$fdata["GoodName"] = "GAT_DIRECTION";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_DIRECTION");
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

		$fdata["strField"] = "GAT_DIRECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_DIRECTION";

	
	
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




	$tdataBPMN_GATEWAY["GAT_DIRECTION"] = $fdata;
//	GAT_INSTANTIATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GAT_INSTANTIATE";
	$fdata["GoodName"] = "GAT_INSTANTIATE";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_INSTANTIATE");
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

		$fdata["strField"] = "GAT_INSTANTIATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_INSTANTIATE";

	
	
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




	$tdataBPMN_GATEWAY["GAT_INSTANTIATE"] = $fdata;
//	GAT_EVENT_GATEWAY_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "GAT_EVENT_GATEWAY_TYPE";
	$fdata["GoodName"] = "GAT_EVENT_GATEWAY_TYPE";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_EVENT_GATEWAY_TYPE");
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

		$fdata["strField"] = "GAT_EVENT_GATEWAY_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_EVENT_GATEWAY_TYPE";

	
	
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




	$tdataBPMN_GATEWAY["GAT_EVENT_GATEWAY_TYPE"] = $fdata;
//	GAT_ACTIVATION_COUNT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GAT_ACTIVATION_COUNT";
	$fdata["GoodName"] = "GAT_ACTIVATION_COUNT";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_ACTIVATION_COUNT");
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

		$fdata["strField"] = "GAT_ACTIVATION_COUNT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_ACTIVATION_COUNT";

	
	
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




	$tdataBPMN_GATEWAY["GAT_ACTIVATION_COUNT"] = $fdata;
//	GAT_WAITING_FOR_START
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "GAT_WAITING_FOR_START";
	$fdata["GoodName"] = "GAT_WAITING_FOR_START";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_WAITING_FOR_START");
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

		$fdata["strField"] = "GAT_WAITING_FOR_START";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_WAITING_FOR_START";

	
	
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




	$tdataBPMN_GATEWAY["GAT_WAITING_FOR_START"] = $fdata;
//	GAT_DEFAULT_FLOW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "GAT_DEFAULT_FLOW";
	$fdata["GoodName"] = "GAT_DEFAULT_FLOW";
	$fdata["ownerTable"] = "BPMN_GATEWAY";
	$fdata["Label"] = GetFieldLabel("BPMN_GATEWAY","GAT_DEFAULT_FLOW");
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

		$fdata["strField"] = "GAT_DEFAULT_FLOW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_DEFAULT_FLOW";

	
	
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




	$tdataBPMN_GATEWAY["GAT_DEFAULT_FLOW"] = $fdata;


$tables_data["BPMN_GATEWAY"]=&$tdataBPMN_GATEWAY;
$field_labels["BPMN_GATEWAY"] = &$fieldLabelsBPMN_GATEWAY;
$fieldToolTips["BPMN_GATEWAY"] = &$fieldToolTipsBPMN_GATEWAY;
$placeHolders["BPMN_GATEWAY"] = &$placeHoldersBPMN_GATEWAY;
$page_titles["BPMN_GATEWAY"] = &$pageTitlesBPMN_GATEWAY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_GATEWAY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_GATEWAY"] = array();


	
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
					$masterTablesData["BPMN_GATEWAY"][0] = $masterParams;
				$masterTablesData["BPMN_GATEWAY"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_GATEWAY"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["BPMN_GATEWAY"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_GATEWAY"][0]["detailKeys"][]="PRO_UID";
		
	
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
					$masterTablesData["BPMN_GATEWAY"][1] = $masterParams;
				$masterTablesData["BPMN_GATEWAY"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_GATEWAY"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_GATEWAY"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_GATEWAY"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_GATEWAY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GAT_UID,  	PRJ_UID,  	PRO_UID,  	GAT_NAME,  	GAT_TYPE,  	GAT_DIRECTION,  	GAT_INSTANTIATE,  	GAT_EVENT_GATEWAY_TYPE,  	GAT_ACTIVATION_COUNT,  	GAT_WAITING_FOR_START,  	GAT_DEFAULT_FLOW";
$proto0["m_strFrom"] = "FROM BPMN_GATEWAY";
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
	"m_strName" => "GAT_UID",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto6["m_sql"] = "GAT_UID";
$proto6["m_srcTableName"] = "BPMN_GATEWAY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_GATEWAY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_GATEWAY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_NAME",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto12["m_sql"] = "GAT_NAME";
$proto12["m_srcTableName"] = "BPMN_GATEWAY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_TYPE",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto14["m_sql"] = "GAT_TYPE";
$proto14["m_srcTableName"] = "BPMN_GATEWAY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_DIRECTION",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto16["m_sql"] = "GAT_DIRECTION";
$proto16["m_srcTableName"] = "BPMN_GATEWAY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_INSTANTIATE",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto18["m_sql"] = "GAT_INSTANTIATE";
$proto18["m_srcTableName"] = "BPMN_GATEWAY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_EVENT_GATEWAY_TYPE",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto20["m_sql"] = "GAT_EVENT_GATEWAY_TYPE";
$proto20["m_srcTableName"] = "BPMN_GATEWAY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_ACTIVATION_COUNT",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto22["m_sql"] = "GAT_ACTIVATION_COUNT";
$proto22["m_srcTableName"] = "BPMN_GATEWAY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_WAITING_FOR_START",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto24["m_sql"] = "GAT_WAITING_FOR_START";
$proto24["m_srcTableName"] = "BPMN_GATEWAY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_DEFAULT_FLOW",
	"m_strTable" => "BPMN_GATEWAY",
	"m_srcTableName" => "BPMN_GATEWAY"
));

$proto26["m_sql"] = "GAT_DEFAULT_FLOW";
$proto26["m_srcTableName"] = "BPMN_GATEWAY";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "BPMN_GATEWAY";
$proto29["m_srcTableName"] = "BPMN_GATEWAY";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "GAT_UID";
$proto29["m_columns"][] = "PRJ_UID";
$proto29["m_columns"][] = "PRO_UID";
$proto29["m_columns"][] = "GAT_NAME";
$proto29["m_columns"][] = "GAT_TYPE";
$proto29["m_columns"][] = "GAT_DIRECTION";
$proto29["m_columns"][] = "GAT_INSTANTIATE";
$proto29["m_columns"][] = "GAT_EVENT_GATEWAY_TYPE";
$proto29["m_columns"][] = "GAT_ACTIVATION_COUNT";
$proto29["m_columns"][] = "GAT_WAITING_FOR_START";
$proto29["m_columns"][] = "GAT_DEFAULT_FLOW";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "BPMN_GATEWAY";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "BPMN_GATEWAY";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_GATEWAY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_GATEWAY = createSqlQuery_BPMN_GATEWAY();


	
						;

											

$tdataBPMN_GATEWAY[".sqlquery"] = $queryData_BPMN_GATEWAY;

$tableEvents["BPMN_GATEWAY"] = new eventsBase;
$tdataBPMN_GATEWAY[".hasEvents"] = false;

?>
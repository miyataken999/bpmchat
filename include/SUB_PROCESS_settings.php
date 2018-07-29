<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSUB_PROCESS = array();
	$tdataSUB_PROCESS[".truncateText"] = true;
	$tdataSUB_PROCESS[".NumberOfChars"] = 20;
	$tdataSUB_PROCESS[".ShortName"] = "SUB_PROCESS";
	$tdataSUB_PROCESS[".OwnerID"] = "";
	$tdataSUB_PROCESS[".OriginalTable"] = "SUB_PROCESS";

//	field labels
$fieldLabelsSUB_PROCESS = array();
$fieldToolTipsSUB_PROCESS = array();
$pageTitlesSUB_PROCESS = array();
$placeHoldersSUB_PROCESS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSUB_PROCESS["Japanese"] = array();
	$fieldToolTipsSUB_PROCESS["Japanese"] = array();
	$placeHoldersSUB_PROCESS["Japanese"] = array();
	$pageTitlesSUB_PROCESS["Japanese"] = array();
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_UID"] = "SPのUID";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_UID"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_UID"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSUB_PROCESS["Japanese"]["PRO_UID"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["PRO_UID"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsSUB_PROCESS["Japanese"]["TAS_UID"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["TAS_UID"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["PRO_PARENT"] = "プロの親";
	$fieldToolTipsSUB_PROCESS["Japanese"]["PRO_PARENT"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["PRO_PARENT"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["TAS_PARENT"] = "TAS親";
	$fieldToolTipsSUB_PROCESS["Japanese"]["TAS_PARENT"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["TAS_PARENT"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_TYPE"] = "SPタイプ";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_TYPE"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_TYPE"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS"] = "SPの同期";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS_TYPE"] = "SP同期型";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS_TYPE"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS_TYPE"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS_WAIT"] = "SP同期待ち時間";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS_WAIT"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_SYNCHRONOUS_WAIT"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_VARIABLES_OUT"] = "SP変数アウト";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_VARIABLES_OUT"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_VARIABLES_OUT"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_VARIABLES_IN"] = "SP変数で";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_VARIABLES_IN"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_VARIABLES_IN"] = "";
	$fieldLabelsSUB_PROCESS["Japanese"]["SP_GRID_IN"] = "中のSPグリッド";
	$fieldToolTipsSUB_PROCESS["Japanese"]["SP_GRID_IN"] = "";
	$placeHoldersSUB_PROCESS["Japanese"]["SP_GRID_IN"] = "";
	if (count($fieldToolTipsSUB_PROCESS["Japanese"]))
		$tdataSUB_PROCESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSUB_PROCESS["English"] = array();
	$fieldToolTipsSUB_PROCESS["English"] = array();
	$placeHoldersSUB_PROCESS["English"] = array();
	$pageTitlesSUB_PROCESS["English"] = array();
	$fieldLabelsSUB_PROCESS["English"]["SP_UID"] = "SPのUID";
	$fieldToolTipsSUB_PROCESS["English"]["SP_UID"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_UID"] = "";
	$fieldLabelsSUB_PROCESS["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSUB_PROCESS["English"]["PRO_UID"] = "";
	$placeHoldersSUB_PROCESS["English"]["PRO_UID"] = "";
	$fieldLabelsSUB_PROCESS["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsSUB_PROCESS["English"]["TAS_UID"] = "";
	$placeHoldersSUB_PROCESS["English"]["TAS_UID"] = "";
	$fieldLabelsSUB_PROCESS["English"]["PRO_PARENT"] = "プロの親";
	$fieldToolTipsSUB_PROCESS["English"]["PRO_PARENT"] = "";
	$placeHoldersSUB_PROCESS["English"]["PRO_PARENT"] = "";
	$fieldLabelsSUB_PROCESS["English"]["TAS_PARENT"] = "TAS親";
	$fieldToolTipsSUB_PROCESS["English"]["TAS_PARENT"] = "";
	$placeHoldersSUB_PROCESS["English"]["TAS_PARENT"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_TYPE"] = "SPタイプ";
	$fieldToolTipsSUB_PROCESS["English"]["SP_TYPE"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_TYPE"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_SYNCHRONOUS"] = "SPの同期";
	$fieldToolTipsSUB_PROCESS["English"]["SP_SYNCHRONOUS"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_SYNCHRONOUS"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_SYNCHRONOUS_TYPE"] = "SP同期型";
	$fieldToolTipsSUB_PROCESS["English"]["SP_SYNCHRONOUS_TYPE"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_SYNCHRONOUS_TYPE"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_SYNCHRONOUS_WAIT"] = "SP同期待ち時間";
	$fieldToolTipsSUB_PROCESS["English"]["SP_SYNCHRONOUS_WAIT"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_SYNCHRONOUS_WAIT"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_VARIABLES_OUT"] = "SP変数アウト";
	$fieldToolTipsSUB_PROCESS["English"]["SP_VARIABLES_OUT"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_VARIABLES_OUT"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_VARIABLES_IN"] = "SP変数で";
	$fieldToolTipsSUB_PROCESS["English"]["SP_VARIABLES_IN"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_VARIABLES_IN"] = "";
	$fieldLabelsSUB_PROCESS["English"]["SP_GRID_IN"] = "中のSPグリッド";
	$fieldToolTipsSUB_PROCESS["English"]["SP_GRID_IN"] = "";
	$placeHoldersSUB_PROCESS["English"]["SP_GRID_IN"] = "";
	if (count($fieldToolTipsSUB_PROCESS["English"]))
		$tdataSUB_PROCESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSUB_PROCESS[""] = array();
	$fieldToolTipsSUB_PROCESS[""] = array();
	$placeHoldersSUB_PROCESS[""] = array();
	$pageTitlesSUB_PROCESS[""] = array();
	if (count($fieldToolTipsSUB_PROCESS[""]))
		$tdataSUB_PROCESS[".isUseToolTips"] = true;
}


	$tdataSUB_PROCESS[".NCSearch"] = true;



$tdataSUB_PROCESS[".shortTableName"] = "SUB_PROCESS";
$tdataSUB_PROCESS[".nSecOptions"] = 0;
$tdataSUB_PROCESS[".recsPerRowPrint"] = 1;
$tdataSUB_PROCESS[".mainTableOwnerID"] = "";
$tdataSUB_PROCESS[".moveNext"] = 0;
$tdataSUB_PROCESS[".entityType"] = 0;

$tdataSUB_PROCESS[".strOriginalTableName"] = "SUB_PROCESS";

	



$tdataSUB_PROCESS[".showAddInPopup"] = false;

$tdataSUB_PROCESS[".showEditInPopup"] = false;

$tdataSUB_PROCESS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSUB_PROCESS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSUB_PROCESS[".fieldsForRegister"] = array();
	
$tdataSUB_PROCESS[".listAjax"] = false;

	$tdataSUB_PROCESS[".audit"] = true;

	$tdataSUB_PROCESS[".locking"] = false;

$tdataSUB_PROCESS[".edit"] = true;
$tdataSUB_PROCESS[".afterEditAction"] = 1;
$tdataSUB_PROCESS[".closePopupAfterEdit"] = 1;
$tdataSUB_PROCESS[".afterEditActionDetTable"] = "";

$tdataSUB_PROCESS[".add"] = true;
$tdataSUB_PROCESS[".afterAddAction"] = 1;
$tdataSUB_PROCESS[".closePopupAfterAdd"] = 1;
$tdataSUB_PROCESS[".afterAddActionDetTable"] = "";

$tdataSUB_PROCESS[".list"] = true;

$tdataSUB_PROCESS[".inlineEdit"] = true;


$tdataSUB_PROCESS[".reorderRecordsByHeader"] = true;
$tdataSUB_PROCESS[".createSortByDropdown"] = true;
$tdataSUB_PROCESS[".strSortControlSettingsJSON"] = "";



$tdataSUB_PROCESS[".inlineAdd"] = true;
$tdataSUB_PROCESS[".view"] = true;

$tdataSUB_PROCESS[".import"] = true;

$tdataSUB_PROCESS[".exportTo"] = true;

$tdataSUB_PROCESS[".printFriendly"] = true;

$tdataSUB_PROCESS[".delete"] = true;

$tdataSUB_PROCESS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSUB_PROCESS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSUB_PROCESS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSUB_PROCESS[".searchSaving"] = false;
//

$tdataSUB_PROCESS[".showSearchPanel"] = true;
		$tdataSUB_PROCESS[".flexibleSearch"] = true;

$tdataSUB_PROCESS[".isUseAjaxSuggest"] = true;

$tdataSUB_PROCESS[".rowHighlite"] = true;



																

$tdataSUB_PROCESS[".ajaxCodeSnippetAdded"] = false;

$tdataSUB_PROCESS[".buttonsAdded"] = false;

$tdataSUB_PROCESS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSUB_PROCESS[".isUseTimeForSearch"] = false;



$tdataSUB_PROCESS[".badgeColor"] = "6b8e23";


$tdataSUB_PROCESS[".allSearchFields"] = array();
$tdataSUB_PROCESS[".filterFields"] = array();
$tdataSUB_PROCESS[".requiredSearchFields"] = array();

$tdataSUB_PROCESS[".allSearchFields"][] = "SP_UID";
	$tdataSUB_PROCESS[".allSearchFields"][] = "PRO_UID";
	$tdataSUB_PROCESS[".allSearchFields"][] = "TAS_UID";
	$tdataSUB_PROCESS[".allSearchFields"][] = "PRO_PARENT";
	$tdataSUB_PROCESS[".allSearchFields"][] = "TAS_PARENT";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_TYPE";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_SYNCHRONOUS";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_SYNCHRONOUS_TYPE";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_SYNCHRONOUS_WAIT";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_VARIABLES_OUT";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_VARIABLES_IN";
	$tdataSUB_PROCESS[".allSearchFields"][] = "SP_GRID_IN";
	

$tdataSUB_PROCESS[".googleLikeFields"] = array();
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_UID";
$tdataSUB_PROCESS[".googleLikeFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".googleLikeFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".googleLikeFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".googleLikeFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".googleLikeFields"][] = "SP_GRID_IN";


$tdataSUB_PROCESS[".advSearchFields"] = array();
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_UID";
$tdataSUB_PROCESS[".advSearchFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".advSearchFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".advSearchFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".advSearchFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".advSearchFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".tableType"] = "list";

$tdataSUB_PROCESS[".printerPageOrientation"] = 0;
$tdataSUB_PROCESS[".nPrinterPageScale"] = 100;

$tdataSUB_PROCESS[".nPrinterSplitRecords"] = 40;

$tdataSUB_PROCESS[".nPrinterPDFSplitRecords"] = 40;



$tdataSUB_PROCESS[".geocodingEnabled"] = false;





$tdataSUB_PROCESS[".listGridLayout"] = 3;


$tdataSUB_PROCESS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSUB_PROCESS[".pageSize"] = 20;

$tdataSUB_PROCESS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSUB_PROCESS[".strOrderBy"] = $tstrOrderBy;

$tdataSUB_PROCESS[".orderindexes"] = array();

$tdataSUB_PROCESS[".sqlHead"] = "SELECT SP_UID,  	PRO_UID,  	TAS_UID,  	PRO_PARENT,  	TAS_PARENT,  	SP_TYPE,  	SP_SYNCHRONOUS,  	SP_SYNCHRONOUS_TYPE,  	SP_SYNCHRONOUS_WAIT,  	SP_VARIABLES_OUT,  	SP_VARIABLES_IN,  	SP_GRID_IN";
$tdataSUB_PROCESS[".sqlFrom"] = "FROM SUB_PROCESS";
$tdataSUB_PROCESS[".sqlWhereExpr"] = "";
$tdataSUB_PROCESS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSUB_PROCESS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSUB_PROCESS[".arrGroupsPerPage"] = $arrGPP;

$tdataSUB_PROCESS[".highlightSearchResults"] = true;

$tableKeysSUB_PROCESS = array();
$tableKeysSUB_PROCESS[] = "SP_UID";
$tdataSUB_PROCESS[".Keys"] = $tableKeysSUB_PROCESS;

$tdataSUB_PROCESS[".listFields"] = array();
$tdataSUB_PROCESS[".listFields"][] = "SP_UID";
$tdataSUB_PROCESS[".listFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".listFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".listFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".listFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".listFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".listFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".listFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".listFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".listFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".listFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".listFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".hideMobileList"] = array();


$tdataSUB_PROCESS[".viewFields"] = array();
$tdataSUB_PROCESS[".viewFields"][] = "SP_UID";
$tdataSUB_PROCESS[".viewFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".viewFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".viewFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".viewFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".viewFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".viewFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".viewFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".viewFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".viewFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".viewFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".viewFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".addFields"] = array();
$tdataSUB_PROCESS[".addFields"][] = "SP_UID";
$tdataSUB_PROCESS[".addFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".addFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".addFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".addFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".addFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".addFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".addFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".addFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".addFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".addFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".addFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".masterListFields"] = array();
$tdataSUB_PROCESS[".masterListFields"][] = "SP_UID";
$tdataSUB_PROCESS[".masterListFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".masterListFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".masterListFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".masterListFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".masterListFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".inlineAddFields"] = array();
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_UID";
$tdataSUB_PROCESS[".inlineAddFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".inlineAddFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".inlineAddFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".inlineAddFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".inlineAddFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".editFields"] = array();
$tdataSUB_PROCESS[".editFields"][] = "SP_UID";
$tdataSUB_PROCESS[".editFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".editFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".editFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".editFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".editFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".editFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".editFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".editFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".editFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".editFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".editFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".inlineEditFields"] = array();
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_UID";
$tdataSUB_PROCESS[".inlineEditFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".inlineEditFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".inlineEditFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".inlineEditFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".inlineEditFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".updateSelectedFields"] = array();
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_UID";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".updateSelectedFields"][] = "SP_GRID_IN";


$tdataSUB_PROCESS[".exportFields"] = array();
$tdataSUB_PROCESS[".exportFields"][] = "SP_UID";
$tdataSUB_PROCESS[".exportFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".exportFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".exportFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".exportFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".exportFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".exportFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".exportFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".exportFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".exportFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".exportFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".exportFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".importFields"] = array();
$tdataSUB_PROCESS[".importFields"][] = "SP_UID";
$tdataSUB_PROCESS[".importFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".importFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".importFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".importFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".importFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".importFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".importFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".importFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".importFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".importFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".importFields"][] = "SP_GRID_IN";

$tdataSUB_PROCESS[".printFields"] = array();
$tdataSUB_PROCESS[".printFields"][] = "SP_UID";
$tdataSUB_PROCESS[".printFields"][] = "PRO_UID";
$tdataSUB_PROCESS[".printFields"][] = "TAS_UID";
$tdataSUB_PROCESS[".printFields"][] = "PRO_PARENT";
$tdataSUB_PROCESS[".printFields"][] = "TAS_PARENT";
$tdataSUB_PROCESS[".printFields"][] = "SP_TYPE";
$tdataSUB_PROCESS[".printFields"][] = "SP_SYNCHRONOUS";
$tdataSUB_PROCESS[".printFields"][] = "SP_SYNCHRONOUS_TYPE";
$tdataSUB_PROCESS[".printFields"][] = "SP_SYNCHRONOUS_WAIT";
$tdataSUB_PROCESS[".printFields"][] = "SP_VARIABLES_OUT";
$tdataSUB_PROCESS[".printFields"][] = "SP_VARIABLES_IN";
$tdataSUB_PROCESS[".printFields"][] = "SP_GRID_IN";

//	SP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SP_UID";
	$fdata["GoodName"] = "SP_UID";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_UID");
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

		$fdata["strField"] = "SP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_UID";

	
	
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




	$tdataSUB_PROCESS["SP_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","PRO_UID");
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




	$tdataSUB_PROCESS["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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




	$tdataSUB_PROCESS["TAS_UID"] = $fdata;
//	PRO_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_PARENT";
	$fdata["GoodName"] = "PRO_PARENT";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","PRO_PARENT");
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

		$fdata["strField"] = "PRO_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_PARENT";

	
	
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




	$tdataSUB_PROCESS["PRO_PARENT"] = $fdata;
//	TAS_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TAS_PARENT";
	$fdata["GoodName"] = "TAS_PARENT";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","TAS_PARENT");
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

		$fdata["strField"] = "TAS_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_PARENT";

	
	
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




	$tdataSUB_PROCESS["TAS_PARENT"] = $fdata;
//	SP_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SP_TYPE";
	$fdata["GoodName"] = "SP_TYPE";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_TYPE");
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

		$fdata["strField"] = "SP_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_TYPE";

	
	
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




	$tdataSUB_PROCESS["SP_TYPE"] = $fdata;
//	SP_SYNCHRONOUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SP_SYNCHRONOUS";
	$fdata["GoodName"] = "SP_SYNCHRONOUS";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_SYNCHRONOUS");
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

		$fdata["strField"] = "SP_SYNCHRONOUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_SYNCHRONOUS";

	
	
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




	$tdataSUB_PROCESS["SP_SYNCHRONOUS"] = $fdata;
//	SP_SYNCHRONOUS_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SP_SYNCHRONOUS_TYPE";
	$fdata["GoodName"] = "SP_SYNCHRONOUS_TYPE";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_SYNCHRONOUS_TYPE");
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

		$fdata["strField"] = "SP_SYNCHRONOUS_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_SYNCHRONOUS_TYPE";

	
	
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




	$tdataSUB_PROCESS["SP_SYNCHRONOUS_TYPE"] = $fdata;
//	SP_SYNCHRONOUS_WAIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SP_SYNCHRONOUS_WAIT";
	$fdata["GoodName"] = "SP_SYNCHRONOUS_WAIT";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_SYNCHRONOUS_WAIT");
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

		$fdata["strField"] = "SP_SYNCHRONOUS_WAIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_SYNCHRONOUS_WAIT";

	
	
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




	$tdataSUB_PROCESS["SP_SYNCHRONOUS_WAIT"] = $fdata;
//	SP_VARIABLES_OUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SP_VARIABLES_OUT";
	$fdata["GoodName"] = "SP_VARIABLES_OUT";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_VARIABLES_OUT");
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

		$fdata["strField"] = "SP_VARIABLES_OUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_VARIABLES_OUT";

	
	
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




	$tdataSUB_PROCESS["SP_VARIABLES_OUT"] = $fdata;
//	SP_VARIABLES_IN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SP_VARIABLES_IN";
	$fdata["GoodName"] = "SP_VARIABLES_IN";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_VARIABLES_IN");
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

		$fdata["strField"] = "SP_VARIABLES_IN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_VARIABLES_IN";

	
	
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




	$tdataSUB_PROCESS["SP_VARIABLES_IN"] = $fdata;
//	SP_GRID_IN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SP_GRID_IN";
	$fdata["GoodName"] = "SP_GRID_IN";
	$fdata["ownerTable"] = "SUB_PROCESS";
	$fdata["Label"] = GetFieldLabel("SUB_PROCESS","SP_GRID_IN");
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

		$fdata["strField"] = "SP_GRID_IN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SP_GRID_IN";

	
	
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




	$tdataSUB_PROCESS["SP_GRID_IN"] = $fdata;


$tables_data["SUB_PROCESS"]=&$tdataSUB_PROCESS;
$field_labels["SUB_PROCESS"] = &$fieldLabelsSUB_PROCESS;
$fieldToolTips["SUB_PROCESS"] = &$fieldToolTipsSUB_PROCESS;
$placeHolders["SUB_PROCESS"] = &$placeHoldersSUB_PROCESS;
$page_titles["SUB_PROCESS"] = &$pageTitlesSUB_PROCESS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SUB_PROCESS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SUB_PROCESS"] = array();


	
				$strOriginalDetailsTable="PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["SUB_PROCESS"][0] = $masterParams;
				$masterTablesData["SUB_PROCESS"][0]["masterKeys"] = array();
	$masterTablesData["SUB_PROCESS"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["SUB_PROCESS"][0]["detailKeys"] = array();
	$masterTablesData["SUB_PROCESS"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SUB_PROCESS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SP_UID,  	PRO_UID,  	TAS_UID,  	PRO_PARENT,  	TAS_PARENT,  	SP_TYPE,  	SP_SYNCHRONOUS,  	SP_SYNCHRONOUS_TYPE,  	SP_SYNCHRONOUS_WAIT,  	SP_VARIABLES_OUT,  	SP_VARIABLES_IN,  	SP_GRID_IN";
$proto0["m_strFrom"] = "FROM SUB_PROCESS";
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
	"m_strName" => "SP_UID",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto6["m_sql"] = "SP_UID";
$proto6["m_srcTableName"] = "SUB_PROCESS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "SUB_PROCESS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "SUB_PROCESS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_PARENT",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto12["m_sql"] = "PRO_PARENT";
$proto12["m_srcTableName"] = "SUB_PROCESS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_PARENT",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto14["m_sql"] = "TAS_PARENT";
$proto14["m_srcTableName"] = "SUB_PROCESS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_TYPE",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto16["m_sql"] = "SP_TYPE";
$proto16["m_srcTableName"] = "SUB_PROCESS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_SYNCHRONOUS",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto18["m_sql"] = "SP_SYNCHRONOUS";
$proto18["m_srcTableName"] = "SUB_PROCESS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_SYNCHRONOUS_TYPE",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto20["m_sql"] = "SP_SYNCHRONOUS_TYPE";
$proto20["m_srcTableName"] = "SUB_PROCESS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_SYNCHRONOUS_WAIT",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto22["m_sql"] = "SP_SYNCHRONOUS_WAIT";
$proto22["m_srcTableName"] = "SUB_PROCESS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_VARIABLES_OUT",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto24["m_sql"] = "SP_VARIABLES_OUT";
$proto24["m_srcTableName"] = "SUB_PROCESS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_VARIABLES_IN",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto26["m_sql"] = "SP_VARIABLES_IN";
$proto26["m_srcTableName"] = "SUB_PROCESS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SP_GRID_IN",
	"m_strTable" => "SUB_PROCESS",
	"m_srcTableName" => "SUB_PROCESS"
));

$proto28["m_sql"] = "SP_GRID_IN";
$proto28["m_srcTableName"] = "SUB_PROCESS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "SUB_PROCESS";
$proto31["m_srcTableName"] = "SUB_PROCESS";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "SP_UID";
$proto31["m_columns"][] = "PRO_UID";
$proto31["m_columns"][] = "TAS_UID";
$proto31["m_columns"][] = "PRO_PARENT";
$proto31["m_columns"][] = "TAS_PARENT";
$proto31["m_columns"][] = "SP_TYPE";
$proto31["m_columns"][] = "SP_SYNCHRONOUS";
$proto31["m_columns"][] = "SP_SYNCHRONOUS_TYPE";
$proto31["m_columns"][] = "SP_SYNCHRONOUS_WAIT";
$proto31["m_columns"][] = "SP_VARIABLES_OUT";
$proto31["m_columns"][] = "SP_VARIABLES_IN";
$proto31["m_columns"][] = "SP_GRID_IN";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "SUB_PROCESS";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "SUB_PROCESS";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SUB_PROCESS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SUB_PROCESS = createSqlQuery_SUB_PROCESS();


	
						;

												

$tdataSUB_PROCESS[".sqlquery"] = $queryData_SUB_PROCESS;

$tableEvents["SUB_PROCESS"] = new eventsBase;
$tdataSUB_PROCESS[".hasEvents"] = false;

?>
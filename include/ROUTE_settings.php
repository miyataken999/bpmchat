<?php
require_once(getabspath("classes/cipherer.php"));




$tdataROUTE = array();
	$tdataROUTE[".truncateText"] = true;
	$tdataROUTE[".NumberOfChars"] = 20;
	$tdataROUTE[".ShortName"] = "ROUTE";
	$tdataROUTE[".OwnerID"] = "";
	$tdataROUTE[".OriginalTable"] = "ROUTE";

//	field labels
$fieldLabelsROUTE = array();
$fieldToolTipsROUTE = array();
$pageTitlesROUTE = array();
$placeHoldersROUTE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsROUTE["Japanese"] = array();
	$fieldToolTipsROUTE["Japanese"] = array();
	$placeHoldersROUTE["Japanese"] = array();
	$pageTitlesROUTE["Japanese"] = array();
	$fieldLabelsROUTE["Japanese"]["ROU_UID"] = "ROUのUID";
	$fieldToolTipsROUTE["Japanese"]["ROU_UID"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_UID"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_PARENT"] = "ROU親";
	$fieldToolTipsROUTE["Japanese"]["ROU_PARENT"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_PARENT"] = "";
	$fieldLabelsROUTE["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsROUTE["Japanese"]["PRO_UID"] = "";
	$placeHoldersROUTE["Japanese"]["PRO_UID"] = "";
	$fieldLabelsROUTE["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsROUTE["Japanese"]["TAS_UID"] = "";
	$placeHoldersROUTE["Japanese"]["TAS_UID"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_NEXT_TASK"] = "ROU次のタスク";
	$fieldToolTipsROUTE["Japanese"]["ROU_NEXT_TASK"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_NEXT_TASK"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_CASE"] = "ROUケース";
	$fieldToolTipsROUTE["Japanese"]["ROU_CASE"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_CASE"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_TYPE"] = "ROUタイプ";
	$fieldToolTipsROUTE["Japanese"]["ROU_TYPE"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_TYPE"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_DEFAULT"] = "ROUのデフォルト";
	$fieldToolTipsROUTE["Japanese"]["ROU_DEFAULT"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_DEFAULT"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_CONDITION"] = "ROU条件";
	$fieldToolTipsROUTE["Japanese"]["ROU_CONDITION"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_CONDITION"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_TO_LAST_USER"] = "最後のユーザーへROU";
	$fieldToolTipsROUTE["Japanese"]["ROU_TO_LAST_USER"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_TO_LAST_USER"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_OPTIONAL"] = "オプションROU";
	$fieldToolTipsROUTE["Japanese"]["ROU_OPTIONAL"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_OPTIONAL"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_SEND_EMAIL"] = "ROUメールを送ります";
	$fieldToolTipsROUTE["Japanese"]["ROU_SEND_EMAIL"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_SEND_EMAIL"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_SOURCEANCHOR"] = "ROUのsourceanchor";
	$fieldToolTipsROUTE["Japanese"]["ROU_SOURCEANCHOR"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_SOURCEANCHOR"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_TARGETANCHOR"] = "ROUのtargetanchor";
	$fieldToolTipsROUTE["Japanese"]["ROU_TARGETANCHOR"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_TARGETANCHOR"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_TO_PORT"] = "ポートへのROU";
	$fieldToolTipsROUTE["Japanese"]["ROU_TO_PORT"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_TO_PORT"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_FROM_PORT"] = "ポートからROU";
	$fieldToolTipsROUTE["Japanese"]["ROU_FROM_PORT"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_FROM_PORT"] = "";
	$fieldLabelsROUTE["Japanese"]["ROU_EVN_UID"] = "ROUのEVNのUID";
	$fieldToolTipsROUTE["Japanese"]["ROU_EVN_UID"] = "";
	$placeHoldersROUTE["Japanese"]["ROU_EVN_UID"] = "";
	$fieldLabelsROUTE["Japanese"]["GAT_UID"] = "GATのUID";
	$fieldToolTipsROUTE["Japanese"]["GAT_UID"] = "";
	$placeHoldersROUTE["Japanese"]["GAT_UID"] = "";
	if (count($fieldToolTipsROUTE["Japanese"]))
		$tdataROUTE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsROUTE["English"] = array();
	$fieldToolTipsROUTE["English"] = array();
	$placeHoldersROUTE["English"] = array();
	$pageTitlesROUTE["English"] = array();
	$fieldLabelsROUTE["English"]["ROU_UID"] = "ROUのUID";
	$fieldToolTipsROUTE["English"]["ROU_UID"] = "";
	$placeHoldersROUTE["English"]["ROU_UID"] = "";
	$fieldLabelsROUTE["English"]["ROU_PARENT"] = "ROU親";
	$fieldToolTipsROUTE["English"]["ROU_PARENT"] = "";
	$placeHoldersROUTE["English"]["ROU_PARENT"] = "";
	$fieldLabelsROUTE["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsROUTE["English"]["PRO_UID"] = "";
	$placeHoldersROUTE["English"]["PRO_UID"] = "";
	$fieldLabelsROUTE["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsROUTE["English"]["TAS_UID"] = "";
	$placeHoldersROUTE["English"]["TAS_UID"] = "";
	$fieldLabelsROUTE["English"]["ROU_NEXT_TASK"] = "ROU次のタスク";
	$fieldToolTipsROUTE["English"]["ROU_NEXT_TASK"] = "";
	$placeHoldersROUTE["English"]["ROU_NEXT_TASK"] = "";
	$fieldLabelsROUTE["English"]["ROU_CASE"] = "ROUケース";
	$fieldToolTipsROUTE["English"]["ROU_CASE"] = "";
	$placeHoldersROUTE["English"]["ROU_CASE"] = "";
	$fieldLabelsROUTE["English"]["ROU_TYPE"] = "ROUタイプ";
	$fieldToolTipsROUTE["English"]["ROU_TYPE"] = "";
	$placeHoldersROUTE["English"]["ROU_TYPE"] = "";
	$fieldLabelsROUTE["English"]["ROU_DEFAULT"] = "ROUのデフォルト";
	$fieldToolTipsROUTE["English"]["ROU_DEFAULT"] = "";
	$placeHoldersROUTE["English"]["ROU_DEFAULT"] = "";
	$fieldLabelsROUTE["English"]["ROU_CONDITION"] = "ROU条件";
	$fieldToolTipsROUTE["English"]["ROU_CONDITION"] = "";
	$placeHoldersROUTE["English"]["ROU_CONDITION"] = "";
	$fieldLabelsROUTE["English"]["ROU_TO_LAST_USER"] = "最後のユーザーへROU";
	$fieldToolTipsROUTE["English"]["ROU_TO_LAST_USER"] = "";
	$placeHoldersROUTE["English"]["ROU_TO_LAST_USER"] = "";
	$fieldLabelsROUTE["English"]["ROU_OPTIONAL"] = "オプションROU";
	$fieldToolTipsROUTE["English"]["ROU_OPTIONAL"] = "";
	$placeHoldersROUTE["English"]["ROU_OPTIONAL"] = "";
	$fieldLabelsROUTE["English"]["ROU_SEND_EMAIL"] = "ROUメールを送ります";
	$fieldToolTipsROUTE["English"]["ROU_SEND_EMAIL"] = "";
	$placeHoldersROUTE["English"]["ROU_SEND_EMAIL"] = "";
	$fieldLabelsROUTE["English"]["ROU_SOURCEANCHOR"] = "ROUのsourceanchor";
	$fieldToolTipsROUTE["English"]["ROU_SOURCEANCHOR"] = "";
	$placeHoldersROUTE["English"]["ROU_SOURCEANCHOR"] = "";
	$fieldLabelsROUTE["English"]["ROU_TARGETANCHOR"] = "ROUのtargetanchor";
	$fieldToolTipsROUTE["English"]["ROU_TARGETANCHOR"] = "";
	$placeHoldersROUTE["English"]["ROU_TARGETANCHOR"] = "";
	$fieldLabelsROUTE["English"]["ROU_TO_PORT"] = "ポートへのROU";
	$fieldToolTipsROUTE["English"]["ROU_TO_PORT"] = "";
	$placeHoldersROUTE["English"]["ROU_TO_PORT"] = "";
	$fieldLabelsROUTE["English"]["ROU_FROM_PORT"] = "ポートからROU";
	$fieldToolTipsROUTE["English"]["ROU_FROM_PORT"] = "";
	$placeHoldersROUTE["English"]["ROU_FROM_PORT"] = "";
	$fieldLabelsROUTE["English"]["ROU_EVN_UID"] = "ROUのEVNのUID";
	$fieldToolTipsROUTE["English"]["ROU_EVN_UID"] = "";
	$placeHoldersROUTE["English"]["ROU_EVN_UID"] = "";
	$fieldLabelsROUTE["English"]["GAT_UID"] = "GATのUID";
	$fieldToolTipsROUTE["English"]["GAT_UID"] = "";
	$placeHoldersROUTE["English"]["GAT_UID"] = "";
	if (count($fieldToolTipsROUTE["English"]))
		$tdataROUTE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsROUTE[""] = array();
	$fieldToolTipsROUTE[""] = array();
	$placeHoldersROUTE[""] = array();
	$pageTitlesROUTE[""] = array();
	if (count($fieldToolTipsROUTE[""]))
		$tdataROUTE[".isUseToolTips"] = true;
}


	$tdataROUTE[".NCSearch"] = true;



$tdataROUTE[".shortTableName"] = "ROUTE";
$tdataROUTE[".nSecOptions"] = 0;
$tdataROUTE[".recsPerRowPrint"] = 1;
$tdataROUTE[".mainTableOwnerID"] = "";
$tdataROUTE[".moveNext"] = 0;
$tdataROUTE[".entityType"] = 0;

$tdataROUTE[".strOriginalTableName"] = "ROUTE";

	



$tdataROUTE[".showAddInPopup"] = false;

$tdataROUTE[".showEditInPopup"] = false;

$tdataROUTE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataROUTE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataROUTE[".fieldsForRegister"] = array();
	
$tdataROUTE[".listAjax"] = false;

	$tdataROUTE[".audit"] = true;

	$tdataROUTE[".locking"] = false;

$tdataROUTE[".edit"] = true;
$tdataROUTE[".afterEditAction"] = 1;
$tdataROUTE[".closePopupAfterEdit"] = 1;
$tdataROUTE[".afterEditActionDetTable"] = "";

$tdataROUTE[".add"] = true;
$tdataROUTE[".afterAddAction"] = 1;
$tdataROUTE[".closePopupAfterAdd"] = 1;
$tdataROUTE[".afterAddActionDetTable"] = "";

$tdataROUTE[".list"] = true;

$tdataROUTE[".inlineEdit"] = true;


$tdataROUTE[".reorderRecordsByHeader"] = true;
$tdataROUTE[".createSortByDropdown"] = true;
$tdataROUTE[".strSortControlSettingsJSON"] = "";



$tdataROUTE[".inlineAdd"] = true;
$tdataROUTE[".view"] = true;

$tdataROUTE[".import"] = true;

$tdataROUTE[".exportTo"] = true;

$tdataROUTE[".printFriendly"] = true;

$tdataROUTE[".delete"] = true;

$tdataROUTE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataROUTE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataROUTE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataROUTE[".searchSaving"] = false;
//

$tdataROUTE[".showSearchPanel"] = true;
		$tdataROUTE[".flexibleSearch"] = true;

$tdataROUTE[".isUseAjaxSuggest"] = true;

$tdataROUTE[".rowHighlite"] = true;



																

$tdataROUTE[".ajaxCodeSnippetAdded"] = false;

$tdataROUTE[".buttonsAdded"] = false;

$tdataROUTE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataROUTE[".isUseTimeForSearch"] = false;



$tdataROUTE[".badgeColor"] = "EDCA00";


$tdataROUTE[".allSearchFields"] = array();
$tdataROUTE[".filterFields"] = array();
$tdataROUTE[".requiredSearchFields"] = array();

$tdataROUTE[".allSearchFields"][] = "ROU_UID";
	$tdataROUTE[".allSearchFields"][] = "ROU_PARENT";
	$tdataROUTE[".allSearchFields"][] = "PRO_UID";
	$tdataROUTE[".allSearchFields"][] = "TAS_UID";
	$tdataROUTE[".allSearchFields"][] = "ROU_NEXT_TASK";
	$tdataROUTE[".allSearchFields"][] = "ROU_CASE";
	$tdataROUTE[".allSearchFields"][] = "ROU_TYPE";
	$tdataROUTE[".allSearchFields"][] = "ROU_DEFAULT";
	$tdataROUTE[".allSearchFields"][] = "ROU_CONDITION";
	$tdataROUTE[".allSearchFields"][] = "ROU_TO_LAST_USER";
	$tdataROUTE[".allSearchFields"][] = "ROU_OPTIONAL";
	$tdataROUTE[".allSearchFields"][] = "ROU_SEND_EMAIL";
	$tdataROUTE[".allSearchFields"][] = "ROU_SOURCEANCHOR";
	$tdataROUTE[".allSearchFields"][] = "ROU_TARGETANCHOR";
	$tdataROUTE[".allSearchFields"][] = "ROU_TO_PORT";
	$tdataROUTE[".allSearchFields"][] = "ROU_FROM_PORT";
	$tdataROUTE[".allSearchFields"][] = "ROU_EVN_UID";
	$tdataROUTE[".allSearchFields"][] = "GAT_UID";
	

$tdataROUTE[".googleLikeFields"] = array();
$tdataROUTE[".googleLikeFields"][] = "ROU_UID";
$tdataROUTE[".googleLikeFields"][] = "ROU_PARENT";
$tdataROUTE[".googleLikeFields"][] = "PRO_UID";
$tdataROUTE[".googleLikeFields"][] = "TAS_UID";
$tdataROUTE[".googleLikeFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".googleLikeFields"][] = "ROU_CASE";
$tdataROUTE[".googleLikeFields"][] = "ROU_TYPE";
$tdataROUTE[".googleLikeFields"][] = "ROU_DEFAULT";
$tdataROUTE[".googleLikeFields"][] = "ROU_CONDITION";
$tdataROUTE[".googleLikeFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".googleLikeFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".googleLikeFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".googleLikeFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".googleLikeFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".googleLikeFields"][] = "ROU_TO_PORT";
$tdataROUTE[".googleLikeFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".googleLikeFields"][] = "ROU_EVN_UID";
$tdataROUTE[".googleLikeFields"][] = "GAT_UID";


$tdataROUTE[".advSearchFields"] = array();
$tdataROUTE[".advSearchFields"][] = "ROU_UID";
$tdataROUTE[".advSearchFields"][] = "ROU_PARENT";
$tdataROUTE[".advSearchFields"][] = "PRO_UID";
$tdataROUTE[".advSearchFields"][] = "TAS_UID";
$tdataROUTE[".advSearchFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".advSearchFields"][] = "ROU_CASE";
$tdataROUTE[".advSearchFields"][] = "ROU_TYPE";
$tdataROUTE[".advSearchFields"][] = "ROU_DEFAULT";
$tdataROUTE[".advSearchFields"][] = "ROU_CONDITION";
$tdataROUTE[".advSearchFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".advSearchFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".advSearchFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".advSearchFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".advSearchFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".advSearchFields"][] = "ROU_TO_PORT";
$tdataROUTE[".advSearchFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".advSearchFields"][] = "ROU_EVN_UID";
$tdataROUTE[".advSearchFields"][] = "GAT_UID";

$tdataROUTE[".tableType"] = "list";

$tdataROUTE[".printerPageOrientation"] = 0;
$tdataROUTE[".nPrinterPageScale"] = 100;

$tdataROUTE[".nPrinterSplitRecords"] = 40;

$tdataROUTE[".nPrinterPDFSplitRecords"] = 40;



$tdataROUTE[".geocodingEnabled"] = false;





$tdataROUTE[".listGridLayout"] = 3;


$tdataROUTE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataROUTE[".pageSize"] = 20;

$tdataROUTE[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY PRO_UID, TAS_UID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataROUTE[".strOrderBy"] = $tstrOrderBy;

$tdataROUTE[".orderindexes"] = array();
$tdataROUTE[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "PRO_UID");
$tdataROUTE[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "TAS_UID");

$tdataROUTE[".sqlHead"] = "SELECT ROU_UID,  ROU_PARENT,  PRO_UID,  TAS_UID,  ROU_NEXT_TASK,  ROU_CASE,  ROU_TYPE,  ROU_DEFAULT,  ROU_CONDITION,  ROU_TO_LAST_USER,  ROU_OPTIONAL,  ROU_SEND_EMAIL,  ROU_SOURCEANCHOR,  ROU_TARGETANCHOR,  ROU_TO_PORT,  ROU_FROM_PORT,  ROU_EVN_UID,  GAT_UID";
$tdataROUTE[".sqlFrom"] = "FROM ROUTE";
$tdataROUTE[".sqlWhereExpr"] = "";
$tdataROUTE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataROUTE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataROUTE[".arrGroupsPerPage"] = $arrGPP;

$tdataROUTE[".highlightSearchResults"] = true;

$tableKeysROUTE = array();
$tableKeysROUTE[] = "ROU_UID";
$tdataROUTE[".Keys"] = $tableKeysROUTE;

$tdataROUTE[".listFields"] = array();
$tdataROUTE[".listFields"][] = "ROU_UID";
$tdataROUTE[".listFields"][] = "ROU_PARENT";
$tdataROUTE[".listFields"][] = "PRO_UID";
$tdataROUTE[".listFields"][] = "TAS_UID";
$tdataROUTE[".listFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".listFields"][] = "ROU_CASE";
$tdataROUTE[".listFields"][] = "ROU_TYPE";
$tdataROUTE[".listFields"][] = "ROU_DEFAULT";
$tdataROUTE[".listFields"][] = "ROU_CONDITION";
$tdataROUTE[".listFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".listFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".listFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".listFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".listFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".listFields"][] = "ROU_TO_PORT";
$tdataROUTE[".listFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".listFields"][] = "ROU_EVN_UID";
$tdataROUTE[".listFields"][] = "GAT_UID";

$tdataROUTE[".hideMobileList"] = array();


$tdataROUTE[".viewFields"] = array();
$tdataROUTE[".viewFields"][] = "ROU_UID";
$tdataROUTE[".viewFields"][] = "ROU_PARENT";
$tdataROUTE[".viewFields"][] = "PRO_UID";
$tdataROUTE[".viewFields"][] = "TAS_UID";
$tdataROUTE[".viewFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".viewFields"][] = "ROU_CASE";
$tdataROUTE[".viewFields"][] = "ROU_TYPE";
$tdataROUTE[".viewFields"][] = "ROU_DEFAULT";
$tdataROUTE[".viewFields"][] = "ROU_CONDITION";
$tdataROUTE[".viewFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".viewFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".viewFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".viewFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".viewFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".viewFields"][] = "ROU_TO_PORT";
$tdataROUTE[".viewFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".viewFields"][] = "ROU_EVN_UID";
$tdataROUTE[".viewFields"][] = "GAT_UID";

$tdataROUTE[".addFields"] = array();
$tdataROUTE[".addFields"][] = "ROU_UID";
$tdataROUTE[".addFields"][] = "ROU_PARENT";
$tdataROUTE[".addFields"][] = "PRO_UID";
$tdataROUTE[".addFields"][] = "TAS_UID";
$tdataROUTE[".addFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".addFields"][] = "ROU_CASE";
$tdataROUTE[".addFields"][] = "ROU_TYPE";
$tdataROUTE[".addFields"][] = "ROU_DEFAULT";
$tdataROUTE[".addFields"][] = "ROU_CONDITION";
$tdataROUTE[".addFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".addFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".addFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".addFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".addFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".addFields"][] = "ROU_TO_PORT";
$tdataROUTE[".addFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".addFields"][] = "ROU_EVN_UID";
$tdataROUTE[".addFields"][] = "GAT_UID";

$tdataROUTE[".masterListFields"] = array();
$tdataROUTE[".masterListFields"][] = "ROU_UID";
$tdataROUTE[".masterListFields"][] = "ROU_PARENT";
$tdataROUTE[".masterListFields"][] = "PRO_UID";
$tdataROUTE[".masterListFields"][] = "TAS_UID";
$tdataROUTE[".masterListFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".masterListFields"][] = "ROU_CASE";
$tdataROUTE[".masterListFields"][] = "ROU_TYPE";
$tdataROUTE[".masterListFields"][] = "ROU_DEFAULT";
$tdataROUTE[".masterListFields"][] = "ROU_CONDITION";
$tdataROUTE[".masterListFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".masterListFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".masterListFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".masterListFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".masterListFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".masterListFields"][] = "ROU_TO_PORT";
$tdataROUTE[".masterListFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".masterListFields"][] = "ROU_EVN_UID";
$tdataROUTE[".masterListFields"][] = "GAT_UID";

$tdataROUTE[".inlineAddFields"] = array();
$tdataROUTE[".inlineAddFields"][] = "ROU_UID";
$tdataROUTE[".inlineAddFields"][] = "ROU_PARENT";
$tdataROUTE[".inlineAddFields"][] = "PRO_UID";
$tdataROUTE[".inlineAddFields"][] = "TAS_UID";
$tdataROUTE[".inlineAddFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".inlineAddFields"][] = "ROU_CASE";
$tdataROUTE[".inlineAddFields"][] = "ROU_TYPE";
$tdataROUTE[".inlineAddFields"][] = "ROU_DEFAULT";
$tdataROUTE[".inlineAddFields"][] = "ROU_CONDITION";
$tdataROUTE[".inlineAddFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".inlineAddFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".inlineAddFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".inlineAddFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".inlineAddFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".inlineAddFields"][] = "ROU_TO_PORT";
$tdataROUTE[".inlineAddFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".inlineAddFields"][] = "ROU_EVN_UID";
$tdataROUTE[".inlineAddFields"][] = "GAT_UID";

$tdataROUTE[".editFields"] = array();
$tdataROUTE[".editFields"][] = "ROU_UID";
$tdataROUTE[".editFields"][] = "ROU_PARENT";
$tdataROUTE[".editFields"][] = "PRO_UID";
$tdataROUTE[".editFields"][] = "TAS_UID";
$tdataROUTE[".editFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".editFields"][] = "ROU_CASE";
$tdataROUTE[".editFields"][] = "ROU_TYPE";
$tdataROUTE[".editFields"][] = "ROU_DEFAULT";
$tdataROUTE[".editFields"][] = "ROU_CONDITION";
$tdataROUTE[".editFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".editFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".editFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".editFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".editFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".editFields"][] = "ROU_TO_PORT";
$tdataROUTE[".editFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".editFields"][] = "ROU_EVN_UID";
$tdataROUTE[".editFields"][] = "GAT_UID";

$tdataROUTE[".inlineEditFields"] = array();
$tdataROUTE[".inlineEditFields"][] = "ROU_UID";
$tdataROUTE[".inlineEditFields"][] = "ROU_PARENT";
$tdataROUTE[".inlineEditFields"][] = "PRO_UID";
$tdataROUTE[".inlineEditFields"][] = "TAS_UID";
$tdataROUTE[".inlineEditFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".inlineEditFields"][] = "ROU_CASE";
$tdataROUTE[".inlineEditFields"][] = "ROU_TYPE";
$tdataROUTE[".inlineEditFields"][] = "ROU_DEFAULT";
$tdataROUTE[".inlineEditFields"][] = "ROU_CONDITION";
$tdataROUTE[".inlineEditFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".inlineEditFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".inlineEditFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".inlineEditFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".inlineEditFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".inlineEditFields"][] = "ROU_TO_PORT";
$tdataROUTE[".inlineEditFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".inlineEditFields"][] = "ROU_EVN_UID";
$tdataROUTE[".inlineEditFields"][] = "GAT_UID";

$tdataROUTE[".updateSelectedFields"] = array();
$tdataROUTE[".updateSelectedFields"][] = "ROU_UID";
$tdataROUTE[".updateSelectedFields"][] = "ROU_PARENT";
$tdataROUTE[".updateSelectedFields"][] = "PRO_UID";
$tdataROUTE[".updateSelectedFields"][] = "TAS_UID";
$tdataROUTE[".updateSelectedFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".updateSelectedFields"][] = "ROU_CASE";
$tdataROUTE[".updateSelectedFields"][] = "ROU_TYPE";
$tdataROUTE[".updateSelectedFields"][] = "ROU_DEFAULT";
$tdataROUTE[".updateSelectedFields"][] = "ROU_CONDITION";
$tdataROUTE[".updateSelectedFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".updateSelectedFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".updateSelectedFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".updateSelectedFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".updateSelectedFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".updateSelectedFields"][] = "ROU_TO_PORT";
$tdataROUTE[".updateSelectedFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".updateSelectedFields"][] = "ROU_EVN_UID";
$tdataROUTE[".updateSelectedFields"][] = "GAT_UID";


$tdataROUTE[".exportFields"] = array();
$tdataROUTE[".exportFields"][] = "ROU_UID";
$tdataROUTE[".exportFields"][] = "ROU_PARENT";
$tdataROUTE[".exportFields"][] = "PRO_UID";
$tdataROUTE[".exportFields"][] = "TAS_UID";
$tdataROUTE[".exportFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".exportFields"][] = "ROU_CASE";
$tdataROUTE[".exportFields"][] = "ROU_TYPE";
$tdataROUTE[".exportFields"][] = "ROU_DEFAULT";
$tdataROUTE[".exportFields"][] = "ROU_CONDITION";
$tdataROUTE[".exportFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".exportFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".exportFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".exportFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".exportFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".exportFields"][] = "ROU_TO_PORT";
$tdataROUTE[".exportFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".exportFields"][] = "ROU_EVN_UID";
$tdataROUTE[".exportFields"][] = "GAT_UID";

$tdataROUTE[".importFields"] = array();
$tdataROUTE[".importFields"][] = "ROU_UID";
$tdataROUTE[".importFields"][] = "ROU_PARENT";
$tdataROUTE[".importFields"][] = "PRO_UID";
$tdataROUTE[".importFields"][] = "TAS_UID";
$tdataROUTE[".importFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".importFields"][] = "ROU_CASE";
$tdataROUTE[".importFields"][] = "ROU_TYPE";
$tdataROUTE[".importFields"][] = "ROU_DEFAULT";
$tdataROUTE[".importFields"][] = "ROU_CONDITION";
$tdataROUTE[".importFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".importFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".importFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".importFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".importFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".importFields"][] = "ROU_TO_PORT";
$tdataROUTE[".importFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".importFields"][] = "ROU_EVN_UID";
$tdataROUTE[".importFields"][] = "GAT_UID";

$tdataROUTE[".printFields"] = array();
$tdataROUTE[".printFields"][] = "ROU_UID";
$tdataROUTE[".printFields"][] = "ROU_PARENT";
$tdataROUTE[".printFields"][] = "PRO_UID";
$tdataROUTE[".printFields"][] = "TAS_UID";
$tdataROUTE[".printFields"][] = "ROU_NEXT_TASK";
$tdataROUTE[".printFields"][] = "ROU_CASE";
$tdataROUTE[".printFields"][] = "ROU_TYPE";
$tdataROUTE[".printFields"][] = "ROU_DEFAULT";
$tdataROUTE[".printFields"][] = "ROU_CONDITION";
$tdataROUTE[".printFields"][] = "ROU_TO_LAST_USER";
$tdataROUTE[".printFields"][] = "ROU_OPTIONAL";
$tdataROUTE[".printFields"][] = "ROU_SEND_EMAIL";
$tdataROUTE[".printFields"][] = "ROU_SOURCEANCHOR";
$tdataROUTE[".printFields"][] = "ROU_TARGETANCHOR";
$tdataROUTE[".printFields"][] = "ROU_TO_PORT";
$tdataROUTE[".printFields"][] = "ROU_FROM_PORT";
$tdataROUTE[".printFields"][] = "ROU_EVN_UID";
$tdataROUTE[".printFields"][] = "GAT_UID";

//	ROU_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ROU_UID";
	$fdata["GoodName"] = "ROU_UID";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_UID");
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

		$fdata["strField"] = "ROU_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_UID";

	
	
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




	$tdataROUTE["ROU_UID"] = $fdata;
//	ROU_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ROU_PARENT";
	$fdata["GoodName"] = "ROU_PARENT";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_PARENT");
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

		$fdata["strField"] = "ROU_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_PARENT";

	
	
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




	$tdataROUTE["ROU_PARENT"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","PRO_UID");
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
	$edata["LookupTable"] = "CONTENT411";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CON_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CON_VALUE";

	
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




	$tdataROUTE["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","TAS_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "CONTENT2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CON_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CON_VALUE";

	
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




	$tdataROUTE["TAS_UID"] = $fdata;
//	ROU_NEXT_TASK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ROU_NEXT_TASK";
	$fdata["GoodName"] = "ROU_NEXT_TASK";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_NEXT_TASK");
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

		$fdata["strField"] = "ROU_NEXT_TASK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_NEXT_TASK";

	
	
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
	$edata["LookupTable"] = "CONTENT3";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CON_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CON_VALUE";

	
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




	$tdataROUTE["ROU_NEXT_TASK"] = $fdata;
//	ROU_CASE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ROU_CASE";
	$fdata["GoodName"] = "ROU_CASE";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_CASE");
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

		$fdata["strField"] = "ROU_CASE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_CASE";

	
	
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




	$tdataROUTE["ROU_CASE"] = $fdata;
//	ROU_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ROU_TYPE";
	$fdata["GoodName"] = "ROU_TYPE";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_TYPE");
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

		$fdata["strField"] = "ROU_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdataROUTE["ROU_TYPE"] = $fdata;
//	ROU_DEFAULT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ROU_DEFAULT";
	$fdata["GoodName"] = "ROU_DEFAULT";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_DEFAULT");
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

		$fdata["strField"] = "ROU_DEFAULT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_DEFAULT";

	
	
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




	$tdataROUTE["ROU_DEFAULT"] = $fdata;
//	ROU_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ROU_CONDITION";
	$fdata["GoodName"] = "ROU_CONDITION";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_CONDITION");
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

		$fdata["strField"] = "ROU_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_CONDITION";

	
	
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




	$tdataROUTE["ROU_CONDITION"] = $fdata;
//	ROU_TO_LAST_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ROU_TO_LAST_USER";
	$fdata["GoodName"] = "ROU_TO_LAST_USER";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_TO_LAST_USER");
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

		$fdata["strField"] = "ROU_TO_LAST_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_TO_LAST_USER";

	
	
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




	$tdataROUTE["ROU_TO_LAST_USER"] = $fdata;
//	ROU_OPTIONAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ROU_OPTIONAL";
	$fdata["GoodName"] = "ROU_OPTIONAL";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_OPTIONAL");
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

		$fdata["strField"] = "ROU_OPTIONAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_OPTIONAL";

	
	
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




	$tdataROUTE["ROU_OPTIONAL"] = $fdata;
//	ROU_SEND_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ROU_SEND_EMAIL";
	$fdata["GoodName"] = "ROU_SEND_EMAIL";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_SEND_EMAIL");
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

		$fdata["strField"] = "ROU_SEND_EMAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_SEND_EMAIL";

	
	
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




	$tdataROUTE["ROU_SEND_EMAIL"] = $fdata;
//	ROU_SOURCEANCHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ROU_SOURCEANCHOR";
	$fdata["GoodName"] = "ROU_SOURCEANCHOR";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_SOURCEANCHOR");
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

		$fdata["strField"] = "ROU_SOURCEANCHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_SOURCEANCHOR";

	
	
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




	$tdataROUTE["ROU_SOURCEANCHOR"] = $fdata;
//	ROU_TARGETANCHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ROU_TARGETANCHOR";
	$fdata["GoodName"] = "ROU_TARGETANCHOR";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_TARGETANCHOR");
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

		$fdata["strField"] = "ROU_TARGETANCHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_TARGETANCHOR";

	
	
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




	$tdataROUTE["ROU_TARGETANCHOR"] = $fdata;
//	ROU_TO_PORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ROU_TO_PORT";
	$fdata["GoodName"] = "ROU_TO_PORT";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_TO_PORT");
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

		$fdata["strField"] = "ROU_TO_PORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_TO_PORT";

	
	
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




	$tdataROUTE["ROU_TO_PORT"] = $fdata;
//	ROU_FROM_PORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ROU_FROM_PORT";
	$fdata["GoodName"] = "ROU_FROM_PORT";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_FROM_PORT");
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

		$fdata["strField"] = "ROU_FROM_PORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_FROM_PORT";

	
	
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




	$tdataROUTE["ROU_FROM_PORT"] = $fdata;
//	ROU_EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ROU_EVN_UID";
	$fdata["GoodName"] = "ROU_EVN_UID";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","ROU_EVN_UID");
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

		$fdata["strField"] = "ROU_EVN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROU_EVN_UID";

	
	
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




	$tdataROUTE["ROU_EVN_UID"] = $fdata;
//	GAT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "GAT_UID";
	$fdata["GoodName"] = "GAT_UID";
	$fdata["ownerTable"] = "ROUTE";
	$fdata["Label"] = GetFieldLabel("ROUTE","GAT_UID");
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




	$tdataROUTE["GAT_UID"] = $fdata;


$tables_data["ROUTE"]=&$tdataROUTE;
$field_labels["ROUTE"] = &$fieldLabelsROUTE;
$fieldToolTips["ROUTE"] = &$fieldToolTipsROUTE;
$placeHolders["ROUTE"] = &$placeHoldersROUTE;
$page_titles["ROUTE"] = &$pageTitlesROUTE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ROUTE"] = array();
//	CONTENT
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="CONTENT";
		$detailsParam["dOriginalTable"] = "CONTENT";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "CONTENT";
	$detailsParam["dCaptionTable"] = GetTableCaption("CONTENT");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["ROUTE"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ROUTE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ROUTE"][$dIndex]["masterKeys"][]="TAS_UID";

				$detailsTablesData["ROUTE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ROUTE"][$dIndex]["detailKeys"][]="CON_ID";

// tables which are master tables for current table (detail)
$masterTablesData["ROUTE"] = array();


	
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
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ROUTE"][0] = $masterParams;
				$masterTablesData["ROUTE"][0]["masterKeys"] = array();
	$masterTablesData["ROUTE"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["ROUTE"][0]["detailKeys"] = array();
	$masterTablesData["ROUTE"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ROUTE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ROU_UID,  ROU_PARENT,  PRO_UID,  TAS_UID,  ROU_NEXT_TASK,  ROU_CASE,  ROU_TYPE,  ROU_DEFAULT,  ROU_CONDITION,  ROU_TO_LAST_USER,  ROU_OPTIONAL,  ROU_SEND_EMAIL,  ROU_SOURCEANCHOR,  ROU_TARGETANCHOR,  ROU_TO_PORT,  ROU_FROM_PORT,  ROU_EVN_UID,  GAT_UID";
$proto0["m_strFrom"] = "FROM ROUTE";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY PRO_UID, TAS_UID";
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
	"m_strName" => "ROU_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto6["m_sql"] = "ROU_UID";
$proto6["m_srcTableName"] = "ROUTE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_PARENT",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto8["m_sql"] = "ROU_PARENT";
$proto8["m_srcTableName"] = "ROUTE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "ROUTE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto12["m_sql"] = "TAS_UID";
$proto12["m_srcTableName"] = "ROUTE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_NEXT_TASK",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto14["m_sql"] = "ROU_NEXT_TASK";
$proto14["m_srcTableName"] = "ROUTE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_CASE",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto16["m_sql"] = "ROU_CASE";
$proto16["m_srcTableName"] = "ROUTE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_TYPE",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto18["m_sql"] = "ROU_TYPE";
$proto18["m_srcTableName"] = "ROUTE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_DEFAULT",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto20["m_sql"] = "ROU_DEFAULT";
$proto20["m_srcTableName"] = "ROUTE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_CONDITION",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto22["m_sql"] = "ROU_CONDITION";
$proto22["m_srcTableName"] = "ROUTE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_TO_LAST_USER",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto24["m_sql"] = "ROU_TO_LAST_USER";
$proto24["m_srcTableName"] = "ROUTE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_OPTIONAL",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto26["m_sql"] = "ROU_OPTIONAL";
$proto26["m_srcTableName"] = "ROUTE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_SEND_EMAIL",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto28["m_sql"] = "ROU_SEND_EMAIL";
$proto28["m_srcTableName"] = "ROUTE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_SOURCEANCHOR",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto30["m_sql"] = "ROU_SOURCEANCHOR";
$proto30["m_srcTableName"] = "ROUTE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_TARGETANCHOR",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto32["m_sql"] = "ROU_TARGETANCHOR";
$proto32["m_srcTableName"] = "ROUTE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_TO_PORT",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto34["m_sql"] = "ROU_TO_PORT";
$proto34["m_srcTableName"] = "ROUTE";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_FROM_PORT",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto36["m_sql"] = "ROU_FROM_PORT";
$proto36["m_srcTableName"] = "ROUTE";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ROU_EVN_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto38["m_sql"] = "ROU_EVN_UID";
$proto38["m_srcTableName"] = "ROUTE";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto40["m_sql"] = "GAT_UID";
$proto40["m_srcTableName"] = "ROUTE";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "ROUTE";
$proto43["m_srcTableName"] = "ROUTE";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ROU_UID";
$proto43["m_columns"][] = "ROU_PARENT";
$proto43["m_columns"][] = "PRO_UID";
$proto43["m_columns"][] = "TAS_UID";
$proto43["m_columns"][] = "ROU_NEXT_TASK";
$proto43["m_columns"][] = "ROU_CASE";
$proto43["m_columns"][] = "ROU_TYPE";
$proto43["m_columns"][] = "ROU_DEFAULT";
$proto43["m_columns"][] = "ROU_CONDITION";
$proto43["m_columns"][] = "ROU_TO_LAST_USER";
$proto43["m_columns"][] = "ROU_OPTIONAL";
$proto43["m_columns"][] = "ROU_SEND_EMAIL";
$proto43["m_columns"][] = "ROU_SOURCEANCHOR";
$proto43["m_columns"][] = "ROU_TARGETANCHOR";
$proto43["m_columns"][] = "ROU_TO_PORT";
$proto43["m_columns"][] = "ROU_FROM_PORT";
$proto43["m_columns"][] = "ROU_EVN_UID";
$proto43["m_columns"][] = "GAT_UID";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "ROUTE";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "ROUTE";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 1;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "ROUTE",
	"m_srcTableName" => "ROUTE"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 1;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ROUTE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ROUTE = createSqlQuery_ROUTE();


	
						;

																		

$tdataROUTE[".sqlquery"] = $queryData_ROUTE;

$tableEvents["ROUTE"] = new eventsBase;
$tdataROUTE[".hasEvents"] = false;

?>
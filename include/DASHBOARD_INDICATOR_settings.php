<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDASHBOARD_INDICATOR = array();
	$tdataDASHBOARD_INDICATOR[".truncateText"] = true;
	$tdataDASHBOARD_INDICATOR[".NumberOfChars"] = 20;
	$tdataDASHBOARD_INDICATOR[".ShortName"] = "DASHBOARD_INDICATOR";
	$tdataDASHBOARD_INDICATOR[".OwnerID"] = "";
	$tdataDASHBOARD_INDICATOR[".OriginalTable"] = "DASHBOARD_INDICATOR";

//	field labels
$fieldLabelsDASHBOARD_INDICATOR = array();
$fieldToolTipsDASHBOARD_INDICATOR = array();
$pageTitlesDASHBOARD_INDICATOR = array();
$placeHoldersDASHBOARD_INDICATOR = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"] = array();
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"] = array();
	$placeHoldersDASHBOARD_INDICATOR["Japanese"] = array();
	$pageTitlesDASHBOARD_INDICATOR["Japanese"] = array();
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_UID"] = "ダスIND UID";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_UID"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_UID"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_UID"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_UID"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_TYPE"] = "ダスINDタイプ";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_TYPE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_TYPE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_TITLE"] = "ダスINDタイトル";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_TITLE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_TITLE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_GOAL"] = "ダスIND目標";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_GOAL"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_GOAL"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_DIRECTION"] = "ダスIND方向";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_DIRECTION"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_DIRECTION"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_UID_PROCESS"] = "ダスのUIDプロセス";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_UID_PROCESS"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_UID_PROCESS"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_FIRST_FIGURE"] = "ダスIND最初の図";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_FIRST_FIGURE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_FIRST_FIGURE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_FIRST_FREQUENCY"] = "第一の周波数INDダス";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_FIRST_FREQUENCY"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_FIRST_FREQUENCY"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_SECOND_FIGURE"] = "ダスIND 2番目の図";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_SECOND_FIGURE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_SECOND_FIGURE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_SECOND_FREQUENCY"] = "第二の周波数INDダス";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_SECOND_FREQUENCY"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_SECOND_FREQUENCY"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_CREATE_DATE"] = "ダスは、日付を作成IND";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_CREATE_DATE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_CREATE_DATE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_UPDATE_DATE"] = "ダスIND更新日";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_UPDATE_DATE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_UPDATE_DATE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_STATUS"] = "ダスIND状況";
	$fieldToolTipsDASHBOARD_INDICATOR["Japanese"]["DAS_IND_STATUS"] = "";
	$placeHoldersDASHBOARD_INDICATOR["Japanese"]["DAS_IND_STATUS"] = "";
	if (count($fieldToolTipsDASHBOARD_INDICATOR["Japanese"]))
		$tdataDASHBOARD_INDICATOR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDASHBOARD_INDICATOR["English"] = array();
	$fieldToolTipsDASHBOARD_INDICATOR["English"] = array();
	$placeHoldersDASHBOARD_INDICATOR["English"] = array();
	$pageTitlesDASHBOARD_INDICATOR["English"] = array();
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_UID"] = "ダスIND UID";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_UID"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_UID"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_UID"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_UID"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_TYPE"] = "ダスINDタイプ";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_TYPE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_TYPE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_TITLE"] = "ダスINDタイトル";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_TITLE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_TITLE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_GOAL"] = "ダスIND目標";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_GOAL"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_GOAL"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_DIRECTION"] = "ダスIND方向";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_DIRECTION"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_DIRECTION"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_UID_PROCESS"] = "ダスのUIDプロセス";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_UID_PROCESS"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_UID_PROCESS"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_FIRST_FIGURE"] = "ダスIND最初の図";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_FIRST_FIGURE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_FIRST_FIGURE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_FIRST_FREQUENCY"] = "第一の周波数INDダス";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_FIRST_FREQUENCY"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_FIRST_FREQUENCY"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_SECOND_FIGURE"] = "ダスIND 2番目の図";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_SECOND_FIGURE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_SECOND_FIGURE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_SECOND_FREQUENCY"] = "第二の周波数INDダス";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_SECOND_FREQUENCY"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_SECOND_FREQUENCY"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_CREATE_DATE"] = "ダスは、日付を作成IND";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_CREATE_DATE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_CREATE_DATE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_UPDATE_DATE"] = "ダスIND更新日";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_UPDATE_DATE"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_UPDATE_DATE"] = "";
	$fieldLabelsDASHBOARD_INDICATOR["English"]["DAS_IND_STATUS"] = "ダスIND状況";
	$fieldToolTipsDASHBOARD_INDICATOR["English"]["DAS_IND_STATUS"] = "";
	$placeHoldersDASHBOARD_INDICATOR["English"]["DAS_IND_STATUS"] = "";
	if (count($fieldToolTipsDASHBOARD_INDICATOR["English"]))
		$tdataDASHBOARD_INDICATOR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDASHBOARD_INDICATOR[""] = array();
	$fieldToolTipsDASHBOARD_INDICATOR[""] = array();
	$placeHoldersDASHBOARD_INDICATOR[""] = array();
	$pageTitlesDASHBOARD_INDICATOR[""] = array();
	if (count($fieldToolTipsDASHBOARD_INDICATOR[""]))
		$tdataDASHBOARD_INDICATOR[".isUseToolTips"] = true;
}


	$tdataDASHBOARD_INDICATOR[".NCSearch"] = true;



$tdataDASHBOARD_INDICATOR[".shortTableName"] = "DASHBOARD_INDICATOR";
$tdataDASHBOARD_INDICATOR[".nSecOptions"] = 0;
$tdataDASHBOARD_INDICATOR[".recsPerRowPrint"] = 1;
$tdataDASHBOARD_INDICATOR[".mainTableOwnerID"] = "";
$tdataDASHBOARD_INDICATOR[".moveNext"] = 0;
$tdataDASHBOARD_INDICATOR[".entityType"] = 0;

$tdataDASHBOARD_INDICATOR[".strOriginalTableName"] = "DASHBOARD_INDICATOR";

	



$tdataDASHBOARD_INDICATOR[".showAddInPopup"] = false;

$tdataDASHBOARD_INDICATOR[".showEditInPopup"] = false;

$tdataDASHBOARD_INDICATOR[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDASHBOARD_INDICATOR[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDASHBOARD_INDICATOR[".fieldsForRegister"] = array();
	
$tdataDASHBOARD_INDICATOR[".listAjax"] = false;

	$tdataDASHBOARD_INDICATOR[".audit"] = true;

	$tdataDASHBOARD_INDICATOR[".locking"] = false;

$tdataDASHBOARD_INDICATOR[".edit"] = true;
$tdataDASHBOARD_INDICATOR[".afterEditAction"] = 1;
$tdataDASHBOARD_INDICATOR[".closePopupAfterEdit"] = 1;
$tdataDASHBOARD_INDICATOR[".afterEditActionDetTable"] = "";

$tdataDASHBOARD_INDICATOR[".add"] = true;
$tdataDASHBOARD_INDICATOR[".afterAddAction"] = 1;
$tdataDASHBOARD_INDICATOR[".closePopupAfterAdd"] = 1;
$tdataDASHBOARD_INDICATOR[".afterAddActionDetTable"] = "";

$tdataDASHBOARD_INDICATOR[".list"] = true;



$tdataDASHBOARD_INDICATOR[".reorderRecordsByHeader"] = true;



$tdataDASHBOARD_INDICATOR[".view"] = true;

$tdataDASHBOARD_INDICATOR[".import"] = true;

$tdataDASHBOARD_INDICATOR[".exportTo"] = true;

$tdataDASHBOARD_INDICATOR[".printFriendly"] = true;

$tdataDASHBOARD_INDICATOR[".delete"] = true;

$tdataDASHBOARD_INDICATOR[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDASHBOARD_INDICATOR[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDASHBOARD_INDICATOR[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDASHBOARD_INDICATOR[".searchSaving"] = false;
//

$tdataDASHBOARD_INDICATOR[".showSearchPanel"] = true;
		$tdataDASHBOARD_INDICATOR[".flexibleSearch"] = true;

$tdataDASHBOARD_INDICATOR[".isUseAjaxSuggest"] = true;

$tdataDASHBOARD_INDICATOR[".rowHighlite"] = true;



																

$tdataDASHBOARD_INDICATOR[".ajaxCodeSnippetAdded"] = false;

$tdataDASHBOARD_INDICATOR[".buttonsAdded"] = false;

$tdataDASHBOARD_INDICATOR[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDASHBOARD_INDICATOR[".isUseTimeForSearch"] = false;



$tdataDASHBOARD_INDICATOR[".badgeColor"] = "4169E1";


$tdataDASHBOARD_INDICATOR[".allSearchFields"] = array();
$tdataDASHBOARD_INDICATOR[".filterFields"] = array();
$tdataDASHBOARD_INDICATOR[".requiredSearchFields"] = array();

$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_UID";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_UID";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_TYPE";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_TITLE";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_GOAL";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_DIRECTION";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_UID_PROCESS";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_FIRST_FIGURE";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_FIRST_FREQUENCY";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_SECOND_FIGURE";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_SECOND_FREQUENCY";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_CREATE_DATE";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_UPDATE_DATE";
	$tdataDASHBOARD_INDICATOR[".allSearchFields"][] = "DAS_IND_STATUS";
	

$tdataDASHBOARD_INDICATOR[".googleLikeFields"] = array();
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".googleLikeFields"][] = "DAS_IND_STATUS";


$tdataDASHBOARD_INDICATOR[".advSearchFields"] = array();
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".advSearchFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".tableType"] = "list";

$tdataDASHBOARD_INDICATOR[".printerPageOrientation"] = 0;
$tdataDASHBOARD_INDICATOR[".nPrinterPageScale"] = 100;

$tdataDASHBOARD_INDICATOR[".nPrinterSplitRecords"] = 40;

$tdataDASHBOARD_INDICATOR[".nPrinterPDFSplitRecords"] = 40;



$tdataDASHBOARD_INDICATOR[".geocodingEnabled"] = false;





$tdataDASHBOARD_INDICATOR[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataDASHBOARD_INDICATOR[".pageSize"] = 20;

$tdataDASHBOARD_INDICATOR[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDASHBOARD_INDICATOR[".strOrderBy"] = $tstrOrderBy;

$tdataDASHBOARD_INDICATOR[".orderindexes"] = array();

$tdataDASHBOARD_INDICATOR[".sqlHead"] = "SELECT DAS_IND_UID,  	DAS_UID,  	DAS_IND_TYPE,  	DAS_IND_TITLE,  	DAS_IND_GOAL,  	DAS_IND_DIRECTION,  	DAS_UID_PROCESS,  	DAS_IND_FIRST_FIGURE,  	DAS_IND_FIRST_FREQUENCY,  	DAS_IND_SECOND_FIGURE,  	DAS_IND_SECOND_FREQUENCY,  	DAS_IND_CREATE_DATE,  	DAS_IND_UPDATE_DATE,  	DAS_IND_STATUS";
$tdataDASHBOARD_INDICATOR[".sqlFrom"] = "FROM DASHBOARD_INDICATOR";
$tdataDASHBOARD_INDICATOR[".sqlWhereExpr"] = "";
$tdataDASHBOARD_INDICATOR[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDASHBOARD_INDICATOR[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDASHBOARD_INDICATOR[".arrGroupsPerPage"] = $arrGPP;

$tdataDASHBOARD_INDICATOR[".highlightSearchResults"] = true;

$tableKeysDASHBOARD_INDICATOR = array();
$tableKeysDASHBOARD_INDICATOR[] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".Keys"] = $tableKeysDASHBOARD_INDICATOR;

$tdataDASHBOARD_INDICATOR[".listFields"] = array();
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".listFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".hideMobileList"] = array();


$tdataDASHBOARD_INDICATOR[".viewFields"] = array();
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".viewFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".addFields"] = array();
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".addFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".masterListFields"] = array();
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".masterListFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".inlineAddFields"] = array();

$tdataDASHBOARD_INDICATOR[".editFields"] = array();
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".editFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".inlineEditFields"] = array();

$tdataDASHBOARD_INDICATOR[".updateSelectedFields"] = array();
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".updateSelectedFields"][] = "DAS_IND_STATUS";


$tdataDASHBOARD_INDICATOR[".exportFields"] = array();
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".exportFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".importFields"] = array();
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".importFields"][] = "DAS_IND_STATUS";

$tdataDASHBOARD_INDICATOR[".printFields"] = array();
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_UID";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_UID";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_TYPE";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_TITLE";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_GOAL";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_DIRECTION";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_UID_PROCESS";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_FIRST_FIGURE";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_FIRST_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_SECOND_FIGURE";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_SECOND_FREQUENCY";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_CREATE_DATE";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_UPDATE_DATE";
$tdataDASHBOARD_INDICATOR[".printFields"][] = "DAS_IND_STATUS";

//	DAS_IND_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DAS_IND_UID";
	$fdata["GoodName"] = "DAS_IND_UID";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_UID";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_UID"] = $fdata;
//	DAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DAS_UID";
	$fdata["GoodName"] = "DAS_UID";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_UID";

	
	
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
	$edata["LookupTable"] = "Dashboard";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DAS_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "DAS_UID";

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_UID"] = $fdata;
//	DAS_IND_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DAS_IND_TYPE";
	$fdata["GoodName"] = "DAS_IND_TYPE";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_TYPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_TYPE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_TYPE"] = $fdata;
//	DAS_IND_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DAS_IND_TITLE";
	$fdata["GoodName"] = "DAS_IND_TITLE";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_TITLE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_TITLE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_TITLE"] = $fdata;
//	DAS_IND_GOAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DAS_IND_GOAL";
	$fdata["GoodName"] = "DAS_IND_GOAL";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_GOAL");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_GOAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_GOAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_GOAL"] = $fdata;
//	DAS_IND_DIRECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DAS_IND_DIRECTION";
	$fdata["GoodName"] = "DAS_IND_DIRECTION";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_DIRECTION");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_DIRECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_DIRECTION";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_DIRECTION"] = $fdata;
//	DAS_UID_PROCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DAS_UID_PROCESS";
	$fdata["GoodName"] = "DAS_UID_PROCESS";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_UID_PROCESS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_UID_PROCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_UID_PROCESS";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_UID_PROCESS"] = $fdata;
//	DAS_IND_FIRST_FIGURE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DAS_IND_FIRST_FIGURE";
	$fdata["GoodName"] = "DAS_IND_FIRST_FIGURE";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_FIRST_FIGURE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_FIRST_FIGURE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_FIRST_FIGURE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_FIRST_FIGURE"] = $fdata;
//	DAS_IND_FIRST_FREQUENCY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DAS_IND_FIRST_FREQUENCY";
	$fdata["GoodName"] = "DAS_IND_FIRST_FREQUENCY";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_FIRST_FREQUENCY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_FIRST_FREQUENCY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_FIRST_FREQUENCY";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_FIRST_FREQUENCY"] = $fdata;
//	DAS_IND_SECOND_FIGURE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DAS_IND_SECOND_FIGURE";
	$fdata["GoodName"] = "DAS_IND_SECOND_FIGURE";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_SECOND_FIGURE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_SECOND_FIGURE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_SECOND_FIGURE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_SECOND_FIGURE"] = $fdata;
//	DAS_IND_SECOND_FREQUENCY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DAS_IND_SECOND_FREQUENCY";
	$fdata["GoodName"] = "DAS_IND_SECOND_FREQUENCY";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_SECOND_FREQUENCY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_SECOND_FREQUENCY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_SECOND_FREQUENCY";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_SECOND_FREQUENCY"] = $fdata;
//	DAS_IND_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DAS_IND_CREATE_DATE";
	$fdata["GoodName"] = "DAS_IND_CREATE_DATE";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_CREATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_CREATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_CREATE_DATE"] = $fdata;
//	DAS_IND_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DAS_IND_UPDATE_DATE";
	$fdata["GoodName"] = "DAS_IND_UPDATE_DATE";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_UPDATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_UPDATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_UPDATE_DATE"] = $fdata;
//	DAS_IND_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DAS_IND_STATUS";
	$fdata["GoodName"] = "DAS_IND_STATUS";
	$fdata["ownerTable"] = "DASHBOARD_INDICATOR";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_INDICATOR","DAS_IND_STATUS");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_IND_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_IND_STATUS";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_INDICATOR["DAS_IND_STATUS"] = $fdata;


$tables_data["DASHBOARD_INDICATOR"]=&$tdataDASHBOARD_INDICATOR;
$field_labels["DASHBOARD_INDICATOR"] = &$fieldLabelsDASHBOARD_INDICATOR;
$fieldToolTips["DASHBOARD_INDICATOR"] = &$fieldToolTipsDASHBOARD_INDICATOR;
$placeHolders["DASHBOARD_INDICATOR"] = &$placeHoldersDASHBOARD_INDICATOR;
$page_titles["DASHBOARD_INDICATOR"] = &$pageTitlesDASHBOARD_INDICATOR;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DASHBOARD_INDICATOR"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DASHBOARD_INDICATOR"] = array();


	
				$strOriginalDetailsTable="DASHBOARD";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="DASHBOARD1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "DASHBOARD1";
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
					$masterTablesData["DASHBOARD_INDICATOR"][0] = $masterParams;
				$masterTablesData["DASHBOARD_INDICATOR"][0]["masterKeys"] = array();
	$masterTablesData["DASHBOARD_INDICATOR"][0]["masterKeys"][]="DAS_UID";
				$masterTablesData["DASHBOARD_INDICATOR"][0]["detailKeys"] = array();
	$masterTablesData["DASHBOARD_INDICATOR"][0]["detailKeys"][]="DAS_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DASHBOARD_INDICATOR()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DAS_IND_UID,  	DAS_UID,  	DAS_IND_TYPE,  	DAS_IND_TITLE,  	DAS_IND_GOAL,  	DAS_IND_DIRECTION,  	DAS_UID_PROCESS,  	DAS_IND_FIRST_FIGURE,  	DAS_IND_FIRST_FREQUENCY,  	DAS_IND_SECOND_FIGURE,  	DAS_IND_SECOND_FREQUENCY,  	DAS_IND_CREATE_DATE,  	DAS_IND_UPDATE_DATE,  	DAS_IND_STATUS";
$proto0["m_strFrom"] = "FROM DASHBOARD_INDICATOR";
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
	"m_strName" => "DAS_IND_UID",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto6["m_sql"] = "DAS_IND_UID";
$proto6["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_UID",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto8["m_sql"] = "DAS_UID";
$proto8["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_TYPE",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto10["m_sql"] = "DAS_IND_TYPE";
$proto10["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_TITLE",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto12["m_sql"] = "DAS_IND_TITLE";
$proto12["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_GOAL",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto14["m_sql"] = "DAS_IND_GOAL";
$proto14["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_DIRECTION",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto16["m_sql"] = "DAS_IND_DIRECTION";
$proto16["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_UID_PROCESS",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto18["m_sql"] = "DAS_UID_PROCESS";
$proto18["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_FIRST_FIGURE",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto20["m_sql"] = "DAS_IND_FIRST_FIGURE";
$proto20["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_FIRST_FREQUENCY",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto22["m_sql"] = "DAS_IND_FIRST_FREQUENCY";
$proto22["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_SECOND_FIGURE",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto24["m_sql"] = "DAS_IND_SECOND_FIGURE";
$proto24["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_SECOND_FREQUENCY",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto26["m_sql"] = "DAS_IND_SECOND_FREQUENCY";
$proto26["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_CREATE_DATE",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto28["m_sql"] = "DAS_IND_CREATE_DATE";
$proto28["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_UPDATE_DATE",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto30["m_sql"] = "DAS_IND_UPDATE_DATE";
$proto30["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_IND_STATUS",
	"m_strTable" => "DASHBOARD_INDICATOR",
	"m_srcTableName" => "DASHBOARD_INDICATOR"
));

$proto32["m_sql"] = "DAS_IND_STATUS";
$proto32["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "DASHBOARD_INDICATOR";
$proto35["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "DAS_IND_UID";
$proto35["m_columns"][] = "DAS_UID";
$proto35["m_columns"][] = "DAS_IND_TYPE";
$proto35["m_columns"][] = "DAS_IND_TITLE";
$proto35["m_columns"][] = "DAS_IND_GOAL";
$proto35["m_columns"][] = "DAS_IND_DIRECTION";
$proto35["m_columns"][] = "DAS_UID_PROCESS";
$proto35["m_columns"][] = "DAS_IND_FIRST_FIGURE";
$proto35["m_columns"][] = "DAS_IND_FIRST_FREQUENCY";
$proto35["m_columns"][] = "DAS_IND_SECOND_FIGURE";
$proto35["m_columns"][] = "DAS_IND_SECOND_FREQUENCY";
$proto35["m_columns"][] = "DAS_IND_CREATE_DATE";
$proto35["m_columns"][] = "DAS_IND_UPDATE_DATE";
$proto35["m_columns"][] = "DAS_IND_STATUS";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "DASHBOARD_INDICATOR";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "DASHBOARD_INDICATOR";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DASHBOARD_INDICATOR";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DASHBOARD_INDICATOR = createSqlQuery_DASHBOARD_INDICATOR();


	
						;

														

$tdataDASHBOARD_INDICATOR[".sqlquery"] = $queryData_DASHBOARD_INDICATOR;

$tableEvents["DASHBOARD_INDICATOR"] = new eventsBase;
$tdataDASHBOARD_INDICATOR[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPPLICATION_Report = array();
	$tdataAPPLICATION_Report[".truncateText"] = true;
	$tdataAPPLICATION_Report[".NumberOfChars"] = 20;
	$tdataAPPLICATION_Report[".ShortName"] = "APPLICATION_Report";
	$tdataAPPLICATION_Report[".OwnerID"] = "";
	$tdataAPPLICATION_Report[".OriginalTable"] = "APPLICATION";

//	field labels
$fieldLabelsAPPLICATION_Report = array();
$fieldToolTipsAPPLICATION_Report = array();
$pageTitlesAPPLICATION_Report = array();
$placeHoldersAPPLICATION_Report = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPPLICATION_Report["Japanese"] = array();
	$fieldToolTipsAPPLICATION_Report["Japanese"] = array();
	$placeHoldersAPPLICATION_Report["Japanese"] = array();
	$pageTitlesAPPLICATION_Report["Japanese"] = array();
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_UID"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_TITLE"] = "APP TITLE";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_TITLE"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_PARENT"] = "APP PARENT";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_PARENT"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_PARENT"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_PROC_STATUS"] = "APP PROC STATUS";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_PROC_STATUS"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_PROC_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_CREATE_DATE"] = "APP CREATE DATE";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_INIT_DATE"] = "APP INIT DATE";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_INIT_DATE"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_INIT_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["Japanese"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Report["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report["Japanese"]["APP_UPDATE_DATE"] = "";
	if (count($fieldToolTipsAPPLICATION_Report["Japanese"]))
		$tdataAPPLICATION_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPPLICATION_Report["English"] = array();
	$fieldToolTipsAPPLICATION_Report["English"] = array();
	$placeHoldersAPPLICATION_Report["English"] = array();
	$pageTitlesAPPLICATION_Report["English"] = array();
	$fieldLabelsAPPLICATION_Report["English"]["APP_PARENT"] = "APP PARENT";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_PARENT"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_PARENT"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Report["English"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Report["English"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_PROC_STATUS"] = "APP PROC STATUS";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_PROC_STATUS"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_PROC_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_CREATE_DATE"] = "APP CREATE DATE";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_INIT_DATE"] = "APP INIT DATE";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_INIT_DATE"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_INIT_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_UID"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_UID"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_TITLE"] = "APP TITLE";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_TITLE"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_TITLE"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPPLICATION_Report["English"]["APP_NUMBER"] = "";
	$placeHoldersAPPLICATION_Report["English"]["APP_NUMBER"] = "";
	if (count($fieldToolTipsAPPLICATION_Report["English"]))
		$tdataAPPLICATION_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPPLICATION_Report[""] = array();
	$fieldToolTipsAPPLICATION_Report[""] = array();
	$placeHoldersAPPLICATION_Report[""] = array();
	$pageTitlesAPPLICATION_Report[""] = array();
	if (count($fieldToolTipsAPPLICATION_Report[""]))
		$tdataAPPLICATION_Report[".isUseToolTips"] = true;
}


	$tdataAPPLICATION_Report[".NCSearch"] = true;



$tdataAPPLICATION_Report[".shortTableName"] = "APPLICATION_Report";
$tdataAPPLICATION_Report[".nSecOptions"] = 0;
$tdataAPPLICATION_Report[".recsPerRowPrint"] = 1;
$tdataAPPLICATION_Report[".mainTableOwnerID"] = "";
$tdataAPPLICATION_Report[".moveNext"] = 0;
$tdataAPPLICATION_Report[".entityType"] = 2;

$tdataAPPLICATION_Report[".strOriginalTableName"] = "APPLICATION";

	



$tdataAPPLICATION_Report[".showAddInPopup"] = false;

$tdataAPPLICATION_Report[".showEditInPopup"] = false;

$tdataAPPLICATION_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPPLICATION_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPPLICATION_Report[".fieldsForRegister"] = array();
	
$tdataAPPLICATION_Report[".listAjax"] = false;

	$tdataAPPLICATION_Report[".audit"] = false;

	$tdataAPPLICATION_Report[".locking"] = false;

$tdataAPPLICATION_Report[".edit"] = true;
$tdataAPPLICATION_Report[".afterEditAction"] = 1;
$tdataAPPLICATION_Report[".closePopupAfterEdit"] = 1;
$tdataAPPLICATION_Report[".afterEditActionDetTable"] = "";

$tdataAPPLICATION_Report[".add"] = true;
$tdataAPPLICATION_Report[".afterAddAction"] = 1;
$tdataAPPLICATION_Report[".closePopupAfterAdd"] = 1;
$tdataAPPLICATION_Report[".afterAddActionDetTable"] = "";

$tdataAPPLICATION_Report[".list"] = true;



$tdataAPPLICATION_Report[".reorderRecordsByHeader"] = true;



$tdataAPPLICATION_Report[".view"] = true;


$tdataAPPLICATION_Report[".exportTo"] = true;

$tdataAPPLICATION_Report[".printFriendly"] = true;

$tdataAPPLICATION_Report[".delete"] = true;

$tdataAPPLICATION_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAPPLICATION_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAPPLICATION_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAPPLICATION_Report[".searchSaving"] = false;
//

$tdataAPPLICATION_Report[".showSearchPanel"] = true;
		$tdataAPPLICATION_Report[".flexibleSearch"] = true;

$tdataAPPLICATION_Report[".isUseAjaxSuggest"] = true;




				

$tdataAPPLICATION_Report[".ajaxCodeSnippetAdded"] = false;

$tdataAPPLICATION_Report[".buttonsAdded"] = false;

$tdataAPPLICATION_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPPLICATION_Report[".isUseTimeForSearch"] = false;





$tdataAPPLICATION_Report[".allSearchFields"] = array();
$tdataAPPLICATION_Report[".filterFields"] = array();
$tdataAPPLICATION_Report[".requiredSearchFields"] = array();

$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_UID";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_TITLE";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_STATUS";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_NUMBER";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_PARENT";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "PRO_UID";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_PROC_STATUS";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_INIT_DATE";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPPLICATION_Report[".allSearchFields"][] = "APP_UPDATE_DATE";
	

$tdataAPPLICATION_Report[".googleLikeFields"] = array();
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".googleLikeFields"][] = "APP_UPDATE_DATE";


$tdataAPPLICATION_Report[".advSearchFields"] = array();
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".advSearchFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".advSearchFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".tableType"] = "report";

$tdataAPPLICATION_Report[".printerPageOrientation"] = 0;
$tdataAPPLICATION_Report[".nPrinterPageScale"] = 100;

$tdataAPPLICATION_Report[".nPrinterSplitRecords"] = 40;

$tdataAPPLICATION_Report[".nPrinterPDFSplitRecords"] = 40;



$tdataAPPLICATION_Report[".geocodingEnabled"] = false;

//report settings
$tdataAPPLICATION_Report[".crossTabReport"] = true;

$tdataAPPLICATION_Report[".reportGroupFields"] = true;
$tdataAPPLICATION_Report[".pageSize"] = 5;
$tdataAPPLICATION_Report[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "APP_STATUS";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "APP_TITLE";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "PRO_UID";
	$rgroupField['groupInterval'] = 2;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "APP_INIT_DATE";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataAPPLICATION_Report[".reportGroupFieldsData"] = $reportGroupFields;


$tdataAPPLICATION_Report[".isExistTotalFields"] = true;


$tdataAPPLICATION_Report[".reportPageSummary"] = true;

$tdataAPPLICATION_Report[".reportGlobalSummary"] = true;

$tdataAPPLICATION_Report[".repShowDet"] = true;

$tdataAPPLICATION_Report[".reportLayout"] = 0;

//end of report settings




$tdataAPPLICATION_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPPLICATION_Report[".strOrderBy"] = $tstrOrderBy;

$tdataAPPLICATION_Report[".orderindexes"] = array();

$tdataAPPLICATION_Report[".sqlHead"] = "SELECT APP_UID,  APP_TITLE,  APP_STATUS,  APP_NUMBER,  APP_PARENT,  PRO_UID,  APP_PROC_STATUS,  APP_CREATE_DATE,  APP_INIT_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE";
$tdataAPPLICATION_Report[".sqlFrom"] = "FROM APPLICATION";
$tdataAPPLICATION_Report[".sqlWhereExpr"] = "";
$tdataAPPLICATION_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPPLICATION_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPPLICATION_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataAPPLICATION_Report[".highlightSearchResults"] = true;

$tableKeysAPPLICATION_Report = array();
$tableKeysAPPLICATION_Report[] = "APP_UID";
$tdataAPPLICATION_Report[".Keys"] = $tableKeysAPPLICATION_Report;

$tdataAPPLICATION_Report[".listFields"] = array();
$tdataAPPLICATION_Report[".listFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".listFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".listFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".listFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".listFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".listFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".listFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".listFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".listFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".listFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".listFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".hideMobileList"] = array();


$tdataAPPLICATION_Report[".viewFields"] = array();
$tdataAPPLICATION_Report[".viewFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".viewFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".viewFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".addFields"] = array();
$tdataAPPLICATION_Report[".addFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".addFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".addFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".addFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".addFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".addFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".addFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".addFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".addFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".addFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".addFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".masterListFields"] = array();
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".masterListFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".masterListFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".inlineAddFields"] = array();
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".inlineAddFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".editFields"] = array();
$tdataAPPLICATION_Report[".editFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".editFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".editFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".editFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".editFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".editFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".editFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".editFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".editFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".editFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".editFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".inlineEditFields"] = array();
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".inlineEditFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".updateSelectedFields"] = array();
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".updateSelectedFields"][] = "APP_UPDATE_DATE";


$tdataAPPLICATION_Report[".exportFields"] = array();
$tdataAPPLICATION_Report[".exportFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".exportFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".exportFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".importFields"] = array();
$tdataAPPLICATION_Report[".importFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".importFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".importFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".importFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".importFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".importFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".importFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".importFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".importFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".importFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".importFields"][] = "APP_UPDATE_DATE";

$tdataAPPLICATION_Report[".printFields"] = array();
$tdataAPPLICATION_Report[".printFields"][] = "APP_UID";
$tdataAPPLICATION_Report[".printFields"][] = "APP_TITLE";
$tdataAPPLICATION_Report[".printFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report[".printFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Report[".printFields"][] = "APP_PARENT";
$tdataAPPLICATION_Report[".printFields"][] = "PRO_UID";
$tdataAPPLICATION_Report[".printFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Report[".printFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Report[".printFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Report[".printFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report[".printFields"][] = "APP_UPDATE_DATE";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_UID");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
				// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["APP_UID"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_TITLE");
	$fdata["FieldType"] = 201;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TITLE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["APP_TITLE"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_STATUS");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["APP_STATUS"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_NUMBER");
	$fdata["FieldType"] = 3;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["APP_NUMBER"] = $fdata;
//	APP_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_PARENT";
	$fdata["GoodName"] = "APP_PARENT";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_PARENT");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PARENT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["APP_PARENT"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","PRO_UID");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PRO_TITLE";

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["PRO_UID"] = $fdata;
//	APP_PROC_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_PROC_STATUS";
	$fdata["GoodName"] = "APP_PROC_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_PROC_STATUS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_PROC_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PROC_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report["APP_PROC_STATUS"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_CREATE_DATE");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CREATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION_Report["APP_CREATE_DATE"] = $fdata;
//	APP_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_INIT_DATE";
	$fdata["GoodName"] = "APP_INIT_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_INIT_DATE");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_INIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_INIT_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION_Report["APP_INIT_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_FINISH_DATE");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_FINISH_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION_Report["APP_FINISH_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report","APP_UPDATE_DATE");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UPDATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION_Report["APP_UPDATE_DATE"] = $fdata;


$tables_data["APPLICATION Report"]=&$tdataAPPLICATION_Report;
$field_labels["APPLICATION_Report"] = &$fieldLabelsAPPLICATION_Report;
$fieldToolTips["APPLICATION_Report"] = &$fieldToolTipsAPPLICATION_Report;
$placeHolders["APPLICATION_Report"] = &$placeHoldersAPPLICATION_Report;
$page_titles["APPLICATION_Report"] = &$pageTitlesAPPLICATION_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["APPLICATION Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APPLICATION_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  APP_TITLE,  APP_STATUS,  APP_NUMBER,  APP_PARENT,  PRO_UID,  APP_PROC_STATUS,  APP_CREATE_DATE,  APP_INIT_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE";
$proto0["m_strFrom"] = "FROM APPLICATION";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APPLICATION Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto8["m_sql"] = "APP_TITLE";
$proto8["m_srcTableName"] = "APPLICATION Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "APPLICATION Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto12["m_sql"] = "APP_NUMBER";
$proto12["m_srcTableName"] = "APPLICATION Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PARENT",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto14["m_sql"] = "APP_PARENT";
$proto14["m_srcTableName"] = "APPLICATION Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto16["m_sql"] = "PRO_UID";
$proto16["m_srcTableName"] = "APPLICATION Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PROC_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto18["m_sql"] = "APP_PROC_STATUS";
$proto18["m_srcTableName"] = "APPLICATION Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto20["m_sql"] = "APP_CREATE_DATE";
$proto20["m_srcTableName"] = "APPLICATION Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_INIT_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto22["m_sql"] = "APP_INIT_DATE";
$proto22["m_srcTableName"] = "APPLICATION Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto24["m_sql"] = "APP_FINISH_DATE";
$proto24["m_srcTableName"] = "APPLICATION Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report"
));

$proto26["m_sql"] = "APP_UPDATE_DATE";
$proto26["m_srcTableName"] = "APPLICATION Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "APPLICATION";
$proto29["m_srcTableName"] = "APPLICATION Report";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "APP_UID";
$proto29["m_columns"][] = "APP_TITLE";
$proto29["m_columns"][] = "APP_DESCRIPTION";
$proto29["m_columns"][] = "APP_NUMBER";
$proto29["m_columns"][] = "APP_PARENT";
$proto29["m_columns"][] = "APP_STATUS";
$proto29["m_columns"][] = "PRO_UID";
$proto29["m_columns"][] = "APP_PROC_STATUS";
$proto29["m_columns"][] = "APP_PROC_CODE";
$proto29["m_columns"][] = "APP_PARALLEL";
$proto29["m_columns"][] = "APP_INIT_USER";
$proto29["m_columns"][] = "APP_CUR_USER";
$proto29["m_columns"][] = "APP_CREATE_DATE";
$proto29["m_columns"][] = "APP_INIT_DATE";
$proto29["m_columns"][] = "APP_FINISH_DATE";
$proto29["m_columns"][] = "APP_UPDATE_DATE";
$proto29["m_columns"][] = "APP_DATA";
$proto29["m_columns"][] = "APP_PIN";
$proto29["m_columns"][] = "APP_DURATION";
$proto29["m_columns"][] = "APP_DELAY_DURATION";
$proto29["m_columns"][] = "APP_DRIVE_FOLDER_UID";
$proto29["m_columns"][] = "APP_ROUTING_DATA";
$proto29["m_columns"][] = "APP_STATUS_ID";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "APPLICATION";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "APPLICATION Report";
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
$proto0["m_srcTableName"]="APPLICATION Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APPLICATION_Report = createSqlQuery_APPLICATION_Report();


	
						;

											

$tdataAPPLICATION_Report[".sqlquery"] = $queryData_APPLICATION_Report;

$tableEvents["APPLICATION Report"] = new eventsBase;
$tdataAPPLICATION_Report[".hasEvents"] = false;

?>
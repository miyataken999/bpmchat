<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPPLICATION_Chart = array();
	$tdataAPPLICATION_Chart[".truncateText"] = true;
	$tdataAPPLICATION_Chart[".NumberOfChars"] = 20;
	$tdataAPPLICATION_Chart[".ShortName"] = "APPLICATION_Chart";
	$tdataAPPLICATION_Chart[".OwnerID"] = "";
	$tdataAPPLICATION_Chart[".OriginalTable"] = "APPLICATION";

//	field labels
$fieldLabelsAPPLICATION_Chart = array();
$fieldToolTipsAPPLICATION_Chart = array();
$pageTitlesAPPLICATION_Chart = array();
$placeHoldersAPPLICATION_Chart = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPPLICATION_Chart["Japanese"] = array();
	$fieldToolTipsAPPLICATION_Chart["Japanese"] = array();
	$placeHoldersAPPLICATION_Chart["Japanese"] = array();
	$pageTitlesAPPLICATION_Chart["Japanese"] = array();
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_UID"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_TITLE"] = "APP TITLE";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_TITLE"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_DESCRIPTION"] = "APP DESCRIPTION";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_DESCRIPTION"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_DESCRIPTION"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_PARENT"] = "APP PARENT";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_PARENT"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_PARENT"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_PROC_STATUS"] = "APP PROC STATUS";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_PROC_STATUS"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_PROC_STATUS"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_PROC_CODE"] = "APP PROC CODE";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_PROC_CODE"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_PROC_CODE"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_PARALLEL"] = "APP PARALLEL";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_PARALLEL"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_PARALLEL"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_INIT_USER"] = "APP INIT USER";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_INIT_USER"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_INIT_USER"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_CUR_USER"] = "APP CUR USER";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_CUR_USER"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_CUR_USER"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_CREATE_DATE"] = "APP CREATE DATE";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_INIT_DATE"] = "APP INIT DATE";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_INIT_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_INIT_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_DATA"] = "APP DATA";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_DATA"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_DATA"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_PIN"] = "APP PIN";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_PIN"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_PIN"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_DURATION"] = "APP DURATION";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_DURATION"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_DELAY_DURATION"] = "APP DELAY DURATION";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_DELAY_DURATION"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_DELAY_DURATION"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_DRIVE_FOLDER_UID"] = "APP DRIVE FOLDER UID";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_DRIVE_FOLDER_UID"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_DRIVE_FOLDER_UID"] = "";
	$fieldLabelsAPPLICATION_Chart["Japanese"]["APP_ROUTING_DATA"] = "APP ROUTING DATA";
	$fieldToolTipsAPPLICATION_Chart["Japanese"]["APP_ROUTING_DATA"] = "";
	$placeHoldersAPPLICATION_Chart["Japanese"]["APP_ROUTING_DATA"] = "";
	if (count($fieldToolTipsAPPLICATION_Chart["Japanese"]))
		$tdataAPPLICATION_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPPLICATION_Chart["English"] = array();
	$fieldToolTipsAPPLICATION_Chart["English"] = array();
	$placeHoldersAPPLICATION_Chart["English"] = array();
	$pageTitlesAPPLICATION_Chart["English"] = array();
	$fieldLabelsAPPLICATION_Chart["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_PARENT"] = "APP PARENT";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_PARENT"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_PARENT"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Chart["English"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_PROC_STATUS"] = "APP PROC STATUS";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_PROC_STATUS"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_PROC_STATUS"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_PROC_CODE"] = "APP PROC CODE";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_PROC_CODE"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_PROC_CODE"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_PARALLEL"] = "APP PARALLEL";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_PARALLEL"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_PARALLEL"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_INIT_USER"] = "APP INIT USER";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_INIT_USER"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_INIT_USER"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_CUR_USER"] = "APP CUR USER";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_CUR_USER"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_CUR_USER"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_CREATE_DATE"] = "APP CREATE DATE";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_INIT_DATE"] = "APP INIT DATE";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_INIT_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_INIT_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_DATA"] = "APP DATA";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_DATA"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_DATA"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_PIN"] = "APP PIN";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_PIN"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_PIN"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_DURATION"] = "APP DURATION";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_DURATION"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_DELAY_DURATION"] = "APP DELAY DURATION";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_DELAY_DURATION"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_DELAY_DURATION"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_DRIVE_FOLDER_UID"] = "APP DRIVE FOLDER UID";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_DRIVE_FOLDER_UID"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_DRIVE_FOLDER_UID"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_ROUTING_DATA"] = "APP ROUTING DATA";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_ROUTING_DATA"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_ROUTING_DATA"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_UID"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_UID"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_TITLE"] = "APP TITLE";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_TITLE"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_TITLE"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_DESCRIPTION"] = "APP DESCRIPTION";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_DESCRIPTION"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_DESCRIPTION"] = "";
	$fieldLabelsAPPLICATION_Chart["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPPLICATION_Chart["English"]["APP_NUMBER"] = "";
	$placeHoldersAPPLICATION_Chart["English"]["APP_NUMBER"] = "";
	if (count($fieldToolTipsAPPLICATION_Chart["English"]))
		$tdataAPPLICATION_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPPLICATION_Chart[""] = array();
	$fieldToolTipsAPPLICATION_Chart[""] = array();
	$placeHoldersAPPLICATION_Chart[""] = array();
	$pageTitlesAPPLICATION_Chart[""] = array();
	if (count($fieldToolTipsAPPLICATION_Chart[""]))
		$tdataAPPLICATION_Chart[".isUseToolTips"] = true;
}


	$tdataAPPLICATION_Chart[".NCSearch"] = true;

	$tdataAPPLICATION_Chart[".ChartRefreshTime"] = 0;


$tdataAPPLICATION_Chart[".shortTableName"] = "APPLICATION_Chart";
$tdataAPPLICATION_Chart[".nSecOptions"] = 0;
$tdataAPPLICATION_Chart[".recsPerRowPrint"] = 1;
$tdataAPPLICATION_Chart[".mainTableOwnerID"] = "";
$tdataAPPLICATION_Chart[".moveNext"] = 0;
$tdataAPPLICATION_Chart[".entityType"] = 3;

$tdataAPPLICATION_Chart[".strOriginalTableName"] = "APPLICATION";

	



$tdataAPPLICATION_Chart[".showAddInPopup"] = false;

$tdataAPPLICATION_Chart[".showEditInPopup"] = false;

$tdataAPPLICATION_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPPLICATION_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPPLICATION_Chart[".fieldsForRegister"] = array();
	
$tdataAPPLICATION_Chart[".listAjax"] = false;

	$tdataAPPLICATION_Chart[".audit"] = false;

	$tdataAPPLICATION_Chart[".locking"] = false;

$tdataAPPLICATION_Chart[".edit"] = true;
$tdataAPPLICATION_Chart[".afterEditAction"] = 1;
$tdataAPPLICATION_Chart[".closePopupAfterEdit"] = 1;
$tdataAPPLICATION_Chart[".afterEditActionDetTable"] = "";

$tdataAPPLICATION_Chart[".add"] = true;
$tdataAPPLICATION_Chart[".afterAddAction"] = 1;
$tdataAPPLICATION_Chart[".closePopupAfterAdd"] = 1;
$tdataAPPLICATION_Chart[".afterAddActionDetTable"] = "";

$tdataAPPLICATION_Chart[".list"] = true;



$tdataAPPLICATION_Chart[".reorderRecordsByHeader"] = true;



$tdataAPPLICATION_Chart[".view"] = true;




$tdataAPPLICATION_Chart[".delete"] = true;

$tdataAPPLICATION_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAPPLICATION_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAPPLICATION_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAPPLICATION_Chart[".searchSaving"] = false;
//

$tdataAPPLICATION_Chart[".showSearchPanel"] = true;
		$tdataAPPLICATION_Chart[".flexibleSearch"] = true;

$tdataAPPLICATION_Chart[".isUseAjaxSuggest"] = true;




				

$tdataAPPLICATION_Chart[".ajaxCodeSnippetAdded"] = false;

$tdataAPPLICATION_Chart[".buttonsAdded"] = false;

$tdataAPPLICATION_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPPLICATION_Chart[".isUseTimeForSearch"] = false;





$tdataAPPLICATION_Chart[".allSearchFields"] = array();
$tdataAPPLICATION_Chart[".filterFields"] = array();
$tdataAPPLICATION_Chart[".requiredSearchFields"] = array();

$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_UID";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_TITLE";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_DESCRIPTION";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_NUMBER";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_STATUS";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_PARENT";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "PRO_UID";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_PROC_STATUS";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_PROC_CODE";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_PARALLEL";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_INIT_USER";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_CUR_USER";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_INIT_DATE";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_DATA";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_PIN";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_DURATION";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_DELAY_DURATION";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_DRIVE_FOLDER_UID";
	$tdataAPPLICATION_Chart[".allSearchFields"][] = "APP_ROUTING_DATA";
	

$tdataAPPLICATION_Chart[".googleLikeFields"] = array();
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".googleLikeFields"][] = "APP_ROUTING_DATA";


$tdataAPPLICATION_Chart[".advSearchFields"] = array();
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".advSearchFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".tableType"] = "chart";

$tdataAPPLICATION_Chart[".printerPageOrientation"] = 0;
$tdataAPPLICATION_Chart[".nPrinterPageScale"] = 100;

$tdataAPPLICATION_Chart[".nPrinterSplitRecords"] = 40;

$tdataAPPLICATION_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdataAPPLICATION_Chart[".geocodingEnabled"] = false;



// chart settings
$tdataAPPLICATION_Chart[".chartType"] = "Bubble";
// end of chart settings


$tdataAPPLICATION_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPPLICATION_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataAPPLICATION_Chart[".orderindexes"] = array();

$tdataAPPLICATION_Chart[".sqlHead"] = "SELECT APP_UID,  APP_TITLE,  APP_DESCRIPTION,  APP_NUMBER,  APP_STATUS,  APP_PARENT,  PRO_UID,  APP_PROC_STATUS,  APP_PROC_CODE,  APP_PARALLEL,  APP_INIT_USER,  APP_CUR_USER,  APP_CREATE_DATE,  APP_INIT_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_DATA,  APP_PIN,  APP_DURATION,  APP_DELAY_DURATION,  APP_DRIVE_FOLDER_UID,  APP_ROUTING_DATA";
$tdataAPPLICATION_Chart[".sqlFrom"] = "FROM APPLICATION";
$tdataAPPLICATION_Chart[".sqlWhereExpr"] = "";
$tdataAPPLICATION_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPPLICATION_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPPLICATION_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdataAPPLICATION_Chart[".highlightSearchResults"] = true;

$tableKeysAPPLICATION_Chart = array();
$tableKeysAPPLICATION_Chart[] = "APP_UID";
$tdataAPPLICATION_Chart[".Keys"] = $tableKeysAPPLICATION_Chart;

$tdataAPPLICATION_Chart[".listFields"] = array();
$tdataAPPLICATION_Chart[".listFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".listFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".listFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".hideMobileList"] = array();


$tdataAPPLICATION_Chart[".viewFields"] = array();
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".viewFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".viewFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".addFields"] = array();
$tdataAPPLICATION_Chart[".addFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".addFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".addFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".masterListFields"] = array();
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".masterListFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".masterListFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".inlineAddFields"] = array();
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".inlineAddFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".editFields"] = array();
$tdataAPPLICATION_Chart[".editFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".editFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".editFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".inlineEditFields"] = array();
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".inlineEditFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".updateSelectedFields"] = array();
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".updateSelectedFields"][] = "APP_ROUTING_DATA";


$tdataAPPLICATION_Chart[".exportFields"] = array();
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".exportFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".exportFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".importFields"] = array();
$tdataAPPLICATION_Chart[".importFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".importFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".importFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION_Chart[".printFields"] = array();
$tdataAPPLICATION_Chart[".printFields"][] = "APP_UID";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_TITLE";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_NUMBER";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_STATUS";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_PARENT";
$tdataAPPLICATION_Chart[".printFields"][] = "PRO_UID";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_PARALLEL";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_INIT_USER";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_CUR_USER";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_DATA";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_PIN";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_DURATION";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION_Chart[".printFields"][] = "APP_ROUTING_DATA";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_UID");
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

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_UID"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_TITLE");
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

		$fdata["strField"] = "APP_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TITLE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_TITLE"] = $fdata;
//	APP_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_DESCRIPTION";
	$fdata["GoodName"] = "APP_DESCRIPTION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_DESCRIPTION");
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

		$fdata["strField"] = "APP_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DESCRIPTION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_DESCRIPTION"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_NUMBER");
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

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Chart["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_STATUS");
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

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_STATUS"] = $fdata;
//	APP_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_PARENT";
	$fdata["GoodName"] = "APP_PARENT";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_PARENT");
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

		$fdata["strField"] = "APP_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PARENT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_PARENT"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","PRO_UID");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["PRO_UID"] = $fdata;
//	APP_PROC_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_PROC_STATUS";
	$fdata["GoodName"] = "APP_PROC_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_PROC_STATUS");
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

		$fdata["strField"] = "APP_PROC_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PROC_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_PROC_STATUS"] = $fdata;
//	APP_PROC_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_PROC_CODE";
	$fdata["GoodName"] = "APP_PROC_CODE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_PROC_CODE");
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

		$fdata["strField"] = "APP_PROC_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PROC_CODE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_PROC_CODE"] = $fdata;
//	APP_PARALLEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_PARALLEL";
	$fdata["GoodName"] = "APP_PARALLEL";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_PARALLEL");
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

		$fdata["strField"] = "APP_PARALLEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PARALLEL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_PARALLEL"] = $fdata;
//	APP_INIT_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_INIT_USER";
	$fdata["GoodName"] = "APP_INIT_USER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_INIT_USER");
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

		$fdata["strField"] = "APP_INIT_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_INIT_USER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "USERS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "USR_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "USR_FIRSTNAME";

	
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




	$tdataAPPLICATION_Chart["APP_INIT_USER"] = $fdata;
//	APP_CUR_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_CUR_USER";
	$fdata["GoodName"] = "APP_CUR_USER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_CUR_USER");
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

		$fdata["strField"] = "APP_CUR_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CUR_USER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "USERS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "USR_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "USR_FIRSTNAME";

	
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




	$tdataAPPLICATION_Chart["APP_CUR_USER"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_CREATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_CREATE_DATE"] = $fdata;
//	APP_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APP_INIT_DATE";
	$fdata["GoodName"] = "APP_INIT_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_INIT_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_INIT_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_FINISH_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_FINISH_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_UPDATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_UPDATE_DATE"] = $fdata;
//	APP_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "APP_DATA";
	$fdata["GoodName"] = "APP_DATA";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_DATA");
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

		$fdata["strField"] = "APP_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DATA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Chart["APP_DATA"] = $fdata;
//	APP_PIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_PIN";
	$fdata["GoodName"] = "APP_PIN";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_PIN");
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

		$fdata["strField"] = "APP_PIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PIN";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_PIN"] = $fdata;
//	APP_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_DURATION";
	$fdata["GoodName"] = "APP_DURATION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_DURATION");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "APP_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Chart["APP_DURATION"] = $fdata;
//	APP_DELAY_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APP_DELAY_DURATION";
	$fdata["GoodName"] = "APP_DELAY_DURATION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_DELAY_DURATION");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "APP_DELAY_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DELAY_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Chart["APP_DELAY_DURATION"] = $fdata;
//	APP_DRIVE_FOLDER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APP_DRIVE_FOLDER_UID";
	$fdata["GoodName"] = "APP_DRIVE_FOLDER_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_DRIVE_FOLDER_UID");
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

		$fdata["strField"] = "APP_DRIVE_FOLDER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DRIVE_FOLDER_UID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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




	$tdataAPPLICATION_Chart["APP_DRIVE_FOLDER_UID"] = $fdata;
//	APP_ROUTING_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "APP_ROUTING_DATA";
	$fdata["GoodName"] = "APP_ROUTING_DATA";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Chart","APP_ROUTING_DATA");
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

		$fdata["strField"] = "APP_ROUTING_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_ROUTING_DATA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Chart["APP_ROUTING_DATA"] = $fdata;

	$tdataAPPLICATION_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">APPLICATION Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">bubble</attr>
		</attr>

		<attr value="parameters">';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">APP_DELAY_DURATION</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="size"></attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">APP_DURATION</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="size"></attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">APP_STATUS</attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("APPLICATION Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("APP_NUMBER").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="bubbletransp">0</attr>';
$tdataAPPLICATION_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">APP_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">APP_TITLE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_TITLE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">APP_DESCRIPTION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_DESCRIPTION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">APP_NUMBER</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_NUMBER")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">APP_STATUS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_STATUS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">APP_PARENT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_PARENT")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">PRO_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","PRO_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">APP_PROC_STATUS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_PROC_STATUS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">APP_PROC_CODE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_PROC_CODE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">APP_PARALLEL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_PARALLEL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="10">
		<attr value="name">APP_INIT_USER</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_INIT_USER")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="11">
		<attr value="name">APP_CUR_USER</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_CUR_USER")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="12">
		<attr value="name">APP_CREATE_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_CREATE_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="13">
		<attr value="name">APP_INIT_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_INIT_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="14">
		<attr value="name">APP_FINISH_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_FINISH_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="15">
		<attr value="name">APP_UPDATE_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_UPDATE_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="16">
		<attr value="name">APP_DATA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_DATA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="17">
		<attr value="name">APP_PIN</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_PIN")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="18">
		<attr value="name">APP_DURATION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_DURATION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="19">
		<attr value="name">APP_DELAY_DURATION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_DELAY_DURATION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="20">
		<attr value="name">APP_DRIVE_FOLDER_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_DRIVE_FOLDER_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPPLICATION_Chart[".chartXml"] .= '<attr value="21">
		<attr value="name">APP_ROUTING_DATA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APPLICATION_Chart","APP_ROUTING_DATA")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataAPPLICATION_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">APPLICATION Chart</attr>
<attr value="short_table_name">APPLICATION_Chart</attr>
</attr>

</chart>';

$tables_data["APPLICATION Chart"]=&$tdataAPPLICATION_Chart;
$field_labels["APPLICATION_Chart"] = &$fieldLabelsAPPLICATION_Chart;
$fieldToolTips["APPLICATION_Chart"] = &$fieldToolTipsAPPLICATION_Chart;
$placeHolders["APPLICATION_Chart"] = &$placeHoldersAPPLICATION_Chart;
$page_titles["APPLICATION_Chart"] = &$pageTitlesAPPLICATION_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APPLICATION Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APPLICATION Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APPLICATION_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  APP_TITLE,  APP_DESCRIPTION,  APP_NUMBER,  APP_STATUS,  APP_PARENT,  PRO_UID,  APP_PROC_STATUS,  APP_PROC_CODE,  APP_PARALLEL,  APP_INIT_USER,  APP_CUR_USER,  APP_CREATE_DATE,  APP_INIT_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_DATA,  APP_PIN,  APP_DURATION,  APP_DELAY_DURATION,  APP_DRIVE_FOLDER_UID,  APP_ROUTING_DATA";
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
	"m_srcTableName" => "APPLICATION Chart"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APPLICATION Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto8["m_sql"] = "APP_TITLE";
$proto8["m_srcTableName"] = "APPLICATION Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DESCRIPTION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto10["m_sql"] = "APP_DESCRIPTION";
$proto10["m_srcTableName"] = "APPLICATION Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto12["m_sql"] = "APP_NUMBER";
$proto12["m_srcTableName"] = "APPLICATION Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto14["m_sql"] = "APP_STATUS";
$proto14["m_srcTableName"] = "APPLICATION Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PARENT",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto16["m_sql"] = "APP_PARENT";
$proto16["m_srcTableName"] = "APPLICATION Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto18["m_sql"] = "PRO_UID";
$proto18["m_srcTableName"] = "APPLICATION Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PROC_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto20["m_sql"] = "APP_PROC_STATUS";
$proto20["m_srcTableName"] = "APPLICATION Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PROC_CODE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto22["m_sql"] = "APP_PROC_CODE";
$proto22["m_srcTableName"] = "APPLICATION Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PARALLEL",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto24["m_sql"] = "APP_PARALLEL";
$proto24["m_srcTableName"] = "APPLICATION Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_INIT_USER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto26["m_sql"] = "APP_INIT_USER";
$proto26["m_srcTableName"] = "APPLICATION Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CUR_USER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto28["m_sql"] = "APP_CUR_USER";
$proto28["m_srcTableName"] = "APPLICATION Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto30["m_sql"] = "APP_CREATE_DATE";
$proto30["m_srcTableName"] = "APPLICATION Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_INIT_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto32["m_sql"] = "APP_INIT_DATE";
$proto32["m_srcTableName"] = "APPLICATION Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto34["m_sql"] = "APP_FINISH_DATE";
$proto34["m_srcTableName"] = "APPLICATION Chart";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto36["m_sql"] = "APP_UPDATE_DATE";
$proto36["m_srcTableName"] = "APPLICATION Chart";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DATA",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto38["m_sql"] = "APP_DATA";
$proto38["m_srcTableName"] = "APPLICATION Chart";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PIN",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto40["m_sql"] = "APP_PIN";
$proto40["m_srcTableName"] = "APPLICATION Chart";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DURATION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto42["m_sql"] = "APP_DURATION";
$proto42["m_srcTableName"] = "APPLICATION Chart";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DELAY_DURATION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto44["m_sql"] = "APP_DELAY_DURATION";
$proto44["m_srcTableName"] = "APPLICATION Chart";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DRIVE_FOLDER_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto46["m_sql"] = "APP_DRIVE_FOLDER_UID";
$proto46["m_srcTableName"] = "APPLICATION Chart";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_ROUTING_DATA",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Chart"
));

$proto48["m_sql"] = "APP_ROUTING_DATA";
$proto48["m_srcTableName"] = "APPLICATION Chart";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "APPLICATION";
$proto51["m_srcTableName"] = "APPLICATION Chart";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "APP_UID";
$proto51["m_columns"][] = "APP_TITLE";
$proto51["m_columns"][] = "APP_DESCRIPTION";
$proto51["m_columns"][] = "APP_NUMBER";
$proto51["m_columns"][] = "APP_PARENT";
$proto51["m_columns"][] = "APP_STATUS";
$proto51["m_columns"][] = "PRO_UID";
$proto51["m_columns"][] = "APP_PROC_STATUS";
$proto51["m_columns"][] = "APP_PROC_CODE";
$proto51["m_columns"][] = "APP_PARALLEL";
$proto51["m_columns"][] = "APP_INIT_USER";
$proto51["m_columns"][] = "APP_CUR_USER";
$proto51["m_columns"][] = "APP_CREATE_DATE";
$proto51["m_columns"][] = "APP_INIT_DATE";
$proto51["m_columns"][] = "APP_FINISH_DATE";
$proto51["m_columns"][] = "APP_UPDATE_DATE";
$proto51["m_columns"][] = "APP_DATA";
$proto51["m_columns"][] = "APP_PIN";
$proto51["m_columns"][] = "APP_DURATION";
$proto51["m_columns"][] = "APP_DELAY_DURATION";
$proto51["m_columns"][] = "APP_DRIVE_FOLDER_UID";
$proto51["m_columns"][] = "APP_ROUTING_DATA";
$proto51["m_columns"][] = "APP_STATUS_ID";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "APPLICATION";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "APPLICATION Chart";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APPLICATION Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APPLICATION_Chart = createSqlQuery_APPLICATION_Chart();


	
						;

																						

$tdataAPPLICATION_Chart[".sqlquery"] = $queryData_APPLICATION_Chart;

$tableEvents["APPLICATION Chart"] = new eventsBase;
$tdataAPPLICATION_Chart[".hasEvents"] = false;

?>
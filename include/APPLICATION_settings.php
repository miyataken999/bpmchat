<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPPLICATION = array();
	$tdataAPPLICATION[".truncateText"] = true;
	$tdataAPPLICATION[".NumberOfChars"] = 20;
	$tdataAPPLICATION[".ShortName"] = "APPLICATION";
	$tdataAPPLICATION[".OwnerID"] = "";
	$tdataAPPLICATION[".OriginalTable"] = "APPLICATION";

//	field labels
$fieldLabelsAPPLICATION = array();
$fieldToolTipsAPPLICATION = array();
$pageTitlesAPPLICATION = array();
$placeHoldersAPPLICATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPPLICATION["Japanese"] = array();
	$fieldToolTipsAPPLICATION["Japanese"] = array();
	$placeHoldersAPPLICATION["Japanese"] = array();
	$pageTitlesAPPLICATION["Japanese"] = array();
	$fieldLabelsAPPLICATION["Japanese"]["APP_UID"] = "UID";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_UID"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_TITLE"] = "タイトル";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_TITLE"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_DESCRIPTION"] = "DESC";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_DESCRIPTION"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_DESCRIPTION"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_NUMBER"] = "NUM";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_PARENT"] = "パー";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_PARENT"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_PARENT"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_STATUS"] = "ST";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["PRO_UID"] = "UID";
	$fieldToolTipsAPPLICATION["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_PROC_STATUS"] = "procのステータス";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_PROC_STATUS"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_PROC_STATUS"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_PROC_CODE"] = "PCODE";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_PROC_CODE"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_PROC_CODE"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_PARALLEL"] = "平行";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_PARALLEL"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_PARALLEL"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_INIT_USER"] = "その中に";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_INIT_USER"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_INIT_USER"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_CUR_USER"] = "アプリのCURユーザー";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_CUR_USER"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_CUR_USER"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_CREATE_DATE"] = "CDATE";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_INIT_DATE"] = "アプリのinit日";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_INIT_DATE"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_INIT_DATE"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_DATA"] = "データ";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_DATA"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_DATA"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_PIN"] = "ピン";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_PIN"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_PIN"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_DURATION"] = "期間";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_DURATION"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_DELAY_DURATION"] = "遅延時間";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_DELAY_DURATION"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_DELAY_DURATION"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_DRIVE_FOLDER_UID"] = "ドライブフォルダUID";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_DRIVE_FOLDER_UID"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_DRIVE_FOLDER_UID"] = "";
	$fieldLabelsAPPLICATION["Japanese"]["APP_ROUTING_DATA"] = "ルーティングデータ";
	$fieldToolTipsAPPLICATION["Japanese"]["APP_ROUTING_DATA"] = "";
	$placeHoldersAPPLICATION["Japanese"]["APP_ROUTING_DATA"] = "";
	if (count($fieldToolTipsAPPLICATION["Japanese"]))
		$tdataAPPLICATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPPLICATION["English"] = array();
	$fieldToolTipsAPPLICATION["English"] = array();
	$placeHoldersAPPLICATION["English"] = array();
	$pageTitlesAPPLICATION["English"] = array();
	$fieldLabelsAPPLICATION["English"]["APP_UID"] = "UID";
	$fieldToolTipsAPPLICATION["English"]["APP_UID"] = "";
	$placeHoldersAPPLICATION["English"]["APP_UID"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_TITLE"] = "タイトル";
	$fieldToolTipsAPPLICATION["English"]["APP_TITLE"] = "";
	$placeHoldersAPPLICATION["English"]["APP_TITLE"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_DESCRIPTION"] = "DESC";
	$fieldToolTipsAPPLICATION["English"]["APP_DESCRIPTION"] = "";
	$placeHoldersAPPLICATION["English"]["APP_DESCRIPTION"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_NUMBER"] = "NUM";
	$fieldToolTipsAPPLICATION["English"]["APP_NUMBER"] = "";
	$placeHoldersAPPLICATION["English"]["APP_NUMBER"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_PARENT"] = "パー";
	$fieldToolTipsAPPLICATION["English"]["APP_PARENT"] = "";
	$placeHoldersAPPLICATION["English"]["APP_PARENT"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_STATUS"] = "ST";
	$fieldToolTipsAPPLICATION["English"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION["English"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION["English"]["PRO_UID"] = "UID";
	$fieldToolTipsAPPLICATION["English"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION["English"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_PROC_STATUS"] = "procのステータス";
	$fieldToolTipsAPPLICATION["English"]["APP_PROC_STATUS"] = "";
	$placeHoldersAPPLICATION["English"]["APP_PROC_STATUS"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_PROC_CODE"] = "PCODE";
	$fieldToolTipsAPPLICATION["English"]["APP_PROC_CODE"] = "";
	$placeHoldersAPPLICATION["English"]["APP_PROC_CODE"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_PARALLEL"] = "平行";
	$fieldToolTipsAPPLICATION["English"]["APP_PARALLEL"] = "";
	$placeHoldersAPPLICATION["English"]["APP_PARALLEL"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_INIT_USER"] = "その中に";
	$fieldToolTipsAPPLICATION["English"]["APP_INIT_USER"] = "";
	$placeHoldersAPPLICATION["English"]["APP_INIT_USER"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_CUR_USER"] = "アプリのCURユーザー";
	$fieldToolTipsAPPLICATION["English"]["APP_CUR_USER"] = "";
	$placeHoldersAPPLICATION["English"]["APP_CUR_USER"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_CREATE_DATE"] = "CDATE";
	$fieldToolTipsAPPLICATION["English"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPPLICATION["English"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_INIT_DATE"] = "アプリのinit日";
	$fieldToolTipsAPPLICATION["English"]["APP_INIT_DATE"] = "";
	$placeHoldersAPPLICATION["English"]["APP_INIT_DATE"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_FINISH_DATE"] = "アプリの終了日";
	$fieldToolTipsAPPLICATION["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_UPDATE_DATE"] = "アプリの更新日";
	$fieldToolTipsAPPLICATION["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_DATA"] = "データ";
	$fieldToolTipsAPPLICATION["English"]["APP_DATA"] = "";
	$placeHoldersAPPLICATION["English"]["APP_DATA"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_PIN"] = "ピン";
	$fieldToolTipsAPPLICATION["English"]["APP_PIN"] = "";
	$placeHoldersAPPLICATION["English"]["APP_PIN"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_DURATION"] = "期間";
	$fieldToolTipsAPPLICATION["English"]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION["English"]["APP_DURATION"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_DELAY_DURATION"] = "遅延時間";
	$fieldToolTipsAPPLICATION["English"]["APP_DELAY_DURATION"] = "";
	$placeHoldersAPPLICATION["English"]["APP_DELAY_DURATION"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_DRIVE_FOLDER_UID"] = "ドライブフォルダUID";
	$fieldToolTipsAPPLICATION["English"]["APP_DRIVE_FOLDER_UID"] = "";
	$placeHoldersAPPLICATION["English"]["APP_DRIVE_FOLDER_UID"] = "";
	$fieldLabelsAPPLICATION["English"]["APP_ROUTING_DATA"] = "ルーティングデータ";
	$fieldToolTipsAPPLICATION["English"]["APP_ROUTING_DATA"] = "";
	$placeHoldersAPPLICATION["English"]["APP_ROUTING_DATA"] = "";
	if (count($fieldToolTipsAPPLICATION["English"]))
		$tdataAPPLICATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPPLICATION[""] = array();
	$fieldToolTipsAPPLICATION[""] = array();
	$placeHoldersAPPLICATION[""] = array();
	$pageTitlesAPPLICATION[""] = array();
	if (count($fieldToolTipsAPPLICATION[""]))
		$tdataAPPLICATION[".isUseToolTips"] = true;
}


	$tdataAPPLICATION[".NCSearch"] = true;



$tdataAPPLICATION[".shortTableName"] = "APPLICATION";
$tdataAPPLICATION[".nSecOptions"] = 0;
$tdataAPPLICATION[".recsPerRowPrint"] = 1;
$tdataAPPLICATION[".mainTableOwnerID"] = "";
$tdataAPPLICATION[".moveNext"] = 0;
$tdataAPPLICATION[".entityType"] = 0;

$tdataAPPLICATION[".strOriginalTableName"] = "APPLICATION";

	



$tdataAPPLICATION[".showAddInPopup"] = false;

$tdataAPPLICATION[".showEditInPopup"] = false;

$tdataAPPLICATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPPLICATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPPLICATION[".fieldsForRegister"] = array();
	
$tdataAPPLICATION[".listAjax"] = false;

	$tdataAPPLICATION[".audit"] = true;

	$tdataAPPLICATION[".locking"] = false;

$tdataAPPLICATION[".edit"] = true;
$tdataAPPLICATION[".afterEditAction"] = 1;
$tdataAPPLICATION[".closePopupAfterEdit"] = 1;
$tdataAPPLICATION[".afterEditActionDetTable"] = "";

$tdataAPPLICATION[".add"] = true;
$tdataAPPLICATION[".afterAddAction"] = 1;
$tdataAPPLICATION[".closePopupAfterAdd"] = 1;
$tdataAPPLICATION[".afterAddActionDetTable"] = "";

$tdataAPPLICATION[".list"] = true;

$tdataAPPLICATION[".inlineEdit"] = true;


$tdataAPPLICATION[".reorderRecordsByHeader"] = true;
$tdataAPPLICATION[".createSortByDropdown"] = true;
$tdataAPPLICATION[".strSortControlSettingsJSON"] = "";



$tdataAPPLICATION[".inlineAdd"] = true;
$tdataAPPLICATION[".view"] = true;

$tdataAPPLICATION[".import"] = true;

$tdataAPPLICATION[".exportTo"] = true;

$tdataAPPLICATION[".printFriendly"] = true;

$tdataAPPLICATION[".delete"] = true;

$tdataAPPLICATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPPLICATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPPLICATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPPLICATION[".searchSaving"] = true;
//

$tdataAPPLICATION[".showSearchPanel"] = true;
		$tdataAPPLICATION[".flexibleSearch"] = true;

$tdataAPPLICATION[".isUseAjaxSuggest"] = true;

$tdataAPPLICATION[".rowHighlite"] = true;



				

$tdataAPPLICATION[".ajaxCodeSnippetAdded"] = false;

$tdataAPPLICATION[".buttonsAdded"] = false;

$tdataAPPLICATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPPLICATION[".isUseTimeForSearch"] = false;





$tdataAPPLICATION[".allSearchFields"] = array();
$tdataAPPLICATION[".filterFields"] = array();
$tdataAPPLICATION[".requiredSearchFields"] = array();

$tdataAPPLICATION[".allSearchFields"][] = "APP_UID";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_TITLE";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_DESCRIPTION";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_NUMBER";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_PARENT";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_STATUS";
	$tdataAPPLICATION[".allSearchFields"][] = "PRO_UID";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_PROC_STATUS";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_PROC_CODE";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_PARALLEL";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_INIT_USER";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_CUR_USER";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_INIT_DATE";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_DATA";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_PIN";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_DURATION";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_DELAY_DURATION";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_DRIVE_FOLDER_UID";
	$tdataAPPLICATION[".allSearchFields"][] = "APP_ROUTING_DATA";
	

$tdataAPPLICATION[".googleLikeFields"] = array();
$tdataAPPLICATION[".googleLikeFields"][] = "APP_UID";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_TITLE";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_PARENT";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_STATUS";
$tdataAPPLICATION[".googleLikeFields"][] = "PRO_UID";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_DATA";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_PIN";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_DURATION";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".googleLikeFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".panelSearchFields"] = array();
$tdataAPPLICATION[".searchPanelOptions"] = array();
$tdataAPPLICATION[".panelSearchFields"][] = "APP_UID";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_TITLE";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_DESCRIPTION";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_NUMBER";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_PARENT";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_STATUS";
	$tdataAPPLICATION[".panelSearchFields"][] = "PRO_UID";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_PROC_STATUS";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_PROC_CODE";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_PARALLEL";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_INIT_USER";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_CUR_USER";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_CREATE_DATE";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_INIT_DATE";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_UPDATE_DATE";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_DATA";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_PIN";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_DURATION";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_DELAY_DURATION";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_DRIVE_FOLDER_UID";
	$tdataAPPLICATION[".panelSearchFields"][] = "APP_ROUTING_DATA";
	
$tdataAPPLICATION[".advSearchFields"] = array();
$tdataAPPLICATION[".advSearchFields"][] = "APP_UID";
$tdataAPPLICATION[".advSearchFields"][] = "APP_TITLE";
$tdataAPPLICATION[".advSearchFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".advSearchFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".advSearchFields"][] = "APP_PARENT";
$tdataAPPLICATION[".advSearchFields"][] = "APP_STATUS";
$tdataAPPLICATION[".advSearchFields"][] = "PRO_UID";
$tdataAPPLICATION[".advSearchFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".advSearchFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".advSearchFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".advSearchFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".advSearchFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".advSearchFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".advSearchFields"][] = "APP_DATA";
$tdataAPPLICATION[".advSearchFields"][] = "APP_PIN";
$tdataAPPLICATION[".advSearchFields"][] = "APP_DURATION";
$tdataAPPLICATION[".advSearchFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".advSearchFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".advSearchFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".tableType"] = "list";

$tdataAPPLICATION[".printerPageOrientation"] = 0;
$tdataAPPLICATION[".nPrinterPageScale"] = 100;

$tdataAPPLICATION[".nPrinterSplitRecords"] = 40;

$tdataAPPLICATION[".nPrinterPDFSplitRecords"] = 40;



$tdataAPPLICATION[".geocodingEnabled"] = false;





$tdataAPPLICATION[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataAPPLICATION[".pageSize"] = 20;

$tdataAPPLICATION[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY APP_NUMBER DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPPLICATION[".strOrderBy"] = $tstrOrderBy;

$tdataAPPLICATION[".orderindexes"] = array();
$tdataAPPLICATION[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "APP_NUMBER");

$tdataAPPLICATION[".sqlHead"] = "SELECT APP_UID,  APP_TITLE,  APP_DESCRIPTION,  APP_NUMBER,  APP_PARENT,  APP_STATUS,  PRO_UID,  APP_PROC_STATUS,  APP_PROC_CODE,  APP_PARALLEL,  APP_INIT_USER,  APP_CUR_USER,  APP_CREATE_DATE,  APP_INIT_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_DATA,  APP_PIN,  APP_DURATION,  APP_DELAY_DURATION,  APP_DRIVE_FOLDER_UID,  APP_ROUTING_DATA";
$tdataAPPLICATION[".sqlFrom"] = "FROM APPLICATION";
$tdataAPPLICATION[".sqlWhereExpr"] = "";
$tdataAPPLICATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPPLICATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPPLICATION[".arrGroupsPerPage"] = $arrGPP;

$tdataAPPLICATION[".highlightSearchResults"] = true;

$tableKeysAPPLICATION = array();
$tableKeysAPPLICATION[] = "APP_UID";
$tdataAPPLICATION[".Keys"] = $tableKeysAPPLICATION;

$tdataAPPLICATION[".listFields"] = array();
$tdataAPPLICATION[".listFields"][] = "APP_UID";
$tdataAPPLICATION[".listFields"][] = "APP_TITLE";
$tdataAPPLICATION[".listFields"][] = "APP_DATA";
$tdataAPPLICATION[".listFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".listFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".listFields"][] = "APP_PARENT";
$tdataAPPLICATION[".listFields"][] = "APP_STATUS";
$tdataAPPLICATION[".listFields"][] = "PRO_UID";
$tdataAPPLICATION[".listFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".listFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".listFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".listFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".listFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".listFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".listFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".listFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".listFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".listFields"][] = "APP_PIN";
$tdataAPPLICATION[".listFields"][] = "APP_DURATION";
$tdataAPPLICATION[".listFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".listFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".listFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".hideMobileList"] = array();


$tdataAPPLICATION[".viewFields"] = array();
$tdataAPPLICATION[".viewFields"][] = "APP_UID";
$tdataAPPLICATION[".viewFields"][] = "APP_TITLE";
$tdataAPPLICATION[".viewFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".viewFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".viewFields"][] = "APP_PARENT";
$tdataAPPLICATION[".viewFields"][] = "APP_STATUS";
$tdataAPPLICATION[".viewFields"][] = "PRO_UID";
$tdataAPPLICATION[".viewFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".viewFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".viewFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".viewFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".viewFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".viewFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".viewFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".viewFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".viewFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".viewFields"][] = "APP_DATA";
$tdataAPPLICATION[".viewFields"][] = "APP_PIN";
$tdataAPPLICATION[".viewFields"][] = "APP_DURATION";
$tdataAPPLICATION[".viewFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".viewFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".viewFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".addFields"] = array();
$tdataAPPLICATION[".addFields"][] = "APP_UID";
$tdataAPPLICATION[".addFields"][] = "APP_TITLE";
$tdataAPPLICATION[".addFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".addFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".addFields"][] = "APP_PARENT";
$tdataAPPLICATION[".addFields"][] = "APP_STATUS";
$tdataAPPLICATION[".addFields"][] = "PRO_UID";
$tdataAPPLICATION[".addFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".addFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".addFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".addFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".addFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".addFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".addFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".addFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".addFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".addFields"][] = "APP_DATA";
$tdataAPPLICATION[".addFields"][] = "APP_PIN";
$tdataAPPLICATION[".addFields"][] = "APP_DURATION";
$tdataAPPLICATION[".addFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".addFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".addFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".masterListFields"] = array();
$tdataAPPLICATION[".masterListFields"][] = "APP_UID";
$tdataAPPLICATION[".masterListFields"][] = "APP_TITLE";
$tdataAPPLICATION[".masterListFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".masterListFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".masterListFields"][] = "APP_PARENT";
$tdataAPPLICATION[".masterListFields"][] = "APP_STATUS";
$tdataAPPLICATION[".masterListFields"][] = "PRO_UID";
$tdataAPPLICATION[".masterListFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".masterListFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".masterListFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".masterListFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".masterListFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".masterListFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".masterListFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".masterListFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".masterListFields"][] = "APP_DATA";
$tdataAPPLICATION[".masterListFields"][] = "APP_PIN";
$tdataAPPLICATION[".masterListFields"][] = "APP_DURATION";
$tdataAPPLICATION[".masterListFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".masterListFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".masterListFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".inlineAddFields"] = array();
$tdataAPPLICATION[".inlineAddFields"][] = "APP_UID";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_TITLE";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_DATA";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_PARENT";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_STATUS";
$tdataAPPLICATION[".inlineAddFields"][] = "PRO_UID";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_PIN";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_DURATION";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".inlineAddFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".editFields"] = array();
$tdataAPPLICATION[".editFields"][] = "APP_UID";
$tdataAPPLICATION[".editFields"][] = "APP_TITLE";
$tdataAPPLICATION[".editFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".editFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".editFields"][] = "APP_PARENT";
$tdataAPPLICATION[".editFields"][] = "APP_STATUS";
$tdataAPPLICATION[".editFields"][] = "PRO_UID";
$tdataAPPLICATION[".editFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".editFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".editFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".editFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".editFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".editFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".editFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".editFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".editFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".editFields"][] = "APP_DATA";
$tdataAPPLICATION[".editFields"][] = "APP_PIN";
$tdataAPPLICATION[".editFields"][] = "APP_DURATION";
$tdataAPPLICATION[".editFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".editFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".editFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".inlineEditFields"] = array();
$tdataAPPLICATION[".inlineEditFields"][] = "APP_UID";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_TITLE";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_DATA";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_PARENT";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_STATUS";
$tdataAPPLICATION[".inlineEditFields"][] = "PRO_UID";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_PIN";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_DURATION";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".inlineEditFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".updateSelectedFields"] = array();
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_UID";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_TITLE";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_PARENT";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPPLICATION[".updateSelectedFields"][] = "PRO_UID";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_DATA";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_PIN";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_DURATION";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".updateSelectedFields"][] = "APP_ROUTING_DATA";


$tdataAPPLICATION[".exportFields"] = array();
$tdataAPPLICATION[".exportFields"][] = "APP_UID";
$tdataAPPLICATION[".exportFields"][] = "APP_TITLE";
$tdataAPPLICATION[".exportFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".exportFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".exportFields"][] = "APP_PARENT";
$tdataAPPLICATION[".exportFields"][] = "APP_STATUS";
$tdataAPPLICATION[".exportFields"][] = "PRO_UID";
$tdataAPPLICATION[".exportFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".exportFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".exportFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".exportFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".exportFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".exportFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".exportFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".exportFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".exportFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".exportFields"][] = "APP_DATA";
$tdataAPPLICATION[".exportFields"][] = "APP_PIN";
$tdataAPPLICATION[".exportFields"][] = "APP_DURATION";
$tdataAPPLICATION[".exportFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".exportFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".exportFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".importFields"] = array();
$tdataAPPLICATION[".importFields"][] = "APP_UID";
$tdataAPPLICATION[".importFields"][] = "APP_TITLE";
$tdataAPPLICATION[".importFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".importFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".importFields"][] = "APP_PARENT";
$tdataAPPLICATION[".importFields"][] = "APP_STATUS";
$tdataAPPLICATION[".importFields"][] = "PRO_UID";
$tdataAPPLICATION[".importFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".importFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".importFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".importFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".importFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".importFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".importFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".importFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".importFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".importFields"][] = "APP_DATA";
$tdataAPPLICATION[".importFields"][] = "APP_PIN";
$tdataAPPLICATION[".importFields"][] = "APP_DURATION";
$tdataAPPLICATION[".importFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".importFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".importFields"][] = "APP_ROUTING_DATA";

$tdataAPPLICATION[".printFields"] = array();
$tdataAPPLICATION[".printFields"][] = "APP_UID";
$tdataAPPLICATION[".printFields"][] = "APP_TITLE";
$tdataAPPLICATION[".printFields"][] = "APP_DESCRIPTION";
$tdataAPPLICATION[".printFields"][] = "APP_NUMBER";
$tdataAPPLICATION[".printFields"][] = "APP_PARENT";
$tdataAPPLICATION[".printFields"][] = "APP_STATUS";
$tdataAPPLICATION[".printFields"][] = "PRO_UID";
$tdataAPPLICATION[".printFields"][] = "APP_PROC_STATUS";
$tdataAPPLICATION[".printFields"][] = "APP_PROC_CODE";
$tdataAPPLICATION[".printFields"][] = "APP_PARALLEL";
$tdataAPPLICATION[".printFields"][] = "APP_INIT_USER";
$tdataAPPLICATION[".printFields"][] = "APP_CUR_USER";
$tdataAPPLICATION[".printFields"][] = "APP_CREATE_DATE";
$tdataAPPLICATION[".printFields"][] = "APP_INIT_DATE";
$tdataAPPLICATION[".printFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION[".printFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION[".printFields"][] = "APP_DATA";
$tdataAPPLICATION[".printFields"][] = "APP_PIN";
$tdataAPPLICATION[".printFields"][] = "APP_DURATION";
$tdataAPPLICATION[".printFields"][] = "APP_DELAY_DURATION";
$tdataAPPLICATION[".printFields"][] = "APP_DRIVE_FOLDER_UID";
$tdataAPPLICATION[".printFields"][] = "APP_ROUTING_DATA";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_UID");
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




	$tdataAPPLICATION["APP_UID"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_TITLE");
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




	$tdataAPPLICATION["APP_TITLE"] = $fdata;
//	APP_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_DESCRIPTION";
	$fdata["GoodName"] = "APP_DESCRIPTION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_DESCRIPTION");
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




	$tdataAPPLICATION["APP_DESCRIPTION"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_NUMBER");
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




	$tdataAPPLICATION["APP_NUMBER"] = $fdata;
//	APP_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_PARENT";
	$fdata["GoodName"] = "APP_PARENT";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_PARENT");
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




	$tdataAPPLICATION["APP_PARENT"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_STATUS");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION["APP_STATUS"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","PRO_UID");
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION["PRO_UID"] = $fdata;
//	APP_PROC_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_PROC_STATUS";
	$fdata["GoodName"] = "APP_PROC_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_PROC_STATUS");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION["APP_PROC_STATUS"] = $fdata;
//	APP_PROC_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_PROC_CODE";
	$fdata["GoodName"] = "APP_PROC_CODE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_PROC_CODE");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION["APP_PROC_CODE"] = $fdata;
//	APP_PARALLEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_PARALLEL";
	$fdata["GoodName"] = "APP_PARALLEL";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_PARALLEL");
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




	$tdataAPPLICATION["APP_PARALLEL"] = $fdata;
//	APP_INIT_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_INIT_USER";
	$fdata["GoodName"] = "APP_INIT_USER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_INIT_USER");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION["APP_INIT_USER"] = $fdata;
//	APP_CUR_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_CUR_USER";
	$fdata["GoodName"] = "APP_CUR_USER";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_CUR_USER");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION["APP_CUR_USER"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_CREATE_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION["APP_CREATE_DATE"] = $fdata;
//	APP_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APP_INIT_DATE";
	$fdata["GoodName"] = "APP_INIT_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_INIT_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION["APP_INIT_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_FINISH_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION["APP_FINISH_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_UPDATE_DATE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION["APP_UPDATE_DATE"] = $fdata;
//	APP_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "APP_DATA";
	$fdata["GoodName"] = "APP_DATA";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_DATA");
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




	$tdataAPPLICATION["APP_DATA"] = $fdata;
//	APP_PIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_PIN";
	$fdata["GoodName"] = "APP_PIN";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_PIN");
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




	$tdataAPPLICATION["APP_PIN"] = $fdata;
//	APP_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_DURATION";
	$fdata["GoodName"] = "APP_DURATION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_DURATION");
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




	$tdataAPPLICATION["APP_DURATION"] = $fdata;
//	APP_DELAY_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APP_DELAY_DURATION";
	$fdata["GoodName"] = "APP_DELAY_DURATION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_DELAY_DURATION");
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




	$tdataAPPLICATION["APP_DELAY_DURATION"] = $fdata;
//	APP_DRIVE_FOLDER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APP_DRIVE_FOLDER_UID";
	$fdata["GoodName"] = "APP_DRIVE_FOLDER_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_DRIVE_FOLDER_UID");
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




	$tdataAPPLICATION["APP_DRIVE_FOLDER_UID"] = $fdata;
//	APP_ROUTING_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "APP_ROUTING_DATA";
	$fdata["GoodName"] = "APP_ROUTING_DATA";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION","APP_ROUTING_DATA");
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




	$tdataAPPLICATION["APP_ROUTING_DATA"] = $fdata;


$tables_data["APPLICATION"]=&$tdataAPPLICATION;
$field_labels["APPLICATION"] = &$fieldLabelsAPPLICATION;
$fieldToolTips["APPLICATION"] = &$fieldToolTipsAPPLICATION;
$placeHolders["APPLICATION"] = &$placeHoldersAPPLICATION;
$page_titles["APPLICATION"] = &$pageTitlesAPPLICATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APPLICATION"] = array();
//	APP_CACHE_VIEW
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_CACHE_VIEW";
		$detailsParam["dOriginalTable"] = "APP_CACHE_VIEW";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_CACHE_VIEW";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_CACHE_VIEW");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	APP_DELAY
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_DELAY";
		$detailsParam["dOriginalTable"] = "APP_DELAY";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_DELAY";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_DELAY");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	APP_DELEGATION
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_DELEGATION";
		$detailsParam["dOriginalTable"] = "APP_DELEGATION";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_DELEGATION";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_DELEGATION");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	APP_HISTORY
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_HISTORY";
		$detailsParam["dOriginalTable"] = "APP_HISTORY";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_HISTORY";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_HISTORY");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

			$detailsTablesData["APPLICATION"][$dIndex]["previewOnAdd"] = false;

		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	APP_NOTES
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_NOTES";
		$detailsParam["dOriginalTable"] = "APP_NOTES";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_NOTES";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_NOTES");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	APP_MESSAGE
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_MESSAGE";
		$detailsParam["dOriginalTable"] = "APP_MESSAGE";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_MESSAGE";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_MESSAGE");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	APP_CACHE_VIEW_INDEX
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="APP_CACHE_VIEW_INDEX";
		$detailsParam["dOriginalTable"] = "APP_CACHE_VIEW";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "APP_CACHE_VIEW_INDEX";
	$detailsParam["dCaptionTable"] = GetTableCaption("APP_CACHE_VIEW_INDEX");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";
//	PMT_ECCUBE
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_ECCUBE";
		$detailsParam["dOriginalTable"] = "PMT_ECCUBE";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_ECCUBE";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_ECCUBE");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["APPLICATION"][$dIndex] = $detailsParam;

	
		$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["masterKeys"][]="APP_UID";

				$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["APPLICATION"][$dIndex]["detailKeys"][]="APP_UID";

// tables which are master tables for current table (detail)
$masterTablesData["APPLICATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APPLICATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  APP_TITLE,  APP_DESCRIPTION,  APP_NUMBER,  APP_PARENT,  APP_STATUS,  PRO_UID,  APP_PROC_STATUS,  APP_PROC_CODE,  APP_PARALLEL,  APP_INIT_USER,  APP_CUR_USER,  APP_CREATE_DATE,  APP_INIT_DATE,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_DATA,  APP_PIN,  APP_DURATION,  APP_DELAY_DURATION,  APP_DRIVE_FOLDER_UID,  APP_ROUTING_DATA";
$proto0["m_strFrom"] = "FROM APPLICATION";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY APP_NUMBER DESC";
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
	"m_srcTableName" => "APPLICATION"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APPLICATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto8["m_sql"] = "APP_TITLE";
$proto8["m_srcTableName"] = "APPLICATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DESCRIPTION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto10["m_sql"] = "APP_DESCRIPTION";
$proto10["m_srcTableName"] = "APPLICATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto12["m_sql"] = "APP_NUMBER";
$proto12["m_srcTableName"] = "APPLICATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PARENT",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto14["m_sql"] = "APP_PARENT";
$proto14["m_srcTableName"] = "APPLICATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto16["m_sql"] = "APP_STATUS";
$proto16["m_srcTableName"] = "APPLICATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto18["m_sql"] = "PRO_UID";
$proto18["m_srcTableName"] = "APPLICATION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PROC_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto20["m_sql"] = "APP_PROC_STATUS";
$proto20["m_srcTableName"] = "APPLICATION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PROC_CODE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto22["m_sql"] = "APP_PROC_CODE";
$proto22["m_srcTableName"] = "APPLICATION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PARALLEL",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto24["m_sql"] = "APP_PARALLEL";
$proto24["m_srcTableName"] = "APPLICATION";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_INIT_USER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto26["m_sql"] = "APP_INIT_USER";
$proto26["m_srcTableName"] = "APPLICATION";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CUR_USER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto28["m_sql"] = "APP_CUR_USER";
$proto28["m_srcTableName"] = "APPLICATION";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto30["m_sql"] = "APP_CREATE_DATE";
$proto30["m_srcTableName"] = "APPLICATION";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_INIT_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto32["m_sql"] = "APP_INIT_DATE";
$proto32["m_srcTableName"] = "APPLICATION";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto34["m_sql"] = "APP_FINISH_DATE";
$proto34["m_srcTableName"] = "APPLICATION";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto36["m_sql"] = "APP_UPDATE_DATE";
$proto36["m_srcTableName"] = "APPLICATION";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DATA",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto38["m_sql"] = "APP_DATA";
$proto38["m_srcTableName"] = "APPLICATION";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PIN",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto40["m_sql"] = "APP_PIN";
$proto40["m_srcTableName"] = "APPLICATION";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DURATION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto42["m_sql"] = "APP_DURATION";
$proto42["m_srcTableName"] = "APPLICATION";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DELAY_DURATION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto44["m_sql"] = "APP_DELAY_DURATION";
$proto44["m_srcTableName"] = "APPLICATION";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DRIVE_FOLDER_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto46["m_sql"] = "APP_DRIVE_FOLDER_UID";
$proto46["m_srcTableName"] = "APPLICATION";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_ROUTING_DATA",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto48["m_sql"] = "APP_ROUTING_DATA";
$proto48["m_srcTableName"] = "APPLICATION";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "APPLICATION";
$proto51["m_srcTableName"] = "APPLICATION";
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
$proto50["m_srcTableName"] = "APPLICATION";
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
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="APPLICATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APPLICATION = createSqlQuery_APPLICATION();


	
						;

																						

$tdataAPPLICATION[".sqlquery"] = $queryData_APPLICATION;

$tableEvents["APPLICATION"] = new eventsBase;
$tdataAPPLICATION[".hasEvents"] = false;

?>
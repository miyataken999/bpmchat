<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_DOCUMENT = array();
	$tdataAPP_DOCUMENT[".truncateText"] = true;
	$tdataAPP_DOCUMENT[".NumberOfChars"] = 20;
	$tdataAPP_DOCUMENT[".ShortName"] = "APP_DOCUMENT";
	$tdataAPP_DOCUMENT[".OwnerID"] = "";
	$tdataAPP_DOCUMENT[".OriginalTable"] = "APP_DOCUMENT";

//	field labels
$fieldLabelsAPP_DOCUMENT = array();
$fieldToolTipsAPP_DOCUMENT = array();
$pageTitlesAPP_DOCUMENT = array();
$placeHoldersAPP_DOCUMENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_DOCUMENT["Japanese"] = array();
	$fieldToolTipsAPP_DOCUMENT["Japanese"] = array();
	$placeHoldersAPP_DOCUMENT["Japanese"] = array();
	$pageTitlesAPP_DOCUMENT["Japanese"] = array();
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_UID"] = "アプリのドキュメントのUID";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_UID"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["DOC_VERSION"] = "ドキュメントのバージョン";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["DOC_VERSION"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["DOC_VERSION"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["DOC_UID"] = "ドキュメントのUID";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["DOC_UID"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["DOC_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["USR_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_TYPE"] = "アプリのドキュメントタイプ";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_TYPE"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_TYPE"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_CREATE_DATE"] = "アプリのドキュメントは、日付を作成します";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_CREATE_DATE"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_CREATE_DATE"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_INDEX"] = "アプリのドキュメントのインデックス";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_INDEX"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_INDEX"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["FOLDER_UID"] = "フォルダのUID";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["FOLDER_UID"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["FOLDER_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_PLUGIN"] = "アプリのドキュメントプラグイン";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_PLUGIN"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_PLUGIN"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_TAGS"] = "アプリのドキュメントタグ";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_TAGS"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_TAGS"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_STATUS"] = "アプリのドキュメントのステータス";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_STATUS"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_STATUS"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_STATUS_DATE"] = "アプリのdocステータスの日付";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_STATUS_DATE"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_STATUS_DATE"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_FIELDNAME"] = "アプリのドキュメントのフィールド名";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_FIELDNAME"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_FIELDNAME"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_DRIVE_DOWNLOAD"] = "アプリのドキュメントドライブのダウンロード";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_DRIVE_DOWNLOAD"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_DRIVE_DOWNLOAD"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["SYNC_WITH_DRIVE"] = "ドライブと同期";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["SYNC_WITH_DRIVE"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["SYNC_WITH_DRIVE"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["SYNC_PERMISSIONS"] = "同期の権限";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["SYNC_PERMISSIONS"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["SYNC_PERMISSIONS"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_FILENAME"] = "APP DOC FILENAME";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_FILENAME"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_FILENAME"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_TITLE"] = "APP DOC TITLE";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_TITLE"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_TITLE"] = "";
	$fieldLabelsAPP_DOCUMENT["Japanese"]["APP_DOC_COMMENT"] = "APP DOC COMMENT";
	$fieldToolTipsAPP_DOCUMENT["Japanese"]["APP_DOC_COMMENT"] = "";
	$placeHoldersAPP_DOCUMENT["Japanese"]["APP_DOC_COMMENT"] = "";
	if (count($fieldToolTipsAPP_DOCUMENT["Japanese"]))
		$tdataAPP_DOCUMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_DOCUMENT["English"] = array();
	$fieldToolTipsAPP_DOCUMENT["English"] = array();
	$placeHoldersAPP_DOCUMENT["English"] = array();
	$pageTitlesAPP_DOCUMENT["English"] = array();
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_UID"] = "アプリのドキュメントのUID";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_UID"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["DOC_VERSION"] = "ドキュメントのバージョン";
	$fieldToolTipsAPP_DOCUMENT["English"]["DOC_VERSION"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["DOC_VERSION"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_UID"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_DOCUMENT["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["DOC_UID"] = "ドキュメントのUID";
	$fieldToolTipsAPP_DOCUMENT["English"]["DOC_UID"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["DOC_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_DOCUMENT["English"]["USR_UID"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["USR_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_TYPE"] = "アプリのドキュメントタイプ";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_TYPE"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_TYPE"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_CREATE_DATE"] = "アプリのドキュメントは、日付を作成します";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_CREATE_DATE"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_CREATE_DATE"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_INDEX"] = "アプリのドキュメントのインデックス";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_INDEX"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_INDEX"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["FOLDER_UID"] = "フォルダのUID";
	$fieldToolTipsAPP_DOCUMENT["English"]["FOLDER_UID"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["FOLDER_UID"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_PLUGIN"] = "アプリのドキュメントプラグイン";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_PLUGIN"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_PLUGIN"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_TAGS"] = "アプリのドキュメントタグ";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_TAGS"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_TAGS"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_STATUS"] = "アプリのドキュメントのステータス";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_STATUS"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_STATUS"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_STATUS_DATE"] = "アプリのdocステータスの日付";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_STATUS_DATE"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_STATUS_DATE"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_FIELDNAME"] = "アプリのドキュメントのフィールド名";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_FIELDNAME"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_FIELDNAME"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_DRIVE_DOWNLOAD"] = "アプリのドキュメントドライブのダウンロード";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_DRIVE_DOWNLOAD"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_DRIVE_DOWNLOAD"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["SYNC_WITH_DRIVE"] = "ドライブと同期";
	$fieldToolTipsAPP_DOCUMENT["English"]["SYNC_WITH_DRIVE"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["SYNC_WITH_DRIVE"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["SYNC_PERMISSIONS"] = "同期の権限";
	$fieldToolTipsAPP_DOCUMENT["English"]["SYNC_PERMISSIONS"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["SYNC_PERMISSIONS"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_FILENAME"] = "APP DOC FILENAME";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_FILENAME"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_FILENAME"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_TITLE"] = "APP DOC TITLE";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_TITLE"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_TITLE"] = "";
	$fieldLabelsAPP_DOCUMENT["English"]["APP_DOC_COMMENT"] = "APP DOC COMMENT";
	$fieldToolTipsAPP_DOCUMENT["English"]["APP_DOC_COMMENT"] = "";
	$placeHoldersAPP_DOCUMENT["English"]["APP_DOC_COMMENT"] = "";
	if (count($fieldToolTipsAPP_DOCUMENT["English"]))
		$tdataAPP_DOCUMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_DOCUMENT[""] = array();
	$fieldToolTipsAPP_DOCUMENT[""] = array();
	$placeHoldersAPP_DOCUMENT[""] = array();
	$pageTitlesAPP_DOCUMENT[""] = array();
	if (count($fieldToolTipsAPP_DOCUMENT[""]))
		$tdataAPP_DOCUMENT[".isUseToolTips"] = true;
}


	$tdataAPP_DOCUMENT[".NCSearch"] = true;



$tdataAPP_DOCUMENT[".shortTableName"] = "APP_DOCUMENT";
$tdataAPP_DOCUMENT[".nSecOptions"] = 0;
$tdataAPP_DOCUMENT[".recsPerRowPrint"] = 1;
$tdataAPP_DOCUMENT[".mainTableOwnerID"] = "";
$tdataAPP_DOCUMENT[".moveNext"] = 0;
$tdataAPP_DOCUMENT[".entityType"] = 0;

$tdataAPP_DOCUMENT[".strOriginalTableName"] = "APP_DOCUMENT";

	



$tdataAPP_DOCUMENT[".showAddInPopup"] = false;

$tdataAPP_DOCUMENT[".showEditInPopup"] = false;

$tdataAPP_DOCUMENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_DOCUMENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_DOCUMENT[".fieldsForRegister"] = array();
	
$tdataAPP_DOCUMENT[".listAjax"] = false;

	$tdataAPP_DOCUMENT[".audit"] = true;

	$tdataAPP_DOCUMENT[".locking"] = false;

$tdataAPP_DOCUMENT[".edit"] = true;
$tdataAPP_DOCUMENT[".afterEditAction"] = 1;
$tdataAPP_DOCUMENT[".closePopupAfterEdit"] = 1;
$tdataAPP_DOCUMENT[".afterEditActionDetTable"] = "";

$tdataAPP_DOCUMENT[".add"] = true;
$tdataAPP_DOCUMENT[".afterAddAction"] = 1;
$tdataAPP_DOCUMENT[".closePopupAfterAdd"] = 1;
$tdataAPP_DOCUMENT[".afterAddActionDetTable"] = "";

$tdataAPP_DOCUMENT[".list"] = true;

$tdataAPP_DOCUMENT[".inlineEdit"] = true;


$tdataAPP_DOCUMENT[".reorderRecordsByHeader"] = true;
$tdataAPP_DOCUMENT[".createSortByDropdown"] = true;
$tdataAPP_DOCUMENT[".strSortControlSettingsJSON"] = "";



$tdataAPP_DOCUMENT[".inlineAdd"] = true;
$tdataAPP_DOCUMENT[".view"] = true;

$tdataAPP_DOCUMENT[".import"] = true;

$tdataAPP_DOCUMENT[".exportTo"] = true;

$tdataAPP_DOCUMENT[".printFriendly"] = true;

$tdataAPP_DOCUMENT[".delete"] = true;

$tdataAPP_DOCUMENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_DOCUMENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_DOCUMENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_DOCUMENT[".searchSaving"] = false;
//

$tdataAPP_DOCUMENT[".showSearchPanel"] = true;
		$tdataAPP_DOCUMENT[".flexibleSearch"] = true;

$tdataAPP_DOCUMENT[".isUseAjaxSuggest"] = true;

$tdataAPP_DOCUMENT[".rowHighlite"] = true;



				

$tdataAPP_DOCUMENT[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_DOCUMENT[".buttonsAdded"] = false;

$tdataAPP_DOCUMENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_DOCUMENT[".isUseTimeForSearch"] = false;





$tdataAPP_DOCUMENT[".allSearchFields"] = array();
$tdataAPP_DOCUMENT[".filterFields"] = array();
$tdataAPP_DOCUMENT[".requiredSearchFields"] = array();

$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_UID";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "DOC_VERSION";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_UID";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "DOC_UID";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "USR_UID";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_TYPE";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_CREATE_DATE";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_INDEX";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "FOLDER_UID";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_PLUGIN";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_TAGS";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_STATUS";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_STATUS_DATE";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_FIELDNAME";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "SYNC_WITH_DRIVE";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "SYNC_PERMISSIONS";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_FILENAME";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_TITLE";
	$tdataAPP_DOCUMENT[".allSearchFields"][] = "APP_DOC_COMMENT";
	

$tdataAPP_DOCUMENT[".googleLikeFields"] = array();
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".googleLikeFields"][] = "APP_DOC_COMMENT";


$tdataAPP_DOCUMENT[".advSearchFields"] = array();
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".advSearchFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".tableType"] = "list";

$tdataAPP_DOCUMENT[".printerPageOrientation"] = 0;
$tdataAPP_DOCUMENT[".nPrinterPageScale"] = 100;

$tdataAPP_DOCUMENT[".nPrinterSplitRecords"] = 40;

$tdataAPP_DOCUMENT[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_DOCUMENT[".geocodingEnabled"] = false;





$tdataAPP_DOCUMENT[".listGridLayout"] = 3;


$tdataAPP_DOCUMENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_DOCUMENT[".pageSize"] = 20;

$tdataAPP_DOCUMENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_DOCUMENT[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_DOCUMENT[".orderindexes"] = array();

$tdataAPP_DOCUMENT[".sqlHead"] = "SELECT APP_DOC_UID,  	DOC_VERSION,  	APP_UID,  	DEL_INDEX,  	DOC_UID,  	USR_UID,  	APP_DOC_TYPE,  	APP_DOC_CREATE_DATE,  	APP_DOC_INDEX,  	FOLDER_UID,  	APP_DOC_PLUGIN,  	APP_DOC_TAGS,  	APP_DOC_STATUS,  	APP_DOC_STATUS_DATE,  	APP_DOC_FIELDNAME,  	APP_DOC_DRIVE_DOWNLOAD,  	SYNC_WITH_DRIVE,  	SYNC_PERMISSIONS,  	APP_DOC_FILENAME,  	APP_DOC_TITLE,  	APP_DOC_COMMENT";
$tdataAPP_DOCUMENT[".sqlFrom"] = "FROM APP_DOCUMENT";
$tdataAPP_DOCUMENT[".sqlWhereExpr"] = "";
$tdataAPP_DOCUMENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_DOCUMENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_DOCUMENT[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_DOCUMENT[".highlightSearchResults"] = true;

$tableKeysAPP_DOCUMENT = array();
$tableKeysAPP_DOCUMENT[] = "APP_DOC_UID";
$tableKeysAPP_DOCUMENT[] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".Keys"] = $tableKeysAPP_DOCUMENT;

$tdataAPP_DOCUMENT[".listFields"] = array();
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".listFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".listFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".listFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".listFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".listFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".listFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".listFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".listFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".hideMobileList"] = array();


$tdataAPP_DOCUMENT[".viewFields"] = array();
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".viewFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".viewFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".viewFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".viewFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".viewFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".viewFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".viewFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".viewFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".addFields"] = array();
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".addFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".addFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".addFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".addFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".addFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".addFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".addFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".addFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".masterListFields"] = array();
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".masterListFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".masterListFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".masterListFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".masterListFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".masterListFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".masterListFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".masterListFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".inlineAddFields"] = array();
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".inlineAddFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".editFields"] = array();
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".editFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".editFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".editFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".editFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".editFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".editFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".editFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".editFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".inlineEditFields"] = array();
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".inlineEditFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".updateSelectedFields"] = array();
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".updateSelectedFields"][] = "APP_DOC_COMMENT";


$tdataAPP_DOCUMENT[".exportFields"] = array();
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".exportFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".exportFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".exportFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".exportFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".exportFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".exportFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".exportFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".exportFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".importFields"] = array();
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".importFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".importFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".importFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".importFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".importFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".importFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".importFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".importFields"][] = "APP_DOC_COMMENT";

$tdataAPP_DOCUMENT[".printFields"] = array();
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_UID";
$tdataAPP_DOCUMENT[".printFields"][] = "DOC_VERSION";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_UID";
$tdataAPP_DOCUMENT[".printFields"][] = "DEL_INDEX";
$tdataAPP_DOCUMENT[".printFields"][] = "DOC_UID";
$tdataAPP_DOCUMENT[".printFields"][] = "USR_UID";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_TYPE";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_CREATE_DATE";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_INDEX";
$tdataAPP_DOCUMENT[".printFields"][] = "FOLDER_UID";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_PLUGIN";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_TAGS";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_STATUS";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_STATUS_DATE";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_FIELDNAME";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_DRIVE_DOWNLOAD";
$tdataAPP_DOCUMENT[".printFields"][] = "SYNC_WITH_DRIVE";
$tdataAPP_DOCUMENT[".printFields"][] = "SYNC_PERMISSIONS";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_FILENAME";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_TITLE";
$tdataAPP_DOCUMENT[".printFields"][] = "APP_DOC_COMMENT";

//	APP_DOC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_DOC_UID";
	$fdata["GoodName"] = "APP_DOC_UID";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_UID");
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

		$fdata["strField"] = "APP_DOC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_UID";

	
	
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




	$tdataAPP_DOCUMENT["APP_DOC_UID"] = $fdata;
//	DOC_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DOC_VERSION";
	$fdata["GoodName"] = "DOC_VERSION";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","DOC_VERSION");
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

		$fdata["strField"] = "DOC_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOC_VERSION";

	
	
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




	$tdataAPP_DOCUMENT["DOC_VERSION"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_UID");
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




	$tdataAPP_DOCUMENT["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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




	$tdataAPP_DOCUMENT["DEL_INDEX"] = $fdata;
//	DOC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DOC_UID";
	$fdata["GoodName"] = "DOC_UID";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","DOC_UID");
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

		$fdata["strField"] = "DOC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOC_UID";

	
	
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




	$tdataAPP_DOCUMENT["DOC_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","USR_UID");
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

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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




	$tdataAPP_DOCUMENT["USR_UID"] = $fdata;
//	APP_DOC_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_DOC_TYPE";
	$fdata["GoodName"] = "APP_DOC_TYPE";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_TYPE");
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

		$fdata["strField"] = "APP_DOC_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_TYPE";

	
	
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




	$tdataAPP_DOCUMENT["APP_DOC_TYPE"] = $fdata;
//	APP_DOC_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_DOC_CREATE_DATE";
	$fdata["GoodName"] = "APP_DOC_CREATE_DATE";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_CREATE_DATE");
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

		$fdata["strField"] = "APP_DOC_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_CREATE_DATE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_DOCUMENT["APP_DOC_CREATE_DATE"] = $fdata;
//	APP_DOC_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_DOC_INDEX";
	$fdata["GoodName"] = "APP_DOC_INDEX";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_INDEX");
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

		$fdata["strField"] = "APP_DOC_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_INDEX";

	
	
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




	$tdataAPP_DOCUMENT["APP_DOC_INDEX"] = $fdata;
//	FOLDER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FOLDER_UID";
	$fdata["GoodName"] = "FOLDER_UID";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","FOLDER_UID");
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

		$fdata["strField"] = "FOLDER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOLDER_UID";

	
	
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




	$tdataAPP_DOCUMENT["FOLDER_UID"] = $fdata;
//	APP_DOC_PLUGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_DOC_PLUGIN";
	$fdata["GoodName"] = "APP_DOC_PLUGIN";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_PLUGIN");
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

		$fdata["strField"] = "APP_DOC_PLUGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_PLUGIN";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataAPP_DOCUMENT["APP_DOC_PLUGIN"] = $fdata;
//	APP_DOC_TAGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_DOC_TAGS";
	$fdata["GoodName"] = "APP_DOC_TAGS";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_TAGS");
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

		$fdata["strField"] = "APP_DOC_TAGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_TAGS";

	
	
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




	$tdataAPP_DOCUMENT["APP_DOC_TAGS"] = $fdata;
//	APP_DOC_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "APP_DOC_STATUS";
	$fdata["GoodName"] = "APP_DOC_STATUS";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_STATUS");
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

		$fdata["strField"] = "APP_DOC_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_STATUS";

	
	
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




	$tdataAPP_DOCUMENT["APP_DOC_STATUS"] = $fdata;
//	APP_DOC_STATUS_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APP_DOC_STATUS_DATE";
	$fdata["GoodName"] = "APP_DOC_STATUS_DATE";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_STATUS_DATE");
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

		$fdata["strField"] = "APP_DOC_STATUS_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_STATUS_DATE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_DOCUMENT["APP_DOC_STATUS_DATE"] = $fdata;
//	APP_DOC_FIELDNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "APP_DOC_FIELDNAME";
	$fdata["GoodName"] = "APP_DOC_FIELDNAME";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_FIELDNAME");
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

		$fdata["strField"] = "APP_DOC_FIELDNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_FIELDNAME";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataAPP_DOCUMENT["APP_DOC_FIELDNAME"] = $fdata;
//	APP_DOC_DRIVE_DOWNLOAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "APP_DOC_DRIVE_DOWNLOAD";
	$fdata["GoodName"] = "APP_DOC_DRIVE_DOWNLOAD";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_DRIVE_DOWNLOAD");
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

		$fdata["strField"] = "APP_DOC_DRIVE_DOWNLOAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_DRIVE_DOWNLOAD";

	
	
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




	$tdataAPP_DOCUMENT["APP_DOC_DRIVE_DOWNLOAD"] = $fdata;
//	SYNC_WITH_DRIVE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SYNC_WITH_DRIVE";
	$fdata["GoodName"] = "SYNC_WITH_DRIVE";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","SYNC_WITH_DRIVE");
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

		$fdata["strField"] = "SYNC_WITH_DRIVE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYNC_WITH_DRIVE";

	
	
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




	$tdataAPP_DOCUMENT["SYNC_WITH_DRIVE"] = $fdata;
//	SYNC_PERMISSIONS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SYNC_PERMISSIONS";
	$fdata["GoodName"] = "SYNC_PERMISSIONS";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","SYNC_PERMISSIONS");
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

		$fdata["strField"] = "SYNC_PERMISSIONS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYNC_PERMISSIONS";

	
	
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




	$tdataAPP_DOCUMENT["SYNC_PERMISSIONS"] = $fdata;
//	APP_DOC_FILENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_DOC_FILENAME";
	$fdata["GoodName"] = "APP_DOC_FILENAME";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_FILENAME");
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

		$fdata["strField"] = "APP_DOC_FILENAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_FILENAME";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DOCUMENT["APP_DOC_FILENAME"] = $fdata;
//	APP_DOC_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APP_DOC_TITLE";
	$fdata["GoodName"] = "APP_DOC_TITLE";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_TITLE");
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

		$fdata["strField"] = "APP_DOC_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_TITLE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DOCUMENT["APP_DOC_TITLE"] = $fdata;
//	APP_DOC_COMMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APP_DOC_COMMENT";
	$fdata["GoodName"] = "APP_DOC_COMMENT";
	$fdata["ownerTable"] = "APP_DOCUMENT";
	$fdata["Label"] = GetFieldLabel("APP_DOCUMENT","APP_DOC_COMMENT");
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

		$fdata["strField"] = "APP_DOC_COMMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DOC_COMMENT";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_DOCUMENT["APP_DOC_COMMENT"] = $fdata;


$tables_data["APP_DOCUMENT"]=&$tdataAPP_DOCUMENT;
$field_labels["APP_DOCUMENT"] = &$fieldLabelsAPP_DOCUMENT;
$fieldToolTips["APP_DOCUMENT"] = &$fieldToolTipsAPP_DOCUMENT;
$placeHolders["APP_DOCUMENT"] = &$placeHoldersAPP_DOCUMENT;
$page_titles["APP_DOCUMENT"] = &$pageTitlesAPP_DOCUMENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_DOCUMENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_DOCUMENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_DOCUMENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_DOC_UID,  	DOC_VERSION,  	APP_UID,  	DEL_INDEX,  	DOC_UID,  	USR_UID,  	APP_DOC_TYPE,  	APP_DOC_CREATE_DATE,  	APP_DOC_INDEX,  	FOLDER_UID,  	APP_DOC_PLUGIN,  	APP_DOC_TAGS,  	APP_DOC_STATUS,  	APP_DOC_STATUS_DATE,  	APP_DOC_FIELDNAME,  	APP_DOC_DRIVE_DOWNLOAD,  	SYNC_WITH_DRIVE,  	SYNC_PERMISSIONS,  	APP_DOC_FILENAME,  	APP_DOC_TITLE,  	APP_DOC_COMMENT";
$proto0["m_strFrom"] = "FROM APP_DOCUMENT";
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
	"m_strName" => "APP_DOC_UID",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto6["m_sql"] = "APP_DOC_UID";
$proto6["m_srcTableName"] = "APP_DOCUMENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DOC_VERSION",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto8["m_sql"] = "DOC_VERSION";
$proto8["m_srcTableName"] = "APP_DOCUMENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto10["m_sql"] = "APP_UID";
$proto10["m_srcTableName"] = "APP_DOCUMENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto12["m_sql"] = "DEL_INDEX";
$proto12["m_srcTableName"] = "APP_DOCUMENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DOC_UID",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto14["m_sql"] = "DOC_UID";
$proto14["m_srcTableName"] = "APP_DOCUMENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto16["m_sql"] = "USR_UID";
$proto16["m_srcTableName"] = "APP_DOCUMENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_TYPE",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto18["m_sql"] = "APP_DOC_TYPE";
$proto18["m_srcTableName"] = "APP_DOCUMENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_CREATE_DATE",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto20["m_sql"] = "APP_DOC_CREATE_DATE";
$proto20["m_srcTableName"] = "APP_DOCUMENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_INDEX",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto22["m_sql"] = "APP_DOC_INDEX";
$proto22["m_srcTableName"] = "APP_DOCUMENT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FOLDER_UID",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto24["m_sql"] = "FOLDER_UID";
$proto24["m_srcTableName"] = "APP_DOCUMENT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_PLUGIN",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto26["m_sql"] = "APP_DOC_PLUGIN";
$proto26["m_srcTableName"] = "APP_DOCUMENT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_TAGS",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto28["m_sql"] = "APP_DOC_TAGS";
$proto28["m_srcTableName"] = "APP_DOCUMENT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_STATUS",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto30["m_sql"] = "APP_DOC_STATUS";
$proto30["m_srcTableName"] = "APP_DOCUMENT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_STATUS_DATE",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto32["m_sql"] = "APP_DOC_STATUS_DATE";
$proto32["m_srcTableName"] = "APP_DOCUMENT";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_FIELDNAME",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto34["m_sql"] = "APP_DOC_FIELDNAME";
$proto34["m_srcTableName"] = "APP_DOCUMENT";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_DRIVE_DOWNLOAD",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto36["m_sql"] = "APP_DOC_DRIVE_DOWNLOAD";
$proto36["m_srcTableName"] = "APP_DOCUMENT";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SYNC_WITH_DRIVE",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto38["m_sql"] = "SYNC_WITH_DRIVE";
$proto38["m_srcTableName"] = "APP_DOCUMENT";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SYNC_PERMISSIONS",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto40["m_sql"] = "SYNC_PERMISSIONS";
$proto40["m_srcTableName"] = "APP_DOCUMENT";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_FILENAME",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto42["m_sql"] = "APP_DOC_FILENAME";
$proto42["m_srcTableName"] = "APP_DOCUMENT";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_TITLE",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto44["m_sql"] = "APP_DOC_TITLE";
$proto44["m_srcTableName"] = "APP_DOCUMENT";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DOC_COMMENT",
	"m_strTable" => "APP_DOCUMENT",
	"m_srcTableName" => "APP_DOCUMENT"
));

$proto46["m_sql"] = "APP_DOC_COMMENT";
$proto46["m_srcTableName"] = "APP_DOCUMENT";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "APP_DOCUMENT";
$proto49["m_srcTableName"] = "APP_DOCUMENT";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "APP_DOC_UID";
$proto49["m_columns"][] = "DOC_VERSION";
$proto49["m_columns"][] = "APP_UID";
$proto49["m_columns"][] = "DEL_INDEX";
$proto49["m_columns"][] = "DOC_UID";
$proto49["m_columns"][] = "USR_UID";
$proto49["m_columns"][] = "APP_DOC_TYPE";
$proto49["m_columns"][] = "APP_DOC_CREATE_DATE";
$proto49["m_columns"][] = "APP_DOC_INDEX";
$proto49["m_columns"][] = "FOLDER_UID";
$proto49["m_columns"][] = "APP_DOC_PLUGIN";
$proto49["m_columns"][] = "APP_DOC_TAGS";
$proto49["m_columns"][] = "APP_DOC_STATUS";
$proto49["m_columns"][] = "APP_DOC_STATUS_DATE";
$proto49["m_columns"][] = "APP_DOC_FIELDNAME";
$proto49["m_columns"][] = "APP_DOC_DRIVE_DOWNLOAD";
$proto49["m_columns"][] = "SYNC_WITH_DRIVE";
$proto49["m_columns"][] = "SYNC_PERMISSIONS";
$proto49["m_columns"][] = "APP_DOC_FILENAME";
$proto49["m_columns"][] = "APP_DOC_TITLE";
$proto49["m_columns"][] = "APP_DOC_COMMENT";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "APP_DOCUMENT";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "APP_DOCUMENT";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_DOCUMENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_DOCUMENT = createSqlQuery_APP_DOCUMENT();


	
						;

																					

$tdataAPP_DOCUMENT[".sqlquery"] = $queryData_APP_DOCUMENT;

$tableEvents["APP_DOCUMENT"] = new eventsBase;
$tdataAPP_DOCUMENT[".hasEvents"] = false;

?>
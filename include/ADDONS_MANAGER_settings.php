<?php
require_once(getabspath("classes/cipherer.php"));




$tdataADDONS_MANAGER = array();
	$tdataADDONS_MANAGER[".truncateText"] = true;
	$tdataADDONS_MANAGER[".NumberOfChars"] = 20;
	$tdataADDONS_MANAGER[".ShortName"] = "ADDONS_MANAGER";
	$tdataADDONS_MANAGER[".OwnerID"] = "";
	$tdataADDONS_MANAGER[".OriginalTable"] = "ADDONS_MANAGER";

//	field labels
$fieldLabelsADDONS_MANAGER = array();
$fieldToolTipsADDONS_MANAGER = array();
$pageTitlesADDONS_MANAGER = array();
$placeHoldersADDONS_MANAGER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsADDONS_MANAGER["Japanese"] = array();
	$fieldToolTipsADDONS_MANAGER["Japanese"] = array();
	$placeHoldersADDONS_MANAGER["Japanese"] = array();
	$pageTitlesADDONS_MANAGER["Japanese"] = array();
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_ID"] = "アドオンID";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_ID"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_ID"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["STORE_ID"] = "ストアID";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["STORE_ID"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["STORE_ID"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_NAME"] = "アドオン名";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_NAME"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_NAME"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_NICK"] = "アドオン";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_NICK"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_NICK"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_FILENAME"] = "アドオンのダウンロードファイル名";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_FILENAME"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_FILENAME"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_DESCRIPTION"] = "アドオンの説明";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_DESCRIPTION"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_DESCRIPTION"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_STATE"] = "アドオンの状態";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_STATE"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_STATE"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_STATE_CHANGED"] = "アドオンの状態が変化します";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_STATE_CHANGED"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_STATE_CHANGED"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_STATUS"] = "アドオンのステータス";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_STATUS"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_STATUS"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_VERSION"] = "アドオンのバージョン";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_VERSION"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_VERSION"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_TYPE"] = "アドオンタイプ";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_TYPE"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_TYPE"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_PUBLISHER"] = "アドオンの出版社";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_PUBLISHER"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_PUBLISHER"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_RELEASE_DATE"] = "アドオンのリリース日";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_RELEASE_DATE"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_RELEASE_DATE"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_RELEASE_TYPE"] = "アドオンリリースタイプ";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_RELEASE_TYPE"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_RELEASE_TYPE"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_RELEASE_NOTES"] = "アドオンのリリースノート";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_RELEASE_NOTES"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_RELEASE_NOTES"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_URL"] = "アドオンのダウンロードURL";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_URL"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_URL"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_PROGRESS"] = "アドオンのダウンロードの進行状況";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_PROGRESS"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_PROGRESS"] = "";
	$fieldLabelsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_MD5"] = "アドオンのダウンロードMD5";
	$fieldToolTipsADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_MD5"] = "";
	$placeHoldersADDONS_MANAGER["Japanese"]["ADDON_DOWNLOAD_MD5"] = "";
	if (count($fieldToolTipsADDONS_MANAGER["Japanese"]))
		$tdataADDONS_MANAGER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsADDONS_MANAGER["English"] = array();
	$fieldToolTipsADDONS_MANAGER["English"] = array();
	$placeHoldersADDONS_MANAGER["English"] = array();
	$pageTitlesADDONS_MANAGER["English"] = array();
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_ID"] = "アドオンID";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_ID"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_ID"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["STORE_ID"] = "ストアID";
	$fieldToolTipsADDONS_MANAGER["English"]["STORE_ID"] = "";
	$placeHoldersADDONS_MANAGER["English"]["STORE_ID"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_NAME"] = "アドオン名";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_NAME"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_NAME"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_NICK"] = "アドオン";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_NICK"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_NICK"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_FILENAME"] = "アドオンのダウンロードファイル名";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_FILENAME"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_DOWNLOAD_FILENAME"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_DESCRIPTION"] = "アドオンの説明";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_DESCRIPTION"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_DESCRIPTION"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_STATE"] = "アドオンの状態";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_STATE"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_STATE"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_STATE_CHANGED"] = "アドオンの状態が変化します";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_STATE_CHANGED"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_STATE_CHANGED"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_STATUS"] = "アドオンのステータス";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_STATUS"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_STATUS"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_VERSION"] = "アドオンのバージョン";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_VERSION"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_VERSION"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_TYPE"] = "アドオンタイプ";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_TYPE"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_TYPE"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_PUBLISHER"] = "アドオンの出版社";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_PUBLISHER"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_PUBLISHER"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_RELEASE_DATE"] = "アドオンのリリース日";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_RELEASE_DATE"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_RELEASE_DATE"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_RELEASE_TYPE"] = "アドオンリリースタイプ";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_RELEASE_TYPE"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_RELEASE_TYPE"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_RELEASE_NOTES"] = "アドオンのリリースノート";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_RELEASE_NOTES"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_RELEASE_NOTES"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_URL"] = "アドオンのダウンロードURL";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_URL"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_DOWNLOAD_URL"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_PROGRESS"] = "アドオンのダウンロードの進行状況";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_PROGRESS"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_DOWNLOAD_PROGRESS"] = "";
	$fieldLabelsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_MD5"] = "アドオンのダウンロードMD5";
	$fieldToolTipsADDONS_MANAGER["English"]["ADDON_DOWNLOAD_MD5"] = "";
	$placeHoldersADDONS_MANAGER["English"]["ADDON_DOWNLOAD_MD5"] = "";
	if (count($fieldToolTipsADDONS_MANAGER["English"]))
		$tdataADDONS_MANAGER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsADDONS_MANAGER[""] = array();
	$fieldToolTipsADDONS_MANAGER[""] = array();
	$placeHoldersADDONS_MANAGER[""] = array();
	$pageTitlesADDONS_MANAGER[""] = array();
	if (count($fieldToolTipsADDONS_MANAGER[""]))
		$tdataADDONS_MANAGER[".isUseToolTips"] = true;
}


	$tdataADDONS_MANAGER[".NCSearch"] = true;



$tdataADDONS_MANAGER[".shortTableName"] = "ADDONS_MANAGER";
$tdataADDONS_MANAGER[".nSecOptions"] = 0;
$tdataADDONS_MANAGER[".recsPerRowPrint"] = 1;
$tdataADDONS_MANAGER[".mainTableOwnerID"] = "";
$tdataADDONS_MANAGER[".moveNext"] = 0;
$tdataADDONS_MANAGER[".entityType"] = 0;

$tdataADDONS_MANAGER[".strOriginalTableName"] = "ADDONS_MANAGER";

	



$tdataADDONS_MANAGER[".showAddInPopup"] = false;

$tdataADDONS_MANAGER[".showEditInPopup"] = false;

$tdataADDONS_MANAGER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataADDONS_MANAGER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataADDONS_MANAGER[".fieldsForRegister"] = array();
	
$tdataADDONS_MANAGER[".listAjax"] = false;

	$tdataADDONS_MANAGER[".audit"] = true;

	$tdataADDONS_MANAGER[".locking"] = false;

$tdataADDONS_MANAGER[".edit"] = true;
$tdataADDONS_MANAGER[".afterEditAction"] = 1;
$tdataADDONS_MANAGER[".closePopupAfterEdit"] = 1;
$tdataADDONS_MANAGER[".afterEditActionDetTable"] = "";

$tdataADDONS_MANAGER[".add"] = true;
$tdataADDONS_MANAGER[".afterAddAction"] = 1;
$tdataADDONS_MANAGER[".closePopupAfterAdd"] = 1;
$tdataADDONS_MANAGER[".afterAddActionDetTable"] = "";

$tdataADDONS_MANAGER[".list"] = true;

$tdataADDONS_MANAGER[".inlineEdit"] = true;


$tdataADDONS_MANAGER[".reorderRecordsByHeader"] = true;
$tdataADDONS_MANAGER[".createSortByDropdown"] = true;
$tdataADDONS_MANAGER[".strSortControlSettingsJSON"] = "";



$tdataADDONS_MANAGER[".inlineAdd"] = true;
$tdataADDONS_MANAGER[".view"] = true;

$tdataADDONS_MANAGER[".import"] = true;

$tdataADDONS_MANAGER[".exportTo"] = true;

$tdataADDONS_MANAGER[".printFriendly"] = true;

$tdataADDONS_MANAGER[".delete"] = true;

$tdataADDONS_MANAGER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataADDONS_MANAGER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataADDONS_MANAGER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataADDONS_MANAGER[".searchSaving"] = false;
//

$tdataADDONS_MANAGER[".showSearchPanel"] = true;
		$tdataADDONS_MANAGER[".flexibleSearch"] = true;

$tdataADDONS_MANAGER[".isUseAjaxSuggest"] = true;

$tdataADDONS_MANAGER[".rowHighlite"] = true;



				

$tdataADDONS_MANAGER[".ajaxCodeSnippetAdded"] = false;

$tdataADDONS_MANAGER[".buttonsAdded"] = false;

$tdataADDONS_MANAGER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataADDONS_MANAGER[".isUseTimeForSearch"] = false;





$tdataADDONS_MANAGER[".allSearchFields"] = array();
$tdataADDONS_MANAGER[".filterFields"] = array();
$tdataADDONS_MANAGER[".requiredSearchFields"] = array();

$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_ID";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "STORE_ID";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_NAME";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_NICK";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_DOWNLOAD_FILENAME";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_DESCRIPTION";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_STATE";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_STATE_CHANGED";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_STATUS";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_VERSION";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_TYPE";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_PUBLISHER";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_RELEASE_DATE";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_RELEASE_TYPE";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_RELEASE_NOTES";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_DOWNLOAD_URL";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_DOWNLOAD_PROGRESS";
	$tdataADDONS_MANAGER[".allSearchFields"][] = "ADDON_DOWNLOAD_MD5";
	

$tdataADDONS_MANAGER[".googleLikeFields"] = array();
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".googleLikeFields"][] = "ADDON_DOWNLOAD_MD5";


$tdataADDONS_MANAGER[".advSearchFields"] = array();
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".advSearchFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".advSearchFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".tableType"] = "list";

$tdataADDONS_MANAGER[".printerPageOrientation"] = 0;
$tdataADDONS_MANAGER[".nPrinterPageScale"] = 100;

$tdataADDONS_MANAGER[".nPrinterSplitRecords"] = 40;

$tdataADDONS_MANAGER[".nPrinterPDFSplitRecords"] = 40;



$tdataADDONS_MANAGER[".geocodingEnabled"] = false;





$tdataADDONS_MANAGER[".listGridLayout"] = 3;


$tdataADDONS_MANAGER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataADDONS_MANAGER[".pageSize"] = 20;

$tdataADDONS_MANAGER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataADDONS_MANAGER[".strOrderBy"] = $tstrOrderBy;

$tdataADDONS_MANAGER[".orderindexes"] = array();

$tdataADDONS_MANAGER[".sqlHead"] = "SELECT ADDON_ID,  	STORE_ID,  	ADDON_NAME,  	ADDON_NICK,  	ADDON_DOWNLOAD_FILENAME,  	ADDON_DESCRIPTION,  	ADDON_STATE,  	ADDON_STATE_CHANGED,  	ADDON_STATUS,  	ADDON_VERSION,  	ADDON_TYPE,  	ADDON_PUBLISHER,  	ADDON_RELEASE_DATE,  	ADDON_RELEASE_TYPE,  	ADDON_RELEASE_NOTES,  	ADDON_DOWNLOAD_URL,  	ADDON_DOWNLOAD_PROGRESS,  	ADDON_DOWNLOAD_MD5";
$tdataADDONS_MANAGER[".sqlFrom"] = "FROM ADDONS_MANAGER";
$tdataADDONS_MANAGER[".sqlWhereExpr"] = "";
$tdataADDONS_MANAGER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataADDONS_MANAGER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataADDONS_MANAGER[".arrGroupsPerPage"] = $arrGPP;

$tdataADDONS_MANAGER[".highlightSearchResults"] = true;

$tableKeysADDONS_MANAGER = array();
$tableKeysADDONS_MANAGER[] = "ADDON_ID";
$tableKeysADDONS_MANAGER[] = "STORE_ID";
$tdataADDONS_MANAGER[".Keys"] = $tableKeysADDONS_MANAGER;

$tdataADDONS_MANAGER[".listFields"] = array();
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".listFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".listFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".hideMobileList"] = array();


$tdataADDONS_MANAGER[".viewFields"] = array();
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".viewFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".viewFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".addFields"] = array();
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".addFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".addFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".masterListFields"] = array();
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".masterListFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".masterListFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".inlineAddFields"] = array();
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".inlineAddFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".editFields"] = array();
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".editFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".editFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".inlineEditFields"] = array();
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".inlineEditFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".updateSelectedFields"] = array();
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".updateSelectedFields"][] = "ADDON_DOWNLOAD_MD5";


$tdataADDONS_MANAGER[".exportFields"] = array();
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".exportFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".exportFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".importFields"] = array();
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".importFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".importFields"][] = "ADDON_DOWNLOAD_MD5";

$tdataADDONS_MANAGER[".printFields"] = array();
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_ID";
$tdataADDONS_MANAGER[".printFields"][] = "STORE_ID";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_NAME";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_NICK";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_DOWNLOAD_FILENAME";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_DESCRIPTION";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_STATE";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_STATE_CHANGED";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_STATUS";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_VERSION";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_TYPE";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_PUBLISHER";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_RELEASE_DATE";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_RELEASE_TYPE";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_RELEASE_NOTES";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_DOWNLOAD_URL";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_DOWNLOAD_PROGRESS";
$tdataADDONS_MANAGER[".printFields"][] = "ADDON_DOWNLOAD_MD5";

//	ADDON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ADDON_ID";
	$fdata["GoodName"] = "ADDON_ID";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_ID");
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

		$fdata["strField"] = "ADDON_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_ID";

	
	
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




	$tdataADDONS_MANAGER["ADDON_ID"] = $fdata;
//	STORE_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "STORE_ID";
	$fdata["GoodName"] = "STORE_ID";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","STORE_ID");
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

		$fdata["strField"] = "STORE_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STORE_ID";

	
	
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




	$tdataADDONS_MANAGER["STORE_ID"] = $fdata;
//	ADDON_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ADDON_NAME";
	$fdata["GoodName"] = "ADDON_NAME";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_NAME");
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

		$fdata["strField"] = "ADDON_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_NAME";

	
	
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




	$tdataADDONS_MANAGER["ADDON_NAME"] = $fdata;
//	ADDON_NICK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ADDON_NICK";
	$fdata["GoodName"] = "ADDON_NICK";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_NICK");
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

		$fdata["strField"] = "ADDON_NICK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_NICK";

	
	
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




	$tdataADDONS_MANAGER["ADDON_NICK"] = $fdata;
//	ADDON_DOWNLOAD_FILENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ADDON_DOWNLOAD_FILENAME";
	$fdata["GoodName"] = "ADDON_DOWNLOAD_FILENAME";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_DOWNLOAD_FILENAME");
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

		$fdata["strField"] = "ADDON_DOWNLOAD_FILENAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_DOWNLOAD_FILENAME";

	
	
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
			$edata["EditParams"].= " maxlength=1024";

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




	$tdataADDONS_MANAGER["ADDON_DOWNLOAD_FILENAME"] = $fdata;
//	ADDON_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ADDON_DESCRIPTION";
	$fdata["GoodName"] = "ADDON_DESCRIPTION";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_DESCRIPTION");
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

		$fdata["strField"] = "ADDON_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_DESCRIPTION";

	
	
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
			$edata["EditParams"].= " maxlength=2048";

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




	$tdataADDONS_MANAGER["ADDON_DESCRIPTION"] = $fdata;
//	ADDON_STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ADDON_STATE";
	$fdata["GoodName"] = "ADDON_STATE";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_STATE");
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

		$fdata["strField"] = "ADDON_STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_STATE";

	
	
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




	$tdataADDONS_MANAGER["ADDON_STATE"] = $fdata;
//	ADDON_STATE_CHANGED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ADDON_STATE_CHANGED";
	$fdata["GoodName"] = "ADDON_STATE_CHANGED";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_STATE_CHANGED");
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

		$fdata["strField"] = "ADDON_STATE_CHANGED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_STATE_CHANGED";

	
	
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




	$tdataADDONS_MANAGER["ADDON_STATE_CHANGED"] = $fdata;
//	ADDON_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ADDON_STATUS";
	$fdata["GoodName"] = "ADDON_STATUS";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_STATUS");
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

		$fdata["strField"] = "ADDON_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_STATUS";

	
	
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




	$tdataADDONS_MANAGER["ADDON_STATUS"] = $fdata;
//	ADDON_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ADDON_VERSION";
	$fdata["GoodName"] = "ADDON_VERSION";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_VERSION");
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

		$fdata["strField"] = "ADDON_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_VERSION";

	
	
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




	$tdataADDONS_MANAGER["ADDON_VERSION"] = $fdata;
//	ADDON_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ADDON_TYPE";
	$fdata["GoodName"] = "ADDON_TYPE";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_TYPE");
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

		$fdata["strField"] = "ADDON_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_TYPE";

	
	
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




	$tdataADDONS_MANAGER["ADDON_TYPE"] = $fdata;
//	ADDON_PUBLISHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ADDON_PUBLISHER";
	$fdata["GoodName"] = "ADDON_PUBLISHER";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_PUBLISHER");
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

		$fdata["strField"] = "ADDON_PUBLISHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_PUBLISHER";

	
	
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




	$tdataADDONS_MANAGER["ADDON_PUBLISHER"] = $fdata;
//	ADDON_RELEASE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ADDON_RELEASE_DATE";
	$fdata["GoodName"] = "ADDON_RELEASE_DATE";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_RELEASE_DATE");
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

		$fdata["strField"] = "ADDON_RELEASE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_RELEASE_DATE";

	
	
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




	$tdataADDONS_MANAGER["ADDON_RELEASE_DATE"] = $fdata;
//	ADDON_RELEASE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ADDON_RELEASE_TYPE";
	$fdata["GoodName"] = "ADDON_RELEASE_TYPE";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_RELEASE_TYPE");
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

		$fdata["strField"] = "ADDON_RELEASE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_RELEASE_TYPE";

	
	
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




	$tdataADDONS_MANAGER["ADDON_RELEASE_TYPE"] = $fdata;
//	ADDON_RELEASE_NOTES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ADDON_RELEASE_NOTES";
	$fdata["GoodName"] = "ADDON_RELEASE_NOTES";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_RELEASE_NOTES");
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

		$fdata["strField"] = "ADDON_RELEASE_NOTES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_RELEASE_NOTES";

	
	
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




	$tdataADDONS_MANAGER["ADDON_RELEASE_NOTES"] = $fdata;
//	ADDON_DOWNLOAD_URL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ADDON_DOWNLOAD_URL";
	$fdata["GoodName"] = "ADDON_DOWNLOAD_URL";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_DOWNLOAD_URL");
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

		$fdata["strField"] = "ADDON_DOWNLOAD_URL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_DOWNLOAD_URL";

	
	
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
			$edata["EditParams"].= " maxlength=2048";

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




	$tdataADDONS_MANAGER["ADDON_DOWNLOAD_URL"] = $fdata;
//	ADDON_DOWNLOAD_PROGRESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ADDON_DOWNLOAD_PROGRESS";
	$fdata["GoodName"] = "ADDON_DOWNLOAD_PROGRESS";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_DOWNLOAD_PROGRESS");
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

		$fdata["strField"] = "ADDON_DOWNLOAD_PROGRESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_DOWNLOAD_PROGRESS";

	
	
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




	$tdataADDONS_MANAGER["ADDON_DOWNLOAD_PROGRESS"] = $fdata;
//	ADDON_DOWNLOAD_MD5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ADDON_DOWNLOAD_MD5";
	$fdata["GoodName"] = "ADDON_DOWNLOAD_MD5";
	$fdata["ownerTable"] = "ADDONS_MANAGER";
	$fdata["Label"] = GetFieldLabel("ADDONS_MANAGER","ADDON_DOWNLOAD_MD5");
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

		$fdata["strField"] = "ADDON_DOWNLOAD_MD5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDON_DOWNLOAD_MD5";

	
	
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




	$tdataADDONS_MANAGER["ADDON_DOWNLOAD_MD5"] = $fdata;


$tables_data["ADDONS_MANAGER"]=&$tdataADDONS_MANAGER;
$field_labels["ADDONS_MANAGER"] = &$fieldLabelsADDONS_MANAGER;
$fieldToolTips["ADDONS_MANAGER"] = &$fieldToolTipsADDONS_MANAGER;
$placeHolders["ADDONS_MANAGER"] = &$placeHoldersADDONS_MANAGER;
$page_titles["ADDONS_MANAGER"] = &$pageTitlesADDONS_MANAGER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ADDONS_MANAGER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ADDONS_MANAGER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ADDONS_MANAGER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ADDON_ID,  	STORE_ID,  	ADDON_NAME,  	ADDON_NICK,  	ADDON_DOWNLOAD_FILENAME,  	ADDON_DESCRIPTION,  	ADDON_STATE,  	ADDON_STATE_CHANGED,  	ADDON_STATUS,  	ADDON_VERSION,  	ADDON_TYPE,  	ADDON_PUBLISHER,  	ADDON_RELEASE_DATE,  	ADDON_RELEASE_TYPE,  	ADDON_RELEASE_NOTES,  	ADDON_DOWNLOAD_URL,  	ADDON_DOWNLOAD_PROGRESS,  	ADDON_DOWNLOAD_MD5";
$proto0["m_strFrom"] = "FROM ADDONS_MANAGER";
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
	"m_strName" => "ADDON_ID",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto6["m_sql"] = "ADDON_ID";
$proto6["m_srcTableName"] = "ADDONS_MANAGER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "STORE_ID",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto8["m_sql"] = "STORE_ID";
$proto8["m_srcTableName"] = "ADDONS_MANAGER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_NAME",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto10["m_sql"] = "ADDON_NAME";
$proto10["m_srcTableName"] = "ADDONS_MANAGER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_NICK",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto12["m_sql"] = "ADDON_NICK";
$proto12["m_srcTableName"] = "ADDONS_MANAGER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_DOWNLOAD_FILENAME",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto14["m_sql"] = "ADDON_DOWNLOAD_FILENAME";
$proto14["m_srcTableName"] = "ADDONS_MANAGER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_DESCRIPTION",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto16["m_sql"] = "ADDON_DESCRIPTION";
$proto16["m_srcTableName"] = "ADDONS_MANAGER";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_STATE",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto18["m_sql"] = "ADDON_STATE";
$proto18["m_srcTableName"] = "ADDONS_MANAGER";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_STATE_CHANGED",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto20["m_sql"] = "ADDON_STATE_CHANGED";
$proto20["m_srcTableName"] = "ADDONS_MANAGER";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_STATUS",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto22["m_sql"] = "ADDON_STATUS";
$proto22["m_srcTableName"] = "ADDONS_MANAGER";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_VERSION",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto24["m_sql"] = "ADDON_VERSION";
$proto24["m_srcTableName"] = "ADDONS_MANAGER";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_TYPE",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto26["m_sql"] = "ADDON_TYPE";
$proto26["m_srcTableName"] = "ADDONS_MANAGER";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_PUBLISHER",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto28["m_sql"] = "ADDON_PUBLISHER";
$proto28["m_srcTableName"] = "ADDONS_MANAGER";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_RELEASE_DATE",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto30["m_sql"] = "ADDON_RELEASE_DATE";
$proto30["m_srcTableName"] = "ADDONS_MANAGER";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_RELEASE_TYPE",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto32["m_sql"] = "ADDON_RELEASE_TYPE";
$proto32["m_srcTableName"] = "ADDONS_MANAGER";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_RELEASE_NOTES",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto34["m_sql"] = "ADDON_RELEASE_NOTES";
$proto34["m_srcTableName"] = "ADDONS_MANAGER";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_DOWNLOAD_URL",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto36["m_sql"] = "ADDON_DOWNLOAD_URL";
$proto36["m_srcTableName"] = "ADDONS_MANAGER";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_DOWNLOAD_PROGRESS",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto38["m_sql"] = "ADDON_DOWNLOAD_PROGRESS";
$proto38["m_srcTableName"] = "ADDONS_MANAGER";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDON_DOWNLOAD_MD5",
	"m_strTable" => "ADDONS_MANAGER",
	"m_srcTableName" => "ADDONS_MANAGER"
));

$proto40["m_sql"] = "ADDON_DOWNLOAD_MD5";
$proto40["m_srcTableName"] = "ADDONS_MANAGER";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "ADDONS_MANAGER";
$proto43["m_srcTableName"] = "ADDONS_MANAGER";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ADDON_ID";
$proto43["m_columns"][] = "STORE_ID";
$proto43["m_columns"][] = "ADDON_NAME";
$proto43["m_columns"][] = "ADDON_NICK";
$proto43["m_columns"][] = "ADDON_DOWNLOAD_FILENAME";
$proto43["m_columns"][] = "ADDON_DESCRIPTION";
$proto43["m_columns"][] = "ADDON_STATE";
$proto43["m_columns"][] = "ADDON_STATE_CHANGED";
$proto43["m_columns"][] = "ADDON_STATUS";
$proto43["m_columns"][] = "ADDON_VERSION";
$proto43["m_columns"][] = "ADDON_TYPE";
$proto43["m_columns"][] = "ADDON_PUBLISHER";
$proto43["m_columns"][] = "ADDON_RELEASE_DATE";
$proto43["m_columns"][] = "ADDON_RELEASE_TYPE";
$proto43["m_columns"][] = "ADDON_RELEASE_NOTES";
$proto43["m_columns"][] = "ADDON_DOWNLOAD_URL";
$proto43["m_columns"][] = "ADDON_DOWNLOAD_PROGRESS";
$proto43["m_columns"][] = "ADDON_DOWNLOAD_MD5";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "ADDONS_MANAGER";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "ADDONS_MANAGER";
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
$proto0["m_srcTableName"]="ADDONS_MANAGER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ADDONS_MANAGER = createSqlQuery_ADDONS_MANAGER();


	
						;

																		

$tdataADDONS_MANAGER[".sqlquery"] = $queryData_ADDONS_MANAGER;

$tableEvents["ADDONS_MANAGER"] = new eventsBase;
$tdataADDONS_MANAGER[".hasEvents"] = false;

?>
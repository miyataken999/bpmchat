<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_AUTHENTICATION_SOURCE = array();
	$tdataRBAC_AUTHENTICATION_SOURCE[".truncateText"] = true;
	$tdataRBAC_AUTHENTICATION_SOURCE[".NumberOfChars"] = 20;
	$tdataRBAC_AUTHENTICATION_SOURCE[".ShortName"] = "RBAC_AUTHENTICATION_SOURCE";
	$tdataRBAC_AUTHENTICATION_SOURCE[".OwnerID"] = "";
	$tdataRBAC_AUTHENTICATION_SOURCE[".OriginalTable"] = "RBAC_AUTHENTICATION_SOURCE";

//	field labels
$fieldLabelsRBAC_AUTHENTICATION_SOURCE = array();
$fieldToolTipsRBAC_AUTHENTICATION_SOURCE = array();
$pageTitlesRBAC_AUTHENTICATION_SOURCE = array();
$placeHoldersRBAC_AUTHENTICATION_SOURCE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"] = array();
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"] = array();
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"] = array();
	$pageTitlesRBAC_AUTHENTICATION_SOURCE["Japanese"] = array();
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_UID"] = "認証ソースのuid";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_UID"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_UID"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_NAME"] = "認証ソース名";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_NAME"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_NAME"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PROVIDER"] = "認証ソースプロバイダ";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PROVIDER"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PROVIDER"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_SERVER_NAME"] = "認証ソースのサーバー名";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_SERVER_NAME"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_SERVER_NAME"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PORT"] = "認証元ポート";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PORT"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PORT"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_ENABLED_TLS"] = "認証ソースは、TLSを有効に";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_ENABLED_TLS"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_ENABLED_TLS"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_VERSION"] = "認証ソースのバージョン";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_VERSION"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_VERSION"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_BASE_DN"] = "認証ソースのベースDN";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_BASE_DN"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_BASE_DN"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_ANONYMOUS"] = "匿名認証";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_ANONYMOUS"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_ANONYMOUS"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_SEARCH_USER"] = "認証ソースの検索ユーザー";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_SEARCH_USER"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_SEARCH_USER"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PASSWORD"] = "認証ソースのパスワード";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PASSWORD"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_PASSWORD"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_ATTRIBUTES"] = "認証ソースの属性";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_ATTRIBUTES"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_ATTRIBUTES"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_OBJECT_CLASSES"] = "認証ソースのオブジェクトクラス";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_OBJECT_CLASSES"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_OBJECT_CLASSES"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_DATA"] = "認証元データ";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_DATA"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["Japanese"]["AUTH_SOURCE_DATA"] = "";
	if (count($fieldToolTipsRBAC_AUTHENTICATION_SOURCE["Japanese"]))
		$tdataRBAC_AUTHENTICATION_SOURCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"] = array();
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"] = array();
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"] = array();
	$pageTitlesRBAC_AUTHENTICATION_SOURCE["English"] = array();
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_UID"] = "認証ソースのuid";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_UID"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_UID"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_NAME"] = "認証ソース名";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_NAME"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_NAME"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PROVIDER"] = "認証ソースプロバイダ";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PROVIDER"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PROVIDER"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_SERVER_NAME"] = "認証ソースのサーバー名";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_SERVER_NAME"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_SERVER_NAME"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PORT"] = "認証元ポート";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PORT"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PORT"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_ENABLED_TLS"] = "認証ソースは、TLSを有効に";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_ENABLED_TLS"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_ENABLED_TLS"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_VERSION"] = "認証ソースのバージョン";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_VERSION"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_VERSION"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_BASE_DN"] = "認証ソースのベースDN";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_BASE_DN"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_BASE_DN"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_ANONYMOUS"] = "匿名認証";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_ANONYMOUS"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_ANONYMOUS"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_SEARCH_USER"] = "認証ソースの検索ユーザー";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_SEARCH_USER"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_SEARCH_USER"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PASSWORD"] = "認証ソースのパスワード";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PASSWORD"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_PASSWORD"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_ATTRIBUTES"] = "認証ソースの属性";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_ATTRIBUTES"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_ATTRIBUTES"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_OBJECT_CLASSES"] = "認証ソースのオブジェクトクラス";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_OBJECT_CLASSES"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_OBJECT_CLASSES"] = "";
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_DATA"] = "認証元データ";
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_DATA"] = "";
	$placeHoldersRBAC_AUTHENTICATION_SOURCE["English"]["AUTH_SOURCE_DATA"] = "";
	if (count($fieldToolTipsRBAC_AUTHENTICATION_SOURCE["English"]))
		$tdataRBAC_AUTHENTICATION_SOURCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_AUTHENTICATION_SOURCE[""] = array();
	$fieldToolTipsRBAC_AUTHENTICATION_SOURCE[""] = array();
	$placeHoldersRBAC_AUTHENTICATION_SOURCE[""] = array();
	$pageTitlesRBAC_AUTHENTICATION_SOURCE[""] = array();
	if (count($fieldToolTipsRBAC_AUTHENTICATION_SOURCE[""]))
		$tdataRBAC_AUTHENTICATION_SOURCE[".isUseToolTips"] = true;
}


	$tdataRBAC_AUTHENTICATION_SOURCE[".NCSearch"] = true;



$tdataRBAC_AUTHENTICATION_SOURCE[".shortTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$tdataRBAC_AUTHENTICATION_SOURCE[".nSecOptions"] = 0;
$tdataRBAC_AUTHENTICATION_SOURCE[".recsPerRowPrint"] = 1;
$tdataRBAC_AUTHENTICATION_SOURCE[".mainTableOwnerID"] = "";
$tdataRBAC_AUTHENTICATION_SOURCE[".moveNext"] = 0;
$tdataRBAC_AUTHENTICATION_SOURCE[".entityType"] = 0;

$tdataRBAC_AUTHENTICATION_SOURCE[".strOriginalTableName"] = "RBAC_AUTHENTICATION_SOURCE";

	



$tdataRBAC_AUTHENTICATION_SOURCE[".showAddInPopup"] = false;

$tdataRBAC_AUTHENTICATION_SOURCE[".showEditInPopup"] = false;

$tdataRBAC_AUTHENTICATION_SOURCE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_AUTHENTICATION_SOURCE[".fieldsForRegister"] = array();
	
$tdataRBAC_AUTHENTICATION_SOURCE[".listAjax"] = false;

	$tdataRBAC_AUTHENTICATION_SOURCE[".audit"] = true;

	$tdataRBAC_AUTHENTICATION_SOURCE[".locking"] = false;

$tdataRBAC_AUTHENTICATION_SOURCE[".edit"] = true;
$tdataRBAC_AUTHENTICATION_SOURCE[".afterEditAction"] = 1;
$tdataRBAC_AUTHENTICATION_SOURCE[".closePopupAfterEdit"] = 1;
$tdataRBAC_AUTHENTICATION_SOURCE[".afterEditActionDetTable"] = "";

$tdataRBAC_AUTHENTICATION_SOURCE[".add"] = true;
$tdataRBAC_AUTHENTICATION_SOURCE[".afterAddAction"] = 1;
$tdataRBAC_AUTHENTICATION_SOURCE[".closePopupAfterAdd"] = 1;
$tdataRBAC_AUTHENTICATION_SOURCE[".afterAddActionDetTable"] = "";

$tdataRBAC_AUTHENTICATION_SOURCE[".list"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEdit"] = true;


$tdataRBAC_AUTHENTICATION_SOURCE[".reorderRecordsByHeader"] = true;
$tdataRBAC_AUTHENTICATION_SOURCE[".createSortByDropdown"] = true;
$tdataRBAC_AUTHENTICATION_SOURCE[".strSortControlSettingsJSON"] = "";



$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAdd"] = true;
$tdataRBAC_AUTHENTICATION_SOURCE[".view"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".import"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".exportTo"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".printFriendly"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".delete"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_AUTHENTICATION_SOURCE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_AUTHENTICATION_SOURCE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_AUTHENTICATION_SOURCE[".searchSaving"] = false;
//

$tdataRBAC_AUTHENTICATION_SOURCE[".showSearchPanel"] = true;
		$tdataRBAC_AUTHENTICATION_SOURCE[".flexibleSearch"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".isUseAjaxSuggest"] = true;

$tdataRBAC_AUTHENTICATION_SOURCE[".rowHighlite"] = true;



				

$tdataRBAC_AUTHENTICATION_SOURCE[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_AUTHENTICATION_SOURCE[".buttonsAdded"] = false;

$tdataRBAC_AUTHENTICATION_SOURCE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_AUTHENTICATION_SOURCE[".isUseTimeForSearch"] = false;





$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".filterFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".requiredSearchFields"] = array();

$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_UID";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_NAME";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_PROVIDER";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_SERVER_NAME";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_PORT";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_ENABLED_TLS";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_VERSION";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_BASE_DN";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_ANONYMOUS";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_SEARCH_USER";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_PASSWORD";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_ATTRIBUTES";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
	$tdataRBAC_AUTHENTICATION_SOURCE[".allSearchFields"][] = "AUTH_SOURCE_DATA";
	

$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".googleLikeFields"][] = "AUTH_SOURCE_DATA";


$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".advSearchFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".tableType"] = "list";

$tdataRBAC_AUTHENTICATION_SOURCE[".printerPageOrientation"] = 0;
$tdataRBAC_AUTHENTICATION_SOURCE[".nPrinterPageScale"] = 100;

$tdataRBAC_AUTHENTICATION_SOURCE[".nPrinterSplitRecords"] = 40;

$tdataRBAC_AUTHENTICATION_SOURCE[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_AUTHENTICATION_SOURCE[".geocodingEnabled"] = false;





$tdataRBAC_AUTHENTICATION_SOURCE[".listGridLayout"] = 3;


$tdataRBAC_AUTHENTICATION_SOURCE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_AUTHENTICATION_SOURCE[".pageSize"] = 20;

$tdataRBAC_AUTHENTICATION_SOURCE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_AUTHENTICATION_SOURCE[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_AUTHENTICATION_SOURCE[".orderindexes"] = array();

$tdataRBAC_AUTHENTICATION_SOURCE[".sqlHead"] = "SELECT AUTH_SOURCE_UID,  	AUTH_SOURCE_NAME,  	AUTH_SOURCE_PROVIDER,  	AUTH_SOURCE_SERVER_NAME,  	AUTH_SOURCE_PORT,  	AUTH_SOURCE_ENABLED_TLS,  	AUTH_SOURCE_VERSION,  	AUTH_SOURCE_BASE_DN,  	AUTH_ANONYMOUS,  	AUTH_SOURCE_SEARCH_USER,  	AUTH_SOURCE_PASSWORD,  	AUTH_SOURCE_ATTRIBUTES,  	AUTH_SOURCE_OBJECT_CLASSES,  	AUTH_SOURCE_DATA";
$tdataRBAC_AUTHENTICATION_SOURCE[".sqlFrom"] = "FROM RBAC_AUTHENTICATION_SOURCE";
$tdataRBAC_AUTHENTICATION_SOURCE[".sqlWhereExpr"] = "";
$tdataRBAC_AUTHENTICATION_SOURCE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_AUTHENTICATION_SOURCE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_AUTHENTICATION_SOURCE[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_AUTHENTICATION_SOURCE[".highlightSearchResults"] = true;

$tableKeysRBAC_AUTHENTICATION_SOURCE = array();
$tableKeysRBAC_AUTHENTICATION_SOURCE[] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".Keys"] = $tableKeysRBAC_AUTHENTICATION_SOURCE;

$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".listFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".hideMobileList"] = array();


$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".viewFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".addFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".masterListFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineAddFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".editFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".inlineEditFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".updateSelectedFields"][] = "AUTH_SOURCE_DATA";


$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".exportFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".importFields"][] = "AUTH_SOURCE_DATA";

$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"] = array();
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_UID";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_PROVIDER";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_SERVER_NAME";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_PORT";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_ENABLED_TLS";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_VERSION";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_BASE_DN";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_ANONYMOUS";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_SEARCH_USER";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_PASSWORD";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_ATTRIBUTES";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$tdataRBAC_AUTHENTICATION_SOURCE[".printFields"][] = "AUTH_SOURCE_DATA";

//	AUTH_SOURCE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AUTH_SOURCE_UID";
	$fdata["GoodName"] = "AUTH_SOURCE_UID";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_UID");
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

		$fdata["strField"] = "AUTH_SOURCE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_UID";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_UID"] = $fdata;
//	AUTH_SOURCE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AUTH_SOURCE_NAME";
	$fdata["GoodName"] = "AUTH_SOURCE_NAME";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_NAME");
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

		$fdata["strField"] = "AUTH_SOURCE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_NAME";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_NAME"] = $fdata;
//	AUTH_SOURCE_PROVIDER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AUTH_SOURCE_PROVIDER";
	$fdata["GoodName"] = "AUTH_SOURCE_PROVIDER";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_PROVIDER");
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

		$fdata["strField"] = "AUTH_SOURCE_PROVIDER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_PROVIDER";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_PROVIDER"] = $fdata;
//	AUTH_SOURCE_SERVER_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AUTH_SOURCE_SERVER_NAME";
	$fdata["GoodName"] = "AUTH_SOURCE_SERVER_NAME";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_SERVER_NAME");
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

		$fdata["strField"] = "AUTH_SOURCE_SERVER_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_SERVER_NAME";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_SERVER_NAME"] = $fdata;
//	AUTH_SOURCE_PORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AUTH_SOURCE_PORT";
	$fdata["GoodName"] = "AUTH_SOURCE_PORT";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_PORT");
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

		$fdata["strField"] = "AUTH_SOURCE_PORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_PORT";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_PORT"] = $fdata;
//	AUTH_SOURCE_ENABLED_TLS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AUTH_SOURCE_ENABLED_TLS";
	$fdata["GoodName"] = "AUTH_SOURCE_ENABLED_TLS";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_ENABLED_TLS");
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

		$fdata["strField"] = "AUTH_SOURCE_ENABLED_TLS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_ENABLED_TLS";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_ENABLED_TLS"] = $fdata;
//	AUTH_SOURCE_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AUTH_SOURCE_VERSION";
	$fdata["GoodName"] = "AUTH_SOURCE_VERSION";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_VERSION");
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

		$fdata["strField"] = "AUTH_SOURCE_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_VERSION";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_VERSION"] = $fdata;
//	AUTH_SOURCE_BASE_DN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AUTH_SOURCE_BASE_DN";
	$fdata["GoodName"] = "AUTH_SOURCE_BASE_DN";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_BASE_DN");
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

		$fdata["strField"] = "AUTH_SOURCE_BASE_DN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_BASE_DN";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_BASE_DN"] = $fdata;
//	AUTH_ANONYMOUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AUTH_ANONYMOUS";
	$fdata["GoodName"] = "AUTH_ANONYMOUS";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_ANONYMOUS");
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

		$fdata["strField"] = "AUTH_ANONYMOUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_ANONYMOUS";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_ANONYMOUS"] = $fdata;
//	AUTH_SOURCE_SEARCH_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AUTH_SOURCE_SEARCH_USER";
	$fdata["GoodName"] = "AUTH_SOURCE_SEARCH_USER";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_SEARCH_USER");
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

		$fdata["strField"] = "AUTH_SOURCE_SEARCH_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_SEARCH_USER";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_SEARCH_USER"] = $fdata;
//	AUTH_SOURCE_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AUTH_SOURCE_PASSWORD";
	$fdata["GoodName"] = "AUTH_SOURCE_PASSWORD";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_PASSWORD");
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

		$fdata["strField"] = "AUTH_SOURCE_PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_PASSWORD";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_PASSWORD"] = $fdata;
//	AUTH_SOURCE_ATTRIBUTES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AUTH_SOURCE_ATTRIBUTES";
	$fdata["GoodName"] = "AUTH_SOURCE_ATTRIBUTES";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_ATTRIBUTES");
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

		$fdata["strField"] = "AUTH_SOURCE_ATTRIBUTES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_ATTRIBUTES";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_ATTRIBUTES"] = $fdata;
//	AUTH_SOURCE_OBJECT_CLASSES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AUTH_SOURCE_OBJECT_CLASSES";
	$fdata["GoodName"] = "AUTH_SOURCE_OBJECT_CLASSES";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_OBJECT_CLASSES");
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

		$fdata["strField"] = "AUTH_SOURCE_OBJECT_CLASSES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_OBJECT_CLASSES";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_OBJECT_CLASSES"] = $fdata;
//	AUTH_SOURCE_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AUTH_SOURCE_DATA";
	$fdata["GoodName"] = "AUTH_SOURCE_DATA";
	$fdata["ownerTable"] = "RBAC_AUTHENTICATION_SOURCE";
	$fdata["Label"] = GetFieldLabel("RBAC_AUTHENTICATION_SOURCE","AUTH_SOURCE_DATA");
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

		$fdata["strField"] = "AUTH_SOURCE_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTH_SOURCE_DATA";

	
	
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




	$tdataRBAC_AUTHENTICATION_SOURCE["AUTH_SOURCE_DATA"] = $fdata;


$tables_data["RBAC_AUTHENTICATION_SOURCE"]=&$tdataRBAC_AUTHENTICATION_SOURCE;
$field_labels["RBAC_AUTHENTICATION_SOURCE"] = &$fieldLabelsRBAC_AUTHENTICATION_SOURCE;
$fieldToolTips["RBAC_AUTHENTICATION_SOURCE"] = &$fieldToolTipsRBAC_AUTHENTICATION_SOURCE;
$placeHolders["RBAC_AUTHENTICATION_SOURCE"] = &$placeHoldersRBAC_AUTHENTICATION_SOURCE;
$page_titles["RBAC_AUTHENTICATION_SOURCE"] = &$pageTitlesRBAC_AUTHENTICATION_SOURCE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_AUTHENTICATION_SOURCE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_AUTHENTICATION_SOURCE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_AUTHENTICATION_SOURCE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AUTH_SOURCE_UID,  	AUTH_SOURCE_NAME,  	AUTH_SOURCE_PROVIDER,  	AUTH_SOURCE_SERVER_NAME,  	AUTH_SOURCE_PORT,  	AUTH_SOURCE_ENABLED_TLS,  	AUTH_SOURCE_VERSION,  	AUTH_SOURCE_BASE_DN,  	AUTH_ANONYMOUS,  	AUTH_SOURCE_SEARCH_USER,  	AUTH_SOURCE_PASSWORD,  	AUTH_SOURCE_ATTRIBUTES,  	AUTH_SOURCE_OBJECT_CLASSES,  	AUTH_SOURCE_DATA";
$proto0["m_strFrom"] = "FROM RBAC_AUTHENTICATION_SOURCE";
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
	"m_strName" => "AUTH_SOURCE_UID",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto6["m_sql"] = "AUTH_SOURCE_UID";
$proto6["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_NAME",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto8["m_sql"] = "AUTH_SOURCE_NAME";
$proto8["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_PROVIDER",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto10["m_sql"] = "AUTH_SOURCE_PROVIDER";
$proto10["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_SERVER_NAME",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto12["m_sql"] = "AUTH_SOURCE_SERVER_NAME";
$proto12["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_PORT",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto14["m_sql"] = "AUTH_SOURCE_PORT";
$proto14["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_ENABLED_TLS",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto16["m_sql"] = "AUTH_SOURCE_ENABLED_TLS";
$proto16["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_VERSION",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto18["m_sql"] = "AUTH_SOURCE_VERSION";
$proto18["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_BASE_DN",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto20["m_sql"] = "AUTH_SOURCE_BASE_DN";
$proto20["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_ANONYMOUS",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto22["m_sql"] = "AUTH_ANONYMOUS";
$proto22["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_SEARCH_USER",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto24["m_sql"] = "AUTH_SOURCE_SEARCH_USER";
$proto24["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_PASSWORD",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto26["m_sql"] = "AUTH_SOURCE_PASSWORD";
$proto26["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_ATTRIBUTES",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto28["m_sql"] = "AUTH_SOURCE_ATTRIBUTES";
$proto28["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_OBJECT_CLASSES",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto30["m_sql"] = "AUTH_SOURCE_OBJECT_CLASSES";
$proto30["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTH_SOURCE_DATA",
	"m_strTable" => "RBAC_AUTHENTICATION_SOURCE",
	"m_srcTableName" => "RBAC_AUTHENTICATION_SOURCE"
));

$proto32["m_sql"] = "AUTH_SOURCE_DATA";
$proto32["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto35["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "AUTH_SOURCE_UID";
$proto35["m_columns"][] = "AUTH_SOURCE_NAME";
$proto35["m_columns"][] = "AUTH_SOURCE_PROVIDER";
$proto35["m_columns"][] = "AUTH_SOURCE_SERVER_NAME";
$proto35["m_columns"][] = "AUTH_SOURCE_PORT";
$proto35["m_columns"][] = "AUTH_SOURCE_ENABLED_TLS";
$proto35["m_columns"][] = "AUTH_SOURCE_VERSION";
$proto35["m_columns"][] = "AUTH_SOURCE_BASE_DN";
$proto35["m_columns"][] = "AUTH_ANONYMOUS";
$proto35["m_columns"][] = "AUTH_SOURCE_SEARCH_USER";
$proto35["m_columns"][] = "AUTH_SOURCE_PASSWORD";
$proto35["m_columns"][] = "AUTH_SOURCE_ATTRIBUTES";
$proto35["m_columns"][] = "AUTH_SOURCE_OBJECT_CLASSES";
$proto35["m_columns"][] = "AUTH_SOURCE_DATA";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "RBAC_AUTHENTICATION_SOURCE";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "RBAC_AUTHENTICATION_SOURCE";
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
$proto0["m_srcTableName"]="RBAC_AUTHENTICATION_SOURCE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_AUTHENTICATION_SOURCE = createSqlQuery_RBAC_AUTHENTICATION_SOURCE();


	
						;

														

$tdataRBAC_AUTHENTICATION_SOURCE[".sqlquery"] = $queryData_RBAC_AUTHENTICATION_SOURCE;

$tableEvents["RBAC_AUTHENTICATION_SOURCE"] = new eventsBase;
$tdataRBAC_AUTHENTICATION_SOURCE[".hasEvents"] = false;

?>
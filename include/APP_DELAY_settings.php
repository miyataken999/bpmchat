<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_DELAY = array();
	$tdataAPP_DELAY[".truncateText"] = true;
	$tdataAPP_DELAY[".NumberOfChars"] = 20;
	$tdataAPP_DELAY[".ShortName"] = "APP_DELAY";
	$tdataAPP_DELAY[".OwnerID"] = "";
	$tdataAPP_DELAY[".OriginalTable"] = "APP_DELAY";

//	field labels
$fieldLabelsAPP_DELAY = array();
$fieldToolTipsAPP_DELAY = array();
$pageTitlesAPP_DELAY = array();
$placeHoldersAPP_DELAY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_DELAY["Japanese"] = array();
	$fieldToolTipsAPP_DELAY["Japanese"] = array();
	$placeHoldersAPP_DELAY["Japanese"] = array();
	$pageTitlesAPP_DELAY["Japanese"] = array();
	$fieldLabelsAPP_DELAY["Japanese"]["APP_DELAY_UID"] = "遅延UID";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_DELAY_UID"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_DELAY_UID"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_DELAY["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_THREAD_INDEX"] = "アプリのスレッドインデックス";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_THREAD_INDEX"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_THREAD_INDEX"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_DEL_INDEX"] = "アプリ・デル・インデックス";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_DEL_INDEX"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_DEL_INDEX"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_TYPE"] = "種類";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_TYPE"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_TYPE"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_STATUS"] = "ステータス";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_NEXT_TASK"] = "次のタスク";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_NEXT_TASK"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_NEXT_TASK"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_DELEGATION_USER"] = "委任ユーザー";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_DELEGATION_USER"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_DELEGATION_USER"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_ENABLE_ACTION_USER"] = "アプリは、アクションのユーザーを有効";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_ENABLE_ACTION_USER"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_ENABLE_ACTION_USER"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_ENABLE_ACTION_DATE"] = "行動日を有効にします";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_ENABLE_ACTION_DATE"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_ENABLE_ACTION_DATE"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_DISABLE_ACTION_USER"] = "無効化アクションユーザー";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_DISABLE_ACTION_USER"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_DISABLE_ACTION_USER"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_DISABLE_ACTION_DATE"] = "無効化日";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_DISABLE_ACTION_DATE"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_DISABLE_ACTION_DATE"] = "";
	$fieldLabelsAPP_DELAY["Japanese"]["APP_AUTOMATIC_DISABLED_DATE"] = "自動無効日付";
	$fieldToolTipsAPP_DELAY["Japanese"]["APP_AUTOMATIC_DISABLED_DATE"] = "";
	$placeHoldersAPP_DELAY["Japanese"]["APP_AUTOMATIC_DISABLED_DATE"] = "";
	if (count($fieldToolTipsAPP_DELAY["Japanese"]))
		$tdataAPP_DELAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_DELAY["English"] = array();
	$fieldToolTipsAPP_DELAY["English"] = array();
	$placeHoldersAPP_DELAY["English"] = array();
	$pageTitlesAPP_DELAY["English"] = array();
	$fieldLabelsAPP_DELAY["English"]["APP_DELAY_UID"] = "遅延UID";
	$fieldToolTipsAPP_DELAY["English"]["APP_DELAY_UID"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_DELAY_UID"] = "";
	$fieldLabelsAPP_DELAY["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_DELAY["English"]["PRO_UID"] = "";
	$placeHoldersAPP_DELAY["English"]["PRO_UID"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_DELAY["English"]["APP_UID"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_UID"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_THREAD_INDEX"] = "アプリのスレッドインデックス";
	$fieldToolTipsAPP_DELAY["English"]["APP_THREAD_INDEX"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_THREAD_INDEX"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_DEL_INDEX"] = "アプリ・デル・インデックス";
	$fieldToolTipsAPP_DELAY["English"]["APP_DEL_INDEX"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_DEL_INDEX"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_TYPE"] = "種類";
	$fieldToolTipsAPP_DELAY["English"]["APP_TYPE"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_TYPE"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_STATUS"] = "ステータス";
	$fieldToolTipsAPP_DELAY["English"]["APP_STATUS"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_STATUS"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_NEXT_TASK"] = "次のタスク";
	$fieldToolTipsAPP_DELAY["English"]["APP_NEXT_TASK"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_NEXT_TASK"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_DELEGATION_USER"] = "アプリの委任ユーザー";
	$fieldToolTipsAPP_DELAY["English"]["APP_DELEGATION_USER"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_DELEGATION_USER"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_ENABLE_ACTION_USER"] = "アプリは、アクションのユーザーを有効";
	$fieldToolTipsAPP_DELAY["English"]["APP_ENABLE_ACTION_USER"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_ENABLE_ACTION_USER"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_ENABLE_ACTION_DATE"] = "アプリ行動日を有効にします";
	$fieldToolTipsAPP_DELAY["English"]["APP_ENABLE_ACTION_DATE"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_ENABLE_ACTION_DATE"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_DISABLE_ACTION_USER"] = "アプリ無効化アクションユーザー";
	$fieldToolTipsAPP_DELAY["English"]["APP_DISABLE_ACTION_USER"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_DISABLE_ACTION_USER"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_DISABLE_ACTION_DATE"] = "アプリ無効化アクション日";
	$fieldToolTipsAPP_DELAY["English"]["APP_DISABLE_ACTION_DATE"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_DISABLE_ACTION_DATE"] = "";
	$fieldLabelsAPP_DELAY["English"]["APP_AUTOMATIC_DISABLED_DATE"] = "アプリ自動無効日付";
	$fieldToolTipsAPP_DELAY["English"]["APP_AUTOMATIC_DISABLED_DATE"] = "";
	$placeHoldersAPP_DELAY["English"]["APP_AUTOMATIC_DISABLED_DATE"] = "";
	if (count($fieldToolTipsAPP_DELAY["English"]))
		$tdataAPP_DELAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_DELAY[""] = array();
	$fieldToolTipsAPP_DELAY[""] = array();
	$placeHoldersAPP_DELAY[""] = array();
	$pageTitlesAPP_DELAY[""] = array();
	if (count($fieldToolTipsAPP_DELAY[""]))
		$tdataAPP_DELAY[".isUseToolTips"] = true;
}


	$tdataAPP_DELAY[".NCSearch"] = true;



$tdataAPP_DELAY[".shortTableName"] = "APP_DELAY";
$tdataAPP_DELAY[".nSecOptions"] = 0;
$tdataAPP_DELAY[".recsPerRowPrint"] = 1;
$tdataAPP_DELAY[".mainTableOwnerID"] = "";
$tdataAPP_DELAY[".moveNext"] = 0;
$tdataAPP_DELAY[".entityType"] = 0;

$tdataAPP_DELAY[".strOriginalTableName"] = "APP_DELAY";

	



$tdataAPP_DELAY[".showAddInPopup"] = false;

$tdataAPP_DELAY[".showEditInPopup"] = false;

$tdataAPP_DELAY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_DELAY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_DELAY[".fieldsForRegister"] = array();
	
$tdataAPP_DELAY[".listAjax"] = false;

	$tdataAPP_DELAY[".audit"] = true;

	$tdataAPP_DELAY[".locking"] = false;

$tdataAPP_DELAY[".edit"] = true;
$tdataAPP_DELAY[".afterEditAction"] = 1;
$tdataAPP_DELAY[".closePopupAfterEdit"] = 1;
$tdataAPP_DELAY[".afterEditActionDetTable"] = "";

$tdataAPP_DELAY[".add"] = true;
$tdataAPP_DELAY[".afterAddAction"] = 1;
$tdataAPP_DELAY[".closePopupAfterAdd"] = 1;
$tdataAPP_DELAY[".afterAddActionDetTable"] = "";

$tdataAPP_DELAY[".list"] = true;

$tdataAPP_DELAY[".inlineEdit"] = true;


$tdataAPP_DELAY[".reorderRecordsByHeader"] = true;
$tdataAPP_DELAY[".createSortByDropdown"] = true;
$tdataAPP_DELAY[".strSortControlSettingsJSON"] = "";



$tdataAPP_DELAY[".inlineAdd"] = true;
$tdataAPP_DELAY[".view"] = true;

$tdataAPP_DELAY[".import"] = true;

$tdataAPP_DELAY[".exportTo"] = true;

$tdataAPP_DELAY[".printFriendly"] = true;

$tdataAPP_DELAY[".delete"] = true;

$tdataAPP_DELAY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_DELAY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_DELAY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_DELAY[".searchSaving"] = false;
//

$tdataAPP_DELAY[".showSearchPanel"] = true;
		$tdataAPP_DELAY[".flexibleSearch"] = true;

$tdataAPP_DELAY[".isUseAjaxSuggest"] = true;

$tdataAPP_DELAY[".rowHighlite"] = true;



																

$tdataAPP_DELAY[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_DELAY[".buttonsAdded"] = false;

$tdataAPP_DELAY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_DELAY[".isUseTimeForSearch"] = false;



$tdataAPP_DELAY[".badgeColor"] = "E67349";


$tdataAPP_DELAY[".allSearchFields"] = array();
$tdataAPP_DELAY[".filterFields"] = array();
$tdataAPP_DELAY[".requiredSearchFields"] = array();

$tdataAPP_DELAY[".allSearchFields"][] = "APP_DELAY_UID";
	$tdataAPP_DELAY[".allSearchFields"][] = "PRO_UID";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_UID";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_THREAD_INDEX";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_DEL_INDEX";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_TYPE";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_STATUS";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_NEXT_TASK";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_DELEGATION_USER";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_ENABLE_ACTION_USER";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_ENABLE_ACTION_DATE";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_DISABLE_ACTION_USER";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_DISABLE_ACTION_DATE";
	$tdataAPP_DELAY[".allSearchFields"][] = "APP_AUTOMATIC_DISABLED_DATE";
	

$tdataAPP_DELAY[".googleLikeFields"] = array();
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".googleLikeFields"][] = "PRO_UID";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_UID";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".googleLikeFields"][] = "APP_AUTOMATIC_DISABLED_DATE";


$tdataAPP_DELAY[".advSearchFields"] = array();
$tdataAPP_DELAY[".advSearchFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".advSearchFields"][] = "PRO_UID";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_UID";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".advSearchFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".tableType"] = "list";

$tdataAPP_DELAY[".printerPageOrientation"] = 0;
$tdataAPP_DELAY[".nPrinterPageScale"] = 100;

$tdataAPP_DELAY[".nPrinterSplitRecords"] = 40;

$tdataAPP_DELAY[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_DELAY[".geocodingEnabled"] = false;





$tdataAPP_DELAY[".listGridLayout"] = 3;


$tdataAPP_DELAY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_DELAY[".pageSize"] = 20;

$tdataAPP_DELAY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_DELAY[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_DELAY[".orderindexes"] = array();

$tdataAPP_DELAY[".sqlHead"] = "SELECT APP_DELAY_UID,  	PRO_UID,  	APP_UID,  	APP_THREAD_INDEX,  	APP_DEL_INDEX,  	APP_TYPE,  	APP_STATUS,  	APP_NEXT_TASK,  	APP_DELEGATION_USER,  	APP_ENABLE_ACTION_USER,  	APP_ENABLE_ACTION_DATE,  	APP_DISABLE_ACTION_USER,  	APP_DISABLE_ACTION_DATE,  	APP_AUTOMATIC_DISABLED_DATE";
$tdataAPP_DELAY[".sqlFrom"] = "FROM APP_DELAY";
$tdataAPP_DELAY[".sqlWhereExpr"] = "";
$tdataAPP_DELAY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_DELAY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_DELAY[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_DELAY[".highlightSearchResults"] = true;

$tableKeysAPP_DELAY = array();
$tableKeysAPP_DELAY[] = "APP_DELAY_UID";
$tdataAPP_DELAY[".Keys"] = $tableKeysAPP_DELAY;

$tdataAPP_DELAY[".listFields"] = array();
$tdataAPP_DELAY[".listFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".listFields"][] = "PRO_UID";
$tdataAPP_DELAY[".listFields"][] = "APP_UID";
$tdataAPP_DELAY[".listFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".listFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".listFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".listFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".listFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".listFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".listFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".listFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".listFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".listFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".listFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".hideMobileList"] = array();


$tdataAPP_DELAY[".viewFields"] = array();
$tdataAPP_DELAY[".viewFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".viewFields"][] = "PRO_UID";
$tdataAPP_DELAY[".viewFields"][] = "APP_UID";
$tdataAPP_DELAY[".viewFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".viewFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".viewFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".viewFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".viewFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".viewFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".viewFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".viewFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".viewFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".viewFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".viewFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".addFields"] = array();
$tdataAPP_DELAY[".addFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".addFields"][] = "PRO_UID";
$tdataAPP_DELAY[".addFields"][] = "APP_UID";
$tdataAPP_DELAY[".addFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".addFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".addFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".addFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".addFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".addFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".addFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".addFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".addFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".addFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".addFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".masterListFields"] = array();
$tdataAPP_DELAY[".masterListFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".masterListFields"][] = "PRO_UID";
$tdataAPP_DELAY[".masterListFields"][] = "APP_UID";
$tdataAPP_DELAY[".masterListFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".masterListFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".masterListFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".masterListFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".masterListFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".masterListFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".masterListFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".masterListFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".masterListFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".masterListFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".masterListFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".inlineAddFields"] = array();
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".inlineAddFields"][] = "PRO_UID";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_UID";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".inlineAddFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".editFields"] = array();
$tdataAPP_DELAY[".editFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".editFields"][] = "PRO_UID";
$tdataAPP_DELAY[".editFields"][] = "APP_UID";
$tdataAPP_DELAY[".editFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".editFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".editFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".editFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".editFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".editFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".editFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".editFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".editFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".editFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".editFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".inlineEditFields"] = array();
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".inlineEditFields"][] = "PRO_UID";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_UID";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".inlineEditFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".updateSelectedFields"] = array();
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".updateSelectedFields"][] = "PRO_UID";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".updateSelectedFields"][] = "APP_AUTOMATIC_DISABLED_DATE";


$tdataAPP_DELAY[".exportFields"] = array();
$tdataAPP_DELAY[".exportFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".exportFields"][] = "PRO_UID";
$tdataAPP_DELAY[".exportFields"][] = "APP_UID";
$tdataAPP_DELAY[".exportFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".exportFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".exportFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".exportFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".exportFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".exportFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".exportFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".exportFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".exportFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".exportFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".exportFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".importFields"] = array();
$tdataAPP_DELAY[".importFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".importFields"][] = "PRO_UID";
$tdataAPP_DELAY[".importFields"][] = "APP_UID";
$tdataAPP_DELAY[".importFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".importFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".importFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".importFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".importFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".importFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".importFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".importFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".importFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".importFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".importFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

$tdataAPP_DELAY[".printFields"] = array();
$tdataAPP_DELAY[".printFields"][] = "APP_DELAY_UID";
$tdataAPP_DELAY[".printFields"][] = "PRO_UID";
$tdataAPP_DELAY[".printFields"][] = "APP_UID";
$tdataAPP_DELAY[".printFields"][] = "APP_THREAD_INDEX";
$tdataAPP_DELAY[".printFields"][] = "APP_DEL_INDEX";
$tdataAPP_DELAY[".printFields"][] = "APP_TYPE";
$tdataAPP_DELAY[".printFields"][] = "APP_STATUS";
$tdataAPP_DELAY[".printFields"][] = "APP_NEXT_TASK";
$tdataAPP_DELAY[".printFields"][] = "APP_DELEGATION_USER";
$tdataAPP_DELAY[".printFields"][] = "APP_ENABLE_ACTION_USER";
$tdataAPP_DELAY[".printFields"][] = "APP_ENABLE_ACTION_DATE";
$tdataAPP_DELAY[".printFields"][] = "APP_DISABLE_ACTION_USER";
$tdataAPP_DELAY[".printFields"][] = "APP_DISABLE_ACTION_DATE";
$tdataAPP_DELAY[".printFields"][] = "APP_AUTOMATIC_DISABLED_DATE";

//	APP_DELAY_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_DELAY_UID";
	$fdata["GoodName"] = "APP_DELAY_UID";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_DELAY_UID");
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

		$fdata["strField"] = "APP_DELAY_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DELAY_UID";

	
	
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




	$tdataAPP_DELAY["APP_DELAY_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","PRO_UID");
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




	$tdataAPP_DELAY["PRO_UID"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_UID");
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




	$tdataAPP_DELAY["APP_UID"] = $fdata;
//	APP_THREAD_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_THREAD_INDEX";
	$fdata["GoodName"] = "APP_THREAD_INDEX";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_THREAD_INDEX");
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

		$fdata["strField"] = "APP_THREAD_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_THREAD_INDEX";

	
	
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




	$tdataAPP_DELAY["APP_THREAD_INDEX"] = $fdata;
//	APP_DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_DEL_INDEX";
	$fdata["GoodName"] = "APP_DEL_INDEX";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_DEL_INDEX");
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

		$fdata["strField"] = "APP_DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DEL_INDEX";

	
	
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




	$tdataAPP_DELAY["APP_DEL_INDEX"] = $fdata;
//	APP_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_TYPE";
	$fdata["GoodName"] = "APP_TYPE";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_TYPE");
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

		$fdata["strField"] = "APP_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TYPE";

	
	
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




	$tdataAPP_DELAY["APP_TYPE"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_STATUS");
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




	$tdataAPP_DELAY["APP_STATUS"] = $fdata;
//	APP_NEXT_TASK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_NEXT_TASK";
	$fdata["GoodName"] = "APP_NEXT_TASK";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_NEXT_TASK");
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

		$fdata["strField"] = "APP_NEXT_TASK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NEXT_TASK";

	
	
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




	$tdataAPP_DELAY["APP_NEXT_TASK"] = $fdata;
//	APP_DELEGATION_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_DELEGATION_USER";
	$fdata["GoodName"] = "APP_DELEGATION_USER";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_DELEGATION_USER");
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

		$fdata["strField"] = "APP_DELEGATION_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DELEGATION_USER";

	
	
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




	$tdataAPP_DELAY["APP_DELEGATION_USER"] = $fdata;
//	APP_ENABLE_ACTION_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_ENABLE_ACTION_USER";
	$fdata["GoodName"] = "APP_ENABLE_ACTION_USER";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_ENABLE_ACTION_USER");
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

		$fdata["strField"] = "APP_ENABLE_ACTION_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_ENABLE_ACTION_USER";

	
	
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




	$tdataAPP_DELAY["APP_ENABLE_ACTION_USER"] = $fdata;
//	APP_ENABLE_ACTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_ENABLE_ACTION_DATE";
	$fdata["GoodName"] = "APP_ENABLE_ACTION_DATE";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_ENABLE_ACTION_DATE");
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

		$fdata["strField"] = "APP_ENABLE_ACTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_ENABLE_ACTION_DATE";

	
	
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




	$tdataAPP_DELAY["APP_ENABLE_ACTION_DATE"] = $fdata;
//	APP_DISABLE_ACTION_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_DISABLE_ACTION_USER";
	$fdata["GoodName"] = "APP_DISABLE_ACTION_USER";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_DISABLE_ACTION_USER");
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

		$fdata["strField"] = "APP_DISABLE_ACTION_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DISABLE_ACTION_USER";

	
	
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




	$tdataAPP_DELAY["APP_DISABLE_ACTION_USER"] = $fdata;
//	APP_DISABLE_ACTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "APP_DISABLE_ACTION_DATE";
	$fdata["GoodName"] = "APP_DISABLE_ACTION_DATE";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_DISABLE_ACTION_DATE");
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

		$fdata["strField"] = "APP_DISABLE_ACTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DISABLE_ACTION_DATE";

	
	
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




	$tdataAPP_DELAY["APP_DISABLE_ACTION_DATE"] = $fdata;
//	APP_AUTOMATIC_DISABLED_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APP_AUTOMATIC_DISABLED_DATE";
	$fdata["GoodName"] = "APP_AUTOMATIC_DISABLED_DATE";
	$fdata["ownerTable"] = "APP_DELAY";
	$fdata["Label"] = GetFieldLabel("APP_DELAY","APP_AUTOMATIC_DISABLED_DATE");
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

		$fdata["strField"] = "APP_AUTOMATIC_DISABLED_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_AUTOMATIC_DISABLED_DATE";

	
	
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




	$tdataAPP_DELAY["APP_AUTOMATIC_DISABLED_DATE"] = $fdata;


$tables_data["APP_DELAY"]=&$tdataAPP_DELAY;
$field_labels["APP_DELAY"] = &$fieldLabelsAPP_DELAY;
$fieldToolTips["APP_DELAY"] = &$fieldToolTipsAPP_DELAY;
$placeHolders["APP_DELAY"] = &$placeHoldersAPP_DELAY;
$page_titles["APP_DELAY"] = &$pageTitlesAPP_DELAY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_DELAY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_DELAY"] = array();


	
				$strOriginalDetailsTable="APPLICATION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="APPLICATION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "APPLICATION";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["APP_DELAY"][0] = $masterParams;
				$masterTablesData["APP_DELAY"][0]["masterKeys"] = array();
	$masterTablesData["APP_DELAY"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["APP_DELAY"][0]["detailKeys"] = array();
	$masterTablesData["APP_DELAY"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_DELAY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_DELAY_UID,  	PRO_UID,  	APP_UID,  	APP_THREAD_INDEX,  	APP_DEL_INDEX,  	APP_TYPE,  	APP_STATUS,  	APP_NEXT_TASK,  	APP_DELEGATION_USER,  	APP_ENABLE_ACTION_USER,  	APP_ENABLE_ACTION_DATE,  	APP_DISABLE_ACTION_USER,  	APP_DISABLE_ACTION_DATE,  	APP_AUTOMATIC_DISABLED_DATE";
$proto0["m_strFrom"] = "FROM APP_DELAY";
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
	"m_strName" => "APP_DELAY_UID",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto6["m_sql"] = "APP_DELAY_UID";
$proto6["m_srcTableName"] = "APP_DELAY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "APP_DELAY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto10["m_sql"] = "APP_UID";
$proto10["m_srcTableName"] = "APP_DELAY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_THREAD_INDEX",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto12["m_sql"] = "APP_THREAD_INDEX";
$proto12["m_srcTableName"] = "APP_DELAY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DEL_INDEX",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto14["m_sql"] = "APP_DEL_INDEX";
$proto14["m_srcTableName"] = "APP_DELAY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TYPE",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto16["m_sql"] = "APP_TYPE";
$proto16["m_srcTableName"] = "APP_DELAY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto18["m_sql"] = "APP_STATUS";
$proto18["m_srcTableName"] = "APP_DELAY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NEXT_TASK",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto20["m_sql"] = "APP_NEXT_TASK";
$proto20["m_srcTableName"] = "APP_DELAY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DELEGATION_USER",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto22["m_sql"] = "APP_DELEGATION_USER";
$proto22["m_srcTableName"] = "APP_DELAY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_ENABLE_ACTION_USER",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto24["m_sql"] = "APP_ENABLE_ACTION_USER";
$proto24["m_srcTableName"] = "APP_DELAY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_ENABLE_ACTION_DATE",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto26["m_sql"] = "APP_ENABLE_ACTION_DATE";
$proto26["m_srcTableName"] = "APP_DELAY";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DISABLE_ACTION_USER",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto28["m_sql"] = "APP_DISABLE_ACTION_USER";
$proto28["m_srcTableName"] = "APP_DELAY";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DISABLE_ACTION_DATE",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto30["m_sql"] = "APP_DISABLE_ACTION_DATE";
$proto30["m_srcTableName"] = "APP_DELAY";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_AUTOMATIC_DISABLED_DATE",
	"m_strTable" => "APP_DELAY",
	"m_srcTableName" => "APP_DELAY"
));

$proto32["m_sql"] = "APP_AUTOMATIC_DISABLED_DATE";
$proto32["m_srcTableName"] = "APP_DELAY";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "APP_DELAY";
$proto35["m_srcTableName"] = "APP_DELAY";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "APP_DELAY_UID";
$proto35["m_columns"][] = "PRO_UID";
$proto35["m_columns"][] = "APP_UID";
$proto35["m_columns"][] = "APP_THREAD_INDEX";
$proto35["m_columns"][] = "APP_DEL_INDEX";
$proto35["m_columns"][] = "APP_TYPE";
$proto35["m_columns"][] = "APP_STATUS";
$proto35["m_columns"][] = "APP_NEXT_TASK";
$proto35["m_columns"][] = "APP_DELEGATION_USER";
$proto35["m_columns"][] = "APP_ENABLE_ACTION_USER";
$proto35["m_columns"][] = "APP_ENABLE_ACTION_DATE";
$proto35["m_columns"][] = "APP_DISABLE_ACTION_USER";
$proto35["m_columns"][] = "APP_DISABLE_ACTION_DATE";
$proto35["m_columns"][] = "APP_AUTOMATIC_DISABLED_DATE";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "APP_DELAY";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "APP_DELAY";
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
$proto0["m_srcTableName"]="APP_DELAY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_DELAY = createSqlQuery_APP_DELAY();


	
						;

														

$tdataAPP_DELAY[".sqlquery"] = $queryData_APP_DELAY;

$tableEvents["APP_DELAY"] = new eventsBase;
$tdataAPP_DELAY[".hasEvents"] = false;

?>
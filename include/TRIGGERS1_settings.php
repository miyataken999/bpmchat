<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTRIGGERS1 = array();
	$tdataTRIGGERS1[".truncateText"] = true;
	$tdataTRIGGERS1[".NumberOfChars"] = 20;
	$tdataTRIGGERS1[".ShortName"] = "TRIGGERS1";
	$tdataTRIGGERS1[".OwnerID"] = "";
	$tdataTRIGGERS1[".OriginalTable"] = "TRIGGERS";

//	field labels
$fieldLabelsTRIGGERS1 = array();
$fieldToolTipsTRIGGERS1 = array();
$pageTitlesTRIGGERS1 = array();
$placeHoldersTRIGGERS1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTRIGGERS1["Japanese"] = array();
	$fieldToolTipsTRIGGERS1["Japanese"] = array();
	$placeHoldersTRIGGERS1["Japanese"] = array();
	$pageTitlesTRIGGERS1["Japanese"] = array();
	$fieldLabelsTRIGGERS1["Japanese"]["TRIGGER_CATALOG"] = "トリガーカタログ";
	$fieldToolTipsTRIGGERS1["Japanese"]["TRIGGER_CATALOG"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["TRIGGER_CATALOG"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["TRIGGER_SCHEMA"] = "トリガースキーマ";
	$fieldToolTipsTRIGGERS1["Japanese"]["TRIGGER_SCHEMA"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["TRIGGER_SCHEMA"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["TRIGGER_NAME"] = "トリガー名";
	$fieldToolTipsTRIGGERS1["Japanese"]["TRIGGER_NAME"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["TRIGGER_NAME"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["EVENT_MANIPULATION"] = "イベント操作";
	$fieldToolTipsTRIGGERS1["Japanese"]["EVENT_MANIPULATION"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["EVENT_MANIPULATION"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["EVENT_OBJECT_CATALOG"] = "イベントオブジェクトのカタログ";
	$fieldToolTipsTRIGGERS1["Japanese"]["EVENT_OBJECT_CATALOG"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["EVENT_OBJECT_CATALOG"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["EVENT_OBJECT_SCHEMA"] = "イベントオブジェクトのスキーマ";
	$fieldToolTipsTRIGGERS1["Japanese"]["EVENT_OBJECT_SCHEMA"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["EVENT_OBJECT_SCHEMA"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["EVENT_OBJECT_TABLE"] = "イベントオブジェクトテーブル";
	$fieldToolTipsTRIGGERS1["Japanese"]["EVENT_OBJECT_TABLE"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["EVENT_OBJECT_TABLE"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_ORDER"] = "行動順";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_ORDER"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_ORDER"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_CONDITION"] = "アクション条件";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_CONDITION"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_CONDITION"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_STATEMENT"] = "アクション文";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_STATEMENT"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_STATEMENT"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_ORIENTATION"] = "アクションの向き";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_ORIENTATION"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_ORIENTATION"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_TIMING"] = "アクションタイミング";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_TIMING"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_TIMING"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_REFERENCE_OLD_TABLE"] = "アクション参照古いテーブル";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_REFERENCE_OLD_TABLE"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_REFERENCE_OLD_TABLE"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_REFERENCE_NEW_TABLE"] = "アクション参照新しいテーブル";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_REFERENCE_NEW_TABLE"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_REFERENCE_NEW_TABLE"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_REFERENCE_OLD_ROW"] = "アクション参照古い行";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_REFERENCE_OLD_ROW"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_REFERENCE_OLD_ROW"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["ACTION_REFERENCE_NEW_ROW"] = "アクションリファレンス新しい行";
	$fieldToolTipsTRIGGERS1["Japanese"]["ACTION_REFERENCE_NEW_ROW"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["ACTION_REFERENCE_NEW_ROW"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["CREATED"] = "作成した";
	$fieldToolTipsTRIGGERS1["Japanese"]["CREATED"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["CREATED"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["SQL_MODE"] = "SQLモード";
	$fieldToolTipsTRIGGERS1["Japanese"]["SQL_MODE"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["SQL_MODE"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["DEFINER"] = "定義";
	$fieldToolTipsTRIGGERS1["Japanese"]["DEFINER"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["DEFINER"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["CHARACTER_SET_CLIENT"] = "文字セットクライアント";
	$fieldToolTipsTRIGGERS1["Japanese"]["CHARACTER_SET_CLIENT"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["CHARACTER_SET_CLIENT"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["COLLATION_CONNECTION"] = "照合接続";
	$fieldToolTipsTRIGGERS1["Japanese"]["COLLATION_CONNECTION"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["COLLATION_CONNECTION"] = "";
	$fieldLabelsTRIGGERS1["Japanese"]["DATABASE_COLLATION"] = "データベースの照合";
	$fieldToolTipsTRIGGERS1["Japanese"]["DATABASE_COLLATION"] = "";
	$placeHoldersTRIGGERS1["Japanese"]["DATABASE_COLLATION"] = "";
	if (count($fieldToolTipsTRIGGERS1["Japanese"]))
		$tdataTRIGGERS1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTRIGGERS1["English"] = array();
	$fieldToolTipsTRIGGERS1["English"] = array();
	$placeHoldersTRIGGERS1["English"] = array();
	$pageTitlesTRIGGERS1["English"] = array();
	$fieldLabelsTRIGGERS1["English"]["TRIGGER_CATALOG"] = "トリガーカタログ";
	$fieldToolTipsTRIGGERS1["English"]["TRIGGER_CATALOG"] = "";
	$placeHoldersTRIGGERS1["English"]["TRIGGER_CATALOG"] = "";
	$fieldLabelsTRIGGERS1["English"]["TRIGGER_SCHEMA"] = "トリガースキーマ";
	$fieldToolTipsTRIGGERS1["English"]["TRIGGER_SCHEMA"] = "";
	$placeHoldersTRIGGERS1["English"]["TRIGGER_SCHEMA"] = "";
	$fieldLabelsTRIGGERS1["English"]["TRIGGER_NAME"] = "トリガー名";
	$fieldToolTipsTRIGGERS1["English"]["TRIGGER_NAME"] = "";
	$placeHoldersTRIGGERS1["English"]["TRIGGER_NAME"] = "";
	$fieldLabelsTRIGGERS1["English"]["EVENT_MANIPULATION"] = "イベント操作";
	$fieldToolTipsTRIGGERS1["English"]["EVENT_MANIPULATION"] = "";
	$placeHoldersTRIGGERS1["English"]["EVENT_MANIPULATION"] = "";
	$fieldLabelsTRIGGERS1["English"]["EVENT_OBJECT_CATALOG"] = "イベントオブジェクトのカタログ";
	$fieldToolTipsTRIGGERS1["English"]["EVENT_OBJECT_CATALOG"] = "";
	$placeHoldersTRIGGERS1["English"]["EVENT_OBJECT_CATALOG"] = "";
	$fieldLabelsTRIGGERS1["English"]["EVENT_OBJECT_SCHEMA"] = "イベントオブジェクトのスキーマ";
	$fieldToolTipsTRIGGERS1["English"]["EVENT_OBJECT_SCHEMA"] = "";
	$placeHoldersTRIGGERS1["English"]["EVENT_OBJECT_SCHEMA"] = "";
	$fieldLabelsTRIGGERS1["English"]["EVENT_OBJECT_TABLE"] = "イベントオブジェクトテーブル";
	$fieldToolTipsTRIGGERS1["English"]["EVENT_OBJECT_TABLE"] = "";
	$placeHoldersTRIGGERS1["English"]["EVENT_OBJECT_TABLE"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_ORDER"] = "行動順";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_ORDER"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_ORDER"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_CONDITION"] = "アクション条件";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_CONDITION"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_CONDITION"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_STATEMENT"] = "アクション文";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_STATEMENT"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_STATEMENT"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_ORIENTATION"] = "アクションの向き";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_ORIENTATION"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_ORIENTATION"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_TIMING"] = "アクションタイミング";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_TIMING"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_TIMING"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_REFERENCE_OLD_TABLE"] = "アクション参照古いテーブル";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_REFERENCE_OLD_TABLE"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_REFERENCE_OLD_TABLE"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_REFERENCE_NEW_TABLE"] = "アクション参照新しいテーブル";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_REFERENCE_NEW_TABLE"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_REFERENCE_NEW_TABLE"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_REFERENCE_OLD_ROW"] = "アクション参照古い行";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_REFERENCE_OLD_ROW"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_REFERENCE_OLD_ROW"] = "";
	$fieldLabelsTRIGGERS1["English"]["ACTION_REFERENCE_NEW_ROW"] = "アクションリファレンス新しい行";
	$fieldToolTipsTRIGGERS1["English"]["ACTION_REFERENCE_NEW_ROW"] = "";
	$placeHoldersTRIGGERS1["English"]["ACTION_REFERENCE_NEW_ROW"] = "";
	$fieldLabelsTRIGGERS1["English"]["CREATED"] = "作成した";
	$fieldToolTipsTRIGGERS1["English"]["CREATED"] = "";
	$placeHoldersTRIGGERS1["English"]["CREATED"] = "";
	$fieldLabelsTRIGGERS1["English"]["SQL_MODE"] = "SQLモード";
	$fieldToolTipsTRIGGERS1["English"]["SQL_MODE"] = "";
	$placeHoldersTRIGGERS1["English"]["SQL_MODE"] = "";
	$fieldLabelsTRIGGERS1["English"]["DEFINER"] = "定義";
	$fieldToolTipsTRIGGERS1["English"]["DEFINER"] = "";
	$placeHoldersTRIGGERS1["English"]["DEFINER"] = "";
	$fieldLabelsTRIGGERS1["English"]["CHARACTER_SET_CLIENT"] = "文字セットクライアント";
	$fieldToolTipsTRIGGERS1["English"]["CHARACTER_SET_CLIENT"] = "";
	$placeHoldersTRIGGERS1["English"]["CHARACTER_SET_CLIENT"] = "";
	$fieldLabelsTRIGGERS1["English"]["COLLATION_CONNECTION"] = "照合接続";
	$fieldToolTipsTRIGGERS1["English"]["COLLATION_CONNECTION"] = "";
	$placeHoldersTRIGGERS1["English"]["COLLATION_CONNECTION"] = "";
	$fieldLabelsTRIGGERS1["English"]["DATABASE_COLLATION"] = "データベースの照合";
	$fieldToolTipsTRIGGERS1["English"]["DATABASE_COLLATION"] = "";
	$placeHoldersTRIGGERS1["English"]["DATABASE_COLLATION"] = "";
	if (count($fieldToolTipsTRIGGERS1["English"]))
		$tdataTRIGGERS1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTRIGGERS1[""] = array();
	$fieldToolTipsTRIGGERS1[""] = array();
	$placeHoldersTRIGGERS1[""] = array();
	$pageTitlesTRIGGERS1[""] = array();
	if (count($fieldToolTipsTRIGGERS1[""]))
		$tdataTRIGGERS1[".isUseToolTips"] = true;
}


	$tdataTRIGGERS1[".NCSearch"] = true;



$tdataTRIGGERS1[".shortTableName"] = "TRIGGERS1";
$tdataTRIGGERS1[".nSecOptions"] = 0;
$tdataTRIGGERS1[".recsPerRowPrint"] = 1;
$tdataTRIGGERS1[".mainTableOwnerID"] = "";
$tdataTRIGGERS1[".moveNext"] = 0;
$tdataTRIGGERS1[".entityType"] = 0;

$tdataTRIGGERS1[".strOriginalTableName"] = "TRIGGERS";

	



$tdataTRIGGERS1[".showAddInPopup"] = false;

$tdataTRIGGERS1[".showEditInPopup"] = false;

$tdataTRIGGERS1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTRIGGERS1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTRIGGERS1[".fieldsForRegister"] = array();
	
$tdataTRIGGERS1[".listAjax"] = false;

	$tdataTRIGGERS1[".audit"] = true;

	$tdataTRIGGERS1[".locking"] = false;



$tdataTRIGGERS1[".list"] = true;



$tdataTRIGGERS1[".reorderRecordsByHeader"] = true;



$tdataTRIGGERS1[".inlineAdd"] = true;

$tdataTRIGGERS1[".import"] = true;

$tdataTRIGGERS1[".exportTo"] = true;

$tdataTRIGGERS1[".printFriendly"] = true;


$tdataTRIGGERS1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTRIGGERS1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTRIGGERS1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTRIGGERS1[".searchSaving"] = false;
//

$tdataTRIGGERS1[".showSearchPanel"] = true;
		$tdataTRIGGERS1[".flexibleSearch"] = true;

$tdataTRIGGERS1[".isUseAjaxSuggest"] = true;

$tdataTRIGGERS1[".rowHighlite"] = true;



																

$tdataTRIGGERS1[".ajaxCodeSnippetAdded"] = false;

$tdataTRIGGERS1[".buttonsAdded"] = false;

$tdataTRIGGERS1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTRIGGERS1[".isUseTimeForSearch"] = false;



$tdataTRIGGERS1[".badgeColor"] = "d2691e";


$tdataTRIGGERS1[".allSearchFields"] = array();
$tdataTRIGGERS1[".filterFields"] = array();
$tdataTRIGGERS1[".requiredSearchFields"] = array();

$tdataTRIGGERS1[".allSearchFields"][] = "TRIGGER_CATALOG";
	$tdataTRIGGERS1[".allSearchFields"][] = "TRIGGER_SCHEMA";
	$tdataTRIGGERS1[".allSearchFields"][] = "TRIGGER_NAME";
	$tdataTRIGGERS1[".allSearchFields"][] = "EVENT_MANIPULATION";
	$tdataTRIGGERS1[".allSearchFields"][] = "EVENT_OBJECT_CATALOG";
	$tdataTRIGGERS1[".allSearchFields"][] = "EVENT_OBJECT_SCHEMA";
	$tdataTRIGGERS1[".allSearchFields"][] = "EVENT_OBJECT_TABLE";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_ORDER";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_CONDITION";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_STATEMENT";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_ORIENTATION";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_TIMING";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_REFERENCE_OLD_TABLE";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_REFERENCE_NEW_TABLE";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_REFERENCE_OLD_ROW";
	$tdataTRIGGERS1[".allSearchFields"][] = "ACTION_REFERENCE_NEW_ROW";
	$tdataTRIGGERS1[".allSearchFields"][] = "CREATED";
	$tdataTRIGGERS1[".allSearchFields"][] = "SQL_MODE";
	$tdataTRIGGERS1[".allSearchFields"][] = "DEFINER";
	$tdataTRIGGERS1[".allSearchFields"][] = "CHARACTER_SET_CLIENT";
	$tdataTRIGGERS1[".allSearchFields"][] = "COLLATION_CONNECTION";
	$tdataTRIGGERS1[".allSearchFields"][] = "DATABASE_COLLATION";
	

$tdataTRIGGERS1[".googleLikeFields"] = array();
$tdataTRIGGERS1[".googleLikeFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".googleLikeFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".googleLikeFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".googleLikeFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".googleLikeFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".googleLikeFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".googleLikeFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".googleLikeFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".googleLikeFields"][] = "CREATED";
$tdataTRIGGERS1[".googleLikeFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".googleLikeFields"][] = "DEFINER";
$tdataTRIGGERS1[".googleLikeFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".googleLikeFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".googleLikeFields"][] = "DATABASE_COLLATION";


$tdataTRIGGERS1[".advSearchFields"] = array();
$tdataTRIGGERS1[".advSearchFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".advSearchFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".advSearchFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".advSearchFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".advSearchFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".advSearchFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".advSearchFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".advSearchFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".advSearchFields"][] = "CREATED";
$tdataTRIGGERS1[".advSearchFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".advSearchFields"][] = "DEFINER";
$tdataTRIGGERS1[".advSearchFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".advSearchFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".advSearchFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".tableType"] = "list";

$tdataTRIGGERS1[".printerPageOrientation"] = 0;
$tdataTRIGGERS1[".nPrinterPageScale"] = 100;

$tdataTRIGGERS1[".nPrinterSplitRecords"] = 40;

$tdataTRIGGERS1[".nPrinterPDFSplitRecords"] = 40;



$tdataTRIGGERS1[".geocodingEnabled"] = false;





$tdataTRIGGERS1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataTRIGGERS1[".pageSize"] = 20;

$tdataTRIGGERS1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTRIGGERS1[".strOrderBy"] = $tstrOrderBy;

$tdataTRIGGERS1[".orderindexes"] = array();

$tdataTRIGGERS1[".sqlHead"] = "SELECT TRIGGER_CATALOG,  	TRIGGER_SCHEMA,  	TRIGGER_NAME,  	EVENT_MANIPULATION,  	EVENT_OBJECT_CATALOG,  	EVENT_OBJECT_SCHEMA,  	EVENT_OBJECT_TABLE,  	ACTION_ORDER,  	ACTION_CONDITION,  	ACTION_STATEMENT,  	ACTION_ORIENTATION,  	ACTION_TIMING,  	ACTION_REFERENCE_OLD_TABLE,  	ACTION_REFERENCE_NEW_TABLE,  	ACTION_REFERENCE_OLD_ROW,  	ACTION_REFERENCE_NEW_ROW,  	CREATED,  	SQL_MODE,  	DEFINER,  	CHARACTER_SET_CLIENT,  	COLLATION_CONNECTION,  	DATABASE_COLLATION";
$tdataTRIGGERS1[".sqlFrom"] = "FROM TRIGGERS";
$tdataTRIGGERS1[".sqlWhereExpr"] = "";
$tdataTRIGGERS1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTRIGGERS1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTRIGGERS1[".arrGroupsPerPage"] = $arrGPP;

$tdataTRIGGERS1[".highlightSearchResults"] = true;

$tableKeysTRIGGERS1 = array();
$tdataTRIGGERS1[".Keys"] = $tableKeysTRIGGERS1;

$tdataTRIGGERS1[".listFields"] = array();
$tdataTRIGGERS1[".listFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".listFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".listFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".listFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".listFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".listFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".listFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".listFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".listFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".listFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".listFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".listFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".listFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".listFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".listFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".listFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".listFields"][] = "CREATED";
$tdataTRIGGERS1[".listFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".listFields"][] = "DEFINER";
$tdataTRIGGERS1[".listFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".listFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".listFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".hideMobileList"] = array();


$tdataTRIGGERS1[".viewFields"] = array();
$tdataTRIGGERS1[".viewFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".viewFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".viewFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".viewFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".viewFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".viewFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".viewFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".viewFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".viewFields"][] = "CREATED";
$tdataTRIGGERS1[".viewFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".viewFields"][] = "DEFINER";
$tdataTRIGGERS1[".viewFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".viewFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".viewFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".addFields"] = array();
$tdataTRIGGERS1[".addFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".addFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".addFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".addFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".addFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".addFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".addFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".addFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".addFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".addFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".addFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".addFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".addFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".addFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".addFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".addFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".addFields"][] = "CREATED";
$tdataTRIGGERS1[".addFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".addFields"][] = "DEFINER";
$tdataTRIGGERS1[".addFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".addFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".addFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".masterListFields"] = array();
$tdataTRIGGERS1[".masterListFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".masterListFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".masterListFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".masterListFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".masterListFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".masterListFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".masterListFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".masterListFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".masterListFields"][] = "CREATED";
$tdataTRIGGERS1[".masterListFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".masterListFields"][] = "DEFINER";
$tdataTRIGGERS1[".masterListFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".masterListFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".masterListFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".inlineAddFields"] = array();
$tdataTRIGGERS1[".inlineAddFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".inlineAddFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".inlineAddFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".inlineAddFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".inlineAddFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".inlineAddFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".inlineAddFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".inlineAddFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".inlineAddFields"][] = "CREATED";
$tdataTRIGGERS1[".inlineAddFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".inlineAddFields"][] = "DEFINER";
$tdataTRIGGERS1[".inlineAddFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".inlineAddFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".inlineAddFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".editFields"] = array();
$tdataTRIGGERS1[".editFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".editFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".editFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".editFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".editFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".editFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".editFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".editFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".editFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".editFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".editFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".editFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".editFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".editFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".editFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".editFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".editFields"][] = "CREATED";
$tdataTRIGGERS1[".editFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".editFields"][] = "DEFINER";
$tdataTRIGGERS1[".editFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".editFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".editFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".inlineEditFields"] = array();
$tdataTRIGGERS1[".inlineEditFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".inlineEditFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".inlineEditFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".inlineEditFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".inlineEditFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".inlineEditFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".inlineEditFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".inlineEditFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".inlineEditFields"][] = "CREATED";
$tdataTRIGGERS1[".inlineEditFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".inlineEditFields"][] = "DEFINER";
$tdataTRIGGERS1[".inlineEditFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".inlineEditFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".inlineEditFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".updateSelectedFields"] = array();
$tdataTRIGGERS1[".updateSelectedFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".updateSelectedFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".updateSelectedFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".updateSelectedFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".updateSelectedFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".updateSelectedFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".updateSelectedFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".updateSelectedFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".updateSelectedFields"][] = "CREATED";
$tdataTRIGGERS1[".updateSelectedFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".updateSelectedFields"][] = "DEFINER";
$tdataTRIGGERS1[".updateSelectedFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".updateSelectedFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".updateSelectedFields"][] = "DATABASE_COLLATION";


$tdataTRIGGERS1[".exportFields"] = array();
$tdataTRIGGERS1[".exportFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".exportFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".exportFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".exportFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".exportFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".exportFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".exportFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".exportFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".exportFields"][] = "CREATED";
$tdataTRIGGERS1[".exportFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".exportFields"][] = "DEFINER";
$tdataTRIGGERS1[".exportFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".exportFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".exportFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".importFields"] = array();
$tdataTRIGGERS1[".importFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".importFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".importFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".importFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".importFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".importFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".importFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".importFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".importFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".importFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".importFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".importFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".importFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".importFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".importFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".importFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".importFields"][] = "CREATED";
$tdataTRIGGERS1[".importFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".importFields"][] = "DEFINER";
$tdataTRIGGERS1[".importFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".importFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".importFields"][] = "DATABASE_COLLATION";

$tdataTRIGGERS1[".printFields"] = array();
$tdataTRIGGERS1[".printFields"][] = "TRIGGER_CATALOG";
$tdataTRIGGERS1[".printFields"][] = "TRIGGER_SCHEMA";
$tdataTRIGGERS1[".printFields"][] = "TRIGGER_NAME";
$tdataTRIGGERS1[".printFields"][] = "EVENT_MANIPULATION";
$tdataTRIGGERS1[".printFields"][] = "EVENT_OBJECT_CATALOG";
$tdataTRIGGERS1[".printFields"][] = "EVENT_OBJECT_SCHEMA";
$tdataTRIGGERS1[".printFields"][] = "EVENT_OBJECT_TABLE";
$tdataTRIGGERS1[".printFields"][] = "ACTION_ORDER";
$tdataTRIGGERS1[".printFields"][] = "ACTION_CONDITION";
$tdataTRIGGERS1[".printFields"][] = "ACTION_STATEMENT";
$tdataTRIGGERS1[".printFields"][] = "ACTION_ORIENTATION";
$tdataTRIGGERS1[".printFields"][] = "ACTION_TIMING";
$tdataTRIGGERS1[".printFields"][] = "ACTION_REFERENCE_OLD_TABLE";
$tdataTRIGGERS1[".printFields"][] = "ACTION_REFERENCE_NEW_TABLE";
$tdataTRIGGERS1[".printFields"][] = "ACTION_REFERENCE_OLD_ROW";
$tdataTRIGGERS1[".printFields"][] = "ACTION_REFERENCE_NEW_ROW";
$tdataTRIGGERS1[".printFields"][] = "CREATED";
$tdataTRIGGERS1[".printFields"][] = "SQL_MODE";
$tdataTRIGGERS1[".printFields"][] = "DEFINER";
$tdataTRIGGERS1[".printFields"][] = "CHARACTER_SET_CLIENT";
$tdataTRIGGERS1[".printFields"][] = "COLLATION_CONNECTION";
$tdataTRIGGERS1[".printFields"][] = "DATABASE_COLLATION";

//	TRIGGER_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TRIGGER_CATALOG";
	$fdata["GoodName"] = "TRIGGER_CATALOG";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","TRIGGER_CATALOG");
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

		$fdata["strField"] = "TRIGGER_CATALOG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRIGGER_CATALOG";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS1["TRIGGER_CATALOG"] = $fdata;
//	TRIGGER_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TRIGGER_SCHEMA";
	$fdata["GoodName"] = "TRIGGER_SCHEMA";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","TRIGGER_SCHEMA");
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

		$fdata["strField"] = "TRIGGER_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRIGGER_SCHEMA";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTRIGGERS1["TRIGGER_SCHEMA"] = $fdata;
//	TRIGGER_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TRIGGER_NAME";
	$fdata["GoodName"] = "TRIGGER_NAME";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","TRIGGER_NAME");
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

		$fdata["strField"] = "TRIGGER_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRIGGER_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTRIGGERS1["TRIGGER_NAME"] = $fdata;
//	EVENT_MANIPULATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EVENT_MANIPULATION";
	$fdata["GoodName"] = "EVENT_MANIPULATION";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","EVENT_MANIPULATION");
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

		$fdata["strField"] = "EVENT_MANIPULATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVENT_MANIPULATION";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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




	$tdataTRIGGERS1["EVENT_MANIPULATION"] = $fdata;
//	EVENT_OBJECT_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EVENT_OBJECT_CATALOG";
	$fdata["GoodName"] = "EVENT_OBJECT_CATALOG";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","EVENT_OBJECT_CATALOG");
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

		$fdata["strField"] = "EVENT_OBJECT_CATALOG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVENT_OBJECT_CATALOG";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS1["EVENT_OBJECT_CATALOG"] = $fdata;
//	EVENT_OBJECT_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EVENT_OBJECT_SCHEMA";
	$fdata["GoodName"] = "EVENT_OBJECT_SCHEMA";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","EVENT_OBJECT_SCHEMA");
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

		$fdata["strField"] = "EVENT_OBJECT_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVENT_OBJECT_SCHEMA";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTRIGGERS1["EVENT_OBJECT_SCHEMA"] = $fdata;
//	EVENT_OBJECT_TABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EVENT_OBJECT_TABLE";
	$fdata["GoodName"] = "EVENT_OBJECT_TABLE";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","EVENT_OBJECT_TABLE");
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

		$fdata["strField"] = "EVENT_OBJECT_TABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVENT_OBJECT_TABLE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTRIGGERS1["EVENT_OBJECT_TABLE"] = $fdata;
//	ACTION_ORDER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ACTION_ORDER";
	$fdata["GoodName"] = "ACTION_ORDER";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_ORDER");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "ACTION_ORDER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_ORDER";

	
	
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




	$tdataTRIGGERS1["ACTION_ORDER"] = $fdata;
//	ACTION_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ACTION_CONDITION";
	$fdata["GoodName"] = "ACTION_CONDITION";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_CONDITION");
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

		$fdata["strField"] = "ACTION_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_CONDITION";

	
	
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




	$tdataTRIGGERS1["ACTION_CONDITION"] = $fdata;
//	ACTION_STATEMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ACTION_STATEMENT";
	$fdata["GoodName"] = "ACTION_STATEMENT";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_STATEMENT");
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

		$fdata["strField"] = "ACTION_STATEMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_STATEMENT";

	
	
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




	$tdataTRIGGERS1["ACTION_STATEMENT"] = $fdata;
//	ACTION_ORIENTATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ACTION_ORIENTATION";
	$fdata["GoodName"] = "ACTION_ORIENTATION";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_ORIENTATION");
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

		$fdata["strField"] = "ACTION_ORIENTATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_ORIENTATION";

	
	
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
			$edata["EditParams"].= " maxlength=9";

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




	$tdataTRIGGERS1["ACTION_ORIENTATION"] = $fdata;
//	ACTION_TIMING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ACTION_TIMING";
	$fdata["GoodName"] = "ACTION_TIMING";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_TIMING");
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

		$fdata["strField"] = "ACTION_TIMING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_TIMING";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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




	$tdataTRIGGERS1["ACTION_TIMING"] = $fdata;
//	ACTION_REFERENCE_OLD_TABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ACTION_REFERENCE_OLD_TABLE";
	$fdata["GoodName"] = "ACTION_REFERENCE_OLD_TABLE";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_REFERENCE_OLD_TABLE");
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

		$fdata["strField"] = "ACTION_REFERENCE_OLD_TABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_REFERENCE_OLD_TABLE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTRIGGERS1["ACTION_REFERENCE_OLD_TABLE"] = $fdata;
//	ACTION_REFERENCE_NEW_TABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ACTION_REFERENCE_NEW_TABLE";
	$fdata["GoodName"] = "ACTION_REFERENCE_NEW_TABLE";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_REFERENCE_NEW_TABLE");
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

		$fdata["strField"] = "ACTION_REFERENCE_NEW_TABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_REFERENCE_NEW_TABLE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTRIGGERS1["ACTION_REFERENCE_NEW_TABLE"] = $fdata;
//	ACTION_REFERENCE_OLD_ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ACTION_REFERENCE_OLD_ROW";
	$fdata["GoodName"] = "ACTION_REFERENCE_OLD_ROW";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_REFERENCE_OLD_ROW");
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

		$fdata["strField"] = "ACTION_REFERENCE_OLD_ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_REFERENCE_OLD_ROW";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdataTRIGGERS1["ACTION_REFERENCE_OLD_ROW"] = $fdata;
//	ACTION_REFERENCE_NEW_ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ACTION_REFERENCE_NEW_ROW";
	$fdata["GoodName"] = "ACTION_REFERENCE_NEW_ROW";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","ACTION_REFERENCE_NEW_ROW");
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

		$fdata["strField"] = "ACTION_REFERENCE_NEW_ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTION_REFERENCE_NEW_ROW";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdataTRIGGERS1["ACTION_REFERENCE_NEW_ROW"] = $fdata;
//	CREATED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CREATED";
	$fdata["GoodName"] = "CREATED";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","CREATED");
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

		$fdata["strField"] = "CREATED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CREATED";

	
	
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




	$tdataTRIGGERS1["CREATED"] = $fdata;
//	SQL_MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SQL_MODE";
	$fdata["GoodName"] = "SQL_MODE";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","SQL_MODE");
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

		$fdata["strField"] = "SQL_MODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SQL_MODE";

	
	
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
			$edata["EditParams"].= " maxlength=8192";

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




	$tdataTRIGGERS1["SQL_MODE"] = $fdata;
//	DEFINER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEFINER";
	$fdata["GoodName"] = "DEFINER";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","DEFINER");
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

		$fdata["strField"] = "DEFINER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEFINER";

	
	
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
			$edata["EditParams"].= " maxlength=77";

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




	$tdataTRIGGERS1["DEFINER"] = $fdata;
//	CHARACTER_SET_CLIENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CHARACTER_SET_CLIENT";
	$fdata["GoodName"] = "CHARACTER_SET_CLIENT";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","CHARACTER_SET_CLIENT");
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

		$fdata["strField"] = "CHARACTER_SET_CLIENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_SET_CLIENT";

	
	
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




	$tdataTRIGGERS1["CHARACTER_SET_CLIENT"] = $fdata;
//	COLLATION_CONNECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "COLLATION_CONNECTION";
	$fdata["GoodName"] = "COLLATION_CONNECTION";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","COLLATION_CONNECTION");
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

		$fdata["strField"] = "COLLATION_CONNECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLLATION_CONNECTION";

	
	
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




	$tdataTRIGGERS1["COLLATION_CONNECTION"] = $fdata;
//	DATABASE_COLLATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DATABASE_COLLATION";
	$fdata["GoodName"] = "DATABASE_COLLATION";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS1","DATABASE_COLLATION");
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

		$fdata["strField"] = "DATABASE_COLLATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATABASE_COLLATION";

	
	
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




	$tdataTRIGGERS1["DATABASE_COLLATION"] = $fdata;


$tables_data["TRIGGERS1"]=&$tdataTRIGGERS1;
$field_labels["TRIGGERS1"] = &$fieldLabelsTRIGGERS1;
$fieldToolTips["TRIGGERS1"] = &$fieldToolTipsTRIGGERS1;
$placeHolders["TRIGGERS1"] = &$placeHoldersTRIGGERS1;
$page_titles["TRIGGERS1"] = &$pageTitlesTRIGGERS1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TRIGGERS1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TRIGGERS1"] = array();


	
				$strOriginalDetailsTable="TABLES";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TABLES";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "TABLES";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["TRIGGERS1"][0] = $masterParams;
				$masterTablesData["TRIGGERS1"][0]["masterKeys"] = array();
	$masterTablesData["TRIGGERS1"][0]["masterKeys"][]="TABLE_NAME";
				$masterTablesData["TRIGGERS1"][0]["detailKeys"] = array();
	$masterTablesData["TRIGGERS1"][0]["detailKeys"][]="EVENT_OBJECT_TABLE";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TRIGGERS1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TRIGGER_CATALOG,  	TRIGGER_SCHEMA,  	TRIGGER_NAME,  	EVENT_MANIPULATION,  	EVENT_OBJECT_CATALOG,  	EVENT_OBJECT_SCHEMA,  	EVENT_OBJECT_TABLE,  	ACTION_ORDER,  	ACTION_CONDITION,  	ACTION_STATEMENT,  	ACTION_ORIENTATION,  	ACTION_TIMING,  	ACTION_REFERENCE_OLD_TABLE,  	ACTION_REFERENCE_NEW_TABLE,  	ACTION_REFERENCE_OLD_ROW,  	ACTION_REFERENCE_NEW_ROW,  	CREATED,  	SQL_MODE,  	DEFINER,  	CHARACTER_SET_CLIENT,  	COLLATION_CONNECTION,  	DATABASE_COLLATION";
$proto0["m_strFrom"] = "FROM TRIGGERS";
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
	"m_strName" => "TRIGGER_CATALOG",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto6["m_sql"] = "TRIGGER_CATALOG";
$proto6["m_srcTableName"] = "TRIGGERS1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TRIGGER_SCHEMA",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto8["m_sql"] = "TRIGGER_SCHEMA";
$proto8["m_srcTableName"] = "TRIGGERS1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TRIGGER_NAME",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto10["m_sql"] = "TRIGGER_NAME";
$proto10["m_srcTableName"] = "TRIGGERS1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EVENT_MANIPULATION",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto12["m_sql"] = "EVENT_MANIPULATION";
$proto12["m_srcTableName"] = "TRIGGERS1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EVENT_OBJECT_CATALOG",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto14["m_sql"] = "EVENT_OBJECT_CATALOG";
$proto14["m_srcTableName"] = "TRIGGERS1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EVENT_OBJECT_SCHEMA",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto16["m_sql"] = "EVENT_OBJECT_SCHEMA";
$proto16["m_srcTableName"] = "TRIGGERS1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EVENT_OBJECT_TABLE",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto18["m_sql"] = "EVENT_OBJECT_TABLE";
$proto18["m_srcTableName"] = "TRIGGERS1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_ORDER",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto20["m_sql"] = "ACTION_ORDER";
$proto20["m_srcTableName"] = "TRIGGERS1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_CONDITION",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto22["m_sql"] = "ACTION_CONDITION";
$proto22["m_srcTableName"] = "TRIGGERS1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_STATEMENT",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto24["m_sql"] = "ACTION_STATEMENT";
$proto24["m_srcTableName"] = "TRIGGERS1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_ORIENTATION",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto26["m_sql"] = "ACTION_ORIENTATION";
$proto26["m_srcTableName"] = "TRIGGERS1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_TIMING",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto28["m_sql"] = "ACTION_TIMING";
$proto28["m_srcTableName"] = "TRIGGERS1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_REFERENCE_OLD_TABLE",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto30["m_sql"] = "ACTION_REFERENCE_OLD_TABLE";
$proto30["m_srcTableName"] = "TRIGGERS1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_REFERENCE_NEW_TABLE",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto32["m_sql"] = "ACTION_REFERENCE_NEW_TABLE";
$proto32["m_srcTableName"] = "TRIGGERS1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_REFERENCE_OLD_ROW",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto34["m_sql"] = "ACTION_REFERENCE_OLD_ROW";
$proto34["m_srcTableName"] = "TRIGGERS1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTION_REFERENCE_NEW_ROW",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto36["m_sql"] = "ACTION_REFERENCE_NEW_ROW";
$proto36["m_srcTableName"] = "TRIGGERS1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CREATED",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto38["m_sql"] = "CREATED";
$proto38["m_srcTableName"] = "TRIGGERS1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SQL_MODE",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto40["m_sql"] = "SQL_MODE";
$proto40["m_srcTableName"] = "TRIGGERS1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEFINER",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto42["m_sql"] = "DEFINER";
$proto42["m_srcTableName"] = "TRIGGERS1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_SET_CLIENT",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto44["m_sql"] = "CHARACTER_SET_CLIENT";
$proto44["m_srcTableName"] = "TRIGGERS1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "COLLATION_CONNECTION",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto46["m_sql"] = "COLLATION_CONNECTION";
$proto46["m_srcTableName"] = "TRIGGERS1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DATABASE_COLLATION",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS1"
));

$proto48["m_sql"] = "DATABASE_COLLATION";
$proto48["m_srcTableName"] = "TRIGGERS1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "TRIGGERS";
$proto51["m_srcTableName"] = "TRIGGERS1";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "TRIGGER_CATALOG";
$proto51["m_columns"][] = "TRIGGER_SCHEMA";
$proto51["m_columns"][] = "TRIGGER_NAME";
$proto51["m_columns"][] = "EVENT_MANIPULATION";
$proto51["m_columns"][] = "EVENT_OBJECT_CATALOG";
$proto51["m_columns"][] = "EVENT_OBJECT_SCHEMA";
$proto51["m_columns"][] = "EVENT_OBJECT_TABLE";
$proto51["m_columns"][] = "ACTION_ORDER";
$proto51["m_columns"][] = "ACTION_CONDITION";
$proto51["m_columns"][] = "ACTION_STATEMENT";
$proto51["m_columns"][] = "ACTION_ORIENTATION";
$proto51["m_columns"][] = "ACTION_TIMING";
$proto51["m_columns"][] = "ACTION_REFERENCE_OLD_TABLE";
$proto51["m_columns"][] = "ACTION_REFERENCE_NEW_TABLE";
$proto51["m_columns"][] = "ACTION_REFERENCE_OLD_ROW";
$proto51["m_columns"][] = "ACTION_REFERENCE_NEW_ROW";
$proto51["m_columns"][] = "CREATED";
$proto51["m_columns"][] = "SQL_MODE";
$proto51["m_columns"][] = "DEFINER";
$proto51["m_columns"][] = "CHARACTER_SET_CLIENT";
$proto51["m_columns"][] = "COLLATION_CONNECTION";
$proto51["m_columns"][] = "DATABASE_COLLATION";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "TRIGGERS";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "TRIGGERS1";
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
$proto0["m_srcTableName"]="TRIGGERS1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TRIGGERS1 = createSqlQuery_TRIGGERS1();


	
						;

																						

$tdataTRIGGERS1[".sqlquery"] = $queryData_TRIGGERS1;

$tableEvents["TRIGGERS1"] = new eventsBase;
$tdataTRIGGERS1[".hasEvents"] = false;

?>
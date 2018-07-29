<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTABLES = array();
	$tdataTABLES[".truncateText"] = true;
	$tdataTABLES[".NumberOfChars"] = 20;
	$tdataTABLES[".ShortName"] = "TABLES";
	$tdataTABLES[".OwnerID"] = "";
	$tdataTABLES[".OriginalTable"] = "TABLES";

//	field labels
$fieldLabelsTABLES = array();
$fieldToolTipsTABLES = array();
$pageTitlesTABLES = array();
$placeHoldersTABLES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTABLES["Japanese"] = array();
	$fieldToolTipsTABLES["Japanese"] = array();
	$placeHoldersTABLES["Japanese"] = array();
	$pageTitlesTABLES["Japanese"] = array();
	$fieldLabelsTABLES["Japanese"]["TABLE_CATALOG"] = "テーブルカタログ";
	$fieldToolTipsTABLES["Japanese"]["TABLE_CATALOG"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_CATALOG"] = "";
	$fieldLabelsTABLES["Japanese"]["TABLE_SCHEMA"] = "テーブルスキーマ";
	$fieldToolTipsTABLES["Japanese"]["TABLE_SCHEMA"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_SCHEMA"] = "";
	$fieldLabelsTABLES["Japanese"]["TABLE_NAME"] = "テーブル名";
	$fieldToolTipsTABLES["Japanese"]["TABLE_NAME"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_NAME"] = "";
	$fieldLabelsTABLES["Japanese"]["TABLE_TYPE"] = "テーブルタイプ";
	$fieldToolTipsTABLES["Japanese"]["TABLE_TYPE"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_TYPE"] = "";
	$fieldLabelsTABLES["Japanese"]["ENGINE"] = "エンジン";
	$fieldToolTipsTABLES["Japanese"]["ENGINE"] = "";
	$placeHoldersTABLES["Japanese"]["ENGINE"] = "";
	$fieldLabelsTABLES["Japanese"]["VERSION"] = "バージョン";
	$fieldToolTipsTABLES["Japanese"]["VERSION"] = "";
	$placeHoldersTABLES["Japanese"]["VERSION"] = "";
	$fieldLabelsTABLES["Japanese"]["ROW_FORMAT"] = "行フォーマット";
	$fieldToolTipsTABLES["Japanese"]["ROW_FORMAT"] = "";
	$placeHoldersTABLES["Japanese"]["ROW_FORMAT"] = "";
	$fieldLabelsTABLES["Japanese"]["TABLE_ROWS"] = "テーブルの行";
	$fieldToolTipsTABLES["Japanese"]["TABLE_ROWS"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_ROWS"] = "";
	$fieldLabelsTABLES["Japanese"]["AVG_ROW_LENGTH"] = "平均行の長さ";
	$fieldToolTipsTABLES["Japanese"]["AVG_ROW_LENGTH"] = "";
	$placeHoldersTABLES["Japanese"]["AVG_ROW_LENGTH"] = "";
	$fieldLabelsTABLES["Japanese"]["DATA_LENGTH"] = "データ長";
	$fieldToolTipsTABLES["Japanese"]["DATA_LENGTH"] = "";
	$placeHoldersTABLES["Japanese"]["DATA_LENGTH"] = "";
	$fieldLabelsTABLES["Japanese"]["MAX_DATA_LENGTH"] = "最大データ長";
	$fieldToolTipsTABLES["Japanese"]["MAX_DATA_LENGTH"] = "";
	$placeHoldersTABLES["Japanese"]["MAX_DATA_LENGTH"] = "";
	$fieldLabelsTABLES["Japanese"]["INDEX_LENGTH"] = "インデックス長";
	$fieldToolTipsTABLES["Japanese"]["INDEX_LENGTH"] = "";
	$placeHoldersTABLES["Japanese"]["INDEX_LENGTH"] = "";
	$fieldLabelsTABLES["Japanese"]["DATA_FREE"] = "無料データ";
	$fieldToolTipsTABLES["Japanese"]["DATA_FREE"] = "";
	$placeHoldersTABLES["Japanese"]["DATA_FREE"] = "";
	$fieldLabelsTABLES["Japanese"]["AUTO_INCREMENT"] = "自動増加";
	$fieldToolTipsTABLES["Japanese"]["AUTO_INCREMENT"] = "";
	$placeHoldersTABLES["Japanese"]["AUTO_INCREMENT"] = "";
	$fieldLabelsTABLES["Japanese"]["CREATE_TIME"] = "時間を作成します";
	$fieldToolTipsTABLES["Japanese"]["CREATE_TIME"] = "";
	$placeHoldersTABLES["Japanese"]["CREATE_TIME"] = "";
	$fieldLabelsTABLES["Japanese"]["UPDATE_TIME"] = "更新時間";
	$fieldToolTipsTABLES["Japanese"]["UPDATE_TIME"] = "";
	$placeHoldersTABLES["Japanese"]["UPDATE_TIME"] = "";
	$fieldLabelsTABLES["Japanese"]["CHECK_TIME"] = "時刻を確認";
	$fieldToolTipsTABLES["Japanese"]["CHECK_TIME"] = "";
	$placeHoldersTABLES["Japanese"]["CHECK_TIME"] = "";
	$fieldLabelsTABLES["Japanese"]["TABLE_COLLATION"] = "テーブルの照合";
	$fieldToolTipsTABLES["Japanese"]["TABLE_COLLATION"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_COLLATION"] = "";
	$fieldLabelsTABLES["Japanese"]["CHECKSUM"] = "チェックサム";
	$fieldToolTipsTABLES["Japanese"]["CHECKSUM"] = "";
	$placeHoldersTABLES["Japanese"]["CHECKSUM"] = "";
	$fieldLabelsTABLES["Japanese"]["CREATE_OPTIONS"] = "オプションを作成";
	$fieldToolTipsTABLES["Japanese"]["CREATE_OPTIONS"] = "";
	$placeHoldersTABLES["Japanese"]["CREATE_OPTIONS"] = "";
	$fieldLabelsTABLES["Japanese"]["TABLE_COMMENT"] = "テーブルのコメント";
	$fieldToolTipsTABLES["Japanese"]["TABLE_COMMENT"] = "";
	$placeHoldersTABLES["Japanese"]["TABLE_COMMENT"] = "";
	if (count($fieldToolTipsTABLES["Japanese"]))
		$tdataTABLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTABLES["English"] = array();
	$fieldToolTipsTABLES["English"] = array();
	$placeHoldersTABLES["English"] = array();
	$pageTitlesTABLES["English"] = array();
	$fieldLabelsTABLES["English"]["TABLE_CATALOG"] = "テーブルカタログ";
	$fieldToolTipsTABLES["English"]["TABLE_CATALOG"] = "";
	$placeHoldersTABLES["English"]["TABLE_CATALOG"] = "";
	$fieldLabelsTABLES["English"]["TABLE_SCHEMA"] = "テーブルスキーマ";
	$fieldToolTipsTABLES["English"]["TABLE_SCHEMA"] = "";
	$placeHoldersTABLES["English"]["TABLE_SCHEMA"] = "";
	$fieldLabelsTABLES["English"]["TABLE_NAME"] = "テーブル名";
	$fieldToolTipsTABLES["English"]["TABLE_NAME"] = "";
	$placeHoldersTABLES["English"]["TABLE_NAME"] = "";
	$fieldLabelsTABLES["English"]["TABLE_TYPE"] = "テーブルタイプ";
	$fieldToolTipsTABLES["English"]["TABLE_TYPE"] = "";
	$placeHoldersTABLES["English"]["TABLE_TYPE"] = "";
	$fieldLabelsTABLES["English"]["ENGINE"] = "エンジン";
	$fieldToolTipsTABLES["English"]["ENGINE"] = "";
	$placeHoldersTABLES["English"]["ENGINE"] = "";
	$fieldLabelsTABLES["English"]["VERSION"] = "バージョン";
	$fieldToolTipsTABLES["English"]["VERSION"] = "";
	$placeHoldersTABLES["English"]["VERSION"] = "";
	$fieldLabelsTABLES["English"]["ROW_FORMAT"] = "行フォーマット";
	$fieldToolTipsTABLES["English"]["ROW_FORMAT"] = "";
	$placeHoldersTABLES["English"]["ROW_FORMAT"] = "";
	$fieldLabelsTABLES["English"]["TABLE_ROWS"] = "テーブルの行";
	$fieldToolTipsTABLES["English"]["TABLE_ROWS"] = "";
	$placeHoldersTABLES["English"]["TABLE_ROWS"] = "";
	$fieldLabelsTABLES["English"]["AVG_ROW_LENGTH"] = "平均行の長さ";
	$fieldToolTipsTABLES["English"]["AVG_ROW_LENGTH"] = "";
	$placeHoldersTABLES["English"]["AVG_ROW_LENGTH"] = "";
	$fieldLabelsTABLES["English"]["DATA_LENGTH"] = "データ長";
	$fieldToolTipsTABLES["English"]["DATA_LENGTH"] = "";
	$placeHoldersTABLES["English"]["DATA_LENGTH"] = "";
	$fieldLabelsTABLES["English"]["MAX_DATA_LENGTH"] = "最大データ長";
	$fieldToolTipsTABLES["English"]["MAX_DATA_LENGTH"] = "";
	$placeHoldersTABLES["English"]["MAX_DATA_LENGTH"] = "";
	$fieldLabelsTABLES["English"]["INDEX_LENGTH"] = "インデックス長";
	$fieldToolTipsTABLES["English"]["INDEX_LENGTH"] = "";
	$placeHoldersTABLES["English"]["INDEX_LENGTH"] = "";
	$fieldLabelsTABLES["English"]["DATA_FREE"] = "無料データ";
	$fieldToolTipsTABLES["English"]["DATA_FREE"] = "";
	$placeHoldersTABLES["English"]["DATA_FREE"] = "";
	$fieldLabelsTABLES["English"]["AUTO_INCREMENT"] = "自動増加";
	$fieldToolTipsTABLES["English"]["AUTO_INCREMENT"] = "";
	$placeHoldersTABLES["English"]["AUTO_INCREMENT"] = "";
	$fieldLabelsTABLES["English"]["CREATE_TIME"] = "時間を作成します";
	$fieldToolTipsTABLES["English"]["CREATE_TIME"] = "";
	$placeHoldersTABLES["English"]["CREATE_TIME"] = "";
	$fieldLabelsTABLES["English"]["UPDATE_TIME"] = "更新時間";
	$fieldToolTipsTABLES["English"]["UPDATE_TIME"] = "";
	$placeHoldersTABLES["English"]["UPDATE_TIME"] = "";
	$fieldLabelsTABLES["English"]["CHECK_TIME"] = "時刻を確認";
	$fieldToolTipsTABLES["English"]["CHECK_TIME"] = "";
	$placeHoldersTABLES["English"]["CHECK_TIME"] = "";
	$fieldLabelsTABLES["English"]["TABLE_COLLATION"] = "テーブルの照合";
	$fieldToolTipsTABLES["English"]["TABLE_COLLATION"] = "";
	$placeHoldersTABLES["English"]["TABLE_COLLATION"] = "";
	$fieldLabelsTABLES["English"]["CHECKSUM"] = "チェックサム";
	$fieldToolTipsTABLES["English"]["CHECKSUM"] = "";
	$placeHoldersTABLES["English"]["CHECKSUM"] = "";
	$fieldLabelsTABLES["English"]["CREATE_OPTIONS"] = "オプションを作成";
	$fieldToolTipsTABLES["English"]["CREATE_OPTIONS"] = "";
	$placeHoldersTABLES["English"]["CREATE_OPTIONS"] = "";
	$fieldLabelsTABLES["English"]["TABLE_COMMENT"] = "テーブルのコメント";
	$fieldToolTipsTABLES["English"]["TABLE_COMMENT"] = "";
	$placeHoldersTABLES["English"]["TABLE_COMMENT"] = "";
	if (count($fieldToolTipsTABLES["English"]))
		$tdataTABLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTABLES[""] = array();
	$fieldToolTipsTABLES[""] = array();
	$placeHoldersTABLES[""] = array();
	$pageTitlesTABLES[""] = array();
	if (count($fieldToolTipsTABLES[""]))
		$tdataTABLES[".isUseToolTips"] = true;
}


	$tdataTABLES[".NCSearch"] = true;



$tdataTABLES[".shortTableName"] = "TABLES";
$tdataTABLES[".nSecOptions"] = 0;
$tdataTABLES[".recsPerRowPrint"] = 1;
$tdataTABLES[".mainTableOwnerID"] = "";
$tdataTABLES[".moveNext"] = 0;
$tdataTABLES[".entityType"] = 0;

$tdataTABLES[".strOriginalTableName"] = "TABLES";

	



$tdataTABLES[".showAddInPopup"] = false;

$tdataTABLES[".showEditInPopup"] = false;

$tdataTABLES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTABLES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTABLES[".fieldsForRegister"] = array();
	
$tdataTABLES[".listAjax"] = false;

	$tdataTABLES[".audit"] = true;

	$tdataTABLES[".locking"] = false;



$tdataTABLES[".list"] = true;



$tdataTABLES[".reorderRecordsByHeader"] = true;



$tdataTABLES[".inlineAdd"] = true;

$tdataTABLES[".import"] = true;

$tdataTABLES[".exportTo"] = true;

$tdataTABLES[".printFriendly"] = true;


$tdataTABLES[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTABLES[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTABLES[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTABLES[".searchSaving"] = false;
//

$tdataTABLES[".showSearchPanel"] = true;
		$tdataTABLES[".flexibleSearch"] = true;

$tdataTABLES[".isUseAjaxSuggest"] = true;

$tdataTABLES[".rowHighlite"] = true;



																

$tdataTABLES[".ajaxCodeSnippetAdded"] = false;

$tdataTABLES[".buttonsAdded"] = false;

$tdataTABLES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTABLES[".isUseTimeForSearch"] = false;



$tdataTABLES[".badgeColor"] = "d2691e";


$tdataTABLES[".allSearchFields"] = array();
$tdataTABLES[".filterFields"] = array();
$tdataTABLES[".requiredSearchFields"] = array();

$tdataTABLES[".allSearchFields"][] = "TABLE_CATALOG";
	$tdataTABLES[".allSearchFields"][] = "TABLE_SCHEMA";
	$tdataTABLES[".allSearchFields"][] = "TABLE_NAME";
	$tdataTABLES[".allSearchFields"][] = "TABLE_TYPE";
	$tdataTABLES[".allSearchFields"][] = "ENGINE";
	$tdataTABLES[".allSearchFields"][] = "VERSION";
	$tdataTABLES[".allSearchFields"][] = "ROW_FORMAT";
	$tdataTABLES[".allSearchFields"][] = "TABLE_ROWS";
	$tdataTABLES[".allSearchFields"][] = "AVG_ROW_LENGTH";
	$tdataTABLES[".allSearchFields"][] = "DATA_LENGTH";
	$tdataTABLES[".allSearchFields"][] = "MAX_DATA_LENGTH";
	$tdataTABLES[".allSearchFields"][] = "INDEX_LENGTH";
	$tdataTABLES[".allSearchFields"][] = "DATA_FREE";
	$tdataTABLES[".allSearchFields"][] = "AUTO_INCREMENT";
	$tdataTABLES[".allSearchFields"][] = "CREATE_TIME";
	$tdataTABLES[".allSearchFields"][] = "UPDATE_TIME";
	$tdataTABLES[".allSearchFields"][] = "CHECK_TIME";
	$tdataTABLES[".allSearchFields"][] = "TABLE_COLLATION";
	$tdataTABLES[".allSearchFields"][] = "CHECKSUM";
	$tdataTABLES[".allSearchFields"][] = "CREATE_OPTIONS";
	$tdataTABLES[".allSearchFields"][] = "TABLE_COMMENT";
	
$tdataTABLES[".filterFields"][] = "TABLE_NAME";

$tdataTABLES[".googleLikeFields"] = array();
$tdataTABLES[".googleLikeFields"][] = "TABLE_CATALOG";
$tdataTABLES[".googleLikeFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".googleLikeFields"][] = "TABLE_NAME";
$tdataTABLES[".googleLikeFields"][] = "TABLE_TYPE";
$tdataTABLES[".googleLikeFields"][] = "ENGINE";
$tdataTABLES[".googleLikeFields"][] = "VERSION";
$tdataTABLES[".googleLikeFields"][] = "ROW_FORMAT";
$tdataTABLES[".googleLikeFields"][] = "TABLE_ROWS";
$tdataTABLES[".googleLikeFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".googleLikeFields"][] = "DATA_LENGTH";
$tdataTABLES[".googleLikeFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".googleLikeFields"][] = "INDEX_LENGTH";
$tdataTABLES[".googleLikeFields"][] = "DATA_FREE";
$tdataTABLES[".googleLikeFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".googleLikeFields"][] = "CREATE_TIME";
$tdataTABLES[".googleLikeFields"][] = "UPDATE_TIME";
$tdataTABLES[".googleLikeFields"][] = "CHECK_TIME";
$tdataTABLES[".googleLikeFields"][] = "TABLE_COLLATION";
$tdataTABLES[".googleLikeFields"][] = "CHECKSUM";
$tdataTABLES[".googleLikeFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".googleLikeFields"][] = "TABLE_COMMENT";


$tdataTABLES[".advSearchFields"] = array();
$tdataTABLES[".advSearchFields"][] = "TABLE_CATALOG";
$tdataTABLES[".advSearchFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".advSearchFields"][] = "TABLE_NAME";
$tdataTABLES[".advSearchFields"][] = "TABLE_TYPE";
$tdataTABLES[".advSearchFields"][] = "ENGINE";
$tdataTABLES[".advSearchFields"][] = "VERSION";
$tdataTABLES[".advSearchFields"][] = "ROW_FORMAT";
$tdataTABLES[".advSearchFields"][] = "TABLE_ROWS";
$tdataTABLES[".advSearchFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".advSearchFields"][] = "DATA_LENGTH";
$tdataTABLES[".advSearchFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".advSearchFields"][] = "INDEX_LENGTH";
$tdataTABLES[".advSearchFields"][] = "DATA_FREE";
$tdataTABLES[".advSearchFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".advSearchFields"][] = "CREATE_TIME";
$tdataTABLES[".advSearchFields"][] = "UPDATE_TIME";
$tdataTABLES[".advSearchFields"][] = "CHECK_TIME";
$tdataTABLES[".advSearchFields"][] = "TABLE_COLLATION";
$tdataTABLES[".advSearchFields"][] = "CHECKSUM";
$tdataTABLES[".advSearchFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".advSearchFields"][] = "TABLE_COMMENT";

$tdataTABLES[".tableType"] = "list";

$tdataTABLES[".printerPageOrientation"] = 0;
$tdataTABLES[".nPrinterPageScale"] = 100;

$tdataTABLES[".nPrinterSplitRecords"] = 40;

$tdataTABLES[".nPrinterPDFSplitRecords"] = 40;



$tdataTABLES[".geocodingEnabled"] = false;





$tdataTABLES[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataTABLES[".pageSize"] = 20;

$tdataTABLES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTABLES[".strOrderBy"] = $tstrOrderBy;

$tdataTABLES[".orderindexes"] = array();

$tdataTABLES[".sqlHead"] = "SELECT TABLE_CATALOG,  	TABLE_SCHEMA,  	TABLE_NAME,  	TABLE_TYPE,  	ENGINE,  	VERSION,  	ROW_FORMAT,  	TABLE_ROWS,  	AVG_ROW_LENGTH,  	DATA_LENGTH,  	MAX_DATA_LENGTH,  	INDEX_LENGTH,  	DATA_FREE,  	AUTO_INCREMENT,  	CREATE_TIME,  	UPDATE_TIME,  	CHECK_TIME,  	TABLE_COLLATION,  	CHECKSUM,  	CREATE_OPTIONS,  	TABLE_COMMENT";
$tdataTABLES[".sqlFrom"] = "FROM TABLES";
$tdataTABLES[".sqlWhereExpr"] = "";
$tdataTABLES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTABLES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTABLES[".arrGroupsPerPage"] = $arrGPP;

$tdataTABLES[".highlightSearchResults"] = true;

$tableKeysTABLES = array();
$tdataTABLES[".Keys"] = $tableKeysTABLES;

$tdataTABLES[".listFields"] = array();
$tdataTABLES[".listFields"][] = "TABLE_CATALOG";
$tdataTABLES[".listFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".listFields"][] = "TABLE_NAME";
$tdataTABLES[".listFields"][] = "TABLE_TYPE";
$tdataTABLES[".listFields"][] = "ENGINE";
$tdataTABLES[".listFields"][] = "VERSION";
$tdataTABLES[".listFields"][] = "ROW_FORMAT";
$tdataTABLES[".listFields"][] = "TABLE_ROWS";
$tdataTABLES[".listFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".listFields"][] = "DATA_LENGTH";
$tdataTABLES[".listFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".listFields"][] = "INDEX_LENGTH";
$tdataTABLES[".listFields"][] = "DATA_FREE";
$tdataTABLES[".listFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".listFields"][] = "CREATE_TIME";
$tdataTABLES[".listFields"][] = "UPDATE_TIME";
$tdataTABLES[".listFields"][] = "CHECK_TIME";
$tdataTABLES[".listFields"][] = "TABLE_COLLATION";
$tdataTABLES[".listFields"][] = "CHECKSUM";
$tdataTABLES[".listFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".listFields"][] = "TABLE_COMMENT";

$tdataTABLES[".hideMobileList"] = array();


$tdataTABLES[".viewFields"] = array();

$tdataTABLES[".addFields"] = array();

$tdataTABLES[".masterListFields"] = array();
$tdataTABLES[".masterListFields"][] = "TABLE_CATALOG";
$tdataTABLES[".masterListFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".masterListFields"][] = "TABLE_NAME";
$tdataTABLES[".masterListFields"][] = "TABLE_TYPE";
$tdataTABLES[".masterListFields"][] = "ENGINE";
$tdataTABLES[".masterListFields"][] = "VERSION";
$tdataTABLES[".masterListFields"][] = "ROW_FORMAT";
$tdataTABLES[".masterListFields"][] = "TABLE_ROWS";
$tdataTABLES[".masterListFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".masterListFields"][] = "DATA_LENGTH";
$tdataTABLES[".masterListFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".masterListFields"][] = "INDEX_LENGTH";
$tdataTABLES[".masterListFields"][] = "DATA_FREE";
$tdataTABLES[".masterListFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".masterListFields"][] = "CREATE_TIME";
$tdataTABLES[".masterListFields"][] = "UPDATE_TIME";
$tdataTABLES[".masterListFields"][] = "CHECK_TIME";
$tdataTABLES[".masterListFields"][] = "TABLE_COLLATION";
$tdataTABLES[".masterListFields"][] = "CHECKSUM";
$tdataTABLES[".masterListFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".masterListFields"][] = "TABLE_COMMENT";

$tdataTABLES[".inlineAddFields"] = array();
$tdataTABLES[".inlineAddFields"][] = "TABLE_CATALOG";
$tdataTABLES[".inlineAddFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".inlineAddFields"][] = "TABLE_NAME";
$tdataTABLES[".inlineAddFields"][] = "TABLE_TYPE";
$tdataTABLES[".inlineAddFields"][] = "ENGINE";
$tdataTABLES[".inlineAddFields"][] = "VERSION";
$tdataTABLES[".inlineAddFields"][] = "ROW_FORMAT";
$tdataTABLES[".inlineAddFields"][] = "TABLE_ROWS";
$tdataTABLES[".inlineAddFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".inlineAddFields"][] = "DATA_LENGTH";
$tdataTABLES[".inlineAddFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".inlineAddFields"][] = "INDEX_LENGTH";
$tdataTABLES[".inlineAddFields"][] = "DATA_FREE";
$tdataTABLES[".inlineAddFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".inlineAddFields"][] = "CREATE_TIME";
$tdataTABLES[".inlineAddFields"][] = "UPDATE_TIME";
$tdataTABLES[".inlineAddFields"][] = "CHECK_TIME";
$tdataTABLES[".inlineAddFields"][] = "TABLE_COLLATION";
$tdataTABLES[".inlineAddFields"][] = "CHECKSUM";
$tdataTABLES[".inlineAddFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".inlineAddFields"][] = "TABLE_COMMENT";

$tdataTABLES[".editFields"] = array();

$tdataTABLES[".inlineEditFields"] = array();

$tdataTABLES[".updateSelectedFields"] = array();


$tdataTABLES[".exportFields"] = array();
$tdataTABLES[".exportFields"][] = "TABLE_CATALOG";
$tdataTABLES[".exportFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".exportFields"][] = "TABLE_NAME";
$tdataTABLES[".exportFields"][] = "TABLE_TYPE";
$tdataTABLES[".exportFields"][] = "ENGINE";
$tdataTABLES[".exportFields"][] = "VERSION";
$tdataTABLES[".exportFields"][] = "ROW_FORMAT";
$tdataTABLES[".exportFields"][] = "TABLE_ROWS";
$tdataTABLES[".exportFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".exportFields"][] = "DATA_LENGTH";
$tdataTABLES[".exportFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".exportFields"][] = "INDEX_LENGTH";
$tdataTABLES[".exportFields"][] = "DATA_FREE";
$tdataTABLES[".exportFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".exportFields"][] = "CREATE_TIME";
$tdataTABLES[".exportFields"][] = "UPDATE_TIME";
$tdataTABLES[".exportFields"][] = "CHECK_TIME";
$tdataTABLES[".exportFields"][] = "TABLE_COLLATION";
$tdataTABLES[".exportFields"][] = "CHECKSUM";
$tdataTABLES[".exportFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".exportFields"][] = "TABLE_COMMENT";

$tdataTABLES[".importFields"] = array();
$tdataTABLES[".importFields"][] = "TABLE_CATALOG";
$tdataTABLES[".importFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".importFields"][] = "TABLE_NAME";
$tdataTABLES[".importFields"][] = "TABLE_TYPE";
$tdataTABLES[".importFields"][] = "ENGINE";
$tdataTABLES[".importFields"][] = "VERSION";
$tdataTABLES[".importFields"][] = "ROW_FORMAT";
$tdataTABLES[".importFields"][] = "TABLE_ROWS";
$tdataTABLES[".importFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".importFields"][] = "DATA_LENGTH";
$tdataTABLES[".importFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".importFields"][] = "INDEX_LENGTH";
$tdataTABLES[".importFields"][] = "DATA_FREE";
$tdataTABLES[".importFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".importFields"][] = "CREATE_TIME";
$tdataTABLES[".importFields"][] = "UPDATE_TIME";
$tdataTABLES[".importFields"][] = "CHECK_TIME";
$tdataTABLES[".importFields"][] = "TABLE_COLLATION";
$tdataTABLES[".importFields"][] = "CHECKSUM";
$tdataTABLES[".importFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".importFields"][] = "TABLE_COMMENT";

$tdataTABLES[".printFields"] = array();
$tdataTABLES[".printFields"][] = "TABLE_CATALOG";
$tdataTABLES[".printFields"][] = "TABLE_SCHEMA";
$tdataTABLES[".printFields"][] = "TABLE_NAME";
$tdataTABLES[".printFields"][] = "TABLE_TYPE";
$tdataTABLES[".printFields"][] = "ENGINE";
$tdataTABLES[".printFields"][] = "VERSION";
$tdataTABLES[".printFields"][] = "ROW_FORMAT";
$tdataTABLES[".printFields"][] = "TABLE_ROWS";
$tdataTABLES[".printFields"][] = "AVG_ROW_LENGTH";
$tdataTABLES[".printFields"][] = "DATA_LENGTH";
$tdataTABLES[".printFields"][] = "MAX_DATA_LENGTH";
$tdataTABLES[".printFields"][] = "INDEX_LENGTH";
$tdataTABLES[".printFields"][] = "DATA_FREE";
$tdataTABLES[".printFields"][] = "AUTO_INCREMENT";
$tdataTABLES[".printFields"][] = "CREATE_TIME";
$tdataTABLES[".printFields"][] = "UPDATE_TIME";
$tdataTABLES[".printFields"][] = "CHECK_TIME";
$tdataTABLES[".printFields"][] = "TABLE_COLLATION";
$tdataTABLES[".printFields"][] = "CHECKSUM";
$tdataTABLES[".printFields"][] = "CREATE_OPTIONS";
$tdataTABLES[".printFields"][] = "TABLE_COMMENT";

//	TABLE_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TABLE_CATALOG";
	$fdata["GoodName"] = "TABLE_CATALOG";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_CATALOG");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_CATALOG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_CATALOG";

	
	
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




	$tdataTABLES["TABLE_CATALOG"] = $fdata;
//	TABLE_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TABLE_SCHEMA";
	$fdata["GoodName"] = "TABLE_SCHEMA";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_SCHEMA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_SCHEMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_SCHEMA";

	
	
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




	$tdataTABLES["TABLE_SCHEMA"] = $fdata;
//	TABLE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TABLE_NAME";
	$fdata["GoodName"] = "TABLE_NAME";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_NAME";

	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataTABLES["TABLE_NAME"] = $fdata;
//	TABLE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TABLE_TYPE";
	$fdata["GoodName"] = "TABLE_TYPE";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_TYPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_TYPE";

	
	
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




	$tdataTABLES["TABLE_TYPE"] = $fdata;
//	ENGINE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ENGINE";
	$fdata["GoodName"] = "ENGINE";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","ENGINE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ENGINE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ENGINE";

	
	
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




	$tdataTABLES["ENGINE"] = $fdata;
//	VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "VERSION";
	$fdata["GoodName"] = "VERSION";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","VERSION");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VERSION";

	
	
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




	$tdataTABLES["VERSION"] = $fdata;
//	ROW_FORMAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ROW_FORMAT";
	$fdata["GoodName"] = "ROW_FORMAT";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","ROW_FORMAT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ROW_FORMAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROW_FORMAT";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataTABLES["ROW_FORMAT"] = $fdata;
//	TABLE_ROWS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TABLE_ROWS";
	$fdata["GoodName"] = "TABLE_ROWS";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_ROWS");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_ROWS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_ROWS";

	
	
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




	$tdataTABLES["TABLE_ROWS"] = $fdata;
//	AVG_ROW_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AVG_ROW_LENGTH";
	$fdata["GoodName"] = "AVG_ROW_LENGTH";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","AVG_ROW_LENGTH");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AVG_ROW_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG_ROW_LENGTH";

	
	
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




	$tdataTABLES["AVG_ROW_LENGTH"] = $fdata;
//	DATA_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DATA_LENGTH";
	$fdata["GoodName"] = "DATA_LENGTH";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","DATA_LENGTH");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATA_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA_LENGTH";

	
	
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




	$tdataTABLES["DATA_LENGTH"] = $fdata;
//	MAX_DATA_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MAX_DATA_LENGTH";
	$fdata["GoodName"] = "MAX_DATA_LENGTH";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","MAX_DATA_LENGTH");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MAX_DATA_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX_DATA_LENGTH";

	
	
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




	$tdataTABLES["MAX_DATA_LENGTH"] = $fdata;
//	INDEX_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "INDEX_LENGTH";
	$fdata["GoodName"] = "INDEX_LENGTH";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","INDEX_LENGTH");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "INDEX_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INDEX_LENGTH";

	
	
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




	$tdataTABLES["INDEX_LENGTH"] = $fdata;
//	DATA_FREE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DATA_FREE";
	$fdata["GoodName"] = "DATA_FREE";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","DATA_FREE");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATA_FREE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA_FREE";

	
	
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




	$tdataTABLES["DATA_FREE"] = $fdata;
//	AUTO_INCREMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AUTO_INCREMENT";
	$fdata["GoodName"] = "AUTO_INCREMENT";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","AUTO_INCREMENT");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AUTO_INCREMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTO_INCREMENT";

	
	
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




	$tdataTABLES["AUTO_INCREMENT"] = $fdata;
//	CREATE_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CREATE_TIME";
	$fdata["GoodName"] = "CREATE_TIME";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","CREATE_TIME");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CREATE_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CREATE_TIME";

	
	
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




	$tdataTABLES["CREATE_TIME"] = $fdata;
//	UPDATE_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UPDATE_TIME";
	$fdata["GoodName"] = "UPDATE_TIME";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","UPDATE_TIME");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UPDATE_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UPDATE_TIME";

	
	
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




	$tdataTABLES["UPDATE_TIME"] = $fdata;
//	CHECK_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CHECK_TIME";
	$fdata["GoodName"] = "CHECK_TIME";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","CHECK_TIME");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHECK_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECK_TIME";

	
	
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




	$tdataTABLES["CHECK_TIME"] = $fdata;
//	TABLE_COLLATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TABLE_COLLATION";
	$fdata["GoodName"] = "TABLE_COLLATION";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_COLLATION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_COLLATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_COLLATION";

	
	
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




	$tdataTABLES["TABLE_COLLATION"] = $fdata;
//	CHECKSUM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "CHECKSUM";
	$fdata["GoodName"] = "CHECKSUM";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","CHECKSUM");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHECKSUM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHECKSUM";

	
	
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




	$tdataTABLES["CHECKSUM"] = $fdata;
//	CREATE_OPTIONS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CREATE_OPTIONS";
	$fdata["GoodName"] = "CREATE_OPTIONS";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","CREATE_OPTIONS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CREATE_OPTIONS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CREATE_OPTIONS";

	
	
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




	$tdataTABLES["CREATE_OPTIONS"] = $fdata;
//	TABLE_COMMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TABLE_COMMENT";
	$fdata["GoodName"] = "TABLE_COMMENT";
	$fdata["ownerTable"] = "TABLES";
	$fdata["Label"] = GetFieldLabel("TABLES","TABLE_COMMENT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TABLE_COMMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLE_COMMENT";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTABLES["TABLE_COMMENT"] = $fdata;


$tables_data["TABLES"]=&$tdataTABLES;
$field_labels["TABLES"] = &$fieldLabelsTABLES;
$fieldToolTips["TABLES"] = &$fieldToolTipsTABLES;
$placeHolders["TABLES"] = &$placeHoldersTABLES;
$page_titles["TABLES"] = &$pageTitlesTABLES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TABLES"] = array();
//	COLUMNS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="COLUMNS";
		$detailsParam["dOriginalTable"] = "COLUMNS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "COLUMNS";
	$detailsParam["dCaptionTable"] = GetTableCaption("COLUMNS");
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
		
	$detailsTablesData["TABLES"][$dIndex] = $detailsParam;

	
		$detailsTablesData["TABLES"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["TABLES"][$dIndex]["masterKeys"][]="TABLE_NAME";

				$detailsTablesData["TABLES"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["TABLES"][$dIndex]["detailKeys"][]="TABLE_NAME";
//	TRIGGERS1
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TRIGGERS1";
		$detailsParam["dOriginalTable"] = "TRIGGERS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "TRIGGERS1";
	$detailsParam["dCaptionTable"] = GetTableCaption("TRIGGERS1");
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
		
	$detailsTablesData["TABLES"][$dIndex] = $detailsParam;

	
		$detailsTablesData["TABLES"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["TABLES"][$dIndex]["masterKeys"][]="TABLE_NAME";

				$detailsTablesData["TABLES"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["TABLES"][$dIndex]["detailKeys"][]="EVENT_OBJECT_TABLE";

// tables which are master tables for current table (detail)
$masterTablesData["TABLES"] = array();


	
				$strOriginalDetailsTable="SCHEMATA";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="SCHEMATA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "SCHEMATA";
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
					$masterTablesData["TABLES"][0] = $masterParams;
				$masterTablesData["TABLES"][0]["masterKeys"] = array();
	$masterTablesData["TABLES"][0]["masterKeys"][]="SCHEMA_NAME";
				$masterTablesData["TABLES"][0]["detailKeys"] = array();
	$masterTablesData["TABLES"][0]["detailKeys"][]="TABLE_SCHEMA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TABLES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TABLE_CATALOG,  	TABLE_SCHEMA,  	TABLE_NAME,  	TABLE_TYPE,  	ENGINE,  	VERSION,  	ROW_FORMAT,  	TABLE_ROWS,  	AVG_ROW_LENGTH,  	DATA_LENGTH,  	MAX_DATA_LENGTH,  	INDEX_LENGTH,  	DATA_FREE,  	AUTO_INCREMENT,  	CREATE_TIME,  	UPDATE_TIME,  	CHECK_TIME,  	TABLE_COLLATION,  	CHECKSUM,  	CREATE_OPTIONS,  	TABLE_COMMENT";
$proto0["m_strFrom"] = "FROM TABLES";
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
	"m_strName" => "TABLE_CATALOG",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto6["m_sql"] = "TABLE_CATALOG";
$proto6["m_srcTableName"] = "TABLES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_SCHEMA",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto8["m_sql"] = "TABLE_SCHEMA";
$proto8["m_srcTableName"] = "TABLES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_NAME",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto10["m_sql"] = "TABLE_NAME";
$proto10["m_srcTableName"] = "TABLES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_TYPE",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto12["m_sql"] = "TABLE_TYPE";
$proto12["m_srcTableName"] = "TABLES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ENGINE",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto14["m_sql"] = "ENGINE";
$proto14["m_srcTableName"] = "TABLES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "VERSION",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto16["m_sql"] = "VERSION";
$proto16["m_srcTableName"] = "TABLES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW_FORMAT",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto18["m_sql"] = "ROW_FORMAT";
$proto18["m_srcTableName"] = "TABLES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_ROWS",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto20["m_sql"] = "TABLE_ROWS";
$proto20["m_srcTableName"] = "TABLES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AVG_ROW_LENGTH",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto22["m_sql"] = "AVG_ROW_LENGTH";
$proto22["m_srcTableName"] = "TABLES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA_LENGTH",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto24["m_sql"] = "DATA_LENGTH";
$proto24["m_srcTableName"] = "TABLES";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "MAX_DATA_LENGTH",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto26["m_sql"] = "MAX_DATA_LENGTH";
$proto26["m_srcTableName"] = "TABLES";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "INDEX_LENGTH",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto28["m_sql"] = "INDEX_LENGTH";
$proto28["m_srcTableName"] = "TABLES";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA_FREE",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto30["m_sql"] = "DATA_FREE";
$proto30["m_srcTableName"] = "TABLES";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTO_INCREMENT",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto32["m_sql"] = "AUTO_INCREMENT";
$proto32["m_srcTableName"] = "TABLES";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CREATE_TIME",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto34["m_sql"] = "CREATE_TIME";
$proto34["m_srcTableName"] = "TABLES";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UPDATE_TIME",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto36["m_sql"] = "UPDATE_TIME";
$proto36["m_srcTableName"] = "TABLES";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECK_TIME",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto38["m_sql"] = "CHECK_TIME";
$proto38["m_srcTableName"] = "TABLES";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_COLLATION",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto40["m_sql"] = "TABLE_COLLATION";
$proto40["m_srcTableName"] = "TABLES";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CHECKSUM",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto42["m_sql"] = "CHECKSUM";
$proto42["m_srcTableName"] = "TABLES";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CREATE_OPTIONS",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto44["m_sql"] = "CREATE_OPTIONS";
$proto44["m_srcTableName"] = "TABLES";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_COMMENT",
	"m_strTable" => "TABLES",
	"m_srcTableName" => "TABLES"
));

$proto46["m_sql"] = "TABLE_COMMENT";
$proto46["m_srcTableName"] = "TABLES";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "TABLES";
$proto49["m_srcTableName"] = "TABLES";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "TABLE_CATALOG";
$proto49["m_columns"][] = "TABLE_SCHEMA";
$proto49["m_columns"][] = "TABLE_NAME";
$proto49["m_columns"][] = "TABLE_TYPE";
$proto49["m_columns"][] = "ENGINE";
$proto49["m_columns"][] = "VERSION";
$proto49["m_columns"][] = "ROW_FORMAT";
$proto49["m_columns"][] = "TABLE_ROWS";
$proto49["m_columns"][] = "AVG_ROW_LENGTH";
$proto49["m_columns"][] = "DATA_LENGTH";
$proto49["m_columns"][] = "MAX_DATA_LENGTH";
$proto49["m_columns"][] = "INDEX_LENGTH";
$proto49["m_columns"][] = "DATA_FREE";
$proto49["m_columns"][] = "AUTO_INCREMENT";
$proto49["m_columns"][] = "CREATE_TIME";
$proto49["m_columns"][] = "UPDATE_TIME";
$proto49["m_columns"][] = "CHECK_TIME";
$proto49["m_columns"][] = "TABLE_COLLATION";
$proto49["m_columns"][] = "CHECKSUM";
$proto49["m_columns"][] = "CREATE_OPTIONS";
$proto49["m_columns"][] = "TABLE_COMMENT";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "TABLES";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "TABLES";
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
$proto0["m_srcTableName"]="TABLES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TABLES = createSqlQuery_TABLES();


	
						;

																					

$tdataTABLES[".sqlquery"] = $queryData_TABLES;

$tableEvents["TABLES"] = new eventsBase;
$tdataTABLES[".hasEvents"] = false;

?>
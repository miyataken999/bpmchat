<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCOLUMNS = array();
	$tdataCOLUMNS[".truncateText"] = true;
	$tdataCOLUMNS[".NumberOfChars"] = 20;
	$tdataCOLUMNS[".ShortName"] = "COLUMNS";
	$tdataCOLUMNS[".OwnerID"] = "";
	$tdataCOLUMNS[".OriginalTable"] = "COLUMNS";

//	field labels
$fieldLabelsCOLUMNS = array();
$fieldToolTipsCOLUMNS = array();
$pageTitlesCOLUMNS = array();
$placeHoldersCOLUMNS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCOLUMNS["Japanese"] = array();
	$fieldToolTipsCOLUMNS["Japanese"] = array();
	$placeHoldersCOLUMNS["Japanese"] = array();
	$pageTitlesCOLUMNS["Japanese"] = array();
	$fieldLabelsCOLUMNS["Japanese"]["TABLE_CATALOG"] = "テーブルカタログ";
	$fieldToolTipsCOLUMNS["Japanese"]["TABLE_CATALOG"] = "";
	$placeHoldersCOLUMNS["Japanese"]["TABLE_CATALOG"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["TABLE_SCHEMA"] = "テーブルスキーマ";
	$fieldToolTipsCOLUMNS["Japanese"]["TABLE_SCHEMA"] = "";
	$placeHoldersCOLUMNS["Japanese"]["TABLE_SCHEMA"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["TABLE_NAME"] = "テーブル名";
	$fieldToolTipsCOLUMNS["Japanese"]["TABLE_NAME"] = "";
	$placeHoldersCOLUMNS["Japanese"]["TABLE_NAME"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["COLUMN_NAME"] = "列名";
	$fieldToolTipsCOLUMNS["Japanese"]["COLUMN_NAME"] = "";
	$placeHoldersCOLUMNS["Japanese"]["COLUMN_NAME"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["ORDINAL_POSITION"] = "順序位置";
	$fieldToolTipsCOLUMNS["Japanese"]["ORDINAL_POSITION"] = "";
	$placeHoldersCOLUMNS["Japanese"]["ORDINAL_POSITION"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["COLUMN_DEFAULT"] = "列のデフォルト";
	$fieldToolTipsCOLUMNS["Japanese"]["COLUMN_DEFAULT"] = "";
	$placeHoldersCOLUMNS["Japanese"]["COLUMN_DEFAULT"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["IS_NULLABLE"] = "NULL可能です";
	$fieldToolTipsCOLUMNS["Japanese"]["IS_NULLABLE"] = "";
	$placeHoldersCOLUMNS["Japanese"]["IS_NULLABLE"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["DATA_TYPE"] = "データ・タイプ";
	$fieldToolTipsCOLUMNS["Japanese"]["DATA_TYPE"] = "";
	$placeHoldersCOLUMNS["Japanese"]["DATA_TYPE"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["CHARACTER_MAXIMUM_LENGTH"] = "文字の最大長";
	$fieldToolTipsCOLUMNS["Japanese"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$placeHoldersCOLUMNS["Japanese"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["CHARACTER_OCTET_LENGTH"] = "文字のオク??テット長";
	$fieldToolTipsCOLUMNS["Japanese"]["CHARACTER_OCTET_LENGTH"] = "";
	$placeHoldersCOLUMNS["Japanese"]["CHARACTER_OCTET_LENGTH"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["NUMERIC_PRECISION"] = "数値精度";
	$fieldToolTipsCOLUMNS["Japanese"]["NUMERIC_PRECISION"] = "";
	$placeHoldersCOLUMNS["Japanese"]["NUMERIC_PRECISION"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["NUMERIC_SCALE"] = "数値スケール";
	$fieldToolTipsCOLUMNS["Japanese"]["NUMERIC_SCALE"] = "";
	$placeHoldersCOLUMNS["Japanese"]["NUMERIC_SCALE"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["DATETIME_PRECISION"] = "日時の精度";
	$fieldToolTipsCOLUMNS["Japanese"]["DATETIME_PRECISION"] = "";
	$placeHoldersCOLUMNS["Japanese"]["DATETIME_PRECISION"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["CHARACTER_SET_NAME"] = "キャラクタ・セット名";
	$fieldToolTipsCOLUMNS["Japanese"]["CHARACTER_SET_NAME"] = "";
	$placeHoldersCOLUMNS["Japanese"]["CHARACTER_SET_NAME"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["COLLATION_NAME"] = "照合名";
	$fieldToolTipsCOLUMNS["Japanese"]["COLLATION_NAME"] = "";
	$placeHoldersCOLUMNS["Japanese"]["COLLATION_NAME"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["COLUMN_TYPE"] = "列タイプ";
	$fieldToolTipsCOLUMNS["Japanese"]["COLUMN_TYPE"] = "";
	$placeHoldersCOLUMNS["Japanese"]["COLUMN_TYPE"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["COLUMN_KEY"] = "列のキー";
	$fieldToolTipsCOLUMNS["Japanese"]["COLUMN_KEY"] = "";
	$placeHoldersCOLUMNS["Japanese"]["COLUMN_KEY"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["EXTRA"] = "エクストラ";
	$fieldToolTipsCOLUMNS["Japanese"]["EXTRA"] = "";
	$placeHoldersCOLUMNS["Japanese"]["EXTRA"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["PRIVILEGES"] = "特権";
	$fieldToolTipsCOLUMNS["Japanese"]["PRIVILEGES"] = "";
	$placeHoldersCOLUMNS["Japanese"]["PRIVILEGES"] = "";
	$fieldLabelsCOLUMNS["Japanese"]["COLUMN_COMMENT"] = "列コメント";
	$fieldToolTipsCOLUMNS["Japanese"]["COLUMN_COMMENT"] = "";
	$placeHoldersCOLUMNS["Japanese"]["COLUMN_COMMENT"] = "";
	if (count($fieldToolTipsCOLUMNS["Japanese"]))
		$tdataCOLUMNS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCOLUMNS["English"] = array();
	$fieldToolTipsCOLUMNS["English"] = array();
	$placeHoldersCOLUMNS["English"] = array();
	$pageTitlesCOLUMNS["English"] = array();
	$fieldLabelsCOLUMNS["English"]["TABLE_CATALOG"] = "テーブルカタログ";
	$fieldToolTipsCOLUMNS["English"]["TABLE_CATALOG"] = "";
	$placeHoldersCOLUMNS["English"]["TABLE_CATALOG"] = "";
	$fieldLabelsCOLUMNS["English"]["TABLE_SCHEMA"] = "テーブルスキーマ";
	$fieldToolTipsCOLUMNS["English"]["TABLE_SCHEMA"] = "";
	$placeHoldersCOLUMNS["English"]["TABLE_SCHEMA"] = "";
	$fieldLabelsCOLUMNS["English"]["TABLE_NAME"] = "テーブル名";
	$fieldToolTipsCOLUMNS["English"]["TABLE_NAME"] = "";
	$placeHoldersCOLUMNS["English"]["TABLE_NAME"] = "";
	$fieldLabelsCOLUMNS["English"]["COLUMN_NAME"] = "列名";
	$fieldToolTipsCOLUMNS["English"]["COLUMN_NAME"] = "";
	$placeHoldersCOLUMNS["English"]["COLUMN_NAME"] = "";
	$fieldLabelsCOLUMNS["English"]["ORDINAL_POSITION"] = "順序位置";
	$fieldToolTipsCOLUMNS["English"]["ORDINAL_POSITION"] = "";
	$placeHoldersCOLUMNS["English"]["ORDINAL_POSITION"] = "";
	$fieldLabelsCOLUMNS["English"]["COLUMN_DEFAULT"] = "列のデフォルト";
	$fieldToolTipsCOLUMNS["English"]["COLUMN_DEFAULT"] = "";
	$placeHoldersCOLUMNS["English"]["COLUMN_DEFAULT"] = "";
	$fieldLabelsCOLUMNS["English"]["IS_NULLABLE"] = "NULL可能です";
	$fieldToolTipsCOLUMNS["English"]["IS_NULLABLE"] = "";
	$placeHoldersCOLUMNS["English"]["IS_NULLABLE"] = "";
	$fieldLabelsCOLUMNS["English"]["DATA_TYPE"] = "データ・タイプ";
	$fieldToolTipsCOLUMNS["English"]["DATA_TYPE"] = "";
	$placeHoldersCOLUMNS["English"]["DATA_TYPE"] = "";
	$fieldLabelsCOLUMNS["English"]["CHARACTER_MAXIMUM_LENGTH"] = "文字の最大長";
	$fieldToolTipsCOLUMNS["English"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$placeHoldersCOLUMNS["English"]["CHARACTER_MAXIMUM_LENGTH"] = "";
	$fieldLabelsCOLUMNS["English"]["CHARACTER_OCTET_LENGTH"] = "文字のオク??テット長";
	$fieldToolTipsCOLUMNS["English"]["CHARACTER_OCTET_LENGTH"] = "";
	$placeHoldersCOLUMNS["English"]["CHARACTER_OCTET_LENGTH"] = "";
	$fieldLabelsCOLUMNS["English"]["NUMERIC_PRECISION"] = "数値精度";
	$fieldToolTipsCOLUMNS["English"]["NUMERIC_PRECISION"] = "";
	$placeHoldersCOLUMNS["English"]["NUMERIC_PRECISION"] = "";
	$fieldLabelsCOLUMNS["English"]["NUMERIC_SCALE"] = "数値スケール";
	$fieldToolTipsCOLUMNS["English"]["NUMERIC_SCALE"] = "";
	$placeHoldersCOLUMNS["English"]["NUMERIC_SCALE"] = "";
	$fieldLabelsCOLUMNS["English"]["DATETIME_PRECISION"] = "日時の精度";
	$fieldToolTipsCOLUMNS["English"]["DATETIME_PRECISION"] = "";
	$placeHoldersCOLUMNS["English"]["DATETIME_PRECISION"] = "";
	$fieldLabelsCOLUMNS["English"]["CHARACTER_SET_NAME"] = "キャラクタ・セット名";
	$fieldToolTipsCOLUMNS["English"]["CHARACTER_SET_NAME"] = "";
	$placeHoldersCOLUMNS["English"]["CHARACTER_SET_NAME"] = "";
	$fieldLabelsCOLUMNS["English"]["COLLATION_NAME"] = "照合名";
	$fieldToolTipsCOLUMNS["English"]["COLLATION_NAME"] = "";
	$placeHoldersCOLUMNS["English"]["COLLATION_NAME"] = "";
	$fieldLabelsCOLUMNS["English"]["COLUMN_TYPE"] = "列タイプ";
	$fieldToolTipsCOLUMNS["English"]["COLUMN_TYPE"] = "";
	$placeHoldersCOLUMNS["English"]["COLUMN_TYPE"] = "";
	$fieldLabelsCOLUMNS["English"]["COLUMN_KEY"] = "列のキー";
	$fieldToolTipsCOLUMNS["English"]["COLUMN_KEY"] = "";
	$placeHoldersCOLUMNS["English"]["COLUMN_KEY"] = "";
	$fieldLabelsCOLUMNS["English"]["EXTRA"] = "エクストラ";
	$fieldToolTipsCOLUMNS["English"]["EXTRA"] = "";
	$placeHoldersCOLUMNS["English"]["EXTRA"] = "";
	$fieldLabelsCOLUMNS["English"]["PRIVILEGES"] = "特権";
	$fieldToolTipsCOLUMNS["English"]["PRIVILEGES"] = "";
	$placeHoldersCOLUMNS["English"]["PRIVILEGES"] = "";
	$fieldLabelsCOLUMNS["English"]["COLUMN_COMMENT"] = "列コメント";
	$fieldToolTipsCOLUMNS["English"]["COLUMN_COMMENT"] = "";
	$placeHoldersCOLUMNS["English"]["COLUMN_COMMENT"] = "";
	if (count($fieldToolTipsCOLUMNS["English"]))
		$tdataCOLUMNS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCOLUMNS[""] = array();
	$fieldToolTipsCOLUMNS[""] = array();
	$placeHoldersCOLUMNS[""] = array();
	$pageTitlesCOLUMNS[""] = array();
	if (count($fieldToolTipsCOLUMNS[""]))
		$tdataCOLUMNS[".isUseToolTips"] = true;
}


	$tdataCOLUMNS[".NCSearch"] = true;



$tdataCOLUMNS[".shortTableName"] = "COLUMNS";
$tdataCOLUMNS[".nSecOptions"] = 0;
$tdataCOLUMNS[".recsPerRowPrint"] = 1;
$tdataCOLUMNS[".mainTableOwnerID"] = "";
$tdataCOLUMNS[".moveNext"] = 0;
$tdataCOLUMNS[".entityType"] = 0;

$tdataCOLUMNS[".strOriginalTableName"] = "COLUMNS";

	



$tdataCOLUMNS[".showAddInPopup"] = false;

$tdataCOLUMNS[".showEditInPopup"] = false;

$tdataCOLUMNS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCOLUMNS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCOLUMNS[".fieldsForRegister"] = array();
	
$tdataCOLUMNS[".listAjax"] = false;

	$tdataCOLUMNS[".audit"] = true;

	$tdataCOLUMNS[".locking"] = false;



$tdataCOLUMNS[".list"] = true;



$tdataCOLUMNS[".reorderRecordsByHeader"] = true;



$tdataCOLUMNS[".inlineAdd"] = true;

$tdataCOLUMNS[".import"] = true;

$tdataCOLUMNS[".exportTo"] = true;

$tdataCOLUMNS[".printFriendly"] = true;


$tdataCOLUMNS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCOLUMNS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCOLUMNS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCOLUMNS[".searchSaving"] = false;
//

$tdataCOLUMNS[".showSearchPanel"] = true;
		$tdataCOLUMNS[".flexibleSearch"] = true;

$tdataCOLUMNS[".isUseAjaxSuggest"] = true;

$tdataCOLUMNS[".rowHighlite"] = true;



																

$tdataCOLUMNS[".ajaxCodeSnippetAdded"] = false;

$tdataCOLUMNS[".buttonsAdded"] = false;

$tdataCOLUMNS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCOLUMNS[".isUseTimeForSearch"] = false;



$tdataCOLUMNS[".badgeColor"] = "e07878";


$tdataCOLUMNS[".allSearchFields"] = array();
$tdataCOLUMNS[".filterFields"] = array();
$tdataCOLUMNS[".requiredSearchFields"] = array();

$tdataCOLUMNS[".allSearchFields"][] = "TABLE_CATALOG";
	$tdataCOLUMNS[".allSearchFields"][] = "TABLE_SCHEMA";
	$tdataCOLUMNS[".allSearchFields"][] = "TABLE_NAME";
	$tdataCOLUMNS[".allSearchFields"][] = "COLUMN_NAME";
	$tdataCOLUMNS[".allSearchFields"][] = "ORDINAL_POSITION";
	$tdataCOLUMNS[".allSearchFields"][] = "COLUMN_DEFAULT";
	$tdataCOLUMNS[".allSearchFields"][] = "IS_NULLABLE";
	$tdataCOLUMNS[".allSearchFields"][] = "DATA_TYPE";
	$tdataCOLUMNS[".allSearchFields"][] = "CHARACTER_MAXIMUM_LENGTH";
	$tdataCOLUMNS[".allSearchFields"][] = "CHARACTER_OCTET_LENGTH";
	$tdataCOLUMNS[".allSearchFields"][] = "NUMERIC_PRECISION";
	$tdataCOLUMNS[".allSearchFields"][] = "NUMERIC_SCALE";
	$tdataCOLUMNS[".allSearchFields"][] = "DATETIME_PRECISION";
	$tdataCOLUMNS[".allSearchFields"][] = "CHARACTER_SET_NAME";
	$tdataCOLUMNS[".allSearchFields"][] = "COLLATION_NAME";
	$tdataCOLUMNS[".allSearchFields"][] = "COLUMN_TYPE";
	$tdataCOLUMNS[".allSearchFields"][] = "COLUMN_KEY";
	$tdataCOLUMNS[".allSearchFields"][] = "EXTRA";
	$tdataCOLUMNS[".allSearchFields"][] = "PRIVILEGES";
	$tdataCOLUMNS[".allSearchFields"][] = "COLUMN_COMMENT";
	
$tdataCOLUMNS[".filterFields"][] = "TABLE_NAME";

$tdataCOLUMNS[".googleLikeFields"] = array();
$tdataCOLUMNS[".googleLikeFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".googleLikeFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".googleLikeFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".googleLikeFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".googleLikeFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".googleLikeFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".googleLikeFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".googleLikeFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".googleLikeFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".googleLikeFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".googleLikeFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".googleLikeFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".googleLikeFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".googleLikeFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".googleLikeFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".googleLikeFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".googleLikeFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".googleLikeFields"][] = "EXTRA";
$tdataCOLUMNS[".googleLikeFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".googleLikeFields"][] = "COLUMN_COMMENT";


$tdataCOLUMNS[".advSearchFields"] = array();
$tdataCOLUMNS[".advSearchFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".advSearchFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".advSearchFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".advSearchFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".advSearchFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".advSearchFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".advSearchFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".advSearchFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".advSearchFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".advSearchFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".advSearchFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".advSearchFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".advSearchFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".advSearchFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".advSearchFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".advSearchFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".advSearchFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".advSearchFields"][] = "EXTRA";
$tdataCOLUMNS[".advSearchFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".advSearchFields"][] = "COLUMN_COMMENT";

$tdataCOLUMNS[".tableType"] = "list";

$tdataCOLUMNS[".printerPageOrientation"] = 0;
$tdataCOLUMNS[".nPrinterPageScale"] = 100;

$tdataCOLUMNS[".nPrinterSplitRecords"] = 40;

$tdataCOLUMNS[".nPrinterPDFSplitRecords"] = 40;



$tdataCOLUMNS[".geocodingEnabled"] = false;





$tdataCOLUMNS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataCOLUMNS[".pageSize"] = 20;

$tdataCOLUMNS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCOLUMNS[".strOrderBy"] = $tstrOrderBy;

$tdataCOLUMNS[".orderindexes"] = array();

$tdataCOLUMNS[".sqlHead"] = "SELECT TABLE_CATALOG,  	TABLE_SCHEMA,  	TABLE_NAME,  	COLUMN_NAME,  	ORDINAL_POSITION,  	COLUMN_DEFAULT,  	IS_NULLABLE,  	DATA_TYPE,  	CHARACTER_MAXIMUM_LENGTH,  	CHARACTER_OCTET_LENGTH,  	NUMERIC_PRECISION,  	NUMERIC_SCALE,  	DATETIME_PRECISION,  	CHARACTER_SET_NAME,  	COLLATION_NAME,  	COLUMN_TYPE,  	COLUMN_KEY,  	EXTRA,  	`PRIVILEGES`,  	COLUMN_COMMENT";
$tdataCOLUMNS[".sqlFrom"] = "FROM COLUMNS";
$tdataCOLUMNS[".sqlWhereExpr"] = "";
$tdataCOLUMNS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCOLUMNS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCOLUMNS[".arrGroupsPerPage"] = $arrGPP;

$tdataCOLUMNS[".highlightSearchResults"] = true;

$tableKeysCOLUMNS = array();
$tdataCOLUMNS[".Keys"] = $tableKeysCOLUMNS;

$tdataCOLUMNS[".listFields"] = array();
$tdataCOLUMNS[".listFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".listFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".listFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".listFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".listFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".listFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".listFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".listFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".listFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".listFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".listFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".listFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".listFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".listFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".listFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".listFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".listFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".listFields"][] = "EXTRA";
$tdataCOLUMNS[".listFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".listFields"][] = "COLUMN_COMMENT";

$tdataCOLUMNS[".hideMobileList"] = array();


$tdataCOLUMNS[".viewFields"] = array();

$tdataCOLUMNS[".addFields"] = array();

$tdataCOLUMNS[".masterListFields"] = array();
$tdataCOLUMNS[".masterListFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".masterListFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".masterListFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".masterListFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".masterListFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".masterListFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".masterListFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".masterListFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".masterListFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".masterListFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".masterListFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".masterListFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".masterListFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".masterListFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".masterListFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".masterListFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".masterListFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".masterListFields"][] = "EXTRA";
$tdataCOLUMNS[".masterListFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".masterListFields"][] = "COLUMN_COMMENT";

$tdataCOLUMNS[".inlineAddFields"] = array();
$tdataCOLUMNS[".inlineAddFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".inlineAddFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".inlineAddFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".inlineAddFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".inlineAddFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".inlineAddFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".inlineAddFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".inlineAddFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".inlineAddFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".inlineAddFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".inlineAddFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".inlineAddFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".inlineAddFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".inlineAddFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".inlineAddFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".inlineAddFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".inlineAddFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".inlineAddFields"][] = "EXTRA";
$tdataCOLUMNS[".inlineAddFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".inlineAddFields"][] = "COLUMN_COMMENT";

$tdataCOLUMNS[".editFields"] = array();

$tdataCOLUMNS[".inlineEditFields"] = array();

$tdataCOLUMNS[".updateSelectedFields"] = array();


$tdataCOLUMNS[".exportFields"] = array();
$tdataCOLUMNS[".exportFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".exportFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".exportFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".exportFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".exportFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".exportFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".exportFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".exportFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".exportFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".exportFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".exportFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".exportFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".exportFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".exportFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".exportFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".exportFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".exportFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".exportFields"][] = "EXTRA";
$tdataCOLUMNS[".exportFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".exportFields"][] = "COLUMN_COMMENT";

$tdataCOLUMNS[".importFields"] = array();
$tdataCOLUMNS[".importFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".importFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".importFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".importFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".importFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".importFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".importFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".importFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".importFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".importFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".importFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".importFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".importFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".importFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".importFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".importFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".importFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".importFields"][] = "EXTRA";
$tdataCOLUMNS[".importFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".importFields"][] = "COLUMN_COMMENT";

$tdataCOLUMNS[".printFields"] = array();
$tdataCOLUMNS[".printFields"][] = "TABLE_CATALOG";
$tdataCOLUMNS[".printFields"][] = "TABLE_SCHEMA";
$tdataCOLUMNS[".printFields"][] = "TABLE_NAME";
$tdataCOLUMNS[".printFields"][] = "COLUMN_NAME";
$tdataCOLUMNS[".printFields"][] = "ORDINAL_POSITION";
$tdataCOLUMNS[".printFields"][] = "COLUMN_DEFAULT";
$tdataCOLUMNS[".printFields"][] = "IS_NULLABLE";
$tdataCOLUMNS[".printFields"][] = "DATA_TYPE";
$tdataCOLUMNS[".printFields"][] = "CHARACTER_MAXIMUM_LENGTH";
$tdataCOLUMNS[".printFields"][] = "CHARACTER_OCTET_LENGTH";
$tdataCOLUMNS[".printFields"][] = "NUMERIC_PRECISION";
$tdataCOLUMNS[".printFields"][] = "NUMERIC_SCALE";
$tdataCOLUMNS[".printFields"][] = "DATETIME_PRECISION";
$tdataCOLUMNS[".printFields"][] = "CHARACTER_SET_NAME";
$tdataCOLUMNS[".printFields"][] = "COLLATION_NAME";
$tdataCOLUMNS[".printFields"][] = "COLUMN_TYPE";
$tdataCOLUMNS[".printFields"][] = "COLUMN_KEY";
$tdataCOLUMNS[".printFields"][] = "EXTRA";
$tdataCOLUMNS[".printFields"][] = "PRIVILEGES";
$tdataCOLUMNS[".printFields"][] = "COLUMN_COMMENT";

//	TABLE_CATALOG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TABLE_CATALOG";
	$fdata["GoodName"] = "TABLE_CATALOG";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","TABLE_CATALOG");
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




	$tdataCOLUMNS["TABLE_CATALOG"] = $fdata;
//	TABLE_SCHEMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TABLE_SCHEMA";
	$fdata["GoodName"] = "TABLE_SCHEMA";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","TABLE_SCHEMA");
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




	$tdataCOLUMNS["TABLE_SCHEMA"] = $fdata;
//	TABLE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TABLE_NAME";
	$fdata["GoodName"] = "TABLE_NAME";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","TABLE_NAME");
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


	$tdataCOLUMNS["TABLE_NAME"] = $fdata;
//	COLUMN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COLUMN_NAME";
	$fdata["GoodName"] = "COLUMN_NAME";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","COLUMN_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COLUMN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLUMN_NAME";

	
	
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




	$tdataCOLUMNS["COLUMN_NAME"] = $fdata;
//	ORDINAL_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ORDINAL_POSITION";
	$fdata["GoodName"] = "ORDINAL_POSITION";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","ORDINAL_POSITION");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ORDINAL_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORDINAL_POSITION";

	
	
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




	$tdataCOLUMNS["ORDINAL_POSITION"] = $fdata;
//	COLUMN_DEFAULT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COLUMN_DEFAULT";
	$fdata["GoodName"] = "COLUMN_DEFAULT";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","COLUMN_DEFAULT");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COLUMN_DEFAULT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLUMN_DEFAULT";

	
	
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




	$tdataCOLUMNS["COLUMN_DEFAULT"] = $fdata;
//	IS_NULLABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IS_NULLABLE";
	$fdata["GoodName"] = "IS_NULLABLE";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","IS_NULLABLE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IS_NULLABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IS_NULLABLE";

	
	
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




	$tdataCOLUMNS["IS_NULLABLE"] = $fdata;
//	DATA_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DATA_TYPE";
	$fdata["GoodName"] = "DATA_TYPE";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","DATA_TYPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATA_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATA_TYPE";

	
	
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




	$tdataCOLUMNS["DATA_TYPE"] = $fdata;
//	CHARACTER_MAXIMUM_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CHARACTER_MAXIMUM_LENGTH";
	$fdata["GoodName"] = "CHARACTER_MAXIMUM_LENGTH";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","CHARACTER_MAXIMUM_LENGTH");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHARACTER_MAXIMUM_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_MAXIMUM_LENGTH";

	
	
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




	$tdataCOLUMNS["CHARACTER_MAXIMUM_LENGTH"] = $fdata;
//	CHARACTER_OCTET_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CHARACTER_OCTET_LENGTH";
	$fdata["GoodName"] = "CHARACTER_OCTET_LENGTH";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","CHARACTER_OCTET_LENGTH");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHARACTER_OCTET_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_OCTET_LENGTH";

	
	
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




	$tdataCOLUMNS["CHARACTER_OCTET_LENGTH"] = $fdata;
//	NUMERIC_PRECISION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "NUMERIC_PRECISION";
	$fdata["GoodName"] = "NUMERIC_PRECISION";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","NUMERIC_PRECISION");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NUMERIC_PRECISION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERIC_PRECISION";

	
	
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




	$tdataCOLUMNS["NUMERIC_PRECISION"] = $fdata;
//	NUMERIC_SCALE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NUMERIC_SCALE";
	$fdata["GoodName"] = "NUMERIC_SCALE";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","NUMERIC_SCALE");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NUMERIC_SCALE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERIC_SCALE";

	
	
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




	$tdataCOLUMNS["NUMERIC_SCALE"] = $fdata;
//	DATETIME_PRECISION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DATETIME_PRECISION";
	$fdata["GoodName"] = "DATETIME_PRECISION";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","DATETIME_PRECISION");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DATETIME_PRECISION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATETIME_PRECISION";

	
	
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




	$tdataCOLUMNS["DATETIME_PRECISION"] = $fdata;
//	CHARACTER_SET_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CHARACTER_SET_NAME";
	$fdata["GoodName"] = "CHARACTER_SET_NAME";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","CHARACTER_SET_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CHARACTER_SET_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CHARACTER_SET_NAME";

	
	
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




	$tdataCOLUMNS["CHARACTER_SET_NAME"] = $fdata;
//	COLLATION_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "COLLATION_NAME";
	$fdata["GoodName"] = "COLLATION_NAME";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","COLLATION_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COLLATION_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLLATION_NAME";

	
	
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




	$tdataCOLUMNS["COLLATION_NAME"] = $fdata;
//	COLUMN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "COLUMN_TYPE";
	$fdata["GoodName"] = "COLUMN_TYPE";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","COLUMN_TYPE");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COLUMN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLUMN_TYPE";

	
	
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




	$tdataCOLUMNS["COLUMN_TYPE"] = $fdata;
//	COLUMN_KEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "COLUMN_KEY";
	$fdata["GoodName"] = "COLUMN_KEY";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","COLUMN_KEY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COLUMN_KEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLUMN_KEY";

	
	
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




	$tdataCOLUMNS["COLUMN_KEY"] = $fdata;
//	EXTRA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EXTRA";
	$fdata["GoodName"] = "EXTRA";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","EXTRA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EXTRA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXTRA";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataCOLUMNS["EXTRA"] = $fdata;
//	PRIVILEGES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PRIVILEGES";
	$fdata["GoodName"] = "PRIVILEGES";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","PRIVILEGES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRIVILEGES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`PRIVILEGES`";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataCOLUMNS["PRIVILEGES"] = $fdata;
//	COLUMN_COMMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "COLUMN_COMMENT";
	$fdata["GoodName"] = "COLUMN_COMMENT";
	$fdata["ownerTable"] = "COLUMNS";
	$fdata["Label"] = GetFieldLabel("COLUMNS","COLUMN_COMMENT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COLUMN_COMMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLUMN_COMMENT";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataCOLUMNS["COLUMN_COMMENT"] = $fdata;


$tables_data["COLUMNS"]=&$tdataCOLUMNS;
$field_labels["COLUMNS"] = &$fieldLabelsCOLUMNS;
$fieldToolTips["COLUMNS"] = &$fieldToolTipsCOLUMNS;
$placeHolders["COLUMNS"] = &$placeHoldersCOLUMNS;
$page_titles["COLUMNS"] = &$pageTitlesCOLUMNS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["COLUMNS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["COLUMNS"] = array();


	
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
					$masterTablesData["COLUMNS"][0] = $masterParams;
				$masterTablesData["COLUMNS"][0]["masterKeys"] = array();
	$masterTablesData["COLUMNS"][0]["masterKeys"][]="TABLE_NAME";
				$masterTablesData["COLUMNS"][0]["detailKeys"] = array();
	$masterTablesData["COLUMNS"][0]["detailKeys"][]="TABLE_NAME";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_COLUMNS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TABLE_CATALOG,  	TABLE_SCHEMA,  	TABLE_NAME,  	COLUMN_NAME,  	ORDINAL_POSITION,  	COLUMN_DEFAULT,  	IS_NULLABLE,  	DATA_TYPE,  	CHARACTER_MAXIMUM_LENGTH,  	CHARACTER_OCTET_LENGTH,  	NUMERIC_PRECISION,  	NUMERIC_SCALE,  	DATETIME_PRECISION,  	CHARACTER_SET_NAME,  	COLLATION_NAME,  	COLUMN_TYPE,  	COLUMN_KEY,  	EXTRA,  	`PRIVILEGES`,  	COLUMN_COMMENT";
$proto0["m_strFrom"] = "FROM COLUMNS";
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
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto6["m_sql"] = "TABLE_CATALOG";
$proto6["m_srcTableName"] = "COLUMNS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_SCHEMA",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto8["m_sql"] = "TABLE_SCHEMA";
$proto8["m_srcTableName"] = "COLUMNS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLE_NAME",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto10["m_sql"] = "TABLE_NAME";
$proto10["m_srcTableName"] = "COLUMNS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "COLUMN_NAME",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto12["m_sql"] = "COLUMN_NAME";
$proto12["m_srcTableName"] = "COLUMNS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDINAL_POSITION",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto14["m_sql"] = "ORDINAL_POSITION";
$proto14["m_srcTableName"] = "COLUMNS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "COLUMN_DEFAULT",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto16["m_sql"] = "COLUMN_DEFAULT";
$proto16["m_srcTableName"] = "COLUMNS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IS_NULLABLE",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto18["m_sql"] = "IS_NULLABLE";
$proto18["m_srcTableName"] = "COLUMNS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DATA_TYPE",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto20["m_sql"] = "DATA_TYPE";
$proto20["m_srcTableName"] = "COLUMNS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_MAXIMUM_LENGTH",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto22["m_sql"] = "CHARACTER_MAXIMUM_LENGTH";
$proto22["m_srcTableName"] = "COLUMNS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_OCTET_LENGTH",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto24["m_sql"] = "CHARACTER_OCTET_LENGTH";
$proto24["m_srcTableName"] = "COLUMNS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERIC_PRECISION",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto26["m_sql"] = "NUMERIC_PRECISION";
$proto26["m_srcTableName"] = "COLUMNS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERIC_SCALE",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto28["m_sql"] = "NUMERIC_SCALE";
$proto28["m_srcTableName"] = "COLUMNS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DATETIME_PRECISION",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto30["m_sql"] = "DATETIME_PRECISION";
$proto30["m_srcTableName"] = "COLUMNS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARACTER_SET_NAME",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto32["m_sql"] = "CHARACTER_SET_NAME";
$proto32["m_srcTableName"] = "COLUMNS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "COLLATION_NAME",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto34["m_sql"] = "COLLATION_NAME";
$proto34["m_srcTableName"] = "COLUMNS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "COLUMN_TYPE",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto36["m_sql"] = "COLUMN_TYPE";
$proto36["m_srcTableName"] = "COLUMNS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "COLUMN_KEY",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto38["m_sql"] = "COLUMN_KEY";
$proto38["m_srcTableName"] = "COLUMNS";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "EXTRA",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto40["m_sql"] = "EXTRA";
$proto40["m_srcTableName"] = "COLUMNS";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PRIVILEGES",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto42["m_sql"] = "`PRIVILEGES`";
$proto42["m_srcTableName"] = "COLUMNS";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "COLUMN_COMMENT",
	"m_strTable" => "COLUMNS",
	"m_srcTableName" => "COLUMNS"
));

$proto44["m_sql"] = "COLUMN_COMMENT";
$proto44["m_srcTableName"] = "COLUMNS";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "COLUMNS";
$proto47["m_srcTableName"] = "COLUMNS";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "TABLE_CATALOG";
$proto47["m_columns"][] = "TABLE_SCHEMA";
$proto47["m_columns"][] = "TABLE_NAME";
$proto47["m_columns"][] = "COLUMN_NAME";
$proto47["m_columns"][] = "ORDINAL_POSITION";
$proto47["m_columns"][] = "COLUMN_DEFAULT";
$proto47["m_columns"][] = "IS_NULLABLE";
$proto47["m_columns"][] = "DATA_TYPE";
$proto47["m_columns"][] = "CHARACTER_MAXIMUM_LENGTH";
$proto47["m_columns"][] = "CHARACTER_OCTET_LENGTH";
$proto47["m_columns"][] = "NUMERIC_PRECISION";
$proto47["m_columns"][] = "NUMERIC_SCALE";
$proto47["m_columns"][] = "DATETIME_PRECISION";
$proto47["m_columns"][] = "CHARACTER_SET_NAME";
$proto47["m_columns"][] = "COLLATION_NAME";
$proto47["m_columns"][] = "COLUMN_TYPE";
$proto47["m_columns"][] = "COLUMN_KEY";
$proto47["m_columns"][] = "EXTRA";
$proto47["m_columns"][] = "PRIVILEGES";
$proto47["m_columns"][] = "COLUMN_COMMENT";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "COLUMNS";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "COLUMNS";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="COLUMNS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_COLUMNS = createSqlQuery_COLUMNS();


	
						;

																				

$tdataCOLUMNS[".sqlquery"] = $queryData_COLUMNS;

$tableEvents["COLUMNS"] = new eventsBase;
$tdataCOLUMNS[".hasEvents"] = false;

?>
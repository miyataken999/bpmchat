<?php
require_once(getabspath("classes/cipherer.php"));




$tdataADDITIONAL_TABLES = array();
	$tdataADDITIONAL_TABLES[".truncateText"] = true;
	$tdataADDITIONAL_TABLES[".NumberOfChars"] = 20;
	$tdataADDITIONAL_TABLES[".ShortName"] = "ADDITIONAL_TABLES";
	$tdataADDITIONAL_TABLES[".OwnerID"] = "";
	$tdataADDITIONAL_TABLES[".OriginalTable"] = "ADDITIONAL_TABLES";

//	field labels
$fieldLabelsADDITIONAL_TABLES = array();
$fieldToolTipsADDITIONAL_TABLES = array();
$pageTitlesADDITIONAL_TABLES = array();
$placeHoldersADDITIONAL_TABLES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsADDITIONAL_TABLES["Japanese"] = array();
	$fieldToolTipsADDITIONAL_TABLES["Japanese"] = array();
	$placeHoldersADDITIONAL_TABLES["Japanese"] = array();
	$pageTitlesADDITIONAL_TABLES["Japanese"] = array();
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_UID"] = "タブのUIDを追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_NAME"] = "タブ名を追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_NAME"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_NAME"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_CLASS_NAME"] = "タブのクラス名を追加します";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_CLASS_NAME"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_CLASS_NAME"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_DESCRIPTION"] = "タブの説明を追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_DESCRIPTION"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_DESCRIPTION"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_INSERT"] = "タブSDWログインサートを追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_INSERT"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_INSERT"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_UPDATE"] = "タブSDWログの更新を追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_UPDATE"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_UPDATE"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_DELETE"] = "削除タブSDWログを追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_DELETE"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_DELETE"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_SELECT"] = "タブSDWログを選択、追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_SELECT"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_LOG_SELECT"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_MAX_LENGTH"] = "タブSDWの最大長を追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_MAX_LENGTH"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_MAX_LENGTH"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_AUTO_DELETE"] = "タブSDWの自動削除、追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_AUTO_DELETE"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_SDW_AUTO_DELETE"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_PLG_UID"] = "タブPLGのUIDを追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_PLG_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_PLG_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["DBS_UID"] = "DBSのUID";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["DBS_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["DBS_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["PRO_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["PRO_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_TYPE"] = "タブのタイプを追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_TYPE"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_TYPE"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_GRID"] = "タブグリッドを追加";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_GRID"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_GRID"] = "";
	$fieldLabelsADDITIONAL_TABLES["Japanese"]["ADD_TAB_TAG"] = "タブのタグを追加します";
	$fieldToolTipsADDITIONAL_TABLES["Japanese"]["ADD_TAB_TAG"] = "";
	$placeHoldersADDITIONAL_TABLES["Japanese"]["ADD_TAB_TAG"] = "";
	if (count($fieldToolTipsADDITIONAL_TABLES["Japanese"]))
		$tdataADDITIONAL_TABLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsADDITIONAL_TABLES["English"] = array();
	$fieldToolTipsADDITIONAL_TABLES["English"] = array();
	$placeHoldersADDITIONAL_TABLES["English"] = array();
	$pageTitlesADDITIONAL_TABLES["English"] = array();
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_UID"] = "タブのUIDを追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_NAME"] = "タブ名を追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_NAME"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_NAME"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_CLASS_NAME"] = "タブのクラス名を追加します";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_CLASS_NAME"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_CLASS_NAME"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_DESCRIPTION"] = "タブの説明を追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_DESCRIPTION"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_DESCRIPTION"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_INSERT"] = "タブSDWログインサートを追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_INSERT"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_INSERT"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_UPDATE"] = "タブSDWログの更新を追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_UPDATE"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_UPDATE"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_DELETE"] = "削除タブSDWログを追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_DELETE"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_DELETE"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_SELECT"] = "タブSDWログを選択、追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_SELECT"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_SDW_LOG_SELECT"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_MAX_LENGTH"] = "タブSDWの最大長を追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_MAX_LENGTH"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_SDW_MAX_LENGTH"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_AUTO_DELETE"] = "タブSDWの自動削除、追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_SDW_AUTO_DELETE"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_SDW_AUTO_DELETE"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_PLG_UID"] = "タブPLGのUIDを追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_PLG_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_PLG_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["DBS_UID"] = "DBSのUID";
	$fieldToolTipsADDITIONAL_TABLES["English"]["DBS_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["DBS_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsADDITIONAL_TABLES["English"]["PRO_UID"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["PRO_UID"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_TYPE"] = "タブのタイプを追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_TYPE"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_TYPE"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_GRID"] = "タブグリッドを追加";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_GRID"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_GRID"] = "";
	$fieldLabelsADDITIONAL_TABLES["English"]["ADD_TAB_TAG"] = "タブのタグを追加します";
	$fieldToolTipsADDITIONAL_TABLES["English"]["ADD_TAB_TAG"] = "";
	$placeHoldersADDITIONAL_TABLES["English"]["ADD_TAB_TAG"] = "";
	if (count($fieldToolTipsADDITIONAL_TABLES["English"]))
		$tdataADDITIONAL_TABLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsADDITIONAL_TABLES[""] = array();
	$fieldToolTipsADDITIONAL_TABLES[""] = array();
	$placeHoldersADDITIONAL_TABLES[""] = array();
	$pageTitlesADDITIONAL_TABLES[""] = array();
	if (count($fieldToolTipsADDITIONAL_TABLES[""]))
		$tdataADDITIONAL_TABLES[".isUseToolTips"] = true;
}


	$tdataADDITIONAL_TABLES[".NCSearch"] = true;



$tdataADDITIONAL_TABLES[".shortTableName"] = "ADDITIONAL_TABLES";
$tdataADDITIONAL_TABLES[".nSecOptions"] = 0;
$tdataADDITIONAL_TABLES[".recsPerRowPrint"] = 1;
$tdataADDITIONAL_TABLES[".mainTableOwnerID"] = "";
$tdataADDITIONAL_TABLES[".moveNext"] = 0;
$tdataADDITIONAL_TABLES[".entityType"] = 0;

$tdataADDITIONAL_TABLES[".strOriginalTableName"] = "ADDITIONAL_TABLES";

	



$tdataADDITIONAL_TABLES[".showAddInPopup"] = false;

$tdataADDITIONAL_TABLES[".showEditInPopup"] = false;

$tdataADDITIONAL_TABLES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataADDITIONAL_TABLES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataADDITIONAL_TABLES[".fieldsForRegister"] = array();
	
$tdataADDITIONAL_TABLES[".listAjax"] = false;

	$tdataADDITIONAL_TABLES[".audit"] = true;

	$tdataADDITIONAL_TABLES[".locking"] = false;

$tdataADDITIONAL_TABLES[".edit"] = true;
$tdataADDITIONAL_TABLES[".afterEditAction"] = 1;
$tdataADDITIONAL_TABLES[".closePopupAfterEdit"] = 1;
$tdataADDITIONAL_TABLES[".afterEditActionDetTable"] = "";

$tdataADDITIONAL_TABLES[".add"] = true;
$tdataADDITIONAL_TABLES[".afterAddAction"] = 1;
$tdataADDITIONAL_TABLES[".closePopupAfterAdd"] = 1;
$tdataADDITIONAL_TABLES[".afterAddActionDetTable"] = "";

$tdataADDITIONAL_TABLES[".list"] = true;

$tdataADDITIONAL_TABLES[".inlineEdit"] = true;


$tdataADDITIONAL_TABLES[".reorderRecordsByHeader"] = true;
$tdataADDITIONAL_TABLES[".createSortByDropdown"] = true;
$tdataADDITIONAL_TABLES[".strSortControlSettingsJSON"] = "";



$tdataADDITIONAL_TABLES[".inlineAdd"] = true;
$tdataADDITIONAL_TABLES[".view"] = true;

$tdataADDITIONAL_TABLES[".import"] = true;

$tdataADDITIONAL_TABLES[".exportTo"] = true;

$tdataADDITIONAL_TABLES[".printFriendly"] = true;

$tdataADDITIONAL_TABLES[".delete"] = true;

$tdataADDITIONAL_TABLES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataADDITIONAL_TABLES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataADDITIONAL_TABLES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataADDITIONAL_TABLES[".searchSaving"] = false;
//

$tdataADDITIONAL_TABLES[".showSearchPanel"] = true;
		$tdataADDITIONAL_TABLES[".flexibleSearch"] = true;

$tdataADDITIONAL_TABLES[".isUseAjaxSuggest"] = true;

$tdataADDITIONAL_TABLES[".rowHighlite"] = true;



				

$tdataADDITIONAL_TABLES[".ajaxCodeSnippetAdded"] = false;

$tdataADDITIONAL_TABLES[".buttonsAdded"] = false;

$tdataADDITIONAL_TABLES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataADDITIONAL_TABLES[".isUseTimeForSearch"] = false;





$tdataADDITIONAL_TABLES[".allSearchFields"] = array();
$tdataADDITIONAL_TABLES[".filterFields"] = array();
$tdataADDITIONAL_TABLES[".requiredSearchFields"] = array();

$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_UID";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_NAME";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_CLASS_NAME";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_DESCRIPTION";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_SDW_LOG_INSERT";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_SDW_LOG_DELETE";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_SDW_LOG_SELECT";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_PLG_UID";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "DBS_UID";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "PRO_UID";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_TYPE";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_GRID";
	$tdataADDITIONAL_TABLES[".allSearchFields"][] = "ADD_TAB_TAG";
	

$tdataADDITIONAL_TABLES[".googleLikeFields"] = array();
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".googleLikeFields"][] = "ADD_TAB_TAG";


$tdataADDITIONAL_TABLES[".advSearchFields"] = array();
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".advSearchFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".tableType"] = "list";

$tdataADDITIONAL_TABLES[".printerPageOrientation"] = 0;
$tdataADDITIONAL_TABLES[".nPrinterPageScale"] = 100;

$tdataADDITIONAL_TABLES[".nPrinterSplitRecords"] = 40;

$tdataADDITIONAL_TABLES[".nPrinterPDFSplitRecords"] = 40;



$tdataADDITIONAL_TABLES[".geocodingEnabled"] = false;





$tdataADDITIONAL_TABLES[".listGridLayout"] = 3;


$tdataADDITIONAL_TABLES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataADDITIONAL_TABLES[".pageSize"] = 20;

$tdataADDITIONAL_TABLES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataADDITIONAL_TABLES[".strOrderBy"] = $tstrOrderBy;

$tdataADDITIONAL_TABLES[".orderindexes"] = array();

$tdataADDITIONAL_TABLES[".sqlHead"] = "SELECT ADD_TAB_UID,  	ADD_TAB_NAME,  	ADD_TAB_CLASS_NAME,  	ADD_TAB_DESCRIPTION,  	ADD_TAB_SDW_LOG_INSERT,  	ADD_TAB_SDW_LOG_UPDATE,  	ADD_TAB_SDW_LOG_DELETE,  	ADD_TAB_SDW_LOG_SELECT,  	ADD_TAB_SDW_MAX_LENGTH,  	ADD_TAB_SDW_AUTO_DELETE,  	ADD_TAB_PLG_UID,  	DBS_UID,  	PRO_UID,  	ADD_TAB_TYPE,  	ADD_TAB_GRID,  	ADD_TAB_TAG";
$tdataADDITIONAL_TABLES[".sqlFrom"] = "FROM ADDITIONAL_TABLES";
$tdataADDITIONAL_TABLES[".sqlWhereExpr"] = "";
$tdataADDITIONAL_TABLES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataADDITIONAL_TABLES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataADDITIONAL_TABLES[".arrGroupsPerPage"] = $arrGPP;

$tdataADDITIONAL_TABLES[".highlightSearchResults"] = true;

$tableKeysADDITIONAL_TABLES = array();
$tableKeysADDITIONAL_TABLES[] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".Keys"] = $tableKeysADDITIONAL_TABLES;

$tdataADDITIONAL_TABLES[".listFields"] = array();
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".listFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".listFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".listFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".hideMobileList"] = array();


$tdataADDITIONAL_TABLES[".viewFields"] = array();
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".viewFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".viewFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".viewFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".addFields"] = array();
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".addFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".addFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".addFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".masterListFields"] = array();
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".masterListFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".inlineAddFields"] = array();
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".inlineAddFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".editFields"] = array();
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".editFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".editFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".editFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".inlineEditFields"] = array();
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".inlineEditFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".updateSelectedFields"] = array();
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".updateSelectedFields"][] = "ADD_TAB_TAG";


$tdataADDITIONAL_TABLES[".exportFields"] = array();
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".exportFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".exportFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".exportFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".importFields"] = array();
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".importFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".importFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".importFields"][] = "ADD_TAB_TAG";

$tdataADDITIONAL_TABLES[".printFields"] = array();
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_UID";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_NAME";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_CLASS_NAME";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_DESCRIPTION";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_SDW_LOG_INSERT";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_SDW_LOG_UPDATE";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_SDW_LOG_DELETE";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_SDW_LOG_SELECT";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_SDW_MAX_LENGTH";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_SDW_AUTO_DELETE";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_PLG_UID";
$tdataADDITIONAL_TABLES[".printFields"][] = "DBS_UID";
$tdataADDITIONAL_TABLES[".printFields"][] = "PRO_UID";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_TYPE";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_GRID";
$tdataADDITIONAL_TABLES[".printFields"][] = "ADD_TAB_TAG";

//	ADD_TAB_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ADD_TAB_UID";
	$fdata["GoodName"] = "ADD_TAB_UID";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_UID");
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

		$fdata["strField"] = "ADD_TAB_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_UID";

	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_UID"] = $fdata;
//	ADD_TAB_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ADD_TAB_NAME";
	$fdata["GoodName"] = "ADD_TAB_NAME";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_NAME");
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

		$fdata["strField"] = "ADD_TAB_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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




	$tdataADDITIONAL_TABLES["ADD_TAB_NAME"] = $fdata;
//	ADD_TAB_CLASS_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ADD_TAB_CLASS_NAME";
	$fdata["GoodName"] = "ADD_TAB_CLASS_NAME";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_CLASS_NAME");
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

		$fdata["strField"] = "ADD_TAB_CLASS_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_CLASS_NAME";

	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_CLASS_NAME"] = $fdata;
//	ADD_TAB_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ADD_TAB_DESCRIPTION";
	$fdata["GoodName"] = "ADD_TAB_DESCRIPTION";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_DESCRIPTION");
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

		$fdata["strField"] = "ADD_TAB_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_DESCRIPTION";

	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_DESCRIPTION"] = $fdata;
//	ADD_TAB_SDW_LOG_INSERT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ADD_TAB_SDW_LOG_INSERT";
	$fdata["GoodName"] = "ADD_TAB_SDW_LOG_INSERT";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_SDW_LOG_INSERT");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "ADD_TAB_SDW_LOG_INSERT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_SDW_LOG_INSERT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_SDW_LOG_INSERT"] = $fdata;
//	ADD_TAB_SDW_LOG_UPDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ADD_TAB_SDW_LOG_UPDATE";
	$fdata["GoodName"] = "ADD_TAB_SDW_LOG_UPDATE";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_SDW_LOG_UPDATE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "ADD_TAB_SDW_LOG_UPDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_SDW_LOG_UPDATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_SDW_LOG_UPDATE"] = $fdata;
//	ADD_TAB_SDW_LOG_DELETE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ADD_TAB_SDW_LOG_DELETE";
	$fdata["GoodName"] = "ADD_TAB_SDW_LOG_DELETE";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_SDW_LOG_DELETE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "ADD_TAB_SDW_LOG_DELETE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_SDW_LOG_DELETE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_SDW_LOG_DELETE"] = $fdata;
//	ADD_TAB_SDW_LOG_SELECT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ADD_TAB_SDW_LOG_SELECT";
	$fdata["GoodName"] = "ADD_TAB_SDW_LOG_SELECT";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_SDW_LOG_SELECT");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "ADD_TAB_SDW_LOG_SELECT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_SDW_LOG_SELECT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_SDW_LOG_SELECT"] = $fdata;
//	ADD_TAB_SDW_MAX_LENGTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ADD_TAB_SDW_MAX_LENGTH";
	$fdata["GoodName"] = "ADD_TAB_SDW_MAX_LENGTH";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_SDW_MAX_LENGTH");
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

		$fdata["strField"] = "ADD_TAB_SDW_MAX_LENGTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_SDW_MAX_LENGTH";

	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_SDW_MAX_LENGTH"] = $fdata;
//	ADD_TAB_SDW_AUTO_DELETE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ADD_TAB_SDW_AUTO_DELETE";
	$fdata["GoodName"] = "ADD_TAB_SDW_AUTO_DELETE";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_SDW_AUTO_DELETE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "ADD_TAB_SDW_AUTO_DELETE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_SDW_AUTO_DELETE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_SDW_AUTO_DELETE"] = $fdata;
//	ADD_TAB_PLG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ADD_TAB_PLG_UID";
	$fdata["GoodName"] = "ADD_TAB_PLG_UID";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_PLG_UID");
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

		$fdata["strField"] = "ADD_TAB_PLG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_PLG_UID";

	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_PLG_UID"] = $fdata;
//	DBS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DBS_UID";
	$fdata["GoodName"] = "DBS_UID";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","DBS_UID");
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

		$fdata["strField"] = "DBS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_UID";

	
	
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




	$tdataADDITIONAL_TABLES["DBS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","PRO_UID");
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




	$tdataADDITIONAL_TABLES["PRO_UID"] = $fdata;
//	ADD_TAB_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ADD_TAB_TYPE";
	$fdata["GoodName"] = "ADD_TAB_TYPE";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_TYPE");
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

		$fdata["strField"] = "ADD_TAB_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_TYPE";

	
	
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




	$tdataADDITIONAL_TABLES["ADD_TAB_TYPE"] = $fdata;
//	ADD_TAB_GRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ADD_TAB_GRID";
	$fdata["GoodName"] = "ADD_TAB_GRID";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_GRID");
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

		$fdata["strField"] = "ADD_TAB_GRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_GRID";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdataADDITIONAL_TABLES["ADD_TAB_GRID"] = $fdata;
//	ADD_TAB_TAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ADD_TAB_TAG";
	$fdata["GoodName"] = "ADD_TAB_TAG";
	$fdata["ownerTable"] = "ADDITIONAL_TABLES";
	$fdata["Label"] = GetFieldLabel("ADDITIONAL_TABLES","ADD_TAB_TAG");
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

		$fdata["strField"] = "ADD_TAB_TAG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADD_TAB_TAG";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdataADDITIONAL_TABLES["ADD_TAB_TAG"] = $fdata;


$tables_data["ADDITIONAL_TABLES"]=&$tdataADDITIONAL_TABLES;
$field_labels["ADDITIONAL_TABLES"] = &$fieldLabelsADDITIONAL_TABLES;
$fieldToolTips["ADDITIONAL_TABLES"] = &$fieldToolTipsADDITIONAL_TABLES;
$placeHolders["ADDITIONAL_TABLES"] = &$placeHoldersADDITIONAL_TABLES;
$page_titles["ADDITIONAL_TABLES"] = &$pageTitlesADDITIONAL_TABLES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ADDITIONAL_TABLES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ADDITIONAL_TABLES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ADDITIONAL_TABLES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ADD_TAB_UID,  	ADD_TAB_NAME,  	ADD_TAB_CLASS_NAME,  	ADD_TAB_DESCRIPTION,  	ADD_TAB_SDW_LOG_INSERT,  	ADD_TAB_SDW_LOG_UPDATE,  	ADD_TAB_SDW_LOG_DELETE,  	ADD_TAB_SDW_LOG_SELECT,  	ADD_TAB_SDW_MAX_LENGTH,  	ADD_TAB_SDW_AUTO_DELETE,  	ADD_TAB_PLG_UID,  	DBS_UID,  	PRO_UID,  	ADD_TAB_TYPE,  	ADD_TAB_GRID,  	ADD_TAB_TAG";
$proto0["m_strFrom"] = "FROM ADDITIONAL_TABLES";
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
	"m_strName" => "ADD_TAB_UID",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto6["m_sql"] = "ADD_TAB_UID";
$proto6["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_NAME",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto8["m_sql"] = "ADD_TAB_NAME";
$proto8["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_CLASS_NAME",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto10["m_sql"] = "ADD_TAB_CLASS_NAME";
$proto10["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_DESCRIPTION",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto12["m_sql"] = "ADD_TAB_DESCRIPTION";
$proto12["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_SDW_LOG_INSERT",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto14["m_sql"] = "ADD_TAB_SDW_LOG_INSERT";
$proto14["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_SDW_LOG_UPDATE",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto16["m_sql"] = "ADD_TAB_SDW_LOG_UPDATE";
$proto16["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_SDW_LOG_DELETE",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto18["m_sql"] = "ADD_TAB_SDW_LOG_DELETE";
$proto18["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_SDW_LOG_SELECT",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto20["m_sql"] = "ADD_TAB_SDW_LOG_SELECT";
$proto20["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_SDW_MAX_LENGTH",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto22["m_sql"] = "ADD_TAB_SDW_MAX_LENGTH";
$proto22["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_SDW_AUTO_DELETE",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto24["m_sql"] = "ADD_TAB_SDW_AUTO_DELETE";
$proto24["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_PLG_UID",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto26["m_sql"] = "ADD_TAB_PLG_UID";
$proto26["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_UID",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto28["m_sql"] = "DBS_UID";
$proto28["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto30["m_sql"] = "PRO_UID";
$proto30["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_TYPE",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto32["m_sql"] = "ADD_TAB_TYPE";
$proto32["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_GRID",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto34["m_sql"] = "ADD_TAB_GRID";
$proto34["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_TAG",
	"m_strTable" => "ADDITIONAL_TABLES",
	"m_srcTableName" => "ADDITIONAL_TABLES"
));

$proto36["m_sql"] = "ADD_TAB_TAG";
$proto36["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "ADDITIONAL_TABLES";
$proto39["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "ADD_TAB_UID";
$proto39["m_columns"][] = "ADD_TAB_NAME";
$proto39["m_columns"][] = "ADD_TAB_CLASS_NAME";
$proto39["m_columns"][] = "ADD_TAB_DESCRIPTION";
$proto39["m_columns"][] = "ADD_TAB_SDW_LOG_INSERT";
$proto39["m_columns"][] = "ADD_TAB_SDW_LOG_UPDATE";
$proto39["m_columns"][] = "ADD_TAB_SDW_LOG_DELETE";
$proto39["m_columns"][] = "ADD_TAB_SDW_LOG_SELECT";
$proto39["m_columns"][] = "ADD_TAB_SDW_MAX_LENGTH";
$proto39["m_columns"][] = "ADD_TAB_SDW_AUTO_DELETE";
$proto39["m_columns"][] = "ADD_TAB_PLG_UID";
$proto39["m_columns"][] = "DBS_UID";
$proto39["m_columns"][] = "PRO_UID";
$proto39["m_columns"][] = "ADD_TAB_TYPE";
$proto39["m_columns"][] = "ADD_TAB_GRID";
$proto39["m_columns"][] = "ADD_TAB_TAG";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "ADDITIONAL_TABLES";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "ADDITIONAL_TABLES";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ADDITIONAL_TABLES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ADDITIONAL_TABLES = createSqlQuery_ADDITIONAL_TABLES();


	
						;

																

$tdataADDITIONAL_TABLES[".sqlquery"] = $queryData_ADDITIONAL_TABLES;

$tableEvents["ADDITIONAL_TABLES"] = new eventsBase;
$tdataADDITIONAL_TABLES[".hasEvents"] = false;

?>
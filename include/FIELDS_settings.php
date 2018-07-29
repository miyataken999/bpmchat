<?php
require_once(getabspath("classes/cipherer.php"));




$tdataFIELDS = array();
	$tdataFIELDS[".truncateText"] = true;
	$tdataFIELDS[".NumberOfChars"] = 20;
	$tdataFIELDS[".ShortName"] = "FIELDS";
	$tdataFIELDS[".OwnerID"] = "";
	$tdataFIELDS[".OriginalTable"] = "FIELDS";

//	field labels
$fieldLabelsFIELDS = array();
$fieldToolTipsFIELDS = array();
$pageTitlesFIELDS = array();
$placeHoldersFIELDS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsFIELDS["Japanese"] = array();
	$fieldToolTipsFIELDS["Japanese"] = array();
	$placeHoldersFIELDS["Japanese"] = array();
	$pageTitlesFIELDS["Japanese"] = array();
	$fieldLabelsFIELDS["Japanese"]["FLD_UID"] = "FLD UID";
	$fieldToolTipsFIELDS["Japanese"]["FLD_UID"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_UID"] = "";
	$fieldLabelsFIELDS["Japanese"]["ADD_TAB_UID"] = "タブのUIDを追加";
	$fieldToolTipsFIELDS["Japanese"]["ADD_TAB_UID"] = "";
	$placeHoldersFIELDS["Japanese"]["ADD_TAB_UID"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_INDEX"] = "FLDインデックス";
	$fieldToolTipsFIELDS["Japanese"]["FLD_INDEX"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_INDEX"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_NAME"] = "FLD名前";
	$fieldToolTipsFIELDS["Japanese"]["FLD_NAME"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_NAME"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_DESCRIPTION"] = "FLD説明";
	$fieldToolTipsFIELDS["Japanese"]["FLD_DESCRIPTION"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_DESCRIPTION"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_TYPE"] = "FLDタイプ";
	$fieldToolTipsFIELDS["Japanese"]["FLD_TYPE"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_TYPE"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_SIZE"] = "FLDサイズ";
	$fieldToolTipsFIELDS["Japanese"]["FLD_SIZE"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_SIZE"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_NULL"] = "FLDはnull";
	$fieldToolTipsFIELDS["Japanese"]["FLD_NULL"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_NULL"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_AUTO_INCREMENT"] = "FLD自動インクリメント";
	$fieldToolTipsFIELDS["Japanese"]["FLD_AUTO_INCREMENT"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_AUTO_INCREMENT"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_KEY"] = "FLDキー";
	$fieldToolTipsFIELDS["Japanese"]["FLD_KEY"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_KEY"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_TABLE_INDEX"] = "FLDテーブルインデックス";
	$fieldToolTipsFIELDS["Japanese"]["FLD_TABLE_INDEX"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_TABLE_INDEX"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_FOREIGN_KEY"] = "外部キーをFLD";
	$fieldToolTipsFIELDS["Japanese"]["FLD_FOREIGN_KEY"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_FOREIGN_KEY"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_FOREIGN_KEY_TABLE"] = "外部キーテーブルをFLD";
	$fieldToolTipsFIELDS["Japanese"]["FLD_FOREIGN_KEY_TABLE"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_FOREIGN_KEY_TABLE"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_DYN_NAME"] = "FLD DYN名";
	$fieldToolTipsFIELDS["Japanese"]["FLD_DYN_NAME"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_DYN_NAME"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_DYN_UID"] = "FLD DYNのUID";
	$fieldToolTipsFIELDS["Japanese"]["FLD_DYN_UID"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_DYN_UID"] = "";
	$fieldLabelsFIELDS["Japanese"]["FLD_FILTER"] = "FLDフィルター";
	$fieldToolTipsFIELDS["Japanese"]["FLD_FILTER"] = "";
	$placeHoldersFIELDS["Japanese"]["FLD_FILTER"] = "";
	if (count($fieldToolTipsFIELDS["Japanese"]))
		$tdataFIELDS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFIELDS["English"] = array();
	$fieldToolTipsFIELDS["English"] = array();
	$placeHoldersFIELDS["English"] = array();
	$pageTitlesFIELDS["English"] = array();
	$fieldLabelsFIELDS["English"]["FLD_UID"] = "FLD UID";
	$fieldToolTipsFIELDS["English"]["FLD_UID"] = "";
	$placeHoldersFIELDS["English"]["FLD_UID"] = "";
	$fieldLabelsFIELDS["English"]["ADD_TAB_UID"] = "タブのUIDを追加";
	$fieldToolTipsFIELDS["English"]["ADD_TAB_UID"] = "";
	$placeHoldersFIELDS["English"]["ADD_TAB_UID"] = "";
	$fieldLabelsFIELDS["English"]["FLD_INDEX"] = "FLDインデックス";
	$fieldToolTipsFIELDS["English"]["FLD_INDEX"] = "";
	$placeHoldersFIELDS["English"]["FLD_INDEX"] = "";
	$fieldLabelsFIELDS["English"]["FLD_NAME"] = "FLD名前";
	$fieldToolTipsFIELDS["English"]["FLD_NAME"] = "";
	$placeHoldersFIELDS["English"]["FLD_NAME"] = "";
	$fieldLabelsFIELDS["English"]["FLD_DESCRIPTION"] = "FLD説明";
	$fieldToolTipsFIELDS["English"]["FLD_DESCRIPTION"] = "";
	$placeHoldersFIELDS["English"]["FLD_DESCRIPTION"] = "";
	$fieldLabelsFIELDS["English"]["FLD_TYPE"] = "FLDタイプ";
	$fieldToolTipsFIELDS["English"]["FLD_TYPE"] = "";
	$placeHoldersFIELDS["English"]["FLD_TYPE"] = "";
	$fieldLabelsFIELDS["English"]["FLD_SIZE"] = "FLDサイズ";
	$fieldToolTipsFIELDS["English"]["FLD_SIZE"] = "";
	$placeHoldersFIELDS["English"]["FLD_SIZE"] = "";
	$fieldLabelsFIELDS["English"]["FLD_NULL"] = "FLDはnull";
	$fieldToolTipsFIELDS["English"]["FLD_NULL"] = "";
	$placeHoldersFIELDS["English"]["FLD_NULL"] = "";
	$fieldLabelsFIELDS["English"]["FLD_AUTO_INCREMENT"] = "FLD自動インクリメント";
	$fieldToolTipsFIELDS["English"]["FLD_AUTO_INCREMENT"] = "";
	$placeHoldersFIELDS["English"]["FLD_AUTO_INCREMENT"] = "";
	$fieldLabelsFIELDS["English"]["FLD_KEY"] = "FLDキー";
	$fieldToolTipsFIELDS["English"]["FLD_KEY"] = "";
	$placeHoldersFIELDS["English"]["FLD_KEY"] = "";
	$fieldLabelsFIELDS["English"]["FLD_TABLE_INDEX"] = "FLDテーブルインデックス";
	$fieldToolTipsFIELDS["English"]["FLD_TABLE_INDEX"] = "";
	$placeHoldersFIELDS["English"]["FLD_TABLE_INDEX"] = "";
	$fieldLabelsFIELDS["English"]["FLD_FOREIGN_KEY"] = "外部キーをFLD";
	$fieldToolTipsFIELDS["English"]["FLD_FOREIGN_KEY"] = "";
	$placeHoldersFIELDS["English"]["FLD_FOREIGN_KEY"] = "";
	$fieldLabelsFIELDS["English"]["FLD_FOREIGN_KEY_TABLE"] = "外部キーテーブルをFLD";
	$fieldToolTipsFIELDS["English"]["FLD_FOREIGN_KEY_TABLE"] = "";
	$placeHoldersFIELDS["English"]["FLD_FOREIGN_KEY_TABLE"] = "";
	$fieldLabelsFIELDS["English"]["FLD_DYN_NAME"] = "FLD DYN名";
	$fieldToolTipsFIELDS["English"]["FLD_DYN_NAME"] = "";
	$placeHoldersFIELDS["English"]["FLD_DYN_NAME"] = "";
	$fieldLabelsFIELDS["English"]["FLD_DYN_UID"] = "FLD DYNのUID";
	$fieldToolTipsFIELDS["English"]["FLD_DYN_UID"] = "";
	$placeHoldersFIELDS["English"]["FLD_DYN_UID"] = "";
	$fieldLabelsFIELDS["English"]["FLD_FILTER"] = "FLDフィルター";
	$fieldToolTipsFIELDS["English"]["FLD_FILTER"] = "";
	$placeHoldersFIELDS["English"]["FLD_FILTER"] = "";
	if (count($fieldToolTipsFIELDS["English"]))
		$tdataFIELDS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsFIELDS[""] = array();
	$fieldToolTipsFIELDS[""] = array();
	$placeHoldersFIELDS[""] = array();
	$pageTitlesFIELDS[""] = array();
	if (count($fieldToolTipsFIELDS[""]))
		$tdataFIELDS[".isUseToolTips"] = true;
}


	$tdataFIELDS[".NCSearch"] = true;



$tdataFIELDS[".shortTableName"] = "FIELDS";
$tdataFIELDS[".nSecOptions"] = 0;
$tdataFIELDS[".recsPerRowPrint"] = 1;
$tdataFIELDS[".mainTableOwnerID"] = "";
$tdataFIELDS[".moveNext"] = 0;
$tdataFIELDS[".entityType"] = 0;

$tdataFIELDS[".strOriginalTableName"] = "FIELDS";

	



$tdataFIELDS[".showAddInPopup"] = false;

$tdataFIELDS[".showEditInPopup"] = false;

$tdataFIELDS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataFIELDS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataFIELDS[".fieldsForRegister"] = array();
	
$tdataFIELDS[".listAjax"] = false;

	$tdataFIELDS[".audit"] = true;

	$tdataFIELDS[".locking"] = false;

$tdataFIELDS[".edit"] = true;
$tdataFIELDS[".afterEditAction"] = 1;
$tdataFIELDS[".closePopupAfterEdit"] = 1;
$tdataFIELDS[".afterEditActionDetTable"] = "";

$tdataFIELDS[".add"] = true;
$tdataFIELDS[".afterAddAction"] = 1;
$tdataFIELDS[".closePopupAfterAdd"] = 1;
$tdataFIELDS[".afterAddActionDetTable"] = "";

$tdataFIELDS[".list"] = true;

$tdataFIELDS[".inlineEdit"] = true;


$tdataFIELDS[".reorderRecordsByHeader"] = true;
$tdataFIELDS[".createSortByDropdown"] = true;
$tdataFIELDS[".strSortControlSettingsJSON"] = "";



$tdataFIELDS[".inlineAdd"] = true;
$tdataFIELDS[".view"] = true;

$tdataFIELDS[".import"] = true;

$tdataFIELDS[".exportTo"] = true;

$tdataFIELDS[".printFriendly"] = true;

$tdataFIELDS[".delete"] = true;

$tdataFIELDS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataFIELDS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataFIELDS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataFIELDS[".searchSaving"] = false;
//

$tdataFIELDS[".showSearchPanel"] = true;
		$tdataFIELDS[".flexibleSearch"] = true;

$tdataFIELDS[".isUseAjaxSuggest"] = true;

$tdataFIELDS[".rowHighlite"] = true;



				

$tdataFIELDS[".ajaxCodeSnippetAdded"] = false;

$tdataFIELDS[".buttonsAdded"] = false;

$tdataFIELDS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFIELDS[".isUseTimeForSearch"] = false;





$tdataFIELDS[".allSearchFields"] = array();
$tdataFIELDS[".filterFields"] = array();
$tdataFIELDS[".requiredSearchFields"] = array();

$tdataFIELDS[".allSearchFields"][] = "FLD_UID";
	$tdataFIELDS[".allSearchFields"][] = "ADD_TAB_UID";
	$tdataFIELDS[".allSearchFields"][] = "FLD_INDEX";
	$tdataFIELDS[".allSearchFields"][] = "FLD_NAME";
	$tdataFIELDS[".allSearchFields"][] = "FLD_DESCRIPTION";
	$tdataFIELDS[".allSearchFields"][] = "FLD_TYPE";
	$tdataFIELDS[".allSearchFields"][] = "FLD_SIZE";
	$tdataFIELDS[".allSearchFields"][] = "FLD_NULL";
	$tdataFIELDS[".allSearchFields"][] = "FLD_AUTO_INCREMENT";
	$tdataFIELDS[".allSearchFields"][] = "FLD_KEY";
	$tdataFIELDS[".allSearchFields"][] = "FLD_TABLE_INDEX";
	$tdataFIELDS[".allSearchFields"][] = "FLD_FOREIGN_KEY";
	$tdataFIELDS[".allSearchFields"][] = "FLD_FOREIGN_KEY_TABLE";
	$tdataFIELDS[".allSearchFields"][] = "FLD_DYN_NAME";
	$tdataFIELDS[".allSearchFields"][] = "FLD_DYN_UID";
	$tdataFIELDS[".allSearchFields"][] = "FLD_FILTER";
	

$tdataFIELDS[".googleLikeFields"] = array();
$tdataFIELDS[".googleLikeFields"][] = "FLD_UID";
$tdataFIELDS[".googleLikeFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".googleLikeFields"][] = "FLD_INDEX";
$tdataFIELDS[".googleLikeFields"][] = "FLD_NAME";
$tdataFIELDS[".googleLikeFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".googleLikeFields"][] = "FLD_TYPE";
$tdataFIELDS[".googleLikeFields"][] = "FLD_SIZE";
$tdataFIELDS[".googleLikeFields"][] = "FLD_NULL";
$tdataFIELDS[".googleLikeFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".googleLikeFields"][] = "FLD_KEY";
$tdataFIELDS[".googleLikeFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".googleLikeFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".googleLikeFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".googleLikeFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".googleLikeFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".googleLikeFields"][] = "FLD_FILTER";


$tdataFIELDS[".advSearchFields"] = array();
$tdataFIELDS[".advSearchFields"][] = "FLD_UID";
$tdataFIELDS[".advSearchFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".advSearchFields"][] = "FLD_INDEX";
$tdataFIELDS[".advSearchFields"][] = "FLD_NAME";
$tdataFIELDS[".advSearchFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".advSearchFields"][] = "FLD_TYPE";
$tdataFIELDS[".advSearchFields"][] = "FLD_SIZE";
$tdataFIELDS[".advSearchFields"][] = "FLD_NULL";
$tdataFIELDS[".advSearchFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".advSearchFields"][] = "FLD_KEY";
$tdataFIELDS[".advSearchFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".advSearchFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".advSearchFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".advSearchFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".advSearchFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".advSearchFields"][] = "FLD_FILTER";

$tdataFIELDS[".tableType"] = "list";

$tdataFIELDS[".printerPageOrientation"] = 0;
$tdataFIELDS[".nPrinterPageScale"] = 100;

$tdataFIELDS[".nPrinterSplitRecords"] = 40;

$tdataFIELDS[".nPrinterPDFSplitRecords"] = 40;



$tdataFIELDS[".geocodingEnabled"] = false;





$tdataFIELDS[".listGridLayout"] = 3;


$tdataFIELDS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataFIELDS[".pageSize"] = 20;

$tdataFIELDS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFIELDS[".strOrderBy"] = $tstrOrderBy;

$tdataFIELDS[".orderindexes"] = array();

$tdataFIELDS[".sqlHead"] = "SELECT FLD_UID,  	ADD_TAB_UID,  	FLD_INDEX,  	FLD_NAME,  	FLD_DESCRIPTION,  	FLD_TYPE,  	FLD_SIZE,  	FLD_NULL,  	FLD_AUTO_INCREMENT,  	FLD_KEY,  	FLD_TABLE_INDEX,  	FLD_FOREIGN_KEY,  	FLD_FOREIGN_KEY_TABLE,  	FLD_DYN_NAME,  	FLD_DYN_UID,  	FLD_FILTER";
$tdataFIELDS[".sqlFrom"] = "FROM FIELDS";
$tdataFIELDS[".sqlWhereExpr"] = "";
$tdataFIELDS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFIELDS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFIELDS[".arrGroupsPerPage"] = $arrGPP;

$tdataFIELDS[".highlightSearchResults"] = true;

$tableKeysFIELDS = array();
$tableKeysFIELDS[] = "FLD_UID";
$tdataFIELDS[".Keys"] = $tableKeysFIELDS;

$tdataFIELDS[".listFields"] = array();
$tdataFIELDS[".listFields"][] = "FLD_UID";
$tdataFIELDS[".listFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".listFields"][] = "FLD_INDEX";
$tdataFIELDS[".listFields"][] = "FLD_NAME";
$tdataFIELDS[".listFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".listFields"][] = "FLD_TYPE";
$tdataFIELDS[".listFields"][] = "FLD_SIZE";
$tdataFIELDS[".listFields"][] = "FLD_NULL";
$tdataFIELDS[".listFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".listFields"][] = "FLD_KEY";
$tdataFIELDS[".listFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".listFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".listFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".listFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".listFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".listFields"][] = "FLD_FILTER";

$tdataFIELDS[".hideMobileList"] = array();


$tdataFIELDS[".viewFields"] = array();
$tdataFIELDS[".viewFields"][] = "FLD_UID";
$tdataFIELDS[".viewFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".viewFields"][] = "FLD_INDEX";
$tdataFIELDS[".viewFields"][] = "FLD_NAME";
$tdataFIELDS[".viewFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".viewFields"][] = "FLD_TYPE";
$tdataFIELDS[".viewFields"][] = "FLD_SIZE";
$tdataFIELDS[".viewFields"][] = "FLD_NULL";
$tdataFIELDS[".viewFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".viewFields"][] = "FLD_KEY";
$tdataFIELDS[".viewFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".viewFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".viewFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".viewFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".viewFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".viewFields"][] = "FLD_FILTER";

$tdataFIELDS[".addFields"] = array();
$tdataFIELDS[".addFields"][] = "FLD_UID";
$tdataFIELDS[".addFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".addFields"][] = "FLD_INDEX";
$tdataFIELDS[".addFields"][] = "FLD_NAME";
$tdataFIELDS[".addFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".addFields"][] = "FLD_TYPE";
$tdataFIELDS[".addFields"][] = "FLD_SIZE";
$tdataFIELDS[".addFields"][] = "FLD_NULL";
$tdataFIELDS[".addFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".addFields"][] = "FLD_KEY";
$tdataFIELDS[".addFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".addFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".addFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".addFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".addFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".addFields"][] = "FLD_FILTER";

$tdataFIELDS[".masterListFields"] = array();
$tdataFIELDS[".masterListFields"][] = "FLD_UID";
$tdataFIELDS[".masterListFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".masterListFields"][] = "FLD_INDEX";
$tdataFIELDS[".masterListFields"][] = "FLD_NAME";
$tdataFIELDS[".masterListFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".masterListFields"][] = "FLD_TYPE";
$tdataFIELDS[".masterListFields"][] = "FLD_SIZE";
$tdataFIELDS[".masterListFields"][] = "FLD_NULL";
$tdataFIELDS[".masterListFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".masterListFields"][] = "FLD_KEY";
$tdataFIELDS[".masterListFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".masterListFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".masterListFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".masterListFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".masterListFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".masterListFields"][] = "FLD_FILTER";

$tdataFIELDS[".inlineAddFields"] = array();
$tdataFIELDS[".inlineAddFields"][] = "FLD_UID";
$tdataFIELDS[".inlineAddFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".inlineAddFields"][] = "FLD_INDEX";
$tdataFIELDS[".inlineAddFields"][] = "FLD_NAME";
$tdataFIELDS[".inlineAddFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".inlineAddFields"][] = "FLD_TYPE";
$tdataFIELDS[".inlineAddFields"][] = "FLD_SIZE";
$tdataFIELDS[".inlineAddFields"][] = "FLD_NULL";
$tdataFIELDS[".inlineAddFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".inlineAddFields"][] = "FLD_KEY";
$tdataFIELDS[".inlineAddFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".inlineAddFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".inlineAddFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".inlineAddFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".inlineAddFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".inlineAddFields"][] = "FLD_FILTER";

$tdataFIELDS[".editFields"] = array();
$tdataFIELDS[".editFields"][] = "FLD_UID";
$tdataFIELDS[".editFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".editFields"][] = "FLD_INDEX";
$tdataFIELDS[".editFields"][] = "FLD_NAME";
$tdataFIELDS[".editFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".editFields"][] = "FLD_TYPE";
$tdataFIELDS[".editFields"][] = "FLD_SIZE";
$tdataFIELDS[".editFields"][] = "FLD_NULL";
$tdataFIELDS[".editFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".editFields"][] = "FLD_KEY";
$tdataFIELDS[".editFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".editFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".editFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".editFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".editFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".editFields"][] = "FLD_FILTER";

$tdataFIELDS[".inlineEditFields"] = array();
$tdataFIELDS[".inlineEditFields"][] = "FLD_UID";
$tdataFIELDS[".inlineEditFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".inlineEditFields"][] = "FLD_INDEX";
$tdataFIELDS[".inlineEditFields"][] = "FLD_NAME";
$tdataFIELDS[".inlineEditFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".inlineEditFields"][] = "FLD_TYPE";
$tdataFIELDS[".inlineEditFields"][] = "FLD_SIZE";
$tdataFIELDS[".inlineEditFields"][] = "FLD_NULL";
$tdataFIELDS[".inlineEditFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".inlineEditFields"][] = "FLD_KEY";
$tdataFIELDS[".inlineEditFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".inlineEditFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".inlineEditFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".inlineEditFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".inlineEditFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".inlineEditFields"][] = "FLD_FILTER";

$tdataFIELDS[".updateSelectedFields"] = array();
$tdataFIELDS[".updateSelectedFields"][] = "FLD_UID";
$tdataFIELDS[".updateSelectedFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_INDEX";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_NAME";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_TYPE";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_SIZE";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_NULL";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_KEY";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".updateSelectedFields"][] = "FLD_FILTER";


$tdataFIELDS[".exportFields"] = array();
$tdataFIELDS[".exportFields"][] = "FLD_UID";
$tdataFIELDS[".exportFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".exportFields"][] = "FLD_INDEX";
$tdataFIELDS[".exportFields"][] = "FLD_NAME";
$tdataFIELDS[".exportFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".exportFields"][] = "FLD_TYPE";
$tdataFIELDS[".exportFields"][] = "FLD_SIZE";
$tdataFIELDS[".exportFields"][] = "FLD_NULL";
$tdataFIELDS[".exportFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".exportFields"][] = "FLD_KEY";
$tdataFIELDS[".exportFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".exportFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".exportFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".exportFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".exportFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".exportFields"][] = "FLD_FILTER";

$tdataFIELDS[".importFields"] = array();
$tdataFIELDS[".importFields"][] = "FLD_UID";
$tdataFIELDS[".importFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".importFields"][] = "FLD_INDEX";
$tdataFIELDS[".importFields"][] = "FLD_NAME";
$tdataFIELDS[".importFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".importFields"][] = "FLD_TYPE";
$tdataFIELDS[".importFields"][] = "FLD_SIZE";
$tdataFIELDS[".importFields"][] = "FLD_NULL";
$tdataFIELDS[".importFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".importFields"][] = "FLD_KEY";
$tdataFIELDS[".importFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".importFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".importFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".importFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".importFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".importFields"][] = "FLD_FILTER";

$tdataFIELDS[".printFields"] = array();
$tdataFIELDS[".printFields"][] = "FLD_UID";
$tdataFIELDS[".printFields"][] = "ADD_TAB_UID";
$tdataFIELDS[".printFields"][] = "FLD_INDEX";
$tdataFIELDS[".printFields"][] = "FLD_NAME";
$tdataFIELDS[".printFields"][] = "FLD_DESCRIPTION";
$tdataFIELDS[".printFields"][] = "FLD_TYPE";
$tdataFIELDS[".printFields"][] = "FLD_SIZE";
$tdataFIELDS[".printFields"][] = "FLD_NULL";
$tdataFIELDS[".printFields"][] = "FLD_AUTO_INCREMENT";
$tdataFIELDS[".printFields"][] = "FLD_KEY";
$tdataFIELDS[".printFields"][] = "FLD_TABLE_INDEX";
$tdataFIELDS[".printFields"][] = "FLD_FOREIGN_KEY";
$tdataFIELDS[".printFields"][] = "FLD_FOREIGN_KEY_TABLE";
$tdataFIELDS[".printFields"][] = "FLD_DYN_NAME";
$tdataFIELDS[".printFields"][] = "FLD_DYN_UID";
$tdataFIELDS[".printFields"][] = "FLD_FILTER";

//	FLD_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FLD_UID";
	$fdata["GoodName"] = "FLD_UID";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_UID");
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

		$fdata["strField"] = "FLD_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_UID";

	
	
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




	$tdataFIELDS["FLD_UID"] = $fdata;
//	ADD_TAB_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ADD_TAB_UID";
	$fdata["GoodName"] = "ADD_TAB_UID";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","ADD_TAB_UID");
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




	$tdataFIELDS["ADD_TAB_UID"] = $fdata;
//	FLD_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FLD_INDEX";
	$fdata["GoodName"] = "FLD_INDEX";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_INDEX");
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

		$fdata["strField"] = "FLD_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_INDEX";

	
	
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




	$tdataFIELDS["FLD_INDEX"] = $fdata;
//	FLD_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FLD_NAME";
	$fdata["GoodName"] = "FLD_NAME";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_NAME");
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

		$fdata["strField"] = "FLD_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_NAME";

	
	
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




	$tdataFIELDS["FLD_NAME"] = $fdata;
//	FLD_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FLD_DESCRIPTION";
	$fdata["GoodName"] = "FLD_DESCRIPTION";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_DESCRIPTION");
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

		$fdata["strField"] = "FLD_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_DESCRIPTION";

	
	
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




	$tdataFIELDS["FLD_DESCRIPTION"] = $fdata;
//	FLD_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FLD_TYPE";
	$fdata["GoodName"] = "FLD_TYPE";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_TYPE");
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

		$fdata["strField"] = "FLD_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_TYPE";

	
	
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




	$tdataFIELDS["FLD_TYPE"] = $fdata;
//	FLD_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FLD_SIZE";
	$fdata["GoodName"] = "FLD_SIZE";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_SIZE");
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

		$fdata["strField"] = "FLD_SIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_SIZE";

	
	
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




	$tdataFIELDS["FLD_SIZE"] = $fdata;
//	FLD_NULL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FLD_NULL";
	$fdata["GoodName"] = "FLD_NULL";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_NULL");
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

		$fdata["strField"] = "FLD_NULL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_NULL";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataFIELDS["FLD_NULL"] = $fdata;
//	FLD_AUTO_INCREMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FLD_AUTO_INCREMENT";
	$fdata["GoodName"] = "FLD_AUTO_INCREMENT";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_AUTO_INCREMENT");
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

		$fdata["strField"] = "FLD_AUTO_INCREMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_AUTO_INCREMENT";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataFIELDS["FLD_AUTO_INCREMENT"] = $fdata;
//	FLD_KEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FLD_KEY";
	$fdata["GoodName"] = "FLD_KEY";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_KEY");
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

		$fdata["strField"] = "FLD_KEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_KEY";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataFIELDS["FLD_KEY"] = $fdata;
//	FLD_TABLE_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FLD_TABLE_INDEX";
	$fdata["GoodName"] = "FLD_TABLE_INDEX";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_TABLE_INDEX");
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

		$fdata["strField"] = "FLD_TABLE_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_TABLE_INDEX";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataFIELDS["FLD_TABLE_INDEX"] = $fdata;
//	FLD_FOREIGN_KEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FLD_FOREIGN_KEY";
	$fdata["GoodName"] = "FLD_FOREIGN_KEY";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_FOREIGN_KEY");
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

		$fdata["strField"] = "FLD_FOREIGN_KEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_FOREIGN_KEY";

	
	
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




	$tdataFIELDS["FLD_FOREIGN_KEY"] = $fdata;
//	FLD_FOREIGN_KEY_TABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FLD_FOREIGN_KEY_TABLE";
	$fdata["GoodName"] = "FLD_FOREIGN_KEY_TABLE";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_FOREIGN_KEY_TABLE");
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

		$fdata["strField"] = "FLD_FOREIGN_KEY_TABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_FOREIGN_KEY_TABLE";

	
	
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




	$tdataFIELDS["FLD_FOREIGN_KEY_TABLE"] = $fdata;
//	FLD_DYN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FLD_DYN_NAME";
	$fdata["GoodName"] = "FLD_DYN_NAME";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_DYN_NAME");
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

		$fdata["strField"] = "FLD_DYN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_DYN_NAME";

	
	
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




	$tdataFIELDS["FLD_DYN_NAME"] = $fdata;
//	FLD_DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FLD_DYN_UID";
	$fdata["GoodName"] = "FLD_DYN_UID";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_DYN_UID");
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

		$fdata["strField"] = "FLD_DYN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_DYN_UID";

	
	
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




	$tdataFIELDS["FLD_DYN_UID"] = $fdata;
//	FLD_FILTER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FLD_FILTER";
	$fdata["GoodName"] = "FLD_FILTER";
	$fdata["ownerTable"] = "FIELDS";
	$fdata["Label"] = GetFieldLabel("FIELDS","FLD_FILTER");
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

		$fdata["strField"] = "FLD_FILTER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLD_FILTER";

	
	
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




	$tdataFIELDS["FLD_FILTER"] = $fdata;


$tables_data["FIELDS"]=&$tdataFIELDS;
$field_labels["FIELDS"] = &$fieldLabelsFIELDS;
$fieldToolTips["FIELDS"] = &$fieldToolTipsFIELDS;
$placeHolders["FIELDS"] = &$placeHoldersFIELDS;
$page_titles["FIELDS"] = &$pageTitlesFIELDS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["FIELDS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["FIELDS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_FIELDS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FLD_UID,  	ADD_TAB_UID,  	FLD_INDEX,  	FLD_NAME,  	FLD_DESCRIPTION,  	FLD_TYPE,  	FLD_SIZE,  	FLD_NULL,  	FLD_AUTO_INCREMENT,  	FLD_KEY,  	FLD_TABLE_INDEX,  	FLD_FOREIGN_KEY,  	FLD_FOREIGN_KEY_TABLE,  	FLD_DYN_NAME,  	FLD_DYN_UID,  	FLD_FILTER";
$proto0["m_strFrom"] = "FROM FIELDS";
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
	"m_strName" => "FLD_UID",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto6["m_sql"] = "FLD_UID";
$proto6["m_srcTableName"] = "FIELDS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ADD_TAB_UID",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto8["m_sql"] = "ADD_TAB_UID";
$proto8["m_srcTableName"] = "FIELDS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_INDEX",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto10["m_sql"] = "FLD_INDEX";
$proto10["m_srcTableName"] = "FIELDS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_NAME",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto12["m_sql"] = "FLD_NAME";
$proto12["m_srcTableName"] = "FIELDS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_DESCRIPTION",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto14["m_sql"] = "FLD_DESCRIPTION";
$proto14["m_srcTableName"] = "FIELDS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_TYPE",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto16["m_sql"] = "FLD_TYPE";
$proto16["m_srcTableName"] = "FIELDS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_SIZE",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto18["m_sql"] = "FLD_SIZE";
$proto18["m_srcTableName"] = "FIELDS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_NULL",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto20["m_sql"] = "FLD_NULL";
$proto20["m_srcTableName"] = "FIELDS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_AUTO_INCREMENT",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto22["m_sql"] = "FLD_AUTO_INCREMENT";
$proto22["m_srcTableName"] = "FIELDS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_KEY",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto24["m_sql"] = "FLD_KEY";
$proto24["m_srcTableName"] = "FIELDS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_TABLE_INDEX",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto26["m_sql"] = "FLD_TABLE_INDEX";
$proto26["m_srcTableName"] = "FIELDS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_FOREIGN_KEY",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto28["m_sql"] = "FLD_FOREIGN_KEY";
$proto28["m_srcTableName"] = "FIELDS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_FOREIGN_KEY_TABLE",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto30["m_sql"] = "FLD_FOREIGN_KEY_TABLE";
$proto30["m_srcTableName"] = "FIELDS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_DYN_NAME",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto32["m_sql"] = "FLD_DYN_NAME";
$proto32["m_srcTableName"] = "FIELDS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_DYN_UID",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto34["m_sql"] = "FLD_DYN_UID";
$proto34["m_srcTableName"] = "FIELDS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FLD_FILTER",
	"m_strTable" => "FIELDS",
	"m_srcTableName" => "FIELDS"
));

$proto36["m_sql"] = "FLD_FILTER";
$proto36["m_srcTableName"] = "FIELDS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "FIELDS";
$proto39["m_srcTableName"] = "FIELDS";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "FLD_UID";
$proto39["m_columns"][] = "ADD_TAB_UID";
$proto39["m_columns"][] = "FLD_INDEX";
$proto39["m_columns"][] = "FLD_NAME";
$proto39["m_columns"][] = "FLD_DESCRIPTION";
$proto39["m_columns"][] = "FLD_TYPE";
$proto39["m_columns"][] = "FLD_SIZE";
$proto39["m_columns"][] = "FLD_NULL";
$proto39["m_columns"][] = "FLD_AUTO_INCREMENT";
$proto39["m_columns"][] = "FLD_KEY";
$proto39["m_columns"][] = "FLD_TABLE_INDEX";
$proto39["m_columns"][] = "FLD_FOREIGN_KEY";
$proto39["m_columns"][] = "FLD_FOREIGN_KEY_TABLE";
$proto39["m_columns"][] = "FLD_DYN_NAME";
$proto39["m_columns"][] = "FLD_DYN_UID";
$proto39["m_columns"][] = "FLD_FILTER";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "FIELDS";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "FIELDS";
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
$proto0["m_srcTableName"]="FIELDS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_FIELDS = createSqlQuery_FIELDS();


	
						;

																

$tdataFIELDS[".sqlquery"] = $queryData_FIELDS;

$tableEvents["FIELDS"] = new eventsBase;
$tdataFIELDS[".hasEvents"] = false;

?>
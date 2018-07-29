<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_DATA = array();
	$tdataBPMN_DATA[".truncateText"] = true;
	$tdataBPMN_DATA[".NumberOfChars"] = 20;
	$tdataBPMN_DATA[".ShortName"] = "BPMN_DATA";
	$tdataBPMN_DATA[".OwnerID"] = "";
	$tdataBPMN_DATA[".OriginalTable"] = "BPMN_DATA";

//	field labels
$fieldLabelsBPMN_DATA = array();
$fieldToolTipsBPMN_DATA = array();
$pageTitlesBPMN_DATA = array();
$placeHoldersBPMN_DATA = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_DATA["Japanese"] = array();
	$fieldToolTipsBPMN_DATA["Japanese"] = array();
	$placeHoldersBPMN_DATA["Japanese"] = array();
	$pageTitlesBPMN_DATA["Japanese"] = array();
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_UID"] = "datのUID";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_UID"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_UID"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_DATA["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_DATA["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_NAME"] = "datの名前";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_NAME"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_NAME"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_TYPE"] = "datのタイプ";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_TYPE"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_TYPE"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_IS_COLLECTION"] = "DATがコレクションです";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_IS_COLLECTION"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_IS_COLLECTION"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_ITEM_KIND"] = "DAT項目の種類";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_ITEM_KIND"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_ITEM_KIND"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_CAPACITY"] = "datの容量";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_CAPACITY"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_CAPACITY"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_IS_UNLIMITED"] = "DATは無制限です";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_IS_UNLIMITED"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_IS_UNLIMITED"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_STATE"] = "datの状態";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_STATE"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_STATE"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_IS_GLOBAL"] = "DATはグローバルです";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_IS_GLOBAL"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_IS_GLOBAL"] = "";
	$fieldLabelsBPMN_DATA["Japanese"]["DAT_OBJECT_REF"] = "DATオブジェクト参照";
	$fieldToolTipsBPMN_DATA["Japanese"]["DAT_OBJECT_REF"] = "";
	$placeHoldersBPMN_DATA["Japanese"]["DAT_OBJECT_REF"] = "";
	if (count($fieldToolTipsBPMN_DATA["Japanese"]))
		$tdataBPMN_DATA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_DATA["English"] = array();
	$fieldToolTipsBPMN_DATA["English"] = array();
	$placeHoldersBPMN_DATA["English"] = array();
	$pageTitlesBPMN_DATA["English"] = array();
	$fieldLabelsBPMN_DATA["English"]["DAT_UID"] = "datのUID";
	$fieldToolTipsBPMN_DATA["English"]["DAT_UID"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_UID"] = "";
	$fieldLabelsBPMN_DATA["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_DATA["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_DATA["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_DATA["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_DATA["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_DATA["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_NAME"] = "datの名前";
	$fieldToolTipsBPMN_DATA["English"]["DAT_NAME"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_NAME"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_TYPE"] = "datのタイプ";
	$fieldToolTipsBPMN_DATA["English"]["DAT_TYPE"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_TYPE"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_IS_COLLECTION"] = "DATがコレクションです";
	$fieldToolTipsBPMN_DATA["English"]["DAT_IS_COLLECTION"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_IS_COLLECTION"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_ITEM_KIND"] = "DAT項目の種類";
	$fieldToolTipsBPMN_DATA["English"]["DAT_ITEM_KIND"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_ITEM_KIND"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_CAPACITY"] = "datの容量";
	$fieldToolTipsBPMN_DATA["English"]["DAT_CAPACITY"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_CAPACITY"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_IS_UNLIMITED"] = "DATは無制限です";
	$fieldToolTipsBPMN_DATA["English"]["DAT_IS_UNLIMITED"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_IS_UNLIMITED"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_STATE"] = "datの状態";
	$fieldToolTipsBPMN_DATA["English"]["DAT_STATE"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_STATE"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_IS_GLOBAL"] = "DATはグローバルです";
	$fieldToolTipsBPMN_DATA["English"]["DAT_IS_GLOBAL"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_IS_GLOBAL"] = "";
	$fieldLabelsBPMN_DATA["English"]["DAT_OBJECT_REF"] = "DATオブジェクト参照";
	$fieldToolTipsBPMN_DATA["English"]["DAT_OBJECT_REF"] = "";
	$placeHoldersBPMN_DATA["English"]["DAT_OBJECT_REF"] = "";
	if (count($fieldToolTipsBPMN_DATA["English"]))
		$tdataBPMN_DATA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_DATA[""] = array();
	$fieldToolTipsBPMN_DATA[""] = array();
	$placeHoldersBPMN_DATA[""] = array();
	$pageTitlesBPMN_DATA[""] = array();
	if (count($fieldToolTipsBPMN_DATA[""]))
		$tdataBPMN_DATA[".isUseToolTips"] = true;
}


	$tdataBPMN_DATA[".NCSearch"] = true;



$tdataBPMN_DATA[".shortTableName"] = "BPMN_DATA";
$tdataBPMN_DATA[".nSecOptions"] = 0;
$tdataBPMN_DATA[".recsPerRowPrint"] = 1;
$tdataBPMN_DATA[".mainTableOwnerID"] = "";
$tdataBPMN_DATA[".moveNext"] = 0;
$tdataBPMN_DATA[".entityType"] = 0;

$tdataBPMN_DATA[".strOriginalTableName"] = "BPMN_DATA";

	



$tdataBPMN_DATA[".showAddInPopup"] = false;

$tdataBPMN_DATA[".showEditInPopup"] = false;

$tdataBPMN_DATA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_DATA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_DATA[".fieldsForRegister"] = array();
	
$tdataBPMN_DATA[".listAjax"] = false;

	$tdataBPMN_DATA[".audit"] = true;

	$tdataBPMN_DATA[".locking"] = false;

$tdataBPMN_DATA[".edit"] = true;
$tdataBPMN_DATA[".afterEditAction"] = 1;
$tdataBPMN_DATA[".closePopupAfterEdit"] = 1;
$tdataBPMN_DATA[".afterEditActionDetTable"] = "";

$tdataBPMN_DATA[".add"] = true;
$tdataBPMN_DATA[".afterAddAction"] = 1;
$tdataBPMN_DATA[".closePopupAfterAdd"] = 1;
$tdataBPMN_DATA[".afterAddActionDetTable"] = "";

$tdataBPMN_DATA[".list"] = true;

$tdataBPMN_DATA[".inlineEdit"] = true;


$tdataBPMN_DATA[".reorderRecordsByHeader"] = true;
$tdataBPMN_DATA[".createSortByDropdown"] = true;
$tdataBPMN_DATA[".strSortControlSettingsJSON"] = "";



$tdataBPMN_DATA[".inlineAdd"] = true;
$tdataBPMN_DATA[".view"] = true;

$tdataBPMN_DATA[".import"] = true;

$tdataBPMN_DATA[".exportTo"] = true;

$tdataBPMN_DATA[".printFriendly"] = true;

$tdataBPMN_DATA[".delete"] = true;

$tdataBPMN_DATA[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_DATA[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_DATA[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_DATA[".searchSaving"] = false;
//

$tdataBPMN_DATA[".showSearchPanel"] = true;
		$tdataBPMN_DATA[".flexibleSearch"] = true;

$tdataBPMN_DATA[".isUseAjaxSuggest"] = true;

$tdataBPMN_DATA[".rowHighlite"] = true;



																												

$tdataBPMN_DATA[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_DATA[".buttonsAdded"] = false;

$tdataBPMN_DATA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_DATA[".isUseTimeForSearch"] = false;



$tdataBPMN_DATA[".badgeColor"] = "CFAE83";


$tdataBPMN_DATA[".allSearchFields"] = array();
$tdataBPMN_DATA[".filterFields"] = array();
$tdataBPMN_DATA[".requiredSearchFields"] = array();

$tdataBPMN_DATA[".allSearchFields"][] = "DAT_UID";
	$tdataBPMN_DATA[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_DATA[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_NAME";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_TYPE";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_IS_COLLECTION";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_ITEM_KIND";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_CAPACITY";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_IS_UNLIMITED";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_STATE";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_IS_GLOBAL";
	$tdataBPMN_DATA[".allSearchFields"][] = "DAT_OBJECT_REF";
	

$tdataBPMN_DATA[".googleLikeFields"] = array();
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_UID";
$tdataBPMN_DATA[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".googleLikeFields"][] = "DAT_OBJECT_REF";


$tdataBPMN_DATA[".advSearchFields"] = array();
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_UID";
$tdataBPMN_DATA[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".advSearchFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".tableType"] = "list";

$tdataBPMN_DATA[".printerPageOrientation"] = 0;
$tdataBPMN_DATA[".nPrinterPageScale"] = 100;

$tdataBPMN_DATA[".nPrinterSplitRecords"] = 40;

$tdataBPMN_DATA[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_DATA[".geocodingEnabled"] = false;





$tdataBPMN_DATA[".listGridLayout"] = 3;


$tdataBPMN_DATA[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_DATA[".pageSize"] = 20;

$tdataBPMN_DATA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_DATA[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_DATA[".orderindexes"] = array();

$tdataBPMN_DATA[".sqlHead"] = "SELECT DAT_UID,  	PRJ_UID,  	PRO_UID,  	DAT_NAME,  	DAT_TYPE,  	DAT_IS_COLLECTION,  	DAT_ITEM_KIND,  	DAT_CAPACITY,  	DAT_IS_UNLIMITED,  	DAT_STATE,  	DAT_IS_GLOBAL,  	DAT_OBJECT_REF";
$tdataBPMN_DATA[".sqlFrom"] = "FROM BPMN_DATA";
$tdataBPMN_DATA[".sqlWhereExpr"] = "";
$tdataBPMN_DATA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_DATA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_DATA[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_DATA[".highlightSearchResults"] = true;

$tableKeysBPMN_DATA = array();
$tableKeysBPMN_DATA[] = "DAT_UID";
$tdataBPMN_DATA[".Keys"] = $tableKeysBPMN_DATA;

$tdataBPMN_DATA[".listFields"] = array();
$tdataBPMN_DATA[".listFields"][] = "DAT_UID";
$tdataBPMN_DATA[".listFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".listFields"][] = "PRO_UID";
$tdataBPMN_DATA[".listFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".listFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".listFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".listFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".listFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".listFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".listFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".listFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".listFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".hideMobileList"] = array();


$tdataBPMN_DATA[".viewFields"] = array();
$tdataBPMN_DATA[".viewFields"][] = "DAT_UID";
$tdataBPMN_DATA[".viewFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".viewFields"][] = "PRO_UID";
$tdataBPMN_DATA[".viewFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".viewFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".viewFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".viewFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".viewFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".viewFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".viewFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".viewFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".viewFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".addFields"] = array();
$tdataBPMN_DATA[".addFields"][] = "DAT_UID";
$tdataBPMN_DATA[".addFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".addFields"][] = "PRO_UID";
$tdataBPMN_DATA[".addFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".addFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".addFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".addFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".addFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".addFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".addFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".addFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".addFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".masterListFields"] = array();
$tdataBPMN_DATA[".masterListFields"][] = "DAT_UID";
$tdataBPMN_DATA[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".masterListFields"][] = "PRO_UID";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".masterListFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".inlineAddFields"] = array();
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_UID";
$tdataBPMN_DATA[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".inlineAddFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".editFields"] = array();
$tdataBPMN_DATA[".editFields"][] = "DAT_UID";
$tdataBPMN_DATA[".editFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".editFields"][] = "PRO_UID";
$tdataBPMN_DATA[".editFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".editFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".editFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".editFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".editFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".editFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".editFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".editFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".editFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".inlineEditFields"] = array();
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_UID";
$tdataBPMN_DATA[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".inlineEditFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".updateSelectedFields"] = array();
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_UID";
$tdataBPMN_DATA[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".updateSelectedFields"][] = "DAT_OBJECT_REF";


$tdataBPMN_DATA[".exportFields"] = array();
$tdataBPMN_DATA[".exportFields"][] = "DAT_UID";
$tdataBPMN_DATA[".exportFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".exportFields"][] = "PRO_UID";
$tdataBPMN_DATA[".exportFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".exportFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".exportFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".exportFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".exportFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".exportFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".exportFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".exportFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".exportFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".importFields"] = array();
$tdataBPMN_DATA[".importFields"][] = "DAT_UID";
$tdataBPMN_DATA[".importFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".importFields"][] = "PRO_UID";
$tdataBPMN_DATA[".importFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".importFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".importFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".importFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".importFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".importFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".importFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".importFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".importFields"][] = "DAT_OBJECT_REF";

$tdataBPMN_DATA[".printFields"] = array();
$tdataBPMN_DATA[".printFields"][] = "DAT_UID";
$tdataBPMN_DATA[".printFields"][] = "PRJ_UID";
$tdataBPMN_DATA[".printFields"][] = "PRO_UID";
$tdataBPMN_DATA[".printFields"][] = "DAT_NAME";
$tdataBPMN_DATA[".printFields"][] = "DAT_TYPE";
$tdataBPMN_DATA[".printFields"][] = "DAT_IS_COLLECTION";
$tdataBPMN_DATA[".printFields"][] = "DAT_ITEM_KIND";
$tdataBPMN_DATA[".printFields"][] = "DAT_CAPACITY";
$tdataBPMN_DATA[".printFields"][] = "DAT_IS_UNLIMITED";
$tdataBPMN_DATA[".printFields"][] = "DAT_STATE";
$tdataBPMN_DATA[".printFields"][] = "DAT_IS_GLOBAL";
$tdataBPMN_DATA[".printFields"][] = "DAT_OBJECT_REF";

//	DAT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DAT_UID";
	$fdata["GoodName"] = "DAT_UID";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_UID");
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

		$fdata["strField"] = "DAT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_UID";

	
	
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




	$tdataBPMN_DATA["DAT_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","PRJ_UID");
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

		$fdata["strField"] = "PRJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UID";

	
	
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
	$edata["LookupTable"] = "BPMN_PROJECT";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRJ_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRJ_UID";

	
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




	$tdataBPMN_DATA["PRJ_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","PRO_UID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BPMN_PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRO_UID";

	
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




	$tdataBPMN_DATA["PRO_UID"] = $fdata;
//	DAT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DAT_NAME";
	$fdata["GoodName"] = "DAT_NAME";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_NAME");
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

		$fdata["strField"] = "DAT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_NAME";

	
	
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




	$tdataBPMN_DATA["DAT_NAME"] = $fdata;
//	DAT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DAT_TYPE";
	$fdata["GoodName"] = "DAT_TYPE";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_TYPE");
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

		$fdata["strField"] = "DAT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_TYPE";

	
	
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




	$tdataBPMN_DATA["DAT_TYPE"] = $fdata;
//	DAT_IS_COLLECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DAT_IS_COLLECTION";
	$fdata["GoodName"] = "DAT_IS_COLLECTION";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_IS_COLLECTION");
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

		$fdata["strField"] = "DAT_IS_COLLECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_IS_COLLECTION";

	
	
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




	$tdataBPMN_DATA["DAT_IS_COLLECTION"] = $fdata;
//	DAT_ITEM_KIND
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DAT_ITEM_KIND";
	$fdata["GoodName"] = "DAT_ITEM_KIND";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_ITEM_KIND");
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

		$fdata["strField"] = "DAT_ITEM_KIND";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_ITEM_KIND";

	
	
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




	$tdataBPMN_DATA["DAT_ITEM_KIND"] = $fdata;
//	DAT_CAPACITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DAT_CAPACITY";
	$fdata["GoodName"] = "DAT_CAPACITY";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_CAPACITY");
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

		$fdata["strField"] = "DAT_CAPACITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_CAPACITY";

	
	
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




	$tdataBPMN_DATA["DAT_CAPACITY"] = $fdata;
//	DAT_IS_UNLIMITED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DAT_IS_UNLIMITED";
	$fdata["GoodName"] = "DAT_IS_UNLIMITED";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_IS_UNLIMITED");
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

		$fdata["strField"] = "DAT_IS_UNLIMITED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_IS_UNLIMITED";

	
	
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




	$tdataBPMN_DATA["DAT_IS_UNLIMITED"] = $fdata;
//	DAT_STATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DAT_STATE";
	$fdata["GoodName"] = "DAT_STATE";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_STATE");
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

		$fdata["strField"] = "DAT_STATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_STATE";

	
	
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




	$tdataBPMN_DATA["DAT_STATE"] = $fdata;
//	DAT_IS_GLOBAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DAT_IS_GLOBAL";
	$fdata["GoodName"] = "DAT_IS_GLOBAL";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_IS_GLOBAL");
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

		$fdata["strField"] = "DAT_IS_GLOBAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_IS_GLOBAL";

	
	
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




	$tdataBPMN_DATA["DAT_IS_GLOBAL"] = $fdata;
//	DAT_OBJECT_REF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DAT_OBJECT_REF";
	$fdata["GoodName"] = "DAT_OBJECT_REF";
	$fdata["ownerTable"] = "BPMN_DATA";
	$fdata["Label"] = GetFieldLabel("BPMN_DATA","DAT_OBJECT_REF");
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

		$fdata["strField"] = "DAT_OBJECT_REF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAT_OBJECT_REF";

	
	
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




	$tdataBPMN_DATA["DAT_OBJECT_REF"] = $fdata;


$tables_data["BPMN_DATA"]=&$tdataBPMN_DATA;
$field_labels["BPMN_DATA"] = &$fieldLabelsBPMN_DATA;
$fieldToolTips["BPMN_DATA"] = &$fieldToolTipsBPMN_DATA;
$placeHolders["BPMN_DATA"] = &$placeHoldersBPMN_DATA;
$page_titles["BPMN_DATA"] = &$pageTitlesBPMN_DATA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_DATA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_DATA"] = array();


	
				$strOriginalDetailsTable="BPMN_PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_DATA"][0] = $masterParams;
				$masterTablesData["BPMN_DATA"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_DATA"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["BPMN_DATA"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_DATA"][0]["detailKeys"][]="PRO_UID";
		
	
				$strOriginalDetailsTable="BPMN_PROJECT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROJECT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROJECT";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_DATA"][1] = $masterParams;
				$masterTablesData["BPMN_DATA"][1]["masterKeys"] = array();
	$masterTablesData["BPMN_DATA"][1]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_DATA"][1]["detailKeys"] = array();
	$masterTablesData["BPMN_DATA"][1]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_DATA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DAT_UID,  	PRJ_UID,  	PRO_UID,  	DAT_NAME,  	DAT_TYPE,  	DAT_IS_COLLECTION,  	DAT_ITEM_KIND,  	DAT_CAPACITY,  	DAT_IS_UNLIMITED,  	DAT_STATE,  	DAT_IS_GLOBAL,  	DAT_OBJECT_REF";
$proto0["m_strFrom"] = "FROM BPMN_DATA";
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
	"m_strName" => "DAT_UID",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto6["m_sql"] = "DAT_UID";
$proto6["m_srcTableName"] = "BPMN_DATA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_DATA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "BPMN_DATA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_NAME",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto12["m_sql"] = "DAT_NAME";
$proto12["m_srcTableName"] = "BPMN_DATA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_TYPE",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto14["m_sql"] = "DAT_TYPE";
$proto14["m_srcTableName"] = "BPMN_DATA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_IS_COLLECTION",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto16["m_sql"] = "DAT_IS_COLLECTION";
$proto16["m_srcTableName"] = "BPMN_DATA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_ITEM_KIND",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto18["m_sql"] = "DAT_ITEM_KIND";
$proto18["m_srcTableName"] = "BPMN_DATA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_CAPACITY",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto20["m_sql"] = "DAT_CAPACITY";
$proto20["m_srcTableName"] = "BPMN_DATA";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_IS_UNLIMITED",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto22["m_sql"] = "DAT_IS_UNLIMITED";
$proto22["m_srcTableName"] = "BPMN_DATA";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_STATE",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto24["m_sql"] = "DAT_STATE";
$proto24["m_srcTableName"] = "BPMN_DATA";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_IS_GLOBAL",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto26["m_sql"] = "DAT_IS_GLOBAL";
$proto26["m_srcTableName"] = "BPMN_DATA";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DAT_OBJECT_REF",
	"m_strTable" => "BPMN_DATA",
	"m_srcTableName" => "BPMN_DATA"
));

$proto28["m_sql"] = "DAT_OBJECT_REF";
$proto28["m_srcTableName"] = "BPMN_DATA";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "BPMN_DATA";
$proto31["m_srcTableName"] = "BPMN_DATA";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "DAT_UID";
$proto31["m_columns"][] = "PRJ_UID";
$proto31["m_columns"][] = "PRO_UID";
$proto31["m_columns"][] = "DAT_NAME";
$proto31["m_columns"][] = "DAT_TYPE";
$proto31["m_columns"][] = "DAT_IS_COLLECTION";
$proto31["m_columns"][] = "DAT_ITEM_KIND";
$proto31["m_columns"][] = "DAT_CAPACITY";
$proto31["m_columns"][] = "DAT_IS_UNLIMITED";
$proto31["m_columns"][] = "DAT_STATE";
$proto31["m_columns"][] = "DAT_IS_GLOBAL";
$proto31["m_columns"][] = "DAT_OBJECT_REF";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "BPMN_DATA";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "BPMN_DATA";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_DATA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_DATA = createSqlQuery_BPMN_DATA();


	
						;

												

$tdataBPMN_DATA[".sqlquery"] = $queryData_BPMN_DATA;

$tableEvents["BPMN_DATA"] = new eventsBase;
$tdataBPMN_DATA[".hasEvents"] = false;

?>
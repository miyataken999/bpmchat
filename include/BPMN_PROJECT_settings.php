<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_PROJECT = array();
	$tdataBPMN_PROJECT[".truncateText"] = true;
	$tdataBPMN_PROJECT[".NumberOfChars"] = 20;
	$tdataBPMN_PROJECT[".ShortName"] = "BPMN_PROJECT";
	$tdataBPMN_PROJECT[".OwnerID"] = "";
	$tdataBPMN_PROJECT[".OriginalTable"] = "BPMN_PROJECT";

//	field labels
$fieldLabelsBPMN_PROJECT = array();
$fieldToolTipsBPMN_PROJECT = array();
$pageTitlesBPMN_PROJECT = array();
$placeHoldersBPMN_PROJECT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_PROJECT["Japanese"] = array();
	$fieldToolTipsBPMN_PROJECT["Japanese"] = array();
	$placeHoldersBPMN_PROJECT["Japanese"] = array();
	$pageTitlesBPMN_PROJECT["Japanese"] = array();
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_NAME"] = "PRJ名";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_NAME"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_NAME"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_DESCRIPTION"] = "PRJの説明";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_DESCRIPTION"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_DESCRIPTION"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_TARGET_NAMESPACE"] = "PRJのターゲット名前空間";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_TARGET_NAMESPACE"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_TARGET_NAMESPACE"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_EXPRESION_LANGUAGE"] = "PRJのexpresion言語";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_EXPRESION_LANGUAGE"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_EXPRESION_LANGUAGE"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_TYPE_LANGUAGE"] = "PRJタイプ言語";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_TYPE_LANGUAGE"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_TYPE_LANGUAGE"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_EXPORTER"] = "PRJ輸出国";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_EXPORTER"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_EXPORTER"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_EXPORTER_VERSION"] = "PRJ輸出国バージョン";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_EXPORTER_VERSION"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_EXPORTER_VERSION"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_CREATE_DATE"] = "PRJ日付を作成します";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_CREATE_DATE"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_CREATE_DATE"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_UPDATE_DATE"] = "PRJ更新日時";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_UPDATE_DATE"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_UPDATE_DATE"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_AUTHOR"] = "PRJの作者";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_AUTHOR"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_AUTHOR"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_AUTHOR_VERSION"] = "PRJ著者バージョン";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_AUTHOR_VERSION"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_AUTHOR_VERSION"] = "";
	$fieldLabelsBPMN_PROJECT["Japanese"]["PRJ_ORIGINAL_SOURCE"] = "PRJ元のソース";
	$fieldToolTipsBPMN_PROJECT["Japanese"]["PRJ_ORIGINAL_SOURCE"] = "";
	$placeHoldersBPMN_PROJECT["Japanese"]["PRJ_ORIGINAL_SOURCE"] = "";
	if (count($fieldToolTipsBPMN_PROJECT["Japanese"]))
		$tdataBPMN_PROJECT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_PROJECT["English"] = array();
	$fieldToolTipsBPMN_PROJECT["English"] = array();
	$placeHoldersBPMN_PROJECT["English"] = array();
	$pageTitlesBPMN_PROJECT["English"] = array();
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_NAME"] = "PRJ名";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_NAME"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_NAME"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_DESCRIPTION"] = "PRJの説明";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_DESCRIPTION"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_DESCRIPTION"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_TARGET_NAMESPACE"] = "PRJのターゲット名前空間";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_TARGET_NAMESPACE"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_TARGET_NAMESPACE"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_EXPRESION_LANGUAGE"] = "PRJのexpresion言語";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_EXPRESION_LANGUAGE"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_EXPRESION_LANGUAGE"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_TYPE_LANGUAGE"] = "PRJタイプ言語";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_TYPE_LANGUAGE"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_TYPE_LANGUAGE"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_EXPORTER"] = "PRJ輸出国";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_EXPORTER"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_EXPORTER"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_EXPORTER_VERSION"] = "PRJ輸出国バージョン";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_EXPORTER_VERSION"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_EXPORTER_VERSION"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_CREATE_DATE"] = "PRJ日付を作成します";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_CREATE_DATE"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_CREATE_DATE"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_UPDATE_DATE"] = "PRJ更新日時";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_UPDATE_DATE"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_UPDATE_DATE"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_AUTHOR"] = "PRJの作者";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_AUTHOR"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_AUTHOR"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_AUTHOR_VERSION"] = "PRJ著者バージョン";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_AUTHOR_VERSION"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_AUTHOR_VERSION"] = "";
	$fieldLabelsBPMN_PROJECT["English"]["PRJ_ORIGINAL_SOURCE"] = "PRJ元のソース";
	$fieldToolTipsBPMN_PROJECT["English"]["PRJ_ORIGINAL_SOURCE"] = "";
	$placeHoldersBPMN_PROJECT["English"]["PRJ_ORIGINAL_SOURCE"] = "";
	if (count($fieldToolTipsBPMN_PROJECT["English"]))
		$tdataBPMN_PROJECT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_PROJECT[""] = array();
	$fieldToolTipsBPMN_PROJECT[""] = array();
	$placeHoldersBPMN_PROJECT[""] = array();
	$pageTitlesBPMN_PROJECT[""] = array();
	if (count($fieldToolTipsBPMN_PROJECT[""]))
		$tdataBPMN_PROJECT[".isUseToolTips"] = true;
}


	$tdataBPMN_PROJECT[".NCSearch"] = true;



$tdataBPMN_PROJECT[".shortTableName"] = "BPMN_PROJECT";
$tdataBPMN_PROJECT[".nSecOptions"] = 0;
$tdataBPMN_PROJECT[".recsPerRowPrint"] = 1;
$tdataBPMN_PROJECT[".mainTableOwnerID"] = "";
$tdataBPMN_PROJECT[".moveNext"] = 0;
$tdataBPMN_PROJECT[".entityType"] = 0;

$tdataBPMN_PROJECT[".strOriginalTableName"] = "BPMN_PROJECT";

	



$tdataBPMN_PROJECT[".showAddInPopup"] = false;

$tdataBPMN_PROJECT[".showEditInPopup"] = false;

$tdataBPMN_PROJECT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_PROJECT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_PROJECT[".fieldsForRegister"] = array();
	
$tdataBPMN_PROJECT[".listAjax"] = false;

	$tdataBPMN_PROJECT[".audit"] = true;

	$tdataBPMN_PROJECT[".locking"] = false;

$tdataBPMN_PROJECT[".edit"] = true;
$tdataBPMN_PROJECT[".afterEditAction"] = 1;
$tdataBPMN_PROJECT[".closePopupAfterEdit"] = 1;
$tdataBPMN_PROJECT[".afterEditActionDetTable"] = "";

$tdataBPMN_PROJECT[".add"] = true;
$tdataBPMN_PROJECT[".afterAddAction"] = 1;
$tdataBPMN_PROJECT[".closePopupAfterAdd"] = 1;
$tdataBPMN_PROJECT[".afterAddActionDetTable"] = "";

$tdataBPMN_PROJECT[".list"] = true;

$tdataBPMN_PROJECT[".inlineEdit"] = true;


$tdataBPMN_PROJECT[".reorderRecordsByHeader"] = true;
$tdataBPMN_PROJECT[".createSortByDropdown"] = true;
$tdataBPMN_PROJECT[".strSortControlSettingsJSON"] = "";



$tdataBPMN_PROJECT[".inlineAdd"] = true;
$tdataBPMN_PROJECT[".view"] = true;

$tdataBPMN_PROJECT[".import"] = true;

$tdataBPMN_PROJECT[".exportTo"] = true;

$tdataBPMN_PROJECT[".printFriendly"] = true;

$tdataBPMN_PROJECT[".delete"] = true;

$tdataBPMN_PROJECT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_PROJECT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_PROJECT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_PROJECT[".searchSaving"] = false;
//

$tdataBPMN_PROJECT[".showSearchPanel"] = true;
		$tdataBPMN_PROJECT[".flexibleSearch"] = true;

$tdataBPMN_PROJECT[".isUseAjaxSuggest"] = true;

$tdataBPMN_PROJECT[".rowHighlite"] = true;



				

$tdataBPMN_PROJECT[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_PROJECT[".buttonsAdded"] = false;

$tdataBPMN_PROJECT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_PROJECT[".isUseTimeForSearch"] = false;





$tdataBPMN_PROJECT[".allSearchFields"] = array();
$tdataBPMN_PROJECT[".filterFields"] = array();
$tdataBPMN_PROJECT[".requiredSearchFields"] = array();

$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_NAME";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_DESCRIPTION";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_TARGET_NAMESPACE";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_EXPRESION_LANGUAGE";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_TYPE_LANGUAGE";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_EXPORTER";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_EXPORTER_VERSION";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_CREATE_DATE";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_UPDATE_DATE";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_AUTHOR";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_AUTHOR_VERSION";
	$tdataBPMN_PROJECT[".allSearchFields"][] = "PRJ_ORIGINAL_SOURCE";
	

$tdataBPMN_PROJECT[".googleLikeFields"] = array();
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".googleLikeFields"][] = "PRJ_ORIGINAL_SOURCE";


$tdataBPMN_PROJECT[".advSearchFields"] = array();
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".advSearchFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".tableType"] = "list";

$tdataBPMN_PROJECT[".printerPageOrientation"] = 0;
$tdataBPMN_PROJECT[".nPrinterPageScale"] = 100;

$tdataBPMN_PROJECT[".nPrinterSplitRecords"] = 40;

$tdataBPMN_PROJECT[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_PROJECT[".geocodingEnabled"] = false;





$tdataBPMN_PROJECT[".listGridLayout"] = 3;


$tdataBPMN_PROJECT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_PROJECT[".pageSize"] = 20;

$tdataBPMN_PROJECT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_PROJECT[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_PROJECT[".orderindexes"] = array();

$tdataBPMN_PROJECT[".sqlHead"] = "SELECT PRJ_UID,  	PRJ_NAME,  	PRJ_DESCRIPTION,  	PRJ_TARGET_NAMESPACE,  	PRJ_EXPRESION_LANGUAGE,  	PRJ_TYPE_LANGUAGE,  	PRJ_EXPORTER,  	PRJ_EXPORTER_VERSION,  	PRJ_CREATE_DATE,  	PRJ_UPDATE_DATE,  	PRJ_AUTHOR,  	PRJ_AUTHOR_VERSION,  	PRJ_ORIGINAL_SOURCE";
$tdataBPMN_PROJECT[".sqlFrom"] = "FROM BPMN_PROJECT";
$tdataBPMN_PROJECT[".sqlWhereExpr"] = "";
$tdataBPMN_PROJECT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_PROJECT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_PROJECT[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_PROJECT[".highlightSearchResults"] = true;

$tableKeysBPMN_PROJECT = array();
$tableKeysBPMN_PROJECT[] = "PRJ_UID";
$tdataBPMN_PROJECT[".Keys"] = $tableKeysBPMN_PROJECT;

$tdataBPMN_PROJECT[".listFields"] = array();
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".listFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".hideMobileList"] = array();


$tdataBPMN_PROJECT[".viewFields"] = array();
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".viewFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".addFields"] = array();
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".addFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".masterListFields"] = array();
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".masterListFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".inlineAddFields"] = array();
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".inlineAddFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".editFields"] = array();
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".editFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".inlineEditFields"] = array();
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".inlineEditFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".updateSelectedFields"] = array();
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".updateSelectedFields"][] = "PRJ_ORIGINAL_SOURCE";


$tdataBPMN_PROJECT[".exportFields"] = array();
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".exportFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".importFields"] = array();
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".importFields"][] = "PRJ_ORIGINAL_SOURCE";

$tdataBPMN_PROJECT[".printFields"] = array();
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_UID";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_NAME";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_DESCRIPTION";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_TARGET_NAMESPACE";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_EXPRESION_LANGUAGE";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_TYPE_LANGUAGE";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_EXPORTER";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_EXPORTER_VERSION";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_CREATE_DATE";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_UPDATE_DATE";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_AUTHOR";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_AUTHOR_VERSION";
$tdataBPMN_PROJECT[".printFields"][] = "PRJ_ORIGINAL_SOURCE";

//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_UID");
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




	$tdataBPMN_PROJECT["PRJ_UID"] = $fdata;
//	PRJ_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_NAME";
	$fdata["GoodName"] = "PRJ_NAME";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_NAME");
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

		$fdata["strField"] = "PRJ_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_NAME";

	
	
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




	$tdataBPMN_PROJECT["PRJ_NAME"] = $fdata;
//	PRJ_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRJ_DESCRIPTION";
	$fdata["GoodName"] = "PRJ_DESCRIPTION";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_DESCRIPTION");
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

		$fdata["strField"] = "PRJ_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_DESCRIPTION";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PROJECT["PRJ_DESCRIPTION"] = $fdata;
//	PRJ_TARGET_NAMESPACE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRJ_TARGET_NAMESPACE";
	$fdata["GoodName"] = "PRJ_TARGET_NAMESPACE";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_TARGET_NAMESPACE");
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

		$fdata["strField"] = "PRJ_TARGET_NAMESPACE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_TARGET_NAMESPACE";

	
	
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




	$tdataBPMN_PROJECT["PRJ_TARGET_NAMESPACE"] = $fdata;
//	PRJ_EXPRESION_LANGUAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRJ_EXPRESION_LANGUAGE";
	$fdata["GoodName"] = "PRJ_EXPRESION_LANGUAGE";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_EXPRESION_LANGUAGE");
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

		$fdata["strField"] = "PRJ_EXPRESION_LANGUAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_EXPRESION_LANGUAGE";

	
	
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




	$tdataBPMN_PROJECT["PRJ_EXPRESION_LANGUAGE"] = $fdata;
//	PRJ_TYPE_LANGUAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRJ_TYPE_LANGUAGE";
	$fdata["GoodName"] = "PRJ_TYPE_LANGUAGE";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_TYPE_LANGUAGE");
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

		$fdata["strField"] = "PRJ_TYPE_LANGUAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_TYPE_LANGUAGE";

	
	
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




	$tdataBPMN_PROJECT["PRJ_TYPE_LANGUAGE"] = $fdata;
//	PRJ_EXPORTER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRJ_EXPORTER";
	$fdata["GoodName"] = "PRJ_EXPORTER";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_EXPORTER");
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

		$fdata["strField"] = "PRJ_EXPORTER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_EXPORTER";

	
	
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




	$tdataBPMN_PROJECT["PRJ_EXPORTER"] = $fdata;
//	PRJ_EXPORTER_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRJ_EXPORTER_VERSION";
	$fdata["GoodName"] = "PRJ_EXPORTER_VERSION";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_EXPORTER_VERSION");
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

		$fdata["strField"] = "PRJ_EXPORTER_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_EXPORTER_VERSION";

	
	
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




	$tdataBPMN_PROJECT["PRJ_EXPORTER_VERSION"] = $fdata;
//	PRJ_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRJ_CREATE_DATE";
	$fdata["GoodName"] = "PRJ_CREATE_DATE";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_CREATE_DATE");
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

		$fdata["strField"] = "PRJ_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_CREATE_DATE";

	
	
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




	$tdataBPMN_PROJECT["PRJ_CREATE_DATE"] = $fdata;
//	PRJ_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PRJ_UPDATE_DATE";
	$fdata["GoodName"] = "PRJ_UPDATE_DATE";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_UPDATE_DATE");
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

		$fdata["strField"] = "PRJ_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UPDATE_DATE";

	
	
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




	$tdataBPMN_PROJECT["PRJ_UPDATE_DATE"] = $fdata;
//	PRJ_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PRJ_AUTHOR";
	$fdata["GoodName"] = "PRJ_AUTHOR";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_AUTHOR");
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

		$fdata["strField"] = "PRJ_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_AUTHOR";

	
	
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




	$tdataBPMN_PROJECT["PRJ_AUTHOR"] = $fdata;
//	PRJ_AUTHOR_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PRJ_AUTHOR_VERSION";
	$fdata["GoodName"] = "PRJ_AUTHOR_VERSION";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_AUTHOR_VERSION");
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

		$fdata["strField"] = "PRJ_AUTHOR_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_AUTHOR_VERSION";

	
	
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




	$tdataBPMN_PROJECT["PRJ_AUTHOR_VERSION"] = $fdata;
//	PRJ_ORIGINAL_SOURCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PRJ_ORIGINAL_SOURCE";
	$fdata["GoodName"] = "PRJ_ORIGINAL_SOURCE";
	$fdata["ownerTable"] = "BPMN_PROJECT";
	$fdata["Label"] = GetFieldLabel("BPMN_PROJECT","PRJ_ORIGINAL_SOURCE");
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

		$fdata["strField"] = "PRJ_ORIGINAL_SOURCE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_ORIGINAL_SOURCE";

	
	
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




	$tdataBPMN_PROJECT["PRJ_ORIGINAL_SOURCE"] = $fdata;


$tables_data["BPMN_PROJECT"]=&$tdataBPMN_PROJECT;
$field_labels["BPMN_PROJECT"] = &$fieldLabelsBPMN_PROJECT;
$fieldToolTips["BPMN_PROJECT"] = &$fieldToolTipsBPMN_PROJECT;
$placeHolders["BPMN_PROJECT"] = &$placeHoldersBPMN_PROJECT;
$page_titles["BPMN_PROJECT"] = &$pageTitlesBPMN_PROJECT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_PROJECT"] = array();
//	BPMN_PROCESS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_PROCESS";
		$detailsParam["dOriginalTable"] = "BPMN_PROCESS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_PROCESS";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_PROCESS");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_PARTICIPANT
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_PARTICIPANT";
		$detailsParam["dOriginalTable"] = "BPMN_PARTICIPANT";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_PARTICIPANT";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_PARTICIPANT");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_LANESET
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_LANESET";
		$detailsParam["dOriginalTable"] = "BPMN_LANESET";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_LANESET";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_LANESET");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_LANE
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_LANE";
		$detailsParam["dOriginalTable"] = "BPMN_LANE";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_LANE";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_LANE");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_GATEWAY
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_GATEWAY";
		$detailsParam["dOriginalTable"] = "BPMN_GATEWAY";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_GATEWAY";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_GATEWAY");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_FLOW
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_FLOW";
		$detailsParam["dOriginalTable"] = "BPMN_FLOW";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_FLOW";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_FLOW");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_EXTENSION
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_EXTENSION";
		$detailsParam["dOriginalTable"] = "BPMN_EXTENSION";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_EXTENSION";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_EXTENSION");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_EVENT
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_EVENT";
		$detailsParam["dOriginalTable"] = "BPMN_EVENT";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_EVENT";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_EVENT");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_DOCUMENTATION
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_DOCUMENTATION";
		$detailsParam["dOriginalTable"] = "BPMN_DOCUMENTATION";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_DOCUMENTATION";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_DOCUMENTATION");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_DIAGRAM
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_DIAGRAM";
		$detailsParam["dOriginalTable"] = "BPMN_DIAGRAM";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_DIAGRAM";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_DIAGRAM");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_DATA
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_DATA";
		$detailsParam["dOriginalTable"] = "BPMN_DATA";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_DATA";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_DATA");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_BOUND
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_BOUND";
		$detailsParam["dOriginalTable"] = "BPMN_BOUND";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_BOUND";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_BOUND");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_ACTIVITY
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_ACTIVITY";
		$detailsParam["dOriginalTable"] = "BPMN_ACTIVITY";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_ACTIVITY";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_ACTIVITY");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";
//	BPMN_ARTIFACT
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_ARTIFACT";
		$detailsParam["dOriginalTable"] = "BPMN_ARTIFACT";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_ARTIFACT";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_ARTIFACT");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROJECT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["masterKeys"][]="PRJ_UID";

				$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROJECT"][$dIndex]["detailKeys"][]="PRJ_UID";

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_PROJECT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_PROJECT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRJ_UID,  	PRJ_NAME,  	PRJ_DESCRIPTION,  	PRJ_TARGET_NAMESPACE,  	PRJ_EXPRESION_LANGUAGE,  	PRJ_TYPE_LANGUAGE,  	PRJ_EXPORTER,  	PRJ_EXPORTER_VERSION,  	PRJ_CREATE_DATE,  	PRJ_UPDATE_DATE,  	PRJ_AUTHOR,  	PRJ_AUTHOR_VERSION,  	PRJ_ORIGINAL_SOURCE";
$proto0["m_strFrom"] = "FROM BPMN_PROJECT";
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
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto6["m_sql"] = "PRJ_UID";
$proto6["m_srcTableName"] = "BPMN_PROJECT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_NAME",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto8["m_sql"] = "PRJ_NAME";
$proto8["m_srcTableName"] = "BPMN_PROJECT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_DESCRIPTION",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto10["m_sql"] = "PRJ_DESCRIPTION";
$proto10["m_srcTableName"] = "BPMN_PROJECT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_TARGET_NAMESPACE",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto12["m_sql"] = "PRJ_TARGET_NAMESPACE";
$proto12["m_srcTableName"] = "BPMN_PROJECT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_EXPRESION_LANGUAGE",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto14["m_sql"] = "PRJ_EXPRESION_LANGUAGE";
$proto14["m_srcTableName"] = "BPMN_PROJECT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_TYPE_LANGUAGE",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto16["m_sql"] = "PRJ_TYPE_LANGUAGE";
$proto16["m_srcTableName"] = "BPMN_PROJECT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_EXPORTER",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto18["m_sql"] = "PRJ_EXPORTER";
$proto18["m_srcTableName"] = "BPMN_PROJECT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_EXPORTER_VERSION",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto20["m_sql"] = "PRJ_EXPORTER_VERSION";
$proto20["m_srcTableName"] = "BPMN_PROJECT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_CREATE_DATE",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto22["m_sql"] = "PRJ_CREATE_DATE";
$proto22["m_srcTableName"] = "BPMN_PROJECT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UPDATE_DATE",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto24["m_sql"] = "PRJ_UPDATE_DATE";
$proto24["m_srcTableName"] = "BPMN_PROJECT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_AUTHOR",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto26["m_sql"] = "PRJ_AUTHOR";
$proto26["m_srcTableName"] = "BPMN_PROJECT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_AUTHOR_VERSION",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto28["m_sql"] = "PRJ_AUTHOR_VERSION";
$proto28["m_srcTableName"] = "BPMN_PROJECT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_ORIGINAL_SOURCE",
	"m_strTable" => "BPMN_PROJECT",
	"m_srcTableName" => "BPMN_PROJECT"
));

$proto30["m_sql"] = "PRJ_ORIGINAL_SOURCE";
$proto30["m_srcTableName"] = "BPMN_PROJECT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "BPMN_PROJECT";
$proto33["m_srcTableName"] = "BPMN_PROJECT";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "PRJ_UID";
$proto33["m_columns"][] = "PRJ_NAME";
$proto33["m_columns"][] = "PRJ_DESCRIPTION";
$proto33["m_columns"][] = "PRJ_TARGET_NAMESPACE";
$proto33["m_columns"][] = "PRJ_EXPRESION_LANGUAGE";
$proto33["m_columns"][] = "PRJ_TYPE_LANGUAGE";
$proto33["m_columns"][] = "PRJ_EXPORTER";
$proto33["m_columns"][] = "PRJ_EXPORTER_VERSION";
$proto33["m_columns"][] = "PRJ_CREATE_DATE";
$proto33["m_columns"][] = "PRJ_UPDATE_DATE";
$proto33["m_columns"][] = "PRJ_AUTHOR";
$proto33["m_columns"][] = "PRJ_AUTHOR_VERSION";
$proto33["m_columns"][] = "PRJ_ORIGINAL_SOURCE";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "BPMN_PROJECT";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "BPMN_PROJECT";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BPMN_PROJECT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_PROJECT = createSqlQuery_BPMN_PROJECT();


	
						;

													

$tdataBPMN_PROJECT[".sqlquery"] = $queryData_BPMN_PROJECT;

$tableEvents["BPMN_PROJECT"] = new eventsBase;
$tdataBPMN_PROJECT[".hasEvents"] = false;

?>
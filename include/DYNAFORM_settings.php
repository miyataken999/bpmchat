<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDYNAFORM = array();
	$tdataDYNAFORM[".truncateText"] = true;
	$tdataDYNAFORM[".NumberOfChars"] = 20;
	$tdataDYNAFORM[".ShortName"] = "DYNAFORM";
	$tdataDYNAFORM[".OwnerID"] = "";
	$tdataDYNAFORM[".OriginalTable"] = "DYNAFORM";

//	field labels
$fieldLabelsDYNAFORM = array();
$fieldToolTipsDYNAFORM = array();
$pageTitlesDYNAFORM = array();
$placeHoldersDYNAFORM = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDYNAFORM["Japanese"] = array();
	$fieldToolTipsDYNAFORM["Japanese"] = array();
	$placeHoldersDYNAFORM["Japanese"] = array();
	$pageTitlesDYNAFORM["Japanese"] = array();
	$fieldLabelsDYNAFORM["Japanese"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_UID"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_UID"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsDYNAFORM["Japanese"]["PRO_UID"] = "";
	$placeHoldersDYNAFORM["Japanese"]["PRO_UID"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_TYPE"] = "DYNタイプ";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_TYPE"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_TYPE"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_FILENAME"] = "DYNファイル名";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_FILENAME"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_FILENAME"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_CONTENT"] = "DYNコンテンツ";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_CONTENT"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_CONTENT"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_LABEL"] = "DYNラベル";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_LABEL"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_LABEL"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_VERSION"] = "DYNバージョン";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_VERSION"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_VERSION"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_UPDATE_DATE"] = "DYNの更新日";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_UPDATE_DATE"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_UPDATE_DATE"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_TITLE"] = "DYN TITLE";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_TITLE"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_TITLE"] = "";
	$fieldLabelsDYNAFORM["Japanese"]["DYN_DESCRIPTION"] = "DYN DESCRIPTION";
	$fieldToolTipsDYNAFORM["Japanese"]["DYN_DESCRIPTION"] = "";
	$placeHoldersDYNAFORM["Japanese"]["DYN_DESCRIPTION"] = "";
	if (count($fieldToolTipsDYNAFORM["Japanese"]))
		$tdataDYNAFORM[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDYNAFORM["English"] = array();
	$fieldToolTipsDYNAFORM["English"] = array();
	$placeHoldersDYNAFORM["English"] = array();
	$pageTitlesDYNAFORM["English"] = array();
	$fieldLabelsDYNAFORM["English"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsDYNAFORM["English"]["DYN_UID"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_UID"] = "";
	$fieldLabelsDYNAFORM["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsDYNAFORM["English"]["PRO_UID"] = "";
	$placeHoldersDYNAFORM["English"]["PRO_UID"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_TYPE"] = "DYNタイプ";
	$fieldToolTipsDYNAFORM["English"]["DYN_TYPE"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_TYPE"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_FILENAME"] = "DYNファイル名";
	$fieldToolTipsDYNAFORM["English"]["DYN_FILENAME"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_FILENAME"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_CONTENT"] = "DYNコンテンツ";
	$fieldToolTipsDYNAFORM["English"]["DYN_CONTENT"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_CONTENT"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_LABEL"] = "DYNラベル";
	$fieldToolTipsDYNAFORM["English"]["DYN_LABEL"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_LABEL"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_VERSION"] = "DYNバージョン";
	$fieldToolTipsDYNAFORM["English"]["DYN_VERSION"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_VERSION"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_UPDATE_DATE"] = "DYNの更新日";
	$fieldToolTipsDYNAFORM["English"]["DYN_UPDATE_DATE"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_UPDATE_DATE"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_TITLE"] = "DYN TITLE";
	$fieldToolTipsDYNAFORM["English"]["DYN_TITLE"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_TITLE"] = "";
	$fieldLabelsDYNAFORM["English"]["DYN_DESCRIPTION"] = "DYN DESCRIPTION";
	$fieldToolTipsDYNAFORM["English"]["DYN_DESCRIPTION"] = "";
	$placeHoldersDYNAFORM["English"]["DYN_DESCRIPTION"] = "";
	if (count($fieldToolTipsDYNAFORM["English"]))
		$tdataDYNAFORM[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDYNAFORM[""] = array();
	$fieldToolTipsDYNAFORM[""] = array();
	$placeHoldersDYNAFORM[""] = array();
	$pageTitlesDYNAFORM[""] = array();
	if (count($fieldToolTipsDYNAFORM[""]))
		$tdataDYNAFORM[".isUseToolTips"] = true;
}


	$tdataDYNAFORM[".NCSearch"] = true;



$tdataDYNAFORM[".shortTableName"] = "DYNAFORM";
$tdataDYNAFORM[".nSecOptions"] = 0;
$tdataDYNAFORM[".recsPerRowPrint"] = 1;
$tdataDYNAFORM[".mainTableOwnerID"] = "";
$tdataDYNAFORM[".moveNext"] = 0;
$tdataDYNAFORM[".entityType"] = 0;

$tdataDYNAFORM[".strOriginalTableName"] = "DYNAFORM";

	



$tdataDYNAFORM[".showAddInPopup"] = false;

$tdataDYNAFORM[".showEditInPopup"] = false;

$tdataDYNAFORM[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDYNAFORM[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDYNAFORM[".fieldsForRegister"] = array();
	
$tdataDYNAFORM[".listAjax"] = false;

	$tdataDYNAFORM[".audit"] = true;

	$tdataDYNAFORM[".locking"] = false;

$tdataDYNAFORM[".edit"] = true;
$tdataDYNAFORM[".afterEditAction"] = 1;
$tdataDYNAFORM[".closePopupAfterEdit"] = 1;
$tdataDYNAFORM[".afterEditActionDetTable"] = "";

$tdataDYNAFORM[".add"] = true;
$tdataDYNAFORM[".afterAddAction"] = 1;
$tdataDYNAFORM[".closePopupAfterAdd"] = 1;
$tdataDYNAFORM[".afterAddActionDetTable"] = "";

$tdataDYNAFORM[".list"] = true;

$tdataDYNAFORM[".inlineEdit"] = true;


$tdataDYNAFORM[".reorderRecordsByHeader"] = true;
$tdataDYNAFORM[".createSortByDropdown"] = true;
$tdataDYNAFORM[".strSortControlSettingsJSON"] = "";



$tdataDYNAFORM[".inlineAdd"] = true;
$tdataDYNAFORM[".view"] = true;

$tdataDYNAFORM[".import"] = true;

$tdataDYNAFORM[".exportTo"] = true;

$tdataDYNAFORM[".printFriendly"] = true;

$tdataDYNAFORM[".delete"] = true;

$tdataDYNAFORM[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataDYNAFORM[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataDYNAFORM[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataDYNAFORM[".searchSaving"] = false;
//

$tdataDYNAFORM[".showSearchPanel"] = true;
		$tdataDYNAFORM[".flexibleSearch"] = true;

$tdataDYNAFORM[".isUseAjaxSuggest"] = true;

$tdataDYNAFORM[".rowHighlite"] = true;



																

$tdataDYNAFORM[".ajaxCodeSnippetAdded"] = false;

$tdataDYNAFORM[".buttonsAdded"] = false;

$tdataDYNAFORM[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDYNAFORM[".isUseTimeForSearch"] = false;



$tdataDYNAFORM[".badgeColor"] = "6da5c8";


$tdataDYNAFORM[".allSearchFields"] = array();
$tdataDYNAFORM[".filterFields"] = array();
$tdataDYNAFORM[".requiredSearchFields"] = array();

$tdataDYNAFORM[".allSearchFields"][] = "DYN_UID";
	$tdataDYNAFORM[".allSearchFields"][] = "PRO_UID";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_TYPE";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_FILENAME";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_CONTENT";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_LABEL";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_VERSION";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_UPDATE_DATE";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_TITLE";
	$tdataDYNAFORM[".allSearchFields"][] = "DYN_DESCRIPTION";
	

$tdataDYNAFORM[".googleLikeFields"] = array();
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_UID";
$tdataDYNAFORM[".googleLikeFields"][] = "PRO_UID";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".googleLikeFields"][] = "DYN_DESCRIPTION";


$tdataDYNAFORM[".advSearchFields"] = array();
$tdataDYNAFORM[".advSearchFields"][] = "DYN_UID";
$tdataDYNAFORM[".advSearchFields"][] = "PRO_UID";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".advSearchFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".tableType"] = "list";

$tdataDYNAFORM[".printerPageOrientation"] = 0;
$tdataDYNAFORM[".nPrinterPageScale"] = 100;

$tdataDYNAFORM[".nPrinterSplitRecords"] = 40;

$tdataDYNAFORM[".nPrinterPDFSplitRecords"] = 40;



$tdataDYNAFORM[".geocodingEnabled"] = false;





$tdataDYNAFORM[".listGridLayout"] = 3;


$tdataDYNAFORM[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataDYNAFORM[".pageSize"] = 20;

$tdataDYNAFORM[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDYNAFORM[".strOrderBy"] = $tstrOrderBy;

$tdataDYNAFORM[".orderindexes"] = array();

$tdataDYNAFORM[".sqlHead"] = "SELECT DYN_UID,  	PRO_UID,  	DYN_TYPE,  	DYN_FILENAME,  	DYN_CONTENT,  	DYN_LABEL,  	DYN_VERSION,  	DYN_UPDATE_DATE,  	DYN_TITLE,  	DYN_DESCRIPTION";
$tdataDYNAFORM[".sqlFrom"] = "FROM DYNAFORM";
$tdataDYNAFORM[".sqlWhereExpr"] = "";
$tdataDYNAFORM[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDYNAFORM[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDYNAFORM[".arrGroupsPerPage"] = $arrGPP;

$tdataDYNAFORM[".highlightSearchResults"] = true;

$tableKeysDYNAFORM = array();
$tableKeysDYNAFORM[] = "DYN_UID";
$tdataDYNAFORM[".Keys"] = $tableKeysDYNAFORM;

$tdataDYNAFORM[".listFields"] = array();
$tdataDYNAFORM[".listFields"][] = "DYN_UID";
$tdataDYNAFORM[".listFields"][] = "PRO_UID";
$tdataDYNAFORM[".listFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".listFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".listFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".listFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".listFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".listFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".listFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".listFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".hideMobileList"] = array();


$tdataDYNAFORM[".viewFields"] = array();
$tdataDYNAFORM[".viewFields"][] = "DYN_UID";
$tdataDYNAFORM[".viewFields"][] = "PRO_UID";
$tdataDYNAFORM[".viewFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".viewFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".viewFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".viewFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".viewFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".viewFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".viewFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".viewFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".addFields"] = array();
$tdataDYNAFORM[".addFields"][] = "DYN_UID";
$tdataDYNAFORM[".addFields"][] = "PRO_UID";
$tdataDYNAFORM[".addFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".addFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".addFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".addFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".addFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".addFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".addFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".addFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".masterListFields"] = array();
$tdataDYNAFORM[".masterListFields"][] = "DYN_UID";
$tdataDYNAFORM[".masterListFields"][] = "PRO_UID";
$tdataDYNAFORM[".masterListFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".masterListFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".masterListFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".masterListFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".masterListFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".masterListFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".masterListFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".masterListFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".inlineAddFields"] = array();
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_UID";
$tdataDYNAFORM[".inlineAddFields"][] = "PRO_UID";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".inlineAddFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".editFields"] = array();
$tdataDYNAFORM[".editFields"][] = "DYN_UID";
$tdataDYNAFORM[".editFields"][] = "PRO_UID";
$tdataDYNAFORM[".editFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".editFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".editFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".editFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".editFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".editFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".editFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".editFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".inlineEditFields"] = array();
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_UID";
$tdataDYNAFORM[".inlineEditFields"][] = "PRO_UID";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".inlineEditFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".updateSelectedFields"] = array();
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_UID";
$tdataDYNAFORM[".updateSelectedFields"][] = "PRO_UID";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".updateSelectedFields"][] = "DYN_DESCRIPTION";


$tdataDYNAFORM[".exportFields"] = array();
$tdataDYNAFORM[".exportFields"][] = "DYN_UID";
$tdataDYNAFORM[".exportFields"][] = "PRO_UID";
$tdataDYNAFORM[".exportFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".exportFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".exportFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".exportFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".exportFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".exportFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".exportFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".exportFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".importFields"] = array();
$tdataDYNAFORM[".importFields"][] = "DYN_UID";
$tdataDYNAFORM[".importFields"][] = "PRO_UID";
$tdataDYNAFORM[".importFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".importFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".importFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".importFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".importFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".importFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".importFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".importFields"][] = "DYN_DESCRIPTION";

$tdataDYNAFORM[".printFields"] = array();
$tdataDYNAFORM[".printFields"][] = "DYN_UID";
$tdataDYNAFORM[".printFields"][] = "PRO_UID";
$tdataDYNAFORM[".printFields"][] = "DYN_TYPE";
$tdataDYNAFORM[".printFields"][] = "DYN_FILENAME";
$tdataDYNAFORM[".printFields"][] = "DYN_CONTENT";
$tdataDYNAFORM[".printFields"][] = "DYN_LABEL";
$tdataDYNAFORM[".printFields"][] = "DYN_VERSION";
$tdataDYNAFORM[".printFields"][] = "DYN_UPDATE_DATE";
$tdataDYNAFORM[".printFields"][] = "DYN_TITLE";
$tdataDYNAFORM[".printFields"][] = "DYN_DESCRIPTION";

//	DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DYN_UID";
	$fdata["GoodName"] = "DYN_UID";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_UID");
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

		$fdata["strField"] = "DYN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_UID";

	
	
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




	$tdataDYNAFORM["DYN_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","PRO_UID");
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




	$tdataDYNAFORM["PRO_UID"] = $fdata;
//	DYN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DYN_TYPE";
	$fdata["GoodName"] = "DYN_TYPE";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_TYPE");
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

		$fdata["strField"] = "DYN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_TYPE";

	
	
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




	$tdataDYNAFORM["DYN_TYPE"] = $fdata;
//	DYN_FILENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DYN_FILENAME";
	$fdata["GoodName"] = "DYN_FILENAME";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_FILENAME");
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

		$fdata["strField"] = "DYN_FILENAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_FILENAME";

	
	
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




	$tdataDYNAFORM["DYN_FILENAME"] = $fdata;
//	DYN_CONTENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DYN_CONTENT";
	$fdata["GoodName"] = "DYN_CONTENT";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_CONTENT");
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

		$fdata["strField"] = "DYN_CONTENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_CONTENT";

	
	
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




	$tdataDYNAFORM["DYN_CONTENT"] = $fdata;
//	DYN_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DYN_LABEL";
	$fdata["GoodName"] = "DYN_LABEL";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_LABEL");
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

		$fdata["strField"] = "DYN_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_LABEL";

	
	
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




	$tdataDYNAFORM["DYN_LABEL"] = $fdata;
//	DYN_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DYN_VERSION";
	$fdata["GoodName"] = "DYN_VERSION";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_VERSION");
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

		$fdata["strField"] = "DYN_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_VERSION";

	
	
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




	$tdataDYNAFORM["DYN_VERSION"] = $fdata;
//	DYN_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DYN_UPDATE_DATE";
	$fdata["GoodName"] = "DYN_UPDATE_DATE";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_UPDATE_DATE");
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

		$fdata["strField"] = "DYN_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_UPDATE_DATE";

	
	
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




	$tdataDYNAFORM["DYN_UPDATE_DATE"] = $fdata;
//	DYN_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DYN_TITLE";
	$fdata["GoodName"] = "DYN_TITLE";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_TITLE");
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

		$fdata["strField"] = "DYN_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_TITLE";

	
	
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




	$tdataDYNAFORM["DYN_TITLE"] = $fdata;
//	DYN_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DYN_DESCRIPTION";
	$fdata["GoodName"] = "DYN_DESCRIPTION";
	$fdata["ownerTable"] = "DYNAFORM";
	$fdata["Label"] = GetFieldLabel("DYNAFORM","DYN_DESCRIPTION");
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

		$fdata["strField"] = "DYN_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_DESCRIPTION";

	
	
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




	$tdataDYNAFORM["DYN_DESCRIPTION"] = $fdata;


$tables_data["DYNAFORM"]=&$tdataDYNAFORM;
$field_labels["DYNAFORM"] = &$fieldLabelsDYNAFORM;
$fieldToolTips["DYNAFORM"] = &$fieldToolTipsDYNAFORM;
$placeHolders["DYNAFORM"] = &$placeHoldersDYNAFORM;
$page_titles["DYNAFORM"] = &$pageTitlesDYNAFORM;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DYNAFORM"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DYNAFORM"] = array();


	
				$strOriginalDetailsTable="PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["DYNAFORM"][0] = $masterParams;
				$masterTablesData["DYNAFORM"][0]["masterKeys"] = array();
	$masterTablesData["DYNAFORM"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["DYNAFORM"][0]["detailKeys"] = array();
	$masterTablesData["DYNAFORM"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DYNAFORM()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DYN_UID,  	PRO_UID,  	DYN_TYPE,  	DYN_FILENAME,  	DYN_CONTENT,  	DYN_LABEL,  	DYN_VERSION,  	DYN_UPDATE_DATE,  	DYN_TITLE,  	DYN_DESCRIPTION";
$proto0["m_strFrom"] = "FROM DYNAFORM";
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
	"m_strName" => "DYN_UID",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto6["m_sql"] = "DYN_UID";
$proto6["m_srcTableName"] = "DYNAFORM";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "DYNAFORM";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_TYPE",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto10["m_sql"] = "DYN_TYPE";
$proto10["m_srcTableName"] = "DYNAFORM";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_FILENAME",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto12["m_sql"] = "DYN_FILENAME";
$proto12["m_srcTableName"] = "DYNAFORM";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_CONTENT",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto14["m_sql"] = "DYN_CONTENT";
$proto14["m_srcTableName"] = "DYNAFORM";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_LABEL",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto16["m_sql"] = "DYN_LABEL";
$proto16["m_srcTableName"] = "DYNAFORM";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_VERSION",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto18["m_sql"] = "DYN_VERSION";
$proto18["m_srcTableName"] = "DYNAFORM";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_UPDATE_DATE",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto20["m_sql"] = "DYN_UPDATE_DATE";
$proto20["m_srcTableName"] = "DYNAFORM";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_TITLE",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto22["m_sql"] = "DYN_TITLE";
$proto22["m_srcTableName"] = "DYNAFORM";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_DESCRIPTION",
	"m_strTable" => "DYNAFORM",
	"m_srcTableName" => "DYNAFORM"
));

$proto24["m_sql"] = "DYN_DESCRIPTION";
$proto24["m_srcTableName"] = "DYNAFORM";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "DYNAFORM";
$proto27["m_srcTableName"] = "DYNAFORM";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "DYN_UID";
$proto27["m_columns"][] = "PRO_UID";
$proto27["m_columns"][] = "DYN_TYPE";
$proto27["m_columns"][] = "DYN_FILENAME";
$proto27["m_columns"][] = "DYN_CONTENT";
$proto27["m_columns"][] = "DYN_LABEL";
$proto27["m_columns"][] = "DYN_VERSION";
$proto27["m_columns"][] = "DYN_UPDATE_DATE";
$proto27["m_columns"][] = "DYN_TITLE";
$proto27["m_columns"][] = "DYN_DESCRIPTION";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "DYNAFORM";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "DYNAFORM";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DYNAFORM";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DYNAFORM = createSqlQuery_DYNAFORM();


	
						;

										

$tdataDYNAFORM[".sqlquery"] = $queryData_DYNAFORM;

$tableEvents["DYNAFORM"] = new eventsBase;
$tdataDYNAFORM[".hasEvents"] = false;

?>
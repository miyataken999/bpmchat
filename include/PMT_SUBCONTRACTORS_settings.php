<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_SUBCONTRACTORS = array();
	$tdataPMT_SUBCONTRACTORS[".truncateText"] = true;
	$tdataPMT_SUBCONTRACTORS[".NumberOfChars"] = 80;
	$tdataPMT_SUBCONTRACTORS[".ShortName"] = "PMT_SUBCONTRACTORS";
	$tdataPMT_SUBCONTRACTORS[".OwnerID"] = "";
	$tdataPMT_SUBCONTRACTORS[".OriginalTable"] = "PMT_SUBCONTRACTORS";

//	field labels
$fieldLabelsPMT_SUBCONTRACTORS = array();
$fieldToolTipsPMT_SUBCONTRACTORS = array();
$pageTitlesPMT_SUBCONTRACTORS = array();
$placeHoldersPMT_SUBCONTRACTORS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"] = array();
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"] = array();
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"] = array();
	$pageTitlesPMT_SUBCONTRACTORS["Japanese"] = array();
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["ROW"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["HASCONTRACT"] = "HASCONTRACT";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["HASCONTRACT"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["HASCONTRACT"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["NAME"] = "NAME";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["NAME"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["NAME"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000001"] = "TEXT0000000001";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000001"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000001"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000002"] = "TEXT0000000002";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000002"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000002"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000003"] = "TEXT0000000003";
	$fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000003"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["Japanese"]["TEXT0000000003"] = "";
	if (count($fieldToolTipsPMT_SUBCONTRACTORS["Japanese"]))
		$tdataPMT_SUBCONTRACTORS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_SUBCONTRACTORS["English"] = array();
	$fieldToolTipsPMT_SUBCONTRACTORS["English"] = array();
	$placeHoldersPMT_SUBCONTRACTORS["English"] = array();
	$pageTitlesPMT_SUBCONTRACTORS["English"] = array();
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["APP_UID"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["APP_UID"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["ROW"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["ROW"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["HASCONTRACT"] = "HASCONTRACT";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["HASCONTRACT"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["HASCONTRACT"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["NAME"] = "NAME";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["NAME"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["NAME"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["TEXT0000000001"] = "TEXT0000000001";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["TEXT0000000001"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["TEXT0000000001"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["TEXT0000000002"] = "TEXT0000000002";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["TEXT0000000002"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["TEXT0000000002"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS["English"]["TEXT0000000003"] = "TEXT0000000003";
	$fieldToolTipsPMT_SUBCONTRACTORS["English"]["TEXT0000000003"] = "";
	$placeHoldersPMT_SUBCONTRACTORS["English"]["TEXT0000000003"] = "";
	if (count($fieldToolTipsPMT_SUBCONTRACTORS["English"]))
		$tdataPMT_SUBCONTRACTORS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_SUBCONTRACTORS[""] = array();
	$fieldToolTipsPMT_SUBCONTRACTORS[""] = array();
	$placeHoldersPMT_SUBCONTRACTORS[""] = array();
	$pageTitlesPMT_SUBCONTRACTORS[""] = array();
	$fieldLabelsPMT_SUBCONTRACTORS[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["APP_UID"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["APP_UID"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["APP_STATUS"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["ROW"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["ROW"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["HASCONTRACT"] = "HASCONTRACT";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["HASCONTRACT"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["HASCONTRACT"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["NAME"] = "NAME";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["NAME"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["NAME"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["TEXT0000000001"] = "TEXT0000000001";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["TEXT0000000001"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["TEXT0000000001"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["TEXT0000000002"] = "TEXT0000000002";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["TEXT0000000002"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["TEXT0000000002"] = "";
	$fieldLabelsPMT_SUBCONTRACTORS[""]["TEXT0000000003"] = "TEXT0000000003";
	$fieldToolTipsPMT_SUBCONTRACTORS[""]["TEXT0000000003"] = "";
	$placeHoldersPMT_SUBCONTRACTORS[""]["TEXT0000000003"] = "";
	if (count($fieldToolTipsPMT_SUBCONTRACTORS[""]))
		$tdataPMT_SUBCONTRACTORS[".isUseToolTips"] = true;
}


	$tdataPMT_SUBCONTRACTORS[".NCSearch"] = true;



$tdataPMT_SUBCONTRACTORS[".shortTableName"] = "PMT_SUBCONTRACTORS";
$tdataPMT_SUBCONTRACTORS[".nSecOptions"] = 0;
$tdataPMT_SUBCONTRACTORS[".recsPerRowPrint"] = 1;
$tdataPMT_SUBCONTRACTORS[".mainTableOwnerID"] = "";
$tdataPMT_SUBCONTRACTORS[".moveNext"] = 1;
$tdataPMT_SUBCONTRACTORS[".entityType"] = 0;

$tdataPMT_SUBCONTRACTORS[".strOriginalTableName"] = "PMT_SUBCONTRACTORS";

	



$tdataPMT_SUBCONTRACTORS[".showAddInPopup"] = false;

$tdataPMT_SUBCONTRACTORS[".showEditInPopup"] = false;

$tdataPMT_SUBCONTRACTORS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_SUBCONTRACTORS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_SUBCONTRACTORS[".fieldsForRegister"] = array();
	
$tdataPMT_SUBCONTRACTORS[".listAjax"] = false;

	$tdataPMT_SUBCONTRACTORS[".audit"] = false;

	$tdataPMT_SUBCONTRACTORS[".locking"] = false;

$tdataPMT_SUBCONTRACTORS[".edit"] = true;
$tdataPMT_SUBCONTRACTORS[".afterEditAction"] = 1;
$tdataPMT_SUBCONTRACTORS[".closePopupAfterEdit"] = 1;
$tdataPMT_SUBCONTRACTORS[".afterEditActionDetTable"] = "";

$tdataPMT_SUBCONTRACTORS[".add"] = true;
$tdataPMT_SUBCONTRACTORS[".afterAddAction"] = 1;
$tdataPMT_SUBCONTRACTORS[".closePopupAfterAdd"] = 1;
$tdataPMT_SUBCONTRACTORS[".afterAddActionDetTable"] = "";

$tdataPMT_SUBCONTRACTORS[".list"] = true;

$tdataPMT_SUBCONTRACTORS[".inlineEdit"] = true;

$tdataPMT_SUBCONTRACTORS[".updateSelected"] = true;

$tdataPMT_SUBCONTRACTORS[".reorderRecordsByHeader"] = true;



$tdataPMT_SUBCONTRACTORS[".inlineAdd"] = true;
$tdataPMT_SUBCONTRACTORS[".copy"] = true;
$tdataPMT_SUBCONTRACTORS[".view"] = true;

$tdataPMT_SUBCONTRACTORS[".import"] = true;

$tdataPMT_SUBCONTRACTORS[".exportTo"] = true;

$tdataPMT_SUBCONTRACTORS[".printFriendly"] = true;

$tdataPMT_SUBCONTRACTORS[".delete"] = true;

$tdataPMT_SUBCONTRACTORS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_SUBCONTRACTORS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_SUBCONTRACTORS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_SUBCONTRACTORS[".searchSaving"] = false;
//

$tdataPMT_SUBCONTRACTORS[".showSearchPanel"] = true;
		$tdataPMT_SUBCONTRACTORS[".flexibleSearch"] = true;

$tdataPMT_SUBCONTRACTORS[".isUseAjaxSuggest"] = true;

$tdataPMT_SUBCONTRACTORS[".rowHighlite"] = true;



																

$tdataPMT_SUBCONTRACTORS[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_SUBCONTRACTORS[".buttonsAdded"] = false;

$tdataPMT_SUBCONTRACTORS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_SUBCONTRACTORS[".isUseTimeForSearch"] = false;



$tdataPMT_SUBCONTRACTORS[".badgeColor"] = "db7093";


$tdataPMT_SUBCONTRACTORS[".allSearchFields"] = array();
$tdataPMT_SUBCONTRACTORS[".filterFields"] = array();
$tdataPMT_SUBCONTRACTORS[".requiredSearchFields"] = array();

$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "APP_UID";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "ROW";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "HASCONTRACT";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "NAME";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "TEXT0000000001";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "TEXT0000000002";
	$tdataPMT_SUBCONTRACTORS[".allSearchFields"][] = "TEXT0000000003";
	

$tdataPMT_SUBCONTRACTORS[".googleLikeFields"] = array();
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".googleLikeFields"][] = "TEXT0000000003";


$tdataPMT_SUBCONTRACTORS[".advSearchFields"] = array();
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".advSearchFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".tableType"] = "list";

$tdataPMT_SUBCONTRACTORS[".printerPageOrientation"] = 0;
$tdataPMT_SUBCONTRACTORS[".nPrinterPageScale"] = 100;

$tdataPMT_SUBCONTRACTORS[".nPrinterSplitRecords"] = 40;

$tdataPMT_SUBCONTRACTORS[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_SUBCONTRACTORS[".geocodingEnabled"] = false;





$tdataPMT_SUBCONTRACTORS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_SUBCONTRACTORS[".pageSize"] = 20;

$tdataPMT_SUBCONTRACTORS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_SUBCONTRACTORS[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_SUBCONTRACTORS[".orderindexes"] = array();

$tdataPMT_SUBCONTRACTORS[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	HASCONTRACT,  	NAME,  	TEXT0000000001,  	TEXT0000000002,  	TEXT0000000003";
$tdataPMT_SUBCONTRACTORS[".sqlFrom"] = "FROM PMT_SUBCONTRACTORS";
$tdataPMT_SUBCONTRACTORS[".sqlWhereExpr"] = "";
$tdataPMT_SUBCONTRACTORS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_SUBCONTRACTORS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_SUBCONTRACTORS[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_SUBCONTRACTORS[".highlightSearchResults"] = true;

$tableKeysPMT_SUBCONTRACTORS = array();
$tableKeysPMT_SUBCONTRACTORS[] = "APP_UID";
$tableKeysPMT_SUBCONTRACTORS[] = "ROW";
$tdataPMT_SUBCONTRACTORS[".Keys"] = $tableKeysPMT_SUBCONTRACTORS;

$tdataPMT_SUBCONTRACTORS[".listFields"] = array();
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".listFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".hideMobileList"] = array();


$tdataPMT_SUBCONTRACTORS[".viewFields"] = array();
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".viewFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".addFields"] = array();
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".addFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".masterListFields"] = array();
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".masterListFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".inlineAddFields"] = array();
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".inlineAddFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".editFields"] = array();
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".editFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".inlineEditFields"] = array();
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".inlineEditFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"] = array();
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".updateSelectedFields"][] = "TEXT0000000003";


$tdataPMT_SUBCONTRACTORS[".exportFields"] = array();
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".exportFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".importFields"] = array();
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".importFields"][] = "TEXT0000000003";

$tdataPMT_SUBCONTRACTORS[".printFields"] = array();
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "APP_UID";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "APP_NUMBER";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "APP_STATUS";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "ROW";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "HASCONTRACT";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "NAME";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "TEXT0000000001";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "TEXT0000000002";
$tdataPMT_SUBCONTRACTORS[".printFields"][] = "TEXT0000000003";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","APP_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_SUBCONTRACTORS["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","APP_NUMBER");
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

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
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




	$tdataPMT_SUBCONTRACTORS["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","APP_STATUS");
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




	$tdataPMT_SUBCONTRACTORS["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","ROW");
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

		$fdata["strField"] = "ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ROW`";

	
	
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




	$tdataPMT_SUBCONTRACTORS["ROW"] = $fdata;
//	HASCONTRACT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "HASCONTRACT";
	$fdata["GoodName"] = "HASCONTRACT";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","HASCONTRACT");
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

		$fdata["strField"] = "HASCONTRACT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HASCONTRACT";

	
	
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




	$tdataPMT_SUBCONTRACTORS["HASCONTRACT"] = $fdata;
//	NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NAME";
	$fdata["GoodName"] = "NAME";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","NAME");
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

		$fdata["strField"] = "NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAME";

	
	
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




	$tdataPMT_SUBCONTRACTORS["NAME"] = $fdata;
//	TEXT0000000001
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TEXT0000000001";
	$fdata["GoodName"] = "TEXT0000000001";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","TEXT0000000001");
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

		$fdata["strField"] = "TEXT0000000001";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXT0000000001";

	
	
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




	$tdataPMT_SUBCONTRACTORS["TEXT0000000001"] = $fdata;
//	TEXT0000000002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TEXT0000000002";
	$fdata["GoodName"] = "TEXT0000000002";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","TEXT0000000002");
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

		$fdata["strField"] = "TEXT0000000002";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXT0000000002";

	
	
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




	$tdataPMT_SUBCONTRACTORS["TEXT0000000002"] = $fdata;
//	TEXT0000000003
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TEXT0000000003";
	$fdata["GoodName"] = "TEXT0000000003";
	$fdata["ownerTable"] = "PMT_SUBCONTRACTORS";
	$fdata["Label"] = GetFieldLabel("PMT_SUBCONTRACTORS","TEXT0000000003");
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

		$fdata["strField"] = "TEXT0000000003";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEXT0000000003";

	
	
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




	$tdataPMT_SUBCONTRACTORS["TEXT0000000003"] = $fdata;


$tables_data["PMT_SUBCONTRACTORS"]=&$tdataPMT_SUBCONTRACTORS;
$field_labels["PMT_SUBCONTRACTORS"] = &$fieldLabelsPMT_SUBCONTRACTORS;
$fieldToolTips["PMT_SUBCONTRACTORS"] = &$fieldToolTipsPMT_SUBCONTRACTORS;
$placeHolders["PMT_SUBCONTRACTORS"] = &$placeHoldersPMT_SUBCONTRACTORS;
$page_titles["PMT_SUBCONTRACTORS"] = &$pageTitlesPMT_SUBCONTRACTORS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_SUBCONTRACTORS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_SUBCONTRACTORS"] = array();


	
				$strOriginalDetailsTable="PMT_MITUMORI1";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_MITUMORI1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_MITUMORI1";
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
					$masterTablesData["PMT_SUBCONTRACTORS"][0] = $masterParams;
				$masterTablesData["PMT_SUBCONTRACTORS"][0]["masterKeys"] = array();
	$masterTablesData["PMT_SUBCONTRACTORS"][0]["masterKeys"][]="APP_NUMBER";
				$masterTablesData["PMT_SUBCONTRACTORS"][0]["detailKeys"] = array();
	$masterTablesData["PMT_SUBCONTRACTORS"][0]["detailKeys"][]="APP_NUMBER";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_SUBCONTRACTORS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	HASCONTRACT,  	NAME,  	TEXT0000000001,  	TEXT0000000002,  	TEXT0000000003";
$proto0["m_strFrom"] = "FROM PMT_SUBCONTRACTORS";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "HASCONTRACT",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto14["m_sql"] = "HASCONTRACT";
$proto14["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NAME",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto16["m_sql"] = "NAME";
$proto16["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXT0000000001",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto18["m_sql"] = "TEXT0000000001";
$proto18["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXT0000000002",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto20["m_sql"] = "TEXT0000000002";
$proto20["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TEXT0000000003",
	"m_strTable" => "PMT_SUBCONTRACTORS",
	"m_srcTableName" => "PMT_SUBCONTRACTORS"
));

$proto22["m_sql"] = "TEXT0000000003";
$proto22["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "PMT_SUBCONTRACTORS";
$proto25["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "APP_UID";
$proto25["m_columns"][] = "APP_NUMBER";
$proto25["m_columns"][] = "APP_STATUS";
$proto25["m_columns"][] = "ROW";
$proto25["m_columns"][] = "HASCONTRACT";
$proto25["m_columns"][] = "NAME";
$proto25["m_columns"][] = "TEXT0000000001";
$proto25["m_columns"][] = "TEXT0000000002";
$proto25["m_columns"][] = "TEXT0000000003";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "PMT_SUBCONTRACTORS";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "PMT_SUBCONTRACTORS";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_SUBCONTRACTORS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_SUBCONTRACTORS = createSqlQuery_PMT_SUBCONTRACTORS();


	
						;

									

$tdataPMT_SUBCONTRACTORS[".sqlquery"] = $queryData_PMT_SUBCONTRACTORS;

$tableEvents["PMT_SUBCONTRACTORS"] = new eventsBase;
$tdataPMT_SUBCONTRACTORS[".hasEvents"] = false;

?>
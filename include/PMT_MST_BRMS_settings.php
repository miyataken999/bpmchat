<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_MST_BRMS = array();
	$tdataPMT_MST_BRMS[".truncateText"] = true;
	$tdataPMT_MST_BRMS[".NumberOfChars"] = 80;
	$tdataPMT_MST_BRMS[".ShortName"] = "PMT_MST_BRMS";
	$tdataPMT_MST_BRMS[".OwnerID"] = "";
	$tdataPMT_MST_BRMS[".OriginalTable"] = "PMT_MST_BRMS";

//	field labels
$fieldLabelsPMT_MST_BRMS = array();
$fieldToolTipsPMT_MST_BRMS = array();
$pageTitlesPMT_MST_BRMS = array();
$placeHoldersPMT_MST_BRMS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_MST_BRMS["Japanese"] = array();
	$fieldToolTipsPMT_MST_BRMS["Japanese"] = array();
	$placeHoldersPMT_MST_BRMS["Japanese"] = array();
	$pageTitlesPMT_MST_BRMS["Japanese"] = array();
	$fieldLabelsPMT_MST_BRMS["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_MST_BRMS["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_MST_BRMS["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_MST_BRMS["Japanese"]["BRMS_DETAIL"] = "BRMS DETAIL";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["BRMS_DETAIL"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["BRMS_DETAIL"] = "";
	$fieldLabelsPMT_MST_BRMS["Japanese"]["BRMS_DETAIL_LABEL"] = "BRMS DETAIL LABEL";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["BRMS_DETAIL_LABEL"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["BRMS_DETAIL_LABEL"] = "";
	$fieldLabelsPMT_MST_BRMS["Japanese"]["BRMS_ID"] = "BRMS ID";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["BRMS_ID"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["BRMS_ID"] = "";
	$fieldLabelsPMT_MST_BRMS["Japanese"]["BRMS_ID_LABEL"] = "BRMS ID LABEL";
	$fieldToolTipsPMT_MST_BRMS["Japanese"]["BRMS_ID_LABEL"] = "";
	$placeHoldersPMT_MST_BRMS["Japanese"]["BRMS_ID_LABEL"] = "";
	if (count($fieldToolTipsPMT_MST_BRMS["Japanese"]))
		$tdataPMT_MST_BRMS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_MST_BRMS["English"] = array();
	$fieldToolTipsPMT_MST_BRMS["English"] = array();
	$placeHoldersPMT_MST_BRMS["English"] = array();
	$pageTitlesPMT_MST_BRMS["English"] = array();
	$fieldLabelsPMT_MST_BRMS["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_MST_BRMS["English"]["APP_UID"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["APP_UID"] = "";
	$fieldLabelsPMT_MST_BRMS["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_MST_BRMS["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_MST_BRMS["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_MST_BRMS["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_MST_BRMS["English"]["BRMS_DETAIL"] = "BRMS DETAIL";
	$fieldToolTipsPMT_MST_BRMS["English"]["BRMS_DETAIL"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["BRMS_DETAIL"] = "";
	$fieldLabelsPMT_MST_BRMS["English"]["BRMS_DETAIL_LABEL"] = "BRMS DETAIL LABEL";
	$fieldToolTipsPMT_MST_BRMS["English"]["BRMS_DETAIL_LABEL"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["BRMS_DETAIL_LABEL"] = "";
	$fieldLabelsPMT_MST_BRMS["English"]["BRMS_ID"] = "BRMS ID";
	$fieldToolTipsPMT_MST_BRMS["English"]["BRMS_ID"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["BRMS_ID"] = "";
	$fieldLabelsPMT_MST_BRMS["English"]["BRMS_ID_LABEL"] = "BRMS ID LABEL";
	$fieldToolTipsPMT_MST_BRMS["English"]["BRMS_ID_LABEL"] = "";
	$placeHoldersPMT_MST_BRMS["English"]["BRMS_ID_LABEL"] = "";
	if (count($fieldToolTipsPMT_MST_BRMS["English"]))
		$tdataPMT_MST_BRMS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_MST_BRMS[""] = array();
	$fieldToolTipsPMT_MST_BRMS[""] = array();
	$placeHoldersPMT_MST_BRMS[""] = array();
	$pageTitlesPMT_MST_BRMS[""] = array();
	$fieldLabelsPMT_MST_BRMS[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_MST_BRMS[""]["APP_UID"] = "";
	$placeHoldersPMT_MST_BRMS[""]["APP_UID"] = "";
	$fieldLabelsPMT_MST_BRMS[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_MST_BRMS[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_MST_BRMS[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_MST_BRMS[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_MST_BRMS[""]["APP_STATUS"] = "";
	$placeHoldersPMT_MST_BRMS[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_MST_BRMS[""]["BRMS_DETAIL"] = "BRMS DETAIL";
	$fieldToolTipsPMT_MST_BRMS[""]["BRMS_DETAIL"] = "";
	$placeHoldersPMT_MST_BRMS[""]["BRMS_DETAIL"] = "";
	$fieldLabelsPMT_MST_BRMS[""]["BRMS_DETAIL_LABEL"] = "BRMS DETAIL LABEL";
	$fieldToolTipsPMT_MST_BRMS[""]["BRMS_DETAIL_LABEL"] = "";
	$placeHoldersPMT_MST_BRMS[""]["BRMS_DETAIL_LABEL"] = "";
	$fieldLabelsPMT_MST_BRMS[""]["BRMS_ID"] = "BRMS ID";
	$fieldToolTipsPMT_MST_BRMS[""]["BRMS_ID"] = "";
	$placeHoldersPMT_MST_BRMS[""]["BRMS_ID"] = "";
	$fieldLabelsPMT_MST_BRMS[""]["BRMS_ID_LABEL"] = "BRMS ID LABEL";
	$fieldToolTipsPMT_MST_BRMS[""]["BRMS_ID_LABEL"] = "";
	$placeHoldersPMT_MST_BRMS[""]["BRMS_ID_LABEL"] = "";
	if (count($fieldToolTipsPMT_MST_BRMS[""]))
		$tdataPMT_MST_BRMS[".isUseToolTips"] = true;
}


	$tdataPMT_MST_BRMS[".NCSearch"] = true;



$tdataPMT_MST_BRMS[".shortTableName"] = "PMT_MST_BRMS";
$tdataPMT_MST_BRMS[".nSecOptions"] = 0;
$tdataPMT_MST_BRMS[".recsPerRowPrint"] = 1;
$tdataPMT_MST_BRMS[".mainTableOwnerID"] = "";
$tdataPMT_MST_BRMS[".moveNext"] = 1;
$tdataPMT_MST_BRMS[".entityType"] = 0;

$tdataPMT_MST_BRMS[".strOriginalTableName"] = "PMT_MST_BRMS";

	



$tdataPMT_MST_BRMS[".showAddInPopup"] = false;

$tdataPMT_MST_BRMS[".showEditInPopup"] = false;

$tdataPMT_MST_BRMS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_MST_BRMS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_MST_BRMS[".fieldsForRegister"] = array();
	
$tdataPMT_MST_BRMS[".listAjax"] = false;

	$tdataPMT_MST_BRMS[".audit"] = false;

	$tdataPMT_MST_BRMS[".locking"] = false;

$tdataPMT_MST_BRMS[".edit"] = true;
$tdataPMT_MST_BRMS[".afterEditAction"] = 1;
$tdataPMT_MST_BRMS[".closePopupAfterEdit"] = 1;
$tdataPMT_MST_BRMS[".afterEditActionDetTable"] = "";

$tdataPMT_MST_BRMS[".add"] = true;
$tdataPMT_MST_BRMS[".afterAddAction"] = 1;
$tdataPMT_MST_BRMS[".closePopupAfterAdd"] = 1;
$tdataPMT_MST_BRMS[".afterAddActionDetTable"] = "";

$tdataPMT_MST_BRMS[".list"] = true;



$tdataPMT_MST_BRMS[".reorderRecordsByHeader"] = true;



$tdataPMT_MST_BRMS[".view"] = true;

$tdataPMT_MST_BRMS[".import"] = true;

$tdataPMT_MST_BRMS[".exportTo"] = true;

$tdataPMT_MST_BRMS[".printFriendly"] = true;

$tdataPMT_MST_BRMS[".delete"] = true;

$tdataPMT_MST_BRMS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_MST_BRMS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_MST_BRMS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_MST_BRMS[".searchSaving"] = false;
//

$tdataPMT_MST_BRMS[".showSearchPanel"] = true;
		$tdataPMT_MST_BRMS[".flexibleSearch"] = true;

$tdataPMT_MST_BRMS[".isUseAjaxSuggest"] = true;

$tdataPMT_MST_BRMS[".rowHighlite"] = true;



				

$tdataPMT_MST_BRMS[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_MST_BRMS[".buttonsAdded"] = false;

$tdataPMT_MST_BRMS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_MST_BRMS[".isUseTimeForSearch"] = false;





$tdataPMT_MST_BRMS[".allSearchFields"] = array();
$tdataPMT_MST_BRMS[".filterFields"] = array();
$tdataPMT_MST_BRMS[".requiredSearchFields"] = array();

$tdataPMT_MST_BRMS[".allSearchFields"][] = "APP_UID";
	$tdataPMT_MST_BRMS[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_MST_BRMS[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_MST_BRMS[".allSearchFields"][] = "BRMS_DETAIL";
	$tdataPMT_MST_BRMS[".allSearchFields"][] = "BRMS_DETAIL_LABEL";
	$tdataPMT_MST_BRMS[".allSearchFields"][] = "BRMS_ID";
	$tdataPMT_MST_BRMS[".allSearchFields"][] = "BRMS_ID_LABEL";
	

$tdataPMT_MST_BRMS[".googleLikeFields"] = array();
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".googleLikeFields"][] = "BRMS_ID_LABEL";


$tdataPMT_MST_BRMS[".advSearchFields"] = array();
$tdataPMT_MST_BRMS[".advSearchFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".advSearchFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".advSearchFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".advSearchFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".advSearchFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".tableType"] = "list";

$tdataPMT_MST_BRMS[".printerPageOrientation"] = 0;
$tdataPMT_MST_BRMS[".nPrinterPageScale"] = 100;

$tdataPMT_MST_BRMS[".nPrinterSplitRecords"] = 40;

$tdataPMT_MST_BRMS[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_MST_BRMS[".geocodingEnabled"] = false;





$tdataPMT_MST_BRMS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_MST_BRMS[".pageSize"] = 20;

$tdataPMT_MST_BRMS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_MST_BRMS[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_MST_BRMS[".orderindexes"] = array();

$tdataPMT_MST_BRMS[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	BRMS_DETAIL,  	BRMS_DETAIL_LABEL,  	BRMS_ID,  	BRMS_ID_LABEL";
$tdataPMT_MST_BRMS[".sqlFrom"] = "FROM PMT_MST_BRMS";
$tdataPMT_MST_BRMS[".sqlWhereExpr"] = "";
$tdataPMT_MST_BRMS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_MST_BRMS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_MST_BRMS[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_MST_BRMS[".highlightSearchResults"] = true;

$tableKeysPMT_MST_BRMS = array();
$tableKeysPMT_MST_BRMS[] = "APP_UID";
$tdataPMT_MST_BRMS[".Keys"] = $tableKeysPMT_MST_BRMS;

$tdataPMT_MST_BRMS[".listFields"] = array();
$tdataPMT_MST_BRMS[".listFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".listFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".listFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".listFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".listFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".listFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".listFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".hideMobileList"] = array();


$tdataPMT_MST_BRMS[".viewFields"] = array();
$tdataPMT_MST_BRMS[".viewFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".viewFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".viewFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".viewFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".viewFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".viewFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".viewFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".addFields"] = array();
$tdataPMT_MST_BRMS[".addFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".addFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".addFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".addFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".addFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".addFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".addFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".masterListFields"] = array();
$tdataPMT_MST_BRMS[".masterListFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".masterListFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".masterListFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".masterListFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".masterListFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".masterListFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".inlineAddFields"] = array();
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".inlineAddFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".editFields"] = array();
$tdataPMT_MST_BRMS[".editFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".editFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".editFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".editFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".editFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".editFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".editFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".inlineEditFields"] = array();
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".inlineEditFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".updateSelectedFields"] = array();
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".updateSelectedFields"][] = "BRMS_ID_LABEL";


$tdataPMT_MST_BRMS[".exportFields"] = array();
$tdataPMT_MST_BRMS[".exportFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".exportFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".exportFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".exportFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".exportFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".exportFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".exportFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".importFields"] = array();
$tdataPMT_MST_BRMS[".importFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".importFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".importFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".importFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".importFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".importFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".importFields"][] = "BRMS_ID_LABEL";

$tdataPMT_MST_BRMS[".printFields"] = array();
$tdataPMT_MST_BRMS[".printFields"][] = "APP_UID";
$tdataPMT_MST_BRMS[".printFields"][] = "APP_NUMBER";
$tdataPMT_MST_BRMS[".printFields"][] = "APP_STATUS";
$tdataPMT_MST_BRMS[".printFields"][] = "BRMS_DETAIL";
$tdataPMT_MST_BRMS[".printFields"][] = "BRMS_DETAIL_LABEL";
$tdataPMT_MST_BRMS[".printFields"][] = "BRMS_ID";
$tdataPMT_MST_BRMS[".printFields"][] = "BRMS_ID_LABEL";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","APP_UID");
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




	$tdataPMT_MST_BRMS["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","APP_NUMBER");
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




	$tdataPMT_MST_BRMS["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","APP_STATUS");
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




	$tdataPMT_MST_BRMS["APP_STATUS"] = $fdata;
//	BRMS_DETAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BRMS_DETAIL";
	$fdata["GoodName"] = "BRMS_DETAIL";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","BRMS_DETAIL");
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

		$fdata["strField"] = "BRMS_DETAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRMS_DETAIL";

	
	
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




	$tdataPMT_MST_BRMS["BRMS_DETAIL"] = $fdata;
//	BRMS_DETAIL_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BRMS_DETAIL_LABEL";
	$fdata["GoodName"] = "BRMS_DETAIL_LABEL";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","BRMS_DETAIL_LABEL");
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

		$fdata["strField"] = "BRMS_DETAIL_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRMS_DETAIL_LABEL";

	
	
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




	$tdataPMT_MST_BRMS["BRMS_DETAIL_LABEL"] = $fdata;
//	BRMS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BRMS_ID";
	$fdata["GoodName"] = "BRMS_ID";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","BRMS_ID");
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

		$fdata["strField"] = "BRMS_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRMS_ID";

	
	
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




	$tdataPMT_MST_BRMS["BRMS_ID"] = $fdata;
//	BRMS_ID_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "BRMS_ID_LABEL";
	$fdata["GoodName"] = "BRMS_ID_LABEL";
	$fdata["ownerTable"] = "PMT_MST_BRMS";
	$fdata["Label"] = GetFieldLabel("PMT_MST_BRMS","BRMS_ID_LABEL");
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

		$fdata["strField"] = "BRMS_ID_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRMS_ID_LABEL";

	
	
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




	$tdataPMT_MST_BRMS["BRMS_ID_LABEL"] = $fdata;


$tables_data["PMT_MST_BRMS"]=&$tdataPMT_MST_BRMS;
$field_labels["PMT_MST_BRMS"] = &$fieldLabelsPMT_MST_BRMS;
$fieldToolTips["PMT_MST_BRMS"] = &$fieldToolTipsPMT_MST_BRMS;
$placeHolders["PMT_MST_BRMS"] = &$placeHoldersPMT_MST_BRMS;
$page_titles["PMT_MST_BRMS"] = &$pageTitlesPMT_MST_BRMS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_MST_BRMS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_MST_BRMS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_MST_BRMS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	BRMS_DETAIL,  	BRMS_DETAIL_LABEL,  	BRMS_ID,  	BRMS_ID_LABEL";
$proto0["m_strFrom"] = "FROM PMT_MST_BRMS";
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
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_MST_BRMS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_MST_BRMS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_MST_BRMS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BRMS_DETAIL",
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto12["m_sql"] = "BRMS_DETAIL";
$proto12["m_srcTableName"] = "PMT_MST_BRMS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BRMS_DETAIL_LABEL",
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto14["m_sql"] = "BRMS_DETAIL_LABEL";
$proto14["m_srcTableName"] = "PMT_MST_BRMS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BRMS_ID",
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto16["m_sql"] = "BRMS_ID";
$proto16["m_srcTableName"] = "PMT_MST_BRMS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "BRMS_ID_LABEL",
	"m_strTable" => "PMT_MST_BRMS",
	"m_srcTableName" => "PMT_MST_BRMS"
));

$proto18["m_sql"] = "BRMS_ID_LABEL";
$proto18["m_srcTableName"] = "PMT_MST_BRMS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "PMT_MST_BRMS";
$proto21["m_srcTableName"] = "PMT_MST_BRMS";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "APP_UID";
$proto21["m_columns"][] = "APP_NUMBER";
$proto21["m_columns"][] = "APP_STATUS";
$proto21["m_columns"][] = "BRMS_DETAIL";
$proto21["m_columns"][] = "BRMS_DETAIL_LABEL";
$proto21["m_columns"][] = "BRMS_ID";
$proto21["m_columns"][] = "BRMS_ID_LABEL";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "PMT_MST_BRMS";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "PMT_MST_BRMS";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_MST_BRMS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_MST_BRMS = createSqlQuery_PMT_MST_BRMS();


	
						;

							

$tdataPMT_MST_BRMS[".sqlquery"] = $queryData_PMT_MST_BRMS;

$tableEvents["PMT_MST_BRMS"] = new eventsBase;
$tdataPMT_MST_BRMS[".hasEvents"] = false;

?>
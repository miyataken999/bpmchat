<?php
require_once(getabspath("classes/cipherer.php"));




$tdataABE_REQUESTS = array();
	$tdataABE_REQUESTS[".truncateText"] = true;
	$tdataABE_REQUESTS[".NumberOfChars"] = 20;
	$tdataABE_REQUESTS[".ShortName"] = "ABE_REQUESTS";
	$tdataABE_REQUESTS[".OwnerID"] = "";
	$tdataABE_REQUESTS[".OriginalTable"] = "ABE_REQUESTS";

//	field labels
$fieldLabelsABE_REQUESTS = array();
$fieldToolTipsABE_REQUESTS = array();
$pageTitlesABE_REQUESTS = array();
$placeHoldersABE_REQUESTS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsABE_REQUESTS["Japanese"] = array();
	$fieldToolTipsABE_REQUESTS["Japanese"] = array();
	$placeHoldersABE_REQUESTS["Japanese"] = array();
	$pageTitlesABE_REQUESTS["Japanese"] = array();
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_UID"] = "阿部のreq UID";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_UID"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_UID"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_UID"] = "阿部のUID";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_UID"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_UID"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["APP_UID"] = "APPUID";
	$fieldToolTipsABE_REQUESTS["Japanese"]["APP_UID"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["APP_UID"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsABE_REQUESTS["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_SENT_TO"] = "安倍REQに送られました";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_SENT_TO"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_SENT_TO"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_SUBJECT"] = "安倍REQ対象";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_SUBJECT"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_SUBJECT"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_BODY"] = "阿部REQボディ";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_BODY"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_BODY"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_DATE"] = "安倍REQ日";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_DATE"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_DATE"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_STATUS"] = "安倍REQステータス";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_STATUS"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_STATUS"] = "";
	$fieldLabelsABE_REQUESTS["Japanese"]["ABE_REQ_ANSWERED"] = "安倍reqが答え";
	$fieldToolTipsABE_REQUESTS["Japanese"]["ABE_REQ_ANSWERED"] = "";
	$placeHoldersABE_REQUESTS["Japanese"]["ABE_REQ_ANSWERED"] = "";
	if (count($fieldToolTipsABE_REQUESTS["Japanese"]))
		$tdataABE_REQUESTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsABE_REQUESTS["English"] = array();
	$fieldToolTipsABE_REQUESTS["English"] = array();
	$placeHoldersABE_REQUESTS["English"] = array();
	$pageTitlesABE_REQUESTS["English"] = array();
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_UID"] = "阿部のreq UID";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_UID"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_UID"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_UID"] = "阿部のUID";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_UID"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_UID"] = "";
	$fieldLabelsABE_REQUESTS["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsABE_REQUESTS["English"]["APP_UID"] = "";
	$placeHoldersABE_REQUESTS["English"]["APP_UID"] = "";
	$fieldLabelsABE_REQUESTS["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsABE_REQUESTS["English"]["DEL_INDEX"] = "";
	$placeHoldersABE_REQUESTS["English"]["DEL_INDEX"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_SENT_TO"] = "安倍REQに送られました";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_SENT_TO"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_SENT_TO"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_SUBJECT"] = "安倍REQ対象";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_SUBJECT"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_SUBJECT"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_BODY"] = "阿部REQボディ";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_BODY"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_BODY"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_DATE"] = "安倍REQ日";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_DATE"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_DATE"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_STATUS"] = "安倍REQステータス";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_STATUS"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_STATUS"] = "";
	$fieldLabelsABE_REQUESTS["English"]["ABE_REQ_ANSWERED"] = "安倍reqが答え";
	$fieldToolTipsABE_REQUESTS["English"]["ABE_REQ_ANSWERED"] = "";
	$placeHoldersABE_REQUESTS["English"]["ABE_REQ_ANSWERED"] = "";
	if (count($fieldToolTipsABE_REQUESTS["English"]))
		$tdataABE_REQUESTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsABE_REQUESTS[""] = array();
	$fieldToolTipsABE_REQUESTS[""] = array();
	$placeHoldersABE_REQUESTS[""] = array();
	$pageTitlesABE_REQUESTS[""] = array();
	if (count($fieldToolTipsABE_REQUESTS[""]))
		$tdataABE_REQUESTS[".isUseToolTips"] = true;
}


	$tdataABE_REQUESTS[".NCSearch"] = true;



$tdataABE_REQUESTS[".shortTableName"] = "ABE_REQUESTS";
$tdataABE_REQUESTS[".nSecOptions"] = 0;
$tdataABE_REQUESTS[".recsPerRowPrint"] = 1;
$tdataABE_REQUESTS[".mainTableOwnerID"] = "";
$tdataABE_REQUESTS[".moveNext"] = 0;
$tdataABE_REQUESTS[".entityType"] = 0;

$tdataABE_REQUESTS[".strOriginalTableName"] = "ABE_REQUESTS";

	



$tdataABE_REQUESTS[".showAddInPopup"] = false;

$tdataABE_REQUESTS[".showEditInPopup"] = false;

$tdataABE_REQUESTS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataABE_REQUESTS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataABE_REQUESTS[".fieldsForRegister"] = array();
	
$tdataABE_REQUESTS[".listAjax"] = false;

	$tdataABE_REQUESTS[".audit"] = true;

	$tdataABE_REQUESTS[".locking"] = false;

$tdataABE_REQUESTS[".edit"] = true;
$tdataABE_REQUESTS[".afterEditAction"] = 1;
$tdataABE_REQUESTS[".closePopupAfterEdit"] = 1;
$tdataABE_REQUESTS[".afterEditActionDetTable"] = "";

$tdataABE_REQUESTS[".add"] = true;
$tdataABE_REQUESTS[".afterAddAction"] = 1;
$tdataABE_REQUESTS[".closePopupAfterAdd"] = 1;
$tdataABE_REQUESTS[".afterAddActionDetTable"] = "";

$tdataABE_REQUESTS[".list"] = true;

$tdataABE_REQUESTS[".inlineEdit"] = true;


$tdataABE_REQUESTS[".reorderRecordsByHeader"] = true;
$tdataABE_REQUESTS[".createSortByDropdown"] = true;
$tdataABE_REQUESTS[".strSortControlSettingsJSON"] = "";



$tdataABE_REQUESTS[".inlineAdd"] = true;
$tdataABE_REQUESTS[".view"] = true;

$tdataABE_REQUESTS[".import"] = true;

$tdataABE_REQUESTS[".exportTo"] = true;

$tdataABE_REQUESTS[".printFriendly"] = true;

$tdataABE_REQUESTS[".delete"] = true;

$tdataABE_REQUESTS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataABE_REQUESTS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataABE_REQUESTS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataABE_REQUESTS[".searchSaving"] = false;
//

$tdataABE_REQUESTS[".showSearchPanel"] = true;
		$tdataABE_REQUESTS[".flexibleSearch"] = true;

$tdataABE_REQUESTS[".isUseAjaxSuggest"] = true;

$tdataABE_REQUESTS[".rowHighlite"] = true;



				

$tdataABE_REQUESTS[".ajaxCodeSnippetAdded"] = false;

$tdataABE_REQUESTS[".buttonsAdded"] = false;

$tdataABE_REQUESTS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataABE_REQUESTS[".isUseTimeForSearch"] = false;





$tdataABE_REQUESTS[".allSearchFields"] = array();
$tdataABE_REQUESTS[".filterFields"] = array();
$tdataABE_REQUESTS[".requiredSearchFields"] = array();

$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_UID";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_UID";
	$tdataABE_REQUESTS[".allSearchFields"][] = "APP_UID";
	$tdataABE_REQUESTS[".allSearchFields"][] = "DEL_INDEX";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_SENT_TO";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_SUBJECT";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_BODY";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_DATE";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_STATUS";
	$tdataABE_REQUESTS[".allSearchFields"][] = "ABE_REQ_ANSWERED";
	

$tdataABE_REQUESTS[".googleLikeFields"] = array();
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".googleLikeFields"][] = "APP_UID";
$tdataABE_REQUESTS[".googleLikeFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".googleLikeFields"][] = "ABE_REQ_ANSWERED";


$tdataABE_REQUESTS[".advSearchFields"] = array();
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".advSearchFields"][] = "APP_UID";
$tdataABE_REQUESTS[".advSearchFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".advSearchFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".tableType"] = "list";

$tdataABE_REQUESTS[".printerPageOrientation"] = 0;
$tdataABE_REQUESTS[".nPrinterPageScale"] = 100;

$tdataABE_REQUESTS[".nPrinterSplitRecords"] = 40;

$tdataABE_REQUESTS[".nPrinterPDFSplitRecords"] = 40;



$tdataABE_REQUESTS[".geocodingEnabled"] = false;





$tdataABE_REQUESTS[".listGridLayout"] = 3;


$tdataABE_REQUESTS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataABE_REQUESTS[".pageSize"] = 20;

$tdataABE_REQUESTS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataABE_REQUESTS[".strOrderBy"] = $tstrOrderBy;

$tdataABE_REQUESTS[".orderindexes"] = array();

$tdataABE_REQUESTS[".sqlHead"] = "SELECT ABE_REQ_UID,  	ABE_UID,  	APP_UID,  	DEL_INDEX,  	ABE_REQ_SENT_TO,  	ABE_REQ_SUBJECT,  	ABE_REQ_BODY,  	ABE_REQ_DATE,  	ABE_REQ_STATUS,  	ABE_REQ_ANSWERED";
$tdataABE_REQUESTS[".sqlFrom"] = "FROM ABE_REQUESTS";
$tdataABE_REQUESTS[".sqlWhereExpr"] = "";
$tdataABE_REQUESTS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataABE_REQUESTS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataABE_REQUESTS[".arrGroupsPerPage"] = $arrGPP;

$tdataABE_REQUESTS[".highlightSearchResults"] = true;

$tableKeysABE_REQUESTS = array();
$tableKeysABE_REQUESTS[] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".Keys"] = $tableKeysABE_REQUESTS;

$tdataABE_REQUESTS[".listFields"] = array();
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".listFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".listFields"][] = "APP_UID";
$tdataABE_REQUESTS[".listFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".listFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".hideMobileList"] = array();


$tdataABE_REQUESTS[".viewFields"] = array();
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".viewFields"][] = "APP_UID";
$tdataABE_REQUESTS[".viewFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".viewFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".addFields"] = array();
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".addFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".addFields"][] = "APP_UID";
$tdataABE_REQUESTS[".addFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".addFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".masterListFields"] = array();
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".masterListFields"][] = "APP_UID";
$tdataABE_REQUESTS[".masterListFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".masterListFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".inlineAddFields"] = array();
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".inlineAddFields"][] = "APP_UID";
$tdataABE_REQUESTS[".inlineAddFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".inlineAddFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".editFields"] = array();
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".editFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".editFields"][] = "APP_UID";
$tdataABE_REQUESTS[".editFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".editFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".inlineEditFields"] = array();
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".inlineEditFields"][] = "APP_UID";
$tdataABE_REQUESTS[".inlineEditFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".inlineEditFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".updateSelectedFields"] = array();
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "APP_UID";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".updateSelectedFields"][] = "ABE_REQ_ANSWERED";


$tdataABE_REQUESTS[".exportFields"] = array();
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".exportFields"][] = "APP_UID";
$tdataABE_REQUESTS[".exportFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".exportFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".importFields"] = array();
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".importFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".importFields"][] = "APP_UID";
$tdataABE_REQUESTS[".importFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".importFields"][] = "ABE_REQ_ANSWERED";

$tdataABE_REQUESTS[".printFields"] = array();
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_UID";
$tdataABE_REQUESTS[".printFields"][] = "ABE_UID";
$tdataABE_REQUESTS[".printFields"][] = "APP_UID";
$tdataABE_REQUESTS[".printFields"][] = "DEL_INDEX";
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_SENT_TO";
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_SUBJECT";
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_BODY";
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_DATE";
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_STATUS";
$tdataABE_REQUESTS[".printFields"][] = "ABE_REQ_ANSWERED";

//	ABE_REQ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ABE_REQ_UID";
	$fdata["GoodName"] = "ABE_REQ_UID";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_UID");
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

		$fdata["strField"] = "ABE_REQ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_UID";

	
	
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




	$tdataABE_REQUESTS["ABE_REQ_UID"] = $fdata;
//	ABE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ABE_UID";
	$fdata["GoodName"] = "ABE_UID";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_UID");
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

		$fdata["strField"] = "ABE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_UID";

	
	
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




	$tdataABE_REQUESTS["ABE_UID"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","APP_UID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_REQUESTS["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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




	$tdataABE_REQUESTS["DEL_INDEX"] = $fdata;
//	ABE_REQ_SENT_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ABE_REQ_SENT_TO";
	$fdata["GoodName"] = "ABE_REQ_SENT_TO";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_SENT_TO");
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

		$fdata["strField"] = "ABE_REQ_SENT_TO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_SENT_TO";

	
	
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




	$tdataABE_REQUESTS["ABE_REQ_SENT_TO"] = $fdata;
//	ABE_REQ_SUBJECT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ABE_REQ_SUBJECT";
	$fdata["GoodName"] = "ABE_REQ_SUBJECT";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_SUBJECT");
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

		$fdata["strField"] = "ABE_REQ_SUBJECT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_SUBJECT";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataABE_REQUESTS["ABE_REQ_SUBJECT"] = $fdata;
//	ABE_REQ_BODY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ABE_REQ_BODY";
	$fdata["GoodName"] = "ABE_REQ_BODY";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_BODY");
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

		$fdata["strField"] = "ABE_REQ_BODY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_BODY";

	
	
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




	$tdataABE_REQUESTS["ABE_REQ_BODY"] = $fdata;
//	ABE_REQ_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ABE_REQ_DATE";
	$fdata["GoodName"] = "ABE_REQ_DATE";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_DATE");
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

		$fdata["strField"] = "ABE_REQ_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_DATE";

	
	
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




	$tdataABE_REQUESTS["ABE_REQ_DATE"] = $fdata;
//	ABE_REQ_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ABE_REQ_STATUS";
	$fdata["GoodName"] = "ABE_REQ_STATUS";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_STATUS");
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

		$fdata["strField"] = "ABE_REQ_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_STATUS";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_REQUESTS["ABE_REQ_STATUS"] = $fdata;
//	ABE_REQ_ANSWERED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ABE_REQ_ANSWERED";
	$fdata["GoodName"] = "ABE_REQ_ANSWERED";
	$fdata["ownerTable"] = "ABE_REQUESTS";
	$fdata["Label"] = GetFieldLabel("ABE_REQUESTS","ABE_REQ_ANSWERED");
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

		$fdata["strField"] = "ABE_REQ_ANSWERED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_ANSWERED";

	
	
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




	$tdataABE_REQUESTS["ABE_REQ_ANSWERED"] = $fdata;


$tables_data["ABE_REQUESTS"]=&$tdataABE_REQUESTS;
$field_labels["ABE_REQUESTS"] = &$fieldLabelsABE_REQUESTS;
$fieldToolTips["ABE_REQUESTS"] = &$fieldToolTipsABE_REQUESTS;
$placeHolders["ABE_REQUESTS"] = &$placeHoldersABE_REQUESTS;
$page_titles["ABE_REQUESTS"] = &$pageTitlesABE_REQUESTS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ABE_REQUESTS"] = array();
//	PMT_MENU
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_MENU";
		$detailsParam["dOriginalTable"] = "PMT_MENU";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_MENU";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_MENU");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["ABE_REQUESTS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ABE_REQUESTS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ABE_REQUESTS"][$dIndex]["masterKeys"][]="ABE_UID";

				$detailsTablesData["ABE_REQUESTS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ABE_REQUESTS"][$dIndex]["detailKeys"][]="MENU_URL";

// tables which are master tables for current table (detail)
$masterTablesData["ABE_REQUESTS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ABE_REQUESTS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ABE_REQ_UID,  	ABE_UID,  	APP_UID,  	DEL_INDEX,  	ABE_REQ_SENT_TO,  	ABE_REQ_SUBJECT,  	ABE_REQ_BODY,  	ABE_REQ_DATE,  	ABE_REQ_STATUS,  	ABE_REQ_ANSWERED";
$proto0["m_strFrom"] = "FROM ABE_REQUESTS";
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
	"m_strName" => "ABE_REQ_UID",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto6["m_sql"] = "ABE_REQ_UID";
$proto6["m_srcTableName"] = "ABE_REQUESTS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_UID",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto8["m_sql"] = "ABE_UID";
$proto8["m_srcTableName"] = "ABE_REQUESTS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto10["m_sql"] = "APP_UID";
$proto10["m_srcTableName"] = "ABE_REQUESTS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto12["m_sql"] = "DEL_INDEX";
$proto12["m_srcTableName"] = "ABE_REQUESTS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_SENT_TO",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto14["m_sql"] = "ABE_REQ_SENT_TO";
$proto14["m_srcTableName"] = "ABE_REQUESTS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_SUBJECT",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto16["m_sql"] = "ABE_REQ_SUBJECT";
$proto16["m_srcTableName"] = "ABE_REQUESTS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_BODY",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto18["m_sql"] = "ABE_REQ_BODY";
$proto18["m_srcTableName"] = "ABE_REQUESTS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_DATE",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto20["m_sql"] = "ABE_REQ_DATE";
$proto20["m_srcTableName"] = "ABE_REQUESTS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_STATUS",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto22["m_sql"] = "ABE_REQ_STATUS";
$proto22["m_srcTableName"] = "ABE_REQUESTS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_ANSWERED",
	"m_strTable" => "ABE_REQUESTS",
	"m_srcTableName" => "ABE_REQUESTS"
));

$proto24["m_sql"] = "ABE_REQ_ANSWERED";
$proto24["m_srcTableName"] = "ABE_REQUESTS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "ABE_REQUESTS";
$proto27["m_srcTableName"] = "ABE_REQUESTS";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ABE_REQ_UID";
$proto27["m_columns"][] = "ABE_UID";
$proto27["m_columns"][] = "APP_UID";
$proto27["m_columns"][] = "DEL_INDEX";
$proto27["m_columns"][] = "ABE_REQ_SENT_TO";
$proto27["m_columns"][] = "ABE_REQ_SUBJECT";
$proto27["m_columns"][] = "ABE_REQ_BODY";
$proto27["m_columns"][] = "ABE_REQ_DATE";
$proto27["m_columns"][] = "ABE_REQ_STATUS";
$proto27["m_columns"][] = "ABE_REQ_ANSWERED";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "ABE_REQUESTS";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "ABE_REQUESTS";
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
$proto0["m_srcTableName"]="ABE_REQUESTS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ABE_REQUESTS = createSqlQuery_ABE_REQUESTS();


	
						;

										

$tdataABE_REQUESTS[".sqlquery"] = $queryData_ABE_REQUESTS;

$tableEvents["ABE_REQUESTS"] = new eventsBase;
$tdataABE_REQUESTS[".hasEvents"] = false;

?>
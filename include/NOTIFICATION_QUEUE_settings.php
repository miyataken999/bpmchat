<?php
require_once(getabspath("classes/cipherer.php"));




$tdataNOTIFICATION_QUEUE = array();
	$tdataNOTIFICATION_QUEUE[".truncateText"] = true;
	$tdataNOTIFICATION_QUEUE[".NumberOfChars"] = 80;
	$tdataNOTIFICATION_QUEUE[".ShortName"] = "NOTIFICATION_QUEUE";
	$tdataNOTIFICATION_QUEUE[".OwnerID"] = "";
	$tdataNOTIFICATION_QUEUE[".OriginalTable"] = "NOTIFICATION_QUEUE";

//	field labels
$fieldLabelsNOTIFICATION_QUEUE = array();
$fieldToolTipsNOTIFICATION_QUEUE = array();
$pageTitlesNOTIFICATION_QUEUE = array();
$placeHoldersNOTIFICATION_QUEUE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"] = array();
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"] = array();
	$placeHoldersNOTIFICATION_QUEUE["Japanese"] = array();
	$pageTitlesNOTIFICATION_QUEUE["Japanese"] = array();
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["NOT_UID"] = "NOT UID";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["NOT_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["NOT_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["DEV_TYPE"] = "DEV TYPE";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["DEV_TYPE"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["DEV_TYPE"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["DEV_UID"] = "DEV UID";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["DEV_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["DEV_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["NOT_MSG"] = "NOT MSG";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["NOT_MSG"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["NOT_MSG"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["NOT_DATA"] = "NOT DATA";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["NOT_DATA"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["NOT_DATA"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["NOT_STATUS"] = "NOT STATUS";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["NOT_STATUS"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["NOT_STATUS"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["NOT_SEND_DATE"] = "NOT SEND DATE";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["NOT_SEND_DATE"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["NOT_SEND_DATE"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["APP_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["APP_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["Japanese"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsNOTIFICATION_QUEUE["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersNOTIFICATION_QUEUE["Japanese"]["DEL_INDEX"] = "";
	if (count($fieldToolTipsNOTIFICATION_QUEUE["Japanese"]))
		$tdataNOTIFICATION_QUEUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsNOTIFICATION_QUEUE["English"] = array();
	$fieldToolTipsNOTIFICATION_QUEUE["English"] = array();
	$placeHoldersNOTIFICATION_QUEUE["English"] = array();
	$pageTitlesNOTIFICATION_QUEUE["English"] = array();
	$fieldLabelsNOTIFICATION_QUEUE["English"]["NOT_UID"] = "NOT UID";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["NOT_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["NOT_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["DEV_TYPE"] = "DEV TYPE";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["DEV_TYPE"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["DEV_TYPE"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["DEV_UID"] = "DEV UID";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["DEV_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["DEV_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["NOT_MSG"] = "NOT MSG";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["NOT_MSG"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["NOT_MSG"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["NOT_DATA"] = "NOT DATA";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["NOT_DATA"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["NOT_DATA"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["NOT_STATUS"] = "NOT STATUS";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["NOT_STATUS"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["NOT_STATUS"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["NOT_SEND_DATE"] = "NOT SEND DATE";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["NOT_SEND_DATE"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["NOT_SEND_DATE"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["APP_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["APP_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE["English"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsNOTIFICATION_QUEUE["English"]["DEL_INDEX"] = "";
	$placeHoldersNOTIFICATION_QUEUE["English"]["DEL_INDEX"] = "";
	if (count($fieldToolTipsNOTIFICATION_QUEUE["English"]))
		$tdataNOTIFICATION_QUEUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsNOTIFICATION_QUEUE[""] = array();
	$fieldToolTipsNOTIFICATION_QUEUE[""] = array();
	$placeHoldersNOTIFICATION_QUEUE[""] = array();
	$pageTitlesNOTIFICATION_QUEUE[""] = array();
	$fieldLabelsNOTIFICATION_QUEUE[""]["NOT_UID"] = "NOT UID";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["NOT_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["NOT_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["DEV_TYPE"] = "DEV TYPE";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["DEV_TYPE"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["DEV_TYPE"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["DEV_UID"] = "DEV UID";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["DEV_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["DEV_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["NOT_MSG"] = "NOT MSG";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["NOT_MSG"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["NOT_MSG"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["NOT_DATA"] = "NOT DATA";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["NOT_DATA"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["NOT_DATA"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["NOT_STATUS"] = "NOT STATUS";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["NOT_STATUS"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["NOT_STATUS"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["NOT_SEND_DATE"] = "NOT SEND DATE";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["NOT_SEND_DATE"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["NOT_SEND_DATE"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["APP_UID"] = "APP UID";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["APP_UID"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["APP_UID"] = "";
	$fieldLabelsNOTIFICATION_QUEUE[""]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsNOTIFICATION_QUEUE[""]["DEL_INDEX"] = "";
	$placeHoldersNOTIFICATION_QUEUE[""]["DEL_INDEX"] = "";
	if (count($fieldToolTipsNOTIFICATION_QUEUE[""]))
		$tdataNOTIFICATION_QUEUE[".isUseToolTips"] = true;
}


	$tdataNOTIFICATION_QUEUE[".NCSearch"] = true;



$tdataNOTIFICATION_QUEUE[".shortTableName"] = "NOTIFICATION_QUEUE";
$tdataNOTIFICATION_QUEUE[".nSecOptions"] = 0;
$tdataNOTIFICATION_QUEUE[".recsPerRowPrint"] = 1;
$tdataNOTIFICATION_QUEUE[".mainTableOwnerID"] = "";
$tdataNOTIFICATION_QUEUE[".moveNext"] = 1;
$tdataNOTIFICATION_QUEUE[".entityType"] = 0;

$tdataNOTIFICATION_QUEUE[".strOriginalTableName"] = "NOTIFICATION_QUEUE";

	



$tdataNOTIFICATION_QUEUE[".showAddInPopup"] = false;

$tdataNOTIFICATION_QUEUE[".showEditInPopup"] = false;

$tdataNOTIFICATION_QUEUE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataNOTIFICATION_QUEUE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataNOTIFICATION_QUEUE[".fieldsForRegister"] = array();
	
$tdataNOTIFICATION_QUEUE[".listAjax"] = false;

	$tdataNOTIFICATION_QUEUE[".audit"] = false;

	$tdataNOTIFICATION_QUEUE[".locking"] = false;

$tdataNOTIFICATION_QUEUE[".edit"] = true;
$tdataNOTIFICATION_QUEUE[".afterEditAction"] = 1;
$tdataNOTIFICATION_QUEUE[".closePopupAfterEdit"] = 1;
$tdataNOTIFICATION_QUEUE[".afterEditActionDetTable"] = "";

$tdataNOTIFICATION_QUEUE[".add"] = true;
$tdataNOTIFICATION_QUEUE[".afterAddAction"] = 1;
$tdataNOTIFICATION_QUEUE[".closePopupAfterAdd"] = 1;
$tdataNOTIFICATION_QUEUE[".afterAddActionDetTable"] = "";

$tdataNOTIFICATION_QUEUE[".list"] = true;



$tdataNOTIFICATION_QUEUE[".reorderRecordsByHeader"] = true;



$tdataNOTIFICATION_QUEUE[".view"] = true;

$tdataNOTIFICATION_QUEUE[".import"] = true;

$tdataNOTIFICATION_QUEUE[".exportTo"] = true;

$tdataNOTIFICATION_QUEUE[".printFriendly"] = true;

$tdataNOTIFICATION_QUEUE[".delete"] = true;

$tdataNOTIFICATION_QUEUE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataNOTIFICATION_QUEUE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataNOTIFICATION_QUEUE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataNOTIFICATION_QUEUE[".searchSaving"] = false;
//

$tdataNOTIFICATION_QUEUE[".showSearchPanel"] = true;
		$tdataNOTIFICATION_QUEUE[".flexibleSearch"] = true;

$tdataNOTIFICATION_QUEUE[".isUseAjaxSuggest"] = true;

$tdataNOTIFICATION_QUEUE[".rowHighlite"] = true;



				

$tdataNOTIFICATION_QUEUE[".ajaxCodeSnippetAdded"] = false;

$tdataNOTIFICATION_QUEUE[".buttonsAdded"] = false;

$tdataNOTIFICATION_QUEUE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataNOTIFICATION_QUEUE[".isUseTimeForSearch"] = false;





$tdataNOTIFICATION_QUEUE[".allSearchFields"] = array();
$tdataNOTIFICATION_QUEUE[".filterFields"] = array();
$tdataNOTIFICATION_QUEUE[".requiredSearchFields"] = array();

$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "NOT_UID";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "DEV_TYPE";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "DEV_UID";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "NOT_MSG";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "NOT_DATA";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "NOT_STATUS";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "NOT_SEND_DATE";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "APP_UID";
	$tdataNOTIFICATION_QUEUE[".allSearchFields"][] = "DEL_INDEX";
	

$tdataNOTIFICATION_QUEUE[".googleLikeFields"] = array();
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".googleLikeFields"][] = "DEL_INDEX";


$tdataNOTIFICATION_QUEUE[".advSearchFields"] = array();
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".advSearchFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".tableType"] = "list";

$tdataNOTIFICATION_QUEUE[".printerPageOrientation"] = 0;
$tdataNOTIFICATION_QUEUE[".nPrinterPageScale"] = 100;

$tdataNOTIFICATION_QUEUE[".nPrinterSplitRecords"] = 40;

$tdataNOTIFICATION_QUEUE[".nPrinterPDFSplitRecords"] = 40;



$tdataNOTIFICATION_QUEUE[".geocodingEnabled"] = false;





$tdataNOTIFICATION_QUEUE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataNOTIFICATION_QUEUE[".pageSize"] = 20;

$tdataNOTIFICATION_QUEUE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataNOTIFICATION_QUEUE[".strOrderBy"] = $tstrOrderBy;

$tdataNOTIFICATION_QUEUE[".orderindexes"] = array();

$tdataNOTIFICATION_QUEUE[".sqlHead"] = "SELECT NOT_UID,  	DEV_TYPE,  	DEV_UID,  	NOT_MSG,  	NOT_DATA,  	NOT_STATUS,  	NOT_SEND_DATE,  	APP_UID,  	DEL_INDEX";
$tdataNOTIFICATION_QUEUE[".sqlFrom"] = "FROM NOTIFICATION_QUEUE";
$tdataNOTIFICATION_QUEUE[".sqlWhereExpr"] = "";
$tdataNOTIFICATION_QUEUE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataNOTIFICATION_QUEUE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataNOTIFICATION_QUEUE[".arrGroupsPerPage"] = $arrGPP;

$tdataNOTIFICATION_QUEUE[".highlightSearchResults"] = true;

$tableKeysNOTIFICATION_QUEUE = array();
$tableKeysNOTIFICATION_QUEUE[] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".Keys"] = $tableKeysNOTIFICATION_QUEUE;

$tdataNOTIFICATION_QUEUE[".listFields"] = array();
$tdataNOTIFICATION_QUEUE[".listFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".listFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".hideMobileList"] = array();


$tdataNOTIFICATION_QUEUE[".viewFields"] = array();
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".viewFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".addFields"] = array();
$tdataNOTIFICATION_QUEUE[".addFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".addFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".masterListFields"] = array();
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".masterListFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".inlineAddFields"] = array();
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".inlineAddFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".editFields"] = array();
$tdataNOTIFICATION_QUEUE[".editFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".editFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".inlineEditFields"] = array();
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".inlineEditFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".updateSelectedFields"] = array();
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".updateSelectedFields"][] = "DEL_INDEX";


$tdataNOTIFICATION_QUEUE[".exportFields"] = array();
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".exportFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".importFields"] = array();
$tdataNOTIFICATION_QUEUE[".importFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".importFields"][] = "DEL_INDEX";

$tdataNOTIFICATION_QUEUE[".printFields"] = array();
$tdataNOTIFICATION_QUEUE[".printFields"][] = "NOT_UID";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "DEV_UID";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "NOT_MSG";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "NOT_DATA";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "NOT_STATUS";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "NOT_SEND_DATE";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "APP_UID";
$tdataNOTIFICATION_QUEUE[".printFields"][] = "DEL_INDEX";

//	NOT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NOT_UID";
	$fdata["GoodName"] = "NOT_UID";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","NOT_UID");
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

		$fdata["strField"] = "NOT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOT_UID";

	
	
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




	$tdataNOTIFICATION_QUEUE["NOT_UID"] = $fdata;
//	DEV_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEV_TYPE";
	$fdata["GoodName"] = "DEV_TYPE";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","DEV_TYPE");
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

		$fdata["strField"] = "DEV_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataNOTIFICATION_QUEUE["DEV_TYPE"] = $fdata;
//	DEV_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEV_UID";
	$fdata["GoodName"] = "DEV_UID";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","DEV_UID");
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

		$fdata["strField"] = "DEV_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_UID";

	
	
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




	$tdataNOTIFICATION_QUEUE["DEV_UID"] = $fdata;
//	NOT_MSG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOT_MSG";
	$fdata["GoodName"] = "NOT_MSG";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","NOT_MSG");
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

		$fdata["strField"] = "NOT_MSG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOT_MSG";

	
	
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




	$tdataNOTIFICATION_QUEUE["NOT_MSG"] = $fdata;
//	NOT_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NOT_DATA";
	$fdata["GoodName"] = "NOT_DATA";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","NOT_DATA");
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

		$fdata["strField"] = "NOT_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOT_DATA";

	
	
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




	$tdataNOTIFICATION_QUEUE["NOT_DATA"] = $fdata;
//	NOT_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOT_STATUS";
	$fdata["GoodName"] = "NOT_STATUS";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","NOT_STATUS");
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

		$fdata["strField"] = "NOT_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOT_STATUS";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataNOTIFICATION_QUEUE["NOT_STATUS"] = $fdata;
//	NOT_SEND_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOT_SEND_DATE";
	$fdata["GoodName"] = "NOT_SEND_DATE";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","NOT_SEND_DATE");
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

		$fdata["strField"] = "NOT_SEND_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOT_SEND_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataNOTIFICATION_QUEUE["NOT_SEND_DATE"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","APP_UID");
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




	$tdataNOTIFICATION_QUEUE["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "NOTIFICATION_QUEUE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_QUEUE","DEL_INDEX");
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




	$tdataNOTIFICATION_QUEUE["DEL_INDEX"] = $fdata;


$tables_data["NOTIFICATION_QUEUE"]=&$tdataNOTIFICATION_QUEUE;
$field_labels["NOTIFICATION_QUEUE"] = &$fieldLabelsNOTIFICATION_QUEUE;
$fieldToolTips["NOTIFICATION_QUEUE"] = &$fieldToolTipsNOTIFICATION_QUEUE;
$placeHolders["NOTIFICATION_QUEUE"] = &$placeHoldersNOTIFICATION_QUEUE;
$page_titles["NOTIFICATION_QUEUE"] = &$pageTitlesNOTIFICATION_QUEUE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["NOTIFICATION_QUEUE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["NOTIFICATION_QUEUE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_NOTIFICATION_QUEUE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NOT_UID,  	DEV_TYPE,  	DEV_UID,  	NOT_MSG,  	NOT_DATA,  	NOT_STATUS,  	NOT_SEND_DATE,  	APP_UID,  	DEL_INDEX";
$proto0["m_strFrom"] = "FROM NOTIFICATION_QUEUE";
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
	"m_strName" => "NOT_UID",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto6["m_sql"] = "NOT_UID";
$proto6["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_TYPE",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto8["m_sql"] = "DEV_TYPE";
$proto8["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_UID",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto10["m_sql"] = "DEV_UID";
$proto10["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOT_MSG",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto12["m_sql"] = "NOT_MSG";
$proto12["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NOT_DATA",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto14["m_sql"] = "NOT_DATA";
$proto14["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOT_STATUS",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto16["m_sql"] = "NOT_STATUS";
$proto16["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOT_SEND_DATE",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto18["m_sql"] = "NOT_SEND_DATE";
$proto18["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto20["m_sql"] = "APP_UID";
$proto20["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "NOTIFICATION_QUEUE",
	"m_srcTableName" => "NOTIFICATION_QUEUE"
));

$proto22["m_sql"] = "DEL_INDEX";
$proto22["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "NOTIFICATION_QUEUE";
$proto25["m_srcTableName"] = "NOTIFICATION_QUEUE";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "NOT_UID";
$proto25["m_columns"][] = "DEV_TYPE";
$proto25["m_columns"][] = "DEV_UID";
$proto25["m_columns"][] = "NOT_MSG";
$proto25["m_columns"][] = "NOT_DATA";
$proto25["m_columns"][] = "NOT_STATUS";
$proto25["m_columns"][] = "NOT_SEND_DATE";
$proto25["m_columns"][] = "APP_UID";
$proto25["m_columns"][] = "DEL_INDEX";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "NOTIFICATION_QUEUE";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "NOTIFICATION_QUEUE";
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
$proto0["m_srcTableName"]="NOTIFICATION_QUEUE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_NOTIFICATION_QUEUE = createSqlQuery_NOTIFICATION_QUEUE();


	
						;

									

$tdataNOTIFICATION_QUEUE[".sqlquery"] = $queryData_NOTIFICATION_QUEUE;

$tableEvents["NOTIFICATION_QUEUE"] = new eventsBase;
$tdataNOTIFICATION_QUEUE[".hasEvents"] = false;

?>
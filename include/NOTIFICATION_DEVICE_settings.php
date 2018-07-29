<?php
require_once(getabspath("classes/cipherer.php"));




$tdataNOTIFICATION_DEVICE = array();
	$tdataNOTIFICATION_DEVICE[".truncateText"] = true;
	$tdataNOTIFICATION_DEVICE[".NumberOfChars"] = 80;
	$tdataNOTIFICATION_DEVICE[".ShortName"] = "NOTIFICATION_DEVICE";
	$tdataNOTIFICATION_DEVICE[".OwnerID"] = "";
	$tdataNOTIFICATION_DEVICE[".OriginalTable"] = "NOTIFICATION_DEVICE";

//	field labels
$fieldLabelsNOTIFICATION_DEVICE = array();
$fieldToolTipsNOTIFICATION_DEVICE = array();
$pageTitlesNOTIFICATION_DEVICE = array();
$placeHoldersNOTIFICATION_DEVICE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"] = array();
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"] = array();
	$placeHoldersNOTIFICATION_DEVICE["Japanese"] = array();
	$pageTitlesNOTIFICATION_DEVICE["Japanese"] = array();
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["DEV_UID"] = "DEV UID";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["DEV_UID"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["DEV_UID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["USR_UID"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["USR_UID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["SYS_LANG"] = "SYS LANG";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["SYS_LANG"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["SYS_LANG"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["DEV_REG_ID"] = "DEV REG ID";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["DEV_REG_ID"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["DEV_REG_ID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["DEV_TYPE"] = "DEV TYPE";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["DEV_TYPE"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["DEV_TYPE"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["DEV_CREATE"] = "DEV CREATE";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["DEV_CREATE"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["DEV_CREATE"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["Japanese"]["DEV_UPDATE"] = "DEV UPDATE";
	$fieldToolTipsNOTIFICATION_DEVICE["Japanese"]["DEV_UPDATE"] = "";
	$placeHoldersNOTIFICATION_DEVICE["Japanese"]["DEV_UPDATE"] = "";
	if (count($fieldToolTipsNOTIFICATION_DEVICE["Japanese"]))
		$tdataNOTIFICATION_DEVICE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsNOTIFICATION_DEVICE["English"] = array();
	$fieldToolTipsNOTIFICATION_DEVICE["English"] = array();
	$placeHoldersNOTIFICATION_DEVICE["English"] = array();
	$pageTitlesNOTIFICATION_DEVICE["English"] = array();
	$fieldLabelsNOTIFICATION_DEVICE["English"]["DEV_UID"] = "DEV UID";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["DEV_UID"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["DEV_UID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["USR_UID"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["USR_UID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["English"]["SYS_LANG"] = "SYS LANG";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["SYS_LANG"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["SYS_LANG"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["English"]["DEV_REG_ID"] = "DEV REG ID";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["DEV_REG_ID"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["DEV_REG_ID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["English"]["DEV_TYPE"] = "DEV TYPE";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["DEV_TYPE"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["DEV_TYPE"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["English"]["DEV_CREATE"] = "DEV CREATE";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["DEV_CREATE"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["DEV_CREATE"] = "";
	$fieldLabelsNOTIFICATION_DEVICE["English"]["DEV_UPDATE"] = "DEV UPDATE";
	$fieldToolTipsNOTIFICATION_DEVICE["English"]["DEV_UPDATE"] = "";
	$placeHoldersNOTIFICATION_DEVICE["English"]["DEV_UPDATE"] = "";
	if (count($fieldToolTipsNOTIFICATION_DEVICE["English"]))
		$tdataNOTIFICATION_DEVICE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsNOTIFICATION_DEVICE[""] = array();
	$fieldToolTipsNOTIFICATION_DEVICE[""] = array();
	$placeHoldersNOTIFICATION_DEVICE[""] = array();
	$pageTitlesNOTIFICATION_DEVICE[""] = array();
	$fieldLabelsNOTIFICATION_DEVICE[""]["DEV_UID"] = "DEV UID";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["DEV_UID"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["DEV_UID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE[""]["USR_UID"] = "USR UID";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["USR_UID"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["USR_UID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE[""]["SYS_LANG"] = "SYS LANG";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["SYS_LANG"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["SYS_LANG"] = "";
	$fieldLabelsNOTIFICATION_DEVICE[""]["DEV_REG_ID"] = "DEV REG ID";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["DEV_REG_ID"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["DEV_REG_ID"] = "";
	$fieldLabelsNOTIFICATION_DEVICE[""]["DEV_TYPE"] = "DEV TYPE";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["DEV_TYPE"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["DEV_TYPE"] = "";
	$fieldLabelsNOTIFICATION_DEVICE[""]["DEV_CREATE"] = "DEV CREATE";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["DEV_CREATE"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["DEV_CREATE"] = "";
	$fieldLabelsNOTIFICATION_DEVICE[""]["DEV_UPDATE"] = "DEV UPDATE";
	$fieldToolTipsNOTIFICATION_DEVICE[""]["DEV_UPDATE"] = "";
	$placeHoldersNOTIFICATION_DEVICE[""]["DEV_UPDATE"] = "";
	if (count($fieldToolTipsNOTIFICATION_DEVICE[""]))
		$tdataNOTIFICATION_DEVICE[".isUseToolTips"] = true;
}


	$tdataNOTIFICATION_DEVICE[".NCSearch"] = true;



$tdataNOTIFICATION_DEVICE[".shortTableName"] = "NOTIFICATION_DEVICE";
$tdataNOTIFICATION_DEVICE[".nSecOptions"] = 0;
$tdataNOTIFICATION_DEVICE[".recsPerRowPrint"] = 1;
$tdataNOTIFICATION_DEVICE[".mainTableOwnerID"] = "";
$tdataNOTIFICATION_DEVICE[".moveNext"] = 1;
$tdataNOTIFICATION_DEVICE[".entityType"] = 0;

$tdataNOTIFICATION_DEVICE[".strOriginalTableName"] = "NOTIFICATION_DEVICE";

	



$tdataNOTIFICATION_DEVICE[".showAddInPopup"] = false;

$tdataNOTIFICATION_DEVICE[".showEditInPopup"] = false;

$tdataNOTIFICATION_DEVICE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataNOTIFICATION_DEVICE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataNOTIFICATION_DEVICE[".fieldsForRegister"] = array();
	
$tdataNOTIFICATION_DEVICE[".listAjax"] = false;

	$tdataNOTIFICATION_DEVICE[".audit"] = false;

	$tdataNOTIFICATION_DEVICE[".locking"] = false;

$tdataNOTIFICATION_DEVICE[".edit"] = true;
$tdataNOTIFICATION_DEVICE[".afterEditAction"] = 1;
$tdataNOTIFICATION_DEVICE[".closePopupAfterEdit"] = 1;
$tdataNOTIFICATION_DEVICE[".afterEditActionDetTable"] = "";

$tdataNOTIFICATION_DEVICE[".add"] = true;
$tdataNOTIFICATION_DEVICE[".afterAddAction"] = 1;
$tdataNOTIFICATION_DEVICE[".closePopupAfterAdd"] = 1;
$tdataNOTIFICATION_DEVICE[".afterAddActionDetTable"] = "";

$tdataNOTIFICATION_DEVICE[".list"] = true;



$tdataNOTIFICATION_DEVICE[".reorderRecordsByHeader"] = true;



$tdataNOTIFICATION_DEVICE[".view"] = true;

$tdataNOTIFICATION_DEVICE[".import"] = true;

$tdataNOTIFICATION_DEVICE[".exportTo"] = true;

$tdataNOTIFICATION_DEVICE[".printFriendly"] = true;

$tdataNOTIFICATION_DEVICE[".delete"] = true;

$tdataNOTIFICATION_DEVICE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataNOTIFICATION_DEVICE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataNOTIFICATION_DEVICE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataNOTIFICATION_DEVICE[".searchSaving"] = false;
//

$tdataNOTIFICATION_DEVICE[".showSearchPanel"] = true;
		$tdataNOTIFICATION_DEVICE[".flexibleSearch"] = true;

$tdataNOTIFICATION_DEVICE[".isUseAjaxSuggest"] = true;

$tdataNOTIFICATION_DEVICE[".rowHighlite"] = true;



				

$tdataNOTIFICATION_DEVICE[".ajaxCodeSnippetAdded"] = false;

$tdataNOTIFICATION_DEVICE[".buttonsAdded"] = false;

$tdataNOTIFICATION_DEVICE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataNOTIFICATION_DEVICE[".isUseTimeForSearch"] = false;





$tdataNOTIFICATION_DEVICE[".allSearchFields"] = array();
$tdataNOTIFICATION_DEVICE[".filterFields"] = array();
$tdataNOTIFICATION_DEVICE[".requiredSearchFields"] = array();

$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "DEV_UID";
	$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "USR_UID";
	$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "SYS_LANG";
	$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "DEV_REG_ID";
	$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "DEV_TYPE";
	$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "DEV_CREATE";
	$tdataNOTIFICATION_DEVICE[".allSearchFields"][] = "DEV_UPDATE";
	

$tdataNOTIFICATION_DEVICE[".googleLikeFields"] = array();
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".googleLikeFields"][] = "DEV_UPDATE";


$tdataNOTIFICATION_DEVICE[".advSearchFields"] = array();
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".advSearchFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".tableType"] = "list";

$tdataNOTIFICATION_DEVICE[".printerPageOrientation"] = 0;
$tdataNOTIFICATION_DEVICE[".nPrinterPageScale"] = 100;

$tdataNOTIFICATION_DEVICE[".nPrinterSplitRecords"] = 40;

$tdataNOTIFICATION_DEVICE[".nPrinterPDFSplitRecords"] = 40;



$tdataNOTIFICATION_DEVICE[".geocodingEnabled"] = false;





$tdataNOTIFICATION_DEVICE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataNOTIFICATION_DEVICE[".pageSize"] = 20;

$tdataNOTIFICATION_DEVICE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataNOTIFICATION_DEVICE[".strOrderBy"] = $tstrOrderBy;

$tdataNOTIFICATION_DEVICE[".orderindexes"] = array();

$tdataNOTIFICATION_DEVICE[".sqlHead"] = "SELECT DEV_UID,  	USR_UID,  	SYS_LANG,  	DEV_REG_ID,  	DEV_TYPE,  	DEV_CREATE,  	DEV_UPDATE";
$tdataNOTIFICATION_DEVICE[".sqlFrom"] = "FROM NOTIFICATION_DEVICE";
$tdataNOTIFICATION_DEVICE[".sqlWhereExpr"] = "";
$tdataNOTIFICATION_DEVICE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataNOTIFICATION_DEVICE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataNOTIFICATION_DEVICE[".arrGroupsPerPage"] = $arrGPP;

$tdataNOTIFICATION_DEVICE[".highlightSearchResults"] = true;

$tableKeysNOTIFICATION_DEVICE = array();
$tableKeysNOTIFICATION_DEVICE[] = "DEV_UID";
$tableKeysNOTIFICATION_DEVICE[] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".Keys"] = $tableKeysNOTIFICATION_DEVICE;

$tdataNOTIFICATION_DEVICE[".listFields"] = array();
$tdataNOTIFICATION_DEVICE[".listFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".listFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".listFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".listFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".listFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".listFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".listFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".hideMobileList"] = array();


$tdataNOTIFICATION_DEVICE[".viewFields"] = array();
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".viewFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".addFields"] = array();
$tdataNOTIFICATION_DEVICE[".addFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".addFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".addFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".addFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".addFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".addFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".addFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".masterListFields"] = array();
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".masterListFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".inlineAddFields"] = array();
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".inlineAddFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".editFields"] = array();
$tdataNOTIFICATION_DEVICE[".editFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".editFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".editFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".editFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".editFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".editFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".editFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".inlineEditFields"] = array();
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".inlineEditFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".updateSelectedFields"] = array();
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".updateSelectedFields"][] = "DEV_UPDATE";


$tdataNOTIFICATION_DEVICE[".exportFields"] = array();
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".exportFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".importFields"] = array();
$tdataNOTIFICATION_DEVICE[".importFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".importFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".importFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".importFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".importFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".importFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".importFields"][] = "DEV_UPDATE";

$tdataNOTIFICATION_DEVICE[".printFields"] = array();
$tdataNOTIFICATION_DEVICE[".printFields"][] = "DEV_UID";
$tdataNOTIFICATION_DEVICE[".printFields"][] = "USR_UID";
$tdataNOTIFICATION_DEVICE[".printFields"][] = "SYS_LANG";
$tdataNOTIFICATION_DEVICE[".printFields"][] = "DEV_REG_ID";
$tdataNOTIFICATION_DEVICE[".printFields"][] = "DEV_TYPE";
$tdataNOTIFICATION_DEVICE[".printFields"][] = "DEV_CREATE";
$tdataNOTIFICATION_DEVICE[".printFields"][] = "DEV_UPDATE";

//	DEV_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DEV_UID";
	$fdata["GoodName"] = "DEV_UID";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","DEV_UID");
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




	$tdataNOTIFICATION_DEVICE["DEV_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","USR_UID");
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

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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




	$tdataNOTIFICATION_DEVICE["USR_UID"] = $fdata;
//	SYS_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SYS_LANG";
	$fdata["GoodName"] = "SYS_LANG";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","SYS_LANG");
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

		$fdata["strField"] = "SYS_LANG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_LANG";

	
	
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




	$tdataNOTIFICATION_DEVICE["SYS_LANG"] = $fdata;
//	DEV_REG_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEV_REG_ID";
	$fdata["GoodName"] = "DEV_REG_ID";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","DEV_REG_ID");
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

		$fdata["strField"] = "DEV_REG_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_REG_ID";

	
	
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




	$tdataNOTIFICATION_DEVICE["DEV_REG_ID"] = $fdata;
//	DEV_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DEV_TYPE";
	$fdata["GoodName"] = "DEV_TYPE";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","DEV_TYPE");
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




	$tdataNOTIFICATION_DEVICE["DEV_TYPE"] = $fdata;
//	DEV_CREATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DEV_CREATE";
	$fdata["GoodName"] = "DEV_CREATE";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","DEV_CREATE");
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

		$fdata["strField"] = "DEV_CREATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_CREATE";

	
	
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




	$tdataNOTIFICATION_DEVICE["DEV_CREATE"] = $fdata;
//	DEV_UPDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DEV_UPDATE";
	$fdata["GoodName"] = "DEV_UPDATE";
	$fdata["ownerTable"] = "NOTIFICATION_DEVICE";
	$fdata["Label"] = GetFieldLabel("NOTIFICATION_DEVICE","DEV_UPDATE");
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

		$fdata["strField"] = "DEV_UPDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_UPDATE";

	
	
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




	$tdataNOTIFICATION_DEVICE["DEV_UPDATE"] = $fdata;


$tables_data["NOTIFICATION_DEVICE"]=&$tdataNOTIFICATION_DEVICE;
$field_labels["NOTIFICATION_DEVICE"] = &$fieldLabelsNOTIFICATION_DEVICE;
$fieldToolTips["NOTIFICATION_DEVICE"] = &$fieldToolTipsNOTIFICATION_DEVICE;
$placeHolders["NOTIFICATION_DEVICE"] = &$placeHoldersNOTIFICATION_DEVICE;
$page_titles["NOTIFICATION_DEVICE"] = &$pageTitlesNOTIFICATION_DEVICE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["NOTIFICATION_DEVICE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["NOTIFICATION_DEVICE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_NOTIFICATION_DEVICE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DEV_UID,  	USR_UID,  	SYS_LANG,  	DEV_REG_ID,  	DEV_TYPE,  	DEV_CREATE,  	DEV_UPDATE";
$proto0["m_strFrom"] = "FROM NOTIFICATION_DEVICE";
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
	"m_strName" => "DEV_UID",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto6["m_sql"] = "DEV_UID";
$proto6["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_LANG",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto10["m_sql"] = "SYS_LANG";
$proto10["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_REG_ID",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto12["m_sql"] = "DEV_REG_ID";
$proto12["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_TYPE",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto14["m_sql"] = "DEV_TYPE";
$proto14["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_CREATE",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto16["m_sql"] = "DEV_CREATE";
$proto16["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_UPDATE",
	"m_strTable" => "NOTIFICATION_DEVICE",
	"m_srcTableName" => "NOTIFICATION_DEVICE"
));

$proto18["m_sql"] = "DEV_UPDATE";
$proto18["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "NOTIFICATION_DEVICE";
$proto21["m_srcTableName"] = "NOTIFICATION_DEVICE";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "DEV_UID";
$proto21["m_columns"][] = "USR_UID";
$proto21["m_columns"][] = "SYS_LANG";
$proto21["m_columns"][] = "DEV_REG_ID";
$proto21["m_columns"][] = "DEV_TYPE";
$proto21["m_columns"][] = "DEV_CREATE";
$proto21["m_columns"][] = "DEV_UPDATE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "NOTIFICATION_DEVICE";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "NOTIFICATION_DEVICE";
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
$proto0["m_srcTableName"]="NOTIFICATION_DEVICE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_NOTIFICATION_DEVICE = createSqlQuery_NOTIFICATION_DEVICE();


	
						;

							

$tdataNOTIFICATION_DEVICE[".sqlquery"] = $queryData_NOTIFICATION_DEVICE;

$tableEvents["NOTIFICATION_DEVICE"] = new eventsBase;
$tdataNOTIFICATION_DEVICE[".hasEvents"] = false;

?>
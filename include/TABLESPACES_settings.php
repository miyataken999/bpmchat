<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTABLESPACES = array();
	$tdataTABLESPACES[".truncateText"] = true;
	$tdataTABLESPACES[".NumberOfChars"] = 80;
	$tdataTABLESPACES[".ShortName"] = "TABLESPACES";
	$tdataTABLESPACES[".OwnerID"] = "";
	$tdataTABLESPACES[".OriginalTable"] = "TABLESPACES";

//	field labels
$fieldLabelsTABLESPACES = array();
$fieldToolTipsTABLESPACES = array();
$pageTitlesTABLESPACES = array();
$placeHoldersTABLESPACES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTABLESPACES["Japanese"] = array();
	$fieldToolTipsTABLESPACES["Japanese"] = array();
	$placeHoldersTABLESPACES["Japanese"] = array();
	$pageTitlesTABLESPACES["Japanese"] = array();
	$fieldLabelsTABLESPACES["Japanese"]["TABLESPACE_NAME"] = "TABLESPACE NAME";
	$fieldToolTipsTABLESPACES["Japanese"]["TABLESPACE_NAME"] = "";
	$placeHoldersTABLESPACES["Japanese"]["TABLESPACE_NAME"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["ENGINE"] = "ENGINE";
	$fieldToolTipsTABLESPACES["Japanese"]["ENGINE"] = "";
	$placeHoldersTABLESPACES["Japanese"]["ENGINE"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["TABLESPACE_TYPE"] = "TABLESPACE TYPE";
	$fieldToolTipsTABLESPACES["Japanese"]["TABLESPACE_TYPE"] = "";
	$placeHoldersTABLESPACES["Japanese"]["TABLESPACE_TYPE"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["LOGFILE_GROUP_NAME"] = "LOGFILE GROUP NAME";
	$fieldToolTipsTABLESPACES["Japanese"]["LOGFILE_GROUP_NAME"] = "";
	$placeHoldersTABLESPACES["Japanese"]["LOGFILE_GROUP_NAME"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["EXTENT_SIZE"] = "EXTENT SIZE";
	$fieldToolTipsTABLESPACES["Japanese"]["EXTENT_SIZE"] = "";
	$placeHoldersTABLESPACES["Japanese"]["EXTENT_SIZE"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["AUTOEXTEND_SIZE"] = "AUTOEXTEND SIZE";
	$fieldToolTipsTABLESPACES["Japanese"]["AUTOEXTEND_SIZE"] = "";
	$placeHoldersTABLESPACES["Japanese"]["AUTOEXTEND_SIZE"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["MAXIMUM_SIZE"] = "MAXIMUM SIZE";
	$fieldToolTipsTABLESPACES["Japanese"]["MAXIMUM_SIZE"] = "";
	$placeHoldersTABLESPACES["Japanese"]["MAXIMUM_SIZE"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["NODEGROUP_ID"] = "NODEGROUP ID";
	$fieldToolTipsTABLESPACES["Japanese"]["NODEGROUP_ID"] = "";
	$placeHoldersTABLESPACES["Japanese"]["NODEGROUP_ID"] = "";
	$fieldLabelsTABLESPACES["Japanese"]["TABLESPACE_COMMENT"] = "TABLESPACE COMMENT";
	$fieldToolTipsTABLESPACES["Japanese"]["TABLESPACE_COMMENT"] = "";
	$placeHoldersTABLESPACES["Japanese"]["TABLESPACE_COMMENT"] = "";
	if (count($fieldToolTipsTABLESPACES["Japanese"]))
		$tdataTABLESPACES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTABLESPACES["English"] = array();
	$fieldToolTipsTABLESPACES["English"] = array();
	$placeHoldersTABLESPACES["English"] = array();
	$pageTitlesTABLESPACES["English"] = array();
	$fieldLabelsTABLESPACES["English"]["TABLESPACE_NAME"] = "TABLESPACE NAME";
	$fieldToolTipsTABLESPACES["English"]["TABLESPACE_NAME"] = "";
	$placeHoldersTABLESPACES["English"]["TABLESPACE_NAME"] = "";
	$fieldLabelsTABLESPACES["English"]["ENGINE"] = "ENGINE";
	$fieldToolTipsTABLESPACES["English"]["ENGINE"] = "";
	$placeHoldersTABLESPACES["English"]["ENGINE"] = "";
	$fieldLabelsTABLESPACES["English"]["TABLESPACE_TYPE"] = "TABLESPACE TYPE";
	$fieldToolTipsTABLESPACES["English"]["TABLESPACE_TYPE"] = "";
	$placeHoldersTABLESPACES["English"]["TABLESPACE_TYPE"] = "";
	$fieldLabelsTABLESPACES["English"]["LOGFILE_GROUP_NAME"] = "LOGFILE GROUP NAME";
	$fieldToolTipsTABLESPACES["English"]["LOGFILE_GROUP_NAME"] = "";
	$placeHoldersTABLESPACES["English"]["LOGFILE_GROUP_NAME"] = "";
	$fieldLabelsTABLESPACES["English"]["EXTENT_SIZE"] = "EXTENT SIZE";
	$fieldToolTipsTABLESPACES["English"]["EXTENT_SIZE"] = "";
	$placeHoldersTABLESPACES["English"]["EXTENT_SIZE"] = "";
	$fieldLabelsTABLESPACES["English"]["AUTOEXTEND_SIZE"] = "AUTOEXTEND SIZE";
	$fieldToolTipsTABLESPACES["English"]["AUTOEXTEND_SIZE"] = "";
	$placeHoldersTABLESPACES["English"]["AUTOEXTEND_SIZE"] = "";
	$fieldLabelsTABLESPACES["English"]["MAXIMUM_SIZE"] = "MAXIMUM SIZE";
	$fieldToolTipsTABLESPACES["English"]["MAXIMUM_SIZE"] = "";
	$placeHoldersTABLESPACES["English"]["MAXIMUM_SIZE"] = "";
	$fieldLabelsTABLESPACES["English"]["NODEGROUP_ID"] = "NODEGROUP ID";
	$fieldToolTipsTABLESPACES["English"]["NODEGROUP_ID"] = "";
	$placeHoldersTABLESPACES["English"]["NODEGROUP_ID"] = "";
	$fieldLabelsTABLESPACES["English"]["TABLESPACE_COMMENT"] = "TABLESPACE COMMENT";
	$fieldToolTipsTABLESPACES["English"]["TABLESPACE_COMMENT"] = "";
	$placeHoldersTABLESPACES["English"]["TABLESPACE_COMMENT"] = "";
	if (count($fieldToolTipsTABLESPACES["English"]))
		$tdataTABLESPACES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTABLESPACES[""] = array();
	$fieldToolTipsTABLESPACES[""] = array();
	$placeHoldersTABLESPACES[""] = array();
	$pageTitlesTABLESPACES[""] = array();
	$fieldLabelsTABLESPACES[""]["TABLESPACE_NAME"] = "TABLESPACE NAME";
	$fieldToolTipsTABLESPACES[""]["TABLESPACE_NAME"] = "";
	$placeHoldersTABLESPACES[""]["TABLESPACE_NAME"] = "";
	$fieldLabelsTABLESPACES[""]["ENGINE"] = "ENGINE";
	$fieldToolTipsTABLESPACES[""]["ENGINE"] = "";
	$placeHoldersTABLESPACES[""]["ENGINE"] = "";
	$fieldLabelsTABLESPACES[""]["TABLESPACE_TYPE"] = "TABLESPACE TYPE";
	$fieldToolTipsTABLESPACES[""]["TABLESPACE_TYPE"] = "";
	$placeHoldersTABLESPACES[""]["TABLESPACE_TYPE"] = "";
	$fieldLabelsTABLESPACES[""]["LOGFILE_GROUP_NAME"] = "LOGFILE GROUP NAME";
	$fieldToolTipsTABLESPACES[""]["LOGFILE_GROUP_NAME"] = "";
	$placeHoldersTABLESPACES[""]["LOGFILE_GROUP_NAME"] = "";
	$fieldLabelsTABLESPACES[""]["EXTENT_SIZE"] = "EXTENT SIZE";
	$fieldToolTipsTABLESPACES[""]["EXTENT_SIZE"] = "";
	$placeHoldersTABLESPACES[""]["EXTENT_SIZE"] = "";
	$fieldLabelsTABLESPACES[""]["AUTOEXTEND_SIZE"] = "AUTOEXTEND SIZE";
	$fieldToolTipsTABLESPACES[""]["AUTOEXTEND_SIZE"] = "";
	$placeHoldersTABLESPACES[""]["AUTOEXTEND_SIZE"] = "";
	$fieldLabelsTABLESPACES[""]["MAXIMUM_SIZE"] = "MAXIMUM SIZE";
	$fieldToolTipsTABLESPACES[""]["MAXIMUM_SIZE"] = "";
	$placeHoldersTABLESPACES[""]["MAXIMUM_SIZE"] = "";
	$fieldLabelsTABLESPACES[""]["NODEGROUP_ID"] = "NODEGROUP ID";
	$fieldToolTipsTABLESPACES[""]["NODEGROUP_ID"] = "";
	$placeHoldersTABLESPACES[""]["NODEGROUP_ID"] = "";
	$fieldLabelsTABLESPACES[""]["TABLESPACE_COMMENT"] = "TABLESPACE COMMENT";
	$fieldToolTipsTABLESPACES[""]["TABLESPACE_COMMENT"] = "";
	$placeHoldersTABLESPACES[""]["TABLESPACE_COMMENT"] = "";
	if (count($fieldToolTipsTABLESPACES[""]))
		$tdataTABLESPACES[".isUseToolTips"] = true;
}


	$tdataTABLESPACES[".NCSearch"] = true;



$tdataTABLESPACES[".shortTableName"] = "TABLESPACES";
$tdataTABLESPACES[".nSecOptions"] = 0;
$tdataTABLESPACES[".recsPerRowPrint"] = 1;
$tdataTABLESPACES[".mainTableOwnerID"] = "";
$tdataTABLESPACES[".moveNext"] = 1;
$tdataTABLESPACES[".entityType"] = 0;

$tdataTABLESPACES[".strOriginalTableName"] = "TABLESPACES";

	



$tdataTABLESPACES[".showAddInPopup"] = false;

$tdataTABLESPACES[".showEditInPopup"] = false;

$tdataTABLESPACES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTABLESPACES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTABLESPACES[".fieldsForRegister"] = array();
	
$tdataTABLESPACES[".listAjax"] = false;

	$tdataTABLESPACES[".audit"] = false;

	$tdataTABLESPACES[".locking"] = false;



$tdataTABLESPACES[".list"] = true;



$tdataTABLESPACES[".reorderRecordsByHeader"] = true;




$tdataTABLESPACES[".import"] = true;

$tdataTABLESPACES[".exportTo"] = true;

$tdataTABLESPACES[".printFriendly"] = true;


$tdataTABLESPACES[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTABLESPACES[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTABLESPACES[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTABLESPACES[".searchSaving"] = false;
//

$tdataTABLESPACES[".showSearchPanel"] = true;
		$tdataTABLESPACES[".flexibleSearch"] = true;

$tdataTABLESPACES[".isUseAjaxSuggest"] = true;

$tdataTABLESPACES[".rowHighlite"] = true;



				

$tdataTABLESPACES[".ajaxCodeSnippetAdded"] = false;

$tdataTABLESPACES[".buttonsAdded"] = false;

$tdataTABLESPACES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTABLESPACES[".isUseTimeForSearch"] = false;





$tdataTABLESPACES[".allSearchFields"] = array();
$tdataTABLESPACES[".filterFields"] = array();
$tdataTABLESPACES[".requiredSearchFields"] = array();

$tdataTABLESPACES[".allSearchFields"][] = "TABLESPACE_NAME";
	$tdataTABLESPACES[".allSearchFields"][] = "ENGINE";
	$tdataTABLESPACES[".allSearchFields"][] = "TABLESPACE_TYPE";
	$tdataTABLESPACES[".allSearchFields"][] = "LOGFILE_GROUP_NAME";
	$tdataTABLESPACES[".allSearchFields"][] = "EXTENT_SIZE";
	$tdataTABLESPACES[".allSearchFields"][] = "AUTOEXTEND_SIZE";
	$tdataTABLESPACES[".allSearchFields"][] = "MAXIMUM_SIZE";
	$tdataTABLESPACES[".allSearchFields"][] = "NODEGROUP_ID";
	$tdataTABLESPACES[".allSearchFields"][] = "TABLESPACE_COMMENT";
	

$tdataTABLESPACES[".googleLikeFields"] = array();
$tdataTABLESPACES[".googleLikeFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".googleLikeFields"][] = "ENGINE";
$tdataTABLESPACES[".googleLikeFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".googleLikeFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".googleLikeFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".googleLikeFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".googleLikeFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".googleLikeFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".googleLikeFields"][] = "TABLESPACE_COMMENT";


$tdataTABLESPACES[".advSearchFields"] = array();
$tdataTABLESPACES[".advSearchFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".advSearchFields"][] = "ENGINE";
$tdataTABLESPACES[".advSearchFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".advSearchFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".advSearchFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".advSearchFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".advSearchFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".advSearchFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".advSearchFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".tableType"] = "list";

$tdataTABLESPACES[".printerPageOrientation"] = 0;
$tdataTABLESPACES[".nPrinterPageScale"] = 100;

$tdataTABLESPACES[".nPrinterSplitRecords"] = 40;

$tdataTABLESPACES[".nPrinterPDFSplitRecords"] = 40;



$tdataTABLESPACES[".geocodingEnabled"] = false;





$tdataTABLESPACES[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataTABLESPACES[".pageSize"] = 20;

$tdataTABLESPACES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTABLESPACES[".strOrderBy"] = $tstrOrderBy;

$tdataTABLESPACES[".orderindexes"] = array();

$tdataTABLESPACES[".sqlHead"] = "SELECT TABLESPACE_NAME,  	ENGINE,  	TABLESPACE_TYPE,  	LOGFILE_GROUP_NAME,  	EXTENT_SIZE,  	AUTOEXTEND_SIZE,  	MAXIMUM_SIZE,  	NODEGROUP_ID,  	TABLESPACE_COMMENT";
$tdataTABLESPACES[".sqlFrom"] = "FROM TABLESPACES";
$tdataTABLESPACES[".sqlWhereExpr"] = "";
$tdataTABLESPACES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTABLESPACES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTABLESPACES[".arrGroupsPerPage"] = $arrGPP;

$tdataTABLESPACES[".highlightSearchResults"] = true;

$tableKeysTABLESPACES = array();
$tdataTABLESPACES[".Keys"] = $tableKeysTABLESPACES;

$tdataTABLESPACES[".listFields"] = array();
$tdataTABLESPACES[".listFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".listFields"][] = "ENGINE";
$tdataTABLESPACES[".listFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".listFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".listFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".listFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".listFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".listFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".listFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".hideMobileList"] = array();


$tdataTABLESPACES[".viewFields"] = array();
$tdataTABLESPACES[".viewFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".viewFields"][] = "ENGINE";
$tdataTABLESPACES[".viewFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".viewFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".viewFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".viewFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".viewFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".viewFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".viewFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".addFields"] = array();
$tdataTABLESPACES[".addFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".addFields"][] = "ENGINE";
$tdataTABLESPACES[".addFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".addFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".addFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".addFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".addFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".addFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".addFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".masterListFields"] = array();
$tdataTABLESPACES[".masterListFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".masterListFields"][] = "ENGINE";
$tdataTABLESPACES[".masterListFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".masterListFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".masterListFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".masterListFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".masterListFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".masterListFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".masterListFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".inlineAddFields"] = array();
$tdataTABLESPACES[".inlineAddFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".inlineAddFields"][] = "ENGINE";
$tdataTABLESPACES[".inlineAddFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".inlineAddFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".inlineAddFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".inlineAddFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".inlineAddFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".inlineAddFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".inlineAddFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".editFields"] = array();
$tdataTABLESPACES[".editFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".editFields"][] = "ENGINE";
$tdataTABLESPACES[".editFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".editFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".editFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".editFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".editFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".editFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".editFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".inlineEditFields"] = array();
$tdataTABLESPACES[".inlineEditFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".inlineEditFields"][] = "ENGINE";
$tdataTABLESPACES[".inlineEditFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".inlineEditFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".inlineEditFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".inlineEditFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".inlineEditFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".inlineEditFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".inlineEditFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".updateSelectedFields"] = array();
$tdataTABLESPACES[".updateSelectedFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".updateSelectedFields"][] = "ENGINE";
$tdataTABLESPACES[".updateSelectedFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".updateSelectedFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".updateSelectedFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".updateSelectedFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".updateSelectedFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".updateSelectedFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".updateSelectedFields"][] = "TABLESPACE_COMMENT";


$tdataTABLESPACES[".exportFields"] = array();
$tdataTABLESPACES[".exportFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".exportFields"][] = "ENGINE";
$tdataTABLESPACES[".exportFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".exportFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".exportFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".exportFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".exportFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".exportFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".exportFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".importFields"] = array();
$tdataTABLESPACES[".importFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".importFields"][] = "ENGINE";
$tdataTABLESPACES[".importFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".importFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".importFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".importFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".importFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".importFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".importFields"][] = "TABLESPACE_COMMENT";

$tdataTABLESPACES[".printFields"] = array();
$tdataTABLESPACES[".printFields"][] = "TABLESPACE_NAME";
$tdataTABLESPACES[".printFields"][] = "ENGINE";
$tdataTABLESPACES[".printFields"][] = "TABLESPACE_TYPE";
$tdataTABLESPACES[".printFields"][] = "LOGFILE_GROUP_NAME";
$tdataTABLESPACES[".printFields"][] = "EXTENT_SIZE";
$tdataTABLESPACES[".printFields"][] = "AUTOEXTEND_SIZE";
$tdataTABLESPACES[".printFields"][] = "MAXIMUM_SIZE";
$tdataTABLESPACES[".printFields"][] = "NODEGROUP_ID";
$tdataTABLESPACES[".printFields"][] = "TABLESPACE_COMMENT";

//	TABLESPACE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TABLESPACE_NAME";
	$fdata["GoodName"] = "TABLESPACE_NAME";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","TABLESPACE_NAME");
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

		$fdata["strField"] = "TABLESPACE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLESPACE_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLESPACES["TABLESPACE_NAME"] = $fdata;
//	ENGINE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ENGINE";
	$fdata["GoodName"] = "ENGINE";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","ENGINE");
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

		$fdata["strField"] = "ENGINE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ENGINE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLESPACES["ENGINE"] = $fdata;
//	TABLESPACE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TABLESPACE_TYPE";
	$fdata["GoodName"] = "TABLESPACE_TYPE";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","TABLESPACE_TYPE");
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

		$fdata["strField"] = "TABLESPACE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLESPACE_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLESPACES["TABLESPACE_TYPE"] = $fdata;
//	LOGFILE_GROUP_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LOGFILE_GROUP_NAME";
	$fdata["GoodName"] = "LOGFILE_GROUP_NAME";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","LOGFILE_GROUP_NAME");
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

		$fdata["strField"] = "LOGFILE_GROUP_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOGFILE_GROUP_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataTABLESPACES["LOGFILE_GROUP_NAME"] = $fdata;
//	EXTENT_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EXTENT_SIZE";
	$fdata["GoodName"] = "EXTENT_SIZE";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","EXTENT_SIZE");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "EXTENT_SIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXTENT_SIZE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTABLESPACES["EXTENT_SIZE"] = $fdata;
//	AUTOEXTEND_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AUTOEXTEND_SIZE";
	$fdata["GoodName"] = "AUTOEXTEND_SIZE";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","AUTOEXTEND_SIZE");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "AUTOEXTEND_SIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTOEXTEND_SIZE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTABLESPACES["AUTOEXTEND_SIZE"] = $fdata;
//	MAXIMUM_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MAXIMUM_SIZE";
	$fdata["GoodName"] = "MAXIMUM_SIZE";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","MAXIMUM_SIZE");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "MAXIMUM_SIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAXIMUM_SIZE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTABLESPACES["MAXIMUM_SIZE"] = $fdata;
//	NODEGROUP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NODEGROUP_ID";
	$fdata["GoodName"] = "NODEGROUP_ID";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","NODEGROUP_ID");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "NODEGROUP_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NODEGROUP_ID";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTABLESPACES["NODEGROUP_ID"] = $fdata;
//	TABLESPACE_COMMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TABLESPACE_COMMENT";
	$fdata["GoodName"] = "TABLESPACE_COMMENT";
	$fdata["ownerTable"] = "TABLESPACES";
	$fdata["Label"] = GetFieldLabel("TABLESPACES","TABLESPACE_COMMENT");
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

		$fdata["strField"] = "TABLESPACE_COMMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TABLESPACE_COMMENT";

	
	
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
			$edata["EditParams"].= " maxlength=2048";

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




	$tdataTABLESPACES["TABLESPACE_COMMENT"] = $fdata;


$tables_data["TABLESPACES"]=&$tdataTABLESPACES;
$field_labels["TABLESPACES"] = &$fieldLabelsTABLESPACES;
$fieldToolTips["TABLESPACES"] = &$fieldToolTipsTABLESPACES;
$placeHolders["TABLESPACES"] = &$placeHoldersTABLESPACES;
$page_titles["TABLESPACES"] = &$pageTitlesTABLESPACES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TABLESPACES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TABLESPACES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TABLESPACES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TABLESPACE_NAME,  	ENGINE,  	TABLESPACE_TYPE,  	LOGFILE_GROUP_NAME,  	EXTENT_SIZE,  	AUTOEXTEND_SIZE,  	MAXIMUM_SIZE,  	NODEGROUP_ID,  	TABLESPACE_COMMENT";
$proto0["m_strFrom"] = "FROM TABLESPACES";
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
	"m_strName" => "TABLESPACE_NAME",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto6["m_sql"] = "TABLESPACE_NAME";
$proto6["m_srcTableName"] = "TABLESPACES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ENGINE",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto8["m_sql"] = "ENGINE";
$proto8["m_srcTableName"] = "TABLESPACES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLESPACE_TYPE",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto10["m_sql"] = "TABLESPACE_TYPE";
$proto10["m_srcTableName"] = "TABLESPACES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LOGFILE_GROUP_NAME",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto12["m_sql"] = "LOGFILE_GROUP_NAME";
$proto12["m_srcTableName"] = "TABLESPACES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EXTENT_SIZE",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto14["m_sql"] = "EXTENT_SIZE";
$proto14["m_srcTableName"] = "TABLESPACES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTOEXTEND_SIZE",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto16["m_sql"] = "AUTOEXTEND_SIZE";
$proto16["m_srcTableName"] = "TABLESPACES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MAXIMUM_SIZE",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto18["m_sql"] = "MAXIMUM_SIZE";
$proto18["m_srcTableName"] = "TABLESPACES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NODEGROUP_ID",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto20["m_sql"] = "NODEGROUP_ID";
$proto20["m_srcTableName"] = "TABLESPACES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLESPACE_COMMENT",
	"m_strTable" => "TABLESPACES",
	"m_srcTableName" => "TABLESPACES"
));

$proto22["m_sql"] = "TABLESPACE_COMMENT";
$proto22["m_srcTableName"] = "TABLESPACES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "TABLESPACES";
$proto25["m_srcTableName"] = "TABLESPACES";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "TABLESPACE_NAME";
$proto25["m_columns"][] = "ENGINE";
$proto25["m_columns"][] = "TABLESPACE_TYPE";
$proto25["m_columns"][] = "LOGFILE_GROUP_NAME";
$proto25["m_columns"][] = "EXTENT_SIZE";
$proto25["m_columns"][] = "AUTOEXTEND_SIZE";
$proto25["m_columns"][] = "MAXIMUM_SIZE";
$proto25["m_columns"][] = "NODEGROUP_ID";
$proto25["m_columns"][] = "TABLESPACE_COMMENT";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "TABLESPACES";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "TABLESPACES";
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
$proto0["m_srcTableName"]="TABLESPACES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TABLESPACES = createSqlQuery_TABLESPACES();


	
						;

									

$tdataTABLESPACES[".sqlquery"] = $queryData_TABLESPACES;

$tableEvents["TABLESPACES"] = new eventsBase;
$tdataTABLESPACES[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOBJECT_PERMISSION = array();
	$tdataOBJECT_PERMISSION[".truncateText"] = true;
	$tdataOBJECT_PERMISSION[".NumberOfChars"] = 80;
	$tdataOBJECT_PERMISSION[".ShortName"] = "OBJECT_PERMISSION";
	$tdataOBJECT_PERMISSION[".OwnerID"] = "";
	$tdataOBJECT_PERMISSION[".OriginalTable"] = "OBJECT_PERMISSION";

//	field labels
$fieldLabelsOBJECT_PERMISSION = array();
$fieldToolTipsOBJECT_PERMISSION = array();
$pageTitlesOBJECT_PERMISSION = array();
$placeHoldersOBJECT_PERMISSION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsOBJECT_PERMISSION["Japanese"] = array();
	$fieldToolTipsOBJECT_PERMISSION["Japanese"] = array();
	$placeHoldersOBJECT_PERMISSION["Japanese"] = array();
	$pageTitlesOBJECT_PERMISSION["Japanese"] = array();
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_UID"] = "OP UID";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["PRO_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["PRO_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["TAS_UID"] = "TAS UID";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["TAS_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["TAS_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["USR_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["USR_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_USER_RELATION"] = "OP USER RELATION";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_USER_RELATION"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_USER_RELATION"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_TASK_SOURCE"] = "OP TASK SOURCE";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_TASK_SOURCE"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_TASK_SOURCE"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_PARTICIPATE"] = "OP PARTICIPATE";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_PARTICIPATE"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_PARTICIPATE"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_OBJ_TYPE"] = "OP OBJ TYPE";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_OBJ_TYPE"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_OBJ_TYPE"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_OBJ_UID"] = "OP OBJ UID";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_OBJ_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_OBJ_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_ACTION"] = "OP ACTION";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_ACTION"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_ACTION"] = "";
	$fieldLabelsOBJECT_PERMISSION["Japanese"]["OP_CASE_STATUS"] = "OP CASE STATUS";
	$fieldToolTipsOBJECT_PERMISSION["Japanese"]["OP_CASE_STATUS"] = "";
	$placeHoldersOBJECT_PERMISSION["Japanese"]["OP_CASE_STATUS"] = "";
	if (count($fieldToolTipsOBJECT_PERMISSION["Japanese"]))
		$tdataOBJECT_PERMISSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOBJECT_PERMISSION["English"] = array();
	$fieldToolTipsOBJECT_PERMISSION["English"] = array();
	$placeHoldersOBJECT_PERMISSION["English"] = array();
	$pageTitlesOBJECT_PERMISSION["English"] = array();
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_UID"] = "OP UID";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsOBJECT_PERMISSION["English"]["PRO_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["PRO_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["TAS_UID"] = "TAS UID";
	$fieldToolTipsOBJECT_PERMISSION["English"]["TAS_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["TAS_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsOBJECT_PERMISSION["English"]["USR_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["USR_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_USER_RELATION"] = "OP USER RELATION";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_USER_RELATION"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_USER_RELATION"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_TASK_SOURCE"] = "OP TASK SOURCE";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_TASK_SOURCE"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_TASK_SOURCE"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_PARTICIPATE"] = "OP PARTICIPATE";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_PARTICIPATE"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_PARTICIPATE"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_OBJ_TYPE"] = "OP OBJ TYPE";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_OBJ_TYPE"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_OBJ_TYPE"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_OBJ_UID"] = "OP OBJ UID";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_OBJ_UID"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_OBJ_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_ACTION"] = "OP ACTION";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_ACTION"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_ACTION"] = "";
	$fieldLabelsOBJECT_PERMISSION["English"]["OP_CASE_STATUS"] = "OP CASE STATUS";
	$fieldToolTipsOBJECT_PERMISSION["English"]["OP_CASE_STATUS"] = "";
	$placeHoldersOBJECT_PERMISSION["English"]["OP_CASE_STATUS"] = "";
	if (count($fieldToolTipsOBJECT_PERMISSION["English"]))
		$tdataOBJECT_PERMISSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOBJECT_PERMISSION[""] = array();
	$fieldToolTipsOBJECT_PERMISSION[""] = array();
	$placeHoldersOBJECT_PERMISSION[""] = array();
	$pageTitlesOBJECT_PERMISSION[""] = array();
	$fieldLabelsOBJECT_PERMISSION[""]["OP_UID"] = "OP UID";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_UID"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["PRO_UID"] = "PRO UID";
	$fieldToolTipsOBJECT_PERMISSION[""]["PRO_UID"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["PRO_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["TAS_UID"] = "TAS UID";
	$fieldToolTipsOBJECT_PERMISSION[""]["TAS_UID"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["TAS_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["USR_UID"] = "USR UID";
	$fieldToolTipsOBJECT_PERMISSION[""]["USR_UID"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["USR_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_USER_RELATION"] = "OP USER RELATION";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_USER_RELATION"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_USER_RELATION"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_TASK_SOURCE"] = "OP TASK SOURCE";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_TASK_SOURCE"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_TASK_SOURCE"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_PARTICIPATE"] = "OP PARTICIPATE";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_PARTICIPATE"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_PARTICIPATE"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_OBJ_TYPE"] = "OP OBJ TYPE";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_OBJ_TYPE"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_OBJ_TYPE"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_OBJ_UID"] = "OP OBJ UID";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_OBJ_UID"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_OBJ_UID"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_ACTION"] = "OP ACTION";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_ACTION"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_ACTION"] = "";
	$fieldLabelsOBJECT_PERMISSION[""]["OP_CASE_STATUS"] = "OP CASE STATUS";
	$fieldToolTipsOBJECT_PERMISSION[""]["OP_CASE_STATUS"] = "";
	$placeHoldersOBJECT_PERMISSION[""]["OP_CASE_STATUS"] = "";
	if (count($fieldToolTipsOBJECT_PERMISSION[""]))
		$tdataOBJECT_PERMISSION[".isUseToolTips"] = true;
}


	$tdataOBJECT_PERMISSION[".NCSearch"] = true;



$tdataOBJECT_PERMISSION[".shortTableName"] = "OBJECT_PERMISSION";
$tdataOBJECT_PERMISSION[".nSecOptions"] = 0;
$tdataOBJECT_PERMISSION[".recsPerRowPrint"] = 1;
$tdataOBJECT_PERMISSION[".mainTableOwnerID"] = "";
$tdataOBJECT_PERMISSION[".moveNext"] = 1;
$tdataOBJECT_PERMISSION[".entityType"] = 0;

$tdataOBJECT_PERMISSION[".strOriginalTableName"] = "OBJECT_PERMISSION";

	



$tdataOBJECT_PERMISSION[".showAddInPopup"] = false;

$tdataOBJECT_PERMISSION[".showEditInPopup"] = false;

$tdataOBJECT_PERMISSION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOBJECT_PERMISSION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOBJECT_PERMISSION[".fieldsForRegister"] = array();
	
$tdataOBJECT_PERMISSION[".listAjax"] = false;

	$tdataOBJECT_PERMISSION[".audit"] = false;

	$tdataOBJECT_PERMISSION[".locking"] = false;

$tdataOBJECT_PERMISSION[".edit"] = true;
$tdataOBJECT_PERMISSION[".afterEditAction"] = 1;
$tdataOBJECT_PERMISSION[".closePopupAfterEdit"] = 1;
$tdataOBJECT_PERMISSION[".afterEditActionDetTable"] = "";

$tdataOBJECT_PERMISSION[".add"] = true;
$tdataOBJECT_PERMISSION[".afterAddAction"] = 1;
$tdataOBJECT_PERMISSION[".closePopupAfterAdd"] = 1;
$tdataOBJECT_PERMISSION[".afterAddActionDetTable"] = "";

$tdataOBJECT_PERMISSION[".list"] = true;



$tdataOBJECT_PERMISSION[".reorderRecordsByHeader"] = true;



$tdataOBJECT_PERMISSION[".view"] = true;

$tdataOBJECT_PERMISSION[".import"] = true;

$tdataOBJECT_PERMISSION[".exportTo"] = true;

$tdataOBJECT_PERMISSION[".printFriendly"] = true;

$tdataOBJECT_PERMISSION[".delete"] = true;

$tdataOBJECT_PERMISSION[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOBJECT_PERMISSION[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOBJECT_PERMISSION[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOBJECT_PERMISSION[".searchSaving"] = false;
//

$tdataOBJECT_PERMISSION[".showSearchPanel"] = true;
		$tdataOBJECT_PERMISSION[".flexibleSearch"] = true;

$tdataOBJECT_PERMISSION[".isUseAjaxSuggest"] = true;

$tdataOBJECT_PERMISSION[".rowHighlite"] = true;



				

$tdataOBJECT_PERMISSION[".ajaxCodeSnippetAdded"] = false;

$tdataOBJECT_PERMISSION[".buttonsAdded"] = false;

$tdataOBJECT_PERMISSION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOBJECT_PERMISSION[".isUseTimeForSearch"] = false;





$tdataOBJECT_PERMISSION[".allSearchFields"] = array();
$tdataOBJECT_PERMISSION[".filterFields"] = array();
$tdataOBJECT_PERMISSION[".requiredSearchFields"] = array();

$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_UID";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "PRO_UID";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "TAS_UID";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "USR_UID";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_USER_RELATION";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_TASK_SOURCE";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_PARTICIPATE";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_OBJ_TYPE";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_OBJ_UID";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_ACTION";
	$tdataOBJECT_PERMISSION[".allSearchFields"][] = "OP_CASE_STATUS";
	

$tdataOBJECT_PERMISSION[".googleLikeFields"] = array();
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".googleLikeFields"][] = "OP_CASE_STATUS";


$tdataOBJECT_PERMISSION[".advSearchFields"] = array();
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".advSearchFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".tableType"] = "list";

$tdataOBJECT_PERMISSION[".printerPageOrientation"] = 0;
$tdataOBJECT_PERMISSION[".nPrinterPageScale"] = 100;

$tdataOBJECT_PERMISSION[".nPrinterSplitRecords"] = 40;

$tdataOBJECT_PERMISSION[".nPrinterPDFSplitRecords"] = 40;



$tdataOBJECT_PERMISSION[".geocodingEnabled"] = false;





$tdataOBJECT_PERMISSION[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataOBJECT_PERMISSION[".pageSize"] = 20;

$tdataOBJECT_PERMISSION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOBJECT_PERMISSION[".strOrderBy"] = $tstrOrderBy;

$tdataOBJECT_PERMISSION[".orderindexes"] = array();

$tdataOBJECT_PERMISSION[".sqlHead"] = "SELECT OP_UID,  	PRO_UID,  	TAS_UID,  	USR_UID,  	OP_USER_RELATION,  	OP_TASK_SOURCE,  	OP_PARTICIPATE,  	OP_OBJ_TYPE,  	OP_OBJ_UID,  	OP_ACTION,  	OP_CASE_STATUS";
$tdataOBJECT_PERMISSION[".sqlFrom"] = "FROM OBJECT_PERMISSION";
$tdataOBJECT_PERMISSION[".sqlWhereExpr"] = "";
$tdataOBJECT_PERMISSION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOBJECT_PERMISSION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOBJECT_PERMISSION[".arrGroupsPerPage"] = $arrGPP;

$tdataOBJECT_PERMISSION[".highlightSearchResults"] = true;

$tableKeysOBJECT_PERMISSION = array();
$tableKeysOBJECT_PERMISSION[] = "OP_UID";
$tdataOBJECT_PERMISSION[".Keys"] = $tableKeysOBJECT_PERMISSION;

$tdataOBJECT_PERMISSION[".listFields"] = array();
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".listFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".listFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".listFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".listFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".hideMobileList"] = array();


$tdataOBJECT_PERMISSION[".viewFields"] = array();
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".viewFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".viewFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".viewFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".viewFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".addFields"] = array();
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".addFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".addFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".addFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".addFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".masterListFields"] = array();
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".masterListFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".inlineAddFields"] = array();
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".inlineAddFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".editFields"] = array();
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".editFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".editFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".editFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".editFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".inlineEditFields"] = array();
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".inlineEditFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".updateSelectedFields"] = array();
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".updateSelectedFields"][] = "OP_CASE_STATUS";


$tdataOBJECT_PERMISSION[".exportFields"] = array();
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".exportFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".exportFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".exportFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".exportFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".importFields"] = array();
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".importFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".importFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".importFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".importFields"][] = "OP_CASE_STATUS";

$tdataOBJECT_PERMISSION[".printFields"] = array();
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_UID";
$tdataOBJECT_PERMISSION[".printFields"][] = "PRO_UID";
$tdataOBJECT_PERMISSION[".printFields"][] = "TAS_UID";
$tdataOBJECT_PERMISSION[".printFields"][] = "USR_UID";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_USER_RELATION";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_TASK_SOURCE";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_PARTICIPATE";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_OBJ_TYPE";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_OBJ_UID";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_ACTION";
$tdataOBJECT_PERMISSION[".printFields"][] = "OP_CASE_STATUS";

//	OP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OP_UID";
	$fdata["GoodName"] = "OP_UID";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_UID");
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

		$fdata["strField"] = "OP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_UID";

	
	
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




	$tdataOBJECT_PERMISSION["OP_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","PRO_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataOBJECT_PERMISSION["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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




	$tdataOBJECT_PERMISSION["TAS_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","USR_UID");
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




	$tdataOBJECT_PERMISSION["USR_UID"] = $fdata;
//	OP_USER_RELATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OP_USER_RELATION";
	$fdata["GoodName"] = "OP_USER_RELATION";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_USER_RELATION");
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

		$fdata["strField"] = "OP_USER_RELATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_USER_RELATION";

	
	
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




	$tdataOBJECT_PERMISSION["OP_USER_RELATION"] = $fdata;
//	OP_TASK_SOURCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OP_TASK_SOURCE";
	$fdata["GoodName"] = "OP_TASK_SOURCE";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_TASK_SOURCE");
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

		$fdata["strField"] = "OP_TASK_SOURCE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_TASK_SOURCE";

	
	
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




	$tdataOBJECT_PERMISSION["OP_TASK_SOURCE"] = $fdata;
//	OP_PARTICIPATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "OP_PARTICIPATE";
	$fdata["GoodName"] = "OP_PARTICIPATE";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_PARTICIPATE");
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

		$fdata["strField"] = "OP_PARTICIPATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_PARTICIPATE";

	
	
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




	$tdataOBJECT_PERMISSION["OP_PARTICIPATE"] = $fdata;
//	OP_OBJ_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OP_OBJ_TYPE";
	$fdata["GoodName"] = "OP_OBJ_TYPE";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_OBJ_TYPE");
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

		$fdata["strField"] = "OP_OBJ_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_OBJ_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataOBJECT_PERMISSION["OP_OBJ_TYPE"] = $fdata;
//	OP_OBJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "OP_OBJ_UID";
	$fdata["GoodName"] = "OP_OBJ_UID";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_OBJ_UID");
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

		$fdata["strField"] = "OP_OBJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_OBJ_UID";

	
	
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




	$tdataOBJECT_PERMISSION["OP_OBJ_UID"] = $fdata;
//	OP_ACTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OP_ACTION";
	$fdata["GoodName"] = "OP_ACTION";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_ACTION");
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

		$fdata["strField"] = "OP_ACTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_ACTION";

	
	
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




	$tdataOBJECT_PERMISSION["OP_ACTION"] = $fdata;
//	OP_CASE_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "OP_CASE_STATUS";
	$fdata["GoodName"] = "OP_CASE_STATUS";
	$fdata["ownerTable"] = "OBJECT_PERMISSION";
	$fdata["Label"] = GetFieldLabel("OBJECT_PERMISSION","OP_CASE_STATUS");
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

		$fdata["strField"] = "OP_CASE_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_CASE_STATUS";

	
	
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




	$tdataOBJECT_PERMISSION["OP_CASE_STATUS"] = $fdata;


$tables_data["OBJECT_PERMISSION"]=&$tdataOBJECT_PERMISSION;
$field_labels["OBJECT_PERMISSION"] = &$fieldLabelsOBJECT_PERMISSION;
$fieldToolTips["OBJECT_PERMISSION"] = &$fieldToolTipsOBJECT_PERMISSION;
$placeHolders["OBJECT_PERMISSION"] = &$placeHoldersOBJECT_PERMISSION;
$page_titles["OBJECT_PERMISSION"] = &$pageTitlesOBJECT_PERMISSION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OBJECT_PERMISSION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["OBJECT_PERMISSION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OBJECT_PERMISSION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OP_UID,  	PRO_UID,  	TAS_UID,  	USR_UID,  	OP_USER_RELATION,  	OP_TASK_SOURCE,  	OP_PARTICIPATE,  	OP_OBJ_TYPE,  	OP_OBJ_UID,  	OP_ACTION,  	OP_CASE_STATUS";
$proto0["m_strFrom"] = "FROM OBJECT_PERMISSION";
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
	"m_strName" => "OP_UID",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto6["m_sql"] = "OP_UID";
$proto6["m_srcTableName"] = "OBJECT_PERMISSION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "OBJECT_PERMISSION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "OBJECT_PERMISSION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto12["m_sql"] = "USR_UID";
$proto12["m_srcTableName"] = "OBJECT_PERMISSION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_USER_RELATION",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto14["m_sql"] = "OP_USER_RELATION";
$proto14["m_srcTableName"] = "OBJECT_PERMISSION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_TASK_SOURCE",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto16["m_sql"] = "OP_TASK_SOURCE";
$proto16["m_srcTableName"] = "OBJECT_PERMISSION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_PARTICIPATE",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto18["m_sql"] = "OP_PARTICIPATE";
$proto18["m_srcTableName"] = "OBJECT_PERMISSION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_OBJ_TYPE",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto20["m_sql"] = "OP_OBJ_TYPE";
$proto20["m_srcTableName"] = "OBJECT_PERMISSION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_OBJ_UID",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto22["m_sql"] = "OP_OBJ_UID";
$proto22["m_srcTableName"] = "OBJECT_PERMISSION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_ACTION",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto24["m_sql"] = "OP_ACTION";
$proto24["m_srcTableName"] = "OBJECT_PERMISSION";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "OP_CASE_STATUS",
	"m_strTable" => "OBJECT_PERMISSION",
	"m_srcTableName" => "OBJECT_PERMISSION"
));

$proto26["m_sql"] = "OP_CASE_STATUS";
$proto26["m_srcTableName"] = "OBJECT_PERMISSION";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "OBJECT_PERMISSION";
$proto29["m_srcTableName"] = "OBJECT_PERMISSION";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "OP_UID";
$proto29["m_columns"][] = "PRO_UID";
$proto29["m_columns"][] = "TAS_UID";
$proto29["m_columns"][] = "USR_UID";
$proto29["m_columns"][] = "OP_USER_RELATION";
$proto29["m_columns"][] = "OP_TASK_SOURCE";
$proto29["m_columns"][] = "OP_PARTICIPATE";
$proto29["m_columns"][] = "OP_OBJ_TYPE";
$proto29["m_columns"][] = "OP_OBJ_UID";
$proto29["m_columns"][] = "OP_ACTION";
$proto29["m_columns"][] = "OP_CASE_STATUS";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "OBJECT_PERMISSION";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "OBJECT_PERMISSION";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="OBJECT_PERMISSION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OBJECT_PERMISSION = createSqlQuery_OBJECT_PERMISSION();


	
						;

											

$tdataOBJECT_PERMISSION[".sqlquery"] = $queryData_OBJECT_PERMISSION;

$tableEvents["OBJECT_PERMISSION"] = new eventsBase;
$tdataOBJECT_PERMISSION[".hasEvents"] = false;

?>
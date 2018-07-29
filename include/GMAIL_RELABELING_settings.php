<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGMAIL_RELABELING = array();
	$tdataGMAIL_RELABELING[".truncateText"] = true;
	$tdataGMAIL_RELABELING[".NumberOfChars"] = 80;
	$tdataGMAIL_RELABELING[".ShortName"] = "GMAIL_RELABELING";
	$tdataGMAIL_RELABELING[".OwnerID"] = "";
	$tdataGMAIL_RELABELING[".OriginalTable"] = "GMAIL_RELABELING";

//	field labels
$fieldLabelsGMAIL_RELABELING = array();
$fieldToolTipsGMAIL_RELABELING = array();
$pageTitlesGMAIL_RELABELING = array();
$placeHoldersGMAIL_RELABELING = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsGMAIL_RELABELING["Japanese"] = array();
	$fieldToolTipsGMAIL_RELABELING["Japanese"] = array();
	$placeHoldersGMAIL_RELABELING["Japanese"] = array();
	$pageTitlesGMAIL_RELABELING["Japanese"] = array();
	$fieldLabelsGMAIL_RELABELING["Japanese"]["LABELING_UID"] = "LABELING UID";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["LABELING_UID"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["LABELING_UID"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["CREATE_DATE"] = "CREATE DATE";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["CREATE_DATE"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["CREATE_DATE"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["APP_UID"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["APP_UID"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["CURRENT_LAST_INDEX"] = "CURRENT LAST INDEX";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["CURRENT_LAST_INDEX"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["CURRENT_LAST_INDEX"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["UNASSIGNED"] = "UNASSIGNED";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["UNASSIGNED"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["UNASSIGNED"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["STATUS"] = "STATUS";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["STATUS"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["STATUS"] = "";
	$fieldLabelsGMAIL_RELABELING["Japanese"]["MSG_ERROR"] = "MSG ERROR";
	$fieldToolTipsGMAIL_RELABELING["Japanese"]["MSG_ERROR"] = "";
	$placeHoldersGMAIL_RELABELING["Japanese"]["MSG_ERROR"] = "";
	if (count($fieldToolTipsGMAIL_RELABELING["Japanese"]))
		$tdataGMAIL_RELABELING[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGMAIL_RELABELING["English"] = array();
	$fieldToolTipsGMAIL_RELABELING["English"] = array();
	$placeHoldersGMAIL_RELABELING["English"] = array();
	$pageTitlesGMAIL_RELABELING["English"] = array();
	$fieldLabelsGMAIL_RELABELING["English"]["LABELING_UID"] = "LABELING UID";
	$fieldToolTipsGMAIL_RELABELING["English"]["LABELING_UID"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["LABELING_UID"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["CREATE_DATE"] = "CREATE DATE";
	$fieldToolTipsGMAIL_RELABELING["English"]["CREATE_DATE"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["CREATE_DATE"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsGMAIL_RELABELING["English"]["APP_UID"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["APP_UID"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsGMAIL_RELABELING["English"]["DEL_INDEX"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["DEL_INDEX"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["CURRENT_LAST_INDEX"] = "CURRENT LAST INDEX";
	$fieldToolTipsGMAIL_RELABELING["English"]["CURRENT_LAST_INDEX"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["CURRENT_LAST_INDEX"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["UNASSIGNED"] = "UNASSIGNED";
	$fieldToolTipsGMAIL_RELABELING["English"]["UNASSIGNED"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["UNASSIGNED"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["STATUS"] = "STATUS";
	$fieldToolTipsGMAIL_RELABELING["English"]["STATUS"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["STATUS"] = "";
	$fieldLabelsGMAIL_RELABELING["English"]["MSG_ERROR"] = "MSG ERROR";
	$fieldToolTipsGMAIL_RELABELING["English"]["MSG_ERROR"] = "";
	$placeHoldersGMAIL_RELABELING["English"]["MSG_ERROR"] = "";
	if (count($fieldToolTipsGMAIL_RELABELING["English"]))
		$tdataGMAIL_RELABELING[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGMAIL_RELABELING[""] = array();
	$fieldToolTipsGMAIL_RELABELING[""] = array();
	$placeHoldersGMAIL_RELABELING[""] = array();
	$pageTitlesGMAIL_RELABELING[""] = array();
	$fieldLabelsGMAIL_RELABELING[""]["LABELING_UID"] = "LABELING UID";
	$fieldToolTipsGMAIL_RELABELING[""]["LABELING_UID"] = "";
	$placeHoldersGMAIL_RELABELING[""]["LABELING_UID"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["CREATE_DATE"] = "CREATE DATE";
	$fieldToolTipsGMAIL_RELABELING[""]["CREATE_DATE"] = "";
	$placeHoldersGMAIL_RELABELING[""]["CREATE_DATE"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["APP_UID"] = "APP UID";
	$fieldToolTipsGMAIL_RELABELING[""]["APP_UID"] = "";
	$placeHoldersGMAIL_RELABELING[""]["APP_UID"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsGMAIL_RELABELING[""]["DEL_INDEX"] = "";
	$placeHoldersGMAIL_RELABELING[""]["DEL_INDEX"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["CURRENT_LAST_INDEX"] = "CURRENT LAST INDEX";
	$fieldToolTipsGMAIL_RELABELING[""]["CURRENT_LAST_INDEX"] = "";
	$placeHoldersGMAIL_RELABELING[""]["CURRENT_LAST_INDEX"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["UNASSIGNED"] = "UNASSIGNED";
	$fieldToolTipsGMAIL_RELABELING[""]["UNASSIGNED"] = "";
	$placeHoldersGMAIL_RELABELING[""]["UNASSIGNED"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["STATUS"] = "STATUS";
	$fieldToolTipsGMAIL_RELABELING[""]["STATUS"] = "";
	$placeHoldersGMAIL_RELABELING[""]["STATUS"] = "";
	$fieldLabelsGMAIL_RELABELING[""]["MSG_ERROR"] = "MSG ERROR";
	$fieldToolTipsGMAIL_RELABELING[""]["MSG_ERROR"] = "";
	$placeHoldersGMAIL_RELABELING[""]["MSG_ERROR"] = "";
	if (count($fieldToolTipsGMAIL_RELABELING[""]))
		$tdataGMAIL_RELABELING[".isUseToolTips"] = true;
}


	$tdataGMAIL_RELABELING[".NCSearch"] = true;



$tdataGMAIL_RELABELING[".shortTableName"] = "GMAIL_RELABELING";
$tdataGMAIL_RELABELING[".nSecOptions"] = 0;
$tdataGMAIL_RELABELING[".recsPerRowPrint"] = 1;
$tdataGMAIL_RELABELING[".mainTableOwnerID"] = "";
$tdataGMAIL_RELABELING[".moveNext"] = 1;
$tdataGMAIL_RELABELING[".entityType"] = 0;

$tdataGMAIL_RELABELING[".strOriginalTableName"] = "GMAIL_RELABELING";

	



$tdataGMAIL_RELABELING[".showAddInPopup"] = false;

$tdataGMAIL_RELABELING[".showEditInPopup"] = false;

$tdataGMAIL_RELABELING[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGMAIL_RELABELING[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGMAIL_RELABELING[".fieldsForRegister"] = array();
	
$tdataGMAIL_RELABELING[".listAjax"] = false;

	$tdataGMAIL_RELABELING[".audit"] = false;

	$tdataGMAIL_RELABELING[".locking"] = false;

$tdataGMAIL_RELABELING[".edit"] = true;
$tdataGMAIL_RELABELING[".afterEditAction"] = 1;
$tdataGMAIL_RELABELING[".closePopupAfterEdit"] = 1;
$tdataGMAIL_RELABELING[".afterEditActionDetTable"] = "";

$tdataGMAIL_RELABELING[".add"] = true;
$tdataGMAIL_RELABELING[".afterAddAction"] = 1;
$tdataGMAIL_RELABELING[".closePopupAfterAdd"] = 1;
$tdataGMAIL_RELABELING[".afterAddActionDetTable"] = "";

$tdataGMAIL_RELABELING[".list"] = true;



$tdataGMAIL_RELABELING[".reorderRecordsByHeader"] = true;



$tdataGMAIL_RELABELING[".view"] = true;

$tdataGMAIL_RELABELING[".import"] = true;

$tdataGMAIL_RELABELING[".exportTo"] = true;

$tdataGMAIL_RELABELING[".printFriendly"] = true;

$tdataGMAIL_RELABELING[".delete"] = true;

$tdataGMAIL_RELABELING[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataGMAIL_RELABELING[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataGMAIL_RELABELING[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataGMAIL_RELABELING[".searchSaving"] = false;
//

$tdataGMAIL_RELABELING[".showSearchPanel"] = true;
		$tdataGMAIL_RELABELING[".flexibleSearch"] = true;

$tdataGMAIL_RELABELING[".isUseAjaxSuggest"] = true;

$tdataGMAIL_RELABELING[".rowHighlite"] = true;



				

$tdataGMAIL_RELABELING[".ajaxCodeSnippetAdded"] = false;

$tdataGMAIL_RELABELING[".buttonsAdded"] = false;

$tdataGMAIL_RELABELING[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGMAIL_RELABELING[".isUseTimeForSearch"] = false;





$tdataGMAIL_RELABELING[".allSearchFields"] = array();
$tdataGMAIL_RELABELING[".filterFields"] = array();
$tdataGMAIL_RELABELING[".requiredSearchFields"] = array();

$tdataGMAIL_RELABELING[".allSearchFields"][] = "LABELING_UID";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "CREATE_DATE";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "APP_UID";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "DEL_INDEX";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "CURRENT_LAST_INDEX";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "UNASSIGNED";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "STATUS";
	$tdataGMAIL_RELABELING[".allSearchFields"][] = "MSG_ERROR";
	

$tdataGMAIL_RELABELING[".googleLikeFields"] = array();
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".googleLikeFields"][] = "MSG_ERROR";


$tdataGMAIL_RELABELING[".advSearchFields"] = array();
$tdataGMAIL_RELABELING[".advSearchFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".advSearchFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".tableType"] = "list";

$tdataGMAIL_RELABELING[".printerPageOrientation"] = 0;
$tdataGMAIL_RELABELING[".nPrinterPageScale"] = 100;

$tdataGMAIL_RELABELING[".nPrinterSplitRecords"] = 40;

$tdataGMAIL_RELABELING[".nPrinterPDFSplitRecords"] = 40;



$tdataGMAIL_RELABELING[".geocodingEnabled"] = false;





$tdataGMAIL_RELABELING[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataGMAIL_RELABELING[".pageSize"] = 20;

$tdataGMAIL_RELABELING[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGMAIL_RELABELING[".strOrderBy"] = $tstrOrderBy;

$tdataGMAIL_RELABELING[".orderindexes"] = array();

$tdataGMAIL_RELABELING[".sqlHead"] = "SELECT LABELING_UID,  	CREATE_DATE,  	APP_UID,  	DEL_INDEX,  	CURRENT_LAST_INDEX,  	UNASSIGNED,  	STATUS,  	MSG_ERROR";
$tdataGMAIL_RELABELING[".sqlFrom"] = "FROM GMAIL_RELABELING";
$tdataGMAIL_RELABELING[".sqlWhereExpr"] = "";
$tdataGMAIL_RELABELING[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGMAIL_RELABELING[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGMAIL_RELABELING[".arrGroupsPerPage"] = $arrGPP;

$tdataGMAIL_RELABELING[".highlightSearchResults"] = true;

$tableKeysGMAIL_RELABELING = array();
$tableKeysGMAIL_RELABELING[] = "LABELING_UID";
$tdataGMAIL_RELABELING[".Keys"] = $tableKeysGMAIL_RELABELING;

$tdataGMAIL_RELABELING[".listFields"] = array();
$tdataGMAIL_RELABELING[".listFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".listFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".listFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".listFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".listFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".listFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".listFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".listFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".hideMobileList"] = array();


$tdataGMAIL_RELABELING[".viewFields"] = array();
$tdataGMAIL_RELABELING[".viewFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".viewFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".viewFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".viewFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".viewFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".viewFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".viewFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".viewFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".addFields"] = array();
$tdataGMAIL_RELABELING[".addFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".addFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".addFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".addFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".addFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".addFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".addFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".addFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".masterListFields"] = array();
$tdataGMAIL_RELABELING[".masterListFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".masterListFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".masterListFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".masterListFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".masterListFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".masterListFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".masterListFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".masterListFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".inlineAddFields"] = array();
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".inlineAddFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".editFields"] = array();
$tdataGMAIL_RELABELING[".editFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".editFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".editFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".editFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".editFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".editFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".editFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".editFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".inlineEditFields"] = array();
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".inlineEditFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".updateSelectedFields"] = array();
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".updateSelectedFields"][] = "MSG_ERROR";


$tdataGMAIL_RELABELING[".exportFields"] = array();
$tdataGMAIL_RELABELING[".exportFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".exportFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".exportFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".exportFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".exportFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".exportFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".exportFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".exportFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".importFields"] = array();
$tdataGMAIL_RELABELING[".importFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".importFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".importFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".importFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".importFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".importFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".importFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".importFields"][] = "MSG_ERROR";

$tdataGMAIL_RELABELING[".printFields"] = array();
$tdataGMAIL_RELABELING[".printFields"][] = "LABELING_UID";
$tdataGMAIL_RELABELING[".printFields"][] = "CREATE_DATE";
$tdataGMAIL_RELABELING[".printFields"][] = "APP_UID";
$tdataGMAIL_RELABELING[".printFields"][] = "DEL_INDEX";
$tdataGMAIL_RELABELING[".printFields"][] = "CURRENT_LAST_INDEX";
$tdataGMAIL_RELABELING[".printFields"][] = "UNASSIGNED";
$tdataGMAIL_RELABELING[".printFields"][] = "STATUS";
$tdataGMAIL_RELABELING[".printFields"][] = "MSG_ERROR";

//	LABELING_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LABELING_UID";
	$fdata["GoodName"] = "LABELING_UID";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","LABELING_UID");
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

		$fdata["strField"] = "LABELING_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LABELING_UID";

	
	
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




	$tdataGMAIL_RELABELING["LABELING_UID"] = $fdata;
//	CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CREATE_DATE";
	$fdata["GoodName"] = "CREATE_DATE";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","CREATE_DATE");
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

		$fdata["strField"] = "CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CREATE_DATE";

	
	
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




	$tdataGMAIL_RELABELING["CREATE_DATE"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","APP_UID");
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




	$tdataGMAIL_RELABELING["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","DEL_INDEX");
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




	$tdataGMAIL_RELABELING["DEL_INDEX"] = $fdata;
//	CURRENT_LAST_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CURRENT_LAST_INDEX";
	$fdata["GoodName"] = "CURRENT_LAST_INDEX";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","CURRENT_LAST_INDEX");
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

		$fdata["strField"] = "CURRENT_LAST_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CURRENT_LAST_INDEX";

	
	
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




	$tdataGMAIL_RELABELING["CURRENT_LAST_INDEX"] = $fdata;
//	UNASSIGNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UNASSIGNED";
	$fdata["GoodName"] = "UNASSIGNED";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","UNASSIGNED");
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

		$fdata["strField"] = "UNASSIGNED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UNASSIGNED";

	
	
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




	$tdataGMAIL_RELABELING["UNASSIGNED"] = $fdata;
//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","STATUS");
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

		$fdata["strField"] = "STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STATUS";

	
	
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




	$tdataGMAIL_RELABELING["STATUS"] = $fdata;
//	MSG_ERROR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MSG_ERROR";
	$fdata["GoodName"] = "MSG_ERROR";
	$fdata["ownerTable"] = "GMAIL_RELABELING";
	$fdata["Label"] = GetFieldLabel("GMAIL_RELABELING","MSG_ERROR");
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

		$fdata["strField"] = "MSG_ERROR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSG_ERROR";

	
	
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




	$tdataGMAIL_RELABELING["MSG_ERROR"] = $fdata;


$tables_data["GMAIL_RELABELING"]=&$tdataGMAIL_RELABELING;
$field_labels["GMAIL_RELABELING"] = &$fieldLabelsGMAIL_RELABELING;
$fieldToolTips["GMAIL_RELABELING"] = &$fieldToolTipsGMAIL_RELABELING;
$placeHolders["GMAIL_RELABELING"] = &$placeHoldersGMAIL_RELABELING;
$page_titles["GMAIL_RELABELING"] = &$pageTitlesGMAIL_RELABELING;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GMAIL_RELABELING"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GMAIL_RELABELING"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GMAIL_RELABELING()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LABELING_UID,  	CREATE_DATE,  	APP_UID,  	DEL_INDEX,  	CURRENT_LAST_INDEX,  	UNASSIGNED,  	STATUS,  	MSG_ERROR";
$proto0["m_strFrom"] = "FROM GMAIL_RELABELING";
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
	"m_strName" => "LABELING_UID",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto6["m_sql"] = "LABELING_UID";
$proto6["m_srcTableName"] = "GMAIL_RELABELING";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CREATE_DATE",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto8["m_sql"] = "CREATE_DATE";
$proto8["m_srcTableName"] = "GMAIL_RELABELING";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto10["m_sql"] = "APP_UID";
$proto10["m_srcTableName"] = "GMAIL_RELABELING";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto12["m_sql"] = "DEL_INDEX";
$proto12["m_srcTableName"] = "GMAIL_RELABELING";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CURRENT_LAST_INDEX",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto14["m_sql"] = "CURRENT_LAST_INDEX";
$proto14["m_srcTableName"] = "GMAIL_RELABELING";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UNASSIGNED",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto16["m_sql"] = "UNASSIGNED";
$proto16["m_srcTableName"] = "GMAIL_RELABELING";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "STATUS",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto18["m_sql"] = "STATUS";
$proto18["m_srcTableName"] = "GMAIL_RELABELING";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MSG_ERROR",
	"m_strTable" => "GMAIL_RELABELING",
	"m_srcTableName" => "GMAIL_RELABELING"
));

$proto20["m_sql"] = "MSG_ERROR";
$proto20["m_srcTableName"] = "GMAIL_RELABELING";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "GMAIL_RELABELING";
$proto23["m_srcTableName"] = "GMAIL_RELABELING";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "LABELING_UID";
$proto23["m_columns"][] = "CREATE_DATE";
$proto23["m_columns"][] = "APP_UID";
$proto23["m_columns"][] = "DEL_INDEX";
$proto23["m_columns"][] = "CURRENT_LAST_INDEX";
$proto23["m_columns"][] = "UNASSIGNED";
$proto23["m_columns"][] = "STATUS";
$proto23["m_columns"][] = "MSG_ERROR";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "GMAIL_RELABELING";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "GMAIL_RELABELING";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GMAIL_RELABELING";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GMAIL_RELABELING = createSqlQuery_GMAIL_RELABELING();


	
						;

								

$tdataGMAIL_RELABELING[".sqlquery"] = $queryData_GMAIL_RELABELING;

$tableEvents["GMAIL_RELABELING"] = new eventsBase;
$tdataGMAIL_RELABELING[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPLUGINS = array();
	$tdataPLUGINS[".truncateText"] = true;
	$tdataPLUGINS[".NumberOfChars"] = 80;
	$tdataPLUGINS[".ShortName"] = "PLUGINS";
	$tdataPLUGINS[".OwnerID"] = "";
	$tdataPLUGINS[".OriginalTable"] = "PLUGINS";

//	field labels
$fieldLabelsPLUGINS = array();
$fieldToolTipsPLUGINS = array();
$pageTitlesPLUGINS = array();
$placeHoldersPLUGINS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPLUGINS["Japanese"] = array();
	$fieldToolTipsPLUGINS["Japanese"] = array();
	$placeHoldersPLUGINS["Japanese"] = array();
	$pageTitlesPLUGINS["Japanese"] = array();
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_NAME"] = "PLUGIN NAME";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_NAME"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_NAME"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_VERSION"] = "PLUGIN VERSION";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_VERSION"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_VERSION"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_STATUS"] = "PLUGIN STATUS";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_STATUS"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_STATUS"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_TYPE"] = "PLUGIN TYPE";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_TYPE"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_TYPE"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_TYPE_VERSION"] = "PLUGIN TYPE VERSION";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_TYPE_VERSION"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_TYPE_VERSION"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_LIBRARY"] = "PLUGIN LIBRARY";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_LIBRARY"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_LIBRARY"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_LIBRARY_VERSION"] = "PLUGIN LIBRARY VERSION";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_LIBRARY_VERSION"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_LIBRARY_VERSION"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_AUTHOR"] = "PLUGIN AUTHOR";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_AUTHOR"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_AUTHOR"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_DESCRIPTION"] = "PLUGIN DESCRIPTION";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_DESCRIPTION"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_DESCRIPTION"] = "";
	$fieldLabelsPLUGINS["Japanese"]["PLUGIN_LICENSE"] = "PLUGIN LICENSE";
	$fieldToolTipsPLUGINS["Japanese"]["PLUGIN_LICENSE"] = "";
	$placeHoldersPLUGINS["Japanese"]["PLUGIN_LICENSE"] = "";
	$fieldLabelsPLUGINS["Japanese"]["LOAD_OPTION"] = "LOAD OPTION";
	$fieldToolTipsPLUGINS["Japanese"]["LOAD_OPTION"] = "";
	$placeHoldersPLUGINS["Japanese"]["LOAD_OPTION"] = "";
	if (count($fieldToolTipsPLUGINS["Japanese"]))
		$tdataPLUGINS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPLUGINS["English"] = array();
	$fieldToolTipsPLUGINS["English"] = array();
	$placeHoldersPLUGINS["English"] = array();
	$pageTitlesPLUGINS["English"] = array();
	$fieldLabelsPLUGINS["English"]["PLUGIN_NAME"] = "PLUGIN NAME";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_NAME"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_NAME"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_VERSION"] = "PLUGIN VERSION";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_VERSION"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_VERSION"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_STATUS"] = "PLUGIN STATUS";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_STATUS"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_STATUS"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_TYPE"] = "PLUGIN TYPE";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_TYPE"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_TYPE"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_TYPE_VERSION"] = "PLUGIN TYPE VERSION";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_TYPE_VERSION"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_TYPE_VERSION"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_LIBRARY"] = "PLUGIN LIBRARY";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_LIBRARY"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_LIBRARY"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_LIBRARY_VERSION"] = "PLUGIN LIBRARY VERSION";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_LIBRARY_VERSION"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_LIBRARY_VERSION"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_AUTHOR"] = "PLUGIN AUTHOR";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_AUTHOR"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_AUTHOR"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_DESCRIPTION"] = "PLUGIN DESCRIPTION";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_DESCRIPTION"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_DESCRIPTION"] = "";
	$fieldLabelsPLUGINS["English"]["PLUGIN_LICENSE"] = "PLUGIN LICENSE";
	$fieldToolTipsPLUGINS["English"]["PLUGIN_LICENSE"] = "";
	$placeHoldersPLUGINS["English"]["PLUGIN_LICENSE"] = "";
	$fieldLabelsPLUGINS["English"]["LOAD_OPTION"] = "LOAD OPTION";
	$fieldToolTipsPLUGINS["English"]["LOAD_OPTION"] = "";
	$placeHoldersPLUGINS["English"]["LOAD_OPTION"] = "";
	if (count($fieldToolTipsPLUGINS["English"]))
		$tdataPLUGINS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPLUGINS[""] = array();
	$fieldToolTipsPLUGINS[""] = array();
	$placeHoldersPLUGINS[""] = array();
	$pageTitlesPLUGINS[""] = array();
	$fieldLabelsPLUGINS[""]["PLUGIN_NAME"] = "PLUGIN NAME";
	$fieldToolTipsPLUGINS[""]["PLUGIN_NAME"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_NAME"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_VERSION"] = "PLUGIN VERSION";
	$fieldToolTipsPLUGINS[""]["PLUGIN_VERSION"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_VERSION"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_STATUS"] = "PLUGIN STATUS";
	$fieldToolTipsPLUGINS[""]["PLUGIN_STATUS"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_STATUS"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_TYPE"] = "PLUGIN TYPE";
	$fieldToolTipsPLUGINS[""]["PLUGIN_TYPE"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_TYPE"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_TYPE_VERSION"] = "PLUGIN TYPE VERSION";
	$fieldToolTipsPLUGINS[""]["PLUGIN_TYPE_VERSION"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_TYPE_VERSION"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_LIBRARY"] = "PLUGIN LIBRARY";
	$fieldToolTipsPLUGINS[""]["PLUGIN_LIBRARY"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_LIBRARY"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_LIBRARY_VERSION"] = "PLUGIN LIBRARY VERSION";
	$fieldToolTipsPLUGINS[""]["PLUGIN_LIBRARY_VERSION"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_LIBRARY_VERSION"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_AUTHOR"] = "PLUGIN AUTHOR";
	$fieldToolTipsPLUGINS[""]["PLUGIN_AUTHOR"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_AUTHOR"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_DESCRIPTION"] = "PLUGIN DESCRIPTION";
	$fieldToolTipsPLUGINS[""]["PLUGIN_DESCRIPTION"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_DESCRIPTION"] = "";
	$fieldLabelsPLUGINS[""]["PLUGIN_LICENSE"] = "PLUGIN LICENSE";
	$fieldToolTipsPLUGINS[""]["PLUGIN_LICENSE"] = "";
	$placeHoldersPLUGINS[""]["PLUGIN_LICENSE"] = "";
	$fieldLabelsPLUGINS[""]["LOAD_OPTION"] = "LOAD OPTION";
	$fieldToolTipsPLUGINS[""]["LOAD_OPTION"] = "";
	$placeHoldersPLUGINS[""]["LOAD_OPTION"] = "";
	if (count($fieldToolTipsPLUGINS[""]))
		$tdataPLUGINS[".isUseToolTips"] = true;
}


	$tdataPLUGINS[".NCSearch"] = true;



$tdataPLUGINS[".shortTableName"] = "PLUGINS";
$tdataPLUGINS[".nSecOptions"] = 0;
$tdataPLUGINS[".recsPerRowPrint"] = 1;
$tdataPLUGINS[".mainTableOwnerID"] = "";
$tdataPLUGINS[".moveNext"] = 1;
$tdataPLUGINS[".entityType"] = 0;

$tdataPLUGINS[".strOriginalTableName"] = "PLUGINS";

	



$tdataPLUGINS[".showAddInPopup"] = false;

$tdataPLUGINS[".showEditInPopup"] = false;

$tdataPLUGINS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPLUGINS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPLUGINS[".fieldsForRegister"] = array();
	
$tdataPLUGINS[".listAjax"] = false;

	$tdataPLUGINS[".audit"] = false;

	$tdataPLUGINS[".locking"] = false;



$tdataPLUGINS[".list"] = true;



$tdataPLUGINS[".reorderRecordsByHeader"] = true;




$tdataPLUGINS[".import"] = true;

$tdataPLUGINS[".exportTo"] = true;

$tdataPLUGINS[".printFriendly"] = true;


$tdataPLUGINS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPLUGINS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPLUGINS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPLUGINS[".searchSaving"] = false;
//

$tdataPLUGINS[".showSearchPanel"] = true;
		$tdataPLUGINS[".flexibleSearch"] = true;

$tdataPLUGINS[".isUseAjaxSuggest"] = true;

$tdataPLUGINS[".rowHighlite"] = true;



				

$tdataPLUGINS[".ajaxCodeSnippetAdded"] = false;

$tdataPLUGINS[".buttonsAdded"] = false;

$tdataPLUGINS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPLUGINS[".isUseTimeForSearch"] = false;





$tdataPLUGINS[".allSearchFields"] = array();
$tdataPLUGINS[".filterFields"] = array();
$tdataPLUGINS[".requiredSearchFields"] = array();

$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_NAME";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_VERSION";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_STATUS";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_TYPE";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_TYPE_VERSION";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_LIBRARY";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_LIBRARY_VERSION";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_AUTHOR";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_DESCRIPTION";
	$tdataPLUGINS[".allSearchFields"][] = "PLUGIN_LICENSE";
	$tdataPLUGINS[".allSearchFields"][] = "LOAD_OPTION";
	

$tdataPLUGINS[".googleLikeFields"] = array();
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".googleLikeFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".googleLikeFields"][] = "LOAD_OPTION";


$tdataPLUGINS[".advSearchFields"] = array();
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".advSearchFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".advSearchFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".tableType"] = "list";

$tdataPLUGINS[".printerPageOrientation"] = 0;
$tdataPLUGINS[".nPrinterPageScale"] = 100;

$tdataPLUGINS[".nPrinterSplitRecords"] = 40;

$tdataPLUGINS[".nPrinterPDFSplitRecords"] = 40;



$tdataPLUGINS[".geocodingEnabled"] = false;





$tdataPLUGINS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPLUGINS[".pageSize"] = 20;

$tdataPLUGINS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPLUGINS[".strOrderBy"] = $tstrOrderBy;

$tdataPLUGINS[".orderindexes"] = array();

$tdataPLUGINS[".sqlHead"] = "SELECT PLUGIN_NAME,  	PLUGIN_VERSION,  	PLUGIN_STATUS,  	PLUGIN_TYPE,  	PLUGIN_TYPE_VERSION,  	PLUGIN_LIBRARY,  	PLUGIN_LIBRARY_VERSION,  	PLUGIN_AUTHOR,  	PLUGIN_DESCRIPTION,  	PLUGIN_LICENSE,  	LOAD_OPTION";
$tdataPLUGINS[".sqlFrom"] = "FROM PLUGINS";
$tdataPLUGINS[".sqlWhereExpr"] = "";
$tdataPLUGINS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPLUGINS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPLUGINS[".arrGroupsPerPage"] = $arrGPP;

$tdataPLUGINS[".highlightSearchResults"] = true;

$tableKeysPLUGINS = array();
$tdataPLUGINS[".Keys"] = $tableKeysPLUGINS;

$tdataPLUGINS[".listFields"] = array();
$tdataPLUGINS[".listFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".listFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".listFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".listFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".listFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".listFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".listFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".listFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".listFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".listFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".listFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".hideMobileList"] = array();


$tdataPLUGINS[".viewFields"] = array();
$tdataPLUGINS[".viewFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".viewFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".viewFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".addFields"] = array();
$tdataPLUGINS[".addFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".addFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".addFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".addFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".addFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".addFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".addFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".addFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".addFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".addFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".addFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".masterListFields"] = array();
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".masterListFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".masterListFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".inlineAddFields"] = array();
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".inlineAddFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".inlineAddFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".editFields"] = array();
$tdataPLUGINS[".editFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".editFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".editFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".editFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".editFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".editFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".editFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".editFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".editFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".editFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".editFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".inlineEditFields"] = array();
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".inlineEditFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".inlineEditFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".updateSelectedFields"] = array();
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".updateSelectedFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".updateSelectedFields"][] = "LOAD_OPTION";


$tdataPLUGINS[".exportFields"] = array();
$tdataPLUGINS[".exportFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".exportFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".exportFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".importFields"] = array();
$tdataPLUGINS[".importFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".importFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".importFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".importFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".importFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".importFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".importFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".importFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".importFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".importFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".importFields"][] = "LOAD_OPTION";

$tdataPLUGINS[".printFields"] = array();
$tdataPLUGINS[".printFields"][] = "PLUGIN_NAME";
$tdataPLUGINS[".printFields"][] = "PLUGIN_VERSION";
$tdataPLUGINS[".printFields"][] = "PLUGIN_STATUS";
$tdataPLUGINS[".printFields"][] = "PLUGIN_TYPE";
$tdataPLUGINS[".printFields"][] = "PLUGIN_TYPE_VERSION";
$tdataPLUGINS[".printFields"][] = "PLUGIN_LIBRARY";
$tdataPLUGINS[".printFields"][] = "PLUGIN_LIBRARY_VERSION";
$tdataPLUGINS[".printFields"][] = "PLUGIN_AUTHOR";
$tdataPLUGINS[".printFields"][] = "PLUGIN_DESCRIPTION";
$tdataPLUGINS[".printFields"][] = "PLUGIN_LICENSE";
$tdataPLUGINS[".printFields"][] = "LOAD_OPTION";

//	PLUGIN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PLUGIN_NAME";
	$fdata["GoodName"] = "PLUGIN_NAME";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_NAME");
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

		$fdata["strField"] = "PLUGIN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_NAME";

	
	
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




	$tdataPLUGINS["PLUGIN_NAME"] = $fdata;
//	PLUGIN_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PLUGIN_VERSION";
	$fdata["GoodName"] = "PLUGIN_VERSION";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_VERSION");
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

		$fdata["strField"] = "PLUGIN_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_VERSION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPLUGINS["PLUGIN_VERSION"] = $fdata;
//	PLUGIN_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PLUGIN_STATUS";
	$fdata["GoodName"] = "PLUGIN_STATUS";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_STATUS");
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

		$fdata["strField"] = "PLUGIN_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_STATUS";

	
	
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




	$tdataPLUGINS["PLUGIN_STATUS"] = $fdata;
//	PLUGIN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PLUGIN_TYPE";
	$fdata["GoodName"] = "PLUGIN_TYPE";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_TYPE");
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

		$fdata["strField"] = "PLUGIN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataPLUGINS["PLUGIN_TYPE"] = $fdata;
//	PLUGIN_TYPE_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PLUGIN_TYPE_VERSION";
	$fdata["GoodName"] = "PLUGIN_TYPE_VERSION";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_TYPE_VERSION");
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

		$fdata["strField"] = "PLUGIN_TYPE_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_TYPE_VERSION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPLUGINS["PLUGIN_TYPE_VERSION"] = $fdata;
//	PLUGIN_LIBRARY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PLUGIN_LIBRARY";
	$fdata["GoodName"] = "PLUGIN_LIBRARY";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_LIBRARY");
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

		$fdata["strField"] = "PLUGIN_LIBRARY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_LIBRARY";

	
	
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




	$tdataPLUGINS["PLUGIN_LIBRARY"] = $fdata;
//	PLUGIN_LIBRARY_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PLUGIN_LIBRARY_VERSION";
	$fdata["GoodName"] = "PLUGIN_LIBRARY_VERSION";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_LIBRARY_VERSION");
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

		$fdata["strField"] = "PLUGIN_LIBRARY_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_LIBRARY_VERSION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPLUGINS["PLUGIN_LIBRARY_VERSION"] = $fdata;
//	PLUGIN_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PLUGIN_AUTHOR";
	$fdata["GoodName"] = "PLUGIN_AUTHOR";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_AUTHOR");
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

		$fdata["strField"] = "PLUGIN_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_AUTHOR";

	
	
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




	$tdataPLUGINS["PLUGIN_AUTHOR"] = $fdata;
//	PLUGIN_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PLUGIN_DESCRIPTION";
	$fdata["GoodName"] = "PLUGIN_DESCRIPTION";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_DESCRIPTION");
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

		$fdata["strField"] = "PLUGIN_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_DESCRIPTION";

	
	
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




	$tdataPLUGINS["PLUGIN_DESCRIPTION"] = $fdata;
//	PLUGIN_LICENSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PLUGIN_LICENSE";
	$fdata["GoodName"] = "PLUGIN_LICENSE";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","PLUGIN_LICENSE");
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

		$fdata["strField"] = "PLUGIN_LICENSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLUGIN_LICENSE";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataPLUGINS["PLUGIN_LICENSE"] = $fdata;
//	LOAD_OPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LOAD_OPTION";
	$fdata["GoodName"] = "LOAD_OPTION";
	$fdata["ownerTable"] = "PLUGINS";
	$fdata["Label"] = GetFieldLabel("PLUGINS","LOAD_OPTION");
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

		$fdata["strField"] = "LOAD_OPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOAD_OPTION";

	
	
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




	$tdataPLUGINS["LOAD_OPTION"] = $fdata;


$tables_data["PLUGINS"]=&$tdataPLUGINS;
$field_labels["PLUGINS"] = &$fieldLabelsPLUGINS;
$fieldToolTips["PLUGINS"] = &$fieldToolTipsPLUGINS;
$placeHolders["PLUGINS"] = &$placeHoldersPLUGINS;
$page_titles["PLUGINS"] = &$pageTitlesPLUGINS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PLUGINS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PLUGINS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PLUGINS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PLUGIN_NAME,  	PLUGIN_VERSION,  	PLUGIN_STATUS,  	PLUGIN_TYPE,  	PLUGIN_TYPE_VERSION,  	PLUGIN_LIBRARY,  	PLUGIN_LIBRARY_VERSION,  	PLUGIN_AUTHOR,  	PLUGIN_DESCRIPTION,  	PLUGIN_LICENSE,  	LOAD_OPTION";
$proto0["m_strFrom"] = "FROM PLUGINS";
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
	"m_strName" => "PLUGIN_NAME",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto6["m_sql"] = "PLUGIN_NAME";
$proto6["m_srcTableName"] = "PLUGINS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_VERSION",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto8["m_sql"] = "PLUGIN_VERSION";
$proto8["m_srcTableName"] = "PLUGINS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_STATUS",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto10["m_sql"] = "PLUGIN_STATUS";
$proto10["m_srcTableName"] = "PLUGINS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_TYPE",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto12["m_sql"] = "PLUGIN_TYPE";
$proto12["m_srcTableName"] = "PLUGINS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_TYPE_VERSION",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto14["m_sql"] = "PLUGIN_TYPE_VERSION";
$proto14["m_srcTableName"] = "PLUGINS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_LIBRARY",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto16["m_sql"] = "PLUGIN_LIBRARY";
$proto16["m_srcTableName"] = "PLUGINS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_LIBRARY_VERSION",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto18["m_sql"] = "PLUGIN_LIBRARY_VERSION";
$proto18["m_srcTableName"] = "PLUGINS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_AUTHOR",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto20["m_sql"] = "PLUGIN_AUTHOR";
$proto20["m_srcTableName"] = "PLUGINS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_DESCRIPTION",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto22["m_sql"] = "PLUGIN_DESCRIPTION";
$proto22["m_srcTableName"] = "PLUGINS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PLUGIN_LICENSE",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto24["m_sql"] = "PLUGIN_LICENSE";
$proto24["m_srcTableName"] = "PLUGINS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LOAD_OPTION",
	"m_strTable" => "PLUGINS",
	"m_srcTableName" => "PLUGINS"
));

$proto26["m_sql"] = "LOAD_OPTION";
$proto26["m_srcTableName"] = "PLUGINS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "PLUGINS";
$proto29["m_srcTableName"] = "PLUGINS";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "PLUGIN_NAME";
$proto29["m_columns"][] = "PLUGIN_VERSION";
$proto29["m_columns"][] = "PLUGIN_STATUS";
$proto29["m_columns"][] = "PLUGIN_TYPE";
$proto29["m_columns"][] = "PLUGIN_TYPE_VERSION";
$proto29["m_columns"][] = "PLUGIN_LIBRARY";
$proto29["m_columns"][] = "PLUGIN_LIBRARY_VERSION";
$proto29["m_columns"][] = "PLUGIN_AUTHOR";
$proto29["m_columns"][] = "PLUGIN_DESCRIPTION";
$proto29["m_columns"][] = "PLUGIN_LICENSE";
$proto29["m_columns"][] = "LOAD_OPTION";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "PLUGINS";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "PLUGINS";
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
$proto0["m_srcTableName"]="PLUGINS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PLUGINS = createSqlQuery_PLUGINS();


	
						;

											

$tdataPLUGINS[".sqlquery"] = $queryData_PLUGINS;

$tableEvents["PLUGINS"] = new eventsBase;
$tdataPLUGINS[".hasEvents"] = false;

?>
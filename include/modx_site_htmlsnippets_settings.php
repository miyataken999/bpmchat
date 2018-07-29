<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_htmlsnippets = array();
	$tdatamodx_site_htmlsnippets[".truncateText"] = true;
	$tdatamodx_site_htmlsnippets[".NumberOfChars"] = 20;
	$tdatamodx_site_htmlsnippets[".ShortName"] = "modx_site_htmlsnippets";
	$tdatamodx_site_htmlsnippets[".OwnerID"] = "";
	$tdatamodx_site_htmlsnippets[".OriginalTable"] = "modx_site_htmlsnippets";

//	field labels
$fieldLabelsmodx_site_htmlsnippets = array();
$fieldToolTipsmodx_site_htmlsnippets = array();
$pageTitlesmodx_site_htmlsnippets = array();
$placeHoldersmodx_site_htmlsnippets = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_htmlsnippets["Japanese"] = array();
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"] = array();
	$placeHoldersmodx_site_htmlsnippets["Japanese"] = array();
	$pageTitlesmodx_site_htmlsnippets["Japanese"] = array();
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["id"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["name"] = "Name";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["name"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["name"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["description"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["published"] = "Published";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["published"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["published"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["pub_date"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["pub_date"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["unpub_date"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["unpub_date"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["editor_type"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["editor_type"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["category"] = "Category";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["category"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["category"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["cache_type"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["cache_type"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["snippet"] = "Snippet";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["snippet"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["snippet"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["locked"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["locked"] = "";
	$fieldLabelsmodx_site_htmlsnippets["Japanese"]["modx_site_content_id"] = "Modx Site Content Id";
	$fieldToolTipsmodx_site_htmlsnippets["Japanese"]["modx_site_content_id"] = "";
	$placeHoldersmodx_site_htmlsnippets["Japanese"]["modx_site_content_id"] = "";
	if (count($fieldToolTipsmodx_site_htmlsnippets["Japanese"]))
		$tdatamodx_site_htmlsnippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_htmlsnippets["English"] = array();
	$fieldToolTipsmodx_site_htmlsnippets["English"] = array();
	$placeHoldersmodx_site_htmlsnippets["English"] = array();
	$pageTitlesmodx_site_htmlsnippets["English"] = array();
	$fieldLabelsmodx_site_htmlsnippets["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["id"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["id"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["name"] = "Name";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["name"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["name"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["description"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["description"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["published"] = "Published";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["published"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["published"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["pub_date"] = "Pub Date";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["pub_date"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["pub_date"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["unpub_date"] = "Unpub Date";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["unpub_date"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["unpub_date"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["editor_type"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["editor_type"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["category"] = "Category";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["category"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["category"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["cache_type"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["cache_type"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["snippet"] = "Snippet";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["snippet"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["snippet"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["locked"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["locked"] = "";
	$fieldLabelsmodx_site_htmlsnippets["English"]["modx_site_content_id"] = "Modx Site Content Id";
	$fieldToolTipsmodx_site_htmlsnippets["English"]["modx_site_content_id"] = "";
	$placeHoldersmodx_site_htmlsnippets["English"]["modx_site_content_id"] = "";
	if (count($fieldToolTipsmodx_site_htmlsnippets["English"]))
		$tdatamodx_site_htmlsnippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_htmlsnippets[""] = array();
	$fieldToolTipsmodx_site_htmlsnippets[""] = array();
	$placeHoldersmodx_site_htmlsnippets[""] = array();
	$pageTitlesmodx_site_htmlsnippets[""] = array();
	if (count($fieldToolTipsmodx_site_htmlsnippets[""]))
		$tdatamodx_site_htmlsnippets[".isUseToolTips"] = true;
}


	$tdatamodx_site_htmlsnippets[".NCSearch"] = true;



$tdatamodx_site_htmlsnippets[".shortTableName"] = "modx_site_htmlsnippets";
$tdatamodx_site_htmlsnippets[".nSecOptions"] = 0;
$tdatamodx_site_htmlsnippets[".recsPerRowPrint"] = 1;
$tdatamodx_site_htmlsnippets[".mainTableOwnerID"] = "";
$tdatamodx_site_htmlsnippets[".moveNext"] = 0;
$tdatamodx_site_htmlsnippets[".entityType"] = 0;

$tdatamodx_site_htmlsnippets[".strOriginalTableName"] = "modx_site_htmlsnippets";

	



$tdatamodx_site_htmlsnippets[".showAddInPopup"] = false;

$tdatamodx_site_htmlsnippets[".showEditInPopup"] = false;

$tdatamodx_site_htmlsnippets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodx_site_htmlsnippets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_htmlsnippets[".fieldsForRegister"] = array();
	
$tdatamodx_site_htmlsnippets[".listAjax"] = false;

	$tdatamodx_site_htmlsnippets[".audit"] = true;

	$tdatamodx_site_htmlsnippets[".locking"] = false;

$tdatamodx_site_htmlsnippets[".edit"] = true;
$tdatamodx_site_htmlsnippets[".afterEditAction"] = 1;
$tdatamodx_site_htmlsnippets[".closePopupAfterEdit"] = 1;
$tdatamodx_site_htmlsnippets[".afterEditActionDetTable"] = "";

$tdatamodx_site_htmlsnippets[".add"] = true;
$tdatamodx_site_htmlsnippets[".afterAddAction"] = 1;
$tdatamodx_site_htmlsnippets[".closePopupAfterAdd"] = 1;
$tdatamodx_site_htmlsnippets[".afterAddActionDetTable"] = "";

$tdatamodx_site_htmlsnippets[".list"] = true;

$tdatamodx_site_htmlsnippets[".inlineEdit"] = true;

$tdatamodx_site_htmlsnippets[".updateSelected"] = true;

$tdatamodx_site_htmlsnippets[".reorderRecordsByHeader"] = true;



$tdatamodx_site_htmlsnippets[".inlineAdd"] = true;
$tdatamodx_site_htmlsnippets[".copy"] = true;
$tdatamodx_site_htmlsnippets[".view"] = true;

$tdatamodx_site_htmlsnippets[".import"] = true;

$tdatamodx_site_htmlsnippets[".exportTo"] = true;

$tdatamodx_site_htmlsnippets[".printFriendly"] = true;

$tdatamodx_site_htmlsnippets[".delete"] = true;

$tdatamodx_site_htmlsnippets[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_htmlsnippets[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_htmlsnippets[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodx_site_htmlsnippets[".searchSaving"] = false;
//

$tdatamodx_site_htmlsnippets[".showSearchPanel"] = true;
		$tdatamodx_site_htmlsnippets[".flexibleSearch"] = true;

$tdatamodx_site_htmlsnippets[".isUseAjaxSuggest"] = true;

$tdatamodx_site_htmlsnippets[".rowHighlite"] = true;



																												

$tdatamodx_site_htmlsnippets[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_htmlsnippets[".buttonsAdded"] = false;

$tdatamodx_site_htmlsnippets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_htmlsnippets[".isUseTimeForSearch"] = false;



$tdatamodx_site_htmlsnippets[".badgeColor"] = "e8926f";


$tdatamodx_site_htmlsnippets[".allSearchFields"] = array();
$tdatamodx_site_htmlsnippets[".filterFields"] = array();
$tdatamodx_site_htmlsnippets[".requiredSearchFields"] = array();

$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "id";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "name";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "description";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "published";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "pub_date";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "unpub_date";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "editor_type";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "category";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "cache_type";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "snippet";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "locked";
	$tdatamodx_site_htmlsnippets[".allSearchFields"][] = "modx_site_content_id";
	

$tdatamodx_site_htmlsnippets[".googleLikeFields"] = array();
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "id";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "name";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "description";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "published";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "category";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".googleLikeFields"][] = "modx_site_content_id";


$tdatamodx_site_htmlsnippets[".advSearchFields"] = array();
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "id";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "name";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "description";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "published";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "category";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".advSearchFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".tableType"] = "list";

$tdatamodx_site_htmlsnippets[".printerPageOrientation"] = 0;
$tdatamodx_site_htmlsnippets[".nPrinterPageScale"] = 100;

$tdatamodx_site_htmlsnippets[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_htmlsnippets[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_htmlsnippets[".geocodingEnabled"] = false;





$tdatamodx_site_htmlsnippets[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_site_htmlsnippets[".pageSize"] = 20;

$tdatamodx_site_htmlsnippets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_htmlsnippets[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_htmlsnippets[".orderindexes"] = array();

$tdatamodx_site_htmlsnippets[".sqlHead"] = "SELECT id,  	name,  	description,  	published,  	pub_date,  	unpub_date,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	modx_site_content_id";
$tdatamodx_site_htmlsnippets[".sqlFrom"] = "FROM modx_site_htmlsnippets";
$tdatamodx_site_htmlsnippets[".sqlWhereExpr"] = "";
$tdatamodx_site_htmlsnippets[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_htmlsnippets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_htmlsnippets[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_htmlsnippets[".highlightSearchResults"] = true;

$tableKeysmodx_site_htmlsnippets = array();
$tableKeysmodx_site_htmlsnippets[] = "id";
$tdatamodx_site_htmlsnippets[".Keys"] = $tableKeysmodx_site_htmlsnippets;

$tdatamodx_site_htmlsnippets[".listFields"] = array();
$tdatamodx_site_htmlsnippets[".listFields"][] = "modx_site_content_id";
$tdatamodx_site_htmlsnippets[".listFields"][] = "id";
$tdatamodx_site_htmlsnippets[".listFields"][] = "name";
$tdatamodx_site_htmlsnippets[".listFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".listFields"][] = "description";
$tdatamodx_site_htmlsnippets[".listFields"][] = "published";
$tdatamodx_site_htmlsnippets[".listFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".listFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".listFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".listFields"][] = "category";
$tdatamodx_site_htmlsnippets[".listFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".listFields"][] = "locked";

$tdatamodx_site_htmlsnippets[".hideMobileList"] = array();


$tdatamodx_site_htmlsnippets[".viewFields"] = array();
$tdatamodx_site_htmlsnippets[".viewFields"][] = "id";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "name";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "description";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "published";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "category";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".viewFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".addFields"] = array();
$tdatamodx_site_htmlsnippets[".addFields"][] = "name";
$tdatamodx_site_htmlsnippets[".addFields"][] = "description";
$tdatamodx_site_htmlsnippets[".addFields"][] = "published";
$tdatamodx_site_htmlsnippets[".addFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".addFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".addFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".addFields"][] = "category";
$tdatamodx_site_htmlsnippets[".addFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".addFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".addFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".addFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".masterListFields"] = array();
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "id";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "name";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "description";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "published";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "category";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".masterListFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".inlineAddFields"] = array();
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "modx_site_content_id";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "name";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "description";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "published";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "category";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".inlineAddFields"][] = "locked";

$tdatamodx_site_htmlsnippets[".editFields"] = array();
$tdatamodx_site_htmlsnippets[".editFields"][] = "name";
$tdatamodx_site_htmlsnippets[".editFields"][] = "description";
$tdatamodx_site_htmlsnippets[".editFields"][] = "published";
$tdatamodx_site_htmlsnippets[".editFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".editFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".editFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".editFields"][] = "category";
$tdatamodx_site_htmlsnippets[".editFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".editFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".editFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".editFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".inlineEditFields"] = array();
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "modx_site_content_id";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "name";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "description";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "published";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "category";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".inlineEditFields"][] = "locked";

$tdatamodx_site_htmlsnippets[".updateSelectedFields"] = array();
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "name";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "description";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "published";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "category";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".updateSelectedFields"][] = "modx_site_content_id";


$tdatamodx_site_htmlsnippets[".exportFields"] = array();
$tdatamodx_site_htmlsnippets[".exportFields"][] = "id";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "name";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "description";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "published";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "category";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".exportFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".importFields"] = array();
$tdatamodx_site_htmlsnippets[".importFields"][] = "id";
$tdatamodx_site_htmlsnippets[".importFields"][] = "name";
$tdatamodx_site_htmlsnippets[".importFields"][] = "description";
$tdatamodx_site_htmlsnippets[".importFields"][] = "published";
$tdatamodx_site_htmlsnippets[".importFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".importFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".importFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".importFields"][] = "category";
$tdatamodx_site_htmlsnippets[".importFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".importFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".importFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".importFields"][] = "modx_site_content_id";

$tdatamodx_site_htmlsnippets[".printFields"] = array();
$tdatamodx_site_htmlsnippets[".printFields"][] = "id";
$tdatamodx_site_htmlsnippets[".printFields"][] = "name";
$tdatamodx_site_htmlsnippets[".printFields"][] = "description";
$tdatamodx_site_htmlsnippets[".printFields"][] = "published";
$tdatamodx_site_htmlsnippets[".printFields"][] = "pub_date";
$tdatamodx_site_htmlsnippets[".printFields"][] = "unpub_date";
$tdatamodx_site_htmlsnippets[".printFields"][] = "editor_type";
$tdatamodx_site_htmlsnippets[".printFields"][] = "category";
$tdatamodx_site_htmlsnippets[".printFields"][] = "cache_type";
$tdatamodx_site_htmlsnippets[".printFields"][] = "snippet";
$tdatamodx_site_htmlsnippets[".printFields"][] = "locked";
$tdatamodx_site_htmlsnippets[".printFields"][] = "modx_site_content_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamodx_site_htmlsnippets["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","name");
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

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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




	$tdatamodx_site_htmlsnippets["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","description");
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

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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




	$tdatamodx_site_htmlsnippets["description"] = $fdata;
//	published
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "published";
	$fdata["GoodName"] = "published";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","published");
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

		$fdata["strField"] = "published";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "published";

	
	
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




	$tdatamodx_site_htmlsnippets["published"] = $fdata;
//	pub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pub_date";
	$fdata["GoodName"] = "pub_date";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","pub_date");
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

		$fdata["strField"] = "pub_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pub_date";

	
	
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




	$tdatamodx_site_htmlsnippets["pub_date"] = $fdata;
//	unpub_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unpub_date";
	$fdata["GoodName"] = "unpub_date";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","unpub_date");
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

		$fdata["strField"] = "unpub_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unpub_date";

	
	
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




	$tdatamodx_site_htmlsnippets["unpub_date"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","editor_type");
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

		$fdata["strField"] = "editor_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "editor_type";

	
	
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




	$tdatamodx_site_htmlsnippets["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","category");
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

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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




	$tdatamodx_site_htmlsnippets["category"] = $fdata;
//	cache_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cache_type";
	$fdata["GoodName"] = "cache_type";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","cache_type");
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

		$fdata["strField"] = "cache_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cache_type";

	
	
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




	$tdatamodx_site_htmlsnippets["cache_type"] = $fdata;
//	snippet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "snippet";
	$fdata["GoodName"] = "snippet";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","snippet");
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

		$fdata["strField"] = "snippet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "snippet";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 400;

	
	
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




	$tdatamodx_site_htmlsnippets["snippet"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","locked");
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

		$fdata["strField"] = "locked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "locked";

	
	
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




	$tdatamodx_site_htmlsnippets["locked"] = $fdata;
//	modx_site_content_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "modx_site_content_id";
	$fdata["GoodName"] = "modx_site_content_id";
	$fdata["ownerTable"] = "modx_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modx_site_htmlsnippets","modx_site_content_id");
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

		$fdata["strField"] = "modx_site_content_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modx_site_content_id";

	
	
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




	$tdatamodx_site_htmlsnippets["modx_site_content_id"] = $fdata;


$tables_data["modx_site_htmlsnippets"]=&$tdatamodx_site_htmlsnippets;
$field_labels["modx_site_htmlsnippets"] = &$fieldLabelsmodx_site_htmlsnippets;
$fieldToolTips["modx_site_htmlsnippets"] = &$fieldToolTipsmodx_site_htmlsnippets;
$placeHolders["modx_site_htmlsnippets"] = &$placeHoldersmodx_site_htmlsnippets;
$page_titles["modx_site_htmlsnippets"] = &$pageTitlesmodx_site_htmlsnippets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_htmlsnippets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_htmlsnippets"] = array();


	
				$strOriginalDetailsTable="modx_site_content";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="modx_site_content";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "modx_site_content";
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
					$masterTablesData["modx_site_htmlsnippets"][0] = $masterParams;
				$masterTablesData["modx_site_htmlsnippets"][0]["masterKeys"] = array();
	$masterTablesData["modx_site_htmlsnippets"][0]["masterKeys"][]="id";
				$masterTablesData["modx_site_htmlsnippets"][0]["detailKeys"] = array();
	$masterTablesData["modx_site_htmlsnippets"][0]["detailKeys"][]="modx_site_content_id";
		
	
				$strOriginalDetailsTable="modx_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="modx_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "modx_categories";
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
					$masterTablesData["modx_site_htmlsnippets"][1] = $masterParams;
				$masterTablesData["modx_site_htmlsnippets"][1]["masterKeys"] = array();
	$masterTablesData["modx_site_htmlsnippets"][1]["masterKeys"][]="id";
				$masterTablesData["modx_site_htmlsnippets"][1]["detailKeys"] = array();
	$masterTablesData["modx_site_htmlsnippets"][1]["detailKeys"][]="category";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_htmlsnippets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description,  	published,  	pub_date,  	unpub_date,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	modx_site_content_id";
$proto0["m_strFrom"] = "FROM modx_site_htmlsnippets";
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
	"m_strName" => "id",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modx_site_htmlsnippets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "modx_site_htmlsnippets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "modx_site_htmlsnippets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "published",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto12["m_sql"] = "published";
$proto12["m_srcTableName"] = "modx_site_htmlsnippets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pub_date",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto14["m_sql"] = "pub_date";
$proto14["m_srcTableName"] = "modx_site_htmlsnippets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unpub_date",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto16["m_sql"] = "unpub_date";
$proto16["m_srcTableName"] = "modx_site_htmlsnippets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto18["m_sql"] = "editor_type";
$proto18["m_srcTableName"] = "modx_site_htmlsnippets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto20["m_sql"] = "category";
$proto20["m_srcTableName"] = "modx_site_htmlsnippets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cache_type",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto22["m_sql"] = "cache_type";
$proto22["m_srcTableName"] = "modx_site_htmlsnippets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "snippet",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto24["m_sql"] = "snippet";
$proto24["m_srcTableName"] = "modx_site_htmlsnippets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto26["m_sql"] = "locked";
$proto26["m_srcTableName"] = "modx_site_htmlsnippets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "modx_site_content_id",
	"m_strTable" => "modx_site_htmlsnippets",
	"m_srcTableName" => "modx_site_htmlsnippets"
));

$proto28["m_sql"] = "modx_site_content_id";
$proto28["m_srcTableName"] = "modx_site_htmlsnippets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "modx_site_htmlsnippets";
$proto31["m_srcTableName"] = "modx_site_htmlsnippets";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "published";
$proto31["m_columns"][] = "pub_date";
$proto31["m_columns"][] = "unpub_date";
$proto31["m_columns"][] = "editor_type";
$proto31["m_columns"][] = "category";
$proto31["m_columns"][] = "cache_type";
$proto31["m_columns"][] = "snippet";
$proto31["m_columns"][] = "locked";
$proto31["m_columns"][] = "modx_site_content_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "modx_site_htmlsnippets";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "modx_site_htmlsnippets";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modx_site_htmlsnippets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modx_site_htmlsnippets = createSqlQuery_modx_site_htmlsnippets();


	
						;

												

$tdatamodx_site_htmlsnippets[".sqlquery"] = $queryData_modx_site_htmlsnippets;

$tableEvents["modx_site_htmlsnippets"] = new eventsBase;
$tdatamodx_site_htmlsnippets[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_snippets = array();
	$tdatamodx_site_snippets[".truncateText"] = true;
	$tdatamodx_site_snippets[".NumberOfChars"] = 20;
	$tdatamodx_site_snippets[".ShortName"] = "modx_site_snippets";
	$tdatamodx_site_snippets[".OwnerID"] = "";
	$tdatamodx_site_snippets[".OriginalTable"] = "modx_site_snippets";

//	field labels
$fieldLabelsmodx_site_snippets = array();
$fieldToolTipsmodx_site_snippets = array();
$pageTitlesmodx_site_snippets = array();
$placeHoldersmodx_site_snippets = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_snippets["Japanese"] = array();
	$fieldToolTipsmodx_site_snippets["Japanese"] = array();
	$placeHoldersmodx_site_snippets["Japanese"] = array();
	$pageTitlesmodx_site_snippets["Japanese"] = array();
	$fieldLabelsmodx_site_snippets["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_snippets["Japanese"]["id"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["name"] = "Name";
	$fieldToolTipsmodx_site_snippets["Japanese"]["name"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["name"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_snippets["Japanese"]["description"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_snippets["Japanese"]["editor_type"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["editor_type"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["category"] = "Category";
	$fieldToolTipsmodx_site_snippets["Japanese"]["category"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["category"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodx_site_snippets["Japanese"]["cache_type"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["cache_type"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["snippet"] = "Snippet";
	$fieldToolTipsmodx_site_snippets["Japanese"]["snippet"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["snippet"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_snippets["Japanese"]["locked"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["locked"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodx_site_snippets["Japanese"]["properties"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["properties"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodx_site_snippets["Japanese"]["moduleguid"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["moduleguid"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["modx_site_content_id"] = "Modx Site Content Id";
	$fieldToolTipsmodx_site_snippets["Japanese"]["modx_site_content_id"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["modx_site_content_id"] = "";
	$fieldLabelsmodx_site_snippets["Japanese"]["boot"] = "Boot";
	$fieldToolTipsmodx_site_snippets["Japanese"]["boot"] = "";
	$placeHoldersmodx_site_snippets["Japanese"]["boot"] = "";
	if (count($fieldToolTipsmodx_site_snippets["Japanese"]))
		$tdatamodx_site_snippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_snippets["English"] = array();
	$fieldToolTipsmodx_site_snippets["English"] = array();
	$placeHoldersmodx_site_snippets["English"] = array();
	$pageTitlesmodx_site_snippets["English"] = array();
	$fieldLabelsmodx_site_snippets["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_snippets["English"]["id"] = "";
	$placeHoldersmodx_site_snippets["English"]["id"] = "";
	$fieldLabelsmodx_site_snippets["English"]["name"] = "Name";
	$fieldToolTipsmodx_site_snippets["English"]["name"] = "";
	$placeHoldersmodx_site_snippets["English"]["name"] = "";
	$fieldLabelsmodx_site_snippets["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_snippets["English"]["description"] = "";
	$placeHoldersmodx_site_snippets["English"]["description"] = "";
	$fieldLabelsmodx_site_snippets["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_snippets["English"]["editor_type"] = "";
	$placeHoldersmodx_site_snippets["English"]["editor_type"] = "";
	$fieldLabelsmodx_site_snippets["English"]["category"] = "Category";
	$fieldToolTipsmodx_site_snippets["English"]["category"] = "";
	$placeHoldersmodx_site_snippets["English"]["category"] = "";
	$fieldLabelsmodx_site_snippets["English"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodx_site_snippets["English"]["cache_type"] = "";
	$placeHoldersmodx_site_snippets["English"]["cache_type"] = "";
	$fieldLabelsmodx_site_snippets["English"]["snippet"] = "Snippet";
	$fieldToolTipsmodx_site_snippets["English"]["snippet"] = "";
	$placeHoldersmodx_site_snippets["English"]["snippet"] = "";
	$fieldLabelsmodx_site_snippets["English"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_snippets["English"]["locked"] = "";
	$placeHoldersmodx_site_snippets["English"]["locked"] = "";
	$fieldLabelsmodx_site_snippets["English"]["properties"] = "Properties";
	$fieldToolTipsmodx_site_snippets["English"]["properties"] = "";
	$placeHoldersmodx_site_snippets["English"]["properties"] = "";
	$fieldLabelsmodx_site_snippets["English"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodx_site_snippets["English"]["moduleguid"] = "";
	$placeHoldersmodx_site_snippets["English"]["moduleguid"] = "";
	$fieldLabelsmodx_site_snippets["English"]["modx_site_content_id"] = "Modx Site Content Id";
	$fieldToolTipsmodx_site_snippets["English"]["modx_site_content_id"] = "";
	$placeHoldersmodx_site_snippets["English"]["modx_site_content_id"] = "";
	$fieldLabelsmodx_site_snippets["English"]["boot"] = "Boot";
	$fieldToolTipsmodx_site_snippets["English"]["boot"] = "";
	$placeHoldersmodx_site_snippets["English"]["boot"] = "";
	if (count($fieldToolTipsmodx_site_snippets["English"]))
		$tdatamodx_site_snippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_snippets[""] = array();
	$fieldToolTipsmodx_site_snippets[""] = array();
	$placeHoldersmodx_site_snippets[""] = array();
	$pageTitlesmodx_site_snippets[""] = array();
	if (count($fieldToolTipsmodx_site_snippets[""]))
		$tdatamodx_site_snippets[".isUseToolTips"] = true;
}


	$tdatamodx_site_snippets[".NCSearch"] = true;



$tdatamodx_site_snippets[".shortTableName"] = "modx_site_snippets";
$tdatamodx_site_snippets[".nSecOptions"] = 0;
$tdatamodx_site_snippets[".recsPerRowPrint"] = 1;
$tdatamodx_site_snippets[".mainTableOwnerID"] = "";
$tdatamodx_site_snippets[".moveNext"] = 0;
$tdatamodx_site_snippets[".entityType"] = 0;

$tdatamodx_site_snippets[".strOriginalTableName"] = "modx_site_snippets";

	



$tdatamodx_site_snippets[".showAddInPopup"] = false;

$tdatamodx_site_snippets[".showEditInPopup"] = false;

$tdatamodx_site_snippets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodx_site_snippets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_snippets[".fieldsForRegister"] = array();
	
$tdatamodx_site_snippets[".listAjax"] = false;

	$tdatamodx_site_snippets[".audit"] = true;

	$tdatamodx_site_snippets[".locking"] = false;

$tdatamodx_site_snippets[".edit"] = true;
$tdatamodx_site_snippets[".afterEditAction"] = 1;
$tdatamodx_site_snippets[".closePopupAfterEdit"] = 1;
$tdatamodx_site_snippets[".afterEditActionDetTable"] = "";

$tdatamodx_site_snippets[".add"] = true;
$tdatamodx_site_snippets[".afterAddAction"] = 1;
$tdatamodx_site_snippets[".closePopupAfterAdd"] = 1;
$tdatamodx_site_snippets[".afterAddActionDetTable"] = "";

$tdatamodx_site_snippets[".list"] = true;

$tdatamodx_site_snippets[".inlineEdit"] = true;

$tdatamodx_site_snippets[".updateSelected"] = true;

$tdatamodx_site_snippets[".reorderRecordsByHeader"] = true;



$tdatamodx_site_snippets[".inlineAdd"] = true;
$tdatamodx_site_snippets[".copy"] = true;
$tdatamodx_site_snippets[".view"] = true;

$tdatamodx_site_snippets[".import"] = true;

$tdatamodx_site_snippets[".exportTo"] = true;

$tdatamodx_site_snippets[".printFriendly"] = true;

$tdatamodx_site_snippets[".delete"] = true;

$tdatamodx_site_snippets[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_snippets[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_snippets[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodx_site_snippets[".searchSaving"] = false;
//

$tdatamodx_site_snippets[".showSearchPanel"] = true;
		$tdatamodx_site_snippets[".flexibleSearch"] = true;

$tdatamodx_site_snippets[".isUseAjaxSuggest"] = true;

$tdatamodx_site_snippets[".rowHighlite"] = true;



																																								

$tdatamodx_site_snippets[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_snippets[".buttonsAdded"] = false;

$tdatamodx_site_snippets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_snippets[".isUseTimeForSearch"] = false;



$tdatamodx_site_snippets[".badgeColor"] = "4682b4";


$tdatamodx_site_snippets[".allSearchFields"] = array();
$tdatamodx_site_snippets[".filterFields"] = array();
$tdatamodx_site_snippets[".requiredSearchFields"] = array();

$tdatamodx_site_snippets[".allSearchFields"][] = "id";
	$tdatamodx_site_snippets[".allSearchFields"][] = "name";
	$tdatamodx_site_snippets[".allSearchFields"][] = "description";
	$tdatamodx_site_snippets[".allSearchFields"][] = "editor_type";
	$tdatamodx_site_snippets[".allSearchFields"][] = "category";
	$tdatamodx_site_snippets[".allSearchFields"][] = "cache_type";
	$tdatamodx_site_snippets[".allSearchFields"][] = "snippet";
	$tdatamodx_site_snippets[".allSearchFields"][] = "locked";
	$tdatamodx_site_snippets[".allSearchFields"][] = "properties";
	$tdatamodx_site_snippets[".allSearchFields"][] = "moduleguid";
	$tdatamodx_site_snippets[".allSearchFields"][] = "modx_site_content_id";
	$tdatamodx_site_snippets[".allSearchFields"][] = "boot";
	

$tdatamodx_site_snippets[".googleLikeFields"] = array();
$tdatamodx_site_snippets[".googleLikeFields"][] = "id";
$tdatamodx_site_snippets[".googleLikeFields"][] = "name";
$tdatamodx_site_snippets[".googleLikeFields"][] = "description";
$tdatamodx_site_snippets[".googleLikeFields"][] = "editor_type";
$tdatamodx_site_snippets[".googleLikeFields"][] = "category";
$tdatamodx_site_snippets[".googleLikeFields"][] = "cache_type";
$tdatamodx_site_snippets[".googleLikeFields"][] = "snippet";
$tdatamodx_site_snippets[".googleLikeFields"][] = "locked";
$tdatamodx_site_snippets[".googleLikeFields"][] = "properties";
$tdatamodx_site_snippets[".googleLikeFields"][] = "moduleguid";
$tdatamodx_site_snippets[".googleLikeFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".googleLikeFields"][] = "boot";


$tdatamodx_site_snippets[".advSearchFields"] = array();
$tdatamodx_site_snippets[".advSearchFields"][] = "id";
$tdatamodx_site_snippets[".advSearchFields"][] = "name";
$tdatamodx_site_snippets[".advSearchFields"][] = "description";
$tdatamodx_site_snippets[".advSearchFields"][] = "editor_type";
$tdatamodx_site_snippets[".advSearchFields"][] = "category";
$tdatamodx_site_snippets[".advSearchFields"][] = "cache_type";
$tdatamodx_site_snippets[".advSearchFields"][] = "snippet";
$tdatamodx_site_snippets[".advSearchFields"][] = "locked";
$tdatamodx_site_snippets[".advSearchFields"][] = "properties";
$tdatamodx_site_snippets[".advSearchFields"][] = "moduleguid";
$tdatamodx_site_snippets[".advSearchFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".advSearchFields"][] = "boot";

$tdatamodx_site_snippets[".tableType"] = "list";

$tdatamodx_site_snippets[".printerPageOrientation"] = 0;
$tdatamodx_site_snippets[".nPrinterPageScale"] = 100;

$tdatamodx_site_snippets[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_snippets[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_snippets[".geocodingEnabled"] = false;





$tdatamodx_site_snippets[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_site_snippets[".pageSize"] = 20;

$tdatamodx_site_snippets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_snippets[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_snippets[".orderindexes"] = array();

$tdatamodx_site_snippets[".sqlHead"] = "SELECT id,  	name,  	description,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	properties,  	moduleguid,  	modx_site_content_id,  	boot";
$tdatamodx_site_snippets[".sqlFrom"] = "FROM modx_site_snippets";
$tdatamodx_site_snippets[".sqlWhereExpr"] = "";
$tdatamodx_site_snippets[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_snippets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_snippets[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_snippets[".highlightSearchResults"] = true;

$tableKeysmodx_site_snippets = array();
$tableKeysmodx_site_snippets[] = "id";
$tdatamodx_site_snippets[".Keys"] = $tableKeysmodx_site_snippets;

$tdatamodx_site_snippets[".listFields"] = array();
$tdatamodx_site_snippets[".listFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".listFields"][] = "boot";
$tdatamodx_site_snippets[".listFields"][] = "id";
$tdatamodx_site_snippets[".listFields"][] = "name";
$tdatamodx_site_snippets[".listFields"][] = "snippet";
$tdatamodx_site_snippets[".listFields"][] = "description";
$tdatamodx_site_snippets[".listFields"][] = "editor_type";
$tdatamodx_site_snippets[".listFields"][] = "category";
$tdatamodx_site_snippets[".listFields"][] = "cache_type";
$tdatamodx_site_snippets[".listFields"][] = "locked";
$tdatamodx_site_snippets[".listFields"][] = "properties";
$tdatamodx_site_snippets[".listFields"][] = "moduleguid";

$tdatamodx_site_snippets[".hideMobileList"] = array();


$tdatamodx_site_snippets[".viewFields"] = array();
$tdatamodx_site_snippets[".viewFields"][] = "id";
$tdatamodx_site_snippets[".viewFields"][] = "name";
$tdatamodx_site_snippets[".viewFields"][] = "description";
$tdatamodx_site_snippets[".viewFields"][] = "editor_type";
$tdatamodx_site_snippets[".viewFields"][] = "category";
$tdatamodx_site_snippets[".viewFields"][] = "cache_type";
$tdatamodx_site_snippets[".viewFields"][] = "snippet";
$tdatamodx_site_snippets[".viewFields"][] = "locked";
$tdatamodx_site_snippets[".viewFields"][] = "properties";
$tdatamodx_site_snippets[".viewFields"][] = "moduleguid";
$tdatamodx_site_snippets[".viewFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".viewFields"][] = "boot";

$tdatamodx_site_snippets[".addFields"] = array();
$tdatamodx_site_snippets[".addFields"][] = "name";
$tdatamodx_site_snippets[".addFields"][] = "description";
$tdatamodx_site_snippets[".addFields"][] = "editor_type";
$tdatamodx_site_snippets[".addFields"][] = "category";
$tdatamodx_site_snippets[".addFields"][] = "cache_type";
$tdatamodx_site_snippets[".addFields"][] = "snippet";
$tdatamodx_site_snippets[".addFields"][] = "locked";
$tdatamodx_site_snippets[".addFields"][] = "properties";
$tdatamodx_site_snippets[".addFields"][] = "moduleguid";
$tdatamodx_site_snippets[".addFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".addFields"][] = "boot";

$tdatamodx_site_snippets[".masterListFields"] = array();
$tdatamodx_site_snippets[".masterListFields"][] = "id";
$tdatamodx_site_snippets[".masterListFields"][] = "name";
$tdatamodx_site_snippets[".masterListFields"][] = "description";
$tdatamodx_site_snippets[".masterListFields"][] = "editor_type";
$tdatamodx_site_snippets[".masterListFields"][] = "category";
$tdatamodx_site_snippets[".masterListFields"][] = "cache_type";
$tdatamodx_site_snippets[".masterListFields"][] = "snippet";
$tdatamodx_site_snippets[".masterListFields"][] = "locked";
$tdatamodx_site_snippets[".masterListFields"][] = "properties";
$tdatamodx_site_snippets[".masterListFields"][] = "moduleguid";
$tdatamodx_site_snippets[".masterListFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".masterListFields"][] = "boot";

$tdatamodx_site_snippets[".inlineAddFields"] = array();
$tdatamodx_site_snippets[".inlineAddFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".inlineAddFields"][] = "boot";
$tdatamodx_site_snippets[".inlineAddFields"][] = "name";
$tdatamodx_site_snippets[".inlineAddFields"][] = "snippet";
$tdatamodx_site_snippets[".inlineAddFields"][] = "description";
$tdatamodx_site_snippets[".inlineAddFields"][] = "editor_type";
$tdatamodx_site_snippets[".inlineAddFields"][] = "category";
$tdatamodx_site_snippets[".inlineAddFields"][] = "cache_type";
$tdatamodx_site_snippets[".inlineAddFields"][] = "locked";
$tdatamodx_site_snippets[".inlineAddFields"][] = "properties";
$tdatamodx_site_snippets[".inlineAddFields"][] = "moduleguid";

$tdatamodx_site_snippets[".editFields"] = array();
$tdatamodx_site_snippets[".editFields"][] = "name";
$tdatamodx_site_snippets[".editFields"][] = "description";
$tdatamodx_site_snippets[".editFields"][] = "editor_type";
$tdatamodx_site_snippets[".editFields"][] = "category";
$tdatamodx_site_snippets[".editFields"][] = "cache_type";
$tdatamodx_site_snippets[".editFields"][] = "snippet";
$tdatamodx_site_snippets[".editFields"][] = "locked";
$tdatamodx_site_snippets[".editFields"][] = "properties";
$tdatamodx_site_snippets[".editFields"][] = "moduleguid";
$tdatamodx_site_snippets[".editFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".editFields"][] = "boot";

$tdatamodx_site_snippets[".inlineEditFields"] = array();
$tdatamodx_site_snippets[".inlineEditFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".inlineEditFields"][] = "boot";
$tdatamodx_site_snippets[".inlineEditFields"][] = "name";
$tdatamodx_site_snippets[".inlineEditFields"][] = "snippet";
$tdatamodx_site_snippets[".inlineEditFields"][] = "description";
$tdatamodx_site_snippets[".inlineEditFields"][] = "editor_type";
$tdatamodx_site_snippets[".inlineEditFields"][] = "category";
$tdatamodx_site_snippets[".inlineEditFields"][] = "cache_type";
$tdatamodx_site_snippets[".inlineEditFields"][] = "locked";
$tdatamodx_site_snippets[".inlineEditFields"][] = "properties";
$tdatamodx_site_snippets[".inlineEditFields"][] = "moduleguid";

$tdatamodx_site_snippets[".updateSelectedFields"] = array();
$tdatamodx_site_snippets[".updateSelectedFields"][] = "name";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "description";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "editor_type";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "category";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "cache_type";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "snippet";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "locked";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "properties";
$tdatamodx_site_snippets[".updateSelectedFields"][] = "moduleguid";


$tdatamodx_site_snippets[".exportFields"] = array();
$tdatamodx_site_snippets[".exportFields"][] = "id";
$tdatamodx_site_snippets[".exportFields"][] = "name";
$tdatamodx_site_snippets[".exportFields"][] = "description";
$tdatamodx_site_snippets[".exportFields"][] = "editor_type";
$tdatamodx_site_snippets[".exportFields"][] = "category";
$tdatamodx_site_snippets[".exportFields"][] = "cache_type";
$tdatamodx_site_snippets[".exportFields"][] = "snippet";
$tdatamodx_site_snippets[".exportFields"][] = "locked";
$tdatamodx_site_snippets[".exportFields"][] = "properties";
$tdatamodx_site_snippets[".exportFields"][] = "moduleguid";
$tdatamodx_site_snippets[".exportFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".exportFields"][] = "boot";

$tdatamodx_site_snippets[".importFields"] = array();
$tdatamodx_site_snippets[".importFields"][] = "id";
$tdatamodx_site_snippets[".importFields"][] = "name";
$tdatamodx_site_snippets[".importFields"][] = "description";
$tdatamodx_site_snippets[".importFields"][] = "editor_type";
$tdatamodx_site_snippets[".importFields"][] = "category";
$tdatamodx_site_snippets[".importFields"][] = "cache_type";
$tdatamodx_site_snippets[".importFields"][] = "snippet";
$tdatamodx_site_snippets[".importFields"][] = "locked";
$tdatamodx_site_snippets[".importFields"][] = "properties";
$tdatamodx_site_snippets[".importFields"][] = "moduleguid";
$tdatamodx_site_snippets[".importFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".importFields"][] = "boot";

$tdatamodx_site_snippets[".printFields"] = array();
$tdatamodx_site_snippets[".printFields"][] = "id";
$tdatamodx_site_snippets[".printFields"][] = "name";
$tdatamodx_site_snippets[".printFields"][] = "description";
$tdatamodx_site_snippets[".printFields"][] = "editor_type";
$tdatamodx_site_snippets[".printFields"][] = "category";
$tdatamodx_site_snippets[".printFields"][] = "cache_type";
$tdatamodx_site_snippets[".printFields"][] = "snippet";
$tdatamodx_site_snippets[".printFields"][] = "locked";
$tdatamodx_site_snippets[".printFields"][] = "properties";
$tdatamodx_site_snippets[".printFields"][] = "moduleguid";
$tdatamodx_site_snippets[".printFields"][] = "modx_site_content_id";
$tdatamodx_site_snippets[".printFields"][] = "boot";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","id");
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




	$tdatamodx_site_snippets["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","name");
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




	$tdatamodx_site_snippets["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","description");
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




	$tdatamodx_site_snippets["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","editor_type");
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




	$tdatamodx_site_snippets["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","category");
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




	$tdatamodx_site_snippets["category"] = $fdata;
//	cache_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cache_type";
	$fdata["GoodName"] = "cache_type";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","cache_type");
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




	$tdatamodx_site_snippets["cache_type"] = $fdata;
//	snippet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "snippet";
	$fdata["GoodName"] = "snippet";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","snippet");
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




	$tdatamodx_site_snippets["snippet"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","locked");
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




	$tdatamodx_site_snippets["locked"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","properties");
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

		$fdata["strField"] = "properties";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "properties";

	
	
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




	$tdatamodx_site_snippets["properties"] = $fdata;
//	moduleguid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "moduleguid";
	$fdata["GoodName"] = "moduleguid";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","moduleguid");
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

		$fdata["strField"] = "moduleguid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "moduleguid";

	
	
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




	$tdatamodx_site_snippets["moduleguid"] = $fdata;
//	modx_site_content_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "modx_site_content_id";
	$fdata["GoodName"] = "modx_site_content_id";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","modx_site_content_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdatamodx_site_snippets["modx_site_content_id"] = $fdata;
//	boot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "boot";
	$fdata["GoodName"] = "boot";
	$fdata["ownerTable"] = "modx_site_snippets";
	$fdata["Label"] = GetFieldLabel("modx_site_snippets","boot");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "boot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "boot";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdatamodx_site_snippets["boot"] = $fdata;


$tables_data["modx_site_snippets"]=&$tdatamodx_site_snippets;
$field_labels["modx_site_snippets"] = &$fieldLabelsmodx_site_snippets;
$fieldToolTips["modx_site_snippets"] = &$fieldToolTipsmodx_site_snippets;
$placeHolders["modx_site_snippets"] = &$placeHoldersmodx_site_snippets;
$page_titles["modx_site_snippets"] = &$pageTitlesmodx_site_snippets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_snippets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_snippets"] = array();


	
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
					$masterTablesData["modx_site_snippets"][0] = $masterParams;
				$masterTablesData["modx_site_snippets"][0]["masterKeys"] = array();
	$masterTablesData["modx_site_snippets"][0]["masterKeys"][]="id";
				$masterTablesData["modx_site_snippets"][0]["detailKeys"] = array();
	$masterTablesData["modx_site_snippets"][0]["detailKeys"][]="modx_site_content_id";
		
	
				$strOriginalDetailsTable="modx_site_content";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="modx_site_content_dash";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "modx_site_content_dash";
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
					$masterTablesData["modx_site_snippets"][1] = $masterParams;
				$masterTablesData["modx_site_snippets"][1]["masterKeys"] = array();
	$masterTablesData["modx_site_snippets"][1]["masterKeys"][]="id";
				$masterTablesData["modx_site_snippets"][1]["detailKeys"] = array();
	$masterTablesData["modx_site_snippets"][1]["detailKeys"][]="modx_site_content_id";
		
	
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
					$masterTablesData["modx_site_snippets"][2] = $masterParams;
				$masterTablesData["modx_site_snippets"][2]["masterKeys"] = array();
	$masterTablesData["modx_site_snippets"][2]["masterKeys"][]="id";
				$masterTablesData["modx_site_snippets"][2]["detailKeys"] = array();
	$masterTablesData["modx_site_snippets"][2]["detailKeys"][]="category";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_snippets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	properties,  	moduleguid,  	modx_site_content_id,  	boot";
$proto0["m_strFrom"] = "FROM modx_site_snippets";
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
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modx_site_snippets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "modx_site_snippets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "modx_site_snippets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto12["m_sql"] = "editor_type";
$proto12["m_srcTableName"] = "modx_site_snippets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto14["m_sql"] = "category";
$proto14["m_srcTableName"] = "modx_site_snippets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cache_type",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto16["m_sql"] = "cache_type";
$proto16["m_srcTableName"] = "modx_site_snippets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "snippet",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto18["m_sql"] = "snippet";
$proto18["m_srcTableName"] = "modx_site_snippets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto20["m_sql"] = "locked";
$proto20["m_srcTableName"] = "modx_site_snippets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto22["m_sql"] = "properties";
$proto22["m_srcTableName"] = "modx_site_snippets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "moduleguid",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto24["m_sql"] = "moduleguid";
$proto24["m_srcTableName"] = "modx_site_snippets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "modx_site_content_id",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto26["m_sql"] = "modx_site_content_id";
$proto26["m_srcTableName"] = "modx_site_snippets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "boot",
	"m_strTable" => "modx_site_snippets",
	"m_srcTableName" => "modx_site_snippets"
));

$proto28["m_sql"] = "boot";
$proto28["m_srcTableName"] = "modx_site_snippets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "modx_site_snippets";
$proto31["m_srcTableName"] = "modx_site_snippets";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "editor_type";
$proto31["m_columns"][] = "category";
$proto31["m_columns"][] = "cache_type";
$proto31["m_columns"][] = "snippet";
$proto31["m_columns"][] = "locked";
$proto31["m_columns"][] = "properties";
$proto31["m_columns"][] = "moduleguid";
$proto31["m_columns"][] = "modx_site_content_id";
$proto31["m_columns"][] = "boot";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "modx_site_snippets";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "modx_site_snippets";
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
$proto0["m_srcTableName"]="modx_site_snippets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modx_site_snippets = createSqlQuery_modx_site_snippets();


	
						;

												

$tdatamodx_site_snippets[".sqlquery"] = $queryData_modx_site_snippets;

$tableEvents["modx_site_snippets"] = new eventsBase;
$tdatamodx_site_snippets[".hasEvents"] = false;

?>
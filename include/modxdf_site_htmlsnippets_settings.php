<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodxdf_site_htmlsnippets = array();
	$tdatamodxdf_site_htmlsnippets[".truncateText"] = true;
	$tdatamodxdf_site_htmlsnippets[".NumberOfChars"] = 80;
	$tdatamodxdf_site_htmlsnippets[".ShortName"] = "modxdf_site_htmlsnippets";
	$tdatamodxdf_site_htmlsnippets[".OwnerID"] = "";
	$tdatamodxdf_site_htmlsnippets[".OriginalTable"] = "modxdf_site_htmlsnippets";

//	field labels
$fieldLabelsmodxdf_site_htmlsnippets = array();
$fieldToolTipsmodxdf_site_htmlsnippets = array();
$pageTitlesmodxdf_site_htmlsnippets = array();
$placeHoldersmodxdf_site_htmlsnippets = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"] = array();
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"] = array();
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"] = array();
	$pageTitlesmodxdf_site_htmlsnippets["Japanese"] = array();
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["id"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["id"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["source"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["source"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["name"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["name"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["description"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["description"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["editor_type"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["category"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["category"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["cache_type"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["cache_type"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["snippet"] = "Snippet";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["snippet"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["snippet"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["locked"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["locked"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["properties"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["properties"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["static"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["static"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["Japanese"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]["static_file"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["Japanese"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_htmlsnippets["Japanese"]))
		$tdatamodxdf_site_htmlsnippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodxdf_site_htmlsnippets["English"] = array();
	$fieldToolTipsmodxdf_site_htmlsnippets["English"] = array();
	$placeHoldersmodxdf_site_htmlsnippets["English"] = array();
	$pageTitlesmodxdf_site_htmlsnippets["English"] = array();
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["id"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["id"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["source"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["source"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["name"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["name"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["description"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["description"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["editor_type"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["category"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["category"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["cache_type"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["cache_type"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["snippet"] = "Snippet";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["snippet"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["snippet"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["locked"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["locked"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["properties"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["properties"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["static"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["static"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets["English"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_htmlsnippets["English"]["static_file"] = "";
	$placeHoldersmodxdf_site_htmlsnippets["English"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_htmlsnippets["English"]))
		$tdatamodxdf_site_htmlsnippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodxdf_site_htmlsnippets[""] = array();
	$fieldToolTipsmodxdf_site_htmlsnippets[""] = array();
	$placeHoldersmodxdf_site_htmlsnippets[""] = array();
	$pageTitlesmodxdf_site_htmlsnippets[""] = array();
	$fieldLabelsmodxdf_site_htmlsnippets[""]["id"] = "Id";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["id"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["id"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["source"] = "Source";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["source"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["source"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["name"] = "Name";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["name"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["name"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["description"] = "Description";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["description"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["description"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["editor_type"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["editor_type"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["category"] = "Category";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["category"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["category"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["cache_type"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["cache_type"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["snippet"] = "Snippet";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["snippet"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["snippet"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["locked"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["locked"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["properties"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["properties"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["static"] = "Static";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["static"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["static"] = "";
	$fieldLabelsmodxdf_site_htmlsnippets[""]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_htmlsnippets[""]["static_file"] = "";
	$placeHoldersmodxdf_site_htmlsnippets[""]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_htmlsnippets[""]))
		$tdatamodxdf_site_htmlsnippets[".isUseToolTips"] = true;
}


	$tdatamodxdf_site_htmlsnippets[".NCSearch"] = true;



$tdatamodxdf_site_htmlsnippets[".shortTableName"] = "modxdf_site_htmlsnippets";
$tdatamodxdf_site_htmlsnippets[".nSecOptions"] = 0;
$tdatamodxdf_site_htmlsnippets[".recsPerRowPrint"] = 1;
$tdatamodxdf_site_htmlsnippets[".mainTableOwnerID"] = "";
$tdatamodxdf_site_htmlsnippets[".moveNext"] = 1;
$tdatamodxdf_site_htmlsnippets[".entityType"] = 0;

$tdatamodxdf_site_htmlsnippets[".strOriginalTableName"] = "modxdf_site_htmlsnippets";

	



$tdatamodxdf_site_htmlsnippets[".showAddInPopup"] = false;

$tdatamodxdf_site_htmlsnippets[".showEditInPopup"] = false;

$tdatamodxdf_site_htmlsnippets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodxdf_site_htmlsnippets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodxdf_site_htmlsnippets[".fieldsForRegister"] = array();
	
$tdatamodxdf_site_htmlsnippets[".listAjax"] = false;

	$tdatamodxdf_site_htmlsnippets[".audit"] = false;

	$tdatamodxdf_site_htmlsnippets[".locking"] = false;

$tdatamodxdf_site_htmlsnippets[".edit"] = true;
$tdatamodxdf_site_htmlsnippets[".afterEditAction"] = 1;
$tdatamodxdf_site_htmlsnippets[".closePopupAfterEdit"] = 1;
$tdatamodxdf_site_htmlsnippets[".afterEditActionDetTable"] = "";

$tdatamodxdf_site_htmlsnippets[".add"] = true;
$tdatamodxdf_site_htmlsnippets[".afterAddAction"] = 1;
$tdatamodxdf_site_htmlsnippets[".closePopupAfterAdd"] = 1;
$tdatamodxdf_site_htmlsnippets[".afterAddActionDetTable"] = "";

$tdatamodxdf_site_htmlsnippets[".list"] = true;



$tdatamodxdf_site_htmlsnippets[".reorderRecordsByHeader"] = true;



$tdatamodxdf_site_htmlsnippets[".view"] = true;

$tdatamodxdf_site_htmlsnippets[".import"] = true;

$tdatamodxdf_site_htmlsnippets[".exportTo"] = true;

$tdatamodxdf_site_htmlsnippets[".printFriendly"] = true;

$tdatamodxdf_site_htmlsnippets[".delete"] = true;

$tdatamodxdf_site_htmlsnippets[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodxdf_site_htmlsnippets[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodxdf_site_htmlsnippets[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodxdf_site_htmlsnippets[".searchSaving"] = false;
//

$tdatamodxdf_site_htmlsnippets[".showSearchPanel"] = true;
		$tdatamodxdf_site_htmlsnippets[".flexibleSearch"] = true;

$tdatamodxdf_site_htmlsnippets[".isUseAjaxSuggest"] = true;

$tdatamodxdf_site_htmlsnippets[".rowHighlite"] = true;



				

$tdatamodxdf_site_htmlsnippets[".ajaxCodeSnippetAdded"] = false;

$tdatamodxdf_site_htmlsnippets[".buttonsAdded"] = false;

$tdatamodxdf_site_htmlsnippets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodxdf_site_htmlsnippets[".isUseTimeForSearch"] = false;





$tdatamodxdf_site_htmlsnippets[".allSearchFields"] = array();
$tdatamodxdf_site_htmlsnippets[".filterFields"] = array();
$tdatamodxdf_site_htmlsnippets[".requiredSearchFields"] = array();

$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "id";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "source";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "property_preprocess";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "name";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "description";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "editor_type";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "category";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "cache_type";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "snippet";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "locked";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "properties";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "static";
	$tdatamodxdf_site_htmlsnippets[".allSearchFields"][] = "static_file";
	

$tdatamodxdf_site_htmlsnippets[".googleLikeFields"] = array();
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".googleLikeFields"][] = "static_file";


$tdatamodxdf_site_htmlsnippets[".advSearchFields"] = array();
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".advSearchFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".tableType"] = "list";

$tdatamodxdf_site_htmlsnippets[".printerPageOrientation"] = 0;
$tdatamodxdf_site_htmlsnippets[".nPrinterPageScale"] = 100;

$tdatamodxdf_site_htmlsnippets[".nPrinterSplitRecords"] = 40;

$tdatamodxdf_site_htmlsnippets[".nPrinterPDFSplitRecords"] = 40;



$tdatamodxdf_site_htmlsnippets[".geocodingEnabled"] = false;





$tdatamodxdf_site_htmlsnippets[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodxdf_site_htmlsnippets[".pageSize"] = 20;

$tdatamodxdf_site_htmlsnippets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodxdf_site_htmlsnippets[".strOrderBy"] = $tstrOrderBy;

$tdatamodxdf_site_htmlsnippets[".orderindexes"] = array();

$tdatamodxdf_site_htmlsnippets[".sqlHead"] = "SELECT id,  	source,  	property_preprocess,  	name,  	description,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	properties,  	`static`,  	static_file";
$tdatamodxdf_site_htmlsnippets[".sqlFrom"] = "FROM modxdf_site_htmlsnippets";
$tdatamodxdf_site_htmlsnippets[".sqlWhereExpr"] = "";
$tdatamodxdf_site_htmlsnippets[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodxdf_site_htmlsnippets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodxdf_site_htmlsnippets[".arrGroupsPerPage"] = $arrGPP;

$tdatamodxdf_site_htmlsnippets[".highlightSearchResults"] = true;

$tableKeysmodxdf_site_htmlsnippets = array();
$tableKeysmodxdf_site_htmlsnippets[] = "id";
$tdatamodxdf_site_htmlsnippets[".Keys"] = $tableKeysmodxdf_site_htmlsnippets;

$tdatamodxdf_site_htmlsnippets[".listFields"] = array();
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".listFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".hideMobileList"] = array();


$tdatamodxdf_site_htmlsnippets[".viewFields"] = array();
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".viewFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".addFields"] = array();
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".addFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".masterListFields"] = array();
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".masterListFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".inlineAddFields"] = array();
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".inlineAddFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".editFields"] = array();
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".editFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".inlineEditFields"] = array();
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".inlineEditFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"] = array();
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".updateSelectedFields"][] = "static_file";


$tdatamodxdf_site_htmlsnippets[".exportFields"] = array();
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".exportFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".importFields"] = array();
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".importFields"][] = "static_file";

$tdatamodxdf_site_htmlsnippets[".printFields"] = array();
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "id";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "source";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "property_preprocess";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "name";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "description";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "editor_type";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "category";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "cache_type";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "snippet";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "locked";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "properties";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "static";
$tdatamodxdf_site_htmlsnippets[".printFields"][] = "static_file";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","id");
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




	$tdatamodxdf_site_htmlsnippets["id"] = $fdata;
//	source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "source";
	$fdata["GoodName"] = "source";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","source");
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

		$fdata["strField"] = "source";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "source";

	
	
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




	$tdatamodxdf_site_htmlsnippets["source"] = $fdata;
//	property_preprocess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "property_preprocess";
	$fdata["GoodName"] = "property_preprocess";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","property_preprocess");
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

		$fdata["strField"] = "property_preprocess";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_preprocess";

	
	
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




	$tdatamodxdf_site_htmlsnippets["property_preprocess"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","name");
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




	$tdatamodxdf_site_htmlsnippets["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","description");
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_htmlsnippets["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","editor_type");
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




	$tdatamodxdf_site_htmlsnippets["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","category");
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




	$tdatamodxdf_site_htmlsnippets["category"] = $fdata;
//	cache_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cache_type";
	$fdata["GoodName"] = "cache_type";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","cache_type");
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




	$tdatamodxdf_site_htmlsnippets["cache_type"] = $fdata;
//	snippet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "snippet";
	$fdata["GoodName"] = "snippet";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","snippet");
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




	$tdatamodxdf_site_htmlsnippets["snippet"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","locked");
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




	$tdatamodxdf_site_htmlsnippets["locked"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","properties");
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




	$tdatamodxdf_site_htmlsnippets["properties"] = $fdata;
//	static
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "static";
	$fdata["GoodName"] = "static";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","static");
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

		$fdata["strField"] = "static";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`static`";

	
	
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




	$tdatamodxdf_site_htmlsnippets["static"] = $fdata;
//	static_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "static_file";
	$fdata["GoodName"] = "static_file";
	$fdata["ownerTable"] = "modxdf_site_htmlsnippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_htmlsnippets","static_file");
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

		$fdata["strField"] = "static_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "static_file";

	
	
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatamodxdf_site_htmlsnippets["static_file"] = $fdata;


$tables_data["modxdf_site_htmlsnippets"]=&$tdatamodxdf_site_htmlsnippets;
$field_labels["modxdf_site_htmlsnippets"] = &$fieldLabelsmodxdf_site_htmlsnippets;
$fieldToolTips["modxdf_site_htmlsnippets"] = &$fieldToolTipsmodxdf_site_htmlsnippets;
$placeHolders["modxdf_site_htmlsnippets"] = &$placeHoldersmodxdf_site_htmlsnippets;
$page_titles["modxdf_site_htmlsnippets"] = &$pageTitlesmodxdf_site_htmlsnippets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modxdf_site_htmlsnippets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modxdf_site_htmlsnippets"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modxdf_site_htmlsnippets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	source,  	property_preprocess,  	name,  	description,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	properties,  	`static`,  	static_file";
$proto0["m_strFrom"] = "FROM modxdf_site_htmlsnippets";
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
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "source",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto8["m_sql"] = "source";
$proto8["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "property_preprocess",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto10["m_sql"] = "property_preprocess";
$proto10["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto12["m_sql"] = "name";
$proto12["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto16["m_sql"] = "editor_type";
$proto16["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto18["m_sql"] = "category";
$proto18["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cache_type",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto20["m_sql"] = "cache_type";
$proto20["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "snippet",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto22["m_sql"] = "snippet";
$proto22["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto24["m_sql"] = "locked";
$proto24["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto26["m_sql"] = "properties";
$proto26["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "static",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto28["m_sql"] = "`static`";
$proto28["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "static_file",
	"m_strTable" => "modxdf_site_htmlsnippets",
	"m_srcTableName" => "modxdf_site_htmlsnippets"
));

$proto30["m_sql"] = "static_file";
$proto30["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "modxdf_site_htmlsnippets";
$proto33["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "source";
$proto33["m_columns"][] = "property_preprocess";
$proto33["m_columns"][] = "name";
$proto33["m_columns"][] = "description";
$proto33["m_columns"][] = "editor_type";
$proto33["m_columns"][] = "category";
$proto33["m_columns"][] = "cache_type";
$proto33["m_columns"][] = "snippet";
$proto33["m_columns"][] = "locked";
$proto33["m_columns"][] = "properties";
$proto33["m_columns"][] = "static";
$proto33["m_columns"][] = "static_file";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "modxdf_site_htmlsnippets";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "modxdf_site_htmlsnippets";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modxdf_site_htmlsnippets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modxdf_site_htmlsnippets = createSqlQuery_modxdf_site_htmlsnippets();


	
						;

													

$tdatamodxdf_site_htmlsnippets[".sqlquery"] = $queryData_modxdf_site_htmlsnippets;

$tableEvents["modxdf_site_htmlsnippets"] = new eventsBase;
$tdatamodxdf_site_htmlsnippets[".hasEvents"] = false;

?>
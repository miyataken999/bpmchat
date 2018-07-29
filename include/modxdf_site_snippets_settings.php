<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodxdf_site_snippets = array();
	$tdatamodxdf_site_snippets[".truncateText"] = true;
	$tdatamodxdf_site_snippets[".NumberOfChars"] = 80;
	$tdatamodxdf_site_snippets[".ShortName"] = "modxdf_site_snippets";
	$tdatamodxdf_site_snippets[".OwnerID"] = "";
	$tdatamodxdf_site_snippets[".OriginalTable"] = "modxdf_site_snippets";

//	field labels
$fieldLabelsmodxdf_site_snippets = array();
$fieldToolTipsmodxdf_site_snippets = array();
$pageTitlesmodxdf_site_snippets = array();
$placeHoldersmodxdf_site_snippets = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodxdf_site_snippets["Japanese"] = array();
	$fieldToolTipsmodxdf_site_snippets["Japanese"] = array();
	$placeHoldersmodxdf_site_snippets["Japanese"] = array();
	$pageTitlesmodxdf_site_snippets["Japanese"] = array();
	$fieldLabelsmodxdf_site_snippets["Japanese"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["id"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["id"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["source"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["source"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["name"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["name"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["description"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["description"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["editor_type"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["category"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["category"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["cache_type"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["cache_type"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["snippet"] = "Snippet";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["snippet"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["snippet"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["locked"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["locked"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["properties"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["properties"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["moduleguid"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["moduleguid"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["static"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["static"] = "";
	$fieldLabelsmodxdf_site_snippets["Japanese"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_snippets["Japanese"]["static_file"] = "";
	$placeHoldersmodxdf_site_snippets["Japanese"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_snippets["Japanese"]))
		$tdatamodxdf_site_snippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodxdf_site_snippets["English"] = array();
	$fieldToolTipsmodxdf_site_snippets["English"] = array();
	$placeHoldersmodxdf_site_snippets["English"] = array();
	$pageTitlesmodxdf_site_snippets["English"] = array();
	$fieldLabelsmodxdf_site_snippets["English"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_snippets["English"]["id"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["id"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_snippets["English"]["source"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["source"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_snippets["English"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_snippets["English"]["name"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["name"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_snippets["English"]["description"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["description"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_snippets["English"]["editor_type"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_snippets["English"]["category"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["category"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_snippets["English"]["cache_type"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["cache_type"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["snippet"] = "Snippet";
	$fieldToolTipsmodxdf_site_snippets["English"]["snippet"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["snippet"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_snippets["English"]["locked"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["locked"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_snippets["English"]["properties"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["properties"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodxdf_site_snippets["English"]["moduleguid"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["moduleguid"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_snippets["English"]["static"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["static"] = "";
	$fieldLabelsmodxdf_site_snippets["English"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_snippets["English"]["static_file"] = "";
	$placeHoldersmodxdf_site_snippets["English"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_snippets["English"]))
		$tdatamodxdf_site_snippets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodxdf_site_snippets[""] = array();
	$fieldToolTipsmodxdf_site_snippets[""] = array();
	$placeHoldersmodxdf_site_snippets[""] = array();
	$pageTitlesmodxdf_site_snippets[""] = array();
	$fieldLabelsmodxdf_site_snippets[""]["id"] = "Id";
	$fieldToolTipsmodxdf_site_snippets[""]["id"] = "";
	$placeHoldersmodxdf_site_snippets[""]["id"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["source"] = "Source";
	$fieldToolTipsmodxdf_site_snippets[""]["source"] = "";
	$placeHoldersmodxdf_site_snippets[""]["source"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_snippets[""]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_snippets[""]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["name"] = "Name";
	$fieldToolTipsmodxdf_site_snippets[""]["name"] = "";
	$placeHoldersmodxdf_site_snippets[""]["name"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["description"] = "Description";
	$fieldToolTipsmodxdf_site_snippets[""]["description"] = "";
	$placeHoldersmodxdf_site_snippets[""]["description"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_snippets[""]["editor_type"] = "";
	$placeHoldersmodxdf_site_snippets[""]["editor_type"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["category"] = "Category";
	$fieldToolTipsmodxdf_site_snippets[""]["category"] = "";
	$placeHoldersmodxdf_site_snippets[""]["category"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_snippets[""]["cache_type"] = "";
	$placeHoldersmodxdf_site_snippets[""]["cache_type"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["snippet"] = "Snippet";
	$fieldToolTipsmodxdf_site_snippets[""]["snippet"] = "";
	$placeHoldersmodxdf_site_snippets[""]["snippet"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_snippets[""]["locked"] = "";
	$placeHoldersmodxdf_site_snippets[""]["locked"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_snippets[""]["properties"] = "";
	$placeHoldersmodxdf_site_snippets[""]["properties"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodxdf_site_snippets[""]["moduleguid"] = "";
	$placeHoldersmodxdf_site_snippets[""]["moduleguid"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["static"] = "Static";
	$fieldToolTipsmodxdf_site_snippets[""]["static"] = "";
	$placeHoldersmodxdf_site_snippets[""]["static"] = "";
	$fieldLabelsmodxdf_site_snippets[""]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_snippets[""]["static_file"] = "";
	$placeHoldersmodxdf_site_snippets[""]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_snippets[""]))
		$tdatamodxdf_site_snippets[".isUseToolTips"] = true;
}


	$tdatamodxdf_site_snippets[".NCSearch"] = true;



$tdatamodxdf_site_snippets[".shortTableName"] = "modxdf_site_snippets";
$tdatamodxdf_site_snippets[".nSecOptions"] = 0;
$tdatamodxdf_site_snippets[".recsPerRowPrint"] = 1;
$tdatamodxdf_site_snippets[".mainTableOwnerID"] = "";
$tdatamodxdf_site_snippets[".moveNext"] = 1;
$tdatamodxdf_site_snippets[".entityType"] = 0;

$tdatamodxdf_site_snippets[".strOriginalTableName"] = "modxdf_site_snippets";

	



$tdatamodxdf_site_snippets[".showAddInPopup"] = false;

$tdatamodxdf_site_snippets[".showEditInPopup"] = false;

$tdatamodxdf_site_snippets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodxdf_site_snippets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodxdf_site_snippets[".fieldsForRegister"] = array();
	
$tdatamodxdf_site_snippets[".listAjax"] = false;

	$tdatamodxdf_site_snippets[".audit"] = false;

	$tdatamodxdf_site_snippets[".locking"] = false;

$tdatamodxdf_site_snippets[".edit"] = true;
$tdatamodxdf_site_snippets[".afterEditAction"] = 1;
$tdatamodxdf_site_snippets[".closePopupAfterEdit"] = 1;
$tdatamodxdf_site_snippets[".afterEditActionDetTable"] = "";

$tdatamodxdf_site_snippets[".add"] = true;
$tdatamodxdf_site_snippets[".afterAddAction"] = 1;
$tdatamodxdf_site_snippets[".closePopupAfterAdd"] = 1;
$tdatamodxdf_site_snippets[".afterAddActionDetTable"] = "";

$tdatamodxdf_site_snippets[".list"] = true;



$tdatamodxdf_site_snippets[".reorderRecordsByHeader"] = true;



$tdatamodxdf_site_snippets[".view"] = true;

$tdatamodxdf_site_snippets[".import"] = true;

$tdatamodxdf_site_snippets[".exportTo"] = true;

$tdatamodxdf_site_snippets[".printFriendly"] = true;

$tdatamodxdf_site_snippets[".delete"] = true;

$tdatamodxdf_site_snippets[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodxdf_site_snippets[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodxdf_site_snippets[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodxdf_site_snippets[".searchSaving"] = false;
//

$tdatamodxdf_site_snippets[".showSearchPanel"] = true;
		$tdatamodxdf_site_snippets[".flexibleSearch"] = true;

$tdatamodxdf_site_snippets[".isUseAjaxSuggest"] = true;

$tdatamodxdf_site_snippets[".rowHighlite"] = true;



				

$tdatamodxdf_site_snippets[".ajaxCodeSnippetAdded"] = false;

$tdatamodxdf_site_snippets[".buttonsAdded"] = false;

$tdatamodxdf_site_snippets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodxdf_site_snippets[".isUseTimeForSearch"] = false;





$tdatamodxdf_site_snippets[".allSearchFields"] = array();
$tdatamodxdf_site_snippets[".filterFields"] = array();
$tdatamodxdf_site_snippets[".requiredSearchFields"] = array();

$tdatamodxdf_site_snippets[".allSearchFields"][] = "id";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "source";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "property_preprocess";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "name";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "description";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "editor_type";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "category";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "cache_type";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "snippet";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "locked";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "properties";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "moduleguid";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "static";
	$tdatamodxdf_site_snippets[".allSearchFields"][] = "static_file";
	

$tdatamodxdf_site_snippets[".googleLikeFields"] = array();
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "id";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "source";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "name";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "description";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "category";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "snippet";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "locked";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "properties";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "static";
$tdatamodxdf_site_snippets[".googleLikeFields"][] = "static_file";


$tdatamodxdf_site_snippets[".advSearchFields"] = array();
$tdatamodxdf_site_snippets[".advSearchFields"][] = "id";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "source";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "name";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "description";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "category";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "snippet";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "locked";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "properties";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "static";
$tdatamodxdf_site_snippets[".advSearchFields"][] = "static_file";

$tdatamodxdf_site_snippets[".tableType"] = "list";

$tdatamodxdf_site_snippets[".printerPageOrientation"] = 0;
$tdatamodxdf_site_snippets[".nPrinterPageScale"] = 100;

$tdatamodxdf_site_snippets[".nPrinterSplitRecords"] = 40;

$tdatamodxdf_site_snippets[".nPrinterPDFSplitRecords"] = 40;



$tdatamodxdf_site_snippets[".geocodingEnabled"] = false;





$tdatamodxdf_site_snippets[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodxdf_site_snippets[".pageSize"] = 20;

$tdatamodxdf_site_snippets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodxdf_site_snippets[".strOrderBy"] = $tstrOrderBy;

$tdatamodxdf_site_snippets[".orderindexes"] = array();

$tdatamodxdf_site_snippets[".sqlHead"] = "SELECT id,  	source,  	property_preprocess,  	name,  	description,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	properties,  	moduleguid,  	`static`,  	static_file";
$tdatamodxdf_site_snippets[".sqlFrom"] = "FROM modxdf_site_snippets";
$tdatamodxdf_site_snippets[".sqlWhereExpr"] = "";
$tdatamodxdf_site_snippets[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodxdf_site_snippets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodxdf_site_snippets[".arrGroupsPerPage"] = $arrGPP;

$tdatamodxdf_site_snippets[".highlightSearchResults"] = true;

$tableKeysmodxdf_site_snippets = array();
$tableKeysmodxdf_site_snippets[] = "id";
$tdatamodxdf_site_snippets[".Keys"] = $tableKeysmodxdf_site_snippets;

$tdatamodxdf_site_snippets[".listFields"] = array();
$tdatamodxdf_site_snippets[".listFields"][] = "id";
$tdatamodxdf_site_snippets[".listFields"][] = "source";
$tdatamodxdf_site_snippets[".listFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".listFields"][] = "name";
$tdatamodxdf_site_snippets[".listFields"][] = "description";
$tdatamodxdf_site_snippets[".listFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".listFields"][] = "category";
$tdatamodxdf_site_snippets[".listFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".listFields"][] = "snippet";
$tdatamodxdf_site_snippets[".listFields"][] = "locked";
$tdatamodxdf_site_snippets[".listFields"][] = "properties";
$tdatamodxdf_site_snippets[".listFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".listFields"][] = "static";
$tdatamodxdf_site_snippets[".listFields"][] = "static_file";

$tdatamodxdf_site_snippets[".hideMobileList"] = array();


$tdatamodxdf_site_snippets[".viewFields"] = array();
$tdatamodxdf_site_snippets[".viewFields"][] = "id";
$tdatamodxdf_site_snippets[".viewFields"][] = "source";
$tdatamodxdf_site_snippets[".viewFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".viewFields"][] = "name";
$tdatamodxdf_site_snippets[".viewFields"][] = "description";
$tdatamodxdf_site_snippets[".viewFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".viewFields"][] = "category";
$tdatamodxdf_site_snippets[".viewFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".viewFields"][] = "snippet";
$tdatamodxdf_site_snippets[".viewFields"][] = "locked";
$tdatamodxdf_site_snippets[".viewFields"][] = "properties";
$tdatamodxdf_site_snippets[".viewFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".viewFields"][] = "static";
$tdatamodxdf_site_snippets[".viewFields"][] = "static_file";

$tdatamodxdf_site_snippets[".addFields"] = array();
$tdatamodxdf_site_snippets[".addFields"][] = "source";
$tdatamodxdf_site_snippets[".addFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".addFields"][] = "name";
$tdatamodxdf_site_snippets[".addFields"][] = "description";
$tdatamodxdf_site_snippets[".addFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".addFields"][] = "category";
$tdatamodxdf_site_snippets[".addFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".addFields"][] = "snippet";
$tdatamodxdf_site_snippets[".addFields"][] = "locked";
$tdatamodxdf_site_snippets[".addFields"][] = "properties";
$tdatamodxdf_site_snippets[".addFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".addFields"][] = "static";
$tdatamodxdf_site_snippets[".addFields"][] = "static_file";

$tdatamodxdf_site_snippets[".masterListFields"] = array();
$tdatamodxdf_site_snippets[".masterListFields"][] = "id";
$tdatamodxdf_site_snippets[".masterListFields"][] = "source";
$tdatamodxdf_site_snippets[".masterListFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".masterListFields"][] = "name";
$tdatamodxdf_site_snippets[".masterListFields"][] = "description";
$tdatamodxdf_site_snippets[".masterListFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".masterListFields"][] = "category";
$tdatamodxdf_site_snippets[".masterListFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".masterListFields"][] = "snippet";
$tdatamodxdf_site_snippets[".masterListFields"][] = "locked";
$tdatamodxdf_site_snippets[".masterListFields"][] = "properties";
$tdatamodxdf_site_snippets[".masterListFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".masterListFields"][] = "static";
$tdatamodxdf_site_snippets[".masterListFields"][] = "static_file";

$tdatamodxdf_site_snippets[".inlineAddFields"] = array();
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "source";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "name";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "description";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "category";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "snippet";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "locked";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "properties";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "static";
$tdatamodxdf_site_snippets[".inlineAddFields"][] = "static_file";

$tdatamodxdf_site_snippets[".editFields"] = array();
$tdatamodxdf_site_snippets[".editFields"][] = "source";
$tdatamodxdf_site_snippets[".editFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".editFields"][] = "name";
$tdatamodxdf_site_snippets[".editFields"][] = "description";
$tdatamodxdf_site_snippets[".editFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".editFields"][] = "category";
$tdatamodxdf_site_snippets[".editFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".editFields"][] = "snippet";
$tdatamodxdf_site_snippets[".editFields"][] = "locked";
$tdatamodxdf_site_snippets[".editFields"][] = "properties";
$tdatamodxdf_site_snippets[".editFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".editFields"][] = "static";
$tdatamodxdf_site_snippets[".editFields"][] = "static_file";

$tdatamodxdf_site_snippets[".inlineEditFields"] = array();
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "source";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "name";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "description";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "category";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "snippet";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "locked";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "properties";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "static";
$tdatamodxdf_site_snippets[".inlineEditFields"][] = "static_file";

$tdatamodxdf_site_snippets[".updateSelectedFields"] = array();
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "source";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "name";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "description";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "category";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "snippet";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "locked";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "properties";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "static";
$tdatamodxdf_site_snippets[".updateSelectedFields"][] = "static_file";


$tdatamodxdf_site_snippets[".exportFields"] = array();
$tdatamodxdf_site_snippets[".exportFields"][] = "id";
$tdatamodxdf_site_snippets[".exportFields"][] = "source";
$tdatamodxdf_site_snippets[".exportFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".exportFields"][] = "name";
$tdatamodxdf_site_snippets[".exportFields"][] = "description";
$tdatamodxdf_site_snippets[".exportFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".exportFields"][] = "category";
$tdatamodxdf_site_snippets[".exportFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".exportFields"][] = "snippet";
$tdatamodxdf_site_snippets[".exportFields"][] = "locked";
$tdatamodxdf_site_snippets[".exportFields"][] = "properties";
$tdatamodxdf_site_snippets[".exportFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".exportFields"][] = "static";
$tdatamodxdf_site_snippets[".exportFields"][] = "static_file";

$tdatamodxdf_site_snippets[".importFields"] = array();
$tdatamodxdf_site_snippets[".importFields"][] = "id";
$tdatamodxdf_site_snippets[".importFields"][] = "source";
$tdatamodxdf_site_snippets[".importFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".importFields"][] = "name";
$tdatamodxdf_site_snippets[".importFields"][] = "description";
$tdatamodxdf_site_snippets[".importFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".importFields"][] = "category";
$tdatamodxdf_site_snippets[".importFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".importFields"][] = "snippet";
$tdatamodxdf_site_snippets[".importFields"][] = "locked";
$tdatamodxdf_site_snippets[".importFields"][] = "properties";
$tdatamodxdf_site_snippets[".importFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".importFields"][] = "static";
$tdatamodxdf_site_snippets[".importFields"][] = "static_file";

$tdatamodxdf_site_snippets[".printFields"] = array();
$tdatamodxdf_site_snippets[".printFields"][] = "id";
$tdatamodxdf_site_snippets[".printFields"][] = "source";
$tdatamodxdf_site_snippets[".printFields"][] = "property_preprocess";
$tdatamodxdf_site_snippets[".printFields"][] = "name";
$tdatamodxdf_site_snippets[".printFields"][] = "description";
$tdatamodxdf_site_snippets[".printFields"][] = "editor_type";
$tdatamodxdf_site_snippets[".printFields"][] = "category";
$tdatamodxdf_site_snippets[".printFields"][] = "cache_type";
$tdatamodxdf_site_snippets[".printFields"][] = "snippet";
$tdatamodxdf_site_snippets[".printFields"][] = "locked";
$tdatamodxdf_site_snippets[".printFields"][] = "properties";
$tdatamodxdf_site_snippets[".printFields"][] = "moduleguid";
$tdatamodxdf_site_snippets[".printFields"][] = "static";
$tdatamodxdf_site_snippets[".printFields"][] = "static_file";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","id");
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




	$tdatamodxdf_site_snippets["id"] = $fdata;
//	source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "source";
	$fdata["GoodName"] = "source";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","source");
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




	$tdatamodxdf_site_snippets["source"] = $fdata;
//	property_preprocess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "property_preprocess";
	$fdata["GoodName"] = "property_preprocess";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","property_preprocess");
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




	$tdatamodxdf_site_snippets["property_preprocess"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","name");
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




	$tdatamodxdf_site_snippets["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","description");
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




	$tdatamodxdf_site_snippets["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","editor_type");
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




	$tdatamodxdf_site_snippets["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","category");
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




	$tdatamodxdf_site_snippets["category"] = $fdata;
//	cache_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cache_type";
	$fdata["GoodName"] = "cache_type";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","cache_type");
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




	$tdatamodxdf_site_snippets["cache_type"] = $fdata;
//	snippet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "snippet";
	$fdata["GoodName"] = "snippet";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","snippet");
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




	$tdatamodxdf_site_snippets["snippet"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","locked");
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




	$tdatamodxdf_site_snippets["locked"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","properties");
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




	$tdatamodxdf_site_snippets["properties"] = $fdata;
//	moduleguid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "moduleguid";
	$fdata["GoodName"] = "moduleguid";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","moduleguid");
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




	$tdatamodxdf_site_snippets["moduleguid"] = $fdata;
//	static
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "static";
	$fdata["GoodName"] = "static";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","static");
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




	$tdatamodxdf_site_snippets["static"] = $fdata;
//	static_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "static_file";
	$fdata["GoodName"] = "static_file";
	$fdata["ownerTable"] = "modxdf_site_snippets";
	$fdata["Label"] = GetFieldLabel("modxdf_site_snippets","static_file");
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




	$tdatamodxdf_site_snippets["static_file"] = $fdata;


$tables_data["modxdf_site_snippets"]=&$tdatamodxdf_site_snippets;
$field_labels["modxdf_site_snippets"] = &$fieldLabelsmodxdf_site_snippets;
$fieldToolTips["modxdf_site_snippets"] = &$fieldToolTipsmodxdf_site_snippets;
$placeHolders["modxdf_site_snippets"] = &$placeHoldersmodxdf_site_snippets;
$page_titles["modxdf_site_snippets"] = &$pageTitlesmodxdf_site_snippets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modxdf_site_snippets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modxdf_site_snippets"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modxdf_site_snippets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	source,  	property_preprocess,  	name,  	description,  	editor_type,  	category,  	cache_type,  	snippet,  	locked,  	properties,  	moduleguid,  	`static`,  	static_file";
$proto0["m_strFrom"] = "FROM modxdf_site_snippets";
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
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modxdf_site_snippets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "source",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto8["m_sql"] = "source";
$proto8["m_srcTableName"] = "modxdf_site_snippets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "property_preprocess",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto10["m_sql"] = "property_preprocess";
$proto10["m_srcTableName"] = "modxdf_site_snippets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto12["m_sql"] = "name";
$proto12["m_srcTableName"] = "modxdf_site_snippets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "modxdf_site_snippets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto16["m_sql"] = "editor_type";
$proto16["m_srcTableName"] = "modxdf_site_snippets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto18["m_sql"] = "category";
$proto18["m_srcTableName"] = "modxdf_site_snippets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cache_type",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto20["m_sql"] = "cache_type";
$proto20["m_srcTableName"] = "modxdf_site_snippets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "snippet",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto22["m_sql"] = "snippet";
$proto22["m_srcTableName"] = "modxdf_site_snippets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto24["m_sql"] = "locked";
$proto24["m_srcTableName"] = "modxdf_site_snippets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto26["m_sql"] = "properties";
$proto26["m_srcTableName"] = "modxdf_site_snippets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "moduleguid",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto28["m_sql"] = "moduleguid";
$proto28["m_srcTableName"] = "modxdf_site_snippets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "static",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto30["m_sql"] = "`static`";
$proto30["m_srcTableName"] = "modxdf_site_snippets";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "static_file",
	"m_strTable" => "modxdf_site_snippets",
	"m_srcTableName" => "modxdf_site_snippets"
));

$proto32["m_sql"] = "static_file";
$proto32["m_srcTableName"] = "modxdf_site_snippets";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "modxdf_site_snippets";
$proto35["m_srcTableName"] = "modxdf_site_snippets";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "source";
$proto35["m_columns"][] = "property_preprocess";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "description";
$proto35["m_columns"][] = "editor_type";
$proto35["m_columns"][] = "category";
$proto35["m_columns"][] = "cache_type";
$proto35["m_columns"][] = "snippet";
$proto35["m_columns"][] = "locked";
$proto35["m_columns"][] = "properties";
$proto35["m_columns"][] = "moduleguid";
$proto35["m_columns"][] = "static";
$proto35["m_columns"][] = "static_file";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "modxdf_site_snippets";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "modxdf_site_snippets";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modxdf_site_snippets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modxdf_site_snippets = createSqlQuery_modxdf_site_snippets();


	
						;

														

$tdatamodxdf_site_snippets[".sqlquery"] = $queryData_modxdf_site_snippets;

$tableEvents["modxdf_site_snippets"] = new eventsBase;
$tdatamodxdf_site_snippets[".hasEvents"] = false;

?>
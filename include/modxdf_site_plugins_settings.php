<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodxdf_site_plugins = array();
	$tdatamodxdf_site_plugins[".truncateText"] = true;
	$tdatamodxdf_site_plugins[".NumberOfChars"] = 80;
	$tdatamodxdf_site_plugins[".ShortName"] = "modxdf_site_plugins";
	$tdatamodxdf_site_plugins[".OwnerID"] = "";
	$tdatamodxdf_site_plugins[".OriginalTable"] = "modxdf_site_plugins";

//	field labels
$fieldLabelsmodxdf_site_plugins = array();
$fieldToolTipsmodxdf_site_plugins = array();
$pageTitlesmodxdf_site_plugins = array();
$placeHoldersmodxdf_site_plugins = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodxdf_site_plugins["Japanese"] = array();
	$fieldToolTipsmodxdf_site_plugins["Japanese"] = array();
	$placeHoldersmodxdf_site_plugins["Japanese"] = array();
	$pageTitlesmodxdf_site_plugins["Japanese"] = array();
	$fieldLabelsmodxdf_site_plugins["Japanese"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["id"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["id"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["source"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["source"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["name"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["name"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["description"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["description"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["editor_type"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["category"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["category"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["cache_type"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["cache_type"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["plugincode"] = "Plugincode";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["plugincode"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["plugincode"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["locked"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["locked"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["properties"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["properties"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["disabled"] = "Disabled";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["disabled"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["disabled"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["moduleguid"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["moduleguid"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["static"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["static"] = "";
	$fieldLabelsmodxdf_site_plugins["Japanese"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_plugins["Japanese"]["static_file"] = "";
	$placeHoldersmodxdf_site_plugins["Japanese"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_plugins["Japanese"]))
		$tdatamodxdf_site_plugins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodxdf_site_plugins["English"] = array();
	$fieldToolTipsmodxdf_site_plugins["English"] = array();
	$placeHoldersmodxdf_site_plugins["English"] = array();
	$pageTitlesmodxdf_site_plugins["English"] = array();
	$fieldLabelsmodxdf_site_plugins["English"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_plugins["English"]["id"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["id"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_plugins["English"]["source"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["source"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_plugins["English"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_plugins["English"]["name"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["name"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_plugins["English"]["description"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["description"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_plugins["English"]["editor_type"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_plugins["English"]["category"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["category"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_plugins["English"]["cache_type"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["cache_type"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["plugincode"] = "Plugincode";
	$fieldToolTipsmodxdf_site_plugins["English"]["plugincode"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["plugincode"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_plugins["English"]["locked"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["locked"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_plugins["English"]["properties"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["properties"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["disabled"] = "Disabled";
	$fieldToolTipsmodxdf_site_plugins["English"]["disabled"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["disabled"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodxdf_site_plugins["English"]["moduleguid"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["moduleguid"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_plugins["English"]["static"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["static"] = "";
	$fieldLabelsmodxdf_site_plugins["English"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_plugins["English"]["static_file"] = "";
	$placeHoldersmodxdf_site_plugins["English"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_plugins["English"]))
		$tdatamodxdf_site_plugins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodxdf_site_plugins[""] = array();
	$fieldToolTipsmodxdf_site_plugins[""] = array();
	$placeHoldersmodxdf_site_plugins[""] = array();
	$pageTitlesmodxdf_site_plugins[""] = array();
	$fieldLabelsmodxdf_site_plugins[""]["id"] = "Id";
	$fieldToolTipsmodxdf_site_plugins[""]["id"] = "";
	$placeHoldersmodxdf_site_plugins[""]["id"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["source"] = "Source";
	$fieldToolTipsmodxdf_site_plugins[""]["source"] = "";
	$placeHoldersmodxdf_site_plugins[""]["source"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_plugins[""]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_plugins[""]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["name"] = "Name";
	$fieldToolTipsmodxdf_site_plugins[""]["name"] = "";
	$placeHoldersmodxdf_site_plugins[""]["name"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["description"] = "Description";
	$fieldToolTipsmodxdf_site_plugins[""]["description"] = "";
	$placeHoldersmodxdf_site_plugins[""]["description"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_plugins[""]["editor_type"] = "";
	$placeHoldersmodxdf_site_plugins[""]["editor_type"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["category"] = "Category";
	$fieldToolTipsmodxdf_site_plugins[""]["category"] = "";
	$placeHoldersmodxdf_site_plugins[""]["category"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["cache_type"] = "Cache Type";
	$fieldToolTipsmodxdf_site_plugins[""]["cache_type"] = "";
	$placeHoldersmodxdf_site_plugins[""]["cache_type"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["plugincode"] = "Plugincode";
	$fieldToolTipsmodxdf_site_plugins[""]["plugincode"] = "";
	$placeHoldersmodxdf_site_plugins[""]["plugincode"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_plugins[""]["locked"] = "";
	$placeHoldersmodxdf_site_plugins[""]["locked"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_plugins[""]["properties"] = "";
	$placeHoldersmodxdf_site_plugins[""]["properties"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["disabled"] = "Disabled";
	$fieldToolTipsmodxdf_site_plugins[""]["disabled"] = "";
	$placeHoldersmodxdf_site_plugins[""]["disabled"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodxdf_site_plugins[""]["moduleguid"] = "";
	$placeHoldersmodxdf_site_plugins[""]["moduleguid"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["static"] = "Static";
	$fieldToolTipsmodxdf_site_plugins[""]["static"] = "";
	$placeHoldersmodxdf_site_plugins[""]["static"] = "";
	$fieldLabelsmodxdf_site_plugins[""]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_plugins[""]["static_file"] = "";
	$placeHoldersmodxdf_site_plugins[""]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_plugins[""]))
		$tdatamodxdf_site_plugins[".isUseToolTips"] = true;
}


	$tdatamodxdf_site_plugins[".NCSearch"] = true;



$tdatamodxdf_site_plugins[".shortTableName"] = "modxdf_site_plugins";
$tdatamodxdf_site_plugins[".nSecOptions"] = 0;
$tdatamodxdf_site_plugins[".recsPerRowPrint"] = 1;
$tdatamodxdf_site_plugins[".mainTableOwnerID"] = "";
$tdatamodxdf_site_plugins[".moveNext"] = 1;
$tdatamodxdf_site_plugins[".entityType"] = 0;

$tdatamodxdf_site_plugins[".strOriginalTableName"] = "modxdf_site_plugins";

	



$tdatamodxdf_site_plugins[".showAddInPopup"] = false;

$tdatamodxdf_site_plugins[".showEditInPopup"] = false;

$tdatamodxdf_site_plugins[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodxdf_site_plugins[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodxdf_site_plugins[".fieldsForRegister"] = array();
	
$tdatamodxdf_site_plugins[".listAjax"] = false;

	$tdatamodxdf_site_plugins[".audit"] = false;

	$tdatamodxdf_site_plugins[".locking"] = false;

$tdatamodxdf_site_plugins[".edit"] = true;
$tdatamodxdf_site_plugins[".afterEditAction"] = 1;
$tdatamodxdf_site_plugins[".closePopupAfterEdit"] = 1;
$tdatamodxdf_site_plugins[".afterEditActionDetTable"] = "";

$tdatamodxdf_site_plugins[".add"] = true;
$tdatamodxdf_site_plugins[".afterAddAction"] = 1;
$tdatamodxdf_site_plugins[".closePopupAfterAdd"] = 1;
$tdatamodxdf_site_plugins[".afterAddActionDetTable"] = "";

$tdatamodxdf_site_plugins[".list"] = true;



$tdatamodxdf_site_plugins[".reorderRecordsByHeader"] = true;



$tdatamodxdf_site_plugins[".view"] = true;

$tdatamodxdf_site_plugins[".import"] = true;

$tdatamodxdf_site_plugins[".exportTo"] = true;

$tdatamodxdf_site_plugins[".printFriendly"] = true;

$tdatamodxdf_site_plugins[".delete"] = true;

$tdatamodxdf_site_plugins[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodxdf_site_plugins[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodxdf_site_plugins[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodxdf_site_plugins[".searchSaving"] = false;
//

$tdatamodxdf_site_plugins[".showSearchPanel"] = true;
		$tdatamodxdf_site_plugins[".flexibleSearch"] = true;

$tdatamodxdf_site_plugins[".isUseAjaxSuggest"] = true;

$tdatamodxdf_site_plugins[".rowHighlite"] = true;



				

$tdatamodxdf_site_plugins[".ajaxCodeSnippetAdded"] = false;

$tdatamodxdf_site_plugins[".buttonsAdded"] = false;

$tdatamodxdf_site_plugins[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodxdf_site_plugins[".isUseTimeForSearch"] = false;





$tdatamodxdf_site_plugins[".allSearchFields"] = array();
$tdatamodxdf_site_plugins[".filterFields"] = array();
$tdatamodxdf_site_plugins[".requiredSearchFields"] = array();

$tdatamodxdf_site_plugins[".allSearchFields"][] = "id";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "source";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "property_preprocess";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "name";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "description";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "editor_type";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "category";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "cache_type";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "plugincode";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "locked";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "properties";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "disabled";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "moduleguid";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "static";
	$tdatamodxdf_site_plugins[".allSearchFields"][] = "static_file";
	

$tdatamodxdf_site_plugins[".googleLikeFields"] = array();
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "id";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "source";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "name";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "description";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "category";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "locked";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "properties";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "disabled";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "static";
$tdatamodxdf_site_plugins[".googleLikeFields"][] = "static_file";


$tdatamodxdf_site_plugins[".advSearchFields"] = array();
$tdatamodxdf_site_plugins[".advSearchFields"][] = "id";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "source";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "name";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "description";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "category";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "locked";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "properties";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "disabled";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "static";
$tdatamodxdf_site_plugins[".advSearchFields"][] = "static_file";

$tdatamodxdf_site_plugins[".tableType"] = "list";

$tdatamodxdf_site_plugins[".printerPageOrientation"] = 0;
$tdatamodxdf_site_plugins[".nPrinterPageScale"] = 100;

$tdatamodxdf_site_plugins[".nPrinterSplitRecords"] = 40;

$tdatamodxdf_site_plugins[".nPrinterPDFSplitRecords"] = 40;



$tdatamodxdf_site_plugins[".geocodingEnabled"] = false;





$tdatamodxdf_site_plugins[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodxdf_site_plugins[".pageSize"] = 20;

$tdatamodxdf_site_plugins[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodxdf_site_plugins[".strOrderBy"] = $tstrOrderBy;

$tdatamodxdf_site_plugins[".orderindexes"] = array();

$tdatamodxdf_site_plugins[".sqlHead"] = "SELECT id,  	source,  	property_preprocess,  	name,  	description,  	editor_type,  	category,  	cache_type,  	plugincode,  	locked,  	properties,  	disabled,  	moduleguid,  	`static`,  	static_file";
$tdatamodxdf_site_plugins[".sqlFrom"] = "FROM modxdf_site_plugins";
$tdatamodxdf_site_plugins[".sqlWhereExpr"] = "";
$tdatamodxdf_site_plugins[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodxdf_site_plugins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodxdf_site_plugins[".arrGroupsPerPage"] = $arrGPP;

$tdatamodxdf_site_plugins[".highlightSearchResults"] = true;

$tableKeysmodxdf_site_plugins = array();
$tableKeysmodxdf_site_plugins[] = "id";
$tdatamodxdf_site_plugins[".Keys"] = $tableKeysmodxdf_site_plugins;

$tdatamodxdf_site_plugins[".listFields"] = array();
$tdatamodxdf_site_plugins[".listFields"][] = "id";
$tdatamodxdf_site_plugins[".listFields"][] = "source";
$tdatamodxdf_site_plugins[".listFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".listFields"][] = "name";
$tdatamodxdf_site_plugins[".listFields"][] = "description";
$tdatamodxdf_site_plugins[".listFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".listFields"][] = "category";
$tdatamodxdf_site_plugins[".listFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".listFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".listFields"][] = "locked";
$tdatamodxdf_site_plugins[".listFields"][] = "properties";
$tdatamodxdf_site_plugins[".listFields"][] = "disabled";
$tdatamodxdf_site_plugins[".listFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".listFields"][] = "static";
$tdatamodxdf_site_plugins[".listFields"][] = "static_file";

$tdatamodxdf_site_plugins[".hideMobileList"] = array();


$tdatamodxdf_site_plugins[".viewFields"] = array();
$tdatamodxdf_site_plugins[".viewFields"][] = "id";
$tdatamodxdf_site_plugins[".viewFields"][] = "source";
$tdatamodxdf_site_plugins[".viewFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".viewFields"][] = "name";
$tdatamodxdf_site_plugins[".viewFields"][] = "description";
$tdatamodxdf_site_plugins[".viewFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".viewFields"][] = "category";
$tdatamodxdf_site_plugins[".viewFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".viewFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".viewFields"][] = "locked";
$tdatamodxdf_site_plugins[".viewFields"][] = "properties";
$tdatamodxdf_site_plugins[".viewFields"][] = "disabled";
$tdatamodxdf_site_plugins[".viewFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".viewFields"][] = "static";
$tdatamodxdf_site_plugins[".viewFields"][] = "static_file";

$tdatamodxdf_site_plugins[".addFields"] = array();
$tdatamodxdf_site_plugins[".addFields"][] = "source";
$tdatamodxdf_site_plugins[".addFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".addFields"][] = "name";
$tdatamodxdf_site_plugins[".addFields"][] = "description";
$tdatamodxdf_site_plugins[".addFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".addFields"][] = "category";
$tdatamodxdf_site_plugins[".addFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".addFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".addFields"][] = "locked";
$tdatamodxdf_site_plugins[".addFields"][] = "properties";
$tdatamodxdf_site_plugins[".addFields"][] = "disabled";
$tdatamodxdf_site_plugins[".addFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".addFields"][] = "static";
$tdatamodxdf_site_plugins[".addFields"][] = "static_file";

$tdatamodxdf_site_plugins[".masterListFields"] = array();
$tdatamodxdf_site_plugins[".masterListFields"][] = "id";
$tdatamodxdf_site_plugins[".masterListFields"][] = "source";
$tdatamodxdf_site_plugins[".masterListFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".masterListFields"][] = "name";
$tdatamodxdf_site_plugins[".masterListFields"][] = "description";
$tdatamodxdf_site_plugins[".masterListFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".masterListFields"][] = "category";
$tdatamodxdf_site_plugins[".masterListFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".masterListFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".masterListFields"][] = "locked";
$tdatamodxdf_site_plugins[".masterListFields"][] = "properties";
$tdatamodxdf_site_plugins[".masterListFields"][] = "disabled";
$tdatamodxdf_site_plugins[".masterListFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".masterListFields"][] = "static";
$tdatamodxdf_site_plugins[".masterListFields"][] = "static_file";

$tdatamodxdf_site_plugins[".inlineAddFields"] = array();
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "source";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "name";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "description";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "category";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "locked";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "properties";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "disabled";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "static";
$tdatamodxdf_site_plugins[".inlineAddFields"][] = "static_file";

$tdatamodxdf_site_plugins[".editFields"] = array();
$tdatamodxdf_site_plugins[".editFields"][] = "source";
$tdatamodxdf_site_plugins[".editFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".editFields"][] = "name";
$tdatamodxdf_site_plugins[".editFields"][] = "description";
$tdatamodxdf_site_plugins[".editFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".editFields"][] = "category";
$tdatamodxdf_site_plugins[".editFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".editFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".editFields"][] = "locked";
$tdatamodxdf_site_plugins[".editFields"][] = "properties";
$tdatamodxdf_site_plugins[".editFields"][] = "disabled";
$tdatamodxdf_site_plugins[".editFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".editFields"][] = "static";
$tdatamodxdf_site_plugins[".editFields"][] = "static_file";

$tdatamodxdf_site_plugins[".inlineEditFields"] = array();
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "source";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "name";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "description";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "category";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "locked";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "properties";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "disabled";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "static";
$tdatamodxdf_site_plugins[".inlineEditFields"][] = "static_file";

$tdatamodxdf_site_plugins[".updateSelectedFields"] = array();
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "source";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "name";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "description";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "category";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "locked";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "properties";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "disabled";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "static";
$tdatamodxdf_site_plugins[".updateSelectedFields"][] = "static_file";


$tdatamodxdf_site_plugins[".exportFields"] = array();
$tdatamodxdf_site_plugins[".exportFields"][] = "id";
$tdatamodxdf_site_plugins[".exportFields"][] = "source";
$tdatamodxdf_site_plugins[".exportFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".exportFields"][] = "name";
$tdatamodxdf_site_plugins[".exportFields"][] = "description";
$tdatamodxdf_site_plugins[".exportFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".exportFields"][] = "category";
$tdatamodxdf_site_plugins[".exportFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".exportFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".exportFields"][] = "locked";
$tdatamodxdf_site_plugins[".exportFields"][] = "properties";
$tdatamodxdf_site_plugins[".exportFields"][] = "disabled";
$tdatamodxdf_site_plugins[".exportFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".exportFields"][] = "static";
$tdatamodxdf_site_plugins[".exportFields"][] = "static_file";

$tdatamodxdf_site_plugins[".importFields"] = array();
$tdatamodxdf_site_plugins[".importFields"][] = "id";
$tdatamodxdf_site_plugins[".importFields"][] = "source";
$tdatamodxdf_site_plugins[".importFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".importFields"][] = "name";
$tdatamodxdf_site_plugins[".importFields"][] = "description";
$tdatamodxdf_site_plugins[".importFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".importFields"][] = "category";
$tdatamodxdf_site_plugins[".importFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".importFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".importFields"][] = "locked";
$tdatamodxdf_site_plugins[".importFields"][] = "properties";
$tdatamodxdf_site_plugins[".importFields"][] = "disabled";
$tdatamodxdf_site_plugins[".importFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".importFields"][] = "static";
$tdatamodxdf_site_plugins[".importFields"][] = "static_file";

$tdatamodxdf_site_plugins[".printFields"] = array();
$tdatamodxdf_site_plugins[".printFields"][] = "id";
$tdatamodxdf_site_plugins[".printFields"][] = "source";
$tdatamodxdf_site_plugins[".printFields"][] = "property_preprocess";
$tdatamodxdf_site_plugins[".printFields"][] = "name";
$tdatamodxdf_site_plugins[".printFields"][] = "description";
$tdatamodxdf_site_plugins[".printFields"][] = "editor_type";
$tdatamodxdf_site_plugins[".printFields"][] = "category";
$tdatamodxdf_site_plugins[".printFields"][] = "cache_type";
$tdatamodxdf_site_plugins[".printFields"][] = "plugincode";
$tdatamodxdf_site_plugins[".printFields"][] = "locked";
$tdatamodxdf_site_plugins[".printFields"][] = "properties";
$tdatamodxdf_site_plugins[".printFields"][] = "disabled";
$tdatamodxdf_site_plugins[".printFields"][] = "moduleguid";
$tdatamodxdf_site_plugins[".printFields"][] = "static";
$tdatamodxdf_site_plugins[".printFields"][] = "static_file";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","id");
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




	$tdatamodxdf_site_plugins["id"] = $fdata;
//	source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "source";
	$fdata["GoodName"] = "source";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","source");
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




	$tdatamodxdf_site_plugins["source"] = $fdata;
//	property_preprocess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "property_preprocess";
	$fdata["GoodName"] = "property_preprocess";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","property_preprocess");
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




	$tdatamodxdf_site_plugins["property_preprocess"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","name");
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




	$tdatamodxdf_site_plugins["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","description");
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




	$tdatamodxdf_site_plugins["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","editor_type");
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




	$tdatamodxdf_site_plugins["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","category");
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




	$tdatamodxdf_site_plugins["category"] = $fdata;
//	cache_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cache_type";
	$fdata["GoodName"] = "cache_type";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","cache_type");
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




	$tdatamodxdf_site_plugins["cache_type"] = $fdata;
//	plugincode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "plugincode";
	$fdata["GoodName"] = "plugincode";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","plugincode");
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

		$fdata["strField"] = "plugincode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plugincode";

	
	
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




	$tdatamodxdf_site_plugins["plugincode"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","locked");
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




	$tdatamodxdf_site_plugins["locked"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","properties");
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




	$tdatamodxdf_site_plugins["properties"] = $fdata;
//	disabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "disabled";
	$fdata["GoodName"] = "disabled";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","disabled");
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

		$fdata["strField"] = "disabled";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disabled";

	
	
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




	$tdatamodxdf_site_plugins["disabled"] = $fdata;
//	moduleguid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "moduleguid";
	$fdata["GoodName"] = "moduleguid";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","moduleguid");
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




	$tdatamodxdf_site_plugins["moduleguid"] = $fdata;
//	static
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "static";
	$fdata["GoodName"] = "static";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","static");
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




	$tdatamodxdf_site_plugins["static"] = $fdata;
//	static_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "static_file";
	$fdata["GoodName"] = "static_file";
	$fdata["ownerTable"] = "modxdf_site_plugins";
	$fdata["Label"] = GetFieldLabel("modxdf_site_plugins","static_file");
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




	$tdatamodxdf_site_plugins["static_file"] = $fdata;


$tables_data["modxdf_site_plugins"]=&$tdatamodxdf_site_plugins;
$field_labels["modxdf_site_plugins"] = &$fieldLabelsmodxdf_site_plugins;
$fieldToolTips["modxdf_site_plugins"] = &$fieldToolTipsmodxdf_site_plugins;
$placeHolders["modxdf_site_plugins"] = &$placeHoldersmodxdf_site_plugins;
$page_titles["modxdf_site_plugins"] = &$pageTitlesmodxdf_site_plugins;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modxdf_site_plugins"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modxdf_site_plugins"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modxdf_site_plugins()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	source,  	property_preprocess,  	name,  	description,  	editor_type,  	category,  	cache_type,  	plugincode,  	locked,  	properties,  	disabled,  	moduleguid,  	`static`,  	static_file";
$proto0["m_strFrom"] = "FROM modxdf_site_plugins";
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
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modxdf_site_plugins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "source",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto8["m_sql"] = "source";
$proto8["m_srcTableName"] = "modxdf_site_plugins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "property_preprocess",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto10["m_sql"] = "property_preprocess";
$proto10["m_srcTableName"] = "modxdf_site_plugins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto12["m_sql"] = "name";
$proto12["m_srcTableName"] = "modxdf_site_plugins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "modxdf_site_plugins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto16["m_sql"] = "editor_type";
$proto16["m_srcTableName"] = "modxdf_site_plugins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto18["m_sql"] = "category";
$proto18["m_srcTableName"] = "modxdf_site_plugins";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cache_type",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto20["m_sql"] = "cache_type";
$proto20["m_srcTableName"] = "modxdf_site_plugins";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "plugincode",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto22["m_sql"] = "plugincode";
$proto22["m_srcTableName"] = "modxdf_site_plugins";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto24["m_sql"] = "locked";
$proto24["m_srcTableName"] = "modxdf_site_plugins";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto26["m_sql"] = "properties";
$proto26["m_srcTableName"] = "modxdf_site_plugins";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "disabled",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto28["m_sql"] = "disabled";
$proto28["m_srcTableName"] = "modxdf_site_plugins";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "moduleguid",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto30["m_sql"] = "moduleguid";
$proto30["m_srcTableName"] = "modxdf_site_plugins";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "static",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto32["m_sql"] = "`static`";
$proto32["m_srcTableName"] = "modxdf_site_plugins";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "static_file",
	"m_strTable" => "modxdf_site_plugins",
	"m_srcTableName" => "modxdf_site_plugins"
));

$proto34["m_sql"] = "static_file";
$proto34["m_srcTableName"] = "modxdf_site_plugins";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "modxdf_site_plugins";
$proto37["m_srcTableName"] = "modxdf_site_plugins";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "source";
$proto37["m_columns"][] = "property_preprocess";
$proto37["m_columns"][] = "name";
$proto37["m_columns"][] = "description";
$proto37["m_columns"][] = "editor_type";
$proto37["m_columns"][] = "category";
$proto37["m_columns"][] = "cache_type";
$proto37["m_columns"][] = "plugincode";
$proto37["m_columns"][] = "locked";
$proto37["m_columns"][] = "properties";
$proto37["m_columns"][] = "disabled";
$proto37["m_columns"][] = "moduleguid";
$proto37["m_columns"][] = "static";
$proto37["m_columns"][] = "static_file";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "modxdf_site_plugins";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "modxdf_site_plugins";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modxdf_site_plugins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modxdf_site_plugins = createSqlQuery_modxdf_site_plugins();


	
						;

															

$tdatamodxdf_site_plugins[".sqlquery"] = $queryData_modxdf_site_plugins;

$tableEvents["modxdf_site_plugins"] = new eventsBase;
$tdatamodxdf_site_plugins[".hasEvents"] = false;

?>
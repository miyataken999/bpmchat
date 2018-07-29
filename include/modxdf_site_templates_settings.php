<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodxdf_site_templates = array();
	$tdatamodxdf_site_templates[".truncateText"] = true;
	$tdatamodxdf_site_templates[".NumberOfChars"] = 80;
	$tdatamodxdf_site_templates[".ShortName"] = "modxdf_site_templates";
	$tdatamodxdf_site_templates[".OwnerID"] = "";
	$tdatamodxdf_site_templates[".OriginalTable"] = "modxdf_site_templates";

//	field labels
$fieldLabelsmodxdf_site_templates = array();
$fieldToolTipsmodxdf_site_templates = array();
$pageTitlesmodxdf_site_templates = array();
$placeHoldersmodxdf_site_templates = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodxdf_site_templates["Japanese"] = array();
	$fieldToolTipsmodxdf_site_templates["Japanese"] = array();
	$placeHoldersmodxdf_site_templates["Japanese"] = array();
	$pageTitlesmodxdf_site_templates["Japanese"] = array();
	$fieldLabelsmodxdf_site_templates["Japanese"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["id"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["id"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["source"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["source"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["templatename"] = "Templatename";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["templatename"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["templatename"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["description"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["description"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["editor_type"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["category"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["category"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["icon"] = "Icon";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["icon"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["icon"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["template_type"] = "Template Type";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["template_type"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["template_type"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["content"] = "Content";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["content"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["content"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["locked"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["locked"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["properties"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["properties"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["static"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["static"] = "";
	$fieldLabelsmodxdf_site_templates["Japanese"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_templates["Japanese"]["static_file"] = "";
	$placeHoldersmodxdf_site_templates["Japanese"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_templates["Japanese"]))
		$tdatamodxdf_site_templates[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodxdf_site_templates["English"] = array();
	$fieldToolTipsmodxdf_site_templates["English"] = array();
	$placeHoldersmodxdf_site_templates["English"] = array();
	$pageTitlesmodxdf_site_templates["English"] = array();
	$fieldLabelsmodxdf_site_templates["English"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_templates["English"]["id"] = "";
	$placeHoldersmodxdf_site_templates["English"]["id"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_templates["English"]["source"] = "";
	$placeHoldersmodxdf_site_templates["English"]["source"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_templates["English"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_templates["English"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["templatename"] = "Templatename";
	$fieldToolTipsmodxdf_site_templates["English"]["templatename"] = "";
	$placeHoldersmodxdf_site_templates["English"]["templatename"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_templates["English"]["description"] = "";
	$placeHoldersmodxdf_site_templates["English"]["description"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_templates["English"]["editor_type"] = "";
	$placeHoldersmodxdf_site_templates["English"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_templates["English"]["category"] = "";
	$placeHoldersmodxdf_site_templates["English"]["category"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["icon"] = "Icon";
	$fieldToolTipsmodxdf_site_templates["English"]["icon"] = "";
	$placeHoldersmodxdf_site_templates["English"]["icon"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["template_type"] = "Template Type";
	$fieldToolTipsmodxdf_site_templates["English"]["template_type"] = "";
	$placeHoldersmodxdf_site_templates["English"]["template_type"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["content"] = "Content";
	$fieldToolTipsmodxdf_site_templates["English"]["content"] = "";
	$placeHoldersmodxdf_site_templates["English"]["content"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_templates["English"]["locked"] = "";
	$placeHoldersmodxdf_site_templates["English"]["locked"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_templates["English"]["properties"] = "";
	$placeHoldersmodxdf_site_templates["English"]["properties"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_templates["English"]["static"] = "";
	$placeHoldersmodxdf_site_templates["English"]["static"] = "";
	$fieldLabelsmodxdf_site_templates["English"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_templates["English"]["static_file"] = "";
	$placeHoldersmodxdf_site_templates["English"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_templates["English"]))
		$tdatamodxdf_site_templates[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodxdf_site_templates[""] = array();
	$fieldToolTipsmodxdf_site_templates[""] = array();
	$placeHoldersmodxdf_site_templates[""] = array();
	$pageTitlesmodxdf_site_templates[""] = array();
	$fieldLabelsmodxdf_site_templates[""]["id"] = "Id";
	$fieldToolTipsmodxdf_site_templates[""]["id"] = "";
	$placeHoldersmodxdf_site_templates[""]["id"] = "";
	$fieldLabelsmodxdf_site_templates[""]["source"] = "Source";
	$fieldToolTipsmodxdf_site_templates[""]["source"] = "";
	$placeHoldersmodxdf_site_templates[""]["source"] = "";
	$fieldLabelsmodxdf_site_templates[""]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_templates[""]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_templates[""]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_templates[""]["templatename"] = "Templatename";
	$fieldToolTipsmodxdf_site_templates[""]["templatename"] = "";
	$placeHoldersmodxdf_site_templates[""]["templatename"] = "";
	$fieldLabelsmodxdf_site_templates[""]["description"] = "Description";
	$fieldToolTipsmodxdf_site_templates[""]["description"] = "";
	$placeHoldersmodxdf_site_templates[""]["description"] = "";
	$fieldLabelsmodxdf_site_templates[""]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_templates[""]["editor_type"] = "";
	$placeHoldersmodxdf_site_templates[""]["editor_type"] = "";
	$fieldLabelsmodxdf_site_templates[""]["category"] = "Category";
	$fieldToolTipsmodxdf_site_templates[""]["category"] = "";
	$placeHoldersmodxdf_site_templates[""]["category"] = "";
	$fieldLabelsmodxdf_site_templates[""]["icon"] = "Icon";
	$fieldToolTipsmodxdf_site_templates[""]["icon"] = "";
	$placeHoldersmodxdf_site_templates[""]["icon"] = "";
	$fieldLabelsmodxdf_site_templates[""]["template_type"] = "Template Type";
	$fieldToolTipsmodxdf_site_templates[""]["template_type"] = "";
	$placeHoldersmodxdf_site_templates[""]["template_type"] = "";
	$fieldLabelsmodxdf_site_templates[""]["content"] = "Content";
	$fieldToolTipsmodxdf_site_templates[""]["content"] = "";
	$placeHoldersmodxdf_site_templates[""]["content"] = "";
	$fieldLabelsmodxdf_site_templates[""]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_templates[""]["locked"] = "";
	$placeHoldersmodxdf_site_templates[""]["locked"] = "";
	$fieldLabelsmodxdf_site_templates[""]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_templates[""]["properties"] = "";
	$placeHoldersmodxdf_site_templates[""]["properties"] = "";
	$fieldLabelsmodxdf_site_templates[""]["static"] = "Static";
	$fieldToolTipsmodxdf_site_templates[""]["static"] = "";
	$placeHoldersmodxdf_site_templates[""]["static"] = "";
	$fieldLabelsmodxdf_site_templates[""]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_templates[""]["static_file"] = "";
	$placeHoldersmodxdf_site_templates[""]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_templates[""]))
		$tdatamodxdf_site_templates[".isUseToolTips"] = true;
}


	$tdatamodxdf_site_templates[".NCSearch"] = true;



$tdatamodxdf_site_templates[".shortTableName"] = "modxdf_site_templates";
$tdatamodxdf_site_templates[".nSecOptions"] = 0;
$tdatamodxdf_site_templates[".recsPerRowPrint"] = 1;
$tdatamodxdf_site_templates[".mainTableOwnerID"] = "";
$tdatamodxdf_site_templates[".moveNext"] = 1;
$tdatamodxdf_site_templates[".entityType"] = 0;

$tdatamodxdf_site_templates[".strOriginalTableName"] = "modxdf_site_templates";

	



$tdatamodxdf_site_templates[".showAddInPopup"] = false;

$tdatamodxdf_site_templates[".showEditInPopup"] = false;

$tdatamodxdf_site_templates[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodxdf_site_templates[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodxdf_site_templates[".fieldsForRegister"] = array();
	
$tdatamodxdf_site_templates[".listAjax"] = false;

	$tdatamodxdf_site_templates[".audit"] = false;

	$tdatamodxdf_site_templates[".locking"] = false;

$tdatamodxdf_site_templates[".edit"] = true;
$tdatamodxdf_site_templates[".afterEditAction"] = 1;
$tdatamodxdf_site_templates[".closePopupAfterEdit"] = 1;
$tdatamodxdf_site_templates[".afterEditActionDetTable"] = "";

$tdatamodxdf_site_templates[".add"] = true;
$tdatamodxdf_site_templates[".afterAddAction"] = 1;
$tdatamodxdf_site_templates[".closePopupAfterAdd"] = 1;
$tdatamodxdf_site_templates[".afterAddActionDetTable"] = "";

$tdatamodxdf_site_templates[".list"] = true;



$tdatamodxdf_site_templates[".reorderRecordsByHeader"] = true;



$tdatamodxdf_site_templates[".view"] = true;

$tdatamodxdf_site_templates[".import"] = true;

$tdatamodxdf_site_templates[".exportTo"] = true;

$tdatamodxdf_site_templates[".printFriendly"] = true;

$tdatamodxdf_site_templates[".delete"] = true;

$tdatamodxdf_site_templates[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodxdf_site_templates[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodxdf_site_templates[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodxdf_site_templates[".searchSaving"] = false;
//

$tdatamodxdf_site_templates[".showSearchPanel"] = true;
		$tdatamodxdf_site_templates[".flexibleSearch"] = true;

$tdatamodxdf_site_templates[".isUseAjaxSuggest"] = true;

$tdatamodxdf_site_templates[".rowHighlite"] = true;



				

$tdatamodxdf_site_templates[".ajaxCodeSnippetAdded"] = false;

$tdatamodxdf_site_templates[".buttonsAdded"] = false;

$tdatamodxdf_site_templates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodxdf_site_templates[".isUseTimeForSearch"] = false;





$tdatamodxdf_site_templates[".allSearchFields"] = array();
$tdatamodxdf_site_templates[".filterFields"] = array();
$tdatamodxdf_site_templates[".requiredSearchFields"] = array();

$tdatamodxdf_site_templates[".allSearchFields"][] = "id";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "source";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "property_preprocess";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "templatename";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "description";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "editor_type";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "category";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "icon";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "template_type";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "content";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "locked";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "properties";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "static";
	$tdatamodxdf_site_templates[".allSearchFields"][] = "static_file";
	

$tdatamodxdf_site_templates[".googleLikeFields"] = array();
$tdatamodxdf_site_templates[".googleLikeFields"][] = "id";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "source";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "templatename";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "description";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "editor_type";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "category";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "icon";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "template_type";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "content";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "locked";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "properties";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "static";
$tdatamodxdf_site_templates[".googleLikeFields"][] = "static_file";


$tdatamodxdf_site_templates[".advSearchFields"] = array();
$tdatamodxdf_site_templates[".advSearchFields"][] = "id";
$tdatamodxdf_site_templates[".advSearchFields"][] = "source";
$tdatamodxdf_site_templates[".advSearchFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".advSearchFields"][] = "templatename";
$tdatamodxdf_site_templates[".advSearchFields"][] = "description";
$tdatamodxdf_site_templates[".advSearchFields"][] = "editor_type";
$tdatamodxdf_site_templates[".advSearchFields"][] = "category";
$tdatamodxdf_site_templates[".advSearchFields"][] = "icon";
$tdatamodxdf_site_templates[".advSearchFields"][] = "template_type";
$tdatamodxdf_site_templates[".advSearchFields"][] = "content";
$tdatamodxdf_site_templates[".advSearchFields"][] = "locked";
$tdatamodxdf_site_templates[".advSearchFields"][] = "properties";
$tdatamodxdf_site_templates[".advSearchFields"][] = "static";
$tdatamodxdf_site_templates[".advSearchFields"][] = "static_file";

$tdatamodxdf_site_templates[".tableType"] = "list";

$tdatamodxdf_site_templates[".printerPageOrientation"] = 0;
$tdatamodxdf_site_templates[".nPrinterPageScale"] = 100;

$tdatamodxdf_site_templates[".nPrinterSplitRecords"] = 40;

$tdatamodxdf_site_templates[".nPrinterPDFSplitRecords"] = 40;



$tdatamodxdf_site_templates[".geocodingEnabled"] = false;





$tdatamodxdf_site_templates[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodxdf_site_templates[".pageSize"] = 20;

$tdatamodxdf_site_templates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodxdf_site_templates[".strOrderBy"] = $tstrOrderBy;

$tdatamodxdf_site_templates[".orderindexes"] = array();

$tdatamodxdf_site_templates[".sqlHead"] = "SELECT id,  	source,  	property_preprocess,  	templatename,  	description,  	editor_type,  	category,  	icon,  	template_type,  	content,  	locked,  	properties,  	`static`,  	static_file";
$tdatamodxdf_site_templates[".sqlFrom"] = "FROM modxdf_site_templates";
$tdatamodxdf_site_templates[".sqlWhereExpr"] = "";
$tdatamodxdf_site_templates[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodxdf_site_templates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodxdf_site_templates[".arrGroupsPerPage"] = $arrGPP;

$tdatamodxdf_site_templates[".highlightSearchResults"] = true;

$tableKeysmodxdf_site_templates = array();
$tableKeysmodxdf_site_templates[] = "id";
$tdatamodxdf_site_templates[".Keys"] = $tableKeysmodxdf_site_templates;

$tdatamodxdf_site_templates[".listFields"] = array();
$tdatamodxdf_site_templates[".listFields"][] = "id";
$tdatamodxdf_site_templates[".listFields"][] = "source";
$tdatamodxdf_site_templates[".listFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".listFields"][] = "templatename";
$tdatamodxdf_site_templates[".listFields"][] = "description";
$tdatamodxdf_site_templates[".listFields"][] = "editor_type";
$tdatamodxdf_site_templates[".listFields"][] = "category";
$tdatamodxdf_site_templates[".listFields"][] = "icon";
$tdatamodxdf_site_templates[".listFields"][] = "template_type";
$tdatamodxdf_site_templates[".listFields"][] = "content";
$tdatamodxdf_site_templates[".listFields"][] = "locked";
$tdatamodxdf_site_templates[".listFields"][] = "properties";
$tdatamodxdf_site_templates[".listFields"][] = "static";
$tdatamodxdf_site_templates[".listFields"][] = "static_file";

$tdatamodxdf_site_templates[".hideMobileList"] = array();


$tdatamodxdf_site_templates[".viewFields"] = array();
$tdatamodxdf_site_templates[".viewFields"][] = "id";
$tdatamodxdf_site_templates[".viewFields"][] = "source";
$tdatamodxdf_site_templates[".viewFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".viewFields"][] = "templatename";
$tdatamodxdf_site_templates[".viewFields"][] = "description";
$tdatamodxdf_site_templates[".viewFields"][] = "editor_type";
$tdatamodxdf_site_templates[".viewFields"][] = "category";
$tdatamodxdf_site_templates[".viewFields"][] = "icon";
$tdatamodxdf_site_templates[".viewFields"][] = "template_type";
$tdatamodxdf_site_templates[".viewFields"][] = "content";
$tdatamodxdf_site_templates[".viewFields"][] = "locked";
$tdatamodxdf_site_templates[".viewFields"][] = "properties";
$tdatamodxdf_site_templates[".viewFields"][] = "static";
$tdatamodxdf_site_templates[".viewFields"][] = "static_file";

$tdatamodxdf_site_templates[".addFields"] = array();
$tdatamodxdf_site_templates[".addFields"][] = "source";
$tdatamodxdf_site_templates[".addFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".addFields"][] = "templatename";
$tdatamodxdf_site_templates[".addFields"][] = "description";
$tdatamodxdf_site_templates[".addFields"][] = "editor_type";
$tdatamodxdf_site_templates[".addFields"][] = "category";
$tdatamodxdf_site_templates[".addFields"][] = "icon";
$tdatamodxdf_site_templates[".addFields"][] = "template_type";
$tdatamodxdf_site_templates[".addFields"][] = "content";
$tdatamodxdf_site_templates[".addFields"][] = "locked";
$tdatamodxdf_site_templates[".addFields"][] = "properties";
$tdatamodxdf_site_templates[".addFields"][] = "static";
$tdatamodxdf_site_templates[".addFields"][] = "static_file";

$tdatamodxdf_site_templates[".masterListFields"] = array();
$tdatamodxdf_site_templates[".masterListFields"][] = "id";
$tdatamodxdf_site_templates[".masterListFields"][] = "source";
$tdatamodxdf_site_templates[".masterListFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".masterListFields"][] = "templatename";
$tdatamodxdf_site_templates[".masterListFields"][] = "description";
$tdatamodxdf_site_templates[".masterListFields"][] = "editor_type";
$tdatamodxdf_site_templates[".masterListFields"][] = "category";
$tdatamodxdf_site_templates[".masterListFields"][] = "icon";
$tdatamodxdf_site_templates[".masterListFields"][] = "template_type";
$tdatamodxdf_site_templates[".masterListFields"][] = "content";
$tdatamodxdf_site_templates[".masterListFields"][] = "locked";
$tdatamodxdf_site_templates[".masterListFields"][] = "properties";
$tdatamodxdf_site_templates[".masterListFields"][] = "static";
$tdatamodxdf_site_templates[".masterListFields"][] = "static_file";

$tdatamodxdf_site_templates[".inlineAddFields"] = array();
$tdatamodxdf_site_templates[".inlineAddFields"][] = "source";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "templatename";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "description";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "editor_type";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "category";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "icon";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "template_type";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "content";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "locked";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "properties";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "static";
$tdatamodxdf_site_templates[".inlineAddFields"][] = "static_file";

$tdatamodxdf_site_templates[".editFields"] = array();
$tdatamodxdf_site_templates[".editFields"][] = "source";
$tdatamodxdf_site_templates[".editFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".editFields"][] = "templatename";
$tdatamodxdf_site_templates[".editFields"][] = "description";
$tdatamodxdf_site_templates[".editFields"][] = "editor_type";
$tdatamodxdf_site_templates[".editFields"][] = "category";
$tdatamodxdf_site_templates[".editFields"][] = "icon";
$tdatamodxdf_site_templates[".editFields"][] = "template_type";
$tdatamodxdf_site_templates[".editFields"][] = "content";
$tdatamodxdf_site_templates[".editFields"][] = "locked";
$tdatamodxdf_site_templates[".editFields"][] = "properties";
$tdatamodxdf_site_templates[".editFields"][] = "static";
$tdatamodxdf_site_templates[".editFields"][] = "static_file";

$tdatamodxdf_site_templates[".inlineEditFields"] = array();
$tdatamodxdf_site_templates[".inlineEditFields"][] = "source";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "templatename";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "description";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "editor_type";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "category";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "icon";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "template_type";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "content";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "locked";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "properties";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "static";
$tdatamodxdf_site_templates[".inlineEditFields"][] = "static_file";

$tdatamodxdf_site_templates[".updateSelectedFields"] = array();
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "source";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "templatename";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "description";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "editor_type";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "category";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "icon";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "template_type";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "content";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "locked";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "properties";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "static";
$tdatamodxdf_site_templates[".updateSelectedFields"][] = "static_file";


$tdatamodxdf_site_templates[".exportFields"] = array();
$tdatamodxdf_site_templates[".exportFields"][] = "id";
$tdatamodxdf_site_templates[".exportFields"][] = "source";
$tdatamodxdf_site_templates[".exportFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".exportFields"][] = "templatename";
$tdatamodxdf_site_templates[".exportFields"][] = "description";
$tdatamodxdf_site_templates[".exportFields"][] = "editor_type";
$tdatamodxdf_site_templates[".exportFields"][] = "category";
$tdatamodxdf_site_templates[".exportFields"][] = "icon";
$tdatamodxdf_site_templates[".exportFields"][] = "template_type";
$tdatamodxdf_site_templates[".exportFields"][] = "content";
$tdatamodxdf_site_templates[".exportFields"][] = "locked";
$tdatamodxdf_site_templates[".exportFields"][] = "properties";
$tdatamodxdf_site_templates[".exportFields"][] = "static";
$tdatamodxdf_site_templates[".exportFields"][] = "static_file";

$tdatamodxdf_site_templates[".importFields"] = array();
$tdatamodxdf_site_templates[".importFields"][] = "id";
$tdatamodxdf_site_templates[".importFields"][] = "source";
$tdatamodxdf_site_templates[".importFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".importFields"][] = "templatename";
$tdatamodxdf_site_templates[".importFields"][] = "description";
$tdatamodxdf_site_templates[".importFields"][] = "editor_type";
$tdatamodxdf_site_templates[".importFields"][] = "category";
$tdatamodxdf_site_templates[".importFields"][] = "icon";
$tdatamodxdf_site_templates[".importFields"][] = "template_type";
$tdatamodxdf_site_templates[".importFields"][] = "content";
$tdatamodxdf_site_templates[".importFields"][] = "locked";
$tdatamodxdf_site_templates[".importFields"][] = "properties";
$tdatamodxdf_site_templates[".importFields"][] = "static";
$tdatamodxdf_site_templates[".importFields"][] = "static_file";

$tdatamodxdf_site_templates[".printFields"] = array();
$tdatamodxdf_site_templates[".printFields"][] = "id";
$tdatamodxdf_site_templates[".printFields"][] = "source";
$tdatamodxdf_site_templates[".printFields"][] = "property_preprocess";
$tdatamodxdf_site_templates[".printFields"][] = "templatename";
$tdatamodxdf_site_templates[".printFields"][] = "description";
$tdatamodxdf_site_templates[".printFields"][] = "editor_type";
$tdatamodxdf_site_templates[".printFields"][] = "category";
$tdatamodxdf_site_templates[".printFields"][] = "icon";
$tdatamodxdf_site_templates[".printFields"][] = "template_type";
$tdatamodxdf_site_templates[".printFields"][] = "content";
$tdatamodxdf_site_templates[".printFields"][] = "locked";
$tdatamodxdf_site_templates[".printFields"][] = "properties";
$tdatamodxdf_site_templates[".printFields"][] = "static";
$tdatamodxdf_site_templates[".printFields"][] = "static_file";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","id");
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




	$tdatamodxdf_site_templates["id"] = $fdata;
//	source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "source";
	$fdata["GoodName"] = "source";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","source");
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




	$tdatamodxdf_site_templates["source"] = $fdata;
//	property_preprocess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "property_preprocess";
	$fdata["GoodName"] = "property_preprocess";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","property_preprocess");
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




	$tdatamodxdf_site_templates["property_preprocess"] = $fdata;
//	templatename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "templatename";
	$fdata["GoodName"] = "templatename";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","templatename");
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

		$fdata["strField"] = "templatename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "templatename";

	
	
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




	$tdatamodxdf_site_templates["templatename"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","description");
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




	$tdatamodxdf_site_templates["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","editor_type");
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




	$tdatamodxdf_site_templates["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","category");
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




	$tdatamodxdf_site_templates["category"] = $fdata;
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","icon");
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

		$fdata["strField"] = "icon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
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




	$tdatamodxdf_site_templates["icon"] = $fdata;
//	template_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "template_type";
	$fdata["GoodName"] = "template_type";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","template_type");
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

		$fdata["strField"] = "template_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_type";

	
	
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




	$tdatamodxdf_site_templates["template_type"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","content");
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

		$fdata["strField"] = "content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content";

	
	
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




	$tdatamodxdf_site_templates["content"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","locked");
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




	$tdatamodxdf_site_templates["locked"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","properties");
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




	$tdatamodxdf_site_templates["properties"] = $fdata;
//	static
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "static";
	$fdata["GoodName"] = "static";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","static");
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




	$tdatamodxdf_site_templates["static"] = $fdata;
//	static_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "static_file";
	$fdata["GoodName"] = "static_file";
	$fdata["ownerTable"] = "modxdf_site_templates";
	$fdata["Label"] = GetFieldLabel("modxdf_site_templates","static_file");
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




	$tdatamodxdf_site_templates["static_file"] = $fdata;


$tables_data["modxdf_site_templates"]=&$tdatamodxdf_site_templates;
$field_labels["modxdf_site_templates"] = &$fieldLabelsmodxdf_site_templates;
$fieldToolTips["modxdf_site_templates"] = &$fieldToolTipsmodxdf_site_templates;
$placeHolders["modxdf_site_templates"] = &$placeHoldersmodxdf_site_templates;
$page_titles["modxdf_site_templates"] = &$pageTitlesmodxdf_site_templates;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modxdf_site_templates"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modxdf_site_templates"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modxdf_site_templates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	source,  	property_preprocess,  	templatename,  	description,  	editor_type,  	category,  	icon,  	template_type,  	content,  	locked,  	properties,  	`static`,  	static_file";
$proto0["m_strFrom"] = "FROM modxdf_site_templates";
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
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modxdf_site_templates";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "source",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto8["m_sql"] = "source";
$proto8["m_srcTableName"] = "modxdf_site_templates";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "property_preprocess",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto10["m_sql"] = "property_preprocess";
$proto10["m_srcTableName"] = "modxdf_site_templates";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "templatename",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto12["m_sql"] = "templatename";
$proto12["m_srcTableName"] = "modxdf_site_templates";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "modxdf_site_templates";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto16["m_sql"] = "editor_type";
$proto16["m_srcTableName"] = "modxdf_site_templates";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto18["m_sql"] = "category";
$proto18["m_srcTableName"] = "modxdf_site_templates";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto20["m_sql"] = "icon";
$proto20["m_srcTableName"] = "modxdf_site_templates";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "template_type",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto22["m_sql"] = "template_type";
$proto22["m_srcTableName"] = "modxdf_site_templates";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto24["m_sql"] = "content";
$proto24["m_srcTableName"] = "modxdf_site_templates";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto26["m_sql"] = "locked";
$proto26["m_srcTableName"] = "modxdf_site_templates";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto28["m_sql"] = "properties";
$proto28["m_srcTableName"] = "modxdf_site_templates";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "static",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto30["m_sql"] = "`static`";
$proto30["m_srcTableName"] = "modxdf_site_templates";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "static_file",
	"m_strTable" => "modxdf_site_templates",
	"m_srcTableName" => "modxdf_site_templates"
));

$proto32["m_sql"] = "static_file";
$proto32["m_srcTableName"] = "modxdf_site_templates";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "modxdf_site_templates";
$proto35["m_srcTableName"] = "modxdf_site_templates";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "source";
$proto35["m_columns"][] = "property_preprocess";
$proto35["m_columns"][] = "templatename";
$proto35["m_columns"][] = "description";
$proto35["m_columns"][] = "editor_type";
$proto35["m_columns"][] = "category";
$proto35["m_columns"][] = "icon";
$proto35["m_columns"][] = "template_type";
$proto35["m_columns"][] = "content";
$proto35["m_columns"][] = "locked";
$proto35["m_columns"][] = "properties";
$proto35["m_columns"][] = "static";
$proto35["m_columns"][] = "static_file";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "modxdf_site_templates";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "modxdf_site_templates";
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
$proto0["m_srcTableName"]="modxdf_site_templates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modxdf_site_templates = createSqlQuery_modxdf_site_templates();


	
						;

														

$tdatamodxdf_site_templates[".sqlquery"] = $queryData_modxdf_site_templates;

$tableEvents["modxdf_site_templates"] = new eventsBase;
$tdatamodxdf_site_templates[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodxdf_site_tmplvars = array();
	$tdatamodxdf_site_tmplvars[".truncateText"] = true;
	$tdatamodxdf_site_tmplvars[".NumberOfChars"] = 80;
	$tdatamodxdf_site_tmplvars[".ShortName"] = "modxdf_site_tmplvars";
	$tdatamodxdf_site_tmplvars[".OwnerID"] = "";
	$tdatamodxdf_site_tmplvars[".OriginalTable"] = "modxdf_site_tmplvars";

//	field labels
$fieldLabelsmodxdf_site_tmplvars = array();
$fieldToolTipsmodxdf_site_tmplvars = array();
$pageTitlesmodxdf_site_tmplvars = array();
$placeHoldersmodxdf_site_tmplvars = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodxdf_site_tmplvars["Japanese"] = array();
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"] = array();
	$placeHoldersmodxdf_site_tmplvars["Japanese"] = array();
	$pageTitlesmodxdf_site_tmplvars["Japanese"] = array();
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["id"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["id"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["source"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["source"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["type"] = "Type";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["type"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["type"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["name"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["name"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["caption"] = "Caption";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["caption"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["caption"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["description"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["description"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["editor_type"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["category"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["category"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["locked"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["locked"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["elements"] = "Elements";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["elements"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["elements"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["rank"] = "Rank";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["rank"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["rank"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["display"] = "Display";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["display"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["display"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["default_text"] = "Default Text";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["default_text"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["default_text"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["properties"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["input_properties"] = "Input Properties";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["input_properties"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["input_properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["output_properties"] = "Output Properties";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["output_properties"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["output_properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["static"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["static"] = "";
	$fieldLabelsmodxdf_site_tmplvars["Japanese"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_tmplvars["Japanese"]["static_file"] = "";
	$placeHoldersmodxdf_site_tmplvars["Japanese"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_tmplvars["Japanese"]))
		$tdatamodxdf_site_tmplvars[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodxdf_site_tmplvars["English"] = array();
	$fieldToolTipsmodxdf_site_tmplvars["English"] = array();
	$placeHoldersmodxdf_site_tmplvars["English"] = array();
	$pageTitlesmodxdf_site_tmplvars["English"] = array();
	$fieldLabelsmodxdf_site_tmplvars["English"]["id"] = "Id";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["id"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["id"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["source"] = "Source";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["source"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["source"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["type"] = "Type";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["type"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["type"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["name"] = "Name";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["name"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["name"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["caption"] = "Caption";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["caption"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["caption"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["description"] = "Description";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["description"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["description"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["editor_type"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["editor_type"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["category"] = "Category";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["category"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["category"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["locked"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["locked"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["elements"] = "Elements";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["elements"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["elements"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["rank"] = "Rank";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["rank"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["rank"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["display"] = "Display";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["display"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["display"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["default_text"] = "Default Text";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["default_text"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["default_text"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["properties"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["input_properties"] = "Input Properties";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["input_properties"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["input_properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["output_properties"] = "Output Properties";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["output_properties"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["output_properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["static"] = "Static";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["static"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["static"] = "";
	$fieldLabelsmodxdf_site_tmplvars["English"]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_tmplvars["English"]["static_file"] = "";
	$placeHoldersmodxdf_site_tmplvars["English"]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_tmplvars["English"]))
		$tdatamodxdf_site_tmplvars[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodxdf_site_tmplvars[""] = array();
	$fieldToolTipsmodxdf_site_tmplvars[""] = array();
	$placeHoldersmodxdf_site_tmplvars[""] = array();
	$pageTitlesmodxdf_site_tmplvars[""] = array();
	$fieldLabelsmodxdf_site_tmplvars[""]["id"] = "Id";
	$fieldToolTipsmodxdf_site_tmplvars[""]["id"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["id"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["source"] = "Source";
	$fieldToolTipsmodxdf_site_tmplvars[""]["source"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["source"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["property_preprocess"] = "Property Preprocess";
	$fieldToolTipsmodxdf_site_tmplvars[""]["property_preprocess"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["property_preprocess"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["type"] = "Type";
	$fieldToolTipsmodxdf_site_tmplvars[""]["type"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["type"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["name"] = "Name";
	$fieldToolTipsmodxdf_site_tmplvars[""]["name"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["name"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["caption"] = "Caption";
	$fieldToolTipsmodxdf_site_tmplvars[""]["caption"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["caption"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["description"] = "Description";
	$fieldToolTipsmodxdf_site_tmplvars[""]["description"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["description"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["editor_type"] = "Editor Type";
	$fieldToolTipsmodxdf_site_tmplvars[""]["editor_type"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["editor_type"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["category"] = "Category";
	$fieldToolTipsmodxdf_site_tmplvars[""]["category"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["category"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["locked"] = "Locked";
	$fieldToolTipsmodxdf_site_tmplvars[""]["locked"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["locked"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["elements"] = "Elements";
	$fieldToolTipsmodxdf_site_tmplvars[""]["elements"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["elements"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["rank"] = "Rank";
	$fieldToolTipsmodxdf_site_tmplvars[""]["rank"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["rank"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["display"] = "Display";
	$fieldToolTipsmodxdf_site_tmplvars[""]["display"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["display"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["default_text"] = "Default Text";
	$fieldToolTipsmodxdf_site_tmplvars[""]["default_text"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["default_text"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["properties"] = "Properties";
	$fieldToolTipsmodxdf_site_tmplvars[""]["properties"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["input_properties"] = "Input Properties";
	$fieldToolTipsmodxdf_site_tmplvars[""]["input_properties"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["input_properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["output_properties"] = "Output Properties";
	$fieldToolTipsmodxdf_site_tmplvars[""]["output_properties"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["output_properties"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["static"] = "Static";
	$fieldToolTipsmodxdf_site_tmplvars[""]["static"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["static"] = "";
	$fieldLabelsmodxdf_site_tmplvars[""]["static_file"] = "Static File";
	$fieldToolTipsmodxdf_site_tmplvars[""]["static_file"] = "";
	$placeHoldersmodxdf_site_tmplvars[""]["static_file"] = "";
	if (count($fieldToolTipsmodxdf_site_tmplvars[""]))
		$tdatamodxdf_site_tmplvars[".isUseToolTips"] = true;
}


	$tdatamodxdf_site_tmplvars[".NCSearch"] = true;



$tdatamodxdf_site_tmplvars[".shortTableName"] = "modxdf_site_tmplvars";
$tdatamodxdf_site_tmplvars[".nSecOptions"] = 0;
$tdatamodxdf_site_tmplvars[".recsPerRowPrint"] = 1;
$tdatamodxdf_site_tmplvars[".mainTableOwnerID"] = "";
$tdatamodxdf_site_tmplvars[".moveNext"] = 1;
$tdatamodxdf_site_tmplvars[".entityType"] = 0;

$tdatamodxdf_site_tmplvars[".strOriginalTableName"] = "modxdf_site_tmplvars";

	



$tdatamodxdf_site_tmplvars[".showAddInPopup"] = false;

$tdatamodxdf_site_tmplvars[".showEditInPopup"] = false;

$tdatamodxdf_site_tmplvars[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodxdf_site_tmplvars[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodxdf_site_tmplvars[".fieldsForRegister"] = array();
	
$tdatamodxdf_site_tmplvars[".listAjax"] = false;

	$tdatamodxdf_site_tmplvars[".audit"] = false;

	$tdatamodxdf_site_tmplvars[".locking"] = false;

$tdatamodxdf_site_tmplvars[".edit"] = true;
$tdatamodxdf_site_tmplvars[".afterEditAction"] = 1;
$tdatamodxdf_site_tmplvars[".closePopupAfterEdit"] = 1;
$tdatamodxdf_site_tmplvars[".afterEditActionDetTable"] = "";

$tdatamodxdf_site_tmplvars[".add"] = true;
$tdatamodxdf_site_tmplvars[".afterAddAction"] = 1;
$tdatamodxdf_site_tmplvars[".closePopupAfterAdd"] = 1;
$tdatamodxdf_site_tmplvars[".afterAddActionDetTable"] = "";

$tdatamodxdf_site_tmplvars[".list"] = true;



$tdatamodxdf_site_tmplvars[".reorderRecordsByHeader"] = true;



$tdatamodxdf_site_tmplvars[".view"] = true;

$tdatamodxdf_site_tmplvars[".import"] = true;

$tdatamodxdf_site_tmplvars[".exportTo"] = true;

$tdatamodxdf_site_tmplvars[".printFriendly"] = true;

$tdatamodxdf_site_tmplvars[".delete"] = true;

$tdatamodxdf_site_tmplvars[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodxdf_site_tmplvars[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodxdf_site_tmplvars[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodxdf_site_tmplvars[".searchSaving"] = false;
//

$tdatamodxdf_site_tmplvars[".showSearchPanel"] = true;
		$tdatamodxdf_site_tmplvars[".flexibleSearch"] = true;

$tdatamodxdf_site_tmplvars[".isUseAjaxSuggest"] = true;

$tdatamodxdf_site_tmplvars[".rowHighlite"] = true;



				

$tdatamodxdf_site_tmplvars[".ajaxCodeSnippetAdded"] = false;

$tdatamodxdf_site_tmplvars[".buttonsAdded"] = false;

$tdatamodxdf_site_tmplvars[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodxdf_site_tmplvars[".isUseTimeForSearch"] = false;





$tdatamodxdf_site_tmplvars[".allSearchFields"] = array();
$tdatamodxdf_site_tmplvars[".filterFields"] = array();
$tdatamodxdf_site_tmplvars[".requiredSearchFields"] = array();

$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "id";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "source";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "property_preprocess";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "type";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "name";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "caption";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "description";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "editor_type";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "category";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "locked";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "elements";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "rank";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "display";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "default_text";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "properties";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "input_properties";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "output_properties";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "static";
	$tdatamodxdf_site_tmplvars[".allSearchFields"][] = "static_file";
	

$tdatamodxdf_site_tmplvars[".googleLikeFields"] = array();
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "id";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "source";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "type";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "name";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "description";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "category";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "display";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "static";
$tdatamodxdf_site_tmplvars[".googleLikeFields"][] = "static_file";


$tdatamodxdf_site_tmplvars[".advSearchFields"] = array();
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "id";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "source";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "type";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "name";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "description";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "category";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "display";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "static";
$tdatamodxdf_site_tmplvars[".advSearchFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".tableType"] = "list";

$tdatamodxdf_site_tmplvars[".printerPageOrientation"] = 0;
$tdatamodxdf_site_tmplvars[".nPrinterPageScale"] = 100;

$tdatamodxdf_site_tmplvars[".nPrinterSplitRecords"] = 40;

$tdatamodxdf_site_tmplvars[".nPrinterPDFSplitRecords"] = 40;



$tdatamodxdf_site_tmplvars[".geocodingEnabled"] = false;





$tdatamodxdf_site_tmplvars[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodxdf_site_tmplvars[".pageSize"] = 20;

$tdatamodxdf_site_tmplvars[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodxdf_site_tmplvars[".strOrderBy"] = $tstrOrderBy;

$tdatamodxdf_site_tmplvars[".orderindexes"] = array();

$tdatamodxdf_site_tmplvars[".sqlHead"] = "SELECT id,  	source,  	property_preprocess,  	`type`,  	name,  	caption,  	description,  	editor_type,  	category,  	locked,  	elements,  	rank,  	display,  	default_text,  	properties,  	input_properties,  	output_properties,  	`static`,  	static_file";
$tdatamodxdf_site_tmplvars[".sqlFrom"] = "FROM modxdf_site_tmplvars";
$tdatamodxdf_site_tmplvars[".sqlWhereExpr"] = "";
$tdatamodxdf_site_tmplvars[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodxdf_site_tmplvars[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodxdf_site_tmplvars[".arrGroupsPerPage"] = $arrGPP;

$tdatamodxdf_site_tmplvars[".highlightSearchResults"] = true;

$tableKeysmodxdf_site_tmplvars = array();
$tableKeysmodxdf_site_tmplvars[] = "id";
$tdatamodxdf_site_tmplvars[".Keys"] = $tableKeysmodxdf_site_tmplvars;

$tdatamodxdf_site_tmplvars[".listFields"] = array();
$tdatamodxdf_site_tmplvars[".listFields"][] = "id";
$tdatamodxdf_site_tmplvars[".listFields"][] = "source";
$tdatamodxdf_site_tmplvars[".listFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".listFields"][] = "type";
$tdatamodxdf_site_tmplvars[".listFields"][] = "name";
$tdatamodxdf_site_tmplvars[".listFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".listFields"][] = "description";
$tdatamodxdf_site_tmplvars[".listFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".listFields"][] = "category";
$tdatamodxdf_site_tmplvars[".listFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".listFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".listFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".listFields"][] = "display";
$tdatamodxdf_site_tmplvars[".listFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".listFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".listFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".listFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".listFields"][] = "static";
$tdatamodxdf_site_tmplvars[".listFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".hideMobileList"] = array();


$tdatamodxdf_site_tmplvars[".viewFields"] = array();
$tdatamodxdf_site_tmplvars[".viewFields"][] = "id";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "source";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "type";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "name";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "description";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "category";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "display";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "static";
$tdatamodxdf_site_tmplvars[".viewFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".addFields"] = array();
$tdatamodxdf_site_tmplvars[".addFields"][] = "source";
$tdatamodxdf_site_tmplvars[".addFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".addFields"][] = "type";
$tdatamodxdf_site_tmplvars[".addFields"][] = "name";
$tdatamodxdf_site_tmplvars[".addFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".addFields"][] = "description";
$tdatamodxdf_site_tmplvars[".addFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".addFields"][] = "category";
$tdatamodxdf_site_tmplvars[".addFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".addFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".addFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".addFields"][] = "display";
$tdatamodxdf_site_tmplvars[".addFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".addFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".addFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".addFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".addFields"][] = "static";
$tdatamodxdf_site_tmplvars[".addFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".masterListFields"] = array();
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "id";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "source";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "type";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "name";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "description";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "category";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "display";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "static";
$tdatamodxdf_site_tmplvars[".masterListFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".inlineAddFields"] = array();
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "source";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "type";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "name";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "description";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "category";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "display";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "static";
$tdatamodxdf_site_tmplvars[".inlineAddFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".editFields"] = array();
$tdatamodxdf_site_tmplvars[".editFields"][] = "source";
$tdatamodxdf_site_tmplvars[".editFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".editFields"][] = "type";
$tdatamodxdf_site_tmplvars[".editFields"][] = "name";
$tdatamodxdf_site_tmplvars[".editFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".editFields"][] = "description";
$tdatamodxdf_site_tmplvars[".editFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".editFields"][] = "category";
$tdatamodxdf_site_tmplvars[".editFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".editFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".editFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".editFields"][] = "display";
$tdatamodxdf_site_tmplvars[".editFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".editFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".editFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".editFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".editFields"][] = "static";
$tdatamodxdf_site_tmplvars[".editFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".inlineEditFields"] = array();
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "source";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "type";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "name";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "description";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "category";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "display";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "static";
$tdatamodxdf_site_tmplvars[".inlineEditFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".updateSelectedFields"] = array();
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "source";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "type";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "name";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "description";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "category";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "display";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "static";
$tdatamodxdf_site_tmplvars[".updateSelectedFields"][] = "static_file";


$tdatamodxdf_site_tmplvars[".exportFields"] = array();
$tdatamodxdf_site_tmplvars[".exportFields"][] = "id";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "source";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "type";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "name";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "description";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "category";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "display";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "static";
$tdatamodxdf_site_tmplvars[".exportFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".importFields"] = array();
$tdatamodxdf_site_tmplvars[".importFields"][] = "id";
$tdatamodxdf_site_tmplvars[".importFields"][] = "source";
$tdatamodxdf_site_tmplvars[".importFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".importFields"][] = "type";
$tdatamodxdf_site_tmplvars[".importFields"][] = "name";
$tdatamodxdf_site_tmplvars[".importFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".importFields"][] = "description";
$tdatamodxdf_site_tmplvars[".importFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".importFields"][] = "category";
$tdatamodxdf_site_tmplvars[".importFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".importFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".importFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".importFields"][] = "display";
$tdatamodxdf_site_tmplvars[".importFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".importFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".importFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".importFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".importFields"][] = "static";
$tdatamodxdf_site_tmplvars[".importFields"][] = "static_file";

$tdatamodxdf_site_tmplvars[".printFields"] = array();
$tdatamodxdf_site_tmplvars[".printFields"][] = "id";
$tdatamodxdf_site_tmplvars[".printFields"][] = "source";
$tdatamodxdf_site_tmplvars[".printFields"][] = "property_preprocess";
$tdatamodxdf_site_tmplvars[".printFields"][] = "type";
$tdatamodxdf_site_tmplvars[".printFields"][] = "name";
$tdatamodxdf_site_tmplvars[".printFields"][] = "caption";
$tdatamodxdf_site_tmplvars[".printFields"][] = "description";
$tdatamodxdf_site_tmplvars[".printFields"][] = "editor_type";
$tdatamodxdf_site_tmplvars[".printFields"][] = "category";
$tdatamodxdf_site_tmplvars[".printFields"][] = "locked";
$tdatamodxdf_site_tmplvars[".printFields"][] = "elements";
$tdatamodxdf_site_tmplvars[".printFields"][] = "rank";
$tdatamodxdf_site_tmplvars[".printFields"][] = "display";
$tdatamodxdf_site_tmplvars[".printFields"][] = "default_text";
$tdatamodxdf_site_tmplvars[".printFields"][] = "properties";
$tdatamodxdf_site_tmplvars[".printFields"][] = "input_properties";
$tdatamodxdf_site_tmplvars[".printFields"][] = "output_properties";
$tdatamodxdf_site_tmplvars[".printFields"][] = "static";
$tdatamodxdf_site_tmplvars[".printFields"][] = "static_file";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","id");
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




	$tdatamodxdf_site_tmplvars["id"] = $fdata;
//	source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "source";
	$fdata["GoodName"] = "source";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","source");
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




	$tdatamodxdf_site_tmplvars["source"] = $fdata;
//	property_preprocess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "property_preprocess";
	$fdata["GoodName"] = "property_preprocess";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","property_preprocess");
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




	$tdatamodxdf_site_tmplvars["property_preprocess"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","type");
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

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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




	$tdatamodxdf_site_tmplvars["type"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","name");
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




	$tdatamodxdf_site_tmplvars["name"] = $fdata;
//	caption
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "caption";
	$fdata["GoodName"] = "caption";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","caption");
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

		$fdata["strField"] = "caption";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caption";

	
	
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




	$tdatamodxdf_site_tmplvars["caption"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","description");
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




	$tdatamodxdf_site_tmplvars["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","editor_type");
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




	$tdatamodxdf_site_tmplvars["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","category");
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




	$tdatamodxdf_site_tmplvars["category"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","locked");
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




	$tdatamodxdf_site_tmplvars["locked"] = $fdata;
//	elements
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "elements";
	$fdata["GoodName"] = "elements";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","elements");
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

		$fdata["strField"] = "elements";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "elements";

	
	
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




	$tdatamodxdf_site_tmplvars["elements"] = $fdata;
//	rank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rank";
	$fdata["GoodName"] = "rank";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","rank");
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

		$fdata["strField"] = "rank";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rank";

	
	
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




	$tdatamodxdf_site_tmplvars["rank"] = $fdata;
//	display
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "display";
	$fdata["GoodName"] = "display";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","display");
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

		$fdata["strField"] = "display";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "display";

	
	
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




	$tdatamodxdf_site_tmplvars["display"] = $fdata;
//	default_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "default_text";
	$fdata["GoodName"] = "default_text";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","default_text");
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

		$fdata["strField"] = "default_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "default_text";

	
	
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




	$tdatamodxdf_site_tmplvars["default_text"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","properties");
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




	$tdatamodxdf_site_tmplvars["properties"] = $fdata;
//	input_properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "input_properties";
	$fdata["GoodName"] = "input_properties";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","input_properties");
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

		$fdata["strField"] = "input_properties";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "input_properties";

	
	
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




	$tdatamodxdf_site_tmplvars["input_properties"] = $fdata;
//	output_properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "output_properties";
	$fdata["GoodName"] = "output_properties";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","output_properties");
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

		$fdata["strField"] = "output_properties";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "output_properties";

	
	
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




	$tdatamodxdf_site_tmplvars["output_properties"] = $fdata;
//	static
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "static";
	$fdata["GoodName"] = "static";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","static");
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




	$tdatamodxdf_site_tmplvars["static"] = $fdata;
//	static_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "static_file";
	$fdata["GoodName"] = "static_file";
	$fdata["ownerTable"] = "modxdf_site_tmplvars";
	$fdata["Label"] = GetFieldLabel("modxdf_site_tmplvars","static_file");
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




	$tdatamodxdf_site_tmplvars["static_file"] = $fdata;


$tables_data["modxdf_site_tmplvars"]=&$tdatamodxdf_site_tmplvars;
$field_labels["modxdf_site_tmplvars"] = &$fieldLabelsmodxdf_site_tmplvars;
$fieldToolTips["modxdf_site_tmplvars"] = &$fieldToolTipsmodxdf_site_tmplvars;
$placeHolders["modxdf_site_tmplvars"] = &$placeHoldersmodxdf_site_tmplvars;
$page_titles["modxdf_site_tmplvars"] = &$pageTitlesmodxdf_site_tmplvars;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modxdf_site_tmplvars"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modxdf_site_tmplvars"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modxdf_site_tmplvars()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	source,  	property_preprocess,  	`type`,  	name,  	caption,  	description,  	editor_type,  	category,  	locked,  	elements,  	rank,  	display,  	default_text,  	properties,  	input_properties,  	output_properties,  	`static`,  	static_file";
$proto0["m_strFrom"] = "FROM modxdf_site_tmplvars";
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
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modxdf_site_tmplvars";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "source",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto8["m_sql"] = "source";
$proto8["m_srcTableName"] = "modxdf_site_tmplvars";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "property_preprocess",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto10["m_sql"] = "property_preprocess";
$proto10["m_srcTableName"] = "modxdf_site_tmplvars";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "modxdf_site_tmplvars";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto14["m_sql"] = "name";
$proto14["m_srcTableName"] = "modxdf_site_tmplvars";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "caption",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto16["m_sql"] = "caption";
$proto16["m_srcTableName"] = "modxdf_site_tmplvars";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "modxdf_site_tmplvars";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto20["m_sql"] = "editor_type";
$proto20["m_srcTableName"] = "modxdf_site_tmplvars";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto22["m_sql"] = "category";
$proto22["m_srcTableName"] = "modxdf_site_tmplvars";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto24["m_sql"] = "locked";
$proto24["m_srcTableName"] = "modxdf_site_tmplvars";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "elements",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto26["m_sql"] = "elements";
$proto26["m_srcTableName"] = "modxdf_site_tmplvars";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "rank",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto28["m_sql"] = "rank";
$proto28["m_srcTableName"] = "modxdf_site_tmplvars";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "display",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto30["m_sql"] = "display";
$proto30["m_srcTableName"] = "modxdf_site_tmplvars";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "default_text",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto32["m_sql"] = "default_text";
$proto32["m_srcTableName"] = "modxdf_site_tmplvars";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto34["m_sql"] = "properties";
$proto34["m_srcTableName"] = "modxdf_site_tmplvars";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "input_properties",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto36["m_sql"] = "input_properties";
$proto36["m_srcTableName"] = "modxdf_site_tmplvars";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "output_properties",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto38["m_sql"] = "output_properties";
$proto38["m_srcTableName"] = "modxdf_site_tmplvars";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "static",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto40["m_sql"] = "`static`";
$proto40["m_srcTableName"] = "modxdf_site_tmplvars";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "static_file",
	"m_strTable" => "modxdf_site_tmplvars",
	"m_srcTableName" => "modxdf_site_tmplvars"
));

$proto42["m_sql"] = "static_file";
$proto42["m_srcTableName"] = "modxdf_site_tmplvars";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "modxdf_site_tmplvars";
$proto45["m_srcTableName"] = "modxdf_site_tmplvars";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "source";
$proto45["m_columns"][] = "property_preprocess";
$proto45["m_columns"][] = "type";
$proto45["m_columns"][] = "name";
$proto45["m_columns"][] = "caption";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "editor_type";
$proto45["m_columns"][] = "category";
$proto45["m_columns"][] = "locked";
$proto45["m_columns"][] = "elements";
$proto45["m_columns"][] = "rank";
$proto45["m_columns"][] = "display";
$proto45["m_columns"][] = "default_text";
$proto45["m_columns"][] = "properties";
$proto45["m_columns"][] = "input_properties";
$proto45["m_columns"][] = "output_properties";
$proto45["m_columns"][] = "static";
$proto45["m_columns"][] = "static_file";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "modxdf_site_tmplvars";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "modxdf_site_tmplvars";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modxdf_site_tmplvars";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modxdf_site_tmplvars = createSqlQuery_modxdf_site_tmplvars();


	
						;

																			

$tdatamodxdf_site_tmplvars[".sqlquery"] = $queryData_modxdf_site_tmplvars;

$tableEvents["modxdf_site_tmplvars"] = new eventsBase;
$tdatamodxdf_site_tmplvars[".hasEvents"] = false;

?>
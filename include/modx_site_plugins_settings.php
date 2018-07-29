<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_plugins = array();
	$tdatamodx_site_plugins[".truncateText"] = true;
	$tdatamodx_site_plugins[".NumberOfChars"] = 20;
	$tdatamodx_site_plugins[".ShortName"] = "modx_site_plugins";
	$tdatamodx_site_plugins[".OwnerID"] = "";
	$tdatamodx_site_plugins[".OriginalTable"] = "modx_site_plugins";

//	field labels
$fieldLabelsmodx_site_plugins = array();
$fieldToolTipsmodx_site_plugins = array();
$pageTitlesmodx_site_plugins = array();
$placeHoldersmodx_site_plugins = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_plugins["Japanese"] = array();
	$fieldToolTipsmodx_site_plugins["Japanese"] = array();
	$placeHoldersmodx_site_plugins["Japanese"] = array();
	$pageTitlesmodx_site_plugins["Japanese"] = array();
	$fieldLabelsmodx_site_plugins["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_plugins["Japanese"]["id"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["name"] = "Name";
	$fieldToolTipsmodx_site_plugins["Japanese"]["name"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["name"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_plugins["Japanese"]["description"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_plugins["Japanese"]["editor_type"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["editor_type"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["category"] = "Category";
	$fieldToolTipsmodx_site_plugins["Japanese"]["category"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["category"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodx_site_plugins["Japanese"]["cache_type"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["cache_type"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["plugincode"] = "Plugincode";
	$fieldToolTipsmodx_site_plugins["Japanese"]["plugincode"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["plugincode"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_plugins["Japanese"]["locked"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["locked"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["properties"] = "Properties";
	$fieldToolTipsmodx_site_plugins["Japanese"]["properties"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["properties"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["disabled"] = "Disabled";
	$fieldToolTipsmodx_site_plugins["Japanese"]["disabled"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["disabled"] = "";
	$fieldLabelsmodx_site_plugins["Japanese"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodx_site_plugins["Japanese"]["moduleguid"] = "";
	$placeHoldersmodx_site_plugins["Japanese"]["moduleguid"] = "";
	if (count($fieldToolTipsmodx_site_plugins["Japanese"]))
		$tdatamodx_site_plugins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_plugins["English"] = array();
	$fieldToolTipsmodx_site_plugins["English"] = array();
	$placeHoldersmodx_site_plugins["English"] = array();
	$pageTitlesmodx_site_plugins["English"] = array();
	$fieldLabelsmodx_site_plugins["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_plugins["English"]["id"] = "";
	$placeHoldersmodx_site_plugins["English"]["id"] = "";
	$fieldLabelsmodx_site_plugins["English"]["name"] = "Name";
	$fieldToolTipsmodx_site_plugins["English"]["name"] = "";
	$placeHoldersmodx_site_plugins["English"]["name"] = "";
	$fieldLabelsmodx_site_plugins["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_plugins["English"]["description"] = "";
	$placeHoldersmodx_site_plugins["English"]["description"] = "";
	$fieldLabelsmodx_site_plugins["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_plugins["English"]["editor_type"] = "";
	$placeHoldersmodx_site_plugins["English"]["editor_type"] = "";
	$fieldLabelsmodx_site_plugins["English"]["category"] = "Category";
	$fieldToolTipsmodx_site_plugins["English"]["category"] = "";
	$placeHoldersmodx_site_plugins["English"]["category"] = "";
	$fieldLabelsmodx_site_plugins["English"]["cache_type"] = "Cache Type";
	$fieldToolTipsmodx_site_plugins["English"]["cache_type"] = "";
	$placeHoldersmodx_site_plugins["English"]["cache_type"] = "";
	$fieldLabelsmodx_site_plugins["English"]["plugincode"] = "Plugincode";
	$fieldToolTipsmodx_site_plugins["English"]["plugincode"] = "";
	$placeHoldersmodx_site_plugins["English"]["plugincode"] = "";
	$fieldLabelsmodx_site_plugins["English"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_plugins["English"]["locked"] = "";
	$placeHoldersmodx_site_plugins["English"]["locked"] = "";
	$fieldLabelsmodx_site_plugins["English"]["properties"] = "Properties";
	$fieldToolTipsmodx_site_plugins["English"]["properties"] = "";
	$placeHoldersmodx_site_plugins["English"]["properties"] = "";
	$fieldLabelsmodx_site_plugins["English"]["disabled"] = "Disabled";
	$fieldToolTipsmodx_site_plugins["English"]["disabled"] = "";
	$placeHoldersmodx_site_plugins["English"]["disabled"] = "";
	$fieldLabelsmodx_site_plugins["English"]["moduleguid"] = "Moduleguid";
	$fieldToolTipsmodx_site_plugins["English"]["moduleguid"] = "";
	$placeHoldersmodx_site_plugins["English"]["moduleguid"] = "";
	if (count($fieldToolTipsmodx_site_plugins["English"]))
		$tdatamodx_site_plugins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_plugins[""] = array();
	$fieldToolTipsmodx_site_plugins[""] = array();
	$placeHoldersmodx_site_plugins[""] = array();
	$pageTitlesmodx_site_plugins[""] = array();
	if (count($fieldToolTipsmodx_site_plugins[""]))
		$tdatamodx_site_plugins[".isUseToolTips"] = true;
}


	$tdatamodx_site_plugins[".NCSearch"] = true;



$tdatamodx_site_plugins[".shortTableName"] = "modx_site_plugins";
$tdatamodx_site_plugins[".nSecOptions"] = 0;
$tdatamodx_site_plugins[".recsPerRowPrint"] = 1;
$tdatamodx_site_plugins[".mainTableOwnerID"] = "";
$tdatamodx_site_plugins[".moveNext"] = 0;
$tdatamodx_site_plugins[".entityType"] = 0;

$tdatamodx_site_plugins[".strOriginalTableName"] = "modx_site_plugins";

	



$tdatamodx_site_plugins[".showAddInPopup"] = false;

$tdatamodx_site_plugins[".showEditInPopup"] = false;

$tdatamodx_site_plugins[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodx_site_plugins[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_plugins[".fieldsForRegister"] = array();
	
$tdatamodx_site_plugins[".listAjax"] = false;

	$tdatamodx_site_plugins[".audit"] = true;

	$tdatamodx_site_plugins[".locking"] = false;

$tdatamodx_site_plugins[".edit"] = true;
$tdatamodx_site_plugins[".afterEditAction"] = 1;
$tdatamodx_site_plugins[".closePopupAfterEdit"] = 1;
$tdatamodx_site_plugins[".afterEditActionDetTable"] = "";

$tdatamodx_site_plugins[".add"] = true;
$tdatamodx_site_plugins[".afterAddAction"] = 1;
$tdatamodx_site_plugins[".closePopupAfterAdd"] = 1;
$tdatamodx_site_plugins[".afterAddActionDetTable"] = "";

$tdatamodx_site_plugins[".list"] = true;



$tdatamodx_site_plugins[".reorderRecordsByHeader"] = true;



$tdatamodx_site_plugins[".view"] = true;

$tdatamodx_site_plugins[".import"] = true;

$tdatamodx_site_plugins[".exportTo"] = true;

$tdatamodx_site_plugins[".printFriendly"] = true;

$tdatamodx_site_plugins[".delete"] = true;

$tdatamodx_site_plugins[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_plugins[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_plugins[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodx_site_plugins[".searchSaving"] = false;
//

$tdatamodx_site_plugins[".showSearchPanel"] = true;
		$tdatamodx_site_plugins[".flexibleSearch"] = true;

$tdatamodx_site_plugins[".isUseAjaxSuggest"] = true;

$tdatamodx_site_plugins[".rowHighlite"] = true;



				

$tdatamodx_site_plugins[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_plugins[".buttonsAdded"] = false;

$tdatamodx_site_plugins[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_plugins[".isUseTimeForSearch"] = false;





$tdatamodx_site_plugins[".allSearchFields"] = array();
$tdatamodx_site_plugins[".filterFields"] = array();
$tdatamodx_site_plugins[".requiredSearchFields"] = array();

$tdatamodx_site_plugins[".allSearchFields"][] = "id";
	$tdatamodx_site_plugins[".allSearchFields"][] = "name";
	$tdatamodx_site_plugins[".allSearchFields"][] = "description";
	$tdatamodx_site_plugins[".allSearchFields"][] = "editor_type";
	$tdatamodx_site_plugins[".allSearchFields"][] = "category";
	$tdatamodx_site_plugins[".allSearchFields"][] = "cache_type";
	$tdatamodx_site_plugins[".allSearchFields"][] = "plugincode";
	$tdatamodx_site_plugins[".allSearchFields"][] = "locked";
	$tdatamodx_site_plugins[".allSearchFields"][] = "properties";
	$tdatamodx_site_plugins[".allSearchFields"][] = "disabled";
	$tdatamodx_site_plugins[".allSearchFields"][] = "moduleguid";
	

$tdatamodx_site_plugins[".googleLikeFields"] = array();
$tdatamodx_site_plugins[".googleLikeFields"][] = "id";
$tdatamodx_site_plugins[".googleLikeFields"][] = "name";
$tdatamodx_site_plugins[".googleLikeFields"][] = "description";
$tdatamodx_site_plugins[".googleLikeFields"][] = "editor_type";
$tdatamodx_site_plugins[".googleLikeFields"][] = "category";
$tdatamodx_site_plugins[".googleLikeFields"][] = "cache_type";
$tdatamodx_site_plugins[".googleLikeFields"][] = "plugincode";
$tdatamodx_site_plugins[".googleLikeFields"][] = "locked";
$tdatamodx_site_plugins[".googleLikeFields"][] = "properties";
$tdatamodx_site_plugins[".googleLikeFields"][] = "disabled";
$tdatamodx_site_plugins[".googleLikeFields"][] = "moduleguid";


$tdatamodx_site_plugins[".advSearchFields"] = array();
$tdatamodx_site_plugins[".advSearchFields"][] = "id";
$tdatamodx_site_plugins[".advSearchFields"][] = "name";
$tdatamodx_site_plugins[".advSearchFields"][] = "description";
$tdatamodx_site_plugins[".advSearchFields"][] = "editor_type";
$tdatamodx_site_plugins[".advSearchFields"][] = "category";
$tdatamodx_site_plugins[".advSearchFields"][] = "cache_type";
$tdatamodx_site_plugins[".advSearchFields"][] = "plugincode";
$tdatamodx_site_plugins[".advSearchFields"][] = "locked";
$tdatamodx_site_plugins[".advSearchFields"][] = "properties";
$tdatamodx_site_plugins[".advSearchFields"][] = "disabled";
$tdatamodx_site_plugins[".advSearchFields"][] = "moduleguid";

$tdatamodx_site_plugins[".tableType"] = "list";

$tdatamodx_site_plugins[".printerPageOrientation"] = 0;
$tdatamodx_site_plugins[".nPrinterPageScale"] = 100;

$tdatamodx_site_plugins[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_plugins[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_plugins[".geocodingEnabled"] = false;





$tdatamodx_site_plugins[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_site_plugins[".pageSize"] = 20;

$tdatamodx_site_plugins[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_plugins[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_plugins[".orderindexes"] = array();

$tdatamodx_site_plugins[".sqlHead"] = "SELECT id,  	name,  	description,  	editor_type,  	category,  	cache_type,  	plugincode,  	locked,  	properties,  	disabled,  	moduleguid";
$tdatamodx_site_plugins[".sqlFrom"] = "FROM modx_site_plugins";
$tdatamodx_site_plugins[".sqlWhereExpr"] = "";
$tdatamodx_site_plugins[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_plugins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_plugins[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_plugins[".highlightSearchResults"] = true;

$tableKeysmodx_site_plugins = array();
$tableKeysmodx_site_plugins[] = "id";
$tdatamodx_site_plugins[".Keys"] = $tableKeysmodx_site_plugins;

$tdatamodx_site_plugins[".listFields"] = array();
$tdatamodx_site_plugins[".listFields"][] = "id";
$tdatamodx_site_plugins[".listFields"][] = "name";
$tdatamodx_site_plugins[".listFields"][] = "description";
$tdatamodx_site_plugins[".listFields"][] = "editor_type";
$tdatamodx_site_plugins[".listFields"][] = "category";
$tdatamodx_site_plugins[".listFields"][] = "cache_type";
$tdatamodx_site_plugins[".listFields"][] = "plugincode";
$tdatamodx_site_plugins[".listFields"][] = "locked";
$tdatamodx_site_plugins[".listFields"][] = "properties";
$tdatamodx_site_plugins[".listFields"][] = "disabled";
$tdatamodx_site_plugins[".listFields"][] = "moduleguid";

$tdatamodx_site_plugins[".hideMobileList"] = array();


$tdatamodx_site_plugins[".viewFields"] = array();
$tdatamodx_site_plugins[".viewFields"][] = "id";
$tdatamodx_site_plugins[".viewFields"][] = "name";
$tdatamodx_site_plugins[".viewFields"][] = "description";
$tdatamodx_site_plugins[".viewFields"][] = "editor_type";
$tdatamodx_site_plugins[".viewFields"][] = "category";
$tdatamodx_site_plugins[".viewFields"][] = "cache_type";
$tdatamodx_site_plugins[".viewFields"][] = "plugincode";
$tdatamodx_site_plugins[".viewFields"][] = "locked";
$tdatamodx_site_plugins[".viewFields"][] = "properties";
$tdatamodx_site_plugins[".viewFields"][] = "disabled";
$tdatamodx_site_plugins[".viewFields"][] = "moduleguid";

$tdatamodx_site_plugins[".addFields"] = array();
$tdatamodx_site_plugins[".addFields"][] = "name";
$tdatamodx_site_plugins[".addFields"][] = "description";
$tdatamodx_site_plugins[".addFields"][] = "editor_type";
$tdatamodx_site_plugins[".addFields"][] = "category";
$tdatamodx_site_plugins[".addFields"][] = "cache_type";
$tdatamodx_site_plugins[".addFields"][] = "plugincode";
$tdatamodx_site_plugins[".addFields"][] = "locked";
$tdatamodx_site_plugins[".addFields"][] = "properties";
$tdatamodx_site_plugins[".addFields"][] = "disabled";
$tdatamodx_site_plugins[".addFields"][] = "moduleguid";

$tdatamodx_site_plugins[".masterListFields"] = array();
$tdatamodx_site_plugins[".masterListFields"][] = "id";
$tdatamodx_site_plugins[".masterListFields"][] = "name";
$tdatamodx_site_plugins[".masterListFields"][] = "description";
$tdatamodx_site_plugins[".masterListFields"][] = "editor_type";
$tdatamodx_site_plugins[".masterListFields"][] = "category";
$tdatamodx_site_plugins[".masterListFields"][] = "cache_type";
$tdatamodx_site_plugins[".masterListFields"][] = "plugincode";
$tdatamodx_site_plugins[".masterListFields"][] = "locked";
$tdatamodx_site_plugins[".masterListFields"][] = "properties";
$tdatamodx_site_plugins[".masterListFields"][] = "disabled";
$tdatamodx_site_plugins[".masterListFields"][] = "moduleguid";

$tdatamodx_site_plugins[".inlineAddFields"] = array();
$tdatamodx_site_plugins[".inlineAddFields"][] = "name";
$tdatamodx_site_plugins[".inlineAddFields"][] = "description";
$tdatamodx_site_plugins[".inlineAddFields"][] = "editor_type";
$tdatamodx_site_plugins[".inlineAddFields"][] = "category";
$tdatamodx_site_plugins[".inlineAddFields"][] = "cache_type";
$tdatamodx_site_plugins[".inlineAddFields"][] = "plugincode";
$tdatamodx_site_plugins[".inlineAddFields"][] = "locked";
$tdatamodx_site_plugins[".inlineAddFields"][] = "properties";
$tdatamodx_site_plugins[".inlineAddFields"][] = "disabled";
$tdatamodx_site_plugins[".inlineAddFields"][] = "moduleguid";

$tdatamodx_site_plugins[".editFields"] = array();
$tdatamodx_site_plugins[".editFields"][] = "name";
$tdatamodx_site_plugins[".editFields"][] = "description";
$tdatamodx_site_plugins[".editFields"][] = "editor_type";
$tdatamodx_site_plugins[".editFields"][] = "category";
$tdatamodx_site_plugins[".editFields"][] = "cache_type";
$tdatamodx_site_plugins[".editFields"][] = "plugincode";
$tdatamodx_site_plugins[".editFields"][] = "locked";
$tdatamodx_site_plugins[".editFields"][] = "properties";
$tdatamodx_site_plugins[".editFields"][] = "disabled";
$tdatamodx_site_plugins[".editFields"][] = "moduleguid";

$tdatamodx_site_plugins[".inlineEditFields"] = array();
$tdatamodx_site_plugins[".inlineEditFields"][] = "name";
$tdatamodx_site_plugins[".inlineEditFields"][] = "description";
$tdatamodx_site_plugins[".inlineEditFields"][] = "editor_type";
$tdatamodx_site_plugins[".inlineEditFields"][] = "category";
$tdatamodx_site_plugins[".inlineEditFields"][] = "cache_type";
$tdatamodx_site_plugins[".inlineEditFields"][] = "plugincode";
$tdatamodx_site_plugins[".inlineEditFields"][] = "locked";
$tdatamodx_site_plugins[".inlineEditFields"][] = "properties";
$tdatamodx_site_plugins[".inlineEditFields"][] = "disabled";
$tdatamodx_site_plugins[".inlineEditFields"][] = "moduleguid";

$tdatamodx_site_plugins[".updateSelectedFields"] = array();
$tdatamodx_site_plugins[".updateSelectedFields"][] = "name";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "description";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "editor_type";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "category";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "cache_type";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "plugincode";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "locked";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "properties";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "disabled";
$tdatamodx_site_plugins[".updateSelectedFields"][] = "moduleguid";


$tdatamodx_site_plugins[".exportFields"] = array();
$tdatamodx_site_plugins[".exportFields"][] = "id";
$tdatamodx_site_plugins[".exportFields"][] = "name";
$tdatamodx_site_plugins[".exportFields"][] = "description";
$tdatamodx_site_plugins[".exportFields"][] = "editor_type";
$tdatamodx_site_plugins[".exportFields"][] = "category";
$tdatamodx_site_plugins[".exportFields"][] = "cache_type";
$tdatamodx_site_plugins[".exportFields"][] = "plugincode";
$tdatamodx_site_plugins[".exportFields"][] = "locked";
$tdatamodx_site_plugins[".exportFields"][] = "properties";
$tdatamodx_site_plugins[".exportFields"][] = "disabled";
$tdatamodx_site_plugins[".exportFields"][] = "moduleguid";

$tdatamodx_site_plugins[".importFields"] = array();
$tdatamodx_site_plugins[".importFields"][] = "id";
$tdatamodx_site_plugins[".importFields"][] = "name";
$tdatamodx_site_plugins[".importFields"][] = "description";
$tdatamodx_site_plugins[".importFields"][] = "editor_type";
$tdatamodx_site_plugins[".importFields"][] = "category";
$tdatamodx_site_plugins[".importFields"][] = "cache_type";
$tdatamodx_site_plugins[".importFields"][] = "plugincode";
$tdatamodx_site_plugins[".importFields"][] = "locked";
$tdatamodx_site_plugins[".importFields"][] = "properties";
$tdatamodx_site_plugins[".importFields"][] = "disabled";
$tdatamodx_site_plugins[".importFields"][] = "moduleguid";

$tdatamodx_site_plugins[".printFields"] = array();
$tdatamodx_site_plugins[".printFields"][] = "id";
$tdatamodx_site_plugins[".printFields"][] = "name";
$tdatamodx_site_plugins[".printFields"][] = "description";
$tdatamodx_site_plugins[".printFields"][] = "editor_type";
$tdatamodx_site_plugins[".printFields"][] = "category";
$tdatamodx_site_plugins[".printFields"][] = "cache_type";
$tdatamodx_site_plugins[".printFields"][] = "plugincode";
$tdatamodx_site_plugins[".printFields"][] = "locked";
$tdatamodx_site_plugins[".printFields"][] = "properties";
$tdatamodx_site_plugins[".printFields"][] = "disabled";
$tdatamodx_site_plugins[".printFields"][] = "moduleguid";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","id");
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




	$tdatamodx_site_plugins["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","name");
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




	$tdatamodx_site_plugins["name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","description");
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




	$tdatamodx_site_plugins["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","editor_type");
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




	$tdatamodx_site_plugins["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","category");
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




	$tdatamodx_site_plugins["category"] = $fdata;
//	cache_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cache_type";
	$fdata["GoodName"] = "cache_type";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","cache_type");
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




	$tdatamodx_site_plugins["cache_type"] = $fdata;
//	plugincode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "plugincode";
	$fdata["GoodName"] = "plugincode";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","plugincode");
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




	$tdatamodx_site_plugins["plugincode"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","locked");
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




	$tdatamodx_site_plugins["locked"] = $fdata;
//	properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "properties";
	$fdata["GoodName"] = "properties";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","properties");
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




	$tdatamodx_site_plugins["properties"] = $fdata;
//	disabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "disabled";
	$fdata["GoodName"] = "disabled";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","disabled");
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




	$tdatamodx_site_plugins["disabled"] = $fdata;
//	moduleguid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "moduleguid";
	$fdata["GoodName"] = "moduleguid";
	$fdata["ownerTable"] = "modx_site_plugins";
	$fdata["Label"] = GetFieldLabel("modx_site_plugins","moduleguid");
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




	$tdatamodx_site_plugins["moduleguid"] = $fdata;


$tables_data["modx_site_plugins"]=&$tdatamodx_site_plugins;
$field_labels["modx_site_plugins"] = &$fieldLabelsmodx_site_plugins;
$fieldToolTips["modx_site_plugins"] = &$fieldToolTipsmodx_site_plugins;
$placeHolders["modx_site_plugins"] = &$placeHoldersmodx_site_plugins;
$page_titles["modx_site_plugins"] = &$pageTitlesmodx_site_plugins;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_plugins"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_plugins"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_plugins()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description,  	editor_type,  	category,  	cache_type,  	plugincode,  	locked,  	properties,  	disabled,  	moduleguid";
$proto0["m_strFrom"] = "FROM modx_site_plugins";
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
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modx_site_plugins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "modx_site_plugins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "modx_site_plugins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto12["m_sql"] = "editor_type";
$proto12["m_srcTableName"] = "modx_site_plugins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto14["m_sql"] = "category";
$proto14["m_srcTableName"] = "modx_site_plugins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cache_type",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto16["m_sql"] = "cache_type";
$proto16["m_srcTableName"] = "modx_site_plugins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "plugincode",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto18["m_sql"] = "plugincode";
$proto18["m_srcTableName"] = "modx_site_plugins";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto20["m_sql"] = "locked";
$proto20["m_srcTableName"] = "modx_site_plugins";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "properties",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto22["m_sql"] = "properties";
$proto22["m_srcTableName"] = "modx_site_plugins";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "disabled",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto24["m_sql"] = "disabled";
$proto24["m_srcTableName"] = "modx_site_plugins";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "moduleguid",
	"m_strTable" => "modx_site_plugins",
	"m_srcTableName" => "modx_site_plugins"
));

$proto26["m_sql"] = "moduleguid";
$proto26["m_srcTableName"] = "modx_site_plugins";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "modx_site_plugins";
$proto29["m_srcTableName"] = "modx_site_plugins";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "description";
$proto29["m_columns"][] = "editor_type";
$proto29["m_columns"][] = "category";
$proto29["m_columns"][] = "cache_type";
$proto29["m_columns"][] = "plugincode";
$proto29["m_columns"][] = "locked";
$proto29["m_columns"][] = "properties";
$proto29["m_columns"][] = "disabled";
$proto29["m_columns"][] = "moduleguid";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "modx_site_plugins";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "modx_site_plugins";
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
$proto0["m_srcTableName"]="modx_site_plugins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modx_site_plugins = createSqlQuery_modx_site_plugins();


	
						;

											

$tdatamodx_site_plugins[".sqlquery"] = $queryData_modx_site_plugins;

$tableEvents["modx_site_plugins"] = new eventsBase;
$tdatamodx_site_plugins[".hasEvents"] = false;

?>
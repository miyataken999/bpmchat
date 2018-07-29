<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_site_templates = array();
	$tdatamodx_site_templates[".truncateText"] = true;
	$tdatamodx_site_templates[".NumberOfChars"] = 20;
	$tdatamodx_site_templates[".ShortName"] = "modx_site_templates";
	$tdatamodx_site_templates[".OwnerID"] = "";
	$tdatamodx_site_templates[".OriginalTable"] = "modx_site_templates";

//	field labels
$fieldLabelsmodx_site_templates = array();
$fieldToolTipsmodx_site_templates = array();
$pageTitlesmodx_site_templates = array();
$placeHoldersmodx_site_templates = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_site_templates["Japanese"] = array();
	$fieldToolTipsmodx_site_templates["Japanese"] = array();
	$placeHoldersmodx_site_templates["Japanese"] = array();
	$pageTitlesmodx_site_templates["Japanese"] = array();
	$fieldLabelsmodx_site_templates["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_site_templates["Japanese"]["id"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["id"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["templatename"] = "Templatename";
	$fieldToolTipsmodx_site_templates["Japanese"]["templatename"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["templatename"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["description"] = "Description";
	$fieldToolTipsmodx_site_templates["Japanese"]["description"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["description"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_templates["Japanese"]["editor_type"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["editor_type"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["category"] = "Category";
	$fieldToolTipsmodx_site_templates["Japanese"]["category"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["category"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["icon"] = "Icon";
	$fieldToolTipsmodx_site_templates["Japanese"]["icon"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["icon"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["template_type"] = "Template Type";
	$fieldToolTipsmodx_site_templates["Japanese"]["template_type"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["template_type"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["content"] = "Content";
	$fieldToolTipsmodx_site_templates["Japanese"]["content"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["content"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["parent"] = "Parent";
	$fieldToolTipsmodx_site_templates["Japanese"]["parent"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["parent"] = "";
	$fieldLabelsmodx_site_templates["Japanese"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_templates["Japanese"]["locked"] = "";
	$placeHoldersmodx_site_templates["Japanese"]["locked"] = "";
	if (count($fieldToolTipsmodx_site_templates["Japanese"]))
		$tdatamodx_site_templates[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_site_templates["English"] = array();
	$fieldToolTipsmodx_site_templates["English"] = array();
	$placeHoldersmodx_site_templates["English"] = array();
	$pageTitlesmodx_site_templates["English"] = array();
	$fieldLabelsmodx_site_templates["English"]["id"] = "Id";
	$fieldToolTipsmodx_site_templates["English"]["id"] = "";
	$placeHoldersmodx_site_templates["English"]["id"] = "";
	$fieldLabelsmodx_site_templates["English"]["templatename"] = "Templatename";
	$fieldToolTipsmodx_site_templates["English"]["templatename"] = "";
	$placeHoldersmodx_site_templates["English"]["templatename"] = "";
	$fieldLabelsmodx_site_templates["English"]["description"] = "Description";
	$fieldToolTipsmodx_site_templates["English"]["description"] = "";
	$placeHoldersmodx_site_templates["English"]["description"] = "";
	$fieldLabelsmodx_site_templates["English"]["editor_type"] = "Editor Type";
	$fieldToolTipsmodx_site_templates["English"]["editor_type"] = "";
	$placeHoldersmodx_site_templates["English"]["editor_type"] = "";
	$fieldLabelsmodx_site_templates["English"]["category"] = "Category";
	$fieldToolTipsmodx_site_templates["English"]["category"] = "";
	$placeHoldersmodx_site_templates["English"]["category"] = "";
	$fieldLabelsmodx_site_templates["English"]["icon"] = "Icon";
	$fieldToolTipsmodx_site_templates["English"]["icon"] = "";
	$placeHoldersmodx_site_templates["English"]["icon"] = "";
	$fieldLabelsmodx_site_templates["English"]["template_type"] = "Template Type";
	$fieldToolTipsmodx_site_templates["English"]["template_type"] = "";
	$placeHoldersmodx_site_templates["English"]["template_type"] = "";
	$fieldLabelsmodx_site_templates["English"]["content"] = "Content";
	$fieldToolTipsmodx_site_templates["English"]["content"] = "";
	$placeHoldersmodx_site_templates["English"]["content"] = "";
	$fieldLabelsmodx_site_templates["English"]["parent"] = "Parent";
	$fieldToolTipsmodx_site_templates["English"]["parent"] = "";
	$placeHoldersmodx_site_templates["English"]["parent"] = "";
	$fieldLabelsmodx_site_templates["English"]["locked"] = "Locked";
	$fieldToolTipsmodx_site_templates["English"]["locked"] = "";
	$placeHoldersmodx_site_templates["English"]["locked"] = "";
	if (count($fieldToolTipsmodx_site_templates["English"]))
		$tdatamodx_site_templates[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_site_templates[""] = array();
	$fieldToolTipsmodx_site_templates[""] = array();
	$placeHoldersmodx_site_templates[""] = array();
	$pageTitlesmodx_site_templates[""] = array();
	if (count($fieldToolTipsmodx_site_templates[""]))
		$tdatamodx_site_templates[".isUseToolTips"] = true;
}


	$tdatamodx_site_templates[".NCSearch"] = true;



$tdatamodx_site_templates[".shortTableName"] = "modx_site_templates";
$tdatamodx_site_templates[".nSecOptions"] = 0;
$tdatamodx_site_templates[".recsPerRowPrint"] = 1;
$tdatamodx_site_templates[".mainTableOwnerID"] = "";
$tdatamodx_site_templates[".moveNext"] = 0;
$tdatamodx_site_templates[".entityType"] = 0;

$tdatamodx_site_templates[".strOriginalTableName"] = "modx_site_templates";

	



$tdatamodx_site_templates[".showAddInPopup"] = false;

$tdatamodx_site_templates[".showEditInPopup"] = false;

$tdatamodx_site_templates[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodx_site_templates[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_site_templates[".fieldsForRegister"] = array();
	
$tdatamodx_site_templates[".listAjax"] = false;

	$tdatamodx_site_templates[".audit"] = true;

	$tdatamodx_site_templates[".locking"] = false;

$tdatamodx_site_templates[".edit"] = true;
$tdatamodx_site_templates[".afterEditAction"] = 1;
$tdatamodx_site_templates[".closePopupAfterEdit"] = 1;
$tdatamodx_site_templates[".afterEditActionDetTable"] = "";

$tdatamodx_site_templates[".add"] = true;
$tdatamodx_site_templates[".afterAddAction"] = 1;
$tdatamodx_site_templates[".closePopupAfterAdd"] = 1;
$tdatamodx_site_templates[".afterAddActionDetTable"] = "";

$tdatamodx_site_templates[".list"] = true;

$tdatamodx_site_templates[".inlineEdit"] = true;

$tdatamodx_site_templates[".updateSelected"] = true;

$tdatamodx_site_templates[".reorderRecordsByHeader"] = true;



$tdatamodx_site_templates[".inlineAdd"] = true;
$tdatamodx_site_templates[".copy"] = true;
$tdatamodx_site_templates[".view"] = true;

$tdatamodx_site_templates[".import"] = true;

$tdatamodx_site_templates[".exportTo"] = true;

$tdatamodx_site_templates[".printFriendly"] = true;

$tdatamodx_site_templates[".delete"] = true;

$tdatamodx_site_templates[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodx_site_templates[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodx_site_templates[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodx_site_templates[".searchSaving"] = false;
//

$tdatamodx_site_templates[".showSearchPanel"] = true;
		$tdatamodx_site_templates[".flexibleSearch"] = true;

$tdatamodx_site_templates[".isUseAjaxSuggest"] = true;

$tdatamodx_site_templates[".rowHighlite"] = true;



																

$tdatamodx_site_templates[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_site_templates[".buttonsAdded"] = false;

$tdatamodx_site_templates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_site_templates[".isUseTimeForSearch"] = false;



$tdatamodx_site_templates[".badgeColor"] = "d2691e";


$tdatamodx_site_templates[".allSearchFields"] = array();
$tdatamodx_site_templates[".filterFields"] = array();
$tdatamodx_site_templates[".requiredSearchFields"] = array();

$tdatamodx_site_templates[".allSearchFields"][] = "id";
	$tdatamodx_site_templates[".allSearchFields"][] = "templatename";
	$tdatamodx_site_templates[".allSearchFields"][] = "description";
	$tdatamodx_site_templates[".allSearchFields"][] = "editor_type";
	$tdatamodx_site_templates[".allSearchFields"][] = "category";
	$tdatamodx_site_templates[".allSearchFields"][] = "icon";
	$tdatamodx_site_templates[".allSearchFields"][] = "template_type";
	$tdatamodx_site_templates[".allSearchFields"][] = "content";
	$tdatamodx_site_templates[".allSearchFields"][] = "parent";
	$tdatamodx_site_templates[".allSearchFields"][] = "locked";
	

$tdatamodx_site_templates[".googleLikeFields"] = array();
$tdatamodx_site_templates[".googleLikeFields"][] = "id";
$tdatamodx_site_templates[".googleLikeFields"][] = "templatename";
$tdatamodx_site_templates[".googleLikeFields"][] = "description";
$tdatamodx_site_templates[".googleLikeFields"][] = "editor_type";
$tdatamodx_site_templates[".googleLikeFields"][] = "category";
$tdatamodx_site_templates[".googleLikeFields"][] = "icon";
$tdatamodx_site_templates[".googleLikeFields"][] = "template_type";
$tdatamodx_site_templates[".googleLikeFields"][] = "content";
$tdatamodx_site_templates[".googleLikeFields"][] = "parent";
$tdatamodx_site_templates[".googleLikeFields"][] = "locked";


$tdatamodx_site_templates[".advSearchFields"] = array();
$tdatamodx_site_templates[".advSearchFields"][] = "id";
$tdatamodx_site_templates[".advSearchFields"][] = "templatename";
$tdatamodx_site_templates[".advSearchFields"][] = "description";
$tdatamodx_site_templates[".advSearchFields"][] = "editor_type";
$tdatamodx_site_templates[".advSearchFields"][] = "category";
$tdatamodx_site_templates[".advSearchFields"][] = "icon";
$tdatamodx_site_templates[".advSearchFields"][] = "template_type";
$tdatamodx_site_templates[".advSearchFields"][] = "content";
$tdatamodx_site_templates[".advSearchFields"][] = "parent";
$tdatamodx_site_templates[".advSearchFields"][] = "locked";

$tdatamodx_site_templates[".tableType"] = "list";

$tdatamodx_site_templates[".printerPageOrientation"] = 0;
$tdatamodx_site_templates[".nPrinterPageScale"] = 100;

$tdatamodx_site_templates[".nPrinterSplitRecords"] = 40;

$tdatamodx_site_templates[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_site_templates[".geocodingEnabled"] = false;





$tdatamodx_site_templates[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_site_templates[".pageSize"] = 20;

$tdatamodx_site_templates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_site_templates[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_site_templates[".orderindexes"] = array();

$tdatamodx_site_templates[".sqlHead"] = "SELECT id,  	templatename,  	description,  	editor_type,  	category,  	icon,  	template_type,  	content,  	parent,  	locked";
$tdatamodx_site_templates[".sqlFrom"] = "FROM modx_site_templates";
$tdatamodx_site_templates[".sqlWhereExpr"] = "";
$tdatamodx_site_templates[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_site_templates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_site_templates[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_site_templates[".highlightSearchResults"] = true;

$tableKeysmodx_site_templates = array();
$tableKeysmodx_site_templates[] = "id";
$tdatamodx_site_templates[".Keys"] = $tableKeysmodx_site_templates;

$tdatamodx_site_templates[".listFields"] = array();
$tdatamodx_site_templates[".listFields"][] = "id";
$tdatamodx_site_templates[".listFields"][] = "templatename";
$tdatamodx_site_templates[".listFields"][] = "description";
$tdatamodx_site_templates[".listFields"][] = "editor_type";
$tdatamodx_site_templates[".listFields"][] = "category";
$tdatamodx_site_templates[".listFields"][] = "icon";
$tdatamodx_site_templates[".listFields"][] = "template_type";
$tdatamodx_site_templates[".listFields"][] = "content";
$tdatamodx_site_templates[".listFields"][] = "parent";
$tdatamodx_site_templates[".listFields"][] = "locked";

$tdatamodx_site_templates[".hideMobileList"] = array();


$tdatamodx_site_templates[".viewFields"] = array();
$tdatamodx_site_templates[".viewFields"][] = "id";
$tdatamodx_site_templates[".viewFields"][] = "templatename";
$tdatamodx_site_templates[".viewFields"][] = "description";
$tdatamodx_site_templates[".viewFields"][] = "editor_type";
$tdatamodx_site_templates[".viewFields"][] = "category";
$tdatamodx_site_templates[".viewFields"][] = "icon";
$tdatamodx_site_templates[".viewFields"][] = "template_type";
$tdatamodx_site_templates[".viewFields"][] = "content";
$tdatamodx_site_templates[".viewFields"][] = "parent";
$tdatamodx_site_templates[".viewFields"][] = "locked";

$tdatamodx_site_templates[".addFields"] = array();
$tdatamodx_site_templates[".addFields"][] = "templatename";
$tdatamodx_site_templates[".addFields"][] = "description";
$tdatamodx_site_templates[".addFields"][] = "editor_type";
$tdatamodx_site_templates[".addFields"][] = "category";
$tdatamodx_site_templates[".addFields"][] = "icon";
$tdatamodx_site_templates[".addFields"][] = "template_type";
$tdatamodx_site_templates[".addFields"][] = "content";
$tdatamodx_site_templates[".addFields"][] = "parent";
$tdatamodx_site_templates[".addFields"][] = "locked";

$tdatamodx_site_templates[".masterListFields"] = array();
$tdatamodx_site_templates[".masterListFields"][] = "id";
$tdatamodx_site_templates[".masterListFields"][] = "templatename";
$tdatamodx_site_templates[".masterListFields"][] = "description";
$tdatamodx_site_templates[".masterListFields"][] = "editor_type";
$tdatamodx_site_templates[".masterListFields"][] = "category";
$tdatamodx_site_templates[".masterListFields"][] = "icon";
$tdatamodx_site_templates[".masterListFields"][] = "template_type";
$tdatamodx_site_templates[".masterListFields"][] = "content";
$tdatamodx_site_templates[".masterListFields"][] = "parent";
$tdatamodx_site_templates[".masterListFields"][] = "locked";

$tdatamodx_site_templates[".inlineAddFields"] = array();
$tdatamodx_site_templates[".inlineAddFields"][] = "templatename";
$tdatamodx_site_templates[".inlineAddFields"][] = "description";
$tdatamodx_site_templates[".inlineAddFields"][] = "editor_type";
$tdatamodx_site_templates[".inlineAddFields"][] = "category";
$tdatamodx_site_templates[".inlineAddFields"][] = "icon";
$tdatamodx_site_templates[".inlineAddFields"][] = "template_type";
$tdatamodx_site_templates[".inlineAddFields"][] = "content";
$tdatamodx_site_templates[".inlineAddFields"][] = "parent";
$tdatamodx_site_templates[".inlineAddFields"][] = "locked";

$tdatamodx_site_templates[".editFields"] = array();
$tdatamodx_site_templates[".editFields"][] = "templatename";
$tdatamodx_site_templates[".editFields"][] = "description";
$tdatamodx_site_templates[".editFields"][] = "editor_type";
$tdatamodx_site_templates[".editFields"][] = "category";
$tdatamodx_site_templates[".editFields"][] = "icon";
$tdatamodx_site_templates[".editFields"][] = "template_type";
$tdatamodx_site_templates[".editFields"][] = "content";
$tdatamodx_site_templates[".editFields"][] = "parent";
$tdatamodx_site_templates[".editFields"][] = "locked";

$tdatamodx_site_templates[".inlineEditFields"] = array();
$tdatamodx_site_templates[".inlineEditFields"][] = "templatename";
$tdatamodx_site_templates[".inlineEditFields"][] = "description";
$tdatamodx_site_templates[".inlineEditFields"][] = "editor_type";
$tdatamodx_site_templates[".inlineEditFields"][] = "category";
$tdatamodx_site_templates[".inlineEditFields"][] = "icon";
$tdatamodx_site_templates[".inlineEditFields"][] = "template_type";
$tdatamodx_site_templates[".inlineEditFields"][] = "content";
$tdatamodx_site_templates[".inlineEditFields"][] = "parent";
$tdatamodx_site_templates[".inlineEditFields"][] = "locked";

$tdatamodx_site_templates[".updateSelectedFields"] = array();
$tdatamodx_site_templates[".updateSelectedFields"][] = "templatename";
$tdatamodx_site_templates[".updateSelectedFields"][] = "description";
$tdatamodx_site_templates[".updateSelectedFields"][] = "editor_type";
$tdatamodx_site_templates[".updateSelectedFields"][] = "category";
$tdatamodx_site_templates[".updateSelectedFields"][] = "icon";
$tdatamodx_site_templates[".updateSelectedFields"][] = "template_type";
$tdatamodx_site_templates[".updateSelectedFields"][] = "content";
$tdatamodx_site_templates[".updateSelectedFields"][] = "parent";
$tdatamodx_site_templates[".updateSelectedFields"][] = "locked";


$tdatamodx_site_templates[".exportFields"] = array();
$tdatamodx_site_templates[".exportFields"][] = "id";
$tdatamodx_site_templates[".exportFields"][] = "templatename";
$tdatamodx_site_templates[".exportFields"][] = "description";
$tdatamodx_site_templates[".exportFields"][] = "editor_type";
$tdatamodx_site_templates[".exportFields"][] = "category";
$tdatamodx_site_templates[".exportFields"][] = "icon";
$tdatamodx_site_templates[".exportFields"][] = "template_type";
$tdatamodx_site_templates[".exportFields"][] = "content";
$tdatamodx_site_templates[".exportFields"][] = "parent";
$tdatamodx_site_templates[".exportFields"][] = "locked";

$tdatamodx_site_templates[".importFields"] = array();
$tdatamodx_site_templates[".importFields"][] = "id";
$tdatamodx_site_templates[".importFields"][] = "templatename";
$tdatamodx_site_templates[".importFields"][] = "description";
$tdatamodx_site_templates[".importFields"][] = "editor_type";
$tdatamodx_site_templates[".importFields"][] = "category";
$tdatamodx_site_templates[".importFields"][] = "icon";
$tdatamodx_site_templates[".importFields"][] = "template_type";
$tdatamodx_site_templates[".importFields"][] = "content";
$tdatamodx_site_templates[".importFields"][] = "parent";
$tdatamodx_site_templates[".importFields"][] = "locked";

$tdatamodx_site_templates[".printFields"] = array();
$tdatamodx_site_templates[".printFields"][] = "id";
$tdatamodx_site_templates[".printFields"][] = "templatename";
$tdatamodx_site_templates[".printFields"][] = "description";
$tdatamodx_site_templates[".printFields"][] = "editor_type";
$tdatamodx_site_templates[".printFields"][] = "category";
$tdatamodx_site_templates[".printFields"][] = "icon";
$tdatamodx_site_templates[".printFields"][] = "template_type";
$tdatamodx_site_templates[".printFields"][] = "content";
$tdatamodx_site_templates[".printFields"][] = "parent";
$tdatamodx_site_templates[".printFields"][] = "locked";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","id");
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




	$tdatamodx_site_templates["id"] = $fdata;
//	templatename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "templatename";
	$fdata["GoodName"] = "templatename";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","templatename");
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




	$tdatamodx_site_templates["templatename"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","description");
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




	$tdatamodx_site_templates["description"] = $fdata;
//	editor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "editor_type";
	$fdata["GoodName"] = "editor_type";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","editor_type");
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
	$edata["IsRequired"] = false;//true;
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




	$tdatamodx_site_templates["editor_type"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","category");
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




	$tdatamodx_site_templates["category"] = $fdata;
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","icon");
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




	$tdatamodx_site_templates["icon"] = $fdata;
//	template_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "template_type";
	$fdata["GoodName"] = "template_type";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","template_type");
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




	$tdatamodx_site_templates["template_type"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","content");
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

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 202;
			$edata["nCols"] = 547;

	
	
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




	$tdatamodx_site_templates["content"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","parent");
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

		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent";

	
	
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




	$tdatamodx_site_templates["parent"] = $fdata;
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "modx_site_templates";
	$fdata["Label"] = GetFieldLabel("modx_site_templates","locked");
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




	$tdatamodx_site_templates["locked"] = $fdata;


$tables_data["modx_site_templates"]=&$tdatamodx_site_templates;
$field_labels["modx_site_templates"] = &$fieldLabelsmodx_site_templates;
$fieldToolTips["modx_site_templates"] = &$fieldToolTipsmodx_site_templates;
$placeHolders["modx_site_templates"] = &$placeHoldersmodx_site_templates;
$page_titles["modx_site_templates"] = &$pageTitlesmodx_site_templates;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_site_templates"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["modx_site_templates"] = array();


	
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
					$masterTablesData["modx_site_templates"][0] = $masterParams;
				$masterTablesData["modx_site_templates"][0]["masterKeys"] = array();
	$masterTablesData["modx_site_templates"][0]["masterKeys"][]="template";
				$masterTablesData["modx_site_templates"][0]["detailKeys"] = array();
	$masterTablesData["modx_site_templates"][0]["detailKeys"][]="id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_site_templates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	templatename,  	description,  	editor_type,  	category,  	icon,  	template_type,  	content,  	parent,  	locked";
$proto0["m_strFrom"] = "FROM modx_site_templates";
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
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modx_site_templates";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "templatename",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto8["m_sql"] = "templatename";
$proto8["m_srcTableName"] = "modx_site_templates";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "modx_site_templates";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "editor_type",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto12["m_sql"] = "editor_type";
$proto12["m_srcTableName"] = "modx_site_templates";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto14["m_sql"] = "category";
$proto14["m_srcTableName"] = "modx_site_templates";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto16["m_sql"] = "icon";
$proto16["m_srcTableName"] = "modx_site_templates";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "template_type",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto18["m_sql"] = "template_type";
$proto18["m_srcTableName"] = "modx_site_templates";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto20["m_sql"] = "content";
$proto20["m_srcTableName"] = "modx_site_templates";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto22["m_sql"] = "parent";
$proto22["m_srcTableName"] = "modx_site_templates";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "modx_site_templates",
	"m_srcTableName" => "modx_site_templates"
));

$proto24["m_sql"] = "locked";
$proto24["m_srcTableName"] = "modx_site_templates";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "modx_site_templates";
$proto27["m_srcTableName"] = "modx_site_templates";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "templatename";
$proto27["m_columns"][] = "description";
$proto27["m_columns"][] = "editor_type";
$proto27["m_columns"][] = "category";
$proto27["m_columns"][] = "icon";
$proto27["m_columns"][] = "template_type";
$proto27["m_columns"][] = "content";
$proto27["m_columns"][] = "parent";
$proto27["m_columns"][] = "locked";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "modx_site_templates";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "modx_site_templates";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="modx_site_templates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modx_site_templates = createSqlQuery_modx_site_templates();


	
						;

										

$tdatamodx_site_templates[".sqlquery"] = $queryData_modx_site_templates;

$tableEvents["modx_site_templates"] = new eventsBase;
$tdatamodx_site_templates[".hasEvents"] = false;

?>
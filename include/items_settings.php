<?php
require_once(getabspath("classes/cipherer.php"));




$tdataitems = array();
	$tdataitems[".truncateText"] = true;
	$tdataitems[".NumberOfChars"] = 20;
	$tdataitems[".ShortName"] = "items";
	$tdataitems[".OwnerID"] = "";
	$tdataitems[".OriginalTable"] = "items";

//	field labels
$fieldLabelsitems = array();
$fieldToolTipsitems = array();
$pageTitlesitems = array();
$placeHoldersitems = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsitems["Japanese"] = array();
	$fieldToolTipsitems["Japanese"] = array();
	$placeHoldersitems["Japanese"] = array();
	$pageTitlesitems["Japanese"] = array();
	$fieldLabelsitems["Japanese"]["item_id"] = "Item Id";
	$fieldToolTipsitems["Japanese"]["item_id"] = "";
	$placeHoldersitems["Japanese"]["item_id"] = "";
	$fieldLabelsitems["Japanese"]["name"] = "Name";
	$fieldToolTipsitems["Japanese"]["name"] = "";
	$placeHoldersitems["Japanese"]["name"] = "";
	$fieldLabelsitems["Japanese"]["price"] = "Price";
	$fieldToolTipsitems["Japanese"]["price"] = "";
	$placeHoldersitems["Japanese"]["price"] = "";
	$fieldLabelsitems["Japanese"]["url"] = "Url";
	$fieldToolTipsitems["Japanese"]["url"] = "";
	$placeHoldersitems["Japanese"]["url"] = "";
	$fieldLabelsitems["Japanese"]["japanase"] = "Japanase";
	$fieldToolTipsitems["Japanese"]["japanase"] = "";
	$placeHoldersitems["Japanese"]["japanase"] = "";
	$fieldLabelsitems["Japanese"]["count"] = "Count";
	$fieldToolTipsitems["Japanese"]["count"] = "";
	$placeHoldersitems["Japanese"]["count"] = "";
	$fieldLabelsitems["Japanese"]["parent"] = "Parent";
	$fieldToolTipsitems["Japanese"]["parent"] = "";
	$placeHoldersitems["Japanese"]["parent"] = "";
	$fieldLabelsitems["Japanese"]["svm"] = "Svm";
	$fieldToolTipsitems["Japanese"]["svm"] = "";
	$placeHoldersitems["Japanese"]["svm"] = "";
	$fieldLabelsitems["Japanese"]["discription"] = "Discription";
	$fieldToolTipsitems["Japanese"]["discription"] = "";
	$placeHoldersitems["Japanese"]["discription"] = "";
	$fieldLabelsitems["Japanese"]["abstruct"] = "Abstruct";
	$fieldToolTipsitems["Japanese"]["abstruct"] = "";
	$placeHoldersitems["Japanese"]["abstruct"] = "";
	$fieldLabelsitems["Japanese"]["claim"] = "Claim";
	$fieldToolTipsitems["Japanese"]["claim"] = "";
	$placeHoldersitems["Japanese"]["claim"] = "";
	$fieldLabelsitems["Japanese"]["document"] = "Document";
	$fieldToolTipsitems["Japanese"]["document"] = "";
	$placeHoldersitems["Japanese"]["document"] = "";
	if (count($fieldToolTipsitems["Japanese"]))
		$tdataitems[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsitems["English"] = array();
	$fieldToolTipsitems["English"] = array();
	$placeHoldersitems["English"] = array();
	$pageTitlesitems["English"] = array();
	$fieldLabelsitems["English"]["item_id"] = "Item Id";
	$fieldToolTipsitems["English"]["item_id"] = "";
	$placeHoldersitems["English"]["item_id"] = "";
	$fieldLabelsitems["English"]["name"] = "Name";
	$fieldToolTipsitems["English"]["name"] = "";
	$placeHoldersitems["English"]["name"] = "";
	$fieldLabelsitems["English"]["price"] = "Price";
	$fieldToolTipsitems["English"]["price"] = "";
	$placeHoldersitems["English"]["price"] = "";
	$fieldLabelsitems["English"]["url"] = "Url";
	$fieldToolTipsitems["English"]["url"] = "";
	$placeHoldersitems["English"]["url"] = "";
	$fieldLabelsitems["English"]["japanase"] = "Japanase";
	$fieldToolTipsitems["English"]["japanase"] = "";
	$placeHoldersitems["English"]["japanase"] = "";
	$fieldLabelsitems["English"]["count"] = "Count";
	$fieldToolTipsitems["English"]["count"] = "";
	$placeHoldersitems["English"]["count"] = "";
	$fieldLabelsitems["English"]["parent"] = "Parent";
	$fieldToolTipsitems["English"]["parent"] = "";
	$placeHoldersitems["English"]["parent"] = "";
	$fieldLabelsitems["English"]["svm"] = "Svm";
	$fieldToolTipsitems["English"]["svm"] = "";
	$placeHoldersitems["English"]["svm"] = "";
	$fieldLabelsitems["English"]["discription"] = "Discription";
	$fieldToolTipsitems["English"]["discription"] = "";
	$placeHoldersitems["English"]["discription"] = "";
	$fieldLabelsitems["English"]["abstruct"] = "Abstruct";
	$fieldToolTipsitems["English"]["abstruct"] = "";
	$placeHoldersitems["English"]["abstruct"] = "";
	$fieldLabelsitems["English"]["claim"] = "Claim";
	$fieldToolTipsitems["English"]["claim"] = "";
	$placeHoldersitems["English"]["claim"] = "";
	$fieldLabelsitems["English"]["document"] = "Document";
	$fieldToolTipsitems["English"]["document"] = "";
	$placeHoldersitems["English"]["document"] = "";
	if (count($fieldToolTipsitems["English"]))
		$tdataitems[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsitems[""] = array();
	$fieldToolTipsitems[""] = array();
	$placeHoldersitems[""] = array();
	$pageTitlesitems[""] = array();
	if (count($fieldToolTipsitems[""]))
		$tdataitems[".isUseToolTips"] = true;
}


	$tdataitems[".NCSearch"] = true;



$tdataitems[".shortTableName"] = "items";
$tdataitems[".nSecOptions"] = 0;
$tdataitems[".recsPerRowPrint"] = 1;
$tdataitems[".mainTableOwnerID"] = "";
$tdataitems[".moveNext"] = 0;
$tdataitems[".entityType"] = 0;

$tdataitems[".strOriginalTableName"] = "items";

	



$tdataitems[".showAddInPopup"] = false;

$tdataitems[".showEditInPopup"] = false;

$tdataitems[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitems[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitems[".fieldsForRegister"] = array();
	
$tdataitems[".listAjax"] = false;

	$tdataitems[".audit"] = false;

	$tdataitems[".locking"] = false;

$tdataitems[".edit"] = true;
$tdataitems[".afterEditAction"] = 1;
$tdataitems[".closePopupAfterEdit"] = 1;
$tdataitems[".afterEditActionDetTable"] = "";

$tdataitems[".add"] = true;
$tdataitems[".afterAddAction"] = 1;
$tdataitems[".closePopupAfterAdd"] = 1;
$tdataitems[".afterAddActionDetTable"] = "";

$tdataitems[".list"] = true;

$tdataitems[".inlineEdit"] = true;

$tdataitems[".updateSelected"] = true;

$tdataitems[".reorderRecordsByHeader"] = true;



$tdataitems[".inlineAdd"] = true;
$tdataitems[".copy"] = true;
$tdataitems[".view"] = true;

$tdataitems[".import"] = true;

$tdataitems[".exportTo"] = true;

$tdataitems[".printFriendly"] = true;

$tdataitems[".delete"] = true;

$tdataitems[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataitems[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataitems[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataitems[".searchSaving"] = false;
//

$tdataitems[".showSearchPanel"] = true;
		$tdataitems[".flexibleSearch"] = true;

$tdataitems[".isUseAjaxSuggest"] = true;

$tdataitems[".rowHighlite"] = true;



				

$tdataitems[".ajaxCodeSnippetAdded"] = false;

$tdataitems[".buttonsAdded"] = false;

$tdataitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitems[".isUseTimeForSearch"] = false;





$tdataitems[".allSearchFields"] = array();
$tdataitems[".filterFields"] = array();
$tdataitems[".requiredSearchFields"] = array();

$tdataitems[".allSearchFields"][] = "item_id";
	$tdataitems[".allSearchFields"][] = "name";
	$tdataitems[".allSearchFields"][] = "price";
	$tdataitems[".allSearchFields"][] = "discription";
	$tdataitems[".allSearchFields"][] = "abstruct";
	$tdataitems[".allSearchFields"][] = "claim";
	$tdataitems[".allSearchFields"][] = "url";
	$tdataitems[".allSearchFields"][] = "japanase";
	$tdataitems[".allSearchFields"][] = "count";
	$tdataitems[".allSearchFields"][] = "parent";
	$tdataitems[".allSearchFields"][] = "svm";
	$tdataitems[".allSearchFields"][] = "document";
	
$tdataitems[".filterFields"][] = "count";

$tdataitems[".googleLikeFields"] = array();
$tdataitems[".googleLikeFields"][] = "item_id";
$tdataitems[".googleLikeFields"][] = "name";
$tdataitems[".googleLikeFields"][] = "price";
$tdataitems[".googleLikeFields"][] = "discription";
$tdataitems[".googleLikeFields"][] = "abstruct";
$tdataitems[".googleLikeFields"][] = "claim";
$tdataitems[".googleLikeFields"][] = "url";
$tdataitems[".googleLikeFields"][] = "japanase";
$tdataitems[".googleLikeFields"][] = "count";
$tdataitems[".googleLikeFields"][] = "parent";
$tdataitems[".googleLikeFields"][] = "svm";
$tdataitems[".googleLikeFields"][] = "document";

$tdataitems[".panelSearchFields"] = array();
$tdataitems[".searchPanelOptions"] = array();
$tdataitems[".panelSearchFields"][] = "count";
	
$tdataitems[".advSearchFields"] = array();
$tdataitems[".advSearchFields"][] = "item_id";
$tdataitems[".advSearchFields"][] = "name";
$tdataitems[".advSearchFields"][] = "price";
$tdataitems[".advSearchFields"][] = "discription";
$tdataitems[".advSearchFields"][] = "abstruct";
$tdataitems[".advSearchFields"][] = "claim";
$tdataitems[".advSearchFields"][] = "url";
$tdataitems[".advSearchFields"][] = "japanase";
$tdataitems[".advSearchFields"][] = "count";
$tdataitems[".advSearchFields"][] = "parent";
$tdataitems[".advSearchFields"][] = "svm";
$tdataitems[".advSearchFields"][] = "document";

$tdataitems[".tableType"] = "list";

$tdataitems[".printerPageOrientation"] = 0;
$tdataitems[".nPrinterPageScale"] = 100;

$tdataitems[".nPrinterSplitRecords"] = 40;

$tdataitems[".nPrinterPDFSplitRecords"] = 40;



$tdataitems[".geocodingEnabled"] = false;





$tdataitems[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataitems[".pageSize"] = 20;

$tdataitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitems[".strOrderBy"] = $tstrOrderBy;

$tdataitems[".orderindexes"] = array();

$tdataitems[".sqlHead"] = "SELECT item_id,  name,  price,  discription,  abstruct,  claim,  url,  japanase,  `count`,  parent,  svm,  document";
$tdataitems[".sqlFrom"] = "FROM items";
$tdataitems[".sqlWhereExpr"] = "";
$tdataitems[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitems[".arrGroupsPerPage"] = $arrGPP;

$tdataitems[".highlightSearchResults"] = true;

$tableKeysitems = array();
$tableKeysitems[] = "item_id";
$tdataitems[".Keys"] = $tableKeysitems;

$tdataitems[".listFields"] = array();
$tdataitems[".listFields"][] = "discription";
$tdataitems[".listFields"][] = "abstruct";
$tdataitems[".listFields"][] = "claim";
$tdataitems[".listFields"][] = "document";
$tdataitems[".listFields"][] = "parent";
$tdataitems[".listFields"][] = "count";
$tdataitems[".listFields"][] = "url";
$tdataitems[".listFields"][] = "item_id";
$tdataitems[".listFields"][] = "name";
$tdataitems[".listFields"][] = "japanase";
$tdataitems[".listFields"][] = "svm";
$tdataitems[".listFields"][] = "price";

$tdataitems[".hideMobileList"] = array();


$tdataitems[".viewFields"] = array();
$tdataitems[".viewFields"][] = "item_id";
$tdataitems[".viewFields"][] = "name";
$tdataitems[".viewFields"][] = "price";
$tdataitems[".viewFields"][] = "discription";
$tdataitems[".viewFields"][] = "abstruct";
$tdataitems[".viewFields"][] = "claim";
$tdataitems[".viewFields"][] = "url";
$tdataitems[".viewFields"][] = "japanase";
$tdataitems[".viewFields"][] = "count";
$tdataitems[".viewFields"][] = "parent";
$tdataitems[".viewFields"][] = "svm";
$tdataitems[".viewFields"][] = "document";

$tdataitems[".addFields"] = array();
$tdataitems[".addFields"][] = "name";
$tdataitems[".addFields"][] = "price";
$tdataitems[".addFields"][] = "discription";
$tdataitems[".addFields"][] = "abstruct";
$tdataitems[".addFields"][] = "claim";
$tdataitems[".addFields"][] = "url";
$tdataitems[".addFields"][] = "japanase";
$tdataitems[".addFields"][] = "count";
$tdataitems[".addFields"][] = "parent";
$tdataitems[".addFields"][] = "svm";
$tdataitems[".addFields"][] = "document";

$tdataitems[".masterListFields"] = array();
$tdataitems[".masterListFields"][] = "item_id";
$tdataitems[".masterListFields"][] = "name";
$tdataitems[".masterListFields"][] = "price";
$tdataitems[".masterListFields"][] = "discription";
$tdataitems[".masterListFields"][] = "abstruct";
$tdataitems[".masterListFields"][] = "claim";
$tdataitems[".masterListFields"][] = "url";
$tdataitems[".masterListFields"][] = "japanase";
$tdataitems[".masterListFields"][] = "count";
$tdataitems[".masterListFields"][] = "parent";
$tdataitems[".masterListFields"][] = "svm";
$tdataitems[".masterListFields"][] = "document";

$tdataitems[".inlineAddFields"] = array();
$tdataitems[".inlineAddFields"][] = "discription";
$tdataitems[".inlineAddFields"][] = "abstruct";
$tdataitems[".inlineAddFields"][] = "claim";
$tdataitems[".inlineAddFields"][] = "document";
$tdataitems[".inlineAddFields"][] = "parent";
$tdataitems[".inlineAddFields"][] = "count";
$tdataitems[".inlineAddFields"][] = "url";
$tdataitems[".inlineAddFields"][] = "name";
$tdataitems[".inlineAddFields"][] = "japanase";
$tdataitems[".inlineAddFields"][] = "svm";
$tdataitems[".inlineAddFields"][] = "price";

$tdataitems[".editFields"] = array();
$tdataitems[".editFields"][] = "name";
$tdataitems[".editFields"][] = "price";
$tdataitems[".editFields"][] = "discription";
$tdataitems[".editFields"][] = "abstruct";
$tdataitems[".editFields"][] = "claim";
$tdataitems[".editFields"][] = "url";
$tdataitems[".editFields"][] = "japanase";
$tdataitems[".editFields"][] = "count";
$tdataitems[".editFields"][] = "parent";
$tdataitems[".editFields"][] = "svm";
$tdataitems[".editFields"][] = "document";

$tdataitems[".inlineEditFields"] = array();
$tdataitems[".inlineEditFields"][] = "discription";
$tdataitems[".inlineEditFields"][] = "abstruct";
$tdataitems[".inlineEditFields"][] = "claim";
$tdataitems[".inlineEditFields"][] = "document";
$tdataitems[".inlineEditFields"][] = "parent";
$tdataitems[".inlineEditFields"][] = "count";
$tdataitems[".inlineEditFields"][] = "url";
$tdataitems[".inlineEditFields"][] = "name";
$tdataitems[".inlineEditFields"][] = "japanase";
$tdataitems[".inlineEditFields"][] = "svm";
$tdataitems[".inlineEditFields"][] = "price";

$tdataitems[".updateSelectedFields"] = array();
$tdataitems[".updateSelectedFields"][] = "name";
$tdataitems[".updateSelectedFields"][] = "price";
$tdataitems[".updateSelectedFields"][] = "url";
$tdataitems[".updateSelectedFields"][] = "japanase";
$tdataitems[".updateSelectedFields"][] = "count";
$tdataitems[".updateSelectedFields"][] = "parent";
$tdataitems[".updateSelectedFields"][] = "svm";


$tdataitems[".exportFields"] = array();
$tdataitems[".exportFields"][] = "item_id";
$tdataitems[".exportFields"][] = "name";
$tdataitems[".exportFields"][] = "price";
$tdataitems[".exportFields"][] = "discription";
$tdataitems[".exportFields"][] = "abstruct";
$tdataitems[".exportFields"][] = "claim";
$tdataitems[".exportFields"][] = "url";
$tdataitems[".exportFields"][] = "japanase";
$tdataitems[".exportFields"][] = "count";
$tdataitems[".exportFields"][] = "parent";
$tdataitems[".exportFields"][] = "svm";
$tdataitems[".exportFields"][] = "document";

$tdataitems[".importFields"] = array();
$tdataitems[".importFields"][] = "item_id";
$tdataitems[".importFields"][] = "name";
$tdataitems[".importFields"][] = "price";
$tdataitems[".importFields"][] = "discription";
$tdataitems[".importFields"][] = "abstruct";
$tdataitems[".importFields"][] = "claim";
$tdataitems[".importFields"][] = "url";
$tdataitems[".importFields"][] = "japanase";
$tdataitems[".importFields"][] = "count";
$tdataitems[".importFields"][] = "parent";
$tdataitems[".importFields"][] = "svm";
$tdataitems[".importFields"][] = "document";

$tdataitems[".printFields"] = array();
$tdataitems[".printFields"][] = "item_id";
$tdataitems[".printFields"][] = "name";
$tdataitems[".printFields"][] = "price";
$tdataitems[".printFields"][] = "discription";
$tdataitems[".printFields"][] = "abstruct";
$tdataitems[".printFields"][] = "claim";
$tdataitems[".printFields"][] = "url";
$tdataitems[".printFields"][] = "japanase";
$tdataitems[".printFields"][] = "count";
$tdataitems[".printFields"][] = "parent";
$tdataitems[".printFields"][] = "svm";
$tdataitems[".printFields"][] = "document";

//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","item_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_id";

	
	
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




	$tdataitems["item_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","name");
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




	$tdataitems["name"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","price");
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

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";

	
	
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




	$tdataitems["price"] = $fdata;
//	discription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "discription";
	$fdata["GoodName"] = "discription";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","discription");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "discription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discription";

	
	
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




	$tdataitems["discription"] = $fdata;
//	abstruct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "abstruct";
	$fdata["GoodName"] = "abstruct";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","abstruct");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "abstruct";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "abstruct";

	
	
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




	$tdataitems["abstruct"] = $fdata;
//	claim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "claim";
	$fdata["GoodName"] = "claim";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","claim");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "claim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "claim";

	
	
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




	$tdataitems["claim"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","url");
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

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdataitems["url"] = $fdata;
//	japanase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "japanase";
	$fdata["GoodName"] = "japanase";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","japanase");
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

		$fdata["strField"] = "japanase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "japanase";

	
	
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

	
	
	
				$edata["nRows"] = 102;
			$edata["nCols"] = 306;

	
	
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




	$tdataitems["japanase"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","count");
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

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`count`";

	
	
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
		
		$edata["controlWidth"] = 10;

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


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "item_id";
		$fdata["filterFormat"] = "Interval list";
		$fdata["showCollapsed"] = false;

	
	
		//intervals' settings
	$fdata["showWithNoRecords"] = 0;
	$fdata["filterIntervals"] =  array();

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "1 - 20";
				$intervalData["lowerLimit"] = "0";
				$intervalData["upperLimit"] = "20";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 1;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "21 - 40";
				$intervalData["lowerLimit"] = "20";
				$intervalData["upperLimit"] = "40";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 2;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "41 - 60";
				$intervalData["lowerLimit"] = "40";
				$intervalData["upperLimit"] = "60";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 3;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "61 - 80";
				$intervalData["lowerLimit"] = "60";
				$intervalData["upperLimit"] = "80";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 4;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "81 - 100";
				$intervalData["lowerLimit"] = "80";
				$intervalData["upperLimit"] = "100";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 5;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "101 - 120";
				$intervalData["lowerLimit"] = "100";
				$intervalData["upperLimit"] = "120";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 6;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "121 - 140";
				$intervalData["lowerLimit"] = "120";
				$intervalData["upperLimit"] = "140";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 7;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "141 - 160";
				$intervalData["lowerLimit"] = "140";
				$intervalData["upperLimit"] = "160";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 8;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "161 - 180";
				$intervalData["lowerLimit"] = "160";
				$intervalData["upperLimit"] = "180";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 9;

		$fdata["filterIntervals"][] = $intervalData;

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 1;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "181 - 200";
				$intervalData["lowerLimit"] = "180";
				$intervalData["upperLimit"] = "200";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 10;

		$fdata["filterIntervals"][] = $intervalData;

	
//end of Filters settings


	$tdataitems["count"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","parent");
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

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




	$tdataitems["parent"] = $fdata;
//	svm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "svm";
	$fdata["GoodName"] = "svm";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","svm");
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

		$fdata["strField"] = "svm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "svm";

	
	
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




	$tdataitems["svm"] = $fdata;
//	document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "document";
	$fdata["GoodName"] = "document";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","document");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "document";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "document";

	
	
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




	$tdataitems["document"] = $fdata;


$tables_data["items"]=&$tdataitems;
$field_labels["items"] = &$fieldLabelsitems;
$fieldToolTips["items"] = &$fieldToolTipsitems;
$placeHolders["items"] = &$placeHoldersitems;
$page_titles["items"] = &$pageTitlesitems;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "item_id,  name,  price,  discription,  abstruct,  claim,  url,  japanase,  `count`,  parent,  svm,  document";
$proto0["m_strFrom"] = "FROM items";
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
	"m_strName" => "item_id",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto6["m_sql"] = "item_id";
$proto6["m_srcTableName"] = "items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto10["m_sql"] = "price";
$proto10["m_srcTableName"] = "items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "discription",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto12["m_sql"] = "discription";
$proto12["m_srcTableName"] = "items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "abstruct",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto14["m_sql"] = "abstruct";
$proto14["m_srcTableName"] = "items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "claim",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto16["m_sql"] = "claim";
$proto16["m_srcTableName"] = "items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto18["m_sql"] = "url";
$proto18["m_srcTableName"] = "items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "japanase",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto20["m_sql"] = "japanase";
$proto20["m_srcTableName"] = "items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto22["m_sql"] = "`count`";
$proto22["m_srcTableName"] = "items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto24["m_sql"] = "parent";
$proto24["m_srcTableName"] = "items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "svm",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto26["m_sql"] = "svm";
$proto26["m_srcTableName"] = "items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "document",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto28["m_sql"] = "document";
$proto28["m_srcTableName"] = "items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "items";
$proto31["m_srcTableName"] = "items";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "item_id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "price";
$proto31["m_columns"][] = "discription";
$proto31["m_columns"][] = "abstruct";
$proto31["m_columns"][] = "claim";
$proto31["m_columns"][] = "url";
$proto31["m_columns"][] = "japanase";
$proto31["m_columns"][] = "count";
$proto31["m_columns"][] = "parent";
$proto31["m_columns"][] = "svm";
$proto31["m_columns"][] = "document";
$proto31["m_columns"][] = "kind";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "items";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "items";
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
$proto0["m_srcTableName"]="items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_items = createSqlQuery_items();


	
						;

												

$tdataitems[".sqlquery"] = $queryData_items;

$tableEvents["items"] = new eventsBase;
$tdataitems[".hasEvents"] = false;

?>
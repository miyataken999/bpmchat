<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_COMMAND = array();
	$tdataPMT_COMMAND[".truncateText"] = true;
	$tdataPMT_COMMAND[".NumberOfChars"] = 20;
	$tdataPMT_COMMAND[".ShortName"] = "PMT_COMMAND";
	$tdataPMT_COMMAND[".OwnerID"] = "";
	$tdataPMT_COMMAND[".OriginalTable"] = "PMT_COMMAND";

//	field labels
$fieldLabelsPMT_COMMAND = array();
$fieldToolTipsPMT_COMMAND = array();
$pageTitlesPMT_COMMAND = array();
$placeHoldersPMT_COMMAND = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_COMMAND["Japanese"] = array();
	$fieldToolTipsPMT_COMMAND["Japanese"] = array();
	$placeHoldersPMT_COMMAND["Japanese"] = array();
	$pageTitlesPMT_COMMAND["Japanese"] = array();
	$fieldLabelsPMT_COMMAND["Japanese"]["id"] = "ID";
	$fieldToolTipsPMT_COMMAND["Japanese"]["id"] = "www";
	$placeHoldersPMT_COMMAND["Japanese"]["id"] = "ww";
	$fieldLabelsPMT_COMMAND["Japanese"]["cmd"] = "CMD";
	$fieldToolTipsPMT_COMMAND["Japanese"]["cmd"] = "www";
	$placeHoldersPMT_COMMAND["Japanese"]["cmd"] = "";
	$fieldLabelsPMT_COMMAND["Japanese"]["lang"] = "LANG";
	$fieldToolTipsPMT_COMMAND["Japanese"]["lang"] = "aaaa";
	$placeHoldersPMT_COMMAND["Japanese"]["lang"] = "";
	$fieldLabelsPMT_COMMAND["Japanese"]["detail"] = "ディテール";
	$fieldToolTipsPMT_COMMAND["Japanese"]["detail"] = "";
	$placeHoldersPMT_COMMAND["Japanese"]["detail"] = "";
	$fieldLabelsPMT_COMMAND["Japanese"]["mysqlfunctionname"] = "Mysqlfunctionname";
	$fieldToolTipsPMT_COMMAND["Japanese"]["mysqlfunctionname"] = "";
	$placeHoldersPMT_COMMAND["Japanese"]["mysqlfunctionname"] = "";
	$fieldLabelsPMT_COMMAND["Japanese"]["mysqlfunction"] = "Mysqlfunction";
	$fieldToolTipsPMT_COMMAND["Japanese"]["mysqlfunction"] = "";
	$placeHoldersPMT_COMMAND["Japanese"]["mysqlfunction"] = "";
	if (count($fieldToolTipsPMT_COMMAND["Japanese"]))
		$tdataPMT_COMMAND[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_COMMAND["English"] = array();
	$fieldToolTipsPMT_COMMAND["English"] = array();
	$placeHoldersPMT_COMMAND["English"] = array();
	$pageTitlesPMT_COMMAND["English"] = array();
	$fieldLabelsPMT_COMMAND["English"]["id"] = "ID";
	$fieldToolTipsPMT_COMMAND["English"]["id"] = "";
	$placeHoldersPMT_COMMAND["English"]["id"] = "";
	$fieldLabelsPMT_COMMAND["English"]["cmd"] = "CMD";
	$fieldToolTipsPMT_COMMAND["English"]["cmd"] = "";
	$placeHoldersPMT_COMMAND["English"]["cmd"] = "";
	$fieldLabelsPMT_COMMAND["English"]["lang"] = "LANG";
	$fieldToolTipsPMT_COMMAND["English"]["lang"] = "";
	$placeHoldersPMT_COMMAND["English"]["lang"] = "";
	$fieldLabelsPMT_COMMAND["English"]["detail"] = "ディテール";
	$fieldToolTipsPMT_COMMAND["English"]["detail"] = "";
	$placeHoldersPMT_COMMAND["English"]["detail"] = "";
	$fieldLabelsPMT_COMMAND["English"]["mysqlfunctionname"] = "Mysqlfunctionname";
	$fieldToolTipsPMT_COMMAND["English"]["mysqlfunctionname"] = "";
	$placeHoldersPMT_COMMAND["English"]["mysqlfunctionname"] = "";
	$fieldLabelsPMT_COMMAND["English"]["mysqlfunction"] = "Mysqlfunction";
	$fieldToolTipsPMT_COMMAND["English"]["mysqlfunction"] = "";
	$placeHoldersPMT_COMMAND["English"]["mysqlfunction"] = "";
	if (count($fieldToolTipsPMT_COMMAND["English"]))
		$tdataPMT_COMMAND[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_COMMAND[""] = array();
	$fieldToolTipsPMT_COMMAND[""] = array();
	$placeHoldersPMT_COMMAND[""] = array();
	$pageTitlesPMT_COMMAND[""] = array();
	if (count($fieldToolTipsPMT_COMMAND[""]))
		$tdataPMT_COMMAND[".isUseToolTips"] = true;
}


	$tdataPMT_COMMAND[".NCSearch"] = true;



$tdataPMT_COMMAND[".shortTableName"] = "PMT_COMMAND";
$tdataPMT_COMMAND[".nSecOptions"] = 0;
$tdataPMT_COMMAND[".recsPerRowPrint"] = 1;
$tdataPMT_COMMAND[".mainTableOwnerID"] = "";
$tdataPMT_COMMAND[".moveNext"] = 0;
$tdataPMT_COMMAND[".entityType"] = 0;

$tdataPMT_COMMAND[".strOriginalTableName"] = "PMT_COMMAND";

	



$tdataPMT_COMMAND[".showAddInPopup"] = false;

$tdataPMT_COMMAND[".showEditInPopup"] = false;

$tdataPMT_COMMAND[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_COMMAND[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_COMMAND[".fieldsForRegister"] = array();
	
	$tdataPMT_COMMAND[".listAjax"] = true;

	$tdataPMT_COMMAND[".audit"] = true;

	$tdataPMT_COMMAND[".locking"] = false;

$tdataPMT_COMMAND[".edit"] = true;
$tdataPMT_COMMAND[".afterEditAction"] = 1;
$tdataPMT_COMMAND[".closePopupAfterEdit"] = 1;
$tdataPMT_COMMAND[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataPMT_COMMAND[".add"] = true;
$tdataPMT_COMMAND[".afterAddAction"] = 1;
$tdataPMT_COMMAND[".closePopupAfterAdd"] = 1;
$tdataPMT_COMMAND[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataPMT_COMMAND[".list"] = true;

$tdataPMT_COMMAND[".inlineEdit"] = true;

$tdataPMT_COMMAND[".updateSelected"] = true;

$tdataPMT_COMMAND[".reorderRecordsByHeader"] = true;
$tdataPMT_COMMAND[".createSortByDropdown"] = true;
$tdataPMT_COMMAND[".strSortControlSettingsJSON"] = "";

$tdataPMT_COMMAND[".strClickActionJSON"] = "{\"fields\":{\"cmd\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"detail\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"lang\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataPMT_COMMAND[".inlineAdd"] = true;
$tdataPMT_COMMAND[".copy"] = true;
$tdataPMT_COMMAND[".view"] = true;

$tdataPMT_COMMAND[".import"] = true;

$tdataPMT_COMMAND[".exportTo"] = true;

$tdataPMT_COMMAND[".printFriendly"] = true;

$tdataPMT_COMMAND[".delete"] = true;

$tdataPMT_COMMAND[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_COMMAND[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPMT_COMMAND[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPMT_COMMAND[".searchSaving"] = false;
//

$tdataPMT_COMMAND[".showSearchPanel"] = true;
		$tdataPMT_COMMAND[".flexibleSearch"] = true;

$tdataPMT_COMMAND[".isUseAjaxSuggest"] = true;

$tdataPMT_COMMAND[".rowHighlite"] = true;



																

$tdataPMT_COMMAND[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_COMMAND[".buttonsAdded"] = false;

$tdataPMT_COMMAND[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_COMMAND[".isUseTimeForSearch"] = false;



$tdataPMT_COMMAND[".badgeColor"] = "daa520";


$tdataPMT_COMMAND[".allSearchFields"] = array();
$tdataPMT_COMMAND[".filterFields"] = array();
$tdataPMT_COMMAND[".requiredSearchFields"] = array();

$tdataPMT_COMMAND[".allSearchFields"][] = "id";
	$tdataPMT_COMMAND[".allSearchFields"][] = "cmd";
	$tdataPMT_COMMAND[".allSearchFields"][] = "lang";
	$tdataPMT_COMMAND[".allSearchFields"][] = "detail";
	$tdataPMT_COMMAND[".allSearchFields"][] = "mysqlfunctionname";
	$tdataPMT_COMMAND[".allSearchFields"][] = "mysqlfunction";
	

$tdataPMT_COMMAND[".googleLikeFields"] = array();
$tdataPMT_COMMAND[".googleLikeFields"][] = "id";
$tdataPMT_COMMAND[".googleLikeFields"][] = "cmd";
$tdataPMT_COMMAND[".googleLikeFields"][] = "lang";
$tdataPMT_COMMAND[".googleLikeFields"][] = "detail";
$tdataPMT_COMMAND[".googleLikeFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".googleLikeFields"][] = "mysqlfunction";


$tdataPMT_COMMAND[".advSearchFields"] = array();
$tdataPMT_COMMAND[".advSearchFields"][] = "id";
$tdataPMT_COMMAND[".advSearchFields"][] = "cmd";
$tdataPMT_COMMAND[".advSearchFields"][] = "lang";
$tdataPMT_COMMAND[".advSearchFields"][] = "detail";
$tdataPMT_COMMAND[".advSearchFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".advSearchFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".tableType"] = "list";

$tdataPMT_COMMAND[".printerPageOrientation"] = 0;
$tdataPMT_COMMAND[".nPrinterPageScale"] = 100;

$tdataPMT_COMMAND[".nPrinterSplitRecords"] = 40;

$tdataPMT_COMMAND[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_COMMAND[".geocodingEnabled"] = false;





$tdataPMT_COMMAND[".listGridLayout"] = 3;


$tdataPMT_COMMAND[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPMT_COMMAND[".pageSize"] = 20;

$tdataPMT_COMMAND[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_COMMAND[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_COMMAND[".orderindexes"] = array();

$tdataPMT_COMMAND[".sqlHead"] = "SELECT id,  	cmd,  	lang,  	detail,  	mysqlfunctionname,  	mysqlfunction";
$tdataPMT_COMMAND[".sqlFrom"] = "FROM PMT_COMMAND";
$tdataPMT_COMMAND[".sqlWhereExpr"] = "";
$tdataPMT_COMMAND[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_COMMAND[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_COMMAND[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_COMMAND[".highlightSearchResults"] = true;

$tableKeysPMT_COMMAND = array();
$tableKeysPMT_COMMAND[] = "id";
$tdataPMT_COMMAND[".Keys"] = $tableKeysPMT_COMMAND;

$tdataPMT_COMMAND[".listFields"] = array();
$tdataPMT_COMMAND[".listFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".listFields"][] = "mysqlfunction";
$tdataPMT_COMMAND[".listFields"][] = "detail";
$tdataPMT_COMMAND[".listFields"][] = "id";
$tdataPMT_COMMAND[".listFields"][] = "cmd";
$tdataPMT_COMMAND[".listFields"][] = "lang";

$tdataPMT_COMMAND[".hideMobileList"] = array();


$tdataPMT_COMMAND[".viewFields"] = array();
$tdataPMT_COMMAND[".viewFields"][] = "id";
$tdataPMT_COMMAND[".viewFields"][] = "cmd";
$tdataPMT_COMMAND[".viewFields"][] = "lang";
$tdataPMT_COMMAND[".viewFields"][] = "detail";
$tdataPMT_COMMAND[".viewFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".viewFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".addFields"] = array();
$tdataPMT_COMMAND[".addFields"][] = "cmd";
$tdataPMT_COMMAND[".addFields"][] = "lang";
$tdataPMT_COMMAND[".addFields"][] = "detail";
$tdataPMT_COMMAND[".addFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".addFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".masterListFields"] = array();
$tdataPMT_COMMAND[".masterListFields"][] = "id";
$tdataPMT_COMMAND[".masterListFields"][] = "cmd";
$tdataPMT_COMMAND[".masterListFields"][] = "lang";
$tdataPMT_COMMAND[".masterListFields"][] = "detail";
$tdataPMT_COMMAND[".masterListFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".masterListFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".inlineAddFields"] = array();
$tdataPMT_COMMAND[".inlineAddFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".inlineAddFields"][] = "mysqlfunction";
$tdataPMT_COMMAND[".inlineAddFields"][] = "detail";
$tdataPMT_COMMAND[".inlineAddFields"][] = "cmd";
$tdataPMT_COMMAND[".inlineAddFields"][] = "lang";

$tdataPMT_COMMAND[".editFields"] = array();
$tdataPMT_COMMAND[".editFields"][] = "cmd";
$tdataPMT_COMMAND[".editFields"][] = "lang";
$tdataPMT_COMMAND[".editFields"][] = "detail";
$tdataPMT_COMMAND[".editFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".editFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".inlineEditFields"] = array();
$tdataPMT_COMMAND[".inlineEditFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".inlineEditFields"][] = "mysqlfunction";
$tdataPMT_COMMAND[".inlineEditFields"][] = "detail";
$tdataPMT_COMMAND[".inlineEditFields"][] = "cmd";
$tdataPMT_COMMAND[".inlineEditFields"][] = "lang";

$tdataPMT_COMMAND[".updateSelectedFields"] = array();
$tdataPMT_COMMAND[".updateSelectedFields"][] = "cmd";
$tdataPMT_COMMAND[".updateSelectedFields"][] = "lang";
$tdataPMT_COMMAND[".updateSelectedFields"][] = "detail";


$tdataPMT_COMMAND[".exportFields"] = array();
$tdataPMT_COMMAND[".exportFields"][] = "id";
$tdataPMT_COMMAND[".exportFields"][] = "cmd";
$tdataPMT_COMMAND[".exportFields"][] = "lang";
$tdataPMT_COMMAND[".exportFields"][] = "detail";
$tdataPMT_COMMAND[".exportFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".exportFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".importFields"] = array();
$tdataPMT_COMMAND[".importFields"][] = "id";
$tdataPMT_COMMAND[".importFields"][] = "cmd";
$tdataPMT_COMMAND[".importFields"][] = "lang";
$tdataPMT_COMMAND[".importFields"][] = "detail";
$tdataPMT_COMMAND[".importFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".importFields"][] = "mysqlfunction";

$tdataPMT_COMMAND[".printFields"] = array();
$tdataPMT_COMMAND[".printFields"][] = "id";
$tdataPMT_COMMAND[".printFields"][] = "cmd";
$tdataPMT_COMMAND[".printFields"][] = "lang";
$tdataPMT_COMMAND[".printFields"][] = "detail";
$tdataPMT_COMMAND[".printFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND[".printFields"][] = "mysqlfunction";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND","id");
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




	$tdataPMT_COMMAND["id"] = $fdata;
//	cmd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cmd";
	$fdata["GoodName"] = "cmd";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND","cmd");
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

		$fdata["strField"] = "cmd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cmd";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 300;
			$edata["nCols"] = 500;

	
	
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




	$tdataPMT_COMMAND["cmd"] = $fdata;
//	lang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lang";
	$fdata["GoodName"] = "lang";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND","lang");
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

		$fdata["strField"] = "lang";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lang";

	
	
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




	$tdataPMT_COMMAND["lang"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND","detail");
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

		$fdata["strField"] = "detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detail";

	
	
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




	$tdataPMT_COMMAND["detail"] = $fdata;
//	mysqlfunctionname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mysqlfunctionname";
	$fdata["GoodName"] = "mysqlfunctionname";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND","mysqlfunctionname");
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

		$fdata["strField"] = "mysqlfunctionname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mysqlfunctionname";

	
	
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




	$tdataPMT_COMMAND["mysqlfunctionname"] = $fdata;
//	mysqlfunction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mysqlfunction";
	$fdata["GoodName"] = "mysqlfunction";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND","mysqlfunction");
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

		$fdata["strField"] = "mysqlfunction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mysqlfunction";

	
	
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




	$tdataPMT_COMMAND["mysqlfunction"] = $fdata;


$tables_data["PMT_COMMAND"]=&$tdataPMT_COMMAND;
$field_labels["PMT_COMMAND"] = &$fieldLabelsPMT_COMMAND;
$fieldToolTips["PMT_COMMAND"] = &$fieldToolTipsPMT_COMMAND;
$placeHolders["PMT_COMMAND"] = &$placeHoldersPMT_COMMAND;
$page_titles["PMT_COMMAND"] = &$pageTitlesPMT_COMMAND;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_COMMAND"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_COMMAND"] = array();


	
				$strOriginalDetailsTable="PMT_MENU";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_MENU";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_MENU";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PMT_COMMAND"][0] = $masterParams;
				$masterTablesData["PMT_COMMAND"][0]["masterKeys"] = array();
	$masterTablesData["PMT_COMMAND"][0]["masterKeys"][]="MENU_ID";
				$masterTablesData["PMT_COMMAND"][0]["detailKeys"] = array();
	$masterTablesData["PMT_COMMAND"][0]["detailKeys"][]="cmd";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_COMMAND()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	cmd,  	lang,  	detail,  	mysqlfunctionname,  	mysqlfunction";
$proto0["m_strFrom"] = "FROM PMT_COMMAND";
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
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "PMT_COMMAND";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cmd",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND"
));

$proto8["m_sql"] = "cmd";
$proto8["m_srcTableName"] = "PMT_COMMAND";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lang",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND"
));

$proto10["m_sql"] = "lang";
$proto10["m_srcTableName"] = "PMT_COMMAND";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND"
));

$proto12["m_sql"] = "detail";
$proto12["m_srcTableName"] = "PMT_COMMAND";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mysqlfunctionname",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND"
));

$proto14["m_sql"] = "mysqlfunctionname";
$proto14["m_srcTableName"] = "PMT_COMMAND";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mysqlfunction",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND"
));

$proto16["m_sql"] = "mysqlfunction";
$proto16["m_srcTableName"] = "PMT_COMMAND";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "PMT_COMMAND";
$proto19["m_srcTableName"] = "PMT_COMMAND";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "cmd";
$proto19["m_columns"][] = "lang";
$proto19["m_columns"][] = "detail";
$proto19["m_columns"][] = "mysqlfunctionname";
$proto19["m_columns"][] = "mysqlfunction";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "PMT_COMMAND";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "PMT_COMMAND";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_COMMAND";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_COMMAND = createSqlQuery_PMT_COMMAND();


	
						;

						

$tdataPMT_COMMAND[".sqlquery"] = $queryData_PMT_COMMAND;

$tableEvents["PMT_COMMAND"] = new eventsBase;
$tdataPMT_COMMAND[".hasEvents"] = false;

?>
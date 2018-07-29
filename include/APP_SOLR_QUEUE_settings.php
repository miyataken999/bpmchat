<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_SOLR_QUEUE = array();
	$tdataAPP_SOLR_QUEUE[".truncateText"] = true;
	$tdataAPP_SOLR_QUEUE[".NumberOfChars"] = 20;
	$tdataAPP_SOLR_QUEUE[".ShortName"] = "APP_SOLR_QUEUE";
	$tdataAPP_SOLR_QUEUE[".OwnerID"] = "";
	$tdataAPP_SOLR_QUEUE[".OriginalTable"] = "APP_SOLR_QUEUE";

//	field labels
$fieldLabelsAPP_SOLR_QUEUE = array();
$fieldToolTipsAPP_SOLR_QUEUE = array();
$pageTitlesAPP_SOLR_QUEUE = array();
$placeHoldersAPP_SOLR_QUEUE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_SOLR_QUEUE["Japanese"] = array();
	$fieldToolTipsAPP_SOLR_QUEUE["Japanese"] = array();
	$placeHoldersAPP_SOLR_QUEUE["Japanese"] = array();
	$pageTitlesAPP_SOLR_QUEUE["Japanese"] = array();
	$fieldLabelsAPP_SOLR_QUEUE["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_SOLR_QUEUE["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_SOLR_QUEUE["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_SOLR_QUEUE["Japanese"]["APP_CHANGE_DATE"] = "アプリの変更日";
	$fieldToolTipsAPP_SOLR_QUEUE["Japanese"]["APP_CHANGE_DATE"] = "";
	$placeHoldersAPP_SOLR_QUEUE["Japanese"]["APP_CHANGE_DATE"] = "";
	$fieldLabelsAPP_SOLR_QUEUE["Japanese"]["APP_CHANGE_TRACE"] = "アプリの変更トレース";
	$fieldToolTipsAPP_SOLR_QUEUE["Japanese"]["APP_CHANGE_TRACE"] = "";
	$placeHoldersAPP_SOLR_QUEUE["Japanese"]["APP_CHANGE_TRACE"] = "";
	$fieldLabelsAPP_SOLR_QUEUE["Japanese"]["APP_UPDATED"] = "アプリ更新";
	$fieldToolTipsAPP_SOLR_QUEUE["Japanese"]["APP_UPDATED"] = "";
	$placeHoldersAPP_SOLR_QUEUE["Japanese"]["APP_UPDATED"] = "";
	if (count($fieldToolTipsAPP_SOLR_QUEUE["Japanese"]))
		$tdataAPP_SOLR_QUEUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_SOLR_QUEUE["English"] = array();
	$fieldToolTipsAPP_SOLR_QUEUE["English"] = array();
	$placeHoldersAPP_SOLR_QUEUE["English"] = array();
	$pageTitlesAPP_SOLR_QUEUE["English"] = array();
	$fieldLabelsAPP_SOLR_QUEUE["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_SOLR_QUEUE["English"]["APP_UID"] = "";
	$placeHoldersAPP_SOLR_QUEUE["English"]["APP_UID"] = "";
	$fieldLabelsAPP_SOLR_QUEUE["English"]["APP_CHANGE_DATE"] = "アプリの変更日";
	$fieldToolTipsAPP_SOLR_QUEUE["English"]["APP_CHANGE_DATE"] = "";
	$placeHoldersAPP_SOLR_QUEUE["English"]["APP_CHANGE_DATE"] = "";
	$fieldLabelsAPP_SOLR_QUEUE["English"]["APP_CHANGE_TRACE"] = "アプリの変更トレース";
	$fieldToolTipsAPP_SOLR_QUEUE["English"]["APP_CHANGE_TRACE"] = "";
	$placeHoldersAPP_SOLR_QUEUE["English"]["APP_CHANGE_TRACE"] = "";
	$fieldLabelsAPP_SOLR_QUEUE["English"]["APP_UPDATED"] = "アプリ更新";
	$fieldToolTipsAPP_SOLR_QUEUE["English"]["APP_UPDATED"] = "";
	$placeHoldersAPP_SOLR_QUEUE["English"]["APP_UPDATED"] = "";
	if (count($fieldToolTipsAPP_SOLR_QUEUE["English"]))
		$tdataAPP_SOLR_QUEUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_SOLR_QUEUE[""] = array();
	$fieldToolTipsAPP_SOLR_QUEUE[""] = array();
	$placeHoldersAPP_SOLR_QUEUE[""] = array();
	$pageTitlesAPP_SOLR_QUEUE[""] = array();
	if (count($fieldToolTipsAPP_SOLR_QUEUE[""]))
		$tdataAPP_SOLR_QUEUE[".isUseToolTips"] = true;
}


	$tdataAPP_SOLR_QUEUE[".NCSearch"] = true;



$tdataAPP_SOLR_QUEUE[".shortTableName"] = "APP_SOLR_QUEUE";
$tdataAPP_SOLR_QUEUE[".nSecOptions"] = 0;
$tdataAPP_SOLR_QUEUE[".recsPerRowPrint"] = 1;
$tdataAPP_SOLR_QUEUE[".mainTableOwnerID"] = "";
$tdataAPP_SOLR_QUEUE[".moveNext"] = 0;
$tdataAPP_SOLR_QUEUE[".entityType"] = 0;

$tdataAPP_SOLR_QUEUE[".strOriginalTableName"] = "APP_SOLR_QUEUE";

	



$tdataAPP_SOLR_QUEUE[".showAddInPopup"] = false;

$tdataAPP_SOLR_QUEUE[".showEditInPopup"] = false;

$tdataAPP_SOLR_QUEUE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_SOLR_QUEUE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_SOLR_QUEUE[".fieldsForRegister"] = array();
	
$tdataAPP_SOLR_QUEUE[".listAjax"] = false;

	$tdataAPP_SOLR_QUEUE[".audit"] = true;

	$tdataAPP_SOLR_QUEUE[".locking"] = false;

$tdataAPP_SOLR_QUEUE[".edit"] = true;
$tdataAPP_SOLR_QUEUE[".afterEditAction"] = 1;
$tdataAPP_SOLR_QUEUE[".closePopupAfterEdit"] = 1;
$tdataAPP_SOLR_QUEUE[".afterEditActionDetTable"] = "";

$tdataAPP_SOLR_QUEUE[".add"] = true;
$tdataAPP_SOLR_QUEUE[".afterAddAction"] = 1;
$tdataAPP_SOLR_QUEUE[".closePopupAfterAdd"] = 1;
$tdataAPP_SOLR_QUEUE[".afterAddActionDetTable"] = "";

$tdataAPP_SOLR_QUEUE[".list"] = true;

$tdataAPP_SOLR_QUEUE[".inlineEdit"] = true;


$tdataAPP_SOLR_QUEUE[".reorderRecordsByHeader"] = true;
$tdataAPP_SOLR_QUEUE[".createSortByDropdown"] = true;
$tdataAPP_SOLR_QUEUE[".strSortControlSettingsJSON"] = "";



$tdataAPP_SOLR_QUEUE[".inlineAdd"] = true;
$tdataAPP_SOLR_QUEUE[".view"] = true;

$tdataAPP_SOLR_QUEUE[".import"] = true;

$tdataAPP_SOLR_QUEUE[".exportTo"] = true;

$tdataAPP_SOLR_QUEUE[".printFriendly"] = true;

$tdataAPP_SOLR_QUEUE[".delete"] = true;

$tdataAPP_SOLR_QUEUE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_SOLR_QUEUE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_SOLR_QUEUE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_SOLR_QUEUE[".searchSaving"] = false;
//

$tdataAPP_SOLR_QUEUE[".showSearchPanel"] = true;
		$tdataAPP_SOLR_QUEUE[".flexibleSearch"] = true;

$tdataAPP_SOLR_QUEUE[".isUseAjaxSuggest"] = true;

$tdataAPP_SOLR_QUEUE[".rowHighlite"] = true;



				

$tdataAPP_SOLR_QUEUE[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_SOLR_QUEUE[".buttonsAdded"] = false;

$tdataAPP_SOLR_QUEUE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_SOLR_QUEUE[".isUseTimeForSearch"] = false;





$tdataAPP_SOLR_QUEUE[".allSearchFields"] = array();
$tdataAPP_SOLR_QUEUE[".filterFields"] = array();
$tdataAPP_SOLR_QUEUE[".requiredSearchFields"] = array();

$tdataAPP_SOLR_QUEUE[".allSearchFields"][] = "APP_UID";
	$tdataAPP_SOLR_QUEUE[".allSearchFields"][] = "APP_CHANGE_DATE";
	$tdataAPP_SOLR_QUEUE[".allSearchFields"][] = "APP_CHANGE_TRACE";
	$tdataAPP_SOLR_QUEUE[".allSearchFields"][] = "APP_UPDATED";
	

$tdataAPP_SOLR_QUEUE[".googleLikeFields"] = array();
$tdataAPP_SOLR_QUEUE[".googleLikeFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".googleLikeFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".googleLikeFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".googleLikeFields"][] = "APP_UPDATED";


$tdataAPP_SOLR_QUEUE[".advSearchFields"] = array();
$tdataAPP_SOLR_QUEUE[".advSearchFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".advSearchFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".advSearchFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".advSearchFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".tableType"] = "list";

$tdataAPP_SOLR_QUEUE[".printerPageOrientation"] = 0;
$tdataAPP_SOLR_QUEUE[".nPrinterPageScale"] = 100;

$tdataAPP_SOLR_QUEUE[".nPrinterSplitRecords"] = 40;

$tdataAPP_SOLR_QUEUE[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_SOLR_QUEUE[".geocodingEnabled"] = false;





$tdataAPP_SOLR_QUEUE[".listGridLayout"] = 3;


$tdataAPP_SOLR_QUEUE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_SOLR_QUEUE[".pageSize"] = 20;

$tdataAPP_SOLR_QUEUE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_SOLR_QUEUE[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_SOLR_QUEUE[".orderindexes"] = array();

$tdataAPP_SOLR_QUEUE[".sqlHead"] = "SELECT APP_UID,  	APP_CHANGE_DATE,  	APP_CHANGE_TRACE,  	APP_UPDATED";
$tdataAPP_SOLR_QUEUE[".sqlFrom"] = "FROM APP_SOLR_QUEUE";
$tdataAPP_SOLR_QUEUE[".sqlWhereExpr"] = "";
$tdataAPP_SOLR_QUEUE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_SOLR_QUEUE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_SOLR_QUEUE[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_SOLR_QUEUE[".highlightSearchResults"] = true;

$tableKeysAPP_SOLR_QUEUE = array();
$tableKeysAPP_SOLR_QUEUE[] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".Keys"] = $tableKeysAPP_SOLR_QUEUE;

$tdataAPP_SOLR_QUEUE[".listFields"] = array();
$tdataAPP_SOLR_QUEUE[".listFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".listFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".listFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".listFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".hideMobileList"] = array();


$tdataAPP_SOLR_QUEUE[".viewFields"] = array();
$tdataAPP_SOLR_QUEUE[".viewFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".viewFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".viewFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".viewFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".addFields"] = array();
$tdataAPP_SOLR_QUEUE[".addFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".addFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".addFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".addFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".masterListFields"] = array();
$tdataAPP_SOLR_QUEUE[".masterListFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".masterListFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".masterListFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".masterListFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".inlineAddFields"] = array();
$tdataAPP_SOLR_QUEUE[".inlineAddFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".inlineAddFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".inlineAddFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".inlineAddFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".editFields"] = array();
$tdataAPP_SOLR_QUEUE[".editFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".editFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".editFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".editFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".inlineEditFields"] = array();
$tdataAPP_SOLR_QUEUE[".inlineEditFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".inlineEditFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".inlineEditFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".inlineEditFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".updateSelectedFields"] = array();
$tdataAPP_SOLR_QUEUE[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".updateSelectedFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".updateSelectedFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".updateSelectedFields"][] = "APP_UPDATED";


$tdataAPP_SOLR_QUEUE[".exportFields"] = array();
$tdataAPP_SOLR_QUEUE[".exportFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".exportFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".exportFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".exportFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".importFields"] = array();
$tdataAPP_SOLR_QUEUE[".importFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".importFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".importFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".importFields"][] = "APP_UPDATED";

$tdataAPP_SOLR_QUEUE[".printFields"] = array();
$tdataAPP_SOLR_QUEUE[".printFields"][] = "APP_UID";
$tdataAPP_SOLR_QUEUE[".printFields"][] = "APP_CHANGE_DATE";
$tdataAPP_SOLR_QUEUE[".printFields"][] = "APP_CHANGE_TRACE";
$tdataAPP_SOLR_QUEUE[".printFields"][] = "APP_UPDATED";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_SOLR_QUEUE";
	$fdata["Label"] = GetFieldLabel("APP_SOLR_QUEUE","APP_UID");
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

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_SOLR_QUEUE["APP_UID"] = $fdata;
//	APP_CHANGE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_CHANGE_DATE";
	$fdata["GoodName"] = "APP_CHANGE_DATE";
	$fdata["ownerTable"] = "APP_SOLR_QUEUE";
	$fdata["Label"] = GetFieldLabel("APP_SOLR_QUEUE","APP_CHANGE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "APP_CHANGE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CHANGE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_SOLR_QUEUE["APP_CHANGE_DATE"] = $fdata;
//	APP_CHANGE_TRACE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_CHANGE_TRACE";
	$fdata["GoodName"] = "APP_CHANGE_TRACE";
	$fdata["ownerTable"] = "APP_SOLR_QUEUE";
	$fdata["Label"] = GetFieldLabel("APP_SOLR_QUEUE","APP_CHANGE_TRACE");
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

		$fdata["strField"] = "APP_CHANGE_TRACE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CHANGE_TRACE";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_SOLR_QUEUE["APP_CHANGE_TRACE"] = $fdata;
//	APP_UPDATED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_UPDATED";
	$fdata["GoodName"] = "APP_UPDATED";
	$fdata["ownerTable"] = "APP_SOLR_QUEUE";
	$fdata["Label"] = GetFieldLabel("APP_SOLR_QUEUE","APP_UPDATED");
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

		$fdata["strField"] = "APP_UPDATED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UPDATED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_SOLR_QUEUE["APP_UPDATED"] = $fdata;


$tables_data["APP_SOLR_QUEUE"]=&$tdataAPP_SOLR_QUEUE;
$field_labels["APP_SOLR_QUEUE"] = &$fieldLabelsAPP_SOLR_QUEUE;
$fieldToolTips["APP_SOLR_QUEUE"] = &$fieldToolTipsAPP_SOLR_QUEUE;
$placeHolders["APP_SOLR_QUEUE"] = &$placeHoldersAPP_SOLR_QUEUE;
$page_titles["APP_SOLR_QUEUE"] = &$pageTitlesAPP_SOLR_QUEUE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_SOLR_QUEUE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_SOLR_QUEUE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_SOLR_QUEUE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_CHANGE_DATE,  	APP_CHANGE_TRACE,  	APP_UPDATED";
$proto0["m_strFrom"] = "FROM APP_SOLR_QUEUE";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "APP_SOLR_QUEUE",
	"m_srcTableName" => "APP_SOLR_QUEUE"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_SOLR_QUEUE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CHANGE_DATE",
	"m_strTable" => "APP_SOLR_QUEUE",
	"m_srcTableName" => "APP_SOLR_QUEUE"
));

$proto8["m_sql"] = "APP_CHANGE_DATE";
$proto8["m_srcTableName"] = "APP_SOLR_QUEUE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CHANGE_TRACE",
	"m_strTable" => "APP_SOLR_QUEUE",
	"m_srcTableName" => "APP_SOLR_QUEUE"
));

$proto10["m_sql"] = "APP_CHANGE_TRACE";
$proto10["m_srcTableName"] = "APP_SOLR_QUEUE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATED",
	"m_strTable" => "APP_SOLR_QUEUE",
	"m_srcTableName" => "APP_SOLR_QUEUE"
));

$proto12["m_sql"] = "APP_UPDATED";
$proto12["m_srcTableName"] = "APP_SOLR_QUEUE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "APP_SOLR_QUEUE";
$proto15["m_srcTableName"] = "APP_SOLR_QUEUE";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "APP_UID";
$proto15["m_columns"][] = "APP_CHANGE_DATE";
$proto15["m_columns"][] = "APP_CHANGE_TRACE";
$proto15["m_columns"][] = "APP_UPDATED";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "APP_SOLR_QUEUE";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "APP_SOLR_QUEUE";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_SOLR_QUEUE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_SOLR_QUEUE = createSqlQuery_APP_SOLR_QUEUE();


	
						;

				

$tdataAPP_SOLR_QUEUE[".sqlquery"] = $queryData_APP_SOLR_QUEUE;

$tableEvents["APP_SOLR_QUEUE"] = new eventsBase;
$tdataAPP_SOLR_QUEUE[".hasEvents"] = false;

?>
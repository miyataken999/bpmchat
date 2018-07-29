<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_THREAD = array();
	$tdataAPP_THREAD[".truncateText"] = true;
	$tdataAPP_THREAD[".NumberOfChars"] = 20;
	$tdataAPP_THREAD[".ShortName"] = "APP_THREAD";
	$tdataAPP_THREAD[".OwnerID"] = "";
	$tdataAPP_THREAD[".OriginalTable"] = "APP_THREAD";

//	field labels
$fieldLabelsAPP_THREAD = array();
$fieldToolTipsAPP_THREAD = array();
$pageTitlesAPP_THREAD = array();
$placeHoldersAPP_THREAD = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_THREAD["Japanese"] = array();
	$fieldToolTipsAPP_THREAD["Japanese"] = array();
	$placeHoldersAPP_THREAD["Japanese"] = array();
	$pageTitlesAPP_THREAD["Japanese"] = array();
	$fieldLabelsAPP_THREAD["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_THREAD["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_THREAD["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_THREAD["Japanese"]["APP_THREAD_INDEX"] = "アプリのスレッドインデックス";
	$fieldToolTipsAPP_THREAD["Japanese"]["APP_THREAD_INDEX"] = "";
	$placeHoldersAPP_THREAD["Japanese"]["APP_THREAD_INDEX"] = "";
	$fieldLabelsAPP_THREAD["Japanese"]["APP_THREAD_PARENT"] = "アプリのスレッドの親";
	$fieldToolTipsAPP_THREAD["Japanese"]["APP_THREAD_PARENT"] = "";
	$placeHoldersAPP_THREAD["Japanese"]["APP_THREAD_PARENT"] = "";
	$fieldLabelsAPP_THREAD["Japanese"]["APP_THREAD_STATUS"] = "アプリのスレッドの状態";
	$fieldToolTipsAPP_THREAD["Japanese"]["APP_THREAD_STATUS"] = "";
	$placeHoldersAPP_THREAD["Japanese"]["APP_THREAD_STATUS"] = "";
	$fieldLabelsAPP_THREAD["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_THREAD["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_THREAD["Japanese"]["DEL_INDEX"] = "";
	if (count($fieldToolTipsAPP_THREAD["Japanese"]))
		$tdataAPP_THREAD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_THREAD["English"] = array();
	$fieldToolTipsAPP_THREAD["English"] = array();
	$placeHoldersAPP_THREAD["English"] = array();
	$pageTitlesAPP_THREAD["English"] = array();
	$fieldLabelsAPP_THREAD["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_THREAD["English"]["APP_UID"] = "";
	$placeHoldersAPP_THREAD["English"]["APP_UID"] = "";
	$fieldLabelsAPP_THREAD["English"]["APP_THREAD_INDEX"] = "アプリのスレッドインデックス";
	$fieldToolTipsAPP_THREAD["English"]["APP_THREAD_INDEX"] = "";
	$placeHoldersAPP_THREAD["English"]["APP_THREAD_INDEX"] = "";
	$fieldLabelsAPP_THREAD["English"]["APP_THREAD_PARENT"] = "アプリのスレッドの親";
	$fieldToolTipsAPP_THREAD["English"]["APP_THREAD_PARENT"] = "";
	$placeHoldersAPP_THREAD["English"]["APP_THREAD_PARENT"] = "";
	$fieldLabelsAPP_THREAD["English"]["APP_THREAD_STATUS"] = "アプリのスレッドの状態";
	$fieldToolTipsAPP_THREAD["English"]["APP_THREAD_STATUS"] = "";
	$placeHoldersAPP_THREAD["English"]["APP_THREAD_STATUS"] = "";
	$fieldLabelsAPP_THREAD["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_THREAD["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_THREAD["English"]["DEL_INDEX"] = "";
	if (count($fieldToolTipsAPP_THREAD["English"]))
		$tdataAPP_THREAD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_THREAD[""] = array();
	$fieldToolTipsAPP_THREAD[""] = array();
	$placeHoldersAPP_THREAD[""] = array();
	$pageTitlesAPP_THREAD[""] = array();
	if (count($fieldToolTipsAPP_THREAD[""]))
		$tdataAPP_THREAD[".isUseToolTips"] = true;
}


	$tdataAPP_THREAD[".NCSearch"] = true;



$tdataAPP_THREAD[".shortTableName"] = "APP_THREAD";
$tdataAPP_THREAD[".nSecOptions"] = 0;
$tdataAPP_THREAD[".recsPerRowPrint"] = 1;
$tdataAPP_THREAD[".mainTableOwnerID"] = "";
$tdataAPP_THREAD[".moveNext"] = 0;
$tdataAPP_THREAD[".entityType"] = 0;

$tdataAPP_THREAD[".strOriginalTableName"] = "APP_THREAD";

	



$tdataAPP_THREAD[".showAddInPopup"] = false;

$tdataAPP_THREAD[".showEditInPopup"] = false;

$tdataAPP_THREAD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_THREAD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_THREAD[".fieldsForRegister"] = array();
	
$tdataAPP_THREAD[".listAjax"] = false;

	$tdataAPP_THREAD[".audit"] = true;

	$tdataAPP_THREAD[".locking"] = false;

$tdataAPP_THREAD[".edit"] = true;
$tdataAPP_THREAD[".afterEditAction"] = 1;
$tdataAPP_THREAD[".closePopupAfterEdit"] = 1;
$tdataAPP_THREAD[".afterEditActionDetTable"] = "";

$tdataAPP_THREAD[".add"] = true;
$tdataAPP_THREAD[".afterAddAction"] = 1;
$tdataAPP_THREAD[".closePopupAfterAdd"] = 1;
$tdataAPP_THREAD[".afterAddActionDetTable"] = "";

$tdataAPP_THREAD[".list"] = true;

$tdataAPP_THREAD[".inlineEdit"] = true;


$tdataAPP_THREAD[".reorderRecordsByHeader"] = true;
$tdataAPP_THREAD[".createSortByDropdown"] = true;
$tdataAPP_THREAD[".strSortControlSettingsJSON"] = "";



$tdataAPP_THREAD[".inlineAdd"] = true;
$tdataAPP_THREAD[".view"] = true;

$tdataAPP_THREAD[".import"] = true;

$tdataAPP_THREAD[".exportTo"] = true;

$tdataAPP_THREAD[".printFriendly"] = true;

$tdataAPP_THREAD[".delete"] = true;

$tdataAPP_THREAD[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_THREAD[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_THREAD[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_THREAD[".searchSaving"] = false;
//

$tdataAPP_THREAD[".showSearchPanel"] = true;
		$tdataAPP_THREAD[".flexibleSearch"] = true;

$tdataAPP_THREAD[".isUseAjaxSuggest"] = true;

$tdataAPP_THREAD[".rowHighlite"] = true;



				

$tdataAPP_THREAD[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_THREAD[".buttonsAdded"] = false;

$tdataAPP_THREAD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_THREAD[".isUseTimeForSearch"] = false;





$tdataAPP_THREAD[".allSearchFields"] = array();
$tdataAPP_THREAD[".filterFields"] = array();
$tdataAPP_THREAD[".requiredSearchFields"] = array();

$tdataAPP_THREAD[".allSearchFields"][] = "APP_UID";
	$tdataAPP_THREAD[".allSearchFields"][] = "APP_THREAD_INDEX";
	$tdataAPP_THREAD[".allSearchFields"][] = "APP_THREAD_PARENT";
	$tdataAPP_THREAD[".allSearchFields"][] = "APP_THREAD_STATUS";
	$tdataAPP_THREAD[".allSearchFields"][] = "DEL_INDEX";
	

$tdataAPP_THREAD[".googleLikeFields"] = array();
$tdataAPP_THREAD[".googleLikeFields"][] = "APP_UID";
$tdataAPP_THREAD[".googleLikeFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".googleLikeFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".googleLikeFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".googleLikeFields"][] = "DEL_INDEX";


$tdataAPP_THREAD[".advSearchFields"] = array();
$tdataAPP_THREAD[".advSearchFields"][] = "APP_UID";
$tdataAPP_THREAD[".advSearchFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".advSearchFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".advSearchFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".advSearchFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".tableType"] = "list";

$tdataAPP_THREAD[".printerPageOrientation"] = 0;
$tdataAPP_THREAD[".nPrinterPageScale"] = 100;

$tdataAPP_THREAD[".nPrinterSplitRecords"] = 40;

$tdataAPP_THREAD[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_THREAD[".geocodingEnabled"] = false;





$tdataAPP_THREAD[".listGridLayout"] = 3;


$tdataAPP_THREAD[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_THREAD[".pageSize"] = 20;

$tdataAPP_THREAD[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_THREAD[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_THREAD[".orderindexes"] = array();

$tdataAPP_THREAD[".sqlHead"] = "SELECT APP_UID,  	APP_THREAD_INDEX,  	APP_THREAD_PARENT,  	APP_THREAD_STATUS,  	DEL_INDEX";
$tdataAPP_THREAD[".sqlFrom"] = "FROM APP_THREAD";
$tdataAPP_THREAD[".sqlWhereExpr"] = "";
$tdataAPP_THREAD[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_THREAD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_THREAD[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_THREAD[".highlightSearchResults"] = true;

$tableKeysAPP_THREAD = array();
$tableKeysAPP_THREAD[] = "APP_UID";
$tableKeysAPP_THREAD[] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".Keys"] = $tableKeysAPP_THREAD;

$tdataAPP_THREAD[".listFields"] = array();
$tdataAPP_THREAD[".listFields"][] = "APP_UID";
$tdataAPP_THREAD[".listFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".listFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".listFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".listFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".hideMobileList"] = array();


$tdataAPP_THREAD[".viewFields"] = array();
$tdataAPP_THREAD[".viewFields"][] = "APP_UID";
$tdataAPP_THREAD[".viewFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".viewFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".viewFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".viewFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".addFields"] = array();
$tdataAPP_THREAD[".addFields"][] = "APP_UID";
$tdataAPP_THREAD[".addFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".addFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".addFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".addFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".masterListFields"] = array();
$tdataAPP_THREAD[".masterListFields"][] = "APP_UID";
$tdataAPP_THREAD[".masterListFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".masterListFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".masterListFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".masterListFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".inlineAddFields"] = array();
$tdataAPP_THREAD[".inlineAddFields"][] = "APP_UID";
$tdataAPP_THREAD[".inlineAddFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".inlineAddFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".inlineAddFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".inlineAddFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".editFields"] = array();
$tdataAPP_THREAD[".editFields"][] = "APP_UID";
$tdataAPP_THREAD[".editFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".editFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".editFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".editFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".inlineEditFields"] = array();
$tdataAPP_THREAD[".inlineEditFields"][] = "APP_UID";
$tdataAPP_THREAD[".inlineEditFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".inlineEditFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".inlineEditFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".inlineEditFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".updateSelectedFields"] = array();
$tdataAPP_THREAD[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_THREAD[".updateSelectedFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".updateSelectedFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".updateSelectedFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".updateSelectedFields"][] = "DEL_INDEX";


$tdataAPP_THREAD[".exportFields"] = array();
$tdataAPP_THREAD[".exportFields"][] = "APP_UID";
$tdataAPP_THREAD[".exportFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".exportFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".exportFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".exportFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".importFields"] = array();
$tdataAPP_THREAD[".importFields"][] = "APP_UID";
$tdataAPP_THREAD[".importFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".importFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".importFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".importFields"][] = "DEL_INDEX";

$tdataAPP_THREAD[".printFields"] = array();
$tdataAPP_THREAD[".printFields"][] = "APP_UID";
$tdataAPP_THREAD[".printFields"][] = "APP_THREAD_INDEX";
$tdataAPP_THREAD[".printFields"][] = "APP_THREAD_PARENT";
$tdataAPP_THREAD[".printFields"][] = "APP_THREAD_STATUS";
$tdataAPP_THREAD[".printFields"][] = "DEL_INDEX";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_THREAD";
	$fdata["Label"] = GetFieldLabel("APP_THREAD","APP_UID");
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




	$tdataAPP_THREAD["APP_UID"] = $fdata;
//	APP_THREAD_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_THREAD_INDEX";
	$fdata["GoodName"] = "APP_THREAD_INDEX";
	$fdata["ownerTable"] = "APP_THREAD";
	$fdata["Label"] = GetFieldLabel("APP_THREAD","APP_THREAD_INDEX");
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

		$fdata["strField"] = "APP_THREAD_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_THREAD_INDEX";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_THREAD["APP_THREAD_INDEX"] = $fdata;
//	APP_THREAD_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_THREAD_PARENT";
	$fdata["GoodName"] = "APP_THREAD_PARENT";
	$fdata["ownerTable"] = "APP_THREAD";
	$fdata["Label"] = GetFieldLabel("APP_THREAD","APP_THREAD_PARENT");
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

		$fdata["strField"] = "APP_THREAD_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_THREAD_PARENT";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_THREAD["APP_THREAD_PARENT"] = $fdata;
//	APP_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_THREAD_STATUS";
	$fdata["GoodName"] = "APP_THREAD_STATUS";
	$fdata["ownerTable"] = "APP_THREAD";
	$fdata["Label"] = GetFieldLabel("APP_THREAD","APP_THREAD_STATUS");
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

		$fdata["strField"] = "APP_THREAD_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_THREAD_STATUS";

	
	
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




	$tdataAPP_THREAD["APP_THREAD_STATUS"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_THREAD";
	$fdata["Label"] = GetFieldLabel("APP_THREAD","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_THREAD["DEL_INDEX"] = $fdata;


$tables_data["APP_THREAD"]=&$tdataAPP_THREAD;
$field_labels["APP_THREAD"] = &$fieldLabelsAPP_THREAD;
$fieldToolTips["APP_THREAD"] = &$fieldToolTipsAPP_THREAD;
$placeHolders["APP_THREAD"] = &$placeHoldersAPP_THREAD;
$page_titles["APP_THREAD"] = &$pageTitlesAPP_THREAD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_THREAD"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_THREAD"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_THREAD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_THREAD_INDEX,  	APP_THREAD_PARENT,  	APP_THREAD_STATUS,  	DEL_INDEX";
$proto0["m_strFrom"] = "FROM APP_THREAD";
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
	"m_strTable" => "APP_THREAD",
	"m_srcTableName" => "APP_THREAD"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_THREAD";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_THREAD_INDEX",
	"m_strTable" => "APP_THREAD",
	"m_srcTableName" => "APP_THREAD"
));

$proto8["m_sql"] = "APP_THREAD_INDEX";
$proto8["m_srcTableName"] = "APP_THREAD";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_THREAD_PARENT",
	"m_strTable" => "APP_THREAD",
	"m_srcTableName" => "APP_THREAD"
));

$proto10["m_sql"] = "APP_THREAD_PARENT";
$proto10["m_srcTableName"] = "APP_THREAD";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_THREAD_STATUS",
	"m_strTable" => "APP_THREAD",
	"m_srcTableName" => "APP_THREAD"
));

$proto12["m_sql"] = "APP_THREAD_STATUS";
$proto12["m_srcTableName"] = "APP_THREAD";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_THREAD",
	"m_srcTableName" => "APP_THREAD"
));

$proto14["m_sql"] = "DEL_INDEX";
$proto14["m_srcTableName"] = "APP_THREAD";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "APP_THREAD";
$proto17["m_srcTableName"] = "APP_THREAD";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "APP_UID";
$proto17["m_columns"][] = "APP_THREAD_INDEX";
$proto17["m_columns"][] = "APP_THREAD_PARENT";
$proto17["m_columns"][] = "APP_THREAD_STATUS";
$proto17["m_columns"][] = "DEL_INDEX";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "APP_THREAD";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "APP_THREAD";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_THREAD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_THREAD = createSqlQuery_APP_THREAD();


	
						;

					

$tdataAPP_THREAD[".sqlquery"] = $queryData_APP_THREAD;

$tableEvents["APP_THREAD"] = new eventsBase;
$tdataAPP_THREAD[".hasEvents"] = false;

?>
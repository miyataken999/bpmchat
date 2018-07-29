<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_EVENT = array();
	$tdataAPP_EVENT[".truncateText"] = true;
	$tdataAPP_EVENT[".NumberOfChars"] = 20;
	$tdataAPP_EVENT[".ShortName"] = "APP_EVENT";
	$tdataAPP_EVENT[".OwnerID"] = "";
	$tdataAPP_EVENT[".OriginalTable"] = "APP_EVENT";

//	field labels
$fieldLabelsAPP_EVENT = array();
$fieldToolTipsAPP_EVENT = array();
$pageTitlesAPP_EVENT = array();
$placeHoldersAPP_EVENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_EVENT["Japanese"] = array();
	$fieldToolTipsAPP_EVENT["Japanese"] = array();
	$placeHoldersAPP_EVENT["Japanese"] = array();
	$pageTitlesAPP_EVENT["Japanese"] = array();
	$fieldLabelsAPP_EVENT["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_EVENT["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_EVENT["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_EVENT["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_EVENT["Japanese"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsAPP_EVENT["Japanese"]["EVN_UID"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["EVN_UID"] = "";
	$fieldLabelsAPP_EVENT["Japanese"]["APP_EVN_ACTION_DATE"] = "アプリEVNアクション日";
	$fieldToolTipsAPP_EVENT["Japanese"]["APP_EVN_ACTION_DATE"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["APP_EVN_ACTION_DATE"] = "";
	$fieldLabelsAPP_EVENT["Japanese"]["APP_EVN_ATTEMPTS"] = "アプリのEVNの試み";
	$fieldToolTipsAPP_EVENT["Japanese"]["APP_EVN_ATTEMPTS"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["APP_EVN_ATTEMPTS"] = "";
	$fieldLabelsAPP_EVENT["Japanese"]["APP_EVN_LAST_EXECUTION_DATE"] = "アプリEVN最後の実行日";
	$fieldToolTipsAPP_EVENT["Japanese"]["APP_EVN_LAST_EXECUTION_DATE"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["APP_EVN_LAST_EXECUTION_DATE"] = "";
	$fieldLabelsAPP_EVENT["Japanese"]["APP_EVN_STATUS"] = "アプリのEVNのステータス";
	$fieldToolTipsAPP_EVENT["Japanese"]["APP_EVN_STATUS"] = "";
	$placeHoldersAPP_EVENT["Japanese"]["APP_EVN_STATUS"] = "";
	if (count($fieldToolTipsAPP_EVENT["Japanese"]))
		$tdataAPP_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_EVENT["English"] = array();
	$fieldToolTipsAPP_EVENT["English"] = array();
	$placeHoldersAPP_EVENT["English"] = array();
	$pageTitlesAPP_EVENT["English"] = array();
	$fieldLabelsAPP_EVENT["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_EVENT["English"]["APP_UID"] = "";
	$placeHoldersAPP_EVENT["English"]["APP_UID"] = "";
	$fieldLabelsAPP_EVENT["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_EVENT["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_EVENT["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_EVENT["English"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsAPP_EVENT["English"]["EVN_UID"] = "";
	$placeHoldersAPP_EVENT["English"]["EVN_UID"] = "";
	$fieldLabelsAPP_EVENT["English"]["APP_EVN_ACTION_DATE"] = "アプリEVNアクション日";
	$fieldToolTipsAPP_EVENT["English"]["APP_EVN_ACTION_DATE"] = "";
	$placeHoldersAPP_EVENT["English"]["APP_EVN_ACTION_DATE"] = "";
	$fieldLabelsAPP_EVENT["English"]["APP_EVN_ATTEMPTS"] = "アプリのEVNの試み";
	$fieldToolTipsAPP_EVENT["English"]["APP_EVN_ATTEMPTS"] = "";
	$placeHoldersAPP_EVENT["English"]["APP_EVN_ATTEMPTS"] = "";
	$fieldLabelsAPP_EVENT["English"]["APP_EVN_LAST_EXECUTION_DATE"] = "アプリEVN最後の実行日";
	$fieldToolTipsAPP_EVENT["English"]["APP_EVN_LAST_EXECUTION_DATE"] = "";
	$placeHoldersAPP_EVENT["English"]["APP_EVN_LAST_EXECUTION_DATE"] = "";
	$fieldLabelsAPP_EVENT["English"]["APP_EVN_STATUS"] = "アプリのEVNのステータス";
	$fieldToolTipsAPP_EVENT["English"]["APP_EVN_STATUS"] = "";
	$placeHoldersAPP_EVENT["English"]["APP_EVN_STATUS"] = "";
	if (count($fieldToolTipsAPP_EVENT["English"]))
		$tdataAPP_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_EVENT[""] = array();
	$fieldToolTipsAPP_EVENT[""] = array();
	$placeHoldersAPP_EVENT[""] = array();
	$pageTitlesAPP_EVENT[""] = array();
	if (count($fieldToolTipsAPP_EVENT[""]))
		$tdataAPP_EVENT[".isUseToolTips"] = true;
}


	$tdataAPP_EVENT[".NCSearch"] = true;



$tdataAPP_EVENT[".shortTableName"] = "APP_EVENT";
$tdataAPP_EVENT[".nSecOptions"] = 0;
$tdataAPP_EVENT[".recsPerRowPrint"] = 1;
$tdataAPP_EVENT[".mainTableOwnerID"] = "";
$tdataAPP_EVENT[".moveNext"] = 0;
$tdataAPP_EVENT[".entityType"] = 0;

$tdataAPP_EVENT[".strOriginalTableName"] = "APP_EVENT";

	



$tdataAPP_EVENT[".showAddInPopup"] = false;

$tdataAPP_EVENT[".showEditInPopup"] = false;

$tdataAPP_EVENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_EVENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_EVENT[".fieldsForRegister"] = array();
	
$tdataAPP_EVENT[".listAjax"] = false;

	$tdataAPP_EVENT[".audit"] = true;

	$tdataAPP_EVENT[".locking"] = false;

$tdataAPP_EVENT[".edit"] = true;
$tdataAPP_EVENT[".afterEditAction"] = 1;
$tdataAPP_EVENT[".closePopupAfterEdit"] = 1;
$tdataAPP_EVENT[".afterEditActionDetTable"] = "";

$tdataAPP_EVENT[".add"] = true;
$tdataAPP_EVENT[".afterAddAction"] = 1;
$tdataAPP_EVENT[".closePopupAfterAdd"] = 1;
$tdataAPP_EVENT[".afterAddActionDetTable"] = "";

$tdataAPP_EVENT[".list"] = true;

$tdataAPP_EVENT[".inlineEdit"] = true;


$tdataAPP_EVENT[".reorderRecordsByHeader"] = true;
$tdataAPP_EVENT[".createSortByDropdown"] = true;
$tdataAPP_EVENT[".strSortControlSettingsJSON"] = "";



$tdataAPP_EVENT[".inlineAdd"] = true;
$tdataAPP_EVENT[".view"] = true;

$tdataAPP_EVENT[".import"] = true;

$tdataAPP_EVENT[".exportTo"] = true;

$tdataAPP_EVENT[".printFriendly"] = true;

$tdataAPP_EVENT[".delete"] = true;

$tdataAPP_EVENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_EVENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_EVENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_EVENT[".searchSaving"] = false;
//

$tdataAPP_EVENT[".showSearchPanel"] = true;
		$tdataAPP_EVENT[".flexibleSearch"] = true;

$tdataAPP_EVENT[".isUseAjaxSuggest"] = true;

$tdataAPP_EVENT[".rowHighlite"] = true;



				

$tdataAPP_EVENT[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_EVENT[".buttonsAdded"] = false;

$tdataAPP_EVENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_EVENT[".isUseTimeForSearch"] = false;





$tdataAPP_EVENT[".allSearchFields"] = array();
$tdataAPP_EVENT[".filterFields"] = array();
$tdataAPP_EVENT[".requiredSearchFields"] = array();

$tdataAPP_EVENT[".allSearchFields"][] = "APP_UID";
	$tdataAPP_EVENT[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_EVENT[".allSearchFields"][] = "EVN_UID";
	$tdataAPP_EVENT[".allSearchFields"][] = "APP_EVN_ACTION_DATE";
	$tdataAPP_EVENT[".allSearchFields"][] = "APP_EVN_ATTEMPTS";
	$tdataAPP_EVENT[".allSearchFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
	$tdataAPP_EVENT[".allSearchFields"][] = "APP_EVN_STATUS";
	

$tdataAPP_EVENT[".googleLikeFields"] = array();
$tdataAPP_EVENT[".googleLikeFields"][] = "APP_UID";
$tdataAPP_EVENT[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".googleLikeFields"][] = "EVN_UID";
$tdataAPP_EVENT[".googleLikeFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".googleLikeFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".googleLikeFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".googleLikeFields"][] = "APP_EVN_STATUS";


$tdataAPP_EVENT[".advSearchFields"] = array();
$tdataAPP_EVENT[".advSearchFields"][] = "APP_UID";
$tdataAPP_EVENT[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".advSearchFields"][] = "EVN_UID";
$tdataAPP_EVENT[".advSearchFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".advSearchFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".advSearchFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".advSearchFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".tableType"] = "list";

$tdataAPP_EVENT[".printerPageOrientation"] = 0;
$tdataAPP_EVENT[".nPrinterPageScale"] = 100;

$tdataAPP_EVENT[".nPrinterSplitRecords"] = 40;

$tdataAPP_EVENT[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_EVENT[".geocodingEnabled"] = false;





$tdataAPP_EVENT[".listGridLayout"] = 3;


$tdataAPP_EVENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_EVENT[".pageSize"] = 20;

$tdataAPP_EVENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_EVENT[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_EVENT[".orderindexes"] = array();

$tdataAPP_EVENT[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	EVN_UID,  	APP_EVN_ACTION_DATE,  	APP_EVN_ATTEMPTS,  	APP_EVN_LAST_EXECUTION_DATE,  	APP_EVN_STATUS";
$tdataAPP_EVENT[".sqlFrom"] = "FROM APP_EVENT";
$tdataAPP_EVENT[".sqlWhereExpr"] = "";
$tdataAPP_EVENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_EVENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_EVENT[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_EVENT[".highlightSearchResults"] = true;

$tableKeysAPP_EVENT = array();
$tableKeysAPP_EVENT[] = "APP_UID";
$tableKeysAPP_EVENT[] = "DEL_INDEX";
$tableKeysAPP_EVENT[] = "EVN_UID";
$tdataAPP_EVENT[".Keys"] = $tableKeysAPP_EVENT;

$tdataAPP_EVENT[".listFields"] = array();
$tdataAPP_EVENT[".listFields"][] = "APP_UID";
$tdataAPP_EVENT[".listFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".listFields"][] = "EVN_UID";
$tdataAPP_EVENT[".listFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".listFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".listFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".listFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".hideMobileList"] = array();


$tdataAPP_EVENT[".viewFields"] = array();
$tdataAPP_EVENT[".viewFields"][] = "APP_UID";
$tdataAPP_EVENT[".viewFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".viewFields"][] = "EVN_UID";
$tdataAPP_EVENT[".viewFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".viewFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".viewFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".viewFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".addFields"] = array();
$tdataAPP_EVENT[".addFields"][] = "APP_UID";
$tdataAPP_EVENT[".addFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".addFields"][] = "EVN_UID";
$tdataAPP_EVENT[".addFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".addFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".addFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".addFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".masterListFields"] = array();
$tdataAPP_EVENT[".masterListFields"][] = "APP_UID";
$tdataAPP_EVENT[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".masterListFields"][] = "EVN_UID";
$tdataAPP_EVENT[".masterListFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".masterListFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".masterListFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".masterListFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".inlineAddFields"] = array();
$tdataAPP_EVENT[".inlineAddFields"][] = "APP_UID";
$tdataAPP_EVENT[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".inlineAddFields"][] = "EVN_UID";
$tdataAPP_EVENT[".inlineAddFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".inlineAddFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".inlineAddFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".inlineAddFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".editFields"] = array();
$tdataAPP_EVENT[".editFields"][] = "APP_UID";
$tdataAPP_EVENT[".editFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".editFields"][] = "EVN_UID";
$tdataAPP_EVENT[".editFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".editFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".editFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".editFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".inlineEditFields"] = array();
$tdataAPP_EVENT[".inlineEditFields"][] = "APP_UID";
$tdataAPP_EVENT[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".inlineEditFields"][] = "EVN_UID";
$tdataAPP_EVENT[".inlineEditFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".inlineEditFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".inlineEditFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".inlineEditFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".updateSelectedFields"] = array();
$tdataAPP_EVENT[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_EVENT[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".updateSelectedFields"][] = "EVN_UID";
$tdataAPP_EVENT[".updateSelectedFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".updateSelectedFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".updateSelectedFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".updateSelectedFields"][] = "APP_EVN_STATUS";


$tdataAPP_EVENT[".exportFields"] = array();
$tdataAPP_EVENT[".exportFields"][] = "APP_UID";
$tdataAPP_EVENT[".exportFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".exportFields"][] = "EVN_UID";
$tdataAPP_EVENT[".exportFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".exportFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".exportFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".exportFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".importFields"] = array();
$tdataAPP_EVENT[".importFields"][] = "APP_UID";
$tdataAPP_EVENT[".importFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".importFields"][] = "EVN_UID";
$tdataAPP_EVENT[".importFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".importFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".importFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".importFields"][] = "APP_EVN_STATUS";

$tdataAPP_EVENT[".printFields"] = array();
$tdataAPP_EVENT[".printFields"][] = "APP_UID";
$tdataAPP_EVENT[".printFields"][] = "DEL_INDEX";
$tdataAPP_EVENT[".printFields"][] = "EVN_UID";
$tdataAPP_EVENT[".printFields"][] = "APP_EVN_ACTION_DATE";
$tdataAPP_EVENT[".printFields"][] = "APP_EVN_ATTEMPTS";
$tdataAPP_EVENT[".printFields"][] = "APP_EVN_LAST_EXECUTION_DATE";
$tdataAPP_EVENT[".printFields"][] = "APP_EVN_STATUS";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","APP_UID");
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




	$tdataAPP_EVENT["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","DEL_INDEX");
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




	$tdataAPP_EVENT["DEL_INDEX"] = $fdata;
//	EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EVN_UID";
	$fdata["GoodName"] = "EVN_UID";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","EVN_UID");
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

		$fdata["strField"] = "EVN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVN_UID";

	
	
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




	$tdataAPP_EVENT["EVN_UID"] = $fdata;
//	APP_EVN_ACTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_EVN_ACTION_DATE";
	$fdata["GoodName"] = "APP_EVN_ACTION_DATE";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","APP_EVN_ACTION_DATE");
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

		$fdata["strField"] = "APP_EVN_ACTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_EVN_ACTION_DATE";

	
	
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




	$tdataAPP_EVENT["APP_EVN_ACTION_DATE"] = $fdata;
//	APP_EVN_ATTEMPTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_EVN_ATTEMPTS";
	$fdata["GoodName"] = "APP_EVN_ATTEMPTS";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","APP_EVN_ATTEMPTS");
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

		$fdata["strField"] = "APP_EVN_ATTEMPTS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_EVN_ATTEMPTS";

	
	
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




	$tdataAPP_EVENT["APP_EVN_ATTEMPTS"] = $fdata;
//	APP_EVN_LAST_EXECUTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_EVN_LAST_EXECUTION_DATE";
	$fdata["GoodName"] = "APP_EVN_LAST_EXECUTION_DATE";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","APP_EVN_LAST_EXECUTION_DATE");
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

		$fdata["strField"] = "APP_EVN_LAST_EXECUTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_EVN_LAST_EXECUTION_DATE";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_EVENT["APP_EVN_LAST_EXECUTION_DATE"] = $fdata;
//	APP_EVN_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_EVN_STATUS";
	$fdata["GoodName"] = "APP_EVN_STATUS";
	$fdata["ownerTable"] = "APP_EVENT";
	$fdata["Label"] = GetFieldLabel("APP_EVENT","APP_EVN_STATUS");
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

		$fdata["strField"] = "APP_EVN_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_EVN_STATUS";

	
	
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




	$tdataAPP_EVENT["APP_EVN_STATUS"] = $fdata;


$tables_data["APP_EVENT"]=&$tdataAPP_EVENT;
$field_labels["APP_EVENT"] = &$fieldLabelsAPP_EVENT;
$fieldToolTips["APP_EVENT"] = &$fieldToolTipsAPP_EVENT;
$placeHolders["APP_EVENT"] = &$placeHoldersAPP_EVENT;
$page_titles["APP_EVENT"] = &$pageTitlesAPP_EVENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_EVENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_EVENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_EVENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	EVN_UID,  	APP_EVN_ACTION_DATE,  	APP_EVN_ATTEMPTS,  	APP_EVN_LAST_EXECUTION_DATE,  	APP_EVN_STATUS";
$proto0["m_strFrom"] = "FROM APP_EVENT";
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
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_EVENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "APP_EVENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID",
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto10["m_sql"] = "EVN_UID";
$proto10["m_srcTableName"] = "APP_EVENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_EVN_ACTION_DATE",
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto12["m_sql"] = "APP_EVN_ACTION_DATE";
$proto12["m_srcTableName"] = "APP_EVENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_EVN_ATTEMPTS",
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto14["m_sql"] = "APP_EVN_ATTEMPTS";
$proto14["m_srcTableName"] = "APP_EVENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_EVN_LAST_EXECUTION_DATE",
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto16["m_sql"] = "APP_EVN_LAST_EXECUTION_DATE";
$proto16["m_srcTableName"] = "APP_EVENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_EVN_STATUS",
	"m_strTable" => "APP_EVENT",
	"m_srcTableName" => "APP_EVENT"
));

$proto18["m_sql"] = "APP_EVN_STATUS";
$proto18["m_srcTableName"] = "APP_EVENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "APP_EVENT";
$proto21["m_srcTableName"] = "APP_EVENT";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "APP_UID";
$proto21["m_columns"][] = "DEL_INDEX";
$proto21["m_columns"][] = "EVN_UID";
$proto21["m_columns"][] = "APP_EVN_ACTION_DATE";
$proto21["m_columns"][] = "APP_EVN_ATTEMPTS";
$proto21["m_columns"][] = "APP_EVN_LAST_EXECUTION_DATE";
$proto21["m_columns"][] = "APP_EVN_STATUS";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "APP_EVENT";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "APP_EVENT";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_EVENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_EVENT = createSqlQuery_APP_EVENT();


	
						;

							

$tdataAPP_EVENT[".sqlquery"] = $queryData_APP_EVENT;

$tableEvents["APP_EVENT"] = new eventsBase;
$tdataAPP_EVENT[".hasEvents"] = false;

?>
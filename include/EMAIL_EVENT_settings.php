<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEMAIL_EVENT = array();
	$tdataEMAIL_EVENT[".truncateText"] = true;
	$tdataEMAIL_EVENT[".NumberOfChars"] = 20;
	$tdataEMAIL_EVENT[".ShortName"] = "EMAIL_EVENT";
	$tdataEMAIL_EVENT[".OwnerID"] = "";
	$tdataEMAIL_EVENT[".OriginalTable"] = "EMAIL_EVENT";

//	field labels
$fieldLabelsEMAIL_EVENT = array();
$fieldToolTipsEMAIL_EVENT = array();
$pageTitlesEMAIL_EVENT = array();
$placeHoldersEMAIL_EVENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEMAIL_EVENT["Japanese"] = array();
	$fieldToolTipsEMAIL_EVENT["Japanese"] = array();
	$placeHoldersEMAIL_EVENT["Japanese"] = array();
	$pageTitlesEMAIL_EVENT["Japanese"] = array();
	$fieldLabelsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_UID"] = "電子メールイベントUID";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_UID"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["EMAIL_EVENT_UID"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["PRJ_UID"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["EVN_UID"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["EVN_UID"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_FROM"] = "からの電子メールイベント";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_FROM"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["EMAIL_EVENT_FROM"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_TO"] = "Eメール・イベントへ";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_TO"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["EMAIL_EVENT_TO"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_SUBJECT"] = "電子メールイベントの件名";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["EMAIL_EVENT_SUBJECT"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["EMAIL_EVENT_SUBJECT"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["PRF_UID"] = "PRF UID";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["PRF_UID"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["PRF_UID"] = "";
	$fieldLabelsEMAIL_EVENT["Japanese"]["EMAIL_SERVER_UID"] = "電子メールサーバーのUID";
	$fieldToolTipsEMAIL_EVENT["Japanese"]["EMAIL_SERVER_UID"] = "";
	$placeHoldersEMAIL_EVENT["Japanese"]["EMAIL_SERVER_UID"] = "";
	if (count($fieldToolTipsEMAIL_EVENT["Japanese"]))
		$tdataEMAIL_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEMAIL_EVENT["English"] = array();
	$fieldToolTipsEMAIL_EVENT["English"] = array();
	$placeHoldersEMAIL_EVENT["English"] = array();
	$pageTitlesEMAIL_EVENT["English"] = array();
	$fieldLabelsEMAIL_EVENT["English"]["EMAIL_EVENT_UID"] = "電子メールイベントUID";
	$fieldToolTipsEMAIL_EVENT["English"]["EMAIL_EVENT_UID"] = "";
	$placeHoldersEMAIL_EVENT["English"]["EMAIL_EVENT_UID"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsEMAIL_EVENT["English"]["PRJ_UID"] = "";
	$placeHoldersEMAIL_EVENT["English"]["PRJ_UID"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["EVN_UID"] = "EVNのUID";
	$fieldToolTipsEMAIL_EVENT["English"]["EVN_UID"] = "";
	$placeHoldersEMAIL_EVENT["English"]["EVN_UID"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["EMAIL_EVENT_FROM"] = "からの電子メールイベント";
	$fieldToolTipsEMAIL_EVENT["English"]["EMAIL_EVENT_FROM"] = "";
	$placeHoldersEMAIL_EVENT["English"]["EMAIL_EVENT_FROM"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["EMAIL_EVENT_TO"] = "Eメール・イベントへ";
	$fieldToolTipsEMAIL_EVENT["English"]["EMAIL_EVENT_TO"] = "";
	$placeHoldersEMAIL_EVENT["English"]["EMAIL_EVENT_TO"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["EMAIL_EVENT_SUBJECT"] = "電子メールイベントの件名";
	$fieldToolTipsEMAIL_EVENT["English"]["EMAIL_EVENT_SUBJECT"] = "";
	$placeHoldersEMAIL_EVENT["English"]["EMAIL_EVENT_SUBJECT"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["PRF_UID"] = "PRF UID";
	$fieldToolTipsEMAIL_EVENT["English"]["PRF_UID"] = "";
	$placeHoldersEMAIL_EVENT["English"]["PRF_UID"] = "";
	$fieldLabelsEMAIL_EVENT["English"]["EMAIL_SERVER_UID"] = "電子メールサーバーのUID";
	$fieldToolTipsEMAIL_EVENT["English"]["EMAIL_SERVER_UID"] = "";
	$placeHoldersEMAIL_EVENT["English"]["EMAIL_SERVER_UID"] = "";
	if (count($fieldToolTipsEMAIL_EVENT["English"]))
		$tdataEMAIL_EVENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEMAIL_EVENT[""] = array();
	$fieldToolTipsEMAIL_EVENT[""] = array();
	$placeHoldersEMAIL_EVENT[""] = array();
	$pageTitlesEMAIL_EVENT[""] = array();
	if (count($fieldToolTipsEMAIL_EVENT[""]))
		$tdataEMAIL_EVENT[".isUseToolTips"] = true;
}


	$tdataEMAIL_EVENT[".NCSearch"] = true;



$tdataEMAIL_EVENT[".shortTableName"] = "EMAIL_EVENT";
$tdataEMAIL_EVENT[".nSecOptions"] = 0;
$tdataEMAIL_EVENT[".recsPerRowPrint"] = 1;
$tdataEMAIL_EVENT[".mainTableOwnerID"] = "";
$tdataEMAIL_EVENT[".moveNext"] = 0;
$tdataEMAIL_EVENT[".entityType"] = 0;

$tdataEMAIL_EVENT[".strOriginalTableName"] = "EMAIL_EVENT";

	



$tdataEMAIL_EVENT[".showAddInPopup"] = false;

$tdataEMAIL_EVENT[".showEditInPopup"] = false;

$tdataEMAIL_EVENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEMAIL_EVENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEMAIL_EVENT[".fieldsForRegister"] = array();
	
$tdataEMAIL_EVENT[".listAjax"] = false;

	$tdataEMAIL_EVENT[".audit"] = true;

	$tdataEMAIL_EVENT[".locking"] = false;

$tdataEMAIL_EVENT[".edit"] = true;
$tdataEMAIL_EVENT[".afterEditAction"] = 1;
$tdataEMAIL_EVENT[".closePopupAfterEdit"] = 1;
$tdataEMAIL_EVENT[".afterEditActionDetTable"] = "";

$tdataEMAIL_EVENT[".add"] = true;
$tdataEMAIL_EVENT[".afterAddAction"] = 1;
$tdataEMAIL_EVENT[".closePopupAfterAdd"] = 1;
$tdataEMAIL_EVENT[".afterAddActionDetTable"] = "";

$tdataEMAIL_EVENT[".list"] = true;



$tdataEMAIL_EVENT[".reorderRecordsByHeader"] = true;



$tdataEMAIL_EVENT[".view"] = true;

$tdataEMAIL_EVENT[".import"] = true;

$tdataEMAIL_EVENT[".exportTo"] = true;

$tdataEMAIL_EVENT[".printFriendly"] = true;

$tdataEMAIL_EVENT[".delete"] = true;

$tdataEMAIL_EVENT[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEMAIL_EVENT[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEMAIL_EVENT[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEMAIL_EVENT[".searchSaving"] = false;
//

$tdataEMAIL_EVENT[".showSearchPanel"] = true;
		$tdataEMAIL_EVENT[".flexibleSearch"] = true;

$tdataEMAIL_EVENT[".isUseAjaxSuggest"] = true;

$tdataEMAIL_EVENT[".rowHighlite"] = true;



				

$tdataEMAIL_EVENT[".ajaxCodeSnippetAdded"] = false;

$tdataEMAIL_EVENT[".buttonsAdded"] = false;

$tdataEMAIL_EVENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEMAIL_EVENT[".isUseTimeForSearch"] = false;





$tdataEMAIL_EVENT[".allSearchFields"] = array();
$tdataEMAIL_EVENT[".filterFields"] = array();
$tdataEMAIL_EVENT[".requiredSearchFields"] = array();

$tdataEMAIL_EVENT[".allSearchFields"][] = "EMAIL_EVENT_UID";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "PRJ_UID";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "EVN_UID";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "EMAIL_EVENT_FROM";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "EMAIL_EVENT_TO";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "EMAIL_EVENT_SUBJECT";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "PRF_UID";
	$tdataEMAIL_EVENT[".allSearchFields"][] = "EMAIL_SERVER_UID";
	

$tdataEMAIL_EVENT[".googleLikeFields"] = array();
$tdataEMAIL_EVENT[".googleLikeFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".googleLikeFields"][] = "EMAIL_SERVER_UID";


$tdataEMAIL_EVENT[".advSearchFields"] = array();
$tdataEMAIL_EVENT[".advSearchFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".advSearchFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".advSearchFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".advSearchFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".advSearchFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".advSearchFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".advSearchFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".advSearchFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".tableType"] = "list";

$tdataEMAIL_EVENT[".printerPageOrientation"] = 0;
$tdataEMAIL_EVENT[".nPrinterPageScale"] = 100;

$tdataEMAIL_EVENT[".nPrinterSplitRecords"] = 40;

$tdataEMAIL_EVENT[".nPrinterPDFSplitRecords"] = 40;



$tdataEMAIL_EVENT[".geocodingEnabled"] = false;





$tdataEMAIL_EVENT[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEMAIL_EVENT[".pageSize"] = 20;

$tdataEMAIL_EVENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEMAIL_EVENT[".strOrderBy"] = $tstrOrderBy;

$tdataEMAIL_EVENT[".orderindexes"] = array();

$tdataEMAIL_EVENT[".sqlHead"] = "SELECT EMAIL_EVENT_UID,  	PRJ_UID,  	EVN_UID,  	EMAIL_EVENT_FROM,  	EMAIL_EVENT_TO,  	EMAIL_EVENT_SUBJECT,  	PRF_UID,  	EMAIL_SERVER_UID";
$tdataEMAIL_EVENT[".sqlFrom"] = "FROM EMAIL_EVENT";
$tdataEMAIL_EVENT[".sqlWhereExpr"] = "";
$tdataEMAIL_EVENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEMAIL_EVENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEMAIL_EVENT[".arrGroupsPerPage"] = $arrGPP;

$tdataEMAIL_EVENT[".highlightSearchResults"] = true;

$tableKeysEMAIL_EVENT = array();
$tableKeysEMAIL_EVENT[] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".Keys"] = $tableKeysEMAIL_EVENT;

$tdataEMAIL_EVENT[".listFields"] = array();
$tdataEMAIL_EVENT[".listFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".listFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".listFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".listFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".listFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".listFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".listFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".listFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".hideMobileList"] = array();


$tdataEMAIL_EVENT[".viewFields"] = array();
$tdataEMAIL_EVENT[".viewFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".viewFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".viewFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".viewFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".viewFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".viewFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".viewFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".viewFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".addFields"] = array();
$tdataEMAIL_EVENT[".addFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".addFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".addFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".addFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".addFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".addFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".addFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".addFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".masterListFields"] = array();
$tdataEMAIL_EVENT[".masterListFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".masterListFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".masterListFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".masterListFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".masterListFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".masterListFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".masterListFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".masterListFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".inlineAddFields"] = array();

$tdataEMAIL_EVENT[".editFields"] = array();
$tdataEMAIL_EVENT[".editFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".editFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".editFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".editFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".editFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".editFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".editFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".editFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".inlineEditFields"] = array();

$tdataEMAIL_EVENT[".updateSelectedFields"] = array();
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".updateSelectedFields"][] = "EMAIL_SERVER_UID";


$tdataEMAIL_EVENT[".exportFields"] = array();
$tdataEMAIL_EVENT[".exportFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".exportFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".exportFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".exportFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".exportFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".exportFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".exportFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".exportFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".importFields"] = array();
$tdataEMAIL_EVENT[".importFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".importFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".importFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".importFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".importFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".importFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".importFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".importFields"][] = "EMAIL_SERVER_UID";

$tdataEMAIL_EVENT[".printFields"] = array();
$tdataEMAIL_EVENT[".printFields"][] = "EMAIL_EVENT_UID";
$tdataEMAIL_EVENT[".printFields"][] = "PRJ_UID";
$tdataEMAIL_EVENT[".printFields"][] = "EVN_UID";
$tdataEMAIL_EVENT[".printFields"][] = "EMAIL_EVENT_FROM";
$tdataEMAIL_EVENT[".printFields"][] = "EMAIL_EVENT_TO";
$tdataEMAIL_EVENT[".printFields"][] = "EMAIL_EVENT_SUBJECT";
$tdataEMAIL_EVENT[".printFields"][] = "PRF_UID";
$tdataEMAIL_EVENT[".printFields"][] = "EMAIL_SERVER_UID";

//	EMAIL_EVENT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EMAIL_EVENT_UID";
	$fdata["GoodName"] = "EMAIL_EVENT_UID";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","EMAIL_EVENT_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EMAIL_EVENT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMAIL_EVENT_UID";

	
	
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




	$tdataEMAIL_EVENT["EMAIL_EVENT_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","PRJ_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UID";

	
	
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




	$tdataEMAIL_EVENT["PRJ_UID"] = $fdata;
//	EVN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EVN_UID";
	$fdata["GoodName"] = "EVN_UID";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","EVN_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEMAIL_EVENT["EVN_UID"] = $fdata;
//	EMAIL_EVENT_FROM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EMAIL_EVENT_FROM";
	$fdata["GoodName"] = "EMAIL_EVENT_FROM";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","EMAIL_EVENT_FROM");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EMAIL_EVENT_FROM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMAIL_EVENT_FROM";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdataEMAIL_EVENT["EMAIL_EVENT_FROM"] = $fdata;
//	EMAIL_EVENT_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EMAIL_EVENT_TO";
	$fdata["GoodName"] = "EMAIL_EVENT_TO";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","EMAIL_EVENT_TO");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EMAIL_EVENT_TO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMAIL_EVENT_TO";

	
	
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




	$tdataEMAIL_EVENT["EMAIL_EVENT_TO"] = $fdata;
//	EMAIL_EVENT_SUBJECT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EMAIL_EVENT_SUBJECT";
	$fdata["GoodName"] = "EMAIL_EVENT_SUBJECT";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","EMAIL_EVENT_SUBJECT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EMAIL_EVENT_SUBJECT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMAIL_EVENT_SUBJECT";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataEMAIL_EVENT["EMAIL_EVENT_SUBJECT"] = $fdata;
//	PRF_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRF_UID";
	$fdata["GoodName"] = "PRF_UID";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","PRF_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRF_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRF_UID";

	
	
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




	$tdataEMAIL_EVENT["PRF_UID"] = $fdata;
//	EMAIL_SERVER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EMAIL_SERVER_UID";
	$fdata["GoodName"] = "EMAIL_SERVER_UID";
	$fdata["ownerTable"] = "EMAIL_EVENT";
	$fdata["Label"] = GetFieldLabel("EMAIL_EVENT","EMAIL_SERVER_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EMAIL_SERVER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMAIL_SERVER_UID";

	
	
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




	$tdataEMAIL_EVENT["EMAIL_SERVER_UID"] = $fdata;


$tables_data["EMAIL_EVENT"]=&$tdataEMAIL_EVENT;
$field_labels["EMAIL_EVENT"] = &$fieldLabelsEMAIL_EVENT;
$fieldToolTips["EMAIL_EVENT"] = &$fieldToolTipsEMAIL_EVENT;
$placeHolders["EMAIL_EVENT"] = &$placeHoldersEMAIL_EVENT;
$page_titles["EMAIL_EVENT"] = &$pageTitlesEMAIL_EVENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["EMAIL_EVENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["EMAIL_EVENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_EMAIL_EVENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EMAIL_EVENT_UID,  	PRJ_UID,  	EVN_UID,  	EMAIL_EVENT_FROM,  	EMAIL_EVENT_TO,  	EMAIL_EVENT_SUBJECT,  	PRF_UID,  	EMAIL_SERVER_UID";
$proto0["m_strFrom"] = "FROM EMAIL_EVENT";
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
	"m_strName" => "EMAIL_EVENT_UID",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto6["m_sql"] = "EMAIL_EVENT_UID";
$proto6["m_srcTableName"] = "EMAIL_EVENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "EMAIL_EVENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EVN_UID",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto10["m_sql"] = "EVN_UID";
$proto10["m_srcTableName"] = "EMAIL_EVENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EMAIL_EVENT_FROM",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto12["m_sql"] = "EMAIL_EVENT_FROM";
$proto12["m_srcTableName"] = "EMAIL_EVENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EMAIL_EVENT_TO",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto14["m_sql"] = "EMAIL_EVENT_TO";
$proto14["m_srcTableName"] = "EMAIL_EVENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EMAIL_EVENT_SUBJECT",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto16["m_sql"] = "EMAIL_EVENT_SUBJECT";
$proto16["m_srcTableName"] = "EMAIL_EVENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRF_UID",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto18["m_sql"] = "PRF_UID";
$proto18["m_srcTableName"] = "EMAIL_EVENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EMAIL_SERVER_UID",
	"m_strTable" => "EMAIL_EVENT",
	"m_srcTableName" => "EMAIL_EVENT"
));

$proto20["m_sql"] = "EMAIL_SERVER_UID";
$proto20["m_srcTableName"] = "EMAIL_EVENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "EMAIL_EVENT";
$proto23["m_srcTableName"] = "EMAIL_EVENT";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "EMAIL_EVENT_UID";
$proto23["m_columns"][] = "PRJ_UID";
$proto23["m_columns"][] = "EVN_UID";
$proto23["m_columns"][] = "EMAIL_EVENT_FROM";
$proto23["m_columns"][] = "EMAIL_EVENT_TO";
$proto23["m_columns"][] = "EMAIL_EVENT_SUBJECT";
$proto23["m_columns"][] = "PRF_UID";
$proto23["m_columns"][] = "EMAIL_SERVER_UID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "EMAIL_EVENT";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "EMAIL_EVENT";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="EMAIL_EVENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_EMAIL_EVENT = createSqlQuery_EMAIL_EVENT();


	
						;

								

$tdataEMAIL_EVENT[".sqlquery"] = $queryData_EMAIL_EVENT;

$tableEvents["EMAIL_EVENT"] = new eventsBase;
$tdataEMAIL_EVENT[".hasEvents"] = false;

?>
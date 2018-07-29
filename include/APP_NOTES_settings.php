<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_NOTES = array();
	$tdataAPP_NOTES[".truncateText"] = true;
	$tdataAPP_NOTES[".NumberOfChars"] = 20;
	$tdataAPP_NOTES[".ShortName"] = "APP_NOTES";
	$tdataAPP_NOTES[".OwnerID"] = "";
	$tdataAPP_NOTES[".OriginalTable"] = "APP_NOTES";

//	field labels
$fieldLabelsAPP_NOTES = array();
$fieldToolTipsAPP_NOTES = array();
$pageTitlesAPP_NOTES = array();
$placeHoldersAPP_NOTES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_NOTES["Japanese"] = array();
	$fieldToolTipsAPP_NOTES["Japanese"] = array();
	$placeHoldersAPP_NOTES["Japanese"] = array();
	$pageTitlesAPP_NOTES["Japanese"] = array();
	$fieldLabelsAPP_NOTES["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_NOTES["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_NOTES["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["USR_UID"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_DATE"] = "ノート日付";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_DATE"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_DATE"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_CONTENT"] = "メモ内容";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_CONTENT"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_CONTENT"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_TYPE"] = "ノート型";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_TYPE"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_TYPE"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_AVAILABILITY"] = "ノートの可用性";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_AVAILABILITY"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_AVAILABILITY"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_ORIGIN_OBJ"] = "ノート原点OBJ";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_ORIGIN_OBJ"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_ORIGIN_OBJ"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_AFFECTED_OBJ1"] = "影響を受けたOBJ1の点に注意してください。";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_AFFECTED_OBJ1"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_AFFECTED_OBJ1"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_AFFECTED_OBJ2"] = "注意obj2が影響を受けます";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_AFFECTED_OBJ2"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_AFFECTED_OBJ2"] = "";
	$fieldLabelsAPP_NOTES["Japanese"]["NOTE_RECIPIENTS"] = "メモ受信者";
	$fieldToolTipsAPP_NOTES["Japanese"]["NOTE_RECIPIENTS"] = "";
	$placeHoldersAPP_NOTES["Japanese"]["NOTE_RECIPIENTS"] = "";
	if (count($fieldToolTipsAPP_NOTES["Japanese"]))
		$tdataAPP_NOTES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_NOTES["English"] = array();
	$fieldToolTipsAPP_NOTES["English"] = array();
	$placeHoldersAPP_NOTES["English"] = array();
	$pageTitlesAPP_NOTES["English"] = array();
	$fieldLabelsAPP_NOTES["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_NOTES["English"]["APP_UID"] = "";
	$placeHoldersAPP_NOTES["English"]["APP_UID"] = "";
	$fieldLabelsAPP_NOTES["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_NOTES["English"]["USR_UID"] = "";
	$placeHoldersAPP_NOTES["English"]["USR_UID"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_DATE"] = "ノート日付";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_DATE"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_DATE"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_CONTENT"] = "メモ内容";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_CONTENT"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_CONTENT"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_TYPE"] = "ノート型";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_TYPE"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_TYPE"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_AVAILABILITY"] = "ノートの可用性";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_AVAILABILITY"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_AVAILABILITY"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_ORIGIN_OBJ"] = "ノート原点OBJ";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_ORIGIN_OBJ"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_ORIGIN_OBJ"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_AFFECTED_OBJ1"] = "影響を受けたOBJ1の点に注意してください。";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_AFFECTED_OBJ1"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_AFFECTED_OBJ1"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_AFFECTED_OBJ2"] = "注意obj2が影響を受けます";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_AFFECTED_OBJ2"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_AFFECTED_OBJ2"] = "";
	$fieldLabelsAPP_NOTES["English"]["NOTE_RECIPIENTS"] = "メモ受信者";
	$fieldToolTipsAPP_NOTES["English"]["NOTE_RECIPIENTS"] = "";
	$placeHoldersAPP_NOTES["English"]["NOTE_RECIPIENTS"] = "";
	if (count($fieldToolTipsAPP_NOTES["English"]))
		$tdataAPP_NOTES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_NOTES[""] = array();
	$fieldToolTipsAPP_NOTES[""] = array();
	$placeHoldersAPP_NOTES[""] = array();
	$pageTitlesAPP_NOTES[""] = array();
	if (count($fieldToolTipsAPP_NOTES[""]))
		$tdataAPP_NOTES[".isUseToolTips"] = true;
}


	$tdataAPP_NOTES[".NCSearch"] = true;



$tdataAPP_NOTES[".shortTableName"] = "APP_NOTES";
$tdataAPP_NOTES[".nSecOptions"] = 0;
$tdataAPP_NOTES[".recsPerRowPrint"] = 1;
$tdataAPP_NOTES[".mainTableOwnerID"] = "";
$tdataAPP_NOTES[".moveNext"] = 0;
$tdataAPP_NOTES[".entityType"] = 0;

$tdataAPP_NOTES[".strOriginalTableName"] = "APP_NOTES";

	



$tdataAPP_NOTES[".showAddInPopup"] = false;

$tdataAPP_NOTES[".showEditInPopup"] = false;

$tdataAPP_NOTES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_NOTES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_NOTES[".fieldsForRegister"] = array();
	
$tdataAPP_NOTES[".listAjax"] = false;

	$tdataAPP_NOTES[".audit"] = true;

	$tdataAPP_NOTES[".locking"] = false;



$tdataAPP_NOTES[".list"] = true;



$tdataAPP_NOTES[".reorderRecordsByHeader"] = true;
$tdataAPP_NOTES[".createSortByDropdown"] = true;
$tdataAPP_NOTES[".strSortControlSettingsJSON"] = "";



$tdataAPP_NOTES[".inlineAdd"] = true;

$tdataAPP_NOTES[".import"] = true;

$tdataAPP_NOTES[".exportTo"] = true;

$tdataAPP_NOTES[".printFriendly"] = true;


$tdataAPP_NOTES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_NOTES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_NOTES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_NOTES[".searchSaving"] = false;
//

$tdataAPP_NOTES[".showSearchPanel"] = true;
		$tdataAPP_NOTES[".flexibleSearch"] = true;

$tdataAPP_NOTES[".isUseAjaxSuggest"] = true;

$tdataAPP_NOTES[".rowHighlite"] = true;



																

$tdataAPP_NOTES[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_NOTES[".buttonsAdded"] = false;

$tdataAPP_NOTES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_NOTES[".isUseTimeForSearch"] = false;



$tdataAPP_NOTES[".badgeColor"] = "9acd32";


$tdataAPP_NOTES[".allSearchFields"] = array();
$tdataAPP_NOTES[".filterFields"] = array();
$tdataAPP_NOTES[".requiredSearchFields"] = array();

$tdataAPP_NOTES[".allSearchFields"][] = "APP_UID";
	$tdataAPP_NOTES[".allSearchFields"][] = "USR_UID";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_DATE";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_CONTENT";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_TYPE";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_AVAILABILITY";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_ORIGIN_OBJ";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_AFFECTED_OBJ1";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_AFFECTED_OBJ2";
	$tdataAPP_NOTES[".allSearchFields"][] = "NOTE_RECIPIENTS";
	

$tdataAPP_NOTES[".googleLikeFields"] = array();
$tdataAPP_NOTES[".googleLikeFields"][] = "APP_UID";
$tdataAPP_NOTES[".googleLikeFields"][] = "USR_UID";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".googleLikeFields"][] = "NOTE_RECIPIENTS";


$tdataAPP_NOTES[".advSearchFields"] = array();
$tdataAPP_NOTES[".advSearchFields"][] = "APP_UID";
$tdataAPP_NOTES[".advSearchFields"][] = "USR_UID";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".advSearchFields"][] = "NOTE_RECIPIENTS";

$tdataAPP_NOTES[".tableType"] = "list";

$tdataAPP_NOTES[".printerPageOrientation"] = 0;
$tdataAPP_NOTES[".nPrinterPageScale"] = 100;

$tdataAPP_NOTES[".nPrinterSplitRecords"] = 40;

$tdataAPP_NOTES[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_NOTES[".geocodingEnabled"] = false;





$tdataAPP_NOTES[".listGridLayout"] = 3;


$tdataAPP_NOTES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_NOTES[".pageSize"] = 20;

$tdataAPP_NOTES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_NOTES[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_NOTES[".orderindexes"] = array();

$tdataAPP_NOTES[".sqlHead"] = "SELECT APP_UID,  	USR_UID,  	NOTE_DATE,  	NOTE_CONTENT,  	NOTE_TYPE,  	NOTE_AVAILABILITY,  	NOTE_ORIGIN_OBJ,  	NOTE_AFFECTED_OBJ1,  	NOTE_AFFECTED_OBJ2,  	NOTE_RECIPIENTS";
$tdataAPP_NOTES[".sqlFrom"] = "FROM APP_NOTES";
$tdataAPP_NOTES[".sqlWhereExpr"] = "";
$tdataAPP_NOTES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_NOTES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_NOTES[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_NOTES[".highlightSearchResults"] = true;

$tableKeysAPP_NOTES = array();
$tdataAPP_NOTES[".Keys"] = $tableKeysAPP_NOTES;

$tdataAPP_NOTES[".listFields"] = array();
$tdataAPP_NOTES[".listFields"][] = "APP_UID";
$tdataAPP_NOTES[".listFields"][] = "USR_UID";
$tdataAPP_NOTES[".listFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".listFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".listFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".listFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".listFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".listFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".listFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".listFields"][] = "NOTE_RECIPIENTS";

$tdataAPP_NOTES[".hideMobileList"] = array();


$tdataAPP_NOTES[".viewFields"] = array();

$tdataAPP_NOTES[".addFields"] = array();

$tdataAPP_NOTES[".masterListFields"] = array();
$tdataAPP_NOTES[".masterListFields"][] = "APP_UID";
$tdataAPP_NOTES[".masterListFields"][] = "USR_UID";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".masterListFields"][] = "NOTE_RECIPIENTS";

$tdataAPP_NOTES[".inlineAddFields"] = array();
$tdataAPP_NOTES[".inlineAddFields"][] = "APP_UID";
$tdataAPP_NOTES[".inlineAddFields"][] = "USR_UID";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".inlineAddFields"][] = "NOTE_RECIPIENTS";

$tdataAPP_NOTES[".editFields"] = array();

$tdataAPP_NOTES[".inlineEditFields"] = array();

$tdataAPP_NOTES[".updateSelectedFields"] = array();


$tdataAPP_NOTES[".exportFields"] = array();
$tdataAPP_NOTES[".exportFields"][] = "APP_UID";
$tdataAPP_NOTES[".exportFields"][] = "USR_UID";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".exportFields"][] = "NOTE_RECIPIENTS";

$tdataAPP_NOTES[".importFields"] = array();
$tdataAPP_NOTES[".importFields"][] = "APP_UID";
$tdataAPP_NOTES[".importFields"][] = "USR_UID";
$tdataAPP_NOTES[".importFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".importFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".importFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".importFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".importFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".importFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".importFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".importFields"][] = "NOTE_RECIPIENTS";

$tdataAPP_NOTES[".printFields"] = array();
$tdataAPP_NOTES[".printFields"][] = "APP_UID";
$tdataAPP_NOTES[".printFields"][] = "USR_UID";
$tdataAPP_NOTES[".printFields"][] = "NOTE_DATE";
$tdataAPP_NOTES[".printFields"][] = "NOTE_CONTENT";
$tdataAPP_NOTES[".printFields"][] = "NOTE_TYPE";
$tdataAPP_NOTES[".printFields"][] = "NOTE_AVAILABILITY";
$tdataAPP_NOTES[".printFields"][] = "NOTE_ORIGIN_OBJ";
$tdataAPP_NOTES[".printFields"][] = "NOTE_AFFECTED_OBJ1";
$tdataAPP_NOTES[".printFields"][] = "NOTE_AFFECTED_OBJ2";
$tdataAPP_NOTES[".printFields"][] = "NOTE_RECIPIENTS";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","APP_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdataAPP_NOTES["APP_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","USR_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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




	$tdataAPP_NOTES["USR_UID"] = $fdata;
//	NOTE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOTE_DATE";
	$fdata["GoodName"] = "NOTE_DATE";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_DATE";

	
	
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




	$tdataAPP_NOTES["NOTE_DATE"] = $fdata;
//	NOTE_CONTENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOTE_CONTENT";
	$fdata["GoodName"] = "NOTE_CONTENT";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_CONTENT");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_CONTENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_CONTENT";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_NOTES["NOTE_CONTENT"] = $fdata;
//	NOTE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NOTE_TYPE";
	$fdata["GoodName"] = "NOTE_TYPE";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_TYPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_TYPE";

	
	
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




	$tdataAPP_NOTES["NOTE_TYPE"] = $fdata;
//	NOTE_AVAILABILITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOTE_AVAILABILITY";
	$fdata["GoodName"] = "NOTE_AVAILABILITY";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_AVAILABILITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_AVAILABILITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_AVAILABILITY";

	
	
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




	$tdataAPP_NOTES["NOTE_AVAILABILITY"] = $fdata;
//	NOTE_ORIGIN_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOTE_ORIGIN_OBJ";
	$fdata["GoodName"] = "NOTE_ORIGIN_OBJ";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_ORIGIN_OBJ");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_ORIGIN_OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_ORIGIN_OBJ";

	
	
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




	$tdataAPP_NOTES["NOTE_ORIGIN_OBJ"] = $fdata;
//	NOTE_AFFECTED_OBJ1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOTE_AFFECTED_OBJ1";
	$fdata["GoodName"] = "NOTE_AFFECTED_OBJ1";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_AFFECTED_OBJ1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_AFFECTED_OBJ1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_AFFECTED_OBJ1";

	
	
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




	$tdataAPP_NOTES["NOTE_AFFECTED_OBJ1"] = $fdata;
//	NOTE_AFFECTED_OBJ2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NOTE_AFFECTED_OBJ2";
	$fdata["GoodName"] = "NOTE_AFFECTED_OBJ2";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_AFFECTED_OBJ2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_AFFECTED_OBJ2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_AFFECTED_OBJ2";

	
	
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




	$tdataAPP_NOTES["NOTE_AFFECTED_OBJ2"] = $fdata;
//	NOTE_RECIPIENTS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "NOTE_RECIPIENTS";
	$fdata["GoodName"] = "NOTE_RECIPIENTS";
	$fdata["ownerTable"] = "APP_NOTES";
	$fdata["Label"] = GetFieldLabel("APP_NOTES","NOTE_RECIPIENTS");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOTE_RECIPIENTS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOTE_RECIPIENTS";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_NOTES["NOTE_RECIPIENTS"] = $fdata;


$tables_data["APP_NOTES"]=&$tdataAPP_NOTES;
$field_labels["APP_NOTES"] = &$fieldLabelsAPP_NOTES;
$fieldToolTips["APP_NOTES"] = &$fieldToolTipsAPP_NOTES;
$placeHolders["APP_NOTES"] = &$placeHoldersAPP_NOTES;
$page_titles["APP_NOTES"] = &$pageTitlesAPP_NOTES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_NOTES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_NOTES"] = array();


	
				$strOriginalDetailsTable="APPLICATION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="APPLICATION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "APPLICATION";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["APP_NOTES"][0] = $masterParams;
				$masterTablesData["APP_NOTES"][0]["masterKeys"] = array();
	$masterTablesData["APP_NOTES"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["APP_NOTES"][0]["detailKeys"] = array();
	$masterTablesData["APP_NOTES"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_NOTES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	USR_UID,  	NOTE_DATE,  	NOTE_CONTENT,  	NOTE_TYPE,  	NOTE_AVAILABILITY,  	NOTE_ORIGIN_OBJ,  	NOTE_AFFECTED_OBJ1,  	NOTE_AFFECTED_OBJ2,  	NOTE_RECIPIENTS";
$proto0["m_strFrom"] = "FROM APP_NOTES";
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
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_NOTES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "APP_NOTES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_DATE",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto10["m_sql"] = "NOTE_DATE";
$proto10["m_srcTableName"] = "APP_NOTES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_CONTENT",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto12["m_sql"] = "NOTE_CONTENT";
$proto12["m_srcTableName"] = "APP_NOTES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_TYPE",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto14["m_sql"] = "NOTE_TYPE";
$proto14["m_srcTableName"] = "APP_NOTES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_AVAILABILITY",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto16["m_sql"] = "NOTE_AVAILABILITY";
$proto16["m_srcTableName"] = "APP_NOTES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_ORIGIN_OBJ",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto18["m_sql"] = "NOTE_ORIGIN_OBJ";
$proto18["m_srcTableName"] = "APP_NOTES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_AFFECTED_OBJ1",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto20["m_sql"] = "NOTE_AFFECTED_OBJ1";
$proto20["m_srcTableName"] = "APP_NOTES";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_AFFECTED_OBJ2",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto22["m_sql"] = "NOTE_AFFECTED_OBJ2";
$proto22["m_srcTableName"] = "APP_NOTES";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "NOTE_RECIPIENTS",
	"m_strTable" => "APP_NOTES",
	"m_srcTableName" => "APP_NOTES"
));

$proto24["m_sql"] = "NOTE_RECIPIENTS";
$proto24["m_srcTableName"] = "APP_NOTES";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "APP_NOTES";
$proto27["m_srcTableName"] = "APP_NOTES";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "APP_UID";
$proto27["m_columns"][] = "USR_UID";
$proto27["m_columns"][] = "NOTE_DATE";
$proto27["m_columns"][] = "NOTE_CONTENT";
$proto27["m_columns"][] = "NOTE_TYPE";
$proto27["m_columns"][] = "NOTE_AVAILABILITY";
$proto27["m_columns"][] = "NOTE_ORIGIN_OBJ";
$proto27["m_columns"][] = "NOTE_AFFECTED_OBJ1";
$proto27["m_columns"][] = "NOTE_AFFECTED_OBJ2";
$proto27["m_columns"][] = "NOTE_RECIPIENTS";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "APP_NOTES";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "APP_NOTES";
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
$proto0["m_srcTableName"]="APP_NOTES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_NOTES = createSqlQuery_APP_NOTES();


	
						;

										

$tdataAPP_NOTES[".sqlquery"] = $queryData_APP_NOTES;

$tableEvents["APP_NOTES"] = new eventsBase;
$tdataAPP_NOTES[".hasEvents"] = false;

?>
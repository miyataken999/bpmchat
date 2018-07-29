<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCALENDAR_BUSINESS_HOURS = array();
	$tdataCALENDAR_BUSINESS_HOURS[".truncateText"] = true;
	$tdataCALENDAR_BUSINESS_HOURS[".NumberOfChars"] = 80;
	$tdataCALENDAR_BUSINESS_HOURS[".ShortName"] = "CALENDAR_BUSINESS_HOURS";
	$tdataCALENDAR_BUSINESS_HOURS[".OwnerID"] = "";
	$tdataCALENDAR_BUSINESS_HOURS[".OriginalTable"] = "CALENDAR_BUSINESS_HOURS";

//	field labels
$fieldLabelsCALENDAR_BUSINESS_HOURS = array();
$fieldToolTipsCALENDAR_BUSINESS_HOURS = array();
$pageTitlesCALENDAR_BUSINESS_HOURS = array();
$placeHoldersCALENDAR_BUSINESS_HOURS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCALENDAR_BUSINESS_HOURS["Japanese"] = array();
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["Japanese"] = array();
	$placeHoldersCALENDAR_BUSINESS_HOURS["Japanese"] = array();
	$pageTitlesCALENDAR_BUSINESS_HOURS["Japanese"] = array();
	$fieldLabelsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_DAY"] = "CALENDAR BUSINESS DAY";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_DAY"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_DAY"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_START"] = "CALENDAR BUSINESS START";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_START"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_START"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_END"] = "CALENDAR BUSINESS END";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_END"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["Japanese"]["CALENDAR_BUSINESS_END"] = "";
	if (count($fieldToolTipsCALENDAR_BUSINESS_HOURS["Japanese"]))
		$tdataCALENDAR_BUSINESS_HOURS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCALENDAR_BUSINESS_HOURS["English"] = array();
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["English"] = array();
	$placeHoldersCALENDAR_BUSINESS_HOURS["English"] = array();
	$pageTitlesCALENDAR_BUSINESS_HOURS["English"] = array();
	$fieldLabelsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_DAY"] = "CALENDAR BUSINESS DAY";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_DAY"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_DAY"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_START"] = "CALENDAR BUSINESS START";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_START"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_START"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_END"] = "CALENDAR BUSINESS END";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_END"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS["English"]["CALENDAR_BUSINESS_END"] = "";
	if (count($fieldToolTipsCALENDAR_BUSINESS_HOURS["English"]))
		$tdataCALENDAR_BUSINESS_HOURS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCALENDAR_BUSINESS_HOURS[""] = array();
	$fieldToolTipsCALENDAR_BUSINESS_HOURS[""] = array();
	$placeHoldersCALENDAR_BUSINESS_HOURS[""] = array();
	$pageTitlesCALENDAR_BUSINESS_HOURS[""] = array();
	$fieldLabelsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS[""]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_DAY"] = "CALENDAR BUSINESS DAY";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_DAY"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_DAY"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_START"] = "CALENDAR BUSINESS START";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_START"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_START"] = "";
	$fieldLabelsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_END"] = "CALENDAR BUSINESS END";
	$fieldToolTipsCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_END"] = "";
	$placeHoldersCALENDAR_BUSINESS_HOURS[""]["CALENDAR_BUSINESS_END"] = "";
	if (count($fieldToolTipsCALENDAR_BUSINESS_HOURS[""]))
		$tdataCALENDAR_BUSINESS_HOURS[".isUseToolTips"] = true;
}


	$tdataCALENDAR_BUSINESS_HOURS[".NCSearch"] = true;



$tdataCALENDAR_BUSINESS_HOURS[".shortTableName"] = "CALENDAR_BUSINESS_HOURS";
$tdataCALENDAR_BUSINESS_HOURS[".nSecOptions"] = 0;
$tdataCALENDAR_BUSINESS_HOURS[".recsPerRowPrint"] = 1;
$tdataCALENDAR_BUSINESS_HOURS[".mainTableOwnerID"] = "";
$tdataCALENDAR_BUSINESS_HOURS[".moveNext"] = 1;
$tdataCALENDAR_BUSINESS_HOURS[".entityType"] = 0;

$tdataCALENDAR_BUSINESS_HOURS[".strOriginalTableName"] = "CALENDAR_BUSINESS_HOURS";

	



$tdataCALENDAR_BUSINESS_HOURS[".showAddInPopup"] = false;

$tdataCALENDAR_BUSINESS_HOURS[".showEditInPopup"] = false;

$tdataCALENDAR_BUSINESS_HOURS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCALENDAR_BUSINESS_HOURS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCALENDAR_BUSINESS_HOURS[".fieldsForRegister"] = array();
	
$tdataCALENDAR_BUSINESS_HOURS[".listAjax"] = false;

	$tdataCALENDAR_BUSINESS_HOURS[".audit"] = false;

	$tdataCALENDAR_BUSINESS_HOURS[".locking"] = false;

$tdataCALENDAR_BUSINESS_HOURS[".edit"] = true;
$tdataCALENDAR_BUSINESS_HOURS[".afterEditAction"] = 1;
$tdataCALENDAR_BUSINESS_HOURS[".closePopupAfterEdit"] = 1;
$tdataCALENDAR_BUSINESS_HOURS[".afterEditActionDetTable"] = "";

$tdataCALENDAR_BUSINESS_HOURS[".add"] = true;
$tdataCALENDAR_BUSINESS_HOURS[".afterAddAction"] = 1;
$tdataCALENDAR_BUSINESS_HOURS[".closePopupAfterAdd"] = 1;
$tdataCALENDAR_BUSINESS_HOURS[".afterAddActionDetTable"] = "";

$tdataCALENDAR_BUSINESS_HOURS[".list"] = true;



$tdataCALENDAR_BUSINESS_HOURS[".reorderRecordsByHeader"] = true;



$tdataCALENDAR_BUSINESS_HOURS[".view"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".import"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".exportTo"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".printFriendly"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".delete"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCALENDAR_BUSINESS_HOURS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCALENDAR_BUSINESS_HOURS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCALENDAR_BUSINESS_HOURS[".searchSaving"] = false;
//

$tdataCALENDAR_BUSINESS_HOURS[".showSearchPanel"] = true;
		$tdataCALENDAR_BUSINESS_HOURS[".flexibleSearch"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".isUseAjaxSuggest"] = true;

$tdataCALENDAR_BUSINESS_HOURS[".rowHighlite"] = true;



				

$tdataCALENDAR_BUSINESS_HOURS[".ajaxCodeSnippetAdded"] = false;

$tdataCALENDAR_BUSINESS_HOURS[".buttonsAdded"] = false;

$tdataCALENDAR_BUSINESS_HOURS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCALENDAR_BUSINESS_HOURS[".isUseTimeForSearch"] = false;





$tdataCALENDAR_BUSINESS_HOURS[".allSearchFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".filterFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".requiredSearchFields"] = array();

$tdataCALENDAR_BUSINESS_HOURS[".allSearchFields"][] = "CALENDAR_UID";
	$tdataCALENDAR_BUSINESS_HOURS[".allSearchFields"][] = "CALENDAR_BUSINESS_DAY";
	$tdataCALENDAR_BUSINESS_HOURS[".allSearchFields"][] = "CALENDAR_BUSINESS_START";
	$tdataCALENDAR_BUSINESS_HOURS[".allSearchFields"][] = "CALENDAR_BUSINESS_END";
	

$tdataCALENDAR_BUSINESS_HOURS[".googleLikeFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".googleLikeFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".googleLikeFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".googleLikeFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".googleLikeFields"][] = "CALENDAR_BUSINESS_END";


$tdataCALENDAR_BUSINESS_HOURS[".advSearchFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".advSearchFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".advSearchFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".advSearchFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".advSearchFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".tableType"] = "list";

$tdataCALENDAR_BUSINESS_HOURS[".printerPageOrientation"] = 0;
$tdataCALENDAR_BUSINESS_HOURS[".nPrinterPageScale"] = 100;

$tdataCALENDAR_BUSINESS_HOURS[".nPrinterSplitRecords"] = 40;

$tdataCALENDAR_BUSINESS_HOURS[".nPrinterPDFSplitRecords"] = 40;



$tdataCALENDAR_BUSINESS_HOURS[".geocodingEnabled"] = false;





$tdataCALENDAR_BUSINESS_HOURS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataCALENDAR_BUSINESS_HOURS[".pageSize"] = 20;

$tdataCALENDAR_BUSINESS_HOURS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCALENDAR_BUSINESS_HOURS[".strOrderBy"] = $tstrOrderBy;

$tdataCALENDAR_BUSINESS_HOURS[".orderindexes"] = array();

$tdataCALENDAR_BUSINESS_HOURS[".sqlHead"] = "SELECT CALENDAR_UID,  	CALENDAR_BUSINESS_DAY,  	CALENDAR_BUSINESS_START,  	CALENDAR_BUSINESS_END";
$tdataCALENDAR_BUSINESS_HOURS[".sqlFrom"] = "FROM CALENDAR_BUSINESS_HOURS";
$tdataCALENDAR_BUSINESS_HOURS[".sqlWhereExpr"] = "";
$tdataCALENDAR_BUSINESS_HOURS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCALENDAR_BUSINESS_HOURS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCALENDAR_BUSINESS_HOURS[".arrGroupsPerPage"] = $arrGPP;

$tdataCALENDAR_BUSINESS_HOURS[".highlightSearchResults"] = true;

$tableKeysCALENDAR_BUSINESS_HOURS = array();
$tableKeysCALENDAR_BUSINESS_HOURS[] = "CALENDAR_UID";
$tableKeysCALENDAR_BUSINESS_HOURS[] = "CALENDAR_BUSINESS_DAY";
$tableKeysCALENDAR_BUSINESS_HOURS[] = "CALENDAR_BUSINESS_START";
$tableKeysCALENDAR_BUSINESS_HOURS[] = "CALENDAR_BUSINESS_END";
$tdataCALENDAR_BUSINESS_HOURS[".Keys"] = $tableKeysCALENDAR_BUSINESS_HOURS;

$tdataCALENDAR_BUSINESS_HOURS[".listFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".listFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".listFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".listFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".listFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".hideMobileList"] = array();


$tdataCALENDAR_BUSINESS_HOURS[".viewFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".viewFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".viewFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".viewFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".viewFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".addFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".addFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".addFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".addFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".addFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".masterListFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".masterListFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".masterListFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".masterListFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".masterListFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".inlineAddFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".inlineAddFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".inlineAddFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".inlineAddFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".inlineAddFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".editFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".editFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".editFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".editFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".editFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".inlineEditFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".inlineEditFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".inlineEditFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".inlineEditFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".inlineEditFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".updateSelectedFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".updateSelectedFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".updateSelectedFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".updateSelectedFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".updateSelectedFields"][] = "CALENDAR_BUSINESS_END";


$tdataCALENDAR_BUSINESS_HOURS[".exportFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".exportFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".exportFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".exportFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".exportFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".importFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".importFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".importFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".importFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".importFields"][] = "CALENDAR_BUSINESS_END";

$tdataCALENDAR_BUSINESS_HOURS[".printFields"] = array();
$tdataCALENDAR_BUSINESS_HOURS[".printFields"][] = "CALENDAR_UID";
$tdataCALENDAR_BUSINESS_HOURS[".printFields"][] = "CALENDAR_BUSINESS_DAY";
$tdataCALENDAR_BUSINESS_HOURS[".printFields"][] = "CALENDAR_BUSINESS_START";
$tdataCALENDAR_BUSINESS_HOURS[".printFields"][] = "CALENDAR_BUSINESS_END";

//	CALENDAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CALENDAR_UID";
	$fdata["GoodName"] = "CALENDAR_UID";
	$fdata["ownerTable"] = "CALENDAR_BUSINESS_HOURS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_BUSINESS_HOURS","CALENDAR_UID");
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

		$fdata["strField"] = "CALENDAR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_UID";

	
	
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




	$tdataCALENDAR_BUSINESS_HOURS["CALENDAR_UID"] = $fdata;
//	CALENDAR_BUSINESS_DAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CALENDAR_BUSINESS_DAY";
	$fdata["GoodName"] = "CALENDAR_BUSINESS_DAY";
	$fdata["ownerTable"] = "CALENDAR_BUSINESS_HOURS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_BUSINESS_HOURS","CALENDAR_BUSINESS_DAY");
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

		$fdata["strField"] = "CALENDAR_BUSINESS_DAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_BUSINESS_DAY";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataCALENDAR_BUSINESS_HOURS["CALENDAR_BUSINESS_DAY"] = $fdata;
//	CALENDAR_BUSINESS_START
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CALENDAR_BUSINESS_START";
	$fdata["GoodName"] = "CALENDAR_BUSINESS_START";
	$fdata["ownerTable"] = "CALENDAR_BUSINESS_HOURS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_BUSINESS_HOURS","CALENDAR_BUSINESS_START");
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

		$fdata["strField"] = "CALENDAR_BUSINESS_START";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_BUSINESS_START";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataCALENDAR_BUSINESS_HOURS["CALENDAR_BUSINESS_START"] = $fdata;
//	CALENDAR_BUSINESS_END
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CALENDAR_BUSINESS_END";
	$fdata["GoodName"] = "CALENDAR_BUSINESS_END";
	$fdata["ownerTable"] = "CALENDAR_BUSINESS_HOURS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_BUSINESS_HOURS","CALENDAR_BUSINESS_END");
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

		$fdata["strField"] = "CALENDAR_BUSINESS_END";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_BUSINESS_END";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataCALENDAR_BUSINESS_HOURS["CALENDAR_BUSINESS_END"] = $fdata;


$tables_data["CALENDAR_BUSINESS_HOURS"]=&$tdataCALENDAR_BUSINESS_HOURS;
$field_labels["CALENDAR_BUSINESS_HOURS"] = &$fieldLabelsCALENDAR_BUSINESS_HOURS;
$fieldToolTips["CALENDAR_BUSINESS_HOURS"] = &$fieldToolTipsCALENDAR_BUSINESS_HOURS;
$placeHolders["CALENDAR_BUSINESS_HOURS"] = &$placeHoldersCALENDAR_BUSINESS_HOURS;
$page_titles["CALENDAR_BUSINESS_HOURS"] = &$pageTitlesCALENDAR_BUSINESS_HOURS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CALENDAR_BUSINESS_HOURS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CALENDAR_BUSINESS_HOURS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CALENDAR_BUSINESS_HOURS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CALENDAR_UID,  	CALENDAR_BUSINESS_DAY,  	CALENDAR_BUSINESS_START,  	CALENDAR_BUSINESS_END";
$proto0["m_strFrom"] = "FROM CALENDAR_BUSINESS_HOURS";
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
	"m_strName" => "CALENDAR_UID",
	"m_strTable" => "CALENDAR_BUSINESS_HOURS",
	"m_srcTableName" => "CALENDAR_BUSINESS_HOURS"
));

$proto6["m_sql"] = "CALENDAR_UID";
$proto6["m_srcTableName"] = "CALENDAR_BUSINESS_HOURS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_BUSINESS_DAY",
	"m_strTable" => "CALENDAR_BUSINESS_HOURS",
	"m_srcTableName" => "CALENDAR_BUSINESS_HOURS"
));

$proto8["m_sql"] = "CALENDAR_BUSINESS_DAY";
$proto8["m_srcTableName"] = "CALENDAR_BUSINESS_HOURS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_BUSINESS_START",
	"m_strTable" => "CALENDAR_BUSINESS_HOURS",
	"m_srcTableName" => "CALENDAR_BUSINESS_HOURS"
));

$proto10["m_sql"] = "CALENDAR_BUSINESS_START";
$proto10["m_srcTableName"] = "CALENDAR_BUSINESS_HOURS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_BUSINESS_END",
	"m_strTable" => "CALENDAR_BUSINESS_HOURS",
	"m_srcTableName" => "CALENDAR_BUSINESS_HOURS"
));

$proto12["m_sql"] = "CALENDAR_BUSINESS_END";
$proto12["m_srcTableName"] = "CALENDAR_BUSINESS_HOURS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "CALENDAR_BUSINESS_HOURS";
$proto15["m_srcTableName"] = "CALENDAR_BUSINESS_HOURS";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CALENDAR_UID";
$proto15["m_columns"][] = "CALENDAR_BUSINESS_DAY";
$proto15["m_columns"][] = "CALENDAR_BUSINESS_START";
$proto15["m_columns"][] = "CALENDAR_BUSINESS_END";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "CALENDAR_BUSINESS_HOURS";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "CALENDAR_BUSINESS_HOURS";
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
$proto0["m_srcTableName"]="CALENDAR_BUSINESS_HOURS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CALENDAR_BUSINESS_HOURS = createSqlQuery_CALENDAR_BUSINESS_HOURS();


	
						;

				

$tdataCALENDAR_BUSINESS_HOURS[".sqlquery"] = $queryData_CALENDAR_BUSINESS_HOURS;

$tableEvents["CALENDAR_BUSINESS_HOURS"] = new eventsBase;
$tdataCALENDAR_BUSINESS_HOURS[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCALENDAR_HOLIDAYS = array();
	$tdataCALENDAR_HOLIDAYS[".truncateText"] = true;
	$tdataCALENDAR_HOLIDAYS[".NumberOfChars"] = 80;
	$tdataCALENDAR_HOLIDAYS[".ShortName"] = "CALENDAR_HOLIDAYS";
	$tdataCALENDAR_HOLIDAYS[".OwnerID"] = "";
	$tdataCALENDAR_HOLIDAYS[".OriginalTable"] = "CALENDAR_HOLIDAYS";

//	field labels
$fieldLabelsCALENDAR_HOLIDAYS = array();
$fieldToolTipsCALENDAR_HOLIDAYS = array();
$pageTitlesCALENDAR_HOLIDAYS = array();
$placeHoldersCALENDAR_HOLIDAYS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCALENDAR_HOLIDAYS["Japanese"] = array();
	$fieldToolTipsCALENDAR_HOLIDAYS["Japanese"] = array();
	$placeHoldersCALENDAR_HOLIDAYS["Japanese"] = array();
	$pageTitlesCALENDAR_HOLIDAYS["Japanese"] = array();
	$fieldLabelsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_NAME"] = "CALENDAR HOLIDAY NAME";
	$fieldToolTipsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_NAME"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_NAME"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_START"] = "CALENDAR HOLIDAY START";
	$fieldToolTipsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_START"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_START"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_END"] = "CALENDAR HOLIDAY END";
	$fieldToolTipsCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_END"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["Japanese"]["CALENDAR_HOLIDAY_END"] = "";
	if (count($fieldToolTipsCALENDAR_HOLIDAYS["Japanese"]))
		$tdataCALENDAR_HOLIDAYS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCALENDAR_HOLIDAYS["English"] = array();
	$fieldToolTipsCALENDAR_HOLIDAYS["English"] = array();
	$placeHoldersCALENDAR_HOLIDAYS["English"] = array();
	$pageTitlesCALENDAR_HOLIDAYS["English"] = array();
	$fieldLabelsCALENDAR_HOLIDAYS["English"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_HOLIDAYS["English"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["English"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_NAME"] = "CALENDAR HOLIDAY NAME";
	$fieldToolTipsCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_NAME"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_NAME"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_START"] = "CALENDAR HOLIDAY START";
	$fieldToolTipsCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_START"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_START"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_END"] = "CALENDAR HOLIDAY END";
	$fieldToolTipsCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_END"] = "";
	$placeHoldersCALENDAR_HOLIDAYS["English"]["CALENDAR_HOLIDAY_END"] = "";
	if (count($fieldToolTipsCALENDAR_HOLIDAYS["English"]))
		$tdataCALENDAR_HOLIDAYS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCALENDAR_HOLIDAYS[""] = array();
	$fieldToolTipsCALENDAR_HOLIDAYS[""] = array();
	$placeHoldersCALENDAR_HOLIDAYS[""] = array();
	$pageTitlesCALENDAR_HOLIDAYS[""] = array();
	$fieldLabelsCALENDAR_HOLIDAYS[""]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_HOLIDAYS[""]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_HOLIDAYS[""]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_NAME"] = "CALENDAR HOLIDAY NAME";
	$fieldToolTipsCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_NAME"] = "";
	$placeHoldersCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_NAME"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_START"] = "CALENDAR HOLIDAY START";
	$fieldToolTipsCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_START"] = "";
	$placeHoldersCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_START"] = "";
	$fieldLabelsCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_END"] = "CALENDAR HOLIDAY END";
	$fieldToolTipsCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_END"] = "";
	$placeHoldersCALENDAR_HOLIDAYS[""]["CALENDAR_HOLIDAY_END"] = "";
	if (count($fieldToolTipsCALENDAR_HOLIDAYS[""]))
		$tdataCALENDAR_HOLIDAYS[".isUseToolTips"] = true;
}


	$tdataCALENDAR_HOLIDAYS[".NCSearch"] = true;



$tdataCALENDAR_HOLIDAYS[".shortTableName"] = "CALENDAR_HOLIDAYS";
$tdataCALENDAR_HOLIDAYS[".nSecOptions"] = 0;
$tdataCALENDAR_HOLIDAYS[".recsPerRowPrint"] = 1;
$tdataCALENDAR_HOLIDAYS[".mainTableOwnerID"] = "";
$tdataCALENDAR_HOLIDAYS[".moveNext"] = 1;
$tdataCALENDAR_HOLIDAYS[".entityType"] = 0;

$tdataCALENDAR_HOLIDAYS[".strOriginalTableName"] = "CALENDAR_HOLIDAYS";

	



$tdataCALENDAR_HOLIDAYS[".showAddInPopup"] = false;

$tdataCALENDAR_HOLIDAYS[".showEditInPopup"] = false;

$tdataCALENDAR_HOLIDAYS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCALENDAR_HOLIDAYS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCALENDAR_HOLIDAYS[".fieldsForRegister"] = array();
	
$tdataCALENDAR_HOLIDAYS[".listAjax"] = false;

	$tdataCALENDAR_HOLIDAYS[".audit"] = false;

	$tdataCALENDAR_HOLIDAYS[".locking"] = false;

$tdataCALENDAR_HOLIDAYS[".edit"] = true;
$tdataCALENDAR_HOLIDAYS[".afterEditAction"] = 1;
$tdataCALENDAR_HOLIDAYS[".closePopupAfterEdit"] = 1;
$tdataCALENDAR_HOLIDAYS[".afterEditActionDetTable"] = "";

$tdataCALENDAR_HOLIDAYS[".add"] = true;
$tdataCALENDAR_HOLIDAYS[".afterAddAction"] = 1;
$tdataCALENDAR_HOLIDAYS[".closePopupAfterAdd"] = 1;
$tdataCALENDAR_HOLIDAYS[".afterAddActionDetTable"] = "";

$tdataCALENDAR_HOLIDAYS[".list"] = true;



$tdataCALENDAR_HOLIDAYS[".reorderRecordsByHeader"] = true;



$tdataCALENDAR_HOLIDAYS[".view"] = true;

$tdataCALENDAR_HOLIDAYS[".import"] = true;

$tdataCALENDAR_HOLIDAYS[".exportTo"] = true;

$tdataCALENDAR_HOLIDAYS[".printFriendly"] = true;

$tdataCALENDAR_HOLIDAYS[".delete"] = true;

$tdataCALENDAR_HOLIDAYS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCALENDAR_HOLIDAYS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCALENDAR_HOLIDAYS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCALENDAR_HOLIDAYS[".searchSaving"] = false;
//

$tdataCALENDAR_HOLIDAYS[".showSearchPanel"] = true;
		$tdataCALENDAR_HOLIDAYS[".flexibleSearch"] = true;

$tdataCALENDAR_HOLIDAYS[".isUseAjaxSuggest"] = true;

$tdataCALENDAR_HOLIDAYS[".rowHighlite"] = true;



				

$tdataCALENDAR_HOLIDAYS[".ajaxCodeSnippetAdded"] = false;

$tdataCALENDAR_HOLIDAYS[".buttonsAdded"] = false;

$tdataCALENDAR_HOLIDAYS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCALENDAR_HOLIDAYS[".isUseTimeForSearch"] = false;





$tdataCALENDAR_HOLIDAYS[".allSearchFields"] = array();
$tdataCALENDAR_HOLIDAYS[".filterFields"] = array();
$tdataCALENDAR_HOLIDAYS[".requiredSearchFields"] = array();

$tdataCALENDAR_HOLIDAYS[".allSearchFields"][] = "CALENDAR_UID";
	$tdataCALENDAR_HOLIDAYS[".allSearchFields"][] = "CALENDAR_HOLIDAY_NAME";
	$tdataCALENDAR_HOLIDAYS[".allSearchFields"][] = "CALENDAR_HOLIDAY_START";
	$tdataCALENDAR_HOLIDAYS[".allSearchFields"][] = "CALENDAR_HOLIDAY_END";
	

$tdataCALENDAR_HOLIDAYS[".googleLikeFields"] = array();
$tdataCALENDAR_HOLIDAYS[".googleLikeFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".googleLikeFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".googleLikeFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".googleLikeFields"][] = "CALENDAR_HOLIDAY_END";


$tdataCALENDAR_HOLIDAYS[".advSearchFields"] = array();
$tdataCALENDAR_HOLIDAYS[".advSearchFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".advSearchFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".advSearchFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".advSearchFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".tableType"] = "list";

$tdataCALENDAR_HOLIDAYS[".printerPageOrientation"] = 0;
$tdataCALENDAR_HOLIDAYS[".nPrinterPageScale"] = 100;

$tdataCALENDAR_HOLIDAYS[".nPrinterSplitRecords"] = 40;

$tdataCALENDAR_HOLIDAYS[".nPrinterPDFSplitRecords"] = 40;



$tdataCALENDAR_HOLIDAYS[".geocodingEnabled"] = false;





$tdataCALENDAR_HOLIDAYS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataCALENDAR_HOLIDAYS[".pageSize"] = 20;

$tdataCALENDAR_HOLIDAYS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCALENDAR_HOLIDAYS[".strOrderBy"] = $tstrOrderBy;

$tdataCALENDAR_HOLIDAYS[".orderindexes"] = array();

$tdataCALENDAR_HOLIDAYS[".sqlHead"] = "SELECT CALENDAR_UID,  	CALENDAR_HOLIDAY_NAME,  	CALENDAR_HOLIDAY_START,  	CALENDAR_HOLIDAY_END";
$tdataCALENDAR_HOLIDAYS[".sqlFrom"] = "FROM CALENDAR_HOLIDAYS";
$tdataCALENDAR_HOLIDAYS[".sqlWhereExpr"] = "";
$tdataCALENDAR_HOLIDAYS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCALENDAR_HOLIDAYS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCALENDAR_HOLIDAYS[".arrGroupsPerPage"] = $arrGPP;

$tdataCALENDAR_HOLIDAYS[".highlightSearchResults"] = true;

$tableKeysCALENDAR_HOLIDAYS = array();
$tableKeysCALENDAR_HOLIDAYS[] = "CALENDAR_UID";
$tableKeysCALENDAR_HOLIDAYS[] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".Keys"] = $tableKeysCALENDAR_HOLIDAYS;

$tdataCALENDAR_HOLIDAYS[".listFields"] = array();
$tdataCALENDAR_HOLIDAYS[".listFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".listFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".listFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".listFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".hideMobileList"] = array();


$tdataCALENDAR_HOLIDAYS[".viewFields"] = array();
$tdataCALENDAR_HOLIDAYS[".viewFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".viewFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".viewFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".viewFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".addFields"] = array();
$tdataCALENDAR_HOLIDAYS[".addFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".addFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".addFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".addFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".masterListFields"] = array();
$tdataCALENDAR_HOLIDAYS[".masterListFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".masterListFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".masterListFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".masterListFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".inlineAddFields"] = array();
$tdataCALENDAR_HOLIDAYS[".inlineAddFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".inlineAddFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".inlineAddFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".inlineAddFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".editFields"] = array();
$tdataCALENDAR_HOLIDAYS[".editFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".editFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".editFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".editFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".inlineEditFields"] = array();
$tdataCALENDAR_HOLIDAYS[".inlineEditFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".inlineEditFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".inlineEditFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".inlineEditFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".updateSelectedFields"] = array();
$tdataCALENDAR_HOLIDAYS[".updateSelectedFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".updateSelectedFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".updateSelectedFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".updateSelectedFields"][] = "CALENDAR_HOLIDAY_END";


$tdataCALENDAR_HOLIDAYS[".exportFields"] = array();
$tdataCALENDAR_HOLIDAYS[".exportFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".exportFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".exportFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".exportFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".importFields"] = array();
$tdataCALENDAR_HOLIDAYS[".importFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".importFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".importFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".importFields"][] = "CALENDAR_HOLIDAY_END";

$tdataCALENDAR_HOLIDAYS[".printFields"] = array();
$tdataCALENDAR_HOLIDAYS[".printFields"][] = "CALENDAR_UID";
$tdataCALENDAR_HOLIDAYS[".printFields"][] = "CALENDAR_HOLIDAY_NAME";
$tdataCALENDAR_HOLIDAYS[".printFields"][] = "CALENDAR_HOLIDAY_START";
$tdataCALENDAR_HOLIDAYS[".printFields"][] = "CALENDAR_HOLIDAY_END";

//	CALENDAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CALENDAR_UID";
	$fdata["GoodName"] = "CALENDAR_UID";
	$fdata["ownerTable"] = "CALENDAR_HOLIDAYS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_HOLIDAYS","CALENDAR_UID");
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




	$tdataCALENDAR_HOLIDAYS["CALENDAR_UID"] = $fdata;
//	CALENDAR_HOLIDAY_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CALENDAR_HOLIDAY_NAME";
	$fdata["GoodName"] = "CALENDAR_HOLIDAY_NAME";
	$fdata["ownerTable"] = "CALENDAR_HOLIDAYS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_HOLIDAYS","CALENDAR_HOLIDAY_NAME");
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

		$fdata["strField"] = "CALENDAR_HOLIDAY_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_HOLIDAY_NAME";

	
	
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




	$tdataCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_NAME"] = $fdata;
//	CALENDAR_HOLIDAY_START
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CALENDAR_HOLIDAY_START";
	$fdata["GoodName"] = "CALENDAR_HOLIDAY_START";
	$fdata["ownerTable"] = "CALENDAR_HOLIDAYS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_HOLIDAYS","CALENDAR_HOLIDAY_START");
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

		$fdata["strField"] = "CALENDAR_HOLIDAY_START";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_HOLIDAY_START";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_START"] = $fdata;
//	CALENDAR_HOLIDAY_END
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CALENDAR_HOLIDAY_END";
	$fdata["GoodName"] = "CALENDAR_HOLIDAY_END";
	$fdata["ownerTable"] = "CALENDAR_HOLIDAYS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_HOLIDAYS","CALENDAR_HOLIDAY_END");
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

		$fdata["strField"] = "CALENDAR_HOLIDAY_END";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_HOLIDAY_END";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataCALENDAR_HOLIDAYS["CALENDAR_HOLIDAY_END"] = $fdata;


$tables_data["CALENDAR_HOLIDAYS"]=&$tdataCALENDAR_HOLIDAYS;
$field_labels["CALENDAR_HOLIDAYS"] = &$fieldLabelsCALENDAR_HOLIDAYS;
$fieldToolTips["CALENDAR_HOLIDAYS"] = &$fieldToolTipsCALENDAR_HOLIDAYS;
$placeHolders["CALENDAR_HOLIDAYS"] = &$placeHoldersCALENDAR_HOLIDAYS;
$page_titles["CALENDAR_HOLIDAYS"] = &$pageTitlesCALENDAR_HOLIDAYS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CALENDAR_HOLIDAYS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CALENDAR_HOLIDAYS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CALENDAR_HOLIDAYS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CALENDAR_UID,  	CALENDAR_HOLIDAY_NAME,  	CALENDAR_HOLIDAY_START,  	CALENDAR_HOLIDAY_END";
$proto0["m_strFrom"] = "FROM CALENDAR_HOLIDAYS";
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
	"m_strTable" => "CALENDAR_HOLIDAYS",
	"m_srcTableName" => "CALENDAR_HOLIDAYS"
));

$proto6["m_sql"] = "CALENDAR_UID";
$proto6["m_srcTableName"] = "CALENDAR_HOLIDAYS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_HOLIDAY_NAME",
	"m_strTable" => "CALENDAR_HOLIDAYS",
	"m_srcTableName" => "CALENDAR_HOLIDAYS"
));

$proto8["m_sql"] = "CALENDAR_HOLIDAY_NAME";
$proto8["m_srcTableName"] = "CALENDAR_HOLIDAYS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_HOLIDAY_START",
	"m_strTable" => "CALENDAR_HOLIDAYS",
	"m_srcTableName" => "CALENDAR_HOLIDAYS"
));

$proto10["m_sql"] = "CALENDAR_HOLIDAY_START";
$proto10["m_srcTableName"] = "CALENDAR_HOLIDAYS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_HOLIDAY_END",
	"m_strTable" => "CALENDAR_HOLIDAYS",
	"m_srcTableName" => "CALENDAR_HOLIDAYS"
));

$proto12["m_sql"] = "CALENDAR_HOLIDAY_END";
$proto12["m_srcTableName"] = "CALENDAR_HOLIDAYS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "CALENDAR_HOLIDAYS";
$proto15["m_srcTableName"] = "CALENDAR_HOLIDAYS";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CALENDAR_UID";
$proto15["m_columns"][] = "CALENDAR_HOLIDAY_NAME";
$proto15["m_columns"][] = "CALENDAR_HOLIDAY_START";
$proto15["m_columns"][] = "CALENDAR_HOLIDAY_END";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "CALENDAR_HOLIDAYS";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "CALENDAR_HOLIDAYS";
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
$proto0["m_srcTableName"]="CALENDAR_HOLIDAYS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CALENDAR_HOLIDAYS = createSqlQuery_CALENDAR_HOLIDAYS();


	
						;

				

$tdataCALENDAR_HOLIDAYS[".sqlquery"] = $queryData_CALENDAR_HOLIDAYS;

$tableEvents["CALENDAR_HOLIDAYS"] = new eventsBase;
$tdataCALENDAR_HOLIDAYS[".hasEvents"] = false;

?>
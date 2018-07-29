<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUSERS_PROPERTIES = array();
	$tdataUSERS_PROPERTIES[".truncateText"] = true;
	$tdataUSERS_PROPERTIES[".NumberOfChars"] = 20;
	$tdataUSERS_PROPERTIES[".ShortName"] = "USERS_PROPERTIES";
	$tdataUSERS_PROPERTIES[".OwnerID"] = "";
	$tdataUSERS_PROPERTIES[".OriginalTable"] = "USERS_PROPERTIES";

//	field labels
$fieldLabelsUSERS_PROPERTIES = array();
$fieldToolTipsUSERS_PROPERTIES = array();
$pageTitlesUSERS_PROPERTIES = array();
$placeHoldersUSERS_PROPERTIES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsUSERS_PROPERTIES["Japanese"] = array();
	$fieldToolTipsUSERS_PROPERTIES["Japanese"] = array();
	$placeHoldersUSERS_PROPERTIES["Japanese"] = array();
	$pageTitlesUSERS_PROPERTIES["Japanese"] = array();
	$fieldLabelsUSERS_PROPERTIES["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsUSERS_PROPERTIES["Japanese"]["USR_UID"] = "";
	$placeHoldersUSERS_PROPERTIES["Japanese"]["USR_UID"] = "";
	$fieldLabelsUSERS_PROPERTIES["Japanese"]["USR_LAST_UPDATE_DATE"] = "USR最終更新日";
	$fieldToolTipsUSERS_PROPERTIES["Japanese"]["USR_LAST_UPDATE_DATE"] = "";
	$placeHoldersUSERS_PROPERTIES["Japanese"]["USR_LAST_UPDATE_DATE"] = "";
	$fieldLabelsUSERS_PROPERTIES["Japanese"]["USR_LOGGED_NEXT_TIME"] = "USR次回ログイン";
	$fieldToolTipsUSERS_PROPERTIES["Japanese"]["USR_LOGGED_NEXT_TIME"] = "";
	$placeHoldersUSERS_PROPERTIES["Japanese"]["USR_LOGGED_NEXT_TIME"] = "";
	$fieldLabelsUSERS_PROPERTIES["Japanese"]["USR_PASSWORD_HISTORY"] = "USRパスワード履歴";
	$fieldToolTipsUSERS_PROPERTIES["Japanese"]["USR_PASSWORD_HISTORY"] = "";
	$placeHoldersUSERS_PROPERTIES["Japanese"]["USR_PASSWORD_HISTORY"] = "";
	if (count($fieldToolTipsUSERS_PROPERTIES["Japanese"]))
		$tdataUSERS_PROPERTIES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUSERS_PROPERTIES["English"] = array();
	$fieldToolTipsUSERS_PROPERTIES["English"] = array();
	$placeHoldersUSERS_PROPERTIES["English"] = array();
	$pageTitlesUSERS_PROPERTIES["English"] = array();
	$fieldLabelsUSERS_PROPERTIES["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsUSERS_PROPERTIES["English"]["USR_UID"] = "";
	$placeHoldersUSERS_PROPERTIES["English"]["USR_UID"] = "";
	$fieldLabelsUSERS_PROPERTIES["English"]["USR_LAST_UPDATE_DATE"] = "USR最終更新日";
	$fieldToolTipsUSERS_PROPERTIES["English"]["USR_LAST_UPDATE_DATE"] = "";
	$placeHoldersUSERS_PROPERTIES["English"]["USR_LAST_UPDATE_DATE"] = "";
	$fieldLabelsUSERS_PROPERTIES["English"]["USR_LOGGED_NEXT_TIME"] = "USR次回ログイン";
	$fieldToolTipsUSERS_PROPERTIES["English"]["USR_LOGGED_NEXT_TIME"] = "";
	$placeHoldersUSERS_PROPERTIES["English"]["USR_LOGGED_NEXT_TIME"] = "";
	$fieldLabelsUSERS_PROPERTIES["English"]["USR_PASSWORD_HISTORY"] = "USRパスワード履歴";
	$fieldToolTipsUSERS_PROPERTIES["English"]["USR_PASSWORD_HISTORY"] = "";
	$placeHoldersUSERS_PROPERTIES["English"]["USR_PASSWORD_HISTORY"] = "";
	if (count($fieldToolTipsUSERS_PROPERTIES["English"]))
		$tdataUSERS_PROPERTIES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUSERS_PROPERTIES[""] = array();
	$fieldToolTipsUSERS_PROPERTIES[""] = array();
	$placeHoldersUSERS_PROPERTIES[""] = array();
	$pageTitlesUSERS_PROPERTIES[""] = array();
	if (count($fieldToolTipsUSERS_PROPERTIES[""]))
		$tdataUSERS_PROPERTIES[".isUseToolTips"] = true;
}


	$tdataUSERS_PROPERTIES[".NCSearch"] = true;



$tdataUSERS_PROPERTIES[".shortTableName"] = "USERS_PROPERTIES";
$tdataUSERS_PROPERTIES[".nSecOptions"] = 0;
$tdataUSERS_PROPERTIES[".recsPerRowPrint"] = 1;
$tdataUSERS_PROPERTIES[".mainTableOwnerID"] = "";
$tdataUSERS_PROPERTIES[".moveNext"] = 0;
$tdataUSERS_PROPERTIES[".entityType"] = 0;

$tdataUSERS_PROPERTIES[".strOriginalTableName"] = "USERS_PROPERTIES";

	



$tdataUSERS_PROPERTIES[".showAddInPopup"] = false;

$tdataUSERS_PROPERTIES[".showEditInPopup"] = false;

$tdataUSERS_PROPERTIES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUSERS_PROPERTIES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUSERS_PROPERTIES[".fieldsForRegister"] = array();
	
$tdataUSERS_PROPERTIES[".listAjax"] = false;

	$tdataUSERS_PROPERTIES[".audit"] = true;

	$tdataUSERS_PROPERTIES[".locking"] = false;

$tdataUSERS_PROPERTIES[".edit"] = true;
$tdataUSERS_PROPERTIES[".afterEditAction"] = 1;
$tdataUSERS_PROPERTIES[".closePopupAfterEdit"] = 1;
$tdataUSERS_PROPERTIES[".afterEditActionDetTable"] = "";

$tdataUSERS_PROPERTIES[".add"] = true;
$tdataUSERS_PROPERTIES[".afterAddAction"] = 1;
$tdataUSERS_PROPERTIES[".closePopupAfterAdd"] = 1;
$tdataUSERS_PROPERTIES[".afterAddActionDetTable"] = "";

$tdataUSERS_PROPERTIES[".list"] = true;

$tdataUSERS_PROPERTIES[".inlineEdit"] = true;


$tdataUSERS_PROPERTIES[".reorderRecordsByHeader"] = true;
$tdataUSERS_PROPERTIES[".createSortByDropdown"] = true;
$tdataUSERS_PROPERTIES[".strSortControlSettingsJSON"] = "";



$tdataUSERS_PROPERTIES[".inlineAdd"] = true;
$tdataUSERS_PROPERTIES[".view"] = true;

$tdataUSERS_PROPERTIES[".import"] = true;

$tdataUSERS_PROPERTIES[".exportTo"] = true;

$tdataUSERS_PROPERTIES[".printFriendly"] = true;

$tdataUSERS_PROPERTIES[".delete"] = true;

$tdataUSERS_PROPERTIES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataUSERS_PROPERTIES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataUSERS_PROPERTIES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataUSERS_PROPERTIES[".searchSaving"] = false;
//

$tdataUSERS_PROPERTIES[".showSearchPanel"] = true;
		$tdataUSERS_PROPERTIES[".flexibleSearch"] = true;

$tdataUSERS_PROPERTIES[".isUseAjaxSuggest"] = true;

$tdataUSERS_PROPERTIES[".rowHighlite"] = true;



																

$tdataUSERS_PROPERTIES[".ajaxCodeSnippetAdded"] = false;

$tdataUSERS_PROPERTIES[".buttonsAdded"] = false;

$tdataUSERS_PROPERTIES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUSERS_PROPERTIES[".isUseTimeForSearch"] = false;



$tdataUSERS_PROPERTIES[".badgeColor"] = "e67349";


$tdataUSERS_PROPERTIES[".allSearchFields"] = array();
$tdataUSERS_PROPERTIES[".filterFields"] = array();
$tdataUSERS_PROPERTIES[".requiredSearchFields"] = array();

$tdataUSERS_PROPERTIES[".allSearchFields"][] = "USR_UID";
	$tdataUSERS_PROPERTIES[".allSearchFields"][] = "USR_LAST_UPDATE_DATE";
	$tdataUSERS_PROPERTIES[".allSearchFields"][] = "USR_LOGGED_NEXT_TIME";
	$tdataUSERS_PROPERTIES[".allSearchFields"][] = "USR_PASSWORD_HISTORY";
	

$tdataUSERS_PROPERTIES[".googleLikeFields"] = array();
$tdataUSERS_PROPERTIES[".googleLikeFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".googleLikeFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".googleLikeFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".googleLikeFields"][] = "USR_PASSWORD_HISTORY";


$tdataUSERS_PROPERTIES[".advSearchFields"] = array();
$tdataUSERS_PROPERTIES[".advSearchFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".advSearchFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".advSearchFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".advSearchFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".tableType"] = "list";

$tdataUSERS_PROPERTIES[".printerPageOrientation"] = 0;
$tdataUSERS_PROPERTIES[".nPrinterPageScale"] = 100;

$tdataUSERS_PROPERTIES[".nPrinterSplitRecords"] = 40;

$tdataUSERS_PROPERTIES[".nPrinterPDFSplitRecords"] = 40;



$tdataUSERS_PROPERTIES[".geocodingEnabled"] = false;





$tdataUSERS_PROPERTIES[".listGridLayout"] = 3;


$tdataUSERS_PROPERTIES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataUSERS_PROPERTIES[".pageSize"] = 20;

$tdataUSERS_PROPERTIES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUSERS_PROPERTIES[".strOrderBy"] = $tstrOrderBy;

$tdataUSERS_PROPERTIES[".orderindexes"] = array();

$tdataUSERS_PROPERTIES[".sqlHead"] = "SELECT USR_UID,  	USR_LAST_UPDATE_DATE,  	USR_LOGGED_NEXT_TIME,  	USR_PASSWORD_HISTORY";
$tdataUSERS_PROPERTIES[".sqlFrom"] = "FROM USERS_PROPERTIES";
$tdataUSERS_PROPERTIES[".sqlWhereExpr"] = "";
$tdataUSERS_PROPERTIES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUSERS_PROPERTIES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUSERS_PROPERTIES[".arrGroupsPerPage"] = $arrGPP;

$tdataUSERS_PROPERTIES[".highlightSearchResults"] = true;

$tableKeysUSERS_PROPERTIES = array();
$tableKeysUSERS_PROPERTIES[] = "USR_UID";
$tdataUSERS_PROPERTIES[".Keys"] = $tableKeysUSERS_PROPERTIES;

$tdataUSERS_PROPERTIES[".listFields"] = array();
$tdataUSERS_PROPERTIES[".listFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".listFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".listFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".listFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".hideMobileList"] = array();


$tdataUSERS_PROPERTIES[".viewFields"] = array();
$tdataUSERS_PROPERTIES[".viewFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".viewFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".viewFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".viewFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".addFields"] = array();
$tdataUSERS_PROPERTIES[".addFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".addFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".addFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".addFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".masterListFields"] = array();
$tdataUSERS_PROPERTIES[".masterListFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".masterListFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".masterListFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".masterListFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".inlineAddFields"] = array();
$tdataUSERS_PROPERTIES[".inlineAddFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".inlineAddFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".inlineAddFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".inlineAddFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".editFields"] = array();
$tdataUSERS_PROPERTIES[".editFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".editFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".editFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".editFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".inlineEditFields"] = array();
$tdataUSERS_PROPERTIES[".inlineEditFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".inlineEditFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".inlineEditFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".inlineEditFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".updateSelectedFields"] = array();
$tdataUSERS_PROPERTIES[".updateSelectedFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".updateSelectedFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".updateSelectedFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".updateSelectedFields"][] = "USR_PASSWORD_HISTORY";


$tdataUSERS_PROPERTIES[".exportFields"] = array();
$tdataUSERS_PROPERTIES[".exportFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".exportFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".exportFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".exportFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".importFields"] = array();
$tdataUSERS_PROPERTIES[".importFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".importFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".importFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".importFields"][] = "USR_PASSWORD_HISTORY";

$tdataUSERS_PROPERTIES[".printFields"] = array();
$tdataUSERS_PROPERTIES[".printFields"][] = "USR_UID";
$tdataUSERS_PROPERTIES[".printFields"][] = "USR_LAST_UPDATE_DATE";
$tdataUSERS_PROPERTIES[".printFields"][] = "USR_LOGGED_NEXT_TIME";
$tdataUSERS_PROPERTIES[".printFields"][] = "USR_PASSWORD_HISTORY";

//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "USERS_PROPERTIES";
	$fdata["Label"] = GetFieldLabel("USERS_PROPERTIES","USR_UID");
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




	$tdataUSERS_PROPERTIES["USR_UID"] = $fdata;
//	USR_LAST_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_LAST_UPDATE_DATE";
	$fdata["GoodName"] = "USR_LAST_UPDATE_DATE";
	$fdata["ownerTable"] = "USERS_PROPERTIES";
	$fdata["Label"] = GetFieldLabel("USERS_PROPERTIES","USR_LAST_UPDATE_DATE");
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

		$fdata["strField"] = "USR_LAST_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_LAST_UPDATE_DATE";

	
	
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




	$tdataUSERS_PROPERTIES["USR_LAST_UPDATE_DATE"] = $fdata;
//	USR_LOGGED_NEXT_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_LOGGED_NEXT_TIME";
	$fdata["GoodName"] = "USR_LOGGED_NEXT_TIME";
	$fdata["ownerTable"] = "USERS_PROPERTIES";
	$fdata["Label"] = GetFieldLabel("USERS_PROPERTIES","USR_LOGGED_NEXT_TIME");
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

		$fdata["strField"] = "USR_LOGGED_NEXT_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_LOGGED_NEXT_TIME";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataUSERS_PROPERTIES["USR_LOGGED_NEXT_TIME"] = $fdata;
//	USR_PASSWORD_HISTORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USR_PASSWORD_HISTORY";
	$fdata["GoodName"] = "USR_PASSWORD_HISTORY";
	$fdata["ownerTable"] = "USERS_PROPERTIES";
	$fdata["Label"] = GetFieldLabel("USERS_PROPERTIES","USR_PASSWORD_HISTORY");
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

		$fdata["strField"] = "USR_PASSWORD_HISTORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_PASSWORD_HISTORY";

	
	
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




	$tdataUSERS_PROPERTIES["USR_PASSWORD_HISTORY"] = $fdata;


$tables_data["USERS_PROPERTIES"]=&$tdataUSERS_PROPERTIES;
$field_labels["USERS_PROPERTIES"] = &$fieldLabelsUSERS_PROPERTIES;
$fieldToolTips["USERS_PROPERTIES"] = &$fieldToolTipsUSERS_PROPERTIES;
$placeHolders["USERS_PROPERTIES"] = &$placeHoldersUSERS_PROPERTIES;
$page_titles["USERS_PROPERTIES"] = &$pageTitlesUSERS_PROPERTIES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["USERS_PROPERTIES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["USERS_PROPERTIES"] = array();


	
				$strOriginalDetailsTable="USERS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="USERS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "USERS";
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
					$masterTablesData["USERS_PROPERTIES"][0] = $masterParams;
				$masterTablesData["USERS_PROPERTIES"][0]["masterKeys"] = array();
	$masterTablesData["USERS_PROPERTIES"][0]["masterKeys"][]="USR_UID";
				$masterTablesData["USERS_PROPERTIES"][0]["detailKeys"] = array();
	$masterTablesData["USERS_PROPERTIES"][0]["detailKeys"][]="USR_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_USERS_PROPERTIES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USR_UID,  	USR_LAST_UPDATE_DATE,  	USR_LOGGED_NEXT_TIME,  	USR_PASSWORD_HISTORY";
$proto0["m_strFrom"] = "FROM USERS_PROPERTIES";
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
	"m_strName" => "USR_UID",
	"m_strTable" => "USERS_PROPERTIES",
	"m_srcTableName" => "USERS_PROPERTIES"
));

$proto6["m_sql"] = "USR_UID";
$proto6["m_srcTableName"] = "USERS_PROPERTIES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LAST_UPDATE_DATE",
	"m_strTable" => "USERS_PROPERTIES",
	"m_srcTableName" => "USERS_PROPERTIES"
));

$proto8["m_sql"] = "USR_LAST_UPDATE_DATE";
$proto8["m_srcTableName"] = "USERS_PROPERTIES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LOGGED_NEXT_TIME",
	"m_strTable" => "USERS_PROPERTIES",
	"m_srcTableName" => "USERS_PROPERTIES"
));

$proto10["m_sql"] = "USR_LOGGED_NEXT_TIME";
$proto10["m_srcTableName"] = "USERS_PROPERTIES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PASSWORD_HISTORY",
	"m_strTable" => "USERS_PROPERTIES",
	"m_srcTableName" => "USERS_PROPERTIES"
));

$proto12["m_sql"] = "USR_PASSWORD_HISTORY";
$proto12["m_srcTableName"] = "USERS_PROPERTIES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "USERS_PROPERTIES";
$proto15["m_srcTableName"] = "USERS_PROPERTIES";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "USR_UID";
$proto15["m_columns"][] = "USR_LAST_UPDATE_DATE";
$proto15["m_columns"][] = "USR_LOGGED_NEXT_TIME";
$proto15["m_columns"][] = "USR_PASSWORD_HISTORY";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "USERS_PROPERTIES";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "USERS_PROPERTIES";
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
$proto0["m_srcTableName"]="USERS_PROPERTIES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_USERS_PROPERTIES = createSqlQuery_USERS_PROPERTIES();


	
						;

				

$tdataUSERS_PROPERTIES[".sqlquery"] = $queryData_USERS_PROPERTIES;

$tableEvents["USERS_PROPERTIES"] = new eventsBase;
$tdataUSERS_PROPERTIES[".hasEvents"] = false;

?>
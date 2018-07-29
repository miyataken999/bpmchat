<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_FOLDER = array();
	$tdataAPP_FOLDER[".truncateText"] = true;
	$tdataAPP_FOLDER[".NumberOfChars"] = 20;
	$tdataAPP_FOLDER[".ShortName"] = "APP_FOLDER";
	$tdataAPP_FOLDER[".OwnerID"] = "";
	$tdataAPP_FOLDER[".OriginalTable"] = "APP_FOLDER";

//	field labels
$fieldLabelsAPP_FOLDER = array();
$fieldToolTipsAPP_FOLDER = array();
$pageTitlesAPP_FOLDER = array();
$placeHoldersAPP_FOLDER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_FOLDER["Japanese"] = array();
	$fieldToolTipsAPP_FOLDER["Japanese"] = array();
	$placeHoldersAPP_FOLDER["Japanese"] = array();
	$pageTitlesAPP_FOLDER["Japanese"] = array();
	$fieldLabelsAPP_FOLDER["Japanese"]["FOLDER_UID"] = "フォルダのUID";
	$fieldToolTipsAPP_FOLDER["Japanese"]["FOLDER_UID"] = "";
	$placeHoldersAPP_FOLDER["Japanese"]["FOLDER_UID"] = "";
	$fieldLabelsAPP_FOLDER["Japanese"]["FOLDER_PARENT_UID"] = "フォルダの親のuid";
	$fieldToolTipsAPP_FOLDER["Japanese"]["FOLDER_PARENT_UID"] = "";
	$placeHoldersAPP_FOLDER["Japanese"]["FOLDER_PARENT_UID"] = "";
	$fieldLabelsAPP_FOLDER["Japanese"]["FOLDER_NAME"] = "フォルダ名";
	$fieldToolTipsAPP_FOLDER["Japanese"]["FOLDER_NAME"] = "";
	$placeHoldersAPP_FOLDER["Japanese"]["FOLDER_NAME"] = "";
	$fieldLabelsAPP_FOLDER["Japanese"]["FOLDER_CREATE_DATE"] = "フォルダには、日付を作成します";
	$fieldToolTipsAPP_FOLDER["Japanese"]["FOLDER_CREATE_DATE"] = "";
	$placeHoldersAPP_FOLDER["Japanese"]["FOLDER_CREATE_DATE"] = "";
	$fieldLabelsAPP_FOLDER["Japanese"]["FOLDER_UPDATE_DATE"] = "フォルダの更新日時";
	$fieldToolTipsAPP_FOLDER["Japanese"]["FOLDER_UPDATE_DATE"] = "";
	$placeHoldersAPP_FOLDER["Japanese"]["FOLDER_UPDATE_DATE"] = "";
	if (count($fieldToolTipsAPP_FOLDER["Japanese"]))
		$tdataAPP_FOLDER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_FOLDER["English"] = array();
	$fieldToolTipsAPP_FOLDER["English"] = array();
	$placeHoldersAPP_FOLDER["English"] = array();
	$pageTitlesAPP_FOLDER["English"] = array();
	$fieldLabelsAPP_FOLDER["English"]["FOLDER_UID"] = "フォルダのUID";
	$fieldToolTipsAPP_FOLDER["English"]["FOLDER_UID"] = "";
	$placeHoldersAPP_FOLDER["English"]["FOLDER_UID"] = "";
	$fieldLabelsAPP_FOLDER["English"]["FOLDER_PARENT_UID"] = "フォルダの親のuid";
	$fieldToolTipsAPP_FOLDER["English"]["FOLDER_PARENT_UID"] = "";
	$placeHoldersAPP_FOLDER["English"]["FOLDER_PARENT_UID"] = "";
	$fieldLabelsAPP_FOLDER["English"]["FOLDER_NAME"] = "フォルダ名";
	$fieldToolTipsAPP_FOLDER["English"]["FOLDER_NAME"] = "";
	$placeHoldersAPP_FOLDER["English"]["FOLDER_NAME"] = "";
	$fieldLabelsAPP_FOLDER["English"]["FOLDER_CREATE_DATE"] = "フォルダには、日付を作成します";
	$fieldToolTipsAPP_FOLDER["English"]["FOLDER_CREATE_DATE"] = "";
	$placeHoldersAPP_FOLDER["English"]["FOLDER_CREATE_DATE"] = "";
	$fieldLabelsAPP_FOLDER["English"]["FOLDER_UPDATE_DATE"] = "フォルダの更新日時";
	$fieldToolTipsAPP_FOLDER["English"]["FOLDER_UPDATE_DATE"] = "";
	$placeHoldersAPP_FOLDER["English"]["FOLDER_UPDATE_DATE"] = "";
	if (count($fieldToolTipsAPP_FOLDER["English"]))
		$tdataAPP_FOLDER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_FOLDER[""] = array();
	$fieldToolTipsAPP_FOLDER[""] = array();
	$placeHoldersAPP_FOLDER[""] = array();
	$pageTitlesAPP_FOLDER[""] = array();
	if (count($fieldToolTipsAPP_FOLDER[""]))
		$tdataAPP_FOLDER[".isUseToolTips"] = true;
}


	$tdataAPP_FOLDER[".NCSearch"] = true;



$tdataAPP_FOLDER[".shortTableName"] = "APP_FOLDER";
$tdataAPP_FOLDER[".nSecOptions"] = 0;
$tdataAPP_FOLDER[".recsPerRowPrint"] = 1;
$tdataAPP_FOLDER[".mainTableOwnerID"] = "";
$tdataAPP_FOLDER[".moveNext"] = 0;
$tdataAPP_FOLDER[".entityType"] = 0;

$tdataAPP_FOLDER[".strOriginalTableName"] = "APP_FOLDER";

	



$tdataAPP_FOLDER[".showAddInPopup"] = false;

$tdataAPP_FOLDER[".showEditInPopup"] = false;

$tdataAPP_FOLDER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_FOLDER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_FOLDER[".fieldsForRegister"] = array();
	
$tdataAPP_FOLDER[".listAjax"] = false;

	$tdataAPP_FOLDER[".audit"] = true;

	$tdataAPP_FOLDER[".locking"] = false;

$tdataAPP_FOLDER[".edit"] = true;
$tdataAPP_FOLDER[".afterEditAction"] = 1;
$tdataAPP_FOLDER[".closePopupAfterEdit"] = 1;
$tdataAPP_FOLDER[".afterEditActionDetTable"] = "";

$tdataAPP_FOLDER[".add"] = true;
$tdataAPP_FOLDER[".afterAddAction"] = 1;
$tdataAPP_FOLDER[".closePopupAfterAdd"] = 1;
$tdataAPP_FOLDER[".afterAddActionDetTable"] = "";

$tdataAPP_FOLDER[".list"] = true;

$tdataAPP_FOLDER[".inlineEdit"] = true;


$tdataAPP_FOLDER[".reorderRecordsByHeader"] = true;
$tdataAPP_FOLDER[".createSortByDropdown"] = true;
$tdataAPP_FOLDER[".strSortControlSettingsJSON"] = "";



$tdataAPP_FOLDER[".inlineAdd"] = true;
$tdataAPP_FOLDER[".view"] = true;

$tdataAPP_FOLDER[".import"] = true;

$tdataAPP_FOLDER[".exportTo"] = true;

$tdataAPP_FOLDER[".printFriendly"] = true;

$tdataAPP_FOLDER[".delete"] = true;

$tdataAPP_FOLDER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_FOLDER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_FOLDER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_FOLDER[".searchSaving"] = false;
//

$tdataAPP_FOLDER[".showSearchPanel"] = true;
		$tdataAPP_FOLDER[".flexibleSearch"] = true;

$tdataAPP_FOLDER[".isUseAjaxSuggest"] = true;

$tdataAPP_FOLDER[".rowHighlite"] = true;



				

$tdataAPP_FOLDER[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_FOLDER[".buttonsAdded"] = false;

$tdataAPP_FOLDER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_FOLDER[".isUseTimeForSearch"] = false;





$tdataAPP_FOLDER[".allSearchFields"] = array();
$tdataAPP_FOLDER[".filterFields"] = array();
$tdataAPP_FOLDER[".requiredSearchFields"] = array();

$tdataAPP_FOLDER[".allSearchFields"][] = "FOLDER_UID";
	$tdataAPP_FOLDER[".allSearchFields"][] = "FOLDER_PARENT_UID";
	$tdataAPP_FOLDER[".allSearchFields"][] = "FOLDER_NAME";
	$tdataAPP_FOLDER[".allSearchFields"][] = "FOLDER_CREATE_DATE";
	$tdataAPP_FOLDER[".allSearchFields"][] = "FOLDER_UPDATE_DATE";
	

$tdataAPP_FOLDER[".googleLikeFields"] = array();
$tdataAPP_FOLDER[".googleLikeFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".googleLikeFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".googleLikeFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".googleLikeFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".googleLikeFields"][] = "FOLDER_UPDATE_DATE";


$tdataAPP_FOLDER[".advSearchFields"] = array();
$tdataAPP_FOLDER[".advSearchFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".advSearchFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".advSearchFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".advSearchFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".advSearchFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".tableType"] = "list";

$tdataAPP_FOLDER[".printerPageOrientation"] = 0;
$tdataAPP_FOLDER[".nPrinterPageScale"] = 100;

$tdataAPP_FOLDER[".nPrinterSplitRecords"] = 40;

$tdataAPP_FOLDER[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_FOLDER[".geocodingEnabled"] = false;





$tdataAPP_FOLDER[".listGridLayout"] = 3;


$tdataAPP_FOLDER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_FOLDER[".pageSize"] = 20;

$tdataAPP_FOLDER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_FOLDER[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_FOLDER[".orderindexes"] = array();

$tdataAPP_FOLDER[".sqlHead"] = "SELECT FOLDER_UID,  	FOLDER_PARENT_UID,  	FOLDER_NAME,  	FOLDER_CREATE_DATE,  	FOLDER_UPDATE_DATE";
$tdataAPP_FOLDER[".sqlFrom"] = "FROM APP_FOLDER";
$tdataAPP_FOLDER[".sqlWhereExpr"] = "";
$tdataAPP_FOLDER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_FOLDER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_FOLDER[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_FOLDER[".highlightSearchResults"] = true;

$tableKeysAPP_FOLDER = array();
$tableKeysAPP_FOLDER[] = "FOLDER_UID";
$tdataAPP_FOLDER[".Keys"] = $tableKeysAPP_FOLDER;

$tdataAPP_FOLDER[".listFields"] = array();
$tdataAPP_FOLDER[".listFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".listFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".listFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".listFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".listFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".hideMobileList"] = array();


$tdataAPP_FOLDER[".viewFields"] = array();
$tdataAPP_FOLDER[".viewFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".viewFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".viewFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".viewFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".viewFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".addFields"] = array();
$tdataAPP_FOLDER[".addFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".addFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".addFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".addFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".addFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".masterListFields"] = array();
$tdataAPP_FOLDER[".masterListFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".masterListFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".masterListFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".masterListFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".masterListFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".inlineAddFields"] = array();
$tdataAPP_FOLDER[".inlineAddFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".inlineAddFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".inlineAddFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".inlineAddFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".inlineAddFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".editFields"] = array();
$tdataAPP_FOLDER[".editFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".editFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".editFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".editFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".editFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".inlineEditFields"] = array();
$tdataAPP_FOLDER[".inlineEditFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".inlineEditFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".inlineEditFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".inlineEditFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".inlineEditFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".updateSelectedFields"] = array();
$tdataAPP_FOLDER[".updateSelectedFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".updateSelectedFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".updateSelectedFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".updateSelectedFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".updateSelectedFields"][] = "FOLDER_UPDATE_DATE";


$tdataAPP_FOLDER[".exportFields"] = array();
$tdataAPP_FOLDER[".exportFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".exportFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".exportFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".exportFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".exportFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".importFields"] = array();
$tdataAPP_FOLDER[".importFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".importFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".importFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".importFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".importFields"][] = "FOLDER_UPDATE_DATE";

$tdataAPP_FOLDER[".printFields"] = array();
$tdataAPP_FOLDER[".printFields"][] = "FOLDER_UID";
$tdataAPP_FOLDER[".printFields"][] = "FOLDER_PARENT_UID";
$tdataAPP_FOLDER[".printFields"][] = "FOLDER_NAME";
$tdataAPP_FOLDER[".printFields"][] = "FOLDER_CREATE_DATE";
$tdataAPP_FOLDER[".printFields"][] = "FOLDER_UPDATE_DATE";

//	FOLDER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FOLDER_UID";
	$fdata["GoodName"] = "FOLDER_UID";
	$fdata["ownerTable"] = "APP_FOLDER";
	$fdata["Label"] = GetFieldLabel("APP_FOLDER","FOLDER_UID");
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

		$fdata["strField"] = "FOLDER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOLDER_UID";

	
	
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




	$tdataAPP_FOLDER["FOLDER_UID"] = $fdata;
//	FOLDER_PARENT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FOLDER_PARENT_UID";
	$fdata["GoodName"] = "FOLDER_PARENT_UID";
	$fdata["ownerTable"] = "APP_FOLDER";
	$fdata["Label"] = GetFieldLabel("APP_FOLDER","FOLDER_PARENT_UID");
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

		$fdata["strField"] = "FOLDER_PARENT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOLDER_PARENT_UID";

	
	
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




	$tdataAPP_FOLDER["FOLDER_PARENT_UID"] = $fdata;
//	FOLDER_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FOLDER_NAME";
	$fdata["GoodName"] = "FOLDER_NAME";
	$fdata["ownerTable"] = "APP_FOLDER";
	$fdata["Label"] = GetFieldLabel("APP_FOLDER","FOLDER_NAME");
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

		$fdata["strField"] = "FOLDER_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOLDER_NAME";

	
	
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




	$tdataAPP_FOLDER["FOLDER_NAME"] = $fdata;
//	FOLDER_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FOLDER_CREATE_DATE";
	$fdata["GoodName"] = "FOLDER_CREATE_DATE";
	$fdata["ownerTable"] = "APP_FOLDER";
	$fdata["Label"] = GetFieldLabel("APP_FOLDER","FOLDER_CREATE_DATE");
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

		$fdata["strField"] = "FOLDER_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOLDER_CREATE_DATE";

	
	
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




	$tdataAPP_FOLDER["FOLDER_CREATE_DATE"] = $fdata;
//	FOLDER_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FOLDER_UPDATE_DATE";
	$fdata["GoodName"] = "FOLDER_UPDATE_DATE";
	$fdata["ownerTable"] = "APP_FOLDER";
	$fdata["Label"] = GetFieldLabel("APP_FOLDER","FOLDER_UPDATE_DATE");
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

		$fdata["strField"] = "FOLDER_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOLDER_UPDATE_DATE";

	
	
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




	$tdataAPP_FOLDER["FOLDER_UPDATE_DATE"] = $fdata;


$tables_data["APP_FOLDER"]=&$tdataAPP_FOLDER;
$field_labels["APP_FOLDER"] = &$fieldLabelsAPP_FOLDER;
$fieldToolTips["APP_FOLDER"] = &$fieldToolTipsAPP_FOLDER;
$placeHolders["APP_FOLDER"] = &$placeHoldersAPP_FOLDER;
$page_titles["APP_FOLDER"] = &$pageTitlesAPP_FOLDER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_FOLDER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_FOLDER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_FOLDER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FOLDER_UID,  	FOLDER_PARENT_UID,  	FOLDER_NAME,  	FOLDER_CREATE_DATE,  	FOLDER_UPDATE_DATE";
$proto0["m_strFrom"] = "FROM APP_FOLDER";
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
	"m_strName" => "FOLDER_UID",
	"m_strTable" => "APP_FOLDER",
	"m_srcTableName" => "APP_FOLDER"
));

$proto6["m_sql"] = "FOLDER_UID";
$proto6["m_srcTableName"] = "APP_FOLDER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FOLDER_PARENT_UID",
	"m_strTable" => "APP_FOLDER",
	"m_srcTableName" => "APP_FOLDER"
));

$proto8["m_sql"] = "FOLDER_PARENT_UID";
$proto8["m_srcTableName"] = "APP_FOLDER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FOLDER_NAME",
	"m_strTable" => "APP_FOLDER",
	"m_srcTableName" => "APP_FOLDER"
));

$proto10["m_sql"] = "FOLDER_NAME";
$proto10["m_srcTableName"] = "APP_FOLDER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FOLDER_CREATE_DATE",
	"m_strTable" => "APP_FOLDER",
	"m_srcTableName" => "APP_FOLDER"
));

$proto12["m_sql"] = "FOLDER_CREATE_DATE";
$proto12["m_srcTableName"] = "APP_FOLDER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FOLDER_UPDATE_DATE",
	"m_strTable" => "APP_FOLDER",
	"m_srcTableName" => "APP_FOLDER"
));

$proto14["m_sql"] = "FOLDER_UPDATE_DATE";
$proto14["m_srcTableName"] = "APP_FOLDER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "APP_FOLDER";
$proto17["m_srcTableName"] = "APP_FOLDER";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "FOLDER_UID";
$proto17["m_columns"][] = "FOLDER_PARENT_UID";
$proto17["m_columns"][] = "FOLDER_NAME";
$proto17["m_columns"][] = "FOLDER_CREATE_DATE";
$proto17["m_columns"][] = "FOLDER_UPDATE_DATE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "APP_FOLDER";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "APP_FOLDER";
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
$proto0["m_srcTableName"]="APP_FOLDER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_FOLDER = createSqlQuery_APP_FOLDER();


	
						;

					

$tdataAPP_FOLDER[".sqlquery"] = $queryData_APP_FOLDER;

$tableEvents["APP_FOLDER"] = new eventsBase;
$tdataAPP_FOLDER[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_SYSTEMS = array();
	$tdataRBAC_SYSTEMS[".truncateText"] = true;
	$tdataRBAC_SYSTEMS[".NumberOfChars"] = 20;
	$tdataRBAC_SYSTEMS[".ShortName"] = "RBAC_SYSTEMS";
	$tdataRBAC_SYSTEMS[".OwnerID"] = "";
	$tdataRBAC_SYSTEMS[".OriginalTable"] = "RBAC_SYSTEMS";

//	field labels
$fieldLabelsRBAC_SYSTEMS = array();
$fieldToolTipsRBAC_SYSTEMS = array();
$pageTitlesRBAC_SYSTEMS = array();
$placeHoldersRBAC_SYSTEMS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_SYSTEMS["Japanese"] = array();
	$fieldToolTipsRBAC_SYSTEMS["Japanese"] = array();
	$placeHoldersRBAC_SYSTEMS["Japanese"] = array();
	$pageTitlesRBAC_SYSTEMS["Japanese"] = array();
	$fieldLabelsRBAC_SYSTEMS["Japanese"]["SYS_UID"] = "SYS UID";
	$fieldToolTipsRBAC_SYSTEMS["Japanese"]["SYS_UID"] = "";
	$placeHoldersRBAC_SYSTEMS["Japanese"]["SYS_UID"] = "";
	$fieldLabelsRBAC_SYSTEMS["Japanese"]["SYS_CODE"] = "SYSコード";
	$fieldToolTipsRBAC_SYSTEMS["Japanese"]["SYS_CODE"] = "";
	$placeHoldersRBAC_SYSTEMS["Japanese"]["SYS_CODE"] = "";
	$fieldLabelsRBAC_SYSTEMS["Japanese"]["SYS_CREATE_DATE"] = "sysが日付を作成します";
	$fieldToolTipsRBAC_SYSTEMS["Japanese"]["SYS_CREATE_DATE"] = "";
	$placeHoldersRBAC_SYSTEMS["Japanese"]["SYS_CREATE_DATE"] = "";
	$fieldLabelsRBAC_SYSTEMS["Japanese"]["SYS_UPDATE_DATE"] = "SYS更新日";
	$fieldToolTipsRBAC_SYSTEMS["Japanese"]["SYS_UPDATE_DATE"] = "";
	$placeHoldersRBAC_SYSTEMS["Japanese"]["SYS_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_SYSTEMS["Japanese"]["SYS_STATUS"] = "SYS状況";
	$fieldToolTipsRBAC_SYSTEMS["Japanese"]["SYS_STATUS"] = "";
	$placeHoldersRBAC_SYSTEMS["Japanese"]["SYS_STATUS"] = "";
	if (count($fieldToolTipsRBAC_SYSTEMS["Japanese"]))
		$tdataRBAC_SYSTEMS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_SYSTEMS["English"] = array();
	$fieldToolTipsRBAC_SYSTEMS["English"] = array();
	$placeHoldersRBAC_SYSTEMS["English"] = array();
	$pageTitlesRBAC_SYSTEMS["English"] = array();
	$fieldLabelsRBAC_SYSTEMS["English"]["SYS_UID"] = "SYS UID";
	$fieldToolTipsRBAC_SYSTEMS["English"]["SYS_UID"] = "";
	$placeHoldersRBAC_SYSTEMS["English"]["SYS_UID"] = "";
	$fieldLabelsRBAC_SYSTEMS["English"]["SYS_CODE"] = "SYSコード";
	$fieldToolTipsRBAC_SYSTEMS["English"]["SYS_CODE"] = "";
	$placeHoldersRBAC_SYSTEMS["English"]["SYS_CODE"] = "";
	$fieldLabelsRBAC_SYSTEMS["English"]["SYS_CREATE_DATE"] = "sysが日付を作成します";
	$fieldToolTipsRBAC_SYSTEMS["English"]["SYS_CREATE_DATE"] = "";
	$placeHoldersRBAC_SYSTEMS["English"]["SYS_CREATE_DATE"] = "";
	$fieldLabelsRBAC_SYSTEMS["English"]["SYS_UPDATE_DATE"] = "SYS更新日";
	$fieldToolTipsRBAC_SYSTEMS["English"]["SYS_UPDATE_DATE"] = "";
	$placeHoldersRBAC_SYSTEMS["English"]["SYS_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_SYSTEMS["English"]["SYS_STATUS"] = "SYS状況";
	$fieldToolTipsRBAC_SYSTEMS["English"]["SYS_STATUS"] = "";
	$placeHoldersRBAC_SYSTEMS["English"]["SYS_STATUS"] = "";
	if (count($fieldToolTipsRBAC_SYSTEMS["English"]))
		$tdataRBAC_SYSTEMS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_SYSTEMS[""] = array();
	$fieldToolTipsRBAC_SYSTEMS[""] = array();
	$placeHoldersRBAC_SYSTEMS[""] = array();
	$pageTitlesRBAC_SYSTEMS[""] = array();
	if (count($fieldToolTipsRBAC_SYSTEMS[""]))
		$tdataRBAC_SYSTEMS[".isUseToolTips"] = true;
}


	$tdataRBAC_SYSTEMS[".NCSearch"] = true;



$tdataRBAC_SYSTEMS[".shortTableName"] = "RBAC_SYSTEMS";
$tdataRBAC_SYSTEMS[".nSecOptions"] = 0;
$tdataRBAC_SYSTEMS[".recsPerRowPrint"] = 1;
$tdataRBAC_SYSTEMS[".mainTableOwnerID"] = "";
$tdataRBAC_SYSTEMS[".moveNext"] = 0;
$tdataRBAC_SYSTEMS[".entityType"] = 0;

$tdataRBAC_SYSTEMS[".strOriginalTableName"] = "RBAC_SYSTEMS";

	



$tdataRBAC_SYSTEMS[".showAddInPopup"] = false;

$tdataRBAC_SYSTEMS[".showEditInPopup"] = false;

$tdataRBAC_SYSTEMS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_SYSTEMS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_SYSTEMS[".fieldsForRegister"] = array();
	
$tdataRBAC_SYSTEMS[".listAjax"] = false;

	$tdataRBAC_SYSTEMS[".audit"] = true;

	$tdataRBAC_SYSTEMS[".locking"] = false;

$tdataRBAC_SYSTEMS[".edit"] = true;
$tdataRBAC_SYSTEMS[".afterEditAction"] = 1;
$tdataRBAC_SYSTEMS[".closePopupAfterEdit"] = 1;
$tdataRBAC_SYSTEMS[".afterEditActionDetTable"] = "";

$tdataRBAC_SYSTEMS[".add"] = true;
$tdataRBAC_SYSTEMS[".afterAddAction"] = 1;
$tdataRBAC_SYSTEMS[".closePopupAfterAdd"] = 1;
$tdataRBAC_SYSTEMS[".afterAddActionDetTable"] = "";

$tdataRBAC_SYSTEMS[".list"] = true;

$tdataRBAC_SYSTEMS[".inlineEdit"] = true;


$tdataRBAC_SYSTEMS[".reorderRecordsByHeader"] = true;
$tdataRBAC_SYSTEMS[".createSortByDropdown"] = true;
$tdataRBAC_SYSTEMS[".strSortControlSettingsJSON"] = "";



$tdataRBAC_SYSTEMS[".inlineAdd"] = true;
$tdataRBAC_SYSTEMS[".view"] = true;

$tdataRBAC_SYSTEMS[".import"] = true;

$tdataRBAC_SYSTEMS[".exportTo"] = true;

$tdataRBAC_SYSTEMS[".printFriendly"] = true;

$tdataRBAC_SYSTEMS[".delete"] = true;

$tdataRBAC_SYSTEMS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_SYSTEMS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_SYSTEMS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_SYSTEMS[".searchSaving"] = false;
//

$tdataRBAC_SYSTEMS[".showSearchPanel"] = true;
		$tdataRBAC_SYSTEMS[".flexibleSearch"] = true;

$tdataRBAC_SYSTEMS[".isUseAjaxSuggest"] = true;

$tdataRBAC_SYSTEMS[".rowHighlite"] = true;



				

$tdataRBAC_SYSTEMS[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_SYSTEMS[".buttonsAdded"] = false;

$tdataRBAC_SYSTEMS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_SYSTEMS[".isUseTimeForSearch"] = false;





$tdataRBAC_SYSTEMS[".allSearchFields"] = array();
$tdataRBAC_SYSTEMS[".filterFields"] = array();
$tdataRBAC_SYSTEMS[".requiredSearchFields"] = array();

$tdataRBAC_SYSTEMS[".allSearchFields"][] = "SYS_UID";
	$tdataRBAC_SYSTEMS[".allSearchFields"][] = "SYS_CODE";
	$tdataRBAC_SYSTEMS[".allSearchFields"][] = "SYS_CREATE_DATE";
	$tdataRBAC_SYSTEMS[".allSearchFields"][] = "SYS_UPDATE_DATE";
	$tdataRBAC_SYSTEMS[".allSearchFields"][] = "SYS_STATUS";
	

$tdataRBAC_SYSTEMS[".googleLikeFields"] = array();
$tdataRBAC_SYSTEMS[".googleLikeFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".googleLikeFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".googleLikeFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".googleLikeFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".googleLikeFields"][] = "SYS_STATUS";


$tdataRBAC_SYSTEMS[".advSearchFields"] = array();
$tdataRBAC_SYSTEMS[".advSearchFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".advSearchFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".advSearchFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".advSearchFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".advSearchFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".tableType"] = "list";

$tdataRBAC_SYSTEMS[".printerPageOrientation"] = 0;
$tdataRBAC_SYSTEMS[".nPrinterPageScale"] = 100;

$tdataRBAC_SYSTEMS[".nPrinterSplitRecords"] = 40;

$tdataRBAC_SYSTEMS[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_SYSTEMS[".geocodingEnabled"] = false;





$tdataRBAC_SYSTEMS[".listGridLayout"] = 3;


$tdataRBAC_SYSTEMS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_SYSTEMS[".pageSize"] = 20;

$tdataRBAC_SYSTEMS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_SYSTEMS[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_SYSTEMS[".orderindexes"] = array();

$tdataRBAC_SYSTEMS[".sqlHead"] = "SELECT SYS_UID,  	SYS_CODE,  	SYS_CREATE_DATE,  	SYS_UPDATE_DATE,  	SYS_STATUS";
$tdataRBAC_SYSTEMS[".sqlFrom"] = "FROM RBAC_SYSTEMS";
$tdataRBAC_SYSTEMS[".sqlWhereExpr"] = "";
$tdataRBAC_SYSTEMS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_SYSTEMS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_SYSTEMS[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_SYSTEMS[".highlightSearchResults"] = true;

$tableKeysRBAC_SYSTEMS = array();
$tableKeysRBAC_SYSTEMS[] = "SYS_UID";
$tdataRBAC_SYSTEMS[".Keys"] = $tableKeysRBAC_SYSTEMS;

$tdataRBAC_SYSTEMS[".listFields"] = array();
$tdataRBAC_SYSTEMS[".listFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".listFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".listFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".listFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".listFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".hideMobileList"] = array();


$tdataRBAC_SYSTEMS[".viewFields"] = array();
$tdataRBAC_SYSTEMS[".viewFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".viewFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".viewFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".viewFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".viewFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".addFields"] = array();
$tdataRBAC_SYSTEMS[".addFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".addFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".addFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".addFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".addFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".masterListFields"] = array();
$tdataRBAC_SYSTEMS[".masterListFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".masterListFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".masterListFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".masterListFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".masterListFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".inlineAddFields"] = array();
$tdataRBAC_SYSTEMS[".inlineAddFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".inlineAddFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".inlineAddFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".inlineAddFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".inlineAddFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".editFields"] = array();
$tdataRBAC_SYSTEMS[".editFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".editFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".editFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".editFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".editFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".inlineEditFields"] = array();
$tdataRBAC_SYSTEMS[".inlineEditFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".inlineEditFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".inlineEditFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".inlineEditFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".inlineEditFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".updateSelectedFields"] = array();
$tdataRBAC_SYSTEMS[".updateSelectedFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".updateSelectedFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".updateSelectedFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".updateSelectedFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".updateSelectedFields"][] = "SYS_STATUS";


$tdataRBAC_SYSTEMS[".exportFields"] = array();
$tdataRBAC_SYSTEMS[".exportFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".exportFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".exportFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".exportFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".exportFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".importFields"] = array();
$tdataRBAC_SYSTEMS[".importFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".importFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".importFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".importFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".importFields"][] = "SYS_STATUS";

$tdataRBAC_SYSTEMS[".printFields"] = array();
$tdataRBAC_SYSTEMS[".printFields"][] = "SYS_UID";
$tdataRBAC_SYSTEMS[".printFields"][] = "SYS_CODE";
$tdataRBAC_SYSTEMS[".printFields"][] = "SYS_CREATE_DATE";
$tdataRBAC_SYSTEMS[".printFields"][] = "SYS_UPDATE_DATE";
$tdataRBAC_SYSTEMS[".printFields"][] = "SYS_STATUS";

//	SYS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SYS_UID";
	$fdata["GoodName"] = "SYS_UID";
	$fdata["ownerTable"] = "RBAC_SYSTEMS";
	$fdata["Label"] = GetFieldLabel("RBAC_SYSTEMS","SYS_UID");
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

		$fdata["strField"] = "SYS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_UID";

	
	
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




	$tdataRBAC_SYSTEMS["SYS_UID"] = $fdata;
//	SYS_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SYS_CODE";
	$fdata["GoodName"] = "SYS_CODE";
	$fdata["ownerTable"] = "RBAC_SYSTEMS";
	$fdata["Label"] = GetFieldLabel("RBAC_SYSTEMS","SYS_CODE");
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

		$fdata["strField"] = "SYS_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_CODE";

	
	
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




	$tdataRBAC_SYSTEMS["SYS_CODE"] = $fdata;
//	SYS_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SYS_CREATE_DATE";
	$fdata["GoodName"] = "SYS_CREATE_DATE";
	$fdata["ownerTable"] = "RBAC_SYSTEMS";
	$fdata["Label"] = GetFieldLabel("RBAC_SYSTEMS","SYS_CREATE_DATE");
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

		$fdata["strField"] = "SYS_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_CREATE_DATE";

	
	
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




	$tdataRBAC_SYSTEMS["SYS_CREATE_DATE"] = $fdata;
//	SYS_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SYS_UPDATE_DATE";
	$fdata["GoodName"] = "SYS_UPDATE_DATE";
	$fdata["ownerTable"] = "RBAC_SYSTEMS";
	$fdata["Label"] = GetFieldLabel("RBAC_SYSTEMS","SYS_UPDATE_DATE");
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

		$fdata["strField"] = "SYS_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_UPDATE_DATE";

	
	
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




	$tdataRBAC_SYSTEMS["SYS_UPDATE_DATE"] = $fdata;
//	SYS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SYS_STATUS";
	$fdata["GoodName"] = "SYS_STATUS";
	$fdata["ownerTable"] = "RBAC_SYSTEMS";
	$fdata["Label"] = GetFieldLabel("RBAC_SYSTEMS","SYS_STATUS");
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

		$fdata["strField"] = "SYS_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_STATUS";

	
	
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




	$tdataRBAC_SYSTEMS["SYS_STATUS"] = $fdata;


$tables_data["RBAC_SYSTEMS"]=&$tdataRBAC_SYSTEMS;
$field_labels["RBAC_SYSTEMS"] = &$fieldLabelsRBAC_SYSTEMS;
$fieldToolTips["RBAC_SYSTEMS"] = &$fieldToolTipsRBAC_SYSTEMS;
$placeHolders["RBAC_SYSTEMS"] = &$placeHoldersRBAC_SYSTEMS;
$page_titles["RBAC_SYSTEMS"] = &$pageTitlesRBAC_SYSTEMS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_SYSTEMS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_SYSTEMS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_SYSTEMS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SYS_UID,  	SYS_CODE,  	SYS_CREATE_DATE,  	SYS_UPDATE_DATE,  	SYS_STATUS";
$proto0["m_strFrom"] = "FROM RBAC_SYSTEMS";
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
	"m_strName" => "SYS_UID",
	"m_strTable" => "RBAC_SYSTEMS",
	"m_srcTableName" => "RBAC_SYSTEMS"
));

$proto6["m_sql"] = "SYS_UID";
$proto6["m_srcTableName"] = "RBAC_SYSTEMS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_CODE",
	"m_strTable" => "RBAC_SYSTEMS",
	"m_srcTableName" => "RBAC_SYSTEMS"
));

$proto8["m_sql"] = "SYS_CODE";
$proto8["m_srcTableName"] = "RBAC_SYSTEMS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_CREATE_DATE",
	"m_strTable" => "RBAC_SYSTEMS",
	"m_srcTableName" => "RBAC_SYSTEMS"
));

$proto10["m_sql"] = "SYS_CREATE_DATE";
$proto10["m_srcTableName"] = "RBAC_SYSTEMS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_UPDATE_DATE",
	"m_strTable" => "RBAC_SYSTEMS",
	"m_srcTableName" => "RBAC_SYSTEMS"
));

$proto12["m_sql"] = "SYS_UPDATE_DATE";
$proto12["m_srcTableName"] = "RBAC_SYSTEMS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_STATUS",
	"m_strTable" => "RBAC_SYSTEMS",
	"m_srcTableName" => "RBAC_SYSTEMS"
));

$proto14["m_sql"] = "SYS_STATUS";
$proto14["m_srcTableName"] = "RBAC_SYSTEMS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "RBAC_SYSTEMS";
$proto17["m_srcTableName"] = "RBAC_SYSTEMS";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "SYS_UID";
$proto17["m_columns"][] = "SYS_CODE";
$proto17["m_columns"][] = "SYS_CREATE_DATE";
$proto17["m_columns"][] = "SYS_UPDATE_DATE";
$proto17["m_columns"][] = "SYS_STATUS";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "RBAC_SYSTEMS";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "RBAC_SYSTEMS";
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
$proto0["m_srcTableName"]="RBAC_SYSTEMS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_SYSTEMS = createSqlQuery_RBAC_SYSTEMS();


	
						;

					

$tdataRBAC_SYSTEMS[".sqlquery"] = $queryData_RBAC_SYSTEMS;

$tableEvents["RBAC_SYSTEMS"] = new eventsBase;
$tdataRBAC_SYSTEMS[".hasEvents"] = false;

?>
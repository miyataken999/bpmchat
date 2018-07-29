<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_PERMISSIONS = array();
	$tdataRBAC_PERMISSIONS[".truncateText"] = true;
	$tdataRBAC_PERMISSIONS[".NumberOfChars"] = 20;
	$tdataRBAC_PERMISSIONS[".ShortName"] = "RBAC_PERMISSIONS";
	$tdataRBAC_PERMISSIONS[".OwnerID"] = "";
	$tdataRBAC_PERMISSIONS[".OriginalTable"] = "RBAC_PERMISSIONS";

//	field labels
$fieldLabelsRBAC_PERMISSIONS = array();
$fieldToolTipsRBAC_PERMISSIONS = array();
$pageTitlesRBAC_PERMISSIONS = array();
$placeHoldersRBAC_PERMISSIONS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_PERMISSIONS["Japanese"] = array();
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"] = array();
	$placeHoldersRBAC_PERMISSIONS["Japanese"] = array();
	$pageTitlesRBAC_PERMISSIONS["Japanese"] = array();
	$fieldLabelsRBAC_PERMISSIONS["Japanese"]["PER_UID"] = "UIDあたり";
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"]["PER_UID"] = "";
	$placeHoldersRBAC_PERMISSIONS["Japanese"]["PER_UID"] = "";
	$fieldLabelsRBAC_PERMISSIONS["Japanese"]["PER_CODE"] = "コードあたり";
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"]["PER_CODE"] = "";
	$placeHoldersRBAC_PERMISSIONS["Japanese"]["PER_CODE"] = "";
	$fieldLabelsRBAC_PERMISSIONS["Japanese"]["PER_CREATE_DATE"] = "作成日あたり";
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"]["PER_CREATE_DATE"] = "";
	$placeHoldersRBAC_PERMISSIONS["Japanese"]["PER_CREATE_DATE"] = "";
	$fieldLabelsRBAC_PERMISSIONS["Japanese"]["PER_UPDATE_DATE"] = "更新日あたり";
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"]["PER_UPDATE_DATE"] = "";
	$placeHoldersRBAC_PERMISSIONS["Japanese"]["PER_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_PERMISSIONS["Japanese"]["PER_STATUS"] = "ステータスごと";
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"]["PER_STATUS"] = "";
	$placeHoldersRBAC_PERMISSIONS["Japanese"]["PER_STATUS"] = "";
	$fieldLabelsRBAC_PERMISSIONS["Japanese"]["PER_SYSTEM"] = "システムごとに";
	$fieldToolTipsRBAC_PERMISSIONS["Japanese"]["PER_SYSTEM"] = "";
	$placeHoldersRBAC_PERMISSIONS["Japanese"]["PER_SYSTEM"] = "";
	if (count($fieldToolTipsRBAC_PERMISSIONS["Japanese"]))
		$tdataRBAC_PERMISSIONS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_PERMISSIONS["English"] = array();
	$fieldToolTipsRBAC_PERMISSIONS["English"] = array();
	$placeHoldersRBAC_PERMISSIONS["English"] = array();
	$pageTitlesRBAC_PERMISSIONS["English"] = array();
	$fieldLabelsRBAC_PERMISSIONS["English"]["PER_UID"] = "UIDあたり";
	$fieldToolTipsRBAC_PERMISSIONS["English"]["PER_UID"] = "";
	$placeHoldersRBAC_PERMISSIONS["English"]["PER_UID"] = "";
	$fieldLabelsRBAC_PERMISSIONS["English"]["PER_CODE"] = "コードあたり";
	$fieldToolTipsRBAC_PERMISSIONS["English"]["PER_CODE"] = "";
	$placeHoldersRBAC_PERMISSIONS["English"]["PER_CODE"] = "";
	$fieldLabelsRBAC_PERMISSIONS["English"]["PER_CREATE_DATE"] = "作成日あたり";
	$fieldToolTipsRBAC_PERMISSIONS["English"]["PER_CREATE_DATE"] = "";
	$placeHoldersRBAC_PERMISSIONS["English"]["PER_CREATE_DATE"] = "";
	$fieldLabelsRBAC_PERMISSIONS["English"]["PER_UPDATE_DATE"] = "更新日あたり";
	$fieldToolTipsRBAC_PERMISSIONS["English"]["PER_UPDATE_DATE"] = "";
	$placeHoldersRBAC_PERMISSIONS["English"]["PER_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_PERMISSIONS["English"]["PER_STATUS"] = "ステータスごと";
	$fieldToolTipsRBAC_PERMISSIONS["English"]["PER_STATUS"] = "";
	$placeHoldersRBAC_PERMISSIONS["English"]["PER_STATUS"] = "";
	$fieldLabelsRBAC_PERMISSIONS["English"]["PER_SYSTEM"] = "システムごとに";
	$fieldToolTipsRBAC_PERMISSIONS["English"]["PER_SYSTEM"] = "";
	$placeHoldersRBAC_PERMISSIONS["English"]["PER_SYSTEM"] = "";
	if (count($fieldToolTipsRBAC_PERMISSIONS["English"]))
		$tdataRBAC_PERMISSIONS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_PERMISSIONS[""] = array();
	$fieldToolTipsRBAC_PERMISSIONS[""] = array();
	$placeHoldersRBAC_PERMISSIONS[""] = array();
	$pageTitlesRBAC_PERMISSIONS[""] = array();
	if (count($fieldToolTipsRBAC_PERMISSIONS[""]))
		$tdataRBAC_PERMISSIONS[".isUseToolTips"] = true;
}


	$tdataRBAC_PERMISSIONS[".NCSearch"] = true;



$tdataRBAC_PERMISSIONS[".shortTableName"] = "RBAC_PERMISSIONS";
$tdataRBAC_PERMISSIONS[".nSecOptions"] = 0;
$tdataRBAC_PERMISSIONS[".recsPerRowPrint"] = 1;
$tdataRBAC_PERMISSIONS[".mainTableOwnerID"] = "";
$tdataRBAC_PERMISSIONS[".moveNext"] = 0;
$tdataRBAC_PERMISSIONS[".entityType"] = 0;

$tdataRBAC_PERMISSIONS[".strOriginalTableName"] = "RBAC_PERMISSIONS";

	



$tdataRBAC_PERMISSIONS[".showAddInPopup"] = false;

$tdataRBAC_PERMISSIONS[".showEditInPopup"] = false;

$tdataRBAC_PERMISSIONS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_PERMISSIONS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_PERMISSIONS[".fieldsForRegister"] = array();
	
$tdataRBAC_PERMISSIONS[".listAjax"] = false;

	$tdataRBAC_PERMISSIONS[".audit"] = true;

	$tdataRBAC_PERMISSIONS[".locking"] = false;

$tdataRBAC_PERMISSIONS[".edit"] = true;
$tdataRBAC_PERMISSIONS[".afterEditAction"] = 1;
$tdataRBAC_PERMISSIONS[".closePopupAfterEdit"] = 1;
$tdataRBAC_PERMISSIONS[".afterEditActionDetTable"] = "";

$tdataRBAC_PERMISSIONS[".add"] = true;
$tdataRBAC_PERMISSIONS[".afterAddAction"] = 1;
$tdataRBAC_PERMISSIONS[".closePopupAfterAdd"] = 1;
$tdataRBAC_PERMISSIONS[".afterAddActionDetTable"] = "";

$tdataRBAC_PERMISSIONS[".list"] = true;

$tdataRBAC_PERMISSIONS[".inlineEdit"] = true;


$tdataRBAC_PERMISSIONS[".reorderRecordsByHeader"] = true;
$tdataRBAC_PERMISSIONS[".createSortByDropdown"] = true;
$tdataRBAC_PERMISSIONS[".strSortControlSettingsJSON"] = "";



$tdataRBAC_PERMISSIONS[".inlineAdd"] = true;
$tdataRBAC_PERMISSIONS[".view"] = true;

$tdataRBAC_PERMISSIONS[".import"] = true;

$tdataRBAC_PERMISSIONS[".exportTo"] = true;

$tdataRBAC_PERMISSIONS[".printFriendly"] = true;

$tdataRBAC_PERMISSIONS[".delete"] = true;

$tdataRBAC_PERMISSIONS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_PERMISSIONS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_PERMISSIONS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_PERMISSIONS[".searchSaving"] = false;
//

$tdataRBAC_PERMISSIONS[".showSearchPanel"] = true;
		$tdataRBAC_PERMISSIONS[".flexibleSearch"] = true;

$tdataRBAC_PERMISSIONS[".isUseAjaxSuggest"] = true;

$tdataRBAC_PERMISSIONS[".rowHighlite"] = true;



				

$tdataRBAC_PERMISSIONS[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_PERMISSIONS[".buttonsAdded"] = false;

$tdataRBAC_PERMISSIONS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_PERMISSIONS[".isUseTimeForSearch"] = false;





$tdataRBAC_PERMISSIONS[".allSearchFields"] = array();
$tdataRBAC_PERMISSIONS[".filterFields"] = array();
$tdataRBAC_PERMISSIONS[".requiredSearchFields"] = array();

$tdataRBAC_PERMISSIONS[".allSearchFields"][] = "PER_UID";
	$tdataRBAC_PERMISSIONS[".allSearchFields"][] = "PER_CODE";
	$tdataRBAC_PERMISSIONS[".allSearchFields"][] = "PER_CREATE_DATE";
	$tdataRBAC_PERMISSIONS[".allSearchFields"][] = "PER_UPDATE_DATE";
	$tdataRBAC_PERMISSIONS[".allSearchFields"][] = "PER_STATUS";
	$tdataRBAC_PERMISSIONS[".allSearchFields"][] = "PER_SYSTEM";
	

$tdataRBAC_PERMISSIONS[".googleLikeFields"] = array();
$tdataRBAC_PERMISSIONS[".googleLikeFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".googleLikeFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".googleLikeFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".googleLikeFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".googleLikeFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".googleLikeFields"][] = "PER_SYSTEM";


$tdataRBAC_PERMISSIONS[".advSearchFields"] = array();
$tdataRBAC_PERMISSIONS[".advSearchFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".advSearchFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".advSearchFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".advSearchFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".advSearchFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".advSearchFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".tableType"] = "list";

$tdataRBAC_PERMISSIONS[".printerPageOrientation"] = 0;
$tdataRBAC_PERMISSIONS[".nPrinterPageScale"] = 100;

$tdataRBAC_PERMISSIONS[".nPrinterSplitRecords"] = 40;

$tdataRBAC_PERMISSIONS[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_PERMISSIONS[".geocodingEnabled"] = false;





$tdataRBAC_PERMISSIONS[".listGridLayout"] = 3;


$tdataRBAC_PERMISSIONS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_PERMISSIONS[".pageSize"] = 20;

$tdataRBAC_PERMISSIONS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_PERMISSIONS[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_PERMISSIONS[".orderindexes"] = array();

$tdataRBAC_PERMISSIONS[".sqlHead"] = "SELECT PER_UID,  	PER_CODE,  	PER_CREATE_DATE,  	PER_UPDATE_DATE,  	PER_STATUS,  	PER_SYSTEM";
$tdataRBAC_PERMISSIONS[".sqlFrom"] = "FROM RBAC_PERMISSIONS";
$tdataRBAC_PERMISSIONS[".sqlWhereExpr"] = "";
$tdataRBAC_PERMISSIONS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_PERMISSIONS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_PERMISSIONS[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_PERMISSIONS[".highlightSearchResults"] = true;

$tableKeysRBAC_PERMISSIONS = array();
$tableKeysRBAC_PERMISSIONS[] = "PER_UID";
$tdataRBAC_PERMISSIONS[".Keys"] = $tableKeysRBAC_PERMISSIONS;

$tdataRBAC_PERMISSIONS[".listFields"] = array();
$tdataRBAC_PERMISSIONS[".listFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".listFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".listFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".listFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".listFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".listFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".hideMobileList"] = array();


$tdataRBAC_PERMISSIONS[".viewFields"] = array();
$tdataRBAC_PERMISSIONS[".viewFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".viewFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".viewFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".viewFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".viewFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".viewFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".addFields"] = array();
$tdataRBAC_PERMISSIONS[".addFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".addFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".addFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".addFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".addFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".addFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".masterListFields"] = array();
$tdataRBAC_PERMISSIONS[".masterListFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".masterListFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".masterListFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".masterListFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".masterListFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".masterListFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".inlineAddFields"] = array();
$tdataRBAC_PERMISSIONS[".inlineAddFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".inlineAddFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".inlineAddFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".inlineAddFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".inlineAddFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".inlineAddFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".editFields"] = array();
$tdataRBAC_PERMISSIONS[".editFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".editFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".editFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".editFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".editFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".editFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".inlineEditFields"] = array();
$tdataRBAC_PERMISSIONS[".inlineEditFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".inlineEditFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".inlineEditFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".inlineEditFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".inlineEditFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".inlineEditFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".updateSelectedFields"] = array();
$tdataRBAC_PERMISSIONS[".updateSelectedFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".updateSelectedFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".updateSelectedFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".updateSelectedFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".updateSelectedFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".updateSelectedFields"][] = "PER_SYSTEM";


$tdataRBAC_PERMISSIONS[".exportFields"] = array();
$tdataRBAC_PERMISSIONS[".exportFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".exportFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".exportFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".exportFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".exportFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".exportFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".importFields"] = array();
$tdataRBAC_PERMISSIONS[".importFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".importFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".importFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".importFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".importFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".importFields"][] = "PER_SYSTEM";

$tdataRBAC_PERMISSIONS[".printFields"] = array();
$tdataRBAC_PERMISSIONS[".printFields"][] = "PER_UID";
$tdataRBAC_PERMISSIONS[".printFields"][] = "PER_CODE";
$tdataRBAC_PERMISSIONS[".printFields"][] = "PER_CREATE_DATE";
$tdataRBAC_PERMISSIONS[".printFields"][] = "PER_UPDATE_DATE";
$tdataRBAC_PERMISSIONS[".printFields"][] = "PER_STATUS";
$tdataRBAC_PERMISSIONS[".printFields"][] = "PER_SYSTEM";

//	PER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PER_UID";
	$fdata["GoodName"] = "PER_UID";
	$fdata["ownerTable"] = "RBAC_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_PERMISSIONS","PER_UID");
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

		$fdata["strField"] = "PER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_UID";

	
	
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




	$tdataRBAC_PERMISSIONS["PER_UID"] = $fdata;
//	PER_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PER_CODE";
	$fdata["GoodName"] = "PER_CODE";
	$fdata["ownerTable"] = "RBAC_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_PERMISSIONS","PER_CODE");
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

		$fdata["strField"] = "PER_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_CODE";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataRBAC_PERMISSIONS["PER_CODE"] = $fdata;
//	PER_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PER_CREATE_DATE";
	$fdata["GoodName"] = "PER_CREATE_DATE";
	$fdata["ownerTable"] = "RBAC_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_PERMISSIONS","PER_CREATE_DATE");
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

		$fdata["strField"] = "PER_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_CREATE_DATE";

	
	
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




	$tdataRBAC_PERMISSIONS["PER_CREATE_DATE"] = $fdata;
//	PER_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PER_UPDATE_DATE";
	$fdata["GoodName"] = "PER_UPDATE_DATE";
	$fdata["ownerTable"] = "RBAC_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_PERMISSIONS","PER_UPDATE_DATE");
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

		$fdata["strField"] = "PER_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_UPDATE_DATE";

	
	
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




	$tdataRBAC_PERMISSIONS["PER_UPDATE_DATE"] = $fdata;
//	PER_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PER_STATUS";
	$fdata["GoodName"] = "PER_STATUS";
	$fdata["ownerTable"] = "RBAC_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_PERMISSIONS","PER_STATUS");
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

		$fdata["strField"] = "PER_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_STATUS";

	
	
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




	$tdataRBAC_PERMISSIONS["PER_STATUS"] = $fdata;
//	PER_SYSTEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PER_SYSTEM";
	$fdata["GoodName"] = "PER_SYSTEM";
	$fdata["ownerTable"] = "RBAC_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_PERMISSIONS","PER_SYSTEM");
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

		$fdata["strField"] = "PER_SYSTEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_SYSTEM";

	
	
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




	$tdataRBAC_PERMISSIONS["PER_SYSTEM"] = $fdata;


$tables_data["RBAC_PERMISSIONS"]=&$tdataRBAC_PERMISSIONS;
$field_labels["RBAC_PERMISSIONS"] = &$fieldLabelsRBAC_PERMISSIONS;
$fieldToolTips["RBAC_PERMISSIONS"] = &$fieldToolTipsRBAC_PERMISSIONS;
$placeHolders["RBAC_PERMISSIONS"] = &$placeHoldersRBAC_PERMISSIONS;
$page_titles["RBAC_PERMISSIONS"] = &$pageTitlesRBAC_PERMISSIONS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_PERMISSIONS"] = array();
//	RBAC_ROLES_PERMISSIONS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="RBAC_ROLES_PERMISSIONS";
		$detailsParam["dOriginalTable"] = "RBAC_ROLES_PERMISSIONS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "RBAC_ROLES_PERMISSIONS";
	$detailsParam["dCaptionTable"] = GetTableCaption("RBAC_ROLES_PERMISSIONS");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["RBAC_PERMISSIONS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["RBAC_PERMISSIONS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RBAC_PERMISSIONS"][$dIndex]["masterKeys"][]="PER_UID";

				$detailsTablesData["RBAC_PERMISSIONS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RBAC_PERMISSIONS"][$dIndex]["detailKeys"][]="PER_UID";

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_PERMISSIONS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_PERMISSIONS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PER_UID,  	PER_CODE,  	PER_CREATE_DATE,  	PER_UPDATE_DATE,  	PER_STATUS,  	PER_SYSTEM";
$proto0["m_strFrom"] = "FROM RBAC_PERMISSIONS";
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
	"m_strName" => "PER_UID",
	"m_strTable" => "RBAC_PERMISSIONS",
	"m_srcTableName" => "RBAC_PERMISSIONS"
));

$proto6["m_sql"] = "PER_UID";
$proto6["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_CODE",
	"m_strTable" => "RBAC_PERMISSIONS",
	"m_srcTableName" => "RBAC_PERMISSIONS"
));

$proto8["m_sql"] = "PER_CODE";
$proto8["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_CREATE_DATE",
	"m_strTable" => "RBAC_PERMISSIONS",
	"m_srcTableName" => "RBAC_PERMISSIONS"
));

$proto10["m_sql"] = "PER_CREATE_DATE";
$proto10["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_UPDATE_DATE",
	"m_strTable" => "RBAC_PERMISSIONS",
	"m_srcTableName" => "RBAC_PERMISSIONS"
));

$proto12["m_sql"] = "PER_UPDATE_DATE";
$proto12["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_STATUS",
	"m_strTable" => "RBAC_PERMISSIONS",
	"m_srcTableName" => "RBAC_PERMISSIONS"
));

$proto14["m_sql"] = "PER_STATUS";
$proto14["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_SYSTEM",
	"m_strTable" => "RBAC_PERMISSIONS",
	"m_srcTableName" => "RBAC_PERMISSIONS"
));

$proto16["m_sql"] = "PER_SYSTEM";
$proto16["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "RBAC_PERMISSIONS";
$proto19["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "PER_UID";
$proto19["m_columns"][] = "PER_CODE";
$proto19["m_columns"][] = "PER_CREATE_DATE";
$proto19["m_columns"][] = "PER_UPDATE_DATE";
$proto19["m_columns"][] = "PER_STATUS";
$proto19["m_columns"][] = "PER_SYSTEM";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "RBAC_PERMISSIONS";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "RBAC_PERMISSIONS";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="RBAC_PERMISSIONS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_PERMISSIONS = createSqlQuery_RBAC_PERMISSIONS();


	
						;

						

$tdataRBAC_PERMISSIONS[".sqlquery"] = $queryData_RBAC_PERMISSIONS;

$tableEvents["RBAC_PERMISSIONS"] = new eventsBase;
$tdataRBAC_PERMISSIONS[".hasEvents"] = false;

?>
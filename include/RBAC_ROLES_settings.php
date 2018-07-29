<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_ROLES = array();
	$tdataRBAC_ROLES[".truncateText"] = true;
	$tdataRBAC_ROLES[".NumberOfChars"] = 20;
	$tdataRBAC_ROLES[".ShortName"] = "RBAC_ROLES";
	$tdataRBAC_ROLES[".OwnerID"] = "";
	$tdataRBAC_ROLES[".OriginalTable"] = "RBAC_ROLES";

//	field labels
$fieldLabelsRBAC_ROLES = array();
$fieldToolTipsRBAC_ROLES = array();
$pageTitlesRBAC_ROLES = array();
$placeHoldersRBAC_ROLES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_ROLES["Japanese"] = array();
	$fieldToolTipsRBAC_ROLES["Japanese"] = array();
	$placeHoldersRBAC_ROLES["Japanese"] = array();
	$pageTitlesRBAC_ROLES["Japanese"] = array();
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_UID"] = "ROLのUID";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_UID"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_UID"] = "";
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_PARENT"] = "ROL親";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_PARENT"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_PARENT"] = "";
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_SYSTEM"] = "ROLシステム";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_SYSTEM"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_SYSTEM"] = "";
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_CODE"] = "ROLコード";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_CODE"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_CODE"] = "";
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_CREATE_DATE"] = "ROL日付を作成します";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_CREATE_DATE"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_CREATE_DATE"] = "";
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_UPDATE_DATE"] = "ROLの更新日";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_UPDATE_DATE"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_ROLES["Japanese"]["ROL_STATUS"] = "ROLのステータス";
	$fieldToolTipsRBAC_ROLES["Japanese"]["ROL_STATUS"] = "";
	$placeHoldersRBAC_ROLES["Japanese"]["ROL_STATUS"] = "";
	if (count($fieldToolTipsRBAC_ROLES["Japanese"]))
		$tdataRBAC_ROLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_ROLES["English"] = array();
	$fieldToolTipsRBAC_ROLES["English"] = array();
	$placeHoldersRBAC_ROLES["English"] = array();
	$pageTitlesRBAC_ROLES["English"] = array();
	$fieldLabelsRBAC_ROLES["English"]["ROL_UID"] = "ROLのUID";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_UID"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_UID"] = "";
	$fieldLabelsRBAC_ROLES["English"]["ROL_PARENT"] = "ROL親";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_PARENT"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_PARENT"] = "";
	$fieldLabelsRBAC_ROLES["English"]["ROL_SYSTEM"] = "ROLシステム";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_SYSTEM"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_SYSTEM"] = "";
	$fieldLabelsRBAC_ROLES["English"]["ROL_CODE"] = "ROLコード";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_CODE"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_CODE"] = "";
	$fieldLabelsRBAC_ROLES["English"]["ROL_CREATE_DATE"] = "ROL日付を作成します";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_CREATE_DATE"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_CREATE_DATE"] = "";
	$fieldLabelsRBAC_ROLES["English"]["ROL_UPDATE_DATE"] = "ROLの更新日";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_UPDATE_DATE"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_ROLES["English"]["ROL_STATUS"] = "ROLのステータス";
	$fieldToolTipsRBAC_ROLES["English"]["ROL_STATUS"] = "";
	$placeHoldersRBAC_ROLES["English"]["ROL_STATUS"] = "";
	if (count($fieldToolTipsRBAC_ROLES["English"]))
		$tdataRBAC_ROLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_ROLES[""] = array();
	$fieldToolTipsRBAC_ROLES[""] = array();
	$placeHoldersRBAC_ROLES[""] = array();
	$pageTitlesRBAC_ROLES[""] = array();
	if (count($fieldToolTipsRBAC_ROLES[""]))
		$tdataRBAC_ROLES[".isUseToolTips"] = true;
}


	$tdataRBAC_ROLES[".NCSearch"] = true;



$tdataRBAC_ROLES[".shortTableName"] = "RBAC_ROLES";
$tdataRBAC_ROLES[".nSecOptions"] = 0;
$tdataRBAC_ROLES[".recsPerRowPrint"] = 1;
$tdataRBAC_ROLES[".mainTableOwnerID"] = "";
$tdataRBAC_ROLES[".moveNext"] = 0;
$tdataRBAC_ROLES[".entityType"] = 0;

$tdataRBAC_ROLES[".strOriginalTableName"] = "RBAC_ROLES";

	



$tdataRBAC_ROLES[".showAddInPopup"] = false;

$tdataRBAC_ROLES[".showEditInPopup"] = false;

$tdataRBAC_ROLES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_ROLES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_ROLES[".fieldsForRegister"] = array();
	
$tdataRBAC_ROLES[".listAjax"] = false;

	$tdataRBAC_ROLES[".audit"] = true;

	$tdataRBAC_ROLES[".locking"] = false;

$tdataRBAC_ROLES[".edit"] = true;
$tdataRBAC_ROLES[".afterEditAction"] = 1;
$tdataRBAC_ROLES[".closePopupAfterEdit"] = 1;
$tdataRBAC_ROLES[".afterEditActionDetTable"] = "";

$tdataRBAC_ROLES[".add"] = true;
$tdataRBAC_ROLES[".afterAddAction"] = 1;
$tdataRBAC_ROLES[".closePopupAfterAdd"] = 1;
$tdataRBAC_ROLES[".afterAddActionDetTable"] = "";

$tdataRBAC_ROLES[".list"] = true;

$tdataRBAC_ROLES[".inlineEdit"] = true;


$tdataRBAC_ROLES[".reorderRecordsByHeader"] = true;
$tdataRBAC_ROLES[".createSortByDropdown"] = true;
$tdataRBAC_ROLES[".strSortControlSettingsJSON"] = "";



$tdataRBAC_ROLES[".inlineAdd"] = true;
$tdataRBAC_ROLES[".view"] = true;

$tdataRBAC_ROLES[".import"] = true;

$tdataRBAC_ROLES[".exportTo"] = true;

$tdataRBAC_ROLES[".printFriendly"] = true;

$tdataRBAC_ROLES[".delete"] = true;

$tdataRBAC_ROLES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_ROLES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_ROLES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_ROLES[".searchSaving"] = false;
//

$tdataRBAC_ROLES[".showSearchPanel"] = true;
		$tdataRBAC_ROLES[".flexibleSearch"] = true;

$tdataRBAC_ROLES[".isUseAjaxSuggest"] = true;

$tdataRBAC_ROLES[".rowHighlite"] = true;



				

$tdataRBAC_ROLES[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_ROLES[".buttonsAdded"] = false;

$tdataRBAC_ROLES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_ROLES[".isUseTimeForSearch"] = false;





$tdataRBAC_ROLES[".allSearchFields"] = array();
$tdataRBAC_ROLES[".filterFields"] = array();
$tdataRBAC_ROLES[".requiredSearchFields"] = array();

$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_UID";
	$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_PARENT";
	$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_SYSTEM";
	$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_CODE";
	$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_CREATE_DATE";
	$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_UPDATE_DATE";
	$tdataRBAC_ROLES[".allSearchFields"][] = "ROL_STATUS";
	

$tdataRBAC_ROLES[".googleLikeFields"] = array();
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".googleLikeFields"][] = "ROL_STATUS";


$tdataRBAC_ROLES[".advSearchFields"] = array();
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".advSearchFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".tableType"] = "list";

$tdataRBAC_ROLES[".printerPageOrientation"] = 0;
$tdataRBAC_ROLES[".nPrinterPageScale"] = 100;

$tdataRBAC_ROLES[".nPrinterSplitRecords"] = 40;

$tdataRBAC_ROLES[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_ROLES[".geocodingEnabled"] = false;





$tdataRBAC_ROLES[".listGridLayout"] = 3;


$tdataRBAC_ROLES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_ROLES[".pageSize"] = 20;

$tdataRBAC_ROLES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_ROLES[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_ROLES[".orderindexes"] = array();

$tdataRBAC_ROLES[".sqlHead"] = "SELECT ROL_UID,  	ROL_PARENT,  	ROL_SYSTEM,  	ROL_CODE,  	ROL_CREATE_DATE,  	ROL_UPDATE_DATE,  	ROL_STATUS";
$tdataRBAC_ROLES[".sqlFrom"] = "FROM RBAC_ROLES";
$tdataRBAC_ROLES[".sqlWhereExpr"] = "";
$tdataRBAC_ROLES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_ROLES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_ROLES[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_ROLES[".highlightSearchResults"] = true;

$tableKeysRBAC_ROLES = array();
$tableKeysRBAC_ROLES[] = "ROL_UID";
$tdataRBAC_ROLES[".Keys"] = $tableKeysRBAC_ROLES;

$tdataRBAC_ROLES[".listFields"] = array();
$tdataRBAC_ROLES[".listFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".listFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".listFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".listFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".listFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".listFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".listFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".hideMobileList"] = array();


$tdataRBAC_ROLES[".viewFields"] = array();
$tdataRBAC_ROLES[".viewFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".viewFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".viewFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".viewFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".viewFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".viewFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".viewFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".addFields"] = array();
$tdataRBAC_ROLES[".addFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".addFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".addFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".addFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".addFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".addFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".addFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".masterListFields"] = array();
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".masterListFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".inlineAddFields"] = array();
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".inlineAddFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".editFields"] = array();
$tdataRBAC_ROLES[".editFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".editFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".editFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".editFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".editFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".editFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".editFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".inlineEditFields"] = array();
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".inlineEditFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".updateSelectedFields"] = array();
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".updateSelectedFields"][] = "ROL_STATUS";


$tdataRBAC_ROLES[".exportFields"] = array();
$tdataRBAC_ROLES[".exportFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".exportFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".exportFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".exportFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".exportFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".exportFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".exportFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".importFields"] = array();
$tdataRBAC_ROLES[".importFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".importFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".importFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".importFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".importFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".importFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".importFields"][] = "ROL_STATUS";

$tdataRBAC_ROLES[".printFields"] = array();
$tdataRBAC_ROLES[".printFields"][] = "ROL_UID";
$tdataRBAC_ROLES[".printFields"][] = "ROL_PARENT";
$tdataRBAC_ROLES[".printFields"][] = "ROL_SYSTEM";
$tdataRBAC_ROLES[".printFields"][] = "ROL_CODE";
$tdataRBAC_ROLES[".printFields"][] = "ROL_CREATE_DATE";
$tdataRBAC_ROLES[".printFields"][] = "ROL_UPDATE_DATE";
$tdataRBAC_ROLES[".printFields"][] = "ROL_STATUS";

//	ROL_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ROL_UID";
	$fdata["GoodName"] = "ROL_UID";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_UID");
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

		$fdata["strField"] = "ROL_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_UID";

	
	
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




	$tdataRBAC_ROLES["ROL_UID"] = $fdata;
//	ROL_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ROL_PARENT";
	$fdata["GoodName"] = "ROL_PARENT";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_PARENT");
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

		$fdata["strField"] = "ROL_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_PARENT";

	
	
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




	$tdataRBAC_ROLES["ROL_PARENT"] = $fdata;
//	ROL_SYSTEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ROL_SYSTEM";
	$fdata["GoodName"] = "ROL_SYSTEM";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_SYSTEM");
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

		$fdata["strField"] = "ROL_SYSTEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_SYSTEM";

	
	
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




	$tdataRBAC_ROLES["ROL_SYSTEM"] = $fdata;
//	ROL_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROL_CODE";
	$fdata["GoodName"] = "ROL_CODE";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_CODE");
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

		$fdata["strField"] = "ROL_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_CODE";

	
	
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




	$tdataRBAC_ROLES["ROL_CODE"] = $fdata;
//	ROL_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ROL_CREATE_DATE";
	$fdata["GoodName"] = "ROL_CREATE_DATE";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_CREATE_DATE");
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

		$fdata["strField"] = "ROL_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_CREATE_DATE";

	
	
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




	$tdataRBAC_ROLES["ROL_CREATE_DATE"] = $fdata;
//	ROL_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ROL_UPDATE_DATE";
	$fdata["GoodName"] = "ROL_UPDATE_DATE";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_UPDATE_DATE");
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

		$fdata["strField"] = "ROL_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_UPDATE_DATE";

	
	
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




	$tdataRBAC_ROLES["ROL_UPDATE_DATE"] = $fdata;
//	ROL_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ROL_STATUS";
	$fdata["GoodName"] = "ROL_STATUS";
	$fdata["ownerTable"] = "RBAC_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES","ROL_STATUS");
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

		$fdata["strField"] = "ROL_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_STATUS";

	
	
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




	$tdataRBAC_ROLES["ROL_STATUS"] = $fdata;


$tables_data["RBAC_ROLES"]=&$tdataRBAC_ROLES;
$field_labels["RBAC_ROLES"] = &$fieldLabelsRBAC_ROLES;
$fieldToolTips["RBAC_ROLES"] = &$fieldToolTipsRBAC_ROLES;
$placeHolders["RBAC_ROLES"] = &$placeHoldersRBAC_ROLES;
$page_titles["RBAC_ROLES"] = &$pageTitlesRBAC_ROLES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_ROLES"] = array();
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
		
	$detailsTablesData["RBAC_ROLES"][$dIndex] = $detailsParam;

	
		$detailsTablesData["RBAC_ROLES"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RBAC_ROLES"][$dIndex]["masterKeys"][]="ROL_UID";

				$detailsTablesData["RBAC_ROLES"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RBAC_ROLES"][$dIndex]["detailKeys"][]="ROL_UID";
//	RBAC_USERS_ROLES
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="RBAC_USERS_ROLES";
		$detailsParam["dOriginalTable"] = "RBAC_USERS_ROLES";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "RBAC_USERS_ROLES";
	$detailsParam["dCaptionTable"] = GetTableCaption("RBAC_USERS_ROLES");
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
		
	$detailsTablesData["RBAC_ROLES"][$dIndex] = $detailsParam;

	
		$detailsTablesData["RBAC_ROLES"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["RBAC_ROLES"][$dIndex]["masterKeys"][]="ROL_UID";

				$detailsTablesData["RBAC_ROLES"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["RBAC_ROLES"][$dIndex]["detailKeys"][]="ROL_UID";

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_ROLES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_ROLES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ROL_UID,  	ROL_PARENT,  	ROL_SYSTEM,  	ROL_CODE,  	ROL_CREATE_DATE,  	ROL_UPDATE_DATE,  	ROL_STATUS";
$proto0["m_strFrom"] = "FROM RBAC_ROLES";
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
	"m_strName" => "ROL_UID",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto6["m_sql"] = "ROL_UID";
$proto6["m_srcTableName"] = "RBAC_ROLES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_PARENT",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto8["m_sql"] = "ROL_PARENT";
$proto8["m_srcTableName"] = "RBAC_ROLES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_SYSTEM",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto10["m_sql"] = "ROL_SYSTEM";
$proto10["m_srcTableName"] = "RBAC_ROLES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_CODE",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto12["m_sql"] = "ROL_CODE";
$proto12["m_srcTableName"] = "RBAC_ROLES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_CREATE_DATE",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto14["m_sql"] = "ROL_CREATE_DATE";
$proto14["m_srcTableName"] = "RBAC_ROLES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_UPDATE_DATE",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto16["m_sql"] = "ROL_UPDATE_DATE";
$proto16["m_srcTableName"] = "RBAC_ROLES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_STATUS",
	"m_strTable" => "RBAC_ROLES",
	"m_srcTableName" => "RBAC_ROLES"
));

$proto18["m_sql"] = "ROL_STATUS";
$proto18["m_srcTableName"] = "RBAC_ROLES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "RBAC_ROLES";
$proto21["m_srcTableName"] = "RBAC_ROLES";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ROL_UID";
$proto21["m_columns"][] = "ROL_PARENT";
$proto21["m_columns"][] = "ROL_SYSTEM";
$proto21["m_columns"][] = "ROL_CODE";
$proto21["m_columns"][] = "ROL_CREATE_DATE";
$proto21["m_columns"][] = "ROL_UPDATE_DATE";
$proto21["m_columns"][] = "ROL_STATUS";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "RBAC_ROLES";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "RBAC_ROLES";
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
$proto0["m_srcTableName"]="RBAC_ROLES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_ROLES = createSqlQuery_RBAC_ROLES();


	
						;

							

$tdataRBAC_ROLES[".sqlquery"] = $queryData_RBAC_ROLES;

$tableEvents["RBAC_ROLES"] = new eventsBase;
$tdataRBAC_ROLES[".hasEvents"] = false;

?>
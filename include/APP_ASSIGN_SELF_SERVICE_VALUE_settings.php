<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_ASSIGN_SELF_SERVICE_VALUE = array();
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".truncateText"] = true;
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".NumberOfChars"] = 20;
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".ShortName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".OwnerID"] = "";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".OriginalTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";

//	field labels
$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE = array();
$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE = array();
$pageTitlesAPP_ASSIGN_SELF_SERVICE_VALUE = array();
$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"] = array();
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"] = array();
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"] = array();
	$pageTitlesAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"] = array();
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["TAS_UID"] = "TASID";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["TAS_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["TAS_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["GRP_UID"] = "GRPのuid";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["GRP_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["GRP_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["ID"] = "ID";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["ID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]["ID"] = "";
	if (count($fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["Japanese"]))
		$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"] = array();
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"] = array();
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"] = array();
	$pageTitlesAPP_ASSIGN_SELF_SERVICE_VALUE["English"] = array();
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["APP_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["APP_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["PRO_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["PRO_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["TAS_UID"] = "TASID";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["TAS_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["TAS_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["GRP_UID"] = "GRPのuid";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["GRP_UID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["GRP_UID"] = "";
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["ID"] = "ID";
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["ID"] = "";
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE["English"]["ID"] = "";
	if (count($fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE["English"]))
		$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE[""] = array();
	$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE[""] = array();
	$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE[""] = array();
	$pageTitlesAPP_ASSIGN_SELF_SERVICE_VALUE[""] = array();
	if (count($fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE[""]))
		$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".isUseToolTips"] = true;
}


	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".NCSearch"] = true;



$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".shortTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".nSecOptions"] = 0;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".recsPerRowPrint"] = 1;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".mainTableOwnerID"] = "";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".moveNext"] = 0;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".entityType"] = 0;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".strOriginalTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";

	



$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".showAddInPopup"] = false;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".showEditInPopup"] = false;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".fieldsForRegister"] = array();
	
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listAjax"] = false;

	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".audit"] = true;

	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".locking"] = false;



$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".list"] = true;



$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".reorderRecordsByHeader"] = true;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".createSortByDropdown"] = true;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".strSortControlSettingsJSON"] = "";




$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".import"] = true;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportTo"] = true;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFriendly"] = true;


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".searchSaving"] = false;
//

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".showSearchPanel"] = true;
		$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".flexibleSearch"] = true;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".isUseAjaxSuggest"] = true;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".rowHighlite"] = true;



				

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".buttonsAdded"] = false;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".isUseTimeForSearch"] = false;





$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".filterFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".requiredSearchFields"] = array();

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"][] = "APP_UID";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"][] = "PRO_UID";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"][] = "TAS_UID";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"][] = "GRP_UID";
	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".allSearchFields"][] = "ID";
	

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".googleLikeFields"][] = "ID";


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".advSearchFields"][] = "ID";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".tableType"] = "list";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printerPageOrientation"] = 0;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".nPrinterPageScale"] = 100;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".nPrinterSplitRecords"] = 40;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".geocodingEnabled"] = false;





$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listGridLayout"] = 3;


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".pageSize"] = 20;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".orderindexes"] = array();

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	PRO_UID,  	TAS_UID,  	GRP_UID,  	ID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".sqlFrom"] = "FROM APP_ASSIGN_SELF_SERVICE_VALUE";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".sqlWhereExpr"] = "";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".highlightSearchResults"] = true;

$tableKeysAPP_ASSIGN_SELF_SERVICE_VALUE = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".Keys"] = $tableKeysAPP_ASSIGN_SELF_SERVICE_VALUE;

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".listFields"][] = "ID";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".hideMobileList"] = array();


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".viewFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".viewFields"][] = "ID";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".addFields"] = array();

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".masterListFields"][] = "ID";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".inlineAddFields"] = array();

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".editFields"] = array();

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".inlineEditFields"] = array();

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".updateSelectedFields"] = array();


$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".exportFields"][] = "ID";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".importFields"][] = "ID";

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"] = array();
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"][] = "APP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"][] = "DEL_INDEX";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"][] = "PRO_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"][] = "TAS_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"][] = "GRP_UID";
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".printFields"][] = "ID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$fdata["Label"] = GetFieldLabel("APP_ASSIGN_SELF_SERVICE_VALUE","APP_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$fdata["Label"] = GetFieldLabel("APP_ASSIGN_SELF_SERVICE_VALUE","DEL_INDEX");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE["DEL_INDEX"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$fdata["Label"] = GetFieldLabel("APP_ASSIGN_SELF_SERVICE_VALUE","PRO_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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




	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$fdata["Label"] = GetFieldLabel("APP_ASSIGN_SELF_SERVICE_VALUE","TAS_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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




	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE["TAS_UID"] = $fdata;
//	GRP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GRP_UID";
	$fdata["GoodName"] = "GRP_UID";
	$fdata["ownerTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$fdata["Label"] = GetFieldLabel("APP_ASSIGN_SELF_SERVICE_VALUE","GRP_UID");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GRP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_UID";

	
	
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




	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE["GRP_UID"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
	$fdata["Label"] = GetFieldLabel("APP_ASSIGN_SELF_SERVICE_VALUE","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_ASSIGN_SELF_SERVICE_VALUE["ID"] = $fdata;


$tables_data["APP_ASSIGN_SELF_SERVICE_VALUE"]=&$tdataAPP_ASSIGN_SELF_SERVICE_VALUE;
$field_labels["APP_ASSIGN_SELF_SERVICE_VALUE"] = &$fieldLabelsAPP_ASSIGN_SELF_SERVICE_VALUE;
$fieldToolTips["APP_ASSIGN_SELF_SERVICE_VALUE"] = &$fieldToolTipsAPP_ASSIGN_SELF_SERVICE_VALUE;
$placeHolders["APP_ASSIGN_SELF_SERVICE_VALUE"] = &$placeHoldersAPP_ASSIGN_SELF_SERVICE_VALUE;
$page_titles["APP_ASSIGN_SELF_SERVICE_VALUE"] = &$pageTitlesAPP_ASSIGN_SELF_SERVICE_VALUE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_ASSIGN_SELF_SERVICE_VALUE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_ASSIGN_SELF_SERVICE_VALUE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_ASSIGN_SELF_SERVICE_VALUE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	PRO_UID,  	TAS_UID,  	GRP_UID,  	ID";
$proto0["m_strFrom"] = "FROM APP_ASSIGN_SELF_SERVICE_VALUE";
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
	"m_strTable" => "APP_ASSIGN_SELF_SERVICE_VALUE",
	"m_srcTableName" => "APP_ASSIGN_SELF_SERVICE_VALUE"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_ASSIGN_SELF_SERVICE_VALUE",
	"m_srcTableName" => "APP_ASSIGN_SELF_SERVICE_VALUE"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APP_ASSIGN_SELF_SERVICE_VALUE",
	"m_srcTableName" => "APP_ASSIGN_SELF_SERVICE_VALUE"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "APP_ASSIGN_SELF_SERVICE_VALUE",
	"m_srcTableName" => "APP_ASSIGN_SELF_SERVICE_VALUE"
));

$proto12["m_sql"] = "TAS_UID";
$proto12["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "GRP_UID",
	"m_strTable" => "APP_ASSIGN_SELF_SERVICE_VALUE",
	"m_srcTableName" => "APP_ASSIGN_SELF_SERVICE_VALUE"
));

$proto14["m_sql"] = "GRP_UID";
$proto14["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "APP_ASSIGN_SELF_SERVICE_VALUE",
	"m_srcTableName" => "APP_ASSIGN_SELF_SERVICE_VALUE"
));

$proto16["m_sql"] = "ID";
$proto16["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto19["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "APP_UID";
$proto19["m_columns"][] = "DEL_INDEX";
$proto19["m_columns"][] = "PRO_UID";
$proto19["m_columns"][] = "TAS_UID";
$proto19["m_columns"][] = "GRP_UID";
$proto19["m_columns"][] = "ID";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "APP_ASSIGN_SELF_SERVICE_VALUE";
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
$proto0["m_srcTableName"]="APP_ASSIGN_SELF_SERVICE_VALUE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_ASSIGN_SELF_SERVICE_VALUE = createSqlQuery_APP_ASSIGN_SELF_SERVICE_VALUE();


	
						;

						

$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".sqlquery"] = $queryData_APP_ASSIGN_SELF_SERVICE_VALUE;

$tableEvents["APP_ASSIGN_SELF_SERVICE_VALUE"] = new eventsBase;
$tdataAPP_ASSIGN_SELF_SERVICE_VALUE[".hasEvents"] = false;

?>
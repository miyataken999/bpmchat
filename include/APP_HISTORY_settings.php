<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_HISTORY = array();
	$tdataAPP_HISTORY[".truncateText"] = true;
	$tdataAPP_HISTORY[".NumberOfChars"] = 20;
	$tdataAPP_HISTORY[".ShortName"] = "APP_HISTORY";
	$tdataAPP_HISTORY[".OwnerID"] = "";
	$tdataAPP_HISTORY[".OriginalTable"] = "APP_HISTORY";

//	field labels
$fieldLabelsAPP_HISTORY = array();
$fieldToolTipsAPP_HISTORY = array();
$pageTitlesAPP_HISTORY = array();
$placeHoldersAPP_HISTORY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_HISTORY["Japanese"] = array();
	$fieldToolTipsAPP_HISTORY["Japanese"] = array();
	$placeHoldersAPP_HISTORY["Japanese"] = array();
	$pageTitlesAPP_HISTORY["Japanese"] = array();
	$fieldLabelsAPP_HISTORY["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_HISTORY["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_HISTORY["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_HISTORY["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsAPP_HISTORY["Japanese"]["TAS_UID"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["TAS_UID"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsAPP_HISTORY["Japanese"]["DYN_UID"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["DYN_UID"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["OBJ_TYPE"] = "OBJタイプ";
	$fieldToolTipsAPP_HISTORY["Japanese"]["OBJ_TYPE"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["OBJ_TYPE"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_HISTORY["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["USR_UID"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsAPP_HISTORY["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["HISTORY_DATE"] = "履歴日付";
	$fieldToolTipsAPP_HISTORY["Japanese"]["HISTORY_DATE"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["HISTORY_DATE"] = "";
	$fieldLabelsAPP_HISTORY["Japanese"]["HISTORY_DATA"] = "履歴データ";
	$fieldToolTipsAPP_HISTORY["Japanese"]["HISTORY_DATA"] = "";
	$placeHoldersAPP_HISTORY["Japanese"]["HISTORY_DATA"] = "";
	if (count($fieldToolTipsAPP_HISTORY["Japanese"]))
		$tdataAPP_HISTORY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_HISTORY["English"] = array();
	$fieldToolTipsAPP_HISTORY["English"] = array();
	$placeHoldersAPP_HISTORY["English"] = array();
	$pageTitlesAPP_HISTORY["English"] = array();
	$fieldLabelsAPP_HISTORY["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_HISTORY["English"]["APP_UID"] = "";
	$placeHoldersAPP_HISTORY["English"]["APP_UID"] = "";
	$fieldLabelsAPP_HISTORY["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_HISTORY["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_HISTORY["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_HISTORY["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsAPP_HISTORY["English"]["PRO_UID"] = "";
	$placeHoldersAPP_HISTORY["English"]["PRO_UID"] = "";
	$fieldLabelsAPP_HISTORY["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsAPP_HISTORY["English"]["TAS_UID"] = "";
	$placeHoldersAPP_HISTORY["English"]["TAS_UID"] = "";
	$fieldLabelsAPP_HISTORY["English"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsAPP_HISTORY["English"]["DYN_UID"] = "";
	$placeHoldersAPP_HISTORY["English"]["DYN_UID"] = "";
	$fieldLabelsAPP_HISTORY["English"]["OBJ_TYPE"] = "OBJタイプ";
	$fieldToolTipsAPP_HISTORY["English"]["OBJ_TYPE"] = "";
	$placeHoldersAPP_HISTORY["English"]["OBJ_TYPE"] = "";
	$fieldLabelsAPP_HISTORY["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_HISTORY["English"]["USR_UID"] = "";
	$placeHoldersAPP_HISTORY["English"]["USR_UID"] = "";
	$fieldLabelsAPP_HISTORY["English"]["APP_STATUS"] = "アプリのステータス";
	$fieldToolTipsAPP_HISTORY["English"]["APP_STATUS"] = "";
	$placeHoldersAPP_HISTORY["English"]["APP_STATUS"] = "";
	$fieldLabelsAPP_HISTORY["English"]["HISTORY_DATE"] = "履歴日付";
	$fieldToolTipsAPP_HISTORY["English"]["HISTORY_DATE"] = "";
	$placeHoldersAPP_HISTORY["English"]["HISTORY_DATE"] = "";
	$fieldLabelsAPP_HISTORY["English"]["HISTORY_DATA"] = "履歴データ";
	$fieldToolTipsAPP_HISTORY["English"]["HISTORY_DATA"] = "";
	$placeHoldersAPP_HISTORY["English"]["HISTORY_DATA"] = "";
	if (count($fieldToolTipsAPP_HISTORY["English"]))
		$tdataAPP_HISTORY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_HISTORY[""] = array();
	$fieldToolTipsAPP_HISTORY[""] = array();
	$placeHoldersAPP_HISTORY[""] = array();
	$pageTitlesAPP_HISTORY[""] = array();
	if (count($fieldToolTipsAPP_HISTORY[""]))
		$tdataAPP_HISTORY[".isUseToolTips"] = true;
}


	$tdataAPP_HISTORY[".NCSearch"] = true;



$tdataAPP_HISTORY[".shortTableName"] = "APP_HISTORY";
$tdataAPP_HISTORY[".nSecOptions"] = 0;
$tdataAPP_HISTORY[".recsPerRowPrint"] = 1;
$tdataAPP_HISTORY[".mainTableOwnerID"] = "";
$tdataAPP_HISTORY[".moveNext"] = 0;
$tdataAPP_HISTORY[".entityType"] = 0;

$tdataAPP_HISTORY[".strOriginalTableName"] = "APP_HISTORY";

	



$tdataAPP_HISTORY[".showAddInPopup"] = false;

$tdataAPP_HISTORY[".showEditInPopup"] = false;

$tdataAPP_HISTORY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_HISTORY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_HISTORY[".fieldsForRegister"] = array();
	
$tdataAPP_HISTORY[".listAjax"] = false;

	$tdataAPP_HISTORY[".audit"] = true;

	$tdataAPP_HISTORY[".locking"] = false;



$tdataAPP_HISTORY[".list"] = true;



$tdataAPP_HISTORY[".reorderRecordsByHeader"] = true;
$tdataAPP_HISTORY[".createSortByDropdown"] = true;
$tdataAPP_HISTORY[".strSortControlSettingsJSON"] = "";




$tdataAPP_HISTORY[".import"] = true;

$tdataAPP_HISTORY[".exportTo"] = true;

$tdataAPP_HISTORY[".printFriendly"] = true;


$tdataAPP_HISTORY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_HISTORY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_HISTORY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_HISTORY[".searchSaving"] = false;
//

$tdataAPP_HISTORY[".showSearchPanel"] = true;
		$tdataAPP_HISTORY[".flexibleSearch"] = true;

$tdataAPP_HISTORY[".isUseAjaxSuggest"] = true;

$tdataAPP_HISTORY[".rowHighlite"] = true;



																

$tdataAPP_HISTORY[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_HISTORY[".buttonsAdded"] = false;

$tdataAPP_HISTORY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_HISTORY[".isUseTimeForSearch"] = false;



$tdataAPP_HISTORY[".badgeColor"] = "6DA5C8";


$tdataAPP_HISTORY[".allSearchFields"] = array();
$tdataAPP_HISTORY[".filterFields"] = array();
$tdataAPP_HISTORY[".requiredSearchFields"] = array();

$tdataAPP_HISTORY[".allSearchFields"][] = "APP_UID";
	$tdataAPP_HISTORY[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_HISTORY[".allSearchFields"][] = "PRO_UID";
	$tdataAPP_HISTORY[".allSearchFields"][] = "TAS_UID";
	$tdataAPP_HISTORY[".allSearchFields"][] = "DYN_UID";
	$tdataAPP_HISTORY[".allSearchFields"][] = "OBJ_TYPE";
	$tdataAPP_HISTORY[".allSearchFields"][] = "USR_UID";
	$tdataAPP_HISTORY[".allSearchFields"][] = "APP_STATUS";
	$tdataAPP_HISTORY[".allSearchFields"][] = "HISTORY_DATE";
	$tdataAPP_HISTORY[".allSearchFields"][] = "HISTORY_DATA";
	

$tdataAPP_HISTORY[".googleLikeFields"] = array();
$tdataAPP_HISTORY[".googleLikeFields"][] = "APP_UID";
$tdataAPP_HISTORY[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".googleLikeFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".googleLikeFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".googleLikeFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".googleLikeFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".googleLikeFields"][] = "USR_UID";
$tdataAPP_HISTORY[".googleLikeFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".googleLikeFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".googleLikeFields"][] = "HISTORY_DATA";


$tdataAPP_HISTORY[".advSearchFields"] = array();
$tdataAPP_HISTORY[".advSearchFields"][] = "APP_UID";
$tdataAPP_HISTORY[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".advSearchFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".advSearchFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".advSearchFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".advSearchFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".advSearchFields"][] = "USR_UID";
$tdataAPP_HISTORY[".advSearchFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".advSearchFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".advSearchFields"][] = "HISTORY_DATA";

$tdataAPP_HISTORY[".tableType"] = "list";

$tdataAPP_HISTORY[".printerPageOrientation"] = 0;
$tdataAPP_HISTORY[".nPrinterPageScale"] = 100;

$tdataAPP_HISTORY[".nPrinterSplitRecords"] = 40;

$tdataAPP_HISTORY[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_HISTORY[".geocodingEnabled"] = false;





$tdataAPP_HISTORY[".listGridLayout"] = 3;


$tdataAPP_HISTORY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_HISTORY[".pageSize"] = 20;

$tdataAPP_HISTORY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_HISTORY[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_HISTORY[".orderindexes"] = array();

$tdataAPP_HISTORY[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	PRO_UID,  	TAS_UID,  	DYN_UID,  	OBJ_TYPE,  	USR_UID,  	APP_STATUS,  	HISTORY_DATE,  	HISTORY_DATA";
$tdataAPP_HISTORY[".sqlFrom"] = "FROM APP_HISTORY";
$tdataAPP_HISTORY[".sqlWhereExpr"] = "";
$tdataAPP_HISTORY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_HISTORY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_HISTORY[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_HISTORY[".highlightSearchResults"] = true;

$tableKeysAPP_HISTORY = array();
$tdataAPP_HISTORY[".Keys"] = $tableKeysAPP_HISTORY;

$tdataAPP_HISTORY[".listFields"] = array();
$tdataAPP_HISTORY[".listFields"][] = "APP_UID";
$tdataAPP_HISTORY[".listFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".listFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".listFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".listFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".listFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".listFields"][] = "USR_UID";
$tdataAPP_HISTORY[".listFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".listFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".listFields"][] = "HISTORY_DATA";

$tdataAPP_HISTORY[".hideMobileList"] = array();


$tdataAPP_HISTORY[".viewFields"] = array();

$tdataAPP_HISTORY[".addFields"] = array();

$tdataAPP_HISTORY[".masterListFields"] = array();
$tdataAPP_HISTORY[".masterListFields"][] = "APP_UID";
$tdataAPP_HISTORY[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".masterListFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".masterListFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".masterListFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".masterListFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".masterListFields"][] = "USR_UID";
$tdataAPP_HISTORY[".masterListFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".masterListFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".masterListFields"][] = "HISTORY_DATA";

$tdataAPP_HISTORY[".inlineAddFields"] = array();

$tdataAPP_HISTORY[".editFields"] = array();

$tdataAPP_HISTORY[".inlineEditFields"] = array();

$tdataAPP_HISTORY[".updateSelectedFields"] = array();


$tdataAPP_HISTORY[".exportFields"] = array();
$tdataAPP_HISTORY[".exportFields"][] = "APP_UID";
$tdataAPP_HISTORY[".exportFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".exportFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".exportFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".exportFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".exportFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".exportFields"][] = "USR_UID";
$tdataAPP_HISTORY[".exportFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".exportFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".exportFields"][] = "HISTORY_DATA";

$tdataAPP_HISTORY[".importFields"] = array();
$tdataAPP_HISTORY[".importFields"][] = "APP_UID";
$tdataAPP_HISTORY[".importFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".importFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".importFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".importFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".importFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".importFields"][] = "USR_UID";
$tdataAPP_HISTORY[".importFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".importFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".importFields"][] = "HISTORY_DATA";

$tdataAPP_HISTORY[".printFields"] = array();
$tdataAPP_HISTORY[".printFields"][] = "APP_UID";
$tdataAPP_HISTORY[".printFields"][] = "DEL_INDEX";
$tdataAPP_HISTORY[".printFields"][] = "PRO_UID";
$tdataAPP_HISTORY[".printFields"][] = "TAS_UID";
$tdataAPP_HISTORY[".printFields"][] = "DYN_UID";
$tdataAPP_HISTORY[".printFields"][] = "OBJ_TYPE";
$tdataAPP_HISTORY[".printFields"][] = "USR_UID";
$tdataAPP_HISTORY[".printFields"][] = "APP_STATUS";
$tdataAPP_HISTORY[".printFields"][] = "HISTORY_DATE";
$tdataAPP_HISTORY[".printFields"][] = "HISTORY_DATA";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","APP_UID");
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




	$tdataAPP_HISTORY["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","DEL_INDEX");
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




	$tdataAPP_HISTORY["DEL_INDEX"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","PRO_UID");
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




	$tdataAPP_HISTORY["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","TAS_UID");
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




	$tdataAPP_HISTORY["TAS_UID"] = $fdata;
//	DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DYN_UID";
	$fdata["GoodName"] = "DYN_UID";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","DYN_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DYN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_UID";

	
	
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




	$tdataAPP_HISTORY["DYN_UID"] = $fdata;
//	OBJ_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OBJ_TYPE";
	$fdata["GoodName"] = "OBJ_TYPE";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","OBJ_TYPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OBJ_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataAPP_HISTORY["OBJ_TYPE"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","USR_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataAPP_HISTORY["USR_UID"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","APP_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_HISTORY["APP_STATUS"] = $fdata;
//	HISTORY_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "HISTORY_DATE";
	$fdata["GoodName"] = "HISTORY_DATE";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","HISTORY_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HISTORY_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HISTORY_DATE";

	
	
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




	$tdataAPP_HISTORY["HISTORY_DATE"] = $fdata;
//	HISTORY_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HISTORY_DATA";
	$fdata["GoodName"] = "HISTORY_DATA";
	$fdata["ownerTable"] = "APP_HISTORY";
	$fdata["Label"] = GetFieldLabel("APP_HISTORY","HISTORY_DATA");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HISTORY_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HISTORY_DATA";

	
	
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




	$tdataAPP_HISTORY["HISTORY_DATA"] = $fdata;


$tables_data["APP_HISTORY"]=&$tdataAPP_HISTORY;
$field_labels["APP_HISTORY"] = &$fieldLabelsAPP_HISTORY;
$fieldToolTips["APP_HISTORY"] = &$fieldToolTipsAPP_HISTORY;
$placeHolders["APP_HISTORY"] = &$placeHoldersAPP_HISTORY;
$page_titles["APP_HISTORY"] = &$pageTitlesAPP_HISTORY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_HISTORY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_HISTORY"] = array();


	
				$strOriginalDetailsTable="APPLICATION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="APPLICATION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "APPLICATION";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["APP_HISTORY"][0] = $masterParams;
				$masterTablesData["APP_HISTORY"][0]["masterKeys"] = array();
	$masterTablesData["APP_HISTORY"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["APP_HISTORY"][0]["detailKeys"] = array();
	$masterTablesData["APP_HISTORY"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_HISTORY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	PRO_UID,  	TAS_UID,  	DYN_UID,  	OBJ_TYPE,  	USR_UID,  	APP_STATUS,  	HISTORY_DATE,  	HISTORY_DATA";
$proto0["m_strFrom"] = "FROM APP_HISTORY";
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
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_HISTORY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "APP_HISTORY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto10["m_sql"] = "PRO_UID";
$proto10["m_srcTableName"] = "APP_HISTORY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto12["m_sql"] = "TAS_UID";
$proto12["m_srcTableName"] = "APP_HISTORY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_UID",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto14["m_sql"] = "DYN_UID";
$proto14["m_srcTableName"] = "APP_HISTORY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ_TYPE",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto16["m_sql"] = "OBJ_TYPE";
$proto16["m_srcTableName"] = "APP_HISTORY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto18["m_sql"] = "USR_UID";
$proto18["m_srcTableName"] = "APP_HISTORY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto20["m_sql"] = "APP_STATUS";
$proto20["m_srcTableName"] = "APP_HISTORY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "HISTORY_DATE",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto22["m_sql"] = "HISTORY_DATE";
$proto22["m_srcTableName"] = "APP_HISTORY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HISTORY_DATA",
	"m_strTable" => "APP_HISTORY",
	"m_srcTableName" => "APP_HISTORY"
));

$proto24["m_sql"] = "HISTORY_DATA";
$proto24["m_srcTableName"] = "APP_HISTORY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "APP_HISTORY";
$proto27["m_srcTableName"] = "APP_HISTORY";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "APP_UID";
$proto27["m_columns"][] = "DEL_INDEX";
$proto27["m_columns"][] = "PRO_UID";
$proto27["m_columns"][] = "TAS_UID";
$proto27["m_columns"][] = "DYN_UID";
$proto27["m_columns"][] = "OBJ_TYPE";
$proto27["m_columns"][] = "USR_UID";
$proto27["m_columns"][] = "APP_STATUS";
$proto27["m_columns"][] = "HISTORY_DATE";
$proto27["m_columns"][] = "HISTORY_DATA";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "APP_HISTORY";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "APP_HISTORY";
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
$proto0["m_srcTableName"]="APP_HISTORY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_HISTORY = createSqlQuery_APP_HISTORY();


	
						;

										

$tdataAPP_HISTORY[".sqlquery"] = $queryData_APP_HISTORY;

$tableEvents["APP_HISTORY"] = new eventsBase;
$tdataAPP_HISTORY[".hasEvents"] = false;

?>
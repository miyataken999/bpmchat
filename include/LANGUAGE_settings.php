<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLANGUAGE = array();
	$tdataLANGUAGE[".truncateText"] = true;
	$tdataLANGUAGE[".NumberOfChars"] = 20;
	$tdataLANGUAGE[".ShortName"] = "LANGUAGE";
	$tdataLANGUAGE[".OwnerID"] = "";
	$tdataLANGUAGE[".OriginalTable"] = "LANGUAGE";

//	field labels
$fieldLabelsLANGUAGE = array();
$fieldToolTipsLANGUAGE = array();
$pageTitlesLANGUAGE = array();
$placeHoldersLANGUAGE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLANGUAGE["Japanese"] = array();
	$fieldToolTipsLANGUAGE["Japanese"] = array();
	$placeHoldersLANGUAGE["Japanese"] = array();
	$pageTitlesLANGUAGE["Japanese"] = array();
	$fieldLabelsLANGUAGE["Japanese"]["LAN_ID"] = "LAN ID";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_ID"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_ID"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_LOCATION"] = "LANの場所";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_LOCATION"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_LOCATION"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_NAME"] = "LAN名";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_NAME"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_NAME"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_NATIVE_NAME"] = "LANネイティブの名前";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_NATIVE_NAME"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_NATIVE_NAME"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_DIRECTION"] = "LAN方向";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_DIRECTION"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_DIRECTION"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_WEIGHT"] = "LAN重量";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_WEIGHT"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_WEIGHT"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_ENABLED"] = "LANが有効になって";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_ENABLED"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_ENABLED"] = "";
	$fieldLabelsLANGUAGE["Japanese"]["LAN_CALENDAR"] = "LANカレンダー";
	$fieldToolTipsLANGUAGE["Japanese"]["LAN_CALENDAR"] = "";
	$placeHoldersLANGUAGE["Japanese"]["LAN_CALENDAR"] = "";
	if (count($fieldToolTipsLANGUAGE["Japanese"]))
		$tdataLANGUAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLANGUAGE["English"] = array();
	$fieldToolTipsLANGUAGE["English"] = array();
	$placeHoldersLANGUAGE["English"] = array();
	$pageTitlesLANGUAGE["English"] = array();
	$fieldLabelsLANGUAGE["English"]["LAN_ID"] = "LAN ID";
	$fieldToolTipsLANGUAGE["English"]["LAN_ID"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_ID"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_LOCATION"] = "LANの場所";
	$fieldToolTipsLANGUAGE["English"]["LAN_LOCATION"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_LOCATION"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_NAME"] = "LAN名";
	$fieldToolTipsLANGUAGE["English"]["LAN_NAME"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_NAME"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_NATIVE_NAME"] = "LANネイティブの名前";
	$fieldToolTipsLANGUAGE["English"]["LAN_NATIVE_NAME"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_NATIVE_NAME"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_DIRECTION"] = "LAN方向";
	$fieldToolTipsLANGUAGE["English"]["LAN_DIRECTION"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_DIRECTION"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_WEIGHT"] = "LAN重量";
	$fieldToolTipsLANGUAGE["English"]["LAN_WEIGHT"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_WEIGHT"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_ENABLED"] = "LANが有効になって";
	$fieldToolTipsLANGUAGE["English"]["LAN_ENABLED"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_ENABLED"] = "";
	$fieldLabelsLANGUAGE["English"]["LAN_CALENDAR"] = "LANカレンダー";
	$fieldToolTipsLANGUAGE["English"]["LAN_CALENDAR"] = "";
	$placeHoldersLANGUAGE["English"]["LAN_CALENDAR"] = "";
	if (count($fieldToolTipsLANGUAGE["English"]))
		$tdataLANGUAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLANGUAGE[""] = array();
	$fieldToolTipsLANGUAGE[""] = array();
	$placeHoldersLANGUAGE[""] = array();
	$pageTitlesLANGUAGE[""] = array();
	if (count($fieldToolTipsLANGUAGE[""]))
		$tdataLANGUAGE[".isUseToolTips"] = true;
}


	$tdataLANGUAGE[".NCSearch"] = true;



$tdataLANGUAGE[".shortTableName"] = "LANGUAGE";
$tdataLANGUAGE[".nSecOptions"] = 0;
$tdataLANGUAGE[".recsPerRowPrint"] = 1;
$tdataLANGUAGE[".mainTableOwnerID"] = "";
$tdataLANGUAGE[".moveNext"] = 0;
$tdataLANGUAGE[".entityType"] = 0;

$tdataLANGUAGE[".strOriginalTableName"] = "LANGUAGE";

	



$tdataLANGUAGE[".showAddInPopup"] = false;

$tdataLANGUAGE[".showEditInPopup"] = false;

$tdataLANGUAGE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLANGUAGE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLANGUAGE[".fieldsForRegister"] = array();
	
$tdataLANGUAGE[".listAjax"] = false;

	$tdataLANGUAGE[".audit"] = true;

	$tdataLANGUAGE[".locking"] = false;

$tdataLANGUAGE[".edit"] = true;
$tdataLANGUAGE[".afterEditAction"] = 1;
$tdataLANGUAGE[".closePopupAfterEdit"] = 1;
$tdataLANGUAGE[".afterEditActionDetTable"] = "";

$tdataLANGUAGE[".add"] = true;
$tdataLANGUAGE[".afterAddAction"] = 1;
$tdataLANGUAGE[".closePopupAfterAdd"] = 1;
$tdataLANGUAGE[".afterAddActionDetTable"] = "";

$tdataLANGUAGE[".list"] = true;

$tdataLANGUAGE[".inlineEdit"] = true;


$tdataLANGUAGE[".reorderRecordsByHeader"] = true;
$tdataLANGUAGE[".createSortByDropdown"] = true;
$tdataLANGUAGE[".strSortControlSettingsJSON"] = "";



$tdataLANGUAGE[".inlineAdd"] = true;
$tdataLANGUAGE[".view"] = true;

$tdataLANGUAGE[".import"] = true;

$tdataLANGUAGE[".exportTo"] = true;

$tdataLANGUAGE[".printFriendly"] = true;

$tdataLANGUAGE[".delete"] = true;

$tdataLANGUAGE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLANGUAGE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLANGUAGE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLANGUAGE[".searchSaving"] = false;
//

$tdataLANGUAGE[".showSearchPanel"] = true;
		$tdataLANGUAGE[".flexibleSearch"] = true;

$tdataLANGUAGE[".isUseAjaxSuggest"] = true;

$tdataLANGUAGE[".rowHighlite"] = true;



				

$tdataLANGUAGE[".ajaxCodeSnippetAdded"] = false;

$tdataLANGUAGE[".buttonsAdded"] = false;

$tdataLANGUAGE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLANGUAGE[".isUseTimeForSearch"] = false;





$tdataLANGUAGE[".allSearchFields"] = array();
$tdataLANGUAGE[".filterFields"] = array();
$tdataLANGUAGE[".requiredSearchFields"] = array();

$tdataLANGUAGE[".allSearchFields"][] = "LAN_ID";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_LOCATION";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_NAME";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_NATIVE_NAME";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_DIRECTION";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_WEIGHT";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_ENABLED";
	$tdataLANGUAGE[".allSearchFields"][] = "LAN_CALENDAR";
	

$tdataLANGUAGE[".googleLikeFields"] = array();
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_ID";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_NAME";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".googleLikeFields"][] = "LAN_CALENDAR";


$tdataLANGUAGE[".advSearchFields"] = array();
$tdataLANGUAGE[".advSearchFields"][] = "LAN_ID";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_NAME";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".advSearchFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".tableType"] = "list";

$tdataLANGUAGE[".printerPageOrientation"] = 0;
$tdataLANGUAGE[".nPrinterPageScale"] = 100;

$tdataLANGUAGE[".nPrinterSplitRecords"] = 40;

$tdataLANGUAGE[".nPrinterPDFSplitRecords"] = 40;



$tdataLANGUAGE[".geocodingEnabled"] = false;





$tdataLANGUAGE[".listGridLayout"] = 3;


$tdataLANGUAGE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLANGUAGE[".pageSize"] = 20;

$tdataLANGUAGE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLANGUAGE[".strOrderBy"] = $tstrOrderBy;

$tdataLANGUAGE[".orderindexes"] = array();

$tdataLANGUAGE[".sqlHead"] = "SELECT LAN_ID,  	LAN_LOCATION,  	LAN_NAME,  	LAN_NATIVE_NAME,  	LAN_DIRECTION,  	LAN_WEIGHT,  	LAN_ENABLED,  	LAN_CALENDAR";
$tdataLANGUAGE[".sqlFrom"] = "FROM `LANGUAGE`";
$tdataLANGUAGE[".sqlWhereExpr"] = "";
$tdataLANGUAGE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLANGUAGE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLANGUAGE[".arrGroupsPerPage"] = $arrGPP;

$tdataLANGUAGE[".highlightSearchResults"] = true;

$tableKeysLANGUAGE = array();
$tableKeysLANGUAGE[] = "LAN_ID";
$tdataLANGUAGE[".Keys"] = $tableKeysLANGUAGE;

$tdataLANGUAGE[".listFields"] = array();
$tdataLANGUAGE[".listFields"][] = "LAN_ID";
$tdataLANGUAGE[".listFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".listFields"][] = "LAN_NAME";
$tdataLANGUAGE[".listFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".listFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".listFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".listFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".listFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".hideMobileList"] = array();


$tdataLANGUAGE[".viewFields"] = array();
$tdataLANGUAGE[".viewFields"][] = "LAN_ID";
$tdataLANGUAGE[".viewFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".viewFields"][] = "LAN_NAME";
$tdataLANGUAGE[".viewFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".viewFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".viewFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".viewFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".viewFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".addFields"] = array();
$tdataLANGUAGE[".addFields"][] = "LAN_ID";
$tdataLANGUAGE[".addFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".addFields"][] = "LAN_NAME";
$tdataLANGUAGE[".addFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".addFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".addFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".addFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".addFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".masterListFields"] = array();
$tdataLANGUAGE[".masterListFields"][] = "LAN_ID";
$tdataLANGUAGE[".masterListFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".masterListFields"][] = "LAN_NAME";
$tdataLANGUAGE[".masterListFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".masterListFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".masterListFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".masterListFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".masterListFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".inlineAddFields"] = array();
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_ID";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_NAME";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".inlineAddFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".editFields"] = array();
$tdataLANGUAGE[".editFields"][] = "LAN_ID";
$tdataLANGUAGE[".editFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".editFields"][] = "LAN_NAME";
$tdataLANGUAGE[".editFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".editFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".editFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".editFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".editFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".inlineEditFields"] = array();
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_ID";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_NAME";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".inlineEditFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".updateSelectedFields"] = array();
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_ID";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_NAME";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".updateSelectedFields"][] = "LAN_CALENDAR";


$tdataLANGUAGE[".exportFields"] = array();
$tdataLANGUAGE[".exportFields"][] = "LAN_ID";
$tdataLANGUAGE[".exportFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".exportFields"][] = "LAN_NAME";
$tdataLANGUAGE[".exportFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".exportFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".exportFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".exportFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".exportFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".importFields"] = array();
$tdataLANGUAGE[".importFields"][] = "LAN_ID";
$tdataLANGUAGE[".importFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".importFields"][] = "LAN_NAME";
$tdataLANGUAGE[".importFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".importFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".importFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".importFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".importFields"][] = "LAN_CALENDAR";

$tdataLANGUAGE[".printFields"] = array();
$tdataLANGUAGE[".printFields"][] = "LAN_ID";
$tdataLANGUAGE[".printFields"][] = "LAN_LOCATION";
$tdataLANGUAGE[".printFields"][] = "LAN_NAME";
$tdataLANGUAGE[".printFields"][] = "LAN_NATIVE_NAME";
$tdataLANGUAGE[".printFields"][] = "LAN_DIRECTION";
$tdataLANGUAGE[".printFields"][] = "LAN_WEIGHT";
$tdataLANGUAGE[".printFields"][] = "LAN_ENABLED";
$tdataLANGUAGE[".printFields"][] = "LAN_CALENDAR";

//	LAN_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LAN_ID";
	$fdata["GoodName"] = "LAN_ID";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_ID");
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

		$fdata["strField"] = "LAN_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_ID";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataLANGUAGE["LAN_ID"] = $fdata;
//	LAN_LOCATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LAN_LOCATION";
	$fdata["GoodName"] = "LAN_LOCATION";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_LOCATION");
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

		$fdata["strField"] = "LAN_LOCATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_LOCATION";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataLANGUAGE["LAN_LOCATION"] = $fdata;
//	LAN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LAN_NAME";
	$fdata["GoodName"] = "LAN_NAME";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_NAME");
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

		$fdata["strField"] = "LAN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataLANGUAGE["LAN_NAME"] = $fdata;
//	LAN_NATIVE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LAN_NATIVE_NAME";
	$fdata["GoodName"] = "LAN_NATIVE_NAME";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_NATIVE_NAME");
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

		$fdata["strField"] = "LAN_NATIVE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_NATIVE_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataLANGUAGE["LAN_NATIVE_NAME"] = $fdata;
//	LAN_DIRECTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LAN_DIRECTION";
	$fdata["GoodName"] = "LAN_DIRECTION";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_DIRECTION");
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

		$fdata["strField"] = "LAN_DIRECTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_DIRECTION";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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




	$tdataLANGUAGE["LAN_DIRECTION"] = $fdata;
//	LAN_WEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LAN_WEIGHT";
	$fdata["GoodName"] = "LAN_WEIGHT";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_WEIGHT");
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

		$fdata["strField"] = "LAN_WEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_WEIGHT";

	
	
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




	$tdataLANGUAGE["LAN_WEIGHT"] = $fdata;
//	LAN_ENABLED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LAN_ENABLED";
	$fdata["GoodName"] = "LAN_ENABLED";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_ENABLED");
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

		$fdata["strField"] = "LAN_ENABLED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_ENABLED";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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




	$tdataLANGUAGE["LAN_ENABLED"] = $fdata;
//	LAN_CALENDAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LAN_CALENDAR";
	$fdata["GoodName"] = "LAN_CALENDAR";
	$fdata["ownerTable"] = "LANGUAGE";
	$fdata["Label"] = GetFieldLabel("LANGUAGE","LAN_CALENDAR");
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

		$fdata["strField"] = "LAN_CALENDAR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAN_CALENDAR";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdataLANGUAGE["LAN_CALENDAR"] = $fdata;


$tables_data["LANGUAGE"]=&$tdataLANGUAGE;
$field_labels["LANGUAGE"] = &$fieldLabelsLANGUAGE;
$fieldToolTips["LANGUAGE"] = &$fieldToolTipsLANGUAGE;
$placeHolders["LANGUAGE"] = &$placeHoldersLANGUAGE;
$page_titles["LANGUAGE"] = &$pageTitlesLANGUAGE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LANGUAGE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LANGUAGE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LANGUAGE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LAN_ID,  	LAN_LOCATION,  	LAN_NAME,  	LAN_NATIVE_NAME,  	LAN_DIRECTION,  	LAN_WEIGHT,  	LAN_ENABLED,  	LAN_CALENDAR";
$proto0["m_strFrom"] = "FROM `LANGUAGE`";
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
	"m_strName" => "LAN_ID",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto6["m_sql"] = "LAN_ID";
$proto6["m_srcTableName"] = "LANGUAGE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_LOCATION",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto8["m_sql"] = "LAN_LOCATION";
$proto8["m_srcTableName"] = "LANGUAGE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_NAME",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto10["m_sql"] = "LAN_NAME";
$proto10["m_srcTableName"] = "LANGUAGE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_NATIVE_NAME",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto12["m_sql"] = "LAN_NATIVE_NAME";
$proto12["m_srcTableName"] = "LANGUAGE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_DIRECTION",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto14["m_sql"] = "LAN_DIRECTION";
$proto14["m_srcTableName"] = "LANGUAGE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_WEIGHT",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto16["m_sql"] = "LAN_WEIGHT";
$proto16["m_srcTableName"] = "LANGUAGE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_ENABLED",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto18["m_sql"] = "LAN_ENABLED";
$proto18["m_srcTableName"] = "LANGUAGE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LAN_CALENDAR",
	"m_strTable" => "LANGUAGE",
	"m_srcTableName" => "LANGUAGE"
));

$proto20["m_sql"] = "LAN_CALENDAR";
$proto20["m_srcTableName"] = "LANGUAGE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "LANGUAGE";
$proto23["m_srcTableName"] = "LANGUAGE";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "LAN_ID";
$proto23["m_columns"][] = "LAN_LOCATION";
$proto23["m_columns"][] = "LAN_NAME";
$proto23["m_columns"][] = "LAN_NATIVE_NAME";
$proto23["m_columns"][] = "LAN_DIRECTION";
$proto23["m_columns"][] = "LAN_WEIGHT";
$proto23["m_columns"][] = "LAN_ENABLED";
$proto23["m_columns"][] = "LAN_CALENDAR";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`LANGUAGE`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "LANGUAGE";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LANGUAGE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LANGUAGE = createSqlQuery_LANGUAGE();


	
						;

								

$tdataLANGUAGE[".sqlquery"] = $queryData_LANGUAGE;

$tableEvents["LANGUAGE"] = new eventsBase;
$tdataLANGUAGE[".hasEvents"] = false;

?>
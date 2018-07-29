<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPPLICATION_Report1 = array();
	$tdataAPPLICATION_Report1[".truncateText"] = true;
	$tdataAPPLICATION_Report1[".NumberOfChars"] = 80;
	$tdataAPPLICATION_Report1[".ShortName"] = "APPLICATION_Report1";
	$tdataAPPLICATION_Report1[".OwnerID"] = "";
	$tdataAPPLICATION_Report1[".OriginalTable"] = "APPLICATION";

//	field labels
$fieldLabelsAPPLICATION_Report1 = array();
$fieldToolTipsAPPLICATION_Report1 = array();
$pageTitlesAPPLICATION_Report1 = array();
$placeHoldersAPPLICATION_Report1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPPLICATION_Report1["Japanese"] = array();
	$fieldToolTipsAPPLICATION_Report1["Japanese"] = array();
	$placeHoldersAPPLICATION_Report1["Japanese"] = array();
	$pageTitlesAPPLICATION_Report1["Japanese"] = array();
	$fieldLabelsAPPLICATION_Report1["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Report1["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Report1["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report1["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Report1["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Report1["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Report1["Japanese"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Report1["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Report1["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Report1["Japanese"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Report1["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report1["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Report1["Japanese"]["APP_DURATION"] = "APP DURATION";
	$fieldToolTipsAPPLICATION_Report1["Japanese"]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION_Report1["Japanese"]["APP_DURATION"] = "";
	if (count($fieldToolTipsAPPLICATION_Report1["Japanese"]))
		$tdataAPPLICATION_Report1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPPLICATION_Report1["English"] = array();
	$fieldToolTipsAPPLICATION_Report1["English"] = array();
	$placeHoldersAPPLICATION_Report1["English"] = array();
	$pageTitlesAPPLICATION_Report1["English"] = array();
	$fieldLabelsAPPLICATION_Report1["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Report1["English"]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Report1["English"]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report1["English"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Report1["English"]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Report1["English"]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Report1["English"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Report1["English"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Report1["English"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Report1["English"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Report1["English"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report1["English"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Report1["English"]["APP_DURATION"] = "APP DURATION";
	$fieldToolTipsAPPLICATION_Report1["English"]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION_Report1["English"]["APP_DURATION"] = "";
	if (count($fieldToolTipsAPPLICATION_Report1["English"]))
		$tdataAPPLICATION_Report1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPPLICATION_Report1[""] = array();
	$fieldToolTipsAPPLICATION_Report1[""] = array();
	$placeHoldersAPPLICATION_Report1[""] = array();
	$pageTitlesAPPLICATION_Report1[""] = array();
	$fieldLabelsAPPLICATION_Report1[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPPLICATION_Report1[""]["APP_STATUS"] = "";
	$placeHoldersAPPLICATION_Report1[""]["APP_STATUS"] = "";
	$fieldLabelsAPPLICATION_Report1[""]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPPLICATION_Report1[""]["PRO_UID"] = "";
	$placeHoldersAPPLICATION_Report1[""]["PRO_UID"] = "";
	$fieldLabelsAPPLICATION_Report1[""]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPPLICATION_Report1[""]["APP_FINISH_DATE"] = "";
	$placeHoldersAPPLICATION_Report1[""]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPPLICATION_Report1[""]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPPLICATION_Report1[""]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPPLICATION_Report1[""]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPPLICATION_Report1[""]["APP_DURATION"] = "APP DURATION";
	$fieldToolTipsAPPLICATION_Report1[""]["APP_DURATION"] = "";
	$placeHoldersAPPLICATION_Report1[""]["APP_DURATION"] = "";
	if (count($fieldToolTipsAPPLICATION_Report1[""]))
		$tdataAPPLICATION_Report1[".isUseToolTips"] = true;
}


	$tdataAPPLICATION_Report1[".NCSearch"] = true;



$tdataAPPLICATION_Report1[".shortTableName"] = "APPLICATION_Report1";
$tdataAPPLICATION_Report1[".nSecOptions"] = 0;
$tdataAPPLICATION_Report1[".recsPerRowPrint"] = 1;
$tdataAPPLICATION_Report1[".mainTableOwnerID"] = "";
$tdataAPPLICATION_Report1[".moveNext"] = 1;
$tdataAPPLICATION_Report1[".entityType"] = 2;

$tdataAPPLICATION_Report1[".strOriginalTableName"] = "APPLICATION";

	



$tdataAPPLICATION_Report1[".showAddInPopup"] = false;

$tdataAPPLICATION_Report1[".showEditInPopup"] = false;

$tdataAPPLICATION_Report1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPPLICATION_Report1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPPLICATION_Report1[".fieldsForRegister"] = array();
	
$tdataAPPLICATION_Report1[".listAjax"] = false;

	$tdataAPPLICATION_Report1[".audit"] = false;

	$tdataAPPLICATION_Report1[".locking"] = false;


$tdataAPPLICATION_Report1[".add"] = true;
$tdataAPPLICATION_Report1[".afterAddAction"] = 1;
$tdataAPPLICATION_Report1[".closePopupAfterAdd"] = 1;
$tdataAPPLICATION_Report1[".afterAddActionDetTable"] = "";

$tdataAPPLICATION_Report1[".list"] = true;



$tdataAPPLICATION_Report1[".reorderRecordsByHeader"] = true;





$tdataAPPLICATION_Report1[".exportTo"] = true;

$tdataAPPLICATION_Report1[".printFriendly"] = true;


$tdataAPPLICATION_Report1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAPPLICATION_Report1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAPPLICATION_Report1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAPPLICATION_Report1[".searchSaving"] = false;
//

$tdataAPPLICATION_Report1[".showSearchPanel"] = true;
		$tdataAPPLICATION_Report1[".flexibleSearch"] = true;

$tdataAPPLICATION_Report1[".isUseAjaxSuggest"] = true;




				

$tdataAPPLICATION_Report1[".ajaxCodeSnippetAdded"] = false;

$tdataAPPLICATION_Report1[".buttonsAdded"] = false;

$tdataAPPLICATION_Report1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPPLICATION_Report1[".isUseTimeForSearch"] = false;





$tdataAPPLICATION_Report1[".allSearchFields"] = array();
$tdataAPPLICATION_Report1[".filterFields"] = array();
$tdataAPPLICATION_Report1[".requiredSearchFields"] = array();

$tdataAPPLICATION_Report1[".allSearchFields"][] = "APP_STATUS";
	$tdataAPPLICATION_Report1[".allSearchFields"][] = "PRO_UID";
	$tdataAPPLICATION_Report1[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPPLICATION_Report1[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataAPPLICATION_Report1[".allSearchFields"][] = "APP_DURATION";
	

$tdataAPPLICATION_Report1[".googleLikeFields"] = array();
$tdataAPPLICATION_Report1[".googleLikeFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".googleLikeFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".googleLikeFields"][] = "APP_DURATION";


$tdataAPPLICATION_Report1[".advSearchFields"] = array();
$tdataAPPLICATION_Report1[".advSearchFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".advSearchFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".advSearchFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".tableType"] = "report";

$tdataAPPLICATION_Report1[".printerPageOrientation"] = 0;
$tdataAPPLICATION_Report1[".nPrinterPageScale"] = 100;

$tdataAPPLICATION_Report1[".nPrinterSplitRecords"] = 40;

$tdataAPPLICATION_Report1[".nPrinterPDFSplitRecords"] = 40;



$tdataAPPLICATION_Report1[".geocodingEnabled"] = false;

//report settings
$tdataAPPLICATION_Report1[".crossTabReport"] = true;

$tdataAPPLICATION_Report1[".reportGroupFields"] = true;
$tdataAPPLICATION_Report1[".pageSize"] = 5;
$tdataAPPLICATION_Report1[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "APP_STATUS";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "PRO_UID";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "APP_DURATION";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
$tdataAPPLICATION_Report1[".reportGroupFieldsData"] = $reportGroupFields;

$tdataAPPLICATION_Report1[".reportHorizontalSummary"] = true;

$tdataAPPLICATION_Report1[".isExistTotalFields"] = true;

$tdataAPPLICATION_Report1[".reportVerticalSummary"] = true;

$tdataAPPLICATION_Report1[".reportPageSummary"] = true;

$tdataAPPLICATION_Report1[".reportGlobalSummary"] = true;

$tdataAPPLICATION_Report1[".repShowDet"] = true;

$tdataAPPLICATION_Report1[".reportLayout"] = 0;

//end of report settings




$tdataAPPLICATION_Report1[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPPLICATION_Report1[".strOrderBy"] = $tstrOrderBy;

$tdataAPPLICATION_Report1[".orderindexes"] = array();

$tdataAPPLICATION_Report1[".sqlHead"] = "SELECT APP_STATUS,  PRO_UID,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_DURATION";
$tdataAPPLICATION_Report1[".sqlFrom"] = "FROM APPLICATION";
$tdataAPPLICATION_Report1[".sqlWhereExpr"] = "";
$tdataAPPLICATION_Report1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPPLICATION_Report1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPPLICATION_Report1[".arrGroupsPerPage"] = $arrGPP;

$tdataAPPLICATION_Report1[".highlightSearchResults"] = true;

$tableKeysAPPLICATION_Report1 = array();
$tdataAPPLICATION_Report1[".Keys"] = $tableKeysAPPLICATION_Report1;

$tdataAPPLICATION_Report1[".listFields"] = array();
$tdataAPPLICATION_Report1[".listFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".listFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".listFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".listFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".listFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".hideMobileList"] = array();


$tdataAPPLICATION_Report1[".viewFields"] = array();
$tdataAPPLICATION_Report1[".viewFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".viewFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".viewFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".viewFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".viewFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".addFields"] = array();
$tdataAPPLICATION_Report1[".addFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".addFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".addFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".addFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".addFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".masterListFields"] = array();
$tdataAPPLICATION_Report1[".masterListFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".masterListFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".masterListFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".masterListFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".inlineAddFields"] = array();
$tdataAPPLICATION_Report1[".inlineAddFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".inlineAddFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".inlineAddFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".editFields"] = array();
$tdataAPPLICATION_Report1[".editFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".editFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".editFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".editFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".editFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".inlineEditFields"] = array();
$tdataAPPLICATION_Report1[".inlineEditFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".inlineEditFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".inlineEditFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".updateSelectedFields"] = array();
$tdataAPPLICATION_Report1[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".updateSelectedFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".updateSelectedFields"][] = "APP_DURATION";


$tdataAPPLICATION_Report1[".exportFields"] = array();
$tdataAPPLICATION_Report1[".exportFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".exportFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".exportFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".exportFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".exportFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".importFields"] = array();
$tdataAPPLICATION_Report1[".importFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".importFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".importFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".importFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".importFields"][] = "APP_DURATION";

$tdataAPPLICATION_Report1[".printFields"] = array();
$tdataAPPLICATION_Report1[".printFields"][] = "APP_STATUS";
$tdataAPPLICATION_Report1[".printFields"][] = "PRO_UID";
$tdataAPPLICATION_Report1[".printFields"][] = "APP_FINISH_DATE";
$tdataAPPLICATION_Report1[".printFields"][] = "APP_UPDATE_DATE";
$tdataAPPLICATION_Report1[".printFields"][] = "APP_DURATION";

//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report1","APP_STATUS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report1["APP_STATUS"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report1","PRO_UID");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PRO_TITLE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report1["PRO_UID"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report1","APP_FINISH_DATE");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_FINISH_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION_Report1["APP_FINISH_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report1","APP_UPDATE_DATE");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UPDATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPPLICATION_Report1["APP_UPDATE_DATE"] = $fdata;
//	APP_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_DURATION";
	$fdata["GoodName"] = "APP_DURATION";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION_Report1","APP_DURATION");
	$fdata["FieldType"] = 5;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
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

		$fdata["strField"] = "APP_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPPLICATION_Report1["APP_DURATION"] = $fdata;


$tables_data["APPLICATION Report1"]=&$tdataAPPLICATION_Report1;
$field_labels["APPLICATION_Report1"] = &$fieldLabelsAPPLICATION_Report1;
$fieldToolTips["APPLICATION_Report1"] = &$fieldToolTipsAPPLICATION_Report1;
$placeHolders["APPLICATION_Report1"] = &$placeHoldersAPPLICATION_Report1;
$page_titles["APPLICATION_Report1"] = &$pageTitlesAPPLICATION_Report1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["APPLICATION Report1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APPLICATION_Report1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_STATUS,  PRO_UID,  APP_FINISH_DATE,  APP_UPDATE_DATE,  APP_DURATION";
$proto0["m_strFrom"] = "FROM APPLICATION";
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
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report1"
));

$proto6["m_sql"] = "APP_STATUS";
$proto6["m_srcTableName"] = "APPLICATION Report1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report1"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "APPLICATION Report1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report1"
));

$proto10["m_sql"] = "APP_FINISH_DATE";
$proto10["m_srcTableName"] = "APPLICATION Report1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report1"
));

$proto12["m_sql"] = "APP_UPDATE_DATE";
$proto12["m_srcTableName"] = "APPLICATION Report1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DURATION",
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION Report1"
));

$proto14["m_sql"] = "APP_DURATION";
$proto14["m_srcTableName"] = "APPLICATION Report1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "APPLICATION";
$proto17["m_srcTableName"] = "APPLICATION Report1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "APP_UID";
$proto17["m_columns"][] = "APP_TITLE";
$proto17["m_columns"][] = "APP_DESCRIPTION";
$proto17["m_columns"][] = "APP_NUMBER";
$proto17["m_columns"][] = "APP_PARENT";
$proto17["m_columns"][] = "APP_STATUS";
$proto17["m_columns"][] = "PRO_UID";
$proto17["m_columns"][] = "APP_PROC_STATUS";
$proto17["m_columns"][] = "APP_PROC_CODE";
$proto17["m_columns"][] = "APP_PARALLEL";
$proto17["m_columns"][] = "APP_INIT_USER";
$proto17["m_columns"][] = "APP_CUR_USER";
$proto17["m_columns"][] = "APP_CREATE_DATE";
$proto17["m_columns"][] = "APP_INIT_DATE";
$proto17["m_columns"][] = "APP_FINISH_DATE";
$proto17["m_columns"][] = "APP_UPDATE_DATE";
$proto17["m_columns"][] = "APP_DATA";
$proto17["m_columns"][] = "APP_PIN";
$proto17["m_columns"][] = "APP_DURATION";
$proto17["m_columns"][] = "APP_DELAY_DURATION";
$proto17["m_columns"][] = "APP_DRIVE_FOLDER_UID";
$proto17["m_columns"][] = "APP_ROUTING_DATA";
$proto17["m_columns"][] = "APP_STATUS_ID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "APPLICATION";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "APPLICATION Report1";
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
$proto0["m_srcTableName"]="APPLICATION Report1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APPLICATION_Report1 = createSqlQuery_APPLICATION_Report1();


	
						;

					

$tdataAPPLICATION_Report1[".sqlquery"] = $queryData_APPLICATION_Report1;

$tableEvents["APPLICATION Report1"] = new eventsBase;
$tdataAPPLICATION_Report1[".hasEvents"] = false;

?>
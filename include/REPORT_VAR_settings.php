<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORT_VAR = array();
	$tdataREPORT_VAR[".truncateText"] = true;
	$tdataREPORT_VAR[".NumberOfChars"] = 20;
	$tdataREPORT_VAR[".ShortName"] = "REPORT_VAR";
	$tdataREPORT_VAR[".OwnerID"] = "";
	$tdataREPORT_VAR[".OriginalTable"] = "REPORT_VAR";

//	field labels
$fieldLabelsREPORT_VAR = array();
$fieldToolTipsREPORT_VAR = array();
$pageTitlesREPORT_VAR = array();
$placeHoldersREPORT_VAR = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsREPORT_VAR["Japanese"] = array();
	$fieldToolTipsREPORT_VAR["Japanese"] = array();
	$placeHoldersREPORT_VAR["Japanese"] = array();
	$pageTitlesREPORT_VAR["Japanese"] = array();
	$fieldLabelsREPORT_VAR["Japanese"]["REP_VAR_UID"] = "担当するvar UID";
	$fieldToolTipsREPORT_VAR["Japanese"]["REP_VAR_UID"] = "";
	$placeHoldersREPORT_VAR["Japanese"]["REP_VAR_UID"] = "";
	$fieldLabelsREPORT_VAR["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsREPORT_VAR["Japanese"]["PRO_UID"] = "";
	$placeHoldersREPORT_VAR["Japanese"]["PRO_UID"] = "";
	$fieldLabelsREPORT_VAR["Japanese"]["REP_TAB_UID"] = "担当者]タブのUID";
	$fieldToolTipsREPORT_VAR["Japanese"]["REP_TAB_UID"] = "";
	$placeHoldersREPORT_VAR["Japanese"]["REP_TAB_UID"] = "";
	$fieldLabelsREPORT_VAR["Japanese"]["REP_VAR_NAME"] = "担当者VAR名";
	$fieldToolTipsREPORT_VAR["Japanese"]["REP_VAR_NAME"] = "";
	$placeHoldersREPORT_VAR["Japanese"]["REP_VAR_NAME"] = "";
	$fieldLabelsREPORT_VAR["Japanese"]["REP_VAR_TYPE"] = "担当者VARタイプ";
	$fieldToolTipsREPORT_VAR["Japanese"]["REP_VAR_TYPE"] = "";
	$placeHoldersREPORT_VAR["Japanese"]["REP_VAR_TYPE"] = "";
	if (count($fieldToolTipsREPORT_VAR["Japanese"]))
		$tdataREPORT_VAR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsREPORT_VAR["English"] = array();
	$fieldToolTipsREPORT_VAR["English"] = array();
	$placeHoldersREPORT_VAR["English"] = array();
	$pageTitlesREPORT_VAR["English"] = array();
	$fieldLabelsREPORT_VAR["English"]["REP_VAR_UID"] = "担当するvar UID";
	$fieldToolTipsREPORT_VAR["English"]["REP_VAR_UID"] = "";
	$placeHoldersREPORT_VAR["English"]["REP_VAR_UID"] = "";
	$fieldLabelsREPORT_VAR["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsREPORT_VAR["English"]["PRO_UID"] = "";
	$placeHoldersREPORT_VAR["English"]["PRO_UID"] = "";
	$fieldLabelsREPORT_VAR["English"]["REP_TAB_UID"] = "担当者]タブのUID";
	$fieldToolTipsREPORT_VAR["English"]["REP_TAB_UID"] = "";
	$placeHoldersREPORT_VAR["English"]["REP_TAB_UID"] = "";
	$fieldLabelsREPORT_VAR["English"]["REP_VAR_NAME"] = "担当者VAR名";
	$fieldToolTipsREPORT_VAR["English"]["REP_VAR_NAME"] = "";
	$placeHoldersREPORT_VAR["English"]["REP_VAR_NAME"] = "";
	$fieldLabelsREPORT_VAR["English"]["REP_VAR_TYPE"] = "担当者VARタイプ";
	$fieldToolTipsREPORT_VAR["English"]["REP_VAR_TYPE"] = "";
	$placeHoldersREPORT_VAR["English"]["REP_VAR_TYPE"] = "";
	if (count($fieldToolTipsREPORT_VAR["English"]))
		$tdataREPORT_VAR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORT_VAR[""] = array();
	$fieldToolTipsREPORT_VAR[""] = array();
	$placeHoldersREPORT_VAR[""] = array();
	$pageTitlesREPORT_VAR[""] = array();
	if (count($fieldToolTipsREPORT_VAR[""]))
		$tdataREPORT_VAR[".isUseToolTips"] = true;
}


	$tdataREPORT_VAR[".NCSearch"] = true;



$tdataREPORT_VAR[".shortTableName"] = "REPORT_VAR";
$tdataREPORT_VAR[".nSecOptions"] = 0;
$tdataREPORT_VAR[".recsPerRowPrint"] = 1;
$tdataREPORT_VAR[".mainTableOwnerID"] = "";
$tdataREPORT_VAR[".moveNext"] = 0;
$tdataREPORT_VAR[".entityType"] = 0;

$tdataREPORT_VAR[".strOriginalTableName"] = "REPORT_VAR";

	



$tdataREPORT_VAR[".showAddInPopup"] = false;

$tdataREPORT_VAR[".showEditInPopup"] = false;

$tdataREPORT_VAR[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORT_VAR[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORT_VAR[".fieldsForRegister"] = array();
	
$tdataREPORT_VAR[".listAjax"] = false;

	$tdataREPORT_VAR[".audit"] = true;

	$tdataREPORT_VAR[".locking"] = false;

$tdataREPORT_VAR[".edit"] = true;
$tdataREPORT_VAR[".afterEditAction"] = 1;
$tdataREPORT_VAR[".closePopupAfterEdit"] = 1;
$tdataREPORT_VAR[".afterEditActionDetTable"] = "";

$tdataREPORT_VAR[".add"] = true;
$tdataREPORT_VAR[".afterAddAction"] = 1;
$tdataREPORT_VAR[".closePopupAfterAdd"] = 1;
$tdataREPORT_VAR[".afterAddActionDetTable"] = "";

$tdataREPORT_VAR[".list"] = true;

$tdataREPORT_VAR[".inlineEdit"] = true;


$tdataREPORT_VAR[".reorderRecordsByHeader"] = true;
$tdataREPORT_VAR[".createSortByDropdown"] = true;
$tdataREPORT_VAR[".strSortControlSettingsJSON"] = "";



$tdataREPORT_VAR[".inlineAdd"] = true;
$tdataREPORT_VAR[".view"] = true;

$tdataREPORT_VAR[".import"] = true;

$tdataREPORT_VAR[".exportTo"] = true;

$tdataREPORT_VAR[".printFriendly"] = true;

$tdataREPORT_VAR[".delete"] = true;

$tdataREPORT_VAR[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataREPORT_VAR[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataREPORT_VAR[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataREPORT_VAR[".searchSaving"] = false;
//

$tdataREPORT_VAR[".showSearchPanel"] = true;
		$tdataREPORT_VAR[".flexibleSearch"] = true;

$tdataREPORT_VAR[".isUseAjaxSuggest"] = true;

$tdataREPORT_VAR[".rowHighlite"] = true;



				

$tdataREPORT_VAR[".ajaxCodeSnippetAdded"] = false;

$tdataREPORT_VAR[".buttonsAdded"] = false;

$tdataREPORT_VAR[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORT_VAR[".isUseTimeForSearch"] = false;





$tdataREPORT_VAR[".allSearchFields"] = array();
$tdataREPORT_VAR[".filterFields"] = array();
$tdataREPORT_VAR[".requiredSearchFields"] = array();

$tdataREPORT_VAR[".allSearchFields"][] = "REP_VAR_UID";
	$tdataREPORT_VAR[".allSearchFields"][] = "PRO_UID";
	$tdataREPORT_VAR[".allSearchFields"][] = "REP_TAB_UID";
	$tdataREPORT_VAR[".allSearchFields"][] = "REP_VAR_NAME";
	$tdataREPORT_VAR[".allSearchFields"][] = "REP_VAR_TYPE";
	

$tdataREPORT_VAR[".googleLikeFields"] = array();
$tdataREPORT_VAR[".googleLikeFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".googleLikeFields"][] = "PRO_UID";
$tdataREPORT_VAR[".googleLikeFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".googleLikeFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".googleLikeFields"][] = "REP_VAR_TYPE";


$tdataREPORT_VAR[".advSearchFields"] = array();
$tdataREPORT_VAR[".advSearchFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".advSearchFields"][] = "PRO_UID";
$tdataREPORT_VAR[".advSearchFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".advSearchFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".advSearchFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".tableType"] = "list";

$tdataREPORT_VAR[".printerPageOrientation"] = 0;
$tdataREPORT_VAR[".nPrinterPageScale"] = 100;

$tdataREPORT_VAR[".nPrinterSplitRecords"] = 40;

$tdataREPORT_VAR[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORT_VAR[".geocodingEnabled"] = false;





$tdataREPORT_VAR[".listGridLayout"] = 3;


$tdataREPORT_VAR[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataREPORT_VAR[".pageSize"] = 20;

$tdataREPORT_VAR[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORT_VAR[".strOrderBy"] = $tstrOrderBy;

$tdataREPORT_VAR[".orderindexes"] = array();

$tdataREPORT_VAR[".sqlHead"] = "SELECT REP_VAR_UID,  	PRO_UID,  	REP_TAB_UID,  	REP_VAR_NAME,  	REP_VAR_TYPE";
$tdataREPORT_VAR[".sqlFrom"] = "FROM REPORT_VAR";
$tdataREPORT_VAR[".sqlWhereExpr"] = "";
$tdataREPORT_VAR[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORT_VAR[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORT_VAR[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORT_VAR[".highlightSearchResults"] = true;

$tableKeysREPORT_VAR = array();
$tableKeysREPORT_VAR[] = "REP_VAR_UID";
$tdataREPORT_VAR[".Keys"] = $tableKeysREPORT_VAR;

$tdataREPORT_VAR[".listFields"] = array();
$tdataREPORT_VAR[".listFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".listFields"][] = "PRO_UID";
$tdataREPORT_VAR[".listFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".listFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".listFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".hideMobileList"] = array();


$tdataREPORT_VAR[".viewFields"] = array();
$tdataREPORT_VAR[".viewFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".viewFields"][] = "PRO_UID";
$tdataREPORT_VAR[".viewFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".viewFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".viewFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".addFields"] = array();
$tdataREPORT_VAR[".addFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".addFields"][] = "PRO_UID";
$tdataREPORT_VAR[".addFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".addFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".addFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".masterListFields"] = array();
$tdataREPORT_VAR[".masterListFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".masterListFields"][] = "PRO_UID";
$tdataREPORT_VAR[".masterListFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".masterListFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".masterListFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".inlineAddFields"] = array();
$tdataREPORT_VAR[".inlineAddFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".inlineAddFields"][] = "PRO_UID";
$tdataREPORT_VAR[".inlineAddFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".inlineAddFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".inlineAddFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".editFields"] = array();
$tdataREPORT_VAR[".editFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".editFields"][] = "PRO_UID";
$tdataREPORT_VAR[".editFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".editFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".editFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".inlineEditFields"] = array();
$tdataREPORT_VAR[".inlineEditFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".inlineEditFields"][] = "PRO_UID";
$tdataREPORT_VAR[".inlineEditFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".inlineEditFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".inlineEditFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".updateSelectedFields"] = array();
$tdataREPORT_VAR[".updateSelectedFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".updateSelectedFields"][] = "PRO_UID";
$tdataREPORT_VAR[".updateSelectedFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".updateSelectedFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".updateSelectedFields"][] = "REP_VAR_TYPE";


$tdataREPORT_VAR[".exportFields"] = array();
$tdataREPORT_VAR[".exportFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".exportFields"][] = "PRO_UID";
$tdataREPORT_VAR[".exportFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".exportFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".exportFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".importFields"] = array();
$tdataREPORT_VAR[".importFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".importFields"][] = "PRO_UID";
$tdataREPORT_VAR[".importFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".importFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".importFields"][] = "REP_VAR_TYPE";

$tdataREPORT_VAR[".printFields"] = array();
$tdataREPORT_VAR[".printFields"][] = "REP_VAR_UID";
$tdataREPORT_VAR[".printFields"][] = "PRO_UID";
$tdataREPORT_VAR[".printFields"][] = "REP_TAB_UID";
$tdataREPORT_VAR[".printFields"][] = "REP_VAR_NAME";
$tdataREPORT_VAR[".printFields"][] = "REP_VAR_TYPE";

//	REP_VAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "REP_VAR_UID";
	$fdata["GoodName"] = "REP_VAR_UID";
	$fdata["ownerTable"] = "REPORT_VAR";
	$fdata["Label"] = GetFieldLabel("REPORT_VAR","REP_VAR_UID");
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

		$fdata["strField"] = "REP_VAR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_VAR_UID";

	
	
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




	$tdataREPORT_VAR["REP_VAR_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "REPORT_VAR";
	$fdata["Label"] = GetFieldLabel("REPORT_VAR","PRO_UID");
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




	$tdataREPORT_VAR["PRO_UID"] = $fdata;
//	REP_TAB_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "REP_TAB_UID";
	$fdata["GoodName"] = "REP_TAB_UID";
	$fdata["ownerTable"] = "REPORT_VAR";
	$fdata["Label"] = GetFieldLabel("REPORT_VAR","REP_TAB_UID");
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

		$fdata["strField"] = "REP_TAB_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_TAB_UID";

	
	
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




	$tdataREPORT_VAR["REP_TAB_UID"] = $fdata;
//	REP_VAR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "REP_VAR_NAME";
	$fdata["GoodName"] = "REP_VAR_NAME";
	$fdata["ownerTable"] = "REPORT_VAR";
	$fdata["Label"] = GetFieldLabel("REPORT_VAR","REP_VAR_NAME");
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

		$fdata["strField"] = "REP_VAR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_VAR_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataREPORT_VAR["REP_VAR_NAME"] = $fdata;
//	REP_VAR_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "REP_VAR_TYPE";
	$fdata["GoodName"] = "REP_VAR_TYPE";
	$fdata["ownerTable"] = "REPORT_VAR";
	$fdata["Label"] = GetFieldLabel("REPORT_VAR","REP_VAR_TYPE");
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

		$fdata["strField"] = "REP_VAR_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REP_VAR_TYPE";

	
	
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




	$tdataREPORT_VAR["REP_VAR_TYPE"] = $fdata;


$tables_data["REPORT_VAR"]=&$tdataREPORT_VAR;
$field_labels["REPORT_VAR"] = &$fieldLabelsREPORT_VAR;
$fieldToolTips["REPORT_VAR"] = &$fieldToolTipsREPORT_VAR;
$placeHolders["REPORT_VAR"] = &$placeHoldersREPORT_VAR;
$page_titles["REPORT_VAR"] = &$pageTitlesREPORT_VAR;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORT_VAR"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORT_VAR"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORT_VAR()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "REP_VAR_UID,  	PRO_UID,  	REP_TAB_UID,  	REP_VAR_NAME,  	REP_VAR_TYPE";
$proto0["m_strFrom"] = "FROM REPORT_VAR";
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
	"m_strName" => "REP_VAR_UID",
	"m_strTable" => "REPORT_VAR",
	"m_srcTableName" => "REPORT_VAR"
));

$proto6["m_sql"] = "REP_VAR_UID";
$proto6["m_srcTableName"] = "REPORT_VAR";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "REPORT_VAR",
	"m_srcTableName" => "REPORT_VAR"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "REPORT_VAR";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_UID",
	"m_strTable" => "REPORT_VAR",
	"m_srcTableName" => "REPORT_VAR"
));

$proto10["m_sql"] = "REP_TAB_UID";
$proto10["m_srcTableName"] = "REPORT_VAR";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_VAR_NAME",
	"m_strTable" => "REPORT_VAR",
	"m_srcTableName" => "REPORT_VAR"
));

$proto12["m_sql"] = "REP_VAR_NAME";
$proto12["m_srcTableName"] = "REPORT_VAR";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_VAR_TYPE",
	"m_strTable" => "REPORT_VAR",
	"m_srcTableName" => "REPORT_VAR"
));

$proto14["m_sql"] = "REP_VAR_TYPE";
$proto14["m_srcTableName"] = "REPORT_VAR";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "REPORT_VAR";
$proto17["m_srcTableName"] = "REPORT_VAR";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "REP_VAR_UID";
$proto17["m_columns"][] = "PRO_UID";
$proto17["m_columns"][] = "REP_TAB_UID";
$proto17["m_columns"][] = "REP_VAR_NAME";
$proto17["m_columns"][] = "REP_VAR_TYPE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "REPORT_VAR";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "REPORT_VAR";
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
$proto0["m_srcTableName"]="REPORT_VAR";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORT_VAR = createSqlQuery_REPORT_VAR();


	
						;

					

$tdataREPORT_VAR[".sqlquery"] = $queryData_REPORT_VAR;

$tableEvents["REPORT_VAR"] = new eventsBase;
$tdataREPORT_VAR[".hasEvents"] = false;

?>
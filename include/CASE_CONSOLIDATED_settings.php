<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCASE_CONSOLIDATED = array();
	$tdataCASE_CONSOLIDATED[".truncateText"] = true;
	$tdataCASE_CONSOLIDATED[".NumberOfChars"] = 20;
	$tdataCASE_CONSOLIDATED[".ShortName"] = "CASE_CONSOLIDATED";
	$tdataCASE_CONSOLIDATED[".OwnerID"] = "";
	$tdataCASE_CONSOLIDATED[".OriginalTable"] = "CASE_CONSOLIDATED";

//	field labels
$fieldLabelsCASE_CONSOLIDATED = array();
$fieldToolTipsCASE_CONSOLIDATED = array();
$pageTitlesCASE_CONSOLIDATED = array();
$placeHoldersCASE_CONSOLIDATED = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCASE_CONSOLIDATED["Japanese"] = array();
	$fieldToolTipsCASE_CONSOLIDATED["Japanese"] = array();
	$placeHoldersCASE_CONSOLIDATED["Japanese"] = array();
	$pageTitlesCASE_CONSOLIDATED["Japanese"] = array();
	$fieldLabelsCASE_CONSOLIDATED["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsCASE_CONSOLIDATED["Japanese"]["TAS_UID"] = "";
	$placeHoldersCASE_CONSOLIDATED["Japanese"]["TAS_UID"] = "";
	$fieldLabelsCASE_CONSOLIDATED["Japanese"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsCASE_CONSOLIDATED["Japanese"]["DYN_UID"] = "";
	$placeHoldersCASE_CONSOLIDATED["Japanese"]["DYN_UID"] = "";
	$fieldLabelsCASE_CONSOLIDATED["Japanese"]["REP_TAB_UID"] = "担当者]タブのUID";
	$fieldToolTipsCASE_CONSOLIDATED["Japanese"]["REP_TAB_UID"] = "";
	$placeHoldersCASE_CONSOLIDATED["Japanese"]["REP_TAB_UID"] = "";
	$fieldLabelsCASE_CONSOLIDATED["Japanese"]["CON_STATUS"] = "詐欺のステータス";
	$fieldToolTipsCASE_CONSOLIDATED["Japanese"]["CON_STATUS"] = "";
	$placeHoldersCASE_CONSOLIDATED["Japanese"]["CON_STATUS"] = "";
	if (count($fieldToolTipsCASE_CONSOLIDATED["Japanese"]))
		$tdataCASE_CONSOLIDATED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCASE_CONSOLIDATED["English"] = array();
	$fieldToolTipsCASE_CONSOLIDATED["English"] = array();
	$placeHoldersCASE_CONSOLIDATED["English"] = array();
	$pageTitlesCASE_CONSOLIDATED["English"] = array();
	$fieldLabelsCASE_CONSOLIDATED["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsCASE_CONSOLIDATED["English"]["TAS_UID"] = "";
	$placeHoldersCASE_CONSOLIDATED["English"]["TAS_UID"] = "";
	$fieldLabelsCASE_CONSOLIDATED["English"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsCASE_CONSOLIDATED["English"]["DYN_UID"] = "";
	$placeHoldersCASE_CONSOLIDATED["English"]["DYN_UID"] = "";
	$fieldLabelsCASE_CONSOLIDATED["English"]["REP_TAB_UID"] = "担当者]タブのUID";
	$fieldToolTipsCASE_CONSOLIDATED["English"]["REP_TAB_UID"] = "";
	$placeHoldersCASE_CONSOLIDATED["English"]["REP_TAB_UID"] = "";
	$fieldLabelsCASE_CONSOLIDATED["English"]["CON_STATUS"] = "詐欺のステータス";
	$fieldToolTipsCASE_CONSOLIDATED["English"]["CON_STATUS"] = "";
	$placeHoldersCASE_CONSOLIDATED["English"]["CON_STATUS"] = "";
	if (count($fieldToolTipsCASE_CONSOLIDATED["English"]))
		$tdataCASE_CONSOLIDATED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCASE_CONSOLIDATED[""] = array();
	$fieldToolTipsCASE_CONSOLIDATED[""] = array();
	$placeHoldersCASE_CONSOLIDATED[""] = array();
	$pageTitlesCASE_CONSOLIDATED[""] = array();
	if (count($fieldToolTipsCASE_CONSOLIDATED[""]))
		$tdataCASE_CONSOLIDATED[".isUseToolTips"] = true;
}


	$tdataCASE_CONSOLIDATED[".NCSearch"] = true;



$tdataCASE_CONSOLIDATED[".shortTableName"] = "CASE_CONSOLIDATED";
$tdataCASE_CONSOLIDATED[".nSecOptions"] = 0;
$tdataCASE_CONSOLIDATED[".recsPerRowPrint"] = 1;
$tdataCASE_CONSOLIDATED[".mainTableOwnerID"] = "";
$tdataCASE_CONSOLIDATED[".moveNext"] = 0;
$tdataCASE_CONSOLIDATED[".entityType"] = 0;

$tdataCASE_CONSOLIDATED[".strOriginalTableName"] = "CASE_CONSOLIDATED";

	



$tdataCASE_CONSOLIDATED[".showAddInPopup"] = false;

$tdataCASE_CONSOLIDATED[".showEditInPopup"] = false;

$tdataCASE_CONSOLIDATED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCASE_CONSOLIDATED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCASE_CONSOLIDATED[".fieldsForRegister"] = array();
	
$tdataCASE_CONSOLIDATED[".listAjax"] = false;

	$tdataCASE_CONSOLIDATED[".audit"] = true;

	$tdataCASE_CONSOLIDATED[".locking"] = false;

$tdataCASE_CONSOLIDATED[".edit"] = true;
$tdataCASE_CONSOLIDATED[".afterEditAction"] = 1;
$tdataCASE_CONSOLIDATED[".closePopupAfterEdit"] = 1;
$tdataCASE_CONSOLIDATED[".afterEditActionDetTable"] = "";

$tdataCASE_CONSOLIDATED[".add"] = true;
$tdataCASE_CONSOLIDATED[".afterAddAction"] = 1;
$tdataCASE_CONSOLIDATED[".closePopupAfterAdd"] = 1;
$tdataCASE_CONSOLIDATED[".afterAddActionDetTable"] = "";

$tdataCASE_CONSOLIDATED[".list"] = true;

$tdataCASE_CONSOLIDATED[".inlineEdit"] = true;


$tdataCASE_CONSOLIDATED[".reorderRecordsByHeader"] = true;
$tdataCASE_CONSOLIDATED[".createSortByDropdown"] = true;
$tdataCASE_CONSOLIDATED[".strSortControlSettingsJSON"] = "";



$tdataCASE_CONSOLIDATED[".inlineAdd"] = true;
$tdataCASE_CONSOLIDATED[".view"] = true;

$tdataCASE_CONSOLIDATED[".import"] = true;

$tdataCASE_CONSOLIDATED[".exportTo"] = true;

$tdataCASE_CONSOLIDATED[".printFriendly"] = true;

$tdataCASE_CONSOLIDATED[".delete"] = true;

$tdataCASE_CONSOLIDATED[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCASE_CONSOLIDATED[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCASE_CONSOLIDATED[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCASE_CONSOLIDATED[".searchSaving"] = false;
//

$tdataCASE_CONSOLIDATED[".showSearchPanel"] = true;
		$tdataCASE_CONSOLIDATED[".flexibleSearch"] = true;

$tdataCASE_CONSOLIDATED[".isUseAjaxSuggest"] = true;

$tdataCASE_CONSOLIDATED[".rowHighlite"] = true;



				

$tdataCASE_CONSOLIDATED[".ajaxCodeSnippetAdded"] = false;

$tdataCASE_CONSOLIDATED[".buttonsAdded"] = false;

$tdataCASE_CONSOLIDATED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCASE_CONSOLIDATED[".isUseTimeForSearch"] = false;





$tdataCASE_CONSOLIDATED[".allSearchFields"] = array();
$tdataCASE_CONSOLIDATED[".filterFields"] = array();
$tdataCASE_CONSOLIDATED[".requiredSearchFields"] = array();

$tdataCASE_CONSOLIDATED[".allSearchFields"][] = "TAS_UID";
	$tdataCASE_CONSOLIDATED[".allSearchFields"][] = "DYN_UID";
	$tdataCASE_CONSOLIDATED[".allSearchFields"][] = "REP_TAB_UID";
	$tdataCASE_CONSOLIDATED[".allSearchFields"][] = "CON_STATUS";
	

$tdataCASE_CONSOLIDATED[".googleLikeFields"] = array();
$tdataCASE_CONSOLIDATED[".googleLikeFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".googleLikeFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".googleLikeFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".googleLikeFields"][] = "CON_STATUS";


$tdataCASE_CONSOLIDATED[".advSearchFields"] = array();
$tdataCASE_CONSOLIDATED[".advSearchFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".advSearchFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".advSearchFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".advSearchFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".tableType"] = "list";

$tdataCASE_CONSOLIDATED[".printerPageOrientation"] = 0;
$tdataCASE_CONSOLIDATED[".nPrinterPageScale"] = 100;

$tdataCASE_CONSOLIDATED[".nPrinterSplitRecords"] = 40;

$tdataCASE_CONSOLIDATED[".nPrinterPDFSplitRecords"] = 40;



$tdataCASE_CONSOLIDATED[".geocodingEnabled"] = false;





$tdataCASE_CONSOLIDATED[".listGridLayout"] = 3;


$tdataCASE_CONSOLIDATED[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCASE_CONSOLIDATED[".pageSize"] = 20;

$tdataCASE_CONSOLIDATED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCASE_CONSOLIDATED[".strOrderBy"] = $tstrOrderBy;

$tdataCASE_CONSOLIDATED[".orderindexes"] = array();

$tdataCASE_CONSOLIDATED[".sqlHead"] = "SELECT TAS_UID,  	DYN_UID,  	REP_TAB_UID,  	CON_STATUS";
$tdataCASE_CONSOLIDATED[".sqlFrom"] = "FROM CASE_CONSOLIDATED";
$tdataCASE_CONSOLIDATED[".sqlWhereExpr"] = "";
$tdataCASE_CONSOLIDATED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCASE_CONSOLIDATED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCASE_CONSOLIDATED[".arrGroupsPerPage"] = $arrGPP;

$tdataCASE_CONSOLIDATED[".highlightSearchResults"] = true;

$tableKeysCASE_CONSOLIDATED = array();
$tableKeysCASE_CONSOLIDATED[] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".Keys"] = $tableKeysCASE_CONSOLIDATED;

$tdataCASE_CONSOLIDATED[".listFields"] = array();
$tdataCASE_CONSOLIDATED[".listFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".listFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".listFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".listFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".hideMobileList"] = array();


$tdataCASE_CONSOLIDATED[".viewFields"] = array();
$tdataCASE_CONSOLIDATED[".viewFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".viewFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".viewFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".viewFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".addFields"] = array();
$tdataCASE_CONSOLIDATED[".addFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".addFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".addFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".addFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".masterListFields"] = array();
$tdataCASE_CONSOLIDATED[".masterListFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".masterListFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".masterListFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".masterListFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".inlineAddFields"] = array();
$tdataCASE_CONSOLIDATED[".inlineAddFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".inlineAddFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".inlineAddFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".inlineAddFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".editFields"] = array();
$tdataCASE_CONSOLIDATED[".editFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".editFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".editFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".editFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".inlineEditFields"] = array();
$tdataCASE_CONSOLIDATED[".inlineEditFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".inlineEditFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".inlineEditFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".inlineEditFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".updateSelectedFields"] = array();
$tdataCASE_CONSOLIDATED[".updateSelectedFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".updateSelectedFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".updateSelectedFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".updateSelectedFields"][] = "CON_STATUS";


$tdataCASE_CONSOLIDATED[".exportFields"] = array();
$tdataCASE_CONSOLIDATED[".exportFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".exportFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".exportFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".exportFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".importFields"] = array();
$tdataCASE_CONSOLIDATED[".importFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".importFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".importFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".importFields"][] = "CON_STATUS";

$tdataCASE_CONSOLIDATED[".printFields"] = array();
$tdataCASE_CONSOLIDATED[".printFields"][] = "TAS_UID";
$tdataCASE_CONSOLIDATED[".printFields"][] = "DYN_UID";
$tdataCASE_CONSOLIDATED[".printFields"][] = "REP_TAB_UID";
$tdataCASE_CONSOLIDATED[".printFields"][] = "CON_STATUS";

//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "CASE_CONSOLIDATED";
	$fdata["Label"] = GetFieldLabel("CASE_CONSOLIDATED","TAS_UID");
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




	$tdataCASE_CONSOLIDATED["TAS_UID"] = $fdata;
//	DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DYN_UID";
	$fdata["GoodName"] = "DYN_UID";
	$fdata["ownerTable"] = "CASE_CONSOLIDATED";
	$fdata["Label"] = GetFieldLabel("CASE_CONSOLIDATED","DYN_UID");
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




	$tdataCASE_CONSOLIDATED["DYN_UID"] = $fdata;
//	REP_TAB_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "REP_TAB_UID";
	$fdata["GoodName"] = "REP_TAB_UID";
	$fdata["ownerTable"] = "CASE_CONSOLIDATED";
	$fdata["Label"] = GetFieldLabel("CASE_CONSOLIDATED","REP_TAB_UID");
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




	$tdataCASE_CONSOLIDATED["REP_TAB_UID"] = $fdata;
//	CON_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CON_STATUS";
	$fdata["GoodName"] = "CON_STATUS";
	$fdata["ownerTable"] = "CASE_CONSOLIDATED";
	$fdata["Label"] = GetFieldLabel("CASE_CONSOLIDATED","CON_STATUS");
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

		$fdata["strField"] = "CON_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_STATUS";

	
	
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




	$tdataCASE_CONSOLIDATED["CON_STATUS"] = $fdata;


$tables_data["CASE_CONSOLIDATED"]=&$tdataCASE_CONSOLIDATED;
$field_labels["CASE_CONSOLIDATED"] = &$fieldLabelsCASE_CONSOLIDATED;
$fieldToolTips["CASE_CONSOLIDATED"] = &$fieldToolTipsCASE_CONSOLIDATED;
$placeHolders["CASE_CONSOLIDATED"] = &$placeHoldersCASE_CONSOLIDATED;
$page_titles["CASE_CONSOLIDATED"] = &$pageTitlesCASE_CONSOLIDATED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CASE_CONSOLIDATED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CASE_CONSOLIDATED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CASE_CONSOLIDATED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TAS_UID,  	DYN_UID,  	REP_TAB_UID,  	CON_STATUS";
$proto0["m_strFrom"] = "FROM CASE_CONSOLIDATED";
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
	"m_strName" => "TAS_UID",
	"m_strTable" => "CASE_CONSOLIDATED",
	"m_srcTableName" => "CASE_CONSOLIDATED"
));

$proto6["m_sql"] = "TAS_UID";
$proto6["m_srcTableName"] = "CASE_CONSOLIDATED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_UID",
	"m_strTable" => "CASE_CONSOLIDATED",
	"m_srcTableName" => "CASE_CONSOLIDATED"
));

$proto8["m_sql"] = "DYN_UID";
$proto8["m_srcTableName"] = "CASE_CONSOLIDATED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "REP_TAB_UID",
	"m_strTable" => "CASE_CONSOLIDATED",
	"m_srcTableName" => "CASE_CONSOLIDATED"
));

$proto10["m_sql"] = "REP_TAB_UID";
$proto10["m_srcTableName"] = "CASE_CONSOLIDATED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CON_STATUS",
	"m_strTable" => "CASE_CONSOLIDATED",
	"m_srcTableName" => "CASE_CONSOLIDATED"
));

$proto12["m_sql"] = "CON_STATUS";
$proto12["m_srcTableName"] = "CASE_CONSOLIDATED";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "CASE_CONSOLIDATED";
$proto15["m_srcTableName"] = "CASE_CONSOLIDATED";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TAS_UID";
$proto15["m_columns"][] = "DYN_UID";
$proto15["m_columns"][] = "REP_TAB_UID";
$proto15["m_columns"][] = "CON_STATUS";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "CASE_CONSOLIDATED";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "CASE_CONSOLIDATED";
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
$proto0["m_srcTableName"]="CASE_CONSOLIDATED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CASE_CONSOLIDATED = createSqlQuery_CASE_CONSOLIDATED();


	
						;

				

$tdataCASE_CONSOLIDATED[".sqlquery"] = $queryData_CASE_CONSOLIDATED;

$tableEvents["CASE_CONSOLIDATED"] = new eventsBase;
$tdataCASE_CONSOLIDATED[".hasEvents"] = false;

?>
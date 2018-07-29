<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPROCESS_USER = array();
	$tdataPROCESS_USER[".truncateText"] = true;
	$tdataPROCESS_USER[".NumberOfChars"] = 20;
	$tdataPROCESS_USER[".ShortName"] = "PROCESS_USER";
	$tdataPROCESS_USER[".OwnerID"] = "";
	$tdataPROCESS_USER[".OriginalTable"] = "PROCESS_USER";

//	field labels
$fieldLabelsPROCESS_USER = array();
$fieldToolTipsPROCESS_USER = array();
$pageTitlesPROCESS_USER = array();
$placeHoldersPROCESS_USER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPROCESS_USER["Japanese"] = array();
	$fieldToolTipsPROCESS_USER["Japanese"] = array();
	$placeHoldersPROCESS_USER["Japanese"] = array();
	$pageTitlesPROCESS_USER["Japanese"] = array();
	$fieldLabelsPROCESS_USER["Japanese"]["PU_UID"] = "PUのUID";
	$fieldToolTipsPROCESS_USER["Japanese"]["PU_UID"] = "";
	$placeHoldersPROCESS_USER["Japanese"]["PU_UID"] = "";
	$fieldLabelsPROCESS_USER["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS_USER["Japanese"]["PRO_UID"] = "";
	$placeHoldersPROCESS_USER["Japanese"]["PRO_UID"] = "";
	$fieldLabelsPROCESS_USER["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsPROCESS_USER["Japanese"]["USR_UID"] = "";
	$placeHoldersPROCESS_USER["Japanese"]["USR_UID"] = "";
	$fieldLabelsPROCESS_USER["Japanese"]["PU_TYPE"] = "PUタイプ";
	$fieldToolTipsPROCESS_USER["Japanese"]["PU_TYPE"] = "";
	$placeHoldersPROCESS_USER["Japanese"]["PU_TYPE"] = "";
	if (count($fieldToolTipsPROCESS_USER["Japanese"]))
		$tdataPROCESS_USER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROCESS_USER["English"] = array();
	$fieldToolTipsPROCESS_USER["English"] = array();
	$placeHoldersPROCESS_USER["English"] = array();
	$pageTitlesPROCESS_USER["English"] = array();
	$fieldLabelsPROCESS_USER["English"]["PU_UID"] = "PUのUID";
	$fieldToolTipsPROCESS_USER["English"]["PU_UID"] = "";
	$placeHoldersPROCESS_USER["English"]["PU_UID"] = "";
	$fieldLabelsPROCESS_USER["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS_USER["English"]["PRO_UID"] = "";
	$placeHoldersPROCESS_USER["English"]["PRO_UID"] = "";
	$fieldLabelsPROCESS_USER["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsPROCESS_USER["English"]["USR_UID"] = "";
	$placeHoldersPROCESS_USER["English"]["USR_UID"] = "";
	$fieldLabelsPROCESS_USER["English"]["PU_TYPE"] = "PUタイプ";
	$fieldToolTipsPROCESS_USER["English"]["PU_TYPE"] = "";
	$placeHoldersPROCESS_USER["English"]["PU_TYPE"] = "";
	if (count($fieldToolTipsPROCESS_USER["English"]))
		$tdataPROCESS_USER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROCESS_USER[""] = array();
	$fieldToolTipsPROCESS_USER[""] = array();
	$placeHoldersPROCESS_USER[""] = array();
	$pageTitlesPROCESS_USER[""] = array();
	if (count($fieldToolTipsPROCESS_USER[""]))
		$tdataPROCESS_USER[".isUseToolTips"] = true;
}


	$tdataPROCESS_USER[".NCSearch"] = true;



$tdataPROCESS_USER[".shortTableName"] = "PROCESS_USER";
$tdataPROCESS_USER[".nSecOptions"] = 0;
$tdataPROCESS_USER[".recsPerRowPrint"] = 1;
$tdataPROCESS_USER[".mainTableOwnerID"] = "";
$tdataPROCESS_USER[".moveNext"] = 0;
$tdataPROCESS_USER[".entityType"] = 0;

$tdataPROCESS_USER[".strOriginalTableName"] = "PROCESS_USER";

	



$tdataPROCESS_USER[".showAddInPopup"] = false;

$tdataPROCESS_USER[".showEditInPopup"] = false;

$tdataPROCESS_USER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPROCESS_USER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPROCESS_USER[".fieldsForRegister"] = array();
	
$tdataPROCESS_USER[".listAjax"] = false;

	$tdataPROCESS_USER[".audit"] = true;

	$tdataPROCESS_USER[".locking"] = false;

$tdataPROCESS_USER[".edit"] = true;
$tdataPROCESS_USER[".afterEditAction"] = 1;
$tdataPROCESS_USER[".closePopupAfterEdit"] = 1;
$tdataPROCESS_USER[".afterEditActionDetTable"] = "";

$tdataPROCESS_USER[".add"] = true;
$tdataPROCESS_USER[".afterAddAction"] = 1;
$tdataPROCESS_USER[".closePopupAfterAdd"] = 1;
$tdataPROCESS_USER[".afterAddActionDetTable"] = "";

$tdataPROCESS_USER[".list"] = true;

$tdataPROCESS_USER[".inlineEdit"] = true;


$tdataPROCESS_USER[".reorderRecordsByHeader"] = true;
$tdataPROCESS_USER[".createSortByDropdown"] = true;
$tdataPROCESS_USER[".strSortControlSettingsJSON"] = "";



$tdataPROCESS_USER[".inlineAdd"] = true;
$tdataPROCESS_USER[".view"] = true;

$tdataPROCESS_USER[".import"] = true;

$tdataPROCESS_USER[".exportTo"] = true;

$tdataPROCESS_USER[".printFriendly"] = true;

$tdataPROCESS_USER[".delete"] = true;

$tdataPROCESS_USER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPROCESS_USER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPROCESS_USER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPROCESS_USER[".searchSaving"] = false;
//

$tdataPROCESS_USER[".showSearchPanel"] = true;
		$tdataPROCESS_USER[".flexibleSearch"] = true;

$tdataPROCESS_USER[".isUseAjaxSuggest"] = true;

$tdataPROCESS_USER[".rowHighlite"] = true;



				

$tdataPROCESS_USER[".ajaxCodeSnippetAdded"] = false;

$tdataPROCESS_USER[".buttonsAdded"] = false;

$tdataPROCESS_USER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPROCESS_USER[".isUseTimeForSearch"] = false;





$tdataPROCESS_USER[".allSearchFields"] = array();
$tdataPROCESS_USER[".filterFields"] = array();
$tdataPROCESS_USER[".requiredSearchFields"] = array();

$tdataPROCESS_USER[".allSearchFields"][] = "PU_UID";
	$tdataPROCESS_USER[".allSearchFields"][] = "PRO_UID";
	$tdataPROCESS_USER[".allSearchFields"][] = "USR_UID";
	$tdataPROCESS_USER[".allSearchFields"][] = "PU_TYPE";
	

$tdataPROCESS_USER[".googleLikeFields"] = array();
$tdataPROCESS_USER[".googleLikeFields"][] = "PU_UID";
$tdataPROCESS_USER[".googleLikeFields"][] = "PRO_UID";
$tdataPROCESS_USER[".googleLikeFields"][] = "USR_UID";
$tdataPROCESS_USER[".googleLikeFields"][] = "PU_TYPE";


$tdataPROCESS_USER[".advSearchFields"] = array();
$tdataPROCESS_USER[".advSearchFields"][] = "PU_UID";
$tdataPROCESS_USER[".advSearchFields"][] = "PRO_UID";
$tdataPROCESS_USER[".advSearchFields"][] = "USR_UID";
$tdataPROCESS_USER[".advSearchFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".tableType"] = "list";

$tdataPROCESS_USER[".printerPageOrientation"] = 0;
$tdataPROCESS_USER[".nPrinterPageScale"] = 100;

$tdataPROCESS_USER[".nPrinterSplitRecords"] = 40;

$tdataPROCESS_USER[".nPrinterPDFSplitRecords"] = 40;



$tdataPROCESS_USER[".geocodingEnabled"] = false;





$tdataPROCESS_USER[".listGridLayout"] = 3;


$tdataPROCESS_USER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPROCESS_USER[".pageSize"] = 20;

$tdataPROCESS_USER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPROCESS_USER[".strOrderBy"] = $tstrOrderBy;

$tdataPROCESS_USER[".orderindexes"] = array();

$tdataPROCESS_USER[".sqlHead"] = "SELECT PU_UID,  	PRO_UID,  	USR_UID,  	PU_TYPE";
$tdataPROCESS_USER[".sqlFrom"] = "FROM PROCESS_USER";
$tdataPROCESS_USER[".sqlWhereExpr"] = "";
$tdataPROCESS_USER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPROCESS_USER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPROCESS_USER[".arrGroupsPerPage"] = $arrGPP;

$tdataPROCESS_USER[".highlightSearchResults"] = true;

$tableKeysPROCESS_USER = array();
$tableKeysPROCESS_USER[] = "PU_UID";
$tdataPROCESS_USER[".Keys"] = $tableKeysPROCESS_USER;

$tdataPROCESS_USER[".listFields"] = array();
$tdataPROCESS_USER[".listFields"][] = "PU_UID";
$tdataPROCESS_USER[".listFields"][] = "PRO_UID";
$tdataPROCESS_USER[".listFields"][] = "USR_UID";
$tdataPROCESS_USER[".listFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".hideMobileList"] = array();


$tdataPROCESS_USER[".viewFields"] = array();
$tdataPROCESS_USER[".viewFields"][] = "PU_UID";
$tdataPROCESS_USER[".viewFields"][] = "PRO_UID";
$tdataPROCESS_USER[".viewFields"][] = "USR_UID";
$tdataPROCESS_USER[".viewFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".addFields"] = array();
$tdataPROCESS_USER[".addFields"][] = "PU_UID";
$tdataPROCESS_USER[".addFields"][] = "PRO_UID";
$tdataPROCESS_USER[".addFields"][] = "USR_UID";
$tdataPROCESS_USER[".addFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".masterListFields"] = array();
$tdataPROCESS_USER[".masterListFields"][] = "PU_UID";
$tdataPROCESS_USER[".masterListFields"][] = "PRO_UID";
$tdataPROCESS_USER[".masterListFields"][] = "USR_UID";
$tdataPROCESS_USER[".masterListFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".inlineAddFields"] = array();
$tdataPROCESS_USER[".inlineAddFields"][] = "PU_UID";
$tdataPROCESS_USER[".inlineAddFields"][] = "PRO_UID";
$tdataPROCESS_USER[".inlineAddFields"][] = "USR_UID";
$tdataPROCESS_USER[".inlineAddFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".editFields"] = array();
$tdataPROCESS_USER[".editFields"][] = "PU_UID";
$tdataPROCESS_USER[".editFields"][] = "PRO_UID";
$tdataPROCESS_USER[".editFields"][] = "USR_UID";
$tdataPROCESS_USER[".editFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".inlineEditFields"] = array();
$tdataPROCESS_USER[".inlineEditFields"][] = "PU_UID";
$tdataPROCESS_USER[".inlineEditFields"][] = "PRO_UID";
$tdataPROCESS_USER[".inlineEditFields"][] = "USR_UID";
$tdataPROCESS_USER[".inlineEditFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".updateSelectedFields"] = array();
$tdataPROCESS_USER[".updateSelectedFields"][] = "PU_UID";
$tdataPROCESS_USER[".updateSelectedFields"][] = "PRO_UID";
$tdataPROCESS_USER[".updateSelectedFields"][] = "USR_UID";
$tdataPROCESS_USER[".updateSelectedFields"][] = "PU_TYPE";


$tdataPROCESS_USER[".exportFields"] = array();
$tdataPROCESS_USER[".exportFields"][] = "PU_UID";
$tdataPROCESS_USER[".exportFields"][] = "PRO_UID";
$tdataPROCESS_USER[".exportFields"][] = "USR_UID";
$tdataPROCESS_USER[".exportFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".importFields"] = array();
$tdataPROCESS_USER[".importFields"][] = "PU_UID";
$tdataPROCESS_USER[".importFields"][] = "PRO_UID";
$tdataPROCESS_USER[".importFields"][] = "USR_UID";
$tdataPROCESS_USER[".importFields"][] = "PU_TYPE";

$tdataPROCESS_USER[".printFields"] = array();
$tdataPROCESS_USER[".printFields"][] = "PU_UID";
$tdataPROCESS_USER[".printFields"][] = "PRO_UID";
$tdataPROCESS_USER[".printFields"][] = "USR_UID";
$tdataPROCESS_USER[".printFields"][] = "PU_TYPE";

//	PU_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PU_UID";
	$fdata["GoodName"] = "PU_UID";
	$fdata["ownerTable"] = "PROCESS_USER";
	$fdata["Label"] = GetFieldLabel("PROCESS_USER","PU_UID");
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

		$fdata["strField"] = "PU_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PU_UID";

	
	
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




	$tdataPROCESS_USER["PU_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "PROCESS_USER";
	$fdata["Label"] = GetFieldLabel("PROCESS_USER","PRO_UID");
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




	$tdataPROCESS_USER["PRO_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "PROCESS_USER";
	$fdata["Label"] = GetFieldLabel("PROCESS_USER","USR_UID");
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




	$tdataPROCESS_USER["USR_UID"] = $fdata;
//	PU_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PU_TYPE";
	$fdata["GoodName"] = "PU_TYPE";
	$fdata["ownerTable"] = "PROCESS_USER";
	$fdata["Label"] = GetFieldLabel("PROCESS_USER","PU_TYPE");
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

		$fdata["strField"] = "PU_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PU_TYPE";

	
	
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




	$tdataPROCESS_USER["PU_TYPE"] = $fdata;


$tables_data["PROCESS_USER"]=&$tdataPROCESS_USER;
$field_labels["PROCESS_USER"] = &$fieldLabelsPROCESS_USER;
$fieldToolTips["PROCESS_USER"] = &$fieldToolTipsPROCESS_USER;
$placeHolders["PROCESS_USER"] = &$placeHoldersPROCESS_USER;
$page_titles["PROCESS_USER"] = &$pageTitlesPROCESS_USER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PROCESS_USER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PROCESS_USER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PROCESS_USER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PU_UID,  	PRO_UID,  	USR_UID,  	PU_TYPE";
$proto0["m_strFrom"] = "FROM PROCESS_USER";
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
	"m_strName" => "PU_UID",
	"m_strTable" => "PROCESS_USER",
	"m_srcTableName" => "PROCESS_USER"
));

$proto6["m_sql"] = "PU_UID";
$proto6["m_srcTableName"] = "PROCESS_USER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "PROCESS_USER",
	"m_srcTableName" => "PROCESS_USER"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "PROCESS_USER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "PROCESS_USER",
	"m_srcTableName" => "PROCESS_USER"
));

$proto10["m_sql"] = "USR_UID";
$proto10["m_srcTableName"] = "PROCESS_USER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PU_TYPE",
	"m_strTable" => "PROCESS_USER",
	"m_srcTableName" => "PROCESS_USER"
));

$proto12["m_sql"] = "PU_TYPE";
$proto12["m_srcTableName"] = "PROCESS_USER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "PROCESS_USER";
$proto15["m_srcTableName"] = "PROCESS_USER";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "PU_UID";
$proto15["m_columns"][] = "PRO_UID";
$proto15["m_columns"][] = "USR_UID";
$proto15["m_columns"][] = "PU_TYPE";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "PROCESS_USER";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "PROCESS_USER";
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
$proto0["m_srcTableName"]="PROCESS_USER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PROCESS_USER = createSqlQuery_PROCESS_USER();


	
						;

				

$tdataPROCESS_USER[".sqlquery"] = $queryData_PROCESS_USER;

$tableEvents["PROCESS_USER"] = new eventsBase;
$tdataPROCESS_USER[".hasEvents"] = false;

?>
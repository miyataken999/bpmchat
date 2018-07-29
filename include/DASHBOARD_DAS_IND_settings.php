<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDASHBOARD_DAS_IND = array();
	$tdataDASHBOARD_DAS_IND[".truncateText"] = true;
	$tdataDASHBOARD_DAS_IND[".NumberOfChars"] = 20;
	$tdataDASHBOARD_DAS_IND[".ShortName"] = "DASHBOARD_DAS_IND";
	$tdataDASHBOARD_DAS_IND[".OwnerID"] = "";
	$tdataDASHBOARD_DAS_IND[".OriginalTable"] = "DASHBOARD_DAS_IND";

//	field labels
$fieldLabelsDASHBOARD_DAS_IND = array();
$fieldToolTipsDASHBOARD_DAS_IND = array();
$pageTitlesDASHBOARD_DAS_IND = array();
$placeHoldersDASHBOARD_DAS_IND = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDASHBOARD_DAS_IND["Japanese"] = array();
	$fieldToolTipsDASHBOARD_DAS_IND["Japanese"] = array();
	$placeHoldersDASHBOARD_DAS_IND["Japanese"] = array();
	$pageTitlesDASHBOARD_DAS_IND["Japanese"] = array();
	$fieldLabelsDASHBOARD_DAS_IND["Japanese"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHBOARD_DAS_IND["Japanese"]["DAS_UID"] = "";
	$placeHoldersDASHBOARD_DAS_IND["Japanese"]["DAS_UID"] = "";
	$fieldLabelsDASHBOARD_DAS_IND["Japanese"]["OWNER_UID"] = "所有者UID";
	$fieldToolTipsDASHBOARD_DAS_IND["Japanese"]["OWNER_UID"] = "";
	$placeHoldersDASHBOARD_DAS_IND["Japanese"]["OWNER_UID"] = "";
	$fieldLabelsDASHBOARD_DAS_IND["Japanese"]["OWNER_TYPE"] = "所有者のタイプ";
	$fieldToolTipsDASHBOARD_DAS_IND["Japanese"]["OWNER_TYPE"] = "";
	$placeHoldersDASHBOARD_DAS_IND["Japanese"]["OWNER_TYPE"] = "";
	if (count($fieldToolTipsDASHBOARD_DAS_IND["Japanese"]))
		$tdataDASHBOARD_DAS_IND[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDASHBOARD_DAS_IND["English"] = array();
	$fieldToolTipsDASHBOARD_DAS_IND["English"] = array();
	$placeHoldersDASHBOARD_DAS_IND["English"] = array();
	$pageTitlesDASHBOARD_DAS_IND["English"] = array();
	$fieldLabelsDASHBOARD_DAS_IND["English"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHBOARD_DAS_IND["English"]["DAS_UID"] = "";
	$placeHoldersDASHBOARD_DAS_IND["English"]["DAS_UID"] = "";
	$fieldLabelsDASHBOARD_DAS_IND["English"]["OWNER_UID"] = "所有者UID";
	$fieldToolTipsDASHBOARD_DAS_IND["English"]["OWNER_UID"] = "";
	$placeHoldersDASHBOARD_DAS_IND["English"]["OWNER_UID"] = "";
	$fieldLabelsDASHBOARD_DAS_IND["English"]["OWNER_TYPE"] = "所有者のタイプ";
	$fieldToolTipsDASHBOARD_DAS_IND["English"]["OWNER_TYPE"] = "";
	$placeHoldersDASHBOARD_DAS_IND["English"]["OWNER_TYPE"] = "";
	if (count($fieldToolTipsDASHBOARD_DAS_IND["English"]))
		$tdataDASHBOARD_DAS_IND[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDASHBOARD_DAS_IND[""] = array();
	$fieldToolTipsDASHBOARD_DAS_IND[""] = array();
	$placeHoldersDASHBOARD_DAS_IND[""] = array();
	$pageTitlesDASHBOARD_DAS_IND[""] = array();
	if (count($fieldToolTipsDASHBOARD_DAS_IND[""]))
		$tdataDASHBOARD_DAS_IND[".isUseToolTips"] = true;
}


	$tdataDASHBOARD_DAS_IND[".NCSearch"] = true;



$tdataDASHBOARD_DAS_IND[".shortTableName"] = "DASHBOARD_DAS_IND";
$tdataDASHBOARD_DAS_IND[".nSecOptions"] = 0;
$tdataDASHBOARD_DAS_IND[".recsPerRowPrint"] = 1;
$tdataDASHBOARD_DAS_IND[".mainTableOwnerID"] = "";
$tdataDASHBOARD_DAS_IND[".moveNext"] = 0;
$tdataDASHBOARD_DAS_IND[".entityType"] = 0;

$tdataDASHBOARD_DAS_IND[".strOriginalTableName"] = "DASHBOARD_DAS_IND";

	



$tdataDASHBOARD_DAS_IND[".showAddInPopup"] = false;

$tdataDASHBOARD_DAS_IND[".showEditInPopup"] = false;

$tdataDASHBOARD_DAS_IND[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDASHBOARD_DAS_IND[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDASHBOARD_DAS_IND[".fieldsForRegister"] = array();
	
$tdataDASHBOARD_DAS_IND[".listAjax"] = false;

	$tdataDASHBOARD_DAS_IND[".audit"] = true;

	$tdataDASHBOARD_DAS_IND[".locking"] = false;

$tdataDASHBOARD_DAS_IND[".edit"] = true;
$tdataDASHBOARD_DAS_IND[".afterEditAction"] = 1;
$tdataDASHBOARD_DAS_IND[".closePopupAfterEdit"] = 1;
$tdataDASHBOARD_DAS_IND[".afterEditActionDetTable"] = "";

$tdataDASHBOARD_DAS_IND[".add"] = true;
$tdataDASHBOARD_DAS_IND[".afterAddAction"] = 1;
$tdataDASHBOARD_DAS_IND[".closePopupAfterAdd"] = 1;
$tdataDASHBOARD_DAS_IND[".afterAddActionDetTable"] = "";

$tdataDASHBOARD_DAS_IND[".list"] = true;



$tdataDASHBOARD_DAS_IND[".reorderRecordsByHeader"] = true;



$tdataDASHBOARD_DAS_IND[".view"] = true;

$tdataDASHBOARD_DAS_IND[".import"] = true;

$tdataDASHBOARD_DAS_IND[".exportTo"] = true;

$tdataDASHBOARD_DAS_IND[".printFriendly"] = true;

$tdataDASHBOARD_DAS_IND[".delete"] = true;

$tdataDASHBOARD_DAS_IND[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDASHBOARD_DAS_IND[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDASHBOARD_DAS_IND[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDASHBOARD_DAS_IND[".searchSaving"] = false;
//

$tdataDASHBOARD_DAS_IND[".showSearchPanel"] = true;
		$tdataDASHBOARD_DAS_IND[".flexibleSearch"] = true;

$tdataDASHBOARD_DAS_IND[".isUseAjaxSuggest"] = true;

$tdataDASHBOARD_DAS_IND[".rowHighlite"] = true;



																

$tdataDASHBOARD_DAS_IND[".ajaxCodeSnippetAdded"] = false;

$tdataDASHBOARD_DAS_IND[".buttonsAdded"] = false;

$tdataDASHBOARD_DAS_IND[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDASHBOARD_DAS_IND[".isUseTimeForSearch"] = false;



$tdataDASHBOARD_DAS_IND[".badgeColor"] = "3CB371";


$tdataDASHBOARD_DAS_IND[".allSearchFields"] = array();
$tdataDASHBOARD_DAS_IND[".filterFields"] = array();
$tdataDASHBOARD_DAS_IND[".requiredSearchFields"] = array();

$tdataDASHBOARD_DAS_IND[".allSearchFields"][] = "DAS_UID";
	$tdataDASHBOARD_DAS_IND[".allSearchFields"][] = "OWNER_UID";
	$tdataDASHBOARD_DAS_IND[".allSearchFields"][] = "OWNER_TYPE";
	

$tdataDASHBOARD_DAS_IND[".googleLikeFields"] = array();
$tdataDASHBOARD_DAS_IND[".googleLikeFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".googleLikeFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".googleLikeFields"][] = "OWNER_TYPE";


$tdataDASHBOARD_DAS_IND[".advSearchFields"] = array();
$tdataDASHBOARD_DAS_IND[".advSearchFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".advSearchFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".advSearchFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".tableType"] = "list";

$tdataDASHBOARD_DAS_IND[".printerPageOrientation"] = 0;
$tdataDASHBOARD_DAS_IND[".nPrinterPageScale"] = 100;

$tdataDASHBOARD_DAS_IND[".nPrinterSplitRecords"] = 40;

$tdataDASHBOARD_DAS_IND[".nPrinterPDFSplitRecords"] = 40;



$tdataDASHBOARD_DAS_IND[".geocodingEnabled"] = false;





$tdataDASHBOARD_DAS_IND[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataDASHBOARD_DAS_IND[".pageSize"] = 20;

$tdataDASHBOARD_DAS_IND[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDASHBOARD_DAS_IND[".strOrderBy"] = $tstrOrderBy;

$tdataDASHBOARD_DAS_IND[".orderindexes"] = array();

$tdataDASHBOARD_DAS_IND[".sqlHead"] = "SELECT DAS_UID,  	OWNER_UID,  	OWNER_TYPE";
$tdataDASHBOARD_DAS_IND[".sqlFrom"] = "FROM DASHBOARD_DAS_IND";
$tdataDASHBOARD_DAS_IND[".sqlWhereExpr"] = "";
$tdataDASHBOARD_DAS_IND[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDASHBOARD_DAS_IND[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDASHBOARD_DAS_IND[".arrGroupsPerPage"] = $arrGPP;

$tdataDASHBOARD_DAS_IND[".highlightSearchResults"] = true;

$tableKeysDASHBOARD_DAS_IND = array();
$tableKeysDASHBOARD_DAS_IND[] = "DAS_UID";
$tableKeysDASHBOARD_DAS_IND[] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".Keys"] = $tableKeysDASHBOARD_DAS_IND;

$tdataDASHBOARD_DAS_IND[".listFields"] = array();
$tdataDASHBOARD_DAS_IND[".listFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".listFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".listFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".hideMobileList"] = array();


$tdataDASHBOARD_DAS_IND[".viewFields"] = array();
$tdataDASHBOARD_DAS_IND[".viewFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".viewFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".viewFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".addFields"] = array();
$tdataDASHBOARD_DAS_IND[".addFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".addFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".addFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".masterListFields"] = array();
$tdataDASHBOARD_DAS_IND[".masterListFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".masterListFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".masterListFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".inlineAddFields"] = array();
$tdataDASHBOARD_DAS_IND[".inlineAddFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".inlineAddFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".inlineAddFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".editFields"] = array();
$tdataDASHBOARD_DAS_IND[".editFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".editFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".editFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".inlineEditFields"] = array();
$tdataDASHBOARD_DAS_IND[".inlineEditFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".inlineEditFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".inlineEditFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".updateSelectedFields"] = array();
$tdataDASHBOARD_DAS_IND[".updateSelectedFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".updateSelectedFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".updateSelectedFields"][] = "OWNER_TYPE";


$tdataDASHBOARD_DAS_IND[".exportFields"] = array();
$tdataDASHBOARD_DAS_IND[".exportFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".exportFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".exportFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".importFields"] = array();
$tdataDASHBOARD_DAS_IND[".importFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".importFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".importFields"][] = "OWNER_TYPE";

$tdataDASHBOARD_DAS_IND[".printFields"] = array();
$tdataDASHBOARD_DAS_IND[".printFields"][] = "DAS_UID";
$tdataDASHBOARD_DAS_IND[".printFields"][] = "OWNER_UID";
$tdataDASHBOARD_DAS_IND[".printFields"][] = "OWNER_TYPE";

//	DAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DAS_UID";
	$fdata["GoodName"] = "DAS_UID";
	$fdata["ownerTable"] = "DASHBOARD_DAS_IND";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_DAS_IND","DAS_UID");
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

		$fdata["strField"] = "DAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_UID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Dashboard";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DAS_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "DAS_UID";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_DAS_IND["DAS_UID"] = $fdata;
//	OWNER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OWNER_UID";
	$fdata["GoodName"] = "OWNER_UID";
	$fdata["ownerTable"] = "DASHBOARD_DAS_IND";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_DAS_IND","OWNER_UID");
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

		$fdata["strField"] = "OWNER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OWNER_UID";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_DAS_IND["OWNER_UID"] = $fdata;
//	OWNER_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OWNER_TYPE";
	$fdata["GoodName"] = "OWNER_TYPE";
	$fdata["ownerTable"] = "DASHBOARD_DAS_IND";
	$fdata["Label"] = GetFieldLabel("DASHBOARD_DAS_IND","OWNER_TYPE");
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

		$fdata["strField"] = "OWNER_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OWNER_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD_DAS_IND["OWNER_TYPE"] = $fdata;


$tables_data["DASHBOARD_DAS_IND"]=&$tdataDASHBOARD_DAS_IND;
$field_labels["DASHBOARD_DAS_IND"] = &$fieldLabelsDASHBOARD_DAS_IND;
$fieldToolTips["DASHBOARD_DAS_IND"] = &$fieldToolTipsDASHBOARD_DAS_IND;
$placeHolders["DASHBOARD_DAS_IND"] = &$placeHoldersDASHBOARD_DAS_IND;
$page_titles["DASHBOARD_DAS_IND"] = &$pageTitlesDASHBOARD_DAS_IND;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DASHBOARD_DAS_IND"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DASHBOARD_DAS_IND"] = array();


	
				$strOriginalDetailsTable="DASHBOARD";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="DASHBOARD1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "DASHBOARD1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["DASHBOARD_DAS_IND"][0] = $masterParams;
				$masterTablesData["DASHBOARD_DAS_IND"][0]["masterKeys"] = array();
	$masterTablesData["DASHBOARD_DAS_IND"][0]["masterKeys"][]="DAS_UID";
				$masterTablesData["DASHBOARD_DAS_IND"][0]["detailKeys"] = array();
	$masterTablesData["DASHBOARD_DAS_IND"][0]["detailKeys"][]="DAS_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DASHBOARD_DAS_IND()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DAS_UID,  	OWNER_UID,  	OWNER_TYPE";
$proto0["m_strFrom"] = "FROM DASHBOARD_DAS_IND";
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
	"m_strName" => "DAS_UID",
	"m_strTable" => "DASHBOARD_DAS_IND",
	"m_srcTableName" => "DASHBOARD_DAS_IND"
));

$proto6["m_sql"] = "DAS_UID";
$proto6["m_srcTableName"] = "DASHBOARD_DAS_IND";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OWNER_UID",
	"m_strTable" => "DASHBOARD_DAS_IND",
	"m_srcTableName" => "DASHBOARD_DAS_IND"
));

$proto8["m_sql"] = "OWNER_UID";
$proto8["m_srcTableName"] = "DASHBOARD_DAS_IND";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OWNER_TYPE",
	"m_strTable" => "DASHBOARD_DAS_IND",
	"m_srcTableName" => "DASHBOARD_DAS_IND"
));

$proto10["m_sql"] = "OWNER_TYPE";
$proto10["m_srcTableName"] = "DASHBOARD_DAS_IND";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "DASHBOARD_DAS_IND";
$proto13["m_srcTableName"] = "DASHBOARD_DAS_IND";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "DAS_UID";
$proto13["m_columns"][] = "OWNER_UID";
$proto13["m_columns"][] = "OWNER_TYPE";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "DASHBOARD_DAS_IND";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "DASHBOARD_DAS_IND";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DASHBOARD_DAS_IND";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DASHBOARD_DAS_IND = createSqlQuery_DASHBOARD_DAS_IND();


	
						;

			

$tdataDASHBOARD_DAS_IND[".sqlquery"] = $queryData_DASHBOARD_DAS_IND;

$tableEvents["DASHBOARD_DAS_IND"] = new eventsBase;
$tdataDASHBOARD_DAS_IND[".hasEvents"] = false;

?>
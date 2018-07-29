<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDASHBOARD1 = array();
	$tdataDASHBOARD1[".truncateText"] = true;
	$tdataDASHBOARD1[".NumberOfChars"] = 20;
	$tdataDASHBOARD1[".ShortName"] = "DASHBOARD1";
	$tdataDASHBOARD1[".OwnerID"] = "";
	$tdataDASHBOARD1[".OriginalTable"] = "DASHBOARD";

//	field labels
$fieldLabelsDASHBOARD1 = array();
$fieldToolTipsDASHBOARD1 = array();
$pageTitlesDASHBOARD1 = array();
$placeHoldersDASHBOARD1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDASHBOARD1["Japanese"] = array();
	$fieldToolTipsDASHBOARD1["Japanese"] = array();
	$placeHoldersDASHBOARD1["Japanese"] = array();
	$pageTitlesDASHBOARD1["Japanese"] = array();
	$fieldLabelsDASHBOARD1["Japanese"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHBOARD1["Japanese"]["DAS_UID"] = "";
	$placeHoldersDASHBOARD1["Japanese"]["DAS_UID"] = "";
	$fieldLabelsDASHBOARD1["Japanese"]["DAS_TITLE"] = "ダスタイトル";
	$fieldToolTipsDASHBOARD1["Japanese"]["DAS_TITLE"] = "";
	$placeHoldersDASHBOARD1["Japanese"]["DAS_TITLE"] = "";
	$fieldLabelsDASHBOARD1["Japanese"]["DAS_DESCRIPTION"] = "ダスの説明";
	$fieldToolTipsDASHBOARD1["Japanese"]["DAS_DESCRIPTION"] = "";
	$placeHoldersDASHBOARD1["Japanese"]["DAS_DESCRIPTION"] = "";
	$fieldLabelsDASHBOARD1["Japanese"]["DAS_CREATE_DATE"] = "ダスは、日付を作成します";
	$fieldToolTipsDASHBOARD1["Japanese"]["DAS_CREATE_DATE"] = "";
	$placeHoldersDASHBOARD1["Japanese"]["DAS_CREATE_DATE"] = "";
	$fieldLabelsDASHBOARD1["Japanese"]["DAS_UPDATE_DATE"] = "DASの更新日";
	$fieldToolTipsDASHBOARD1["Japanese"]["DAS_UPDATE_DATE"] = "";
	$placeHoldersDASHBOARD1["Japanese"]["DAS_UPDATE_DATE"] = "";
	$fieldLabelsDASHBOARD1["Japanese"]["DAS_STATUS"] = "ダスステータス";
	$fieldToolTipsDASHBOARD1["Japanese"]["DAS_STATUS"] = "";
	$placeHoldersDASHBOARD1["Japanese"]["DAS_STATUS"] = "";
	if (count($fieldToolTipsDASHBOARD1["Japanese"]))
		$tdataDASHBOARD1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDASHBOARD1["English"] = array();
	$fieldToolTipsDASHBOARD1["English"] = array();
	$placeHoldersDASHBOARD1["English"] = array();
	$pageTitlesDASHBOARD1["English"] = array();
	$fieldLabelsDASHBOARD1["English"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHBOARD1["English"]["DAS_UID"] = "";
	$placeHoldersDASHBOARD1["English"]["DAS_UID"] = "";
	$fieldLabelsDASHBOARD1["English"]["DAS_TITLE"] = "ダスタイトル";
	$fieldToolTipsDASHBOARD1["English"]["DAS_TITLE"] = "";
	$placeHoldersDASHBOARD1["English"]["DAS_TITLE"] = "";
	$fieldLabelsDASHBOARD1["English"]["DAS_DESCRIPTION"] = "ダスの説明";
	$fieldToolTipsDASHBOARD1["English"]["DAS_DESCRIPTION"] = "";
	$placeHoldersDASHBOARD1["English"]["DAS_DESCRIPTION"] = "";
	$fieldLabelsDASHBOARD1["English"]["DAS_CREATE_DATE"] = "ダスは、日付を作成します";
	$fieldToolTipsDASHBOARD1["English"]["DAS_CREATE_DATE"] = "";
	$placeHoldersDASHBOARD1["English"]["DAS_CREATE_DATE"] = "";
	$fieldLabelsDASHBOARD1["English"]["DAS_UPDATE_DATE"] = "DASの更新日";
	$fieldToolTipsDASHBOARD1["English"]["DAS_UPDATE_DATE"] = "";
	$placeHoldersDASHBOARD1["English"]["DAS_UPDATE_DATE"] = "";
	$fieldLabelsDASHBOARD1["English"]["DAS_STATUS"] = "ダスステータス";
	$fieldToolTipsDASHBOARD1["English"]["DAS_STATUS"] = "";
	$placeHoldersDASHBOARD1["English"]["DAS_STATUS"] = "";
	if (count($fieldToolTipsDASHBOARD1["English"]))
		$tdataDASHBOARD1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDASHBOARD1[""] = array();
	$fieldToolTipsDASHBOARD1[""] = array();
	$placeHoldersDASHBOARD1[""] = array();
	$pageTitlesDASHBOARD1[""] = array();
	if (count($fieldToolTipsDASHBOARD1[""]))
		$tdataDASHBOARD1[".isUseToolTips"] = true;
}


	$tdataDASHBOARD1[".NCSearch"] = true;



$tdataDASHBOARD1[".shortTableName"] = "DASHBOARD1";
$tdataDASHBOARD1[".nSecOptions"] = 0;
$tdataDASHBOARD1[".recsPerRowPrint"] = 1;
$tdataDASHBOARD1[".mainTableOwnerID"] = "";
$tdataDASHBOARD1[".moveNext"] = 0;
$tdataDASHBOARD1[".entityType"] = 0;

$tdataDASHBOARD1[".strOriginalTableName"] = "DASHBOARD";

	



$tdataDASHBOARD1[".showAddInPopup"] = false;

$tdataDASHBOARD1[".showEditInPopup"] = false;

$tdataDASHBOARD1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDASHBOARD1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDASHBOARD1[".fieldsForRegister"] = array();
	
$tdataDASHBOARD1[".listAjax"] = false;

	$tdataDASHBOARD1[".audit"] = true;

	$tdataDASHBOARD1[".locking"] = false;

$tdataDASHBOARD1[".edit"] = true;
$tdataDASHBOARD1[".afterEditAction"] = 1;
$tdataDASHBOARD1[".closePopupAfterEdit"] = 1;
$tdataDASHBOARD1[".afterEditActionDetTable"] = "";

$tdataDASHBOARD1[".add"] = true;
$tdataDASHBOARD1[".afterAddAction"] = 1;
$tdataDASHBOARD1[".closePopupAfterAdd"] = 1;
$tdataDASHBOARD1[".afterAddActionDetTable"] = "";

$tdataDASHBOARD1[".list"] = true;



$tdataDASHBOARD1[".reorderRecordsByHeader"] = true;



$tdataDASHBOARD1[".view"] = true;

$tdataDASHBOARD1[".import"] = true;

$tdataDASHBOARD1[".exportTo"] = true;

$tdataDASHBOARD1[".printFriendly"] = true;

$tdataDASHBOARD1[".delete"] = true;

$tdataDASHBOARD1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDASHBOARD1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDASHBOARD1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDASHBOARD1[".searchSaving"] = false;
//

$tdataDASHBOARD1[".showSearchPanel"] = true;
		$tdataDASHBOARD1[".flexibleSearch"] = true;

$tdataDASHBOARD1[".isUseAjaxSuggest"] = true;

$tdataDASHBOARD1[".rowHighlite"] = true;



				

$tdataDASHBOARD1[".ajaxCodeSnippetAdded"] = false;

$tdataDASHBOARD1[".buttonsAdded"] = false;

$tdataDASHBOARD1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDASHBOARD1[".isUseTimeForSearch"] = false;





$tdataDASHBOARD1[".allSearchFields"] = array();
$tdataDASHBOARD1[".filterFields"] = array();
$tdataDASHBOARD1[".requiredSearchFields"] = array();

$tdataDASHBOARD1[".allSearchFields"][] = "DAS_UID";
	$tdataDASHBOARD1[".allSearchFields"][] = "DAS_TITLE";
	$tdataDASHBOARD1[".allSearchFields"][] = "DAS_DESCRIPTION";
	$tdataDASHBOARD1[".allSearchFields"][] = "DAS_CREATE_DATE";
	$tdataDASHBOARD1[".allSearchFields"][] = "DAS_UPDATE_DATE";
	$tdataDASHBOARD1[".allSearchFields"][] = "DAS_STATUS";
	

$tdataDASHBOARD1[".googleLikeFields"] = array();
$tdataDASHBOARD1[".googleLikeFields"][] = "DAS_UID";
$tdataDASHBOARD1[".googleLikeFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".googleLikeFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".googleLikeFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".googleLikeFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".googleLikeFields"][] = "DAS_STATUS";


$tdataDASHBOARD1[".advSearchFields"] = array();
$tdataDASHBOARD1[".advSearchFields"][] = "DAS_UID";
$tdataDASHBOARD1[".advSearchFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".advSearchFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".advSearchFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".advSearchFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".advSearchFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".tableType"] = "list";

$tdataDASHBOARD1[".printerPageOrientation"] = 0;
$tdataDASHBOARD1[".nPrinterPageScale"] = 100;

$tdataDASHBOARD1[".nPrinterSplitRecords"] = 40;

$tdataDASHBOARD1[".nPrinterPDFSplitRecords"] = 40;



$tdataDASHBOARD1[".geocodingEnabled"] = false;





$tdataDASHBOARD1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataDASHBOARD1[".pageSize"] = 20;

$tdataDASHBOARD1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDASHBOARD1[".strOrderBy"] = $tstrOrderBy;

$tdataDASHBOARD1[".orderindexes"] = array();

$tdataDASHBOARD1[".sqlHead"] = "SELECT DAS_UID,  	DAS_TITLE,  	DAS_DESCRIPTION,  	DAS_CREATE_DATE,  	DAS_UPDATE_DATE,  	DAS_STATUS";
$tdataDASHBOARD1[".sqlFrom"] = "FROM DASHBOARD";
$tdataDASHBOARD1[".sqlWhereExpr"] = "";
$tdataDASHBOARD1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDASHBOARD1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDASHBOARD1[".arrGroupsPerPage"] = $arrGPP;

$tdataDASHBOARD1[".highlightSearchResults"] = true;

$tableKeysDASHBOARD1 = array();
$tableKeysDASHBOARD1[] = "DAS_UID";
$tdataDASHBOARD1[".Keys"] = $tableKeysDASHBOARD1;

$tdataDASHBOARD1[".listFields"] = array();
$tdataDASHBOARD1[".listFields"][] = "DAS_UID";
$tdataDASHBOARD1[".listFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".listFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".listFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".listFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".listFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".hideMobileList"] = array();


$tdataDASHBOARD1[".viewFields"] = array();
$tdataDASHBOARD1[".viewFields"][] = "DAS_UID";
$tdataDASHBOARD1[".viewFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".viewFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".viewFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".viewFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".viewFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".addFields"] = array();
$tdataDASHBOARD1[".addFields"][] = "DAS_UID";
$tdataDASHBOARD1[".addFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".addFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".addFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".addFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".addFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".masterListFields"] = array();
$tdataDASHBOARD1[".masterListFields"][] = "DAS_UID";
$tdataDASHBOARD1[".masterListFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".masterListFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".masterListFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".masterListFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".masterListFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".inlineAddFields"] = array();

$tdataDASHBOARD1[".editFields"] = array();
$tdataDASHBOARD1[".editFields"][] = "DAS_UID";
$tdataDASHBOARD1[".editFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".editFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".editFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".editFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".editFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".inlineEditFields"] = array();

$tdataDASHBOARD1[".updateSelectedFields"] = array();
$tdataDASHBOARD1[".updateSelectedFields"][] = "DAS_UID";
$tdataDASHBOARD1[".updateSelectedFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".updateSelectedFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".updateSelectedFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".updateSelectedFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".updateSelectedFields"][] = "DAS_STATUS";


$tdataDASHBOARD1[".exportFields"] = array();
$tdataDASHBOARD1[".exportFields"][] = "DAS_UID";
$tdataDASHBOARD1[".exportFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".exportFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".exportFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".exportFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".exportFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".importFields"] = array();
$tdataDASHBOARD1[".importFields"][] = "DAS_UID";
$tdataDASHBOARD1[".importFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".importFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".importFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".importFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".importFields"][] = "DAS_STATUS";

$tdataDASHBOARD1[".printFields"] = array();
$tdataDASHBOARD1[".printFields"][] = "DAS_UID";
$tdataDASHBOARD1[".printFields"][] = "DAS_TITLE";
$tdataDASHBOARD1[".printFields"][] = "DAS_DESCRIPTION";
$tdataDASHBOARD1[".printFields"][] = "DAS_CREATE_DATE";
$tdataDASHBOARD1[".printFields"][] = "DAS_UPDATE_DATE";
$tdataDASHBOARD1[".printFields"][] = "DAS_STATUS";

//	DAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DAS_UID";
	$fdata["GoodName"] = "DAS_UID";
	$fdata["ownerTable"] = "DASHBOARD";
	$fdata["Label"] = GetFieldLabel("DASHBOARD1","DAS_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataDASHBOARD1["DAS_UID"] = $fdata;
//	DAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DAS_TITLE";
	$fdata["GoodName"] = "DAS_TITLE";
	$fdata["ownerTable"] = "DASHBOARD";
	$fdata["Label"] = GetFieldLabel("DASHBOARD1","DAS_TITLE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_TITLE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD1["DAS_TITLE"] = $fdata;
//	DAS_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DAS_DESCRIPTION";
	$fdata["GoodName"] = "DAS_DESCRIPTION";
	$fdata["ownerTable"] = "DASHBOARD";
	$fdata["Label"] = GetFieldLabel("DASHBOARD1","DAS_DESCRIPTION");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_DESCRIPTION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDASHBOARD1["DAS_DESCRIPTION"] = $fdata;
//	DAS_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DAS_CREATE_DATE";
	$fdata["GoodName"] = "DAS_CREATE_DATE";
	$fdata["ownerTable"] = "DASHBOARD";
	$fdata["Label"] = GetFieldLabel("DASHBOARD1","DAS_CREATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_CREATE_DATE";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataDASHBOARD1["DAS_CREATE_DATE"] = $fdata;
//	DAS_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DAS_UPDATE_DATE";
	$fdata["GoodName"] = "DAS_UPDATE_DATE";
	$fdata["ownerTable"] = "DASHBOARD";
	$fdata["Label"] = GetFieldLabel("DASHBOARD1","DAS_UPDATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_UPDATE_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataDASHBOARD1["DAS_UPDATE_DATE"] = $fdata;
//	DAS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DAS_STATUS";
	$fdata["GoodName"] = "DAS_STATUS";
	$fdata["ownerTable"] = "DASHBOARD";
	$fdata["Label"] = GetFieldLabel("DASHBOARD1","DAS_STATUS");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_STATUS";

	
	
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




	$tdataDASHBOARD1["DAS_STATUS"] = $fdata;


$tables_data["DASHBOARD1"]=&$tdataDASHBOARD1;
$field_labels["DASHBOARD1"] = &$fieldLabelsDASHBOARD1;
$fieldToolTips["DASHBOARD1"] = &$fieldToolTipsDASHBOARD1;
$placeHolders["DASHBOARD1"] = &$placeHoldersDASHBOARD1;
$page_titles["DASHBOARD1"] = &$pageTitlesDASHBOARD1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DASHBOARD1"] = array();
//	DASHBOARD_DAS_IND
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="DASHBOARD_DAS_IND";
		$detailsParam["dOriginalTable"] = "DASHBOARD_DAS_IND";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "DASHBOARD_DAS_IND";
	$detailsParam["dCaptionTable"] = GetTableCaption("DASHBOARD_DAS_IND");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["DASHBOARD1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["DASHBOARD1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["DASHBOARD1"][$dIndex]["masterKeys"][]="DAS_UID";

				$detailsTablesData["DASHBOARD1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["DASHBOARD1"][$dIndex]["detailKeys"][]="DAS_UID";
//	DASHBOARD_INDICATOR
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="DASHBOARD_INDICATOR";
		$detailsParam["dOriginalTable"] = "DASHBOARD_INDICATOR";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "DASHBOARD_INDICATOR";
	$detailsParam["dCaptionTable"] = GetTableCaption("DASHBOARD_INDICATOR");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["DASHBOARD1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["DASHBOARD1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["DASHBOARD1"][$dIndex]["masterKeys"][]="DAS_UID";

				$detailsTablesData["DASHBOARD1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["DASHBOARD1"][$dIndex]["detailKeys"][]="DAS_UID";

// tables which are master tables for current table (detail)
$masterTablesData["DASHBOARD1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DASHBOARD1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DAS_UID,  	DAS_TITLE,  	DAS_DESCRIPTION,  	DAS_CREATE_DATE,  	DAS_UPDATE_DATE,  	DAS_STATUS";
$proto0["m_strFrom"] = "FROM DASHBOARD";
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
	"m_strTable" => "DASHBOARD",
	"m_srcTableName" => "DASHBOARD1"
));

$proto6["m_sql"] = "DAS_UID";
$proto6["m_srcTableName"] = "DASHBOARD1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_TITLE",
	"m_strTable" => "DASHBOARD",
	"m_srcTableName" => "DASHBOARD1"
));

$proto8["m_sql"] = "DAS_TITLE";
$proto8["m_srcTableName"] = "DASHBOARD1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_DESCRIPTION",
	"m_strTable" => "DASHBOARD",
	"m_srcTableName" => "DASHBOARD1"
));

$proto10["m_sql"] = "DAS_DESCRIPTION";
$proto10["m_srcTableName"] = "DASHBOARD1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_CREATE_DATE",
	"m_strTable" => "DASHBOARD",
	"m_srcTableName" => "DASHBOARD1"
));

$proto12["m_sql"] = "DAS_CREATE_DATE";
$proto12["m_srcTableName"] = "DASHBOARD1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_UPDATE_DATE",
	"m_strTable" => "DASHBOARD",
	"m_srcTableName" => "DASHBOARD1"
));

$proto14["m_sql"] = "DAS_UPDATE_DATE";
$proto14["m_srcTableName"] = "DASHBOARD1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_STATUS",
	"m_strTable" => "DASHBOARD",
	"m_srcTableName" => "DASHBOARD1"
));

$proto16["m_sql"] = "DAS_STATUS";
$proto16["m_srcTableName"] = "DASHBOARD1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "DASHBOARD";
$proto19["m_srcTableName"] = "DASHBOARD1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "DAS_UID";
$proto19["m_columns"][] = "DAS_TITLE";
$proto19["m_columns"][] = "DAS_DESCRIPTION";
$proto19["m_columns"][] = "DAS_CREATE_DATE";
$proto19["m_columns"][] = "DAS_UPDATE_DATE";
$proto19["m_columns"][] = "DAS_STATUS";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "DASHBOARD";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "DASHBOARD1";
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
$proto0["m_srcTableName"]="DASHBOARD1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DASHBOARD1 = createSqlQuery_DASHBOARD1();


	
						;

						

$tdataDASHBOARD1[".sqlquery"] = $queryData_DASHBOARD1;

$tableEvents["DASHBOARD1"] = new eventsBase;
$tdataDASHBOARD1[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDASHLET = array();
	$tdataDASHLET[".truncateText"] = true;
	$tdataDASHLET[".NumberOfChars"] = 20;
	$tdataDASHLET[".ShortName"] = "DASHLET";
	$tdataDASHLET[".OwnerID"] = "";
	$tdataDASHLET[".OriginalTable"] = "DASHLET";

//	field labels
$fieldLabelsDASHLET = array();
$fieldToolTipsDASHLET = array();
$pageTitlesDASHLET = array();
$placeHoldersDASHLET = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDASHLET["Japanese"] = array();
	$fieldToolTipsDASHLET["Japanese"] = array();
	$placeHoldersDASHLET["Japanese"] = array();
	$pageTitlesDASHLET["Japanese"] = array();
	$fieldLabelsDASHLET["Japanese"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHLET["Japanese"]["DAS_UID"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_UID"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_CLASS"] = "ダスクラス";
	$fieldToolTipsDASHLET["Japanese"]["DAS_CLASS"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_CLASS"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_TITLE"] = "ダスタイトル";
	$fieldToolTipsDASHLET["Japanese"]["DAS_TITLE"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_TITLE"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_DESCRIPTION"] = "ダスの説明";
	$fieldToolTipsDASHLET["Japanese"]["DAS_DESCRIPTION"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_DESCRIPTION"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_VERSION"] = "ダスバージョン";
	$fieldToolTipsDASHLET["Japanese"]["DAS_VERSION"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_VERSION"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_CREATE_DATE"] = "ダスは、日付を作成します";
	$fieldToolTipsDASHLET["Japanese"]["DAS_CREATE_DATE"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_CREATE_DATE"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_UPDATE_DATE"] = "DASの更新日";
	$fieldToolTipsDASHLET["Japanese"]["DAS_UPDATE_DATE"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_UPDATE_DATE"] = "";
	$fieldLabelsDASHLET["Japanese"]["DAS_STATUS"] = "ダスステータス";
	$fieldToolTipsDASHLET["Japanese"]["DAS_STATUS"] = "";
	$placeHoldersDASHLET["Japanese"]["DAS_STATUS"] = "";
	if (count($fieldToolTipsDASHLET["Japanese"]))
		$tdataDASHLET[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDASHLET["English"] = array();
	$fieldToolTipsDASHLET["English"] = array();
	$placeHoldersDASHLET["English"] = array();
	$pageTitlesDASHLET["English"] = array();
	$fieldLabelsDASHLET["English"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHLET["English"]["DAS_UID"] = "";
	$placeHoldersDASHLET["English"]["DAS_UID"] = "";
	$fieldLabelsDASHLET["English"]["DAS_CLASS"] = "ダスクラス";
	$fieldToolTipsDASHLET["English"]["DAS_CLASS"] = "";
	$placeHoldersDASHLET["English"]["DAS_CLASS"] = "";
	$fieldLabelsDASHLET["English"]["DAS_TITLE"] = "ダスタイトル";
	$fieldToolTipsDASHLET["English"]["DAS_TITLE"] = "";
	$placeHoldersDASHLET["English"]["DAS_TITLE"] = "";
	$fieldLabelsDASHLET["English"]["DAS_DESCRIPTION"] = "ダスの説明";
	$fieldToolTipsDASHLET["English"]["DAS_DESCRIPTION"] = "";
	$placeHoldersDASHLET["English"]["DAS_DESCRIPTION"] = "";
	$fieldLabelsDASHLET["English"]["DAS_VERSION"] = "ダスバージョン";
	$fieldToolTipsDASHLET["English"]["DAS_VERSION"] = "";
	$placeHoldersDASHLET["English"]["DAS_VERSION"] = "";
	$fieldLabelsDASHLET["English"]["DAS_CREATE_DATE"] = "ダスは、日付を作成します";
	$fieldToolTipsDASHLET["English"]["DAS_CREATE_DATE"] = "";
	$placeHoldersDASHLET["English"]["DAS_CREATE_DATE"] = "";
	$fieldLabelsDASHLET["English"]["DAS_UPDATE_DATE"] = "DASの更新日";
	$fieldToolTipsDASHLET["English"]["DAS_UPDATE_DATE"] = "";
	$placeHoldersDASHLET["English"]["DAS_UPDATE_DATE"] = "";
	$fieldLabelsDASHLET["English"]["DAS_STATUS"] = "ダスステータス";
	$fieldToolTipsDASHLET["English"]["DAS_STATUS"] = "";
	$placeHoldersDASHLET["English"]["DAS_STATUS"] = "";
	if (count($fieldToolTipsDASHLET["English"]))
		$tdataDASHLET[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDASHLET[""] = array();
	$fieldToolTipsDASHLET[""] = array();
	$placeHoldersDASHLET[""] = array();
	$pageTitlesDASHLET[""] = array();
	if (count($fieldToolTipsDASHLET[""]))
		$tdataDASHLET[".isUseToolTips"] = true;
}


	$tdataDASHLET[".NCSearch"] = true;



$tdataDASHLET[".shortTableName"] = "DASHLET";
$tdataDASHLET[".nSecOptions"] = 0;
$tdataDASHLET[".recsPerRowPrint"] = 1;
$tdataDASHLET[".mainTableOwnerID"] = "";
$tdataDASHLET[".moveNext"] = 0;
$tdataDASHLET[".entityType"] = 0;

$tdataDASHLET[".strOriginalTableName"] = "DASHLET";

	



$tdataDASHLET[".showAddInPopup"] = false;

$tdataDASHLET[".showEditInPopup"] = false;

$tdataDASHLET[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDASHLET[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDASHLET[".fieldsForRegister"] = array();
	
$tdataDASHLET[".listAjax"] = false;

	$tdataDASHLET[".audit"] = true;

	$tdataDASHLET[".locking"] = false;

$tdataDASHLET[".edit"] = true;
$tdataDASHLET[".afterEditAction"] = 1;
$tdataDASHLET[".closePopupAfterEdit"] = 1;
$tdataDASHLET[".afterEditActionDetTable"] = "";

$tdataDASHLET[".add"] = true;
$tdataDASHLET[".afterAddAction"] = 1;
$tdataDASHLET[".closePopupAfterAdd"] = 1;
$tdataDASHLET[".afterAddActionDetTable"] = "";

$tdataDASHLET[".list"] = true;



$tdataDASHLET[".reorderRecordsByHeader"] = true;



$tdataDASHLET[".view"] = true;

$tdataDASHLET[".import"] = true;

$tdataDASHLET[".exportTo"] = true;

$tdataDASHLET[".printFriendly"] = true;

$tdataDASHLET[".delete"] = true;

$tdataDASHLET[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDASHLET[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDASHLET[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDASHLET[".searchSaving"] = false;
//

$tdataDASHLET[".showSearchPanel"] = true;
		$tdataDASHLET[".flexibleSearch"] = true;

$tdataDASHLET[".isUseAjaxSuggest"] = true;

$tdataDASHLET[".rowHighlite"] = true;



				

$tdataDASHLET[".ajaxCodeSnippetAdded"] = false;

$tdataDASHLET[".buttonsAdded"] = false;

$tdataDASHLET[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDASHLET[".isUseTimeForSearch"] = false;





$tdataDASHLET[".allSearchFields"] = array();
$tdataDASHLET[".filterFields"] = array();
$tdataDASHLET[".requiredSearchFields"] = array();

$tdataDASHLET[".allSearchFields"][] = "DAS_UID";
	$tdataDASHLET[".allSearchFields"][] = "DAS_CLASS";
	$tdataDASHLET[".allSearchFields"][] = "DAS_TITLE";
	$tdataDASHLET[".allSearchFields"][] = "DAS_DESCRIPTION";
	$tdataDASHLET[".allSearchFields"][] = "DAS_VERSION";
	$tdataDASHLET[".allSearchFields"][] = "DAS_CREATE_DATE";
	$tdataDASHLET[".allSearchFields"][] = "DAS_UPDATE_DATE";
	$tdataDASHLET[".allSearchFields"][] = "DAS_STATUS";
	

$tdataDASHLET[".googleLikeFields"] = array();
$tdataDASHLET[".googleLikeFields"][] = "DAS_UID";
$tdataDASHLET[".googleLikeFields"][] = "DAS_CLASS";
$tdataDASHLET[".googleLikeFields"][] = "DAS_TITLE";
$tdataDASHLET[".googleLikeFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".googleLikeFields"][] = "DAS_VERSION";
$tdataDASHLET[".googleLikeFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".googleLikeFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".googleLikeFields"][] = "DAS_STATUS";


$tdataDASHLET[".advSearchFields"] = array();
$tdataDASHLET[".advSearchFields"][] = "DAS_UID";
$tdataDASHLET[".advSearchFields"][] = "DAS_CLASS";
$tdataDASHLET[".advSearchFields"][] = "DAS_TITLE";
$tdataDASHLET[".advSearchFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".advSearchFields"][] = "DAS_VERSION";
$tdataDASHLET[".advSearchFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".advSearchFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".advSearchFields"][] = "DAS_STATUS";

$tdataDASHLET[".tableType"] = "list";

$tdataDASHLET[".printerPageOrientation"] = 0;
$tdataDASHLET[".nPrinterPageScale"] = 100;

$tdataDASHLET[".nPrinterSplitRecords"] = 40;

$tdataDASHLET[".nPrinterPDFSplitRecords"] = 40;



$tdataDASHLET[".geocodingEnabled"] = false;





$tdataDASHLET[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataDASHLET[".pageSize"] = 20;

$tdataDASHLET[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDASHLET[".strOrderBy"] = $tstrOrderBy;

$tdataDASHLET[".orderindexes"] = array();

$tdataDASHLET[".sqlHead"] = "SELECT DAS_UID,  	DAS_CLASS,  	DAS_TITLE,  	DAS_DESCRIPTION,  	DAS_VERSION,  	DAS_CREATE_DATE,  	DAS_UPDATE_DATE,  	DAS_STATUS";
$tdataDASHLET[".sqlFrom"] = "FROM DASHLET";
$tdataDASHLET[".sqlWhereExpr"] = "";
$tdataDASHLET[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDASHLET[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDASHLET[".arrGroupsPerPage"] = $arrGPP;

$tdataDASHLET[".highlightSearchResults"] = true;

$tableKeysDASHLET = array();
$tableKeysDASHLET[] = "DAS_UID";
$tdataDASHLET[".Keys"] = $tableKeysDASHLET;

$tdataDASHLET[".listFields"] = array();
$tdataDASHLET[".listFields"][] = "DAS_UID";
$tdataDASHLET[".listFields"][] = "DAS_CLASS";
$tdataDASHLET[".listFields"][] = "DAS_TITLE";
$tdataDASHLET[".listFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".listFields"][] = "DAS_VERSION";
$tdataDASHLET[".listFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".listFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".listFields"][] = "DAS_STATUS";

$tdataDASHLET[".hideMobileList"] = array();


$tdataDASHLET[".viewFields"] = array();
$tdataDASHLET[".viewFields"][] = "DAS_UID";
$tdataDASHLET[".viewFields"][] = "DAS_CLASS";
$tdataDASHLET[".viewFields"][] = "DAS_TITLE";
$tdataDASHLET[".viewFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".viewFields"][] = "DAS_VERSION";
$tdataDASHLET[".viewFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".viewFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".viewFields"][] = "DAS_STATUS";

$tdataDASHLET[".addFields"] = array();
$tdataDASHLET[".addFields"][] = "DAS_UID";
$tdataDASHLET[".addFields"][] = "DAS_CLASS";
$tdataDASHLET[".addFields"][] = "DAS_TITLE";
$tdataDASHLET[".addFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".addFields"][] = "DAS_VERSION";
$tdataDASHLET[".addFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".addFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".addFields"][] = "DAS_STATUS";

$tdataDASHLET[".masterListFields"] = array();
$tdataDASHLET[".masterListFields"][] = "DAS_UID";
$tdataDASHLET[".masterListFields"][] = "DAS_CLASS";
$tdataDASHLET[".masterListFields"][] = "DAS_TITLE";
$tdataDASHLET[".masterListFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".masterListFields"][] = "DAS_VERSION";
$tdataDASHLET[".masterListFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".masterListFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".masterListFields"][] = "DAS_STATUS";

$tdataDASHLET[".inlineAddFields"] = array();

$tdataDASHLET[".editFields"] = array();
$tdataDASHLET[".editFields"][] = "DAS_UID";
$tdataDASHLET[".editFields"][] = "DAS_CLASS";
$tdataDASHLET[".editFields"][] = "DAS_TITLE";
$tdataDASHLET[".editFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".editFields"][] = "DAS_VERSION";
$tdataDASHLET[".editFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".editFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".editFields"][] = "DAS_STATUS";

$tdataDASHLET[".inlineEditFields"] = array();

$tdataDASHLET[".updateSelectedFields"] = array();
$tdataDASHLET[".updateSelectedFields"][] = "DAS_UID";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_CLASS";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_TITLE";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_VERSION";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".updateSelectedFields"][] = "DAS_STATUS";


$tdataDASHLET[".exportFields"] = array();
$tdataDASHLET[".exportFields"][] = "DAS_UID";
$tdataDASHLET[".exportFields"][] = "DAS_CLASS";
$tdataDASHLET[".exportFields"][] = "DAS_TITLE";
$tdataDASHLET[".exportFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".exportFields"][] = "DAS_VERSION";
$tdataDASHLET[".exportFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".exportFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".exportFields"][] = "DAS_STATUS";

$tdataDASHLET[".importFields"] = array();
$tdataDASHLET[".importFields"][] = "DAS_UID";
$tdataDASHLET[".importFields"][] = "DAS_CLASS";
$tdataDASHLET[".importFields"][] = "DAS_TITLE";
$tdataDASHLET[".importFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".importFields"][] = "DAS_VERSION";
$tdataDASHLET[".importFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".importFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".importFields"][] = "DAS_STATUS";

$tdataDASHLET[".printFields"] = array();
$tdataDASHLET[".printFields"][] = "DAS_UID";
$tdataDASHLET[".printFields"][] = "DAS_CLASS";
$tdataDASHLET[".printFields"][] = "DAS_TITLE";
$tdataDASHLET[".printFields"][] = "DAS_DESCRIPTION";
$tdataDASHLET[".printFields"][] = "DAS_VERSION";
$tdataDASHLET[".printFields"][] = "DAS_CREATE_DATE";
$tdataDASHLET[".printFields"][] = "DAS_UPDATE_DATE";
$tdataDASHLET[".printFields"][] = "DAS_STATUS";

//	DAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DAS_UID";
	$fdata["GoodName"] = "DAS_UID";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_UID");
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




	$tdataDASHLET["DAS_UID"] = $fdata;
//	DAS_CLASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DAS_CLASS";
	$fdata["GoodName"] = "DAS_CLASS";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_CLASS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_CLASS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_CLASS";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataDASHLET["DAS_CLASS"] = $fdata;
//	DAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DAS_TITLE";
	$fdata["GoodName"] = "DAS_TITLE";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_TITLE");
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




	$tdataDASHLET["DAS_TITLE"] = $fdata;
//	DAS_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DAS_DESCRIPTION";
	$fdata["GoodName"] = "DAS_DESCRIPTION";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_DESCRIPTION");
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




	$tdataDASHLET["DAS_DESCRIPTION"] = $fdata;
//	DAS_VERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DAS_VERSION";
	$fdata["GoodName"] = "DAS_VERSION";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_VERSION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_VERSION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_VERSION";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataDASHLET["DAS_VERSION"] = $fdata;
//	DAS_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DAS_CREATE_DATE";
	$fdata["GoodName"] = "DAS_CREATE_DATE";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_CREATE_DATE");
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




	$tdataDASHLET["DAS_CREATE_DATE"] = $fdata;
//	DAS_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DAS_UPDATE_DATE";
	$fdata["GoodName"] = "DAS_UPDATE_DATE";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_UPDATE_DATE");
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




	$tdataDASHLET["DAS_UPDATE_DATE"] = $fdata;
//	DAS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DAS_STATUS";
	$fdata["GoodName"] = "DAS_STATUS";
	$fdata["ownerTable"] = "DASHLET";
	$fdata["Label"] = GetFieldLabel("DASHLET","DAS_STATUS");
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




	$tdataDASHLET["DAS_STATUS"] = $fdata;


$tables_data["DASHLET"]=&$tdataDASHLET;
$field_labels["DASHLET"] = &$fieldLabelsDASHLET;
$fieldToolTips["DASHLET"] = &$fieldToolTipsDASHLET;
$placeHolders["DASHLET"] = &$placeHoldersDASHLET;
$page_titles["DASHLET"] = &$pageTitlesDASHLET;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DASHLET"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DASHLET"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DASHLET()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DAS_UID,  	DAS_CLASS,  	DAS_TITLE,  	DAS_DESCRIPTION,  	DAS_VERSION,  	DAS_CREATE_DATE,  	DAS_UPDATE_DATE,  	DAS_STATUS";
$proto0["m_strFrom"] = "FROM DASHLET";
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
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto6["m_sql"] = "DAS_UID";
$proto6["m_srcTableName"] = "DASHLET";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_CLASS",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto8["m_sql"] = "DAS_CLASS";
$proto8["m_srcTableName"] = "DASHLET";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_TITLE",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto10["m_sql"] = "DAS_TITLE";
$proto10["m_srcTableName"] = "DASHLET";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_DESCRIPTION",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto12["m_sql"] = "DAS_DESCRIPTION";
$proto12["m_srcTableName"] = "DASHLET";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_VERSION",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto14["m_sql"] = "DAS_VERSION";
$proto14["m_srcTableName"] = "DASHLET";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_CREATE_DATE",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto16["m_sql"] = "DAS_CREATE_DATE";
$proto16["m_srcTableName"] = "DASHLET";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_UPDATE_DATE",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto18["m_sql"] = "DAS_UPDATE_DATE";
$proto18["m_srcTableName"] = "DASHLET";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_STATUS",
	"m_strTable" => "DASHLET",
	"m_srcTableName" => "DASHLET"
));

$proto20["m_sql"] = "DAS_STATUS";
$proto20["m_srcTableName"] = "DASHLET";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "DASHLET";
$proto23["m_srcTableName"] = "DASHLET";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "DAS_UID";
$proto23["m_columns"][] = "DAS_CLASS";
$proto23["m_columns"][] = "DAS_TITLE";
$proto23["m_columns"][] = "DAS_DESCRIPTION";
$proto23["m_columns"][] = "DAS_VERSION";
$proto23["m_columns"][] = "DAS_CREATE_DATE";
$proto23["m_columns"][] = "DAS_UPDATE_DATE";
$proto23["m_columns"][] = "DAS_STATUS";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "DASHLET";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "DASHLET";
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
$proto0["m_srcTableName"]="DASHLET";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DASHLET = createSqlQuery_DASHLET();


	
						;

								

$tdataDASHLET[".sqlquery"] = $queryData_DASHLET;

$tableEvents["DASHLET"] = new eventsBase;
$tdataDASHLET[".hasEvents"] = false;

?>
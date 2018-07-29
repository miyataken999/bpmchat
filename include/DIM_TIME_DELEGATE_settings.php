<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDIM_TIME_DELEGATE = array();
	$tdataDIM_TIME_DELEGATE[".truncateText"] = true;
	$tdataDIM_TIME_DELEGATE[".NumberOfChars"] = 20;
	$tdataDIM_TIME_DELEGATE[".ShortName"] = "DIM_TIME_DELEGATE";
	$tdataDIM_TIME_DELEGATE[".OwnerID"] = "";
	$tdataDIM_TIME_DELEGATE[".OriginalTable"] = "DIM_TIME_DELEGATE";

//	field labels
$fieldLabelsDIM_TIME_DELEGATE = array();
$fieldToolTipsDIM_TIME_DELEGATE = array();
$pageTitlesDIM_TIME_DELEGATE = array();
$placeHoldersDIM_TIME_DELEGATE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"] = array();
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"] = array();
	$placeHoldersDIM_TIME_DELEGATE["Japanese"] = array();
	$pageTitlesDIM_TIME_DELEGATE["Japanese"] = array();
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["TIME_ID"] = "タイムID";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["TIME_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["TIME_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["MONTH_ID"] = "月ID";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["MONTH_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["MONTH_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["QTR_ID"] = "QTRID";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["QTR_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["QTR_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["YEAR_ID"] = "年間ID";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["YEAR_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["YEAR_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["MONTH_NAME"] = "月名";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["MONTH_NAME"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["MONTH_NAME"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["MONTH_DESC"] = "月DESC";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["MONTH_DESC"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["MONTH_DESC"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["QTR_NAME"] = "QTR名";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["QTR_NAME"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["QTR_NAME"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["Japanese"]["QTR_DESC"] = "QTRDESC";
	$fieldToolTipsDIM_TIME_DELEGATE["Japanese"]["QTR_DESC"] = "";
	$placeHoldersDIM_TIME_DELEGATE["Japanese"]["QTR_DESC"] = "";
	if (count($fieldToolTipsDIM_TIME_DELEGATE["Japanese"]))
		$tdataDIM_TIME_DELEGATE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDIM_TIME_DELEGATE["English"] = array();
	$fieldToolTipsDIM_TIME_DELEGATE["English"] = array();
	$placeHoldersDIM_TIME_DELEGATE["English"] = array();
	$pageTitlesDIM_TIME_DELEGATE["English"] = array();
	$fieldLabelsDIM_TIME_DELEGATE["English"]["TIME_ID"] = "タイムID";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["TIME_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["TIME_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["MONTH_ID"] = "月ID";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["MONTH_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["MONTH_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["QTR_ID"] = "QTRID";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["QTR_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["QTR_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["YEAR_ID"] = "年間ID";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["YEAR_ID"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["YEAR_ID"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["MONTH_NAME"] = "月名";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["MONTH_NAME"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["MONTH_NAME"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["MONTH_DESC"] = "月DESC";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["MONTH_DESC"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["MONTH_DESC"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["QTR_NAME"] = "QTR名";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["QTR_NAME"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["QTR_NAME"] = "";
	$fieldLabelsDIM_TIME_DELEGATE["English"]["QTR_DESC"] = "QTRDESC";
	$fieldToolTipsDIM_TIME_DELEGATE["English"]["QTR_DESC"] = "";
	$placeHoldersDIM_TIME_DELEGATE["English"]["QTR_DESC"] = "";
	if (count($fieldToolTipsDIM_TIME_DELEGATE["English"]))
		$tdataDIM_TIME_DELEGATE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDIM_TIME_DELEGATE[""] = array();
	$fieldToolTipsDIM_TIME_DELEGATE[""] = array();
	$placeHoldersDIM_TIME_DELEGATE[""] = array();
	$pageTitlesDIM_TIME_DELEGATE[""] = array();
	if (count($fieldToolTipsDIM_TIME_DELEGATE[""]))
		$tdataDIM_TIME_DELEGATE[".isUseToolTips"] = true;
}


	$tdataDIM_TIME_DELEGATE[".NCSearch"] = true;



$tdataDIM_TIME_DELEGATE[".shortTableName"] = "DIM_TIME_DELEGATE";
$tdataDIM_TIME_DELEGATE[".nSecOptions"] = 0;
$tdataDIM_TIME_DELEGATE[".recsPerRowPrint"] = 1;
$tdataDIM_TIME_DELEGATE[".mainTableOwnerID"] = "";
$tdataDIM_TIME_DELEGATE[".moveNext"] = 0;
$tdataDIM_TIME_DELEGATE[".entityType"] = 0;

$tdataDIM_TIME_DELEGATE[".strOriginalTableName"] = "DIM_TIME_DELEGATE";

	



$tdataDIM_TIME_DELEGATE[".showAddInPopup"] = false;

$tdataDIM_TIME_DELEGATE[".showEditInPopup"] = false;

$tdataDIM_TIME_DELEGATE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDIM_TIME_DELEGATE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDIM_TIME_DELEGATE[".fieldsForRegister"] = array();
	
$tdataDIM_TIME_DELEGATE[".listAjax"] = false;

	$tdataDIM_TIME_DELEGATE[".audit"] = true;

	$tdataDIM_TIME_DELEGATE[".locking"] = false;

$tdataDIM_TIME_DELEGATE[".edit"] = true;
$tdataDIM_TIME_DELEGATE[".afterEditAction"] = 1;
$tdataDIM_TIME_DELEGATE[".closePopupAfterEdit"] = 1;
$tdataDIM_TIME_DELEGATE[".afterEditActionDetTable"] = "";

$tdataDIM_TIME_DELEGATE[".add"] = true;
$tdataDIM_TIME_DELEGATE[".afterAddAction"] = 1;
$tdataDIM_TIME_DELEGATE[".closePopupAfterAdd"] = 1;
$tdataDIM_TIME_DELEGATE[".afterAddActionDetTable"] = "";

$tdataDIM_TIME_DELEGATE[".list"] = true;

$tdataDIM_TIME_DELEGATE[".inlineEdit"] = true;


$tdataDIM_TIME_DELEGATE[".reorderRecordsByHeader"] = true;
$tdataDIM_TIME_DELEGATE[".createSortByDropdown"] = true;
$tdataDIM_TIME_DELEGATE[".strSortControlSettingsJSON"] = "";



$tdataDIM_TIME_DELEGATE[".inlineAdd"] = true;
$tdataDIM_TIME_DELEGATE[".view"] = true;

$tdataDIM_TIME_DELEGATE[".import"] = true;

$tdataDIM_TIME_DELEGATE[".exportTo"] = true;

$tdataDIM_TIME_DELEGATE[".printFriendly"] = true;

$tdataDIM_TIME_DELEGATE[".delete"] = true;

$tdataDIM_TIME_DELEGATE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataDIM_TIME_DELEGATE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataDIM_TIME_DELEGATE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataDIM_TIME_DELEGATE[".searchSaving"] = false;
//

$tdataDIM_TIME_DELEGATE[".showSearchPanel"] = true;
		$tdataDIM_TIME_DELEGATE[".flexibleSearch"] = true;

$tdataDIM_TIME_DELEGATE[".isUseAjaxSuggest"] = true;

$tdataDIM_TIME_DELEGATE[".rowHighlite"] = true;



				

$tdataDIM_TIME_DELEGATE[".ajaxCodeSnippetAdded"] = false;

$tdataDIM_TIME_DELEGATE[".buttonsAdded"] = false;

$tdataDIM_TIME_DELEGATE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDIM_TIME_DELEGATE[".isUseTimeForSearch"] = false;





$tdataDIM_TIME_DELEGATE[".allSearchFields"] = array();
$tdataDIM_TIME_DELEGATE[".filterFields"] = array();
$tdataDIM_TIME_DELEGATE[".requiredSearchFields"] = array();

$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "TIME_ID";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "MONTH_ID";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "QTR_ID";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "YEAR_ID";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "MONTH_NAME";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "MONTH_DESC";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "QTR_NAME";
	$tdataDIM_TIME_DELEGATE[".allSearchFields"][] = "QTR_DESC";
	

$tdataDIM_TIME_DELEGATE[".googleLikeFields"] = array();
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".googleLikeFields"][] = "QTR_DESC";


$tdataDIM_TIME_DELEGATE[".advSearchFields"] = array();
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".advSearchFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".tableType"] = "list";

$tdataDIM_TIME_DELEGATE[".printerPageOrientation"] = 0;
$tdataDIM_TIME_DELEGATE[".nPrinterPageScale"] = 100;

$tdataDIM_TIME_DELEGATE[".nPrinterSplitRecords"] = 40;

$tdataDIM_TIME_DELEGATE[".nPrinterPDFSplitRecords"] = 40;



$tdataDIM_TIME_DELEGATE[".geocodingEnabled"] = false;





$tdataDIM_TIME_DELEGATE[".listGridLayout"] = 3;


$tdataDIM_TIME_DELEGATE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataDIM_TIME_DELEGATE[".pageSize"] = 20;

$tdataDIM_TIME_DELEGATE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDIM_TIME_DELEGATE[".strOrderBy"] = $tstrOrderBy;

$tdataDIM_TIME_DELEGATE[".orderindexes"] = array();

$tdataDIM_TIME_DELEGATE[".sqlHead"] = "SELECT TIME_ID,  	MONTH_ID,  	QTR_ID,  	YEAR_ID,  	MONTH_NAME,  	MONTH_DESC,  	QTR_NAME,  	QTR_DESC";
$tdataDIM_TIME_DELEGATE[".sqlFrom"] = "FROM DIM_TIME_DELEGATE";
$tdataDIM_TIME_DELEGATE[".sqlWhereExpr"] = "";
$tdataDIM_TIME_DELEGATE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDIM_TIME_DELEGATE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDIM_TIME_DELEGATE[".arrGroupsPerPage"] = $arrGPP;

$tdataDIM_TIME_DELEGATE[".highlightSearchResults"] = true;

$tableKeysDIM_TIME_DELEGATE = array();
$tableKeysDIM_TIME_DELEGATE[] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".Keys"] = $tableKeysDIM_TIME_DELEGATE;

$tdataDIM_TIME_DELEGATE[".listFields"] = array();
$tdataDIM_TIME_DELEGATE[".listFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".listFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".hideMobileList"] = array();


$tdataDIM_TIME_DELEGATE[".viewFields"] = array();
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".viewFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".addFields"] = array();
$tdataDIM_TIME_DELEGATE[".addFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".addFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".masterListFields"] = array();
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".masterListFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".inlineAddFields"] = array();
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".inlineAddFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".editFields"] = array();
$tdataDIM_TIME_DELEGATE[".editFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".editFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".inlineEditFields"] = array();
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".inlineEditFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".updateSelectedFields"] = array();
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".updateSelectedFields"][] = "QTR_DESC";


$tdataDIM_TIME_DELEGATE[".exportFields"] = array();
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".exportFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".importFields"] = array();
$tdataDIM_TIME_DELEGATE[".importFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".importFields"][] = "QTR_DESC";

$tdataDIM_TIME_DELEGATE[".printFields"] = array();
$tdataDIM_TIME_DELEGATE[".printFields"][] = "TIME_ID";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "MONTH_ID";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "QTR_ID";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "YEAR_ID";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "MONTH_NAME";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "MONTH_DESC";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "QTR_NAME";
$tdataDIM_TIME_DELEGATE[".printFields"][] = "QTR_DESC";

//	TIME_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TIME_ID";
	$fdata["GoodName"] = "TIME_ID";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","TIME_ID");
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

		$fdata["strField"] = "TIME_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIME_ID";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDIM_TIME_DELEGATE["TIME_ID"] = $fdata;
//	MONTH_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MONTH_ID";
	$fdata["GoodName"] = "MONTH_ID";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","MONTH_ID");
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

		$fdata["strField"] = "MONTH_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTH_ID";

	
	
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




	$tdataDIM_TIME_DELEGATE["MONTH_ID"] = $fdata;
//	QTR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "QTR_ID";
	$fdata["GoodName"] = "QTR_ID";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","QTR_ID");
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

		$fdata["strField"] = "QTR_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTR_ID";

	
	
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




	$tdataDIM_TIME_DELEGATE["QTR_ID"] = $fdata;
//	YEAR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "YEAR_ID";
	$fdata["GoodName"] = "YEAR_ID";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","YEAR_ID");
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

		$fdata["strField"] = "YEAR_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "YEAR_ID";

	
	
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




	$tdataDIM_TIME_DELEGATE["YEAR_ID"] = $fdata;
//	MONTH_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MONTH_NAME";
	$fdata["GoodName"] = "MONTH_NAME";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","MONTH_NAME");
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

		$fdata["strField"] = "MONTH_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTH_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdataDIM_TIME_DELEGATE["MONTH_NAME"] = $fdata;
//	MONTH_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MONTH_DESC";
	$fdata["GoodName"] = "MONTH_DESC";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","MONTH_DESC");
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

		$fdata["strField"] = "MONTH_DESC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTH_DESC";

	
	
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
			$edata["EditParams"].= " maxlength=9";

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




	$tdataDIM_TIME_DELEGATE["MONTH_DESC"] = $fdata;
//	QTR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "QTR_NAME";
	$fdata["GoodName"] = "QTR_NAME";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","QTR_NAME");
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

		$fdata["strField"] = "QTR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTR_NAME";

	
	
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




	$tdataDIM_TIME_DELEGATE["QTR_NAME"] = $fdata;
//	QTR_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "QTR_DESC";
	$fdata["GoodName"] = "QTR_DESC";
	$fdata["ownerTable"] = "DIM_TIME_DELEGATE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_DELEGATE","QTR_DESC");
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

		$fdata["strField"] = "QTR_DESC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTR_DESC";

	
	
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
			$edata["EditParams"].= " maxlength=9";

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




	$tdataDIM_TIME_DELEGATE["QTR_DESC"] = $fdata;


$tables_data["DIM_TIME_DELEGATE"]=&$tdataDIM_TIME_DELEGATE;
$field_labels["DIM_TIME_DELEGATE"] = &$fieldLabelsDIM_TIME_DELEGATE;
$fieldToolTips["DIM_TIME_DELEGATE"] = &$fieldToolTipsDIM_TIME_DELEGATE;
$placeHolders["DIM_TIME_DELEGATE"] = &$placeHoldersDIM_TIME_DELEGATE;
$page_titles["DIM_TIME_DELEGATE"] = &$pageTitlesDIM_TIME_DELEGATE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DIM_TIME_DELEGATE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DIM_TIME_DELEGATE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DIM_TIME_DELEGATE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIME_ID,  	MONTH_ID,  	QTR_ID,  	YEAR_ID,  	MONTH_NAME,  	MONTH_DESC,  	QTR_NAME,  	QTR_DESC";
$proto0["m_strFrom"] = "FROM DIM_TIME_DELEGATE";
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
	"m_strName" => "TIME_ID",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto6["m_sql"] = "TIME_ID";
$proto6["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH_ID",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto8["m_sql"] = "MONTH_ID";
$proto8["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "QTR_ID",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto10["m_sql"] = "QTR_ID";
$proto10["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "YEAR_ID",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto12["m_sql"] = "YEAR_ID";
$proto12["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH_NAME",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto14["m_sql"] = "MONTH_NAME";
$proto14["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH_DESC",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto16["m_sql"] = "MONTH_DESC";
$proto16["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "QTR_NAME",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto18["m_sql"] = "QTR_NAME";
$proto18["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "QTR_DESC",
	"m_strTable" => "DIM_TIME_DELEGATE",
	"m_srcTableName" => "DIM_TIME_DELEGATE"
));

$proto20["m_sql"] = "QTR_DESC";
$proto20["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "DIM_TIME_DELEGATE";
$proto23["m_srcTableName"] = "DIM_TIME_DELEGATE";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "TIME_ID";
$proto23["m_columns"][] = "MONTH_ID";
$proto23["m_columns"][] = "QTR_ID";
$proto23["m_columns"][] = "YEAR_ID";
$proto23["m_columns"][] = "MONTH_NAME";
$proto23["m_columns"][] = "MONTH_DESC";
$proto23["m_columns"][] = "QTR_NAME";
$proto23["m_columns"][] = "QTR_DESC";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "DIM_TIME_DELEGATE";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "DIM_TIME_DELEGATE";
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
$proto0["m_srcTableName"]="DIM_TIME_DELEGATE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DIM_TIME_DELEGATE = createSqlQuery_DIM_TIME_DELEGATE();


	
						;

								

$tdataDIM_TIME_DELEGATE[".sqlquery"] = $queryData_DIM_TIME_DELEGATE;

$tableEvents["DIM_TIME_DELEGATE"] = new eventsBase;
$tdataDIM_TIME_DELEGATE[".hasEvents"] = false;

?>
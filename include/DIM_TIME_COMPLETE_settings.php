<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDIM_TIME_COMPLETE = array();
	$tdataDIM_TIME_COMPLETE[".truncateText"] = true;
	$tdataDIM_TIME_COMPLETE[".NumberOfChars"] = 20;
	$tdataDIM_TIME_COMPLETE[".ShortName"] = "DIM_TIME_COMPLETE";
	$tdataDIM_TIME_COMPLETE[".OwnerID"] = "";
	$tdataDIM_TIME_COMPLETE[".OriginalTable"] = "DIM_TIME_COMPLETE";

//	field labels
$fieldLabelsDIM_TIME_COMPLETE = array();
$fieldToolTipsDIM_TIME_COMPLETE = array();
$pageTitlesDIM_TIME_COMPLETE = array();
$placeHoldersDIM_TIME_COMPLETE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"] = array();
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"] = array();
	$placeHoldersDIM_TIME_COMPLETE["Japanese"] = array();
	$pageTitlesDIM_TIME_COMPLETE["Japanese"] = array();
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["TIME_ID"] = "タイムID";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["TIME_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["TIME_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["MONTH_ID"] = "月のID";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["MONTH_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["MONTH_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["QTR_ID"] = "QTRのID";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["QTR_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["QTR_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["YEAR_ID"] = "年間のID";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["YEAR_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["YEAR_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["MONTH_NAME"] = "月名";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["MONTH_NAME"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["MONTH_NAME"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["MONTH_DESC"] = "月のDESC";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["MONTH_DESC"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["MONTH_DESC"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["QTR_NAME"] = "QTR名";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["QTR_NAME"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["QTR_NAME"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["Japanese"]["QTR_DESC"] = "QTRのDESC";
	$fieldToolTipsDIM_TIME_COMPLETE["Japanese"]["QTR_DESC"] = "";
	$placeHoldersDIM_TIME_COMPLETE["Japanese"]["QTR_DESC"] = "";
	if (count($fieldToolTipsDIM_TIME_COMPLETE["Japanese"]))
		$tdataDIM_TIME_COMPLETE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDIM_TIME_COMPLETE["English"] = array();
	$fieldToolTipsDIM_TIME_COMPLETE["English"] = array();
	$placeHoldersDIM_TIME_COMPLETE["English"] = array();
	$pageTitlesDIM_TIME_COMPLETE["English"] = array();
	$fieldLabelsDIM_TIME_COMPLETE["English"]["TIME_ID"] = "タイムID";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["TIME_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["TIME_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["MONTH_ID"] = "月のID";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["MONTH_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["MONTH_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["QTR_ID"] = "QTRのID";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["QTR_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["QTR_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["YEAR_ID"] = "年間のID";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["YEAR_ID"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["YEAR_ID"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["MONTH_NAME"] = "月名";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["MONTH_NAME"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["MONTH_NAME"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["MONTH_DESC"] = "月のDESC";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["MONTH_DESC"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["MONTH_DESC"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["QTR_NAME"] = "QTR名";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["QTR_NAME"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["QTR_NAME"] = "";
	$fieldLabelsDIM_TIME_COMPLETE["English"]["QTR_DESC"] = "QTRのDESC";
	$fieldToolTipsDIM_TIME_COMPLETE["English"]["QTR_DESC"] = "";
	$placeHoldersDIM_TIME_COMPLETE["English"]["QTR_DESC"] = "";
	if (count($fieldToolTipsDIM_TIME_COMPLETE["English"]))
		$tdataDIM_TIME_COMPLETE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDIM_TIME_COMPLETE[""] = array();
	$fieldToolTipsDIM_TIME_COMPLETE[""] = array();
	$placeHoldersDIM_TIME_COMPLETE[""] = array();
	$pageTitlesDIM_TIME_COMPLETE[""] = array();
	if (count($fieldToolTipsDIM_TIME_COMPLETE[""]))
		$tdataDIM_TIME_COMPLETE[".isUseToolTips"] = true;
}


	$tdataDIM_TIME_COMPLETE[".NCSearch"] = true;



$tdataDIM_TIME_COMPLETE[".shortTableName"] = "DIM_TIME_COMPLETE";
$tdataDIM_TIME_COMPLETE[".nSecOptions"] = 0;
$tdataDIM_TIME_COMPLETE[".recsPerRowPrint"] = 1;
$tdataDIM_TIME_COMPLETE[".mainTableOwnerID"] = "";
$tdataDIM_TIME_COMPLETE[".moveNext"] = 0;
$tdataDIM_TIME_COMPLETE[".entityType"] = 0;

$tdataDIM_TIME_COMPLETE[".strOriginalTableName"] = "DIM_TIME_COMPLETE";

	



$tdataDIM_TIME_COMPLETE[".showAddInPopup"] = false;

$tdataDIM_TIME_COMPLETE[".showEditInPopup"] = false;

$tdataDIM_TIME_COMPLETE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDIM_TIME_COMPLETE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDIM_TIME_COMPLETE[".fieldsForRegister"] = array();
	
$tdataDIM_TIME_COMPLETE[".listAjax"] = false;

	$tdataDIM_TIME_COMPLETE[".audit"] = true;

	$tdataDIM_TIME_COMPLETE[".locking"] = false;

$tdataDIM_TIME_COMPLETE[".edit"] = true;
$tdataDIM_TIME_COMPLETE[".afterEditAction"] = 1;
$tdataDIM_TIME_COMPLETE[".closePopupAfterEdit"] = 1;
$tdataDIM_TIME_COMPLETE[".afterEditActionDetTable"] = "";

$tdataDIM_TIME_COMPLETE[".add"] = true;
$tdataDIM_TIME_COMPLETE[".afterAddAction"] = 1;
$tdataDIM_TIME_COMPLETE[".closePopupAfterAdd"] = 1;
$tdataDIM_TIME_COMPLETE[".afterAddActionDetTable"] = "";

$tdataDIM_TIME_COMPLETE[".list"] = true;

$tdataDIM_TIME_COMPLETE[".inlineEdit"] = true;


$tdataDIM_TIME_COMPLETE[".reorderRecordsByHeader"] = true;
$tdataDIM_TIME_COMPLETE[".createSortByDropdown"] = true;
$tdataDIM_TIME_COMPLETE[".strSortControlSettingsJSON"] = "";



$tdataDIM_TIME_COMPLETE[".inlineAdd"] = true;
$tdataDIM_TIME_COMPLETE[".view"] = true;

$tdataDIM_TIME_COMPLETE[".import"] = true;

$tdataDIM_TIME_COMPLETE[".exportTo"] = true;

$tdataDIM_TIME_COMPLETE[".printFriendly"] = true;

$tdataDIM_TIME_COMPLETE[".delete"] = true;

$tdataDIM_TIME_COMPLETE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataDIM_TIME_COMPLETE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataDIM_TIME_COMPLETE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataDIM_TIME_COMPLETE[".searchSaving"] = false;
//

$tdataDIM_TIME_COMPLETE[".showSearchPanel"] = true;
		$tdataDIM_TIME_COMPLETE[".flexibleSearch"] = true;

$tdataDIM_TIME_COMPLETE[".isUseAjaxSuggest"] = true;

$tdataDIM_TIME_COMPLETE[".rowHighlite"] = true;



				

$tdataDIM_TIME_COMPLETE[".ajaxCodeSnippetAdded"] = false;

$tdataDIM_TIME_COMPLETE[".buttonsAdded"] = false;

$tdataDIM_TIME_COMPLETE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDIM_TIME_COMPLETE[".isUseTimeForSearch"] = false;





$tdataDIM_TIME_COMPLETE[".allSearchFields"] = array();
$tdataDIM_TIME_COMPLETE[".filterFields"] = array();
$tdataDIM_TIME_COMPLETE[".requiredSearchFields"] = array();

$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "TIME_ID";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "MONTH_ID";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "QTR_ID";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "YEAR_ID";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "MONTH_NAME";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "MONTH_DESC";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "QTR_NAME";
	$tdataDIM_TIME_COMPLETE[".allSearchFields"][] = "QTR_DESC";
	

$tdataDIM_TIME_COMPLETE[".googleLikeFields"] = array();
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".googleLikeFields"][] = "QTR_DESC";


$tdataDIM_TIME_COMPLETE[".advSearchFields"] = array();
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".advSearchFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".tableType"] = "list";

$tdataDIM_TIME_COMPLETE[".printerPageOrientation"] = 0;
$tdataDIM_TIME_COMPLETE[".nPrinterPageScale"] = 100;

$tdataDIM_TIME_COMPLETE[".nPrinterSplitRecords"] = 40;

$tdataDIM_TIME_COMPLETE[".nPrinterPDFSplitRecords"] = 40;



$tdataDIM_TIME_COMPLETE[".geocodingEnabled"] = false;





$tdataDIM_TIME_COMPLETE[".listGridLayout"] = 3;


$tdataDIM_TIME_COMPLETE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataDIM_TIME_COMPLETE[".pageSize"] = 20;

$tdataDIM_TIME_COMPLETE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDIM_TIME_COMPLETE[".strOrderBy"] = $tstrOrderBy;

$tdataDIM_TIME_COMPLETE[".orderindexes"] = array();

$tdataDIM_TIME_COMPLETE[".sqlHead"] = "SELECT TIME_ID,  	MONTH_ID,  	QTR_ID,  	YEAR_ID,  	MONTH_NAME,  	MONTH_DESC,  	QTR_NAME,  	QTR_DESC";
$tdataDIM_TIME_COMPLETE[".sqlFrom"] = "FROM DIM_TIME_COMPLETE";
$tdataDIM_TIME_COMPLETE[".sqlWhereExpr"] = "";
$tdataDIM_TIME_COMPLETE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDIM_TIME_COMPLETE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDIM_TIME_COMPLETE[".arrGroupsPerPage"] = $arrGPP;

$tdataDIM_TIME_COMPLETE[".highlightSearchResults"] = true;

$tableKeysDIM_TIME_COMPLETE = array();
$tableKeysDIM_TIME_COMPLETE[] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".Keys"] = $tableKeysDIM_TIME_COMPLETE;

$tdataDIM_TIME_COMPLETE[".listFields"] = array();
$tdataDIM_TIME_COMPLETE[".listFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".listFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".hideMobileList"] = array();


$tdataDIM_TIME_COMPLETE[".viewFields"] = array();
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".viewFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".addFields"] = array();
$tdataDIM_TIME_COMPLETE[".addFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".addFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".masterListFields"] = array();
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".masterListFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".inlineAddFields"] = array();
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".inlineAddFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".editFields"] = array();
$tdataDIM_TIME_COMPLETE[".editFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".editFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".inlineEditFields"] = array();
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".inlineEditFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".updateSelectedFields"] = array();
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".updateSelectedFields"][] = "QTR_DESC";


$tdataDIM_TIME_COMPLETE[".exportFields"] = array();
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".exportFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".importFields"] = array();
$tdataDIM_TIME_COMPLETE[".importFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".importFields"][] = "QTR_DESC";

$tdataDIM_TIME_COMPLETE[".printFields"] = array();
$tdataDIM_TIME_COMPLETE[".printFields"][] = "TIME_ID";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "MONTH_ID";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "QTR_ID";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "YEAR_ID";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "MONTH_NAME";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "MONTH_DESC";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "QTR_NAME";
$tdataDIM_TIME_COMPLETE[".printFields"][] = "QTR_DESC";

//	TIME_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TIME_ID";
	$fdata["GoodName"] = "TIME_ID";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","TIME_ID");
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




	$tdataDIM_TIME_COMPLETE["TIME_ID"] = $fdata;
//	MONTH_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MONTH_ID";
	$fdata["GoodName"] = "MONTH_ID";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","MONTH_ID");
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




	$tdataDIM_TIME_COMPLETE["MONTH_ID"] = $fdata;
//	QTR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "QTR_ID";
	$fdata["GoodName"] = "QTR_ID";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","QTR_ID");
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




	$tdataDIM_TIME_COMPLETE["QTR_ID"] = $fdata;
//	YEAR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "YEAR_ID";
	$fdata["GoodName"] = "YEAR_ID";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","YEAR_ID");
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




	$tdataDIM_TIME_COMPLETE["YEAR_ID"] = $fdata;
//	MONTH_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MONTH_NAME";
	$fdata["GoodName"] = "MONTH_NAME";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","MONTH_NAME");
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




	$tdataDIM_TIME_COMPLETE["MONTH_NAME"] = $fdata;
//	MONTH_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MONTH_DESC";
	$fdata["GoodName"] = "MONTH_DESC";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","MONTH_DESC");
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




	$tdataDIM_TIME_COMPLETE["MONTH_DESC"] = $fdata;
//	QTR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "QTR_NAME";
	$fdata["GoodName"] = "QTR_NAME";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","QTR_NAME");
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




	$tdataDIM_TIME_COMPLETE["QTR_NAME"] = $fdata;
//	QTR_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "QTR_DESC";
	$fdata["GoodName"] = "QTR_DESC";
	$fdata["ownerTable"] = "DIM_TIME_COMPLETE";
	$fdata["Label"] = GetFieldLabel("DIM_TIME_COMPLETE","QTR_DESC");
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




	$tdataDIM_TIME_COMPLETE["QTR_DESC"] = $fdata;


$tables_data["DIM_TIME_COMPLETE"]=&$tdataDIM_TIME_COMPLETE;
$field_labels["DIM_TIME_COMPLETE"] = &$fieldLabelsDIM_TIME_COMPLETE;
$fieldToolTips["DIM_TIME_COMPLETE"] = &$fieldToolTipsDIM_TIME_COMPLETE;
$placeHolders["DIM_TIME_COMPLETE"] = &$placeHoldersDIM_TIME_COMPLETE;
$page_titles["DIM_TIME_COMPLETE"] = &$pageTitlesDIM_TIME_COMPLETE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DIM_TIME_COMPLETE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DIM_TIME_COMPLETE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DIM_TIME_COMPLETE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIME_ID,  	MONTH_ID,  	QTR_ID,  	YEAR_ID,  	MONTH_NAME,  	MONTH_DESC,  	QTR_NAME,  	QTR_DESC";
$proto0["m_strFrom"] = "FROM DIM_TIME_COMPLETE";
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
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto6["m_sql"] = "TIME_ID";
$proto6["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH_ID",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto8["m_sql"] = "MONTH_ID";
$proto8["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "QTR_ID",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto10["m_sql"] = "QTR_ID";
$proto10["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "YEAR_ID",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto12["m_sql"] = "YEAR_ID";
$proto12["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH_NAME",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto14["m_sql"] = "MONTH_NAME";
$proto14["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTH_DESC",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto16["m_sql"] = "MONTH_DESC";
$proto16["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "QTR_NAME",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto18["m_sql"] = "QTR_NAME";
$proto18["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "QTR_DESC",
	"m_strTable" => "DIM_TIME_COMPLETE",
	"m_srcTableName" => "DIM_TIME_COMPLETE"
));

$proto20["m_sql"] = "QTR_DESC";
$proto20["m_srcTableName"] = "DIM_TIME_COMPLETE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "DIM_TIME_COMPLETE";
$proto23["m_srcTableName"] = "DIM_TIME_COMPLETE";
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
$proto22["m_sql"] = "DIM_TIME_COMPLETE";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "DIM_TIME_COMPLETE";
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
$proto0["m_srcTableName"]="DIM_TIME_COMPLETE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DIM_TIME_COMPLETE = createSqlQuery_DIM_TIME_COMPLETE();


	
						;

								

$tdataDIM_TIME_COMPLETE[".sqlquery"] = $queryData_DIM_TIME_COMPLETE;

$tableEvents["DIM_TIME_COMPLETE"] = new eventsBase;
$tdataDIM_TIME_COMPLETE[".hasEvents"] = false;

?>
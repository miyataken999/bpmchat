<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMESSAGE_TYPE_VARIABLE = array();
	$tdataMESSAGE_TYPE_VARIABLE[".truncateText"] = true;
	$tdataMESSAGE_TYPE_VARIABLE[".NumberOfChars"] = 80;
	$tdataMESSAGE_TYPE_VARIABLE[".ShortName"] = "MESSAGE_TYPE_VARIABLE";
	$tdataMESSAGE_TYPE_VARIABLE[".OwnerID"] = "";
	$tdataMESSAGE_TYPE_VARIABLE[".OriginalTable"] = "MESSAGE_TYPE_VARIABLE";

//	field labels
$fieldLabelsMESSAGE_TYPE_VARIABLE = array();
$fieldToolTipsMESSAGE_TYPE_VARIABLE = array();
$pageTitlesMESSAGE_TYPE_VARIABLE = array();
$placeHoldersMESSAGE_TYPE_VARIABLE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsMESSAGE_TYPE_VARIABLE["Japanese"] = array();
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["Japanese"] = array();
	$placeHoldersMESSAGE_TYPE_VARIABLE["Japanese"] = array();
	$pageTitlesMESSAGE_TYPE_VARIABLE["Japanese"] = array();
	$fieldLabelsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_UID"] = "MSGTV UID";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_UID"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_UID"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGT_UID"] = "MSGT UID";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["Japanese"]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_NAME"] = "MSGTV NAME";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_NAME"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_NAME"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_DEFAULT_VALUE"] = "MSGTV DEFAULT VALUE";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_DEFAULT_VALUE"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["Japanese"]["MSGTV_DEFAULT_VALUE"] = "";
	if (count($fieldToolTipsMESSAGE_TYPE_VARIABLE["Japanese"]))
		$tdataMESSAGE_TYPE_VARIABLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMESSAGE_TYPE_VARIABLE["English"] = array();
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["English"] = array();
	$placeHoldersMESSAGE_TYPE_VARIABLE["English"] = array();
	$pageTitlesMESSAGE_TYPE_VARIABLE["English"] = array();
	$fieldLabelsMESSAGE_TYPE_VARIABLE["English"]["MSGTV_UID"] = "MSGTV UID";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["English"]["MSGTV_UID"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["English"]["MSGTV_UID"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE["English"]["MSGT_UID"] = "MSGT UID";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["English"]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["English"]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE["English"]["MSGTV_NAME"] = "MSGTV NAME";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["English"]["MSGTV_NAME"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["English"]["MSGTV_NAME"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE["English"]["MSGTV_DEFAULT_VALUE"] = "MSGTV DEFAULT VALUE";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE["English"]["MSGTV_DEFAULT_VALUE"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE["English"]["MSGTV_DEFAULT_VALUE"] = "";
	if (count($fieldToolTipsMESSAGE_TYPE_VARIABLE["English"]))
		$tdataMESSAGE_TYPE_VARIABLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMESSAGE_TYPE_VARIABLE[""] = array();
	$fieldToolTipsMESSAGE_TYPE_VARIABLE[""] = array();
	$placeHoldersMESSAGE_TYPE_VARIABLE[""] = array();
	$pageTitlesMESSAGE_TYPE_VARIABLE[""] = array();
	$fieldLabelsMESSAGE_TYPE_VARIABLE[""]["MSGTV_UID"] = "MSGTV UID";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE[""]["MSGTV_UID"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE[""]["MSGTV_UID"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE[""]["MSGT_UID"] = "MSGT UID";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE[""]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE[""]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE[""]["MSGTV_NAME"] = "MSGTV NAME";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE[""]["MSGTV_NAME"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE[""]["MSGTV_NAME"] = "";
	$fieldLabelsMESSAGE_TYPE_VARIABLE[""]["MSGTV_DEFAULT_VALUE"] = "MSGTV DEFAULT VALUE";
	$fieldToolTipsMESSAGE_TYPE_VARIABLE[""]["MSGTV_DEFAULT_VALUE"] = "";
	$placeHoldersMESSAGE_TYPE_VARIABLE[""]["MSGTV_DEFAULT_VALUE"] = "";
	if (count($fieldToolTipsMESSAGE_TYPE_VARIABLE[""]))
		$tdataMESSAGE_TYPE_VARIABLE[".isUseToolTips"] = true;
}


	$tdataMESSAGE_TYPE_VARIABLE[".NCSearch"] = true;



$tdataMESSAGE_TYPE_VARIABLE[".shortTableName"] = "MESSAGE_TYPE_VARIABLE";
$tdataMESSAGE_TYPE_VARIABLE[".nSecOptions"] = 0;
$tdataMESSAGE_TYPE_VARIABLE[".recsPerRowPrint"] = 1;
$tdataMESSAGE_TYPE_VARIABLE[".mainTableOwnerID"] = "";
$tdataMESSAGE_TYPE_VARIABLE[".moveNext"] = 1;
$tdataMESSAGE_TYPE_VARIABLE[".entityType"] = 0;

$tdataMESSAGE_TYPE_VARIABLE[".strOriginalTableName"] = "MESSAGE_TYPE_VARIABLE";

	



$tdataMESSAGE_TYPE_VARIABLE[".showAddInPopup"] = false;

$tdataMESSAGE_TYPE_VARIABLE[".showEditInPopup"] = false;

$tdataMESSAGE_TYPE_VARIABLE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMESSAGE_TYPE_VARIABLE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMESSAGE_TYPE_VARIABLE[".fieldsForRegister"] = array();
	
$tdataMESSAGE_TYPE_VARIABLE[".listAjax"] = false;

	$tdataMESSAGE_TYPE_VARIABLE[".audit"] = false;

	$tdataMESSAGE_TYPE_VARIABLE[".locking"] = false;

$tdataMESSAGE_TYPE_VARIABLE[".edit"] = true;
$tdataMESSAGE_TYPE_VARIABLE[".afterEditAction"] = 1;
$tdataMESSAGE_TYPE_VARIABLE[".closePopupAfterEdit"] = 1;
$tdataMESSAGE_TYPE_VARIABLE[".afterEditActionDetTable"] = "";

$tdataMESSAGE_TYPE_VARIABLE[".add"] = true;
$tdataMESSAGE_TYPE_VARIABLE[".afterAddAction"] = 1;
$tdataMESSAGE_TYPE_VARIABLE[".closePopupAfterAdd"] = 1;
$tdataMESSAGE_TYPE_VARIABLE[".afterAddActionDetTable"] = "";

$tdataMESSAGE_TYPE_VARIABLE[".list"] = true;



$tdataMESSAGE_TYPE_VARIABLE[".reorderRecordsByHeader"] = true;



$tdataMESSAGE_TYPE_VARIABLE[".view"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".import"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".exportTo"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".printFriendly"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".delete"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMESSAGE_TYPE_VARIABLE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMESSAGE_TYPE_VARIABLE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMESSAGE_TYPE_VARIABLE[".searchSaving"] = false;
//

$tdataMESSAGE_TYPE_VARIABLE[".showSearchPanel"] = true;
		$tdataMESSAGE_TYPE_VARIABLE[".flexibleSearch"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".isUseAjaxSuggest"] = true;

$tdataMESSAGE_TYPE_VARIABLE[".rowHighlite"] = true;



				

$tdataMESSAGE_TYPE_VARIABLE[".ajaxCodeSnippetAdded"] = false;

$tdataMESSAGE_TYPE_VARIABLE[".buttonsAdded"] = false;

$tdataMESSAGE_TYPE_VARIABLE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMESSAGE_TYPE_VARIABLE[".isUseTimeForSearch"] = false;





$tdataMESSAGE_TYPE_VARIABLE[".allSearchFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".filterFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".requiredSearchFields"] = array();

$tdataMESSAGE_TYPE_VARIABLE[".allSearchFields"][] = "MSGTV_UID";
	$tdataMESSAGE_TYPE_VARIABLE[".allSearchFields"][] = "MSGT_UID";
	$tdataMESSAGE_TYPE_VARIABLE[".allSearchFields"][] = "MSGTV_NAME";
	$tdataMESSAGE_TYPE_VARIABLE[".allSearchFields"][] = "MSGTV_DEFAULT_VALUE";
	

$tdataMESSAGE_TYPE_VARIABLE[".googleLikeFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".googleLikeFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".googleLikeFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".googleLikeFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".googleLikeFields"][] = "MSGTV_DEFAULT_VALUE";


$tdataMESSAGE_TYPE_VARIABLE[".advSearchFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".advSearchFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".advSearchFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".advSearchFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".advSearchFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".tableType"] = "list";

$tdataMESSAGE_TYPE_VARIABLE[".printerPageOrientation"] = 0;
$tdataMESSAGE_TYPE_VARIABLE[".nPrinterPageScale"] = 100;

$tdataMESSAGE_TYPE_VARIABLE[".nPrinterSplitRecords"] = 40;

$tdataMESSAGE_TYPE_VARIABLE[".nPrinterPDFSplitRecords"] = 40;



$tdataMESSAGE_TYPE_VARIABLE[".geocodingEnabled"] = false;





$tdataMESSAGE_TYPE_VARIABLE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMESSAGE_TYPE_VARIABLE[".pageSize"] = 20;

$tdataMESSAGE_TYPE_VARIABLE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMESSAGE_TYPE_VARIABLE[".strOrderBy"] = $tstrOrderBy;

$tdataMESSAGE_TYPE_VARIABLE[".orderindexes"] = array();

$tdataMESSAGE_TYPE_VARIABLE[".sqlHead"] = "SELECT MSGTV_UID,  	MSGT_UID,  	MSGTV_NAME,  	MSGTV_DEFAULT_VALUE";
$tdataMESSAGE_TYPE_VARIABLE[".sqlFrom"] = "FROM MESSAGE_TYPE_VARIABLE";
$tdataMESSAGE_TYPE_VARIABLE[".sqlWhereExpr"] = "";
$tdataMESSAGE_TYPE_VARIABLE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMESSAGE_TYPE_VARIABLE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMESSAGE_TYPE_VARIABLE[".arrGroupsPerPage"] = $arrGPP;

$tdataMESSAGE_TYPE_VARIABLE[".highlightSearchResults"] = true;

$tableKeysMESSAGE_TYPE_VARIABLE = array();
$tableKeysMESSAGE_TYPE_VARIABLE[] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".Keys"] = $tableKeysMESSAGE_TYPE_VARIABLE;

$tdataMESSAGE_TYPE_VARIABLE[".listFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".listFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".listFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".listFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".listFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".hideMobileList"] = array();


$tdataMESSAGE_TYPE_VARIABLE[".viewFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".viewFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".viewFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".viewFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".viewFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".addFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".addFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".addFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".addFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".addFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".masterListFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".masterListFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".masterListFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".masterListFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".masterListFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".inlineAddFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".inlineAddFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".inlineAddFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".inlineAddFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".inlineAddFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".editFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".editFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".editFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".editFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".editFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".inlineEditFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".inlineEditFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".inlineEditFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".inlineEditFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".inlineEditFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".updateSelectedFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".updateSelectedFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".updateSelectedFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".updateSelectedFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".updateSelectedFields"][] = "MSGTV_DEFAULT_VALUE";


$tdataMESSAGE_TYPE_VARIABLE[".exportFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".exportFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".exportFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".exportFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".exportFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".importFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".importFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".importFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".importFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".importFields"][] = "MSGTV_DEFAULT_VALUE";

$tdataMESSAGE_TYPE_VARIABLE[".printFields"] = array();
$tdataMESSAGE_TYPE_VARIABLE[".printFields"][] = "MSGTV_UID";
$tdataMESSAGE_TYPE_VARIABLE[".printFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE_VARIABLE[".printFields"][] = "MSGTV_NAME";
$tdataMESSAGE_TYPE_VARIABLE[".printFields"][] = "MSGTV_DEFAULT_VALUE";

//	MSGTV_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MSGTV_UID";
	$fdata["GoodName"] = "MSGTV_UID";
	$fdata["ownerTable"] = "MESSAGE_TYPE_VARIABLE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE_VARIABLE","MSGTV_UID");
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

		$fdata["strField"] = "MSGTV_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGTV_UID";

	
	
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




	$tdataMESSAGE_TYPE_VARIABLE["MSGTV_UID"] = $fdata;
//	MSGT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MSGT_UID";
	$fdata["GoodName"] = "MSGT_UID";
	$fdata["ownerTable"] = "MESSAGE_TYPE_VARIABLE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE_VARIABLE","MSGT_UID");
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

		$fdata["strField"] = "MSGT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGT_UID";

	
	
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




	$tdataMESSAGE_TYPE_VARIABLE["MSGT_UID"] = $fdata;
//	MSGTV_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MSGTV_NAME";
	$fdata["GoodName"] = "MSGTV_NAME";
	$fdata["ownerTable"] = "MESSAGE_TYPE_VARIABLE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE_VARIABLE","MSGTV_NAME");
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

		$fdata["strField"] = "MSGTV_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGTV_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataMESSAGE_TYPE_VARIABLE["MSGTV_NAME"] = $fdata;
//	MSGTV_DEFAULT_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MSGTV_DEFAULT_VALUE";
	$fdata["GoodName"] = "MSGTV_DEFAULT_VALUE";
	$fdata["ownerTable"] = "MESSAGE_TYPE_VARIABLE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE_VARIABLE","MSGTV_DEFAULT_VALUE");
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

		$fdata["strField"] = "MSGTV_DEFAULT_VALUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGTV_DEFAULT_VALUE";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataMESSAGE_TYPE_VARIABLE["MSGTV_DEFAULT_VALUE"] = $fdata;


$tables_data["MESSAGE_TYPE_VARIABLE"]=&$tdataMESSAGE_TYPE_VARIABLE;
$field_labels["MESSAGE_TYPE_VARIABLE"] = &$fieldLabelsMESSAGE_TYPE_VARIABLE;
$fieldToolTips["MESSAGE_TYPE_VARIABLE"] = &$fieldToolTipsMESSAGE_TYPE_VARIABLE;
$placeHolders["MESSAGE_TYPE_VARIABLE"] = &$placeHoldersMESSAGE_TYPE_VARIABLE;
$page_titles["MESSAGE_TYPE_VARIABLE"] = &$pageTitlesMESSAGE_TYPE_VARIABLE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MESSAGE_TYPE_VARIABLE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MESSAGE_TYPE_VARIABLE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MESSAGE_TYPE_VARIABLE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MSGTV_UID,  	MSGT_UID,  	MSGTV_NAME,  	MSGTV_DEFAULT_VALUE";
$proto0["m_strFrom"] = "FROM MESSAGE_TYPE_VARIABLE";
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
	"m_strName" => "MSGTV_UID",
	"m_strTable" => "MESSAGE_TYPE_VARIABLE",
	"m_srcTableName" => "MESSAGE_TYPE_VARIABLE"
));

$proto6["m_sql"] = "MSGTV_UID";
$proto6["m_srcTableName"] = "MESSAGE_TYPE_VARIABLE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGT_UID",
	"m_strTable" => "MESSAGE_TYPE_VARIABLE",
	"m_srcTableName" => "MESSAGE_TYPE_VARIABLE"
));

$proto8["m_sql"] = "MSGT_UID";
$proto8["m_srcTableName"] = "MESSAGE_TYPE_VARIABLE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGTV_NAME",
	"m_strTable" => "MESSAGE_TYPE_VARIABLE",
	"m_srcTableName" => "MESSAGE_TYPE_VARIABLE"
));

$proto10["m_sql"] = "MSGTV_NAME";
$proto10["m_srcTableName"] = "MESSAGE_TYPE_VARIABLE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGTV_DEFAULT_VALUE",
	"m_strTable" => "MESSAGE_TYPE_VARIABLE",
	"m_srcTableName" => "MESSAGE_TYPE_VARIABLE"
));

$proto12["m_sql"] = "MSGTV_DEFAULT_VALUE";
$proto12["m_srcTableName"] = "MESSAGE_TYPE_VARIABLE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "MESSAGE_TYPE_VARIABLE";
$proto15["m_srcTableName"] = "MESSAGE_TYPE_VARIABLE";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "MSGTV_UID";
$proto15["m_columns"][] = "MSGT_UID";
$proto15["m_columns"][] = "MSGTV_NAME";
$proto15["m_columns"][] = "MSGTV_DEFAULT_VALUE";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "MESSAGE_TYPE_VARIABLE";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "MESSAGE_TYPE_VARIABLE";
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
$proto0["m_srcTableName"]="MESSAGE_TYPE_VARIABLE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MESSAGE_TYPE_VARIABLE = createSqlQuery_MESSAGE_TYPE_VARIABLE();


	
						;

				

$tdataMESSAGE_TYPE_VARIABLE[".sqlquery"] = $queryData_MESSAGE_TYPE_VARIABLE;

$tableEvents["MESSAGE_TYPE_VARIABLE"] = new eventsBase;
$tdataMESSAGE_TYPE_VARIABLE[".hasEvents"] = false;

?>
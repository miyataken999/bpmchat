<?php
require_once(getabspath("classes/cipherer.php"));




$tdataISO_LOCATION = array();
	$tdataISO_LOCATION[".truncateText"] = true;
	$tdataISO_LOCATION[".NumberOfChars"] = 20;
	$tdataISO_LOCATION[".ShortName"] = "ISO_LOCATION";
	$tdataISO_LOCATION[".OwnerID"] = "";
	$tdataISO_LOCATION[".OriginalTable"] = "ISO_LOCATION";

//	field labels
$fieldLabelsISO_LOCATION = array();
$fieldToolTipsISO_LOCATION = array();
$pageTitlesISO_LOCATION = array();
$placeHoldersISO_LOCATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsISO_LOCATION["Japanese"] = array();
	$fieldToolTipsISO_LOCATION["Japanese"] = array();
	$placeHoldersISO_LOCATION["Japanese"] = array();
	$pageTitlesISO_LOCATION["Japanese"] = array();
	$fieldLabelsISO_LOCATION["Japanese"]["IC_UID"] = "IC UID";
	$fieldToolTipsISO_LOCATION["Japanese"]["IC_UID"] = "";
	$placeHoldersISO_LOCATION["Japanese"]["IC_UID"] = "";
	$fieldLabelsISO_LOCATION["Japanese"]["IL_UID"] = "ILのUID";
	$fieldToolTipsISO_LOCATION["Japanese"]["IL_UID"] = "";
	$placeHoldersISO_LOCATION["Japanese"]["IL_UID"] = "";
	$fieldLabelsISO_LOCATION["Japanese"]["IL_NAME"] = "IL名";
	$fieldToolTipsISO_LOCATION["Japanese"]["IL_NAME"] = "";
	$placeHoldersISO_LOCATION["Japanese"]["IL_NAME"] = "";
	$fieldLabelsISO_LOCATION["Japanese"]["IL_NORMAL_NAME"] = "IL通常の名前";
	$fieldToolTipsISO_LOCATION["Japanese"]["IL_NORMAL_NAME"] = "";
	$placeHoldersISO_LOCATION["Japanese"]["IL_NORMAL_NAME"] = "";
	$fieldLabelsISO_LOCATION["Japanese"]["IS_UID"] = "uidがあります";
	$fieldToolTipsISO_LOCATION["Japanese"]["IS_UID"] = "";
	$placeHoldersISO_LOCATION["Japanese"]["IS_UID"] = "";
	if (count($fieldToolTipsISO_LOCATION["Japanese"]))
		$tdataISO_LOCATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsISO_LOCATION["English"] = array();
	$fieldToolTipsISO_LOCATION["English"] = array();
	$placeHoldersISO_LOCATION["English"] = array();
	$pageTitlesISO_LOCATION["English"] = array();
	$fieldLabelsISO_LOCATION["English"]["IC_UID"] = "IC UID";
	$fieldToolTipsISO_LOCATION["English"]["IC_UID"] = "";
	$placeHoldersISO_LOCATION["English"]["IC_UID"] = "";
	$fieldLabelsISO_LOCATION["English"]["IL_UID"] = "ILのUID";
	$fieldToolTipsISO_LOCATION["English"]["IL_UID"] = "";
	$placeHoldersISO_LOCATION["English"]["IL_UID"] = "";
	$fieldLabelsISO_LOCATION["English"]["IL_NAME"] = "IL名";
	$fieldToolTipsISO_LOCATION["English"]["IL_NAME"] = "";
	$placeHoldersISO_LOCATION["English"]["IL_NAME"] = "";
	$fieldLabelsISO_LOCATION["English"]["IL_NORMAL_NAME"] = "IL通常の名前";
	$fieldToolTipsISO_LOCATION["English"]["IL_NORMAL_NAME"] = "";
	$placeHoldersISO_LOCATION["English"]["IL_NORMAL_NAME"] = "";
	$fieldLabelsISO_LOCATION["English"]["IS_UID"] = "uidがあります";
	$fieldToolTipsISO_LOCATION["English"]["IS_UID"] = "";
	$placeHoldersISO_LOCATION["English"]["IS_UID"] = "";
	if (count($fieldToolTipsISO_LOCATION["English"]))
		$tdataISO_LOCATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsISO_LOCATION[""] = array();
	$fieldToolTipsISO_LOCATION[""] = array();
	$placeHoldersISO_LOCATION[""] = array();
	$pageTitlesISO_LOCATION[""] = array();
	if (count($fieldToolTipsISO_LOCATION[""]))
		$tdataISO_LOCATION[".isUseToolTips"] = true;
}


	$tdataISO_LOCATION[".NCSearch"] = true;



$tdataISO_LOCATION[".shortTableName"] = "ISO_LOCATION";
$tdataISO_LOCATION[".nSecOptions"] = 0;
$tdataISO_LOCATION[".recsPerRowPrint"] = 1;
$tdataISO_LOCATION[".mainTableOwnerID"] = "";
$tdataISO_LOCATION[".moveNext"] = 0;
$tdataISO_LOCATION[".entityType"] = 0;

$tdataISO_LOCATION[".strOriginalTableName"] = "ISO_LOCATION";

	



$tdataISO_LOCATION[".showAddInPopup"] = false;

$tdataISO_LOCATION[".showEditInPopup"] = false;

$tdataISO_LOCATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataISO_LOCATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataISO_LOCATION[".fieldsForRegister"] = array();
	
$tdataISO_LOCATION[".listAjax"] = false;

	$tdataISO_LOCATION[".audit"] = true;

	$tdataISO_LOCATION[".locking"] = false;

$tdataISO_LOCATION[".edit"] = true;
$tdataISO_LOCATION[".afterEditAction"] = 1;
$tdataISO_LOCATION[".closePopupAfterEdit"] = 1;
$tdataISO_LOCATION[".afterEditActionDetTable"] = "";

$tdataISO_LOCATION[".add"] = true;
$tdataISO_LOCATION[".afterAddAction"] = 1;
$tdataISO_LOCATION[".closePopupAfterAdd"] = 1;
$tdataISO_LOCATION[".afterAddActionDetTable"] = "";

$tdataISO_LOCATION[".list"] = true;

$tdataISO_LOCATION[".inlineEdit"] = true;


$tdataISO_LOCATION[".reorderRecordsByHeader"] = true;
$tdataISO_LOCATION[".createSortByDropdown"] = true;
$tdataISO_LOCATION[".strSortControlSettingsJSON"] = "";



$tdataISO_LOCATION[".inlineAdd"] = true;
$tdataISO_LOCATION[".view"] = true;

$tdataISO_LOCATION[".import"] = true;

$tdataISO_LOCATION[".exportTo"] = true;

$tdataISO_LOCATION[".printFriendly"] = true;

$tdataISO_LOCATION[".delete"] = true;

$tdataISO_LOCATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataISO_LOCATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataISO_LOCATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataISO_LOCATION[".searchSaving"] = false;
//

$tdataISO_LOCATION[".showSearchPanel"] = true;
		$tdataISO_LOCATION[".flexibleSearch"] = true;

$tdataISO_LOCATION[".isUseAjaxSuggest"] = true;

$tdataISO_LOCATION[".rowHighlite"] = true;



				

$tdataISO_LOCATION[".ajaxCodeSnippetAdded"] = false;

$tdataISO_LOCATION[".buttonsAdded"] = false;

$tdataISO_LOCATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataISO_LOCATION[".isUseTimeForSearch"] = false;





$tdataISO_LOCATION[".allSearchFields"] = array();
$tdataISO_LOCATION[".filterFields"] = array();
$tdataISO_LOCATION[".requiredSearchFields"] = array();

$tdataISO_LOCATION[".allSearchFields"][] = "IC_UID";
	$tdataISO_LOCATION[".allSearchFields"][] = "IL_UID";
	$tdataISO_LOCATION[".allSearchFields"][] = "IL_NAME";
	$tdataISO_LOCATION[".allSearchFields"][] = "IL_NORMAL_NAME";
	$tdataISO_LOCATION[".allSearchFields"][] = "IS_UID";
	

$tdataISO_LOCATION[".googleLikeFields"] = array();
$tdataISO_LOCATION[".googleLikeFields"][] = "IC_UID";
$tdataISO_LOCATION[".googleLikeFields"][] = "IL_UID";
$tdataISO_LOCATION[".googleLikeFields"][] = "IL_NAME";
$tdataISO_LOCATION[".googleLikeFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".googleLikeFields"][] = "IS_UID";


$tdataISO_LOCATION[".advSearchFields"] = array();
$tdataISO_LOCATION[".advSearchFields"][] = "IC_UID";
$tdataISO_LOCATION[".advSearchFields"][] = "IL_UID";
$tdataISO_LOCATION[".advSearchFields"][] = "IL_NAME";
$tdataISO_LOCATION[".advSearchFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".advSearchFields"][] = "IS_UID";

$tdataISO_LOCATION[".tableType"] = "list";

$tdataISO_LOCATION[".printerPageOrientation"] = 0;
$tdataISO_LOCATION[".nPrinterPageScale"] = 100;

$tdataISO_LOCATION[".nPrinterSplitRecords"] = 40;

$tdataISO_LOCATION[".nPrinterPDFSplitRecords"] = 40;



$tdataISO_LOCATION[".geocodingEnabled"] = false;





$tdataISO_LOCATION[".listGridLayout"] = 3;


$tdataISO_LOCATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataISO_LOCATION[".pageSize"] = 20;

$tdataISO_LOCATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataISO_LOCATION[".strOrderBy"] = $tstrOrderBy;

$tdataISO_LOCATION[".orderindexes"] = array();

$tdataISO_LOCATION[".sqlHead"] = "SELECT IC_UID,  	IL_UID,  	IL_NAME,  	IL_NORMAL_NAME,  	IS_UID";
$tdataISO_LOCATION[".sqlFrom"] = "FROM ISO_LOCATION";
$tdataISO_LOCATION[".sqlWhereExpr"] = "";
$tdataISO_LOCATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataISO_LOCATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataISO_LOCATION[".arrGroupsPerPage"] = $arrGPP;

$tdataISO_LOCATION[".highlightSearchResults"] = true;

$tableKeysISO_LOCATION = array();
$tableKeysISO_LOCATION[] = "IC_UID";
$tableKeysISO_LOCATION[] = "IL_UID";
$tdataISO_LOCATION[".Keys"] = $tableKeysISO_LOCATION;

$tdataISO_LOCATION[".listFields"] = array();
$tdataISO_LOCATION[".listFields"][] = "IC_UID";
$tdataISO_LOCATION[".listFields"][] = "IL_UID";
$tdataISO_LOCATION[".listFields"][] = "IL_NAME";
$tdataISO_LOCATION[".listFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".listFields"][] = "IS_UID";

$tdataISO_LOCATION[".hideMobileList"] = array();


$tdataISO_LOCATION[".viewFields"] = array();
$tdataISO_LOCATION[".viewFields"][] = "IC_UID";
$tdataISO_LOCATION[".viewFields"][] = "IL_UID";
$tdataISO_LOCATION[".viewFields"][] = "IL_NAME";
$tdataISO_LOCATION[".viewFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".viewFields"][] = "IS_UID";

$tdataISO_LOCATION[".addFields"] = array();
$tdataISO_LOCATION[".addFields"][] = "IC_UID";
$tdataISO_LOCATION[".addFields"][] = "IL_UID";
$tdataISO_LOCATION[".addFields"][] = "IL_NAME";
$tdataISO_LOCATION[".addFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".addFields"][] = "IS_UID";

$tdataISO_LOCATION[".masterListFields"] = array();
$tdataISO_LOCATION[".masterListFields"][] = "IC_UID";
$tdataISO_LOCATION[".masterListFields"][] = "IL_UID";
$tdataISO_LOCATION[".masterListFields"][] = "IL_NAME";
$tdataISO_LOCATION[".masterListFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".masterListFields"][] = "IS_UID";

$tdataISO_LOCATION[".inlineAddFields"] = array();
$tdataISO_LOCATION[".inlineAddFields"][] = "IC_UID";
$tdataISO_LOCATION[".inlineAddFields"][] = "IL_UID";
$tdataISO_LOCATION[".inlineAddFields"][] = "IL_NAME";
$tdataISO_LOCATION[".inlineAddFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".inlineAddFields"][] = "IS_UID";

$tdataISO_LOCATION[".editFields"] = array();
$tdataISO_LOCATION[".editFields"][] = "IC_UID";
$tdataISO_LOCATION[".editFields"][] = "IL_UID";
$tdataISO_LOCATION[".editFields"][] = "IL_NAME";
$tdataISO_LOCATION[".editFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".editFields"][] = "IS_UID";

$tdataISO_LOCATION[".inlineEditFields"] = array();
$tdataISO_LOCATION[".inlineEditFields"][] = "IC_UID";
$tdataISO_LOCATION[".inlineEditFields"][] = "IL_UID";
$tdataISO_LOCATION[".inlineEditFields"][] = "IL_NAME";
$tdataISO_LOCATION[".inlineEditFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".inlineEditFields"][] = "IS_UID";

$tdataISO_LOCATION[".updateSelectedFields"] = array();
$tdataISO_LOCATION[".updateSelectedFields"][] = "IC_UID";
$tdataISO_LOCATION[".updateSelectedFields"][] = "IL_UID";
$tdataISO_LOCATION[".updateSelectedFields"][] = "IL_NAME";
$tdataISO_LOCATION[".updateSelectedFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".updateSelectedFields"][] = "IS_UID";


$tdataISO_LOCATION[".exportFields"] = array();
$tdataISO_LOCATION[".exportFields"][] = "IC_UID";
$tdataISO_LOCATION[".exportFields"][] = "IL_UID";
$tdataISO_LOCATION[".exportFields"][] = "IL_NAME";
$tdataISO_LOCATION[".exportFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".exportFields"][] = "IS_UID";

$tdataISO_LOCATION[".importFields"] = array();
$tdataISO_LOCATION[".importFields"][] = "IC_UID";
$tdataISO_LOCATION[".importFields"][] = "IL_UID";
$tdataISO_LOCATION[".importFields"][] = "IL_NAME";
$tdataISO_LOCATION[".importFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".importFields"][] = "IS_UID";

$tdataISO_LOCATION[".printFields"] = array();
$tdataISO_LOCATION[".printFields"][] = "IC_UID";
$tdataISO_LOCATION[".printFields"][] = "IL_UID";
$tdataISO_LOCATION[".printFields"][] = "IL_NAME";
$tdataISO_LOCATION[".printFields"][] = "IL_NORMAL_NAME";
$tdataISO_LOCATION[".printFields"][] = "IS_UID";

//	IC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IC_UID";
	$fdata["GoodName"] = "IC_UID";
	$fdata["ownerTable"] = "ISO_LOCATION";
	$fdata["Label"] = GetFieldLabel("ISO_LOCATION","IC_UID");
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

		$fdata["strField"] = "IC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IC_UID";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdataISO_LOCATION["IC_UID"] = $fdata;
//	IL_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IL_UID";
	$fdata["GoodName"] = "IL_UID";
	$fdata["ownerTable"] = "ISO_LOCATION";
	$fdata["Label"] = GetFieldLabel("ISO_LOCATION","IL_UID");
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

		$fdata["strField"] = "IL_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IL_UID";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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




	$tdataISO_LOCATION["IL_UID"] = $fdata;
//	IL_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IL_NAME";
	$fdata["GoodName"] = "IL_NAME";
	$fdata["ownerTable"] = "ISO_LOCATION";
	$fdata["Label"] = GetFieldLabel("ISO_LOCATION","IL_NAME");
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

		$fdata["strField"] = "IL_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IL_NAME";

	
	
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




	$tdataISO_LOCATION["IL_NAME"] = $fdata;
//	IL_NORMAL_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IL_NORMAL_NAME";
	$fdata["GoodName"] = "IL_NORMAL_NAME";
	$fdata["ownerTable"] = "ISO_LOCATION";
	$fdata["Label"] = GetFieldLabel("ISO_LOCATION","IL_NORMAL_NAME");
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

		$fdata["strField"] = "IL_NORMAL_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IL_NORMAL_NAME";

	
	
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




	$tdataISO_LOCATION["IL_NORMAL_NAME"] = $fdata;
//	IS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IS_UID";
	$fdata["GoodName"] = "IS_UID";
	$fdata["ownerTable"] = "ISO_LOCATION";
	$fdata["Label"] = GetFieldLabel("ISO_LOCATION","IS_UID");
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

		$fdata["strField"] = "IS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IS_UID";

	
	
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




	$tdataISO_LOCATION["IS_UID"] = $fdata;


$tables_data["ISO_LOCATION"]=&$tdataISO_LOCATION;
$field_labels["ISO_LOCATION"] = &$fieldLabelsISO_LOCATION;
$fieldToolTips["ISO_LOCATION"] = &$fieldToolTipsISO_LOCATION;
$placeHolders["ISO_LOCATION"] = &$placeHoldersISO_LOCATION;
$page_titles["ISO_LOCATION"] = &$pageTitlesISO_LOCATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ISO_LOCATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ISO_LOCATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ISO_LOCATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IC_UID,  	IL_UID,  	IL_NAME,  	IL_NORMAL_NAME,  	IS_UID";
$proto0["m_strFrom"] = "FROM ISO_LOCATION";
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
	"m_strName" => "IC_UID",
	"m_strTable" => "ISO_LOCATION",
	"m_srcTableName" => "ISO_LOCATION"
));

$proto6["m_sql"] = "IC_UID";
$proto6["m_srcTableName"] = "ISO_LOCATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IL_UID",
	"m_strTable" => "ISO_LOCATION",
	"m_srcTableName" => "ISO_LOCATION"
));

$proto8["m_sql"] = "IL_UID";
$proto8["m_srcTableName"] = "ISO_LOCATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IL_NAME",
	"m_strTable" => "ISO_LOCATION",
	"m_srcTableName" => "ISO_LOCATION"
));

$proto10["m_sql"] = "IL_NAME";
$proto10["m_srcTableName"] = "ISO_LOCATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IL_NORMAL_NAME",
	"m_strTable" => "ISO_LOCATION",
	"m_srcTableName" => "ISO_LOCATION"
));

$proto12["m_sql"] = "IL_NORMAL_NAME";
$proto12["m_srcTableName"] = "ISO_LOCATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IS_UID",
	"m_strTable" => "ISO_LOCATION",
	"m_srcTableName" => "ISO_LOCATION"
));

$proto14["m_sql"] = "IS_UID";
$proto14["m_srcTableName"] = "ISO_LOCATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "ISO_LOCATION";
$proto17["m_srcTableName"] = "ISO_LOCATION";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IC_UID";
$proto17["m_columns"][] = "IL_UID";
$proto17["m_columns"][] = "IL_NAME";
$proto17["m_columns"][] = "IL_NORMAL_NAME";
$proto17["m_columns"][] = "IS_UID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "ISO_LOCATION";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "ISO_LOCATION";
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
$proto0["m_srcTableName"]="ISO_LOCATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ISO_LOCATION = createSqlQuery_ISO_LOCATION();


	
						;

					

$tdataISO_LOCATION[".sqlquery"] = $queryData_ISO_LOCATION;

$tableEvents["ISO_LOCATION"] = new eventsBase;
$tdataISO_LOCATION[".hasEvents"] = false;

?>
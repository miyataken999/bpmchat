<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSTAGE = array();
	$tdataSTAGE[".truncateText"] = true;
	$tdataSTAGE[".NumberOfChars"] = 20;
	$tdataSTAGE[".ShortName"] = "STAGE";
	$tdataSTAGE[".OwnerID"] = "";
	$tdataSTAGE[".OriginalTable"] = "STAGE";

//	field labels
$fieldLabelsSTAGE = array();
$fieldToolTipsSTAGE = array();
$pageTitlesSTAGE = array();
$placeHoldersSTAGE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSTAGE["Japanese"] = array();
	$fieldToolTipsSTAGE["Japanese"] = array();
	$placeHoldersSTAGE["Japanese"] = array();
	$pageTitlesSTAGE["Japanese"] = array();
	$fieldLabelsSTAGE["Japanese"]["STG_UID"] = "STGのUID";
	$fieldToolTipsSTAGE["Japanese"]["STG_UID"] = "";
	$placeHoldersSTAGE["Japanese"]["STG_UID"] = "";
	$fieldLabelsSTAGE["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSTAGE["Japanese"]["PRO_UID"] = "";
	$placeHoldersSTAGE["Japanese"]["PRO_UID"] = "";
	$fieldLabelsSTAGE["Japanese"]["STG_POSX"] = "STG POSX";
	$fieldToolTipsSTAGE["Japanese"]["STG_POSX"] = "";
	$placeHoldersSTAGE["Japanese"]["STG_POSX"] = "";
	$fieldLabelsSTAGE["Japanese"]["STG_POSY"] = "STG POSY";
	$fieldToolTipsSTAGE["Japanese"]["STG_POSY"] = "";
	$placeHoldersSTAGE["Japanese"]["STG_POSY"] = "";
	$fieldLabelsSTAGE["Japanese"]["STG_INDEX"] = "STGインデックス";
	$fieldToolTipsSTAGE["Japanese"]["STG_INDEX"] = "";
	$placeHoldersSTAGE["Japanese"]["STG_INDEX"] = "";
	if (count($fieldToolTipsSTAGE["Japanese"]))
		$tdataSTAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSTAGE["English"] = array();
	$fieldToolTipsSTAGE["English"] = array();
	$placeHoldersSTAGE["English"] = array();
	$pageTitlesSTAGE["English"] = array();
	$fieldLabelsSTAGE["English"]["STG_UID"] = "STGのUID";
	$fieldToolTipsSTAGE["English"]["STG_UID"] = "";
	$placeHoldersSTAGE["English"]["STG_UID"] = "";
	$fieldLabelsSTAGE["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsSTAGE["English"]["PRO_UID"] = "";
	$placeHoldersSTAGE["English"]["PRO_UID"] = "";
	$fieldLabelsSTAGE["English"]["STG_POSX"] = "STG POSX";
	$fieldToolTipsSTAGE["English"]["STG_POSX"] = "";
	$placeHoldersSTAGE["English"]["STG_POSX"] = "";
	$fieldLabelsSTAGE["English"]["STG_POSY"] = "STG POSY";
	$fieldToolTipsSTAGE["English"]["STG_POSY"] = "";
	$placeHoldersSTAGE["English"]["STG_POSY"] = "";
	$fieldLabelsSTAGE["English"]["STG_INDEX"] = "STGインデックス";
	$fieldToolTipsSTAGE["English"]["STG_INDEX"] = "";
	$placeHoldersSTAGE["English"]["STG_INDEX"] = "";
	if (count($fieldToolTipsSTAGE["English"]))
		$tdataSTAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSTAGE[""] = array();
	$fieldToolTipsSTAGE[""] = array();
	$placeHoldersSTAGE[""] = array();
	$pageTitlesSTAGE[""] = array();
	if (count($fieldToolTipsSTAGE[""]))
		$tdataSTAGE[".isUseToolTips"] = true;
}


	$tdataSTAGE[".NCSearch"] = true;



$tdataSTAGE[".shortTableName"] = "STAGE";
$tdataSTAGE[".nSecOptions"] = 0;
$tdataSTAGE[".recsPerRowPrint"] = 1;
$tdataSTAGE[".mainTableOwnerID"] = "";
$tdataSTAGE[".moveNext"] = 0;
$tdataSTAGE[".entityType"] = 0;

$tdataSTAGE[".strOriginalTableName"] = "STAGE";

	



$tdataSTAGE[".showAddInPopup"] = false;

$tdataSTAGE[".showEditInPopup"] = false;

$tdataSTAGE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSTAGE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSTAGE[".fieldsForRegister"] = array();
	
$tdataSTAGE[".listAjax"] = false;

	$tdataSTAGE[".audit"] = true;

	$tdataSTAGE[".locking"] = false;

$tdataSTAGE[".edit"] = true;
$tdataSTAGE[".afterEditAction"] = 1;
$tdataSTAGE[".closePopupAfterEdit"] = 1;
$tdataSTAGE[".afterEditActionDetTable"] = "";

$tdataSTAGE[".add"] = true;
$tdataSTAGE[".afterAddAction"] = 1;
$tdataSTAGE[".closePopupAfterAdd"] = 1;
$tdataSTAGE[".afterAddActionDetTable"] = "";

$tdataSTAGE[".list"] = true;

$tdataSTAGE[".inlineEdit"] = true;


$tdataSTAGE[".reorderRecordsByHeader"] = true;
$tdataSTAGE[".createSortByDropdown"] = true;
$tdataSTAGE[".strSortControlSettingsJSON"] = "";



$tdataSTAGE[".inlineAdd"] = true;
$tdataSTAGE[".view"] = true;

$tdataSTAGE[".import"] = true;

$tdataSTAGE[".exportTo"] = true;

$tdataSTAGE[".printFriendly"] = true;

$tdataSTAGE[".delete"] = true;

$tdataSTAGE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSTAGE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSTAGE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSTAGE[".searchSaving"] = false;
//

$tdataSTAGE[".showSearchPanel"] = true;
		$tdataSTAGE[".flexibleSearch"] = true;

$tdataSTAGE[".isUseAjaxSuggest"] = true;

$tdataSTAGE[".rowHighlite"] = true;



				

$tdataSTAGE[".ajaxCodeSnippetAdded"] = false;

$tdataSTAGE[".buttonsAdded"] = false;

$tdataSTAGE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSTAGE[".isUseTimeForSearch"] = false;





$tdataSTAGE[".allSearchFields"] = array();
$tdataSTAGE[".filterFields"] = array();
$tdataSTAGE[".requiredSearchFields"] = array();

$tdataSTAGE[".allSearchFields"][] = "STG_UID";
	$tdataSTAGE[".allSearchFields"][] = "PRO_UID";
	$tdataSTAGE[".allSearchFields"][] = "STG_POSX";
	$tdataSTAGE[".allSearchFields"][] = "STG_POSY";
	$tdataSTAGE[".allSearchFields"][] = "STG_INDEX";
	

$tdataSTAGE[".googleLikeFields"] = array();
$tdataSTAGE[".googleLikeFields"][] = "STG_UID";
$tdataSTAGE[".googleLikeFields"][] = "PRO_UID";
$tdataSTAGE[".googleLikeFields"][] = "STG_POSX";
$tdataSTAGE[".googleLikeFields"][] = "STG_POSY";
$tdataSTAGE[".googleLikeFields"][] = "STG_INDEX";


$tdataSTAGE[".advSearchFields"] = array();
$tdataSTAGE[".advSearchFields"][] = "STG_UID";
$tdataSTAGE[".advSearchFields"][] = "PRO_UID";
$tdataSTAGE[".advSearchFields"][] = "STG_POSX";
$tdataSTAGE[".advSearchFields"][] = "STG_POSY";
$tdataSTAGE[".advSearchFields"][] = "STG_INDEX";

$tdataSTAGE[".tableType"] = "list";

$tdataSTAGE[".printerPageOrientation"] = 0;
$tdataSTAGE[".nPrinterPageScale"] = 100;

$tdataSTAGE[".nPrinterSplitRecords"] = 40;

$tdataSTAGE[".nPrinterPDFSplitRecords"] = 40;



$tdataSTAGE[".geocodingEnabled"] = false;





$tdataSTAGE[".listGridLayout"] = 3;


$tdataSTAGE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSTAGE[".pageSize"] = 20;

$tdataSTAGE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSTAGE[".strOrderBy"] = $tstrOrderBy;

$tdataSTAGE[".orderindexes"] = array();

$tdataSTAGE[".sqlHead"] = "SELECT STG_UID,  	PRO_UID,  	STG_POSX,  	STG_POSY,  	STG_INDEX";
$tdataSTAGE[".sqlFrom"] = "FROM STAGE";
$tdataSTAGE[".sqlWhereExpr"] = "";
$tdataSTAGE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSTAGE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSTAGE[".arrGroupsPerPage"] = $arrGPP;

$tdataSTAGE[".highlightSearchResults"] = true;

$tableKeysSTAGE = array();
$tableKeysSTAGE[] = "STG_UID";
$tdataSTAGE[".Keys"] = $tableKeysSTAGE;

$tdataSTAGE[".listFields"] = array();
$tdataSTAGE[".listFields"][] = "STG_UID";
$tdataSTAGE[".listFields"][] = "PRO_UID";
$tdataSTAGE[".listFields"][] = "STG_POSX";
$tdataSTAGE[".listFields"][] = "STG_POSY";
$tdataSTAGE[".listFields"][] = "STG_INDEX";

$tdataSTAGE[".hideMobileList"] = array();


$tdataSTAGE[".viewFields"] = array();
$tdataSTAGE[".viewFields"][] = "STG_UID";
$tdataSTAGE[".viewFields"][] = "PRO_UID";
$tdataSTAGE[".viewFields"][] = "STG_POSX";
$tdataSTAGE[".viewFields"][] = "STG_POSY";
$tdataSTAGE[".viewFields"][] = "STG_INDEX";

$tdataSTAGE[".addFields"] = array();
$tdataSTAGE[".addFields"][] = "STG_UID";
$tdataSTAGE[".addFields"][] = "PRO_UID";
$tdataSTAGE[".addFields"][] = "STG_POSX";
$tdataSTAGE[".addFields"][] = "STG_POSY";
$tdataSTAGE[".addFields"][] = "STG_INDEX";

$tdataSTAGE[".masterListFields"] = array();
$tdataSTAGE[".masterListFields"][] = "STG_UID";
$tdataSTAGE[".masterListFields"][] = "PRO_UID";
$tdataSTAGE[".masterListFields"][] = "STG_POSX";
$tdataSTAGE[".masterListFields"][] = "STG_POSY";
$tdataSTAGE[".masterListFields"][] = "STG_INDEX";

$tdataSTAGE[".inlineAddFields"] = array();
$tdataSTAGE[".inlineAddFields"][] = "STG_UID";
$tdataSTAGE[".inlineAddFields"][] = "PRO_UID";
$tdataSTAGE[".inlineAddFields"][] = "STG_POSX";
$tdataSTAGE[".inlineAddFields"][] = "STG_POSY";
$tdataSTAGE[".inlineAddFields"][] = "STG_INDEX";

$tdataSTAGE[".editFields"] = array();
$tdataSTAGE[".editFields"][] = "STG_UID";
$tdataSTAGE[".editFields"][] = "PRO_UID";
$tdataSTAGE[".editFields"][] = "STG_POSX";
$tdataSTAGE[".editFields"][] = "STG_POSY";
$tdataSTAGE[".editFields"][] = "STG_INDEX";

$tdataSTAGE[".inlineEditFields"] = array();
$tdataSTAGE[".inlineEditFields"][] = "STG_UID";
$tdataSTAGE[".inlineEditFields"][] = "PRO_UID";
$tdataSTAGE[".inlineEditFields"][] = "STG_POSX";
$tdataSTAGE[".inlineEditFields"][] = "STG_POSY";
$tdataSTAGE[".inlineEditFields"][] = "STG_INDEX";

$tdataSTAGE[".updateSelectedFields"] = array();
$tdataSTAGE[".updateSelectedFields"][] = "STG_UID";
$tdataSTAGE[".updateSelectedFields"][] = "PRO_UID";
$tdataSTAGE[".updateSelectedFields"][] = "STG_POSX";
$tdataSTAGE[".updateSelectedFields"][] = "STG_POSY";
$tdataSTAGE[".updateSelectedFields"][] = "STG_INDEX";


$tdataSTAGE[".exportFields"] = array();
$tdataSTAGE[".exportFields"][] = "STG_UID";
$tdataSTAGE[".exportFields"][] = "PRO_UID";
$tdataSTAGE[".exportFields"][] = "STG_POSX";
$tdataSTAGE[".exportFields"][] = "STG_POSY";
$tdataSTAGE[".exportFields"][] = "STG_INDEX";

$tdataSTAGE[".importFields"] = array();
$tdataSTAGE[".importFields"][] = "STG_UID";
$tdataSTAGE[".importFields"][] = "PRO_UID";
$tdataSTAGE[".importFields"][] = "STG_POSX";
$tdataSTAGE[".importFields"][] = "STG_POSY";
$tdataSTAGE[".importFields"][] = "STG_INDEX";

$tdataSTAGE[".printFields"] = array();
$tdataSTAGE[".printFields"][] = "STG_UID";
$tdataSTAGE[".printFields"][] = "PRO_UID";
$tdataSTAGE[".printFields"][] = "STG_POSX";
$tdataSTAGE[".printFields"][] = "STG_POSY";
$tdataSTAGE[".printFields"][] = "STG_INDEX";

//	STG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "STG_UID";
	$fdata["GoodName"] = "STG_UID";
	$fdata["ownerTable"] = "STAGE";
	$fdata["Label"] = GetFieldLabel("STAGE","STG_UID");
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

		$fdata["strField"] = "STG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STG_UID";

	
	
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




	$tdataSTAGE["STG_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "STAGE";
	$fdata["Label"] = GetFieldLabel("STAGE","PRO_UID");
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




	$tdataSTAGE["PRO_UID"] = $fdata;
//	STG_POSX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "STG_POSX";
	$fdata["GoodName"] = "STG_POSX";
	$fdata["ownerTable"] = "STAGE";
	$fdata["Label"] = GetFieldLabel("STAGE","STG_POSX");
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

		$fdata["strField"] = "STG_POSX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STG_POSX";

	
	
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




	$tdataSTAGE["STG_POSX"] = $fdata;
//	STG_POSY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "STG_POSY";
	$fdata["GoodName"] = "STG_POSY";
	$fdata["ownerTable"] = "STAGE";
	$fdata["Label"] = GetFieldLabel("STAGE","STG_POSY");
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

		$fdata["strField"] = "STG_POSY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STG_POSY";

	
	
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




	$tdataSTAGE["STG_POSY"] = $fdata;
//	STG_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "STG_INDEX";
	$fdata["GoodName"] = "STG_INDEX";
	$fdata["ownerTable"] = "STAGE";
	$fdata["Label"] = GetFieldLabel("STAGE","STG_INDEX");
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

		$fdata["strField"] = "STG_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STG_INDEX";

	
	
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




	$tdataSTAGE["STG_INDEX"] = $fdata;


$tables_data["STAGE"]=&$tdataSTAGE;
$field_labels["STAGE"] = &$fieldLabelsSTAGE;
$fieldToolTips["STAGE"] = &$fieldToolTipsSTAGE;
$placeHolders["STAGE"] = &$placeHoldersSTAGE;
$page_titles["STAGE"] = &$pageTitlesSTAGE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["STAGE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["STAGE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_STAGE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "STG_UID,  	PRO_UID,  	STG_POSX,  	STG_POSY,  	STG_INDEX";
$proto0["m_strFrom"] = "FROM STAGE";
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
	"m_strName" => "STG_UID",
	"m_strTable" => "STAGE",
	"m_srcTableName" => "STAGE"
));

$proto6["m_sql"] = "STG_UID";
$proto6["m_srcTableName"] = "STAGE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "STAGE",
	"m_srcTableName" => "STAGE"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "STAGE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "STG_POSX",
	"m_strTable" => "STAGE",
	"m_srcTableName" => "STAGE"
));

$proto10["m_sql"] = "STG_POSX";
$proto10["m_srcTableName"] = "STAGE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "STG_POSY",
	"m_strTable" => "STAGE",
	"m_srcTableName" => "STAGE"
));

$proto12["m_sql"] = "STG_POSY";
$proto12["m_srcTableName"] = "STAGE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "STG_INDEX",
	"m_strTable" => "STAGE",
	"m_srcTableName" => "STAGE"
));

$proto14["m_sql"] = "STG_INDEX";
$proto14["m_srcTableName"] = "STAGE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "STAGE";
$proto17["m_srcTableName"] = "STAGE";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "STG_UID";
$proto17["m_columns"][] = "PRO_UID";
$proto17["m_columns"][] = "STG_POSX";
$proto17["m_columns"][] = "STG_POSY";
$proto17["m_columns"][] = "STG_INDEX";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "STAGE";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "STAGE";
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
$proto0["m_srcTableName"]="STAGE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_STAGE = createSqlQuery_STAGE();


	
						;

					

$tdataSTAGE[".sqlquery"] = $queryData_STAGE;

$tableEvents["STAGE"] = new eventsBase;
$tdataSTAGE[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCASE_TRACKER = array();
	$tdataCASE_TRACKER[".truncateText"] = true;
	$tdataCASE_TRACKER[".NumberOfChars"] = 20;
	$tdataCASE_TRACKER[".ShortName"] = "CASE_TRACKER";
	$tdataCASE_TRACKER[".OwnerID"] = "";
	$tdataCASE_TRACKER[".OriginalTable"] = "CASE_TRACKER";

//	field labels
$fieldLabelsCASE_TRACKER = array();
$fieldToolTipsCASE_TRACKER = array();
$pageTitlesCASE_TRACKER = array();
$placeHoldersCASE_TRACKER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCASE_TRACKER["Japanese"] = array();
	$fieldToolTipsCASE_TRACKER["Japanese"] = array();
	$placeHoldersCASE_TRACKER["Japanese"] = array();
	$pageTitlesCASE_TRACKER["Japanese"] = array();
	$fieldLabelsCASE_TRACKER["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCASE_TRACKER["Japanese"]["PRO_UID"] = "";
	$placeHoldersCASE_TRACKER["Japanese"]["PRO_UID"] = "";
	$fieldLabelsCASE_TRACKER["Japanese"]["CT_MAP_TYPE"] = "CTマップタイプ";
	$fieldToolTipsCASE_TRACKER["Japanese"]["CT_MAP_TYPE"] = "";
	$placeHoldersCASE_TRACKER["Japanese"]["CT_MAP_TYPE"] = "";
	$fieldLabelsCASE_TRACKER["Japanese"]["CT_DERIVATION_HISTORY"] = "CT導出歴史";
	$fieldToolTipsCASE_TRACKER["Japanese"]["CT_DERIVATION_HISTORY"] = "";
	$placeHoldersCASE_TRACKER["Japanese"]["CT_DERIVATION_HISTORY"] = "";
	$fieldLabelsCASE_TRACKER["Japanese"]["CT_MESSAGE_HISTORY"] = "CTのメッセージ履歴";
	$fieldToolTipsCASE_TRACKER["Japanese"]["CT_MESSAGE_HISTORY"] = "";
	$placeHoldersCASE_TRACKER["Japanese"]["CT_MESSAGE_HISTORY"] = "";
	if (count($fieldToolTipsCASE_TRACKER["Japanese"]))
		$tdataCASE_TRACKER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCASE_TRACKER["English"] = array();
	$fieldToolTipsCASE_TRACKER["English"] = array();
	$placeHoldersCASE_TRACKER["English"] = array();
	$pageTitlesCASE_TRACKER["English"] = array();
	$fieldLabelsCASE_TRACKER["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCASE_TRACKER["English"]["PRO_UID"] = "";
	$placeHoldersCASE_TRACKER["English"]["PRO_UID"] = "";
	$fieldLabelsCASE_TRACKER["English"]["CT_MAP_TYPE"] = "CTマップタイプ";
	$fieldToolTipsCASE_TRACKER["English"]["CT_MAP_TYPE"] = "";
	$placeHoldersCASE_TRACKER["English"]["CT_MAP_TYPE"] = "";
	$fieldLabelsCASE_TRACKER["English"]["CT_DERIVATION_HISTORY"] = "CT導出歴史";
	$fieldToolTipsCASE_TRACKER["English"]["CT_DERIVATION_HISTORY"] = "";
	$placeHoldersCASE_TRACKER["English"]["CT_DERIVATION_HISTORY"] = "";
	$fieldLabelsCASE_TRACKER["English"]["CT_MESSAGE_HISTORY"] = "CTのメッセージ履歴";
	$fieldToolTipsCASE_TRACKER["English"]["CT_MESSAGE_HISTORY"] = "";
	$placeHoldersCASE_TRACKER["English"]["CT_MESSAGE_HISTORY"] = "";
	if (count($fieldToolTipsCASE_TRACKER["English"]))
		$tdataCASE_TRACKER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCASE_TRACKER[""] = array();
	$fieldToolTipsCASE_TRACKER[""] = array();
	$placeHoldersCASE_TRACKER[""] = array();
	$pageTitlesCASE_TRACKER[""] = array();
	if (count($fieldToolTipsCASE_TRACKER[""]))
		$tdataCASE_TRACKER[".isUseToolTips"] = true;
}


	$tdataCASE_TRACKER[".NCSearch"] = true;



$tdataCASE_TRACKER[".shortTableName"] = "CASE_TRACKER";
$tdataCASE_TRACKER[".nSecOptions"] = 0;
$tdataCASE_TRACKER[".recsPerRowPrint"] = 1;
$tdataCASE_TRACKER[".mainTableOwnerID"] = "";
$tdataCASE_TRACKER[".moveNext"] = 0;
$tdataCASE_TRACKER[".entityType"] = 0;

$tdataCASE_TRACKER[".strOriginalTableName"] = "CASE_TRACKER";

	



$tdataCASE_TRACKER[".showAddInPopup"] = false;

$tdataCASE_TRACKER[".showEditInPopup"] = false;

$tdataCASE_TRACKER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCASE_TRACKER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCASE_TRACKER[".fieldsForRegister"] = array();
	
$tdataCASE_TRACKER[".listAjax"] = false;

	$tdataCASE_TRACKER[".audit"] = true;

	$tdataCASE_TRACKER[".locking"] = false;

$tdataCASE_TRACKER[".edit"] = true;
$tdataCASE_TRACKER[".afterEditAction"] = 1;
$tdataCASE_TRACKER[".closePopupAfterEdit"] = 1;
$tdataCASE_TRACKER[".afterEditActionDetTable"] = "";

$tdataCASE_TRACKER[".add"] = true;
$tdataCASE_TRACKER[".afterAddAction"] = 1;
$tdataCASE_TRACKER[".closePopupAfterAdd"] = 1;
$tdataCASE_TRACKER[".afterAddActionDetTable"] = "";

$tdataCASE_TRACKER[".list"] = true;

$tdataCASE_TRACKER[".inlineEdit"] = true;


$tdataCASE_TRACKER[".reorderRecordsByHeader"] = true;
$tdataCASE_TRACKER[".createSortByDropdown"] = true;
$tdataCASE_TRACKER[".strSortControlSettingsJSON"] = "";



$tdataCASE_TRACKER[".inlineAdd"] = true;
$tdataCASE_TRACKER[".view"] = true;

$tdataCASE_TRACKER[".import"] = true;

$tdataCASE_TRACKER[".exportTo"] = true;

$tdataCASE_TRACKER[".printFriendly"] = true;

$tdataCASE_TRACKER[".delete"] = true;

$tdataCASE_TRACKER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCASE_TRACKER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCASE_TRACKER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCASE_TRACKER[".searchSaving"] = false;
//

$tdataCASE_TRACKER[".showSearchPanel"] = true;
		$tdataCASE_TRACKER[".flexibleSearch"] = true;

$tdataCASE_TRACKER[".isUseAjaxSuggest"] = true;

$tdataCASE_TRACKER[".rowHighlite"] = true;



				

$tdataCASE_TRACKER[".ajaxCodeSnippetAdded"] = false;

$tdataCASE_TRACKER[".buttonsAdded"] = false;

$tdataCASE_TRACKER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCASE_TRACKER[".isUseTimeForSearch"] = false;





$tdataCASE_TRACKER[".allSearchFields"] = array();
$tdataCASE_TRACKER[".filterFields"] = array();
$tdataCASE_TRACKER[".requiredSearchFields"] = array();

$tdataCASE_TRACKER[".allSearchFields"][] = "PRO_UID";
	$tdataCASE_TRACKER[".allSearchFields"][] = "CT_MAP_TYPE";
	$tdataCASE_TRACKER[".allSearchFields"][] = "CT_DERIVATION_HISTORY";
	$tdataCASE_TRACKER[".allSearchFields"][] = "CT_MESSAGE_HISTORY";
	

$tdataCASE_TRACKER[".googleLikeFields"] = array();
$tdataCASE_TRACKER[".googleLikeFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".googleLikeFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".googleLikeFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".googleLikeFields"][] = "CT_MESSAGE_HISTORY";


$tdataCASE_TRACKER[".advSearchFields"] = array();
$tdataCASE_TRACKER[".advSearchFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".advSearchFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".advSearchFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".advSearchFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".tableType"] = "list";

$tdataCASE_TRACKER[".printerPageOrientation"] = 0;
$tdataCASE_TRACKER[".nPrinterPageScale"] = 100;

$tdataCASE_TRACKER[".nPrinterSplitRecords"] = 40;

$tdataCASE_TRACKER[".nPrinterPDFSplitRecords"] = 40;



$tdataCASE_TRACKER[".geocodingEnabled"] = false;





$tdataCASE_TRACKER[".listGridLayout"] = 3;


$tdataCASE_TRACKER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCASE_TRACKER[".pageSize"] = 20;

$tdataCASE_TRACKER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCASE_TRACKER[".strOrderBy"] = $tstrOrderBy;

$tdataCASE_TRACKER[".orderindexes"] = array();

$tdataCASE_TRACKER[".sqlHead"] = "SELECT PRO_UID,  	CT_MAP_TYPE,  	CT_DERIVATION_HISTORY,  	CT_MESSAGE_HISTORY";
$tdataCASE_TRACKER[".sqlFrom"] = "FROM CASE_TRACKER";
$tdataCASE_TRACKER[".sqlWhereExpr"] = "";
$tdataCASE_TRACKER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCASE_TRACKER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCASE_TRACKER[".arrGroupsPerPage"] = $arrGPP;

$tdataCASE_TRACKER[".highlightSearchResults"] = true;

$tableKeysCASE_TRACKER = array();
$tableKeysCASE_TRACKER[] = "PRO_UID";
$tdataCASE_TRACKER[".Keys"] = $tableKeysCASE_TRACKER;

$tdataCASE_TRACKER[".listFields"] = array();
$tdataCASE_TRACKER[".listFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".listFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".listFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".listFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".hideMobileList"] = array();


$tdataCASE_TRACKER[".viewFields"] = array();
$tdataCASE_TRACKER[".viewFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".viewFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".viewFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".viewFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".addFields"] = array();
$tdataCASE_TRACKER[".addFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".addFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".addFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".addFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".masterListFields"] = array();
$tdataCASE_TRACKER[".masterListFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".masterListFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".masterListFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".masterListFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".inlineAddFields"] = array();
$tdataCASE_TRACKER[".inlineAddFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".inlineAddFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".inlineAddFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".inlineAddFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".editFields"] = array();
$tdataCASE_TRACKER[".editFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".editFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".editFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".editFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".inlineEditFields"] = array();
$tdataCASE_TRACKER[".inlineEditFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".inlineEditFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".inlineEditFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".inlineEditFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".updateSelectedFields"] = array();
$tdataCASE_TRACKER[".updateSelectedFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".updateSelectedFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".updateSelectedFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".updateSelectedFields"][] = "CT_MESSAGE_HISTORY";


$tdataCASE_TRACKER[".exportFields"] = array();
$tdataCASE_TRACKER[".exportFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".exportFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".exportFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".exportFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".importFields"] = array();
$tdataCASE_TRACKER[".importFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".importFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".importFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".importFields"][] = "CT_MESSAGE_HISTORY";

$tdataCASE_TRACKER[".printFields"] = array();
$tdataCASE_TRACKER[".printFields"][] = "PRO_UID";
$tdataCASE_TRACKER[".printFields"][] = "CT_MAP_TYPE";
$tdataCASE_TRACKER[".printFields"][] = "CT_DERIVATION_HISTORY";
$tdataCASE_TRACKER[".printFields"][] = "CT_MESSAGE_HISTORY";

//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "CASE_TRACKER";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER","PRO_UID");
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




	$tdataCASE_TRACKER["PRO_UID"] = $fdata;
//	CT_MAP_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CT_MAP_TYPE";
	$fdata["GoodName"] = "CT_MAP_TYPE";
	$fdata["ownerTable"] = "CASE_TRACKER";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER","CT_MAP_TYPE");
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

		$fdata["strField"] = "CT_MAP_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CT_MAP_TYPE";

	
	
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




	$tdataCASE_TRACKER["CT_MAP_TYPE"] = $fdata;
//	CT_DERIVATION_HISTORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CT_DERIVATION_HISTORY";
	$fdata["GoodName"] = "CT_DERIVATION_HISTORY";
	$fdata["ownerTable"] = "CASE_TRACKER";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER","CT_DERIVATION_HISTORY");
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

		$fdata["strField"] = "CT_DERIVATION_HISTORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CT_DERIVATION_HISTORY";

	
	
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




	$tdataCASE_TRACKER["CT_DERIVATION_HISTORY"] = $fdata;
//	CT_MESSAGE_HISTORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CT_MESSAGE_HISTORY";
	$fdata["GoodName"] = "CT_MESSAGE_HISTORY";
	$fdata["ownerTable"] = "CASE_TRACKER";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER","CT_MESSAGE_HISTORY");
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

		$fdata["strField"] = "CT_MESSAGE_HISTORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CT_MESSAGE_HISTORY";

	
	
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




	$tdataCASE_TRACKER["CT_MESSAGE_HISTORY"] = $fdata;


$tables_data["CASE_TRACKER"]=&$tdataCASE_TRACKER;
$field_labels["CASE_TRACKER"] = &$fieldLabelsCASE_TRACKER;
$fieldToolTips["CASE_TRACKER"] = &$fieldToolTipsCASE_TRACKER;
$placeHolders["CASE_TRACKER"] = &$placeHoldersCASE_TRACKER;
$page_titles["CASE_TRACKER"] = &$pageTitlesCASE_TRACKER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CASE_TRACKER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CASE_TRACKER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CASE_TRACKER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRO_UID,  	CT_MAP_TYPE,  	CT_DERIVATION_HISTORY,  	CT_MESSAGE_HISTORY";
$proto0["m_strFrom"] = "FROM CASE_TRACKER";
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
	"m_strName" => "PRO_UID",
	"m_strTable" => "CASE_TRACKER",
	"m_srcTableName" => "CASE_TRACKER"
));

$proto6["m_sql"] = "PRO_UID";
$proto6["m_srcTableName"] = "CASE_TRACKER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CT_MAP_TYPE",
	"m_strTable" => "CASE_TRACKER",
	"m_srcTableName" => "CASE_TRACKER"
));

$proto8["m_sql"] = "CT_MAP_TYPE";
$proto8["m_srcTableName"] = "CASE_TRACKER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CT_DERIVATION_HISTORY",
	"m_strTable" => "CASE_TRACKER",
	"m_srcTableName" => "CASE_TRACKER"
));

$proto10["m_sql"] = "CT_DERIVATION_HISTORY";
$proto10["m_srcTableName"] = "CASE_TRACKER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CT_MESSAGE_HISTORY",
	"m_strTable" => "CASE_TRACKER",
	"m_srcTableName" => "CASE_TRACKER"
));

$proto12["m_sql"] = "CT_MESSAGE_HISTORY";
$proto12["m_srcTableName"] = "CASE_TRACKER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "CASE_TRACKER";
$proto15["m_srcTableName"] = "CASE_TRACKER";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "PRO_UID";
$proto15["m_columns"][] = "CT_MAP_TYPE";
$proto15["m_columns"][] = "CT_DERIVATION_HISTORY";
$proto15["m_columns"][] = "CT_MESSAGE_HISTORY";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "CASE_TRACKER";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "CASE_TRACKER";
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
$proto0["m_srcTableName"]="CASE_TRACKER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CASE_TRACKER = createSqlQuery_CASE_TRACKER();


	
						;

				

$tdataCASE_TRACKER[".sqlquery"] = $queryData_CASE_TRACKER;

$tableEvents["CASE_TRACKER"] = new eventsBase;
$tdataCASE_TRACKER[".hasEvents"] = false;

?>
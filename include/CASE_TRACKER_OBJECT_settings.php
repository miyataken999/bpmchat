<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCASE_TRACKER_OBJECT = array();
	$tdataCASE_TRACKER_OBJECT[".truncateText"] = true;
	$tdataCASE_TRACKER_OBJECT[".NumberOfChars"] = 20;
	$tdataCASE_TRACKER_OBJECT[".ShortName"] = "CASE_TRACKER_OBJECT";
	$tdataCASE_TRACKER_OBJECT[".OwnerID"] = "";
	$tdataCASE_TRACKER_OBJECT[".OriginalTable"] = "CASE_TRACKER_OBJECT";

//	field labels
$fieldLabelsCASE_TRACKER_OBJECT = array();
$fieldToolTipsCASE_TRACKER_OBJECT = array();
$pageTitlesCASE_TRACKER_OBJECT = array();
$placeHoldersCASE_TRACKER_OBJECT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"] = array();
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"] = array();
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"] = array();
	$pageTitlesCASE_TRACKER_OBJECT["Japanese"] = array();
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"]["CTO_UID"] = "CTOのUID";
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]["CTO_UID"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"]["CTO_UID"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]["PRO_UID"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"]["PRO_UID"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"]["CTO_TYPE_OBJ"] = "CTOタイプOBJ";
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]["CTO_TYPE_OBJ"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"]["CTO_TYPE_OBJ"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"]["CTO_UID_OBJ"] = "CTOのuid OBJ";
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]["CTO_UID_OBJ"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"]["CTO_UID_OBJ"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"]["CTO_CONDITION"] = "CTO条件";
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]["CTO_CONDITION"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"]["CTO_CONDITION"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["Japanese"]["CTO_POSITION"] = "CTOの位置";
	$fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]["CTO_POSITION"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["Japanese"]["CTO_POSITION"] = "";
	if (count($fieldToolTipsCASE_TRACKER_OBJECT["Japanese"]))
		$tdataCASE_TRACKER_OBJECT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCASE_TRACKER_OBJECT["English"] = array();
	$fieldToolTipsCASE_TRACKER_OBJECT["English"] = array();
	$placeHoldersCASE_TRACKER_OBJECT["English"] = array();
	$pageTitlesCASE_TRACKER_OBJECT["English"] = array();
	$fieldLabelsCASE_TRACKER_OBJECT["English"]["CTO_UID"] = "CTOのUID";
	$fieldToolTipsCASE_TRACKER_OBJECT["English"]["CTO_UID"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["English"]["CTO_UID"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsCASE_TRACKER_OBJECT["English"]["PRO_UID"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["English"]["PRO_UID"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["English"]["CTO_TYPE_OBJ"] = "CTOタイプOBJ";
	$fieldToolTipsCASE_TRACKER_OBJECT["English"]["CTO_TYPE_OBJ"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["English"]["CTO_TYPE_OBJ"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["English"]["CTO_UID_OBJ"] = "CTOのuid OBJ";
	$fieldToolTipsCASE_TRACKER_OBJECT["English"]["CTO_UID_OBJ"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["English"]["CTO_UID_OBJ"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["English"]["CTO_CONDITION"] = "CTO条件";
	$fieldToolTipsCASE_TRACKER_OBJECT["English"]["CTO_CONDITION"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["English"]["CTO_CONDITION"] = "";
	$fieldLabelsCASE_TRACKER_OBJECT["English"]["CTO_POSITION"] = "CTOの位置";
	$fieldToolTipsCASE_TRACKER_OBJECT["English"]["CTO_POSITION"] = "";
	$placeHoldersCASE_TRACKER_OBJECT["English"]["CTO_POSITION"] = "";
	if (count($fieldToolTipsCASE_TRACKER_OBJECT["English"]))
		$tdataCASE_TRACKER_OBJECT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCASE_TRACKER_OBJECT[""] = array();
	$fieldToolTipsCASE_TRACKER_OBJECT[""] = array();
	$placeHoldersCASE_TRACKER_OBJECT[""] = array();
	$pageTitlesCASE_TRACKER_OBJECT[""] = array();
	if (count($fieldToolTipsCASE_TRACKER_OBJECT[""]))
		$tdataCASE_TRACKER_OBJECT[".isUseToolTips"] = true;
}


	$tdataCASE_TRACKER_OBJECT[".NCSearch"] = true;



$tdataCASE_TRACKER_OBJECT[".shortTableName"] = "CASE_TRACKER_OBJECT";
$tdataCASE_TRACKER_OBJECT[".nSecOptions"] = 0;
$tdataCASE_TRACKER_OBJECT[".recsPerRowPrint"] = 1;
$tdataCASE_TRACKER_OBJECT[".mainTableOwnerID"] = "";
$tdataCASE_TRACKER_OBJECT[".moveNext"] = 0;
$tdataCASE_TRACKER_OBJECT[".entityType"] = 0;

$tdataCASE_TRACKER_OBJECT[".strOriginalTableName"] = "CASE_TRACKER_OBJECT";

	



$tdataCASE_TRACKER_OBJECT[".showAddInPopup"] = false;

$tdataCASE_TRACKER_OBJECT[".showEditInPopup"] = false;

$tdataCASE_TRACKER_OBJECT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCASE_TRACKER_OBJECT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCASE_TRACKER_OBJECT[".fieldsForRegister"] = array();
	
$tdataCASE_TRACKER_OBJECT[".listAjax"] = false;

	$tdataCASE_TRACKER_OBJECT[".audit"] = true;

	$tdataCASE_TRACKER_OBJECT[".locking"] = false;

$tdataCASE_TRACKER_OBJECT[".edit"] = true;
$tdataCASE_TRACKER_OBJECT[".afterEditAction"] = 1;
$tdataCASE_TRACKER_OBJECT[".closePopupAfterEdit"] = 1;
$tdataCASE_TRACKER_OBJECT[".afterEditActionDetTable"] = "";

$tdataCASE_TRACKER_OBJECT[".add"] = true;
$tdataCASE_TRACKER_OBJECT[".afterAddAction"] = 1;
$tdataCASE_TRACKER_OBJECT[".closePopupAfterAdd"] = 1;
$tdataCASE_TRACKER_OBJECT[".afterAddActionDetTable"] = "";

$tdataCASE_TRACKER_OBJECT[".list"] = true;

$tdataCASE_TRACKER_OBJECT[".inlineEdit"] = true;


$tdataCASE_TRACKER_OBJECT[".reorderRecordsByHeader"] = true;
$tdataCASE_TRACKER_OBJECT[".createSortByDropdown"] = true;
$tdataCASE_TRACKER_OBJECT[".strSortControlSettingsJSON"] = "";



$tdataCASE_TRACKER_OBJECT[".inlineAdd"] = true;
$tdataCASE_TRACKER_OBJECT[".view"] = true;

$tdataCASE_TRACKER_OBJECT[".import"] = true;

$tdataCASE_TRACKER_OBJECT[".exportTo"] = true;

$tdataCASE_TRACKER_OBJECT[".printFriendly"] = true;

$tdataCASE_TRACKER_OBJECT[".delete"] = true;

$tdataCASE_TRACKER_OBJECT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCASE_TRACKER_OBJECT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCASE_TRACKER_OBJECT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCASE_TRACKER_OBJECT[".searchSaving"] = false;
//

$tdataCASE_TRACKER_OBJECT[".showSearchPanel"] = true;
		$tdataCASE_TRACKER_OBJECT[".flexibleSearch"] = true;

$tdataCASE_TRACKER_OBJECT[".isUseAjaxSuggest"] = true;

$tdataCASE_TRACKER_OBJECT[".rowHighlite"] = true;



				

$tdataCASE_TRACKER_OBJECT[".ajaxCodeSnippetAdded"] = false;

$tdataCASE_TRACKER_OBJECT[".buttonsAdded"] = false;

$tdataCASE_TRACKER_OBJECT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCASE_TRACKER_OBJECT[".isUseTimeForSearch"] = false;





$tdataCASE_TRACKER_OBJECT[".allSearchFields"] = array();
$tdataCASE_TRACKER_OBJECT[".filterFields"] = array();
$tdataCASE_TRACKER_OBJECT[".requiredSearchFields"] = array();

$tdataCASE_TRACKER_OBJECT[".allSearchFields"][] = "CTO_UID";
	$tdataCASE_TRACKER_OBJECT[".allSearchFields"][] = "PRO_UID";
	$tdataCASE_TRACKER_OBJECT[".allSearchFields"][] = "CTO_TYPE_OBJ";
	$tdataCASE_TRACKER_OBJECT[".allSearchFields"][] = "CTO_UID_OBJ";
	$tdataCASE_TRACKER_OBJECT[".allSearchFields"][] = "CTO_CONDITION";
	$tdataCASE_TRACKER_OBJECT[".allSearchFields"][] = "CTO_POSITION";
	

$tdataCASE_TRACKER_OBJECT[".googleLikeFields"] = array();
$tdataCASE_TRACKER_OBJECT[".googleLikeFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".googleLikeFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".googleLikeFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".googleLikeFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".googleLikeFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".googleLikeFields"][] = "CTO_POSITION";


$tdataCASE_TRACKER_OBJECT[".advSearchFields"] = array();
$tdataCASE_TRACKER_OBJECT[".advSearchFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".advSearchFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".advSearchFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".advSearchFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".advSearchFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".advSearchFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".tableType"] = "list";

$tdataCASE_TRACKER_OBJECT[".printerPageOrientation"] = 0;
$tdataCASE_TRACKER_OBJECT[".nPrinterPageScale"] = 100;

$tdataCASE_TRACKER_OBJECT[".nPrinterSplitRecords"] = 40;

$tdataCASE_TRACKER_OBJECT[".nPrinterPDFSplitRecords"] = 40;



$tdataCASE_TRACKER_OBJECT[".geocodingEnabled"] = false;





$tdataCASE_TRACKER_OBJECT[".listGridLayout"] = 3;


$tdataCASE_TRACKER_OBJECT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCASE_TRACKER_OBJECT[".pageSize"] = 20;

$tdataCASE_TRACKER_OBJECT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCASE_TRACKER_OBJECT[".strOrderBy"] = $tstrOrderBy;

$tdataCASE_TRACKER_OBJECT[".orderindexes"] = array();

$tdataCASE_TRACKER_OBJECT[".sqlHead"] = "SELECT CTO_UID,  	PRO_UID,  	CTO_TYPE_OBJ,  	CTO_UID_OBJ,  	CTO_CONDITION,  	CTO_POSITION";
$tdataCASE_TRACKER_OBJECT[".sqlFrom"] = "FROM CASE_TRACKER_OBJECT";
$tdataCASE_TRACKER_OBJECT[".sqlWhereExpr"] = "";
$tdataCASE_TRACKER_OBJECT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCASE_TRACKER_OBJECT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCASE_TRACKER_OBJECT[".arrGroupsPerPage"] = $arrGPP;

$tdataCASE_TRACKER_OBJECT[".highlightSearchResults"] = true;

$tableKeysCASE_TRACKER_OBJECT = array();
$tableKeysCASE_TRACKER_OBJECT[] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".Keys"] = $tableKeysCASE_TRACKER_OBJECT;

$tdataCASE_TRACKER_OBJECT[".listFields"] = array();
$tdataCASE_TRACKER_OBJECT[".listFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".listFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".listFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".listFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".listFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".listFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".hideMobileList"] = array();


$tdataCASE_TRACKER_OBJECT[".viewFields"] = array();
$tdataCASE_TRACKER_OBJECT[".viewFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".viewFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".viewFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".viewFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".viewFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".viewFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".addFields"] = array();
$tdataCASE_TRACKER_OBJECT[".addFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".addFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".addFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".addFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".addFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".addFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".masterListFields"] = array();
$tdataCASE_TRACKER_OBJECT[".masterListFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".masterListFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".masterListFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".masterListFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".masterListFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".masterListFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".inlineAddFields"] = array();
$tdataCASE_TRACKER_OBJECT[".inlineAddFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".inlineAddFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".inlineAddFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".inlineAddFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".inlineAddFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".inlineAddFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".editFields"] = array();
$tdataCASE_TRACKER_OBJECT[".editFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".editFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".editFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".editFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".editFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".editFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".inlineEditFields"] = array();
$tdataCASE_TRACKER_OBJECT[".inlineEditFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".inlineEditFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".inlineEditFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".inlineEditFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".inlineEditFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".inlineEditFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"] = array();
$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".updateSelectedFields"][] = "CTO_POSITION";


$tdataCASE_TRACKER_OBJECT[".exportFields"] = array();
$tdataCASE_TRACKER_OBJECT[".exportFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".exportFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".exportFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".exportFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".exportFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".exportFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".importFields"] = array();
$tdataCASE_TRACKER_OBJECT[".importFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".importFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".importFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".importFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".importFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".importFields"][] = "CTO_POSITION";

$tdataCASE_TRACKER_OBJECT[".printFields"] = array();
$tdataCASE_TRACKER_OBJECT[".printFields"][] = "CTO_UID";
$tdataCASE_TRACKER_OBJECT[".printFields"][] = "PRO_UID";
$tdataCASE_TRACKER_OBJECT[".printFields"][] = "CTO_TYPE_OBJ";
$tdataCASE_TRACKER_OBJECT[".printFields"][] = "CTO_UID_OBJ";
$tdataCASE_TRACKER_OBJECT[".printFields"][] = "CTO_CONDITION";
$tdataCASE_TRACKER_OBJECT[".printFields"][] = "CTO_POSITION";

//	CTO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CTO_UID";
	$fdata["GoodName"] = "CTO_UID";
	$fdata["ownerTable"] = "CASE_TRACKER_OBJECT";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER_OBJECT","CTO_UID");
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

		$fdata["strField"] = "CTO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTO_UID";

	
	
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




	$tdataCASE_TRACKER_OBJECT["CTO_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "CASE_TRACKER_OBJECT";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER_OBJECT","PRO_UID");
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




	$tdataCASE_TRACKER_OBJECT["PRO_UID"] = $fdata;
//	CTO_TYPE_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CTO_TYPE_OBJ";
	$fdata["GoodName"] = "CTO_TYPE_OBJ";
	$fdata["ownerTable"] = "CASE_TRACKER_OBJECT";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER_OBJECT","CTO_TYPE_OBJ");
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

		$fdata["strField"] = "CTO_TYPE_OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTO_TYPE_OBJ";

	
	
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




	$tdataCASE_TRACKER_OBJECT["CTO_TYPE_OBJ"] = $fdata;
//	CTO_UID_OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CTO_UID_OBJ";
	$fdata["GoodName"] = "CTO_UID_OBJ";
	$fdata["ownerTable"] = "CASE_TRACKER_OBJECT";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER_OBJECT","CTO_UID_OBJ");
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

		$fdata["strField"] = "CTO_UID_OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTO_UID_OBJ";

	
	
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




	$tdataCASE_TRACKER_OBJECT["CTO_UID_OBJ"] = $fdata;
//	CTO_CONDITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CTO_CONDITION";
	$fdata["GoodName"] = "CTO_CONDITION";
	$fdata["ownerTable"] = "CASE_TRACKER_OBJECT";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER_OBJECT","CTO_CONDITION");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "CTO_CONDITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTO_CONDITION";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataCASE_TRACKER_OBJECT["CTO_CONDITION"] = $fdata;
//	CTO_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CTO_POSITION";
	$fdata["GoodName"] = "CTO_POSITION";
	$fdata["ownerTable"] = "CASE_TRACKER_OBJECT";
	$fdata["Label"] = GetFieldLabel("CASE_TRACKER_OBJECT","CTO_POSITION");
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

		$fdata["strField"] = "CTO_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTO_POSITION";

	
	
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




	$tdataCASE_TRACKER_OBJECT["CTO_POSITION"] = $fdata;


$tables_data["CASE_TRACKER_OBJECT"]=&$tdataCASE_TRACKER_OBJECT;
$field_labels["CASE_TRACKER_OBJECT"] = &$fieldLabelsCASE_TRACKER_OBJECT;
$fieldToolTips["CASE_TRACKER_OBJECT"] = &$fieldToolTipsCASE_TRACKER_OBJECT;
$placeHolders["CASE_TRACKER_OBJECT"] = &$placeHoldersCASE_TRACKER_OBJECT;
$page_titles["CASE_TRACKER_OBJECT"] = &$pageTitlesCASE_TRACKER_OBJECT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CASE_TRACKER_OBJECT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CASE_TRACKER_OBJECT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CASE_TRACKER_OBJECT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CTO_UID,  	PRO_UID,  	CTO_TYPE_OBJ,  	CTO_UID_OBJ,  	CTO_CONDITION,  	CTO_POSITION";
$proto0["m_strFrom"] = "FROM CASE_TRACKER_OBJECT";
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
	"m_strName" => "CTO_UID",
	"m_strTable" => "CASE_TRACKER_OBJECT",
	"m_srcTableName" => "CASE_TRACKER_OBJECT"
));

$proto6["m_sql"] = "CTO_UID";
$proto6["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "CASE_TRACKER_OBJECT",
	"m_srcTableName" => "CASE_TRACKER_OBJECT"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CTO_TYPE_OBJ",
	"m_strTable" => "CASE_TRACKER_OBJECT",
	"m_srcTableName" => "CASE_TRACKER_OBJECT"
));

$proto10["m_sql"] = "CTO_TYPE_OBJ";
$proto10["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CTO_UID_OBJ",
	"m_strTable" => "CASE_TRACKER_OBJECT",
	"m_srcTableName" => "CASE_TRACKER_OBJECT"
));

$proto12["m_sql"] = "CTO_UID_OBJ";
$proto12["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CTO_CONDITION",
	"m_strTable" => "CASE_TRACKER_OBJECT",
	"m_srcTableName" => "CASE_TRACKER_OBJECT"
));

$proto14["m_sql"] = "CTO_CONDITION";
$proto14["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CTO_POSITION",
	"m_strTable" => "CASE_TRACKER_OBJECT",
	"m_srcTableName" => "CASE_TRACKER_OBJECT"
));

$proto16["m_sql"] = "CTO_POSITION";
$proto16["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "CASE_TRACKER_OBJECT";
$proto19["m_srcTableName"] = "CASE_TRACKER_OBJECT";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "CTO_UID";
$proto19["m_columns"][] = "PRO_UID";
$proto19["m_columns"][] = "CTO_TYPE_OBJ";
$proto19["m_columns"][] = "CTO_UID_OBJ";
$proto19["m_columns"][] = "CTO_CONDITION";
$proto19["m_columns"][] = "CTO_POSITION";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "CASE_TRACKER_OBJECT";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "CASE_TRACKER_OBJECT";
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
$proto0["m_srcTableName"]="CASE_TRACKER_OBJECT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CASE_TRACKER_OBJECT = createSqlQuery_CASE_TRACKER_OBJECT();


	
						;

						

$tdataCASE_TRACKER_OBJECT[".sqlquery"] = $queryData_CASE_TRACKER_OBJECT;

$tableEvents["CASE_TRACKER_OBJECT"] = new eventsBase;
$tdataCASE_TRACKER_OBJECT[".hasEvents"] = false;

?>
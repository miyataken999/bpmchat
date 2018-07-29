<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLIST_UNASSIGNED_GROUP = array();
	$tdataLIST_UNASSIGNED_GROUP[".truncateText"] = true;
	$tdataLIST_UNASSIGNED_GROUP[".NumberOfChars"] = 20;
	$tdataLIST_UNASSIGNED_GROUP[".ShortName"] = "LIST_UNASSIGNED_GROUP";
	$tdataLIST_UNASSIGNED_GROUP[".OwnerID"] = "";
	$tdataLIST_UNASSIGNED_GROUP[".OriginalTable"] = "LIST_UNASSIGNED_GROUP";

//	field labels
$fieldLabelsLIST_UNASSIGNED_GROUP = array();
$fieldToolTipsLIST_UNASSIGNED_GROUP = array();
$pageTitlesLIST_UNASSIGNED_GROUP = array();
$placeHoldersLIST_UNASSIGNED_GROUP = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLIST_UNASSIGNED_GROUP["Japanese"] = array();
	$fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"] = array();
	$placeHoldersLIST_UNASSIGNED_GROUP["Japanese"] = array();
	$pageTitlesLIST_UNASSIGNED_GROUP["Japanese"] = array();
	$fieldLabelsLIST_UNASSIGNED_GROUP["Japanese"]["UNA_UID"] = "UNA UID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"]["UNA_UID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["Japanese"]["UNA_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"]["USR_UID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["Japanese"]["USR_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["Japanese"]["TYPE"] = "タイプ";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"]["TYPE"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["Japanese"]["TYPE"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["Japanese"]["TYP_UID"] = "標準のUID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"]["TYP_UID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["Japanese"]["TYP_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"]["USR_ID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["Japanese"]["USR_ID"] = "";
	if (count($fieldToolTipsLIST_UNASSIGNED_GROUP["Japanese"]))
		$tdataLIST_UNASSIGNED_GROUP[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_UNASSIGNED_GROUP["English"] = array();
	$fieldToolTipsLIST_UNASSIGNED_GROUP["English"] = array();
	$placeHoldersLIST_UNASSIGNED_GROUP["English"] = array();
	$pageTitlesLIST_UNASSIGNED_GROUP["English"] = array();
	$fieldLabelsLIST_UNASSIGNED_GROUP["English"]["UNA_UID"] = "UNA UID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["English"]["UNA_UID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["English"]["UNA_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["English"]["USR_UID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["English"]["USR_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["English"]["TYPE"] = "タイプ";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["English"]["TYPE"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["English"]["TYPE"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["English"]["TYP_UID"] = "標準のUID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["English"]["TYP_UID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["English"]["TYP_UID"] = "";
	$fieldLabelsLIST_UNASSIGNED_GROUP["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsLIST_UNASSIGNED_GROUP["English"]["USR_ID"] = "";
	$placeHoldersLIST_UNASSIGNED_GROUP["English"]["USR_ID"] = "";
	if (count($fieldToolTipsLIST_UNASSIGNED_GROUP["English"]))
		$tdataLIST_UNASSIGNED_GROUP[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLIST_UNASSIGNED_GROUP[""] = array();
	$fieldToolTipsLIST_UNASSIGNED_GROUP[""] = array();
	$placeHoldersLIST_UNASSIGNED_GROUP[""] = array();
	$pageTitlesLIST_UNASSIGNED_GROUP[""] = array();
	if (count($fieldToolTipsLIST_UNASSIGNED_GROUP[""]))
		$tdataLIST_UNASSIGNED_GROUP[".isUseToolTips"] = true;
}


	$tdataLIST_UNASSIGNED_GROUP[".NCSearch"] = true;



$tdataLIST_UNASSIGNED_GROUP[".shortTableName"] = "LIST_UNASSIGNED_GROUP";
$tdataLIST_UNASSIGNED_GROUP[".nSecOptions"] = 0;
$tdataLIST_UNASSIGNED_GROUP[".recsPerRowPrint"] = 1;
$tdataLIST_UNASSIGNED_GROUP[".mainTableOwnerID"] = "";
$tdataLIST_UNASSIGNED_GROUP[".moveNext"] = 0;
$tdataLIST_UNASSIGNED_GROUP[".entityType"] = 0;

$tdataLIST_UNASSIGNED_GROUP[".strOriginalTableName"] = "LIST_UNASSIGNED_GROUP";

	



$tdataLIST_UNASSIGNED_GROUP[".showAddInPopup"] = false;

$tdataLIST_UNASSIGNED_GROUP[".showEditInPopup"] = false;

$tdataLIST_UNASSIGNED_GROUP[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLIST_UNASSIGNED_GROUP[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLIST_UNASSIGNED_GROUP[".fieldsForRegister"] = array();
	
$tdataLIST_UNASSIGNED_GROUP[".listAjax"] = false;

	$tdataLIST_UNASSIGNED_GROUP[".audit"] = true;

	$tdataLIST_UNASSIGNED_GROUP[".locking"] = false;

$tdataLIST_UNASSIGNED_GROUP[".edit"] = true;
$tdataLIST_UNASSIGNED_GROUP[".afterEditAction"] = 1;
$tdataLIST_UNASSIGNED_GROUP[".closePopupAfterEdit"] = 1;
$tdataLIST_UNASSIGNED_GROUP[".afterEditActionDetTable"] = "";

$tdataLIST_UNASSIGNED_GROUP[".add"] = true;
$tdataLIST_UNASSIGNED_GROUP[".afterAddAction"] = 1;
$tdataLIST_UNASSIGNED_GROUP[".closePopupAfterAdd"] = 1;
$tdataLIST_UNASSIGNED_GROUP[".afterAddActionDetTable"] = "";

$tdataLIST_UNASSIGNED_GROUP[".list"] = true;

$tdataLIST_UNASSIGNED_GROUP[".inlineEdit"] = true;


$tdataLIST_UNASSIGNED_GROUP[".reorderRecordsByHeader"] = true;
$tdataLIST_UNASSIGNED_GROUP[".createSortByDropdown"] = true;
$tdataLIST_UNASSIGNED_GROUP[".strSortControlSettingsJSON"] = "";



$tdataLIST_UNASSIGNED_GROUP[".inlineAdd"] = true;
$tdataLIST_UNASSIGNED_GROUP[".view"] = true;

$tdataLIST_UNASSIGNED_GROUP[".import"] = true;

$tdataLIST_UNASSIGNED_GROUP[".exportTo"] = true;

$tdataLIST_UNASSIGNED_GROUP[".printFriendly"] = true;

$tdataLIST_UNASSIGNED_GROUP[".delete"] = true;

$tdataLIST_UNASSIGNED_GROUP[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLIST_UNASSIGNED_GROUP[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLIST_UNASSIGNED_GROUP[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLIST_UNASSIGNED_GROUP[".searchSaving"] = false;
//

$tdataLIST_UNASSIGNED_GROUP[".showSearchPanel"] = true;
		$tdataLIST_UNASSIGNED_GROUP[".flexibleSearch"] = true;

$tdataLIST_UNASSIGNED_GROUP[".isUseAjaxSuggest"] = true;

$tdataLIST_UNASSIGNED_GROUP[".rowHighlite"] = true;



				

$tdataLIST_UNASSIGNED_GROUP[".ajaxCodeSnippetAdded"] = false;

$tdataLIST_UNASSIGNED_GROUP[".buttonsAdded"] = false;

$tdataLIST_UNASSIGNED_GROUP[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_UNASSIGNED_GROUP[".isUseTimeForSearch"] = false;





$tdataLIST_UNASSIGNED_GROUP[".allSearchFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".filterFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".requiredSearchFields"] = array();

$tdataLIST_UNASSIGNED_GROUP[".allSearchFields"][] = "UNA_UID";
	$tdataLIST_UNASSIGNED_GROUP[".allSearchFields"][] = "USR_UID";
	$tdataLIST_UNASSIGNED_GROUP[".allSearchFields"][] = "TYPE";
	$tdataLIST_UNASSIGNED_GROUP[".allSearchFields"][] = "TYP_UID";
	$tdataLIST_UNASSIGNED_GROUP[".allSearchFields"][] = "USR_ID";
	

$tdataLIST_UNASSIGNED_GROUP[".googleLikeFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".googleLikeFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".googleLikeFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".googleLikeFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".googleLikeFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".googleLikeFields"][] = "USR_ID";


$tdataLIST_UNASSIGNED_GROUP[".advSearchFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".advSearchFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".advSearchFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".advSearchFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".advSearchFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".advSearchFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".tableType"] = "list";

$tdataLIST_UNASSIGNED_GROUP[".printerPageOrientation"] = 0;
$tdataLIST_UNASSIGNED_GROUP[".nPrinterPageScale"] = 100;

$tdataLIST_UNASSIGNED_GROUP[".nPrinterSplitRecords"] = 40;

$tdataLIST_UNASSIGNED_GROUP[".nPrinterPDFSplitRecords"] = 40;



$tdataLIST_UNASSIGNED_GROUP[".geocodingEnabled"] = false;





$tdataLIST_UNASSIGNED_GROUP[".listGridLayout"] = 3;


$tdataLIST_UNASSIGNED_GROUP[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLIST_UNASSIGNED_GROUP[".pageSize"] = 20;

$tdataLIST_UNASSIGNED_GROUP[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_UNASSIGNED_GROUP[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_UNASSIGNED_GROUP[".orderindexes"] = array();

$tdataLIST_UNASSIGNED_GROUP[".sqlHead"] = "SELECT UNA_UID,  	USR_UID,  	`TYPE`,  	TYP_UID,  	USR_ID";
$tdataLIST_UNASSIGNED_GROUP[".sqlFrom"] = "FROM LIST_UNASSIGNED_GROUP";
$tdataLIST_UNASSIGNED_GROUP[".sqlWhereExpr"] = "";
$tdataLIST_UNASSIGNED_GROUP[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_UNASSIGNED_GROUP[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_UNASSIGNED_GROUP[".arrGroupsPerPage"] = $arrGPP;

$tdataLIST_UNASSIGNED_GROUP[".highlightSearchResults"] = true;

$tableKeysLIST_UNASSIGNED_GROUP = array();
$tableKeysLIST_UNASSIGNED_GROUP[] = "UNA_UID";
$tableKeysLIST_UNASSIGNED_GROUP[] = "USR_UID";
$tableKeysLIST_UNASSIGNED_GROUP[] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".Keys"] = $tableKeysLIST_UNASSIGNED_GROUP;

$tdataLIST_UNASSIGNED_GROUP[".listFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".listFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".listFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".listFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".listFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".listFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".hideMobileList"] = array();


$tdataLIST_UNASSIGNED_GROUP[".viewFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".viewFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".viewFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".viewFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".viewFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".viewFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".addFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".addFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".addFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".addFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".addFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".addFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".masterListFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".masterListFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".masterListFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".masterListFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".masterListFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".masterListFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".inlineAddFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".inlineAddFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".inlineAddFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".inlineAddFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".inlineAddFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".inlineAddFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".editFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".editFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".editFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".editFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".editFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".editFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".inlineEditFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".inlineEditFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".inlineEditFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".inlineEditFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".inlineEditFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".inlineEditFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".updateSelectedFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".updateSelectedFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".updateSelectedFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".updateSelectedFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".updateSelectedFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".updateSelectedFields"][] = "USR_ID";


$tdataLIST_UNASSIGNED_GROUP[".exportFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".exportFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".exportFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".exportFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".exportFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".exportFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".importFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".importFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".importFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".importFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".importFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".importFields"][] = "USR_ID";

$tdataLIST_UNASSIGNED_GROUP[".printFields"] = array();
$tdataLIST_UNASSIGNED_GROUP[".printFields"][] = "UNA_UID";
$tdataLIST_UNASSIGNED_GROUP[".printFields"][] = "USR_UID";
$tdataLIST_UNASSIGNED_GROUP[".printFields"][] = "TYPE";
$tdataLIST_UNASSIGNED_GROUP[".printFields"][] = "TYP_UID";
$tdataLIST_UNASSIGNED_GROUP[".printFields"][] = "USR_ID";

//	UNA_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UNA_UID";
	$fdata["GoodName"] = "UNA_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED_GROUP";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED_GROUP","UNA_UID");
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

		$fdata["strField"] = "UNA_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UNA_UID";

	
	
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




	$tdataLIST_UNASSIGNED_GROUP["UNA_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED_GROUP";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED_GROUP","USR_UID");
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

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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




	$tdataLIST_UNASSIGNED_GROUP["USR_UID"] = $fdata;
//	TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TYPE";
	$fdata["GoodName"] = "TYPE";
	$fdata["ownerTable"] = "LIST_UNASSIGNED_GROUP";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED_GROUP","TYPE");
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

		$fdata["strField"] = "TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TYPE`";

	
	
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




	$tdataLIST_UNASSIGNED_GROUP["TYPE"] = $fdata;
//	TYP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TYP_UID";
	$fdata["GoodName"] = "TYP_UID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED_GROUP";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED_GROUP","TYP_UID");
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

		$fdata["strField"] = "TYP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TYP_UID";

	
	
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




	$tdataLIST_UNASSIGNED_GROUP["TYP_UID"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "LIST_UNASSIGNED_GROUP";
	$fdata["Label"] = GetFieldLabel("LIST_UNASSIGNED_GROUP","USR_ID");
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

		$fdata["strField"] = "USR_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_ID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLIST_UNASSIGNED_GROUP["USR_ID"] = $fdata;


$tables_data["LIST_UNASSIGNED_GROUP"]=&$tdataLIST_UNASSIGNED_GROUP;
$field_labels["LIST_UNASSIGNED_GROUP"] = &$fieldLabelsLIST_UNASSIGNED_GROUP;
$fieldToolTips["LIST_UNASSIGNED_GROUP"] = &$fieldToolTipsLIST_UNASSIGNED_GROUP;
$placeHolders["LIST_UNASSIGNED_GROUP"] = &$placeHoldersLIST_UNASSIGNED_GROUP;
$page_titles["LIST_UNASSIGNED_GROUP"] = &$pageTitlesLIST_UNASSIGNED_GROUP;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST_UNASSIGNED_GROUP"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LIST_UNASSIGNED_GROUP"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_UNASSIGNED_GROUP()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UNA_UID,  	USR_UID,  	`TYPE`,  	TYP_UID,  	USR_ID";
$proto0["m_strFrom"] = "FROM LIST_UNASSIGNED_GROUP";
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
	"m_strName" => "UNA_UID",
	"m_strTable" => "LIST_UNASSIGNED_GROUP",
	"m_srcTableName" => "LIST_UNASSIGNED_GROUP"
));

$proto6["m_sql"] = "UNA_UID";
$proto6["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LIST_UNASSIGNED_GROUP",
	"m_srcTableName" => "LIST_UNASSIGNED_GROUP"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TYPE",
	"m_strTable" => "LIST_UNASSIGNED_GROUP",
	"m_srcTableName" => "LIST_UNASSIGNED_GROUP"
));

$proto10["m_sql"] = "`TYPE`";
$proto10["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TYP_UID",
	"m_strTable" => "LIST_UNASSIGNED_GROUP",
	"m_srcTableName" => "LIST_UNASSIGNED_GROUP"
));

$proto12["m_sql"] = "TYP_UID";
$proto12["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "LIST_UNASSIGNED_GROUP",
	"m_srcTableName" => "LIST_UNASSIGNED_GROUP"
));

$proto14["m_sql"] = "USR_ID";
$proto14["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "LIST_UNASSIGNED_GROUP";
$proto17["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "UNA_UID";
$proto17["m_columns"][] = "USR_UID";
$proto17["m_columns"][] = "TYPE";
$proto17["m_columns"][] = "TYP_UID";
$proto17["m_columns"][] = "USR_ID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "LIST_UNASSIGNED_GROUP";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "LIST_UNASSIGNED_GROUP";
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
$proto0["m_srcTableName"]="LIST_UNASSIGNED_GROUP";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_UNASSIGNED_GROUP = createSqlQuery_LIST_UNASSIGNED_GROUP();


	
						;

					

$tdataLIST_UNASSIGNED_GROUP[".sqlquery"] = $queryData_LIST_UNASSIGNED_GROUP;

$tableEvents["LIST_UNASSIGNED_GROUP"] = new eventsBase;
$tdataLIST_UNASSIGNED_GROUP[".hasEvents"] = false;

?>
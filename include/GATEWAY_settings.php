<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGATEWAY = array();
	$tdataGATEWAY[".truncateText"] = true;
	$tdataGATEWAY[".NumberOfChars"] = 80;
	$tdataGATEWAY[".ShortName"] = "GATEWAY";
	$tdataGATEWAY[".OwnerID"] = "";
	$tdataGATEWAY[".OriginalTable"] = "GATEWAY";

//	field labels
$fieldLabelsGATEWAY = array();
$fieldToolTipsGATEWAY = array();
$pageTitlesGATEWAY = array();
$placeHoldersGATEWAY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsGATEWAY["Japanese"] = array();
	$fieldToolTipsGATEWAY["Japanese"] = array();
	$placeHoldersGATEWAY["Japanese"] = array();
	$pageTitlesGATEWAY["Japanese"] = array();
	$fieldLabelsGATEWAY["Japanese"]["GAT_UID"] = "GAT UID";
	$fieldToolTipsGATEWAY["Japanese"]["GAT_UID"] = "";
	$placeHoldersGATEWAY["Japanese"]["GAT_UID"] = "";
	$fieldLabelsGATEWAY["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsGATEWAY["Japanese"]["PRO_UID"] = "";
	$placeHoldersGATEWAY["Japanese"]["PRO_UID"] = "";
	$fieldLabelsGATEWAY["Japanese"]["TAS_UID"] = "TAS UID";
	$fieldToolTipsGATEWAY["Japanese"]["TAS_UID"] = "";
	$placeHoldersGATEWAY["Japanese"]["TAS_UID"] = "";
	$fieldLabelsGATEWAY["Japanese"]["GAT_NEXT_TASK"] = "GAT NEXT TASK";
	$fieldToolTipsGATEWAY["Japanese"]["GAT_NEXT_TASK"] = "";
	$placeHoldersGATEWAY["Japanese"]["GAT_NEXT_TASK"] = "";
	$fieldLabelsGATEWAY["Japanese"]["GAT_X"] = "GAT X";
	$fieldToolTipsGATEWAY["Japanese"]["GAT_X"] = "";
	$placeHoldersGATEWAY["Japanese"]["GAT_X"] = "";
	$fieldLabelsGATEWAY["Japanese"]["GAT_Y"] = "GAT Y";
	$fieldToolTipsGATEWAY["Japanese"]["GAT_Y"] = "";
	$placeHoldersGATEWAY["Japanese"]["GAT_Y"] = "";
	$fieldLabelsGATEWAY["Japanese"]["GAT_TYPE"] = "GAT TYPE";
	$fieldToolTipsGATEWAY["Japanese"]["GAT_TYPE"] = "";
	$placeHoldersGATEWAY["Japanese"]["GAT_TYPE"] = "";
	if (count($fieldToolTipsGATEWAY["Japanese"]))
		$tdataGATEWAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGATEWAY["English"] = array();
	$fieldToolTipsGATEWAY["English"] = array();
	$placeHoldersGATEWAY["English"] = array();
	$pageTitlesGATEWAY["English"] = array();
	$fieldLabelsGATEWAY["English"]["GAT_UID"] = "GAT UID";
	$fieldToolTipsGATEWAY["English"]["GAT_UID"] = "";
	$placeHoldersGATEWAY["English"]["GAT_UID"] = "";
	$fieldLabelsGATEWAY["English"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsGATEWAY["English"]["PRO_UID"] = "";
	$placeHoldersGATEWAY["English"]["PRO_UID"] = "";
	$fieldLabelsGATEWAY["English"]["TAS_UID"] = "TAS UID";
	$fieldToolTipsGATEWAY["English"]["TAS_UID"] = "";
	$placeHoldersGATEWAY["English"]["TAS_UID"] = "";
	$fieldLabelsGATEWAY["English"]["GAT_NEXT_TASK"] = "GAT NEXT TASK";
	$fieldToolTipsGATEWAY["English"]["GAT_NEXT_TASK"] = "";
	$placeHoldersGATEWAY["English"]["GAT_NEXT_TASK"] = "";
	$fieldLabelsGATEWAY["English"]["GAT_X"] = "GAT X";
	$fieldToolTipsGATEWAY["English"]["GAT_X"] = "";
	$placeHoldersGATEWAY["English"]["GAT_X"] = "";
	$fieldLabelsGATEWAY["English"]["GAT_Y"] = "GAT Y";
	$fieldToolTipsGATEWAY["English"]["GAT_Y"] = "";
	$placeHoldersGATEWAY["English"]["GAT_Y"] = "";
	$fieldLabelsGATEWAY["English"]["GAT_TYPE"] = "GAT TYPE";
	$fieldToolTipsGATEWAY["English"]["GAT_TYPE"] = "";
	$placeHoldersGATEWAY["English"]["GAT_TYPE"] = "";
	if (count($fieldToolTipsGATEWAY["English"]))
		$tdataGATEWAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGATEWAY[""] = array();
	$fieldToolTipsGATEWAY[""] = array();
	$placeHoldersGATEWAY[""] = array();
	$pageTitlesGATEWAY[""] = array();
	$fieldLabelsGATEWAY[""]["GAT_UID"] = "GAT UID";
	$fieldToolTipsGATEWAY[""]["GAT_UID"] = "";
	$placeHoldersGATEWAY[""]["GAT_UID"] = "";
	$fieldLabelsGATEWAY[""]["PRO_UID"] = "PRO UID";
	$fieldToolTipsGATEWAY[""]["PRO_UID"] = "";
	$placeHoldersGATEWAY[""]["PRO_UID"] = "";
	$fieldLabelsGATEWAY[""]["TAS_UID"] = "TAS UID";
	$fieldToolTipsGATEWAY[""]["TAS_UID"] = "";
	$placeHoldersGATEWAY[""]["TAS_UID"] = "";
	$fieldLabelsGATEWAY[""]["GAT_NEXT_TASK"] = "GAT NEXT TASK";
	$fieldToolTipsGATEWAY[""]["GAT_NEXT_TASK"] = "";
	$placeHoldersGATEWAY[""]["GAT_NEXT_TASK"] = "";
	$fieldLabelsGATEWAY[""]["GAT_X"] = "GAT X";
	$fieldToolTipsGATEWAY[""]["GAT_X"] = "";
	$placeHoldersGATEWAY[""]["GAT_X"] = "";
	$fieldLabelsGATEWAY[""]["GAT_Y"] = "GAT Y";
	$fieldToolTipsGATEWAY[""]["GAT_Y"] = "";
	$placeHoldersGATEWAY[""]["GAT_Y"] = "";
	$fieldLabelsGATEWAY[""]["GAT_TYPE"] = "GAT TYPE";
	$fieldToolTipsGATEWAY[""]["GAT_TYPE"] = "";
	$placeHoldersGATEWAY[""]["GAT_TYPE"] = "";
	if (count($fieldToolTipsGATEWAY[""]))
		$tdataGATEWAY[".isUseToolTips"] = true;
}


	$tdataGATEWAY[".NCSearch"] = true;



$tdataGATEWAY[".shortTableName"] = "GATEWAY";
$tdataGATEWAY[".nSecOptions"] = 0;
$tdataGATEWAY[".recsPerRowPrint"] = 1;
$tdataGATEWAY[".mainTableOwnerID"] = "";
$tdataGATEWAY[".moveNext"] = 1;
$tdataGATEWAY[".entityType"] = 0;

$tdataGATEWAY[".strOriginalTableName"] = "GATEWAY";

	



$tdataGATEWAY[".showAddInPopup"] = false;

$tdataGATEWAY[".showEditInPopup"] = false;

$tdataGATEWAY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGATEWAY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGATEWAY[".fieldsForRegister"] = array();
	
$tdataGATEWAY[".listAjax"] = false;

	$tdataGATEWAY[".audit"] = false;

	$tdataGATEWAY[".locking"] = false;

$tdataGATEWAY[".edit"] = true;
$tdataGATEWAY[".afterEditAction"] = 1;
$tdataGATEWAY[".closePopupAfterEdit"] = 1;
$tdataGATEWAY[".afterEditActionDetTable"] = "";

$tdataGATEWAY[".add"] = true;
$tdataGATEWAY[".afterAddAction"] = 1;
$tdataGATEWAY[".closePopupAfterAdd"] = 1;
$tdataGATEWAY[".afterAddActionDetTable"] = "";

$tdataGATEWAY[".list"] = true;



$tdataGATEWAY[".reorderRecordsByHeader"] = true;



$tdataGATEWAY[".view"] = true;

$tdataGATEWAY[".import"] = true;

$tdataGATEWAY[".exportTo"] = true;

$tdataGATEWAY[".printFriendly"] = true;

$tdataGATEWAY[".delete"] = true;

$tdataGATEWAY[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataGATEWAY[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataGATEWAY[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataGATEWAY[".searchSaving"] = false;
//

$tdataGATEWAY[".showSearchPanel"] = true;
		$tdataGATEWAY[".flexibleSearch"] = true;

$tdataGATEWAY[".isUseAjaxSuggest"] = true;

$tdataGATEWAY[".rowHighlite"] = true;



				

$tdataGATEWAY[".ajaxCodeSnippetAdded"] = false;

$tdataGATEWAY[".buttonsAdded"] = false;

$tdataGATEWAY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGATEWAY[".isUseTimeForSearch"] = false;





$tdataGATEWAY[".allSearchFields"] = array();
$tdataGATEWAY[".filterFields"] = array();
$tdataGATEWAY[".requiredSearchFields"] = array();

$tdataGATEWAY[".allSearchFields"][] = "GAT_UID";
	$tdataGATEWAY[".allSearchFields"][] = "PRO_UID";
	$tdataGATEWAY[".allSearchFields"][] = "TAS_UID";
	$tdataGATEWAY[".allSearchFields"][] = "GAT_NEXT_TASK";
	$tdataGATEWAY[".allSearchFields"][] = "GAT_X";
	$tdataGATEWAY[".allSearchFields"][] = "GAT_Y";
	$tdataGATEWAY[".allSearchFields"][] = "GAT_TYPE";
	

$tdataGATEWAY[".googleLikeFields"] = array();
$tdataGATEWAY[".googleLikeFields"][] = "GAT_UID";
$tdataGATEWAY[".googleLikeFields"][] = "PRO_UID";
$tdataGATEWAY[".googleLikeFields"][] = "TAS_UID";
$tdataGATEWAY[".googleLikeFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".googleLikeFields"][] = "GAT_X";
$tdataGATEWAY[".googleLikeFields"][] = "GAT_Y";
$tdataGATEWAY[".googleLikeFields"][] = "GAT_TYPE";


$tdataGATEWAY[".advSearchFields"] = array();
$tdataGATEWAY[".advSearchFields"][] = "GAT_UID";
$tdataGATEWAY[".advSearchFields"][] = "PRO_UID";
$tdataGATEWAY[".advSearchFields"][] = "TAS_UID";
$tdataGATEWAY[".advSearchFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".advSearchFields"][] = "GAT_X";
$tdataGATEWAY[".advSearchFields"][] = "GAT_Y";
$tdataGATEWAY[".advSearchFields"][] = "GAT_TYPE";

$tdataGATEWAY[".tableType"] = "list";

$tdataGATEWAY[".printerPageOrientation"] = 0;
$tdataGATEWAY[".nPrinterPageScale"] = 100;

$tdataGATEWAY[".nPrinterSplitRecords"] = 40;

$tdataGATEWAY[".nPrinterPDFSplitRecords"] = 40;



$tdataGATEWAY[".geocodingEnabled"] = false;





$tdataGATEWAY[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataGATEWAY[".pageSize"] = 20;

$tdataGATEWAY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGATEWAY[".strOrderBy"] = $tstrOrderBy;

$tdataGATEWAY[".orderindexes"] = array();

$tdataGATEWAY[".sqlHead"] = "SELECT GAT_UID,  	PRO_UID,  	TAS_UID,  	GAT_NEXT_TASK,  	GAT_X,  	GAT_Y,  	GAT_TYPE";
$tdataGATEWAY[".sqlFrom"] = "FROM GATEWAY";
$tdataGATEWAY[".sqlWhereExpr"] = "";
$tdataGATEWAY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGATEWAY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGATEWAY[".arrGroupsPerPage"] = $arrGPP;

$tdataGATEWAY[".highlightSearchResults"] = true;

$tableKeysGATEWAY = array();
$tableKeysGATEWAY[] = "GAT_UID";
$tdataGATEWAY[".Keys"] = $tableKeysGATEWAY;

$tdataGATEWAY[".listFields"] = array();
$tdataGATEWAY[".listFields"][] = "GAT_UID";
$tdataGATEWAY[".listFields"][] = "PRO_UID";
$tdataGATEWAY[".listFields"][] = "TAS_UID";
$tdataGATEWAY[".listFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".listFields"][] = "GAT_X";
$tdataGATEWAY[".listFields"][] = "GAT_Y";
$tdataGATEWAY[".listFields"][] = "GAT_TYPE";

$tdataGATEWAY[".hideMobileList"] = array();


$tdataGATEWAY[".viewFields"] = array();
$tdataGATEWAY[".viewFields"][] = "GAT_UID";
$tdataGATEWAY[".viewFields"][] = "PRO_UID";
$tdataGATEWAY[".viewFields"][] = "TAS_UID";
$tdataGATEWAY[".viewFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".viewFields"][] = "GAT_X";
$tdataGATEWAY[".viewFields"][] = "GAT_Y";
$tdataGATEWAY[".viewFields"][] = "GAT_TYPE";

$tdataGATEWAY[".addFields"] = array();
$tdataGATEWAY[".addFields"][] = "GAT_UID";
$tdataGATEWAY[".addFields"][] = "PRO_UID";
$tdataGATEWAY[".addFields"][] = "TAS_UID";
$tdataGATEWAY[".addFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".addFields"][] = "GAT_X";
$tdataGATEWAY[".addFields"][] = "GAT_Y";
$tdataGATEWAY[".addFields"][] = "GAT_TYPE";

$tdataGATEWAY[".masterListFields"] = array();
$tdataGATEWAY[".masterListFields"][] = "GAT_UID";
$tdataGATEWAY[".masterListFields"][] = "PRO_UID";
$tdataGATEWAY[".masterListFields"][] = "TAS_UID";
$tdataGATEWAY[".masterListFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".masterListFields"][] = "GAT_X";
$tdataGATEWAY[".masterListFields"][] = "GAT_Y";
$tdataGATEWAY[".masterListFields"][] = "GAT_TYPE";

$tdataGATEWAY[".inlineAddFields"] = array();
$tdataGATEWAY[".inlineAddFields"][] = "GAT_UID";
$tdataGATEWAY[".inlineAddFields"][] = "PRO_UID";
$tdataGATEWAY[".inlineAddFields"][] = "TAS_UID";
$tdataGATEWAY[".inlineAddFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".inlineAddFields"][] = "GAT_X";
$tdataGATEWAY[".inlineAddFields"][] = "GAT_Y";
$tdataGATEWAY[".inlineAddFields"][] = "GAT_TYPE";

$tdataGATEWAY[".editFields"] = array();
$tdataGATEWAY[".editFields"][] = "GAT_UID";
$tdataGATEWAY[".editFields"][] = "PRO_UID";
$tdataGATEWAY[".editFields"][] = "TAS_UID";
$tdataGATEWAY[".editFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".editFields"][] = "GAT_X";
$tdataGATEWAY[".editFields"][] = "GAT_Y";
$tdataGATEWAY[".editFields"][] = "GAT_TYPE";

$tdataGATEWAY[".inlineEditFields"] = array();
$tdataGATEWAY[".inlineEditFields"][] = "GAT_UID";
$tdataGATEWAY[".inlineEditFields"][] = "PRO_UID";
$tdataGATEWAY[".inlineEditFields"][] = "TAS_UID";
$tdataGATEWAY[".inlineEditFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".inlineEditFields"][] = "GAT_X";
$tdataGATEWAY[".inlineEditFields"][] = "GAT_Y";
$tdataGATEWAY[".inlineEditFields"][] = "GAT_TYPE";

$tdataGATEWAY[".updateSelectedFields"] = array();
$tdataGATEWAY[".updateSelectedFields"][] = "GAT_UID";
$tdataGATEWAY[".updateSelectedFields"][] = "PRO_UID";
$tdataGATEWAY[".updateSelectedFields"][] = "TAS_UID";
$tdataGATEWAY[".updateSelectedFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".updateSelectedFields"][] = "GAT_X";
$tdataGATEWAY[".updateSelectedFields"][] = "GAT_Y";
$tdataGATEWAY[".updateSelectedFields"][] = "GAT_TYPE";


$tdataGATEWAY[".exportFields"] = array();
$tdataGATEWAY[".exportFields"][] = "GAT_UID";
$tdataGATEWAY[".exportFields"][] = "PRO_UID";
$tdataGATEWAY[".exportFields"][] = "TAS_UID";
$tdataGATEWAY[".exportFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".exportFields"][] = "GAT_X";
$tdataGATEWAY[".exportFields"][] = "GAT_Y";
$tdataGATEWAY[".exportFields"][] = "GAT_TYPE";

$tdataGATEWAY[".importFields"] = array();
$tdataGATEWAY[".importFields"][] = "GAT_UID";
$tdataGATEWAY[".importFields"][] = "PRO_UID";
$tdataGATEWAY[".importFields"][] = "TAS_UID";
$tdataGATEWAY[".importFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".importFields"][] = "GAT_X";
$tdataGATEWAY[".importFields"][] = "GAT_Y";
$tdataGATEWAY[".importFields"][] = "GAT_TYPE";

$tdataGATEWAY[".printFields"] = array();
$tdataGATEWAY[".printFields"][] = "GAT_UID";
$tdataGATEWAY[".printFields"][] = "PRO_UID";
$tdataGATEWAY[".printFields"][] = "TAS_UID";
$tdataGATEWAY[".printFields"][] = "GAT_NEXT_TASK";
$tdataGATEWAY[".printFields"][] = "GAT_X";
$tdataGATEWAY[".printFields"][] = "GAT_Y";
$tdataGATEWAY[".printFields"][] = "GAT_TYPE";

//	GAT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GAT_UID";
	$fdata["GoodName"] = "GAT_UID";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","GAT_UID");
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

		$fdata["strField"] = "GAT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_UID";

	
	
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




	$tdataGATEWAY["GAT_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","PRO_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGATEWAY["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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




	$tdataGATEWAY["TAS_UID"] = $fdata;
//	GAT_NEXT_TASK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "GAT_NEXT_TASK";
	$fdata["GoodName"] = "GAT_NEXT_TASK";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","GAT_NEXT_TASK");
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

		$fdata["strField"] = "GAT_NEXT_TASK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_NEXT_TASK";

	
	
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




	$tdataGATEWAY["GAT_NEXT_TASK"] = $fdata;
//	GAT_X
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GAT_X";
	$fdata["GoodName"] = "GAT_X";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","GAT_X");
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

		$fdata["strField"] = "GAT_X";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_X";

	
	
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




	$tdataGATEWAY["GAT_X"] = $fdata;
//	GAT_Y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "GAT_Y";
	$fdata["GoodName"] = "GAT_Y";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","GAT_Y");
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

		$fdata["strField"] = "GAT_Y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_Y";

	
	
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




	$tdataGATEWAY["GAT_Y"] = $fdata;
//	GAT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GAT_TYPE";
	$fdata["GoodName"] = "GAT_TYPE";
	$fdata["ownerTable"] = "GATEWAY";
	$fdata["Label"] = GetFieldLabel("GATEWAY","GAT_TYPE");
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

		$fdata["strField"] = "GAT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GAT_TYPE";

	
	
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




	$tdataGATEWAY["GAT_TYPE"] = $fdata;


$tables_data["GATEWAY"]=&$tdataGATEWAY;
$field_labels["GATEWAY"] = &$fieldLabelsGATEWAY;
$fieldToolTips["GATEWAY"] = &$fieldToolTipsGATEWAY;
$placeHolders["GATEWAY"] = &$placeHoldersGATEWAY;
$page_titles["GATEWAY"] = &$pageTitlesGATEWAY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GATEWAY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GATEWAY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GATEWAY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GAT_UID,  	PRO_UID,  	TAS_UID,  	GAT_NEXT_TASK,  	GAT_X,  	GAT_Y,  	GAT_TYPE";
$proto0["m_strFrom"] = "FROM GATEWAY";
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
	"m_strName" => "GAT_UID",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto6["m_sql"] = "GAT_UID";
$proto6["m_srcTableName"] = "GATEWAY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "GATEWAY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "GATEWAY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_NEXT_TASK",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto12["m_sql"] = "GAT_NEXT_TASK";
$proto12["m_srcTableName"] = "GATEWAY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_X",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto14["m_sql"] = "GAT_X";
$proto14["m_srcTableName"] = "GATEWAY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_Y",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto16["m_sql"] = "GAT_Y";
$proto16["m_srcTableName"] = "GATEWAY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GAT_TYPE",
	"m_strTable" => "GATEWAY",
	"m_srcTableName" => "GATEWAY"
));

$proto18["m_sql"] = "GAT_TYPE";
$proto18["m_srcTableName"] = "GATEWAY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "GATEWAY";
$proto21["m_srcTableName"] = "GATEWAY";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "GAT_UID";
$proto21["m_columns"][] = "PRO_UID";
$proto21["m_columns"][] = "TAS_UID";
$proto21["m_columns"][] = "GAT_NEXT_TASK";
$proto21["m_columns"][] = "GAT_X";
$proto21["m_columns"][] = "GAT_Y";
$proto21["m_columns"][] = "GAT_TYPE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "GATEWAY";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "GATEWAY";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GATEWAY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GATEWAY = createSqlQuery_GATEWAY();


	
						;

							

$tdataGATEWAY[".sqlquery"] = $queryData_GATEWAY;

$tableEvents["GATEWAY"] = new eventsBase;
$tdataGATEWAY[".hasEvents"] = false;

?>
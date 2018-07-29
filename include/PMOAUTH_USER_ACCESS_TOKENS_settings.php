<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMOAUTH_USER_ACCESS_TOKENS = array();
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".truncateText"] = true;
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".NumberOfChars"] = 80;
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".ShortName"] = "PMOAUTH_USER_ACCESS_TOKENS";
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".OwnerID"] = "";
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".OriginalTable"] = "PMOAUTH_USER_ACCESS_TOKENS";

//	field labels
$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS = array();
$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS = array();
$pageTitlesPMOAUTH_USER_ACCESS_TOKENS = array();
$placeHoldersPMOAUTH_USER_ACCESS_TOKENS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["Japanese"] = array();
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"] = array();
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["Japanese"] = array();
	$pageTitlesPMOAUTH_USER_ACCESS_TOKENS["Japanese"] = array();
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["ACCESS_TOKEN"] = "ACCESS TOKEN";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["ACCESS_TOKEN"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["ACCESS_TOKEN"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["REFRESH_TOKEN"] = "REFRESH TOKEN";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["REFRESH_TOKEN"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["REFRESH_TOKEN"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["USER_ID"] = "USER ID";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["USER_ID"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["USER_ID"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["SESSION_ID"] = "SESSION ID";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["SESSION_ID"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["SESSION_ID"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["SESSION_NAME"] = "SESSION NAME";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["SESSION_NAME"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["Japanese"]["SESSION_NAME"] = "";
	if (count($fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["Japanese"]))
		$tdataPMOAUTH_USER_ACCESS_TOKENS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["English"] = array();
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"] = array();
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["English"] = array();
	$pageTitlesPMOAUTH_USER_ACCESS_TOKENS["English"] = array();
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["English"]["ACCESS_TOKEN"] = "ACCESS TOKEN";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"]["ACCESS_TOKEN"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["English"]["ACCESS_TOKEN"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["English"]["REFRESH_TOKEN"] = "REFRESH TOKEN";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"]["REFRESH_TOKEN"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["English"]["REFRESH_TOKEN"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["English"]["USER_ID"] = "USER ID";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"]["USER_ID"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["English"]["USER_ID"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["English"]["SESSION_ID"] = "SESSION ID";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"]["SESSION_ID"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["English"]["SESSION_ID"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS["English"]["SESSION_NAME"] = "SESSION NAME";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"]["SESSION_NAME"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS["English"]["SESSION_NAME"] = "";
	if (count($fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS["English"]))
		$tdataPMOAUTH_USER_ACCESS_TOKENS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS[""] = array();
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""] = array();
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS[""] = array();
	$pageTitlesPMOAUTH_USER_ACCESS_TOKENS[""] = array();
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS[""]["ACCESS_TOKEN"] = "ACCESS TOKEN";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""]["ACCESS_TOKEN"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS[""]["ACCESS_TOKEN"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS[""]["REFRESH_TOKEN"] = "REFRESH TOKEN";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""]["REFRESH_TOKEN"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS[""]["REFRESH_TOKEN"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS[""]["USER_ID"] = "USER ID";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""]["USER_ID"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS[""]["USER_ID"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS[""]["SESSION_ID"] = "SESSION ID";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""]["SESSION_ID"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS[""]["SESSION_ID"] = "";
	$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS[""]["SESSION_NAME"] = "SESSION NAME";
	$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""]["SESSION_NAME"] = "";
	$placeHoldersPMOAUTH_USER_ACCESS_TOKENS[""]["SESSION_NAME"] = "";
	if (count($fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS[""]))
		$tdataPMOAUTH_USER_ACCESS_TOKENS[".isUseToolTips"] = true;
}


	$tdataPMOAUTH_USER_ACCESS_TOKENS[".NCSearch"] = true;



$tdataPMOAUTH_USER_ACCESS_TOKENS[".shortTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".nSecOptions"] = 0;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".recsPerRowPrint"] = 1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".mainTableOwnerID"] = "";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".moveNext"] = 1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".entityType"] = 0;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".strOriginalTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";

	



$tdataPMOAUTH_USER_ACCESS_TOKENS[".showAddInPopup"] = false;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".showEditInPopup"] = false;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMOAUTH_USER_ACCESS_TOKENS[".fieldsForRegister"] = array();
	
$tdataPMOAUTH_USER_ACCESS_TOKENS[".listAjax"] = false;

	$tdataPMOAUTH_USER_ACCESS_TOKENS[".audit"] = false;

	$tdataPMOAUTH_USER_ACCESS_TOKENS[".locking"] = false;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".edit"] = true;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".afterEditAction"] = 1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".closePopupAfterEdit"] = 1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".afterEditActionDetTable"] = "";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".add"] = true;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".afterAddAction"] = 1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".closePopupAfterAdd"] = 1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".afterAddActionDetTable"] = "";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".list"] = true;



$tdataPMOAUTH_USER_ACCESS_TOKENS[".reorderRecordsByHeader"] = true;



$tdataPMOAUTH_USER_ACCESS_TOKENS[".view"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".import"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportTo"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFriendly"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".delete"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMOAUTH_USER_ACCESS_TOKENS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMOAUTH_USER_ACCESS_TOKENS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMOAUTH_USER_ACCESS_TOKENS[".searchSaving"] = false;
//

$tdataPMOAUTH_USER_ACCESS_TOKENS[".showSearchPanel"] = true;
		$tdataPMOAUTH_USER_ACCESS_TOKENS[".flexibleSearch"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".isUseAjaxSuggest"] = true;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".rowHighlite"] = true;



				

$tdataPMOAUTH_USER_ACCESS_TOKENS[".ajaxCodeSnippetAdded"] = false;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".buttonsAdded"] = false;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMOAUTH_USER_ACCESS_TOKENS[".isUseTimeForSearch"] = false;





$tdataPMOAUTH_USER_ACCESS_TOKENS[".allSearchFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".filterFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".requiredSearchFields"] = array();

$tdataPMOAUTH_USER_ACCESS_TOKENS[".allSearchFields"][] = "ACCESS_TOKEN";
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".allSearchFields"][] = "REFRESH_TOKEN";
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".allSearchFields"][] = "USER_ID";
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".allSearchFields"][] = "SESSION_ID";
	$tdataPMOAUTH_USER_ACCESS_TOKENS[".allSearchFields"][] = "SESSION_NAME";
	

$tdataPMOAUTH_USER_ACCESS_TOKENS[".googleLikeFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".googleLikeFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".googleLikeFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".googleLikeFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".googleLikeFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".googleLikeFields"][] = "SESSION_NAME";


$tdataPMOAUTH_USER_ACCESS_TOKENS[".advSearchFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".advSearchFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".advSearchFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".advSearchFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".advSearchFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".advSearchFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".tableType"] = "list";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".printerPageOrientation"] = 0;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".nPrinterPageScale"] = 100;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".nPrinterSplitRecords"] = 40;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".nPrinterPDFSplitRecords"] = 40;



$tdataPMOAUTH_USER_ACCESS_TOKENS[".geocodingEnabled"] = false;





$tdataPMOAUTH_USER_ACCESS_TOKENS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMOAUTH_USER_ACCESS_TOKENS[".pageSize"] = 20;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".strOrderBy"] = $tstrOrderBy;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".orderindexes"] = array();

$tdataPMOAUTH_USER_ACCESS_TOKENS[".sqlHead"] = "SELECT ACCESS_TOKEN,  	REFRESH_TOKEN,  	USER_ID,  	SESSION_ID,  	SESSION_NAME";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".sqlFrom"] = "FROM PMOAUTH_USER_ACCESS_TOKENS";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".sqlWhereExpr"] = "";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".arrGroupsPerPage"] = $arrGPP;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".highlightSearchResults"] = true;

$tableKeysPMOAUTH_USER_ACCESS_TOKENS = array();
$tableKeysPMOAUTH_USER_ACCESS_TOKENS[] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".Keys"] = $tableKeysPMOAUTH_USER_ACCESS_TOKENS;

$tdataPMOAUTH_USER_ACCESS_TOKENS[".listFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".listFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".listFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".listFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".listFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".listFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".hideMobileList"] = array();


$tdataPMOAUTH_USER_ACCESS_TOKENS[".viewFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".viewFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".viewFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".viewFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".viewFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".viewFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".addFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".addFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".addFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".addFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".addFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".addFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".masterListFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".masterListFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".masterListFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".masterListFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".masterListFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".masterListFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".inlineAddFields"] = array();

$tdataPMOAUTH_USER_ACCESS_TOKENS[".editFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".editFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".editFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".editFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".editFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".editFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".inlineEditFields"] = array();

$tdataPMOAUTH_USER_ACCESS_TOKENS[".updateSelectedFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".updateSelectedFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".updateSelectedFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".updateSelectedFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".updateSelectedFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".updateSelectedFields"][] = "SESSION_NAME";


$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".exportFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".importFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".importFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".importFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".importFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".importFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".importFields"][] = "SESSION_NAME";

$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFields"] = array();
$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFields"][] = "ACCESS_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFields"][] = "REFRESH_TOKEN";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFields"][] = "USER_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFields"][] = "SESSION_ID";
$tdataPMOAUTH_USER_ACCESS_TOKENS[".printFields"][] = "SESSION_NAME";

//	ACCESS_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACCESS_TOKEN";
	$fdata["GoodName"] = "ACCESS_TOKEN";
	$fdata["ownerTable"] = "PMOAUTH_USER_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("PMOAUTH_USER_ACCESS_TOKENS","ACCESS_TOKEN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ACCESS_TOKEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACCESS_TOKEN";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdataPMOAUTH_USER_ACCESS_TOKENS["ACCESS_TOKEN"] = $fdata;
//	REFRESH_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "REFRESH_TOKEN";
	$fdata["GoodName"] = "REFRESH_TOKEN";
	$fdata["ownerTable"] = "PMOAUTH_USER_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("PMOAUTH_USER_ACCESS_TOKENS","REFRESH_TOKEN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REFRESH_TOKEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REFRESH_TOKEN";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdataPMOAUTH_USER_ACCESS_TOKENS["REFRESH_TOKEN"] = $fdata;
//	USER_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USER_ID";
	$fdata["GoodName"] = "USER_ID";
	$fdata["ownerTable"] = "PMOAUTH_USER_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("PMOAUTH_USER_ACCESS_TOKENS","USER_ID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USER_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USER_ID";

	
	
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




	$tdataPMOAUTH_USER_ACCESS_TOKENS["USER_ID"] = $fdata;
//	SESSION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SESSION_ID";
	$fdata["GoodName"] = "SESSION_ID";
	$fdata["ownerTable"] = "PMOAUTH_USER_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("PMOAUTH_USER_ACCESS_TOKENS","SESSION_ID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SESSION_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SESSION_ID";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataPMOAUTH_USER_ACCESS_TOKENS["SESSION_ID"] = $fdata;
//	SESSION_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SESSION_NAME";
	$fdata["GoodName"] = "SESSION_NAME";
	$fdata["ownerTable"] = "PMOAUTH_USER_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("PMOAUTH_USER_ACCESS_TOKENS","SESSION_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SESSION_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SESSION_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdataPMOAUTH_USER_ACCESS_TOKENS["SESSION_NAME"] = $fdata;


$tables_data["PMOAUTH_USER_ACCESS_TOKENS"]=&$tdataPMOAUTH_USER_ACCESS_TOKENS;
$field_labels["PMOAUTH_USER_ACCESS_TOKENS"] = &$fieldLabelsPMOAUTH_USER_ACCESS_TOKENS;
$fieldToolTips["PMOAUTH_USER_ACCESS_TOKENS"] = &$fieldToolTipsPMOAUTH_USER_ACCESS_TOKENS;
$placeHolders["PMOAUTH_USER_ACCESS_TOKENS"] = &$placeHoldersPMOAUTH_USER_ACCESS_TOKENS;
$page_titles["PMOAUTH_USER_ACCESS_TOKENS"] = &$pageTitlesPMOAUTH_USER_ACCESS_TOKENS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMOAUTH_USER_ACCESS_TOKENS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMOAUTH_USER_ACCESS_TOKENS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMOAUTH_USER_ACCESS_TOKENS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ACCESS_TOKEN,  	REFRESH_TOKEN,  	USER_ID,  	SESSION_ID,  	SESSION_NAME";
$proto0["m_strFrom"] = "FROM PMOAUTH_USER_ACCESS_TOKENS";
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
	"m_strName" => "ACCESS_TOKEN",
	"m_strTable" => "PMOAUTH_USER_ACCESS_TOKENS",
	"m_srcTableName" => "PMOAUTH_USER_ACCESS_TOKENS"
));

$proto6["m_sql"] = "ACCESS_TOKEN";
$proto6["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "REFRESH_TOKEN",
	"m_strTable" => "PMOAUTH_USER_ACCESS_TOKENS",
	"m_srcTableName" => "PMOAUTH_USER_ACCESS_TOKENS"
));

$proto8["m_sql"] = "REFRESH_TOKEN";
$proto8["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_ID",
	"m_strTable" => "PMOAUTH_USER_ACCESS_TOKENS",
	"m_srcTableName" => "PMOAUTH_USER_ACCESS_TOKENS"
));

$proto10["m_sql"] = "USER_ID";
$proto10["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SESSION_ID",
	"m_strTable" => "PMOAUTH_USER_ACCESS_TOKENS",
	"m_srcTableName" => "PMOAUTH_USER_ACCESS_TOKENS"
));

$proto12["m_sql"] = "SESSION_ID";
$proto12["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SESSION_NAME",
	"m_strTable" => "PMOAUTH_USER_ACCESS_TOKENS",
	"m_srcTableName" => "PMOAUTH_USER_ACCESS_TOKENS"
));

$proto14["m_sql"] = "SESSION_NAME";
$proto14["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto17["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ACCESS_TOKEN";
$proto17["m_columns"][] = "REFRESH_TOKEN";
$proto17["m_columns"][] = "USER_ID";
$proto17["m_columns"][] = "SESSION_ID";
$proto17["m_columns"][] = "SESSION_NAME";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "PMOAUTH_USER_ACCESS_TOKENS";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "PMOAUTH_USER_ACCESS_TOKENS";
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
$proto0["m_srcTableName"]="PMOAUTH_USER_ACCESS_TOKENS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMOAUTH_USER_ACCESS_TOKENS = createSqlQuery_PMOAUTH_USER_ACCESS_TOKENS();


	
						;

					

$tdataPMOAUTH_USER_ACCESS_TOKENS[".sqlquery"] = $queryData_PMOAUTH_USER_ACCESS_TOKENS;

$tableEvents["PMOAUTH_USER_ACCESS_TOKENS"] = new eventsBase;
$tdataPMOAUTH_USER_ACCESS_TOKENS[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOAUTH_ACCESS_TOKENS = array();
	$tdataOAUTH_ACCESS_TOKENS[".truncateText"] = true;
	$tdataOAUTH_ACCESS_TOKENS[".NumberOfChars"] = 80;
	$tdataOAUTH_ACCESS_TOKENS[".ShortName"] = "OAUTH_ACCESS_TOKENS";
	$tdataOAUTH_ACCESS_TOKENS[".OwnerID"] = "";
	$tdataOAUTH_ACCESS_TOKENS[".OriginalTable"] = "OAUTH_ACCESS_TOKENS";

//	field labels
$fieldLabelsOAUTH_ACCESS_TOKENS = array();
$fieldToolTipsOAUTH_ACCESS_TOKENS = array();
$pageTitlesOAUTH_ACCESS_TOKENS = array();
$placeHoldersOAUTH_ACCESS_TOKENS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsOAUTH_ACCESS_TOKENS["Japanese"] = array();
	$fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"] = array();
	$placeHoldersOAUTH_ACCESS_TOKENS["Japanese"] = array();
	$pageTitlesOAUTH_ACCESS_TOKENS["Japanese"] = array();
	$fieldLabelsOAUTH_ACCESS_TOKENS["Japanese"]["ACCESS_TOKEN"] = "ACCESS TOKEN";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"]["ACCESS_TOKEN"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["Japanese"]["ACCESS_TOKEN"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["Japanese"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["Japanese"]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["Japanese"]["USER_ID"] = "USER ID";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"]["USER_ID"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["Japanese"]["USER_ID"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["Japanese"]["EXPIRES"] = "EXPIRES";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"]["EXPIRES"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["Japanese"]["EXPIRES"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["Japanese"]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"]["SCOPE"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["Japanese"]["SCOPE"] = "";
	if (count($fieldToolTipsOAUTH_ACCESS_TOKENS["Japanese"]))
		$tdataOAUTH_ACCESS_TOKENS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOAUTH_ACCESS_TOKENS["English"] = array();
	$fieldToolTipsOAUTH_ACCESS_TOKENS["English"] = array();
	$placeHoldersOAUTH_ACCESS_TOKENS["English"] = array();
	$pageTitlesOAUTH_ACCESS_TOKENS["English"] = array();
	$fieldLabelsOAUTH_ACCESS_TOKENS["English"]["ACCESS_TOKEN"] = "ACCESS TOKEN";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["English"]["ACCESS_TOKEN"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["English"]["ACCESS_TOKEN"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["English"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["English"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["English"]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["English"]["USER_ID"] = "USER ID";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["English"]["USER_ID"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["English"]["USER_ID"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["English"]["EXPIRES"] = "EXPIRES";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["English"]["EXPIRES"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["English"]["EXPIRES"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS["English"]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_ACCESS_TOKENS["English"]["SCOPE"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS["English"]["SCOPE"] = "";
	if (count($fieldToolTipsOAUTH_ACCESS_TOKENS["English"]))
		$tdataOAUTH_ACCESS_TOKENS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOAUTH_ACCESS_TOKENS[""] = array();
	$fieldToolTipsOAUTH_ACCESS_TOKENS[""] = array();
	$placeHoldersOAUTH_ACCESS_TOKENS[""] = array();
	$pageTitlesOAUTH_ACCESS_TOKENS[""] = array();
	$fieldLabelsOAUTH_ACCESS_TOKENS[""]["ACCESS_TOKEN"] = "ACCESS TOKEN";
	$fieldToolTipsOAUTH_ACCESS_TOKENS[""]["ACCESS_TOKEN"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS[""]["ACCESS_TOKEN"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS[""]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_ACCESS_TOKENS[""]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS[""]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS[""]["USER_ID"] = "USER ID";
	$fieldToolTipsOAUTH_ACCESS_TOKENS[""]["USER_ID"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS[""]["USER_ID"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS[""]["EXPIRES"] = "EXPIRES";
	$fieldToolTipsOAUTH_ACCESS_TOKENS[""]["EXPIRES"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS[""]["EXPIRES"] = "";
	$fieldLabelsOAUTH_ACCESS_TOKENS[""]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_ACCESS_TOKENS[""]["SCOPE"] = "";
	$placeHoldersOAUTH_ACCESS_TOKENS[""]["SCOPE"] = "";
	if (count($fieldToolTipsOAUTH_ACCESS_TOKENS[""]))
		$tdataOAUTH_ACCESS_TOKENS[".isUseToolTips"] = true;
}


	$tdataOAUTH_ACCESS_TOKENS[".NCSearch"] = true;



$tdataOAUTH_ACCESS_TOKENS[".shortTableName"] = "OAUTH_ACCESS_TOKENS";
$tdataOAUTH_ACCESS_TOKENS[".nSecOptions"] = 0;
$tdataOAUTH_ACCESS_TOKENS[".recsPerRowPrint"] = 1;
$tdataOAUTH_ACCESS_TOKENS[".mainTableOwnerID"] = "";
$tdataOAUTH_ACCESS_TOKENS[".moveNext"] = 1;
$tdataOAUTH_ACCESS_TOKENS[".entityType"] = 0;

$tdataOAUTH_ACCESS_TOKENS[".strOriginalTableName"] = "OAUTH_ACCESS_TOKENS";

	



$tdataOAUTH_ACCESS_TOKENS[".showAddInPopup"] = false;

$tdataOAUTH_ACCESS_TOKENS[".showEditInPopup"] = false;

$tdataOAUTH_ACCESS_TOKENS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOAUTH_ACCESS_TOKENS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOAUTH_ACCESS_TOKENS[".fieldsForRegister"] = array();
	
$tdataOAUTH_ACCESS_TOKENS[".listAjax"] = false;

	$tdataOAUTH_ACCESS_TOKENS[".audit"] = false;

	$tdataOAUTH_ACCESS_TOKENS[".locking"] = false;

$tdataOAUTH_ACCESS_TOKENS[".edit"] = true;
$tdataOAUTH_ACCESS_TOKENS[".afterEditAction"] = 1;
$tdataOAUTH_ACCESS_TOKENS[".closePopupAfterEdit"] = 1;
$tdataOAUTH_ACCESS_TOKENS[".afterEditActionDetTable"] = "";

$tdataOAUTH_ACCESS_TOKENS[".add"] = true;
$tdataOAUTH_ACCESS_TOKENS[".afterAddAction"] = 1;
$tdataOAUTH_ACCESS_TOKENS[".closePopupAfterAdd"] = 1;
$tdataOAUTH_ACCESS_TOKENS[".afterAddActionDetTable"] = "";

$tdataOAUTH_ACCESS_TOKENS[".list"] = true;



$tdataOAUTH_ACCESS_TOKENS[".reorderRecordsByHeader"] = true;



$tdataOAUTH_ACCESS_TOKENS[".view"] = true;

$tdataOAUTH_ACCESS_TOKENS[".import"] = true;

$tdataOAUTH_ACCESS_TOKENS[".exportTo"] = true;

$tdataOAUTH_ACCESS_TOKENS[".printFriendly"] = true;

$tdataOAUTH_ACCESS_TOKENS[".delete"] = true;

$tdataOAUTH_ACCESS_TOKENS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOAUTH_ACCESS_TOKENS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOAUTH_ACCESS_TOKENS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOAUTH_ACCESS_TOKENS[".searchSaving"] = false;
//

$tdataOAUTH_ACCESS_TOKENS[".showSearchPanel"] = true;
		$tdataOAUTH_ACCESS_TOKENS[".flexibleSearch"] = true;

$tdataOAUTH_ACCESS_TOKENS[".isUseAjaxSuggest"] = true;

$tdataOAUTH_ACCESS_TOKENS[".rowHighlite"] = true;



				

$tdataOAUTH_ACCESS_TOKENS[".ajaxCodeSnippetAdded"] = false;

$tdataOAUTH_ACCESS_TOKENS[".buttonsAdded"] = false;

$tdataOAUTH_ACCESS_TOKENS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOAUTH_ACCESS_TOKENS[".isUseTimeForSearch"] = false;





$tdataOAUTH_ACCESS_TOKENS[".allSearchFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".filterFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".requiredSearchFields"] = array();

$tdataOAUTH_ACCESS_TOKENS[".allSearchFields"][] = "ACCESS_TOKEN";
	$tdataOAUTH_ACCESS_TOKENS[".allSearchFields"][] = "CLIENT_ID";
	$tdataOAUTH_ACCESS_TOKENS[".allSearchFields"][] = "USER_ID";
	$tdataOAUTH_ACCESS_TOKENS[".allSearchFields"][] = "EXPIRES";
	$tdataOAUTH_ACCESS_TOKENS[".allSearchFields"][] = "SCOPE";
	

$tdataOAUTH_ACCESS_TOKENS[".googleLikeFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".googleLikeFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".googleLikeFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".googleLikeFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".googleLikeFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".googleLikeFields"][] = "SCOPE";


$tdataOAUTH_ACCESS_TOKENS[".advSearchFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".advSearchFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".advSearchFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".advSearchFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".advSearchFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".advSearchFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".tableType"] = "list";

$tdataOAUTH_ACCESS_TOKENS[".printerPageOrientation"] = 0;
$tdataOAUTH_ACCESS_TOKENS[".nPrinterPageScale"] = 100;

$tdataOAUTH_ACCESS_TOKENS[".nPrinterSplitRecords"] = 40;

$tdataOAUTH_ACCESS_TOKENS[".nPrinterPDFSplitRecords"] = 40;



$tdataOAUTH_ACCESS_TOKENS[".geocodingEnabled"] = false;





$tdataOAUTH_ACCESS_TOKENS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataOAUTH_ACCESS_TOKENS[".pageSize"] = 20;

$tdataOAUTH_ACCESS_TOKENS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOAUTH_ACCESS_TOKENS[".strOrderBy"] = $tstrOrderBy;

$tdataOAUTH_ACCESS_TOKENS[".orderindexes"] = array();

$tdataOAUTH_ACCESS_TOKENS[".sqlHead"] = "SELECT ACCESS_TOKEN,  	CLIENT_ID,  	USER_ID,  	EXPIRES,  	`SCOPE`";
$tdataOAUTH_ACCESS_TOKENS[".sqlFrom"] = "FROM OAUTH_ACCESS_TOKENS";
$tdataOAUTH_ACCESS_TOKENS[".sqlWhereExpr"] = "";
$tdataOAUTH_ACCESS_TOKENS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOAUTH_ACCESS_TOKENS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOAUTH_ACCESS_TOKENS[".arrGroupsPerPage"] = $arrGPP;

$tdataOAUTH_ACCESS_TOKENS[".highlightSearchResults"] = true;

$tableKeysOAUTH_ACCESS_TOKENS = array();
$tableKeysOAUTH_ACCESS_TOKENS[] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".Keys"] = $tableKeysOAUTH_ACCESS_TOKENS;

$tdataOAUTH_ACCESS_TOKENS[".listFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".listFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".listFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".listFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".listFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".listFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".hideMobileList"] = array();


$tdataOAUTH_ACCESS_TOKENS[".viewFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".viewFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".viewFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".viewFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".viewFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".viewFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".addFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".addFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".addFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".addFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".addFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".addFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".masterListFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".masterListFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".masterListFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".masterListFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".masterListFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".masterListFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".inlineAddFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".inlineAddFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".inlineAddFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".inlineAddFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".inlineAddFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".inlineAddFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".editFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".editFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".editFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".editFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".editFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".editFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".inlineEditFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".inlineEditFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".inlineEditFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".inlineEditFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".inlineEditFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".inlineEditFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".updateSelectedFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".updateSelectedFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".updateSelectedFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".updateSelectedFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".updateSelectedFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".updateSelectedFields"][] = "SCOPE";


$tdataOAUTH_ACCESS_TOKENS[".exportFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".exportFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".exportFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".exportFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".exportFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".exportFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".importFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".importFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".importFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".importFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".importFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".importFields"][] = "SCOPE";

$tdataOAUTH_ACCESS_TOKENS[".printFields"] = array();
$tdataOAUTH_ACCESS_TOKENS[".printFields"][] = "ACCESS_TOKEN";
$tdataOAUTH_ACCESS_TOKENS[".printFields"][] = "CLIENT_ID";
$tdataOAUTH_ACCESS_TOKENS[".printFields"][] = "USER_ID";
$tdataOAUTH_ACCESS_TOKENS[".printFields"][] = "EXPIRES";
$tdataOAUTH_ACCESS_TOKENS[".printFields"][] = "SCOPE";

//	ACCESS_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACCESS_TOKEN";
	$fdata["GoodName"] = "ACCESS_TOKEN";
	$fdata["ownerTable"] = "OAUTH_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("OAUTH_ACCESS_TOKENS","ACCESS_TOKEN");
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




	$tdataOAUTH_ACCESS_TOKENS["ACCESS_TOKEN"] = $fdata;
//	CLIENT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CLIENT_ID";
	$fdata["GoodName"] = "CLIENT_ID";
	$fdata["ownerTable"] = "OAUTH_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("OAUTH_ACCESS_TOKENS","CLIENT_ID");
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

		$fdata["strField"] = "CLIENT_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_ID";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataOAUTH_ACCESS_TOKENS["CLIENT_ID"] = $fdata;
//	USER_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USER_ID";
	$fdata["GoodName"] = "USER_ID";
	$fdata["ownerTable"] = "OAUTH_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("OAUTH_ACCESS_TOKENS","USER_ID");
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




	$tdataOAUTH_ACCESS_TOKENS["USER_ID"] = $fdata;
//	EXPIRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EXPIRES";
	$fdata["GoodName"] = "EXPIRES";
	$fdata["ownerTable"] = "OAUTH_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("OAUTH_ACCESS_TOKENS","EXPIRES");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "EXPIRES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXPIRES";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataOAUTH_ACCESS_TOKENS["EXPIRES"] = $fdata;
//	SCOPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SCOPE";
	$fdata["GoodName"] = "SCOPE";
	$fdata["ownerTable"] = "OAUTH_ACCESS_TOKENS";
	$fdata["Label"] = GetFieldLabel("OAUTH_ACCESS_TOKENS","SCOPE");
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

		$fdata["strField"] = "SCOPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SCOPE`";

	
	
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
			$edata["EditParams"].= " maxlength=2000";

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




	$tdataOAUTH_ACCESS_TOKENS["SCOPE"] = $fdata;


$tables_data["OAUTH_ACCESS_TOKENS"]=&$tdataOAUTH_ACCESS_TOKENS;
$field_labels["OAUTH_ACCESS_TOKENS"] = &$fieldLabelsOAUTH_ACCESS_TOKENS;
$fieldToolTips["OAUTH_ACCESS_TOKENS"] = &$fieldToolTipsOAUTH_ACCESS_TOKENS;
$placeHolders["OAUTH_ACCESS_TOKENS"] = &$placeHoldersOAUTH_ACCESS_TOKENS;
$page_titles["OAUTH_ACCESS_TOKENS"] = &$pageTitlesOAUTH_ACCESS_TOKENS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OAUTH_ACCESS_TOKENS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["OAUTH_ACCESS_TOKENS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OAUTH_ACCESS_TOKENS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ACCESS_TOKEN,  	CLIENT_ID,  	USER_ID,  	EXPIRES,  	`SCOPE`";
$proto0["m_strFrom"] = "FROM OAUTH_ACCESS_TOKENS";
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
	"m_strTable" => "OAUTH_ACCESS_TOKENS",
	"m_srcTableName" => "OAUTH_ACCESS_TOKENS"
));

$proto6["m_sql"] = "ACCESS_TOKEN";
$proto6["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_ID",
	"m_strTable" => "OAUTH_ACCESS_TOKENS",
	"m_srcTableName" => "OAUTH_ACCESS_TOKENS"
));

$proto8["m_sql"] = "CLIENT_ID";
$proto8["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_ID",
	"m_strTable" => "OAUTH_ACCESS_TOKENS",
	"m_srcTableName" => "OAUTH_ACCESS_TOKENS"
));

$proto10["m_sql"] = "USER_ID";
$proto10["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EXPIRES",
	"m_strTable" => "OAUTH_ACCESS_TOKENS",
	"m_srcTableName" => "OAUTH_ACCESS_TOKENS"
));

$proto12["m_sql"] = "EXPIRES";
$proto12["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SCOPE",
	"m_strTable" => "OAUTH_ACCESS_TOKENS",
	"m_srcTableName" => "OAUTH_ACCESS_TOKENS"
));

$proto14["m_sql"] = "`SCOPE`";
$proto14["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "OAUTH_ACCESS_TOKENS";
$proto17["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ACCESS_TOKEN";
$proto17["m_columns"][] = "CLIENT_ID";
$proto17["m_columns"][] = "USER_ID";
$proto17["m_columns"][] = "EXPIRES";
$proto17["m_columns"][] = "SCOPE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "OAUTH_ACCESS_TOKENS";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "OAUTH_ACCESS_TOKENS";
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
$proto0["m_srcTableName"]="OAUTH_ACCESS_TOKENS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OAUTH_ACCESS_TOKENS = createSqlQuery_OAUTH_ACCESS_TOKENS();


	
						;

					

$tdataOAUTH_ACCESS_TOKENS[".sqlquery"] = $queryData_OAUTH_ACCESS_TOKENS;

$tableEvents["OAUTH_ACCESS_TOKENS"] = new eventsBase;
$tdataOAUTH_ACCESS_TOKENS[".hasEvents"] = false;

?>
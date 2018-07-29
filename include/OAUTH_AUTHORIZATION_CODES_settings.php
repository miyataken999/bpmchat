<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOAUTH_AUTHORIZATION_CODES = array();
	$tdataOAUTH_AUTHORIZATION_CODES[".truncateText"] = true;
	$tdataOAUTH_AUTHORIZATION_CODES[".NumberOfChars"] = 80;
	$tdataOAUTH_AUTHORIZATION_CODES[".ShortName"] = "OAUTH_AUTHORIZATION_CODES";
	$tdataOAUTH_AUTHORIZATION_CODES[".OwnerID"] = "";
	$tdataOAUTH_AUTHORIZATION_CODES[".OriginalTable"] = "OAUTH_AUTHORIZATION_CODES";

//	field labels
$fieldLabelsOAUTH_AUTHORIZATION_CODES = array();
$fieldToolTipsOAUTH_AUTHORIZATION_CODES = array();
$pageTitlesOAUTH_AUTHORIZATION_CODES = array();
$placeHoldersOAUTH_AUTHORIZATION_CODES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"] = array();
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"] = array();
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"] = array();
	$pageTitlesOAUTH_AUTHORIZATION_CODES["Japanese"] = array();
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"]["AUTHORIZATION_CODE"] = "AUTHORIZATION CODE";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]["AUTHORIZATION_CODE"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"]["AUTHORIZATION_CODE"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"]["USER_ID"] = "USER ID";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]["USER_ID"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"]["USER_ID"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"]["REDIRECT_URI"] = "REDIRECT URI";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]["REDIRECT_URI"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"]["REDIRECT_URI"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"]["EXPIRES"] = "EXPIRES";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]["EXPIRES"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"]["EXPIRES"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["Japanese"]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]["SCOPE"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["Japanese"]["SCOPE"] = "";
	if (count($fieldToolTipsOAUTH_AUTHORIZATION_CODES["Japanese"]))
		$tdataOAUTH_AUTHORIZATION_CODES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"] = array();
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"] = array();
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"] = array();
	$pageTitlesOAUTH_AUTHORIZATION_CODES["English"] = array();
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"]["AUTHORIZATION_CODE"] = "AUTHORIZATION CODE";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]["AUTHORIZATION_CODE"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"]["AUTHORIZATION_CODE"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"]["USER_ID"] = "USER ID";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]["USER_ID"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"]["USER_ID"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"]["REDIRECT_URI"] = "REDIRECT URI";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]["REDIRECT_URI"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"]["REDIRECT_URI"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"]["EXPIRES"] = "EXPIRES";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]["EXPIRES"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"]["EXPIRES"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES["English"]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]["SCOPE"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES["English"]["SCOPE"] = "";
	if (count($fieldToolTipsOAUTH_AUTHORIZATION_CODES["English"]))
		$tdataOAUTH_AUTHORIZATION_CODES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""] = array();
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""] = array();
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""] = array();
	$pageTitlesOAUTH_AUTHORIZATION_CODES[""] = array();
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""]["AUTHORIZATION_CODE"] = "AUTHORIZATION CODE";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]["AUTHORIZATION_CODE"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""]["AUTHORIZATION_CODE"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""]["USER_ID"] = "USER ID";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]["USER_ID"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""]["USER_ID"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""]["REDIRECT_URI"] = "REDIRECT URI";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]["REDIRECT_URI"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""]["REDIRECT_URI"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""]["EXPIRES"] = "EXPIRES";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]["EXPIRES"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""]["EXPIRES"] = "";
	$fieldLabelsOAUTH_AUTHORIZATION_CODES[""]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]["SCOPE"] = "";
	$placeHoldersOAUTH_AUTHORIZATION_CODES[""]["SCOPE"] = "";
	if (count($fieldToolTipsOAUTH_AUTHORIZATION_CODES[""]))
		$tdataOAUTH_AUTHORIZATION_CODES[".isUseToolTips"] = true;
}


	$tdataOAUTH_AUTHORIZATION_CODES[".NCSearch"] = true;



$tdataOAUTH_AUTHORIZATION_CODES[".shortTableName"] = "OAUTH_AUTHORIZATION_CODES";
$tdataOAUTH_AUTHORIZATION_CODES[".nSecOptions"] = 0;
$tdataOAUTH_AUTHORIZATION_CODES[".recsPerRowPrint"] = 1;
$tdataOAUTH_AUTHORIZATION_CODES[".mainTableOwnerID"] = "";
$tdataOAUTH_AUTHORIZATION_CODES[".moveNext"] = 1;
$tdataOAUTH_AUTHORIZATION_CODES[".entityType"] = 0;

$tdataOAUTH_AUTHORIZATION_CODES[".strOriginalTableName"] = "OAUTH_AUTHORIZATION_CODES";

	



$tdataOAUTH_AUTHORIZATION_CODES[".showAddInPopup"] = false;

$tdataOAUTH_AUTHORIZATION_CODES[".showEditInPopup"] = false;

$tdataOAUTH_AUTHORIZATION_CODES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOAUTH_AUTHORIZATION_CODES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOAUTH_AUTHORIZATION_CODES[".fieldsForRegister"] = array();
	
$tdataOAUTH_AUTHORIZATION_CODES[".listAjax"] = false;

	$tdataOAUTH_AUTHORIZATION_CODES[".audit"] = false;

	$tdataOAUTH_AUTHORIZATION_CODES[".locking"] = false;

$tdataOAUTH_AUTHORIZATION_CODES[".edit"] = true;
$tdataOAUTH_AUTHORIZATION_CODES[".afterEditAction"] = 1;
$tdataOAUTH_AUTHORIZATION_CODES[".closePopupAfterEdit"] = 1;
$tdataOAUTH_AUTHORIZATION_CODES[".afterEditActionDetTable"] = "";

$tdataOAUTH_AUTHORIZATION_CODES[".add"] = true;
$tdataOAUTH_AUTHORIZATION_CODES[".afterAddAction"] = 1;
$tdataOAUTH_AUTHORIZATION_CODES[".closePopupAfterAdd"] = 1;
$tdataOAUTH_AUTHORIZATION_CODES[".afterAddActionDetTable"] = "";

$tdataOAUTH_AUTHORIZATION_CODES[".list"] = true;



$tdataOAUTH_AUTHORIZATION_CODES[".reorderRecordsByHeader"] = true;



$tdataOAUTH_AUTHORIZATION_CODES[".view"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".import"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".exportTo"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".printFriendly"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".delete"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOAUTH_AUTHORIZATION_CODES[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOAUTH_AUTHORIZATION_CODES[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOAUTH_AUTHORIZATION_CODES[".searchSaving"] = false;
//

$tdataOAUTH_AUTHORIZATION_CODES[".showSearchPanel"] = true;
		$tdataOAUTH_AUTHORIZATION_CODES[".flexibleSearch"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".isUseAjaxSuggest"] = true;

$tdataOAUTH_AUTHORIZATION_CODES[".rowHighlite"] = true;



				

$tdataOAUTH_AUTHORIZATION_CODES[".ajaxCodeSnippetAdded"] = false;

$tdataOAUTH_AUTHORIZATION_CODES[".buttonsAdded"] = false;

$tdataOAUTH_AUTHORIZATION_CODES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOAUTH_AUTHORIZATION_CODES[".isUseTimeForSearch"] = false;





$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".filterFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".requiredSearchFields"] = array();

$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"][] = "AUTHORIZATION_CODE";
	$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"][] = "CLIENT_ID";
	$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"][] = "USER_ID";
	$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"][] = "REDIRECT_URI";
	$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"][] = "EXPIRES";
	$tdataOAUTH_AUTHORIZATION_CODES[".allSearchFields"][] = "SCOPE";
	

$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".googleLikeFields"][] = "SCOPE";


$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".advSearchFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".tableType"] = "list";

$tdataOAUTH_AUTHORIZATION_CODES[".printerPageOrientation"] = 0;
$tdataOAUTH_AUTHORIZATION_CODES[".nPrinterPageScale"] = 100;

$tdataOAUTH_AUTHORIZATION_CODES[".nPrinterSplitRecords"] = 40;

$tdataOAUTH_AUTHORIZATION_CODES[".nPrinterPDFSplitRecords"] = 40;



$tdataOAUTH_AUTHORIZATION_CODES[".geocodingEnabled"] = false;





$tdataOAUTH_AUTHORIZATION_CODES[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataOAUTH_AUTHORIZATION_CODES[".pageSize"] = 20;

$tdataOAUTH_AUTHORIZATION_CODES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOAUTH_AUTHORIZATION_CODES[".strOrderBy"] = $tstrOrderBy;

$tdataOAUTH_AUTHORIZATION_CODES[".orderindexes"] = array();

$tdataOAUTH_AUTHORIZATION_CODES[".sqlHead"] = "SELECT AUTHORIZATION_CODE,  	CLIENT_ID,  	USER_ID,  	REDIRECT_URI,  	EXPIRES,  	`SCOPE`";
$tdataOAUTH_AUTHORIZATION_CODES[".sqlFrom"] = "FROM OAUTH_AUTHORIZATION_CODES";
$tdataOAUTH_AUTHORIZATION_CODES[".sqlWhereExpr"] = "";
$tdataOAUTH_AUTHORIZATION_CODES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOAUTH_AUTHORIZATION_CODES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOAUTH_AUTHORIZATION_CODES[".arrGroupsPerPage"] = $arrGPP;

$tdataOAUTH_AUTHORIZATION_CODES[".highlightSearchResults"] = true;

$tableKeysOAUTH_AUTHORIZATION_CODES = array();
$tableKeysOAUTH_AUTHORIZATION_CODES[] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".Keys"] = $tableKeysOAUTH_AUTHORIZATION_CODES;

$tdataOAUTH_AUTHORIZATION_CODES[".listFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".listFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".listFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".listFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".listFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".listFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".listFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".hideMobileList"] = array();


$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".viewFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".addFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".addFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".addFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".addFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".addFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".addFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".addFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".masterListFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineAddFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".editFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".editFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".editFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".editFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".editFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".editFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".editFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".inlineEditFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".updateSelectedFields"][] = "SCOPE";


$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".exportFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".importFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".importFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".importFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".importFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".importFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".importFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".importFields"][] = "SCOPE";

$tdataOAUTH_AUTHORIZATION_CODES[".printFields"] = array();
$tdataOAUTH_AUTHORIZATION_CODES[".printFields"][] = "AUTHORIZATION_CODE";
$tdataOAUTH_AUTHORIZATION_CODES[".printFields"][] = "CLIENT_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".printFields"][] = "USER_ID";
$tdataOAUTH_AUTHORIZATION_CODES[".printFields"][] = "REDIRECT_URI";
$tdataOAUTH_AUTHORIZATION_CODES[".printFields"][] = "EXPIRES";
$tdataOAUTH_AUTHORIZATION_CODES[".printFields"][] = "SCOPE";

//	AUTHORIZATION_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AUTHORIZATION_CODE";
	$fdata["GoodName"] = "AUTHORIZATION_CODE";
	$fdata["ownerTable"] = "OAUTH_AUTHORIZATION_CODES";
	$fdata["Label"] = GetFieldLabel("OAUTH_AUTHORIZATION_CODES","AUTHORIZATION_CODE");
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

		$fdata["strField"] = "AUTHORIZATION_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTHORIZATION_CODE";

	
	
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




	$tdataOAUTH_AUTHORIZATION_CODES["AUTHORIZATION_CODE"] = $fdata;
//	CLIENT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CLIENT_ID";
	$fdata["GoodName"] = "CLIENT_ID";
	$fdata["ownerTable"] = "OAUTH_AUTHORIZATION_CODES";
	$fdata["Label"] = GetFieldLabel("OAUTH_AUTHORIZATION_CODES","CLIENT_ID");
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




	$tdataOAUTH_AUTHORIZATION_CODES["CLIENT_ID"] = $fdata;
//	USER_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USER_ID";
	$fdata["GoodName"] = "USER_ID";
	$fdata["ownerTable"] = "OAUTH_AUTHORIZATION_CODES";
	$fdata["Label"] = GetFieldLabel("OAUTH_AUTHORIZATION_CODES","USER_ID");
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




	$tdataOAUTH_AUTHORIZATION_CODES["USER_ID"] = $fdata;
//	REDIRECT_URI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "REDIRECT_URI";
	$fdata["GoodName"] = "REDIRECT_URI";
	$fdata["ownerTable"] = "OAUTH_AUTHORIZATION_CODES";
	$fdata["Label"] = GetFieldLabel("OAUTH_AUTHORIZATION_CODES","REDIRECT_URI");
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

		$fdata["strField"] = "REDIRECT_URI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REDIRECT_URI";

	
	
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




	$tdataOAUTH_AUTHORIZATION_CODES["REDIRECT_URI"] = $fdata;
//	EXPIRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EXPIRES";
	$fdata["GoodName"] = "EXPIRES";
	$fdata["ownerTable"] = "OAUTH_AUTHORIZATION_CODES";
	$fdata["Label"] = GetFieldLabel("OAUTH_AUTHORIZATION_CODES","EXPIRES");
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




	$tdataOAUTH_AUTHORIZATION_CODES["EXPIRES"] = $fdata;
//	SCOPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SCOPE";
	$fdata["GoodName"] = "SCOPE";
	$fdata["ownerTable"] = "OAUTH_AUTHORIZATION_CODES";
	$fdata["Label"] = GetFieldLabel("OAUTH_AUTHORIZATION_CODES","SCOPE");
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




	$tdataOAUTH_AUTHORIZATION_CODES["SCOPE"] = $fdata;


$tables_data["OAUTH_AUTHORIZATION_CODES"]=&$tdataOAUTH_AUTHORIZATION_CODES;
$field_labels["OAUTH_AUTHORIZATION_CODES"] = &$fieldLabelsOAUTH_AUTHORIZATION_CODES;
$fieldToolTips["OAUTH_AUTHORIZATION_CODES"] = &$fieldToolTipsOAUTH_AUTHORIZATION_CODES;
$placeHolders["OAUTH_AUTHORIZATION_CODES"] = &$placeHoldersOAUTH_AUTHORIZATION_CODES;
$page_titles["OAUTH_AUTHORIZATION_CODES"] = &$pageTitlesOAUTH_AUTHORIZATION_CODES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OAUTH_AUTHORIZATION_CODES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["OAUTH_AUTHORIZATION_CODES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OAUTH_AUTHORIZATION_CODES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AUTHORIZATION_CODE,  	CLIENT_ID,  	USER_ID,  	REDIRECT_URI,  	EXPIRES,  	`SCOPE`";
$proto0["m_strFrom"] = "FROM OAUTH_AUTHORIZATION_CODES";
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
	"m_strName" => "AUTHORIZATION_CODE",
	"m_strTable" => "OAUTH_AUTHORIZATION_CODES",
	"m_srcTableName" => "OAUTH_AUTHORIZATION_CODES"
));

$proto6["m_sql"] = "AUTHORIZATION_CODE";
$proto6["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_ID",
	"m_strTable" => "OAUTH_AUTHORIZATION_CODES",
	"m_srcTableName" => "OAUTH_AUTHORIZATION_CODES"
));

$proto8["m_sql"] = "CLIENT_ID";
$proto8["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_ID",
	"m_strTable" => "OAUTH_AUTHORIZATION_CODES",
	"m_srcTableName" => "OAUTH_AUTHORIZATION_CODES"
));

$proto10["m_sql"] = "USER_ID";
$proto10["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "REDIRECT_URI",
	"m_strTable" => "OAUTH_AUTHORIZATION_CODES",
	"m_srcTableName" => "OAUTH_AUTHORIZATION_CODES"
));

$proto12["m_sql"] = "REDIRECT_URI";
$proto12["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EXPIRES",
	"m_strTable" => "OAUTH_AUTHORIZATION_CODES",
	"m_srcTableName" => "OAUTH_AUTHORIZATION_CODES"
));

$proto14["m_sql"] = "EXPIRES";
$proto14["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SCOPE",
	"m_strTable" => "OAUTH_AUTHORIZATION_CODES",
	"m_srcTableName" => "OAUTH_AUTHORIZATION_CODES"
));

$proto16["m_sql"] = "`SCOPE`";
$proto16["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "OAUTH_AUTHORIZATION_CODES";
$proto19["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "AUTHORIZATION_CODE";
$proto19["m_columns"][] = "CLIENT_ID";
$proto19["m_columns"][] = "USER_ID";
$proto19["m_columns"][] = "REDIRECT_URI";
$proto19["m_columns"][] = "EXPIRES";
$proto19["m_columns"][] = "SCOPE";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "OAUTH_AUTHORIZATION_CODES";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "OAUTH_AUTHORIZATION_CODES";
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
$proto0["m_srcTableName"]="OAUTH_AUTHORIZATION_CODES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OAUTH_AUTHORIZATION_CODES = createSqlQuery_OAUTH_AUTHORIZATION_CODES();


	
						;

						

$tdataOAUTH_AUTHORIZATION_CODES[".sqlquery"] = $queryData_OAUTH_AUTHORIZATION_CODES;

$tableEvents["OAUTH_AUTHORIZATION_CODES"] = new eventsBase;
$tdataOAUTH_AUTHORIZATION_CODES[".hasEvents"] = false;

?>
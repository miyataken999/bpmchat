<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOAUTH_CLIENTS = array();
	$tdataOAUTH_CLIENTS[".truncateText"] = true;
	$tdataOAUTH_CLIENTS[".NumberOfChars"] = 80;
	$tdataOAUTH_CLIENTS[".ShortName"] = "OAUTH_CLIENTS";
	$tdataOAUTH_CLIENTS[".OwnerID"] = "";
	$tdataOAUTH_CLIENTS[".OriginalTable"] = "OAUTH_CLIENTS";

//	field labels
$fieldLabelsOAUTH_CLIENTS = array();
$fieldToolTipsOAUTH_CLIENTS = array();
$pageTitlesOAUTH_CLIENTS = array();
$placeHoldersOAUTH_CLIENTS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsOAUTH_CLIENTS["Japanese"] = array();
	$fieldToolTipsOAUTH_CLIENTS["Japanese"] = array();
	$placeHoldersOAUTH_CLIENTS["Japanese"] = array();
	$pageTitlesOAUTH_CLIENTS["Japanese"] = array();
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["CLIENT_SECRET"] = "CLIENT SECRET";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["CLIENT_SECRET"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["CLIENT_SECRET"] = "";
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["CLIENT_NAME"] = "CLIENT NAME";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["CLIENT_NAME"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["CLIENT_NAME"] = "";
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["CLIENT_DESCRIPTION"] = "CLIENT DESCRIPTION";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["CLIENT_DESCRIPTION"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["CLIENT_DESCRIPTION"] = "";
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["CLIENT_WEBSITE"] = "CLIENT WEBSITE";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["CLIENT_WEBSITE"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["CLIENT_WEBSITE"] = "";
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["REDIRECT_URI"] = "REDIRECT URI";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["REDIRECT_URI"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["REDIRECT_URI"] = "";
	$fieldLabelsOAUTH_CLIENTS["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsOAUTH_CLIENTS["Japanese"]["USR_UID"] = "";
	$placeHoldersOAUTH_CLIENTS["Japanese"]["USR_UID"] = "";
	if (count($fieldToolTipsOAUTH_CLIENTS["Japanese"]))
		$tdataOAUTH_CLIENTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOAUTH_CLIENTS["English"] = array();
	$fieldToolTipsOAUTH_CLIENTS["English"] = array();
	$placeHoldersOAUTH_CLIENTS["English"] = array();
	$pageTitlesOAUTH_CLIENTS["English"] = array();
	$fieldLabelsOAUTH_CLIENTS["English"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_CLIENTS["English"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_CLIENTS["English"]["CLIENT_SECRET"] = "CLIENT SECRET";
	$fieldToolTipsOAUTH_CLIENTS["English"]["CLIENT_SECRET"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["CLIENT_SECRET"] = "";
	$fieldLabelsOAUTH_CLIENTS["English"]["CLIENT_NAME"] = "CLIENT NAME";
	$fieldToolTipsOAUTH_CLIENTS["English"]["CLIENT_NAME"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["CLIENT_NAME"] = "";
	$fieldLabelsOAUTH_CLIENTS["English"]["CLIENT_DESCRIPTION"] = "CLIENT DESCRIPTION";
	$fieldToolTipsOAUTH_CLIENTS["English"]["CLIENT_DESCRIPTION"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["CLIENT_DESCRIPTION"] = "";
	$fieldLabelsOAUTH_CLIENTS["English"]["CLIENT_WEBSITE"] = "CLIENT WEBSITE";
	$fieldToolTipsOAUTH_CLIENTS["English"]["CLIENT_WEBSITE"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["CLIENT_WEBSITE"] = "";
	$fieldLabelsOAUTH_CLIENTS["English"]["REDIRECT_URI"] = "REDIRECT URI";
	$fieldToolTipsOAUTH_CLIENTS["English"]["REDIRECT_URI"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["REDIRECT_URI"] = "";
	$fieldLabelsOAUTH_CLIENTS["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsOAUTH_CLIENTS["English"]["USR_UID"] = "";
	$placeHoldersOAUTH_CLIENTS["English"]["USR_UID"] = "";
	if (count($fieldToolTipsOAUTH_CLIENTS["English"]))
		$tdataOAUTH_CLIENTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOAUTH_CLIENTS[""] = array();
	$fieldToolTipsOAUTH_CLIENTS[""] = array();
	$placeHoldersOAUTH_CLIENTS[""] = array();
	$pageTitlesOAUTH_CLIENTS[""] = array();
	$fieldLabelsOAUTH_CLIENTS[""]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_CLIENTS[""]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["CLIENT_ID"] = "";
	$fieldLabelsOAUTH_CLIENTS[""]["CLIENT_SECRET"] = "CLIENT SECRET";
	$fieldToolTipsOAUTH_CLIENTS[""]["CLIENT_SECRET"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["CLIENT_SECRET"] = "";
	$fieldLabelsOAUTH_CLIENTS[""]["CLIENT_NAME"] = "CLIENT NAME";
	$fieldToolTipsOAUTH_CLIENTS[""]["CLIENT_NAME"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["CLIENT_NAME"] = "";
	$fieldLabelsOAUTH_CLIENTS[""]["CLIENT_DESCRIPTION"] = "CLIENT DESCRIPTION";
	$fieldToolTipsOAUTH_CLIENTS[""]["CLIENT_DESCRIPTION"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["CLIENT_DESCRIPTION"] = "";
	$fieldLabelsOAUTH_CLIENTS[""]["CLIENT_WEBSITE"] = "CLIENT WEBSITE";
	$fieldToolTipsOAUTH_CLIENTS[""]["CLIENT_WEBSITE"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["CLIENT_WEBSITE"] = "";
	$fieldLabelsOAUTH_CLIENTS[""]["REDIRECT_URI"] = "REDIRECT URI";
	$fieldToolTipsOAUTH_CLIENTS[""]["REDIRECT_URI"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["REDIRECT_URI"] = "";
	$fieldLabelsOAUTH_CLIENTS[""]["USR_UID"] = "USR UID";
	$fieldToolTipsOAUTH_CLIENTS[""]["USR_UID"] = "";
	$placeHoldersOAUTH_CLIENTS[""]["USR_UID"] = "";
	if (count($fieldToolTipsOAUTH_CLIENTS[""]))
		$tdataOAUTH_CLIENTS[".isUseToolTips"] = true;
}


	$tdataOAUTH_CLIENTS[".NCSearch"] = true;



$tdataOAUTH_CLIENTS[".shortTableName"] = "OAUTH_CLIENTS";
$tdataOAUTH_CLIENTS[".nSecOptions"] = 0;
$tdataOAUTH_CLIENTS[".recsPerRowPrint"] = 1;
$tdataOAUTH_CLIENTS[".mainTableOwnerID"] = "";
$tdataOAUTH_CLIENTS[".moveNext"] = 1;
$tdataOAUTH_CLIENTS[".entityType"] = 0;

$tdataOAUTH_CLIENTS[".strOriginalTableName"] = "OAUTH_CLIENTS";

	



$tdataOAUTH_CLIENTS[".showAddInPopup"] = false;

$tdataOAUTH_CLIENTS[".showEditInPopup"] = false;

$tdataOAUTH_CLIENTS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOAUTH_CLIENTS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOAUTH_CLIENTS[".fieldsForRegister"] = array();
	
$tdataOAUTH_CLIENTS[".listAjax"] = false;

	$tdataOAUTH_CLIENTS[".audit"] = false;

	$tdataOAUTH_CLIENTS[".locking"] = false;

$tdataOAUTH_CLIENTS[".edit"] = true;
$tdataOAUTH_CLIENTS[".afterEditAction"] = 1;
$tdataOAUTH_CLIENTS[".closePopupAfterEdit"] = 1;
$tdataOAUTH_CLIENTS[".afterEditActionDetTable"] = "";

$tdataOAUTH_CLIENTS[".add"] = true;
$tdataOAUTH_CLIENTS[".afterAddAction"] = 1;
$tdataOAUTH_CLIENTS[".closePopupAfterAdd"] = 1;
$tdataOAUTH_CLIENTS[".afterAddActionDetTable"] = "";

$tdataOAUTH_CLIENTS[".list"] = true;



$tdataOAUTH_CLIENTS[".reorderRecordsByHeader"] = true;



$tdataOAUTH_CLIENTS[".view"] = true;

$tdataOAUTH_CLIENTS[".import"] = true;

$tdataOAUTH_CLIENTS[".exportTo"] = true;

$tdataOAUTH_CLIENTS[".printFriendly"] = true;

$tdataOAUTH_CLIENTS[".delete"] = true;

$tdataOAUTH_CLIENTS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOAUTH_CLIENTS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOAUTH_CLIENTS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOAUTH_CLIENTS[".searchSaving"] = false;
//

$tdataOAUTH_CLIENTS[".showSearchPanel"] = true;
		$tdataOAUTH_CLIENTS[".flexibleSearch"] = true;

$tdataOAUTH_CLIENTS[".isUseAjaxSuggest"] = true;

$tdataOAUTH_CLIENTS[".rowHighlite"] = true;



				

$tdataOAUTH_CLIENTS[".ajaxCodeSnippetAdded"] = false;

$tdataOAUTH_CLIENTS[".buttonsAdded"] = false;

$tdataOAUTH_CLIENTS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOAUTH_CLIENTS[".isUseTimeForSearch"] = false;





$tdataOAUTH_CLIENTS[".allSearchFields"] = array();
$tdataOAUTH_CLIENTS[".filterFields"] = array();
$tdataOAUTH_CLIENTS[".requiredSearchFields"] = array();

$tdataOAUTH_CLIENTS[".allSearchFields"][] = "CLIENT_ID";
	$tdataOAUTH_CLIENTS[".allSearchFields"][] = "CLIENT_SECRET";
	$tdataOAUTH_CLIENTS[".allSearchFields"][] = "CLIENT_NAME";
	$tdataOAUTH_CLIENTS[".allSearchFields"][] = "CLIENT_DESCRIPTION";
	$tdataOAUTH_CLIENTS[".allSearchFields"][] = "CLIENT_WEBSITE";
	$tdataOAUTH_CLIENTS[".allSearchFields"][] = "REDIRECT_URI";
	$tdataOAUTH_CLIENTS[".allSearchFields"][] = "USR_UID";
	

$tdataOAUTH_CLIENTS[".googleLikeFields"] = array();
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".googleLikeFields"][] = "USR_UID";


$tdataOAUTH_CLIENTS[".advSearchFields"] = array();
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".advSearchFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".tableType"] = "list";

$tdataOAUTH_CLIENTS[".printerPageOrientation"] = 0;
$tdataOAUTH_CLIENTS[".nPrinterPageScale"] = 100;

$tdataOAUTH_CLIENTS[".nPrinterSplitRecords"] = 40;

$tdataOAUTH_CLIENTS[".nPrinterPDFSplitRecords"] = 40;



$tdataOAUTH_CLIENTS[".geocodingEnabled"] = false;





$tdataOAUTH_CLIENTS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataOAUTH_CLIENTS[".pageSize"] = 20;

$tdataOAUTH_CLIENTS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOAUTH_CLIENTS[".strOrderBy"] = $tstrOrderBy;

$tdataOAUTH_CLIENTS[".orderindexes"] = array();

$tdataOAUTH_CLIENTS[".sqlHead"] = "SELECT CLIENT_ID,  	CLIENT_SECRET,  	CLIENT_NAME,  	CLIENT_DESCRIPTION,  	CLIENT_WEBSITE,  	REDIRECT_URI,  	USR_UID";
$tdataOAUTH_CLIENTS[".sqlFrom"] = "FROM OAUTH_CLIENTS";
$tdataOAUTH_CLIENTS[".sqlWhereExpr"] = "";
$tdataOAUTH_CLIENTS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOAUTH_CLIENTS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOAUTH_CLIENTS[".arrGroupsPerPage"] = $arrGPP;

$tdataOAUTH_CLIENTS[".highlightSearchResults"] = true;

$tableKeysOAUTH_CLIENTS = array();
$tableKeysOAUTH_CLIENTS[] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".Keys"] = $tableKeysOAUTH_CLIENTS;

$tdataOAUTH_CLIENTS[".listFields"] = array();
$tdataOAUTH_CLIENTS[".listFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".listFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".listFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".listFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".listFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".listFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".listFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".hideMobileList"] = array();


$tdataOAUTH_CLIENTS[".viewFields"] = array();
$tdataOAUTH_CLIENTS[".viewFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".viewFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".viewFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".viewFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".viewFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".viewFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".viewFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".addFields"] = array();
$tdataOAUTH_CLIENTS[".addFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".addFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".addFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".addFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".addFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".addFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".addFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".masterListFields"] = array();
$tdataOAUTH_CLIENTS[".masterListFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".masterListFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".masterListFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".masterListFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".masterListFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".masterListFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".masterListFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".inlineAddFields"] = array();
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".inlineAddFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".editFields"] = array();
$tdataOAUTH_CLIENTS[".editFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".editFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".editFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".editFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".editFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".editFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".editFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".inlineEditFields"] = array();
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".inlineEditFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".updateSelectedFields"] = array();
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".updateSelectedFields"][] = "USR_UID";


$tdataOAUTH_CLIENTS[".exportFields"] = array();
$tdataOAUTH_CLIENTS[".exportFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".exportFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".exportFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".exportFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".exportFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".exportFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".exportFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".importFields"] = array();
$tdataOAUTH_CLIENTS[".importFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".importFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".importFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".importFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".importFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".importFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".importFields"][] = "USR_UID";

$tdataOAUTH_CLIENTS[".printFields"] = array();
$tdataOAUTH_CLIENTS[".printFields"][] = "CLIENT_ID";
$tdataOAUTH_CLIENTS[".printFields"][] = "CLIENT_SECRET";
$tdataOAUTH_CLIENTS[".printFields"][] = "CLIENT_NAME";
$tdataOAUTH_CLIENTS[".printFields"][] = "CLIENT_DESCRIPTION";
$tdataOAUTH_CLIENTS[".printFields"][] = "CLIENT_WEBSITE";
$tdataOAUTH_CLIENTS[".printFields"][] = "REDIRECT_URI";
$tdataOAUTH_CLIENTS[".printFields"][] = "USR_UID";

//	CLIENT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CLIENT_ID";
	$fdata["GoodName"] = "CLIENT_ID";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","CLIENT_ID");
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




	$tdataOAUTH_CLIENTS["CLIENT_ID"] = $fdata;
//	CLIENT_SECRET
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CLIENT_SECRET";
	$fdata["GoodName"] = "CLIENT_SECRET";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","CLIENT_SECRET");
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

		$fdata["strField"] = "CLIENT_SECRET";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_SECRET";

	
	
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




	$tdataOAUTH_CLIENTS["CLIENT_SECRET"] = $fdata;
//	CLIENT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CLIENT_NAME";
	$fdata["GoodName"] = "CLIENT_NAME";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","CLIENT_NAME");
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

		$fdata["strField"] = "CLIENT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdataOAUTH_CLIENTS["CLIENT_NAME"] = $fdata;
//	CLIENT_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CLIENT_DESCRIPTION";
	$fdata["GoodName"] = "CLIENT_DESCRIPTION";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","CLIENT_DESCRIPTION");
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

		$fdata["strField"] = "CLIENT_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_DESCRIPTION";

	
	
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
			$edata["EditParams"].= " maxlength=1024";

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




	$tdataOAUTH_CLIENTS["CLIENT_DESCRIPTION"] = $fdata;
//	CLIENT_WEBSITE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CLIENT_WEBSITE";
	$fdata["GoodName"] = "CLIENT_WEBSITE";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","CLIENT_WEBSITE");
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

		$fdata["strField"] = "CLIENT_WEBSITE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_WEBSITE";

	
	
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
			$edata["EditParams"].= " maxlength=1024";

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




	$tdataOAUTH_CLIENTS["CLIENT_WEBSITE"] = $fdata;
//	REDIRECT_URI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "REDIRECT_URI";
	$fdata["GoodName"] = "REDIRECT_URI";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","REDIRECT_URI");
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




	$tdataOAUTH_CLIENTS["REDIRECT_URI"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "OAUTH_CLIENTS";
	$fdata["Label"] = GetFieldLabel("OAUTH_CLIENTS","USR_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataOAUTH_CLIENTS["USR_UID"] = $fdata;


$tables_data["OAUTH_CLIENTS"]=&$tdataOAUTH_CLIENTS;
$field_labels["OAUTH_CLIENTS"] = &$fieldLabelsOAUTH_CLIENTS;
$fieldToolTips["OAUTH_CLIENTS"] = &$fieldToolTipsOAUTH_CLIENTS;
$placeHolders["OAUTH_CLIENTS"] = &$placeHoldersOAUTH_CLIENTS;
$page_titles["OAUTH_CLIENTS"] = &$pageTitlesOAUTH_CLIENTS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OAUTH_CLIENTS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["OAUTH_CLIENTS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OAUTH_CLIENTS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CLIENT_ID,  	CLIENT_SECRET,  	CLIENT_NAME,  	CLIENT_DESCRIPTION,  	CLIENT_WEBSITE,  	REDIRECT_URI,  	USR_UID";
$proto0["m_strFrom"] = "FROM OAUTH_CLIENTS";
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
	"m_strName" => "CLIENT_ID",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto6["m_sql"] = "CLIENT_ID";
$proto6["m_srcTableName"] = "OAUTH_CLIENTS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_SECRET",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto8["m_sql"] = "CLIENT_SECRET";
$proto8["m_srcTableName"] = "OAUTH_CLIENTS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_NAME",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto10["m_sql"] = "CLIENT_NAME";
$proto10["m_srcTableName"] = "OAUTH_CLIENTS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_DESCRIPTION",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto12["m_sql"] = "CLIENT_DESCRIPTION";
$proto12["m_srcTableName"] = "OAUTH_CLIENTS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_WEBSITE",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto14["m_sql"] = "CLIENT_WEBSITE";
$proto14["m_srcTableName"] = "OAUTH_CLIENTS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "REDIRECT_URI",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto16["m_sql"] = "REDIRECT_URI";
$proto16["m_srcTableName"] = "OAUTH_CLIENTS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "OAUTH_CLIENTS",
	"m_srcTableName" => "OAUTH_CLIENTS"
));

$proto18["m_sql"] = "USR_UID";
$proto18["m_srcTableName"] = "OAUTH_CLIENTS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "OAUTH_CLIENTS";
$proto21["m_srcTableName"] = "OAUTH_CLIENTS";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "CLIENT_ID";
$proto21["m_columns"][] = "CLIENT_SECRET";
$proto21["m_columns"][] = "CLIENT_NAME";
$proto21["m_columns"][] = "CLIENT_DESCRIPTION";
$proto21["m_columns"][] = "CLIENT_WEBSITE";
$proto21["m_columns"][] = "REDIRECT_URI";
$proto21["m_columns"][] = "USR_UID";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "OAUTH_CLIENTS";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "OAUTH_CLIENTS";
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
$proto0["m_srcTableName"]="OAUTH_CLIENTS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OAUTH_CLIENTS = createSqlQuery_OAUTH_CLIENTS();


	
						;

							

$tdataOAUTH_CLIENTS[".sqlquery"] = $queryData_OAUTH_CLIENTS;

$tableEvents["OAUTH_CLIENTS"] = new eventsBase;
$tdataOAUTH_CLIENTS[".hasEvents"] = false;

?>
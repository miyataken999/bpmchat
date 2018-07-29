<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGROUPWF = array();
	$tdataGROUPWF[".truncateText"] = true;
	$tdataGROUPWF[".NumberOfChars"] = 20;
	$tdataGROUPWF[".ShortName"] = "GROUPWF";
	$tdataGROUPWF[".OwnerID"] = "";
	$tdataGROUPWF[".OriginalTable"] = "GROUPWF";

//	field labels
$fieldLabelsGROUPWF = array();
$fieldToolTipsGROUPWF = array();
$pageTitlesGROUPWF = array();
$placeHoldersGROUPWF = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsGROUPWF["Japanese"] = array();
	$fieldToolTipsGROUPWF["Japanese"] = array();
	$placeHoldersGROUPWF["Japanese"] = array();
	$pageTitlesGROUPWF["Japanese"] = array();
	$fieldLabelsGROUPWF["Japanese"]["GRP_UID"] = "GRPのuid";
	$fieldToolTipsGROUPWF["Japanese"]["GRP_UID"] = "";
	$placeHoldersGROUPWF["Japanese"]["GRP_UID"] = "";
	$fieldLabelsGROUPWF["Japanese"]["GRP_TITLE"] = "GRPタイトル";
	$fieldToolTipsGROUPWF["Japanese"]["GRP_TITLE"] = "";
	$placeHoldersGROUPWF["Japanese"]["GRP_TITLE"] = "";
	$fieldLabelsGROUPWF["Japanese"]["GRP_STATUS"] = "GRPのステータス";
	$fieldToolTipsGROUPWF["Japanese"]["GRP_STATUS"] = "";
	$placeHoldersGROUPWF["Japanese"]["GRP_STATUS"] = "";
	$fieldLabelsGROUPWF["Japanese"]["GRP_LDAP_DN"] = "GRP LDAP DN";
	$fieldToolTipsGROUPWF["Japanese"]["GRP_LDAP_DN"] = "";
	$placeHoldersGROUPWF["Japanese"]["GRP_LDAP_DN"] = "";
	$fieldLabelsGROUPWF["Japanese"]["GRP_UX"] = "GRP UX";
	$fieldToolTipsGROUPWF["Japanese"]["GRP_UX"] = "";
	$placeHoldersGROUPWF["Japanese"]["GRP_UX"] = "";
	if (count($fieldToolTipsGROUPWF["Japanese"]))
		$tdataGROUPWF[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGROUPWF["English"] = array();
	$fieldToolTipsGROUPWF["English"] = array();
	$placeHoldersGROUPWF["English"] = array();
	$pageTitlesGROUPWF["English"] = array();
	$fieldLabelsGROUPWF["English"]["GRP_UID"] = "GRPのuid";
	$fieldToolTipsGROUPWF["English"]["GRP_UID"] = "";
	$placeHoldersGROUPWF["English"]["GRP_UID"] = "";
	$fieldLabelsGROUPWF["English"]["GRP_TITLE"] = "GRPタイトル";
	$fieldToolTipsGROUPWF["English"]["GRP_TITLE"] = "";
	$placeHoldersGROUPWF["English"]["GRP_TITLE"] = "";
	$fieldLabelsGROUPWF["English"]["GRP_STATUS"] = "GRPのステータス";
	$fieldToolTipsGROUPWF["English"]["GRP_STATUS"] = "";
	$placeHoldersGROUPWF["English"]["GRP_STATUS"] = "";
	$fieldLabelsGROUPWF["English"]["GRP_LDAP_DN"] = "GRP LDAP DN";
	$fieldToolTipsGROUPWF["English"]["GRP_LDAP_DN"] = "";
	$placeHoldersGROUPWF["English"]["GRP_LDAP_DN"] = "";
	$fieldLabelsGROUPWF["English"]["GRP_UX"] = "GRP UX";
	$fieldToolTipsGROUPWF["English"]["GRP_UX"] = "";
	$placeHoldersGROUPWF["English"]["GRP_UX"] = "";
	if (count($fieldToolTipsGROUPWF["English"]))
		$tdataGROUPWF[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGROUPWF[""] = array();
	$fieldToolTipsGROUPWF[""] = array();
	$placeHoldersGROUPWF[""] = array();
	$pageTitlesGROUPWF[""] = array();
	if (count($fieldToolTipsGROUPWF[""]))
		$tdataGROUPWF[".isUseToolTips"] = true;
}


	$tdataGROUPWF[".NCSearch"] = true;



$tdataGROUPWF[".shortTableName"] = "GROUPWF";
$tdataGROUPWF[".nSecOptions"] = 0;
$tdataGROUPWF[".recsPerRowPrint"] = 1;
$tdataGROUPWF[".mainTableOwnerID"] = "";
$tdataGROUPWF[".moveNext"] = 0;
$tdataGROUPWF[".entityType"] = 0;

$tdataGROUPWF[".strOriginalTableName"] = "GROUPWF";

	



$tdataGROUPWF[".showAddInPopup"] = false;

$tdataGROUPWF[".showEditInPopup"] = false;

$tdataGROUPWF[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGROUPWF[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGROUPWF[".fieldsForRegister"] = array();
	
$tdataGROUPWF[".listAjax"] = false;

	$tdataGROUPWF[".audit"] = true;

	$tdataGROUPWF[".locking"] = false;

$tdataGROUPWF[".edit"] = true;
$tdataGROUPWF[".afterEditAction"] = 1;
$tdataGROUPWF[".closePopupAfterEdit"] = 1;
$tdataGROUPWF[".afterEditActionDetTable"] = "";

$tdataGROUPWF[".add"] = true;
$tdataGROUPWF[".afterAddAction"] = 1;
$tdataGROUPWF[".closePopupAfterAdd"] = 1;
$tdataGROUPWF[".afterAddActionDetTable"] = "";

$tdataGROUPWF[".list"] = true;

$tdataGROUPWF[".inlineEdit"] = true;


$tdataGROUPWF[".reorderRecordsByHeader"] = true;
$tdataGROUPWF[".createSortByDropdown"] = true;
$tdataGROUPWF[".strSortControlSettingsJSON"] = "";



$tdataGROUPWF[".inlineAdd"] = true;
$tdataGROUPWF[".view"] = true;

$tdataGROUPWF[".import"] = true;

$tdataGROUPWF[".exportTo"] = true;

$tdataGROUPWF[".printFriendly"] = true;

$tdataGROUPWF[".delete"] = true;

$tdataGROUPWF[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataGROUPWF[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataGROUPWF[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataGROUPWF[".searchSaving"] = false;
//

$tdataGROUPWF[".showSearchPanel"] = true;
		$tdataGROUPWF[".flexibleSearch"] = true;

$tdataGROUPWF[".isUseAjaxSuggest"] = true;

$tdataGROUPWF[".rowHighlite"] = true;



				

$tdataGROUPWF[".ajaxCodeSnippetAdded"] = false;

$tdataGROUPWF[".buttonsAdded"] = false;

$tdataGROUPWF[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGROUPWF[".isUseTimeForSearch"] = false;





$tdataGROUPWF[".allSearchFields"] = array();
$tdataGROUPWF[".filterFields"] = array();
$tdataGROUPWF[".requiredSearchFields"] = array();

$tdataGROUPWF[".allSearchFields"][] = "GRP_UID";
	$tdataGROUPWF[".allSearchFields"][] = "GRP_TITLE";
	$tdataGROUPWF[".allSearchFields"][] = "GRP_STATUS";
	$tdataGROUPWF[".allSearchFields"][] = "GRP_LDAP_DN";
	$tdataGROUPWF[".allSearchFields"][] = "GRP_UX";
	

$tdataGROUPWF[".googleLikeFields"] = array();
$tdataGROUPWF[".googleLikeFields"][] = "GRP_UID";
$tdataGROUPWF[".googleLikeFields"][] = "GRP_TITLE";
$tdataGROUPWF[".googleLikeFields"][] = "GRP_STATUS";
$tdataGROUPWF[".googleLikeFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".googleLikeFields"][] = "GRP_UX";


$tdataGROUPWF[".advSearchFields"] = array();
$tdataGROUPWF[".advSearchFields"][] = "GRP_UID";
$tdataGROUPWF[".advSearchFields"][] = "GRP_TITLE";
$tdataGROUPWF[".advSearchFields"][] = "GRP_STATUS";
$tdataGROUPWF[".advSearchFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".advSearchFields"][] = "GRP_UX";

$tdataGROUPWF[".tableType"] = "list";

$tdataGROUPWF[".printerPageOrientation"] = 0;
$tdataGROUPWF[".nPrinterPageScale"] = 100;

$tdataGROUPWF[".nPrinterSplitRecords"] = 40;

$tdataGROUPWF[".nPrinterPDFSplitRecords"] = 40;



$tdataGROUPWF[".geocodingEnabled"] = false;





$tdataGROUPWF[".listGridLayout"] = 3;


$tdataGROUPWF[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataGROUPWF[".pageSize"] = 20;

$tdataGROUPWF[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGROUPWF[".strOrderBy"] = $tstrOrderBy;

$tdataGROUPWF[".orderindexes"] = array();

$tdataGROUPWF[".sqlHead"] = "SELECT GRP_UID,  	GRP_TITLE,  	GRP_STATUS,  	GRP_LDAP_DN,  	GRP_UX";
$tdataGROUPWF[".sqlFrom"] = "FROM GROUPWF";
$tdataGROUPWF[".sqlWhereExpr"] = "";
$tdataGROUPWF[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGROUPWF[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGROUPWF[".arrGroupsPerPage"] = $arrGPP;

$tdataGROUPWF[".highlightSearchResults"] = true;

$tableKeysGROUPWF = array();
$tableKeysGROUPWF[] = "GRP_UID";
$tdataGROUPWF[".Keys"] = $tableKeysGROUPWF;

$tdataGROUPWF[".listFields"] = array();
$tdataGROUPWF[".listFields"][] = "GRP_UID";
$tdataGROUPWF[".listFields"][] = "GRP_TITLE";
$tdataGROUPWF[".listFields"][] = "GRP_STATUS";
$tdataGROUPWF[".listFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".listFields"][] = "GRP_UX";

$tdataGROUPWF[".hideMobileList"] = array();


$tdataGROUPWF[".viewFields"] = array();
$tdataGROUPWF[".viewFields"][] = "GRP_UID";
$tdataGROUPWF[".viewFields"][] = "GRP_TITLE";
$tdataGROUPWF[".viewFields"][] = "GRP_STATUS";
$tdataGROUPWF[".viewFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".viewFields"][] = "GRP_UX";

$tdataGROUPWF[".addFields"] = array();
$tdataGROUPWF[".addFields"][] = "GRP_UID";
$tdataGROUPWF[".addFields"][] = "GRP_TITLE";
$tdataGROUPWF[".addFields"][] = "GRP_STATUS";
$tdataGROUPWF[".addFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".addFields"][] = "GRP_UX";

$tdataGROUPWF[".masterListFields"] = array();
$tdataGROUPWF[".masterListFields"][] = "GRP_UID";
$tdataGROUPWF[".masterListFields"][] = "GRP_TITLE";
$tdataGROUPWF[".masterListFields"][] = "GRP_STATUS";
$tdataGROUPWF[".masterListFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".masterListFields"][] = "GRP_UX";

$tdataGROUPWF[".inlineAddFields"] = array();
$tdataGROUPWF[".inlineAddFields"][] = "GRP_UID";
$tdataGROUPWF[".inlineAddFields"][] = "GRP_TITLE";
$tdataGROUPWF[".inlineAddFields"][] = "GRP_STATUS";
$tdataGROUPWF[".inlineAddFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".inlineAddFields"][] = "GRP_UX";

$tdataGROUPWF[".editFields"] = array();
$tdataGROUPWF[".editFields"][] = "GRP_UID";
$tdataGROUPWF[".editFields"][] = "GRP_TITLE";
$tdataGROUPWF[".editFields"][] = "GRP_STATUS";
$tdataGROUPWF[".editFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".editFields"][] = "GRP_UX";

$tdataGROUPWF[".inlineEditFields"] = array();
$tdataGROUPWF[".inlineEditFields"][] = "GRP_UID";
$tdataGROUPWF[".inlineEditFields"][] = "GRP_TITLE";
$tdataGROUPWF[".inlineEditFields"][] = "GRP_STATUS";
$tdataGROUPWF[".inlineEditFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".inlineEditFields"][] = "GRP_UX";

$tdataGROUPWF[".updateSelectedFields"] = array();
$tdataGROUPWF[".updateSelectedFields"][] = "GRP_UID";
$tdataGROUPWF[".updateSelectedFields"][] = "GRP_TITLE";
$tdataGROUPWF[".updateSelectedFields"][] = "GRP_STATUS";
$tdataGROUPWF[".updateSelectedFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".updateSelectedFields"][] = "GRP_UX";


$tdataGROUPWF[".exportFields"] = array();
$tdataGROUPWF[".exportFields"][] = "GRP_UID";
$tdataGROUPWF[".exportFields"][] = "GRP_TITLE";
$tdataGROUPWF[".exportFields"][] = "GRP_STATUS";
$tdataGROUPWF[".exportFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".exportFields"][] = "GRP_UX";

$tdataGROUPWF[".importFields"] = array();
$tdataGROUPWF[".importFields"][] = "GRP_UID";
$tdataGROUPWF[".importFields"][] = "GRP_TITLE";
$tdataGROUPWF[".importFields"][] = "GRP_STATUS";
$tdataGROUPWF[".importFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".importFields"][] = "GRP_UX";

$tdataGROUPWF[".printFields"] = array();
$tdataGROUPWF[".printFields"][] = "GRP_UID";
$tdataGROUPWF[".printFields"][] = "GRP_TITLE";
$tdataGROUPWF[".printFields"][] = "GRP_STATUS";
$tdataGROUPWF[".printFields"][] = "GRP_LDAP_DN";
$tdataGROUPWF[".printFields"][] = "GRP_UX";

//	GRP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GRP_UID";
	$fdata["GoodName"] = "GRP_UID";
	$fdata["ownerTable"] = "GROUPWF";
	$fdata["Label"] = GetFieldLabel("GROUPWF","GRP_UID");
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

		$fdata["strField"] = "GRP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_UID";

	
	
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




	$tdataGROUPWF["GRP_UID"] = $fdata;
//	GRP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GRP_TITLE";
	$fdata["GoodName"] = "GRP_TITLE";
	$fdata["ownerTable"] = "GROUPWF";
	$fdata["Label"] = GetFieldLabel("GROUPWF","GRP_TITLE");
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

		$fdata["strField"] = "GRP_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_TITLE";

	
	
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




	$tdataGROUPWF["GRP_TITLE"] = $fdata;
//	GRP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "GRP_STATUS";
	$fdata["GoodName"] = "GRP_STATUS";
	$fdata["ownerTable"] = "GROUPWF";
	$fdata["Label"] = GetFieldLabel("GROUPWF","GRP_STATUS");
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

		$fdata["strField"] = "GRP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataGROUPWF["GRP_STATUS"] = $fdata;
//	GRP_LDAP_DN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "GRP_LDAP_DN";
	$fdata["GoodName"] = "GRP_LDAP_DN";
	$fdata["ownerTable"] = "GROUPWF";
	$fdata["Label"] = GetFieldLabel("GROUPWF","GRP_LDAP_DN");
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

		$fdata["strField"] = "GRP_LDAP_DN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_LDAP_DN";

	
	
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




	$tdataGROUPWF["GRP_LDAP_DN"] = $fdata;
//	GRP_UX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GRP_UX";
	$fdata["GoodName"] = "GRP_UX";
	$fdata["ownerTable"] = "GROUPWF";
	$fdata["Label"] = GetFieldLabel("GROUPWF","GRP_UX");
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

		$fdata["strField"] = "GRP_UX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_UX";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataGROUPWF["GRP_UX"] = $fdata;


$tables_data["GROUPWF"]=&$tdataGROUPWF;
$field_labels["GROUPWF"] = &$fieldLabelsGROUPWF;
$fieldToolTips["GROUPWF"] = &$fieldToolTipsGROUPWF;
$placeHolders["GROUPWF"] = &$placeHoldersGROUPWF;
$page_titles["GROUPWF"] = &$pageTitlesGROUPWF;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GROUPWF"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GROUPWF"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GROUPWF()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GRP_UID,  	GRP_TITLE,  	GRP_STATUS,  	GRP_LDAP_DN,  	GRP_UX";
$proto0["m_strFrom"] = "FROM GROUPWF";
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
	"m_strName" => "GRP_UID",
	"m_strTable" => "GROUPWF",
	"m_srcTableName" => "GROUPWF"
));

$proto6["m_sql"] = "GRP_UID";
$proto6["m_srcTableName"] = "GROUPWF";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GRP_TITLE",
	"m_strTable" => "GROUPWF",
	"m_srcTableName" => "GROUPWF"
));

$proto8["m_sql"] = "GRP_TITLE";
$proto8["m_srcTableName"] = "GROUPWF";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "GRP_STATUS",
	"m_strTable" => "GROUPWF",
	"m_srcTableName" => "GROUPWF"
));

$proto10["m_sql"] = "GRP_STATUS";
$proto10["m_srcTableName"] = "GROUPWF";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "GRP_LDAP_DN",
	"m_strTable" => "GROUPWF",
	"m_srcTableName" => "GROUPWF"
));

$proto12["m_sql"] = "GRP_LDAP_DN";
$proto12["m_srcTableName"] = "GROUPWF";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "GRP_UX",
	"m_strTable" => "GROUPWF",
	"m_srcTableName" => "GROUPWF"
));

$proto14["m_sql"] = "GRP_UX";
$proto14["m_srcTableName"] = "GROUPWF";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "GROUPWF";
$proto17["m_srcTableName"] = "GROUPWF";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "GRP_UID";
$proto17["m_columns"][] = "GRP_TITLE";
$proto17["m_columns"][] = "GRP_STATUS";
$proto17["m_columns"][] = "GRP_LDAP_DN";
$proto17["m_columns"][] = "GRP_UX";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "GROUPWF";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "GROUPWF";
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
$proto0["m_srcTableName"]="GROUPWF";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GROUPWF = createSqlQuery_GROUPWF();


	
						;

					

$tdataGROUPWF[".sqlquery"] = $queryData_GROUPWF;

$tableEvents["GROUPWF"] = new eventsBase;
$tdataGROUPWF[".hasEvents"] = false;

?>
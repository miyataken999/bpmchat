<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDEPARTMENT = array();
	$tdataDEPARTMENT[".truncateText"] = true;
	$tdataDEPARTMENT[".NumberOfChars"] = 20;
	$tdataDEPARTMENT[".ShortName"] = "DEPARTMENT";
	$tdataDEPARTMENT[".OwnerID"] = "DEP_LDAP_DN";
	$tdataDEPARTMENT[".OriginalTable"] = "DEPARTMENT";

//	field labels
$fieldLabelsDEPARTMENT = array();
$fieldToolTipsDEPARTMENT = array();
$pageTitlesDEPARTMENT = array();
$placeHoldersDEPARTMENT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDEPARTMENT["Japanese"] = array();
	$fieldToolTipsDEPARTMENT["Japanese"] = array();
	$placeHoldersDEPARTMENT["Japanese"] = array();
	$pageTitlesDEPARTMENT["Japanese"] = array();
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_UID"] = "uid";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_UID"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_UID"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_TITLE"] = "タイトル";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_TITLE"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_TITLE"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_PARENT"] = "親";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_PARENT"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_PARENT"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_MANAGER"] = "マネージャー";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_MANAGER"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_MANAGER"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_LOCATION"] = "場所";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_LOCATION"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_LOCATION"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_STATUS"] = "状態";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_STATUS"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_STATUS"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_REF_CODE"] = "参照コード";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_REF_CODE"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_REF_CODE"] = "";
	$fieldLabelsDEPARTMENT["Japanese"]["DEP_LDAP_DN"] = "LDAP DN";
	$fieldToolTipsDEPARTMENT["Japanese"]["DEP_LDAP_DN"] = "";
	$placeHoldersDEPARTMENT["Japanese"]["DEP_LDAP_DN"] = "";
	if (count($fieldToolTipsDEPARTMENT["Japanese"]))
		$tdataDEPARTMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDEPARTMENT["English"] = array();
	$fieldToolTipsDEPARTMENT["English"] = array();
	$placeHoldersDEPARTMENT["English"] = array();
	$pageTitlesDEPARTMENT["English"] = array();
	$fieldLabelsDEPARTMENT["English"]["DEP_UID"] = "uid";
	$fieldToolTipsDEPARTMENT["English"]["DEP_UID"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_UID"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_TITLE"] = "タイトル";
	$fieldToolTipsDEPARTMENT["English"]["DEP_TITLE"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_TITLE"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_PARENT"] = "親";
	$fieldToolTipsDEPARTMENT["English"]["DEP_PARENT"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_PARENT"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_MANAGER"] = "マネージャー";
	$fieldToolTipsDEPARTMENT["English"]["DEP_MANAGER"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_MANAGER"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_LOCATION"] = "場所";
	$fieldToolTipsDEPARTMENT["English"]["DEP_LOCATION"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_LOCATION"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_STATUS"] = "状態";
	$fieldToolTipsDEPARTMENT["English"]["DEP_STATUS"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_STATUS"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_REF_CODE"] = "参照コード";
	$fieldToolTipsDEPARTMENT["English"]["DEP_REF_CODE"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_REF_CODE"] = "";
	$fieldLabelsDEPARTMENT["English"]["DEP_LDAP_DN"] = "LDAP DN";
	$fieldToolTipsDEPARTMENT["English"]["DEP_LDAP_DN"] = "";
	$placeHoldersDEPARTMENT["English"]["DEP_LDAP_DN"] = "";
	if (count($fieldToolTipsDEPARTMENT["English"]))
		$tdataDEPARTMENT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDEPARTMENT[""] = array();
	$fieldToolTipsDEPARTMENT[""] = array();
	$placeHoldersDEPARTMENT[""] = array();
	$pageTitlesDEPARTMENT[""] = array();
	if (count($fieldToolTipsDEPARTMENT[""]))
		$tdataDEPARTMENT[".isUseToolTips"] = true;
}


	$tdataDEPARTMENT[".NCSearch"] = true;



$tdataDEPARTMENT[".shortTableName"] = "DEPARTMENT";
$tdataDEPARTMENT[".nSecOptions"] = 1;
$tdataDEPARTMENT[".recsPerRowPrint"] = 1;
$tdataDEPARTMENT[".mainTableOwnerID"] = "DEP_LDAP_DN";
$tdataDEPARTMENT[".moveNext"] = 0;
$tdataDEPARTMENT[".entityType"] = 0;

$tdataDEPARTMENT[".strOriginalTableName"] = "DEPARTMENT";

	



$tdataDEPARTMENT[".showAddInPopup"] = false;

$tdataDEPARTMENT[".showEditInPopup"] = false;

$tdataDEPARTMENT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDEPARTMENT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDEPARTMENT[".fieldsForRegister"] = array();
	
$tdataDEPARTMENT[".listAjax"] = false;

	$tdataDEPARTMENT[".audit"] = true;

	$tdataDEPARTMENT[".locking"] = false;

$tdataDEPARTMENT[".edit"] = true;
$tdataDEPARTMENT[".afterEditAction"] = 1;
$tdataDEPARTMENT[".closePopupAfterEdit"] = 1;
$tdataDEPARTMENT[".afterEditActionDetTable"] = "";

$tdataDEPARTMENT[".add"] = true;
$tdataDEPARTMENT[".afterAddAction"] = 1;
$tdataDEPARTMENT[".closePopupAfterAdd"] = 1;
$tdataDEPARTMENT[".afterAddActionDetTable"] = "";

$tdataDEPARTMENT[".list"] = true;

$tdataDEPARTMENT[".inlineEdit"] = true;


$tdataDEPARTMENT[".reorderRecordsByHeader"] = true;
$tdataDEPARTMENT[".createSortByDropdown"] = true;
$tdataDEPARTMENT[".strSortControlSettingsJSON"] = "";



$tdataDEPARTMENT[".inlineAdd"] = true;
$tdataDEPARTMENT[".view"] = true;

$tdataDEPARTMENT[".import"] = true;

$tdataDEPARTMENT[".exportTo"] = true;

$tdataDEPARTMENT[".printFriendly"] = true;

$tdataDEPARTMENT[".delete"] = true;

$tdataDEPARTMENT[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataDEPARTMENT[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataDEPARTMENT[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataDEPARTMENT[".searchSaving"] = false;
//

$tdataDEPARTMENT[".showSearchPanel"] = true;
		$tdataDEPARTMENT[".flexibleSearch"] = true;

$tdataDEPARTMENT[".isUseAjaxSuggest"] = true;

$tdataDEPARTMENT[".rowHighlite"] = true;



				

$tdataDEPARTMENT[".ajaxCodeSnippetAdded"] = false;

$tdataDEPARTMENT[".buttonsAdded"] = false;

$tdataDEPARTMENT[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDEPARTMENT[".isUseTimeForSearch"] = false;





$tdataDEPARTMENT[".allSearchFields"] = array();
$tdataDEPARTMENT[".filterFields"] = array();
$tdataDEPARTMENT[".requiredSearchFields"] = array();

$tdataDEPARTMENT[".allSearchFields"][] = "DEP_UID";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_TITLE";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_PARENT";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_MANAGER";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_LOCATION";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_STATUS";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_REF_CODE";
	$tdataDEPARTMENT[".allSearchFields"][] = "DEP_LDAP_DN";
	

$tdataDEPARTMENT[".googleLikeFields"] = array();
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_UID";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".googleLikeFields"][] = "DEP_LDAP_DN";


$tdataDEPARTMENT[".advSearchFields"] = array();
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_UID";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".advSearchFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".tableType"] = "list";

$tdataDEPARTMENT[".printerPageOrientation"] = 0;
$tdataDEPARTMENT[".nPrinterPageScale"] = 100;

$tdataDEPARTMENT[".nPrinterSplitRecords"] = 40;

$tdataDEPARTMENT[".nPrinterPDFSplitRecords"] = 40;



$tdataDEPARTMENT[".geocodingEnabled"] = false;





$tdataDEPARTMENT[".listGridLayout"] = 3;


$tdataDEPARTMENT[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataDEPARTMENT[".pageSize"] = 20;

$tdataDEPARTMENT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDEPARTMENT[".strOrderBy"] = $tstrOrderBy;

$tdataDEPARTMENT[".orderindexes"] = array();

$tdataDEPARTMENT[".sqlHead"] = "SELECT DEP_UID,  	DEP_TITLE,  	DEP_PARENT,  	DEP_MANAGER,  	DEP_LOCATION,  	DEP_STATUS,  	DEP_REF_CODE,  	DEP_LDAP_DN";
$tdataDEPARTMENT[".sqlFrom"] = "FROM DEPARTMENT";
$tdataDEPARTMENT[".sqlWhereExpr"] = "";
$tdataDEPARTMENT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDEPARTMENT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDEPARTMENT[".arrGroupsPerPage"] = $arrGPP;

$tdataDEPARTMENT[".highlightSearchResults"] = true;

$tableKeysDEPARTMENT = array();
$tableKeysDEPARTMENT[] = "DEP_UID";
$tdataDEPARTMENT[".Keys"] = $tableKeysDEPARTMENT;

$tdataDEPARTMENT[".listFields"] = array();
$tdataDEPARTMENT[".listFields"][] = "DEP_UID";
$tdataDEPARTMENT[".listFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".listFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".listFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".listFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".listFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".listFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".listFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".hideMobileList"] = array();


$tdataDEPARTMENT[".viewFields"] = array();
$tdataDEPARTMENT[".viewFields"][] = "DEP_UID";
$tdataDEPARTMENT[".viewFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".viewFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".viewFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".viewFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".viewFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".viewFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".viewFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".addFields"] = array();
$tdataDEPARTMENT[".addFields"][] = "DEP_UID";
$tdataDEPARTMENT[".addFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".addFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".addFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".addFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".addFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".addFields"][] = "DEP_REF_CODE";

$tdataDEPARTMENT[".masterListFields"] = array();
$tdataDEPARTMENT[".masterListFields"][] = "DEP_UID";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".masterListFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".inlineAddFields"] = array();
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_UID";
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".inlineAddFields"][] = "DEP_REF_CODE";

$tdataDEPARTMENT[".editFields"] = array();
$tdataDEPARTMENT[".editFields"][] = "DEP_UID";
$tdataDEPARTMENT[".editFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".editFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".editFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".editFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".editFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".editFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".editFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".inlineEditFields"] = array();
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_UID";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".inlineEditFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".updateSelectedFields"] = array();
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_UID";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".updateSelectedFields"][] = "DEP_LDAP_DN";


$tdataDEPARTMENT[".exportFields"] = array();
$tdataDEPARTMENT[".exportFields"][] = "DEP_UID";
$tdataDEPARTMENT[".exportFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".exportFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".exportFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".exportFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".exportFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".exportFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".exportFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".importFields"] = array();
$tdataDEPARTMENT[".importFields"][] = "DEP_UID";
$tdataDEPARTMENT[".importFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".importFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".importFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".importFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".importFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".importFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".importFields"][] = "DEP_LDAP_DN";

$tdataDEPARTMENT[".printFields"] = array();
$tdataDEPARTMENT[".printFields"][] = "DEP_UID";
$tdataDEPARTMENT[".printFields"][] = "DEP_TITLE";
$tdataDEPARTMENT[".printFields"][] = "DEP_PARENT";
$tdataDEPARTMENT[".printFields"][] = "DEP_MANAGER";
$tdataDEPARTMENT[".printFields"][] = "DEP_LOCATION";
$tdataDEPARTMENT[".printFields"][] = "DEP_STATUS";
$tdataDEPARTMENT[".printFields"][] = "DEP_REF_CODE";
$tdataDEPARTMENT[".printFields"][] = "DEP_LDAP_DN";

//	DEP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DEP_UID";
	$fdata["GoodName"] = "DEP_UID";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_UID");
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

		$fdata["strField"] = "DEP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_UID";

	
	
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




	$tdataDEPARTMENT["DEP_UID"] = $fdata;
//	DEP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEP_TITLE";
	$fdata["GoodName"] = "DEP_TITLE";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_TITLE");
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

		$fdata["strField"] = "DEP_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_TITLE";

	
	
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




	$tdataDEPARTMENT["DEP_TITLE"] = $fdata;
//	DEP_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEP_PARENT";
	$fdata["GoodName"] = "DEP_PARENT";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_PARENT");
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

		$fdata["strField"] = "DEP_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_PARENT";

	
	
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




	$tdataDEPARTMENT["DEP_PARENT"] = $fdata;
//	DEP_MANAGER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEP_MANAGER";
	$fdata["GoodName"] = "DEP_MANAGER";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_MANAGER");
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

		$fdata["strField"] = "DEP_MANAGER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_MANAGER";

	
	
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




	$tdataDEPARTMENT["DEP_MANAGER"] = $fdata;
//	DEP_LOCATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DEP_LOCATION";
	$fdata["GoodName"] = "DEP_LOCATION";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_LOCATION");
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

		$fdata["strField"] = "DEP_LOCATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_LOCATION";

	
	
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




	$tdataDEPARTMENT["DEP_LOCATION"] = $fdata;
//	DEP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DEP_STATUS";
	$fdata["GoodName"] = "DEP_STATUS";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_STATUS");
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

		$fdata["strField"] = "DEP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_STATUS";

	
	
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




	$tdataDEPARTMENT["DEP_STATUS"] = $fdata;
//	DEP_REF_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DEP_REF_CODE";
	$fdata["GoodName"] = "DEP_REF_CODE";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_REF_CODE");
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

		$fdata["strField"] = "DEP_REF_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_REF_CODE";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataDEPARTMENT["DEP_REF_CODE"] = $fdata;
//	DEP_LDAP_DN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DEP_LDAP_DN";
	$fdata["GoodName"] = "DEP_LDAP_DN";
	$fdata["ownerTable"] = "DEPARTMENT";
	$fdata["Label"] = GetFieldLabel("DEPARTMENT","DEP_LDAP_DN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DEP_LDAP_DN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_LDAP_DN";

	
	
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




	$tdataDEPARTMENT["DEP_LDAP_DN"] = $fdata;


$tables_data["DEPARTMENT"]=&$tdataDEPARTMENT;
$field_labels["DEPARTMENT"] = &$fieldLabelsDEPARTMENT;
$fieldToolTips["DEPARTMENT"] = &$fieldToolTipsDEPARTMENT;
$placeHolders["DEPARTMENT"] = &$placeHoldersDEPARTMENT;
$page_titles["DEPARTMENT"] = &$pageTitlesDEPARTMENT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DEPARTMENT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DEPARTMENT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DEPARTMENT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DEP_UID,  	DEP_TITLE,  	DEP_PARENT,  	DEP_MANAGER,  	DEP_LOCATION,  	DEP_STATUS,  	DEP_REF_CODE,  	DEP_LDAP_DN";
$proto0["m_strFrom"] = "FROM DEPARTMENT";
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
	"m_strName" => "DEP_UID",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto6["m_sql"] = "DEP_UID";
$proto6["m_srcTableName"] = "DEPARTMENT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_TITLE",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto8["m_sql"] = "DEP_TITLE";
$proto8["m_srcTableName"] = "DEPARTMENT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_PARENT",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto10["m_sql"] = "DEP_PARENT";
$proto10["m_srcTableName"] = "DEPARTMENT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_MANAGER",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto12["m_sql"] = "DEP_MANAGER";
$proto12["m_srcTableName"] = "DEPARTMENT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_LOCATION",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto14["m_sql"] = "DEP_LOCATION";
$proto14["m_srcTableName"] = "DEPARTMENT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_STATUS",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto16["m_sql"] = "DEP_STATUS";
$proto16["m_srcTableName"] = "DEPARTMENT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_REF_CODE",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto18["m_sql"] = "DEP_REF_CODE";
$proto18["m_srcTableName"] = "DEPARTMENT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_LDAP_DN",
	"m_strTable" => "DEPARTMENT",
	"m_srcTableName" => "DEPARTMENT"
));

$proto20["m_sql"] = "DEP_LDAP_DN";
$proto20["m_srcTableName"] = "DEPARTMENT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "DEPARTMENT";
$proto23["m_srcTableName"] = "DEPARTMENT";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "DEP_UID";
$proto23["m_columns"][] = "DEP_TITLE";
$proto23["m_columns"][] = "DEP_PARENT";
$proto23["m_columns"][] = "DEP_MANAGER";
$proto23["m_columns"][] = "DEP_LOCATION";
$proto23["m_columns"][] = "DEP_STATUS";
$proto23["m_columns"][] = "DEP_REF_CODE";
$proto23["m_columns"][] = "DEP_LDAP_DN";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "DEPARTMENT";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "DEPARTMENT";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DEPARTMENT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DEPARTMENT = createSqlQuery_DEPARTMENT();


	
						;

								

$tdataDEPARTMENT[".sqlquery"] = $queryData_DEPARTMENT;

$tableEvents["DEPARTMENT"] = new eventsBase;
$tdataDEPARTMENT[".hasEvents"] = false;

?>
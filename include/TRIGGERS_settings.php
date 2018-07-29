<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTRIGGERS = array();
	$tdataTRIGGERS[".truncateText"] = true;
	$tdataTRIGGERS[".NumberOfChars"] = 20;
	$tdataTRIGGERS[".ShortName"] = "TRIGGERS";
	$tdataTRIGGERS[".OwnerID"] = "";
	$tdataTRIGGERS[".OriginalTable"] = "TRIGGERS";

//	field labels
$fieldLabelsTRIGGERS = array();
$fieldToolTipsTRIGGERS = array();
$pageTitlesTRIGGERS = array();
$placeHoldersTRIGGERS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTRIGGERS["Japanese"] = array();
	$fieldToolTipsTRIGGERS["Japanese"] = array();
	$placeHoldersTRIGGERS["Japanese"] = array();
	$pageTitlesTRIGGERS["Japanese"] = array();
	$fieldLabelsTRIGGERS["Japanese"]["TRI_UID"] = "トライUID";
	$fieldToolTipsTRIGGERS["Japanese"]["TRI_UID"] = "";
	$placeHoldersTRIGGERS["Japanese"]["TRI_UID"] = "";
	$fieldLabelsTRIGGERS["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsTRIGGERS["Japanese"]["PRO_UID"] = "";
	$placeHoldersTRIGGERS["Japanese"]["PRO_UID"] = "";
	$fieldLabelsTRIGGERS["Japanese"]["TRI_TYPE"] = "トライタイプ";
	$fieldToolTipsTRIGGERS["Japanese"]["TRI_TYPE"] = "";
	$placeHoldersTRIGGERS["Japanese"]["TRI_TYPE"] = "";
	$fieldLabelsTRIGGERS["Japanese"]["TRI_WEBBOT"] = "トライのWebBot";
	$fieldToolTipsTRIGGERS["Japanese"]["TRI_WEBBOT"] = "";
	$placeHoldersTRIGGERS["Japanese"]["TRI_WEBBOT"] = "";
	$fieldLabelsTRIGGERS["Japanese"]["TRI_PARAM"] = "トリPARAM";
	$fieldToolTipsTRIGGERS["Japanese"]["TRI_PARAM"] = "";
	$placeHoldersTRIGGERS["Japanese"]["TRI_PARAM"] = "";
	$fieldLabelsTRIGGERS["Japanese"]["TRI_TITLE"] = "TRI TITLE";
	$fieldToolTipsTRIGGERS["Japanese"]["TRI_TITLE"] = "";
	$placeHoldersTRIGGERS["Japanese"]["TRI_TITLE"] = "";
	$fieldLabelsTRIGGERS["Japanese"]["TRI_DESCRIPTION"] = "TRI DESCRIPTION";
	$fieldToolTipsTRIGGERS["Japanese"]["TRI_DESCRIPTION"] = "";
	$placeHoldersTRIGGERS["Japanese"]["TRI_DESCRIPTION"] = "";
	if (count($fieldToolTipsTRIGGERS["Japanese"]))
		$tdataTRIGGERS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTRIGGERS["English"] = array();
	$fieldToolTipsTRIGGERS["English"] = array();
	$placeHoldersTRIGGERS["English"] = array();
	$pageTitlesTRIGGERS["English"] = array();
	$fieldLabelsTRIGGERS["English"]["TRI_UID"] = "トライUID";
	$fieldToolTipsTRIGGERS["English"]["TRI_UID"] = "";
	$placeHoldersTRIGGERS["English"]["TRI_UID"] = "";
	$fieldLabelsTRIGGERS["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsTRIGGERS["English"]["PRO_UID"] = "";
	$placeHoldersTRIGGERS["English"]["PRO_UID"] = "";
	$fieldLabelsTRIGGERS["English"]["TRI_TYPE"] = "トライタイプ";
	$fieldToolTipsTRIGGERS["English"]["TRI_TYPE"] = "";
	$placeHoldersTRIGGERS["English"]["TRI_TYPE"] = "";
	$fieldLabelsTRIGGERS["English"]["TRI_WEBBOT"] = "トライのWebBot";
	$fieldToolTipsTRIGGERS["English"]["TRI_WEBBOT"] = "";
	$placeHoldersTRIGGERS["English"]["TRI_WEBBOT"] = "";
	$fieldLabelsTRIGGERS["English"]["TRI_PARAM"] = "トリPARAM";
	$fieldToolTipsTRIGGERS["English"]["TRI_PARAM"] = "";
	$placeHoldersTRIGGERS["English"]["TRI_PARAM"] = "";
	$fieldLabelsTRIGGERS["English"]["TRI_TITLE"] = "TRI TITLE";
	$fieldToolTipsTRIGGERS["English"]["TRI_TITLE"] = "";
	$placeHoldersTRIGGERS["English"]["TRI_TITLE"] = "";
	$fieldLabelsTRIGGERS["English"]["TRI_DESCRIPTION"] = "TRI DESCRIPTION";
	$fieldToolTipsTRIGGERS["English"]["TRI_DESCRIPTION"] = "";
	$placeHoldersTRIGGERS["English"]["TRI_DESCRIPTION"] = "";
	if (count($fieldToolTipsTRIGGERS["English"]))
		$tdataTRIGGERS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTRIGGERS[""] = array();
	$fieldToolTipsTRIGGERS[""] = array();
	$placeHoldersTRIGGERS[""] = array();
	$pageTitlesTRIGGERS[""] = array();
	if (count($fieldToolTipsTRIGGERS[""]))
		$tdataTRIGGERS[".isUseToolTips"] = true;
}


	$tdataTRIGGERS[".NCSearch"] = true;



$tdataTRIGGERS[".shortTableName"] = "TRIGGERS";
$tdataTRIGGERS[".nSecOptions"] = 0;
$tdataTRIGGERS[".recsPerRowPrint"] = 1;
$tdataTRIGGERS[".mainTableOwnerID"] = "";
$tdataTRIGGERS[".moveNext"] = 0;
$tdataTRIGGERS[".entityType"] = 0;

$tdataTRIGGERS[".strOriginalTableName"] = "TRIGGERS";

	



$tdataTRIGGERS[".showAddInPopup"] = false;

$tdataTRIGGERS[".showEditInPopup"] = false;

$tdataTRIGGERS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTRIGGERS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTRIGGERS[".fieldsForRegister"] = array();
	
$tdataTRIGGERS[".listAjax"] = false;

	$tdataTRIGGERS[".audit"] = true;

	$tdataTRIGGERS[".locking"] = false;

$tdataTRIGGERS[".edit"] = true;
$tdataTRIGGERS[".afterEditAction"] = 1;
$tdataTRIGGERS[".closePopupAfterEdit"] = 1;
$tdataTRIGGERS[".afterEditActionDetTable"] = "";

$tdataTRIGGERS[".add"] = true;
$tdataTRIGGERS[".afterAddAction"] = 1;
$tdataTRIGGERS[".closePopupAfterAdd"] = 1;
$tdataTRIGGERS[".afterAddActionDetTable"] = "";

$tdataTRIGGERS[".list"] = true;

$tdataTRIGGERS[".inlineEdit"] = true;


$tdataTRIGGERS[".reorderRecordsByHeader"] = true;
$tdataTRIGGERS[".createSortByDropdown"] = true;
$tdataTRIGGERS[".strSortControlSettingsJSON"] = "";



$tdataTRIGGERS[".inlineAdd"] = true;
$tdataTRIGGERS[".view"] = true;

$tdataTRIGGERS[".import"] = true;

$tdataTRIGGERS[".exportTo"] = true;

$tdataTRIGGERS[".printFriendly"] = true;

$tdataTRIGGERS[".delete"] = true;

$tdataTRIGGERS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataTRIGGERS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataTRIGGERS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataTRIGGERS[".searchSaving"] = false;
//

$tdataTRIGGERS[".showSearchPanel"] = true;
		$tdataTRIGGERS[".flexibleSearch"] = true;

$tdataTRIGGERS[".isUseAjaxSuggest"] = true;

$tdataTRIGGERS[".rowHighlite"] = true;



																

$tdataTRIGGERS[".ajaxCodeSnippetAdded"] = false;

$tdataTRIGGERS[".buttonsAdded"] = false;

$tdataTRIGGERS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTRIGGERS[".isUseTimeForSearch"] = false;



$tdataTRIGGERS[".badgeColor"] = "dc143c";


$tdataTRIGGERS[".allSearchFields"] = array();
$tdataTRIGGERS[".filterFields"] = array();
$tdataTRIGGERS[".requiredSearchFields"] = array();

$tdataTRIGGERS[".allSearchFields"][] = "TRI_TITLE";
	$tdataTRIGGERS[".allSearchFields"][] = "TRI_DESCRIPTION";
	$tdataTRIGGERS[".allSearchFields"][] = "TRI_UID";
	$tdataTRIGGERS[".allSearchFields"][] = "PRO_UID";
	$tdataTRIGGERS[".allSearchFields"][] = "TRI_TYPE";
	$tdataTRIGGERS[".allSearchFields"][] = "TRI_WEBBOT";
	$tdataTRIGGERS[".allSearchFields"][] = "TRI_PARAM";
	

$tdataTRIGGERS[".googleLikeFields"] = array();
$tdataTRIGGERS[".googleLikeFields"][] = "TRI_UID";
$tdataTRIGGERS[".googleLikeFields"][] = "PRO_UID";
$tdataTRIGGERS[".googleLikeFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".googleLikeFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".googleLikeFields"][] = "TRI_PARAM";
$tdataTRIGGERS[".googleLikeFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".googleLikeFields"][] = "TRI_DESCRIPTION";


$tdataTRIGGERS[".advSearchFields"] = array();
$tdataTRIGGERS[".advSearchFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".advSearchFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".advSearchFields"][] = "TRI_UID";
$tdataTRIGGERS[".advSearchFields"][] = "PRO_UID";
$tdataTRIGGERS[".advSearchFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".advSearchFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".advSearchFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".tableType"] = "list";

$tdataTRIGGERS[".printerPageOrientation"] = 0;
$tdataTRIGGERS[".nPrinterPageScale"] = 100;

$tdataTRIGGERS[".nPrinterSplitRecords"] = 40;

$tdataTRIGGERS[".nPrinterPDFSplitRecords"] = 40;



$tdataTRIGGERS[".geocodingEnabled"] = false;





$tdataTRIGGERS[".listGridLayout"] = 3;


$tdataTRIGGERS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataTRIGGERS[".pageSize"] = 20;

$tdataTRIGGERS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTRIGGERS[".strOrderBy"] = $tstrOrderBy;

$tdataTRIGGERS[".orderindexes"] = array();

$tdataTRIGGERS[".sqlHead"] = "SELECT TRI_UID,  	PRO_UID,  	TRI_TYPE,  	TRI_WEBBOT,  	TRI_PARAM,  	TRI_TITLE,  	TRI_DESCRIPTION";
$tdataTRIGGERS[".sqlFrom"] = "FROM TRIGGERS";
$tdataTRIGGERS[".sqlWhereExpr"] = "";
$tdataTRIGGERS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTRIGGERS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTRIGGERS[".arrGroupsPerPage"] = $arrGPP;

$tdataTRIGGERS[".highlightSearchResults"] = true;

$tableKeysTRIGGERS = array();
$tableKeysTRIGGERS[] = "TRI_UID";
$tdataTRIGGERS[".Keys"] = $tableKeysTRIGGERS;

$tdataTRIGGERS[".listFields"] = array();
$tdataTRIGGERS[".listFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".listFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".listFields"][] = "TRI_UID";
$tdataTRIGGERS[".listFields"][] = "PRO_UID";
$tdataTRIGGERS[".listFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".listFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".listFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".hideMobileList"] = array();


$tdataTRIGGERS[".viewFields"] = array();
$tdataTRIGGERS[".viewFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".viewFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".viewFields"][] = "TRI_UID";
$tdataTRIGGERS[".viewFields"][] = "PRO_UID";
$tdataTRIGGERS[".viewFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".viewFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".viewFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".addFields"] = array();
$tdataTRIGGERS[".addFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".addFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".addFields"][] = "TRI_UID";
$tdataTRIGGERS[".addFields"][] = "PRO_UID";
$tdataTRIGGERS[".addFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".addFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".addFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".masterListFields"] = array();
$tdataTRIGGERS[".masterListFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".masterListFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".masterListFields"][] = "TRI_UID";
$tdataTRIGGERS[".masterListFields"][] = "PRO_UID";
$tdataTRIGGERS[".masterListFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".masterListFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".masterListFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".inlineAddFields"] = array();
$tdataTRIGGERS[".inlineAddFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".inlineAddFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".inlineAddFields"][] = "TRI_UID";
$tdataTRIGGERS[".inlineAddFields"][] = "PRO_UID";
$tdataTRIGGERS[".inlineAddFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".inlineAddFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".inlineAddFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".editFields"] = array();
$tdataTRIGGERS[".editFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".editFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".editFields"][] = "TRI_UID";
$tdataTRIGGERS[".editFields"][] = "PRO_UID";
$tdataTRIGGERS[".editFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".editFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".editFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".inlineEditFields"] = array();
$tdataTRIGGERS[".inlineEditFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".inlineEditFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".inlineEditFields"][] = "TRI_UID";
$tdataTRIGGERS[".inlineEditFields"][] = "PRO_UID";
$tdataTRIGGERS[".inlineEditFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".inlineEditFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".inlineEditFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".updateSelectedFields"] = array();
$tdataTRIGGERS[".updateSelectedFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".updateSelectedFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".updateSelectedFields"][] = "TRI_UID";
$tdataTRIGGERS[".updateSelectedFields"][] = "PRO_UID";
$tdataTRIGGERS[".updateSelectedFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".updateSelectedFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".updateSelectedFields"][] = "TRI_PARAM";


$tdataTRIGGERS[".exportFields"] = array();
$tdataTRIGGERS[".exportFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".exportFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".exportFields"][] = "TRI_UID";
$tdataTRIGGERS[".exportFields"][] = "PRO_UID";
$tdataTRIGGERS[".exportFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".exportFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".exportFields"][] = "TRI_PARAM";

$tdataTRIGGERS[".importFields"] = array();
$tdataTRIGGERS[".importFields"][] = "TRI_UID";
$tdataTRIGGERS[".importFields"][] = "PRO_UID";
$tdataTRIGGERS[".importFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".importFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".importFields"][] = "TRI_PARAM";
$tdataTRIGGERS[".importFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".importFields"][] = "TRI_DESCRIPTION";

$tdataTRIGGERS[".printFields"] = array();
$tdataTRIGGERS[".printFields"][] = "TRI_TITLE";
$tdataTRIGGERS[".printFields"][] = "TRI_DESCRIPTION";
$tdataTRIGGERS[".printFields"][] = "TRI_UID";
$tdataTRIGGERS[".printFields"][] = "PRO_UID";
$tdataTRIGGERS[".printFields"][] = "TRI_TYPE";
$tdataTRIGGERS[".printFields"][] = "TRI_WEBBOT";
$tdataTRIGGERS[".printFields"][] = "TRI_PARAM";

//	TRI_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TRI_UID";
	$fdata["GoodName"] = "TRI_UID";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","TRI_UID");
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

		$fdata["strField"] = "TRI_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_UID";

	
	
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




	$tdataTRIGGERS["TRI_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","PRO_UID");
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




	$tdataTRIGGERS["PRO_UID"] = $fdata;
//	TRI_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TRI_TYPE";
	$fdata["GoodName"] = "TRI_TYPE";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","TRI_TYPE");
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

		$fdata["strField"] = "TRI_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_TYPE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS["TRI_TYPE"] = $fdata;
//	TRI_WEBBOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TRI_WEBBOT";
	$fdata["GoodName"] = "TRI_WEBBOT";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","TRI_WEBBOT");
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

		$fdata["strField"] = "TRI_WEBBOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_WEBBOT";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS["TRI_WEBBOT"] = $fdata;
//	TRI_PARAM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TRI_PARAM";
	$fdata["GoodName"] = "TRI_PARAM";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","TRI_PARAM");
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

		$fdata["strField"] = "TRI_PARAM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_PARAM";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS["TRI_PARAM"] = $fdata;
//	TRI_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TRI_TITLE";
	$fdata["GoodName"] = "TRI_TITLE";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","TRI_TITLE");
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

		$fdata["strField"] = "TRI_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_TITLE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS["TRI_TITLE"] = $fdata;
//	TRI_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TRI_DESCRIPTION";
	$fdata["GoodName"] = "TRI_DESCRIPTION";
	$fdata["ownerTable"] = "TRIGGERS";
	$fdata["Label"] = GetFieldLabel("TRIGGERS","TRI_DESCRIPTION");
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

		$fdata["strField"] = "TRI_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRI_DESCRIPTION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTRIGGERS["TRI_DESCRIPTION"] = $fdata;


$tables_data["TRIGGERS"]=&$tdataTRIGGERS;
$field_labels["TRIGGERS"] = &$fieldLabelsTRIGGERS;
$fieldToolTips["TRIGGERS"] = &$fieldToolTipsTRIGGERS;
$placeHolders["TRIGGERS"] = &$placeHoldersTRIGGERS;
$page_titles["TRIGGERS"] = &$pageTitlesTRIGGERS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TRIGGERS"] = array();
//	STEP_TRIGGER
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="STEP_TRIGGER";
		$detailsParam["dOriginalTable"] = "STEP_TRIGGER";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "STEP_TRIGGER";
	$detailsParam["dCaptionTable"] = GetTableCaption("STEP_TRIGGER");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["TRIGGERS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["TRIGGERS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["TRIGGERS"][$dIndex]["masterKeys"][]="TRI_UID";

				$detailsTablesData["TRIGGERS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["TRIGGERS"][$dIndex]["detailKeys"][]="TRI_UID";

// tables which are master tables for current table (detail)
$masterTablesData["TRIGGERS"] = array();


	
				$strOriginalDetailsTable="PROCESS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TRIGGERS"][0] = $masterParams;
				$masterTablesData["TRIGGERS"][0]["masterKeys"] = array();
	$masterTablesData["TRIGGERS"][0]["masterKeys"][]="PRO_UID";
				$masterTablesData["TRIGGERS"][0]["detailKeys"] = array();
	$masterTablesData["TRIGGERS"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TRIGGERS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TRI_UID,  	PRO_UID,  	TRI_TYPE,  	TRI_WEBBOT,  	TRI_PARAM,  	TRI_TITLE,  	TRI_DESCRIPTION";
$proto0["m_strFrom"] = "FROM TRIGGERS";
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
	"m_strName" => "TRI_UID",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto6["m_sql"] = "TRI_UID";
$proto6["m_srcTableName"] = "TRIGGERS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "TRIGGERS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TRI_TYPE",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto10["m_sql"] = "TRI_TYPE";
$proto10["m_srcTableName"] = "TRIGGERS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TRI_WEBBOT",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto12["m_sql"] = "TRI_WEBBOT";
$proto12["m_srcTableName"] = "TRIGGERS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TRI_PARAM",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto14["m_sql"] = "TRI_PARAM";
$proto14["m_srcTableName"] = "TRIGGERS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TRI_TITLE",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto16["m_sql"] = "TRI_TITLE";
$proto16["m_srcTableName"] = "TRIGGERS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TRI_DESCRIPTION",
	"m_strTable" => "TRIGGERS",
	"m_srcTableName" => "TRIGGERS"
));

$proto18["m_sql"] = "TRI_DESCRIPTION";
$proto18["m_srcTableName"] = "TRIGGERS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "TRIGGERS";
$proto21["m_srcTableName"] = "TRIGGERS";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "TRI_UID";
$proto21["m_columns"][] = "PRO_UID";
$proto21["m_columns"][] = "TRI_TYPE";
$proto21["m_columns"][] = "TRI_WEBBOT";
$proto21["m_columns"][] = "TRI_PARAM";
$proto21["m_columns"][] = "TRI_TITLE";
$proto21["m_columns"][] = "TRI_DESCRIPTION";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "TRIGGERS";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "TRIGGERS";
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
$proto0["m_srcTableName"]="TRIGGERS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TRIGGERS = createSqlQuery_TRIGGERS();


	
						;

							

$tdataTRIGGERS[".sqlquery"] = $queryData_TRIGGERS;

$tableEvents["TRIGGERS"] = new eventsBase;
$tdataTRIGGERS[".hasEvents"] = false;

?>
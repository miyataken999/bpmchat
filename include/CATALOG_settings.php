<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCATALOG = array();
	$tdataCATALOG[".truncateText"] = true;
	$tdataCATALOG[".NumberOfChars"] = 20;
	$tdataCATALOG[".ShortName"] = "CATALOG";
	$tdataCATALOG[".OwnerID"] = "";
	$tdataCATALOG[".OriginalTable"] = "CATALOG";

//	field labels
$fieldLabelsCATALOG = array();
$fieldToolTipsCATALOG = array();
$pageTitlesCATALOG = array();
$placeHoldersCATALOG = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCATALOG["Japanese"] = array();
	$fieldToolTipsCATALOG["Japanese"] = array();
	$placeHoldersCATALOG["Japanese"] = array();
	$pageTitlesCATALOG["Japanese"] = array();
	$fieldLabelsCATALOG["Japanese"]["CAT_UID"] = "猫のUID";
	$fieldToolTipsCATALOG["Japanese"]["CAT_UID"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_UID"] = "";
	$fieldLabelsCATALOG["Japanese"]["CAT_LABEL_ID"] = "猫のラベルID";
	$fieldToolTipsCATALOG["Japanese"]["CAT_LABEL_ID"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_LABEL_ID"] = "";
	$fieldLabelsCATALOG["Japanese"]["CAT_TYPE"] = "猫の種類";
	$fieldToolTipsCATALOG["Japanese"]["CAT_TYPE"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_TYPE"] = "";
	$fieldLabelsCATALOG["Japanese"]["CAT_FLAG"] = "猫フラグ";
	$fieldToolTipsCATALOG["Japanese"]["CAT_FLAG"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_FLAG"] = "";
	$fieldLabelsCATALOG["Japanese"]["CAT_OBSERVATION"] = "猫の観察";
	$fieldToolTipsCATALOG["Japanese"]["CAT_OBSERVATION"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_OBSERVATION"] = "";
	$fieldLabelsCATALOG["Japanese"]["CAT_CREATE_DATE"] = "猫は日付を作成します";
	$fieldToolTipsCATALOG["Japanese"]["CAT_CREATE_DATE"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_CREATE_DATE"] = "";
	$fieldLabelsCATALOG["Japanese"]["CAT_UPDATE_DATE"] = "猫の更新日";
	$fieldToolTipsCATALOG["Japanese"]["CAT_UPDATE_DATE"] = "";
	$placeHoldersCATALOG["Japanese"]["CAT_UPDATE_DATE"] = "";
	if (count($fieldToolTipsCATALOG["Japanese"]))
		$tdataCATALOG[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCATALOG["English"] = array();
	$fieldToolTipsCATALOG["English"] = array();
	$placeHoldersCATALOG["English"] = array();
	$pageTitlesCATALOG["English"] = array();
	$fieldLabelsCATALOG["English"]["CAT_UID"] = "猫のUID";
	$fieldToolTipsCATALOG["English"]["CAT_UID"] = "";
	$placeHoldersCATALOG["English"]["CAT_UID"] = "";
	$fieldLabelsCATALOG["English"]["CAT_LABEL_ID"] = "猫のラベルID";
	$fieldToolTipsCATALOG["English"]["CAT_LABEL_ID"] = "";
	$placeHoldersCATALOG["English"]["CAT_LABEL_ID"] = "";
	$fieldLabelsCATALOG["English"]["CAT_TYPE"] = "猫の種類";
	$fieldToolTipsCATALOG["English"]["CAT_TYPE"] = "";
	$placeHoldersCATALOG["English"]["CAT_TYPE"] = "";
	$fieldLabelsCATALOG["English"]["CAT_FLAG"] = "猫フラグ";
	$fieldToolTipsCATALOG["English"]["CAT_FLAG"] = "";
	$placeHoldersCATALOG["English"]["CAT_FLAG"] = "";
	$fieldLabelsCATALOG["English"]["CAT_OBSERVATION"] = "猫の観察";
	$fieldToolTipsCATALOG["English"]["CAT_OBSERVATION"] = "";
	$placeHoldersCATALOG["English"]["CAT_OBSERVATION"] = "";
	$fieldLabelsCATALOG["English"]["CAT_CREATE_DATE"] = "猫は日付を作成します";
	$fieldToolTipsCATALOG["English"]["CAT_CREATE_DATE"] = "";
	$placeHoldersCATALOG["English"]["CAT_CREATE_DATE"] = "";
	$fieldLabelsCATALOG["English"]["CAT_UPDATE_DATE"] = "猫の更新日";
	$fieldToolTipsCATALOG["English"]["CAT_UPDATE_DATE"] = "";
	$placeHoldersCATALOG["English"]["CAT_UPDATE_DATE"] = "";
	if (count($fieldToolTipsCATALOG["English"]))
		$tdataCATALOG[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCATALOG[""] = array();
	$fieldToolTipsCATALOG[""] = array();
	$placeHoldersCATALOG[""] = array();
	$pageTitlesCATALOG[""] = array();
	if (count($fieldToolTipsCATALOG[""]))
		$tdataCATALOG[".isUseToolTips"] = true;
}


	$tdataCATALOG[".NCSearch"] = true;



$tdataCATALOG[".shortTableName"] = "CATALOG";
$tdataCATALOG[".nSecOptions"] = 0;
$tdataCATALOG[".recsPerRowPrint"] = 1;
$tdataCATALOG[".mainTableOwnerID"] = "";
$tdataCATALOG[".moveNext"] = 0;
$tdataCATALOG[".entityType"] = 0;

$tdataCATALOG[".strOriginalTableName"] = "CATALOG";

	



$tdataCATALOG[".showAddInPopup"] = false;

$tdataCATALOG[".showEditInPopup"] = false;

$tdataCATALOG[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCATALOG[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCATALOG[".fieldsForRegister"] = array();
	
$tdataCATALOG[".listAjax"] = false;

	$tdataCATALOG[".audit"] = true;

	$tdataCATALOG[".locking"] = false;

$tdataCATALOG[".edit"] = true;
$tdataCATALOG[".afterEditAction"] = 1;
$tdataCATALOG[".closePopupAfterEdit"] = 1;
$tdataCATALOG[".afterEditActionDetTable"] = "";

$tdataCATALOG[".add"] = true;
$tdataCATALOG[".afterAddAction"] = 1;
$tdataCATALOG[".closePopupAfterAdd"] = 1;
$tdataCATALOG[".afterAddActionDetTable"] = "";

$tdataCATALOG[".list"] = true;

$tdataCATALOG[".inlineEdit"] = true;


$tdataCATALOG[".reorderRecordsByHeader"] = true;
$tdataCATALOG[".createSortByDropdown"] = true;
$tdataCATALOG[".strSortControlSettingsJSON"] = "";



$tdataCATALOG[".inlineAdd"] = true;
$tdataCATALOG[".view"] = true;

$tdataCATALOG[".import"] = true;

$tdataCATALOG[".exportTo"] = true;

$tdataCATALOG[".printFriendly"] = true;

$tdataCATALOG[".delete"] = true;

$tdataCATALOG[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataCATALOG[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataCATALOG[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataCATALOG[".searchSaving"] = false;
//

$tdataCATALOG[".showSearchPanel"] = true;
		$tdataCATALOG[".flexibleSearch"] = true;

$tdataCATALOG[".isUseAjaxSuggest"] = true;

$tdataCATALOG[".rowHighlite"] = true;



				

$tdataCATALOG[".ajaxCodeSnippetAdded"] = false;

$tdataCATALOG[".buttonsAdded"] = false;

$tdataCATALOG[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCATALOG[".isUseTimeForSearch"] = false;





$tdataCATALOG[".allSearchFields"] = array();
$tdataCATALOG[".filterFields"] = array();
$tdataCATALOG[".requiredSearchFields"] = array();

$tdataCATALOG[".allSearchFields"][] = "CAT_UID";
	$tdataCATALOG[".allSearchFields"][] = "CAT_LABEL_ID";
	$tdataCATALOG[".allSearchFields"][] = "CAT_TYPE";
	$tdataCATALOG[".allSearchFields"][] = "CAT_FLAG";
	$tdataCATALOG[".allSearchFields"][] = "CAT_OBSERVATION";
	$tdataCATALOG[".allSearchFields"][] = "CAT_CREATE_DATE";
	$tdataCATALOG[".allSearchFields"][] = "CAT_UPDATE_DATE";
	

$tdataCATALOG[".googleLikeFields"] = array();
$tdataCATALOG[".googleLikeFields"][] = "CAT_UID";
$tdataCATALOG[".googleLikeFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".googleLikeFields"][] = "CAT_TYPE";
$tdataCATALOG[".googleLikeFields"][] = "CAT_FLAG";
$tdataCATALOG[".googleLikeFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".googleLikeFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".googleLikeFields"][] = "CAT_UPDATE_DATE";


$tdataCATALOG[".advSearchFields"] = array();
$tdataCATALOG[".advSearchFields"][] = "CAT_UID";
$tdataCATALOG[".advSearchFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".advSearchFields"][] = "CAT_TYPE";
$tdataCATALOG[".advSearchFields"][] = "CAT_FLAG";
$tdataCATALOG[".advSearchFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".advSearchFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".advSearchFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".tableType"] = "list";

$tdataCATALOG[".printerPageOrientation"] = 0;
$tdataCATALOG[".nPrinterPageScale"] = 100;

$tdataCATALOG[".nPrinterSplitRecords"] = 40;

$tdataCATALOG[".nPrinterPDFSplitRecords"] = 40;



$tdataCATALOG[".geocodingEnabled"] = false;





$tdataCATALOG[".listGridLayout"] = 3;


$tdataCATALOG[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataCATALOG[".pageSize"] = 20;

$tdataCATALOG[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCATALOG[".strOrderBy"] = $tstrOrderBy;

$tdataCATALOG[".orderindexes"] = array();

$tdataCATALOG[".sqlHead"] = "SELECT CAT_UID,  	CAT_LABEL_ID,  	CAT_TYPE,  	CAT_FLAG,  	CAT_OBSERVATION,  	CAT_CREATE_DATE,  	CAT_UPDATE_DATE";
$tdataCATALOG[".sqlFrom"] = "FROM `CATALOG`";
$tdataCATALOG[".sqlWhereExpr"] = "";
$tdataCATALOG[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCATALOG[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCATALOG[".arrGroupsPerPage"] = $arrGPP;

$tdataCATALOG[".highlightSearchResults"] = true;

$tableKeysCATALOG = array();
$tableKeysCATALOG[] = "CAT_UID";
$tableKeysCATALOG[] = "CAT_TYPE";
$tdataCATALOG[".Keys"] = $tableKeysCATALOG;

$tdataCATALOG[".listFields"] = array();
$tdataCATALOG[".listFields"][] = "CAT_UID";
$tdataCATALOG[".listFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".listFields"][] = "CAT_TYPE";
$tdataCATALOG[".listFields"][] = "CAT_FLAG";
$tdataCATALOG[".listFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".listFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".listFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".hideMobileList"] = array();


$tdataCATALOG[".viewFields"] = array();
$tdataCATALOG[".viewFields"][] = "CAT_UID";
$tdataCATALOG[".viewFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".viewFields"][] = "CAT_TYPE";
$tdataCATALOG[".viewFields"][] = "CAT_FLAG";
$tdataCATALOG[".viewFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".viewFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".viewFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".addFields"] = array();
$tdataCATALOG[".addFields"][] = "CAT_UID";
$tdataCATALOG[".addFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".addFields"][] = "CAT_TYPE";
$tdataCATALOG[".addFields"][] = "CAT_FLAG";
$tdataCATALOG[".addFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".addFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".addFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".masterListFields"] = array();
$tdataCATALOG[".masterListFields"][] = "CAT_UID";
$tdataCATALOG[".masterListFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".masterListFields"][] = "CAT_TYPE";
$tdataCATALOG[".masterListFields"][] = "CAT_FLAG";
$tdataCATALOG[".masterListFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".masterListFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".masterListFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".inlineAddFields"] = array();
$tdataCATALOG[".inlineAddFields"][] = "CAT_UID";
$tdataCATALOG[".inlineAddFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".inlineAddFields"][] = "CAT_TYPE";
$tdataCATALOG[".inlineAddFields"][] = "CAT_FLAG";
$tdataCATALOG[".inlineAddFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".inlineAddFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".inlineAddFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".editFields"] = array();
$tdataCATALOG[".editFields"][] = "CAT_UID";
$tdataCATALOG[".editFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".editFields"][] = "CAT_TYPE";
$tdataCATALOG[".editFields"][] = "CAT_FLAG";
$tdataCATALOG[".editFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".editFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".editFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".inlineEditFields"] = array();
$tdataCATALOG[".inlineEditFields"][] = "CAT_UID";
$tdataCATALOG[".inlineEditFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".inlineEditFields"][] = "CAT_TYPE";
$tdataCATALOG[".inlineEditFields"][] = "CAT_FLAG";
$tdataCATALOG[".inlineEditFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".inlineEditFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".inlineEditFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".updateSelectedFields"] = array();
$tdataCATALOG[".updateSelectedFields"][] = "CAT_UID";
$tdataCATALOG[".updateSelectedFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".updateSelectedFields"][] = "CAT_TYPE";
$tdataCATALOG[".updateSelectedFields"][] = "CAT_FLAG";
$tdataCATALOG[".updateSelectedFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".updateSelectedFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".updateSelectedFields"][] = "CAT_UPDATE_DATE";


$tdataCATALOG[".exportFields"] = array();
$tdataCATALOG[".exportFields"][] = "CAT_UID";
$tdataCATALOG[".exportFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".exportFields"][] = "CAT_TYPE";
$tdataCATALOG[".exportFields"][] = "CAT_FLAG";
$tdataCATALOG[".exportFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".exportFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".exportFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".importFields"] = array();
$tdataCATALOG[".importFields"][] = "CAT_UID";
$tdataCATALOG[".importFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".importFields"][] = "CAT_TYPE";
$tdataCATALOG[".importFields"][] = "CAT_FLAG";
$tdataCATALOG[".importFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".importFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".importFields"][] = "CAT_UPDATE_DATE";

$tdataCATALOG[".printFields"] = array();
$tdataCATALOG[".printFields"][] = "CAT_UID";
$tdataCATALOG[".printFields"][] = "CAT_LABEL_ID";
$tdataCATALOG[".printFields"][] = "CAT_TYPE";
$tdataCATALOG[".printFields"][] = "CAT_FLAG";
$tdataCATALOG[".printFields"][] = "CAT_OBSERVATION";
$tdataCATALOG[".printFields"][] = "CAT_CREATE_DATE";
$tdataCATALOG[".printFields"][] = "CAT_UPDATE_DATE";

//	CAT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CAT_UID";
	$fdata["GoodName"] = "CAT_UID";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_UID");
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

		$fdata["strField"] = "CAT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_UID";

	
	
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




	$tdataCATALOG["CAT_UID"] = $fdata;
//	CAT_LABEL_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CAT_LABEL_ID";
	$fdata["GoodName"] = "CAT_LABEL_ID";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_LABEL_ID");
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

		$fdata["strField"] = "CAT_LABEL_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_LABEL_ID";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdataCATALOG["CAT_LABEL_ID"] = $fdata;
//	CAT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CAT_TYPE";
	$fdata["GoodName"] = "CAT_TYPE";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_TYPE");
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

		$fdata["strField"] = "CAT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdataCATALOG["CAT_TYPE"] = $fdata;
//	CAT_FLAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CAT_FLAG";
	$fdata["GoodName"] = "CAT_FLAG";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_FLAG");
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

		$fdata["strField"] = "CAT_FLAG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_FLAG";

	
	
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




	$tdataCATALOG["CAT_FLAG"] = $fdata;
//	CAT_OBSERVATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CAT_OBSERVATION";
	$fdata["GoodName"] = "CAT_OBSERVATION";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_OBSERVATION");
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

		$fdata["strField"] = "CAT_OBSERVATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_OBSERVATION";

	
	
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




	$tdataCATALOG["CAT_OBSERVATION"] = $fdata;
//	CAT_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CAT_CREATE_DATE";
	$fdata["GoodName"] = "CAT_CREATE_DATE";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_CREATE_DATE");
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

		$fdata["strField"] = "CAT_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_CREATE_DATE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataCATALOG["CAT_CREATE_DATE"] = $fdata;
//	CAT_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CAT_UPDATE_DATE";
	$fdata["GoodName"] = "CAT_UPDATE_DATE";
	$fdata["ownerTable"] = "CATALOG";
	$fdata["Label"] = GetFieldLabel("CATALOG","CAT_UPDATE_DATE");
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

		$fdata["strField"] = "CAT_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAT_UPDATE_DATE";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataCATALOG["CAT_UPDATE_DATE"] = $fdata;


$tables_data["CATALOG"]=&$tdataCATALOG;
$field_labels["CATALOG"] = &$fieldLabelsCATALOG;
$fieldToolTips["CATALOG"] = &$fieldToolTipsCATALOG;
$placeHolders["CATALOG"] = &$placeHoldersCATALOG;
$page_titles["CATALOG"] = &$pageTitlesCATALOG;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CATALOG"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CATALOG"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CATALOG()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CAT_UID,  	CAT_LABEL_ID,  	CAT_TYPE,  	CAT_FLAG,  	CAT_OBSERVATION,  	CAT_CREATE_DATE,  	CAT_UPDATE_DATE";
$proto0["m_strFrom"] = "FROM `CATALOG`";
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
	"m_strName" => "CAT_UID",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto6["m_sql"] = "CAT_UID";
$proto6["m_srcTableName"] = "CATALOG";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CAT_LABEL_ID",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto8["m_sql"] = "CAT_LABEL_ID";
$proto8["m_srcTableName"] = "CATALOG";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CAT_TYPE",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto10["m_sql"] = "CAT_TYPE";
$proto10["m_srcTableName"] = "CATALOG";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CAT_FLAG",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto12["m_sql"] = "CAT_FLAG";
$proto12["m_srcTableName"] = "CATALOG";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CAT_OBSERVATION",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto14["m_sql"] = "CAT_OBSERVATION";
$proto14["m_srcTableName"] = "CATALOG";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CAT_CREATE_DATE",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto16["m_sql"] = "CAT_CREATE_DATE";
$proto16["m_srcTableName"] = "CATALOG";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CAT_UPDATE_DATE",
	"m_strTable" => "CATALOG",
	"m_srcTableName" => "CATALOG"
));

$proto18["m_sql"] = "CAT_UPDATE_DATE";
$proto18["m_srcTableName"] = "CATALOG";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "CATALOG";
$proto21["m_srcTableName"] = "CATALOG";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "CAT_UID";
$proto21["m_columns"][] = "CAT_LABEL_ID";
$proto21["m_columns"][] = "CAT_TYPE";
$proto21["m_columns"][] = "CAT_FLAG";
$proto21["m_columns"][] = "CAT_OBSERVATION";
$proto21["m_columns"][] = "CAT_CREATE_DATE";
$proto21["m_columns"][] = "CAT_UPDATE_DATE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`CATALOG`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "CATALOG";
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
$proto0["m_srcTableName"]="CATALOG";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CATALOG = createSqlQuery_CATALOG();


	
						;

							

$tdataCATALOG[".sqlquery"] = $queryData_CATALOG;

$tableEvents["CATALOG"] = new eventsBase;
$tdataCATALOG[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDASHLET_INSTANCE = array();
	$tdataDASHLET_INSTANCE[".truncateText"] = true;
	$tdataDASHLET_INSTANCE[".NumberOfChars"] = 20;
	$tdataDASHLET_INSTANCE[".ShortName"] = "DASHLET_INSTANCE";
	$tdataDASHLET_INSTANCE[".OwnerID"] = "";
	$tdataDASHLET_INSTANCE[".OriginalTable"] = "DASHLET_INSTANCE";

//	field labels
$fieldLabelsDASHLET_INSTANCE = array();
$fieldToolTipsDASHLET_INSTANCE = array();
$pageTitlesDASHLET_INSTANCE = array();
$placeHoldersDASHLET_INSTANCE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDASHLET_INSTANCE["Japanese"] = array();
	$fieldToolTipsDASHLET_INSTANCE["Japanese"] = array();
	$placeHoldersDASHLET_INSTANCE["Japanese"] = array();
	$pageTitlesDASHLET_INSTANCE["Japanese"] = array();
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_UID"] = "ダスは、UIDをINS";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_UID"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_UID"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_UID"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_UID"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_OWNER_TYPE"] = "ダスのインの所有者のタイプ";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_OWNER_TYPE"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_OWNER_TYPE"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_OWNER_UID"] = "ダスのイン所有者のuid";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_OWNER_UID"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_OWNER_UID"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_ADDITIONAL_PROPERTIES"] = "追加のプロパティインダス";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_ADDITIONAL_PROPERTIES"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_ADDITIONAL_PROPERTIES"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_CREATE_DATE"] = "ダスのインは日付を作成します";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_CREATE_DATE"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_CREATE_DATE"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_UPDATE_DATE"] = "ダスインの更新日";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_UPDATE_DATE"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_UPDATE_DATE"] = "";
	$fieldLabelsDASHLET_INSTANCE["Japanese"]["DAS_INS_STATUS"] = "ダスのイン・ステータス";
	$fieldToolTipsDASHLET_INSTANCE["Japanese"]["DAS_INS_STATUS"] = "";
	$placeHoldersDASHLET_INSTANCE["Japanese"]["DAS_INS_STATUS"] = "";
	if (count($fieldToolTipsDASHLET_INSTANCE["Japanese"]))
		$tdataDASHLET_INSTANCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDASHLET_INSTANCE["English"] = array();
	$fieldToolTipsDASHLET_INSTANCE["English"] = array();
	$placeHoldersDASHLET_INSTANCE["English"] = array();
	$pageTitlesDASHLET_INSTANCE["English"] = array();
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_UID"] = "ダスは、UIDをINS";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_UID"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_UID"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_UID"] = "ダスのUID";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_UID"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_UID"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_OWNER_TYPE"] = "ダスのインの所有者のタイプ";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_OWNER_TYPE"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_OWNER_TYPE"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_OWNER_UID"] = "ダスのイン所有者のuid";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_OWNER_UID"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_OWNER_UID"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_ADDITIONAL_PROPERTIES"] = "追加のプロパティインダス";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_ADDITIONAL_PROPERTIES"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_ADDITIONAL_PROPERTIES"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_CREATE_DATE"] = "ダスのインは日付を作成します";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_CREATE_DATE"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_CREATE_DATE"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_UPDATE_DATE"] = "ダスインの更新日";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_UPDATE_DATE"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_UPDATE_DATE"] = "";
	$fieldLabelsDASHLET_INSTANCE["English"]["DAS_INS_STATUS"] = "ダスのイン・ステータス";
	$fieldToolTipsDASHLET_INSTANCE["English"]["DAS_INS_STATUS"] = "";
	$placeHoldersDASHLET_INSTANCE["English"]["DAS_INS_STATUS"] = "";
	if (count($fieldToolTipsDASHLET_INSTANCE["English"]))
		$tdataDASHLET_INSTANCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDASHLET_INSTANCE[""] = array();
	$fieldToolTipsDASHLET_INSTANCE[""] = array();
	$placeHoldersDASHLET_INSTANCE[""] = array();
	$pageTitlesDASHLET_INSTANCE[""] = array();
	if (count($fieldToolTipsDASHLET_INSTANCE[""]))
		$tdataDASHLET_INSTANCE[".isUseToolTips"] = true;
}


	$tdataDASHLET_INSTANCE[".NCSearch"] = true;



$tdataDASHLET_INSTANCE[".shortTableName"] = "DASHLET_INSTANCE";
$tdataDASHLET_INSTANCE[".nSecOptions"] = 0;
$tdataDASHLET_INSTANCE[".recsPerRowPrint"] = 1;
$tdataDASHLET_INSTANCE[".mainTableOwnerID"] = "";
$tdataDASHLET_INSTANCE[".moveNext"] = 0;
$tdataDASHLET_INSTANCE[".entityType"] = 0;

$tdataDASHLET_INSTANCE[".strOriginalTableName"] = "DASHLET_INSTANCE";

	



$tdataDASHLET_INSTANCE[".showAddInPopup"] = false;

$tdataDASHLET_INSTANCE[".showEditInPopup"] = false;

$tdataDASHLET_INSTANCE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDASHLET_INSTANCE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDASHLET_INSTANCE[".fieldsForRegister"] = array();
	
$tdataDASHLET_INSTANCE[".listAjax"] = false;

	$tdataDASHLET_INSTANCE[".audit"] = true;

	$tdataDASHLET_INSTANCE[".locking"] = false;

$tdataDASHLET_INSTANCE[".edit"] = true;
$tdataDASHLET_INSTANCE[".afterEditAction"] = 1;
$tdataDASHLET_INSTANCE[".closePopupAfterEdit"] = 1;
$tdataDASHLET_INSTANCE[".afterEditActionDetTable"] = "";

$tdataDASHLET_INSTANCE[".add"] = true;
$tdataDASHLET_INSTANCE[".afterAddAction"] = 1;
$tdataDASHLET_INSTANCE[".closePopupAfterAdd"] = 1;
$tdataDASHLET_INSTANCE[".afterAddActionDetTable"] = "";

$tdataDASHLET_INSTANCE[".list"] = true;



$tdataDASHLET_INSTANCE[".reorderRecordsByHeader"] = true;



$tdataDASHLET_INSTANCE[".view"] = true;

$tdataDASHLET_INSTANCE[".import"] = true;

$tdataDASHLET_INSTANCE[".exportTo"] = true;

$tdataDASHLET_INSTANCE[".printFriendly"] = true;

$tdataDASHLET_INSTANCE[".delete"] = true;

$tdataDASHLET_INSTANCE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDASHLET_INSTANCE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDASHLET_INSTANCE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDASHLET_INSTANCE[".searchSaving"] = false;
//

$tdataDASHLET_INSTANCE[".showSearchPanel"] = true;
		$tdataDASHLET_INSTANCE[".flexibleSearch"] = true;

$tdataDASHLET_INSTANCE[".isUseAjaxSuggest"] = true;

$tdataDASHLET_INSTANCE[".rowHighlite"] = true;



				

$tdataDASHLET_INSTANCE[".ajaxCodeSnippetAdded"] = false;

$tdataDASHLET_INSTANCE[".buttonsAdded"] = false;

$tdataDASHLET_INSTANCE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDASHLET_INSTANCE[".isUseTimeForSearch"] = false;





$tdataDASHLET_INSTANCE[".allSearchFields"] = array();
$tdataDASHLET_INSTANCE[".filterFields"] = array();
$tdataDASHLET_INSTANCE[".requiredSearchFields"] = array();

$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_UID";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_UID";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_OWNER_TYPE";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_OWNER_UID";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_CREATE_DATE";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_UPDATE_DATE";
	$tdataDASHLET_INSTANCE[".allSearchFields"][] = "DAS_INS_STATUS";
	

$tdataDASHLET_INSTANCE[".googleLikeFields"] = array();
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".googleLikeFields"][] = "DAS_INS_STATUS";


$tdataDASHLET_INSTANCE[".advSearchFields"] = array();
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".advSearchFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".tableType"] = "list";

$tdataDASHLET_INSTANCE[".printerPageOrientation"] = 0;
$tdataDASHLET_INSTANCE[".nPrinterPageScale"] = 100;

$tdataDASHLET_INSTANCE[".nPrinterSplitRecords"] = 40;

$tdataDASHLET_INSTANCE[".nPrinterPDFSplitRecords"] = 40;



$tdataDASHLET_INSTANCE[".geocodingEnabled"] = false;





$tdataDASHLET_INSTANCE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataDASHLET_INSTANCE[".pageSize"] = 20;

$tdataDASHLET_INSTANCE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDASHLET_INSTANCE[".strOrderBy"] = $tstrOrderBy;

$tdataDASHLET_INSTANCE[".orderindexes"] = array();

$tdataDASHLET_INSTANCE[".sqlHead"] = "SELECT DAS_INS_UID,  	DAS_UID,  	DAS_INS_OWNER_TYPE,  	DAS_INS_OWNER_UID,  	DAS_INS_ADDITIONAL_PROPERTIES,  	DAS_INS_CREATE_DATE,  	DAS_INS_UPDATE_DATE,  	DAS_INS_STATUS";
$tdataDASHLET_INSTANCE[".sqlFrom"] = "FROM DASHLET_INSTANCE";
$tdataDASHLET_INSTANCE[".sqlWhereExpr"] = "";
$tdataDASHLET_INSTANCE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDASHLET_INSTANCE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDASHLET_INSTANCE[".arrGroupsPerPage"] = $arrGPP;

$tdataDASHLET_INSTANCE[".highlightSearchResults"] = true;

$tableKeysDASHLET_INSTANCE = array();
$tableKeysDASHLET_INSTANCE[] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".Keys"] = $tableKeysDASHLET_INSTANCE;

$tdataDASHLET_INSTANCE[".listFields"] = array();
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".listFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".hideMobileList"] = array();


$tdataDASHLET_INSTANCE[".viewFields"] = array();
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".viewFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".addFields"] = array();
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".addFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".masterListFields"] = array();
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".masterListFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".inlineAddFields"] = array();

$tdataDASHLET_INSTANCE[".editFields"] = array();
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".editFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".inlineEditFields"] = array();

$tdataDASHLET_INSTANCE[".updateSelectedFields"] = array();
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".updateSelectedFields"][] = "DAS_INS_STATUS";


$tdataDASHLET_INSTANCE[".exportFields"] = array();
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".exportFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".importFields"] = array();
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".importFields"][] = "DAS_INS_STATUS";

$tdataDASHLET_INSTANCE[".printFields"] = array();
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_UID";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_UID";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_OWNER_TYPE";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_OWNER_UID";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_CREATE_DATE";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_UPDATE_DATE";
$tdataDASHLET_INSTANCE[".printFields"][] = "DAS_INS_STATUS";

//	DAS_INS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DAS_INS_UID";
	$fdata["GoodName"] = "DAS_INS_UID";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_UID";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_INS_UID"] = $fdata;
//	DAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DAS_UID";
	$fdata["GoodName"] = "DAS_UID";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_UID";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_UID"] = $fdata;
//	DAS_INS_OWNER_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DAS_INS_OWNER_TYPE";
	$fdata["GoodName"] = "DAS_INS_OWNER_TYPE";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_OWNER_TYPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_OWNER_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_OWNER_TYPE";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_INS_OWNER_TYPE"] = $fdata;
//	DAS_INS_OWNER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DAS_INS_OWNER_UID";
	$fdata["GoodName"] = "DAS_INS_OWNER_UID";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_OWNER_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_OWNER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_OWNER_UID";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_INS_OWNER_UID"] = $fdata;
//	DAS_INS_ADDITIONAL_PROPERTIES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DAS_INS_ADDITIONAL_PROPERTIES";
	$fdata["GoodName"] = "DAS_INS_ADDITIONAL_PROPERTIES";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_ADDITIONAL_PROPERTIES");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_ADDITIONAL_PROPERTIES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_ADDITIONAL_PROPERTIES";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_INS_ADDITIONAL_PROPERTIES"] = $fdata;
//	DAS_INS_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DAS_INS_CREATE_DATE";
	$fdata["GoodName"] = "DAS_INS_CREATE_DATE";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_CREATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_CREATE_DATE";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_INS_CREATE_DATE"] = $fdata;
//	DAS_INS_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DAS_INS_UPDATE_DATE";
	$fdata["GoodName"] = "DAS_INS_UPDATE_DATE";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_UPDATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_UPDATE_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataDASHLET_INSTANCE["DAS_INS_UPDATE_DATE"] = $fdata;
//	DAS_INS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DAS_INS_STATUS";
	$fdata["GoodName"] = "DAS_INS_STATUS";
	$fdata["ownerTable"] = "DASHLET_INSTANCE";
	$fdata["Label"] = GetFieldLabel("DASHLET_INSTANCE","DAS_INS_STATUS");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DAS_INS_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAS_INS_STATUS";

	
	
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




	$tdataDASHLET_INSTANCE["DAS_INS_STATUS"] = $fdata;


$tables_data["DASHLET_INSTANCE"]=&$tdataDASHLET_INSTANCE;
$field_labels["DASHLET_INSTANCE"] = &$fieldLabelsDASHLET_INSTANCE;
$fieldToolTips["DASHLET_INSTANCE"] = &$fieldToolTipsDASHLET_INSTANCE;
$placeHolders["DASHLET_INSTANCE"] = &$placeHoldersDASHLET_INSTANCE;
$page_titles["DASHLET_INSTANCE"] = &$pageTitlesDASHLET_INSTANCE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DASHLET_INSTANCE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DASHLET_INSTANCE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DASHLET_INSTANCE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DAS_INS_UID,  	DAS_UID,  	DAS_INS_OWNER_TYPE,  	DAS_INS_OWNER_UID,  	DAS_INS_ADDITIONAL_PROPERTIES,  	DAS_INS_CREATE_DATE,  	DAS_INS_UPDATE_DATE,  	DAS_INS_STATUS";
$proto0["m_strFrom"] = "FROM DASHLET_INSTANCE";
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
	"m_strName" => "DAS_INS_UID",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto6["m_sql"] = "DAS_INS_UID";
$proto6["m_srcTableName"] = "DASHLET_INSTANCE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_UID",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto8["m_sql"] = "DAS_UID";
$proto8["m_srcTableName"] = "DASHLET_INSTANCE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_INS_OWNER_TYPE",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto10["m_sql"] = "DAS_INS_OWNER_TYPE";
$proto10["m_srcTableName"] = "DASHLET_INSTANCE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_INS_OWNER_UID",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto12["m_sql"] = "DAS_INS_OWNER_UID";
$proto12["m_srcTableName"] = "DASHLET_INSTANCE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_INS_ADDITIONAL_PROPERTIES",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto14["m_sql"] = "DAS_INS_ADDITIONAL_PROPERTIES";
$proto14["m_srcTableName"] = "DASHLET_INSTANCE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_INS_CREATE_DATE",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto16["m_sql"] = "DAS_INS_CREATE_DATE";
$proto16["m_srcTableName"] = "DASHLET_INSTANCE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_INS_UPDATE_DATE",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto18["m_sql"] = "DAS_INS_UPDATE_DATE";
$proto18["m_srcTableName"] = "DASHLET_INSTANCE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DAS_INS_STATUS",
	"m_strTable" => "DASHLET_INSTANCE",
	"m_srcTableName" => "DASHLET_INSTANCE"
));

$proto20["m_sql"] = "DAS_INS_STATUS";
$proto20["m_srcTableName"] = "DASHLET_INSTANCE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "DASHLET_INSTANCE";
$proto23["m_srcTableName"] = "DASHLET_INSTANCE";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "DAS_INS_UID";
$proto23["m_columns"][] = "DAS_UID";
$proto23["m_columns"][] = "DAS_INS_OWNER_TYPE";
$proto23["m_columns"][] = "DAS_INS_OWNER_UID";
$proto23["m_columns"][] = "DAS_INS_ADDITIONAL_PROPERTIES";
$proto23["m_columns"][] = "DAS_INS_CREATE_DATE";
$proto23["m_columns"][] = "DAS_INS_UPDATE_DATE";
$proto23["m_columns"][] = "DAS_INS_STATUS";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "DASHLET_INSTANCE";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "DASHLET_INSTANCE";
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
$proto0["m_srcTableName"]="DASHLET_INSTANCE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DASHLET_INSTANCE = createSqlQuery_DASHLET_INSTANCE();


	
						;

								

$tdataDASHLET_INSTANCE[".sqlquery"] = $queryData_DASHLET_INSTANCE;

$tableEvents["DASHLET_INSTANCE"] = new eventsBase;
$tdataDASHLET_INSTANCE[".hasEvents"] = false;

?>
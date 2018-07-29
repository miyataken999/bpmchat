<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMN_PROCESS = array();
	$tdataBPMN_PROCESS[".truncateText"] = true;
	$tdataBPMN_PROCESS[".NumberOfChars"] = 20;
	$tdataBPMN_PROCESS[".ShortName"] = "BPMN_PROCESS";
	$tdataBPMN_PROCESS[".OwnerID"] = "";
	$tdataBPMN_PROCESS[".OriginalTable"] = "BPMN_PROCESS";

//	field labels
$fieldLabelsBPMN_PROCESS = array();
$fieldToolTipsBPMN_PROCESS = array();
$pageTitlesBPMN_PROCESS = array();
$placeHoldersBPMN_PROCESS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMN_PROCESS["Japanese"] = array();
	$fieldToolTipsBPMN_PROCESS["Japanese"] = array();
	$placeHoldersBPMN_PROCESS["Japanese"] = array();
	$pageTitlesBPMN_PROCESS["Japanese"] = array();
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRO_UID"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRO_UID"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRJ_UID"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["DIA_UID"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["DIA_UID"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRO_NAME"] = "プロの名前";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRO_NAME"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRO_NAME"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRO_TYPE"] = "プロタイプ";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRO_TYPE"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRO_TYPE"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRO_IS_EXECUTABLE"] = "プロが実行可能です";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRO_IS_EXECUTABLE"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRO_IS_EXECUTABLE"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRO_IS_CLOSED"] = "プロが閉じています";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRO_IS_CLOSED"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRO_IS_CLOSED"] = "";
	$fieldLabelsBPMN_PROCESS["Japanese"]["PRO_IS_SUBPROCESS"] = "プロは、サブプロセスであります";
	$fieldToolTipsBPMN_PROCESS["Japanese"]["PRO_IS_SUBPROCESS"] = "";
	$placeHoldersBPMN_PROCESS["Japanese"]["PRO_IS_SUBPROCESS"] = "";
	if (count($fieldToolTipsBPMN_PROCESS["Japanese"]))
		$tdataBPMN_PROCESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMN_PROCESS["English"] = array();
	$fieldToolTipsBPMN_PROCESS["English"] = array();
	$placeHoldersBPMN_PROCESS["English"] = array();
	$pageTitlesBPMN_PROCESS["English"] = array();
	$fieldLabelsBPMN_PROCESS["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsBPMN_PROCESS["English"]["PRO_UID"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRO_UID"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsBPMN_PROCESS["English"]["PRJ_UID"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRJ_UID"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["DIA_UID"] = "DIAのUID";
	$fieldToolTipsBPMN_PROCESS["English"]["DIA_UID"] = "";
	$placeHoldersBPMN_PROCESS["English"]["DIA_UID"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["PRO_NAME"] = "プロの名前";
	$fieldToolTipsBPMN_PROCESS["English"]["PRO_NAME"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRO_NAME"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["PRO_TYPE"] = "プロタイプ";
	$fieldToolTipsBPMN_PROCESS["English"]["PRO_TYPE"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRO_TYPE"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["PRO_IS_EXECUTABLE"] = "プロが実行可能です";
	$fieldToolTipsBPMN_PROCESS["English"]["PRO_IS_EXECUTABLE"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRO_IS_EXECUTABLE"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["PRO_IS_CLOSED"] = "プロが閉じています";
	$fieldToolTipsBPMN_PROCESS["English"]["PRO_IS_CLOSED"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRO_IS_CLOSED"] = "";
	$fieldLabelsBPMN_PROCESS["English"]["PRO_IS_SUBPROCESS"] = "プロは、サブプロセスであります";
	$fieldToolTipsBPMN_PROCESS["English"]["PRO_IS_SUBPROCESS"] = "";
	$placeHoldersBPMN_PROCESS["English"]["PRO_IS_SUBPROCESS"] = "";
	if (count($fieldToolTipsBPMN_PROCESS["English"]))
		$tdataBPMN_PROCESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMN_PROCESS[""] = array();
	$fieldToolTipsBPMN_PROCESS[""] = array();
	$placeHoldersBPMN_PROCESS[""] = array();
	$pageTitlesBPMN_PROCESS[""] = array();
	if (count($fieldToolTipsBPMN_PROCESS[""]))
		$tdataBPMN_PROCESS[".isUseToolTips"] = true;
}


	$tdataBPMN_PROCESS[".NCSearch"] = true;



$tdataBPMN_PROCESS[".shortTableName"] = "BPMN_PROCESS";
$tdataBPMN_PROCESS[".nSecOptions"] = 0;
$tdataBPMN_PROCESS[".recsPerRowPrint"] = 1;
$tdataBPMN_PROCESS[".mainTableOwnerID"] = "";
$tdataBPMN_PROCESS[".moveNext"] = 0;
$tdataBPMN_PROCESS[".entityType"] = 0;

$tdataBPMN_PROCESS[".strOriginalTableName"] = "BPMN_PROCESS";

	



$tdataBPMN_PROCESS[".showAddInPopup"] = false;

$tdataBPMN_PROCESS[".showEditInPopup"] = false;

$tdataBPMN_PROCESS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMN_PROCESS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMN_PROCESS[".fieldsForRegister"] = array();
	
$tdataBPMN_PROCESS[".listAjax"] = false;

	$tdataBPMN_PROCESS[".audit"] = true;

	$tdataBPMN_PROCESS[".locking"] = false;

$tdataBPMN_PROCESS[".edit"] = true;
$tdataBPMN_PROCESS[".afterEditAction"] = 1;
$tdataBPMN_PROCESS[".closePopupAfterEdit"] = 1;
$tdataBPMN_PROCESS[".afterEditActionDetTable"] = "";

$tdataBPMN_PROCESS[".add"] = true;
$tdataBPMN_PROCESS[".afterAddAction"] = 1;
$tdataBPMN_PROCESS[".closePopupAfterAdd"] = 1;
$tdataBPMN_PROCESS[".afterAddActionDetTable"] = "";

$tdataBPMN_PROCESS[".list"] = true;

$tdataBPMN_PROCESS[".inlineEdit"] = true;


$tdataBPMN_PROCESS[".reorderRecordsByHeader"] = true;
$tdataBPMN_PROCESS[".createSortByDropdown"] = true;
$tdataBPMN_PROCESS[".strSortControlSettingsJSON"] = "";



$tdataBPMN_PROCESS[".inlineAdd"] = true;
$tdataBPMN_PROCESS[".view"] = true;

$tdataBPMN_PROCESS[".import"] = true;

$tdataBPMN_PROCESS[".exportTo"] = true;

$tdataBPMN_PROCESS[".printFriendly"] = true;

$tdataBPMN_PROCESS[".delete"] = true;

$tdataBPMN_PROCESS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataBPMN_PROCESS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataBPMN_PROCESS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataBPMN_PROCESS[".searchSaving"] = false;
//

$tdataBPMN_PROCESS[".showSearchPanel"] = true;
		$tdataBPMN_PROCESS[".flexibleSearch"] = true;

$tdataBPMN_PROCESS[".isUseAjaxSuggest"] = true;

$tdataBPMN_PROCESS[".rowHighlite"] = true;



																

$tdataBPMN_PROCESS[".ajaxCodeSnippetAdded"] = false;

$tdataBPMN_PROCESS[".buttonsAdded"] = false;

$tdataBPMN_PROCESS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMN_PROCESS[".isUseTimeForSearch"] = false;



$tdataBPMN_PROCESS[".badgeColor"] = "4682B4";


$tdataBPMN_PROCESS[".allSearchFields"] = array();
$tdataBPMN_PROCESS[".filterFields"] = array();
$tdataBPMN_PROCESS[".requiredSearchFields"] = array();

$tdataBPMN_PROCESS[".allSearchFields"][] = "PRO_UID";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "PRJ_UID";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "DIA_UID";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "PRO_NAME";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "PRO_TYPE";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "PRO_IS_EXECUTABLE";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "PRO_IS_CLOSED";
	$tdataBPMN_PROCESS[".allSearchFields"][] = "PRO_IS_SUBPROCESS";
	

$tdataBPMN_PROCESS[".googleLikeFields"] = array();
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".googleLikeFields"][] = "PRO_IS_SUBPROCESS";


$tdataBPMN_PROCESS[".advSearchFields"] = array();
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".advSearchFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".advSearchFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".tableType"] = "list";

$tdataBPMN_PROCESS[".printerPageOrientation"] = 0;
$tdataBPMN_PROCESS[".nPrinterPageScale"] = 100;

$tdataBPMN_PROCESS[".nPrinterSplitRecords"] = 40;

$tdataBPMN_PROCESS[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMN_PROCESS[".geocodingEnabled"] = false;





$tdataBPMN_PROCESS[".listGridLayout"] = 3;


$tdataBPMN_PROCESS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataBPMN_PROCESS[".pageSize"] = 20;

$tdataBPMN_PROCESS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMN_PROCESS[".strOrderBy"] = $tstrOrderBy;

$tdataBPMN_PROCESS[".orderindexes"] = array();

$tdataBPMN_PROCESS[".sqlHead"] = "SELECT PRO_UID,  	PRJ_UID,  	DIA_UID,  	PRO_NAME,  	PRO_TYPE,  	PRO_IS_EXECUTABLE,  	PRO_IS_CLOSED,  	PRO_IS_SUBPROCESS";
$tdataBPMN_PROCESS[".sqlFrom"] = "FROM BPMN_PROCESS";
$tdataBPMN_PROCESS[".sqlWhereExpr"] = "";
$tdataBPMN_PROCESS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMN_PROCESS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMN_PROCESS[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMN_PROCESS[".highlightSearchResults"] = true;

$tableKeysBPMN_PROCESS = array();
$tableKeysBPMN_PROCESS[] = "PRO_UID";
$tdataBPMN_PROCESS[".Keys"] = $tableKeysBPMN_PROCESS;

$tdataBPMN_PROCESS[".listFields"] = array();
$tdataBPMN_PROCESS[".listFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".listFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".listFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".listFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".listFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".listFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".listFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".listFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".hideMobileList"] = array();


$tdataBPMN_PROCESS[".viewFields"] = array();
$tdataBPMN_PROCESS[".viewFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".viewFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".viewFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".viewFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".viewFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".viewFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".viewFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".viewFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".addFields"] = array();
$tdataBPMN_PROCESS[".addFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".addFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".addFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".addFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".addFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".addFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".addFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".addFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".masterListFields"] = array();
$tdataBPMN_PROCESS[".masterListFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".masterListFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".masterListFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".masterListFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".masterListFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".masterListFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".masterListFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".masterListFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".inlineAddFields"] = array();
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".inlineAddFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".editFields"] = array();
$tdataBPMN_PROCESS[".editFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".editFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".editFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".editFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".editFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".editFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".editFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".editFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".inlineEditFields"] = array();
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".inlineEditFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".updateSelectedFields"] = array();
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".updateSelectedFields"][] = "PRO_IS_SUBPROCESS";


$tdataBPMN_PROCESS[".exportFields"] = array();
$tdataBPMN_PROCESS[".exportFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".exportFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".exportFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".exportFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".exportFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".exportFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".exportFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".exportFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".importFields"] = array();
$tdataBPMN_PROCESS[".importFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".importFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".importFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".importFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".importFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".importFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".importFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".importFields"][] = "PRO_IS_SUBPROCESS";

$tdataBPMN_PROCESS[".printFields"] = array();
$tdataBPMN_PROCESS[".printFields"][] = "PRO_UID";
$tdataBPMN_PROCESS[".printFields"][] = "PRJ_UID";
$tdataBPMN_PROCESS[".printFields"][] = "DIA_UID";
$tdataBPMN_PROCESS[".printFields"][] = "PRO_NAME";
$tdataBPMN_PROCESS[".printFields"][] = "PRO_TYPE";
$tdataBPMN_PROCESS[".printFields"][] = "PRO_IS_EXECUTABLE";
$tdataBPMN_PROCESS[".printFields"][] = "PRO_IS_CLOSED";
$tdataBPMN_PROCESS[".printFields"][] = "PRO_IS_SUBPROCESS";

//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRO_UID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PROCESS["PRO_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRJ_UID");
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

		$fdata["strField"] = "PRJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BPMN_PROJECT";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRJ_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRJ_UID";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataBPMN_PROCESS["PRJ_UID"] = $fdata;
//	DIA_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DIA_UID";
	$fdata["GoodName"] = "DIA_UID";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","DIA_UID");
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

		$fdata["strField"] = "DIA_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIA_UID";

	
	
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




	$tdataBPMN_PROCESS["DIA_UID"] = $fdata;
//	PRO_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_NAME";
	$fdata["GoodName"] = "PRO_NAME";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRO_NAME");
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

		$fdata["strField"] = "PRO_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_NAME";

	
	
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




	$tdataBPMN_PROCESS["PRO_NAME"] = $fdata;
//	PRO_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRO_TYPE";
	$fdata["GoodName"] = "PRO_TYPE";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRO_TYPE");
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

		$fdata["strField"] = "PRO_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TYPE";

	
	
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




	$tdataBPMN_PROCESS["PRO_TYPE"] = $fdata;
//	PRO_IS_EXECUTABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRO_IS_EXECUTABLE";
	$fdata["GoodName"] = "PRO_IS_EXECUTABLE";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRO_IS_EXECUTABLE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_IS_EXECUTABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_IS_EXECUTABLE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PROCESS["PRO_IS_EXECUTABLE"] = $fdata;
//	PRO_IS_CLOSED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRO_IS_CLOSED";
	$fdata["GoodName"] = "PRO_IS_CLOSED";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRO_IS_CLOSED");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_IS_CLOSED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_IS_CLOSED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PROCESS["PRO_IS_CLOSED"] = $fdata;
//	PRO_IS_SUBPROCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRO_IS_SUBPROCESS";
	$fdata["GoodName"] = "PRO_IS_SUBPROCESS";
	$fdata["ownerTable"] = "BPMN_PROCESS";
	$fdata["Label"] = GetFieldLabel("BPMN_PROCESS","PRO_IS_SUBPROCESS");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_IS_SUBPROCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_IS_SUBPROCESS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMN_PROCESS["PRO_IS_SUBPROCESS"] = $fdata;


$tables_data["BPMN_PROCESS"]=&$tdataBPMN_PROCESS;
$field_labels["BPMN_PROCESS"] = &$fieldLabelsBPMN_PROCESS;
$fieldToolTips["BPMN_PROCESS"] = &$fieldToolTipsBPMN_PROCESS;
$placeHolders["BPMN_PROCESS"] = &$placeHoldersBPMN_PROCESS;
$page_titles["BPMN_PROCESS"] = &$pageTitlesBPMN_PROCESS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMN_PROCESS"] = array();
//	BPMN_LANESET
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_LANESET";
		$detailsParam["dOriginalTable"] = "BPMN_LANESET";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_LANESET";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_LANESET");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	BPMN_GATEWAY
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_GATEWAY";
		$detailsParam["dOriginalTable"] = "BPMN_GATEWAY";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_GATEWAY";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_GATEWAY");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	BPMN_EVENT
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_EVENT";
		$detailsParam["dOriginalTable"] = "BPMN_EVENT";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_EVENT";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_EVENT");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	BPMN_DATA
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_DATA";
		$detailsParam["dOriginalTable"] = "BPMN_DATA";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_DATA";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_DATA");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	BPMN_ACTIVITY
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_ACTIVITY";
		$detailsParam["dOriginalTable"] = "BPMN_ACTIVITY";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_ACTIVITY";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_ACTIVITY");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	BPMN_ARTIFACT
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="BPMN_ARTIFACT";
		$detailsParam["dOriginalTable"] = "BPMN_ARTIFACT";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "BPMN_ARTIFACT";
	$detailsParam["dCaptionTable"] = GetTableCaption("BPMN_ARTIFACT");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["BPMN_PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["BPMN_PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";

// tables which are master tables for current table (detail)
$masterTablesData["BPMN_PROCESS"] = array();


	
				$strOriginalDetailsTable="BPMN_PROJECT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="BPMN_PROJECT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "BPMN_PROJECT";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["BPMN_PROCESS"][0] = $masterParams;
				$masterTablesData["BPMN_PROCESS"][0]["masterKeys"] = array();
	$masterTablesData["BPMN_PROCESS"][0]["masterKeys"][]="PRJ_UID";
				$masterTablesData["BPMN_PROCESS"][0]["detailKeys"] = array();
	$masterTablesData["BPMN_PROCESS"][0]["detailKeys"][]="PRJ_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMN_PROCESS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRO_UID,  	PRJ_UID,  	DIA_UID,  	PRO_NAME,  	PRO_TYPE,  	PRO_IS_EXECUTABLE,  	PRO_IS_CLOSED,  	PRO_IS_SUBPROCESS";
$proto0["m_strFrom"] = "FROM BPMN_PROCESS";
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
	"m_strName" => "PRO_UID",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto6["m_sql"] = "PRO_UID";
$proto6["m_srcTableName"] = "BPMN_PROCESS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "BPMN_PROCESS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DIA_UID",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto10["m_sql"] = "DIA_UID";
$proto10["m_srcTableName"] = "BPMN_PROCESS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_NAME",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto12["m_sql"] = "PRO_NAME";
$proto12["m_srcTableName"] = "BPMN_PROCESS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TYPE",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto14["m_sql"] = "PRO_TYPE";
$proto14["m_srcTableName"] = "BPMN_PROCESS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_IS_EXECUTABLE",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto16["m_sql"] = "PRO_IS_EXECUTABLE";
$proto16["m_srcTableName"] = "BPMN_PROCESS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_IS_CLOSED",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto18["m_sql"] = "PRO_IS_CLOSED";
$proto18["m_srcTableName"] = "BPMN_PROCESS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_IS_SUBPROCESS",
	"m_strTable" => "BPMN_PROCESS",
	"m_srcTableName" => "BPMN_PROCESS"
));

$proto20["m_sql"] = "PRO_IS_SUBPROCESS";
$proto20["m_srcTableName"] = "BPMN_PROCESS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "BPMN_PROCESS";
$proto23["m_srcTableName"] = "BPMN_PROCESS";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "PRO_UID";
$proto23["m_columns"][] = "PRJ_UID";
$proto23["m_columns"][] = "DIA_UID";
$proto23["m_columns"][] = "PRO_NAME";
$proto23["m_columns"][] = "PRO_TYPE";
$proto23["m_columns"][] = "PRO_IS_EXECUTABLE";
$proto23["m_columns"][] = "PRO_IS_CLOSED";
$proto23["m_columns"][] = "PRO_IS_SUBPROCESS";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "BPMN_PROCESS";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "BPMN_PROCESS";
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
$proto0["m_srcTableName"]="BPMN_PROCESS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMN_PROCESS = createSqlQuery_BPMN_PROCESS();


	
						;

								

$tdataBPMN_PROCESS[".sqlquery"] = $queryData_BPMN_PROCESS;

$tableEvents["BPMN_PROCESS"] = new eventsBase;
$tdataBPMN_PROCESS[".hasEvents"] = false;

?>
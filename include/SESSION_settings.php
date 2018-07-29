<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSESSION = array();
	$tdataSESSION[".truncateText"] = true;
	$tdataSESSION[".NumberOfChars"] = 20;
	$tdataSESSION[".ShortName"] = "SESSION";
	$tdataSESSION[".OwnerID"] = "";
	$tdataSESSION[".OriginalTable"] = "SESSION";

//	field labels
$fieldLabelsSESSION = array();
$fieldToolTipsSESSION = array();
$pageTitlesSESSION = array();
$placeHoldersSESSION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSESSION["Japanese"] = array();
	$fieldToolTipsSESSION["Japanese"] = array();
	$placeHoldersSESSION["Japanese"] = array();
	$pageTitlesSESSION["Japanese"] = array();
	$fieldLabelsSESSION["Japanese"]["SES_UID"] = "SESのUID";
	$fieldToolTipsSESSION["Japanese"]["SES_UID"] = "";
	$placeHoldersSESSION["Japanese"]["SES_UID"] = "";
	$fieldLabelsSESSION["Japanese"]["SES_STATUS"] = "SESのステータス";
	$fieldToolTipsSESSION["Japanese"]["SES_STATUS"] = "";
	$placeHoldersSESSION["Japanese"]["SES_STATUS"] = "";
	$fieldLabelsSESSION["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsSESSION["Japanese"]["USR_UID"] = "";
	$placeHoldersSESSION["Japanese"]["USR_UID"] = "";
	$fieldLabelsSESSION["Japanese"]["SES_REMOTE_IP"] = "リモートIP SES";
	$fieldToolTipsSESSION["Japanese"]["SES_REMOTE_IP"] = "";
	$placeHoldersSESSION["Japanese"]["SES_REMOTE_IP"] = "";
	$fieldLabelsSESSION["Japanese"]["SES_INIT_DATE"] = "SESのinit日";
	$fieldToolTipsSESSION["Japanese"]["SES_INIT_DATE"] = "";
	$placeHoldersSESSION["Japanese"]["SES_INIT_DATE"] = "";
	$fieldLabelsSESSION["Japanese"]["SES_DUE_DATE"] = "SES期日";
	$fieldToolTipsSESSION["Japanese"]["SES_DUE_DATE"] = "";
	$placeHoldersSESSION["Japanese"]["SES_DUE_DATE"] = "";
	$fieldLabelsSESSION["Japanese"]["SES_END_DATE"] = "終了日SES";
	$fieldToolTipsSESSION["Japanese"]["SES_END_DATE"] = "";
	$placeHoldersSESSION["Japanese"]["SES_END_DATE"] = "";
	if (count($fieldToolTipsSESSION["Japanese"]))
		$tdataSESSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSESSION["English"] = array();
	$fieldToolTipsSESSION["English"] = array();
	$placeHoldersSESSION["English"] = array();
	$pageTitlesSESSION["English"] = array();
	$fieldLabelsSESSION["English"]["SES_UID"] = "SESのUID";
	$fieldToolTipsSESSION["English"]["SES_UID"] = "";
	$placeHoldersSESSION["English"]["SES_UID"] = "";
	$fieldLabelsSESSION["English"]["SES_STATUS"] = "SESのステータス";
	$fieldToolTipsSESSION["English"]["SES_STATUS"] = "";
	$placeHoldersSESSION["English"]["SES_STATUS"] = "";
	$fieldLabelsSESSION["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsSESSION["English"]["USR_UID"] = "";
	$placeHoldersSESSION["English"]["USR_UID"] = "";
	$fieldLabelsSESSION["English"]["SES_REMOTE_IP"] = "リモートIP SES";
	$fieldToolTipsSESSION["English"]["SES_REMOTE_IP"] = "";
	$placeHoldersSESSION["English"]["SES_REMOTE_IP"] = "";
	$fieldLabelsSESSION["English"]["SES_INIT_DATE"] = "SESのinit日";
	$fieldToolTipsSESSION["English"]["SES_INIT_DATE"] = "";
	$placeHoldersSESSION["English"]["SES_INIT_DATE"] = "";
	$fieldLabelsSESSION["English"]["SES_DUE_DATE"] = "SES期日";
	$fieldToolTipsSESSION["English"]["SES_DUE_DATE"] = "";
	$placeHoldersSESSION["English"]["SES_DUE_DATE"] = "";
	$fieldLabelsSESSION["English"]["SES_END_DATE"] = "終了日SES";
	$fieldToolTipsSESSION["English"]["SES_END_DATE"] = "";
	$placeHoldersSESSION["English"]["SES_END_DATE"] = "";
	if (count($fieldToolTipsSESSION["English"]))
		$tdataSESSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSESSION[""] = array();
	$fieldToolTipsSESSION[""] = array();
	$placeHoldersSESSION[""] = array();
	$pageTitlesSESSION[""] = array();
	if (count($fieldToolTipsSESSION[""]))
		$tdataSESSION[".isUseToolTips"] = true;
}


	$tdataSESSION[".NCSearch"] = true;



$tdataSESSION[".shortTableName"] = "SESSION";
$tdataSESSION[".nSecOptions"] = 0;
$tdataSESSION[".recsPerRowPrint"] = 1;
$tdataSESSION[".mainTableOwnerID"] = "";
$tdataSESSION[".moveNext"] = 0;
$tdataSESSION[".entityType"] = 0;

$tdataSESSION[".strOriginalTableName"] = "SESSION";

	



$tdataSESSION[".showAddInPopup"] = false;

$tdataSESSION[".showEditInPopup"] = false;

$tdataSESSION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSESSION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSESSION[".fieldsForRegister"] = array();
	
$tdataSESSION[".listAjax"] = false;

	$tdataSESSION[".audit"] = true;

	$tdataSESSION[".locking"] = false;

$tdataSESSION[".edit"] = true;
$tdataSESSION[".afterEditAction"] = 1;
$tdataSESSION[".closePopupAfterEdit"] = 1;
$tdataSESSION[".afterEditActionDetTable"] = "";

$tdataSESSION[".add"] = true;
$tdataSESSION[".afterAddAction"] = 1;
$tdataSESSION[".closePopupAfterAdd"] = 1;
$tdataSESSION[".afterAddActionDetTable"] = "";

$tdataSESSION[".list"] = true;

$tdataSESSION[".inlineEdit"] = true;


$tdataSESSION[".reorderRecordsByHeader"] = true;
$tdataSESSION[".createSortByDropdown"] = true;
$tdataSESSION[".strSortControlSettingsJSON"] = "";



$tdataSESSION[".inlineAdd"] = true;
$tdataSESSION[".view"] = true;

$tdataSESSION[".import"] = true;

$tdataSESSION[".exportTo"] = true;

$tdataSESSION[".printFriendly"] = true;

$tdataSESSION[".delete"] = true;

$tdataSESSION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSESSION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSESSION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSESSION[".searchSaving"] = false;
//

$tdataSESSION[".showSearchPanel"] = true;
		$tdataSESSION[".flexibleSearch"] = true;

$tdataSESSION[".isUseAjaxSuggest"] = true;

$tdataSESSION[".rowHighlite"] = true;



				

$tdataSESSION[".ajaxCodeSnippetAdded"] = false;

$tdataSESSION[".buttonsAdded"] = false;

$tdataSESSION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSESSION[".isUseTimeForSearch"] = false;





$tdataSESSION[".allSearchFields"] = array();
$tdataSESSION[".filterFields"] = array();
$tdataSESSION[".requiredSearchFields"] = array();

$tdataSESSION[".allSearchFields"][] = "SES_UID";
	$tdataSESSION[".allSearchFields"][] = "SES_STATUS";
	$tdataSESSION[".allSearchFields"][] = "USR_UID";
	$tdataSESSION[".allSearchFields"][] = "SES_REMOTE_IP";
	$tdataSESSION[".allSearchFields"][] = "SES_INIT_DATE";
	$tdataSESSION[".allSearchFields"][] = "SES_DUE_DATE";
	$tdataSESSION[".allSearchFields"][] = "SES_END_DATE";
	

$tdataSESSION[".googleLikeFields"] = array();
$tdataSESSION[".googleLikeFields"][] = "SES_UID";
$tdataSESSION[".googleLikeFields"][] = "SES_STATUS";
$tdataSESSION[".googleLikeFields"][] = "USR_UID";
$tdataSESSION[".googleLikeFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".googleLikeFields"][] = "SES_INIT_DATE";
$tdataSESSION[".googleLikeFields"][] = "SES_DUE_DATE";
$tdataSESSION[".googleLikeFields"][] = "SES_END_DATE";


$tdataSESSION[".advSearchFields"] = array();
$tdataSESSION[".advSearchFields"][] = "SES_UID";
$tdataSESSION[".advSearchFields"][] = "SES_STATUS";
$tdataSESSION[".advSearchFields"][] = "USR_UID";
$tdataSESSION[".advSearchFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".advSearchFields"][] = "SES_INIT_DATE";
$tdataSESSION[".advSearchFields"][] = "SES_DUE_DATE";
$tdataSESSION[".advSearchFields"][] = "SES_END_DATE";

$tdataSESSION[".tableType"] = "list";

$tdataSESSION[".printerPageOrientation"] = 0;
$tdataSESSION[".nPrinterPageScale"] = 100;

$tdataSESSION[".nPrinterSplitRecords"] = 40;

$tdataSESSION[".nPrinterPDFSplitRecords"] = 40;



$tdataSESSION[".geocodingEnabled"] = false;





$tdataSESSION[".listGridLayout"] = 3;


$tdataSESSION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSESSION[".pageSize"] = 20;

$tdataSESSION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSESSION[".strOrderBy"] = $tstrOrderBy;

$tdataSESSION[".orderindexes"] = array();

$tdataSESSION[".sqlHead"] = "SELECT SES_UID,  	SES_STATUS,  	USR_UID,  	SES_REMOTE_IP,  	SES_INIT_DATE,  	SES_DUE_DATE,  	SES_END_DATE";
$tdataSESSION[".sqlFrom"] = "FROM `SESSION`";
$tdataSESSION[".sqlWhereExpr"] = "";
$tdataSESSION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSESSION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSESSION[".arrGroupsPerPage"] = $arrGPP;

$tdataSESSION[".highlightSearchResults"] = true;

$tableKeysSESSION = array();
$tableKeysSESSION[] = "SES_UID";
$tdataSESSION[".Keys"] = $tableKeysSESSION;

$tdataSESSION[".listFields"] = array();
$tdataSESSION[".listFields"][] = "SES_UID";
$tdataSESSION[".listFields"][] = "SES_STATUS";
$tdataSESSION[".listFields"][] = "USR_UID";
$tdataSESSION[".listFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".listFields"][] = "SES_INIT_DATE";
$tdataSESSION[".listFields"][] = "SES_DUE_DATE";
$tdataSESSION[".listFields"][] = "SES_END_DATE";

$tdataSESSION[".hideMobileList"] = array();


$tdataSESSION[".viewFields"] = array();
$tdataSESSION[".viewFields"][] = "SES_UID";
$tdataSESSION[".viewFields"][] = "SES_STATUS";
$tdataSESSION[".viewFields"][] = "USR_UID";
$tdataSESSION[".viewFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".viewFields"][] = "SES_INIT_DATE";
$tdataSESSION[".viewFields"][] = "SES_DUE_DATE";
$tdataSESSION[".viewFields"][] = "SES_END_DATE";

$tdataSESSION[".addFields"] = array();
$tdataSESSION[".addFields"][] = "SES_UID";
$tdataSESSION[".addFields"][] = "SES_STATUS";
$tdataSESSION[".addFields"][] = "USR_UID";
$tdataSESSION[".addFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".addFields"][] = "SES_INIT_DATE";
$tdataSESSION[".addFields"][] = "SES_DUE_DATE";
$tdataSESSION[".addFields"][] = "SES_END_DATE";

$tdataSESSION[".masterListFields"] = array();
$tdataSESSION[".masterListFields"][] = "SES_UID";
$tdataSESSION[".masterListFields"][] = "SES_STATUS";
$tdataSESSION[".masterListFields"][] = "USR_UID";
$tdataSESSION[".masterListFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".masterListFields"][] = "SES_INIT_DATE";
$tdataSESSION[".masterListFields"][] = "SES_DUE_DATE";
$tdataSESSION[".masterListFields"][] = "SES_END_DATE";

$tdataSESSION[".inlineAddFields"] = array();
$tdataSESSION[".inlineAddFields"][] = "SES_UID";
$tdataSESSION[".inlineAddFields"][] = "SES_STATUS";
$tdataSESSION[".inlineAddFields"][] = "USR_UID";
$tdataSESSION[".inlineAddFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".inlineAddFields"][] = "SES_INIT_DATE";
$tdataSESSION[".inlineAddFields"][] = "SES_DUE_DATE";
$tdataSESSION[".inlineAddFields"][] = "SES_END_DATE";

$tdataSESSION[".editFields"] = array();
$tdataSESSION[".editFields"][] = "SES_UID";
$tdataSESSION[".editFields"][] = "SES_STATUS";
$tdataSESSION[".editFields"][] = "USR_UID";
$tdataSESSION[".editFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".editFields"][] = "SES_INIT_DATE";
$tdataSESSION[".editFields"][] = "SES_DUE_DATE";
$tdataSESSION[".editFields"][] = "SES_END_DATE";

$tdataSESSION[".inlineEditFields"] = array();
$tdataSESSION[".inlineEditFields"][] = "SES_UID";
$tdataSESSION[".inlineEditFields"][] = "SES_STATUS";
$tdataSESSION[".inlineEditFields"][] = "USR_UID";
$tdataSESSION[".inlineEditFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".inlineEditFields"][] = "SES_INIT_DATE";
$tdataSESSION[".inlineEditFields"][] = "SES_DUE_DATE";
$tdataSESSION[".inlineEditFields"][] = "SES_END_DATE";

$tdataSESSION[".updateSelectedFields"] = array();
$tdataSESSION[".updateSelectedFields"][] = "SES_UID";
$tdataSESSION[".updateSelectedFields"][] = "SES_STATUS";
$tdataSESSION[".updateSelectedFields"][] = "USR_UID";
$tdataSESSION[".updateSelectedFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".updateSelectedFields"][] = "SES_INIT_DATE";
$tdataSESSION[".updateSelectedFields"][] = "SES_DUE_DATE";
$tdataSESSION[".updateSelectedFields"][] = "SES_END_DATE";


$tdataSESSION[".exportFields"] = array();
$tdataSESSION[".exportFields"][] = "SES_UID";
$tdataSESSION[".exportFields"][] = "SES_STATUS";
$tdataSESSION[".exportFields"][] = "USR_UID";
$tdataSESSION[".exportFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".exportFields"][] = "SES_INIT_DATE";
$tdataSESSION[".exportFields"][] = "SES_DUE_DATE";
$tdataSESSION[".exportFields"][] = "SES_END_DATE";

$tdataSESSION[".importFields"] = array();
$tdataSESSION[".importFields"][] = "SES_UID";
$tdataSESSION[".importFields"][] = "SES_STATUS";
$tdataSESSION[".importFields"][] = "USR_UID";
$tdataSESSION[".importFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".importFields"][] = "SES_INIT_DATE";
$tdataSESSION[".importFields"][] = "SES_DUE_DATE";
$tdataSESSION[".importFields"][] = "SES_END_DATE";

$tdataSESSION[".printFields"] = array();
$tdataSESSION[".printFields"][] = "SES_UID";
$tdataSESSION[".printFields"][] = "SES_STATUS";
$tdataSESSION[".printFields"][] = "USR_UID";
$tdataSESSION[".printFields"][] = "SES_REMOTE_IP";
$tdataSESSION[".printFields"][] = "SES_INIT_DATE";
$tdataSESSION[".printFields"][] = "SES_DUE_DATE";
$tdataSESSION[".printFields"][] = "SES_END_DATE";

//	SES_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SES_UID";
	$fdata["GoodName"] = "SES_UID";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","SES_UID");
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

		$fdata["strField"] = "SES_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SES_UID";

	
	
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




	$tdataSESSION["SES_UID"] = $fdata;
//	SES_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SES_STATUS";
	$fdata["GoodName"] = "SES_STATUS";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","SES_STATUS");
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

		$fdata["strField"] = "SES_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SES_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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




	$tdataSESSION["SES_STATUS"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","USR_UID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSESSION["USR_UID"] = $fdata;
//	SES_REMOTE_IP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SES_REMOTE_IP";
	$fdata["GoodName"] = "SES_REMOTE_IP";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","SES_REMOTE_IP");
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

		$fdata["strField"] = "SES_REMOTE_IP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SES_REMOTE_IP";

	
	
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




	$tdataSESSION["SES_REMOTE_IP"] = $fdata;
//	SES_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SES_INIT_DATE";
	$fdata["GoodName"] = "SES_INIT_DATE";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","SES_INIT_DATE");
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

		$fdata["strField"] = "SES_INIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SES_INIT_DATE";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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




	$tdataSESSION["SES_INIT_DATE"] = $fdata;
//	SES_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SES_DUE_DATE";
	$fdata["GoodName"] = "SES_DUE_DATE";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","SES_DUE_DATE");
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

		$fdata["strField"] = "SES_DUE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SES_DUE_DATE";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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




	$tdataSESSION["SES_DUE_DATE"] = $fdata;
//	SES_END_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SES_END_DATE";
	$fdata["GoodName"] = "SES_END_DATE";
	$fdata["ownerTable"] = "SESSION";
	$fdata["Label"] = GetFieldLabel("SESSION","SES_END_DATE");
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

		$fdata["strField"] = "SES_END_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SES_END_DATE";

	
	
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
			$edata["EditParams"].= " maxlength=19";

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




	$tdataSESSION["SES_END_DATE"] = $fdata;


$tables_data["SESSION"]=&$tdataSESSION;
$field_labels["SESSION"] = &$fieldLabelsSESSION;
$fieldToolTips["SESSION"] = &$fieldToolTipsSESSION;
$placeHolders["SESSION"] = &$placeHoldersSESSION;
$page_titles["SESSION"] = &$pageTitlesSESSION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SESSION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SESSION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SESSION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SES_UID,  	SES_STATUS,  	USR_UID,  	SES_REMOTE_IP,  	SES_INIT_DATE,  	SES_DUE_DATE,  	SES_END_DATE";
$proto0["m_strFrom"] = "FROM `SESSION`";
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
	"m_strName" => "SES_UID",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto6["m_sql"] = "SES_UID";
$proto6["m_srcTableName"] = "SESSION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SES_STATUS",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto8["m_sql"] = "SES_STATUS";
$proto8["m_srcTableName"] = "SESSION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto10["m_sql"] = "USR_UID";
$proto10["m_srcTableName"] = "SESSION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SES_REMOTE_IP",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto12["m_sql"] = "SES_REMOTE_IP";
$proto12["m_srcTableName"] = "SESSION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SES_INIT_DATE",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto14["m_sql"] = "SES_INIT_DATE";
$proto14["m_srcTableName"] = "SESSION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SES_DUE_DATE",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto16["m_sql"] = "SES_DUE_DATE";
$proto16["m_srcTableName"] = "SESSION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SES_END_DATE",
	"m_strTable" => "SESSION",
	"m_srcTableName" => "SESSION"
));

$proto18["m_sql"] = "SES_END_DATE";
$proto18["m_srcTableName"] = "SESSION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "SESSION";
$proto21["m_srcTableName"] = "SESSION";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "SES_UID";
$proto21["m_columns"][] = "SES_STATUS";
$proto21["m_columns"][] = "USR_UID";
$proto21["m_columns"][] = "SES_REMOTE_IP";
$proto21["m_columns"][] = "SES_INIT_DATE";
$proto21["m_columns"][] = "SES_DUE_DATE";
$proto21["m_columns"][] = "SES_END_DATE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`SESSION`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "SESSION";
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
$proto0["m_srcTableName"]="SESSION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SESSION = createSqlQuery_SESSION();


	
						;

							

$tdataSESSION[".sqlquery"] = $queryData_SESSION;

$tableEvents["SESSION"] = new eventsBase;
$tdataSESSION[".hasEvents"] = false;

?>
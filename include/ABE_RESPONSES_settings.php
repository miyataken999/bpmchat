<?php
require_once(getabspath("classes/cipherer.php"));




$tdataABE_RESPONSES = array();
	$tdataABE_RESPONSES[".truncateText"] = true;
	$tdataABE_RESPONSES[".NumberOfChars"] = 20;
	$tdataABE_RESPONSES[".ShortName"] = "ABE_RESPONSES";
	$tdataABE_RESPONSES[".OwnerID"] = "";
	$tdataABE_RESPONSES[".OriginalTable"] = "ABE_RESPONSES";

//	field labels
$fieldLabelsABE_RESPONSES = array();
$fieldToolTipsABE_RESPONSES = array();
$pageTitlesABE_RESPONSES = array();
$placeHoldersABE_RESPONSES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsABE_RESPONSES["Japanese"] = array();
	$fieldToolTipsABE_RESPONSES["Japanese"] = array();
	$placeHoldersABE_RESPONSES["Japanese"] = array();
	$pageTitlesABE_RESPONSES["Japanese"] = array();
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_RES_UID"] = "阿部解像度のuid";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_RES_UID"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_RES_UID"] = "";
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_REQ_UID"] = "阿部のreq UID";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_REQ_UID"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_REQ_UID"] = "";
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_RES_CLIENT_IP"] = "安倍RESクライアントIP";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_RES_CLIENT_IP"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_RES_CLIENT_IP"] = "";
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_RES_DATA"] = "阿部解像度データ";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_RES_DATA"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_RES_DATA"] = "";
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_RES_DATE"] = "阿部解像度の日付";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_RES_DATE"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_RES_DATE"] = "";
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_RES_STATUS"] = "阿部解像度のステータス";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_RES_STATUS"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_RES_STATUS"] = "";
	$fieldLabelsABE_RESPONSES["Japanese"]["ABE_RES_MESSAGE"] = "阿部RESメッセージ";
	$fieldToolTipsABE_RESPONSES["Japanese"]["ABE_RES_MESSAGE"] = "";
	$placeHoldersABE_RESPONSES["Japanese"]["ABE_RES_MESSAGE"] = "";
	if (count($fieldToolTipsABE_RESPONSES["Japanese"]))
		$tdataABE_RESPONSES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsABE_RESPONSES["English"] = array();
	$fieldToolTipsABE_RESPONSES["English"] = array();
	$placeHoldersABE_RESPONSES["English"] = array();
	$pageTitlesABE_RESPONSES["English"] = array();
	$fieldLabelsABE_RESPONSES["English"]["ABE_RES_UID"] = "阿部解像度のuid";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_RES_UID"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_RES_UID"] = "";
	$fieldLabelsABE_RESPONSES["English"]["ABE_REQ_UID"] = "阿部のreq UID";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_REQ_UID"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_REQ_UID"] = "";
	$fieldLabelsABE_RESPONSES["English"]["ABE_RES_CLIENT_IP"] = "安倍RESクライアントIP";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_RES_CLIENT_IP"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_RES_CLIENT_IP"] = "";
	$fieldLabelsABE_RESPONSES["English"]["ABE_RES_DATA"] = "阿部解像度データ";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_RES_DATA"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_RES_DATA"] = "";
	$fieldLabelsABE_RESPONSES["English"]["ABE_RES_DATE"] = "阿部解像度の日付";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_RES_DATE"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_RES_DATE"] = "";
	$fieldLabelsABE_RESPONSES["English"]["ABE_RES_STATUS"] = "阿部解像度のステータス";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_RES_STATUS"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_RES_STATUS"] = "";
	$fieldLabelsABE_RESPONSES["English"]["ABE_RES_MESSAGE"] = "阿部RESメッセージ";
	$fieldToolTipsABE_RESPONSES["English"]["ABE_RES_MESSAGE"] = "";
	$placeHoldersABE_RESPONSES["English"]["ABE_RES_MESSAGE"] = "";
	if (count($fieldToolTipsABE_RESPONSES["English"]))
		$tdataABE_RESPONSES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsABE_RESPONSES[""] = array();
	$fieldToolTipsABE_RESPONSES[""] = array();
	$placeHoldersABE_RESPONSES[""] = array();
	$pageTitlesABE_RESPONSES[""] = array();
	if (count($fieldToolTipsABE_RESPONSES[""]))
		$tdataABE_RESPONSES[".isUseToolTips"] = true;
}


	$tdataABE_RESPONSES[".NCSearch"] = true;



$tdataABE_RESPONSES[".shortTableName"] = "ABE_RESPONSES";
$tdataABE_RESPONSES[".nSecOptions"] = 0;
$tdataABE_RESPONSES[".recsPerRowPrint"] = 1;
$tdataABE_RESPONSES[".mainTableOwnerID"] = "";
$tdataABE_RESPONSES[".moveNext"] = 0;
$tdataABE_RESPONSES[".entityType"] = 0;

$tdataABE_RESPONSES[".strOriginalTableName"] = "ABE_RESPONSES";

	



$tdataABE_RESPONSES[".showAddInPopup"] = false;

$tdataABE_RESPONSES[".showEditInPopup"] = false;

$tdataABE_RESPONSES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataABE_RESPONSES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataABE_RESPONSES[".fieldsForRegister"] = array();
	
$tdataABE_RESPONSES[".listAjax"] = false;

	$tdataABE_RESPONSES[".audit"] = true;

	$tdataABE_RESPONSES[".locking"] = false;

$tdataABE_RESPONSES[".edit"] = true;
$tdataABE_RESPONSES[".afterEditAction"] = 1;
$tdataABE_RESPONSES[".closePopupAfterEdit"] = 1;
$tdataABE_RESPONSES[".afterEditActionDetTable"] = "";

$tdataABE_RESPONSES[".add"] = true;
$tdataABE_RESPONSES[".afterAddAction"] = 1;
$tdataABE_RESPONSES[".closePopupAfterAdd"] = 1;
$tdataABE_RESPONSES[".afterAddActionDetTable"] = "";

$tdataABE_RESPONSES[".list"] = true;

$tdataABE_RESPONSES[".inlineEdit"] = true;


$tdataABE_RESPONSES[".reorderRecordsByHeader"] = true;
$tdataABE_RESPONSES[".createSortByDropdown"] = true;
$tdataABE_RESPONSES[".strSortControlSettingsJSON"] = "";



$tdataABE_RESPONSES[".inlineAdd"] = true;
$tdataABE_RESPONSES[".view"] = true;

$tdataABE_RESPONSES[".import"] = true;

$tdataABE_RESPONSES[".exportTo"] = true;

$tdataABE_RESPONSES[".printFriendly"] = true;

$tdataABE_RESPONSES[".delete"] = true;

$tdataABE_RESPONSES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataABE_RESPONSES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataABE_RESPONSES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataABE_RESPONSES[".searchSaving"] = false;
//

$tdataABE_RESPONSES[".showSearchPanel"] = true;
		$tdataABE_RESPONSES[".flexibleSearch"] = true;

$tdataABE_RESPONSES[".isUseAjaxSuggest"] = true;

$tdataABE_RESPONSES[".rowHighlite"] = true;



				

$tdataABE_RESPONSES[".ajaxCodeSnippetAdded"] = false;

$tdataABE_RESPONSES[".buttonsAdded"] = false;

$tdataABE_RESPONSES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataABE_RESPONSES[".isUseTimeForSearch"] = false;





$tdataABE_RESPONSES[".allSearchFields"] = array();
$tdataABE_RESPONSES[".filterFields"] = array();
$tdataABE_RESPONSES[".requiredSearchFields"] = array();

$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_RES_UID";
	$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_REQ_UID";
	$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_RES_CLIENT_IP";
	$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_RES_DATA";
	$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_RES_DATE";
	$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_RES_STATUS";
	$tdataABE_RESPONSES[".allSearchFields"][] = "ABE_RES_MESSAGE";
	

$tdataABE_RESPONSES[".googleLikeFields"] = array();
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".googleLikeFields"][] = "ABE_RES_MESSAGE";


$tdataABE_RESPONSES[".advSearchFields"] = array();
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".advSearchFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".tableType"] = "list";

$tdataABE_RESPONSES[".printerPageOrientation"] = 0;
$tdataABE_RESPONSES[".nPrinterPageScale"] = 100;

$tdataABE_RESPONSES[".nPrinterSplitRecords"] = 40;

$tdataABE_RESPONSES[".nPrinterPDFSplitRecords"] = 40;



$tdataABE_RESPONSES[".geocodingEnabled"] = false;





$tdataABE_RESPONSES[".listGridLayout"] = 3;


$tdataABE_RESPONSES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataABE_RESPONSES[".pageSize"] = 20;

$tdataABE_RESPONSES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataABE_RESPONSES[".strOrderBy"] = $tstrOrderBy;

$tdataABE_RESPONSES[".orderindexes"] = array();

$tdataABE_RESPONSES[".sqlHead"] = "SELECT ABE_RES_UID,  	ABE_REQ_UID,  	ABE_RES_CLIENT_IP,  	ABE_RES_DATA,  	ABE_RES_DATE,  	ABE_RES_STATUS,  	ABE_RES_MESSAGE";
$tdataABE_RESPONSES[".sqlFrom"] = "FROM ABE_RESPONSES";
$tdataABE_RESPONSES[".sqlWhereExpr"] = "";
$tdataABE_RESPONSES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataABE_RESPONSES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataABE_RESPONSES[".arrGroupsPerPage"] = $arrGPP;

$tdataABE_RESPONSES[".highlightSearchResults"] = true;

$tableKeysABE_RESPONSES = array();
$tableKeysABE_RESPONSES[] = "ABE_RES_UID";
$tdataABE_RESPONSES[".Keys"] = $tableKeysABE_RESPONSES;

$tdataABE_RESPONSES[".listFields"] = array();
$tdataABE_RESPONSES[".listFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".listFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".listFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".listFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".listFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".listFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".listFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".hideMobileList"] = array();


$tdataABE_RESPONSES[".viewFields"] = array();
$tdataABE_RESPONSES[".viewFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".viewFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".viewFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".viewFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".viewFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".viewFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".viewFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".addFields"] = array();
$tdataABE_RESPONSES[".addFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".addFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".addFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".addFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".addFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".addFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".addFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".masterListFields"] = array();
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".masterListFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".inlineAddFields"] = array();
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".inlineAddFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".editFields"] = array();
$tdataABE_RESPONSES[".editFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".editFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".editFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".editFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".editFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".editFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".editFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".inlineEditFields"] = array();
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".inlineEditFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".updateSelectedFields"] = array();
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".updateSelectedFields"][] = "ABE_RES_MESSAGE";


$tdataABE_RESPONSES[".exportFields"] = array();
$tdataABE_RESPONSES[".exportFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".exportFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".exportFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".exportFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".exportFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".exportFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".exportFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".importFields"] = array();
$tdataABE_RESPONSES[".importFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".importFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".importFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".importFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".importFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".importFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".importFields"][] = "ABE_RES_MESSAGE";

$tdataABE_RESPONSES[".printFields"] = array();
$tdataABE_RESPONSES[".printFields"][] = "ABE_RES_UID";
$tdataABE_RESPONSES[".printFields"][] = "ABE_REQ_UID";
$tdataABE_RESPONSES[".printFields"][] = "ABE_RES_CLIENT_IP";
$tdataABE_RESPONSES[".printFields"][] = "ABE_RES_DATA";
$tdataABE_RESPONSES[".printFields"][] = "ABE_RES_DATE";
$tdataABE_RESPONSES[".printFields"][] = "ABE_RES_STATUS";
$tdataABE_RESPONSES[".printFields"][] = "ABE_RES_MESSAGE";

//	ABE_RES_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ABE_RES_UID";
	$fdata["GoodName"] = "ABE_RES_UID";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_RES_UID");
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

		$fdata["strField"] = "ABE_RES_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_RES_UID";

	
	
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




	$tdataABE_RESPONSES["ABE_RES_UID"] = $fdata;
//	ABE_REQ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ABE_REQ_UID";
	$fdata["GoodName"] = "ABE_REQ_UID";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_REQ_UID");
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

		$fdata["strField"] = "ABE_REQ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_REQ_UID";

	
	
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




	$tdataABE_RESPONSES["ABE_REQ_UID"] = $fdata;
//	ABE_RES_CLIENT_IP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ABE_RES_CLIENT_IP";
	$fdata["GoodName"] = "ABE_RES_CLIENT_IP";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_RES_CLIENT_IP");
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

		$fdata["strField"] = "ABE_RES_CLIENT_IP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_RES_CLIENT_IP";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_RESPONSES["ABE_RES_CLIENT_IP"] = $fdata;
//	ABE_RES_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ABE_RES_DATA";
	$fdata["GoodName"] = "ABE_RES_DATA";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_RES_DATA");
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

		$fdata["strField"] = "ABE_RES_DATA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_RES_DATA";

	
	
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




	$tdataABE_RESPONSES["ABE_RES_DATA"] = $fdata;
//	ABE_RES_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ABE_RES_DATE";
	$fdata["GoodName"] = "ABE_RES_DATE";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_RES_DATE");
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

		$fdata["strField"] = "ABE_RES_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_RES_DATE";

	
	
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




	$tdataABE_RESPONSES["ABE_RES_DATE"] = $fdata;
//	ABE_RES_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ABE_RES_STATUS";
	$fdata["GoodName"] = "ABE_RES_STATUS";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_RES_STATUS");
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

		$fdata["strField"] = "ABE_RES_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_RES_STATUS";

	
	
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




	$tdataABE_RESPONSES["ABE_RES_STATUS"] = $fdata;
//	ABE_RES_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ABE_RES_MESSAGE";
	$fdata["GoodName"] = "ABE_RES_MESSAGE";
	$fdata["ownerTable"] = "ABE_RESPONSES";
	$fdata["Label"] = GetFieldLabel("ABE_RESPONSES","ABE_RES_MESSAGE");
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

		$fdata["strField"] = "ABE_RES_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_RES_MESSAGE";

	
	
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




	$tdataABE_RESPONSES["ABE_RES_MESSAGE"] = $fdata;


$tables_data["ABE_RESPONSES"]=&$tdataABE_RESPONSES;
$field_labels["ABE_RESPONSES"] = &$fieldLabelsABE_RESPONSES;
$fieldToolTips["ABE_RESPONSES"] = &$fieldToolTipsABE_RESPONSES;
$placeHolders["ABE_RESPONSES"] = &$placeHoldersABE_RESPONSES;
$page_titles["ABE_RESPONSES"] = &$pageTitlesABE_RESPONSES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ABE_RESPONSES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ABE_RESPONSES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ABE_RESPONSES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ABE_RES_UID,  	ABE_REQ_UID,  	ABE_RES_CLIENT_IP,  	ABE_RES_DATA,  	ABE_RES_DATE,  	ABE_RES_STATUS,  	ABE_RES_MESSAGE";
$proto0["m_strFrom"] = "FROM ABE_RESPONSES";
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
	"m_strName" => "ABE_RES_UID",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto6["m_sql"] = "ABE_RES_UID";
$proto6["m_srcTableName"] = "ABE_RESPONSES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_REQ_UID",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto8["m_sql"] = "ABE_REQ_UID";
$proto8["m_srcTableName"] = "ABE_RESPONSES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_RES_CLIENT_IP",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto10["m_sql"] = "ABE_RES_CLIENT_IP";
$proto10["m_srcTableName"] = "ABE_RESPONSES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_RES_DATA",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto12["m_sql"] = "ABE_RES_DATA";
$proto12["m_srcTableName"] = "ABE_RESPONSES";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_RES_DATE",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto14["m_sql"] = "ABE_RES_DATE";
$proto14["m_srcTableName"] = "ABE_RESPONSES";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_RES_STATUS",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto16["m_sql"] = "ABE_RES_STATUS";
$proto16["m_srcTableName"] = "ABE_RESPONSES";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_RES_MESSAGE",
	"m_strTable" => "ABE_RESPONSES",
	"m_srcTableName" => "ABE_RESPONSES"
));

$proto18["m_sql"] = "ABE_RES_MESSAGE";
$proto18["m_srcTableName"] = "ABE_RESPONSES";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ABE_RESPONSES";
$proto21["m_srcTableName"] = "ABE_RESPONSES";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ABE_RES_UID";
$proto21["m_columns"][] = "ABE_REQ_UID";
$proto21["m_columns"][] = "ABE_RES_CLIENT_IP";
$proto21["m_columns"][] = "ABE_RES_DATA";
$proto21["m_columns"][] = "ABE_RES_DATE";
$proto21["m_columns"][] = "ABE_RES_STATUS";
$proto21["m_columns"][] = "ABE_RES_MESSAGE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ABE_RESPONSES";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ABE_RESPONSES";
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
$proto0["m_srcTableName"]="ABE_RESPONSES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ABE_RESPONSES = createSqlQuery_ABE_RESPONSES();


	
						;

							

$tdataABE_RESPONSES[".sqlquery"] = $queryData_ABE_RESPONSES;

$tableEvents["ABE_RESPONSES"] = new eventsBase;
$tdataABE_RESPONSES[".hasEvents"] = false;

?>
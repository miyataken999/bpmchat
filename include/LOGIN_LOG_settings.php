<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLOGIN_LOG = array();
	$tdataLOGIN_LOG[".truncateText"] = true;
	$tdataLOGIN_LOG[".NumberOfChars"] = 20;
	$tdataLOGIN_LOG[".ShortName"] = "LOGIN_LOG";
	$tdataLOGIN_LOG[".OwnerID"] = "";
	$tdataLOGIN_LOG[".OriginalTable"] = "LOGIN_LOG";

//	field labels
$fieldLabelsLOGIN_LOG = array();
$fieldToolTipsLOGIN_LOG = array();
$pageTitlesLOGIN_LOG = array();
$placeHoldersLOGIN_LOG = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLOGIN_LOG["Japanese"] = array();
	$fieldToolTipsLOGIN_LOG["Japanese"] = array();
	$placeHoldersLOGIN_LOG["Japanese"] = array();
	$pageTitlesLOGIN_LOG["Japanese"] = array();
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_ID"] = "IDをログに記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_ID"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_ID"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_UID"] = "UIDを記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_UID"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_UID"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_STATUS"] = "ログステータス";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_STATUS"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_STATUS"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_IP"] = "IPをログに記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_IP"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_IP"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_SID"] = "SIDを記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_SID"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_SID"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_INIT_DATE"] = "初期化日付を記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_INIT_DATE"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_INIT_DATE"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_END_DATE"] = "終了日を記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_END_DATE"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_END_DATE"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["LOG_CLIENT_HOSTNAME"] = "クライアントのホスト名をログに記録";
	$fieldToolTipsLOGIN_LOG["Japanese"]["LOG_CLIENT_HOSTNAME"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["LOG_CLIENT_HOSTNAME"] = "";
	$fieldLabelsLOGIN_LOG["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsLOGIN_LOG["Japanese"]["USR_UID"] = "";
	$placeHoldersLOGIN_LOG["Japanese"]["USR_UID"] = "";
	if (count($fieldToolTipsLOGIN_LOG["Japanese"]))
		$tdataLOGIN_LOG[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLOGIN_LOG["English"] = array();
	$fieldToolTipsLOGIN_LOG["English"] = array();
	$placeHoldersLOGIN_LOG["English"] = array();
	$pageTitlesLOGIN_LOG["English"] = array();
	$fieldLabelsLOGIN_LOG["English"]["LOG_ID"] = "IDをログに記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_ID"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_ID"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_UID"] = "UIDを記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_UID"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_UID"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_STATUS"] = "ログステータス";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_STATUS"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_STATUS"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_IP"] = "IPをログに記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_IP"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_IP"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_SID"] = "SIDを記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_SID"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_SID"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_INIT_DATE"] = "初期化日付を記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_INIT_DATE"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_INIT_DATE"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_END_DATE"] = "終了日を記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_END_DATE"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_END_DATE"] = "";
	$fieldLabelsLOGIN_LOG["English"]["LOG_CLIENT_HOSTNAME"] = "クライアントのホスト名をログに記録";
	$fieldToolTipsLOGIN_LOG["English"]["LOG_CLIENT_HOSTNAME"] = "";
	$placeHoldersLOGIN_LOG["English"]["LOG_CLIENT_HOSTNAME"] = "";
	$fieldLabelsLOGIN_LOG["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsLOGIN_LOG["English"]["USR_UID"] = "";
	$placeHoldersLOGIN_LOG["English"]["USR_UID"] = "";
	if (count($fieldToolTipsLOGIN_LOG["English"]))
		$tdataLOGIN_LOG[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLOGIN_LOG[""] = array();
	$fieldToolTipsLOGIN_LOG[""] = array();
	$placeHoldersLOGIN_LOG[""] = array();
	$pageTitlesLOGIN_LOG[""] = array();
	if (count($fieldToolTipsLOGIN_LOG[""]))
		$tdataLOGIN_LOG[".isUseToolTips"] = true;
}


	$tdataLOGIN_LOG[".NCSearch"] = true;



$tdataLOGIN_LOG[".shortTableName"] = "LOGIN_LOG";
$tdataLOGIN_LOG[".nSecOptions"] = 0;
$tdataLOGIN_LOG[".recsPerRowPrint"] = 1;
$tdataLOGIN_LOG[".mainTableOwnerID"] = "";
$tdataLOGIN_LOG[".moveNext"] = 0;
$tdataLOGIN_LOG[".entityType"] = 0;

$tdataLOGIN_LOG[".strOriginalTableName"] = "LOGIN_LOG";

	



$tdataLOGIN_LOG[".showAddInPopup"] = false;

$tdataLOGIN_LOG[".showEditInPopup"] = false;

$tdataLOGIN_LOG[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLOGIN_LOG[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLOGIN_LOG[".fieldsForRegister"] = array();
	
$tdataLOGIN_LOG[".listAjax"] = false;

	$tdataLOGIN_LOG[".audit"] = true;

	$tdataLOGIN_LOG[".locking"] = false;

$tdataLOGIN_LOG[".edit"] = true;
$tdataLOGIN_LOG[".afterEditAction"] = 1;
$tdataLOGIN_LOG[".closePopupAfterEdit"] = 1;
$tdataLOGIN_LOG[".afterEditActionDetTable"] = "";

$tdataLOGIN_LOG[".add"] = true;
$tdataLOGIN_LOG[".afterAddAction"] = 1;
$tdataLOGIN_LOG[".closePopupAfterAdd"] = 1;
$tdataLOGIN_LOG[".afterAddActionDetTable"] = "";

$tdataLOGIN_LOG[".list"] = true;

$tdataLOGIN_LOG[".inlineEdit"] = true;


$tdataLOGIN_LOG[".reorderRecordsByHeader"] = true;
$tdataLOGIN_LOG[".createSortByDropdown"] = true;
$tdataLOGIN_LOG[".strSortControlSettingsJSON"] = "";



$tdataLOGIN_LOG[".inlineAdd"] = true;
$tdataLOGIN_LOG[".view"] = true;

$tdataLOGIN_LOG[".import"] = true;

$tdataLOGIN_LOG[".exportTo"] = true;

$tdataLOGIN_LOG[".printFriendly"] = true;

$tdataLOGIN_LOG[".delete"] = true;

$tdataLOGIN_LOG[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLOGIN_LOG[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLOGIN_LOG[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLOGIN_LOG[".searchSaving"] = false;
//

$tdataLOGIN_LOG[".showSearchPanel"] = true;
		$tdataLOGIN_LOG[".flexibleSearch"] = true;

$tdataLOGIN_LOG[".isUseAjaxSuggest"] = true;

$tdataLOGIN_LOG[".rowHighlite"] = true;



				

$tdataLOGIN_LOG[".ajaxCodeSnippetAdded"] = false;

$tdataLOGIN_LOG[".buttonsAdded"] = false;

$tdataLOGIN_LOG[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLOGIN_LOG[".isUseTimeForSearch"] = false;





$tdataLOGIN_LOG[".allSearchFields"] = array();
$tdataLOGIN_LOG[".filterFields"] = array();
$tdataLOGIN_LOG[".requiredSearchFields"] = array();

$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_ID";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_UID";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_STATUS";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_IP";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_SID";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_INIT_DATE";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_END_DATE";
	$tdataLOGIN_LOG[".allSearchFields"][] = "LOG_CLIENT_HOSTNAME";
	$tdataLOGIN_LOG[".allSearchFields"][] = "USR_UID";
	

$tdataLOGIN_LOG[".googleLikeFields"] = array();
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".googleLikeFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".googleLikeFields"][] = "USR_UID";


$tdataLOGIN_LOG[".advSearchFields"] = array();
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".advSearchFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".advSearchFields"][] = "USR_UID";

$tdataLOGIN_LOG[".tableType"] = "list";

$tdataLOGIN_LOG[".printerPageOrientation"] = 0;
$tdataLOGIN_LOG[".nPrinterPageScale"] = 100;

$tdataLOGIN_LOG[".nPrinterSplitRecords"] = 40;

$tdataLOGIN_LOG[".nPrinterPDFSplitRecords"] = 40;



$tdataLOGIN_LOG[".geocodingEnabled"] = false;





$tdataLOGIN_LOG[".listGridLayout"] = 3;


$tdataLOGIN_LOG[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLOGIN_LOG[".pageSize"] = 20;

$tdataLOGIN_LOG[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLOGIN_LOG[".strOrderBy"] = $tstrOrderBy;

$tdataLOGIN_LOG[".orderindexes"] = array();

$tdataLOGIN_LOG[".sqlHead"] = "SELECT LOG_ID,  	LOG_UID,  	LOG_STATUS,  	LOG_IP,  	LOG_SID,  	LOG_INIT_DATE,  	LOG_END_DATE,  	LOG_CLIENT_HOSTNAME,  	USR_UID";
$tdataLOGIN_LOG[".sqlFrom"] = "FROM LOGIN_LOG";
$tdataLOGIN_LOG[".sqlWhereExpr"] = "";
$tdataLOGIN_LOG[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLOGIN_LOG[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLOGIN_LOG[".arrGroupsPerPage"] = $arrGPP;

$tdataLOGIN_LOG[".highlightSearchResults"] = true;

$tableKeysLOGIN_LOG = array();
$tableKeysLOGIN_LOG[] = "LOG_ID";
$tdataLOGIN_LOG[".Keys"] = $tableKeysLOGIN_LOG;

$tdataLOGIN_LOG[".listFields"] = array();
$tdataLOGIN_LOG[".listFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".listFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".listFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".listFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".listFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".listFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".listFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".listFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".listFields"][] = "USR_UID";

$tdataLOGIN_LOG[".hideMobileList"] = array();


$tdataLOGIN_LOG[".viewFields"] = array();
$tdataLOGIN_LOG[".viewFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".viewFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".viewFields"][] = "USR_UID";

$tdataLOGIN_LOG[".addFields"] = array();
$tdataLOGIN_LOG[".addFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".addFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".addFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".addFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".addFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".addFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".addFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".addFields"][] = "USR_UID";

$tdataLOGIN_LOG[".masterListFields"] = array();
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".masterListFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".masterListFields"][] = "USR_UID";

$tdataLOGIN_LOG[".inlineAddFields"] = array();
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".inlineAddFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".inlineAddFields"][] = "USR_UID";

$tdataLOGIN_LOG[".editFields"] = array();
$tdataLOGIN_LOG[".editFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".editFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".editFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".editFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".editFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".editFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".editFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".editFields"][] = "USR_UID";

$tdataLOGIN_LOG[".inlineEditFields"] = array();
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".inlineEditFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".inlineEditFields"][] = "USR_UID";

$tdataLOGIN_LOG[".updateSelectedFields"] = array();
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".updateSelectedFields"][] = "USR_UID";


$tdataLOGIN_LOG[".exportFields"] = array();
$tdataLOGIN_LOG[".exportFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".exportFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".exportFields"][] = "USR_UID";

$tdataLOGIN_LOG[".importFields"] = array();
$tdataLOGIN_LOG[".importFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".importFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".importFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".importFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".importFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".importFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".importFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".importFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".importFields"][] = "USR_UID";

$tdataLOGIN_LOG[".printFields"] = array();
$tdataLOGIN_LOG[".printFields"][] = "LOG_ID";
$tdataLOGIN_LOG[".printFields"][] = "LOG_UID";
$tdataLOGIN_LOG[".printFields"][] = "LOG_STATUS";
$tdataLOGIN_LOG[".printFields"][] = "LOG_IP";
$tdataLOGIN_LOG[".printFields"][] = "LOG_SID";
$tdataLOGIN_LOG[".printFields"][] = "LOG_INIT_DATE";
$tdataLOGIN_LOG[".printFields"][] = "LOG_END_DATE";
$tdataLOGIN_LOG[".printFields"][] = "LOG_CLIENT_HOSTNAME";
$tdataLOGIN_LOG[".printFields"][] = "USR_UID";

//	LOG_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LOG_ID";
	$fdata["GoodName"] = "LOG_ID";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LOG_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_ID";

	
	
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




	$tdataLOGIN_LOG["LOG_ID"] = $fdata;
//	LOG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LOG_UID";
	$fdata["GoodName"] = "LOG_UID";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_UID");
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

		$fdata["strField"] = "LOG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_UID";

	
	
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




	$tdataLOGIN_LOG["LOG_UID"] = $fdata;
//	LOG_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LOG_STATUS";
	$fdata["GoodName"] = "LOG_STATUS";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_STATUS");
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

		$fdata["strField"] = "LOG_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_STATUS";

	
	
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




	$tdataLOGIN_LOG["LOG_STATUS"] = $fdata;
//	LOG_IP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LOG_IP";
	$fdata["GoodName"] = "LOG_IP";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_IP");
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

		$fdata["strField"] = "LOG_IP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_IP";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdataLOGIN_LOG["LOG_IP"] = $fdata;
//	LOG_SID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LOG_SID";
	$fdata["GoodName"] = "LOG_SID";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_SID");
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

		$fdata["strField"] = "LOG_SID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_SID";

	
	
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




	$tdataLOGIN_LOG["LOG_SID"] = $fdata;
//	LOG_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LOG_INIT_DATE";
	$fdata["GoodName"] = "LOG_INIT_DATE";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_INIT_DATE");
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

		$fdata["strField"] = "LOG_INIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_INIT_DATE";

	
	
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




	$tdataLOGIN_LOG["LOG_INIT_DATE"] = $fdata;
//	LOG_END_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LOG_END_DATE";
	$fdata["GoodName"] = "LOG_END_DATE";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_END_DATE");
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

		$fdata["strField"] = "LOG_END_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_END_DATE";

	
	
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




	$tdataLOGIN_LOG["LOG_END_DATE"] = $fdata;
//	LOG_CLIENT_HOSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LOG_CLIENT_HOSTNAME";
	$fdata["GoodName"] = "LOG_CLIENT_HOSTNAME";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","LOG_CLIENT_HOSTNAME");
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

		$fdata["strField"] = "LOG_CLIENT_HOSTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOG_CLIENT_HOSTNAME";

	
	
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




	$tdataLOGIN_LOG["LOG_CLIENT_HOSTNAME"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "LOGIN_LOG";
	$fdata["Label"] = GetFieldLabel("LOGIN_LOG","USR_UID");
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




	$tdataLOGIN_LOG["USR_UID"] = $fdata;


$tables_data["LOGIN_LOG"]=&$tdataLOGIN_LOG;
$field_labels["LOGIN_LOG"] = &$fieldLabelsLOGIN_LOG;
$fieldToolTips["LOGIN_LOG"] = &$fieldToolTipsLOGIN_LOG;
$placeHolders["LOGIN_LOG"] = &$placeHoldersLOGIN_LOG;
$page_titles["LOGIN_LOG"] = &$pageTitlesLOGIN_LOG;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LOGIN_LOG"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LOGIN_LOG"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LOGIN_LOG()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LOG_ID,  	LOG_UID,  	LOG_STATUS,  	LOG_IP,  	LOG_SID,  	LOG_INIT_DATE,  	LOG_END_DATE,  	LOG_CLIENT_HOSTNAME,  	USR_UID";
$proto0["m_strFrom"] = "FROM LOGIN_LOG";
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
	"m_strName" => "LOG_ID",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto6["m_sql"] = "LOG_ID";
$proto6["m_srcTableName"] = "LOGIN_LOG";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_UID",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto8["m_sql"] = "LOG_UID";
$proto8["m_srcTableName"] = "LOGIN_LOG";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_STATUS",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto10["m_sql"] = "LOG_STATUS";
$proto10["m_srcTableName"] = "LOGIN_LOG";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_IP",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto12["m_sql"] = "LOG_IP";
$proto12["m_srcTableName"] = "LOGIN_LOG";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_SID",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto14["m_sql"] = "LOG_SID";
$proto14["m_srcTableName"] = "LOGIN_LOG";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_INIT_DATE",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto16["m_sql"] = "LOG_INIT_DATE";
$proto16["m_srcTableName"] = "LOGIN_LOG";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_END_DATE",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto18["m_sql"] = "LOG_END_DATE";
$proto18["m_srcTableName"] = "LOGIN_LOG";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LOG_CLIENT_HOSTNAME",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto20["m_sql"] = "LOG_CLIENT_HOSTNAME";
$proto20["m_srcTableName"] = "LOGIN_LOG";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "LOGIN_LOG",
	"m_srcTableName" => "LOGIN_LOG"
));

$proto22["m_sql"] = "USR_UID";
$proto22["m_srcTableName"] = "LOGIN_LOG";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "LOGIN_LOG";
$proto25["m_srcTableName"] = "LOGIN_LOG";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "LOG_ID";
$proto25["m_columns"][] = "LOG_UID";
$proto25["m_columns"][] = "LOG_STATUS";
$proto25["m_columns"][] = "LOG_IP";
$proto25["m_columns"][] = "LOG_SID";
$proto25["m_columns"][] = "LOG_INIT_DATE";
$proto25["m_columns"][] = "LOG_END_DATE";
$proto25["m_columns"][] = "LOG_CLIENT_HOSTNAME";
$proto25["m_columns"][] = "USR_UID";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "LOGIN_LOG";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "LOGIN_LOG";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LOGIN_LOG";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LOGIN_LOG = createSqlQuery_LOGIN_LOG();


	
						;

									

$tdataLOGIN_LOG[".sqlquery"] = $queryData_LOGIN_LOG;

$tableEvents["LOGIN_LOG"] = new eventsBase;
$tdataLOGIN_LOG[".hasEvents"] = false;

?>
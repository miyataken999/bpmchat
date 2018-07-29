<?php
require_once(getabspath("classes/cipherer.php"));




$tdatageneral_log = array();
	$tdatageneral_log[".truncateText"] = true;
	$tdatageneral_log[".NumberOfChars"] = 20;
	$tdatageneral_log[".ShortName"] = "general_log";
	$tdatageneral_log[".OwnerID"] = "";
	$tdatageneral_log[".OriginalTable"] = "general_log";

//	field labels
$fieldLabelsgeneral_log = array();
$fieldToolTipsgeneral_log = array();
$pageTitlesgeneral_log = array();
$placeHoldersgeneral_log = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsgeneral_log["Japanese"] = array();
	$fieldToolTipsgeneral_log["Japanese"] = array();
	$placeHoldersgeneral_log["Japanese"] = array();
	$pageTitlesgeneral_log["Japanese"] = array();
	$fieldLabelsgeneral_log["Japanese"]["event_time"] = "イベント時間";
	$fieldToolTipsgeneral_log["Japanese"]["event_time"] = "";
	$placeHoldersgeneral_log["Japanese"]["event_time"] = "";
	$fieldLabelsgeneral_log["Japanese"]["user_host"] = "ユーザホスト";
	$fieldToolTipsgeneral_log["Japanese"]["user_host"] = "";
	$placeHoldersgeneral_log["Japanese"]["user_host"] = "";
	$fieldLabelsgeneral_log["Japanese"]["thread_id"] = "スレッドID";
	$fieldToolTipsgeneral_log["Japanese"]["thread_id"] = "";
	$placeHoldersgeneral_log["Japanese"]["thread_id"] = "";
	$fieldLabelsgeneral_log["Japanese"]["server_id"] = "サーバID";
	$fieldToolTipsgeneral_log["Japanese"]["server_id"] = "";
	$placeHoldersgeneral_log["Japanese"]["server_id"] = "";
	$fieldLabelsgeneral_log["Japanese"]["command_type"] = "コマンドタイプ";
	$fieldToolTipsgeneral_log["Japanese"]["command_type"] = "";
	$placeHoldersgeneral_log["Japanese"]["command_type"] = "";
	$fieldLabelsgeneral_log["Japanese"]["argument"] = "引数";
	$fieldToolTipsgeneral_log["Japanese"]["argument"] = "";
	$placeHoldersgeneral_log["Japanese"]["argument"] = "";
	if (count($fieldToolTipsgeneral_log["Japanese"]))
		$tdatageneral_log[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgeneral_log["English"] = array();
	$fieldToolTipsgeneral_log["English"] = array();
	$placeHoldersgeneral_log["English"] = array();
	$pageTitlesgeneral_log["English"] = array();
	$fieldLabelsgeneral_log["English"]["event_time"] = "イベント時間";
	$fieldToolTipsgeneral_log["English"]["event_time"] = "";
	$placeHoldersgeneral_log["English"]["event_time"] = "";
	$fieldLabelsgeneral_log["English"]["user_host"] = "ユーザホスト";
	$fieldToolTipsgeneral_log["English"]["user_host"] = "";
	$placeHoldersgeneral_log["English"]["user_host"] = "";
	$fieldLabelsgeneral_log["English"]["thread_id"] = "スレッドID";
	$fieldToolTipsgeneral_log["English"]["thread_id"] = "";
	$placeHoldersgeneral_log["English"]["thread_id"] = "";
	$fieldLabelsgeneral_log["English"]["server_id"] = "サーバID";
	$fieldToolTipsgeneral_log["English"]["server_id"] = "";
	$placeHoldersgeneral_log["English"]["server_id"] = "";
	$fieldLabelsgeneral_log["English"]["command_type"] = "コマンドタイプ";
	$fieldToolTipsgeneral_log["English"]["command_type"] = "";
	$placeHoldersgeneral_log["English"]["command_type"] = "";
	$fieldLabelsgeneral_log["English"]["argument"] = "引数";
	$fieldToolTipsgeneral_log["English"]["argument"] = "";
	$placeHoldersgeneral_log["English"]["argument"] = "";
	if (count($fieldToolTipsgeneral_log["English"]))
		$tdatageneral_log[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgeneral_log[""] = array();
	$fieldToolTipsgeneral_log[""] = array();
	$placeHoldersgeneral_log[""] = array();
	$pageTitlesgeneral_log[""] = array();
	if (count($fieldToolTipsgeneral_log[""]))
		$tdatageneral_log[".isUseToolTips"] = true;
}


	$tdatageneral_log[".NCSearch"] = true;



$tdatageneral_log[".shortTableName"] = "general_log";
$tdatageneral_log[".nSecOptions"] = 0;
$tdatageneral_log[".recsPerRowPrint"] = 1;
$tdatageneral_log[".mainTableOwnerID"] = "";
$tdatageneral_log[".moveNext"] = 0;
$tdatageneral_log[".entityType"] = 0;

$tdatageneral_log[".strOriginalTableName"] = "general_log";

	



$tdatageneral_log[".showAddInPopup"] = false;

$tdatageneral_log[".showEditInPopup"] = false;

$tdatageneral_log[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatageneral_log[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatageneral_log[".fieldsForRegister"] = array();
	
$tdatageneral_log[".listAjax"] = false;

	$tdatageneral_log[".audit"] = true;

	$tdatageneral_log[".locking"] = false;

$tdatageneral_log[".edit"] = true;
$tdatageneral_log[".afterEditAction"] = 1;
$tdatageneral_log[".closePopupAfterEdit"] = 1;
$tdatageneral_log[".afterEditActionDetTable"] = "";

$tdatageneral_log[".add"] = true;
$tdatageneral_log[".afterAddAction"] = 1;
$tdatageneral_log[".closePopupAfterAdd"] = 1;
$tdatageneral_log[".afterAddActionDetTable"] = "";

$tdatageneral_log[".list"] = true;

$tdatageneral_log[".inlineEdit"] = true;

$tdatageneral_log[".updateSelected"] = true;

$tdatageneral_log[".reorderRecordsByHeader"] = true;



$tdatageneral_log[".inlineAdd"] = true;
$tdatageneral_log[".copy"] = true;
$tdatageneral_log[".view"] = true;

$tdatageneral_log[".import"] = true;

$tdatageneral_log[".exportTo"] = true;

$tdatageneral_log[".printFriendly"] = true;

$tdatageneral_log[".delete"] = true;

$tdatageneral_log[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatageneral_log[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatageneral_log[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatageneral_log[".searchSaving"] = false;
//

$tdatageneral_log[".showSearchPanel"] = true;
		$tdatageneral_log[".flexibleSearch"] = true;

$tdatageneral_log[".isUseAjaxSuggest"] = true;

$tdatageneral_log[".rowHighlite"] = true;



				

$tdatageneral_log[".ajaxCodeSnippetAdded"] = false;

$tdatageneral_log[".buttonsAdded"] = false;

$tdatageneral_log[".addPageEvents"] = false;

// use timepicker for search panel
$tdatageneral_log[".isUseTimeForSearch"] = false;





$tdatageneral_log[".allSearchFields"] = array();
$tdatageneral_log[".filterFields"] = array();
$tdatageneral_log[".requiredSearchFields"] = array();

$tdatageneral_log[".allSearchFields"][] = "event_time";
	$tdatageneral_log[".allSearchFields"][] = "user_host";
	$tdatageneral_log[".allSearchFields"][] = "thread_id";
	$tdatageneral_log[".allSearchFields"][] = "server_id";
	$tdatageneral_log[".allSearchFields"][] = "command_type";
	$tdatageneral_log[".allSearchFields"][] = "argument";
	

$tdatageneral_log[".googleLikeFields"] = array();
$tdatageneral_log[".googleLikeFields"][] = "event_time";
$tdatageneral_log[".googleLikeFields"][] = "user_host";
$tdatageneral_log[".googleLikeFields"][] = "thread_id";
$tdatageneral_log[".googleLikeFields"][] = "server_id";
$tdatageneral_log[".googleLikeFields"][] = "command_type";
$tdatageneral_log[".googleLikeFields"][] = "argument";


$tdatageneral_log[".advSearchFields"] = array();
$tdatageneral_log[".advSearchFields"][] = "event_time";
$tdatageneral_log[".advSearchFields"][] = "user_host";
$tdatageneral_log[".advSearchFields"][] = "thread_id";
$tdatageneral_log[".advSearchFields"][] = "server_id";
$tdatageneral_log[".advSearchFields"][] = "command_type";
$tdatageneral_log[".advSearchFields"][] = "argument";

$tdatageneral_log[".tableType"] = "list";

$tdatageneral_log[".printerPageOrientation"] = 0;
$tdatageneral_log[".nPrinterPageScale"] = 100;

$tdatageneral_log[".nPrinterSplitRecords"] = 40;

$tdatageneral_log[".nPrinterPDFSplitRecords"] = 40;



$tdatageneral_log[".geocodingEnabled"] = false;





$tdatageneral_log[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatageneral_log[".pageSize"] = 20;

$tdatageneral_log[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatageneral_log[".strOrderBy"] = $tstrOrderBy;

$tdatageneral_log[".orderindexes"] = array();

$tdatageneral_log[".sqlHead"] = "SELECT event_time,  	user_host,  	thread_id,  	server_id,  	command_type,  	argument";
$tdatageneral_log[".sqlFrom"] = "FROM general_log";
$tdatageneral_log[".sqlWhereExpr"] = "";
$tdatageneral_log[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatageneral_log[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatageneral_log[".arrGroupsPerPage"] = $arrGPP;

$tdatageneral_log[".highlightSearchResults"] = true;

$tableKeysgeneral_log = array();
$tableKeysgeneral_log[] = "event_time";
$tdatageneral_log[".Keys"] = $tableKeysgeneral_log;

$tdatageneral_log[".listFields"] = array();
$tdatageneral_log[".listFields"][] = "event_time";
$tdatageneral_log[".listFields"][] = "user_host";
$tdatageneral_log[".listFields"][] = "thread_id";
$tdatageneral_log[".listFields"][] = "server_id";
$tdatageneral_log[".listFields"][] = "command_type";
$tdatageneral_log[".listFields"][] = "argument";

$tdatageneral_log[".hideMobileList"] = array();


$tdatageneral_log[".viewFields"] = array();
$tdatageneral_log[".viewFields"][] = "event_time";
$tdatageneral_log[".viewFields"][] = "user_host";
$tdatageneral_log[".viewFields"][] = "thread_id";
$tdatageneral_log[".viewFields"][] = "server_id";
$tdatageneral_log[".viewFields"][] = "command_type";
$tdatageneral_log[".viewFields"][] = "argument";

$tdatageneral_log[".addFields"] = array();
$tdatageneral_log[".addFields"][] = "event_time";
$tdatageneral_log[".addFields"][] = "user_host";
$tdatageneral_log[".addFields"][] = "thread_id";
$tdatageneral_log[".addFields"][] = "server_id";
$tdatageneral_log[".addFields"][] = "command_type";
$tdatageneral_log[".addFields"][] = "argument";

$tdatageneral_log[".masterListFields"] = array();
$tdatageneral_log[".masterListFields"][] = "event_time";
$tdatageneral_log[".masterListFields"][] = "user_host";
$tdatageneral_log[".masterListFields"][] = "thread_id";
$tdatageneral_log[".masterListFields"][] = "server_id";
$tdatageneral_log[".masterListFields"][] = "command_type";
$tdatageneral_log[".masterListFields"][] = "argument";

$tdatageneral_log[".inlineAddFields"] = array();
$tdatageneral_log[".inlineAddFields"][] = "event_time";
$tdatageneral_log[".inlineAddFields"][] = "user_host";
$tdatageneral_log[".inlineAddFields"][] = "thread_id";
$tdatageneral_log[".inlineAddFields"][] = "server_id";
$tdatageneral_log[".inlineAddFields"][] = "command_type";
$tdatageneral_log[".inlineAddFields"][] = "argument";

$tdatageneral_log[".editFields"] = array();
$tdatageneral_log[".editFields"][] = "event_time";
$tdatageneral_log[".editFields"][] = "user_host";
$tdatageneral_log[".editFields"][] = "thread_id";
$tdatageneral_log[".editFields"][] = "server_id";
$tdatageneral_log[".editFields"][] = "command_type";
$tdatageneral_log[".editFields"][] = "argument";

$tdatageneral_log[".inlineEditFields"] = array();
$tdatageneral_log[".inlineEditFields"][] = "event_time";
$tdatageneral_log[".inlineEditFields"][] = "user_host";
$tdatageneral_log[".inlineEditFields"][] = "thread_id";
$tdatageneral_log[".inlineEditFields"][] = "server_id";
$tdatageneral_log[".inlineEditFields"][] = "command_type";
$tdatageneral_log[".inlineEditFields"][] = "argument";

$tdatageneral_log[".updateSelectedFields"] = array();
$tdatageneral_log[".updateSelectedFields"][] = "event_time";
$tdatageneral_log[".updateSelectedFields"][] = "user_host";
$tdatageneral_log[".updateSelectedFields"][] = "server_id";
$tdatageneral_log[".updateSelectedFields"][] = "command_type";
$tdatageneral_log[".updateSelectedFields"][] = "argument";


$tdatageneral_log[".exportFields"] = array();
$tdatageneral_log[".exportFields"][] = "event_time";
$tdatageneral_log[".exportFields"][] = "user_host";
$tdatageneral_log[".exportFields"][] = "thread_id";
$tdatageneral_log[".exportFields"][] = "server_id";
$tdatageneral_log[".exportFields"][] = "command_type";
$tdatageneral_log[".exportFields"][] = "argument";

$tdatageneral_log[".importFields"] = array();
$tdatageneral_log[".importFields"][] = "event_time";
$tdatageneral_log[".importFields"][] = "user_host";
$tdatageneral_log[".importFields"][] = "thread_id";
$tdatageneral_log[".importFields"][] = "server_id";
$tdatageneral_log[".importFields"][] = "command_type";
$tdatageneral_log[".importFields"][] = "argument";

$tdatageneral_log[".printFields"] = array();
$tdatageneral_log[".printFields"][] = "event_time";
$tdatageneral_log[".printFields"][] = "user_host";
$tdatageneral_log[".printFields"][] = "thread_id";
$tdatageneral_log[".printFields"][] = "server_id";
$tdatageneral_log[".printFields"][] = "command_type";
$tdatageneral_log[".printFields"][] = "argument";

//	event_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "event_time";
	$fdata["GoodName"] = "event_time";
	$fdata["ownerTable"] = "general_log";
	$fdata["Label"] = GetFieldLabel("general_log","event_time");
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

		$fdata["strField"] = "event_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "event_time";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatageneral_log["event_time"] = $fdata;
//	user_host
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_host";
	$fdata["GoodName"] = "user_host";
	$fdata["ownerTable"] = "general_log";
	$fdata["Label"] = GetFieldLabel("general_log","user_host");
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

		$fdata["strField"] = "user_host";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_host";

	
	
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




	$tdatageneral_log["user_host"] = $fdata;
//	thread_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "thread_id";
	$fdata["GoodName"] = "thread_id";
	$fdata["ownerTable"] = "general_log";
	$fdata["Label"] = GetFieldLabel("general_log","thread_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "thread_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "thread_id";

	
	
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




	$tdatageneral_log["thread_id"] = $fdata;
//	server_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "server_id";
	$fdata["GoodName"] = "server_id";
	$fdata["ownerTable"] = "general_log";
	$fdata["Label"] = GetFieldLabel("general_log","server_id");
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

		$fdata["strField"] = "server_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "server_id";

	
	
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




	$tdatageneral_log["server_id"] = $fdata;
//	command_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "command_type";
	$fdata["GoodName"] = "command_type";
	$fdata["ownerTable"] = "general_log";
	$fdata["Label"] = GetFieldLabel("general_log","command_type");
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

		$fdata["strField"] = "command_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "command_type";

	
	
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
			$edata["EditParams"].= " maxlength=64";

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




	$tdatageneral_log["command_type"] = $fdata;
//	argument
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "argument";
	$fdata["GoodName"] = "argument";
	$fdata["ownerTable"] = "general_log";
	$fdata["Label"] = GetFieldLabel("general_log","argument");
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

		$fdata["strField"] = "argument";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "argument";

	
	
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




	$tdatageneral_log["argument"] = $fdata;


$tables_data["general_log"]=&$tdatageneral_log;
$field_labels["general_log"] = &$fieldLabelsgeneral_log;
$fieldToolTips["general_log"] = &$fieldToolTipsgeneral_log;
$placeHolders["general_log"] = &$placeHoldersgeneral_log;
$page_titles["general_log"] = &$pageTitlesgeneral_log;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["general_log"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["general_log"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_general_log()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "event_time,  	user_host,  	thread_id,  	server_id,  	command_type,  	argument";
$proto0["m_strFrom"] = "FROM general_log";
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
	"m_strName" => "event_time",
	"m_strTable" => "general_log",
	"m_srcTableName" => "general_log"
));

$proto6["m_sql"] = "event_time";
$proto6["m_srcTableName"] = "general_log";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_host",
	"m_strTable" => "general_log",
	"m_srcTableName" => "general_log"
));

$proto8["m_sql"] = "user_host";
$proto8["m_srcTableName"] = "general_log";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "thread_id",
	"m_strTable" => "general_log",
	"m_srcTableName" => "general_log"
));

$proto10["m_sql"] = "thread_id";
$proto10["m_srcTableName"] = "general_log";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "server_id",
	"m_strTable" => "general_log",
	"m_srcTableName" => "general_log"
));

$proto12["m_sql"] = "server_id";
$proto12["m_srcTableName"] = "general_log";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "command_type",
	"m_strTable" => "general_log",
	"m_srcTableName" => "general_log"
));

$proto14["m_sql"] = "command_type";
$proto14["m_srcTableName"] = "general_log";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "argument",
	"m_strTable" => "general_log",
	"m_srcTableName" => "general_log"
));

$proto16["m_sql"] = "argument";
$proto16["m_srcTableName"] = "general_log";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "general_log";
$proto19["m_srcTableName"] = "general_log";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "event_time";
$proto19["m_columns"][] = "user_host";
$proto19["m_columns"][] = "thread_id";
$proto19["m_columns"][] = "server_id";
$proto19["m_columns"][] = "command_type";
$proto19["m_columns"][] = "argument";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "general_log";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "general_log";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="general_log";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_general_log = createSqlQuery_general_log();


	
						;

						

$tdatageneral_log[".sqlquery"] = $queryData_general_log;

$tableEvents["general_log"] = new eventsBase;
$tdatageneral_log[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_COMMAND_Report = array();
	$tdataPMT_COMMAND_Report[".truncateText"] = true;
	$tdataPMT_COMMAND_Report[".NumberOfChars"] = 20;
	$tdataPMT_COMMAND_Report[".ShortName"] = "PMT_COMMAND_Report";
	$tdataPMT_COMMAND_Report[".OwnerID"] = "";
	$tdataPMT_COMMAND_Report[".OriginalTable"] = "PMT_COMMAND";

//	field labels
$fieldLabelsPMT_COMMAND_Report = array();
$fieldToolTipsPMT_COMMAND_Report = array();
$pageTitlesPMT_COMMAND_Report = array();
$placeHoldersPMT_COMMAND_Report = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_COMMAND_Report["Japanese"] = array();
	$fieldToolTipsPMT_COMMAND_Report["Japanese"] = array();
	$placeHoldersPMT_COMMAND_Report["Japanese"] = array();
	$pageTitlesPMT_COMMAND_Report["Japanese"] = array();
	$fieldLabelsPMT_COMMAND_Report["Japanese"]["id"] = "ID";
	$fieldToolTipsPMT_COMMAND_Report["Japanese"]["id"] = "";
	$placeHoldersPMT_COMMAND_Report["Japanese"]["id"] = "";
	$fieldLabelsPMT_COMMAND_Report["Japanese"]["cmd"] = "CMD";
	$fieldToolTipsPMT_COMMAND_Report["Japanese"]["cmd"] = "";
	$placeHoldersPMT_COMMAND_Report["Japanese"]["cmd"] = "";
	$fieldLabelsPMT_COMMAND_Report["Japanese"]["lang"] = "LANG";
	$fieldToolTipsPMT_COMMAND_Report["Japanese"]["lang"] = "";
	$placeHoldersPMT_COMMAND_Report["Japanese"]["lang"] = "";
	$fieldLabelsPMT_COMMAND_Report["Japanese"]["detail"] = "ディテール";
	$fieldToolTipsPMT_COMMAND_Report["Japanese"]["detail"] = "";
	$placeHoldersPMT_COMMAND_Report["Japanese"]["detail"] = "";
	$fieldLabelsPMT_COMMAND_Report["Japanese"]["mysqlfunctionname"] = "Mysqlfunctionname";
	$fieldToolTipsPMT_COMMAND_Report["Japanese"]["mysqlfunctionname"] = "";
	$placeHoldersPMT_COMMAND_Report["Japanese"]["mysqlfunctionname"] = "";
	$fieldLabelsPMT_COMMAND_Report["Japanese"]["mysqlfunction"] = "Mysqlfunction";
	$fieldToolTipsPMT_COMMAND_Report["Japanese"]["mysqlfunction"] = "";
	$placeHoldersPMT_COMMAND_Report["Japanese"]["mysqlfunction"] = "";
	if (count($fieldToolTipsPMT_COMMAND_Report["Japanese"]))
		$tdataPMT_COMMAND_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_COMMAND_Report["English"] = array();
	$fieldToolTipsPMT_COMMAND_Report["English"] = array();
	$placeHoldersPMT_COMMAND_Report["English"] = array();
	$pageTitlesPMT_COMMAND_Report["English"] = array();
	$fieldLabelsPMT_COMMAND_Report["English"]["id"] = "ID";
	$fieldToolTipsPMT_COMMAND_Report["English"]["id"] = "";
	$placeHoldersPMT_COMMAND_Report["English"]["id"] = "";
	$fieldLabelsPMT_COMMAND_Report["English"]["cmd"] = "CMD";
	$fieldToolTipsPMT_COMMAND_Report["English"]["cmd"] = "";
	$placeHoldersPMT_COMMAND_Report["English"]["cmd"] = "";
	$fieldLabelsPMT_COMMAND_Report["English"]["lang"] = "LANG";
	$fieldToolTipsPMT_COMMAND_Report["English"]["lang"] = "";
	$placeHoldersPMT_COMMAND_Report["English"]["lang"] = "";
	$fieldLabelsPMT_COMMAND_Report["English"]["detail"] = "ディテール";
	$fieldToolTipsPMT_COMMAND_Report["English"]["detail"] = "";
	$placeHoldersPMT_COMMAND_Report["English"]["detail"] = "";
	$fieldLabelsPMT_COMMAND_Report["English"]["mysqlfunctionname"] = "Mysqlfunctionname";
	$fieldToolTipsPMT_COMMAND_Report["English"]["mysqlfunctionname"] = "";
	$placeHoldersPMT_COMMAND_Report["English"]["mysqlfunctionname"] = "";
	$fieldLabelsPMT_COMMAND_Report["English"]["mysqlfunction"] = "Mysqlfunction";
	$fieldToolTipsPMT_COMMAND_Report["English"]["mysqlfunction"] = "";
	$placeHoldersPMT_COMMAND_Report["English"]["mysqlfunction"] = "";
	if (count($fieldToolTipsPMT_COMMAND_Report["English"]))
		$tdataPMT_COMMAND_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_COMMAND_Report[""] = array();
	$fieldToolTipsPMT_COMMAND_Report[""] = array();
	$placeHoldersPMT_COMMAND_Report[""] = array();
	$pageTitlesPMT_COMMAND_Report[""] = array();
	if (count($fieldToolTipsPMT_COMMAND_Report[""]))
		$tdataPMT_COMMAND_Report[".isUseToolTips"] = true;
}


	$tdataPMT_COMMAND_Report[".NCSearch"] = true;



$tdataPMT_COMMAND_Report[".shortTableName"] = "PMT_COMMAND_Report";
$tdataPMT_COMMAND_Report[".nSecOptions"] = 0;
$tdataPMT_COMMAND_Report[".recsPerRowPrint"] = 1;
$tdataPMT_COMMAND_Report[".mainTableOwnerID"] = "";
$tdataPMT_COMMAND_Report[".moveNext"] = 0;
$tdataPMT_COMMAND_Report[".entityType"] = 2;

$tdataPMT_COMMAND_Report[".strOriginalTableName"] = "PMT_COMMAND";

	



$tdataPMT_COMMAND_Report[".showAddInPopup"] = false;

$tdataPMT_COMMAND_Report[".showEditInPopup"] = false;

$tdataPMT_COMMAND_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_COMMAND_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_COMMAND_Report[".fieldsForRegister"] = array();
	
$tdataPMT_COMMAND_Report[".listAjax"] = false;

	$tdataPMT_COMMAND_Report[".audit"] = false;

	$tdataPMT_COMMAND_Report[".locking"] = false;

$tdataPMT_COMMAND_Report[".edit"] = true;
$tdataPMT_COMMAND_Report[".afterEditAction"] = 1;
$tdataPMT_COMMAND_Report[".closePopupAfterEdit"] = 1;
$tdataPMT_COMMAND_Report[".afterEditActionDetTable"] = "";

$tdataPMT_COMMAND_Report[".add"] = true;
$tdataPMT_COMMAND_Report[".afterAddAction"] = 1;
$tdataPMT_COMMAND_Report[".closePopupAfterAdd"] = 1;
$tdataPMT_COMMAND_Report[".afterAddActionDetTable"] = "";

$tdataPMT_COMMAND_Report[".list"] = true;



$tdataPMT_COMMAND_Report[".reorderRecordsByHeader"] = true;



$tdataPMT_COMMAND_Report[".view"] = true;


$tdataPMT_COMMAND_Report[".exportTo"] = true;

$tdataPMT_COMMAND_Report[".printFriendly"] = true;

$tdataPMT_COMMAND_Report[".delete"] = true;

$tdataPMT_COMMAND_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_COMMAND_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_COMMAND_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_COMMAND_Report[".searchSaving"] = false;
//

$tdataPMT_COMMAND_Report[".showSearchPanel"] = true;
		$tdataPMT_COMMAND_Report[".flexibleSearch"] = true;

$tdataPMT_COMMAND_Report[".isUseAjaxSuggest"] = true;




				

$tdataPMT_COMMAND_Report[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_COMMAND_Report[".buttonsAdded"] = false;

$tdataPMT_COMMAND_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_COMMAND_Report[".isUseTimeForSearch"] = false;





$tdataPMT_COMMAND_Report[".allSearchFields"] = array();
$tdataPMT_COMMAND_Report[".filterFields"] = array();
$tdataPMT_COMMAND_Report[".requiredSearchFields"] = array();

$tdataPMT_COMMAND_Report[".allSearchFields"][] = "id";
	$tdataPMT_COMMAND_Report[".allSearchFields"][] = "cmd";
	$tdataPMT_COMMAND_Report[".allSearchFields"][] = "lang";
	$tdataPMT_COMMAND_Report[".allSearchFields"][] = "detail";
	$tdataPMT_COMMAND_Report[".allSearchFields"][] = "mysqlfunctionname";
	$tdataPMT_COMMAND_Report[".allSearchFields"][] = "mysqlfunction";
	

$tdataPMT_COMMAND_Report[".googleLikeFields"] = array();
$tdataPMT_COMMAND_Report[".googleLikeFields"][] = "id";
$tdataPMT_COMMAND_Report[".googleLikeFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".googleLikeFields"][] = "lang";
$tdataPMT_COMMAND_Report[".googleLikeFields"][] = "detail";
$tdataPMT_COMMAND_Report[".googleLikeFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".googleLikeFields"][] = "mysqlfunction";


$tdataPMT_COMMAND_Report[".advSearchFields"] = array();
$tdataPMT_COMMAND_Report[".advSearchFields"][] = "id";
$tdataPMT_COMMAND_Report[".advSearchFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".advSearchFields"][] = "lang";
$tdataPMT_COMMAND_Report[".advSearchFields"][] = "detail";
$tdataPMT_COMMAND_Report[".advSearchFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".advSearchFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".tableType"] = "report";

$tdataPMT_COMMAND_Report[".printerPageOrientation"] = 0;
$tdataPMT_COMMAND_Report[".nPrinterPageScale"] = 100;

$tdataPMT_COMMAND_Report[".nPrinterSplitRecords"] = 40;

$tdataPMT_COMMAND_Report[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_COMMAND_Report[".geocodingEnabled"] = false;

//report settings
$tdataPMT_COMMAND_Report[".printReportLayout"] = 6;

$tdataPMT_COMMAND_Report[".reportPrintPartitionType"] = 1;
$tdataPMT_COMMAND_Report[".reportPrintGroupsPerPage"] = 40;
$tdataPMT_COMMAND_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdataPMT_COMMAND_Report[".lowGroup"] = 0;



$tdataPMT_COMMAND_Report[".pageSize"] = 20;






$tdataPMT_COMMAND_Report[".repShowDet"] = true;

$tdataPMT_COMMAND_Report[".reportLayout"] = 6;

//end of report settings




$tdataPMT_COMMAND_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_COMMAND_Report[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_COMMAND_Report[".orderindexes"] = array();

$tdataPMT_COMMAND_Report[".sqlHead"] = "SELECT id,  	cmd,  	lang,  	detail,  	mysqlfunctionname,  	mysqlfunction";
$tdataPMT_COMMAND_Report[".sqlFrom"] = "FROM PMT_COMMAND";
$tdataPMT_COMMAND_Report[".sqlWhereExpr"] = "";
$tdataPMT_COMMAND_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_COMMAND_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_COMMAND_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_COMMAND_Report[".highlightSearchResults"] = true;

$tableKeysPMT_COMMAND_Report = array();
$tableKeysPMT_COMMAND_Report[] = "id";
$tdataPMT_COMMAND_Report[".Keys"] = $tableKeysPMT_COMMAND_Report;

$tdataPMT_COMMAND_Report[".listFields"] = array();
$tdataPMT_COMMAND_Report[".listFields"][] = "id";
$tdataPMT_COMMAND_Report[".listFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".listFields"][] = "lang";
$tdataPMT_COMMAND_Report[".listFields"][] = "detail";
$tdataPMT_COMMAND_Report[".listFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".listFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".hideMobileList"] = array();


$tdataPMT_COMMAND_Report[".viewFields"] = array();
$tdataPMT_COMMAND_Report[".viewFields"][] = "id";
$tdataPMT_COMMAND_Report[".viewFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".viewFields"][] = "lang";
$tdataPMT_COMMAND_Report[".viewFields"][] = "detail";
$tdataPMT_COMMAND_Report[".viewFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".viewFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".addFields"] = array();
$tdataPMT_COMMAND_Report[".addFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".addFields"][] = "lang";
$tdataPMT_COMMAND_Report[".addFields"][] = "detail";
$tdataPMT_COMMAND_Report[".addFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".addFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".masterListFields"] = array();
$tdataPMT_COMMAND_Report[".masterListFields"][] = "id";
$tdataPMT_COMMAND_Report[".masterListFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".masterListFields"][] = "lang";
$tdataPMT_COMMAND_Report[".masterListFields"][] = "detail";
$tdataPMT_COMMAND_Report[".masterListFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".masterListFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".inlineAddFields"] = array();
$tdataPMT_COMMAND_Report[".inlineAddFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".inlineAddFields"][] = "lang";
$tdataPMT_COMMAND_Report[".inlineAddFields"][] = "detail";
$tdataPMT_COMMAND_Report[".inlineAddFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".inlineAddFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".editFields"] = array();
$tdataPMT_COMMAND_Report[".editFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".editFields"][] = "lang";
$tdataPMT_COMMAND_Report[".editFields"][] = "detail";
$tdataPMT_COMMAND_Report[".editFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".editFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".inlineEditFields"] = array();
$tdataPMT_COMMAND_Report[".inlineEditFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".inlineEditFields"][] = "lang";
$tdataPMT_COMMAND_Report[".inlineEditFields"][] = "detail";
$tdataPMT_COMMAND_Report[".inlineEditFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".inlineEditFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".updateSelectedFields"] = array();
$tdataPMT_COMMAND_Report[".updateSelectedFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".updateSelectedFields"][] = "lang";
$tdataPMT_COMMAND_Report[".updateSelectedFields"][] = "detail";
$tdataPMT_COMMAND_Report[".updateSelectedFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".updateSelectedFields"][] = "mysqlfunction";


$tdataPMT_COMMAND_Report[".exportFields"] = array();
$tdataPMT_COMMAND_Report[".exportFields"][] = "id";
$tdataPMT_COMMAND_Report[".exportFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".exportFields"][] = "lang";
$tdataPMT_COMMAND_Report[".exportFields"][] = "detail";
$tdataPMT_COMMAND_Report[".exportFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".exportFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".importFields"] = array();
$tdataPMT_COMMAND_Report[".importFields"][] = "id";
$tdataPMT_COMMAND_Report[".importFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".importFields"][] = "lang";
$tdataPMT_COMMAND_Report[".importFields"][] = "detail";
$tdataPMT_COMMAND_Report[".importFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".importFields"][] = "mysqlfunction";

$tdataPMT_COMMAND_Report[".printFields"] = array();
$tdataPMT_COMMAND_Report[".printFields"][] = "id";
$tdataPMT_COMMAND_Report[".printFields"][] = "cmd";
$tdataPMT_COMMAND_Report[".printFields"][] = "lang";
$tdataPMT_COMMAND_Report[".printFields"][] = "detail";
$tdataPMT_COMMAND_Report[".printFields"][] = "mysqlfunctionname";
$tdataPMT_COMMAND_Report[".printFields"][] = "mysqlfunction";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND_Report","id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_COMMAND_Report["id"] = $fdata;
//	cmd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cmd";
	$fdata["GoodName"] = "cmd";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND_Report","cmd");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "cmd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cmd";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_COMMAND_Report["cmd"] = $fdata;
//	lang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lang";
	$fdata["GoodName"] = "lang";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND_Report","lang");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "lang";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lang";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_COMMAND_Report["lang"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND_Report","detail");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detail";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_COMMAND_Report["detail"] = $fdata;
//	mysqlfunctionname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mysqlfunctionname";
	$fdata["GoodName"] = "mysqlfunctionname";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND_Report","mysqlfunctionname");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "mysqlfunctionname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mysqlfunctionname";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_COMMAND_Report["mysqlfunctionname"] = $fdata;
//	mysqlfunction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mysqlfunction";
	$fdata["GoodName"] = "mysqlfunction";
	$fdata["ownerTable"] = "PMT_COMMAND";
	$fdata["Label"] = GetFieldLabel("PMT_COMMAND_Report","mysqlfunction");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			
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

		$fdata["strField"] = "mysqlfunction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mysqlfunction";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_COMMAND_Report["mysqlfunction"] = $fdata;


$tables_data["PMT_COMMAND Report"]=&$tdataPMT_COMMAND_Report;
$field_labels["PMT_COMMAND_Report"] = &$fieldLabelsPMT_COMMAND_Report;
$fieldToolTips["PMT_COMMAND_Report"] = &$fieldToolTipsPMT_COMMAND_Report;
$placeHolders["PMT_COMMAND_Report"] = &$placeHoldersPMT_COMMAND_Report;
$page_titles["PMT_COMMAND_Report"] = &$pageTitlesPMT_COMMAND_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_COMMAND Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_COMMAND Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_COMMAND_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	cmd,  	lang,  	detail,  	mysqlfunctionname,  	mysqlfunction";
$proto0["m_strFrom"] = "FROM PMT_COMMAND";
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
	"m_strName" => "id",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND Report"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "PMT_COMMAND Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cmd",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND Report"
));

$proto8["m_sql"] = "cmd";
$proto8["m_srcTableName"] = "PMT_COMMAND Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lang",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND Report"
));

$proto10["m_sql"] = "lang";
$proto10["m_srcTableName"] = "PMT_COMMAND Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND Report"
));

$proto12["m_sql"] = "detail";
$proto12["m_srcTableName"] = "PMT_COMMAND Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mysqlfunctionname",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND Report"
));

$proto14["m_sql"] = "mysqlfunctionname";
$proto14["m_srcTableName"] = "PMT_COMMAND Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mysqlfunction",
	"m_strTable" => "PMT_COMMAND",
	"m_srcTableName" => "PMT_COMMAND Report"
));

$proto16["m_sql"] = "mysqlfunction";
$proto16["m_srcTableName"] = "PMT_COMMAND Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "PMT_COMMAND";
$proto19["m_srcTableName"] = "PMT_COMMAND Report";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "cmd";
$proto19["m_columns"][] = "lang";
$proto19["m_columns"][] = "detail";
$proto19["m_columns"][] = "mysqlfunctionname";
$proto19["m_columns"][] = "mysqlfunction";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "PMT_COMMAND";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "PMT_COMMAND Report";
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
$proto0["m_srcTableName"]="PMT_COMMAND Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_COMMAND_Report = createSqlQuery_PMT_COMMAND_Report();


	
						;

						

$tdataPMT_COMMAND_Report[".sqlquery"] = $queryData_PMT_COMMAND_Report;

$tableEvents["PMT_COMMAND Report"] = new eventsBase;
$tdataPMT_COMMAND_Report[".hasEvents"] = false;

?>
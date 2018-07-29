<?php
require_once(getabspath("classes/cipherer.php"));




$tdataWEBSOCKET = array();
	$tdataWEBSOCKET[".truncateText"] = true;
	$tdataWEBSOCKET[".NumberOfChars"] = 80;
	$tdataWEBSOCKET[".ShortName"] = "WEBSOCKET";
	$tdataWEBSOCKET[".OwnerID"] = "";
	$tdataWEBSOCKET[".OriginalTable"] = "WEBSOCKET";

//	field labels
$fieldLabelsWEBSOCKET = array();
$fieldToolTipsWEBSOCKET = array();
$pageTitlesWEBSOCKET = array();
$placeHoldersWEBSOCKET = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsWEBSOCKET["Japanese"] = array();
	$fieldToolTipsWEBSOCKET["Japanese"] = array();
	$placeHoldersWEBSOCKET["Japanese"] = array();
	$pageTitlesWEBSOCKET["Japanese"] = array();
	$fieldLabelsWEBSOCKET["Japanese"]["WORD"] = "検索語";
	$fieldToolTipsWEBSOCKET["Japanese"]["WORD"] = "";
	$placeHoldersWEBSOCKET["Japanese"]["WORD"] = "";
	$fieldLabelsWEBSOCKET["Japanese"]["ID"] = "ID";
	$fieldToolTipsWEBSOCKET["Japanese"]["ID"] = "";
	$placeHoldersWEBSOCKET["Japanese"]["ID"] = "";
	$fieldLabelsWEBSOCKET["Japanese"]["URL"] = "URL";
	$fieldToolTipsWEBSOCKET["Japanese"]["URL"] = "";
	$placeHoldersWEBSOCKET["Japanese"]["URL"] = "";
	$fieldLabelsWEBSOCKET["Japanese"]["timestamp"] = "登録時間";
	$fieldToolTipsWEBSOCKET["Japanese"]["timestamp"] = "";
	$placeHoldersWEBSOCKET["Japanese"]["timestamp"] = "";
	if (count($fieldToolTipsWEBSOCKET["Japanese"]))
		$tdataWEBSOCKET[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsWEBSOCKET["English"] = array();
	$fieldToolTipsWEBSOCKET["English"] = array();
	$placeHoldersWEBSOCKET["English"] = array();
	$pageTitlesWEBSOCKET["English"] = array();
	$fieldLabelsWEBSOCKET["English"]["WORD"] = "WORD";
	$fieldToolTipsWEBSOCKET["English"]["WORD"] = "";
	$placeHoldersWEBSOCKET["English"]["WORD"] = "";
	$fieldLabelsWEBSOCKET["English"]["ID"] = "ID";
	$fieldToolTipsWEBSOCKET["English"]["ID"] = "";
	$placeHoldersWEBSOCKET["English"]["ID"] = "";
	$fieldLabelsWEBSOCKET["English"]["URL"] = "URL";
	$fieldToolTipsWEBSOCKET["English"]["URL"] = "";
	$placeHoldersWEBSOCKET["English"]["URL"] = "";
	$fieldLabelsWEBSOCKET["English"]["timestamp"] = "Timestamp";
	$fieldToolTipsWEBSOCKET["English"]["timestamp"] = "";
	$placeHoldersWEBSOCKET["English"]["timestamp"] = "";
	if (count($fieldToolTipsWEBSOCKET["English"]))
		$tdataWEBSOCKET[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsWEBSOCKET[""] = array();
	$fieldToolTipsWEBSOCKET[""] = array();
	$placeHoldersWEBSOCKET[""] = array();
	$pageTitlesWEBSOCKET[""] = array();
	$fieldLabelsWEBSOCKET[""]["WORD"] = "WORD";
	$fieldToolTipsWEBSOCKET[""]["WORD"] = "";
	$placeHoldersWEBSOCKET[""]["WORD"] = "";
	$fieldLabelsWEBSOCKET[""]["ID"] = "ID";
	$fieldToolTipsWEBSOCKET[""]["ID"] = "";
	$placeHoldersWEBSOCKET[""]["ID"] = "";
	$fieldLabelsWEBSOCKET[""]["URL"] = "URL";
	$fieldToolTipsWEBSOCKET[""]["URL"] = "";
	$placeHoldersWEBSOCKET[""]["URL"] = "";
	$fieldLabelsWEBSOCKET[""]["timestamp"] = "Timestamp";
	$fieldToolTipsWEBSOCKET[""]["timestamp"] = "";
	$placeHoldersWEBSOCKET[""]["timestamp"] = "";
	if (count($fieldToolTipsWEBSOCKET[""]))
		$tdataWEBSOCKET[".isUseToolTips"] = true;
}


	$tdataWEBSOCKET[".NCSearch"] = true;



$tdataWEBSOCKET[".shortTableName"] = "WEBSOCKET";
$tdataWEBSOCKET[".nSecOptions"] = 0;
$tdataWEBSOCKET[".recsPerRowPrint"] = 1;
$tdataWEBSOCKET[".mainTableOwnerID"] = "";
$tdataWEBSOCKET[".moveNext"] = 1;
$tdataWEBSOCKET[".entityType"] = 0;

$tdataWEBSOCKET[".strOriginalTableName"] = "WEBSOCKET";

	



$tdataWEBSOCKET[".showAddInPopup"] = false;

$tdataWEBSOCKET[".showEditInPopup"] = false;

$tdataWEBSOCKET[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataWEBSOCKET[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataWEBSOCKET[".fieldsForRegister"] = array();
	
$tdataWEBSOCKET[".listAjax"] = false;

	$tdataWEBSOCKET[".audit"] = false;

	$tdataWEBSOCKET[".locking"] = false;

$tdataWEBSOCKET[".edit"] = true;
$tdataWEBSOCKET[".afterEditAction"] = 1;
$tdataWEBSOCKET[".closePopupAfterEdit"] = 1;
$tdataWEBSOCKET[".afterEditActionDetTable"] = "";

$tdataWEBSOCKET[".add"] = true;
$tdataWEBSOCKET[".afterAddAction"] = 1;
$tdataWEBSOCKET[".closePopupAfterAdd"] = 1;
$tdataWEBSOCKET[".afterAddActionDetTable"] = "";

$tdataWEBSOCKET[".list"] = true;

$tdataWEBSOCKET[".inlineEdit"] = true;


$tdataWEBSOCKET[".reorderRecordsByHeader"] = true;



$tdataWEBSOCKET[".inlineAdd"] = true;
$tdataWEBSOCKET[".copy"] = true;
$tdataWEBSOCKET[".view"] = true;

$tdataWEBSOCKET[".import"] = true;

$tdataWEBSOCKET[".exportTo"] = true;

$tdataWEBSOCKET[".printFriendly"] = true;

$tdataWEBSOCKET[".delete"] = true;

$tdataWEBSOCKET[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataWEBSOCKET[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataWEBSOCKET[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataWEBSOCKET[".searchSaving"] = false;
//

$tdataWEBSOCKET[".showSearchPanel"] = true;
		$tdataWEBSOCKET[".flexibleSearch"] = true;

$tdataWEBSOCKET[".isUseAjaxSuggest"] = true;

$tdataWEBSOCKET[".rowHighlite"] = true;



				

$tdataWEBSOCKET[".ajaxCodeSnippetAdded"] = false;

$tdataWEBSOCKET[".buttonsAdded"] = false;

$tdataWEBSOCKET[".addPageEvents"] = false;

// use timepicker for search panel
$tdataWEBSOCKET[".isUseTimeForSearch"] = false;





$tdataWEBSOCKET[".allSearchFields"] = array();
$tdataWEBSOCKET[".filterFields"] = array();
$tdataWEBSOCKET[".requiredSearchFields"] = array();

$tdataWEBSOCKET[".allSearchFields"][] = "WORD";
	$tdataWEBSOCKET[".allSearchFields"][] = "ID";
	$tdataWEBSOCKET[".allSearchFields"][] = "URL";
	$tdataWEBSOCKET[".allSearchFields"][] = "timestamp";
	

$tdataWEBSOCKET[".googleLikeFields"] = array();
$tdataWEBSOCKET[".googleLikeFields"][] = "WORD";
$tdataWEBSOCKET[".googleLikeFields"][] = "ID";
$tdataWEBSOCKET[".googleLikeFields"][] = "URL";
$tdataWEBSOCKET[".googleLikeFields"][] = "timestamp";


$tdataWEBSOCKET[".advSearchFields"] = array();
$tdataWEBSOCKET[".advSearchFields"][] = "WORD";
$tdataWEBSOCKET[".advSearchFields"][] = "ID";
$tdataWEBSOCKET[".advSearchFields"][] = "URL";
$tdataWEBSOCKET[".advSearchFields"][] = "timestamp";

$tdataWEBSOCKET[".tableType"] = "list";

$tdataWEBSOCKET[".printerPageOrientation"] = 0;
$tdataWEBSOCKET[".nPrinterPageScale"] = 100;

$tdataWEBSOCKET[".nPrinterSplitRecords"] = 40;

$tdataWEBSOCKET[".nPrinterPDFSplitRecords"] = 40;



$tdataWEBSOCKET[".geocodingEnabled"] = false;





$tdataWEBSOCKET[".listGridLayout"] = 3;





// view page pdf
$tdataWEBSOCKET[".isViewPagePDF"] = true;
$tdataWEBSOCKET[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataWEBSOCKET[".isPrinterPagePDF"] = true;
$tdataWEBSOCKET[".nPrinterPagePDFScale"] = 100;


$tdataWEBSOCKET[".pageSize"] = 20;

$tdataWEBSOCKET[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataWEBSOCKET[".strOrderBy"] = $tstrOrderBy;

$tdataWEBSOCKET[".orderindexes"] = array();
$tdataWEBSOCKET[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "ID");

$tdataWEBSOCKET[".sqlHead"] = "SELECT WORD,  ID,  URL,  `timestamp`";
$tdataWEBSOCKET[".sqlFrom"] = "FROM WEBSOCKET";
$tdataWEBSOCKET[".sqlWhereExpr"] = "";
$tdataWEBSOCKET[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataWEBSOCKET[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataWEBSOCKET[".arrGroupsPerPage"] = $arrGPP;

$tdataWEBSOCKET[".highlightSearchResults"] = true;

$tableKeysWEBSOCKET = array();
$tableKeysWEBSOCKET[] = "ID";
$tdataWEBSOCKET[".Keys"] = $tableKeysWEBSOCKET;

$tdataWEBSOCKET[".listFields"] = array();
$tdataWEBSOCKET[".listFields"][] = "ID";
$tdataWEBSOCKET[".listFields"][] = "WORD";
$tdataWEBSOCKET[".listFields"][] = "URL";
$tdataWEBSOCKET[".listFields"][] = "timestamp";

$tdataWEBSOCKET[".hideMobileList"] = array();


$tdataWEBSOCKET[".viewFields"] = array();
$tdataWEBSOCKET[".viewFields"][] = "WORD";
$tdataWEBSOCKET[".viewFields"][] = "ID";
$tdataWEBSOCKET[".viewFields"][] = "URL";
$tdataWEBSOCKET[".viewFields"][] = "timestamp";

$tdataWEBSOCKET[".addFields"] = array();
$tdataWEBSOCKET[".addFields"][] = "WORD";
$tdataWEBSOCKET[".addFields"][] = "URL";
$tdataWEBSOCKET[".addFields"][] = "timestamp";

$tdataWEBSOCKET[".masterListFields"] = array();
$tdataWEBSOCKET[".masterListFields"][] = "WORD";
$tdataWEBSOCKET[".masterListFields"][] = "ID";
$tdataWEBSOCKET[".masterListFields"][] = "URL";
$tdataWEBSOCKET[".masterListFields"][] = "timestamp";

$tdataWEBSOCKET[".inlineAddFields"] = array();
$tdataWEBSOCKET[".inlineAddFields"][] = "WORD";
$tdataWEBSOCKET[".inlineAddFields"][] = "URL";
$tdataWEBSOCKET[".inlineAddFields"][] = "timestamp";

$tdataWEBSOCKET[".editFields"] = array();
$tdataWEBSOCKET[".editFields"][] = "WORD";
$tdataWEBSOCKET[".editFields"][] = "URL";
$tdataWEBSOCKET[".editFields"][] = "timestamp";

$tdataWEBSOCKET[".inlineEditFields"] = array();
$tdataWEBSOCKET[".inlineEditFields"][] = "WORD";
$tdataWEBSOCKET[".inlineEditFields"][] = "URL";
$tdataWEBSOCKET[".inlineEditFields"][] = "timestamp";

$tdataWEBSOCKET[".updateSelectedFields"] = array();
$tdataWEBSOCKET[".updateSelectedFields"][] = "WORD";
$tdataWEBSOCKET[".updateSelectedFields"][] = "URL";
$tdataWEBSOCKET[".updateSelectedFields"][] = "timestamp";


$tdataWEBSOCKET[".exportFields"] = array();
$tdataWEBSOCKET[".exportFields"][] = "WORD";
$tdataWEBSOCKET[".exportFields"][] = "ID";
$tdataWEBSOCKET[".exportFields"][] = "URL";
$tdataWEBSOCKET[".exportFields"][] = "timestamp";

$tdataWEBSOCKET[".importFields"] = array();
$tdataWEBSOCKET[".importFields"][] = "WORD";
$tdataWEBSOCKET[".importFields"][] = "ID";
$tdataWEBSOCKET[".importFields"][] = "URL";
$tdataWEBSOCKET[".importFields"][] = "timestamp";

$tdataWEBSOCKET[".printFields"] = array();
$tdataWEBSOCKET[".printFields"][] = "WORD";
$tdataWEBSOCKET[".printFields"][] = "ID";
$tdataWEBSOCKET[".printFields"][] = "URL";
$tdataWEBSOCKET[".printFields"][] = "timestamp";

//	WORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "WORD";
	$fdata["GoodName"] = "WORD";
	$fdata["ownerTable"] = "WEBSOCKET";
	$fdata["Label"] = GetFieldLabel("WEBSOCKET","WORD");
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

		$fdata["strField"] = "WORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WORD";

	
	
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




	$tdataWEBSOCKET["WORD"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "WEBSOCKET";
	$fdata["Label"] = GetFieldLabel("WEBSOCKET","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdataWEBSOCKET["ID"] = $fdata;
//	URL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "URL";
	$fdata["GoodName"] = "URL";
	$fdata["ownerTable"] = "WEBSOCKET";
	$fdata["Label"] = GetFieldLabel("WEBSOCKET","URL");
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

		$fdata["strField"] = "URL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "URL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 2;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "WORD";

	
	
	
	
	
	
	
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




	$tdataWEBSOCKET["URL"] = $fdata;
//	timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "timestamp";
	$fdata["GoodName"] = "timestamp";
	$fdata["ownerTable"] = "WEBSOCKET";
	$fdata["Label"] = GetFieldLabel("WEBSOCKET","timestamp");
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

		$fdata["strField"] = "timestamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`timestamp`";

	
	
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




	$tdataWEBSOCKET["timestamp"] = $fdata;


$tables_data["WEBSOCKET"]=&$tdataWEBSOCKET;
$field_labels["WEBSOCKET"] = &$fieldLabelsWEBSOCKET;
$fieldToolTips["WEBSOCKET"] = &$fieldToolTipsWEBSOCKET;
$placeHolders["WEBSOCKET"] = &$placeHoldersWEBSOCKET;
$page_titles["WEBSOCKET"] = &$pageTitlesWEBSOCKET;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["WEBSOCKET"] = array();
//	HITWORD
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="HITWORD";
		$detailsParam["dOriginalTable"] = "HITWORD";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "HITWORD";
	$detailsParam["dCaptionTable"] = GetTableCaption("HITWORD");
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
		
	$detailsTablesData["WEBSOCKET"][$dIndex] = $detailsParam;

	
		$detailsTablesData["WEBSOCKET"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["WEBSOCKET"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["WEBSOCKET"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["WEBSOCKET"][$dIndex]["detailKeys"][]="PALENTID";

// tables which are master tables for current table (detail)
$masterTablesData["WEBSOCKET"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_WEBSOCKET()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "WORD,  ID,  URL,  `timestamp`";
$proto0["m_strFrom"] = "FROM WEBSOCKET";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ID DESC";
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
	"m_strName" => "WORD",
	"m_strTable" => "WEBSOCKET",
	"m_srcTableName" => "WEBSOCKET"
));

$proto6["m_sql"] = "WORD";
$proto6["m_srcTableName"] = "WEBSOCKET";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "WEBSOCKET",
	"m_srcTableName" => "WEBSOCKET"
));

$proto8["m_sql"] = "ID";
$proto8["m_srcTableName"] = "WEBSOCKET";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "URL",
	"m_strTable" => "WEBSOCKET",
	"m_srcTableName" => "WEBSOCKET"
));

$proto10["m_sql"] = "URL";
$proto10["m_srcTableName"] = "WEBSOCKET";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "timestamp",
	"m_strTable" => "WEBSOCKET",
	"m_srcTableName" => "WEBSOCKET"
));

$proto12["m_sql"] = "`timestamp`";
$proto12["m_srcTableName"] = "WEBSOCKET";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "WEBSOCKET";
$proto15["m_srcTableName"] = "WEBSOCKET";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "WORD";
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "URL";
$proto15["m_columns"][] = "timestamp";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "WEBSOCKET";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "WEBSOCKET";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "WEBSOCKET",
	"m_srcTableName" => "WEBSOCKET"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="WEBSOCKET";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_WEBSOCKET = createSqlQuery_WEBSOCKET();


	
						;

				

$tdataWEBSOCKET[".sqlquery"] = $queryData_WEBSOCKET;

$tableEvents["WEBSOCKET"] = new eventsBase;
$tdataWEBSOCKET[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataHITWORD = array();
	$tdataHITWORD[".truncateText"] = true;
	$tdataHITWORD[".NumberOfChars"] = 80;
	$tdataHITWORD[".ShortName"] = "HITWORD";
	$tdataHITWORD[".OwnerID"] = "";
	$tdataHITWORD[".OriginalTable"] = "HITWORD";

//	field labels
$fieldLabelsHITWORD = array();
$fieldToolTipsHITWORD = array();
$pageTitlesHITWORD = array();
$placeHoldersHITWORD = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsHITWORD["Japanese"] = array();
	$fieldToolTipsHITWORD["Japanese"] = array();
	$placeHoldersHITWORD["Japanese"] = array();
	$pageTitlesHITWORD["Japanese"] = array();
	$fieldLabelsHITWORD["Japanese"]["WORD"] = "WORD";
	$fieldToolTipsHITWORD["Japanese"]["WORD"] = "";
	$placeHoldersHITWORD["Japanese"]["WORD"] = "";
	$fieldLabelsHITWORD["Japanese"]["ID"] = "ID";
	$fieldToolTipsHITWORD["Japanese"]["ID"] = "";
	$placeHoldersHITWORD["Japanese"]["ID"] = "";
	$fieldLabelsHITWORD["Japanese"]["URL"] = "URL";
	$fieldToolTipsHITWORD["Japanese"]["URL"] = "";
	$placeHoldersHITWORD["Japanese"]["URL"] = "";
	$fieldLabelsHITWORD["Japanese"]["timestamp"] = "Timestamp";
	$fieldToolTipsHITWORD["Japanese"]["timestamp"] = "";
	$placeHoldersHITWORD["Japanese"]["timestamp"] = "";
	$fieldLabelsHITWORD["Japanese"]["PALENTID"] = "PALENTID";
	$fieldToolTipsHITWORD["Japanese"]["PALENTID"] = "";
	$placeHoldersHITWORD["Japanese"]["PALENTID"] = "";
	if (count($fieldToolTipsHITWORD["Japanese"]))
		$tdataHITWORD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsHITWORD["English"] = array();
	$fieldToolTipsHITWORD["English"] = array();
	$placeHoldersHITWORD["English"] = array();
	$pageTitlesHITWORD["English"] = array();
	$fieldLabelsHITWORD["English"]["WORD"] = "WORD";
	$fieldToolTipsHITWORD["English"]["WORD"] = "";
	$placeHoldersHITWORD["English"]["WORD"] = "";
	$fieldLabelsHITWORD["English"]["ID"] = "ID";
	$fieldToolTipsHITWORD["English"]["ID"] = "";
	$placeHoldersHITWORD["English"]["ID"] = "";
	$fieldLabelsHITWORD["English"]["URL"] = "URL";
	$fieldToolTipsHITWORD["English"]["URL"] = "";
	$placeHoldersHITWORD["English"]["URL"] = "";
	$fieldLabelsHITWORD["English"]["timestamp"] = "Timestamp";
	$fieldToolTipsHITWORD["English"]["timestamp"] = "";
	$placeHoldersHITWORD["English"]["timestamp"] = "";
	$fieldLabelsHITWORD["English"]["PALENTID"] = "PALENTID";
	$fieldToolTipsHITWORD["English"]["PALENTID"] = "";
	$placeHoldersHITWORD["English"]["PALENTID"] = "";
	if (count($fieldToolTipsHITWORD["English"]))
		$tdataHITWORD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsHITWORD[""] = array();
	$fieldToolTipsHITWORD[""] = array();
	$placeHoldersHITWORD[""] = array();
	$pageTitlesHITWORD[""] = array();
	$fieldLabelsHITWORD[""]["WORD"] = "WORD";
	$fieldToolTipsHITWORD[""]["WORD"] = "";
	$placeHoldersHITWORD[""]["WORD"] = "";
	$fieldLabelsHITWORD[""]["ID"] = "ID";
	$fieldToolTipsHITWORD[""]["ID"] = "";
	$placeHoldersHITWORD[""]["ID"] = "";
	$fieldLabelsHITWORD[""]["URL"] = "URL";
	$fieldToolTipsHITWORD[""]["URL"] = "";
	$placeHoldersHITWORD[""]["URL"] = "";
	$fieldLabelsHITWORD[""]["timestamp"] = "Timestamp";
	$fieldToolTipsHITWORD[""]["timestamp"] = "";
	$placeHoldersHITWORD[""]["timestamp"] = "";
	$fieldLabelsHITWORD[""]["PALENTID"] = "PALENTID";
	$fieldToolTipsHITWORD[""]["PALENTID"] = "";
	$placeHoldersHITWORD[""]["PALENTID"] = "";
	if (count($fieldToolTipsHITWORD[""]))
		$tdataHITWORD[".isUseToolTips"] = true;
}


	$tdataHITWORD[".NCSearch"] = true;



$tdataHITWORD[".shortTableName"] = "HITWORD";
$tdataHITWORD[".nSecOptions"] = 0;
$tdataHITWORD[".recsPerRowPrint"] = 1;
$tdataHITWORD[".mainTableOwnerID"] = "";
$tdataHITWORD[".moveNext"] = 1;
$tdataHITWORD[".entityType"] = 0;

$tdataHITWORD[".strOriginalTableName"] = "HITWORD";

	



$tdataHITWORD[".showAddInPopup"] = false;

$tdataHITWORD[".showEditInPopup"] = false;

$tdataHITWORD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataHITWORD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataHITWORD[".fieldsForRegister"] = array();
	
$tdataHITWORD[".listAjax"] = false;

	$tdataHITWORD[".audit"] = false;

	$tdataHITWORD[".locking"] = false;

$tdataHITWORD[".edit"] = true;
$tdataHITWORD[".afterEditAction"] = 1;
$tdataHITWORD[".closePopupAfterEdit"] = 1;
$tdataHITWORD[".afterEditActionDetTable"] = "";

$tdataHITWORD[".add"] = true;
$tdataHITWORD[".afterAddAction"] = 1;
$tdataHITWORD[".closePopupAfterAdd"] = 1;
$tdataHITWORD[".afterAddActionDetTable"] = "";

$tdataHITWORD[".list"] = true;



$tdataHITWORD[".reorderRecordsByHeader"] = true;



$tdataHITWORD[".inlineAdd"] = true;
$tdataHITWORD[".view"] = true;

$tdataHITWORD[".import"] = true;

$tdataHITWORD[".exportTo"] = true;

$tdataHITWORD[".printFriendly"] = true;

$tdataHITWORD[".delete"] = true;

$tdataHITWORD[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataHITWORD[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataHITWORD[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataHITWORD[".searchSaving"] = false;
//

$tdataHITWORD[".showSearchPanel"] = true;
		$tdataHITWORD[".flexibleSearch"] = true;

$tdataHITWORD[".isUseAjaxSuggest"] = true;

$tdataHITWORD[".rowHighlite"] = true;



																

$tdataHITWORD[".ajaxCodeSnippetAdded"] = false;

$tdataHITWORD[".buttonsAdded"] = false;

$tdataHITWORD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHITWORD[".isUseTimeForSearch"] = false;



$tdataHITWORD[".badgeColor"] = "2f4f4f";


$tdataHITWORD[".allSearchFields"] = array();
$tdataHITWORD[".filterFields"] = array();
$tdataHITWORD[".requiredSearchFields"] = array();

$tdataHITWORD[".allSearchFields"][] = "WORD";
	$tdataHITWORD[".allSearchFields"][] = "ID";
	$tdataHITWORD[".allSearchFields"][] = "URL";
	$tdataHITWORD[".allSearchFields"][] = "timestamp";
	$tdataHITWORD[".allSearchFields"][] = "PALENTID";
	

$tdataHITWORD[".googleLikeFields"] = array();
$tdataHITWORD[".googleLikeFields"][] = "WORD";
$tdataHITWORD[".googleLikeFields"][] = "ID";
$tdataHITWORD[".googleLikeFields"][] = "URL";
$tdataHITWORD[".googleLikeFields"][] = "timestamp";
$tdataHITWORD[".googleLikeFields"][] = "PALENTID";


$tdataHITWORD[".advSearchFields"] = array();
$tdataHITWORD[".advSearchFields"][] = "WORD";
$tdataHITWORD[".advSearchFields"][] = "ID";
$tdataHITWORD[".advSearchFields"][] = "URL";
$tdataHITWORD[".advSearchFields"][] = "timestamp";
$tdataHITWORD[".advSearchFields"][] = "PALENTID";

$tdataHITWORD[".tableType"] = "list";

$tdataHITWORD[".printerPageOrientation"] = 0;
$tdataHITWORD[".nPrinterPageScale"] = 100;

$tdataHITWORD[".nPrinterSplitRecords"] = 40;

$tdataHITWORD[".nPrinterPDFSplitRecords"] = 40;



$tdataHITWORD[".geocodingEnabled"] = false;





$tdataHITWORD[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataHITWORD[".pageSize"] = 20;

$tdataHITWORD[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHITWORD[".strOrderBy"] = $tstrOrderBy;

$tdataHITWORD[".orderindexes"] = array();

$tdataHITWORD[".sqlHead"] = "SELECT WORD,  	ID,  	URL,  	`timestamp`,  	PALENTID";
$tdataHITWORD[".sqlFrom"] = "FROM HITWORD";
$tdataHITWORD[".sqlWhereExpr"] = "";
$tdataHITWORD[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHITWORD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHITWORD[".arrGroupsPerPage"] = $arrGPP;

$tdataHITWORD[".highlightSearchResults"] = true;

$tableKeysHITWORD = array();
$tableKeysHITWORD[] = "ID";
$tdataHITWORD[".Keys"] = $tableKeysHITWORD;

$tdataHITWORD[".listFields"] = array();
$tdataHITWORD[".listFields"][] = "WORD";
$tdataHITWORD[".listFields"][] = "ID";
$tdataHITWORD[".listFields"][] = "URL";
$tdataHITWORD[".listFields"][] = "timestamp";
$tdataHITWORD[".listFields"][] = "PALENTID";

$tdataHITWORD[".hideMobileList"] = array();


$tdataHITWORD[".viewFields"] = array();
$tdataHITWORD[".viewFields"][] = "WORD";
$tdataHITWORD[".viewFields"][] = "ID";
$tdataHITWORD[".viewFields"][] = "URL";
$tdataHITWORD[".viewFields"][] = "timestamp";
$tdataHITWORD[".viewFields"][] = "PALENTID";

$tdataHITWORD[".addFields"] = array();
$tdataHITWORD[".addFields"][] = "WORD";
$tdataHITWORD[".addFields"][] = "URL";
$tdataHITWORD[".addFields"][] = "timestamp";
$tdataHITWORD[".addFields"][] = "PALENTID";

$tdataHITWORD[".masterListFields"] = array();
$tdataHITWORD[".masterListFields"][] = "WORD";
$tdataHITWORD[".masterListFields"][] = "ID";
$tdataHITWORD[".masterListFields"][] = "URL";
$tdataHITWORD[".masterListFields"][] = "timestamp";
$tdataHITWORD[".masterListFields"][] = "PALENTID";

$tdataHITWORD[".inlineAddFields"] = array();
$tdataHITWORD[".inlineAddFields"][] = "WORD";
$tdataHITWORD[".inlineAddFields"][] = "URL";
$tdataHITWORD[".inlineAddFields"][] = "timestamp";
$tdataHITWORD[".inlineAddFields"][] = "PALENTID";

$tdataHITWORD[".editFields"] = array();
$tdataHITWORD[".editFields"][] = "WORD";
$tdataHITWORD[".editFields"][] = "URL";
$tdataHITWORD[".editFields"][] = "timestamp";
$tdataHITWORD[".editFields"][] = "PALENTID";

$tdataHITWORD[".inlineEditFields"] = array();
$tdataHITWORD[".inlineEditFields"][] = "WORD";
$tdataHITWORD[".inlineEditFields"][] = "URL";
$tdataHITWORD[".inlineEditFields"][] = "timestamp";
$tdataHITWORD[".inlineEditFields"][] = "PALENTID";

$tdataHITWORD[".updateSelectedFields"] = array();
$tdataHITWORD[".updateSelectedFields"][] = "WORD";
$tdataHITWORD[".updateSelectedFields"][] = "URL";
$tdataHITWORD[".updateSelectedFields"][] = "timestamp";
$tdataHITWORD[".updateSelectedFields"][] = "PALENTID";


$tdataHITWORD[".exportFields"] = array();
$tdataHITWORD[".exportFields"][] = "WORD";
$tdataHITWORD[".exportFields"][] = "ID";
$tdataHITWORD[".exportFields"][] = "URL";
$tdataHITWORD[".exportFields"][] = "timestamp";
$tdataHITWORD[".exportFields"][] = "PALENTID";

$tdataHITWORD[".importFields"] = array();
$tdataHITWORD[".importFields"][] = "WORD";
$tdataHITWORD[".importFields"][] = "ID";
$tdataHITWORD[".importFields"][] = "URL";
$tdataHITWORD[".importFields"][] = "timestamp";
$tdataHITWORD[".importFields"][] = "PALENTID";

$tdataHITWORD[".printFields"] = array();
$tdataHITWORD[".printFields"][] = "WORD";
$tdataHITWORD[".printFields"][] = "ID";
$tdataHITWORD[".printFields"][] = "URL";
$tdataHITWORD[".printFields"][] = "timestamp";
$tdataHITWORD[".printFields"][] = "PALENTID";

//	WORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "WORD";
	$fdata["GoodName"] = "WORD";
	$fdata["ownerTable"] = "HITWORD";
	$fdata["Label"] = GetFieldLabel("HITWORD","WORD");
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




	$tdataHITWORD["WORD"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "HITWORD";
	$fdata["Label"] = GetFieldLabel("HITWORD","ID");
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




	$tdataHITWORD["ID"] = $fdata;
//	URL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "URL";
	$fdata["GoodName"] = "URL";
	$fdata["ownerTable"] = "HITWORD";
	$fdata["Label"] = GetFieldLabel("HITWORD","URL");
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




	$tdataHITWORD["URL"] = $fdata;
//	timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "timestamp";
	$fdata["GoodName"] = "timestamp";
	$fdata["ownerTable"] = "HITWORD";
	$fdata["Label"] = GetFieldLabel("HITWORD","timestamp");
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




	$tdataHITWORD["timestamp"] = $fdata;
//	PALENTID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PALENTID";
	$fdata["GoodName"] = "PALENTID";
	$fdata["ownerTable"] = "HITWORD";
	$fdata["Label"] = GetFieldLabel("HITWORD","PALENTID");
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

		$fdata["strField"] = "PALENTID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PALENTID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataHITWORD["PALENTID"] = $fdata;


$tables_data["HITWORD"]=&$tdataHITWORD;
$field_labels["HITWORD"] = &$fieldLabelsHITWORD;
$fieldToolTips["HITWORD"] = &$fieldToolTipsHITWORD;
$placeHolders["HITWORD"] = &$placeHoldersHITWORD;
$page_titles["HITWORD"] = &$pageTitlesHITWORD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["HITWORD"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["HITWORD"] = array();


	
				$strOriginalDetailsTable="WEBSOCKET";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="WEBSOCKET";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "WEBSOCKET";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["HITWORD"][0] = $masterParams;
				$masterTablesData["HITWORD"][0]["masterKeys"] = array();
	$masterTablesData["HITWORD"][0]["masterKeys"][]="ID";
				$masterTablesData["HITWORD"][0]["detailKeys"] = array();
	$masterTablesData["HITWORD"][0]["detailKeys"][]="PALENTID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_HITWORD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "WORD,  	ID,  	URL,  	`timestamp`,  	PALENTID";
$proto0["m_strFrom"] = "FROM HITWORD";
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
	"m_strName" => "WORD",
	"m_strTable" => "HITWORD",
	"m_srcTableName" => "HITWORD"
));

$proto6["m_sql"] = "WORD";
$proto6["m_srcTableName"] = "HITWORD";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "HITWORD",
	"m_srcTableName" => "HITWORD"
));

$proto8["m_sql"] = "ID";
$proto8["m_srcTableName"] = "HITWORD";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "URL",
	"m_strTable" => "HITWORD",
	"m_srcTableName" => "HITWORD"
));

$proto10["m_sql"] = "URL";
$proto10["m_srcTableName"] = "HITWORD";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "timestamp",
	"m_strTable" => "HITWORD",
	"m_srcTableName" => "HITWORD"
));

$proto12["m_sql"] = "`timestamp`";
$proto12["m_srcTableName"] = "HITWORD";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PALENTID",
	"m_strTable" => "HITWORD",
	"m_srcTableName" => "HITWORD"
));

$proto14["m_sql"] = "PALENTID";
$proto14["m_srcTableName"] = "HITWORD";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "HITWORD";
$proto17["m_srcTableName"] = "HITWORD";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "WORD";
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "URL";
$proto17["m_columns"][] = "timestamp";
$proto17["m_columns"][] = "PALENTID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "HITWORD";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "HITWORD";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="HITWORD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_HITWORD = createSqlQuery_HITWORD();


	
						;

					

$tdataHITWORD[".sqlquery"] = $queryData_HITWORD;

$tableEvents["HITWORD"] = new eventsBase;
$tdataHITWORD[".hasEvents"] = false;

?>
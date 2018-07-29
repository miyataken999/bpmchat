<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_TIMEOUT_ACTION_EXECUTED = array();
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".truncateText"] = true;
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".NumberOfChars"] = 20;
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".ShortName"] = "APP_TIMEOUT_ACTION_EXECUTED";
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".OwnerID"] = "";
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".OriginalTable"] = "APP_TIMEOUT_ACTION_EXECUTED";

//	field labels
$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED = array();
$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED = array();
$pageTitlesAPP_TIMEOUT_ACTION_EXECUTED = array();
$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"] = array();
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"] = array();
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["Japanese"] = array();
	$pageTitlesAPP_TIMEOUT_ACTION_EXECUTED["Japanese"] = array();
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["EXECUTION_DATE"] = "実行日";
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["EXECUTION_DATE"] = "";
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]["EXECUTION_DATE"] = "";
	if (count($fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["Japanese"]))
		$tdataAPP_TIMEOUT_ACTION_EXECUTED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["English"] = array();
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["English"] = array();
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["English"] = array();
	$pageTitlesAPP_TIMEOUT_ACTION_EXECUTED["English"] = array();
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["English"]["APP_UID"] = "";
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["English"]["APP_UID"] = "";
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED["English"]["EXECUTION_DATE"] = "実行日";
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["English"]["EXECUTION_DATE"] = "";
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED["English"]["EXECUTION_DATE"] = "";
	if (count($fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED["English"]))
		$tdataAPP_TIMEOUT_ACTION_EXECUTED[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED[""] = array();
	$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED[""] = array();
	$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED[""] = array();
	$pageTitlesAPP_TIMEOUT_ACTION_EXECUTED[""] = array();
	if (count($fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED[""]))
		$tdataAPP_TIMEOUT_ACTION_EXECUTED[".isUseToolTips"] = true;
}


	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".NCSearch"] = true;



$tdataAPP_TIMEOUT_ACTION_EXECUTED[".shortTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".nSecOptions"] = 0;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".recsPerRowPrint"] = 1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".mainTableOwnerID"] = "";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".moveNext"] = 0;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".entityType"] = 0;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".strOriginalTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";

	



$tdataAPP_TIMEOUT_ACTION_EXECUTED[".showAddInPopup"] = false;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".showEditInPopup"] = false;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".fieldsForRegister"] = array();
	
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".listAjax"] = false;

	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".audit"] = true;

	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".locking"] = false;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".edit"] = true;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".afterEditAction"] = 1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".closePopupAfterEdit"] = 1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".afterEditActionDetTable"] = "";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".add"] = true;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".afterAddAction"] = 1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".closePopupAfterAdd"] = 1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".afterAddActionDetTable"] = "";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".list"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineEdit"] = true;


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".reorderRecordsByHeader"] = true;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".createSortByDropdown"] = true;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".strSortControlSettingsJSON"] = "";



$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineAdd"] = true;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".view"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".import"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".exportTo"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".printFriendly"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".delete"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".searchSaving"] = false;
//

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".showSearchPanel"] = true;
		$tdataAPP_TIMEOUT_ACTION_EXECUTED[".flexibleSearch"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".isUseAjaxSuggest"] = true;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".rowHighlite"] = true;



				

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".buttonsAdded"] = false;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".isUseTimeForSearch"] = false;





$tdataAPP_TIMEOUT_ACTION_EXECUTED[".allSearchFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".filterFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".requiredSearchFields"] = array();

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".allSearchFields"][] = "APP_UID";
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_TIMEOUT_ACTION_EXECUTED[".allSearchFields"][] = "EXECUTION_DATE";
	

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".googleLikeFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".googleLikeFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".googleLikeFields"][] = "EXECUTION_DATE";


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".advSearchFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".advSearchFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".advSearchFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".tableType"] = "list";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".printerPageOrientation"] = 0;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".nPrinterPageScale"] = 100;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".nPrinterSplitRecords"] = 40;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_TIMEOUT_ACTION_EXECUTED[".geocodingEnabled"] = false;





$tdataAPP_TIMEOUT_ACTION_EXECUTED[".listGridLayout"] = 3;


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".pageSize"] = 20;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".orderindexes"] = array();

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	EXECUTION_DATE";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".sqlFrom"] = "FROM APP_TIMEOUT_ACTION_EXECUTED";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".sqlWhereExpr"] = "";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".highlightSearchResults"] = true;

$tableKeysAPP_TIMEOUT_ACTION_EXECUTED = array();
$tableKeysAPP_TIMEOUT_ACTION_EXECUTED[] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".Keys"] = $tableKeysAPP_TIMEOUT_ACTION_EXECUTED;

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".listFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".listFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".listFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".listFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".hideMobileList"] = array();


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".viewFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".viewFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".viewFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".viewFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".addFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".addFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".addFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".addFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".masterListFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".masterListFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".masterListFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineAddFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineAddFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineAddFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".editFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".editFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".editFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".editFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineEditFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineEditFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".inlineEditFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".updateSelectedFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".updateSelectedFields"][] = "EXECUTION_DATE";


$tdataAPP_TIMEOUT_ACTION_EXECUTED[".exportFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".exportFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".exportFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".exportFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".importFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".importFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".importFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".importFields"][] = "EXECUTION_DATE";

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".printFields"] = array();
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".printFields"][] = "APP_UID";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".printFields"][] = "DEL_INDEX";
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".printFields"][] = "EXECUTION_DATE";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_TIMEOUT_ACTION_EXECUTED";
	$fdata["Label"] = GetFieldLabel("APP_TIMEOUT_ACTION_EXECUTED","APP_UID");
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

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
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




	$tdataAPP_TIMEOUT_ACTION_EXECUTED["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_TIMEOUT_ACTION_EXECUTED";
	$fdata["Label"] = GetFieldLabel("APP_TIMEOUT_ACTION_EXECUTED","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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




	$tdataAPP_TIMEOUT_ACTION_EXECUTED["DEL_INDEX"] = $fdata;
//	EXECUTION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EXECUTION_DATE";
	$fdata["GoodName"] = "EXECUTION_DATE";
	$fdata["ownerTable"] = "APP_TIMEOUT_ACTION_EXECUTED";
	$fdata["Label"] = GetFieldLabel("APP_TIMEOUT_ACTION_EXECUTED","EXECUTION_DATE");
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

		$fdata["strField"] = "EXECUTION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXECUTION_DATE";

	
	
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




	$tdataAPP_TIMEOUT_ACTION_EXECUTED["EXECUTION_DATE"] = $fdata;


$tables_data["APP_TIMEOUT_ACTION_EXECUTED"]=&$tdataAPP_TIMEOUT_ACTION_EXECUTED;
$field_labels["APP_TIMEOUT_ACTION_EXECUTED"] = &$fieldLabelsAPP_TIMEOUT_ACTION_EXECUTED;
$fieldToolTips["APP_TIMEOUT_ACTION_EXECUTED"] = &$fieldToolTipsAPP_TIMEOUT_ACTION_EXECUTED;
$placeHolders["APP_TIMEOUT_ACTION_EXECUTED"] = &$placeHoldersAPP_TIMEOUT_ACTION_EXECUTED;
$page_titles["APP_TIMEOUT_ACTION_EXECUTED"] = &$pageTitlesAPP_TIMEOUT_ACTION_EXECUTED;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_TIMEOUT_ACTION_EXECUTED"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_TIMEOUT_ACTION_EXECUTED"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_TIMEOUT_ACTION_EXECUTED()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	EXECUTION_DATE";
$proto0["m_strFrom"] = "FROM APP_TIMEOUT_ACTION_EXECUTED";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "APP_TIMEOUT_ACTION_EXECUTED",
	"m_srcTableName" => "APP_TIMEOUT_ACTION_EXECUTED"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_TIMEOUT_ACTION_EXECUTED",
	"m_srcTableName" => "APP_TIMEOUT_ACTION_EXECUTED"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EXECUTION_DATE",
	"m_strTable" => "APP_TIMEOUT_ACTION_EXECUTED",
	"m_srcTableName" => "APP_TIMEOUT_ACTION_EXECUTED"
));

$proto10["m_sql"] = "EXECUTION_DATE";
$proto10["m_srcTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto13["m_srcTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "APP_UID";
$proto13["m_columns"][] = "DEL_INDEX";
$proto13["m_columns"][] = "EXECUTION_DATE";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "APP_TIMEOUT_ACTION_EXECUTED";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_TIMEOUT_ACTION_EXECUTED";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_TIMEOUT_ACTION_EXECUTED = createSqlQuery_APP_TIMEOUT_ACTION_EXECUTED();


	
						;

			

$tdataAPP_TIMEOUT_ACTION_EXECUTED[".sqlquery"] = $queryData_APP_TIMEOUT_ACTION_EXECUTED;

$tableEvents["APP_TIMEOUT_ACTION_EXECUTED"] = new eventsBase;
$tdataAPP_TIMEOUT_ACTION_EXECUTED[".hasEvents"] = false;

?>
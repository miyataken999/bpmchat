<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLEXICO = array();
	$tdataLEXICO[".truncateText"] = true;
	$tdataLEXICO[".NumberOfChars"] = 20;
	$tdataLEXICO[".ShortName"] = "LEXICO";
	$tdataLEXICO[".OwnerID"] = "";
	$tdataLEXICO[".OriginalTable"] = "LEXICO";

//	field labels
$fieldLabelsLEXICO = array();
$fieldToolTipsLEXICO = array();
$pageTitlesLEXICO = array();
$placeHoldersLEXICO = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsLEXICO["Japanese"] = array();
	$fieldToolTipsLEXICO["Japanese"] = array();
	$placeHoldersLEXICO["Japanese"] = array();
	$pageTitlesLEXICO["Japanese"] = array();
	$fieldLabelsLEXICO["Japanese"]["LEX_TOPIC"] = "lexのトピック";
	$fieldToolTipsLEXICO["Japanese"]["LEX_TOPIC"] = "";
	$placeHoldersLEXICO["Japanese"]["LEX_TOPIC"] = "";
	$fieldLabelsLEXICO["Japanese"]["LEX_KEY"] = "LEXキー";
	$fieldToolTipsLEXICO["Japanese"]["LEX_KEY"] = "";
	$placeHoldersLEXICO["Japanese"]["LEX_KEY"] = "";
	$fieldLabelsLEXICO["Japanese"]["LEX_VALUE"] = "LEX値";
	$fieldToolTipsLEXICO["Japanese"]["LEX_VALUE"] = "";
	$placeHoldersLEXICO["Japanese"]["LEX_VALUE"] = "";
	$fieldLabelsLEXICO["Japanese"]["LEX_CAPTION"] = "lexのキャプション";
	$fieldToolTipsLEXICO["Japanese"]["LEX_CAPTION"] = "";
	$placeHoldersLEXICO["Japanese"]["LEX_CAPTION"] = "";
	if (count($fieldToolTipsLEXICO["Japanese"]))
		$tdataLEXICO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLEXICO["English"] = array();
	$fieldToolTipsLEXICO["English"] = array();
	$placeHoldersLEXICO["English"] = array();
	$pageTitlesLEXICO["English"] = array();
	$fieldLabelsLEXICO["English"]["LEX_TOPIC"] = "lexのトピック";
	$fieldToolTipsLEXICO["English"]["LEX_TOPIC"] = "";
	$placeHoldersLEXICO["English"]["LEX_TOPIC"] = "";
	$fieldLabelsLEXICO["English"]["LEX_KEY"] = "LEXキー";
	$fieldToolTipsLEXICO["English"]["LEX_KEY"] = "";
	$placeHoldersLEXICO["English"]["LEX_KEY"] = "";
	$fieldLabelsLEXICO["English"]["LEX_VALUE"] = "LEX値";
	$fieldToolTipsLEXICO["English"]["LEX_VALUE"] = "";
	$placeHoldersLEXICO["English"]["LEX_VALUE"] = "";
	$fieldLabelsLEXICO["English"]["LEX_CAPTION"] = "lexのキャプション";
	$fieldToolTipsLEXICO["English"]["LEX_CAPTION"] = "";
	$placeHoldersLEXICO["English"]["LEX_CAPTION"] = "";
	if (count($fieldToolTipsLEXICO["English"]))
		$tdataLEXICO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLEXICO[""] = array();
	$fieldToolTipsLEXICO[""] = array();
	$placeHoldersLEXICO[""] = array();
	$pageTitlesLEXICO[""] = array();
	if (count($fieldToolTipsLEXICO[""]))
		$tdataLEXICO[".isUseToolTips"] = true;
}


	$tdataLEXICO[".NCSearch"] = true;



$tdataLEXICO[".shortTableName"] = "LEXICO";
$tdataLEXICO[".nSecOptions"] = 0;
$tdataLEXICO[".recsPerRowPrint"] = 1;
$tdataLEXICO[".mainTableOwnerID"] = "";
$tdataLEXICO[".moveNext"] = 0;
$tdataLEXICO[".entityType"] = 0;

$tdataLEXICO[".strOriginalTableName"] = "LEXICO";

	



$tdataLEXICO[".showAddInPopup"] = false;

$tdataLEXICO[".showEditInPopup"] = false;

$tdataLEXICO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLEXICO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLEXICO[".fieldsForRegister"] = array();
	
$tdataLEXICO[".listAjax"] = false;

	$tdataLEXICO[".audit"] = true;

	$tdataLEXICO[".locking"] = false;

$tdataLEXICO[".edit"] = true;
$tdataLEXICO[".afterEditAction"] = 1;
$tdataLEXICO[".closePopupAfterEdit"] = 1;
$tdataLEXICO[".afterEditActionDetTable"] = "";

$tdataLEXICO[".add"] = true;
$tdataLEXICO[".afterAddAction"] = 1;
$tdataLEXICO[".closePopupAfterAdd"] = 1;
$tdataLEXICO[".afterAddActionDetTable"] = "";

$tdataLEXICO[".list"] = true;

$tdataLEXICO[".inlineEdit"] = true;


$tdataLEXICO[".reorderRecordsByHeader"] = true;
$tdataLEXICO[".createSortByDropdown"] = true;
$tdataLEXICO[".strSortControlSettingsJSON"] = "";



$tdataLEXICO[".inlineAdd"] = true;
$tdataLEXICO[".view"] = true;

$tdataLEXICO[".import"] = true;

$tdataLEXICO[".exportTo"] = true;

$tdataLEXICO[".printFriendly"] = true;

$tdataLEXICO[".delete"] = true;

$tdataLEXICO[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataLEXICO[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataLEXICO[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataLEXICO[".searchSaving"] = false;
//

$tdataLEXICO[".showSearchPanel"] = true;
		$tdataLEXICO[".flexibleSearch"] = true;

$tdataLEXICO[".isUseAjaxSuggest"] = true;

$tdataLEXICO[".rowHighlite"] = true;



				

$tdataLEXICO[".ajaxCodeSnippetAdded"] = false;

$tdataLEXICO[".buttonsAdded"] = false;

$tdataLEXICO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLEXICO[".isUseTimeForSearch"] = false;





$tdataLEXICO[".allSearchFields"] = array();
$tdataLEXICO[".filterFields"] = array();
$tdataLEXICO[".requiredSearchFields"] = array();

$tdataLEXICO[".allSearchFields"][] = "LEX_TOPIC";
	$tdataLEXICO[".allSearchFields"][] = "LEX_KEY";
	$tdataLEXICO[".allSearchFields"][] = "LEX_VALUE";
	$tdataLEXICO[".allSearchFields"][] = "LEX_CAPTION";
	

$tdataLEXICO[".googleLikeFields"] = array();
$tdataLEXICO[".googleLikeFields"][] = "LEX_TOPIC";
$tdataLEXICO[".googleLikeFields"][] = "LEX_KEY";
$tdataLEXICO[".googleLikeFields"][] = "LEX_VALUE";
$tdataLEXICO[".googleLikeFields"][] = "LEX_CAPTION";


$tdataLEXICO[".advSearchFields"] = array();
$tdataLEXICO[".advSearchFields"][] = "LEX_TOPIC";
$tdataLEXICO[".advSearchFields"][] = "LEX_KEY";
$tdataLEXICO[".advSearchFields"][] = "LEX_VALUE";
$tdataLEXICO[".advSearchFields"][] = "LEX_CAPTION";

$tdataLEXICO[".tableType"] = "list";

$tdataLEXICO[".printerPageOrientation"] = 0;
$tdataLEXICO[".nPrinterPageScale"] = 100;

$tdataLEXICO[".nPrinterSplitRecords"] = 40;

$tdataLEXICO[".nPrinterPDFSplitRecords"] = 40;



$tdataLEXICO[".geocodingEnabled"] = false;





$tdataLEXICO[".listGridLayout"] = 3;


$tdataLEXICO[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataLEXICO[".pageSize"] = 20;

$tdataLEXICO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLEXICO[".strOrderBy"] = $tstrOrderBy;

$tdataLEXICO[".orderindexes"] = array();

$tdataLEXICO[".sqlHead"] = "SELECT LEX_TOPIC,  	LEX_KEY,  	LEX_VALUE,  	LEX_CAPTION";
$tdataLEXICO[".sqlFrom"] = "FROM LEXICO";
$tdataLEXICO[".sqlWhereExpr"] = "";
$tdataLEXICO[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLEXICO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLEXICO[".arrGroupsPerPage"] = $arrGPP;

$tdataLEXICO[".highlightSearchResults"] = true;

$tableKeysLEXICO = array();
$tableKeysLEXICO[] = "LEX_TOPIC";
$tableKeysLEXICO[] = "LEX_KEY";
$tdataLEXICO[".Keys"] = $tableKeysLEXICO;

$tdataLEXICO[".listFields"] = array();
$tdataLEXICO[".listFields"][] = "LEX_TOPIC";
$tdataLEXICO[".listFields"][] = "LEX_KEY";
$tdataLEXICO[".listFields"][] = "LEX_VALUE";
$tdataLEXICO[".listFields"][] = "LEX_CAPTION";

$tdataLEXICO[".hideMobileList"] = array();


$tdataLEXICO[".viewFields"] = array();
$tdataLEXICO[".viewFields"][] = "LEX_TOPIC";
$tdataLEXICO[".viewFields"][] = "LEX_KEY";
$tdataLEXICO[".viewFields"][] = "LEX_VALUE";
$tdataLEXICO[".viewFields"][] = "LEX_CAPTION";

$tdataLEXICO[".addFields"] = array();
$tdataLEXICO[".addFields"][] = "LEX_TOPIC";
$tdataLEXICO[".addFields"][] = "LEX_KEY";
$tdataLEXICO[".addFields"][] = "LEX_VALUE";
$tdataLEXICO[".addFields"][] = "LEX_CAPTION";

$tdataLEXICO[".masterListFields"] = array();
$tdataLEXICO[".masterListFields"][] = "LEX_TOPIC";
$tdataLEXICO[".masterListFields"][] = "LEX_KEY";
$tdataLEXICO[".masterListFields"][] = "LEX_VALUE";
$tdataLEXICO[".masterListFields"][] = "LEX_CAPTION";

$tdataLEXICO[".inlineAddFields"] = array();
$tdataLEXICO[".inlineAddFields"][] = "LEX_TOPIC";
$tdataLEXICO[".inlineAddFields"][] = "LEX_KEY";
$tdataLEXICO[".inlineAddFields"][] = "LEX_VALUE";
$tdataLEXICO[".inlineAddFields"][] = "LEX_CAPTION";

$tdataLEXICO[".editFields"] = array();
$tdataLEXICO[".editFields"][] = "LEX_TOPIC";
$tdataLEXICO[".editFields"][] = "LEX_KEY";
$tdataLEXICO[".editFields"][] = "LEX_VALUE";
$tdataLEXICO[".editFields"][] = "LEX_CAPTION";

$tdataLEXICO[".inlineEditFields"] = array();
$tdataLEXICO[".inlineEditFields"][] = "LEX_TOPIC";
$tdataLEXICO[".inlineEditFields"][] = "LEX_KEY";
$tdataLEXICO[".inlineEditFields"][] = "LEX_VALUE";
$tdataLEXICO[".inlineEditFields"][] = "LEX_CAPTION";

$tdataLEXICO[".updateSelectedFields"] = array();
$tdataLEXICO[".updateSelectedFields"][] = "LEX_TOPIC";
$tdataLEXICO[".updateSelectedFields"][] = "LEX_KEY";
$tdataLEXICO[".updateSelectedFields"][] = "LEX_VALUE";
$tdataLEXICO[".updateSelectedFields"][] = "LEX_CAPTION";


$tdataLEXICO[".exportFields"] = array();
$tdataLEXICO[".exportFields"][] = "LEX_TOPIC";
$tdataLEXICO[".exportFields"][] = "LEX_KEY";
$tdataLEXICO[".exportFields"][] = "LEX_VALUE";
$tdataLEXICO[".exportFields"][] = "LEX_CAPTION";

$tdataLEXICO[".importFields"] = array();
$tdataLEXICO[".importFields"][] = "LEX_TOPIC";
$tdataLEXICO[".importFields"][] = "LEX_KEY";
$tdataLEXICO[".importFields"][] = "LEX_VALUE";
$tdataLEXICO[".importFields"][] = "LEX_CAPTION";

$tdataLEXICO[".printFields"] = array();
$tdataLEXICO[".printFields"][] = "LEX_TOPIC";
$tdataLEXICO[".printFields"][] = "LEX_KEY";
$tdataLEXICO[".printFields"][] = "LEX_VALUE";
$tdataLEXICO[".printFields"][] = "LEX_CAPTION";

//	LEX_TOPIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LEX_TOPIC";
	$fdata["GoodName"] = "LEX_TOPIC";
	$fdata["ownerTable"] = "LEXICO";
	$fdata["Label"] = GetFieldLabel("LEXICO","LEX_TOPIC");
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

		$fdata["strField"] = "LEX_TOPIC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LEX_TOPIC";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLEXICO["LEX_TOPIC"] = $fdata;
//	LEX_KEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LEX_KEY";
	$fdata["GoodName"] = "LEX_KEY";
	$fdata["ownerTable"] = "LEXICO";
	$fdata["Label"] = GetFieldLabel("LEXICO","LEX_KEY");
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

		$fdata["strField"] = "LEX_KEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LEX_KEY";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataLEXICO["LEX_KEY"] = $fdata;
//	LEX_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LEX_VALUE";
	$fdata["GoodName"] = "LEX_VALUE";
	$fdata["ownerTable"] = "LEXICO";
	$fdata["Label"] = GetFieldLabel("LEXICO","LEX_VALUE");
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

		$fdata["strField"] = "LEX_VALUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LEX_VALUE";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataLEXICO["LEX_VALUE"] = $fdata;
//	LEX_CAPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LEX_CAPTION";
	$fdata["GoodName"] = "LEX_CAPTION";
	$fdata["ownerTable"] = "LEXICO";
	$fdata["Label"] = GetFieldLabel("LEXICO","LEX_CAPTION");
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

		$fdata["strField"] = "LEX_CAPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LEX_CAPTION";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdataLEXICO["LEX_CAPTION"] = $fdata;


$tables_data["LEXICO"]=&$tdataLEXICO;
$field_labels["LEXICO"] = &$fieldLabelsLEXICO;
$fieldToolTips["LEXICO"] = &$fieldToolTipsLEXICO;
$placeHolders["LEXICO"] = &$placeHoldersLEXICO;
$page_titles["LEXICO"] = &$pageTitlesLEXICO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LEXICO"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LEXICO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LEXICO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LEX_TOPIC,  	LEX_KEY,  	LEX_VALUE,  	LEX_CAPTION";
$proto0["m_strFrom"] = "FROM LEXICO";
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
	"m_strName" => "LEX_TOPIC",
	"m_strTable" => "LEXICO",
	"m_srcTableName" => "LEXICO"
));

$proto6["m_sql"] = "LEX_TOPIC";
$proto6["m_srcTableName"] = "LEXICO";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LEX_KEY",
	"m_strTable" => "LEXICO",
	"m_srcTableName" => "LEXICO"
));

$proto8["m_sql"] = "LEX_KEY";
$proto8["m_srcTableName"] = "LEXICO";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LEX_VALUE",
	"m_strTable" => "LEXICO",
	"m_srcTableName" => "LEXICO"
));

$proto10["m_sql"] = "LEX_VALUE";
$proto10["m_srcTableName"] = "LEXICO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LEX_CAPTION",
	"m_strTable" => "LEXICO",
	"m_srcTableName" => "LEXICO"
));

$proto12["m_sql"] = "LEX_CAPTION";
$proto12["m_srcTableName"] = "LEXICO";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "LEXICO";
$proto15["m_srcTableName"] = "LEXICO";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "LEX_TOPIC";
$proto15["m_columns"][] = "LEX_KEY";
$proto15["m_columns"][] = "LEX_VALUE";
$proto15["m_columns"][] = "LEX_CAPTION";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "LEXICO";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "LEXICO";
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
$proto0["m_srcTableName"]="LEXICO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LEXICO = createSqlQuery_LEXICO();


	
						;

				

$tdataLEXICO[".sqlquery"] = $queryData_LEXICO;

$tableEvents["LEXICO"] = new eventsBase;
$tdataLEXICO[".hasEvents"] = false;

?>
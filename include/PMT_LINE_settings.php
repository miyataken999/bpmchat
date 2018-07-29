<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_LINE = array();
	$tdataPMT_LINE[".truncateText"] = true;
	$tdataPMT_LINE[".NumberOfChars"] = 20;
	$tdataPMT_LINE[".ShortName"] = "PMT_LINE";
	$tdataPMT_LINE[".OwnerID"] = "";
	$tdataPMT_LINE[".OriginalTable"] = "PMT_LINE";

//	field labels
$fieldLabelsPMT_LINE = array();
$fieldToolTipsPMT_LINE = array();
$pageTitlesPMT_LINE = array();
$placeHoldersPMT_LINE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_LINE["Japanese"] = array();
	$fieldToolTipsPMT_LINE["Japanese"] = array();
	$placeHoldersPMT_LINE["Japanese"] = array();
	$pageTitlesPMT_LINE["Japanese"] = array();
	$fieldLabelsPMT_LINE["Japanese"]["LINE_ID"] = "回線ID";
	$fieldToolTipsPMT_LINE["Japanese"]["LINE_ID"] = "";
	$placeHoldersPMT_LINE["Japanese"]["LINE_ID"] = "";
	$fieldLabelsPMT_LINE["Japanese"]["LINE_TXT"] = "ラインTXT";
	$fieldToolTipsPMT_LINE["Japanese"]["LINE_TXT"] = "";
	$placeHoldersPMT_LINE["Japanese"]["LINE_TXT"] = "";
	$fieldLabelsPMT_LINE["Japanese"]["LINE_URLENCODE"] = "ラインでurlencode";
	$fieldToolTipsPMT_LINE["Japanese"]["LINE_URLENCODE"] = "";
	$placeHoldersPMT_LINE["Japanese"]["LINE_URLENCODE"] = "";
	if (count($fieldToolTipsPMT_LINE["Japanese"]))
		$tdataPMT_LINE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_LINE["English"] = array();
	$fieldToolTipsPMT_LINE["English"] = array();
	$placeHoldersPMT_LINE["English"] = array();
	$pageTitlesPMT_LINE["English"] = array();
	$fieldLabelsPMT_LINE["English"]["LINE_ID"] = "回線ID";
	$fieldToolTipsPMT_LINE["English"]["LINE_ID"] = "";
	$placeHoldersPMT_LINE["English"]["LINE_ID"] = "";
	$fieldLabelsPMT_LINE["English"]["LINE_TXT"] = "ラインTXT";
	$fieldToolTipsPMT_LINE["English"]["LINE_TXT"] = "";
	$placeHoldersPMT_LINE["English"]["LINE_TXT"] = "";
	$fieldLabelsPMT_LINE["English"]["LINE_URLENCODE"] = "ラインでurlencode";
	$fieldToolTipsPMT_LINE["English"]["LINE_URLENCODE"] = "";
	$placeHoldersPMT_LINE["English"]["LINE_URLENCODE"] = "";
	if (count($fieldToolTipsPMT_LINE["English"]))
		$tdataPMT_LINE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_LINE[""] = array();
	$fieldToolTipsPMT_LINE[""] = array();
	$placeHoldersPMT_LINE[""] = array();
	$pageTitlesPMT_LINE[""] = array();
	if (count($fieldToolTipsPMT_LINE[""]))
		$tdataPMT_LINE[".isUseToolTips"] = true;
}


	$tdataPMT_LINE[".NCSearch"] = true;



$tdataPMT_LINE[".shortTableName"] = "PMT_LINE";
$tdataPMT_LINE[".nSecOptions"] = 0;
$tdataPMT_LINE[".recsPerRowPrint"] = 1;
$tdataPMT_LINE[".mainTableOwnerID"] = "";
$tdataPMT_LINE[".moveNext"] = 0;
$tdataPMT_LINE[".entityType"] = 0;

$tdataPMT_LINE[".strOriginalTableName"] = "PMT_LINE";

	



$tdataPMT_LINE[".showAddInPopup"] = false;

$tdataPMT_LINE[".showEditInPopup"] = false;

$tdataPMT_LINE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_LINE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_LINE[".fieldsForRegister"] = array();
	
$tdataPMT_LINE[".listAjax"] = false;

	$tdataPMT_LINE[".audit"] = true;

	$tdataPMT_LINE[".locking"] = false;

$tdataPMT_LINE[".edit"] = true;
$tdataPMT_LINE[".afterEditAction"] = 1;
$tdataPMT_LINE[".closePopupAfterEdit"] = 1;
$tdataPMT_LINE[".afterEditActionDetTable"] = "";

$tdataPMT_LINE[".add"] = true;
$tdataPMT_LINE[".afterAddAction"] = 1;
$tdataPMT_LINE[".closePopupAfterAdd"] = 1;
$tdataPMT_LINE[".afterAddActionDetTable"] = "";

$tdataPMT_LINE[".list"] = true;



$tdataPMT_LINE[".reorderRecordsByHeader"] = true;



$tdataPMT_LINE[".view"] = true;

$tdataPMT_LINE[".import"] = true;

$tdataPMT_LINE[".exportTo"] = true;

$tdataPMT_LINE[".printFriendly"] = true;

$tdataPMT_LINE[".delete"] = true;

$tdataPMT_LINE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_LINE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_LINE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_LINE[".searchSaving"] = false;
//

$tdataPMT_LINE[".showSearchPanel"] = true;
		$tdataPMT_LINE[".flexibleSearch"] = true;

$tdataPMT_LINE[".isUseAjaxSuggest"] = true;

$tdataPMT_LINE[".rowHighlite"] = true;



			
					

$tdataPMT_LINE[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_LINE[".buttonsAdded"] = true;

$tdataPMT_LINE[".addPageEvents"] = true;

// use timepicker for search panel
$tdataPMT_LINE[".isUseTimeForSearch"] = false;





$tdataPMT_LINE[".allSearchFields"] = array();
$tdataPMT_LINE[".filterFields"] = array();
$tdataPMT_LINE[".requiredSearchFields"] = array();

$tdataPMT_LINE[".allSearchFields"][] = "LINE_ID";
	$tdataPMT_LINE[".allSearchFields"][] = "LINE_TXT";
	$tdataPMT_LINE[".allSearchFields"][] = "LINE_URLENCODE";
	

$tdataPMT_LINE[".googleLikeFields"] = array();
$tdataPMT_LINE[".googleLikeFields"][] = "LINE_ID";
$tdataPMT_LINE[".googleLikeFields"][] = "LINE_TXT";
$tdataPMT_LINE[".googleLikeFields"][] = "LINE_URLENCODE";


$tdataPMT_LINE[".advSearchFields"] = array();
$tdataPMT_LINE[".advSearchFields"][] = "LINE_ID";
$tdataPMT_LINE[".advSearchFields"][] = "LINE_TXT";
$tdataPMT_LINE[".advSearchFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".tableType"] = "list";

$tdataPMT_LINE[".printerPageOrientation"] = 0;
$tdataPMT_LINE[".nPrinterPageScale"] = 100;

$tdataPMT_LINE[".nPrinterSplitRecords"] = 40;

$tdataPMT_LINE[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_LINE[".geocodingEnabled"] = false;





$tdataPMT_LINE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_LINE[".pageSize"] = 20;

$tdataPMT_LINE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_LINE[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_LINE[".orderindexes"] = array();

$tdataPMT_LINE[".sqlHead"] = "SELECT LINE_ID,  	LINE_TXT,  	LINE_URLENCODE";
$tdataPMT_LINE[".sqlFrom"] = "FROM PMT_LINE";
$tdataPMT_LINE[".sqlWhereExpr"] = "";
$tdataPMT_LINE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_LINE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_LINE[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_LINE[".highlightSearchResults"] = true;

$tableKeysPMT_LINE = array();
$tableKeysPMT_LINE[] = "LINE_ID";
$tdataPMT_LINE[".Keys"] = $tableKeysPMT_LINE;

$tdataPMT_LINE[".listFields"] = array();
$tdataPMT_LINE[".listFields"][] = "LINE_ID";
$tdataPMT_LINE[".listFields"][] = "LINE_TXT";
$tdataPMT_LINE[".listFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".hideMobileList"] = array();


$tdataPMT_LINE[".viewFields"] = array();
$tdataPMT_LINE[".viewFields"][] = "LINE_ID";
$tdataPMT_LINE[".viewFields"][] = "LINE_TXT";
$tdataPMT_LINE[".viewFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".addFields"] = array();
$tdataPMT_LINE[".addFields"][] = "LINE_TXT";
$tdataPMT_LINE[".addFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".masterListFields"] = array();
$tdataPMT_LINE[".masterListFields"][] = "LINE_ID";
$tdataPMT_LINE[".masterListFields"][] = "LINE_TXT";
$tdataPMT_LINE[".masterListFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".inlineAddFields"] = array();

$tdataPMT_LINE[".editFields"] = array();
$tdataPMT_LINE[".editFields"][] = "LINE_TXT";
$tdataPMT_LINE[".editFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".inlineEditFields"] = array();

$tdataPMT_LINE[".updateSelectedFields"] = array();
$tdataPMT_LINE[".updateSelectedFields"][] = "LINE_TXT";
$tdataPMT_LINE[".updateSelectedFields"][] = "LINE_URLENCODE";


$tdataPMT_LINE[".exportFields"] = array();
$tdataPMT_LINE[".exportFields"][] = "LINE_ID";
$tdataPMT_LINE[".exportFields"][] = "LINE_TXT";
$tdataPMT_LINE[".exportFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".importFields"] = array();
$tdataPMT_LINE[".importFields"][] = "LINE_ID";
$tdataPMT_LINE[".importFields"][] = "LINE_TXT";
$tdataPMT_LINE[".importFields"][] = "LINE_URLENCODE";

$tdataPMT_LINE[".printFields"] = array();
$tdataPMT_LINE[".printFields"][] = "LINE_ID";
$tdataPMT_LINE[".printFields"][] = "LINE_TXT";
$tdataPMT_LINE[".printFields"][] = "LINE_URLENCODE";

//	LINE_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "LINE_ID";
	$fdata["GoodName"] = "LINE_ID";
	$fdata["ownerTable"] = "PMT_LINE";
	$fdata["Label"] = GetFieldLabel("PMT_LINE","LINE_ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINE_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINE_ID";

	
	
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




	$tdataPMT_LINE["LINE_ID"] = $fdata;
//	LINE_TXT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LINE_TXT";
	$fdata["GoodName"] = "LINE_TXT";
	$fdata["ownerTable"] = "PMT_LINE";
	$fdata["Label"] = GetFieldLabel("PMT_LINE","LINE_TXT");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINE_TXT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINE_TXT";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_LINE["LINE_TXT"] = $fdata;
//	LINE_URLENCODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINE_URLENCODE";
	$fdata["GoodName"] = "LINE_URLENCODE";
	$fdata["ownerTable"] = "PMT_LINE";
	$fdata["Label"] = GetFieldLabel("PMT_LINE","LINE_URLENCODE");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINE_URLENCODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINE_URLENCODE";

	
	
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




	$tdataPMT_LINE["LINE_URLENCODE"] = $fdata;


$tables_data["PMT_LINE"]=&$tdataPMT_LINE;
$field_labels["PMT_LINE"] = &$fieldLabelsPMT_LINE;
$fieldToolTips["PMT_LINE"] = &$fieldToolTipsPMT_LINE;
$placeHolders["PMT_LINE"] = &$placeHoldersPMT_LINE;
$page_titles["PMT_LINE"] = &$pageTitlesPMT_LINE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_LINE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_LINE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_LINE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "LINE_ID,  	LINE_TXT,  	LINE_URLENCODE";
$proto0["m_strFrom"] = "FROM PMT_LINE";
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
	"m_strName" => "LINE_ID",
	"m_strTable" => "PMT_LINE",
	"m_srcTableName" => "PMT_LINE"
));

$proto6["m_sql"] = "LINE_ID";
$proto6["m_srcTableName"] = "PMT_LINE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LINE_TXT",
	"m_strTable" => "PMT_LINE",
	"m_srcTableName" => "PMT_LINE"
));

$proto8["m_sql"] = "LINE_TXT";
$proto8["m_srcTableName"] = "PMT_LINE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LINE_URLENCODE",
	"m_strTable" => "PMT_LINE",
	"m_srcTableName" => "PMT_LINE"
));

$proto10["m_sql"] = "LINE_URLENCODE";
$proto10["m_srcTableName"] = "PMT_LINE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "PMT_LINE";
$proto13["m_srcTableName"] = "PMT_LINE";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "LINE_ID";
$proto13["m_columns"][] = "LINE_TXT";
$proto13["m_columns"][] = "LINE_URLENCODE";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "PMT_LINE";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "PMT_LINE";
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
$proto0["m_srcTableName"]="PMT_LINE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_LINE = createSqlQuery_PMT_LINE();


	
						;

			

$tdataPMT_LINE[".sqlquery"] = $queryData_PMT_LINE;

include_once(getabspath("include/PMT_LINE_events.php"));
$tableEvents["PMT_LINE"] = new eventclass_PMT_LINE;
$tdataPMT_LINE[".hasEvents"] = true;

?>
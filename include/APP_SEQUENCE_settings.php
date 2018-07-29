<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_SEQUENCE = array();
	$tdataAPP_SEQUENCE[".truncateText"] = true;
	$tdataAPP_SEQUENCE[".NumberOfChars"] = 20;
	$tdataAPP_SEQUENCE[".ShortName"] = "APP_SEQUENCE";
	$tdataAPP_SEQUENCE[".OwnerID"] = "";
	$tdataAPP_SEQUENCE[".OriginalTable"] = "APP_SEQUENCE";

//	field labels
$fieldLabelsAPP_SEQUENCE = array();
$fieldToolTipsAPP_SEQUENCE = array();
$pageTitlesAPP_SEQUENCE = array();
$placeHoldersAPP_SEQUENCE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_SEQUENCE["Japanese"] = array();
	$fieldToolTipsAPP_SEQUENCE["Japanese"] = array();
	$placeHoldersAPP_SEQUENCE["Japanese"] = array();
	$pageTitlesAPP_SEQUENCE["Japanese"] = array();
	$fieldLabelsAPP_SEQUENCE["Japanese"]["ID"] = "ID";
	$fieldToolTipsAPP_SEQUENCE["Japanese"]["ID"] = "";
	$placeHoldersAPP_SEQUENCE["Japanese"]["ID"] = "";
	if (count($fieldToolTipsAPP_SEQUENCE["Japanese"]))
		$tdataAPP_SEQUENCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_SEQUENCE["English"] = array();
	$fieldToolTipsAPP_SEQUENCE["English"] = array();
	$placeHoldersAPP_SEQUENCE["English"] = array();
	$pageTitlesAPP_SEQUENCE["English"] = array();
	$fieldLabelsAPP_SEQUENCE["English"]["ID"] = "ID";
	$fieldToolTipsAPP_SEQUENCE["English"]["ID"] = "";
	$placeHoldersAPP_SEQUENCE["English"]["ID"] = "";
	if (count($fieldToolTipsAPP_SEQUENCE["English"]))
		$tdataAPP_SEQUENCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_SEQUENCE[""] = array();
	$fieldToolTipsAPP_SEQUENCE[""] = array();
	$placeHoldersAPP_SEQUENCE[""] = array();
	$pageTitlesAPP_SEQUENCE[""] = array();
	if (count($fieldToolTipsAPP_SEQUENCE[""]))
		$tdataAPP_SEQUENCE[".isUseToolTips"] = true;
}


	$tdataAPP_SEQUENCE[".NCSearch"] = true;



$tdataAPP_SEQUENCE[".shortTableName"] = "APP_SEQUENCE";
$tdataAPP_SEQUENCE[".nSecOptions"] = 0;
$tdataAPP_SEQUENCE[".recsPerRowPrint"] = 1;
$tdataAPP_SEQUENCE[".mainTableOwnerID"] = "";
$tdataAPP_SEQUENCE[".moveNext"] = 0;
$tdataAPP_SEQUENCE[".entityType"] = 0;

$tdataAPP_SEQUENCE[".strOriginalTableName"] = "APP_SEQUENCE";

	



$tdataAPP_SEQUENCE[".showAddInPopup"] = false;

$tdataAPP_SEQUENCE[".showEditInPopup"] = false;

$tdataAPP_SEQUENCE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_SEQUENCE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_SEQUENCE[".fieldsForRegister"] = array();
	
$tdataAPP_SEQUENCE[".listAjax"] = false;

	$tdataAPP_SEQUENCE[".audit"] = true;

	$tdataAPP_SEQUENCE[".locking"] = false;

$tdataAPP_SEQUENCE[".edit"] = true;
$tdataAPP_SEQUENCE[".afterEditAction"] = 1;
$tdataAPP_SEQUENCE[".closePopupAfterEdit"] = 1;
$tdataAPP_SEQUENCE[".afterEditActionDetTable"] = "";

$tdataAPP_SEQUENCE[".add"] = true;
$tdataAPP_SEQUENCE[".afterAddAction"] = 1;
$tdataAPP_SEQUENCE[".closePopupAfterAdd"] = 1;
$tdataAPP_SEQUENCE[".afterAddActionDetTable"] = "";

$tdataAPP_SEQUENCE[".list"] = true;

$tdataAPP_SEQUENCE[".inlineEdit"] = true;


$tdataAPP_SEQUENCE[".reorderRecordsByHeader"] = true;
$tdataAPP_SEQUENCE[".createSortByDropdown"] = true;
$tdataAPP_SEQUENCE[".strSortControlSettingsJSON"] = "";



$tdataAPP_SEQUENCE[".inlineAdd"] = true;
$tdataAPP_SEQUENCE[".view"] = true;

$tdataAPP_SEQUENCE[".import"] = true;

$tdataAPP_SEQUENCE[".exportTo"] = true;

$tdataAPP_SEQUENCE[".printFriendly"] = true;

$tdataAPP_SEQUENCE[".delete"] = true;

$tdataAPP_SEQUENCE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_SEQUENCE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_SEQUENCE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_SEQUENCE[".searchSaving"] = false;
//

$tdataAPP_SEQUENCE[".showSearchPanel"] = true;
		$tdataAPP_SEQUENCE[".flexibleSearch"] = true;

$tdataAPP_SEQUENCE[".isUseAjaxSuggest"] = true;

$tdataAPP_SEQUENCE[".rowHighlite"] = true;



				

$tdataAPP_SEQUENCE[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_SEQUENCE[".buttonsAdded"] = false;

$tdataAPP_SEQUENCE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_SEQUENCE[".isUseTimeForSearch"] = false;





$tdataAPP_SEQUENCE[".allSearchFields"] = array();
$tdataAPP_SEQUENCE[".filterFields"] = array();
$tdataAPP_SEQUENCE[".requiredSearchFields"] = array();

$tdataAPP_SEQUENCE[".allSearchFields"][] = "ID";
	

$tdataAPP_SEQUENCE[".googleLikeFields"] = array();
$tdataAPP_SEQUENCE[".googleLikeFields"][] = "ID";


$tdataAPP_SEQUENCE[".advSearchFields"] = array();
$tdataAPP_SEQUENCE[".advSearchFields"][] = "ID";

$tdataAPP_SEQUENCE[".tableType"] = "list";

$tdataAPP_SEQUENCE[".printerPageOrientation"] = 0;
$tdataAPP_SEQUENCE[".nPrinterPageScale"] = 100;

$tdataAPP_SEQUENCE[".nPrinterSplitRecords"] = 40;

$tdataAPP_SEQUENCE[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_SEQUENCE[".geocodingEnabled"] = false;





$tdataAPP_SEQUENCE[".listGridLayout"] = 3;


$tdataAPP_SEQUENCE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_SEQUENCE[".pageSize"] = 20;

$tdataAPP_SEQUENCE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_SEQUENCE[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_SEQUENCE[".orderindexes"] = array();

$tdataAPP_SEQUENCE[".sqlHead"] = "SELECT ID";
$tdataAPP_SEQUENCE[".sqlFrom"] = "FROM APP_SEQUENCE";
$tdataAPP_SEQUENCE[".sqlWhereExpr"] = "";
$tdataAPP_SEQUENCE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_SEQUENCE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_SEQUENCE[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_SEQUENCE[".highlightSearchResults"] = true;

$tableKeysAPP_SEQUENCE = array();
$tableKeysAPP_SEQUENCE[] = "ID";
$tdataAPP_SEQUENCE[".Keys"] = $tableKeysAPP_SEQUENCE;

$tdataAPP_SEQUENCE[".listFields"] = array();
$tdataAPP_SEQUENCE[".listFields"][] = "ID";

$tdataAPP_SEQUENCE[".hideMobileList"] = array();


$tdataAPP_SEQUENCE[".viewFields"] = array();
$tdataAPP_SEQUENCE[".viewFields"][] = "ID";

$tdataAPP_SEQUENCE[".addFields"] = array();
$tdataAPP_SEQUENCE[".addFields"][] = "ID";

$tdataAPP_SEQUENCE[".masterListFields"] = array();
$tdataAPP_SEQUENCE[".masterListFields"][] = "ID";

$tdataAPP_SEQUENCE[".inlineAddFields"] = array();
$tdataAPP_SEQUENCE[".inlineAddFields"][] = "ID";

$tdataAPP_SEQUENCE[".editFields"] = array();
$tdataAPP_SEQUENCE[".editFields"][] = "ID";

$tdataAPP_SEQUENCE[".inlineEditFields"] = array();
$tdataAPP_SEQUENCE[".inlineEditFields"][] = "ID";

$tdataAPP_SEQUENCE[".updateSelectedFields"] = array();
$tdataAPP_SEQUENCE[".updateSelectedFields"][] = "ID";


$tdataAPP_SEQUENCE[".exportFields"] = array();
$tdataAPP_SEQUENCE[".exportFields"][] = "ID";

$tdataAPP_SEQUENCE[".importFields"] = array();
$tdataAPP_SEQUENCE[".importFields"][] = "ID";

$tdataAPP_SEQUENCE[".printFields"] = array();
$tdataAPP_SEQUENCE[".printFields"][] = "ID";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "APP_SEQUENCE";
	$fdata["Label"] = GetFieldLabel("APP_SEQUENCE","ID");
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




	$tdataAPP_SEQUENCE["ID"] = $fdata;


$tables_data["APP_SEQUENCE"]=&$tdataAPP_SEQUENCE;
$field_labels["APP_SEQUENCE"] = &$fieldLabelsAPP_SEQUENCE;
$fieldToolTips["APP_SEQUENCE"] = &$fieldToolTipsAPP_SEQUENCE;
$placeHolders["APP_SEQUENCE"] = &$placeHoldersAPP_SEQUENCE;
$page_titles["APP_SEQUENCE"] = &$pageTitlesAPP_SEQUENCE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_SEQUENCE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_SEQUENCE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_SEQUENCE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID";
$proto0["m_strFrom"] = "FROM APP_SEQUENCE";
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
	"m_strName" => "ID",
	"m_strTable" => "APP_SEQUENCE",
	"m_srcTableName" => "APP_SEQUENCE"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "APP_SEQUENCE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "APP_SEQUENCE";
$proto9["m_srcTableName"] = "APP_SEQUENCE";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "ID";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "APP_SEQUENCE";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "APP_SEQUENCE";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_SEQUENCE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_SEQUENCE = createSqlQuery_APP_SEQUENCE();


	
						;

	

$tdataAPP_SEQUENCE[".sqlquery"] = $queryData_APP_SEQUENCE;

$tableEvents["APP_SEQUENCE"] = new eventsBase;
$tdataAPP_SEQUENCE[".hasEvents"] = false;

?>
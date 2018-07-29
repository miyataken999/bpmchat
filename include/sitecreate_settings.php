<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasitecreate = array();
	$tdatasitecreate[".truncateText"] = true;
	$tdatasitecreate[".NumberOfChars"] = 80;
	$tdatasitecreate[".ShortName"] = "sitecreate";
	$tdatasitecreate[".OwnerID"] = "field2";
	$tdatasitecreate[".OriginalTable"] = "sitecreate";

//	field labels
$fieldLabelssitecreate = array();
$fieldToolTipssitecreate = array();
$pageTitlessitecreate = array();
$placeHolderssitecreate = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssitecreate["Japanese"] = array();
	$fieldToolTipssitecreate["Japanese"] = array();
	$placeHolderssitecreate["Japanese"] = array();
	$pageTitlessitecreate["Japanese"] = array();
	$fieldLabelssitecreate["Japanese"]["id"] = "ID";
	$fieldToolTipssitecreate["Japanese"]["id"] = "";
	$placeHolderssitecreate["Japanese"]["id"] = "";
	$fieldLabelssitecreate["Japanese"]["field2"] = "フィールド2";
	$fieldToolTipssitecreate["Japanese"]["field2"] = "";
	$placeHolderssitecreate["Japanese"]["field2"] = "";
	if (count($fieldToolTipssitecreate["Japanese"]))
		$tdatasitecreate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssitecreate[""] = array();
	$fieldToolTipssitecreate[""] = array();
	$placeHolderssitecreate[""] = array();
	$pageTitlessitecreate[""] = array();
	if (count($fieldToolTipssitecreate[""]))
		$tdatasitecreate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssitecreate["English"] = array();
	$fieldToolTipssitecreate["English"] = array();
	$placeHolderssitecreate["English"] = array();
	$pageTitlessitecreate["English"] = array();
	if (count($fieldToolTipssitecreate["English"]))
		$tdatasitecreate[".isUseToolTips"] = true;
}


	$tdatasitecreate[".NCSearch"] = true;



$tdatasitecreate[".shortTableName"] = "sitecreate";
$tdatasitecreate[".nSecOptions"] = 1;
$tdatasitecreate[".recsPerRowList"] = 6;
$tdatasitecreate[".recsPerRowPrint"] = 1;
$tdatasitecreate[".mainTableOwnerID"] = "field2";
$tdatasitecreate[".moveNext"] = 1;
$tdatasitecreate[".entityType"] = 0;

$tdatasitecreate[".strOriginalTableName"] = "sitecreate";

	



$tdatasitecreate[".showAddInPopup"] = false;

$tdatasitecreate[".showEditInPopup"] = false;

$tdatasitecreate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasitecreate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasitecreate[".fieldsForRegister"] = array();

$tdatasitecreate[".listAjax"] = false;

	$tdatasitecreate[".audit"] = true;

	$tdatasitecreate[".locking"] = false;

$tdatasitecreate[".edit"] = true;
$tdatasitecreate[".afterEditAction"] = 1;
$tdatasitecreate[".closePopupAfterEdit"] = 1;
$tdatasitecreate[".afterEditActionDetTable"] = "";

$tdatasitecreate[".add"] = true;
$tdatasitecreate[".afterAddAction"] = 1;
$tdatasitecreate[".closePopupAfterAdd"] = 1;
$tdatasitecreate[".afterAddActionDetTable"] = "";

$tdatasitecreate[".list"] = true;

$tdatasitecreate[".inlineEdit"] = true;


$tdatasitecreate[".reorderRecordsByHeader"] = true;
$tdatasitecreate[".createSortByDropdown"] = true;
$tdatasitecreate[".strSortControlSettingsJSON"] = "";



$tdatasitecreate[".inlineAdd"] = true;
$tdatasitecreate[".copy"] = true;
$tdatasitecreate[".view"] = true;

$tdatasitecreate[".import"] = true;

$tdatasitecreate[".exportTo"] = true;

$tdatasitecreate[".printFriendly"] = true;

$tdatasitecreate[".delete"] = true;

$tdatasitecreate[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdatasitecreate[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatasitecreate[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasitecreate[".searchSaving"] = false;
//

$tdatasitecreate[".showSearchPanel"] = true;
		$tdatasitecreate[".flexibleSearch"] = true;

$tdatasitecreate[".isUseAjaxSuggest"] = true;

$tdatasitecreate[".rowHighlite"] = true;



			
		

$tdatasitecreate[".ajaxCodeSnippetAdded"] = false;

$tdatasitecreate[".buttonsAdded"] = true;

$tdatasitecreate[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasitecreate[".isUseTimeForSearch"] = false;





$tdatasitecreate[".allSearchFields"] = array();
$tdatasitecreate[".filterFields"] = array();
$tdatasitecreate[".requiredSearchFields"] = array();

$tdatasitecreate[".allSearchFields"][] = "id";
	$tdatasitecreate[".allSearchFields"][] = "field2";
	

$tdatasitecreate[".googleLikeFields"] = array();
$tdatasitecreate[".googleLikeFields"][] = "id";
$tdatasitecreate[".googleLikeFields"][] = "field2";


$tdatasitecreate[".advSearchFields"] = array();
$tdatasitecreate[".advSearchFields"][] = "id";
$tdatasitecreate[".advSearchFields"][] = "field2";

$tdatasitecreate[".tableType"] = "list";

$tdatasitecreate[".printerPageOrientation"] = 0;
$tdatasitecreate[".nPrinterPageScale"] = 100;

$tdatasitecreate[".nPrinterSplitRecords"] = 40;

$tdatasitecreate[".nPrinterPDFSplitRecords"] = 40;



$tdatasitecreate[".geocodingEnabled"] = false;







$tdatasitecreate[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatasitecreate[".pageSize"] = 20;

$tdatasitecreate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasitecreate[".strOrderBy"] = $tstrOrderBy;

$tdatasitecreate[".orderindexes"] = array();

$tdatasitecreate[".sqlHead"] = "SELECT id,  	field2";
$tdatasitecreate[".sqlFrom"] = "FROM sitecreate";
$tdatasitecreate[".sqlWhereExpr"] = "";
$tdatasitecreate[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasitecreate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasitecreate[".arrGroupsPerPage"] = $arrGPP;

$tdatasitecreate[".highlightSearchResults"] = true;

$tableKeyssitecreate = array();
$tableKeyssitecreate[] = "id";
$tdatasitecreate[".Keys"] = $tableKeyssitecreate;

$tdatasitecreate[".listFields"] = array();
$tdatasitecreate[".listFields"][] = "field2";

$tdatasitecreate[".hideMobileList"] = array();


$tdatasitecreate[".viewFields"] = array();
$tdatasitecreate[".viewFields"][] = "id";
$tdatasitecreate[".viewFields"][] = "field2";

$tdatasitecreate[".addFields"] = array();
$tdatasitecreate[".addFields"][] = "id";

$tdatasitecreate[".masterListFields"] = array();
$tdatasitecreate[".masterListFields"][] = "id";
$tdatasitecreate[".masterListFields"][] = "field2";

$tdatasitecreate[".inlineAddFields"] = array();

$tdatasitecreate[".editFields"] = array();
$tdatasitecreate[".editFields"][] = "id";
$tdatasitecreate[".editFields"][] = "field2";

$tdatasitecreate[".inlineEditFields"] = array();
$tdatasitecreate[".inlineEditFields"][] = "field2";

$tdatasitecreate[".updateSelectedFields"] = array();
$tdatasitecreate[".updateSelectedFields"][] = "id";
$tdatasitecreate[".updateSelectedFields"][] = "field2";


$tdatasitecreate[".exportFields"] = array();
$tdatasitecreate[".exportFields"][] = "id";
$tdatasitecreate[".exportFields"][] = "field2";

$tdatasitecreate[".importFields"] = array();
$tdatasitecreate[".importFields"][] = "id";
$tdatasitecreate[".importFields"][] = "field2";

$tdatasitecreate[".printFields"] = array();
$tdatasitecreate[".printFields"][] = "id";
$tdatasitecreate[".printFields"][] = "field2";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sitecreate";
	$fdata["Label"] = GetFieldLabel("sitecreate","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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




	$tdatasitecreate["id"] = $fdata;
//	field2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "field2";
	$fdata["GoodName"] = "field2";
	$fdata["ownerTable"] = "sitecreate";
	$fdata["Label"] = GetFieldLabel("sitecreate","field2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "field2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field2";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatasitecreate["field2"] = $fdata;


$tables_data["sitecreate"]=&$tdatasitecreate;
$field_labels["sitecreate"] = &$fieldLabelssitecreate;
$fieldToolTips["sitecreate"] = &$fieldToolTipssitecreate;
$placeHolders["sitecreate"] = &$placeHolderssitecreate;
$page_titles["sitecreate"] = &$pageTitlessitecreate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sitecreate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sitecreate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sitecreate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	field2";
$proto0["m_strFrom"] = "FROM sitecreate";
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
	"m_strTable" => "sitecreate",
	"m_srcTableName" => "sitecreate"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sitecreate";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "field2",
	"m_strTable" => "sitecreate",
	"m_srcTableName" => "sitecreate"
));

$proto8["m_sql"] = "field2";
$proto8["m_srcTableName"] = "sitecreate";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sitecreate";
$proto11["m_srcTableName"] = "sitecreate";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "field2";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sitecreate";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sitecreate";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sitecreate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sitecreate = createSqlQuery_sitecreate();


	
						;

		

$tdatasitecreate[".sqlquery"] = $queryData_sitecreate;

include_once(getabspath("include/sitecreate_events.php"));
$tableEvents["sitecreate"] = new eventclass_sitecreate;
$tdatasitecreate[".hasEvents"] = true;

?>
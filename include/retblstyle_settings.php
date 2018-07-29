<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblstyle = array();
	$tdataretblstyle[".truncateText"] = true;
	$tdataretblstyle[".NumberOfChars"] = 80;
	$tdataretblstyle[".ShortName"] = "retblstyle";
	$tdataretblstyle[".OwnerID"] = "";
	$tdataretblstyle[".OriginalTable"] = "retblstyle";

//	field labels
$fieldLabelsretblstyle = array();
$fieldToolTipsretblstyle = array();
$pageTitlesretblstyle = array();
$placeHoldersretblstyle = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblstyle["Japanese"] = array();
	$fieldToolTipsretblstyle["Japanese"] = array();
	$placeHoldersretblstyle["Japanese"] = array();
	$pageTitlesretblstyle["Japanese"] = array();
	$fieldLabelsretblstyle["Japanese"]["Style"] = "スタイル";
	$fieldToolTipsretblstyle["Japanese"]["Style"] = "";
	$placeHoldersretblstyle["Japanese"]["Style"] = "";
	$fieldLabelsretblstyle["Japanese"]["StyleID"] = "スタイルID";
	$fieldToolTipsretblstyle["Japanese"]["StyleID"] = "";
	$placeHoldersretblstyle["Japanese"]["StyleID"] = "";
	if (count($fieldToolTipsretblstyle["Japanese"]))
		$tdataretblstyle[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblstyle[""] = array();
	$fieldToolTipsretblstyle[""] = array();
	$placeHoldersretblstyle[""] = array();
	$pageTitlesretblstyle[""] = array();
	if (count($fieldToolTipsretblstyle[""]))
		$tdataretblstyle[".isUseToolTips"] = true;
}





$tdataretblstyle[".shortTableName"] = "retblstyle";
$tdataretblstyle[".nSecOptions"] = 0;
$tdataretblstyle[".recsPerRowPrint"] = 1;
$tdataretblstyle[".mainTableOwnerID"] = "";
$tdataretblstyle[".moveNext"] = 1;
$tdataretblstyle[".entityType"] = 0;

$tdataretblstyle[".strOriginalTableName"] = "retblstyle";

	



$tdataretblstyle[".showAddInPopup"] = false;

$tdataretblstyle[".showEditInPopup"] = false;

$tdataretblstyle[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblstyle[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblstyle[".fieldsForRegister"] = array();

$tdataretblstyle[".listAjax"] = false;

	$tdataretblstyle[".audit"] = false;

	$tdataretblstyle[".locking"] = false;

$tdataretblstyle[".edit"] = true;
$tdataretblstyle[".afterEditAction"] = 1;
$tdataretblstyle[".closePopupAfterEdit"] = 1;
$tdataretblstyle[".afterEditActionDetTable"] = "";

$tdataretblstyle[".add"] = true;
$tdataretblstyle[".afterAddAction"] = 1;
$tdataretblstyle[".closePopupAfterAdd"] = 1;
$tdataretblstyle[".afterAddActionDetTable"] = "";

$tdataretblstyle[".list"] = true;

$tdataretblstyle[".inlineEdit"] = true;


$tdataretblstyle[".reorderRecordsByHeader"] = true;
$tdataretblstyle[".createSortByDropdown"] = true;
$tdataretblstyle[".strSortControlSettingsJSON"] = "";



$tdataretblstyle[".inlineAdd"] = true;
$tdataretblstyle[".view"] = true;




$tdataretblstyle[".delete"] = true;

$tdataretblstyle[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblstyle[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblstyle[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblstyle[".searchSaving"] = false;
//

$tdataretblstyle[".showSearchPanel"] = true;
		$tdataretblstyle[".flexibleSearch"] = true;

$tdataretblstyle[".isUseAjaxSuggest"] = true;

$tdataretblstyle[".rowHighlite"] = true;



	

$tdataretblstyle[".ajaxCodeSnippetAdded"] = false;

$tdataretblstyle[".buttonsAdded"] = false;

$tdataretblstyle[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretblstyle[".isUseTimeForSearch"] = false;





$tdataretblstyle[".allSearchFields"] = array();
$tdataretblstyle[".filterFields"] = array();
$tdataretblstyle[".requiredSearchFields"] = array();



$tdataretblstyle[".googleLikeFields"] = array();
$tdataretblstyle[".googleLikeFields"][] = "Style";



$tdataretblstyle[".tableType"] = "list";

$tdataretblstyle[".printerPageOrientation"] = 0;
$tdataretblstyle[".nPrinterPageScale"] = 100;

$tdataretblstyle[".nPrinterSplitRecords"] = 40;

$tdataretblstyle[".nPrinterPDFSplitRecords"] = 40;



$tdataretblstyle[".geocodingEnabled"] = false;





$tdataretblstyle[".listGridLayout"] = 3;


$tdataretblstyle[".isResizeColumns"] = true;

$tdataretblstyle[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretblstyle[".pageSize"] = 20;

$tdataretblstyle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblstyle[".strOrderBy"] = $tstrOrderBy;

$tdataretblstyle[".orderindexes"] = array();

$tdataretblstyle[".sqlHead"] = "select Style,  StyleID";
$tdataretblstyle[".sqlFrom"] = "FROM retblstyle";
$tdataretblstyle[".sqlWhereExpr"] = "";
$tdataretblstyle[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblstyle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblstyle[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblstyle = array();
$tableKeysretblstyle[] = "StyleID";
$tdataretblstyle[".Keys"] = $tableKeysretblstyle;

$tdataretblstyle[".listFields"] = array();
$tdataretblstyle[".listFields"][] = "Style";

$tdataretblstyle[".hideMobileList"] = array();


$tdataretblstyle[".viewFields"] = array();
$tdataretblstyle[".viewFields"][] = "Style";

$tdataretblstyle[".addFields"] = array();
$tdataretblstyle[".addFields"][] = "Style";

$tdataretblstyle[".masterListFields"] = array();

$tdataretblstyle[".inlineAddFields"] = array();
$tdataretblstyle[".inlineAddFields"][] = "Style";

$tdataretblstyle[".editFields"] = array();
$tdataretblstyle[".editFields"][] = "Style";

$tdataretblstyle[".inlineEditFields"] = array();
$tdataretblstyle[".inlineEditFields"][] = "Style";

$tdataretblstyle[".updateSelectedFields"] = array();
$tdataretblstyle[".updateSelectedFields"][] = "Style";


$tdataretblstyle[".exportFields"] = array();

$tdataretblstyle[".importFields"] = array();
$tdataretblstyle[".importFields"][] = "Style";
$tdataretblstyle[".importFields"][] = "StyleID";

$tdataretblstyle[".printFields"] = array();

//	Style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Style";
	$fdata["GoodName"] = "Style";
	$fdata["ownerTable"] = "retblstyle";
	$fdata["Label"] = GetFieldLabel("retblstyle","Style");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Style";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Style";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

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

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblstyle["Style"] = $fdata;
//	StyleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StyleID";
	$fdata["GoodName"] = "StyleID";
	$fdata["ownerTable"] = "retblstyle";
	$fdata["Label"] = GetFieldLabel("retblstyle","StyleID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "StyleID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StyleID";

	
	
			
				$fdata["UploadFolder"] = "photos";

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








	$tdataretblstyle["StyleID"] = $fdata;


$tables_data["retblstyle"]=&$tdataretblstyle;
$field_labels["retblstyle"] = &$fieldLabelsretblstyle;
$fieldToolTips["retblstyle"] = &$fieldToolTipsretblstyle;
$placeHolders["retblstyle"] = &$placeHoldersretblstyle;
$page_titles["retblstyle"] = &$pageTitlesretblstyle;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblstyle"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblstyle"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblstyle()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Style,  StyleID";
$proto0["m_strFrom"] = "FROM retblstyle";
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
	"m_strName" => "Style",
	"m_strTable" => "retblstyle",
	"m_srcTableName" => "retblstyle"
));

$proto6["m_sql"] = "Style";
$proto6["m_srcTableName"] = "retblstyle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StyleID",
	"m_strTable" => "retblstyle",
	"m_srcTableName" => "retblstyle"
));

$proto8["m_sql"] = "StyleID";
$proto8["m_srcTableName"] = "retblstyle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retblstyle";
$proto11["m_srcTableName"] = "retblstyle";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Style";
$proto11["m_columns"][] = "StyleID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retblstyle";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retblstyle";
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
$proto0["m_srcTableName"]="retblstyle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblstyle = createSqlQuery_retblstyle();


	
						;

		

$tdataretblstyle[".sqlquery"] = $queryData_retblstyle;

$tableEvents["retblstyle"] = new eventsBase;
$tdataretblstyle[".hasEvents"] = false;

?>
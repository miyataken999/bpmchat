<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblcooling = array();
	$tdataretblcooling[".truncateText"] = true;
	$tdataretblcooling[".NumberOfChars"] = 80;
	$tdataretblcooling[".ShortName"] = "retblcooling";
	$tdataretblcooling[".OwnerID"] = "";
	$tdataretblcooling[".OriginalTable"] = "retblcooling";

//	field labels
$fieldLabelsretblcooling = array();
$fieldToolTipsretblcooling = array();
$pageTitlesretblcooling = array();
$placeHoldersretblcooling = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblcooling["Japanese"] = array();
	$fieldToolTipsretblcooling["Japanese"] = array();
	$placeHoldersretblcooling["Japanese"] = array();
	$pageTitlesretblcooling["Japanese"] = array();
	$fieldLabelsretblcooling["Japanese"]["Cooling"] = "冷却";
	$fieldToolTipsretblcooling["Japanese"]["Cooling"] = "";
	$placeHoldersretblcooling["Japanese"]["Cooling"] = "";
	$fieldLabelsretblcooling["Japanese"]["CoolingID"] = "IDを冷却";
	$fieldToolTipsretblcooling["Japanese"]["CoolingID"] = "";
	$placeHoldersretblcooling["Japanese"]["CoolingID"] = "";
	if (count($fieldToolTipsretblcooling["Japanese"]))
		$tdataretblcooling[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblcooling[""] = array();
	$fieldToolTipsretblcooling[""] = array();
	$placeHoldersretblcooling[""] = array();
	$pageTitlesretblcooling[""] = array();
	if (count($fieldToolTipsretblcooling[""]))
		$tdataretblcooling[".isUseToolTips"] = true;
}





$tdataretblcooling[".shortTableName"] = "retblcooling";
$tdataretblcooling[".nSecOptions"] = 0;
$tdataretblcooling[".recsPerRowPrint"] = 1;
$tdataretblcooling[".mainTableOwnerID"] = "";
$tdataretblcooling[".moveNext"] = 1;
$tdataretblcooling[".entityType"] = 0;

$tdataretblcooling[".strOriginalTableName"] = "retblcooling";

	



$tdataretblcooling[".showAddInPopup"] = false;

$tdataretblcooling[".showEditInPopup"] = false;

$tdataretblcooling[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblcooling[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblcooling[".fieldsForRegister"] = array();

$tdataretblcooling[".listAjax"] = false;

	$tdataretblcooling[".audit"] = false;

	$tdataretblcooling[".locking"] = false;

$tdataretblcooling[".edit"] = true;
$tdataretblcooling[".afterEditAction"] = 1;
$tdataretblcooling[".closePopupAfterEdit"] = 1;
$tdataretblcooling[".afterEditActionDetTable"] = "";

$tdataretblcooling[".add"] = true;
$tdataretblcooling[".afterAddAction"] = 1;
$tdataretblcooling[".closePopupAfterAdd"] = 1;
$tdataretblcooling[".afterAddActionDetTable"] = "";

$tdataretblcooling[".list"] = true;

$tdataretblcooling[".inlineEdit"] = true;


$tdataretblcooling[".reorderRecordsByHeader"] = true;
$tdataretblcooling[".createSortByDropdown"] = true;
$tdataretblcooling[".strSortControlSettingsJSON"] = "";



$tdataretblcooling[".inlineAdd"] = true;
$tdataretblcooling[".view"] = true;




$tdataretblcooling[".delete"] = true;

$tdataretblcooling[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblcooling[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblcooling[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblcooling[".searchSaving"] = false;
//

$tdataretblcooling[".showSearchPanel"] = true;
		$tdataretblcooling[".flexibleSearch"] = true;

$tdataretblcooling[".isUseAjaxSuggest"] = true;

$tdataretblcooling[".rowHighlite"] = true;



	

$tdataretblcooling[".ajaxCodeSnippetAdded"] = false;

$tdataretblcooling[".buttonsAdded"] = false;

$tdataretblcooling[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretblcooling[".isUseTimeForSearch"] = false;



$tdataretblcooling[".badgeColor"] = "CD5C5C";


$tdataretblcooling[".allSearchFields"] = array();
$tdataretblcooling[".filterFields"] = array();
$tdataretblcooling[".requiredSearchFields"] = array();



$tdataretblcooling[".googleLikeFields"] = array();
$tdataretblcooling[".googleLikeFields"][] = "Cooling";



$tdataretblcooling[".tableType"] = "list";

$tdataretblcooling[".printerPageOrientation"] = 0;
$tdataretblcooling[".nPrinterPageScale"] = 100;

$tdataretblcooling[".nPrinterSplitRecords"] = 40;

$tdataretblcooling[".nPrinterPDFSplitRecords"] = 40;



$tdataretblcooling[".geocodingEnabled"] = false;





$tdataretblcooling[".listGridLayout"] = 3;


$tdataretblcooling[".isResizeColumns"] = true;

$tdataretblcooling[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretblcooling[".pageSize"] = 20;

$tdataretblcooling[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblcooling[".strOrderBy"] = $tstrOrderBy;

$tdataretblcooling[".orderindexes"] = array();

$tdataretblcooling[".sqlHead"] = "select Cooling,  CoolingID";
$tdataretblcooling[".sqlFrom"] = "FROM retblcooling";
$tdataretblcooling[".sqlWhereExpr"] = "";
$tdataretblcooling[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblcooling[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblcooling[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblcooling = array();
$tableKeysretblcooling[] = "CoolingID";
$tdataretblcooling[".Keys"] = $tableKeysretblcooling;

$tdataretblcooling[".listFields"] = array();
$tdataretblcooling[".listFields"][] = "Cooling";

$tdataretblcooling[".hideMobileList"] = array();


$tdataretblcooling[".viewFields"] = array();
$tdataretblcooling[".viewFields"][] = "Cooling";

$tdataretblcooling[".addFields"] = array();
$tdataretblcooling[".addFields"][] = "Cooling";

$tdataretblcooling[".masterListFields"] = array();

$tdataretblcooling[".inlineAddFields"] = array();
$tdataretblcooling[".inlineAddFields"][] = "Cooling";

$tdataretblcooling[".editFields"] = array();
$tdataretblcooling[".editFields"][] = "Cooling";

$tdataretblcooling[".inlineEditFields"] = array();
$tdataretblcooling[".inlineEditFields"][] = "Cooling";

$tdataretblcooling[".updateSelectedFields"] = array();
$tdataretblcooling[".updateSelectedFields"][] = "Cooling";


$tdataretblcooling[".exportFields"] = array();

$tdataretblcooling[".importFields"] = array();
$tdataretblcooling[".importFields"][] = "Cooling";
$tdataretblcooling[".importFields"][] = "CoolingID";

$tdataretblcooling[".printFields"] = array();

//	Cooling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cooling";
	$fdata["GoodName"] = "Cooling";
	$fdata["ownerTable"] = "retblcooling";
	$fdata["Label"] = GetFieldLabel("retblcooling","Cooling");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Cooling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cooling";

	
	
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

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataretblcooling["Cooling"] = $fdata;
//	CoolingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CoolingID";
	$fdata["GoodName"] = "CoolingID";
	$fdata["ownerTable"] = "retblcooling";
	$fdata["Label"] = GetFieldLabel("retblcooling","CoolingID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "CoolingID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CoolingID";

	
	
			
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








	$tdataretblcooling["CoolingID"] = $fdata;


$tables_data["retblcooling"]=&$tdataretblcooling;
$field_labels["retblcooling"] = &$fieldLabelsretblcooling;
$fieldToolTips["retblcooling"] = &$fieldToolTipsretblcooling;
$placeHolders["retblcooling"] = &$placeHoldersretblcooling;
$page_titles["retblcooling"] = &$pageTitlesretblcooling;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblcooling"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblcooling"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblcooling()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Cooling,  CoolingID";
$proto0["m_strFrom"] = "FROM retblcooling";
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
	"m_strName" => "Cooling",
	"m_strTable" => "retblcooling",
	"m_srcTableName" => "retblcooling"
));

$proto6["m_sql"] = "Cooling";
$proto6["m_srcTableName"] = "retblcooling";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CoolingID",
	"m_strTable" => "retblcooling",
	"m_srcTableName" => "retblcooling"
));

$proto8["m_sql"] = "CoolingID";
$proto8["m_srcTableName"] = "retblcooling";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retblcooling";
$proto11["m_srcTableName"] = "retblcooling";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Cooling";
$proto11["m_columns"][] = "CoolingID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retblcooling";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retblcooling";
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
$proto0["m_srcTableName"]="retblcooling";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblcooling = createSqlQuery_retblcooling();


	
						;

		

$tdataretblcooling[".sqlquery"] = $queryData_retblcooling;

$tableEvents["retblcooling"] = new eventsBase;
$tdataretblcooling[".hasEvents"] = false;

?>
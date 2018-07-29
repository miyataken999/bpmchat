<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblheating = array();
	$tdataretblheating[".truncateText"] = true;
	$tdataretblheating[".NumberOfChars"] = 80;
	$tdataretblheating[".ShortName"] = "retblheating";
	$tdataretblheating[".OwnerID"] = "";
	$tdataretblheating[".OriginalTable"] = "retblheating";

//	field labels
$fieldLabelsretblheating = array();
$fieldToolTipsretblheating = array();
$pageTitlesretblheating = array();
$placeHoldersretblheating = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblheating["Japanese"] = array();
	$fieldToolTipsretblheating["Japanese"] = array();
	$placeHoldersretblheating["Japanese"] = array();
	$pageTitlesretblheating["Japanese"] = array();
	$fieldLabelsretblheating["Japanese"]["Heating"] = "加熱";
	$fieldToolTipsretblheating["Japanese"]["Heating"] = "";
	$placeHoldersretblheating["Japanese"]["Heating"] = "";
	$fieldLabelsretblheating["Japanese"]["HeatingID"] = "加熱ID";
	$fieldToolTipsretblheating["Japanese"]["HeatingID"] = "";
	$placeHoldersretblheating["Japanese"]["HeatingID"] = "";
	if (count($fieldToolTipsretblheating["Japanese"]))
		$tdataretblheating[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblheating[""] = array();
	$fieldToolTipsretblheating[""] = array();
	$placeHoldersretblheating[""] = array();
	$pageTitlesretblheating[""] = array();
	if (count($fieldToolTipsretblheating[""]))
		$tdataretblheating[".isUseToolTips"] = true;
}





$tdataretblheating[".shortTableName"] = "retblheating";
$tdataretblheating[".nSecOptions"] = 0;
$tdataretblheating[".recsPerRowPrint"] = 1;
$tdataretblheating[".mainTableOwnerID"] = "";
$tdataretblheating[".moveNext"] = 1;
$tdataretblheating[".entityType"] = 0;

$tdataretblheating[".strOriginalTableName"] = "retblheating";

	



$tdataretblheating[".showAddInPopup"] = false;

$tdataretblheating[".showEditInPopup"] = false;

$tdataretblheating[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblheating[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblheating[".fieldsForRegister"] = array();

$tdataretblheating[".listAjax"] = false;

	$tdataretblheating[".audit"] = false;

	$tdataretblheating[".locking"] = false;

$tdataretblheating[".edit"] = true;
$tdataretblheating[".afterEditAction"] = 1;
$tdataretblheating[".closePopupAfterEdit"] = 1;
$tdataretblheating[".afterEditActionDetTable"] = "";

$tdataretblheating[".add"] = true;
$tdataretblheating[".afterAddAction"] = 1;
$tdataretblheating[".closePopupAfterAdd"] = 1;
$tdataretblheating[".afterAddActionDetTable"] = "";

$tdataretblheating[".list"] = true;

$tdataretblheating[".inlineEdit"] = true;


$tdataretblheating[".reorderRecordsByHeader"] = true;
$tdataretblheating[".createSortByDropdown"] = true;
$tdataretblheating[".strSortControlSettingsJSON"] = "";



$tdataretblheating[".inlineAdd"] = true;
$tdataretblheating[".view"] = true;




$tdataretblheating[".delete"] = true;

$tdataretblheating[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblheating[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblheating[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblheating[".searchSaving"] = false;
//

$tdataretblheating[".showSearchPanel"] = true;
		$tdataretblheating[".flexibleSearch"] = true;

$tdataretblheating[".isUseAjaxSuggest"] = true;

$tdataretblheating[".rowHighlite"] = true;



	

$tdataretblheating[".ajaxCodeSnippetAdded"] = false;

$tdataretblheating[".buttonsAdded"] = false;

$tdataretblheating[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretblheating[".isUseTimeForSearch"] = false;





$tdataretblheating[".allSearchFields"] = array();
$tdataretblheating[".filterFields"] = array();
$tdataretblheating[".requiredSearchFields"] = array();



$tdataretblheating[".googleLikeFields"] = array();
$tdataretblheating[".googleLikeFields"][] = "Heating";



$tdataretblheating[".tableType"] = "list";

$tdataretblheating[".printerPageOrientation"] = 0;
$tdataretblheating[".nPrinterPageScale"] = 100;

$tdataretblheating[".nPrinterSplitRecords"] = 40;

$tdataretblheating[".nPrinterPDFSplitRecords"] = 40;



$tdataretblheating[".geocodingEnabled"] = false;





$tdataretblheating[".listGridLayout"] = 3;


$tdataretblheating[".isResizeColumns"] = true;

$tdataretblheating[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretblheating[".pageSize"] = 20;

$tdataretblheating[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblheating[".strOrderBy"] = $tstrOrderBy;

$tdataretblheating[".orderindexes"] = array();

$tdataretblheating[".sqlHead"] = "select Heating,  HeatingID";
$tdataretblheating[".sqlFrom"] = "FROM retblheating";
$tdataretblheating[".sqlWhereExpr"] = "";
$tdataretblheating[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblheating[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblheating[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblheating = array();
$tableKeysretblheating[] = "HeatingID";
$tdataretblheating[".Keys"] = $tableKeysretblheating;

$tdataretblheating[".listFields"] = array();
$tdataretblheating[".listFields"][] = "Heating";

$tdataretblheating[".hideMobileList"] = array();


$tdataretblheating[".viewFields"] = array();
$tdataretblheating[".viewFields"][] = "Heating";

$tdataretblheating[".addFields"] = array();
$tdataretblheating[".addFields"][] = "Heating";

$tdataretblheating[".masterListFields"] = array();

$tdataretblheating[".inlineAddFields"] = array();
$tdataretblheating[".inlineAddFields"][] = "Heating";

$tdataretblheating[".editFields"] = array();
$tdataretblheating[".editFields"][] = "Heating";

$tdataretblheating[".inlineEditFields"] = array();
$tdataretblheating[".inlineEditFields"][] = "Heating";

$tdataretblheating[".updateSelectedFields"] = array();
$tdataretblheating[".updateSelectedFields"][] = "Heating";


$tdataretblheating[".exportFields"] = array();

$tdataretblheating[".importFields"] = array();
$tdataretblheating[".importFields"][] = "Heating";
$tdataretblheating[".importFields"][] = "HeatingID";

$tdataretblheating[".printFields"] = array();

//	Heating
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Heating";
	$fdata["GoodName"] = "Heating";
	$fdata["ownerTable"] = "retblheating";
	$fdata["Label"] = GetFieldLabel("retblheating","Heating");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Heating";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Heating";

	
	
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








	$tdataretblheating["Heating"] = $fdata;
//	HeatingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HeatingID";
	$fdata["GoodName"] = "HeatingID";
	$fdata["ownerTable"] = "retblheating";
	$fdata["Label"] = GetFieldLabel("retblheating","HeatingID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "HeatingID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HeatingID";

	
	
			
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








	$tdataretblheating["HeatingID"] = $fdata;


$tables_data["retblheating"]=&$tdataretblheating;
$field_labels["retblheating"] = &$fieldLabelsretblheating;
$fieldToolTips["retblheating"] = &$fieldToolTipsretblheating;
$placeHolders["retblheating"] = &$placeHoldersretblheating;
$page_titles["retblheating"] = &$pageTitlesretblheating;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblheating"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblheating"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblheating()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Heating,  HeatingID";
$proto0["m_strFrom"] = "FROM retblheating";
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
	"m_strName" => "Heating",
	"m_strTable" => "retblheating",
	"m_srcTableName" => "retblheating"
));

$proto6["m_sql"] = "Heating";
$proto6["m_srcTableName"] = "retblheating";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HeatingID",
	"m_strTable" => "retblheating",
	"m_srcTableName" => "retblheating"
));

$proto8["m_sql"] = "HeatingID";
$proto8["m_srcTableName"] = "retblheating";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retblheating";
$proto11["m_srcTableName"] = "retblheating";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Heating";
$proto11["m_columns"][] = "HeatingID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retblheating";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retblheating";
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
$proto0["m_srcTableName"]="retblheating";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblheating = createSqlQuery_retblheating();


	
						;

		

$tdataretblheating[".sqlquery"] = $queryData_retblheating;

$tableEvents["retblheating"] = new eventsBase;
$tdataretblheating[".hasEvents"] = false;

?>
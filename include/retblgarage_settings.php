<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblgarage = array();
	$tdataretblgarage[".truncateText"] = true;
	$tdataretblgarage[".NumberOfChars"] = 80;
	$tdataretblgarage[".ShortName"] = "retblgarage";
	$tdataretblgarage[".OwnerID"] = "";
	$tdataretblgarage[".OriginalTable"] = "retblgarage";

//	field labels
$fieldLabelsretblgarage = array();
$fieldToolTipsretblgarage = array();
$pageTitlesretblgarage = array();
$placeHoldersretblgarage = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblgarage["Japanese"] = array();
	$fieldToolTipsretblgarage["Japanese"] = array();
	$placeHoldersretblgarage["Japanese"] = array();
	$pageTitlesretblgarage["Japanese"] = array();
	$fieldLabelsretblgarage["Japanese"]["Garage"] = "ガレージ";
	$fieldToolTipsretblgarage["Japanese"]["Garage"] = "";
	$placeHoldersretblgarage["Japanese"]["Garage"] = "";
	$fieldLabelsretblgarage["Japanese"]["GarageID"] = "ガレージID";
	$fieldToolTipsretblgarage["Japanese"]["GarageID"] = "";
	$placeHoldersretblgarage["Japanese"]["GarageID"] = "";
	if (count($fieldToolTipsretblgarage["Japanese"]))
		$tdataretblgarage[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblgarage[""] = array();
	$fieldToolTipsretblgarage[""] = array();
	$placeHoldersretblgarage[""] = array();
	$pageTitlesretblgarage[""] = array();
	if (count($fieldToolTipsretblgarage[""]))
		$tdataretblgarage[".isUseToolTips"] = true;
}





$tdataretblgarage[".shortTableName"] = "retblgarage";
$tdataretblgarage[".nSecOptions"] = 0;
$tdataretblgarage[".recsPerRowPrint"] = 1;
$tdataretblgarage[".mainTableOwnerID"] = "";
$tdataretblgarage[".moveNext"] = 1;
$tdataretblgarage[".entityType"] = 0;

$tdataretblgarage[".strOriginalTableName"] = "retblgarage";

	



$tdataretblgarage[".showAddInPopup"] = false;

$tdataretblgarage[".showEditInPopup"] = false;

$tdataretblgarage[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblgarage[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblgarage[".fieldsForRegister"] = array();

$tdataretblgarage[".listAjax"] = false;

	$tdataretblgarage[".audit"] = false;

	$tdataretblgarage[".locking"] = false;

$tdataretblgarage[".edit"] = true;
$tdataretblgarage[".afterEditAction"] = 1;
$tdataretblgarage[".closePopupAfterEdit"] = 1;
$tdataretblgarage[".afterEditActionDetTable"] = "";

$tdataretblgarage[".add"] = true;
$tdataretblgarage[".afterAddAction"] = 1;
$tdataretblgarage[".closePopupAfterAdd"] = 1;
$tdataretblgarage[".afterAddActionDetTable"] = "";

$tdataretblgarage[".list"] = true;

$tdataretblgarage[".inlineEdit"] = true;


$tdataretblgarage[".reorderRecordsByHeader"] = true;
$tdataretblgarage[".createSortByDropdown"] = true;
$tdataretblgarage[".strSortControlSettingsJSON"] = "";



$tdataretblgarage[".inlineAdd"] = true;
$tdataretblgarage[".view"] = true;




$tdataretblgarage[".delete"] = true;

$tdataretblgarage[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblgarage[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblgarage[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblgarage[".searchSaving"] = false;
//

$tdataretblgarage[".showSearchPanel"] = true;
		$tdataretblgarage[".flexibleSearch"] = true;

$tdataretblgarage[".isUseAjaxSuggest"] = true;

$tdataretblgarage[".rowHighlite"] = true;



	

$tdataretblgarage[".ajaxCodeSnippetAdded"] = false;

$tdataretblgarage[".buttonsAdded"] = false;

$tdataretblgarage[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretblgarage[".isUseTimeForSearch"] = false;



$tdataretblgarage[".badgeColor"] = "008B8B";


$tdataretblgarage[".allSearchFields"] = array();
$tdataretblgarage[".filterFields"] = array();
$tdataretblgarage[".requiredSearchFields"] = array();



$tdataretblgarage[".googleLikeFields"] = array();
$tdataretblgarage[".googleLikeFields"][] = "Garage";



$tdataretblgarage[".tableType"] = "list";

$tdataretblgarage[".printerPageOrientation"] = 0;
$tdataretblgarage[".nPrinterPageScale"] = 100;

$tdataretblgarage[".nPrinterSplitRecords"] = 40;

$tdataretblgarage[".nPrinterPDFSplitRecords"] = 40;



$tdataretblgarage[".geocodingEnabled"] = false;





$tdataretblgarage[".listGridLayout"] = 3;


$tdataretblgarage[".isResizeColumns"] = true;

$tdataretblgarage[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretblgarage[".pageSize"] = 20;

$tdataretblgarage[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblgarage[".strOrderBy"] = $tstrOrderBy;

$tdataretblgarage[".orderindexes"] = array();

$tdataretblgarage[".sqlHead"] = "select Garage,  GarageID";
$tdataretblgarage[".sqlFrom"] = "FROM retblgarage";
$tdataretblgarage[".sqlWhereExpr"] = "";
$tdataretblgarage[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblgarage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblgarage[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblgarage = array();
$tableKeysretblgarage[] = "GarageID";
$tdataretblgarage[".Keys"] = $tableKeysretblgarage;

$tdataretblgarage[".listFields"] = array();
$tdataretblgarage[".listFields"][] = "Garage";

$tdataretblgarage[".hideMobileList"] = array();


$tdataretblgarage[".viewFields"] = array();
$tdataretblgarage[".viewFields"][] = "Garage";

$tdataretblgarage[".addFields"] = array();
$tdataretblgarage[".addFields"][] = "Garage";

$tdataretblgarage[".masterListFields"] = array();

$tdataretblgarage[".inlineAddFields"] = array();
$tdataretblgarage[".inlineAddFields"][] = "Garage";

$tdataretblgarage[".editFields"] = array();
$tdataretblgarage[".editFields"][] = "Garage";

$tdataretblgarage[".inlineEditFields"] = array();
$tdataretblgarage[".inlineEditFields"][] = "Garage";

$tdataretblgarage[".updateSelectedFields"] = array();
$tdataretblgarage[".updateSelectedFields"][] = "Garage";


$tdataretblgarage[".exportFields"] = array();

$tdataretblgarage[".importFields"] = array();
$tdataretblgarage[".importFields"][] = "Garage";
$tdataretblgarage[".importFields"][] = "GarageID";

$tdataretblgarage[".printFields"] = array();

//	Garage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Garage";
	$fdata["GoodName"] = "Garage";
	$fdata["ownerTable"] = "retblgarage";
	$fdata["Label"] = GetFieldLabel("retblgarage","Garage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Garage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Garage";

	
	
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








	$tdataretblgarage["Garage"] = $fdata;
//	GarageID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GarageID";
	$fdata["GoodName"] = "GarageID";
	$fdata["ownerTable"] = "retblgarage";
	$fdata["Label"] = GetFieldLabel("retblgarage","GarageID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "GarageID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GarageID";

	
	
			
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








	$tdataretblgarage["GarageID"] = $fdata;


$tables_data["retblgarage"]=&$tdataretblgarage;
$field_labels["retblgarage"] = &$fieldLabelsretblgarage;
$fieldToolTips["retblgarage"] = &$fieldToolTipsretblgarage;
$placeHolders["retblgarage"] = &$placeHoldersretblgarage;
$page_titles["retblgarage"] = &$pageTitlesretblgarage;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblgarage"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblgarage"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblgarage()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Garage,  GarageID";
$proto0["m_strFrom"] = "FROM retblgarage";
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
	"m_strName" => "Garage",
	"m_strTable" => "retblgarage",
	"m_srcTableName" => "retblgarage"
));

$proto6["m_sql"] = "Garage";
$proto6["m_srcTableName"] = "retblgarage";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GarageID",
	"m_strTable" => "retblgarage",
	"m_srcTableName" => "retblgarage"
));

$proto8["m_sql"] = "GarageID";
$proto8["m_srcTableName"] = "retblgarage";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retblgarage";
$proto11["m_srcTableName"] = "retblgarage";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Garage";
$proto11["m_columns"][] = "GarageID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retblgarage";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retblgarage";
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
$proto0["m_srcTableName"]="retblgarage";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblgarage = createSqlQuery_retblgarage();


	
						;

		

$tdataretblgarage[".sqlquery"] = $queryData_retblgarage;

$tableEvents["retblgarage"] = new eventsBase;
$tdataretblgarage[".hasEvents"] = false;

?>
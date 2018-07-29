<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblbathrooms = array();
	$tdataretblbathrooms[".truncateText"] = true;
	$tdataretblbathrooms[".NumberOfChars"] = 80;
	$tdataretblbathrooms[".ShortName"] = "retblbathrooms";
	$tdataretblbathrooms[".OwnerID"] = "";
	$tdataretblbathrooms[".OriginalTable"] = "retblbathrooms";

//	field labels
$fieldLabelsretblbathrooms = array();
$fieldToolTipsretblbathrooms = array();
$pageTitlesretblbathrooms = array();
$placeHoldersretblbathrooms = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblbathrooms["Japanese"] = array();
	$fieldToolTipsretblbathrooms["Japanese"] = array();
	$placeHoldersretblbathrooms["Japanese"] = array();
	$pageTitlesretblbathrooms["Japanese"] = array();
	$fieldLabelsretblbathrooms["Japanese"]["Bathrooms"] = "バスルーム";
	$fieldToolTipsretblbathrooms["Japanese"]["Bathrooms"] = "";
	$placeHoldersretblbathrooms["Japanese"]["Bathrooms"] = "";
	$fieldLabelsretblbathrooms["Japanese"]["BathroomsID"] = "バスルームのid";
	$fieldToolTipsretblbathrooms["Japanese"]["BathroomsID"] = "";
	$placeHoldersretblbathrooms["Japanese"]["BathroomsID"] = "";
	if (count($fieldToolTipsretblbathrooms["Japanese"]))
		$tdataretblbathrooms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblbathrooms[""] = array();
	$fieldToolTipsretblbathrooms[""] = array();
	$placeHoldersretblbathrooms[""] = array();
	$pageTitlesretblbathrooms[""] = array();
	if (count($fieldToolTipsretblbathrooms[""]))
		$tdataretblbathrooms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsretblbathrooms["English"] = array();
	$fieldToolTipsretblbathrooms["English"] = array();
	$placeHoldersretblbathrooms["English"] = array();
	$pageTitlesretblbathrooms["English"] = array();
	if (count($fieldToolTipsretblbathrooms["English"]))
		$tdataretblbathrooms[".isUseToolTips"] = true;
}





$tdataretblbathrooms[".shortTableName"] = "retblbathrooms";
$tdataretblbathrooms[".nSecOptions"] = 0;
$tdataretblbathrooms[".recsPerRowPrint"] = 1;
$tdataretblbathrooms[".mainTableOwnerID"] = "";
$tdataretblbathrooms[".moveNext"] = 1;
$tdataretblbathrooms[".entityType"] = 0;

$tdataretblbathrooms[".strOriginalTableName"] = "retblbathrooms";

	



$tdataretblbathrooms[".showAddInPopup"] = false;

$tdataretblbathrooms[".showEditInPopup"] = false;

$tdataretblbathrooms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblbathrooms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblbathrooms[".fieldsForRegister"] = array();

$tdataretblbathrooms[".listAjax"] = false;

	$tdataretblbathrooms[".audit"] = true;

	$tdataretblbathrooms[".locking"] = false;

$tdataretblbathrooms[".edit"] = true;
$tdataretblbathrooms[".afterEditAction"] = 1;
$tdataretblbathrooms[".closePopupAfterEdit"] = 1;
$tdataretblbathrooms[".afterEditActionDetTable"] = "";

$tdataretblbathrooms[".add"] = true;
$tdataretblbathrooms[".afterAddAction"] = 1;
$tdataretblbathrooms[".closePopupAfterAdd"] = 1;
$tdataretblbathrooms[".afterAddActionDetTable"] = "";

$tdataretblbathrooms[".list"] = true;

$tdataretblbathrooms[".inlineEdit"] = true;


$tdataretblbathrooms[".reorderRecordsByHeader"] = true;
$tdataretblbathrooms[".createSortByDropdown"] = true;
$tdataretblbathrooms[".strSortControlSettingsJSON"] = "";



$tdataretblbathrooms[".inlineAdd"] = true;
$tdataretblbathrooms[".view"] = true;




$tdataretblbathrooms[".delete"] = true;

$tdataretblbathrooms[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblbathrooms[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblbathrooms[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblbathrooms[".searchSaving"] = false;
//

$tdataretblbathrooms[".showSearchPanel"] = true;
		$tdataretblbathrooms[".flexibleSearch"] = true;

$tdataretblbathrooms[".isUseAjaxSuggest"] = true;

$tdataretblbathrooms[".rowHighlite"] = true;



	

$tdataretblbathrooms[".ajaxCodeSnippetAdded"] = false;

$tdataretblbathrooms[".buttonsAdded"] = false;

$tdataretblbathrooms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretblbathrooms[".isUseTimeForSearch"] = false;



$tdataretblbathrooms[".badgeColor"] = "B22222";


$tdataretblbathrooms[".allSearchFields"] = array();
$tdataretblbathrooms[".filterFields"] = array();
$tdataretblbathrooms[".requiredSearchFields"] = array();



$tdataretblbathrooms[".googleLikeFields"] = array();
$tdataretblbathrooms[".googleLikeFields"][] = "Bathrooms";



$tdataretblbathrooms[".tableType"] = "list";

$tdataretblbathrooms[".printerPageOrientation"] = 0;
$tdataretblbathrooms[".nPrinterPageScale"] = 100;

$tdataretblbathrooms[".nPrinterSplitRecords"] = 40;

$tdataretblbathrooms[".nPrinterPDFSplitRecords"] = 40;



$tdataretblbathrooms[".geocodingEnabled"] = false;





$tdataretblbathrooms[".listGridLayout"] = 3;


$tdataretblbathrooms[".isResizeColumns"] = true;

$tdataretblbathrooms[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretblbathrooms[".pageSize"] = 20;

$tdataretblbathrooms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblbathrooms[".strOrderBy"] = $tstrOrderBy;

$tdataretblbathrooms[".orderindexes"] = array();

$tdataretblbathrooms[".sqlHead"] = "select Bathrooms,  BathroomsID";
$tdataretblbathrooms[".sqlFrom"] = "FROM retblbathrooms";
$tdataretblbathrooms[".sqlWhereExpr"] = "";
$tdataretblbathrooms[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblbathrooms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblbathrooms[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblbathrooms = array();
$tableKeysretblbathrooms[] = "BathroomsID";
$tdataretblbathrooms[".Keys"] = $tableKeysretblbathrooms;

$tdataretblbathrooms[".listFields"] = array();
$tdataretblbathrooms[".listFields"][] = "Bathrooms";

$tdataretblbathrooms[".hideMobileList"] = array();


$tdataretblbathrooms[".viewFields"] = array();
$tdataretblbathrooms[".viewFields"][] = "Bathrooms";

$tdataretblbathrooms[".addFields"] = array();
$tdataretblbathrooms[".addFields"][] = "Bathrooms";

$tdataretblbathrooms[".masterListFields"] = array();

$tdataretblbathrooms[".inlineAddFields"] = array();
$tdataretblbathrooms[".inlineAddFields"][] = "Bathrooms";

$tdataretblbathrooms[".editFields"] = array();
$tdataretblbathrooms[".editFields"][] = "Bathrooms";

$tdataretblbathrooms[".inlineEditFields"] = array();
$tdataretblbathrooms[".inlineEditFields"][] = "Bathrooms";

$tdataretblbathrooms[".updateSelectedFields"] = array();
$tdataretblbathrooms[".updateSelectedFields"][] = "Bathrooms";


$tdataretblbathrooms[".exportFields"] = array();

$tdataretblbathrooms[".importFields"] = array();

$tdataretblbathrooms[".printFields"] = array();

//	Bathrooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Bathrooms";
	$fdata["GoodName"] = "Bathrooms";
	$fdata["ownerTable"] = "retblbathrooms";
	$fdata["Label"] = GetFieldLabel("retblbathrooms","Bathrooms");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Bathrooms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bathrooms";

	
	
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








	$tdataretblbathrooms["Bathrooms"] = $fdata;
//	BathroomsID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BathroomsID";
	$fdata["GoodName"] = "BathroomsID";
	$fdata["ownerTable"] = "retblbathrooms";
	$fdata["Label"] = GetFieldLabel("retblbathrooms","BathroomsID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "BathroomsID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BathroomsID";

	
	
			
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








	$tdataretblbathrooms["BathroomsID"] = $fdata;


$tables_data["retblbathrooms"]=&$tdataretblbathrooms;
$field_labels["retblbathrooms"] = &$fieldLabelsretblbathrooms;
$fieldToolTips["retblbathrooms"] = &$fieldToolTipsretblbathrooms;
$placeHolders["retblbathrooms"] = &$placeHoldersretblbathrooms;
$page_titles["retblbathrooms"] = &$pageTitlesretblbathrooms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblbathrooms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblbathrooms"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblbathrooms()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Bathrooms,  BathroomsID";
$proto0["m_strFrom"] = "FROM retblbathrooms";
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
	"m_strName" => "Bathrooms",
	"m_strTable" => "retblbathrooms",
	"m_srcTableName" => "retblbathrooms"
));

$proto6["m_sql"] = "Bathrooms";
$proto6["m_srcTableName"] = "retblbathrooms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BathroomsID",
	"m_strTable" => "retblbathrooms",
	"m_srcTableName" => "retblbathrooms"
));

$proto8["m_sql"] = "BathroomsID";
$proto8["m_srcTableName"] = "retblbathrooms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retblbathrooms";
$proto11["m_srcTableName"] = "retblbathrooms";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Bathrooms";
$proto11["m_columns"][] = "BathroomsID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retblbathrooms";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retblbathrooms";
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
$proto0["m_srcTableName"]="retblbathrooms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblbathrooms = createSqlQuery_retblbathrooms();


	
						;

		

$tdataretblbathrooms[".sqlquery"] = $queryData_retblbathrooms;

$tableEvents["retblbathrooms"] = new eventsBase;
$tdataretblbathrooms[".hasEvents"] = false;

?>
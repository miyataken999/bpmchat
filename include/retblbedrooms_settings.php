<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretblbedrooms = array();
	$tdataretblbedrooms[".truncateText"] = true;
	$tdataretblbedrooms[".NumberOfChars"] = 80;
	$tdataretblbedrooms[".ShortName"] = "retblbedrooms";
	$tdataretblbedrooms[".OwnerID"] = "";
	$tdataretblbedrooms[".OriginalTable"] = "retblbedrooms";

//	field labels
$fieldLabelsretblbedrooms = array();
$fieldToolTipsretblbedrooms = array();
$pageTitlesretblbedrooms = array();
$placeHoldersretblbedrooms = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretblbedrooms["Japanese"] = array();
	$fieldToolTipsretblbedrooms["Japanese"] = array();
	$placeHoldersretblbedrooms["Japanese"] = array();
	$pageTitlesretblbedrooms["Japanese"] = array();
	$fieldLabelsretblbedrooms["Japanese"]["Bedrooms"] = "ベッドルーム";
	$fieldToolTipsretblbedrooms["Japanese"]["Bedrooms"] = "";
	$placeHoldersretblbedrooms["Japanese"]["Bedrooms"] = "";
	$fieldLabelsretblbedrooms["Japanese"]["BedroomsID"] = "寝室のid";
	$fieldToolTipsretblbedrooms["Japanese"]["BedroomsID"] = "";
	$placeHoldersretblbedrooms["Japanese"]["BedroomsID"] = "";
	if (count($fieldToolTipsretblbedrooms["Japanese"]))
		$tdataretblbedrooms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretblbedrooms[""] = array();
	$fieldToolTipsretblbedrooms[""] = array();
	$placeHoldersretblbedrooms[""] = array();
	$pageTitlesretblbedrooms[""] = array();
	if (count($fieldToolTipsretblbedrooms[""]))
		$tdataretblbedrooms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsretblbedrooms["English"] = array();
	$fieldToolTipsretblbedrooms["English"] = array();
	$placeHoldersretblbedrooms["English"] = array();
	$pageTitlesretblbedrooms["English"] = array();
	if (count($fieldToolTipsretblbedrooms["English"]))
		$tdataretblbedrooms[".isUseToolTips"] = true;
}





$tdataretblbedrooms[".shortTableName"] = "retblbedrooms";
$tdataretblbedrooms[".nSecOptions"] = 0;
$tdataretblbedrooms[".recsPerRowPrint"] = 1;
$tdataretblbedrooms[".mainTableOwnerID"] = "";
$tdataretblbedrooms[".moveNext"] = 1;
$tdataretblbedrooms[".entityType"] = 0;

$tdataretblbedrooms[".strOriginalTableName"] = "retblbedrooms";

	



$tdataretblbedrooms[".showAddInPopup"] = false;

$tdataretblbedrooms[".showEditInPopup"] = false;

$tdataretblbedrooms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretblbedrooms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretblbedrooms[".fieldsForRegister"] = array();

$tdataretblbedrooms[".listAjax"] = false;

	$tdataretblbedrooms[".audit"] = true;

	$tdataretblbedrooms[".locking"] = false;

$tdataretblbedrooms[".edit"] = true;
$tdataretblbedrooms[".afterEditAction"] = 1;
$tdataretblbedrooms[".closePopupAfterEdit"] = 1;
$tdataretblbedrooms[".afterEditActionDetTable"] = "";

$tdataretblbedrooms[".add"] = true;
$tdataretblbedrooms[".afterAddAction"] = 1;
$tdataretblbedrooms[".closePopupAfterAdd"] = 1;
$tdataretblbedrooms[".afterAddActionDetTable"] = "";

$tdataretblbedrooms[".list"] = true;

$tdataretblbedrooms[".inlineEdit"] = true;


$tdataretblbedrooms[".reorderRecordsByHeader"] = true;
$tdataretblbedrooms[".createSortByDropdown"] = true;
$tdataretblbedrooms[".strSortControlSettingsJSON"] = "";



$tdataretblbedrooms[".inlineAdd"] = true;
$tdataretblbedrooms[".view"] = true;




$tdataretblbedrooms[".delete"] = true;

$tdataretblbedrooms[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretblbedrooms[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretblbedrooms[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretblbedrooms[".searchSaving"] = false;
//

$tdataretblbedrooms[".showSearchPanel"] = true;
		$tdataretblbedrooms[".flexibleSearch"] = true;

$tdataretblbedrooms[".isUseAjaxSuggest"] = true;

$tdataretblbedrooms[".rowHighlite"] = true;



	

$tdataretblbedrooms[".ajaxCodeSnippetAdded"] = false;

$tdataretblbedrooms[".buttonsAdded"] = false;

$tdataretblbedrooms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretblbedrooms[".isUseTimeForSearch"] = false;



$tdataretblbedrooms[".badgeColor"] = "00C2C5";


$tdataretblbedrooms[".allSearchFields"] = array();
$tdataretblbedrooms[".filterFields"] = array();
$tdataretblbedrooms[".requiredSearchFields"] = array();



$tdataretblbedrooms[".googleLikeFields"] = array();
$tdataretblbedrooms[".googleLikeFields"][] = "Bedrooms";



$tdataretblbedrooms[".tableType"] = "list";

$tdataretblbedrooms[".printerPageOrientation"] = 0;
$tdataretblbedrooms[".nPrinterPageScale"] = 100;

$tdataretblbedrooms[".nPrinterSplitRecords"] = 40;

$tdataretblbedrooms[".nPrinterPDFSplitRecords"] = 40;



$tdataretblbedrooms[".geocodingEnabled"] = false;





$tdataretblbedrooms[".listGridLayout"] = 3;


$tdataretblbedrooms[".isResizeColumns"] = true;

$tdataretblbedrooms[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretblbedrooms[".pageSize"] = 20;

$tdataretblbedrooms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretblbedrooms[".strOrderBy"] = $tstrOrderBy;

$tdataretblbedrooms[".orderindexes"] = array();

$tdataretblbedrooms[".sqlHead"] = "select Bedrooms,  BedroomsID";
$tdataretblbedrooms[".sqlFrom"] = "FROM retblbedrooms";
$tdataretblbedrooms[".sqlWhereExpr"] = "";
$tdataretblbedrooms[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretblbedrooms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretblbedrooms[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretblbedrooms = array();
$tableKeysretblbedrooms[] = "BedroomsID";
$tdataretblbedrooms[".Keys"] = $tableKeysretblbedrooms;

$tdataretblbedrooms[".listFields"] = array();
$tdataretblbedrooms[".listFields"][] = "Bedrooms";

$tdataretblbedrooms[".hideMobileList"] = array();


$tdataretblbedrooms[".viewFields"] = array();
$tdataretblbedrooms[".viewFields"][] = "Bedrooms";

$tdataretblbedrooms[".addFields"] = array();
$tdataretblbedrooms[".addFields"][] = "Bedrooms";

$tdataretblbedrooms[".masterListFields"] = array();

$tdataretblbedrooms[".inlineAddFields"] = array();
$tdataretblbedrooms[".inlineAddFields"][] = "Bedrooms";

$tdataretblbedrooms[".editFields"] = array();
$tdataretblbedrooms[".editFields"][] = "Bedrooms";

$tdataretblbedrooms[".inlineEditFields"] = array();
$tdataretblbedrooms[".inlineEditFields"][] = "Bedrooms";

$tdataretblbedrooms[".updateSelectedFields"] = array();
$tdataretblbedrooms[".updateSelectedFields"][] = "Bedrooms";


$tdataretblbedrooms[".exportFields"] = array();

$tdataretblbedrooms[".importFields"] = array();
$tdataretblbedrooms[".importFields"][] = "Bedrooms";
$tdataretblbedrooms[".importFields"][] = "BedroomsID";

$tdataretblbedrooms[".printFields"] = array();

//	Bedrooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Bedrooms";
	$fdata["GoodName"] = "Bedrooms";
	$fdata["ownerTable"] = "retblbedrooms";
	$fdata["Label"] = GetFieldLabel("retblbedrooms","Bedrooms");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Bedrooms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bedrooms";

	
	
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








	$tdataretblbedrooms["Bedrooms"] = $fdata;
//	BedroomsID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BedroomsID";
	$fdata["GoodName"] = "BedroomsID";
	$fdata["ownerTable"] = "retblbedrooms";
	$fdata["Label"] = GetFieldLabel("retblbedrooms","BedroomsID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "BedroomsID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BedroomsID";

	
	
			
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








	$tdataretblbedrooms["BedroomsID"] = $fdata;


$tables_data["retblbedrooms"]=&$tdataretblbedrooms;
$field_labels["retblbedrooms"] = &$fieldLabelsretblbedrooms;
$fieldToolTips["retblbedrooms"] = &$fieldToolTipsretblbedrooms;
$placeHolders["retblbedrooms"] = &$placeHoldersretblbedrooms;
$page_titles["retblbedrooms"] = &$pageTitlesretblbedrooms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retblbedrooms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retblbedrooms"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retblbedrooms()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Bedrooms,  BedroomsID";
$proto0["m_strFrom"] = "FROM retblbedrooms";
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
	"m_strName" => "Bedrooms",
	"m_strTable" => "retblbedrooms",
	"m_srcTableName" => "retblbedrooms"
));

$proto6["m_sql"] = "Bedrooms";
$proto6["m_srcTableName"] = "retblbedrooms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BedroomsID",
	"m_strTable" => "retblbedrooms",
	"m_srcTableName" => "retblbedrooms"
));

$proto8["m_sql"] = "BedroomsID";
$proto8["m_srcTableName"] = "retblbedrooms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retblbedrooms";
$proto11["m_srcTableName"] = "retblbedrooms";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Bedrooms";
$proto11["m_columns"][] = "BedroomsID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retblbedrooms";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retblbedrooms";
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
$proto0["m_srcTableName"]="retblbedrooms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retblbedrooms = createSqlQuery_retblbedrooms();


	
						;

		

$tdataretblbedrooms[".sqlquery"] = $queryData_retblbedrooms;

$tableEvents["retblbedrooms"] = new eventsBase;
$tdataretblbedrooms[".hasEvents"] = false;

?>
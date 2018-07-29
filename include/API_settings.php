<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPI = array();
	$tdataAPI[".truncateText"] = true;
	$tdataAPI[".NumberOfChars"] = 80;
	$tdataAPI[".ShortName"] = "API";
	$tdataAPI[".OwnerID"] = "";
	$tdataAPI[".OriginalTable"] = "API";

//	field labels
$fieldLabelsAPI = array();
$fieldToolTipsAPI = array();
$pageTitlesAPI = array();
$placeHoldersAPI = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPI["Japanese"] = array();
	$fieldToolTipsAPI["Japanese"] = array();
	$placeHoldersAPI["Japanese"] = array();
	$pageTitlesAPI["Japanese"] = array();
	$fieldLabelsAPI["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPI["Japanese"]["APP_UID"] = "";
	$placeHoldersAPI["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPI["Japanese"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsAPI["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPI["Japanese"]["DEL_INDEX"] = "";
	if (count($fieldToolTipsAPI["Japanese"]))
		$tdataAPI[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPI["English"] = array();
	$fieldToolTipsAPI["English"] = array();
	$placeHoldersAPI["English"] = array();
	$pageTitlesAPI["English"] = array();
	$fieldLabelsAPI["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPI["English"]["APP_UID"] = "";
	$placeHoldersAPI["English"]["APP_UID"] = "";
	$fieldLabelsAPI["English"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsAPI["English"]["DEL_INDEX"] = "";
	$placeHoldersAPI["English"]["DEL_INDEX"] = "";
	if (count($fieldToolTipsAPI["English"]))
		$tdataAPI[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPI[""] = array();
	$fieldToolTipsAPI[""] = array();
	$placeHoldersAPI[""] = array();
	$pageTitlesAPI[""] = array();
	$fieldLabelsAPI[""]["APP_UID"] = "APP UID";
	$fieldToolTipsAPI[""]["APP_UID"] = "";
	$placeHoldersAPI[""]["APP_UID"] = "";
	$fieldLabelsAPI[""]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsAPI[""]["DEL_INDEX"] = "";
	$placeHoldersAPI[""]["DEL_INDEX"] = "";
	if (count($fieldToolTipsAPI[""]))
		$tdataAPI[".isUseToolTips"] = true;
}


	$tdataAPI[".NCSearch"] = true;



$tdataAPI[".shortTableName"] = "API";
$tdataAPI[".nSecOptions"] = 0;
$tdataAPI[".recsPerRowPrint"] = 1;
$tdataAPI[".mainTableOwnerID"] = "";
$tdataAPI[".moveNext"] = 1;
$tdataAPI[".entityType"] = 0;

$tdataAPI[".strOriginalTableName"] = "API";

	



$tdataAPI[".showAddInPopup"] = false;

$tdataAPI[".showEditInPopup"] = false;

$tdataAPI[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPI[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPI[".fieldsForRegister"] = array();
	
$tdataAPI[".listAjax"] = false;

	$tdataAPI[".audit"] = false;

	$tdataAPI[".locking"] = false;



$tdataAPI[".list"] = true;



$tdataAPI[".reorderRecordsByHeader"] = true;




$tdataAPI[".import"] = true;

$tdataAPI[".exportTo"] = true;

$tdataAPI[".printFriendly"] = true;


$tdataAPI[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAPI[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAPI[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAPI[".searchSaving"] = false;
//

$tdataAPI[".showSearchPanel"] = true;
		$tdataAPI[".flexibleSearch"] = true;

$tdataAPI[".isUseAjaxSuggest"] = true;

$tdataAPI[".rowHighlite"] = true;



				

$tdataAPI[".ajaxCodeSnippetAdded"] = false;

$tdataAPI[".buttonsAdded"] = false;

$tdataAPI[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPI[".isUseTimeForSearch"] = false;





$tdataAPI[".allSearchFields"] = array();
$tdataAPI[".filterFields"] = array();
$tdataAPI[".requiredSearchFields"] = array();

$tdataAPI[".allSearchFields"][] = "APP_UID";
	$tdataAPI[".allSearchFields"][] = "DEL_INDEX";
	

$tdataAPI[".googleLikeFields"] = array();
$tdataAPI[".googleLikeFields"][] = "APP_UID";
$tdataAPI[".googleLikeFields"][] = "DEL_INDEX";


$tdataAPI[".advSearchFields"] = array();
$tdataAPI[".advSearchFields"][] = "APP_UID";
$tdataAPI[".advSearchFields"][] = "DEL_INDEX";

$tdataAPI[".tableType"] = "list";

$tdataAPI[".printerPageOrientation"] = 0;
$tdataAPI[".nPrinterPageScale"] = 100;

$tdataAPI[".nPrinterSplitRecords"] = 40;

$tdataAPI[".nPrinterPDFSplitRecords"] = 40;



$tdataAPI[".geocodingEnabled"] = false;





$tdataAPI[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataAPI[".pageSize"] = 20;

$tdataAPI[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPI[".strOrderBy"] = $tstrOrderBy;

$tdataAPI[".orderindexes"] = array();

$tdataAPI[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX";
$tdataAPI[".sqlFrom"] = "FROM API";
$tdataAPI[".sqlWhereExpr"] = "";
$tdataAPI[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPI[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPI[".arrGroupsPerPage"] = $arrGPP;

$tdataAPI[".highlightSearchResults"] = true;

$tableKeysAPI = array();
$tdataAPI[".Keys"] = $tableKeysAPI;

$tdataAPI[".listFields"] = array();
$tdataAPI[".listFields"][] = "APP_UID";
$tdataAPI[".listFields"][] = "DEL_INDEX";

$tdataAPI[".hideMobileList"] = array();


$tdataAPI[".viewFields"] = array();
$tdataAPI[".viewFields"][] = "APP_UID";
$tdataAPI[".viewFields"][] = "DEL_INDEX";

$tdataAPI[".addFields"] = array();
$tdataAPI[".addFields"][] = "APP_UID";
$tdataAPI[".addFields"][] = "DEL_INDEX";

$tdataAPI[".masterListFields"] = array();
$tdataAPI[".masterListFields"][] = "APP_UID";
$tdataAPI[".masterListFields"][] = "DEL_INDEX";

$tdataAPI[".inlineAddFields"] = array();
$tdataAPI[".inlineAddFields"][] = "APP_UID";
$tdataAPI[".inlineAddFields"][] = "DEL_INDEX";

$tdataAPI[".editFields"] = array();
$tdataAPI[".editFields"][] = "APP_UID";
$tdataAPI[".editFields"][] = "DEL_INDEX";

$tdataAPI[".inlineEditFields"] = array();
$tdataAPI[".inlineEditFields"][] = "APP_UID";
$tdataAPI[".inlineEditFields"][] = "DEL_INDEX";

$tdataAPI[".updateSelectedFields"] = array();
$tdataAPI[".updateSelectedFields"][] = "APP_UID";
$tdataAPI[".updateSelectedFields"][] = "DEL_INDEX";


$tdataAPI[".exportFields"] = array();
$tdataAPI[".exportFields"][] = "APP_UID";
$tdataAPI[".exportFields"][] = "DEL_INDEX";

$tdataAPI[".importFields"] = array();
$tdataAPI[".importFields"][] = "APP_UID";
$tdataAPI[".importFields"][] = "DEL_INDEX";

$tdataAPI[".printFields"] = array();
$tdataAPI[".printFields"][] = "APP_UID";
$tdataAPI[".printFields"][] = "DEL_INDEX";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "API";
	$fdata["Label"] = GetFieldLabel("API","APP_UID");
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

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
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




	$tdataAPI["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "API";
	$fdata["Label"] = GetFieldLabel("API","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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




	$tdataAPI["DEL_INDEX"] = $fdata;


$tables_data["API"]=&$tdataAPI;
$field_labels["API"] = &$fieldLabelsAPI;
$fieldToolTips["API"] = &$fieldToolTipsAPI;
$placeHolders["API"] = &$placeHoldersAPI;
$page_titles["API"] = &$pageTitlesAPI;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["API"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["API"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_API()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX";
$proto0["m_strFrom"] = "FROM API";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "API",
	"m_srcTableName" => "API"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "API";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "API",
	"m_srcTableName" => "API"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "API";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "API";
$proto11["m_srcTableName"] = "API";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "APP_UID";
$proto11["m_columns"][] = "DEL_INDEX";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "API";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "API";
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
$proto0["m_srcTableName"]="API";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_API = createSqlQuery_API();


	
						;

		

$tdataAPI[".sqlquery"] = $queryData_API;

$tableEvents["API"] = new eventsBase;
$tdataAPI[".hasEvents"] = false;

?>
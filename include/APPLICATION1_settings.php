<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPPLICATION1 = array();
	$tdataAPPLICATION1[".truncateText"] = true;
	$tdataAPPLICATION1[".NumberOfChars"] = 20;
	$tdataAPPLICATION1[".ShortName"] = "APPLICATION1";
	$tdataAPPLICATION1[".OwnerID"] = "";
	$tdataAPPLICATION1[".OriginalTable"] = "APPLICATION";

//	field labels
$fieldLabelsAPPLICATION1 = array();
$fieldToolTipsAPPLICATION1 = array();
$pageTitlesAPPLICATION1 = array();
$placeHoldersAPPLICATION1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPPLICATION1["Japanese"] = array();
	$fieldToolTipsAPPLICATION1["Japanese"] = array();
	$placeHoldersAPPLICATION1["Japanese"] = array();
	$pageTitlesAPPLICATION1["Japanese"] = array();
	$fieldLabelsAPPLICATION1["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPPLICATION1["Japanese"]["APP_UID"] = "";
	$placeHoldersAPPLICATION1["Japanese"]["APP_UID"] = "";
	if (count($fieldToolTipsAPPLICATION1["Japanese"]))
		$tdataAPPLICATION1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPPLICATION1["English"] = array();
	$fieldToolTipsAPPLICATION1["English"] = array();
	$placeHoldersAPPLICATION1["English"] = array();
	$pageTitlesAPPLICATION1["English"] = array();
	$fieldLabelsAPPLICATION1["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPPLICATION1["English"]["APP_UID"] = "";
	$placeHoldersAPPLICATION1["English"]["APP_UID"] = "";
	if (count($fieldToolTipsAPPLICATION1["English"]))
		$tdataAPPLICATION1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPPLICATION1[""] = array();
	$fieldToolTipsAPPLICATION1[""] = array();
	$placeHoldersAPPLICATION1[""] = array();
	$pageTitlesAPPLICATION1[""] = array();
	if (count($fieldToolTipsAPPLICATION1[""]))
		$tdataAPPLICATION1[".isUseToolTips"] = true;
}


	$tdataAPPLICATION1[".NCSearch"] = true;



$tdataAPPLICATION1[".shortTableName"] = "APPLICATION1";
$tdataAPPLICATION1[".nSecOptions"] = 0;
$tdataAPPLICATION1[".recsPerRowPrint"] = 1;
$tdataAPPLICATION1[".mainTableOwnerID"] = "";
$tdataAPPLICATION1[".moveNext"] = 0;
$tdataAPPLICATION1[".entityType"] = 1;

$tdataAPPLICATION1[".strOriginalTableName"] = "APPLICATION";

	



$tdataAPPLICATION1[".showAddInPopup"] = false;

$tdataAPPLICATION1[".showEditInPopup"] = false;

$tdataAPPLICATION1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPPLICATION1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPPLICATION1[".fieldsForRegister"] = array();
	
$tdataAPPLICATION1[".listAjax"] = false;

	$tdataAPPLICATION1[".audit"] = true;

	$tdataAPPLICATION1[".locking"] = false;

$tdataAPPLICATION1[".edit"] = true;
$tdataAPPLICATION1[".afterEditAction"] = 1;
$tdataAPPLICATION1[".closePopupAfterEdit"] = 1;
$tdataAPPLICATION1[".afterEditActionDetTable"] = "";

$tdataAPPLICATION1[".add"] = true;
$tdataAPPLICATION1[".afterAddAction"] = 1;
$tdataAPPLICATION1[".closePopupAfterAdd"] = 1;
$tdataAPPLICATION1[".afterAddActionDetTable"] = "";

$tdataAPPLICATION1[".list"] = true;

$tdataAPPLICATION1[".inlineEdit"] = true;


$tdataAPPLICATION1[".reorderRecordsByHeader"] = true;
$tdataAPPLICATION1[".createSortByDropdown"] = true;
$tdataAPPLICATION1[".strSortControlSettingsJSON"] = "";



$tdataAPPLICATION1[".inlineAdd"] = true;
$tdataAPPLICATION1[".view"] = true;

$tdataAPPLICATION1[".import"] = true;

$tdataAPPLICATION1[".exportTo"] = true;

$tdataAPPLICATION1[".printFriendly"] = true;

$tdataAPPLICATION1[".delete"] = true;

$tdataAPPLICATION1[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPPLICATION1[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPPLICATION1[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPPLICATION1[".searchSaving"] = false;
//

$tdataAPPLICATION1[".showSearchPanel"] = true;
		$tdataAPPLICATION1[".flexibleSearch"] = true;

$tdataAPPLICATION1[".isUseAjaxSuggest"] = true;

$tdataAPPLICATION1[".rowHighlite"] = true;



				

$tdataAPPLICATION1[".ajaxCodeSnippetAdded"] = false;

$tdataAPPLICATION1[".buttonsAdded"] = false;

$tdataAPPLICATION1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPPLICATION1[".isUseTimeForSearch"] = false;





$tdataAPPLICATION1[".allSearchFields"] = array();
$tdataAPPLICATION1[".filterFields"] = array();
$tdataAPPLICATION1[".requiredSearchFields"] = array();

$tdataAPPLICATION1[".allSearchFields"][] = "APP_UID";
	

$tdataAPPLICATION1[".googleLikeFields"] = array();
$tdataAPPLICATION1[".googleLikeFields"][] = "APP_UID";


$tdataAPPLICATION1[".advSearchFields"] = array();
$tdataAPPLICATION1[".advSearchFields"][] = "APP_UID";

$tdataAPPLICATION1[".tableType"] = "list";

$tdataAPPLICATION1[".printerPageOrientation"] = 0;
$tdataAPPLICATION1[".nPrinterPageScale"] = 100;

$tdataAPPLICATION1[".nPrinterSplitRecords"] = 40;

$tdataAPPLICATION1[".nPrinterPDFSplitRecords"] = 40;



$tdataAPPLICATION1[".geocodingEnabled"] = false;





$tdataAPPLICATION1[".listGridLayout"] = 3;


$tdataAPPLICATION1[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPPLICATION1[".pageSize"] = 20;

$tdataAPPLICATION1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPPLICATION1[".strOrderBy"] = $tstrOrderBy;

$tdataAPPLICATION1[".orderindexes"] = array();

$tdataAPPLICATION1[".sqlHead"] = "SELECT APP_UID";
$tdataAPPLICATION1[".sqlFrom"] = "FROM APPLICATION";
$tdataAPPLICATION1[".sqlWhereExpr"] = "";
$tdataAPPLICATION1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPPLICATION1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPPLICATION1[".arrGroupsPerPage"] = $arrGPP;

$tdataAPPLICATION1[".highlightSearchResults"] = true;

$tableKeysAPPLICATION1 = array();
$tableKeysAPPLICATION1[] = "APP_UID";
$tdataAPPLICATION1[".Keys"] = $tableKeysAPPLICATION1;

$tdataAPPLICATION1[".listFields"] = array();

$tdataAPPLICATION1[".hideMobileList"] = array();


$tdataAPPLICATION1[".viewFields"] = array();
$tdataAPPLICATION1[".viewFields"][] = "APP_UID";

$tdataAPPLICATION1[".addFields"] = array();
$tdataAPPLICATION1[".addFields"][] = "APP_UID";

$tdataAPPLICATION1[".masterListFields"] = array();
$tdataAPPLICATION1[".masterListFields"][] = "APP_UID";

$tdataAPPLICATION1[".inlineAddFields"] = array();

$tdataAPPLICATION1[".editFields"] = array();
$tdataAPPLICATION1[".editFields"][] = "APP_UID";

$tdataAPPLICATION1[".inlineEditFields"] = array();

$tdataAPPLICATION1[".updateSelectedFields"] = array();
$tdataAPPLICATION1[".updateSelectedFields"][] = "APP_UID";


$tdataAPPLICATION1[".exportFields"] = array();
$tdataAPPLICATION1[".exportFields"][] = "APP_UID";

$tdataAPPLICATION1[".importFields"] = array();
$tdataAPPLICATION1[".importFields"][] = "APP_UID";

$tdataAPPLICATION1[".printFields"] = array();
$tdataAPPLICATION1[".printFields"][] = "APP_UID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APPLICATION";
	$fdata["Label"] = GetFieldLabel("APPLICATION1","APP_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataAPPLICATION1["APP_UID"] = $fdata;


$tables_data["APPLICATION1"]=&$tdataAPPLICATION1;
$field_labels["APPLICATION1"] = &$fieldLabelsAPPLICATION1;
$fieldToolTips["APPLICATION1"] = &$fieldToolTipsAPPLICATION1;
$placeHolders["APPLICATION1"] = &$placeHoldersAPPLICATION1;
$page_titles["APPLICATION1"] = &$pageTitlesAPPLICATION1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APPLICATION1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APPLICATION1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APPLICATION1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID";
$proto0["m_strFrom"] = "FROM APPLICATION";
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
	"m_strTable" => "APPLICATION",
	"m_srcTableName" => "APPLICATION1"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APPLICATION1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "APPLICATION";
$proto9["m_srcTableName"] = "APPLICATION1";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "APP_UID";
$proto9["m_columns"][] = "APP_TITLE";
$proto9["m_columns"][] = "APP_DESCRIPTION";
$proto9["m_columns"][] = "APP_NUMBER";
$proto9["m_columns"][] = "APP_PARENT";
$proto9["m_columns"][] = "APP_STATUS";
$proto9["m_columns"][] = "PRO_UID";
$proto9["m_columns"][] = "APP_PROC_STATUS";
$proto9["m_columns"][] = "APP_PROC_CODE";
$proto9["m_columns"][] = "APP_PARALLEL";
$proto9["m_columns"][] = "APP_INIT_USER";
$proto9["m_columns"][] = "APP_CUR_USER";
$proto9["m_columns"][] = "APP_CREATE_DATE";
$proto9["m_columns"][] = "APP_INIT_DATE";
$proto9["m_columns"][] = "APP_FINISH_DATE";
$proto9["m_columns"][] = "APP_UPDATE_DATE";
$proto9["m_columns"][] = "APP_DATA";
$proto9["m_columns"][] = "APP_PIN";
$proto9["m_columns"][] = "APP_DURATION";
$proto9["m_columns"][] = "APP_DELAY_DURATION";
$proto9["m_columns"][] = "APP_DRIVE_FOLDER_UID";
$proto9["m_columns"][] = "APP_ROUTING_DATA";
$proto9["m_columns"][] = "APP_STATUS_ID";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "APPLICATION";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "APPLICATION1";
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
$proto0["m_srcTableName"]="APPLICATION1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APPLICATION1 = createSqlQuery_APPLICATION1();


	
						;

	

$tdataAPPLICATION1[".sqlquery"] = $queryData_APPLICATION1;

include_once(getabspath("include/APPLICATION1_events.php"));
$tableEvents["APPLICATION1"] = new eventclass_APPLICATION1;
$tdataAPPLICATION1[".hasEvents"] = true;

?>
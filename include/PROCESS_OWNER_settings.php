<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPROCESS_OWNER = array();
	$tdataPROCESS_OWNER[".truncateText"] = true;
	$tdataPROCESS_OWNER[".NumberOfChars"] = 20;
	$tdataPROCESS_OWNER[".ShortName"] = "PROCESS_OWNER";
	$tdataPROCESS_OWNER[".OwnerID"] = "";
	$tdataPROCESS_OWNER[".OriginalTable"] = "PROCESS_OWNER";

//	field labels
$fieldLabelsPROCESS_OWNER = array();
$fieldToolTipsPROCESS_OWNER = array();
$pageTitlesPROCESS_OWNER = array();
$placeHoldersPROCESS_OWNER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPROCESS_OWNER["Japanese"] = array();
	$fieldToolTipsPROCESS_OWNER["Japanese"] = array();
	$placeHoldersPROCESS_OWNER["Japanese"] = array();
	$pageTitlesPROCESS_OWNER["Japanese"] = array();
	$fieldLabelsPROCESS_OWNER["Japanese"]["OWN_UID"] = "自分のuid";
	$fieldToolTipsPROCESS_OWNER["Japanese"]["OWN_UID"] = "";
	$placeHoldersPROCESS_OWNER["Japanese"]["OWN_UID"] = "";
	$fieldLabelsPROCESS_OWNER["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS_OWNER["Japanese"]["PRO_UID"] = "";
	$placeHoldersPROCESS_OWNER["Japanese"]["PRO_UID"] = "";
	if (count($fieldToolTipsPROCESS_OWNER["Japanese"]))
		$tdataPROCESS_OWNER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROCESS_OWNER["English"] = array();
	$fieldToolTipsPROCESS_OWNER["English"] = array();
	$placeHoldersPROCESS_OWNER["English"] = array();
	$pageTitlesPROCESS_OWNER["English"] = array();
	$fieldLabelsPROCESS_OWNER["English"]["OWN_UID"] = "自分のuid";
	$fieldToolTipsPROCESS_OWNER["English"]["OWN_UID"] = "";
	$placeHoldersPROCESS_OWNER["English"]["OWN_UID"] = "";
	$fieldLabelsPROCESS_OWNER["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS_OWNER["English"]["PRO_UID"] = "";
	$placeHoldersPROCESS_OWNER["English"]["PRO_UID"] = "";
	if (count($fieldToolTipsPROCESS_OWNER["English"]))
		$tdataPROCESS_OWNER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROCESS_OWNER[""] = array();
	$fieldToolTipsPROCESS_OWNER[""] = array();
	$placeHoldersPROCESS_OWNER[""] = array();
	$pageTitlesPROCESS_OWNER[""] = array();
	if (count($fieldToolTipsPROCESS_OWNER[""]))
		$tdataPROCESS_OWNER[".isUseToolTips"] = true;
}


	$tdataPROCESS_OWNER[".NCSearch"] = true;



$tdataPROCESS_OWNER[".shortTableName"] = "PROCESS_OWNER";
$tdataPROCESS_OWNER[".nSecOptions"] = 0;
$tdataPROCESS_OWNER[".recsPerRowPrint"] = 1;
$tdataPROCESS_OWNER[".mainTableOwnerID"] = "";
$tdataPROCESS_OWNER[".moveNext"] = 0;
$tdataPROCESS_OWNER[".entityType"] = 0;

$tdataPROCESS_OWNER[".strOriginalTableName"] = "PROCESS_OWNER";

	



$tdataPROCESS_OWNER[".showAddInPopup"] = false;

$tdataPROCESS_OWNER[".showEditInPopup"] = false;

$tdataPROCESS_OWNER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPROCESS_OWNER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPROCESS_OWNER[".fieldsForRegister"] = array();
	
$tdataPROCESS_OWNER[".listAjax"] = false;

	$tdataPROCESS_OWNER[".audit"] = true;

	$tdataPROCESS_OWNER[".locking"] = false;

$tdataPROCESS_OWNER[".edit"] = true;
$tdataPROCESS_OWNER[".afterEditAction"] = 1;
$tdataPROCESS_OWNER[".closePopupAfterEdit"] = 1;
$tdataPROCESS_OWNER[".afterEditActionDetTable"] = "";

$tdataPROCESS_OWNER[".add"] = true;
$tdataPROCESS_OWNER[".afterAddAction"] = 1;
$tdataPROCESS_OWNER[".closePopupAfterAdd"] = 1;
$tdataPROCESS_OWNER[".afterAddActionDetTable"] = "";

$tdataPROCESS_OWNER[".list"] = true;

$tdataPROCESS_OWNER[".inlineEdit"] = true;


$tdataPROCESS_OWNER[".reorderRecordsByHeader"] = true;
$tdataPROCESS_OWNER[".createSortByDropdown"] = true;
$tdataPROCESS_OWNER[".strSortControlSettingsJSON"] = "";



$tdataPROCESS_OWNER[".inlineAdd"] = true;
$tdataPROCESS_OWNER[".view"] = true;

$tdataPROCESS_OWNER[".import"] = true;

$tdataPROCESS_OWNER[".exportTo"] = true;

$tdataPROCESS_OWNER[".printFriendly"] = true;

$tdataPROCESS_OWNER[".delete"] = true;

$tdataPROCESS_OWNER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPROCESS_OWNER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPROCESS_OWNER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPROCESS_OWNER[".searchSaving"] = false;
//

$tdataPROCESS_OWNER[".showSearchPanel"] = true;
		$tdataPROCESS_OWNER[".flexibleSearch"] = true;

$tdataPROCESS_OWNER[".isUseAjaxSuggest"] = true;

$tdataPROCESS_OWNER[".rowHighlite"] = true;



				

$tdataPROCESS_OWNER[".ajaxCodeSnippetAdded"] = false;

$tdataPROCESS_OWNER[".buttonsAdded"] = false;

$tdataPROCESS_OWNER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPROCESS_OWNER[".isUseTimeForSearch"] = false;





$tdataPROCESS_OWNER[".allSearchFields"] = array();
$tdataPROCESS_OWNER[".filterFields"] = array();
$tdataPROCESS_OWNER[".requiredSearchFields"] = array();

$tdataPROCESS_OWNER[".allSearchFields"][] = "OWN_UID";
	$tdataPROCESS_OWNER[".allSearchFields"][] = "PRO_UID";
	

$tdataPROCESS_OWNER[".googleLikeFields"] = array();
$tdataPROCESS_OWNER[".googleLikeFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".googleLikeFields"][] = "PRO_UID";


$tdataPROCESS_OWNER[".advSearchFields"] = array();
$tdataPROCESS_OWNER[".advSearchFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".advSearchFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".tableType"] = "list";

$tdataPROCESS_OWNER[".printerPageOrientation"] = 0;
$tdataPROCESS_OWNER[".nPrinterPageScale"] = 100;

$tdataPROCESS_OWNER[".nPrinterSplitRecords"] = 40;

$tdataPROCESS_OWNER[".nPrinterPDFSplitRecords"] = 40;



$tdataPROCESS_OWNER[".geocodingEnabled"] = false;





$tdataPROCESS_OWNER[".listGridLayout"] = 3;


$tdataPROCESS_OWNER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPROCESS_OWNER[".pageSize"] = 20;

$tdataPROCESS_OWNER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPROCESS_OWNER[".strOrderBy"] = $tstrOrderBy;

$tdataPROCESS_OWNER[".orderindexes"] = array();

$tdataPROCESS_OWNER[".sqlHead"] = "SELECT OWN_UID,  	PRO_UID";
$tdataPROCESS_OWNER[".sqlFrom"] = "FROM PROCESS_OWNER";
$tdataPROCESS_OWNER[".sqlWhereExpr"] = "";
$tdataPROCESS_OWNER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPROCESS_OWNER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPROCESS_OWNER[".arrGroupsPerPage"] = $arrGPP;

$tdataPROCESS_OWNER[".highlightSearchResults"] = true;

$tableKeysPROCESS_OWNER = array();
$tableKeysPROCESS_OWNER[] = "OWN_UID";
$tableKeysPROCESS_OWNER[] = "PRO_UID";
$tdataPROCESS_OWNER[".Keys"] = $tableKeysPROCESS_OWNER;

$tdataPROCESS_OWNER[".listFields"] = array();
$tdataPROCESS_OWNER[".listFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".listFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".hideMobileList"] = array();


$tdataPROCESS_OWNER[".viewFields"] = array();
$tdataPROCESS_OWNER[".viewFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".viewFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".addFields"] = array();
$tdataPROCESS_OWNER[".addFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".addFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".masterListFields"] = array();
$tdataPROCESS_OWNER[".masterListFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".masterListFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".inlineAddFields"] = array();
$tdataPROCESS_OWNER[".inlineAddFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".inlineAddFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".editFields"] = array();
$tdataPROCESS_OWNER[".editFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".editFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".inlineEditFields"] = array();
$tdataPROCESS_OWNER[".inlineEditFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".inlineEditFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".updateSelectedFields"] = array();
$tdataPROCESS_OWNER[".updateSelectedFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".updateSelectedFields"][] = "PRO_UID";


$tdataPROCESS_OWNER[".exportFields"] = array();
$tdataPROCESS_OWNER[".exportFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".exportFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".importFields"] = array();
$tdataPROCESS_OWNER[".importFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".importFields"][] = "PRO_UID";

$tdataPROCESS_OWNER[".printFields"] = array();
$tdataPROCESS_OWNER[".printFields"][] = "OWN_UID";
$tdataPROCESS_OWNER[".printFields"][] = "PRO_UID";

//	OWN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OWN_UID";
	$fdata["GoodName"] = "OWN_UID";
	$fdata["ownerTable"] = "PROCESS_OWNER";
	$fdata["Label"] = GetFieldLabel("PROCESS_OWNER","OWN_UID");
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

		$fdata["strField"] = "OWN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OWN_UID";

	
	
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




	$tdataPROCESS_OWNER["OWN_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "PROCESS_OWNER";
	$fdata["Label"] = GetFieldLabel("PROCESS_OWNER","PRO_UID");
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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




	$tdataPROCESS_OWNER["PRO_UID"] = $fdata;


$tables_data["PROCESS_OWNER"]=&$tdataPROCESS_OWNER;
$field_labels["PROCESS_OWNER"] = &$fieldLabelsPROCESS_OWNER;
$fieldToolTips["PROCESS_OWNER"] = &$fieldToolTipsPROCESS_OWNER;
$placeHolders["PROCESS_OWNER"] = &$placeHoldersPROCESS_OWNER;
$page_titles["PROCESS_OWNER"] = &$pageTitlesPROCESS_OWNER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PROCESS_OWNER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PROCESS_OWNER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PROCESS_OWNER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OWN_UID,  	PRO_UID";
$proto0["m_strFrom"] = "FROM PROCESS_OWNER";
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
	"m_strName" => "OWN_UID",
	"m_strTable" => "PROCESS_OWNER",
	"m_srcTableName" => "PROCESS_OWNER"
));

$proto6["m_sql"] = "OWN_UID";
$proto6["m_srcTableName"] = "PROCESS_OWNER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "PROCESS_OWNER",
	"m_srcTableName" => "PROCESS_OWNER"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "PROCESS_OWNER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "PROCESS_OWNER";
$proto11["m_srcTableName"] = "PROCESS_OWNER";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "OWN_UID";
$proto11["m_columns"][] = "PRO_UID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "PROCESS_OWNER";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "PROCESS_OWNER";
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
$proto0["m_srcTableName"]="PROCESS_OWNER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PROCESS_OWNER = createSqlQuery_PROCESS_OWNER();


	
						;

		

$tdataPROCESS_OWNER[".sqlquery"] = $queryData_PROCESS_OWNER;

$tableEvents["PROCESS_OWNER"] = new eventsBase;
$tdataPROCESS_OWNER[".hasEvents"] = false;

?>
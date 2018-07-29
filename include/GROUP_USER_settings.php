<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGROUP_USER = array();
	$tdataGROUP_USER[".truncateText"] = true;
	$tdataGROUP_USER[".NumberOfChars"] = 20;
	$tdataGROUP_USER[".ShortName"] = "GROUP_USER";
	$tdataGROUP_USER[".OwnerID"] = "";
	$tdataGROUP_USER[".OriginalTable"] = "GROUP_USER";

//	field labels
$fieldLabelsGROUP_USER = array();
$fieldToolTipsGROUP_USER = array();
$pageTitlesGROUP_USER = array();
$placeHoldersGROUP_USER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsGROUP_USER["Japanese"] = array();
	$fieldToolTipsGROUP_USER["Japanese"] = array();
	$placeHoldersGROUP_USER["Japanese"] = array();
	$pageTitlesGROUP_USER["Japanese"] = array();
	$fieldLabelsGROUP_USER["Japanese"]["GRP_UID"] = "GRPのuid";
	$fieldToolTipsGROUP_USER["Japanese"]["GRP_UID"] = "";
	$placeHoldersGROUP_USER["Japanese"]["GRP_UID"] = "";
	$fieldLabelsGROUP_USER["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsGROUP_USER["Japanese"]["USR_UID"] = "";
	$placeHoldersGROUP_USER["Japanese"]["USR_UID"] = "";
	if (count($fieldToolTipsGROUP_USER["Japanese"]))
		$tdataGROUP_USER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGROUP_USER["English"] = array();
	$fieldToolTipsGROUP_USER["English"] = array();
	$placeHoldersGROUP_USER["English"] = array();
	$pageTitlesGROUP_USER["English"] = array();
	$fieldLabelsGROUP_USER["English"]["GRP_UID"] = "GRPのuid";
	$fieldToolTipsGROUP_USER["English"]["GRP_UID"] = "";
	$placeHoldersGROUP_USER["English"]["GRP_UID"] = "";
	$fieldLabelsGROUP_USER["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsGROUP_USER["English"]["USR_UID"] = "";
	$placeHoldersGROUP_USER["English"]["USR_UID"] = "";
	if (count($fieldToolTipsGROUP_USER["English"]))
		$tdataGROUP_USER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGROUP_USER[""] = array();
	$fieldToolTipsGROUP_USER[""] = array();
	$placeHoldersGROUP_USER[""] = array();
	$pageTitlesGROUP_USER[""] = array();
	if (count($fieldToolTipsGROUP_USER[""]))
		$tdataGROUP_USER[".isUseToolTips"] = true;
}


	$tdataGROUP_USER[".NCSearch"] = true;



$tdataGROUP_USER[".shortTableName"] = "GROUP_USER";
$tdataGROUP_USER[".nSecOptions"] = 0;
$tdataGROUP_USER[".recsPerRowPrint"] = 1;
$tdataGROUP_USER[".mainTableOwnerID"] = "";
$tdataGROUP_USER[".moveNext"] = 0;
$tdataGROUP_USER[".entityType"] = 0;

$tdataGROUP_USER[".strOriginalTableName"] = "GROUP_USER";

	



$tdataGROUP_USER[".showAddInPopup"] = false;

$tdataGROUP_USER[".showEditInPopup"] = false;

$tdataGROUP_USER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGROUP_USER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGROUP_USER[".fieldsForRegister"] = array();
	
$tdataGROUP_USER[".listAjax"] = false;

	$tdataGROUP_USER[".audit"] = true;

	$tdataGROUP_USER[".locking"] = false;

$tdataGROUP_USER[".edit"] = true;
$tdataGROUP_USER[".afterEditAction"] = 1;
$tdataGROUP_USER[".closePopupAfterEdit"] = 1;
$tdataGROUP_USER[".afterEditActionDetTable"] = "";

$tdataGROUP_USER[".add"] = true;
$tdataGROUP_USER[".afterAddAction"] = 1;
$tdataGROUP_USER[".closePopupAfterAdd"] = 1;
$tdataGROUP_USER[".afterAddActionDetTable"] = "";

$tdataGROUP_USER[".list"] = true;

$tdataGROUP_USER[".inlineEdit"] = true;


$tdataGROUP_USER[".reorderRecordsByHeader"] = true;
$tdataGROUP_USER[".createSortByDropdown"] = true;
$tdataGROUP_USER[".strSortControlSettingsJSON"] = "";



$tdataGROUP_USER[".inlineAdd"] = true;
$tdataGROUP_USER[".view"] = true;

$tdataGROUP_USER[".import"] = true;

$tdataGROUP_USER[".exportTo"] = true;

$tdataGROUP_USER[".printFriendly"] = true;

$tdataGROUP_USER[".delete"] = true;

$tdataGROUP_USER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataGROUP_USER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataGROUP_USER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataGROUP_USER[".searchSaving"] = false;
//

$tdataGROUP_USER[".showSearchPanel"] = true;
		$tdataGROUP_USER[".flexibleSearch"] = true;

$tdataGROUP_USER[".isUseAjaxSuggest"] = true;

$tdataGROUP_USER[".rowHighlite"] = true;



				

$tdataGROUP_USER[".ajaxCodeSnippetAdded"] = false;

$tdataGROUP_USER[".buttonsAdded"] = false;

$tdataGROUP_USER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGROUP_USER[".isUseTimeForSearch"] = false;





$tdataGROUP_USER[".allSearchFields"] = array();
$tdataGROUP_USER[".filterFields"] = array();
$tdataGROUP_USER[".requiredSearchFields"] = array();

$tdataGROUP_USER[".allSearchFields"][] = "GRP_UID";
	$tdataGROUP_USER[".allSearchFields"][] = "USR_UID";
	

$tdataGROUP_USER[".googleLikeFields"] = array();
$tdataGROUP_USER[".googleLikeFields"][] = "GRP_UID";
$tdataGROUP_USER[".googleLikeFields"][] = "USR_UID";


$tdataGROUP_USER[".advSearchFields"] = array();
$tdataGROUP_USER[".advSearchFields"][] = "GRP_UID";
$tdataGROUP_USER[".advSearchFields"][] = "USR_UID";

$tdataGROUP_USER[".tableType"] = "list";

$tdataGROUP_USER[".printerPageOrientation"] = 0;
$tdataGROUP_USER[".nPrinterPageScale"] = 100;

$tdataGROUP_USER[".nPrinterSplitRecords"] = 40;

$tdataGROUP_USER[".nPrinterPDFSplitRecords"] = 40;



$tdataGROUP_USER[".geocodingEnabled"] = false;





$tdataGROUP_USER[".listGridLayout"] = 3;


$tdataGROUP_USER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataGROUP_USER[".pageSize"] = 20;

$tdataGROUP_USER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGROUP_USER[".strOrderBy"] = $tstrOrderBy;

$tdataGROUP_USER[".orderindexes"] = array();

$tdataGROUP_USER[".sqlHead"] = "SELECT GRP_UID,  	USR_UID";
$tdataGROUP_USER[".sqlFrom"] = "FROM GROUP_USER";
$tdataGROUP_USER[".sqlWhereExpr"] = "";
$tdataGROUP_USER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGROUP_USER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGROUP_USER[".arrGroupsPerPage"] = $arrGPP;

$tdataGROUP_USER[".highlightSearchResults"] = true;

$tableKeysGROUP_USER = array();
$tableKeysGROUP_USER[] = "GRP_UID";
$tableKeysGROUP_USER[] = "USR_UID";
$tdataGROUP_USER[".Keys"] = $tableKeysGROUP_USER;

$tdataGROUP_USER[".listFields"] = array();
$tdataGROUP_USER[".listFields"][] = "GRP_UID";
$tdataGROUP_USER[".listFields"][] = "USR_UID";

$tdataGROUP_USER[".hideMobileList"] = array();


$tdataGROUP_USER[".viewFields"] = array();
$tdataGROUP_USER[".viewFields"][] = "GRP_UID";
$tdataGROUP_USER[".viewFields"][] = "USR_UID";

$tdataGROUP_USER[".addFields"] = array();
$tdataGROUP_USER[".addFields"][] = "GRP_UID";
$tdataGROUP_USER[".addFields"][] = "USR_UID";

$tdataGROUP_USER[".masterListFields"] = array();
$tdataGROUP_USER[".masterListFields"][] = "GRP_UID";
$tdataGROUP_USER[".masterListFields"][] = "USR_UID";

$tdataGROUP_USER[".inlineAddFields"] = array();
$tdataGROUP_USER[".inlineAddFields"][] = "GRP_UID";
$tdataGROUP_USER[".inlineAddFields"][] = "USR_UID";

$tdataGROUP_USER[".editFields"] = array();
$tdataGROUP_USER[".editFields"][] = "GRP_UID";
$tdataGROUP_USER[".editFields"][] = "USR_UID";

$tdataGROUP_USER[".inlineEditFields"] = array();
$tdataGROUP_USER[".inlineEditFields"][] = "GRP_UID";
$tdataGROUP_USER[".inlineEditFields"][] = "USR_UID";

$tdataGROUP_USER[".updateSelectedFields"] = array();
$tdataGROUP_USER[".updateSelectedFields"][] = "GRP_UID";
$tdataGROUP_USER[".updateSelectedFields"][] = "USR_UID";


$tdataGROUP_USER[".exportFields"] = array();
$tdataGROUP_USER[".exportFields"][] = "GRP_UID";
$tdataGROUP_USER[".exportFields"][] = "USR_UID";

$tdataGROUP_USER[".importFields"] = array();
$tdataGROUP_USER[".importFields"][] = "GRP_UID";
$tdataGROUP_USER[".importFields"][] = "USR_UID";

$tdataGROUP_USER[".printFields"] = array();
$tdataGROUP_USER[".printFields"][] = "GRP_UID";
$tdataGROUP_USER[".printFields"][] = "USR_UID";

//	GRP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GRP_UID";
	$fdata["GoodName"] = "GRP_UID";
	$fdata["ownerTable"] = "GROUP_USER";
	$fdata["Label"] = GetFieldLabel("GROUP_USER","GRP_UID");
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

		$fdata["strField"] = "GRP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRP_UID";

	
	
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




	$tdataGROUP_USER["GRP_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "GROUP_USER";
	$fdata["Label"] = GetFieldLabel("GROUP_USER","USR_UID");
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

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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




	$tdataGROUP_USER["USR_UID"] = $fdata;


$tables_data["GROUP_USER"]=&$tdataGROUP_USER;
$field_labels["GROUP_USER"] = &$fieldLabelsGROUP_USER;
$fieldToolTips["GROUP_USER"] = &$fieldToolTipsGROUP_USER;
$placeHolders["GROUP_USER"] = &$placeHoldersGROUP_USER;
$page_titles["GROUP_USER"] = &$pageTitlesGROUP_USER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GROUP_USER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GROUP_USER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GROUP_USER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GRP_UID,  	USR_UID";
$proto0["m_strFrom"] = "FROM GROUP_USER";
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
	"m_strName" => "GRP_UID",
	"m_strTable" => "GROUP_USER",
	"m_srcTableName" => "GROUP_USER"
));

$proto6["m_sql"] = "GRP_UID";
$proto6["m_srcTableName"] = "GROUP_USER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "GROUP_USER",
	"m_srcTableName" => "GROUP_USER"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "GROUP_USER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "GROUP_USER";
$proto11["m_srcTableName"] = "GROUP_USER";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GRP_UID";
$proto11["m_columns"][] = "USR_UID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "GROUP_USER";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "GROUP_USER";
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
$proto0["m_srcTableName"]="GROUP_USER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GROUP_USER = createSqlQuery_GROUP_USER();


	
						;

		

$tdataGROUP_USER[".sqlquery"] = $queryData_GROUP_USER;

$tableEvents["GROUP_USER"] = new eventsBase;
$tdataGROUP_USER[".hasEvents"] = false;

?>
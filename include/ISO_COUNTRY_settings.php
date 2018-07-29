<?php
require_once(getabspath("classes/cipherer.php"));




$tdataISO_COUNTRY = array();
	$tdataISO_COUNTRY[".truncateText"] = true;
	$tdataISO_COUNTRY[".NumberOfChars"] = 20;
	$tdataISO_COUNTRY[".ShortName"] = "ISO_COUNTRY";
	$tdataISO_COUNTRY[".OwnerID"] = "";
	$tdataISO_COUNTRY[".OriginalTable"] = "ISO_COUNTRY";

//	field labels
$fieldLabelsISO_COUNTRY = array();
$fieldToolTipsISO_COUNTRY = array();
$pageTitlesISO_COUNTRY = array();
$placeHoldersISO_COUNTRY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsISO_COUNTRY["Japanese"] = array();
	$fieldToolTipsISO_COUNTRY["Japanese"] = array();
	$placeHoldersISO_COUNTRY["Japanese"] = array();
	$pageTitlesISO_COUNTRY["Japanese"] = array();
	$fieldLabelsISO_COUNTRY["Japanese"]["IC_UID"] = "IC UID";
	$fieldToolTipsISO_COUNTRY["Japanese"]["IC_UID"] = "";
	$placeHoldersISO_COUNTRY["Japanese"]["IC_UID"] = "";
	$fieldLabelsISO_COUNTRY["Japanese"]["IC_NAME"] = "IC名前";
	$fieldToolTipsISO_COUNTRY["Japanese"]["IC_NAME"] = "";
	$placeHoldersISO_COUNTRY["Japanese"]["IC_NAME"] = "";
	$fieldLabelsISO_COUNTRY["Japanese"]["IC_SORT_ORDER"] = "ICソート順";
	$fieldToolTipsISO_COUNTRY["Japanese"]["IC_SORT_ORDER"] = "";
	$placeHoldersISO_COUNTRY["Japanese"]["IC_SORT_ORDER"] = "";
	if (count($fieldToolTipsISO_COUNTRY["Japanese"]))
		$tdataISO_COUNTRY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsISO_COUNTRY["English"] = array();
	$fieldToolTipsISO_COUNTRY["English"] = array();
	$placeHoldersISO_COUNTRY["English"] = array();
	$pageTitlesISO_COUNTRY["English"] = array();
	$fieldLabelsISO_COUNTRY["English"]["IC_UID"] = "IC UID";
	$fieldToolTipsISO_COUNTRY["English"]["IC_UID"] = "";
	$placeHoldersISO_COUNTRY["English"]["IC_UID"] = "";
	$fieldLabelsISO_COUNTRY["English"]["IC_NAME"] = "IC名前";
	$fieldToolTipsISO_COUNTRY["English"]["IC_NAME"] = "";
	$placeHoldersISO_COUNTRY["English"]["IC_NAME"] = "";
	$fieldLabelsISO_COUNTRY["English"]["IC_SORT_ORDER"] = "ICソート順";
	$fieldToolTipsISO_COUNTRY["English"]["IC_SORT_ORDER"] = "";
	$placeHoldersISO_COUNTRY["English"]["IC_SORT_ORDER"] = "";
	if (count($fieldToolTipsISO_COUNTRY["English"]))
		$tdataISO_COUNTRY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsISO_COUNTRY[""] = array();
	$fieldToolTipsISO_COUNTRY[""] = array();
	$placeHoldersISO_COUNTRY[""] = array();
	$pageTitlesISO_COUNTRY[""] = array();
	if (count($fieldToolTipsISO_COUNTRY[""]))
		$tdataISO_COUNTRY[".isUseToolTips"] = true;
}


	$tdataISO_COUNTRY[".NCSearch"] = true;



$tdataISO_COUNTRY[".shortTableName"] = "ISO_COUNTRY";
$tdataISO_COUNTRY[".nSecOptions"] = 0;
$tdataISO_COUNTRY[".recsPerRowPrint"] = 1;
$tdataISO_COUNTRY[".mainTableOwnerID"] = "";
$tdataISO_COUNTRY[".moveNext"] = 0;
$tdataISO_COUNTRY[".entityType"] = 0;

$tdataISO_COUNTRY[".strOriginalTableName"] = "ISO_COUNTRY";

	



$tdataISO_COUNTRY[".showAddInPopup"] = false;

$tdataISO_COUNTRY[".showEditInPopup"] = false;

$tdataISO_COUNTRY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataISO_COUNTRY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataISO_COUNTRY[".fieldsForRegister"] = array();
	
$tdataISO_COUNTRY[".listAjax"] = false;

	$tdataISO_COUNTRY[".audit"] = true;

	$tdataISO_COUNTRY[".locking"] = false;

$tdataISO_COUNTRY[".edit"] = true;
$tdataISO_COUNTRY[".afterEditAction"] = 1;
$tdataISO_COUNTRY[".closePopupAfterEdit"] = 1;
$tdataISO_COUNTRY[".afterEditActionDetTable"] = "";

$tdataISO_COUNTRY[".add"] = true;
$tdataISO_COUNTRY[".afterAddAction"] = 1;
$tdataISO_COUNTRY[".closePopupAfterAdd"] = 1;
$tdataISO_COUNTRY[".afterAddActionDetTable"] = "";

$tdataISO_COUNTRY[".list"] = true;

$tdataISO_COUNTRY[".inlineEdit"] = true;


$tdataISO_COUNTRY[".reorderRecordsByHeader"] = true;
$tdataISO_COUNTRY[".createSortByDropdown"] = true;
$tdataISO_COUNTRY[".strSortControlSettingsJSON"] = "";



$tdataISO_COUNTRY[".inlineAdd"] = true;
$tdataISO_COUNTRY[".view"] = true;

$tdataISO_COUNTRY[".import"] = true;

$tdataISO_COUNTRY[".exportTo"] = true;

$tdataISO_COUNTRY[".printFriendly"] = true;

$tdataISO_COUNTRY[".delete"] = true;

$tdataISO_COUNTRY[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataISO_COUNTRY[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataISO_COUNTRY[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataISO_COUNTRY[".searchSaving"] = false;
//

$tdataISO_COUNTRY[".showSearchPanel"] = true;
		$tdataISO_COUNTRY[".flexibleSearch"] = true;

$tdataISO_COUNTRY[".isUseAjaxSuggest"] = true;

$tdataISO_COUNTRY[".rowHighlite"] = true;



				

$tdataISO_COUNTRY[".ajaxCodeSnippetAdded"] = false;

$tdataISO_COUNTRY[".buttonsAdded"] = false;

$tdataISO_COUNTRY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataISO_COUNTRY[".isUseTimeForSearch"] = false;





$tdataISO_COUNTRY[".allSearchFields"] = array();
$tdataISO_COUNTRY[".filterFields"] = array();
$tdataISO_COUNTRY[".requiredSearchFields"] = array();

$tdataISO_COUNTRY[".allSearchFields"][] = "IC_UID";
	$tdataISO_COUNTRY[".allSearchFields"][] = "IC_NAME";
	$tdataISO_COUNTRY[".allSearchFields"][] = "IC_SORT_ORDER";
	

$tdataISO_COUNTRY[".googleLikeFields"] = array();
$tdataISO_COUNTRY[".googleLikeFields"][] = "IC_UID";
$tdataISO_COUNTRY[".googleLikeFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".googleLikeFields"][] = "IC_SORT_ORDER";


$tdataISO_COUNTRY[".advSearchFields"] = array();
$tdataISO_COUNTRY[".advSearchFields"][] = "IC_UID";
$tdataISO_COUNTRY[".advSearchFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".advSearchFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".tableType"] = "list";

$tdataISO_COUNTRY[".printerPageOrientation"] = 0;
$tdataISO_COUNTRY[".nPrinterPageScale"] = 100;

$tdataISO_COUNTRY[".nPrinterSplitRecords"] = 40;

$tdataISO_COUNTRY[".nPrinterPDFSplitRecords"] = 40;



$tdataISO_COUNTRY[".geocodingEnabled"] = false;





$tdataISO_COUNTRY[".listGridLayout"] = 3;


$tdataISO_COUNTRY[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataISO_COUNTRY[".pageSize"] = 20;

$tdataISO_COUNTRY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataISO_COUNTRY[".strOrderBy"] = $tstrOrderBy;

$tdataISO_COUNTRY[".orderindexes"] = array();

$tdataISO_COUNTRY[".sqlHead"] = "SELECT IC_UID,  	IC_NAME,  	IC_SORT_ORDER";
$tdataISO_COUNTRY[".sqlFrom"] = "FROM ISO_COUNTRY";
$tdataISO_COUNTRY[".sqlWhereExpr"] = "";
$tdataISO_COUNTRY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataISO_COUNTRY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataISO_COUNTRY[".arrGroupsPerPage"] = $arrGPP;

$tdataISO_COUNTRY[".highlightSearchResults"] = true;

$tableKeysISO_COUNTRY = array();
$tableKeysISO_COUNTRY[] = "IC_UID";
$tdataISO_COUNTRY[".Keys"] = $tableKeysISO_COUNTRY;

$tdataISO_COUNTRY[".listFields"] = array();
$tdataISO_COUNTRY[".listFields"][] = "IC_UID";
$tdataISO_COUNTRY[".listFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".listFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".hideMobileList"] = array();


$tdataISO_COUNTRY[".viewFields"] = array();
$tdataISO_COUNTRY[".viewFields"][] = "IC_UID";
$tdataISO_COUNTRY[".viewFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".viewFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".addFields"] = array();
$tdataISO_COUNTRY[".addFields"][] = "IC_UID";
$tdataISO_COUNTRY[".addFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".addFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".masterListFields"] = array();
$tdataISO_COUNTRY[".masterListFields"][] = "IC_UID";
$tdataISO_COUNTRY[".masterListFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".masterListFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".inlineAddFields"] = array();
$tdataISO_COUNTRY[".inlineAddFields"][] = "IC_UID";
$tdataISO_COUNTRY[".inlineAddFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".inlineAddFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".editFields"] = array();
$tdataISO_COUNTRY[".editFields"][] = "IC_UID";
$tdataISO_COUNTRY[".editFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".editFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".inlineEditFields"] = array();
$tdataISO_COUNTRY[".inlineEditFields"][] = "IC_UID";
$tdataISO_COUNTRY[".inlineEditFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".inlineEditFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".updateSelectedFields"] = array();
$tdataISO_COUNTRY[".updateSelectedFields"][] = "IC_UID";
$tdataISO_COUNTRY[".updateSelectedFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".updateSelectedFields"][] = "IC_SORT_ORDER";


$tdataISO_COUNTRY[".exportFields"] = array();
$tdataISO_COUNTRY[".exportFields"][] = "IC_UID";
$tdataISO_COUNTRY[".exportFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".exportFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".importFields"] = array();
$tdataISO_COUNTRY[".importFields"][] = "IC_UID";
$tdataISO_COUNTRY[".importFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".importFields"][] = "IC_SORT_ORDER";

$tdataISO_COUNTRY[".printFields"] = array();
$tdataISO_COUNTRY[".printFields"][] = "IC_UID";
$tdataISO_COUNTRY[".printFields"][] = "IC_NAME";
$tdataISO_COUNTRY[".printFields"][] = "IC_SORT_ORDER";

//	IC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IC_UID";
	$fdata["GoodName"] = "IC_UID";
	$fdata["ownerTable"] = "ISO_COUNTRY";
	$fdata["Label"] = GetFieldLabel("ISO_COUNTRY","IC_UID");
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

		$fdata["strField"] = "IC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IC_UID";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdataISO_COUNTRY["IC_UID"] = $fdata;
//	IC_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IC_NAME";
	$fdata["GoodName"] = "IC_NAME";
	$fdata["ownerTable"] = "ISO_COUNTRY";
	$fdata["Label"] = GetFieldLabel("ISO_COUNTRY","IC_NAME");
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

		$fdata["strField"] = "IC_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IC_NAME";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataISO_COUNTRY["IC_NAME"] = $fdata;
//	IC_SORT_ORDER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IC_SORT_ORDER";
	$fdata["GoodName"] = "IC_SORT_ORDER";
	$fdata["ownerTable"] = "ISO_COUNTRY";
	$fdata["Label"] = GetFieldLabel("ISO_COUNTRY","IC_SORT_ORDER");
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

		$fdata["strField"] = "IC_SORT_ORDER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IC_SORT_ORDER";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataISO_COUNTRY["IC_SORT_ORDER"] = $fdata;


$tables_data["ISO_COUNTRY"]=&$tdataISO_COUNTRY;
$field_labels["ISO_COUNTRY"] = &$fieldLabelsISO_COUNTRY;
$fieldToolTips["ISO_COUNTRY"] = &$fieldToolTipsISO_COUNTRY;
$placeHolders["ISO_COUNTRY"] = &$placeHoldersISO_COUNTRY;
$page_titles["ISO_COUNTRY"] = &$pageTitlesISO_COUNTRY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ISO_COUNTRY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ISO_COUNTRY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ISO_COUNTRY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IC_UID,  	IC_NAME,  	IC_SORT_ORDER";
$proto0["m_strFrom"] = "FROM ISO_COUNTRY";
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
	"m_strName" => "IC_UID",
	"m_strTable" => "ISO_COUNTRY",
	"m_srcTableName" => "ISO_COUNTRY"
));

$proto6["m_sql"] = "IC_UID";
$proto6["m_srcTableName"] = "ISO_COUNTRY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IC_NAME",
	"m_strTable" => "ISO_COUNTRY",
	"m_srcTableName" => "ISO_COUNTRY"
));

$proto8["m_sql"] = "IC_NAME";
$proto8["m_srcTableName"] = "ISO_COUNTRY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IC_SORT_ORDER",
	"m_strTable" => "ISO_COUNTRY",
	"m_srcTableName" => "ISO_COUNTRY"
));

$proto10["m_sql"] = "IC_SORT_ORDER";
$proto10["m_srcTableName"] = "ISO_COUNTRY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "ISO_COUNTRY";
$proto13["m_srcTableName"] = "ISO_COUNTRY";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IC_UID";
$proto13["m_columns"][] = "IC_NAME";
$proto13["m_columns"][] = "IC_SORT_ORDER";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "ISO_COUNTRY";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "ISO_COUNTRY";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ISO_COUNTRY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ISO_COUNTRY = createSqlQuery_ISO_COUNTRY();


	
						;

			

$tdataISO_COUNTRY[".sqlquery"] = $queryData_ISO_COUNTRY;

$tableEvents["ISO_COUNTRY"] = new eventsBase;
$tdataISO_COUNTRY[".hasEvents"] = false;

?>
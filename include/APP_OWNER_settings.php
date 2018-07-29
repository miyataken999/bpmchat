<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_OWNER = array();
	$tdataAPP_OWNER[".truncateText"] = true;
	$tdataAPP_OWNER[".NumberOfChars"] = 20;
	$tdataAPP_OWNER[".ShortName"] = "APP_OWNER";
	$tdataAPP_OWNER[".OwnerID"] = "";
	$tdataAPP_OWNER[".OriginalTable"] = "APP_OWNER";

//	field labels
$fieldLabelsAPP_OWNER = array();
$fieldToolTipsAPP_OWNER = array();
$pageTitlesAPP_OWNER = array();
$placeHoldersAPP_OWNER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_OWNER["Japanese"] = array();
	$fieldToolTipsAPP_OWNER["Japanese"] = array();
	$placeHoldersAPP_OWNER["Japanese"] = array();
	$pageTitlesAPP_OWNER["Japanese"] = array();
	$fieldLabelsAPP_OWNER["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_OWNER["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_OWNER["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_OWNER["Japanese"]["OWN_UID"] = "自分のuid";
	$fieldToolTipsAPP_OWNER["Japanese"]["OWN_UID"] = "";
	$placeHoldersAPP_OWNER["Japanese"]["OWN_UID"] = "";
	$fieldLabelsAPP_OWNER["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_OWNER["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_OWNER["Japanese"]["USR_UID"] = "";
	if (count($fieldToolTipsAPP_OWNER["Japanese"]))
		$tdataAPP_OWNER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_OWNER["English"] = array();
	$fieldToolTipsAPP_OWNER["English"] = array();
	$placeHoldersAPP_OWNER["English"] = array();
	$pageTitlesAPP_OWNER["English"] = array();
	$fieldLabelsAPP_OWNER["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_OWNER["English"]["APP_UID"] = "";
	$placeHoldersAPP_OWNER["English"]["APP_UID"] = "";
	$fieldLabelsAPP_OWNER["English"]["OWN_UID"] = "自分のuid";
	$fieldToolTipsAPP_OWNER["English"]["OWN_UID"] = "";
	$placeHoldersAPP_OWNER["English"]["OWN_UID"] = "";
	$fieldLabelsAPP_OWNER["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_OWNER["English"]["USR_UID"] = "";
	$placeHoldersAPP_OWNER["English"]["USR_UID"] = "";
	if (count($fieldToolTipsAPP_OWNER["English"]))
		$tdataAPP_OWNER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_OWNER[""] = array();
	$fieldToolTipsAPP_OWNER[""] = array();
	$placeHoldersAPP_OWNER[""] = array();
	$pageTitlesAPP_OWNER[""] = array();
	if (count($fieldToolTipsAPP_OWNER[""]))
		$tdataAPP_OWNER[".isUseToolTips"] = true;
}


	$tdataAPP_OWNER[".NCSearch"] = true;



$tdataAPP_OWNER[".shortTableName"] = "APP_OWNER";
$tdataAPP_OWNER[".nSecOptions"] = 0;
$tdataAPP_OWNER[".recsPerRowPrint"] = 1;
$tdataAPP_OWNER[".mainTableOwnerID"] = "";
$tdataAPP_OWNER[".moveNext"] = 0;
$tdataAPP_OWNER[".entityType"] = 0;

$tdataAPP_OWNER[".strOriginalTableName"] = "APP_OWNER";

	



$tdataAPP_OWNER[".showAddInPopup"] = false;

$tdataAPP_OWNER[".showEditInPopup"] = false;

$tdataAPP_OWNER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_OWNER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_OWNER[".fieldsForRegister"] = array();
	
$tdataAPP_OWNER[".listAjax"] = false;

	$tdataAPP_OWNER[".audit"] = true;

	$tdataAPP_OWNER[".locking"] = false;

$tdataAPP_OWNER[".edit"] = true;
$tdataAPP_OWNER[".afterEditAction"] = 1;
$tdataAPP_OWNER[".closePopupAfterEdit"] = 1;
$tdataAPP_OWNER[".afterEditActionDetTable"] = "";

$tdataAPP_OWNER[".add"] = true;
$tdataAPP_OWNER[".afterAddAction"] = 1;
$tdataAPP_OWNER[".closePopupAfterAdd"] = 1;
$tdataAPP_OWNER[".afterAddActionDetTable"] = "";

$tdataAPP_OWNER[".list"] = true;

$tdataAPP_OWNER[".inlineEdit"] = true;


$tdataAPP_OWNER[".reorderRecordsByHeader"] = true;
$tdataAPP_OWNER[".createSortByDropdown"] = true;
$tdataAPP_OWNER[".strSortControlSettingsJSON"] = "";



$tdataAPP_OWNER[".inlineAdd"] = true;
$tdataAPP_OWNER[".view"] = true;

$tdataAPP_OWNER[".import"] = true;

$tdataAPP_OWNER[".exportTo"] = true;

$tdataAPP_OWNER[".printFriendly"] = true;

$tdataAPP_OWNER[".delete"] = true;

$tdataAPP_OWNER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_OWNER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_OWNER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_OWNER[".searchSaving"] = false;
//

$tdataAPP_OWNER[".showSearchPanel"] = true;
		$tdataAPP_OWNER[".flexibleSearch"] = true;

$tdataAPP_OWNER[".isUseAjaxSuggest"] = true;

$tdataAPP_OWNER[".rowHighlite"] = true;



				

$tdataAPP_OWNER[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_OWNER[".buttonsAdded"] = false;

$tdataAPP_OWNER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_OWNER[".isUseTimeForSearch"] = false;





$tdataAPP_OWNER[".allSearchFields"] = array();
$tdataAPP_OWNER[".filterFields"] = array();
$tdataAPP_OWNER[".requiredSearchFields"] = array();

$tdataAPP_OWNER[".allSearchFields"][] = "APP_UID";
	$tdataAPP_OWNER[".allSearchFields"][] = "OWN_UID";
	$tdataAPP_OWNER[".allSearchFields"][] = "USR_UID";
	

$tdataAPP_OWNER[".googleLikeFields"] = array();
$tdataAPP_OWNER[".googleLikeFields"][] = "APP_UID";
$tdataAPP_OWNER[".googleLikeFields"][] = "OWN_UID";
$tdataAPP_OWNER[".googleLikeFields"][] = "USR_UID";


$tdataAPP_OWNER[".advSearchFields"] = array();
$tdataAPP_OWNER[".advSearchFields"][] = "APP_UID";
$tdataAPP_OWNER[".advSearchFields"][] = "OWN_UID";
$tdataAPP_OWNER[".advSearchFields"][] = "USR_UID";

$tdataAPP_OWNER[".tableType"] = "list";

$tdataAPP_OWNER[".printerPageOrientation"] = 0;
$tdataAPP_OWNER[".nPrinterPageScale"] = 100;

$tdataAPP_OWNER[".nPrinterSplitRecords"] = 40;

$tdataAPP_OWNER[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_OWNER[".geocodingEnabled"] = false;





$tdataAPP_OWNER[".listGridLayout"] = 3;


$tdataAPP_OWNER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_OWNER[".pageSize"] = 20;

$tdataAPP_OWNER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_OWNER[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_OWNER[".orderindexes"] = array();

$tdataAPP_OWNER[".sqlHead"] = "SELECT APP_UID,  	OWN_UID,  	USR_UID";
$tdataAPP_OWNER[".sqlFrom"] = "FROM APP_OWNER";
$tdataAPP_OWNER[".sqlWhereExpr"] = "";
$tdataAPP_OWNER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_OWNER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_OWNER[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_OWNER[".highlightSearchResults"] = true;

$tableKeysAPP_OWNER = array();
$tableKeysAPP_OWNER[] = "APP_UID";
$tableKeysAPP_OWNER[] = "OWN_UID";
$tableKeysAPP_OWNER[] = "USR_UID";
$tdataAPP_OWNER[".Keys"] = $tableKeysAPP_OWNER;

$tdataAPP_OWNER[".listFields"] = array();
$tdataAPP_OWNER[".listFields"][] = "APP_UID";
$tdataAPP_OWNER[".listFields"][] = "OWN_UID";
$tdataAPP_OWNER[".listFields"][] = "USR_UID";

$tdataAPP_OWNER[".hideMobileList"] = array();


$tdataAPP_OWNER[".viewFields"] = array();
$tdataAPP_OWNER[".viewFields"][] = "APP_UID";
$tdataAPP_OWNER[".viewFields"][] = "OWN_UID";
$tdataAPP_OWNER[".viewFields"][] = "USR_UID";

$tdataAPP_OWNER[".addFields"] = array();
$tdataAPP_OWNER[".addFields"][] = "APP_UID";
$tdataAPP_OWNER[".addFields"][] = "OWN_UID";
$tdataAPP_OWNER[".addFields"][] = "USR_UID";

$tdataAPP_OWNER[".masterListFields"] = array();
$tdataAPP_OWNER[".masterListFields"][] = "APP_UID";
$tdataAPP_OWNER[".masterListFields"][] = "OWN_UID";
$tdataAPP_OWNER[".masterListFields"][] = "USR_UID";

$tdataAPP_OWNER[".inlineAddFields"] = array();
$tdataAPP_OWNER[".inlineAddFields"][] = "APP_UID";
$tdataAPP_OWNER[".inlineAddFields"][] = "OWN_UID";
$tdataAPP_OWNER[".inlineAddFields"][] = "USR_UID";

$tdataAPP_OWNER[".editFields"] = array();
$tdataAPP_OWNER[".editFields"][] = "APP_UID";
$tdataAPP_OWNER[".editFields"][] = "OWN_UID";
$tdataAPP_OWNER[".editFields"][] = "USR_UID";

$tdataAPP_OWNER[".inlineEditFields"] = array();
$tdataAPP_OWNER[".inlineEditFields"][] = "APP_UID";
$tdataAPP_OWNER[".inlineEditFields"][] = "OWN_UID";
$tdataAPP_OWNER[".inlineEditFields"][] = "USR_UID";

$tdataAPP_OWNER[".updateSelectedFields"] = array();
$tdataAPP_OWNER[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_OWNER[".updateSelectedFields"][] = "OWN_UID";
$tdataAPP_OWNER[".updateSelectedFields"][] = "USR_UID";


$tdataAPP_OWNER[".exportFields"] = array();
$tdataAPP_OWNER[".exportFields"][] = "APP_UID";
$tdataAPP_OWNER[".exportFields"][] = "OWN_UID";
$tdataAPP_OWNER[".exportFields"][] = "USR_UID";

$tdataAPP_OWNER[".importFields"] = array();
$tdataAPP_OWNER[".importFields"][] = "APP_UID";
$tdataAPP_OWNER[".importFields"][] = "OWN_UID";
$tdataAPP_OWNER[".importFields"][] = "USR_UID";

$tdataAPP_OWNER[".printFields"] = array();
$tdataAPP_OWNER[".printFields"][] = "APP_UID";
$tdataAPP_OWNER[".printFields"][] = "OWN_UID";
$tdataAPP_OWNER[".printFields"][] = "USR_UID";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_OWNER";
	$fdata["Label"] = GetFieldLabel("APP_OWNER","APP_UID");
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




	$tdataAPP_OWNER["APP_UID"] = $fdata;
//	OWN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OWN_UID";
	$fdata["GoodName"] = "OWN_UID";
	$fdata["ownerTable"] = "APP_OWNER";
	$fdata["Label"] = GetFieldLabel("APP_OWNER","OWN_UID");
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




	$tdataAPP_OWNER["OWN_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_OWNER";
	$fdata["Label"] = GetFieldLabel("APP_OWNER","USR_UID");
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




	$tdataAPP_OWNER["USR_UID"] = $fdata;


$tables_data["APP_OWNER"]=&$tdataAPP_OWNER;
$field_labels["APP_OWNER"] = &$fieldLabelsAPP_OWNER;
$fieldToolTips["APP_OWNER"] = &$fieldToolTipsAPP_OWNER;
$placeHolders["APP_OWNER"] = &$placeHoldersAPP_OWNER;
$page_titles["APP_OWNER"] = &$pageTitlesAPP_OWNER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_OWNER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_OWNER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_OWNER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	OWN_UID,  	USR_UID";
$proto0["m_strFrom"] = "FROM APP_OWNER";
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
	"m_strTable" => "APP_OWNER",
	"m_srcTableName" => "APP_OWNER"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_OWNER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OWN_UID",
	"m_strTable" => "APP_OWNER",
	"m_srcTableName" => "APP_OWNER"
));

$proto8["m_sql"] = "OWN_UID";
$proto8["m_srcTableName"] = "APP_OWNER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_OWNER",
	"m_srcTableName" => "APP_OWNER"
));

$proto10["m_sql"] = "USR_UID";
$proto10["m_srcTableName"] = "APP_OWNER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "APP_OWNER";
$proto13["m_srcTableName"] = "APP_OWNER";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "APP_UID";
$proto13["m_columns"][] = "OWN_UID";
$proto13["m_columns"][] = "USR_UID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "APP_OWNER";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "APP_OWNER";
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
$proto0["m_srcTableName"]="APP_OWNER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_OWNER = createSqlQuery_APP_OWNER();


	
						;

			

$tdataAPP_OWNER[".sqlquery"] = $queryData_APP_OWNER;

$tableEvents["APP_OWNER"] = new eventsBase;
$tdataAPP_OWNER[".hasEvents"] = false;

?>
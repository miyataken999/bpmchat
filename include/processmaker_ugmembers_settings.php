<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprocessmaker_ugmembers = array();
	$tdataprocessmaker_ugmembers[".truncateText"] = true;
	$tdataprocessmaker_ugmembers[".NumberOfChars"] = 20;
	$tdataprocessmaker_ugmembers[".ShortName"] = "processmaker_ugmembers";
	$tdataprocessmaker_ugmembers[".OwnerID"] = "";
	$tdataprocessmaker_ugmembers[".OriginalTable"] = "processmaker_ugmembers";

//	field labels
$fieldLabelsprocessmaker_ugmembers = array();
$fieldToolTipsprocessmaker_ugmembers = array();
$pageTitlesprocessmaker_ugmembers = array();
$placeHoldersprocessmaker_ugmembers = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsprocessmaker_ugmembers["Japanese"] = array();
	$fieldToolTipsprocessmaker_ugmembers["Japanese"] = array();
	$placeHoldersprocessmaker_ugmembers["Japanese"] = array();
	$pageTitlesprocessmaker_ugmembers["Japanese"] = array();
	$fieldLabelsprocessmaker_ugmembers["Japanese"]["UserName"] = "ユーザー名";
	$fieldToolTipsprocessmaker_ugmembers["Japanese"]["UserName"] = "";
	$placeHoldersprocessmaker_ugmembers["Japanese"]["UserName"] = "";
	$fieldLabelsprocessmaker_ugmembers["Japanese"]["GroupID"] = "グループID";
	$fieldToolTipsprocessmaker_ugmembers["Japanese"]["GroupID"] = "";
	$placeHoldersprocessmaker_ugmembers["Japanese"]["GroupID"] = "";
	if (count($fieldToolTipsprocessmaker_ugmembers["Japanese"]))
		$tdataprocessmaker_ugmembers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocessmaker_ugmembers["English"] = array();
	$fieldToolTipsprocessmaker_ugmembers["English"] = array();
	$placeHoldersprocessmaker_ugmembers["English"] = array();
	$pageTitlesprocessmaker_ugmembers["English"] = array();
	$fieldLabelsprocessmaker_ugmembers["English"]["UserName"] = "ユーザー名";
	$fieldToolTipsprocessmaker_ugmembers["English"]["UserName"] = "";
	$placeHoldersprocessmaker_ugmembers["English"]["UserName"] = "";
	$fieldLabelsprocessmaker_ugmembers["English"]["GroupID"] = "グループID";
	$fieldToolTipsprocessmaker_ugmembers["English"]["GroupID"] = "";
	$placeHoldersprocessmaker_ugmembers["English"]["GroupID"] = "";
	if (count($fieldToolTipsprocessmaker_ugmembers["English"]))
		$tdataprocessmaker_ugmembers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprocessmaker_ugmembers[""] = array();
	$fieldToolTipsprocessmaker_ugmembers[""] = array();
	$placeHoldersprocessmaker_ugmembers[""] = array();
	$pageTitlesprocessmaker_ugmembers[""] = array();
	if (count($fieldToolTipsprocessmaker_ugmembers[""]))
		$tdataprocessmaker_ugmembers[".isUseToolTips"] = true;
}


	$tdataprocessmaker_ugmembers[".NCSearch"] = true;



$tdataprocessmaker_ugmembers[".shortTableName"] = "processmaker_ugmembers";
$tdataprocessmaker_ugmembers[".nSecOptions"] = 0;
$tdataprocessmaker_ugmembers[".recsPerRowPrint"] = 1;
$tdataprocessmaker_ugmembers[".mainTableOwnerID"] = "";
$tdataprocessmaker_ugmembers[".moveNext"] = 0;
$tdataprocessmaker_ugmembers[".entityType"] = 0;

$tdataprocessmaker_ugmembers[".strOriginalTableName"] = "processmaker_ugmembers";

	



$tdataprocessmaker_ugmembers[".showAddInPopup"] = false;

$tdataprocessmaker_ugmembers[".showEditInPopup"] = false;

$tdataprocessmaker_ugmembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprocessmaker_ugmembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprocessmaker_ugmembers[".fieldsForRegister"] = array();
	
$tdataprocessmaker_ugmembers[".listAjax"] = false;

	$tdataprocessmaker_ugmembers[".audit"] = true;

	$tdataprocessmaker_ugmembers[".locking"] = false;

$tdataprocessmaker_ugmembers[".edit"] = true;
$tdataprocessmaker_ugmembers[".afterEditAction"] = 1;
$tdataprocessmaker_ugmembers[".closePopupAfterEdit"] = 1;
$tdataprocessmaker_ugmembers[".afterEditActionDetTable"] = "";

$tdataprocessmaker_ugmembers[".add"] = true;
$tdataprocessmaker_ugmembers[".afterAddAction"] = 1;
$tdataprocessmaker_ugmembers[".closePopupAfterAdd"] = 1;
$tdataprocessmaker_ugmembers[".afterAddActionDetTable"] = "";

$tdataprocessmaker_ugmembers[".list"] = true;

$tdataprocessmaker_ugmembers[".inlineEdit"] = true;


$tdataprocessmaker_ugmembers[".reorderRecordsByHeader"] = true;
$tdataprocessmaker_ugmembers[".createSortByDropdown"] = true;
$tdataprocessmaker_ugmembers[".strSortControlSettingsJSON"] = "";



$tdataprocessmaker_ugmembers[".inlineAdd"] = true;
$tdataprocessmaker_ugmembers[".view"] = true;

$tdataprocessmaker_ugmembers[".import"] = true;

$tdataprocessmaker_ugmembers[".exportTo"] = true;

$tdataprocessmaker_ugmembers[".printFriendly"] = true;

$tdataprocessmaker_ugmembers[".delete"] = true;

$tdataprocessmaker_ugmembers[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataprocessmaker_ugmembers[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataprocessmaker_ugmembers[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataprocessmaker_ugmembers[".searchSaving"] = false;
//

$tdataprocessmaker_ugmembers[".showSearchPanel"] = true;
		$tdataprocessmaker_ugmembers[".flexibleSearch"] = true;

$tdataprocessmaker_ugmembers[".isUseAjaxSuggest"] = true;

$tdataprocessmaker_ugmembers[".rowHighlite"] = true;



				

$tdataprocessmaker_ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdataprocessmaker_ugmembers[".buttonsAdded"] = false;

$tdataprocessmaker_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocessmaker_ugmembers[".isUseTimeForSearch"] = false;





$tdataprocessmaker_ugmembers[".allSearchFields"] = array();
$tdataprocessmaker_ugmembers[".filterFields"] = array();
$tdataprocessmaker_ugmembers[".requiredSearchFields"] = array();

$tdataprocessmaker_ugmembers[".allSearchFields"][] = "UserName";
	$tdataprocessmaker_ugmembers[".allSearchFields"][] = "GroupID";
	

$tdataprocessmaker_ugmembers[".googleLikeFields"] = array();
$tdataprocessmaker_ugmembers[".googleLikeFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".googleLikeFields"][] = "GroupID";


$tdataprocessmaker_ugmembers[".advSearchFields"] = array();
$tdataprocessmaker_ugmembers[".advSearchFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".advSearchFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".tableType"] = "list";

$tdataprocessmaker_ugmembers[".printerPageOrientation"] = 0;
$tdataprocessmaker_ugmembers[".nPrinterPageScale"] = 100;

$tdataprocessmaker_ugmembers[".nPrinterSplitRecords"] = 40;

$tdataprocessmaker_ugmembers[".nPrinterPDFSplitRecords"] = 40;



$tdataprocessmaker_ugmembers[".geocodingEnabled"] = false;





$tdataprocessmaker_ugmembers[".listGridLayout"] = 3;


$tdataprocessmaker_ugmembers[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataprocessmaker_ugmembers[".pageSize"] = 20;

$tdataprocessmaker_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprocessmaker_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdataprocessmaker_ugmembers[".orderindexes"] = array();

$tdataprocessmaker_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID";
$tdataprocessmaker_ugmembers[".sqlFrom"] = "FROM processmaker_ugmembers";
$tdataprocessmaker_ugmembers[".sqlWhereExpr"] = "";
$tdataprocessmaker_ugmembers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocessmaker_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocessmaker_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdataprocessmaker_ugmembers[".highlightSearchResults"] = true;

$tableKeysprocessmaker_ugmembers = array();
$tableKeysprocessmaker_ugmembers[] = "UserName";
$tableKeysprocessmaker_ugmembers[] = "GroupID";
$tdataprocessmaker_ugmembers[".Keys"] = $tableKeysprocessmaker_ugmembers;

$tdataprocessmaker_ugmembers[".listFields"] = array();
$tdataprocessmaker_ugmembers[".listFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".listFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".hideMobileList"] = array();


$tdataprocessmaker_ugmembers[".viewFields"] = array();
$tdataprocessmaker_ugmembers[".viewFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".viewFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".addFields"] = array();
$tdataprocessmaker_ugmembers[".addFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".addFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".masterListFields"] = array();
$tdataprocessmaker_ugmembers[".masterListFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".masterListFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".inlineAddFields"] = array();
$tdataprocessmaker_ugmembers[".inlineAddFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".inlineAddFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".editFields"] = array();
$tdataprocessmaker_ugmembers[".editFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".editFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".inlineEditFields"] = array();
$tdataprocessmaker_ugmembers[".inlineEditFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".inlineEditFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".updateSelectedFields"] = array();
$tdataprocessmaker_ugmembers[".updateSelectedFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".updateSelectedFields"][] = "GroupID";


$tdataprocessmaker_ugmembers[".exportFields"] = array();
$tdataprocessmaker_ugmembers[".exportFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".exportFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".importFields"] = array();
$tdataprocessmaker_ugmembers[".importFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".importFields"][] = "GroupID";

$tdataprocessmaker_ugmembers[".printFields"] = array();
$tdataprocessmaker_ugmembers[".printFields"][] = "UserName";
$tdataprocessmaker_ugmembers[".printFields"][] = "GroupID";

//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "processmaker_ugmembers";
	$fdata["Label"] = GetFieldLabel("processmaker_ugmembers","UserName");
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

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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




	$tdataprocessmaker_ugmembers["UserName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "processmaker_ugmembers";
	$fdata["Label"] = GetFieldLabel("processmaker_ugmembers","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataprocessmaker_ugmembers["GroupID"] = $fdata;


$tables_data["processmaker_ugmembers"]=&$tdataprocessmaker_ugmembers;
$field_labels["processmaker_ugmembers"] = &$fieldLabelsprocessmaker_ugmembers;
$fieldToolTips["processmaker_ugmembers"] = &$fieldToolTipsprocessmaker_ugmembers;
$placeHolders["processmaker_ugmembers"] = &$placeHoldersprocessmaker_ugmembers;
$page_titles["processmaker_ugmembers"] = &$pageTitlesprocessmaker_ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["processmaker_ugmembers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["processmaker_ugmembers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_processmaker_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID";
$proto0["m_strFrom"] = "FROM processmaker_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "processmaker_ugmembers",
	"m_srcTableName" => "processmaker_ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "processmaker_ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "processmaker_ugmembers",
	"m_srcTableName" => "processmaker_ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "processmaker_ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "processmaker_ugmembers";
$proto11["m_srcTableName"] = "processmaker_ugmembers";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "UserName";
$proto11["m_columns"][] = "GroupID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "processmaker_ugmembers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "processmaker_ugmembers";
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
$proto0["m_srcTableName"]="processmaker_ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_processmaker_ugmembers = createSqlQuery_processmaker_ugmembers();


	
						;

		

$tdataprocessmaker_ugmembers[".sqlquery"] = $queryData_processmaker_ugmembers;

$tableEvents["processmaker_ugmembers"] = new eventsBase;
$tdataprocessmaker_ugmembers[".hasEvents"] = false;

?>
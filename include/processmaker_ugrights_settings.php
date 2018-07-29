<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprocessmaker_ugrights = array();
	$tdataprocessmaker_ugrights[".truncateText"] = true;
	$tdataprocessmaker_ugrights[".NumberOfChars"] = 20;
	$tdataprocessmaker_ugrights[".ShortName"] = "processmaker_ugrights";
	$tdataprocessmaker_ugrights[".OwnerID"] = "";
	$tdataprocessmaker_ugrights[".OriginalTable"] = "processmaker_ugrights";

//	field labels
$fieldLabelsprocessmaker_ugrights = array();
$fieldToolTipsprocessmaker_ugrights = array();
$pageTitlesprocessmaker_ugrights = array();
$placeHoldersprocessmaker_ugrights = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsprocessmaker_ugrights["Japanese"] = array();
	$fieldToolTipsprocessmaker_ugrights["Japanese"] = array();
	$placeHoldersprocessmaker_ugrights["Japanese"] = array();
	$pageTitlesprocessmaker_ugrights["Japanese"] = array();
	$fieldLabelsprocessmaker_ugrights["Japanese"]["TableName"] = "テーブル名";
	$fieldToolTipsprocessmaker_ugrights["Japanese"]["TableName"] = "";
	$placeHoldersprocessmaker_ugrights["Japanese"]["TableName"] = "";
	$fieldLabelsprocessmaker_ugrights["Japanese"]["GroupID"] = "グループID";
	$fieldToolTipsprocessmaker_ugrights["Japanese"]["GroupID"] = "";
	$placeHoldersprocessmaker_ugrights["Japanese"]["GroupID"] = "";
	$fieldLabelsprocessmaker_ugrights["Japanese"]["AccessMask"] = "アクセスマスク";
	$fieldToolTipsprocessmaker_ugrights["Japanese"]["AccessMask"] = "";
	$placeHoldersprocessmaker_ugrights["Japanese"]["AccessMask"] = "";
	if (count($fieldToolTipsprocessmaker_ugrights["Japanese"]))
		$tdataprocessmaker_ugrights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocessmaker_ugrights["English"] = array();
	$fieldToolTipsprocessmaker_ugrights["English"] = array();
	$placeHoldersprocessmaker_ugrights["English"] = array();
	$pageTitlesprocessmaker_ugrights["English"] = array();
	$fieldLabelsprocessmaker_ugrights["English"]["TableName"] = "テーブル名";
	$fieldToolTipsprocessmaker_ugrights["English"]["TableName"] = "";
	$placeHoldersprocessmaker_ugrights["English"]["TableName"] = "";
	$fieldLabelsprocessmaker_ugrights["English"]["GroupID"] = "グループID";
	$fieldToolTipsprocessmaker_ugrights["English"]["GroupID"] = "";
	$placeHoldersprocessmaker_ugrights["English"]["GroupID"] = "";
	$fieldLabelsprocessmaker_ugrights["English"]["AccessMask"] = "アクセスマスク";
	$fieldToolTipsprocessmaker_ugrights["English"]["AccessMask"] = "";
	$placeHoldersprocessmaker_ugrights["English"]["AccessMask"] = "";
	if (count($fieldToolTipsprocessmaker_ugrights["English"]))
		$tdataprocessmaker_ugrights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprocessmaker_ugrights[""] = array();
	$fieldToolTipsprocessmaker_ugrights[""] = array();
	$placeHoldersprocessmaker_ugrights[""] = array();
	$pageTitlesprocessmaker_ugrights[""] = array();
	if (count($fieldToolTipsprocessmaker_ugrights[""]))
		$tdataprocessmaker_ugrights[".isUseToolTips"] = true;
}


	$tdataprocessmaker_ugrights[".NCSearch"] = true;



$tdataprocessmaker_ugrights[".shortTableName"] = "processmaker_ugrights";
$tdataprocessmaker_ugrights[".nSecOptions"] = 0;
$tdataprocessmaker_ugrights[".recsPerRowPrint"] = 1;
$tdataprocessmaker_ugrights[".mainTableOwnerID"] = "";
$tdataprocessmaker_ugrights[".moveNext"] = 0;
$tdataprocessmaker_ugrights[".entityType"] = 0;

$tdataprocessmaker_ugrights[".strOriginalTableName"] = "processmaker_ugrights";

	



$tdataprocessmaker_ugrights[".showAddInPopup"] = false;

$tdataprocessmaker_ugrights[".showEditInPopup"] = false;

$tdataprocessmaker_ugrights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprocessmaker_ugrights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprocessmaker_ugrights[".fieldsForRegister"] = array();
	
$tdataprocessmaker_ugrights[".listAjax"] = false;

	$tdataprocessmaker_ugrights[".audit"] = true;

	$tdataprocessmaker_ugrights[".locking"] = false;

$tdataprocessmaker_ugrights[".edit"] = true;
$tdataprocessmaker_ugrights[".afterEditAction"] = 1;
$tdataprocessmaker_ugrights[".closePopupAfterEdit"] = 1;
$tdataprocessmaker_ugrights[".afterEditActionDetTable"] = "";

$tdataprocessmaker_ugrights[".add"] = true;
$tdataprocessmaker_ugrights[".afterAddAction"] = 1;
$tdataprocessmaker_ugrights[".closePopupAfterAdd"] = 1;
$tdataprocessmaker_ugrights[".afterAddActionDetTable"] = "";

$tdataprocessmaker_ugrights[".list"] = true;

$tdataprocessmaker_ugrights[".inlineEdit"] = true;


$tdataprocessmaker_ugrights[".reorderRecordsByHeader"] = true;
$tdataprocessmaker_ugrights[".createSortByDropdown"] = true;
$tdataprocessmaker_ugrights[".strSortControlSettingsJSON"] = "";



$tdataprocessmaker_ugrights[".inlineAdd"] = true;
$tdataprocessmaker_ugrights[".view"] = true;

$tdataprocessmaker_ugrights[".import"] = true;

$tdataprocessmaker_ugrights[".exportTo"] = true;

$tdataprocessmaker_ugrights[".printFriendly"] = true;

$tdataprocessmaker_ugrights[".delete"] = true;

$tdataprocessmaker_ugrights[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataprocessmaker_ugrights[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataprocessmaker_ugrights[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataprocessmaker_ugrights[".searchSaving"] = false;
//

$tdataprocessmaker_ugrights[".showSearchPanel"] = true;
		$tdataprocessmaker_ugrights[".flexibleSearch"] = true;

$tdataprocessmaker_ugrights[".isUseAjaxSuggest"] = true;

$tdataprocessmaker_ugrights[".rowHighlite"] = true;



				

$tdataprocessmaker_ugrights[".ajaxCodeSnippetAdded"] = false;

$tdataprocessmaker_ugrights[".buttonsAdded"] = false;

$tdataprocessmaker_ugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocessmaker_ugrights[".isUseTimeForSearch"] = false;





$tdataprocessmaker_ugrights[".allSearchFields"] = array();
$tdataprocessmaker_ugrights[".filterFields"] = array();
$tdataprocessmaker_ugrights[".requiredSearchFields"] = array();

$tdataprocessmaker_ugrights[".allSearchFields"][] = "TableName";
	$tdataprocessmaker_ugrights[".allSearchFields"][] = "GroupID";
	$tdataprocessmaker_ugrights[".allSearchFields"][] = "AccessMask";
	

$tdataprocessmaker_ugrights[".googleLikeFields"] = array();
$tdataprocessmaker_ugrights[".googleLikeFields"][] = "TableName";
$tdataprocessmaker_ugrights[".googleLikeFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".googleLikeFields"][] = "AccessMask";


$tdataprocessmaker_ugrights[".advSearchFields"] = array();
$tdataprocessmaker_ugrights[".advSearchFields"][] = "TableName";
$tdataprocessmaker_ugrights[".advSearchFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".advSearchFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".tableType"] = "list";

$tdataprocessmaker_ugrights[".printerPageOrientation"] = 0;
$tdataprocessmaker_ugrights[".nPrinterPageScale"] = 100;

$tdataprocessmaker_ugrights[".nPrinterSplitRecords"] = 40;

$tdataprocessmaker_ugrights[".nPrinterPDFSplitRecords"] = 40;



$tdataprocessmaker_ugrights[".geocodingEnabled"] = false;





$tdataprocessmaker_ugrights[".listGridLayout"] = 3;


$tdataprocessmaker_ugrights[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataprocessmaker_ugrights[".pageSize"] = 20;

$tdataprocessmaker_ugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprocessmaker_ugrights[".strOrderBy"] = $tstrOrderBy;

$tdataprocessmaker_ugrights[".orderindexes"] = array();

$tdataprocessmaker_ugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask";
$tdataprocessmaker_ugrights[".sqlFrom"] = "FROM processmaker_ugrights";
$tdataprocessmaker_ugrights[".sqlWhereExpr"] = "";
$tdataprocessmaker_ugrights[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocessmaker_ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocessmaker_ugrights[".arrGroupsPerPage"] = $arrGPP;

$tdataprocessmaker_ugrights[".highlightSearchResults"] = true;

$tableKeysprocessmaker_ugrights = array();
$tableKeysprocessmaker_ugrights[] = "TableName";
$tableKeysprocessmaker_ugrights[] = "GroupID";
$tdataprocessmaker_ugrights[".Keys"] = $tableKeysprocessmaker_ugrights;

$tdataprocessmaker_ugrights[".listFields"] = array();
$tdataprocessmaker_ugrights[".listFields"][] = "TableName";
$tdataprocessmaker_ugrights[".listFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".listFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".hideMobileList"] = array();


$tdataprocessmaker_ugrights[".viewFields"] = array();
$tdataprocessmaker_ugrights[".viewFields"][] = "TableName";
$tdataprocessmaker_ugrights[".viewFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".viewFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".addFields"] = array();
$tdataprocessmaker_ugrights[".addFields"][] = "TableName";
$tdataprocessmaker_ugrights[".addFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".addFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".masterListFields"] = array();
$tdataprocessmaker_ugrights[".masterListFields"][] = "TableName";
$tdataprocessmaker_ugrights[".masterListFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".masterListFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".inlineAddFields"] = array();
$tdataprocessmaker_ugrights[".inlineAddFields"][] = "TableName";
$tdataprocessmaker_ugrights[".inlineAddFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".inlineAddFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".editFields"] = array();
$tdataprocessmaker_ugrights[".editFields"][] = "TableName";
$tdataprocessmaker_ugrights[".editFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".editFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".inlineEditFields"] = array();
$tdataprocessmaker_ugrights[".inlineEditFields"][] = "TableName";
$tdataprocessmaker_ugrights[".inlineEditFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".inlineEditFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".updateSelectedFields"] = array();
$tdataprocessmaker_ugrights[".updateSelectedFields"][] = "TableName";
$tdataprocessmaker_ugrights[".updateSelectedFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".updateSelectedFields"][] = "AccessMask";


$tdataprocessmaker_ugrights[".exportFields"] = array();
$tdataprocessmaker_ugrights[".exportFields"][] = "TableName";
$tdataprocessmaker_ugrights[".exportFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".exportFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".importFields"] = array();
$tdataprocessmaker_ugrights[".importFields"][] = "TableName";
$tdataprocessmaker_ugrights[".importFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".importFields"][] = "AccessMask";

$tdataprocessmaker_ugrights[".printFields"] = array();
$tdataprocessmaker_ugrights[".printFields"][] = "TableName";
$tdataprocessmaker_ugrights[".printFields"][] = "GroupID";
$tdataprocessmaker_ugrights[".printFields"][] = "AccessMask";

//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "processmaker_ugrights";
	$fdata["Label"] = GetFieldLabel("processmaker_ugrights","TableName");
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

		$fdata["strField"] = "TableName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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




	$tdataprocessmaker_ugrights["TableName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "processmaker_ugrights";
	$fdata["Label"] = GetFieldLabel("processmaker_ugrights","GroupID");
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




	$tdataprocessmaker_ugrights["GroupID"] = $fdata;
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "processmaker_ugrights";
	$fdata["Label"] = GetFieldLabel("processmaker_ugrights","AccessMask");
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

		$fdata["strField"] = "AccessMask";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataprocessmaker_ugrights["AccessMask"] = $fdata;


$tables_data["processmaker_ugrights"]=&$tdataprocessmaker_ugrights;
$field_labels["processmaker_ugrights"] = &$fieldLabelsprocessmaker_ugrights;
$fieldToolTips["processmaker_ugrights"] = &$fieldToolTipsprocessmaker_ugrights;
$placeHolders["processmaker_ugrights"] = &$placeHoldersprocessmaker_ugrights;
$page_titles["processmaker_ugrights"] = &$pageTitlesprocessmaker_ugrights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["processmaker_ugrights"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["processmaker_ugrights"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_processmaker_ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask";
$proto0["m_strFrom"] = "FROM processmaker_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "processmaker_ugrights",
	"m_srcTableName" => "processmaker_ugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "processmaker_ugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "processmaker_ugrights",
	"m_srcTableName" => "processmaker_ugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "processmaker_ugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "processmaker_ugrights",
	"m_srcTableName" => "processmaker_ugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "processmaker_ugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "processmaker_ugrights";
$proto13["m_srcTableName"] = "processmaker_ugrights";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TableName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "processmaker_ugrights";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "processmaker_ugrights";
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
$proto0["m_srcTableName"]="processmaker_ugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_processmaker_ugrights = createSqlQuery_processmaker_ugrights();


	
						;

			

$tdataprocessmaker_ugrights[".sqlquery"] = $queryData_processmaker_ugrights;

$tableEvents["processmaker_ugrights"] = new eventsBase;
$tdataprocessmaker_ugrights[".hasEvents"] = false;

?>
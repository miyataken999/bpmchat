<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprocessmaker_uggroups = array();
	$tdataprocessmaker_uggroups[".truncateText"] = true;
	$tdataprocessmaker_uggroups[".NumberOfChars"] = 20;
	$tdataprocessmaker_uggroups[".ShortName"] = "processmaker_uggroups";
	$tdataprocessmaker_uggroups[".OwnerID"] = "";
	$tdataprocessmaker_uggroups[".OriginalTable"] = "processmaker_uggroups";

//	field labels
$fieldLabelsprocessmaker_uggroups = array();
$fieldToolTipsprocessmaker_uggroups = array();
$pageTitlesprocessmaker_uggroups = array();
$placeHoldersprocessmaker_uggroups = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsprocessmaker_uggroups["Japanese"] = array();
	$fieldToolTipsprocessmaker_uggroups["Japanese"] = array();
	$placeHoldersprocessmaker_uggroups["Japanese"] = array();
	$pageTitlesprocessmaker_uggroups["Japanese"] = array();
	$fieldLabelsprocessmaker_uggroups["Japanese"]["GroupID"] = "グループID";
	$fieldToolTipsprocessmaker_uggroups["Japanese"]["GroupID"] = "";
	$placeHoldersprocessmaker_uggroups["Japanese"]["GroupID"] = "";
	$fieldLabelsprocessmaker_uggroups["Japanese"]["Label"] = "ラベル";
	$fieldToolTipsprocessmaker_uggroups["Japanese"]["Label"] = "";
	$placeHoldersprocessmaker_uggroups["Japanese"]["Label"] = "";
	if (count($fieldToolTipsprocessmaker_uggroups["Japanese"]))
		$tdataprocessmaker_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocessmaker_uggroups["English"] = array();
	$fieldToolTipsprocessmaker_uggroups["English"] = array();
	$placeHoldersprocessmaker_uggroups["English"] = array();
	$pageTitlesprocessmaker_uggroups["English"] = array();
	$fieldLabelsprocessmaker_uggroups["English"]["GroupID"] = "グループID";
	$fieldToolTipsprocessmaker_uggroups["English"]["GroupID"] = "";
	$placeHoldersprocessmaker_uggroups["English"]["GroupID"] = "";
	$fieldLabelsprocessmaker_uggroups["English"]["Label"] = "ラベル";
	$fieldToolTipsprocessmaker_uggroups["English"]["Label"] = "";
	$placeHoldersprocessmaker_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipsprocessmaker_uggroups["English"]))
		$tdataprocessmaker_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprocessmaker_uggroups[""] = array();
	$fieldToolTipsprocessmaker_uggroups[""] = array();
	$placeHoldersprocessmaker_uggroups[""] = array();
	$pageTitlesprocessmaker_uggroups[""] = array();
	if (count($fieldToolTipsprocessmaker_uggroups[""]))
		$tdataprocessmaker_uggroups[".isUseToolTips"] = true;
}


	$tdataprocessmaker_uggroups[".NCSearch"] = true;



$tdataprocessmaker_uggroups[".shortTableName"] = "processmaker_uggroups";
$tdataprocessmaker_uggroups[".nSecOptions"] = 0;
$tdataprocessmaker_uggroups[".recsPerRowPrint"] = 1;
$tdataprocessmaker_uggroups[".mainTableOwnerID"] = "";
$tdataprocessmaker_uggroups[".moveNext"] = 0;
$tdataprocessmaker_uggroups[".entityType"] = 0;

$tdataprocessmaker_uggroups[".strOriginalTableName"] = "processmaker_uggroups";

	



$tdataprocessmaker_uggroups[".showAddInPopup"] = false;

$tdataprocessmaker_uggroups[".showEditInPopup"] = false;

$tdataprocessmaker_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprocessmaker_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprocessmaker_uggroups[".fieldsForRegister"] = array();
	
$tdataprocessmaker_uggroups[".listAjax"] = false;

	$tdataprocessmaker_uggroups[".audit"] = true;

	$tdataprocessmaker_uggroups[".locking"] = false;

$tdataprocessmaker_uggroups[".edit"] = true;
$tdataprocessmaker_uggroups[".afterEditAction"] = 1;
$tdataprocessmaker_uggroups[".closePopupAfterEdit"] = 1;
$tdataprocessmaker_uggroups[".afterEditActionDetTable"] = "";

$tdataprocessmaker_uggroups[".add"] = true;
$tdataprocessmaker_uggroups[".afterAddAction"] = 1;
$tdataprocessmaker_uggroups[".closePopupAfterAdd"] = 1;
$tdataprocessmaker_uggroups[".afterAddActionDetTable"] = "";

$tdataprocessmaker_uggroups[".list"] = true;

$tdataprocessmaker_uggroups[".inlineEdit"] = true;


$tdataprocessmaker_uggroups[".reorderRecordsByHeader"] = true;
$tdataprocessmaker_uggroups[".createSortByDropdown"] = true;
$tdataprocessmaker_uggroups[".strSortControlSettingsJSON"] = "";



$tdataprocessmaker_uggroups[".inlineAdd"] = true;
$tdataprocessmaker_uggroups[".view"] = true;

$tdataprocessmaker_uggroups[".import"] = true;

$tdataprocessmaker_uggroups[".exportTo"] = true;

$tdataprocessmaker_uggroups[".printFriendly"] = true;

$tdataprocessmaker_uggroups[".delete"] = true;

$tdataprocessmaker_uggroups[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataprocessmaker_uggroups[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataprocessmaker_uggroups[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataprocessmaker_uggroups[".searchSaving"] = false;
//

$tdataprocessmaker_uggroups[".showSearchPanel"] = true;
		$tdataprocessmaker_uggroups[".flexibleSearch"] = true;

$tdataprocessmaker_uggroups[".isUseAjaxSuggest"] = true;

$tdataprocessmaker_uggroups[".rowHighlite"] = true;



				

$tdataprocessmaker_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdataprocessmaker_uggroups[".buttonsAdded"] = false;

$tdataprocessmaker_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocessmaker_uggroups[".isUseTimeForSearch"] = false;





$tdataprocessmaker_uggroups[".allSearchFields"] = array();
$tdataprocessmaker_uggroups[".filterFields"] = array();
$tdataprocessmaker_uggroups[".requiredSearchFields"] = array();

$tdataprocessmaker_uggroups[".allSearchFields"][] = "GroupID";
	$tdataprocessmaker_uggroups[".allSearchFields"][] = "Label";
	

$tdataprocessmaker_uggroups[".googleLikeFields"] = array();
$tdataprocessmaker_uggroups[".googleLikeFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".googleLikeFields"][] = "Label";


$tdataprocessmaker_uggroups[".advSearchFields"] = array();
$tdataprocessmaker_uggroups[".advSearchFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".advSearchFields"][] = "Label";

$tdataprocessmaker_uggroups[".tableType"] = "list";

$tdataprocessmaker_uggroups[".printerPageOrientation"] = 0;
$tdataprocessmaker_uggroups[".nPrinterPageScale"] = 100;

$tdataprocessmaker_uggroups[".nPrinterSplitRecords"] = 40;

$tdataprocessmaker_uggroups[".nPrinterPDFSplitRecords"] = 40;



$tdataprocessmaker_uggroups[".geocodingEnabled"] = false;





$tdataprocessmaker_uggroups[".listGridLayout"] = 3;


$tdataprocessmaker_uggroups[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataprocessmaker_uggroups[".pageSize"] = 20;

$tdataprocessmaker_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprocessmaker_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdataprocessmaker_uggroups[".orderindexes"] = array();

$tdataprocessmaker_uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdataprocessmaker_uggroups[".sqlFrom"] = "FROM processmaker_uggroups";
$tdataprocessmaker_uggroups[".sqlWhereExpr"] = "";
$tdataprocessmaker_uggroups[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocessmaker_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocessmaker_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdataprocessmaker_uggroups[".highlightSearchResults"] = true;

$tableKeysprocessmaker_uggroups = array();
$tableKeysprocessmaker_uggroups[] = "GroupID";
$tdataprocessmaker_uggroups[".Keys"] = $tableKeysprocessmaker_uggroups;

$tdataprocessmaker_uggroups[".listFields"] = array();
$tdataprocessmaker_uggroups[".listFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".listFields"][] = "Label";

$tdataprocessmaker_uggroups[".hideMobileList"] = array();


$tdataprocessmaker_uggroups[".viewFields"] = array();
$tdataprocessmaker_uggroups[".viewFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".viewFields"][] = "Label";

$tdataprocessmaker_uggroups[".addFields"] = array();
$tdataprocessmaker_uggroups[".addFields"][] = "Label";

$tdataprocessmaker_uggroups[".masterListFields"] = array();
$tdataprocessmaker_uggroups[".masterListFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".masterListFields"][] = "Label";

$tdataprocessmaker_uggroups[".inlineAddFields"] = array();
$tdataprocessmaker_uggroups[".inlineAddFields"][] = "Label";

$tdataprocessmaker_uggroups[".editFields"] = array();
$tdataprocessmaker_uggroups[".editFields"][] = "Label";

$tdataprocessmaker_uggroups[".inlineEditFields"] = array();
$tdataprocessmaker_uggroups[".inlineEditFields"][] = "Label";

$tdataprocessmaker_uggroups[".updateSelectedFields"] = array();
$tdataprocessmaker_uggroups[".updateSelectedFields"][] = "Label";


$tdataprocessmaker_uggroups[".exportFields"] = array();
$tdataprocessmaker_uggroups[".exportFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".exportFields"][] = "Label";

$tdataprocessmaker_uggroups[".importFields"] = array();
$tdataprocessmaker_uggroups[".importFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".importFields"][] = "Label";

$tdataprocessmaker_uggroups[".printFields"] = array();
$tdataprocessmaker_uggroups[".printFields"][] = "GroupID";
$tdataprocessmaker_uggroups[".printFields"][] = "Label";

//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "processmaker_uggroups";
	$fdata["Label"] = GetFieldLabel("processmaker_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataprocessmaker_uggroups["GroupID"] = $fdata;
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "processmaker_uggroups";
	$fdata["Label"] = GetFieldLabel("processmaker_uggroups","Label");
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

		$fdata["strField"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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




	$tdataprocessmaker_uggroups["Label"] = $fdata;


$tables_data["processmaker_uggroups"]=&$tdataprocessmaker_uggroups;
$field_labels["processmaker_uggroups"] = &$fieldLabelsprocessmaker_uggroups;
$fieldToolTips["processmaker_uggroups"] = &$fieldToolTipsprocessmaker_uggroups;
$placeHolders["processmaker_uggroups"] = &$placeHoldersprocessmaker_uggroups;
$page_titles["processmaker_uggroups"] = &$pageTitlesprocessmaker_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["processmaker_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["processmaker_uggroups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_processmaker_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM processmaker_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "processmaker_uggroups",
	"m_srcTableName" => "processmaker_uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "processmaker_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "processmaker_uggroups",
	"m_srcTableName" => "processmaker_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "processmaker_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "processmaker_uggroups";
$proto11["m_srcTableName"] = "processmaker_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "processmaker_uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "processmaker_uggroups";
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
$proto0["m_srcTableName"]="processmaker_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_processmaker_uggroups = createSqlQuery_processmaker_uggroups();


	
						;

		

$tdataprocessmaker_uggroups[".sqlquery"] = $queryData_processmaker_uggroups;

$tableEvents["processmaker_uggroups"] = new eventsBase;
$tdataprocessmaker_uggroups[".hasEvents"] = false;

?>
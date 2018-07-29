<?php
require_once(getabspath("classes/cipherer.php"));




$tdataretbltype = array();
	$tdataretbltype[".truncateText"] = true;
	$tdataretbltype[".NumberOfChars"] = 80;
	$tdataretbltype[".ShortName"] = "retbltype";
	$tdataretbltype[".OwnerID"] = "";
	$tdataretbltype[".OriginalTable"] = "retbltype";

//	field labels
$fieldLabelsretbltype = array();
$fieldToolTipsretbltype = array();
$pageTitlesretbltype = array();
$placeHoldersretbltype = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsretbltype["Japanese"] = array();
	$fieldToolTipsretbltype["Japanese"] = array();
	$placeHoldersretbltype["Japanese"] = array();
	$pageTitlesretbltype["Japanese"] = array();
	$fieldLabelsretbltype["Japanese"]["sType"] = "Sタイプ";
	$fieldToolTipsretbltype["Japanese"]["sType"] = "";
	$placeHoldersretbltype["Japanese"]["sType"] = "";
	$fieldLabelsretbltype["Japanese"]["TypeID"] = "タイプID";
	$fieldToolTipsretbltype["Japanese"]["TypeID"] = "";
	$placeHoldersretbltype["Japanese"]["TypeID"] = "";
	if (count($fieldToolTipsretbltype["Japanese"]))
		$tdataretbltype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsretbltype[""] = array();
	$fieldToolTipsretbltype[""] = array();
	$placeHoldersretbltype[""] = array();
	$pageTitlesretbltype[""] = array();
	if (count($fieldToolTipsretbltype[""]))
		$tdataretbltype[".isUseToolTips"] = true;
}





$tdataretbltype[".shortTableName"] = "retbltype";
$tdataretbltype[".nSecOptions"] = 0;
$tdataretbltype[".recsPerRowPrint"] = 1;
$tdataretbltype[".mainTableOwnerID"] = "";
$tdataretbltype[".moveNext"] = 1;
$tdataretbltype[".entityType"] = 0;

$tdataretbltype[".strOriginalTableName"] = "retbltype";

	



$tdataretbltype[".showAddInPopup"] = false;

$tdataretbltype[".showEditInPopup"] = false;

$tdataretbltype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataretbltype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataretbltype[".fieldsForRegister"] = array();

$tdataretbltype[".listAjax"] = false;

	$tdataretbltype[".audit"] = false;

	$tdataretbltype[".locking"] = false;

$tdataretbltype[".edit"] = true;
$tdataretbltype[".afterEditAction"] = 1;
$tdataretbltype[".closePopupAfterEdit"] = 1;
$tdataretbltype[".afterEditActionDetTable"] = "";

$tdataretbltype[".add"] = true;
$tdataretbltype[".afterAddAction"] = 1;
$tdataretbltype[".closePopupAfterAdd"] = 1;
$tdataretbltype[".afterAddActionDetTable"] = "";

$tdataretbltype[".list"] = true;

$tdataretbltype[".inlineEdit"] = true;


$tdataretbltype[".reorderRecordsByHeader"] = true;
$tdataretbltype[".createSortByDropdown"] = true;
$tdataretbltype[".strSortControlSettingsJSON"] = "";



$tdataretbltype[".inlineAdd"] = true;
$tdataretbltype[".view"] = true;




$tdataretbltype[".delete"] = true;

$tdataretbltype[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataretbltype[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataretbltype[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataretbltype[".searchSaving"] = false;
//

$tdataretbltype[".showSearchPanel"] = true;
		$tdataretbltype[".flexibleSearch"] = true;

$tdataretbltype[".isUseAjaxSuggest"] = true;

$tdataretbltype[".rowHighlite"] = true;



	

$tdataretbltype[".ajaxCodeSnippetAdded"] = false;

$tdataretbltype[".buttonsAdded"] = false;

$tdataretbltype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretbltype[".isUseTimeForSearch"] = false;





$tdataretbltype[".allSearchFields"] = array();
$tdataretbltype[".filterFields"] = array();
$tdataretbltype[".requiredSearchFields"] = array();



$tdataretbltype[".googleLikeFields"] = array();
$tdataretbltype[".googleLikeFields"][] = "sType";



$tdataretbltype[".tableType"] = "list";

$tdataretbltype[".printerPageOrientation"] = 0;
$tdataretbltype[".nPrinterPageScale"] = 100;

$tdataretbltype[".nPrinterSplitRecords"] = 40;

$tdataretbltype[".nPrinterPDFSplitRecords"] = 40;



$tdataretbltype[".geocodingEnabled"] = false;





$tdataretbltype[".listGridLayout"] = 3;


$tdataretbltype[".isResizeColumns"] = true;

$tdataretbltype[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataretbltype[".pageSize"] = 20;

$tdataretbltype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataretbltype[".strOrderBy"] = $tstrOrderBy;

$tdataretbltype[".orderindexes"] = array();

$tdataretbltype[".sqlHead"] = "select sType,  TypeID";
$tdataretbltype[".sqlFrom"] = "FROM retbltype";
$tdataretbltype[".sqlWhereExpr"] = "";
$tdataretbltype[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretbltype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretbltype[".arrGroupsPerPage"] = $arrGPP;


$tableKeysretbltype = array();
$tableKeysretbltype[] = "TypeID";
$tdataretbltype[".Keys"] = $tableKeysretbltype;

$tdataretbltype[".listFields"] = array();
$tdataretbltype[".listFields"][] = "sType";

$tdataretbltype[".hideMobileList"] = array();


$tdataretbltype[".viewFields"] = array();
$tdataretbltype[".viewFields"][] = "sType";

$tdataretbltype[".addFields"] = array();
$tdataretbltype[".addFields"][] = "sType";

$tdataretbltype[".masterListFields"] = array();

$tdataretbltype[".inlineAddFields"] = array();
$tdataretbltype[".inlineAddFields"][] = "sType";

$tdataretbltype[".editFields"] = array();
$tdataretbltype[".editFields"][] = "sType";

$tdataretbltype[".inlineEditFields"] = array();
$tdataretbltype[".inlineEditFields"][] = "sType";

$tdataretbltype[".updateSelectedFields"] = array();
$tdataretbltype[".updateSelectedFields"][] = "sType";


$tdataretbltype[".exportFields"] = array();

$tdataretbltype[".importFields"] = array();
$tdataretbltype[".importFields"][] = "sType";
$tdataretbltype[".importFields"][] = "TypeID";

$tdataretbltype[".printFields"] = array();

//	sType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sType";
	$fdata["GoodName"] = "sType";
	$fdata["ownerTable"] = "retbltype";
	$fdata["Label"] = GetFieldLabel("retbltype","sType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "sType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sType";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "photos";

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








	$tdataretbltype["sType"] = $fdata;
//	TypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TypeID";
	$fdata["GoodName"] = "TypeID";
	$fdata["ownerTable"] = "retbltype";
	$fdata["Label"] = GetFieldLabel("retbltype","TypeID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "TypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeID";

	
	
			
				$fdata["UploadFolder"] = "photos";

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








	$tdataretbltype["TypeID"] = $fdata;


$tables_data["retbltype"]=&$tdataretbltype;
$field_labels["retbltype"] = &$fieldLabelsretbltype;
$fieldToolTips["retbltype"] = &$fieldToolTipsretbltype;
$placeHolders["retbltype"] = &$placeHoldersretbltype;
$page_titles["retbltype"] = &$pageTitlesretbltype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["retbltype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["retbltype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_retbltype()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "sType,  TypeID";
$proto0["m_strFrom"] = "FROM retbltype";
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
	"m_strName" => "sType",
	"m_strTable" => "retbltype",
	"m_srcTableName" => "retbltype"
));

$proto6["m_sql"] = "sType";
$proto6["m_srcTableName"] = "retbltype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeID",
	"m_strTable" => "retbltype",
	"m_srcTableName" => "retbltype"
));

$proto8["m_sql"] = "TypeID";
$proto8["m_srcTableName"] = "retbltype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "retbltype";
$proto11["m_srcTableName"] = "retbltype";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "sType";
$proto11["m_columns"][] = "TypeID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "retbltype";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "retbltype";
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
$proto0["m_srcTableName"]="retbltype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retbltype = createSqlQuery_retbltype();


	
						;

		

$tdataretbltype[".sqlquery"] = $queryData_retbltype;

$tableEvents["retbltype"] = new eventsBase;
$tdataretbltype[".hasEvents"] = false;

?>
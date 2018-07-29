<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSEQUENCES = array();
	$tdataSEQUENCES[".truncateText"] = true;
	$tdataSEQUENCES[".NumberOfChars"] = 20;
	$tdataSEQUENCES[".ShortName"] = "SEQUENCES";
	$tdataSEQUENCES[".OwnerID"] = "";
	$tdataSEQUENCES[".OriginalTable"] = "SEQUENCES";

//	field labels
$fieldLabelsSEQUENCES = array();
$fieldToolTipsSEQUENCES = array();
$pageTitlesSEQUENCES = array();
$placeHoldersSEQUENCES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSEQUENCES["Japanese"] = array();
	$fieldToolTipsSEQUENCES["Japanese"] = array();
	$placeHoldersSEQUENCES["Japanese"] = array();
	$pageTitlesSEQUENCES["Japanese"] = array();
	$fieldLabelsSEQUENCES["Japanese"]["SEQ_NAME"] = "配列名";
	$fieldToolTipsSEQUENCES["Japanese"]["SEQ_NAME"] = "";
	$placeHoldersSEQUENCES["Japanese"]["SEQ_NAME"] = "";
	$fieldLabelsSEQUENCES["Japanese"]["SEQ_VALUE"] = "seqの値";
	$fieldToolTipsSEQUENCES["Japanese"]["SEQ_VALUE"] = "";
	$placeHoldersSEQUENCES["Japanese"]["SEQ_VALUE"] = "";
	if (count($fieldToolTipsSEQUENCES["Japanese"]))
		$tdataSEQUENCES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSEQUENCES["English"] = array();
	$fieldToolTipsSEQUENCES["English"] = array();
	$placeHoldersSEQUENCES["English"] = array();
	$pageTitlesSEQUENCES["English"] = array();
	$fieldLabelsSEQUENCES["English"]["SEQ_NAME"] = "配列名";
	$fieldToolTipsSEQUENCES["English"]["SEQ_NAME"] = "";
	$placeHoldersSEQUENCES["English"]["SEQ_NAME"] = "";
	$fieldLabelsSEQUENCES["English"]["SEQ_VALUE"] = "seqの値";
	$fieldToolTipsSEQUENCES["English"]["SEQ_VALUE"] = "";
	$placeHoldersSEQUENCES["English"]["SEQ_VALUE"] = "";
	if (count($fieldToolTipsSEQUENCES["English"]))
		$tdataSEQUENCES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSEQUENCES[""] = array();
	$fieldToolTipsSEQUENCES[""] = array();
	$placeHoldersSEQUENCES[""] = array();
	$pageTitlesSEQUENCES[""] = array();
	if (count($fieldToolTipsSEQUENCES[""]))
		$tdataSEQUENCES[".isUseToolTips"] = true;
}


	$tdataSEQUENCES[".NCSearch"] = true;



$tdataSEQUENCES[".shortTableName"] = "SEQUENCES";
$tdataSEQUENCES[".nSecOptions"] = 0;
$tdataSEQUENCES[".recsPerRowPrint"] = 1;
$tdataSEQUENCES[".mainTableOwnerID"] = "";
$tdataSEQUENCES[".moveNext"] = 0;
$tdataSEQUENCES[".entityType"] = 0;

$tdataSEQUENCES[".strOriginalTableName"] = "SEQUENCES";

	



$tdataSEQUENCES[".showAddInPopup"] = false;

$tdataSEQUENCES[".showEditInPopup"] = false;

$tdataSEQUENCES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSEQUENCES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSEQUENCES[".fieldsForRegister"] = array();
	
$tdataSEQUENCES[".listAjax"] = false;

	$tdataSEQUENCES[".audit"] = true;

	$tdataSEQUENCES[".locking"] = false;

$tdataSEQUENCES[".edit"] = true;
$tdataSEQUENCES[".afterEditAction"] = 1;
$tdataSEQUENCES[".closePopupAfterEdit"] = 1;
$tdataSEQUENCES[".afterEditActionDetTable"] = "";

$tdataSEQUENCES[".add"] = true;
$tdataSEQUENCES[".afterAddAction"] = 1;
$tdataSEQUENCES[".closePopupAfterAdd"] = 1;
$tdataSEQUENCES[".afterAddActionDetTable"] = "";

$tdataSEQUENCES[".list"] = true;

$tdataSEQUENCES[".inlineEdit"] = true;


$tdataSEQUENCES[".reorderRecordsByHeader"] = true;
$tdataSEQUENCES[".createSortByDropdown"] = true;
$tdataSEQUENCES[".strSortControlSettingsJSON"] = "";



$tdataSEQUENCES[".inlineAdd"] = true;
$tdataSEQUENCES[".view"] = true;

$tdataSEQUENCES[".import"] = true;

$tdataSEQUENCES[".exportTo"] = true;

$tdataSEQUENCES[".printFriendly"] = true;

$tdataSEQUENCES[".delete"] = true;

$tdataSEQUENCES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSEQUENCES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSEQUENCES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSEQUENCES[".searchSaving"] = false;
//

$tdataSEQUENCES[".showSearchPanel"] = true;
		$tdataSEQUENCES[".flexibleSearch"] = true;

$tdataSEQUENCES[".isUseAjaxSuggest"] = true;

$tdataSEQUENCES[".rowHighlite"] = true;



				

$tdataSEQUENCES[".ajaxCodeSnippetAdded"] = false;

$tdataSEQUENCES[".buttonsAdded"] = false;

$tdataSEQUENCES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSEQUENCES[".isUseTimeForSearch"] = false;





$tdataSEQUENCES[".allSearchFields"] = array();
$tdataSEQUENCES[".filterFields"] = array();
$tdataSEQUENCES[".requiredSearchFields"] = array();

$tdataSEQUENCES[".allSearchFields"][] = "SEQ_NAME";
	$tdataSEQUENCES[".allSearchFields"][] = "SEQ_VALUE";
	

$tdataSEQUENCES[".googleLikeFields"] = array();
$tdataSEQUENCES[".googleLikeFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".googleLikeFields"][] = "SEQ_VALUE";


$tdataSEQUENCES[".advSearchFields"] = array();
$tdataSEQUENCES[".advSearchFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".advSearchFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".tableType"] = "list";

$tdataSEQUENCES[".printerPageOrientation"] = 0;
$tdataSEQUENCES[".nPrinterPageScale"] = 100;

$tdataSEQUENCES[".nPrinterSplitRecords"] = 40;

$tdataSEQUENCES[".nPrinterPDFSplitRecords"] = 40;



$tdataSEQUENCES[".geocodingEnabled"] = false;





$tdataSEQUENCES[".listGridLayout"] = 3;


$tdataSEQUENCES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSEQUENCES[".pageSize"] = 20;

$tdataSEQUENCES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSEQUENCES[".strOrderBy"] = $tstrOrderBy;

$tdataSEQUENCES[".orderindexes"] = array();

$tdataSEQUENCES[".sqlHead"] = "SELECT SEQ_NAME,  	SEQ_VALUE";
$tdataSEQUENCES[".sqlFrom"] = "FROM SEQUENCES";
$tdataSEQUENCES[".sqlWhereExpr"] = "";
$tdataSEQUENCES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSEQUENCES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSEQUENCES[".arrGroupsPerPage"] = $arrGPP;

$tdataSEQUENCES[".highlightSearchResults"] = true;

$tableKeysSEQUENCES = array();
$tableKeysSEQUENCES[] = "SEQ_NAME";
$tdataSEQUENCES[".Keys"] = $tableKeysSEQUENCES;

$tdataSEQUENCES[".listFields"] = array();
$tdataSEQUENCES[".listFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".listFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".hideMobileList"] = array();


$tdataSEQUENCES[".viewFields"] = array();
$tdataSEQUENCES[".viewFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".viewFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".addFields"] = array();
$tdataSEQUENCES[".addFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".addFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".masterListFields"] = array();
$tdataSEQUENCES[".masterListFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".masterListFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".inlineAddFields"] = array();
$tdataSEQUENCES[".inlineAddFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".inlineAddFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".editFields"] = array();
$tdataSEQUENCES[".editFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".editFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".inlineEditFields"] = array();
$tdataSEQUENCES[".inlineEditFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".inlineEditFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".updateSelectedFields"] = array();
$tdataSEQUENCES[".updateSelectedFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".updateSelectedFields"][] = "SEQ_VALUE";


$tdataSEQUENCES[".exportFields"] = array();
$tdataSEQUENCES[".exportFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".exportFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".importFields"] = array();
$tdataSEQUENCES[".importFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".importFields"][] = "SEQ_VALUE";

$tdataSEQUENCES[".printFields"] = array();
$tdataSEQUENCES[".printFields"][] = "SEQ_NAME";
$tdataSEQUENCES[".printFields"][] = "SEQ_VALUE";

//	SEQ_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SEQ_NAME";
	$fdata["GoodName"] = "SEQ_NAME";
	$fdata["ownerTable"] = "SEQUENCES";
	$fdata["Label"] = GetFieldLabel("SEQUENCES","SEQ_NAME");
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

		$fdata["strField"] = "SEQ_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEQ_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataSEQUENCES["SEQ_NAME"] = $fdata;
//	SEQ_VALUE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SEQ_VALUE";
	$fdata["GoodName"] = "SEQ_VALUE";
	$fdata["ownerTable"] = "SEQUENCES";
	$fdata["Label"] = GetFieldLabel("SEQUENCES","SEQ_VALUE");
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

		$fdata["strField"] = "SEQ_VALUE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEQ_VALUE";

	
	
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




	$tdataSEQUENCES["SEQ_VALUE"] = $fdata;


$tables_data["SEQUENCES"]=&$tdataSEQUENCES;
$field_labels["SEQUENCES"] = &$fieldLabelsSEQUENCES;
$fieldToolTips["SEQUENCES"] = &$fieldToolTipsSEQUENCES;
$placeHolders["SEQUENCES"] = &$placeHoldersSEQUENCES;
$page_titles["SEQUENCES"] = &$pageTitlesSEQUENCES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SEQUENCES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SEQUENCES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SEQUENCES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SEQ_NAME,  	SEQ_VALUE";
$proto0["m_strFrom"] = "FROM SEQUENCES";
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
	"m_strName" => "SEQ_NAME",
	"m_strTable" => "SEQUENCES",
	"m_srcTableName" => "SEQUENCES"
));

$proto6["m_sql"] = "SEQ_NAME";
$proto6["m_srcTableName"] = "SEQUENCES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SEQ_VALUE",
	"m_strTable" => "SEQUENCES",
	"m_srcTableName" => "SEQUENCES"
));

$proto8["m_sql"] = "SEQ_VALUE";
$proto8["m_srcTableName"] = "SEQUENCES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "SEQUENCES";
$proto11["m_srcTableName"] = "SEQUENCES";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "SEQ_NAME";
$proto11["m_columns"][] = "SEQ_VALUE";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "SEQUENCES";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "SEQUENCES";
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
$proto0["m_srcTableName"]="SEQUENCES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SEQUENCES = createSqlQuery_SEQUENCES();


	
						;

		

$tdataSEQUENCES[".sqlquery"] = $queryData_SEQUENCES;

$tableEvents["SEQUENCES"] = new eventsBase;
$tdataSEQUENCES[".hasEvents"] = false;

?>
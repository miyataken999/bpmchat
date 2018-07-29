<?php
require_once(getabspath("classes/cipherer.php"));




$tdatappcategory1 = array();
	$tdatappcategory1[".truncateText"] = true;
	$tdatappcategory1[".NumberOfChars"] = 80;
	$tdatappcategory1[".ShortName"] = "ppcategory1";
	$tdatappcategory1[".OwnerID"] = "";
	$tdatappcategory1[".OriginalTable"] = "ppcategory";

//	field labels
$fieldLabelsppcategory1 = array();
$fieldToolTipsppcategory1 = array();
$pageTitlesppcategory1 = array();
$placeHoldersppcategory1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsppcategory1["Japanese"] = array();
	$fieldToolTipsppcategory1["Japanese"] = array();
	$placeHoldersppcategory1["Japanese"] = array();
	$pageTitlesppcategory1["Japanese"] = array();
	$fieldLabelsppcategory1["Japanese"]["CategoryID"] = "CategoryID";
	$fieldToolTipsppcategory1["Japanese"]["CategoryID"] = "";
	$placeHoldersppcategory1["Japanese"]["CategoryID"] = "";
	$fieldLabelsppcategory1["Japanese"]["CategoryName"] = "Category Name";
	$fieldToolTipsppcategory1["Japanese"]["CategoryName"] = "";
	$placeHoldersppcategory1["Japanese"]["CategoryName"] = "";
	if (count($fieldToolTipsppcategory1["Japanese"]))
		$tdatappcategory1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsppcategory1["English"] = array();
	$fieldToolTipsppcategory1["English"] = array();
	$placeHoldersppcategory1["English"] = array();
	$pageTitlesppcategory1["English"] = array();
	$fieldLabelsppcategory1["English"]["CategoryID"] = "CategoryID";
	$fieldToolTipsppcategory1["English"]["CategoryID"] = "";
	$placeHoldersppcategory1["English"]["CategoryID"] = "";
	$fieldLabelsppcategory1["English"]["CategoryName"] = "Category Name";
	$fieldToolTipsppcategory1["English"]["CategoryName"] = "";
	$placeHoldersppcategory1["English"]["CategoryName"] = "";
	if (count($fieldToolTipsppcategory1["English"]))
		$tdatappcategory1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsppcategory1[""] = array();
	$fieldToolTipsppcategory1[""] = array();
	$placeHoldersppcategory1[""] = array();
	$pageTitlesppcategory1[""] = array();
	if (count($fieldToolTipsppcategory1[""]))
		$tdatappcategory1[".isUseToolTips"] = true;
}





$tdatappcategory1[".shortTableName"] = "ppcategory1";
$tdatappcategory1[".nSecOptions"] = 0;
$tdatappcategory1[".recsPerRowPrint"] = 1;
$tdatappcategory1[".mainTableOwnerID"] = "";
$tdatappcategory1[".moveNext"] = 1;
$tdatappcategory1[".entityType"] = 1;

$tdatappcategory1[".strOriginalTableName"] = "ppcategory";

	



$tdatappcategory1[".showAddInPopup"] = true;

$tdatappcategory1[".showEditInPopup"] = true;

$tdatappcategory1[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatappcategory1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatappcategory1[".fieldsForRegister"] = array();
	
$tdatappcategory1[".listAjax"] = false;

	$tdatappcategory1[".audit"] = false;

	$tdatappcategory1[".locking"] = false;

$tdatappcategory1[".edit"] = true;
$tdatappcategory1[".afterEditAction"] = 1;
$tdatappcategory1[".closePopupAfterEdit"] = 1;
$tdatappcategory1[".afterEditActionDetTable"] = "";

$tdatappcategory1[".add"] = true;
$tdatappcategory1[".afterAddAction"] = 1;
$tdatappcategory1[".closePopupAfterAdd"] = 1;
$tdatappcategory1[".afterAddActionDetTable"] = "";

$tdatappcategory1[".list"] = true;



$tdatappcategory1[".reorderRecordsByHeader"] = true;



$tdatappcategory1[".view"] = true;


$tdatappcategory1[".exportTo"] = true;

$tdatappcategory1[".printFriendly"] = true;

$tdatappcategory1[".delete"] = true;

$tdatappcategory1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatappcategory1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatappcategory1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatappcategory1[".searchSaving"] = false;
//

$tdatappcategory1[".showSearchPanel"] = true;
		$tdatappcategory1[".flexibleSearch"] = true;

$tdatappcategory1[".isUseAjaxSuggest"] = true;

$tdatappcategory1[".rowHighlite"] = true;



				

$tdatappcategory1[".ajaxCodeSnippetAdded"] = false;

$tdatappcategory1[".buttonsAdded"] = false;

$tdatappcategory1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatappcategory1[".isUseTimeForSearch"] = false;



$tdatappcategory1[".badgeColor"] = "2F4F4F";


$tdatappcategory1[".allSearchFields"] = array();
$tdatappcategory1[".filterFields"] = array();
$tdatappcategory1[".requiredSearchFields"] = array();

$tdatappcategory1[".allSearchFields"][] = "CategoryName";
	

$tdatappcategory1[".googleLikeFields"] = array();
$tdatappcategory1[".googleLikeFields"][] = "CategoryID";
$tdatappcategory1[".googleLikeFields"][] = "CategoryName";


$tdatappcategory1[".advSearchFields"] = array();
$tdatappcategory1[".advSearchFields"][] = "CategoryName";

$tdatappcategory1[".tableType"] = "list";

$tdatappcategory1[".printerPageOrientation"] = 0;
$tdatappcategory1[".nPrinterPageScale"] = 100;

$tdatappcategory1[".nPrinterSplitRecords"] = 40;

$tdatappcategory1[".nPrinterPDFSplitRecords"] = 40;



$tdatappcategory1[".geocodingEnabled"] = false;





$tdatappcategory1[".listGridLayout"] = 3;



$tdatappcategory1[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatappcategory1[".pageSize"] = 20;

$tdatappcategory1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatappcategory1[".strOrderBy"] = $tstrOrderBy;

$tdatappcategory1[".orderindexes"] = array();

$tdatappcategory1[".sqlHead"] = "select CategoryID, CategoryName";
$tdatappcategory1[".sqlFrom"] = "FROM ppcategory";
$tdatappcategory1[".sqlWhereExpr"] = "";
$tdatappcategory1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatappcategory1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatappcategory1[".arrGroupsPerPage"] = $arrGPP;


$tableKeysppcategory1 = array();
$tableKeysppcategory1[] = "CategoryID";
$tdatappcategory1[".Keys"] = $tableKeysppcategory1;

$tdatappcategory1[".listFields"] = array();
$tdatappcategory1[".listFields"][] = "CategoryName";

$tdatappcategory1[".hideMobileList"] = array();


$tdatappcategory1[".viewFields"] = array();
$tdatappcategory1[".viewFields"][] = "CategoryName";

$tdatappcategory1[".addFields"] = array();
$tdatappcategory1[".addFields"][] = "CategoryName";

$tdatappcategory1[".masterListFields"] = array();

$tdatappcategory1[".inlineAddFields"] = array();

$tdatappcategory1[".editFields"] = array();
$tdatappcategory1[".editFields"][] = "CategoryName";

$tdatappcategory1[".inlineEditFields"] = array();

$tdatappcategory1[".updateSelectedFields"] = array();
$tdatappcategory1[".updateSelectedFields"][] = "CategoryName";


$tdatappcategory1[".exportFields"] = array();
$tdatappcategory1[".exportFields"][] = "CategoryName";

$tdatappcategory1[".importFields"] = array();
$tdatappcategory1[".importFields"][] = "CategoryID";
$tdatappcategory1[".importFields"][] = "CategoryName";

$tdatappcategory1[".printFields"] = array();
$tdatappcategory1[".printFields"][] = "CategoryName";

//	CategoryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CategoryID";
	$fdata["GoodName"] = "CategoryID";
	$fdata["ownerTable"] = "ppcategory";
	$fdata["Label"] = GetFieldLabel("ppcategory1","CategoryID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "CategoryID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoryID";

	
	
			
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








	$tdatappcategory1["CategoryID"] = $fdata;
//	CategoryName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CategoryName";
	$fdata["GoodName"] = "CategoryName";
	$fdata["ownerTable"] = "ppcategory";
	$fdata["Label"] = GetFieldLabel("ppcategory1","CategoryName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CategoryName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoryName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdatappcategory1["CategoryName"] = $fdata;


$tables_data["ppcategory1"]=&$tdatappcategory1;
$field_labels["ppcategory1"] = &$fieldLabelsppcategory1;
$fieldToolTips["ppcategory1"] = &$fieldToolTipsppcategory1;
$placeHolders["ppcategory1"] = &$placeHoldersppcategory1;
$page_titles["ppcategory1"] = &$pageTitlesppcategory1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ppcategory1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ppcategory1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ppcategory1()
{
$proto3=array();
$proto3["m_strHead"] = "select";
$proto3["m_strFieldList"] = "CategoryID, CategoryName";
$proto3["m_strFrom"] = "FROM ppcategory";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
	
						;
			$proto3["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryID",
	"m_strTable" => "ppcategory",
	"m_srcTableName" => "ppcategory1"
));

$proto9["m_sql"] = "CategoryID";
$proto9["m_srcTableName"] = "ppcategory1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryName",
	"m_strTable" => "ppcategory",
	"m_srcTableName" => "ppcategory1"
));

$proto11["m_sql"] = "CategoryName";
$proto11["m_srcTableName"] = "ppcategory1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "ppcategory";
$proto14["m_srcTableName"] = "ppcategory1";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "CategoryID";
$proto14["m_columns"][] = "CategoryName";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "ppcategory";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "ppcategory1";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="ppcategory1";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_ppcategory1 = createSqlQuery_ppcategory1();


	
						;

		

$tdatappcategory1[".sqlquery"] = $queryData_ppcategory1;

$tableEvents["ppcategory1"] = new eventsBase;
$tdatappcategory1[".hasEvents"] = false;

?>
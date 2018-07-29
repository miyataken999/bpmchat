<?php
require_once(getabspath("classes/cipherer.php"));




$tdatappcategory = array();
	$tdatappcategory[".truncateText"] = true;
	$tdatappcategory[".NumberOfChars"] = 80;
	$tdatappcategory[".ShortName"] = "ppcategory";
	$tdatappcategory[".OwnerID"] = "";
	$tdatappcategory[".OriginalTable"] = "ppcategory";

//	field labels
$fieldLabelsppcategory = array();
$fieldToolTipsppcategory = array();
$pageTitlesppcategory = array();
$placeHoldersppcategory = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsppcategory["Japanese"] = array();
	$fieldToolTipsppcategory["Japanese"] = array();
	$placeHoldersppcategory["Japanese"] = array();
	$pageTitlesppcategory["Japanese"] = array();
	$fieldLabelsppcategory["Japanese"]["CategoryID"] = "CategoryID";
	$fieldToolTipsppcategory["Japanese"]["CategoryID"] = "";
	$placeHoldersppcategory["Japanese"]["CategoryID"] = "";
	$fieldLabelsppcategory["Japanese"]["CategoryName"] = "Category Name";
	$fieldToolTipsppcategory["Japanese"]["CategoryName"] = "";
	$placeHoldersppcategory["Japanese"]["CategoryName"] = "";
	if (count($fieldToolTipsppcategory["Japanese"]))
		$tdatappcategory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsppcategory["English"] = array();
	$fieldToolTipsppcategory["English"] = array();
	$placeHoldersppcategory["English"] = array();
	$pageTitlesppcategory["English"] = array();
	$fieldLabelsppcategory["English"]["CategoryID"] = "CategoryID";
	$fieldToolTipsppcategory["English"]["CategoryID"] = "";
	$placeHoldersppcategory["English"]["CategoryID"] = "";
	$fieldLabelsppcategory["English"]["CategoryName"] = "Category Name";
	$fieldToolTipsppcategory["English"]["CategoryName"] = "";
	$placeHoldersppcategory["English"]["CategoryName"] = "";
	if (count($fieldToolTipsppcategory["English"]))
		$tdatappcategory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsppcategory[""] = array();
	$fieldToolTipsppcategory[""] = array();
	$placeHoldersppcategory[""] = array();
	$pageTitlesppcategory[""] = array();
	if (count($fieldToolTipsppcategory[""]))
		$tdatappcategory[".isUseToolTips"] = true;
}





$tdatappcategory[".shortTableName"] = "ppcategory";
$tdatappcategory[".nSecOptions"] = 0;
$tdatappcategory[".recsPerRowPrint"] = 1;
$tdatappcategory[".mainTableOwnerID"] = "";
$tdatappcategory[".moveNext"] = 1;
$tdatappcategory[".entityType"] = 0;

$tdatappcategory[".strOriginalTableName"] = "ppcategory";

	



$tdatappcategory[".showAddInPopup"] = true;

$tdatappcategory[".showEditInPopup"] = true;

$tdatappcategory[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatappcategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatappcategory[".fieldsForRegister"] = array();
	
$tdatappcategory[".listAjax"] = false;

	$tdatappcategory[".audit"] = false;

	$tdatappcategory[".locking"] = false;

$tdatappcategory[".edit"] = true;
$tdatappcategory[".afterEditAction"] = 1;
$tdatappcategory[".closePopupAfterEdit"] = 1;
$tdatappcategory[".afterEditActionDetTable"] = "";

$tdatappcategory[".add"] = true;
$tdatappcategory[".afterAddAction"] = 1;
$tdatappcategory[".closePopupAfterAdd"] = 1;
$tdatappcategory[".afterAddActionDetTable"] = "";

$tdatappcategory[".list"] = true;



$tdatappcategory[".reorderRecordsByHeader"] = true;



$tdatappcategory[".view"] = true;


$tdatappcategory[".exportTo"] = true;

$tdatappcategory[".printFriendly"] = true;

$tdatappcategory[".delete"] = true;

$tdatappcategory[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatappcategory[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatappcategory[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatappcategory[".searchSaving"] = false;
//

$tdatappcategory[".showSearchPanel"] = true;
		$tdatappcategory[".flexibleSearch"] = true;

$tdatappcategory[".isUseAjaxSuggest"] = true;

$tdatappcategory[".rowHighlite"] = true;



				

$tdatappcategory[".ajaxCodeSnippetAdded"] = false;

$tdatappcategory[".buttonsAdded"] = false;

$tdatappcategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatappcategory[".isUseTimeForSearch"] = false;





$tdatappcategory[".allSearchFields"] = array();
$tdatappcategory[".filterFields"] = array();
$tdatappcategory[".requiredSearchFields"] = array();

$tdatappcategory[".allSearchFields"][] = "CategoryName";
	

$tdatappcategory[".googleLikeFields"] = array();
$tdatappcategory[".googleLikeFields"][] = "CategoryID";
$tdatappcategory[".googleLikeFields"][] = "CategoryName";


$tdatappcategory[".advSearchFields"] = array();
$tdatappcategory[".advSearchFields"][] = "CategoryName";

$tdatappcategory[".tableType"] = "list";

$tdatappcategory[".printerPageOrientation"] = 0;
$tdatappcategory[".nPrinterPageScale"] = 100;

$tdatappcategory[".nPrinterSplitRecords"] = 40;

$tdatappcategory[".nPrinterPDFSplitRecords"] = 40;



$tdatappcategory[".geocodingEnabled"] = false;





$tdatappcategory[".listGridLayout"] = 3;



$tdatappcategory[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatappcategory[".pageSize"] = 20;

$tdatappcategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatappcategory[".strOrderBy"] = $tstrOrderBy;

$tdatappcategory[".orderindexes"] = array();

$tdatappcategory[".sqlHead"] = "select CategoryID, CategoryName";
$tdatappcategory[".sqlFrom"] = "FROM ppcategory";
$tdatappcategory[".sqlWhereExpr"] = "";
$tdatappcategory[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatappcategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatappcategory[".arrGroupsPerPage"] = $arrGPP;


$tableKeysppcategory = array();
$tableKeysppcategory[] = "CategoryID";
$tdatappcategory[".Keys"] = $tableKeysppcategory;

$tdatappcategory[".listFields"] = array();
$tdatappcategory[".listFields"][] = "CategoryName";

$tdatappcategory[".hideMobileList"] = array();


$tdatappcategory[".viewFields"] = array();
$tdatappcategory[".viewFields"][] = "CategoryName";

$tdatappcategory[".addFields"] = array();
$tdatappcategory[".addFields"][] = "CategoryName";

$tdatappcategory[".masterListFields"] = array();

$tdatappcategory[".inlineAddFields"] = array();

$tdatappcategory[".editFields"] = array();
$tdatappcategory[".editFields"][] = "CategoryName";

$tdatappcategory[".inlineEditFields"] = array();

$tdatappcategory[".updateSelectedFields"] = array();
$tdatappcategory[".updateSelectedFields"][] = "CategoryName";


$tdatappcategory[".exportFields"] = array();
$tdatappcategory[".exportFields"][] = "CategoryName";

$tdatappcategory[".importFields"] = array();
$tdatappcategory[".importFields"][] = "CategoryID";
$tdatappcategory[".importFields"][] = "CategoryName";

$tdatappcategory[".printFields"] = array();
$tdatappcategory[".printFields"][] = "CategoryName";

//	CategoryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CategoryID";
	$fdata["GoodName"] = "CategoryID";
	$fdata["ownerTable"] = "ppcategory";
	$fdata["Label"] = GetFieldLabel("ppcategory","CategoryID");
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








	$tdatappcategory["CategoryID"] = $fdata;
//	CategoryName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CategoryName";
	$fdata["GoodName"] = "CategoryName";
	$fdata["ownerTable"] = "ppcategory";
	$fdata["Label"] = GetFieldLabel("ppcategory","CategoryName");
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




	$tdatappcategory["CategoryName"] = $fdata;


$tables_data["ppcategory"]=&$tdatappcategory;
$field_labels["ppcategory"] = &$fieldLabelsppcategory;
$fieldToolTips["ppcategory"] = &$fieldToolTipsppcategory;
$placeHolders["ppcategory"] = &$placeHoldersppcategory;
$page_titles["ppcategory"] = &$pageTitlesppcategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ppcategory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ppcategory"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ppcategory()
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
	"m_srcTableName" => "ppcategory"
));

$proto9["m_sql"] = "CategoryID";
$proto9["m_srcTableName"] = "ppcategory";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryName",
	"m_strTable" => "ppcategory",
	"m_srcTableName" => "ppcategory"
));

$proto11["m_sql"] = "CategoryName";
$proto11["m_srcTableName"] = "ppcategory";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "ppcategory";
$proto14["m_srcTableName"] = "ppcategory";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "CategoryID";
$proto14["m_columns"][] = "CategoryName";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "ppcategory";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "ppcategory";
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
$proto3["m_srcTableName"]="ppcategory";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_ppcategory = createSqlQuery_ppcategory();


	
						;

		

$tdatappcategory[".sqlquery"] = $queryData_ppcategory;

$tableEvents["ppcategory"] = new eventsBase;
$tdatappcategory[".hasEvents"] = false;

?>
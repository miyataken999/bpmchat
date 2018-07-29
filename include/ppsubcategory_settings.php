<?php
require_once(getabspath("classes/cipherer.php"));




$tdatappsubcategory = array();
	$tdatappsubcategory[".truncateText"] = true;
	$tdatappsubcategory[".NumberOfChars"] = 80;
	$tdatappsubcategory[".ShortName"] = "ppsubcategory";
	$tdatappsubcategory[".OwnerID"] = "";
	$tdatappsubcategory[".OriginalTable"] = "ppsubcategory";

//	field labels
$fieldLabelsppsubcategory = array();
$fieldToolTipsppsubcategory = array();
$pageTitlesppsubcategory = array();
$placeHoldersppsubcategory = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsppsubcategory["Japanese"] = array();
	$fieldToolTipsppsubcategory["Japanese"] = array();
	$placeHoldersppsubcategory["Japanese"] = array();
	$pageTitlesppsubcategory["Japanese"] = array();
	$fieldLabelsppsubcategory["Japanese"]["SubcategoryID"] = "SubcategoryID";
	$fieldToolTipsppsubcategory["Japanese"]["SubcategoryID"] = "";
	$placeHoldersppsubcategory["Japanese"]["SubcategoryID"] = "";
	$fieldLabelsppsubcategory["Japanese"]["SubcategoryName"] = "Subcategory Name";
	$fieldToolTipsppsubcategory["Japanese"]["SubcategoryName"] = "";
	$placeHoldersppsubcategory["Japanese"]["SubcategoryName"] = "";
	$fieldLabelsppsubcategory["Japanese"]["Category"] = "Category";
	$fieldToolTipsppsubcategory["Japanese"]["Category"] = "";
	$placeHoldersppsubcategory["Japanese"]["Category"] = "";
	if (count($fieldToolTipsppsubcategory["Japanese"]))
		$tdatappsubcategory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsppsubcategory["English"] = array();
	$fieldToolTipsppsubcategory["English"] = array();
	$placeHoldersppsubcategory["English"] = array();
	$pageTitlesppsubcategory["English"] = array();
	$fieldLabelsppsubcategory["English"]["SubcategoryID"] = "SubcategoryID";
	$fieldToolTipsppsubcategory["English"]["SubcategoryID"] = "";
	$placeHoldersppsubcategory["English"]["SubcategoryID"] = "";
	$fieldLabelsppsubcategory["English"]["SubcategoryName"] = "Subcategory Name";
	$fieldToolTipsppsubcategory["English"]["SubcategoryName"] = "";
	$placeHoldersppsubcategory["English"]["SubcategoryName"] = "";
	$fieldLabelsppsubcategory["English"]["Category"] = "Category";
	$fieldToolTipsppsubcategory["English"]["Category"] = "";
	$placeHoldersppsubcategory["English"]["Category"] = "";
	if (count($fieldToolTipsppsubcategory["English"]))
		$tdatappsubcategory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsppsubcategory[""] = array();
	$fieldToolTipsppsubcategory[""] = array();
	$placeHoldersppsubcategory[""] = array();
	$pageTitlesppsubcategory[""] = array();
	if (count($fieldToolTipsppsubcategory[""]))
		$tdatappsubcategory[".isUseToolTips"] = true;
}





$tdatappsubcategory[".shortTableName"] = "ppsubcategory";
$tdatappsubcategory[".nSecOptions"] = 0;
$tdatappsubcategory[".recsPerRowPrint"] = 1;
$tdatappsubcategory[".mainTableOwnerID"] = "";
$tdatappsubcategory[".moveNext"] = 1;
$tdatappsubcategory[".entityType"] = 0;

$tdatappsubcategory[".strOriginalTableName"] = "ppsubcategory";

	



$tdatappsubcategory[".showAddInPopup"] = true;

$tdatappsubcategory[".showEditInPopup"] = true;

$tdatappsubcategory[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "bootstrap_menu1";
$tdatappsubcategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatappsubcategory[".fieldsForRegister"] = array();
	
$tdatappsubcategory[".listAjax"] = false;

	$tdatappsubcategory[".audit"] = false;

	$tdatappsubcategory[".locking"] = false;

$tdatappsubcategory[".edit"] = true;
$tdatappsubcategory[".afterEditAction"] = 1;
$tdatappsubcategory[".closePopupAfterEdit"] = 1;
$tdatappsubcategory[".afterEditActionDetTable"] = "";

$tdatappsubcategory[".add"] = true;
$tdatappsubcategory[".afterAddAction"] = 1;
$tdatappsubcategory[".closePopupAfterAdd"] = 1;
$tdatappsubcategory[".afterAddActionDetTable"] = "";

$tdatappsubcategory[".list"] = true;



$tdatappsubcategory[".reorderRecordsByHeader"] = true;



$tdatappsubcategory[".view"] = true;


$tdatappsubcategory[".exportTo"] = true;

$tdatappsubcategory[".printFriendly"] = true;

$tdatappsubcategory[".delete"] = true;

$tdatappsubcategory[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatappsubcategory[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatappsubcategory[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatappsubcategory[".searchSaving"] = false;
//

$tdatappsubcategory[".showSearchPanel"] = true;
		$tdatappsubcategory[".flexibleSearch"] = true;

$tdatappsubcategory[".isUseAjaxSuggest"] = true;

$tdatappsubcategory[".rowHighlite"] = true;



				

$tdatappsubcategory[".ajaxCodeSnippetAdded"] = false;

$tdatappsubcategory[".buttonsAdded"] = false;

$tdatappsubcategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatappsubcategory[".isUseTimeForSearch"] = false;



$tdatappsubcategory[".badgeColor"] = "00C2C5";


$tdatappsubcategory[".allSearchFields"] = array();
$tdatappsubcategory[".filterFields"] = array();
$tdatappsubcategory[".requiredSearchFields"] = array();

$tdatappsubcategory[".allSearchFields"][] = "SubcategoryName";
	$tdatappsubcategory[".allSearchFields"][] = "Category";
	

$tdatappsubcategory[".googleLikeFields"] = array();
$tdatappsubcategory[".googleLikeFields"][] = "SubcategoryID";
$tdatappsubcategory[".googleLikeFields"][] = "SubcategoryName";
$tdatappsubcategory[".googleLikeFields"][] = "Category";


$tdatappsubcategory[".advSearchFields"] = array();
$tdatappsubcategory[".advSearchFields"][] = "SubcategoryName";
$tdatappsubcategory[".advSearchFields"][] = "Category";

$tdatappsubcategory[".tableType"] = "list";

$tdatappsubcategory[".printerPageOrientation"] = 0;
$tdatappsubcategory[".nPrinterPageScale"] = 100;

$tdatappsubcategory[".nPrinterSplitRecords"] = 40;

$tdatappsubcategory[".nPrinterPDFSplitRecords"] = 40;



$tdatappsubcategory[".geocodingEnabled"] = false;





$tdatappsubcategory[".listGridLayout"] = 3;



$tdatappsubcategory[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatappsubcategory[".pageSize"] = 20;

$tdatappsubcategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatappsubcategory[".strOrderBy"] = $tstrOrderBy;

$tdatappsubcategory[".orderindexes"] = array();

$tdatappsubcategory[".sqlHead"] = "select SubcategoryID, SubcategoryName, Category";
$tdatappsubcategory[".sqlFrom"] = "FROM ppsubcategory";
$tdatappsubcategory[".sqlWhereExpr"] = "";
$tdatappsubcategory[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatappsubcategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatappsubcategory[".arrGroupsPerPage"] = $arrGPP;


$tableKeysppsubcategory = array();
$tableKeysppsubcategory[] = "SubcategoryID";
$tdatappsubcategory[".Keys"] = $tableKeysppsubcategory;

$tdatappsubcategory[".listFields"] = array();
$tdatappsubcategory[".listFields"][] = "Category";
$tdatappsubcategory[".listFields"][] = "SubcategoryName";

$tdatappsubcategory[".hideMobileList"] = array();


$tdatappsubcategory[".viewFields"] = array();
$tdatappsubcategory[".viewFields"][] = "Category";
$tdatappsubcategory[".viewFields"][] = "SubcategoryName";

$tdatappsubcategory[".addFields"] = array();
$tdatappsubcategory[".addFields"][] = "Category";
$tdatappsubcategory[".addFields"][] = "SubcategoryName";

$tdatappsubcategory[".masterListFields"] = array();

$tdatappsubcategory[".inlineAddFields"] = array();

$tdatappsubcategory[".editFields"] = array();
$tdatappsubcategory[".editFields"][] = "Category";
$tdatappsubcategory[".editFields"][] = "SubcategoryName";

$tdatappsubcategory[".inlineEditFields"] = array();

$tdatappsubcategory[".updateSelectedFields"] = array();
$tdatappsubcategory[".updateSelectedFields"][] = "Category";
$tdatappsubcategory[".updateSelectedFields"][] = "SubcategoryName";


$tdatappsubcategory[".exportFields"] = array();
$tdatappsubcategory[".exportFields"][] = "SubcategoryName";
$tdatappsubcategory[".exportFields"][] = "Category";

$tdatappsubcategory[".importFields"] = array();
$tdatappsubcategory[".importFields"][] = "SubcategoryID";
$tdatappsubcategory[".importFields"][] = "SubcategoryName";
$tdatappsubcategory[".importFields"][] = "Category";

$tdatappsubcategory[".printFields"] = array();
$tdatappsubcategory[".printFields"][] = "SubcategoryName";
$tdatappsubcategory[".printFields"][] = "Category";

//	SubcategoryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SubcategoryID";
	$fdata["GoodName"] = "SubcategoryID";
	$fdata["ownerTable"] = "ppsubcategory";
	$fdata["Label"] = GetFieldLabel("ppsubcategory","SubcategoryID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "SubcategoryID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubcategoryID";

	
	
			
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








	$tdatappsubcategory["SubcategoryID"] = $fdata;
//	SubcategoryName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SubcategoryName";
	$fdata["GoodName"] = "SubcategoryName";
	$fdata["ownerTable"] = "ppsubcategory";
	$fdata["Label"] = GetFieldLabel("ppsubcategory","SubcategoryName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SubcategoryName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubcategoryName";

	
	
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




	$tdatappsubcategory["SubcategoryName"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "ppsubcategory";
	$fdata["Label"] = GetFieldLabel("ppsubcategory","Category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ppcategory";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CategoryName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "CategoryName";

	
	$edata["LookupOrderBy"] = "CategoryName";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
	
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




	$tdatappsubcategory["Category"] = $fdata;


$tables_data["ppsubcategory"]=&$tdatappsubcategory;
$field_labels["ppsubcategory"] = &$fieldLabelsppsubcategory;
$fieldToolTips["ppsubcategory"] = &$fieldToolTipsppsubcategory;
$placeHolders["ppsubcategory"] = &$placeHoldersppsubcategory;
$page_titles["ppsubcategory"] = &$pageTitlesppsubcategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ppsubcategory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ppsubcategory"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ppsubcategory()
{
$proto3=array();
$proto3["m_strHead"] = "select";
$proto3["m_strFieldList"] = "SubcategoryID, SubcategoryName, Category";
$proto3["m_strFrom"] = "FROM ppsubcategory";
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
	"m_strName" => "SubcategoryID",
	"m_strTable" => "ppsubcategory",
	"m_srcTableName" => "ppsubcategory"
));

$proto9["m_sql"] = "SubcategoryID";
$proto9["m_srcTableName"] = "ppsubcategory";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "SubcategoryName",
	"m_strTable" => "ppsubcategory",
	"m_srcTableName" => "ppsubcategory"
));

$proto11["m_sql"] = "SubcategoryName";
$proto11["m_srcTableName"] = "ppsubcategory";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "ppsubcategory",
	"m_srcTableName" => "ppsubcategory"
));

$proto13["m_sql"] = "Category";
$proto13["m_srcTableName"] = "ppsubcategory";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "ppsubcategory";
$proto16["m_srcTableName"] = "ppsubcategory";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Category";
$proto16["m_columns"][] = "SubcategoryID";
$proto16["m_columns"][] = "SubcategoryName";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "ppsubcategory";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "ppsubcategory";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="ppsubcategory";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_ppsubcategory = createSqlQuery_ppsubcategory();


	
						;

			

$tdatappsubcategory[".sqlquery"] = $queryData_ppsubcategory;

$tableEvents["ppsubcategory"] = new eventsBase;
$tdatappsubcategory[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamodx_categories = array();
	$tdatamodx_categories[".truncateText"] = true;
	$tdatamodx_categories[".NumberOfChars"] = 20;
	$tdatamodx_categories[".ShortName"] = "modx_categories";
	$tdatamodx_categories[".OwnerID"] = "";
	$tdatamodx_categories[".OriginalTable"] = "modx_categories";

//	field labels
$fieldLabelsmodx_categories = array();
$fieldToolTipsmodx_categories = array();
$pageTitlesmodx_categories = array();
$placeHoldersmodx_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmodx_categories["Japanese"] = array();
	$fieldToolTipsmodx_categories["Japanese"] = array();
	$placeHoldersmodx_categories["Japanese"] = array();
	$pageTitlesmodx_categories["Japanese"] = array();
	$fieldLabelsmodx_categories["Japanese"]["id"] = "Id";
	$fieldToolTipsmodx_categories["Japanese"]["id"] = "";
	$placeHoldersmodx_categories["Japanese"]["id"] = "";
	$fieldLabelsmodx_categories["Japanese"]["category"] = "Category";
	$fieldToolTipsmodx_categories["Japanese"]["category"] = "";
	$placeHoldersmodx_categories["Japanese"]["category"] = "";
	if (count($fieldToolTipsmodx_categories["Japanese"]))
		$tdatamodx_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodx_categories["English"] = array();
	$fieldToolTipsmodx_categories["English"] = array();
	$placeHoldersmodx_categories["English"] = array();
	$pageTitlesmodx_categories["English"] = array();
	$fieldLabelsmodx_categories["English"]["id"] = "Id";
	$fieldToolTipsmodx_categories["English"]["id"] = "";
	$placeHoldersmodx_categories["English"]["id"] = "";
	$fieldLabelsmodx_categories["English"]["category"] = "Category";
	$fieldToolTipsmodx_categories["English"]["category"] = "";
	$placeHoldersmodx_categories["English"]["category"] = "";
	if (count($fieldToolTipsmodx_categories["English"]))
		$tdatamodx_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmodx_categories[""] = array();
	$fieldToolTipsmodx_categories[""] = array();
	$placeHoldersmodx_categories[""] = array();
	$pageTitlesmodx_categories[""] = array();
	if (count($fieldToolTipsmodx_categories[""]))
		$tdatamodx_categories[".isUseToolTips"] = true;
}


	$tdatamodx_categories[".NCSearch"] = true;



$tdatamodx_categories[".shortTableName"] = "modx_categories";
$tdatamodx_categories[".nSecOptions"] = 0;
$tdatamodx_categories[".recsPerRowPrint"] = 1;
$tdatamodx_categories[".mainTableOwnerID"] = "";
$tdatamodx_categories[".moveNext"] = 0;
$tdatamodx_categories[".entityType"] = 0;

$tdatamodx_categories[".strOriginalTableName"] = "modx_categories";

	



$tdatamodx_categories[".showAddInPopup"] = false;

$tdatamodx_categories[".showEditInPopup"] = false;

$tdatamodx_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodx_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodx_categories[".fieldsForRegister"] = array();
	
$tdatamodx_categories[".listAjax"] = false;

	$tdatamodx_categories[".audit"] = true;

	$tdatamodx_categories[".locking"] = false;

$tdatamodx_categories[".edit"] = true;
$tdatamodx_categories[".afterEditAction"] = 1;
$tdatamodx_categories[".closePopupAfterEdit"] = 1;
$tdatamodx_categories[".afterEditActionDetTable"] = "";

$tdatamodx_categories[".add"] = true;
$tdatamodx_categories[".afterAddAction"] = 1;
$tdatamodx_categories[".closePopupAfterAdd"] = 1;
$tdatamodx_categories[".afterAddActionDetTable"] = "";

$tdatamodx_categories[".list"] = true;



$tdatamodx_categories[".reorderRecordsByHeader"] = true;



$tdatamodx_categories[".view"] = true;

$tdatamodx_categories[".import"] = true;

$tdatamodx_categories[".exportTo"] = true;

$tdatamodx_categories[".printFriendly"] = true;

$tdatamodx_categories[".delete"] = true;

$tdatamodx_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamodx_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamodx_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamodx_categories[".searchSaving"] = false;
//

$tdatamodx_categories[".showSearchPanel"] = true;
		$tdatamodx_categories[".flexibleSearch"] = true;

$tdatamodx_categories[".isUseAjaxSuggest"] = true;

$tdatamodx_categories[".rowHighlite"] = true;



				

$tdatamodx_categories[".ajaxCodeSnippetAdded"] = false;

$tdatamodx_categories[".buttonsAdded"] = false;

$tdatamodx_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodx_categories[".isUseTimeForSearch"] = false;





$tdatamodx_categories[".allSearchFields"] = array();
$tdatamodx_categories[".filterFields"] = array();
$tdatamodx_categories[".requiredSearchFields"] = array();

$tdatamodx_categories[".allSearchFields"][] = "id";
	$tdatamodx_categories[".allSearchFields"][] = "category";
	

$tdatamodx_categories[".googleLikeFields"] = array();
$tdatamodx_categories[".googleLikeFields"][] = "id";
$tdatamodx_categories[".googleLikeFields"][] = "category";


$tdatamodx_categories[".advSearchFields"] = array();
$tdatamodx_categories[".advSearchFields"][] = "id";
$tdatamodx_categories[".advSearchFields"][] = "category";

$tdatamodx_categories[".tableType"] = "list";

$tdatamodx_categories[".printerPageOrientation"] = 0;
$tdatamodx_categories[".nPrinterPageScale"] = 100;

$tdatamodx_categories[".nPrinterSplitRecords"] = 40;

$tdatamodx_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatamodx_categories[".geocodingEnabled"] = false;





$tdatamodx_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamodx_categories[".pageSize"] = 20;

$tdatamodx_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodx_categories[".strOrderBy"] = $tstrOrderBy;

$tdatamodx_categories[".orderindexes"] = array();

$tdatamodx_categories[".sqlHead"] = "SELECT id,  	category";
$tdatamodx_categories[".sqlFrom"] = "FROM modx_categories";
$tdatamodx_categories[".sqlWhereExpr"] = "";
$tdatamodx_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodx_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodx_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatamodx_categories[".highlightSearchResults"] = true;

$tableKeysmodx_categories = array();
$tableKeysmodx_categories[] = "id";
$tdatamodx_categories[".Keys"] = $tableKeysmodx_categories;

$tdatamodx_categories[".listFields"] = array();
$tdatamodx_categories[".listFields"][] = "id";
$tdatamodx_categories[".listFields"][] = "category";

$tdatamodx_categories[".hideMobileList"] = array();


$tdatamodx_categories[".viewFields"] = array();
$tdatamodx_categories[".viewFields"][] = "id";
$tdatamodx_categories[".viewFields"][] = "category";

$tdatamodx_categories[".addFields"] = array();
$tdatamodx_categories[".addFields"][] = "category";

$tdatamodx_categories[".masterListFields"] = array();
$tdatamodx_categories[".masterListFields"][] = "id";
$tdatamodx_categories[".masterListFields"][] = "category";

$tdatamodx_categories[".inlineAddFields"] = array();
$tdatamodx_categories[".inlineAddFields"][] = "category";

$tdatamodx_categories[".editFields"] = array();
$tdatamodx_categories[".editFields"][] = "category";

$tdatamodx_categories[".inlineEditFields"] = array();
$tdatamodx_categories[".inlineEditFields"][] = "category";

$tdatamodx_categories[".updateSelectedFields"] = array();
$tdatamodx_categories[".updateSelectedFields"][] = "category";


$tdatamodx_categories[".exportFields"] = array();
$tdatamodx_categories[".exportFields"][] = "id";
$tdatamodx_categories[".exportFields"][] = "category";

$tdatamodx_categories[".importFields"] = array();
$tdatamodx_categories[".importFields"][] = "id";
$tdatamodx_categories[".importFields"][] = "category";

$tdatamodx_categories[".printFields"] = array();
$tdatamodx_categories[".printFields"][] = "id";
$tdatamodx_categories[".printFields"][] = "category";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "modx_categories";
	$fdata["Label"] = GetFieldLabel("modx_categories","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamodx_categories["id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "modx_categories";
	$fdata["Label"] = GetFieldLabel("modx_categories","category");
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

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamodx_categories["category"] = $fdata;


$tables_data["modx_categories"]=&$tdatamodx_categories;
$field_labels["modx_categories"] = &$fieldLabelsmodx_categories;
$fieldToolTips["modx_categories"] = &$fieldToolTipsmodx_categories;
$placeHolders["modx_categories"] = &$placeHoldersmodx_categories;
$page_titles["modx_categories"] = &$pageTitlesmodx_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["modx_categories"] = array();
//	modx_site_snippets
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="modx_site_snippets";
		$detailsParam["dOriginalTable"] = "modx_site_snippets";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "modx_site_snippets";
	$detailsParam["dCaptionTable"] = GetTableCaption("modx_site_snippets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["modx_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_categories"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["modx_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_categories"][$dIndex]["detailKeys"][]="category";
//	modx_site_htmlsnippets
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="modx_site_htmlsnippets";
		$detailsParam["dOriginalTable"] = "modx_site_htmlsnippets";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "modx_site_htmlsnippets";
	$detailsParam["dCaptionTable"] = GetTableCaption("modx_site_htmlsnippets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["modx_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["modx_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["modx_categories"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["modx_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["modx_categories"][$dIndex]["detailKeys"][]="category";

// tables which are master tables for current table (detail)
$masterTablesData["modx_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_modx_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	category";
$proto0["m_strFrom"] = "FROM modx_categories";
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
	"m_strName" => "id",
	"m_strTable" => "modx_categories",
	"m_srcTableName" => "modx_categories"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "modx_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "modx_categories",
	"m_srcTableName" => "modx_categories"
));

$proto8["m_sql"] = "category";
$proto8["m_srcTableName"] = "modx_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "modx_categories";
$proto11["m_srcTableName"] = "modx_categories";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "category";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "modx_categories";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "modx_categories";
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
$proto0["m_srcTableName"]="modx_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modx_categories = createSqlQuery_modx_categories();


	
						;

		

$tdatamodx_categories[".sqlquery"] = $queryData_modx_categories;

$tableEvents["modx_categories"] = new eventsBase;
$tdatamodx_categories[".hasEvents"] = false;

?>
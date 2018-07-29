<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_term_relationships = array();
	$tdatawpfg_term_relationships[".truncateText"] = true;
	$tdatawpfg_term_relationships[".NumberOfChars"] = 80;
	$tdatawpfg_term_relationships[".ShortName"] = "wpfg_term_relationships";
	$tdatawpfg_term_relationships[".OwnerID"] = "";
	$tdatawpfg_term_relationships[".OriginalTable"] = "wpfg_term_relationships";

//	field labels
$fieldLabelswpfg_term_relationships = array();
$fieldToolTipswpfg_term_relationships = array();
$pageTitleswpfg_term_relationships = array();
$placeHolderswpfg_term_relationships = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_term_relationships["Japanese"] = array();
	$fieldToolTipswpfg_term_relationships["Japanese"] = array();
	$placeHolderswpfg_term_relationships["Japanese"] = array();
	$pageTitleswpfg_term_relationships["Japanese"] = array();
	$fieldLabelswpfg_term_relationships["Japanese"]["object_id"] = "Object Id";
	$fieldToolTipswpfg_term_relationships["Japanese"]["object_id"] = "";
	$placeHolderswpfg_term_relationships["Japanese"]["object_id"] = "";
	$fieldLabelswpfg_term_relationships["Japanese"]["term_taxonomy_id"] = "Term Taxonomy Id";
	$fieldToolTipswpfg_term_relationships["Japanese"]["term_taxonomy_id"] = "";
	$placeHolderswpfg_term_relationships["Japanese"]["term_taxonomy_id"] = "";
	$fieldLabelswpfg_term_relationships["Japanese"]["term_order"] = "Term Order";
	$fieldToolTipswpfg_term_relationships["Japanese"]["term_order"] = "";
	$placeHolderswpfg_term_relationships["Japanese"]["term_order"] = "";
	if (count($fieldToolTipswpfg_term_relationships["Japanese"]))
		$tdatawpfg_term_relationships[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_term_relationships["English"] = array();
	$fieldToolTipswpfg_term_relationships["English"] = array();
	$placeHolderswpfg_term_relationships["English"] = array();
	$pageTitleswpfg_term_relationships["English"] = array();
	$fieldLabelswpfg_term_relationships["English"]["object_id"] = "Object Id";
	$fieldToolTipswpfg_term_relationships["English"]["object_id"] = "";
	$placeHolderswpfg_term_relationships["English"]["object_id"] = "";
	$fieldLabelswpfg_term_relationships["English"]["term_taxonomy_id"] = "Term Taxonomy Id";
	$fieldToolTipswpfg_term_relationships["English"]["term_taxonomy_id"] = "";
	$placeHolderswpfg_term_relationships["English"]["term_taxonomy_id"] = "";
	$fieldLabelswpfg_term_relationships["English"]["term_order"] = "Term Order";
	$fieldToolTipswpfg_term_relationships["English"]["term_order"] = "";
	$placeHolderswpfg_term_relationships["English"]["term_order"] = "";
	if (count($fieldToolTipswpfg_term_relationships["English"]))
		$tdatawpfg_term_relationships[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_term_relationships[""] = array();
	$fieldToolTipswpfg_term_relationships[""] = array();
	$placeHolderswpfg_term_relationships[""] = array();
	$pageTitleswpfg_term_relationships[""] = array();
	$fieldLabelswpfg_term_relationships[""]["object_id"] = "Object Id";
	$fieldToolTipswpfg_term_relationships[""]["object_id"] = "";
	$placeHolderswpfg_term_relationships[""]["object_id"] = "";
	$fieldLabelswpfg_term_relationships[""]["term_taxonomy_id"] = "Term Taxonomy Id";
	$fieldToolTipswpfg_term_relationships[""]["term_taxonomy_id"] = "";
	$placeHolderswpfg_term_relationships[""]["term_taxonomy_id"] = "";
	$fieldLabelswpfg_term_relationships[""]["term_order"] = "Term Order";
	$fieldToolTipswpfg_term_relationships[""]["term_order"] = "";
	$placeHolderswpfg_term_relationships[""]["term_order"] = "";
	if (count($fieldToolTipswpfg_term_relationships[""]))
		$tdatawpfg_term_relationships[".isUseToolTips"] = true;
}


	$tdatawpfg_term_relationships[".NCSearch"] = true;



$tdatawpfg_term_relationships[".shortTableName"] = "wpfg_term_relationships";
$tdatawpfg_term_relationships[".nSecOptions"] = 0;
$tdatawpfg_term_relationships[".recsPerRowPrint"] = 1;
$tdatawpfg_term_relationships[".mainTableOwnerID"] = "";
$tdatawpfg_term_relationships[".moveNext"] = 1;
$tdatawpfg_term_relationships[".entityType"] = 0;

$tdatawpfg_term_relationships[".strOriginalTableName"] = "wpfg_term_relationships";

	



$tdatawpfg_term_relationships[".showAddInPopup"] = false;

$tdatawpfg_term_relationships[".showEditInPopup"] = false;

$tdatawpfg_term_relationships[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_term_relationships[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_term_relationships[".fieldsForRegister"] = array();
	
$tdatawpfg_term_relationships[".listAjax"] = false;

	$tdatawpfg_term_relationships[".audit"] = false;

	$tdatawpfg_term_relationships[".locking"] = false;

$tdatawpfg_term_relationships[".edit"] = true;
$tdatawpfg_term_relationships[".afterEditAction"] = 1;
$tdatawpfg_term_relationships[".closePopupAfterEdit"] = 1;
$tdatawpfg_term_relationships[".afterEditActionDetTable"] = "";

$tdatawpfg_term_relationships[".add"] = true;
$tdatawpfg_term_relationships[".afterAddAction"] = 1;
$tdatawpfg_term_relationships[".closePopupAfterAdd"] = 1;
$tdatawpfg_term_relationships[".afterAddActionDetTable"] = "";

$tdatawpfg_term_relationships[".list"] = true;



$tdatawpfg_term_relationships[".reorderRecordsByHeader"] = true;



$tdatawpfg_term_relationships[".view"] = true;

$tdatawpfg_term_relationships[".import"] = true;

$tdatawpfg_term_relationships[".exportTo"] = true;

$tdatawpfg_term_relationships[".printFriendly"] = true;

$tdatawpfg_term_relationships[".delete"] = true;

$tdatawpfg_term_relationships[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_term_relationships[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_term_relationships[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_term_relationships[".searchSaving"] = false;
//

$tdatawpfg_term_relationships[".showSearchPanel"] = true;
		$tdatawpfg_term_relationships[".flexibleSearch"] = true;

$tdatawpfg_term_relationships[".isUseAjaxSuggest"] = true;

$tdatawpfg_term_relationships[".rowHighlite"] = true;



				

$tdatawpfg_term_relationships[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_term_relationships[".buttonsAdded"] = false;

$tdatawpfg_term_relationships[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_term_relationships[".isUseTimeForSearch"] = false;





$tdatawpfg_term_relationships[".allSearchFields"] = array();
$tdatawpfg_term_relationships[".filterFields"] = array();
$tdatawpfg_term_relationships[".requiredSearchFields"] = array();

$tdatawpfg_term_relationships[".allSearchFields"][] = "object_id";
	$tdatawpfg_term_relationships[".allSearchFields"][] = "term_taxonomy_id";
	$tdatawpfg_term_relationships[".allSearchFields"][] = "term_order";
	

$tdatawpfg_term_relationships[".googleLikeFields"] = array();
$tdatawpfg_term_relationships[".googleLikeFields"][] = "object_id";
$tdatawpfg_term_relationships[".googleLikeFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".googleLikeFields"][] = "term_order";


$tdatawpfg_term_relationships[".advSearchFields"] = array();
$tdatawpfg_term_relationships[".advSearchFields"][] = "object_id";
$tdatawpfg_term_relationships[".advSearchFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".advSearchFields"][] = "term_order";

$tdatawpfg_term_relationships[".tableType"] = "list";

$tdatawpfg_term_relationships[".printerPageOrientation"] = 0;
$tdatawpfg_term_relationships[".nPrinterPageScale"] = 100;

$tdatawpfg_term_relationships[".nPrinterSplitRecords"] = 40;

$tdatawpfg_term_relationships[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_term_relationships[".geocodingEnabled"] = false;





$tdatawpfg_term_relationships[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_term_relationships[".pageSize"] = 20;

$tdatawpfg_term_relationships[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_term_relationships[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_term_relationships[".orderindexes"] = array();

$tdatawpfg_term_relationships[".sqlHead"] = "SELECT object_id,  	term_taxonomy_id,  	term_order";
$tdatawpfg_term_relationships[".sqlFrom"] = "FROM wpfg_term_relationships";
$tdatawpfg_term_relationships[".sqlWhereExpr"] = "";
$tdatawpfg_term_relationships[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_term_relationships[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_term_relationships[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_term_relationships[".highlightSearchResults"] = true;

$tableKeyswpfg_term_relationships = array();
$tableKeyswpfg_term_relationships[] = "object_id";
$tableKeyswpfg_term_relationships[] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".Keys"] = $tableKeyswpfg_term_relationships;

$tdatawpfg_term_relationships[".listFields"] = array();
$tdatawpfg_term_relationships[".listFields"][] = "object_id";
$tdatawpfg_term_relationships[".listFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".listFields"][] = "term_order";

$tdatawpfg_term_relationships[".hideMobileList"] = array();


$tdatawpfg_term_relationships[".viewFields"] = array();
$tdatawpfg_term_relationships[".viewFields"][] = "object_id";
$tdatawpfg_term_relationships[".viewFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".viewFields"][] = "term_order";

$tdatawpfg_term_relationships[".addFields"] = array();
$tdatawpfg_term_relationships[".addFields"][] = "object_id";
$tdatawpfg_term_relationships[".addFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".addFields"][] = "term_order";

$tdatawpfg_term_relationships[".masterListFields"] = array();
$tdatawpfg_term_relationships[".masterListFields"][] = "object_id";
$tdatawpfg_term_relationships[".masterListFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".masterListFields"][] = "term_order";

$tdatawpfg_term_relationships[".inlineAddFields"] = array();
$tdatawpfg_term_relationships[".inlineAddFields"][] = "object_id";
$tdatawpfg_term_relationships[".inlineAddFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".inlineAddFields"][] = "term_order";

$tdatawpfg_term_relationships[".editFields"] = array();
$tdatawpfg_term_relationships[".editFields"][] = "object_id";
$tdatawpfg_term_relationships[".editFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".editFields"][] = "term_order";

$tdatawpfg_term_relationships[".inlineEditFields"] = array();
$tdatawpfg_term_relationships[".inlineEditFields"][] = "object_id";
$tdatawpfg_term_relationships[".inlineEditFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".inlineEditFields"][] = "term_order";

$tdatawpfg_term_relationships[".updateSelectedFields"] = array();
$tdatawpfg_term_relationships[".updateSelectedFields"][] = "object_id";
$tdatawpfg_term_relationships[".updateSelectedFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".updateSelectedFields"][] = "term_order";


$tdatawpfg_term_relationships[".exportFields"] = array();
$tdatawpfg_term_relationships[".exportFields"][] = "object_id";
$tdatawpfg_term_relationships[".exportFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".exportFields"][] = "term_order";

$tdatawpfg_term_relationships[".importFields"] = array();
$tdatawpfg_term_relationships[".importFields"][] = "object_id";
$tdatawpfg_term_relationships[".importFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".importFields"][] = "term_order";

$tdatawpfg_term_relationships[".printFields"] = array();
$tdatawpfg_term_relationships[".printFields"][] = "object_id";
$tdatawpfg_term_relationships[".printFields"][] = "term_taxonomy_id";
$tdatawpfg_term_relationships[".printFields"][] = "term_order";

//	object_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "object_id";
	$fdata["GoodName"] = "object_id";
	$fdata["ownerTable"] = "wpfg_term_relationships";
	$fdata["Label"] = GetFieldLabel("wpfg_term_relationships","object_id");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "object_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "object_id";

	
	
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




	$tdatawpfg_term_relationships["object_id"] = $fdata;
//	term_taxonomy_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_taxonomy_id";
	$fdata["GoodName"] = "term_taxonomy_id";
	$fdata["ownerTable"] = "wpfg_term_relationships";
	$fdata["Label"] = GetFieldLabel("wpfg_term_relationships","term_taxonomy_id");
	$fdata["FieldType"] = 20;

	
	
	
			
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

		$fdata["strField"] = "term_taxonomy_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_taxonomy_id";

	
	
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




	$tdatawpfg_term_relationships["term_taxonomy_id"] = $fdata;
//	term_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "term_order";
	$fdata["GoodName"] = "term_order";
	$fdata["ownerTable"] = "wpfg_term_relationships";
	$fdata["Label"] = GetFieldLabel("wpfg_term_relationships","term_order");
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

		$fdata["strField"] = "term_order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_order";

	
	
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




	$tdatawpfg_term_relationships["term_order"] = $fdata;


$tables_data["wpfg_term_relationships"]=&$tdatawpfg_term_relationships;
$field_labels["wpfg_term_relationships"] = &$fieldLabelswpfg_term_relationships;
$fieldToolTips["wpfg_term_relationships"] = &$fieldToolTipswpfg_term_relationships;
$placeHolders["wpfg_term_relationships"] = &$placeHolderswpfg_term_relationships;
$page_titles["wpfg_term_relationships"] = &$pageTitleswpfg_term_relationships;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_term_relationships"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_term_relationships"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_term_relationships()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "object_id,  	term_taxonomy_id,  	term_order";
$proto0["m_strFrom"] = "FROM wpfg_term_relationships";
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
	"m_strName" => "object_id",
	"m_strTable" => "wpfg_term_relationships",
	"m_srcTableName" => "wpfg_term_relationships"
));

$proto6["m_sql"] = "object_id";
$proto6["m_srcTableName"] = "wpfg_term_relationships";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_taxonomy_id",
	"m_strTable" => "wpfg_term_relationships",
	"m_srcTableName" => "wpfg_term_relationships"
));

$proto8["m_sql"] = "term_taxonomy_id";
$proto8["m_srcTableName"] = "wpfg_term_relationships";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "term_order",
	"m_strTable" => "wpfg_term_relationships",
	"m_srcTableName" => "wpfg_term_relationships"
));

$proto10["m_sql"] = "term_order";
$proto10["m_srcTableName"] = "wpfg_term_relationships";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "wpfg_term_relationships";
$proto13["m_srcTableName"] = "wpfg_term_relationships";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "object_id";
$proto13["m_columns"][] = "term_taxonomy_id";
$proto13["m_columns"][] = "term_order";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "wpfg_term_relationships";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "wpfg_term_relationships";
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
$proto0["m_srcTableName"]="wpfg_term_relationships";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_term_relationships = createSqlQuery_wpfg_term_relationships();


	
						;

			

$tdatawpfg_term_relationships[".sqlquery"] = $queryData_wpfg_term_relationships;

$tableEvents["wpfg_term_relationships"] = new eventsBase;
$tdatawpfg_term_relationships[".hasEvents"] = false;

?>
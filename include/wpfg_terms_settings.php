<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_terms = array();
	$tdatawpfg_terms[".truncateText"] = true;
	$tdatawpfg_terms[".NumberOfChars"] = 80;
	$tdatawpfg_terms[".ShortName"] = "wpfg_terms";
	$tdatawpfg_terms[".OwnerID"] = "";
	$tdatawpfg_terms[".OriginalTable"] = "wpfg_terms";

//	field labels
$fieldLabelswpfg_terms = array();
$fieldToolTipswpfg_terms = array();
$pageTitleswpfg_terms = array();
$placeHolderswpfg_terms = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_terms["Japanese"] = array();
	$fieldToolTipswpfg_terms["Japanese"] = array();
	$placeHolderswpfg_terms["Japanese"] = array();
	$pageTitleswpfg_terms["Japanese"] = array();
	$fieldLabelswpfg_terms["Japanese"]["term_id"] = "Term Id";
	$fieldToolTipswpfg_terms["Japanese"]["term_id"] = "";
	$placeHolderswpfg_terms["Japanese"]["term_id"] = "";
	$fieldLabelswpfg_terms["Japanese"]["name"] = "Name";
	$fieldToolTipswpfg_terms["Japanese"]["name"] = "";
	$placeHolderswpfg_terms["Japanese"]["name"] = "";
	$fieldLabelswpfg_terms["Japanese"]["slug"] = "Slug";
	$fieldToolTipswpfg_terms["Japanese"]["slug"] = "";
	$placeHolderswpfg_terms["Japanese"]["slug"] = "";
	$fieldLabelswpfg_terms["Japanese"]["term_group"] = "Term Group";
	$fieldToolTipswpfg_terms["Japanese"]["term_group"] = "";
	$placeHolderswpfg_terms["Japanese"]["term_group"] = "";
	if (count($fieldToolTipswpfg_terms["Japanese"]))
		$tdatawpfg_terms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_terms["English"] = array();
	$fieldToolTipswpfg_terms["English"] = array();
	$placeHolderswpfg_terms["English"] = array();
	$pageTitleswpfg_terms["English"] = array();
	$fieldLabelswpfg_terms["English"]["term_id"] = "Term Id";
	$fieldToolTipswpfg_terms["English"]["term_id"] = "";
	$placeHolderswpfg_terms["English"]["term_id"] = "";
	$fieldLabelswpfg_terms["English"]["name"] = "Name";
	$fieldToolTipswpfg_terms["English"]["name"] = "";
	$placeHolderswpfg_terms["English"]["name"] = "";
	$fieldLabelswpfg_terms["English"]["slug"] = "Slug";
	$fieldToolTipswpfg_terms["English"]["slug"] = "";
	$placeHolderswpfg_terms["English"]["slug"] = "";
	$fieldLabelswpfg_terms["English"]["term_group"] = "Term Group";
	$fieldToolTipswpfg_terms["English"]["term_group"] = "";
	$placeHolderswpfg_terms["English"]["term_group"] = "";
	if (count($fieldToolTipswpfg_terms["English"]))
		$tdatawpfg_terms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_terms[""] = array();
	$fieldToolTipswpfg_terms[""] = array();
	$placeHolderswpfg_terms[""] = array();
	$pageTitleswpfg_terms[""] = array();
	$fieldLabelswpfg_terms[""]["term_id"] = "Term Id";
	$fieldToolTipswpfg_terms[""]["term_id"] = "";
	$placeHolderswpfg_terms[""]["term_id"] = "";
	$fieldLabelswpfg_terms[""]["name"] = "Name";
	$fieldToolTipswpfg_terms[""]["name"] = "";
	$placeHolderswpfg_terms[""]["name"] = "";
	$fieldLabelswpfg_terms[""]["slug"] = "Slug";
	$fieldToolTipswpfg_terms[""]["slug"] = "";
	$placeHolderswpfg_terms[""]["slug"] = "";
	$fieldLabelswpfg_terms[""]["term_group"] = "Term Group";
	$fieldToolTipswpfg_terms[""]["term_group"] = "";
	$placeHolderswpfg_terms[""]["term_group"] = "";
	if (count($fieldToolTipswpfg_terms[""]))
		$tdatawpfg_terms[".isUseToolTips"] = true;
}


	$tdatawpfg_terms[".NCSearch"] = true;



$tdatawpfg_terms[".shortTableName"] = "wpfg_terms";
$tdatawpfg_terms[".nSecOptions"] = 0;
$tdatawpfg_terms[".recsPerRowPrint"] = 1;
$tdatawpfg_terms[".mainTableOwnerID"] = "";
$tdatawpfg_terms[".moveNext"] = 1;
$tdatawpfg_terms[".entityType"] = 0;

$tdatawpfg_terms[".strOriginalTableName"] = "wpfg_terms";

	



$tdatawpfg_terms[".showAddInPopup"] = false;

$tdatawpfg_terms[".showEditInPopup"] = false;

$tdatawpfg_terms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_terms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_terms[".fieldsForRegister"] = array();
	
$tdatawpfg_terms[".listAjax"] = false;

	$tdatawpfg_terms[".audit"] = false;

	$tdatawpfg_terms[".locking"] = false;

$tdatawpfg_terms[".edit"] = true;
$tdatawpfg_terms[".afterEditAction"] = 1;
$tdatawpfg_terms[".closePopupAfterEdit"] = 1;
$tdatawpfg_terms[".afterEditActionDetTable"] = "";

$tdatawpfg_terms[".add"] = true;
$tdatawpfg_terms[".afterAddAction"] = 1;
$tdatawpfg_terms[".closePopupAfterAdd"] = 1;
$tdatawpfg_terms[".afterAddActionDetTable"] = "";

$tdatawpfg_terms[".list"] = true;



$tdatawpfg_terms[".reorderRecordsByHeader"] = true;



$tdatawpfg_terms[".view"] = true;

$tdatawpfg_terms[".import"] = true;

$tdatawpfg_terms[".exportTo"] = true;

$tdatawpfg_terms[".printFriendly"] = true;

$tdatawpfg_terms[".delete"] = true;

$tdatawpfg_terms[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_terms[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_terms[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_terms[".searchSaving"] = false;
//

$tdatawpfg_terms[".showSearchPanel"] = true;
		$tdatawpfg_terms[".flexibleSearch"] = true;

$tdatawpfg_terms[".isUseAjaxSuggest"] = true;

$tdatawpfg_terms[".rowHighlite"] = true;



				

$tdatawpfg_terms[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_terms[".buttonsAdded"] = false;

$tdatawpfg_terms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_terms[".isUseTimeForSearch"] = false;





$tdatawpfg_terms[".allSearchFields"] = array();
$tdatawpfg_terms[".filterFields"] = array();
$tdatawpfg_terms[".requiredSearchFields"] = array();

$tdatawpfg_terms[".allSearchFields"][] = "term_id";
	$tdatawpfg_terms[".allSearchFields"][] = "name";
	$tdatawpfg_terms[".allSearchFields"][] = "slug";
	$tdatawpfg_terms[".allSearchFields"][] = "term_group";
	

$tdatawpfg_terms[".googleLikeFields"] = array();
$tdatawpfg_terms[".googleLikeFields"][] = "term_id";
$tdatawpfg_terms[".googleLikeFields"][] = "name";
$tdatawpfg_terms[".googleLikeFields"][] = "slug";
$tdatawpfg_terms[".googleLikeFields"][] = "term_group";


$tdatawpfg_terms[".advSearchFields"] = array();
$tdatawpfg_terms[".advSearchFields"][] = "term_id";
$tdatawpfg_terms[".advSearchFields"][] = "name";
$tdatawpfg_terms[".advSearchFields"][] = "slug";
$tdatawpfg_terms[".advSearchFields"][] = "term_group";

$tdatawpfg_terms[".tableType"] = "list";

$tdatawpfg_terms[".printerPageOrientation"] = 0;
$tdatawpfg_terms[".nPrinterPageScale"] = 100;

$tdatawpfg_terms[".nPrinterSplitRecords"] = 40;

$tdatawpfg_terms[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_terms[".geocodingEnabled"] = false;





$tdatawpfg_terms[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_terms[".pageSize"] = 20;

$tdatawpfg_terms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_terms[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_terms[".orderindexes"] = array();

$tdatawpfg_terms[".sqlHead"] = "SELECT term_id,  	name,  	slug,  	term_group";
$tdatawpfg_terms[".sqlFrom"] = "FROM wpfg_terms";
$tdatawpfg_terms[".sqlWhereExpr"] = "";
$tdatawpfg_terms[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_terms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_terms[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_terms[".highlightSearchResults"] = true;

$tableKeyswpfg_terms = array();
$tableKeyswpfg_terms[] = "term_id";
$tdatawpfg_terms[".Keys"] = $tableKeyswpfg_terms;

$tdatawpfg_terms[".listFields"] = array();
$tdatawpfg_terms[".listFields"][] = "term_id";
$tdatawpfg_terms[".listFields"][] = "name";
$tdatawpfg_terms[".listFields"][] = "slug";
$tdatawpfg_terms[".listFields"][] = "term_group";

$tdatawpfg_terms[".hideMobileList"] = array();


$tdatawpfg_terms[".viewFields"] = array();
$tdatawpfg_terms[".viewFields"][] = "term_id";
$tdatawpfg_terms[".viewFields"][] = "name";
$tdatawpfg_terms[".viewFields"][] = "slug";
$tdatawpfg_terms[".viewFields"][] = "term_group";

$tdatawpfg_terms[".addFields"] = array();
$tdatawpfg_terms[".addFields"][] = "name";
$tdatawpfg_terms[".addFields"][] = "slug";
$tdatawpfg_terms[".addFields"][] = "term_group";

$tdatawpfg_terms[".masterListFields"] = array();
$tdatawpfg_terms[".masterListFields"][] = "term_id";
$tdatawpfg_terms[".masterListFields"][] = "name";
$tdatawpfg_terms[".masterListFields"][] = "slug";
$tdatawpfg_terms[".masterListFields"][] = "term_group";

$tdatawpfg_terms[".inlineAddFields"] = array();
$tdatawpfg_terms[".inlineAddFields"][] = "name";
$tdatawpfg_terms[".inlineAddFields"][] = "slug";
$tdatawpfg_terms[".inlineAddFields"][] = "term_group";

$tdatawpfg_terms[".editFields"] = array();
$tdatawpfg_terms[".editFields"][] = "name";
$tdatawpfg_terms[".editFields"][] = "slug";
$tdatawpfg_terms[".editFields"][] = "term_group";

$tdatawpfg_terms[".inlineEditFields"] = array();
$tdatawpfg_terms[".inlineEditFields"][] = "name";
$tdatawpfg_terms[".inlineEditFields"][] = "slug";
$tdatawpfg_terms[".inlineEditFields"][] = "term_group";

$tdatawpfg_terms[".updateSelectedFields"] = array();
$tdatawpfg_terms[".updateSelectedFields"][] = "name";
$tdatawpfg_terms[".updateSelectedFields"][] = "slug";
$tdatawpfg_terms[".updateSelectedFields"][] = "term_group";


$tdatawpfg_terms[".exportFields"] = array();
$tdatawpfg_terms[".exportFields"][] = "term_id";
$tdatawpfg_terms[".exportFields"][] = "name";
$tdatawpfg_terms[".exportFields"][] = "slug";
$tdatawpfg_terms[".exportFields"][] = "term_group";

$tdatawpfg_terms[".importFields"] = array();
$tdatawpfg_terms[".importFields"][] = "term_id";
$tdatawpfg_terms[".importFields"][] = "name";
$tdatawpfg_terms[".importFields"][] = "slug";
$tdatawpfg_terms[".importFields"][] = "term_group";

$tdatawpfg_terms[".printFields"] = array();
$tdatawpfg_terms[".printFields"][] = "term_id";
$tdatawpfg_terms[".printFields"][] = "name";
$tdatawpfg_terms[".printFields"][] = "slug";
$tdatawpfg_terms[".printFields"][] = "term_group";

//	term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "term_id";
	$fdata["GoodName"] = "term_id";
	$fdata["ownerTable"] = "wpfg_terms";
	$fdata["Label"] = GetFieldLabel("wpfg_terms","term_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "term_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_id";

	
	
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




	$tdatawpfg_terms["term_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "wpfg_terms";
	$fdata["Label"] = GetFieldLabel("wpfg_terms","name");
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

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatawpfg_terms["name"] = $fdata;
//	slug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "slug";
	$fdata["GoodName"] = "slug";
	$fdata["ownerTable"] = "wpfg_terms";
	$fdata["Label"] = GetFieldLabel("wpfg_terms","slug");
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

		$fdata["strField"] = "slug";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slug";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatawpfg_terms["slug"] = $fdata;
//	term_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "term_group";
	$fdata["GoodName"] = "term_group";
	$fdata["ownerTable"] = "wpfg_terms";
	$fdata["Label"] = GetFieldLabel("wpfg_terms","term_group");
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

		$fdata["strField"] = "term_group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "term_group";

	
	
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




	$tdatawpfg_terms["term_group"] = $fdata;


$tables_data["wpfg_terms"]=&$tdatawpfg_terms;
$field_labels["wpfg_terms"] = &$fieldLabelswpfg_terms;
$fieldToolTips["wpfg_terms"] = &$fieldToolTipswpfg_terms;
$placeHolders["wpfg_terms"] = &$placeHolderswpfg_terms;
$page_titles["wpfg_terms"] = &$pageTitleswpfg_terms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_terms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_terms"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_terms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "term_id,  	name,  	slug,  	term_group";
$proto0["m_strFrom"] = "FROM wpfg_terms";
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
	"m_strName" => "term_id",
	"m_strTable" => "wpfg_terms",
	"m_srcTableName" => "wpfg_terms"
));

$proto6["m_sql"] = "term_id";
$proto6["m_srcTableName"] = "wpfg_terms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "wpfg_terms",
	"m_srcTableName" => "wpfg_terms"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "wpfg_terms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "slug",
	"m_strTable" => "wpfg_terms",
	"m_srcTableName" => "wpfg_terms"
));

$proto10["m_sql"] = "slug";
$proto10["m_srcTableName"] = "wpfg_terms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "term_group",
	"m_strTable" => "wpfg_terms",
	"m_srcTableName" => "wpfg_terms"
));

$proto12["m_sql"] = "term_group";
$proto12["m_srcTableName"] = "wpfg_terms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "wpfg_terms";
$proto15["m_srcTableName"] = "wpfg_terms";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "term_id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "slug";
$proto15["m_columns"][] = "term_group";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "wpfg_terms";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "wpfg_terms";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="wpfg_terms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_terms = createSqlQuery_wpfg_terms();


	
						;

				

$tdatawpfg_terms[".sqlquery"] = $queryData_wpfg_terms;

$tableEvents["wpfg_terms"] = new eventsBase;
$tdatawpfg_terms[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawpfg_options = array();
	$tdatawpfg_options[".truncateText"] = true;
	$tdatawpfg_options[".NumberOfChars"] = 80;
	$tdatawpfg_options[".ShortName"] = "wpfg_options";
	$tdatawpfg_options[".OwnerID"] = "";
	$tdatawpfg_options[".OriginalTable"] = "wpfg_options";

//	field labels
$fieldLabelswpfg_options = array();
$fieldToolTipswpfg_options = array();
$pageTitleswpfg_options = array();
$placeHolderswpfg_options = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswpfg_options["Japanese"] = array();
	$fieldToolTipswpfg_options["Japanese"] = array();
	$placeHolderswpfg_options["Japanese"] = array();
	$pageTitleswpfg_options["Japanese"] = array();
	$fieldLabelswpfg_options["Japanese"]["option_id"] = "Option Id";
	$fieldToolTipswpfg_options["Japanese"]["option_id"] = "";
	$placeHolderswpfg_options["Japanese"]["option_id"] = "";
	$fieldLabelswpfg_options["Japanese"]["option_name"] = "Option Name";
	$fieldToolTipswpfg_options["Japanese"]["option_name"] = "";
	$placeHolderswpfg_options["Japanese"]["option_name"] = "";
	$fieldLabelswpfg_options["Japanese"]["option_value"] = "Option Value";
	$fieldToolTipswpfg_options["Japanese"]["option_value"] = "";
	$placeHolderswpfg_options["Japanese"]["option_value"] = "";
	$fieldLabelswpfg_options["Japanese"]["autoload"] = "Autoload";
	$fieldToolTipswpfg_options["Japanese"]["autoload"] = "";
	$placeHolderswpfg_options["Japanese"]["autoload"] = "";
	if (count($fieldToolTipswpfg_options["Japanese"]))
		$tdatawpfg_options[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswpfg_options["English"] = array();
	$fieldToolTipswpfg_options["English"] = array();
	$placeHolderswpfg_options["English"] = array();
	$pageTitleswpfg_options["English"] = array();
	$fieldLabelswpfg_options["English"]["option_id"] = "Option Id";
	$fieldToolTipswpfg_options["English"]["option_id"] = "";
	$placeHolderswpfg_options["English"]["option_id"] = "";
	$fieldLabelswpfg_options["English"]["option_name"] = "Option Name";
	$fieldToolTipswpfg_options["English"]["option_name"] = "";
	$placeHolderswpfg_options["English"]["option_name"] = "";
	$fieldLabelswpfg_options["English"]["option_value"] = "Option Value";
	$fieldToolTipswpfg_options["English"]["option_value"] = "";
	$placeHolderswpfg_options["English"]["option_value"] = "";
	$fieldLabelswpfg_options["English"]["autoload"] = "Autoload";
	$fieldToolTipswpfg_options["English"]["autoload"] = "";
	$placeHolderswpfg_options["English"]["autoload"] = "";
	if (count($fieldToolTipswpfg_options["English"]))
		$tdatawpfg_options[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswpfg_options[""] = array();
	$fieldToolTipswpfg_options[""] = array();
	$placeHolderswpfg_options[""] = array();
	$pageTitleswpfg_options[""] = array();
	$fieldLabelswpfg_options[""]["option_id"] = "Option Id";
	$fieldToolTipswpfg_options[""]["option_id"] = "";
	$placeHolderswpfg_options[""]["option_id"] = "";
	$fieldLabelswpfg_options[""]["option_name"] = "Option Name";
	$fieldToolTipswpfg_options[""]["option_name"] = "";
	$placeHolderswpfg_options[""]["option_name"] = "";
	$fieldLabelswpfg_options[""]["option_value"] = "Option Value";
	$fieldToolTipswpfg_options[""]["option_value"] = "";
	$placeHolderswpfg_options[""]["option_value"] = "";
	$fieldLabelswpfg_options[""]["autoload"] = "Autoload";
	$fieldToolTipswpfg_options[""]["autoload"] = "";
	$placeHolderswpfg_options[""]["autoload"] = "";
	if (count($fieldToolTipswpfg_options[""]))
		$tdatawpfg_options[".isUseToolTips"] = true;
}


	$tdatawpfg_options[".NCSearch"] = true;



$tdatawpfg_options[".shortTableName"] = "wpfg_options";
$tdatawpfg_options[".nSecOptions"] = 0;
$tdatawpfg_options[".recsPerRowPrint"] = 1;
$tdatawpfg_options[".mainTableOwnerID"] = "";
$tdatawpfg_options[".moveNext"] = 1;
$tdatawpfg_options[".entityType"] = 0;

$tdatawpfg_options[".strOriginalTableName"] = "wpfg_options";

	



$tdatawpfg_options[".showAddInPopup"] = false;

$tdatawpfg_options[".showEditInPopup"] = false;

$tdatawpfg_options[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawpfg_options[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawpfg_options[".fieldsForRegister"] = array();
	
$tdatawpfg_options[".listAjax"] = false;

	$tdatawpfg_options[".audit"] = false;

	$tdatawpfg_options[".locking"] = false;

$tdatawpfg_options[".edit"] = true;
$tdatawpfg_options[".afterEditAction"] = 1;
$tdatawpfg_options[".closePopupAfterEdit"] = 1;
$tdatawpfg_options[".afterEditActionDetTable"] = "";

$tdatawpfg_options[".add"] = true;
$tdatawpfg_options[".afterAddAction"] = 1;
$tdatawpfg_options[".closePopupAfterAdd"] = 1;
$tdatawpfg_options[".afterAddActionDetTable"] = "";

$tdatawpfg_options[".list"] = true;



$tdatawpfg_options[".reorderRecordsByHeader"] = true;



$tdatawpfg_options[".view"] = true;

$tdatawpfg_options[".import"] = true;

$tdatawpfg_options[".exportTo"] = true;

$tdatawpfg_options[".printFriendly"] = true;

$tdatawpfg_options[".delete"] = true;

$tdatawpfg_options[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawpfg_options[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawpfg_options[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawpfg_options[".searchSaving"] = false;
//

$tdatawpfg_options[".showSearchPanel"] = true;
		$tdatawpfg_options[".flexibleSearch"] = true;

$tdatawpfg_options[".isUseAjaxSuggest"] = true;

$tdatawpfg_options[".rowHighlite"] = true;



				

$tdatawpfg_options[".ajaxCodeSnippetAdded"] = false;

$tdatawpfg_options[".buttonsAdded"] = false;

$tdatawpfg_options[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawpfg_options[".isUseTimeForSearch"] = false;





$tdatawpfg_options[".allSearchFields"] = array();
$tdatawpfg_options[".filterFields"] = array();
$tdatawpfg_options[".requiredSearchFields"] = array();

$tdatawpfg_options[".allSearchFields"][] = "option_id";
	$tdatawpfg_options[".allSearchFields"][] = "option_name";
	$tdatawpfg_options[".allSearchFields"][] = "option_value";
	$tdatawpfg_options[".allSearchFields"][] = "autoload";
	

$tdatawpfg_options[".googleLikeFields"] = array();
$tdatawpfg_options[".googleLikeFields"][] = "option_id";
$tdatawpfg_options[".googleLikeFields"][] = "option_name";
$tdatawpfg_options[".googleLikeFields"][] = "option_value";
$tdatawpfg_options[".googleLikeFields"][] = "autoload";


$tdatawpfg_options[".advSearchFields"] = array();
$tdatawpfg_options[".advSearchFields"][] = "option_id";
$tdatawpfg_options[".advSearchFields"][] = "option_name";
$tdatawpfg_options[".advSearchFields"][] = "option_value";
$tdatawpfg_options[".advSearchFields"][] = "autoload";

$tdatawpfg_options[".tableType"] = "list";

$tdatawpfg_options[".printerPageOrientation"] = 0;
$tdatawpfg_options[".nPrinterPageScale"] = 100;

$tdatawpfg_options[".nPrinterSplitRecords"] = 40;

$tdatawpfg_options[".nPrinterPDFSplitRecords"] = 40;



$tdatawpfg_options[".geocodingEnabled"] = false;





$tdatawpfg_options[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawpfg_options[".pageSize"] = 20;

$tdatawpfg_options[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawpfg_options[".strOrderBy"] = $tstrOrderBy;

$tdatawpfg_options[".orderindexes"] = array();

$tdatawpfg_options[".sqlHead"] = "SELECT option_id,  	option_name,  	option_value,  	autoload";
$tdatawpfg_options[".sqlFrom"] = "FROM wpfg_options";
$tdatawpfg_options[".sqlWhereExpr"] = "";
$tdatawpfg_options[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawpfg_options[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawpfg_options[".arrGroupsPerPage"] = $arrGPP;

$tdatawpfg_options[".highlightSearchResults"] = true;

$tableKeyswpfg_options = array();
$tableKeyswpfg_options[] = "option_id";
$tdatawpfg_options[".Keys"] = $tableKeyswpfg_options;

$tdatawpfg_options[".listFields"] = array();
$tdatawpfg_options[".listFields"][] = "option_id";
$tdatawpfg_options[".listFields"][] = "option_name";
$tdatawpfg_options[".listFields"][] = "option_value";
$tdatawpfg_options[".listFields"][] = "autoload";

$tdatawpfg_options[".hideMobileList"] = array();


$tdatawpfg_options[".viewFields"] = array();
$tdatawpfg_options[".viewFields"][] = "option_id";
$tdatawpfg_options[".viewFields"][] = "option_name";
$tdatawpfg_options[".viewFields"][] = "option_value";
$tdatawpfg_options[".viewFields"][] = "autoload";

$tdatawpfg_options[".addFields"] = array();
$tdatawpfg_options[".addFields"][] = "option_name";
$tdatawpfg_options[".addFields"][] = "option_value";
$tdatawpfg_options[".addFields"][] = "autoload";

$tdatawpfg_options[".masterListFields"] = array();
$tdatawpfg_options[".masterListFields"][] = "option_id";
$tdatawpfg_options[".masterListFields"][] = "option_name";
$tdatawpfg_options[".masterListFields"][] = "option_value";
$tdatawpfg_options[".masterListFields"][] = "autoload";

$tdatawpfg_options[".inlineAddFields"] = array();
$tdatawpfg_options[".inlineAddFields"][] = "option_name";
$tdatawpfg_options[".inlineAddFields"][] = "option_value";
$tdatawpfg_options[".inlineAddFields"][] = "autoload";

$tdatawpfg_options[".editFields"] = array();
$tdatawpfg_options[".editFields"][] = "option_name";
$tdatawpfg_options[".editFields"][] = "option_value";
$tdatawpfg_options[".editFields"][] = "autoload";

$tdatawpfg_options[".inlineEditFields"] = array();
$tdatawpfg_options[".inlineEditFields"][] = "option_name";
$tdatawpfg_options[".inlineEditFields"][] = "option_value";
$tdatawpfg_options[".inlineEditFields"][] = "autoload";

$tdatawpfg_options[".updateSelectedFields"] = array();
$tdatawpfg_options[".updateSelectedFields"][] = "option_name";
$tdatawpfg_options[".updateSelectedFields"][] = "option_value";
$tdatawpfg_options[".updateSelectedFields"][] = "autoload";


$tdatawpfg_options[".exportFields"] = array();
$tdatawpfg_options[".exportFields"][] = "option_id";
$tdatawpfg_options[".exportFields"][] = "option_name";
$tdatawpfg_options[".exportFields"][] = "option_value";
$tdatawpfg_options[".exportFields"][] = "autoload";

$tdatawpfg_options[".importFields"] = array();
$tdatawpfg_options[".importFields"][] = "option_id";
$tdatawpfg_options[".importFields"][] = "option_name";
$tdatawpfg_options[".importFields"][] = "option_value";
$tdatawpfg_options[".importFields"][] = "autoload";

$tdatawpfg_options[".printFields"] = array();
$tdatawpfg_options[".printFields"][] = "option_id";
$tdatawpfg_options[".printFields"][] = "option_name";
$tdatawpfg_options[".printFields"][] = "option_value";
$tdatawpfg_options[".printFields"][] = "autoload";

//	option_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "option_id";
	$fdata["GoodName"] = "option_id";
	$fdata["ownerTable"] = "wpfg_options";
	$fdata["Label"] = GetFieldLabel("wpfg_options","option_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option_id";

	
	
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




	$tdatawpfg_options["option_id"] = $fdata;
//	option_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "option_name";
	$fdata["GoodName"] = "option_name";
	$fdata["ownerTable"] = "wpfg_options";
	$fdata["Label"] = GetFieldLabel("wpfg_options","option_name");
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

		$fdata["strField"] = "option_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option_name";

	
	
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
			$edata["EditParams"].= " maxlength=191";

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




	$tdatawpfg_options["option_name"] = $fdata;
//	option_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "option_value";
	$fdata["GoodName"] = "option_value";
	$fdata["ownerTable"] = "wpfg_options";
	$fdata["Label"] = GetFieldLabel("wpfg_options","option_value");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "option_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option_value";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatawpfg_options["option_value"] = $fdata;
//	autoload
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "autoload";
	$fdata["GoodName"] = "autoload";
	$fdata["ownerTable"] = "wpfg_options";
	$fdata["Label"] = GetFieldLabel("wpfg_options","autoload");
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

		$fdata["strField"] = "autoload";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "autoload";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatawpfg_options["autoload"] = $fdata;


$tables_data["wpfg_options"]=&$tdatawpfg_options;
$field_labels["wpfg_options"] = &$fieldLabelswpfg_options;
$fieldToolTips["wpfg_options"] = &$fieldToolTipswpfg_options;
$placeHolders["wpfg_options"] = &$placeHolderswpfg_options;
$page_titles["wpfg_options"] = &$pageTitleswpfg_options;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wpfg_options"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["wpfg_options"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wpfg_options()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "option_id,  	option_name,  	option_value,  	autoload";
$proto0["m_strFrom"] = "FROM wpfg_options";
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
	"m_strName" => "option_id",
	"m_strTable" => "wpfg_options",
	"m_srcTableName" => "wpfg_options"
));

$proto6["m_sql"] = "option_id";
$proto6["m_srcTableName"] = "wpfg_options";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "option_name",
	"m_strTable" => "wpfg_options",
	"m_srcTableName" => "wpfg_options"
));

$proto8["m_sql"] = "option_name";
$proto8["m_srcTableName"] = "wpfg_options";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "option_value",
	"m_strTable" => "wpfg_options",
	"m_srcTableName" => "wpfg_options"
));

$proto10["m_sql"] = "option_value";
$proto10["m_srcTableName"] = "wpfg_options";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "autoload",
	"m_strTable" => "wpfg_options",
	"m_srcTableName" => "wpfg_options"
));

$proto12["m_sql"] = "autoload";
$proto12["m_srcTableName"] = "wpfg_options";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "wpfg_options";
$proto15["m_srcTableName"] = "wpfg_options";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "option_id";
$proto15["m_columns"][] = "option_name";
$proto15["m_columns"][] = "option_value";
$proto15["m_columns"][] = "autoload";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "wpfg_options";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "wpfg_options";
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
$proto0["m_srcTableName"]="wpfg_options";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wpfg_options = createSqlQuery_wpfg_options();


	
						;

				

$tdatawpfg_options[".sqlquery"] = $queryData_wpfg_options;

$tableEvents["wpfg_options"] = new eventsBase;
$tdatawpfg_options[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMESSAGE_TYPE = array();
	$tdataMESSAGE_TYPE[".truncateText"] = true;
	$tdataMESSAGE_TYPE[".NumberOfChars"] = 20;
	$tdataMESSAGE_TYPE[".ShortName"] = "MESSAGE_TYPE";
	$tdataMESSAGE_TYPE[".OwnerID"] = "";
	$tdataMESSAGE_TYPE[".OriginalTable"] = "MESSAGE_TYPE";

//	field labels
$fieldLabelsMESSAGE_TYPE = array();
$fieldToolTipsMESSAGE_TYPE = array();
$pageTitlesMESSAGE_TYPE = array();
$placeHoldersMESSAGE_TYPE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsMESSAGE_TYPE["Japanese"] = array();
	$fieldToolTipsMESSAGE_TYPE["Japanese"] = array();
	$placeHoldersMESSAGE_TYPE["Japanese"] = array();
	$pageTitlesMESSAGE_TYPE["Japanese"] = array();
	$fieldLabelsMESSAGE_TYPE["Japanese"]["MSGT_UID"] = "msgtのUID";
	$fieldToolTipsMESSAGE_TYPE["Japanese"]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_TYPE["Japanese"]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_TYPE["Japanese"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_TYPE["Japanese"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_TYPE["Japanese"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_TYPE["Japanese"]["MSGT_NAME"] = "msgt名前";
	$fieldToolTipsMESSAGE_TYPE["Japanese"]["MSGT_NAME"] = "";
	$placeHoldersMESSAGE_TYPE["Japanese"]["MSGT_NAME"] = "";
	if (count($fieldToolTipsMESSAGE_TYPE["Japanese"]))
		$tdataMESSAGE_TYPE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMESSAGE_TYPE["English"] = array();
	$fieldToolTipsMESSAGE_TYPE["English"] = array();
	$placeHoldersMESSAGE_TYPE["English"] = array();
	$pageTitlesMESSAGE_TYPE["English"] = array();
	$fieldLabelsMESSAGE_TYPE["English"]["MSGT_UID"] = "msgtのUID";
	$fieldToolTipsMESSAGE_TYPE["English"]["MSGT_UID"] = "";
	$placeHoldersMESSAGE_TYPE["English"]["MSGT_UID"] = "";
	$fieldLabelsMESSAGE_TYPE["English"]["PRJ_UID"] = "PRJのUID";
	$fieldToolTipsMESSAGE_TYPE["English"]["PRJ_UID"] = "";
	$placeHoldersMESSAGE_TYPE["English"]["PRJ_UID"] = "";
	$fieldLabelsMESSAGE_TYPE["English"]["MSGT_NAME"] = "msgt名前";
	$fieldToolTipsMESSAGE_TYPE["English"]["MSGT_NAME"] = "";
	$placeHoldersMESSAGE_TYPE["English"]["MSGT_NAME"] = "";
	if (count($fieldToolTipsMESSAGE_TYPE["English"]))
		$tdataMESSAGE_TYPE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMESSAGE_TYPE[""] = array();
	$fieldToolTipsMESSAGE_TYPE[""] = array();
	$placeHoldersMESSAGE_TYPE[""] = array();
	$pageTitlesMESSAGE_TYPE[""] = array();
	if (count($fieldToolTipsMESSAGE_TYPE[""]))
		$tdataMESSAGE_TYPE[".isUseToolTips"] = true;
}


	$tdataMESSAGE_TYPE[".NCSearch"] = true;



$tdataMESSAGE_TYPE[".shortTableName"] = "MESSAGE_TYPE";
$tdataMESSAGE_TYPE[".nSecOptions"] = 0;
$tdataMESSAGE_TYPE[".recsPerRowPrint"] = 1;
$tdataMESSAGE_TYPE[".mainTableOwnerID"] = "";
$tdataMESSAGE_TYPE[".moveNext"] = 0;
$tdataMESSAGE_TYPE[".entityType"] = 0;

$tdataMESSAGE_TYPE[".strOriginalTableName"] = "MESSAGE_TYPE";

	



$tdataMESSAGE_TYPE[".showAddInPopup"] = false;

$tdataMESSAGE_TYPE[".showEditInPopup"] = false;

$tdataMESSAGE_TYPE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMESSAGE_TYPE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMESSAGE_TYPE[".fieldsForRegister"] = array();
	
$tdataMESSAGE_TYPE[".listAjax"] = false;

	$tdataMESSAGE_TYPE[".audit"] = true;

	$tdataMESSAGE_TYPE[".locking"] = false;

$tdataMESSAGE_TYPE[".edit"] = true;
$tdataMESSAGE_TYPE[".afterEditAction"] = 1;
$tdataMESSAGE_TYPE[".closePopupAfterEdit"] = 1;
$tdataMESSAGE_TYPE[".afterEditActionDetTable"] = "";

$tdataMESSAGE_TYPE[".add"] = true;
$tdataMESSAGE_TYPE[".afterAddAction"] = 1;
$tdataMESSAGE_TYPE[".closePopupAfterAdd"] = 1;
$tdataMESSAGE_TYPE[".afterAddActionDetTable"] = "";

$tdataMESSAGE_TYPE[".list"] = true;

$tdataMESSAGE_TYPE[".inlineEdit"] = true;


$tdataMESSAGE_TYPE[".reorderRecordsByHeader"] = true;
$tdataMESSAGE_TYPE[".createSortByDropdown"] = true;
$tdataMESSAGE_TYPE[".strSortControlSettingsJSON"] = "";



$tdataMESSAGE_TYPE[".inlineAdd"] = true;
$tdataMESSAGE_TYPE[".view"] = true;

$tdataMESSAGE_TYPE[".import"] = true;

$tdataMESSAGE_TYPE[".exportTo"] = true;

$tdataMESSAGE_TYPE[".printFriendly"] = true;

$tdataMESSAGE_TYPE[".delete"] = true;

$tdataMESSAGE_TYPE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataMESSAGE_TYPE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataMESSAGE_TYPE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataMESSAGE_TYPE[".searchSaving"] = false;
//

$tdataMESSAGE_TYPE[".showSearchPanel"] = true;
		$tdataMESSAGE_TYPE[".flexibleSearch"] = true;

$tdataMESSAGE_TYPE[".isUseAjaxSuggest"] = true;

$tdataMESSAGE_TYPE[".rowHighlite"] = true;



				

$tdataMESSAGE_TYPE[".ajaxCodeSnippetAdded"] = false;

$tdataMESSAGE_TYPE[".buttonsAdded"] = false;

$tdataMESSAGE_TYPE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMESSAGE_TYPE[".isUseTimeForSearch"] = false;





$tdataMESSAGE_TYPE[".allSearchFields"] = array();
$tdataMESSAGE_TYPE[".filterFields"] = array();
$tdataMESSAGE_TYPE[".requiredSearchFields"] = array();

$tdataMESSAGE_TYPE[".allSearchFields"][] = "MSGT_UID";
	$tdataMESSAGE_TYPE[".allSearchFields"][] = "PRJ_UID";
	$tdataMESSAGE_TYPE[".allSearchFields"][] = "MSGT_NAME";
	

$tdataMESSAGE_TYPE[".googleLikeFields"] = array();
$tdataMESSAGE_TYPE[".googleLikeFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".googleLikeFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".googleLikeFields"][] = "MSGT_NAME";


$tdataMESSAGE_TYPE[".advSearchFields"] = array();
$tdataMESSAGE_TYPE[".advSearchFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".advSearchFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".advSearchFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".tableType"] = "list";

$tdataMESSAGE_TYPE[".printerPageOrientation"] = 0;
$tdataMESSAGE_TYPE[".nPrinterPageScale"] = 100;

$tdataMESSAGE_TYPE[".nPrinterSplitRecords"] = 40;

$tdataMESSAGE_TYPE[".nPrinterPDFSplitRecords"] = 40;



$tdataMESSAGE_TYPE[".geocodingEnabled"] = false;





$tdataMESSAGE_TYPE[".listGridLayout"] = 3;


$tdataMESSAGE_TYPE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataMESSAGE_TYPE[".pageSize"] = 20;

$tdataMESSAGE_TYPE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMESSAGE_TYPE[".strOrderBy"] = $tstrOrderBy;

$tdataMESSAGE_TYPE[".orderindexes"] = array();

$tdataMESSAGE_TYPE[".sqlHead"] = "SELECT MSGT_UID,  	PRJ_UID,  	MSGT_NAME";
$tdataMESSAGE_TYPE[".sqlFrom"] = "FROM MESSAGE_TYPE";
$tdataMESSAGE_TYPE[".sqlWhereExpr"] = "";
$tdataMESSAGE_TYPE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMESSAGE_TYPE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMESSAGE_TYPE[".arrGroupsPerPage"] = $arrGPP;

$tdataMESSAGE_TYPE[".highlightSearchResults"] = true;

$tableKeysMESSAGE_TYPE = array();
$tableKeysMESSAGE_TYPE[] = "MSGT_UID";
$tdataMESSAGE_TYPE[".Keys"] = $tableKeysMESSAGE_TYPE;

$tdataMESSAGE_TYPE[".listFields"] = array();
$tdataMESSAGE_TYPE[".listFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".listFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".listFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".hideMobileList"] = array();


$tdataMESSAGE_TYPE[".viewFields"] = array();
$tdataMESSAGE_TYPE[".viewFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".viewFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".viewFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".addFields"] = array();
$tdataMESSAGE_TYPE[".addFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".addFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".addFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".masterListFields"] = array();
$tdataMESSAGE_TYPE[".masterListFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".masterListFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".masterListFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".inlineAddFields"] = array();
$tdataMESSAGE_TYPE[".inlineAddFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".inlineAddFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".inlineAddFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".editFields"] = array();
$tdataMESSAGE_TYPE[".editFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".editFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".editFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".inlineEditFields"] = array();
$tdataMESSAGE_TYPE[".inlineEditFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".inlineEditFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".inlineEditFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".updateSelectedFields"] = array();
$tdataMESSAGE_TYPE[".updateSelectedFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".updateSelectedFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".updateSelectedFields"][] = "MSGT_NAME";


$tdataMESSAGE_TYPE[".exportFields"] = array();
$tdataMESSAGE_TYPE[".exportFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".exportFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".exportFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".importFields"] = array();
$tdataMESSAGE_TYPE[".importFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".importFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".importFields"][] = "MSGT_NAME";

$tdataMESSAGE_TYPE[".printFields"] = array();
$tdataMESSAGE_TYPE[".printFields"][] = "MSGT_UID";
$tdataMESSAGE_TYPE[".printFields"][] = "PRJ_UID";
$tdataMESSAGE_TYPE[".printFields"][] = "MSGT_NAME";

//	MSGT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MSGT_UID";
	$fdata["GoodName"] = "MSGT_UID";
	$fdata["ownerTable"] = "MESSAGE_TYPE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE","MSGT_UID");
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

		$fdata["strField"] = "MSGT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGT_UID";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataMESSAGE_TYPE["MSGT_UID"] = $fdata;
//	PRJ_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRJ_UID";
	$fdata["GoodName"] = "PRJ_UID";
	$fdata["ownerTable"] = "MESSAGE_TYPE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE","PRJ_UID");
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

		$fdata["strField"] = "PRJ_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRJ_UID";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataMESSAGE_TYPE["PRJ_UID"] = $fdata;
//	MSGT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MSGT_NAME";
	$fdata["GoodName"] = "MSGT_NAME";
	$fdata["ownerTable"] = "MESSAGE_TYPE";
	$fdata["Label"] = GetFieldLabel("MESSAGE_TYPE","MSGT_NAME");
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

		$fdata["strField"] = "MSGT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSGT_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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




	$tdataMESSAGE_TYPE["MSGT_NAME"] = $fdata;


$tables_data["MESSAGE_TYPE"]=&$tdataMESSAGE_TYPE;
$field_labels["MESSAGE_TYPE"] = &$fieldLabelsMESSAGE_TYPE;
$fieldToolTips["MESSAGE_TYPE"] = &$fieldToolTipsMESSAGE_TYPE;
$placeHolders["MESSAGE_TYPE"] = &$placeHoldersMESSAGE_TYPE;
$page_titles["MESSAGE_TYPE"] = &$pageTitlesMESSAGE_TYPE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MESSAGE_TYPE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MESSAGE_TYPE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MESSAGE_TYPE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MSGT_UID,  	PRJ_UID,  	MSGT_NAME";
$proto0["m_strFrom"] = "FROM MESSAGE_TYPE";
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
	"m_strName" => "MSGT_UID",
	"m_strTable" => "MESSAGE_TYPE",
	"m_srcTableName" => "MESSAGE_TYPE"
));

$proto6["m_sql"] = "MSGT_UID";
$proto6["m_srcTableName"] = "MESSAGE_TYPE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRJ_UID",
	"m_strTable" => "MESSAGE_TYPE",
	"m_srcTableName" => "MESSAGE_TYPE"
));

$proto8["m_sql"] = "PRJ_UID";
$proto8["m_srcTableName"] = "MESSAGE_TYPE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MSGT_NAME",
	"m_strTable" => "MESSAGE_TYPE",
	"m_srcTableName" => "MESSAGE_TYPE"
));

$proto10["m_sql"] = "MSGT_NAME";
$proto10["m_srcTableName"] = "MESSAGE_TYPE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "MESSAGE_TYPE";
$proto13["m_srcTableName"] = "MESSAGE_TYPE";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "MSGT_UID";
$proto13["m_columns"][] = "PRJ_UID";
$proto13["m_columns"][] = "MSGT_NAME";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "MESSAGE_TYPE";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "MESSAGE_TYPE";
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
$proto0["m_srcTableName"]="MESSAGE_TYPE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MESSAGE_TYPE = createSqlQuery_MESSAGE_TYPE();


	
						;

			

$tdataMESSAGE_TYPE[".sqlquery"] = $queryData_MESSAGE_TYPE;

$tableEvents["MESSAGE_TYPE"] = new eventsBase;
$tdataMESSAGE_TYPE[".hasEvents"] = false;

?>
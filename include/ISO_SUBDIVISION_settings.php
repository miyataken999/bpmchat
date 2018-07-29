<?php
require_once(getabspath("classes/cipherer.php"));




$tdataISO_SUBDIVISION = array();
	$tdataISO_SUBDIVISION[".truncateText"] = true;
	$tdataISO_SUBDIVISION[".NumberOfChars"] = 20;
	$tdataISO_SUBDIVISION[".ShortName"] = "ISO_SUBDIVISION";
	$tdataISO_SUBDIVISION[".OwnerID"] = "";
	$tdataISO_SUBDIVISION[".OriginalTable"] = "ISO_SUBDIVISION";

//	field labels
$fieldLabelsISO_SUBDIVISION = array();
$fieldToolTipsISO_SUBDIVISION = array();
$pageTitlesISO_SUBDIVISION = array();
$placeHoldersISO_SUBDIVISION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsISO_SUBDIVISION["Japanese"] = array();
	$fieldToolTipsISO_SUBDIVISION["Japanese"] = array();
	$placeHoldersISO_SUBDIVISION["Japanese"] = array();
	$pageTitlesISO_SUBDIVISION["Japanese"] = array();
	$fieldLabelsISO_SUBDIVISION["Japanese"]["IC_UID"] = "IC UID";
	$fieldToolTipsISO_SUBDIVISION["Japanese"]["IC_UID"] = "";
	$placeHoldersISO_SUBDIVISION["Japanese"]["IC_UID"] = "";
	$fieldLabelsISO_SUBDIVISION["Japanese"]["IS_UID"] = "uidがあります";
	$fieldToolTipsISO_SUBDIVISION["Japanese"]["IS_UID"] = "";
	$placeHoldersISO_SUBDIVISION["Japanese"]["IS_UID"] = "";
	$fieldLabelsISO_SUBDIVISION["Japanese"]["IS_NAME"] = "名前です";
	$fieldToolTipsISO_SUBDIVISION["Japanese"]["IS_NAME"] = "";
	$placeHoldersISO_SUBDIVISION["Japanese"]["IS_NAME"] = "";
	if (count($fieldToolTipsISO_SUBDIVISION["Japanese"]))
		$tdataISO_SUBDIVISION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsISO_SUBDIVISION["English"] = array();
	$fieldToolTipsISO_SUBDIVISION["English"] = array();
	$placeHoldersISO_SUBDIVISION["English"] = array();
	$pageTitlesISO_SUBDIVISION["English"] = array();
	$fieldLabelsISO_SUBDIVISION["English"]["IC_UID"] = "IC UID";
	$fieldToolTipsISO_SUBDIVISION["English"]["IC_UID"] = "";
	$placeHoldersISO_SUBDIVISION["English"]["IC_UID"] = "";
	$fieldLabelsISO_SUBDIVISION["English"]["IS_UID"] = "uidがあります";
	$fieldToolTipsISO_SUBDIVISION["English"]["IS_UID"] = "";
	$placeHoldersISO_SUBDIVISION["English"]["IS_UID"] = "";
	$fieldLabelsISO_SUBDIVISION["English"]["IS_NAME"] = "名前です";
	$fieldToolTipsISO_SUBDIVISION["English"]["IS_NAME"] = "";
	$placeHoldersISO_SUBDIVISION["English"]["IS_NAME"] = "";
	if (count($fieldToolTipsISO_SUBDIVISION["English"]))
		$tdataISO_SUBDIVISION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsISO_SUBDIVISION[""] = array();
	$fieldToolTipsISO_SUBDIVISION[""] = array();
	$placeHoldersISO_SUBDIVISION[""] = array();
	$pageTitlesISO_SUBDIVISION[""] = array();
	if (count($fieldToolTipsISO_SUBDIVISION[""]))
		$tdataISO_SUBDIVISION[".isUseToolTips"] = true;
}


	$tdataISO_SUBDIVISION[".NCSearch"] = true;



$tdataISO_SUBDIVISION[".shortTableName"] = "ISO_SUBDIVISION";
$tdataISO_SUBDIVISION[".nSecOptions"] = 0;
$tdataISO_SUBDIVISION[".recsPerRowPrint"] = 1;
$tdataISO_SUBDIVISION[".mainTableOwnerID"] = "";
$tdataISO_SUBDIVISION[".moveNext"] = 0;
$tdataISO_SUBDIVISION[".entityType"] = 0;

$tdataISO_SUBDIVISION[".strOriginalTableName"] = "ISO_SUBDIVISION";

	



$tdataISO_SUBDIVISION[".showAddInPopup"] = false;

$tdataISO_SUBDIVISION[".showEditInPopup"] = false;

$tdataISO_SUBDIVISION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataISO_SUBDIVISION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataISO_SUBDIVISION[".fieldsForRegister"] = array();
	
$tdataISO_SUBDIVISION[".listAjax"] = false;

	$tdataISO_SUBDIVISION[".audit"] = true;

	$tdataISO_SUBDIVISION[".locking"] = false;

$tdataISO_SUBDIVISION[".edit"] = true;
$tdataISO_SUBDIVISION[".afterEditAction"] = 1;
$tdataISO_SUBDIVISION[".closePopupAfterEdit"] = 1;
$tdataISO_SUBDIVISION[".afterEditActionDetTable"] = "";

$tdataISO_SUBDIVISION[".add"] = true;
$tdataISO_SUBDIVISION[".afterAddAction"] = 1;
$tdataISO_SUBDIVISION[".closePopupAfterAdd"] = 1;
$tdataISO_SUBDIVISION[".afterAddActionDetTable"] = "";

$tdataISO_SUBDIVISION[".list"] = true;

$tdataISO_SUBDIVISION[".inlineEdit"] = true;


$tdataISO_SUBDIVISION[".reorderRecordsByHeader"] = true;
$tdataISO_SUBDIVISION[".createSortByDropdown"] = true;
$tdataISO_SUBDIVISION[".strSortControlSettingsJSON"] = "";



$tdataISO_SUBDIVISION[".inlineAdd"] = true;
$tdataISO_SUBDIVISION[".view"] = true;

$tdataISO_SUBDIVISION[".import"] = true;

$tdataISO_SUBDIVISION[".exportTo"] = true;

$tdataISO_SUBDIVISION[".printFriendly"] = true;

$tdataISO_SUBDIVISION[".delete"] = true;

$tdataISO_SUBDIVISION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataISO_SUBDIVISION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataISO_SUBDIVISION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataISO_SUBDIVISION[".searchSaving"] = false;
//

$tdataISO_SUBDIVISION[".showSearchPanel"] = true;
		$tdataISO_SUBDIVISION[".flexibleSearch"] = true;

$tdataISO_SUBDIVISION[".isUseAjaxSuggest"] = true;

$tdataISO_SUBDIVISION[".rowHighlite"] = true;



				

$tdataISO_SUBDIVISION[".ajaxCodeSnippetAdded"] = false;

$tdataISO_SUBDIVISION[".buttonsAdded"] = false;

$tdataISO_SUBDIVISION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataISO_SUBDIVISION[".isUseTimeForSearch"] = false;





$tdataISO_SUBDIVISION[".allSearchFields"] = array();
$tdataISO_SUBDIVISION[".filterFields"] = array();
$tdataISO_SUBDIVISION[".requiredSearchFields"] = array();

$tdataISO_SUBDIVISION[".allSearchFields"][] = "IC_UID";
	$tdataISO_SUBDIVISION[".allSearchFields"][] = "IS_UID";
	$tdataISO_SUBDIVISION[".allSearchFields"][] = "IS_NAME";
	

$tdataISO_SUBDIVISION[".googleLikeFields"] = array();
$tdataISO_SUBDIVISION[".googleLikeFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".googleLikeFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".googleLikeFields"][] = "IS_NAME";


$tdataISO_SUBDIVISION[".advSearchFields"] = array();
$tdataISO_SUBDIVISION[".advSearchFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".advSearchFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".advSearchFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".tableType"] = "list";

$tdataISO_SUBDIVISION[".printerPageOrientation"] = 0;
$tdataISO_SUBDIVISION[".nPrinterPageScale"] = 100;

$tdataISO_SUBDIVISION[".nPrinterSplitRecords"] = 40;

$tdataISO_SUBDIVISION[".nPrinterPDFSplitRecords"] = 40;



$tdataISO_SUBDIVISION[".geocodingEnabled"] = false;





$tdataISO_SUBDIVISION[".listGridLayout"] = 3;


$tdataISO_SUBDIVISION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataISO_SUBDIVISION[".pageSize"] = 20;

$tdataISO_SUBDIVISION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataISO_SUBDIVISION[".strOrderBy"] = $tstrOrderBy;

$tdataISO_SUBDIVISION[".orderindexes"] = array();

$tdataISO_SUBDIVISION[".sqlHead"] = "SELECT IC_UID,  	IS_UID,  	IS_NAME";
$tdataISO_SUBDIVISION[".sqlFrom"] = "FROM ISO_SUBDIVISION";
$tdataISO_SUBDIVISION[".sqlWhereExpr"] = "";
$tdataISO_SUBDIVISION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataISO_SUBDIVISION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataISO_SUBDIVISION[".arrGroupsPerPage"] = $arrGPP;

$tdataISO_SUBDIVISION[".highlightSearchResults"] = true;

$tableKeysISO_SUBDIVISION = array();
$tableKeysISO_SUBDIVISION[] = "IC_UID";
$tableKeysISO_SUBDIVISION[] = "IS_UID";
$tdataISO_SUBDIVISION[".Keys"] = $tableKeysISO_SUBDIVISION;

$tdataISO_SUBDIVISION[".listFields"] = array();
$tdataISO_SUBDIVISION[".listFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".listFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".listFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".hideMobileList"] = array();


$tdataISO_SUBDIVISION[".viewFields"] = array();
$tdataISO_SUBDIVISION[".viewFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".viewFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".viewFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".addFields"] = array();
$tdataISO_SUBDIVISION[".addFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".addFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".addFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".masterListFields"] = array();
$tdataISO_SUBDIVISION[".masterListFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".masterListFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".masterListFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".inlineAddFields"] = array();
$tdataISO_SUBDIVISION[".inlineAddFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".inlineAddFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".inlineAddFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".editFields"] = array();
$tdataISO_SUBDIVISION[".editFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".editFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".editFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".inlineEditFields"] = array();
$tdataISO_SUBDIVISION[".inlineEditFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".inlineEditFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".inlineEditFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".updateSelectedFields"] = array();
$tdataISO_SUBDIVISION[".updateSelectedFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".updateSelectedFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".updateSelectedFields"][] = "IS_NAME";


$tdataISO_SUBDIVISION[".exportFields"] = array();
$tdataISO_SUBDIVISION[".exportFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".exportFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".exportFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".importFields"] = array();
$tdataISO_SUBDIVISION[".importFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".importFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".importFields"][] = "IS_NAME";

$tdataISO_SUBDIVISION[".printFields"] = array();
$tdataISO_SUBDIVISION[".printFields"][] = "IC_UID";
$tdataISO_SUBDIVISION[".printFields"][] = "IS_UID";
$tdataISO_SUBDIVISION[".printFields"][] = "IS_NAME";

//	IC_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IC_UID";
	$fdata["GoodName"] = "IC_UID";
	$fdata["ownerTable"] = "ISO_SUBDIVISION";
	$fdata["Label"] = GetFieldLabel("ISO_SUBDIVISION","IC_UID");
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

		$fdata["strField"] = "IC_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IC_UID";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdataISO_SUBDIVISION["IC_UID"] = $fdata;
//	IS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IS_UID";
	$fdata["GoodName"] = "IS_UID";
	$fdata["ownerTable"] = "ISO_SUBDIVISION";
	$fdata["Label"] = GetFieldLabel("ISO_SUBDIVISION","IS_UID");
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

		$fdata["strField"] = "IS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IS_UID";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataISO_SUBDIVISION["IS_UID"] = $fdata;
//	IS_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IS_NAME";
	$fdata["GoodName"] = "IS_NAME";
	$fdata["ownerTable"] = "ISO_SUBDIVISION";
	$fdata["Label"] = GetFieldLabel("ISO_SUBDIVISION","IS_NAME");
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

		$fdata["strField"] = "IS_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IS_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataISO_SUBDIVISION["IS_NAME"] = $fdata;


$tables_data["ISO_SUBDIVISION"]=&$tdataISO_SUBDIVISION;
$field_labels["ISO_SUBDIVISION"] = &$fieldLabelsISO_SUBDIVISION;
$fieldToolTips["ISO_SUBDIVISION"] = &$fieldToolTipsISO_SUBDIVISION;
$placeHolders["ISO_SUBDIVISION"] = &$placeHoldersISO_SUBDIVISION;
$page_titles["ISO_SUBDIVISION"] = &$pageTitlesISO_SUBDIVISION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ISO_SUBDIVISION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ISO_SUBDIVISION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ISO_SUBDIVISION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IC_UID,  	IS_UID,  	IS_NAME";
$proto0["m_strFrom"] = "FROM ISO_SUBDIVISION";
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
	"m_strName" => "IC_UID",
	"m_strTable" => "ISO_SUBDIVISION",
	"m_srcTableName" => "ISO_SUBDIVISION"
));

$proto6["m_sql"] = "IC_UID";
$proto6["m_srcTableName"] = "ISO_SUBDIVISION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IS_UID",
	"m_strTable" => "ISO_SUBDIVISION",
	"m_srcTableName" => "ISO_SUBDIVISION"
));

$proto8["m_sql"] = "IS_UID";
$proto8["m_srcTableName"] = "ISO_SUBDIVISION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IS_NAME",
	"m_strTable" => "ISO_SUBDIVISION",
	"m_srcTableName" => "ISO_SUBDIVISION"
));

$proto10["m_sql"] = "IS_NAME";
$proto10["m_srcTableName"] = "ISO_SUBDIVISION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "ISO_SUBDIVISION";
$proto13["m_srcTableName"] = "ISO_SUBDIVISION";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IC_UID";
$proto13["m_columns"][] = "IS_UID";
$proto13["m_columns"][] = "IS_NAME";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "ISO_SUBDIVISION";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "ISO_SUBDIVISION";
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
$proto0["m_srcTableName"]="ISO_SUBDIVISION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ISO_SUBDIVISION = createSqlQuery_ISO_SUBDIVISION();


	
						;

			

$tdataISO_SUBDIVISION[".sqlquery"] = $queryData_ISO_SUBDIVISION;

$tableEvents["ISO_SUBDIVISION"] = new eventsBase;
$tdataISO_SUBDIVISION[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOAUTH_SCOPES = array();
	$tdataOAUTH_SCOPES[".truncateText"] = true;
	$tdataOAUTH_SCOPES[".NumberOfChars"] = 80;
	$tdataOAUTH_SCOPES[".ShortName"] = "OAUTH_SCOPES";
	$tdataOAUTH_SCOPES[".OwnerID"] = "";
	$tdataOAUTH_SCOPES[".OriginalTable"] = "OAUTH_SCOPES";

//	field labels
$fieldLabelsOAUTH_SCOPES = array();
$fieldToolTipsOAUTH_SCOPES = array();
$pageTitlesOAUTH_SCOPES = array();
$placeHoldersOAUTH_SCOPES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsOAUTH_SCOPES["Japanese"] = array();
	$fieldToolTipsOAUTH_SCOPES["Japanese"] = array();
	$placeHoldersOAUTH_SCOPES["Japanese"] = array();
	$pageTitlesOAUTH_SCOPES["Japanese"] = array();
	$fieldLabelsOAUTH_SCOPES["Japanese"]["TYPE"] = "TYPE";
	$fieldToolTipsOAUTH_SCOPES["Japanese"]["TYPE"] = "";
	$placeHoldersOAUTH_SCOPES["Japanese"]["TYPE"] = "";
	$fieldLabelsOAUTH_SCOPES["Japanese"]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_SCOPES["Japanese"]["SCOPE"] = "";
	$placeHoldersOAUTH_SCOPES["Japanese"]["SCOPE"] = "";
	$fieldLabelsOAUTH_SCOPES["Japanese"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_SCOPES["Japanese"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_SCOPES["Japanese"]["CLIENT_ID"] = "";
	if (count($fieldToolTipsOAUTH_SCOPES["Japanese"]))
		$tdataOAUTH_SCOPES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOAUTH_SCOPES["English"] = array();
	$fieldToolTipsOAUTH_SCOPES["English"] = array();
	$placeHoldersOAUTH_SCOPES["English"] = array();
	$pageTitlesOAUTH_SCOPES["English"] = array();
	$fieldLabelsOAUTH_SCOPES["English"]["TYPE"] = "TYPE";
	$fieldToolTipsOAUTH_SCOPES["English"]["TYPE"] = "";
	$placeHoldersOAUTH_SCOPES["English"]["TYPE"] = "";
	$fieldLabelsOAUTH_SCOPES["English"]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_SCOPES["English"]["SCOPE"] = "";
	$placeHoldersOAUTH_SCOPES["English"]["SCOPE"] = "";
	$fieldLabelsOAUTH_SCOPES["English"]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_SCOPES["English"]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_SCOPES["English"]["CLIENT_ID"] = "";
	if (count($fieldToolTipsOAUTH_SCOPES["English"]))
		$tdataOAUTH_SCOPES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOAUTH_SCOPES[""] = array();
	$fieldToolTipsOAUTH_SCOPES[""] = array();
	$placeHoldersOAUTH_SCOPES[""] = array();
	$pageTitlesOAUTH_SCOPES[""] = array();
	$fieldLabelsOAUTH_SCOPES[""]["TYPE"] = "TYPE";
	$fieldToolTipsOAUTH_SCOPES[""]["TYPE"] = "";
	$placeHoldersOAUTH_SCOPES[""]["TYPE"] = "";
	$fieldLabelsOAUTH_SCOPES[""]["SCOPE"] = "SCOPE";
	$fieldToolTipsOAUTH_SCOPES[""]["SCOPE"] = "";
	$placeHoldersOAUTH_SCOPES[""]["SCOPE"] = "";
	$fieldLabelsOAUTH_SCOPES[""]["CLIENT_ID"] = "CLIENT ID";
	$fieldToolTipsOAUTH_SCOPES[""]["CLIENT_ID"] = "";
	$placeHoldersOAUTH_SCOPES[""]["CLIENT_ID"] = "";
	if (count($fieldToolTipsOAUTH_SCOPES[""]))
		$tdataOAUTH_SCOPES[".isUseToolTips"] = true;
}


	$tdataOAUTH_SCOPES[".NCSearch"] = true;



$tdataOAUTH_SCOPES[".shortTableName"] = "OAUTH_SCOPES";
$tdataOAUTH_SCOPES[".nSecOptions"] = 0;
$tdataOAUTH_SCOPES[".recsPerRowPrint"] = 1;
$tdataOAUTH_SCOPES[".mainTableOwnerID"] = "";
$tdataOAUTH_SCOPES[".moveNext"] = 1;
$tdataOAUTH_SCOPES[".entityType"] = 0;

$tdataOAUTH_SCOPES[".strOriginalTableName"] = "OAUTH_SCOPES";

	



$tdataOAUTH_SCOPES[".showAddInPopup"] = false;

$tdataOAUTH_SCOPES[".showEditInPopup"] = false;

$tdataOAUTH_SCOPES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOAUTH_SCOPES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOAUTH_SCOPES[".fieldsForRegister"] = array();
	
$tdataOAUTH_SCOPES[".listAjax"] = false;

	$tdataOAUTH_SCOPES[".audit"] = false;

	$tdataOAUTH_SCOPES[".locking"] = false;



$tdataOAUTH_SCOPES[".list"] = true;



$tdataOAUTH_SCOPES[".reorderRecordsByHeader"] = true;




$tdataOAUTH_SCOPES[".import"] = true;

$tdataOAUTH_SCOPES[".exportTo"] = true;

$tdataOAUTH_SCOPES[".printFriendly"] = true;


$tdataOAUTH_SCOPES[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataOAUTH_SCOPES[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataOAUTH_SCOPES[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataOAUTH_SCOPES[".searchSaving"] = false;
//

$tdataOAUTH_SCOPES[".showSearchPanel"] = true;
		$tdataOAUTH_SCOPES[".flexibleSearch"] = true;

$tdataOAUTH_SCOPES[".isUseAjaxSuggest"] = true;

$tdataOAUTH_SCOPES[".rowHighlite"] = true;



				

$tdataOAUTH_SCOPES[".ajaxCodeSnippetAdded"] = false;

$tdataOAUTH_SCOPES[".buttonsAdded"] = false;

$tdataOAUTH_SCOPES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOAUTH_SCOPES[".isUseTimeForSearch"] = false;





$tdataOAUTH_SCOPES[".allSearchFields"] = array();
$tdataOAUTH_SCOPES[".filterFields"] = array();
$tdataOAUTH_SCOPES[".requiredSearchFields"] = array();

$tdataOAUTH_SCOPES[".allSearchFields"][] = "TYPE";
	$tdataOAUTH_SCOPES[".allSearchFields"][] = "SCOPE";
	$tdataOAUTH_SCOPES[".allSearchFields"][] = "CLIENT_ID";
	

$tdataOAUTH_SCOPES[".googleLikeFields"] = array();
$tdataOAUTH_SCOPES[".googleLikeFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".googleLikeFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".googleLikeFields"][] = "CLIENT_ID";


$tdataOAUTH_SCOPES[".advSearchFields"] = array();
$tdataOAUTH_SCOPES[".advSearchFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".advSearchFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".advSearchFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".tableType"] = "list";

$tdataOAUTH_SCOPES[".printerPageOrientation"] = 0;
$tdataOAUTH_SCOPES[".nPrinterPageScale"] = 100;

$tdataOAUTH_SCOPES[".nPrinterSplitRecords"] = 40;

$tdataOAUTH_SCOPES[".nPrinterPDFSplitRecords"] = 40;



$tdataOAUTH_SCOPES[".geocodingEnabled"] = false;





$tdataOAUTH_SCOPES[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataOAUTH_SCOPES[".pageSize"] = 20;

$tdataOAUTH_SCOPES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOAUTH_SCOPES[".strOrderBy"] = $tstrOrderBy;

$tdataOAUTH_SCOPES[".orderindexes"] = array();

$tdataOAUTH_SCOPES[".sqlHead"] = "SELECT `TYPE`,  	`SCOPE`,  	CLIENT_ID";
$tdataOAUTH_SCOPES[".sqlFrom"] = "FROM OAUTH_SCOPES";
$tdataOAUTH_SCOPES[".sqlWhereExpr"] = "";
$tdataOAUTH_SCOPES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOAUTH_SCOPES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOAUTH_SCOPES[".arrGroupsPerPage"] = $arrGPP;

$tdataOAUTH_SCOPES[".highlightSearchResults"] = true;

$tableKeysOAUTH_SCOPES = array();
$tdataOAUTH_SCOPES[".Keys"] = $tableKeysOAUTH_SCOPES;

$tdataOAUTH_SCOPES[".listFields"] = array();
$tdataOAUTH_SCOPES[".listFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".listFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".listFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".hideMobileList"] = array();


$tdataOAUTH_SCOPES[".viewFields"] = array();
$tdataOAUTH_SCOPES[".viewFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".viewFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".viewFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".addFields"] = array();
$tdataOAUTH_SCOPES[".addFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".addFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".addFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".masterListFields"] = array();
$tdataOAUTH_SCOPES[".masterListFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".masterListFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".masterListFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".inlineAddFields"] = array();
$tdataOAUTH_SCOPES[".inlineAddFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".inlineAddFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".inlineAddFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".editFields"] = array();
$tdataOAUTH_SCOPES[".editFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".editFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".editFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".inlineEditFields"] = array();
$tdataOAUTH_SCOPES[".inlineEditFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".inlineEditFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".inlineEditFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".updateSelectedFields"] = array();
$tdataOAUTH_SCOPES[".updateSelectedFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".updateSelectedFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".updateSelectedFields"][] = "CLIENT_ID";


$tdataOAUTH_SCOPES[".exportFields"] = array();
$tdataOAUTH_SCOPES[".exportFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".exportFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".exportFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".importFields"] = array();
$tdataOAUTH_SCOPES[".importFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".importFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".importFields"][] = "CLIENT_ID";

$tdataOAUTH_SCOPES[".printFields"] = array();
$tdataOAUTH_SCOPES[".printFields"][] = "TYPE";
$tdataOAUTH_SCOPES[".printFields"][] = "SCOPE";
$tdataOAUTH_SCOPES[".printFields"][] = "CLIENT_ID";

//	TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TYPE";
	$fdata["GoodName"] = "TYPE";
	$fdata["ownerTable"] = "OAUTH_SCOPES";
	$fdata["Label"] = GetFieldLabel("OAUTH_SCOPES","TYPE");
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

		$fdata["strField"] = "TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TYPE`";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdataOAUTH_SCOPES["TYPE"] = $fdata;
//	SCOPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SCOPE";
	$fdata["GoodName"] = "SCOPE";
	$fdata["ownerTable"] = "OAUTH_SCOPES";
	$fdata["Label"] = GetFieldLabel("OAUTH_SCOPES","SCOPE");
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

		$fdata["strField"] = "SCOPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SCOPE`";

	
	
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
			$edata["EditParams"].= " maxlength=2000";

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




	$tdataOAUTH_SCOPES["SCOPE"] = $fdata;
//	CLIENT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CLIENT_ID";
	$fdata["GoodName"] = "CLIENT_ID";
	$fdata["ownerTable"] = "OAUTH_SCOPES";
	$fdata["Label"] = GetFieldLabel("OAUTH_SCOPES","CLIENT_ID");
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

		$fdata["strField"] = "CLIENT_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLIENT_ID";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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




	$tdataOAUTH_SCOPES["CLIENT_ID"] = $fdata;


$tables_data["OAUTH_SCOPES"]=&$tdataOAUTH_SCOPES;
$field_labels["OAUTH_SCOPES"] = &$fieldLabelsOAUTH_SCOPES;
$fieldToolTips["OAUTH_SCOPES"] = &$fieldToolTipsOAUTH_SCOPES;
$placeHolders["OAUTH_SCOPES"] = &$placeHoldersOAUTH_SCOPES;
$page_titles["OAUTH_SCOPES"] = &$pageTitlesOAUTH_SCOPES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OAUTH_SCOPES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["OAUTH_SCOPES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OAUTH_SCOPES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`TYPE`,  	`SCOPE`,  	CLIENT_ID";
$proto0["m_strFrom"] = "FROM OAUTH_SCOPES";
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
	"m_strName" => "TYPE",
	"m_strTable" => "OAUTH_SCOPES",
	"m_srcTableName" => "OAUTH_SCOPES"
));

$proto6["m_sql"] = "`TYPE`";
$proto6["m_srcTableName"] = "OAUTH_SCOPES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SCOPE",
	"m_strTable" => "OAUTH_SCOPES",
	"m_srcTableName" => "OAUTH_SCOPES"
));

$proto8["m_sql"] = "`SCOPE`";
$proto8["m_srcTableName"] = "OAUTH_SCOPES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CLIENT_ID",
	"m_strTable" => "OAUTH_SCOPES",
	"m_srcTableName" => "OAUTH_SCOPES"
));

$proto10["m_sql"] = "CLIENT_ID";
$proto10["m_srcTableName"] = "OAUTH_SCOPES";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "OAUTH_SCOPES";
$proto13["m_srcTableName"] = "OAUTH_SCOPES";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TYPE";
$proto13["m_columns"][] = "SCOPE";
$proto13["m_columns"][] = "CLIENT_ID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "OAUTH_SCOPES";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "OAUTH_SCOPES";
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
$proto0["m_srcTableName"]="OAUTH_SCOPES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OAUTH_SCOPES = createSqlQuery_OAUTH_SCOPES();


	
						;

			

$tdataOAUTH_SCOPES[".sqlquery"] = $queryData_OAUTH_SCOPES;

$tableEvents["OAUTH_SCOPES"] = new eventsBase;
$tdataOAUTH_SCOPES[".hasEvents"] = false;

?>
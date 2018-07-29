<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareusers = array();
	$tdatareusers[".truncateText"] = true;
	$tdatareusers[".NumberOfChars"] = 80;
	$tdatareusers[".ShortName"] = "reusers";
	$tdatareusers[".OwnerID"] = "";
	$tdatareusers[".OriginalTable"] = "reusers";

//	field labels
$fieldLabelsreusers = array();
$fieldToolTipsreusers = array();
$pageTitlesreusers = array();
$placeHoldersreusers = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsreusers["Japanese"] = array();
	$fieldToolTipsreusers["Japanese"] = array();
	$placeHoldersreusers["Japanese"] = array();
	$pageTitlesreusers["Japanese"] = array();
	$fieldLabelsreusers["Japanese"]["Password"] = "パスワード";
	$fieldToolTipsreusers["Japanese"]["Password"] = "";
	$placeHoldersreusers["Japanese"]["Password"] = "";
	$fieldLabelsreusers["Japanese"]["UserId"] = "ユーザーID";
	$fieldToolTipsreusers["Japanese"]["UserId"] = "";
	$placeHoldersreusers["Japanese"]["UserId"] = "";
	$fieldLabelsreusers["Japanese"]["Username"] = "ユーザ名";
	$fieldToolTipsreusers["Japanese"]["Username"] = "";
	$placeHoldersreusers["Japanese"]["Username"] = "";
	$fieldLabelsreusers["Japanese"]["UserType"] = "ユーザータイプ";
	$fieldToolTipsreusers["Japanese"]["UserType"] = "";
	$placeHoldersreusers["Japanese"]["UserType"] = "";
	if (count($fieldToolTipsreusers["Japanese"]))
		$tdatareusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreusers[""] = array();
	$fieldToolTipsreusers[""] = array();
	$placeHoldersreusers[""] = array();
	$pageTitlesreusers[""] = array();
	if (count($fieldToolTipsreusers[""]))
		$tdatareusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreusers["English"] = array();
	$fieldToolTipsreusers["English"] = array();
	$placeHoldersreusers["English"] = array();
	$pageTitlesreusers["English"] = array();
	if (count($fieldToolTipsreusers["English"]))
		$tdatareusers[".isUseToolTips"] = true;
}





$tdatareusers[".shortTableName"] = "reusers";
$tdatareusers[".nSecOptions"] = 0;
$tdatareusers[".recsPerRowPrint"] = 1;
$tdatareusers[".mainTableOwnerID"] = "";
$tdatareusers[".moveNext"] = 1;
$tdatareusers[".entityType"] = 0;

$tdatareusers[".strOriginalTableName"] = "reusers";

	



$tdatareusers[".showAddInPopup"] = false;

$tdatareusers[".showEditInPopup"] = false;

$tdatareusers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareusers[".fieldsForRegister"] = array();

$tdatareusers[".listAjax"] = false;

	$tdatareusers[".audit"] = true;

	$tdatareusers[".locking"] = false;

$tdatareusers[".edit"] = true;
$tdatareusers[".afterEditAction"] = 1;
$tdatareusers[".closePopupAfterEdit"] = 1;
$tdatareusers[".afterEditActionDetTable"] = "";

$tdatareusers[".add"] = true;
$tdatareusers[".afterAddAction"] = 1;
$tdatareusers[".closePopupAfterAdd"] = 1;
$tdatareusers[".afterAddActionDetTable"] = "";

$tdatareusers[".list"] = true;

$tdatareusers[".inlineEdit"] = true;


$tdatareusers[".reorderRecordsByHeader"] = true;
$tdatareusers[".createSortByDropdown"] = true;
$tdatareusers[".strSortControlSettingsJSON"] = "";



$tdatareusers[".inlineAdd"] = true;
$tdatareusers[".view"] = true;




$tdatareusers[".delete"] = true;

$tdatareusers[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdatareusers[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatareusers[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatareusers[".searchSaving"] = false;
//

$tdatareusers[".showSearchPanel"] = true;
		$tdatareusers[".flexibleSearch"] = true;

$tdatareusers[".isUseAjaxSuggest"] = true;

$tdatareusers[".rowHighlite"] = true;



	

$tdatareusers[".ajaxCodeSnippetAdded"] = false;

$tdatareusers[".buttonsAdded"] = false;

$tdatareusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareusers[".isUseTimeForSearch"] = false;





$tdatareusers[".allSearchFields"] = array();
$tdatareusers[".filterFields"] = array();
$tdatareusers[".requiredSearchFields"] = array();



$tdatareusers[".googleLikeFields"] = array();
$tdatareusers[".googleLikeFields"][] = "Password";
$tdatareusers[".googleLikeFields"][] = "Username";
$tdatareusers[".googleLikeFields"][] = "UserType";



$tdatareusers[".tableType"] = "list";

$tdatareusers[".printerPageOrientation"] = 0;
$tdatareusers[".nPrinterPageScale"] = 100;

$tdatareusers[".nPrinterSplitRecords"] = 40;

$tdatareusers[".nPrinterPDFSplitRecords"] = 40;



$tdatareusers[".geocodingEnabled"] = false;





$tdatareusers[".listGridLayout"] = 3;


$tdatareusers[".isResizeColumns"] = true;

$tdatareusers[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatareusers[".pageSize"] = 20;

$tdatareusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareusers[".strOrderBy"] = $tstrOrderBy;

$tdatareusers[".orderindexes"] = array();

$tdatareusers[".sqlHead"] = "select Password,  UserId,  Username,  UserType";
$tdatareusers[".sqlFrom"] = "FROM reusers";
$tdatareusers[".sqlWhereExpr"] = "";
$tdatareusers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareusers[".arrGroupsPerPage"] = $arrGPP;


$tableKeysreusers = array();
$tableKeysreusers[] = "Username";
$tdatareusers[".Keys"] = $tableKeysreusers;

$tdatareusers[".listFields"] = array();
$tdatareusers[".listFields"][] = "UserType";
$tdatareusers[".listFields"][] = "Username";
$tdatareusers[".listFields"][] = "Password";

$tdatareusers[".hideMobileList"] = array();


$tdatareusers[".viewFields"] = array();
$tdatareusers[".viewFields"][] = "Password";
$tdatareusers[".viewFields"][] = "Username";
$tdatareusers[".viewFields"][] = "UserType";

$tdatareusers[".addFields"] = array();
$tdatareusers[".addFields"][] = "Password";
$tdatareusers[".addFields"][] = "Username";
$tdatareusers[".addFields"][] = "UserType";

$tdatareusers[".masterListFields"] = array();

$tdatareusers[".inlineAddFields"] = array();
$tdatareusers[".inlineAddFields"][] = "UserType";
$tdatareusers[".inlineAddFields"][] = "Username";
$tdatareusers[".inlineAddFields"][] = "Password";

$tdatareusers[".editFields"] = array();
$tdatareusers[".editFields"][] = "Password";
$tdatareusers[".editFields"][] = "Username";
$tdatareusers[".editFields"][] = "UserType";

$tdatareusers[".inlineEditFields"] = array();
$tdatareusers[".inlineEditFields"][] = "UserType";
$tdatareusers[".inlineEditFields"][] = "Username";
$tdatareusers[".inlineEditFields"][] = "Password";

$tdatareusers[".updateSelectedFields"] = array();
$tdatareusers[".updateSelectedFields"][] = "Password";
$tdatareusers[".updateSelectedFields"][] = "Username";
$tdatareusers[".updateSelectedFields"][] = "UserType";


$tdatareusers[".exportFields"] = array();

$tdatareusers[".importFields"] = array();
$tdatareusers[".importFields"][] = "Password";
$tdatareusers[".importFields"][] = "UserId";
$tdatareusers[".importFields"][] = "Username";
$tdatareusers[".importFields"][] = "UserType";

$tdatareusers[".printFields"] = array();

//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "reusers";
	$fdata["Label"] = GetFieldLabel("reusers","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareusers["Password"] = $fdata;
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "reusers";
	$fdata["Label"] = GetFieldLabel("reusers","UserId");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "UserId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserId";

	
	
			
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
		
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareusers["UserId"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "reusers";
	$fdata["Label"] = GetFieldLabel("reusers","Username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareusers["Username"] = $fdata;
//	UserType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UserType";
	$fdata["GoodName"] = "UserType";
	$fdata["ownerTable"] = "reusers";
	$fdata["Label"] = GetFieldLabel("reusers","UserType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "UserType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserType";

	
	
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
			$edata["EditParams"].= " maxlength=50";

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareusers["UserType"] = $fdata;


$tables_data["reusers"]=&$tdatareusers;
$field_labels["reusers"] = &$fieldLabelsreusers;
$fieldToolTips["reusers"] = &$fieldToolTipsreusers;
$placeHolders["reusers"] = &$placeHoldersreusers;
$page_titles["reusers"] = &$pageTitlesreusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reusers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["reusers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reusers()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "Password,  UserId,  Username,  UserType";
$proto0["m_strFrom"] = "FROM reusers";
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
	"m_strName" => "Password",
	"m_strTable" => "reusers",
	"m_srcTableName" => "reusers"
));

$proto6["m_sql"] = "Password";
$proto6["m_srcTableName"] = "reusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "reusers",
	"m_srcTableName" => "reusers"
));

$proto8["m_sql"] = "UserId";
$proto8["m_srcTableName"] = "reusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "reusers",
	"m_srcTableName" => "reusers"
));

$proto10["m_sql"] = "Username";
$proto10["m_srcTableName"] = "reusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UserType",
	"m_strTable" => "reusers",
	"m_srcTableName" => "reusers"
));

$proto12["m_sql"] = "UserType";
$proto12["m_srcTableName"] = "reusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "reusers";
$proto15["m_srcTableName"] = "reusers";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Password";
$proto15["m_columns"][] = "UserId";
$proto15["m_columns"][] = "Username";
$proto15["m_columns"][] = "UserType";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "reusers";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "reusers";
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
$proto0["m_srcTableName"]="reusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reusers = createSqlQuery_reusers();


	
						;

				

$tdatareusers[".sqlquery"] = $queryData_reusers;

$tableEvents["reusers"] = new eventsBase;
$tdatareusers[".hasEvents"] = false;

?>
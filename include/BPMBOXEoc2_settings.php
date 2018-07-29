<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBPMBOXEoc2 = array();
	$tdataBPMBOXEoc2[".truncateText"] = true;
	$tdataBPMBOXEoc2[".NumberOfChars"] = 20;
	$tdataBPMBOXEoc2[".ShortName"] = "BPMBOXEoc2";
	$tdataBPMBOXEoc2[".OwnerID"] = "";
	$tdataBPMBOXEoc2[".OriginalTable"] = "BPMBOXEoc2";

//	field labels
$fieldLabelsBPMBOXEoc2 = array();
$fieldToolTipsBPMBOXEoc2 = array();
$pageTitlesBPMBOXEoc2 = array();
$placeHoldersBPMBOXEoc2 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsBPMBOXEoc2["Japanese"] = array();
	$fieldToolTipsBPMBOXEoc2["Japanese"] = array();
	$placeHoldersBPMBOXEoc2["Japanese"] = array();
	$pageTitlesBPMBOXEoc2["Japanese"] = array();
	$fieldLabelsBPMBOXEoc2["Japanese"]["ID"] = "ID";
	$fieldToolTipsBPMBOXEoc2["Japanese"]["ID"] = "";
	$placeHoldersBPMBOXEoc2["Japanese"]["ID"] = "";
	$fieldLabelsBPMBOXEoc2["Japanese"]["SEQ"] = "SEQ";
	$fieldToolTipsBPMBOXEoc2["Japanese"]["SEQ"] = "";
	$placeHoldersBPMBOXEoc2["Japanese"]["SEQ"] = "";
	if (count($fieldToolTipsBPMBOXEoc2["Japanese"]))
		$tdataBPMBOXEoc2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBPMBOXEoc2["English"] = array();
	$fieldToolTipsBPMBOXEoc2["English"] = array();
	$placeHoldersBPMBOXEoc2["English"] = array();
	$pageTitlesBPMBOXEoc2["English"] = array();
	$fieldLabelsBPMBOXEoc2["English"]["ID"] = "ID";
	$fieldToolTipsBPMBOXEoc2["English"]["ID"] = "";
	$placeHoldersBPMBOXEoc2["English"]["ID"] = "";
	$fieldLabelsBPMBOXEoc2["English"]["SEQ"] = "SEQ";
	$fieldToolTipsBPMBOXEoc2["English"]["SEQ"] = "";
	$placeHoldersBPMBOXEoc2["English"]["SEQ"] = "";
	if (count($fieldToolTipsBPMBOXEoc2["English"]))
		$tdataBPMBOXEoc2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBPMBOXEoc2[""] = array();
	$fieldToolTipsBPMBOXEoc2[""] = array();
	$placeHoldersBPMBOXEoc2[""] = array();
	$pageTitlesBPMBOXEoc2[""] = array();
	if (count($fieldToolTipsBPMBOXEoc2[""]))
		$tdataBPMBOXEoc2[".isUseToolTips"] = true;
}


	$tdataBPMBOXEoc2[".NCSearch"] = true;



$tdataBPMBOXEoc2[".shortTableName"] = "BPMBOXEoc2";
$tdataBPMBOXEoc2[".nSecOptions"] = 0;
$tdataBPMBOXEoc2[".recsPerRowPrint"] = 1;
$tdataBPMBOXEoc2[".mainTableOwnerID"] = "";
$tdataBPMBOXEoc2[".moveNext"] = 0;
$tdataBPMBOXEoc2[".entityType"] = 0;

$tdataBPMBOXEoc2[".strOriginalTableName"] = "BPMBOXEoc2";

	



$tdataBPMBOXEoc2[".showAddInPopup"] = false;

$tdataBPMBOXEoc2[".showEditInPopup"] = false;

$tdataBPMBOXEoc2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBPMBOXEoc2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBPMBOXEoc2[".fieldsForRegister"] = array();
	
$tdataBPMBOXEoc2[".listAjax"] = false;

	$tdataBPMBOXEoc2[".audit"] = false;

	$tdataBPMBOXEoc2[".locking"] = false;

$tdataBPMBOXEoc2[".edit"] = true;
$tdataBPMBOXEoc2[".afterEditAction"] = 1;
$tdataBPMBOXEoc2[".closePopupAfterEdit"] = 1;
$tdataBPMBOXEoc2[".afterEditActionDetTable"] = "";

$tdataBPMBOXEoc2[".add"] = true;
$tdataBPMBOXEoc2[".afterAddAction"] = 1;
$tdataBPMBOXEoc2[".closePopupAfterAdd"] = 1;
$tdataBPMBOXEoc2[".afterAddActionDetTable"] = "";

$tdataBPMBOXEoc2[".list"] = true;



$tdataBPMBOXEoc2[".reorderRecordsByHeader"] = true;



$tdataBPMBOXEoc2[".view"] = true;

$tdataBPMBOXEoc2[".import"] = true;

$tdataBPMBOXEoc2[".exportTo"] = true;

$tdataBPMBOXEoc2[".printFriendly"] = true;

$tdataBPMBOXEoc2[".delete"] = true;

$tdataBPMBOXEoc2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBPMBOXEoc2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBPMBOXEoc2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBPMBOXEoc2[".searchSaving"] = false;
//

$tdataBPMBOXEoc2[".showSearchPanel"] = true;
		$tdataBPMBOXEoc2[".flexibleSearch"] = true;

$tdataBPMBOXEoc2[".isUseAjaxSuggest"] = true;

$tdataBPMBOXEoc2[".rowHighlite"] = true;



				

$tdataBPMBOXEoc2[".ajaxCodeSnippetAdded"] = false;

$tdataBPMBOXEoc2[".buttonsAdded"] = false;

$tdataBPMBOXEoc2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBPMBOXEoc2[".isUseTimeForSearch"] = false;





$tdataBPMBOXEoc2[".allSearchFields"] = array();
$tdataBPMBOXEoc2[".filterFields"] = array();
$tdataBPMBOXEoc2[".requiredSearchFields"] = array();

$tdataBPMBOXEoc2[".allSearchFields"][] = "ID";
	$tdataBPMBOXEoc2[".allSearchFields"][] = "SEQ";
	

$tdataBPMBOXEoc2[".googleLikeFields"] = array();
$tdataBPMBOXEoc2[".googleLikeFields"][] = "ID";
$tdataBPMBOXEoc2[".googleLikeFields"][] = "SEQ";


$tdataBPMBOXEoc2[".advSearchFields"] = array();
$tdataBPMBOXEoc2[".advSearchFields"][] = "ID";
$tdataBPMBOXEoc2[".advSearchFields"][] = "SEQ";

$tdataBPMBOXEoc2[".tableType"] = "list";

$tdataBPMBOXEoc2[".printerPageOrientation"] = 0;
$tdataBPMBOXEoc2[".nPrinterPageScale"] = 100;

$tdataBPMBOXEoc2[".nPrinterSplitRecords"] = 40;

$tdataBPMBOXEoc2[".nPrinterPDFSplitRecords"] = 40;



$tdataBPMBOXEoc2[".geocodingEnabled"] = false;





$tdataBPMBOXEoc2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataBPMBOXEoc2[".pageSize"] = 20;

$tdataBPMBOXEoc2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBPMBOXEoc2[".strOrderBy"] = $tstrOrderBy;

$tdataBPMBOXEoc2[".orderindexes"] = array();

$tdataBPMBOXEoc2[".sqlHead"] = "SELECT ID,  SEQ";
$tdataBPMBOXEoc2[".sqlFrom"] = "FROM BPMBOXEoc2";
$tdataBPMBOXEoc2[".sqlWhereExpr"] = "";
$tdataBPMBOXEoc2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBPMBOXEoc2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBPMBOXEoc2[".arrGroupsPerPage"] = $arrGPP;

$tdataBPMBOXEoc2[".highlightSearchResults"] = true;

$tableKeysBPMBOXEoc2 = array();
$tableKeysBPMBOXEoc2[] = "ID";
$tdataBPMBOXEoc2[".Keys"] = $tableKeysBPMBOXEoc2;

$tdataBPMBOXEoc2[".listFields"] = array();
$tdataBPMBOXEoc2[".listFields"][] = "ID";
$tdataBPMBOXEoc2[".listFields"][] = "SEQ";

$tdataBPMBOXEoc2[".hideMobileList"] = array();


$tdataBPMBOXEoc2[".viewFields"] = array();
$tdataBPMBOXEoc2[".viewFields"][] = "ID";
$tdataBPMBOXEoc2[".viewFields"][] = "SEQ";

$tdataBPMBOXEoc2[".addFields"] = array();
$tdataBPMBOXEoc2[".addFields"][] = "SEQ";

$tdataBPMBOXEoc2[".masterListFields"] = array();
$tdataBPMBOXEoc2[".masterListFields"][] = "ID";
$tdataBPMBOXEoc2[".masterListFields"][] = "SEQ";

$tdataBPMBOXEoc2[".inlineAddFields"] = array();

$tdataBPMBOXEoc2[".editFields"] = array();
$tdataBPMBOXEoc2[".editFields"][] = "SEQ";

$tdataBPMBOXEoc2[".inlineEditFields"] = array();

$tdataBPMBOXEoc2[".updateSelectedFields"] = array();
$tdataBPMBOXEoc2[".updateSelectedFields"][] = "SEQ";


$tdataBPMBOXEoc2[".exportFields"] = array();
$tdataBPMBOXEoc2[".exportFields"][] = "ID";
$tdataBPMBOXEoc2[".exportFields"][] = "SEQ";

$tdataBPMBOXEoc2[".importFields"] = array();
$tdataBPMBOXEoc2[".importFields"][] = "ID";
$tdataBPMBOXEoc2[".importFields"][] = "SEQ";

$tdataBPMBOXEoc2[".printFields"] = array();
$tdataBPMBOXEoc2[".printFields"][] = "ID";
$tdataBPMBOXEoc2[".printFields"][] = "SEQ";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "BPMBOXEoc2";
	$fdata["Label"] = GetFieldLabel("BPMBOXEoc2","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdataBPMBOXEoc2["ID"] = $fdata;
//	SEQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SEQ";
	$fdata["GoodName"] = "SEQ";
	$fdata["ownerTable"] = "BPMBOXEoc2";
	$fdata["Label"] = GetFieldLabel("BPMBOXEoc2","SEQ");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SEQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEQ";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataBPMBOXEoc2["SEQ"] = $fdata;


$tables_data["BPMBOXEoc2"]=&$tdataBPMBOXEoc2;
$field_labels["BPMBOXEoc2"] = &$fieldLabelsBPMBOXEoc2;
$fieldToolTips["BPMBOXEoc2"] = &$fieldToolTipsBPMBOXEoc2;
$placeHolders["BPMBOXEoc2"] = &$placeHoldersBPMBOXEoc2;
$page_titles["BPMBOXEoc2"] = &$pageTitlesBPMBOXEoc2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BPMBOXEoc2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BPMBOXEoc2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BPMBOXEoc2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  SEQ";
$proto0["m_strFrom"] = "FROM BPMBOXEoc2";
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
	"m_strName" => "ID",
	"m_strTable" => "BPMBOXEoc2",
	"m_srcTableName" => "BPMBOXEoc2"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "BPMBOXEoc2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SEQ",
	"m_strTable" => "BPMBOXEoc2",
	"m_srcTableName" => "BPMBOXEoc2"
));

$proto8["m_sql"] = "SEQ";
$proto8["m_srcTableName"] = "BPMBOXEoc2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "BPMBOXEoc2";
$proto11["m_srcTableName"] = "BPMBOXEoc2";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "SEQ";
$proto11["m_columns"][] = "NAME";
$proto11["m_columns"][] = "SERVICE_REGISTRATION_SCREEN_CREATION";
$proto11["m_columns"][] = "REGISTRANT_334343443";
$proto11["m_columns"][] = "PURCHASER";
$proto11["m_columns"][] = "NAME_PSEUDONYM";
$proto11["m_columns"][] = "JAPAN_TIME";
$proto11["m_columns"][] = "BIRTHDAY_YEAR";
$proto11["m_columns"][] = "BIRTH_SUN_MOON";
$proto11["m_columns"][] = "BIRTH_NICHINICHI";
$proto11["m_columns"][] = "BIRTHDAY";
$proto11["m_columns"][] = "AGE";
$proto11["m_columns"][] = "POSTAL_CODE";
$proto11["m_columns"][] = "POSTAL_CODE_1";
$proto11["m_columns"][] = "ZIP_2";
$proto11["m_columns"][] = "PREFECTURES";
$proto11["m_columns"][] = "CITY";
$proto11["m_columns"][] = "PHONE";
$proto11["m_columns"][] = "MOBILE_PHONE";
$proto11["m_columns"][] = "E_MAIL_ADDRESS_PC";
$proto11["m_columns"][] = "E_MAIL_ADDRESS_MOBILE";
$proto11["m_columns"][] = "ADDRESS_CODE";
$proto11["m_columns"][] = "BANK_NAME";
$proto11["m_columns"][] = "BANK_NAME_3";
$proto11["m_columns"][] = "BANK_NAME_4";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "BPMBOXEoc2";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "BPMBOXEoc2";
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
$proto0["m_srcTableName"]="BPMBOXEoc2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BPMBOXEoc2 = createSqlQuery_BPMBOXEoc2();


	
						;

		

$tdataBPMBOXEoc2[".sqlquery"] = $queryData_BPMBOXEoc2;

$tableEvents["BPMBOXEoc2"] = new eventsBase;
$tdataBPMBOXEoc2[".hasEvents"] = false;

?>
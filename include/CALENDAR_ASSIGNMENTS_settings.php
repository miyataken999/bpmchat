<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCALENDAR_ASSIGNMENTS = array();
	$tdataCALENDAR_ASSIGNMENTS[".truncateText"] = true;
	$tdataCALENDAR_ASSIGNMENTS[".NumberOfChars"] = 80;
	$tdataCALENDAR_ASSIGNMENTS[".ShortName"] = "CALENDAR_ASSIGNMENTS";
	$tdataCALENDAR_ASSIGNMENTS[".OwnerID"] = "";
	$tdataCALENDAR_ASSIGNMENTS[".OriginalTable"] = "CALENDAR_ASSIGNMENTS";

//	field labels
$fieldLabelsCALENDAR_ASSIGNMENTS = array();
$fieldToolTipsCALENDAR_ASSIGNMENTS = array();
$pageTitlesCALENDAR_ASSIGNMENTS = array();
$placeHoldersCALENDAR_ASSIGNMENTS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCALENDAR_ASSIGNMENTS["Japanese"] = array();
	$fieldToolTipsCALENDAR_ASSIGNMENTS["Japanese"] = array();
	$placeHoldersCALENDAR_ASSIGNMENTS["Japanese"] = array();
	$pageTitlesCALENDAR_ASSIGNMENTS["Japanese"] = array();
	$fieldLabelsCALENDAR_ASSIGNMENTS["Japanese"]["OBJECT_UID"] = "OBJECT UID";
	$fieldToolTipsCALENDAR_ASSIGNMENTS["Japanese"]["OBJECT_UID"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS["Japanese"]["OBJECT_UID"] = "";
	$fieldLabelsCALENDAR_ASSIGNMENTS["Japanese"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_ASSIGNMENTS["Japanese"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS["Japanese"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_ASSIGNMENTS["Japanese"]["OBJECT_TYPE"] = "OBJECT TYPE";
	$fieldToolTipsCALENDAR_ASSIGNMENTS["Japanese"]["OBJECT_TYPE"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS["Japanese"]["OBJECT_TYPE"] = "";
	if (count($fieldToolTipsCALENDAR_ASSIGNMENTS["Japanese"]))
		$tdataCALENDAR_ASSIGNMENTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCALENDAR_ASSIGNMENTS["English"] = array();
	$fieldToolTipsCALENDAR_ASSIGNMENTS["English"] = array();
	$placeHoldersCALENDAR_ASSIGNMENTS["English"] = array();
	$pageTitlesCALENDAR_ASSIGNMENTS["English"] = array();
	$fieldLabelsCALENDAR_ASSIGNMENTS["English"]["OBJECT_UID"] = "OBJECT UID";
	$fieldToolTipsCALENDAR_ASSIGNMENTS["English"]["OBJECT_UID"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS["English"]["OBJECT_UID"] = "";
	$fieldLabelsCALENDAR_ASSIGNMENTS["English"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_ASSIGNMENTS["English"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS["English"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_ASSIGNMENTS["English"]["OBJECT_TYPE"] = "OBJECT TYPE";
	$fieldToolTipsCALENDAR_ASSIGNMENTS["English"]["OBJECT_TYPE"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS["English"]["OBJECT_TYPE"] = "";
	if (count($fieldToolTipsCALENDAR_ASSIGNMENTS["English"]))
		$tdataCALENDAR_ASSIGNMENTS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCALENDAR_ASSIGNMENTS[""] = array();
	$fieldToolTipsCALENDAR_ASSIGNMENTS[""] = array();
	$placeHoldersCALENDAR_ASSIGNMENTS[""] = array();
	$pageTitlesCALENDAR_ASSIGNMENTS[""] = array();
	$fieldLabelsCALENDAR_ASSIGNMENTS[""]["OBJECT_UID"] = "OBJECT UID";
	$fieldToolTipsCALENDAR_ASSIGNMENTS[""]["OBJECT_UID"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS[""]["OBJECT_UID"] = "";
	$fieldLabelsCALENDAR_ASSIGNMENTS[""]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_ASSIGNMENTS[""]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS[""]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_ASSIGNMENTS[""]["OBJECT_TYPE"] = "OBJECT TYPE";
	$fieldToolTipsCALENDAR_ASSIGNMENTS[""]["OBJECT_TYPE"] = "";
	$placeHoldersCALENDAR_ASSIGNMENTS[""]["OBJECT_TYPE"] = "";
	if (count($fieldToolTipsCALENDAR_ASSIGNMENTS[""]))
		$tdataCALENDAR_ASSIGNMENTS[".isUseToolTips"] = true;
}


	$tdataCALENDAR_ASSIGNMENTS[".NCSearch"] = true;



$tdataCALENDAR_ASSIGNMENTS[".shortTableName"] = "CALENDAR_ASSIGNMENTS";
$tdataCALENDAR_ASSIGNMENTS[".nSecOptions"] = 0;
$tdataCALENDAR_ASSIGNMENTS[".recsPerRowPrint"] = 1;
$tdataCALENDAR_ASSIGNMENTS[".mainTableOwnerID"] = "";
$tdataCALENDAR_ASSIGNMENTS[".moveNext"] = 1;
$tdataCALENDAR_ASSIGNMENTS[".entityType"] = 0;

$tdataCALENDAR_ASSIGNMENTS[".strOriginalTableName"] = "CALENDAR_ASSIGNMENTS";

	



$tdataCALENDAR_ASSIGNMENTS[".showAddInPopup"] = false;

$tdataCALENDAR_ASSIGNMENTS[".showEditInPopup"] = false;

$tdataCALENDAR_ASSIGNMENTS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCALENDAR_ASSIGNMENTS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCALENDAR_ASSIGNMENTS[".fieldsForRegister"] = array();
	
$tdataCALENDAR_ASSIGNMENTS[".listAjax"] = false;

	$tdataCALENDAR_ASSIGNMENTS[".audit"] = false;

	$tdataCALENDAR_ASSIGNMENTS[".locking"] = false;

$tdataCALENDAR_ASSIGNMENTS[".edit"] = true;
$tdataCALENDAR_ASSIGNMENTS[".afterEditAction"] = 1;
$tdataCALENDAR_ASSIGNMENTS[".closePopupAfterEdit"] = 1;
$tdataCALENDAR_ASSIGNMENTS[".afterEditActionDetTable"] = "";

$tdataCALENDAR_ASSIGNMENTS[".add"] = true;
$tdataCALENDAR_ASSIGNMENTS[".afterAddAction"] = 1;
$tdataCALENDAR_ASSIGNMENTS[".closePopupAfterAdd"] = 1;
$tdataCALENDAR_ASSIGNMENTS[".afterAddActionDetTable"] = "";

$tdataCALENDAR_ASSIGNMENTS[".list"] = true;



$tdataCALENDAR_ASSIGNMENTS[".reorderRecordsByHeader"] = true;



$tdataCALENDAR_ASSIGNMENTS[".view"] = true;

$tdataCALENDAR_ASSIGNMENTS[".import"] = true;

$tdataCALENDAR_ASSIGNMENTS[".exportTo"] = true;

$tdataCALENDAR_ASSIGNMENTS[".printFriendly"] = true;

$tdataCALENDAR_ASSIGNMENTS[".delete"] = true;

$tdataCALENDAR_ASSIGNMENTS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCALENDAR_ASSIGNMENTS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCALENDAR_ASSIGNMENTS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCALENDAR_ASSIGNMENTS[".searchSaving"] = false;
//

$tdataCALENDAR_ASSIGNMENTS[".showSearchPanel"] = true;
		$tdataCALENDAR_ASSIGNMENTS[".flexibleSearch"] = true;

$tdataCALENDAR_ASSIGNMENTS[".isUseAjaxSuggest"] = true;

$tdataCALENDAR_ASSIGNMENTS[".rowHighlite"] = true;



				

$tdataCALENDAR_ASSIGNMENTS[".ajaxCodeSnippetAdded"] = false;

$tdataCALENDAR_ASSIGNMENTS[".buttonsAdded"] = false;

$tdataCALENDAR_ASSIGNMENTS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCALENDAR_ASSIGNMENTS[".isUseTimeForSearch"] = false;





$tdataCALENDAR_ASSIGNMENTS[".allSearchFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".filterFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".requiredSearchFields"] = array();

$tdataCALENDAR_ASSIGNMENTS[".allSearchFields"][] = "OBJECT_UID";
	$tdataCALENDAR_ASSIGNMENTS[".allSearchFields"][] = "CALENDAR_UID";
	$tdataCALENDAR_ASSIGNMENTS[".allSearchFields"][] = "OBJECT_TYPE";
	

$tdataCALENDAR_ASSIGNMENTS[".googleLikeFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".googleLikeFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".googleLikeFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".googleLikeFields"][] = "OBJECT_TYPE";


$tdataCALENDAR_ASSIGNMENTS[".advSearchFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".advSearchFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".advSearchFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".advSearchFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".tableType"] = "list";

$tdataCALENDAR_ASSIGNMENTS[".printerPageOrientation"] = 0;
$tdataCALENDAR_ASSIGNMENTS[".nPrinterPageScale"] = 100;

$tdataCALENDAR_ASSIGNMENTS[".nPrinterSplitRecords"] = 40;

$tdataCALENDAR_ASSIGNMENTS[".nPrinterPDFSplitRecords"] = 40;



$tdataCALENDAR_ASSIGNMENTS[".geocodingEnabled"] = false;





$tdataCALENDAR_ASSIGNMENTS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataCALENDAR_ASSIGNMENTS[".pageSize"] = 20;

$tdataCALENDAR_ASSIGNMENTS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCALENDAR_ASSIGNMENTS[".strOrderBy"] = $tstrOrderBy;

$tdataCALENDAR_ASSIGNMENTS[".orderindexes"] = array();

$tdataCALENDAR_ASSIGNMENTS[".sqlHead"] = "SELECT OBJECT_UID,  	CALENDAR_UID,  	OBJECT_TYPE";
$tdataCALENDAR_ASSIGNMENTS[".sqlFrom"] = "FROM CALENDAR_ASSIGNMENTS";
$tdataCALENDAR_ASSIGNMENTS[".sqlWhereExpr"] = "";
$tdataCALENDAR_ASSIGNMENTS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCALENDAR_ASSIGNMENTS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCALENDAR_ASSIGNMENTS[".arrGroupsPerPage"] = $arrGPP;

$tdataCALENDAR_ASSIGNMENTS[".highlightSearchResults"] = true;

$tableKeysCALENDAR_ASSIGNMENTS = array();
$tableKeysCALENDAR_ASSIGNMENTS[] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".Keys"] = $tableKeysCALENDAR_ASSIGNMENTS;

$tdataCALENDAR_ASSIGNMENTS[".listFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".listFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".listFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".listFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".hideMobileList"] = array();


$tdataCALENDAR_ASSIGNMENTS[".viewFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".viewFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".viewFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".viewFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".addFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".addFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".addFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".addFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".masterListFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".masterListFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".masterListFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".masterListFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".inlineAddFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".inlineAddFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".inlineAddFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".inlineAddFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".editFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".editFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".editFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".editFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".inlineEditFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".inlineEditFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".inlineEditFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".inlineEditFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".updateSelectedFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".updateSelectedFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".updateSelectedFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".updateSelectedFields"][] = "OBJECT_TYPE";


$tdataCALENDAR_ASSIGNMENTS[".exportFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".exportFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".exportFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".exportFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".importFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".importFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".importFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".importFields"][] = "OBJECT_TYPE";

$tdataCALENDAR_ASSIGNMENTS[".printFields"] = array();
$tdataCALENDAR_ASSIGNMENTS[".printFields"][] = "OBJECT_UID";
$tdataCALENDAR_ASSIGNMENTS[".printFields"][] = "CALENDAR_UID";
$tdataCALENDAR_ASSIGNMENTS[".printFields"][] = "OBJECT_TYPE";

//	OBJECT_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OBJECT_UID";
	$fdata["GoodName"] = "OBJECT_UID";
	$fdata["ownerTable"] = "CALENDAR_ASSIGNMENTS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_ASSIGNMENTS","OBJECT_UID");
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

		$fdata["strField"] = "OBJECT_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJECT_UID";

	
	
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




	$tdataCALENDAR_ASSIGNMENTS["OBJECT_UID"] = $fdata;
//	CALENDAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CALENDAR_UID";
	$fdata["GoodName"] = "CALENDAR_UID";
	$fdata["ownerTable"] = "CALENDAR_ASSIGNMENTS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_ASSIGNMENTS","CALENDAR_UID");
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

		$fdata["strField"] = "CALENDAR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_UID";

	
	
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




	$tdataCALENDAR_ASSIGNMENTS["CALENDAR_UID"] = $fdata;
//	OBJECT_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OBJECT_TYPE";
	$fdata["GoodName"] = "OBJECT_TYPE";
	$fdata["ownerTable"] = "CALENDAR_ASSIGNMENTS";
	$fdata["Label"] = GetFieldLabel("CALENDAR_ASSIGNMENTS","OBJECT_TYPE");
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

		$fdata["strField"] = "OBJECT_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJECT_TYPE";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdataCALENDAR_ASSIGNMENTS["OBJECT_TYPE"] = $fdata;


$tables_data["CALENDAR_ASSIGNMENTS"]=&$tdataCALENDAR_ASSIGNMENTS;
$field_labels["CALENDAR_ASSIGNMENTS"] = &$fieldLabelsCALENDAR_ASSIGNMENTS;
$fieldToolTips["CALENDAR_ASSIGNMENTS"] = &$fieldToolTipsCALENDAR_ASSIGNMENTS;
$placeHolders["CALENDAR_ASSIGNMENTS"] = &$placeHoldersCALENDAR_ASSIGNMENTS;
$page_titles["CALENDAR_ASSIGNMENTS"] = &$pageTitlesCALENDAR_ASSIGNMENTS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CALENDAR_ASSIGNMENTS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CALENDAR_ASSIGNMENTS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CALENDAR_ASSIGNMENTS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OBJECT_UID,  	CALENDAR_UID,  	OBJECT_TYPE";
$proto0["m_strFrom"] = "FROM CALENDAR_ASSIGNMENTS";
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
	"m_strName" => "OBJECT_UID",
	"m_strTable" => "CALENDAR_ASSIGNMENTS",
	"m_srcTableName" => "CALENDAR_ASSIGNMENTS"
));

$proto6["m_sql"] = "OBJECT_UID";
$proto6["m_srcTableName"] = "CALENDAR_ASSIGNMENTS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_UID",
	"m_strTable" => "CALENDAR_ASSIGNMENTS",
	"m_srcTableName" => "CALENDAR_ASSIGNMENTS"
));

$proto8["m_sql"] = "CALENDAR_UID";
$proto8["m_srcTableName"] = "CALENDAR_ASSIGNMENTS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJECT_TYPE",
	"m_strTable" => "CALENDAR_ASSIGNMENTS",
	"m_srcTableName" => "CALENDAR_ASSIGNMENTS"
));

$proto10["m_sql"] = "OBJECT_TYPE";
$proto10["m_srcTableName"] = "CALENDAR_ASSIGNMENTS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "CALENDAR_ASSIGNMENTS";
$proto13["m_srcTableName"] = "CALENDAR_ASSIGNMENTS";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "OBJECT_UID";
$proto13["m_columns"][] = "CALENDAR_UID";
$proto13["m_columns"][] = "OBJECT_TYPE";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "CALENDAR_ASSIGNMENTS";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "CALENDAR_ASSIGNMENTS";
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
$proto0["m_srcTableName"]="CALENDAR_ASSIGNMENTS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CALENDAR_ASSIGNMENTS = createSqlQuery_CALENDAR_ASSIGNMENTS();


	
						;

			

$tdataCALENDAR_ASSIGNMENTS[".sqlquery"] = $queryData_CALENDAR_ASSIGNMENTS;

$tableEvents["CALENDAR_ASSIGNMENTS"] = new eventsBase;
$tdataCALENDAR_ASSIGNMENTS[".hasEvents"] = false;

?>
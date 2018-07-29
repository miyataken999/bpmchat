<?php
require_once(getabspath("classes/cipherer.php"));




$tdataHOLIDAY = array();
	$tdataHOLIDAY[".truncateText"] = true;
	$tdataHOLIDAY[".NumberOfChars"] = 80;
	$tdataHOLIDAY[".ShortName"] = "HOLIDAY";
	$tdataHOLIDAY[".OwnerID"] = "";
	$tdataHOLIDAY[".OriginalTable"] = "HOLIDAY";

//	field labels
$fieldLabelsHOLIDAY = array();
$fieldToolTipsHOLIDAY = array();
$pageTitlesHOLIDAY = array();
$placeHoldersHOLIDAY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsHOLIDAY["Japanese"] = array();
	$fieldToolTipsHOLIDAY["Japanese"] = array();
	$placeHoldersHOLIDAY["Japanese"] = array();
	$pageTitlesHOLIDAY["Japanese"] = array();
	$fieldLabelsHOLIDAY["Japanese"]["HLD_UID"] = "HLD UID";
	$fieldToolTipsHOLIDAY["Japanese"]["HLD_UID"] = "";
	$placeHoldersHOLIDAY["Japanese"]["HLD_UID"] = "";
	$fieldLabelsHOLIDAY["Japanese"]["HLD_DATE"] = "HLD DATE";
	$fieldToolTipsHOLIDAY["Japanese"]["HLD_DATE"] = "";
	$placeHoldersHOLIDAY["Japanese"]["HLD_DATE"] = "";
	$fieldLabelsHOLIDAY["Japanese"]["HLD_DESCRIPTION"] = "HLD DESCRIPTION";
	$fieldToolTipsHOLIDAY["Japanese"]["HLD_DESCRIPTION"] = "";
	$placeHoldersHOLIDAY["Japanese"]["HLD_DESCRIPTION"] = "";
	if (count($fieldToolTipsHOLIDAY["Japanese"]))
		$tdataHOLIDAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsHOLIDAY["English"] = array();
	$fieldToolTipsHOLIDAY["English"] = array();
	$placeHoldersHOLIDAY["English"] = array();
	$pageTitlesHOLIDAY["English"] = array();
	$fieldLabelsHOLIDAY["English"]["HLD_UID"] = "HLD UID";
	$fieldToolTipsHOLIDAY["English"]["HLD_UID"] = "";
	$placeHoldersHOLIDAY["English"]["HLD_UID"] = "";
	$fieldLabelsHOLIDAY["English"]["HLD_DATE"] = "HLD DATE";
	$fieldToolTipsHOLIDAY["English"]["HLD_DATE"] = "";
	$placeHoldersHOLIDAY["English"]["HLD_DATE"] = "";
	$fieldLabelsHOLIDAY["English"]["HLD_DESCRIPTION"] = "HLD DESCRIPTION";
	$fieldToolTipsHOLIDAY["English"]["HLD_DESCRIPTION"] = "";
	$placeHoldersHOLIDAY["English"]["HLD_DESCRIPTION"] = "";
	if (count($fieldToolTipsHOLIDAY["English"]))
		$tdataHOLIDAY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsHOLIDAY[""] = array();
	$fieldToolTipsHOLIDAY[""] = array();
	$placeHoldersHOLIDAY[""] = array();
	$pageTitlesHOLIDAY[""] = array();
	$fieldLabelsHOLIDAY[""]["HLD_UID"] = "HLD UID";
	$fieldToolTipsHOLIDAY[""]["HLD_UID"] = "";
	$placeHoldersHOLIDAY[""]["HLD_UID"] = "";
	$fieldLabelsHOLIDAY[""]["HLD_DATE"] = "HLD DATE";
	$fieldToolTipsHOLIDAY[""]["HLD_DATE"] = "";
	$placeHoldersHOLIDAY[""]["HLD_DATE"] = "";
	$fieldLabelsHOLIDAY[""]["HLD_DESCRIPTION"] = "HLD DESCRIPTION";
	$fieldToolTipsHOLIDAY[""]["HLD_DESCRIPTION"] = "";
	$placeHoldersHOLIDAY[""]["HLD_DESCRIPTION"] = "";
	if (count($fieldToolTipsHOLIDAY[""]))
		$tdataHOLIDAY[".isUseToolTips"] = true;
}


	$tdataHOLIDAY[".NCSearch"] = true;



$tdataHOLIDAY[".shortTableName"] = "HOLIDAY";
$tdataHOLIDAY[".nSecOptions"] = 0;
$tdataHOLIDAY[".recsPerRowPrint"] = 1;
$tdataHOLIDAY[".mainTableOwnerID"] = "";
$tdataHOLIDAY[".moveNext"] = 1;
$tdataHOLIDAY[".entityType"] = 0;

$tdataHOLIDAY[".strOriginalTableName"] = "HOLIDAY";

	



$tdataHOLIDAY[".showAddInPopup"] = false;

$tdataHOLIDAY[".showEditInPopup"] = false;

$tdataHOLIDAY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataHOLIDAY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataHOLIDAY[".fieldsForRegister"] = array();
	
$tdataHOLIDAY[".listAjax"] = false;

	$tdataHOLIDAY[".audit"] = false;

	$tdataHOLIDAY[".locking"] = false;

$tdataHOLIDAY[".edit"] = true;
$tdataHOLIDAY[".afterEditAction"] = 1;
$tdataHOLIDAY[".closePopupAfterEdit"] = 1;
$tdataHOLIDAY[".afterEditActionDetTable"] = "";

$tdataHOLIDAY[".add"] = true;
$tdataHOLIDAY[".afterAddAction"] = 1;
$tdataHOLIDAY[".closePopupAfterAdd"] = 1;
$tdataHOLIDAY[".afterAddActionDetTable"] = "";

$tdataHOLIDAY[".list"] = true;



$tdataHOLIDAY[".reorderRecordsByHeader"] = true;



$tdataHOLIDAY[".view"] = true;

$tdataHOLIDAY[".import"] = true;

$tdataHOLIDAY[".exportTo"] = true;

$tdataHOLIDAY[".printFriendly"] = true;

$tdataHOLIDAY[".delete"] = true;

$tdataHOLIDAY[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataHOLIDAY[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataHOLIDAY[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataHOLIDAY[".searchSaving"] = false;
//

$tdataHOLIDAY[".showSearchPanel"] = true;
		$tdataHOLIDAY[".flexibleSearch"] = true;

$tdataHOLIDAY[".isUseAjaxSuggest"] = true;

$tdataHOLIDAY[".rowHighlite"] = true;



				

$tdataHOLIDAY[".ajaxCodeSnippetAdded"] = false;

$tdataHOLIDAY[".buttonsAdded"] = false;

$tdataHOLIDAY[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHOLIDAY[".isUseTimeForSearch"] = false;





$tdataHOLIDAY[".allSearchFields"] = array();
$tdataHOLIDAY[".filterFields"] = array();
$tdataHOLIDAY[".requiredSearchFields"] = array();

$tdataHOLIDAY[".allSearchFields"][] = "HLD_UID";
	$tdataHOLIDAY[".allSearchFields"][] = "HLD_DATE";
	$tdataHOLIDAY[".allSearchFields"][] = "HLD_DESCRIPTION";
	

$tdataHOLIDAY[".googleLikeFields"] = array();
$tdataHOLIDAY[".googleLikeFields"][] = "HLD_UID";
$tdataHOLIDAY[".googleLikeFields"][] = "HLD_DATE";
$tdataHOLIDAY[".googleLikeFields"][] = "HLD_DESCRIPTION";


$tdataHOLIDAY[".advSearchFields"] = array();
$tdataHOLIDAY[".advSearchFields"][] = "HLD_UID";
$tdataHOLIDAY[".advSearchFields"][] = "HLD_DATE";
$tdataHOLIDAY[".advSearchFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".tableType"] = "list";

$tdataHOLIDAY[".printerPageOrientation"] = 0;
$tdataHOLIDAY[".nPrinterPageScale"] = 100;

$tdataHOLIDAY[".nPrinterSplitRecords"] = 40;

$tdataHOLIDAY[".nPrinterPDFSplitRecords"] = 40;



$tdataHOLIDAY[".geocodingEnabled"] = false;





$tdataHOLIDAY[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataHOLIDAY[".pageSize"] = 20;

$tdataHOLIDAY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHOLIDAY[".strOrderBy"] = $tstrOrderBy;

$tdataHOLIDAY[".orderindexes"] = array();

$tdataHOLIDAY[".sqlHead"] = "SELECT HLD_UID,  	HLD_DATE,  	HLD_DESCRIPTION";
$tdataHOLIDAY[".sqlFrom"] = "FROM HOLIDAY";
$tdataHOLIDAY[".sqlWhereExpr"] = "";
$tdataHOLIDAY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHOLIDAY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHOLIDAY[".arrGroupsPerPage"] = $arrGPP;

$tdataHOLIDAY[".highlightSearchResults"] = true;

$tableKeysHOLIDAY = array();
$tableKeysHOLIDAY[] = "HLD_UID";
$tdataHOLIDAY[".Keys"] = $tableKeysHOLIDAY;

$tdataHOLIDAY[".listFields"] = array();
$tdataHOLIDAY[".listFields"][] = "HLD_UID";
$tdataHOLIDAY[".listFields"][] = "HLD_DATE";
$tdataHOLIDAY[".listFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".hideMobileList"] = array();


$tdataHOLIDAY[".viewFields"] = array();
$tdataHOLIDAY[".viewFields"][] = "HLD_UID";
$tdataHOLIDAY[".viewFields"][] = "HLD_DATE";
$tdataHOLIDAY[".viewFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".addFields"] = array();
$tdataHOLIDAY[".addFields"][] = "HLD_DATE";
$tdataHOLIDAY[".addFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".masterListFields"] = array();
$tdataHOLIDAY[".masterListFields"][] = "HLD_UID";
$tdataHOLIDAY[".masterListFields"][] = "HLD_DATE";
$tdataHOLIDAY[".masterListFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".inlineAddFields"] = array();
$tdataHOLIDAY[".inlineAddFields"][] = "HLD_DATE";
$tdataHOLIDAY[".inlineAddFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".editFields"] = array();
$tdataHOLIDAY[".editFields"][] = "HLD_DATE";
$tdataHOLIDAY[".editFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".inlineEditFields"] = array();
$tdataHOLIDAY[".inlineEditFields"][] = "HLD_DATE";
$tdataHOLIDAY[".inlineEditFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".updateSelectedFields"] = array();
$tdataHOLIDAY[".updateSelectedFields"][] = "HLD_DATE";
$tdataHOLIDAY[".updateSelectedFields"][] = "HLD_DESCRIPTION";


$tdataHOLIDAY[".exportFields"] = array();
$tdataHOLIDAY[".exportFields"][] = "HLD_UID";
$tdataHOLIDAY[".exportFields"][] = "HLD_DATE";
$tdataHOLIDAY[".exportFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".importFields"] = array();
$tdataHOLIDAY[".importFields"][] = "HLD_UID";
$tdataHOLIDAY[".importFields"][] = "HLD_DATE";
$tdataHOLIDAY[".importFields"][] = "HLD_DESCRIPTION";

$tdataHOLIDAY[".printFields"] = array();
$tdataHOLIDAY[".printFields"][] = "HLD_UID";
$tdataHOLIDAY[".printFields"][] = "HLD_DATE";
$tdataHOLIDAY[".printFields"][] = "HLD_DESCRIPTION";

//	HLD_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HLD_UID";
	$fdata["GoodName"] = "HLD_UID";
	$fdata["ownerTable"] = "HOLIDAY";
	$fdata["Label"] = GetFieldLabel("HOLIDAY","HLD_UID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HLD_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HLD_UID";

	
	
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




	$tdataHOLIDAY["HLD_UID"] = $fdata;
//	HLD_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "HLD_DATE";
	$fdata["GoodName"] = "HLD_DATE";
	$fdata["ownerTable"] = "HOLIDAY";
	$fdata["Label"] = GetFieldLabel("HOLIDAY","HLD_DATE");
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

		$fdata["strField"] = "HLD_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HLD_DATE";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataHOLIDAY["HLD_DATE"] = $fdata;
//	HLD_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "HLD_DESCRIPTION";
	$fdata["GoodName"] = "HLD_DESCRIPTION";
	$fdata["ownerTable"] = "HOLIDAY";
	$fdata["Label"] = GetFieldLabel("HOLIDAY","HLD_DESCRIPTION");
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

		$fdata["strField"] = "HLD_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HLD_DESCRIPTION";

	
	
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




	$tdataHOLIDAY["HLD_DESCRIPTION"] = $fdata;


$tables_data["HOLIDAY"]=&$tdataHOLIDAY;
$field_labels["HOLIDAY"] = &$fieldLabelsHOLIDAY;
$fieldToolTips["HOLIDAY"] = &$fieldToolTipsHOLIDAY;
$placeHolders["HOLIDAY"] = &$placeHoldersHOLIDAY;
$page_titles["HOLIDAY"] = &$pageTitlesHOLIDAY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["HOLIDAY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["HOLIDAY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_HOLIDAY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HLD_UID,  	HLD_DATE,  	HLD_DESCRIPTION";
$proto0["m_strFrom"] = "FROM HOLIDAY";
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
	"m_strName" => "HLD_UID",
	"m_strTable" => "HOLIDAY",
	"m_srcTableName" => "HOLIDAY"
));

$proto6["m_sql"] = "HLD_UID";
$proto6["m_srcTableName"] = "HOLIDAY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "HLD_DATE",
	"m_strTable" => "HOLIDAY",
	"m_srcTableName" => "HOLIDAY"
));

$proto8["m_sql"] = "HLD_DATE";
$proto8["m_srcTableName"] = "HOLIDAY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "HLD_DESCRIPTION",
	"m_strTable" => "HOLIDAY",
	"m_srcTableName" => "HOLIDAY"
));

$proto10["m_sql"] = "HLD_DESCRIPTION";
$proto10["m_srcTableName"] = "HOLIDAY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "HOLIDAY";
$proto13["m_srcTableName"] = "HOLIDAY";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HLD_UID";
$proto13["m_columns"][] = "HLD_DATE";
$proto13["m_columns"][] = "HLD_DESCRIPTION";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "HOLIDAY";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "HOLIDAY";
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
$proto0["m_srcTableName"]="HOLIDAY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_HOLIDAY = createSqlQuery_HOLIDAY();


	
						;

			

$tdataHOLIDAY[".sqlquery"] = $queryData_HOLIDAY;

$tableEvents["HOLIDAY"] = new eventsBase;
$tdataHOLIDAY[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_ROLES_PERMISSIONS = array();
	$tdataRBAC_ROLES_PERMISSIONS[".truncateText"] = true;
	$tdataRBAC_ROLES_PERMISSIONS[".NumberOfChars"] = 20;
	$tdataRBAC_ROLES_PERMISSIONS[".ShortName"] = "RBAC_ROLES_PERMISSIONS";
	$tdataRBAC_ROLES_PERMISSIONS[".OwnerID"] = "";
	$tdataRBAC_ROLES_PERMISSIONS[".OriginalTable"] = "RBAC_ROLES_PERMISSIONS";

//	field labels
$fieldLabelsRBAC_ROLES_PERMISSIONS = array();
$fieldToolTipsRBAC_ROLES_PERMISSIONS = array();
$pageTitlesRBAC_ROLES_PERMISSIONS = array();
$placeHoldersRBAC_ROLES_PERMISSIONS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_ROLES_PERMISSIONS["Japanese"] = array();
	$fieldToolTipsRBAC_ROLES_PERMISSIONS["Japanese"] = array();
	$placeHoldersRBAC_ROLES_PERMISSIONS["Japanese"] = array();
	$pageTitlesRBAC_ROLES_PERMISSIONS["Japanese"] = array();
	$fieldLabelsRBAC_ROLES_PERMISSIONS["Japanese"]["ROL_UID"] = "ROLのUID";
	$fieldToolTipsRBAC_ROLES_PERMISSIONS["Japanese"]["ROL_UID"] = "";
	$placeHoldersRBAC_ROLES_PERMISSIONS["Japanese"]["ROL_UID"] = "";
	$fieldLabelsRBAC_ROLES_PERMISSIONS["Japanese"]["PER_UID"] = "UIDあたり";
	$fieldToolTipsRBAC_ROLES_PERMISSIONS["Japanese"]["PER_UID"] = "";
	$placeHoldersRBAC_ROLES_PERMISSIONS["Japanese"]["PER_UID"] = "";
	if (count($fieldToolTipsRBAC_ROLES_PERMISSIONS["Japanese"]))
		$tdataRBAC_ROLES_PERMISSIONS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_ROLES_PERMISSIONS["English"] = array();
	$fieldToolTipsRBAC_ROLES_PERMISSIONS["English"] = array();
	$placeHoldersRBAC_ROLES_PERMISSIONS["English"] = array();
	$pageTitlesRBAC_ROLES_PERMISSIONS["English"] = array();
	$fieldLabelsRBAC_ROLES_PERMISSIONS["English"]["ROL_UID"] = "ROLのUID";
	$fieldToolTipsRBAC_ROLES_PERMISSIONS["English"]["ROL_UID"] = "";
	$placeHoldersRBAC_ROLES_PERMISSIONS["English"]["ROL_UID"] = "";
	$fieldLabelsRBAC_ROLES_PERMISSIONS["English"]["PER_UID"] = "UIDあたり";
	$fieldToolTipsRBAC_ROLES_PERMISSIONS["English"]["PER_UID"] = "";
	$placeHoldersRBAC_ROLES_PERMISSIONS["English"]["PER_UID"] = "";
	if (count($fieldToolTipsRBAC_ROLES_PERMISSIONS["English"]))
		$tdataRBAC_ROLES_PERMISSIONS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_ROLES_PERMISSIONS[""] = array();
	$fieldToolTipsRBAC_ROLES_PERMISSIONS[""] = array();
	$placeHoldersRBAC_ROLES_PERMISSIONS[""] = array();
	$pageTitlesRBAC_ROLES_PERMISSIONS[""] = array();
	if (count($fieldToolTipsRBAC_ROLES_PERMISSIONS[""]))
		$tdataRBAC_ROLES_PERMISSIONS[".isUseToolTips"] = true;
}


	$tdataRBAC_ROLES_PERMISSIONS[".NCSearch"] = true;



$tdataRBAC_ROLES_PERMISSIONS[".shortTableName"] = "RBAC_ROLES_PERMISSIONS";
$tdataRBAC_ROLES_PERMISSIONS[".nSecOptions"] = 0;
$tdataRBAC_ROLES_PERMISSIONS[".recsPerRowPrint"] = 1;
$tdataRBAC_ROLES_PERMISSIONS[".mainTableOwnerID"] = "";
$tdataRBAC_ROLES_PERMISSIONS[".moveNext"] = 0;
$tdataRBAC_ROLES_PERMISSIONS[".entityType"] = 0;

$tdataRBAC_ROLES_PERMISSIONS[".strOriginalTableName"] = "RBAC_ROLES_PERMISSIONS";

	



$tdataRBAC_ROLES_PERMISSIONS[".showAddInPopup"] = false;

$tdataRBAC_ROLES_PERMISSIONS[".showEditInPopup"] = false;

$tdataRBAC_ROLES_PERMISSIONS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_ROLES_PERMISSIONS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_ROLES_PERMISSIONS[".fieldsForRegister"] = array();
	
$tdataRBAC_ROLES_PERMISSIONS[".listAjax"] = false;

	$tdataRBAC_ROLES_PERMISSIONS[".audit"] = true;

	$tdataRBAC_ROLES_PERMISSIONS[".locking"] = false;

$tdataRBAC_ROLES_PERMISSIONS[".edit"] = true;
$tdataRBAC_ROLES_PERMISSIONS[".afterEditAction"] = 1;
$tdataRBAC_ROLES_PERMISSIONS[".closePopupAfterEdit"] = 1;
$tdataRBAC_ROLES_PERMISSIONS[".afterEditActionDetTable"] = "";

$tdataRBAC_ROLES_PERMISSIONS[".add"] = true;
$tdataRBAC_ROLES_PERMISSIONS[".afterAddAction"] = 1;
$tdataRBAC_ROLES_PERMISSIONS[".closePopupAfterAdd"] = 1;
$tdataRBAC_ROLES_PERMISSIONS[".afterAddActionDetTable"] = "";

$tdataRBAC_ROLES_PERMISSIONS[".list"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".inlineEdit"] = true;


$tdataRBAC_ROLES_PERMISSIONS[".reorderRecordsByHeader"] = true;
$tdataRBAC_ROLES_PERMISSIONS[".createSortByDropdown"] = true;
$tdataRBAC_ROLES_PERMISSIONS[".strSortControlSettingsJSON"] = "";



$tdataRBAC_ROLES_PERMISSIONS[".inlineAdd"] = true;
$tdataRBAC_ROLES_PERMISSIONS[".view"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".import"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".exportTo"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".printFriendly"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".delete"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_ROLES_PERMISSIONS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_ROLES_PERMISSIONS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_ROLES_PERMISSIONS[".searchSaving"] = false;
//

$tdataRBAC_ROLES_PERMISSIONS[".showSearchPanel"] = true;
		$tdataRBAC_ROLES_PERMISSIONS[".flexibleSearch"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".isUseAjaxSuggest"] = true;

$tdataRBAC_ROLES_PERMISSIONS[".rowHighlite"] = true;



																												

$tdataRBAC_ROLES_PERMISSIONS[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_ROLES_PERMISSIONS[".buttonsAdded"] = false;

$tdataRBAC_ROLES_PERMISSIONS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_ROLES_PERMISSIONS[".isUseTimeForSearch"] = false;



$tdataRBAC_ROLES_PERMISSIONS[".badgeColor"] = "00c2c5";


$tdataRBAC_ROLES_PERMISSIONS[".allSearchFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".filterFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".requiredSearchFields"] = array();

$tdataRBAC_ROLES_PERMISSIONS[".allSearchFields"][] = "ROL_UID";
	$tdataRBAC_ROLES_PERMISSIONS[".allSearchFields"][] = "PER_UID";
	

$tdataRBAC_ROLES_PERMISSIONS[".googleLikeFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".googleLikeFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".googleLikeFields"][] = "PER_UID";


$tdataRBAC_ROLES_PERMISSIONS[".advSearchFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".advSearchFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".advSearchFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".tableType"] = "list";

$tdataRBAC_ROLES_PERMISSIONS[".printerPageOrientation"] = 0;
$tdataRBAC_ROLES_PERMISSIONS[".nPrinterPageScale"] = 100;

$tdataRBAC_ROLES_PERMISSIONS[".nPrinterSplitRecords"] = 40;

$tdataRBAC_ROLES_PERMISSIONS[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_ROLES_PERMISSIONS[".geocodingEnabled"] = false;





$tdataRBAC_ROLES_PERMISSIONS[".listGridLayout"] = 3;


$tdataRBAC_ROLES_PERMISSIONS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_ROLES_PERMISSIONS[".pageSize"] = 20;

$tdataRBAC_ROLES_PERMISSIONS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_ROLES_PERMISSIONS[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_ROLES_PERMISSIONS[".orderindexes"] = array();

$tdataRBAC_ROLES_PERMISSIONS[".sqlHead"] = "SELECT ROL_UID,  	PER_UID";
$tdataRBAC_ROLES_PERMISSIONS[".sqlFrom"] = "FROM RBAC_ROLES_PERMISSIONS";
$tdataRBAC_ROLES_PERMISSIONS[".sqlWhereExpr"] = "";
$tdataRBAC_ROLES_PERMISSIONS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_ROLES_PERMISSIONS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_ROLES_PERMISSIONS[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_ROLES_PERMISSIONS[".highlightSearchResults"] = true;

$tableKeysRBAC_ROLES_PERMISSIONS = array();
$tableKeysRBAC_ROLES_PERMISSIONS[] = "ROL_UID";
$tableKeysRBAC_ROLES_PERMISSIONS[] = "PER_UID";
$tdataRBAC_ROLES_PERMISSIONS[".Keys"] = $tableKeysRBAC_ROLES_PERMISSIONS;

$tdataRBAC_ROLES_PERMISSIONS[".listFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".listFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".listFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".hideMobileList"] = array();


$tdataRBAC_ROLES_PERMISSIONS[".viewFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".viewFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".viewFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".addFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".addFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".addFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".masterListFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".masterListFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".masterListFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".inlineAddFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".inlineAddFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".inlineAddFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".editFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".editFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".editFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".inlineEditFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".inlineEditFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".inlineEditFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".updateSelectedFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".updateSelectedFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".updateSelectedFields"][] = "PER_UID";


$tdataRBAC_ROLES_PERMISSIONS[".exportFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".exportFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".exportFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".importFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".importFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".importFields"][] = "PER_UID";

$tdataRBAC_ROLES_PERMISSIONS[".printFields"] = array();
$tdataRBAC_ROLES_PERMISSIONS[".printFields"][] = "ROL_UID";
$tdataRBAC_ROLES_PERMISSIONS[".printFields"][] = "PER_UID";

//	ROL_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ROL_UID";
	$fdata["GoodName"] = "ROL_UID";
	$fdata["ownerTable"] = "RBAC_ROLES_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES_PERMISSIONS","ROL_UID");
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

		$fdata["strField"] = "ROL_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL_UID";

	
	
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




	$tdataRBAC_ROLES_PERMISSIONS["ROL_UID"] = $fdata;
//	PER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PER_UID";
	$fdata["GoodName"] = "PER_UID";
	$fdata["ownerTable"] = "RBAC_ROLES_PERMISSIONS";
	$fdata["Label"] = GetFieldLabel("RBAC_ROLES_PERMISSIONS","PER_UID");
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

		$fdata["strField"] = "PER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PER_UID";

	
	
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




	$tdataRBAC_ROLES_PERMISSIONS["PER_UID"] = $fdata;


$tables_data["RBAC_ROLES_PERMISSIONS"]=&$tdataRBAC_ROLES_PERMISSIONS;
$field_labels["RBAC_ROLES_PERMISSIONS"] = &$fieldLabelsRBAC_ROLES_PERMISSIONS;
$fieldToolTips["RBAC_ROLES_PERMISSIONS"] = &$fieldToolTipsRBAC_ROLES_PERMISSIONS;
$placeHolders["RBAC_ROLES_PERMISSIONS"] = &$placeHoldersRBAC_ROLES_PERMISSIONS;
$page_titles["RBAC_ROLES_PERMISSIONS"] = &$pageTitlesRBAC_ROLES_PERMISSIONS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_ROLES_PERMISSIONS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_ROLES_PERMISSIONS"] = array();


	
				$strOriginalDetailsTable="RBAC_ROLES";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="RBAC_ROLES";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "RBAC_ROLES";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["RBAC_ROLES_PERMISSIONS"][0] = $masterParams;
				$masterTablesData["RBAC_ROLES_PERMISSIONS"][0]["masterKeys"] = array();
	$masterTablesData["RBAC_ROLES_PERMISSIONS"][0]["masterKeys"][]="ROL_UID";
				$masterTablesData["RBAC_ROLES_PERMISSIONS"][0]["detailKeys"] = array();
	$masterTablesData["RBAC_ROLES_PERMISSIONS"][0]["detailKeys"][]="ROL_UID";
		
	
				$strOriginalDetailsTable="RBAC_PERMISSIONS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="RBAC_PERMISSIONS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "RBAC_PERMISSIONS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["RBAC_ROLES_PERMISSIONS"][1] = $masterParams;
				$masterTablesData["RBAC_ROLES_PERMISSIONS"][1]["masterKeys"] = array();
	$masterTablesData["RBAC_ROLES_PERMISSIONS"][1]["masterKeys"][]="PER_UID";
				$masterTablesData["RBAC_ROLES_PERMISSIONS"][1]["detailKeys"] = array();
	$masterTablesData["RBAC_ROLES_PERMISSIONS"][1]["detailKeys"][]="PER_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_ROLES_PERMISSIONS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ROL_UID,  	PER_UID";
$proto0["m_strFrom"] = "FROM RBAC_ROLES_PERMISSIONS";
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
	"m_strName" => "ROL_UID",
	"m_strTable" => "RBAC_ROLES_PERMISSIONS",
	"m_srcTableName" => "RBAC_ROLES_PERMISSIONS"
));

$proto6["m_sql"] = "ROL_UID";
$proto6["m_srcTableName"] = "RBAC_ROLES_PERMISSIONS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_UID",
	"m_strTable" => "RBAC_ROLES_PERMISSIONS",
	"m_srcTableName" => "RBAC_ROLES_PERMISSIONS"
));

$proto8["m_sql"] = "PER_UID";
$proto8["m_srcTableName"] = "RBAC_ROLES_PERMISSIONS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "RBAC_ROLES_PERMISSIONS";
$proto11["m_srcTableName"] = "RBAC_ROLES_PERMISSIONS";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ROL_UID";
$proto11["m_columns"][] = "PER_UID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "RBAC_ROLES_PERMISSIONS";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "RBAC_ROLES_PERMISSIONS";
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
$proto0["m_srcTableName"]="RBAC_ROLES_PERMISSIONS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_ROLES_PERMISSIONS = createSqlQuery_RBAC_ROLES_PERMISSIONS();


	
						;

		

$tdataRBAC_ROLES_PERMISSIONS[".sqlquery"] = $queryData_RBAC_ROLES_PERMISSIONS;

$tableEvents["RBAC_ROLES_PERMISSIONS"] = new eventsBase;
$tdataRBAC_ROLES_PERMISSIONS[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_USERS_ROLES = array();
	$tdataRBAC_USERS_ROLES[".truncateText"] = true;
	$tdataRBAC_USERS_ROLES[".NumberOfChars"] = 20;
	$tdataRBAC_USERS_ROLES[".ShortName"] = "RBAC_USERS_ROLES";
	$tdataRBAC_USERS_ROLES[".OwnerID"] = "";
	$tdataRBAC_USERS_ROLES[".OriginalTable"] = "RBAC_USERS_ROLES";

//	field labels
$fieldLabelsRBAC_USERS_ROLES = array();
$fieldToolTipsRBAC_USERS_ROLES = array();
$pageTitlesRBAC_USERS_ROLES = array();
$placeHoldersRBAC_USERS_ROLES = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_USERS_ROLES["Japanese"] = array();
	$fieldToolTipsRBAC_USERS_ROLES["Japanese"] = array();
	$placeHoldersRBAC_USERS_ROLES["Japanese"] = array();
	$pageTitlesRBAC_USERS_ROLES["Japanese"] = array();
	$fieldLabelsRBAC_USERS_ROLES["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsRBAC_USERS_ROLES["Japanese"]["USR_UID"] = "";
	$placeHoldersRBAC_USERS_ROLES["Japanese"]["USR_UID"] = "";
	$fieldLabelsRBAC_USERS_ROLES["Japanese"]["ROL_UID"] = "ROLのUID";
	$fieldToolTipsRBAC_USERS_ROLES["Japanese"]["ROL_UID"] = "";
	$placeHoldersRBAC_USERS_ROLES["Japanese"]["ROL_UID"] = "";
	if (count($fieldToolTipsRBAC_USERS_ROLES["Japanese"]))
		$tdataRBAC_USERS_ROLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_USERS_ROLES["English"] = array();
	$fieldToolTipsRBAC_USERS_ROLES["English"] = array();
	$placeHoldersRBAC_USERS_ROLES["English"] = array();
	$pageTitlesRBAC_USERS_ROLES["English"] = array();
	$fieldLabelsRBAC_USERS_ROLES["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsRBAC_USERS_ROLES["English"]["USR_UID"] = "";
	$placeHoldersRBAC_USERS_ROLES["English"]["USR_UID"] = "";
	$fieldLabelsRBAC_USERS_ROLES["English"]["ROL_UID"] = "ROLのUID";
	$fieldToolTipsRBAC_USERS_ROLES["English"]["ROL_UID"] = "";
	$placeHoldersRBAC_USERS_ROLES["English"]["ROL_UID"] = "";
	if (count($fieldToolTipsRBAC_USERS_ROLES["English"]))
		$tdataRBAC_USERS_ROLES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_USERS_ROLES[""] = array();
	$fieldToolTipsRBAC_USERS_ROLES[""] = array();
	$placeHoldersRBAC_USERS_ROLES[""] = array();
	$pageTitlesRBAC_USERS_ROLES[""] = array();
	if (count($fieldToolTipsRBAC_USERS_ROLES[""]))
		$tdataRBAC_USERS_ROLES[".isUseToolTips"] = true;
}


	$tdataRBAC_USERS_ROLES[".NCSearch"] = true;



$tdataRBAC_USERS_ROLES[".shortTableName"] = "RBAC_USERS_ROLES";
$tdataRBAC_USERS_ROLES[".nSecOptions"] = 0;
$tdataRBAC_USERS_ROLES[".recsPerRowPrint"] = 1;
$tdataRBAC_USERS_ROLES[".mainTableOwnerID"] = "";
$tdataRBAC_USERS_ROLES[".moveNext"] = 0;
$tdataRBAC_USERS_ROLES[".entityType"] = 0;

$tdataRBAC_USERS_ROLES[".strOriginalTableName"] = "RBAC_USERS_ROLES";

	



$tdataRBAC_USERS_ROLES[".showAddInPopup"] = false;

$tdataRBAC_USERS_ROLES[".showEditInPopup"] = false;

$tdataRBAC_USERS_ROLES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_USERS_ROLES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_USERS_ROLES[".fieldsForRegister"] = array();
	
$tdataRBAC_USERS_ROLES[".listAjax"] = false;

	$tdataRBAC_USERS_ROLES[".audit"] = true;

	$tdataRBAC_USERS_ROLES[".locking"] = false;

$tdataRBAC_USERS_ROLES[".edit"] = true;
$tdataRBAC_USERS_ROLES[".afterEditAction"] = 1;
$tdataRBAC_USERS_ROLES[".closePopupAfterEdit"] = 1;
$tdataRBAC_USERS_ROLES[".afterEditActionDetTable"] = "";

$tdataRBAC_USERS_ROLES[".add"] = true;
$tdataRBAC_USERS_ROLES[".afterAddAction"] = 1;
$tdataRBAC_USERS_ROLES[".closePopupAfterAdd"] = 1;
$tdataRBAC_USERS_ROLES[".afterAddActionDetTable"] = "";

$tdataRBAC_USERS_ROLES[".list"] = true;

$tdataRBAC_USERS_ROLES[".inlineEdit"] = true;


$tdataRBAC_USERS_ROLES[".reorderRecordsByHeader"] = true;
$tdataRBAC_USERS_ROLES[".createSortByDropdown"] = true;
$tdataRBAC_USERS_ROLES[".strSortControlSettingsJSON"] = "";



$tdataRBAC_USERS_ROLES[".inlineAdd"] = true;
$tdataRBAC_USERS_ROLES[".view"] = true;

$tdataRBAC_USERS_ROLES[".import"] = true;

$tdataRBAC_USERS_ROLES[".exportTo"] = true;

$tdataRBAC_USERS_ROLES[".printFriendly"] = true;

$tdataRBAC_USERS_ROLES[".delete"] = true;

$tdataRBAC_USERS_ROLES[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_USERS_ROLES[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_USERS_ROLES[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_USERS_ROLES[".searchSaving"] = false;
//

$tdataRBAC_USERS_ROLES[".showSearchPanel"] = true;
		$tdataRBAC_USERS_ROLES[".flexibleSearch"] = true;

$tdataRBAC_USERS_ROLES[".isUseAjaxSuggest"] = true;

$tdataRBAC_USERS_ROLES[".rowHighlite"] = true;



																												

$tdataRBAC_USERS_ROLES[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_USERS_ROLES[".buttonsAdded"] = false;

$tdataRBAC_USERS_ROLES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_USERS_ROLES[".isUseTimeForSearch"] = false;



$tdataRBAC_USERS_ROLES[".badgeColor"] = "cd853f";


$tdataRBAC_USERS_ROLES[".allSearchFields"] = array();
$tdataRBAC_USERS_ROLES[".filterFields"] = array();
$tdataRBAC_USERS_ROLES[".requiredSearchFields"] = array();

$tdataRBAC_USERS_ROLES[".allSearchFields"][] = "USR_UID";
	$tdataRBAC_USERS_ROLES[".allSearchFields"][] = "ROL_UID";
	

$tdataRBAC_USERS_ROLES[".googleLikeFields"] = array();
$tdataRBAC_USERS_ROLES[".googleLikeFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".googleLikeFields"][] = "ROL_UID";


$tdataRBAC_USERS_ROLES[".advSearchFields"] = array();
$tdataRBAC_USERS_ROLES[".advSearchFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".advSearchFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".tableType"] = "list";

$tdataRBAC_USERS_ROLES[".printerPageOrientation"] = 0;
$tdataRBAC_USERS_ROLES[".nPrinterPageScale"] = 100;

$tdataRBAC_USERS_ROLES[".nPrinterSplitRecords"] = 40;

$tdataRBAC_USERS_ROLES[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_USERS_ROLES[".geocodingEnabled"] = false;





$tdataRBAC_USERS_ROLES[".listGridLayout"] = 3;


$tdataRBAC_USERS_ROLES[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_USERS_ROLES[".pageSize"] = 20;

$tdataRBAC_USERS_ROLES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_USERS_ROLES[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_USERS_ROLES[".orderindexes"] = array();

$tdataRBAC_USERS_ROLES[".sqlHead"] = "SELECT USR_UID,  	ROL_UID";
$tdataRBAC_USERS_ROLES[".sqlFrom"] = "FROM RBAC_USERS_ROLES";
$tdataRBAC_USERS_ROLES[".sqlWhereExpr"] = "";
$tdataRBAC_USERS_ROLES[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_USERS_ROLES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_USERS_ROLES[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_USERS_ROLES[".highlightSearchResults"] = true;

$tableKeysRBAC_USERS_ROLES = array();
$tableKeysRBAC_USERS_ROLES[] = "USR_UID";
$tableKeysRBAC_USERS_ROLES[] = "ROL_UID";
$tdataRBAC_USERS_ROLES[".Keys"] = $tableKeysRBAC_USERS_ROLES;

$tdataRBAC_USERS_ROLES[".listFields"] = array();
$tdataRBAC_USERS_ROLES[".listFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".listFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".hideMobileList"] = array();


$tdataRBAC_USERS_ROLES[".viewFields"] = array();
$tdataRBAC_USERS_ROLES[".viewFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".viewFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".addFields"] = array();
$tdataRBAC_USERS_ROLES[".addFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".addFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".masterListFields"] = array();
$tdataRBAC_USERS_ROLES[".masterListFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".masterListFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".inlineAddFields"] = array();
$tdataRBAC_USERS_ROLES[".inlineAddFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".inlineAddFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".editFields"] = array();
$tdataRBAC_USERS_ROLES[".editFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".editFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".inlineEditFields"] = array();
$tdataRBAC_USERS_ROLES[".inlineEditFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".inlineEditFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".updateSelectedFields"] = array();
$tdataRBAC_USERS_ROLES[".updateSelectedFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".updateSelectedFields"][] = "ROL_UID";


$tdataRBAC_USERS_ROLES[".exportFields"] = array();
$tdataRBAC_USERS_ROLES[".exportFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".exportFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".importFields"] = array();
$tdataRBAC_USERS_ROLES[".importFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".importFields"][] = "ROL_UID";

$tdataRBAC_USERS_ROLES[".printFields"] = array();
$tdataRBAC_USERS_ROLES[".printFields"][] = "USR_UID";
$tdataRBAC_USERS_ROLES[".printFields"][] = "ROL_UID";

//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "RBAC_USERS_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS_ROLES","USR_UID");
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

		$fdata["strField"] = "USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UID";

	
	
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




	$tdataRBAC_USERS_ROLES["USR_UID"] = $fdata;
//	ROL_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ROL_UID";
	$fdata["GoodName"] = "ROL_UID";
	$fdata["ownerTable"] = "RBAC_USERS_ROLES";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS_ROLES","ROL_UID");
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




	$tdataRBAC_USERS_ROLES["ROL_UID"] = $fdata;


$tables_data["RBAC_USERS_ROLES"]=&$tdataRBAC_USERS_ROLES;
$field_labels["RBAC_USERS_ROLES"] = &$fieldLabelsRBAC_USERS_ROLES;
$fieldToolTips["RBAC_USERS_ROLES"] = &$fieldToolTipsRBAC_USERS_ROLES;
$placeHolders["RBAC_USERS_ROLES"] = &$placeHoldersRBAC_USERS_ROLES;
$page_titles["RBAC_USERS_ROLES"] = &$pageTitlesRBAC_USERS_ROLES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_USERS_ROLES"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_USERS_ROLES"] = array();


	
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
					$masterTablesData["RBAC_USERS_ROLES"][0] = $masterParams;
				$masterTablesData["RBAC_USERS_ROLES"][0]["masterKeys"] = array();
	$masterTablesData["RBAC_USERS_ROLES"][0]["masterKeys"][]="ROL_UID";
				$masterTablesData["RBAC_USERS_ROLES"][0]["detailKeys"] = array();
	$masterTablesData["RBAC_USERS_ROLES"][0]["detailKeys"][]="ROL_UID";
		
	
				$strOriginalDetailsTable="USERS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="USERS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "USERS";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["RBAC_USERS_ROLES"][1] = $masterParams;
				$masterTablesData["RBAC_USERS_ROLES"][1]["masterKeys"] = array();
	$masterTablesData["RBAC_USERS_ROLES"][1]["masterKeys"][]="USR_UID";
				$masterTablesData["RBAC_USERS_ROLES"][1]["detailKeys"] = array();
	$masterTablesData["RBAC_USERS_ROLES"][1]["detailKeys"][]="USR_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_USERS_ROLES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USR_UID,  	ROL_UID";
$proto0["m_strFrom"] = "FROM RBAC_USERS_ROLES";
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
	"m_strName" => "USR_UID",
	"m_strTable" => "RBAC_USERS_ROLES",
	"m_srcTableName" => "RBAC_USERS_ROLES"
));

$proto6["m_sql"] = "USR_UID";
$proto6["m_srcTableName"] = "RBAC_USERS_ROLES";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL_UID",
	"m_strTable" => "RBAC_USERS_ROLES",
	"m_srcTableName" => "RBAC_USERS_ROLES"
));

$proto8["m_sql"] = "ROL_UID";
$proto8["m_srcTableName"] = "RBAC_USERS_ROLES";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "RBAC_USERS_ROLES";
$proto11["m_srcTableName"] = "RBAC_USERS_ROLES";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "USR_UID";
$proto11["m_columns"][] = "ROL_UID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "RBAC_USERS_ROLES";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "RBAC_USERS_ROLES";
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
$proto0["m_srcTableName"]="RBAC_USERS_ROLES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_USERS_ROLES = createSqlQuery_RBAC_USERS_ROLES();


	
						;

		

$tdataRBAC_USERS_ROLES[".sqlquery"] = $queryData_RBAC_USERS_ROLES;

$tableEvents["RBAC_USERS_ROLES"] = new eventsBase;
$tdataRBAC_USERS_ROLES[".hasEvents"] = false;

?>
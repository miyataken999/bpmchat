<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTASK_USER = array();
	$tdataTASK_USER[".truncateText"] = true;
	$tdataTASK_USER[".NumberOfChars"] = 20;
	$tdataTASK_USER[".ShortName"] = "TASK_USER";
	$tdataTASK_USER[".OwnerID"] = "";
	$tdataTASK_USER[".OriginalTable"] = "TASK_USER";

//	field labels
$fieldLabelsTASK_USER = array();
$fieldToolTipsTASK_USER = array();
$pageTitlesTASK_USER = array();
$placeHoldersTASK_USER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsTASK_USER["Japanese"] = array();
	$fieldToolTipsTASK_USER["Japanese"] = array();
	$placeHoldersTASK_USER["Japanese"] = array();
	$pageTitlesTASK_USER["Japanese"] = array();
	$fieldLabelsTASK_USER["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsTASK_USER["Japanese"]["TAS_UID"] = "";
	$placeHoldersTASK_USER["Japanese"]["TAS_UID"] = "";
	$fieldLabelsTASK_USER["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsTASK_USER["Japanese"]["USR_UID"] = "";
	$placeHoldersTASK_USER["Japanese"]["USR_UID"] = "";
	$fieldLabelsTASK_USER["Japanese"]["TU_TYPE"] = "TUタイプ";
	$fieldToolTipsTASK_USER["Japanese"]["TU_TYPE"] = "";
	$placeHoldersTASK_USER["Japanese"]["TU_TYPE"] = "";
	$fieldLabelsTASK_USER["Japanese"]["TU_RELATION"] = "TUの関係";
	$fieldToolTipsTASK_USER["Japanese"]["TU_RELATION"] = "";
	$placeHoldersTASK_USER["Japanese"]["TU_RELATION"] = "";
	if (count($fieldToolTipsTASK_USER["Japanese"]))
		$tdataTASK_USER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTASK_USER["English"] = array();
	$fieldToolTipsTASK_USER["English"] = array();
	$placeHoldersTASK_USER["English"] = array();
	$pageTitlesTASK_USER["English"] = array();
	$fieldLabelsTASK_USER["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsTASK_USER["English"]["TAS_UID"] = "";
	$placeHoldersTASK_USER["English"]["TAS_UID"] = "";
	$fieldLabelsTASK_USER["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsTASK_USER["English"]["USR_UID"] = "";
	$placeHoldersTASK_USER["English"]["USR_UID"] = "";
	$fieldLabelsTASK_USER["English"]["TU_TYPE"] = "TUタイプ";
	$fieldToolTipsTASK_USER["English"]["TU_TYPE"] = "";
	$placeHoldersTASK_USER["English"]["TU_TYPE"] = "";
	$fieldLabelsTASK_USER["English"]["TU_RELATION"] = "TUの関係";
	$fieldToolTipsTASK_USER["English"]["TU_RELATION"] = "";
	$placeHoldersTASK_USER["English"]["TU_RELATION"] = "";
	if (count($fieldToolTipsTASK_USER["English"]))
		$tdataTASK_USER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTASK_USER[""] = array();
	$fieldToolTipsTASK_USER[""] = array();
	$placeHoldersTASK_USER[""] = array();
	$pageTitlesTASK_USER[""] = array();
	if (count($fieldToolTipsTASK_USER[""]))
		$tdataTASK_USER[".isUseToolTips"] = true;
}


	$tdataTASK_USER[".NCSearch"] = true;



$tdataTASK_USER[".shortTableName"] = "TASK_USER";
$tdataTASK_USER[".nSecOptions"] = 0;
$tdataTASK_USER[".recsPerRowPrint"] = 1;
$tdataTASK_USER[".mainTableOwnerID"] = "";
$tdataTASK_USER[".moveNext"] = 0;
$tdataTASK_USER[".entityType"] = 0;

$tdataTASK_USER[".strOriginalTableName"] = "TASK_USER";

	



$tdataTASK_USER[".showAddInPopup"] = false;

$tdataTASK_USER[".showEditInPopup"] = false;

$tdataTASK_USER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTASK_USER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTASK_USER[".fieldsForRegister"] = array();
	
$tdataTASK_USER[".listAjax"] = false;

	$tdataTASK_USER[".audit"] = true;

	$tdataTASK_USER[".locking"] = false;

$tdataTASK_USER[".edit"] = true;
$tdataTASK_USER[".afterEditAction"] = 1;
$tdataTASK_USER[".closePopupAfterEdit"] = 1;
$tdataTASK_USER[".afterEditActionDetTable"] = "";

$tdataTASK_USER[".add"] = true;
$tdataTASK_USER[".afterAddAction"] = 1;
$tdataTASK_USER[".closePopupAfterAdd"] = 1;
$tdataTASK_USER[".afterAddActionDetTable"] = "";

$tdataTASK_USER[".list"] = true;

$tdataTASK_USER[".inlineEdit"] = true;


$tdataTASK_USER[".reorderRecordsByHeader"] = true;
$tdataTASK_USER[".createSortByDropdown"] = true;
$tdataTASK_USER[".strSortControlSettingsJSON"] = "";



$tdataTASK_USER[".inlineAdd"] = true;
$tdataTASK_USER[".view"] = true;

$tdataTASK_USER[".import"] = true;

$tdataTASK_USER[".exportTo"] = true;

$tdataTASK_USER[".printFriendly"] = true;

$tdataTASK_USER[".delete"] = true;

$tdataTASK_USER[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataTASK_USER[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataTASK_USER[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataTASK_USER[".searchSaving"] = false;
//

$tdataTASK_USER[".showSearchPanel"] = true;
		$tdataTASK_USER[".flexibleSearch"] = true;

$tdataTASK_USER[".isUseAjaxSuggest"] = true;

$tdataTASK_USER[".rowHighlite"] = true;



				

$tdataTASK_USER[".ajaxCodeSnippetAdded"] = false;

$tdataTASK_USER[".buttonsAdded"] = false;

$tdataTASK_USER[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTASK_USER[".isUseTimeForSearch"] = false;





$tdataTASK_USER[".allSearchFields"] = array();
$tdataTASK_USER[".filterFields"] = array();
$tdataTASK_USER[".requiredSearchFields"] = array();

$tdataTASK_USER[".allSearchFields"][] = "TAS_UID";
	$tdataTASK_USER[".allSearchFields"][] = "USR_UID";
	$tdataTASK_USER[".allSearchFields"][] = "TU_TYPE";
	$tdataTASK_USER[".allSearchFields"][] = "TU_RELATION";
	

$tdataTASK_USER[".googleLikeFields"] = array();
$tdataTASK_USER[".googleLikeFields"][] = "TAS_UID";
$tdataTASK_USER[".googleLikeFields"][] = "USR_UID";
$tdataTASK_USER[".googleLikeFields"][] = "TU_TYPE";
$tdataTASK_USER[".googleLikeFields"][] = "TU_RELATION";


$tdataTASK_USER[".advSearchFields"] = array();
$tdataTASK_USER[".advSearchFields"][] = "TAS_UID";
$tdataTASK_USER[".advSearchFields"][] = "USR_UID";
$tdataTASK_USER[".advSearchFields"][] = "TU_TYPE";
$tdataTASK_USER[".advSearchFields"][] = "TU_RELATION";

$tdataTASK_USER[".tableType"] = "list";

$tdataTASK_USER[".printerPageOrientation"] = 0;
$tdataTASK_USER[".nPrinterPageScale"] = 100;

$tdataTASK_USER[".nPrinterSplitRecords"] = 40;

$tdataTASK_USER[".nPrinterPDFSplitRecords"] = 40;



$tdataTASK_USER[".geocodingEnabled"] = false;





$tdataTASK_USER[".listGridLayout"] = 3;


$tdataTASK_USER[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataTASK_USER[".pageSize"] = 20;

$tdataTASK_USER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTASK_USER[".strOrderBy"] = $tstrOrderBy;

$tdataTASK_USER[".orderindexes"] = array();

$tdataTASK_USER[".sqlHead"] = "SELECT TAS_UID,  	USR_UID,  	TU_TYPE,  	TU_RELATION";
$tdataTASK_USER[".sqlFrom"] = "FROM TASK_USER";
$tdataTASK_USER[".sqlWhereExpr"] = "";
$tdataTASK_USER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTASK_USER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTASK_USER[".arrGroupsPerPage"] = $arrGPP;

$tdataTASK_USER[".highlightSearchResults"] = true;

$tableKeysTASK_USER = array();
$tableKeysTASK_USER[] = "TAS_UID";
$tableKeysTASK_USER[] = "USR_UID";
$tableKeysTASK_USER[] = "TU_TYPE";
$tableKeysTASK_USER[] = "TU_RELATION";
$tdataTASK_USER[".Keys"] = $tableKeysTASK_USER;

$tdataTASK_USER[".listFields"] = array();
$tdataTASK_USER[".listFields"][] = "TAS_UID";
$tdataTASK_USER[".listFields"][] = "USR_UID";
$tdataTASK_USER[".listFields"][] = "TU_TYPE";
$tdataTASK_USER[".listFields"][] = "TU_RELATION";

$tdataTASK_USER[".hideMobileList"] = array();


$tdataTASK_USER[".viewFields"] = array();
$tdataTASK_USER[".viewFields"][] = "TAS_UID";
$tdataTASK_USER[".viewFields"][] = "USR_UID";
$tdataTASK_USER[".viewFields"][] = "TU_TYPE";
$tdataTASK_USER[".viewFields"][] = "TU_RELATION";

$tdataTASK_USER[".addFields"] = array();
$tdataTASK_USER[".addFields"][] = "TAS_UID";
$tdataTASK_USER[".addFields"][] = "USR_UID";
$tdataTASK_USER[".addFields"][] = "TU_TYPE";
$tdataTASK_USER[".addFields"][] = "TU_RELATION";

$tdataTASK_USER[".masterListFields"] = array();
$tdataTASK_USER[".masterListFields"][] = "TAS_UID";
$tdataTASK_USER[".masterListFields"][] = "USR_UID";
$tdataTASK_USER[".masterListFields"][] = "TU_TYPE";
$tdataTASK_USER[".masterListFields"][] = "TU_RELATION";

$tdataTASK_USER[".inlineAddFields"] = array();
$tdataTASK_USER[".inlineAddFields"][] = "TAS_UID";
$tdataTASK_USER[".inlineAddFields"][] = "USR_UID";
$tdataTASK_USER[".inlineAddFields"][] = "TU_TYPE";
$tdataTASK_USER[".inlineAddFields"][] = "TU_RELATION";

$tdataTASK_USER[".editFields"] = array();
$tdataTASK_USER[".editFields"][] = "TAS_UID";
$tdataTASK_USER[".editFields"][] = "USR_UID";
$tdataTASK_USER[".editFields"][] = "TU_TYPE";
$tdataTASK_USER[".editFields"][] = "TU_RELATION";

$tdataTASK_USER[".inlineEditFields"] = array();
$tdataTASK_USER[".inlineEditFields"][] = "TAS_UID";
$tdataTASK_USER[".inlineEditFields"][] = "USR_UID";
$tdataTASK_USER[".inlineEditFields"][] = "TU_TYPE";
$tdataTASK_USER[".inlineEditFields"][] = "TU_RELATION";

$tdataTASK_USER[".updateSelectedFields"] = array();
$tdataTASK_USER[".updateSelectedFields"][] = "TAS_UID";
$tdataTASK_USER[".updateSelectedFields"][] = "USR_UID";
$tdataTASK_USER[".updateSelectedFields"][] = "TU_TYPE";
$tdataTASK_USER[".updateSelectedFields"][] = "TU_RELATION";


$tdataTASK_USER[".exportFields"] = array();
$tdataTASK_USER[".exportFields"][] = "TAS_UID";
$tdataTASK_USER[".exportFields"][] = "USR_UID";
$tdataTASK_USER[".exportFields"][] = "TU_TYPE";
$tdataTASK_USER[".exportFields"][] = "TU_RELATION";

$tdataTASK_USER[".importFields"] = array();
$tdataTASK_USER[".importFields"][] = "TAS_UID";
$tdataTASK_USER[".importFields"][] = "USR_UID";
$tdataTASK_USER[".importFields"][] = "TU_TYPE";
$tdataTASK_USER[".importFields"][] = "TU_RELATION";

$tdataTASK_USER[".printFields"] = array();
$tdataTASK_USER[".printFields"][] = "TAS_UID";
$tdataTASK_USER[".printFields"][] = "USR_UID";
$tdataTASK_USER[".printFields"][] = "TU_TYPE";
$tdataTASK_USER[".printFields"][] = "TU_RELATION";

//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "TASK_USER";
	$fdata["Label"] = GetFieldLabel("TASK_USER","TAS_UID");
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

		$fdata["strField"] = "TAS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAS_UID";

	
	
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




	$tdataTASK_USER["TAS_UID"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "TASK_USER";
	$fdata["Label"] = GetFieldLabel("TASK_USER","USR_UID");
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




	$tdataTASK_USER["USR_UID"] = $fdata;
//	TU_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TU_TYPE";
	$fdata["GoodName"] = "TU_TYPE";
	$fdata["ownerTable"] = "TASK_USER";
	$fdata["Label"] = GetFieldLabel("TASK_USER","TU_TYPE");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "TU_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TU_TYPE";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK_USER["TU_TYPE"] = $fdata;
//	TU_RELATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TU_RELATION";
	$fdata["GoodName"] = "TU_RELATION";
	$fdata["ownerTable"] = "TASK_USER";
	$fdata["Label"] = GetFieldLabel("TASK_USER","TU_RELATION");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "TU_RELATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TU_RELATION";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTASK_USER["TU_RELATION"] = $fdata;


$tables_data["TASK_USER"]=&$tdataTASK_USER;
$field_labels["TASK_USER"] = &$fieldLabelsTASK_USER;
$fieldToolTips["TASK_USER"] = &$fieldToolTipsTASK_USER;
$placeHolders["TASK_USER"] = &$placeHoldersTASK_USER;
$page_titles["TASK_USER"] = &$pageTitlesTASK_USER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TASK_USER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TASK_USER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TASK_USER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TAS_UID,  	USR_UID,  	TU_TYPE,  	TU_RELATION";
$proto0["m_strFrom"] = "FROM TASK_USER";
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
	"m_strName" => "TAS_UID",
	"m_strTable" => "TASK_USER",
	"m_srcTableName" => "TASK_USER"
));

$proto6["m_sql"] = "TAS_UID";
$proto6["m_srcTableName"] = "TASK_USER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "TASK_USER",
	"m_srcTableName" => "TASK_USER"
));

$proto8["m_sql"] = "USR_UID";
$proto8["m_srcTableName"] = "TASK_USER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TU_TYPE",
	"m_strTable" => "TASK_USER",
	"m_srcTableName" => "TASK_USER"
));

$proto10["m_sql"] = "TU_TYPE";
$proto10["m_srcTableName"] = "TASK_USER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TU_RELATION",
	"m_strTable" => "TASK_USER",
	"m_srcTableName" => "TASK_USER"
));

$proto12["m_sql"] = "TU_RELATION";
$proto12["m_srcTableName"] = "TASK_USER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "TASK_USER";
$proto15["m_srcTableName"] = "TASK_USER";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TAS_UID";
$proto15["m_columns"][] = "USR_UID";
$proto15["m_columns"][] = "TU_TYPE";
$proto15["m_columns"][] = "TU_RELATION";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "TASK_USER";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "TASK_USER";
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
$proto0["m_srcTableName"]="TASK_USER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TASK_USER = createSqlQuery_TASK_USER();


	
						;

				

$tdataTASK_USER[".sqlquery"] = $queryData_TASK_USER;

$tableEvents["TASK_USER"] = new eventsBase;
$tdataTASK_USER[".hasEvents"] = false;

?>
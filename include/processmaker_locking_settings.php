<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprocessmaker_locking = array();
	$tdataprocessmaker_locking[".truncateText"] = true;
	$tdataprocessmaker_locking[".NumberOfChars"] = 20;
	$tdataprocessmaker_locking[".ShortName"] = "processmaker_locking";
	$tdataprocessmaker_locking[".OwnerID"] = "";
	$tdataprocessmaker_locking[".OriginalTable"] = "processmaker_locking";

//	field labels
$fieldLabelsprocessmaker_locking = array();
$fieldToolTipsprocessmaker_locking = array();
$pageTitlesprocessmaker_locking = array();
$placeHoldersprocessmaker_locking = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsprocessmaker_locking["Japanese"] = array();
	$fieldToolTipsprocessmaker_locking["Japanese"] = array();
	$placeHoldersprocessmaker_locking["Japanese"] = array();
	$pageTitlesprocessmaker_locking["Japanese"] = array();
	$fieldLabelsprocessmaker_locking["Japanese"]["id"] = "ID";
	$fieldToolTipsprocessmaker_locking["Japanese"]["id"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["id"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["table"] = "表";
	$fieldToolTipsprocessmaker_locking["Japanese"]["table"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["table"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["startdatetime"] = "startdatetime";
	$fieldToolTipsprocessmaker_locking["Japanese"]["startdatetime"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["startdatetime"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["confirmdatetime"] = "confirmdatetime";
	$fieldToolTipsprocessmaker_locking["Japanese"]["confirmdatetime"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["confirmdatetime"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["keys"] = "キー";
	$fieldToolTipsprocessmaker_locking["Japanese"]["keys"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["keys"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["sessionid"] = "セッションID";
	$fieldToolTipsprocessmaker_locking["Japanese"]["sessionid"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["sessionid"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["userid"] = "ユーザーID";
	$fieldToolTipsprocessmaker_locking["Japanese"]["userid"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["userid"] = "";
	$fieldLabelsprocessmaker_locking["Japanese"]["action"] = "アクション";
	$fieldToolTipsprocessmaker_locking["Japanese"]["action"] = "";
	$placeHoldersprocessmaker_locking["Japanese"]["action"] = "";
	if (count($fieldToolTipsprocessmaker_locking["Japanese"]))
		$tdataprocessmaker_locking[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocessmaker_locking["English"] = array();
	$fieldToolTipsprocessmaker_locking["English"] = array();
	$placeHoldersprocessmaker_locking["English"] = array();
	$pageTitlesprocessmaker_locking["English"] = array();
	$fieldLabelsprocessmaker_locking["English"]["id"] = "ID";
	$fieldToolTipsprocessmaker_locking["English"]["id"] = "";
	$placeHoldersprocessmaker_locking["English"]["id"] = "";
	$fieldLabelsprocessmaker_locking["English"]["table"] = "表";
	$fieldToolTipsprocessmaker_locking["English"]["table"] = "";
	$placeHoldersprocessmaker_locking["English"]["table"] = "";
	$fieldLabelsprocessmaker_locking["English"]["startdatetime"] = "startdatetime";
	$fieldToolTipsprocessmaker_locking["English"]["startdatetime"] = "";
	$placeHoldersprocessmaker_locking["English"]["startdatetime"] = "";
	$fieldLabelsprocessmaker_locking["English"]["confirmdatetime"] = "confirmdatetime";
	$fieldToolTipsprocessmaker_locking["English"]["confirmdatetime"] = "";
	$placeHoldersprocessmaker_locking["English"]["confirmdatetime"] = "";
	$fieldLabelsprocessmaker_locking["English"]["keys"] = "キー";
	$fieldToolTipsprocessmaker_locking["English"]["keys"] = "";
	$placeHoldersprocessmaker_locking["English"]["keys"] = "";
	$fieldLabelsprocessmaker_locking["English"]["sessionid"] = "セッションID";
	$fieldToolTipsprocessmaker_locking["English"]["sessionid"] = "";
	$placeHoldersprocessmaker_locking["English"]["sessionid"] = "";
	$fieldLabelsprocessmaker_locking["English"]["userid"] = "ユーザーID";
	$fieldToolTipsprocessmaker_locking["English"]["userid"] = "";
	$placeHoldersprocessmaker_locking["English"]["userid"] = "";
	$fieldLabelsprocessmaker_locking["English"]["action"] = "アクション";
	$fieldToolTipsprocessmaker_locking["English"]["action"] = "";
	$placeHoldersprocessmaker_locking["English"]["action"] = "";
	if (count($fieldToolTipsprocessmaker_locking["English"]))
		$tdataprocessmaker_locking[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprocessmaker_locking[""] = array();
	$fieldToolTipsprocessmaker_locking[""] = array();
	$placeHoldersprocessmaker_locking[""] = array();
	$pageTitlesprocessmaker_locking[""] = array();
	if (count($fieldToolTipsprocessmaker_locking[""]))
		$tdataprocessmaker_locking[".isUseToolTips"] = true;
}


	$tdataprocessmaker_locking[".NCSearch"] = true;



$tdataprocessmaker_locking[".shortTableName"] = "processmaker_locking";
$tdataprocessmaker_locking[".nSecOptions"] = 0;
$tdataprocessmaker_locking[".recsPerRowPrint"] = 1;
$tdataprocessmaker_locking[".mainTableOwnerID"] = "";
$tdataprocessmaker_locking[".moveNext"] = 0;
$tdataprocessmaker_locking[".entityType"] = 0;

$tdataprocessmaker_locking[".strOriginalTableName"] = "processmaker_locking";

	



$tdataprocessmaker_locking[".showAddInPopup"] = false;

$tdataprocessmaker_locking[".showEditInPopup"] = false;

$tdataprocessmaker_locking[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprocessmaker_locking[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprocessmaker_locking[".fieldsForRegister"] = array();
	
$tdataprocessmaker_locking[".listAjax"] = false;

	$tdataprocessmaker_locking[".audit"] = true;

	$tdataprocessmaker_locking[".locking"] = false;

$tdataprocessmaker_locking[".edit"] = true;
$tdataprocessmaker_locking[".afterEditAction"] = 1;
$tdataprocessmaker_locking[".closePopupAfterEdit"] = 1;
$tdataprocessmaker_locking[".afterEditActionDetTable"] = "";

$tdataprocessmaker_locking[".add"] = true;
$tdataprocessmaker_locking[".afterAddAction"] = 1;
$tdataprocessmaker_locking[".closePopupAfterAdd"] = 1;
$tdataprocessmaker_locking[".afterAddActionDetTable"] = "";

$tdataprocessmaker_locking[".list"] = true;

$tdataprocessmaker_locking[".inlineEdit"] = true;


$tdataprocessmaker_locking[".reorderRecordsByHeader"] = true;
$tdataprocessmaker_locking[".createSortByDropdown"] = true;
$tdataprocessmaker_locking[".strSortControlSettingsJSON"] = "";



$tdataprocessmaker_locking[".inlineAdd"] = true;
$tdataprocessmaker_locking[".view"] = true;

$tdataprocessmaker_locking[".import"] = true;

$tdataprocessmaker_locking[".exportTo"] = true;

$tdataprocessmaker_locking[".printFriendly"] = true;

$tdataprocessmaker_locking[".delete"] = true;

$tdataprocessmaker_locking[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataprocessmaker_locking[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataprocessmaker_locking[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataprocessmaker_locking[".searchSaving"] = false;
//

$tdataprocessmaker_locking[".showSearchPanel"] = true;
		$tdataprocessmaker_locking[".flexibleSearch"] = true;

$tdataprocessmaker_locking[".isUseAjaxSuggest"] = true;

$tdataprocessmaker_locking[".rowHighlite"] = true;



				

$tdataprocessmaker_locking[".ajaxCodeSnippetAdded"] = false;

$tdataprocessmaker_locking[".buttonsAdded"] = false;

$tdataprocessmaker_locking[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocessmaker_locking[".isUseTimeForSearch"] = false;





$tdataprocessmaker_locking[".allSearchFields"] = array();
$tdataprocessmaker_locking[".filterFields"] = array();
$tdataprocessmaker_locking[".requiredSearchFields"] = array();

$tdataprocessmaker_locking[".allSearchFields"][] = "id";
	$tdataprocessmaker_locking[".allSearchFields"][] = "table";
	$tdataprocessmaker_locking[".allSearchFields"][] = "startdatetime";
	$tdataprocessmaker_locking[".allSearchFields"][] = "confirmdatetime";
	$tdataprocessmaker_locking[".allSearchFields"][] = "keys";
	$tdataprocessmaker_locking[".allSearchFields"][] = "sessionid";
	$tdataprocessmaker_locking[".allSearchFields"][] = "userid";
	$tdataprocessmaker_locking[".allSearchFields"][] = "action";
	

$tdataprocessmaker_locking[".googleLikeFields"] = array();
$tdataprocessmaker_locking[".googleLikeFields"][] = "id";
$tdataprocessmaker_locking[".googleLikeFields"][] = "table";
$tdataprocessmaker_locking[".googleLikeFields"][] = "startdatetime";
$tdataprocessmaker_locking[".googleLikeFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".googleLikeFields"][] = "keys";
$tdataprocessmaker_locking[".googleLikeFields"][] = "sessionid";
$tdataprocessmaker_locking[".googleLikeFields"][] = "userid";
$tdataprocessmaker_locking[".googleLikeFields"][] = "action";


$tdataprocessmaker_locking[".advSearchFields"] = array();
$tdataprocessmaker_locking[".advSearchFields"][] = "id";
$tdataprocessmaker_locking[".advSearchFields"][] = "table";
$tdataprocessmaker_locking[".advSearchFields"][] = "startdatetime";
$tdataprocessmaker_locking[".advSearchFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".advSearchFields"][] = "keys";
$tdataprocessmaker_locking[".advSearchFields"][] = "sessionid";
$tdataprocessmaker_locking[".advSearchFields"][] = "userid";
$tdataprocessmaker_locking[".advSearchFields"][] = "action";

$tdataprocessmaker_locking[".tableType"] = "list";

$tdataprocessmaker_locking[".printerPageOrientation"] = 0;
$tdataprocessmaker_locking[".nPrinterPageScale"] = 100;

$tdataprocessmaker_locking[".nPrinterSplitRecords"] = 40;

$tdataprocessmaker_locking[".nPrinterPDFSplitRecords"] = 40;



$tdataprocessmaker_locking[".geocodingEnabled"] = false;





$tdataprocessmaker_locking[".listGridLayout"] = 3;


$tdataprocessmaker_locking[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataprocessmaker_locking[".pageSize"] = 20;

$tdataprocessmaker_locking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprocessmaker_locking[".strOrderBy"] = $tstrOrderBy;

$tdataprocessmaker_locking[".orderindexes"] = array();

$tdataprocessmaker_locking[".sqlHead"] = "SELECT id,  	`table`,  	startdatetime,  	confirmdatetime,  	`keys`,  	sessionid,  	userid,  	`action`";
$tdataprocessmaker_locking[".sqlFrom"] = "FROM processmaker_locking";
$tdataprocessmaker_locking[".sqlWhereExpr"] = "";
$tdataprocessmaker_locking[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocessmaker_locking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocessmaker_locking[".arrGroupsPerPage"] = $arrGPP;

$tdataprocessmaker_locking[".highlightSearchResults"] = true;

$tableKeysprocessmaker_locking = array();
$tableKeysprocessmaker_locking[] = "id";
$tdataprocessmaker_locking[".Keys"] = $tableKeysprocessmaker_locking;

$tdataprocessmaker_locking[".listFields"] = array();
$tdataprocessmaker_locking[".listFields"][] = "id";
$tdataprocessmaker_locking[".listFields"][] = "table";
$tdataprocessmaker_locking[".listFields"][] = "startdatetime";
$tdataprocessmaker_locking[".listFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".listFields"][] = "keys";
$tdataprocessmaker_locking[".listFields"][] = "sessionid";
$tdataprocessmaker_locking[".listFields"][] = "userid";
$tdataprocessmaker_locking[".listFields"][] = "action";

$tdataprocessmaker_locking[".hideMobileList"] = array();


$tdataprocessmaker_locking[".viewFields"] = array();
$tdataprocessmaker_locking[".viewFields"][] = "id";
$tdataprocessmaker_locking[".viewFields"][] = "table";
$tdataprocessmaker_locking[".viewFields"][] = "startdatetime";
$tdataprocessmaker_locking[".viewFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".viewFields"][] = "keys";
$tdataprocessmaker_locking[".viewFields"][] = "sessionid";
$tdataprocessmaker_locking[".viewFields"][] = "userid";
$tdataprocessmaker_locking[".viewFields"][] = "action";

$tdataprocessmaker_locking[".addFields"] = array();
$tdataprocessmaker_locking[".addFields"][] = "table";
$tdataprocessmaker_locking[".addFields"][] = "startdatetime";
$tdataprocessmaker_locking[".addFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".addFields"][] = "keys";
$tdataprocessmaker_locking[".addFields"][] = "sessionid";
$tdataprocessmaker_locking[".addFields"][] = "userid";
$tdataprocessmaker_locking[".addFields"][] = "action";

$tdataprocessmaker_locking[".masterListFields"] = array();
$tdataprocessmaker_locking[".masterListFields"][] = "id";
$tdataprocessmaker_locking[".masterListFields"][] = "table";
$tdataprocessmaker_locking[".masterListFields"][] = "startdatetime";
$tdataprocessmaker_locking[".masterListFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".masterListFields"][] = "keys";
$tdataprocessmaker_locking[".masterListFields"][] = "sessionid";
$tdataprocessmaker_locking[".masterListFields"][] = "userid";
$tdataprocessmaker_locking[".masterListFields"][] = "action";

$tdataprocessmaker_locking[".inlineAddFields"] = array();
$tdataprocessmaker_locking[".inlineAddFields"][] = "table";
$tdataprocessmaker_locking[".inlineAddFields"][] = "startdatetime";
$tdataprocessmaker_locking[".inlineAddFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".inlineAddFields"][] = "keys";
$tdataprocessmaker_locking[".inlineAddFields"][] = "sessionid";
$tdataprocessmaker_locking[".inlineAddFields"][] = "userid";
$tdataprocessmaker_locking[".inlineAddFields"][] = "action";

$tdataprocessmaker_locking[".editFields"] = array();
$tdataprocessmaker_locking[".editFields"][] = "table";
$tdataprocessmaker_locking[".editFields"][] = "startdatetime";
$tdataprocessmaker_locking[".editFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".editFields"][] = "keys";
$tdataprocessmaker_locking[".editFields"][] = "sessionid";
$tdataprocessmaker_locking[".editFields"][] = "userid";
$tdataprocessmaker_locking[".editFields"][] = "action";

$tdataprocessmaker_locking[".inlineEditFields"] = array();
$tdataprocessmaker_locking[".inlineEditFields"][] = "table";
$tdataprocessmaker_locking[".inlineEditFields"][] = "startdatetime";
$tdataprocessmaker_locking[".inlineEditFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".inlineEditFields"][] = "keys";
$tdataprocessmaker_locking[".inlineEditFields"][] = "sessionid";
$tdataprocessmaker_locking[".inlineEditFields"][] = "userid";
$tdataprocessmaker_locking[".inlineEditFields"][] = "action";

$tdataprocessmaker_locking[".updateSelectedFields"] = array();
$tdataprocessmaker_locking[".updateSelectedFields"][] = "table";
$tdataprocessmaker_locking[".updateSelectedFields"][] = "startdatetime";
$tdataprocessmaker_locking[".updateSelectedFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".updateSelectedFields"][] = "keys";
$tdataprocessmaker_locking[".updateSelectedFields"][] = "sessionid";
$tdataprocessmaker_locking[".updateSelectedFields"][] = "userid";
$tdataprocessmaker_locking[".updateSelectedFields"][] = "action";


$tdataprocessmaker_locking[".exportFields"] = array();
$tdataprocessmaker_locking[".exportFields"][] = "id";
$tdataprocessmaker_locking[".exportFields"][] = "table";
$tdataprocessmaker_locking[".exportFields"][] = "startdatetime";
$tdataprocessmaker_locking[".exportFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".exportFields"][] = "keys";
$tdataprocessmaker_locking[".exportFields"][] = "sessionid";
$tdataprocessmaker_locking[".exportFields"][] = "userid";
$tdataprocessmaker_locking[".exportFields"][] = "action";

$tdataprocessmaker_locking[".importFields"] = array();
$tdataprocessmaker_locking[".importFields"][] = "id";
$tdataprocessmaker_locking[".importFields"][] = "table";
$tdataprocessmaker_locking[".importFields"][] = "startdatetime";
$tdataprocessmaker_locking[".importFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".importFields"][] = "keys";
$tdataprocessmaker_locking[".importFields"][] = "sessionid";
$tdataprocessmaker_locking[".importFields"][] = "userid";
$tdataprocessmaker_locking[".importFields"][] = "action";

$tdataprocessmaker_locking[".printFields"] = array();
$tdataprocessmaker_locking[".printFields"][] = "id";
$tdataprocessmaker_locking[".printFields"][] = "table";
$tdataprocessmaker_locking[".printFields"][] = "startdatetime";
$tdataprocessmaker_locking[".printFields"][] = "confirmdatetime";
$tdataprocessmaker_locking[".printFields"][] = "keys";
$tdataprocessmaker_locking[".printFields"][] = "sessionid";
$tdataprocessmaker_locking[".printFields"][] = "userid";
$tdataprocessmaker_locking[".printFields"][] = "action";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdataprocessmaker_locking["id"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","table");
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

		$fdata["strField"] = "table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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




	$tdataprocessmaker_locking["table"] = $fdata;
//	startdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startdatetime";
	$fdata["GoodName"] = "startdatetime";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","startdatetime");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "startdatetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdatetime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataprocessmaker_locking["startdatetime"] = $fdata;
//	confirmdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "confirmdatetime";
	$fdata["GoodName"] = "confirmdatetime";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","confirmdatetime");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "confirmdatetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confirmdatetime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataprocessmaker_locking["confirmdatetime"] = $fdata;
//	keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keys";
	$fdata["GoodName"] = "keys";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","keys");
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

		$fdata["strField"] = "keys";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`keys`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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




	$tdataprocessmaker_locking["keys"] = $fdata;
//	sessionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sessionid";
	$fdata["GoodName"] = "sessionid";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","sessionid");
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

		$fdata["strField"] = "sessionid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sessionid";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataprocessmaker_locking["sessionid"] = $fdata;
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","userid");
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

		$fdata["strField"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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




	$tdataprocessmaker_locking["userid"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "processmaker_locking";
	$fdata["Label"] = GetFieldLabel("processmaker_locking","action");
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

		$fdata["strField"] = "action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataprocessmaker_locking["action"] = $fdata;


$tables_data["processmaker_locking"]=&$tdataprocessmaker_locking;
$field_labels["processmaker_locking"] = &$fieldLabelsprocessmaker_locking;
$fieldToolTips["processmaker_locking"] = &$fieldToolTipsprocessmaker_locking;
$placeHolders["processmaker_locking"] = &$placeHoldersprocessmaker_locking;
$page_titles["processmaker_locking"] = &$pageTitlesprocessmaker_locking;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["processmaker_locking"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["processmaker_locking"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_processmaker_locking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`table`,  	startdatetime,  	confirmdatetime,  	`keys`,  	sessionid,  	userid,  	`action`";
$proto0["m_strFrom"] = "FROM processmaker_locking";
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
	"m_strName" => "id",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "processmaker_locking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto8["m_sql"] = "`table`";
$proto8["m_srcTableName"] = "processmaker_locking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startdatetime",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto10["m_sql"] = "startdatetime";
$proto10["m_srcTableName"] = "processmaker_locking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmdatetime",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto12["m_sql"] = "confirmdatetime";
$proto12["m_srcTableName"] = "processmaker_locking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keys",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto14["m_sql"] = "`keys`";
$proto14["m_srcTableName"] = "processmaker_locking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sessionid",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto16["m_sql"] = "sessionid";
$proto16["m_srcTableName"] = "processmaker_locking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto18["m_sql"] = "userid";
$proto18["m_srcTableName"] = "processmaker_locking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "processmaker_locking",
	"m_srcTableName" => "processmaker_locking"
));

$proto20["m_sql"] = "`action`";
$proto20["m_srcTableName"] = "processmaker_locking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "processmaker_locking";
$proto23["m_srcTableName"] = "processmaker_locking";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "table";
$proto23["m_columns"][] = "startdatetime";
$proto23["m_columns"][] = "confirmdatetime";
$proto23["m_columns"][] = "keys";
$proto23["m_columns"][] = "sessionid";
$proto23["m_columns"][] = "userid";
$proto23["m_columns"][] = "action";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "processmaker_locking";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "processmaker_locking";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="processmaker_locking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_processmaker_locking = createSqlQuery_processmaker_locking();


	
						;

								

$tdataprocessmaker_locking[".sqlquery"] = $queryData_processmaker_locking;

$tableEvents["processmaker_locking"] = new eventsBase;
$tdataprocessmaker_locking[".hasEvents"] = false;

?>
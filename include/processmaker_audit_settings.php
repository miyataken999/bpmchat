<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprocessmaker_audit = array();
	$tdataprocessmaker_audit[".truncateText"] = true;
	$tdataprocessmaker_audit[".NumberOfChars"] = 20;
	$tdataprocessmaker_audit[".ShortName"] = "processmaker_audit";
	$tdataprocessmaker_audit[".OwnerID"] = "";
	$tdataprocessmaker_audit[".OriginalTable"] = "processmaker_audit";

//	field labels
$fieldLabelsprocessmaker_audit = array();
$fieldToolTipsprocessmaker_audit = array();
$pageTitlesprocessmaker_audit = array();
$placeHoldersprocessmaker_audit = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsprocessmaker_audit["Japanese"] = array();
	$fieldToolTipsprocessmaker_audit["Japanese"] = array();
	$placeHoldersprocessmaker_audit["Japanese"] = array();
	$pageTitlesprocessmaker_audit["Japanese"] = array();
	$fieldLabelsprocessmaker_audit["Japanese"]["id"] = "ID";
	$fieldToolTipsprocessmaker_audit["Japanese"]["id"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["id"] = "";
	$fieldLabelsprocessmaker_audit["Japanese"]["datetime"] = "日付時刻";
	$fieldToolTipsprocessmaker_audit["Japanese"]["datetime"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["datetime"] = "";
	$fieldLabelsprocessmaker_audit["Japanese"]["ip"] = "IP";
	$fieldToolTipsprocessmaker_audit["Japanese"]["ip"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["ip"] = "";
	$fieldLabelsprocessmaker_audit["Japanese"]["user"] = "ユーザー";
	$fieldToolTipsprocessmaker_audit["Japanese"]["user"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["user"] = "";
	$fieldLabelsprocessmaker_audit["Japanese"]["table"] = "表";
	$fieldToolTipsprocessmaker_audit["Japanese"]["table"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["table"] = "";
	$fieldLabelsprocessmaker_audit["Japanese"]["action"] = "アクション";
	$fieldToolTipsprocessmaker_audit["Japanese"]["action"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["action"] = "";
	$fieldLabelsprocessmaker_audit["Japanese"]["description"] = "説明";
	$fieldToolTipsprocessmaker_audit["Japanese"]["description"] = "";
	$placeHoldersprocessmaker_audit["Japanese"]["description"] = "";
	if (count($fieldToolTipsprocessmaker_audit["Japanese"]))
		$tdataprocessmaker_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprocessmaker_audit["English"] = array();
	$fieldToolTipsprocessmaker_audit["English"] = array();
	$placeHoldersprocessmaker_audit["English"] = array();
	$pageTitlesprocessmaker_audit["English"] = array();
	$fieldLabelsprocessmaker_audit["English"]["id"] = "ID";
	$fieldToolTipsprocessmaker_audit["English"]["id"] = "";
	$placeHoldersprocessmaker_audit["English"]["id"] = "";
	$fieldLabelsprocessmaker_audit["English"]["datetime"] = "日付時刻";
	$fieldToolTipsprocessmaker_audit["English"]["datetime"] = "";
	$placeHoldersprocessmaker_audit["English"]["datetime"] = "";
	$fieldLabelsprocessmaker_audit["English"]["ip"] = "IP";
	$fieldToolTipsprocessmaker_audit["English"]["ip"] = "";
	$placeHoldersprocessmaker_audit["English"]["ip"] = "";
	$fieldLabelsprocessmaker_audit["English"]["user"] = "ユーザー";
	$fieldToolTipsprocessmaker_audit["English"]["user"] = "";
	$placeHoldersprocessmaker_audit["English"]["user"] = "";
	$fieldLabelsprocessmaker_audit["English"]["table"] = "表";
	$fieldToolTipsprocessmaker_audit["English"]["table"] = "";
	$placeHoldersprocessmaker_audit["English"]["table"] = "";
	$fieldLabelsprocessmaker_audit["English"]["action"] = "アクション";
	$fieldToolTipsprocessmaker_audit["English"]["action"] = "";
	$placeHoldersprocessmaker_audit["English"]["action"] = "";
	$fieldLabelsprocessmaker_audit["English"]["description"] = "説明";
	$fieldToolTipsprocessmaker_audit["English"]["description"] = "";
	$placeHoldersprocessmaker_audit["English"]["description"] = "";
	if (count($fieldToolTipsprocessmaker_audit["English"]))
		$tdataprocessmaker_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprocessmaker_audit[""] = array();
	$fieldToolTipsprocessmaker_audit[""] = array();
	$placeHoldersprocessmaker_audit[""] = array();
	$pageTitlesprocessmaker_audit[""] = array();
	if (count($fieldToolTipsprocessmaker_audit[""]))
		$tdataprocessmaker_audit[".isUseToolTips"] = true;
}


	$tdataprocessmaker_audit[".NCSearch"] = true;



$tdataprocessmaker_audit[".shortTableName"] = "processmaker_audit";
$tdataprocessmaker_audit[".nSecOptions"] = 0;
$tdataprocessmaker_audit[".recsPerRowPrint"] = 1;
$tdataprocessmaker_audit[".mainTableOwnerID"] = "";
$tdataprocessmaker_audit[".moveNext"] = 0;
$tdataprocessmaker_audit[".entityType"] = 0;

$tdataprocessmaker_audit[".strOriginalTableName"] = "processmaker_audit";

	



$tdataprocessmaker_audit[".showAddInPopup"] = false;

$tdataprocessmaker_audit[".showEditInPopup"] = false;

$tdataprocessmaker_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprocessmaker_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprocessmaker_audit[".fieldsForRegister"] = array();
	
$tdataprocessmaker_audit[".listAjax"] = false;

	$tdataprocessmaker_audit[".audit"] = true;

	$tdataprocessmaker_audit[".locking"] = false;

$tdataprocessmaker_audit[".edit"] = true;
$tdataprocessmaker_audit[".afterEditAction"] = 1;
$tdataprocessmaker_audit[".closePopupAfterEdit"] = 1;
$tdataprocessmaker_audit[".afterEditActionDetTable"] = "";

$tdataprocessmaker_audit[".add"] = true;
$tdataprocessmaker_audit[".afterAddAction"] = 1;
$tdataprocessmaker_audit[".closePopupAfterAdd"] = 1;
$tdataprocessmaker_audit[".afterAddActionDetTable"] = "";

$tdataprocessmaker_audit[".list"] = true;

$tdataprocessmaker_audit[".inlineEdit"] = true;


$tdataprocessmaker_audit[".reorderRecordsByHeader"] = true;
$tdataprocessmaker_audit[".createSortByDropdown"] = true;
$tdataprocessmaker_audit[".strSortControlSettingsJSON"] = "";



$tdataprocessmaker_audit[".inlineAdd"] = true;
$tdataprocessmaker_audit[".view"] = true;

$tdataprocessmaker_audit[".import"] = true;

$tdataprocessmaker_audit[".exportTo"] = true;

$tdataprocessmaker_audit[".printFriendly"] = true;

$tdataprocessmaker_audit[".delete"] = true;

$tdataprocessmaker_audit[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataprocessmaker_audit[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataprocessmaker_audit[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataprocessmaker_audit[".searchSaving"] = false;
//

$tdataprocessmaker_audit[".showSearchPanel"] = true;
		$tdataprocessmaker_audit[".flexibleSearch"] = true;

$tdataprocessmaker_audit[".isUseAjaxSuggest"] = true;

$tdataprocessmaker_audit[".rowHighlite"] = true;



				

$tdataprocessmaker_audit[".ajaxCodeSnippetAdded"] = false;

$tdataprocessmaker_audit[".buttonsAdded"] = false;

$tdataprocessmaker_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocessmaker_audit[".isUseTimeForSearch"] = false;





$tdataprocessmaker_audit[".allSearchFields"] = array();
$tdataprocessmaker_audit[".filterFields"] = array();
$tdataprocessmaker_audit[".requiredSearchFields"] = array();

$tdataprocessmaker_audit[".allSearchFields"][] = "id";
	$tdataprocessmaker_audit[".allSearchFields"][] = "datetime";
	$tdataprocessmaker_audit[".allSearchFields"][] = "ip";
	$tdataprocessmaker_audit[".allSearchFields"][] = "user";
	$tdataprocessmaker_audit[".allSearchFields"][] = "table";
	$tdataprocessmaker_audit[".allSearchFields"][] = "action";
	$tdataprocessmaker_audit[".allSearchFields"][] = "description";
	

$tdataprocessmaker_audit[".googleLikeFields"] = array();
$tdataprocessmaker_audit[".googleLikeFields"][] = "id";
$tdataprocessmaker_audit[".googleLikeFields"][] = "datetime";
$tdataprocessmaker_audit[".googleLikeFields"][] = "ip";
$tdataprocessmaker_audit[".googleLikeFields"][] = "user";
$tdataprocessmaker_audit[".googleLikeFields"][] = "table";
$tdataprocessmaker_audit[".googleLikeFields"][] = "action";
$tdataprocessmaker_audit[".googleLikeFields"][] = "description";


$tdataprocessmaker_audit[".advSearchFields"] = array();
$tdataprocessmaker_audit[".advSearchFields"][] = "id";
$tdataprocessmaker_audit[".advSearchFields"][] = "datetime";
$tdataprocessmaker_audit[".advSearchFields"][] = "ip";
$tdataprocessmaker_audit[".advSearchFields"][] = "user";
$tdataprocessmaker_audit[".advSearchFields"][] = "table";
$tdataprocessmaker_audit[".advSearchFields"][] = "action";
$tdataprocessmaker_audit[".advSearchFields"][] = "description";

$tdataprocessmaker_audit[".tableType"] = "list";

$tdataprocessmaker_audit[".printerPageOrientation"] = 0;
$tdataprocessmaker_audit[".nPrinterPageScale"] = 100;

$tdataprocessmaker_audit[".nPrinterSplitRecords"] = 40;

$tdataprocessmaker_audit[".nPrinterPDFSplitRecords"] = 40;



$tdataprocessmaker_audit[".geocodingEnabled"] = false;





$tdataprocessmaker_audit[".listGridLayout"] = 3;


$tdataprocessmaker_audit[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataprocessmaker_audit[".pageSize"] = 20;

$tdataprocessmaker_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprocessmaker_audit[".strOrderBy"] = $tstrOrderBy;

$tdataprocessmaker_audit[".orderindexes"] = array();

$tdataprocessmaker_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdataprocessmaker_audit[".sqlFrom"] = "FROM processmaker_audit";
$tdataprocessmaker_audit[".sqlWhereExpr"] = "";
$tdataprocessmaker_audit[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocessmaker_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocessmaker_audit[".arrGroupsPerPage"] = $arrGPP;

$tdataprocessmaker_audit[".highlightSearchResults"] = true;

$tableKeysprocessmaker_audit = array();
$tableKeysprocessmaker_audit[] = "id";
$tdataprocessmaker_audit[".Keys"] = $tableKeysprocessmaker_audit;

$tdataprocessmaker_audit[".listFields"] = array();
$tdataprocessmaker_audit[".listFields"][] = "id";
$tdataprocessmaker_audit[".listFields"][] = "datetime";
$tdataprocessmaker_audit[".listFields"][] = "ip";
$tdataprocessmaker_audit[".listFields"][] = "user";
$tdataprocessmaker_audit[".listFields"][] = "table";
$tdataprocessmaker_audit[".listFields"][] = "action";
$tdataprocessmaker_audit[".listFields"][] = "description";

$tdataprocessmaker_audit[".hideMobileList"] = array();


$tdataprocessmaker_audit[".viewFields"] = array();
$tdataprocessmaker_audit[".viewFields"][] = "id";
$tdataprocessmaker_audit[".viewFields"][] = "datetime";
$tdataprocessmaker_audit[".viewFields"][] = "ip";
$tdataprocessmaker_audit[".viewFields"][] = "user";
$tdataprocessmaker_audit[".viewFields"][] = "table";
$tdataprocessmaker_audit[".viewFields"][] = "action";
$tdataprocessmaker_audit[".viewFields"][] = "description";

$tdataprocessmaker_audit[".addFields"] = array();
$tdataprocessmaker_audit[".addFields"][] = "datetime";
$tdataprocessmaker_audit[".addFields"][] = "ip";
$tdataprocessmaker_audit[".addFields"][] = "user";
$tdataprocessmaker_audit[".addFields"][] = "table";
$tdataprocessmaker_audit[".addFields"][] = "action";
$tdataprocessmaker_audit[".addFields"][] = "description";

$tdataprocessmaker_audit[".masterListFields"] = array();
$tdataprocessmaker_audit[".masterListFields"][] = "id";
$tdataprocessmaker_audit[".masterListFields"][] = "datetime";
$tdataprocessmaker_audit[".masterListFields"][] = "ip";
$tdataprocessmaker_audit[".masterListFields"][] = "user";
$tdataprocessmaker_audit[".masterListFields"][] = "table";
$tdataprocessmaker_audit[".masterListFields"][] = "action";
$tdataprocessmaker_audit[".masterListFields"][] = "description";

$tdataprocessmaker_audit[".inlineAddFields"] = array();
$tdataprocessmaker_audit[".inlineAddFields"][] = "datetime";
$tdataprocessmaker_audit[".inlineAddFields"][] = "ip";
$tdataprocessmaker_audit[".inlineAddFields"][] = "user";
$tdataprocessmaker_audit[".inlineAddFields"][] = "table";
$tdataprocessmaker_audit[".inlineAddFields"][] = "action";
$tdataprocessmaker_audit[".inlineAddFields"][] = "description";

$tdataprocessmaker_audit[".editFields"] = array();
$tdataprocessmaker_audit[".editFields"][] = "datetime";
$tdataprocessmaker_audit[".editFields"][] = "ip";
$tdataprocessmaker_audit[".editFields"][] = "user";
$tdataprocessmaker_audit[".editFields"][] = "table";
$tdataprocessmaker_audit[".editFields"][] = "action";
$tdataprocessmaker_audit[".editFields"][] = "description";

$tdataprocessmaker_audit[".inlineEditFields"] = array();
$tdataprocessmaker_audit[".inlineEditFields"][] = "datetime";
$tdataprocessmaker_audit[".inlineEditFields"][] = "ip";
$tdataprocessmaker_audit[".inlineEditFields"][] = "user";
$tdataprocessmaker_audit[".inlineEditFields"][] = "table";
$tdataprocessmaker_audit[".inlineEditFields"][] = "action";
$tdataprocessmaker_audit[".inlineEditFields"][] = "description";

$tdataprocessmaker_audit[".updateSelectedFields"] = array();
$tdataprocessmaker_audit[".updateSelectedFields"][] = "datetime";
$tdataprocessmaker_audit[".updateSelectedFields"][] = "ip";
$tdataprocessmaker_audit[".updateSelectedFields"][] = "user";
$tdataprocessmaker_audit[".updateSelectedFields"][] = "table";
$tdataprocessmaker_audit[".updateSelectedFields"][] = "action";
$tdataprocessmaker_audit[".updateSelectedFields"][] = "description";


$tdataprocessmaker_audit[".exportFields"] = array();
$tdataprocessmaker_audit[".exportFields"][] = "id";
$tdataprocessmaker_audit[".exportFields"][] = "datetime";
$tdataprocessmaker_audit[".exportFields"][] = "ip";
$tdataprocessmaker_audit[".exportFields"][] = "user";
$tdataprocessmaker_audit[".exportFields"][] = "table";
$tdataprocessmaker_audit[".exportFields"][] = "action";
$tdataprocessmaker_audit[".exportFields"][] = "description";

$tdataprocessmaker_audit[".importFields"] = array();
$tdataprocessmaker_audit[".importFields"][] = "id";
$tdataprocessmaker_audit[".importFields"][] = "datetime";
$tdataprocessmaker_audit[".importFields"][] = "ip";
$tdataprocessmaker_audit[".importFields"][] = "user";
$tdataprocessmaker_audit[".importFields"][] = "table";
$tdataprocessmaker_audit[".importFields"][] = "action";
$tdataprocessmaker_audit[".importFields"][] = "description";

$tdataprocessmaker_audit[".printFields"] = array();
$tdataprocessmaker_audit[".printFields"][] = "id";
$tdataprocessmaker_audit[".printFields"][] = "datetime";
$tdataprocessmaker_audit[".printFields"][] = "ip";
$tdataprocessmaker_audit[".printFields"][] = "user";
$tdataprocessmaker_audit[".printFields"][] = "table";
$tdataprocessmaker_audit[".printFields"][] = "action";
$tdataprocessmaker_audit[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","id");
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




	$tdataprocessmaker_audit["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","datetime");
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

		$fdata["strField"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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




	$tdataprocessmaker_audit["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","ip");
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

		$fdata["strField"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataprocessmaker_audit["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","user");
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

		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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




	$tdataprocessmaker_audit["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","table");
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




	$tdataprocessmaker_audit["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","action");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";

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




	$tdataprocessmaker_audit["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "processmaker_audit";
	$fdata["Label"] = GetFieldLabel("processmaker_audit","description");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataprocessmaker_audit["description"] = $fdata;


$tables_data["processmaker_audit"]=&$tdataprocessmaker_audit;
$field_labels["processmaker_audit"] = &$fieldLabelsprocessmaker_audit;
$fieldToolTips["processmaker_audit"] = &$fieldToolTipsprocessmaker_audit;
$placeHolders["processmaker_audit"] = &$placeHoldersprocessmaker_audit;
$page_titles["processmaker_audit"] = &$pageTitlesprocessmaker_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["processmaker_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["processmaker_audit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_processmaker_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM processmaker_audit";
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
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "processmaker_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "processmaker_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "processmaker_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "processmaker_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "processmaker_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "processmaker_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "processmaker_audit",
	"m_srcTableName" => "processmaker_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "processmaker_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "processmaker_audit";
$proto21["m_srcTableName"] = "processmaker_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "processmaker_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "processmaker_audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="processmaker_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_processmaker_audit = createSqlQuery_processmaker_audit();


	
						;

							

$tdataprocessmaker_audit[".sqlquery"] = $queryData_processmaker_audit;

$tableEvents["processmaker_audit"] = new eventsBase;
$tdataprocessmaker_audit[".hasEvents"] = false;

?>
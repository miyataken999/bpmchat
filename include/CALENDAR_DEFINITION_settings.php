<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCALENDAR_DEFINITION = array();
	$tdataCALENDAR_DEFINITION[".truncateText"] = true;
	$tdataCALENDAR_DEFINITION[".NumberOfChars"] = 80;
	$tdataCALENDAR_DEFINITION[".ShortName"] = "CALENDAR_DEFINITION";
	$tdataCALENDAR_DEFINITION[".OwnerID"] = "";
	$tdataCALENDAR_DEFINITION[".OriginalTable"] = "CALENDAR_DEFINITION";

//	field labels
$fieldLabelsCALENDAR_DEFINITION = array();
$fieldToolTipsCALENDAR_DEFINITION = array();
$pageTitlesCALENDAR_DEFINITION = array();
$placeHoldersCALENDAR_DEFINITION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsCALENDAR_DEFINITION["Japanese"] = array();
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"] = array();
	$placeHoldersCALENDAR_DEFINITION["Japanese"] = array();
	$pageTitlesCALENDAR_DEFINITION["Japanese"] = array();
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_NAME"] = "CALENDAR NAME";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_NAME"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_NAME"] = "";
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_CREATE_DATE"] = "CALENDAR CREATE DATE";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_CREATE_DATE"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_CREATE_DATE"] = "";
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_UPDATE_DATE"] = "CALENDAR UPDATE DATE";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_UPDATE_DATE"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_UPDATE_DATE"] = "";
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_WORK_DAYS"] = "CALENDAR WORK DAYS";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_WORK_DAYS"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_WORK_DAYS"] = "";
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_DESCRIPTION"] = "CALENDAR DESCRIPTION";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_DESCRIPTION"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_DESCRIPTION"] = "";
	$fieldLabelsCALENDAR_DEFINITION["Japanese"]["CALENDAR_STATUS"] = "CALENDAR STATUS";
	$fieldToolTipsCALENDAR_DEFINITION["Japanese"]["CALENDAR_STATUS"] = "";
	$placeHoldersCALENDAR_DEFINITION["Japanese"]["CALENDAR_STATUS"] = "";
	if (count($fieldToolTipsCALENDAR_DEFINITION["Japanese"]))
		$tdataCALENDAR_DEFINITION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCALENDAR_DEFINITION["English"] = array();
	$fieldToolTipsCALENDAR_DEFINITION["English"] = array();
	$placeHoldersCALENDAR_DEFINITION["English"] = array();
	$pageTitlesCALENDAR_DEFINITION["English"] = array();
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_NAME"] = "CALENDAR NAME";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_NAME"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_NAME"] = "";
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_CREATE_DATE"] = "CALENDAR CREATE DATE";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_CREATE_DATE"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_CREATE_DATE"] = "";
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_UPDATE_DATE"] = "CALENDAR UPDATE DATE";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_UPDATE_DATE"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_UPDATE_DATE"] = "";
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_WORK_DAYS"] = "CALENDAR WORK DAYS";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_WORK_DAYS"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_WORK_DAYS"] = "";
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_DESCRIPTION"] = "CALENDAR DESCRIPTION";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_DESCRIPTION"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_DESCRIPTION"] = "";
	$fieldLabelsCALENDAR_DEFINITION["English"]["CALENDAR_STATUS"] = "CALENDAR STATUS";
	$fieldToolTipsCALENDAR_DEFINITION["English"]["CALENDAR_STATUS"] = "";
	$placeHoldersCALENDAR_DEFINITION["English"]["CALENDAR_STATUS"] = "";
	if (count($fieldToolTipsCALENDAR_DEFINITION["English"]))
		$tdataCALENDAR_DEFINITION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCALENDAR_DEFINITION[""] = array();
	$fieldToolTipsCALENDAR_DEFINITION[""] = array();
	$placeHoldersCALENDAR_DEFINITION[""] = array();
	$pageTitlesCALENDAR_DEFINITION[""] = array();
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_UID"] = "CALENDAR UID";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_UID"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_UID"] = "";
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_NAME"] = "CALENDAR NAME";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_NAME"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_NAME"] = "";
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_CREATE_DATE"] = "CALENDAR CREATE DATE";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_CREATE_DATE"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_CREATE_DATE"] = "";
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_UPDATE_DATE"] = "CALENDAR UPDATE DATE";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_UPDATE_DATE"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_UPDATE_DATE"] = "";
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_WORK_DAYS"] = "CALENDAR WORK DAYS";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_WORK_DAYS"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_WORK_DAYS"] = "";
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_DESCRIPTION"] = "CALENDAR DESCRIPTION";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_DESCRIPTION"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_DESCRIPTION"] = "";
	$fieldLabelsCALENDAR_DEFINITION[""]["CALENDAR_STATUS"] = "CALENDAR STATUS";
	$fieldToolTipsCALENDAR_DEFINITION[""]["CALENDAR_STATUS"] = "";
	$placeHoldersCALENDAR_DEFINITION[""]["CALENDAR_STATUS"] = "";
	if (count($fieldToolTipsCALENDAR_DEFINITION[""]))
		$tdataCALENDAR_DEFINITION[".isUseToolTips"] = true;
}


	$tdataCALENDAR_DEFINITION[".NCSearch"] = true;



$tdataCALENDAR_DEFINITION[".shortTableName"] = "CALENDAR_DEFINITION";
$tdataCALENDAR_DEFINITION[".nSecOptions"] = 0;
$tdataCALENDAR_DEFINITION[".recsPerRowPrint"] = 1;
$tdataCALENDAR_DEFINITION[".mainTableOwnerID"] = "";
$tdataCALENDAR_DEFINITION[".moveNext"] = 1;
$tdataCALENDAR_DEFINITION[".entityType"] = 0;

$tdataCALENDAR_DEFINITION[".strOriginalTableName"] = "CALENDAR_DEFINITION";

	



$tdataCALENDAR_DEFINITION[".showAddInPopup"] = false;

$tdataCALENDAR_DEFINITION[".showEditInPopup"] = false;

$tdataCALENDAR_DEFINITION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCALENDAR_DEFINITION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCALENDAR_DEFINITION[".fieldsForRegister"] = array();
	
$tdataCALENDAR_DEFINITION[".listAjax"] = false;

	$tdataCALENDAR_DEFINITION[".audit"] = false;

	$tdataCALENDAR_DEFINITION[".locking"] = false;

$tdataCALENDAR_DEFINITION[".edit"] = true;
$tdataCALENDAR_DEFINITION[".afterEditAction"] = 1;
$tdataCALENDAR_DEFINITION[".closePopupAfterEdit"] = 1;
$tdataCALENDAR_DEFINITION[".afterEditActionDetTable"] = "";

$tdataCALENDAR_DEFINITION[".add"] = true;
$tdataCALENDAR_DEFINITION[".afterAddAction"] = 1;
$tdataCALENDAR_DEFINITION[".closePopupAfterAdd"] = 1;
$tdataCALENDAR_DEFINITION[".afterAddActionDetTable"] = "";

$tdataCALENDAR_DEFINITION[".list"] = true;



$tdataCALENDAR_DEFINITION[".reorderRecordsByHeader"] = true;



$tdataCALENDAR_DEFINITION[".view"] = true;

$tdataCALENDAR_DEFINITION[".import"] = true;

$tdataCALENDAR_DEFINITION[".exportTo"] = true;

$tdataCALENDAR_DEFINITION[".printFriendly"] = true;

$tdataCALENDAR_DEFINITION[".delete"] = true;

$tdataCALENDAR_DEFINITION[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCALENDAR_DEFINITION[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCALENDAR_DEFINITION[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCALENDAR_DEFINITION[".searchSaving"] = false;
//

$tdataCALENDAR_DEFINITION[".showSearchPanel"] = true;
		$tdataCALENDAR_DEFINITION[".flexibleSearch"] = true;

$tdataCALENDAR_DEFINITION[".isUseAjaxSuggest"] = true;

$tdataCALENDAR_DEFINITION[".rowHighlite"] = true;



				

$tdataCALENDAR_DEFINITION[".ajaxCodeSnippetAdded"] = false;

$tdataCALENDAR_DEFINITION[".buttonsAdded"] = false;

$tdataCALENDAR_DEFINITION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCALENDAR_DEFINITION[".isUseTimeForSearch"] = false;





$tdataCALENDAR_DEFINITION[".allSearchFields"] = array();
$tdataCALENDAR_DEFINITION[".filterFields"] = array();
$tdataCALENDAR_DEFINITION[".requiredSearchFields"] = array();

$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_UID";
	$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_NAME";
	$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_CREATE_DATE";
	$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_UPDATE_DATE";
	$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_WORK_DAYS";
	$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_DESCRIPTION";
	$tdataCALENDAR_DEFINITION[".allSearchFields"][] = "CALENDAR_STATUS";
	

$tdataCALENDAR_DEFINITION[".googleLikeFields"] = array();
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".googleLikeFields"][] = "CALENDAR_STATUS";


$tdataCALENDAR_DEFINITION[".advSearchFields"] = array();
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".advSearchFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".tableType"] = "list";

$tdataCALENDAR_DEFINITION[".printerPageOrientation"] = 0;
$tdataCALENDAR_DEFINITION[".nPrinterPageScale"] = 100;

$tdataCALENDAR_DEFINITION[".nPrinterSplitRecords"] = 40;

$tdataCALENDAR_DEFINITION[".nPrinterPDFSplitRecords"] = 40;



$tdataCALENDAR_DEFINITION[".geocodingEnabled"] = false;





$tdataCALENDAR_DEFINITION[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataCALENDAR_DEFINITION[".pageSize"] = 20;

$tdataCALENDAR_DEFINITION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCALENDAR_DEFINITION[".strOrderBy"] = $tstrOrderBy;

$tdataCALENDAR_DEFINITION[".orderindexes"] = array();

$tdataCALENDAR_DEFINITION[".sqlHead"] = "SELECT CALENDAR_UID,  	CALENDAR_NAME,  	CALENDAR_CREATE_DATE,  	CALENDAR_UPDATE_DATE,  	CALENDAR_WORK_DAYS,  	CALENDAR_DESCRIPTION,  	CALENDAR_STATUS";
$tdataCALENDAR_DEFINITION[".sqlFrom"] = "FROM CALENDAR_DEFINITION";
$tdataCALENDAR_DEFINITION[".sqlWhereExpr"] = "";
$tdataCALENDAR_DEFINITION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCALENDAR_DEFINITION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCALENDAR_DEFINITION[".arrGroupsPerPage"] = $arrGPP;

$tdataCALENDAR_DEFINITION[".highlightSearchResults"] = true;

$tableKeysCALENDAR_DEFINITION = array();
$tableKeysCALENDAR_DEFINITION[] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".Keys"] = $tableKeysCALENDAR_DEFINITION;

$tdataCALENDAR_DEFINITION[".listFields"] = array();
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".listFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".hideMobileList"] = array();


$tdataCALENDAR_DEFINITION[".viewFields"] = array();
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".viewFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".addFields"] = array();
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".addFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".masterListFields"] = array();
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".masterListFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".inlineAddFields"] = array();
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".inlineAddFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".editFields"] = array();
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".editFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".inlineEditFields"] = array();
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".inlineEditFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".updateSelectedFields"] = array();
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".updateSelectedFields"][] = "CALENDAR_STATUS";


$tdataCALENDAR_DEFINITION[".exportFields"] = array();
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".exportFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".importFields"] = array();
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".importFields"][] = "CALENDAR_STATUS";

$tdataCALENDAR_DEFINITION[".printFields"] = array();
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_UID";
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_NAME";
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_CREATE_DATE";
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_UPDATE_DATE";
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_WORK_DAYS";
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_DESCRIPTION";
$tdataCALENDAR_DEFINITION[".printFields"][] = "CALENDAR_STATUS";

//	CALENDAR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CALENDAR_UID";
	$fdata["GoodName"] = "CALENDAR_UID";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_UID");
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




	$tdataCALENDAR_DEFINITION["CALENDAR_UID"] = $fdata;
//	CALENDAR_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CALENDAR_NAME";
	$fdata["GoodName"] = "CALENDAR_NAME";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_NAME");
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

		$fdata["strField"] = "CALENDAR_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_NAME";

	
	
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




	$tdataCALENDAR_DEFINITION["CALENDAR_NAME"] = $fdata;
//	CALENDAR_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CALENDAR_CREATE_DATE";
	$fdata["GoodName"] = "CALENDAR_CREATE_DATE";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_CREATE_DATE");
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

		$fdata["strField"] = "CALENDAR_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_CREATE_DATE";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataCALENDAR_DEFINITION["CALENDAR_CREATE_DATE"] = $fdata;
//	CALENDAR_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CALENDAR_UPDATE_DATE";
	$fdata["GoodName"] = "CALENDAR_UPDATE_DATE";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_UPDATE_DATE");
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

		$fdata["strField"] = "CALENDAR_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_UPDATE_DATE";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataCALENDAR_DEFINITION["CALENDAR_UPDATE_DATE"] = $fdata;
//	CALENDAR_WORK_DAYS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CALENDAR_WORK_DAYS";
	$fdata["GoodName"] = "CALENDAR_WORK_DAYS";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_WORK_DAYS");
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

		$fdata["strField"] = "CALENDAR_WORK_DAYS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_WORK_DAYS";

	
	
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




	$tdataCALENDAR_DEFINITION["CALENDAR_WORK_DAYS"] = $fdata;
//	CALENDAR_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CALENDAR_DESCRIPTION";
	$fdata["GoodName"] = "CALENDAR_DESCRIPTION";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_DESCRIPTION");
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

		$fdata["strField"] = "CALENDAR_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_DESCRIPTION";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataCALENDAR_DEFINITION["CALENDAR_DESCRIPTION"] = $fdata;
//	CALENDAR_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CALENDAR_STATUS";
	$fdata["GoodName"] = "CALENDAR_STATUS";
	$fdata["ownerTable"] = "CALENDAR_DEFINITION";
	$fdata["Label"] = GetFieldLabel("CALENDAR_DEFINITION","CALENDAR_STATUS");
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

		$fdata["strField"] = "CALENDAR_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CALENDAR_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataCALENDAR_DEFINITION["CALENDAR_STATUS"] = $fdata;


$tables_data["CALENDAR_DEFINITION"]=&$tdataCALENDAR_DEFINITION;
$field_labels["CALENDAR_DEFINITION"] = &$fieldLabelsCALENDAR_DEFINITION;
$fieldToolTips["CALENDAR_DEFINITION"] = &$fieldToolTipsCALENDAR_DEFINITION;
$placeHolders["CALENDAR_DEFINITION"] = &$placeHoldersCALENDAR_DEFINITION;
$page_titles["CALENDAR_DEFINITION"] = &$pageTitlesCALENDAR_DEFINITION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CALENDAR_DEFINITION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CALENDAR_DEFINITION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CALENDAR_DEFINITION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CALENDAR_UID,  	CALENDAR_NAME,  	CALENDAR_CREATE_DATE,  	CALENDAR_UPDATE_DATE,  	CALENDAR_WORK_DAYS,  	CALENDAR_DESCRIPTION,  	CALENDAR_STATUS";
$proto0["m_strFrom"] = "FROM CALENDAR_DEFINITION";
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
	"m_strName" => "CALENDAR_UID",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto6["m_sql"] = "CALENDAR_UID";
$proto6["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_NAME",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto8["m_sql"] = "CALENDAR_NAME";
$proto8["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_CREATE_DATE",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto10["m_sql"] = "CALENDAR_CREATE_DATE";
$proto10["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_UPDATE_DATE",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto12["m_sql"] = "CALENDAR_UPDATE_DATE";
$proto12["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_WORK_DAYS",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto14["m_sql"] = "CALENDAR_WORK_DAYS";
$proto14["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_DESCRIPTION",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto16["m_sql"] = "CALENDAR_DESCRIPTION";
$proto16["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CALENDAR_STATUS",
	"m_strTable" => "CALENDAR_DEFINITION",
	"m_srcTableName" => "CALENDAR_DEFINITION"
));

$proto18["m_sql"] = "CALENDAR_STATUS";
$proto18["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "CALENDAR_DEFINITION";
$proto21["m_srcTableName"] = "CALENDAR_DEFINITION";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "CALENDAR_UID";
$proto21["m_columns"][] = "CALENDAR_NAME";
$proto21["m_columns"][] = "CALENDAR_CREATE_DATE";
$proto21["m_columns"][] = "CALENDAR_UPDATE_DATE";
$proto21["m_columns"][] = "CALENDAR_WORK_DAYS";
$proto21["m_columns"][] = "CALENDAR_DESCRIPTION";
$proto21["m_columns"][] = "CALENDAR_STATUS";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "CALENDAR_DEFINITION";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "CALENDAR_DEFINITION";
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
$proto0["m_srcTableName"]="CALENDAR_DEFINITION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CALENDAR_DEFINITION = createSqlQuery_CALENDAR_DEFINITION();


	
						;

							

$tdataCALENDAR_DEFINITION[".sqlquery"] = $queryData_CALENDAR_DEFINITION;

$tableEvents["CALENDAR_DEFINITION"] = new eventsBase;
$tdataCALENDAR_DEFINITION[".hasEvents"] = false;

?>
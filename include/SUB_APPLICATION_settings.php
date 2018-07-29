<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSUB_APPLICATION = array();
	$tdataSUB_APPLICATION[".truncateText"] = true;
	$tdataSUB_APPLICATION[".NumberOfChars"] = 20;
	$tdataSUB_APPLICATION[".ShortName"] = "SUB_APPLICATION";
	$tdataSUB_APPLICATION[".OwnerID"] = "";
	$tdataSUB_APPLICATION[".OriginalTable"] = "SUB_APPLICATION";

//	field labels
$fieldLabelsSUB_APPLICATION = array();
$fieldToolTipsSUB_APPLICATION = array();
$pageTitlesSUB_APPLICATION = array();
$placeHoldersSUB_APPLICATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsSUB_APPLICATION["Japanese"] = array();
	$fieldToolTipsSUB_APPLICATION["Japanese"] = array();
	$placeHoldersSUB_APPLICATION["Japanese"] = array();
	$pageTitlesSUB_APPLICATION["Japanese"] = array();
	$fieldLabelsSUB_APPLICATION["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["APP_UID"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["APP_UID"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["APP_PARENT"] = "アプリの親";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["APP_PARENT"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["APP_PARENT"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["DEL_INDEX_PARENT"] = "デルインデックスの親";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["DEL_INDEX_PARENT"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["DEL_INDEX_PARENT"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["DEL_THREAD_PARENT"] = "デルスレッドの親";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["DEL_THREAD_PARENT"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["DEL_THREAD_PARENT"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["SA_STATUS"] = "SAのステータス";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["SA_STATUS"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["SA_STATUS"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["SA_VALUES_OUT"] = "SA値アウト";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["SA_VALUES_OUT"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["SA_VALUES_OUT"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["SA_VALUES_IN"] = "SA値の";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["SA_VALUES_IN"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["SA_VALUES_IN"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["SA_INIT_DATE"] = "SAのinit日";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["SA_INIT_DATE"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["SA_INIT_DATE"] = "";
	$fieldLabelsSUB_APPLICATION["Japanese"]["SA_FINISH_DATE"] = "SAの終了日";
	$fieldToolTipsSUB_APPLICATION["Japanese"]["SA_FINISH_DATE"] = "";
	$placeHoldersSUB_APPLICATION["Japanese"]["SA_FINISH_DATE"] = "";
	if (count($fieldToolTipsSUB_APPLICATION["Japanese"]))
		$tdataSUB_APPLICATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSUB_APPLICATION["English"] = array();
	$fieldToolTipsSUB_APPLICATION["English"] = array();
	$placeHoldersSUB_APPLICATION["English"] = array();
	$pageTitlesSUB_APPLICATION["English"] = array();
	$fieldLabelsSUB_APPLICATION["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsSUB_APPLICATION["English"]["APP_UID"] = "";
	$placeHoldersSUB_APPLICATION["English"]["APP_UID"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["APP_PARENT"] = "アプリの親";
	$fieldToolTipsSUB_APPLICATION["English"]["APP_PARENT"] = "";
	$placeHoldersSUB_APPLICATION["English"]["APP_PARENT"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["DEL_INDEX_PARENT"] = "デルインデックスの親";
	$fieldToolTipsSUB_APPLICATION["English"]["DEL_INDEX_PARENT"] = "";
	$placeHoldersSUB_APPLICATION["English"]["DEL_INDEX_PARENT"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["DEL_THREAD_PARENT"] = "デルスレッドの親";
	$fieldToolTipsSUB_APPLICATION["English"]["DEL_THREAD_PARENT"] = "";
	$placeHoldersSUB_APPLICATION["English"]["DEL_THREAD_PARENT"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["SA_STATUS"] = "SAのステータス";
	$fieldToolTipsSUB_APPLICATION["English"]["SA_STATUS"] = "";
	$placeHoldersSUB_APPLICATION["English"]["SA_STATUS"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["SA_VALUES_OUT"] = "SA値アウト";
	$fieldToolTipsSUB_APPLICATION["English"]["SA_VALUES_OUT"] = "";
	$placeHoldersSUB_APPLICATION["English"]["SA_VALUES_OUT"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["SA_VALUES_IN"] = "SA値の";
	$fieldToolTipsSUB_APPLICATION["English"]["SA_VALUES_IN"] = "";
	$placeHoldersSUB_APPLICATION["English"]["SA_VALUES_IN"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["SA_INIT_DATE"] = "SAのinit日";
	$fieldToolTipsSUB_APPLICATION["English"]["SA_INIT_DATE"] = "";
	$placeHoldersSUB_APPLICATION["English"]["SA_INIT_DATE"] = "";
	$fieldLabelsSUB_APPLICATION["English"]["SA_FINISH_DATE"] = "SAの終了日";
	$fieldToolTipsSUB_APPLICATION["English"]["SA_FINISH_DATE"] = "";
	$placeHoldersSUB_APPLICATION["English"]["SA_FINISH_DATE"] = "";
	if (count($fieldToolTipsSUB_APPLICATION["English"]))
		$tdataSUB_APPLICATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSUB_APPLICATION[""] = array();
	$fieldToolTipsSUB_APPLICATION[""] = array();
	$placeHoldersSUB_APPLICATION[""] = array();
	$pageTitlesSUB_APPLICATION[""] = array();
	if (count($fieldToolTipsSUB_APPLICATION[""]))
		$tdataSUB_APPLICATION[".isUseToolTips"] = true;
}


	$tdataSUB_APPLICATION[".NCSearch"] = true;



$tdataSUB_APPLICATION[".shortTableName"] = "SUB_APPLICATION";
$tdataSUB_APPLICATION[".nSecOptions"] = 0;
$tdataSUB_APPLICATION[".recsPerRowPrint"] = 1;
$tdataSUB_APPLICATION[".mainTableOwnerID"] = "";
$tdataSUB_APPLICATION[".moveNext"] = 0;
$tdataSUB_APPLICATION[".entityType"] = 0;

$tdataSUB_APPLICATION[".strOriginalTableName"] = "SUB_APPLICATION";

	



$tdataSUB_APPLICATION[".showAddInPopup"] = false;

$tdataSUB_APPLICATION[".showEditInPopup"] = false;

$tdataSUB_APPLICATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSUB_APPLICATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSUB_APPLICATION[".fieldsForRegister"] = array();
	
$tdataSUB_APPLICATION[".listAjax"] = false;

	$tdataSUB_APPLICATION[".audit"] = true;

	$tdataSUB_APPLICATION[".locking"] = false;

$tdataSUB_APPLICATION[".edit"] = true;
$tdataSUB_APPLICATION[".afterEditAction"] = 1;
$tdataSUB_APPLICATION[".closePopupAfterEdit"] = 1;
$tdataSUB_APPLICATION[".afterEditActionDetTable"] = "";

$tdataSUB_APPLICATION[".add"] = true;
$tdataSUB_APPLICATION[".afterAddAction"] = 1;
$tdataSUB_APPLICATION[".closePopupAfterAdd"] = 1;
$tdataSUB_APPLICATION[".afterAddActionDetTable"] = "";

$tdataSUB_APPLICATION[".list"] = true;

$tdataSUB_APPLICATION[".inlineEdit"] = true;


$tdataSUB_APPLICATION[".reorderRecordsByHeader"] = true;
$tdataSUB_APPLICATION[".createSortByDropdown"] = true;
$tdataSUB_APPLICATION[".strSortControlSettingsJSON"] = "";



$tdataSUB_APPLICATION[".inlineAdd"] = true;
$tdataSUB_APPLICATION[".view"] = true;

$tdataSUB_APPLICATION[".import"] = true;

$tdataSUB_APPLICATION[".exportTo"] = true;

$tdataSUB_APPLICATION[".printFriendly"] = true;

$tdataSUB_APPLICATION[".delete"] = true;

$tdataSUB_APPLICATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataSUB_APPLICATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataSUB_APPLICATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataSUB_APPLICATION[".searchSaving"] = false;
//

$tdataSUB_APPLICATION[".showSearchPanel"] = true;
		$tdataSUB_APPLICATION[".flexibleSearch"] = true;

$tdataSUB_APPLICATION[".isUseAjaxSuggest"] = true;

$tdataSUB_APPLICATION[".rowHighlite"] = true;



				

$tdataSUB_APPLICATION[".ajaxCodeSnippetAdded"] = false;

$tdataSUB_APPLICATION[".buttonsAdded"] = false;

$tdataSUB_APPLICATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSUB_APPLICATION[".isUseTimeForSearch"] = false;





$tdataSUB_APPLICATION[".allSearchFields"] = array();
$tdataSUB_APPLICATION[".filterFields"] = array();
$tdataSUB_APPLICATION[".requiredSearchFields"] = array();

$tdataSUB_APPLICATION[".allSearchFields"][] = "APP_UID";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "APP_PARENT";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "DEL_INDEX_PARENT";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "DEL_THREAD_PARENT";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "SA_STATUS";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "SA_VALUES_OUT";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "SA_VALUES_IN";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "SA_INIT_DATE";
	$tdataSUB_APPLICATION[".allSearchFields"][] = "SA_FINISH_DATE";
	

$tdataSUB_APPLICATION[".googleLikeFields"] = array();
$tdataSUB_APPLICATION[".googleLikeFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".googleLikeFields"][] = "SA_FINISH_DATE";


$tdataSUB_APPLICATION[".advSearchFields"] = array();
$tdataSUB_APPLICATION[".advSearchFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".advSearchFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".advSearchFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".advSearchFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".advSearchFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".advSearchFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".advSearchFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".advSearchFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".advSearchFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".tableType"] = "list";

$tdataSUB_APPLICATION[".printerPageOrientation"] = 0;
$tdataSUB_APPLICATION[".nPrinterPageScale"] = 100;

$tdataSUB_APPLICATION[".nPrinterSplitRecords"] = 40;

$tdataSUB_APPLICATION[".nPrinterPDFSplitRecords"] = 40;



$tdataSUB_APPLICATION[".geocodingEnabled"] = false;





$tdataSUB_APPLICATION[".listGridLayout"] = 3;


$tdataSUB_APPLICATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataSUB_APPLICATION[".pageSize"] = 20;

$tdataSUB_APPLICATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSUB_APPLICATION[".strOrderBy"] = $tstrOrderBy;

$tdataSUB_APPLICATION[".orderindexes"] = array();

$tdataSUB_APPLICATION[".sqlHead"] = "SELECT APP_UID,  	APP_PARENT,  	DEL_INDEX_PARENT,  	DEL_THREAD_PARENT,  	SA_STATUS,  	SA_VALUES_OUT,  	SA_VALUES_IN,  	SA_INIT_DATE,  	SA_FINISH_DATE";
$tdataSUB_APPLICATION[".sqlFrom"] = "FROM SUB_APPLICATION";
$tdataSUB_APPLICATION[".sqlWhereExpr"] = "";
$tdataSUB_APPLICATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSUB_APPLICATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSUB_APPLICATION[".arrGroupsPerPage"] = $arrGPP;

$tdataSUB_APPLICATION[".highlightSearchResults"] = true;

$tableKeysSUB_APPLICATION = array();
$tableKeysSUB_APPLICATION[] = "APP_UID";
$tableKeysSUB_APPLICATION[] = "APP_PARENT";
$tableKeysSUB_APPLICATION[] = "DEL_INDEX_PARENT";
$tableKeysSUB_APPLICATION[] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".Keys"] = $tableKeysSUB_APPLICATION;

$tdataSUB_APPLICATION[".listFields"] = array();
$tdataSUB_APPLICATION[".listFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".listFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".listFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".listFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".listFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".listFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".listFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".listFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".listFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".hideMobileList"] = array();


$tdataSUB_APPLICATION[".viewFields"] = array();
$tdataSUB_APPLICATION[".viewFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".viewFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".viewFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".viewFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".viewFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".viewFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".viewFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".viewFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".viewFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".addFields"] = array();
$tdataSUB_APPLICATION[".addFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".addFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".addFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".addFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".addFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".addFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".addFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".addFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".addFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".masterListFields"] = array();
$tdataSUB_APPLICATION[".masterListFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".masterListFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".masterListFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".masterListFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".masterListFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".masterListFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".masterListFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".masterListFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".masterListFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".inlineAddFields"] = array();
$tdataSUB_APPLICATION[".inlineAddFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".inlineAddFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".editFields"] = array();
$tdataSUB_APPLICATION[".editFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".editFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".editFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".editFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".editFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".editFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".editFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".editFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".editFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".inlineEditFields"] = array();
$tdataSUB_APPLICATION[".inlineEditFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".inlineEditFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".updateSelectedFields"] = array();
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".updateSelectedFields"][] = "SA_FINISH_DATE";


$tdataSUB_APPLICATION[".exportFields"] = array();
$tdataSUB_APPLICATION[".exportFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".exportFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".exportFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".exportFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".exportFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".exportFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".exportFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".exportFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".exportFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".importFields"] = array();
$tdataSUB_APPLICATION[".importFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".importFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".importFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".importFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".importFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".importFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".importFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".importFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".importFields"][] = "SA_FINISH_DATE";

$tdataSUB_APPLICATION[".printFields"] = array();
$tdataSUB_APPLICATION[".printFields"][] = "APP_UID";
$tdataSUB_APPLICATION[".printFields"][] = "APP_PARENT";
$tdataSUB_APPLICATION[".printFields"][] = "DEL_INDEX_PARENT";
$tdataSUB_APPLICATION[".printFields"][] = "DEL_THREAD_PARENT";
$tdataSUB_APPLICATION[".printFields"][] = "SA_STATUS";
$tdataSUB_APPLICATION[".printFields"][] = "SA_VALUES_OUT";
$tdataSUB_APPLICATION[".printFields"][] = "SA_VALUES_IN";
$tdataSUB_APPLICATION[".printFields"][] = "SA_INIT_DATE";
$tdataSUB_APPLICATION[".printFields"][] = "SA_FINISH_DATE";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","APP_UID");
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

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UID";

	
	
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




	$tdataSUB_APPLICATION["APP_UID"] = $fdata;
//	APP_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_PARENT";
	$fdata["GoodName"] = "APP_PARENT";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","APP_PARENT");
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

		$fdata["strField"] = "APP_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PARENT";

	
	
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




	$tdataSUB_APPLICATION["APP_PARENT"] = $fdata;
//	DEL_INDEX_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEL_INDEX_PARENT";
	$fdata["GoodName"] = "DEL_INDEX_PARENT";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","DEL_INDEX_PARENT");
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

		$fdata["strField"] = "DEL_INDEX_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX_PARENT";

	
	
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




	$tdataSUB_APPLICATION["DEL_INDEX_PARENT"] = $fdata;
//	DEL_THREAD_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEL_THREAD_PARENT";
	$fdata["GoodName"] = "DEL_THREAD_PARENT";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","DEL_THREAD_PARENT");
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

		$fdata["strField"] = "DEL_THREAD_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_THREAD_PARENT";

	
	
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




	$tdataSUB_APPLICATION["DEL_THREAD_PARENT"] = $fdata;
//	SA_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SA_STATUS";
	$fdata["GoodName"] = "SA_STATUS";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","SA_STATUS");
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

		$fdata["strField"] = "SA_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA_STATUS";

	
	
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




	$tdataSUB_APPLICATION["SA_STATUS"] = $fdata;
//	SA_VALUES_OUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SA_VALUES_OUT";
	$fdata["GoodName"] = "SA_VALUES_OUT";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","SA_VALUES_OUT");
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

		$fdata["strField"] = "SA_VALUES_OUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA_VALUES_OUT";

	
	
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




	$tdataSUB_APPLICATION["SA_VALUES_OUT"] = $fdata;
//	SA_VALUES_IN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SA_VALUES_IN";
	$fdata["GoodName"] = "SA_VALUES_IN";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","SA_VALUES_IN");
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

		$fdata["strField"] = "SA_VALUES_IN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA_VALUES_IN";

	
	
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




	$tdataSUB_APPLICATION["SA_VALUES_IN"] = $fdata;
//	SA_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SA_INIT_DATE";
	$fdata["GoodName"] = "SA_INIT_DATE";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","SA_INIT_DATE");
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

		$fdata["strField"] = "SA_INIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA_INIT_DATE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataSUB_APPLICATION["SA_INIT_DATE"] = $fdata;
//	SA_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SA_FINISH_DATE";
	$fdata["GoodName"] = "SA_FINISH_DATE";
	$fdata["ownerTable"] = "SUB_APPLICATION";
	$fdata["Label"] = GetFieldLabel("SUB_APPLICATION","SA_FINISH_DATE");
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

		$fdata["strField"] = "SA_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SA_FINISH_DATE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataSUB_APPLICATION["SA_FINISH_DATE"] = $fdata;


$tables_data["SUB_APPLICATION"]=&$tdataSUB_APPLICATION;
$field_labels["SUB_APPLICATION"] = &$fieldLabelsSUB_APPLICATION;
$fieldToolTips["SUB_APPLICATION"] = &$fieldToolTipsSUB_APPLICATION;
$placeHolders["SUB_APPLICATION"] = &$placeHoldersSUB_APPLICATION;
$page_titles["SUB_APPLICATION"] = &$pageTitlesSUB_APPLICATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SUB_APPLICATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SUB_APPLICATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SUB_APPLICATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_PARENT,  	DEL_INDEX_PARENT,  	DEL_THREAD_PARENT,  	SA_STATUS,  	SA_VALUES_OUT,  	SA_VALUES_IN,  	SA_INIT_DATE,  	SA_FINISH_DATE";
$proto0["m_strFrom"] = "FROM SUB_APPLICATION";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "SUB_APPLICATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PARENT",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto8["m_sql"] = "APP_PARENT";
$proto8["m_srcTableName"] = "SUB_APPLICATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX_PARENT",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto10["m_sql"] = "DEL_INDEX_PARENT";
$proto10["m_srcTableName"] = "SUB_APPLICATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_THREAD_PARENT",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto12["m_sql"] = "DEL_THREAD_PARENT";
$proto12["m_srcTableName"] = "SUB_APPLICATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SA_STATUS",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto14["m_sql"] = "SA_STATUS";
$proto14["m_srcTableName"] = "SUB_APPLICATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SA_VALUES_OUT",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto16["m_sql"] = "SA_VALUES_OUT";
$proto16["m_srcTableName"] = "SUB_APPLICATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SA_VALUES_IN",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto18["m_sql"] = "SA_VALUES_IN";
$proto18["m_srcTableName"] = "SUB_APPLICATION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SA_INIT_DATE",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto20["m_sql"] = "SA_INIT_DATE";
$proto20["m_srcTableName"] = "SUB_APPLICATION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SA_FINISH_DATE",
	"m_strTable" => "SUB_APPLICATION",
	"m_srcTableName" => "SUB_APPLICATION"
));

$proto22["m_sql"] = "SA_FINISH_DATE";
$proto22["m_srcTableName"] = "SUB_APPLICATION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "SUB_APPLICATION";
$proto25["m_srcTableName"] = "SUB_APPLICATION";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "APP_UID";
$proto25["m_columns"][] = "APP_PARENT";
$proto25["m_columns"][] = "DEL_INDEX_PARENT";
$proto25["m_columns"][] = "DEL_THREAD_PARENT";
$proto25["m_columns"][] = "SA_STATUS";
$proto25["m_columns"][] = "SA_VALUES_OUT";
$proto25["m_columns"][] = "SA_VALUES_IN";
$proto25["m_columns"][] = "SA_INIT_DATE";
$proto25["m_columns"][] = "SA_FINISH_DATE";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "SUB_APPLICATION";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "SUB_APPLICATION";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SUB_APPLICATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SUB_APPLICATION = createSqlQuery_SUB_APPLICATION();


	
						;

									

$tdataSUB_APPLICATION[".sqlquery"] = $queryData_SUB_APPLICATION;

$tableEvents["SUB_APPLICATION"] = new eventsBase;
$tdataSUB_APPLICATION[".hasEvents"] = false;

?>
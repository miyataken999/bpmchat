<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDB_SOURCE = array();
	$tdataDB_SOURCE[".truncateText"] = true;
	$tdataDB_SOURCE[".NumberOfChars"] = 20;
	$tdataDB_SOURCE[".ShortName"] = "DB_SOURCE";
	$tdataDB_SOURCE[".OwnerID"] = "";
	$tdataDB_SOURCE[".OriginalTable"] = "DB_SOURCE";

//	field labels
$fieldLabelsDB_SOURCE = array();
$fieldToolTipsDB_SOURCE = array();
$pageTitlesDB_SOURCE = array();
$placeHoldersDB_SOURCE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDB_SOURCE["Japanese"] = array();
	$fieldToolTipsDB_SOURCE["Japanese"] = array();
	$placeHoldersDB_SOURCE["Japanese"] = array();
	$pageTitlesDB_SOURCE["Japanese"] = array();
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_UID"] = "UID";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_UID"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_UID"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["PRO_UID"] = "uid";
	$fieldToolTipsDB_SOURCE["Japanese"]["PRO_UID"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["PRO_UID"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_TYPE"] = "タイプ";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_TYPE"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_TYPE"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_SERVER"] = "サーバ";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_SERVER"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_SERVER"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_DATABASE_NAME"] = "データベース名";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_DATABASE_NAME"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_DATABASE_NAME"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_USERNAME"] = "ユーザ名";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_USERNAME"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_USERNAME"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_PASSWORD"] = "パスワード";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_PASSWORD"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_PASSWORD"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_PORT"] = "ポート";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_PORT"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_PORT"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_ENCODE"] = "エンコード";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_ENCODE"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_ENCODE"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_CONNECTION_TYPE"] = "接続タイプ";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_CONNECTION_TYPE"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_CONNECTION_TYPE"] = "";
	$fieldLabelsDB_SOURCE["Japanese"]["DBS_TNS"] = "DBS TNS";
	$fieldToolTipsDB_SOURCE["Japanese"]["DBS_TNS"] = "";
	$placeHoldersDB_SOURCE["Japanese"]["DBS_TNS"] = "";
	if (count($fieldToolTipsDB_SOURCE["Japanese"]))
		$tdataDB_SOURCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDB_SOURCE["English"] = array();
	$fieldToolTipsDB_SOURCE["English"] = array();
	$placeHoldersDB_SOURCE["English"] = array();
	$pageTitlesDB_SOURCE["English"] = array();
	$fieldLabelsDB_SOURCE["English"]["DBS_UID"] = "UID";
	$fieldToolTipsDB_SOURCE["English"]["DBS_UID"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_UID"] = "";
	$fieldLabelsDB_SOURCE["English"]["PRO_UID"] = "uid";
	$fieldToolTipsDB_SOURCE["English"]["PRO_UID"] = "";
	$placeHoldersDB_SOURCE["English"]["PRO_UID"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_TYPE"] = "タイプ";
	$fieldToolTipsDB_SOURCE["English"]["DBS_TYPE"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_TYPE"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_SERVER"] = "サーバ";
	$fieldToolTipsDB_SOURCE["English"]["DBS_SERVER"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_SERVER"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_DATABASE_NAME"] = "データベース名";
	$fieldToolTipsDB_SOURCE["English"]["DBS_DATABASE_NAME"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_DATABASE_NAME"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_USERNAME"] = "ユーザ名";
	$fieldToolTipsDB_SOURCE["English"]["DBS_USERNAME"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_USERNAME"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_PASSWORD"] = "パスワード";
	$fieldToolTipsDB_SOURCE["English"]["DBS_PASSWORD"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_PASSWORD"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_PORT"] = "ポート";
	$fieldToolTipsDB_SOURCE["English"]["DBS_PORT"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_PORT"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_ENCODE"] = "エンコード";
	$fieldToolTipsDB_SOURCE["English"]["DBS_ENCODE"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_ENCODE"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_CONNECTION_TYPE"] = "接続タイプ";
	$fieldToolTipsDB_SOURCE["English"]["DBS_CONNECTION_TYPE"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_CONNECTION_TYPE"] = "";
	$fieldLabelsDB_SOURCE["English"]["DBS_TNS"] = "DBS TNS";
	$fieldToolTipsDB_SOURCE["English"]["DBS_TNS"] = "";
	$placeHoldersDB_SOURCE["English"]["DBS_TNS"] = "";
	if (count($fieldToolTipsDB_SOURCE["English"]))
		$tdataDB_SOURCE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDB_SOURCE[""] = array();
	$fieldToolTipsDB_SOURCE[""] = array();
	$placeHoldersDB_SOURCE[""] = array();
	$pageTitlesDB_SOURCE[""] = array();
	if (count($fieldToolTipsDB_SOURCE[""]))
		$tdataDB_SOURCE[".isUseToolTips"] = true;
}


	$tdataDB_SOURCE[".NCSearch"] = true;



$tdataDB_SOURCE[".shortTableName"] = "DB_SOURCE";
$tdataDB_SOURCE[".nSecOptions"] = 0;
$tdataDB_SOURCE[".recsPerRowPrint"] = 1;
$tdataDB_SOURCE[".mainTableOwnerID"] = "";
$tdataDB_SOURCE[".moveNext"] = 0;
$tdataDB_SOURCE[".entityType"] = 0;

$tdataDB_SOURCE[".strOriginalTableName"] = "DB_SOURCE";

	



$tdataDB_SOURCE[".showAddInPopup"] = false;

$tdataDB_SOURCE[".showEditInPopup"] = false;

$tdataDB_SOURCE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDB_SOURCE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDB_SOURCE[".fieldsForRegister"] = array();
	
$tdataDB_SOURCE[".listAjax"] = false;

	$tdataDB_SOURCE[".audit"] = true;

	$tdataDB_SOURCE[".locking"] = false;

$tdataDB_SOURCE[".edit"] = true;
$tdataDB_SOURCE[".afterEditAction"] = 1;
$tdataDB_SOURCE[".closePopupAfterEdit"] = 1;
$tdataDB_SOURCE[".afterEditActionDetTable"] = "";

$tdataDB_SOURCE[".add"] = true;
$tdataDB_SOURCE[".afterAddAction"] = 1;
$tdataDB_SOURCE[".closePopupAfterAdd"] = 1;
$tdataDB_SOURCE[".afterAddActionDetTable"] = "";

$tdataDB_SOURCE[".list"] = true;

$tdataDB_SOURCE[".inlineEdit"] = true;


$tdataDB_SOURCE[".reorderRecordsByHeader"] = true;
$tdataDB_SOURCE[".createSortByDropdown"] = true;
$tdataDB_SOURCE[".strSortControlSettingsJSON"] = "";



$tdataDB_SOURCE[".inlineAdd"] = true;
$tdataDB_SOURCE[".view"] = true;

$tdataDB_SOURCE[".import"] = true;

$tdataDB_SOURCE[".exportTo"] = true;

$tdataDB_SOURCE[".printFriendly"] = true;

$tdataDB_SOURCE[".delete"] = true;

$tdataDB_SOURCE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataDB_SOURCE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataDB_SOURCE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataDB_SOURCE[".searchSaving"] = false;
//

$tdataDB_SOURCE[".showSearchPanel"] = true;
		$tdataDB_SOURCE[".flexibleSearch"] = true;

$tdataDB_SOURCE[".isUseAjaxSuggest"] = true;

$tdataDB_SOURCE[".rowHighlite"] = true;



				

$tdataDB_SOURCE[".ajaxCodeSnippetAdded"] = false;

$tdataDB_SOURCE[".buttonsAdded"] = false;

$tdataDB_SOURCE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDB_SOURCE[".isUseTimeForSearch"] = false;





$tdataDB_SOURCE[".allSearchFields"] = array();
$tdataDB_SOURCE[".filterFields"] = array();
$tdataDB_SOURCE[".requiredSearchFields"] = array();

$tdataDB_SOURCE[".allSearchFields"][] = "DBS_UID";
	$tdataDB_SOURCE[".allSearchFields"][] = "PRO_UID";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_TYPE";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_SERVER";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_DATABASE_NAME";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_USERNAME";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_PASSWORD";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_PORT";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_ENCODE";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_CONNECTION_TYPE";
	$tdataDB_SOURCE[".allSearchFields"][] = "DBS_TNS";
	

$tdataDB_SOURCE[".googleLikeFields"] = array();
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_UID";
$tdataDB_SOURCE[".googleLikeFields"][] = "PRO_UID";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".googleLikeFields"][] = "DBS_TNS";


$tdataDB_SOURCE[".advSearchFields"] = array();
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_UID";
$tdataDB_SOURCE[".advSearchFields"][] = "PRO_UID";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".advSearchFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".tableType"] = "list";

$tdataDB_SOURCE[".printerPageOrientation"] = 0;
$tdataDB_SOURCE[".nPrinterPageScale"] = 100;

$tdataDB_SOURCE[".nPrinterSplitRecords"] = 40;

$tdataDB_SOURCE[".nPrinterPDFSplitRecords"] = 40;



$tdataDB_SOURCE[".geocodingEnabled"] = false;





$tdataDB_SOURCE[".listGridLayout"] = 3;


$tdataDB_SOURCE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataDB_SOURCE[".pageSize"] = 20;

$tdataDB_SOURCE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDB_SOURCE[".strOrderBy"] = $tstrOrderBy;

$tdataDB_SOURCE[".orderindexes"] = array();

$tdataDB_SOURCE[".sqlHead"] = "SELECT DBS_UID,  	PRO_UID,  	DBS_TYPE,  	DBS_SERVER,  	DBS_DATABASE_NAME,  	DBS_USERNAME,  	DBS_PASSWORD,  	DBS_PORT,  	DBS_ENCODE,  	DBS_CONNECTION_TYPE,  	DBS_TNS";
$tdataDB_SOURCE[".sqlFrom"] = "FROM DB_SOURCE";
$tdataDB_SOURCE[".sqlWhereExpr"] = "";
$tdataDB_SOURCE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDB_SOURCE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDB_SOURCE[".arrGroupsPerPage"] = $arrGPP;

$tdataDB_SOURCE[".highlightSearchResults"] = true;

$tableKeysDB_SOURCE = array();
$tableKeysDB_SOURCE[] = "DBS_UID";
$tableKeysDB_SOURCE[] = "PRO_UID";
$tdataDB_SOURCE[".Keys"] = $tableKeysDB_SOURCE;

$tdataDB_SOURCE[".listFields"] = array();
$tdataDB_SOURCE[".listFields"][] = "DBS_UID";
$tdataDB_SOURCE[".listFields"][] = "PRO_UID";
$tdataDB_SOURCE[".listFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".listFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".listFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".listFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".listFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".listFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".listFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".listFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".listFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".hideMobileList"] = array();


$tdataDB_SOURCE[".viewFields"] = array();
$tdataDB_SOURCE[".viewFields"][] = "DBS_UID";
$tdataDB_SOURCE[".viewFields"][] = "PRO_UID";
$tdataDB_SOURCE[".viewFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".viewFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".viewFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".viewFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".viewFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".viewFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".viewFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".viewFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".viewFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".addFields"] = array();
$tdataDB_SOURCE[".addFields"][] = "DBS_UID";
$tdataDB_SOURCE[".addFields"][] = "PRO_UID";
$tdataDB_SOURCE[".addFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".addFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".addFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".addFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".addFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".addFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".addFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".addFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".addFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".masterListFields"] = array();
$tdataDB_SOURCE[".masterListFields"][] = "DBS_UID";
$tdataDB_SOURCE[".masterListFields"][] = "PRO_UID";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".masterListFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".inlineAddFields"] = array();
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_UID";
$tdataDB_SOURCE[".inlineAddFields"][] = "PRO_UID";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".inlineAddFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".editFields"] = array();
$tdataDB_SOURCE[".editFields"][] = "DBS_UID";
$tdataDB_SOURCE[".editFields"][] = "PRO_UID";
$tdataDB_SOURCE[".editFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".editFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".editFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".editFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".editFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".editFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".editFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".editFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".editFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".inlineEditFields"] = array();
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_UID";
$tdataDB_SOURCE[".inlineEditFields"][] = "PRO_UID";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".inlineEditFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".updateSelectedFields"] = array();
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_UID";
$tdataDB_SOURCE[".updateSelectedFields"][] = "PRO_UID";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".updateSelectedFields"][] = "DBS_TNS";


$tdataDB_SOURCE[".exportFields"] = array();
$tdataDB_SOURCE[".exportFields"][] = "DBS_UID";
$tdataDB_SOURCE[".exportFields"][] = "PRO_UID";
$tdataDB_SOURCE[".exportFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".exportFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".exportFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".exportFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".exportFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".exportFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".exportFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".exportFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".exportFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".importFields"] = array();
$tdataDB_SOURCE[".importFields"][] = "DBS_UID";
$tdataDB_SOURCE[".importFields"][] = "PRO_UID";
$tdataDB_SOURCE[".importFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".importFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".importFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".importFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".importFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".importFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".importFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".importFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".importFields"][] = "DBS_TNS";

$tdataDB_SOURCE[".printFields"] = array();
$tdataDB_SOURCE[".printFields"][] = "DBS_UID";
$tdataDB_SOURCE[".printFields"][] = "PRO_UID";
$tdataDB_SOURCE[".printFields"][] = "DBS_TYPE";
$tdataDB_SOURCE[".printFields"][] = "DBS_SERVER";
$tdataDB_SOURCE[".printFields"][] = "DBS_DATABASE_NAME";
$tdataDB_SOURCE[".printFields"][] = "DBS_USERNAME";
$tdataDB_SOURCE[".printFields"][] = "DBS_PASSWORD";
$tdataDB_SOURCE[".printFields"][] = "DBS_PORT";
$tdataDB_SOURCE[".printFields"][] = "DBS_ENCODE";
$tdataDB_SOURCE[".printFields"][] = "DBS_CONNECTION_TYPE";
$tdataDB_SOURCE[".printFields"][] = "DBS_TNS";

//	DBS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DBS_UID";
	$fdata["GoodName"] = "DBS_UID";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_UID");
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

		$fdata["strField"] = "DBS_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_UID";

	
	
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




	$tdataDB_SOURCE["DBS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","PRO_UID");
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

		$fdata["strField"] = "PRO_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UID";

	
	
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




	$tdataDB_SOURCE["PRO_UID"] = $fdata;
//	DBS_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DBS_TYPE";
	$fdata["GoodName"] = "DBS_TYPE";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_TYPE");
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

		$fdata["strField"] = "DBS_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_TYPE";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDB_SOURCE["DBS_TYPE"] = $fdata;
//	DBS_SERVER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DBS_SERVER";
	$fdata["GoodName"] = "DBS_SERVER";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_SERVER");
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

		$fdata["strField"] = "DBS_SERVER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_SERVER";

	
	
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




	$tdataDB_SOURCE["DBS_SERVER"] = $fdata;
//	DBS_DATABASE_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DBS_DATABASE_NAME";
	$fdata["GoodName"] = "DBS_DATABASE_NAME";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_DATABASE_NAME");
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

		$fdata["strField"] = "DBS_DATABASE_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_DATABASE_NAME";

	
	
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




	$tdataDB_SOURCE["DBS_DATABASE_NAME"] = $fdata;
//	DBS_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DBS_USERNAME";
	$fdata["GoodName"] = "DBS_USERNAME";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_USERNAME");
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

		$fdata["strField"] = "DBS_USERNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_USERNAME";

	
	
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




	$tdataDB_SOURCE["DBS_USERNAME"] = $fdata;
//	DBS_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DBS_PASSWORD";
	$fdata["GoodName"] = "DBS_PASSWORD";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_PASSWORD");
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

		$fdata["strField"] = "DBS_PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_PASSWORD";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdataDB_SOURCE["DBS_PASSWORD"] = $fdata;
//	DBS_PORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DBS_PORT";
	$fdata["GoodName"] = "DBS_PORT";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_PORT");
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

		$fdata["strField"] = "DBS_PORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_PORT";

	
	
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




	$tdataDB_SOURCE["DBS_PORT"] = $fdata;
//	DBS_ENCODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DBS_ENCODE";
	$fdata["GoodName"] = "DBS_ENCODE";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_ENCODE");
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

		$fdata["strField"] = "DBS_ENCODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_ENCODE";

	
	
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




	$tdataDB_SOURCE["DBS_ENCODE"] = $fdata;
//	DBS_CONNECTION_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DBS_CONNECTION_TYPE";
	$fdata["GoodName"] = "DBS_CONNECTION_TYPE";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_CONNECTION_TYPE");
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

		$fdata["strField"] = "DBS_CONNECTION_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_CONNECTION_TYPE";

	
	
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




	$tdataDB_SOURCE["DBS_CONNECTION_TYPE"] = $fdata;
//	DBS_TNS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DBS_TNS";
	$fdata["GoodName"] = "DBS_TNS";
	$fdata["ownerTable"] = "DB_SOURCE";
	$fdata["Label"] = GetFieldLabel("DB_SOURCE","DBS_TNS");
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

		$fdata["strField"] = "DBS_TNS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBS_TNS";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdataDB_SOURCE["DBS_TNS"] = $fdata;


$tables_data["DB_SOURCE"]=&$tdataDB_SOURCE;
$field_labels["DB_SOURCE"] = &$fieldLabelsDB_SOURCE;
$fieldToolTips["DB_SOURCE"] = &$fieldToolTipsDB_SOURCE;
$placeHolders["DB_SOURCE"] = &$placeHoldersDB_SOURCE;
$page_titles["DB_SOURCE"] = &$pageTitlesDB_SOURCE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DB_SOURCE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DB_SOURCE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DB_SOURCE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DBS_UID,  	PRO_UID,  	DBS_TYPE,  	DBS_SERVER,  	DBS_DATABASE_NAME,  	DBS_USERNAME,  	DBS_PASSWORD,  	DBS_PORT,  	DBS_ENCODE,  	DBS_CONNECTION_TYPE,  	DBS_TNS";
$proto0["m_strFrom"] = "FROM DB_SOURCE";
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
	"m_strName" => "DBS_UID",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto6["m_sql"] = "DBS_UID";
$proto6["m_srcTableName"] = "DB_SOURCE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "DB_SOURCE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_TYPE",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto10["m_sql"] = "DBS_TYPE";
$proto10["m_srcTableName"] = "DB_SOURCE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_SERVER",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto12["m_sql"] = "DBS_SERVER";
$proto12["m_srcTableName"] = "DB_SOURCE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_DATABASE_NAME",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto14["m_sql"] = "DBS_DATABASE_NAME";
$proto14["m_srcTableName"] = "DB_SOURCE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_USERNAME",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto16["m_sql"] = "DBS_USERNAME";
$proto16["m_srcTableName"] = "DB_SOURCE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_PASSWORD",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto18["m_sql"] = "DBS_PASSWORD";
$proto18["m_srcTableName"] = "DB_SOURCE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_PORT",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto20["m_sql"] = "DBS_PORT";
$proto20["m_srcTableName"] = "DB_SOURCE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_ENCODE",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto22["m_sql"] = "DBS_ENCODE";
$proto22["m_srcTableName"] = "DB_SOURCE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_CONNECTION_TYPE",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto24["m_sql"] = "DBS_CONNECTION_TYPE";
$proto24["m_srcTableName"] = "DB_SOURCE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DBS_TNS",
	"m_strTable" => "DB_SOURCE",
	"m_srcTableName" => "DB_SOURCE"
));

$proto26["m_sql"] = "DBS_TNS";
$proto26["m_srcTableName"] = "DB_SOURCE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "DB_SOURCE";
$proto29["m_srcTableName"] = "DB_SOURCE";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "DBS_UID";
$proto29["m_columns"][] = "PRO_UID";
$proto29["m_columns"][] = "DBS_TYPE";
$proto29["m_columns"][] = "DBS_SERVER";
$proto29["m_columns"][] = "DBS_DATABASE_NAME";
$proto29["m_columns"][] = "DBS_USERNAME";
$proto29["m_columns"][] = "DBS_PASSWORD";
$proto29["m_columns"][] = "DBS_PORT";
$proto29["m_columns"][] = "DBS_ENCODE";
$proto29["m_columns"][] = "DBS_CONNECTION_TYPE";
$proto29["m_columns"][] = "DBS_TNS";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "DB_SOURCE";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "DB_SOURCE";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DB_SOURCE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DB_SOURCE = createSqlQuery_DB_SOURCE();


	
						;

											

$tdataDB_SOURCE[".sqlquery"] = $queryData_DB_SOURCE;

$tableEvents["DB_SOURCE"] = new eventsBase;
$tdataDB_SOURCE[".hasEvents"] = false;

?>
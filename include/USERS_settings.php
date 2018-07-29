<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUSERS = array();
	$tdataUSERS[".truncateText"] = true;
	$tdataUSERS[".NumberOfChars"] = 20;
	$tdataUSERS[".ShortName"] = "USERS";
	$tdataUSERS[".OwnerID"] = "";
	$tdataUSERS[".OriginalTable"] = "USERS";

//	field labels
$fieldLabelsUSERS = array();
$fieldToolTipsUSERS = array();
$pageTitlesUSERS = array();
$placeHoldersUSERS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsUSERS["Japanese"] = array();
	$fieldToolTipsUSERS["Japanese"] = array();
	$placeHoldersUSERS["Japanese"] = array();
	$pageTitlesUSERS["Japanese"] = array();
	$fieldLabelsUSERS["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsUSERS["Japanese"]["USR_UID"] = "";
	$placeHoldersUSERS["Japanese"]["USR_UID"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_USERNAME"] = "USRユーザ名";
	$fieldToolTipsUSERS["Japanese"]["USR_USERNAME"] = "";
	$placeHoldersUSERS["Japanese"]["USR_USERNAME"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_PASSWORD"] = "USRパスワード";
	$fieldToolTipsUSERS["Japanese"]["USR_PASSWORD"] = "";
	$placeHoldersUSERS["Japanese"]["USR_PASSWORD"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_FIRSTNAME"] = "USR FIRSTNAME";
	$fieldToolTipsUSERS["Japanese"]["USR_FIRSTNAME"] = "";
	$placeHoldersUSERS["Japanese"]["USR_FIRSTNAME"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_LASTNAME"] = "USR姓";
	$fieldToolTipsUSERS["Japanese"]["USR_LASTNAME"] = "";
	$placeHoldersUSERS["Japanese"]["USR_LASTNAME"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_EMAIL"] = "USRメール";
	$fieldToolTipsUSERS["Japanese"]["USR_EMAIL"] = "";
	$placeHoldersUSERS["Japanese"]["USR_EMAIL"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_DUE_DATE"] = "USR期日";
	$fieldToolTipsUSERS["Japanese"]["USR_DUE_DATE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_DUE_DATE"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_CREATE_DATE"] = "USR日付を作成します";
	$fieldToolTipsUSERS["Japanese"]["USR_CREATE_DATE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_CREATE_DATE"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_UPDATE_DATE"] = "USR更新日";
	$fieldToolTipsUSERS["Japanese"]["USR_UPDATE_DATE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_UPDATE_DATE"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_STATUS"] = "状態";
	$fieldToolTipsUSERS["Japanese"]["USR_STATUS"] = "";
	$placeHoldersUSERS["Japanese"]["USR_STATUS"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_COUNTRY"] = "USR国";
	$fieldToolTipsUSERS["Japanese"]["USR_COUNTRY"] = "";
	$placeHoldersUSERS["Japanese"]["USR_COUNTRY"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_CITY"] = "USR市";
	$fieldToolTipsUSERS["Japanese"]["USR_CITY"] = "";
	$placeHoldersUSERS["Japanese"]["USR_CITY"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_LOCATION"] = "ロケーション";
	$fieldToolTipsUSERS["Japanese"]["USR_LOCATION"] = "";
	$placeHoldersUSERS["Japanese"]["USR_LOCATION"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_ADDRESS"] = "USRアドレス";
	$fieldToolTipsUSERS["Japanese"]["USR_ADDRESS"] = "";
	$placeHoldersUSERS["Japanese"]["USR_ADDRESS"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_PHONE"] = "USR電話";
	$fieldToolTipsUSERS["Japanese"]["USR_PHONE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_PHONE"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_FAX"] = "USRファックス";
	$fieldToolTipsUSERS["Japanese"]["USR_FAX"] = "";
	$placeHoldersUSERS["Japanese"]["USR_FAX"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_CELLULAR"] = "携帯USR";
	$fieldToolTipsUSERS["Japanese"]["USR_CELLULAR"] = "";
	$placeHoldersUSERS["Japanese"]["USR_CELLULAR"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_ZIP_CODE"] = "USR郵便番号";
	$fieldToolTipsUSERS["Japanese"]["USR_ZIP_CODE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_ZIP_CODE"] = "";
	$fieldLabelsUSERS["Japanese"]["DEP_UID"] = "DEPのuid";
	$fieldToolTipsUSERS["Japanese"]["DEP_UID"] = "";
	$placeHoldersUSERS["Japanese"]["DEP_UID"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_POSITION"] = "USR位置";
	$fieldToolTipsUSERS["Japanese"]["USR_POSITION"] = "";
	$placeHoldersUSERS["Japanese"]["USR_POSITION"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_RESUME"] = "USR履歴書";
	$fieldToolTipsUSERS["Japanese"]["USR_RESUME"] = "";
	$placeHoldersUSERS["Japanese"]["USR_RESUME"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_BIRTHDAY"] = "USR誕生日";
	$fieldToolTipsUSERS["Japanese"]["USR_BIRTHDAY"] = "";
	$placeHoldersUSERS["Japanese"]["USR_BIRTHDAY"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_ROLE"] = "USR役割";
	$fieldToolTipsUSERS["Japanese"]["USR_ROLE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_ROLE"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_REPORTS_TO"] = "USRレポートへ";
	$fieldToolTipsUSERS["Japanese"]["USR_REPORTS_TO"] = "";
	$placeHoldersUSERS["Japanese"]["USR_REPORTS_TO"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_REPLACED_BY"] = "USRに置き換え";
	$fieldToolTipsUSERS["Japanese"]["USR_REPLACED_BY"] = "";
	$placeHoldersUSERS["Japanese"]["USR_REPLACED_BY"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_UX"] = "USR UX";
	$fieldToolTipsUSERS["Japanese"]["USR_UX"] = "";
	$placeHoldersUSERS["Japanese"]["USR_UX"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_COST_BY_HOUR"] = "時間によってUSRコスト";
	$fieldToolTipsUSERS["Japanese"]["USR_COST_BY_HOUR"] = "";
	$placeHoldersUSERS["Japanese"]["USR_COST_BY_HOUR"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_UNIT_COST"] = "USR単価";
	$fieldToolTipsUSERS["Japanese"]["USR_UNIT_COST"] = "";
	$placeHoldersUSERS["Japanese"]["USR_UNIT_COST"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_PMDRIVE_FOLDER_UID"] = "USR pmdriveフォルダUID";
	$fieldToolTipsUSERS["Japanese"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$placeHoldersUSERS["Japanese"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_BOOKMARK_START_CASES"] = "USRブックマーク例を開始";
	$fieldToolTipsUSERS["Japanese"]["USR_BOOKMARK_START_CASES"] = "";
	$placeHoldersUSERS["Japanese"]["USR_BOOKMARK_START_CASES"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_TIME_ZONE"] = "USRタイムゾーン";
	$fieldToolTipsUSERS["Japanese"]["USR_TIME_ZONE"] = "";
	$placeHoldersUSERS["Japanese"]["USR_TIME_ZONE"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_DEFAULT_LANG"] = "USRデフォルトLANG";
	$fieldToolTipsUSERS["Japanese"]["USR_DEFAULT_LANG"] = "";
	$placeHoldersUSERS["Japanese"]["USR_DEFAULT_LANG"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_LAST_LOGIN"] = "USR最後のログイン";
	$fieldToolTipsUSERS["Japanese"]["USR_LAST_LOGIN"] = "";
	$placeHoldersUSERS["Japanese"]["USR_LAST_LOGIN"] = "";
	$fieldLabelsUSERS["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsUSERS["Japanese"]["USR_ID"] = "";
	$placeHoldersUSERS["Japanese"]["USR_ID"] = "";
	if (count($fieldToolTipsUSERS["Japanese"]))
		$tdataUSERS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUSERS["English"] = array();
	$fieldToolTipsUSERS["English"] = array();
	$placeHoldersUSERS["English"] = array();
	$pageTitlesUSERS["English"] = array();
	$fieldLabelsUSERS["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsUSERS["English"]["USR_UID"] = "";
	$placeHoldersUSERS["English"]["USR_UID"] = "";
	$fieldLabelsUSERS["English"]["USR_USERNAME"] = "USRユーザ名";
	$fieldToolTipsUSERS["English"]["USR_USERNAME"] = "";
	$placeHoldersUSERS["English"]["USR_USERNAME"] = "";
	$fieldLabelsUSERS["English"]["USR_PASSWORD"] = "USRパスワード";
	$fieldToolTipsUSERS["English"]["USR_PASSWORD"] = "";
	$placeHoldersUSERS["English"]["USR_PASSWORD"] = "";
	$fieldLabelsUSERS["English"]["USR_FIRSTNAME"] = "USR FIRSTNAME";
	$fieldToolTipsUSERS["English"]["USR_FIRSTNAME"] = "";
	$placeHoldersUSERS["English"]["USR_FIRSTNAME"] = "";
	$fieldLabelsUSERS["English"]["USR_LASTNAME"] = "USR姓";
	$fieldToolTipsUSERS["English"]["USR_LASTNAME"] = "";
	$placeHoldersUSERS["English"]["USR_LASTNAME"] = "";
	$fieldLabelsUSERS["English"]["USR_EMAIL"] = "USRメール";
	$fieldToolTipsUSERS["English"]["USR_EMAIL"] = "";
	$placeHoldersUSERS["English"]["USR_EMAIL"] = "";
	$fieldLabelsUSERS["English"]["USR_DUE_DATE"] = "USR期日";
	$fieldToolTipsUSERS["English"]["USR_DUE_DATE"] = "";
	$placeHoldersUSERS["English"]["USR_DUE_DATE"] = "";
	$fieldLabelsUSERS["English"]["USR_CREATE_DATE"] = "USR日付を作成します";
	$fieldToolTipsUSERS["English"]["USR_CREATE_DATE"] = "";
	$placeHoldersUSERS["English"]["USR_CREATE_DATE"] = "";
	$fieldLabelsUSERS["English"]["USR_UPDATE_DATE"] = "USR更新日";
	$fieldToolTipsUSERS["English"]["USR_UPDATE_DATE"] = "";
	$placeHoldersUSERS["English"]["USR_UPDATE_DATE"] = "";
	$fieldLabelsUSERS["English"]["USR_STATUS"] = "状態";
	$fieldToolTipsUSERS["English"]["USR_STATUS"] = "";
	$placeHoldersUSERS["English"]["USR_STATUS"] = "";
	$fieldLabelsUSERS["English"]["USR_COUNTRY"] = "USR国";
	$fieldToolTipsUSERS["English"]["USR_COUNTRY"] = "";
	$placeHoldersUSERS["English"]["USR_COUNTRY"] = "";
	$fieldLabelsUSERS["English"]["USR_CITY"] = "USR市";
	$fieldToolTipsUSERS["English"]["USR_CITY"] = "";
	$placeHoldersUSERS["English"]["USR_CITY"] = "";
	$fieldLabelsUSERS["English"]["USR_LOCATION"] = "ロケーション";
	$fieldToolTipsUSERS["English"]["USR_LOCATION"] = "";
	$placeHoldersUSERS["English"]["USR_LOCATION"] = "";
	$fieldLabelsUSERS["English"]["USR_ADDRESS"] = "USRアドレス";
	$fieldToolTipsUSERS["English"]["USR_ADDRESS"] = "";
	$placeHoldersUSERS["English"]["USR_ADDRESS"] = "";
	$fieldLabelsUSERS["English"]["USR_PHONE"] = "USR電話";
	$fieldToolTipsUSERS["English"]["USR_PHONE"] = "";
	$placeHoldersUSERS["English"]["USR_PHONE"] = "";
	$fieldLabelsUSERS["English"]["USR_FAX"] = "USRファックス";
	$fieldToolTipsUSERS["English"]["USR_FAX"] = "";
	$placeHoldersUSERS["English"]["USR_FAX"] = "";
	$fieldLabelsUSERS["English"]["USR_CELLULAR"] = "携帯USR";
	$fieldToolTipsUSERS["English"]["USR_CELLULAR"] = "";
	$placeHoldersUSERS["English"]["USR_CELLULAR"] = "";
	$fieldLabelsUSERS["English"]["USR_ZIP_CODE"] = "USR郵便番号";
	$fieldToolTipsUSERS["English"]["USR_ZIP_CODE"] = "";
	$placeHoldersUSERS["English"]["USR_ZIP_CODE"] = "";
	$fieldLabelsUSERS["English"]["DEP_UID"] = "DEPのuid";
	$fieldToolTipsUSERS["English"]["DEP_UID"] = "";
	$placeHoldersUSERS["English"]["DEP_UID"] = "";
	$fieldLabelsUSERS["English"]["USR_POSITION"] = "USR位置";
	$fieldToolTipsUSERS["English"]["USR_POSITION"] = "";
	$placeHoldersUSERS["English"]["USR_POSITION"] = "";
	$fieldLabelsUSERS["English"]["USR_RESUME"] = "USR履歴書";
	$fieldToolTipsUSERS["English"]["USR_RESUME"] = "";
	$placeHoldersUSERS["English"]["USR_RESUME"] = "";
	$fieldLabelsUSERS["English"]["USR_BIRTHDAY"] = "USR誕生日";
	$fieldToolTipsUSERS["English"]["USR_BIRTHDAY"] = "";
	$placeHoldersUSERS["English"]["USR_BIRTHDAY"] = "";
	$fieldLabelsUSERS["English"]["USR_ROLE"] = "USR役割";
	$fieldToolTipsUSERS["English"]["USR_ROLE"] = "";
	$placeHoldersUSERS["English"]["USR_ROLE"] = "";
	$fieldLabelsUSERS["English"]["USR_REPORTS_TO"] = "USRレポートへ";
	$fieldToolTipsUSERS["English"]["USR_REPORTS_TO"] = "";
	$placeHoldersUSERS["English"]["USR_REPORTS_TO"] = "";
	$fieldLabelsUSERS["English"]["USR_REPLACED_BY"] = "USRに置き換え";
	$fieldToolTipsUSERS["English"]["USR_REPLACED_BY"] = "";
	$placeHoldersUSERS["English"]["USR_REPLACED_BY"] = "";
	$fieldLabelsUSERS["English"]["USR_UX"] = "USR UX";
	$fieldToolTipsUSERS["English"]["USR_UX"] = "";
	$placeHoldersUSERS["English"]["USR_UX"] = "";
	$fieldLabelsUSERS["English"]["USR_COST_BY_HOUR"] = "時間によってUSRコスト";
	$fieldToolTipsUSERS["English"]["USR_COST_BY_HOUR"] = "";
	$placeHoldersUSERS["English"]["USR_COST_BY_HOUR"] = "";
	$fieldLabelsUSERS["English"]["USR_UNIT_COST"] = "USR単価";
	$fieldToolTipsUSERS["English"]["USR_UNIT_COST"] = "";
	$placeHoldersUSERS["English"]["USR_UNIT_COST"] = "";
	$fieldLabelsUSERS["English"]["USR_PMDRIVE_FOLDER_UID"] = "USR pmdriveフォルダUID";
	$fieldToolTipsUSERS["English"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$placeHoldersUSERS["English"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$fieldLabelsUSERS["English"]["USR_BOOKMARK_START_CASES"] = "USRブックマーク例を開始";
	$fieldToolTipsUSERS["English"]["USR_BOOKMARK_START_CASES"] = "";
	$placeHoldersUSERS["English"]["USR_BOOKMARK_START_CASES"] = "";
	$fieldLabelsUSERS["English"]["USR_TIME_ZONE"] = "USRタイムゾーン";
	$fieldToolTipsUSERS["English"]["USR_TIME_ZONE"] = "";
	$placeHoldersUSERS["English"]["USR_TIME_ZONE"] = "";
	$fieldLabelsUSERS["English"]["USR_DEFAULT_LANG"] = "USRデフォルトLANG";
	$fieldToolTipsUSERS["English"]["USR_DEFAULT_LANG"] = "";
	$placeHoldersUSERS["English"]["USR_DEFAULT_LANG"] = "";
	$fieldLabelsUSERS["English"]["USR_LAST_LOGIN"] = "USR最後のログイン";
	$fieldToolTipsUSERS["English"]["USR_LAST_LOGIN"] = "";
	$placeHoldersUSERS["English"]["USR_LAST_LOGIN"] = "";
	$fieldLabelsUSERS["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsUSERS["English"]["USR_ID"] = "";
	$placeHoldersUSERS["English"]["USR_ID"] = "";
	if (count($fieldToolTipsUSERS["English"]))
		$tdataUSERS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUSERS[""] = array();
	$fieldToolTipsUSERS[""] = array();
	$placeHoldersUSERS[""] = array();
	$pageTitlesUSERS[""] = array();
	if (count($fieldToolTipsUSERS[""]))
		$tdataUSERS[".isUseToolTips"] = true;
}


	$tdataUSERS[".NCSearch"] = true;



$tdataUSERS[".shortTableName"] = "USERS";
$tdataUSERS[".nSecOptions"] = 0;
$tdataUSERS[".recsPerRowPrint"] = 1;
$tdataUSERS[".mainTableOwnerID"] = "";
$tdataUSERS[".moveNext"] = 0;
$tdataUSERS[".entityType"] = 0;

$tdataUSERS[".strOriginalTableName"] = "USERS";

	



$tdataUSERS[".showAddInPopup"] = false;

$tdataUSERS[".showEditInPopup"] = false;

$tdataUSERS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUSERS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUSERS[".fieldsForRegister"] = array();
	//Begin register settings
			$tdataUSERS[".fieldsForRegister"] = array();
$tdataUSERS[".fieldsForRegister"][] = "USR_UID";
			$tdataUSERS[".fieldsForRegister"][] = "USR_EMAIL";
			$tdataUSERS[".fieldsForRegister"][] = "USR_PASSWORD";
/*
$tdataUSERS[".PasswordField"] = "USR_PASSWORD";
$tdataUSERS[".UserNameField"] = "USR_UID";
*/
//End register settings

$tdataUSERS[".listAjax"] = false;

	$tdataUSERS[".audit"] = true;

	$tdataUSERS[".locking"] = false;

$tdataUSERS[".edit"] = true;
$tdataUSERS[".afterEditAction"] = 1;
$tdataUSERS[".closePopupAfterEdit"] = 1;
$tdataUSERS[".afterEditActionDetTable"] = "";

$tdataUSERS[".add"] = true;
$tdataUSERS[".afterAddAction"] = 1;
$tdataUSERS[".closePopupAfterAdd"] = 1;
$tdataUSERS[".afterAddActionDetTable"] = "";

$tdataUSERS[".list"] = true;

$tdataUSERS[".inlineEdit"] = true;

$tdataUSERS[".updateSelected"] = true;

$tdataUSERS[".reorderRecordsByHeader"] = true;
$tdataUSERS[".createSortByDropdown"] = true;
$tdataUSERS[".strSortControlSettingsJSON"] = "";



$tdataUSERS[".inlineAdd"] = true;
$tdataUSERS[".copy"] = true;
$tdataUSERS[".view"] = true;

$tdataUSERS[".import"] = true;

$tdataUSERS[".exportTo"] = true;

$tdataUSERS[".printFriendly"] = true;

$tdataUSERS[".delete"] = true;

$tdataUSERS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataUSERS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataUSERS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataUSERS[".searchSaving"] = false;
//

$tdataUSERS[".showSearchPanel"] = true;
		$tdataUSERS[".flexibleSearch"] = true;

$tdataUSERS[".isUseAjaxSuggest"] = true;

$tdataUSERS[".rowHighlite"] = true;



				

$tdataUSERS[".ajaxCodeSnippetAdded"] = false;

$tdataUSERS[".buttonsAdded"] = false;

$tdataUSERS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUSERS[".isUseTimeForSearch"] = false;





$tdataUSERS[".allSearchFields"] = array();
$tdataUSERS[".filterFields"] = array();
$tdataUSERS[".requiredSearchFields"] = array();

$tdataUSERS[".allSearchFields"][] = "USR_ID";
	

$tdataUSERS[".googleLikeFields"] = array();
$tdataUSERS[".googleLikeFields"][] = "USR_UID";
$tdataUSERS[".googleLikeFields"][] = "USR_USERNAME";
$tdataUSERS[".googleLikeFields"][] = "USR_PASSWORD";
$tdataUSERS[".googleLikeFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".googleLikeFields"][] = "USR_LASTNAME";
$tdataUSERS[".googleLikeFields"][] = "USR_EMAIL";
$tdataUSERS[".googleLikeFields"][] = "USR_DUE_DATE";
$tdataUSERS[".googleLikeFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".googleLikeFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".googleLikeFields"][] = "USR_STATUS";
$tdataUSERS[".googleLikeFields"][] = "USR_COUNTRY";
$tdataUSERS[".googleLikeFields"][] = "USR_CITY";
$tdataUSERS[".googleLikeFields"][] = "USR_LOCATION";
$tdataUSERS[".googleLikeFields"][] = "USR_ADDRESS";
$tdataUSERS[".googleLikeFields"][] = "USR_PHONE";
$tdataUSERS[".googleLikeFields"][] = "USR_FAX";
$tdataUSERS[".googleLikeFields"][] = "USR_CELLULAR";
$tdataUSERS[".googleLikeFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".googleLikeFields"][] = "DEP_UID";
$tdataUSERS[".googleLikeFields"][] = "USR_POSITION";
$tdataUSERS[".googleLikeFields"][] = "USR_RESUME";
$tdataUSERS[".googleLikeFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".googleLikeFields"][] = "USR_ROLE";
$tdataUSERS[".googleLikeFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".googleLikeFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".googleLikeFields"][] = "USR_UX";
$tdataUSERS[".googleLikeFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".googleLikeFields"][] = "USR_UNIT_COST";
$tdataUSERS[".googleLikeFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".googleLikeFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".googleLikeFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".googleLikeFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".googleLikeFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".googleLikeFields"][] = "USR_ID";


$tdataUSERS[".advSearchFields"] = array();
$tdataUSERS[".advSearchFields"][] = "USR_ID";

$tdataUSERS[".tableType"] = "list";

$tdataUSERS[".printerPageOrientation"] = 0;
$tdataUSERS[".nPrinterPageScale"] = 100;

$tdataUSERS[".nPrinterSplitRecords"] = 40;

$tdataUSERS[".nPrinterPDFSplitRecords"] = 40;



$tdataUSERS[".geocodingEnabled"] = false;





$tdataUSERS[".listGridLayout"] = 3;


$tdataUSERS[".isResizeColumns"] = true;



// view page pdf
$tdataUSERS[".isViewPagePDF"] = true;
$tdataUSERS[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataUSERS[".isPrinterPagePDF"] = true;
$tdataUSERS[".nPrinterPagePDFScale"] = 100;


$tdataUSERS[".pageSize"] = 20;

$tdataUSERS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUSERS[".strOrderBy"] = $tstrOrderBy;

$tdataUSERS[".orderindexes"] = array();

$tdataUSERS[".sqlHead"] = "SELECT USR_UID,  	USR_USERNAME,  	USR_PASSWORD,  	USR_FIRSTNAME,  	USR_LASTNAME,  	USR_EMAIL,  	USR_DUE_DATE,  	USR_CREATE_DATE,  	USR_UPDATE_DATE,  	USR_STATUS,  	USR_COUNTRY,  	USR_CITY,  	USR_LOCATION,  	USR_ADDRESS,  	USR_PHONE,  	USR_FAX,  	USR_CELLULAR,  	USR_ZIP_CODE,  	DEP_UID,  	USR_POSITION,  	USR_RESUME,  	USR_BIRTHDAY,  	USR_ROLE,  	USR_REPORTS_TO,  	USR_REPLACED_BY,  	USR_UX,  	USR_COST_BY_HOUR,  	USR_UNIT_COST,  	USR_PMDRIVE_FOLDER_UID,  	USR_BOOKMARK_START_CASES,  	USR_TIME_ZONE,  	USR_DEFAULT_LANG,  	USR_LAST_LOGIN,  	USR_ID";
$tdataUSERS[".sqlFrom"] = "FROM USERS";
$tdataUSERS[".sqlWhereExpr"] = "";
$tdataUSERS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUSERS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUSERS[".arrGroupsPerPage"] = $arrGPP;

$tdataUSERS[".highlightSearchResults"] = true;

$tableKeysUSERS = array();
$tableKeysUSERS[] = "USR_UID";
$tdataUSERS[".Keys"] = $tableKeysUSERS;

$tdataUSERS[".listFields"] = array();
$tdataUSERS[".listFields"][] = "USR_UID";
$tdataUSERS[".listFields"][] = "USR_USERNAME";
$tdataUSERS[".listFields"][] = "USR_PASSWORD";
$tdataUSERS[".listFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".listFields"][] = "USR_LASTNAME";
$tdataUSERS[".listFields"][] = "USR_EMAIL";
$tdataUSERS[".listFields"][] = "USR_DUE_DATE";
$tdataUSERS[".listFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".listFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".listFields"][] = "USR_STATUS";
$tdataUSERS[".listFields"][] = "USR_COUNTRY";
$tdataUSERS[".listFields"][] = "USR_CITY";
$tdataUSERS[".listFields"][] = "USR_LOCATION";
$tdataUSERS[".listFields"][] = "USR_ADDRESS";
$tdataUSERS[".listFields"][] = "USR_PHONE";
$tdataUSERS[".listFields"][] = "USR_FAX";
$tdataUSERS[".listFields"][] = "USR_CELLULAR";
$tdataUSERS[".listFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".listFields"][] = "DEP_UID";
$tdataUSERS[".listFields"][] = "USR_POSITION";
$tdataUSERS[".listFields"][] = "USR_RESUME";
$tdataUSERS[".listFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".listFields"][] = "USR_ROLE";
$tdataUSERS[".listFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".listFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".listFields"][] = "USR_UX";
$tdataUSERS[".listFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".listFields"][] = "USR_UNIT_COST";
$tdataUSERS[".listFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".listFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".listFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".listFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".listFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".listFields"][] = "USR_ID";

$tdataUSERS[".hideMobileList"] = array();


$tdataUSERS[".viewFields"] = array();
$tdataUSERS[".viewFields"][] = "USR_UID";
$tdataUSERS[".viewFields"][] = "USR_USERNAME";
$tdataUSERS[".viewFields"][] = "USR_PASSWORD";
$tdataUSERS[".viewFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".viewFields"][] = "USR_LASTNAME";
$tdataUSERS[".viewFields"][] = "USR_EMAIL";
$tdataUSERS[".viewFields"][] = "USR_DUE_DATE";
$tdataUSERS[".viewFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".viewFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".viewFields"][] = "USR_STATUS";
$tdataUSERS[".viewFields"][] = "USR_COUNTRY";
$tdataUSERS[".viewFields"][] = "USR_CITY";
$tdataUSERS[".viewFields"][] = "USR_LOCATION";
$tdataUSERS[".viewFields"][] = "USR_ADDRESS";
$tdataUSERS[".viewFields"][] = "USR_PHONE";
$tdataUSERS[".viewFields"][] = "USR_FAX";
$tdataUSERS[".viewFields"][] = "USR_CELLULAR";
$tdataUSERS[".viewFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".viewFields"][] = "DEP_UID";
$tdataUSERS[".viewFields"][] = "USR_POSITION";
$tdataUSERS[".viewFields"][] = "USR_RESUME";
$tdataUSERS[".viewFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".viewFields"][] = "USR_ROLE";
$tdataUSERS[".viewFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".viewFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".viewFields"][] = "USR_UX";
$tdataUSERS[".viewFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".viewFields"][] = "USR_UNIT_COST";
$tdataUSERS[".viewFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".viewFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".viewFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".viewFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".viewFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".viewFields"][] = "USR_ID";

$tdataUSERS[".addFields"] = array();
$tdataUSERS[".addFields"][] = "USR_UID";
$tdataUSERS[".addFields"][] = "USR_USERNAME";
$tdataUSERS[".addFields"][] = "USR_PASSWORD";
$tdataUSERS[".addFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".addFields"][] = "USR_LASTNAME";
$tdataUSERS[".addFields"][] = "USR_EMAIL";
$tdataUSERS[".addFields"][] = "USR_DUE_DATE";
$tdataUSERS[".addFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".addFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".addFields"][] = "USR_STATUS";
$tdataUSERS[".addFields"][] = "USR_COUNTRY";
$tdataUSERS[".addFields"][] = "USR_CITY";
$tdataUSERS[".addFields"][] = "USR_LOCATION";
$tdataUSERS[".addFields"][] = "USR_ADDRESS";
$tdataUSERS[".addFields"][] = "USR_PHONE";
$tdataUSERS[".addFields"][] = "USR_FAX";
$tdataUSERS[".addFields"][] = "USR_CELLULAR";
$tdataUSERS[".addFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".addFields"][] = "DEP_UID";
$tdataUSERS[".addFields"][] = "USR_POSITION";
$tdataUSERS[".addFields"][] = "USR_RESUME";
$tdataUSERS[".addFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".addFields"][] = "USR_ROLE";
$tdataUSERS[".addFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".addFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".addFields"][] = "USR_UX";
$tdataUSERS[".addFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".addFields"][] = "USR_UNIT_COST";
$tdataUSERS[".addFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".addFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".addFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".addFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".addFields"][] = "USR_LAST_LOGIN";

$tdataUSERS[".masterListFields"] = array();
$tdataUSERS[".masterListFields"][] = "USR_UID";
$tdataUSERS[".masterListFields"][] = "USR_USERNAME";
$tdataUSERS[".masterListFields"][] = "USR_PASSWORD";
$tdataUSERS[".masterListFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".masterListFields"][] = "USR_LASTNAME";
$tdataUSERS[".masterListFields"][] = "USR_EMAIL";
$tdataUSERS[".masterListFields"][] = "USR_DUE_DATE";
$tdataUSERS[".masterListFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".masterListFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".masterListFields"][] = "USR_STATUS";
$tdataUSERS[".masterListFields"][] = "USR_COUNTRY";
$tdataUSERS[".masterListFields"][] = "USR_CITY";
$tdataUSERS[".masterListFields"][] = "USR_LOCATION";
$tdataUSERS[".masterListFields"][] = "USR_ADDRESS";
$tdataUSERS[".masterListFields"][] = "USR_PHONE";
$tdataUSERS[".masterListFields"][] = "USR_FAX";
$tdataUSERS[".masterListFields"][] = "USR_CELLULAR";
$tdataUSERS[".masterListFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".masterListFields"][] = "DEP_UID";
$tdataUSERS[".masterListFields"][] = "USR_POSITION";
$tdataUSERS[".masterListFields"][] = "USR_RESUME";
$tdataUSERS[".masterListFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".masterListFields"][] = "USR_ROLE";
$tdataUSERS[".masterListFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".masterListFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".masterListFields"][] = "USR_UX";
$tdataUSERS[".masterListFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".masterListFields"][] = "USR_UNIT_COST";
$tdataUSERS[".masterListFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".masterListFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".masterListFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".masterListFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".masterListFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".masterListFields"][] = "USR_ID";

$tdataUSERS[".inlineAddFields"] = array();
$tdataUSERS[".inlineAddFields"][] = "USR_UID";
$tdataUSERS[".inlineAddFields"][] = "USR_USERNAME";
$tdataUSERS[".inlineAddFields"][] = "USR_PASSWORD";
$tdataUSERS[".inlineAddFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".inlineAddFields"][] = "USR_LASTNAME";
$tdataUSERS[".inlineAddFields"][] = "USR_EMAIL";
$tdataUSERS[".inlineAddFields"][] = "USR_DUE_DATE";
$tdataUSERS[".inlineAddFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".inlineAddFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".inlineAddFields"][] = "USR_STATUS";
$tdataUSERS[".inlineAddFields"][] = "USR_COUNTRY";
$tdataUSERS[".inlineAddFields"][] = "USR_CITY";
$tdataUSERS[".inlineAddFields"][] = "USR_LOCATION";
$tdataUSERS[".inlineAddFields"][] = "USR_ADDRESS";
$tdataUSERS[".inlineAddFields"][] = "USR_PHONE";
$tdataUSERS[".inlineAddFields"][] = "USR_FAX";
$tdataUSERS[".inlineAddFields"][] = "USR_CELLULAR";
$tdataUSERS[".inlineAddFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".inlineAddFields"][] = "DEP_UID";
$tdataUSERS[".inlineAddFields"][] = "USR_POSITION";
$tdataUSERS[".inlineAddFields"][] = "USR_RESUME";
$tdataUSERS[".inlineAddFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".inlineAddFields"][] = "USR_ROLE";
$tdataUSERS[".inlineAddFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".inlineAddFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".inlineAddFields"][] = "USR_UX";
$tdataUSERS[".inlineAddFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".inlineAddFields"][] = "USR_UNIT_COST";
$tdataUSERS[".inlineAddFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".inlineAddFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".inlineAddFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".inlineAddFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".inlineAddFields"][] = "USR_LAST_LOGIN";

$tdataUSERS[".editFields"] = array();
$tdataUSERS[".editFields"][] = "USR_UID";
$tdataUSERS[".editFields"][] = "USR_USERNAME";
$tdataUSERS[".editFields"][] = "USR_PASSWORD";
$tdataUSERS[".editFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".editFields"][] = "USR_LASTNAME";
$tdataUSERS[".editFields"][] = "USR_EMAIL";
$tdataUSERS[".editFields"][] = "USR_DUE_DATE";
$tdataUSERS[".editFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".editFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".editFields"][] = "USR_STATUS";
$tdataUSERS[".editFields"][] = "USR_COUNTRY";
$tdataUSERS[".editFields"][] = "USR_CITY";
$tdataUSERS[".editFields"][] = "USR_LOCATION";
$tdataUSERS[".editFields"][] = "USR_ADDRESS";
$tdataUSERS[".editFields"][] = "USR_PHONE";
$tdataUSERS[".editFields"][] = "USR_FAX";
$tdataUSERS[".editFields"][] = "USR_CELLULAR";
$tdataUSERS[".editFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".editFields"][] = "DEP_UID";
$tdataUSERS[".editFields"][] = "USR_POSITION";
$tdataUSERS[".editFields"][] = "USR_RESUME";
$tdataUSERS[".editFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".editFields"][] = "USR_ROLE";
$tdataUSERS[".editFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".editFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".editFields"][] = "USR_UX";
$tdataUSERS[".editFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".editFields"][] = "USR_UNIT_COST";
$tdataUSERS[".editFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".editFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".editFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".editFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".editFields"][] = "USR_LAST_LOGIN";

$tdataUSERS[".inlineEditFields"] = array();
$tdataUSERS[".inlineEditFields"][] = "USR_UID";
$tdataUSERS[".inlineEditFields"][] = "USR_USERNAME";
$tdataUSERS[".inlineEditFields"][] = "USR_PASSWORD";
$tdataUSERS[".inlineEditFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".inlineEditFields"][] = "USR_LASTNAME";
$tdataUSERS[".inlineEditFields"][] = "USR_EMAIL";
$tdataUSERS[".inlineEditFields"][] = "USR_DUE_DATE";
$tdataUSERS[".inlineEditFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".inlineEditFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".inlineEditFields"][] = "USR_STATUS";
$tdataUSERS[".inlineEditFields"][] = "USR_COUNTRY";
$tdataUSERS[".inlineEditFields"][] = "USR_CITY";
$tdataUSERS[".inlineEditFields"][] = "USR_LOCATION";
$tdataUSERS[".inlineEditFields"][] = "USR_ADDRESS";
$tdataUSERS[".inlineEditFields"][] = "USR_PHONE";
$tdataUSERS[".inlineEditFields"][] = "USR_FAX";
$tdataUSERS[".inlineEditFields"][] = "USR_CELLULAR";
$tdataUSERS[".inlineEditFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".inlineEditFields"][] = "DEP_UID";
$tdataUSERS[".inlineEditFields"][] = "USR_POSITION";
$tdataUSERS[".inlineEditFields"][] = "USR_RESUME";
$tdataUSERS[".inlineEditFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".inlineEditFields"][] = "USR_ROLE";
$tdataUSERS[".inlineEditFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".inlineEditFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".inlineEditFields"][] = "USR_UX";
$tdataUSERS[".inlineEditFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".inlineEditFields"][] = "USR_UNIT_COST";
$tdataUSERS[".inlineEditFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".inlineEditFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".inlineEditFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".inlineEditFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".inlineEditFields"][] = "USR_LAST_LOGIN";

$tdataUSERS[".updateSelectedFields"] = array();
$tdataUSERS[".updateSelectedFields"][] = "USR_UID";
$tdataUSERS[".updateSelectedFields"][] = "USR_USERNAME";
$tdataUSERS[".updateSelectedFields"][] = "USR_PASSWORD";
$tdataUSERS[".updateSelectedFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".updateSelectedFields"][] = "USR_LASTNAME";
$tdataUSERS[".updateSelectedFields"][] = "USR_EMAIL";
$tdataUSERS[".updateSelectedFields"][] = "USR_DUE_DATE";
$tdataUSERS[".updateSelectedFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".updateSelectedFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".updateSelectedFields"][] = "USR_STATUS";
$tdataUSERS[".updateSelectedFields"][] = "USR_COUNTRY";
$tdataUSERS[".updateSelectedFields"][] = "USR_CITY";
$tdataUSERS[".updateSelectedFields"][] = "USR_LOCATION";
$tdataUSERS[".updateSelectedFields"][] = "USR_ADDRESS";
$tdataUSERS[".updateSelectedFields"][] = "USR_PHONE";
$tdataUSERS[".updateSelectedFields"][] = "USR_FAX";
$tdataUSERS[".updateSelectedFields"][] = "USR_CELLULAR";
$tdataUSERS[".updateSelectedFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".updateSelectedFields"][] = "DEP_UID";
$tdataUSERS[".updateSelectedFields"][] = "USR_POSITION";
$tdataUSERS[".updateSelectedFields"][] = "USR_RESUME";
$tdataUSERS[".updateSelectedFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".updateSelectedFields"][] = "USR_ROLE";
$tdataUSERS[".updateSelectedFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".updateSelectedFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".updateSelectedFields"][] = "USR_UX";
$tdataUSERS[".updateSelectedFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".updateSelectedFields"][] = "USR_UNIT_COST";
$tdataUSERS[".updateSelectedFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".updateSelectedFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".updateSelectedFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".updateSelectedFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".updateSelectedFields"][] = "USR_LAST_LOGIN";


$tdataUSERS[".exportFields"] = array();
$tdataUSERS[".exportFields"][] = "USR_UID";
$tdataUSERS[".exportFields"][] = "USR_USERNAME";
$tdataUSERS[".exportFields"][] = "USR_PASSWORD";
$tdataUSERS[".exportFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".exportFields"][] = "USR_LASTNAME";
$tdataUSERS[".exportFields"][] = "USR_EMAIL";
$tdataUSERS[".exportFields"][] = "USR_DUE_DATE";
$tdataUSERS[".exportFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".exportFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".exportFields"][] = "USR_STATUS";
$tdataUSERS[".exportFields"][] = "USR_COUNTRY";
$tdataUSERS[".exportFields"][] = "USR_CITY";
$tdataUSERS[".exportFields"][] = "USR_LOCATION";
$tdataUSERS[".exportFields"][] = "USR_ADDRESS";
$tdataUSERS[".exportFields"][] = "USR_PHONE";
$tdataUSERS[".exportFields"][] = "USR_FAX";
$tdataUSERS[".exportFields"][] = "USR_CELLULAR";
$tdataUSERS[".exportFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".exportFields"][] = "DEP_UID";
$tdataUSERS[".exportFields"][] = "USR_POSITION";
$tdataUSERS[".exportFields"][] = "USR_RESUME";
$tdataUSERS[".exportFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".exportFields"][] = "USR_ROLE";
$tdataUSERS[".exportFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".exportFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".exportFields"][] = "USR_UX";
$tdataUSERS[".exportFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".exportFields"][] = "USR_UNIT_COST";
$tdataUSERS[".exportFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".exportFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".exportFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".exportFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".exportFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".exportFields"][] = "USR_ID";

$tdataUSERS[".importFields"] = array();
$tdataUSERS[".importFields"][] = "USR_UID";
$tdataUSERS[".importFields"][] = "USR_USERNAME";
$tdataUSERS[".importFields"][] = "USR_PASSWORD";
$tdataUSERS[".importFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".importFields"][] = "USR_LASTNAME";
$tdataUSERS[".importFields"][] = "USR_EMAIL";
$tdataUSERS[".importFields"][] = "USR_DUE_DATE";
$tdataUSERS[".importFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".importFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".importFields"][] = "USR_STATUS";
$tdataUSERS[".importFields"][] = "USR_COUNTRY";
$tdataUSERS[".importFields"][] = "USR_CITY";
$tdataUSERS[".importFields"][] = "USR_LOCATION";
$tdataUSERS[".importFields"][] = "USR_ADDRESS";
$tdataUSERS[".importFields"][] = "USR_PHONE";
$tdataUSERS[".importFields"][] = "USR_FAX";
$tdataUSERS[".importFields"][] = "USR_CELLULAR";
$tdataUSERS[".importFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".importFields"][] = "DEP_UID";
$tdataUSERS[".importFields"][] = "USR_POSITION";
$tdataUSERS[".importFields"][] = "USR_RESUME";
$tdataUSERS[".importFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".importFields"][] = "USR_ROLE";
$tdataUSERS[".importFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".importFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".importFields"][] = "USR_UX";
$tdataUSERS[".importFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".importFields"][] = "USR_UNIT_COST";
$tdataUSERS[".importFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".importFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".importFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".importFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".importFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".importFields"][] = "USR_ID";

$tdataUSERS[".printFields"] = array();
$tdataUSERS[".printFields"][] = "USR_UID";
$tdataUSERS[".printFields"][] = "USR_USERNAME";
$tdataUSERS[".printFields"][] = "USR_PASSWORD";
$tdataUSERS[".printFields"][] = "USR_FIRSTNAME";
$tdataUSERS[".printFields"][] = "USR_LASTNAME";
$tdataUSERS[".printFields"][] = "USR_EMAIL";
$tdataUSERS[".printFields"][] = "USR_DUE_DATE";
$tdataUSERS[".printFields"][] = "USR_CREATE_DATE";
$tdataUSERS[".printFields"][] = "USR_UPDATE_DATE";
$tdataUSERS[".printFields"][] = "USR_STATUS";
$tdataUSERS[".printFields"][] = "USR_COUNTRY";
$tdataUSERS[".printFields"][] = "USR_CITY";
$tdataUSERS[".printFields"][] = "USR_LOCATION";
$tdataUSERS[".printFields"][] = "USR_ADDRESS";
$tdataUSERS[".printFields"][] = "USR_PHONE";
$tdataUSERS[".printFields"][] = "USR_FAX";
$tdataUSERS[".printFields"][] = "USR_CELLULAR";
$tdataUSERS[".printFields"][] = "USR_ZIP_CODE";
$tdataUSERS[".printFields"][] = "DEP_UID";
$tdataUSERS[".printFields"][] = "USR_POSITION";
$tdataUSERS[".printFields"][] = "USR_RESUME";
$tdataUSERS[".printFields"][] = "USR_BIRTHDAY";
$tdataUSERS[".printFields"][] = "USR_ROLE";
$tdataUSERS[".printFields"][] = "USR_REPORTS_TO";
$tdataUSERS[".printFields"][] = "USR_REPLACED_BY";
$tdataUSERS[".printFields"][] = "USR_UX";
$tdataUSERS[".printFields"][] = "USR_COST_BY_HOUR";
$tdataUSERS[".printFields"][] = "USR_UNIT_COST";
$tdataUSERS[".printFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataUSERS[".printFields"][] = "USR_BOOKMARK_START_CASES";
$tdataUSERS[".printFields"][] = "USR_TIME_ZONE";
$tdataUSERS[".printFields"][] = "USR_DEFAULT_LANG";
$tdataUSERS[".printFields"][] = "USR_LAST_LOGIN";
$tdataUSERS[".printFields"][] = "USR_ID";

//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_UID"] = $fdata;
//	USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_USERNAME";
	$fdata["GoodName"] = "USR_USERNAME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_USERNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_USERNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_USERNAME";

	
	
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








	$tdataUSERS["USR_USERNAME"] = $fdata;
//	USR_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_PASSWORD";
	$fdata["GoodName"] = "USR_PASSWORD";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_PASSWORD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_PASSWORD";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_PASSWORD"] = $fdata;
//	USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USR_FIRSTNAME";
	$fdata["GoodName"] = "USR_FIRSTNAME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_FIRSTNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_FIRSTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_FIRSTNAME";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_FIRSTNAME"] = $fdata;
//	USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_LASTNAME";
	$fdata["GoodName"] = "USR_LASTNAME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_LASTNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_LASTNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_LASTNAME";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_LASTNAME"] = $fdata;
//	USR_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_EMAIL";
	$fdata["GoodName"] = "USR_EMAIL";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_EMAIL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_EMAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_EMAIL";

	
	
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
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_EMAIL"] = $fdata;
//	USR_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USR_DUE_DATE";
	$fdata["GoodName"] = "USR_DUE_DATE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_DUE_DATE");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_DUE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_DUE_DATE";

	
	
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








	$tdataUSERS["USR_DUE_DATE"] = $fdata;
//	USR_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "USR_CREATE_DATE";
	$fdata["GoodName"] = "USR_CREATE_DATE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_CREATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_CREATE_DATE";

	
	
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








	$tdataUSERS["USR_CREATE_DATE"] = $fdata;
//	USR_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "USR_UPDATE_DATE";
	$fdata["GoodName"] = "USR_UPDATE_DATE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_UPDATE_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UPDATE_DATE";

	
	
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








	$tdataUSERS["USR_UPDATE_DATE"] = $fdata;
//	USR_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "USR_STATUS";
	$fdata["GoodName"] = "USR_STATUS";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_STATUS";

	
	
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








	$tdataUSERS["USR_STATUS"] = $fdata;
//	USR_COUNTRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USR_COUNTRY";
	$fdata["GoodName"] = "USR_COUNTRY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_COUNTRY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_COUNTRY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_COUNTRY";

	
	
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
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_COUNTRY"] = $fdata;
//	USR_CITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "USR_CITY";
	$fdata["GoodName"] = "USR_CITY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_CITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_CITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_CITY";

	
	
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
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_CITY"] = $fdata;
//	USR_LOCATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "USR_LOCATION";
	$fdata["GoodName"] = "USR_LOCATION";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_LOCATION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_LOCATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_LOCATION";

	
	
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
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_LOCATION"] = $fdata;
//	USR_ADDRESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "USR_ADDRESS";
	$fdata["GoodName"] = "USR_ADDRESS";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_ADDRESS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_ADDRESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_ADDRESS";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_ADDRESS"] = $fdata;
//	USR_PHONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "USR_PHONE";
	$fdata["GoodName"] = "USR_PHONE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_PHONE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_PHONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_PHONE";

	
	
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
			$edata["EditParams"].= " maxlength=24";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_PHONE"] = $fdata;
//	USR_FAX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "USR_FAX";
	$fdata["GoodName"] = "USR_FAX";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_FAX");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_FAX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_FAX";

	
	
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
			$edata["EditParams"].= " maxlength=24";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_FAX"] = $fdata;
//	USR_CELLULAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "USR_CELLULAR";
	$fdata["GoodName"] = "USR_CELLULAR";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_CELLULAR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_CELLULAR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_CELLULAR";

	
	
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
			$edata["EditParams"].= " maxlength=24";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_CELLULAR"] = $fdata;
//	USR_ZIP_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "USR_ZIP_CODE";
	$fdata["GoodName"] = "USR_ZIP_CODE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_ZIP_CODE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_ZIP_CODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_ZIP_CODE";

	
	
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
			$edata["EditParams"].= " maxlength=16";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_ZIP_CODE"] = $fdata;
//	DEP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEP_UID";
	$fdata["GoodName"] = "DEP_UID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","DEP_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DEP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_UID";

	
	
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








	$tdataUSERS["DEP_UID"] = $fdata;
//	USR_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "USR_POSITION";
	$fdata["GoodName"] = "USR_POSITION";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_POSITION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_POSITION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_POSITION";

	
	
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








	$tdataUSERS["USR_POSITION"] = $fdata;
//	USR_RESUME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "USR_RESUME";
	$fdata["GoodName"] = "USR_RESUME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_RESUME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_RESUME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_RESUME";

	
	
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








	$tdataUSERS["USR_RESUME"] = $fdata;
//	USR_BIRTHDAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "USR_BIRTHDAY";
	$fdata["GoodName"] = "USR_BIRTHDAY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_BIRTHDAY");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_BIRTHDAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_BIRTHDAY";

	
	
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








	$tdataUSERS["USR_BIRTHDAY"] = $fdata;
//	USR_ROLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "USR_ROLE";
	$fdata["GoodName"] = "USR_ROLE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_ROLE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_ROLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_ROLE";

	
	
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








	$tdataUSERS["USR_ROLE"] = $fdata;
//	USR_REPORTS_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "USR_REPORTS_TO";
	$fdata["GoodName"] = "USR_REPORTS_TO";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_REPORTS_TO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_REPORTS_TO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_REPORTS_TO";

	
	
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








	$tdataUSERS["USR_REPORTS_TO"] = $fdata;
//	USR_REPLACED_BY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "USR_REPLACED_BY";
	$fdata["GoodName"] = "USR_REPLACED_BY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_REPLACED_BY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_REPLACED_BY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_REPLACED_BY";

	
	
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








	$tdataUSERS["USR_REPLACED_BY"] = $fdata;
//	USR_UX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "USR_UX";
	$fdata["GoodName"] = "USR_UX";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_UX");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_UX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UX";

	
	
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
			$edata["EditParams"].= " maxlength=128";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_UX"] = $fdata;
//	USR_COST_BY_HOUR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "USR_COST_BY_HOUR";
	$fdata["GoodName"] = "USR_COST_BY_HOUR";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_COST_BY_HOUR");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_COST_BY_HOUR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_COST_BY_HOUR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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








	$tdataUSERS["USR_COST_BY_HOUR"] = $fdata;
//	USR_UNIT_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "USR_UNIT_COST";
	$fdata["GoodName"] = "USR_UNIT_COST";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_UNIT_COST");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_UNIT_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_UNIT_COST";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataUSERS["USR_UNIT_COST"] = $fdata;
//	USR_PMDRIVE_FOLDER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "USR_PMDRIVE_FOLDER_UID";
	$fdata["GoodName"] = "USR_PMDRIVE_FOLDER_UID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_PMDRIVE_FOLDER_UID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_PMDRIVE_FOLDER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_PMDRIVE_FOLDER_UID";

	
	
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








	$tdataUSERS["USR_PMDRIVE_FOLDER_UID"] = $fdata;
//	USR_BOOKMARK_START_CASES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "USR_BOOKMARK_START_CASES";
	$fdata["GoodName"] = "USR_BOOKMARK_START_CASES";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_BOOKMARK_START_CASES");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_BOOKMARK_START_CASES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_BOOKMARK_START_CASES";

	
	
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








	$tdataUSERS["USR_BOOKMARK_START_CASES"] = $fdata;
//	USR_TIME_ZONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "USR_TIME_ZONE";
	$fdata["GoodName"] = "USR_TIME_ZONE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_TIME_ZONE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_TIME_ZONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_TIME_ZONE";

	
	
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








	$tdataUSERS["USR_TIME_ZONE"] = $fdata;
//	USR_DEFAULT_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "USR_DEFAULT_LANG";
	$fdata["GoodName"] = "USR_DEFAULT_LANG";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_DEFAULT_LANG");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_DEFAULT_LANG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_DEFAULT_LANG";

	
	
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








	$tdataUSERS["USR_DEFAULT_LANG"] = $fdata;
//	USR_LAST_LOGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "USR_LAST_LOGIN";
	$fdata["GoodName"] = "USR_LAST_LOGIN";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_LAST_LOGIN");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_LAST_LOGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_LAST_LOGIN";

	
	
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








	$tdataUSERS["USR_LAST_LOGIN"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("USERS","USR_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USR_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_ID";

	
	
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




	$tdataUSERS["USR_ID"] = $fdata;


$tables_data["USERS"]=&$tdataUSERS;
$field_labels["USERS"] = &$fieldLabelsUSERS;
$fieldToolTips["USERS"] = &$fieldToolTipsUSERS;
$placeHolders["USERS"] = &$placeHoldersUSERS;
$page_titles["USERS"] = &$pageTitlesUSERS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["USERS"] = array();
//	USERS_PROPERTIES
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="USERS_PROPERTIES";
		$detailsParam["dOriginalTable"] = "USERS_PROPERTIES";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "USERS_PROPERTIES";
	$detailsParam["dCaptionTable"] = GetTableCaption("USERS_PROPERTIES");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["USERS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["USERS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["USERS"][$dIndex]["masterKeys"][]="USR_UID";

				$detailsTablesData["USERS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["USERS"][$dIndex]["detailKeys"][]="USR_UID";
//	RBAC_USERS_ROLES
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="RBAC_USERS_ROLES";
		$detailsParam["dOriginalTable"] = "RBAC_USERS_ROLES";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "RBAC_USERS_ROLES";
	$detailsParam["dCaptionTable"] = GetTableCaption("RBAC_USERS_ROLES");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["USERS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["USERS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["USERS"][$dIndex]["masterKeys"][]="USR_UID";

				$detailsTablesData["USERS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["USERS"][$dIndex]["detailKeys"][]="USR_UID";

// tables which are master tables for current table (detail)
$masterTablesData["USERS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_USERS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USR_UID,  	USR_USERNAME,  	USR_PASSWORD,  	USR_FIRSTNAME,  	USR_LASTNAME,  	USR_EMAIL,  	USR_DUE_DATE,  	USR_CREATE_DATE,  	USR_UPDATE_DATE,  	USR_STATUS,  	USR_COUNTRY,  	USR_CITY,  	USR_LOCATION,  	USR_ADDRESS,  	USR_PHONE,  	USR_FAX,  	USR_CELLULAR,  	USR_ZIP_CODE,  	DEP_UID,  	USR_POSITION,  	USR_RESUME,  	USR_BIRTHDAY,  	USR_ROLE,  	USR_REPORTS_TO,  	USR_REPLACED_BY,  	USR_UX,  	USR_COST_BY_HOUR,  	USR_UNIT_COST,  	USR_PMDRIVE_FOLDER_UID,  	USR_BOOKMARK_START_CASES,  	USR_TIME_ZONE,  	USR_DEFAULT_LANG,  	USR_LAST_LOGIN,  	USR_ID";
$proto0["m_strFrom"] = "FROM USERS";
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
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto6["m_sql"] = "USR_UID";
$proto6["m_srcTableName"] = "USERS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_USERNAME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto8["m_sql"] = "USR_USERNAME";
$proto8["m_srcTableName"] = "USERS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PASSWORD",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto10["m_sql"] = "USR_PASSWORD";
$proto10["m_srcTableName"] = "USERS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_FIRSTNAME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto12["m_sql"] = "USR_FIRSTNAME";
$proto12["m_srcTableName"] = "USERS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LASTNAME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto14["m_sql"] = "USR_LASTNAME";
$proto14["m_srcTableName"] = "USERS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_EMAIL",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto16["m_sql"] = "USR_EMAIL";
$proto16["m_srcTableName"] = "USERS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_DUE_DATE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto18["m_sql"] = "USR_DUE_DATE";
$proto18["m_srcTableName"] = "USERS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CREATE_DATE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto20["m_sql"] = "USR_CREATE_DATE";
$proto20["m_srcTableName"] = "USERS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UPDATE_DATE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto22["m_sql"] = "USR_UPDATE_DATE";
$proto22["m_srcTableName"] = "USERS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_STATUS",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto24["m_sql"] = "USR_STATUS";
$proto24["m_srcTableName"] = "USERS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_COUNTRY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto26["m_sql"] = "USR_COUNTRY";
$proto26["m_srcTableName"] = "USERS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CITY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto28["m_sql"] = "USR_CITY";
$proto28["m_srcTableName"] = "USERS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LOCATION",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto30["m_sql"] = "USR_LOCATION";
$proto30["m_srcTableName"] = "USERS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ADDRESS",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto32["m_sql"] = "USR_ADDRESS";
$proto32["m_srcTableName"] = "USERS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PHONE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto34["m_sql"] = "USR_PHONE";
$proto34["m_srcTableName"] = "USERS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_FAX",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto36["m_sql"] = "USR_FAX";
$proto36["m_srcTableName"] = "USERS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CELLULAR",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto38["m_sql"] = "USR_CELLULAR";
$proto38["m_srcTableName"] = "USERS";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ZIP_CODE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto40["m_sql"] = "USR_ZIP_CODE";
$proto40["m_srcTableName"] = "USERS";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_UID",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto42["m_sql"] = "DEP_UID";
$proto42["m_srcTableName"] = "USERS";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_POSITION",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto44["m_sql"] = "USR_POSITION";
$proto44["m_srcTableName"] = "USERS";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_RESUME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto46["m_sql"] = "USR_RESUME";
$proto46["m_srcTableName"] = "USERS";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_BIRTHDAY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto48["m_sql"] = "USR_BIRTHDAY";
$proto48["m_srcTableName"] = "USERS";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ROLE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto50["m_sql"] = "USR_ROLE";
$proto50["m_srcTableName"] = "USERS";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_REPORTS_TO",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto52["m_sql"] = "USR_REPORTS_TO";
$proto52["m_srcTableName"] = "USERS";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_REPLACED_BY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto54["m_sql"] = "USR_REPLACED_BY";
$proto54["m_srcTableName"] = "USERS";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UX",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto56["m_sql"] = "USR_UX";
$proto56["m_srcTableName"] = "USERS";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_COST_BY_HOUR",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto58["m_sql"] = "USR_COST_BY_HOUR";
$proto58["m_srcTableName"] = "USERS";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UNIT_COST",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto60["m_sql"] = "USR_UNIT_COST";
$proto60["m_srcTableName"] = "USERS";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PMDRIVE_FOLDER_UID",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto62["m_sql"] = "USR_PMDRIVE_FOLDER_UID";
$proto62["m_srcTableName"] = "USERS";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_BOOKMARK_START_CASES",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto64["m_sql"] = "USR_BOOKMARK_START_CASES";
$proto64["m_srcTableName"] = "USERS";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_TIME_ZONE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto66["m_sql"] = "USR_TIME_ZONE";
$proto66["m_srcTableName"] = "USERS";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_DEFAULT_LANG",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto68["m_sql"] = "USR_DEFAULT_LANG";
$proto68["m_srcTableName"] = "USERS";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LAST_LOGIN",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto70["m_sql"] = "USR_LAST_LOGIN";
$proto70["m_srcTableName"] = "USERS";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "USERS",
	"m_srcTableName" => "USERS"
));

$proto72["m_sql"] = "USR_ID";
$proto72["m_srcTableName"] = "USERS";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "USERS";
$proto75["m_srcTableName"] = "USERS";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "USR_UID";
$proto75["m_columns"][] = "USR_USERNAME";
$proto75["m_columns"][] = "USR_PASSWORD";
$proto75["m_columns"][] = "USR_FIRSTNAME";
$proto75["m_columns"][] = "USR_LASTNAME";
$proto75["m_columns"][] = "USR_EMAIL";
$proto75["m_columns"][] = "USR_DUE_DATE";
$proto75["m_columns"][] = "USR_CREATE_DATE";
$proto75["m_columns"][] = "USR_UPDATE_DATE";
$proto75["m_columns"][] = "USR_STATUS";
$proto75["m_columns"][] = "USR_COUNTRY";
$proto75["m_columns"][] = "USR_CITY";
$proto75["m_columns"][] = "USR_LOCATION";
$proto75["m_columns"][] = "USR_ADDRESS";
$proto75["m_columns"][] = "USR_PHONE";
$proto75["m_columns"][] = "USR_FAX";
$proto75["m_columns"][] = "USR_CELLULAR";
$proto75["m_columns"][] = "USR_ZIP_CODE";
$proto75["m_columns"][] = "DEP_UID";
$proto75["m_columns"][] = "USR_POSITION";
$proto75["m_columns"][] = "USR_RESUME";
$proto75["m_columns"][] = "USR_BIRTHDAY";
$proto75["m_columns"][] = "USR_ROLE";
$proto75["m_columns"][] = "USR_REPORTS_TO";
$proto75["m_columns"][] = "USR_REPLACED_BY";
$proto75["m_columns"][] = "USR_UX";
$proto75["m_columns"][] = "USR_COST_BY_HOUR";
$proto75["m_columns"][] = "USR_UNIT_COST";
$proto75["m_columns"][] = "USR_PMDRIVE_FOLDER_UID";
$proto75["m_columns"][] = "USR_BOOKMARK_START_CASES";
$proto75["m_columns"][] = "USR_TIME_ZONE";
$proto75["m_columns"][] = "USR_DEFAULT_LANG";
$proto75["m_columns"][] = "USR_LAST_LOGIN";
$proto75["m_columns"][] = "USR_ID";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "USERS";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "USERS";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="USERS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_USERS = createSqlQuery_USERS();


	
						;

																																		

$tdataUSERS[".sqlquery"] = $queryData_USERS;

$tableEvents["USERS"] = new eventsBase;
$tdataUSERS[".hasEvents"] = false;

?>
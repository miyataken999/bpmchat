<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 20;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "USERS";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsadmin_members["Japanese"] = array();
	$fieldToolTipsadmin_members["Japanese"] = array();
	$placeHoldersadmin_members["Japanese"] = array();
	$pageTitlesadmin_members["Japanese"] = array();
	$fieldLabelsadmin_members["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsadmin_members["Japanese"]["USR_UID"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_UID"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_USERNAME"] = "USRユーザ名";
	$fieldToolTipsadmin_members["Japanese"]["USR_USERNAME"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_USERNAME"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_PASSWORD"] = "USRパスワード";
	$fieldToolTipsadmin_members["Japanese"]["USR_PASSWORD"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_PASSWORD"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_FIRSTNAME"] = "USR FIRSTNAME";
	$fieldToolTipsadmin_members["Japanese"]["USR_FIRSTNAME"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_FIRSTNAME"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_LASTNAME"] = "USR姓";
	$fieldToolTipsadmin_members["Japanese"]["USR_LASTNAME"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_LASTNAME"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_EMAIL"] = "USRメール";
	$fieldToolTipsadmin_members["Japanese"]["USR_EMAIL"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_EMAIL"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_DUE_DATE"] = "USR期日";
	$fieldToolTipsadmin_members["Japanese"]["USR_DUE_DATE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_DUE_DATE"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_CREATE_DATE"] = "USR日付を作成します";
	$fieldToolTipsadmin_members["Japanese"]["USR_CREATE_DATE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_CREATE_DATE"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_UPDATE_DATE"] = "USR更新日";
	$fieldToolTipsadmin_members["Japanese"]["USR_UPDATE_DATE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_UPDATE_DATE"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_STATUS"] = "USR状況";
	$fieldToolTipsadmin_members["Japanese"]["USR_STATUS"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_STATUS"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_COUNTRY"] = "USR国";
	$fieldToolTipsadmin_members["Japanese"]["USR_COUNTRY"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_COUNTRY"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_CITY"] = "USR市";
	$fieldToolTipsadmin_members["Japanese"]["USR_CITY"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_CITY"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_LOCATION"] = "USR場所";
	$fieldToolTipsadmin_members["Japanese"]["USR_LOCATION"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_LOCATION"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_ADDRESS"] = "USRアドレス";
	$fieldToolTipsadmin_members["Japanese"]["USR_ADDRESS"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_ADDRESS"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_PHONE"] = "USR電話";
	$fieldToolTipsadmin_members["Japanese"]["USR_PHONE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_PHONE"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_FAX"] = "USRファックス";
	$fieldToolTipsadmin_members["Japanese"]["USR_FAX"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_FAX"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_CELLULAR"] = "携帯USR";
	$fieldToolTipsadmin_members["Japanese"]["USR_CELLULAR"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_CELLULAR"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_ZIP_CODE"] = "USR郵便番号";
	$fieldToolTipsadmin_members["Japanese"]["USR_ZIP_CODE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_ZIP_CODE"] = "";
	$fieldLabelsadmin_members["Japanese"]["DEP_UID"] = "DEPのuid";
	$fieldToolTipsadmin_members["Japanese"]["DEP_UID"] = "";
	$placeHoldersadmin_members["Japanese"]["DEP_UID"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_POSITION"] = "USR位置";
	$fieldToolTipsadmin_members["Japanese"]["USR_POSITION"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_POSITION"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_RESUME"] = "USR履歴書";
	$fieldToolTipsadmin_members["Japanese"]["USR_RESUME"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_RESUME"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_BIRTHDAY"] = "USR誕生日";
	$fieldToolTipsadmin_members["Japanese"]["USR_BIRTHDAY"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_BIRTHDAY"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_ROLE"] = "USR役割";
	$fieldToolTipsadmin_members["Japanese"]["USR_ROLE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_ROLE"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_REPORTS_TO"] = "USRレポートへ";
	$fieldToolTipsadmin_members["Japanese"]["USR_REPORTS_TO"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_REPORTS_TO"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_REPLACED_BY"] = "USRに置き換え";
	$fieldToolTipsadmin_members["Japanese"]["USR_REPLACED_BY"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_REPLACED_BY"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_UX"] = "USR UX";
	$fieldToolTipsadmin_members["Japanese"]["USR_UX"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_UX"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_COST_BY_HOUR"] = "時間によってUSRコスト";
	$fieldToolTipsadmin_members["Japanese"]["USR_COST_BY_HOUR"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_COST_BY_HOUR"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_UNIT_COST"] = "USR単価";
	$fieldToolTipsadmin_members["Japanese"]["USR_UNIT_COST"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_UNIT_COST"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_PMDRIVE_FOLDER_UID"] = "USR pmdriveフォルダUID";
	$fieldToolTipsadmin_members["Japanese"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_BOOKMARK_START_CASES"] = "USRブックマーク例を開始";
	$fieldToolTipsadmin_members["Japanese"]["USR_BOOKMARK_START_CASES"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_BOOKMARK_START_CASES"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_TIME_ZONE"] = "USRタイムゾーン";
	$fieldToolTipsadmin_members["Japanese"]["USR_TIME_ZONE"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_TIME_ZONE"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_DEFAULT_LANG"] = "USRデフォルトLANG";
	$fieldToolTipsadmin_members["Japanese"]["USR_DEFAULT_LANG"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_DEFAULT_LANG"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_LAST_LOGIN"] = "USR最後のログイン";
	$fieldToolTipsadmin_members["Japanese"]["USR_LAST_LOGIN"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_LAST_LOGIN"] = "";
	$fieldLabelsadmin_members["Japanese"]["USR_ID"] = "USR ID";
	$fieldToolTipsadmin_members["Japanese"]["USR_ID"] = "";
	$placeHoldersadmin_members["Japanese"]["USR_ID"] = "";
	if (count($fieldToolTipsadmin_members["Japanese"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsadmin_members["English"]["USR_UID"] = "";
	$placeHoldersadmin_members["English"]["USR_UID"] = "";
	$fieldLabelsadmin_members["English"]["USR_USERNAME"] = "USRユーザ名";
	$fieldToolTipsadmin_members["English"]["USR_USERNAME"] = "";
	$placeHoldersadmin_members["English"]["USR_USERNAME"] = "";
	$fieldLabelsadmin_members["English"]["USR_PASSWORD"] = "USRパスワード";
	$fieldToolTipsadmin_members["English"]["USR_PASSWORD"] = "";
	$placeHoldersadmin_members["English"]["USR_PASSWORD"] = "";
	$fieldLabelsadmin_members["English"]["USR_FIRSTNAME"] = "USR FIRSTNAME";
	$fieldToolTipsadmin_members["English"]["USR_FIRSTNAME"] = "";
	$placeHoldersadmin_members["English"]["USR_FIRSTNAME"] = "";
	$fieldLabelsadmin_members["English"]["USR_LASTNAME"] = "USR姓";
	$fieldToolTipsadmin_members["English"]["USR_LASTNAME"] = "";
	$placeHoldersadmin_members["English"]["USR_LASTNAME"] = "";
	$fieldLabelsadmin_members["English"]["USR_EMAIL"] = "USRメール";
	$fieldToolTipsadmin_members["English"]["USR_EMAIL"] = "";
	$placeHoldersadmin_members["English"]["USR_EMAIL"] = "";
	$fieldLabelsadmin_members["English"]["USR_DUE_DATE"] = "USR期日";
	$fieldToolTipsadmin_members["English"]["USR_DUE_DATE"] = "";
	$placeHoldersadmin_members["English"]["USR_DUE_DATE"] = "";
	$fieldLabelsadmin_members["English"]["USR_CREATE_DATE"] = "USR日付を作成します";
	$fieldToolTipsadmin_members["English"]["USR_CREATE_DATE"] = "";
	$placeHoldersadmin_members["English"]["USR_CREATE_DATE"] = "";
	$fieldLabelsadmin_members["English"]["USR_UPDATE_DATE"] = "USR更新日";
	$fieldToolTipsadmin_members["English"]["USR_UPDATE_DATE"] = "";
	$placeHoldersadmin_members["English"]["USR_UPDATE_DATE"] = "";
	$fieldLabelsadmin_members["English"]["USR_STATUS"] = "USR状況";
	$fieldToolTipsadmin_members["English"]["USR_STATUS"] = "";
	$placeHoldersadmin_members["English"]["USR_STATUS"] = "";
	$fieldLabelsadmin_members["English"]["USR_COUNTRY"] = "USR国";
	$fieldToolTipsadmin_members["English"]["USR_COUNTRY"] = "";
	$placeHoldersadmin_members["English"]["USR_COUNTRY"] = "";
	$fieldLabelsadmin_members["English"]["USR_CITY"] = "USR市";
	$fieldToolTipsadmin_members["English"]["USR_CITY"] = "";
	$placeHoldersadmin_members["English"]["USR_CITY"] = "";
	$fieldLabelsadmin_members["English"]["USR_LOCATION"] = "USR場所";
	$fieldToolTipsadmin_members["English"]["USR_LOCATION"] = "";
	$placeHoldersadmin_members["English"]["USR_LOCATION"] = "";
	$fieldLabelsadmin_members["English"]["USR_ADDRESS"] = "USRアドレス";
	$fieldToolTipsadmin_members["English"]["USR_ADDRESS"] = "";
	$placeHoldersadmin_members["English"]["USR_ADDRESS"] = "";
	$fieldLabelsadmin_members["English"]["USR_PHONE"] = "USR電話";
	$fieldToolTipsadmin_members["English"]["USR_PHONE"] = "";
	$placeHoldersadmin_members["English"]["USR_PHONE"] = "";
	$fieldLabelsadmin_members["English"]["USR_FAX"] = "USRファックス";
	$fieldToolTipsadmin_members["English"]["USR_FAX"] = "";
	$placeHoldersadmin_members["English"]["USR_FAX"] = "";
	$fieldLabelsadmin_members["English"]["USR_CELLULAR"] = "携帯USR";
	$fieldToolTipsadmin_members["English"]["USR_CELLULAR"] = "";
	$placeHoldersadmin_members["English"]["USR_CELLULAR"] = "";
	$fieldLabelsadmin_members["English"]["USR_ZIP_CODE"] = "USR郵便番号";
	$fieldToolTipsadmin_members["English"]["USR_ZIP_CODE"] = "";
	$placeHoldersadmin_members["English"]["USR_ZIP_CODE"] = "";
	$fieldLabelsadmin_members["English"]["DEP_UID"] = "DEPのuid";
	$fieldToolTipsadmin_members["English"]["DEP_UID"] = "";
	$placeHoldersadmin_members["English"]["DEP_UID"] = "";
	$fieldLabelsadmin_members["English"]["USR_POSITION"] = "USR位置";
	$fieldToolTipsadmin_members["English"]["USR_POSITION"] = "";
	$placeHoldersadmin_members["English"]["USR_POSITION"] = "";
	$fieldLabelsadmin_members["English"]["USR_RESUME"] = "USR履歴書";
	$fieldToolTipsadmin_members["English"]["USR_RESUME"] = "";
	$placeHoldersadmin_members["English"]["USR_RESUME"] = "";
	$fieldLabelsadmin_members["English"]["USR_BIRTHDAY"] = "USR誕生日";
	$fieldToolTipsadmin_members["English"]["USR_BIRTHDAY"] = "";
	$placeHoldersadmin_members["English"]["USR_BIRTHDAY"] = "";
	$fieldLabelsadmin_members["English"]["USR_ROLE"] = "USR役割";
	$fieldToolTipsadmin_members["English"]["USR_ROLE"] = "";
	$placeHoldersadmin_members["English"]["USR_ROLE"] = "";
	$fieldLabelsadmin_members["English"]["USR_REPORTS_TO"] = "USRレポートへ";
	$fieldToolTipsadmin_members["English"]["USR_REPORTS_TO"] = "";
	$placeHoldersadmin_members["English"]["USR_REPORTS_TO"] = "";
	$fieldLabelsadmin_members["English"]["USR_REPLACED_BY"] = "USRに置き換え";
	$fieldToolTipsadmin_members["English"]["USR_REPLACED_BY"] = "";
	$placeHoldersadmin_members["English"]["USR_REPLACED_BY"] = "";
	$fieldLabelsadmin_members["English"]["USR_UX"] = "USR UX";
	$fieldToolTipsadmin_members["English"]["USR_UX"] = "";
	$placeHoldersadmin_members["English"]["USR_UX"] = "";
	$fieldLabelsadmin_members["English"]["USR_COST_BY_HOUR"] = "時間によってUSRコスト";
	$fieldToolTipsadmin_members["English"]["USR_COST_BY_HOUR"] = "";
	$placeHoldersadmin_members["English"]["USR_COST_BY_HOUR"] = "";
	$fieldLabelsadmin_members["English"]["USR_UNIT_COST"] = "USR単価";
	$fieldToolTipsadmin_members["English"]["USR_UNIT_COST"] = "";
	$placeHoldersadmin_members["English"]["USR_UNIT_COST"] = "";
	$fieldLabelsadmin_members["English"]["USR_PMDRIVE_FOLDER_UID"] = "USR pmdriveフォルダUID";
	$fieldToolTipsadmin_members["English"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$placeHoldersadmin_members["English"]["USR_PMDRIVE_FOLDER_UID"] = "";
	$fieldLabelsadmin_members["English"]["USR_BOOKMARK_START_CASES"] = "USRブックマーク例を開始";
	$fieldToolTipsadmin_members["English"]["USR_BOOKMARK_START_CASES"] = "";
	$placeHoldersadmin_members["English"]["USR_BOOKMARK_START_CASES"] = "";
	$fieldLabelsadmin_members["English"]["USR_TIME_ZONE"] = "USRタイムゾーン";
	$fieldToolTipsadmin_members["English"]["USR_TIME_ZONE"] = "";
	$placeHoldersadmin_members["English"]["USR_TIME_ZONE"] = "";
	$fieldLabelsadmin_members["English"]["USR_DEFAULT_LANG"] = "USRデフォルトLANG";
	$fieldToolTipsadmin_members["English"]["USR_DEFAULT_LANG"] = "";
	$placeHoldersadmin_members["English"]["USR_DEFAULT_LANG"] = "";
	$fieldLabelsadmin_members["English"]["USR_LAST_LOGIN"] = "USR最後のログイン";
	$fieldToolTipsadmin_members["English"]["USR_LAST_LOGIN"] = "";
	$placeHoldersadmin_members["English"]["USR_LAST_LOGIN"] = "";
	$fieldLabelsadmin_members["English"]["USR_ID"] = "USR ID";
	$fieldToolTipsadmin_members["English"]["USR_ID"] = "";
	$placeHoldersadmin_members["English"]["USR_ID"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$placeHoldersadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 0;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "USERS";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();
	
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = false;






$tdataadmin_members[".reorderRecordsByHeader"] = true;
$tdataadmin_members[".createSortByDropdown"] = true;
$tdataadmin_members[".strSortControlSettingsJSON"] = "";








$tdataadmin_members[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



				

$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;





$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "USR_ID";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "USR_UID";
$tdataadmin_members[".googleLikeFields"][] = "USR_USERNAME";
$tdataadmin_members[".googleLikeFields"][] = "USR_PASSWORD";
$tdataadmin_members[".googleLikeFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".googleLikeFields"][] = "USR_LASTNAME";
$tdataadmin_members[".googleLikeFields"][] = "USR_EMAIL";
$tdataadmin_members[".googleLikeFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".googleLikeFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".googleLikeFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".googleLikeFields"][] = "USR_STATUS";
$tdataadmin_members[".googleLikeFields"][] = "USR_COUNTRY";
$tdataadmin_members[".googleLikeFields"][] = "USR_CITY";
$tdataadmin_members[".googleLikeFields"][] = "USR_LOCATION";
$tdataadmin_members[".googleLikeFields"][] = "USR_ADDRESS";
$tdataadmin_members[".googleLikeFields"][] = "USR_PHONE";
$tdataadmin_members[".googleLikeFields"][] = "USR_FAX";
$tdataadmin_members[".googleLikeFields"][] = "USR_CELLULAR";
$tdataadmin_members[".googleLikeFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".googleLikeFields"][] = "DEP_UID";
$tdataadmin_members[".googleLikeFields"][] = "USR_POSITION";
$tdataadmin_members[".googleLikeFields"][] = "USR_RESUME";
$tdataadmin_members[".googleLikeFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".googleLikeFields"][] = "USR_ROLE";
$tdataadmin_members[".googleLikeFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".googleLikeFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".googleLikeFields"][] = "USR_UX";
$tdataadmin_members[".googleLikeFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".googleLikeFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".googleLikeFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".googleLikeFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".googleLikeFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".googleLikeFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".googleLikeFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".googleLikeFields"][] = "USR_ID";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "USR_ID";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT USR_UID,  	USR_USERNAME,  	USR_PASSWORD,  	USR_FIRSTNAME,  	USR_LASTNAME,  	USR_EMAIL,  	USR_DUE_DATE,  	USR_CREATE_DATE,  	USR_UPDATE_DATE,  	USR_STATUS,  	USR_COUNTRY,  	USR_CITY,  	USR_LOCATION,  	USR_ADDRESS,  	USR_PHONE,  	USR_FAX,  	USR_CELLULAR,  	USR_ZIP_CODE,  	DEP_UID,  	USR_POSITION,  	USR_RESUME,  	USR_BIRTHDAY,  	USR_ROLE,  	USR_REPORTS_TO,  	USR_REPLACED_BY,  	USR_UX,  	USR_COST_BY_HOUR,  	USR_UNIT_COST,  	USR_PMDRIVE_FOLDER_UID,  	USR_BOOKMARK_START_CASES,  	USR_TIME_ZONE,  	USR_DEFAULT_LANG,  	USR_LAST_LOGIN,  	USR_ID";
$tdataadmin_members[".sqlFrom"] = "FROM USERS";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "USR_UID";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "USR_UID";
$tdataadmin_members[".listFields"][] = "USR_USERNAME";
$tdataadmin_members[".listFields"][] = "USR_PASSWORD";
$tdataadmin_members[".listFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".listFields"][] = "USR_LASTNAME";
$tdataadmin_members[".listFields"][] = "USR_EMAIL";
$tdataadmin_members[".listFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".listFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".listFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".listFields"][] = "USR_STATUS";
$tdataadmin_members[".listFields"][] = "USR_COUNTRY";
$tdataadmin_members[".listFields"][] = "USR_CITY";
$tdataadmin_members[".listFields"][] = "USR_LOCATION";
$tdataadmin_members[".listFields"][] = "USR_ADDRESS";
$tdataadmin_members[".listFields"][] = "USR_PHONE";
$tdataadmin_members[".listFields"][] = "USR_FAX";
$tdataadmin_members[".listFields"][] = "USR_CELLULAR";
$tdataadmin_members[".listFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".listFields"][] = "DEP_UID";
$tdataadmin_members[".listFields"][] = "USR_POSITION";
$tdataadmin_members[".listFields"][] = "USR_RESUME";
$tdataadmin_members[".listFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".listFields"][] = "USR_ROLE";
$tdataadmin_members[".listFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".listFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".listFields"][] = "USR_UX";
$tdataadmin_members[".listFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".listFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".listFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".listFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".listFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".listFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".listFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".listFields"][] = "USR_ID";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "USR_UID";
$tdataadmin_members[".viewFields"][] = "USR_USERNAME";
$tdataadmin_members[".viewFields"][] = "USR_PASSWORD";
$tdataadmin_members[".viewFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".viewFields"][] = "USR_LASTNAME";
$tdataadmin_members[".viewFields"][] = "USR_EMAIL";
$tdataadmin_members[".viewFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".viewFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".viewFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".viewFields"][] = "USR_STATUS";
$tdataadmin_members[".viewFields"][] = "USR_COUNTRY";
$tdataadmin_members[".viewFields"][] = "USR_CITY";
$tdataadmin_members[".viewFields"][] = "USR_LOCATION";
$tdataadmin_members[".viewFields"][] = "USR_ADDRESS";
$tdataadmin_members[".viewFields"][] = "USR_PHONE";
$tdataadmin_members[".viewFields"][] = "USR_FAX";
$tdataadmin_members[".viewFields"][] = "USR_CELLULAR";
$tdataadmin_members[".viewFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".viewFields"][] = "DEP_UID";
$tdataadmin_members[".viewFields"][] = "USR_POSITION";
$tdataadmin_members[".viewFields"][] = "USR_RESUME";
$tdataadmin_members[".viewFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".viewFields"][] = "USR_ROLE";
$tdataadmin_members[".viewFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".viewFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".viewFields"][] = "USR_UX";
$tdataadmin_members[".viewFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".viewFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".viewFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".viewFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".viewFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".viewFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".viewFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".viewFields"][] = "USR_ID";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "USR_UID";
$tdataadmin_members[".addFields"][] = "USR_USERNAME";
$tdataadmin_members[".addFields"][] = "USR_PASSWORD";
$tdataadmin_members[".addFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".addFields"][] = "USR_LASTNAME";
$tdataadmin_members[".addFields"][] = "USR_EMAIL";
$tdataadmin_members[".addFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".addFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".addFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".addFields"][] = "USR_STATUS";
$tdataadmin_members[".addFields"][] = "USR_COUNTRY";
$tdataadmin_members[".addFields"][] = "USR_CITY";
$tdataadmin_members[".addFields"][] = "USR_LOCATION";
$tdataadmin_members[".addFields"][] = "USR_ADDRESS";
$tdataadmin_members[".addFields"][] = "USR_PHONE";
$tdataadmin_members[".addFields"][] = "USR_FAX";
$tdataadmin_members[".addFields"][] = "USR_CELLULAR";
$tdataadmin_members[".addFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".addFields"][] = "DEP_UID";
$tdataadmin_members[".addFields"][] = "USR_POSITION";
$tdataadmin_members[".addFields"][] = "USR_RESUME";
$tdataadmin_members[".addFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".addFields"][] = "USR_ROLE";
$tdataadmin_members[".addFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".addFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".addFields"][] = "USR_UX";
$tdataadmin_members[".addFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".addFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".addFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".addFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".addFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".addFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".addFields"][] = "USR_LAST_LOGIN";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "USR_UID";
$tdataadmin_members[".masterListFields"][] = "USR_USERNAME";
$tdataadmin_members[".masterListFields"][] = "USR_PASSWORD";
$tdataadmin_members[".masterListFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".masterListFields"][] = "USR_LASTNAME";
$tdataadmin_members[".masterListFields"][] = "USR_EMAIL";
$tdataadmin_members[".masterListFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".masterListFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".masterListFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".masterListFields"][] = "USR_STATUS";
$tdataadmin_members[".masterListFields"][] = "USR_COUNTRY";
$tdataadmin_members[".masterListFields"][] = "USR_CITY";
$tdataadmin_members[".masterListFields"][] = "USR_LOCATION";
$tdataadmin_members[".masterListFields"][] = "USR_ADDRESS";
$tdataadmin_members[".masterListFields"][] = "USR_PHONE";
$tdataadmin_members[".masterListFields"][] = "USR_FAX";
$tdataadmin_members[".masterListFields"][] = "USR_CELLULAR";
$tdataadmin_members[".masterListFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".masterListFields"][] = "DEP_UID";
$tdataadmin_members[".masterListFields"][] = "USR_POSITION";
$tdataadmin_members[".masterListFields"][] = "USR_RESUME";
$tdataadmin_members[".masterListFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".masterListFields"][] = "USR_ROLE";
$tdataadmin_members[".masterListFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".masterListFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".masterListFields"][] = "USR_UX";
$tdataadmin_members[".masterListFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".masterListFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".masterListFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".masterListFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".masterListFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".masterListFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".masterListFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".masterListFields"][] = "USR_ID";

$tdataadmin_members[".inlineAddFields"] = array();
$tdataadmin_members[".inlineAddFields"][] = "USR_UID";
$tdataadmin_members[".inlineAddFields"][] = "USR_USERNAME";
$tdataadmin_members[".inlineAddFields"][] = "USR_PASSWORD";
$tdataadmin_members[".inlineAddFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".inlineAddFields"][] = "USR_LASTNAME";
$tdataadmin_members[".inlineAddFields"][] = "USR_EMAIL";
$tdataadmin_members[".inlineAddFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".inlineAddFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".inlineAddFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".inlineAddFields"][] = "USR_STATUS";
$tdataadmin_members[".inlineAddFields"][] = "USR_COUNTRY";
$tdataadmin_members[".inlineAddFields"][] = "USR_CITY";
$tdataadmin_members[".inlineAddFields"][] = "USR_LOCATION";
$tdataadmin_members[".inlineAddFields"][] = "USR_ADDRESS";
$tdataadmin_members[".inlineAddFields"][] = "USR_PHONE";
$tdataadmin_members[".inlineAddFields"][] = "USR_FAX";
$tdataadmin_members[".inlineAddFields"][] = "USR_CELLULAR";
$tdataadmin_members[".inlineAddFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".inlineAddFields"][] = "DEP_UID";
$tdataadmin_members[".inlineAddFields"][] = "USR_POSITION";
$tdataadmin_members[".inlineAddFields"][] = "USR_RESUME";
$tdataadmin_members[".inlineAddFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".inlineAddFields"][] = "USR_ROLE";
$tdataadmin_members[".inlineAddFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".inlineAddFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".inlineAddFields"][] = "USR_UX";
$tdataadmin_members[".inlineAddFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".inlineAddFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".inlineAddFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".inlineAddFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".inlineAddFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".inlineAddFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".inlineAddFields"][] = "USR_LAST_LOGIN";

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "USR_UID";
$tdataadmin_members[".editFields"][] = "USR_USERNAME";
$tdataadmin_members[".editFields"][] = "USR_PASSWORD";
$tdataadmin_members[".editFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".editFields"][] = "USR_LASTNAME";
$tdataadmin_members[".editFields"][] = "USR_EMAIL";
$tdataadmin_members[".editFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".editFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".editFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".editFields"][] = "USR_STATUS";
$tdataadmin_members[".editFields"][] = "USR_COUNTRY";
$tdataadmin_members[".editFields"][] = "USR_CITY";
$tdataadmin_members[".editFields"][] = "USR_LOCATION";
$tdataadmin_members[".editFields"][] = "USR_ADDRESS";
$tdataadmin_members[".editFields"][] = "USR_PHONE";
$tdataadmin_members[".editFields"][] = "USR_FAX";
$tdataadmin_members[".editFields"][] = "USR_CELLULAR";
$tdataadmin_members[".editFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".editFields"][] = "DEP_UID";
$tdataadmin_members[".editFields"][] = "USR_POSITION";
$tdataadmin_members[".editFields"][] = "USR_RESUME";
$tdataadmin_members[".editFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".editFields"][] = "USR_ROLE";
$tdataadmin_members[".editFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".editFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".editFields"][] = "USR_UX";
$tdataadmin_members[".editFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".editFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".editFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".editFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".editFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".editFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".editFields"][] = "USR_LAST_LOGIN";

$tdataadmin_members[".inlineEditFields"] = array();
$tdataadmin_members[".inlineEditFields"][] = "USR_UID";
$tdataadmin_members[".inlineEditFields"][] = "USR_USERNAME";
$tdataadmin_members[".inlineEditFields"][] = "USR_PASSWORD";
$tdataadmin_members[".inlineEditFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".inlineEditFields"][] = "USR_LASTNAME";
$tdataadmin_members[".inlineEditFields"][] = "USR_EMAIL";
$tdataadmin_members[".inlineEditFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".inlineEditFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".inlineEditFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".inlineEditFields"][] = "USR_STATUS";
$tdataadmin_members[".inlineEditFields"][] = "USR_COUNTRY";
$tdataadmin_members[".inlineEditFields"][] = "USR_CITY";
$tdataadmin_members[".inlineEditFields"][] = "USR_LOCATION";
$tdataadmin_members[".inlineEditFields"][] = "USR_ADDRESS";
$tdataadmin_members[".inlineEditFields"][] = "USR_PHONE";
$tdataadmin_members[".inlineEditFields"][] = "USR_FAX";
$tdataadmin_members[".inlineEditFields"][] = "USR_CELLULAR";
$tdataadmin_members[".inlineEditFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".inlineEditFields"][] = "DEP_UID";
$tdataadmin_members[".inlineEditFields"][] = "USR_POSITION";
$tdataadmin_members[".inlineEditFields"][] = "USR_RESUME";
$tdataadmin_members[".inlineEditFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".inlineEditFields"][] = "USR_ROLE";
$tdataadmin_members[".inlineEditFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".inlineEditFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".inlineEditFields"][] = "USR_UX";
$tdataadmin_members[".inlineEditFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".inlineEditFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".inlineEditFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".inlineEditFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".inlineEditFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".inlineEditFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".inlineEditFields"][] = "USR_LAST_LOGIN";

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "USR_UID";
$tdataadmin_members[".updateSelectedFields"][] = "USR_USERNAME";
$tdataadmin_members[".updateSelectedFields"][] = "USR_PASSWORD";
$tdataadmin_members[".updateSelectedFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".updateSelectedFields"][] = "USR_LASTNAME";
$tdataadmin_members[".updateSelectedFields"][] = "USR_EMAIL";
$tdataadmin_members[".updateSelectedFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".updateSelectedFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".updateSelectedFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".updateSelectedFields"][] = "USR_STATUS";
$tdataadmin_members[".updateSelectedFields"][] = "USR_COUNTRY";
$tdataadmin_members[".updateSelectedFields"][] = "USR_CITY";
$tdataadmin_members[".updateSelectedFields"][] = "USR_LOCATION";
$tdataadmin_members[".updateSelectedFields"][] = "USR_ADDRESS";
$tdataadmin_members[".updateSelectedFields"][] = "USR_PHONE";
$tdataadmin_members[".updateSelectedFields"][] = "USR_FAX";
$tdataadmin_members[".updateSelectedFields"][] = "USR_CELLULAR";
$tdataadmin_members[".updateSelectedFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".updateSelectedFields"][] = "DEP_UID";
$tdataadmin_members[".updateSelectedFields"][] = "USR_POSITION";
$tdataadmin_members[".updateSelectedFields"][] = "USR_RESUME";
$tdataadmin_members[".updateSelectedFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".updateSelectedFields"][] = "USR_ROLE";
$tdataadmin_members[".updateSelectedFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".updateSelectedFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".updateSelectedFields"][] = "USR_UX";
$tdataadmin_members[".updateSelectedFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".updateSelectedFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".updateSelectedFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".updateSelectedFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".updateSelectedFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".updateSelectedFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".updateSelectedFields"][] = "USR_LAST_LOGIN";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "USR_UID";
$tdataadmin_members[".exportFields"][] = "USR_USERNAME";
$tdataadmin_members[".exportFields"][] = "USR_PASSWORD";
$tdataadmin_members[".exportFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".exportFields"][] = "USR_LASTNAME";
$tdataadmin_members[".exportFields"][] = "USR_EMAIL";
$tdataadmin_members[".exportFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".exportFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".exportFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".exportFields"][] = "USR_STATUS";
$tdataadmin_members[".exportFields"][] = "USR_COUNTRY";
$tdataadmin_members[".exportFields"][] = "USR_CITY";
$tdataadmin_members[".exportFields"][] = "USR_LOCATION";
$tdataadmin_members[".exportFields"][] = "USR_ADDRESS";
$tdataadmin_members[".exportFields"][] = "USR_PHONE";
$tdataadmin_members[".exportFields"][] = "USR_FAX";
$tdataadmin_members[".exportFields"][] = "USR_CELLULAR";
$tdataadmin_members[".exportFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".exportFields"][] = "DEP_UID";
$tdataadmin_members[".exportFields"][] = "USR_POSITION";
$tdataadmin_members[".exportFields"][] = "USR_RESUME";
$tdataadmin_members[".exportFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".exportFields"][] = "USR_ROLE";
$tdataadmin_members[".exportFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".exportFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".exportFields"][] = "USR_UX";
$tdataadmin_members[".exportFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".exportFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".exportFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".exportFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".exportFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".exportFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".exportFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".exportFields"][] = "USR_ID";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "USR_UID";
$tdataadmin_members[".importFields"][] = "USR_USERNAME";
$tdataadmin_members[".importFields"][] = "USR_PASSWORD";
$tdataadmin_members[".importFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".importFields"][] = "USR_LASTNAME";
$tdataadmin_members[".importFields"][] = "USR_EMAIL";
$tdataadmin_members[".importFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".importFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".importFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".importFields"][] = "USR_STATUS";
$tdataadmin_members[".importFields"][] = "USR_COUNTRY";
$tdataadmin_members[".importFields"][] = "USR_CITY";
$tdataadmin_members[".importFields"][] = "USR_LOCATION";
$tdataadmin_members[".importFields"][] = "USR_ADDRESS";
$tdataadmin_members[".importFields"][] = "USR_PHONE";
$tdataadmin_members[".importFields"][] = "USR_FAX";
$tdataadmin_members[".importFields"][] = "USR_CELLULAR";
$tdataadmin_members[".importFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".importFields"][] = "DEP_UID";
$tdataadmin_members[".importFields"][] = "USR_POSITION";
$tdataadmin_members[".importFields"][] = "USR_RESUME";
$tdataadmin_members[".importFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".importFields"][] = "USR_ROLE";
$tdataadmin_members[".importFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".importFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".importFields"][] = "USR_UX";
$tdataadmin_members[".importFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".importFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".importFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".importFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".importFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".importFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".importFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".importFields"][] = "USR_ID";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "USR_UID";
$tdataadmin_members[".printFields"][] = "USR_USERNAME";
$tdataadmin_members[".printFields"][] = "USR_PASSWORD";
$tdataadmin_members[".printFields"][] = "USR_FIRSTNAME";
$tdataadmin_members[".printFields"][] = "USR_LASTNAME";
$tdataadmin_members[".printFields"][] = "USR_EMAIL";
$tdataadmin_members[".printFields"][] = "USR_DUE_DATE";
$tdataadmin_members[".printFields"][] = "USR_CREATE_DATE";
$tdataadmin_members[".printFields"][] = "USR_UPDATE_DATE";
$tdataadmin_members[".printFields"][] = "USR_STATUS";
$tdataadmin_members[".printFields"][] = "USR_COUNTRY";
$tdataadmin_members[".printFields"][] = "USR_CITY";
$tdataadmin_members[".printFields"][] = "USR_LOCATION";
$tdataadmin_members[".printFields"][] = "USR_ADDRESS";
$tdataadmin_members[".printFields"][] = "USR_PHONE";
$tdataadmin_members[".printFields"][] = "USR_FAX";
$tdataadmin_members[".printFields"][] = "USR_CELLULAR";
$tdataadmin_members[".printFields"][] = "USR_ZIP_CODE";
$tdataadmin_members[".printFields"][] = "DEP_UID";
$tdataadmin_members[".printFields"][] = "USR_POSITION";
$tdataadmin_members[".printFields"][] = "USR_RESUME";
$tdataadmin_members[".printFields"][] = "USR_BIRTHDAY";
$tdataadmin_members[".printFields"][] = "USR_ROLE";
$tdataadmin_members[".printFields"][] = "USR_REPORTS_TO";
$tdataadmin_members[".printFields"][] = "USR_REPLACED_BY";
$tdataadmin_members[".printFields"][] = "USR_UX";
$tdataadmin_members[".printFields"][] = "USR_COST_BY_HOUR";
$tdataadmin_members[".printFields"][] = "USR_UNIT_COST";
$tdataadmin_members[".printFields"][] = "USR_PMDRIVE_FOLDER_UID";
$tdataadmin_members[".printFields"][] = "USR_BOOKMARK_START_CASES";
$tdataadmin_members[".printFields"][] = "USR_TIME_ZONE";
$tdataadmin_members[".printFields"][] = "USR_DEFAULT_LANG";
$tdataadmin_members[".printFields"][] = "USR_LAST_LOGIN";
$tdataadmin_members[".printFields"][] = "USR_ID";

//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_UID");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_members["USR_UID"] = $fdata;
//	USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_USERNAME";
	$fdata["GoodName"] = "USR_USERNAME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_USERNAME");
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








	$tdataadmin_members["USR_USERNAME"] = $fdata;
//	USR_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_PASSWORD";
	$fdata["GoodName"] = "USR_PASSWORD";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_PASSWORD");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_members["USR_PASSWORD"] = $fdata;
//	USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USR_FIRSTNAME";
	$fdata["GoodName"] = "USR_FIRSTNAME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_FIRSTNAME");
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








	$tdataadmin_members["USR_FIRSTNAME"] = $fdata;
//	USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_LASTNAME";
	$fdata["GoodName"] = "USR_LASTNAME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_LASTNAME");
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








	$tdataadmin_members["USR_LASTNAME"] = $fdata;
//	USR_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_EMAIL";
	$fdata["GoodName"] = "USR_EMAIL";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_EMAIL");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_members["USR_EMAIL"] = $fdata;
//	USR_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USR_DUE_DATE";
	$fdata["GoodName"] = "USR_DUE_DATE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_DUE_DATE");
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








	$tdataadmin_members["USR_DUE_DATE"] = $fdata;
//	USR_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "USR_CREATE_DATE";
	$fdata["GoodName"] = "USR_CREATE_DATE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_CREATE_DATE");
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








	$tdataadmin_members["USR_CREATE_DATE"] = $fdata;
//	USR_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "USR_UPDATE_DATE";
	$fdata["GoodName"] = "USR_UPDATE_DATE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_UPDATE_DATE");
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








	$tdataadmin_members["USR_UPDATE_DATE"] = $fdata;
//	USR_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "USR_STATUS";
	$fdata["GoodName"] = "USR_STATUS";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_STATUS");
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








	$tdataadmin_members["USR_STATUS"] = $fdata;
//	USR_COUNTRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USR_COUNTRY";
	$fdata["GoodName"] = "USR_COUNTRY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_COUNTRY");
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








	$tdataadmin_members["USR_COUNTRY"] = $fdata;
//	USR_CITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "USR_CITY";
	$fdata["GoodName"] = "USR_CITY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_CITY");
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








	$tdataadmin_members["USR_CITY"] = $fdata;
//	USR_LOCATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "USR_LOCATION";
	$fdata["GoodName"] = "USR_LOCATION";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_LOCATION");
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








	$tdataadmin_members["USR_LOCATION"] = $fdata;
//	USR_ADDRESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "USR_ADDRESS";
	$fdata["GoodName"] = "USR_ADDRESS";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_ADDRESS");
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








	$tdataadmin_members["USR_ADDRESS"] = $fdata;
//	USR_PHONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "USR_PHONE";
	$fdata["GoodName"] = "USR_PHONE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_PHONE");
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








	$tdataadmin_members["USR_PHONE"] = $fdata;
//	USR_FAX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "USR_FAX";
	$fdata["GoodName"] = "USR_FAX";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_FAX");
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








	$tdataadmin_members["USR_FAX"] = $fdata;
//	USR_CELLULAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "USR_CELLULAR";
	$fdata["GoodName"] = "USR_CELLULAR";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_CELLULAR");
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








	$tdataadmin_members["USR_CELLULAR"] = $fdata;
//	USR_ZIP_CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "USR_ZIP_CODE";
	$fdata["GoodName"] = "USR_ZIP_CODE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_ZIP_CODE");
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








	$tdataadmin_members["USR_ZIP_CODE"] = $fdata;
//	DEP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DEP_UID";
	$fdata["GoodName"] = "DEP_UID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","DEP_UID");
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








	$tdataadmin_members["DEP_UID"] = $fdata;
//	USR_POSITION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "USR_POSITION";
	$fdata["GoodName"] = "USR_POSITION";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_POSITION");
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








	$tdataadmin_members["USR_POSITION"] = $fdata;
//	USR_RESUME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "USR_RESUME";
	$fdata["GoodName"] = "USR_RESUME";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_RESUME");
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








	$tdataadmin_members["USR_RESUME"] = $fdata;
//	USR_BIRTHDAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "USR_BIRTHDAY";
	$fdata["GoodName"] = "USR_BIRTHDAY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_BIRTHDAY");
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








	$tdataadmin_members["USR_BIRTHDAY"] = $fdata;
//	USR_ROLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "USR_ROLE";
	$fdata["GoodName"] = "USR_ROLE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_ROLE");
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








	$tdataadmin_members["USR_ROLE"] = $fdata;
//	USR_REPORTS_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "USR_REPORTS_TO";
	$fdata["GoodName"] = "USR_REPORTS_TO";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_REPORTS_TO");
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








	$tdataadmin_members["USR_REPORTS_TO"] = $fdata;
//	USR_REPLACED_BY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "USR_REPLACED_BY";
	$fdata["GoodName"] = "USR_REPLACED_BY";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_REPLACED_BY");
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








	$tdataadmin_members["USR_REPLACED_BY"] = $fdata;
//	USR_UX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "USR_UX";
	$fdata["GoodName"] = "USR_UX";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_UX");
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








	$tdataadmin_members["USR_UX"] = $fdata;
//	USR_COST_BY_HOUR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "USR_COST_BY_HOUR";
	$fdata["GoodName"] = "USR_COST_BY_HOUR";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_COST_BY_HOUR");
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








	$tdataadmin_members["USR_COST_BY_HOUR"] = $fdata;
//	USR_UNIT_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "USR_UNIT_COST";
	$fdata["GoodName"] = "USR_UNIT_COST";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_UNIT_COST");
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








	$tdataadmin_members["USR_UNIT_COST"] = $fdata;
//	USR_PMDRIVE_FOLDER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "USR_PMDRIVE_FOLDER_UID";
	$fdata["GoodName"] = "USR_PMDRIVE_FOLDER_UID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_PMDRIVE_FOLDER_UID");
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








	$tdataadmin_members["USR_PMDRIVE_FOLDER_UID"] = $fdata;
//	USR_BOOKMARK_START_CASES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "USR_BOOKMARK_START_CASES";
	$fdata["GoodName"] = "USR_BOOKMARK_START_CASES";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_BOOKMARK_START_CASES");
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








	$tdataadmin_members["USR_BOOKMARK_START_CASES"] = $fdata;
//	USR_TIME_ZONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "USR_TIME_ZONE";
	$fdata["GoodName"] = "USR_TIME_ZONE";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_TIME_ZONE");
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








	$tdataadmin_members["USR_TIME_ZONE"] = $fdata;
//	USR_DEFAULT_LANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "USR_DEFAULT_LANG";
	$fdata["GoodName"] = "USR_DEFAULT_LANG";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_DEFAULT_LANG");
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








	$tdataadmin_members["USR_DEFAULT_LANG"] = $fdata;
//	USR_LAST_LOGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "USR_LAST_LOGIN";
	$fdata["GoodName"] = "USR_LAST_LOGIN";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_LAST_LOGIN");
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








	$tdataadmin_members["USR_LAST_LOGIN"] = $fdata;
//	USR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "USR_ID";
	$fdata["GoodName"] = "USR_ID";
	$fdata["ownerTable"] = "USERS";
	$fdata["Label"] = GetFieldLabel("admin_members","USR_ID");
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




	$tdataadmin_members["USR_ID"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "USR_UID";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_USERNAME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "USR_USERNAME";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PASSWORD",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "USR_PASSWORD";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_FIRSTNAME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "USR_FIRSTNAME";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LASTNAME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "USR_LASTNAME";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_EMAIL",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "USR_EMAIL";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_DUE_DATE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "USR_DUE_DATE";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CREATE_DATE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "USR_CREATE_DATE";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UPDATE_DATE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "USR_UPDATE_DATE";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_STATUS",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "USR_STATUS";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_COUNTRY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "USR_COUNTRY";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CITY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "USR_CITY";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LOCATION",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto30["m_sql"] = "USR_LOCATION";
$proto30["m_srcTableName"] = "admin_members";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ADDRESS",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto32["m_sql"] = "USR_ADDRESS";
$proto32["m_srcTableName"] = "admin_members";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PHONE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto34["m_sql"] = "USR_PHONE";
$proto34["m_srcTableName"] = "admin_members";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_FAX",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto36["m_sql"] = "USR_FAX";
$proto36["m_srcTableName"] = "admin_members";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CELLULAR",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto38["m_sql"] = "USR_CELLULAR";
$proto38["m_srcTableName"] = "admin_members";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ZIP_CODE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto40["m_sql"] = "USR_ZIP_CODE";
$proto40["m_srcTableName"] = "admin_members";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DEP_UID",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto42["m_sql"] = "DEP_UID";
$proto42["m_srcTableName"] = "admin_members";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_POSITION",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto44["m_sql"] = "USR_POSITION";
$proto44["m_srcTableName"] = "admin_members";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_RESUME",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto46["m_sql"] = "USR_RESUME";
$proto46["m_srcTableName"] = "admin_members";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_BIRTHDAY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto48["m_sql"] = "USR_BIRTHDAY";
$proto48["m_srcTableName"] = "admin_members";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ROLE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto50["m_sql"] = "USR_ROLE";
$proto50["m_srcTableName"] = "admin_members";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_REPORTS_TO",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto52["m_sql"] = "USR_REPORTS_TO";
$proto52["m_srcTableName"] = "admin_members";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_REPLACED_BY",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto54["m_sql"] = "USR_REPLACED_BY";
$proto54["m_srcTableName"] = "admin_members";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UX",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto56["m_sql"] = "USR_UX";
$proto56["m_srcTableName"] = "admin_members";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_COST_BY_HOUR",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto58["m_sql"] = "USR_COST_BY_HOUR";
$proto58["m_srcTableName"] = "admin_members";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UNIT_COST",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto60["m_sql"] = "USR_UNIT_COST";
$proto60["m_srcTableName"] = "admin_members";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PMDRIVE_FOLDER_UID",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto62["m_sql"] = "USR_PMDRIVE_FOLDER_UID";
$proto62["m_srcTableName"] = "admin_members";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_BOOKMARK_START_CASES",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto64["m_sql"] = "USR_BOOKMARK_START_CASES";
$proto64["m_srcTableName"] = "admin_members";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_TIME_ZONE",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto66["m_sql"] = "USR_TIME_ZONE";
$proto66["m_srcTableName"] = "admin_members";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_DEFAULT_LANG",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto68["m_sql"] = "USR_DEFAULT_LANG";
$proto68["m_srcTableName"] = "admin_members";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LAST_LOGIN",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto70["m_sql"] = "USR_LAST_LOGIN";
$proto70["m_srcTableName"] = "admin_members";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_ID",
	"m_strTable" => "USERS",
	"m_srcTableName" => "admin_members"
));

$proto72["m_sql"] = "USR_ID";
$proto72["m_srcTableName"] = "admin_members";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "USERS";
$proto75["m_srcTableName"] = "admin_members";
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
$proto74["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
						;

																																		

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>
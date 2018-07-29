<?php
require_once(getabspath("classes/cipherer.php"));




$tdataABE_CONFIGURATION = array();
	$tdataABE_CONFIGURATION[".truncateText"] = true;
	$tdataABE_CONFIGURATION[".NumberOfChars"] = 20;
	$tdataABE_CONFIGURATION[".ShortName"] = "ABE_CONFIGURATION";
	$tdataABE_CONFIGURATION[".OwnerID"] = "ABE_ACTION_FIELD";
	$tdataABE_CONFIGURATION[".OriginalTable"] = "ABE_CONFIGURATION";

//	field labels
$fieldLabelsABE_CONFIGURATION = array();
$fieldToolTipsABE_CONFIGURATION = array();
$pageTitlesABE_CONFIGURATION = array();
$placeHoldersABE_CONFIGURATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsABE_CONFIGURATION["Japanese"] = array();
	$fieldToolTipsABE_CONFIGURATION["Japanese"] = array();
	$placeHoldersABE_CONFIGURATION["Japanese"] = array();
	$pageTitlesABE_CONFIGURATION["Japanese"] = array();
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_UID"] = "UID";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_UID"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["PRO_UID"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["PRO_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["TAS_UID"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["TAS_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_TYPE"] = "タイプ";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_TYPE"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_TYPE"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_TEMPLATE"] = "テンプレート";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_TEMPLATE"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_TEMPLATE"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_DYN_TYPE"] = "DYNタイプ";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_DYN_TYPE"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_DYN_TYPE"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["DYN_UID"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["DYN_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_EMAIL_FIELD"] = "メールフィールド";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_EMAIL_FIELD"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_EMAIL_FIELD"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_ACTION_FIELD"] = "アクションフィールド";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_ACTION_FIELD"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_ACTION_FIELD"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_CASE_NOTE_IN_RESPONSE"] = "応答で安倍ケースノート";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_CASE_NOTE_IN_RESPONSE"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_CASE_NOTE_IN_RESPONSE"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_FORCE_LOGIN"] = "力ログイン";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_FORCE_LOGIN"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_FORCE_LOGIN"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_CREATE_DATE"] = "日付を作成します";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_CREATE_DATE"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_CREATE_DATE"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_UPDATE_DATE"] = "更新日時";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_UPDATE_DATE"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_UPDATE_DATE"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_SUBJECT_FIELD"] = "サブジェクトフィールド";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_SUBJECT_FIELD"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_SUBJECT_FIELD"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_MAILSERVER_OR_MAILCURRENT"] = "メールサーバやmailcurrent";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_MAILSERVER_OR_MAILCURRENT"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_MAILSERVER_OR_MAILCURRENT"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_CUSTOM_GRID"] = "カスタムグリッド";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_CUSTOM_GRID"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_CUSTOM_GRID"] = "";
	$fieldLabelsABE_CONFIGURATION["Japanese"]["ABE_EMAIL_SERVER_UID"] = "ABE EMAIL SERVER UID";
	$fieldToolTipsABE_CONFIGURATION["Japanese"]["ABE_EMAIL_SERVER_UID"] = "";
	$placeHoldersABE_CONFIGURATION["Japanese"]["ABE_EMAIL_SERVER_UID"] = "";
	if (count($fieldToolTipsABE_CONFIGURATION["Japanese"]))
		$tdataABE_CONFIGURATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsABE_CONFIGURATION["English"] = array();
	$fieldToolTipsABE_CONFIGURATION["English"] = array();
	$placeHoldersABE_CONFIGURATION["English"] = array();
	$pageTitlesABE_CONFIGURATION["English"] = array();
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_UID"] = "UID";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_UID"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsABE_CONFIGURATION["English"]["PRO_UID"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["PRO_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["TAS_UID"] = "TASのUID";
	$fieldToolTipsABE_CONFIGURATION["English"]["TAS_UID"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["TAS_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_TYPE"] = "タイプ";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_TYPE"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_TYPE"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_TEMPLATE"] = "テンプレート";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_TEMPLATE"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_TEMPLATE"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_DYN_TYPE"] = "DYNタイプ";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_DYN_TYPE"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_DYN_TYPE"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["DYN_UID"] = "DYNのUID";
	$fieldToolTipsABE_CONFIGURATION["English"]["DYN_UID"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["DYN_UID"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_EMAIL_FIELD"] = "メールフィールド";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_EMAIL_FIELD"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_EMAIL_FIELD"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_ACTION_FIELD"] = "アクションフィールド";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_ACTION_FIELD"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_ACTION_FIELD"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_CASE_NOTE_IN_RESPONSE"] = "応答で安倍ケースノート";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_CASE_NOTE_IN_RESPONSE"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_CASE_NOTE_IN_RESPONSE"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_FORCE_LOGIN"] = "力ログイン";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_FORCE_LOGIN"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_FORCE_LOGIN"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_CREATE_DATE"] = "日付を作成します";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_CREATE_DATE"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_CREATE_DATE"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_UPDATE_DATE"] = "更新日時";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_UPDATE_DATE"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_UPDATE_DATE"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_SUBJECT_FIELD"] = "サブジェクトフィールド";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_SUBJECT_FIELD"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_SUBJECT_FIELD"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_MAILSERVER_OR_MAILCURRENT"] = "メールサーバやmailcurrent";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_MAILSERVER_OR_MAILCURRENT"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_MAILSERVER_OR_MAILCURRENT"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_CUSTOM_GRID"] = "カスタムグリッド";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_CUSTOM_GRID"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_CUSTOM_GRID"] = "";
	$fieldLabelsABE_CONFIGURATION["English"]["ABE_EMAIL_SERVER_UID"] = "ABE EMAIL SERVER UID";
	$fieldToolTipsABE_CONFIGURATION["English"]["ABE_EMAIL_SERVER_UID"] = "";
	$placeHoldersABE_CONFIGURATION["English"]["ABE_EMAIL_SERVER_UID"] = "";
	if (count($fieldToolTipsABE_CONFIGURATION["English"]))
		$tdataABE_CONFIGURATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsABE_CONFIGURATION[""] = array();
	$fieldToolTipsABE_CONFIGURATION[""] = array();
	$placeHoldersABE_CONFIGURATION[""] = array();
	$pageTitlesABE_CONFIGURATION[""] = array();
	$fieldLabelsABE_CONFIGURATION[""]["ABE_EMAIL_SERVER_UID"] = "ABE EMAIL SERVER UID";
	$fieldToolTipsABE_CONFIGURATION[""]["ABE_EMAIL_SERVER_UID"] = "";
	$placeHoldersABE_CONFIGURATION[""]["ABE_EMAIL_SERVER_UID"] = "";
	if (count($fieldToolTipsABE_CONFIGURATION[""]))
		$tdataABE_CONFIGURATION[".isUseToolTips"] = true;
}


	$tdataABE_CONFIGURATION[".NCSearch"] = true;



$tdataABE_CONFIGURATION[".shortTableName"] = "ABE_CONFIGURATION";
$tdataABE_CONFIGURATION[".nSecOptions"] = 1;
$tdataABE_CONFIGURATION[".recsPerRowPrint"] = 1;
$tdataABE_CONFIGURATION[".mainTableOwnerID"] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".moveNext"] = 0;
$tdataABE_CONFIGURATION[".entityType"] = 0;

$tdataABE_CONFIGURATION[".strOriginalTableName"] = "ABE_CONFIGURATION";

	



$tdataABE_CONFIGURATION[".showAddInPopup"] = false;

$tdataABE_CONFIGURATION[".showEditInPopup"] = false;

$tdataABE_CONFIGURATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataABE_CONFIGURATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataABE_CONFIGURATION[".fieldsForRegister"] = array();
	
$tdataABE_CONFIGURATION[".listAjax"] = false;

	$tdataABE_CONFIGURATION[".audit"] = true;

	$tdataABE_CONFIGURATION[".locking"] = false;

$tdataABE_CONFIGURATION[".edit"] = true;
$tdataABE_CONFIGURATION[".afterEditAction"] = 1;
$tdataABE_CONFIGURATION[".closePopupAfterEdit"] = 1;
$tdataABE_CONFIGURATION[".afterEditActionDetTable"] = "";

$tdataABE_CONFIGURATION[".add"] = true;
$tdataABE_CONFIGURATION[".afterAddAction"] = 1;
$tdataABE_CONFIGURATION[".closePopupAfterAdd"] = 1;
$tdataABE_CONFIGURATION[".afterAddActionDetTable"] = "";

$tdataABE_CONFIGURATION[".list"] = true;

$tdataABE_CONFIGURATION[".inlineEdit"] = true;


$tdataABE_CONFIGURATION[".reorderRecordsByHeader"] = true;
$tdataABE_CONFIGURATION[".createSortByDropdown"] = true;
$tdataABE_CONFIGURATION[".strSortControlSettingsJSON"] = "";



$tdataABE_CONFIGURATION[".inlineAdd"] = true;
$tdataABE_CONFIGURATION[".view"] = true;

$tdataABE_CONFIGURATION[".import"] = true;

$tdataABE_CONFIGURATION[".exportTo"] = true;

$tdataABE_CONFIGURATION[".printFriendly"] = true;

$tdataABE_CONFIGURATION[".delete"] = true;

$tdataABE_CONFIGURATION[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataABE_CONFIGURATION[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataABE_CONFIGURATION[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataABE_CONFIGURATION[".searchSaving"] = false;
//

$tdataABE_CONFIGURATION[".showSearchPanel"] = true;
		$tdataABE_CONFIGURATION[".flexibleSearch"] = true;

$tdataABE_CONFIGURATION[".isUseAjaxSuggest"] = true;

$tdataABE_CONFIGURATION[".rowHighlite"] = true;



																

$tdataABE_CONFIGURATION[".ajaxCodeSnippetAdded"] = false;

$tdataABE_CONFIGURATION[".buttonsAdded"] = false;

$tdataABE_CONFIGURATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataABE_CONFIGURATION[".isUseTimeForSearch"] = false;



$tdataABE_CONFIGURATION[".badgeColor"] = "4682b4";


$tdataABE_CONFIGURATION[".allSearchFields"] = array();
$tdataABE_CONFIGURATION[".filterFields"] = array();
$tdataABE_CONFIGURATION[".requiredSearchFields"] = array();

$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_EMAIL_SERVER_UID";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_UID";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "PRO_UID";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "TAS_UID";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_TYPE";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_TEMPLATE";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_DYN_TYPE";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "DYN_UID";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_EMAIL_FIELD";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_ACTION_FIELD";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_FORCE_LOGIN";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_CREATE_DATE";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_UPDATE_DATE";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_SUBJECT_FIELD";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
	$tdataABE_CONFIGURATION[".allSearchFields"][] = "ABE_CUSTOM_GRID";
	

$tdataABE_CONFIGURATION[".googleLikeFields"] = array();
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".googleLikeFields"][] = "ABE_EMAIL_SERVER_UID";

$tdataABE_CONFIGURATION[".panelSearchFields"] = array();
$tdataABE_CONFIGURATION[".searchPanelOptions"] = array();
$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_EMAIL_SERVER_UID";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_UID";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "PRO_UID";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "TAS_UID";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_TYPE";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_TEMPLATE";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_DYN_TYPE";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "DYN_UID";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_EMAIL_FIELD";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_ACTION_FIELD";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_FORCE_LOGIN";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_CREATE_DATE";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_UPDATE_DATE";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_SUBJECT_FIELD";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
	$tdataABE_CONFIGURATION[".panelSearchFields"][] = "ABE_CUSTOM_GRID";
	
$tdataABE_CONFIGURATION[".advSearchFields"] = array();
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".advSearchFields"][] = "ABE_CUSTOM_GRID";

$tdataABE_CONFIGURATION[".tableType"] = "list";

$tdataABE_CONFIGURATION[".printerPageOrientation"] = 0;
$tdataABE_CONFIGURATION[".nPrinterPageScale"] = 100;

$tdataABE_CONFIGURATION[".nPrinterSplitRecords"] = 40;

$tdataABE_CONFIGURATION[".nPrinterPDFSplitRecords"] = 40;



$tdataABE_CONFIGURATION[".geocodingEnabled"] = false;





$tdataABE_CONFIGURATION[".listGridLayout"] = 3;


$tdataABE_CONFIGURATION[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataABE_CONFIGURATION[".pageSize"] = 20;

$tdataABE_CONFIGURATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataABE_CONFIGURATION[".strOrderBy"] = $tstrOrderBy;

$tdataABE_CONFIGURATION[".orderindexes"] = array();

$tdataABE_CONFIGURATION[".sqlHead"] = "SELECT ABE_UID,  	PRO_UID,  	TAS_UID,  	ABE_TYPE,  	ABE_TEMPLATE,  	ABE_DYN_TYPE,  	DYN_UID,  	ABE_EMAIL_FIELD,  	ABE_ACTION_FIELD,  	ABE_CASE_NOTE_IN_RESPONSE,  	ABE_FORCE_LOGIN,  	ABE_CREATE_DATE,  	ABE_UPDATE_DATE,  	ABE_SUBJECT_FIELD,  	ABE_MAILSERVER_OR_MAILCURRENT,  	ABE_CUSTOM_GRID,  	ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".sqlFrom"] = "FROM ABE_CONFIGURATION";
$tdataABE_CONFIGURATION[".sqlWhereExpr"] = "";
$tdataABE_CONFIGURATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataABE_CONFIGURATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataABE_CONFIGURATION[".arrGroupsPerPage"] = $arrGPP;

$tdataABE_CONFIGURATION[".highlightSearchResults"] = true;

$tableKeysABE_CONFIGURATION = array();
$tableKeysABE_CONFIGURATION[] = "ABE_UID";
$tdataABE_CONFIGURATION[".Keys"] = $tableKeysABE_CONFIGURATION;

$tdataABE_CONFIGURATION[".listFields"] = array();
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".listFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".listFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".listFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".listFields"][] = "ABE_CUSTOM_GRID";

$tdataABE_CONFIGURATION[".hideMobileList"] = array();


$tdataABE_CONFIGURATION[".viewFields"] = array();
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".viewFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".viewFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".viewFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".viewFields"][] = "ABE_EMAIL_SERVER_UID";

$tdataABE_CONFIGURATION[".addFields"] = array();
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".addFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".addFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".addFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".addFields"][] = "ABE_EMAIL_SERVER_UID";

$tdataABE_CONFIGURATION[".masterListFields"] = array();
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".masterListFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".masterListFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".masterListFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".masterListFields"][] = "ABE_EMAIL_SERVER_UID";

$tdataABE_CONFIGURATION[".inlineAddFields"] = array();
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".inlineAddFields"][] = "ABE_CUSTOM_GRID";

$tdataABE_CONFIGURATION[".editFields"] = array();
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".editFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".editFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".editFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".editFields"][] = "ABE_EMAIL_SERVER_UID";

$tdataABE_CONFIGURATION[".inlineEditFields"] = array();
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".inlineEditFields"][] = "ABE_CUSTOM_GRID";

$tdataABE_CONFIGURATION[".updateSelectedFields"] = array();
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".updateSelectedFields"][] = "ABE_EMAIL_SERVER_UID";


$tdataABE_CONFIGURATION[".exportFields"] = array();
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".exportFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".exportFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".exportFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".exportFields"][] = "ABE_CUSTOM_GRID";

$tdataABE_CONFIGURATION[".importFields"] = array();
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".importFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".importFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".importFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_CUSTOM_GRID";
$tdataABE_CONFIGURATION[".importFields"][] = "ABE_EMAIL_SERVER_UID";

$tdataABE_CONFIGURATION[".printFields"] = array();
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_EMAIL_SERVER_UID";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_UID";
$tdataABE_CONFIGURATION[".printFields"][] = "PRO_UID";
$tdataABE_CONFIGURATION[".printFields"][] = "TAS_UID";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_TYPE";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_TEMPLATE";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_DYN_TYPE";
$tdataABE_CONFIGURATION[".printFields"][] = "DYN_UID";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_EMAIL_FIELD";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_ACTION_FIELD";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_FORCE_LOGIN";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_CREATE_DATE";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_UPDATE_DATE";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_SUBJECT_FIELD";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$tdataABE_CONFIGURATION[".printFields"][] = "ABE_CUSTOM_GRID";

//	ABE_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ABE_UID";
	$fdata["GoodName"] = "ABE_UID";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_UID");
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

		$fdata["strField"] = "ABE_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_UID";

	
	
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




	$tdataABE_CONFIGURATION["ABE_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","PRO_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["PRO_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","TAS_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["TAS_UID"] = $fdata;
//	ABE_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ABE_TYPE";
	$fdata["GoodName"] = "ABE_TYPE";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_TYPE");
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

		$fdata["strField"] = "ABE_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_TYPE";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_TYPE"] = $fdata;
//	ABE_TEMPLATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ABE_TEMPLATE";
	$fdata["GoodName"] = "ABE_TEMPLATE";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_TEMPLATE");
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

		$fdata["strField"] = "ABE_TEMPLATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_TEMPLATE";

	
	
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




	$tdataABE_CONFIGURATION["ABE_TEMPLATE"] = $fdata;
//	ABE_DYN_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ABE_DYN_TYPE";
	$fdata["GoodName"] = "ABE_DYN_TYPE";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_DYN_TYPE");
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

		$fdata["strField"] = "ABE_DYN_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_DYN_TYPE";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_DYN_TYPE"] = $fdata;
//	DYN_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DYN_UID";
	$fdata["GoodName"] = "DYN_UID";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","DYN_UID");
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

		$fdata["strField"] = "DYN_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DYN_UID";

	
	
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




	$tdataABE_CONFIGURATION["DYN_UID"] = $fdata;
//	ABE_EMAIL_FIELD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ABE_EMAIL_FIELD";
	$fdata["GoodName"] = "ABE_EMAIL_FIELD";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_EMAIL_FIELD");
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

		$fdata["strField"] = "ABE_EMAIL_FIELD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_EMAIL_FIELD";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_EMAIL_FIELD"] = $fdata;
//	ABE_ACTION_FIELD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ABE_ACTION_FIELD";
	$fdata["GoodName"] = "ABE_ACTION_FIELD";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_ACTION_FIELD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ABE_ACTION_FIELD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_ACTION_FIELD";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_ACTION_FIELD"] = $fdata;
//	ABE_CASE_NOTE_IN_RESPONSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ABE_CASE_NOTE_IN_RESPONSE";
	$fdata["GoodName"] = "ABE_CASE_NOTE_IN_RESPONSE";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_CASE_NOTE_IN_RESPONSE");
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

		$fdata["strField"] = "ABE_CASE_NOTE_IN_RESPONSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_CASE_NOTE_IN_RESPONSE";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_CASE_NOTE_IN_RESPONSE"] = $fdata;
//	ABE_FORCE_LOGIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ABE_FORCE_LOGIN";
	$fdata["GoodName"] = "ABE_FORCE_LOGIN";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_FORCE_LOGIN");
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

		$fdata["strField"] = "ABE_FORCE_LOGIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_FORCE_LOGIN";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_FORCE_LOGIN"] = $fdata;
//	ABE_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ABE_CREATE_DATE";
	$fdata["GoodName"] = "ABE_CREATE_DATE";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_CREATE_DATE");
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

		$fdata["strField"] = "ABE_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_CREATE_DATE";

	
	
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




	$tdataABE_CONFIGURATION["ABE_CREATE_DATE"] = $fdata;
//	ABE_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ABE_UPDATE_DATE";
	$fdata["GoodName"] = "ABE_UPDATE_DATE";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_UPDATE_DATE");
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

		$fdata["strField"] = "ABE_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_UPDATE_DATE";

	
	
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




	$tdataABE_CONFIGURATION["ABE_UPDATE_DATE"] = $fdata;
//	ABE_SUBJECT_FIELD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ABE_SUBJECT_FIELD";
	$fdata["GoodName"] = "ABE_SUBJECT_FIELD";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_SUBJECT_FIELD");
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

		$fdata["strField"] = "ABE_SUBJECT_FIELD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_SUBJECT_FIELD";

	
	
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




	$tdataABE_CONFIGURATION["ABE_SUBJECT_FIELD"] = $fdata;
//	ABE_MAILSERVER_OR_MAILCURRENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ABE_MAILSERVER_OR_MAILCURRENT";
	$fdata["GoodName"] = "ABE_MAILSERVER_OR_MAILCURRENT";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_MAILSERVER_OR_MAILCURRENT");
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

		$fdata["strField"] = "ABE_MAILSERVER_OR_MAILCURRENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_MAILSERVER_OR_MAILCURRENT";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataABE_CONFIGURATION["ABE_MAILSERVER_OR_MAILCURRENT"] = $fdata;
//	ABE_CUSTOM_GRID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ABE_CUSTOM_GRID";
	$fdata["GoodName"] = "ABE_CUSTOM_GRID";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_CUSTOM_GRID");
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

		$fdata["strField"] = "ABE_CUSTOM_GRID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_CUSTOM_GRID";

	
	
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




	$tdataABE_CONFIGURATION["ABE_CUSTOM_GRID"] = $fdata;
//	ABE_EMAIL_SERVER_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ABE_EMAIL_SERVER_UID";
	$fdata["GoodName"] = "ABE_EMAIL_SERVER_UID";
	$fdata["ownerTable"] = "ABE_CONFIGURATION";
	$fdata["Label"] = GetFieldLabel("ABE_CONFIGURATION","ABE_EMAIL_SERVER_UID");
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

		$fdata["strField"] = "ABE_EMAIL_SERVER_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABE_EMAIL_SERVER_UID";

	
	
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




	$tdataABE_CONFIGURATION["ABE_EMAIL_SERVER_UID"] = $fdata;


$tables_data["ABE_CONFIGURATION"]=&$tdataABE_CONFIGURATION;
$field_labels["ABE_CONFIGURATION"] = &$fieldLabelsABE_CONFIGURATION;
$fieldToolTips["ABE_CONFIGURATION"] = &$fieldToolTipsABE_CONFIGURATION;
$placeHolders["ABE_CONFIGURATION"] = &$placeHoldersABE_CONFIGURATION;
$page_titles["ABE_CONFIGURATION"] = &$pageTitlesABE_CONFIGURATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ABE_CONFIGURATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ABE_CONFIGURATION"] = array();


	
				$strOriginalDetailsTable="PMT_MENU";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PMT_MENU";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PMT_MENU";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ABE_CONFIGURATION"][0] = $masterParams;
				$masterTablesData["ABE_CONFIGURATION"][0]["masterKeys"] = array();
	$masterTablesData["ABE_CONFIGURATION"][0]["masterKeys"][]="MENU_URL";
				$masterTablesData["ABE_CONFIGURATION"][0]["detailKeys"] = array();
	$masterTablesData["ABE_CONFIGURATION"][0]["detailKeys"][]="PRO_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ABE_CONFIGURATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ABE_UID,  	PRO_UID,  	TAS_UID,  	ABE_TYPE,  	ABE_TEMPLATE,  	ABE_DYN_TYPE,  	DYN_UID,  	ABE_EMAIL_FIELD,  	ABE_ACTION_FIELD,  	ABE_CASE_NOTE_IN_RESPONSE,  	ABE_FORCE_LOGIN,  	ABE_CREATE_DATE,  	ABE_UPDATE_DATE,  	ABE_SUBJECT_FIELD,  	ABE_MAILSERVER_OR_MAILCURRENT,  	ABE_CUSTOM_GRID,  	ABE_EMAIL_SERVER_UID";
$proto0["m_strFrom"] = "FROM ABE_CONFIGURATION";
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
	"m_strName" => "ABE_UID",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto6["m_sql"] = "ABE_UID";
$proto6["m_srcTableName"] = "ABE_CONFIGURATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto8["m_sql"] = "PRO_UID";
$proto8["m_srcTableName"] = "ABE_CONFIGURATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto10["m_sql"] = "TAS_UID";
$proto10["m_srcTableName"] = "ABE_CONFIGURATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_TYPE",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto12["m_sql"] = "ABE_TYPE";
$proto12["m_srcTableName"] = "ABE_CONFIGURATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_TEMPLATE",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto14["m_sql"] = "ABE_TEMPLATE";
$proto14["m_srcTableName"] = "ABE_CONFIGURATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_DYN_TYPE",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto16["m_sql"] = "ABE_DYN_TYPE";
$proto16["m_srcTableName"] = "ABE_CONFIGURATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DYN_UID",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto18["m_sql"] = "DYN_UID";
$proto18["m_srcTableName"] = "ABE_CONFIGURATION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_EMAIL_FIELD",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto20["m_sql"] = "ABE_EMAIL_FIELD";
$proto20["m_srcTableName"] = "ABE_CONFIGURATION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_ACTION_FIELD",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto22["m_sql"] = "ABE_ACTION_FIELD";
$proto22["m_srcTableName"] = "ABE_CONFIGURATION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_CASE_NOTE_IN_RESPONSE",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto24["m_sql"] = "ABE_CASE_NOTE_IN_RESPONSE";
$proto24["m_srcTableName"] = "ABE_CONFIGURATION";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_FORCE_LOGIN",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto26["m_sql"] = "ABE_FORCE_LOGIN";
$proto26["m_srcTableName"] = "ABE_CONFIGURATION";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_CREATE_DATE",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto28["m_sql"] = "ABE_CREATE_DATE";
$proto28["m_srcTableName"] = "ABE_CONFIGURATION";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_UPDATE_DATE",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto30["m_sql"] = "ABE_UPDATE_DATE";
$proto30["m_srcTableName"] = "ABE_CONFIGURATION";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_SUBJECT_FIELD",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto32["m_sql"] = "ABE_SUBJECT_FIELD";
$proto32["m_srcTableName"] = "ABE_CONFIGURATION";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_MAILSERVER_OR_MAILCURRENT",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto34["m_sql"] = "ABE_MAILSERVER_OR_MAILCURRENT";
$proto34["m_srcTableName"] = "ABE_CONFIGURATION";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_CUSTOM_GRID",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto36["m_sql"] = "ABE_CUSTOM_GRID";
$proto36["m_srcTableName"] = "ABE_CONFIGURATION";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ABE_EMAIL_SERVER_UID",
	"m_strTable" => "ABE_CONFIGURATION",
	"m_srcTableName" => "ABE_CONFIGURATION"
));

$proto38["m_sql"] = "ABE_EMAIL_SERVER_UID";
$proto38["m_srcTableName"] = "ABE_CONFIGURATION";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "ABE_CONFIGURATION";
$proto41["m_srcTableName"] = "ABE_CONFIGURATION";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ABE_UID";
$proto41["m_columns"][] = "PRO_UID";
$proto41["m_columns"][] = "TAS_UID";
$proto41["m_columns"][] = "ABE_TYPE";
$proto41["m_columns"][] = "ABE_TEMPLATE";
$proto41["m_columns"][] = "ABE_DYN_TYPE";
$proto41["m_columns"][] = "DYN_UID";
$proto41["m_columns"][] = "ABE_EMAIL_FIELD";
$proto41["m_columns"][] = "ABE_ACTION_FIELD";
$proto41["m_columns"][] = "ABE_CASE_NOTE_IN_RESPONSE";
$proto41["m_columns"][] = "ABE_FORCE_LOGIN";
$proto41["m_columns"][] = "ABE_CREATE_DATE";
$proto41["m_columns"][] = "ABE_UPDATE_DATE";
$proto41["m_columns"][] = "ABE_SUBJECT_FIELD";
$proto41["m_columns"][] = "ABE_MAILSERVER_OR_MAILCURRENT";
$proto41["m_columns"][] = "ABE_CUSTOM_GRID";
$proto41["m_columns"][] = "ABE_EMAIL_SERVER_UID";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "ABE_CONFIGURATION";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "ABE_CONFIGURATION";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ABE_CONFIGURATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ABE_CONFIGURATION = createSqlQuery_ABE_CONFIGURATION();


	
						;

																	

$tdataABE_CONFIGURATION[".sqlquery"] = $queryData_ABE_CONFIGURATION;

include_once(getabspath("include/ABE_CONFIGURATION_events.php"));
$tableEvents["ABE_CONFIGURATION"] = new eventclass_ABE_CONFIGURATION;
$tdataABE_CONFIGURATION[".hasEvents"] = true;

?>
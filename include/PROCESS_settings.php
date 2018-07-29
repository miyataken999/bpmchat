<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPROCESS = array();
	$tdataPROCESS[".truncateText"] = true;
	$tdataPROCESS[".NumberOfChars"] = 20;
	$tdataPROCESS[".ShortName"] = "PROCESS";
	$tdataPROCESS[".OwnerID"] = "";
	$tdataPROCESS[".OriginalTable"] = "PROCESS";

//	field labels
$fieldLabelsPROCESS = array();
$fieldToolTipsPROCESS = array();
$pageTitlesPROCESS = array();
$placeHoldersPROCESS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPROCESS["Japanese"] = array();
	$fieldToolTipsPROCESS["Japanese"] = array();
	$placeHoldersPROCESS["Japanese"] = array();
	$pageTitlesPROCESS["Japanese"] = array();
	$fieldLabelsPROCESS["Japanese"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS["Japanese"]["PRO_UID"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_UID"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TITLE"] = "プロのタイトル";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TITLE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TITLE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_DESCRIPTION"] = "プロの説明";
	$fieldToolTipsPROCESS["Japanese"]["PRO_DESCRIPTION"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_DESCRIPTION"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_PARENT"] = "プロの親";
	$fieldToolTipsPROCESS["Japanese"]["PRO_PARENT"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_PARENT"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TIME"] = "プロ時間";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TIME"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TIME"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TIMEUNIT"] = "プロTIMEUNIT";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TIMEUNIT"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TIMEUNIT"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_STATUS"] = "プロのステータス";
	$fieldToolTipsPROCESS["Japanese"]["PRO_STATUS"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_STATUS"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TYPE_DAY"] = "プロタイプ日";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TYPE_DAY"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TYPE_DAY"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TYPE"] = "プロタイプ";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TYPE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TYPE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_ASSIGNMENT"] = "プロの割り当て";
	$fieldToolTipsPROCESS["Japanese"]["PRO_ASSIGNMENT"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_ASSIGNMENT"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_SHOW_MAP"] = "プロ地図を表示します";
	$fieldToolTipsPROCESS["Japanese"]["PRO_SHOW_MAP"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_SHOW_MAP"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_SHOW_MESSAGE"] = "プロショーメッセージ";
	$fieldToolTipsPROCESS["Japanese"]["PRO_SHOW_MESSAGE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_SHOW_MESSAGE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_SUBPROCESS"] = "プロサブプロセス";
	$fieldToolTipsPROCESS["Japanese"]["PRO_SUBPROCESS"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_SUBPROCESS"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_OPEN"] = "プロトライオープン";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_OPEN"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_OPEN"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_DELETED"] = "プロトライを削除します";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_DELETED"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_DELETED"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_CANCELED"] = "プロトライをキャンセル";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_CANCELED"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_CANCELED"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_PAUSED"] = "プロトライを一時停止しました";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_PAUSED"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_PAUSED"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_REASSIGNED"] = "プロトライは、再割り当て";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_REASSIGNED"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_REASSIGNED"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_UNPAUSED"] = "プロトライ一時停止が解除";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_UNPAUSED"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_UNPAUSED"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TYPE_PROCESS"] = "プロ型プロセス";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TYPE_PROCESS"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TYPE_PROCESS"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_SHOW_DELEGATE"] = "プロショーデリゲート";
	$fieldToolTipsPROCESS["Japanese"]["PRO_SHOW_DELEGATE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_SHOW_DELEGATE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_SHOW_DYNAFORM"] = "プロショーdynaform";
	$fieldToolTipsPROCESS["Japanese"]["PRO_SHOW_DYNAFORM"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_SHOW_DYNAFORM"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_CATEGORY"] = "プロカテゴリ";
	$fieldToolTipsPROCESS["Japanese"]["PRO_CATEGORY"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_CATEGORY"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_SUB_CATEGORY"] = "プロのサブカテゴリー";
	$fieldToolTipsPROCESS["Japanese"]["PRO_SUB_CATEGORY"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_SUB_CATEGORY"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_INDUSTRY"] = "プロの業界";
	$fieldToolTipsPROCESS["Japanese"]["PRO_INDUSTRY"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_INDUSTRY"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_UPDATE_DATE"] = "プロ更新日";
	$fieldToolTipsPROCESS["Japanese"]["PRO_UPDATE_DATE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_UPDATE_DATE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_CREATE_DATE"] = "プロ日付を作成します";
	$fieldToolTipsPROCESS["Japanese"]["PRO_CREATE_DATE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_CREATE_DATE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_CREATE_USER"] = "プロユーザーを作成";
	$fieldToolTipsPROCESS["Japanese"]["PRO_CREATE_USER"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_CREATE_USER"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_HEIGHT"] = "プロの高さ";
	$fieldToolTipsPROCESS["Japanese"]["PRO_HEIGHT"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_HEIGHT"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_WIDTH"] = "プロ幅";
	$fieldToolTipsPROCESS["Japanese"]["PRO_WIDTH"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_WIDTH"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TITLE_X"] = "プロタイトルX";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TITLE_X"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TITLE_X"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TITLE_Y"] = "プロのタイトルのy";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TITLE_Y"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TITLE_Y"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_DEBUG"] = "プロデバッグ";
	$fieldToolTipsPROCESS["Japanese"]["PRO_DEBUG"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_DEBUG"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_DYNAFORMS"] = "プロdynaforms";
	$fieldToolTipsPROCESS["Japanese"]["PRO_DYNAFORMS"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_DYNAFORMS"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_DERIVATION_SCREEN_TPL"] = "プロ導出画面TPL";
	$fieldToolTipsPROCESS["Japanese"]["PRO_DERIVATION_SCREEN_TPL"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_DERIVATION_SCREEN_TPL"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_COST"] = "プロコスト";
	$fieldToolTipsPROCESS["Japanese"]["PRO_COST"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_COST"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_UNIT_COST"] = "プロ単価";
	$fieldToolTipsPROCESS["Japanese"]["PRO_UNIT_COST"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_UNIT_COST"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_ITEE"] = "プロITEE";
	$fieldToolTipsPROCESS["Japanese"]["PRO_ITEE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_ITEE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_ACTION_DONE"] = "プロアクションが行われ";
	$fieldToolTipsPROCESS["Japanese"]["PRO_ACTION_DONE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_ACTION_DONE"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsPROCESS["Japanese"]["PRO_ID"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_ID"] = "";
	$fieldLabelsPROCESS["Japanese"]["PRO_TRI_CREATE"] = "PRO TRI CREATE";
	$fieldToolTipsPROCESS["Japanese"]["PRO_TRI_CREATE"] = "";
	$placeHoldersPROCESS["Japanese"]["PRO_TRI_CREATE"] = "";
	if (count($fieldToolTipsPROCESS["Japanese"]))
		$tdataPROCESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROCESS["English"] = array();
	$fieldToolTipsPROCESS["English"] = array();
	$placeHoldersPROCESS["English"] = array();
	$pageTitlesPROCESS["English"] = array();
	$fieldLabelsPROCESS["English"]["PRO_UID"] = "プロのuid";
	$fieldToolTipsPROCESS["English"]["PRO_UID"] = "";
	$placeHoldersPROCESS["English"]["PRO_UID"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TITLE"] = "プロのタイトル";
	$fieldToolTipsPROCESS["English"]["PRO_TITLE"] = "";
	$placeHoldersPROCESS["English"]["PRO_TITLE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_DESCRIPTION"] = "プロの説明";
	$fieldToolTipsPROCESS["English"]["PRO_DESCRIPTION"] = "";
	$placeHoldersPROCESS["English"]["PRO_DESCRIPTION"] = "";
	$fieldLabelsPROCESS["English"]["PRO_PARENT"] = "プロの親";
	$fieldToolTipsPROCESS["English"]["PRO_PARENT"] = "";
	$placeHoldersPROCESS["English"]["PRO_PARENT"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TIME"] = "プロ時間";
	$fieldToolTipsPROCESS["English"]["PRO_TIME"] = "";
	$placeHoldersPROCESS["English"]["PRO_TIME"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TIMEUNIT"] = "プロTIMEUNIT";
	$fieldToolTipsPROCESS["English"]["PRO_TIMEUNIT"] = "";
	$placeHoldersPROCESS["English"]["PRO_TIMEUNIT"] = "";
	$fieldLabelsPROCESS["English"]["PRO_STATUS"] = "プロのステータス";
	$fieldToolTipsPROCESS["English"]["PRO_STATUS"] = "";
	$placeHoldersPROCESS["English"]["PRO_STATUS"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TYPE_DAY"] = "プロタイプ日";
	$fieldToolTipsPROCESS["English"]["PRO_TYPE_DAY"] = "";
	$placeHoldersPROCESS["English"]["PRO_TYPE_DAY"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TYPE"] = "プロタイプ";
	$fieldToolTipsPROCESS["English"]["PRO_TYPE"] = "";
	$placeHoldersPROCESS["English"]["PRO_TYPE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_ASSIGNMENT"] = "プロの割り当て";
	$fieldToolTipsPROCESS["English"]["PRO_ASSIGNMENT"] = "";
	$placeHoldersPROCESS["English"]["PRO_ASSIGNMENT"] = "";
	$fieldLabelsPROCESS["English"]["PRO_SHOW_MAP"] = "プロ地図を表示します";
	$fieldToolTipsPROCESS["English"]["PRO_SHOW_MAP"] = "";
	$placeHoldersPROCESS["English"]["PRO_SHOW_MAP"] = "";
	$fieldLabelsPROCESS["English"]["PRO_SHOW_MESSAGE"] = "プロショーメッセージ";
	$fieldToolTipsPROCESS["English"]["PRO_SHOW_MESSAGE"] = "";
	$placeHoldersPROCESS["English"]["PRO_SHOW_MESSAGE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_SUBPROCESS"] = "プロサブプロセス";
	$fieldToolTipsPROCESS["English"]["PRO_SUBPROCESS"] = "";
	$placeHoldersPROCESS["English"]["PRO_SUBPROCESS"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_OPEN"] = "プロトライオープン";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_OPEN"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_OPEN"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_DELETED"] = "プロトライを削除します";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_DELETED"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_DELETED"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_CANCELED"] = "プロトライをキャンセル";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_CANCELED"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_CANCELED"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_PAUSED"] = "プロトライを一時停止しました";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_PAUSED"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_PAUSED"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_REASSIGNED"] = "プロトライは、再割り当て";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_REASSIGNED"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_REASSIGNED"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_UNPAUSED"] = "プロトライ一時停止が解除";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_UNPAUSED"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_UNPAUSED"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TYPE_PROCESS"] = "プロ型プロセス";
	$fieldToolTipsPROCESS["English"]["PRO_TYPE_PROCESS"] = "";
	$placeHoldersPROCESS["English"]["PRO_TYPE_PROCESS"] = "";
	$fieldLabelsPROCESS["English"]["PRO_SHOW_DELEGATE"] = "プロショーデリゲート";
	$fieldToolTipsPROCESS["English"]["PRO_SHOW_DELEGATE"] = "";
	$placeHoldersPROCESS["English"]["PRO_SHOW_DELEGATE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_SHOW_DYNAFORM"] = "プロショーdynaform";
	$fieldToolTipsPROCESS["English"]["PRO_SHOW_DYNAFORM"] = "";
	$placeHoldersPROCESS["English"]["PRO_SHOW_DYNAFORM"] = "";
	$fieldLabelsPROCESS["English"]["PRO_CATEGORY"] = "プロカテゴリ";
	$fieldToolTipsPROCESS["English"]["PRO_CATEGORY"] = "";
	$placeHoldersPROCESS["English"]["PRO_CATEGORY"] = "";
	$fieldLabelsPROCESS["English"]["PRO_SUB_CATEGORY"] = "プロのサブカテゴリー";
	$fieldToolTipsPROCESS["English"]["PRO_SUB_CATEGORY"] = "";
	$placeHoldersPROCESS["English"]["PRO_SUB_CATEGORY"] = "";
	$fieldLabelsPROCESS["English"]["PRO_INDUSTRY"] = "プロの業界";
	$fieldToolTipsPROCESS["English"]["PRO_INDUSTRY"] = "";
	$placeHoldersPROCESS["English"]["PRO_INDUSTRY"] = "";
	$fieldLabelsPROCESS["English"]["PRO_UPDATE_DATE"] = "プロ更新日";
	$fieldToolTipsPROCESS["English"]["PRO_UPDATE_DATE"] = "";
	$placeHoldersPROCESS["English"]["PRO_UPDATE_DATE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_CREATE_DATE"] = "プロ日付を作成します";
	$fieldToolTipsPROCESS["English"]["PRO_CREATE_DATE"] = "";
	$placeHoldersPROCESS["English"]["PRO_CREATE_DATE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_CREATE_USER"] = "プロユーザーを作成";
	$fieldToolTipsPROCESS["English"]["PRO_CREATE_USER"] = "";
	$placeHoldersPROCESS["English"]["PRO_CREATE_USER"] = "";
	$fieldLabelsPROCESS["English"]["PRO_HEIGHT"] = "プロの高さ";
	$fieldToolTipsPROCESS["English"]["PRO_HEIGHT"] = "";
	$placeHoldersPROCESS["English"]["PRO_HEIGHT"] = "";
	$fieldLabelsPROCESS["English"]["PRO_WIDTH"] = "プロ幅";
	$fieldToolTipsPROCESS["English"]["PRO_WIDTH"] = "";
	$placeHoldersPROCESS["English"]["PRO_WIDTH"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TITLE_X"] = "プロタイトルX";
	$fieldToolTipsPROCESS["English"]["PRO_TITLE_X"] = "";
	$placeHoldersPROCESS["English"]["PRO_TITLE_X"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TITLE_Y"] = "プロのタイトルのy";
	$fieldToolTipsPROCESS["English"]["PRO_TITLE_Y"] = "";
	$placeHoldersPROCESS["English"]["PRO_TITLE_Y"] = "";
	$fieldLabelsPROCESS["English"]["PRO_DEBUG"] = "プロデバッグ";
	$fieldToolTipsPROCESS["English"]["PRO_DEBUG"] = "";
	$placeHoldersPROCESS["English"]["PRO_DEBUG"] = "";
	$fieldLabelsPROCESS["English"]["PRO_DYNAFORMS"] = "プロdynaforms";
	$fieldToolTipsPROCESS["English"]["PRO_DYNAFORMS"] = "";
	$placeHoldersPROCESS["English"]["PRO_DYNAFORMS"] = "";
	$fieldLabelsPROCESS["English"]["PRO_DERIVATION_SCREEN_TPL"] = "プロ導出画面TPL";
	$fieldToolTipsPROCESS["English"]["PRO_DERIVATION_SCREEN_TPL"] = "";
	$placeHoldersPROCESS["English"]["PRO_DERIVATION_SCREEN_TPL"] = "";
	$fieldLabelsPROCESS["English"]["PRO_COST"] = "プロコスト";
	$fieldToolTipsPROCESS["English"]["PRO_COST"] = "";
	$placeHoldersPROCESS["English"]["PRO_COST"] = "";
	$fieldLabelsPROCESS["English"]["PRO_UNIT_COST"] = "プロ単価";
	$fieldToolTipsPROCESS["English"]["PRO_UNIT_COST"] = "";
	$placeHoldersPROCESS["English"]["PRO_UNIT_COST"] = "";
	$fieldLabelsPROCESS["English"]["PRO_ITEE"] = "プロITEE";
	$fieldToolTipsPROCESS["English"]["PRO_ITEE"] = "";
	$placeHoldersPROCESS["English"]["PRO_ITEE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_ACTION_DONE"] = "プロアクションが行われ";
	$fieldToolTipsPROCESS["English"]["PRO_ACTION_DONE"] = "";
	$placeHoldersPROCESS["English"]["PRO_ACTION_DONE"] = "";
	$fieldLabelsPROCESS["English"]["PRO_ID"] = "PRO ID";
	$fieldToolTipsPROCESS["English"]["PRO_ID"] = "";
	$placeHoldersPROCESS["English"]["PRO_ID"] = "";
	$fieldLabelsPROCESS["English"]["PRO_TRI_CREATE"] = "PRO TRI CREATE";
	$fieldToolTipsPROCESS["English"]["PRO_TRI_CREATE"] = "";
	$placeHoldersPROCESS["English"]["PRO_TRI_CREATE"] = "";
	if (count($fieldToolTipsPROCESS["English"]))
		$tdataPROCESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROCESS[""] = array();
	$fieldToolTipsPROCESS[""] = array();
	$placeHoldersPROCESS[""] = array();
	$pageTitlesPROCESS[""] = array();
	if (count($fieldToolTipsPROCESS[""]))
		$tdataPROCESS[".isUseToolTips"] = true;
}


	$tdataPROCESS[".NCSearch"] = true;



$tdataPROCESS[".shortTableName"] = "PROCESS";
$tdataPROCESS[".nSecOptions"] = 0;
$tdataPROCESS[".recsPerRowPrint"] = 1;
$tdataPROCESS[".mainTableOwnerID"] = "";
$tdataPROCESS[".moveNext"] = 0;
$tdataPROCESS[".entityType"] = 0;

$tdataPROCESS[".strOriginalTableName"] = "PROCESS";

	



$tdataPROCESS[".showAddInPopup"] = false;

$tdataPROCESS[".showEditInPopup"] = false;

$tdataPROCESS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPROCESS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPROCESS[".fieldsForRegister"] = array();
	
$tdataPROCESS[".listAjax"] = false;

	$tdataPROCESS[".audit"] = true;

	$tdataPROCESS[".locking"] = false;

$tdataPROCESS[".edit"] = true;
$tdataPROCESS[".afterEditAction"] = 1;
$tdataPROCESS[".closePopupAfterEdit"] = 1;
$tdataPROCESS[".afterEditActionDetTable"] = "";

$tdataPROCESS[".add"] = true;
$tdataPROCESS[".afterAddAction"] = 1;
$tdataPROCESS[".closePopupAfterAdd"] = 1;
$tdataPROCESS[".afterAddActionDetTable"] = "";

$tdataPROCESS[".list"] = true;

$tdataPROCESS[".inlineEdit"] = true;


$tdataPROCESS[".reorderRecordsByHeader"] = true;
$tdataPROCESS[".createSortByDropdown"] = true;
$tdataPROCESS[".strSortControlSettingsJSON"] = "";



$tdataPROCESS[".inlineAdd"] = true;
$tdataPROCESS[".view"] = true;

$tdataPROCESS[".import"] = true;

$tdataPROCESS[".exportTo"] = true;

$tdataPROCESS[".printFriendly"] = true;

$tdataPROCESS[".delete"] = true;

$tdataPROCESS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataPROCESS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataPROCESS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataPROCESS[".searchSaving"] = false;
//

$tdataPROCESS[".showSearchPanel"] = true;
		$tdataPROCESS[".flexibleSearch"] = true;

$tdataPROCESS[".isUseAjaxSuggest"] = true;

$tdataPROCESS[".rowHighlite"] = true;



																

$tdataPROCESS[".ajaxCodeSnippetAdded"] = false;

$tdataPROCESS[".buttonsAdded"] = false;

$tdataPROCESS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPROCESS[".isUseTimeForSearch"] = false;



$tdataPROCESS[".badgeColor"] = "3CB371";


$tdataPROCESS[".allSearchFields"] = array();
$tdataPROCESS[".filterFields"] = array();
$tdataPROCESS[".requiredSearchFields"] = array();

$tdataPROCESS[".allSearchFields"][] = "PRO_UID";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TITLE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_DESCRIPTION";
	$tdataPROCESS[".allSearchFields"][] = "PRO_PARENT";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TIME";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TIMEUNIT";
	$tdataPROCESS[".allSearchFields"][] = "PRO_STATUS";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TYPE_DAY";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TYPE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_ASSIGNMENT";
	$tdataPROCESS[".allSearchFields"][] = "PRO_SHOW_MAP";
	$tdataPROCESS[".allSearchFields"][] = "PRO_SHOW_MESSAGE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_SUBPROCESS";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_OPEN";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_DELETED";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_CANCELED";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_PAUSED";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_REASSIGNED";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_UNPAUSED";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TYPE_PROCESS";
	$tdataPROCESS[".allSearchFields"][] = "PRO_SHOW_DELEGATE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_SHOW_DYNAFORM";
	$tdataPROCESS[".allSearchFields"][] = "PRO_CATEGORY";
	$tdataPROCESS[".allSearchFields"][] = "PRO_SUB_CATEGORY";
	$tdataPROCESS[".allSearchFields"][] = "PRO_INDUSTRY";
	$tdataPROCESS[".allSearchFields"][] = "PRO_UPDATE_DATE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_CREATE_DATE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_CREATE_USER";
	$tdataPROCESS[".allSearchFields"][] = "PRO_HEIGHT";
	$tdataPROCESS[".allSearchFields"][] = "PRO_WIDTH";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TITLE_X";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TITLE_Y";
	$tdataPROCESS[".allSearchFields"][] = "PRO_DEBUG";
	$tdataPROCESS[".allSearchFields"][] = "PRO_DYNAFORMS";
	$tdataPROCESS[".allSearchFields"][] = "PRO_DERIVATION_SCREEN_TPL";
	$tdataPROCESS[".allSearchFields"][] = "PRO_COST";
	$tdataPROCESS[".allSearchFields"][] = "PRO_UNIT_COST";
	$tdataPROCESS[".allSearchFields"][] = "PRO_ITEE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_ACTION_DONE";
	$tdataPROCESS[".allSearchFields"][] = "PRO_ID";
	$tdataPROCESS[".allSearchFields"][] = "PRO_TRI_CREATE";
	

$tdataPROCESS[".googleLikeFields"] = array();
$tdataPROCESS[".googleLikeFields"][] = "PRO_UID";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TITLE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".googleLikeFields"][] = "PRO_PARENT";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TIME";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".googleLikeFields"][] = "PRO_STATUS";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TYPE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".googleLikeFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".googleLikeFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".googleLikeFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".googleLikeFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".googleLikeFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".googleLikeFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".googleLikeFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".googleLikeFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".googleLikeFields"][] = "PRO_WIDTH";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".googleLikeFields"][] = "PRO_DEBUG";
$tdataPROCESS[".googleLikeFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".googleLikeFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".googleLikeFields"][] = "PRO_COST";
$tdataPROCESS[".googleLikeFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".googleLikeFields"][] = "PRO_ITEE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".googleLikeFields"][] = "PRO_ID";
$tdataPROCESS[".googleLikeFields"][] = "PRO_TRI_CREATE";


$tdataPROCESS[".advSearchFields"] = array();
$tdataPROCESS[".advSearchFields"][] = "PRO_UID";
$tdataPROCESS[".advSearchFields"][] = "PRO_TITLE";
$tdataPROCESS[".advSearchFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".advSearchFields"][] = "PRO_PARENT";
$tdataPROCESS[".advSearchFields"][] = "PRO_TIME";
$tdataPROCESS[".advSearchFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".advSearchFields"][] = "PRO_STATUS";
$tdataPROCESS[".advSearchFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".advSearchFields"][] = "PRO_TYPE";
$tdataPROCESS[".advSearchFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".advSearchFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".advSearchFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".advSearchFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".advSearchFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".advSearchFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".advSearchFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".advSearchFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".advSearchFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".advSearchFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".advSearchFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".advSearchFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".advSearchFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".advSearchFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".advSearchFields"][] = "PRO_WIDTH";
$tdataPROCESS[".advSearchFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".advSearchFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".advSearchFields"][] = "PRO_DEBUG";
$tdataPROCESS[".advSearchFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".advSearchFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".advSearchFields"][] = "PRO_COST";
$tdataPROCESS[".advSearchFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".advSearchFields"][] = "PRO_ITEE";
$tdataPROCESS[".advSearchFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".advSearchFields"][] = "PRO_ID";
$tdataPROCESS[".advSearchFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".tableType"] = "list";

$tdataPROCESS[".printerPageOrientation"] = 0;
$tdataPROCESS[".nPrinterPageScale"] = 100;

$tdataPROCESS[".nPrinterSplitRecords"] = 40;

$tdataPROCESS[".nPrinterPDFSplitRecords"] = 40;



$tdataPROCESS[".geocodingEnabled"] = false;





$tdataPROCESS[".listGridLayout"] = 3;


$tdataPROCESS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataPROCESS[".pageSize"] = 20;

$tdataPROCESS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPROCESS[".strOrderBy"] = $tstrOrderBy;

$tdataPROCESS[".orderindexes"] = array();

$tdataPROCESS[".sqlHead"] = "SELECT PRO_UID,  	PRO_TITLE,  	PRO_DESCRIPTION,  	PRO_PARENT,  	PRO_TIME,  	PRO_TIMEUNIT,  	PRO_STATUS,  	PRO_TYPE_DAY,  	PRO_TYPE,  	PRO_ASSIGNMENT,  	PRO_SHOW_MAP,  	PRO_SHOW_MESSAGE,  	PRO_SUBPROCESS,  	PRO_TRI_OPEN,  	PRO_TRI_DELETED,  	PRO_TRI_CANCELED,  	PRO_TRI_PAUSED,  	PRO_TRI_REASSIGNED,  	PRO_TRI_UNPAUSED,  	PRO_TYPE_PROCESS,  	PRO_SHOW_DELEGATE,  	PRO_SHOW_DYNAFORM,  	PRO_CATEGORY,  	PRO_SUB_CATEGORY,  	PRO_INDUSTRY,  	PRO_UPDATE_DATE,  	PRO_CREATE_DATE,  	PRO_CREATE_USER,  	PRO_HEIGHT,  	PRO_WIDTH,  	PRO_TITLE_X,  	PRO_TITLE_Y,  	PRO_DEBUG,  	PRO_DYNAFORMS,  	PRO_DERIVATION_SCREEN_TPL,  	PRO_COST,  	PRO_UNIT_COST,  	PRO_ITEE,  	PRO_ACTION_DONE,  	PRO_ID,  	PRO_TRI_CREATE";
$tdataPROCESS[".sqlFrom"] = "FROM PROCESS";
$tdataPROCESS[".sqlWhereExpr"] = "";
$tdataPROCESS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPROCESS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPROCESS[".arrGroupsPerPage"] = $arrGPP;

$tdataPROCESS[".highlightSearchResults"] = true;

$tableKeysPROCESS = array();
$tableKeysPROCESS[] = "PRO_UID";
$tdataPROCESS[".Keys"] = $tableKeysPROCESS;

$tdataPROCESS[".listFields"] = array();
$tdataPROCESS[".listFields"][] = "PRO_UID";
$tdataPROCESS[".listFields"][] = "PRO_TITLE";
$tdataPROCESS[".listFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".listFields"][] = "PRO_PARENT";
$tdataPROCESS[".listFields"][] = "PRO_TIME";
$tdataPROCESS[".listFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".listFields"][] = "PRO_STATUS";
$tdataPROCESS[".listFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".listFields"][] = "PRO_TYPE";
$tdataPROCESS[".listFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".listFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".listFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".listFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".listFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".listFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".listFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".listFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".listFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".listFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".listFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".listFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".listFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".listFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".listFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".listFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".listFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".listFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".listFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".listFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".listFields"][] = "PRO_WIDTH";
$tdataPROCESS[".listFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".listFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".listFields"][] = "PRO_DEBUG";
$tdataPROCESS[".listFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".listFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".listFields"][] = "PRO_COST";
$tdataPROCESS[".listFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".listFields"][] = "PRO_ITEE";
$tdataPROCESS[".listFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".listFields"][] = "PRO_ID";
$tdataPROCESS[".listFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".hideMobileList"] = array();


$tdataPROCESS[".viewFields"] = array();
$tdataPROCESS[".viewFields"][] = "PRO_UID";
$tdataPROCESS[".viewFields"][] = "PRO_TITLE";
$tdataPROCESS[".viewFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".viewFields"][] = "PRO_PARENT";
$tdataPROCESS[".viewFields"][] = "PRO_TIME";
$tdataPROCESS[".viewFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".viewFields"][] = "PRO_STATUS";
$tdataPROCESS[".viewFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".viewFields"][] = "PRO_TYPE";
$tdataPROCESS[".viewFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".viewFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".viewFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".viewFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".viewFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".viewFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".viewFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".viewFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".viewFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".viewFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".viewFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".viewFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".viewFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".viewFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".viewFields"][] = "PRO_WIDTH";
$tdataPROCESS[".viewFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".viewFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".viewFields"][] = "PRO_DEBUG";
$tdataPROCESS[".viewFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".viewFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".viewFields"][] = "PRO_COST";
$tdataPROCESS[".viewFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".viewFields"][] = "PRO_ITEE";
$tdataPROCESS[".viewFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".viewFields"][] = "PRO_ID";
$tdataPROCESS[".viewFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".addFields"] = array();
$tdataPROCESS[".addFields"][] = "PRO_UID";
$tdataPROCESS[".addFields"][] = "PRO_TITLE";
$tdataPROCESS[".addFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".addFields"][] = "PRO_PARENT";
$tdataPROCESS[".addFields"][] = "PRO_TIME";
$tdataPROCESS[".addFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".addFields"][] = "PRO_STATUS";
$tdataPROCESS[".addFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".addFields"][] = "PRO_TYPE";
$tdataPROCESS[".addFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".addFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".addFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".addFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".addFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".addFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".addFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".addFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".addFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".addFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".addFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".addFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".addFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".addFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".addFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".addFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".addFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".addFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".addFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".addFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".addFields"][] = "PRO_WIDTH";
$tdataPROCESS[".addFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".addFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".addFields"][] = "PRO_DEBUG";
$tdataPROCESS[".addFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".addFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".addFields"][] = "PRO_COST";
$tdataPROCESS[".addFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".addFields"][] = "PRO_ITEE";
$tdataPROCESS[".addFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".addFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".masterListFields"] = array();
$tdataPROCESS[".masterListFields"][] = "PRO_UID";
$tdataPROCESS[".masterListFields"][] = "PRO_TITLE";
$tdataPROCESS[".masterListFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".masterListFields"][] = "PRO_PARENT";
$tdataPROCESS[".masterListFields"][] = "PRO_TIME";
$tdataPROCESS[".masterListFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".masterListFields"][] = "PRO_STATUS";
$tdataPROCESS[".masterListFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".masterListFields"][] = "PRO_TYPE";
$tdataPROCESS[".masterListFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".masterListFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".masterListFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".masterListFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".masterListFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".masterListFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".masterListFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".masterListFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".masterListFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".masterListFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".masterListFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".masterListFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".masterListFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".masterListFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".masterListFields"][] = "PRO_WIDTH";
$tdataPROCESS[".masterListFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".masterListFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".masterListFields"][] = "PRO_DEBUG";
$tdataPROCESS[".masterListFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".masterListFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".masterListFields"][] = "PRO_COST";
$tdataPROCESS[".masterListFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".masterListFields"][] = "PRO_ITEE";
$tdataPROCESS[".masterListFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".masterListFields"][] = "PRO_ID";
$tdataPROCESS[".masterListFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".inlineAddFields"] = array();
$tdataPROCESS[".inlineAddFields"][] = "PRO_UID";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TITLE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".inlineAddFields"][] = "PRO_PARENT";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TIME";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".inlineAddFields"][] = "PRO_STATUS";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TYPE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".inlineAddFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".inlineAddFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".inlineAddFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".inlineAddFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".inlineAddFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".inlineAddFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".inlineAddFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".inlineAddFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".inlineAddFields"][] = "PRO_WIDTH";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".inlineAddFields"][] = "PRO_DEBUG";
$tdataPROCESS[".inlineAddFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".inlineAddFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".inlineAddFields"][] = "PRO_COST";
$tdataPROCESS[".inlineAddFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".inlineAddFields"][] = "PRO_ITEE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".inlineAddFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".editFields"] = array();
$tdataPROCESS[".editFields"][] = "PRO_UID";
$tdataPROCESS[".editFields"][] = "PRO_TITLE";
$tdataPROCESS[".editFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".editFields"][] = "PRO_PARENT";
$tdataPROCESS[".editFields"][] = "PRO_TIME";
$tdataPROCESS[".editFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".editFields"][] = "PRO_STATUS";
$tdataPROCESS[".editFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".editFields"][] = "PRO_TYPE";
$tdataPROCESS[".editFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".editFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".editFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".editFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".editFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".editFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".editFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".editFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".editFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".editFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".editFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".editFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".editFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".editFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".editFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".editFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".editFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".editFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".editFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".editFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".editFields"][] = "PRO_WIDTH";
$tdataPROCESS[".editFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".editFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".editFields"][] = "PRO_DEBUG";
$tdataPROCESS[".editFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".editFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".editFields"][] = "PRO_COST";
$tdataPROCESS[".editFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".editFields"][] = "PRO_ITEE";
$tdataPROCESS[".editFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".editFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".inlineEditFields"] = array();
$tdataPROCESS[".inlineEditFields"][] = "PRO_UID";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TITLE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".inlineEditFields"][] = "PRO_PARENT";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TIME";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".inlineEditFields"][] = "PRO_STATUS";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TYPE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".inlineEditFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".inlineEditFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".inlineEditFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".inlineEditFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".inlineEditFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".inlineEditFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".inlineEditFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".inlineEditFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".inlineEditFields"][] = "PRO_WIDTH";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".inlineEditFields"][] = "PRO_DEBUG";
$tdataPROCESS[".inlineEditFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".inlineEditFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".inlineEditFields"][] = "PRO_COST";
$tdataPROCESS[".inlineEditFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".inlineEditFields"][] = "PRO_ITEE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".inlineEditFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".updateSelectedFields"] = array();
$tdataPROCESS[".updateSelectedFields"][] = "PRO_UID";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TITLE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_PARENT";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TIME";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_STATUS";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TYPE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_WIDTH";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_DEBUG";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_COST";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_ITEE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".updateSelectedFields"][] = "PRO_TRI_CREATE";


$tdataPROCESS[".exportFields"] = array();
$tdataPROCESS[".exportFields"][] = "PRO_UID";
$tdataPROCESS[".exportFields"][] = "PRO_TITLE";
$tdataPROCESS[".exportFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".exportFields"][] = "PRO_PARENT";
$tdataPROCESS[".exportFields"][] = "PRO_TIME";
$tdataPROCESS[".exportFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".exportFields"][] = "PRO_STATUS";
$tdataPROCESS[".exportFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".exportFields"][] = "PRO_TYPE";
$tdataPROCESS[".exportFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".exportFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".exportFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".exportFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".exportFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".exportFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".exportFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".exportFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".exportFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".exportFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".exportFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".exportFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".exportFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".exportFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".exportFields"][] = "PRO_WIDTH";
$tdataPROCESS[".exportFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".exportFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".exportFields"][] = "PRO_DEBUG";
$tdataPROCESS[".exportFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".exportFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".exportFields"][] = "PRO_COST";
$tdataPROCESS[".exportFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".exportFields"][] = "PRO_ITEE";
$tdataPROCESS[".exportFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".exportFields"][] = "PRO_ID";
$tdataPROCESS[".exportFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".importFields"] = array();
$tdataPROCESS[".importFields"][] = "PRO_UID";
$tdataPROCESS[".importFields"][] = "PRO_TITLE";
$tdataPROCESS[".importFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".importFields"][] = "PRO_PARENT";
$tdataPROCESS[".importFields"][] = "PRO_TIME";
$tdataPROCESS[".importFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".importFields"][] = "PRO_STATUS";
$tdataPROCESS[".importFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".importFields"][] = "PRO_TYPE";
$tdataPROCESS[".importFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".importFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".importFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".importFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".importFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".importFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".importFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".importFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".importFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".importFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".importFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".importFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".importFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".importFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".importFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".importFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".importFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".importFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".importFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".importFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".importFields"][] = "PRO_WIDTH";
$tdataPROCESS[".importFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".importFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".importFields"][] = "PRO_DEBUG";
$tdataPROCESS[".importFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".importFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".importFields"][] = "PRO_COST";
$tdataPROCESS[".importFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".importFields"][] = "PRO_ITEE";
$tdataPROCESS[".importFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".importFields"][] = "PRO_ID";
$tdataPROCESS[".importFields"][] = "PRO_TRI_CREATE";

$tdataPROCESS[".printFields"] = array();
$tdataPROCESS[".printFields"][] = "PRO_UID";
$tdataPROCESS[".printFields"][] = "PRO_TITLE";
$tdataPROCESS[".printFields"][] = "PRO_DESCRIPTION";
$tdataPROCESS[".printFields"][] = "PRO_PARENT";
$tdataPROCESS[".printFields"][] = "PRO_TIME";
$tdataPROCESS[".printFields"][] = "PRO_TIMEUNIT";
$tdataPROCESS[".printFields"][] = "PRO_STATUS";
$tdataPROCESS[".printFields"][] = "PRO_TYPE_DAY";
$tdataPROCESS[".printFields"][] = "PRO_TYPE";
$tdataPROCESS[".printFields"][] = "PRO_ASSIGNMENT";
$tdataPROCESS[".printFields"][] = "PRO_SHOW_MAP";
$tdataPROCESS[".printFields"][] = "PRO_SHOW_MESSAGE";
$tdataPROCESS[".printFields"][] = "PRO_SUBPROCESS";
$tdataPROCESS[".printFields"][] = "PRO_TRI_OPEN";
$tdataPROCESS[".printFields"][] = "PRO_TRI_DELETED";
$tdataPROCESS[".printFields"][] = "PRO_TRI_CANCELED";
$tdataPROCESS[".printFields"][] = "PRO_TRI_PAUSED";
$tdataPROCESS[".printFields"][] = "PRO_TRI_REASSIGNED";
$tdataPROCESS[".printFields"][] = "PRO_TRI_UNPAUSED";
$tdataPROCESS[".printFields"][] = "PRO_TYPE_PROCESS";
$tdataPROCESS[".printFields"][] = "PRO_SHOW_DELEGATE";
$tdataPROCESS[".printFields"][] = "PRO_SHOW_DYNAFORM";
$tdataPROCESS[".printFields"][] = "PRO_CATEGORY";
$tdataPROCESS[".printFields"][] = "PRO_SUB_CATEGORY";
$tdataPROCESS[".printFields"][] = "PRO_INDUSTRY";
$tdataPROCESS[".printFields"][] = "PRO_UPDATE_DATE";
$tdataPROCESS[".printFields"][] = "PRO_CREATE_DATE";
$tdataPROCESS[".printFields"][] = "PRO_CREATE_USER";
$tdataPROCESS[".printFields"][] = "PRO_HEIGHT";
$tdataPROCESS[".printFields"][] = "PRO_WIDTH";
$tdataPROCESS[".printFields"][] = "PRO_TITLE_X";
$tdataPROCESS[".printFields"][] = "PRO_TITLE_Y";
$tdataPROCESS[".printFields"][] = "PRO_DEBUG";
$tdataPROCESS[".printFields"][] = "PRO_DYNAFORMS";
$tdataPROCESS[".printFields"][] = "PRO_DERIVATION_SCREEN_TPL";
$tdataPROCESS[".printFields"][] = "PRO_COST";
$tdataPROCESS[".printFields"][] = "PRO_UNIT_COST";
$tdataPROCESS[".printFields"][] = "PRO_ITEE";
$tdataPROCESS[".printFields"][] = "PRO_ACTION_DONE";
$tdataPROCESS[".printFields"][] = "PRO_ID";
$tdataPROCESS[".printFields"][] = "PRO_TRI_CREATE";

//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_UID");
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




	$tdataPROCESS["PRO_UID"] = $fdata;
//	PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRO_TITLE";
	$fdata["GoodName"] = "PRO_TITLE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TITLE");
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

		$fdata["strField"] = "PRO_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TITLE";

	
	
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




	$tdataPROCESS["PRO_TITLE"] = $fdata;
//	PRO_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PRO_DESCRIPTION";
	$fdata["GoodName"] = "PRO_DESCRIPTION";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_DESCRIPTION");
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

		$fdata["strField"] = "PRO_DESCRIPTION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_DESCRIPTION";

	
	
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




	$tdataPROCESS["PRO_DESCRIPTION"] = $fdata;
//	PRO_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRO_PARENT";
	$fdata["GoodName"] = "PRO_PARENT";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_PARENT");
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

		$fdata["strField"] = "PRO_PARENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_PARENT";

	
	
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




	$tdataPROCESS["PRO_PARENT"] = $fdata;
//	PRO_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRO_TIME";
	$fdata["GoodName"] = "PRO_TIME";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TIME");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "PRO_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TIME";

	
	
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




	$tdataPROCESS["PRO_TIME"] = $fdata;
//	PRO_TIMEUNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRO_TIMEUNIT";
	$fdata["GoodName"] = "PRO_TIMEUNIT";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TIMEUNIT");
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

		$fdata["strField"] = "PRO_TIMEUNIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TIMEUNIT";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataPROCESS["PRO_TIMEUNIT"] = $fdata;
//	PRO_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PRO_STATUS";
	$fdata["GoodName"] = "PRO_STATUS";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_STATUS");
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

		$fdata["strField"] = "PRO_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_STATUS";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataPROCESS["PRO_STATUS"] = $fdata;
//	PRO_TYPE_DAY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRO_TYPE_DAY";
	$fdata["GoodName"] = "PRO_TYPE_DAY";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TYPE_DAY");
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

		$fdata["strField"] = "PRO_TYPE_DAY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TYPE_DAY";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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




	$tdataPROCESS["PRO_TYPE_DAY"] = $fdata;
//	PRO_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRO_TYPE";
	$fdata["GoodName"] = "PRO_TYPE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TYPE");
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

		$fdata["strField"] = "PRO_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TYPE";

	
	
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




	$tdataPROCESS["PRO_TYPE"] = $fdata;
//	PRO_ASSIGNMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PRO_ASSIGNMENT";
	$fdata["GoodName"] = "PRO_ASSIGNMENT";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_ASSIGNMENT");
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

		$fdata["strField"] = "PRO_ASSIGNMENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_ASSIGNMENT";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataPROCESS["PRO_ASSIGNMENT"] = $fdata;
//	PRO_SHOW_MAP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PRO_SHOW_MAP";
	$fdata["GoodName"] = "PRO_SHOW_MAP";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_SHOW_MAP");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_SHOW_MAP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_SHOW_MAP";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_SHOW_MAP"] = $fdata;
//	PRO_SHOW_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PRO_SHOW_MESSAGE";
	$fdata["GoodName"] = "PRO_SHOW_MESSAGE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_SHOW_MESSAGE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_SHOW_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_SHOW_MESSAGE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_SHOW_MESSAGE"] = $fdata;
//	PRO_SUBPROCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PRO_SUBPROCESS";
	$fdata["GoodName"] = "PRO_SUBPROCESS";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_SUBPROCESS");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_SUBPROCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_SUBPROCESS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_SUBPROCESS"] = $fdata;
//	PRO_TRI_OPEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PRO_TRI_OPEN";
	$fdata["GoodName"] = "PRO_TRI_OPEN";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_OPEN");
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

		$fdata["strField"] = "PRO_TRI_OPEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_OPEN";

	
	
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




	$tdataPROCESS["PRO_TRI_OPEN"] = $fdata;
//	PRO_TRI_DELETED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PRO_TRI_DELETED";
	$fdata["GoodName"] = "PRO_TRI_DELETED";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_DELETED");
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

		$fdata["strField"] = "PRO_TRI_DELETED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_DELETED";

	
	
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




	$tdataPROCESS["PRO_TRI_DELETED"] = $fdata;
//	PRO_TRI_CANCELED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PRO_TRI_CANCELED";
	$fdata["GoodName"] = "PRO_TRI_CANCELED";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_CANCELED");
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

		$fdata["strField"] = "PRO_TRI_CANCELED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_CANCELED";

	
	
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




	$tdataPROCESS["PRO_TRI_CANCELED"] = $fdata;
//	PRO_TRI_PAUSED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PRO_TRI_PAUSED";
	$fdata["GoodName"] = "PRO_TRI_PAUSED";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_PAUSED");
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

		$fdata["strField"] = "PRO_TRI_PAUSED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_PAUSED";

	
	
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




	$tdataPROCESS["PRO_TRI_PAUSED"] = $fdata;
//	PRO_TRI_REASSIGNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PRO_TRI_REASSIGNED";
	$fdata["GoodName"] = "PRO_TRI_REASSIGNED";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_REASSIGNED");
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

		$fdata["strField"] = "PRO_TRI_REASSIGNED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_REASSIGNED";

	
	
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




	$tdataPROCESS["PRO_TRI_REASSIGNED"] = $fdata;
//	PRO_TRI_UNPAUSED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PRO_TRI_UNPAUSED";
	$fdata["GoodName"] = "PRO_TRI_UNPAUSED";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_UNPAUSED");
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

		$fdata["strField"] = "PRO_TRI_UNPAUSED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_UNPAUSED";

	
	
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




	$tdataPROCESS["PRO_TRI_UNPAUSED"] = $fdata;
//	PRO_TYPE_PROCESS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PRO_TYPE_PROCESS";
	$fdata["GoodName"] = "PRO_TYPE_PROCESS";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TYPE_PROCESS");
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

		$fdata["strField"] = "PRO_TYPE_PROCESS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TYPE_PROCESS";

	
	
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




	$tdataPROCESS["PRO_TYPE_PROCESS"] = $fdata;
//	PRO_SHOW_DELEGATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PRO_SHOW_DELEGATE";
	$fdata["GoodName"] = "PRO_SHOW_DELEGATE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_SHOW_DELEGATE");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_SHOW_DELEGATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_SHOW_DELEGATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_SHOW_DELEGATE"] = $fdata;
//	PRO_SHOW_DYNAFORM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "PRO_SHOW_DYNAFORM";
	$fdata["GoodName"] = "PRO_SHOW_DYNAFORM";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_SHOW_DYNAFORM");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "PRO_SHOW_DYNAFORM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_SHOW_DYNAFORM";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_SHOW_DYNAFORM"] = $fdata;
//	PRO_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PRO_CATEGORY";
	$fdata["GoodName"] = "PRO_CATEGORY";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_CATEGORY");
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

		$fdata["strField"] = "PRO_CATEGORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_CATEGORY";

	
	
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
			$edata["EditParams"].= " maxlength=48";

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




	$tdataPROCESS["PRO_CATEGORY"] = $fdata;
//	PRO_SUB_CATEGORY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "PRO_SUB_CATEGORY";
	$fdata["GoodName"] = "PRO_SUB_CATEGORY";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_SUB_CATEGORY");
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

		$fdata["strField"] = "PRO_SUB_CATEGORY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_SUB_CATEGORY";

	
	
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
			$edata["EditParams"].= " maxlength=48";

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




	$tdataPROCESS["PRO_SUB_CATEGORY"] = $fdata;
//	PRO_INDUSTRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "PRO_INDUSTRY";
	$fdata["GoodName"] = "PRO_INDUSTRY";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_INDUSTRY");
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

		$fdata["strField"] = "PRO_INDUSTRY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_INDUSTRY";

	
	
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




	$tdataPROCESS["PRO_INDUSTRY"] = $fdata;
//	PRO_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PRO_UPDATE_DATE";
	$fdata["GoodName"] = "PRO_UPDATE_DATE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_UPDATE_DATE");
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

		$fdata["strField"] = "PRO_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UPDATE_DATE";

	
	
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




	$tdataPROCESS["PRO_UPDATE_DATE"] = $fdata;
//	PRO_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PRO_CREATE_DATE";
	$fdata["GoodName"] = "PRO_CREATE_DATE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_CREATE_DATE");
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

		$fdata["strField"] = "PRO_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_CREATE_DATE";

	
	
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




	$tdataPROCESS["PRO_CREATE_DATE"] = $fdata;
//	PRO_CREATE_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PRO_CREATE_USER";
	$fdata["GoodName"] = "PRO_CREATE_USER";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_CREATE_USER");
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

		$fdata["strField"] = "PRO_CREATE_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_CREATE_USER";

	
	
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




	$tdataPROCESS["PRO_CREATE_USER"] = $fdata;
//	PRO_HEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PRO_HEIGHT";
	$fdata["GoodName"] = "PRO_HEIGHT";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_HEIGHT");
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

		$fdata["strField"] = "PRO_HEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_HEIGHT";

	
	
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




	$tdataPROCESS["PRO_HEIGHT"] = $fdata;
//	PRO_WIDTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PRO_WIDTH";
	$fdata["GoodName"] = "PRO_WIDTH";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_WIDTH");
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

		$fdata["strField"] = "PRO_WIDTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_WIDTH";

	
	
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




	$tdataPROCESS["PRO_WIDTH"] = $fdata;
//	PRO_TITLE_X
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "PRO_TITLE_X";
	$fdata["GoodName"] = "PRO_TITLE_X";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TITLE_X");
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

		$fdata["strField"] = "PRO_TITLE_X";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TITLE_X";

	
	
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




	$tdataPROCESS["PRO_TITLE_X"] = $fdata;
//	PRO_TITLE_Y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "PRO_TITLE_Y";
	$fdata["GoodName"] = "PRO_TITLE_Y";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TITLE_Y");
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

		$fdata["strField"] = "PRO_TITLE_Y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TITLE_Y";

	
	
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




	$tdataPROCESS["PRO_TITLE_Y"] = $fdata;
//	PRO_DEBUG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "PRO_DEBUG";
	$fdata["GoodName"] = "PRO_DEBUG";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_DEBUG");
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

		$fdata["strField"] = "PRO_DEBUG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_DEBUG";

	
	
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




	$tdataPROCESS["PRO_DEBUG"] = $fdata;
//	PRO_DYNAFORMS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "PRO_DYNAFORMS";
	$fdata["GoodName"] = "PRO_DYNAFORMS";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_DYNAFORMS");
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

		$fdata["strField"] = "PRO_DYNAFORMS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_DYNAFORMS";

	
	
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




	$tdataPROCESS["PRO_DYNAFORMS"] = $fdata;
//	PRO_DERIVATION_SCREEN_TPL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "PRO_DERIVATION_SCREEN_TPL";
	$fdata["GoodName"] = "PRO_DERIVATION_SCREEN_TPL";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_DERIVATION_SCREEN_TPL");
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

		$fdata["strField"] = "PRO_DERIVATION_SCREEN_TPL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_DERIVATION_SCREEN_TPL";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_DERIVATION_SCREEN_TPL"] = $fdata;
//	PRO_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "PRO_COST";
	$fdata["GoodName"] = "PRO_COST";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_COST");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "PRO_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_COST";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_COST"] = $fdata;
//	PRO_UNIT_COST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "PRO_UNIT_COST";
	$fdata["GoodName"] = "PRO_UNIT_COST";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_UNIT_COST");
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

		$fdata["strField"] = "PRO_UNIT_COST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_UNIT_COST";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPROCESS["PRO_UNIT_COST"] = $fdata;
//	PRO_ITEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "PRO_ITEE";
	$fdata["GoodName"] = "PRO_ITEE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_ITEE");
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

		$fdata["strField"] = "PRO_ITEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_ITEE";

	
	
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




	$tdataPROCESS["PRO_ITEE"] = $fdata;
//	PRO_ACTION_DONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "PRO_ACTION_DONE";
	$fdata["GoodName"] = "PRO_ACTION_DONE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_ACTION_DONE");
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

		$fdata["strField"] = "PRO_ACTION_DONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_ACTION_DONE";

	
	
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




	$tdataPROCESS["PRO_ACTION_DONE"] = $fdata;
//	PRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "PRO_ID";
	$fdata["GoodName"] = "PRO_ID";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRO_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_ID";

	
	
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




	$tdataPROCESS["PRO_ID"] = $fdata;
//	PRO_TRI_CREATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "PRO_TRI_CREATE";
	$fdata["GoodName"] = "PRO_TRI_CREATE";
	$fdata["ownerTable"] = "PROCESS";
	$fdata["Label"] = GetFieldLabel("PROCESS","PRO_TRI_CREATE");
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

		$fdata["strField"] = "PRO_TRI_CREATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRO_TRI_CREATE";

	
	
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




	$tdataPROCESS["PRO_TRI_CREATE"] = $fdata;


$tables_data["PROCESS"]=&$tdataPROCESS;
$field_labels["PROCESS"] = &$fieldLabelsPROCESS;
$fieldToolTips["PROCESS"] = &$fieldToolTipsPROCESS;
$placeHolders["PROCESS"] = &$placeHoldersPROCESS;
$page_titles["PROCESS"] = &$pageTitlesPROCESS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PROCESS"] = array();
//	SUB_PROCESS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="SUB_PROCESS";
		$detailsParam["dOriginalTable"] = "SUB_PROCESS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "SUB_PROCESS";
	$detailsParam["dCaptionTable"] = GetTableCaption("SUB_PROCESS");
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
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	TASK
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TASK";
		$detailsParam["dOriginalTable"] = "TASK";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "TASK";
	$detailsParam["dCaptionTable"] = GetTableCaption("TASK");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	STEP
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="STEP";
		$detailsParam["dOriginalTable"] = "STEP";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "STEP";
	$detailsParam["dCaptionTable"] = GetTableCaption("STEP");
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
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	TRIGGERS
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TRIGGERS";
		$detailsParam["dOriginalTable"] = "TRIGGERS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "TRIGGERS";
	$detailsParam["dCaptionTable"] = GetTableCaption("TRIGGERS");
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
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	ROUTE
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ROUTE";
		$detailsParam["dOriginalTable"] = "ROUTE";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ROUTE";
	$detailsParam["dCaptionTable"] = GetTableCaption("ROUTE");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	DYNAFORM
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="DYNAFORM";
		$detailsParam["dOriginalTable"] = "DYNAFORM";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "DYNAFORM";
	$detailsParam["dCaptionTable"] = GetTableCaption("DYNAFORM");
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
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRO_UID";
//	PROCESS_VARIABLES
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PROCESS_VARIABLES";
		$detailsParam["dOriginalTable"] = "PROCESS_VARIABLES";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PROCESS_VARIABLES";
	$detailsParam["dCaptionTable"] = GetTableCaption("PROCESS_VARIABLES");
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
		
	$detailsTablesData["PROCESS"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PROCESS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["masterKeys"][]="PRO_UID";

				$detailsTablesData["PROCESS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PROCESS"][$dIndex]["detailKeys"][]="PRJ_UID";

// tables which are master tables for current table (detail)
$masterTablesData["PROCESS"] = array();


	
				$strOriginalDetailsTable="PROCESS_CATEGORY";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="PROCESS_CATEGORY";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "PROCESS_CATEGORY";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["PROCESS"][0] = $masterParams;
				$masterTablesData["PROCESS"][0]["masterKeys"] = array();
	$masterTablesData["PROCESS"][0]["masterKeys"][]="CATEGORY_UID";
				$masterTablesData["PROCESS"][0]["detailKeys"] = array();
	$masterTablesData["PROCESS"][0]["detailKeys"][]="PRO_CATEGORY";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PROCESS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PRO_UID,  	PRO_TITLE,  	PRO_DESCRIPTION,  	PRO_PARENT,  	PRO_TIME,  	PRO_TIMEUNIT,  	PRO_STATUS,  	PRO_TYPE_DAY,  	PRO_TYPE,  	PRO_ASSIGNMENT,  	PRO_SHOW_MAP,  	PRO_SHOW_MESSAGE,  	PRO_SUBPROCESS,  	PRO_TRI_OPEN,  	PRO_TRI_DELETED,  	PRO_TRI_CANCELED,  	PRO_TRI_PAUSED,  	PRO_TRI_REASSIGNED,  	PRO_TRI_UNPAUSED,  	PRO_TYPE_PROCESS,  	PRO_SHOW_DELEGATE,  	PRO_SHOW_DYNAFORM,  	PRO_CATEGORY,  	PRO_SUB_CATEGORY,  	PRO_INDUSTRY,  	PRO_UPDATE_DATE,  	PRO_CREATE_DATE,  	PRO_CREATE_USER,  	PRO_HEIGHT,  	PRO_WIDTH,  	PRO_TITLE_X,  	PRO_TITLE_Y,  	PRO_DEBUG,  	PRO_DYNAFORMS,  	PRO_DERIVATION_SCREEN_TPL,  	PRO_COST,  	PRO_UNIT_COST,  	PRO_ITEE,  	PRO_ACTION_DONE,  	PRO_ID,  	PRO_TRI_CREATE";
$proto0["m_strFrom"] = "FROM PROCESS";
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
	"m_strName" => "PRO_UID",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto6["m_sql"] = "PRO_UID";
$proto6["m_srcTableName"] = "PROCESS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TITLE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto8["m_sql"] = "PRO_TITLE";
$proto8["m_srcTableName"] = "PROCESS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_DESCRIPTION",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto10["m_sql"] = "PRO_DESCRIPTION";
$proto10["m_srcTableName"] = "PROCESS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_PARENT",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto12["m_sql"] = "PRO_PARENT";
$proto12["m_srcTableName"] = "PROCESS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TIME",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto14["m_sql"] = "PRO_TIME";
$proto14["m_srcTableName"] = "PROCESS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TIMEUNIT",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto16["m_sql"] = "PRO_TIMEUNIT";
$proto16["m_srcTableName"] = "PROCESS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_STATUS",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto18["m_sql"] = "PRO_STATUS";
$proto18["m_srcTableName"] = "PROCESS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TYPE_DAY",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto20["m_sql"] = "PRO_TYPE_DAY";
$proto20["m_srcTableName"] = "PROCESS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TYPE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto22["m_sql"] = "PRO_TYPE";
$proto22["m_srcTableName"] = "PROCESS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ASSIGNMENT",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto24["m_sql"] = "PRO_ASSIGNMENT";
$proto24["m_srcTableName"] = "PROCESS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_SHOW_MAP",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto26["m_sql"] = "PRO_SHOW_MAP";
$proto26["m_srcTableName"] = "PROCESS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_SHOW_MESSAGE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto28["m_sql"] = "PRO_SHOW_MESSAGE";
$proto28["m_srcTableName"] = "PROCESS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_SUBPROCESS",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto30["m_sql"] = "PRO_SUBPROCESS";
$proto30["m_srcTableName"] = "PROCESS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_OPEN",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto32["m_sql"] = "PRO_TRI_OPEN";
$proto32["m_srcTableName"] = "PROCESS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_DELETED",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto34["m_sql"] = "PRO_TRI_DELETED";
$proto34["m_srcTableName"] = "PROCESS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_CANCELED",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto36["m_sql"] = "PRO_TRI_CANCELED";
$proto36["m_srcTableName"] = "PROCESS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_PAUSED",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto38["m_sql"] = "PRO_TRI_PAUSED";
$proto38["m_srcTableName"] = "PROCESS";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_REASSIGNED",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto40["m_sql"] = "PRO_TRI_REASSIGNED";
$proto40["m_srcTableName"] = "PROCESS";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_UNPAUSED",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto42["m_sql"] = "PRO_TRI_UNPAUSED";
$proto42["m_srcTableName"] = "PROCESS";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TYPE_PROCESS",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto44["m_sql"] = "PRO_TYPE_PROCESS";
$proto44["m_srcTableName"] = "PROCESS";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_SHOW_DELEGATE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto46["m_sql"] = "PRO_SHOW_DELEGATE";
$proto46["m_srcTableName"] = "PROCESS";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_SHOW_DYNAFORM",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto48["m_sql"] = "PRO_SHOW_DYNAFORM";
$proto48["m_srcTableName"] = "PROCESS";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_CATEGORY",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto50["m_sql"] = "PRO_CATEGORY";
$proto50["m_srcTableName"] = "PROCESS";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_SUB_CATEGORY",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto52["m_sql"] = "PRO_SUB_CATEGORY";
$proto52["m_srcTableName"] = "PROCESS";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_INDUSTRY",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto54["m_sql"] = "PRO_INDUSTRY";
$proto54["m_srcTableName"] = "PROCESS";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UPDATE_DATE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto56["m_sql"] = "PRO_UPDATE_DATE";
$proto56["m_srcTableName"] = "PROCESS";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_CREATE_DATE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto58["m_sql"] = "PRO_CREATE_DATE";
$proto58["m_srcTableName"] = "PROCESS";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_CREATE_USER",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto60["m_sql"] = "PRO_CREATE_USER";
$proto60["m_srcTableName"] = "PROCESS";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_HEIGHT",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto62["m_sql"] = "PRO_HEIGHT";
$proto62["m_srcTableName"] = "PROCESS";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_WIDTH",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto64["m_sql"] = "PRO_WIDTH";
$proto64["m_srcTableName"] = "PROCESS";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TITLE_X",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto66["m_sql"] = "PRO_TITLE_X";
$proto66["m_srcTableName"] = "PROCESS";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TITLE_Y",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto68["m_sql"] = "PRO_TITLE_Y";
$proto68["m_srcTableName"] = "PROCESS";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_DEBUG",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto70["m_sql"] = "PRO_DEBUG";
$proto70["m_srcTableName"] = "PROCESS";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_DYNAFORMS",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto72["m_sql"] = "PRO_DYNAFORMS";
$proto72["m_srcTableName"] = "PROCESS";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_DERIVATION_SCREEN_TPL",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto74["m_sql"] = "PRO_DERIVATION_SCREEN_TPL";
$proto74["m_srcTableName"] = "PROCESS";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_COST",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto76["m_sql"] = "PRO_COST";
$proto76["m_srcTableName"] = "PROCESS";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UNIT_COST",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto78["m_sql"] = "PRO_UNIT_COST";
$proto78["m_srcTableName"] = "PROCESS";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ITEE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto80["m_sql"] = "PRO_ITEE";
$proto80["m_srcTableName"] = "PROCESS";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ACTION_DONE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto82["m_sql"] = "PRO_ACTION_DONE";
$proto82["m_srcTableName"] = "PROCESS";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_ID",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto84["m_sql"] = "PRO_ID";
$proto84["m_srcTableName"] = "PROCESS";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_TRI_CREATE",
	"m_strTable" => "PROCESS",
	"m_srcTableName" => "PROCESS"
));

$proto86["m_sql"] = "PRO_TRI_CREATE";
$proto86["m_srcTableName"] = "PROCESS";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "PROCESS";
$proto89["m_srcTableName"] = "PROCESS";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "PRO_UID";
$proto89["m_columns"][] = "PRO_TITLE";
$proto89["m_columns"][] = "PRO_DESCRIPTION";
$proto89["m_columns"][] = "PRO_PARENT";
$proto89["m_columns"][] = "PRO_TIME";
$proto89["m_columns"][] = "PRO_TIMEUNIT";
$proto89["m_columns"][] = "PRO_STATUS";
$proto89["m_columns"][] = "PRO_TYPE_DAY";
$proto89["m_columns"][] = "PRO_TYPE";
$proto89["m_columns"][] = "PRO_ASSIGNMENT";
$proto89["m_columns"][] = "PRO_SHOW_MAP";
$proto89["m_columns"][] = "PRO_SHOW_MESSAGE";
$proto89["m_columns"][] = "PRO_SUBPROCESS";
$proto89["m_columns"][] = "PRO_TRI_OPEN";
$proto89["m_columns"][] = "PRO_TRI_DELETED";
$proto89["m_columns"][] = "PRO_TRI_CANCELED";
$proto89["m_columns"][] = "PRO_TRI_PAUSED";
$proto89["m_columns"][] = "PRO_TRI_REASSIGNED";
$proto89["m_columns"][] = "PRO_TRI_UNPAUSED";
$proto89["m_columns"][] = "PRO_TYPE_PROCESS";
$proto89["m_columns"][] = "PRO_SHOW_DELEGATE";
$proto89["m_columns"][] = "PRO_SHOW_DYNAFORM";
$proto89["m_columns"][] = "PRO_CATEGORY";
$proto89["m_columns"][] = "PRO_SUB_CATEGORY";
$proto89["m_columns"][] = "PRO_INDUSTRY";
$proto89["m_columns"][] = "PRO_UPDATE_DATE";
$proto89["m_columns"][] = "PRO_CREATE_DATE";
$proto89["m_columns"][] = "PRO_CREATE_USER";
$proto89["m_columns"][] = "PRO_HEIGHT";
$proto89["m_columns"][] = "PRO_WIDTH";
$proto89["m_columns"][] = "PRO_TITLE_X";
$proto89["m_columns"][] = "PRO_TITLE_Y";
$proto89["m_columns"][] = "PRO_DEBUG";
$proto89["m_columns"][] = "PRO_DYNAFORMS";
$proto89["m_columns"][] = "PRO_DERIVATION_SCREEN_TPL";
$proto89["m_columns"][] = "PRO_COST";
$proto89["m_columns"][] = "PRO_UNIT_COST";
$proto89["m_columns"][] = "PRO_ITEE";
$proto89["m_columns"][] = "PRO_ACTION_DONE";
$proto89["m_columns"][] = "PRO_ID";
$proto89["m_columns"][] = "PRO_TRI_CREATE";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "PROCESS";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "PROCESS";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PROCESS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PROCESS = createSqlQuery_PROCESS();


	
						;

																																									

$tdataPROCESS[".sqlquery"] = $queryData_PROCESS;

$tableEvents["PROCESS"] = new eventsBase;
$tdataPROCESS[".hasEvents"] = false;

?>
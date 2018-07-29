<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_MESSAGE = array();
	$tdataAPP_MESSAGE[".truncateText"] = true;
	$tdataAPP_MESSAGE[".NumberOfChars"] = 20;
	$tdataAPP_MESSAGE[".ShortName"] = "APP_MESSAGE";
	$tdataAPP_MESSAGE[".OwnerID"] = "";
	$tdataAPP_MESSAGE[".OriginalTable"] = "APP_MESSAGE";

//	field labels
$fieldLabelsAPP_MESSAGE = array();
$fieldToolTipsAPP_MESSAGE = array();
$pageTitlesAPP_MESSAGE = array();
$placeHoldersAPP_MESSAGE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_MESSAGE["Japanese"] = array();
	$fieldToolTipsAPP_MESSAGE["Japanese"] = array();
	$placeHoldersAPP_MESSAGE["Japanese"] = array();
	$pageTitlesAPP_MESSAGE["Japanese"] = array();
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_UID"] = "アプリのMSGのUID";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_UID"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_UID"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["MSG_UID"] = "MSGのUID";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["MSG_UID"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["MSG_UID"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_TYPE"] = "アプリのMSGタイプ";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_TYPE"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_TYPE"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_SUBJECT"] = "アプリのMSGの件名";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_SUBJECT"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_SUBJECT"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_FROM"] = "からのアプリのMSG";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_FROM"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_FROM"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_TO"] = "へのアプリのMSG";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_TO"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_TO"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_BODY"] = "アプリのMSG本体";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_BODY"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_BODY"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_DATE"] = "アプリのMSG日";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_DATE"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_DATE"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_CC"] = "アプリのMSGのCC";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_CC"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_CC"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_BCC"] = "アプリMSG BCC";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_BCC"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_BCC"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_TEMPLATE"] = "アプリのMSGテンプレート";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_TEMPLATE"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_TEMPLATE"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_STATUS"] = "アプリのMSGのステータス";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_STATUS"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_STATUS"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_ATTACH"] = "MSGは添付アプリ";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_ATTACH"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_ATTACH"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_SEND_DATE"] = "アプリMSGの送信日";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_SEND_DATE"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_SEND_DATE"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_SHOW_MESSAGE"] = "アプリMSGショーのメッセージ";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_SHOW_MESSAGE"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_SHOW_MESSAGE"] = "";
	$fieldLabelsAPP_MESSAGE["Japanese"]["APP_MSG_ERROR"] = "アプリのMSGエラー";
	$fieldToolTipsAPP_MESSAGE["Japanese"]["APP_MSG_ERROR"] = "";
	$placeHoldersAPP_MESSAGE["Japanese"]["APP_MSG_ERROR"] = "";
	if (count($fieldToolTipsAPP_MESSAGE["Japanese"]))
		$tdataAPP_MESSAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAPP_MESSAGE["English"] = array();
	$fieldToolTipsAPP_MESSAGE["English"] = array();
	$placeHoldersAPP_MESSAGE["English"] = array();
	$pageTitlesAPP_MESSAGE["English"] = array();
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_UID"] = "アプリのMSGのUID";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_UID"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_UID"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["MSG_UID"] = "MSGのUID";
	$fieldToolTipsAPP_MESSAGE["English"]["MSG_UID"] = "";
	$placeHoldersAPP_MESSAGE["English"]["MSG_UID"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_UID"] = "アプリのUID";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_UID"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_UID"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["DEL_INDEX"] = "デル・インデックス";
	$fieldToolTipsAPP_MESSAGE["English"]["DEL_INDEX"] = "";
	$placeHoldersAPP_MESSAGE["English"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_TYPE"] = "アプリのMSGタイプ";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_TYPE"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_TYPE"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_SUBJECT"] = "アプリのMSGの件名";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_SUBJECT"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_SUBJECT"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_FROM"] = "からのアプリのMSG";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_FROM"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_FROM"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_TO"] = "へのアプリのMSG";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_TO"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_TO"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_BODY"] = "アプリのMSG本体";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_BODY"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_BODY"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_DATE"] = "アプリのMSG日";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_DATE"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_DATE"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_CC"] = "アプリのMSGのCC";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_CC"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_CC"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_BCC"] = "アプリMSG BCC";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_BCC"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_BCC"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_TEMPLATE"] = "アプリのMSGテンプレート";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_TEMPLATE"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_TEMPLATE"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_STATUS"] = "アプリのMSGのステータス";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_STATUS"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_STATUS"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_ATTACH"] = "MSGは添付アプリ";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_ATTACH"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_ATTACH"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_SEND_DATE"] = "アプリMSGの送信日";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_SEND_DATE"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_SEND_DATE"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_SHOW_MESSAGE"] = "アプリMSGショーのメッセージ";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_SHOW_MESSAGE"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_SHOW_MESSAGE"] = "";
	$fieldLabelsAPP_MESSAGE["English"]["APP_MSG_ERROR"] = "アプリのMSGエラー";
	$fieldToolTipsAPP_MESSAGE["English"]["APP_MSG_ERROR"] = "";
	$placeHoldersAPP_MESSAGE["English"]["APP_MSG_ERROR"] = "";
	if (count($fieldToolTipsAPP_MESSAGE["English"]))
		$tdataAPP_MESSAGE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_MESSAGE[""] = array();
	$fieldToolTipsAPP_MESSAGE[""] = array();
	$placeHoldersAPP_MESSAGE[""] = array();
	$pageTitlesAPP_MESSAGE[""] = array();
	if (count($fieldToolTipsAPP_MESSAGE[""]))
		$tdataAPP_MESSAGE[".isUseToolTips"] = true;
}


	$tdataAPP_MESSAGE[".NCSearch"] = true;



$tdataAPP_MESSAGE[".shortTableName"] = "APP_MESSAGE";
$tdataAPP_MESSAGE[".nSecOptions"] = 0;
$tdataAPP_MESSAGE[".recsPerRowPrint"] = 1;
$tdataAPP_MESSAGE[".mainTableOwnerID"] = "";
$tdataAPP_MESSAGE[".moveNext"] = 0;
$tdataAPP_MESSAGE[".entityType"] = 0;

$tdataAPP_MESSAGE[".strOriginalTableName"] = "APP_MESSAGE";

	



$tdataAPP_MESSAGE[".showAddInPopup"] = false;

$tdataAPP_MESSAGE[".showEditInPopup"] = false;

$tdataAPP_MESSAGE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_MESSAGE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_MESSAGE[".fieldsForRegister"] = array();
	
$tdataAPP_MESSAGE[".listAjax"] = false;

	$tdataAPP_MESSAGE[".audit"] = true;

	$tdataAPP_MESSAGE[".locking"] = false;

$tdataAPP_MESSAGE[".edit"] = true;
$tdataAPP_MESSAGE[".afterEditAction"] = 1;
$tdataAPP_MESSAGE[".closePopupAfterEdit"] = 1;
$tdataAPP_MESSAGE[".afterEditActionDetTable"] = "";

$tdataAPP_MESSAGE[".add"] = true;
$tdataAPP_MESSAGE[".afterAddAction"] = 1;
$tdataAPP_MESSAGE[".closePopupAfterAdd"] = 1;
$tdataAPP_MESSAGE[".afterAddActionDetTable"] = "";

$tdataAPP_MESSAGE[".list"] = true;

$tdataAPP_MESSAGE[".inlineEdit"] = true;


$tdataAPP_MESSAGE[".reorderRecordsByHeader"] = true;
$tdataAPP_MESSAGE[".createSortByDropdown"] = true;
$tdataAPP_MESSAGE[".strSortControlSettingsJSON"] = "";



$tdataAPP_MESSAGE[".inlineAdd"] = true;
$tdataAPP_MESSAGE[".view"] = true;

$tdataAPP_MESSAGE[".import"] = true;

$tdataAPP_MESSAGE[".exportTo"] = true;

$tdataAPP_MESSAGE[".printFriendly"] = true;

$tdataAPP_MESSAGE[".delete"] = true;

$tdataAPP_MESSAGE[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataAPP_MESSAGE[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataAPP_MESSAGE[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataAPP_MESSAGE[".searchSaving"] = false;
//

$tdataAPP_MESSAGE[".showSearchPanel"] = true;
		$tdataAPP_MESSAGE[".flexibleSearch"] = true;

$tdataAPP_MESSAGE[".isUseAjaxSuggest"] = true;

$tdataAPP_MESSAGE[".rowHighlite"] = true;



																

$tdataAPP_MESSAGE[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_MESSAGE[".buttonsAdded"] = false;

$tdataAPP_MESSAGE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_MESSAGE[".isUseTimeForSearch"] = false;



$tdataAPP_MESSAGE[".badgeColor"] = "7b68ee";


$tdataAPP_MESSAGE[".allSearchFields"] = array();
$tdataAPP_MESSAGE[".filterFields"] = array();
$tdataAPP_MESSAGE[".requiredSearchFields"] = array();

$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_UID";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "MSG_UID";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_UID";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_TYPE";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_SUBJECT";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_FROM";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_TO";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_BODY";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_DATE";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_CC";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_BCC";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_TEMPLATE";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_STATUS";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_ATTACH";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_SEND_DATE";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_SHOW_MESSAGE";
	$tdataAPP_MESSAGE[".allSearchFields"][] = "APP_MSG_ERROR";
	

$tdataAPP_MESSAGE[".googleLikeFields"] = array();
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".googleLikeFields"][] = "APP_MSG_ERROR";


$tdataAPP_MESSAGE[".advSearchFields"] = array();
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".advSearchFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".advSearchFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".tableType"] = "list";

$tdataAPP_MESSAGE[".printerPageOrientation"] = 0;
$tdataAPP_MESSAGE[".nPrinterPageScale"] = 100;

$tdataAPP_MESSAGE[".nPrinterSplitRecords"] = 40;

$tdataAPP_MESSAGE[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_MESSAGE[".geocodingEnabled"] = false;





$tdataAPP_MESSAGE[".listGridLayout"] = 3;


$tdataAPP_MESSAGE[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataAPP_MESSAGE[".pageSize"] = 20;

$tdataAPP_MESSAGE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_MESSAGE[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_MESSAGE[".orderindexes"] = array();

$tdataAPP_MESSAGE[".sqlHead"] = "SELECT APP_MSG_UID,  	MSG_UID,  	APP_UID,  	DEL_INDEX,  	APP_MSG_TYPE,  	APP_MSG_SUBJECT,  	APP_MSG_FROM,  	APP_MSG_TO,  	APP_MSG_BODY,  	APP_MSG_DATE,  	APP_MSG_CC,  	APP_MSG_BCC,  	APP_MSG_TEMPLATE,  	APP_MSG_STATUS,  	APP_MSG_ATTACH,  	APP_MSG_SEND_DATE,  	APP_MSG_SHOW_MESSAGE,  	APP_MSG_ERROR";
$tdataAPP_MESSAGE[".sqlFrom"] = "FROM APP_MESSAGE";
$tdataAPP_MESSAGE[".sqlWhereExpr"] = "";
$tdataAPP_MESSAGE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_MESSAGE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_MESSAGE[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_MESSAGE[".highlightSearchResults"] = true;

$tableKeysAPP_MESSAGE = array();
$tableKeysAPP_MESSAGE[] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".Keys"] = $tableKeysAPP_MESSAGE;

$tdataAPP_MESSAGE[".listFields"] = array();
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".listFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".listFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".listFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".listFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".hideMobileList"] = array();


$tdataAPP_MESSAGE[".viewFields"] = array();
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".viewFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".viewFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".viewFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".addFields"] = array();
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".addFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".addFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".addFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".addFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".masterListFields"] = array();
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".masterListFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".masterListFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".inlineAddFields"] = array();
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".inlineAddFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".editFields"] = array();
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".editFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".editFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".editFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".editFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".inlineEditFields"] = array();
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".inlineEditFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".updateSelectedFields"] = array();
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".updateSelectedFields"][] = "APP_MSG_ERROR";


$tdataAPP_MESSAGE[".exportFields"] = array();
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".exportFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".exportFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".exportFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".importFields"] = array();
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".importFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".importFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".importFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".importFields"][] = "APP_MSG_ERROR";

$tdataAPP_MESSAGE[".printFields"] = array();
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_UID";
$tdataAPP_MESSAGE[".printFields"][] = "MSG_UID";
$tdataAPP_MESSAGE[".printFields"][] = "APP_UID";
$tdataAPP_MESSAGE[".printFields"][] = "DEL_INDEX";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_TYPE";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_SUBJECT";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_FROM";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_TO";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_BODY";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_DATE";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_CC";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_BCC";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_TEMPLATE";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_STATUS";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_ATTACH";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_SEND_DATE";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_SHOW_MESSAGE";
$tdataAPP_MESSAGE[".printFields"][] = "APP_MSG_ERROR";

//	APP_MSG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_MSG_UID";
	$fdata["GoodName"] = "APP_MSG_UID";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_UID");
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

		$fdata["strField"] = "APP_MSG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_UID";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_UID"] = $fdata;
//	MSG_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MSG_UID";
	$fdata["GoodName"] = "MSG_UID";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","MSG_UID");
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

		$fdata["strField"] = "MSG_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSG_UID";

	
	
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




	$tdataAPP_MESSAGE["MSG_UID"] = $fdata;
//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_UID");
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




	$tdataAPP_MESSAGE["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","DEL_INDEX");
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

		$fdata["strField"] = "DEL_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INDEX";

	
	
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




	$tdataAPP_MESSAGE["DEL_INDEX"] = $fdata;
//	APP_MSG_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_MSG_TYPE";
	$fdata["GoodName"] = "APP_MSG_TYPE";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_TYPE");
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

		$fdata["strField"] = "APP_MSG_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_TYPE";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_TYPE"] = $fdata;
//	APP_MSG_SUBJECT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_MSG_SUBJECT";
	$fdata["GoodName"] = "APP_MSG_SUBJECT";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_SUBJECT");
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

		$fdata["strField"] = "APP_MSG_SUBJECT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_SUBJECT";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdataAPP_MESSAGE["APP_MSG_SUBJECT"] = $fdata;
//	APP_MSG_FROM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_MSG_FROM";
	$fdata["GoodName"] = "APP_MSG_FROM";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_FROM");
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

		$fdata["strField"] = "APP_MSG_FROM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_FROM";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_FROM"] = $fdata;
//	APP_MSG_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "APP_MSG_TO";
	$fdata["GoodName"] = "APP_MSG_TO";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_TO");
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

		$fdata["strField"] = "APP_MSG_TO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_TO";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_TO"] = $fdata;
//	APP_MSG_BODY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "APP_MSG_BODY";
	$fdata["GoodName"] = "APP_MSG_BODY";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_BODY");
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

		$fdata["strField"] = "APP_MSG_BODY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_BODY";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_BODY"] = $fdata;
//	APP_MSG_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "APP_MSG_DATE";
	$fdata["GoodName"] = "APP_MSG_DATE";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_DATE");
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

		$fdata["strField"] = "APP_MSG_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_DATE";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_DATE"] = $fdata;
//	APP_MSG_CC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APP_MSG_CC";
	$fdata["GoodName"] = "APP_MSG_CC";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_CC");
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

		$fdata["strField"] = "APP_MSG_CC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_CC";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_CC"] = $fdata;
//	APP_MSG_BCC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "APP_MSG_BCC";
	$fdata["GoodName"] = "APP_MSG_BCC";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_BCC");
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

		$fdata["strField"] = "APP_MSG_BCC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_BCC";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_BCC"] = $fdata;
//	APP_MSG_TEMPLATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "APP_MSG_TEMPLATE";
	$fdata["GoodName"] = "APP_MSG_TEMPLATE";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_TEMPLATE");
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

		$fdata["strField"] = "APP_MSG_TEMPLATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_TEMPLATE";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_TEMPLATE"] = $fdata;
//	APP_MSG_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "APP_MSG_STATUS";
	$fdata["GoodName"] = "APP_MSG_STATUS";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_STATUS");
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

		$fdata["strField"] = "APP_MSG_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_STATUS";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_STATUS"] = $fdata;
//	APP_MSG_ATTACH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "APP_MSG_ATTACH";
	$fdata["GoodName"] = "APP_MSG_ATTACH";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_ATTACH");
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

		$fdata["strField"] = "APP_MSG_ATTACH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_ATTACH";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_ATTACH"] = $fdata;
//	APP_MSG_SEND_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "APP_MSG_SEND_DATE";
	$fdata["GoodName"] = "APP_MSG_SEND_DATE";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_SEND_DATE");
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

		$fdata["strField"] = "APP_MSG_SEND_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_SEND_DATE";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_SEND_DATE"] = $fdata;
//	APP_MSG_SHOW_MESSAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "APP_MSG_SHOW_MESSAGE";
	$fdata["GoodName"] = "APP_MSG_SHOW_MESSAGE";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_SHOW_MESSAGE");
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

		$fdata["strField"] = "APP_MSG_SHOW_MESSAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_SHOW_MESSAGE";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_SHOW_MESSAGE"] = $fdata;
//	APP_MSG_ERROR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_MSG_ERROR";
	$fdata["GoodName"] = "APP_MSG_ERROR";
	$fdata["ownerTable"] = "APP_MESSAGE";
	$fdata["Label"] = GetFieldLabel("APP_MESSAGE","APP_MSG_ERROR");
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

		$fdata["strField"] = "APP_MSG_ERROR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_MSG_ERROR";

	
	
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




	$tdataAPP_MESSAGE["APP_MSG_ERROR"] = $fdata;


$tables_data["APP_MESSAGE"]=&$tdataAPP_MESSAGE;
$field_labels["APP_MESSAGE"] = &$fieldLabelsAPP_MESSAGE;
$fieldToolTips["APP_MESSAGE"] = &$fieldToolTipsAPP_MESSAGE;
$placeHolders["APP_MESSAGE"] = &$placeHoldersAPP_MESSAGE;
$page_titles["APP_MESSAGE"] = &$pageTitlesAPP_MESSAGE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_MESSAGE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_MESSAGE"] = array();


	
				$strOriginalDetailsTable="APPLICATION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="APPLICATION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "APPLICATION";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["APP_MESSAGE"][0] = $masterParams;
				$masterTablesData["APP_MESSAGE"][0]["masterKeys"] = array();
	$masterTablesData["APP_MESSAGE"][0]["masterKeys"][]="APP_UID";
				$masterTablesData["APP_MESSAGE"][0]["detailKeys"] = array();
	$masterTablesData["APP_MESSAGE"][0]["detailKeys"][]="APP_UID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_MESSAGE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_MSG_UID,  	MSG_UID,  	APP_UID,  	DEL_INDEX,  	APP_MSG_TYPE,  	APP_MSG_SUBJECT,  	APP_MSG_FROM,  	APP_MSG_TO,  	APP_MSG_BODY,  	APP_MSG_DATE,  	APP_MSG_CC,  	APP_MSG_BCC,  	APP_MSG_TEMPLATE,  	APP_MSG_STATUS,  	APP_MSG_ATTACH,  	APP_MSG_SEND_DATE,  	APP_MSG_SHOW_MESSAGE,  	APP_MSG_ERROR";
$proto0["m_strFrom"] = "FROM APP_MESSAGE";
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
	"m_strName" => "APP_MSG_UID",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto6["m_sql"] = "APP_MSG_UID";
$proto6["m_srcTableName"] = "APP_MESSAGE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MSG_UID",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto8["m_sql"] = "MSG_UID";
$proto8["m_srcTableName"] = "APP_MESSAGE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto10["m_sql"] = "APP_UID";
$proto10["m_srcTableName"] = "APP_MESSAGE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto12["m_sql"] = "DEL_INDEX";
$proto12["m_srcTableName"] = "APP_MESSAGE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_TYPE",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto14["m_sql"] = "APP_MSG_TYPE";
$proto14["m_srcTableName"] = "APP_MESSAGE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_SUBJECT",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto16["m_sql"] = "APP_MSG_SUBJECT";
$proto16["m_srcTableName"] = "APP_MESSAGE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_FROM",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto18["m_sql"] = "APP_MSG_FROM";
$proto18["m_srcTableName"] = "APP_MESSAGE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_TO",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto20["m_sql"] = "APP_MSG_TO";
$proto20["m_srcTableName"] = "APP_MESSAGE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_BODY",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto22["m_sql"] = "APP_MSG_BODY";
$proto22["m_srcTableName"] = "APP_MESSAGE";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_DATE",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto24["m_sql"] = "APP_MSG_DATE";
$proto24["m_srcTableName"] = "APP_MESSAGE";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_CC",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto26["m_sql"] = "APP_MSG_CC";
$proto26["m_srcTableName"] = "APP_MESSAGE";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_BCC",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto28["m_sql"] = "APP_MSG_BCC";
$proto28["m_srcTableName"] = "APP_MESSAGE";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_TEMPLATE",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto30["m_sql"] = "APP_MSG_TEMPLATE";
$proto30["m_srcTableName"] = "APP_MESSAGE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_STATUS",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto32["m_sql"] = "APP_MSG_STATUS";
$proto32["m_srcTableName"] = "APP_MESSAGE";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_ATTACH",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto34["m_sql"] = "APP_MSG_ATTACH";
$proto34["m_srcTableName"] = "APP_MESSAGE";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_SEND_DATE",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto36["m_sql"] = "APP_MSG_SEND_DATE";
$proto36["m_srcTableName"] = "APP_MESSAGE";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_SHOW_MESSAGE",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto38["m_sql"] = "APP_MSG_SHOW_MESSAGE";
$proto38["m_srcTableName"] = "APP_MESSAGE";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_MSG_ERROR",
	"m_strTable" => "APP_MESSAGE",
	"m_srcTableName" => "APP_MESSAGE"
));

$proto40["m_sql"] = "APP_MSG_ERROR";
$proto40["m_srcTableName"] = "APP_MESSAGE";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "APP_MESSAGE";
$proto43["m_srcTableName"] = "APP_MESSAGE";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "APP_MSG_UID";
$proto43["m_columns"][] = "MSG_UID";
$proto43["m_columns"][] = "APP_UID";
$proto43["m_columns"][] = "DEL_INDEX";
$proto43["m_columns"][] = "APP_MSG_TYPE";
$proto43["m_columns"][] = "APP_MSG_SUBJECT";
$proto43["m_columns"][] = "APP_MSG_FROM";
$proto43["m_columns"][] = "APP_MSG_TO";
$proto43["m_columns"][] = "APP_MSG_BODY";
$proto43["m_columns"][] = "APP_MSG_DATE";
$proto43["m_columns"][] = "APP_MSG_CC";
$proto43["m_columns"][] = "APP_MSG_BCC";
$proto43["m_columns"][] = "APP_MSG_TEMPLATE";
$proto43["m_columns"][] = "APP_MSG_STATUS";
$proto43["m_columns"][] = "APP_MSG_ATTACH";
$proto43["m_columns"][] = "APP_MSG_SEND_DATE";
$proto43["m_columns"][] = "APP_MSG_SHOW_MESSAGE";
$proto43["m_columns"][] = "APP_MSG_ERROR";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "APP_MESSAGE";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "APP_MESSAGE";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_MESSAGE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_MESSAGE = createSqlQuery_APP_MESSAGE();


	
						;

																		

$tdataAPP_MESSAGE[".sqlquery"] = $queryData_APP_MESSAGE;

$tableEvents["APP_MESSAGE"] = new eventsBase;
$tdataAPP_MESSAGE[".hasEvents"] = false;

?>
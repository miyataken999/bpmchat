<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRBAC_USERS = array();
	$tdataRBAC_USERS[".truncateText"] = true;
	$tdataRBAC_USERS[".NumberOfChars"] = 20;
	$tdataRBAC_USERS[".ShortName"] = "RBAC_USERS";
	$tdataRBAC_USERS[".OwnerID"] = "";
	$tdataRBAC_USERS[".OriginalTable"] = "RBAC_USERS";

//	field labels
$fieldLabelsRBAC_USERS = array();
$fieldToolTipsRBAC_USERS = array();
$pageTitlesRBAC_USERS = array();
$placeHoldersRBAC_USERS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsRBAC_USERS["Japanese"] = array();
	$fieldToolTipsRBAC_USERS["Japanese"] = array();
	$placeHoldersRBAC_USERS["Japanese"] = array();
	$pageTitlesRBAC_USERS["Japanese"] = array();
	$fieldLabelsRBAC_USERS["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_UID"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_UID"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_USERNAME"] = "USRユーザ名";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_USERNAME"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_USERNAME"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_PASSWORD"] = "USRパスワード";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_PASSWORD"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_PASSWORD"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_FIRSTNAME"] = "USR FIRSTNAME";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_FIRSTNAME"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_FIRSTNAME"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_LASTNAME"] = "USR姓";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_LASTNAME"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_LASTNAME"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_EMAIL"] = "USRメール";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_EMAIL"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_EMAIL"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_DUE_DATE"] = "USR期日";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_DUE_DATE"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_DUE_DATE"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_CREATE_DATE"] = "USR日付を作成します";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_CREATE_DATE"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_CREATE_DATE"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_UPDATE_DATE"] = "USR更新日";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_UPDATE_DATE"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_STATUS"] = "USR状況";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_STATUS"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_STATUS"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_AUTH_TYPE"] = "USR認証タイプ";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_AUTH_TYPE"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_AUTH_TYPE"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["UID_AUTH_SOURCE"] = "UID認証ソース";
	$fieldToolTipsRBAC_USERS["Japanese"]["UID_AUTH_SOURCE"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["UID_AUTH_SOURCE"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_AUTH_USER_DN"] = "USR認証ユーザーDN";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_AUTH_USER_DN"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_AUTH_USER_DN"] = "";
	$fieldLabelsRBAC_USERS["Japanese"]["USR_AUTH_SUPERVISOR_DN"] = "USR認証スーパーバイザDN";
	$fieldToolTipsRBAC_USERS["Japanese"]["USR_AUTH_SUPERVISOR_DN"] = "";
	$placeHoldersRBAC_USERS["Japanese"]["USR_AUTH_SUPERVISOR_DN"] = "";
	if (count($fieldToolTipsRBAC_USERS["Japanese"]))
		$tdataRBAC_USERS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRBAC_USERS["English"] = array();
	$fieldToolTipsRBAC_USERS["English"] = array();
	$placeHoldersRBAC_USERS["English"] = array();
	$pageTitlesRBAC_USERS["English"] = array();
	$fieldLabelsRBAC_USERS["English"]["USR_UID"] = "USR UID";
	$fieldToolTipsRBAC_USERS["English"]["USR_UID"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_UID"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_USERNAME"] = "USRユーザ名";
	$fieldToolTipsRBAC_USERS["English"]["USR_USERNAME"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_USERNAME"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_PASSWORD"] = "USRパスワード";
	$fieldToolTipsRBAC_USERS["English"]["USR_PASSWORD"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_PASSWORD"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_FIRSTNAME"] = "USR FIRSTNAME";
	$fieldToolTipsRBAC_USERS["English"]["USR_FIRSTNAME"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_FIRSTNAME"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_LASTNAME"] = "USR姓";
	$fieldToolTipsRBAC_USERS["English"]["USR_LASTNAME"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_LASTNAME"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_EMAIL"] = "USRメール";
	$fieldToolTipsRBAC_USERS["English"]["USR_EMAIL"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_EMAIL"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_DUE_DATE"] = "USR期日";
	$fieldToolTipsRBAC_USERS["English"]["USR_DUE_DATE"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_DUE_DATE"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_CREATE_DATE"] = "USR日付を作成します";
	$fieldToolTipsRBAC_USERS["English"]["USR_CREATE_DATE"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_CREATE_DATE"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_UPDATE_DATE"] = "USR更新日";
	$fieldToolTipsRBAC_USERS["English"]["USR_UPDATE_DATE"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_UPDATE_DATE"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_STATUS"] = "USR状況";
	$fieldToolTipsRBAC_USERS["English"]["USR_STATUS"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_STATUS"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_AUTH_TYPE"] = "USR認証タイプ";
	$fieldToolTipsRBAC_USERS["English"]["USR_AUTH_TYPE"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_AUTH_TYPE"] = "";
	$fieldLabelsRBAC_USERS["English"]["UID_AUTH_SOURCE"] = "UID認証ソース";
	$fieldToolTipsRBAC_USERS["English"]["UID_AUTH_SOURCE"] = "";
	$placeHoldersRBAC_USERS["English"]["UID_AUTH_SOURCE"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_AUTH_USER_DN"] = "USR認証ユーザーDN";
	$fieldToolTipsRBAC_USERS["English"]["USR_AUTH_USER_DN"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_AUTH_USER_DN"] = "";
	$fieldLabelsRBAC_USERS["English"]["USR_AUTH_SUPERVISOR_DN"] = "USR認証スーパーバイザDN";
	$fieldToolTipsRBAC_USERS["English"]["USR_AUTH_SUPERVISOR_DN"] = "";
	$placeHoldersRBAC_USERS["English"]["USR_AUTH_SUPERVISOR_DN"] = "";
	if (count($fieldToolTipsRBAC_USERS["English"]))
		$tdataRBAC_USERS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRBAC_USERS[""] = array();
	$fieldToolTipsRBAC_USERS[""] = array();
	$placeHoldersRBAC_USERS[""] = array();
	$pageTitlesRBAC_USERS[""] = array();
	if (count($fieldToolTipsRBAC_USERS[""]))
		$tdataRBAC_USERS[".isUseToolTips"] = true;
}


	$tdataRBAC_USERS[".NCSearch"] = true;



$tdataRBAC_USERS[".shortTableName"] = "RBAC_USERS";
$tdataRBAC_USERS[".nSecOptions"] = 0;
$tdataRBAC_USERS[".recsPerRowPrint"] = 1;
$tdataRBAC_USERS[".mainTableOwnerID"] = "";
$tdataRBAC_USERS[".moveNext"] = 0;
$tdataRBAC_USERS[".entityType"] = 0;

$tdataRBAC_USERS[".strOriginalTableName"] = "RBAC_USERS";

	



$tdataRBAC_USERS[".showAddInPopup"] = false;

$tdataRBAC_USERS[".showEditInPopup"] = false;

$tdataRBAC_USERS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRBAC_USERS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRBAC_USERS[".fieldsForRegister"] = array();
	
$tdataRBAC_USERS[".listAjax"] = false;

	$tdataRBAC_USERS[".audit"] = true;

	$tdataRBAC_USERS[".locking"] = false;

$tdataRBAC_USERS[".edit"] = true;
$tdataRBAC_USERS[".afterEditAction"] = 1;
$tdataRBAC_USERS[".closePopupAfterEdit"] = 1;
$tdataRBAC_USERS[".afterEditActionDetTable"] = "";

$tdataRBAC_USERS[".add"] = true;
$tdataRBAC_USERS[".afterAddAction"] = 1;
$tdataRBAC_USERS[".closePopupAfterAdd"] = 1;
$tdataRBAC_USERS[".afterAddActionDetTable"] = "";

$tdataRBAC_USERS[".list"] = true;

$tdataRBAC_USERS[".inlineEdit"] = true;


$tdataRBAC_USERS[".reorderRecordsByHeader"] = true;
$tdataRBAC_USERS[".createSortByDropdown"] = true;
$tdataRBAC_USERS[".strSortControlSettingsJSON"] = "";



$tdataRBAC_USERS[".inlineAdd"] = true;
$tdataRBAC_USERS[".view"] = true;

$tdataRBAC_USERS[".import"] = true;

$tdataRBAC_USERS[".exportTo"] = true;

$tdataRBAC_USERS[".printFriendly"] = true;

$tdataRBAC_USERS[".delete"] = true;

$tdataRBAC_USERS[".showSimpleSearchOptions"] = true;

// Allow Show/Hide Fields in GRID
$tdataRBAC_USERS[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataRBAC_USERS[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataRBAC_USERS[".searchSaving"] = false;
//

$tdataRBAC_USERS[".showSearchPanel"] = true;
		$tdataRBAC_USERS[".flexibleSearch"] = true;

$tdataRBAC_USERS[".isUseAjaxSuggest"] = true;

$tdataRBAC_USERS[".rowHighlite"] = true;



				

$tdataRBAC_USERS[".ajaxCodeSnippetAdded"] = false;

$tdataRBAC_USERS[".buttonsAdded"] = false;

$tdataRBAC_USERS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRBAC_USERS[".isUseTimeForSearch"] = false;





$tdataRBAC_USERS[".allSearchFields"] = array();
$tdataRBAC_USERS[".filterFields"] = array();
$tdataRBAC_USERS[".requiredSearchFields"] = array();

$tdataRBAC_USERS[".allSearchFields"][] = "USR_UID";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_USERNAME";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_PASSWORD";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_FIRSTNAME";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_LASTNAME";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_EMAIL";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_DUE_DATE";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_CREATE_DATE";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_UPDATE_DATE";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_STATUS";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_AUTH_TYPE";
	$tdataRBAC_USERS[".allSearchFields"][] = "UID_AUTH_SOURCE";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_AUTH_USER_DN";
	$tdataRBAC_USERS[".allSearchFields"][] = "USR_AUTH_SUPERVISOR_DN";
	

$tdataRBAC_USERS[".googleLikeFields"] = array();
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_UID";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".googleLikeFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".googleLikeFields"][] = "USR_AUTH_SUPERVISOR_DN";


$tdataRBAC_USERS[".advSearchFields"] = array();
$tdataRBAC_USERS[".advSearchFields"][] = "USR_UID";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".advSearchFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".advSearchFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".tableType"] = "list";

$tdataRBAC_USERS[".printerPageOrientation"] = 0;
$tdataRBAC_USERS[".nPrinterPageScale"] = 100;

$tdataRBAC_USERS[".nPrinterSplitRecords"] = 40;

$tdataRBAC_USERS[".nPrinterPDFSplitRecords"] = 40;



$tdataRBAC_USERS[".geocodingEnabled"] = false;





$tdataRBAC_USERS[".listGridLayout"] = 3;


$tdataRBAC_USERS[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataRBAC_USERS[".pageSize"] = 20;

$tdataRBAC_USERS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRBAC_USERS[".strOrderBy"] = $tstrOrderBy;

$tdataRBAC_USERS[".orderindexes"] = array();

$tdataRBAC_USERS[".sqlHead"] = "SELECT USR_UID,  	USR_USERNAME,  	USR_PASSWORD,  	USR_FIRSTNAME,  	USR_LASTNAME,  	USR_EMAIL,  	USR_DUE_DATE,  	USR_CREATE_DATE,  	USR_UPDATE_DATE,  	USR_STATUS,  	USR_AUTH_TYPE,  	UID_AUTH_SOURCE,  	USR_AUTH_USER_DN,  	USR_AUTH_SUPERVISOR_DN";
$tdataRBAC_USERS[".sqlFrom"] = "FROM RBAC_USERS";
$tdataRBAC_USERS[".sqlWhereExpr"] = "";
$tdataRBAC_USERS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRBAC_USERS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRBAC_USERS[".arrGroupsPerPage"] = $arrGPP;

$tdataRBAC_USERS[".highlightSearchResults"] = true;

$tableKeysRBAC_USERS = array();
$tableKeysRBAC_USERS[] = "USR_UID";
$tdataRBAC_USERS[".Keys"] = $tableKeysRBAC_USERS;

$tdataRBAC_USERS[".listFields"] = array();
$tdataRBAC_USERS[".listFields"][] = "USR_UID";
$tdataRBAC_USERS[".listFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".listFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".listFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".listFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".listFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".listFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".listFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".listFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".listFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".listFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".listFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".listFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".listFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".hideMobileList"] = array();


$tdataRBAC_USERS[".viewFields"] = array();
$tdataRBAC_USERS[".viewFields"][] = "USR_UID";
$tdataRBAC_USERS[".viewFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".viewFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".viewFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".viewFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".viewFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".viewFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".viewFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".viewFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".viewFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".viewFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".viewFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".viewFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".viewFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".addFields"] = array();
$tdataRBAC_USERS[".addFields"][] = "USR_UID";
$tdataRBAC_USERS[".addFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".addFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".addFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".addFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".addFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".addFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".addFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".addFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".addFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".addFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".addFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".addFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".addFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".masterListFields"] = array();
$tdataRBAC_USERS[".masterListFields"][] = "USR_UID";
$tdataRBAC_USERS[".masterListFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".masterListFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".masterListFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".masterListFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".masterListFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".masterListFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".masterListFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".masterListFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".masterListFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".masterListFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".masterListFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".masterListFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".masterListFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".inlineAddFields"] = array();
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_UID";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".inlineAddFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".inlineAddFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".editFields"] = array();
$tdataRBAC_USERS[".editFields"][] = "USR_UID";
$tdataRBAC_USERS[".editFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".editFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".editFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".editFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".editFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".editFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".editFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".editFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".editFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".editFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".editFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".editFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".editFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".inlineEditFields"] = array();
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_UID";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".inlineEditFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".inlineEditFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".updateSelectedFields"] = array();
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_UID";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".updateSelectedFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".updateSelectedFields"][] = "USR_AUTH_SUPERVISOR_DN";


$tdataRBAC_USERS[".exportFields"] = array();
$tdataRBAC_USERS[".exportFields"][] = "USR_UID";
$tdataRBAC_USERS[".exportFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".exportFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".exportFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".exportFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".exportFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".exportFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".exportFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".exportFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".exportFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".exportFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".exportFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".exportFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".exportFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".importFields"] = array();
$tdataRBAC_USERS[".importFields"][] = "USR_UID";
$tdataRBAC_USERS[".importFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".importFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".importFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".importFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".importFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".importFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".importFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".importFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".importFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".importFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".importFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".importFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".importFields"][] = "USR_AUTH_SUPERVISOR_DN";

$tdataRBAC_USERS[".printFields"] = array();
$tdataRBAC_USERS[".printFields"][] = "USR_UID";
$tdataRBAC_USERS[".printFields"][] = "USR_USERNAME";
$tdataRBAC_USERS[".printFields"][] = "USR_PASSWORD";
$tdataRBAC_USERS[".printFields"][] = "USR_FIRSTNAME";
$tdataRBAC_USERS[".printFields"][] = "USR_LASTNAME";
$tdataRBAC_USERS[".printFields"][] = "USR_EMAIL";
$tdataRBAC_USERS[".printFields"][] = "USR_DUE_DATE";
$tdataRBAC_USERS[".printFields"][] = "USR_CREATE_DATE";
$tdataRBAC_USERS[".printFields"][] = "USR_UPDATE_DATE";
$tdataRBAC_USERS[".printFields"][] = "USR_STATUS";
$tdataRBAC_USERS[".printFields"][] = "USR_AUTH_TYPE";
$tdataRBAC_USERS[".printFields"][] = "UID_AUTH_SOURCE";
$tdataRBAC_USERS[".printFields"][] = "USR_AUTH_USER_DN";
$tdataRBAC_USERS[".printFields"][] = "USR_AUTH_SUPERVISOR_DN";

//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_UID");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_UID"] = $fdata;
//	USR_USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USR_USERNAME";
	$fdata["GoodName"] = "USR_USERNAME";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_USERNAME");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_USERNAME"] = $fdata;
//	USR_PASSWORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USR_PASSWORD";
	$fdata["GoodName"] = "USR_PASSWORD";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_PASSWORD");
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




	$tdataRBAC_USERS["USR_PASSWORD"] = $fdata;
//	USR_FIRSTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USR_FIRSTNAME";
	$fdata["GoodName"] = "USR_FIRSTNAME";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_FIRSTNAME");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_FIRSTNAME"] = $fdata;
//	USR_LASTNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USR_LASTNAME";
	$fdata["GoodName"] = "USR_LASTNAME";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_LASTNAME");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_LASTNAME"] = $fdata;
//	USR_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_EMAIL";
	$fdata["GoodName"] = "USR_EMAIL";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_EMAIL");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_EMAIL"] = $fdata;
//	USR_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USR_DUE_DATE";
	$fdata["GoodName"] = "USR_DUE_DATE";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_DUE_DATE");
	$fdata["FieldType"] = 7;

	
	
	
			
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataRBAC_USERS["USR_DUE_DATE"] = $fdata;
//	USR_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "USR_CREATE_DATE";
	$fdata["GoodName"] = "USR_CREATE_DATE";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_CREATE_DATE");
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




	$tdataRBAC_USERS["USR_CREATE_DATE"] = $fdata;
//	USR_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "USR_UPDATE_DATE";
	$fdata["GoodName"] = "USR_UPDATE_DATE";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_UPDATE_DATE");
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




	$tdataRBAC_USERS["USR_UPDATE_DATE"] = $fdata;
//	USR_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "USR_STATUS";
	$fdata["GoodName"] = "USR_STATUS";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_STATUS");
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




	$tdataRBAC_USERS["USR_STATUS"] = $fdata;
//	USR_AUTH_TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USR_AUTH_TYPE";
	$fdata["GoodName"] = "USR_AUTH_TYPE";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_AUTH_TYPE");
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

		$fdata["strField"] = "USR_AUTH_TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_AUTH_TYPE";

	
	
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




	$tdataRBAC_USERS["USR_AUTH_TYPE"] = $fdata;
//	UID_AUTH_SOURCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UID_AUTH_SOURCE";
	$fdata["GoodName"] = "UID_AUTH_SOURCE";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","UID_AUTH_SOURCE");
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

		$fdata["strField"] = "UID_AUTH_SOURCE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UID_AUTH_SOURCE";

	
	
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




	$tdataRBAC_USERS["UID_AUTH_SOURCE"] = $fdata;
//	USR_AUTH_USER_DN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "USR_AUTH_USER_DN";
	$fdata["GoodName"] = "USR_AUTH_USER_DN";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_AUTH_USER_DN");
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

		$fdata["strField"] = "USR_AUTH_USER_DN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_AUTH_USER_DN";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_AUTH_USER_DN"] = $fdata;
//	USR_AUTH_SUPERVISOR_DN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "USR_AUTH_SUPERVISOR_DN";
	$fdata["GoodName"] = "USR_AUTH_SUPERVISOR_DN";
	$fdata["ownerTable"] = "RBAC_USERS";
	$fdata["Label"] = GetFieldLabel("RBAC_USERS","USR_AUTH_SUPERVISOR_DN");
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

		$fdata["strField"] = "USR_AUTH_SUPERVISOR_DN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USR_AUTH_SUPERVISOR_DN";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRBAC_USERS["USR_AUTH_SUPERVISOR_DN"] = $fdata;


$tables_data["RBAC_USERS"]=&$tdataRBAC_USERS;
$field_labels["RBAC_USERS"] = &$fieldLabelsRBAC_USERS;
$fieldToolTips["RBAC_USERS"] = &$fieldToolTipsRBAC_USERS;
$placeHolders["RBAC_USERS"] = &$placeHoldersRBAC_USERS;
$page_titles["RBAC_USERS"] = &$pageTitlesRBAC_USERS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RBAC_USERS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["RBAC_USERS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RBAC_USERS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USR_UID,  	USR_USERNAME,  	USR_PASSWORD,  	USR_FIRSTNAME,  	USR_LASTNAME,  	USR_EMAIL,  	USR_DUE_DATE,  	USR_CREATE_DATE,  	USR_UPDATE_DATE,  	USR_STATUS,  	USR_AUTH_TYPE,  	UID_AUTH_SOURCE,  	USR_AUTH_USER_DN,  	USR_AUTH_SUPERVISOR_DN";
$proto0["m_strFrom"] = "FROM RBAC_USERS";
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
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto6["m_sql"] = "USR_UID";
$proto6["m_srcTableName"] = "RBAC_USERS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_USERNAME",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto8["m_sql"] = "USR_USERNAME";
$proto8["m_srcTableName"] = "RBAC_USERS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_PASSWORD",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto10["m_sql"] = "USR_PASSWORD";
$proto10["m_srcTableName"] = "RBAC_USERS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_FIRSTNAME",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto12["m_sql"] = "USR_FIRSTNAME";
$proto12["m_srcTableName"] = "RBAC_USERS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_LASTNAME",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto14["m_sql"] = "USR_LASTNAME";
$proto14["m_srcTableName"] = "RBAC_USERS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_EMAIL",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto16["m_sql"] = "USR_EMAIL";
$proto16["m_srcTableName"] = "RBAC_USERS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_DUE_DATE",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto18["m_sql"] = "USR_DUE_DATE";
$proto18["m_srcTableName"] = "RBAC_USERS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_CREATE_DATE",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto20["m_sql"] = "USR_CREATE_DATE";
$proto20["m_srcTableName"] = "RBAC_USERS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UPDATE_DATE",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto22["m_sql"] = "USR_UPDATE_DATE";
$proto22["m_srcTableName"] = "RBAC_USERS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_STATUS",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto24["m_sql"] = "USR_STATUS";
$proto24["m_srcTableName"] = "RBAC_USERS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_AUTH_TYPE",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto26["m_sql"] = "USR_AUTH_TYPE";
$proto26["m_srcTableName"] = "RBAC_USERS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UID_AUTH_SOURCE",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto28["m_sql"] = "UID_AUTH_SOURCE";
$proto28["m_srcTableName"] = "RBAC_USERS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_AUTH_USER_DN",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto30["m_sql"] = "USR_AUTH_USER_DN";
$proto30["m_srcTableName"] = "RBAC_USERS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_AUTH_SUPERVISOR_DN",
	"m_strTable" => "RBAC_USERS",
	"m_srcTableName" => "RBAC_USERS"
));

$proto32["m_sql"] = "USR_AUTH_SUPERVISOR_DN";
$proto32["m_srcTableName"] = "RBAC_USERS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "RBAC_USERS";
$proto35["m_srcTableName"] = "RBAC_USERS";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "USR_UID";
$proto35["m_columns"][] = "USR_USERNAME";
$proto35["m_columns"][] = "USR_PASSWORD";
$proto35["m_columns"][] = "USR_FIRSTNAME";
$proto35["m_columns"][] = "USR_LASTNAME";
$proto35["m_columns"][] = "USR_EMAIL";
$proto35["m_columns"][] = "USR_DUE_DATE";
$proto35["m_columns"][] = "USR_CREATE_DATE";
$proto35["m_columns"][] = "USR_UPDATE_DATE";
$proto35["m_columns"][] = "USR_STATUS";
$proto35["m_columns"][] = "USR_AUTH_TYPE";
$proto35["m_columns"][] = "UID_AUTH_SOURCE";
$proto35["m_columns"][] = "USR_AUTH_USER_DN";
$proto35["m_columns"][] = "USR_AUTH_SUPERVISOR_DN";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "RBAC_USERS";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "RBAC_USERS";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="RBAC_USERS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RBAC_USERS = createSqlQuery_RBAC_USERS();


	
						;

														

$tdataRBAC_USERS[".sqlquery"] = $queryData_RBAC_USERS;

$tableEvents["RBAC_USERS"] = new eventsBase;
$tdataRBAC_USERS[".hasEvents"] = false;

?>
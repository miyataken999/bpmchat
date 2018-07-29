<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAPP_CACHE_VIEW_Chart = array();
	$tdataAPP_CACHE_VIEW_Chart[".ShortName"] = "APP_CACHE_VIEW_Chart";
	$tdataAPP_CACHE_VIEW_Chart[".OwnerID"] = "";
	$tdataAPP_CACHE_VIEW_Chart[".OriginalTable"] = "APP_CACHE_VIEW";

//	field labels
$fieldLabelsAPP_CACHE_VIEW_Chart = array();
$fieldToolTipsAPP_CACHE_VIEW_Chart = array();
$pageTitlesAPP_CACHE_VIEW_Chart = array();
$placeHoldersAPP_CACHE_VIEW_Chart = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"] = array();
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"] = array();
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"] = array();
	$pageTitlesAPP_CACHE_VIEW_Chart["Japanese"] = array();
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_LAST_INDEX"] = "DEL LAST INDEX";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_LAST_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_LAST_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["PREVIOUS_USR_UID"] = "PREVIOUS USR UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["PREVIOUS_USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["PREVIOUS_USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["TAS_UID"] = "TAS UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["TAS_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["TAS_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["PRO_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["PRO_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELEGATE_DATE"] = "DEL DELEGATE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_INIT_DATE"] = "DEL INIT DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_INIT_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_INIT_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_FINISH_DATE"] = "DEL FINISH DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_TASK_DUE_DATE"] = "DEL TASK DUE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_TASK_DUE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_TASK_DUE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_RISK_DATE"] = "DEL RISK DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_RISK_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_RISK_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_THREAD_STATUS"] = "DEL THREAD STATUS";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_THREAD_STATUS"] = "APP THREAD STATUS";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_TITLE"] = "APP TITLE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_PRO_TITLE"] = "APP PRO TITLE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_PRO_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_PRO_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_TAS_TITLE"] = "APP TAS TITLE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_TAS_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_TAS_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_CURRENT_USER"] = "APP CURRENT USER";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_CURRENT_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_CURRENT_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_DEL_PREVIOUS_USER"] = "APP DEL PREVIOUS USER";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_DEL_PREVIOUS_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_DEL_PREVIOUS_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_PRIORITY"] = "DEL PRIORITY";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_PRIORITY"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_PRIORITY"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DURATION"] = "DEL DURATION";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_QUEUE_DURATION"] = "DEL QUEUE DURATION";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_QUEUE_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_QUEUE_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELAY_DURATION"] = "DEL DELAY DURATION";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELAY_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELAY_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_STARTED"] = "DEL STARTED";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_STARTED"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_STARTED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_FINISHED"] = "DEL FINISHED";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_FINISHED"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_FINISHED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELAYED"] = "DEL DELAYED";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELAYED"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["DEL_DELAYED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_CREATE_DATE"] = "APP CREATE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_CREATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "APP OVERDUE PERCENTAGE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart["Japanese"]["APP_OVERDUE_PERCENTAGE"] = "";
	if (count($fieldToolTipsAPP_CACHE_VIEW_Chart["Japanese"]))
		$tdataAPP_CACHE_VIEW_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAPP_CACHE_VIEW_Chart[""] = array();
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""] = array();
	$placeHoldersAPP_CACHE_VIEW_Chart[""] = array();
	$pageTitlesAPP_CACHE_VIEW_Chart[""] = array();
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_UID"] = "APP UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_INDEX"] = "DEL INDEX";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_LAST_INDEX"] = "DEL LAST INDEX";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_LAST_INDEX"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_LAST_INDEX"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_NUMBER"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_NUMBER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["USR_UID"] = "USR UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["PREVIOUS_USR_UID"] = "PREVIOUS USR UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["PREVIOUS_USR_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["PREVIOUS_USR_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["TAS_UID"] = "TAS UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["TAS_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["TAS_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["PRO_UID"] = "PRO UID";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["PRO_UID"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["PRO_UID"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_DELEGATE_DATE"] = "DEL DELEGATE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_DELEGATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_DELEGATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_INIT_DATE"] = "DEL INIT DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_INIT_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_INIT_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_FINISH_DATE"] = "DEL FINISH DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_TASK_DUE_DATE"] = "DEL TASK DUE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_TASK_DUE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_TASK_DUE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_RISK_DATE"] = "DEL RISK DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_RISK_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_RISK_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_THREAD_STATUS"] = "DEL THREAD STATUS";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_THREAD_STATUS"] = "APP THREAD STATUS";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_THREAD_STATUS"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_THREAD_STATUS"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_TITLE"] = "APP TITLE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_PRO_TITLE"] = "APP PRO TITLE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_PRO_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_PRO_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_TAS_TITLE"] = "APP TAS TITLE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_TAS_TITLE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_TAS_TITLE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_CURRENT_USER"] = "APP CURRENT USER";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_CURRENT_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_CURRENT_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_DEL_PREVIOUS_USER"] = "APP DEL PREVIOUS USER";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_DEL_PREVIOUS_USER"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_DEL_PREVIOUS_USER"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_PRIORITY"] = "DEL PRIORITY";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_PRIORITY"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_PRIORITY"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_DURATION"] = "DEL DURATION";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_QUEUE_DURATION"] = "DEL QUEUE DURATION";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_QUEUE_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_QUEUE_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_DELAY_DURATION"] = "DEL DELAY DURATION";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_DELAY_DURATION"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_DELAY_DURATION"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_STARTED"] = "DEL STARTED";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_STARTED"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_STARTED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_FINISHED"] = "DEL FINISHED";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_FINISHED"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_FINISHED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["DEL_DELAYED"] = "DEL DELAYED";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["DEL_DELAYED"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["DEL_DELAYED"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_CREATE_DATE"] = "APP CREATE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_CREATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_CREATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_FINISH_DATE"] = "APP FINISH DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_FINISH_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_FINISH_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_UPDATE_DATE"] = "APP UPDATE DATE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_UPDATE_DATE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_UPDATE_DATE"] = "";
	$fieldLabelsAPP_CACHE_VIEW_Chart[""]["APP_OVERDUE_PERCENTAGE"] = "APP OVERDUE PERCENTAGE";
	$fieldToolTipsAPP_CACHE_VIEW_Chart[""]["APP_OVERDUE_PERCENTAGE"] = "";
	$placeHoldersAPP_CACHE_VIEW_Chart[""]["APP_OVERDUE_PERCENTAGE"] = "";
	if (count($fieldToolTipsAPP_CACHE_VIEW_Chart[""]))
		$tdataAPP_CACHE_VIEW_Chart[".isUseToolTips"] = true;
}


	$tdataAPP_CACHE_VIEW_Chart[".NCSearch"] = true;

	$tdataAPP_CACHE_VIEW_Chart[".ChartRefreshTime"] = 0;


$tdataAPP_CACHE_VIEW_Chart[".shortTableName"] = "APP_CACHE_VIEW_Chart";
$tdataAPP_CACHE_VIEW_Chart[".nSecOptions"] = 0;
$tdataAPP_CACHE_VIEW_Chart[".recsPerRowPrint"] = 1;
$tdataAPP_CACHE_VIEW_Chart[".mainTableOwnerID"] = "";
$tdataAPP_CACHE_VIEW_Chart[".moveNext"] = 1;
$tdataAPP_CACHE_VIEW_Chart[".entityType"] = 3;

$tdataAPP_CACHE_VIEW_Chart[".strOriginalTableName"] = "APP_CACHE_VIEW";

	



$tdataAPP_CACHE_VIEW_Chart[".showAddInPopup"] = false;

$tdataAPP_CACHE_VIEW_Chart[".showEditInPopup"] = false;

$tdataAPP_CACHE_VIEW_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAPP_CACHE_VIEW_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAPP_CACHE_VIEW_Chart[".fieldsForRegister"] = array();

$tdataAPP_CACHE_VIEW_Chart[".listAjax"] = false;

	$tdataAPP_CACHE_VIEW_Chart[".audit"] = false;

	$tdataAPP_CACHE_VIEW_Chart[".locking"] = false;

$tdataAPP_CACHE_VIEW_Chart[".edit"] = true;
$tdataAPP_CACHE_VIEW_Chart[".afterEditAction"] = 1;
$tdataAPP_CACHE_VIEW_Chart[".closePopupAfterEdit"] = 1;
$tdataAPP_CACHE_VIEW_Chart[".afterEditActionDetTable"] = "";

$tdataAPP_CACHE_VIEW_Chart[".add"] = true;
$tdataAPP_CACHE_VIEW_Chart[".afterAddAction"] = 1;
$tdataAPP_CACHE_VIEW_Chart[".closePopupAfterAdd"] = 1;
$tdataAPP_CACHE_VIEW_Chart[".afterAddActionDetTable"] = "";

$tdataAPP_CACHE_VIEW_Chart[".list"] = true;



$tdataAPP_CACHE_VIEW_Chart[".reorderRecordsByHeader"] = true;



$tdataAPP_CACHE_VIEW_Chart[".view"] = true;




$tdataAPP_CACHE_VIEW_Chart[".delete"] = true;

$tdataAPP_CACHE_VIEW_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAPP_CACHE_VIEW_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAPP_CACHE_VIEW_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAPP_CACHE_VIEW_Chart[".searchSaving"] = false;
//

$tdataAPP_CACHE_VIEW_Chart[".showSearchPanel"] = true;
		$tdataAPP_CACHE_VIEW_Chart[".flexibleSearch"] = true;

$tdataAPP_CACHE_VIEW_Chart[".isUseAjaxSuggest"] = true;




	

$tdataAPP_CACHE_VIEW_Chart[".ajaxCodeSnippetAdded"] = false;

$tdataAPP_CACHE_VIEW_Chart[".buttonsAdded"] = false;

$tdataAPP_CACHE_VIEW_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAPP_CACHE_VIEW_Chart[".isUseTimeForSearch"] = false;





$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".filterFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".requiredSearchFields"] = array();

$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_UID";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_INDEX";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_LAST_INDEX";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_NUMBER";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_STATUS";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "USR_UID";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "PREVIOUS_USR_UID";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "TAS_UID";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "PRO_UID";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_DELEGATE_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_INIT_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_FINISH_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_TASK_DUE_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_RISK_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_THREAD_STATUS";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_THREAD_STATUS";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_TITLE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_PRO_TITLE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_TAS_TITLE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_CURRENT_USER";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_DEL_PREVIOUS_USER";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_PRIORITY";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_DURATION";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_QUEUE_DURATION";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_DELAY_DURATION";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_STARTED";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_FINISHED";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "DEL_DELAYED";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_CREATE_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_FINISH_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_UPDATE_DATE";
	$tdataAPP_CACHE_VIEW_Chart[".allSearchFields"][] = "APP_OVERDUE_PERCENTAGE";
	

$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".googleLikeFields"][] = "APP_OVERDUE_PERCENTAGE";


$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".advSearchFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".tableType"] = "chart";

$tdataAPP_CACHE_VIEW_Chart[".printerPageOrientation"] = 0;
$tdataAPP_CACHE_VIEW_Chart[".nPrinterPageScale"] = 100;

$tdataAPP_CACHE_VIEW_Chart[".nPrinterSplitRecords"] = 40;

$tdataAPP_CACHE_VIEW_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdataAPP_CACHE_VIEW_Chart[".geocodingEnabled"] = false;



// chart settings
$tdataAPP_CACHE_VIEW_Chart[".chartType"] = "2DPie";
// end of chart settings


$tdataAPP_CACHE_VIEW_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAPP_CACHE_VIEW_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataAPP_CACHE_VIEW_Chart[".orderindexes"] = array();

$tdataAPP_CACHE_VIEW_Chart[".sqlHead"] = "SELECT APP_UID,  	DEL_INDEX,  	DEL_LAST_INDEX,  	APP_NUMBER,  	APP_STATUS,  	USR_UID,  	PREVIOUS_USR_UID,  	TAS_UID,  	PRO_UID,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_FINISH_DATE,  	DEL_TASK_DUE_DATE,  	DEL_RISK_DATE,  	DEL_THREAD_STATUS,  	APP_THREAD_STATUS,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CURRENT_USER,  	APP_DEL_PREVIOUS_USER,  	DEL_PRIORITY,  	DEL_DURATION,  	DEL_QUEUE_DURATION,  	DEL_DELAY_DURATION,  	DEL_STARTED,  	DEL_FINISHED,  	DEL_DELAYED,  	APP_CREATE_DATE,  	APP_FINISH_DATE,  	APP_UPDATE_DATE,  	APP_OVERDUE_PERCENTAGE";
$tdataAPP_CACHE_VIEW_Chart[".sqlFrom"] = "FROM APP_CACHE_VIEW";
$tdataAPP_CACHE_VIEW_Chart[".sqlWhereExpr"] = "";
$tdataAPP_CACHE_VIEW_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAPP_CACHE_VIEW_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAPP_CACHE_VIEW_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdataAPP_CACHE_VIEW_Chart[".highlightSearchResults"] = true;

$tableKeysAPP_CACHE_VIEW_Chart = array();
$tableKeysAPP_CACHE_VIEW_Chart[] = "APP_UID";
$tableKeysAPP_CACHE_VIEW_Chart[] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".Keys"] = $tableKeysAPP_CACHE_VIEW_Chart;

$tdataAPP_CACHE_VIEW_Chart[".listFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".listFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".hideMobileList"] = array();


$tdataAPP_CACHE_VIEW_Chart[".viewFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".viewFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".addFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".addFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".masterListFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".masterListFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineAddFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".editFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".editFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".inlineEditFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".updateSelectedFields"][] = "APP_OVERDUE_PERCENTAGE";


$tdataAPP_CACHE_VIEW_Chart[".exportFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".exportFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".importFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".importFields"][] = "APP_OVERDUE_PERCENTAGE";

$tdataAPP_CACHE_VIEW_Chart[".printFields"] = array();
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_UID";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_LAST_INDEX";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_NUMBER";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "PREVIOUS_USR_UID";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "TAS_UID";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "PRO_UID";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_DELEGATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_INIT_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_TASK_DUE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_RISK_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_THREAD_STATUS";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_PRO_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_TAS_TITLE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_CURRENT_USER";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_DEL_PREVIOUS_USER";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_PRIORITY";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_QUEUE_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_DELAY_DURATION";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_STARTED";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_FINISHED";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "DEL_DELAYED";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_CREATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_FINISH_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_UPDATE_DATE";
$tdataAPP_CACHE_VIEW_Chart[".printFields"][] = "APP_OVERDUE_PERCENTAGE";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_UID");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_UID"] = $fdata;
//	DEL_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DEL_INDEX";
	$fdata["GoodName"] = "DEL_INDEX";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_INDEX");
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

	
		$vdata["LinkPrefix"] ="4343434343";

	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_INDEX"] = $fdata;
//	DEL_LAST_INDEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEL_LAST_INDEX";
	$fdata["GoodName"] = "DEL_LAST_INDEX";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_LAST_INDEX");
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

		$fdata["strField"] = "DEL_LAST_INDEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_LAST_INDEX";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_LAST_INDEX"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_NUMBER");
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

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_STATUS");
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

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_STATUS"] = $fdata;
//	USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USR_UID";
	$fdata["GoodName"] = "USR_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","USR_UID");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "USERS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "USR_UID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "USR_FIRSTNAME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["USR_UID"] = $fdata;
//	PREVIOUS_USR_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PREVIOUS_USR_UID";
	$fdata["GoodName"] = "PREVIOUS_USR_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","PREVIOUS_USR_UID");
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

		$fdata["strField"] = "PREVIOUS_USR_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PREVIOUS_USR_UID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "USERS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "USR_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "USR_FIRSTNAME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["PREVIOUS_USR_UID"] = $fdata;
//	TAS_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TAS_UID";
	$fdata["GoodName"] = "TAS_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","TAS_UID");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "TASK";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TAS_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TAS_TITLE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["TAS_UID"] = $fdata;
//	PRO_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRO_UID";
	$fdata["GoodName"] = "PRO_UID";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","PRO_UID");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "PROCESS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PRO_UID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PRO_TITLE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["PRO_UID"] = $fdata;
//	DEL_DELEGATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DEL_DELEGATE_DATE";
	$fdata["GoodName"] = "DEL_DELEGATE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DELEGATE_DATE");
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

		$fdata["strField"] = "DEL_DELEGATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DELEGATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_DELEGATE_DATE"] = $fdata;
//	DEL_INIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DEL_INIT_DATE";
	$fdata["GoodName"] = "DEL_INIT_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_INIT_DATE");
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

		$fdata["strField"] = "DEL_INIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_INIT_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_INIT_DATE"] = $fdata;
//	DEL_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEL_FINISH_DATE";
	$fdata["GoodName"] = "DEL_FINISH_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_FINISH_DATE");
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

		$fdata["strField"] = "DEL_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_FINISH_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_FINISH_DATE"] = $fdata;
//	DEL_TASK_DUE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEL_TASK_DUE_DATE";
	$fdata["GoodName"] = "DEL_TASK_DUE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_TASK_DUE_DATE");
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

		$fdata["strField"] = "DEL_TASK_DUE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_TASK_DUE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_TASK_DUE_DATE"] = $fdata;
//	DEL_RISK_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEL_RISK_DATE";
	$fdata["GoodName"] = "DEL_RISK_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_RISK_DATE");
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

		$fdata["strField"] = "DEL_RISK_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_RISK_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_RISK_DATE"] = $fdata;
//	DEL_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEL_THREAD_STATUS";
	$fdata["GoodName"] = "DEL_THREAD_STATUS";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_THREAD_STATUS");
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

		$fdata["strField"] = "DEL_THREAD_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_THREAD_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_THREAD_STATUS"] = $fdata;
//	APP_THREAD_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "APP_THREAD_STATUS";
	$fdata["GoodName"] = "APP_THREAD_STATUS";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_THREAD_STATUS");
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

		$fdata["strField"] = "APP_THREAD_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_THREAD_STATUS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_THREAD_STATUS"] = $fdata;
//	APP_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "APP_TITLE";
	$fdata["GoodName"] = "APP_TITLE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_TITLE");
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

		$fdata["strField"] = "APP_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TITLE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_TITLE"] = $fdata;
//	APP_PRO_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_PRO_TITLE";
	$fdata["GoodName"] = "APP_PRO_TITLE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_PRO_TITLE");
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

		$fdata["strField"] = "APP_PRO_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_PRO_TITLE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_PRO_TITLE"] = $fdata;
//	APP_TAS_TITLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_TAS_TITLE";
	$fdata["GoodName"] = "APP_TAS_TITLE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_TAS_TITLE");
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

		$fdata["strField"] = "APP_TAS_TITLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_TAS_TITLE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_TAS_TITLE"] = $fdata;
//	APP_CURRENT_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APP_CURRENT_USER";
	$fdata["GoodName"] = "APP_CURRENT_USER";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_CURRENT_USER");
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

		$fdata["strField"] = "APP_CURRENT_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CURRENT_USER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_CURRENT_USER"] = $fdata;
//	APP_DEL_PREVIOUS_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APP_DEL_PREVIOUS_USER";
	$fdata["GoodName"] = "APP_DEL_PREVIOUS_USER";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_DEL_PREVIOUS_USER");
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

		$fdata["strField"] = "APP_DEL_PREVIOUS_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_DEL_PREVIOUS_USER";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_DEL_PREVIOUS_USER"] = $fdata;
//	DEL_PRIORITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DEL_PRIORITY";
	$fdata["GoodName"] = "DEL_PRIORITY";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_PRIORITY");
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

		$fdata["strField"] = "DEL_PRIORITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_PRIORITY";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_PRIORITY"] = $fdata;
//	DEL_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DEL_DURATION";
	$fdata["GoodName"] = "DEL_DURATION";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DURATION");
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

		$fdata["strField"] = "DEL_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_DURATION"] = $fdata;
//	DEL_QUEUE_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DEL_QUEUE_DURATION";
	$fdata["GoodName"] = "DEL_QUEUE_DURATION";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_QUEUE_DURATION");
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

		$fdata["strField"] = "DEL_QUEUE_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_QUEUE_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_QUEUE_DURATION"] = $fdata;
//	DEL_DELAY_DURATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DEL_DELAY_DURATION";
	$fdata["GoodName"] = "DEL_DELAY_DURATION";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DELAY_DURATION");
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

		$fdata["strField"] = "DEL_DELAY_DURATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DELAY_DURATION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_DELAY_DURATION"] = $fdata;
//	DEL_STARTED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DEL_STARTED";
	$fdata["GoodName"] = "DEL_STARTED";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_STARTED");
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

		$fdata["strField"] = "DEL_STARTED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_STARTED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_STARTED"] = $fdata;
//	DEL_FINISHED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DEL_FINISHED";
	$fdata["GoodName"] = "DEL_FINISHED";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_FINISHED");
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

		$fdata["strField"] = "DEL_FINISHED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_FINISHED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_FINISHED"] = $fdata;
//	DEL_DELAYED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DEL_DELAYED";
	$fdata["GoodName"] = "DEL_DELAYED";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DELAYED");
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

		$fdata["strField"] = "DEL_DELAYED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEL_DELAYED";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["DEL_DELAYED"] = $fdata;
//	APP_CREATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "APP_CREATE_DATE";
	$fdata["GoodName"] = "APP_CREATE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_CREATE_DATE");
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

		$fdata["strField"] = "APP_CREATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_CREATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_CREATE_DATE"] = $fdata;
//	APP_FINISH_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "APP_FINISH_DATE";
	$fdata["GoodName"] = "APP_FINISH_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_FINISH_DATE");
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

		$fdata["strField"] = "APP_FINISH_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_FINISH_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_FINISH_DATE"] = $fdata;
//	APP_UPDATE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "APP_UPDATE_DATE";
	$fdata["GoodName"] = "APP_UPDATE_DATE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_UPDATE_DATE");
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

		$fdata["strField"] = "APP_UPDATE_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_UPDATE_DATE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_UPDATE_DATE"] = $fdata;
//	APP_OVERDUE_PERCENTAGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "APP_OVERDUE_PERCENTAGE";
	$fdata["GoodName"] = "APP_OVERDUE_PERCENTAGE";
	$fdata["ownerTable"] = "APP_CACHE_VIEW";
	$fdata["Label"] = GetFieldLabel("APP_CACHE_VIEW_Chart","APP_OVERDUE_PERCENTAGE");
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

		$fdata["strField"] = "APP_OVERDUE_PERCENTAGE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_OVERDUE_PERCENTAGE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataAPP_CACHE_VIEW_Chart["APP_OVERDUE_PERCENTAGE"] = $fdata;

	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">APP_CACHE_VIEW Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">DEL_INDEX</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">DEL_INDEX</attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("APP_CACHE_VIEW Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("DEL_INDEX").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">true</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">APP_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">DEL_INDEX</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_INDEX")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">DEL_LAST_INDEX</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_LAST_INDEX")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">APP_NUMBER</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_NUMBER")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">APP_STATUS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_STATUS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">USR_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","USR_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">PREVIOUS_USR_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","PREVIOUS_USR_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">TAS_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","TAS_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">PRO_UID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","PRO_UID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">DEL_DELEGATE_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DELEGATE_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="10">
		<attr value="name">DEL_INIT_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_INIT_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="11">
		<attr value="name">DEL_FINISH_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_FINISH_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="12">
		<attr value="name">DEL_TASK_DUE_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_TASK_DUE_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="13">
		<attr value="name">DEL_RISK_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_RISK_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="14">
		<attr value="name">DEL_THREAD_STATUS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_THREAD_STATUS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="15">
		<attr value="name">APP_THREAD_STATUS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_THREAD_STATUS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="16">
		<attr value="name">APP_TITLE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_TITLE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="17">
		<attr value="name">APP_PRO_TITLE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_PRO_TITLE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="18">
		<attr value="name">APP_TAS_TITLE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_TAS_TITLE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="19">
		<attr value="name">APP_CURRENT_USER</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_CURRENT_USER")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="20">
		<attr value="name">APP_DEL_PREVIOUS_USER</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_DEL_PREVIOUS_USER")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="21">
		<attr value="name">DEL_PRIORITY</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_PRIORITY")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="22">
		<attr value="name">DEL_DURATION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DURATION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="23">
		<attr value="name">DEL_QUEUE_DURATION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_QUEUE_DURATION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="24">
		<attr value="name">DEL_DELAY_DURATION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DELAY_DURATION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="25">
		<attr value="name">DEL_STARTED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_STARTED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="26">
		<attr value="name">DEL_FINISHED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_FINISHED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="27">
		<attr value="name">DEL_DELAYED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","DEL_DELAYED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="28">
		<attr value="name">APP_CREATE_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_CREATE_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="29">
		<attr value="name">APP_FINISH_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_FINISH_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="30">
		<attr value="name">APP_UPDATE_DATE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_UPDATE_DATE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '<attr value="31">
		<attr value="name">APP_OVERDUE_PERCENTAGE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("APP_CACHE_VIEW_Chart","APP_OVERDUE_PERCENTAGE")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataAPP_CACHE_VIEW_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">APP_CACHE_VIEW Chart</attr>
<attr value="short_table_name">APP_CACHE_VIEW_Chart</attr>
</attr>

</chart>';

$tables_data["APP_CACHE_VIEW Chart"]=&$tdataAPP_CACHE_VIEW_Chart;
$field_labels["APP_CACHE_VIEW_Chart"] = &$fieldLabelsAPP_CACHE_VIEW_Chart;
$fieldToolTips["APP_CACHE_VIEW_Chart"] = &$fieldToolTipsAPP_CACHE_VIEW_Chart;
$placeHolders["APP_CACHE_VIEW_Chart"] = &$placeHoldersAPP_CACHE_VIEW_Chart;
$page_titles["APP_CACHE_VIEW_Chart"] = &$pageTitlesAPP_CACHE_VIEW_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["APP_CACHE_VIEW Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["APP_CACHE_VIEW Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_APP_CACHE_VIEW_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	DEL_INDEX,  	DEL_LAST_INDEX,  	APP_NUMBER,  	APP_STATUS,  	USR_UID,  	PREVIOUS_USR_UID,  	TAS_UID,  	PRO_UID,  	DEL_DELEGATE_DATE,  	DEL_INIT_DATE,  	DEL_FINISH_DATE,  	DEL_TASK_DUE_DATE,  	DEL_RISK_DATE,  	DEL_THREAD_STATUS,  	APP_THREAD_STATUS,  	APP_TITLE,  	APP_PRO_TITLE,  	APP_TAS_TITLE,  	APP_CURRENT_USER,  	APP_DEL_PREVIOUS_USER,  	DEL_PRIORITY,  	DEL_DURATION,  	DEL_QUEUE_DURATION,  	DEL_DELAY_DURATION,  	DEL_STARTED,  	DEL_FINISHED,  	DEL_DELAYED,  	APP_CREATE_DATE,  	APP_FINISH_DATE,  	APP_UPDATE_DATE,  	APP_OVERDUE_PERCENTAGE";
$proto0["m_strFrom"] = "FROM APP_CACHE_VIEW";
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
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INDEX",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto8["m_sql"] = "DEL_INDEX";
$proto8["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_LAST_INDEX",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto10["m_sql"] = "DEL_LAST_INDEX";
$proto10["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto12["m_sql"] = "APP_NUMBER";
$proto12["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto14["m_sql"] = "APP_STATUS";
$proto14["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USR_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto16["m_sql"] = "USR_UID";
$proto16["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PREVIOUS_USR_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto18["m_sql"] = "PREVIOUS_USR_UID";
$proto18["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TAS_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto20["m_sql"] = "TAS_UID";
$proto20["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRO_UID",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto22["m_sql"] = "PRO_UID";
$proto22["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELEGATE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto24["m_sql"] = "DEL_DELEGATE_DATE";
$proto24["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_INIT_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto26["m_sql"] = "DEL_INIT_DATE";
$proto26["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_FINISH_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto28["m_sql"] = "DEL_FINISH_DATE";
$proto28["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_TASK_DUE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto30["m_sql"] = "DEL_TASK_DUE_DATE";
$proto30["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_RISK_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto32["m_sql"] = "DEL_RISK_DATE";
$proto32["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_THREAD_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto34["m_sql"] = "DEL_THREAD_STATUS";
$proto34["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_THREAD_STATUS",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto36["m_sql"] = "APP_THREAD_STATUS";
$proto36["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TITLE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto38["m_sql"] = "APP_TITLE";
$proto38["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_PRO_TITLE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto40["m_sql"] = "APP_PRO_TITLE";
$proto40["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_TAS_TITLE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto42["m_sql"] = "APP_TAS_TITLE";
$proto42["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CURRENT_USER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto44["m_sql"] = "APP_CURRENT_USER";
$proto44["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_DEL_PREVIOUS_USER",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto46["m_sql"] = "APP_DEL_PREVIOUS_USER";
$proto46["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_PRIORITY",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto48["m_sql"] = "DEL_PRIORITY";
$proto48["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DURATION",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto50["m_sql"] = "DEL_DURATION";
$proto50["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_QUEUE_DURATION",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto52["m_sql"] = "DEL_QUEUE_DURATION";
$proto52["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELAY_DURATION",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto54["m_sql"] = "DEL_DELAY_DURATION";
$proto54["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_STARTED",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto56["m_sql"] = "DEL_STARTED";
$proto56["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_FINISHED",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto58["m_sql"] = "DEL_FINISHED";
$proto58["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DEL_DELAYED",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto60["m_sql"] = "DEL_DELAYED";
$proto60["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_CREATE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto62["m_sql"] = "APP_CREATE_DATE";
$proto62["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_FINISH_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto64["m_sql"] = "APP_FINISH_DATE";
$proto64["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_UPDATE_DATE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto66["m_sql"] = "APP_UPDATE_DATE";
$proto66["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_OVERDUE_PERCENTAGE",
	"m_strTable" => "APP_CACHE_VIEW",
	"m_srcTableName" => "APP_CACHE_VIEW Chart"
));

$proto68["m_sql"] = "APP_OVERDUE_PERCENTAGE";
$proto68["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "APP_CACHE_VIEW";
$proto71["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "APP_UID";
$proto71["m_columns"][] = "DEL_INDEX";
$proto71["m_columns"][] = "DEL_LAST_INDEX";
$proto71["m_columns"][] = "APP_NUMBER";
$proto71["m_columns"][] = "APP_STATUS";
$proto71["m_columns"][] = "USR_UID";
$proto71["m_columns"][] = "PREVIOUS_USR_UID";
$proto71["m_columns"][] = "TAS_UID";
$proto71["m_columns"][] = "PRO_UID";
$proto71["m_columns"][] = "DEL_DELEGATE_DATE";
$proto71["m_columns"][] = "DEL_INIT_DATE";
$proto71["m_columns"][] = "DEL_FINISH_DATE";
$proto71["m_columns"][] = "DEL_TASK_DUE_DATE";
$proto71["m_columns"][] = "DEL_RISK_DATE";
$proto71["m_columns"][] = "DEL_THREAD_STATUS";
$proto71["m_columns"][] = "APP_THREAD_STATUS";
$proto71["m_columns"][] = "APP_TITLE";
$proto71["m_columns"][] = "APP_PRO_TITLE";
$proto71["m_columns"][] = "APP_TAS_TITLE";
$proto71["m_columns"][] = "APP_CURRENT_USER";
$proto71["m_columns"][] = "APP_DEL_PREVIOUS_USER";
$proto71["m_columns"][] = "DEL_PRIORITY";
$proto71["m_columns"][] = "DEL_DURATION";
$proto71["m_columns"][] = "DEL_QUEUE_DURATION";
$proto71["m_columns"][] = "DEL_DELAY_DURATION";
$proto71["m_columns"][] = "DEL_STARTED";
$proto71["m_columns"][] = "DEL_FINISHED";
$proto71["m_columns"][] = "DEL_DELAYED";
$proto71["m_columns"][] = "APP_CREATE_DATE";
$proto71["m_columns"][] = "APP_FINISH_DATE";
$proto71["m_columns"][] = "APP_UPDATE_DATE";
$proto71["m_columns"][] = "APP_OVERDUE_PERCENTAGE";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "APP_CACHE_VIEW";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "APP_CACHE_VIEW Chart";
$proto72=array();
$proto72["m_sql"] = "";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="APP_CACHE_VIEW Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_APP_CACHE_VIEW_Chart = createSqlQuery_APP_CACHE_VIEW_Chart();


	
						;

																																

$tdataAPP_CACHE_VIEW_Chart[".sqlquery"] = $queryData_APP_CACHE_VIEW_Chart;

$tableEvents["APP_CACHE_VIEW Chart"] = new eventsBase;
$tdataAPP_CACHE_VIEW_Chart[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_QUOTE_DETAILS = array();
	$tdataPMT_QUOTE_DETAILS[".truncateText"] = true;
	$tdataPMT_QUOTE_DETAILS[".NumberOfChars"] = 80;
	$tdataPMT_QUOTE_DETAILS[".ShortName"] = "PMT_QUOTE_DETAILS";
	$tdataPMT_QUOTE_DETAILS[".OwnerID"] = "";
	$tdataPMT_QUOTE_DETAILS[".OriginalTable"] = "PMT_QUOTE_DETAILS";

//	field labels
$fieldLabelsPMT_QUOTE_DETAILS = array();
$fieldToolTipsPMT_QUOTE_DETAILS = array();
$pageTitlesPMT_QUOTE_DETAILS = array();
$placeHoldersPMT_QUOTE_DETAILS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"] = array();
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"] = array();
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"] = array();
	$pageTitlesPMT_QUOTE_DETAILS["Japanese"] = array();
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["A"] = "A";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["A"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["A"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["B"] = "B";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["B"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["B"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["C"] = "C";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["C"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["C"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["D"] = "D";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["D"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["D"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["E"] = "E";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["E"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["E"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["F"] = "F";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["F"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["F"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["G"] = "G";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["G"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["G"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["H"] = "H";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["H"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["H"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["I"] = "I";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["I"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["I"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["J"] = "J";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["J"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["J"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["K"] = "K";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["K"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["K"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["E_LABEL"] = "E LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["E_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["E_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["A_LABEL"] = "A LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["A_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["A_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["B_LABEL"] = "B LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["B_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["B_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["C_LABEL"] = "C LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["C_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["C_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["D_LABEL"] = "D LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["D_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["D_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["ROW"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["TIME"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["TIME"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["Japanese"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_QUOTE_DETAILS["Japanese"]))
		$tdataPMT_QUOTE_DETAILS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_QUOTE_DETAILS["English"] = array();
	$fieldToolTipsPMT_QUOTE_DETAILS["English"] = array();
	$placeHoldersPMT_QUOTE_DETAILS["English"] = array();
	$pageTitlesPMT_QUOTE_DETAILS["English"] = array();
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["APP_UID"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["APP_UID"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["A"] = "A";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["A"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["A"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["B"] = "B";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["B"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["B"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["C"] = "C";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["C"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["C"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["D"] = "D";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["D"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["D"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["E"] = "E";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["E"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["E"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["F"] = "F";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["F"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["F"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["G"] = "G";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["G"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["G"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["H"] = "H";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["H"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["H"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["I"] = "I";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["I"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["I"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["J"] = "J";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["J"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["J"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["K"] = "K";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["K"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["K"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["E_LABEL"] = "E LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["E_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["E_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["A_LABEL"] = "A LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["A_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["A_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["B_LABEL"] = "B LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["B_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["B_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["C_LABEL"] = "C LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["C_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["C_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["D_LABEL"] = "D LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["D_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["D_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["ROW"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["ROW"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["TIME"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["TIME"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_QUOTE_DETAILS["English"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_QUOTE_DETAILS["English"]))
		$tdataPMT_QUOTE_DETAILS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_QUOTE_DETAILS[""] = array();
	$fieldToolTipsPMT_QUOTE_DETAILS[""] = array();
	$placeHoldersPMT_QUOTE_DETAILS[""] = array();
	$pageTitlesPMT_QUOTE_DETAILS[""] = array();
	$fieldLabelsPMT_QUOTE_DETAILS[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["APP_UID"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["APP_UID"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["A"] = "A";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["A"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["A"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["B"] = "B";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["B"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["B"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["C"] = "C";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["C"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["C"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["D"] = "D";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["D"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["D"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["E"] = "E";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["E"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["E"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["F"] = "F";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["F"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["F"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["G"] = "G";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["G"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["G"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["H"] = "H";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["H"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["H"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["I"] = "I";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["I"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["I"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["J"] = "J";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["J"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["J"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["K"] = "K";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["K"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["K"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["E_LABEL"] = "E LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["E_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["E_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["A_LABEL"] = "A LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["A_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["A_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["B_LABEL"] = "B LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["B_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["B_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["C_LABEL"] = "C LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["C_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["C_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["D_LABEL"] = "D LABEL";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["D_LABEL"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["D_LABEL"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["APP_STATUS"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["ROW"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["ROW"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["TIME"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["TIME"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_QUOTE_DETAILS[""]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_QUOTE_DETAILS[""]))
		$tdataPMT_QUOTE_DETAILS[".isUseToolTips"] = true;
}


	$tdataPMT_QUOTE_DETAILS[".NCSearch"] = true;



$tdataPMT_QUOTE_DETAILS[".shortTableName"] = "PMT_QUOTE_DETAILS";
$tdataPMT_QUOTE_DETAILS[".nSecOptions"] = 0;
$tdataPMT_QUOTE_DETAILS[".recsPerRowPrint"] = 1;
$tdataPMT_QUOTE_DETAILS[".mainTableOwnerID"] = "";
$tdataPMT_QUOTE_DETAILS[".moveNext"] = 1;
$tdataPMT_QUOTE_DETAILS[".entityType"] = 0;

$tdataPMT_QUOTE_DETAILS[".strOriginalTableName"] = "PMT_QUOTE_DETAILS";

	



$tdataPMT_QUOTE_DETAILS[".showAddInPopup"] = false;

$tdataPMT_QUOTE_DETAILS[".showEditInPopup"] = false;

$tdataPMT_QUOTE_DETAILS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_QUOTE_DETAILS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_QUOTE_DETAILS[".fieldsForRegister"] = array();
	
$tdataPMT_QUOTE_DETAILS[".listAjax"] = false;

	$tdataPMT_QUOTE_DETAILS[".audit"] = false;

	$tdataPMT_QUOTE_DETAILS[".locking"] = false;



$tdataPMT_QUOTE_DETAILS[".list"] = true;



$tdataPMT_QUOTE_DETAILS[".reorderRecordsByHeader"] = true;




$tdataPMT_QUOTE_DETAILS[".import"] = true;

$tdataPMT_QUOTE_DETAILS[".exportTo"] = true;

$tdataPMT_QUOTE_DETAILS[".printFriendly"] = true;


$tdataPMT_QUOTE_DETAILS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_QUOTE_DETAILS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_QUOTE_DETAILS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_QUOTE_DETAILS[".searchSaving"] = false;
//

$tdataPMT_QUOTE_DETAILS[".showSearchPanel"] = true;
		$tdataPMT_QUOTE_DETAILS[".flexibleSearch"] = true;

$tdataPMT_QUOTE_DETAILS[".isUseAjaxSuggest"] = true;

$tdataPMT_QUOTE_DETAILS[".rowHighlite"] = true;



				

$tdataPMT_QUOTE_DETAILS[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_QUOTE_DETAILS[".buttonsAdded"] = false;

$tdataPMT_QUOTE_DETAILS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_QUOTE_DETAILS[".isUseTimeForSearch"] = false;





$tdataPMT_QUOTE_DETAILS[".allSearchFields"] = array();
$tdataPMT_QUOTE_DETAILS[".filterFields"] = array();
$tdataPMT_QUOTE_DETAILS[".requiredSearchFields"] = array();

$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "APP_UID";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "A";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "B";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "C";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "D";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "E";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "F";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "G";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "H";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "I";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "J";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "K";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "E_LABEL";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "A_LABEL";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "B_LABEL";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "C_LABEL";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "D_LABEL";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "ROW";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "TIME";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_QUOTE_DETAILS[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_QUOTE_DETAILS[".googleLikeFields"] = array();
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_QUOTE_DETAILS[".advSearchFields"] = array();
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".tableType"] = "list";

$tdataPMT_QUOTE_DETAILS[".printerPageOrientation"] = 0;
$tdataPMT_QUOTE_DETAILS[".nPrinterPageScale"] = 100;

$tdataPMT_QUOTE_DETAILS[".nPrinterSplitRecords"] = 40;

$tdataPMT_QUOTE_DETAILS[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_QUOTE_DETAILS[".geocodingEnabled"] = false;





$tdataPMT_QUOTE_DETAILS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_QUOTE_DETAILS[".pageSize"] = 20;

$tdataPMT_QUOTE_DETAILS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_QUOTE_DETAILS[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_QUOTE_DETAILS[".orderindexes"] = array();

$tdataPMT_QUOTE_DETAILS[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	E_LABEL,  	A_LABEL,  	B_LABEL,  	C_LABEL,  	D_LABEL,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_QUOTE_DETAILS[".sqlFrom"] = "FROM PMT_QUOTE_DETAILS";
$tdataPMT_QUOTE_DETAILS[".sqlWhereExpr"] = "";
$tdataPMT_QUOTE_DETAILS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_QUOTE_DETAILS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_QUOTE_DETAILS[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_QUOTE_DETAILS[".highlightSearchResults"] = true;

$tableKeysPMT_QUOTE_DETAILS = array();
$tdataPMT_QUOTE_DETAILS[".Keys"] = $tableKeysPMT_QUOTE_DETAILS;

$tdataPMT_QUOTE_DETAILS[".listFields"] = array();
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".hideMobileList"] = array();


$tdataPMT_QUOTE_DETAILS[".viewFields"] = array();
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".addFields"] = array();
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".masterListFields"] = array();
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".inlineAddFields"] = array();
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".editFields"] = array();
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".inlineEditFields"] = array();
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"] = array();
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_QUOTE_DETAILS[".exportFields"] = array();
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".importFields"] = array();
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_QUOTE_DETAILS[".printFields"] = array();
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "APP_UID";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "A";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "B";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "C";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "D";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "E";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "F";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "G";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "H";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "I";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "J";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "K";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "E_LABEL";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "A_LABEL";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "B_LABEL";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "C_LABEL";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "D_LABEL";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "APP_NUMBER";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "APP_STATUS";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "ROW";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "TIME";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_QUOTE_DETAILS[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","APP_UID");
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




	$tdataPMT_QUOTE_DETAILS["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","A");
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

		$fdata["strField"] = "A";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A";

	
	
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




	$tdataPMT_QUOTE_DETAILS["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","B");
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

		$fdata["strField"] = "B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "B";

	
	
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




	$tdataPMT_QUOTE_DETAILS["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","C");
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

		$fdata["strField"] = "C";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C";

	
	
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




	$tdataPMT_QUOTE_DETAILS["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","D");
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

		$fdata["strField"] = "D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D";

	
	
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




	$tdataPMT_QUOTE_DETAILS["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","E");
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

		$fdata["strField"] = "E";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E";

	
	
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




	$tdataPMT_QUOTE_DETAILS["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","F");
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

		$fdata["strField"] = "F";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F";

	
	
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




	$tdataPMT_QUOTE_DETAILS["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","G");
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

		$fdata["strField"] = "G";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "G";

	
	
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




	$tdataPMT_QUOTE_DETAILS["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","H");
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

		$fdata["strField"] = "H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "H";

	
	
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




	$tdataPMT_QUOTE_DETAILS["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","I");
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

		$fdata["strField"] = "I";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "I";

	
	
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




	$tdataPMT_QUOTE_DETAILS["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","J");
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

		$fdata["strField"] = "J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "J";

	
	
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




	$tdataPMT_QUOTE_DETAILS["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","K");
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

		$fdata["strField"] = "K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "K";

	
	
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




	$tdataPMT_QUOTE_DETAILS["K"] = $fdata;
//	E_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "E_LABEL";
	$fdata["GoodName"] = "E_LABEL";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","E_LABEL");
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

		$fdata["strField"] = "E_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E_LABEL";

	
	
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




	$tdataPMT_QUOTE_DETAILS["E_LABEL"] = $fdata;
//	A_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "A_LABEL";
	$fdata["GoodName"] = "A_LABEL";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","A_LABEL");
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

		$fdata["strField"] = "A_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A_LABEL";

	
	
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




	$tdataPMT_QUOTE_DETAILS["A_LABEL"] = $fdata;
//	B_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "B_LABEL";
	$fdata["GoodName"] = "B_LABEL";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","B_LABEL");
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

		$fdata["strField"] = "B_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "B_LABEL";

	
	
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




	$tdataPMT_QUOTE_DETAILS["B_LABEL"] = $fdata;
//	C_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "C_LABEL";
	$fdata["GoodName"] = "C_LABEL";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","C_LABEL");
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

		$fdata["strField"] = "C_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C_LABEL";

	
	
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




	$tdataPMT_QUOTE_DETAILS["C_LABEL"] = $fdata;
//	D_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "D_LABEL";
	$fdata["GoodName"] = "D_LABEL";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","D_LABEL");
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

		$fdata["strField"] = "D_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D_LABEL";

	
	
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




	$tdataPMT_QUOTE_DETAILS["D_LABEL"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","APP_NUMBER");
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

		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER";

	
	
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




	$tdataPMT_QUOTE_DETAILS["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","APP_STATUS");
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

		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS";

	
	
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




	$tdataPMT_QUOTE_DETAILS["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","ROW");
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

		$fdata["strField"] = "ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ROW`";

	
	
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




	$tdataPMT_QUOTE_DETAILS["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","EMPLOYEE_NO");
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

		$fdata["strField"] = "EMPLOYEE_NO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMPLOYEE_NO";

	
	
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




	$tdataPMT_QUOTE_DETAILS["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","TIME");
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

		$fdata["strField"] = "TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TIME`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "BPMBOXTEST";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TIME";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TIME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_QUOTE_DETAILS["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","MONTHLY_REPORT");
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

		$fdata["strField"] = "MONTHLY_REPORT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTHLY_REPORT";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "BPMBOXTEST";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MONTHLY_REPORT";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "MONTHLY_REPORT";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_QUOTE_DETAILS["MONTHLY_REPORT"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","BUSINESS_CONFIRMATION_17");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "BUSINESS_CONFIRMATION_17";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_17";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_QUOTE_DETAILS["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","BUSINESS_CONFIRMATION_18");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "BUSINESS_CONFIRMATION_18";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_18";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_QUOTE_DETAILS["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_QUOTE_DETAILS";
	$fdata["Label"] = GetFieldLabel("PMT_QUOTE_DETAILS","BUSINESS_CONFIRMATION_19");
	$fdata["FieldType"] = 129;

	
	
	
			
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

		$fdata["strField"] = "BUSINESS_CONFIRMATION_19";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSINESS_CONFIRMATION_19";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_QUOTE_DETAILS["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_QUOTE_DETAILS"]=&$tdataPMT_QUOTE_DETAILS;
$field_labels["PMT_QUOTE_DETAILS"] = &$fieldLabelsPMT_QUOTE_DETAILS;
$fieldToolTips["PMT_QUOTE_DETAILS"] = &$fieldToolTipsPMT_QUOTE_DETAILS;
$placeHolders["PMT_QUOTE_DETAILS"] = &$placeHoldersPMT_QUOTE_DETAILS;
$page_titles["PMT_QUOTE_DETAILS"] = &$pageTitlesPMT_QUOTE_DETAILS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_QUOTE_DETAILS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_QUOTE_DETAILS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_QUOTE_DETAILS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	E_LABEL,  	A_LABEL,  	B_LABEL,  	C_LABEL,  	D_LABEL,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto0["m_strFrom"] = "FROM PMT_QUOTE_DETAILS";
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
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto10["m_sql"] = "B";
$proto10["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto12["m_sql"] = "C";
$proto12["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto14["m_sql"] = "D";
$proto14["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto16["m_sql"] = "E";
$proto16["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto18["m_sql"] = "F";
$proto18["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto20["m_sql"] = "G";
$proto20["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto22["m_sql"] = "H";
$proto22["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto24["m_sql"] = "I";
$proto24["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto26["m_sql"] = "J";
$proto26["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto28["m_sql"] = "K";
$proto28["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "E_LABEL",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto30["m_sql"] = "E_LABEL";
$proto30["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "A_LABEL",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto32["m_sql"] = "A_LABEL";
$proto32["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "B_LABEL",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto34["m_sql"] = "B_LABEL";
$proto34["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "C_LABEL",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto36["m_sql"] = "C_LABEL";
$proto36["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "D_LABEL",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto38["m_sql"] = "D_LABEL";
$proto38["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto40["m_sql"] = "APP_NUMBER";
$proto40["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto42["m_sql"] = "APP_STATUS";
$proto42["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto44["m_sql"] = "`ROW`";
$proto44["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto46["m_sql"] = "EMPLOYEE_NO";
$proto46["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto48["m_sql"] = "`TIME`";
$proto48["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto50["m_sql"] = "MONTHLY_REPORT";
$proto50["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto52["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto52["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto54["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto54["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_QUOTE_DETAILS",
	"m_srcTableName" => "PMT_QUOTE_DETAILS"
));

$proto56["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto56["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_QUOTE_DETAILS";
$proto59["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "APP_UID";
$proto59["m_columns"][] = "A";
$proto59["m_columns"][] = "B";
$proto59["m_columns"][] = "C";
$proto59["m_columns"][] = "D";
$proto59["m_columns"][] = "E";
$proto59["m_columns"][] = "F";
$proto59["m_columns"][] = "G";
$proto59["m_columns"][] = "H";
$proto59["m_columns"][] = "I";
$proto59["m_columns"][] = "J";
$proto59["m_columns"][] = "K";
$proto59["m_columns"][] = "E_LABEL";
$proto59["m_columns"][] = "A_LABEL";
$proto59["m_columns"][] = "B_LABEL";
$proto59["m_columns"][] = "C_LABEL";
$proto59["m_columns"][] = "D_LABEL";
$proto59["m_columns"][] = "APP_NUMBER";
$proto59["m_columns"][] = "APP_STATUS";
$proto59["m_columns"][] = "ROW";
$proto59["m_columns"][] = "EMPLOYEE_NO";
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_17";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_QUOTE_DETAILS";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_QUOTE_DETAILS";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_QUOTE_DETAILS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_QUOTE_DETAILS = createSqlQuery_PMT_QUOTE_DETAILS();


	
						;

																										

$tdataPMT_QUOTE_DETAILS[".sqlquery"] = $queryData_PMT_QUOTE_DETAILS;

$tableEvents["PMT_QUOTE_DETAILS"] = new eventsBase;
$tdataPMT_QUOTE_DETAILS[".hasEvents"] = false;

?>
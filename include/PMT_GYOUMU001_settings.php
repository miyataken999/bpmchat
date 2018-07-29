<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_GYOUMU001 = array();
	$tdataPMT_GYOUMU001[".truncateText"] = true;
	$tdataPMT_GYOUMU001[".NumberOfChars"] = 80;
	$tdataPMT_GYOUMU001[".ShortName"] = "PMT_GYOUMU001";
	$tdataPMT_GYOUMU001[".OwnerID"] = "";
	$tdataPMT_GYOUMU001[".OriginalTable"] = "PMT_GYOUMU001";

//	field labels
$fieldLabelsPMT_GYOUMU001 = array();
$fieldToolTipsPMT_GYOUMU001 = array();
$pageTitlesPMT_GYOUMU001 = array();
$placeHoldersPMT_GYOUMU001 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_GYOUMU001["Japanese"] = array();
	$fieldToolTipsPMT_GYOUMU001["Japanese"] = array();
	$placeHoldersPMT_GYOUMU001["Japanese"] = array();
	$pageTitlesPMT_GYOUMU001["Japanese"] = array();
	$fieldLabelsPMT_GYOUMU001["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["A"] = "A";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["A"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["A"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["B"] = "B";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["B"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["B"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["C"] = "C";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["C"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["C"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["D"] = "D";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["D"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["D"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["E"] = "E";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["E"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["E"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["F"] = "F";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["F"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["F"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["G"] = "G";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["G"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["G"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["H"] = "H";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["H"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["H"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["I"] = "I";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["I"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["I"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["J"] = "J";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["J"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["J"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["K"] = "K";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["K"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["K"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["E_LABEL"] = "E LABEL";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["E_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["E_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["A_LABEL"] = "A LABEL";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["A_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["A_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["B_LABEL"] = "B LABEL";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["B_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["B_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["C_LABEL"] = "C LABEL";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["C_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["C_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["D_LABEL"] = "D LABEL";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["D_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["D_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["ROW"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["TIME"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["TIME"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_GYOUMU001["Japanese"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_GYOUMU001["Japanese"]))
		$tdataPMT_GYOUMU001[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_GYOUMU001["English"] = array();
	$fieldToolTipsPMT_GYOUMU001["English"] = array();
	$placeHoldersPMT_GYOUMU001["English"] = array();
	$pageTitlesPMT_GYOUMU001["English"] = array();
	$fieldLabelsPMT_GYOUMU001["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GYOUMU001["English"]["APP_UID"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["APP_UID"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GYOUMU001["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GYOUMU001["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["A"] = "A";
	$fieldToolTipsPMT_GYOUMU001["English"]["A"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["A"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["B"] = "B";
	$fieldToolTipsPMT_GYOUMU001["English"]["B"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["B"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["C"] = "C";
	$fieldToolTipsPMT_GYOUMU001["English"]["C"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["C"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["D"] = "D";
	$fieldToolTipsPMT_GYOUMU001["English"]["D"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["D"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["E"] = "E";
	$fieldToolTipsPMT_GYOUMU001["English"]["E"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["E"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["F"] = "F";
	$fieldToolTipsPMT_GYOUMU001["English"]["F"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["F"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["G"] = "G";
	$fieldToolTipsPMT_GYOUMU001["English"]["G"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["G"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["H"] = "H";
	$fieldToolTipsPMT_GYOUMU001["English"]["H"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["H"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["I"] = "I";
	$fieldToolTipsPMT_GYOUMU001["English"]["I"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["I"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["J"] = "J";
	$fieldToolTipsPMT_GYOUMU001["English"]["J"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["J"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["K"] = "K";
	$fieldToolTipsPMT_GYOUMU001["English"]["K"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["K"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["E_LABEL"] = "E LABEL";
	$fieldToolTipsPMT_GYOUMU001["English"]["E_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["E_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["A_LABEL"] = "A LABEL";
	$fieldToolTipsPMT_GYOUMU001["English"]["A_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["A_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["B_LABEL"] = "B LABEL";
	$fieldToolTipsPMT_GYOUMU001["English"]["B_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["B_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["C_LABEL"] = "C LABEL";
	$fieldToolTipsPMT_GYOUMU001["English"]["C_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["C_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["D_LABEL"] = "D LABEL";
	$fieldToolTipsPMT_GYOUMU001["English"]["D_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["D_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_GYOUMU001["English"]["ROW"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["ROW"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_GYOUMU001["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_GYOUMU001["English"]["TIME"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["TIME"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GYOUMU001["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_GYOUMU001["English"]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_GYOUMU001["English"]))
		$tdataPMT_GYOUMU001[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_GYOUMU001[""] = array();
	$fieldToolTipsPMT_GYOUMU001[""] = array();
	$placeHoldersPMT_GYOUMU001[""] = array();
	$pageTitlesPMT_GYOUMU001[""] = array();
	$fieldLabelsPMT_GYOUMU001[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_GYOUMU001[""]["APP_UID"] = "";
	$placeHoldersPMT_GYOUMU001[""]["APP_UID"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_GYOUMU001[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_GYOUMU001[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_GYOUMU001[""]["APP_STATUS"] = "";
	$placeHoldersPMT_GYOUMU001[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["A"] = "A";
	$fieldToolTipsPMT_GYOUMU001[""]["A"] = "";
	$placeHoldersPMT_GYOUMU001[""]["A"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["B"] = "B";
	$fieldToolTipsPMT_GYOUMU001[""]["B"] = "";
	$placeHoldersPMT_GYOUMU001[""]["B"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["C"] = "C";
	$fieldToolTipsPMT_GYOUMU001[""]["C"] = "";
	$placeHoldersPMT_GYOUMU001[""]["C"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["D"] = "D";
	$fieldToolTipsPMT_GYOUMU001[""]["D"] = "";
	$placeHoldersPMT_GYOUMU001[""]["D"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["E"] = "E";
	$fieldToolTipsPMT_GYOUMU001[""]["E"] = "";
	$placeHoldersPMT_GYOUMU001[""]["E"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["F"] = "F";
	$fieldToolTipsPMT_GYOUMU001[""]["F"] = "";
	$placeHoldersPMT_GYOUMU001[""]["F"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["G"] = "G";
	$fieldToolTipsPMT_GYOUMU001[""]["G"] = "";
	$placeHoldersPMT_GYOUMU001[""]["G"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["H"] = "H";
	$fieldToolTipsPMT_GYOUMU001[""]["H"] = "";
	$placeHoldersPMT_GYOUMU001[""]["H"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["I"] = "I";
	$fieldToolTipsPMT_GYOUMU001[""]["I"] = "";
	$placeHoldersPMT_GYOUMU001[""]["I"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["J"] = "J";
	$fieldToolTipsPMT_GYOUMU001[""]["J"] = "";
	$placeHoldersPMT_GYOUMU001[""]["J"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["K"] = "K";
	$fieldToolTipsPMT_GYOUMU001[""]["K"] = "";
	$placeHoldersPMT_GYOUMU001[""]["K"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["E_LABEL"] = "E LABEL";
	$fieldToolTipsPMT_GYOUMU001[""]["E_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001[""]["E_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["A_LABEL"] = "A LABEL";
	$fieldToolTipsPMT_GYOUMU001[""]["A_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001[""]["A_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["B_LABEL"] = "B LABEL";
	$fieldToolTipsPMT_GYOUMU001[""]["B_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001[""]["B_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["C_LABEL"] = "C LABEL";
	$fieldToolTipsPMT_GYOUMU001[""]["C_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001[""]["C_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["D_LABEL"] = "D LABEL";
	$fieldToolTipsPMT_GYOUMU001[""]["D_LABEL"] = "";
	$placeHoldersPMT_GYOUMU001[""]["D_LABEL"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_GYOUMU001[""]["ROW"] = "";
	$placeHoldersPMT_GYOUMU001[""]["ROW"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_GYOUMU001[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_GYOUMU001[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_GYOUMU001[""]["TIME"] = "";
	$placeHoldersPMT_GYOUMU001[""]["TIME"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_GYOUMU001[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_GYOUMU001[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_GYOUMU001[""]["BUSINESS_CONFIRMATION_19"] = "";
	if (count($fieldToolTipsPMT_GYOUMU001[""]))
		$tdataPMT_GYOUMU001[".isUseToolTips"] = true;
}


	$tdataPMT_GYOUMU001[".NCSearch"] = true;



$tdataPMT_GYOUMU001[".shortTableName"] = "PMT_GYOUMU001";
$tdataPMT_GYOUMU001[".nSecOptions"] = 0;
$tdataPMT_GYOUMU001[".recsPerRowPrint"] = 1;
$tdataPMT_GYOUMU001[".mainTableOwnerID"] = "";
$tdataPMT_GYOUMU001[".moveNext"] = 1;
$tdataPMT_GYOUMU001[".entityType"] = 0;

$tdataPMT_GYOUMU001[".strOriginalTableName"] = "PMT_GYOUMU001";

	



$tdataPMT_GYOUMU001[".showAddInPopup"] = false;

$tdataPMT_GYOUMU001[".showEditInPopup"] = false;

$tdataPMT_GYOUMU001[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_GYOUMU001[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_GYOUMU001[".fieldsForRegister"] = array();
	
$tdataPMT_GYOUMU001[".listAjax"] = false;

	$tdataPMT_GYOUMU001[".audit"] = false;

	$tdataPMT_GYOUMU001[".locking"] = false;

$tdataPMT_GYOUMU001[".edit"] = true;
$tdataPMT_GYOUMU001[".afterEditAction"] = 1;
$tdataPMT_GYOUMU001[".closePopupAfterEdit"] = 1;
$tdataPMT_GYOUMU001[".afterEditActionDetTable"] = "";

$tdataPMT_GYOUMU001[".add"] = true;
$tdataPMT_GYOUMU001[".afterAddAction"] = 1;
$tdataPMT_GYOUMU001[".closePopupAfterAdd"] = 1;
$tdataPMT_GYOUMU001[".afterAddActionDetTable"] = "";

$tdataPMT_GYOUMU001[".list"] = true;



$tdataPMT_GYOUMU001[".reorderRecordsByHeader"] = true;



$tdataPMT_GYOUMU001[".view"] = true;

$tdataPMT_GYOUMU001[".import"] = true;

$tdataPMT_GYOUMU001[".exportTo"] = true;

$tdataPMT_GYOUMU001[".printFriendly"] = true;

$tdataPMT_GYOUMU001[".delete"] = true;

$tdataPMT_GYOUMU001[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_GYOUMU001[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_GYOUMU001[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_GYOUMU001[".searchSaving"] = false;
//

$tdataPMT_GYOUMU001[".showSearchPanel"] = true;
		$tdataPMT_GYOUMU001[".flexibleSearch"] = true;

$tdataPMT_GYOUMU001[".isUseAjaxSuggest"] = true;

$tdataPMT_GYOUMU001[".rowHighlite"] = true;



			

$tdataPMT_GYOUMU001[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_GYOUMU001[".buttonsAdded"] = false;

$tdataPMT_GYOUMU001[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_GYOUMU001[".isUseTimeForSearch"] = false;




$tdataPMT_GYOUMU001[".detailsLinksOnList"] = "1";

$tdataPMT_GYOUMU001[".allSearchFields"] = array();
$tdataPMT_GYOUMU001[".filterFields"] = array();
$tdataPMT_GYOUMU001[".requiredSearchFields"] = array();

$tdataPMT_GYOUMU001[".allSearchFields"][] = "APP_UID";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "A";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "B";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "C";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "D";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "E";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "F";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "G";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "H";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "I";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "J";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "K";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "E_LABEL";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "A_LABEL";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "B_LABEL";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "C_LABEL";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "D_LABEL";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "ROW";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "TIME";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_GYOUMU001[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_GYOUMU001[".googleLikeFields"] = array();
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "A";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "B";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "C";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "D";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "E";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "F";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "G";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "H";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "I";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "J";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "K";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "ROW";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "TIME";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_GYOUMU001[".advSearchFields"] = array();
$tdataPMT_GYOUMU001[".advSearchFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "A";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "B";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "C";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "D";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "E";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "F";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "G";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "H";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "I";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "J";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "K";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "ROW";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "TIME";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".tableType"] = "list";

$tdataPMT_GYOUMU001[".printerPageOrientation"] = 0;
$tdataPMT_GYOUMU001[".nPrinterPageScale"] = 100;

$tdataPMT_GYOUMU001[".nPrinterSplitRecords"] = 40;

$tdataPMT_GYOUMU001[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_GYOUMU001[".geocodingEnabled"] = false;





$tdataPMT_GYOUMU001[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_GYOUMU001[".pageSize"] = 20;

$tdataPMT_GYOUMU001[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_GYOUMU001[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_GYOUMU001[".orderindexes"] = array();

$tdataPMT_GYOUMU001[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	E_LABEL,  	A_LABEL,  	B_LABEL,  	C_LABEL,  	D_LABEL,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_GYOUMU001[".sqlFrom"] = "FROM PMT_GYOUMU001";
$tdataPMT_GYOUMU001[".sqlWhereExpr"] = "";
$tdataPMT_GYOUMU001[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_GYOUMU001[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_GYOUMU001[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_GYOUMU001[".highlightSearchResults"] = true;

$tableKeysPMT_GYOUMU001 = array();
$tableKeysPMT_GYOUMU001[] = "APP_UID";
$tdataPMT_GYOUMU001[".Keys"] = $tableKeysPMT_GYOUMU001;

$tdataPMT_GYOUMU001[".listFields"] = array();
$tdataPMT_GYOUMU001[".listFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".listFields"][] = "A";
$tdataPMT_GYOUMU001[".listFields"][] = "B";
$tdataPMT_GYOUMU001[".listFields"][] = "C";
$tdataPMT_GYOUMU001[".listFields"][] = "D";
$tdataPMT_GYOUMU001[".listFields"][] = "E";
$tdataPMT_GYOUMU001[".listFields"][] = "F";
$tdataPMT_GYOUMU001[".listFields"][] = "G";
$tdataPMT_GYOUMU001[".listFields"][] = "H";
$tdataPMT_GYOUMU001[".listFields"][] = "I";
$tdataPMT_GYOUMU001[".listFields"][] = "J";
$tdataPMT_GYOUMU001[".listFields"][] = "K";
$tdataPMT_GYOUMU001[".listFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".listFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".listFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".listFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".listFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".listFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".listFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".listFields"][] = "ROW";
$tdataPMT_GYOUMU001[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".listFields"][] = "TIME";
$tdataPMT_GYOUMU001[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".hideMobileList"] = array();


$tdataPMT_GYOUMU001[".viewFields"] = array();
$tdataPMT_GYOUMU001[".viewFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".viewFields"][] = "A";
$tdataPMT_GYOUMU001[".viewFields"][] = "B";
$tdataPMT_GYOUMU001[".viewFields"][] = "C";
$tdataPMT_GYOUMU001[".viewFields"][] = "D";
$tdataPMT_GYOUMU001[".viewFields"][] = "E";
$tdataPMT_GYOUMU001[".viewFields"][] = "F";
$tdataPMT_GYOUMU001[".viewFields"][] = "G";
$tdataPMT_GYOUMU001[".viewFields"][] = "H";
$tdataPMT_GYOUMU001[".viewFields"][] = "I";
$tdataPMT_GYOUMU001[".viewFields"][] = "J";
$tdataPMT_GYOUMU001[".viewFields"][] = "K";
$tdataPMT_GYOUMU001[".viewFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".viewFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".viewFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".viewFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".viewFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".viewFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".viewFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".viewFields"][] = "ROW";
$tdataPMT_GYOUMU001[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".viewFields"][] = "TIME";
$tdataPMT_GYOUMU001[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".addFields"] = array();
$tdataPMT_GYOUMU001[".addFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".addFields"][] = "A";
$tdataPMT_GYOUMU001[".addFields"][] = "B";
$tdataPMT_GYOUMU001[".addFields"][] = "C";
$tdataPMT_GYOUMU001[".addFields"][] = "D";
$tdataPMT_GYOUMU001[".addFields"][] = "E";
$tdataPMT_GYOUMU001[".addFields"][] = "F";
$tdataPMT_GYOUMU001[".addFields"][] = "G";
$tdataPMT_GYOUMU001[".addFields"][] = "H";
$tdataPMT_GYOUMU001[".addFields"][] = "I";
$tdataPMT_GYOUMU001[".addFields"][] = "J";
$tdataPMT_GYOUMU001[".addFields"][] = "K";
$tdataPMT_GYOUMU001[".addFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".addFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".addFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".addFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".addFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".addFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".addFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".addFields"][] = "ROW";
$tdataPMT_GYOUMU001[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".addFields"][] = "TIME";
$tdataPMT_GYOUMU001[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".masterListFields"] = array();
$tdataPMT_GYOUMU001[".masterListFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".masterListFields"][] = "A";
$tdataPMT_GYOUMU001[".masterListFields"][] = "B";
$tdataPMT_GYOUMU001[".masterListFields"][] = "C";
$tdataPMT_GYOUMU001[".masterListFields"][] = "D";
$tdataPMT_GYOUMU001[".masterListFields"][] = "E";
$tdataPMT_GYOUMU001[".masterListFields"][] = "F";
$tdataPMT_GYOUMU001[".masterListFields"][] = "G";
$tdataPMT_GYOUMU001[".masterListFields"][] = "H";
$tdataPMT_GYOUMU001[".masterListFields"][] = "I";
$tdataPMT_GYOUMU001[".masterListFields"][] = "J";
$tdataPMT_GYOUMU001[".masterListFields"][] = "K";
$tdataPMT_GYOUMU001[".masterListFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".masterListFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".masterListFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".masterListFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".masterListFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".masterListFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".masterListFields"][] = "ROW";
$tdataPMT_GYOUMU001[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".masterListFields"][] = "TIME";
$tdataPMT_GYOUMU001[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".inlineAddFields"] = array();
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "A";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "B";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "C";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "D";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "E";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "F";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "G";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "H";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "I";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "J";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "K";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "ROW";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "TIME";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".editFields"] = array();
$tdataPMT_GYOUMU001[".editFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".editFields"][] = "A";
$tdataPMT_GYOUMU001[".editFields"][] = "B";
$tdataPMT_GYOUMU001[".editFields"][] = "C";
$tdataPMT_GYOUMU001[".editFields"][] = "D";
$tdataPMT_GYOUMU001[".editFields"][] = "E";
$tdataPMT_GYOUMU001[".editFields"][] = "F";
$tdataPMT_GYOUMU001[".editFields"][] = "G";
$tdataPMT_GYOUMU001[".editFields"][] = "H";
$tdataPMT_GYOUMU001[".editFields"][] = "I";
$tdataPMT_GYOUMU001[".editFields"][] = "J";
$tdataPMT_GYOUMU001[".editFields"][] = "K";
$tdataPMT_GYOUMU001[".editFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".editFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".editFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".editFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".editFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".editFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".editFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".editFields"][] = "ROW";
$tdataPMT_GYOUMU001[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".editFields"][] = "TIME";
$tdataPMT_GYOUMU001[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".inlineEditFields"] = array();
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "A";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "B";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "C";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "D";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "E";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "F";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "G";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "H";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "I";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "J";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "K";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "ROW";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "TIME";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".updateSelectedFields"] = array();
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "A";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "B";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "C";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "D";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "E";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "F";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "G";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "H";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "I";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "J";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "K";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "ROW";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "TIME";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_GYOUMU001[".exportFields"] = array();
$tdataPMT_GYOUMU001[".exportFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".exportFields"][] = "A";
$tdataPMT_GYOUMU001[".exportFields"][] = "B";
$tdataPMT_GYOUMU001[".exportFields"][] = "C";
$tdataPMT_GYOUMU001[".exportFields"][] = "D";
$tdataPMT_GYOUMU001[".exportFields"][] = "E";
$tdataPMT_GYOUMU001[".exportFields"][] = "F";
$tdataPMT_GYOUMU001[".exportFields"][] = "G";
$tdataPMT_GYOUMU001[".exportFields"][] = "H";
$tdataPMT_GYOUMU001[".exportFields"][] = "I";
$tdataPMT_GYOUMU001[".exportFields"][] = "J";
$tdataPMT_GYOUMU001[".exportFields"][] = "K";
$tdataPMT_GYOUMU001[".exportFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".exportFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".exportFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".exportFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".exportFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".exportFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".exportFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".exportFields"][] = "ROW";
$tdataPMT_GYOUMU001[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".exportFields"][] = "TIME";
$tdataPMT_GYOUMU001[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".importFields"] = array();
$tdataPMT_GYOUMU001[".importFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".importFields"][] = "A";
$tdataPMT_GYOUMU001[".importFields"][] = "B";
$tdataPMT_GYOUMU001[".importFields"][] = "C";
$tdataPMT_GYOUMU001[".importFields"][] = "D";
$tdataPMT_GYOUMU001[".importFields"][] = "E";
$tdataPMT_GYOUMU001[".importFields"][] = "F";
$tdataPMT_GYOUMU001[".importFields"][] = "G";
$tdataPMT_GYOUMU001[".importFields"][] = "H";
$tdataPMT_GYOUMU001[".importFields"][] = "I";
$tdataPMT_GYOUMU001[".importFields"][] = "J";
$tdataPMT_GYOUMU001[".importFields"][] = "K";
$tdataPMT_GYOUMU001[".importFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".importFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".importFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".importFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".importFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".importFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".importFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".importFields"][] = "ROW";
$tdataPMT_GYOUMU001[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".importFields"][] = "TIME";
$tdataPMT_GYOUMU001[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_GYOUMU001[".printFields"] = array();
$tdataPMT_GYOUMU001[".printFields"][] = "APP_UID";
$tdataPMT_GYOUMU001[".printFields"][] = "A";
$tdataPMT_GYOUMU001[".printFields"][] = "B";
$tdataPMT_GYOUMU001[".printFields"][] = "C";
$tdataPMT_GYOUMU001[".printFields"][] = "D";
$tdataPMT_GYOUMU001[".printFields"][] = "E";
$tdataPMT_GYOUMU001[".printFields"][] = "F";
$tdataPMT_GYOUMU001[".printFields"][] = "G";
$tdataPMT_GYOUMU001[".printFields"][] = "H";
$tdataPMT_GYOUMU001[".printFields"][] = "I";
$tdataPMT_GYOUMU001[".printFields"][] = "J";
$tdataPMT_GYOUMU001[".printFields"][] = "K";
$tdataPMT_GYOUMU001[".printFields"][] = "E_LABEL";
$tdataPMT_GYOUMU001[".printFields"][] = "A_LABEL";
$tdataPMT_GYOUMU001[".printFields"][] = "B_LABEL";
$tdataPMT_GYOUMU001[".printFields"][] = "C_LABEL";
$tdataPMT_GYOUMU001[".printFields"][] = "D_LABEL";
$tdataPMT_GYOUMU001[".printFields"][] = "APP_NUMBER";
$tdataPMT_GYOUMU001[".printFields"][] = "APP_STATUS";
$tdataPMT_GYOUMU001[".printFields"][] = "ROW";
$tdataPMT_GYOUMU001[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_GYOUMU001[".printFields"][] = "TIME";
$tdataPMT_GYOUMU001[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_GYOUMU001[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_GYOUMU001[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_GYOUMU001[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","APP_UID");
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




	$tdataPMT_GYOUMU001["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","A");
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




	$tdataPMT_GYOUMU001["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","B");
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




	$tdataPMT_GYOUMU001["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","C");
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




	$tdataPMT_GYOUMU001["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","D");
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




	$tdataPMT_GYOUMU001["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","E");
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




	$tdataPMT_GYOUMU001["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","F");
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




	$tdataPMT_GYOUMU001["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","G");
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




	$tdataPMT_GYOUMU001["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","H");
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




	$tdataPMT_GYOUMU001["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","I");
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




	$tdataPMT_GYOUMU001["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","J");
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




	$tdataPMT_GYOUMU001["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","K");
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




	$tdataPMT_GYOUMU001["K"] = $fdata;
//	E_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "E_LABEL";
	$fdata["GoodName"] = "E_LABEL";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","E_LABEL");
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




	$tdataPMT_GYOUMU001["E_LABEL"] = $fdata;
//	A_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "A_LABEL";
	$fdata["GoodName"] = "A_LABEL";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","A_LABEL");
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




	$tdataPMT_GYOUMU001["A_LABEL"] = $fdata;
//	B_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "B_LABEL";
	$fdata["GoodName"] = "B_LABEL";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","B_LABEL");
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




	$tdataPMT_GYOUMU001["B_LABEL"] = $fdata;
//	C_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "C_LABEL";
	$fdata["GoodName"] = "C_LABEL";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","C_LABEL");
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




	$tdataPMT_GYOUMU001["C_LABEL"] = $fdata;
//	D_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "D_LABEL";
	$fdata["GoodName"] = "D_LABEL";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","D_LABEL");
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




	$tdataPMT_GYOUMU001["D_LABEL"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","APP_NUMBER");
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




	$tdataPMT_GYOUMU001["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","APP_STATUS");
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




	$tdataPMT_GYOUMU001["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","ROW");
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




	$tdataPMT_GYOUMU001["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","EMPLOYEE_NO");
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




	$tdataPMT_GYOUMU001["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","TIME");
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




	$tdataPMT_GYOUMU001["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","MONTHLY_REPORT");
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




	$tdataPMT_GYOUMU001["MONTHLY_REPORT"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","BUSINESS_CONFIRMATION_17");
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




	$tdataPMT_GYOUMU001["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","BUSINESS_CONFIRMATION_18");
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




	$tdataPMT_GYOUMU001["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_GYOUMU001";
	$fdata["Label"] = GetFieldLabel("PMT_GYOUMU001","BUSINESS_CONFIRMATION_19");
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




	$tdataPMT_GYOUMU001["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_GYOUMU001"]=&$tdataPMT_GYOUMU001;
$field_labels["PMT_GYOUMU001"] = &$fieldLabelsPMT_GYOUMU001;
$fieldToolTips["PMT_GYOUMU001"] = &$fieldToolTipsPMT_GYOUMU001;
$placeHolders["PMT_GYOUMU001"] = &$placeHoldersPMT_GYOUMU001;
$page_titles["PMT_GYOUMU001"] = &$pageTitlesPMT_GYOUMU001;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_GYOUMU001"] = array();
//	PMT_SUBCONTRACTORS
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="PMT_SUBCONTRACTORS";
		$detailsParam["dOriginalTable"] = "PMT_SUBCONTRACTORS";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "PMT_SUBCONTRACTORS";
	$detailsParam["dCaptionTable"] = GetTableCaption("PMT_SUBCONTRACTORS");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["PMT_GYOUMU001"][$dIndex] = $detailsParam;

	
		$detailsTablesData["PMT_GYOUMU001"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["PMT_GYOUMU001"][$dIndex]["masterKeys"][]="APP_NUMBER";

				$detailsTablesData["PMT_GYOUMU001"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["PMT_GYOUMU001"][$dIndex]["detailKeys"][]="APP_NUMBER";

// tables which are master tables for current table (detail)
$masterTablesData["PMT_GYOUMU001"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_GYOUMU001()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	E_LABEL,  	A_LABEL,  	B_LABEL,  	C_LABEL,  	D_LABEL,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto0["m_strFrom"] = "FROM PMT_GYOUMU001";
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
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_GYOUMU001";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "PMT_GYOUMU001";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto10["m_sql"] = "B";
$proto10["m_srcTableName"] = "PMT_GYOUMU001";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto12["m_sql"] = "C";
$proto12["m_srcTableName"] = "PMT_GYOUMU001";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto14["m_sql"] = "D";
$proto14["m_srcTableName"] = "PMT_GYOUMU001";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto16["m_sql"] = "E";
$proto16["m_srcTableName"] = "PMT_GYOUMU001";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto18["m_sql"] = "F";
$proto18["m_srcTableName"] = "PMT_GYOUMU001";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto20["m_sql"] = "G";
$proto20["m_srcTableName"] = "PMT_GYOUMU001";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto22["m_sql"] = "H";
$proto22["m_srcTableName"] = "PMT_GYOUMU001";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto24["m_sql"] = "I";
$proto24["m_srcTableName"] = "PMT_GYOUMU001";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto26["m_sql"] = "J";
$proto26["m_srcTableName"] = "PMT_GYOUMU001";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto28["m_sql"] = "K";
$proto28["m_srcTableName"] = "PMT_GYOUMU001";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "E_LABEL",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto30["m_sql"] = "E_LABEL";
$proto30["m_srcTableName"] = "PMT_GYOUMU001";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "A_LABEL",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto32["m_sql"] = "A_LABEL";
$proto32["m_srcTableName"] = "PMT_GYOUMU001";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "B_LABEL",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto34["m_sql"] = "B_LABEL";
$proto34["m_srcTableName"] = "PMT_GYOUMU001";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "C_LABEL",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto36["m_sql"] = "C_LABEL";
$proto36["m_srcTableName"] = "PMT_GYOUMU001";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "D_LABEL",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto38["m_sql"] = "D_LABEL";
$proto38["m_srcTableName"] = "PMT_GYOUMU001";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto40["m_sql"] = "APP_NUMBER";
$proto40["m_srcTableName"] = "PMT_GYOUMU001";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto42["m_sql"] = "APP_STATUS";
$proto42["m_srcTableName"] = "PMT_GYOUMU001";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto44["m_sql"] = "`ROW`";
$proto44["m_srcTableName"] = "PMT_GYOUMU001";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto46["m_sql"] = "EMPLOYEE_NO";
$proto46["m_srcTableName"] = "PMT_GYOUMU001";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto48["m_sql"] = "`TIME`";
$proto48["m_srcTableName"] = "PMT_GYOUMU001";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto50["m_sql"] = "MONTHLY_REPORT";
$proto50["m_srcTableName"] = "PMT_GYOUMU001";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto52["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto52["m_srcTableName"] = "PMT_GYOUMU001";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto54["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto54["m_srcTableName"] = "PMT_GYOUMU001";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_GYOUMU001",
	"m_srcTableName" => "PMT_GYOUMU001"
));

$proto56["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto56["m_srcTableName"] = "PMT_GYOUMU001";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_GYOUMU001";
$proto59["m_srcTableName"] = "PMT_GYOUMU001";
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
$proto58["m_sql"] = "PMT_GYOUMU001";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_GYOUMU001";
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
$proto0["m_srcTableName"]="PMT_GYOUMU001";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_GYOUMU001 = createSqlQuery_PMT_GYOUMU001();


	
						;

																										

$tdataPMT_GYOUMU001[".sqlquery"] = $queryData_PMT_GYOUMU001;

$tableEvents["PMT_GYOUMU001"] = new eventsBase;
$tdataPMT_GYOUMU001[".hasEvents"] = false;

?>
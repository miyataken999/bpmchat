<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_SITE_REGISTRATION = array();
	$tdataPMT_SITE_REGISTRATION[".truncateText"] = true;
	$tdataPMT_SITE_REGISTRATION[".NumberOfChars"] = 80;
	$tdataPMT_SITE_REGISTRATION[".ShortName"] = "PMT_SITE_REGISTRATION";
	$tdataPMT_SITE_REGISTRATION[".OwnerID"] = "";
	$tdataPMT_SITE_REGISTRATION[".OriginalTable"] = "PMT_SITE_REGISTRATION";

//	field labels
$fieldLabelsPMT_SITE_REGISTRATION = array();
$fieldToolTipsPMT_SITE_REGISTRATION = array();
$pageTitlesPMT_SITE_REGISTRATION = array();
$placeHoldersPMT_SITE_REGISTRATION = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"] = array();
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"] = array();
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"] = array();
	$pageTitlesPMT_SITE_REGISTRATION["Japanese"] = array();
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["APP_UID"] = "ユニークID";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["APP_UID"] = "数値";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["APP_UID"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["APP_NUMBER"] = "番号";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["APP_STATUS"] = "状態状態";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["APP_STATUS"] = "数値";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["ROW"] = "行";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["ROW"] = "[a-z]+";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["EMPLOYEE_NO"] = "登録画面";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["EMPLOYEE_NO"] = "数値";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["EMPLOYEE_NO"] = "yyyy-mm-dd";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["MONTHLY_REPORT"] = "100";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_17"] = "業務確認17";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_17"] = "リストボックス";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_17"] = "説明１";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_18"] = "業務確認18";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_18"] = "リストボックス";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_18"] = "説明１";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_19"] = "業務確認19";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_19"] = "リストボックス";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["BUSINESS_CONFIRMATION_19"] = "説明１";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["A"] = "A";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["A"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["A"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["B"] = "B";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["B"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["B"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["C"] = "C";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["C"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["C"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["D"] = "D";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["D"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["D"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["E"] = "E";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["E"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["E"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["F"] = "F";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["F"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["F"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["G"] = "G";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["G"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["G"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["H"] = "H";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["H"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["H"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["I"] = "I";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["I"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["I"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["J"] = "J";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["J"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["J"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["K"] = "K";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["K"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["K"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["L"] = "L";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["L"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["L"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["M"] = "M";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["M"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["M"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["N"] = "N";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["N"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["N"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["O"] = "O";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["O"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["O"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["Japanese"]["P"] = "P";
	$fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]["P"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["Japanese"]["P"] = "";
	if (count($fieldToolTipsPMT_SITE_REGISTRATION["Japanese"]))
		$tdataPMT_SITE_REGISTRATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_SITE_REGISTRATION["English"] = array();
	$fieldToolTipsPMT_SITE_REGISTRATION["English"] = array();
	$placeHoldersPMT_SITE_REGISTRATION["English"] = array();
	$pageTitlesPMT_SITE_REGISTRATION["English"] = array();
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["APP_UID"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["APP_UID"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["ROW"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["ROW"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["TIME"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["TIME"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["BUSINESS_CONFIRMATION_19"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["A"] = "A";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["A"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["A"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["B"] = "B";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["B"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["B"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["C"] = "C";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["C"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["C"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["D"] = "D";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["D"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["D"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["E"] = "E";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["E"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["E"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["F"] = "F";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["F"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["F"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["G"] = "G";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["G"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["G"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["H"] = "H";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["H"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["H"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["I"] = "I";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["I"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["I"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["J"] = "J";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["J"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["J"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["K"] = "K";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["K"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["K"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["L"] = "L";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["L"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["L"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["M"] = "M";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["M"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["M"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["N"] = "N";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["N"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["N"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["O"] = "O";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["O"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["O"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION["English"]["P"] = "P";
	$fieldToolTipsPMT_SITE_REGISTRATION["English"]["P"] = "";
	$placeHoldersPMT_SITE_REGISTRATION["English"]["P"] = "";
	if (count($fieldToolTipsPMT_SITE_REGISTRATION["English"]))
		$tdataPMT_SITE_REGISTRATION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_SITE_REGISTRATION[""] = array();
	$fieldToolTipsPMT_SITE_REGISTRATION[""] = array();
	$placeHoldersPMT_SITE_REGISTRATION[""] = array();
	$pageTitlesPMT_SITE_REGISTRATION[""] = array();
	$fieldLabelsPMT_SITE_REGISTRATION[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["APP_UID"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["APP_UID"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["APP_STATUS"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["ROW"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["ROW"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["TIME"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["TIME"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_17"] = "BUSINESS CONFIRMATION 17";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_17"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_17"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_18"] = "BUSINESS CONFIRMATION 18";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_18"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_18"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_19"] = "BUSINESS CONFIRMATION 19";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_19"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["BUSINESS_CONFIRMATION_19"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["A"] = "A";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["A"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["A"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["B"] = "B";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["B"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["B"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["C"] = "C";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["C"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["C"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["D"] = "D";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["D"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["D"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["E"] = "E";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["E"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["E"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["F"] = "F";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["F"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["F"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["G"] = "G";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["G"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["G"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["H"] = "H";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["H"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["H"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["I"] = "I";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["I"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["I"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["J"] = "J";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["J"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["J"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["K"] = "K";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["K"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["K"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["L"] = "L";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["L"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["L"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["M"] = "M";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["M"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["M"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["N"] = "N";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["N"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["N"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["O"] = "O";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["O"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["O"] = "";
	$fieldLabelsPMT_SITE_REGISTRATION[""]["P"] = "P";
	$fieldToolTipsPMT_SITE_REGISTRATION[""]["P"] = "";
	$placeHoldersPMT_SITE_REGISTRATION[""]["P"] = "";
	if (count($fieldToolTipsPMT_SITE_REGISTRATION[""]))
		$tdataPMT_SITE_REGISTRATION[".isUseToolTips"] = true;
}


	$tdataPMT_SITE_REGISTRATION[".NCSearch"] = true;



$tdataPMT_SITE_REGISTRATION[".shortTableName"] = "PMT_SITE_REGISTRATION";
$tdataPMT_SITE_REGISTRATION[".nSecOptions"] = 0;
$tdataPMT_SITE_REGISTRATION[".recsPerRowPrint"] = 1;
$tdataPMT_SITE_REGISTRATION[".mainTableOwnerID"] = "";
$tdataPMT_SITE_REGISTRATION[".moveNext"] = 1;
$tdataPMT_SITE_REGISTRATION[".entityType"] = 0;

$tdataPMT_SITE_REGISTRATION[".strOriginalTableName"] = "PMT_SITE_REGISTRATION";

	



$tdataPMT_SITE_REGISTRATION[".showAddInPopup"] = false;

$tdataPMT_SITE_REGISTRATION[".showEditInPopup"] = false;

$tdataPMT_SITE_REGISTRATION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_SITE_REGISTRATION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_SITE_REGISTRATION[".fieldsForRegister"] = array();
	
$tdataPMT_SITE_REGISTRATION[".listAjax"] = false;

	$tdataPMT_SITE_REGISTRATION[".audit"] = false;

	$tdataPMT_SITE_REGISTRATION[".locking"] = false;

$tdataPMT_SITE_REGISTRATION[".edit"] = true;
$tdataPMT_SITE_REGISTRATION[".afterEditAction"] = 1;
$tdataPMT_SITE_REGISTRATION[".closePopupAfterEdit"] = 1;
$tdataPMT_SITE_REGISTRATION[".afterEditActionDetTable"] = "";

$tdataPMT_SITE_REGISTRATION[".add"] = true;
$tdataPMT_SITE_REGISTRATION[".afterAddAction"] = 1;
$tdataPMT_SITE_REGISTRATION[".closePopupAfterAdd"] = 1;
$tdataPMT_SITE_REGISTRATION[".afterAddActionDetTable"] = "";

$tdataPMT_SITE_REGISTRATION[".list"] = true;



$tdataPMT_SITE_REGISTRATION[".reorderRecordsByHeader"] = true;



$tdataPMT_SITE_REGISTRATION[".view"] = true;

$tdataPMT_SITE_REGISTRATION[".import"] = true;

$tdataPMT_SITE_REGISTRATION[".exportTo"] = true;

$tdataPMT_SITE_REGISTRATION[".printFriendly"] = true;

$tdataPMT_SITE_REGISTRATION[".delete"] = true;

$tdataPMT_SITE_REGISTRATION[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_SITE_REGISTRATION[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_SITE_REGISTRATION[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_SITE_REGISTRATION[".searchSaving"] = false;
//

$tdataPMT_SITE_REGISTRATION[".showSearchPanel"] = true;
		$tdataPMT_SITE_REGISTRATION[".flexibleSearch"] = true;

$tdataPMT_SITE_REGISTRATION[".isUseAjaxSuggest"] = true;

$tdataPMT_SITE_REGISTRATION[".rowHighlite"] = true;



				

$tdataPMT_SITE_REGISTRATION[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_SITE_REGISTRATION[".buttonsAdded"] = false;

$tdataPMT_SITE_REGISTRATION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_SITE_REGISTRATION[".isUseTimeForSearch"] = false;





$tdataPMT_SITE_REGISTRATION[".allSearchFields"] = array();
$tdataPMT_SITE_REGISTRATION[".filterFields"] = array();
$tdataPMT_SITE_REGISTRATION[".requiredSearchFields"] = array();

$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "APP_UID";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "ROW";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "TIME";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "A";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "B";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "C";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "D";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "E";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "F";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "G";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "H";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "I";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "J";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "K";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "L";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "M";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "N";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "O";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "P";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "BUSINESS_CONFIRMATION_17";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "BUSINESS_CONFIRMATION_18";
	$tdataPMT_SITE_REGISTRATION[".allSearchFields"][] = "BUSINESS_CONFIRMATION_19";
	

$tdataPMT_SITE_REGISTRATION[".googleLikeFields"] = array();
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".googleLikeFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_SITE_REGISTRATION[".advSearchFields"] = array();
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".advSearchFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".tableType"] = "list";

$tdataPMT_SITE_REGISTRATION[".printerPageOrientation"] = 0;
$tdataPMT_SITE_REGISTRATION[".nPrinterPageScale"] = 100;

$tdataPMT_SITE_REGISTRATION[".nPrinterSplitRecords"] = 40;

$tdataPMT_SITE_REGISTRATION[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_SITE_REGISTRATION[".geocodingEnabled"] = false;





$tdataPMT_SITE_REGISTRATION[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_SITE_REGISTRATION[".pageSize"] = 20;

$tdataPMT_SITE_REGISTRATION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_SITE_REGISTRATION[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_SITE_REGISTRATION[".orderindexes"] = array();

$tdataPMT_SITE_REGISTRATION[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$tdataPMT_SITE_REGISTRATION[".sqlFrom"] = "FROM PMT_SITE_REGISTRATION";
$tdataPMT_SITE_REGISTRATION[".sqlWhereExpr"] = "";
$tdataPMT_SITE_REGISTRATION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_SITE_REGISTRATION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_SITE_REGISTRATION[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_SITE_REGISTRATION[".highlightSearchResults"] = true;

$tableKeysPMT_SITE_REGISTRATION = array();
$tableKeysPMT_SITE_REGISTRATION[] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".Keys"] = $tableKeysPMT_SITE_REGISTRATION;

$tdataPMT_SITE_REGISTRATION[".listFields"] = array();
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".listFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".hideMobileList"] = array();


$tdataPMT_SITE_REGISTRATION[".viewFields"] = array();
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".viewFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".addFields"] = array();
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".addFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".masterListFields"] = array();
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".masterListFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".inlineAddFields"] = array();
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".inlineAddFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".editFields"] = array();
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".editFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".inlineEditFields"] = array();
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".inlineEditFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"] = array();
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".updateSelectedFields"][] = "BUSINESS_CONFIRMATION_19";


$tdataPMT_SITE_REGISTRATION[".exportFields"] = array();
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".exportFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".importFields"] = array();
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".importFields"][] = "BUSINESS_CONFIRMATION_19";

$tdataPMT_SITE_REGISTRATION[".printFields"] = array();
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "APP_UID";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "APP_NUMBER";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "APP_STATUS";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "ROW";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "TIME";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "A";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "B";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "C";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "D";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "E";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "F";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "G";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "H";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "I";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "J";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "K";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "L";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "M";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "N";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "O";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "P";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "BUSINESS_CONFIRMATION_17";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "BUSINESS_CONFIRMATION_18";
$tdataPMT_SITE_REGISTRATION[".printFields"][] = "BUSINESS_CONFIRMATION_19";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","APP_UID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataPMT_SITE_REGISTRATION["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","APP_NUMBER");
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




	$tdataPMT_SITE_REGISTRATION["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","APP_STATUS");
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




	$tdataPMT_SITE_REGISTRATION["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","ROW");
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




	$tdataPMT_SITE_REGISTRATION["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","EMPLOYEE_NO");
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




	$tdataPMT_SITE_REGISTRATION["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","TIME");
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




	$tdataPMT_SITE_REGISTRATION["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","MONTHLY_REPORT");
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




	$tdataPMT_SITE_REGISTRATION["MONTHLY_REPORT"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","A");
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




	$tdataPMT_SITE_REGISTRATION["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","B");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "";

		$edata["Multiselect"] = true;

	
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




	$tdataPMT_SITE_REGISTRATION["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","C");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_SITE_REGISTRATION["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","D");
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

		$fdata["strField"] = "D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D";

	
	
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




	$tdataPMT_SITE_REGISTRATION["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","E");
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




	$tdataPMT_SITE_REGISTRATION["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","F");
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




	$tdataPMT_SITE_REGISTRATION["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","G");
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

		$fdata["strField"] = "G";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "G";

	
	
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




	$tdataPMT_SITE_REGISTRATION["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","H");
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




	$tdataPMT_SITE_REGISTRATION["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","I");
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




	$tdataPMT_SITE_REGISTRATION["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","J");
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




	$tdataPMT_SITE_REGISTRATION["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","K");
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




	$tdataPMT_SITE_REGISTRATION["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","L");
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

		$fdata["strField"] = "L";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "L";

	
	
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




	$tdataPMT_SITE_REGISTRATION["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","M");
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

		$fdata["strField"] = "M";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M";

	
	
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




	$tdataPMT_SITE_REGISTRATION["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","N");
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

		$fdata["strField"] = "N";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "N";

	
	
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




	$tdataPMT_SITE_REGISTRATION["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","O");
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

		$fdata["strField"] = "O";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O";

	
	
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




	$tdataPMT_SITE_REGISTRATION["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","P");
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

		$fdata["strField"] = "P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "P";

	
	
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




	$tdataPMT_SITE_REGISTRATION["P"] = $fdata;
//	BUSINESS_CONFIRMATION_17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_17";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","BUSINESS_CONFIRMATION_17");
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




	$tdataPMT_SITE_REGISTRATION["BUSINESS_CONFIRMATION_17"] = $fdata;
//	BUSINESS_CONFIRMATION_18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_18";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","BUSINESS_CONFIRMATION_18");
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




	$tdataPMT_SITE_REGISTRATION["BUSINESS_CONFIRMATION_18"] = $fdata;
//	BUSINESS_CONFIRMATION_19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["GoodName"] = "BUSINESS_CONFIRMATION_19";
	$fdata["ownerTable"] = "PMT_SITE_REGISTRATION";
	$fdata["Label"] = GetFieldLabel("PMT_SITE_REGISTRATION","BUSINESS_CONFIRMATION_19");
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




	$tdataPMT_SITE_REGISTRATION["BUSINESS_CONFIRMATION_19"] = $fdata;


$tables_data["PMT_SITE_REGISTRATION"]=&$tdataPMT_SITE_REGISTRATION;
$field_labels["PMT_SITE_REGISTRATION"] = &$fieldLabelsPMT_SITE_REGISTRATION;
$fieldToolTips["PMT_SITE_REGISTRATION"] = &$fieldToolTipsPMT_SITE_REGISTRATION;
$placeHolders["PMT_SITE_REGISTRATION"] = &$placeHoldersPMT_SITE_REGISTRATION;
$page_titles["PMT_SITE_REGISTRATION"] = &$pageTitlesPMT_SITE_REGISTRATION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_SITE_REGISTRATION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_SITE_REGISTRATION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_SITE_REGISTRATION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	BUSINESS_CONFIRMATION_17,  	BUSINESS_CONFIRMATION_18,  	BUSINESS_CONFIRMATION_19";
$proto0["m_strFrom"] = "FROM PMT_SITE_REGISTRATION";
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
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto14["m_sql"] = "EMPLOYEE_NO";
$proto14["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto16["m_sql"] = "`TIME`";
$proto16["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto18["m_sql"] = "MONTHLY_REPORT";
$proto18["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto20["m_sql"] = "A";
$proto20["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto22["m_sql"] = "B";
$proto22["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto24["m_sql"] = "C";
$proto24["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto26["m_sql"] = "D";
$proto26["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto28["m_sql"] = "E";
$proto28["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto30["m_sql"] = "F";
$proto30["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto32["m_sql"] = "G";
$proto32["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto34["m_sql"] = "H";
$proto34["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto36["m_sql"] = "I";
$proto36["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto38["m_sql"] = "J";
$proto38["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto40["m_sql"] = "K";
$proto40["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto42["m_sql"] = "L";
$proto42["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto44["m_sql"] = "M";
$proto44["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto46["m_sql"] = "N";
$proto46["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto48["m_sql"] = "O";
$proto48["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto50["m_sql"] = "P";
$proto50["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_17",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto52["m_sql"] = "BUSINESS_CONFIRMATION_17";
$proto52["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_18",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto54["m_sql"] = "BUSINESS_CONFIRMATION_18";
$proto54["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSINESS_CONFIRMATION_19",
	"m_strTable" => "PMT_SITE_REGISTRATION",
	"m_srcTableName" => "PMT_SITE_REGISTRATION"
));

$proto56["m_sql"] = "BUSINESS_CONFIRMATION_19";
$proto56["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_SITE_REGISTRATION";
$proto59["m_srcTableName"] = "PMT_SITE_REGISTRATION";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "APP_UID";
$proto59["m_columns"][] = "APP_NUMBER";
$proto59["m_columns"][] = "APP_STATUS";
$proto59["m_columns"][] = "ROW";
$proto59["m_columns"][] = "EMPLOYEE_NO";
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
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
$proto59["m_columns"][] = "L";
$proto59["m_columns"][] = "M";
$proto59["m_columns"][] = "N";
$proto59["m_columns"][] = "O";
$proto59["m_columns"][] = "P";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_17";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_18";
$proto59["m_columns"][] = "BUSINESS_CONFIRMATION_19";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_SITE_REGISTRATION";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_SITE_REGISTRATION";
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
$proto0["m_srcTableName"]="PMT_SITE_REGISTRATION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_SITE_REGISTRATION = createSqlQuery_PMT_SITE_REGISTRATION();


	
						;

																										

$tdataPMT_SITE_REGISTRATION[".sqlquery"] = $queryData_PMT_SITE_REGISTRATION;

$tableEvents["PMT_SITE_REGISTRATION"] = new eventsBase;
$tdataPMT_SITE_REGISTRATION[".hasEvents"] = false;

?>
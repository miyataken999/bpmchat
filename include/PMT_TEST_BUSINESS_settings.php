<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_TEST_BUSINESS = array();
	$tdataPMT_TEST_BUSINESS[".truncateText"] = true;
	$tdataPMT_TEST_BUSINESS[".NumberOfChars"] = 80;
	$tdataPMT_TEST_BUSINESS[".ShortName"] = "PMT_TEST_BUSINESS";
	$tdataPMT_TEST_BUSINESS[".OwnerID"] = "";
	$tdataPMT_TEST_BUSINESS[".OriginalTable"] = "PMT_TEST_BUSINESS";

//	field labels
$fieldLabelsPMT_TEST_BUSINESS = array();
$fieldToolTipsPMT_TEST_BUSINESS = array();
$pageTitlesPMT_TEST_BUSINESS = array();
$placeHoldersPMT_TEST_BUSINESS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"] = array();
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"] = array();
	$placeHoldersPMT_TEST_BUSINESS["Japanese"] = array();
	$pageTitlesPMT_TEST_BUSINESS["Japanese"] = array();
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["ROW"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["TIME"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["TIME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["PSEUDONYM_NAME"] = "PSEUDONYM NAME";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["PSEUDONYM_NAME"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["PSEUDONYM_NAME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["KANJI_NAME"] = "KANJI NAME";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["KANJI_NAME"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["KANJI_NAME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["EMPLOYMENT_CLASSIFICATION"] = "EMPLOYMENT CLASSIFICATION";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["EMPLOYMENT_CLASSIFICATION"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["EMPLOYMENT_CLASSIFICATION"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["ORDERING"] = "ORDERING";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["ORDERING"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["ORDERING"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["VENDOR_IDSAMPLE"] = "VENDOR IDSAMPLE";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["VENDOR_IDSAMPLE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["VENDOR_IDSAMPLE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["ORDER_DATE"] = "ORDER DATE";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["ORDER_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["ORDER_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["DESIRED_DELIVERY_DATE"] = "DESIRED DELIVERY DATE";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["DESIRED_DELIVERY_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["DESIRED_DELIVERY_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["REGISTRATION_DATE"] = "REGISTRATION DATE";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["REGISTRATION_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["REGISTRATION_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["WAREHOUSE_C"] = "WAREHOUSE C";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["WAREHOUSE_C"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["WAREHOUSE_C"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["SUMMARY"] = "SUMMARY";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["SUMMARY"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["SUMMARY"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER6"] = "OTHER6";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER6"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER6"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER7"] = "OTHER7";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER7"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER7"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER8"] = "OTHER8";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER8"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER8"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER9"] = "OTHER9";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER9"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER9"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER10"] = "OTHER10";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER10"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER10"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER11"] = "OTHER11";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER11"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER11"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER12"] = "OTHER12";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER12"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER12"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER13"] = "OTHER13";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER13"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER13"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["Japanese"]["OTHER14"] = "OTHER14";
	$fieldToolTipsPMT_TEST_BUSINESS["Japanese"]["OTHER14"] = "";
	$placeHoldersPMT_TEST_BUSINESS["Japanese"]["OTHER14"] = "";
	if (count($fieldToolTipsPMT_TEST_BUSINESS["Japanese"]))
		$tdataPMT_TEST_BUSINESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_TEST_BUSINESS["English"] = array();
	$fieldToolTipsPMT_TEST_BUSINESS["English"] = array();
	$placeHoldersPMT_TEST_BUSINESS["English"] = array();
	$pageTitlesPMT_TEST_BUSINESS["English"] = array();
	$fieldLabelsPMT_TEST_BUSINESS["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["APP_UID"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["ROW"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["ROW"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["TIME"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["TIME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["PSEUDONYM_NAME"] = "PSEUDONYM NAME";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["PSEUDONYM_NAME"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["PSEUDONYM_NAME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["KANJI_NAME"] = "KANJI NAME";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["KANJI_NAME"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["KANJI_NAME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["EMPLOYMENT_CLASSIFICATION"] = "EMPLOYMENT CLASSIFICATION";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["EMPLOYMENT_CLASSIFICATION"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["EMPLOYMENT_CLASSIFICATION"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["ORDERING"] = "ORDERING";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["ORDERING"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["ORDERING"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["VENDOR_IDSAMPLE"] = "VENDOR IDSAMPLE";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["VENDOR_IDSAMPLE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["VENDOR_IDSAMPLE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["ORDER_DATE"] = "ORDER DATE";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["ORDER_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["ORDER_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["DESIRED_DELIVERY_DATE"] = "DESIRED DELIVERY DATE";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["DESIRED_DELIVERY_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["DESIRED_DELIVERY_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["REGISTRATION_DATE"] = "REGISTRATION DATE";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["REGISTRATION_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["REGISTRATION_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["WAREHOUSE_C"] = "WAREHOUSE C";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["WAREHOUSE_C"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["WAREHOUSE_C"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["SUMMARY"] = "SUMMARY";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["SUMMARY"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["SUMMARY"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER6"] = "OTHER6";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER6"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER6"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER7"] = "OTHER7";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER7"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER7"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER8"] = "OTHER8";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER8"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER8"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER9"] = "OTHER9";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER9"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER9"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER10"] = "OTHER10";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER10"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER10"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER11"] = "OTHER11";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER11"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER11"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER12"] = "OTHER12";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER12"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER12"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER13"] = "OTHER13";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER13"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER13"] = "";
	$fieldLabelsPMT_TEST_BUSINESS["English"]["OTHER14"] = "OTHER14";
	$fieldToolTipsPMT_TEST_BUSINESS["English"]["OTHER14"] = "";
	$placeHoldersPMT_TEST_BUSINESS["English"]["OTHER14"] = "";
	if (count($fieldToolTipsPMT_TEST_BUSINESS["English"]))
		$tdataPMT_TEST_BUSINESS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_TEST_BUSINESS[""] = array();
	$fieldToolTipsPMT_TEST_BUSINESS[""] = array();
	$placeHoldersPMT_TEST_BUSINESS[""] = array();
	$pageTitlesPMT_TEST_BUSINESS[""] = array();
	$fieldLabelsPMT_TEST_BUSINESS[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["APP_UID"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["ROW"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["ROW"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["TIME"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["TIME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["PSEUDONYM_NAME"] = "PSEUDONYM NAME";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["PSEUDONYM_NAME"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["PSEUDONYM_NAME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["KANJI_NAME"] = "KANJI NAME";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["KANJI_NAME"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["KANJI_NAME"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["EMPLOYMENT_CLASSIFICATION"] = "EMPLOYMENT CLASSIFICATION";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["EMPLOYMENT_CLASSIFICATION"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["EMPLOYMENT_CLASSIFICATION"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["ORDERING"] = "ORDERING";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["ORDERING"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["ORDERING"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["VENDOR_IDSAMPLE"] = "VENDOR IDSAMPLE";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["VENDOR_IDSAMPLE"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["VENDOR_IDSAMPLE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["ORDER_DATE"] = "ORDER DATE";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["ORDER_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["ORDER_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["DESIRED_DELIVERY_DATE"] = "DESIRED DELIVERY DATE";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["DESIRED_DELIVERY_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["DESIRED_DELIVERY_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["REGISTRATION_DATE"] = "REGISTRATION DATE";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["REGISTRATION_DATE"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["REGISTRATION_DATE"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["WAREHOUSE_C"] = "WAREHOUSE C";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["WAREHOUSE_C"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["WAREHOUSE_C"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["SUMMARY"] = "SUMMARY";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["SUMMARY"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["SUMMARY"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER6"] = "OTHER6";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER6"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER6"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER7"] = "OTHER7";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER7"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER7"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER8"] = "OTHER8";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER8"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER8"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER9"] = "OTHER9";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER9"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER9"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER10"] = "OTHER10";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER10"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER10"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER11"] = "OTHER11";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER11"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER11"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER12"] = "OTHER12";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER12"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER12"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER13"] = "OTHER13";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER13"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER13"] = "";
	$fieldLabelsPMT_TEST_BUSINESS[""]["OTHER14"] = "OTHER14";
	$fieldToolTipsPMT_TEST_BUSINESS[""]["OTHER14"] = "";
	$placeHoldersPMT_TEST_BUSINESS[""]["OTHER14"] = "";
	if (count($fieldToolTipsPMT_TEST_BUSINESS[""]))
		$tdataPMT_TEST_BUSINESS[".isUseToolTips"] = true;
}


	$tdataPMT_TEST_BUSINESS[".NCSearch"] = true;



$tdataPMT_TEST_BUSINESS[".shortTableName"] = "PMT_TEST_BUSINESS";
$tdataPMT_TEST_BUSINESS[".nSecOptions"] = 0;
$tdataPMT_TEST_BUSINESS[".recsPerRowPrint"] = 1;
$tdataPMT_TEST_BUSINESS[".mainTableOwnerID"] = "";
$tdataPMT_TEST_BUSINESS[".moveNext"] = 1;
$tdataPMT_TEST_BUSINESS[".entityType"] = 0;

$tdataPMT_TEST_BUSINESS[".strOriginalTableName"] = "PMT_TEST_BUSINESS";

	



$tdataPMT_TEST_BUSINESS[".showAddInPopup"] = false;

$tdataPMT_TEST_BUSINESS[".showEditInPopup"] = false;

$tdataPMT_TEST_BUSINESS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_TEST_BUSINESS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_TEST_BUSINESS[".fieldsForRegister"] = array();
	
$tdataPMT_TEST_BUSINESS[".listAjax"] = false;

	$tdataPMT_TEST_BUSINESS[".audit"] = false;

	$tdataPMT_TEST_BUSINESS[".locking"] = false;

$tdataPMT_TEST_BUSINESS[".edit"] = true;
$tdataPMT_TEST_BUSINESS[".afterEditAction"] = 1;
$tdataPMT_TEST_BUSINESS[".closePopupAfterEdit"] = 1;
$tdataPMT_TEST_BUSINESS[".afterEditActionDetTable"] = "";

$tdataPMT_TEST_BUSINESS[".add"] = true;
$tdataPMT_TEST_BUSINESS[".afterAddAction"] = 1;
$tdataPMT_TEST_BUSINESS[".closePopupAfterAdd"] = 1;
$tdataPMT_TEST_BUSINESS[".afterAddActionDetTable"] = "";

$tdataPMT_TEST_BUSINESS[".list"] = true;



$tdataPMT_TEST_BUSINESS[".reorderRecordsByHeader"] = true;



$tdataPMT_TEST_BUSINESS[".view"] = true;

$tdataPMT_TEST_BUSINESS[".import"] = true;

$tdataPMT_TEST_BUSINESS[".exportTo"] = true;

$tdataPMT_TEST_BUSINESS[".printFriendly"] = true;

$tdataPMT_TEST_BUSINESS[".delete"] = true;

$tdataPMT_TEST_BUSINESS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_TEST_BUSINESS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_TEST_BUSINESS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_TEST_BUSINESS[".searchSaving"] = false;
//

$tdataPMT_TEST_BUSINESS[".showSearchPanel"] = true;
		$tdataPMT_TEST_BUSINESS[".flexibleSearch"] = true;

$tdataPMT_TEST_BUSINESS[".isUseAjaxSuggest"] = true;

$tdataPMT_TEST_BUSINESS[".rowHighlite"] = true;



				

$tdataPMT_TEST_BUSINESS[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_TEST_BUSINESS[".buttonsAdded"] = false;

$tdataPMT_TEST_BUSINESS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_TEST_BUSINESS[".isUseTimeForSearch"] = false;





$tdataPMT_TEST_BUSINESS[".allSearchFields"] = array();
$tdataPMT_TEST_BUSINESS[".filterFields"] = array();
$tdataPMT_TEST_BUSINESS[".requiredSearchFields"] = array();

$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "APP_UID";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "ROW";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "TIME";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "PSEUDONYM_NAME";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "KANJI_NAME";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "EMPLOYMENT_CLASSIFICATION";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "ORDERING";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "VENDOR_IDSAMPLE";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "ORDER_DATE";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "DESIRED_DELIVERY_DATE";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "REGISTRATION_DATE";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "WAREHOUSE_C";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "SUMMARY";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER6";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER7";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER8";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER9";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER10";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER11";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER12";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER13";
	$tdataPMT_TEST_BUSINESS[".allSearchFields"][] = "OTHER14";
	

$tdataPMT_TEST_BUSINESS[".googleLikeFields"] = array();
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".googleLikeFields"][] = "OTHER14";


$tdataPMT_TEST_BUSINESS[".advSearchFields"] = array();
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".advSearchFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".tableType"] = "list";

$tdataPMT_TEST_BUSINESS[".printerPageOrientation"] = 0;
$tdataPMT_TEST_BUSINESS[".nPrinterPageScale"] = 100;

$tdataPMT_TEST_BUSINESS[".nPrinterSplitRecords"] = 40;

$tdataPMT_TEST_BUSINESS[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_TEST_BUSINESS[".geocodingEnabled"] = false;





$tdataPMT_TEST_BUSINESS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_TEST_BUSINESS[".pageSize"] = 20;

$tdataPMT_TEST_BUSINESS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_TEST_BUSINESS[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_TEST_BUSINESS[".orderindexes"] = array();

$tdataPMT_TEST_BUSINESS[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	PSEUDONYM_NAME,  	KANJI_NAME,  	EMPLOYMENT_CLASSIFICATION,  	ORDERING,  	VENDOR_IDSAMPLE,  	ORDER_DATE,  	DESIRED_DELIVERY_DATE,  	REGISTRATION_DATE,  	WAREHOUSE_C,  	SUMMARY,  	OTHER6,  	OTHER7,  	OTHER8,  	OTHER9,  	OTHER10,  	OTHER11,  	OTHER12,  	OTHER13,  	OTHER14";
$tdataPMT_TEST_BUSINESS[".sqlFrom"] = "FROM PMT_TEST_BUSINESS";
$tdataPMT_TEST_BUSINESS[".sqlWhereExpr"] = "";
$tdataPMT_TEST_BUSINESS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_TEST_BUSINESS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_TEST_BUSINESS[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_TEST_BUSINESS[".highlightSearchResults"] = true;

$tableKeysPMT_TEST_BUSINESS = array();
$tableKeysPMT_TEST_BUSINESS[] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".Keys"] = $tableKeysPMT_TEST_BUSINESS;

$tdataPMT_TEST_BUSINESS[".listFields"] = array();
$tdataPMT_TEST_BUSINESS[".listFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".listFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".hideMobileList"] = array();


$tdataPMT_TEST_BUSINESS[".viewFields"] = array();
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".viewFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".addFields"] = array();
$tdataPMT_TEST_BUSINESS[".addFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".addFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".masterListFields"] = array();
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".masterListFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".inlineAddFields"] = array();
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".inlineAddFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".editFields"] = array();
$tdataPMT_TEST_BUSINESS[".editFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".editFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".inlineEditFields"] = array();
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".inlineEditFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".updateSelectedFields"] = array();
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".updateSelectedFields"][] = "OTHER14";


$tdataPMT_TEST_BUSINESS[".exportFields"] = array();
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".exportFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".importFields"] = array();
$tdataPMT_TEST_BUSINESS[".importFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".importFields"][] = "OTHER14";

$tdataPMT_TEST_BUSINESS[".printFields"] = array();
$tdataPMT_TEST_BUSINESS[".printFields"][] = "APP_UID";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "APP_NUMBER";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "APP_STATUS";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "ROW";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "TIME";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "PSEUDONYM_NAME";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "KANJI_NAME";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "EMPLOYMENT_CLASSIFICATION";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "ORDERING";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "VENDOR_IDSAMPLE";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "ORDER_DATE";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "DESIRED_DELIVERY_DATE";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "REGISTRATION_DATE";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "WAREHOUSE_C";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "SUMMARY";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER6";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER7";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER8";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER9";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER10";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER11";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER12";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER13";
$tdataPMT_TEST_BUSINESS[".printFields"][] = "OTHER14";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","APP_UID");
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




	$tdataPMT_TEST_BUSINESS["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","APP_NUMBER");
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




	$tdataPMT_TEST_BUSINESS["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","APP_STATUS");
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




	$tdataPMT_TEST_BUSINESS["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","ROW");
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




	$tdataPMT_TEST_BUSINESS["ROW"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","EMPLOYEE_NO");
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




	$tdataPMT_TEST_BUSINESS["EMPLOYEE_NO"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","TIME");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_TEST_BUSINESS["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","MONTHLY_REPORT");
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




	$tdataPMT_TEST_BUSINESS["MONTHLY_REPORT"] = $fdata;
//	PSEUDONYM_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PSEUDONYM_NAME";
	$fdata["GoodName"] = "PSEUDONYM_NAME";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","PSEUDONYM_NAME");
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

		$fdata["strField"] = "PSEUDONYM_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PSEUDONYM_NAME";

	
	
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




	$tdataPMT_TEST_BUSINESS["PSEUDONYM_NAME"] = $fdata;
//	KANJI_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "KANJI_NAME";
	$fdata["GoodName"] = "KANJI_NAME";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","KANJI_NAME");
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

		$fdata["strField"] = "KANJI_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KANJI_NAME";

	
	
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




	$tdataPMT_TEST_BUSINESS["KANJI_NAME"] = $fdata;
//	EMPLOYMENT_CLASSIFICATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EMPLOYMENT_CLASSIFICATION";
	$fdata["GoodName"] = "EMPLOYMENT_CLASSIFICATION";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","EMPLOYMENT_CLASSIFICATION");
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

		$fdata["strField"] = "EMPLOYMENT_CLASSIFICATION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMPLOYMENT_CLASSIFICATION";

	
	
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




	$tdataPMT_TEST_BUSINESS["EMPLOYMENT_CLASSIFICATION"] = $fdata;
//	ORDERING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ORDERING";
	$fdata["GoodName"] = "ORDERING";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","ORDERING");
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

		$fdata["strField"] = "ORDERING";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORDERING";

	
	
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




	$tdataPMT_TEST_BUSINESS["ORDERING"] = $fdata;
//	VENDOR_IDSAMPLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VENDOR_IDSAMPLE";
	$fdata["GoodName"] = "VENDOR_IDSAMPLE";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","VENDOR_IDSAMPLE");
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

		$fdata["strField"] = "VENDOR_IDSAMPLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VENDOR_IDSAMPLE";

	
	
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




	$tdataPMT_TEST_BUSINESS["VENDOR_IDSAMPLE"] = $fdata;
//	ORDER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ORDER_DATE";
	$fdata["GoodName"] = "ORDER_DATE";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","ORDER_DATE");
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

		$fdata["strField"] = "ORDER_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORDER_DATE";

	
	
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




	$tdataPMT_TEST_BUSINESS["ORDER_DATE"] = $fdata;
//	DESIRED_DELIVERY_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DESIRED_DELIVERY_DATE";
	$fdata["GoodName"] = "DESIRED_DELIVERY_DATE";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","DESIRED_DELIVERY_DATE");
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

		$fdata["strField"] = "DESIRED_DELIVERY_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESIRED_DELIVERY_DATE";

	
	
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




	$tdataPMT_TEST_BUSINESS["DESIRED_DELIVERY_DATE"] = $fdata;
//	REGISTRATION_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "REGISTRATION_DATE";
	$fdata["GoodName"] = "REGISTRATION_DATE";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","REGISTRATION_DATE");
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

		$fdata["strField"] = "REGISTRATION_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REGISTRATION_DATE";

	
	
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




	$tdataPMT_TEST_BUSINESS["REGISTRATION_DATE"] = $fdata;
//	WAREHOUSE_C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "WAREHOUSE_C";
	$fdata["GoodName"] = "WAREHOUSE_C";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","WAREHOUSE_C");
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

		$fdata["strField"] = "WAREHOUSE_C";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WAREHOUSE_C";

	
	
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




	$tdataPMT_TEST_BUSINESS["WAREHOUSE_C"] = $fdata;
//	SUMMARY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SUMMARY";
	$fdata["GoodName"] = "SUMMARY";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","SUMMARY");
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

		$fdata["strField"] = "SUMMARY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUMMARY";

	
	
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




	$tdataPMT_TEST_BUSINESS["SUMMARY"] = $fdata;
//	OTHER6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "OTHER6";
	$fdata["GoodName"] = "OTHER6";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER6");
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

		$fdata["strField"] = "OTHER6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER6";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER6"] = $fdata;
//	OTHER7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "OTHER7";
	$fdata["GoodName"] = "OTHER7";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER7");
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

		$fdata["strField"] = "OTHER7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER7";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER7"] = $fdata;
//	OTHER8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "OTHER8";
	$fdata["GoodName"] = "OTHER8";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER8");
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

		$fdata["strField"] = "OTHER8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER8";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER8"] = $fdata;
//	OTHER9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "OTHER9";
	$fdata["GoodName"] = "OTHER9";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER9");
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

		$fdata["strField"] = "OTHER9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER9";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER9"] = $fdata;
//	OTHER10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "OTHER10";
	$fdata["GoodName"] = "OTHER10";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER10");
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

		$fdata["strField"] = "OTHER10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER10";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER10"] = $fdata;
//	OTHER11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "OTHER11";
	$fdata["GoodName"] = "OTHER11";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER11");
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

		$fdata["strField"] = "OTHER11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER11";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER11"] = $fdata;
//	OTHER12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OTHER12";
	$fdata["GoodName"] = "OTHER12";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER12");
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

		$fdata["strField"] = "OTHER12";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER12";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER12"] = $fdata;
//	OTHER13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "OTHER13";
	$fdata["GoodName"] = "OTHER13";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER13");
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

		$fdata["strField"] = "OTHER13";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER13";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER13"] = $fdata;
//	OTHER14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "OTHER14";
	$fdata["GoodName"] = "OTHER14";
	$fdata["ownerTable"] = "PMT_TEST_BUSINESS";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_BUSINESS","OTHER14");
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

		$fdata["strField"] = "OTHER14";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OTHER14";

	
	
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




	$tdataPMT_TEST_BUSINESS["OTHER14"] = $fdata;


$tables_data["PMT_TEST_BUSINESS"]=&$tdataPMT_TEST_BUSINESS;
$field_labels["PMT_TEST_BUSINESS"] = &$fieldLabelsPMT_TEST_BUSINESS;
$fieldToolTips["PMT_TEST_BUSINESS"] = &$fieldToolTipsPMT_TEST_BUSINESS;
$placeHolders["PMT_TEST_BUSINESS"] = &$placeHoldersPMT_TEST_BUSINESS;
$page_titles["PMT_TEST_BUSINESS"] = &$pageTitlesPMT_TEST_BUSINESS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_TEST_BUSINESS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_TEST_BUSINESS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_TEST_BUSINESS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	EMPLOYEE_NO,  	`TIME`,  	MONTHLY_REPORT,  	PSEUDONYM_NAME,  	KANJI_NAME,  	EMPLOYMENT_CLASSIFICATION,  	ORDERING,  	VENDOR_IDSAMPLE,  	ORDER_DATE,  	DESIRED_DELIVERY_DATE,  	REGISTRATION_DATE,  	WAREHOUSE_C,  	SUMMARY,  	OTHER6,  	OTHER7,  	OTHER8,  	OTHER9,  	OTHER10,  	OTHER11,  	OTHER12,  	OTHER13,  	OTHER14";
$proto0["m_strFrom"] = "FROM PMT_TEST_BUSINESS";
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
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto14["m_sql"] = "EMPLOYEE_NO";
$proto14["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto16["m_sql"] = "`TIME`";
$proto16["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto18["m_sql"] = "MONTHLY_REPORT";
$proto18["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PSEUDONYM_NAME",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto20["m_sql"] = "PSEUDONYM_NAME";
$proto20["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "KANJI_NAME",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto22["m_sql"] = "KANJI_NAME";
$proto22["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYMENT_CLASSIFICATION",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto24["m_sql"] = "EMPLOYMENT_CLASSIFICATION";
$proto24["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDERING",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto26["m_sql"] = "ORDERING";
$proto26["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "VENDOR_IDSAMPLE",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto28["m_sql"] = "VENDOR_IDSAMPLE";
$proto28["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDER_DATE",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto30["m_sql"] = "ORDER_DATE";
$proto30["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DESIRED_DELIVERY_DATE",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto32["m_sql"] = "DESIRED_DELIVERY_DATE";
$proto32["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "REGISTRATION_DATE",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto34["m_sql"] = "REGISTRATION_DATE";
$proto34["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "WAREHOUSE_C",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto36["m_sql"] = "WAREHOUSE_C";
$proto36["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMMARY",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto38["m_sql"] = "SUMMARY";
$proto38["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER6",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto40["m_sql"] = "OTHER6";
$proto40["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER7",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto42["m_sql"] = "OTHER7";
$proto42["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER8",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto44["m_sql"] = "OTHER8";
$proto44["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER9",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto46["m_sql"] = "OTHER9";
$proto46["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER10",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto48["m_sql"] = "OTHER10";
$proto48["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER11",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto50["m_sql"] = "OTHER11";
$proto50["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER12",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto52["m_sql"] = "OTHER12";
$proto52["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER13",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto54["m_sql"] = "OTHER13";
$proto54["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "OTHER14",
	"m_strTable" => "PMT_TEST_BUSINESS",
	"m_srcTableName" => "PMT_TEST_BUSINESS"
));

$proto56["m_sql"] = "OTHER14";
$proto56["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_TEST_BUSINESS";
$proto59["m_srcTableName"] = "PMT_TEST_BUSINESS";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "APP_UID";
$proto59["m_columns"][] = "APP_NUMBER";
$proto59["m_columns"][] = "APP_STATUS";
$proto59["m_columns"][] = "ROW";
$proto59["m_columns"][] = "EMPLOYEE_NO";
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
$proto59["m_columns"][] = "PSEUDONYM_NAME";
$proto59["m_columns"][] = "KANJI_NAME";
$proto59["m_columns"][] = "EMPLOYMENT_CLASSIFICATION";
$proto59["m_columns"][] = "ORDERING";
$proto59["m_columns"][] = "VENDOR_IDSAMPLE";
$proto59["m_columns"][] = "ORDER_DATE";
$proto59["m_columns"][] = "DESIRED_DELIVERY_DATE";
$proto59["m_columns"][] = "REGISTRATION_DATE";
$proto59["m_columns"][] = "WAREHOUSE_C";
$proto59["m_columns"][] = "SUMMARY";
$proto59["m_columns"][] = "OTHER6";
$proto59["m_columns"][] = "OTHER7";
$proto59["m_columns"][] = "OTHER8";
$proto59["m_columns"][] = "OTHER9";
$proto59["m_columns"][] = "OTHER10";
$proto59["m_columns"][] = "OTHER11";
$proto59["m_columns"][] = "OTHER12";
$proto59["m_columns"][] = "OTHER13";
$proto59["m_columns"][] = "OTHER14";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_TEST_BUSINESS";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_TEST_BUSINESS";
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
$proto0["m_srcTableName"]="PMT_TEST_BUSINESS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_TEST_BUSINESS = createSqlQuery_PMT_TEST_BUSINESS();


	
						;

																										

$tdataPMT_TEST_BUSINESS[".sqlquery"] = $queryData_PMT_TEST_BUSINESS;

$tableEvents["PMT_TEST_BUSINESS"] = new eventsBase;
$tdataPMT_TEST_BUSINESS[".hasEvents"] = false;

?>
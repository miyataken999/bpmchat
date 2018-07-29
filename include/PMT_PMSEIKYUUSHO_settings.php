<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_PMSEIKYUUSHO = array();
	$tdataPMT_PMSEIKYUUSHO[".truncateText"] = true;
	$tdataPMT_PMSEIKYUUSHO[".NumberOfChars"] = 80;
	$tdataPMT_PMSEIKYUUSHO[".ShortName"] = "PMT_PMSEIKYUUSHO";
	$tdataPMT_PMSEIKYUUSHO[".OwnerID"] = "";
	$tdataPMT_PMSEIKYUUSHO[".OriginalTable"] = "PMT_PMSEIKYUUSHO";

//	field labels
$fieldLabelsPMT_PMSEIKYUUSHO = array();
$fieldToolTipsPMT_PMSEIKYUUSHO = array();
$pageTitlesPMT_PMSEIKYUUSHO = array();
$placeHoldersPMT_PMSEIKYUUSHO = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"] = array();
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"] = array();
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"] = array();
	$pageTitlesPMT_PMSEIKYUUSHO["Japanese"] = array();
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["AMOUNT_OF_MONEY"] = "AMOUNT OF MONEY";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["AMOUNT_OF_MONEY"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["AMOUNT_OF_MONEY"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["AMOUNT_OF_MONEY_LABEL"] = "AMOUNT OF MONEY LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["AMOUNT_OF_MONEY_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["AMOUNT_OF_MONEY_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["APP_NUMBER_LABEL"] = "APP NUMBER LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["APP_NUMBER_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["APP_NUMBER_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["APP_STATUS_LABEL"] = "APP STATUS LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["APP_STATUS_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["APP_STATUS_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["COMPANY"] = "COMPANY";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["COMPANY"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["COMPANY"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["COMPANY_LABEL"] = "COMPANY LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["COMPANY_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["COMPANY_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["CONSUMPTION_TAX"] = "CONSUMPTION TAX";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["CONSUMPTION_TAX"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["CONSUMPTION_TAX"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["CONSUMPTION_TAX_LABEL"] = "CONSUMPTION TAX LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["CONSUMPTION_TAX_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["CONSUMPTION_TAX_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["EMPLOYEE_NO_LABEL"] = "EMPLOYEE NO LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["EMPLOYEE_NO_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["EMPLOYEE_NO_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["MONTHLY_REPORT_LABEL"] = "MONTHLY REPORT LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["MONTHLY_REPORT_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["MONTHLY_REPORT_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["Japanese"]["NAME"] = "NAME";
	$fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]["NAME"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["Japanese"]["NAME"] = "";
	if (count($fieldToolTipsPMT_PMSEIKYUUSHO["Japanese"]))
		$tdataPMT_PMSEIKYUUSHO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_PMSEIKYUUSHO["English"] = array();
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"] = array();
	$placeHoldersPMT_PMSEIKYUUSHO["English"] = array();
	$pageTitlesPMT_PMSEIKYUUSHO["English"] = array();
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["APP_UID"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["APP_UID"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["AMOUNT_OF_MONEY"] = "AMOUNT OF MONEY";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["AMOUNT_OF_MONEY"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["AMOUNT_OF_MONEY"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["AMOUNT_OF_MONEY_LABEL"] = "AMOUNT OF MONEY LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["AMOUNT_OF_MONEY_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["AMOUNT_OF_MONEY_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["APP_NUMBER_LABEL"] = "APP NUMBER LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["APP_NUMBER_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["APP_NUMBER_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["APP_STATUS_LABEL"] = "APP STATUS LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["APP_STATUS_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["APP_STATUS_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["COMPANY"] = "COMPANY";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["COMPANY"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["COMPANY"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["COMPANY_LABEL"] = "COMPANY LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["COMPANY_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["COMPANY_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["CONSUMPTION_TAX"] = "CONSUMPTION TAX";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["CONSUMPTION_TAX"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["CONSUMPTION_TAX"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["CONSUMPTION_TAX_LABEL"] = "CONSUMPTION TAX LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["CONSUMPTION_TAX_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["CONSUMPTION_TAX_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["EMPLOYEE_NO_LABEL"] = "EMPLOYEE NO LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["EMPLOYEE_NO_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["EMPLOYEE_NO_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["MONTHLY_REPORT_LABEL"] = "MONTHLY REPORT LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["MONTHLY_REPORT_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["MONTHLY_REPORT_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO["English"]["NAME"] = "NAME";
	$fieldToolTipsPMT_PMSEIKYUUSHO["English"]["NAME"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO["English"]["NAME"] = "";
	if (count($fieldToolTipsPMT_PMSEIKYUUSHO["English"]))
		$tdataPMT_PMSEIKYUUSHO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_PMSEIKYUUSHO[""] = array();
	$fieldToolTipsPMT_PMSEIKYUUSHO[""] = array();
	$placeHoldersPMT_PMSEIKYUUSHO[""] = array();
	$pageTitlesPMT_PMSEIKYUUSHO[""] = array();
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["APP_UID"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["APP_UID"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["APP_STATUS"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["AMOUNT_OF_MONEY"] = "AMOUNT OF MONEY";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["AMOUNT_OF_MONEY"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["AMOUNT_OF_MONEY"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["AMOUNT_OF_MONEY_LABEL"] = "AMOUNT OF MONEY LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["AMOUNT_OF_MONEY_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["AMOUNT_OF_MONEY_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["APP_NUMBER_LABEL"] = "APP NUMBER LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["APP_NUMBER_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["APP_NUMBER_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["APP_STATUS_LABEL"] = "APP STATUS LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["APP_STATUS_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["APP_STATUS_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["COMPANY"] = "COMPANY";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["COMPANY"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["COMPANY"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["COMPANY_LABEL"] = "COMPANY LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["COMPANY_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["COMPANY_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["CONSUMPTION_TAX"] = "CONSUMPTION TAX";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["CONSUMPTION_TAX"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["CONSUMPTION_TAX"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["CONSUMPTION_TAX_LABEL"] = "CONSUMPTION TAX LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["CONSUMPTION_TAX_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["CONSUMPTION_TAX_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["EMPLOYEE_NO"] = "EMPLOYEE NO";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["EMPLOYEE_NO"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["EMPLOYEE_NO"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["EMPLOYEE_NO_LABEL"] = "EMPLOYEE NO LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["EMPLOYEE_NO_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["EMPLOYEE_NO_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["MONTHLY_REPORT"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["MONTHLY_REPORT_LABEL"] = "MONTHLY REPORT LABEL";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["MONTHLY_REPORT_LABEL"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["MONTHLY_REPORT_LABEL"] = "";
	$fieldLabelsPMT_PMSEIKYUUSHO[""]["NAME"] = "NAME";
	$fieldToolTipsPMT_PMSEIKYUUSHO[""]["NAME"] = "";
	$placeHoldersPMT_PMSEIKYUUSHO[""]["NAME"] = "";
	if (count($fieldToolTipsPMT_PMSEIKYUUSHO[""]))
		$tdataPMT_PMSEIKYUUSHO[".isUseToolTips"] = true;
}


	$tdataPMT_PMSEIKYUUSHO[".NCSearch"] = true;



$tdataPMT_PMSEIKYUUSHO[".shortTableName"] = "PMT_PMSEIKYUUSHO";
$tdataPMT_PMSEIKYUUSHO[".nSecOptions"] = 0;
$tdataPMT_PMSEIKYUUSHO[".recsPerRowPrint"] = 1;
$tdataPMT_PMSEIKYUUSHO[".mainTableOwnerID"] = "";
$tdataPMT_PMSEIKYUUSHO[".moveNext"] = 1;
$tdataPMT_PMSEIKYUUSHO[".entityType"] = 0;

$tdataPMT_PMSEIKYUUSHO[".strOriginalTableName"] = "PMT_PMSEIKYUUSHO";

	



$tdataPMT_PMSEIKYUUSHO[".showAddInPopup"] = false;

$tdataPMT_PMSEIKYUUSHO[".showEditInPopup"] = false;

$tdataPMT_PMSEIKYUUSHO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_PMSEIKYUUSHO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_PMSEIKYUUSHO[".fieldsForRegister"] = array();
	
$tdataPMT_PMSEIKYUUSHO[".listAjax"] = false;

	$tdataPMT_PMSEIKYUUSHO[".audit"] = false;

	$tdataPMT_PMSEIKYUUSHO[".locking"] = false;

$tdataPMT_PMSEIKYUUSHO[".edit"] = true;
$tdataPMT_PMSEIKYUUSHO[".afterEditAction"] = 1;
$tdataPMT_PMSEIKYUUSHO[".closePopupAfterEdit"] = 1;
$tdataPMT_PMSEIKYUUSHO[".afterEditActionDetTable"] = "";

$tdataPMT_PMSEIKYUUSHO[".add"] = true;
$tdataPMT_PMSEIKYUUSHO[".afterAddAction"] = 1;
$tdataPMT_PMSEIKYUUSHO[".closePopupAfterAdd"] = 1;
$tdataPMT_PMSEIKYUUSHO[".afterAddActionDetTable"] = "";

$tdataPMT_PMSEIKYUUSHO[".list"] = true;



$tdataPMT_PMSEIKYUUSHO[".reorderRecordsByHeader"] = true;



$tdataPMT_PMSEIKYUUSHO[".view"] = true;

$tdataPMT_PMSEIKYUUSHO[".import"] = true;

$tdataPMT_PMSEIKYUUSHO[".exportTo"] = true;

$tdataPMT_PMSEIKYUUSHO[".printFriendly"] = true;

$tdataPMT_PMSEIKYUUSHO[".delete"] = true;

$tdataPMT_PMSEIKYUUSHO[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_PMSEIKYUUSHO[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_PMSEIKYUUSHO[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_PMSEIKYUUSHO[".searchSaving"] = false;
//

$tdataPMT_PMSEIKYUUSHO[".showSearchPanel"] = true;
		$tdataPMT_PMSEIKYUUSHO[".flexibleSearch"] = true;

$tdataPMT_PMSEIKYUUSHO[".isUseAjaxSuggest"] = true;

$tdataPMT_PMSEIKYUUSHO[".rowHighlite"] = true;



				

$tdataPMT_PMSEIKYUUSHO[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_PMSEIKYUUSHO[".buttonsAdded"] = false;

$tdataPMT_PMSEIKYUUSHO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_PMSEIKYUUSHO[".isUseTimeForSearch"] = false;





$tdataPMT_PMSEIKYUUSHO[".allSearchFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".filterFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".requiredSearchFields"] = array();

$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "APP_UID";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "AMOUNT_OF_MONEY";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "AMOUNT_OF_MONEY_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "APP_NUMBER_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "APP_STATUS_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "COMPANY";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "COMPANY_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "CONSUMPTION_TAX";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "CONSUMPTION_TAX_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "EMPLOYEE_NO";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "EMPLOYEE_NO_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "MONTHLY_REPORT";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "MONTHLY_REPORT_LABEL";
	$tdataPMT_PMSEIKYUUSHO[".allSearchFields"][] = "NAME";
	

$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".googleLikeFields"][] = "NAME";


$tdataPMT_PMSEIKYUUSHO[".advSearchFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".advSearchFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".tableType"] = "list";

$tdataPMT_PMSEIKYUUSHO[".printerPageOrientation"] = 0;
$tdataPMT_PMSEIKYUUSHO[".nPrinterPageScale"] = 100;

$tdataPMT_PMSEIKYUUSHO[".nPrinterSplitRecords"] = 40;

$tdataPMT_PMSEIKYUUSHO[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_PMSEIKYUUSHO[".geocodingEnabled"] = false;





$tdataPMT_PMSEIKYUUSHO[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_PMSEIKYUUSHO[".pageSize"] = 20;

$tdataPMT_PMSEIKYUUSHO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_PMSEIKYUUSHO[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_PMSEIKYUUSHO[".orderindexes"] = array();

$tdataPMT_PMSEIKYUUSHO[".sqlHead"] = "SELECT APP_UID,  	APP_NUMBER,  	APP_STATUS,  	AMOUNT_OF_MONEY,  	AMOUNT_OF_MONEY_LABEL,  	APP_NUMBER_LABEL,  	APP_STATUS_LABEL,  	COMPANY,  	COMPANY_LABEL,  	CONSUMPTION_TAX,  	CONSUMPTION_TAX_LABEL,  	EMPLOYEE_NO,  	EMPLOYEE_NO_LABEL,  	MONTHLY_REPORT,  	MONTHLY_REPORT_LABEL,  	NAME";
$tdataPMT_PMSEIKYUUSHO[".sqlFrom"] = "FROM PMT_PMSEIKYUUSHO";
$tdataPMT_PMSEIKYUUSHO[".sqlWhereExpr"] = "";
$tdataPMT_PMSEIKYUUSHO[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_PMSEIKYUUSHO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_PMSEIKYUUSHO[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_PMSEIKYUUSHO[".highlightSearchResults"] = true;

$tableKeysPMT_PMSEIKYUUSHO = array();
$tableKeysPMT_PMSEIKYUUSHO[] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".Keys"] = $tableKeysPMT_PMSEIKYUUSHO;

$tdataPMT_PMSEIKYUUSHO[".listFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".listFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".hideMobileList"] = array();


$tdataPMT_PMSEIKYUUSHO[".viewFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".viewFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".addFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".addFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".masterListFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".masterListFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineAddFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".editFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".editFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".inlineEditFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".updateSelectedFields"][] = "NAME";


$tdataPMT_PMSEIKYUUSHO[".exportFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".exportFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".importFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".importFields"][] = "NAME";

$tdataPMT_PMSEIKYUUSHO[".printFields"] = array();
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "APP_UID";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "APP_NUMBER";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "APP_STATUS";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "AMOUNT_OF_MONEY";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "AMOUNT_OF_MONEY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "APP_NUMBER_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "APP_STATUS_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "COMPANY";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "COMPANY_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "CONSUMPTION_TAX";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "CONSUMPTION_TAX_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "EMPLOYEE_NO";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "EMPLOYEE_NO_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "MONTHLY_REPORT";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "MONTHLY_REPORT_LABEL";
$tdataPMT_PMSEIKYUUSHO[".printFields"][] = "NAME";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","APP_UID");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_PMSEIKYUUSHO["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","APP_NUMBER");
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




	$tdataPMT_PMSEIKYUUSHO["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","APP_STATUS");
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




	$tdataPMT_PMSEIKYUUSHO["APP_STATUS"] = $fdata;
//	AMOUNT_OF_MONEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AMOUNT_OF_MONEY";
	$fdata["GoodName"] = "AMOUNT_OF_MONEY";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","AMOUNT_OF_MONEY");
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

		$fdata["strField"] = "AMOUNT_OF_MONEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AMOUNT_OF_MONEY";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["AMOUNT_OF_MONEY"] = $fdata;
//	AMOUNT_OF_MONEY_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AMOUNT_OF_MONEY_LABEL";
	$fdata["GoodName"] = "AMOUNT_OF_MONEY_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","AMOUNT_OF_MONEY_LABEL");
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

		$fdata["strField"] = "AMOUNT_OF_MONEY_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AMOUNT_OF_MONEY_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["AMOUNT_OF_MONEY_LABEL"] = $fdata;
//	APP_NUMBER_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APP_NUMBER_LABEL";
	$fdata["GoodName"] = "APP_NUMBER_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","APP_NUMBER_LABEL");
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

		$fdata["strField"] = "APP_NUMBER_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_NUMBER_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["APP_NUMBER_LABEL"] = $fdata;
//	APP_STATUS_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "APP_STATUS_LABEL";
	$fdata["GoodName"] = "APP_STATUS_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","APP_STATUS_LABEL");
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

		$fdata["strField"] = "APP_STATUS_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APP_STATUS_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["APP_STATUS_LABEL"] = $fdata;
//	COMPANY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COMPANY";
	$fdata["GoodName"] = "COMPANY";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","COMPANY");
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

		$fdata["strField"] = "COMPANY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPANY";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["COMPANY"] = $fdata;
//	COMPANY_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "COMPANY_LABEL";
	$fdata["GoodName"] = "COMPANY_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","COMPANY_LABEL");
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

		$fdata["strField"] = "COMPANY_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPANY_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["COMPANY_LABEL"] = $fdata;
//	CONSUMPTION_TAX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CONSUMPTION_TAX";
	$fdata["GoodName"] = "CONSUMPTION_TAX";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","CONSUMPTION_TAX");
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

		$fdata["strField"] = "CONSUMPTION_TAX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSUMPTION_TAX";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["CONSUMPTION_TAX"] = $fdata;
//	CONSUMPTION_TAX_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CONSUMPTION_TAX_LABEL";
	$fdata["GoodName"] = "CONSUMPTION_TAX_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","CONSUMPTION_TAX_LABEL");
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

		$fdata["strField"] = "CONSUMPTION_TAX_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONSUMPTION_TAX_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["CONSUMPTION_TAX_LABEL"] = $fdata;
//	EMPLOYEE_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EMPLOYEE_NO";
	$fdata["GoodName"] = "EMPLOYEE_NO";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","EMPLOYEE_NO");
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




	$tdataPMT_PMSEIKYUUSHO["EMPLOYEE_NO"] = $fdata;
//	EMPLOYEE_NO_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EMPLOYEE_NO_LABEL";
	$fdata["GoodName"] = "EMPLOYEE_NO_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","EMPLOYEE_NO_LABEL");
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

		$fdata["strField"] = "EMPLOYEE_NO_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMPLOYEE_NO_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["EMPLOYEE_NO_LABEL"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","MONTHLY_REPORT");
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




	$tdataPMT_PMSEIKYUUSHO["MONTHLY_REPORT"] = $fdata;
//	MONTHLY_REPORT_LABEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "MONTHLY_REPORT_LABEL";
	$fdata["GoodName"] = "MONTHLY_REPORT_LABEL";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","MONTHLY_REPORT_LABEL");
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

		$fdata["strField"] = "MONTHLY_REPORT_LABEL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTHLY_REPORT_LABEL";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["MONTHLY_REPORT_LABEL"] = $fdata;
//	NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "NAME";
	$fdata["GoodName"] = "NAME";
	$fdata["ownerTable"] = "PMT_PMSEIKYUUSHO";
	$fdata["Label"] = GetFieldLabel("PMT_PMSEIKYUUSHO","NAME");
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

		$fdata["strField"] = "NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAME";

	
	
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




	$tdataPMT_PMSEIKYUUSHO["NAME"] = $fdata;


$tables_data["PMT_PMSEIKYUUSHO"]=&$tdataPMT_PMSEIKYUUSHO;
$field_labels["PMT_PMSEIKYUUSHO"] = &$fieldLabelsPMT_PMSEIKYUUSHO;
$fieldToolTips["PMT_PMSEIKYUUSHO"] = &$fieldToolTipsPMT_PMSEIKYUUSHO;
$placeHolders["PMT_PMSEIKYUUSHO"] = &$placeHoldersPMT_PMSEIKYUUSHO;
$page_titles["PMT_PMSEIKYUUSHO"] = &$pageTitlesPMT_PMSEIKYUUSHO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_PMSEIKYUUSHO"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_PMSEIKYUUSHO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_PMSEIKYUUSHO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	APP_NUMBER,  	APP_STATUS,  	AMOUNT_OF_MONEY,  	AMOUNT_OF_MONEY_LABEL,  	APP_NUMBER_LABEL,  	APP_STATUS_LABEL,  	COMPANY,  	COMPANY_LABEL,  	CONSUMPTION_TAX,  	CONSUMPTION_TAX_LABEL,  	EMPLOYEE_NO,  	EMPLOYEE_NO_LABEL,  	MONTHLY_REPORT,  	MONTHLY_REPORT_LABEL,  	NAME";
$proto0["m_strFrom"] = "FROM PMT_PMSEIKYUUSHO";
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
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto8["m_sql"] = "APP_NUMBER";
$proto8["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto10["m_sql"] = "APP_STATUS";
$proto10["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AMOUNT_OF_MONEY",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto12["m_sql"] = "AMOUNT_OF_MONEY";
$proto12["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AMOUNT_OF_MONEY_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto14["m_sql"] = "AMOUNT_OF_MONEY_LABEL";
$proto14["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto16["m_sql"] = "APP_NUMBER_LABEL";
$proto16["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto18["m_sql"] = "APP_STATUS_LABEL";
$proto18["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPANY",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto20["m_sql"] = "COMPANY";
$proto20["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPANY_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto22["m_sql"] = "COMPANY_LABEL";
$proto22["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSUMPTION_TAX",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto24["m_sql"] = "CONSUMPTION_TAX";
$proto24["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CONSUMPTION_TAX_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto26["m_sql"] = "CONSUMPTION_TAX_LABEL";
$proto26["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto28["m_sql"] = "EMPLOYEE_NO";
$proto28["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "EMPLOYEE_NO_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto30["m_sql"] = "EMPLOYEE_NO_LABEL";
$proto30["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto32["m_sql"] = "MONTHLY_REPORT";
$proto32["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT_LABEL",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto34["m_sql"] = "MONTHLY_REPORT_LABEL";
$proto34["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "NAME",
	"m_strTable" => "PMT_PMSEIKYUUSHO",
	"m_srcTableName" => "PMT_PMSEIKYUUSHO"
));

$proto36["m_sql"] = "NAME";
$proto36["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "PMT_PMSEIKYUUSHO";
$proto39["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "APP_UID";
$proto39["m_columns"][] = "APP_NUMBER";
$proto39["m_columns"][] = "APP_STATUS";
$proto39["m_columns"][] = "AMOUNT_OF_MONEY";
$proto39["m_columns"][] = "AMOUNT_OF_MONEY_LABEL";
$proto39["m_columns"][] = "APP_NUMBER_LABEL";
$proto39["m_columns"][] = "APP_STATUS_LABEL";
$proto39["m_columns"][] = "COMPANY";
$proto39["m_columns"][] = "COMPANY_LABEL";
$proto39["m_columns"][] = "CONSUMPTION_TAX";
$proto39["m_columns"][] = "CONSUMPTION_TAX_LABEL";
$proto39["m_columns"][] = "EMPLOYEE_NO";
$proto39["m_columns"][] = "EMPLOYEE_NO_LABEL";
$proto39["m_columns"][] = "MONTHLY_REPORT";
$proto39["m_columns"][] = "MONTHLY_REPORT_LABEL";
$proto39["m_columns"][] = "NAME";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "PMT_PMSEIKYUUSHO";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "PMT_PMSEIKYUUSHO";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PMT_PMSEIKYUUSHO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_PMSEIKYUUSHO = createSqlQuery_PMT_PMSEIKYUUSHO();


	
						;

																

$tdataPMT_PMSEIKYUUSHO[".sqlquery"] = $queryData_PMT_PMSEIKYUUSHO;

$tableEvents["PMT_PMSEIKYUUSHO"] = new eventsBase;
$tdataPMT_PMSEIKYUUSHO[".hasEvents"] = false;

?>
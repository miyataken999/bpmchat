<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_TEST_SCREEN = array();
	$tdataPMT_TEST_SCREEN[".truncateText"] = true;
	$tdataPMT_TEST_SCREEN[".NumberOfChars"] = 80;
	$tdataPMT_TEST_SCREEN[".ShortName"] = "PMT_TEST_SCREEN";
	$tdataPMT_TEST_SCREEN[".OwnerID"] = "";
	$tdataPMT_TEST_SCREEN[".OriginalTable"] = "PMT_TEST_SCREEN";

//	field labels
$fieldLabelsPMT_TEST_SCREEN = array();
$fieldToolTipsPMT_TEST_SCREEN = array();
$pageTitlesPMT_TEST_SCREEN = array();
$placeHoldersPMT_TEST_SCREEN = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_TEST_SCREEN["Japanese"] = array();
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"] = array();
	$placeHoldersPMT_TEST_SCREEN["Japanese"] = array();
	$pageTitlesPMT_TEST_SCREEN["Japanese"] = array();
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["APP_UID"] = "APP_UID";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["APP_UID"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["APP_UID"] = "おなまえ";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["A"] = "項目1";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["A"] = "テキストエリア";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["A"] = "たんとうぶ";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["B"] = "項目2";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["B"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["B"] = "みつもりばんごう";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["C"] = "項目3";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["C"] = "テキストエリア";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["C"] = " 0)	";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["D"] = "項目4";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["D"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["D"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["E"] = "項目5";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["E"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["E"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["F"] = "項目6";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["F"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["F"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["G"] = "項目7";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["G"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["G"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["H"] = "項目8";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["H"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["H"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["I"] = "項目9";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["I"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["I"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["J"] = "項目10";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["J"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["J"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["K"] = "項目11";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["K"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["K"] = " define-by-run programming style. With Eager Execution for TensorFlow enabled";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["L"] = "項目12";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["L"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["L"] = " concurrent data structures";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["M"] = "項目13";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["M"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["M"] = "説明１";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["N"] = "項目14";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["N"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["N"] = "説明１";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["O"] = "項目15";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["O"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["O"] = "[a-z]+";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["P"] = "項目16";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["P"] = "テキスト";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["P"] = "説明１";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["Q"] = "項目17";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["Q"] = "リストボックス";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["Q"] = "";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["R"] = "項目18";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["R"] = "リストボックス";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["R"] = "説明１";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["S"] = "項目19";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["S"] = "リストボックス";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["S"] = "説明１";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["T"] = "項目20";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["T"] = "テキストエリア";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["T"] = "[1-9]{0.12}";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["APP_NUMBER"] = "APP_NUMBER";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["APP_NUMBER"] = "数値";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["APP_NUMBER"] = "[1-9]{0.12}";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["APP_STATUS"] = "APP_STATUS";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["APP_STATUS"] = "テキストエリア";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["APP_STATUS"] = "[1-9]{0.12}";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["ROW"] = "数値";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["ROW"] = "yyyy-mm-dd";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["TIME"] = "数値";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["TIME"] = "説明１";
	$fieldLabelsPMT_TEST_SCREEN["Japanese"]["MONTHLY_REPORT"] = "MONTHLY_REPORT";
	$fieldToolTipsPMT_TEST_SCREEN["Japanese"]["MONTHLY_REPORT"] = "リストボックス";
	$placeHoldersPMT_TEST_SCREEN["Japanese"]["MONTHLY_REPORT"] = "説明１";
	if (count($fieldToolTipsPMT_TEST_SCREEN["Japanese"]))
		$tdataPMT_TEST_SCREEN[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_TEST_SCREEN["English"] = array();
	$fieldToolTipsPMT_TEST_SCREEN["English"] = array();
	$placeHoldersPMT_TEST_SCREEN["English"] = array();
	$pageTitlesPMT_TEST_SCREEN["English"] = array();
	$fieldLabelsPMT_TEST_SCREEN["English"]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["APP_UID"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["A"] = "A";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["A"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["A"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["B"] = "B";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["B"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["B"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["C"] = "C";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["C"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["C"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["D"] = "D";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["D"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["D"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["E"] = "E";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["E"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["E"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["F"] = "F";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["F"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["F"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["G"] = "G";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["G"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["G"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["H"] = "H";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["H"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["H"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["I"] = "I";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["I"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["I"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["J"] = "J";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["J"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["J"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["K"] = "K";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["K"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["K"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["L"] = "L";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["L"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["L"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["M"] = "M";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["M"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["M"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["N"] = "N";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["N"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["N"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["O"] = "O";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["O"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["O"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["P"] = "P";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["P"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["P"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["Q"] = "Q";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["Q"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["Q"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["R"] = "R";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["R"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["R"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["S"] = "S";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["S"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["S"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["T"] = "T";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["T"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["T"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["ROW"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["ROW"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["TIME"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["TIME"] = "";
	$fieldLabelsPMT_TEST_SCREEN["English"]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_SCREEN["English"]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_SCREEN["English"]["MONTHLY_REPORT"] = "";
	if (count($fieldToolTipsPMT_TEST_SCREEN["English"]))
		$tdataPMT_TEST_SCREEN[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_TEST_SCREEN[""] = array();
	$fieldToolTipsPMT_TEST_SCREEN[""] = array();
	$placeHoldersPMT_TEST_SCREEN[""] = array();
	$pageTitlesPMT_TEST_SCREEN[""] = array();
	$fieldLabelsPMT_TEST_SCREEN[""]["APP_UID"] = "APP UID";
	$fieldToolTipsPMT_TEST_SCREEN[""]["APP_UID"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["APP_UID"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["A"] = "A";
	$fieldToolTipsPMT_TEST_SCREEN[""]["A"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["A"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["B"] = "B";
	$fieldToolTipsPMT_TEST_SCREEN[""]["B"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["B"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["C"] = "C";
	$fieldToolTipsPMT_TEST_SCREEN[""]["C"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["C"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["D"] = "D";
	$fieldToolTipsPMT_TEST_SCREEN[""]["D"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["D"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["E"] = "E";
	$fieldToolTipsPMT_TEST_SCREEN[""]["E"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["E"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["F"] = "F";
	$fieldToolTipsPMT_TEST_SCREEN[""]["F"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["F"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["G"] = "G";
	$fieldToolTipsPMT_TEST_SCREEN[""]["G"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["G"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["H"] = "H";
	$fieldToolTipsPMT_TEST_SCREEN[""]["H"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["H"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["I"] = "I";
	$fieldToolTipsPMT_TEST_SCREEN[""]["I"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["I"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["J"] = "J";
	$fieldToolTipsPMT_TEST_SCREEN[""]["J"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["J"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["K"] = "K";
	$fieldToolTipsPMT_TEST_SCREEN[""]["K"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["K"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["L"] = "L";
	$fieldToolTipsPMT_TEST_SCREEN[""]["L"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["L"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["M"] = "M";
	$fieldToolTipsPMT_TEST_SCREEN[""]["M"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["M"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["N"] = "N";
	$fieldToolTipsPMT_TEST_SCREEN[""]["N"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["N"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["O"] = "O";
	$fieldToolTipsPMT_TEST_SCREEN[""]["O"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["O"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["P"] = "P";
	$fieldToolTipsPMT_TEST_SCREEN[""]["P"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["P"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["Q"] = "Q";
	$fieldToolTipsPMT_TEST_SCREEN[""]["Q"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["Q"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["R"] = "R";
	$fieldToolTipsPMT_TEST_SCREEN[""]["R"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["R"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["S"] = "S";
	$fieldToolTipsPMT_TEST_SCREEN[""]["S"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["S"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["T"] = "T";
	$fieldToolTipsPMT_TEST_SCREEN[""]["T"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["T"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_TEST_SCREEN[""]["APP_NUMBER"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["APP_NUMBER"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_TEST_SCREEN[""]["APP_STATUS"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["APP_STATUS"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["ROW"] = "ROW";
	$fieldToolTipsPMT_TEST_SCREEN[""]["ROW"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["ROW"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["TIME"] = "TIME";
	$fieldToolTipsPMT_TEST_SCREEN[""]["TIME"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["TIME"] = "";
	$fieldLabelsPMT_TEST_SCREEN[""]["MONTHLY_REPORT"] = "MONTHLY REPORT";
	$fieldToolTipsPMT_TEST_SCREEN[""]["MONTHLY_REPORT"] = "";
	$placeHoldersPMT_TEST_SCREEN[""]["MONTHLY_REPORT"] = "";
	if (count($fieldToolTipsPMT_TEST_SCREEN[""]))
		$tdataPMT_TEST_SCREEN[".isUseToolTips"] = true;
}


	$tdataPMT_TEST_SCREEN[".NCSearch"] = true;



$tdataPMT_TEST_SCREEN[".shortTableName"] = "PMT_TEST_SCREEN";
$tdataPMT_TEST_SCREEN[".nSecOptions"] = 0;
$tdataPMT_TEST_SCREEN[".recsPerRowPrint"] = 1;
$tdataPMT_TEST_SCREEN[".mainTableOwnerID"] = "";
$tdataPMT_TEST_SCREEN[".moveNext"] = 1;
$tdataPMT_TEST_SCREEN[".entityType"] = 0;

$tdataPMT_TEST_SCREEN[".strOriginalTableName"] = "PMT_TEST_SCREEN";

	



$tdataPMT_TEST_SCREEN[".showAddInPopup"] = false;

$tdataPMT_TEST_SCREEN[".showEditInPopup"] = false;

$tdataPMT_TEST_SCREEN[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_TEST_SCREEN[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_TEST_SCREEN[".fieldsForRegister"] = array();
	
$tdataPMT_TEST_SCREEN[".listAjax"] = false;

	$tdataPMT_TEST_SCREEN[".audit"] = false;

	$tdataPMT_TEST_SCREEN[".locking"] = false;

$tdataPMT_TEST_SCREEN[".edit"] = true;
$tdataPMT_TEST_SCREEN[".afterEditAction"] = 1;
$tdataPMT_TEST_SCREEN[".closePopupAfterEdit"] = 1;
$tdataPMT_TEST_SCREEN[".afterEditActionDetTable"] = "";

$tdataPMT_TEST_SCREEN[".add"] = true;
$tdataPMT_TEST_SCREEN[".afterAddAction"] = 1;
$tdataPMT_TEST_SCREEN[".closePopupAfterAdd"] = 1;
$tdataPMT_TEST_SCREEN[".afterAddActionDetTable"] = "";

$tdataPMT_TEST_SCREEN[".list"] = true;



$tdataPMT_TEST_SCREEN[".reorderRecordsByHeader"] = true;



$tdataPMT_TEST_SCREEN[".view"] = true;

$tdataPMT_TEST_SCREEN[".import"] = true;

$tdataPMT_TEST_SCREEN[".exportTo"] = true;

$tdataPMT_TEST_SCREEN[".printFriendly"] = true;

$tdataPMT_TEST_SCREEN[".delete"] = true;

$tdataPMT_TEST_SCREEN[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_TEST_SCREEN[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_TEST_SCREEN[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_TEST_SCREEN[".searchSaving"] = false;
//

$tdataPMT_TEST_SCREEN[".showSearchPanel"] = true;
		$tdataPMT_TEST_SCREEN[".flexibleSearch"] = true;

$tdataPMT_TEST_SCREEN[".isUseAjaxSuggest"] = true;

$tdataPMT_TEST_SCREEN[".rowHighlite"] = true;



				

$tdataPMT_TEST_SCREEN[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_TEST_SCREEN[".buttonsAdded"] = false;

$tdataPMT_TEST_SCREEN[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPMT_TEST_SCREEN[".isUseTimeForSearch"] = false;





$tdataPMT_TEST_SCREEN[".allSearchFields"] = array();
$tdataPMT_TEST_SCREEN[".filterFields"] = array();
$tdataPMT_TEST_SCREEN[".requiredSearchFields"] = array();

$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "APP_UID";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "A";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "B";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "C";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "D";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "E";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "F";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "G";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "H";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "I";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "J";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "K";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "L";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "M";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "N";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "O";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "P";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "Q";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "R";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "S";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "T";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "APP_NUMBER";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "APP_STATUS";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "ROW";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "TIME";
	$tdataPMT_TEST_SCREEN[".allSearchFields"][] = "MONTHLY_REPORT";
	

$tdataPMT_TEST_SCREEN[".googleLikeFields"] = array();
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "A";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "B";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "C";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "D";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "E";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "F";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "G";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "H";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "I";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "J";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "K";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "L";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "M";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "N";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "O";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "P";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "R";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "S";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "T";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".googleLikeFields"][] = "MONTHLY_REPORT";


$tdataPMT_TEST_SCREEN[".advSearchFields"] = array();
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "A";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "B";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "C";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "D";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "E";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "F";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "G";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "H";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "I";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "J";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "K";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "L";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "M";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "N";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "O";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "P";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "R";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "S";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "T";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".advSearchFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".tableType"] = "list";

$tdataPMT_TEST_SCREEN[".printerPageOrientation"] = 0;
$tdataPMT_TEST_SCREEN[".nPrinterPageScale"] = 100;

$tdataPMT_TEST_SCREEN[".nPrinterSplitRecords"] = 40;

$tdataPMT_TEST_SCREEN[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_TEST_SCREEN[".geocodingEnabled"] = false;





$tdataPMT_TEST_SCREEN[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPMT_TEST_SCREEN[".pageSize"] = 20;

$tdataPMT_TEST_SCREEN[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_TEST_SCREEN[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_TEST_SCREEN[".orderindexes"] = array();

$tdataPMT_TEST_SCREEN[".sqlHead"] = "SELECT APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	Q,  	R,  	S,  	T,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	`TIME`,  	MONTHLY_REPORT";
$tdataPMT_TEST_SCREEN[".sqlFrom"] = "FROM PMT_TEST_SCREEN";
$tdataPMT_TEST_SCREEN[".sqlWhereExpr"] = "";
$tdataPMT_TEST_SCREEN[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_TEST_SCREEN[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_TEST_SCREEN[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_TEST_SCREEN[".highlightSearchResults"] = true;

$tableKeysPMT_TEST_SCREEN = array();
$tableKeysPMT_TEST_SCREEN[] = "APP_UID";
$tdataPMT_TEST_SCREEN[".Keys"] = $tableKeysPMT_TEST_SCREEN;

$tdataPMT_TEST_SCREEN[".listFields"] = array();
$tdataPMT_TEST_SCREEN[".listFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".listFields"][] = "A";
$tdataPMT_TEST_SCREEN[".listFields"][] = "B";
$tdataPMT_TEST_SCREEN[".listFields"][] = "C";
$tdataPMT_TEST_SCREEN[".listFields"][] = "D";
$tdataPMT_TEST_SCREEN[".listFields"][] = "E";
$tdataPMT_TEST_SCREEN[".listFields"][] = "F";
$tdataPMT_TEST_SCREEN[".listFields"][] = "G";
$tdataPMT_TEST_SCREEN[".listFields"][] = "H";
$tdataPMT_TEST_SCREEN[".listFields"][] = "I";
$tdataPMT_TEST_SCREEN[".listFields"][] = "J";
$tdataPMT_TEST_SCREEN[".listFields"][] = "K";
$tdataPMT_TEST_SCREEN[".listFields"][] = "L";
$tdataPMT_TEST_SCREEN[".listFields"][] = "M";
$tdataPMT_TEST_SCREEN[".listFields"][] = "N";
$tdataPMT_TEST_SCREEN[".listFields"][] = "O";
$tdataPMT_TEST_SCREEN[".listFields"][] = "P";
$tdataPMT_TEST_SCREEN[".listFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".listFields"][] = "R";
$tdataPMT_TEST_SCREEN[".listFields"][] = "S";
$tdataPMT_TEST_SCREEN[".listFields"][] = "T";
$tdataPMT_TEST_SCREEN[".listFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".listFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".listFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".listFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".listFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".hideMobileList"] = array();


$tdataPMT_TEST_SCREEN[".viewFields"] = array();
$tdataPMT_TEST_SCREEN[".viewFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "A";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "B";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "C";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "D";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "E";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "F";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "G";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "H";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "I";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "J";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "K";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "L";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "M";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "N";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "O";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "P";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "R";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "S";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "T";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".viewFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".addFields"] = array();
$tdataPMT_TEST_SCREEN[".addFields"][] = "A";
$tdataPMT_TEST_SCREEN[".addFields"][] = "B";
$tdataPMT_TEST_SCREEN[".addFields"][] = "C";
$tdataPMT_TEST_SCREEN[".addFields"][] = "D";
$tdataPMT_TEST_SCREEN[".addFields"][] = "E";
$tdataPMT_TEST_SCREEN[".addFields"][] = "F";
$tdataPMT_TEST_SCREEN[".addFields"][] = "G";
$tdataPMT_TEST_SCREEN[".addFields"][] = "H";
$tdataPMT_TEST_SCREEN[".addFields"][] = "I";
$tdataPMT_TEST_SCREEN[".addFields"][] = "J";
$tdataPMT_TEST_SCREEN[".addFields"][] = "K";
$tdataPMT_TEST_SCREEN[".addFields"][] = "L";
$tdataPMT_TEST_SCREEN[".addFields"][] = "M";
$tdataPMT_TEST_SCREEN[".addFields"][] = "N";
$tdataPMT_TEST_SCREEN[".addFields"][] = "O";
$tdataPMT_TEST_SCREEN[".addFields"][] = "P";
$tdataPMT_TEST_SCREEN[".addFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".addFields"][] = "R";
$tdataPMT_TEST_SCREEN[".addFields"][] = "S";
$tdataPMT_TEST_SCREEN[".addFields"][] = "T";
$tdataPMT_TEST_SCREEN[".addFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".addFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".addFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".addFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".addFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".masterListFields"] = array();
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "A";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "B";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "C";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "D";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "E";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "F";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "G";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "H";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "I";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "J";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "K";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "L";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "M";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "N";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "O";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "P";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "R";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "S";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "T";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".masterListFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".inlineAddFields"] = array();
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "A";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "B";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "C";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "D";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "E";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "F";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "G";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "H";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "I";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "J";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "K";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "L";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "M";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "N";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "O";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "P";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "R";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "S";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "T";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".inlineAddFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".editFields"] = array();
$tdataPMT_TEST_SCREEN[".editFields"][] = "A";
$tdataPMT_TEST_SCREEN[".editFields"][] = "B";
$tdataPMT_TEST_SCREEN[".editFields"][] = "C";
$tdataPMT_TEST_SCREEN[".editFields"][] = "D";
$tdataPMT_TEST_SCREEN[".editFields"][] = "E";
$tdataPMT_TEST_SCREEN[".editFields"][] = "F";
$tdataPMT_TEST_SCREEN[".editFields"][] = "G";
$tdataPMT_TEST_SCREEN[".editFields"][] = "H";
$tdataPMT_TEST_SCREEN[".editFields"][] = "I";
$tdataPMT_TEST_SCREEN[".editFields"][] = "J";
$tdataPMT_TEST_SCREEN[".editFields"][] = "K";
$tdataPMT_TEST_SCREEN[".editFields"][] = "L";
$tdataPMT_TEST_SCREEN[".editFields"][] = "M";
$tdataPMT_TEST_SCREEN[".editFields"][] = "N";
$tdataPMT_TEST_SCREEN[".editFields"][] = "O";
$tdataPMT_TEST_SCREEN[".editFields"][] = "P";
$tdataPMT_TEST_SCREEN[".editFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".editFields"][] = "R";
$tdataPMT_TEST_SCREEN[".editFields"][] = "S";
$tdataPMT_TEST_SCREEN[".editFields"][] = "T";
$tdataPMT_TEST_SCREEN[".editFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".editFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".editFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".editFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".editFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".inlineEditFields"] = array();
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "A";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "B";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "C";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "D";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "E";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "F";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "G";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "H";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "I";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "J";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "K";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "L";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "M";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "N";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "O";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "P";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "R";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "S";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "T";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".inlineEditFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".updateSelectedFields"] = array();
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "A";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "B";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "C";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "D";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "E";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "F";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "G";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "H";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "I";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "J";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "K";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "L";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "M";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "N";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "O";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "P";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "R";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "S";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "T";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".updateSelectedFields"][] = "MONTHLY_REPORT";


$tdataPMT_TEST_SCREEN[".exportFields"] = array();
$tdataPMT_TEST_SCREEN[".exportFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "A";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "B";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "C";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "D";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "E";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "F";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "G";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "H";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "I";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "J";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "K";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "L";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "M";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "N";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "O";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "P";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "R";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "S";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "T";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".exportFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".importFields"] = array();
$tdataPMT_TEST_SCREEN[".importFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".importFields"][] = "A";
$tdataPMT_TEST_SCREEN[".importFields"][] = "B";
$tdataPMT_TEST_SCREEN[".importFields"][] = "C";
$tdataPMT_TEST_SCREEN[".importFields"][] = "D";
$tdataPMT_TEST_SCREEN[".importFields"][] = "E";
$tdataPMT_TEST_SCREEN[".importFields"][] = "F";
$tdataPMT_TEST_SCREEN[".importFields"][] = "G";
$tdataPMT_TEST_SCREEN[".importFields"][] = "H";
$tdataPMT_TEST_SCREEN[".importFields"][] = "I";
$tdataPMT_TEST_SCREEN[".importFields"][] = "J";
$tdataPMT_TEST_SCREEN[".importFields"][] = "K";
$tdataPMT_TEST_SCREEN[".importFields"][] = "L";
$tdataPMT_TEST_SCREEN[".importFields"][] = "M";
$tdataPMT_TEST_SCREEN[".importFields"][] = "N";
$tdataPMT_TEST_SCREEN[".importFields"][] = "O";
$tdataPMT_TEST_SCREEN[".importFields"][] = "P";
$tdataPMT_TEST_SCREEN[".importFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".importFields"][] = "R";
$tdataPMT_TEST_SCREEN[".importFields"][] = "S";
$tdataPMT_TEST_SCREEN[".importFields"][] = "T";
$tdataPMT_TEST_SCREEN[".importFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".importFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".importFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".importFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".importFields"][] = "MONTHLY_REPORT";

$tdataPMT_TEST_SCREEN[".printFields"] = array();
$tdataPMT_TEST_SCREEN[".printFields"][] = "APP_UID";
$tdataPMT_TEST_SCREEN[".printFields"][] = "A";
$tdataPMT_TEST_SCREEN[".printFields"][] = "B";
$tdataPMT_TEST_SCREEN[".printFields"][] = "C";
$tdataPMT_TEST_SCREEN[".printFields"][] = "D";
$tdataPMT_TEST_SCREEN[".printFields"][] = "E";
$tdataPMT_TEST_SCREEN[".printFields"][] = "F";
$tdataPMT_TEST_SCREEN[".printFields"][] = "G";
$tdataPMT_TEST_SCREEN[".printFields"][] = "H";
$tdataPMT_TEST_SCREEN[".printFields"][] = "I";
$tdataPMT_TEST_SCREEN[".printFields"][] = "J";
$tdataPMT_TEST_SCREEN[".printFields"][] = "K";
$tdataPMT_TEST_SCREEN[".printFields"][] = "L";
$tdataPMT_TEST_SCREEN[".printFields"][] = "M";
$tdataPMT_TEST_SCREEN[".printFields"][] = "N";
$tdataPMT_TEST_SCREEN[".printFields"][] = "O";
$tdataPMT_TEST_SCREEN[".printFields"][] = "P";
$tdataPMT_TEST_SCREEN[".printFields"][] = "Q";
$tdataPMT_TEST_SCREEN[".printFields"][] = "R";
$tdataPMT_TEST_SCREEN[".printFields"][] = "S";
$tdataPMT_TEST_SCREEN[".printFields"][] = "T";
$tdataPMT_TEST_SCREEN[".printFields"][] = "APP_NUMBER";
$tdataPMT_TEST_SCREEN[".printFields"][] = "APP_STATUS";
$tdataPMT_TEST_SCREEN[".printFields"][] = "ROW";
$tdataPMT_TEST_SCREEN[".printFields"][] = "TIME";
$tdataPMT_TEST_SCREEN[".printFields"][] = "MONTHLY_REPORT";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","APP_UID");
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




	$tdataPMT_TEST_SCREEN["APP_UID"] = $fdata;
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","A");
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




	$tdataPMT_TEST_SCREEN["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","B");
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




	$tdataPMT_TEST_SCREEN["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","C");
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




	$tdataPMT_TEST_SCREEN["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","D");
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




	$tdataPMT_TEST_SCREEN["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","E");
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




	$tdataPMT_TEST_SCREEN["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","F");
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




	$tdataPMT_TEST_SCREEN["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","G");
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




	$tdataPMT_TEST_SCREEN["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","H");
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




	$tdataPMT_TEST_SCREEN["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","I");
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




	$tdataPMT_TEST_SCREEN["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","J");
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




	$tdataPMT_TEST_SCREEN["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","K");
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




	$tdataPMT_TEST_SCREEN["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","L");
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




	$tdataPMT_TEST_SCREEN["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","M");
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




	$tdataPMT_TEST_SCREEN["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","N");
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




	$tdataPMT_TEST_SCREEN["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","O");
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




	$tdataPMT_TEST_SCREEN["O"] = $fdata;
//	P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "P";
	$fdata["GoodName"] = "P";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","P");
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




	$tdataPMT_TEST_SCREEN["P"] = $fdata;
//	Q
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Q";
	$fdata["GoodName"] = "Q";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","Q");
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

		$fdata["strField"] = "Q";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Q";

	
	
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




	$tdataPMT_TEST_SCREEN["Q"] = $fdata;
//	R
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "R";
	$fdata["GoodName"] = "R";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","R");
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

		$fdata["strField"] = "R";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "R";

	
	
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




	$tdataPMT_TEST_SCREEN["R"] = $fdata;
//	S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "S";
	$fdata["GoodName"] = "S";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","S");
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

		$fdata["strField"] = "S";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "S";

	
	
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




	$tdataPMT_TEST_SCREEN["S"] = $fdata;
//	T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "T";
	$fdata["GoodName"] = "T";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","T");
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

		$fdata["strField"] = "T";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "T";

	
	
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




	$tdataPMT_TEST_SCREEN["T"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","APP_NUMBER");
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




	$tdataPMT_TEST_SCREEN["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","APP_STATUS");
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




	$tdataPMT_TEST_SCREEN["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","ROW");
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




	$tdataPMT_TEST_SCREEN["ROW"] = $fdata;
//	TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TIME";
	$fdata["GoodName"] = "TIME";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","TIME");
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




	$tdataPMT_TEST_SCREEN["TIME"] = $fdata;
//	MONTHLY_REPORT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "MONTHLY_REPORT";
	$fdata["GoodName"] = "MONTHLY_REPORT";
	$fdata["ownerTable"] = "PMT_TEST_SCREEN";
	$fdata["Label"] = GetFieldLabel("PMT_TEST_SCREEN","MONTHLY_REPORT");
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




	$tdataPMT_TEST_SCREEN["MONTHLY_REPORT"] = $fdata;


$tables_data["PMT_TEST_SCREEN"]=&$tdataPMT_TEST_SCREEN;
$field_labels["PMT_TEST_SCREEN"] = &$fieldLabelsPMT_TEST_SCREEN;
$fieldToolTips["PMT_TEST_SCREEN"] = &$fieldToolTipsPMT_TEST_SCREEN;
$placeHolders["PMT_TEST_SCREEN"] = &$placeHoldersPMT_TEST_SCREEN;
$page_titles["PMT_TEST_SCREEN"] = &$pageTitlesPMT_TEST_SCREEN;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_TEST_SCREEN"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_TEST_SCREEN"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_TEST_SCREEN()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "APP_UID,  	A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O,  	P,  	Q,  	R,  	S,  	T,  	APP_NUMBER,  	APP_STATUS,  	`ROW`,  	`TIME`,  	MONTHLY_REPORT";
$proto0["m_strFrom"] = "FROM PMT_TEST_SCREEN";
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
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto6["m_sql"] = "APP_UID";
$proto6["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto10["m_sql"] = "B";
$proto10["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto12["m_sql"] = "C";
$proto12["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto14["m_sql"] = "D";
$proto14["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto16["m_sql"] = "E";
$proto16["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto18["m_sql"] = "F";
$proto18["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto20["m_sql"] = "G";
$proto20["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto22["m_sql"] = "H";
$proto22["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto24["m_sql"] = "I";
$proto24["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto26["m_sql"] = "J";
$proto26["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto28["m_sql"] = "K";
$proto28["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto30["m_sql"] = "L";
$proto30["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto32["m_sql"] = "M";
$proto32["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto34["m_sql"] = "N";
$proto34["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto36["m_sql"] = "O";
$proto36["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "P",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto38["m_sql"] = "P";
$proto38["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Q",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto40["m_sql"] = "Q";
$proto40["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "R",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto42["m_sql"] = "R";
$proto42["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "S",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto44["m_sql"] = "S";
$proto44["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "T",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto46["m_sql"] = "T";
$proto46["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto48["m_sql"] = "APP_NUMBER";
$proto48["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto50["m_sql"] = "APP_STATUS";
$proto50["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto52["m_sql"] = "`ROW`";
$proto52["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TIME",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto54["m_sql"] = "`TIME`";
$proto54["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHLY_REPORT",
	"m_strTable" => "PMT_TEST_SCREEN",
	"m_srcTableName" => "PMT_TEST_SCREEN"
));

$proto56["m_sql"] = "MONTHLY_REPORT";
$proto56["m_srcTableName"] = "PMT_TEST_SCREEN";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "PMT_TEST_SCREEN";
$proto59["m_srcTableName"] = "PMT_TEST_SCREEN";
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
$proto59["m_columns"][] = "L";
$proto59["m_columns"][] = "M";
$proto59["m_columns"][] = "N";
$proto59["m_columns"][] = "O";
$proto59["m_columns"][] = "P";
$proto59["m_columns"][] = "Q";
$proto59["m_columns"][] = "R";
$proto59["m_columns"][] = "S";
$proto59["m_columns"][] = "T";
$proto59["m_columns"][] = "APP_NUMBER";
$proto59["m_columns"][] = "APP_STATUS";
$proto59["m_columns"][] = "ROW";
$proto59["m_columns"][] = "TIME";
$proto59["m_columns"][] = "MONTHLY_REPORT";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "PMT_TEST_SCREEN";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "PMT_TEST_SCREEN";
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
$proto0["m_srcTableName"]="PMT_TEST_SCREEN";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_TEST_SCREEN = createSqlQuery_PMT_TEST_SCREEN();


	
						;

																										

$tdataPMT_TEST_SCREEN[".sqlquery"] = $queryData_PMT_TEST_SCREEN;

$tableEvents["PMT_TEST_SCREEN"] = new eventsBase;
$tdataPMT_TEST_SCREEN[".hasEvents"] = false;

?>